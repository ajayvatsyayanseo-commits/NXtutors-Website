<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemoLead extends Model
{
    protected $fillable = [
        'phone_hash',
        'name',
        'phone',
        'service',
        'subject',
        'child_class',
        'preferred_time',
        'mode',
        'location',
        'message',
        'source_page',
    ];

    /**
     * Keep `phone_hash` in step with `phone`.
     *
     * Derived data, never input: recomputed on every save so a number changed
     * through any path — admin edit, signup form, import — cannot leave a
     * stale hash behind. A stale hash is not a visible bug. It means the
     * agents can no longer find that person, so every message to them is
     * suppressed as "unknown contact", with nothing logged anywhere.
     */
    protected static function booted(): void
    {
        static::saving(function (self $model): void {
            if (! $model->isDirty('phone')) {
                return;
            }
            $phone = (string) ($model->phone ?? '');
            $model->phone_hash = $phone === ''
                ? null
                : \App\NxtAi\Support\AgentPseudonymiser::fromConfig()->phoneHash($phone);
        });
    }
}
