<?php

namespace App\Imports;

use App\Models\PremiumSchool;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PremiumSchoolsImport implements ToModel, WithHeadingRow
{
    private function pick(array $row, array $keys, $default = '')
    {
        foreach ($keys as $k) {
            if (array_key_exists($k, $row) && $row[$k] !== null && $row[$k] !== '') {
                return $row[$k];
            }
        }
        return $default;
    }

    public function model(array $row)
    {
        // skip empty rows
        $school = trim((string)($this->pick($row, ['school_name','school','schoolname'])));
        if ($school === '') return null;

        $boardCategory = strtoupper(trim((string)$this->pick($row, [
            'board_category',
            'board_cat',
            'board_category_cbse_icse_igcse_ib',
            'board_category_cbseicseigcseib',
            'board_category_cbse_icse_igcse_ib_',   // sometimes trailing _
        ])));

        $premiumTier = strtoupper(trim((string)$this->pick($row, [
            'premium_tier',
            'premium',
            'premium_tier_a_b',
            'premium_tier_ab',
            'premium_tier_a__b',
        ])));

        return new PremiumSchool([
            'city'           => trim((string)$this->pick($row, ['city'])),
            'area'           => trim((string)$this->pick($row, ['area_micro_zone','area','area__micro_zone'])),
            'school_name'    => $school,
            'board'          => trim((string)$this->pick($row, ['board'])),
            'board_category' => $boardCategory,
            'premium_tier'   => $premiumTier,
            'notes'          => trim((string)$this->pick($row, ['notes'])),
        ]);
    }
}
