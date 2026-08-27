<?php

declare(strict_types=1);

namespace App\NxtAi\Tools;

use App\NxtAi\Contracts\Tool;
use App\NxtAi\DTO\ToolResult;
use App\NxtAi\Services\TutorSearchService;
use App\NxtAi\Support\ToolContext;
use App\NxtAi\Support\TutorCardMapper;

/** Compare 2–4 tutors already shown, on verified public fields only. */
final class CompareTutorsTool implements Tool
{
    public function __construct(
        private readonly TutorSearchService $search,
        private readonly TutorCardMapper $cardMapper,
    ) {
    }

    public function name(): string
    {
        return 'compare_tutors';
    }

    public function description(): string
    {
        return 'Compare 2 to 4 tutors already shown in this conversation, by their ref tokens, '
            .'on subject/class/board fit, location, teaching mode, experience, rating, reviews and fee.';
    }

    public function parameters(): array
    {
        return [
            'type' => 'object',
            'properties' => [
                'refs' => [
                    'type' => 'array',
                    'items' => ['type' => 'string'],
                    'description' => 'Ref tokens of the tutors to compare (2-4)',
                ],
            ],
            'required' => ['refs'],
            'additionalProperties' => false,
        ];
    }

    public function handle(array $args, ToolContext $context): ToolResult
    {
        $refs = array_values(array_filter(array_map('strval', (array) ($args['refs'] ?? []))));
        // Fall back to the most recent tutors if the model passed too few refs.
        if (count($refs) < 2 && $context->referencedTutors !== []) {
            $refs = array_values(array_filter(array_map(
                static fn ($c) => $c['ref'] ?? null,
                array_slice($context->referencedTutors, 0, 3)
            )));
        }
        $refs = array_slice(array_unique($refs), 0, 4);

        if (count($refs) < 2) {
            return ToolResult::fail('need_two_tutors');
        }

        $tutors = $this->search->findManyByRefs($refs);
        if (count($tutors) < 2) {
            return ToolResult::fail('tutors_not_found');
        }

        $cards = $this->cardMapper->toCards($tutors);

        return ToolResult::ok(
            data: [
                'tutors' => array_map(static fn ($c) => [
                    'ref' => $c['ref'] ?? null,
                    'name' => $c['name'] ?? null,
                    'subjects' => $c['subjects'] ?? [],
                    'boards' => $c['boards'] ?? [],
                    'classes' => $c['classes'] ?? [],
                    'teaching_modes' => $c['teaching_modes'] ?? [],
                    'experience_label' => $c['experience_label'] ?? null,
                    'rating' => $c['rating'] ?? null,
                    'review_count' => $c['review_count'] ?? null,
                    'fee_label' => $c['fee_label'] ?? null,
                    'city' => $c['city'] ?? null,
                ], $cards),
            ],
            blocks: [[
                'type' => 'tutor_comparison',
                'title' => 'Tutor comparison',
                'fields' => ['subjects', 'boards', 'classes', 'teaching_modes', 'experience_label', 'rating', 'review_count', 'fee_label', 'city'],
                'items' => $cards,
            ]],
        );
    }
}
