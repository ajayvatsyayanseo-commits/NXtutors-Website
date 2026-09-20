<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Support;

use Illuminate\Support\Str;

/**
 * The bearer token the Next.js dashboard uses when it cannot ride the PHP
 * session cookie.
 *
 * On the same host the session cookie is enough and this is never issued. It
 * exists for the two cases the cookie cannot cover: the dashboard served from
 * a different origin, and a server-side render that has no browser cookie jar
 * of its own.
 *
 * Signed with the application key rather than a JWT library so the site gains
 * no new dependency. The payload is not encrypted — it holds only a user id
 * and a role, both of which the holder already knows about themselves — but it
 * is tamper-evident, which is the property that matters.
 */
final class DashboardToken
{
    /** Handoff tokens are single-use and short-lived; session tokens are the working credential. */
    public const HANDOFF_TTL = 60;          // seconds

    public const SESSION_TTL = 60 * 60 * 8; // 8 hours, matching a working day

    public static function issue(string $userId, string $role, string $kind = 'session', ?int $ttl = null): string
    {
        $ttl ??= $kind === 'handoff' ? self::HANDOFF_TTL : self::SESSION_TTL;

        $payload = [
            'sub' => $userId,
            'role' => $role,
            'kind' => $kind,
            'jti' => (string) Str::ulid(),
            'iat' => time(),
            'exp' => time() + $ttl,
        ];

        $body = self::b64(json_encode($payload, JSON_THROW_ON_ERROR));

        return $body.'.'.self::b64(hash_hmac('sha256', $body, self::key(), true));
    }

    /**
     * @return array{sub:string,role:string,kind:string,jti:string,iat:int,exp:int}|null
     *         null whenever the token is malformed, unsigned, forged or expired —
     *         the caller treats every one of those the same way.
     */
    public static function verify(string $token, ?string $expectedKind = null): ?array
    {
        $parts = explode('.', $token);

        if (count($parts) !== 2) {
            return null;
        }

        [$body, $signature] = $parts;

        $expected = self::b64(hash_hmac('sha256', $body, self::key(), true));

        if (! hash_equals($expected, $signature)) {
            return null;
        }

        $payload = json_decode(self::unb64($body), true);

        if (! is_array($payload) || ! isset($payload['sub'], $payload['exp'], $payload['kind'])) {
            return null;
        }

        if ((int) $payload['exp'] < time()) {
            return null;
        }

        if ($expectedKind !== null && $payload['kind'] !== $expectedKind) {
            return null;
        }

        return $payload;
    }

    private static function key(): string
    {
        $key = (string) config('app.key');

        // Laravel stores the key base64-encoded; sign with the raw bytes either way.
        return str_starts_with($key, 'base64:')
            ? (string) base64_decode(substr($key, 7), true)
            : $key;
    }

    private static function b64(string $raw): string
    {
        return rtrim(strtr(base64_encode($raw), '+/', '-_'), '=');
    }

    private static function unb64(string $encoded): string
    {
        return (string) base64_decode(strtr($encoded, '-_', '+/'), true);
    }
}
