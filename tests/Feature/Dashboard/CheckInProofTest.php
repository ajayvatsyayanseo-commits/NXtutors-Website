<?php

declare(strict_types=1);

namespace Tests\Feature\Dashboard;

use App\Nxt\Dashboard\Models\AppNotification;
use App\Nxt\Dashboard\Models\AttendanceEvent;
use App\Nxt\Dashboard\Models\CheckInCode;
use App\Nxt\Dashboard\Models\TutoringSession;
use App\Nxt\Dashboard\Services\CheckInProof;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;

/**
 * Brief 6.4: a class is attended when a parent OTP or a geo-fence says so.
 *
 * Both were recorded and neither was checked. `method` was whatever the tutor's
 * device sent, so `parent_otp` meant only that the app had typed those letters,
 * and the evidence trail the parent reads verbatim — and the reliability score
 * is computed from — said a class had been proved when nothing had been.
 *
 * §16.4 lists the geo-fence as the first thing to drop if the week slips and
 * the parent OTP as the thing never dropped, which is the order these tests are
 * written in: the OTP is refused when it is wrong, and a fence that cannot be
 * verified downgrades to `manual` rather than being believed.
 */
class CheckInProofTest extends DashboardTestCase
{
    /** 12 Rose Lane, as a coordinate the fence can measure against. */
    private const HOME_LAT = 28.4595;

    private const HOME_LNG = 77.0266;

    public function test_a_code_is_issued_once_per_class_and_delivered_to_the_family(): void
    {
        $session = $this->scheduledClass();

        $code = $this->proof()->issueAndNotify($session);

        $this->assertMatchesRegularExpression('/^\d{4}$/', $code, 'Four digits, read out loud in a front room.');
        $this->assertSame(1, CheckInCode::where('session_id', $session->id)->count());

        $notification = AppNotification::where('user_id', self::STUDENT)->sole();

        $this->assertSame('session.check_in_code', $notification->event);
        $this->assertStringContainsString($code, $notification->title, 'The family is told the code.');
        $this->assertNotSame($code, CheckInCode::sole()->code_hash, 'The code is stored hashed, never in the clear.');
    }

    /** Re-issuing replaces the live code, so yesterday's cannot open today's class. */
    public function test_reissuing_replaces_the_live_code(): void
    {
        $session = $this->scheduledClass();

        $first = $this->proof()->issue($session);
        $second = $this->proof()->issue($session);

        $this->assertSame(1, CheckInCode::where('session_id', $session->id)->count());
        $this->assertFalse($this->proof()->verifyCode($session->fresh(), $first), 'The replaced code still worked.');
        $this->assertTrue($this->proof()->verifyCode($session->fresh(), $second));
    }

    public function test_a_parent_otp_check_in_with_the_right_code_is_recorded_as_proved(): void
    {
        $session = $this->scheduledClass();
        $code = $this->proof()->issue($session);

        $session = $this->sessions()->checkIn($session, self::TUTOR, 'parent_otp', code: $code);

        $this->assertSame('checked_in', $session->status);
        $this->assertSame('parent_otp', AttendanceEvent::where('session_id', $session->id)->sole()->method);
    }

    /**
     * The whole point. A parent OTP without the code is refused rather than
     * downgraded: the code is the one piece of evidence the family holds, and
     * accepting the claim without it is how "attended" came to mean "the
     * tutor's phone said so".
     */
    public function test_a_parent_otp_check_in_without_a_valid_code_is_refused(): void
    {
        $session = $this->scheduledClass();
        $this->proof()->issue($session);

        foreach ([null, '', '0000 ', 'abcd'] as $wrong) {
            try {
                $this->sessions()->checkIn($session->fresh(), self::TUTOR, 'parent_otp', code: $wrong);
                $this->fail('A parent OTP check-in was accepted with the code '.var_export($wrong, true));
            } catch (ValidationException $e) {
                $this->assertArrayHasKey('code', $e->errors());
            }
        }

        $this->assertSame('scheduled', $session->fresh()->status, 'A refused check-in must not start the class.');
        $this->assertSame(0, AttendanceEvent::count());
    }

    /** A code is usable once: a second class cannot be opened with a used one. */
    public function test_a_code_cannot_be_used_twice(): void
    {
        $session = $this->scheduledClass();
        $code = $this->proof()->issue($session);

        $this->assertTrue($this->proof()->verifyCode($session, $code));
        $this->assertFalse($this->proof()->verifyCode($session->fresh(), $code), 'A used code is spent.');
    }

    public function test_an_expired_code_does_not_open_a_class(): void
    {
        $session = $this->scheduledClass();
        $code = $this->proof()->issue($session);

        Carbon::setTestNow(Carbon::parse(self::NOW)->addDays(2));

        $this->assertFalse($this->proof()->verifyCode($session->fresh(), $code));
    }

