<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * While config tutors.publish_before_review is on, a new tutor is live before
 * the ID check, so no page may say a profile goes live only after it. The
 * wording that is true in both modes: tutors who join go through an ID check,
 * and the Verified badge appears only after the team's review.
 */
class IdCheckWordingTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    private const MIGRATION = 'migrations/seo/2026_10_07_141000_id_check_wording_live_before_verified.php';

    private function migration(): object
    {
        return require database_path(self::MIGRATION);
    }

    public function test_the_rules_reword_each_shape_of_the_old_claim(): void
    {
        $m = $this->migration();
        $cases = [
            'Tutors who join go through an ID check before their profile goes live, as our page explains.'
                => 'Tutors who join go through an ID check before their profile is marked Verified, as our page explains.',
            "a government photo ID that the team reviews before the\n    profile goes live, and real tutors who pass carry a Verified badge. It is not"
                => 'a government photo ID that the team reviews before the profile is marked Verified. It is not',
            'Once reviewed, your profile goes live with the Verified badge, listing your boards.'
                => 'Once reviewed, your profile carries the Verified badge, listing your boards.',
            'Team review, then live' => 'Team review, then Verified',
            'and the profile only goes live after our team reviews a government photo ID'
                => 'and the Verified badge appears only after our team reviews a government photo ID',
            'a government photo ID checked by our team before you appear anywhere; real tutors who clear it wear the Verified badge.'
                => 'a government photo ID checked by our team before you get the Verified badge.',
        ];
        foreach ($cases as $old => $new) {
            $this->assertSame($new, $m->rewrite($old));
            $this->assertSame($new, $m->rewrite($new), 'idempotent');
        }
    }

    public function test_area_text_drops_the_claim_without_the_banned_word(): void
    {
        $m = $this->migration();
        $this->assertSame(
            'Tutors who join go through an ID check, as our verification page explains.',
            $m->rewritePlain('Tutors who join go through an ID check before their profile goes live, as our verification page explains.'),
        );
        $this->assertSame(
            'a government photo ID, which our team reviews, and the badge on the tutor card appears once that review is done. It is not a police check.',
            $m->rewritePlain('a government photo ID, which our team reviews before the profile is shown. It is not a police check.'),
        );
    }

    public function test_area_rows_in_the_database_are_reworded_plainly(): void
    {
        $this->createLegacySchema();
        $old = '<p>Tutors who join go through an ID check before their profile goes live, as our page explains.</p>';
        $id = DB::table('city_area_list_managment')->insertGetId(['name' => 'Sector 1', 'slug' => 'sector-1', 'city_id' => 1]);
        if (! Schema::hasColumn('city_area_list_managment', 'area_desc')) {
            Schema::table('city_area_list_managment', fn ($t) => $t->text('area_desc')->nullable());
        }
        DB::table('city_area_list_managment')->where('id', $id)->update(['area_desc' => $old]);

        $this->migration()->up();
        $this->assertSame('<p>Tutors who join go through an ID check, as our page explains.</p>', DB::table('city_area_list_managment')->where('id', $id)->value('area_desc'));
        $this->migration()->down();
        $this->assertSame($old, DB::table('city_area_list_managment')->where('id', $id)->value('area_desc'));
    }

    public function test_no_source_text_says_a_profile_goes_live_only_after_the_id_check(): void
    {
        $bad = '/\bbefore\s+(the|their|your|any|a)\s+profiles?\s+(goes|go|is|can\s+go)\s+(live|public|visible|published)\b|goes\s+live\s+with\s+the\s+Verified\s+badge|Team\s+review,\s+then\s+live/i';
        $found = [];
        foreach (['resources/views', 'database/seo-content', 'app/Support', 'app/Http/Controllers'] as $dir) {
            $it = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(base_path($dir), \FilesystemIterator::SKIP_DOTS));
            foreach ($it as $f) {
                if (preg_match('/\.(php|json|html)$/', $f->getPathname()) && preg_match($bad, (string) file_get_contents($f->getPathname()))) {
                    $found[] = $f->getPathname();
                }
            }
        }
        $this->assertSame([], $found);
    }

    public function test_the_migration_rewrites_live_text_with_a_backup_and_down_restores_it(): void
    {
        $this->createLegacySchema();
        $old = '<p>Tutors who join go through an ID check before their profile goes live, as our page explains.</p>';
        $id = DB::table('blog_managment')->insertGetId(['title' => 'T', 'slug' => 't', 'bdesc' => $old, 'meta_desc' => 'Untouched live text.']);

        $this->migration()->up();
        $this->assertSame('<p>Tutors who join go through an ID check before their profile is marked Verified, as our page explains.</p>', DB::table('blog_managment')->where('id', $id)->value('bdesc'));
        $this->assertSame('Untouched live text.', DB::table('blog_managment')->where('id', $id)->value('meta_desc'));
        $this->migration()->up(); // twice: one backup only
        $this->assertSame(1, DB::table('seo_text_backups')->where('tag', '2026_10_07_141000_id_check_wording')->count());

        $this->migration()->down();
        $this->assertSame($old, DB::table('blog_managment')->where('id', $id)->value('bdesc'));
        $this->assertFalse(Schema::hasTable('seo_text_backups'));
    }
}
