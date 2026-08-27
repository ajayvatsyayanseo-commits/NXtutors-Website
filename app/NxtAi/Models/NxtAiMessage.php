<?php

declare(strict_types=1);

namespace App\NxtAi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NxtAiMessage extends Model
{
    protected $table = 'nxt_ai_messages';

    protected $guarded = ['id'];

    public $timestamps = true;

    protected $casts = [
        'structured_blocks' => 'array',
        'tool_metadata' => 'array',
        'token_usage' => 'array',
    ];

    public function conversation(): BelongsTo
    {
        return $this->belongsTo(NxtAiConversation::class, 'conversation_id');
    }
}
