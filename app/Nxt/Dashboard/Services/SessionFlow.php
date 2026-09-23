<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Services;

use App\Nxt\Dashboard\Models\AppNotification;
use App\Nxt\Dashboard\Models\AttendanceEvent;
use App\Nxt\Dashboard\Models\Dispute;
use App\Nxt\Dashboard\Models\Homework;
use App\Nxt\Dashboard\Models\OutboxEvent;
use App\Nxt\Dashboard\Models\Package;
use App\Nxt\Dashboard\Models\TutoringSession;
use App\Nxt\Dashboard\Support\CorrelationId;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

/**
 * The session state machine, and the only place it is allowed to move.
 *
 *   scheduled -> checked_in -> checked_out -> confirmed
 *      |             |              \-> disputed -> confirmed | cancelled
 *      \-> cancelled \-> cancelled       (ops resolves)
 *      \-> no_show
 *
 * Each transition writes an attendance event with the actor, the method and,
 * for home tuition, where the tutor was standing. Those events are what the
 * parent sees verbatim, what the reliability score is computed from and what
 * the ledger settles against, so none of them may be skipped — which is why
 * every transition lives here rather than in a controller.
 *
 * Every transition also re-reads the row under a lock before it looks at the
 * status. Checking the status of the model the caller happens to be holding
 * made each guard advisory: two overlapping scheduler runs, or a parent
 * double-tapping Confirm across two workers, both passed a guard that had
 * already been passed, and the money survived only because the ledger keys did.
 */
class SessionFlow
{
    public function __construct(
        private readonly Ledger $ledger,
        private readonly CheckInProof $proof,
    ) {
    }

    /**
     * Schedule a class against a funded package.
     *
     * Four guards: the package must be live and the class must fall before it
     * expires; a session may not be scheduled past the package balance; two
     * classes with the same student may not overlap; and the family's wallet
     * has to be able to fund the hold the class takes.
     *
     * `$scheduleKey` makes an agent's booking safe to retry (a unique column);
     * the tutor's own screen passes none.
     */
    public function schedule(
        Package $package,
        \DateTimeInterface $startsAt,
        int $plannedMin,
        string $mode,
        ?string $address = null,
        ?string $meetingUrl = null,
        ?string $subject = null,
        ?string $scheduleKey = null,
    ): TutoringSession {
        return DB::transaction(function () use ($package, $startsAt, $plannedMin, $mode, $address, $meetingUrl, $subject, $scheduleKey) {
            // Re-read under a lock, for the same reason every transition does:
            // two bookings racing for the last class on a package both passed a
            // balance check made against the model the caller was holding.
            $package = Package::whereKey($package->id)->lockForUpdate()->first() ?? $package;
            $this->assertBookable($package, $startsAt);
            $this->assertNoOverlap($package->student_user_id, $package->tutor_user_id, $startsAt, $plannedMin);
            $this->ledger->assertCanHold($package->student_user_id, $package->rate_paise);

            $commission = (int) round($package->rate_paise * $package->commission_pct / 100);

            $session = TutoringSession::create([
                'package_id' => $package->id,
                'student_user_id' => $package->student_user_id,
                'tutor_user_id' => $package->tutor_user_id,
                'subject' => $subject ?? $package->subject,
                'type' => 'regular',
                'mode' => $mode,
                'address' => $address,
                'meeting_url' => $meetingUrl,
                'starts_at' => $startsAt,
                'planned_min' => $plannedMin,
                'status' => 'scheduled',
                'fee_paise' => $package->rate_paise,
                'commission_paise' => $commission,
                'schedule_key' => $scheduleKey,
            ]);

            $this->ledger->holdForSession($session, $package->student_user_id);
            $this->emit('session.scheduled', $session);

            return $session;
        });
    }

