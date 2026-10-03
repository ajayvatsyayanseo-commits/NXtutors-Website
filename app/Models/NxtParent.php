<?php

declare(strict_types=1);

namespace App\Models;

use App\NxtAi\Support\AgentPseudonymiser;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * A parent with their own login (Phase 1 of the parent dashboard, 3 Oct 2026).
 *
 * Signs in on the `parent` guard only (config/auth.php), so a parent session
 * never opens a student's /user pages or Super Admin, and neither of those
 * sessions opens /parent. Logs in with a WhatsApp code (App\Services\ParentLogin)
 * or with email and password; both are optional on the row except the phone.
 *
 * The phone is stored normalised (10 digits, no 91) and its agent hash is kept
 * beside it, so the two can never drift: both are set here whenever the phone
 * is.
 */
class NxtParent extends Authenticatable
{
    protected $table = 'nxt_parents';

    protected $fillable = ['name', 'phone', 'email', 'status'];

    protected $hidden = ['password', 'phone_hash'];

    /** No remember-me column: a family login lasts as long as the session. */
    protected $rememberTokenName = '';

    public const STATUSES = ['active', 'inactive'];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'last_login_at' => 'datetime',
        ];
    }

    public function children(): HasMany
    {
        return $this->hasMany(NxtParentChild::class, 'parent_id')
            ->orderByDesc('is_primary')->orderBy('id');
    }

    public function isActive(): bool
    {
        return $this->status === 'active';
    }

    public function setPhoneAttribute(?string $value): void
    {
        $phone = self::normalisePhone((string) $value) ?? (string) $value;
        $this->attributes['phone'] = $phone;
        $this->attributes['phone_hash'] = AgentPseudonymiser::tryPhoneHash($phone);
    }

    public function setEmailAttribute(?string $value): void
    {
        $email = mb_strtolower(trim((string) $value));
        $this->attributes['email'] = $email === '' ? null : $email;
    }

    /** "98765 43210" for display. */
    public function prettyPhone(): string
    {
        return strlen((string) $this->phone) === 10
            ? substr($this->phone, 0, 5).' '.substr($this->phone, 5)
            : (string) $this->phone;
    }

    /** First name for a greeting: "Priya Sharma" -> "Priya". */
    public function firstName(): string
    {
        return strtok(trim((string) $this->name), ' ') ?: 'there';
    }

    /**
     * A 10-digit Indian mobile, or null.
     *
     * Accepts what people actually type and what WhatsApp sends: "98765 43210",
     * "+91 98765-43210", "919876543210", "09876543210". Indian mobiles start
     * 6–9; anything else (a landline, a foreign number) is not one we can
     * send a code to, so it is refused rather than half-accepted.
     */
    public static function normalisePhone(string $phone): ?string
    {
        $digits = preg_replace('/\D/', '', $phone) ?? '';
        if (strlen($digits) === 12 && str_starts_with($digits, '91')) {
            $digits = substr($digits, 2);
        } elseif (strlen($digits) === 11 && str_starts_with($digits, '0')) {
            $digits = substr($digits, 1);
        }

        return preg_match('/^[6-9]\d{9}$/', $digits) ? $digits : null;
    }
}
