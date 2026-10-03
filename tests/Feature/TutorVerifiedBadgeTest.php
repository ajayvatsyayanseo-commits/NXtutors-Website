<?php

namespace Tests\Feature;

use App\Mail\NewTutorToCheckMail;
use App\Models\Register;
use App\NxtAi\Models\NxtAiConversation;
use App\NxtAi\Support\PublicTutorFieldMapper;
use App\NxtAi\Support\ToolContext;
use App\NxtAi\Tools\CompareTutorsTool;
use App\NxtAi\Tools\GetTutorDetailsTool;
use App\Services\TutorIntake;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * Live is not Verified (owner decision, 3 Oct 2026). A new tutor can be public
 * before the team's ID check; the Verified badge (and every "verified" word
 * about that tutor: cards, profile, JSON-LD, AI tools) appears only after the
 * admin's Approve sets register.id_verified_at. New WhatsApp tutors go live
 * at once while config tutors.publish_before_review is on, stay pending when
 * it is off, and each sends the reviewer one email.
 */
class TutorVerifiedBadgeTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->createLegacySchema();
        config()->set('agent.hash_pepper', 'verified-badge-test-pepper');
        Schema::table('register', fn ($t) => $t->boolean('is_sample')->default(false));
        // The real migration adds the columns (nothing to backfill yet).
        (require database_path('migrations/seo/2026_10_07_140000_add_id_verified_at_to_register.php'))->up();
        foreach (['register.sample_column', 'register.id_verified_column', 'register.review_notified_column', 'register.id_verified_ids'] as $k) {
            app()->forgetInstance($k);
        }
    }

    private function tutor(array $attrs = []): Register
    {
        $id = DB::table('register')->insertGetId($attrs + [
            'user_id' => '901', 'name' => 'Priya Live', 'city' => 'Gurgaon', 'join_as' => 'teacher', 'status' => 't',
            'is_sample' => 0, 'gender' => 'female', 'phone' => '9310300001', 'email' => 'priya@example.com',
            'pro_desc' => 'I teach maths for CBSE.', 'otp_status' => 't',
        ]);
        Register::forgetIdVerifiedCache();

        return Register::findOrFail($id);
    }

    private function card(Register $t): string
    {
        return view('partials.tutor-card', ['t' => $t, 'img' => '', 'chips' => [], 'rating' => '0.0', 'reviews' => 0,
            'address' => '', 'city' => 'Gurgaon', 'waLink' => '#', 'profileUrl' => '#'])->render();
    }

    private function profile(Register $t): string
    {
        $tok = rtrim(strtr(base64_encode($t->user_id.'-nxt'), '+/', '-_'), '=');

        return $this->get('/tutor/gurgaon/'.$tok.'/'.\Illuminate\Support\Str::slug($t->name))->assertOk()->getContent();
    }

    /** The JSON-LD blocks of a page, joined. */
    private function jsonLd(string $html): string
    {
        preg_match_all('#<script[^>]+application/ld\+json[^>]*>(.*?)</script>#is', $html, $m);

        return implode("\n", $m[1]);
    }

    public function test_a_live_tutor_has_no_badge_until_approved_then_has_it(): void
    {
        $t = $this->tutor();
        $this->assertFalse($t->isIdVerified());
        $this->assertStringNotContainsString('badge-verified', $this->card($t));

        $this->withoutExceptionHandling();
        $html = $this->profile($t);
        $this->assertStringNotContainsString('Verified · Woman tutor', $html);
        $this->assertStringNotContainsString('ID checked by', $html);
        $this->assertStringNotContainsString(', a verified ', $html);
        $this->assertDoesNotMatchRegularExpression('/verified/i', $this->jsonLd($html), 'no "verified" in the tutor JSON-LD');

        $this->withoutMiddleware();
        $this->post(route('super.teacher.approve', $t->id))
            ->assertRedirect(route('super.teacher.edit', $t->id))
            ->assertSessionHas('success', 'Priya Live approved: Verified badge on.');

        $t->refresh();
        $this->assertNotNull($t->id_verified_at);
        $this->assertTrue($t->isIdVerified());
        $this->assertStringContainsString('Verified · Woman tutor', $this->card($t));
        $html = $this->profile($t);
        $this->assertStringContainsString('Verified · Woman tutor', $html);
        $this->assertStringContainsString('Verified tutor in Gurgaon', $this->jsonLd($html));

        // And off again: the profile stays live.
        $this->post(route('super.teacher.unverify', $t->id))->assertRedirect();
        $t->refresh();
        $this->assertNull($t->id_verified_at);
        $this->assertSame('t', $t->status);
        $this->assertStringNotContainsString('badge-verified', $this->card($t));
    }

    public function test_a_pending_tutor_is_approved_live_and_verified_in_one_step(): void
    {
        $t = $this->tutor(['status' => 'p']);
        $this->withoutMiddleware();
        $this->post(route('super.teacher.approve', $t->id))->assertRedirect();
        $t->refresh();
        $this->assertSame('t', $t->status);
        $this->assertNotNull($t->id_verified_at);
        $this->assertTrue($t->isIdVerified());
    }

    public function test_sample_profiles_are_never_verified(): void
    {
        $t = $this->tutor(['is_sample' => 1, 'id_verified_at' => now()]);
        $this->assertFalse($t->isIdVerified());
        $this->assertStringNotContainsString('badge-verified', $this->card($t));
        $this->assertArrayNotHasKey($t->user_id, Register::idVerifiedUserIds());
        $this->assertFalse(app(PublicTutorFieldMapper::class)->toPublicArray($t)['id_verified']);
    }

    public function test_cards_without_the_column_in_their_select_still_follow_the_rule(): void
    {
        $this->tutor(['user_id' => '911', 'name' => 'Asha Approved', 'id_verified_at' => now()]);
        $this->tutor(['user_id' => '912', 'name' => 'Bina Waiting']);
        // A partial select, as the listing queries make.
        $approved = Register::select('user_id', 'name', 'status', 'gender')->where('user_id', '911')->first();
        $waiting = Register::select('user_id', 'name', 'status', 'gender')->where('user_id', '912')->first();
        $this->assertStringContainsString('badge-verified', $this->card($approved));
        $this->assertStringNotContainsString('badge-verified', $this->card($waiting));
    }

    public function test_ai_tools_never_call_an_unapproved_tutor_verified(): void
    {
        $a = $this->tutor(['user_id' => '921', 'name' => 'Chitra Waiting']);
        $b = $this->tutor(['user_id' => '922', 'name' => 'Deepa Waiting', 'phone' => '9310300002', 'email' => 'd@example.com']);
        $mapper = app(PublicTutorFieldMapper::class);
        $refA = $mapper->toPublicArray($a)['ref'];
        $refB = $mapper->toPublicArray($b)['ref'];
        $ctx = fn () => new ToolContext(new NxtAiConversation());

        $details = app(GetTutorDetailsTool::class)->handle(['ref' => $refA], $ctx());
        $this->assertTrue($details->ok);
        $this->assertDoesNotMatchRegularExpression('/verified/i', json_encode([$details->data, $details->blocks]));
        $compare = app(CompareTutorsTool::class)->handle(['refs' => [$refA, $refB]], $ctx());
        $this->assertTrue($compare->ok);
        $this->assertDoesNotMatchRegularExpression('/verified/i', json_encode([$compare->data, $compare->blocks]));

        // Approved: the tools say so, so the assistant may too.
        DB::table('register')->where('user_id', '921')->update(['id_verified_at' => now()]);
        Register::forgetIdVerifiedCache();
        $details = app(GetTutorDetailsTool::class)->handle(['ref' => $refA], $ctx());
        $this->assertTrue($details->data['tutor']['id_verified'] ?? false);
        $this->assertStringContainsString('id_verified=true', \App\NxtAi\Prompts\SystemPrompt::build());
    }

    public function test_new_whatsapp_tutor_goes_live_unverified_when_publishing_before_review(): void
    {
        Mail::fake();
        config()->set('tutors.publish_before_review', true);
        $t = $this->tutor(['user_id' => 'NXT-2026-NEW001', 'name' => 'Esha New', 'status' => 'p']);

        $this->artisan('tutors:review-intake')->assertSuccessful();

        $t->refresh();
        $this->assertSame('t', $t->status, 'live at once');
        $this->assertNull($t->id_verified_at, 'but not Verified');
        $this->assertNotNull($t->review_notified_at);
        $this->assertFalse($t->isIdVerified());
        $this->assertSame(1, Register::query()->publiclyVisible()->where('user_id', 'NXT-2026-NEW001')->count());
        $this->assertSame(1, Register::query()->awaitingIdCheck()->where('user_id', 'NXT-2026-NEW001')->count());

        Mail::assertSent(NewTutorToCheckMail::class, function (NewTutorToCheckMail $mail) {
            $html = $mail->render();

            return $mail->hasTo('support@nxtutors.com')
                && $mail->envelope()->subject === 'New tutor to check: Esha New'
                && str_contains($html, 'Already live (no Verified badge yet)')
                && str_contains($html, 'WhatsApp sign-up')
                && str_contains($html, route('super.teacher.edit', $mail->tutor->id))
                && ! str_contains($html, '9310300001')        // no phone
                && ! str_contains($html, 'priya@example.com') // no email
                && ! str_contains($html, 'document');         // no ID route or images
        });

        // Once only.
        $this->artisan('tutors:review-intake')->assertSuccessful();
        Mail::assertSentCount(1);
    }

    public function test_new_whatsapp_tutor_stays_pending_when_approving_first(): void
    {
        Mail::fake();
        config()->set('tutors.publish_before_review', false);
        config()->set('tutors.review_email', 'reviewer@example.com');
        $t = $this->tutor(['user_id' => 'NXT-2026-NEW002', 'name' => 'Farah New', 'status' => 'p']);

        $this->artisan('tutors:review-intake')->assertSuccessful();

        $t->refresh();
        $this->assertSame('p', $t->status);
        $this->assertSame(0, Register::query()->publiclyVisible()->where('user_id', 'NXT-2026-NEW002')->count());
        Mail::assertSent(NewTutorToCheckMail::class, fn ($m) => $m->hasTo('reviewer@example.com')
            && str_contains($m->render(), 'Not live yet: waiting for your approval'));
    }

    public function test_samples_generated_profiles_and_old_tutors_get_no_email(): void
    {
        Mail::fake();
        $this->tutor(['user_id' => '931', 'is_sample' => 1, 'status' => 'p']);
        $this->tutor(['user_id' => '932', 'phone' => null, 'email' => null]); // no phone: not a WhatsApp sign-up, so no intake email
        $this->tutor(['user_id' => '933', 'review_notified_at' => now()]);    // existed before the migration
        $this->tutor(['user_id' => '934', 'join_as' => 'student', 'status' => 'p']);

        $this->artisan('tutors:review-intake')->assertSuccessful();

        Mail::assertNothingSent();
        $this->assertSame('p', Register::where('user_id', '931')->value('status'), 'sample generation untouched');
        $this->assertSame('p', Register::where('user_id', '934')->value('status'), 'students untouched');
    }

    public function test_sign_up_survives_a_mail_failure(): void
    {
        config()->set('mail.default', 'broken');
        config()->set('mail.mailers.broken', ['transport' => 'no-such-transport']);
        config()->set('tutors.publish_before_review', true);
        $t = $this->tutor(['user_id' => 'NXT-2026-NEW003', 'name' => 'Gita New', 'status' => 'p']);

        $this->artisan('tutors:review-intake')->assertSuccessful();

        $t->refresh();
        $this->assertSame('t', $t->status);
        $this->assertNotNull($t->review_notified_at, 'marked, so a broken mailer cannot loop');

        // The admin path too.
        $u = $this->tutor(['user_id' => 'NXT-2026-NEW004', 'name' => 'Hema Admin', 'phone' => '9310300004', 'email' => 'h@example.com', 'review_notified_at' => null]);
        app(TutorIntake::class)->registered($u, TutorIntake::SOURCE_ADMIN, false);
        $this->assertNotNull($u->fresh()->review_notified_at);
    }

    public function test_admin_list_shows_and_filters_tutors_awaiting_the_id_check(): void
    {
        $this->tutor(['user_id' => '941', 'name' => 'Live Unverified']);
        $this->tutor(['user_id' => '942', 'name' => 'Live Verified', 'phone' => '9310300042', 'id_verified_at' => now()]);
        $this->tutor(['user_id' => '943', 'name' => 'Pending One', 'phone' => '9310300043', 'status' => 'p']);
        $this->tutor(['user_id' => '944', 'name' => 'Sample One', 'phone' => '9310300044', 'is_sample' => 1]);
        $this->withoutMiddleware([\Illuminate\Auth\Middleware\Authenticate::class, \Spatie\Permission\Middleware\RoleMiddleware::class]);

        $all = $this->get(route('super.teacher.index'))->assertOk()->getContent();
        $this->assertStringContainsString('Awaiting ID check (2)', $all);
        $this->assertStringContainsString('Not verified yet', $all);
        $this->assertLessThan(strpos($all, 'Live Verified'), strpos($all, 'Live Unverified'), 'awaiting first');

        $awaiting = $this->get(route('super.teacher.index', ['filter' => 'awaiting']))->assertOk()->getContent();
        $this->assertStringContainsString('Live Unverified', $awaiting);
        $this->assertStringContainsString('Pending One', $awaiting);
        $this->assertStringNotContainsString('Live Verified', $awaiting);
        $this->assertStringNotContainsString('Sample One', $awaiting);
    }

    public function test_without_the_column_the_old_rule_applies(): void
    {
        $t = $this->tutor();
        (require database_path('migrations/seo/2026_10_07_140000_add_id_verified_at_to_register.php'))->down();
        app()->forgetInstance('register.id_verified_column');
        $t = Register::findOrFail($t->id);
        $this->assertTrue($t->isIdVerified(), 'real + live, as before the migration');
        $this->assertStringContainsString('badge-verified', $this->card($t));
    }

    public function test_migration_backfills_only_live_real_tutors(): void
    {
        (require database_path('migrations/seo/2026_10_07_140000_add_id_verified_at_to_register.php'))->down();
        DB::table('register')->insert([
            ['user_id' => '1997', 'name' => 'Real Author', 'join_as' => 'teacher', 'status' => 't', 'is_sample' => 0, 'phone' => null],
            ['user_id' => '951', 'name' => 'Real Phone', 'join_as' => 'teacher', 'status' => 't', 'is_sample' => 0, 'phone' => '9310300051'],
            ['user_id' => '952', 'name' => 'Sample', 'join_as' => 'teacher', 'status' => 't', 'is_sample' => 1, 'phone' => '9310300052'],
            ['user_id' => '953', 'name' => 'Pending', 'join_as' => 'teacher', 'status' => 'p', 'is_sample' => 0, 'phone' => '9310300053'],
            ['user_id' => '954', 'name' => 'Generated', 'join_as' => 'teacher', 'status' => 't', 'is_sample' => 0, 'phone' => null],
        ]);
        (require database_path('migrations/seo/2026_10_07_140000_add_id_verified_at_to_register.php'))->up();

        $verified = DB::table('register')->whereNotNull('id_verified_at')->pluck('user_id')->sort()->values()->all();
        $this->assertSame(['951', '1997'], $verified);
        $this->assertSame(0, DB::table('register')->where('join_as', 'teacher')->whereNull('review_notified_at')->count(), 'no email for existing tutors');
    }

    public function test_original_live_tutors_without_a_phone_keep_the_badge(): void
    {
        $first = database_path('migrations/seo/2026_10_07_140000_add_id_verified_at_to_register.php');
        $fix = require database_path('migrations/seo/2026_10_07_142000_restore_verified_for_original_tutors_without_phone.php');
        (require $first)->down();
        DB::table('register')->insert([
            ['user_id' => '961', 'name' => 'Original No Phone', 'join_as' => 'teacher', 'status' => 't', 'is_sample' => 0, 'phone' => null],
            ['user_id' => '962', 'name' => 'Sample No Phone', 'join_as' => 'teacher', 'status' => 't', 'is_sample' => 1, 'phone' => null],
            ['user_id' => '963', 'name' => 'Inactive No Phone', 'join_as' => 'teacher', 'status' => 'f', 'is_sample' => 0, 'phone' => null],
        ]);
        (require $first)->up();
        $fix->up();

        $this->assertSame(['961'], DB::table('register')->whereNotNull('id_verified_at')->pluck('user_id')->all());
        $this->assertTrue(Register::where('user_id', '961')->first()->isIdVerified());

        // A new WhatsApp sign-up after the fix (has a phone) still waits for Approve.
        $new = $this->tutor(['user_id' => 'NXT-2026-NEW009', 'phone' => '9310300099']);
        $fix->up();
        $this->assertNull($new->fresh()->id_verified_at);

        $fix->down();
        $this->assertNull(DB::table('register')->where('user_id', '961')->value('id_verified_at'));
    }
}
