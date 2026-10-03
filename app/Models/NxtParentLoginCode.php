<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/** One WhatsApp login code, hashed. See App\Services\ParentLogin. */
class NxtParentLoginCode extends Model
{
    protected $table = 'nxt_parent_login_codes';

    public const UPDATED_AT = null;

    protected $fillable = ['phone_hash', 'code_hash', 'expires_at', 'attempts', 'used_at'];

    protected $hidden = ['code_hash'];

    protected function casts(): array
    {
        return [
            'expires_at' => 'datetime',
            'used_at' => 'datetime',
            'attempts' => 'integer',
        ];
    }
}
