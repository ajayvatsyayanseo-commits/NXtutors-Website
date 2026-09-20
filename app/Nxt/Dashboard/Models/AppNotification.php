<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * One delivered notification, with the deep link to the exact screen and record.
 */
class AppNotification extends NxtModel
{
    protected $table = 'nxt_notifications';

    protected $casts = [
        'read_at' => 'datetime',
    ];
}
