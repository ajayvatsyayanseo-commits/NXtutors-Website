<?php

namespace Tests\Feature;

use App\Support\SeoText;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * Gurugram area pages with legacy Super Admin text (audit 1 Oct 2026): the
 * rewrite in database/seo-content/areas/gurugram-area-rewrite.json follows
 * the content rules, the migration 2026_10_04_130000 applies it, runs twice
 * safely and rolls back exactly, and a rendered page loses the ₹500 / "best"
 * copy, the legacy FAQs and the templated reviews.
 */
class GurugramAreaRewriteTest extends TestCase
{
    use LegacySchema;

    private const MIGRATION = 'migrations/seo/2026_10_04_130000_rewrite_gurugram_legacy_area_text.php';

    private const FEE = 'Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.';

    /** Area pages the render needs: the page itself plus three per zone. */
    private const AREAS = [
        ['Sector 88', 'sector-88'], ['Sector 86', 'sector-86'], ['Sector 90', 'sector-90'],
        ['Sector 38', 'sector-38'], ['Sector 39', 'sector-39'], ['Sector 40', 'sector-40'],
        ['DLF Phase 1', 'dlf-phase-1'], ['Adani Aangan', 'adani-aangan'], ['Not In File', 'not-in-file'],
    ];

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
            foreach (['areapid', 'area_desc', 'teacher_approch', 'area_map', 'why_choose', 'short_desc', 'package', 'tutor_types', 'subjects_covered_desc', 'meta_title', 'meta_desc', 'page_schema', 'average_rating'] as $c) {
                $t->text($c)->nullable();
            }
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
            foreach (['meta_title', 'meta_description', 'hyper_location', 'page_type', 'service_mode', 'primary_keyword', 'subjects', 'boards', 'classes_tracks', 'html', 'schemas', 'payload', 'sections', 'faqs', 'interlinks', 'local_reviews', 'local_schools', 'local_institutes', 'canonical_target'] as $c) {
                $t->text($c)->nullable();
            }
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

    /** @return array<string, array> */
    private function file(): array
    {
        $all = json_decode((string) file_get_contents(database_path('seo-content/areas/gurugram-area-rewrite.json')), true);
        $this->assertIsArray($all);

        return array_filter($all, fn ($v, $k) => $k[0] !== '_' && is_array($v), ARRAY_FILTER_USE_BOTH);
    }

    private static function plain(string $html): string
    {
        return trim(preg_replace('/\s+/u', ' ', html_entity_decode(preg_replace('/<[^>]+>/', ' ', $html), ENT_QUOTES | ENT_HTML5, 'UTF-8')));
    }

    private static function words(string $text): int
    {
        return count(preg_split('/\s+/u', trim($text), -1, PREG_SPLIT_NO_EMPTY));
    }

    /** @return array<int, true> 6-word shingles (crc32 keys, to keep memory low) */
    private static function shingles(string $text): array
    {
        preg_match_all("/[\p{L}\p{N}₹’'–-]+/u", mb_strtolower($text), $m);
        $w = $m[0];
        $out = [];
        for ($i = 0; $i + 6 <= count($w); $i++) {
            $out[crc32(implode(' ', array_slice($w, $i, 6)))] = true;
        }

        return $out;
    }

