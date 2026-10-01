<?php

namespace Tests\Feature;

use App\Support\ZonePages;
use App\Support\Zones;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

/**
 * Zone pages (/city/{city}/zone/{zone}): live only with written text in the
 * zone JSON and at least three active area pages; linked from the city hub
 * and the zone's area pages; listed in sitemap-zones.xml. The zone text is a
 * fixture in a temp folder: no placeholder content ships.
 */
class ZonePagesTest extends TestCase
{
    private string $dir;

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
            ['id' => 1, 'city_name' => 'Gurugram', 'slug' => 'gurugram'],
            ['id' => 2, 'city_name' => 'Noida', 'slug' => 'noida'],
        ]);
        DB::table('city_area_list_managment')->insert([
            // Golf Course Road: four areas (by name and by sector).
            ['city_id' => 1, 'name' => 'DLF Phase 4', 'slug' => 'dlf-phase-4', 'main_title' => 'x'],
            ['city_id' => 1, 'name' => 'DLF Phase 1', 'slug' => 'dlf-phase-1', 'main_title' => 'x'],
            ['city_id' => 1, 'name' => 'Sector 42', 'slug' => 'sector-42', 'main_title' => 'x'],
            ['city_id' => 1, 'name' => 'Sushant Lok 1', 'slug' => 'sushant-lok-1', 'main_title' => 'x'],
            // Sohna Road: one area only.
            ['city_id' => 1, 'name' => 'Vatika City, Sector 49', 'slug' => 'vatika-city-sector-49-gurugram', 'main_title' => 'x'],
        ]);
        // Inactive areas never count.
        DB::table('city_area_list_managment')->insert(['city_id' => 1, 'name' => 'Sector 48', 'slug' => 'sector-48', 'main_title' => 'x', 'status' => 'f']);
        DB::table('register')->insert([
            ['user_id' => 10, 'name' => 'Golf Tutor', 'city' => 'Gurgaon', 'address' => 'DLF Phase 2', 'join_as' => 'teacher', 'status' => 't', 'class_type' => 'Home'],
            ['user_id' => 11, 'name' => 'City Tutor', 'city' => 'gurugram', 'address' => 'Sector 57', 'join_as' => 'teacher', 'status' => 't', 'class_type' => 'Home'],
        ]);

        $this->dir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'nx-zone-pages-' . uniqid();
        File::ensureDirectoryExists($this->dir);
        config(['zone_pages.dir' => $this->dir]);
    }

    protected function tearDown(): void
    {
        File::deleteDirectory($this->dir);
        parent::tearDown();
    }

    private function writeZones(array $zones, string $city = 'gurugram'): void
    {
        File::put($this->dir . '/' . $city . '.json', json_encode($zones, JSON_UNESCAPED_UNICODE));
        touch($this->dir . '/' . $city . '.json', strtotime('2026-09-20 10:00:00'));
    }

    private function golfCourseRoad(): array
    {
        return ['intro' => ['Fixture paragraph one about the zone.', 'Fixture paragraph two.', 'Fixture paragraph three.'],
            'faqs' => [['Fixture question one?', 'Fixture answer one.'], ['Fixture question two?', 'Fixture answer two.']]];
    }

    public function test_zone_slugs_and_areas(): void
    {
        $this->assertSame('mg-road-cyber-city', Zones::slug('MG Road & Cyber City'));
        $this->assertSame('sectors-70-82', Zones::slug('Sectors 70–82'));
        $this->assertSame('MG Road & Cyber City', Zones::fromSlug('gurugram', 'mg-road-cyber-city'));
        $this->assertSame('Central Jamshedpur', Zones::fromSlug('tata', 'central-jamshedpur'));
        $this->assertNull(Zones::fromSlug('gurugram', 'nowhere'));
        $this->assertSame(['dlf-phase-1', 'dlf-phase-4', 'sector-42', 'sushant-lok-1'], Zones::areasIn('gurugram', 'Golf Course Road')->pluck('slug')->all());
        $this->assertCount(1, Zones::areasIn('gurugram', 'Sohna Road'));
    }

    public function test_titles_and_descriptions_fit_for_every_zone(): void
    {
        foreach (config('zones') as $cityKey => $zones) {
            $slug = \App\Support\Geo::slugFor($cityKey);
            foreach (array_keys($zones) as $zone) {
                $seo = ZonePages::seo($slug, $cityKey, $zone);
                $this->assertLessThanOrEqual(65, mb_strlen($seo['title']), $seo['title']);
                $this->assertGreaterThanOrEqual(140, mb_strlen($seo['desc']), $seo['desc']);
                $this->assertLessThanOrEqual(160, mb_strlen($seo['desc']), $seo['desc']);
            }
        }
        $this->assertSame('Home Tutors in Golf Course Road, Gurgaon – Free Demo | NXTutors', ZonePages::seo('gurugram', 'Gurugram', 'Golf Course Road')['title']);
    }

    public function test_zone_page_renders_with_its_text_tutors_and_schema(): void
    {
        $this->writeZones(['Golf Course Road' => $this->golfCourseRoad()]);

        $html = $this->get('/city/gurugram/zone/golf-course-road')->assertOk()->getContent();

        $this->assertStringContainsString('<title>Home Tutors in Golf Course Road, Gurgaon – Free Demo | NXTutors</title>', $html);
        $this->assertStringContainsString('Home Tutors in Golf Course Road, Gurugram</h1>', $html);
        $this->assertStringContainsString('Fixture paragraph three.', $html);
        $this->assertStringNotContainsString('noindex', $html);
        // Tips from config/zone_guides.php, but not the guide's intro (area pages carry it).
        $this->assertStringContainsString(e(config('zone_guides.Gurugram.Golf Course Road.tips.0')), $html);
        $this->assertStringNotContainsString(e(config('zone_guides.Gurugram.Golf Course Road.intro.0')), $html);
        // Areas in the zone, and not the others.
        $this->assertStringContainsString(url('/city/gurugram/sushant-lok-1'), $html);
        $this->assertStringContainsString(url('/city/gurugram/sector-42'), $html);
        $this->assertStringNotContainsString(url('/city/gurugram/vatika-city-sector-49-gurugram'), $html);
        $this->assertStringNotContainsString(url('/city/gurugram/sector-48'), $html);
        // The cascade, labelled.
        $this->assertStringContainsString('Covers Golf Course Road', $html);
        $this->assertStringContainsString('Elsewhere in Gurugram', $html);
        // Schema.
        $this->assertStringContainsString('"@type":"BreadcrumbList"', $html);
        $this->assertStringContainsString('"name":"Golf Course Road","item":"' . url('/city/gurugram/zone/golf-course-road') . '"', $html);
        $this->assertStringContainsString('"@type":"FAQPage"', $html);
        $this->assertStringContainsString('"name":"Fixture question one?"', $html);
        $this->assertStringContainsString('"areaServed":{"@type":"Place","name":"Golf Course Road, Gurugram"', $html);
        // Way out: hub, jobs.
        $this->assertStringContainsString(url('/city/gurugram'), $html);
        $this->assertStringContainsString(url('/tuition-jobs/gurugram'), $html);

        // Old spelling redirects.
        $this->get('/city/gurgaon/zone/golf-course-road')->assertStatus(301)->assertRedirect('/city/gurugram/zone/golf-course-road');
    }

    public function test_no_faq_schema_without_faqs(): void
    {
        $this->writeZones(['Golf Course Road' => ['intro' => ['Only an intro.']]]);
        $this->get('/city/gurugram/zone/golf-course-road')->assertOk()->assertDontSee('"@type":"FAQPage"', false);
    }

    public function test_zone_pages_404_without_text_or_enough_areas(): void
    {
        // No JSON at all.
        $this->get('/city/gurugram/zone/golf-course-road')->assertNotFound();

        // Text for Sohna Road, which has one active area; an empty intro for MG Road.
        $this->writeZones([
            'Sohna Road' => $this->golfCourseRoad(),
            'MG Road & Cyber City' => ['intro' => ['', '  '], 'faqs' => []],
        ]);
        $this->get('/city/gurugram/zone/sohna-road')->assertNotFound();
        $this->get('/city/gurugram/zone/mg-road-cyber-city')->assertNotFound();
        $this->get('/city/gurugram/zone/golf-course-road')->assertNotFound();
        $this->get('/city/gurugram/zone/not-a-zone')->assertNotFound();
        $this->get('/city/nowhere/zone/golf-course-road')->assertNotFound();
        $this->get('/sitemap-zones.xml')->assertNotFound();
        $this->get('/sitemap.xml')->assertOk()->assertDontSee('sitemap-zones.xml', false);
    }

    public function test_sitemap_lists_live_zone_pages_only(): void
    {
        $this->writeZones(['Golf Course Road' => $this->golfCourseRoad(), 'Sohna Road' => $this->golfCourseRoad()]);

        $this->get('/sitemap.xml')->assertOk()->assertSee('https://www.nxtutors.com/sitemap-zones.xml', false);
        $map = $this->get('/sitemap-zones.xml')->assertOk()->getContent();
        $this->assertSame(1, substr_count($map, 'https://www.nxtutors.com/city/gurugram/zone/golf-course-road<'));
        $this->assertStringNotContainsString('/zone/sohna-road', $map);
        $this->assertStringContainsString('2026-09-20', $map);
    }

    public function test_hub_and_area_pages_link_to_live_zone_pages(): void
    {
        $zoneUrl = url('/city/gurugram/zone/golf-course-road');

        $this->get('/city/gurugram')->assertOk()->assertDontSee('Browse by zone');
        $this->get('/city/gurugram/dlf-phase-4')->assertOk()->assertDontSee($zoneUrl, false);

        $this->writeZones(['Golf Course Road' => $this->golfCourseRoad(), 'Sohna Road' => $this->golfCourseRoad()]);

        $this->get('/city/gurugram')->assertOk()->assertSee('Browse by zone')->assertSee($zoneUrl, false)
            ->assertDontSee(url('/city/gurugram/zone/sohna-road'), false);
        $this->get('/city/gurugram/dlf-phase-4')->assertOk()->assertSee('<a href="' . $zoneUrl . '">Golf Course Road</a>', false);
        // An area in a zone that is not live links nowhere.
        $this->get('/city/gurugram/vatika-city-sector-49-gurugram')->assertOk()->assertDontSee('/zone/', false);
    }

    public function test_tutor_cards_on_the_page_use_photo_thumbnails(): void
    {
        $this->writeZones(['Golf Course Road' => $this->golfCourseRoad()]);
        // A real upload for one tutor (App\Support\Thumb only thumbnails files that exist).
        $folder = 'uploads/zz-zonethumb-' . uniqid();
        File::ensureDirectoryExists(public_path($folder));
        $img = imagecreatetruecolor(900, 900);
        imagejpeg($img, public_path($folder . '/face.jpg'));
        DB::table('register')->where('user_id', 10)->update(['avatar' => basename($folder) . '/face.jpg']);

        try {
            $html = $this->get('/city/gurugram/zone/golf-course-road')->assertOk()->getContent();
            $rel = $folder . '/face.jpg';
            $this->assertStringContainsString('src="' . e(\App\Support\Thumb::url($rel, 480)) . '"', $html);
            $this->assertStringContainsString('/img/t/640?src=' . rawurlencode($rel), $html);
            $this->assertStringNotContainsString('src="' . asset($rel) . '"', $html);
        } finally {
            File::deleteDirectory(public_path($folder));
        }
    }
}
