<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * One parent's consent to one purpose, and the code that proved it.
 *
 * `status` is the only thing callers should read to decide whether processing
 * is permitted, and only `verified` permits it. A row can be `pending` for
 * days because nobody typed the code, and a `withdrawn` row still exists
 * because the fact that consent once existed is itself a record that has to
 * survive.
 */
class ParentalConsent extends NxtModel
{
    public const STATUS_PENDING = 'pending';

    public const STATUS_VERIFIED = 'verified';

    public const STATUS_WITHDRAWN = 'withdrawn';

    public const STATUS_EXPIRED = 'expired';

    protected $table = 'nxt_parental_consents';

    protected $casts = [
        'issued_at' => 'datetime',
        'expires_at' => 'datetime',
        'verified_at' => 'datetime',
        'withdrawn_at' => 'datetime',
        'attempts' => 'integer',
        'evidence' => 'array',
    ];

    /**
     * Is this consent usable right now?
     *
     * Not `status === verified` alone. A consent that has been withdrawn keeps
     * its `verified_at` — it really was verified, on that date — and the only
     * thing that makes it unusable is the withdrawal beside it. Reading the
     * status without the withdrawal is the mistake this method exists to stop.
     */
    public function isLive(): bool
    {
        return $this->status === self::STATUS_VERIFIED && $this->withdrawn_at === null;
    }

    public static function activeKeyFor(string $studentUserId, string $purpose): string
    {
        return $studentUserId.':'.$purpose;
    }
}
