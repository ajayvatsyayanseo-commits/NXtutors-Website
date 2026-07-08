<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Models\PagegenImport;
use App\Models\PagegenImportRow;
use App\Models\PremiumSchool;
use App\Jobs\PageGen\GenerateFromImportRow;
use PhpOffice\PhpSpreadsheet\IOFactory;

class PagegenProcessImports extends Command
{
    protected $signature = 'pagegen:process-imports {--limit=0}';
    protected $description = 'Read pending Excel uploads and dispatch page generation jobs';

    public function handle()
    {
        $import = PagegenImport::where('status', 'pending')->oldest()->first();

        if (!$import) {
            $this->info('No pending imports.');
            return 0;
        }

        $fullPath = public_path($import->file_path);

        $this->info("Import #{$import->id} file: {$import->file_path}");
        $this->info("Full path: {$fullPath}");

        if (!file_exists($fullPath)) {
            $msg = "File not found: {$fullPath}";
            $this->error($msg);
            Log::error($msg);

            $import->update(['status' => 'pending']);
            return 1;
        }

        $import->update(['status' => 'processing']);

        try {
            $spreadsheet = IOFactory::load($fullPath);
            $sheet = $spreadsheet->getActiveSheet();
            $rows = $sheet->toArray(null, true, true, true);
        } catch (\Throwable $e) {
            $msg = "Excel read failed: " . $e->getMessage();
            $this->error($msg);
            Log::error($msg);

            $import->update(['status' => 'pending']);
            return 1;
        }

        if (count($rows) < 2) {
            $this->warn('Excel has no data rows.');
            $import->update(['status' => 'done']);
            return 0;
        }

        // Header row
        $headerRow = array_shift($rows);
       // $headers = array_map(fn($h) => trim((string)$h), array_values($headerRow));

        $headers = array_map(function ($h) {
            return preg_replace('/\s+/', ' ', trim((string) $h));
        }, array_values($headerRow));

        $createdCount = 0;
        $skippedCount = 0;

        $limit = (int)$this->option('limit'); // for testing
        $processed = 0;

        foreach ($rows as $row) {
            $processed++;
            if ($limit > 0 && $processed > $limit) break;

            $values = array_values($row);

            // Skip empty row
            if (!array_filter($values, fn($v) => trim((string)$v) !== '')) {
                continue;
            }

            // Pad if fewer columns
            if (count($values) < count($headers)) {
                $values = array_pad($values, count($headers), null);
            }

            $assoc = @array_combine($headers, $values);
            if (!$assoc) continue;

            $payload = $this->mapToPayload($assoc);

            // Minimal required fields check
            if (empty($payload['state']) || empty($payload['city']) || empty($payload['location'])) {
                $skippedCount++;
                continue;
            }

            /**
             * ✅ IMPORTANT FIX:
             * Import time par hi premium_schools inject karo
             * so payload->premium_schools always exists (5 items)
             */
            if (!isset($payload['premium_schools']) || count((array)$payload['premium_schools']) < 5) {
                $payload['premium_schools'] = $this->fetchPremiumSchools($payload);
            }

            $importRow = PagegenImportRow::create([
                'import_id'  => $import->id,
                'payload'    => $payload,
                'status'     => 'pending',
                'created_by' => $import->created_by,
            ]);

            GenerateFromImportRow::dispatch($importRow->id)->onQueue('pagegen');

            $createdCount++;
        }

        $this->info("Created {$createdCount} rows & dispatched jobs for import #{$import->id}.");
        $this->info("Skipped rows: {$skippedCount}.");

        // Mark import done after dispatch
        $import->update(['status' => 'done']);

        return 0;
    }

