<?php

declare(strict_types=1);

namespace App\NxtAi\Support;

class CityNormalizer
{
    /**
     * Lookup key = lowercased/trimmed input; value = canonical DB city name.
     */
    private const ALIASES = [
        'gurgaon' => 'Gurugram',
        'gurugram' => 'Gurugram',
        'bangalore' => 'Bengaluru',
        'bengaluru' => 'Bengaluru',
        'new delhi' => 'Delhi',
        'delhi' => 'Delhi',
        'ncr' => 'Delhi',
        'bombay' => 'Mumbai',
        'mumbai' => 'Mumbai',
        'calcutta' => 'Kolkata',
        'kolkata' => 'Kolkata',
        'madras' => 'Chennai',
        'chennai' => 'Chennai',
        'noida' => 'Noida',
        'ghaziabad' => 'Ghaziabad',
        'faridabad' => 'Faridabad',
    ];

    public static function normalize(?string $city): ?string
    {
        $trimmed = trim((string) $city);
        if ($trimmed === '') {
            return null;
        }

        $key = strtolower($trimmed);
        if (isset(self::ALIASES[$key])) {
            return self::ALIASES[$key];
        }

        return self::titleCase($trimmed);
    }

    /**
     * All lowercased alias keys mapping to the same canonical value,
     * including the canonical itself lowercased.
     *
     * @return list<string>
     */
    public static function aliasesFor(string $canonical): array
    {
        $out = [];
        foreach (self::ALIASES as $alias => $value) {
            if ($value === $canonical) {
                $out[] = $alias;
            }
        }

        $canonicalLower = strtolower(trim($canonical));
        if ($canonicalLower !== '' && !in_array($canonicalLower, $out, true)) {
            $out[] = $canonicalLower;
        }

        return $out;
    }

    private static function titleCase(string $value): string
    {
        // Preserve original spelling, just tidy the leading letter of each word.
        return implode(' ', array_map('ucfirst', preg_split('/\s+/', $value)));
    }
}
