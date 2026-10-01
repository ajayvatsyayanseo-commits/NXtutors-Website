<?php

namespace Tests\Feature;

use App\Support\LinkNest;
use App\Support\SubjectLinks;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

/**
 * The internal-link nest (App\Support\LinkNest): city subject pages link
 * only their own city, plus its zones, a rotating set of localities and the
 * board ladder; zone, area, hub and blog pages link back in. Mumbai's real
 * 66 areas (database/seo-content/areas/mumbai-research.json) and real zone
 * text are loaded into SQLite.
 */
class LinkNestTest extends TestCase
{
    private array $mumbaiAreas = [];

    protected function setUp(): void
    {
        parent::setUp();
        Cache::flush();
        DB::connection()->getPdo()->sqliteCreateCollation('utf8mb4_unicode_ci', 'strcmp');
        \Illuminate\Support\Facades\View::share('setting', new class {
            public function __get($k) { return $k === 'phone' ? '+91 78360 34313' : ''; }
            public function __isset($k) { return true; }
        });

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
        foreach ([
            'teacher_course_managment' => ['user_id','pid','cid','cat_id','sub_id'],
            'teacher_courses' => ['user_id','board','for_class','subject','class_type','fee','status'],
            'teacher_review' => ['user_id','rating','review','status','review_status','name','message','date','verified_at'],
            'category' => ['cat_title','slug','status','parent_id','avatar','main_cat'],
            'product_managment' => ['title','slug','status'],
        ] as $tbl => $cols) {
            Schema::create($tbl, function ($t) use ($cols) { $t->id(); foreach ($cols as $c) { $t->text($c)->nullable(); } });
        }
        Schema::create('pages', function ($t) {
            $t->id(); $t->string('slug')->nullable(); $t->string('status')->default('t'); $t->string('title')->nullable(); $t->text('content')->nullable();
            $t->string('main_title')->nullable(); $t->string('meta_title')->nullable(); $t->text('meta_description')->nullable(); $t->text('meta_keywords')->nullable();
        });
        Schema::create('register', function ($t) {
            $t->id(); $t->unsignedBigInteger('user_id')->nullable(); $t->string('name')->nullable(); $t->string('city')->nullable();
            $t->string('join_as')->nullable(); $t->string('status')->default('t'); $t->string('avatar')->nullable();
            $t->timestamp('deleted_at')->nullable(); $t->timestamp('hidden_until')->nullable();
            foreach (['phone_hash','email','password','user_type','phone','dob','gender','date','address','district','state','pincode','c_password','otp','class_type','otp_status','for_class','frount_image','back_image','degree','experience','education','budget','other_education','document_type','document_number','profile','profile_desc','pro_desc','delete_after','deletion_requested_at'] as $c) { $t->text($c)->nullable(); }
        });
        Schema::create('generated_pages', function ($t) {
            $t->id(); $t->string('slug'); $t->string('title'); $t->string('city')->nullable(); $t->string('location')->nullable(); $t->string('status')->default('published');
            foreach (['meta_title','meta_description','hyper_location','page_type','service_mode','primary_keyword','subjects','boards','classes_tracks','html','schemas','payload','sections','faqs','interlinks','local_reviews','local_schools','local_institutes','canonical_target'] as $c) { $t->text($c)->nullable(); }
            $t->boolean('is_premium')->default(false); $t->unsignedBigInteger('created_by')->nullable(); $t->timestamps();
        });
        (require base_path('app/NxtAi/Database/Migrations/2026_09_28_000001_create_search_events_table.php'))->up();
        Schema::create('blog_managment', function ($t) {
            $t->id(); $t->string('title'); $t->string('slug'); $t->string('status')->default('t');
            foreach (['bdesc','avatar','meta_title','meta_key','meta_desc','author','date'] as $c) { $t->text($c)->nullable(); }
        });

        DB::table('city_managment')->insert([
            ['id' => 1, 'city_name' => 'Mumbai', 'slug' => 'mumbai'],
            ['id' => 2, 'city_name' => 'Gurugram', 'slug' => 'gurugram'],
        ]);
        $research = json_decode(File::get(database_path('seo-content/areas/mumbai-research.json')), true)['areas'];
        $rows = [];
        foreach ($research as $slug => $a) {
            $rows[] = ['city_id' => 1, 'name' => $a['name'], 'slug' => $slug, 'main_title' => 'x'];
            $this->mumbaiAreas[$slug] = $a['zone'];
        }
        DB::table('city_area_list_managment')->insert($rows);
        DB::table('city_area_list_managment')->insert([
            ['city_id' => 2, 'name' => 'DLF Phase 4', 'slug' => 'dlf-phase-4', 'main_title' => 'x'],
            ['city_id' => 2, 'name' => 'Sector 57', 'slug' => 'sector-57', 'main_title' => 'x'],
        ]);
    }

