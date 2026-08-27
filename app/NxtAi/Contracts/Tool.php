<?php

declare(strict_types=1);

namespace App\NxtAi\Contracts;

use App\NxtAi\DTO\ToolResult;
use App\NxtAi\Support\ToolContext;

/**
 * A single, narrow, allow-listed capability the agent may invoke.
 *
 * The model may only ever call tools registered in the ToolRegistry. Laravel
 * validates every argument, executes the work, strips private data, and builds
 * UI blocks. There is deliberately no generic "run SQL" / "read table" tool.
 */
interface Tool
{
    /** Stable snake_case name exposed to the model (must match the JSON schema). */
    public function name(): string;

    /** One-line description the model sees when deciding whether to call it. */
    public function description(): string;

    /**
     * JSON Schema for arguments (OpenAI function-tool `parameters`).
     *
     * @return array<string,mixed>
     */
    public function parameters(): array;

    /**
     * Execute with already-decoded arguments. Implementations MUST validate
     * their own arguments defensively and never trust the model.
     *
     * @param array<string,mixed> $args
     */
    public function handle(array $args, ToolContext $context): ToolResult;
}
