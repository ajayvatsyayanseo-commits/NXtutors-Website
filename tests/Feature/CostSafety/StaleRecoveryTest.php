<?php

namespace Tests\Feature\CostSafety;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class StaleRecoveryTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Schema::create('pagegen_import_rows', function (Blueprint $table): void {
            $table->id();
            $table->string('status');
            $table->text('error')->nullable();
            $table->timestamps();
        });
    }

    protected function tearDown(): void
    {
        Schema::dropIfExists('pagegen_import_rows');
        parent::tearDown();
    }

    public function test_stale_recovery_is_read_only_by_default_and_never_steals_active_work(): void
    {
        config()->set('cost-safety.processing.stale_after_minutes', 30);
        $staleId = DB::table('pagegen_import_rows')->insertGetId([
            'status' => 'processing',
            'created_at' => now()->subHours(2),
            'updated_at' => now()->subHours(2),
        ]);
        $activeId = DB::table('pagegen_import_rows')->insertGetId([
            'status' => 'processing',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Artisan::call('app:recover-stale-processing');
        $this->assertSame('processing', DB::table('pagegen_import_rows')->find($staleId)->status);

        Artisan::call('app:recover-stale-processing', ['--apply' => true]);
        $this->assertSame('failed', DB::table('pagegen_import_rows')->find($staleId)->status);
        $this->assertSame('processing', DB::table('pagegen_import_rows')->find($activeId)->status);
    }
}
