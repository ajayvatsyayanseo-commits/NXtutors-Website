<?php

declare(strict_types=1);

namespace App\NxtAi\DTO;

/** Final outcome of one agent run, ready to shape into the API response. */
final class AgentResult
{
    /**
     * @param array<int,array<string,mixed>> $blocks
     * @param array<int,string> $quickReplies
     * @param array<string,mixed> $usage
     */
    public function __construct(
        public readonly bool $ok,
        public readonly string $reply,
        public readonly array $blocks = [],
        public readonly array $quickReplies = [],
        public readonly array $usage = [],
        public readonly ?string $responseId = null,
        public readonly ?string $errorType = null,
        public readonly ?int $httpStatus = null,
    ) {
    }

    public static function ok(string $reply, array $blocks = [], array $quickReplies = [], array $usage = [], ?string $responseId = null): self
    {
        return new self(true, $reply, $blocks, $quickReplies, $usage, $responseId);
    }

    public static function error(string $reply, string $errorType, int $httpStatus): self
    {
        return new self(false, $reply, [], [], [], null, $errorType, $httpStatus);
    }
}
