<?php

declare(strict_types=1);

namespace Tests\Unit\NxtAi;

use App\NxtAi\DTO\TutorSearchCriteria;
use App\NxtAi\Services\TutorSearchService;
use ReflectionMethod;
use Tests\TestCase;

/**
 * The subject filter used to compare only the canonical name, so a parent
 * asking for "Mathematics" never matched a tutor stored as "Maths" and the
 * search silently returned nothing.
 */
class TutorSubjectMatchTest extends TestCase
{
    private function match(array $subjects, string $query): bool
    {
        $m = new ReflectionMethod(TutorSearchService::class, 'subjectMatch');
        $m->setAccessible(true);

        return $m->invoke(app(TutorSearchService::class), $subjects, $query);
    }

    public function test_canonical_query_matches_alias_stored_in_db(): void
    {
        $this->assertTrue($this->match(['Physics', 'Maths'], 'Mathematics'));
        $this->assertTrue($this->match(['Maths'], 'maths'));
        $this->assertTrue($this->match(['Mathematics'], 'math'));
    }

    public function test_distinct_subjects_still_do_not_match(): void
    {
        $this->assertFalse($this->match(['Hindi'], 'Mathematics'));
        $this->assertFalse($this->match(['Chemistry', 'Biology'], 'Mathematics'));
        $this->assertFalse($this->match([], 'Mathematics'));
    }

    public function test_without_subject_drops_only_the_subject(): void
    {
        $c = TutorSearchCriteria::fromToolArgs([
            'city' => 'Gurgaon',
            'subject' => 'maths',
            'gender' => 'female',
            'maximum_fee' => 900,
            'limit' => 3,
        ], 6);

        $this->assertSame('Mathematics', $c->subject);

        $relaxed = $c->withoutSubject();
        $this->assertNull($relaxed->subject);
        $this->assertSame('Gurugram', $relaxed->city);
        $this->assertSame('female', $relaxed->gender);
        $this->assertSame(900, $relaxed->maxFee);
        $this->assertSame(3, $relaxed->limit);
    }
}
