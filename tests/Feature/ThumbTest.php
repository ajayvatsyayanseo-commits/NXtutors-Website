<?php

namespace Tests\Feature;

use App\Http\Controllers\ThumbController;
use App\Support\Thumb;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

/**
 * Photo thumbnails: GET /img/t/{w}?src=... (ThumbController) and the
 * App\Support\Thumb helper. Fixtures are written to a throwaway folder under
 * public/uploads and removed afterwards, with any thumbnails made from them.
 */
class ThumbTest extends TestCase
{
    private string $folder;

    protected function setUp(): void
    {
        parent::setUp();
        // The full suite already sits near the CLI's 128M by the time this
        // runs (about 120M, measured 1 Oct 2026); decoding images needs a little more.
        if ((int) ini_get('memory_limit') > 0 && (int) ini_get('memory_limit') < 256) {
            ini_set('memory_limit', '256M');
        }
        $this->folder = 'uploads/zz-thumbtest-'.uniqid();
        File::ensureDirectoryExists(public_path($this->folder));
    }

    protected function tearDown(): void
    {
        foreach (File::files(public_path($this->folder)) as $file) {
            foreach (Thumb::WIDTHS as $w) {
                $cached = Thumb::cachePath($this->folder.'/'.$file->getFilename(), $w);
                if ($cached) {
                    File::delete(public_path($cached));
                }
            }
        }
        File::deleteDirectory(public_path($this->folder));
        parent::tearDown();
    }

    /** A JPEG of $w x $h under the fixture folder; returns its path relative to public/. */
    private function fixture(int $w, int $h, string $name = 'photo.jpg', ?string $bytes = null): string
    {
        if ($bytes === null) {
            $img = imagecreatetruecolor($w, $h);
            imagefill($img, 0, 0, imagecolorallocate($img, 200, 120, 40));
            ob_start();
            imagejpeg($img, null, 90);
            $bytes = ob_get_clean();
            imagedestroy($img);
        }
        File::put(public_path($this->folder.'/'.$name), $bytes);

        return $this->folder.'/'.$name;
    }

    public function test_endpoint_returns_a_resized_webp_and_caches_it_to_disk(): void
    {
        $rel = $this->fixture(640, 480);
        $cached = Thumb::cachePath($rel, 160);
        $this->assertFileDoesNotExist(public_path($cached));

        $res = $this->get('/img/t/160?src='.rawurlencode($rel));

        $res->assertOk();
        $this->assertSame('image/'.(Thumb::format() === 'webp' ? 'webp' : 'jpeg'), $res->headers->get('Content-Type'));
        $cache = (string) $res->headers->get('Cache-Control');
        $this->assertStringContainsString('max-age=31536000', $cache);
        $this->assertStringContainsString('immutable', $cache);
        $this->assertStringContainsString('public', $cache);
        $this->assertNull($res->headers->get('Set-Cookie'), 'no session cookie on a cacheable image');

        $size = getimagesizefromstring($res->getContent());
        $this->assertSame([160, 120], [$size[0], $size[1]]);
        $this->assertLessThan(filesize(public_path($rel)), strlen($res->getContent()));

        // Cached under public/thumbs; the helper now points straight at it.
        $this->assertFileExists(public_path($cached));
        $this->assertStringStartsWith('thumbs/160/photo-', $cached);
        $this->assertSame($res->getContent(), file_get_contents(public_path($cached)));
        $this->assertSame(asset($cached), Thumb::url(asset($rel), 160));

        // A second request is served from the cache.
        $this->get('/img/t/160?src='.rawurlencode($rel))->assertOk();
    }

    public function test_never_upscales_and_trims_very_tall_photos(): void
    {
        $small = $this->fixture(80, 60, 'small.jpg');
        $size = getimagesizefromstring($this->get('/img/t/320?src='.$small)->assertOk()->getContent());
        $this->assertSame([80, 60], [$size[0], $size[1]]);

        $tall = $this->fixture(270, 480, 'tall.jpg');
        $size = getimagesizefromstring($this->get('/img/t/240?src='.$tall)->assertOk()->getContent());
        $this->assertSame([240, 300], [$size[0], $size[1]]);
    }

    public function test_exif_orientation_is_applied(): void
    {
        // A 60x20 landscape JPEG flagged "rotate 90° clockwise" (orientation 6).
        $img = imagecreatetruecolor(60, 20);
        ob_start();
        imagejpeg($img);
        $jpeg = ob_get_clean();
        $tiff = "MM\x00\x2A\x00\x00\x00\x08"."\x00\x01"."\x01\x12\x00\x03\x00\x00\x00\x01\x00\x06\x00\x00"."\x00\x00\x00\x00";
        $app1 = "\xFF\xE1".pack('n', 2 + 6 + strlen($tiff))."Exif\x00\x00".$tiff;
        $rel = $this->fixture(0, 0, 'rotated.jpg', "\xFF\xD8".$app1.substr($jpeg, 2));

        $this->assertSame(6, ThumbController::jpegOrientation(public_path($rel)));
        $size = getimagesizefromstring($this->get('/img/t/96?src='.$rel)->assertOk()->getContent());
        // Shown upright: 20 wide, 60 tall, then trimmed to 4:5.
        $this->assertSame([20, 25], [$size[0], $size[1]]);
    }