    /** Internal hrefs on a page, as paths. */
    private function paths(string $html): array
    {
        preg_match_all('/href="([^"#]+)/', $html, $m);

        return array_values(array_unique(array_map(fn ($u) => rtrim((string) parse_url($u, PHP_URL_PATH), '/'), $m[1])));
    }

    public function test_page_kinds_are_inferred_from_existing_fields(): void
    {
        $pages = config('subject_pages');
        $this->assertSame('subject', SubjectLinks::kind($pages['maths-home-tutor-mumbai'], 'maths-home-tutor-mumbai'));
        $this->assertSame('board', SubjectLinks::kind($pages['ib-tutor-mumbai'], 'ib-tutor-mumbai'));
        $this->assertSame('board_subject', SubjectLinks::kind($pages['ib-maths-tutor-gurgaon'], 'ib-maths-tutor-gurgaon'));
        $this->assertSame('class', SubjectLinks::kind($pages['class-10-home-tutor-gurgaon'], 'class-10-home-tutor-gurgaon'));
        $this->assertSame('class', SubjectLinks::kind($pages['primary-home-tutor-gurgaon'], 'primary-home-tutor-gurgaon'));
        $this->assertSame('exam', SubjectLinks::kind($pages['jee-home-tutor-mumbai'], 'jee-home-tutor-mumbai'));
        $this->assertSame('exam', SubjectLinks::kind(['subject_label' => 'MHT-CET', 'city_slug' => 'mumbai'], 'mht-cet-home-tutor-mumbai'));
        $this->assertSame('audience', SubjectLinks::kind($pages['female-home-tutor-gurgaon'], 'female-home-tutor-gurgaon'));
        $this->assertSame('audience', SubjectLinks::kind($pages['online-tutor-gurgaon'], 'online-tutor-gurgaon'));
        $this->assertSame(['IB', 'IGCSE'], SubjectLinks::boardsOf($pages['ib-igcse-chemistry-tutor-gurgaon'], 'ib-igcse-chemistry-tutor-gurgaon'));
        $this->assertSame([6, 7, 8], SubjectLinks::classNumbers(['class' => 'Class 6–8']));
    }