    /** Five wrong codes burn it, so a four-digit code cannot be guessed through. */
    public function test_a_code_is_burned_after_five_wrong_attempts(): void
    {
        $session = $this->scheduledClass();
        $code = $this->proof()->issue($session);
        $wrong = $code === '1111' ? '2222' : '1111';

        foreach (range(1, 5) as $attempt) {
            $this->assertFalse($this->proof()->verifyCode($session->fresh(), $wrong));
        }

        $this->assertFalse($this->proof()->verifyCode($session->fresh(), $code), 'The right code still worked after five wrong ones.');
        $this->assertSame(5, CheckInCode::sole()->attempts);
    }

    // ----------------------------------------------------------- the geofence

    public function test_a_check_in_inside_the_fence_is_recorded_as_a_geofence(): void
    {
        $session = $this->scheduledClass(['address_lat' => self::HOME_LAT, 'address_lng' => self::HOME_LNG]);

        // Roughly eighty metres up the road.
        $session = $this->sessions()->checkIn($session, self::TUTOR, 'geofence', self::HOME_LAT + 0.0007, self::HOME_LNG, 20);

        $this->assertSame('geofence', AttendanceEvent::where('session_id', $session->id)->sole()->method);
    }

    /**
     * Out of range, too coarse a fix, or an address nobody ever geocoded: none
     * of them prove anything, so the check-in is downgraded to `manual` and
     * flagged for the parent to confirm rather than refused — a tutor standing
     * in a doorway with no signal still has to start the class.
     */
    public function test_an_unverifiable_geofence_is_downgraded_to_manual_and_flagged(): void
    {
        $cases = [
            'two kilometres away' => [['address_lat' => self::HOME_LAT, 'address_lng' => self::HOME_LNG], self::HOME_LAT + 0.02, self::HOME_LNG, 20],
            'a fix wider than the fence' => [['address_lat' => self::HOME_LAT, 'address_lng' => self::HOME_LNG], self::HOME_LAT, self::HOME_LNG, 400],
            'an address never geocoded' => [[], self::HOME_LAT, self::HOME_LNG, 20],
            'no position at all' => [['address_lat' => self::HOME_LAT, 'address_lng' => self::HOME_LNG], null, null, null],
        ];

        foreach ($cases as $name => [$overrides, $lat, $lng, $accuracy]) {
            TutoringSession::query()->delete();
            AttendanceEvent::query()->delete();

            $session = $this->scheduledClass($overrides);
            $session = $this->sessions()->checkIn($session, self::TUTOR, 'geofence', $lat, $lng, $accuracy);

            $event = AttendanceEvent::where('session_id', $session->id)->sole();

            $this->assertSame('manual', $event->method, $name.': an unproved fence was recorded as proof.');
            $this->assertSame('geofence', $event->payload['claimed_method'] ?? null, $name.': the claim is kept.');
            $this->assertTrue($event->payload['needs_confirmation'] ?? false, $name.': the parent has to be asked.');
            $this->assertSame('checked_in', $session->status, $name.': the class still starts.');
        }
    }

    /** The scheduled command sends the code out with the reminder, once. */
    public function test_the_command_issues_codes_for_classes_about_to_start(): void
    {
        $soon = $this->scheduledClass(['starts_at' => now()->addMinutes(45)]);
        $later = $this->scheduledClass(['starts_at' => now()->addDays(2), 'subject' => 'Physics']);

        $this->artisan('nxt-dashboard:issue-check-in-codes')->assertExitCode(0)->run();
        $this->artisan('nxt-dashboard:issue-check-in-codes')->assertExitCode(0)->run();

        $this->assertSame(1, CheckInCode::where('session_id', $soon->id)->count(), 'One code per class, however often the timer runs.');
        $this->assertSame(0, CheckInCode::where('session_id', $later->id)->count(), 'A class two days out does not need its code yet.');
        $this->assertSame(1, AppNotification::count());
    }

    private function proof(): CheckInProof
    {
        return app(CheckInProof::class);
    }

    /** A funded, scheduled home class, the way the booking screen makes one. */
    private function scheduledClass(array $overrides = []): TutoringSession
    {
        $package = $this->makePackage();
        $this->fundWallet($package);

        $session = $this->sessions()->schedule(
            $package,
            $overrides['starts_at'] ?? now()->addDay()->setTime(16, 0),
            60,
            'home',
            '12 Rose Lane',
            subject: $overrides['subject'] ?? null,
        );

        $coordinates = array_intersect_key($overrides, array_flip(['address_lat', 'address_lng']));

        if ($coordinates !== []) {
            $session->forceFill($coordinates)->save();
        }

        return $session->fresh();
    }
}
