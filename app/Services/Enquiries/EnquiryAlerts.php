<?php

namespace App\Services\Enquiries;

use App\Mail\NewEnquiryMail;
use App\Models\EnquiryLead;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

/**
 * The enquiry emails (config/enquiries.php). Mirrors App\Services\TutorIntake:
 * queued when there is a queue, otherwise sent after the response, so a family
 * never waits on (or sees) the mail server. A mail failure is logged without
 * any personal data and never reaches the form.
 */
final class EnquiryAlerts
{
    public function newEnquiry(EnquiryLead $lead, ?string $parentName): void
    {
        if (! config('enquiries.alerts', true) || $lead->alert_sent_at !== null) {
            return;
        }
        $to = trim((string) config('enquiries.alert_email'));
        if ($to === '') {
            return;
        }
        // Marked first: a mail outage can never make a retry send it twice.
        try {
            $lead->forceFill(['alert_sent_at' => now()])->save();
        } catch (\Throwable $e) {
            // The column is there by migration; carry on regardless.
        }

        $this->send($to, new NewEnquiryMail($lead, $parentName), $lead->id);
    }

    public function send(string $to, Mailable $mail, ?int $leadId = null): void
    {
        try {
            if (app()->runningInConsole()) {
                Mail::to($to)->send($mail);
            } elseif (config('queue.default') !== 'sync') {
                Mail::to($to)->queue($mail);
            } else {
                app()->terminating(function () use ($to, $mail, $leadId): void {
                    try {
                        Mail::to($to)->send($mail);
                    } catch (\Throwable $e) {
                        Log::warning('Enquiry email failed', ['enquiry_id' => $leadId, 'mail' => class_basename($mail), 'error' => mb_substr($e->getMessage(), 0, 200)]);
                    }
                });
            }
        } catch (\Throwable $e) {
            Log::warning('Enquiry email failed', ['enquiry_id' => $leadId, 'mail' => class_basename($mail), 'error' => mb_substr($e->getMessage(), 0, 200)]);
        }
    }
}
