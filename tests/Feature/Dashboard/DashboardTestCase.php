<?php

declare(strict_types=1);

namespace Tests\Feature\Dashboard;

use App\Models\Register;
use App\Models\SubscriptionPlan;
use App\Models\UserSubscription;
use App\Nxt\Dashboard\Models\MeterEvent;
use App\Nxt\Dashboard\Models\Package;
use App\Nxt\Dashboard\Models\TutoringSession;
use App\Nxt\Dashboard\Services\Entitlements;
use App\Nxt\Dashboard\Services\Ledger;
use App\Nxt\Dashboard\Services\SessionFlow;
use App\Nxt\Dashboard\Support\DashboardIdentity;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

/**
 * Shared ground for the ledger, session-money and meter suites.
 *
 * RefreshDatabase is the whole of the schema story here. The module provider
 * calls loadMigrationsFrom, so every `nxt_*` table builds itself, and the two
 * subscription tables the meter reads — `user_subscriptions` and
 * `subscription_plans` — are migration-managed as well. Nothing in this file
 * hand-builds a table: the one legacy table without a migration is `register`,
 * and none of Ledger, SessionFlow or Entitlements ever queries it. Reaching for
 * Schema::create here would collide with a migration that already owns the
 * name, which is exactly what has the NxtAi search suite red today.
 *
 * Time is frozen because the money rules are clock rules. The 12-hour
 * cancellation boundary, the 24-hour auto-confirm window and the free plan's
 * calendar-month meter all read now(), and a suite that drifts with the wall
 * clock is a suite that goes red at midnight on the first of a month. The
 * instant is deliberately mid-month so a test can travel a day either way
 * without falling into a different meter period.
 */
abstract class DashboardTestCase extends TestCase
{
    use RefreshDatabase;

    /** The frozen instant every test starts from. */
    public const NOW = '2026-09-15 09:00:00';

    /** The default family and tutor, so assertions and fixtures agree on who is who. */
    public const STUDENT = 'STU1001';

    public const TUTOR = 'TUT2002';

    /** Rs 1,100 per class, the going rate for Class 10 maths at home. */
    public const RATE_PAISE = 110000;

    public const COMMISSION_PCT = 15;

    /**
     * What releasing one class at the default rate puts in each account.
     *
     * These are the two numbers every money assertion in the suite lands on, so
     * they are named once here rather than spelled 93500 and 16500 in four
     * files. PAYABLE is written as a subtraction because that is how the service
     * computes it — the fee minus the commission, never a second round() — which
     * is what keeps the two halves summing back to exactly RATE_PAISE.
     */
    public const COMMISSION_PAISE = 16500;

    public const PAYABLE_PAISE = self::RATE_PAISE - self::COMMISSION_PAISE;

    protected function setUp(): void
    {
        parent::setUp();

        Carbon::setTestNow(self::NOW);
    }

    protected function tearDown(): void
    {
        Carbon::setTestNow();

        parent::tearDown();
    }

    /**
     * A funded twelve-class pack. `amount_paise` follows the rate and the count
     * unless a test names it, so a pack cannot quietly claim to be worth more
     * than the classes it holds.
     */
    protected function makePackage(array $overrides = []): Package
    {
        $attributes = array_merge([
            'student_user_id' => self::STUDENT,
            'tutor_user_id' => self::TUTOR,
            'subject' => 'Mathematics',
            'class_level' => 'Class 10',
            'sessions_total' => 12,
            'sessions_used' => 0,
            'rate_paise' => self::RATE_PAISE,
            'commission_pct' => self::COMMISSION_PCT,
            'status' => 'active',
            'purchased_at' => now(),
        ], $overrides);

        $attributes['amount_paise'] ??= $attributes['rate_paise'] * $attributes['sessions_total'];

        return Package::create($attributes);
    }

    /**
     * Money in, so a class has something to be held against.
     *
     * A hold is a move out of the family's available balance, and scheduling
     * refuses to take one the wallet cannot fund — so a test that schedules a
     * class has to have bought the package first, exactly as the webhook does
     * in production. The key is the package, so calling this twice for one
     * package funds it once.
     */
    protected function fundWallet(Package|string $owner, ?int $paise = null): void
    {
        $studentUserId = $owner instanceof Package ? $owner->student_user_id : $owner;
        $amount = $paise ?? ($owner instanceof Package ? (int) $owner->amount_paise : 0);

        if ($amount <= 0) {
            return;
        }

        $this->ledger()->recordPurchase(
            $studentUserId,
            $amount,
            $owner instanceof Package ? $owner->id : 'wallet:'.$studentUserId,
            $owner instanceof Package ? $owner->id : null,
        );
    }

