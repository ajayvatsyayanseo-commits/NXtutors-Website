<?php

declare(strict_types=1);

namespace App\NxtAi\Tools;

use App\NxtAi\Contracts\Tool;
use App\NxtAi\DTO\ToolResult;
use App\NxtAi\Services\SiteContentService;
use App\NxtAi\Support\ToolContext;

/** Answer questions about NXTutors using canonical published site content. */
final class SearchSiteContentTool implements Tool
{
    public function __construct(private readonly SiteContentService $content)
    {
    }

    public function name(): string
    {
        return 'search_site_content';
    }

    public function description(): string
    {
        return 'Answer questions about NXTutors itself — fees, demo classes, timings, teaching modes, '
            .'subjects/classes, how to choose a tutor, policies and general "about" questions.';
    }

    public function parameters(): array
    {
        return [
            'type' => 'object',
            'properties' => [
                'query' => ['type' => 'string', 'description' => 'The parent question about NXTutors'],
            ],
            'required' => ['query'],
            'additionalProperties' => false,
        ];
    }

    public function handle(array $args, ToolContext $context): ToolResult
    {
        $query = trim((string) ($args['query'] ?? ''));
        $items = $this->content->search($query !== '' ? $query : 'about nxtutors');

        if ($items === []) {
            return ToolResult::ok(
                data: ['results' => [], 'note' => 'No canonical page matched.'],
            );
        }

        return ToolResult::ok(
            data: ['results' => $items],
            blocks: [[
                'type' => 'website_information',
                'title' => 'From NXTutors',
                'items' => $items,
            ]],
        );
    }
}
