<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * In-app message between a family and a tutor. Retained for disputes; no phone numbers change hands.
 */
class Message extends NxtModel
{
    protected $table = 'nxt_messages';

    protected $casts = [
        'attachments' => 'array',
        'read_at' => 'datetime',
    ];
}
