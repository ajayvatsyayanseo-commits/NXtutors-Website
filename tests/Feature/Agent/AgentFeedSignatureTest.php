<?php

declare(strict_types=1);

namespace Tests\Feature\Agent;

use Tests\TestCase;

/**
 * The signature gate on the agent tutor feed.
 *
 * These deliberately never reach the controller, so they need no database: the
 * middleware either refuses the request or hands off, and "did it refuse" is
 * the whole security property. The response shape is pinned separately, in the
 * agent's own suite, against this controller's source
 * (tests/contract/test_website_feed_contract.py).
 *
 * The canonical string these assert is byte-identical to the one the agent
 * builds in src/tutor_match_meta/security/signing.py:
 *
 *     METHOD \n PATH_WITH_QUERY \n TIMESTAMP \n sha256_hex(body)
 */
final class AgentFeedSignatureTest extends TestCase
{
    private const SECRET = 'test-feed-secret';

    private const PATH = '/internal/agent/tutors';

    protected function setUp(): void
    {
        parent::setUp();
        config()->set('agent.signing_key', self::SECRET);
        config()->set('agent.timestamp_tolerance', 300);
        config()->set('agent.allowed_agents', ['tutor_match_meta_agent']);
    }

    /** @param array<string,string> $overrides */
    private function signedHeaders(string $query = '', array $overrides = []): array
    {
        $timestamp = time();
        $path = self::PATH.$query;
        $canonical = implode("\n", ['GET', $path, (string) $timestamp, hash('sha256', '')]);

        return array_merge([
            'X-Nxt-Signature' => 'v1='.hash_hmac('sha256', $canonical, self::SECRET),
            'X-Nxt-Timestamp' => (string) $timestamp,
            'X-Nxt-Agent' => 'tutor_match_meta_agent',
        ], $overrides);
    }

    public function test_an_unsigned_request_is_refused(): void
    {
        $this->get(self::PATH, ["Accept" => "application/json"])->assertStatus(401);
    }

    public function test_a_wrong_signature_is_refused(): void
    {
        $this->get(self::PATH, $this->signedHeaders('', [
            'X-Nxt-Signature' => 'v1='.str_repeat('0', 64),
        ]))->assertStatus(401)->assertJson(['error' => 'signature_mismatch']);
    }

    public function test_a_signature_without_the_version_prefix_is_refused(): void
    {
        $this->get(self::PATH, $this->signedHeaders('', [
            'X-Nxt-Signature' => str_repeat('a', 64),
        ]))->assertStatus(401)->assertJson(['error' => 'missing_signature']);
    }

    public function test_a_stale_timestamp_is_refused(): void
    {
        $stale = time() - 3600;
        $canonical = implode("\n", ['GET', self::PATH, (string) $stale, hash('sha256', '')]);

        $this->get(self::PATH, [
            'X-Nxt-Signature' => 'v1='.hash_hmac('sha256', $canonical, self::SECRET),
            'X-Nxt-Timestamp' => (string) $stale,
            'X-Nxt-Agent' => 'tutor_match_meta_agent',
        ])->assertStatus(401)->assertJson(['error' => 'timestamp_out_of_window']);
    }

    public function test_a_non_numeric_timestamp_is_refused(): void
    {
        $this->get(self::PATH, $this->signedHeaders('', [
            'X-Nxt-Timestamp' => 'not-a-number',
        ]))->assertStatus(401)->assertJson(['error' => 'missing_timestamp']);
    }

    public function test_an_unknown_agent_is_refused(): void
    {
        $this->get(self::PATH, $this->signedHeaders('', [
            'X-Nxt-Agent' => 'somebody-else',
        ]))->assertStatus(403)->assertJson(['error' => 'unknown_agent']);
    }

    public function test_the_feed_fails_closed_when_no_secret_is_configured(): void
    {
        config()->set('agent.signing_key', '');
        $this->get(self::PATH, $this->signedHeaders())
            ->assertStatus(503)
            ->assertJson(['error' => 'feed_not_configured']);
    }

    /**
     * A signature is bound to the exact query string, so one captured for the
     * first page cannot be replayed to read the whole tutor base.
     */
    public function test_a_signature_is_not_valid_for_a_different_page(): void
    {
        $headers = $this->signedHeaders('?limit=100&offset=0');

        $this->get(self::PATH.'?limit=100&offset=500', $headers)
            ->assertStatus(401)
            ->assertJson(['error' => 'signature_mismatch']);
    }

    /**
     * The positive case. There is no database in this environment, so the
     * controller cannot complete — but anything other than 401/403/503 proves
     * the signature verified and the request was handed on, which is exactly
     * the property under test.
     */
    public function test_a_correctly_signed_request_passes_the_gate(): void
    {
        $response = $this->get(self::PATH.'?limit=1&offset=0', $this->signedHeaders('?limit=1&offset=0'));

        $this->assertNotContains(
            $response->getStatusCode(),
            [401, 403, 503],
            'a correctly signed request was rejected by the signature gate'
        );
    }

    public function test_the_feed_exposes_no_write_verb(): void
    {
        foreach (['post', 'put', 'patch', 'delete'] as $verb) {
            $response = $this->{'json'}(strtoupper($verb), self::PATH, [], $this->signedHeaders());
            $this->assertSame(
                405,
                $response->getStatusCode(),
                strtoupper($verb).' must not be routable on the agent feed'
            );
        }
    }
}
