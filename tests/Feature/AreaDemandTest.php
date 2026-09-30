<?php

namespace Tests\Feature;

use App\Support\AreaDemand;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

/** Anonymised recent requests on area pages: the safeguards agreed with Ajay. */
class AreaDemandTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Cache::flush();
        Schema::create('demo_leads', function ($t) {
            $t->id();
            foreach (['name', 'phone', 'service', 'subject', 'child_class', 'preferred_time', 'mode', 'location', 'message', 'source_page'] as $c) {
                $t->text($c)->nullable();
            }
            $t->timestamps();
        });
    }

    private function lead(array $row): void
    {
        DB::table('demo_leads')->insert($row + ['name' => 'Parent', 'phone' => '9999999999', 'created_at' => now()->subDays(10), 'updated_at' => now()]);
    }

    public function test_nothing_is_shown_below_three_requests(): void
    {
        $this->lead(['location' => 'Sector 57, Gurugram', 'child_class' => 'Class 10', 'subject' => 'Maths CBSE']);
        $this->lead(['location' => 'Sector 57', 'child_class' => '9', 'subject' => 'Physics']);

        $this->assertNull(AreaDemand::recentFor('Gurugram', 'Sector 57', null));
    }

    public function test_only_whitelisted_labels_and_the_month_are_shown(): void
    {
        $this->lead(['location' => 'Tower 4, Flat 1203, Sector 57', 'child_class' => 'Class 10', 'subject' => 'maths for my son Rohan at Some School', 'message' => 'call me 98765']);
        $this->lead(['location' => 'sector 57', 'child_class' => 'Grade 11', 'subject' => 'IB DP Physics HL']);
        $this->lead(['location' => 'Sector 57 Gurgaon', 'child_class' => '7', 'subject' => 'ICSE Science']);
        $this->lead(['location' => 'Sector 57', 'name' => 'TEST ignore', 'child_class' => 'Class 12', 'subject' => 'Chemistry']);
        $this->lead(['location' => 'Sector 5', 'child_class' => 'Class 5', 'subject' => 'English']);

        $d = AreaDemand::recentFor('Gurugram', 'Sector 57', null);
        $this->assertSame('area', $d['scope']);
        $whats = array_column($d['rows'], 'what');
        $this->assertContains('Class 10 · Maths', $whats);
        $this->assertContains('Class 11 · IB DP · Physics', $whats);
        $this->assertContains('Class 7 · ICSE · Science', $whats);
        $this->assertNotContains('Class 12 · Chemistry', $whats, 'test entries are skipped');
        $this->assertNotContains('Class 5 · English', $whats, 'Sector 5 is not Sector 57');
        $flat = json_encode($d);
        foreach (['Rohan', 'School', '1203', 'Tower', '9876', 'Parent'] as $leak) {
            $this->assertStringNotContainsString($leak, $flat);
        }
        $this->assertMatchesRegularExpression('/^[A-Z][a-z]{2} \d{4}$/', $d['rows'][0]['month']);
    }

    public function test_falls_back_to_the_zone_and_honours_opt_outs(): void
    {
        foreach (['Sector 56', 'Sector 58', 'Sector 62'] as $i => $loc) {
            $this->lead(['location' => $loc, 'child_class' => 'Class ' . (8 + $i), 'subject' => 'Maths']);
        }
        $d = AreaDemand::recentFor('Gurugram', 'Sector 59', 'Golf Course Extension Road');
        $this->assertSame('Golf Course Extension Road', $d['scope']);

        Cache::flush();
        config(['tutors.demand_exclude_ids' => [1]]);
        $this->assertNull(AreaDemand::recentFor('Gurugram', 'Sector 59', 'Golf Course Extension Road'));
    }
}
