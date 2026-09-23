<?php

declare(strict_types=1);

namespace Tests\Feature\Consent;

use App\Nxt\Dashboard\Models\ParentalConsent;
use App\Nxt\Dashboard\Services\ParentalConsentFlow;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

/**
 * Collecting parental consent, and the several ways it must refuse.
 *
 * Most of these are about the refusals rather than the happy path. A consent
 * mechanism that grants consent correctly and also grants it in one case where
 * it should not is worse than no mechanism, because it produces a record
 * saying permission was obtained when it was not — and that record is what
 * somebody would rely on later.
 */
final class ParentalConsentFlowTest extends TestCase
{
    use RefreshDatabase;

    private const STUDENT = 'S-77';

    private const PARENT_PHONE = '9876543210';

    private const PURPOSE = 'learning_records';

    private ParentalConsentFlow $flow;

    protected function setUp(): void
    {
        parent::setUp();

        config()->set('agent.hash_pepper', 'consent-test-pepper');

        Schema::create('register', function ($t): void {
            $t->increments('id');
            foreach (['user_id', 'name', 'email', 'phone', 'phone_hash', 'password',
                'status', 'join_as', 'city'] as $column) {
                $t->string($column)->nullable();
            }
            $t->dateTime('deleted_at')->nullable();
        });

        DB::table('register')->insert([
            'user_id' => self::STUDENT,
            'name' => 'Aarav',
            'join_as' => 'student',
            'phone' => self::PARENT_PHONE,
        ]);

        $this->flow = app(ParentalConsentFlow::class);
    }

    private function request(): string
    {
        return $this->flow->request(self::STUDENT, self::PARENT_PHONE, self::PURPOSE);
    }

    // ------------------------------------------------------------- granting

    public function test_a_confirmed_code_records_consent(): void
    {
        $code = $this->request();

        $this->assertTrue($this->flow->confirm(self::STUDENT, self::PURPOSE, $code));

        $consent = $this->flow->current(self::STUDENT, self::PURPOSE);
        $this->assertNotNull($consent);
        $this->assertSame(ParentalConsent::STATUS_VERIFIED, $consent->status);
        $this->assertNotNull($consent->verified_at);
    }

    public function test_the_code_is_not_stored_in_the_clear(): void
    {
        $code = $this->request();

        $stored = (string) DB::table('nxt_parental_consents')->value('code_hash');

        $this->assertNotSame($code, $stored);
        $this->assertTrue(password_verify($code, $stored) || str_starts_with($stored, '$'));
    }

    public function test_the_code_is_discarded_once_it_has_been_used(): void
    {
        /* A spent code proves nothing and is only a liability: keeping it
           would let a leaked table replay somebody's confirmation. */
        $code = $this->request();
        $this->flow->confirm(self::STUDENT, self::PURPOSE, $code);

        $this->assertNull(DB::table('nxt_parental_consents')->value('code_hash'));
    }

    public function test_the_number_is_never_stored_only_its_hash(): void
    {
        $this->request();

        $row = DB::table('nxt_parental_consents')->first();

        $this->assertStringNotContainsString(self::PARENT_PHONE, json_encode($row));
        $this->assertNotEmpty($row->parent_phone_hash);
    }

    public function test_the_notice_version_shown_is_recorded_against_the_consent(): void
    {
        /* What someone agreed to is the text they saw. A later change to the
           wording must not rewrite what an existing consent means. */
        config()->set('nxt-dashboard.consent_version', 'v2-reviewed');
        $code = $this->request();
        $this->flow->confirm(self::STUDENT, self::PURPOSE, $code);

        config()->set('nxt-dashboard.consent_version', 'v3-later');

        $this->assertSame('v2-reviewed', $this->flow->current(self::STUDENT, self::PURPOSE)->consent_version);
    }

    // ------------------------------------------------------------ refusing

    public function test_no_record_is_not_consent(): void
    {
        $this->assertNull($this->flow->current(self::STUDENT, self::PURPOSE));
    }

    public function test_an_unconfirmed_request_is_not_consent(): void
    {
        /* The message went out. Nobody answered it. That is not agreement. */
        $this->request();

        $this->assertNull($this->flow->current(self::STUDENT, self::PURPOSE));
    }

    public function test_a_wrong_code_is_refused(): void
    {
        $code = $this->request();
        $wrong = $code === '000000' ? '111111' : '000000';

        $this->assertFalse($this->flow->confirm(self::STUDENT, self::PURPOSE, $wrong));
        $this->assertNull($this->flow->current(self::STUDENT, self::PURPOSE));
    }

    public function test_an_empty_code_is_refused(): void
    {
        $this->request();

        $this->assertFalse($this->flow->confirm(self::STUDENT, self::PURPOSE, null));
        $this->assertFalse($this->flow->confirm(self::STUDENT, self::PURPOSE, ''));
    }

    public function test_five_wrong_codes_burn_the_request(): void
    {
        $code = $this->request();

        for ($i = 0; $i < 5; $i++) {
            $this->flow->confirm(self::STUDENT, self::PURPOSE, '000000' === $code ? '111111' : '000000');
        }

        // Even the right code no longer works: a new request has to be issued,
        // which is a message the family sees — so a guessing attack cannot run
        // silently.
        $this->assertFalse($this->flow->confirm(self::STUDENT, self::PURPOSE, $code));
        $this->assertNull($this->flow->current(self::STUDENT, self::PURPOSE));
    }