    public function test_every_rewritten_page_follows_the_content_rules(): void
    {
        $file = $this->file();
        $pages = array_filter($file, fn ($p) => isset($p['about']));
        $this->assertGreaterThanOrEqual(250, count($pages), 'the flagged Gurugram pages are covered');

        // Housing-society pages: no page may name another one.
        $societies = [];
        foreach ($pages as $slug => $p) {
            if (! empty($p['sector']) && ! preg_match('/^Sectors?\s/i', $p['name'])) {
                $societies[$slug] = $p['name'];
            }
        }
        $institution = "/\b[A-Z][\w']*(?: [A-Z][\w']*)* (?:School|Schools|Vidyalaya|Convent|Academy|College|Hospital|Medicity|Mall)\b/u";
        $named = '/\b(DPS|Delhi Public|DAV|GD Goenka|Shri ?Ram|Pathways|Heritage Xperiential|Shikshantar|Shalom Hills|Scottish High|Lotus Valley|Blue Bells|Ryan|Amity|Suncity School|Medanta|Fortis|Artemis|Max Hospital|Galleria|Cyber Hub)\b/u';

        $errors = [];
        $check = function (bool $ok, string $msg) use (&$errors) {
            if (! $ok) {
                $errors[] = $msg;
            }
        };
        foreach ($pages as $slug => $p) {
            $about = (string) $p['about'];
            $short = (string) $p['short_desc'];
            $text = self::plain($about);
            $n = self::words($text);
            $check($n >= 250 && $n <= 400, "$slug about is $n words");
            $check(mb_strlen($short) <= 190, "$slug short_desc over 190 (hero) / 250 (VARCHAR)");
            $check(count($p['faqs']) === 4, "$slug has 4 FAQs");

            $check(str_contains($about, self::FEE), "$slug fee sentence verbatim");
            $check(str_contains($about, 'Tutors who join go through an ID check'), "$slug ID check wording");
            $check(str_contains($about, 'href="/how-we-verify-tutors"'), "$slug links /how-we-verify-tutors");
            $check(str_contains($about, 'href="/city/gurugram/zone/'), "$slug links its zone");
            $check(str_contains($about, 'href="/city/gurugram"'), "$slug links the hub");
            $check(str_contains($text, $p['name']), "$slug names the page");

            $all = [$text, $short];
            foreach ($p['faqs'] as [$q, $a]) {
                $w = self::words($a);
                $check($w >= 45 && $w <= 60, "$slug FAQ answer is $w words: $q");
                $check(mb_strlen(e($a)) <= 360, "$slug FAQ answer longer than the answers already stored");
                $check(mb_strlen($q) <= 150, "$slug FAQ question too long");
                $check(! str_contains($a, '₹') || str_contains($a, self::FEE), "$slug fee sentence verbatim in FAQ");
                $all[] = $q;
                $all[] = $a;
            }

            foreach ($all as $t) {
                $own = str_replace($p['name'], ' ', $t);
                $check(! preg_match(SeoText::BANNED, $t), "$slug banned word: $t");
                $check(SeoText::badFees($t) === [], "$slug fee figure: $t");
                $check(! preg_match('/\b(Mr|Mrs|Ms|Miss|Dr)\.?\s+[A-Z]/u', $t), "$slug names a person");
                $check(! preg_match('/\b\d+\s*(km|kms|kilomet\w*|minutes?|mins?)\b/iu', $t), "$slug distance/minute figure");
                $check(! preg_match('/\b(potholes?|waterlogg\w*|garbage|power cuts?|bad roads|broken roads|unsafe)\b/iu', $t), "$slug civic complaint");
                $check(! preg_match($institution, $own), "$slug names an institution");
                $check(! preg_match($named, $own), "$slug names a school or hospital");
                $check(! preg_match('/\b(proven|100%|background[- ]verified|police[- ]verified|same day)\b/iu', $t), "$slug unsupported claim");
                foreach ($societies as $other => $name) {
                    $check($other === $slug || str_contains($p['name'], $name) || ! str_contains($t, $name), "$slug names another society ($name)");
                }
            }
        }
        $this->assertSame([], array_slice(array_values(array_unique($errors)), 0, 20));
    }

    public function test_rewritten_pages_do_not_read_alike(): void
    {
        $pages = array_values(array_filter($this->file(), fn ($p) => isset($p['about'])));
        $about = array_map(fn ($p) => self::shingles(self::plain($p['about'])), $pages);
        $faqs = array_map(fn ($p) => self::shingles(implode(' ', array_map(fn ($qa) => $qa[0] . ' ' . $qa[1], $p['faqs']))), $pages);
        $max = ['about' => 0.0, 'faqs' => 0.0];
        $n = count($pages);
        foreach (['about' => $about, 'faqs' => $faqs] as $what => $sets) {
            for ($i = 0; $i < $n; $i++) {
                for ($j = $i + 1; $j < $n; $j++) {
                    $inter = count(array_intersect_key($sets[$i], $sets[$j]));
                    $sim = $inter / (count($sets[$i]) + count($sets[$j]) - $inter);
                    $max[$what] = max($max[$what], $sim);
                }
            }
        }
        $this->assertLessThanOrEqual(0.40, $max['about'], '6-shingle similarity of about texts');
        $this->assertLessThanOrEqual(0.40, $max['faqs'], '6-shingle similarity of FAQ sets');
    }