    /**
     * Check in. Home tuition is proved by a parent OTP or a geo-fence; online by
     * both parties joining. A manual check-in is allowed — a tutor standing in a
     * doorway with no signal still has to start the class — but it is flagged
     * and the parent is asked to confirm it.
     *
     * The method recorded is the method that was *proved*. A parent OTP without
     * a valid code is refused outright rather than downgraded, because the code
     * is the one thing the family holds: accepting the claim without it is how
     * "attended" came to mean "the tutor's phone said so". A geo-fence that
     * cannot be verified — out of range, too coarse a fix, or an address nobody
     * ever geocoded — falls back to `manual`, which the parent is asked to
     * confirm.
     */
    public function checkIn(
        TutoringSession $session,
        string $actorUserId,
        string $method,
        ?float $lat = null,
        ?float $lng = null,
        ?int $accuracyM = null,
        ?\DateTimeInterface $deviceTime = null,
        bool $offline = false,
        ?string $code = null,
    ): TutoringSession {
        return $this->transition(
            $session,
            ['scheduled'],
            'This class cannot be checked into from its current state.',
            function (TutoringSession $session) use ($actorUserId, $method, $lat, $lng, $accuracyM, $deviceTime, $offline, $code): TutoringSession {
                $claimed = $method;
                $downgraded = false;

                if ($method === 'parent_otp' && ! $this->proof->verifyCode($session, $code)) {
                    throw ValidationException::withMessages([
                        'code' => 'That code does not match this class. Ask the family to read it again, or check in manually.',
                    ]);
                }

                if ($method === 'geofence' && ! $this->proof->withinGeofence($session, $lat, $lng, $accuracyM)) {
                    $method = 'manual';
                    $downgraded = true;
                }

                $session->update([
                    'status' => 'checked_in',
                    'checked_in_at' => now(),
                ]);

                $this->recordEvent(
                    $session, 'check_in', $actorUserId, $method, $lat, $lng, $accuracyM, $deviceTime, $offline,
                    payload: $downgraded ? ['claimed_method' => $claimed, 'needs_confirmation' => true] : null,
                );

                $this->emit('session.checked_in', $session, [
                    'method' => $method,
                    'offline' => $offline,
                    'needs_confirmation' => $downgraded,
                ]);

                return $session->fresh();
            },
        );
    }

    /**
     * Check out: the two minutes of tutor time that produce the parent's update.
     *
     * Topics are required. A class with no record of what was covered gives the
     * progress heatmap nothing to attribute and the parent nothing to read, so
     * the API refuses it rather than accepting a blank.
     */
    public function checkOut(
        TutoringSession $session,
        string $actorUserId,
        array $topics,
        ?int $actualMin = null,
        ?int $confidence = null,
        ?array $homework = null,
        ?string $sharedNote = null,
    ): TutoringSession {
        if ($topics === []) {
            throw ValidationException::withMessages([
                'topics' => 'Add at least one topic you covered. The family sees this.',
            ]);
        }

        return $this->transition(
            $session,
            ['checked_in'],
            'Check in before checking out.',
            function (TutoringSession $session) use ($actorUserId, $topics, $actualMin, $confidence, $homework, $sharedNote): TutoringSession {
                $session->update([
                    'status' => 'checked_out',
                    'checked_out_at' => now(),
                    'topics' => array_values($topics),
                    'actual_min' => $actualMin ?? $session->planned_min,
                    'confidence' => $confidence,
                ]);

                // The counter records classes delivered, and this is the only
                // place a class becomes delivered.
                if ($session->package_id) {
                    Package::where('id', $session->package_id)->increment('sessions_used');
                }

                $this->recordEvent($session, 'check_out', $actorUserId, 'app');

                if ($homework && filled($homework['title'] ?? null)) {
                    Homework::create([
                        'session_id' => $session->id,
                        'student_user_id' => $session->student_user_id,
                        'tutor_user_id' => $session->tutor_user_id,
                        'subject' => $session->subject,
                        'title' => $homework['title'],
                        'instructions' => $homework['instructions'] ?? null,
                        'attachments' => $homework['attachments'] ?? null,
                        'due_at' => $homework['due_at'] ?? now()->addDays(2),
                        'status' => 'open',
                    ]);

                    $this->emit('homework.assigned', $session, ['title' => $homework['title']]);
                }

                if (filled($sharedNote)) {
                    \App\Nxt\Dashboard\Models\TutorNote::create([
                        'student_user_id' => $session->student_user_id,
                        'tutor_user_id' => $session->tutor_user_id,
                        'visibility' => 'shared',
                        'body' => $sharedNote,
                    ]);
                }

                $this->emit('session.checked_out', $session, ['topics' => $topics]);
                $this->askFamilyToConfirm($session);

                return $session->fresh();
            },
        );
    }

