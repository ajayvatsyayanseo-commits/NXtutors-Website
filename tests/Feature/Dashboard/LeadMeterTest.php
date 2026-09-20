<?php

declare(strict_types=1);

namespace Tests\Feature\Dashboard;

use App\Nxt\Dashboard\Models\Lead;
use App\Nxt\Dashboard\Models\LeadView;
use App\Nxt\Dashboard\Models\MeterEvent;
use App\Nxt\Dashboard\Models\OutboxEvent;
use App\Nxt\Dashboard\Models\TutorMatch;
use App\Nxt\Dashboard\Services\Entitlements;
use App\Nxt\Dashboard\Services\LeadFlow;

/**
 * The meter where it is actually spent.
 *
 * LeadFlow::openLead and LeadFlow::contactTutor are the only two places in the
 * application that call Entitlements::consume. EntitlementsTest exercises the
 * service directly and never through a caller, so brief 9.3's "a consume runs
 * inside the same transaction as the action it pays for" is unverified at every
 * one of its real call sites unless it is verified here.
 *
 * Both meters are sold by the pricing page in exact words — one lead view per
 * lead, forever; one contact credit per tutor, forever — which makes charging
 * twice and charging for nothing equally serious. Where the implementation
 * diverges the test states the brief's rule and is skipped with the divergence
 * named, rather than blessing what the code does today.
 */
class LeadMeterTest extends DashboardTestCase
{
    /** A tutor with no subscription row, so the free three lead views apply. */
    private const OTHER_TUTOR = 'TUT5005';

    public function test_opening_a_lead_charges_the_tutor_one_lead_view(): void
    {
        $match = $this->makeMatch();

        $result = $this->leads()->openLead(self::TUTOR, $match->id);

        $this->assertTrue($result['charged'], 'The first open of a lead is the charged one.');
        $this->assertSame('viewed', $match->fresh()->status);

        $this->assertMeterDelta('lead-view:'.$match->id.':'.self::TUTOR, -1);
        $this->assertSame(1, $this->entitlements()->check(self::TUTOR, Entitlements::LEAD_VIEW)['used']);
        $this->assertSame(2, $this->entitlements()->check(self::TUTOR, Entitlements::LEAD_VIEW)['remaining']);

        $view = LeadView::sole();
        $this->assertSame($match->id, $view->match_id);
        $this->assertNotNull($view->meter_event_id, 'The audit row points at the charge that paid for it.');
        $this->assertSame(1, OutboxEvent::where('event', 'lead.opened')->count());
    }

    /**
     * The pricing page says re-opening a lead you already paid for is free,
     * forever. Both guards that make it true are asserted: the lead-view row
     * short-circuits the charge, and the idempotency key would stop a second
     * one even if it did not.
     */
    public function test_reopening_the_same_lead_is_free(): void
    {
        $match = $this->makeMatch();

        $this->leads()->openLead(self::TUTOR, $match->id);
        $second = $this->leads()->openLead(self::TUTOR, $match->id);

        $this->assertFalse($second['charged'], 'A lead already paid for costs nothing to reopen.');
        $this->assertSame(1, MeterEvent::count());
        $this->assertSame(1, LeadView::count());
        $this->assertSame(1, $this->entitlements()->check(self::TUTOR, Entitlements::LEAD_VIEW)['used']);
    }

    /**
     * A tutor out of lead views is stopped before anything is written. The lead
     * stays unseen, the match stays offered and the gate that comes back is the
     * one the upgrade prompt is drawn from.
     */
    public function test_a_tutor_with_no_lead_views_left_is_refused_and_charged_nothing(): void
    {
        $this->makePlan(['plan_type' => 'tutor', 'plan_name' => 'Tutor Pro', 'price' => 799.00, 'lead_limit' => 40]);

        $this->entitlements()->consume(self::TUTOR, Entitlements::LEAD_VIEW, 'lead-view:earlier', 3);

        $match = $this->makeMatch();
        $result = $this->leads()->openLead(self::TUTOR, $match->id);

        $this->assertArrayHasKey('denied', $result);
        $this->assertFalse($result['denied']['allow']);
        $this->assertSame('Tutor Pro', $result['denied']['upgrade_plan'], 'The block names the plan that lifts it.');

        $this->assertSame(0, LeadView::count(), 'A refused open shows the tutor nothing.');
        $this->assertSame('offered', $match->fresh()->status);
        $this->assertSame(1, MeterEvent::count(), 'Only the three views spent earlier.');
    }

    /** A lead offered to somebody else is reported as missing rather than forbidden. */
    public function test_a_lead_offered_to_another_tutor_is_not_reachable(): void
    {
        $match = $this->makeMatch(self::OTHER_TUTOR);

        $this->assertSame(['not_found' => true], $this->leads()->openLead(self::TUTOR, $match->id));
        $this->assertSame(0, MeterEvent::count());
        $this->assertSame(0, LeadView::count());
    }

