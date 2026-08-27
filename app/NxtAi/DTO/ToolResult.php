<?php

declare(strict_types=1);

namespace App\NxtAi\DTO;

/**
 * Uniform result returned by every NXT AI tool.
 *
 * - `data` is sent back to the model as the tool output (public data only).
 * - `blocks` are Laravel-built UI blocks appended to the final response
 *   (the model never fabricates these).
 */
final class ToolResult
{
    /**
     * @param array<string,mixed>       $data
     * @param array<int,array<string,mixed>> $blocks
     * @param array<int,string>         $quickReplies
     */
    public function __construct(
        public readonly bool $ok,
        public readonly array $data = [],
        public readonly array $blocks = [],
        public readonly array $quickReplies = [],
        public readonly ?string $error = null,
    ) {
    }

    public static function ok(array $data = [], array $blocks = [], array $quickReplies = []): self
    {
        return new self(true, $data, $blocks, $quickReplies);
    }

    public static function fail(string $error, array $data = []): self
    {
        return new self(false, $data, [], [], $error);
    }

    /** Payload handed to the model as the tool's output. */
    public function forModel(): array
    {
        return $this->ok
            ? ['ok' => true] + $this->data
            : ['ok' => false, 'error' => $this->error];
    }
}
