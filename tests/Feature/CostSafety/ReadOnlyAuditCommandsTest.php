<?php

namespace Tests\Feature\CostSafety;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class ReadOnlyAuditCommandsTest extends TestCase
{
    public function test_cost_health_check_is_read_only_and_handles_missing_application_tables(): void
    {
        $this->assertSame(0, Artisan::call('app:cost-health-check'));
        $this->assertStringContainsString('READ-ONLY', Artisan::output());
    }

    public function test_storage_audit_is_read_only_by_default(): void
    {
        $this->assertSame(0, Artisan::call('app:storage-audit'));

        $output = Artisan::output();
        $this->assertStringContainsString('READ-ONLY', $output);
        $this->assertStringContainsString('No files were deleted', $output);
    }
}
