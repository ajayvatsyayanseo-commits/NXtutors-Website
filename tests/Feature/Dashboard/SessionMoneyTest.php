<?php

declare(strict_types=1);

namespace Tests\Feature\Dashboard;

use App\Nxt\Dashboard\Models\AttendanceEvent;
use App\Nxt\Dashboard\Models\Dispute;
use App\Nxt\Dashboard\Models\LedgerEntry;
use App\Nxt\Dashboard\Models\OutboxEvent;
use App\Nxt\Dashboard\Models\Package;
use App\Nxt\Dashboard\Models\TutoringSession;
use App\Nxt\Dashboard\Services\Ledger;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;

/**
 * The session state machine at the points where it moves money.
 *
 * Scheduling a class puts a fee beyond the family's reach; confirming it pays
 * the tutor and the platform; disputing it freezes the money where it is; and
 * cancelling it applies a published policy the family was shown before they
 * pressed the button. Those four transitions are the whole of the brief's
 * sections 7.3 and 7.4, and each one is a release blocker, so what is asserted
 * below is the balance the ledger derives rather than any status column — a
 * session can say `confirmed` while the money went nowhere.
 *
 * Balances are read through assertBalance, which goes to Ledger::balance and
 * not to familyWallet(): the wallet screen floors a negative held balance at
 * zero, and a negative held balance is precisely the corruption these tests
 * exist to notice.
 *
 * Auto-confirm timing has its own suite. What is tested here is what a
 * confirmation does to the money, not when the timer fires. The rule that a
 * hold must MOVE the fee rather than mint it is pinned in LedgerTest, against
 * the holdForSession call that would have to change; scheduling reaches the
 * ledger through that one call and adds no money logic of its own, so it is not
 * restated here.
 */
