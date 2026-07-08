<?php

namespace App\Imports;

use App\Models\PageGenerationJob;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class PageGenImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        // Assume first row is header
        $header = $rows->shift()->map(fn($v)=>trim((string)$v))->toArray();

        foreach ($rows as $row) {
            $data = [];
            foreach ($header as $i => $key) {
                $data[$key] = isset($row[$i]) ? trim((string)$row[$i]) : null;
            }

            // Convert CSV fields to arrays if Excel has "subjects_csv" etc.
            if (!empty($data['subjects_csv'])) $data['subjects'] = array_values(array_filter(array_map('trim', explode(',', $data['subjects_csv']))));
            if (!empty($data['boards_csv']))   $data['boards']   = array_values(array_filter(array_map('trim', explode(',', $data['boards_csv']))));
            if (!empty($data['classes_csv']))  $data['classes_tracks'] = array_values(array_filter(array_map('trim', explode(',', $data['classes_csv']))));

            // Default status/premium
            $data['status'] = $data['status'] ?? 'published';
            $data['is_premium'] = !empty($data['is_premium']) ? 1 : 0;

            PageGenerationJob::create([
                'payload' => $data,
                'status'  => 'pending',
            ]);
        }
    }
}