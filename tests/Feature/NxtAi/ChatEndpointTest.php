<?php

declare(strict_types=1);

namespace Tests\Feature\NxtAi;

use App\NxtAi\Contracts\OpenAiChat;
use App\NxtAi\Models\NxtAiConversation;
use App\NxtAi\OpenAI\FakeOpenAiChat;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Feature tests for POST /nxt-ai/chat. Requires the pdo_sqlite driver (the repo
 * phpunit.xml uses sqlite :memory:). The OpenAI call is faked — no network.
 */
class ChatEndpointTest extends TestCase
{
    use RefreshDatabase;

    private function fakeAi(): FakeOpenAiChat
    {
        $fake = new FakeOpenAiChat();
        $this->app->instance(OpenAiChat::class, $fake);

        return $fake;
    }

    public function test_empty_message_is_rejected(): void
    {
        $this->postJson('/nxt-ai/chat', ['message' => ''])
            ->assertStatus(422)
            ->assertJsonValidationErrorFor('message');
    }

    public function test_disabled_returns_503(): void
    {
        config()->set('nxt-ai.enabled', false);

        $this->postJson('/nxt-ai/chat', ['message' => 'hello'])
            ->assertStatus(503)
            ->assertJson(['success' => false]);
    }

    public function test_site_content_flow_returns_blocks_and_reply(): void
    {
        $this->fakeAi()
            ->pushToolCall('search_site_content', ['query' => 'fees'])
            ->pushText('Tutor fees usually range between ₹800 and ₹2,500.');

        $response = $this->postJson('/nxt-ai/chat', ['message' => 'what are the fees?'])
            ->assertStatus(200)
            ->assertJson(['success' => true]);

        $data = $response->json();
        $this->assertNotEmpty($data['conversation_id']);
        $this->assertStringContainsString('₹', $data['reply']);
        $this->assertSame('website_information', $data['blocks'][0]['type']);
        $this->assertNotEmpty($data['sources']);
    }

    public function test_conversation_ownership_is_enforced(): void
    {
        // A conversation owned by a logged-in user_id...
        $others = NxtAiConversation::create([
            'user_id' => '9999',
            'status' => 'active',
            'last_activity_at' => now(),
        ]);

        $this->fakeAi()->pushText('hi');

        // ...requested by an anonymous guest must be refused (no IDOR).
        $this->postJson('/nxt-ai/chat', [
            'message' => 'show me that chat',
            'conversation_id' => $others->uid,
        ])->assertStatus(403);
    }

    public function test_per_minute_rate_limit(): void
    {
        config()->set('nxt-ai.rate.per_minute', 1);
        $this->fakeAi()->pushText('first')->pushText('second');

        $this->postJson('/nxt-ai/chat', ['message' => 'one'])->assertStatus(200);
        $this->postJson('/nxt-ai/chat', ['message' => 'two'])->assertStatus(429);
    }

    public function test_openai_failure_is_friendly(): void
    {
        $this->fakeAi()->pushFailure('OpenAI rate limit.', 429);

        $this->postJson('/nxt-ai/chat', ['message' => 'top tutors'])
            ->assertStatus(503)
            ->assertJson(['success' => false]);
    }
}
