<?php

namespace Tests\Feature\CostSafety;

use App\Models\PagegenImportRow;
use App\Services\Queue\AtomicImportClaim;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class AtomicImportClaimTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Schema::create('pagegen_import_rows', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('import_id')->nullable();
            $table->json('payload')->nullable();
            $table->string('status')->default('pending');
            $table->text('error')->nullable();
            $table->unsignedBigInteger('generated_page_id')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
        });
    }

    protected function tearDown(): void
    {
        Schema::dropIfExists('pagegen_import_rows');

        parent::tearDown();
    }

    public function test_only_one_worker_can_claim_the_same_row(): void
    {
        $row = PagegenImportRow::create([
            'payload' => ['city' => 'Gurugram'],
            'status' => 'pending',
        ]);

        $claimer = app(AtomicImportClaim::class);

        $this->assertTrue($claimer->claim(PagegenImportRow::class, $row->id));
        $this->assertFalse($claimer->claim(PagegenImportRow::class, $row->id));
        $this->assertSame('processing', $row->fresh()->status);
    }

    public function test_active_processing_row_cannot_be_stolen(): void
    {
        $row = PagegenImportRow::create([
            'payload' => [],
            'status' => 'processing',
        ]);

        $this->assertFalse(app(AtomicImportClaim::class)->claim(PagegenImportRow::class, $row->id));
    }
}
