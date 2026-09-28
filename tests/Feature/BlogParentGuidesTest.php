<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/** The four parent guides, the "Start here" row, and near-duplicate local posts kept out of the index. */
class BlogParentGuidesTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    private function migration(): object
    {
        return require database_path('migrations/seo/2026_09_28_190000_publish_parent_guides.php');
    }

    public function test_publishes_the_four_guides_once_and_rolls_back(): void
    {
        $this->createLegacySchema();
        $m = $this->migration();
        $m->up();
        $m->up();

        $rows = DB::table('blog_managment')->pluck('author', 'slug')->all();
        $this->assertCount(4, $rows);
        $this->assertSame('NXTutors Academic Team', $rows['how-nxtutors-uses-ai']);
        $this->assertFileExists(public_path('storage/blog/how-nxtutors-uses-ai.jpg'));
        foreach (array_keys($rows) as $slug) {
            $body = (string) DB::table('blog_managment')->where('slug', $slug)->value('bdesc');
            $this->assertStringContainsString('Frequently asked questions', $body, $slug);
            $this->assertStringNotContainsStringIgnoringCase("india's first", $body, $slug);
        }

        $m->down();
        $this->assertSame(0, DB::table('blog_managment')->count());
    }

    public function test_the_index_leads_with_start_here_and_keeps_local_posts_out_of_the_grid(): void
    {
        $this->createLegacySchema();
        $this->migration()->up();
        DB::table('blog_managment')->insert(['title' => 'Fees & Packages in South City II: Best Home Tutors Near You', 'slug' => 'fees-packages-in-south-city-ii-best-home-tutors-near-you', 'status' => 't', 'bdesc' => '<p>x</p>']);

        $html = $this->get('/blog')->assertOk()->getContent();
        $this->assertStringContainsString('Start here', $html);
        $this->assertStringContainsString('Free Demo Class Checklist', $html);
        $grid = substr($html, strpos($html, 'id="blogsGrid"'), 20000);
        $this->assertStringNotContainsString('South City II: Best Home Tutors', strtok($grid, '<button'));
    }

    public function test_local_posts_are_noindex_and_real_guides_are_not(): void
    {
        $this->createLegacySchema();
        $this->migration()->up();
        DB::table('blog_managment')->insert(['title' => 'Maths home tutor in DLF Phase 1', 'slug' => 'maths-home-tutor-in-dlf-phase-1-best-home-tutors-near-you', 'status' => 't', 'bdesc' => '<p>x</p>']);

        $this->get('/blog/maths-home-tutor-in-dlf-phase-1-best-home-tutors-near-you')->assertOk()->assertSee('<meta name="robots" content="noindex, follow">', false);
        $this->get('/blog/how-nxtutors-uses-ai')->assertOk()->assertDontSee('noindex', false);
    }
}
