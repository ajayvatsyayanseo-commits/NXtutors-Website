<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * An assignment given at check-out. Visible to the family the moment it is written.
 */
class Homework extends NxtModel
{
    protected $table = 'nxt_homework';

    protected $casts = [
        'attachments' => 'array',
        'due_at' => 'datetime',
    ];
}
