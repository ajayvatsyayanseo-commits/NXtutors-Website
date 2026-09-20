<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * A settlement to a tutor.
 */
class Payout extends NxtModel
{
    protected $table = 'nxt_payouts';

    protected $casts = [
        'amount_paise' => 'integer',
        'period_start' => 'date',
        'period_end' => 'date',
        'paid_at' => 'datetime',
    ];
}
