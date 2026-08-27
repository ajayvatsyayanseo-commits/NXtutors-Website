<?php

declare(strict_types=1);

namespace App\NxtAi\OpenAI;

/**
 * One model turn from the Responses API, normalized.
 *
 * `outputItems` is the raw `output` array — re-appended to the next request's
 * input so the model sees its own tool calls (we run store=false, no remote state).
 */
final class OpenAiTurn
{
    /**
     * @param array<int,array<string,mixed>> $outputItems raw API output items
     * @param array<int,array{call_id:string,name:string,arguments:array}> $toolCalls
     * @param array<string,mixed> $usage
     */
    public function __construct(
        public readonly bool $ok,
        public readonly string $text = '',
        public readonly array $outputItems = [],
        public readonly array $toolCalls = [],
        public readonly ?string $responseId = null,
        public readonly array $usage = [],
        public readonly ?string $error = null,
        public readonly ?int $status = null,
    ) {
    }

    public function hasToolCalls(): bool
    {
        return $this->toolCalls !== [];
    }

    public static function failure(string $error, ?int $status = null): self
    {
        return new self(false, error: $error, status: $status);
    }
}