    /**
     * The parent confirms, or the auto-confirm timer does it for them. Both
     * paths end here so the money moves the same way either way; only the
     * recorded method differs, and the family's Sessions list says which one
     * happened.
     */
    public function confirm(TutoringSession $session, string $actorUserId, bool $automatic = false): TutoringSession
    {
        return $this->transition(
            $session,
            ['checked_out'],
            'Only a checked-out class can be confirmed.',
            function (TutoringSession $session) use ($actorUserId, $automatic): TutoringSession {
                $session->update(['status' => 'confirmed', 'confirmed_at' => now()]);

                $this->recordEvent(
                    $session,
                    $automatic ? 'auto_confirm' : 'confirm',
                    $automatic ? 'system' : $actorUserId,
                    $automatic ? 'timer_24h' : 'parent',
                );

                $this->ledger->releaseForSession($session, $session->student_user_id);
                $this->emit('session.confirmed', $session, ['automatic' => $automatic]);

                return $session->fresh();
            },
        );
    }

    /**
     * Disputing a class holds the tutor's payout until ops resolves it.
     *
     * Only a class whose money has not yet left can be disputed: once it is
     * confirmed the tutor has been paid, and moving it to `disputed` afterwards
     * would claim a freeze over money that is already gone.
     */
    public function dispute(TutoringSession $session, string $actorUserId, string $reason, ?string $detail = null, array $files = []): Dispute
    {
        return $this->transition(
            $session,
            ['checked_out'],
            'Only a class inside its confirmation window can be disputed. Contact support about anything older.',
            function (TutoringSession $session) use ($actorUserId, $reason, $detail, $files): Dispute {
                $session->update(['status' => 'disputed']);

                $this->recordEvent($session, 'dispute', $actorUserId, 'parent');

                $dispute = Dispute::create([
                    'session_id' => $session->id,
                    'raised_by_user_id' => $actorUserId,
                    'reason' => $reason,
                    'detail' => $detail,
                    'files' => $files,
                    'status' => 'open',
                ]);

                $this->emit('session.disputed', $session, ['reason' => $reason]);

                return $dispute;
            },
        );
    }

    /**
     * Ops resolves a dispute, and the frozen money moves again.
     *
     * "Held until ops resolves it" is only half a rule without this: a family
     * who disputed a class would otherwise freeze their own fee permanently,
     * with both sides losing it and the tutor's payable figure inflated by
     * money they can never draw.
     */
    public function resolveDispute(
        Dispute $dispute,
        string $actorUserId,
        bool $inFavourOfTutor,
        ?string $resolution = null,
    ): Dispute {
        return DB::transaction(function () use ($dispute, $actorUserId, $inFavourOfTutor, $resolution) {
            $dispute = Dispute::whereKey($dispute->id)->lockForUpdate()->first();

            if (! $dispute || $dispute->status !== 'open') {
                throw ValidationException::withMessages([
                    'dispute' => 'This dispute has already been resolved.',
                ]);
            }

            $session = TutoringSession::whereKey($dispute->session_id)->lockForUpdate()->first();

            if (! $session || $session->status !== 'disputed') {
                throw ValidationException::withMessages([
                    'status' => 'The class this dispute is about is no longer disputed.',
                ]);
            }

            if ($inFavourOfTutor) {
                $session->update(['status' => 'confirmed', 'confirmed_at' => now()]);
                $this->ledger->releaseForSession($session, $session->student_user_id);
            } else {
                $session->update([
                    'status' => 'cancelled',
                    'cancelled_at' => now(),
                    'cancel_reason' => 'dispute_upheld',
                ]);

                $this->ledger->releaseHoldToWallet(
                    $session,
                    $session->student_user_id,
                    $session->fee_paise,
                    'dispute-refund',
                    'Dispute resolved — the fee is back in your balance',
                );
            }

            $dispute->update([
                'status' => 'resolved',
                'resolution' => $resolution ?? ($inFavourOfTutor ? 'Resolved for the tutor.' : 'Resolved for the family.'),
                'resolved_at' => now(),
            ]);

            $this->recordEvent($session, 'dispute', $actorUserId, 'ops', payload: [
                'resolved_for' => $inFavourOfTutor ? 'tutor' : 'family',
            ]);

            $this->emit('session.dispute_resolved', $session, [
                'dispute_id' => $dispute->id,
                'resolved_for' => $inFavourOfTutor ? 'tutor' : 'family',
            ]);

            return $dispute->fresh();
        });
    }

