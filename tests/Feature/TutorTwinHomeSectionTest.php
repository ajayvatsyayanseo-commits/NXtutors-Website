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

    /** The shape of TutorTwin's /public/plans on 28 Sep 2026. */
    private function plans(bool $withTrial = true): array
    {
        $photos = fn (int $n) => ['answers_included' => 15, 'photos_per_day' => $n];

        return array_values(array_filter([
            $withTrial ? ['code' => 'TRIAL', 'tier' => 'TRIAL', 'duration_days' => 1, 'currency' => 'INR', 'price_minor' => 4900, 'limits' => $photos(15)] : null,
            ['code' => 'SOLO1M', 'tier' => 'SOLO', 'duration_days' => 30, 'currency' => 'INR', 'price_minor' => 49900, 'limits' => $photos(0)],
            ['code' => 'SOLO3M', 'tier' => 'SOLO', 'duration_days' => 90, 'currency' => 'INR', 'price_minor' => 129900, 'limits' => $photos(0)],
            ['code' => '1M', 'tier' => 'PRO', 'duration_days' => 30, 'currency' => 'INR', 'price_minor' => 99900, 'limits' => $photos(60)],
            ['code' => 'ALL1M', 'tier' => 'ELITE', 'duration_days' => 30, 'currency' => 'INR', 'price_minor' => 399900, 'limits' => $photos(200)],
        ]));
    }

    private function live(bool $withTrial = true): void
    {
        config(['tutortwin.api' => 'https://api.example.test']);
        Cache::flush();
        Http::fake([
            'api.example.test/public/plans' => Http::response($this->plans($withTrial)),
            'api.example.test/public/tutor-plans' => Http::response([
                ['code' => 'T1M', 'price_paise' => 399900, 'duration_days' => 30, 'seats' => 25],
                ['code' => 'T3M', 'price_paise' => 799900, 'duration_days' => 90, 'seats' => 25],
            ]),
        ]);
    }

    public function test_the_teacher_advert_sells_free_sign_up_with_the_live_plan(): void
    {
        $this->createLegacySchema();
        $this->live();
        $html = $this->get('/')->getContent();

        $this->assertStringContainsString('Sign up free as a teacher', $html);
        $this->assertStringContainsString('25 student seats · plans from ₹3,999/month', $html);
        $this->assertStringContainsString('report to parents every Sunday', $html);
        $this->assertStringContainsString('role="img" aria-label="Sketch: a teacher asleep', $html, 'the picture is described for screen readers');
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
        $html = $this->get('/')->getContent();
        $this->assertStringNotContainsString('Try 1 day', $html);
        $this->assertStringNotContainsString('/month for typed', $html);
        $this->assertStringContainsString('Start TutorTwin', $html);

        $this->live();
        $this->assertSame('Try 1 day for ₹49', TutorTwin::trialLabel());
        $this->assertSame('from ₹499/month', TutorTwin::priceLabel(), 'cheapest monthly plan, trial excluded');
        $this->assertSame('from ₹999/month', TutorTwin::priceLabel(true), 'cheapest monthly plan with photos (Pro)');
    }

    /** The trial leads; the cheaper Solo price is quoted only for typed questions. */
    public function test_the_trial_leads_and_the_photo_promise_is_priced_with_pro(): void
    {
        $this->createLegacySchema();
        $this->live();
        $html = $this->get('/')->getContent();

        $this->assertStringContainsString('Try 1 day for ₹49', $html);
        $this->assertStringContainsString('15 answers, photos included.', $html);
        $this->assertStringContainsString('from ₹499/month for typed questions; photos, PDFs and voice notes on Pro, from ₹999/month', $html);
        $this->assertStringContainsString('utm_content=trial', $html);
        // The hero strip promises photos: never next to the Solo (typed-only) price.
        $this->assertDoesNotMatchRegularExpression('/Send a photo[^<]*₹499/u', $html);
    }

    public function test_without_a_trial_the_button_starts_at_the_live_monthly_price(): void
    {
        $this->createLegacySchema();
        $this->live(false);
        $html = $this->get('/')->getContent();

        $this->assertStringContainsString('Start TutorTwin · from ₹499/month', $html);
        $this->assertMatchesRegularExpression('/Send a photo[^<]*from ₹999\/month/u', $html, 'strip quotes the photo plan');
    }

    public function test_a_failing_price_api_never_breaks_the_page(): void
    {
        $this->createLegacySchema();
        config(['tutortwin.api' => 'https://api.example.test']);
        Cache::flush();
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
