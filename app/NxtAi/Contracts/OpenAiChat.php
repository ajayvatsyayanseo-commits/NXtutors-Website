<?php

declare(strict_types=1);

namespace App\NxtAi\Contracts;

use App\NxtAi\OpenAI\OpenAiTurn;

/**
 * Abstraction over the OpenAI Responses API so the agent can be driven by a
 * fake in tests (no network). One call = one model turn.
 */
interface OpenAiChat
{
    /**
     * @param array<int,array<string,mixed>> $input   Responses API input items
     * @param array<int,array<string,mixed>> $tools   function-tool definitions
     */
    public function respond(string $instructions, array $input, array $tools, int $maxOutputTokens): OpenAiTurn;
}