    /**
     * Nobody turned up. Brief 7.4 makes this two different events wearing one
     * word, and the difference is the whole point:
     *
     *  - the family did not turn up: the tutor travelled and taught nobody, so
     *    the full fee is charged and settled to them, commission included;
     *  - the tutor did not turn up: the family loses an evening, so the hold
     *    comes back in full and the package gains a class.
     */
    public function noShow(TutoringSession $session, string $actorUserId, string $party): TutoringSession
    {
        if (! in_array($party, ['student', 'tutor'], true)) {
            throw ValidationException::withMessages([
                'party' => 'A no-show is recorded against the family or against the tutor.',
            ]);
        }

        return $this->transition(
            $session,
            ['scheduled', 'checked_in'],
            'Only a class that has not been taught can be recorded as a no-show.',
            function (TutoringSession $session) use ($actorUserId, $party): TutoringSession {
                $session->update(['status' => 'no_show']);

                $this->recordEvent($session, 'no_show', $actorUserId, $party, payload: ['party' => $party]);

                if ($party === 'student') {
                    $this->ledger->settleHoldToTutor(
                        $session,
                        $session->fee_paise,
                        $session->commission_paise,
                        'release',
                        'no-show',
                        'The family did not attend — the class is charged in full',
                    );
                } else {
                    $this->ledger->releaseHoldToWallet(
                        $session,
                        $session->student_user_id,
                        $session->fee_paise,
                        'no-show-refund',
                        'Your tutor did not attend — the fee is back in your balance',
                    );

                    $this->creditAFreeClass($session);
                }

                $this->emit('session.no_show', $session, ['party' => $party]);

                return $session->fresh();
            },
        );
    }

    /**
     * Cancellation, with the policy shown before it is confirmed.
     *
     * More than the free window out costs nothing; inside it half the fee is
     * charged and goes to the tutor with no commission, because the tutor kept
     * the slot free and cannot refill it. The window is a setting, not a
     * constant — ops is expected to tune it without a deploy.
     */
    public function cancellationPolicy(TutoringSession $session, ?string $actorUserId = null): array
    {
        $party = $this->cancellingParty($session, $actorUserId);
        $window = (int) config('nxt-dashboard.free_cancellation_hours', 12);
        $hoursAway = $session->starts_at ? now()->diffInHours($session->starts_at, false) : 0;
        $late = $hoursAway < $window;

        if ($party === 'platform') {
            return [
                'free' => true,
                'party' => $party,
                'hours_until_class' => (int) $hoursAway,
                'charge_paise' => 0,
                'tutor_paise' => $session->fee_paise,
                'refund_paise' => 0,
                'free_class' => false,
                'explanation' => 'We could not run this class. You are not charged, and your tutor is paid in full.',
            ];
        }

        if ($party === 'tutor') {
            return [
                'free' => true,
                'party' => $party,
                'hours_until_class' => (int) $hoursAway,
                'charge_paise' => 0,
                'tutor_paise' => 0,
                'refund_paise' => $session->fee_paise,
                'free_class' => $late,
                'explanation' => $late
                    ? 'Your tutor cancelled at short notice: the full amount goes back to your balance and the class is added back to your package.'
                    : 'Your tutor cancelled: the full amount goes back to your balance.',
            ];
        }

        $charge = $late ? (int) round($session->fee_paise / 2) : 0;

        return [
            'free' => ! $late,
            'party' => $party,
            'hours_until_class' => (int) $hoursAway,
            'charge_paise' => $charge,
            'tutor_paise' => $charge,
            'refund_paise' => $session->fee_paise - $charge,
            'free_class' => false,
            'explanation' => $late
                ? sprintf(
                    'Less than %d hours before the class: half the fee is charged and paid to your tutor, who kept the slot free. The rest goes back to your balance.',
                    $window,
                )
                : sprintf('More than %d hours before the class: no charge, the full amount goes back to your balance.', $window),
        ];
    }

