<?php

namespace BookStack\Entities\Tools;

use BookStack\Activity\Models\Tag;
use BookStack\Entities\Models\Chapter;
use BookStack\Entities\Models\Entity;
use BookStack\Entities\Models\EntityTable;
use BookStack\Entities\Models\Page;
use BookStack\Entities\Queries\EntityQueries;
use Illuminate\Database\Eloquent\Collection;

class EntityHydrator
{
    /**
     * @var EntityTable[] $entities
     */
    protected array $entities;

    protected bool $loadTags = false;
    protected bool $loadParents = false;

    public function __construct(array $entities, bool $loadTags = false, bool $loadParents = false)
    {
        $this->entities = $entities;
        $this->loadTags = $loadTags;
        $this->loadParents = $loadParents;
    }

    /**
     * Hydrate the entities of this hydrator to return a list of entities represented
     * in their original intended models.
     * @return Entity[]
     */
    public function hydrate(): array
    {
        $hydrated = [];

        foreach ($this->entities as $entity) {
            $data = $entity->toArray();
            $instance = Entity::instanceFromType($entity->type);

            if ($instance instanceof Page) {
                $data['text'] = $data['description'];
                unset($data['description']);
            }

            $instance->forceFill($data);
            $hydrated[] = $instance;
        }

        if ($this->loadTags) {
            $this->loadTagsIntoModels($hydrated);
        }

        if ($this->loadParents) {
            $this->loadParentsIntoModels($hydrated);
        }

        return $hydrated;
    }

    /**
     * @param Entity[] $entities
     */
    protected function loadTagsIntoModels(array $entities): void
    {
        $idsByType = [];
        $entityMap = [];
        foreach ($entities as $entity) {
            if (!isset($idsByType[$entity->type])) {
                $idsByType[$entity->type] = [];
            }
            $idsByType[$entity->type][] = $entity->id;
            $entityMap[$entity->type . ':' . $entity->id] = $entity;
        }

        $query = Tag::query();
        foreach ($idsByType as $type => $ids) {
            $query->orWhere(function ($query) use ($type, $ids) {
                $query->where('entity_type', '=', $type)
                    ->whereIn('entity_id', $ids);
            });
        }

        $tags = empty($idsByType) ? [] : $query->get()->all();
        $tagMap = [];
        foreach ($tags as $tag) {
            $key = $tag->entity_type . ':' . $tag->entity_id;
            if (!isset($tagMap[$key])) {
                $tagMap[$key] = [];
            }
            $tagMap[$key][] = $tag;
        }

        foreach ($entityMap as $key => $entity) {
            $entityTags = new Collection($tagMap[$key] ?? []);
            $entity->setRelation('tags', $entityTags);
        }
    }

    /**
     * @param Entity[] $entities
     */
    protected function loadParentsIntoModels(array $entities): void
    {
        $parentsByType = ['book' => [], 'chapter' => []];

        foreach ($entities as $entity) {
            if ($entity->getAttribute('book_id') !== null) {
                $parentsByType['book'][] = $entity->getAttribute('book_id');
            }
            if ($entity->getAttribute('chapter_id') !== null) {
                $parentsByType['chapter'][] = $entity->getAttribute('chapter_id');
            }
        }

        // TODO - Inject in?
        $queries = app()->make(EntityQueries::class);

        $parentQuery = $queries->visibleForList();
        $filtered = count($parentsByType['book']) > 0 || count($parentsByType['chapter']) > 0;
        $parentQuery = $parentQuery->where(function ($query) use ($parentsByType) {
            foreach ($parentsByType as $type => $ids) {
                if (count($ids) > 0) {
                    $query = $query->orWhere(function ($query) use ($type, $ids) {
                        $query->where('type', '=', $type)
                            ->whereIn('id', $ids);
                    });
                }
            }
        });

        $parents = $filtered ? (new EntityHydrator($parentQuery->get()->all()))->hydrate() : [];
        $parentMap = [];
        foreach ($parents as $parent) {
            $parentMap[$parent->type . ':' . $parent->id] = $parent;
        }

        foreach ($entities as $entity) {
            if ($entity instanceof Page || $entity instanceof Chapter) {
                $key = 'book:' . $entity->getAttribute('book_id');
                $entity->setRelation('book', $parentMap[$key] ?? null);
            }
            if ($entity instanceof Page) {
                $key = 'chapter:' . $entity->getAttribute('chapter_id');
                $entity->setRelation('chapter', $parentMap[$key] ?? null);
            }
        }
    }
}
