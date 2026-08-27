<?php

declare(strict_types=1);

namespace App\NxtAi\Tools;

use App\NxtAi\Contracts\Tool;
use App\NxtAi\DTO\ToolResult;
use App\NxtAi\DTO\TutorSearchCriteria;
use App\NxtAi\Services\TutorSearchService;
use App\NxtAi\Support\ToolContext;

/** Search + deterministically rank active public tutors from the database. */
final class SearchTutorsTool implements Tool
{
    public function __construct(private readonly TutorSearchService $search)
    {
    }

    public function name(): string
    {
        return 'search_tutors';
    }

    public function description(): string
    {
        return 'Search and rank NXTutors tutors from the database by city, area, pincode, '
            .'subject, class, board, teaching mode (online/home), gender, experience, fee and rating. '
            .'Use this whenever the parent wants tutor recommendations or matches.';
    }

    public function parameters(): array
    {
        return [
            'type' => 'object',
            'properties' => [
                'city' => ['type' => 'string', 'description' => 'City name, e.g. Gurgaon/Gurugram'],
                'area' => ['type' => 'string', 'description' => 'Locality/sector within the city'],
                'pincode' => ['type' => 'string', 'description' => '6-digit pincode'],
                'subject' => ['type' => 'string', 'description' => 'Subject, e.g. Mathematics, Physics'],
                'class_level' => ['type' => 'string', 'description' => 'Class/grade, e.g. Class 10'],
                'board' => ['type' => 'string', 'description' => 'Board, e.g. CBSE, ICSE'],
                'teaching_mode' => ['type' => 'string', 'enum' => ['online', 'home', 'either']],
                'gender' => ['type' => 'string', 'enum' => ['male', 'female']],
                'minimum_experience' => ['type' => 'integer', 'description' => 'Minimum years of experience'],
                'maximum_fee' => ['type' => 'integer', 'description' => 'Maximum fee in rupees'],
                'minimum_rating' => ['type' => 'number', 'description' => 'Minimum average rating 0-5'],
                'limit' => ['type' => 'integer', 'description' => 'How many tutors to return (1-6, default 3)'],
            ],
            'additionalProperties' => false,
        ];
    }

    public function handle(array $args, ToolContext $context): ToolResult
    {
        $criteria = TutorSearchCriteria::fromToolArgs($args, (int) config('nxt-ai.max_results', 6));

        try {
            $result = $this->search->search($criteria);
        } catch (\Throwable $e) {
            return ToolResult::fail('tutor_search_failed');
        }

        $cards = $result['cards'];

        if ($cards === []) {
            return ToolResult::ok(
                data: [
                    'count' => 0,
                    'criteria' => $criteria->toArray(),
                    'message' => 'No active tutors matched these exact filters.',
                ],
                blocks: [[
                    'type' => 'no_results',
                    'title' => 'No exact matches',
                    'message' => 'I could not find active tutors matching all of those filters right now.',
                    'suggestion' => $this->relaxationHint($criteria),
                ]],
                quickReplies: $this->relaxQuickReplies($criteria),
            );
        }

        $context->rememberTutors($cards);

        return ToolResult::ok(
            data: [
                'count' => count($cards),
                'criteria' => $criteria->toArray(),
                // Compact list for the model to reference by position/ref (no private data).
                'tutors' => array_map(static fn ($c, $i) => [
                    'index' => $i + 1,
                    'ref' => $c['ref'] ?? null,
                    'name' => $c['name'] ?? null,
                    'city' => $c['city'] ?? null,
                    'subjects' => $c['subjects'] ?? [],
                    'fee_label' => $c['fee_label'] ?? null,
                    'rating' => $c['rating'] ?? null,
                    'match_score' => $c['match_score'] ?? null,
                    'match_reasons' => $c['match_reasons'] ?? [],
                ], $cards, array_keys($cards)),
            ],
            blocks: [[
                'type' => 'tutor_cards',
                'title' => $this->cardsTitle($criteria),
                'items' => $cards,
            ]],
            quickReplies: array_values(array_filter([
                $criteria->subject === null ? 'Class 10 Maths' : null,
                $criteria->teachingMode === null ? 'Home tutors only' : null,
                $criteria->maxFee === null ? 'Under ₹1,000' : null,
                count($cards) >= 2 ? 'Compare these tutors' : null,
            ])),
        );
    }

    private function cardsTitle(TutorSearchCriteria $c): string
    {
        $where = $c->city ? ' in '.$c->city : ($c->pincode ? ' near '.$c->pincode : '');
        $what = $c->subject ? $c->subject.' tutors' : 'tutor matches';

        return 'Top '.ucfirst($what).$where;
    }

    private function relaxationHint(TutorSearchCriteria $c): string
    {
        if ($c->maxFee !== null) {
            return 'Try increasing the budget slightly, or removing the fee limit.';
        }
        if ($c->gender !== null) {
            return 'Try removing the gender preference to see more tutors.';
        }
        if ($c->board !== null) {
            return 'Try without the board filter — many tutors cover multiple boards.';
        }
        if ($c->area !== null) {
            return 'Try searching the whole city instead of just '.$c->area.'.';
        }

        return 'Try a nearby city, or fewer filters, to see more tutors.';
    }

    private function relaxQuickReplies(TutorSearchCriteria $c): array
    {
        return array_values(array_filter([
            $c->city ? 'Tutors in '.$c->city : null,
            $c->subject ? $c->subject.' tutors anywhere' : null,
            'Online tutors',
        ]));
    }
}