    /**
     * Cancel a class that has not happened.
     *
     * Three things had to be true here and were not: a class already taught
     * cannot be cancelled (the policy reads a negative hours-away as "inside
     * the window" and paid the tutor half a fee for a class they fully
     * delivered); the charge the policy quotes has to actually leave a family
     * account, and the half that was not charged has to come back to it; and
     * who cancelled decides all of it.
     */
    public function cancel(TutoringSession $session, string $actorUserId, ?string $reason = null): TutoringSession
    {
        return $this->transition(
            $session,
            ['scheduled'],
            'This class can no longer be cancelled. A class that has already started is settled through confirmation or a dispute.',
            function (TutoringSession $session) use ($actorUserId, $reason): TutoringSession {
                $policy = $this->cancellationPolicy($session, $actorUserId);

                $session->update([
                    'status' => 'cancelled',
                    'cancelled_at' => now(),
                    'cancel_reason' => $reason,
                ]);

                $this->recordEvent($session, 'cancel', $actorUserId, 'app', payload: $policy);

                if ($policy['tutor_paise'] > 0) {
                    $this->ledger->settleHoldToTutor(
                        $session,
                        $policy['tutor_paise'],
                        // No commission on a class nobody taught: the tutor is
                        // being compensated for a slot, not paid for teaching.
                        0,
                        'cancellation_fee',
                        'cancel-fee',
                        $policy['party'] === 'platform'
                            ? 'Class cancelled by NXTutors — paid in full'
                            : 'Late cancellation — half fee, no commission',
                    );
                }

                if ($policy['refund_paise'] > 0) {
                    $this->ledger->releaseHoldToWallet(
                        $session,
                        $session->student_user_id,
                        $policy['refund_paise'],
                        'cancel-refund',
                        $policy['charge_paise'] > 0
                            ? 'Class cancelled — the part you were not charged'
                            : 'Class cancelled — hold released',
                    );
                }

                if ($policy['free_class']) {
                    $this->creditAFreeClass($session);
                }

                // sessions_used counts classes delivered, and only checkOut
                // delivers one. Cancelling a class that never ran gives nothing
                // back, because nothing was taken.

                $this->emit('session.cancelled', $session, $policy);

                return $session->fresh();
            },
        );
    }

    /**
     * Sessions past their auto-confirm window. Called by the scheduler; the
     * brief makes 24 hours the point at which silence means yes.
     *
     * Rows are claimed one at a time under a lock rather than read in a batch,
     * so two overlapping runs — a slow run, a retried cron, an ops engineer
     * running the command by hand after an outage — confirm each class once
     * between them.
     */
    public function autoConfirmDue(): int
    {
        $window = (int) config('nxt-dashboard.auto_confirm_hours', 24);

        $due = TutoringSession::where('status', 'checked_out')
            ->where('checked_out_at', '<=', now()->subHours($window))
            ->pluck('id');

        $confirmed = 0;

        foreach ($due as $id) {
            $session = TutoringSession::find($id);

            if (! $session) {
                continue;
            }

            // Silence confirms a class only when something other than the
            // tutor proved it happened. See escalateUnconfirmedManual().
            if ($this->needsFamilyConfirmation($session)) {
                continue;
            }

            try {
                $this->confirm($session, 'system', automatic: true);
                $confirmed++;
            } catch (ValidationException) {
                // Another run confirmed it between the read and the claim.
            }
        }

        return $confirmed;
    }