    public function test_edit_and_review_entries_are_well_formed(): void
    {
        foreach ($this->file() as $slug => $p) {
            if (isset($p['edits'])) {
                foreach ($p['edits'] as [$from, $to]) {
                    $this->assertNotSame('', $from, $slug);
                    $this->assertDoesNotMatchRegularExpression(SeoText::BANNED, $to, $slug);
                    $this->assertDoesNotMatchRegularExpression('/Medanta|Medicity|Fortis/u', $to, $slug);
                }
            } elseif (! isset($p['about'])) {
                $this->assertSame(['reviews_only' => true], $p, $slug);
            }
        }
    }

    public function test_migration_rewrites_runs_twice_and_rolls_back_exactly(): void
    {
        $file = $this->file();
        $id = fn (string $slug, int $city = 1) => (int) DB::table('city_area_list_managment')->where('city_id', $city)->where('slug', $slug)->value('id');

        $legacy = [
            'area_desc' => '<p>Near DPS and Blessings School. Mr. Singh says our tutors are the best. All tutors are background-verified.</p>',
            'short_desc' => 'Affordable Tutors: Starting ₹500/hr',
            'subjects_covered_desc' => '<p>Maths, Science</p>', 'teacher_approch' => '<p>Proven results</p>', 'tutor_types' => '<p>Affordable Tutors</p>',
            'package' => '<p>Hourly Packages: ₹500/hr – ₹2000/hr</p>', 'why_choose' => '<p>Top tutors</p>', 'meta_desc' => 'Best home tutors ₹500',
        ];
        DB::table('city_area_list_managment')->where('id', $id('sector-88'))->update($legacy);
        DB::table('city_area_list_managment')->insert(['city_id' => 2, 'name' => 'Sector 88', 'slug' => 'sector-88', 'area_desc' => '<p>Delhi copy ₹500</p>', 'status' => 't']);
        DB::table('city_area_list_managment')->where('id', $id('not-in-file'))->update(['area_desc' => '<p>Untouched ₹500</p>']);
        $s38 = '<p>Medanta – The Medicity is on CH Bakhtawar Singh Road within the sector, and the neighbourhood is largely behind it.</p>';
        DB::table('city_area_list_managment')->where('id', $id('sector-38'))->update(['area_desc' => $s38, 'short_desc' => 'Sector 38 hero']);

        DB::table('city_area_related_faqs_managment')->insert([
            ['area_id' => $id('sector-88'), 'question' => 'What is the cost per hour?', 'answer' => 'Hourly rates range from ₹500/hr to ₹2000/hr.', 'status' => 't'],
            ['area_id' => $id('sector-88'), 'question' => 'Are tutors verified?', 'answer' => 'Yes, background-verified.', 'status' => 'f'],
            ['area_id' => $id('sector-38'), 'question' => 'How do the hospital and the highway affect tutor travel in Sector 38?', 'answer' => e('Both add traffic. Medanta – The Medicity is on CH Bakhtawar Singh Road within Sector 38 and NH-48 runs along it.'), 'status' => 't'],
            ['area_id' => $id('not-in-file'), 'question' => 'Old?', 'answer' => 'Old.', 'status' => 't'],
        ]);
        DB::table('city_area_review_managment')->insert([
            ['area_id' => $id('sector-88'), 'review_status' => 't', 'rating' => 5, 'username' => 'Mr. Singh', 'message' => 'Affordable and best'],
            ['area_id' => $id('sector-88'), 'review_status' => 'f', 'rating' => 5, 'username' => 'Kaur', 'message' => 'Pending one'],
            ['area_id' => $id('dlf-phase-1'), 'review_status' => 't', 'rating' => 5, 'username' => 'Verma', 'message' => 'Great tutor'],
            ['area_id' => $id('not-in-file'), 'review_status' => 't', 'rating' => 5, 'username' => 'Kept', 'message' => 'Kept'],
        ]);
        // Another migration's backups must survive this one's down().
        Schema::create('seo_text_backups', function ($t) {
            $t->id(); $t->string('tag', 100); $t->string('tbl', 100); $t->unsignedBigInteger('row_id')->nullable();
            $t->string('col', 100)->nullable(); $t->longText('value')->nullable(); $t->timestamps();
        });
        DB::table('seo_text_backups')->insert(['tag' => 'other_migration', 'tbl' => 'x', 'row_id' => 1, 'col' => 'c', 'value' => 'v']);

        $areasBefore = DB::table('city_area_list_managment')->orderBy('id')->get()->map(fn ($r) => (array) $r)->all();
        $faqsBefore = DB::table('city_area_related_faqs_managment')->orderBy('id')->get()->map(fn ($r) => (array) $r)->all();
        $reviewsBefore = DB::table('city_area_review_managment')->orderBy('id')->get()->map(fn ($r) => (array) $r)->all();

        $m = require database_path(self::MIGRATION);
        $m->up();
        $backups = DB::table('seo_text_backups')->count();
        $m->up();
        $this->assertSame($backups, DB::table('seo_text_backups')->count(), 'a second up() backs up nothing again');

        $row = DB::table('city_area_list_managment')->where('id', $id('sector-88'))->first();
        $this->assertSame($file['sector-88']['about'], $row->area_desc);
        $this->assertSame($file['sector-88']['short_desc'], $row->short_desc);
        foreach (['subjects_covered_desc', 'teacher_approch', 'tutor_types', 'package', 'why_choose'] as $c) {
            $this->assertSame('', $row->{$c}, $c);
        }
        $faqs = DB::table('city_area_related_faqs_managment')->where('area_id', $row->id)->orderBy('id')->get();
        $this->assertSame(array_column($file['sector-88']['faqs'], 0), $faqs->pluck('question')->all());
        $this->assertSame(array_map(fn ($qa) => e($qa[1]), $file['sector-88']['faqs']), $faqs->pluck('answer')->all());
        $this->assertSame(['f', 'f'], DB::table('city_area_review_managment')->where('area_id', $row->id)->orderBy('id')->pluck('review_status')->all());

        // Edits only: the hospital name goes, the rest of the researched text stays.
        $a38 = (string) DB::table('city_area_list_managment')->where('id', $id('sector-38'))->value('area_desc');
        $this->assertStringNotContainsString('Medanta', $a38);
        $this->assertStringContainsString('A large hospital stands on CH Bakhtawar Singh Road', $a38);
        $this->assertSame('Sector 38 hero', DB::table('city_area_list_managment')->where('id', $id('sector-38'))->value('short_desc'));
        $this->assertStringNotContainsString('Medanta', (string) DB::table('city_area_related_faqs_managment')->where('area_id', $id('sector-38'))->value('answer'));

        // Reviews only: text untouched, templated reviews pending.
        $this->assertSame('f', DB::table('city_area_review_managment')->where('area_id', $id('dlf-phase-1'))->value('review_status'));
        $this->assertNull(DB::table('city_area_list_managment')->where('id', $id('dlf-phase-1'))->value('area_desc'));

        // Other cities and pages not in the file are not touched.
        $this->assertSame('<p>Delhi copy ₹500</p>', DB::table('city_area_list_managment')->where('id', $id('sector-88', 2))->value('area_desc'));
        $this->assertSame('<p>Untouched ₹500</p>', DB::table('city_area_list_managment')->where('id', $id('not-in-file'))->value('area_desc'));
        $this->assertSame('t', DB::table('city_area_review_managment')->where('area_id', $id('not-in-file'))->value('review_status'));

        $m->down();
        $this->assertSame($areasBefore, DB::table('city_area_list_managment')->orderBy('id')->get()->map(fn ($r) => (array) $r)->all());
        $this->assertSame($faqsBefore, DB::table('city_area_related_faqs_managment')->orderBy('id')->get()->map(fn ($r) => (array) $r)->all());
        $this->assertSame($reviewsBefore, DB::table('city_area_review_managment')->orderBy('id')->get()->map(fn ($r) => (array) $r)->all());
        $this->assertTrue(Schema::hasTable('seo_text_backups'), 'kept while another migration still has backups');
        $this->assertSame(['other_migration'], DB::table('seo_text_backups')->pluck('tag')->all());

        // On its own, down() also removes the backup table it created.
        DB::table('seo_text_backups')->delete();
        $m->up();
        $m->down();
        $this->assertFalse(Schema::hasTable('seo_text_backups'));
        $this->assertSame($areasBefore, DB::table('city_area_list_managment')->orderBy('id')->get()->map(fn ($r) => (array) $r)->all());
    }

