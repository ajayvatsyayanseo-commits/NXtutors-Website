<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * "Best" is a banned word (nxt-seo-rules §1). On 2 Oct 2026, 23 of the 50
 * indexable /p/ pages (config/generated_pages.php, live sitemap-local-pages.xml)
 * had a generated_pages.title starting "Best …" - shown as the breadcrumb and
 * as link text on related /p/ pages - and four had "Best …" in the hero
 * headline (sections.hero.headline, the H1).
 *
 * For each slug below:
 *  - title becomes the rule-safe wording (same subject, place, board and class; ≤ 65 chars);
 *  - meta_title / meta_description are replaced only if they contain best / top / No. 1,
 *    with the title and description the page already serves (App\Support\SeoText via
 *    the 'seo' rows in config/generated_pages.php), so search snippets do not change;
 *  - sections.hero.headline is replaced only where it contains "best" (HEADLINES).
 *
 * Every old value is copied into seo_text_backups first; down() restores it
 * exactly and drops the backup table once empty. Running up() twice backs up
 * only once. All strings are under 250 characters (title/meta_title are VARCHAR(255)).
 */
return new class extends Migration
{
    private const TAG = '2026_10_04_160000_genpage_best_titles';

    private const TABLE = 'generated_pages';

    private const BANNED = '/\b(best|top|no\.?\s*1)\b/iu';

    /** slug => [new title, meta_title if the stored one is banned, meta_description if the stored one is banned] */
    private const PAGES = [
        'gurugramsector-23igcsephysics-home-tutor' => ['Physics Home Tutor in Sector 23, Gurugram – IGCSE Class 9', 'Class 9 IGCSE Physics Home Tutor in Sector 23, Gurgaon | NXTutors', 'IGCSE Physics Class 9 home tutor in Sector 23, Gurgaon: get 2–3 matched tutors near you, see each tutor\'s fee before the demo, and the first class is free.'],
        'gurugram-sector-43-best-maths-home-tutor-igcse-class-9' => ['Maths Home Tutor in Sector 43, Gurugram – IGCSE Class 9', 'IGCSE Maths Home Tutor in Sector 43, Gurgaon – Class 9 | NXTutors', 'IGCSE Maths Class 9 home tutor in Sector 43, Gurgaon: get 2–3 matched tutors near you, see each tutor\'s fee before the demo, and the first class is free.'],
        'gurugramsector-48maths-home-tutor-igcse' => ['Maths Home Tutor in Sector 48, Gurugram – IGCSE Class 9', 'IGCSE Maths Home Tutor in Sector 48, Gurgaon – Class 9 | NXTutors', 'IGCSE Maths Class 9 home tutor in Sector 48, Gurgaon: get 2–3 matched tutors near you, see each tutor\'s fee before the demo, and the first class is free.'],
        'gurugramsector-48ibmathematicshome-tutor' => ['Maths Home Tutor in Sector 48, Gurugram – IB Class 6', 'IB Maths Home Tutor in Sector 48, Gurgaon – Class 6 | NXTutors', 'Find IB Maths Class 6 home tutors in Sector 48, Gurgaon. Get 2–3 matched tutors, nearest first, with each fee shown before a free first demo class.'],
        'gurugramsector-50mathematics-igcse-class-9-home-tutor' => ['Maths Home Tutor in Sector 50, Gurugram – IGCSE Class 9', 'IGCSE Maths Home Tutor in Sector 50, Gurgaon – Class 9 | NXTutors', 'Find IGCSE Maths Class 9 home tutors in Sector 50, Gurgaon. Get 2–3 matched tutors, nearest first, with each fee shown before a free first demo class.'],
        'gurugramsector-65igcsemathematics' => ['Maths Home Tutor in Sector 65, Gurugram – IGCSE Class 9', 'IGCSE Maths Home Tutor in Sector 65, Gurgaon – Class 9 | NXTutors', 'IGCSE Maths Class 9 home tutor in Sector 65, Gurgaon: get 2–3 matched tutors near you, see each tutor\'s fee before the demo, and the first class is free.'],
        'gurugramdlf-phase-1ibmathematics' => ['Maths Home Tutor in DLF Phase 1, Gurugram – IB Class 6', 'IB Maths Home Tutor in DLF Phase 1, Gurgaon – Class 6 | NXTutors', 'IB Maths Class 6 home tutor in DLF Phase 1, Gurgaon: get 2–3 matched tutors near you, see each tutor\'s fee before the demo, and the first class is free.'],
        'best-maths-home-tutor-dlf-phase-2-gurugram-igcse-class-9' => ['Maths Home Tutor in DLF Phase 2, Gurugram – IGCSE Class 9', 'Class 9 IGCSE Maths Home Tutor in DLF Phase 2, Gurgaon | NXTutors', 'Find IGCSE Maths Class 9 home tutors in DLF Phase 2, Gurgaon. Get 2–3 matched tutors, nearest first, with each fee shown before a free first demo class.'],
        'gurugramdlf-phase-5ibmathematics' => ['Maths Home Tutor in DLF Phase 5, Gurugram – IB Class 6', 'IB Maths Home Tutor in DLF Phase 5, Gurgaon – Class 6 | NXTutors', 'Find IB Maths Class 6 home tutors in DLF Phase 5, Gurgaon. Get 2–3 matched tutors, nearest first, with each fee shown before a free first demo class.'],
        'gurugram-dlf-phase-5-business-studies-home-tutor-ib-class-11' => ['Business Studies Tutor in DLF Phase 5, Gurugram – IB Class 11', 'IB Business Tutor in DLF Phase 5, Gurgaon – Class 11 | NXTutors', 'IB Business Class 11 home tutor in DLF Phase 5, Gurgaon: get 2–3 matched tutors near you, see each tutor\'s fee before the demo, and the first class is free.'],
        'best-accountancy-home-tutor-palam-vihar-gurugram-ib-class-11' => ['Accountancy Home Tutor in Palam Vihar, Gurugram – IB Class 11', 'Accountancy Tutor in Palam Vihar, Gurgaon – Class 11 | NXTutors', 'Class 11–12 Accountancy (CBSE or ISC) home tutor in Palam Vihar, Gurgaon: 2–3 matched tutors, nearest first, fees shown before a free first demo.'],
        'gurugramcyber-cityibmathematics' => ['Maths Home Tutor in Cyber City, Gurugram – IB Class 6', 'IB Maths Home Tutor in Cyber City, Gurgaon – Class 6 | NXTutors', 'IB Maths Class 6 home tutor in Cyber City, Gurgaon: get 2–3 matched tutors near you, see each tutor\'s fee before the demo, and the first class is free.'],
        'gurugramsector-36mathematicshome-tutor-ib-class-6' => ['Maths Home Tutor in Sector 36, Gurugram – IB Class 6', 'IB Maths Home Tutor in Sector 36, Gurgaon – Class 6 | NXTutors', 'Find IB Maths Class 6 home tutors in Sector 36, Gurgaon. Get 2–3 matched tutors, nearest first, with each fee shown before a free first demo class.'],
        'gurugramsector-44igcsescience-home-tutor-class-9' => ['Science Home Tutor in Sector 44, Gurugram – IGCSE Class 9', 'Class 9 IGCSE Science Home Tutor in Sector 44, Gurgaon | NXTutors', 'Find IGCSE Science Class 9 home tutors in Sector 44, Gurgaon. Get 2–3 matched tutors, nearest first, with each fee shown before a free first demo class.'],
        'gurugramsector-44accountancy-home-tutor-ib-class-11' => ['Accountancy Home Tutor in Sector 44, Gurugram – IB Class 11', 'Class 11 Accountancy Home Tutor in Sector 44, Gurgaon | NXTutors', 'Class 11–12 Accountancy (CBSE or ISC) home tutor in Sector 44, Gurgaon: 2–3 matched tutors, nearest first, fees shown before a free first demo.'],
        'gurugramsector-47igcsemathematics' => ['Maths Home Tutor in Sector 47, Gurugram – IGCSE Class 9', 'IGCSE Maths Home Tutor in Sector 47, Gurgaon – Class 9 | NXTutors', 'IGCSE Maths Class 9 home tutor in Sector 47, Gurgaon: get 2–3 matched tutors near you, see each tutor\'s fee before the demo, and the first class is free.'],
        'gurugramsector-88maths-home-tutor-ib-class-6' => ['Maths Home Tutor in Sector 88, Gurugram – IB Class 6', 'IB Maths Home Tutor in Sector 88, Gurgaon – Class 6 | NXTutors', 'IB Maths Class 6 home tutor in Sector 88, Gurgaon: get 2–3 matched tutors near you, see each tutor\'s fee before the demo, and the first class is free.'],
        'gurugramsector-107ibeconomics' => ['Economics Home Tutor in Sector 107, Gurugram – IB Class 11', 'IB Economics Tutor in Sector 107, Gurgaon – Class 11 | NXTutors', 'Find IB Economics Class 11 home tutors in Sector 107, Gurgaon. Get 2–3 matched tutors, nearest first, with each fee shown before a free first demo class.'],
        'kolkata-southern-avenue-chemistry-class-12-home-tutor' => ['Chemistry Home Tutor in Southern Avenue, Kolkata – CBSE Class 12', 'CBSE Chemistry Home Tutor in Southern Avenue, Kolkata | NXTutors', 'Find CBSE Chemistry Class 12 home tutors in Southern Avenue, Kolkata. Get 2–3 matched tutors, nearest first, with each fee shown before a free first demo class.'],
        'kolkatasouthern-avenueeconomics' => ['CUET Economics Home Tuition in Southern Avenue, Kolkata', 'CUET Economics Home Tutor in Southern Avenue, Kolkata | NXTutors', 'CUET Economics home tutor in Southern Avenue, Kolkata: get 2–3 matched tutors near you, see each tutor\'s fee before the demo, and the first class is free.'],
        'kolkata-lake-gardens-economics-cuet-home-tutors' => ['CUET Economics Home Tutors in Lake Gardens, Kolkata', 'CUET Economics Home Tutor in Lake Gardens, Kolkata | NXTutors', 'CUET Economics home tutor in Lake Gardens, Kolkata: get 2–3 matched tutors near you, see each tutor\'s fee before the demo, and the first class is free.'],
        'best-cuet-coaching-in-golpark-gariahat-kolkata-economics-home' => ['CUET Economics Home Tuition in Golpark (Gariahat), Kolkata', 'CUET Economics Home Tutor in Golpark, Gariahat | NXTutors', 'Find CUET Economics home tutors in Golpark, Gariahat, Kolkata. Get 2–3 matched tutors, nearest first, with each fee shown before a free first demo class.'],
        'kolkatacamac-streetsocial-science-home-tutor-igcse-class-9' => ['IGCSE Social Science Tutor in Camac Street, Kolkata – Class 9', 'IGCSE Social Science Home Tutor in Camac Street | NXTutors', 'IGCSE Social Science Class 9 home tutor in Camac Street, Kolkata: 2–3 matched tutors, nearest first, fees shown before a free first demo. Online classes too.'],
    ];

    /** slug => new sections.hero.headline (only applied when the stored one contains "best"). */
    private const HEADLINES = [
        'sector-46-gurugram-maths-home-tutor-igcse-class-9' => 'Maths home tutor in Sector 46, Gurugram for IGCSE Class 9',
        'gurugramsector-48ibmathematicshome-tutor' => 'Maths home tutor in Sector 48, Gurugram for IB Class 6',
        'gurugramsector-65igcsemathematics' => 'Maths home tutor in Sector 65, Gurugram for IGCSE Class 9',
        'gurugramgolf-course-roadphysics-home-tutor-class-11' => 'In-home Physics tuition on Golf Course Road — Class 11 (CBSE)',
    ];

    private function backupTable(): void
    {
        if (! Schema::hasTable('seo_text_backups')) {
            Schema::create('seo_text_backups', function (Blueprint $t) {
                $t->id();
                $t->string('tag', 100);
                $t->string('tbl', 100);
                $t->unsignedBigInteger('row_id')->nullable();
                $t->string('col', 100)->nullable();
                $t->longText('value')->nullable();
                $t->timestamps();
            });
        }
    }

    private function backup(int $rowId, string $col, ?string $value): void
    {
        DB::table('seo_text_backups')->insert(['tag' => self::TAG, 'tbl' => self::TABLE, 'row_id' => $rowId, 'col' => $col, 'value' => $value, 'created_at' => now(), 'updated_at' => now()]);
    }

    public function up(): void
    {
        if (! Schema::hasTable(self::TABLE)) {
            return;
        }
        $this->backupTable();
        $done = DB::table('seo_text_backups')->where('tag', self::TAG)->pluck('row_id')->unique()->flip();
        $hasSections = Schema::hasColumn(self::TABLE, 'sections');
        $slugs = array_values(array_unique(array_merge(array_keys(self::PAGES), array_keys(self::HEADLINES))));

        foreach (DB::table(self::TABLE)->whereIn('slug', $slugs)->get() as $row) {
            if ($done->has($row->id)) {
                continue;
            }
            $slug = (string) $row->slug;
            $update = [];

            if (isset(self::PAGES[$slug])) {
                [$title, $metaTitle, $metaDesc] = self::PAGES[$slug];
                $update['title'] = mb_substr($title, 0, 250);
                if (preg_match(self::BANNED, (string) $row->meta_title)) {
                    $update['meta_title'] = mb_substr($metaTitle, 0, 250);
                }
                if (preg_match(self::BANNED, (string) $row->meta_description)) {
                    $update['meta_description'] = $metaDesc;
                }
            }

            if ($hasSections && isset(self::HEADLINES[$slug])) {
                $sections = json_decode((string) $row->sections, true);
                if (is_array($sections) && preg_match('/\bbest\b/iu', (string) data_get($sections, 'hero.headline', ''))) {
                    data_set($sections, 'hero.headline', self::HEADLINES[$slug]);
                    $update['sections'] = json_encode($sections, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
                }
            }

            if (! $update) {
                continue;
            }
            DB::transaction(function () use ($row, $update) {
                foreach (array_keys($update) as $col) {
                    $this->backup((int) $row->id, $col, $row->{$col});
                }
                DB::table(self::TABLE)->where('id', $row->id)->update($update);
            });
        }
    }

    public function down(): void
    {
        if (! Schema::hasTable('seo_text_backups') || ! Schema::hasTable(self::TABLE)) {
            return;
        }
        $cols = array_flip(Schema::getColumnListing(self::TABLE));
        foreach (DB::table('seo_text_backups')->where('tag', self::TAG)->orderBy('id')->get()->groupBy('row_id') as $rowId => $backups) {
            $restore = [];
            foreach ($backups as $b) {
                if (isset($cols[$b->col])) {
                    $restore[$b->col] = $b->value;
                }
            }
            if ($restore) {
                DB::table(self::TABLE)->where('id', $rowId)->update($restore);
            }
        }

        DB::table('seo_text_backups')->where('tag', self::TAG)->delete();
        if (DB::table('seo_text_backups')->count() === 0) {
            Schema::drop('seo_text_backups');
        }
    }
};
