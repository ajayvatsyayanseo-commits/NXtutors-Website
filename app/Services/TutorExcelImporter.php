<?php

namespace App\Services;

use App\Models\TutorImport;
use App\Models\TutorImportRow;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\IOFactory;

class TutorExcelImporter
{
    public function importRows(TutorImport $import): int
    {
        $fullPath = Storage::disk('public')->path($import->file_path);

        $spreadsheet = IOFactory::load($fullPath);
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

            TutorImportRow::create([
                'tutor_import_id' => $import->id,
                'payload' => $payload,
                'status' => 'pending',
            ]);

            $count++;
        }

        return $count;
    }
}
