<?php

declare(strict_types=1);

namespace App\NxtAi\Tools;

use App\NxtAi\Contracts\Tool;
use App\NxtAi\DTO\ToolResult;
use App\NxtAi\Services\SiteContentService;
use App\NxtAi\Support\ToolContext;

/** Explain how demo classes work, from canonical site content. */
final class GetDemoClassInfoTool implements Tool
{
    public function __construct(private readonly SiteContentService $content)
    {
    }

    public function name(): string
    {
        return 'get_demo_class_info';
    }

    public function description(): string
    {
        return 'Explain how NXTutors demo classes work (booking a demo before finalizing a tutor).';
    }

    public function parameters(): array
    {
        return ['type' => 'object', 'properties' => (object) [], 'additionalProperties' => false];
    }

    public function handle(array $args, ToolContext $context): ToolResult
    {
        $doc = $this->content->get('demo') ?? [
            'title' => 'Demo Classes',
            'type' => 'FAQ',
            'snippet' => 'You can book a demo class with a tutor before finalizing.',
            'url' => '/tutors',
        ];

        return ToolResult::ok(
            data: ['info' => $doc['snippet']],
            blocks: [[
                'type' => 'website_information',
                'title' => 'Demo Classes',
                'items' => [$doc],
            ]],
            quickReplies: ['Book a demo', 'Top 3 tutors near me'],
        );
    }
}
