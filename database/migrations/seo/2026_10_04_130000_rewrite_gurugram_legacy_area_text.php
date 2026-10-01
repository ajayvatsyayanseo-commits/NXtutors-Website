<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Gurugram area pages still showing Super Admin text, 1 Oct 2026. A crawl of
 * all 357 pages in sitemap-areas-gurugram.xml found the old body text and
 * FAQs on most of them: "Affordable Tutors: Starting ₹500/hr", "Hourly rates
 * range from ₹500 to ₹2000", ₹5,000–₹30,000 monthly packages, school names,
 * "background-verified", "best" and "top". This replaces it, like the DLF
 * migration (2026_10_04_110000), with page-specific text from
 * database/seo-content/areas/gurugram-area-rewrite.json (written from the
 * zone config, the zone page text and config/area_sectors.php only):
 *
 *  - area_desc and short_desc get the new text (short_desc kept ≤ 250);
 *  - the legacy sections (subjects_covered_desc, teacher_approch,
 *    tutor_types, package, why_choose) are emptied, so the page hides them;
 *  - the area's FAQs are replaced with four new ones;
 *  - the area's active "What Students Say" reviews are set to pending ('f'):
 *    they are the same seven templated testimonials on every page ("my son
 *    scored 90+", "Affordable home tuition"), which the rules do not allow.
 *
 * Entries with 'edits' (pages that already had researched text, such as
 * Sectors 38, 39 and 44, which named hospitals) get only those [from, to]
 * wording fixes; entries with 'reviews_only' (the rest of the Gurugram area
 * pages) only have their templated reviews set to pending. Pages with no
 * zone or sector on record keep their text for now (listed in the JSON note
 * of the audit, not here).
 *
 * Every old value, FAQ row and review status is copied first into
 * seo_text_backups, and down() puts them back exactly, then drops the backup
 * table once it is empty. Running up() twice backs up only once. Rows are
 * handled one area at a time, so ~300 pages stay well inside one deploy.
 */
return new class extends Migration
{
    private const TAG = '2026_10_04_130000_gurugram_area_text';

    private const COLUMNS = ['area_desc', 'short_desc', 'subjects_covered_desc', 'teacher_approch', 'tutor_types', 'package', 'why_choose'];

    private const FAQ_TABLE = 'city_area_related_faqs_managment';

    private const REVIEW_TABLE = 'city_area_review_managment';

    private const AREA_TABLE = 'city_area_list_managment';

    private function content(): array
    {
        $all = json_decode((string) @file_get_contents(database_path('seo-content/areas/gurugram-area-rewrite.json')), true) ?: [];

        return array_filter($all, fn ($v, $k) => $k[0] !== '_' && is_array($v), ARRAY_FILTER_USE_BOTH);
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

    private function backup(string $tbl, ?int $rowId, ?string $col, ?string $value): void
    {
        DB::table('seo_text_backups')->insert(['tag' => self::TAG, 'tbl' => $tbl, 'row_id' => $rowId, 'col' => $col, 'value' => $value, 'created_at' => now(), 'updated_at' => now()]);
    }

    public function up(): void
    {
        if (! Schema::hasTable('city_managment') || ! Schema::hasTable(self::AREA_TABLE)) {
            return;
        }
        $city = DB::table('city_managment')->where('slug', 'gurugram')->value('id');
        if (! $city) {
            return;
        }
        $this->backupTable();
        $columns = array_values(array_filter(self::COLUMNS, fn ($c) => Schema::hasColumn(self::AREA_TABLE, $c)));
        $faqs = Schema::hasTable(self::FAQ_TABLE);
        $hasStatus = $faqs && Schema::hasColumn(self::FAQ_TABLE, 'status');
        $reviews = Schema::hasTable(self::REVIEW_TABLE) && Schema::hasColumn(self::REVIEW_TABLE, 'review_status');
        $content = $this->content();
        if (! $content) {
            return;
        }
        $areas = DB::table(self::AREA_TABLE)->where('city_id', $city)->whereIn('slug', array_map('strval', array_keys($content)))->get()->keyBy('slug');
        $done = DB::table('seo_text_backups')->where('tag', self::TAG)->where('tbl', self::AREA_TABLE)->pluck('row_id')->unique()->flip();
        $reviewsDone = DB::table('seo_text_backups')->where('tag', self::TAG)->where('tbl', self::REVIEW_TABLE)->pluck('row_id')->unique()->flip();

        foreach ($content as $slug => $page) {
            $area = $areas->get((string) $slug);
            if (! $area) {
                continue;
            }

            DB::transaction(function () use ($area, $page, $columns, $faqs, $hasStatus, $reviews, $done, $reviewsDone) {
                if (empty($page['reviews_only']) && ! $done->has($area->id)) {
                    foreach ($columns as $c) {
                        $this->backup(self::AREA_TABLE, $area->id, $c, $area->{$c} ?? null);
                    }
                    if ($faqs) {
                        foreach (DB::table(self::FAQ_TABLE)->where('area_id', $area->id)->orderBy('id')->get() as $row) {
                            $this->backup(self::FAQ_TABLE, $area->id, null, json_encode((array) $row, JSON_UNESCAPED_UNICODE));
                        }
                    }
                }
                if ($reviews) {
                    $this->hideReviews($area->id, $reviewsDone);
                }
                if (! empty($page['reviews_only'])) {
                    return;
                }
                if (! empty($page['edits'])) {
                    $this->applyEdits($area, $page['edits'], $faqs);

                    return;
                }

                $update = [];
                foreach ($columns as $c) {
                    $update[$c] = match ($c) {
                        'area_desc' => (string) $page['about'],
                        'short_desc' => mb_substr((string) $page['short_desc'], 0, 250),
                        default => '',
                    };
                }
                DB::table(self::AREA_TABLE)->where('id', $area->id)->update($update);

                if ($faqs && ! empty($page['faqs'])) {
                    DB::table(self::FAQ_TABLE)->where('area_id', $area->id)->delete();
                    foreach ($page['faqs'] as [$q, $a]) {
                        DB::table(self::FAQ_TABLE)->insert(['area_id' => $area->id, 'question' => $q, 'answer' => e($a)] + ($hasStatus ? ['status' => 't'] : []));
                    }
                }
            });
        }
    }

    /**
     * Small wording fixes on pages that already have researched text: each
     * [from, to] pair is replaced in area_desc, short_desc and the FAQs (FAQ
     * answers were stored escaped, so the escaped form is replaced too).
     *
     * @param  list<array{0:string,1:string}>  $edits
     */
    private function applyEdits(object $area, array $edits, bool $faqs): void
    {
        $from = $to = [];
        foreach ($edits as [$f, $t]) {
            array_push($from, $f, e($f));
            array_push($to, $t, e($t));
        }
        $update = [];
        foreach (['area_desc', 'short_desc'] as $c) {
            if (isset($area->{$c}) && is_string($area->{$c}) && ($new = str_replace($from, $to, $area->{$c})) !== $area->{$c}) {
                $update[$c] = $new;
            }
        }
        if ($update) {
            DB::table(self::AREA_TABLE)->where('id', $area->id)->update($update);
        }
        if ($faqs) {
            foreach (DB::table(self::FAQ_TABLE)->where('area_id', $area->id)->get() as $row) {
                $q = str_replace($from, $to, (string) $row->question);
                $a = str_replace($from, $to, (string) $row->answer);
                if ($q !== (string) $row->question || $a !== (string) $row->answer) {
                    DB::table(self::FAQ_TABLE)->where('id', $row->id)->update(['question' => $q, 'answer' => $a]);
                }
            }
        }
    }

    /** Back up each review's status once, then set the active ones to pending. */
    private function hideReviews(int $areaId, \Illuminate\Support\Collection $done): void
    {
        foreach (DB::table(self::REVIEW_TABLE)->where('area_id', $areaId)->orderBy('id')->get(['id', 'review_status']) as $r) {
            if (! $done->has($r->id)) {
                $this->backup(self::REVIEW_TABLE, $r->id, 'review_status', $r->review_status);
            }
        }
        DB::table(self::REVIEW_TABLE)->where('area_id', $areaId)->where('review_status', 't')->update(['review_status' => 'f']);
    }

    public function down(): void
    {
        if (! Schema::hasTable('seo_text_backups') || ! Schema::hasTable(self::AREA_TABLE)) {
            return;
        }
        $rows = DB::table('seo_text_backups')->where('tag', self::TAG)->orderBy('id')->get();
        $areaRows = $rows->where('tbl', self::AREA_TABLE);
        $areaCols = array_flip(Schema::getColumnListing(self::AREA_TABLE));

        foreach ($areaRows->groupBy('row_id') as $areaId => $cols) {
            $restore = [];
            foreach ($cols as $b) {
                if (isset($areaCols[$b->col])) {
                    $restore[$b->col] = $b->value;
                }
            }
            if ($restore) {
                DB::table(self::AREA_TABLE)->where('id', $areaId)->update($restore);
            }
        }

        if (Schema::hasTable(self::FAQ_TABLE)) {
            $areaIds = $areaRows->pluck('row_id')->unique()->values()->all();
            foreach (array_chunk($areaIds, 200) as $chunk) {
                DB::table(self::FAQ_TABLE)->whereIn('area_id', $chunk)->delete();
            }
            $faqCols = array_flip(Schema::getColumnListing(self::FAQ_TABLE));
            foreach ($rows->where('tbl', self::FAQ_TABLE) as $b) {
                $old = array_intersect_key(json_decode((string) $b->value, true) ?: [], $faqCols);
                if ($old) {
                    DB::table(self::FAQ_TABLE)->insert($old);
                }
            }
        }

        if (Schema::hasTable(self::REVIEW_TABLE)) {
            foreach ($rows->where('tbl', self::REVIEW_TABLE) as $b) {
                DB::table(self::REVIEW_TABLE)->where('id', $b->row_id)->update(['review_status' => $b->value]);
            }
        }

        DB::table('seo_text_backups')->where('tag', self::TAG)->delete();
        if (DB::table('seo_text_backups')->count() === 0) {
            Schema::drop('seo_text_backups');
        }
    }
};
