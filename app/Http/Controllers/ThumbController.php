<?php

namespace App\Http\Controllers;

use App\Support\Thumb;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * GET /img/t/{w}?src=uploads/... — makes a small copy of an uploaded photo,
 * keeps it in public/thumbs (see App\Support\Thumb) and returns it.
 *
 * Guards: $w must be on Thumb::WIDTHS; src must be a relative path under
 * public/uploads or public/storage (not uploads/private) with an image
 * extension, no "..", no scheme, no backslashes; the resolved real path must
 * still sit inside one of those folders (symlinks included); the file must
 * really be a JPEG/PNG/WebP/GIF; images too large to decode safely are
 * passed through to the original instead of being loaded into memory.
 *
 * Registered outside the "web" middleware group (routes/thumbs.php) so the
 * response carries no session cookie and can be cached by Cloudflare.
 */
class ThumbController extends Controller
{
    /** Refuse to decode anything over this many pixels (about 7000 x 5700). */
    private const MAX_PIXELS = 40_000_000;

    /** Height may be at most this many times the width (4:5). */
    private const MAX_TALL = 1.25;

    private const CACHE = 'public, max-age=31536000, immutable';

    public function show(Request $request, string $w): Response
    {
        $width = ctype_digit($w) ? (int) $w : 0;
        if (! in_array($width, Thumb::WIDTHS, true)) {
            abort(404);
        }

        $rel = $request->query('src');
        if (! is_string($rel)) {
            abort(404);
        }
        $rel = ltrim($rel, '/');
        if (! Thumb::isSafeRelative($rel) || ! $this->insideAllowedRoots($rel)) {
            abort(404);
        }

        $cached = Thumb::cachePath($rel, $width);
        if ($cached === null) {
            abort(404);
        }
        $target = public_path($cached);
        if (is_file($target)) {
            return $this->image((string) file_get_contents($target));
        }

        $bytes = $this->render(public_path($rel), $width);
        if ($bytes === null) {
            // Not decodable here (too big, odd format): the original still works.
            return redirect(asset($rel), 302)->header('Cache-Control', 'public, max-age=3600');
        }

        $this->store($target, $bytes);

        return $this->image($bytes);
    }

    private function image(string $bytes): Response
    {
        return response($bytes, 200, [
            'Content-Type' => Thumb::format() === 'webp' ? 'image/webp' : 'image/jpeg',
            'Content-Length' => (string) strlen($bytes),
            'Cache-Control' => self::CACHE,
            'X-Content-Type-Options' => 'nosniff',
        ]);
    }

    /** The real file must be inside public/uploads, public/storage or storage/app/public. */
    private function insideAllowedRoots(string $rel): bool
    {
        $real = realpath(public_path($rel));
        if ($real === false || ! is_file($real)) {
            return false;
        }

        foreach ([public_path('uploads'), public_path('storage'), storage_path('app/public')] as $root) {
            $base = realpath($root);
            if ($base !== false && str_starts_with($real, rtrim($base, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR)) {
                $private = realpath(public_path('uploads/private'));

                return $private === false || ! str_starts_with($real, $private.DIRECTORY_SEPARATOR);
            }
        }

        return false;
    }

    /** Encoded thumbnail bytes, or null when the source cannot be handled. */
    private function render(string $file, int $width): ?string
    {
        $info = @getimagesize($file);
        if (! $info || $info[0] < 1 || $info[1] < 1) {
            return null;
        }
        [$srcW, $srcH, $type] = $info;
        if ($srcW * $srcH > self::MAX_PIXELS || ! $this->ensureMemory($srcW * $srcH)) {
            return null;
        }

        $src = match ($type) {
            IMAGETYPE_JPEG => @imagecreatefromjpeg($file),
            IMAGETYPE_PNG => @imagecreatefrompng($file),
            IMAGETYPE_WEBP => function_exists('imagecreatefromwebp') ? @imagecreatefromwebp($file) : false,
            IMAGETYPE_GIF => @imagecreatefromgif($file),
            default => false,
        };
        if (! $src) {
            return null;
        }

        // Phone photos are often stored sideways with an EXIF orientation that
        // browsers honour; GD ignores it and WebP drops it, so apply it here.
        $orientation = $type === IMAGETYPE_JPEG ? self::jpegOrientation($file) : 1;
        $sideways = $orientation >= 5 && $orientation <= 8;
        $shownW = $sideways ? $srcH : $srcW;

        $scale = min(1, $width / $shownW);
        $dstW = max(1, (int) round($srcW * $scale));
        $dstH = max(1, (int) round($srcH * $scale));

        $dst = imagecreatetruecolor($dstW, $dstH);
        $alpha = $type !== IMAGETYPE_JPEG && Thumb::format() === 'webp';
        if ($alpha) {
            imagealphablending($dst, false);
            imagesavealpha($dst, true);
            imagefill($dst, 0, 0, imagecolorallocatealpha($dst, 0, 0, 0, 127));
        } else {
            imagefill($dst, 0, 0, imagecolorallocate($dst, 255, 255, 255));
        }
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $dstW, $dstH, $srcW, $srcH);
        imagedestroy($src);

        $dst = self::orient($dst, $orientation);

        // Very tall photos (phone 9:16 selfies) are trimmed to 4:5. Every
        // place a thumb is shown crops to a wider box anyway (cards 4:3/16:10,
        // round avatars), and the trim keeps the top-weighted framing the card
        // CSS uses (object-position: center 25%): two 25% crops compose into
        // the same one, so what a visitor sees is unchanged.
        $outW = imagesx($dst);
        $outH = imagesy($dst);
        $maxH = (int) round($outW * self::MAX_TALL);
        if ($outH > $maxH) {
            $cropped = imagecrop($dst, ['x' => 0, 'y' => (int) round(($outH - $maxH) * 0.25), 'width' => $outW, 'height' => $maxH]);
            if ($cropped) {
                imagedestroy($dst);
                $dst = $cropped;
            }
        }

        ob_start();
        $ok = Thumb::format() === 'webp' ? imagewebp($dst, null, 80) : imagejpeg($dst, null, 82);
        $bytes = (string) ob_get_clean();
        imagedestroy($dst);

        return $ok && $bytes !== '' ? $bytes : null;
    }

