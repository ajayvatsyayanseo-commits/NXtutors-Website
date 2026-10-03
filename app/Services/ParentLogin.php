<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\NxtParent;
use App\Models\NxtParentLoginCode;
use App\NxtAi\Support\AgentPseudonymiser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;

/**
 * The WhatsApp login code for parents.
 *
 * The parent sends "Send me my NXtutors login code" to our WhatsApp number.
 * Lead Intake knows the sender's number (WhatsApp proved it), asks this site
 * for a code over the signed endpoint (ParentLoginCodeController), and sends
 * the message we return as its reply. The parent types the code on
 * /parent/login next to the same number.
 *
 * So the code proves the person at the keyboard holds that phone's WhatsApp,
 * the same proof the platform already trusts for consent and class check-ins
 * (CheckInProof, ParentalConsentFlow), and it is built the same way:
 *
 *  - the code is never stored or logged, only its bcrypt hash;
 *  - it lasts ten minutes and survives five wrong tries;
 *  - only the newest code for a number counts, so an older one cannot be used;
 *  - at most five codes per number per hour, and checking is throttled per IP
 *    and per number, so six digits cannot be guessed by brute force.
 */
final class ParentLogin
{
    public const TTL_MINUTES = 10;

    public const MAX_ATTEMPTS = 5;

    public const MAX_CODES_PER_HOUR = 5;

    /** Code checks allowed per IP, and per number, in DECAY_SECONDS. */
    public const MAX_CHECKS = 10;

    public const DECAY_SECONDS = 900;

    /**
     * A code for this number, as the WhatsApp reply Lead Intake sends.
     *
     * @return array{status: string, message: string}
     */
    public function issue(string $phone): array
    {
        $normalised = NxtParent::normalisePhone($phone);
        $parent = $normalised === null ? null
            : NxtParent::where('phone', $normalised)->where('status', 'active')->first();

        if (! $parent) {
            return [
                'status' => 'no_account',
                'message' => "We couldn't find a family account for this number. If your child studies with NXtutors, reply here and our team will set it up.",
            ];
        }

        $key = self::phoneKey($normalised);

        $recent = NxtParentLoginCode::where('phone_hash', $key)
            ->where('created_at', '>=', now()->subHour())
            ->count();
        if ($recent >= self::MAX_CODES_PER_HOUR) {
            return [
                'status' => 'too_many',
                'message' => "You've asked for several codes in the last hour, so we've paused new ones for a while. Please use the latest code we sent, or try again in an hour.",
            ];
        }

        $code = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        DB::transaction(function () use ($key, $code): void {
            // Yesterday's codes prove nothing any more; keep the table small.
            NxtParentLoginCode::where('phone_hash', $key)
                ->where('created_at', '<', now()->subDay())
                ->delete();

            NxtParentLoginCode::create([
                'phone_hash' => $key,
                'code_hash' => Hash::make($code),
                'expires_at' => now()->addMinutes(self::TTL_MINUTES),
                'attempts' => 0,
            ]);
        });

        return [
            'status' => 'sent',
            'message' => "Your NXtutors login code is {$code}. It expires in ".self::TTL_MINUTES.' minutes. Never share it with anyone, including our team.',
        ];
    }

    /**
     * The parent this code logs in, or an error a parent can act on.
     *
     * @return array{parent: ?NxtParent, error: ?string}
     */
    public function verify(string $phone, string $code, string $ip): array
    {
        $normalised = NxtParent::normalisePhone($phone);
        if ($normalised === null) {
            return self::fail('Please enter your 10-digit mobile number, like 98765 43210.');
        }

        $key = self::phoneKey($normalised);
        $limits = ['parent-code-ip:'.$ip, 'parent-code-phone:'.$key];
        foreach ($limits as $limit) {
            if (RateLimiter::tooManyAttempts($limit, self::MAX_CHECKS)) {
                $minutes = max(1, (int) ceil(RateLimiter::availableIn($limit) / 60));

                return self::fail("Too many tries in a short time. Please wait {$minutes} minute".($minutes === 1 ? '' : 's').' and try again.');
            }
        }
        foreach ($limits as $limit) {
            RateLimiter::hit($limit, self::DECAY_SECONDS);
        }

        $code = preg_replace('/\D/', '', $code) ?? '';
        if (strlen($code) !== 6) {
            return self::fail('The code has 6 digits. Please check the WhatsApp message and type all six.');
        }

        $parent = NxtParent::where('phone', $normalised)->first();
        if ($parent && ! $parent->isActive()) {
            return self::fail('This family account is paused. Message us on WhatsApp and our team will help.');
        }

        $row = NxtParentLoginCode::where('phone_hash', $key)->latest('id')->first();
        if (! $parent || ! $row) {
            return self::fail("We haven't sent a code to this number yet. Tap \"Get my code on WhatsApp\", send the message, and the code will arrive in the chat.");
        }
        if ($row->used_at !== null) {
            return self::fail('That code has already been used. Please ask for a new one on WhatsApp.');
        }
        if ($row->expires_at->isPast()) {
            return self::fail('That code has expired (codes last '.self::TTL_MINUTES.' minutes). Please ask for a new one on WhatsApp.');
        }
        if ($row->attempts >= self::MAX_ATTEMPTS) {
            return self::fail('Too many wrong tries for this code. Please ask for a new one on WhatsApp.');
        }

        if (! Hash::check($code, $row->code_hash)) {
            $row->increment('attempts');
            $left = self::MAX_ATTEMPTS - $row->attempts;

            return self::fail($left > 0
                ? "That code doesn't match. Please check the 6 digits and try again ({$left} ".($left === 1 ? 'try' : 'tries').' left).'
                : 'Too many wrong tries for this code. Please ask for a new one on WhatsApp.');
        }

        // Single use, exactly once: the update is conditional, so two
        // submissions of the same code at the same moment cannot both win.
        $claimed = NxtParentLoginCode::whereKey($row->id)->whereNull('used_at')->update(['used_at' => now()]);
        if ($claimed !== 1) {
            return self::fail('That code has already been used. Please ask for a new one on WhatsApp.');
        }

        foreach ($limits as $limit) {
            RateLimiter::clear($limit);
        }

        return ['parent' => $parent, 'error' => null];
    }

    /**
     * What a code row is filed under: the agents' peppered phone hash, the
     * same value as `nxt_parents.phone_hash`. Login must still work on a
     * server with no pepper set, so it falls back to a hash keyed on the app
     * key; codes live ten minutes, so the two never need to agree.
     */
    public static function phoneKey(string $normalisedPhone): string
    {
        return AgentPseudonymiser::tryPhoneHash($normalisedPhone)
            ?? 'k'.substr(hash_hmac('sha256', $normalisedPhone, (string) config('app.key')), 0, 16);
    }

    /** @return array{parent: null, error: string} */
    private static function fail(string $error): array
    {
        return ['parent' => null, 'error' => $error];
    }
}
