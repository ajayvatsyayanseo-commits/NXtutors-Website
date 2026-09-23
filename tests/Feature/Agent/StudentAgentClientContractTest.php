<?php

declare(strict_types=1);

namespace Tests\Feature\Agent;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

/**
 * The Student agent's real requests, replayed through the real gate.
 *
 * Every other test in this directory signs its own requests, which means they
 * all verify this site against itself. They would keep passing if the agent on
 * the other side signed something subtly different — a query string in another
 * encoding, a GET that carried a body, a header the middleware does not read.
 * That failure mode is not hypothetical: it is precisely the bug that made
 * every read in {@see StudentAgentGatewayTest} return 401, and it survived a
 * careful reading of the middleware.
 *
 * So the bytes here are not written by hand. They are dumped from the Python
 * client itself — `scripts/dump_request_fixture.py` in `nxtutors-agent-student`,
 * which runs `WebsiteGateway` against a transport that records instead of
 * sending — and replayed verbatim. If the agent's signing drifts, or this
 * site's changes, a test fails on the side that can still be fixed.
 *
 * Regenerate with:
 *
 *     python scripts/dump_request_fixture.py > tests/golden/agent_requests.json
 *
 * and copy it over the fixture here.
 */
final class StudentAgentClientContractTest extends TestCase
{
    use RefreshDatabase;

    /** The agent's `stu_abc` resolves to a `phone_hash` of `abc`. */
    private const PHONE_HASH = 'abc';

    private const STUDENT = 'S-77';

    /** @var array<string,mixed> */
    private array $fixture;

    protected function setUp(): void
    {
        parent::setUp();

        $this->fixture = json_decode(
            (string) file_get_contents(__DIR__.'/../../Fixtures/agent/student_agent_requests.json'),
            true,
            512,
            JSON_THROW_ON_ERROR,
        );

        config()->set('agent.signing_key', $this->fixture['secret']);
        config()->set('agent.allowed_agents', ['student_agent']);

        // The fixture is signed at a fixed moment so that it is reproducible
        // and reviewable in a diff. Widening the window is safe *here* and
        // nowhere else: in production it is the replay defence, and
        // AgentGatewaySignatureTest still asserts a stale timestamp is
        // refused with the default.
        config()->set('agent.timestamp_tolerance', 100 * 365 * 24 * 3600);

        Schema::create('register', function ($t): void {
            $t->increments('id');
            foreach (['user_id', 'name', 'email', 'phone', 'phone_hash', 'password',
                'status', 'join_as', 'city'] as $column) {
                $t->string($column)->nullable();
            }
            $t->dateTime('deleted_at')->nullable();
        });

        DB::table('register')->insert([
            'user_id' => self::STUDENT,
            'name' => 'Aarav',
            'join_as' => 'student',
            'status' => 't',
            'phone_hash' => self::PHONE_HASH,
        ]);
    }

    /**
     * Replay one recorded request exactly as the agent sent it.
     *
     * `$content` is null for a read rather than `''`. The distinction is the
     * whole point of the fixture recording `body_base64: null` separately from
     * an empty string: a GET that carries a zero-length body still carries a
     * body, and a test client that invents one is how the original bug hid.
     */
    private function replay(array $recorded): TestResponse
    {
        return $this->call(
            $recorded['method'],
            $recorded['uri'],
            [],
            [],
            [],
            $this->transformHeadersToServerVars($recorded['headers']),
            $recorded['body_base64'] === null ? null : base64_decode($recorded['body_base64']),
        );
    }

    public static function recordedRequests(): array
    {
        $fixture = json_decode(
            (string) file_get_contents(__DIR__.'/../../Fixtures/agent/student_agent_requests.json'),
            true,
            512,
            JSON_THROW_ON_ERROR,
        );

        $cases = [];
        foreach ($fixture['requests'] as $index => $request) {
            $label = $request['method'].' '.strtok($request['uri'], '?');
            $cases[$label] = [$index];
        }

        return $cases;
    }

    /**
     * @dataProvider recordedRequests
     */
    public function test_the_agents_own_request_passes_the_signature_gate(int $index): void
    {
        $response = $this->replay($this->fixture['requests'][$index]);

        // Not `assertOk`: what is under test is the gate, and a controller
        // that later answers 404 for its own reasons has still been reached.
        // Pinning the gate separately means a failure here says "the signature
        // did not verify" rather than "something went wrong".
        $this->assertNotContains(
            $response->getStatusCode(),
            [401, 403, 503],
            'the agent\'s own signed request was refused: '.$response->getContent(),
        );
    }

    public function test_every_recorded_request_is_answered_successfully(): void
    {
        foreach ($this->fixture['requests'] as $recorded) {
            $response = $this->replay($recorded);

            $this->assertTrue(
                $response->getStatusCode() >= 200 && $response->getStatusCode() < 300,
                $recorded['method'].' '.$recorded['uri'].' returned '
                    .$response->getStatusCode().': '.$response->getContent(),
            );
        }
    }

    /**
     * The fixture is only worth anything if it is genuinely being verified.
     *
     * Without this, a middleware that had stopped checking signatures
     * altogether would make every test above pass.
     */
    public function test_a_tampered_fixture_is_refused(): void
    {
        $recorded = $this->fixture['requests'][0];
        $recorded['uri'] = str_replace('stu_abc', 'stu_xyz', $recorded['uri']);

        $this->replay($recorded)->assertStatus(401)->assertJson(['error' => 'signature_mismatch']);
    }

    /**
     * A read carrying a body is a different canonical string.
     *
     * This is the original bug, pinned from the other side: if this site ever
     * starts tolerating it, the agent could ship a client that sends `[]` on a
     * GET and nothing would notice until a real deployment.
     */
    public function test_a_read_with_a_body_bolted_on_is_refused(): void
    {
        $recorded = $this->fixture['requests'][0];
        $recorded['body_base64'] = base64_encode('[]');

        $this->replay($recorded)->assertStatus(401)->assertJson(['error' => 'signature_mismatch']);
    }

    /**
     * The alert the agent recorded is idempotent under its own key, replayed
     * byte for byte — which is what a retried Lambda invocation actually does.
     */
    public function test_the_recorded_alert_is_written_once_however_often_it_arrives(): void
    {
        $alert = null;
        foreach ($this->fixture['requests'] as $recorded) {
            if ($recorded['method'] === 'POST') {
                $alert = $recorded;
            }
        }
        $this->assertNotNull($alert, 'the fixture no longer contains a write');

        $first = $this->replay($alert);
        $second = $this->replay($alert);

        $first->assertStatus(201)->assertJson(['idempotent_replay' => false]);
        $second->assertStatus(200)->assertJson(['idempotent_replay' => true]);
        $this->assertSame(
            $first->json('notification_id'),
            $second->json('notification_id'),
        );
        $this->assertSame(1, DB::table('nxt_notifications')->count());
    }
}
