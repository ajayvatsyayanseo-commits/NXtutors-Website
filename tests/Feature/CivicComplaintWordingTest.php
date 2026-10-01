<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

/**
 * No civic complaints on the site: traffic and rain only as timing advice.
 * Runs the rewording migration up and down on seeded rows, and checks the
 * source files that feed live pages carry the new wording only.
 */
class CivicComplaintWordingTest extends TestCase
{
    private const MIGRATION = 'migrations/seo/2026_10_04_090000_neutral_wording_for_civic_complaints.php';

    private const BANNED = '/waterlog|pothole|encroach|stray cattle|complain|civic issue|construction dust|everyday problems|poor shape|patchy (road|street)|drainage problem/i';

    protected function setUp(): void
    {
        parent::setUp();
        Schema::create('city_managment', function ($t) {
            $t->id(); $t->string('city_name')->nullable(); $t->string('slug')->nullable();
        });
        Schema::create('city_area_list_managment', function ($t) {
            $t->id(); $t->unsignedBigInteger('city_id'); $t->string('slug')->nullable(); $t->text('area_desc')->nullable();
        });
        Schema::create('city_area_related_faqs_managment', function ($t) {
            $t->id(); $t->unsignedBigInteger('area_id')->nullable(); $t->text('question')->nullable(); $t->text('answer')->nullable();
        });
        Schema::create('blog_managment', function ($t) {
            $t->id(); $t->string('slug')->nullable(); $t->text('bdesc')->nullable();
        });
    }

    private function migration(): object
    {
        return require database_path(self::MIGRATION);
    }

    private function swaps(object $m, string $name): array
    {
        return (new \ReflectionClass($m))->getConstant($name);
    }

    private function areaId(string $city, string $area): int
    {
        $cityId = DB::table('city_managment')->where('slug', $city)->value('id')
            ?? DB::table('city_managment')->insertGetId(['city_name' => $city, 'slug' => $city]);

        return (int) (DB::table('city_area_list_managment')->where('city_id', $cityId)->where('slug', $area)->value('id')
            ?? DB::table('city_area_list_managment')->insertGetId(['city_id' => $cityId, 'slug' => $area, 'area_desc' => '<p>Intro.</p>']));
    }

    public function test_migration_rewords_only_matched_rows_and_rolls_back(): void
    {
        $m = $this->migration();
        $areas = $this->swaps($m, 'AREAS');
        $faqs = $this->swaps($m, 'FAQS');
        $blogs = $this->swaps($m, 'BLOGS');
        $this->assertNotEmpty($areas);
        $this->assertNotEmpty($faqs);
        $this->assertNotEmpty($blogs);

        // Seed rows that hold the old wording, the way the earlier seo
        // migrations stored it (FAQ answers through e()).
        foreach ($areas as [$city, $area, $old]) {
            $id = $this->areaId($city, $area);
            $desc = DB::table('city_area_list_managment')->where('id', $id)->value('area_desc');
            DB::table('city_area_list_managment')->where('id', $id)->update(['area_desc' => $desc . '<p>' . $old . ' Tail.</p>']);
        }
        foreach ($faqs as [$city, $area, $old]) {
            $id = $this->areaId($city, $area);
            str_ends_with($old, '?')
                ? DB::table('city_area_related_faqs_managment')->insert(['area_id' => $id, 'question' => $old, 'answer' => e('Answer.')])
                : DB::table('city_area_related_faqs_managment')->insert(['area_id' => $id, 'question' => 'Q?', 'answer' => e("It's this. " . $old)]);
        }
        $bodies = [];
        foreach ($blogs as [$slug, $old]) {
            $bodies[$slug] = ($bodies[$slug] ?? "<p>Start.</p>\n") . $old . "\n";
        }
        foreach ($bodies as $slug => $body) {
            DB::table('blog_managment')->insert(['slug' => $slug, 'bdesc' => $body . '<p>End.</p>']);
        }
        // Rows the migration must not touch: another city with the same area
        // slug, and a blog with another slug carrying the same sentence.
        $otherCity = DB::table('city_managment')->insertGetId(['city_name' => 'Elsewhere', 'slug' => 'elsewhere']);
        $otherArea = DB::table('city_area_list_managment')->insertGetId(['city_id' => $otherCity, 'slug' => $areas[0][1], 'area_desc' => $areas[0][2]]);
        DB::table('blog_managment')->insert(['slug' => 'another-post', 'bdesc' => $blogs[0][1]]);

        $before = [
            'areas' => DB::table('city_area_list_managment')->orderBy('id')->pluck('area_desc', 'id')->all(),
            'faqs' => DB::table('city_area_related_faqs_managment')->orderBy('id')->get(['question', 'answer'])->map(fn ($r) => (array) $r)->all(),
            'blogs' => DB::table('blog_managment')->orderBy('id')->pluck('bdesc', 'id')->all(),
        ];

        $m->up();

        foreach ($areas as [$city, $area, $old, $new]) {
            $desc = (string) DB::table('city_area_list_managment')->where('id', $this->areaId($city, $area))->value('area_desc');
            $this->assertStringContainsString($new, $desc);
            $this->assertStringNotContainsString($old, $desc);
        }
        foreach ($faqs as [$city, $area, $old, $new]) {
            $rows = DB::table('city_area_related_faqs_managment')->where('area_id', $this->areaId($city, $area))->get();
            $text = $rows->map(fn ($r) => $r->question . ' ' . $r->answer)->implode(' ');
            $this->assertStringContainsString(str_ends_with($old, '?') ? $new : e($new), $text);
            $this->assertStringNotContainsString(str_ends_with($old, '?') ? $old : e($old), $text);
        }
        foreach ($blogs as [$slug, $old, $new]) {
            $body = (string) DB::table('blog_managment')->where('slug', $slug)->value('bdesc');
            $this->assertStringContainsString($new, $body);
            $this->assertStringNotContainsString($old, $body);
        }
        $this->assertSame($areas[0][2], DB::table('city_area_list_managment')->where('id', $otherArea)->value('area_desc'));
        $this->assertSame($blogs[0][1], DB::table('blog_managment')->where('slug', 'another-post')->value('bdesc'));
        $this->assertStringContainsString("It&#039;s this.", (string) DB::table('city_area_related_faqs_managment')->where('question', 'Q?')->value('answer'));

        $m->up(); // a second run changes nothing more
        $m->down();

        $this->assertSame($before['areas'], DB::table('city_area_list_managment')->orderBy('id')->pluck('area_desc', 'id')->all());
        $this->assertSame($before['faqs'], DB::table('city_area_related_faqs_managment')->orderBy('id')->get(['question', 'answer'])->map(fn ($r) => (array) $r)->all());
        $this->assertSame($before['blogs'], DB::table('blog_managment')->orderBy('id')->pluck('bdesc', 'id')->all());
    }

