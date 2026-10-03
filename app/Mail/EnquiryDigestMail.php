<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

/** The morning enquiries digest (App\Console\Commands\EnquiriesDigest). Names only, never phone or email. */
class EnquiryDigestMail extends Mailable
{
    use Queueable, SerializesModels;

    /** @param array<string,mixed> $data */
    public function __construct(public array $data)
    {
    }

    public function envelope(): Envelope
    {
        $d = $this->data;

        return new Envelope(subject: 'Enquiries this morning: ' . (int) $d['received24'] . ' new in 24h, ' . count($d['overdue']) . ' overdue');
    }

    public function content(): Content
    {
        return new Content(view: 'emails.enquiry-digest', with: $this->data + ['adminUrl' => route('super.enquiries.index')]);
    }
}