    public function test_an_expired_request_is_refused(): void
    {
        $code = $this->request();
        DB::table('nxt_parental_consents')->update(['expires_at' => now()->subMinute()]);

        $this->assertFalse($this->flow->confirm(self::STUDENT, self::PURPOSE, $code));
    }

    public function test_a_code_cannot_be_used_twice(): void
    {
        $code = $this->request();
        $this->assertTrue($this->flow->confirm(self::STUDENT, self::PURPOSE, $code));

        $this->assertFalse($this->flow->confirm(self::STUDENT, self::PURPOSE, $code));
    }

    public function test_yesterdays_code_cannot_confirm_todays_request(): void
    {
        $old = $this->request();
        $new = $this->request();

        $this->assertNotSame($old, $new, 'two requests produced the same code');
        $this->assertFalse($this->flow->confirm(self::STUDENT, self::PURPOSE, $old));
        $this->assertTrue($this->flow->confirm(self::STUDENT, self::PURPOSE, $new));
    }

    public function test_consent_for_one_purpose_is_not_consent_for_another(): void
    {
        $code = $this->request();
        $this->flow->confirm(self::STUDENT, self::PURPOSE, $code);

        $this->assertNotNull($this->flow->current(self::STUDENT, self::PURPOSE));
        $this->assertNull($this->flow->current(self::STUDENT, 'marketing'));
    }

    public function test_consent_for_one_student_is_not_consent_for_a_sibling(): void
    {
        $code = $this->request();
        $this->flow->confirm(self::STUDENT, self::PURPOSE, $code);

        $this->assertNull($this->flow->current('S-78', self::PURPOSE));
    }

    // --------------------------------------------------------- withdrawing

    public function test_withdrawal_stops_processing_immediately(): void
    {
        $code = $this->request();
        $this->flow->confirm(self::STUDENT, self::PURPOSE, $code);

        $this->assertTrue($this->flow->withdraw(self::STUDENT, self::PURPOSE));
        $this->assertNull($this->flow->current(self::STUDENT, self::PURPOSE));
    }

    public function test_withdrawal_keeps_the_record_rather_than_deleting_it(): void
    {
        /* The obligation is to stop processing, not to forget that permission
           once existed. The dates are the evidence the obligation was met. */
        $code = $this->request();
        $this->flow->confirm(self::STUDENT, self::PURPOSE, $code);
        $this->flow->withdraw(self::STUDENT, self::PURPOSE);

        $row = DB::table('nxt_parental_consents')->first();

        $this->assertSame(ParentalConsent::STATUS_WITHDRAWN, $row->status);
        $this->assertNotNull($row->verified_at);
        $this->assertNotNull($row->withdrawn_at);
    }

    public function test_consent_can_be_given_again_after_being_withdrawn(): void
    {
        $this->flow->confirm(self::STUDENT, self::PURPOSE, $this->request());
        $this->flow->withdraw(self::STUDENT, self::PURPOSE);

        $this->assertTrue($this->flow->confirm(self::STUDENT, self::PURPOSE, $this->request()));
        $this->assertNotNull($this->flow->current(self::STUDENT, self::PURPOSE));
        $this->assertSame(2, DB::table('nxt_parental_consents')->count());
    }

    public function test_withdraw_all_covers_every_purpose(): void
    {
        $this->flow->confirm(self::STUDENT, self::PURPOSE, $this->request());
        $this->flow->confirm(
            self::STUDENT,
            'marketing',
            $this->flow->request(self::STUDENT, self::PARENT_PHONE, 'marketing'),
        );

        $this->assertSame(2, $this->flow->withdrawAll(self::STUDENT));
        $this->assertNull($this->flow->current(self::STUDENT, self::PURPOSE));
        $this->assertNull($this->flow->current(self::STUDENT, 'marketing'));
    }

    // ------------------------------------------------------------ the rest

    public function test_only_one_consent_per_purpose_is_ever_live(): void
    {
        /* Enforced by a unique index rather than by a check in PHP: two
           requests racing would pass a check-then-insert both times. */
        $this->request();
        $this->request();
        $this->request();

        $this->assertSame(
            1,
            DB::table('nxt_parental_consents')->whereNotNull('active_key')->count(),
        );
        $this->assertSame(3, DB::table('nxt_parental_consents')->count());
    }

    public function test_consent_from_one_number_does_not_vouch_for_another(): void
    {
        $code = $this->request();
        $this->flow->confirm(self::STUDENT, self::PURPOSE, $code);
        $consent = $this->flow->current(self::STUDENT, self::PURPOSE);

        $this->assertTrue($this->flow->matchesParentPhone($consent, self::PARENT_PHONE));
        $this->assertTrue($this->flow->matchesParentPhone($consent, '+91 98765 43210'));
        $this->assertFalse($this->flow->matchesParentPhone($consent, '9000000000'));
    }

    public function test_the_parent_number_is_read_from_the_students_account(): void
    {
        $this->assertSame(self::PARENT_PHONE, $this->flow->parentPhoneFor(self::STUDENT));
        $this->assertNull($this->flow->parentPhoneFor('S-nobody'));
    }

    public function test_requesting_notifies_the_family_with_the_reviewable_notice(): void
    {
        config()->set('nxt-dashboard.consent_notice', 'The notice legal signed off.');

        $code = $this->flow->requestAndNotify(self::STUDENT, self::PARENT_PHONE, self::PURPOSE);

        $notification = DB::table('nxt_notifications')->where('event', 'consent.requested')->first();
        $this->assertNotNull($notification);
        $this->assertStringContainsString($code, $notification->title);
        $this->assertSame('The notice legal signed off.', $notification->body);
    }
}
