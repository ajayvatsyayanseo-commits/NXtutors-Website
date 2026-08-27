<?php

declare(strict_types=1);

namespace App\NxtAi\Tools;

use App\NxtAi\Contracts\Tool;
use App\NxtAi\DTO\ToolResult;
use App\NxtAi\Support\ToolContext;

/** Canonical fee/pricing explanation (config-sourced, never fabricated). */
final class GetPricingInfoTool implements Tool
{
    public function name(): string
    {
        return 'get_pricing_info';
    }

    public function description(): string
    {
        return 'Return the current canonical NXTutors fee/pricing explanation.';
    }

    public function parameters(): array
    {
        return ['type' => 'object', 'properties' => (object) [], 'additionalProperties' => false];
    }

    public function handle(array $args, ToolContext $context): ToolResult
    {
        $p = (array) config('nxt-ai.pricing', []);
        $summary = (string) ($p['summary'] ?? 'Tutor fees vary by class, subject and mode.');

        return ToolResult::ok(
            data: [
                'summary' => $summary,
                'range_min' => $p['range_min'] ?? null,
                'range_max' => $p['range_max'] ?? null,
                'currency' => $p['currency'] ?? '₹',
                'note' => $p['note'] ?? null,
            ],
            blocks: [[
                'type' => 'website_information',
                'title' => 'Tutor Fees',
                'items' => [[
                    'title' => 'Tutor Fees Overview',
                    'type' => 'Fees',
                    'snippet' => $summary.' '.(string) ($p['note'] ?? ''),
                    'url' => '/tutors',
                ]],
            ]],
        );
    }
}
