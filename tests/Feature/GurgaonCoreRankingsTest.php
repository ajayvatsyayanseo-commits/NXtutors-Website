<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * Gurgaon core rankings (1 Oct 2026): the /city/gurugram hub is the strongest
 * hub on the site (≥3,000 guide words, every zone, every Gurgaon subject /
 * board / class page), the home page and the Gurgaon pages link into it with
 * descriptive anchors, the DLF Phase 1–5 and Golf Course Extn area pages get
 * their own rule-safe text, and the old DLF maths posts point down to the
 * area pages. Rendered against a small in-memory copy of the tables.
 */
class GurgaonCoreRankingsTest extends TestCase
{
    use LegacySchema;

    /** Three area pages per zone, so all nine zone pages pass the ZonePages gate. */
    private const AREAS = [
        ['DLF Phase 1', 'dlf-phase-1'], ['DLF Phase 2', 'dlf-phase-2'], ['DLF Phase 3', 'dlf-phase-3'],
        ['DLF Phase 4', 'dlf-phase-4'], ['DLF Phase 5', 'dlf-phase-5'], ['Sector 53', 'sector-53'],
        ['MG Road', 'mg-road-'], ['Sector 24', 'sector-24-'], ['Sector 25', 'sector-25'],
        ['South City 1', 'south-city-1'], ['Sector 40', 'sector-40'], ['Sector 39', 'sector-39'],
        ['Golf Course Extn', '-golf-course-extn'], ['Sector 57', 'sector-57'], ['Sector 61', 'sector-61'], ['Sector 66', '-sector-66'],
        ['South City 2', 'south-city-2'], ['Sector 49', 'sector-49-'], ['Sector 47', 'sector-47'],
        ['Sector 73', 'sector-73-'], ['Sector 76', 'sector-76'], ['Sector 79', 'sector-79'],
        ['Sector 82', 'sector-82'], ['Sector 86', 'sector-86'], ['Sector 90', 'sector-90'],
        ['Sector 37D', 'sector-37d'], ['Sector 106', 'sector-106'], ['Sector 108', 'sector-108'],
        ['Palam Vihar', 'palam-vihar'], ['Sector 14', 'sector-14'], ['Sector 15', 'sector-15'],
    ];

    private const ZONES = [
        'golf-course-road', 'mg-road-cyber-city', 'central-gurugram', 'golf-course-extension-road', 'sohna-road',
        'southern-peripheral-road', 'new-gurugram', 'dwarka-expressway', 'old-gurugram',
    ];

    private const DLF = ['dlf-phase-1', 'dlf-phase-2', 'dlf-phase-3', 'dlf-phase-4', 'dlf-phase-5', '-golf-course-extn'];

    protected function setUp(): void
    {
        parent::setUp();
        Cache::flush();
        DB::connection()->getPdo()->sqliteCreateCollation('utf8mb4_unicode_ci', 'strcmp');

        Schema::create('city_managment', function ($t) {
            $t->id(); $t->string('city_name'); $t->string('slug')->nullable(); $t->text('city_desc')->nullable();
            $t->string('meta_title')->nullable(); $t->text('meta_desc')->nullable(); $t->string('avatar')->nullable(); $t->string('status')->default('t');
        });
        Schema::create('city_area_list_managment', function ($t) {
            $t->id(); $t->unsignedBigInteger('city_id'); $t->string('name')->nullable(); $t->string('main_title')->nullable();
            $t->string('slug')->nullable(); $t->string('pincode')->nullable(); $t->string('status')->default('t');
            foreach (['areapid','area_desc','teacher_approch','area_map','why_choose','short_desc','package','tutor_types','subjects_covered_desc','meta_title','meta_desc','page_schema','average_rating'] as $c) { $t->text($c)->nullable(); }
        });
        Schema::create('city_area_related_faqs_managment', function ($t) {
            $t->id(); $t->unsignedBigInteger('area_id')->nullable(); $t->text('question')->nullable(); $t->text('answer')->nullable(); $t->string('status')->default('t');
        });
        Schema::create('city_area_review_managment', function ($t) {
            $t->id(); $t->unsignedBigInteger('area_id')->nullable(); $t->string('review_status')->default('t'); $t->integer('rating')->nullable();
            $t->text('message')->nullable(); $t->string('username')->nullable(); $t->string('date')->nullable();
        });
        Schema::create('generated_pages', function ($t) {
            $t->id(); $t->string('slug'); $t->string('title'); $t->string('city')->nullable(); $t->string('location')->nullable(); $t->string('status')->default('published');
            foreach (['meta_title','meta_description','hyper_location','page_type','service_mode','primary_keyword','subjects','boards','classes_tracks','html','schemas','payload','sections','faqs','interlinks','local_reviews','local_schools','local_institutes','canonical_target'] as $c) { $t->text($c)->nullable(); }
            $t->boolean('is_premium')->default(false); $t->unsignedBigInteger('created_by')->nullable(); $t->timestamps();
        });
        (require base_path('app/NxtAi/Database/Migrations/2026_09_28_000001_create_search_events_table.php'))->up();
        $this->createLegacySchema();

        DB::table('city_managment')->insert([
            ['id' => 1, 'city_name' => 'Gurugram', 'slug' => 'gurugram', 'status' => 't'],
            ['id' => 2, 'city_name' => 'Delhi', 'slug' => 'delhi', 'status' => 't'],
        ]);
        foreach (self::AREAS as [$name, $slug]) {
            DB::table('city_area_list_managment')->insert(['city_id' => 1, 'name' => $name, 'slug' => $slug, 'main_title' => 'Home Tutors in ' . $name, 'status' => 't']);
        }
    }

