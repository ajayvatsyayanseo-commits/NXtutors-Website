<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Live is not Verified (owner decision, 3 Oct 2026): while hiring fast a new
 * tutor's profile goes live at once and the Verified badge appears only after
 * the team has reviewed the ID (config tutors.publish_before_review). Text
 * that says a profile goes live only after the ID review is now false, so it
 * is reworded to what is true in both modes: tutors who join go through an ID
 * check, and the Verified badge appears only after the team's review.
 *
 * rewrite() is the one set of wording rules (rewritePlain() for area, zone
 * and city text, where the word "verified" is banned). The same rules were
 * applied to the source files (resources/views, database/seo-content,
 * app/Support; plain for seo-content/areas and zones), and here to the
 * copies earlier seo migrations put in the live database: area text and
 * FAQs, city text, blog bodies, pages and category text.
 *
 * Every changed value is first copied into seo_text_backups (tag below), and
 * down() writes those values back exactly. A value that would grow past 250
 * characters in a VARCHAR column is left alone (the 30 Sep outage rule).
 */
return new class extends Migration
{
    private const TAG = '2026_10_07_141000_id_check_wording';

    /** Tables and the text columns that may hold the wording (only those that exist are read). */
    private const TARGETS = [
        'city_area_list_managment' => ['area_desc', 'short_desc', 'subjects_covered_desc', 'teacher_approch', 'tutor_types', 'package', 'why_choose', 'meta_desc'],
        'city_area_related_faqs_managment' => ['question', 'answer'],
        'city_managment' => ['city_desc', 'meta_desc', 'long_desc', 'description'],
        'blog_managment' => ['bdesc', 'meta_desc', 'short_desc'],
        'pages' => ['description', 'meta_description'],
        'category' => ['cdesc', 'meta_desc'],
    ];

    /** Cheap LIKE filters; rewrite() decides. */
    private const NEEDLES = ['%live%', '%public%', '%visible%', '%published%', '%listed%'];

    /**
     * Area, zone and city text: the content rules ban the word "verified"
     * there (App\Support\SeoText::BANNED), so the claim is simply dropped:
     * "go through an ID check before their profile goes live, as" becomes
     * "go through an ID check, as".
     */
    private const PLAIN_TABLES = ['city_area_list_managment', 'city_area_related_faqs_managment', 'city_managment'];

    /** Area/zone text: the same rules, then the "before ... Verified" clause dropped. */
    public function rewritePlain(string $s): string
    {
        $s = $this->rewrite($s);
        $s = (string) preg_replace("/\\s+before\\s+(?:[\\w'’]+\\s+){1,3}(?:is|are)\\s+marked\\s+Verified\\b/u", '', $s);

        $s = (string) preg_replace('/\s+before\s+(?:you\s+get\s+the\s+Verified\s+badge|the\s+Verified\s+badge\s+appears)\b/', '', $s);

        // The two templated area FAQ answers keep their length (45–60 words)
        // and say when the badge comes, without the banned word.
        return (string) preg_replace('/\b(which our team reviews|that the team reviews)\. It is not a police check/', '$1, and the badge on the tutor card appears once that review is done. It is not a police check', $s);
    }

    /** The wording rules, in order. Whitespace inside a phrase may be a line break. */
    public function rewrite(string $s): string
    {
        $w = '\s+';
        $rules = [
            // "...and the profile only goes live after our team reviews a government photo ID"
            "/\\bthe{$w}profile{$w}only{$w}goes{$w}live{$w}after\\b/" => 'the Verified badge appears only after',
            // "before the/their/your/any profile goes live|is live|can go live|is made live|is visible|is published"
            "/\\b([Bb])efore{$w}(the|their|your|his|her|a|any|my){$w}(?:(tutor['’]s){$w})?profile{$w}(?:goes|is{$w}made|is|can{$w}go|went){$w}(?:live|public|visible|published)\\b/"
                => '$1efore $2 $3 profile is marked Verified',
            "/\\bbefore{$w}it{$w}goes{$w}live\\b/" => 'before it is marked Verified',
            "/\\bbefore{$w}they{$w}go{$w}live\\b/" => 'before they are marked Verified',
            "/\\bbefore{$w}going{$w}live\\b/" => 'before the Verified badge appears',
            "/\\bbefore{$w}anything{$w}(?:goes{$w}public|goes{$w}live|is{$w}published)\\b/" => 'before the Verified badge appears',
            "/\\bProfiles{$w}go{$w}live{$w}only{$w}after\\b/" => 'The Verified badge appears only after',
            "/\\bbefore{$w}their{$w}profiles{$w}go{$w}live\\b/" => 'before their profiles are marked Verified',
            "/\\bbefore{$w}their{$w}profile{$w}is{$w}listed\\b/" => 'before their profile is marked Verified',
            "/\\bTutor{$w}profiles{$w}go{$w}live{$w}only{$w}after\\b/" => 'Tutor profiles are marked Verified only after',
            "/\\bA{$w}tutor['’]s{$w}profile{$w}goes{$w}live{$w}only{$w}after\\b/" => 'A tutor\'s profile is marked Verified only after',
            "/\\bNo{$w}profile{$w}goes{$w}live{$w}until\\b/" => 'No profile carries the Verified badge until',
            "/\\bBefore{$w}any{$w}tutor{$w}profile{$w}goes{$w}live\\b/" => 'Before any tutor profile is marked Verified',
            "/\\bbefore{$w}(the|your|any|a){$w}profile{$w}(?:is{$w}shown|appears)(?:{$w}to{$w}families|{$w}in{$w}any{$w}[A-Z]\\w*{$w}shortlist)?(?=[\\s,;.:)<\"]|$)/" => 'before $1 profile is marked Verified',
            "/\\b([Yy]our|[Tt]he){$w}profile{$w}appears{$w}with{$w}(?:the|a){$w}Verified{$w}badge\\b/" => '$1 profile carries the Verified badge',
            "/\\bbefore{$w}your{$w}profile{$w}(?:can{$w}appear|becomes{$w}visible|is{$w}active)\\b/" => 'before your profile is marked Verified',
            "/\\bbefore{$w}profiles{$w}appear\\b/" => 'before profiles are marked Verified',
            "/\\bbefore{$w}you{$w}appear(?:{$w}anywhere|{$w}to{$w}families)?(?=[\\s,;.:)<\"]|$)/" => 'before you get the Verified badge',
            "/\\bbefore{$w}a{$w}tutor{$w}appears\\b/" => 'before a tutor is marked Verified',
            "/;{$w}until{$w}then{$w}nothing{$w}is{$w}public,/" => '; until then there is no Verified badge,',
            "/\\bChecks{$w}before{$w}she{$w}is{$w}listed\\b/" => 'Checks before she gets the Verified badge',
            // "...is marked Verified, and real tutors who pass carry a Verified badge" says it twice.
            "/(is{$w}marked{$w}Verified|are{$w}marked{$w}Verified|get{$w}the{$w}Verified{$w}badge)(?:,|;)?{$w}(?:and{$w})?(?:then{$w})?(?:(?:real{$w})?tutors{$w}who{$w}(?:pass|clear{$w}it|clear{$w}the{$w}check)|you{$w}then|you){$w}(?:carry|carries|show|shows|display|displays|get|gets|wear|wears){$w}(?:a|the){$w}Verified{$w}(?:badge|label)/"
                => '$1',
            // "your profile goes live with the Verified badge" (tutor-side storyboards)
            "/\\b([Tt]he|[Yy]our){$w}profile{$w}(?:goes|is){$w}(?:live|public|published)(?:{$w}and{$w}carries|{$w}carrying|{$w}with)?{$w}(?:the|a|its){$w}Verified{$w}badge\\b/"
                => '$1 profile carries the Verified badge',
            "/\\b([Cc]leared|[Aa]pproved){$w}profiles{$w}go{$w}live{$w}(?:with|carrying){$w}(?:the|a){$w}Verified{$w}badge\\b/" => '$1 profiles carry the Verified badge',
            "/\\b([Cc]leared){$w}tutors{$w}go{$w}live{$w}carrying{$w}the{$w}Verified{$w}badge\\b/" => '$1 tutors carry the Verified badge',
            "/\\bGo{$w}live{$w}with{$w}the{$w}Verified{$w}badge{$w}once{$w}cleared\\b/" => 'Get the Verified badge once cleared',
            "/\\bthe{$w}Verified{$w}badge{$w}appears{$w}and{$w}your{$w}profile{$w}goes{$w}public\\b/" => 'the Verified badge appears on your profile',
            "/\\bAfter{$w}the{$w}check,{$w}your{$w}profile{$w}goes{$w}live,/" => 'After the check, your profile carries the Verified badge,',
            "/\\bprofile{$w}card{$w}goes{$w}live{$w}with{$w}a{$w}verified{$w}badge\\b/" => 'profile card gets a verified badge',
            "/\\bTeam{$w}review,{$w}then{$w}live\\b/" => 'Team review, then Verified',
        ];
        foreach ($rules as $pattern => $to) {
            $s = (string) preg_replace($pattern, $to, $s);
        }
        // The "says it twice" rule once more, for phrases the later rules made.
        foreach ($rules as $pattern => $to) {
            if ($to === '$1') {
                $s = (string) preg_replace($pattern, $to, $s);
            }
        }

        // "before the  profile" when the optional tutor's group was empty.
        return (string) preg_replace('/\b([Bb])efore (the|their|your|his|her|a|any|my)  profile is marked Verified/', '$1efore $2 profile is marked Verified', $s);
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

    /** @return array<string,string> column => type name, for the target columns that exist */
    private function columns(string $table): array
    {
        $out = [];
        foreach (Schema::getColumns($table) as $c) {
            if (in_array($c['name'], self::TARGETS[$table], true)) {
                $out[$c['name']] = strtolower((string) ($c['type_name'] ?? $c['type'] ?? ''));
            }
        }

        return $out;
    }

    public function up(): void
    {
        $this->backupTable();
        $done = DB::table('seo_text_backups')->where('tag', self::TAG)->get(['tbl', 'row_id', 'col'])
            ->map(fn ($r) => $r->tbl.'|'.$r->row_id.'|'.$r->col)->flip();

        foreach (array_keys(self::TARGETS) as $table) {
            if (! Schema::hasTable($table)) {
                continue;
            }
            $cols = $this->columns($table);
            if ($cols === []) {
                continue;
            }
            $query = DB::table($table)->select(array_merge(['id'], array_keys($cols)))
                ->where(function ($w) use ($cols) {
                    foreach (array_keys($cols) as $c) {
                        foreach (self::NEEDLES as $n) {
                            $w->orWhere($c, 'like', $n);
                        }
                    }
                });

            foreach ($query->orderBy('id')->get() as $row) {
                $update = [];
                foreach ($cols as $c => $type) {
                    $old = $row->{$c};
                    if (! is_string($old) || $old === '') {
                        continue;
                    }
                    $new = in_array($table, self::PLAIN_TABLES, true) ? $this->rewritePlain($old) : $this->rewrite($old);
                    if ($new === $old) {
                        continue;
                    }
                    $isLongText = str_contains($type, 'text') || $type === 'clob';
                    if (! $isLongText && mb_strlen($new) > 250) {
                        continue; // VARCHAR: never risk a too-long value mid-deploy
                    }
                    if (! $done->has($table.'|'.$row->id.'|'.$c)) {
                        DB::table('seo_text_backups')->insert(['tag' => self::TAG, 'tbl' => $table, 'row_id' => $row->id, 'col' => $c, 'value' => $old, 'created_at' => now(), 'updated_at' => now()]);
                    }
                    $update[$c] = $new;
                }
                if ($update) {
                    DB::table($table)->where('id', $row->id)->update($update);
                }
            }
        }
    }

    public function down(): void
    {
        if (! Schema::hasTable('seo_text_backups')) {
            return;
        }
        foreach (DB::table('seo_text_backups')->where('tag', self::TAG)->orderBy('id')->get() as $b) {
            if (Schema::hasTable($b->tbl) && Schema::hasColumn($b->tbl, $b->col)) {
                DB::table($b->tbl)->where('id', $b->row_id)->update([$b->col => $b->value]);
            }
        }
        DB::table('seo_text_backups')->where('tag', self::TAG)->delete();
        if (DB::table('seo_text_backups')->count() === 0) {
            Schema::drop('seo_text_backups');
        }
    }
};
