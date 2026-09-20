<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * A quoted hourly rate and the packages computed from it. Superseded quotes are kept so both sides can see the history.
 */
class Quote extends NxtModel
{
    protected $table = 'nxt_quotes';

    protected $casts = [
        'packages' => 'array',
        'superseded' => 'boolean',
        'rate_paise' => 'integer',
    ];
}
