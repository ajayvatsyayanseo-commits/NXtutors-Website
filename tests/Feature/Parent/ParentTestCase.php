<?php

declare(strict_types=1);

namespace Tests\Feature\Parent;

use App\Models\NxtParent;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\RateLimiter;
use Spatie\Permission\Models\Role;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/** Shared set-up for the parent account tests: legacy tables, a pepper, helpers. */
abstract class ParentTestCase extends TestCase
{
    use LegacySchema, RefreshDatabase;

    protected const PEPPER = 'parent-test-pepper';

    protected const SECRET = 'parent-test-signing-key';

    protected function setUp(): void
    {
        parent::setUp();
        $this->createLegacySchema();
        config()->set('agent.hash_pepper', self::PEPPER);
        config()->set('agent.signing_key', self::SECRET);
        config()->set('agent.allowed_agents', ['tutor_match_meta_agent', 'lead_intake_agent', 'demo_command_center_agent']);
        config()->set('nxt-ai.whatsapp_number', '+91 78360 34313');
        RateLimiter::clear('parent-code-ip:127.0.0.1');
    }

    protected function makeParent(array $attributes = []): NxtParent
    {
        $parent = new NxtParent(array_merge([
            'name' => 'Priya Sharma',
            'phone' => '9876543210',
            'email' => null,
            'status' => 'active',
        ], $attributes));
        if (array_key_exists('password', $attributes)) {
            $parent->password = $attributes['password'];
        }
        $parent->save();

        return $parent;
    }

    protected function makeStudent(string $userId = 'S-501', string $name = 'Aarav Sharma', string $phone = '9811122233'): void
    {
        DB::table('register')->insert([
            'user_id' => $userId, 'name' => $name, 'phone' => $phone, 'email' => strtolower($userId).'@example.com',
            'join_as' => 'student', 'status' => 't', 'for_class' => '8', 'city' => 'Gurugram',
        ]);
    }

    protected function superAdmin(): User
    {
        $role = Role::findOrCreate('super_admin', 'web');
        $user = User::factory()->create();
        $user->assignRole($role);

        return $user;
    }

    /** @return array<string,string> */
    protected function signed(string $method, string $path, string $body = '', string $agent = 'lead_intake_agent'): array
    {
        $timestamp = time();
        $canonical = implode("\n", [$method, $path, (string) $timestamp, hash('sha256', $body)]);

        return [
            'X-Nxt-Signature' => 'v1='.hash_hmac('sha256', $canonical, self::SECRET),
            'X-Nxt-Timestamp' => (string) $timestamp,
            'X-Nxt-Agent' => $agent,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    /** Ask the signed endpoint for a code, as Lead Intake does; returns the JSON. */
    protected function requestCode(string $phone, string $agent = 'lead_intake_agent'): array
    {
        $path = '/internal/agent/parent-login/code';
        $body = json_encode(['phone' => $phone]);

        return $this->call('POST', $path, [], [], [], $this->transformHeadersToServerVars($this->signed('POST', $path, $body, $agent)), $body)
            ->assertOk()
            ->json();
    }

    protected function codeFrom(array $reply): string
    {
        preg_match('/\b(\d{6})\b/', $reply['message'], $m);

        return $m[1];
    }
}