    public function test_rejects_bad_widths(): void
    {
        $rel = $this->fixture(400, 300);
        foreach (['150', '9999', '0', '1000'] as $w) {
            $this->get('/img/t/'.$w.'?src='.$rel)->assertNotFound();
        }
        $this->get('/img/t/abc?src='.$rel)->assertNotFound();
    }

    public function test_rejects_traversal_and_anything_outside_uploads(): void
    {
        $this->fixture(400, 300);
        File::put(public_path($this->folder.'/notes.php'), '<?php echo 1;');

        foreach ([
            'uploads/../.env',
            $this->folder.'/../../index.php',
            $this->folder.'/../../../.env',
            'uploads/./x.jpg',
            '/etc/passwd',
            'C:/Windows/win.ini',
            'C:\\Windows\\win.ini',
            'http://example.com/a.jpg',
            '//example.com/a.jpg',
            'frount/assets/images/tutor1.jpg',  // not an upload folder
            'uploads/private/id.jpg',
            $this->folder.'/notes.php',           // not an image extension
            $this->folder.'/missing.jpg',
            'uploads',
            '',
        ] as $src) {
            $this->get('/img/t/160?src='.rawurlencode($src))->assertNotFound();
        }
        $this->get('/img/t/160')->assertNotFound();
        $this->get('/img/t/160?src[]=x')->assertNotFound();
    }

    public function test_a_file_that_is_not_really_an_image_falls_back_to_the_original(): void
    {
        $rel = $this->fixture(0, 0, 'fake.jpg', 'not an image');

        $this->get('/img/t/160?src='.$rel)->assertRedirect(asset($rel));
        $this->assertFileDoesNotExist(public_path(Thumb::cachePath($rel, 160)));
    }

    public function test_helper_maps_local_upload_urls_and_leaves_everything_else(): void
    {
        $rel = $this->fixture(400, 300);
        $v = substr((string) strrchr(pathinfo(Thumb::cachePath($rel, 160), PATHINFO_FILENAME), '-'), 1);
        $dynamic = url('/img/t/160').'?src='.rawurlencode($rel).'&v='.$v;

        // Every spelling of the same upload maps to the same thumb URL.
        $this->assertSame($dynamic, Thumb::url(asset($rel), 160));
        $this->assertSame($dynamic, Thumb::url('/'.$rel, 160));
        $this->assertSame($dynamic, Thumb::url($rel, 160));
        $this->assertSame($dynamic, Thumb::url('https://www.nxtutors.com/'.$rel, 160));
        $this->assertSame($dynamic, Thumb::url('https://nxtutors.com/'.$rel, 150), 'snapped up to 160');

        // Left alone: other hosts, generic fallbacks, missing files, empty.
        foreach ([
            'https://example.com/'.$rel,
            asset('frount/assets/images/avatar-fallback.webp'),
            asset('uploads/zz-not-there/x.jpg'),
            asset('uploads/'.basename($this->folder).'/../x.jpg'),
            '',
        ] as $src) {
            $this->assertSame($src, Thumb::url($src, 160));
            $this->assertSame('', Thumb::srcset($src, [320, 480]));
            $this->assertSame('', Thumb::srcset2x($src, 64));
        }

        $this->assertSame(96, Thumb::snap(30));
        $this->assertSame(240, Thumb::snap(168));
        $this->assertSame(640, Thumb::snap(5000));

        $set = Thumb::srcset(asset($rel), [320, 480]);
        $this->assertSame(url('/img/t/320').'?src='.rawurlencode($rel).'&v='.$v.' 320w, '.url('/img/t/480').'?src='.rawurlencode($rel).'&v='.$v.' 480w', $set);
        $this->assertStringContainsString(' 1x, ', Thumb::srcset2x(asset($rel), 64));
        $this->assertStringEndsWith(' 2x', Thumb::srcset2x(asset($rel), 64));
    }

    public function test_tutor_card_uses_thumbnails_with_a_fallback_to_the_original(): void
    {
        $rel = $this->fixture(700, 700);
        $original = asset($rel);

        $html = view('partials.tutor-card', [
            't' => (object) ['name' => 'Fixture Tutor'],
            'img' => $original,
            'chips' => [],
            'rating' => '4.8',
            'reviews' => 0,
            'address' => '',
            'city' => 'Gurugram',
            'waLink' => '#',
            'profileUrl' => '/tutor/x',
            'sample' => false,
            'compare' => ['id' => 7, 'name' => 'Fixture Tutor', 'img' => $original],
        ])->render();

        $thumb480 = e(Thumb::url($original, 480));
        $this->assertStringContainsString('src="'.$thumb480.'"', $html);
        $this->assertStringContainsString(e(Thumb::url($original, 320)).' 320w', $html);
        $this->assertStringContainsString(e(Thumb::url($original, 640)).' 640w', $html);
        $this->assertStringContainsString('sizes="(max-width: 640px) 92vw, 360px"', $html);
        $this->assertStringContainsString('loading="lazy" decoding="async"', $html);
        // Compare dock face: the 96px thumb.
        $this->assertStringContainsString('data-img="'.e(Thumb::url($original, 96)).'"', $html);
        // onerror: the original first, then the generic portrait.
        $this->assertStringContainsString(e(json_encode($original, JSON_UNESCAPED_SLASHES)), $html);
        $this->assertStringContainsString('tutor1.jpg', $html);
        $this->assertStringNotContainsString('src="'.e($original).'"', $html);
    }
}
