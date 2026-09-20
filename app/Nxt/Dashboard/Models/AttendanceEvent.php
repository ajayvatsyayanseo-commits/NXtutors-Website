<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * Append-only proof that a class happened: who acted, when, by which method and from where.
 */
class AttendanceEvent extends NxtModel
{
    protected $table = 'nxt_attendance_events';

    protected $casts = [
        'lat' => 'float',
        'lng' => 'float',
        'accuracy_m' => 'integer',
        'device_time' => 'datetime',
        'server_time' => 'datetime',
        'offline' => 'boolean',
        'payload' => 'array',
    ];
}
