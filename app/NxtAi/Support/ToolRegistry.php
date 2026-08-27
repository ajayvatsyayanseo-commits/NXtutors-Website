<?php

declare(strict_types=1);

namespace App\NxtAi\Support;

use App\NxtAi\Contracts\Tool;
use App\NxtAi\DTO\ToolResult;

/**
 * The allowlist of tools the agent may call. If a tool name isn't registered
 * here, it cannot run — the model can never invent a callable capability.
 */
final class ToolRegistry
{
    /** @var array<string,Tool> */
    private array $tools = [];

    /** @param iterable<Tool> $tools */
    public function __construct(iterable $tools = [])
    {
        foreach ($tools as $tool) {
            $this->register($tool);
        }
    }

    public function register(Tool $tool): void
    {
        $this->tools[$tool->name()] = $tool;
    }

    public function has(string $name): bool
    {
        return isset($this->tools[$name]);
    }

    /** OpenAI Responses API function-tool definitions for every registered tool. */
    public function definitions(): array
    {
        $defs = [];
        foreach ($this->tools as $tool) {
            $defs[] = [
                'type' => 'function',
                'name' => $tool->name(),
                'description' => $tool->description(),
                'parameters' => $tool->parameters(),
            ];
        }

        return $defs;
    }

    public function execute(string $name, array $args, ToolContext $context): ToolResult
    {
        if (! $this->has($name)) {
            return ToolResult::fail('unknown_tool');
        }

        try {
            return $this->tools[$name]->handle($args, $context);
        } catch (\Throwable $e) {
            // Never surface internal errors to the model/user.
            return ToolResult::fail('tool_execution_error');
        }
    }
}
