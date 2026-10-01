<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * DLF Phases 1-5 and Golf Course Extn (Gurugram), 1 Oct 2026. The Super Admin
 * text on these six pages named schools and housing estates, promised
 * "background-verified" tutors, quoted ₹500/hour and ₹5,000–₹30,000 monthly
 * packages, said "best" and even printed an "SEO Keywords:" line. This
 * replaces it with page-specific text from database/seo-content/areas/
 * gurugram-dlf-about.json (zone guides, zone page text, the DLF guide post):
 *
 *  - area_desc and short_desc get the new text;
 *  - the legacy sections (subjects_covered_desc, teacher_approch, tutor_types,
 *    package, why_choose) are emptied, so the page hides them;
 *  - the area's FAQs are replaced with five new ones.
 *
 * Every old value and FAQ row is copied first into seo_text_backups (TEXT
 * columns), and down() puts them back exactly, then drops the backup table
 * once it is empty. Running up() twice backs up only once.
 */
return new class extends Migration
{
    private const TAG = '2026_10_04_110000_dlf_area_text';

    private const COLUMNS = ['area_desc', 'short_desc', 'subjects_covered_desc', 'teacher_approch', 'tutor_types', 'package', 'why_choose'];

    private const FAQ_TABLE = 'city_area_related_faqs_managment';

    private function content(): array
    {
        $all = json_decode((string) @file_get_contents(database_path('seo-content/areas/gurugram-dlf-about.json')), true) ?: [];

        return array_filter($all, fn ($v, $k) => $k[0] !== '_' && is_array($v), ARRAY_FILTER_USE_BOTH);
    }

    private function area(string $slug): ?object
    {
        $city = DB::table('city_managment')->where('slug', 'gurugram')->value('id');

        return $city ? DB::table('city_area_list_managment')->where('city_id', $city)->where('slug', $slug)->first() : null;
    }

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

    public function up(): void
    {
        if (! Schema::hasTable('city_managment') || ! Schema::hasTable('city_area_list_managment')) {
            return;
        }
        $this->backupTable();
        $columns = array_values(array_filter(self::COLUMNS, fn ($c) => Schema::hasColumn('city_area_list_managment', $c)));
        $faqs = Schema::hasTable(self::FAQ_TABLE);
        $hasStatus = $faqs && Schema::hasColumn(self::FAQ_TABLE, 'status');

        foreach ($this->content() as $slug => $page) {
            $area = $this->area((string) $slug);
            if (! $area) {
                continue;
            }
            $done = DB::table('seo_text_backups')->where('tag', self::TAG)->where('tbl', 'city_area_list_managment')->where('row_id', $area->id)->exists();

            if (! $done) {
                foreach ($columns as $c) {
                    DB::table('seo_text_backups')->insert(['tag' => self::TAG, 'tbl' => 'city_area_list_managment', 'row_id' => $area->id, 'col' => $c, 'value' => $area->{$c} ?? null, 'created_at' => now(), 'updated_at' => now()]);
                }
                if ($faqs) {
                    foreach (DB::table(self::FAQ_TABLE)->where('area_id', $area->id)->orderBy('id')->get() as $row) {
                        DB::table('seo_text_backups')->insert(['tag' => self::TAG, 'tbl' => self::FAQ_TABLE, 'row_id' => $area->id, 'col' => null, 'value' => json_encode((array) $row, JSON_UNESCAPED_UNICODE), 'created_at' => now(), 'updated_at' => now()]);
                    }
                }
            }

            $update = [];
            foreach ($columns as $c) {
                $update[$c] = match ($c) {
                    'area_desc' => (string) $page['about'],
                    'short_desc' => mb_substr((string) $page['short_desc'], 0, 250),
                    default => '',
                };
            }
            DB::table('city_area_list_managment')->where('id', $area->id)->update($update);

            if ($faqs && ! empty($page['faqs'])) {
                DB::table(self::FAQ_TABLE)->where('area_id', $area->id)->delete();
                foreach ($page['faqs'] as [$q, $a]) {
                    DB::table(self::FAQ_TABLE)->insert(['area_id' => $area->id, 'question' => $q, 'answer' => e($a)] + ($hasStatus ? ['status' => 't'] : []));
                }
            }
        }
    }

    public function down(): void
    {
        if (! Schema::hasTable('seo_text_backups') || ! Schema::hasTable('city_area_list_managment')) {
            return;
        }
        $rows = DB::table('seo_text_backups')->where('tag', self::TAG)->orderBy('id')->get();

        foreach ($rows->where('tbl', 'city_area_list_managment')->groupBy('row_id') as $areaId => $cols) {
            $restore = [];
            foreach ($cols as $b) {
                if (Schema::hasColumn('city_area_list_managment', $b->col)) {
                    $restore[$b->col] = $b->value;
                }
            }
            if ($restore) {
                DB::table('city_area_list_managment')->where('id', $areaId)->update($restore);
            }
        }

        if (Schema::hasTable(self::FAQ_TABLE)) {
            $areaIds = $rows->where('tbl', 'city_area_list_managment')->pluck('row_id')->unique()->all();
            DB::table(self::FAQ_TABLE)->whereIn('area_id', $areaIds)->delete();
            foreach ($rows->where('tbl', self::FAQ_TABLE) as $b) {
                $old = json_decode((string) $b->value, true) ?: [];
                $old = array_intersect_key($old, array_flip(Schema::getColumnListing(self::FAQ_TABLE)));
                if ($old) {
                    DB::table(self::FAQ_TABLE)->insert($old);
                }
            }
        }

        DB::table('seo_text_backups')->where('tag', self::TAG)->delete();
        if (DB::table('seo_text_backups')->count() === 0) {
            Schema::drop('seo_text_backups');
        }
    }
};
