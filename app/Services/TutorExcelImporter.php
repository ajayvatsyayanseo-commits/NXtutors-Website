<?php

namespace App\Services;

use App\Models\TutorImport;
use App\Models\TutorImportRow;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\IOFactory;
use RuntimeException;

class TutorExcelImporter
{
    public function importRows(TutorImport $import): int
    {
        $fullPath = Storage::disk('public')->path($import->file_path);

        if (! is_file($fullPath)) {
            throw new RuntimeException('Tutor import file is missing.');
        }

        $maxRows = max(1, (int) config('cost-safety.imports.tutor_max_rows', 250));
        $reader = IOFactory::createReaderForFile($fullPath);
        $reader->setReadDataOnly(true);
        $worksheets = $reader->listWorksheetInfo($fullPath);
        $totalRows = max(0, (int) ($worksheets[0]['totalRows'] ?? 0) - 1);

        if ($totalRows > $maxRows) {
            throw new RuntimeException("Tutor workbook has {$totalRows} rows; maximum allowed is {$maxRows}.");
        }

        $spreadsheet = $reader->load($fullPath);
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray(null, true, true, true);

        if (count($rows) < 2) return 0;

        $headerRow = array_shift($rows);

        $headers = [];
        foreach ($headerRow as $col => $name) {
            $key = trim((string)$name);
            if ($key !== '') $headers[$col] = $key;
        }

        $count = 0;
        $seen = [];

        foreach ($rows as $r) {
            $payload = [];
            foreach ($headers as $col => $key) {
                $payload[$key] = isset($r[$col]) ? trim((string)$r[$col]) : null;
            }

            // skip empty
            // if (empty($payload['Tutor_Name']) && empty($payload['Profile_Slug'])) {
            //     continue;
            // }
            if (
    empty($payload['Pincode']) &&
    empty($payload['Sector']) &&
    empty($payload['Teaching_Subjects']) &&
    empty($payload['Local_Address'])
) {
    continue;
}

            $fingerprint = hash('sha256', json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
            if (isset($seen[$fingerprint])) {
                continue;
            }
            $seen[$fingerprint] = true;

            TutorImportRow::create([
                'tutor_import_id' => $import->id,
                'payload' => $payload,
                'status' => 'pending',
            ]);

            $count++;
        }

        $spreadsheet->disconnectWorksheets();

        return $count;
    }
}
