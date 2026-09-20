<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Services;

use App\Models\Register;
use App\Nxt\Dashboard\Models\Lead;
use App\Nxt\Dashboard\Models\LeadReply;
use App\Nxt\Dashboard\Models\LeadView;
use App\Nxt\Dashboard\Models\OutboxEvent;
use App\Nxt\Dashboard\Models\Quote;
use App\Nxt\Dashboard\Models\TutorMatch;
use App\Nxt\Dashboard\Support\CorrelationId;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

/**
 * Leads, matches and the two meters that sit on them.
 *
 * The rules the meters have to obey are unusually exact, because they are what
 * the pricing page sells:
 *
 *  - opening a lead costs a tutor exactly one lead view, once. Re-opening the
 *    same lead is free, forever;
 *  - contacting a tutor costs a family exactly one contact credit per tutor,
 *    once, no matter how many messages follow.
 *
 * Both are enforced by a uniqueness row plus an idempotency key on the meter
 * event, so neither a double tap nor a retry can charge twice.
 */
class LeadFlow
{
    public function __construct(private readonly Entitlements $entitlements)
    {
    }

    /**
     * Open a lead as a tutor, spending a lead view if this is the first time.
     *
     * A lead belonging to another tutor is reported as missing, not as
     * forbidden: "forbidden" would confirm that this lead exists, which is a
     * competitor telling a tutor that work is out there.
     *
     * @return array{lead:Lead,match:TutorMatch,charged:bool}|array{denied:array}|array{not_found:true}
     */
    public function openLead(string $tutorUserId, string $matchId): array
    {
        $match = TutorMatch::where('id', $matchId)->where('tutor_user_id', $tutorUserId)->first();

        if (! $match) {
            return ['not_found' => true];
        }

        $alreadyViewed = LeadView::where('match_id', $match->id)
            ->where('tutor_user_id', $tutorUserId)
            ->exists();

        if (! $alreadyViewed) {
            $gate = $this->entitlements->check($tutorUserId, Entitlements::LEAD_VIEW);

            if (! $gate['allow']) {
                return ['denied' => $gate];
            }
        }

        $lead = Lead::findOrFail($match->lead_id);

        if ($alreadyViewed) {
            return ['lead' => $lead, 'match' => $match, 'charged' => false];
        }

        // The check above is advisory — another tab can spend the last view
        // between it and the charge — so the consume inside the transaction is
        // the decision, and a view that could not be charged for is not handed
        // over. Failing open here is unlimited lead harvesting on the free plan.
        $denied = null;

        DB::transaction(function () use ($tutorUserId, $match, &$denied): void {
            $event = $this->entitlements->consume(
                $tutorUserId,
                Entitlements::LEAD_VIEW,
                'lead-view:'.$match->id.':'.$tutorUserId,
                referenceType: 'match',
                referenceId: $match->id,
            );

            if (! $event) {
                $denied = $this->entitlements->check($tutorUserId, Entitlements::LEAD_VIEW);

                return;
            }

            LeadView::create([
                'match_id' => $match->id,
                'lead_id' => $match->lead_id,
                'tutor_user_id' => $tutorUserId,
                'meter_event_id' => $event->id,
                'viewed_at' => now(),
            ]);

            if ($match->status === 'offered') {
                $match->update(['status' => 'viewed']);
            }

            $this->emit('lead.opened', ['match_id' => $match->id, 'lead_id' => $match->lead_id, 'tutor_user_id' => $tutorUserId]);
        });

        if ($denied !== null) {
            return ['denied' => $denied];
        }

        return ['lead' => $lead, 'match' => $match->fresh(), 'charged' => true];
    }

    /**
     * Reply to a lead with a quote. The reply is delivered through the platform,
     * never from the tutor's own number: that is what keeps the contact meter
     * enforceable and the thread available if the booking is later disputed.
     */
    public function reply(string $tutorUserId, TutorMatch $match, string $body, ?int $rateP=null, array $packages = [], bool $aiDrafted = false): LeadReply
    {
        $viewed = LeadView::where('match_id', $match->id)->where('tutor_user_id', $tutorUserId)->exists();

        if (! $viewed) {
            throw ValidationException::withMessages(['match' => 'Open the lead before replying to it.']);
        }

        return DB::transaction(function () use ($tutorUserId, $match, $body, $rateP, $packages, $aiDrafted) {
            $reply = LeadReply::create([
                'lead_id' => $match->lead_id,
                'match_id' => $match->id,
                'tutor_user_id' => $tutorUserId,
                'body' => $body,
                'ai_drafted' => $aiDrafted,
                'delivery_status' => 'sent',
                'sent_at' => now(),
            ]);

            if ($rateP !== null) {
                // A changed quote does not overwrite the old one. The family is
                // entitled to see both, so the previous row is marked superseded.
                Quote::where('lead_id', $match->lead_id)
                    ->where('tutor_user_id', $tutorUserId)
                    ->update(['superseded' => true]);

                Quote::create([
                    'lead_id' => $match->lead_id,
                    'tutor_user_id' => $tutorUserId,
                    'rate_paise' => $rateP,
                    'packages' => $packages ?: $this->defaultPackages($rateP),
                ]);
            }

            $match->update(['status' => 'contacted']);
            Lead::where('id', $match->lead_id)->where('status', 'matching')->update(['status' => 'matches_ready']);

            $this->emit('lead.reply_sent', [
                'lead_id' => $match->lead_id,
                'match_id' => $match->id,
                'tutor_user_id' => $tutorUserId,
                'quoted' => $rateP !== null,
            ]);

            return $reply;
        });
    }

