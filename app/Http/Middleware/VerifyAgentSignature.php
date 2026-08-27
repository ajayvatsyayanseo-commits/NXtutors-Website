<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * HMAC verification for the agent tutor feed.
 *
 * The canonical string is byte-identical to the one the agent signs
 * (src/tutor_match_meta/security/signing.py::canonical_string):
 *
 *     METHOD \n PATH_WITH_QUERY \n TIMESTAMP \n sha256_hex(body)
 *
 * Three properties matter and each is deliberate:
 *
 *  - the **path includes the query string**, so a signature captured for
 *    `?offset=0` cannot be replayed against `?offset=5000`;
 *  - the **body is hashed rather than embedded**, so the canonical string is a
 *    fixed size regardless of payload (the feed is GET, so it hashes b"");
 *  - comparison is `hash_equals`, not `===`, so a wrong signature cannot be
 *    recovered a byte at a time by timing the response.
 *
 * Fails closed: with no configured secret every request is refused.
 */
final class VerifyAgentSignature
{
    private const PREFIX = 'v1=';

    public function handle(Request $request, Closure $next): Response
    {
        $secret = (string) config('agent.signing_key', '');
        if ($secret === '') {
            return $this->deny('feed_not_configured', 503);
        }

        $timestamp = $request->header('X-Nxt-Timestamp');
        if ($timestamp === null || ! ctype_digit((string) $timestamp)) {
            return $this->deny('missing_timestamp', 401);
        }

        $tolerance = (int) config('agent.timestamp_tolerance', 300);
        if (abs(time() - (int) $timestamp) > $tolerance) {
            return $this->deny('timestamp_out_of_window', 401);
        }

        $provided = (string) $request->header('X-Nxt-Signature', '');
        if ($provided === '' || ! str_starts_with($provided, self::PREFIX)) {
            return $this->deny('missing_signature', 401);
        }

        // getRequestUri() is path + '?' + query exactly as sent, which is what
        // the agent signed. Rebuilding it from path() and query() would reorder
        // parameters and break an otherwise valid signature.
        $path = $request->getRequestUri();
        $canonical = implode("\n", [
            strtoupper($request->getMethod()),
            $path,
            (string) $timestamp,
            hash('sha256', $request->getContent() ?: ''),
        ]);
        $expected = self::PREFIX.hash_hmac('sha256', $canonical, $secret);

        if (! hash_equals($expected, $provided)) {
            return $this->deny('signature_mismatch', 401);
        }

        // Authorisation, and only after authentication. Checking the agent
        // identity first would answer "is this a known agent name?" to a caller
        // who has proved nothing, and would return 403 for a request that was
        // never signed at all — which reads as "recognised but not permitted"
        // when the truth is "not authenticated".
        // Either header names the caller, and neither agent is wrong: the
        // Tutor feed client sends `X-Nxt-Agent`, the Demo gateway client sends
        // `X-Nxt-Source`. Checking only the first gave every gateway call a
        // 403 `unknown_agent` — a correctly signed, correctly configured agent
        // turned away at the door, with the log saying it was unrecognised.
        $identity = (string) ($request->header('X-Nxt-Agent')
            ?: $request->header('X-Nxt-Source', ''));

        $allowed = (array) config('agent.allowed_agents', []);
        if ($allowed !== [] && ! in_array($identity, $allowed, true)) {
            return $this->deny('unknown_agent', 403);
        }

        return $next($request);
    }

    private function deny(string $reason, int $status): Response
    {
        // The reason is safe to return: it tells an operator what to fix and
        // tells an attacker nothing they could not learn by trying.
        return response()->json(['error' => $reason], $status);
    }
}
