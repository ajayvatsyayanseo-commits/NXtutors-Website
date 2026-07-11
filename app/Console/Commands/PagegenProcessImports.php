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

    private array $premiumSchoolCache = [];

    public function handle(): int
    {
        $batchSize = max(1, (int) config('cost-safety.imports.batch_size', 25));
        $maxRows = max(1, (int) config('cost-safety.imports.max_rows', 500));

        $activeImport = PagegenImport::where('status', 'processing')->oldest()->first();
        if ($activeImport && $this->dispatchOrFinalize($activeImport, $batchSize)) {
            return self::SUCCESS;
        }

        $import = PagegenImport::where('status', 'pending')->oldest()->first();

        if (!$import) {
            $this->info('No pending imports.');
            return self::SUCCESS;
        }

        $claimed = PagegenImport::query()
            ->whereKey($import->id)
            ->where('status', 'pending')
            ->update(['status' => 'processing', 'updated_at' => now()]);

        if ($claimed !== 1) {
            $this->info("Import #{$import->id} was claimed by another scheduler process.");

            return self::SUCCESS;
        }

        $import->refresh();
        $fullPath = public_path($import->file_path);

        $this->info("Import #{$import->id} file: {$import->file_path}");
        $this->info("Full path: {$fullPath}");

        if (!file_exists($fullPath)) {
            $msg = "File not found: {$fullPath}";
            $this->error($msg);
            Log::error($msg);

            $import->update(['status' => 'failed']);

            return self::FAILURE;
        }

        try {
            $reader = IOFactory::createReaderForFile($fullPath);
            $reader->setReadDataOnly(true);
            $worksheets = $reader->listWorksheetInfo($fullPath);
            $totalRows = max(0, (int) ($worksheets[0]['totalRows'] ?? 0) - 1);

            if ($totalRows > $maxRows) {
                throw new \RuntimeException("Workbook has {$totalRows} rows; maximum allowed is {$maxRows}.");
            }

            $spreadsheet = $reader->load($fullPath);
            $sheet = $spreadsheet->getActiveSheet();
            $rows = $sheet->toArray(null, true, true, true);
        } catch (\Throwable $e) {
            $msg = 'Excel read failed: '.str($e->getMessage())->squish()->limit(300);
            $this->error($msg);
            Log::warning('Page generation import rejected.', [
                'import_id' => $import->id,
                'exception' => $e::class,
            ]);

            $import->update(['status' => 'failed']);

            return self::FAILURE;
        }

        if (count($rows) < 2) {
            $this->warn('Excel has no data rows.');
            $import->update(['status' => 'failed']);

            return self::FAILURE;
        }

        // Header row
        $headerRow = array_shift($rows);
       // $headers = array_map(fn($h) => trim((string)$h), array_values($headerRow));

        $headers = array_map(function ($h) {
            return preg_replace('/\s+/', ' ', trim((string) $h));
        }, array_values($headerRow));

        $hasLocation = in_array('Location (Sector/Area)', $headers, true)
            || in_array('Location', $headers, true);
        if (! in_array('State', $headers, true) || ! in_array('City', $headers, true) || ! $hasLocation) {
            $this->error('Excel is missing required columns: State, City, and Location.');
            $import->update(['status' => 'failed']);

            return self::FAILURE;
        }

        $createdCount = 0;
        $skippedCount = 0;

        $requestedLimit = (int) $this->option('limit');
        $limit = $requestedLimit > 0 ? min($requestedLimit, $maxRows) : $maxRows;
        $processed = 0;
        $seen = [];

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

            $fingerprint = hash('sha256', json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
            if (isset($seen[$fingerprint])) {
                $skippedCount++;
                continue;
            }
            $seen[$fingerprint] = true;

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

            $createdCount++;
        }

        $spreadsheet->disconnectWorksheets();
        unset($spreadsheet, $rows);

        $this->info("Created {$createdCount} bounded rows for import #{$import->id}.");
        $this->info("Skipped rows: {$skippedCount}.");

        if ($createdCount === 0) {
            $import->update(['status' => 'failed']);

            return self::FAILURE;
        }

        $this->dispatchOrFinalize($import, $batchSize);

        return self::SUCCESS;
    }

    private function dispatchOrFinalize(PagegenImport $import, int $batchSize): bool
    {
        $pending = $import->rows()->where('status', 'pending')->orderBy('id')->limit($batchSize)->get();

        if ($pending->isNotEmpty()) {
            foreach ($pending as $row) {
                GenerateFromImportRow::dispatch($row->id)->onQueue('pagegen');
            }

            $this->info("Dispatched {$pending->count()} row(s) for import #{$import->id}.");

            return true;
        }

        if ($import->rows()->where('status', 'processing')->exists()) {
            $this->info("Import #{$import->id} still has active rows.");

            return true;
        }

        $rowCount = $import->rows()->count();
        if ($rowCount === 0) {
            return false;
        }

        $hasFailures = $import->rows()->where('status', 'failed')->exists();
        $import->update(['status' => $hasFailures ? 'failed' : 'done']);
        $this->info("Import #{$import->id} finalized as {$import->status}.");

        return false;
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
        $cacheKey = mb_strtolower($city).'|'.implode(',', $boardCats).'|'.mb_strtolower($loc);
        if (array_key_exists($cacheKey, $this->premiumSchoolCache)) {
            return $this->premiumSchoolCache[$cacheKey];
        }

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
        if (count($out) === 0) return $this->premiumSchoolCache[$cacheKey] = [];
        if (count($out) >= 5) return $this->premiumSchoolCache[$cacheKey] = array_slice($out, 0, 5);

        $i = 0;
        while (count($out) < 5) {
            $out[] = $out[$i % count($out)];
            $i++;
        }

        return $this->premiumSchoolCache[$cacheKey] = $out;
    }
}
