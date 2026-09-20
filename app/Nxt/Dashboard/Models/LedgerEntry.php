<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * Append-only money movement. Every balance in either dashboard is a sum over these rows.
 */
class LedgerEntry extends NxtModel
{
    protected $table = 'nxt_ledger_entries';

    protected $casts = [
        'amount_paise' => 'integer',
        'occurred_at' => 'datetime',
    ];
}
