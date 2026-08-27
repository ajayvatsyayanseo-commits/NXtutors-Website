<?php

declare(strict_types=1);

namespace Tests\Unit\NxtAi;

use App\NxtAi\Support\ClassNormalizer;
use Tests\TestCase;

class ClassNormalizerTest extends TestCase
{
    public function test_all_class_ten_variants_normalize_to_class_10(): void
    {
        foreach (['10', '10th', 'class 10', 'grade 10', 'X', 'std 10'] as $input) {
            $this->assertSame('Class 10', ClassNormalizer::normalize($input), "input: {$input}");
            $this->assertSame(10, ClassNormalizer::classNumber($input), "input: {$input}");
        }
    }

    public function test_roman_numerals_parse(): void
    {
        $this->assertSame('Class 1', ClassNormalizer::normalize('I'));
        $this->assertSame('Class 12', ClassNormalizer::normalize('xii'));
        $this->assertSame(4, ClassNormalizer::classNumber('IV'));
    }

    public function test_preschool_levels(): void
    {
        $this->assertSame('Nursery', ClassNormalizer::normalize('nursery'));
        $this->assertSame('LKG', ClassNormalizer::normalize('lkg'));
        $this->assertSame('UKG', ClassNormalizer::normalize('UKG'));
        $this->assertNull(ClassNormalizer::classNumber('nursery'));
    }

    public function test_out_of_range_number_has_no_class_number(): void
    {
        $this->assertNull(ClassNormalizer::classNumber('15'));
    }

    public function test_null_returns_null(): void
    {
        $this->assertNull(ClassNormalizer::normalize(null));
        $this->assertNull(ClassNormalizer::classNumber(null));
    }
}
