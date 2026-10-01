<?php

namespace App\Support;

/**
 * Small copies of uploaded photos (tutor portraits, review photos), for cards
 * and avatars. A tutor card used to load the full upload — 150-200 KB, up to
 * 1440 px — to show it 34-400 px wide.
 *
 * Uploads live only on the server (not in git), so thumbnails are made at
 * runtime and kept on disk:
 *
 *   public/thumbs/{w}/{name}-{hash}.{webp|jpg}
 *
 * The first request goes to GET /img/t/{w}?src=uploads/... (App\Http\
 * Controllers\ThumbController), which writes that file. From then on url()
 * points straight at the file, which nginx and Cloudflare serve as a static,
 * immutable image. The hash covers the source path, size and mtime, so a
 * replaced upload gets a new thumbnail URL.
 *
 * The dynamic URL carries the path as a query string on purpose: nginx on
 * CloudPanel answers any URL ending in .jpg/.png/.webp itself and returns its
 * own 404 without asking Laravel, so /img/t/160/uploads/x.jpeg would never
 * reach the controller.
 *
 * Anything that is not a local upload that exists on disk (external URLs, the
 * generic fallbacks in frount/assets, a missing file) is returned unchanged.
 */
class Thumb
{
    /** Widths a thumbnail may be made at. Cards are full-width on phones, hence 480/640. */
    public const WIDTHS = [96, 160, 240, 320, 480, 640];

    /** Folders under public/ a thumbnail may be made from. */
    public const ROOTS = ['uploads/', 'storage/'];

    /** Never thumbnail these (private uploads are not meant to be public). */
    public const BLOCKED = ['uploads/private/'];

    public const EXTENSIONS = ['jpg', 'jpeg', 'png', 'webp', 'gif'];

    /**
     * The thumbnail URL for a photo URL or path, at width $w (snapped up to the
     * allow-list). Returns $src unchanged when it is not a local upload.
     */
    public static function url(?string $src, int $w): string
    {
        $src = trim((string) $src);
        $rel = self::relativePath($src);
        if ($rel === null) {
            return $src;
        }

        $file = public_path($rel);
        if (! is_file($file)) {
            return $src;
        }

        $w = self::snap($w);
        $cached = self::cachePath($rel, $w);
        if ($cached !== null && is_file(public_path($cached))) {
            return asset($cached);
        }

        // v= changes when the upload does, so a replaced photo is never
        // served from a browser's immutable cache of the old one.
        $v = $cached !== null ? substr((string) strrchr(pathinfo($cached, PATHINFO_FILENAME), '-'), 1) : '';

        return url('/img/t/'.$w).'?src='.rawurlencode($rel).($v !== '' ? '&v='.$v : '');
    }

    /**
     * A srcset attribute value with width descriptors ("... 320w, ... 480w"),
     * or '' when $src is not a local upload (use the plain src then).
     *
     * @param  int[]  $widths
     */
    public static function srcset(?string $src, array $widths): string
    {
        $rel = self::relativePath(trim((string) $src));
        if ($rel === null || ! is_file(public_path($rel))) {
            return '';
        }

        $parts = [];
        foreach (array_unique(array_map([self::class, 'snap'], $widths)) as $w) {
            $parts[] = self::url($src, $w).' '.$w.'w';
        }

        return implode(', ', $parts);
    }

    /** "1x, 2x" srcset for a fixed-size avatar shown $css px wide. */
    public static function srcset2x(?string $src, int $css): string
    {
        $one = self::url($src, $css);
        if ($one === trim((string) $src)) {
            return '';
        }

        return $one.' 1x, '.self::url($src, $css * 2).' 2x';
    }

    /** The smallest allowed width >= $w (or the largest). */
    public static function snap(int $w): int
    {
        foreach (self::WIDTHS as $allowed) {
            if ($allowed >= $w) {
                return $allowed;
            }
        }

        return self::WIDTHS[count(self::WIDTHS) - 1];
    }

    /**
     * "uploads/x.jpeg" for any of: uploads/x.jpeg, /uploads/x.jpeg,
     * https://<this site>/uploads/x.jpeg. Null for anything else, including
     * paths outside the allowed roots, traversal and non-image extensions.
     */
    public static function relativePath(string $src): ?string
    {
        if ($src === '' || str_contains($src, "\0")) {
            return null;
        }

        if (preg_match('#^https?://#i', $src) || str_starts_with($src, '//')) {
            $parts = parse_url(str_starts_with($src, '//') ? 'https:'.$src : $src);
            if (! $parts || empty($parts['host']) || ! self::isOwnHost($parts['host'])) {
                return null;
            }
            $src = (string) ($parts['path'] ?? '');
        } else {
            $src = (string) strtok($src, '?#');
        }

        $rel = ltrim(rawurldecode($src), '/');

        return self::isSafeRelative($rel) ? $rel : null;
    }

    /** Is $rel a plain path to an image under an allowed root? */
    public static function isSafeRelative(string $rel): bool
    {
        if ($rel === '' || strlen($rel) > 300 || str_contains($rel, "\0") || str_contains($rel, '\\')) {
            return false;
        }
        if (preg_match('#(^|/)\.\.?(/|$)#', $rel) || str_contains($rel, '//') || preg_match('#^[a-z]+:#i', $rel)) {
            return false;
        }

        $root = false;
        foreach (self::ROOTS as $r) {
            if (str_starts_with($rel, $r) && strlen($rel) > strlen($r)) {
                $root = true;
            }
        }
        foreach (self::BLOCKED as $b) {
            if (str_starts_with(strtolower($rel), $b)) {
                return false;
            }
        }

        return $root && in_array(strtolower(pathinfo($rel, PATHINFO_EXTENSION)), self::EXTENSIONS, true);
    }

    /**
     * Where the thumbnail of public/$rel at width $w lives, relative to
     * public/ (e.g. "thumbs/160/whatsappimage-1a2b3c4d5e.webp"). Null when the
     * source cannot be read.
     */
    public static function cachePath(string $rel, int $w): ?string
    {
        $file = public_path($rel);
        $mtime = @filemtime($file);
        $size = @filesize($file);
        if ($mtime === false || $size === false) {
            return null;
        }

        $name = strtolower((string) preg_replace('/[^A-Za-z0-9]+/', '-', pathinfo($rel, PATHINFO_FILENAME)));
        $name = trim(substr($name, 0, 60), '-') ?: 'img';
        $hash = substr(sha1($rel.'|'.$size.'|'.$mtime), 0, 12);

        return 'thumbs/'.$w.'/'.$name.'-'.$hash.'.'.self::format();
    }

    /** webp when this PHP can write it, else jpg. */
    public static function format(): string
    {
        static $format = null;

        return $format ??= function_exists('imagewebp') && (gd_info()['WebP Support'] ?? false) ? 'webp' : 'jpg';
    }

    private static function isOwnHost(string $host): bool
    {
        $host = strtolower($host);
        $own = array_filter([
            parse_url((string) config('app.url'), PHP_URL_HOST),
            parse_url(url('/'), PHP_URL_HOST),
        ]);
        $own = array_map('strtolower', $own);
        $bare = fn (string $h) => preg_replace('/^www\./', '', $h);

        foreach ($own as $o) {
            if ($bare($o) === $bare($host)) {
                return true;
            }
        }

        return in_array($bare($host), ['nxtutors.com'], true);
    }
}