    /**
     * Manual check-ins the family never answered, handed to ops.
     *
     * A manual check-in is the tutor's word alone: no code the family read out,
     * no location the phone proved. The auto-confirm timer skips them, so
     * without this they would sit held forever — the tutor unpaid, the family's
     * money frozen. After `manual_review_after_hours` of silence the class
     * becomes a dispute raised by the system, which holds the payout exactly as
     * a parent's dispute does and puts it in front of the people who can ring
     * the family. Ops settles it with resolveDispute(), either way.
     */
    public function escalateUnconfirmedManual(): int
    {
        $after = (int) config('nxt-dashboard.manual_review_after_hours', 48);

        $due = TutoringSession::where('status', 'checked_out')
            ->where('checked_out_at', '<=', now()->subHours($after))
            ->pluck('id');

        $escalated = 0;

        foreach ($due as $id) {
            $session = TutoringSession::find($id);

            if (! $session || ! $this->needsFamilyConfirmation($session)) {
                continue;
            }

            try {
                $this->transition(
                    $session,
                    ['checked_out'],
                    'This class is no longer awaiting confirmation.',
                    function (TutoringSession $session) use ($after): Dispute {
                        $session->update(['status' => 'disputed']);

                        $this->recordEvent($session, 'dispute', 'system', 'timer', payload: [
                            'reason' => 'unconfirmed_manual_check_in',
                        ]);

                        $dispute = Dispute::create([
                            'session_id' => $session->id,
                            'raised_by_user_id' => 'system',
                            'reason' => 'unconfirmed_manual_check_in',
                            'detail' => "Checked in manually and not confirmed by the family within {$after} hours.",
                            'status' => 'open',
                        ]);

                        $this->emit('session.disputed', $session, ['reason' => 'unconfirmed_manual_check_in']);

                        return $dispute;
                    },
                );

                $escalated++;
            } catch (ValidationException) {
                // The family confirmed or disputed it between the read and the claim.
            }
        }

        return $escalated;
    }

    /**
     * Whether silence may not stand in for the family's yes.
     *
     * True when the check-in was manual — chosen, or a geo-fence that could not
     * be verified and was downgraded. A parent OTP, a verified geo-fence and an
     * online join are evidence from outside the tutor's own claim. A class with
     * no check-in event at all predates the event log and keeps the old rule.
     */
    public function needsFamilyConfirmation(TutoringSession $session): bool
    {
        return AttendanceEvent::where('session_id', $session->id)
            ->where('kind', 'check_in')
            ->orderByDesc('server_time')
            ->value('method') === 'manual';
    }

    /**
     * Classes nobody ever closed.
     *
     * `checked_out_at` is the only clock the module had, so a class the tutor
     * never checked out of — the likeliest operational failure in the whole
     * flow — was invisible to every timer and its fee stayed held forever: the
     * family could not confirm it, the timer never saw it and the tutor was
     * never paid. The fee goes back to the family and the class is marked for
     * ops rather than settled silently in anybody's favour.
     */
    public function sweepAbandoned(): int
    {
        $after = (int) config('nxt-dashboard.abandon_after_hours', 48);
        $cutoff = now()->subHours($after);

        $stale = TutoringSession::whereIn('status', ['scheduled', 'checked_in'])
            ->where('starts_at', '<=', $cutoff)
            ->pluck('id');

        $swept = 0;

        foreach ($stale as $id) {
            $session = TutoringSession::find($id);

            if (! $session) {
                continue;
            }

            try {
                $this->transition(
                    $session,
                    ['scheduled', 'checked_in'],
                    'This class is no longer open.',
                    function (TutoringSession $session): TutoringSession {
                        $session->update([
                            'status' => 'cancelled',
                            'cancelled_at' => now(),
                            'cancel_reason' => 'abandoned',
                        ]);

                        $this->recordEvent($session, 'cancel', 'system', 'sweep', payload: ['reason' => 'abandoned']);

                        $this->ledger->releaseHoldToWallet(
                            $session,
                            $session->student_user_id,
                            $session->fee_paise,
                            'abandon-refund',
                            'This class was never completed — the fee is back in your balance',
                        );

                        $this->emit('session.abandoned', $session);

                        return $session->fresh();
                    },
                );

                $swept++;
            } catch (ValidationException) {
                // Somebody closed it properly between the read and the claim.
            }
        }

        return $swept;
    }

