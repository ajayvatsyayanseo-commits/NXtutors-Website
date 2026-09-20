<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * A funded block of sessions with one tutor. No session may be scheduled without one.
 */
class Package extends NxtModel
{
    protected $table = 'nxt_packages';

    protected $casts = [
        'sessions_total' => 'integer',
        'sessions_used' => 'integer',
        'rate_paise' => 'integer',
        'amount_paise' => 'integer',
        'commission_pct' => 'integer',
        'purchased_at' => 'datetime',
        'expires_at' => 'datetime',
    ];
}
