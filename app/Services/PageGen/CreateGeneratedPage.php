<?php

namespace App\Services\PageGen;

use App\Models\GeneratedPage;
use App\Services\OpenAiPageGenerator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateGeneratedPage
{
    public function __construct(
        private OpenAiPageGenerator $gen
    ) {}

    public function create(array $data, ?int $createdBy = null): GeneratedPage
    {
        // -----------------------------
        // 0) Defaults + normalize
        // -----------------------------
        $data['country']    = $data['country'] ?? 'India';
        $data['is_premium'] = (bool)($data['is_premium'] ?? false);

        $data['subjects']       = $data['subjects'] ?? [];
        $data['boards']         = $data['boards'] ?? [];
        $data['classes_tracks'] = $data['classes_tracks'] ?? [];

        // Category normalization
        $data['category'] = $data['category'] ?? 'academic';

        if ($data['category'] === 'skill') {
            $data['subjects'] = [];
            $data['boards'] = [];
            $data['classes_tracks'] = [];

            if (empty($data['skill_name'])) {
                throw new \InvalidArgumentException('Skill name is required for Skill category.');
            }
        } else {
            $data['skill_name'] = null;
            $data['skill_level'] = null;
        }

        // Optional arrays (no hallucination)
        $data['nearby_schools']   = $data['nearby_schools'] ?? [];
        $data['nearby_landmarks'] = $data['nearby_landmarks'] ?? [];
        $data['premium_zones']    = $data['premium_zones'] ?? [];
        $data['blogs']            = $data['blogs'] ?? [];
        $data['nearby_pages']     = $data['nearby_pages'] ?? [];

        // -----------------------------
        // 1) Demand / Index / Canonical (ensure present)
        // -----------------------------
        $data['demand_score'] = isset($data['demand_score'])
            ? (int)$data['demand_score']
            : $this->demandScore($data);

        $data['index_flag'] = isset($data['index_flag'])
            ? (string)$data['index_flag']
            : $this->indexFlagFromScore($data['demand_score']);

        $data['canonical_target'] = isset($data['canonical_target'])
            ? (string)$data['canonical_target']
            : $this->canonicalTarget($data);

        // Hard skip
        if ($data['index_flag'] === 'Skip') {
            throw new \RuntimeException("Skipped: Low demand combination (score {$data['demand_score']}).");
        }

        // Cost control for Noindex
        if (($data['index_flag'] ?? 'Index') === 'Noindex') {
            $data['target_words'] = min((int)($data['target_words'] ?? 1800), 1200);
        }

        // -----------------------------
        // 2) Duplication rule (FINAL)
        // -----------------------------
        $canon = trim((string)($data['canonical_target'] ?? ''));

        return DB::transaction(function () use ($data, $createdBy, $canon) {

            // (A) Same intent exists? Return it
            if ($canon !== '') {
                $existing = GeneratedPage::query()
                    ->where('status', 'published')
                    ->where('city', $data['city'] ?? null)
                    ->where('location', $data['location'] ?? null)
                    ->where('service_mode', $data['service_mode'] ?? null)
                    ->where('payload->category', $data['category'] ?? null)
                    ->where('payload->canonical_target', $canon)
                    ->latest('id')
                    ->first();

                if ($existing) {
                    return $existing;
                }
            }

            // (B) If trying Index but canonical already has Index => force Noindex
            if ($canon !== '' && ($data['index_flag'] ?? 'Index') === 'Index') {
                $canonHasIndex = GeneratedPage::query()
                    ->where('status', 'published')
                    ->where('payload->canonical_target', $canon)
                    ->where('payload->index_flag', 'Index')
                    ->exists();

                if ($canonHasIndex) {
                    $data['index_flag'] = 'Noindex';
                    $data['target_words'] = min((int)($data['target_words'] ?? 1800), 1200);
                }
            }

            // -----------------------------
            // 3) Premium Schools (BEFORE AI)
            // -----------------------------
            if (!isset($data['premium_schools']) || count((array)$data['premium_schools']) < 5) {
                $data['premium_schools'] = $this->fetchPremiumSchools($data);
            }

            // ✅ hard ensure always array
            $data['premium_schools'] = is_array($data['premium_schools']) ? $data['premium_schools'] : [];

            // -----------------------------
            // 4) AI Generate
            // -----------------------------
            $ai = $this->gen->generate($data);

            // Inject seo_controls inside sections
            $ai['sections'] = is_array($ai['sections'] ?? null) ? $ai['sections'] : [];
            $ai['sections']['seo_controls'] = [
                'demand_score'     => (int)($data['demand_score'] ?? 0),
                'index_flag'       => (string)($data['index_flag'] ?? 'Index'),
                'canonical_target' => (string)($data['canonical_target'] ?? ''),
            ];

            // -----------------------------
            // 5) Slug (unique)
            // -----------------------------
            $slugBase = $ai['slug']
                ?? (($data['category'] === 'skill')
                    ? ($data['skill_name'] . ' classes in ' . $data['location'] . ' ' . $data['city'])
                    : ($data['city'] . ' ' . $data['location'] . ' tutors')
                );

            $slug = Str::slug($slugBase) ?: Str::random(8);

            if (GeneratedPage::where('slug', $slug)->exists()) {
                $slug .= '-' . strtolower(Str::random(4));
            }

            // ✅ IMPORTANT: premium_schools must be saved inside payload
            $data['premium_schools'] = $data['premium_schools'] ?? [];

            // -----------------------------
            // 6) Save Page
            // -----------------------------
            $page = GeneratedPage::create([
                'slug' => $slug,

                'title'            => $ai['title'] ?? ucfirst($slugBase),
                'meta_title'       => $ai['meta_title'] ?? ($ai['title'] ?? 'NXTutors'),
                'meta_description' => $ai['meta_description'] ?? '',

                'sections'    => $ai['sections'] ?? [],
                'faqs'        => $ai['faqs'] ?? [],
                'interlinks'  => $ai['interlinks'] ?? [],

                'local_reviews'     => $ai['local_reviews'] ?? [],
                'local_schools'     => $ai['local_schools'] ?? [],
                'local_institutes'  => $ai['local_institutes'] ?? [],

                'country'        => $data['country'],
                'state'          => $data['state'],
                'city'           => $data['city'],
                'location'       => $data['location'],
                'hyper_location' => $data['hyper_location'] ?? null,
                'page_type'      => $data['page_type'],
                'service_mode'   => $data['service_mode'],

                'is_premium'      => (bool)$data['is_premium'],
                'primary_keyword' => $data['primary_keyword'] ?? null,

                'subjects'       => $data['subjects'],
                'boards'         => $data['boards'],
                'classes_tracks' => $data['classes_tracks'],

                 
                'payload' => $data,

                'html' => app(\App\Http\Controllers\SuperAdmin\PageGeneratorController::class)
                    ->buildHtmlFromSections($ai['sections'] ?? []),

                'status'     => $data['status'] ?? 'draft',
                'created_by' => $createdBy,
            ]);

            // Schemas
            $schemas = app(\App\Services\NxtSchemaBuilder::class)->build($page);
            $page->update(['schemas' => $schemas]);

            return $page;
        });
    }

    // -----------------------------
    // Helpers (same as controller)
    // -----------------------------
    private function norm(?string $v): string
    {
        return trim(mb_strtolower((string)$v));
    }

    private function extractClassNumberFromAny(array $data): ?int
    {
        $candidates = [];
        foreach ((array)($data['classes_tracks'] ?? []) as $t) $candidates[] = $t;

        foreach ($candidates as $label) {
            if (preg_match('/\bclass\s*(\d{1,2})\b/i', (string)$label, $m)) {
                return (int)$m[1];
            }
        }
        return null;
    }

    private function demandScore(array $data): int
    {
        $score = 0;

        $boards   = array_map([$this,'norm'], (array)($data['boards'] ?? []));
        $subjects = array_map([$this,'norm'], (array)($data['subjects'] ?? []));
        $tracks   = array_map([$this,'norm'], (array)($data['classes_tracks'] ?? []));

        $classNo = $this->extractClassNumberFromAny($data);

        foreach ($boards as $b) {
            if (in_array($b, ['cbse','icse','isc','igcse','ib'], true)) { $score += 2; break; }
        }

        foreach ($tracks as $t) {
            if (in_array($t, ['jee (mains/advanced)','jee','neet','cuet'], true)) { $score += 5; break; }
        }

        $hasIB    = in_array('ib', $boards, true);
        $hasIGCSE = in_array('igcse', $boards, true);

        if ($classNo !== null) {
            if ($hasIB && $classNo >= 6 && $classNo <= 12) $score += 4;
            if ($hasIGCSE && $classNo >= 9 && $classNo <= 10) $score += 4;
        }

        $top3 = ['mathematics','maths','physics','chemistry'];
        $top2 = ['biology','english','computer science','economics'];

        $subScore = 0;
        foreach ($subjects as $s) {
            if (in_array($s, $top3, true)) { $subScore = max($subScore, 3); continue; }
            if (in_array($s, $top2, true)) { $subScore = max($subScore, 2); continue; }
            $subScore = max($subScore, 1);
        }
        if ($subScore === 0) $subScore = 1;
        $score += $subScore;

        if ($classNo !== null && in_array($classNo, [10,11,12], true)) $score += 2;
        else $score += 1;

        return $score;
    }

    private function indexFlagFromScore(int $score): string
    {
        if ($score >= 7) return 'Index';
        if ($score >= 5) return 'Noindex';
        return 'Skip';
    }

    private function canonicalTarget(array $data): string
    {
        $city     = $data['city'] ?? '';
        $location = $data['location'] ?? '';

        $citySlug = Str::slug($city);
        $locSlug  = Str::slug($location);

        // ✅ skill canonical
        if (($data['category'] ?? '') === 'skill') {
            $skill = $data['skill_name'] ?? 'classes';
            $skillSlug = Str::slug($skill) ?: 'classes';
            return "/{$citySlug}/{$locSlug}/{$skillSlug}";
        }

        $subjects = (array)($data['subjects'] ?? []);
        $subject  = $subjects[0] ?? 'tutors';
        $sub      = $this->norm($subject);

        $subjectSlug = match ($sub) {
            'maths','mathematics' => 'mathematics',
            'computer science','cs' => 'computer-science',
            default => Str::slug($subject),
        };

        $subjectSlug = $subjectSlug ?: 'tutors';

        return "/{$citySlug}/{$locSlug}/{$subjectSlug}";
    }

    private function buildBoardCats(array $boards): array
    {
        $out = [];
        foreach ($boards as $b) {
            $b = strtoupper(trim((string)$b));
            if ($b === '') continue;

            if (str_contains($b, 'IB')) $out[] = 'IB';
            if (str_contains($b, 'IGCSE')) $out[] = 'IGCSE';
            if (str_contains($b, 'ICSE') || str_contains($b, 'ISC')) $out[] = 'ICSE';
            if (str_contains($b, 'CBSE')) $out[] = 'CBSE';
        }
        return array_values(array_unique($out));
    }

    private function fetchPremiumSchools(array $data): array
    {
        $city = trim((string)($data['city'] ?? ''));
        $loc  = trim((string)($data['location'] ?? ''));

        if ($city === '') return [];

        $boardCats = $this->buildBoardCats((array)($data['boards'] ?? []));

        $q = \App\Models\PremiumSchool::query()
            ->whereRaw('LOWER(city) = LOWER(?)', [$city]);

        if (!empty($boardCats)) {
            $q->whereIn('board_category', $boardCats);
        }

        $q->orderByRaw("CASE WHEN premium_tier='A' THEN 0 ELSE 1 END")
          ->orderByRaw("CASE WHEN LOWER(?) LIKE CONCAT('%', LOWER(area), '%') THEN 0 ELSE 1 END", [$loc])
          ->limit(20);

        $pool = $q->get(['city','area','school_name','board','board_category','premium_tier','notes'])->toArray();

        if (count($pool) < 5) {
            $pool = \App\Models\PremiumSchool::query()
                ->whereRaw('LOWER(city) = LOWER(?)', [$city])
                ->orderByRaw("CASE WHEN premium_tier='A' THEN 0 ELSE 1 END")
                ->limit(20)
                ->get(['city','area','school_name','board','board_category','premium_tier','notes'])
                ->toArray();
        }

        return array_slice($pool, 0, 5);
    }
}
