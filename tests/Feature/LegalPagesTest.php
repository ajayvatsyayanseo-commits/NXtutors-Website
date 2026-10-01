<?php

namespace Tests\Feature;

use App\Http\Controllers\LegalController;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

/**
 * The policy pages (LegalController, resources/views/legal): every URL
 * answers, carries its dates, links back from the footer, sits in the pages
 * sitemap, has schema and keeps to the title and description lengths, and
 * none of them makes a claim the site may not make.
 */
class LegalPagesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        \Illuminate\Support\Facades\View::share('setting', new class {
            public function __get($k) { return $k === 'phone' ? '+91 78360 34313' : ''; }
            public function __isset($k) { return true; }
        });
    }

    public static function slugs(): array
    {
        return array_map(fn ($s) => [$s], array_keys(LegalController::PAGES));
    }

    #[DataProvider('slugs')]
    public function test_page_renders_with_dates_schema_and_footer_links(string $slug): void
    {
        $html = $this->get('/' . $slug)->assertOk()->getContent();

        $this->assertStringContainsString('Effective date:</strong> 1 October 2026', $html);
        $this->assertStringContainsString('Last updated:</strong>', $html);
        $this->assertStringContainsString('"@type":"BreadcrumbList"', $html);
        $this->assertStringContainsString('"@type":"WebPage"', $html);
        $this->assertStringContainsString('<link rel="canonical" href="' . url('/' . $slug) . '">', $html);
        $this->assertSame(1, substr_count($html, '<h1'), 'one H1');

        // The footer's Legal row links every policy page.
        $this->assertMatchesRegularExpression('#<nav class="footer-legal".*</nav>#s', $html);
        preg_match('#<nav class="footer-legal".*?</nav>#s', $html, $m);
        foreach (array_keys(LegalController::PAGES) as $other) {
            $this->assertStringContainsString('href="' . url('/' . $other) . '"', $m[0], "footer links /$other");
        }

        // Claims the site may not make (nxt-seo-rules).
        $text = strip_tags($html);
        foreach (['every tutor is verified', 'police-verified', 'background-verified', 'guaranteed results', "India's first", 'No. 1 ', 'same day'] as $bad) {
            $this->assertStringNotContainsStringIgnoringCase($bad, $text, "$slug: $bad");
        }
    }

    public function test_meta_titles_and_descriptions_fit_the_length_rules(): void
    {
        foreach (LegalController::PAGES as $slug => $p) {
            $this->assertLessThanOrEqual(65, mb_strlen($p['title']), "$slug title");
            $this->assertGreaterThanOrEqual(140, mb_strlen($p['desc']), "$slug description");
            $this->assertLessThanOrEqual(160, mb_strlen($p['desc']), "$slug description");
        }
    }

    public function test_every_policy_page_is_in_the_pages_sitemap(): void
    {
        // The pages sitemap also lists tuition-job cities; none are needed here.
        Schema::create('city_managment', function ($t) {
            $t->id(); $t->string('city_name'); $t->string('slug')->nullable(); $t->string('status')->default('t');
        });
        $xml = app(\App\Http\Controllers\HomeController::class)->sitemapSection('pages')->getContent();
        foreach (array_keys(LegalController::PAGES) as $slug) {
            $this->assertStringContainsString('<loc>https://www.nxtutors.com/' . $slug . '</loc>', $xml, $slug);
        }
    }

    public function test_safeguarding_and_terms_describe_the_id_check_without_overclaiming(): void
    {
        foreach (['/safeguarding-policy', '/terms-conditions', '/disclaimer'] as $url) {
            $text = strip_tags($this->get($url)->getContent());
            $this->assertStringContainsString('not a police verification', $text, $url);
        }
        $this->get('/privacy-policy')->assertSee('Anonymised request summaries');
        $this->get('/grievance-redressal')->assertSee('Grievance Officer');
    }

    public function test_unconfirmed_officer_name_is_not_invented(): void
    {
        config(['legal.grievance_officer' => null]);
        $html = $this->get('/grievance-redressal')->getContent();
        $this->assertStringNotContainsString('<strong>Name:</strong>', $html);

        config(['legal.grievance_officer' => 'Test Officer']);
        $this->get('/grievance-redressal')->assertSee('Test Officer');
    }
}