    public function test_a_rendered_area_page_loses_the_legacy_fee_best_faq_and_reviews(): void
    {
        $id = (int) DB::table('city_area_list_managment')->where('city_id', 1)->where('slug', 'sector-88')->value('id');
        DB::table('city_area_list_managment')->where('id', $id)->update([
            'short_desc' => 'Affordable Tutors: Starting ₹500/hr. Best home tutors in Sector 88.',
            'meta_desc' => 'Best and top home tutors in Sector 88 from ₹500/hr',
            'area_desc' => '<p>Sector 88 has the best tutors near Heritage School.</p>',
            'package' => '<p>Hourly Packages: ₹500/hr – ₹2000/hr</p>',
            'why_choose' => '<p>Affordable pricing, proven results</p>',
        ]);
        DB::table('city_area_related_faqs_managment')->insert(['area_id' => $id, 'question' => 'What is the cost per hour?', 'answer' => 'Hourly rates range from ₹500/hr to ₹2000/hr. We have the best tutors.', 'status' => 't']);
        DB::table('city_area_review_managment')->insert(['area_id' => $id, 'review_status' => 't', 'rating' => 5, 'username' => 'Mrs. Sharma', 'message' => 'Affordable and the best tutor']);

        $before = $this->get('/city/gurugram/sector-88')->assertOk()->getContent();
        $this->assertStringContainsString('Hourly rates range from ₹500', $before, 'the legacy FAQ renders before the migration');
        $this->assertStringContainsString('Mrs. Sharma', $before);

        (require database_path(self::MIGRATION))->up();
        Cache::flush();

        $page = $this->get('/city/gurugram/sector-88')->assertOk()->getContent();
        foreach (['₹500', '₹2000', 'Hourly rates range', 'Affordable', 'Mrs. Sharma', 'Heritage School', 'Pricing &amp; Packages', 'Why Choose NXTutors'] as $gone) {
            $this->assertStringNotContainsString($gone, $page, $gone);
        }
        $file = $this->file();
        $this->assertStringContainsString(e($file['sector-88']['faqs'][0][0]), $page, 'the new FAQs render');
        $this->assertStringContainsString('href="/how-we-verify-tutors"', $page);

        // The page's own copy (hero, about, FAQs and the FAQPage JSON-LD) has no banned word.
        $this->assertSame(1, preg_match('/<h1 class="hero-title">.*?<\/section>/s', $page, $hero));
        $this->assertSame(1, preg_match('/About this Area.*?<aside/s', $page, $about));
        $this->assertSame(1, preg_match('/id="faqs".*?<\/section>/s', $page, $faq));
        $this->assertSame(1, preg_match('/<script type="application\/ld\+json">(\{[^<]*"FAQPage".*?)<\/script>/s', $page, $ld));
        foreach ([$hero[0], $about[0], $faq[0], $ld[1]] as $part) {
            $this->assertDoesNotMatchRegularExpression(SeoText::BANNED, self::plain($part));
        }
        $this->assertStringContainsString('Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour', html_entity_decode($about[0]));
    }
}
