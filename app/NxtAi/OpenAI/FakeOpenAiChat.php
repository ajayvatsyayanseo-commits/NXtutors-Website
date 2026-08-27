<?php

declare(strict_types=1);

namespace App\NxtAi\OpenAI;

use App\NxtAi\Contracts\OpenAiChat;

/**
 * Scriptable in-memory OpenAiChat for tests — no network. Queue the turns the
 * "model" should return (tool-call turns, then a final text turn). Records the
 * inputs it was called with so tests can assert what the agent sent.
 */
final class FakeOpenAiChat implements OpenAiChat
{
    /** @var array<int,OpenAiTurn> */
    private array $queue = [];

    /** @var array<int,array{instructions:string,input:array,tools:array}> */
    public array $calls = [];

    public function pushToolCall(string $name, array $arguments, string $callId = 'call_1'): self
    {
        $this->queue[] = new OpenAiTurn(
            ok: true,
            outputItems: [[
                'type' => 'function_call',
                'call_id' => $callId,
                'name' => $name,
                'arguments' => json_encode($arguments),
            ]],
            toolCalls: [['call_id' => $callId, 'name' => $name, 'arguments' => $arguments]],
            responseId: 'resp_fake_'.count($this->queue),
        );

        return $this;
    }

    public function pushText(string $text): self
    {
        $this->queue[] = new OpenAiTurn(
            ok: true,
            text: $text,
            outputItems: [['type' => 'message', 'content' => [['type' => 'output_text', 'text' => $text]]]],
            responseId: 'resp_fake_'.count($this->queue),
        );

        return $this;
    }

    public function pushFailure(string $error, ?int $status = null): self
    {
        $this->queue[] = OpenAiTurn::failure($error, $status);

        return $this;
    }

    public function respond(string $instructions, array $input, array $tools, int $maxOutputTokens): OpenAiTurn
    {
        $this->calls[] = ['instructions' => $instructions, 'input' => $input, 'tools' => $tools];

        return array_shift($this->queue) ?? OpenAiTurn::failure('FakeOpenAiChat queue empty.');
    }
}
