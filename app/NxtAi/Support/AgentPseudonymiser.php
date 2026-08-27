<?php

declare(strict_types=1);

namespace App\NxtAi\Support;

/**
 * The agents' phone pseudonymisation, reproduced exactly.
 *
 * This must stay byte-identical to
 * `security/pii.py::Pseudonymiser.phone` in the Demo Command Center agent:
 *
 *     normalise(phone) = the last 10 digits, non-digits stripped
 *     ph_<first 16 hex chars of HMAC-SHA256(pepper, normalised)>
 *
 * Three details are load-bearing and each was chosen there, not here:
 *
 *  - **the last ten digits**, so `+91 98765 43210` and `9876543210` collide.
 *    They are the same person and must resolve to one record;
 *  - **HMAC, not a plain hash**, so the pepper is a key rather than a salt an
 *    attacker can strip;
 *  - **truncated to 16 chars**, which is what the agents store and compare. A
 *    full 64-char digest here would never match a single one of them.
 *
 * A mismatch does not raise anywhere. It simply means every lookup misses, the
 * agent finds no contact, and — because unknown contacts fail closed as
 * opted-out — every message to that person is silently suppressed. That is why
 * `AgentPseudonymiserTest` pins the algorithm against a vector computed by the
 * Python implementation rather than by this one.
 */
final class AgentPseudonymiser
{
    public function __construct(private readonly string $pepper)
    {
    }

    public static function fromConfig(): self
    {
        $pepper = (string) config('agent.hash_pepper', '');
        if ($pepper === '') {
            // Fails loudly. A blank pepper produces stable-looking hashes that
            // match nothing, which reads as "this customer is unknown" rather
            // than as a configuration error.
            throw new \RuntimeException(
                'AGENT_HASH_PEPPER is not set. It must equal TMM_HASH_PEPPER and '
                .'DCC_HASH_PEPPER in the agents\' .env, or no agent lookup can match.'
            );
        }

        return new self($pepper);
    }

    /** `9876543210` or `+91 98765 43210` -> `ph_a1b2c3d4e5f60718`. */
    public function phone(string $phone): string
    {
        return 'ph_'.$this->digest(self::normalisePhone($phone));
    }

    /** The raw 16-char digest, for storing in `phone_hash`. */
    public function phoneHash(string $phone): string
    {
        return $this->digest(self::normalisePhone($phone));
    }

    /**
     * Accepts either `ph_<hash>` or a bare hash, and returns the bare hash.
     *
     * The agents send the prefixed form; the column stores the bare one.
     * Normalising in one place stops a `LIKE 'ph_%'` query that matches nothing
     * from being written twice.
     */
    public static function stripPrefix(string $ref): string
    {
        return str_starts_with($ref, 'ph_') ? substr($ref, 3) : $ref;
    }

    public static function looksLikePhoneRef(string $ref): bool
    {
        return (bool) preg_match('/^(ph_)?[0-9a-f]{16}$/', $ref);
    }

    private function digest(string $value): string
    {
        return substr(hash_hmac('sha256', $value, $this->pepper), 0, 16);
    }

    private static function normalisePhone(string $phone): string
    {
        $digits = preg_replace('/\D/', '', $phone) ?? '';

        return strlen($digits) >= 10 ? substr($digits, -10) : $digits;
    }
}
