<?php

namespace Tests\Feature;

use App\Support\CityHub;
use App\Support\SeoText;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * Titles and meta descriptions of the pages built from data (area pages,
 * indexed /p/ pages, home) follow the rules in nxt-seo-rules: titles ≤ 65
 * with the brand, descriptions 140–160, no banned words, only the approved
 * fee figures, and never the legacy text typed into Super Admin.
 * See App\Support\SeoText. Rendered area and /p/ pages: GeoStructureTest.
 */
class SeoMetaTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    public function test_the_checker_catches_what_the_legacy_text_said(): void
    {
        $legacy = [
            'Find best home tutors (female & experienced) in Sector 88 Gurugram for CBSE & ICSE. Online/offline lessons ₹500–₹2000/hr. Book today!',
            'Top home tutors near Sector 59 for every board. Affordable ₹500–₹2000/hr, verified tutors.',
            'Hire top home tutors in Sector 37C. No. 1 tutoring, guaranteed results.',
        ];
        foreach ($legacy as $d) {
            $this->assertNotSame([], array_filter(SeoText::problems('Home Tutors in X | NXTutors', $d), fn ($p) => str_contains($p, 'banned') || str_contains($p, 'fee')), $d);
        }
        $this->assertSame(['₹500–₹2000'], SeoText::badFees('Fees ₹500–₹2000/hr'));
        $this->assertSame([], SeoText::badFees('Most fees ₹800–2,500/hr'));
        $this->assertContains('title no brand', SeoText::problems('Home Tutor in Sector 4, Gurugram – Accountancy, Class 11 (Commerce)', str_repeat('x', 150)));
    }

    /** Every pattern (sector, society, named place, long name; with and without a zone; other cities) fits the rules. */
    public function test_area_patterns_fit_the_rules_for_every_kind_of_place(): void
    {
        $cases = [];
        foreach (['Sector 4', 'Sector 37C', 'Sector 88', 'Sector 89A', 'Sector 108', 'Sector 63A', 'Sector 28', 'Sector 72', 'Sector 10A'] as $n) {
            $cases[] = ['gurugram', 'Gurugram', $n, strtolower(str_replace(' ', '-', $n))];
        }
        foreach (['DLF Phase 1', 'DLF Phase 5', 'Palam Vihar', 'Sushant Lok 1', 'Golf Course Road', 'Cyber City', 'South City 2', 'Nirvana Country',
            'Golf Course Road interface (E-Block side)', 'Huda Plots (122018)', 'Vatika City, Sector 49', 'An Unusually Long Housing Society Name Phase Two Extension Block'] as $n) {
            $cases[] = ['gurugram', 'Gurugram', $n, strtolower(preg_replace('/[^a-z0-9]+/i', '-', $n))];
        }
        // Housing societies with a researched sector (config/area_sectors.php).
        foreach (array_slice(config('area_sectors.gurugram', []), 0, 40, true) as $slug => $sector) {
            $cases[] = ['gurugram', 'Gurugram', ucwords(str_replace('-', ' ', $slug)), $slug];
        }
        foreach ([['noida', 'Noida', 'Sector 62'], ['noida', 'Noida', 'Sector 150'], ['kolkata', 'Kolkata', 'Salt Lake'], ['ghaziabad', 'Ghaziabad', 'Indirapuram'],
            ['greater-noida', 'Greater Noida', 'Alpha 1'], ['mumbai', 'Mumbai', 'Powai'], ['thiruvananthapuram', 'Thiruvananthapuram', 'Kowdiar']] as [$c, $cn, $n]) {
            $cases[] = [$c, $cn, $n, strtolower(str_replace(' ', '-', $n))];
        }

        $descs = [];
        foreach ($cases as [$citySlug, $cityName, $name, $slug]) {
            $tc = SeoText::titleCity($citySlug, $cityName);
            $sector = config("area_sectors.$citySlug.$slug");
            $zone = CityHub::zoneOfArea($citySlug, $cityName, (object) ['name' => $name, 'slug' => $slug]);
            $title = SeoText::areaTitle($name, $tc);
            $desc = SeoText::areaDesc($name, $tc, $zone, $sector ?: null, $slug);
            $this->assertSame([], SeoText::problems($title, $desc), "$citySlug/$slug: $title | $desc");
            if ($citySlug === 'gurugram') {
                if (mb_strlen($name) <= 30) {
                    $this->assertStringContainsString('Gurgaon', $title, $slug);
                }
                $this->assertStringNotContainsString('Gurugram', $title, 'titles say Gurgaon: ' . $slug);
                if ($zone && mb_strlen($name) <= 30) {
                    $this->assertStringContainsString($zone, $desc, "the zone is named: $slug");
                }
            }
            $descs[] = $desc;
        }

        // Not one template for 400 pages: the sector pages alone use several wordings.
        $openings = array_unique(array_map(fn ($d) => strtok($d, ' ') . ' ' . strtok(' '), $descs));
        $this->assertGreaterThanOrEqual(4, count($openings));
        $this->assertSame(count($descs), count(array_unique($descs)), 'no two areas share a description');
    }

    public function test_striking_area_pages_name_what_people_search(): void
    {
        $this->assertSame('Home Tutors in Sector 88, Gurgaon – Free Demo | NXTutors', SeoText::areaTitle('Sector 88', 'Gurgaon'));
        $d = SeoText::areaDesc('DLF Phase 1', 'Gurgaon', 'Golf Course Road', null, 'dlf-phase-1');
        $this->assertStringContainsString('DLF Phase 1 (DLF City)', $d, '"dlf city phase 1 home tutor"');
        foreach (['2–3 matched tutors', 'free'] as $fact) {
            $this->assertStringContainsString($fact, SeoText::areaDesc('Sector 88', 'Gurgaon', 'New Gurugram', null, 'sector-88'));
        }
    }

    /** Every indexed /p/ page with a 'seo' row in config/generated_pages.php. */
    public function test_every_indexed_generated_page_title_and_description_fit(): void
    {
        $rows = config('generated_pages.seo');
        $this->assertNotEmpty($rows);
        $titles = [];
        foreach ($rows as $slug => $row) {
            $seo = SeoText::generatedPage($row[0], $row[1], $row[2], $row[3] ?? null, $slug);
            $this->assertSame([], SeoText::problems($seo['title'], $seo['desc']), "$slug: {$seo['title']} | {$seo['desc']}");
            if ($row[1] === 'Gurugram') {
                $this->assertStringContainsString('Gurgaon', $seo['title'], $slug);
            }
            $this->assertStringContainsString('free', $seo['desc'], $slug);
            if (stripos($row[2], 'accountancy') !== false) {
                $this->assertDoesNotMatchRegularExpression('/\bIB\b/', $seo['title'] . ' ' . $seo['desc'], 'no "IB accountancy": ' . $slug);
                $this->assertStringContainsString('Class 11', $seo['title'], $slug);
                $this->assertStringContainsString('CBSE or ISC', $seo['desc'], $slug);
            }
            $titles[] = $seo['title'];
        }

        foreach (array_keys($rows) as $slug) {
            $this->assertContains($slug, config('generated_pages.indexable'), "seo row for a page not kept in the index: $slug");
        }
        foreach (config('generated_pages.indexable') as $slug) {
            $this->assertArrayHasKey($slug, $rows, "indexed page without a vetted title: $slug");
        }
    }

    public function test_home_meta_fits_for_any_city_count(): void
    {
        foreach ([0, 1, 2, 27, 99, 150] as $n) {
            $seo = SeoText::home($n, $n > 0);
            $this->assertSame([], SeoText::problems($seo['title'], $seo['desc']), "$n cities: {$seo['title']} | {$seo['desc']}");
            $this->assertStringContainsString('Home Tutors Near You', $seo['title']);
            $this->assertStringContainsString('Gurgaon', $seo['title']);
        }
        $this->assertStringContainsString('26 more cities', SeoText::home(27)['desc']);
        $this->assertStringContainsString('one more city', SeoText::home(2)['desc']);
    }

    /** The rendered home page counts cities from the data, not the typed "24 cities". */
    public function test_rendered_home_counts_cities_and_ignores_the_typed_meta(): void
    {
        $this->createLegacySchema();
        Cache::flush();
        DB::table('pages')->insert(['slug' => 'home', 'status' => 't',
            'meta_title' => 'Home Tutors Near You & Online Tutors – CBSE, IB, JEE | NXTutors',
            'meta_description' => 'Verified home tutors in 24 Indian cities and online tutors nationwide. Best tutors guaranteed.']);
        foreach (['gurugram' => 'Gurugram', 'noida' => 'Noida', 'kolkata' => 'Kolkata', 'delhi-ncr' => 'Delhi NCR'] as $slug => $name) {
            $id = DB::table('city_managment')->insertGetId(['city_name' => $name, 'slug' => $slug, 'status' => 't']);
            if ($slug !== 'delhi-ncr') { // a hub without area pages is not a city we serve
                DB::table('city_area_list_managment')->insert(['city_id' => $id, 'name' => 'A ' . $name, 'slug' => 'a-' . $slug, 'status' => 't']);
            }
        }

        $html = $this->get('/')->assertOk()->getContent();
        [$title, $desc] = self::meta($html);
        $this->assertSame([], SeoText::problems($title, $desc), "$title | $desc");
        $this->assertStringContainsString('2 more cities', $desc);
        $this->assertStringNotContainsString('24', $title . $desc);
    }

    /** @return array{0:string, 1:string} */
    public static function meta(string $html): array
    {
        preg_match('#<title>(.*?)</title>#s', $html, $t);
        preg_match('#<meta name="description" content="([^"]*)"#', $html, $d);

        return [html_entity_decode(trim($t[1] ?? ''), ENT_QUOTES), html_entity_decode($d[1] ?? '', ENT_QUOTES)];
    }
}