    /** Raise memory_limit if decoding $pixels needs it; false if it cannot be done. */
    private function ensureMemory(int $pixels): bool
    {
        $need = $pixels * 5 + 16 * 1024 * 1024; // decoded source + headroom
        $limit = self::bytes((string) ini_get('memory_limit'));
        if ($limit < 0) {
            return true; // unlimited
        }
        if (memory_get_usage(true) + $need <= $limit) {
            return true;
        }

        $wanted = min(memory_get_usage(true) + $need, 512 * 1024 * 1024);
        if (memory_get_usage(true) + $need > $wanted) {
            return false;
        }

        return @ini_set('memory_limit', (string) $wanted) !== false;
    }

    private static function bytes(string $v): int
    {
        $v = trim($v);
        if ($v === '' || $v === '-1') {
            return -1;
        }
        $n = (int) $v;

        return match (strtolower(substr($v, -1))) {
            'g' => $n * 1024 ** 3,
            'm' => $n * 1024 ** 2,
            'k' => $n * 1024,
            default => $n,
        };
    }

    /** Write atomically; a server that cannot write still gets the image. */
    private function store(string $target, string $bytes): void
    {
        $dir = dirname($target);
        if (! is_dir($dir) && ! @mkdir($dir, 0775, true) && ! is_dir($dir)) {
            report(new \RuntimeException("Thumb cache dir not writable: {$dir}"));

            return;
        }

        $tmp = $dir.DIRECTORY_SEPARATOR.'.tmp-'.bin2hex(random_bytes(6));
        if (@file_put_contents($tmp, $bytes) === false) {
            report(new \RuntimeException("Thumb cache not writable: {$dir}"));

            return;
        }
        @chmod($tmp, 0644);
        if (! @rename($tmp, $target)) {
            @unlink($tmp);
        }
    }

    /** @param \GdImage $img */
    private static function orient($img, int $orientation)
    {
        $rotate = fn ($angle) => imagerotate($img, $angle, 0) ?: $img;

        switch ($orientation) {
            case 2: imageflip($img, IMG_FLIP_HORIZONTAL); break;
            case 3: $img = $rotate(180); break;
            case 4: imageflip($img, IMG_FLIP_VERTICAL); break;
            case 5: $img = $rotate(-90); imageflip($img, IMG_FLIP_HORIZONTAL); break;
            case 6: $img = $rotate(-90); break;
            case 7: $img = $rotate(90); imageflip($img, IMG_FLIP_HORIZONTAL); break;
            case 8: $img = $rotate(90); break;
        }

        return $img;
    }

    /**
     * The EXIF orientation (1-8) of a JPEG, read from its APP1 segment without
     * the exif extension (not installed everywhere). 1 when absent.
     */
    public static function jpegOrientation(string $file): int
    {
        $data = @file_get_contents($file, false, null, 0, 262144);
        if (! is_string($data) || ! str_starts_with($data, "\xFF\xD8")) {
            return 1;
        }

        $len = strlen($data);
        $pos = 2;
        while ($pos + 4 <= $len) {
            if ($data[$pos] !== "\xFF") {
                return 1;
            }
            $marker = ord($data[$pos + 1]);
            if ($marker === 0xFF) {
                $pos++;
                continue;
            }
            if ($marker === 0xDA || $marker === 0xD9) {
                return 1; // image data starts: no EXIF before it
            }
            $segLen = unpack('n', substr($data, $pos + 2, 2))[1];
            if ($segLen < 2) {
                return 1;
            }
            if ($marker === 0xE1 && substr($data, $pos + 4, 6) === "Exif\0\0") {
                return self::tiffOrientation(substr($data, $pos + 10, $segLen - 8));
            }
            $pos += 2 + $segLen;
        }

        return 1;
    }

    private static function tiffOrientation(string $tiff): int
    {
        $n = strlen($tiff);
        if ($n < 8) {
            return 1;
        }
        $le = substr($tiff, 0, 2) === 'II';
        if (! $le && substr($tiff, 0, 2) !== 'MM') {
            return 1;
        }
        $u16 = fn (int $o) => $o + 2 <= $n ? unpack($le ? 'v' : 'n', substr($tiff, $o, 2))[1] : null;
        $u32 = fn (int $o) => $o + 4 <= $n ? unpack($le ? 'V' : 'N', substr($tiff, $o, 4))[1] : null;

        $ifd = $u32(4);
        $count = $ifd === null ? null : $u16($ifd);
        if ($count === null) {
            return 1;
        }
        for ($i = 0; $i < min($count, 256); $i++) {
            $entry = $ifd + 2 + $i * 12;
            if ($u16($entry) === 0x0112) {
                $value = $u16($entry + 8);

                return $value !== null && $value >= 1 && $value <= 8 ? $value : 1;
            }
        }

        return 1;
    }
}