    /**
     * Who is cancelling, which is what decides the money.
     *
     * Anyone who is neither the family nor the tutor is the platform: ops, a
     * scheduled command, a support agent acting for either side.
     */
    private function cancellingParty(TutoringSession $session, ?string $actorUserId): string
    {
        return match (true) {
            $actorUserId === null, $actorUserId === $session->student_user_id => 'student',
            $actorUserId === $session->tutor_user_id => 'tutor',
            default => 'platform',
        };
    }

    /** Compensation for an evening the family lost: one more class on the package. */
    private function creditAFreeClass(TutoringSession $session): void
    {
        if (! $session->package_id) {
            return;
        }

        Package::where('id', $session->package_id)->increment('sessions_total');
    }

    /**
     * Claim a session in one of the states this transition is allowed from, and
     * run the transition against the row as it actually is.
     *
     * The re-read is the point: the caller's model may have been loaded before
     * another worker moved the row, and a status guard against a stale model is
     * a guard that passes twice.
     */
    private function transition(TutoringSession $session, array $from, string $refusal, \Closure $work): mixed
    {
        return DB::transaction(function () use ($session, $from, $refusal, $work) {
            $fresh = TutoringSession::whereKey($session->id)->lockForUpdate()->first();

            if (! $fresh || ! in_array($fresh->status, $from, true)) {
                throw ValidationException::withMessages(['status' => $refusal]);
            }

            return $work($fresh);
        });
    }

    /**
     * Classes booked on a package that have not yet been delivered.
     *
     * `sessions_used` rises only at check-out, so it says nothing about the
     * classes already in the diary. A balance check against it alone let a
     * ten-class package be booked thirty times ahead, and the family paid for
     * ten.
     */
    public function bookedAhead(Package $package): int
    {
        return TutoringSession::where('package_id', $package->id)
            ->whereIn('status', ['scheduled', 'checked_in'])
            ->count();
    }

    /**
     * Is there room on this package for one more class at this time?
     */
    private function assertBookable(Package $package, \DateTimeInterface $startsAt): void
    {
        if ($package->status !== 'active') {
            throw ValidationException::withMessages([
                'package' => 'This package has ended. Ask the family to renew and the slot will hold.',
            ]);
        }

        if ($package->expires_at !== null && $startsAt >= $package->expires_at) {
            throw ValidationException::withMessages([
                'package' => 'This class falls after the package expires on '
                    .$package->expires_at->timezone('Asia/Kolkata')->format('j M Y').'.',
            ]);
        }

        if ($package->sessions_used + $this->bookedAhead($package) >= $package->sessions_total) {
            throw ValidationException::withMessages([
                'package' => 'This package has no classes left. Ask the family to renew and the slot will hold.',
            ]);
        }
    }

    private function assertNoOverlap(string $studentUserId, string $tutorUserId, \DateTimeInterface $startsAt, int $plannedMin): void
    {
        $start = \Illuminate\Support\Carbon::instance(
            $startsAt instanceof \DateTimeImmutable ? \DateTime::createFromImmutable($startsAt) : $startsAt,
        );
        $end = $start->copy()->addMinutes($plannedMin);

        $clash = TutoringSession::whereIn('status', ['scheduled', 'checked_in'])
            ->where(function ($q) use ($studentUserId, $tutorUserId): void {
                $q->where('student_user_id', $studentUserId)->orWhere('tutor_user_id', $tutorUserId);
            })
            ->where('starts_at', '<', $end)
            ->whereRaw($this->sessionEndsAfterSql(), [$start])
            ->exists();

        if ($clash) {
            throw ValidationException::withMessages([
                'starts_at' => 'That time clashes with another class.',
            ]);
        }
    }

