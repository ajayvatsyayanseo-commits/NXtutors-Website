<?php

namespace App\Mail;

use App\Models\Register;
use App\NxtAi\Support\PublicTutorFieldMapper;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

/**
 * "New tutor to check: {name}" to the reviewer (config tutors.review_email).
 *
 * Privacy: the tutor's name, city, subjects, mode, sign-up source and whether
 * the profile is live, plus a link to the admin review page. Never the ID
 * images, document number, phone or email: the reviewer sees those only
 * behind the admin sign-in.
 */
class NewTutorToCheckMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Register $tutor, public string $source)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'New tutor to check: '.mb_substr(trim((string) $this->tutor->name) ?: 'Tutor', 0, 80));
    }

    public function content(): Content
    {
        $t = $this->tutor;
        $caps = ['subjects' => [], 'modes' => []];
        try {
            $caps = app(PublicTutorFieldMapper::class)->capabilities($t);
        } catch (\Throwable $e) {
            // Courses table missing or odd rows: the email still goes.
        }
        $subjects = array_slice(array_values(array_unique(array_filter((array) ($caps['subjects'] ?? [])))), 0, 8);
        $modes = array_values(array_unique(array_filter((array) ($caps['modes'] ?? []))));

        return new Content(view: 'emails.new-tutor-to-check', with: [
            'name' => trim((string) $t->name) ?: 'Tutor',
            'city' => trim((string) $t->city),
            'subjects' => $subjects,
            'mode' => $modes ? implode(', ', $modes) : trim((string) $t->class_type),
            'source' => $this->source,
            'live' => $t->status === Register::STATUS_LIVE,
            'reviewUrl' => route('super.teacher.edit', $t->id),
        ]);
    }
}
