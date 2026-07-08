<?php

namespace App\Jobs\PageGen;

use App\Models\GeneratedPage;
use App\Models\PremiumSchool;
use App\Services\OpenAiPageGenerator;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class BackfillPremiumSchoolsForPage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 2;

    public function __construct(
        public int $pageId,
        public bool $regen = false
    ) {}

    public function handle(OpenAiPageGenerator $gen): void
    {
        $page = GeneratedPage::find($this->pageId);
        if (!$page) return;

        $payload = is_array($page->payload) ? $page->payload : [];

        // Count premium schools
        $cnt = is_array($payload['premium_schools'] ?? null) ? count($payload['premium_schools']) : 0;

        /**
         * ✅ IMPORTANT:
         * regen=0 => if already ok then skip
         * regen=1 => force run (even if already 5)
         */
        if (!$this->regen && $cnt >= 5) {
            return;
        }

        // 1) Fetch from DB
        $premiumSchools = $this->fetchPremiumSchools($payload);
        if (count($premiumSchools) === 0) {
            return; // nothing in DB
        }

        // 2) Patch payload
        $payload['premium_schools'] = $premiumSchools;

        // ==========================
        // ✅ REGEN = 1 (FULL AI)
        // ==========================
        if ($this->regen) {

            // ✅ AI generate with premium schools included
            $ai = $gen->generate($payload);

            // ✅ Use AI sections (not old ones)
            $sections = is_array($ai['sections'] ?? null) ? $ai['sections'] : (is_array($page->sections) ? $page->sections : []);

            // ✅ Force premium_schools_fit from DB
            $sections = $this->patchPremiumSchoolsFitSection($sections, $premiumSchools);

            // ✅ Keep old seo_controls if AI removed it
            $oldSections = is_array($page->sections) ? $page->sections : [];
            if (!isset($sections['seo_controls']) && isset($oldSections['seo_controls'])) {
                $sections['seo_controls'] = $oldSections['seo_controls'];
            }

            $page->update([
                'payload'           => $payload,
                'title'             => $ai['title'] ?? $page->title,
                'meta_title'        => $ai['meta_title'] ?? $page->meta_title,
                'meta_description'  => $ai['meta_description'] ?? $page->meta_description,
                'sections'          => $sections,
                'faqs'              => $ai['faqs'] ?? $page->faqs,
                'interlinks'        => $ai['interlinks'] ?? $page->interlinks,
                'local_reviews'     => $ai['local_reviews'] ?? $page->local_reviews,
                'local_schools'     => $ai['local_schools'] ?? $page->local_schools,
                'local_institutes'  => $ai['local_institutes'] ?? $page->local_institutes,
                'html'              => app(\App\Http\Controllers\SuperAdmin\PageGeneratorController::class)
                                        ->buildHtmlFromSections($sections),
            ]);

            return;
        }

        // ==========================
        // ✅ REGEN = 0 (PATCH ONLY)
        // ==========================
        $sections = is_array($page->sections) ? $page->sections : [];
        $sections = $this->patchPremiumSchoolsFitSection($sections, $premiumSchools);

        $page->update([
            'payload'  => $payload,
            'sections' => $sections,
            'html'     => app(\App\Http\Controllers\SuperAdmin\PageGeneratorController::class)
                          ->buildHtmlFromSections($sections),
        ]);
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

    private function ensureFive(array $items): array
    {
        if (count($items) === 0) return [];

        usort($items, function($a,$b){
            $ta = (($a['premium_tier'] ?? '') === 'A') ? 0 : 1;
            $tb = (($b['premium_tier'] ?? '') === 'A') ? 0 : 1;
            return $ta <=> $tb;
        });

        $items = array_values($items);

        if (count($items) >= 5) return array_slice($items, 0, 5);

        $i = 0;
        while (count($items) < 5) {
            $items[] = $items[$i % count($items)];
            $i++;
        }
        return $items;
    }

    private function fetchPremiumSchools(array $data): array
    {
        $city = trim((string)($data['city'] ?? ''));
        $loc  = trim((string)($data['location'] ?? ''));

        if ($city === '') return [];

        $boardCats = $this->buildBoardCats((array)($data['boards'] ?? []));

        $q = PremiumSchool::query()
            ->whereRaw('LOWER(city) = LOWER(?)', [$city]);

        if (!empty($boardCats)) {
            $q->whereIn('board_category', $boardCats);
        }

        $q->orderByRaw("CASE WHEN premium_tier='A' THEN 0 ELSE 1 END")
          ->orderByRaw("CASE WHEN LOWER(?) LIKE CONCAT('%', LOWER(area), '%') THEN 0 ELSE 1 END", [$loc])
          ->limit(20);

        $pool = $q->get([
            'city','area','school_name','board','board_category','premium_tier','notes'
        ])->toArray();

        if (count($pool) < 5) {
            $pool = PremiumSchool::query()
                ->whereRaw('LOWER(city) = LOWER(?)', [$city])
                ->orderByRaw("CASE WHEN premium_tier='A' THEN 0 ELSE 1 END")
                ->limit(20)
                ->get(['city','area','school_name','board','board_category','premium_tier','notes'])
                ->toArray();
        }

        $out = [];
        foreach ($pool as $r) {
            $name = trim((string)($r['school_name'] ?? ''));
            if ($name === '') continue;

            $boardCat = strtoupper(trim((string)($r['board_category'] ?? '')));
            $board    = trim((string)($r['board'] ?? $boardCat));

            $out[] = [
                'name' => $name,
                'board' => $boardCat ?: ($board ?: 'CBSE'),
                'area' => trim((string)($r['area'] ?? '')),
                'premium_tier' => strtoupper(trim((string)($r['premium_tier'] ?? ''))),
                'notes' => trim((string)($r['notes'] ?? '')),
            ];
        }

        return $this->ensureFive($out);
    }

    private function patchPremiumSchoolsFitSection(array $sections, array $premiumSchools): array
    {
        $sections['premium_schools_fit'] = is_array($sections['premium_schools_fit'] ?? null)
            ? $sections['premium_schools_fit']
            : [];

        $patched = [];
        for ($i=0; $i<5; $i++) {
            $src = $premiumSchools[$i] ?? $premiumSchools[$i % count($premiumSchools)];

            $patched[] = [
                'name' => (string)($src['name'] ?? 'Premium School'),
                'board' => (string)($src['board'] ?? 'CBSE'),
                'fit_reason' => "Good fit for curriculum pace, assessments and learning support (no partnership claims).",
            ];
        }

        $sections['premium_schools_fit'] += [
            'title' => $sections['premium_schools_fit']['title'] ?? 'Premium Schools Fit',
            'note'  => $sections['premium_schools_fit']['note'] ?? 'Schools listed are DB-driven references. No partnership claims.',
        ];

        $sections['premium_schools_fit']['schools'] = $patched;

        return $sections;
    }
}