    public function test_city_subject_page_links_its_own_city_zones_and_localities_only(): void
    {
        $html = $this->get('/maths-home-tutor-mumbai')->assertOk()->getContent();
        $paths = $this->paths($html);

        // No other city's subject, board or class pages (the old "other subjects" leak).
        foreach (config('subject_pages') as $k => $p) {
            if (! empty($p['city_slug']) && $p['city_slug'] !== 'mumbai') {
                $this->assertNotContains('/' . $k, $paths, 'off-city link to ' . $k);
            }
        }
        // Same-city boards and subjects are there.
        foreach (['/ib-tutor-mumbai', '/cbse-home-tutor-mumbai', '/physics-home-tutor-mumbai', '/jee-home-tutor-mumbai', '/city/mumbai'] as $p) {
            $this->assertContains($p, $paths);
        }

        // Every live zone, with its hint.
        $this->assertStringContainsString('Mumbai by zone', $html);
        $zones = LinkNest::zones('mumbai');
        $this->assertGreaterThanOrEqual(10, count($zones));
        foreach ($zones as $z) {
            $this->assertStringContainsString('href="' . $z->url . '">Home tutors in ' . e($z->name) . '</a>', $html);
        }

        // 8–12 localities, spread over at least four zones, no duplicates.
        $this->assertStringContainsString('Maths home tutors by locality in Mumbai', $html);
        $areas = array_filter($paths, fn ($p) => preg_match('#^/city/mumbai/(?!zone/)[a-z0-9-]+$#', $p));
        $local = LinkNest::localities('mumbai', 'maths-home-tutor-mumbai');
        $this->assertGreaterThanOrEqual(8, count($local));
        $this->assertLessThanOrEqual(12, count($local));
        $this->assertSame(count($local), count(array_unique(array_map(fn ($a) => $a->slug, $local))));
        $this->assertGreaterThanOrEqual(4, count(array_unique(array_map(fn ($a) => $a->zone, $local))));
        foreach ($local as $a) {
            $this->assertContains('/city/mumbai/' . $a->slug, $areas);
        }

        // Each URL once in the generated chip blocks.
        preg_match_all('/class="nx-chip[^"]*" href="([^"]+)"/', $html, $m);
        $this->assertSame(count($m[1]), count(array_unique($m[1])));

        // A board page's generated chips link no other city's board pages
        // (the hand-written guide may cite the Gurgaon guide; that is prose).
        preg_match_all('/class="nx-chip[^"]*" href="([^"]+)"/', $this->get('/ib-tutor-mumbai')->assertOk()->getContent(), $c);
        $board = array_map(fn ($u) => parse_url($u, PHP_URL_PATH), $c[1]);
        $this->assertContains('/igcse-tutor-mumbai', $board);
        $this->assertNotContains('/ib-tutor-gurgaon', $board);
        $this->assertNotContains('/ib-tutor-delhi', $board);
    }

    public function test_every_mumbai_area_gets_two_links_from_mumbai_subject_pages(): void
    {
        $keys = array_keys(SubjectLinks::cityPages('mumbai'));
        $this->assertGreaterThanOrEqual(14, count($keys));
        $this->assertCount(66, $this->mumbaiAreas);

        $check = function (array $keys) {
            $inbound = array_fill_keys(array_keys($this->mumbaiAreas), 0);
            foreach ($keys as $k) {
                $picked = LinkNest::localities('mumbai', $k, $keys);
                $this->assertGreaterThanOrEqual(8, count($picked), $k);
                $this->assertLessThanOrEqual(12, count($picked), $k);
                foreach ($picked as $a) {
                    $inbound[$a->slug]++;
                }
            }
            $weak = array_filter($inbound, fn ($n) => $n < 2);
            $this->assertSame([], $weak, 'areas with fewer than 2 links from subject pages');

            return $inbound;
        };

        $inbound = $check($keys);
        // Different pages, different localities.
        $this->assertNotEquals(LinkNest::localities('mumbai', $keys[0]), LinkNest::localities('mumbai', $keys[1]));
        // Still holds when the writers' new Mumbai pages are added.
        $check(array_merge($keys, ['ssc-hsc-home-tutor-mumbai', 'mht-cet-home-tutor-mumbai', 'ib-maths-tutor-mumbai', 'class-10-home-tutor-mumbai', 'female-home-tutor-mumbai']));
        // And zones match the research file.
        foreach (LinkNest::areasByZone('mumbai') as $zone => $list) {
            foreach ($list as $a) {
                $this->assertSame($this->mumbaiAreas[$a->slug], $zone, $a->slug);
            }
        }
        $this->assertSame(66, array_sum(array_map('count', LinkNest::areasByZone('mumbai'))));
        $this->assertSame(66, count($inbound));
    }

