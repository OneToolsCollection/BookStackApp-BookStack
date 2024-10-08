<?php

namespace Tests\Entity;

use BookStack\Entities\Models\Book;
use BookStack\Entities\Models\Chapter;
use BookStack\Entities\Models\Page;
use BookStack\Entities\Tools\PdfGenerator;
use BookStack\Exceptions\PdfExportException;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ExportTest extends TestCase
{
    public function test_page_text_export()
    {
        $page = $this->entities->page();
        $this->asEditor();

        $resp = $this->get($page->getUrl('/export/plaintext'));
        $resp->assertStatus(200);
        $resp->assertSee($page->name);
        $resp->assertHeader('Content-Disposition', 'attachment; filename="' . $page->slug . '.txt"');
    }

    public function test_page_pdf_export()
    {
        $page = $this->entities->page();
        $this->asEditor();

        $resp = $this->get($page->getUrl('/export/pdf'));
        $resp->assertStatus(200);
        $resp->assertHeader('Content-Disposition', 'attachment; filename="' . $page->slug . '.pdf"');
    }

    public function test_page_html_export()
    {
        $page = $this->entities->page();
        $this->asEditor();

        $resp = $this->get($page->getUrl('/export/html'));
        $resp->assertStatus(200);
        $resp->assertSee($page->name);
        $resp->assertHeader('Content-Disposition', 'attachment; filename="' . $page->slug . '.html"');
    }

    public function test_book_text_export()
    {
        $book = $this->entities->bookHasChaptersAndPages();
        $directPage = $book->directPages()->first();
        $chapter = $book->chapters()->first();
        $chapterPage = $chapter->pages()->first();
        $this->entities->updatePage($directPage, ['html' => '<p>My awesome page</p>']);
        $this->entities->updatePage($chapterPage, ['html' => '<p>My little nested page</p>']);
        $this->asEditor();

        $resp = $this->get($book->getUrl('/export/plaintext'));
        $resp->assertStatus(200);
        $resp->assertSee($book->name);
        $resp->assertSee($chapterPage->name);
        $resp->assertSee($chapter->name);
        $resp->assertSee($directPage->name);
        $resp->assertSee('My awesome page');
        $resp->assertSee('My little nested page');
        $resp->assertHeader('Content-Disposition', 'attachment; filename="' . $book->slug . '.txt"');
    }

    public function test_book_text_export_format()
    {
        $entities = $this->entities->createChainBelongingToUser($this->users->viewer());
        $this->entities->updatePage($entities['page'], ['html' => '<p>My great page</p><p>Full of <strong>great</strong> stuff</p>', 'name' => 'My wonderful page!']);
        $entities['chapter']->name = 'Export chapter';
        $entities['chapter']->description = "A test chapter to be exported\nIt has loads of info within";
        $entities['book']->name = 'Export Book';
        $entities['book']->description = "This is a book with stuff to export";
        $entities['chapter']->save();
        $entities['book']->save();

        $resp = $this->asEditor()->get($entities['book']->getUrl('/export/plaintext'));

        $expected = "Export Book\nThis is a book with stuff to export\n\nExport chapter\nA test chapter to be exported\nIt has loads of info within\n\n";
        $expected .= "My wonderful page!\nMy great page Full of great stuff";
        $resp->assertSee($expected);
    }

    public function test_book_pdf_export()
    {
        $page = $this->entities->page();
        $book = $page->book;
        $this->asEditor();

        $resp = $this->get($book->getUrl('/export/pdf'));
        $resp->assertStatus(200);
        $resp->assertHeader('Content-Disposition', 'attachment; filename="' . $book->slug . '.pdf"');
    }

    public function test_book_html_export()
    {
        $page = $this->entities->page();
        $book = $page->book;
        $this->asEditor();

        $resp = $this->get($book->getUrl('/export/html'));
        $resp->assertStatus(200);
        $resp->assertSee($book->name);
        $resp->assertSee($page->name);
        $resp->assertHeader('Content-Disposition', 'attachment; filename="' . $book->slug . '.html"');
    }

    public function test_book_html_export_shows_html_descriptions()
    {
        $book = $this->entities->bookHasChaptersAndPages();
        $chapter = $book->chapters()->first();
        $book->description_html = '<p>A description with <strong>HTML</strong> within!</p>';
        $chapter->description_html = '<p>A chapter description with <strong>HTML</strong> within!</p>';
        $book->save();
        $chapter->save();

        $resp = $this->asEditor()->get($book->getUrl('/export/html'));
        $resp->assertSee($book->description_html, false);
        $resp->assertSee($chapter->description_html, false);
    }

    public function test_chapter_text_export()
    {
        $chapter = $this->entities->chapter();
        $page = $chapter->pages[0];
        $this->entities->updatePage($page, ['html' => '<p>This is content within the page!</p>']);
        $this->asEditor();

        $resp = $this->get($chapter->getUrl('/export/plaintext'));
        $resp->assertStatus(200);
        $resp->assertSee($chapter->name);
        $resp->assertSee($page->name);
        $resp->assertSee('This is content within the page!');
        $resp->assertHeader('Content-Disposition', 'attachment; filename="' . $chapter->slug . '.txt"');
    }

    public function test_chapter_text_export_format()
    {
        $entities = $this->entities->createChainBelongingToUser($this->users->viewer());
        $this->entities->updatePage($entities['page'], ['html' => '<p>My great page</p><p>Full of <strong>great</strong> stuff</p>', 'name' => 'My wonderful page!']);
        $entities['chapter']->name = 'Export chapter';
        $entities['chapter']->description = "A test chapter to be exported\nIt has loads of info within";
        $entities['chapter']->save();

        $resp = $this->asEditor()->get($entities['book']->getUrl('/export/plaintext'));

        $expected = "Export chapter\nA test chapter to be exported\nIt has loads of info within\n\n";
        $expected .= "My wonderful page!\nMy great page Full of great stuff";
        $resp->assertSee($expected);
    }

    public function test_chapter_pdf_export()
    {
        $chapter = $this->entities->chapter();
        $this->asEditor();

        $resp = $this->get($chapter->getUrl('/export/pdf'));
        $resp->assertStatus(200);
        $resp->assertHeader('Content-Disposition', 'attachment; filename="' . $chapter->slug . '.pdf"');
    }

    public function test_chapter_html_export()
    {
        $chapter = $this->entities->chapter();
        $page = $chapter->pages[0];
        $this->asEditor();

        $resp = $this->get($chapter->getUrl('/export/html'));
        $resp->assertStatus(200);
        $resp->assertSee($chapter->name);
        $resp->assertSee($page->name);
        $resp->assertHeader('Content-Disposition', 'attachment; filename="' . $chapter->slug . '.html"');
    }

    public function test_chapter_html_export_shows_html_descriptions()
    {
        $chapter = $this->entities->chapter();
        $chapter->description_html = '<p>A description with <strong>HTML</strong> within!</p>';
        $chapter->save();

        $resp = $this->asEditor()->get($chapter->getUrl('/export/html'));
        $resp->assertSee($chapter->description_html, false);
    }

    public function test_page_html_export_contains_custom_head_if_set()
    {
        $page = $this->entities->page();

        $customHeadContent = '<style>p{color: red;}</style>';
        $this->setSettings(['app-custom-head' => $customHeadContent]);

        $resp = $this->asEditor()->get($page->getUrl('/export/html'));
        $resp->assertSee($customHeadContent, false);
    }

    public function test_page_html_export_does_not_break_with_only_comments_in_custom_head()
    {
        $page = $this->entities->page();

        $customHeadContent = '<!-- A comment -->';
        $this->setSettings(['app-custom-head' => $customHeadContent]);

        $resp = $this->asEditor()->get($page->getUrl('/export/html'));
        $resp->assertStatus(200);
        $resp->assertSee($customHeadContent, false);
    }

    public function test_page_html_export_use_absolute_dates()
    {
        $page = $this->entities->page();

        $resp = $this->asEditor()->get($page->getUrl('/export/html'));
        $resp->assertSee($page->created_at->isoFormat('D MMMM Y HH:mm:ss'));
        $resp->assertDontSee($page->created_at->diffForHumans());
        $resp->assertSee($page->updated_at->isoFormat('D MMMM Y HH:mm:ss'));
        $resp->assertDontSee($page->updated_at->diffForHumans());
    }

    public function test_page_export_does_not_include_user_or_revision_links()
    {
        $page = $this->entities->page();

        $resp = $this->asEditor()->get($page->getUrl('/export/html'));
        $resp->assertDontSee($page->getUrl('/revisions'));
        $resp->assertDontSee($page->createdBy->getProfileUrl());
        $resp->assertSee($page->createdBy->name);
    }

    public function test_page_export_sets_right_data_type_for_svg_embeds()
    {
        $page = $this->entities->page();
        Storage::disk('local')->makeDirectory('uploads/images/gallery');
        Storage::disk('local')->put('uploads/images/gallery/svg_test.svg', '<svg></svg>');
        $page->html = '<img src="http://localhost/uploads/images/gallery/svg_test.svg">';
        $page->save();

        $this->asEditor();
        $resp = $this->get($page->getUrl('/export/html'));
        Storage::disk('local')->delete('uploads/images/gallery/svg_test.svg');

        $resp->assertStatus(200);
        $resp->assertSee('<img src="data:image/svg+xml;base64', false);
    }

    public function test_page_image_containment_works_on_multiple_images_within_a_single_line()
    {
        $page = $this->entities->page();
        Storage::disk('local')->makeDirectory('uploads/images/gallery');
        Storage::disk('local')->put('uploads/images/gallery/svg_test.svg', '<svg></svg>');
        Storage::disk('local')->put('uploads/images/gallery/svg_test2.svg', '<svg></svg>');
        $page->html = '<img src="http://localhost/uploads/images/gallery/svg_test.svg" class="a"><img src="http://localhost/uploads/images/gallery/svg_test2.svg" class="b">';
        $page->save();

        $resp = $this->asEditor()->get($page->getUrl('/export/html'));
        Storage::disk('local')->delete('uploads/images/gallery/svg_test.svg');
        Storage::disk('local')->delete('uploads/images/gallery/svg_test2.svg');

        $resp->assertDontSee('http://localhost/uploads/images/gallery/svg_test');
    }

    public function test_page_export_contained_html_image_fetches_only_run_when_url_points_to_image_upload_folder()
    {
        $page = $this->entities->page();
        $page->html = '<img src="http://localhost/uploads/images/gallery/svg_test.svg"/>'
            . '<img src="http://localhost/uploads/svg_test.svg"/>'
            . '<img src="/uploads/svg_test.svg"/>';
        $storageDisk = Storage::disk('local');
        $storageDisk->makeDirectory('uploads/images/gallery');
        $storageDisk->put('uploads/images/gallery/svg_test.svg', '<svg>good</svg>');
        $storageDisk->put('uploads/svg_test.svg', '<svg>bad</svg>');
        $page->save();

        $resp = $this->asEditor()->get($page->getUrl('/export/html'));

        $storageDisk->delete('uploads/images/gallery/svg_test.svg');
        $storageDisk->delete('uploads/svg_test.svg');

        $resp->assertDontSee('http://localhost/uploads/images/gallery/svg_test.svg', false);
        $resp->assertSee('http://localhost/uploads/svg_test.svg');
        $resp->assertSee('src="/uploads/svg_test.svg"', false);
    }

    public function test_page_export_contained_html_does_not_allow_upward_traversal_with_local()
    {
        $contents = file_get_contents(public_path('.htaccess'));
        config()->set('filesystems.images', 'local');

        $page = $this->entities->page();
        $page->html = '<img src="http://localhost/uploads/images/../../.htaccess"/>';
        $page->save();

        $resp = $this->asEditor()->get($page->getUrl('/export/html'));
        $resp->assertDontSee(base64_encode($contents));
    }

    public function test_page_export_contained_html_does_not_allow_upward_traversal_with_local_secure()
    {
        $testFilePath = storage_path('logs/test.txt');
        config()->set('filesystems.images', 'local_secure');
        file_put_contents($testFilePath, 'I am a cat');

        $page = $this->entities->page();
        $page->html = '<img src="http://localhost/uploads/images/../../logs/test.txt"/>';
        $page->save();

        $resp = $this->asEditor()->get($page->getUrl('/export/html'));
        $resp->assertDontSee(base64_encode('I am a cat'));
        unlink($testFilePath);
    }

    public function test_exports_removes_scripts_from_custom_head()
    {
        $entities = [
            Page::query()->first(), Chapter::query()->first(), Book::query()->first(),
        ];
        setting()->put('app-custom-head', '<script>window.donkey = "cat";</script><style>.my-test-class { color: red; }</style>');

        foreach ($entities as $entity) {
            $resp = $this->asEditor()->get($entity->getUrl('/export/html'));
            $resp->assertDontSee('window.donkey');
            $resp->assertDontSee('<script', false);
            $resp->assertSee('.my-test-class { color: red; }');
        }
    }

    public function test_page_export_with_deleted_creator_and_updater()
    {
        $user = $this->users->viewer(['name' => 'ExportWizardTheFifth']);
        $page = $this->entities->page();
        $page->created_by = $user->id;
        $page->updated_by = $user->id;
        $page->save();

        $resp = $this->asEditor()->get($page->getUrl('/export/html'));
        $resp->assertSee('ExportWizardTheFifth');

        $user->delete();
        $resp = $this->get($page->getUrl('/export/html'));
        $resp->assertStatus(200);
        $resp->assertDontSee('ExportWizardTheFifth');
    }

    public function test_page_pdf_export_converts_iframes_to_links()
    {
        $page = Page::query()->first()->forceFill([
            'html'     => '<iframe width="560" height="315" src="//www.youtube.com/embed/ShqUjt33uOs"></iframe>',
        ]);
        $page->save();

        $pdfHtml = '';
        $mockPdfGenerator = $this->mock(PdfGenerator::class);
        $mockPdfGenerator->shouldReceive('fromHtml')
            ->with(\Mockery::capture($pdfHtml))
            ->andReturn('');
        $mockPdfGenerator->shouldReceive('getActiveEngine')->andReturn(PdfGenerator::ENGINE_DOMPDF);

        $this->asEditor()->get($page->getUrl('/export/pdf'));
        $this->assertStringNotContainsString('iframe>', $pdfHtml);
        $this->assertStringContainsString('<p><a href="https://www.youtube.com/embed/ShqUjt33uOs">https://www.youtube.com/embed/ShqUjt33uOs</a></p>', $pdfHtml);
    }

    public function test_page_pdf_export_opens_details_blocks()
    {
        $page = $this->entities->page()->forceFill([
            'html'     => '<details><summary>Hello</summary><p>Content!</p></details>',
        ]);
        $page->save();

        $pdfHtml = '';
        $mockPdfGenerator = $this->mock(PdfGenerator::class);
        $mockPdfGenerator->shouldReceive('fromHtml')
            ->with(\Mockery::capture($pdfHtml))
            ->andReturn('');
        $mockPdfGenerator->shouldReceive('getActiveEngine')->andReturn(PdfGenerator::ENGINE_DOMPDF);

        $this->asEditor()->get($page->getUrl('/export/pdf'));
        $this->assertStringContainsString('<details open="open"', $pdfHtml);
    }

    public function test_page_markdown_export()
    {
        $page = $this->entities->page();

        $resp = $this->asEditor()->get($page->getUrl('/export/markdown'));
        $resp->assertStatus(200);
        $resp->assertSee($page->name);
        $resp->assertHeader('Content-Disposition', 'attachment; filename="' . $page->slug . '.md"');
    }

    public function test_page_markdown_export_uses_existing_markdown_if_apparent()
    {
        $page = $this->entities->page()->forceFill([
            'markdown' => '# A header',
            'html'     => '<h1>Dogcat</h1>',
        ]);
        $page->save();

        $resp = $this->asEditor()->get($page->getUrl('/export/markdown'));
        $resp->assertSee('A header');
        $resp->assertDontSee('Dogcat');
    }

    public function test_page_markdown_export_converts_html_where_no_markdown()
    {
        $page = $this->entities->page()->forceFill([
            'markdown' => '',
            'html'     => '<h1>Dogcat</h1><p>Some <strong>bold</strong> text</p>',
        ]);
        $page->save();

        $resp = $this->asEditor()->get($page->getUrl('/export/markdown'));
        $resp->assertSee("# Dogcat\n\nSome **bold** text");
    }

    public function test_chapter_markdown_export()
    {
        $chapter = $this->entities->chapter();
        $page = $chapter->pages()->first();
        $resp = $this->asEditor()->get($chapter->getUrl('/export/markdown'));

        $resp->assertSee('# ' . $chapter->name);
        $resp->assertSee('# ' . $page->name);
    }

    public function test_book_markdown_export()
    {
        $book = Book::query()->whereHas('pages')->whereHas('chapters')->first();
        $chapter = $book->chapters()->first();
        $page = $chapter->pages()->first();
        $resp = $this->asEditor()->get($book->getUrl('/export/markdown'));

        $resp->assertSee('# ' . $book->name);
        $resp->assertSee('# ' . $chapter->name);
        $resp->assertSee('# ' . $page->name);
    }

    public function test_book_markdown_export_concats_immediate_pages_with_newlines()
    {
        /** @var Book $book */
        $book = Book::query()->whereHas('pages')->first();

        $this->asEditor()->get($book->getUrl('/create-page'));
        $this->get($book->getUrl('/create-page'));

        [$pageA, $pageB] = $book->pages()->where('chapter_id', '=', 0)->get();
        $pageA->html = '<p>hello tester</p>';
        $pageA->save();
        $pageB->name = 'The second page in this test';
        $pageB->save();

        $resp = $this->get($book->getUrl('/export/markdown'));
        $resp->assertDontSee('hello tester# The second page in this test');
        $resp->assertSee("hello tester\n\n# The second page in this test");
    }

    public function test_export_option_only_visible_and_accessible_with_permission()
    {
        $book = Book::query()->whereHas('pages')->whereHas('chapters')->first();
        $chapter = $book->chapters()->first();
        $page = $chapter->pages()->first();
        $entities = [$book, $chapter, $page];
        $user = $this->users->viewer();
        $this->actingAs($user);

        foreach ($entities as $entity) {
            $resp = $this->get($entity->getUrl());
            $resp->assertSee('/export/pdf');
        }

        $this->permissions->removeUserRolePermissions($user, ['content-export']);

        foreach ($entities as $entity) {
            $resp = $this->get($entity->getUrl());
            $resp->assertDontSee('/export/pdf');
            $resp = $this->get($entity->getUrl('/export/pdf'));
            $this->assertPermissionError($resp);
        }
    }

    public function test_wkhtmltopdf_only_used_when_allow_untrusted_is_true()
    {
        $page = $this->entities->page();

        config()->set('exports.snappy.pdf_binary', '/abc123');
        config()->set('app.allow_untrusted_server_fetching', false);

        $resp = $this->asEditor()->get($page->getUrl('/export/pdf'));
        $resp->assertStatus(200); // Sucessful response with invalid snappy binary indicates dompdf usage.

        config()->set('app.allow_untrusted_server_fetching', true);
        $resp = $this->get($page->getUrl('/export/pdf'));
        $resp->assertStatus(500); // Bad response indicates wkhtml usage
    }

    public function test_pdf_command_option_used_if_set()
    {
        $page = $this->entities->page();
        $command = 'cp {input_html_path} {output_pdf_path}';
        config()->set('exports.pdf_command', $command);

        $resp = $this->asEditor()->get($page->getUrl('/export/pdf'));
        $download = $resp->getContent();

        $this->assertStringContainsString(e($page->name), $download);
        $this->assertStringContainsString('<html lang=', $download);
    }

    public function test_pdf_command_option_errors_if_output_path_not_written_to()
    {
        $page = $this->entities->page();
        $command = 'echo "hi"';
        config()->set('exports.pdf_command', $command);

        $this->assertThrows(function () use ($page) {
            $this->withoutExceptionHandling()->asEditor()->get($page->getUrl('/export/pdf'));
        }, PdfExportException::class);
    }

    public function test_pdf_command_option_errors_if_command_returns_error_status()
    {
        $page = $this->entities->page();
        $command = 'exit 1';
        config()->set('exports.pdf_command', $command);

        $this->assertThrows(function () use ($page) {
            $this->withoutExceptionHandling()->asEditor()->get($page->getUrl('/export/pdf'));
        }, PdfExportException::class);
    }

    public function test_pdf_command_timout_option_limits_export_time()
    {
        $page = $this->entities->page();
        $command = 'php -r \'sleep(4);\'';
        config()->set('exports.pdf_command', $command);
        config()->set('exports.pdf_command_timeout', 1);

        $this->assertThrows(function () use ($page) {
            $start = time();
            $this->withoutExceptionHandling()->asEditor()->get($page->getUrl('/export/pdf'));

            $this->assertTrue(time() < ($start + 3));
        }, PdfExportException::class,
            "PDF Export via command failed due to timeout at 1 second(s)");
    }

    public function test_html_exports_contain_csp_meta_tag()
    {
        $entities = [
            $this->entities->page(),
            $this->entities->book(),
            $this->entities->chapter(),
        ];

        foreach ($entities as $entity) {
            $resp = $this->asEditor()->get($entity->getUrl('/export/html'));
            $this->withHtml($resp)->assertElementExists('head meta[http-equiv="Content-Security-Policy"][content*="script-src "]');
        }
    }

    public function test_html_exports_contain_body_classes_for_export_identification()
    {
        $page = $this->entities->page();

        $resp = $this->asEditor()->get($page->getUrl('/export/html'));
        $this->withHtml($resp)->assertElementExists('body.export.export-format-html.export-engine-none');
    }
}
