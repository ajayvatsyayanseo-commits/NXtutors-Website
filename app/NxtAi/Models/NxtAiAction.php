<?php

declare(strict_types=1);

namespace App\NxtAi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NxtAiAction extends Model
{
    protected $table = 'nxt_ai_actions';

    protected $guarded = ['id'];

    public $timestamps = true;

    protected $casts = [
        'payload' => 'array',
        'confirmation_expires_at' => 'datetime',
        'executed_at' => 'datetime',
    ];

    public function conversation(): BelongsTo
    {
        return $this->belongsTo(NxtAiConversation::class, 'conversation_id');
    }

    public function isConfirmable(): bool
    {
        return $this->status === 'prepared'
            && $this->confirmation_expires_at?->isFuture();
    }
}