    public function test_board_ladder_links_hub_board_subject_and_class_pages(): void
    {
        $hub = $this->paths($this->get('/ib-tutor-gurgaon')->assertOk()->getContent());
        foreach (['/ib-maths-tutor-gurgaon', '/ib-physics-tutor-gurgaon', '/ib-igcse-chemistry-tutor-gurgaon', '/class-11-home-tutor-gurgaon', '/class-12-home-tutor-gurgaon'] as $p) {
            $this->assertContains($p, $hub);
        }

        $bs = $this->paths($this->get('/ib-maths-tutor-gurgaon')->assertOk()->getContent());
        foreach (['/ib-tutor-gurgaon', '/maths-home-tutor-gurgaon', '/ib-physics-tutor-gurgaon'] as $p) {
            $this->assertContains($p, $bs);
        }

        $subject = $this->paths($this->get('/maths-home-tutor-gurgaon')->assertOk()->getContent());
        foreach (config('subject_pages') as $k => $p) {
            if (! empty($p['city_slug']) && $p['city_slug'] !== 'gurugram') {
                $this->assertNotContains('/' . $k, $subject, 'off-city link to ' . $k);
            }
        }
        foreach (['/ib-maths-tutor-gurgaon', '/igcse-maths-tutor-gurgaon', '/icse-maths-tutor-gurgaon'] as $p) {
            $this->assertContains($p, $subject);
        }

        $class = $this->paths($this->get('/class-12-home-tutor-gurgaon')->assertOk()->getContent());
        foreach (['/cbse-home-tutor-gurgaon', '/ib-tutor-gurgaon', '/jee-home-tutor-gurgaon'] as $p) {
            $this->assertContains($p, $class);
        }
        // Anchors say what the page is.
        $this->assertStringContainsString('>IB Maths Tutors in Gurgaon</a>', $this->get('/ib-tutor-gurgaon')->getContent());
    }

    public function test_zone_page_groups_city_pages_by_kind_in_the_zone_board_order(): void
    {
        $dir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'nx-nest-' . uniqid();
        File::ensureDirectoryExists($dir);
        $zones = json_decode(File::get(database_path('seo-content/zones/mumbai.json')), true);
        $zones['South Mumbai']['boards'] = ['IGCSE', 'IB', 'ICSE', 'CBSE'];
        File::put($dir . '/mumbai.json', json_encode($zones));
        config(['zone_pages.dir' => $dir]);

        try {
            $html = $this->get('/city/mumbai/zone/south-mumbai')->assertOk()->getContent();
            $this->assertStringContainsString('Tutors in South Mumbai by board, subject and class', $html);
            foreach (['board', 'subject', 'exam'] as $kind) {
                $this->assertStringContainsString('data-kind="' . $kind . '"', $html);
            }
            preg_match('/data-kind="board">(.*?)<\/ul>/s', $html, $m);
            $order = array_map(fn ($u) => parse_url($u, PHP_URL_PATH), (preg_match_all('/href="([^"]+)"/', $m[1], $h) ? $h[1] : []));
            $this->assertSame(['/igcse-tutor-mumbai', '/ib-tutor-mumbai', '/icse-home-tutor-mumbai', '/cbse-home-tutor-mumbai', '/maharashtra-board-tutor-mumbai'], $order);

            // Without the hint: config order.
            $this->assertSame([], LinkNest::zoneBoards('mumbai', 'Thane'));
        } finally {
            File::deleteDirectory($dir);
        }
    }

    public function test_area_page_has_zone_breadcrumb_and_its_own_link_selection(): void
    {
        $html = $this->get('/city/mumbai/andheri-west')->assertOk()->getContent();
        $zoneUrl = url('/city/mumbai/zone/andheri-jogeshwari');

        // Home › Mumbai › Andheri & Jogeshwari › Andheri West, visible and in schema; no India/state crumbs.
        $this->assertMatchesRegularExpression('#<nav class="crumb"[^>]*>\s*<a href="' . preg_quote(url('/'), '#') . '">Home</a>.*?<a href="' . preg_quote(url('/city/mumbai'), '#') . '">Mumbai</a>.*?<a href="' . preg_quote($zoneUrl, '#') . '">Andheri &amp; Jogeshwari</a>.*?<span aria-current="page">Andheri West</span>#s', $html);
        $this->assertStringContainsString('{"@type":"ListItem","position":3,"name":"Andheri & Jogeshwari","item":"' . $zoneUrl . '"}', $html);
        $this->assertStringContainsString('"position":4,"name":"Andheri West"', $html);
        $this->assertStringNotContainsString('"name":"India"', $html);

        // The nest block: zone, 4–6 city pages named for the area, nearby in the zone.
        preg_match('#<section class="cardx block section nx-sec" id="area-nest">(.*?)</section>#s', $html, $m);
        $block = $m[1] ?? '';
        $this->assertStringContainsString('href="' . $zoneUrl . '">Home tutors in Andheri &amp; Jogeshwari</a>', $block);
        $pages = LinkNest::forArea('mumbai', 'andheri-west', 'Andheri West', 'Andheri & Jogeshwari');
        $this->assertGreaterThanOrEqual(4, count($pages));
        $this->assertLessThanOrEqual(6, count($pages));
        foreach ($pages as $p) {
            $this->assertStringContainsString(' near Andheri West', $p['label']);
            $this->assertStringContainsString('href="' . $p['url'] . '"', $block);
        }
        $this->assertStringContainsString('Nearby in Andheri &amp; Jogeshwari', $block);
        foreach (LinkNest::nearby('mumbai', 'Andheri & Jogeshwari', 'andheri-west') as $a) {
            $this->assertSame('Andheri & Jogeshwari', $a->zone);
            $this->assertStringContainsString('href="' . $a->url . '"', $block);
        }
        // Not the same selection on a neighbour.
        $this->assertNotEquals($pages, LinkNest::forArea('mumbai', 'jogeshwari-west', 'Jogeshwari West', 'Andheri & Jogeshwari'));
        // No other city's pages.
        $this->assertStringNotContainsString(url('/maths-home-tutor-gurgaon'), $html);
    }

