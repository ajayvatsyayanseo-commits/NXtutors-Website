<?php

namespace Tests\Feature;

use App\Support\TutorTwin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * TutorTwin on the homepage: the advert section and the hero strip.
 *
 * The links are ABSOLUTE to another host - TutorTwin is a separate application
 * on its own subdomain, so a relative link would quietly 404 on this site - and
 * carry UTM tags naming the placement. The price is TutorTwin's live one or
 * none, and the copy never claims what the product does not do.
 */
class TutorTwinHomeSectionTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    private function plans(): array
    {
        return [
            ['code' => '1M', 'duration_days' => 30, 'currency' => 'INR', 'price_minor' => 119900],
            ['code' => '3M', 'duration_days' => 90, 'currency' => 'INR', 'price_minor' => 249900],
            ['code' => 'ALL1M', 'duration_days' => 30, 'currency' => 'INR', 'price_minor' => 499900],
        ];
    }

    public function test_the_home_page_advertises_tutortwin_with_tracked_absolute_links(): void
    {
        $this->createLegacySchema();
        $base = rtrim(config('tutortwin.url'), '/');

        $html = $this->get('/')->assertOk()->getContent();

        $this->assertStringContainsString('Stuck at 11pm? Send a photo.', $html);
        $this->assertStringContainsString('TutorTwin for teachers', $html);
        $this->assertStringContainsString('href="'.$base.'/payment?utm_source=nxtutors&amp;utm_medium=home_section', $html);
        $this->assertStringContainsString('href="'.$base.'/for-tutors?utm_source=nxtutors', $html);
        $this->assertStringContainsString('href="'.$base.'/humai-tutor?utm_source=nxtutors', $html);
        $this->assertStringContainsString('utm_medium=home_hero', $html, 'the hero strip');
    }

    public function test_the_copy_makes_no_claim_the_product_cannot_keep(): void
    {
        $this->createLegacySchema();
        $html = strtolower(strip_tags($this->get('/')->getContent()));

        foreach (['whole class', 'free trial', 'unlimited', 'verified answer', '100% accurate'] as $claim) {
            $this->assertStringNotContainsString($claim, $html, $claim);
        }
        $this->assertStringContainsString('it is an ai, so check important answers', $html);
    }

    public function test_the_price_is_the_live_one_or_none(): void
    {
        $this->createLegacySchema();

        // No API (the test default): no price at all, never a stale typed one.
        $this->assertNull(TutorTwin::priceLabel());
        $this->assertStringNotContainsString('₹999', $this->get('/')->getContent());

        config(['tutortwin.api' => 'https://api.example.test']);
        Cache::forget('tutortwin.from_price');
        Http::fake(['api.example.test/public/plans' => Http::response($this->plans())]);

        $this->assertSame('from ₹1,199/month', TutorTwin::priceLabel(), 'cheapest monthly single subject');
        $this->assertStringContainsString('Start TutorTwin · from ₹1,199/month', $this->get('/')->getContent());
    }

    public function test_a_failing_price_api_never_breaks_the_page(): void
    {
        $this->createLegacySchema();
        config(['tutortwin.api' => 'https://api.example.test']);
        Cache::forget('tutortwin.from_price');
        Http::fake(['api.example.test/*' => Http::response('down', 500)]);

        $this->get('/')->assertOk()->assertSee('Start TutorTwin', false);
        $this->assertNull(TutorTwin::fromPrice());
    }

    public function test_the_host_is_configurable_rather_than_written_into_the_markup(): void
    {
        config(['tutortwin.url' => 'https://twin.example.test']);
        $this->createLegacySchema();

        $this->get('/')->assertSee('https://twin.example.test/for-tutors?', false);
    }

    public function test_strips_speak_only_about_subjects_tutortwin_sells(): void
    {
        $this->assertSame('Maths', TutorTwin::subjectFor('Class 10 CBSE Maths home tutor'));
        $this->assertSame('Computer Science', TutorTwin::subjectFor('Computer Science tutor'));
        $this->assertSame('Social Science', TutorTwin::subjectFor('SST for class 8'));
        $this->assertNull(TutorTwin::subjectFor('Guitar lessons'));
        $this->assertNull(TutorTwin::subjectFor(''));
    }
}
