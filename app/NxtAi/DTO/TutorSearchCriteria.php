<?php

declare(strict_types=1);

namespace App\NxtAi\DTO;

use App\NxtAi\Support\CityNormalizer;
use App\NxtAi\Support\ClassNormalizer;
use App\NxtAi\Support\SubjectNormalizer;

/**
 * Validated, normalized tutor-search filters.
 *
 * Built ONLY from server-validated tool arguments (never raw model text used
 * directly in SQL). Normalizers canonicalize messy parent input here so the
 * search service and ranker work on clean values.
 */
final class TutorSearchCriteria
{
    public function __construct(
        public readonly ?string $city = null,
        public readonly ?string $area = null,
        public readonly ?string $pincode = null,
        public readonly ?string $subject = null,
        public readonly ?string $classLevel = null,
        public readonly ?string $board = null,
        public readonly ?string $teachingMode = null, // online|home|either
        public readonly ?string $gender = null,        // male|female
        public readonly ?int $minExperience = null,
        public readonly ?int $maxFee = null,
        public readonly ?float $minRating = null,
        public readonly int $limit = 3,
    ) {
    }

    /**
     * @param array<string,mixed> $args validated tool arguments
     */
    public static function fromToolArgs(array $args, int $maxResults): self
    {
        $mode = isset($args['teaching_mode']) ? strtolower(trim((string) $args['teaching_mode'])) : null;
        if ($mode !== null && ! in_array($mode, ['online', 'home', 'either'], true)) {
            $mode = null;
        }

        $gender = isset($args['gender']) ? strtolower(trim((string) $args['gender'])) : null;
        if ($gender !== null) {
            $gender = str_starts_with($gender, 'f') ? 'female' : (str_starts_with($gender, 'm') ? 'male' : null);
        }

        $limit = (int) ($args['limit'] ?? 3);
        $limit = max(1, min($limit, $maxResults));

        $pincode = isset($args['pincode']) ? preg_replace('/\D/', '', (string) $args['pincode']) : null;
        $pincode = ($pincode === null || $pincode === '') ? null : substr($pincode, 0, 6);

        return new self(
            city: CityNormalizer::normalize(self::str($args, 'city')),
            area: self::str($args, 'area'),
            pincode: $pincode,
            subject: SubjectNormalizer::normalize(self::str($args, 'subject')),
            classLevel: ClassNormalizer::normalize(self::str($args, 'class_level')),
            board: self::tidyBoard(self::str($args, 'board')),
            teachingMode: $mode,
            gender: $gender,
            minExperience: isset($args['minimum_experience']) ? max(0, (int) $args['minimum_experience']) : null,
            maxFee: isset($args['maximum_fee']) ? max(0, (int) $args['maximum_fee']) : null,
            minRating: isset($args['minimum_rating']) ? (float) $args['minimum_rating'] : null,
            limit: $limit,
        );
    }

    private static function str(array $args, string $key): ?string
    {
        $v = $args[$key] ?? null;
        if ($v === null) {
            return null;
        }
        $v = trim((string) $v);

        return $v === '' ? null : $v;
    }

    private static function tidyBoard(?string $board): ?string
    {
        if ($board === null) {
            return null;
        }
        $upper = strtoupper($board);

        return in_array($upper, ['CBSE', 'ICSE', 'RBSE', 'IB', 'IGCSE', 'NIOS', 'STATE'], true) ? $upper : $board;
    }

    /** @return array<string,mixed> for logging/telemetry (no private data) */
    public function toArray(): array
    {
        return array_filter([
            'city' => $this->city,
            'area' => $this->area,
            'pincode' => $this->pincode,
            'subject' => $this->subject,
            'class_level' => $this->classLevel,
            'board' => $this->board,
            'teaching_mode' => $this->teachingMode,
            'gender' => $this->gender,
            'minimum_experience' => $this->minExperience,
            'maximum_fee' => $this->maxFee,
            'minimum_rating' => $this->minRating,
            'limit' => $this->limit,
        ], static fn ($v) => $v !== null);
    }
}