    public function test_city_hub_groups_pages_by_kind(): void
    {
        $html = $this->get('/city/gurugram')->assertOk()->getContent();
        foreach (['board', 'board_subject', 'subject', 'class', 'exam', 'audience'] as $kind) {
            $this->assertStringContainsString('data-kind="' . $kind . '"', $html, $kind);
        }
        $this->assertStringContainsString(url('/female-home-tutor-gurgaon'), $html);
        $this->get('/city/mumbai')->assertOk()->assertSee('data-kind="board"', false)->assertSee(url('/city/mumbai/zone/thane'), false);
    }

    public function test_city_blog_post_ends_with_the_city_nest(): void
    {
        DB::table('blog_managment')->insert([
            ['title' => 'Western suburbs guide', 'slug' => 'mumbai-western-suburbs-tuition-guide',
                'bdesc' => '<p>Tutors in <a href="/city/mumbai/andheri-west">Andheri West</a> and <a href="https://www.nxtutors.com/city/mumbai/bandra-west">Bandra West</a>.</p>'],
            ['title' => 'Fees in Mumbai', 'slug' => 'home-tuition-fees-mumbai', 'bdesc' => '<p>No links.</p>'],
            ['title' => 'Study skills', 'slug' => 'how-to-revise', 'bdesc' => '<p>Nothing local.</p>'],
        ]);

        $html = $this->get('/blog/mumbai-western-suburbs-tuition-guide')->assertOk()->getContent();
        preg_match('#id="city-nest"(.*?)</section>#s', $html, $m);
        $block = $m[1] ?? '';
        $this->assertStringContainsString('More for families in Mumbai', $block);
        $this->assertStringContainsString('href="' . url('/city/mumbai') . '"', $block);
        $this->assertStringContainsString(url('/city/mumbai/zone/andheri-jogeshwari'), $block);
        $this->assertStringContainsString(url('/city/mumbai/zone/bandra-khar-santacruz'), $block);
        $this->assertStringNotContainsString(url('/city/mumbai/zone/thane'), $block);
        preg_match_all('#href="' . preg_quote(url('/'), '#') . '/([a-z0-9-]+-mumbai)"#', $block, $p);
        $this->assertGreaterThanOrEqual(4, count($p[1]));
        $this->assertLessThanOrEqual(6, count($p[1]));

        // A city-wide post (fees): every live zone.
        $fees = $this->get('/blog/home-tuition-fees-mumbai')->assertOk()->getContent();
        $this->assertStringContainsString(url('/city/mumbai/zone/thane'), $fees);
        $this->assertStringContainsString('More for families in Mumbai', $fees);

        $this->get('/blog/how-to-revise')->assertOk()->assertDontSee('id="city-nest"', false);
    }

    public function test_tuition_jobs_lists_every_area(): void
    {
        $html = $this->get('/tuition-jobs/mumbai')->assertOk()->getContent();
        foreach (array_keys($this->mumbaiAreas) as $slug) {
            $this->assertStringContainsString('href="' . url('/city/mumbai/' . $slug) . '"', $html, $slug);
        }
    }
}
