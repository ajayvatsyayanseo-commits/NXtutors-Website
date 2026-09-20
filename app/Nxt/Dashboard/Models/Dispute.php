<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * A contested session. Opening one holds the tutor's payout until ops resolves it.
 */
class Dispute extends NxtModel
{
    protected $table = 'nxt_disputes';

    protected $casts = [
        'files' => 'array',
        'resolved_at' => 'datetime',
    ];
}
