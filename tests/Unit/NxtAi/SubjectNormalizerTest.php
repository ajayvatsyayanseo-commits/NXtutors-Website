<?php

declare(strict_types=1);

namespace Tests\Unit\NxtAi;

use App\NxtAi\Support\SubjectNormalizer;
use Tests\TestCase;

class SubjectNormalizerTest extends TestCase
{
    public function test_maths_variants_normalize_to_mathematics(): void
    {
        $this->assertSame('Mathematics', SubjectNormalizer::normalize('maths'));
        $this->assertSame('Mathematics', SubjectNormalizer::normalize('math'));
        $this->assertSame('Mathematics', SubjectNormalizer::normalize('Mathematics'));
    }

    public function test_search_terms_include_canonical_and_aliases(): void
    {
        $terms = SubjectNormalizer::searchTerms('maths');
        $this->assertContains('maths', $terms);
        $this->assertContains('mathematics', $terms);
        $this->assertContains('math', $terms);
    }

    public function test_physics_does_not_map_to_science(): void
    {
        $this->assertSame('Physics', SubjectNormalizer::normalize('physics'));
        $this->assertNotContains('science', SubjectNormalizer::searchTerms('physics'));
    }

    public function test_unknown_subject_is_tidied(): void
    {
        $this->assertSame('Sanskrit', SubjectNormalizer::normalize('sanskrit'));
    }

    public function test_null_returns_null_and_empty_search_terms(): void
    {
        $this->assertNull(SubjectNormalizer::normalize(null));
        $this->assertSame([], SubjectNormalizer::searchTerms(null));
    }
}
