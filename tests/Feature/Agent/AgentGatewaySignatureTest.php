<?php

declare(strict_types=1);

namespace Tests\Feature\Agent;

use Tests\TestCase;

/**
 * The signature gate on the agent gateway.
 *
 * Like the feed's own test, these deliberately never reach the controller, so
 * they need no database: the middleware either refuses the request or hands
 * off, and "did it refuse" is the whole security property.
 *
 * That matters more here than on the feed. The feed is read-only tutor data;
 * these routes return a customer's phone number and activate subscriptions. An
 * unsigned caller reaching either would be a far worse day.
 */
final class AgentGatewaySignatureTest extends TestCase
{
    private const SECRET = 'gateway-test-secret';

    private const AGENT = 'demo_command_center_agent';

    protected function setUp(): void
    {
        parent::setUp();
        config()->set('agent.signing_key', self::SECRET);
        config()->set('agent.allowed_agents', ['tutor_match_meta_agent', self::AGENT]);
    }

    /** @return array<string,string> */
    private function signed(string $method, string $path, string $body = ''): array
    {
        $timestamp = time();
        $canonical = implode("\n", [$method, $path, (string) $timestamp, hash('sha256', $body)]);

        return [
            'X-Nxt-Signature' => 'v1='.hash_hmac('sha256', $canonical, self::SECRET),
            'X-Nxt-Timestamp' => (string) $timestamp,
            'X-Nxt-Agent' => self::AGENT,
            'Accept' => 'application/json',
        ];
    }

    /** Every gateway route, so a new one cannot be added outside the gate. */
    public static function routes(): array
    {
        return [
            'identity' => ['POST', '/api/agent/v1/identity/resolve'],
            'contacts' => ['GET', '/api/agent/v1/tutors/2928/contacts'],
            'availability' => ['GET', '/api/agent/v1/tutors/2928/availability'],
            'quote' => ['GET', '/api/agent/v1/plans/quote'],
            'discount' => ['GET', '/api/agent/v1/customers/discount-eligibility'],
            'record demo' => ['POST', '/api/agent/v1/demos'],
            'activate' => ['POST', '/api/agent/v1/subscriptions/activate'],
            'regions' => ['GET', '/api/agent/v1/operators/9001/regions'],
        ];
    }

    /**
     * @dataProvider routes
     */
    public function test_every_route_refuses_an_unsigned_request(string $method, string $path): void
    {
        $this->json($method, $path, [], ['Accept' => 'application/json'])->assertStatus(401);
    }

    /**
     * @dataProvider routes
     */
    public function test_every_route_refuses_a_wrong_signature(string $method, string $path): void
    {
        $headers = $this->signed($method, $path);
        $headers['X-Nxt-Signature'] = 'v1='.str_repeat('0', 64);

        $this->json($method, $path, [], $headers)
            ->assertStatus(401)
            ->assertJson(['error' => 'signature_mismatch']);
    }

    /**
     * @dataProvider routes
     */
    public function test_every_route_refuses_an_unknown_agent(string $method, string $path): void
    {
        // This one request must be genuinely valid, because the check under
        // test happens *after* authentication: an unknown agent is a 403, and
        // a bad signature is a 401 that never reaches it. So the body must be
        // signed exactly as sent.
        //
        // `get()` rather than `getJson()` for the reads: `getJson` serialises
        // an empty payload to `[]` and sends it as the body even on a GET,
        // which no real agent does — the agent signs `sha256(b"")`. Signing
        // what the framework happens to send would pin a test artefact instead
        // of the production contract.
        $isRead = $method === 'GET';
        $headers = $this->signed($method, $path, $isRead ? '' : '[]');
        $headers['X-Nxt-Agent'] = 'somebody-else';

        $response = $isRead
            ? $this->get($path, $headers)
            : $this->json($method, $path, [], $headers);

        $response->assertStatus(403)->assertJson(['error' => 'unknown_agent']);
    }

    /**
     * @dataProvider routes
     */
    public function test_every_route_fails_closed_with_no_secret(string $method, string $path): void
    {
        config()->set('agent.signing_key', '');

        $this->json($method, $path, [], $this->signed($method, $path))
            ->assertStatus(503)
            ->assertJson(['error' => 'feed_not_configured']);
    }

    public function test_a_stale_timestamp_is_refused(): void
    {
        $path = '/api/agent/v1/plans/quote';
        $stale = time() - 3600;
        $canonical = implode("\n", ['GET', $path, (string) $stale, hash('sha256', '')]);

        $this->getJson($path, [
            'X-Nxt-Signature' => 'v1='.hash_hmac('sha256', $canonical, self::SECRET),
            'X-Nxt-Timestamp' => (string) $stale,
            'X-Nxt-Agent' => self::AGENT,
        ])->assertStatus(401)->assertJson(['error' => 'timestamp_out_of_window']);
    }

    /**
     * A signature covers the query string, so one captured for a cheap lookup
     * cannot be replayed against a different customer's record.
     */
    public function test_a_signature_is_not_valid_for_a_different_query(): void
    {
        $headers = $this->signed('GET', '/api/agent/v1/customers/discount-eligibility?student_ref=stu_aaaa');

        $this->getJson('/api/agent/v1/customers/discount-eligibility?student_ref=stu_bbbb', $headers)
            ->assertStatus(401)
            ->assertJson(['error' => 'signature_mismatch']);
    }

    /**
     * A body is hashed into the canonical string, so a valid signature for one
     * activation cannot be reused to activate a different order.
     */
    public function test_a_signature_is_not_valid_for_a_different_body(): void
    {
        $path = '/api/agent/v1/subscriptions/activate';
        $headers = $this->signed('POST', $path, json_encode(['order_ref' => 'ord_a'], JSON_THROW_ON_ERROR));

        $this->postJson($path, ['order_ref' => 'ord_b'], $headers)
            ->assertStatus(401)
            ->assertJson(['error' => 'signature_mismatch']);
    }
}
