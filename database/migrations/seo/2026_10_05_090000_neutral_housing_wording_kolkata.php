<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Neutral housing wording for Kolkata (5 Oct 2026): area text describes
 * housing (old houses, apartment buildings), never the wealth or class of the
 * people who live there. Rewrites "affluent", "wealthy" and "middle-class"
 * that the Kolkata launch copied into area_desc and FAQs from
 * database/seo-content/areas/kolkata-*.json (the same new text is in those
 * files). Plain substring swaps per row; a row edited by hand since is left
 * alone. down() swaps the old text back.
 */
return new class extends Migration
{
    /** [city slug, area slug, old, new] in city_area_list_managment.area_desc */
    private const AREAS = [
        ['kolkata', 'ballygunge', 'Ballygunge is one of the older and more affluent parts of South Kolkata,', 'Ballygunge is one of the older parts of South Kolkata,'],
        ['kolkata', 'ballygunge', 'as wealthy families moved south from north Calcutta', 'as families moved south from north Calcutta'],
        ['kolkata', 'bhowanipore', 'and Bengali middle-class households across the rest,', 'and Bengali households across the rest,'],
        ['kolkata', 'dhakuria', 'it developed as a denser middle-class area of family houses', 'it developed as a denser area of family houses'],
        ['kolkata', 'sovabazar', 'It grew as a wealthy merchant quarter', 'It grew as a merchant quarter'],
    ];

    /** [city slug, area slug, old, new] in that area's FAQ question/answer */
    private const FAQS = [
        ['kolkata', 'dhakuria', 'Dhakuria grew as a denser middle-class area of family houses', 'Dhakuria grew as a denser area of family houses'],
    ];

    /** [blog slug, old, new] in blog_managment.bdesc */
    private const BLOGS = [
        ['north-kolkata-and-howrah-tuition-guide', 'grew as a wealthy merchant quarter, and its family mansions', 'grew as a merchant quarter, and its family mansions'],
    ];

    public function up(): void
    {
        $this->run(false);
    }

    public function down(): void
    {
        $this->run(true);
    }

    private function run(bool $reverse): void
    {
        $pick = fn (array $s) => $reverse ? [$s[1], $s[0]] : $s;

        if (Schema::hasTable('city_managment') && Schema::hasTable('city_area_list_managment')) {
            foreach ($this->ordered(self::AREAS, $reverse) as [$city, $area, $old, $new]) {
                [$from, $to] = $pick([$old, $new]);
                foreach ($this->areaIds($city, $area) as $id) {
                    $desc = (string) DB::table('city_area_list_managment')->where('id', $id)->value('area_desc');
                    if (str_contains($desc, $from)) {
                        DB::table('city_area_list_managment')->where('id', $id)->update(['area_desc' => str_replace($from, $to, $desc)]);
                    }
                }
            }

            if (Schema::hasTable('city_area_related_faqs_managment')) {
                foreach ($this->ordered(self::FAQS, $reverse) as [$city, $area, $old, $new]) {
                    [$from, $to] = $pick([$old, $new]);
                    foreach ($this->areaIds($city, $area) as $id) {
                        foreach (DB::table('city_area_related_faqs_managment')->where('area_id', $id)->get(['id', 'question', 'answer']) as $row) {
                            $q = str_replace($from, $to, (string) $row->question);
                            $a = str_replace(e($from), e($to), (string) $row->answer);
                            if ($q !== (string) $row->question || $a !== (string) $row->answer) {
                                DB::table('city_area_related_faqs_managment')->where('id', $row->id)->update(['question' => $q, 'answer' => $a]);
                            }
                        }
                    }
                }
            }
        }

        if (Schema::hasTable('blog_managment')) {
            foreach ($this->ordered(self::BLOGS, $reverse) as [$slug, $old, $new]) {
                [$from, $to] = $pick([$old, $new]);
                foreach (DB::table('blog_managment')->where('slug', $slug)->get(['id', 'bdesc']) as $row) {
                    $body = (string) $row->bdesc;
                    if (str_contains($body, $from)) {
                        DB::table('blog_managment')->where('id', $row->id)->update(['bdesc' => str_replace($from, $to, $body)]);
                    }
                }
            }
        }
    }

    private function ordered(array $swaps, bool $reverse): array
    {
        return $reverse ? array_reverse($swaps) : $swaps;
    }

    private function areaIds(string $city, string $area): array
    {
        $cityId = DB::table('city_managment')->where('slug', $city)->value('id');

        return $cityId
            ? DB::table('city_area_list_managment')->where('city_id', $cityId)->where('slug', $area)->pluck('id')->all()
            : [];
    }
};