    private function guideText(string $html): string
    {
        $this->assertSame(1, preg_match('/<article class="nx-guide gg-guide".*?<\/article>/s', $html, $m), 'the guide renders');
        $text = preg_replace('/<(script|style)\b.*?<\/\1>/s', ' ', $m[0]);

        return html_entity_decode(strip_tags((string) $text), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }

    public function test_the_hub_guide_has_at_least_3000_words(): void
    {
        $html = $this->get('/city/gurugram')->assertOk()->getContent();
        $words = str_word_count(str_replace(['–', '—', '₹'], ' ', $this->guideText($html)));
        fwrite(STDERR, "\n[gurugram hub guide words: $words]\n");

        $this->assertGreaterThanOrEqual(3000, $words);
    }

    public function test_the_hub_links_every_zone_and_every_gurgaon_subject_page(): void
    {
        $html = $this->get('/city/gurugram')->assertOk()->getContent();
        $this->assertSame(1, preg_match('/<article class="nx-guide gg-guide".*?<\/article>/s', $html, $m));
        $guide = $m[0];

        foreach (self::ZONES as $zone) {
            $this->assertStringContainsString('href="' . url('/city/gurugram/zone/' . $zone) . '"', $guide, "zone $zone");
        }
        $gurgaonPages = collect(config('subject_pages'))->filter(fn ($p) => ($p['city_slug'] ?? null) === 'gurugram')->keys();
        $this->assertGreaterThanOrEqual(29, $gurgaonPages->count());
        foreach ($gurgaonPages as $key) {
            $this->assertStringContainsString('href="' . url('/' . $key) . '"', $guide, "subject page $key");
        }
        foreach ([
            '/tuition-jobs/gurugram', '/blog/home-tuition-fees-gurgaon', '/how-we-verify-tutors',
            '/blog/gurgaon-golf-course-road-dlf-tuition-guide', '/blog/gurgaon-golf-course-extension-spr-tuition-guide',
            '/blog/gurgaon-sohna-road-south-city-tuition-guide', '/blog/new-gurgaon-dwarka-expressway-tuition-guide',
            '/blog/old-gurgaon-palam-vihar-tuition-guide', '/city/gurugram/dlf-phase-1', '/city/gurugram/dlf-phase-5',
        ] as $path) {
            $this->assertStringContainsString('href="' . url($path) . '"', $guide, $path);
        }
    }

    public function test_the_hub_guide_follows_the_content_rules(): void
    {
        $text = $this->guideText($this->get('/city/gurugram')->assertOk()->getContent());

        foreach (['verified tutors', 'every tutor', 'guaranteed', "india's first", 'no. 1', 'background-verified',
            'm3m', 'emaar', 'bestech', 'vatika', 'cosmopolitan'] as $banned) {
            $this->assertStringNotContainsStringIgnoringCase($banned, $text, $banned);
        }
        $this->assertDoesNotMatchRegularExpression('/\b(best|top)\b/i', $text, 'no best / top');
        $this->assertStringContainsString('Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.', preg_replace('/\s+/', ' ', $text));
        $this->assertStringContainsString('Tutors who join NXTutors go through an ID check', $text);
    }

    public function test_the_home_page_links_to_the_gurgaon_hub_with_a_descriptive_anchor(): void
    {
        $html = $this->get('/')->assertOk()->getContent();

        $this->assertMatchesRegularExpression('#<a href="' . preg_quote(url('/city/gurugram'), '#') . '">home tutors in Gurgaon</a>#', $html);
    }

    public function test_gurgaon_subject_zone_and_area_pages_link_to_the_hub_as_home_tutors_in_gurgaon(): void
    {
        // Every Gurgaon subject / board / class guide links the hub with a descriptive anchor.
        $gurgaonPages = collect(config('subject_pages'))->filter(fn ($p) => ($p['city_slug'] ?? null) === 'gurugram');
        foreach ($gurgaonPages as $key => $p) {
            $src = (string) file_get_contents(resource_path('views/subjects/content/' . $p['view'] . '.blade.php'));
            $this->assertMatchesRegularExpression("#<a href=\"\{\{ url\('/city/gurugram'\) \}\}\">[^<]*(home tutors|home tuition|tutors)[^<]*in\s+Gurgaon[^<]*</a>#i", $src, $key);
            $this->assertDoesNotMatchRegularExpression("#url\('/city/gurugram'\) \}\}\">\s*Gurugram\s+(tutors\s+)?(page|hub)#", $src, $key);
        }

        // Shared chips on subject, zone, area and blog pages.
        $this->assertStringContainsString('Home tutors in Gurgaon', (string) file_get_contents(resource_path('views/subjects/show.blade.php')));
        $this->assertStringContainsString("'Gurgaon'", (string) file_get_contents(resource_path('views/city/zone.blade.php')));
        $this->assertStringContainsString('Home tutors in Gurgaon', (string) file_get_contents(resource_path('views/blog/show.blade.php')));

        $area = $this->get('/city/gurugram/dlf-phase-4')->assertOk()->getContent();
        $this->assertStringContainsString('>home tutors in Gurgaon</a>', $area);
    }

    public function test_dlf_area_text_replaces_the_old_copy_and_rolls_back(): void
    {
        $old = '<p>Near Heritage and DPS. All tutors are background-verified. SEO Keywords: best home tutor DLF Phase 4</p>';
        DB::table('city_area_list_managment')->where('slug', 'dlf-phase-4')->update([
            'area_desc' => $old, 'short_desc' => 'Looking for the best home tutor?', 'package' => '<p>₹500 – ₹2000/hour</p>', 'why_choose' => '<p>Proven results</p>',
        ]);
        $id = DB::table('city_area_list_managment')->where('slug', 'dlf-phase-4')->value('id');
        $p1 = DB::table('city_area_list_managment')->where('slug', 'dlf-phase-1')->value('id');
        DB::table('city_area_related_faqs_managment')->insert(['area_id' => $id, 'question' => 'Are tutors background-verified?', 'answer' => 'Yes, all of them.', 'status' => 't']);

        $m = require database_path('migrations/seo/2026_10_04_110000_rewrite_dlf_and_golf_course_extn_area_text.php');
        $m->up();
        $m->up();

        foreach (self::DLF as $slug) {
            $row = DB::table('city_area_list_managment')->where('slug', $slug)->first();
            $this->assertStringContainsString('/city/gurugram/zone/', $row->area_desc, $slug);
            $this->assertStringContainsString('href="/city/gurugram"', $row->area_desc, $slug);
            $this->assertStringContainsString('-gurgaon"', $row->area_desc, "$slug links Gurgaon subject pages");
            $this->assertStringContainsString('most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.', $row->area_desc, $slug);
            $this->assertLessThanOrEqual(250, mb_strlen((string) $row->short_desc), $slug);
            $text = strip_tags($row->area_desc . ' ' . $row->short_desc);
            $this->assertDoesNotMatchRegularExpression('/\b(best|top|verified|guaranteed|proven)\b/i', $text, $slug);
            $this->assertSame(5, DB::table('city_area_related_faqs_managment')->where('area_id', $row->id)->count(), $slug);
        }
        $this->assertSame('', DB::table('city_area_list_managment')->where('id', $id)->value('package'));
        $this->assertStringContainsString('Arjun Marg', (string) DB::table('city_area_list_managment')->where('id', $p1)->value('area_desc'));

        $page = $this->get('/city/gurugram/dlf-phase-4')->assertOk()->getContent();
        $this->assertStringContainsString('href="/city/gurugram/zone/golf-course-road"', $page);
        $this->assertStringNotContainsString('Pricing &amp; Packages', $page);
        $this->assertStringNotContainsString('background-verified', $page);

        $m->down();
        $this->assertSame($old, DB::table('city_area_list_managment')->where('id', $id)->value('area_desc'));
        $this->assertSame('<p>₹500 – ₹2000/hour</p>', DB::table('city_area_list_managment')->where('id', $id)->value('package'));
        $this->assertSame(['Are tutors background-verified?'], DB::table('city_area_related_faqs_managment')->where('area_id', $id)->pluck('question')->all());
        $this->assertSame(0, DB::table('city_area_related_faqs_managment')->where('area_id', $p1)->count());
        $this->assertNull(DB::table('city_area_list_managment')->where('id', $p1)->value('area_desc'));
        $this->assertFalse(Schema::hasTable('seo_text_backups'));
    }

    public function test_blog_hub_anchors_and_dlf_post_notes_publish_and_roll_back(): void
    {
        $fees = (string) file_get_contents(database_path('seo-content/blog/home-tuition-fees-gurgaon.html'));
        $this->assertStringContainsString('<a href="/city/gurugram">home tutors in Gurgaon</a>', $fees, 'source file updated');
        foreach (glob(database_path('seo-content/blog/*gurgaon*.html')) as $f) {
            $this->assertMatchesRegularExpression('#<a href="/city/gurugram">home (tutors|tuition) in Gurgaon</a>#', (string) file_get_contents($f), basename($f));
        }

        DB::table('blog_managment')->insert([
            ['title' => 'Fees', 'slug' => 'home-tuition-fees-gurgaon', 'status' => 't', 'bdesc' => '<p>To browse by locality, see <a href="/city/gurugram">home tutors across Gurugram</a>.</p>'],
            ['title' => 'JEE', 'slug' => "jee-preparation-gurgaon-coaching-or-home-tutor\t", 'status' => 't', 'bdesc' => '<p>or browse <a href="/city/gurugram">tutors across Gurugram</a> by area.</p>'],
            ['title' => 'Maths DLF 4', 'slug' => 'maths-home-tutor-in-dlf-phase-4-best-home-tutors-near-you', 'status' => 't', 'bdesc' => '<p>Old body</p>'],
            ['title' => 'Maths DLF 5', 'slug' => 'maths-home-tutor-in-dlf-phase-5-best-home-tutors-near-you', 'status' => 't', 'bdesc' => '<p>Old body 5</p>'],
        ]);
        $before = DB::table('blog_managment')->orderBy('id')->pluck('bdesc')->all();

        $m = require database_path('migrations/seo/2026_10_04_111000_gurgaon_blog_links_to_hub_and_dlf_area_pages.php');
        $m->up();
        $m->up();

        $this->assertSame('<p>To browse by locality, see <a href="/city/gurugram">home tutors in Gurgaon</a>.</p>', DB::table('blog_managment')->where('title', 'Fees')->value('bdesc'));
        $this->assertSame('<p>or browse <a href="/city/gurugram">home tutors in Gurgaon</a> by area.</p>', DB::table('blog_managment')->where('title', 'JEE')->value('bdesc'));
        $p4 = (string) DB::table('blog_managment')->where('title', 'Maths DLF 4')->value('bdesc');
        $this->assertSame(1, substr_count($p4, '<!-- nxt:dlf-hierarchy -->'), 'note added once');
        $this->assertStringContainsString('href="/city/gurugram/dlf-phase-4"', $p4);
        $this->assertStringContainsString('href="/maths-home-tutor-gurgaon"', $p4);
        $this->assertStringEndsWith('<p>Old body</p>', $p4);
        $this->assertStringContainsString('href="/city/gurugram/dlf-phase-5"', (string) DB::table('blog_managment')->where('title', 'Maths DLF 5')->value('bdesc'));

        $m->down();
        $this->assertSame($before, DB::table('blog_managment')->orderBy('id')->pluck('bdesc')->all());
    }
}
