<?php

namespace Tests\Feature\CostSafety;

use App\Models\PagegenImportRow;
use App\Jobs\PageGen\GenerateFromImportRow;
use App\Models\GeneratedPage;
use App\Services\PageGen\CreateGeneratedPage;
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

    public function test_duplicate_delivery_does_not_generate_the_row_twice(): void
    {
        $row = PagegenImportRow::create([
            'payload' => ['city' => 'Gurugram'],
            'status' => 'pending',
        ]);
        $page = new GeneratedPage;
        $page->id = 99;
        $creator = $this->mock(CreateGeneratedPage::class);
        $creator->shouldReceive('create')->once()->andReturn($page);

        (new GenerateFromImportRow($row->id))->handle($creator, app(AtomicImportClaim::class));
        (new GenerateFromImportRow($row->id))->handle($creator, app(AtomicImportClaim::class));

        $this->assertSame('done', $row->fresh()->status);
        $this->assertSame(99, $row->fresh()->generated_page_id);
    }
}
