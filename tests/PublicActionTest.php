<?php

namespace Tests;

use BookStack\Entities\Models\Book;
use BookStack\Entities\Models\Chapter;
use BookStack\Permissions\Models\RolePermission;
use BookStack\Users\Models\Role;
use BookStack\Users\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class PublicActionTest extends TestCase
{
    public function test_app_not_public()
    {
        $this->setSettings(['app-public' => 'false']);
        $book = $this->entities->book();
        $this->get('/books')->assertRedirect('/login');
        $this->get($book->getUrl())->assertRedirect('/login');

        $page = $this->entities->page();
        $this->get($page->getUrl())->assertRedirect('/login');
    }

    public function test_login_link_visible()
    {
        $this->setSettings(['app-public' => 'true']);
        $resp = $this->get('/');
        $this->withHtml($resp)->assertElementExists('a[href="' . url('/login') . '"]');
    }

    public function test_register_link_visible_when_enabled()
    {
        $this->setSettings(['app-public' => 'true']);
        $home = $this->get('/');
        $home->assertSee(url('/login'));
        $home->assertDontSee(url('/register'));

        $this->setSettings(['app-public' => 'true', 'registration-enabled' => 'true']);
        $home = $this->get('/');
        $home->assertSee(url('/login'));
        $home->assertSee(url('/register'));
    }

    public function test_books_viewable()
    {
        $this->setSettings(['app-public' => 'true']);
        $books = Book::query()->orderBy('name', 'asc')->take(10)->get();
        $bookToVisit = $books[1];

        // Check books index page is showing
        $resp = $this->get('/books');
        $resp->assertStatus(200);
        $resp->assertSee($books[0]->name);

        // Check individual book page is showing and it's child contents are visible.
        $resp = $this->get($bookToVisit->getUrl());
        $resp->assertSee($bookToVisit->name);
        $resp->assertSee($bookToVisit->chapters()->first()->name);
    }

    public function test_chapters_viewable()
    {
        $this->setSettings(['app-public' => 'true']);
        /** @var Chapter $chapterToVisit */
        $chapterToVisit = Chapter::query()->first();
        $pageToVisit = $chapterToVisit->pages()->first();

        // Check chapters index page is showing
        $resp = $this->get($chapterToVisit->getUrl());
        $resp->assertStatus(200);
        $resp->assertSee($chapterToVisit->name);
        // Check individual chapter page is showing and it's child contents are visible.
        $resp->assertSee($pageToVisit->name);
        $resp = $this->get($pageToVisit->getUrl());
        $resp->assertStatus(200);
        $resp->assertSee($chapterToVisit->book->name);
        $resp->assertSee($chapterToVisit->name);
    }

    public function test_public_page_creation()
    {
        $this->setSettings(['app-public' => 'true']);
        $publicRole = Role::getSystemRole('public');
        // Grant all permissions to public
        $publicRole->permissions()->detach();
        foreach (RolePermission::all() as $perm) {
            $publicRole->attachPermission($perm);
        }
        user()->clearPermissionCache();

        $chapter = $this->entities->chapter();
        $resp = $this->get($chapter->getUrl());
        $resp->assertSee('New Page');
        $this->withHtml($resp)->assertElementExists('a[href="' . $chapter->getUrl('/create-page') . '"]');

        $resp = $this->get($chapter->getUrl('/create-page'));
        $resp->assertSee('Continue');
        $resp->assertSee('Page Name');
        $this->withHtml($resp)->assertElementExists('form[action="' . $chapter->getUrl('/create-guest-page') . '"]');

        $resp = $this->post($chapter->getUrl('/create-guest-page'), ['name' => 'My guest page']);
        $resp->assertRedirect($chapter->book->getUrl('/page/my-guest-page/edit'));

        $user = $this->users->guest();
        $this->assertDatabaseHas('pages', [
            'name'       => 'My guest page',
            'chapter_id' => $chapter->id,
            'created_by' => $user->id,
            'updated_by' => $user->id,
        ]);
    }

    public function test_content_not_listed_on_404_for_public_users()
    {
        $page = $this->entities->page();
        $page->fill(['name' => 'my testing random unique page name'])->save();
        $this->asAdmin()->get($page->getUrl()); // Fake visit to show on recents
        $resp = $this->get('/cats/dogs/hippos');
        $resp->assertStatus(404);
        $resp->assertSee($page->name);
        View::share('pageTitle', '');

        Auth::logout();
        $resp = $this->get('/cats/dogs/hippos');
        $resp->assertStatus(404);
        $resp->assertDontSee($page->name);
    }

    public function test_default_favicon_file_created_upon_access()
    {
        $faviconPath = public_path('favicon.ico');
        if (file_exists($faviconPath)) {
            unlink($faviconPath);
        }

        $this->assertFileDoesNotExist($faviconPath);
        $this->get('/favicon.ico');
        $this->assertFileExists($faviconPath);
    }

    public function test_public_view_then_login_redirects_to_previous_content()
    {
        $this->setSettings(['app-public' => 'true']);
        $book = $this->entities->book();
        $resp = $this->get($book->getUrl());
        $resp->assertSee($book->name);

        $this->get('/login');
        $resp = $this->post('/login', ['email' => 'admin@admin.com', 'password' => 'password']);
        $resp->assertRedirect($book->getUrl());
    }

    public function test_access_hidden_content_then_login_redirects_to_intended_content()
    {
        $this->setSettings(['app-public' => 'true']);
        $book = $this->entities->book();
        $this->permissions->setEntityPermissions($book);

        $resp = $this->get($book->getUrl());
        $resp->assertSee('Book not found');

        $this->get('/login');
        $resp = $this->post('/login', ['email' => 'admin@admin.com', 'password' => 'password']);
        $resp->assertRedirect($book->getUrl());
        $this->followRedirects($resp)->assertSee($book->name);
    }

    public function test_public_view_can_take_on_other_roles()
    {
        $this->setSettings(['app-public' => 'true']);
        $newRole = $this->users->attachNewRole($this->users->guest(), []);
        $page = $this->entities->page();
        $this->permissions->disableEntityInheritedPermissions($page);
        $this->permissions->addEntityPermission($page, ['view', 'update'], $newRole);

        $resp = $this->get($page->getUrl());
        $resp->assertOk();

        $this->withHtml($resp)->assertLinkExists($page->getUrl('/edit'));
    }

    public function test_public_user_cannot_view_or_update_their_profile()
    {
        $this->setSettings(['app-public' => 'true']);
        $guest = $this->users->guest();

        $resp = $this->get($guest->getEditUrl());
        $this->assertPermissionError($resp);

        $resp = $this->put($guest->getEditUrl(), ['name' => 'My new guest name']);
        $this->assertPermissionError($resp);
    }
}