    /**
     * Decline with a structured reason. "Budget too low" is deliberately not a
     * hard decline: it prompts a counter-offer instead, because that is the one
     * decline reason a quote can actually answer.
     */
    public function decline(string $tutorUserId, TutorMatch $match, string $reason): TutorMatch
    {
        $allowed = ['not_my_area', 'slot_clash', 'budget_too_low', 'class_not_taught', 'other'];

        if (! in_array($reason, $allowed, true)) {
            throw ValidationException::withMessages(['reason' => 'Pick one of the listed reasons.']);
        }

        $match->update(['status' => 'rejected', 'reject_reason' => $reason]);

        $this->emit('lead.declined', [
            'lead_id' => $match->lead_id,
            'match_id' => $match->id,
            'tutor_user_id' => $tutorUserId,
            'reason' => $reason,
        ]);

        return $match->fresh();
    }

    /**
     * A family contacting a tutor. One credit per tutor, ever — the second and
     * every later message on the same match is free.
     *
     * @return array{allowed:bool,charged:bool,gate?:array}
     */
    public function contactTutor(string $studentUserId, TutorMatch $match): array
    {
        $alreadyContacted = $match->status === 'contacted'
            || \App\Nxt\Dashboard\Models\MeterEvent::where('idempotency_key', $this->contactKey($studentUserId, $match))->exists();

        if ($alreadyContacted) {
            return ['allowed' => true, 'charged' => false];
        }

        $gate = $this->entitlements->check($studentUserId, Entitlements::TUTOR_CONTACT);

        if (! $gate['allow']) {
            return ['allowed' => false, 'charged' => false, 'gate' => $gate];
        }

        // The credit and the connection it pays for stand or fall together.
        // Contact credits are one per tutor for life, so a family charged for a
        // connection that never happened cannot retry into the same charge.
        return DB::transaction(function () use ($studentUserId, $match) {
            $event = $this->entitlements->consume(
                $studentUserId,
                Entitlements::TUTOR_CONTACT,
                $this->contactKey($studentUserId, $match),
                referenceType: 'match',
                referenceId: $match->id,
            );

            if (! $event) {
                return [
                    'allowed' => false,
                    'charged' => false,
                    'gate' => $this->entitlements->check($studentUserId, Entitlements::TUTOR_CONTACT),
                ];
            }

            $match->update(['status' => 'contacted']);

            $this->emit('match.contacted', [
                'match_id' => $match->id,
                'lead_id' => $match->lead_id,
                'student_user_id' => $studentUserId,
                'tutor_user_id' => $match->tutor_user_id,
            ]);

            return ['allowed' => true, 'charged' => true];
        });
    }

    /**
     * Reject a match with a reason chip. The engine is expected to produce a
     * replacement; until it does, the tracker has to explain the delay rather
     * than leave the family looking at one fewer card with no reason given.
     */
    public function rejectMatch(TutorMatch $match, string $reason): TutorMatch
    {
        $match->update(['status' => 'rejected', 'reject_reason' => $reason]);

        $this->emit('match.rejected', [
            'match_id' => $match->id,
            'lead_id' => $match->lead_id,
            'reason' => $reason,
        ]);

        return $match->fresh();
    }

    /**
     * Create a requirement. Sources differ — the web form, a WhatsApp thread the
     * Lead Intake Agent already holds, or a legacy enquiry row — but everything
     * downstream reads one shape.
     */
    public function createLead(array $attributes, string $source = 'web'): Lead
    {
        return DB::transaction(function () use ($attributes, $source) {
            $lead = Lead::create($attributes + [
                'source' => $source,
                'status' => 'received',
                'expires_at' => now()->addDays(30),
            ]);

            $this->emit('lead.created', [
                'lead_id' => $lead->id,
                'student_user_id' => $lead->student_user_id,
                'subject' => $lead->subject,
                'class_level' => $lead->class_level,
                'city' => $lead->city,
            ]);

            return $lead;
        });
    }

    /** The package sizes a quote offers, from the brief's 8/12/16 ladder. */
    private function defaultPackages(int $ratePaise): array
    {
        return array_map(
            fn (int $count): array => [
                'sessions' => $count,
                'amount_paise' => $ratePaise * $count,
            ],
            [8, 12, 16],
        );
    }

    private function contactKey(string $studentUserId, TutorMatch $match): string
    {
        // Keyed on the tutor, not the match: contacting the same tutor about a
        // second requirement should not cost a second credit.
        return 'contact:'.$studentUserId.':'.$match->tutor_user_id;
    }

    private function emit(string $event, array $payload): void
    {
        OutboxEvent::create([
            'topic' => 'leads',
            'event' => $event,
            'payload' => $payload,
            'correlation_id' => CorrelationId::current(),
        ]);
    }
}
