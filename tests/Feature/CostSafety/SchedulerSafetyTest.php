<?php

namespace Tests\Feature\CostSafety;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class SchedulerSafetyTest extends TestCase
{
    public function test_scheduler_never_launches_a_queue_worker(): void
    {
        Artisan::call('schedule:list');

        $schedule = Artisan::output();

        $this->assertStringNotContainsString('queue:work', $schedule);
        $this->assertStringContainsString('pagegen:process-imports', $schedule);
        $this->assertStringContainsString('tutor:process-imports', $schedule);
    }
}
