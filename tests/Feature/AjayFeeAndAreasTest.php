<?php

namespace Tests\Feature;

use App\NxtAi\Ranking\TutorRanker;
use App\NxtAi\Support\PublicTutorFieldMapper;
use App\Support\Zones;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

class AjayFeeAndAreasTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    private function migration(): object
    {
        return require database_path('migrations/seo/2026_09_28_160000_set_ajay_vatsyayan_fee_and_travel_areas.php');
    }

    public function test_sets_fee_and_travel_areas_and_rolls_back(): void
    {
        $this->createLegacySchema();
        DB::table('register')->insert(['user_id' => '1997', 'name' => 'Ajay Vatsyayan', 'city' => 'Gurugram', 'join_as' => 'teacher', 'status' => 't']);

        $m = $this->migration();
        $m->up();
        $row = DB::table('register')->where('user_id', '1997')->first();
        $this->assertSame('3000-5000 per hour', $row->budget);
        $this->assertStringContainsString('Golf Course Extension Road', $row->travel_areas);
        $this->assertLessThanOrEqual(500, mb_strlen($row->travel_areas), 'fits the dashboard field');

        $m->down();
        $row = DB::table('register')->where('user_id', '1997')->first();
        $this->assertNull($row->budget);
        $this->assertNull($row->travel_areas);
    }

    public function test_fee_is_labelled_per_hour_only_when_stated(): void
    {
        $fee = (new PublicTutorFieldMapper)->parseFee('3000-5000 per hour');
        $this->assertSame([3000, 5000, '₹3,000–₹5,000 / hour', true], [$fee['min'], $fee['max'], $fee['label'], $fee['per_hour']]);
        $this->assertFalse((new PublicTutorFieldMapper)->parseFee('1500')['per_hour']);
    }

    public function test_the_areas_cover_every_gurugram_zone(): void
    {
        $zones = [];
        foreach (explode(',', $this->migration()::TRAVEL_AREAS) as $a) {
            $z = Zones::of('Gurugram', trim($a));
            $this->assertNotNull($z, trim($a) . ' should belong to a zone');
            $zones[$z] = true;
        }
        $this->assertEqualsCanonicalizing(array_keys(config('zones.Gurugram')), array_keys($zones));
    }

    public function test_travel_areas_match_whole_words_and_ranges(): void
    {
        $r = new \ReflectionMethod(TutorRanker::class, 'travelsTo');
        $ranker = (new \ReflectionClass(TutorRanker::class))->newInstanceWithoutConstructor();
        $this->assertTrue($r->invoke($ranker, 'Sector 56–66', 'Sector 60'));
        $this->assertTrue($r->invoke($ranker, 'DLF Phase 1–5', 'DLF Phase 3'));
        $this->assertTrue($r->invoke($ranker, 'Golf Course Road', 'golf course road'));
        $this->assertFalse($r->invoke($ranker, 'Sector 56–66', 'Sector 5'));
        $this->assertFalse($r->invoke($ranker, 'Sector 56–66', 'Sector 70'));
        $this->assertFalse($r->invoke($ranker, 'Sector 42', 'Sector 4'));
    }
}
