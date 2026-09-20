<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * An event written in the same transaction as the state change, published afterwards by the relay.
 */
class OutboxEvent extends NxtModel
{
    protected $table = 'nxt_outbox_events';

    protected $casts = [
        'payload' => 'array',
        'published_at' => 'datetime',
        'attempts' => 'integer',
    ];
}
