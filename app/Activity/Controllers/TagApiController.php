<?php

declare(strict_types=1);

namespace BookStack\Activity\Controllers;

use BookStack\Activity\TagRepo;
use BookStack\Http\ApiController;
use Illuminate\Http\JsonResponse;

class TagApiController extends ApiController
{
    public function __construct(
        protected TagRepo $tagRepo,
    ) {
    }

    /**
     * Get a list of tag names used in the system.
     * You'll only see results based on tags applied to content you have access to.
     * Only the name field can be used in filters.
     */
    public function listNames(): JsonResponse
    {
        $tagQuery = $this->tagRepo
            ->queryWithTotalsForApi('');

        return $this->apiListingResponse($tagQuery, [
            'name', 'values', 'usages', 'page_count', 'chapter_count', 'book_count', 'shelf_count',
        ], [], [
            'name'
        ]);
    }

    /**
     * Get a list of tag values used in the system, which have been used for the given tag name.
     * You'll only see results based on tags applied to content you have access to.
     * Only the value field can be used in filters.
     */
    public function listValues(string $name): JsonResponse
    {
        $tagQuery = $this->tagRepo
            ->queryWithTotalsForApi($name);

        return $this->apiListingResponse($tagQuery, [
            'name', 'value', 'usages', 'page_count', 'chapter_count', 'book_count', 'shelf_count',
        ], [], [
            'name', 'value',
        ]);
    }
}
