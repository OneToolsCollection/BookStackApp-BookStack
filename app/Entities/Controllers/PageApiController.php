<?php

namespace BookStack\Entities\Controllers;

use BookStack\Entities\Queries\EntityQueries;
use BookStack\Entities\Queries\PageQueries;
use BookStack\Entities\Repos\PageRepo;
use BookStack\Exceptions\PermissionsException;
use BookStack\Http\ApiController;
use Exception;
use Illuminate\Http\Request;

class PageApiController extends ApiController
{
    protected array $rules = [
        'create' => [
            'book_id'    => ['required_without:chapter_id', 'integer'],
            'chapter_id' => ['required_without:book_id', 'integer'],
            'name'       => ['required', 'string', 'max:255'],
            'html'       => ['required_without:markdown', 'string'],
            'markdown'   => ['required_without:html', 'string'],
            'tags'       => ['array'],
            'priority'   => ['integer'],
        ],
        'update' => [
            'book_id'    => ['integer'],
            'chapter_id' => ['integer'],
            'name'       => ['string', 'min:1', 'max:255'],
            'html'       => ['string'],
            'markdown'   => ['string'],
            'tags'       => ['array'],
            'priority'   => ['integer'],
        ],
    ];

    public function __construct(
        protected PageRepo $pageRepo,
        protected PageQueries $queries,
        protected EntityQueries $entityQueries,
    ) {
    }

    /**
     * Get a listing of pages visible to the user.
     */
    public function list()
    {
        $pages = $this->queries->visibleForList()
            ->addSelect(['created_by', 'updated_by', 'revision_count', 'editor']);

        return $this->apiListingResponse($pages, [
            'id', 'book_id', 'chapter_id', 'name', 'slug', 'priority',
            'draft', 'template',
            'created_at', 'updated_at',
            'created_by', 'updated_by', 'owned_by',
        ]);
    }

    /**
     * Create a new page in the system.
     *
     * The ID of a parent book or chapter is required to indicate
     * where this page should be located.
     *
     * Any HTML content provided should be kept to a single-block depth of plain HTML
     * elements to remain compatible with the BookStack front-end and editors.
     * Any images included via base64 data URIs will be extracted and saved as gallery
     * images against the page during upload.
     */
    public function create(Request $request)
    {
        $this->validate($request, $this->rules['create']);

        if ($request->has('chapter_id')) {
            $parent = $this->entityQueries->chapters->findVisibleByIdOrFail(intval($request->get('chapter_id')));
        } else {
            $parent = $this->entityQueries->books->findVisibleByIdOrFail(intval($request->get('book_id')));
        }
        $this->checkOwnablePermission('page-create', $parent);

        $draft = $this->pageRepo->getNewDraftPage($parent);
        $this->pageRepo->publishDraft($draft, $request->only(array_keys($this->rules['create'])));

        return response()->json($draft->forJsonDisplay());
    }

    /**
     * View the details of a single page.
     * Pages will always have HTML content. They may have markdown content
     * if the markdown editor was used to last update the page.
     *
     * The 'html' property is the fully rendered & escaped HTML content that BookStack
     * would show on page view, with page includes handled.
     * The 'raw_html' property is the direct database stored HTML content, which would be
     * what BookStack shows on page edit.
     *
     * See the "Content Security" section of these docs for security considerations when using
     * the page content returned from this endpoint.
     */
    public function read(string $id)
    {
        $page = $this->queries->findVisibleByIdOrFail($id);

        return response()->json($page->forJsonDisplay());
    }

    /**
     * Update the details of a single page.
     *
     * See the 'create' action for details on the provided HTML/Markdown.
     * Providing a 'book_id' or 'chapter_id' property will essentially move
     * the page into that parent element if you have permissions to do so.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $this->validate($request, $this->rules['update']);

        $page = $this->queries->findVisibleByIdOrFail($id);
        $this->checkOwnablePermission('page-update', $page);

        $parent = null;
        if ($request->has('chapter_id')) {
            $parent = $this->entityQueries->chapters->findVisibleByIdOrFail(intval($request->get('chapter_id')));
        } elseif ($request->has('book_id')) {
            $parent = $this->entityQueries->books->findVisibleByIdOrFail(intval($request->get('book_id')));
        }

        if ($parent && !$parent->matches($page->getParent())) {
            $this->checkOwnablePermission('page-delete', $page);

            try {
                $this->pageRepo->move($page, $parent->getType() . ':' . $parent->id);
            } catch (Exception $exception) {
                if ($exception instanceof  PermissionsException) {
                    $this->showPermissionError();
                }

                return $this->jsonError(trans('errors.selected_book_chapter_not_found'));
            }
        }

        $updatedPage = $this->pageRepo->update($page, $requestData);

        return response()->json($updatedPage->forJsonDisplay());
    }

    /**
     * Delete a page.
     * This will typically send the page to the recycle bin.
     */
    public function delete(string $id)
    {
        $page = $this->queries->findVisibleByIdOrFail($id);
        $this->checkOwnablePermission('page-delete', $page);

        $this->pageRepo->destroy($page);

        return response('', 204);
    }
}