class SessionMoneyTest extends DashboardTestCase
{
    public function test_scheduling_a_class_holds_exactly_one_sessions_fee(): void
    {
        $package = $this->makePackage();

        $session = $this->schedule($package);

        $this->assertSame(self::RATE_PAISE, $session->fee_paise);
        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, 0);
        $this->assertSame(
            2,
            LedgerEntry::where('session_id', $session->id)->count(),
            'Scheduling one class writes one move — the fee out of the wallet and into held — and no more.',
        );
    }

    /**
     * The fee and the commission are snapshotted onto the session as it is
     * booked, so renegotiating a package rate later cannot rewrite the price of
     * a class that has already been taught.
     */
    public function test_scheduling_snapshots_the_package_rate_and_its_commission_onto_the_session(): void
    {
        $cases = [
            [110000, 15, 16500],
            [99999, 15, 15000],
            [33333, 10, 3333],
            [100000, 20, 20000],
        ];

        foreach ($cases as $index => [$ratePaise, $commissionPct, $expectedCommission]) {
            $package = $this->makePackage([
                'student_user_id' => 'STU-RATE-'.$index,
                'tutor_user_id' => 'TUT-RATE-'.$index,
                'rate_paise' => $ratePaise,
                'commission_pct' => $commissionPct,
            ]);

            $session = $this->schedule($package);

            $this->assertSame($ratePaise, $session->fee_paise, "Fee stored for a rate of {$ratePaise} paise.");
            $this->assertSame(
                $expectedCommission,
                $session->commission_paise,
                "Commission stored for {$ratePaise} paise at {$commissionPct} per cent.",
            );
        }
    }

    public function test_scheduling_past_the_package_balance_is_refused_and_writes_nothing(): void
    {
        $package = $this->makePackage(['sessions_total' => 2, 'sessions_used' => 2]);

        try {
            $this->schedule($package);
            $this->fail('An exhausted package must not accept another class.');
        } catch (ValidationException $e) {
            $this->assertArrayHasKey('package', $e->errors());
        }

        $this->assertSame(0, TutoringSession::count(), 'A refused schedule must leave no session row.');
        $this->assertSame(0, LedgerEntry::where('kind', 'hold')->count(), 'A refused schedule must hold no money.');
        $this->assertSame(0, OutboxEvent::count(), 'A refused schedule must announce nothing.');
    }

    /**
     * A refused booking has to leave nothing behind. "It threw" is half a test
     * for money code: the clash guard is the only thing standing between a
     * double-booked evening and two holds on one fee, so the side effects are
     * the interesting half. Asserting the error key as well pins that the
     * refusal came from the overlap guard and not the package-balance guard.
     */
    public function test_scheduling_over_an_existing_class_for_the_same_student_is_refused(): void
    {
        $first = $this->makePackage();
        $this->schedule($first, now()->addDay()->setTime(10, 0));

        $elsewhere = $this->makePackage(['tutor_user_id' => 'TUT-OTHER']);

        $this->assertRefusedAsAClash($elsewhere, now()->addDay()->setTime(10, 30));
    }

    public function test_scheduling_over_an_existing_class_for_the_same_tutor_is_refused(): void
    {
        $first = $this->makePackage();
        $this->schedule($first, now()->addDay()->setTime(10, 0));

        $otherFamily = $this->makePackage(['student_user_id' => 'STU-OTHER']);

        $this->assertRefusedAsAClash($otherFamily, now()->addDay()->setTime(10, 30));
    }

    /**
     * The other direction over the same window: the new class starts BEFORE the
     * one already booked and runs into it. Every other overlap test books the
     * clashing class later, which leaves the upper bound of the window
     * unasserted — narrow it and a tutor takes two holds for one hour they can
     * only teach once.
     */
    public function test_scheduling_a_class_that_starts_before_an_existing_one_and_runs_into_it_is_refused(): void
    {
        $package = $this->makePackage();
        $this->schedule($package, now()->addDay()->setTime(10, 30));

        $this->assertRefusedAsAClash($package, now()->addDay()->setTime(10, 0));
    }

    public function test_two_classes_at_the_identical_start_time_are_refused(): void
    {
        $package = $this->makePackage();
        $this->schedule($package, now()->addDay()->setTime(10, 0));

        $this->assertRefusedAsAClash($package, now()->addDay()->setTime(10, 0));
    }

    /**
     * A class the tutor is teaching right now blocks its own slot. This is the
     * window in which a double booking is most expensive, because the fee is
     * already held and the tutor is already in somebody's front room — and it is
     * the one an overlap query that only looks at `scheduled` rows misses.
     */
    public function test_a_class_in_progress_still_blocks_its_own_slot(): void
    {
        $package = $this->makePackage();
        $inProgress = $this->schedule($package, now()->addDay()->setTime(10, 0));

        $this->sessions()->checkIn($inProgress, self::TUTOR, 'geofence');
        $this->assertSame('checked_in', $inProgress->fresh()->status);

        $this->assertRefusedAsAClash($package, now()->addDay()->setTime(10, 30));
    }

    /**
     * Back-to-back classes are the ordinary shape of a tutor's evening, and the
     * overlap window is half-open: a class beginning at the exact minute the
     * previous one ends does not clash. This is the boundary any rewrite of the
     * overlap query gets wrong first, so both the row and the hold are asserted.
     */
    public function test_a_class_that_starts_exactly_when_the_previous_one_ends_is_allowed(): void
    {
        $package = $this->makePackage();

        $first = $this->schedule($package, now()->addDay()->setTime(10, 0), 60);
        $second = $this->schedule($package, now()->addDay()->setTime(11, 0), 60);

        $this->assertNotSame($first->id, $second->id);
        $this->assertSame(2, TutoringSession::count());
        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE * 2);
    }

    public function test_a_class_may_reuse_the_slot_of_a_cancelled_class(): void
    {
        $package = $this->makePackage();

        $cancelled = $this->schedule($package, now()->addDay()->setTime(10, 0));
        $this->sessions()->cancel($cancelled, self::STUDENT, 'Family travelling');

        $replacement = $this->schedule($package, now()->addDay()->setTime(10, 0));

        $this->assertSame('scheduled', $replacement->status);
        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
    }

    public function test_scheduling_announces_the_class_on_the_outbox(): void
    {
        $package = $this->makePackage();

        $session = $this->schedule($package);

        $events = OutboxEvent::where('event', 'session.scheduled')->get();

        $this->assertCount(1, $events, 'Scheduling must emit exactly one session.scheduled event.');
        $this->assertSame('sessions', $events->first()->topic);
        $this->assertSame($session->id, $events->first()->payload['session_id']);
        $this->assertSame('scheduled', $events->first()->payload['status']);
    }

    /**
     * The row, the hold and the announcement are one write or none. If the
     * outbox event could survive a failed schedule the relay would publish a
     * class that does not exist; if the hold could, the family would be short
     * the fee of a class nobody booked.
     *
     * The failure is injected on the announcement, which is the last of the
     * three writes schedule() makes, so both earlier ones are already on disk
     * when it fires. Nothing here opens a transaction of its own: wrapping the
     * call in one would discard the writes whether or not schedule() is atomic,
     * which is a test of Laravel rather than of this service.
     */
    public function test_a_schedule_that_fails_part_way_leaves_no_session_no_hold_and_no_event(): void
    {
        $package = $this->makePackage();

        OutboxEvent::creating(static function (): void {
            throw new \RuntimeException('The relay table is down.');
        });

        try {
            $this->schedule($package);
            $this->fail('The announcement was rigged to fail.');
        } catch (\RuntimeException) {
            // The failure the transaction has to unwind.
        }

        $this->assertSame(0, TutoringSession::count(), 'A failed schedule leaves no class behind.');
        $this->assertSame(0, LedgerEntry::where('kind', 'hold')->count(), 'A failed schedule holds none of the family\'s money.');
        $this->assertSame(0, OutboxEvent::count());
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
    }

    /**
     * Teaching a class draws it down from the pack the family bought.
     * `sessions_used` is the counter schedule()'s balance guard reads, so with
     * this increment gone a four-class pack sells an unlimited number of classes
     * and the family is held for every one of them.
     */
    public function test_checking_out_spends_one_class_from_the_package(): void
    {
        $package = $this->makePackage(['sessions_total' => 4]);
        $session = $this->schedule($package);

        $this->sessions()->checkIn($session, self::TUTOR, 'geofence');
        $this->assertSame(0, $package->fresh()->sessions_used, 'Arriving is not teaching.');

        $this->sessions()->checkOut($session->fresh(), self::TUTOR, ['Quadratic equations']);

        $this->assertSame(1, $package->fresh()->sessions_used, 'One class taught is one class spent.');
    }

    /**
     * The pack walked to exhaustion by classes that were actually taught rather
     * than by a counter set in a fixture. This is what makes the balance guard
     * mean something: two bought, two taught, and the third booking refused with
     * no row and no hold behind it.
     */
    public function test_a_package_runs_out_after_its_classes_are_actually_taught(): void
    {
        $package = $this->makePackage(['sessions_total' => 2]);

        foreach ([10, 14] as $hour) {
            $session = $this->schedule($package->fresh(), now()->addDay()->setTime($hour, 0));
            $this->sessions()->checkIn($session, self::TUTOR, 'geofence');
            $this->sessions()->checkOut($session->fresh(), self::TUTOR, ['Quadratic equations']);
        }

        $this->assertSame(2, $package->fresh()->sessions_used);

        try {
            $this->schedule($package->fresh(), now()->addDays(2)->setTime(10, 0));
            $this->fail('A pack with no classes left must not accept another.');
        } catch (ValidationException $e) {
            $this->assertArrayHasKey('package', $e->errors());
        }

        $this->assertSame(2, TutoringSession::count(), 'The refused class left no row.');
        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE * 2);
    }

    /**
     * Neither transition touches the books. checkOut is the busiest method in
     * the state machine — it writes the session, draws down the pack, creates
     * homework and a shared note and emits two events — which makes it the place
     * somebody would most plausibly wire up "pay the tutor when the class ends".
     * Paying there instead of at confirmation quietly deletes the whole 24-hour
     * parent window that sections 7.3 and 7.4 are built on.
     */
    public function test_checking_in_and_checking_out_move_no_money(): void
    {
        $package = $this->makePackage();
        $session = $this->schedule($package);

        $this->assertSame(4, LedgerEntry::count(), 'The two legs of the purchase, and the two legs of the hold — nothing else.');

        $this->sessions()->checkIn($session, self::TUTOR, 'geofence');

        $this->assertSame(4, LedgerEntry::count(), 'Arriving moves no money.');
        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);

        $this->sessions()->checkOut(
            $session->fresh(),
            self::TUTOR,
            ['Quadratic equations'],
            60,
            4,
            ['title' => 'Exercise 4B'],
            'Worked hard today.',
        );

        $this->assertSame(4, LedgerEntry::count(), 'Teaching moves no money either — confirmation does.');
        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, 0);
    }

    /**
     * The rate is 99999 rather than the suite default so this layer covers a
     * different rounding case from the other two that assert the split: fifteen
     * per cent of it is 14999.85, which rounds up to 15000 and leaves 84999.
     *
     * Balances alone cannot say which account each leg landed in or whose name
     * is on it, so the three entries are read back by their keys. A release that
     * credited the right totals to the wrong owner would pass on balances.
     */
    public function test_confirming_a_checked_out_class_splits_the_hold_into_payable_and_commission(): void
    {
        $package = $this->makePackage(['rate_paise' => 99999]);
        $session = $this->checkedOut($package);

        $this->sessions()->confirm($session, self::STUDENT);

        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 84999);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, 15000);

        $legs = LedgerEntry::where('session_id', $session->id)->get()->keyBy('idempotency_key');

        $release = $legs['release:'.$session->id];
        $this->assertSame([Ledger::HELD, self::STUDENT, 'debit', 99999], [
            $release->account, $release->owner_user_id, $release->direction, $release->amount_paise,
        ], 'The debit leg takes the whole fee out of the family\'s hold.');

        $payable = $legs['payable:'.$session->id];
        $this->assertSame([Ledger::TUTOR_PAYABLE, self::TUTOR, 'credit', 84999], [
            $payable->account, $payable->owner_user_id, $payable->direction, $payable->amount_paise,
        ], 'The tutor\'s share is credited to the tutor.');

        $commission = $legs['commission:'.$session->id];
        $this->assertSame([Ledger::COMMISSION, self::TUTOR, 'credit', 15000], [
            $commission->account, $commission->owner_user_id, $commission->direction, $commission->amount_paise,
        ], 'The platform\'s share is booked against the same tutor.');
    }

    /**
     * Brief 2.1: confirming is one write or none. The status change, the
     * attendance event, the three-legged release and the announcement all land
     * together or the class is still waiting on its parent.
     *
     * A class left saying `confirmed` with no money moved is unrecoverable by
     * design: autoConfirmDue only ever looks at `checked_out`, so the timer will
     * never revisit it, the tutor is never paid and the fee stays held forever
     * with no screen showing anything wrong.
     */
    public function test_a_confirmation_whose_release_fails_leaves_the_class_checked_out_and_the_money_held(): void
    {
        $package = $this->makePackage();
        $session = $this->checkedOut($package);

        LedgerEntry::creating(static function (LedgerEntry $entry): void {
            if ($entry->kind === 'commission') {
                throw new \RuntimeException('The commission insert died.');
            }
        });

        try {
            $this->sessions()->confirm($session, self::STUDENT);
            $this->fail('The commission leg was rigged to fail.');
        } catch (\RuntimeException) {
            // The failure the transaction has to unwind.
        }

        $this->assertSame('checked_out', $session->fresh()->status, 'The class must still be waiting on its parent.');
        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, 0);
        $this->assertSame(0, AttendanceEvent::where('kind', 'confirm')->count(), 'Nothing was confirmed, so nothing is recorded.');
        $this->assertSame(0, OutboxEvent::where('event', 'session.confirmed')->count());
    }

    /**
     * The other side of the same seam. Ledger::releaseForSession opens its own
     * transaction nested inside confirm()'s, which is a SAVEPOINT rather than a
     * transaction of its own — so whether the money unwinds when a LATER write
     * in the outer block fails is a fact worth having rather than an assumption.
     * A surviving session.confirmed tells the relay, and then the parent, that a
     * class settled when it did not.
     */
    public function test_a_confirmation_whose_announcement_fails_moves_no_money(): void
    {
        $package = $this->makePackage();
        $session = $this->checkedOut($package);

        OutboxEvent::creating(static function (OutboxEvent $event): void {
            if ($event->event === 'session.confirmed') {
                throw new \RuntimeException('The relay table is down.');
            }
        });

        try {
            $this->sessions()->confirm($session, self::STUDENT);
            $this->fail('The announcement was rigged to fail.');
        } catch (\RuntimeException) {
            // The failure the transaction has to unwind.
        }

        $this->assertSame('checked_out', $session->fresh()->status);
        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, 0);
        $this->assertSame(4, LedgerEntry::count(), 'Only the purchase and the hold the class was scheduled with.');
        $this->assertSame(0, AttendanceEvent::where('kind', 'confirm')->count());
    }

    /**
     * Only a checked-out class can be confirmed. Every other state either has
     * not happened yet, has already paid out, or is contested, and confirming
     * from any of them would pay a tutor twice or pay one early.
     */
    public function test_confirming_from_any_other_state_is_refused_and_moves_no_money(): void
    {
        foreach (['scheduled', 'checked_in', 'confirmed', 'cancelled', 'disputed'] as $status) {
            $student = 'STU-'.$status;
            $tutor = 'TUT-'.$status;

            $package = $this->makePackage(['student_user_id' => $student, 'tutor_user_id' => $tutor]);
            $session = $this->makeSession($package, ['status' => $status]);
            $this->ledger()->holdForSession($session, $student);

            try {
                $this->sessions()->confirm($session, $student);
                $this->fail("A class in the {$status} state must not be confirmable.");
            } catch (ValidationException $e) {
                $this->assertArrayHasKey('status', $e->errors());
            }

            $this->assertBalance($student, Ledger::HELD, self::RATE_PAISE);
            $this->assertBalance($tutor, Ledger::TUTOR_PAYABLE, 0);
            $this->assertBalance($tutor, Ledger::COMMISSION, 0);
            $this->assertSame($status, $session->fresh()->status);
        }
    }

    /**
     * Two confirmations of one class — a double-tapped button, or two requests
     * that both read the session before either wrote it — must pay the tutor
     * once. The ledger's idempotency keys are what make that true, and this
     * test fails the moment one of them stops being derived from the session id.
     */
    public function test_confirming_twice_moves_the_money_once(): void
    {
        $package = $this->makePackage();
        $session = $this->checkedOut($package);

        $stale = TutoringSession::find($session->id);

        $this->sessions()->confirm($session, self::STUDENT);

        try {
            $this->sessions()->confirm($stale, self::STUDENT);
            $this->fail('A confirmed class must not be confirmable again.');
        } catch (ValidationException) {
            // The guard, re-read under a lock rather than trusted off the model.
        }

        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, self::PAYABLE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, self::COMMISSION_PAISE);
        $this->assertSame(
            7,
            LedgerEntry::count(),
            'The purchase, the two legs of the hold and the three-legged release: a second confirmation adds nothing.',
        );
    }

    public function test_a_manual_confirm_records_the_parent_as_the_actor(): void
    {
        $package = $this->makePackage();
        $session = $this->checkedOut($package);

        $this->sessions()->confirm($session, self::STUDENT);

        $events = AttendanceEvent::where('session_id', $session->id)->where('kind', 'confirm')->get();

        $this->assertCount(1, $events, 'A manual confirmation writes one attendance event.');
        $this->assertSame(self::STUDENT, $events->first()->actor_user_id);
        $this->assertSame('parent', $events->first()->method);
    }

    /**
     * Disputed money stays exactly where it is. This is the rule the brief is
     * least willing to bend on: once a family says the class did not happen as
     * described, the tutor cannot be paid until ops has ruled.
     */
    public function test_disputing_a_checked_out_class_freezes_the_hold(): void
    {
        $package = $this->makePackage();
        $session = $this->checkedOut($package);

        $dispute = $this->sessions()->dispute($session, self::STUDENT, 'tutor_late', 'Arrived forty minutes late.');

        $this->assertSame('disputed', $session->fresh()->status);
        $this->assertSame('open', $dispute->status);
        $this->assertSame(1, Dispute::where('session_id', $session->id)->count());

        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, 0);
    }

    public function test_cancelling_more_than_twelve_hours_out_releases_the_hold_and_pays_the_tutor_nothing(): void
    {
        $package = $this->makePackage();
        $session = $this->schedule($package, now()->addDays(2));

        $policy = $this->sessions()->cancellationPolicy($session);
        $this->assertTrue($policy['free']);
        $this->assertSame(0, $policy['charge_paise']);

        $this->sessions()->cancel($session, self::STUDENT, 'Family travelling');

        $this->assertSame('cancelled', $session->fresh()->status);
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, 0);
    }

    /**
     * Inside twelve hours the tutor has already kept the evening free and
     * cannot refill it, so half the fee is theirs — and the platform takes no
     * commission on money no class was taught for.
     */
    public function test_cancelling_inside_twelve_hours_pays_the_tutor_half_the_fee_with_no_commission(): void
    {
        $package = $this->makePackage();
        $session = $this->schedule($package, now()->addHours(6));

        $this->sessions()->cancel($session, self::STUDENT, 'Child unwell');

        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, (int) round(self::RATE_PAISE / 2));
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, 0);
        $this->assertSame(
            0,
            LedgerEntry::where('kind', 'commission')->count(),
            'A late cancellation must not write a commission entry.',
        );
    }

    /**
     * Brief 7.4's last row: a tutor who calls off a class with more than twelve
     * hours' notice costs the family nothing. cancel() never branches on who
     * cancelled, so this row is right today by coincidence rather than by
     * design — which makes it the one most likely to break in silence on the day
     * the actor branch the other rows need is finally added.
     */
    public function test_a_tutor_cancelling_with_notice_costs_the_family_nothing(): void
    {
        $package = $this->makePackage();
        $session = $this->schedule($package, now()->addDays(2));

        $this->sessions()->cancel($session, self::TUTOR, 'Tutor travelling');

        $this->assertSame('cancelled', $session->fresh()->status);
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, 0);
        $this->assertSame(
            0,
            LedgerEntry::where('kind', 'cancellation_fee')->count(),
            'Nobody is charged for a slot given up with notice.',
        );
    }

    public function test_the_cancellation_policy_is_free_at_exactly_twelve_hours(): void
    {
        $package = $this->makePackage();
        $session = $this->makeSession($package, ['starts_at' => now()->addHours(12)]);

        $policy = $this->sessions()->cancellationPolicy($session);

        $this->assertTrue($policy['free'], 'Twelve hours out is the free side of the boundary.');
        $this->assertSame(0, $policy['charge_paise']);
        $this->assertSame(12, $policy['hours_until_class']);
    }

    public function test_the_cancellation_policy_charges_half_a_minute_inside_twelve_hours(): void
    {
        $package = $this->makePackage();
        $session = $this->makeSession($package, ['starts_at' => now()->addHours(12)->subMinute()]);

        $policy = $this->sessions()->cancellationPolicy($session);

        $this->assertFalse($policy['free'], 'Eleven fifty-nine is the charged side of the boundary.');
        $this->assertSame((int) round(self::RATE_PAISE / 2), $policy['charge_paise']);
        $this->assertSame(11, $policy['hours_until_class']);
    }

    /**
     * The family is shown a sentence before they confirm the cancellation, and
     * the two sentences are not interchangeable — one promises a refund, the
     * other warns of a charge.
     */
    public function test_the_cancellation_policy_explains_itself_in_the_words_the_family_is_shown(): void
    {
        $package = $this->makePackage();

        $free = $this->sessions()->cancellationPolicy(
            $this->makeSession($package, ['starts_at' => now()->addDays(2)]),
        );
        $charged = $this->sessions()->cancellationPolicy(
            $this->makeSession($package, ['starts_at' => now()->addHours(2)]),
        );

        $this->assertStringContainsString('no charge', $free['explanation']);
        $this->assertStringContainsString('back to your balance', $free['explanation']);
        $this->assertStringContainsString('half the fee is charged', $charged['explanation']);
        $this->assertStringContainsString('kept the slot free', $charged['explanation']);
    }

    /**
     * Whatever the policy quoted is exactly what the ledger posts. An odd fee
     * is the case that separates a charge derived from the quote from one
     * recomputed behind it, so this rate is deliberately not divisible by two.
     */
    public function test_the_ledger_posts_exactly_the_charge_the_policy_quoted(): void
    {
        $package = $this->makePackage(['rate_paise' => 33333]);
        $session = $this->schedule($package, now()->addHours(3));

        $quoted = $this->sessions()->cancellationPolicy($session)['charge_paise'];

        $this->sessions()->cancel($session, self::STUDENT, 'Child unwell');

        $this->assertSame(16667, $quoted, 'Half of 33333 paise, rounded away from zero.');
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, $quoted);
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
    }

    public function test_a_free_demo_class_moves_no_money_through_the_whole_flow(): void
    {
        $package = $this->makePackage(['rate_paise' => 0, 'amount_paise' => 0]);
        $session = $this->checkedOut($package);

        $this->sessions()->confirm($session, self::STUDENT);

        $this->assertSame('confirmed', $session->fresh()->status);
        $this->assertSame(0, LedgerEntry::count(), 'A free demo class writes no ledger entries at all.');
    }

    /**
     * Brief 2.1: money writes are auditable. One confirmation is one line in
     * the family's Sessions list and one message on the outbox, however many
     * times the button was pressed.
     */
    public function test_confirming_twice_records_one_confirmation(): void
    {
        $package = $this->makePackage();
        $session = $this->checkedOut($package);
        $stale = TutoringSession::find($session->id);

        $this->sessions()->confirm($session, self::STUDENT);

        try {
            $this->sessions()->confirm($stale, self::STUDENT);
        } catch (ValidationException) {
            // Refused on the re-read, which is the point: nothing was written.
        }

        $this->assertSame(1, AttendanceEvent::where('session_id', $session->id)->where('kind', 'confirm')->count());
        $this->assertSame(1, OutboxEvent::where('event', 'session.confirmed')->count());
    }

    /**
     * Brief 7.3: disputed sessions stay held until ops resolves them, which
     * only means anything if a class whose money has already left cannot be
     * disputed into a state that claims otherwise.
     */
    public function test_disputing_an_already_confirmed_class_is_refused(): void
    {
        $package = $this->makePackage();
        $session = $this->checkedOut($package);
        $this->sessions()->confirm($session, self::STUDENT);

        $this->expectException(ValidationException::class);

        $this->sessions()->dispute($session->fresh(), self::STUDENT, 'tutor_late');
    }

    /**
     * Brief 7.3 and 7.5: a class's money moves once. Cancelling a class that
     * has already been confirmed and paid out must be refused outright.
     */
    public function test_cancelling_an_already_confirmed_class_is_refused(): void
    {
        $package = $this->makePackage();
        $session = $this->checkedOut($package);
        $this->sessions()->confirm($session, self::STUDENT);

        try {
            $this->sessions()->cancel($session->fresh(), self::STUDENT, 'Changed our mind');
            $this->fail('A confirmed class must not be cancellable.');
        } catch (ValidationException) {
            // The guard the brief asks for.
        }

        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, self::PAYABLE_PAISE);
    }

    /**
     * Brief 7.4 row 2 is a split, and both halves have to be written down. The
     * charge has to leave a family account, or the tutor is paid from nowhere;
     * and the half that was NOT charged has to come back to the family's
     * available balance, or it simply ceases to exist in the books. A family
     * cancelling a Rs 1,100 class six hours out is otherwise silently out Rs 550
     * that no account holds and no screen reports.
     */
    public function test_a_late_cancellation_debits_the_family_by_the_charge_and_returns_the_rest(): void
    {
        $package = $this->makePackage();
        $session = $this->schedule($package, now()->addHours(6));
        $charge = (int) round(self::RATE_PAISE / 2);

        $this->sessions()->cancel($session, self::STUDENT, 'Child unwell');

        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, $charge);
        $this->assertBalance(
            self::STUDENT,
            Ledger::WALLET,
            $package->amount_paise - $charge,
        );
        $this->assertSame(
            self::RATE_PAISE - $charge,
            (int) LedgerEntry::where('session_id', $session->id)
                ->where('account', Ledger::WALLET)
                ->where('direction', 'credit')
                ->sum('amount_paise'),
            'The half nobody was charged goes back to the family rather than evaporating.',
        );
    }

    /**
     * Brief 7.4: the session counter records classes delivered. A class that
     * was cancelled before it ever started consumed nothing, so cancelling it
     * must leave the count where the delivered classes put it.
     */
    public function test_cancelling_a_class_that_was_never_checked_out_leaves_sessions_used_alone(): void
    {
        $package = $this->makePackage(['sessions_total' => 2]);

        $delivered = $this->schedule($package, now()->addDay()->setTime(10, 0));
        $abandoned = $this->schedule($package, now()->addDays(2)->setTime(10, 0));

        $this->sessions()->checkIn($delivered, self::TUTOR, 'geofence');
        $this->sessions()->checkOut($delivered->fresh(), self::TUTOR, ['Quadratics']);

        $this->assertSame(1, $package->fresh()->sessions_used);

        $this->sessions()->cancel($abandoned, self::STUDENT, 'Family travelling');

        $this->assertSame(1, $package->fresh()->sessions_used, 'A class that never ran cannot give back one that did.');
    }

    /**
     * Brief 7.4: a family no-show is charged the full fee and the tutor is paid
     * the full fee minus commission, because the tutor turned up.
     */
    public function test_a_family_no_show_charges_the_full_fee_and_pays_the_tutor_the_rest(): void
    {
        $package = $this->makePackage();
        $session = $this->schedule($package);

        $this->sessions()->noShow($session, self::TUTOR, 'student');

        $this->assertSame('no_show', $session->fresh()->status);
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, self::PAYABLE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, self::COMMISSION_PAISE);
    }

    /**
     * Brief 7.4: when the TUTOR cancels late the family is the wronged party —
     * the hold comes back in full and they are credited a free class for the
     * evening they lost.
     */
    public function test_a_late_tutor_cancellation_releases_the_hold_and_credits_a_free_class(): void
    {
        $package = $this->makePackage();
        $session = $this->schedule($package, now()->addHours(2));

        $this->sessions()->cancel($session, self::TUTOR, 'Tutor unwell');

        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
        $this->assertSame(13, $package->fresh()->sessions_total, 'The family is credited the class they lost.');
    }

    /**
     * Brief 7.4: when the platform is at fault the family pays nothing and the
     * tutor is made whole in full, with no commission taken on a class the
     * platform broke.
     */
    public function test_a_platform_failure_releases_the_hold_and_pays_the_tutor_in_full(): void
    {
        $package = $this->makePackage();
        $session = $this->schedule($package, now()->addHours(2));

        $this->sessions()->cancel($session, 'system', 'platform_failure');

        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, self::RATE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, 0);
    }

    /**
     * Brief 7.3 and 7.4: the cancellation policy is about a class that has not
     * happened. A class already taught and sitting in its 24-hour confirmation
     * window is past the point where it can be called off, and the state every
     * class occupies for a day is the likeliest one for a Cancel tap to land in.
     */
    public function test_cancelling_a_class_that_has_already_been_taught_is_refused(): void
    {
        $package = $this->makePackage();
        $session = $this->schedule($package, now()->addDay()->setTime(10, 0));

        Carbon::setTestNow('2026-09-16 10:00:00');
        $this->sessions()->checkIn($session, self::TUTOR, 'geofence');

        Carbon::setTestNow('2026-09-16 11:00:00');
        $this->sessions()->checkOut($session->fresh(), self::TUTOR, ['Quadratic equations']);

        Carbon::setTestNow('2026-09-16 12:00:00');

        try {
            $this->sessions()->cancel($session->fresh(), self::STUDENT, 'Changed our mind');
            $this->fail('A class that has already been taught must not be cancellable.');
        } catch (ValidationException) {
            // The guard the brief asks for.
        }

        $this->assertSame('checked_out', $session->fresh()->status);
        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
    }

    /**
     * Brief 7.4 and 2.1: cancelling a class gives back one class, however many
     * times the button is pressed. The hold release is idempotent under
     * cancel-release:{id}; the counter that decides how many classes the family
     * still owns is not.
     */
    public function test_cancelling_the_same_class_twice_gives_back_one_class(): void
    {
        $package = $this->makePackage(['sessions_used' => 3]);
        $session = $this->schedule($package, now()->addDays(2));

        $this->sessions()->cancel($session->fresh(), self::STUDENT, 'Family travelling');

        foreach ([2, 3] as $tap) {
            try {
                $this->sessions()->cancel($session->fresh(), self::STUDENT, 'Family travelling');
                $this->fail("Tap {$tap} cancelled a class that was already cancelled.");
            } catch (ValidationException) {
                // A class can only be cancelled out of `scheduled`, once.
            }
        }

        $this->assertSame(
            3,
            $package->fresh()->sessions_used,
            'The counter records classes delivered, and cancelling one that never ran gives nothing back.',
        );
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
    }

    /**
     * Brief 7.3: disputed sessions stay held until ops resolves it. The suite
     * covers the freezing twice over; this is the other half of the sentence —
     * the money has to be able to move again, to the tutor if ops rules for them
     * and back to the family if not.
     */
    public function test_resolving_a_dispute_releases_the_frozen_money(): void
    {
        $package = $this->makePackage();
        $session = $this->checkedOut($package);
        $dispute = $this->sessions()->dispute($session, self::STUDENT, 'tutor_late', 'Arrived forty minutes late.');

        $this->sessions()->resolveDispute($dispute, 'ops', inFavourOfTutor: false);

        $this->assertSame('resolved', $dispute->fresh()->status);
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(
            self::STUDENT,
            Ledger::WALLET,
            $package->amount_paise,
        );
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
    }

    /**
     * Brief 7.4 row 4: a tutor who does not turn up releases the family's hold
     * in full and costs them a free class for the evening they lost. This is the
     * worst user-visible money outcome in the module and there is no path to it.
     */
    public function test_a_tutor_no_show_releases_the_hold_and_credits_a_free_class(): void
    {
        $package = $this->makePackage();
        $session = $this->schedule($package, now()->addHours(2));

        $this->sessions()->noShow($session, self::STUDENT, 'tutor');

        $this->assertSame('no_show', $session->fresh()->status);
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
        $this->assertSame(13, $package->fresh()->sessions_total, 'The family is credited the class they lost.');
    }

    /**
     * Book a class that must clash, and assert that the refusal wrote nothing.
     * The counts are taken before the attempt so the helper holds whatever the
     * caller has already booked.
     */
    private function assertRefusedAsAClash(Package $package, Carbon $startsAt, int $plannedMin = 60): void
    {
        // Buying the package is not part of what is being measured here.
        $this->fundWallet($package);

        $sessionsBefore = TutoringSession::count();
        $entriesBefore = LedgerEntry::count();
        $heldBefore = $this->ledger()->balance($package->student_user_id, Ledger::HELD);

        try {
            $this->schedule($package, $startsAt, $plannedMin);
            $this->fail('An overlapping class must be refused.');
        } catch (ValidationException $e) {
            $this->assertArrayHasKey('starts_at', $e->errors(), 'The refusal has to come from the clash guard.');
        }

        $this->assertSame($sessionsBefore, TutoringSession::count(), 'The refused class left a row behind.');
        $this->assertSame($entriesBefore, LedgerEntry::count(), 'The refused class held a second fee.');
        $this->assertBalance($package->student_user_id, Ledger::HELD, $heldBefore);
    }

    /**
     * Book a class the way the booking screen does, through the service and not
     * the table — which now means the package has to have been paid for, since
     * a hold is a move out of a funded wallet rather than a credit minted from
     * nothing. Funding is keyed on the package, so this is one purchase however
     * many classes are booked against it.
     */
    private function schedule(Package $package, ?Carbon $startsAt = null, int $plannedMin = 60): TutoringSession
    {
        $this->fundWallet($package);

        return $this->sessions()->schedule(
            $package,
            $startsAt ?? now()->addDay(),
            $plannedMin,
            'home',
            '12 Rose Lane',
        );
    }

    /** A class taken all the way to checked out, so the fee is held and the class is done. */
    private function checkedOut(Package $package): TutoringSession
    {
        $session = $this->schedule($package);

        $this->sessions()->checkIn($session, $package->tutor_user_id, 'geofence');

        return $this->sessions()->checkOut($session->fresh(), $package->tutor_user_id, ['Quadratic equations']);
    }
}
