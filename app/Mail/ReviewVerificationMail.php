<?php

namespace App\Mail;

use App\Models\Register;
use App\Models\Teacher_review;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

/** "Confirm your review of <tutor>" — the link that proves the email is real. */
class ReviewVerificationMail extends Mailable
{
    public function __construct(
        public Teacher_review $review,
        public Register $teacher,
        public string $token,
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Confirm your review of '.$this->teacher->name);
    }

    public function content(): Content
    {
        return new Content(view: 'emails.review-verify', with: [
            'url' => route('review.verify', $this->token),
            'hours' => (int) config('reviews.verify_link_hours'),
        ]);
    }
}
