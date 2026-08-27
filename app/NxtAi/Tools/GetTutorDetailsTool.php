<?php

declare(strict_types=1);

namespace App\NxtAi\Tools;

use App\NxtAi\Contracts\Tool;
use App\NxtAi\DTO\ToolResult;
use App\NxtAi\Services\TutorSearchService;
use App\NxtAi\Support\ToolContext;
use App\NxtAi\Support\TutorCardMapper;

/** Return more verified public detail about a tutor referenced earlier. */
final class GetTutorDetailsTool implements Tool
{
    public function __construct(
        private readonly TutorSearchService $search,
        private readonly TutorCardMapper $cardMapper,
    ) {
    }

    public function name(): string
    {
        return 'get_tutor_details';
    }

    public function description(): string
    {
        return 'Fetch fuller public details for one tutor already shown to the parent, using its ref token.';
    }

    public function parameters(): array
    {
        return [
            'type' => 'object',
            'properties' => [
                'ref' => ['type' => 'string', 'description' => 'The tutor ref token from a previous search result'],
            ],
            'required' => ['ref'],
            'additionalProperties' => false,
        ];
    }

    public function handle(array $args, ToolContext $context): ToolResult
    {
        $ref = trim((string) ($args['ref'] ?? ''));
        if ($ref === '') {
            return ToolResult::fail('missing_ref');
        }

        $tutor = $this->search->findByRef($ref);
        if ($tutor === null) {
            return ToolResult::fail('tutor_not_found');
        }

        $card = $this->cardMapper->toCard($tutor);
        $context->rememberTutors([$card]);

        return ToolResult::ok(
            data: ['tutor' => [
                'ref' => $card['ref'] ?? null,
                'name' => $card['name'] ?? null,
                'city' => $card['city'] ?? null,
                'subjects' => $card['subjects'] ?? [],
                'classes' => $card['classes'] ?? [],
                'boards' => $card['boards'] ?? [],
                'teaching_modes' => $card['teaching_modes'] ?? [],
                'experience_label' => $card['experience_label'] ?? null,
                'rating' => $card['rating'] ?? null,
                'review_count' => $card['review_count'] ?? null,
                'fee_label' => $card['fee_label'] ?? null,
                'education' => $card['education'] ?? null,
            ]],
            blocks: [[
                'type' => 'tutor_cards',
                'title' => $card['name'] ?? 'Tutor',
                'items' => [$card],
            ]],
        );
    }
}
