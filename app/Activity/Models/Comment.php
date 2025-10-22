<?php

namespace BookStack\Activity\Models;

use BookStack\App\Model;
use BookStack\Permissions\Models\JointPermission;
use BookStack\Permissions\PermissionApplicator;
use BookStack\Users\Models\HasCreatorAndUpdater;
use BookStack\Users\Models\OwnableInterface;
use BookStack\Util\HtmlContentFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property int      $id
 * @property string   $html
 * @property int|null $parent_id  - Relates to local_id, not id
 * @property int      $local_id
 * @property string   $commentable_type
 * @property int      $commentable_id
 * @property string   $content_ref
 * @property bool     $archived
 */
class Comment extends Model implements Loggable, OwnableInterface
{
    use HasFactory;
    use HasCreatorAndUpdater;

    protected $fillable = ['parent_id'];
    protected $hidden = ['html'];

    protected $casts = [
        'archived' => 'boolean',
    ];

    /**
     * Get the entity that this comment belongs to.
     */
    public function entity(): MorphTo
    {
        return $this->morphTo('entity');
    }

    /**
     * Get the parent comment this is in reply to (if existing).
     * @return BelongsTo<Comment, $this>
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'parent_id', 'local_id', 'parent')
            ->where('commentable_type', '=', $this->commentable_type)
            ->where('commentable_id', '=', $this->commentable_id);
    }

    /**
     * Check if a comment has been updated since creation.
     */
    public function isUpdated(): bool
    {
        return $this->updated_at->timestamp > $this->created_at->timestamp;
    }

    public function logDescriptor(): string
    {
        return "Comment #{$this->local_id} (ID: {$this->id}) for {$this->commentable_type} (ID: {$this->commentable_id})";
    }

    public function safeHtml(): string
    {
        return HtmlContentFilter::removeScriptsFromHtmlString($this->html ?? '');
    }

    public function jointPermissions(): HasMany
    {
        return $this->hasMany(JointPermission::class, 'entity_id', 'commentable_id')
            ->whereColumn('joint_permissions.entity_type', '=', 'comments.commentable_type');
    }

    /**
     * Scope the query to just the comments visible to the user based upon the
     * user visibility of what has been commented on.
     */
    public function scopeVisible(Builder $query): Builder
    {
        return app()->make(PermissionApplicator::class)
            ->restrictEntityRelationQuery($query, 'comments', 'commentable_id', 'commentable_type');
    }
}
