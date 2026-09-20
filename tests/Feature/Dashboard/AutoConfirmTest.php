<?php

declare(strict_types=1);

namespace Tests\Feature\Dashboard;

use App\Nxt\Dashboard\Models\AttendanceEvent;
use App\Nxt\Dashboard\Models\LedgerEntry;
use App\Nxt\Dashboard\Models\OutboxEvent;
use App\Nxt\Dashboard\Models\Package;
use App\Nxt\Dashboard\Models\TutoringSession;
use App\Nxt\Dashboard\Services\Ledger;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;

/**
 * The 24-hour timer, and the money invariants the whole loop has to keep.
 *
 * Most parents never tap Confirm. Section 7.3 of the brief makes silence mean
 * yes after 24 hours, which makes this timer — and the scheduled command that
 * drives it — the path most tutors are actually paid through. A timer that
 * fires an hour early takes money the family had not agreed to release; one
 * that pays twice when two scheduler runs overlap invents money outright. Both
 * boundaries are asserted here from each side.
 *
 * The second half of the file is the closest thing the suite has to the nightly
 * reconciliation section 2.1 calls non-negotiable: walk a real package through
 * schedule, check-in, check-out and confirmation with no hand-written rows, then
 * prove the fee left the hold exactly once, that payable plus commission equals
 * what the confirmed classes were worth, that every figure either dashboard
 * prints can be recomputed from `nxt_ledger_entries` alone, and that one
 * family's money is unreachable from another family's user id.
 */
class AutoConfirmTest extends DashboardTestCase
{
    public function test_a_class_checked_out_23h59m_ago_is_left_alone(): void
    {
        $session = $this->checkedOutSession($this->makePackage(), now()->subHours(23)->subMinutes(59));

        $this->assertSame(0, $this->sessions()->autoConfirmDue());

        $this->assertSame('checked_out', $session->fresh()->status);
        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
    }

