<?php

declare(strict_types=1);

namespace Tests\Feature\Dashboard;

use App\Models\UserSubscription;
use App\Nxt\Dashboard\Models\MeterEvent;
use App\Nxt\Dashboard\Services\Entitlements;
use App\NxtAi\Contracts\OpenAiChat;
use App\NxtAi\Models\NxtAiMessage;
use App\NxtAi\OpenAI\FakeOpenAiChat;
use Illuminate\Database\QueryException;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * The meter that stands in front of every paid feature.
 *
 * Section 9.3 of the v1.1 brief makes three promises about it: a consume runs in
 * the same transaction as the action it pays for, `nxt_meter_events` is
 * append-only with an idempotency key so a retried request charges once, and a
 * failed action refunds the credit. Section 2.1 adds that the writes must be
 * auditable — a parent asking what their credits went on has to get a straight
 * answer. Those are the rules this suite encodes.
 *
 * The service has two branches that share almost no code. With an active
 * subscription the running total is the counter column on `user_subscriptions`
 * and the event row is written beside it; with no subscription the user is on
 * the free plan and the total is derived from the events themselves over the
 * calendar month. They disagree in ways that matter, so both are covered here
 * and the asymmetry between them has a test of its own.
 *
 * Where the implementation contradicts the brief the test states the BRIEF's
 * rule and is skipped with the divergence named, rather than blessing the
 * current behaviour with a green tick.
 */
class EntitlementsTest extends DashboardTestCase
{
    /** A family with no subscription row, used wherever the free branch is under test. */
    private const FREE_USER = 'STU9000';

    // ---------------------------------------------------------------- free plan

    /**
     * The free tier is not "unmetered", it is a specific allowance the pricing
     * page states, and tutor contact is not on it at all.
     */
    public function test_the_free_plan_allows_ninety_ai_messages_and_three_lead_views_and_no_contacts(): void
    {
        $ai = $this->entitlements()->check(self::FREE_USER, Entitlements::AI_MESSAGES);
        $leads = $this->entitlements()->check(self::FREE_USER, Entitlements::LEAD_VIEW);
        $contact = $this->entitlements()->check(self::FREE_USER, Entitlements::TUTOR_CONTACT);

        $this->assertSame(90, $ai['limit'], 'Free AI message allowance.');
        $this->assertSame(90, $ai['remaining']);
        $this->assertTrue($ai['allow'], 'A free user with the whole allowance left may send a message.');

        $this->assertSame(3, $leads['limit'], 'Free lead-view allowance.');
        $this->assertTrue($leads['allow']);

        $this->assertSame(0, $contact['limit'], 'Tutor contact is not part of the free tier.');
        $this->assertFalse($contact['allow'], 'A free user cannot contact a tutor without upgrading.');
    }

    /** The free meter resets on the calendar month, and says so. */
    public function test_the_free_meter_resets_at_the_start_of_next_month(): void
    {
        $meter = $this->entitlements()->check(self::FREE_USER, Entitlements::AI_MESSAGES);

        $this->assertSame('2026-10-01T00:00:00+00:00', $meter['reset_at']);
    }

    /**
     * A free consume still has to leave an audit row, because the event log is
     * the only record of what a free account spent — there is no counter column
     * behind it.
     */
    public function test_a_free_consume_writes_an_event_with_no_subscription_behind_it(): void
    {
        $event = $this->entitlements()->consume(self::FREE_USER, Entitlements::AI_MESSAGES, 'ai:free:1');

        $this->assertNotNull($event, 'A free user inside their allowance may consume.');
        $this->assertNull($event->subscription_id, 'A free consume belongs to no subscription.');
        $this->assertSame('consume', $event->reason);
        $this->assertMeterDelta('ai:free:1', -1);

        $this->assertSame(1, $this->entitlements()->check(self::FREE_USER, Entitlements::AI_MESSAGES)['used']);
    }

    /**
     * Unused credits do not roll over, and spent ones do not follow you into the
     * new month either. The window is the calendar month, so a message sent on
     * the last night of August must not eat into September's allowance.
     */
    public function test_last_months_spending_does_not_count_against_this_month(): void
    {
        Carbon::setTestNow('2026-08-31 23:59:59');
        $this->entitlements()->consume(self::FREE_USER, Entitlements::AI_MESSAGES, 'ai:august', 40);

        Carbon::setTestNow(self::NOW);
        $meter = $this->entitlements()->check(self::FREE_USER, Entitlements::AI_MESSAGES);

        $this->assertSame(0, $meter['used'], 'August spending is not September spending.');
        $this->assertSame(90, $meter['remaining']);
        $this->assertSame(1, MeterEvent::count(), 'The August event is kept — the window moved, the log did not.');
    }

