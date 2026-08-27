<?php

declare(strict_types=1);

namespace App\NxtAi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class NxtAiConversation extends Model
{
    protected $table = 'nxt_ai_conversations';

    protected $guarded = ['id'];

    public $timestamps = true;

    protected $casts = [
        'last_activity_at' => 'datetime',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (self $conversation): void {
            if (empty($conversation->uid)) {
                $conversation->uid = (string) Str::ulid();
            }
        });
    }

    public function getRouteKeyName(): string
    {
        return 'uid';
    }

    public function messages(): HasMany
    {
        return $this->hasMany(NxtAiMessage::class, 'conversation_id')->orderBy('id');
    }

    public function actions(): HasMany
    {
        return $this->hasMany(NxtAiAction::class, 'conversation_id');
    }
}
