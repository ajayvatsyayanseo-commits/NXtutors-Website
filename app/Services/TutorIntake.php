<?php

namespace App\Services;

use App\Mail\NewTutorToCheckMail;
use App\Models\Register;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

/**
 * What happens when a real tutor account appears (owner decision, 3 Oct 2026):
 *
 *  1. Publish rule (config tutors.publish_before_review, env
 *     TUTORS_PUBLISH_BEFORE_REVIEW). On: a new tutor waiting for review ('p')
 *     goes live ('t') at once, with no Verified badge (id_verified_at stays
 *     null). Off: the tutor stays 'p' until an admin approves, as before.
 *  2. One "New tutor to check" email to config tutors.review_email, in both
 *     modes, with no ID images and no contact details.
 *
 * The badge itself is only ever set by the admin's Approve
 * (SuperAdmin\TutorReviewDocumentController).
 *
 * Tutors from WhatsApp are written straight into `register` by the onboarding
 * agent (a plain INSERT, status from its WHATSAPP_TUTOR_STATUS, default 'p'),
 * so sweep() — run every minute by `tutors:review-intake` — picks up every
 * real tutor row not handled yet (review_notified_at null). Accounts created
 * on the site call registered() directly. Sample and generated profiles (no
 * phone, or is_sample) are never touched.
 */
class TutorIntake
{
    public const SOURCE_WHATSAPP = 'WhatsApp sign-up';

    public const SOURCE_ADMIN = 'Added by admin';

    /** Handle one new real tutor account. Never throws. */
    public function registered(Register $tutor, string $source, bool $applyPublishRule = true): void
    {
        try {
            if (! $this->isRealAccount($tutor)) {
                return;
            }
            if ($applyPublishRule) {
                $this->applyPublishRule($tutor);
            }
            $this->notifyReviewer($tutor, $source);
        } catch (\Throwable $e) {
            Log::warning('Tutor intake step failed', ['user_id' => $tutor->user_id, 'error' => $e->getMessage()]);
        }
    }

    /**
     * Rows the site did not create itself (the WhatsApp onboarding agent).
     * Needs the review_notified_at column; does nothing until it exists.
     *
     * @return int how many tutors were handled
     */
    public function sweep(int $limit = 50): int
    {
        if (! Register::hasReviewNotifiedColumn()) {
            return 0;
        }

        $rows = Register::query()
            ->where('join_as', 'teacher')
            ->whereNull('review_notified_at')
            ->whereIn('status', [Register::STATUS_PENDING_REVIEW, Register::STATUS_LIVE])
            ->whereNotNull('phone')->where('phone', '!=', '')
            ->when(Register::hasSampleColumn(), fn ($q) => $q->where(fn ($w) => $w->where('is_sample', 0)->orWhereNull('is_sample')))
            ->orderBy('id')
            ->limit($limit)
            ->get();

        foreach ($rows as $tutor) {
            $this->registered($tutor, self::SOURCE_WHATSAPP);
        }

        return $rows->count();
    }

    /** A real person's account: a tutor with a phone on record, not a sample. */
    public function isRealAccount(Register $tutor): bool
    {
        return $tutor->join_as === 'teacher'
            && trim((string) $tutor->phone) !== ''
            && empty($tutor->is_sample);
    }

    /** Pending ('p') to live ('t') when publishing before review; never sets the badge. */
    public function applyPublishRule(Register $tutor): void
    {
        if (! config('tutors.publish_before_review') || $tutor->status !== Register::STATUS_PENDING_REVIEW) {
            return;
        }
        $tutor->status = Register::STATUS_LIVE;
        $tutor->save(); // through the model: fills phone_hash too

        Log::info('New tutor published before ID review', ['user_id' => $tutor->user_id]);
    }

    /**
     * The one email per new tutor. Marked as sent before sending, so a mail
     * outage can never make the sweep send it twice or loop; the admin list's
     * "awaiting ID check" filter is the fallback if an email is lost.
     */
    public function notifyReviewer(Register $tutor, string $source): void
    {
        if (Register::hasReviewNotifiedColumn()) {
            if ($tutor->review_notified_at !== null) {
                return;
            }
            $tutor->forceFill(['review_notified_at' => now()])->save();
        }

        $to = trim((string) config('tutors.review_email'));
        if ($to === '') {
            return;
        }

        $mail = new NewTutorToCheckMail($tutor, $source);

        try {
            if (app()->runningInConsole()) {
                // The sweep (and the tests) already run in the background: send now.
                Mail::to($to)->send($mail);
            } elseif (config('queue.default') !== 'sync') {
                Mail::to($to)->queue($mail);
            } else {
                // No queue: send once the response has gone, so the person
                // signing up never waits on (or sees) the mail server.
                app()->terminating(function () use ($to, $mail, $tutor): void {
                    try {
                        Mail::to($to)->send($mail);
                    } catch (\Throwable $e) {
                        Log::warning('New-tutor review email failed', ['user_id' => $tutor->user_id, 'error' => $e->getMessage()]);
                    }
                });
            }
        } catch (\Throwable $e) {
            Log::warning('New-tutor review email failed', ['user_id' => $tutor->user_id, 'error' => $e->getMessage()]);
        }
    }
}