    /**
     * The window closes at exactly 24 hours, not a minute later. A parent told
     * "you have 24 hours" has had 24 hours the moment the clock reads it.
     *
     * This is the boundary an off-by-one in now()->subHours(24) lands on, and a
     * session can say `confirmed` while the money went nowhere, so what is
     * asserted is the money and not only the label.
     */
    public function test_a_class_checked_out_exactly_24h_ago_is_confirmed(): void
    {
        $session = $this->checkedOutSession($this->makePackage(), now()->subHours(24));

        $this->assertSame(1, $this->sessions()->autoConfirmDue());

        $this->assertSame('confirmed', $session->fresh()->status);
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, self::PAYABLE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, self::COMMISSION_PAISE);
    }

    /**
     * A different rate from the two other tests that assert the split, so the
     * three layers between them cover three rounding cases rather than one at
     * three layers: fifteen per cent of 12345 is 1851.75, which rounds up.
     */
    public function test_a_class_checked_out_24h01m_ago_is_confirmed_and_paid(): void
    {
        $package = $this->makePackage(['rate_paise' => 12345]);
        $session = $this->checkedOutSession($package, now()->subHours(24)->subMinute());

        $this->assertSame(1852, $session->commission_paise, 'Fifteen per cent of 12345 paise, rounded up from .75.');
        $this->assertSame(1, $this->sessions()->autoConfirmDue());

        $this->assertSame('confirmed', $session->fresh()->status);
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 10493);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, 1852);
    }

    /**
     * The count is what the scheduler logs and what ops reads the morning after
     * a run, so it has to be the number actually confirmed rather than the
     * number considered.
     */
    public function test_auto_confirm_due_returns_the_number_of_classes_it_confirmed(): void
    {
        $package = $this->makePackage();

        $this->checkedOutSession($package, now()->subHours(25));
        $this->checkedOutSession($package, now()->subHours(30));
        $this->checkedOutSession($package, now()->subDays(3));
        $this->checkedOutSession($package, now()->subHours(2));

        $this->assertSame(3, $this->sessions()->autoConfirmDue());

        $this->assertSame(3, TutoringSession::where('status', 'confirmed')->count());
        $this->assertSame(1, TutoringSession::where('status', 'checked_out')->count());
    }

    /**
     * The family's Sessions list says "Auto-confirmed" off the back of this row.
     * If the timer recorded itself as the parent, the screen would tell a family
     * they approved a class they never looked at, and the dispute that follows
     * would have no evidence to resolve against.
     */
    public function test_an_auto_confirmed_class_is_attributed_to_the_timer_and_not_the_parent(): void
    {
        $session = $this->checkedOutSession($this->makePackage(), now()->subHours(25));

        $this->sessions()->autoConfirmDue();

        $events = AttendanceEvent::where('session_id', $session->id)->get();

        $this->assertCount(1, $events, 'Attendance events written for the confirmation.');
        $this->assertSame('auto_confirm', $events->first()->kind);
        $this->assertSame('system', $events->first()->actor_user_id);
        $this->assertSame('timer_24h', $events->first()->method);
    }

    public function test_an_auto_confirmed_class_publishes_an_automatic_confirmation_event(): void
    {
        $session = $this->checkedOutSession($this->makePackage(), now()->subHours(25));

        $this->sessions()->autoConfirmDue();

        $published = OutboxEvent::where('event', 'session.confirmed')->get();

        $this->assertCount(1, $published, 'session.confirmed events on the outbox.');
        $this->assertSame($session->id, $published->first()->payload['session_id']);
        $this->assertTrue($published->first()->payload['automatic']);
    }

    /**
     * Two scheduler runs overlapping is the ordinary failure, not the exotic
     * one: a slow run, a retried cron, an operator running it by hand. The
     * tutor must be paid once.
     *
     * The interleaving that matters is the one where both runs read the session
     * while it is still checked_out, so the due set is snapshotted before the
     * first run and the stale copies are confirmed after it. Running the two
     * calls strictly in sequence instead would have the second find nothing to
     * do, which exercises no idempotency key at all. What holds here is the
     * ledger's keys; the duplicated audit trail this also produces is carried by
     * test_two_overlapping_timer_runs_record_one_confirmation below.
     */
    public function test_running_the_timer_twice_in_the_same_minute_pays_once(): void
    {
        $session = $this->checkedOutSession($this->makePackage(), now()->subHours(25));

        $due = TutoringSession::where('status', 'checked_out')->get();

        $this->assertSame(1, $this->sessions()->autoConfirmDue());

        foreach ($due as $stale) {
            try {
                $this->sessions()->confirm($stale, 'system', automatic: true);
                $this->fail('The second run confirmed a class the first had already confirmed.');
            } catch (ValidationException) {
                // What the second run of an overlapping pair has to see.
            }
        }

        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, self::PAYABLE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, self::COMMISSION_PAISE);
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);

        $this->assertSame(
            5,
            LedgerEntry::where('session_id', $session->id)->count(),
            'A two-legged hold and a three-legged release: the second run must add nothing.',
        );
    }

    /**
     * Every status but checked_out is somebody else's decision — a class not yet
     * taught, one the family already confirmed, one they cancelled, one ops is
     * still ruling on. The timer has no business in any of them.
     */
    public function test_the_timer_ignores_every_status_but_checked_out(): void
    {
        $package = $this->makePackage();
        $statuses = ['scheduled', 'checked_in', 'confirmed', 'cancelled', 'disputed', 'no_show'];

        foreach ($statuses as $status) {
            $this->checkedOutSession($package, now()->subDays(2), ['status' => $status]);
        }

        $this->assertSame(0, $this->sessions()->autoConfirmDue());

        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE * count($statuses));
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);

        // Every row here is written under one frozen instant, so created_at is
        // identical across all six and an ORDER BY on it would be decided by
        // whatever order SQLite felt like. The claim is that no status moved,
        // not that they come back in any order, so the two multisets are what
        // gets compared.
        $expected = array_count_values($statuses);
        $actual = array_count_values(TutoringSession::pluck('status')->all());
        ksort($expected);
        ksort($actual);

        $this->assertSame($expected, $actual, 'Statuses after a timer run.');
    }

    /**
     * Section 7.3: a disputed class stays held until ops resolves it. The timer
     * running the next night must not settle the argument by paying the tutor.
     */
    public function test_a_class_disputed_after_check_out_keeps_its_fee_held(): void
    {
        $session = $this->checkedOutSession($this->makePackage(), now()->subHours(30));

        $this->sessions()->dispute($session, self::STUDENT, 'tutor_left_early', 'He left after twenty minutes.');

        $this->assertSame(0, $this->sessions()->autoConfirmDue());

        $this->assertSame('disputed', $session->fresh()->status);
        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, 0);
    }

    /**
     * The command is the only thing that ever calls the timer in production, so
     * a green service behind a broken command still means nobody gets paid.
     */
    public function test_the_auto_confirm_command_releases_the_hold_and_reports_the_count(): void
    {
        $this->checkedOutSession($this->makePackage(), now()->subHours(25));

        $this->artisan('nxt-dashboard:auto-confirm')
            ->expectsOutputToContain('Auto-confirmed 1 class(es).')
            ->assertExitCode(0)
            ->run();

        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, self::PAYABLE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, self::COMMISSION_PAISE);
    }

    public function test_the_auto_confirm_command_reports_when_nothing_is_due(): void
    {
        $this->checkedOutSession($this->makePackage(), now()->subHours(2));

        $this->artisan('nxt-dashboard:auto-confirm')
            ->expectsOutputToContain('Nothing due for auto-confirmation.')
            ->assertExitCode(0)
            ->run();

        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
    }

    /**
     * The whole loop with real service calls and no hand-written rows: the fee
     * enters the hold once when the class is scheduled and leaves it once when
     * the timer confirms. Two debits would pay a tutor twice; none would strand
     * the family's money forever.
     */
    public function test_a_full_lifecycle_moves_the_fee_into_the_hold_and_out_of_it_exactly_once(): void
    {
        $package = $this->makePackage();
        $session = $this->teachAndCheckOut($package, Carbon::parse('2026-09-16 10:00:00'));

        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);

        Carbon::setTestNow('2026-09-17 12:00:00');
        $this->assertSame(1, $this->sessions()->autoConfirmDue());

        $held = LedgerEntry::where('session_id', $session->id)->where('account', Ledger::HELD)->get();

        $this->assertCount(2, $held, 'Held entries for one confirmed class.');
        $this->assertSame(self::RATE_PAISE, (int) $held->where('direction', 'credit')->sum('amount_paise'));
        $this->assertSame(self::RATE_PAISE, (int) $held->where('direction', 'debit')->sum('amount_paise'));
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
    }

    /**
     * Section 7.3: confirmation splits the held amount into commission and
     * payable. Across several classes the two sides must still add back to
     * exactly what the families were charged — a split that leaked a paise per
     * class would be invisible on one class and a reconciliation failure on a
     * thousand.
     *
     * The two totals are named as absolute figures worked out by hand, not
     * recomputed here: fifteen per cent of 33333 paise is 4999.95, which rounds
     * to 5000 and leaves 28333 for the tutor, three times over. Asserting only
     * that the halves sum back to the fee would pass for any commission at all,
     * including zero, because payable is DEFINED as the fee minus the
     * commission — the sum is arithmetic, the two literals are the test.
     */
    public function test_tutor_payable_plus_commission_equals_the_fees_of_every_confirmed_class(): void
    {
        $package = $this->makePackage(['rate_paise' => 33333, 'sessions_total' => 4]);

        $this->teachAndCheckOut($package, Carbon::parse('2026-09-16 10:00:00'));
        $this->teachAndCheckOut($package, Carbon::parse('2026-09-17 10:00:00'));
        $this->teachAndCheckOut($package, Carbon::parse('2026-09-18 10:00:00'));

        Carbon::setTestNow('2026-09-19 12:00:00');
        $this->assertSame(3, $this->sessions()->autoConfirmDue());

        $confirmedFees = (int) TutoringSession::where('status', 'confirmed')->sum('fee_paise');
        $payable = $this->ledger()->balance(self::TUTOR, Ledger::TUTOR_PAYABLE);
        $commission = $this->ledger()->balance(self::TUTOR, Ledger::COMMISSION);

        $this->assertSame(99999, $confirmedFees);
        $this->assertSame(15000, $commission, 'Three classes at fifteen per cent of 33333 paise.');
        $this->assertSame(84999, $payable, 'What is left of those three fees for the tutor.');
        $this->assertSame($confirmedFees, $payable + $commission, 'Payable plus commission against confirmed fees.');
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
    }

    /**
     * Section 2.1: balances are derived, never stored. Nothing here writes a
     * balance; the test recomputes each one from the raw entries in PHP and
     * demands the service agree. If someone ever caches a balance on a column,
     * this is the test that catches the first time the two disagree.
     *
     * Every one of the four accounts is left holding a distinct non-zero
     * amount, which is what makes the comparison mean anything: only the first
     * class falls due, so the second one's fee is still held, and a purchase is
     * posted so the family_wallet account is not comparing nothing against
     * nothing. Each side is also anchored to a literal, so the test still fails
     * if the service and the fold happen to drift together.
     */
    public function test_every_balance_the_dashboards_show_recomputes_from_the_ledger_rows(): void
    {
        $package = $this->makePackage();

        $this->teachAndCheckOut($package, Carbon::parse('2026-09-16 10:00:00'));
        $this->teachAndCheckOut($package, Carbon::parse('2026-09-17 10:00:00'));

        Carbon::setTestNow('2026-09-17 12:00:00');
        $this->assertSame(1, $this->sessions()->autoConfirmDue(), 'Only the older class is 24 hours past its check-out.');

        $this->ledger()->post(
            Ledger::WALLET, self::STUDENT, 'credit', 1320000, 'package_purchase',
            'purchase:'.$package->id, packageId: $package->id,
        );

        $recomputed = $this->recomputeBalances();
        $wallet = $this->ledger()->familyWallet(self::STUDENT);

        $this->assertSame($recomputed[self::STUDENT.'|'.Ledger::HELD], $wallet['held_paise']);
        $this->assertSame(self::RATE_PAISE, $wallet['held_paise'], 'The class still inside its window is still held.');

        $this->assertSame($recomputed[self::STUDENT.'|'.Ledger::WALLET], $wallet['balance_paise']);
        $this->assertSame(
            1100000,
            $wallet['balance_paise'],
            'The purchase, less the two fees scheduling moved into hold.',
        );

        $this->assertSame(
            $recomputed[self::TUTOR.'|'.Ledger::TUTOR_PAYABLE],
            $this->ledger()->tutorEarnings(self::TUTOR)['payable_paise'],
        );
        $this->assertSame(self::PAYABLE_PAISE, $recomputed[self::TUTOR.'|'.Ledger::TUTOR_PAYABLE]);

        $this->assertSame(
            $recomputed[self::TUTOR.'|'.Ledger::COMMISSION],
            $this->ledger()->balance(self::TUTOR, Ledger::COMMISSION),
        );
        $this->assertSame(self::COMMISSION_PAISE, $recomputed[self::TUTOR.'|'.Ledger::COMMISSION]);
    }

    /**
     * Money scoping. Every balance is a query filtered by owner_user_id, and
     * nothing else separates one family's money from another's — no tenant
     * column, no foreign key. The filter is the boundary, so it is worth
     * proving rather than assuming.
     */
    public function test_one_family_ledger_is_not_reachable_from_another_families_user_id(): void
    {
        $first = $this->makePackage();
        $second = $this->makePackage([
            'student_user_id' => 'STU3003',
            'tutor_user_id' => 'TUT4004',
            'rate_paise' => 50000,
        ]);

        $mine = $this->teachAndCheckOut($first, Carbon::parse('2026-09-16 10:00:00'));
        $theirs = $this->teachAndCheckOut($second, Carbon::parse('2026-09-16 16:00:00'));

        Carbon::setTestNow('2026-09-17 20:00:00');
        $this->assertSame(2, $this->sessions()->autoConfirmDue());

        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, self::PAYABLE_PAISE);
        $this->assertBalance('TUT4004', Ledger::TUTOR_PAYABLE, 42500);

        $this->assertBalance('STU3003', Ledger::HELD, 0);
        $this->assertBalance(self::STUDENT, Ledger::TUTOR_PAYABLE, 0);
        $this->assertBalance('STU3003', Ledger::TUTOR_PAYABLE, 0);

        $sessionIds = array_column($this->ledger()->entries(self::STUDENT), 'session_id');

        $this->assertContains($mine->id, $sessionIds);
        $this->assertNotContains($theirs->id, $sessionIds, 'Another family\'s class on this family\'s statement.');
    }

    /**
     * Brief 2.1: one confirmation is one line in the family's Sessions list and
     * one message on the outbox, however many scheduler runs saw the class. The
     * automatic path is where two runs actually overlap — a slow run, a retried
     * cron, an ops engineer running the command by hand after an outage — and
     * the money survives it; the audit trail does not.
     */
    public function test_two_overlapping_timer_runs_record_one_confirmation(): void
    {
        $session = $this->checkedOutSession($this->makePackage(), now()->subHours(25));

        $due = TutoringSession::where('status', 'checked_out')->get();

        $this->sessions()->autoConfirmDue();

        foreach ($due as $stale) {
            try {
                $this->sessions()->confirm($stale, 'system', automatic: true);
            } catch (ValidationException) {
                // Refused on the re-read: the class is already confirmed.
            }
        }

        $this->assertSame(1, AttendanceEvent::where('session_id', $session->id)->count());
        $this->assertSame(1, OutboxEvent::where('event', 'session.confirmed')->count());
        $this->assertSame(5, LedgerEntry::where('session_id', $session->id)->count());
    }

    /**
     * The outbox pattern is a write and then a relay. The write half is
     * implemented and this file asserts it three times over; the publish half
     * has to exist, or the table is a queue nothing drains and every family
     * notification the module promises is never sent.
     */
    public function test_the_outbox_is_drained_by_a_relay(): void
    {
        $this->checkedOutSession($this->makePackage(), now()->subHours(25));
        $this->sessions()->autoConfirmDue();

        $this->assertSame(1, OutboxEvent::whereNull('published_at')->count(), 'Written, and waiting for the relay.');

        $this->artisan('nxt-dashboard:relay-outbox')->assertExitCode(0)->run();

        $this->assertSame(0, OutboxEvent::whereNull('published_at')->count(), 'Everything written has been delivered.');
    }

    /**
     * Brief 2.1 asks for auditability, and the correlation id is the thread that
     * ties a ledger entry back to the action that caused it. A scheduler run is
     * still a caller: "why was this family charged" has to be answerable six
     * weeks later for the automatic path too, which is how most classes settle.
     */
    public function test_a_money_transition_carries_the_correlation_id_that_caused_it(): void
    {
        $this->checkedOutSession($this->makePackage(), now()->subHours(25));

        $this->sessions()->autoConfirmDue();

        $confirmed = OutboxEvent::where('event', 'session.confirmed')->sole();

        $this->assertNotNull($confirmed->correlation_id, 'A scheduler run still needs a thread somebody can pull.');
    }

    /**
     * Brief 7.3 bounds the window after check-out at 24 hours and says nothing
     * about the window before it. The module mirrors that gap exactly, and a
     * tutor forgetting to tap Check Out is the likeliest operational failure in
     * the whole flow.
     */
    public function test_a_class_that_is_never_checked_out_does_not_strand_its_fee_forever(): void
    {
        $package = $this->makePackage();
        $this->fundWallet($package);
        $session = $this->sessions()->schedule($package, Carbon::parse('2026-09-16 10:00:00'), 60, 'home', 'Flat 402, Sector 45');

        Carbon::setTestNow('2026-09-16 10:05:00');
        $this->sessions()->checkIn($session, self::TUTOR, 'geofence');

        Carbon::setTestNow('2026-09-23 09:00:00');
        $this->sessions()->sweepAbandoned();

        $this->assertNotSame('checked_in', $session->fresh()->status, 'A class abandoned for a week cannot still be in progress.');
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
    }

    /**
     * Section 2.1 non-negotiable 2 and section 7.5: the wallet is a double-entry
     * ledger, so the signed sum of every entry a class produces is zero — the
     * fee moves between accounts and is never created.
     *
     * LedgerTest pins the same rule on the three Ledger calls in isolation. This
     * is the reconciliation version: the real loop, confirmed by the timer
     * rather than by hand, which is how the great majority of classes settle and
     * therefore how the books would actually come to be out of balance.
     */
    public function test_a_timer_confirmed_class_leaves_the_books_balanced(): void
    {
        $package = $this->makePackage();
        $session = $this->teachAndCheckOut($package, Carbon::parse('2026-09-16 10:00:00'));

        Carbon::setTestNow('2026-09-17 12:00:00');
        $this->sessions()->autoConfirmDue();

        $signed = LedgerEntry::where('session_id', $session->id)
            ->get()
            ->sum(fn (LedgerEntry $entry): int => $entry->direction === 'credit'
                ? $entry->amount_paise
                : -$entry->amount_paise);

        $this->assertSame(0, (int) $signed, 'Signed sum of every entry one class produced.');
    }

    /**
     * A class that was taught and checked out at a given moment, with its fee
     * already held. Every timer test starts here, because checked_out is the
     * only state autoConfirmDue looks at.
     */
    private function checkedOutSession(Package $package, Carbon $checkedOutAt, array $overrides = []): TutoringSession
    {
        $session = $this->makeSession($package, array_merge([
            'status' => 'checked_out',
            'starts_at' => $checkedOutAt->copy()->subHour(),
            'checked_in_at' => $checkedOutAt->copy()->subHour(),
            'checked_out_at' => $checkedOutAt,
            'actual_min' => 60,
            'topics' => ['Quadratic equations'],
        ], $overrides));

        $this->fundWallet($package);
        $this->ledger()->holdForSession($session, $session->student_user_id);

        return $session;
    }

    /**
     * The real loop up to the point the timer takes over: schedule, arrive,
     * teach, check out. Nothing is written by hand, so the money that moves is
     * the money production would move. The clock is left at the end of the
     * class and callers travel forward themselves to reach the window.
     */
    private function teachAndCheckOut(Package $package, Carbon $startsAt): TutoringSession
    {
        Carbon::setTestNow(self::NOW);

        $this->fundWallet($package);

        $session = $this->sessions()->schedule($package, $startsAt, 60, 'home', 'Flat 402, Sector 45');

        Carbon::setTestNow($startsAt);
        $session = $this->sessions()->checkIn($session, $package->tutor_user_id, 'geofence', 28.4595, 77.0266, 12);

        Carbon::setTestNow($startsAt->copy()->addHour());

        return $this->sessions()->checkOut($session, $package->tutor_user_id, ['Quadratic equations'], 60, 4);
    }

    /**
     * Every balance in the database, folded in PHP straight off the raw rows and
     * keyed by owner and account. The point is to arrive at the numbers by a
     * different route than the service takes.
     *
     * @return array<string,int>
     */
    private function recomputeBalances(): array
    {
        $balances = [];

        foreach (LedgerEntry::all() as $entry) {
            $key = $entry->owner_user_id.'|'.$entry->account;
            $balances[$key] ??= 0;
            $balances[$key] += $entry->direction === 'credit' ? $entry->amount_paise : -$entry->amount_paise;
        }

        return $balances;
    }
}
