<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The context behind one WhatsApp click ("Ref: NX-7K3Q2M").
 * See App\Services\WhatsAppHandoff and docs/contracts/lead-intake-handoff-v1.md.
 */
class NxtHandoff extends Model
{
    protected $table = 'nxt_handoffs';

    protected $guarded = ['id'];

    protected $casts = [
        'utm' => 'array',
        'tutors' => 'array',
        'compare' => 'array',
        'known' => 'array',
        'fetched_at' => 'datetime',
        'expires_at' => 'datetime',
    ];

    public function scopeLive($q)
    {
        return $q->where('expires_at', '>', now());
    }
}