    public function test_source_files_carry_the_new_wording(): void
    {
        $m = $this->migration();
        $research = [];
        foreach (['noida', 'greater-noida'] as $city) {
            $research[$city] = json_decode((string) file_get_contents(database_path("seo-content/areas/$city-research.json")), true)['areas'];
        }
        foreach ($this->swaps($m, 'AREAS') as [$city, $area, $old, $new]) {
            $this->assertStringContainsString($new, $research[$city][$area]['about'], "$city/$area");
            $this->assertStringNotContainsString($old, $research[$city][$area]['about'], "$city/$area");
        }

        $faqFiles = ['noida' => ['noida-faqs-1.json', 'noida-faqs-2.json'], 'greater-noida' => ['greater-noida-faqs.json']];
        foreach ($this->swaps($m, 'FAQS') as [$city, $area, $old, $new]) {
            $pairs = [];
            foreach ($faqFiles[$city] as $f) {
                $pairs += json_decode((string) file_get_contents(database_path("seo-content/areas/$f")), true);
            }
            $text = implode(' ', array_merge(...$pairs[$area]));
            $this->assertStringContainsString($new, $text, "$city/$area");
            $this->assertStringNotContainsString($old, $text, "$city/$area");
        }

        foreach ($this->swaps($m, 'BLOGS') as [$slug, $old, $new]) {
            $html = (string) file_get_contents(database_path("seo-content/blog/$slug.html"));
            $this->assertStringContainsString($new, $html, $slug);
            $this->assertStringNotContainsString($old, $html, $slug);
        }
    }

    public function test_no_complaint_wording_in_live_sources(): void
    {
        $files = array_merge(
            glob(database_path('seo-content/areas/*-research.json')),
            glob(database_path('seo-content/areas/*-faqs*.json')),
            glob(database_path('seo-content/blog/*.html')),
            glob(database_path('seo-content/zones/*.json')),
            glob(resource_path('views/city/content/*.blade.php')),
            [config_path('zone_guides.php')],
        );
        foreach ($files as $file) {
            $text = (string) file_get_contents($file);
            if (str_ends_with($file, '-research.json')) {
                // Only the "about" text is published; zone_facts are research notes.
                $text = implode(' ', array_column(json_decode($text, true)['areas'] ?? [], 'about'));
            }
            $this->assertDoesNotMatchRegularExpression(self::BANNED, $text, basename($file));
        }
    }
}
