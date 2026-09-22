<?php

namespace App\Models;

use App\Support\ReviewOptions;
use Illuminate\Database\Eloquent\Model;

class Teacher_review extends Model
{
    public const MODERATION_UNVERIFIED = 'unverified';
    public const MODERATION_PENDING = 'pending';
    public const MODERATION_APPROVED = 'approved';
    public const MODERATION_REJECTED = 'rejected';
    public const MODERATION_LEGACY = 'legacy';

    protected $table = "teacher_review";

    // Only what the review form may set. status, moderation, verification and
    // moderator fields are written by the controllers, never from input.
    protected $fillable = [
        'name',
        'user_id',
        'rating',
        'expertise',
        'patience',
        'reliability',
        'communication',
        'date',
        'message',
        'email',
        'reviewer_role',
        'subject',
        'board',
        'class_level',
        'mode',
        'duration',
        'tags',
        'photo',
    ];

    protected $casts = [
        'tags' => 'array',
        'email_verified_at' => 'datetime',
        'verify_expires_at' => 'datetime',
        'submitted_at' => 'datetime',
        'moderated_at' => 'datetime',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(Register::class, 'user_id', 'user_id');
    }

    public function isEmailVerified(): bool
    {
        return $this->email_verified_at !== null;
    }

    public function photoUrl(): ?string
    {
        return $this->photo ? asset(config('reviews.photo_dir').'/'.$this->photo) : null;
    }

    /** Tag labels, skipping any key no longer on the list. */
    public function tagLabels(): array
    {
        return array_values(array_filter(array_map(
            fn ($key) => ReviewOptions::TAGS[$key] ?? null,
            (array) ($this->tags ?? [])
        )));
    }

    /** "Parent · Class 12 · ISC · Physics · Home tuition" — whatever is known. */
    public function contextLine(): string
    {
        return implode(' · ', array_filter([
            ReviewOptions::label(ReviewOptions::ROLES, $this->reviewer_role),
            ReviewOptions::label(ReviewOptions::CLASSES, $this->class_level),
            ReviewOptions::label(ReviewOptions::BOARDS, $this->board),
            $this->subject,
            ReviewOptions::label(ReviewOptions::MODES, $this->mode),
        ]));
    }

    public function initials(): string
    {
        $parts = preg_split('/\s+/u', trim((string) $this->name)) ?: [];
        $letters = array_map(fn ($p) => mb_strtoupper(mb_substr($p, 0, 1)), array_slice($parts, 0, 2));

        return implode('', $letters) ?: '?';
    }
}
