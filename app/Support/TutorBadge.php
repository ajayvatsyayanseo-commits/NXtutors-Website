<?php

namespace App\Support;

use App\Models\Register;

/**
 * Which Verified seal a tutor card, profile, schema block or AI answer shows.
 * Every surface asks here (or Register::isIdVerified(), which asks here).
 *
 * Verified = a real (not sample) tutor, live (status 't'), whose ID the team
 * has checked and approved (register.id_verified_at, set by the admin's
 * Approve). Live alone is not enough: while config tutors.publish_before_review
 * is on, new tutors are public before the ID check and carry no badge yet.
 *
 * Until the id_verified_at column exists (code deployed, migration not run
 * yet) the old rule applies: real + live.
 *
 * The pink variant ("Verified · Woman tutor", the women-tutor role in
 * nx-roles.css) is that same seal for a tutor whose register.gender is
 * female. Sample profiles never get either; nothing else may say "verified"
 * in pink.
 */
final class TutorBadge
{
    /** Real, live and ID-approved: the Verified seal. */
    public static function verified(object $t, bool $isSample): bool
    {
        if ($isSample || ! empty($t->is_sample)) {
            return false;
        }
        $status = $t->status ?? null;

        if (! Register::hasIdVerifiedColumn()) {
            return $status === null || $status === Register::STATUS_LIVE;
        }

        if ($status !== null && $status !== Register::STATUS_LIVE) {
            return false;
        }

        // The row carries the column: read it directly.
        $attrs = $t instanceof Register ? $t->getAttributes() : get_object_vars($t);
        if (array_key_exists('id_verified_at', $attrs)) {
            return $attrs['id_verified_at'] !== null && $attrs['id_verified_at'] !== ''
                && ($status === Register::STATUS_LIVE || isset(Register::idVerifiedUserIds()[(string) ($t->user_id ?? '')]));
        }

        // A partial select (cards, search rows): look the tutor up by user_id.
        $userId = (string) ($t->user_id ?? '');

        return $userId !== '' && isset(Register::idVerifiedUserIds()[$userId]);
    }

    /**
     * The pink seal: verified and female. $gender overrides $t->gender (search
     * cards carry it separately); $verified overrides the lookup for callers
     * that already hold the answer (search card arrays carry id_verified).
     */
    public static function woman(object $t, bool $isSample, ?string $gender = null, ?bool $verified = null): bool
    {
        $g = strtolower(trim((string) ($gender ?? ($t->gender ?? ''))));

        return in_array($g, ['female', 'f', 'woman'], true)
            && ! $isSample
            && ($verified ?? self::verified($t, $isSample));
    }
}
