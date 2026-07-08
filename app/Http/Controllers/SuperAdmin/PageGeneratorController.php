<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\GeneratedPage;
use App\Models\Category;
use App\Models\Register;
use App\Models\Blog;
use App\Services\OpenAiPageGenerator;
use App\Models\PremiumSchool;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageGeneratorController extends Controller
{
    public function create()
    {
       $categories = Category::where('pid', 0)->where('cid', 0)->where('status', 't')->get();
        return view('super.page-generator.create', compact('categories'));
    }
      public function index()
    {
        $pages = GeneratedPage::latest()->get(); // date-wise latest first
        return view('super.page-generator.index', compact('pages'));
    }

    public function edit(GeneratedPage $page)
    {
        return view('super.page-generator.edit', compact('page'));
    }
 

    private function norm(?string $v): string
    {
        return trim(mb_strtolower((string) $v));
    }

    private function extractClassNumberFromAny(array $data): ?int
    {
        $candidates = [];

        foreach ((array)($data['classes_tracks'] ?? []) as $t) {
            $candidates[] = $t;
        }

        foreach ($candidates as $label) {
            if (preg_match('/\bclass\s*(\d{1,2})\b/i', $label, $m)) {
                return (int) $m[1];
            }
        }
        return null;
    }

    private function demandScore(array $data): int
    {
        $score = 0;

        $boards   = array_map([$this, 'norm'], (array)($data['boards'] ?? []));
        $subjects = array_map([$this, 'norm'], (array)($data['subjects'] ?? []));
        $tracks   = array_map([$this, 'norm'], (array)($data['classes_tracks'] ?? []));

        $classNo = $this->extractClassNumberFromAny($data);

        // 3.1 Board weight
        foreach ($boards as $b) {
            if (in_array($b, ['cbse', 'icse', 'isc', 'igcse', 'ib'], true)) {
                $score += 2;
                break;
            }
        }

        // 3.2 Exam bucket / track weight
        foreach ($tracks as $t) {
            if (in_array($t, ['jee (mains/advanced)', 'jee', 'neet', 'cuet'], true)) {
                $score += 5;
                break;
            }
        }

        // 3.2b IB/IGCSE boost
        $hasIB    = in_array('ib', $boards, true);
        $hasIGCSE = in_array('igcse', $boards, true);

        if ($classNo !== null) {
            if ($hasIB && $classNo >= 6 && $classNo <= 12) {
                $score += 4; // IB MYP/DP
            }
            if ($hasIGCSE && $classNo >= 9 && $classNo <= 10) {
                $score += 4; // IGCSE core years
            }
        }

        // 3.3 High value subjects (pick best)
        $top3 = ['mathematics', 'maths', 'physics', 'chemistry'];
        $top2 = ['biology', 'english', 'computer science', 'economics'];

        $subScore = 0;
        foreach ($subjects as $s) {
            if (in_array($s, $top3, true)) {
                $subScore = max($subScore, 3);
                continue;
            }
            if (in_array($s, $top2, true)) {
                $subScore = max($subScore, 2);
                continue;
            }
            $subScore = max($subScore, 1);
        }
        if ($subScore === 0) $subScore = 1;
        $score += $subScore;

        // 3.4 High conversion classes
        if ($classNo !== null && in_array($classNo, [10, 11, 12], true)) {
            $score += 2;
        } else {
            $score += 1;
        }

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

        // ✅ Skill pages canonical = skill-name
        if (($data['category'] ?? '') === 'skill') {
            $skill = $data['skill_name'] ?? 'classes';
            $skillSlug = Str::slug($skill) ?: 'classes';
            return "/{$citySlug}/{$locSlug}/{$skillSlug}";
        }

        // Academic canonical = best subject (first provided)
        $subjects = (array)($data['subjects'] ?? []);
        $subject  = $subjects[0] ?? 'tutors';
        $subNorm  = $this->norm($subject);

        $subjectSlug = match ($subNorm) {
            'maths', 'mathematics' => 'mathematics',
            'computer science', 'cs' => 'computer-science',
            default => Str::slug($subject),
        };

        $subjectSlug = $subjectSlug ?: 'tutors';

        return "/{$citySlug}/{$locSlug}/{$subjectSlug}";
    }

    public function destroy($id)
{
    $area = GeneratedPage::findOrFail($id);
 

    $area->delete();

    return redirect()->back()->with('success', 'Generated pages deleted successfully.');
}


    // ---------------------------
    // ✅ STORE
    // ---------------------------

    public function store(Request $request, OpenAiPageGenerator $gen)
{
    $data = $request->validate([
        'state' => 'required|string|max:100',
        'city' => 'required|string|max:100',
        'location' => 'required|string|max:120',
        'hyper_location' => 'nullable|string|max:120',
        'page_type' => 'required|string|max:80',

        'category' => 'required|in:academic,skill',

        // Academic arrays
        'subjects' => 'nullable|array',
        'subjects.*' => 'string|max:50',
        'boards' => 'nullable|array',
        'boards.*' => 'string|max:50',
        'classes_tracks' => 'nullable|array',
        'classes_tracks.*' => 'string|max:80',

        // Skill fields
        'skill_name' => 'nullable|string|max:80',
        'skill_level' => 'nullable|in:beginner,intermediate,advanced',

        // Meta / status
        'service_mode' => 'required|string|max:40',
        'is_premium' => 'nullable|boolean',
        'primary_keyword' => 'nullable|string|max:150',
        'status' => 'required|in:draft,published',

        // Advanced
        'target_words' => 'nullable|integer|min:800|max:2600',
        'intent_bias' => 'nullable|in:seo_first,conversion_first,authority_first,balanced',
        'internal_linking' => 'nullable|in:conservative,balanced,aggressive',
        'language_variant' => 'nullable|in:english_us,english_uk,english_india,international',
        'syllabus_depth' => 'nullable|in:light_overview,board_aligned_detailed,exam_oriented,balanced',
    ]);

    // Defaults
    $data['country'] = 'India';
    $data['is_premium'] = (bool)($data['is_premium'] ?? false);

    // Normalize arrays
    $data['subjects'] = $data['subjects'] ?? [];
    $data['boards'] = $data['boards'] ?? [];
    $data['classes_tracks'] = $data['classes_tracks'] ?? [];

    // ✅ Category normalization
    if ($data['category'] === 'skill') {
        $data['subjects'] = [];
        $data['boards'] = [];
        $data['classes_tracks'] = [];

        if (empty($data['skill_name'])) {
            return back()->withErrors('Skill name is required for Skill category.')->withInput();
        }
    } else {
        $data['skill_name'] = null;
        $data['skill_level'] = null;
    }

    // Optional DB-driven inputs (kept blank if not provided)
    $data['nearby_schools'] = $data['nearby_schools'] ?? [];
    $data['nearby_landmarks'] = $data['nearby_landmarks'] ?? [];
    $data['premium_zones'] = $data['premium_zones'] ?? [];
    $data['blogs'] = $data['blogs'] ?? [];
    $data['nearby_pages'] = $data['nearby_pages'] ?? [];

    // ✅ Demand / Index / Canonical
    $data['demand_score'] = $this->demandScore($data);
    $data['index_flag'] = $this->indexFlagFromScore($data['demand_score']);
    $data['canonical_target'] = $this->canonicalTarget($data);

    // ✅ If Skip, do not generate
    if ($data['index_flag'] === 'Skip') {
        return back()->withErrors("Skipped: Low demand combination (score {$data['demand_score']}).")->withInput();
    }

    // ✅ DUPLICATE GUARD (Canonical-based)
    // Same canonical ka ek Index page already published hai => new ko Noindex banao
    $canon = $data['canonical_target'] ?? null;
    if ($canon) {
        $existingIndex = \App\Models\GeneratedPage::query()
            ->where('status', 'published')
            ->where('payload->canonical_target', $canon)
            ->where('payload->index_flag', 'Index')
            ->exists();

        if ($existingIndex && $data['index_flag'] === 'Index') {
            $data['index_flag'] = 'Noindex';
        }
    }

    // ✅ Reduce AI cost for Noindex pages (support pages)
    if ($data['index_flag'] === 'Noindex') {
        $data['target_words'] = min((int)($data['target_words'] ?? 1800), 1400);
    }

    $city = trim((string)$data['city']);
    $loc  = trim((string)$data['location']);

    // boards -> board_category map
    $boardCats = [];
    foreach ((array)$data['boards'] as $b) {
        $b = strtoupper(trim((string)$b));
        if ($b === '') continue;

        if (str_contains($b, 'IB')) $boardCats[] = 'IB';
        if (str_contains($b, 'IGCSE')) $boardCats[] = 'IGCSE';
        if (str_contains($b, 'ICSE') || str_contains($b, 'ISC')) $boardCats[] = 'ICSE';
        if (str_contains($b, 'CBSE')) $boardCats[] = 'CBSE';
    }
    $boardCats = array_values(array_unique($boardCats));

    // $q = PremiumSchool::query()
    //     ->where('city', $city);
    $q = PremiumSchool::query()
    ->whereRaw('LOWER(city) = LOWER(?)', [$city]); 

    // board filter only if boards selected
    if (!empty($boardCats)) {
        $q->whereIn('board_category', $boardCats);
    }

    // Prefer: tier A first + area match preference
    $q->orderByRaw("CASE WHEN premium_tier='A' THEN 0 ELSE 1 END")
      //->orderByRaw("CASE WHEN ? LIKE CONCAT('%', area, '%') THEN 0 ELSE 1 END", [$loc])
    ->orderByRaw("CASE WHEN LOWER(?) LIKE CONCAT('%', LOWER(area), '%') THEN 0 ELSE 1 END", [$loc])

      ->limit(20);

    // $premiumPool = $q->get([
    //     'city','area','school_name','board','board_category','premium_tier','notes'
    // ])->toArray();

      $premiumPool = $q->get([
    'city','area','school_name','board','board_category','premium_tier','notes'
])->toArray();


    // fallback if < 5: same city any boards
    if (count($premiumPool) < 5) {
        $premiumPool = PremiumSchool::where('city', $city)
            ->orderByRaw("CASE WHEN premium_tier='A' THEN 0 ELSE 1 END")
            ->limit(20)
            ->get(['city','area','school_name','board','board_category','premium_tier','notes'])
            ->toArray();
    }

    // exactly 5 for generator
    $data['premium_schools'] = array_slice($premiumPool, 0, 5);

    // ✅ AI generation
    try {
        $ai = $gen->generate($data);
    } catch (\Throwable $e) {
        return back()->withErrors('AI generation failed: ' . $e->getMessage())->withInput();
    }

    // ✅ Attach seo controls
    $ai['sections']['seo_controls'] = [
        'demand_score' => $data['demand_score'],
        'index_flag' => $data['index_flag'],
        'canonical_target' => $data['canonical_target'],
    ];

    // ✅ Slug unique
    $slugBase = $ai['slug']
        ?? ($data['category'] === 'skill'
            ? ($data['skill_name'] . ' classes in ' . $data['location'] . ' ' . $data['city'])
            : ($data['city'] . ' ' . $data['location'] . ' tutors'));

    $slug = \Illuminate\Support\Str::slug($slugBase) ?: \Illuminate\Support\Str::random(8);

    if (\App\Models\GeneratedPage::where('slug', $slug)->exists()) {
        $slug .= '-' . strtolower(\Illuminate\Support\Str::random(4));
    }

    // ✅ Save
    $page = \App\Models\GeneratedPage::create([
        'slug' => $slug,

        // 'title' => $ai['title'] ?? ucfirst($slugBase),
        // 'meta_title' => $ai['meta_title'] ?? ($ai['title'] ?? 'NXTutors'),
        // 'meta_description' => $ai['meta_description'] ?? '',

        // 'sections' => $ai['sections'] ?? [],
        // 'faqs' => $ai['faqs'] ?? [],
        // 'interlinks' => $ai['interlinks'] ?? [],

        // 'local_reviews' => $ai['local_reviews'] ?? [],
        // 'local_schools' => $ai['local_schools'] ?? [],
        // 'local_institutes' => $ai['local_institutes'] ?? [],

        'country' => $data['country'],
        'state' => $data['state'],
        'city' => $data['city'],
        'location' => $data['location'],
        'hyper_location' => $data['hyper_location'] ?? null,
        'page_type' => $data['page_type'],
        'service_mode' => $data['service_mode'],

        'is_premium' => $data['is_premium'],
        'primary_keyword' => $data['primary_keyword'] ?? null,

        'subjects' => $data['subjects'],
        'boards' => $data['boards'],
        'classes_tracks' => $data['classes_tracks'],

        // full payload audit includes demand_score/index_flag/canonical_target
        'payload' => $data,

        'status' => $data['status'],

        //'html' => $this->buildHtmlFromSections($ai['sections'] ?? []),

            'title' => $ai['title'],
            'meta_title' => $ai['meta_title'],
            'meta_description' => $ai['meta_description'],
            'sections' => $ai['sections'],
            'faqs' => $ai['faqs'],
            'interlinks' => $ai['interlinks'],
            'local_reviews' => $ai['local_reviews'],
            'local_schools' => $ai['local_schools'],
            'local_institutes' => $ai['local_institutes'],
            'html' => $this->buildHtmlFromSections($ai['sections'] ?? []),


        'created_by' => auth()->id(),
    ]);

    // ✅ Schemas deterministic
    $schemas = app(\App\Services\NxtSchemaBuilder::class)->build($page);
    $page->update(['schemas' => $schemas]);

    return redirect()
        ->route('super.pagegen.index')
        ->with('success', "Page generated successfully! (IndexFlag: {$data['index_flag']}, Score: {$data['demand_score']})");
}

private function seoIntentChanged(array $oldPayload, array $new): bool
{
    $keys = [
        'state','city','location','hyper_location','page_type',
        'service_mode','category',
        'subjects','boards','classes_tracks',
        'skill_name','skill_level'
    ];

    foreach ($keys as $k) {
        $old = $oldPayload[$k] ?? null;
        $now = $new[$k] ?? null;

        if (is_array($old) || is_array($now)) {
            $a = array_values(array_filter((array)$old));
            $b = array_values(array_filter((array)$now));
            sort($a); sort($b);
            if ($a !== $b) return true;
        } else {
            if (trim((string)$old) !== trim((string)$now)) return true;
        }
    }
    return false;
}

public function update(Request $request, GeneratedPage $page, OpenAiPageGenerator $gen)
{
    $data = $request->validate([
        'state' => 'required|string|max:100',
        'city' => 'required|string|max:100',
        'location' => 'required|string|max:120',
        'hyper_location' => 'nullable|string|max:120',
        'page_type' => 'required|string|max:80',

        'category' => 'required|in:academic,skill',

        'subjects' => 'nullable|array',
        'subjects.*' => 'string|max:50',
        'boards' => 'nullable|array',
        'boards.*' => 'string|max:50',
        'classes_tracks' => 'nullable|array',
        'classes_tracks.*' => 'string|max:80',

        'skill_name' => 'nullable|string|max:80',
        'skill_level' => 'nullable|in:beginner,intermediate,advanced',

        'service_mode' => 'required|string|max:40',
        'is_premium' => 'nullable|boolean',
        'primary_keyword' => 'nullable|string|max:150',
        'status' => 'required|in:draft,published',

        'target_words' => 'nullable|integer|min:800|max:2600',
        'intent_bias' => 'nullable|in:seo_first,conversion_first,authority_first,balanced',
        'internal_linking' => 'nullable|in:conservative,balanced,aggressive',
        'language_variant' => 'nullable|in:english_us,english_uk,english_india,international',
        'syllabus_depth' => 'nullable|in:light_overview,board_aligned_detailed,exam_oriented,balanced',

        'regen' => 'nullable|boolean',
    ]);

    $data['country'] = $page->country ?: 'India';
    $data['is_premium'] = (bool)($data['is_premium'] ?? false);

    $data['subjects'] = $data['subjects'] ?? [];
    $data['boards'] = $data['boards'] ?? [];
    $data['classes_tracks'] = $data['classes_tracks'] ?? [];

    if ($data['category'] === 'skill') {
        $data['subjects'] = [];
        $data['boards'] = [];
        $data['classes_tracks'] = [];

        if (empty($data['skill_name'])) {
            return back()->withErrors('Skill name required.')->withInput();
        }
    } else {
        $data['skill_name'] = null;
        $data['skill_level'] = null;
    }

    $oldPayload = is_array($page->payload) ? $page->payload : [];
    $regen = (bool)$request->boolean('regen');
    $intentChanged = $this->seoIntentChanged($oldPayload, $data);

    // 🔐 ONLY RECALCULATE WHEN REQUIRED
    if ($regen || $intentChanged) {
        $data['demand_score'] = $this->demandScore($data);
        $data['index_flag'] = $this->indexFlagFromScore($data['demand_score']);
        $data['canonical_target'] = $this->canonicalTarget($data);
    } else {
        $data['demand_score'] = $oldPayload['demand_score'] ?? 0;
        $data['index_flag'] = $oldPayload['index_flag'] ?? 'Index';
        $data['canonical_target'] = $oldPayload['canonical_target'] ?? '';
    }

    if ($regen || $intentChanged) {
        $city = trim((string)($data['city'] ?? ''));
        $loc  = trim((string)($data['location'] ?? ''));

        // boards -> board_category map
        $boardCats = [];
        foreach ((array)$data['boards'] as $b) {
            $b = strtoupper(trim((string)$b));
            if ($b === '') continue;

            if (str_contains($b, 'IB')) $boardCats[] = 'IB';
            if (str_contains($b, 'IGCSE')) $boardCats[] = 'IGCSE';
            if (str_contains($b, 'ICSE') || str_contains($b, 'ISC')) $boardCats[] = 'ICSE';
            if (str_contains($b, 'CBSE')) $boardCats[] = 'CBSE';
        }
        $boardCats = array_values(array_unique($boardCats));

        $q = PremiumSchool::query()->where('city', $city);

        if (!empty($boardCats)) {
            $q->whereIn('board_category', $boardCats);
        }

        // Prefer: tier A first + area match
        $q->orderByRaw("CASE WHEN premium_tier='A' THEN 0 ELSE 1 END")
          ->orderByRaw("CASE WHEN ? LIKE CONCAT('%', area, '%') THEN 0 ELSE 1 END", [$loc])
          ->limit(20);

        $premiumPool = $q->get([
            'city','area','school_name','board','board_category','premium_tier','notes'
        ])->toArray();

        // fallback: if less than 5, ignore board filter (still same city)
        if (count($premiumPool) < 5) {
            $premiumPool = PremiumSchool::where('city', $city)
                ->orderByRaw("CASE WHEN premium_tier='A' THEN 0 ELSE 1 END")
                ->limit(20)
                ->get(['city','area','school_name','board','board_category','premium_tier','notes'])
                ->toArray();
        }

        $data['premium_schools'] = array_slice($premiumPool, 0, 5);
    } else {
        // keep old premium list if not regenerating and intent not changed
        $data['premium_schools'] = $oldPayload['premium_schools'] ?? [];
    }

    $newPayload = array_merge($oldPayload, $data);

    $update = [
        'state' => $data['state'],
        'city' => $data['city'],
        'location' => $data['location'],
        'hyper_location' => $data['hyper_location'],
        'page_type' => $data['page_type'],
        'service_mode' => $data['service_mode'],
        'is_premium' => $data['is_premium'],
        'primary_keyword' => $data['primary_keyword'],
        'subjects' => $data['subjects'],
        'boards' => $data['boards'],
        'classes_tracks' => $data['classes_tracks'],
        'status' => $data['status'],
        'payload' => $newPayload,
    ];

    if ($regen) {
        $ai = $gen->generate($newPayload);
        $ai['sections']['seo_controls'] = [
            'demand_score' => $data['demand_score'],
            'index_flag' => $data['index_flag'],
            'canonical_target' => $data['canonical_target'],
        ];

        $update += [
            'title' => $ai['title'],
            'meta_title' => $ai['meta_title'],
            'meta_description' => $ai['meta_description'],
            'sections' => $ai['sections'],
            'faqs' => $ai['faqs'],
            'interlinks' => $ai['interlinks'],
            'local_reviews' => $ai['local_reviews'],
            'local_schools' => $ai['local_schools'],
            'local_institutes' => $ai['local_institutes'],
            'html' => $this->buildHtmlFromSections($ai['sections'] ?? []),
        ];
    }

    $page->update($update);

    $schemas = app(\App\Services\NxtSchemaBuilder::class)->build($page->fresh());
    $page->update(['schemas' => $schemas]);

    return redirect()
        ->route('super.pagegen.index')
        ->with('success', $regen
            ? "Page regenerated successfully!"
            : "Page updated successfully!"
        );
}

public function buildHtmlFromSections(array $s): string
{
    $e = fn($v) => e((string)$v);

    $out = "";

    if (!empty($s['hero'])) {
        $out .= "<h1>{$e($s['hero']['headline'] ?? '')}</h1>";
        $out .= "<p>{$e($s['hero']['subheadline'] ?? '')}</p>";
        if (!empty($s['hero']['highlights'])) {
            $out .= "<ul>";
            foreach ($s['hero']['highlights'] as $h) $out .= "<li>{$e($h)}</li>";
            $out .= "</ul>";
        }
    }

    foreach (['subjects_content','syllabus_content','nxtutors_tools','whats_new'] as $key) {
        if (empty($s[$key])) continue;
        $title = $e($s[$key]['title'] ?? '');
        $out .= "<h2>{$title}</h2>";

        foreach (['intro','note'] as $k) {
            if (!empty($s[$key][$k])) $out .= "<p>{$e($s[$key][$k])}</p>";
        }

        $listKey = $key === 'syllabus_content' ? 'topics' : 'bullets';
        if (!empty($s[$key][$listKey])) {
            $out .= "<ul>";
            foreach ($s[$key][$listKey] as $b) $out .= "<li>{$e($b)}</li>";
            $out .= "</ul>";
        }
    }

    if (!empty($s['home_vs_online'])) {
        $out .= "<h2>{$e($s['home_vs_online']['title'] ?? '')}</h2>";
        $out .= "<h3>Home Tutor</h3><ul>";
        foreach (($s['home_vs_online']['home_points'] ?? []) as $p) $out .= "<li>{$e($p)}</li>";
        $out .= "</ul><h3>Online Tutor</h3><ul>";
        foreach (($s['home_vs_online']['online_points'] ?? []) as $p) $out .= "<li>{$e($p)}</li>";
        $out .= "</ul>";
        if (!empty($s['home_vs_online']['best_for'])) {
            $out .= "<p><strong>Best for:</strong> {$e($s['home_vs_online']['best_for'])}</p>";
        }
    }

    if (!empty($s['premium_schools_fit'])) {
    $out .= "<h2>{$e($s['premium_schools_fit']['title'] ?? 'Premium Schools')}</h2>";
    if (!empty($s['premium_schools_fit']['note'])) {
        $out .= "<p>{$e($s['premium_schools_fit']['note'])}</p>";
    }
    if (!empty($s['premium_schools_fit']['schools'])) {
        $out .= "<ul>";
        foreach ($s['premium_schools_fit']['schools'] as $sc) {
            $out .= "<li><strong>{$e($sc['name'] ?? '')}</strong> ({$e($sc['board'] ?? '')}) — {$e($sc['fit_reason'] ?? '')}</li>";
        }
        $out .= "</ul>";
    }
}


    return $out;
}



}