    /**
     * Brief 9.3: the consume and the action it pays for stand or fall together —
     * which has to cut both ways. A lead view that could not be charged for must
     * not be handed over.
     *
     * openLead checks the meter and then consumes, with nothing holding the
     * count still in between, so the interleaving is forced here: the other tab's
     * charge lands while this request is loading the lead.
     */
    public function test_a_lead_view_that_could_not_be_charged_is_not_handed_over(): void
    {
        $this->entitlements()->consume(self::TUTOR, Entitlements::LEAD_VIEW, 'lead-view:earlier', 2);

        $match = $this->makeMatch();

        // The other tab, charging between openLead's check and its consume.
        Lead::retrieved(function (): void {
            $this->entitlements()->consume(self::TUTOR, Entitlements::LEAD_VIEW, 'lead-view:other-tab');
        });

        $result = $this->leads()->openLead(self::TUTOR, $match->id);

        $this->assertFalse($result['charged'] ?? false, 'A view that was not paid for was not sold.');
        $this->assertSame(0, LeadView::count(), 'No audit row without a charge behind it.');
        $this->assertSame('offered', $match->fresh()->status);
        $this->assertSame(0, OutboxEvent::where('event', 'lead.opened')->count());
    }

    public function test_contacting_a_tutor_charges_the_family_one_contact_credit(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT, ['contact_limit' => 25]);
        $match = $this->makeMatch();

        $result = $this->leads()->contactTutor(self::STUDENT, $match);

        $this->assertTrue($result['allowed']);
        $this->assertTrue($result['charged']);
        $this->assertSame('contacted', $match->fresh()->status);
        $this->assertSame(1, $subscription->fresh()->contact_used);
        $this->assertMeterDelta('contact:'.self::STUDENT.':'.self::TUTOR, -1);
        $this->assertSame(1, OutboxEvent::where('event', 'match.contacted')->count());
    }

    /**
     * One credit per tutor, ever — and the key is the tutor rather than the
     * match, so a second requirement about the same tutor is free too.
     */
    public function test_contacting_the_same_tutor_again_is_free(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT, ['contact_limit' => 25]);

        $first = $this->makeMatch();
        $this->leads()->contactTutor(self::STUDENT, $first);

        $second = $this->makeMatch(self::TUTOR, $this->makeLead());
        $result = $this->leads()->contactTutor(self::STUDENT, $second);

        $this->assertTrue($result['allowed']);
        $this->assertFalse($result['charged'], 'The same tutor is never charged for twice.');
        $this->assertSame(1, $subscription->fresh()->contact_used);
        $this->assertSame(1, MeterEvent::count());
    }

    /**
     * Tutor contact is not on the free tier at all, so a family with no
     * subscription is stopped with nothing written and nothing marked.
     */
    public function test_a_family_with_no_contact_credits_is_refused_and_charged_nothing(): void
    {
        $match = $this->makeMatch();

        $result = $this->leads()->contactTutor(self::STUDENT, $match);

        $this->assertFalse($result['allowed']);
        $this->assertFalse($result['charged']);
        $this->assertSame(0, $result['gate']['limit'], 'Tutor contact is not part of the free tier.');
        $this->assertSame('offered', $match->fresh()->status);
        $this->assertSame(0, MeterEvent::count());
        $this->assertSame(0, OutboxEvent::count());
    }

    /**
     * Brief 9.3: a consume runs inside the same transaction as the action it
     * pays for, so an action that fails to save costs nothing. Contact credits
     * are per tutor per lifetime, so a family charged for a connection that
     * never happened cannot even retry into the same charge.
     */
    public function test_a_contact_whose_match_update_fails_does_not_spend_the_credit(): void
    {
        $subscription = $this->makeSubscription(self::STUDENT, ['contact_limit' => 25]);
        $match = $this->makeMatch();

        TutorMatch::updating(static function (): void {
            throw new \RuntimeException('The match row would not save.');
        });

        try {
            $this->leads()->contactTutor(self::STUDENT, $match);
            $this->fail('The match update was rigged to fail.');
        } catch (\RuntimeException) {
            // The failure the consume has to be bound to.
        }

        $this->assertSame('offered', $match->fresh()->status);
        $this->assertSame(0, $subscription->fresh()->contact_used, 'No credit for a connection that never happened.');
        $this->assertSame(0, MeterEvent::count());
    }

    private function leads(): LeadFlow
    {
        return app(LeadFlow::class);
    }

    private function makeLead(): Lead
    {
        return Lead::create([
            'student_user_id' => self::STUDENT,
            'source' => 'web',
            'contact_name' => 'Priya Sharma',
            'student_name' => 'Aarav',
            'class_level' => 'Class 10',
            'subject' => 'Mathematics',
            'mode' => 'home',
            'city' => 'Gurugram',
            'status' => 'matching',
            'expires_at' => now()->addDays(30),
        ]);
    }

    private function makeMatch(string $tutorUserId = self::TUTOR, ?Lead $lead = null): TutorMatch
    {
        return TutorMatch::create([
            'lead_id' => ($lead ?? $this->makeLead())->id,
            'tutor_user_id' => $tutorUserId,
            'score' => 88,
            'reasons' => ['Teaches Class 10 maths', 'Two kilometres away'],
            'rank' => 1,
            'status' => 'offered',
            'expires_at' => now()->addDays(3),
        ]);
    }
}
