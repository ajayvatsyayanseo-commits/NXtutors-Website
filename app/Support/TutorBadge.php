<?php

namespace App\Support;

/**
 * Which Verified seal a tutor card or profile shows.
 *
 * The seal itself follows the existing rule: a real (not sample) tutor whose
 * profile is active, i.e. made live after the team's ID review. The pink
 * variant ("Verified · Woman tutor", the women-tutor role in nx-roles.css)
 * is that same seal for a tutor whose register.gender is female. Sample
 * profiles never get either; nothing else may say "verified" in pink.
 */
final class TutorBadge
{
    /** Real, active tutor: the existing Verified seal. */
    public static function verified(object $t, bool $isSample): bool
    {
        if ($isSample) {
            return false;
        }
        $status = $t->status ?? null;

        return $status === null || $status === 't';
    }

    /** The pink seal: verified and female. $gender overrides $t->gender (search cards carry it separately). */
    public static function woman(object $t, bool $isSample, ?string $gender = null): bool
    {
        $g = strtolower(trim((string) ($gender ?? ($t->gender ?? ''))));

        return in_array($g, ['female', 'f', 'woman'], true) && self::verified($t, $isSample);
    }
}
