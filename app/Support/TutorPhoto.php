<?php

namespace App\Support;

/**
 * The public URL of a profile photo (register.avatar).
 *
 * Two upload paths wrote to two folders: the old Blade forms to
 * public/storage/user, the dashboard API to public/uploads. Every page read
 * only storage/user, so a photo uploaded from the dashboard showed as broken
 * (e.g. Ajay Vatsyayan's, Sep 2026). This looks in both.
 */
class TutorPhoto
{
    public static function url(?string $avatar): string
    {
        $avatar = trim((string) $avatar);
        if ($avatar === '') {
            return '';
        }
        if (str_starts_with($avatar, 'http://') || str_starts_with($avatar, 'https://')) {
            return $avatar;
        }

        static $seen = [];
        if (isset($seen[$avatar])) {
            return $seen[$avatar];
        }

        $file = ltrim($avatar, '/');
        foreach (['storage/user/', 'uploads/'] as $dir) {
            if (is_file(public_path($dir . $file))) {
                return $seen[$avatar] = asset($dir . $file);
            }
        }

        // Neither found (e.g. a test or a missing file): the historic path.
        return $seen[$avatar] = asset('storage/user/' . $file);
    }
}
