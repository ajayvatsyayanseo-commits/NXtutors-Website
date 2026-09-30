<?php

namespace Tests\Feature;

use App\Support\BlogTopics;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/** The Gurgaon guide cluster and the two IB rewrites (2026_09_29_120000). */
class BlogGurgaonClusterTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    private const NEW = [
        'home-tuition-fees-gurgaon', 'choose-home-tutor-gurgaon-safety-checklist',
        'jee-preparation-gurgaon-coaching-or-home-tutor', 'neet-preparation-gurgaon-coaching-or-home-tutor',
        'ib-igcse-tutoring-gurgaon-parents-guide', 'icse-isc-maths-gurgaon-guide', 'cbse-class-10-board-year-plan-gurgaon',
        'gurgaon-golf-course-road-dlf-tuition-guide', 'gurgaon-golf-course-extension-spr-tuition-guide',
        'gurgaon-sohna-road-south-city-tuition-guide', 'new-gurgaon-dwarka-expressway-tuition-guide',
        'old-gurgaon-palam-vihar-tuition-guide',
    ];

    private const ROUND2 = [
        'moving-to-gurgaon-school-and-tutoring-guide', 'switching-cbse-to-ib-or-igcse-gurgaon', 'cambridge-vs-edexcel-igcse-gurgaon',
        'class-11-stream-choice-gurgaon', 'study-abroad-from-gurgaon-sat-ap-ib-timeline', 'olympiad-preparation-gurgaon-imo-nso-rmo',
        'study-routine-long-commute-gurgaon',
    ];

    private function migration(): object
    {
        return require database_path('migrations/seo/2026_09_29_120000_publish_gurgaon_guide_cluster.php');
    }

    public function test_every_post_has_its_files_and_follows_the_content_rules(): void
    {
        foreach (array_merge(self::NEW, self::ROUND2, ['-ib-math-aaai-slhl', '-ib-physics-slhl-iaee']) as $slug) {
            $html = (string) @file_get_contents(database_path("seo-content/blog/$slug.html"));
            $meta = json_decode((string) @file_get_contents(database_path("seo-content/blog/$slug.json")), true) ?: [];

            $this->assertNotSame('', trim($html), "$slug body");
            $this->assertNotEmpty($meta['title'] ?? null, "$slug title");
            $this->assertLessThanOrEqual(60, mb_strlen($meta['meta_title'] ?? ''), "$slug meta_title");
            $this->assertStringContainsString('Frequently asked questions', $html, $slug);
            // Indexed guides, never the noindexed "local post" kind.
            $this->assertNotSame('city', BlogTopics::of($slug), $slug);

            $text = strip_tags($html);
            foreach (["india's first", 'guaranteed', 'no. 1', '100%'] as $banned) {
                $this->assertStringNotContainsStringIgnoringCase($banned, $text, "$slug: $banned");
            }
            $this->assertDoesNotMatchRegularExpression('/\b\d[\d,]*\+?\s+verified tutors\b/i', $text, $slug);
            $this->assertDoesNotMatchRegularExpression('/<(h1|script|img|style)\b/i', $html, $slug);
        }
        foreach (array_merge(self::NEW, self::ROUND2) as $slug) {
            $this->assertFileExists(public_path("storage/blog/$slug.jpg"));
        }
    }

    public function test_publishes_new_posts_rewrites_ib_posts_and_rolls_back(): void
    {
        $this->createLegacySchema();
        DB::table('blog_managment')->insert(['title' => 'IB Math AA/AI SL/HL', 'slug' => '-ib-math-aaai-slhl', 'status' => 't', 'bdesc' => '<p>old</p>', 'avatar' => 'old.jpg', 'author' => 'Admin']);

        $m = $this->migration();
        $m->up();
        $m->up();

        $this->assertSame(count(self::NEW) + 1, DB::table('blog_managment')->count());
        $ib = DB::table('blog_managment')->where('slug', '-ib-math-aaai-slhl')->first();
        $this->assertSame('Ajay Vatsyayan', $ib->author);
        $this->assertSame('old.jpg', $ib->avatar, 'a rewrite keeps its image');
        $this->assertStringNotContainsString('<p>old</p>', $ib->bdesc);

        $m->down();
        $this->assertSame(1, DB::table('blog_managment')->count());
        $this->assertStringContainsString('IB Maths', (string) DB::table('blog_managment')->value('bdesc'));
    }

    public function test_the_gurugram_page_leads_its_guides_with_the_cluster(): void
    {
        $this->createLegacySchema();
        $this->migration()->up();

        $guides = \App\Support\CityHub::guides([], 6, ['gurugram', 'gurgaon']);
        $this->assertContains($guides->first()->slug, self::NEW);
    }

    public function test_round_two_publishes_once_and_rolls_back(): void
    {
        $this->createLegacySchema();
        $m = require database_path('migrations/seo/2026_09_30_120000_publish_gurgaon_guides_round2.php');
        $m->up();
        $m->up();
        $this->assertSame(count(self::ROUND2), DB::table('blog_managment')->count());
        $m->down();
        $this->assertSame(0, DB::table('blog_managment')->count());
    }
}
