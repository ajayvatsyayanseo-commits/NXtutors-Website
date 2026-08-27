<?php

declare(strict_types=1);

namespace Tests\Unit\NxtAi;

use App\NxtAi\DTO\TutorSearchCriteria;
use App\NxtAi\Ranking\TutorRanker;
use Tests\TestCase;

class TutorRankerTest extends TestCase
{
    private function tutor(array $overrides = []): array
    {
        return array_merge([
            'ref' => 'r'.random_int(1, 9),
            'name' => 'Tutor',
            'subjects' => ['Mathematics'],
            'classes' => ['Class 10'],
            'boards' => ['CBSE'],
            'teaching_modes' => ['Home'],
            'rating' => 4.5,
            'review_count' => 10,
            'experience_years' => 5,
            'fee_label' => '₹1,000',
            'image_url' => '/x.jpg',
            'description' => 'Experienced tutor',
            'city' => 'Gurugram',
            'pincode' => '122001',
            'area' => 'Sector 30',
        ], $overrides);
    }

    public function test_ranking_is_deterministic(): void
    {
        $ranker = new TutorRanker();
        $c = TutorSearchCriteria::fromToolArgs(['subject' => 'Maths', 'city' => 'Gurgaon'], 6);
        $tutors = [
            $this->tutor(['ref' => 'a', 'rating' => 4.2, 'review_count' => 5]),
            $this->tutor(['ref' => 'b', 'rating' => 4.9, 'review_count' => 40]),
            $this->tutor(['ref' => 'c', 'rating' => 3.8, 'review_count' => 2]),
        ];

        $first = array_column($ranker->rank($tutors, $c), 'ref');
        $second = array_column($ranker->rank($tutors, $c), 'ref');

        $this->assertSame($first, $second, 'Ranking must be stable/reproducible');
    }

    public function test_bayesian_rating_beats_single_five_star(): void
    {
        $ranker = new TutorRanker();
        // Rating-only query (no subject/location) so rating dominates.
        $c = TutorSearchCriteria::fromToolArgs([], 6);

        $oneFiveStar = $this->tutor(['ref' => 'one', 'rating' => 5.0, 'review_count' => 1, 'experience_years' => 5]);
        $manyStrong = $this->tutor(['ref' => 'many', 'rating' => 4.7, 'review_count' => 45, 'experience_years' => 5]);

        $ranked = $ranker->rank([$oneFiveStar, $manyStrong], $c);

        $this->assertSame('many', $ranked[0]['ref'], 'A single 5-star review must not outrank a proven tutor');
    }

    public function test_match_reasons_and_score_are_attached(): void
    {
        $ranker = new TutorRanker();
        $c = TutorSearchCriteria::fromToolArgs(['subject' => 'Maths', 'class_level' => '10', 'city' => 'Gurgaon'], 6);

        $ranked = $ranker->rank([$this->tutor()], $c);

        $this->assertArrayHasKey('match_score', $ranked[0]);
        $this->assertIsInt($ranked[0]['match_score']);
        $this->assertNotEmpty($ranked[0]['match_reasons']);
        $this->assertContains('Teaches Mathematics', $ranked[0]['match_reasons']);
    }

    public function test_subject_match_raises_score(): void
    {
        $ranker = new TutorRanker();
        $c = TutorSearchCriteria::fromToolArgs(['subject' => 'Physics'], 6);

        $match = $this->tutor(['ref' => 'p', 'subjects' => ['Physics']]);
        $noMatch = $this->tutor(['ref' => 'h', 'subjects' => ['Hindi']]);

        $ranked = $ranker->rank([$noMatch, $match], $c);

        $this->assertSame('p', $ranked[0]['ref']);
    }
}
