<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

/**
 * "Best" is a banned word: the indexable /p/ pages whose stored title started
 * "Best …" are reworded by migration, with backups and a working down().
 */
class GeneratedPageBestTitleTest extends TestCase
{
    private const MIGRATION = 'migrations/seo/2026_10_04_160000_remove_best_from_generated_page_titles.php';

    protected function setUp(): void
    {
        parent::setUp();
        Schema::create('generated_pages', function ($t) {
            $t->id(); $t->string('slug'); $t->string('title'); $t->string('meta_title')->nullable(); $t->text('meta_description')->nullable();
            $t->text('sections')->nullable(); $t->string('status')->default('published'); $t->timestamps();
        });
    }

    private function migration(): object
    {
        return require database_path(self::MIGRATION);
    }

    private function constant(object $m, string $name): array
    {
        return (new \ReflectionClass($m))->getConstant($name);
    }

    public function test_new_wording_is_rule_safe_and_short(): void
    {
        $m = $this->migration();
        $pages = $this->constant($m, 'PAGES');
        $this->assertCount(23, $pages);
        foreach ($pages as $slug => [$title, $metaTitle, $metaDesc]) {
            foreach ([$title, $metaTitle, $metaDesc] as $s) {
                $this->assertDoesNotMatchRegularExpression('/\b(best|top|no\.?\s*1|guaranteed)\b/i', $s, $slug);
            }
            $this->assertLessThanOrEqual(65, mb_strlen($title), $title);
            $this->assertLessThanOrEqual(65, mb_strlen($metaTitle), $metaTitle);
            $this->assertLessThanOrEqual(160, mb_strlen($metaDesc), $slug);
            // Every page is one of the indexable /p/ pages.
            $this->assertContains($slug, config('generated_pages.indexable'), $slug);
        }
        foreach ($this->constant($m, 'HEADLINES') as $slug => $h) {
            $this->assertDoesNotMatchRegularExpression('/\bbest\b/i', $h);
            $this->assertLessThanOrEqual(250, mb_strlen($h));
        }
    }

    public function test_migration_rewrites_banned_text_only_and_rolls_back(): void
    {
        $sections = json_encode(['hero' => ['headline' => 'Best maths home tutor in Sector 65 Gurugram for IGCSE class 9', 'subheadline' => 'Sub.']]);
        DB::table('generated_pages')->insert([
            ['slug' => 'gurugramsector-65igcsemathematics', 'title' => 'Best Maths Home Tutor in Sector 65, Gurugram — IGCSE Class 9',
                'meta_title' => 'Best IGCSE Maths Tutor Sector 65', 'meta_description' => 'Top IGCSE maths tutors in Sector 65.', 'sections' => $sections],
            ['slug' => 'gurugramsector-47igcsemathematics', 'title' => 'Best Maths Home Tutor in Sector 47, Gurugram — IGCSE Class 9',
                'meta_title' => 'IGCSE Maths Tutor in Sector 47', 'meta_description' => 'IGCSE maths tutors in Sector 47.', 'sections' => null],
            ['slug' => 'some-other-page', 'title' => 'Best tutor elsewhere', 'meta_title' => 'Best', 'meta_description' => 'Best', 'sections' => null],
        ]);
        $before = DB::table('generated_pages')->orderBy('id')->get()->map(fn ($r) => (array) $r)->all();

        $m = $this->migration();
        $m->up();
        $m->up(); // twice: backs up once

        $a = DB::table('generated_pages')->where('slug', 'gurugramsector-65igcsemathematics')->first();
        $this->assertSame('Maths Home Tutor in Sector 65, Gurugram – IGCSE Class 9', $a->title);
        $this->assertSame('IGCSE Maths Home Tutor in Sector 65, Gurgaon – Class 9 | NXTutors', $a->meta_title);
        $this->assertStringNotContainsStringIgnoringCase('top', $a->meta_description);
        $this->assertSame('Maths home tutor in Sector 65, Gurugram for IGCSE Class 9', json_decode($a->sections, true)['hero']['headline']);
        $this->assertSame('Sub.', json_decode($a->sections, true)['hero']['subheadline']);

        // Clean meta text is kept; only the title changes.
        $b = DB::table('generated_pages')->where('slug', 'gurugramsector-47igcsemathematics')->first();
        $this->assertSame('Maths Home Tutor in Sector 47, Gurugram – IGCSE Class 9', $b->title);
        $this->assertSame('IGCSE Maths Tutor in Sector 47', $b->meta_title);
        $this->assertSame('IGCSE maths tutors in Sector 47.', $b->meta_description);

        // Pages not on the list are untouched.
        $this->assertSame('Best tutor elsewhere', DB::table('generated_pages')->where('slug', 'some-other-page')->value('title'));
        $this->assertSame(5, DB::table('seo_text_backups')->count());

        $m->down();
        $this->assertSame($before, DB::table('generated_pages')->orderBy('id')->get()->map(fn ($r) => (array) $r)->all());
        $this->assertFalse(Schema::hasTable('seo_text_backups'));
    }
}