    /**
     * The other edge of the same boundary. The exclusive side is pinned above —
     * 23:59:59 on the last night of August is not September — and this is the
     * inclusive one: an event stamped at the very first instant of the month
     * counts against that month. A one-sided boundary test passes happily
     * against a `>` that should be a `>=`, and the cost of getting it wrong is
     * one credit wrongly granted or refused at midnight on the first, for every
     * free account at once.
     */
    public function test_an_event_at_the_first_instant_of_the_month_counts_against_it(): void
    {
        Carbon::setTestNow('2026-09-01 00:00:00');
        $this->entitlements()->consume(self::FREE_USER, Entitlements::AI_MESSAGES, 'ai:first-instant', 4);

        Carbon::setTestNow(self::NOW);
        $meter = $this->entitlements()->check(self::FREE_USER, Entitlements::AI_MESSAGES);

        $this->assertSame(4, $meter['used'], 'Midnight on the first is inside the month, not before it.');
        $this->assertSame(86, $meter['remaining']);
    }

    /**
     * At exactly zero remaining the meter stops the action dead: nothing is
     * charged, nothing is written, and the family is told which plan would let
     * them carry on.
     */
    public function test_the_free_meter_denies_at_exactly_zero_remaining_and_names_an_upgrade(): void
    {
        $this->makePlan(['plan_name' => 'Student Pro', 'price' => 499.00, 'ai_credits' => 500]);

        $this->entitlements()->consume(self::FREE_USER, Entitlements::AI_MESSAGES, 'ai:all-ninety', 90);
        $this->assertSame(0, $this->entitlements()->check(self::FREE_USER, Entitlements::AI_MESSAGES)['remaining']);

        $denied = $this->entitlements()->consume(self::FREE_USER, Entitlements::AI_MESSAGES, 'ai:ninety-first');

        $this->assertNull($denied, 'The ninety-first message is refused.');
        $this->assertSame(1, MeterEvent::count(), 'A denied consume writes nothing.');

        $meter = $this->entitlements()->check(self::FREE_USER, Entitlements::AI_MESSAGES);
        $this->assertFalse($meter['allow']);
        $this->assertSame('Student Pro', $meter['upgrade_plan'], 'The block names the plan that lifts it.');
    }

    /**
     * A failed generation must not cost a free family anything. On this branch
     * the refund lands as a positive delta inside the same month, so the derived
     * total walks straight back down.
     */
    public function test_a_refund_inside_the_same_month_restores_the_free_allowance(): void
    {
        $consumed = $this->entitlements()->consume(self::FREE_USER, Entitlements::AI_MESSAGES, 'studio:run-1', 5);
        $this->assertSame(85, $this->entitlements()->check(self::FREE_USER, Entitlements::AI_MESSAGES)['remaining']);

        $this->entitlements()->refund($consumed, 'generation_failed');

        $meter = $this->entitlements()->check(self::FREE_USER, Entitlements::AI_MESSAGES);
        $this->assertSame(0, $meter['used'], 'A refunded generation costs nothing.');
        $this->assertSame(90, $meter['remaining']);
        $this->assertMeterDelta('meter-refund:'.$consumed->id, 5);
    }

    // --------------------------------------------------------------- subscribed

    /**
     * The counter column is what the pricing page sells and the event row is
     * what makes it auditable. Both move, and they agree with each other.
     */
    public function test_a_subscribed_consume_moves_the_column_and_writes_one_matching_event(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT);

        $event = $this->entitlements()->consume(self::STUDENT, Entitlements::TUTOR_CONTACT, 'contact:STU1001:TUT2002');

