<?php

namespace Tests\Feature;

use App\Support\Zones;
use Tests\TestCase;

/**
 * Gurugram area pages that matched no zone (2 Oct 2026) and were placed
 * from the area text already published for them (gurugram-area-rewrite.json,
 * gurugram-dlf-about.json) or their sector numbers.
 */
class GurugramUnzonedAreasTest extends TestCase
{
    public function test_previously_unzoned_areas_get_their_zone(): void
    {
        $expect = [
            'Sushant Lok Phase 1' => 'Golf Course Road',
            'Sushant Lok Phase 2' => 'Central Gurugram',
            'Sushant Lok Phase 3' => 'Central Gurugram',
            'DLF Independent Floors (27–28)' => 'Golf Course Road',
            'Golf Course Extn' => 'Golf Course Extension Road',
            'DLF New Town Heights 92' => 'New Gurugram',
            'Sectors 80–90' => 'New Gurugram',
        ];
        foreach ($expect as $name => $zone) {
            $this->assertSame($zone, Zones::of('Gurugram', $name), $name);
        }
    }

    public function test_existing_matches_are_unchanged(): void
    {
        $this->assertSame('Golf Course Road', Zones::of('Gurugram', 'Sushant Lok 1'));
        $this->assertSame('Central Gurugram', Zones::of('Gurugram', 'Sushant Lok 2'));
        $this->assertSame('Golf Course Extension Road', Zones::of('Gurugram', 'Golf Course Extension Road'));
        $this->assertSame('Golf Course Road', Zones::of('Gurugram', 'DLF Phase 4'));
        $this->assertSame('New Gurugram', Zones::of('Gurugram', 'Sector 90'));
        // Places with no evidence stay unzoned rather than guessed.
        $this->assertNull(Zones::of('Gurugram', 'Sohna'));
        $this->assertNull(Zones::of('Gurugram', 'SRS Residency (Extn Road)'));
    }
}