    /**
     * When a class ends, expressed as SQL.
     *
     * MySQL and SQLite share no date-arithmetic function, and the test database
     * is SQLite, so the expression is picked per driver rather than computed in
     * PHP — that keeps the overlap check one indexed query instead of loading
     * every candidate row. Both branches compare against a bound start time
     * that Laravel formats as 'Y-m-d H:i:s', which is exactly what SQLite's
     * datetime() returns, so the string comparison is the date comparison.
     */
    private function sessionEndsAfterSql(): string
    {
        return DB::connection()->getDriverName() === 'sqlite'
            ? "datetime(starts_at, '+' || planned_min || ' minutes') > ?"
            : 'DATE_ADD(starts_at, INTERVAL planned_min MINUTE) > ?';
    }

    private function recordEvent(
        TutoringSession $session,
        string $kind,
        string $actorUserId,
        string $method,
        ?float $lat = null,
        ?float $lng = null,
        ?int $accuracyM = null,
        ?\DateTimeInterface $deviceTime = null,
        bool $offline = false,
        ?array $payload = null,
    ): AttendanceEvent {
        return AttendanceEvent::create([
            'session_id' => $session->id,
            'kind' => $kind,
            'actor_user_id' => $actorUserId,
            'method' => $method,
            'lat' => $lat,
            'lng' => $lng,
            'accuracy_m' => $accuracyM,
            'device_time' => $deviceTime ?? now(),
            'server_time' => now(),
            'offline' => $offline,
            'payload' => $payload,
        ]);
    }

    /**
     * Written inside the caller's transaction; a relay publishes it afterwards.
     * Publishing straight to the stream from here would lose the event whenever
     * the process died between the commit and the publish.
     */
    /**
     * Tell the family a class is waiting for their yes or no.
     *
     * In-app, as every family-facing message on this platform is today; the
     * WhatsApp template hangs off this same call once Meta approves it, so one
     * place decides what the family is told. What it says differs on purpose:
     * for a manual check-in the family's answer is the only proof there is,
     * and they are told so.
     */
    private function askFamilyToConfirm(TutoringSession $session): void
    {
        $subject = $session->subject ?? 'tuition';

        if ($this->needsFamilyConfirmation($session)) {
            $title = "Did today's {$subject} class happen? Please confirm";
            $body = 'Your tutor checked in without the class code, so only you can confirm this '
                .'class took place. It will not be paid until you confirm it or our team checks with you.';
        } else {
            $hours = (int) config('nxt-dashboard.auto_confirm_hours', 24);
            $title = "Confirm today's {$subject} class";
            $body = "Tap Confirm if the class went ahead, or Dispute if it did not. It confirms "
                ."automatically in {$hours} hours if we hear nothing.";
        }

        AppNotification::create([
            'user_id' => $session->student_user_id,
            'role' => 'student',
            'event' => 'session.confirm_requested',
            'title' => $title,
            'body' => $body,
            'deep_link' => '/user/learn?session='.$session->id,
        ]);
    }

    private function emit(string $event, TutoringSession $session, array $extra = []): void
    {
        OutboxEvent::create([
            'topic' => 'sessions',
            'event' => $event,
            'payload' => array_merge([
                'session_id' => $session->id,
                'package_id' => $session->package_id,
                'student_user_id' => $session->student_user_id,
                'tutor_user_id' => $session->tutor_user_id,
                'subject' => $session->subject,
                'starts_at' => $session->starts_at?->toIso8601String(),
                'status' => $session->status,
                // What a tutor's timesheet is built from, so a subscriber does
                // not have to call back for every event it receives.
                'planned_min' => $session->planned_min,
                'actual_min' => $session->actual_min,
            ], $extra),
            'correlation_id' => CorrelationId::current(),
        ]);
    }
}
