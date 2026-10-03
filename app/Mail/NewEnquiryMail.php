<?php

namespace App\Mail;

use App\Models\EnquiryLead;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

/**
 * "New enquiry: {class} {subject} in {city}" to config enquiries.alert_email.
 *
 * Privacy: the parent's name and the request (class, subjects, board, place,
 * mode, timing), plus a link to the admin page. Never the phone number, email
 * address or the free-text message (parents often type their number in it):
 * those are on the admin page, behind the sign-in.
 */
class NewEnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public EnquiryLead $lead, public ?string $parentName = null)
    {
    }

    public static function subjectFor(EnquiryLead $l): string
    {
        $class = $l->class_label ?: (EnquiryLead::CLASS_BANDS[$l->class_band] ?? 'Class not given');
        $subject = $l->subjectList()[0] ?? 'tuition';
        $city = $l->city ?: 'city not given';

        return mb_substr(preg_replace('/\s+/', ' ', "New enquiry: {$class} {$subject} in {$city}"), 0, 150);
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: self::subjectFor($this->lead));
    }

    public function content(): Content
    {
        $l = $this->lead;
        $tz = config('enquiries.timezone', 'Asia/Kolkata');
        $place = implode(', ', array_filter([$l->area, $l->zone && $l->zone !== $l->area ? $l->zone : null, $l->city]));

        return new Content(view: 'emails.new-enquiry', with: [
            'heading' => self::subjectFor($l),
            'rows' => array_filter([
                'Parent' => trim((string) $this->parentName) !== '' ? mb_substr(trim((string) $this->parentName), 0, 80) : 'Not given',
                'Received' => optional($l->received_at)->timezone($tz)?->format('d M Y, g:i A') . ' IST',
                'Source' => $l->sourceLabel(),
                'Class' => $l->class_label ?: (EnquiryLead::CLASS_BANDS[$l->class_band] ?? null),
                'Subjects' => $l->subjectList() ? implode(', ', $l->subjectList()) : null,
                'Board' => $l->board,
                'Exam goal' => EnquiryLead::EXAM_GOALS[$l->exam_goal] ?? null,
                'Place' => $place !== '' ? $place : null,
                'Mode' => EnquiryLead::MODES[$l->mode] ?? null,
                'Preferred time' => $l->preferred_time,
                'Start' => $l->start_by,
                'Budget' => $l->budget,
                'Page' => $l->page_url,
                'WhatsApp Ref' => $l->wa_ref,
            ], fn ($v) => $v !== null && $v !== ''),
            'adminUrl' => route('super.enquiries.show', $l->id),
        ]);
    }
}
