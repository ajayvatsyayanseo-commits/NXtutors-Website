<?php

declare(strict_types=1);

namespace App\NxtAi\Agent;

use App\NxtAi\Contracts\OpenAiChat;
use App\NxtAi\DTO\AgentResult;
use App\NxtAi\Exceptions\NxtAiException;
use App\NxtAi\Prompts\SystemPrompt;
use App\NxtAi\Support\ToolContext;
use App\NxtAi\Support\ToolRegistry;

/**
 * The constrained tool-calling loop. OpenAI decides WHICH allow-listed tool to
 * call and phrases the answer; Laravel executes every tool, ranks tutors, and
 * builds UI blocks. Bounded by max_tool_rounds; fails safe.
 */
final class NxtAiAgent
{
    public function __construct(
        private readonly OpenAiChat $client,
        private readonly ToolRegistry $tools,
    ) {
    }

    /**
     * @param array<int,array<string,mixed>> $history prior Responses API input items
     */
    public function run(string $userMessage, array $history, ToolContext $context): AgentResult
    {
        $instructions = SystemPrompt::build();
        $toolDefs = $this->tools->definitions();
        $maxOut = (int) config('nxt-ai.max_output_tokens', 700);
        $maxRounds = max(1, (int) config('nxt-ai.max_tool_rounds', 4));

        $input = array_merge($history, [[
            'role' => 'user',
            'content' => $userMessage,
        ]]);

        $blocks = [];
        $quickReplies = [];
        $usage = [];
        $lastResponseId = null;

        for ($round = 0; $round < $maxRounds; $round++) {
            try {
                $turn = $this->client->respond($instructions, $input, $toolDefs, $maxOut);
            } catch (NxtAiException $e) {
                return AgentResult::error(
                    'NXT AI is not fully set up yet. Please try again shortly.',
                    'not_configured',
                    503
                );
            }

            if (! $turn->ok) {
                return AgentResult::error($this->friendlyError($turn->status), 'openai_'.($turn->status ?? 'error'), 503);
            }

            $usage = $turn->usage ?: $usage;
            $lastResponseId = $turn->responseId ?? $lastResponseId;

            if (! $turn->hasToolCalls()) {
                $reply = $turn->text !== '' ? $turn->text : $this->fallbackReply($blocks);

                return AgentResult::ok($reply, $blocks, $this->dedupe($quickReplies), $usage, $lastResponseId);
            }

            // Re-append the model's own output (incl. its function_call items).
            $input = array_merge($input, $turn->outputItems);

            foreach ($turn->toolCalls as $call) {
                $result = $this->tools->execute($call['name'], $call['arguments'], $context);

                $input[] = [
                    'type' => 'function_call_output',
                    'call_id' => $call['call_id'],
                    'output' => json_encode($result->forModel(), JSON_UNESCAPED_UNICODE),
                ];

                foreach ($result->blocks as $b) {
                    $blocks[] = $b;
                }
                foreach ($result->quickReplies as $qr) {
                    $quickReplies[] = $qr;
                }
            }
        }

        // Tool-round budget exhausted — return whatever UI we gathered, safely.
        return AgentResult::ok(
            $this->fallbackReply($blocks),
            $blocks,
            $this->dedupe($quickReplies),
            $usage,
            $lastResponseId
        );
    }

    private function fallbackReply(array $blocks): string
    {
        return $blocks !== []
            ? "Here's what I found for you."
            : "I can help you find tutors or answer questions about NXTutors. Could you tell me the city, class and subject?";
    }

    private function friendlyError(?int $status): string
    {
        return match ($status) {
            429 => 'NXT AI is busy right now. Please try again in a moment.',
            401 => 'NXT AI is not fully set up yet. Please try again shortly.',
            default => "I couldn't complete that just now. Please try again.",
        };
    }

    private function dedupe(array $items): array
    {
        return array_values(array_unique(array_filter($items)));
    }
}
