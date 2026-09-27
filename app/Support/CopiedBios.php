<?php

namespace App\Support;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Throwable;

/**
 * Tutor profiles whose bio is another tutor's, copied word for word.
 *
 * On 27 Sep 2026, 724 of 1,778 public profiles (mostly Mumbai and Chandigarh)
 * carried "Mr. Rajveer Singh … maths and physics tutor in Gurugram" under
 * other names. Ajay's decision: keep those profiles reachable by their link,
 * but leave them out of search, suggestions, home cards, city counts and the
 * sitemap, and mark them noindex, until each tutor writes their own bio.
 *
 * Rule: the bio text (with the tutor's own name taken out) is shared by
 * MIN_GROUP or more profiles, and the tutor's own name does not appear in
 * the body. The genuine author, whose name the bio is about, is kept.
 */
class CopiedBios
{
    public const MIN_GROUP = 3;

    /** @return array<string, true> user_id => true, cached for an hour */
    public static function ids(): array
    {
        try {
            return Cache::remember('tutors.copied_bios.v1', 3600, fn () => self::detect());
        } catch (Throwable $e) {
            return [];
        }
    }

    public static function has(?string $userId): bool
    {
        return $userId !== null && isset(self::ids()[(string) $userId]);
    }

    /** @return list<string> */
    public static function list(): array
    {
        return array_map('strval', array_keys(self::ids()));
    }

    private static function detect(): array
    {
        $groups = [];
        DB::table('register')->where('join_as', 'teacher')->whereNotNull('user_id')
            ->select(['user_id', 'name', 'profile', 'profile_desc', 'pro_desc'])
            ->orderBy('id')
            ->chunk(1000, function ($rows) use (&$groups) {
                foreach ($rows as $r) {
                    $text = self::norm(implode(' ', [(string) $r->profile, (string) $r->profile_desc, (string) $r->pro_desc]));
                    $name = self::norm((string) $r->name);
                    $body = $name !== '' ? trim(str_replace($name, ' ', $text)) : $text;
                    $body = trim(preg_replace('/\s+/', ' ', $body));
                    if (mb_strlen($body) < 120) {
                        continue;
                    }
                    // Own name in the body (beyond a leading "Name –" prefix) means it is theirs.
                    $ownsIt = $name !== '' && mb_strpos(mb_substr($text, 40), $name) !== false;
                    $groups[md5(mb_substr($body, 0, 400))][] = [(string) $r->user_id, $ownsIt];
                }
            });

        $out = [];
        foreach ($groups as $members) {
            if (count($members) < self::MIN_GROUP) {
                continue;
            }
            foreach ($members as [$id, $ownsIt]) {
                if (! $ownsIt) {
                    $out[$id] = true;
                }
            }
        }

        return $out;
    }

    private static function norm(string $s): string
    {
        $s = mb_strtolower(html_entity_decode(strip_tags($s), ENT_QUOTES));
        $s = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $s);

        return trim(preg_replace('/\s+/', ' ', $s));
    }
}
