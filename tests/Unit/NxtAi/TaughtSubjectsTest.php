<?php

namespace Tests\Unit\NxtAi;

use App\Models\Register;
use App\NxtAi\Support\PublicTutorFieldMapper;
use Tests\TestCase;

/** A tutor's degree is not a subject they teach. */
class TaughtSubjectsTest extends TestCase
{
    private function subjects(string $bio): array
    {
        $t = new Register(['profile' => $bio]);

        return (new PublicTutorFieldMapper)->capabilities($t)['subjects'];
    }

    public function test_a_computer_science_degree_does_not_make_a_computer_science_tutor(): void
    {
        $s = $this->subjects('B.Tech (Computer Science & Engineering). I teach Maths and Physics for IB and IGCSE.');
        $this->assertContains('Maths', $s);
        $this->assertNotContains('Computer Science', $s);
    }

    public function test_teaching_computer_science_is_still_found(): void
    {
        $this->assertContains('Computer Science', $this->subjects('I teach Class 12 Computer Science and Python.'));
    }
}