    /**
     * A scheduled class as a row and nothing else — no hold, no outbox event.
     *
     * Tests that want the money to move call SessionFlow; tests that want to
     * start from a given state without paying for the whole scheduling path
     * start here. The commission snapshot mirrors what schedule() would have
     * computed so the two routes into a session agree on the split.
     */
    protected function makeSession(Package $package, array $overrides = []): TutoringSession
    {
        $attributes = array_merge([
            'package_id' => $package->id,
            'student_user_id' => $package->student_user_id,
            'tutor_user_id' => $package->tutor_user_id,
            'subject' => $package->subject,
            'type' => 'regular',
            'mode' => 'home',
            'starts_at' => now()->addDay(),
            'planned_min' => 60,
            'status' => 'scheduled',
            'fee_paise' => $package->rate_paise,
        ], $overrides);

        $attributes['commission_paise'] ??= (int) round($attributes['fee_paise'] * $package->commission_pct / 100);

        return TutoringSession::create($attributes);
    }

    /**
     * An active paid subscription. `plan_id` and `plan_type` are NOT NULL with
     * no default, so a plan is created behind the row unless the test supplies
     * one — a subscription pointing at nothing is a state the pricing flow can
     * produce but not one a meter test usually means to write.
     */
    protected function makeSubscription(string $userId, array $overrides = []): UserSubscription
    {
        $attributes = array_merge([
            'user_id' => $userId,
            'plan_type' => 'student',
            'start_date' => now(),
            'end_date' => now()->addDays(30),
            'status' => 'active',
            'payment_status' => 'paid',
            'ai_credit_limit' => 500,
            'contact_limit' => 25,
            'lead_limit' => 0,
            'ai_credit_used' => 0,
            'contact_used' => 0,
            'lead_used' => 0,
        ], $overrides);

        $attributes['plan_id'] ??= $this->makePlan(['plan_type' => $attributes['plan_type']])->id;

        return UserSubscription::create($attributes);
    }

    /**
     * A plan on the pricing page. `plan_type` is an enum of student|tutor and
     * anything else is rejected at insert time, so tests stay inside those two.
     */
    protected function makePlan(array $overrides = []): SubscriptionPlan
    {
        return SubscriptionPlan::create(array_merge([
            'plan_type' => 'student',
            'plan_name' => 'Student Pro',
            'price' => 499.00,
            'duration_days' => 30,
            'ai_credits' => 500,
            'contact_limit' => 25,
            'lead_limit' => 0,
            'features' => [],
            'status' => true,
            'sort_order' => 1,
        ], $overrides));
    }

    /**
     * Who is asking, without the legacy `register` table. Entitlements reads
     * only the user id and the role off an identity, so an unsaved model is
     * enough and the one table with no migration stays out of the suite.
     */
    protected function identity(string $userId = self::STUDENT, string $role = 'student'): DashboardIdentity
    {
        return DashboardIdentity::fromRegister(new Register([
            'user_id' => $userId,
            'join_as' => $role === 'tutor' ? 'teacher' : 'student',
        ]));
    }

    protected function ledger(): Ledger
    {
        return app(Ledger::class);
    }

    protected function sessions(): SessionFlow
    {
        return app(SessionFlow::class);
    }

    protected function entitlements(): Entitlements
    {
        return app(Entitlements::class);
    }

    /**
     * Assert a balance the way the dashboard derives it: credits minus debits
     * over the ledger, never a stored column, and never through familyWallet(),
     * which floors a negative held balance at zero and would hide the exact
     * corruption these suites exist to catch.
     */
    protected function assertBalance(string $ownerUserId, string $account, int $expectedPaise): void
    {
        $this->assertSame(
            $expectedPaise,
            $this->ledger()->balance($ownerUserId, $account),
            sprintf('Balance of %s on the %s account.', $ownerUserId, $account),
        );
    }

    /**
     * The signed sum of every entry in the ledger, folded off the raw rows.
     *
     * Double entry means this is zero after any complete movement: whatever was
     * credited somewhere was debited somewhere else. A non-zero total is money
     * the books created or destroyed.
     */
    protected function signedTotalOverEveryAccount(): int
    {
        return (int) \App\Nxt\Dashboard\Models\LedgerEntry::all()
            ->sum(fn ($entry): int => $entry->direction === 'credit' ? $entry->amount_paise : -$entry->amount_paise);
    }

    /**
     * Assert that one idempotency key produced exactly one meter row carrying
     * exactly one delta. Counting all rows instead would pass over a retry that
     * charged twice under two keys.
     */
    protected function assertMeterDelta(string $idempotencyKey, int $expectedDelta): void
    {
        $events = MeterEvent::where('idempotency_key', $idempotencyKey)->get();

        $this->assertCount(1, $events, sprintf('Meter events written under the key %s.', $idempotencyKey));
        $this->assertSame($expectedDelta, $events->first()->delta, sprintf('Delta of the meter event %s.', $idempotencyKey));
    }
}