    private function mapToPayload(array $r): array
    {
        $csv = fn($s) => array_values(
            array_filter(
                array_map('trim', explode(',', (string)$s)),
                fn($x) => $x !== ''
            )
        );

        $pageTypeMap = [
            'Location Page (Sector/Area)' => 'location',
            'Hyper-Location Page (Society/Tower)' => 'hyper',
            'City Page' => 'city',
        ];

        $serviceModeMap = [
            'Home' => 'home',
            'Online' => 'online',
            'Institute' => 'institute',
        ];

        $catRaw = strtolower(trim((string)($r['Category'] ?? '')));
        $category = str_contains($catRaw, 'skill') ? 'skill' : 'academic';

        $langMap = [
            'English (India tone)' => 'english_india',
            'English (US tone)'    => 'english_us',
            'English (UK tone)'    => 'english_uk',
            'International'        => 'international',
        ];
        $lvRaw = trim((string)($r['Language Variant'] ?? ''));
        $languageVariant = $langMap[$lvRaw] ?? 'english_india';

        $depthMap = [
            'Balanced' => 'balanced',
            'Light Overview' => 'light_overview',
            'Board-Aligned Detailed' => 'board_aligned_detailed',
            'Exam-Oriented' => 'exam_oriented',
        ];
        $depthRaw = trim((string)($r['Content Depth'] ?? 'Balanced'));
        $syllabusDepth = $depthMap[$depthRaw] ?? 'balanced';

        $intentMap = [
            'Balanced' => 'balanced',
            'SEO-First' => 'seo_first',
            'Conversion-First' => 'conversion_first',
            'Authority-First' => 'authority_first',
        ];
        $intentRaw = trim((string)($r['AI Intent Bias'] ?? 'Balanced'));
        $intentBias = $intentMap[$intentRaw] ?? 'balanced';

        $linkMap = [
            'Conservative' => 'conservative',
            'Balanced' => 'balanced',
            'Aggressive' => 'aggressive',
        ];
        $linkRaw = trim((string)($r['Internal Linking Strategy'] ?? 'Balanced'));
        $internalLinking = $linkMap[$linkRaw] ?? 'balanced';

        $statusRaw = strtolower(trim((string)($r['Status'] ?? 'published')));
        $status = in_array($statusRaw, ['draft', 'published'], true)
            ? $statusRaw
            : (($statusRaw === 'publish') ? 'published' : 'published');

        $ptRaw = trim((string)($r['Page Type'] ?? ''));
        $pageType = $pageTypeMap[$ptRaw] ?? 'location';

        $smRaw = trim((string)($r['Service Mode'] ?? ''));
        $serviceMode = $serviceModeMap[$smRaw] ?? 'home';

        $localCtx = $csv($r['Local Context Enrichment'] ?? '');

        return [
            'country'        => 'India',
            'state'          => trim((string)($r['State'] ?? '')),
            'city'           => trim((string)($r['City'] ?? '')),
            //'location'       => trim((string)($r['Location (Sector/Area)'] ?? '')),
            'location' => trim((string)(
                $r['Location (Sector/Area)']
                ?? $r['Location']
                ?? ''
            )),
            'hyper_location' => trim((string)($r['Hyper-Location (Society/Tower)'] ?? '')) ?: null,

            'page_type'    => $pageType,
            'service_mode' => $serviceMode,

            'category' => $category,

            'subjects'       => $csv($r['Subjects'] ?? ''),
            'boards'         => $csv($r['Boards'] ?? ''),
            'classes_tracks' => $csv($r['Classes/Tracks'] ?? ''),

            'skill_name'  => trim((string)($r['Skill / Hobby'] ?? '')) ?: null,
            'skill_level' => strtolower(trim((string)($r['Skill Level'] ?? ''))) ?: null,

            'primary_keyword' => trim((string)($r['Primary Keyword Override'] ?? '')) ?: null,
            'status'          => $status,

            'target_words'     => (int)($r['Target Words'] ?? 1800),
            'intent_bias'      => $intentBias,
            'internal_linking' => $internalLinking,
            'language_variant' => $languageVariant,
            'syllabus_depth'   => $syllabusDepth,

            'local_blocks' => $localCtx,
        ];
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

        // normalize keys to match OpenAiPageGenerator expectation
        $out = [];
        foreach ($pool as $r) {
            $name = trim((string)($r['school_name'] ?? ''));
            if ($name === '') continue;

            $boardCat = strtoupper(trim((string)($r['board_category'] ?? '')));
            $out[] = [
                'name' => $name,
                'board' => $boardCat ?: trim((string)($r['board'] ?? 'CBSE')),
                'area' => trim((string)($r['area'] ?? '')),
                'premium_tier' => strtoupper(trim((string)($r['premium_tier'] ?? ''))),
                'notes' => trim((string)($r['notes'] ?? '')),
            ];
        }

        // ensure exactly 5
        if (count($out) === 0) return [];
        if (count($out) >= 5) return array_slice($out, 0, 5);

        $i = 0;
        while (count($out) < 5) {
            $out[] = $out[$i % count($out)];
            $i++;
        }

        return $out;
    }
}
