<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * The parent's one-time code for a class, stored hashed and usable once.
 */
class CheckInCode extends NxtModel
{
    protected $table = 'nxt_check_in_codes';

    protected $casts = [
        'issued_at' => 'datetime',
        'expires_at' => 'datetime',
        'used_at' => 'datetime',
        'attempts' => 'integer',
    ];
}
