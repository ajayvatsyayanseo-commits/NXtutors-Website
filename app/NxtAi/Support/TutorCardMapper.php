<?php

declare(strict_types=1);

namespace App\NxtAi\Support;

/**
 * Turns a ranked public-tutor array into the `tutor_cards` UI item contract.
 * Laravel owns this shape end-to-end; the model never fabricates cards.
 * Empty/unknown fields are omitted rather than shown as fake "N/A".
 */
final class TutorCardMapper
{
    /** @param array<string,mixed> $t ranked public tutor array */
    public function toCard(array $t): array
    {
        $card = [
            'ref' => $t['ref'] ?? null,
            'name' => $t['name'] ?? 'Tutor',
            'image_url' => $t['image_url'] ?? null,
            'profile_url' => $t['profile_url'] ?? null,
            'match_score' => $t['match_score'] ?? null,
        ];

        $optional = [
            'city' => $t['city'] ?? null,
            'area' => $t['area'] ?? null,
            'subjects' => $t['subjects'] ?? [],
            'classes' => $t['classes'] ?? [],
            'boards' => $t['boards'] ?? [],
            'teaching_modes' => $t['teaching_modes'] ?? [],
            'fee_label' => $t['fee_label'] ?? null,
            'rating' => $t['rating'] ?? null,
            'review_count' => ($t['review_count'] ?? 0) > 0 ? $t['review_count'] : null,
            'gender' => $t['gender'] ?? null,
            'education' => $t['education'] ?? null,
            'match_reasons' => $t['match_reasons'] ?? [],
        ];

        if (($t['experience_years'] ?? null) !== null && $t['experience_years'] > 0) {
            $optional['experience_label'] = $t['experience_years'].' years';
        }

        foreach ($optional as $k => $v) {
            if ($v === null || $v === '' || $v === []) {
                continue;
            }
            $card[$k] = $v;
        }

        return $card;
    }

    /** @param array<int,array<string,mixed>> $tutors */
    public function toCards(array $tutors): array
    {
        return array_map([$this, 'toCard'], $tutors);
    }
}
