<?php

declare(strict_types=1);

namespace Tests\Unit\NxtAi;

use App\NxtAi\Agent\NxtAiAgent;
use App\NxtAi\Contracts\Tool;
use App\NxtAi\DTO\ToolResult;
use App\NxtAi\Models\NxtAiConversation;
use App\NxtAi\OpenAI\FakeOpenAiChat;
use App\NxtAi\Support\ToolContext;
use App\NxtAi\Support\ToolRegistry;
use Tests\TestCase;

class NxtAiAgentTest extends TestCase
{
    private function stubTool(): Tool
    {
        return new class implements Tool {
            public function name(): string
            {
                return 'demo_tool';
            }

            public function description(): string
            {
                return 'stub';
            }

            public function parameters(): array
            {
                return ['type' => 'object', 'properties' => (object) []];
            }

            public function handle(array $args, ToolContext $context): ToolResult
            {
                return ToolResult::ok(
                    data: ['echo' => $args],
                    blocks: [['type' => 'tutor_cards', 'title' => 'X', 'items' => [['ref' => 'r1', 'name' => 'A']]]],
                    quickReplies: ['More'],
                );
            }
        };
    }

    private function context(): ToolContext
    {
        // Mock avoids any DB touch — this is a pure unit test of the agent loop.
        $conversation = \Mockery::mock(NxtAiConversation::class);

        return new ToolContext($conversation, null, true);
    }

    public function test_runs_tool_then_returns_final_text_with_blocks(): void
    {
        $fake = (new FakeOpenAiChat())
            ->pushToolCall('demo_tool', ['q' => 1])
            ->pushText('Here are your matches.');

        $registry = new ToolRegistry([$this->stubTool()]);
        $agent = new NxtAiAgent($fake, $registry);

        $result = $agent->run('find tutors', [], $this->context());

        $this->assertTrue($result->ok);
        $this->assertSame('Here are your matches.', $result->reply);
        $this->assertCount(1, $result->blocks);
        $this->assertContains('More', $result->quickReplies);

        // Second model call must have received the function_call_output.
        $secondInput = $fake->calls[1]['input'];
        $types = array_column($secondInput, 'type');
        $this->assertContains('function_call_output', $types);
    }

    public function test_unknown_tool_does_not_crash(): void
    {
        $fake = (new FakeOpenAiChat())
            ->pushToolCall('nonexistent_tool', [])
            ->pushText('Handled gracefully.');

        $agent = new NxtAiAgent($fake, new ToolRegistry([$this->stubTool()]));
        $result = $agent->run('hi', [], $this->context());

        $this->assertTrue($result->ok);
        $this->assertSame('Handled gracefully.', $result->reply);
    }

    public function test_openai_failure_returns_error_result(): void
    {
        $fake = (new FakeOpenAiChat())->pushFailure('OpenAI rate limit.', 429);
        $agent = new NxtAiAgent($fake, new ToolRegistry([$this->stubTool()]));

        $result = $agent->run('hi', [], $this->context());

        $this->assertFalse($result->ok);
        $this->assertSame(503, $result->httpStatus);
    }

    public function test_stops_after_max_tool_rounds(): void
    {
        config()->set('nxt-ai.max_tool_rounds', 2);
        // Always returns a tool call → never a final text.
        $fake = (new FakeOpenAiChat())
            ->pushToolCall('demo_tool', [])
            ->pushToolCall('demo_tool', [])
            ->pushToolCall('demo_tool', []);

        $agent = new NxtAiAgent($fake, new ToolRegistry([$this->stubTool()]));
        $result = $agent->run('loop', [], $this->context());

        $this->assertTrue($result->ok); // fails safe with gathered blocks
        $this->assertCount(2, $fake->calls); // capped at 2 rounds
    }
}
