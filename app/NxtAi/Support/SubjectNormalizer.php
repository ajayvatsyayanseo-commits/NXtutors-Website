<?php

declare(strict_types=1);

namespace App\NxtAi\Support;

class SubjectNormalizer
{
    /**
     * Lookup key = lowercased/trimmed input; value = canonical subject name.
     */
    private const ALIASES = [
        'maths' => 'Mathematics',
        'math' => 'Mathematics',
        'mathematics' => 'Mathematics',
        'sci' => 'Science',
        'science' => 'Science',
        'physics' => 'Physics',
        'phy' => 'Physics',
        'chemistry' => 'Chemistry',
        'chem' => 'Chemistry',
        'biology' => 'Biology',
        'bio' => 'Biology',
        'english' => 'English',
        'eng' => 'English',
        'hindi' => 'Hindi',
        'sst' => 'Social Science',
        'social science' => 'Social Science',
        'social studies' => 'Social Science',
        'computer' => 'Computer Science',
        'computer science' => 'Computer Science',
        'cs' => 'Computer Science',
        'accounts' => 'Accountancy',
        'accountancy' => 'Accountancy',
        'economics' => 'Economics',
        'eco' => 'Economics',
    ];

    public static function normalize(?string $subject): ?string
    {
        $trimmed = trim((string) $subject);
        if ($trimmed === '') {
            return null;
        }

        $key = strtolower($trimmed);
        if (isset(self::ALIASES[$key])) {
            return self::ALIASES[$key];
        }

        return implode(' ', array_map('ucfirst', preg_split('/\s+/', $trimmed)));
    }

    /**
     * Distinct lowercased terms (canonical + all its aliases) for LIKE matching.
     * Distinct subjects are never collapsed together.
     *
     * @return list<string>
     */
    public static function searchTerms(?string $subject): array
    {
        $canonical = self::normalize($subject);
        if ($canonical === null) {
            return [];
        }

        $terms = [strtolower($canonical)];
        foreach (self::ALIASES as $alias => $value) {
            if ($value === $canonical) {
                $terms[] = $alias;
            }
        }

        return array_values(array_unique($terms));
    }
}
