<?php

declare(strict_types=1);

namespace App\NxtAi\Support;

class ClassNormalizer
{
    private const ROMAN = [
        'i' => 1,
        'ii' => 2,
        'iii' => 3,
        'iv' => 4,
        'v' => 5,
        'vi' => 6,
        'vii' => 7,
        'viii' => 8,
        'ix' => 9,
        'x' => 10,
        'xi' => 11,
        'xii' => 12,
    ];

    private const PRESCHOOL = [
        'nursery' => 'Nursery',
        'lkg' => 'LKG',
        'ukg' => 'UKG',
        'kg' => 'KG',
    ];

    public static function normalize(?string $class): ?string
    {
        $trimmed = trim((string) $class);
        if ($trimmed === '') {
            return null;
        }

        $key = strtolower($trimmed);
        if (isset(self::PRESCHOOL[$key])) {
            return self::PRESCHOOL[$key];
        }

        $n = self::classNumber($trimmed);
        if ($n !== null) {
            return 'Class ' . $n;
        }

        return implode(' ', array_map('ucfirst', preg_split('/\s+/', $trimmed)));
    }

    public static function classNumber(?string $class): ?int
    {
        $trimmed = trim((string) $class);
        if ($trimmed === '') {
            return null;
        }

        // Digits win when present, e.g. '10', '10th', 'class 10', 'std 10'.
        if (preg_match('/\d{1,2}/', $trimmed, $m) === 1) {
            $n = (int) $m[0];
            return ($n >= 1 && $n <= 12) ? $n : null;
        }

        // Bare roman numeral, e.g. 'x', 'XII'.
        $key = strtolower($trimmed);
        return self::ROMAN[$key] ?? null;
    }
}
