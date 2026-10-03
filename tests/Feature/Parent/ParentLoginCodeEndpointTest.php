<?php

declare(strict_types=1);

namespace Tests\Feature\Parent;

use App\Models\NxtParentLoginCode;
use App\NxtAi\Support\AgentPseudonymiser;
use App\Services\ParentLogin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

/**
 * POST /internal/agent/parent-login/code: Lead Intake asks for a parent's
 * WhatsApp login code and sends our reply as its WhatsApp message.
 */
final class ParentLoginCodeEndpointTest extends ParentTestCase
{
    private const PATH = '/internal/agent/parent-login/code';

    public function test_an_unsigned_request_is_refused(): void
    {
        $this->makeParent();
        $this->postJson(self::PATH, ['phone' => '9876543210'])->assertStatus(401);
        $this->assertSame(0, NxtParentLoginCode::count());
    }

    public function test_a_wrong_signature_is_refused(): void
    {
        $this->makeParent();
        $body = json_encode(['phone' => '9876543210']);
        $headers = $this->signed('POST', self::PATH, $body);
        $headers['X-Nxt-Signature'] = 'v1='.str_repeat('0', 64);

        $this->call('POST', self::PATH, [], [], [], $this->transformHeadersToServerVars($headers), $body)->assertStatus(401);
        $this->assertSame(0, NxtParentLoginCode::count());
    }

    public function test_only_lead_intake_may_ask_for_a_code(): void
    {
        $this->makeParent();
        $body = json_encode(['phone' => '9876543210']);
        $headers = $this->signed('POST', self::PATH, $body, 'demo_command_center_agent');

        $this->call('POST', self::PATH, [], [], [], $this->transformHeadersToServerVars($headers), $body)
            ->assertStatus(403)->assertJson(['error' => 'unknown_agent']);
        $this->assertSame(0, NxtParentLoginCode::count());
    }

    public function test_a_known_parent_gets_a_six_digit_code_in_the_message(): void
    {
        $this->makeParent();

        $reply = $this->requestCode('919876543210');

        $this->assertSame('sent', $reply['status']);
        $this->assertMatchesRegularExpression(
            '/^Your NXtutors login code is \d{6}\. It expires in 10 minutes\. Never share it with anyone, including our team\.$/',
            $reply['message'],
        );
    }

    public function test_only_the_hash_of_the_code_is_stored(): void
    {
        $this->makeParent();
        $code = $this->codeFrom($this->requestCode('9876543210'));

        $row = NxtParentLoginCode::sole();
        $this->assertNotSame($code, $row->code_hash);
        $this->assertStringNotContainsString($code, json_encode($row->getAttributes()));
        $this->assertTrue(Hash::check($code, $row->code_hash));
        $this->assertSame(AgentPseudonymiser::fromConfig()->phoneHash('9876543210'), $row->phone_hash);
        $this->assertEqualsWithDelta(now()->addMinutes(10)->timestamp, $row->expires_at->timestamp, 5);
        $this->assertSame(0, $row->attempts);
        $this->assertNull($row->used_at);
    }

    public function test_the_code_is_never_logged(): void
    {
        $this->makeParent();
        $logged = [];
        Log::listen(function ($event) use (&$logged) {
            $logged[] = $event->message.' '.json_encode($event->context);
        });

        $code = $this->codeFrom($this->requestCode('9876543210'));

        foreach ($logged as $line) {
            $this->assertStringNotContainsString($code, $line);
        }
    }

    public function test_an_unknown_number_gets_the_no_account_reply(): void
    {
        $reply = $this->requestCode('9000000001');

        $this->assertSame([
            'status' => 'no_account',
            'message' => "We couldn't find a family account for this number. If your child studies with NXtutors, reply here and our team will set it up.",
        ], $reply);
        $this->assertSame(0, NxtParentLoginCode::count());
    }

    public function test_an_inactive_parent_gets_no_code(): void
    {
        $this->makeParent(['status' => 'inactive']);

        $this->assertSame('no_account', $this->requestCode('9876543210')['status']);
        $this->assertSame(0, NxtParentLoginCode::count());
    }

    public function test_a_missing_phone_is_a_422(): void
    {
        $body = json_encode(['number' => '9876543210']);
        $this->call('POST', self::PATH, [], [], [], $this->transformHeadersToServerVars($this->signed('POST', self::PATH, $body)), $body)
            ->assertStatus(422);
    }

    public function test_at_most_five_codes_per_number_per_hour(): void
    {
        $this->makeParent();

        for ($i = 0; $i < ParentLogin::MAX_CODES_PER_HOUR; $i++) {
            $this->assertSame('sent', $this->requestCode('9876543210')['status']);
        }
        $reply = $this->requestCode('9876543210');

        $this->assertSame('too_many', $reply['status']);
        $this->assertNotEmpty($reply['message']);
        $this->assertSame(5, NxtParentLoginCode::count());

        // An hour later the number may ask again.
        $this->travel(61)->minutes();
        $this->assertSame('sent', $this->requestCode('9876543210')['status']);
    }
}