        $this->assertSame(1, $subscription->fresh()->contact_used, 'The subscription counter moved by the cost.');
        $this->assertMeterDelta('contact:STU1001:TUT2002', -1);
        $this->assertSame($subscription->id, $event->subscription_id, 'The event names the subscription it was charged to.');
        $this->assertSame(Entitlements::TUTOR_CONTACT, $event->feature);
    }

    /** With a subscription the numbers on the chip come off the subscription row. */
    public function test_check_reads_used_limit_and_reset_at_off_the_subscription(): void
    {
        $this->makeSubscription(self::STUDENT, ['contact_limit' => 25, 'contact_used' => 4]);

        $meter = $this->entitlements()->check(self::STUDENT, Entitlements::TUTOR_CONTACT);

        $this->assertSame(4, $meter['used']);
        $this->assertSame(25, $meter['limit']);
        $this->assertSame(21, $meter['remaining']);
        $this->assertSame('2026-10-15T09:00:00+00:00', $meter['reset_at'], 'A subscriber resets when the subscription renews.');
        $this->assertTrue($meter['allow']);
    }

    /**
     * The upgrade prompt is only ever shown at the point of the block, so it has
     * to name the cheapest plan that actually raises THIS meter — not the
     * cheapest plan, and not one that leaves the family exactly as stuck.
     */
    public function test_denial_names_the_cheapest_plan_that_raises_this_meter(): void
    {
        $current = $this->makePlan(['plan_name' => 'Student Starter', 'price' => 199.00, 'contact_limit' => 2]);
        $this->makePlan(['plan_name' => 'Student Plus', 'price' => 399.00, 'contact_limit' => 10]);
        $this->makePlan(['plan_name' => 'Student Max', 'price' => 999.00, 'contact_limit' => 50]);

        $this->makeSubscription(self::STUDENT, [
            'plan_id' => $current->id,
            'contact_limit' => 2,
            'contact_used' => 2,
        ]);

        $meter = $this->entitlements()->check(self::STUDENT, Entitlements::TUTOR_CONTACT);

        $this->assertSame(0, $meter['remaining']);
        $this->assertFalse($meter['allow']);
        $this->assertSame('Student Plus', $meter['upgrade_plan'], 'Starter is no better than what they hold; Max is not the cheapest that helps.');
    }

    /**
     * The double-tap test. Two clicks on "open lead" send the same idempotency
     * key, and brief 9.3 says that costs one lead view, not two.
     */
    public function test_a_retried_consume_charges_once_and_returns_the_first_event(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT, ['contact_limit' => 25]);

        $first = $this->entitlements()->consume(self::STUDENT, Entitlements::TUTOR_CONTACT, 'contact:STU1001:TUT2002', 3);
        $second = $this->entitlements()->consume(self::STUDENT, Entitlements::TUTOR_CONTACT, 'contact:STU1001:TUT2002', 3);

        $this->assertSame($first->id, $second->id, 'The retry is handed the event the first call wrote.');
        $this->assertFalse($second->wasRecentlyCreated, 'The retry wrote nothing of its own.');
        $this->assertSame(3, $subscription->fresh()->contact_used, 'The counter moved by the cost once, not twice.');
        $this->assertMeterDelta('contact:STU1001:TUT2002', -3);
        $this->assertSame(1, MeterEvent::count());
    }

    /**
     * Refunding is the other half of brief 9.3: the credit comes back, the
     * refund is its own append-only row rather than an edit of the consume, and
     * the meter ends where it started.
     */
    public function test_a_refund_gives_the_credit_back_and_leaves_the_meter_where_it_started(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT);
        $before = $this->entitlements()->check(self::STUDENT, Entitlements::AI_MESSAGES)['remaining'];

        $consumed = $this->entitlements()->consume(self::STUDENT, Entitlements::AI_MESSAGES, 'studio:run-1');
        $this->assertSame(1, $subscription->fresh()->ai_credit_used);

        $refund = $this->entitlements()->refund($consumed, 'generation_failed');

        $this->assertSame(0, $subscription->fresh()->ai_credit_used, 'The counter came back down.');
        $this->assertSame($before, $this->entitlements()->check(self::STUDENT, Entitlements::AI_MESSAGES)['remaining']);
        $this->assertMeterDelta('meter-refund:'.$consumed->id, 1);
        $this->assertSame('generation_failed', $refund->reason);
        $this->assertSame(2, MeterEvent::count(), 'The consume row is kept — the log is append-only.');
    }

    /**
     * The paid path of brief 9.3. Every other denial in this file runs on the
     * free branch or on an unknown feature that falls through to it, so without
     * this one the column limit — the number the pricing page actually sells —
     * is never proved to stop anything.
     */
    public function test_a_subscriber_at_their_column_limit_is_denied_and_writes_no_event(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT, ['ai_credit_limit' => 100, 'ai_credit_used' => 100]);

        $meter = $this->entitlements()->check(self::STUDENT, Entitlements::AI_MESSAGES);

        $this->assertSame(100, $meter['used']);
        $this->assertSame(0, $meter['remaining']);
        $this->assertFalse($meter['allow'], 'A spent plan allowance blocks the action.');

        $denied = $this->entitlements()->consume(self::STUDENT, Entitlements::AI_MESSAGES, 'ai:hundred-and-first');

        $this->assertNull($denied, 'The hundred and first message is refused.');
        $this->assertSame(0, MeterEvent::count(), 'A denied consume writes no audit row.');
        $this->assertSame(100, $subscription->fresh()->ai_credit_used, 'And moves no counter.');
    }

    /**
     * A downgrade, or a limit lowered mid-cycle, leaves `used` above `limit`:
     * the counter column keeps its value while the limit column drops. The chip
     * has to show nothing left rather than a negative number, and the meter has
     * to block — a negative remaining would sail through every `>= cost` test
     * in the service.
     */
    public function test_a_downgraded_subscriber_reads_zero_remaining_rather_than_a_negative_number(): void
    {
        $this->makeSubscription(self::STUDENT, ['ai_credit_limit' => 90, 'ai_credit_used' => 100]);

        $meter = $this->entitlements()->check(self::STUDENT, Entitlements::AI_MESSAGES);

        $this->assertSame(100, $meter['used']);
        $this->assertSame(90, $meter['limit']);
        $this->assertSame(0, $meter['remaining'], 'Over the limit reads as nothing left, never as a negative.');
        $this->assertFalse($meter['allow']);
    }

    /**
     * Brief 9.3's first sentence: a consume runs inside the same transaction as
     * the action it pays for, so an action that fails to save costs nothing.
     * consume() opens a transaction of its own, which under a caller's
     * transaction is a savepoint rather than a transaction — whether the
     * caller's rollback takes the charge with it is a fact worth having rather
     * than an assumption.
     *
     * A family charged five credits for a Studio generation whose row never
     * saved has no way to get them back: the subscribed branch of meter() never
     * reads the event log, so there is no trace to refund against.
     */
    public function test_a_consume_inside_an_action_that_fails_costs_nothing(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT);

        try {
            DB::transaction(function (): void {
                $this->entitlements()->consume(self::STUDENT, Entitlements::AI_MESSAGES, 'studio:run-1', 5);

                throw new \RuntimeException('The artefact row would not save.');
            });
            $this->fail('The action was rigged to fail.');
        } catch (\RuntimeException) {
            // The failure the caller's transaction has to unwind.
        }

        $this->assertSame(0, MeterEvent::count(), 'No charge for an action that never happened.');
        $this->assertSame(0, $subscription->fresh()->ai_credit_used, 'The counter is back where it started.');
        $this->assertSame(500, $this->entitlements()->check(self::STUDENT, Entitlements::AI_MESSAGES)['remaining']);
    }

    /**
     * consume() is itself two writes — the counter column the pricing page sells
     * and the audit row that explains it — and brief 9.3 makes the event log the
     * only account of where a credit went. A counter that moved with no row
     * behind it is a charge nobody can explain and nothing can refund, because
     * refund() takes a MeterEvent, so the two have to land together or not
     * at all.
     */
    public function test_a_consume_whose_audit_row_fails_moves_no_counter(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT);

        MeterEvent::creating(static function (): void {
            throw new \RuntimeException('The meter event would not save.');
        });

        try {
            $this->entitlements()->consume(self::STUDENT, Entitlements::AI_MESSAGES, 'studio:run-1', 5);
            $this->fail('The audit row was rigged to fail.');
        } catch (\RuntimeException) {
            // The failure the transaction has to unwind.
        }

        $this->assertSame(0, $subscription->fresh()->ai_credit_used, 'No charge without the row that explains it.');
        $this->assertSame(0, MeterEvent::count());
    }

    /**
     * Every retry test in this file passes on the service's own SELECT because
     * the suite is single-threaded. The unique index is the only thing standing
     * between a double-tapped Open Lead in two browser tabs and two lead views
     * being spent, so its existence is asserted directly, by writing round the
     * service.
     */
    public function test_the_database_itself_refuses_a_second_meter_event_under_a_used_key(): void
    {
        $this->entitlements()->consume(self::FREE_USER, Entitlements::AI_MESSAGES, 'ai:free:1');

        $this->expectException(QueryException::class);

        MeterEvent::create([
            'user_id' => self::FREE_USER,
            'feature' => Entitlements::AI_MESSAGES,
            'delta' => -1,
            'idempotency_key' => 'ai:free:1',
            'reason' => 'consume',
        ]);
    }

    /** A five-credit Studio generation costs five and gives five back. */
    public function test_a_five_credit_action_consumes_five_and_refunds_five(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT);

        $consumed = $this->entitlements()->consume(self::STUDENT, Entitlements::AI_MESSAGES, 'studio:storyboard', 5);
        $this->assertSame(5, $subscription->fresh()->ai_credit_used);
        $this->assertMeterDelta('studio:storyboard', -5);

        $this->entitlements()->refund($consumed);

        $this->assertSame(0, $subscription->fresh()->ai_credit_used);
        $this->assertMeterDelta('meter-refund:'.$consumed->id, 5);
    }

    /**
     * Brief 9.3: a failed action refunds the credit — which has to mean the
     * family can use it again. When a renewal has reset the counter between the
     * consume and the failure the floored read-modify-write in refund() has
     * nowhere to put the credit and drops it on the floor instead.
     */
    public function test_a_refund_after_a_renewal_reset_still_returns_the_credit(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT);
        $consumed = $this->entitlements()->consume(self::STUDENT, Entitlements::AI_MESSAGES, 'studio:run-1', 5);

        // The reset PricingController::createSubscription performs on renewal,
        // written straight to the row because the in-memory model is a cycle behind.
        UserSubscription::where('id', $subscription->id)->update(['ai_credit_used' => 0]);

        $before = $this->entitlements()->check(self::STUDENT, Entitlements::AI_MESSAGES)['remaining'];
        $this->entitlements()->refund($consumed, 'generation_failed');
        $after = $this->entitlements()->check(self::STUDENT, Entitlements::AI_MESSAGES)['remaining'];

        $this->assertSame($before + 5, $after, 'A refunded credit has to be usable again.');
    }

    /**
     * A free account has no counter column behind it, so the append-only event
     * log is the only record of what it spent and the only thing enforcing the
     * allowance. This is correct behaviour and worth pinning on its own.
     */
    public function test_the_free_meter_is_read_from_the_event_log(): void
    {
        MeterEvent::create([
            'user_id' => self::FREE_USER,
            'feature' => Entitlements::AI_MESSAGES,
            'delta' => -10,
            'idempotency_key' => 'seeded:'.self::FREE_USER,
            'reason' => 'consume',
        ]);

        $meter = $this->entitlements()->check(self::FREE_USER, Entitlements::AI_MESSAGES);

        $this->assertSame(10, $meter['used'], 'A free account is metered by the event log alone.');
        $this->assertSame(80, $meter['remaining']);
    }

    /**
     * Brief 9.3: a charge is made once. What a family paid for while subscribed
     * has been paid for; when the subscription lapses mid-month they drop to the
     * free branch, and those same events must not be counted a second time
     * against the free allowance.
     */
    public function test_a_lapsed_subscribers_paid_usage_is_not_recharged_against_the_free_allowance(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT, ['ai_credit_limit' => 500]);

        $this->entitlements()->consume(self::STUDENT, Entitlements::AI_MESSAGES, 'ai:paid-for', 40);

        UserSubscription::where('id', $subscription->id)->update(['end_date' => now()->subDay()]);

        $meter = $this->entitlements()->check(self::STUDENT, Entitlements::AI_MESSAGES);

        $this->assertSame(90, $meter['limit'], 'They are on the free allowance now.');
        $this->assertSame(0, $meter['used'], 'And the messages their plan already paid for are not charged again.');
    }

    // ------------------------------------------------------ boundaries and edges

    /**
     * A subscription that has run out is not an error state. The family drops to
     * the free allowance and the lapsed row is left exactly as it was, so what
     * they spent while paying is still on the record.
     */
    public function test_an_expired_subscription_falls_back_to_the_free_plan_without_losing_its_counters(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT, [
            'end_date' => now()->subDay(),
            'ai_credit_limit' => 500,
            'ai_credit_used' => 40,
        ]);

        $this->assertNull($this->entitlements()->activeSubscription(self::STUDENT));

        $meter = $this->entitlements()->check(self::STUDENT, Entitlements::AI_MESSAGES);

        $this->assertSame(90, $meter['limit'], 'A lapsed subscriber is on the free allowance.');
        $this->assertSame(0, $meter['used']);
        $this->assertSame(40, $subscription->fresh()->ai_credit_used, 'The lapsed row keeps its counters.');
    }

    /** An end date of exactly now is still active — the comparison is inclusive. */
    public function test_a_subscription_ending_exactly_now_is_still_active(): void
    {
        $this->makeSubscription(self::STUDENT, ['end_date' => now(), 'contact_limit' => 25]);

        $this->assertNotNull($this->entitlements()->activeSubscription(self::STUDENT));
        $this->assertSame(25, $this->entitlements()->check(self::STUDENT, Entitlements::TUTOR_CONTACT)['limit']);
    }

    /**
     * A subscription row only counts while it says it is active. A cancelled,
     * pending or refunded row with a future end date must not meter the user or
     * hand out that plan's limits — lapsing is otherwise only ever tested
     * through end_date, which leaves the status column unasserted.
     */
    public function test_a_cancelled_subscription_does_not_meter_the_user(): void
    {
        $this->makeSubscription(self::STUDENT, [
            'status' => 'cancelled',
            'end_date' => now()->addDays(20),
            'ai_credit_limit' => 500,
            'ai_credit_used' => 40,
        ]);

        $this->assertNull($this->entitlements()->activeSubscription(self::STUDENT));

        $meter = $this->entitlements()->check(self::STUDENT, Entitlements::AI_MESSAGES);

        $this->assertSame(90, $meter['limit'], 'A cancelled subscriber is back on the free allowance.');
        $this->assertSame(0, $meter['used'], 'And is metered by the event log, not by the abandoned counter.');
    }

    /**
     * The pricing flow can leave one person holding two active rows, so which
     * one meters them is pinned here rather than left to chance: the newest id
     * wins outright and the older row is abandoned, counters and all.
     */
    public function test_the_newest_active_subscription_is_the_one_that_meters_the_user(): void
    {
        $older = $this->makeSubscription(self::STUDENT, ['contact_limit' => 10, 'contact_used' => 0]);
        $newer = $this->makeSubscription(self::STUDENT, ['contact_limit' => 4, 'contact_used' => 3]);

        $this->assertSame($newer->id, $this->entitlements()->activeSubscription(self::STUDENT)?->id);

        $meter = $this->entitlements()->check(self::STUDENT, Entitlements::TUTOR_CONTACT);
        $this->assertSame(4, $meter['limit']);
        $this->assertSame(1, $meter['remaining']);

        $this->entitlements()->consume(self::STUDENT, Entitlements::TUTOR_CONTACT, 'contact:STU1001:TUT2002');

        $this->assertSame(4, $newer->fresh()->contact_used, 'The newest row is the one charged.');
        $this->assertSame(0, $older->fresh()->contact_used, 'The older row is neither consulted nor charged.');
    }

    /**
     * A feature key nobody has mapped must fail closed. Falling through to
     * "unmetered" would hand out a free unlimited feature the day someone
     * mistypes a constant.
     */
    public function test_an_unknown_feature_is_denied_rather_than_unlimited(): void
    {
        $this->makeSubscription(self::STUDENT);

        $meter = $this->entitlements()->check(self::STUDENT, 'reports.export');

        $this->assertSame(0, $meter['limit'], 'An unmapped feature has no allowance.');
        $this->assertSame(0, $meter['remaining']);
        $this->assertFalse($meter['allow']);
        $this->assertNull($meter['upgrade_plan'], 'There is no plan to name for a feature no plan sells.');

        $this->assertNull($this->entitlements()->consume(self::STUDENT, 'reports.export', 'export:1'));
        $this->assertSame(0, MeterEvent::count());
    }

    /**
     * Brief 9.3 makes a null limit mean unlimited. It is not representable: the
     * limit is cast to int on the way out and the column cannot hold a null on
     * the way in, so the one value that is supposed to mean "no ceiling" means
     * "a ceiling of zero" instead.
     */
    public function test_a_null_limit_means_unlimited(): void
    {
        $this->makeSubscription(self::STUDENT, ['ai_credit_limit' => null]);

        $meter = $this->entitlements()->check(self::STUDENT, Entitlements::AI_MESSAGES);

        $this->assertNull($meter['limit'], 'A null limit is the unlimited plan.');
        $this->assertTrue($meter['allow']);
        $this->assertNotNull($this->entitlements()->consume(self::STUDENT, Entitlements::AI_MESSAGES, 'ai:unlimited', 10000));
    }

    /**
     * Brief 9.1 sells the free AI allowance as ninety a month capped at three a
     * day. Only the monthly half of that exists, so a free account can burn the
     * whole ninety in one afternoon.
     */
    public function test_the_free_ai_allowance_is_capped_at_three_a_day(): void
    {
        foreach (range(1, 3) as $i) {
            $this->assertNotNull($this->entitlements()->consume(self::FREE_USER, Entitlements::AI_MESSAGES, 'ai:day1:'.$i));
        }

        $this->assertNull(
            $this->entitlements()->consume(self::FREE_USER, Entitlements::AI_MESSAGES, 'ai:day1:4'),
            'The fourth message of the day is refused even though the month still has 87 left.',
        );
    }

    /**
     * Brief 2.1 non-negotiable 2: metered writes are auditable, which means a
     * consume returns the charge it made. It returns whatever row holds the key
     * without checking that the row is a charge at all.
     */
    public function test_a_consume_never_hands_back_a_credit_as_if_it_were_a_charge(): void
    {
        $this->makeSubscription(self::STUDENT);
        $consumed = $this->entitlements()->consume(self::STUDENT, Entitlements::AI_MESSAGES, 'studio:run-1');
        $this->entitlements()->refund($consumed);

        $replay = $this->entitlements()->consume(self::STUDENT, Entitlements::AI_MESSAGES, 'refund:'.$consumed->id);

        $this->assertLessThan(0, $replay->delta, 'A consume must return a charge, never a credit.');
    }

    /**
     * Brief 9.3: a refund gives back a credit that was charged. Handing refund()
     * a refund is not a charge, and has to be refused — otherwise the append-only
     * log that exists to explain where credits went becomes the instrument that
     * mints them.
     */
    public function test_refunding_a_refund_is_refused(): void
    {
        $this->makeSubscription(self::STUDENT, ['ai_credit_used' => 50]);

        $consumed = $this->entitlements()->consume(self::STUDENT, Entitlements::AI_MESSAGES, 'studio:run-1', 5);
        $refund = $this->entitlements()->refund($consumed, 'generation_failed');

        $this->expectException(\InvalidArgumentException::class);

        $this->entitlements()->refund($refund);
    }

    /**
     * Brief 9.3 makes the refund mandatory, so it does not get to be the one
     * money write in the module that is not idempotent. Refunds are triggered by
     * failure handlers, queue retries and webhook redeliveries — precisely the
     * code paths that run twice.
     */
    public function test_a_retried_refund_returns_the_credit_it_already_gave_back(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT);
        $consumed = $this->entitlements()->consume(self::STUDENT, Entitlements::AI_MESSAGES, 'studio:run-1', 5);

        $first = $this->entitlements()->refund($consumed, 'generation_failed');
        $second = $this->entitlements()->refund($consumed, 'generation_failed');

        $this->assertSame($first->id, $second->id, 'The retry is handed the credit the first call wrote.');
        $this->assertSame(2, MeterEvent::count(), 'One consume and one refund.');
        $this->assertSame(0, $subscription->fresh()->ai_credit_used, 'One credit back, not two.');
    }

    /**
     * Brief 9.3 and 2.1: a consume is a charge, so its cost is a positive whole
     * number. This is the exact mirror of the two Ledger::post validation gaps
     * this suite already names and skips — except that on the meter side a bad
     * cost does not merely record nonsense, it hands out credits.
     */
    public function test_consume_refuses_a_cost_that_is_not_a_positive_integer(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT);

        try {
            $this->entitlements()->consume(self::STUDENT, Entitlements::AI_MESSAGES, 'ai:negative', -5);
            $this->fail('A negative cost is not a charge.');
        } catch (\InvalidArgumentException) {
            // The guard the brief asks for.
        }

        $this->assertSame(0, $subscription->fresh()->ai_credit_used, 'A metering call must never hand out credits.');
        $this->assertSame(0, MeterEvent::count());
    }

    /**
     * Brief 9.1 and 9.3: the free allowance is a ceiling, and a ceiling that two
     * parallel requests can walk through is not one. The interleaving is forced
     * here rather than hoped for — the racing worker's row is inserted between
     * this call's read of the meter and its own write.
     */
    public function test_two_requests_spending_the_last_free_credit_spend_it_once(): void
    {
        $this->entitlements()->consume(self::FREE_USER, Entitlements::AI_MESSAGES, 'ai:first-eighty-nine', 89);

        MeterEvent::creating(function (MeterEvent $event): void {
            if ($event->idempotency_key !== 'ai:ours') {
                return;
            }

            // The other worker, committing between our read and our write.
            DB::table('nxt_meter_events')->insert([
                'id' => (string) Str::ulid(),
                'user_id' => self::FREE_USER,
                'feature' => Entitlements::AI_MESSAGES,
                'delta' => -1,
                'idempotency_key' => 'ai:theirs',
                'reason' => 'consume',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        $this->entitlements()->consume(self::FREE_USER, Entitlements::AI_MESSAGES, 'ai:ours');

        $this->assertSame(90, $this->entitlements()->check(self::FREE_USER, Entitlements::AI_MESSAGES)['used'], 'Ninety is the ceiling, not a suggestion.');
    }

    /**
     * Brief 9.3: unused credits do not roll over. The rule is enforced on the
     * free branch by the calendar-month window; on the subscribed branch the
     * counter has to be reset when the period rolls, and 400 unused credits must
     * not become 900.
     */
    public function test_a_renewed_subscription_starts_the_new_period_at_zero(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT, ['ai_credit_limit' => 500, 'ai_credit_used' => 100]);

        $this->entitlements()->renew($subscription);

        $meter = $this->entitlements()->check(self::STUDENT, Entitlements::AI_MESSAGES);

        $this->assertSame(0, $meter['used'], 'A new period starts at nothing spent.');
        $this->assertSame(500, $meter['remaining'], 'And 400 unused credits do not become 900.');
    }

    /**
     * Brief 9.1 and 9.3: ai.messages is the headline meter, and this is the
     * call site. A gate that works perfectly with nothing standing behind it is
     * the most expensive kind of green there is, so this reaches the real
     * endpoint — with the model faked, because a metering test must not make an
     * OpenAI call.
     */
    public function test_sending_an_ai_message_consumes_an_ai_credit(): void
    {
        $this->fakeAi()->pushText('A quadratic equation has the form ax^2 + bx + c = 0.');

        $this->assertSame(0, $this->entitlements()->check(self::FREE_USER, Entitlements::AI_MESSAGES)['used']);

        $this->withSession(['userid' => self::FREE_USER])
            ->postJson('/nxt-ai/chat', ['message' => 'Explain quadratic equations.'])
            ->assertOk();

        $this->assertSame(1, $this->entitlements()->check(self::FREE_USER, Entitlements::AI_MESSAGES)['used'], 'One message, one credit.');
    }

    /**
     * Brief 9.3: the credit comes back when the generation fails. The failure
     * handler is the path that runs on the worst day, so it is the one worth
     * pinning at the call site rather than only on the service.
     */
    public function test_a_failed_ai_generation_gives_the_credit_back(): void
    {
        $this->fakeAi()->pushFailure('upstream_error', 503);

        $this->withSession(['userid' => self::FREE_USER])
            ->postJson('/nxt-ai/chat', ['message' => 'Explain quadratic equations.'])
            ->assertStatus(503);

        $this->assertSame(
            0,
            $this->entitlements()->check(self::FREE_USER, Entitlements::AI_MESSAGES)['used'],
            'A failed generation costs the family nothing.',
        );
    }

    /**
     * Brief 9.3: the meter blocks, and the block names the upgrade. Nothing in
     * production consumed ai.messages, so this prompt could never fire.
     */
    public function test_an_ai_message_past_the_allowance_is_refused_at_the_endpoint(): void
    {
        $this->fakeAi()->pushText('Never reached.');

        MeterEvent::create([
            'user_id' => self::FREE_USER,
            'feature' => Entitlements::AI_MESSAGES,
            'delta' => -90,
            'idempotency_key' => 'ai:the-whole-month',
            'reason' => 'consume',
        ]);

        $this->withSession(['userid' => self::FREE_USER])
            ->postJson('/nxt-ai/chat', ['message' => 'One more question.'])
            ->assertStatus(402)
            ->assertJson(['success' => false]);

        $this->assertSame(0, NxtAiMessage::count(), 'A refused message is never sent to the model.');
    }

    private function fakeAi(): FakeOpenAiChat
    {
        $fake = new FakeOpenAiChat();
        $this->app->instance(OpenAiChat::class, $fake);

        return $fake;
    }

    // -------------------------------------------------------- history and chip

    /**
     * The history screen answers "where did my credits go", so the newest
     * movement is at the top and a refund is as visible as the charge it undid.
     */
    public function test_history_returns_consumes_and_refunds_newest_first(): void
    {
        $this->makeSubscription(self::STUDENT);

        $consumed = $this->entitlements()->consume(self::STUDENT, Entitlements::AI_MESSAGES, 'studio:run-1');

        Carbon::setTestNow(Carbon::parse(self::NOW)->addMinute());
        $this->entitlements()->consume(self::STUDENT, Entitlements::TUTOR_CONTACT, 'contact:STU1001:TUT2002');

        Carbon::setTestNow(Carbon::parse(self::NOW)->addMinutes(2));
        $this->entitlements()->refund($consumed, 'generation_failed');

        $history = $this->entitlements()->history(self::STUDENT);

        $this->assertCount(3, $history);
        $this->assertSame([1, -1, -1], array_column($history, 'delta'), 'Newest movement first.');
        $this->assertSame(
            [Entitlements::AI_MESSAGES, Entitlements::TUTOR_CONTACT, Entitlements::AI_MESSAGES],
            array_column($history, 'feature'),
        );
        $this->assertSame('generation_failed', $history[0]['reason']);
        $this->assertSame('AI credits', $history[0]['label'], 'The row is labelled the way the chip labels it.');
    }

    /** A long-lived account must not hand the history screen its whole life. */
    public function test_history_respects_the_limit_it_is_given(): void
    {
        $this->makeSubscription(self::STUDENT);

        foreach (range(1, 4) as $i) {
            Carbon::setTestNow(Carbon::parse(self::NOW)->addMinutes($i));
            $this->entitlements()->consume(self::STUDENT, Entitlements::AI_MESSAGES, 'studio:run-'.$i);
        }

        $history = $this->entitlements()->history(self::STUDENT, 2);

        $this->assertCount(2, $history);
        $this->assertSame(
            ['studio:run-4', 'studio:run-3'],
            array_map(fn (array $row): string => MeterEvent::find($row['id'])->idempotency_key, $history),
            'The two newest, not the two oldest.',
        );
    }

    /** The family chip shows what a family spends: AI credits and tutor contacts. */
    public function test_a_student_snapshot_carries_the_ai_and_contact_meters(): void
    {
        $snapshot = $this->entitlements()->snapshot($this->identity(self::STUDENT));

        $this->assertSame(
            [Entitlements::AI_MESSAGES, Entitlements::TUTOR_CONTACT],
            array_column($snapshot['meters'], 'feature'),
        );
        $this->assertSame('Student Free', $snapshot['plan']['name']);
        $this->assertSame('free', $snapshot['plan']['status']);
        $this->assertSame(90, $snapshot['meters'][0]['limit']);
    }

    /** A tutor's chip shows lead views, which a family never sees. */
    public function test_a_tutor_snapshot_carries_the_lead_and_ai_meters(): void
    {
        $snapshot = $this->entitlements()->snapshot($this->identity(self::TUTOR, 'tutor'));

        $this->assertSame(
            [Entitlements::LEAD_VIEW, Entitlements::AI_MESSAGES],
            array_column($snapshot['meters'], 'feature'),
        );
        $this->assertSame('Tutor Free', $snapshot['plan']['name']);
        $this->assertSame(3, $snapshot['meters'][0]['limit'], 'Three free lead views.');
    }

    /** With a plan behind them the chip shows the plan they are paying for. */
    public function test_a_subscribed_snapshot_names_the_plan_and_its_limits(): void
    {
        $plan = $this->makePlan(['plan_name' => 'Student Plus', 'price' => 399.00, 'contact_limit' => 40]);
        $this->makeSubscription(self::STUDENT, ['plan_id' => $plan->id, 'contact_limit' => 40, 'contact_used' => 7]);

        $snapshot = $this->entitlements()->snapshot($this->identity(self::STUDENT));

        $this->assertSame('Student Plus', $snapshot['plan']['name']);
        $this->assertSame(399.00, $snapshot['plan']['price']);
        $this->assertSame('active', $snapshot['plan']['status']);
        $this->assertSame(40, $snapshot['meters'][1]['limit']);
        $this->assertSame(33, $snapshot['meters'][1]['remaining']);
    }
}
