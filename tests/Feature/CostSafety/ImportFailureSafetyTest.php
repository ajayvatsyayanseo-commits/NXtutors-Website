<?php

namespace Tests\Feature\CostSafety;

use App\Models\PagegenImport;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Tests\TestCase;

class ImportFailureSafetyTest extends TestCase
{
    private array $temporaryFiles = [];

    protected function setUp(): void
    {
        parent::setUp();

        Schema::create('pagegen_imports', function (Blueprint $table): void {
            $table->id();
            $table->string('file_path');
            $table->string('status')->default('pending');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
        });
        Schema::create('pagegen_import_rows', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('import_id');
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
        foreach ($this->temporaryFiles as $file) {
            @unlink($file);
        }
        Schema::dropIfExists('pagegen_import_rows');
        Schema::dropIfExists('pagegen_imports');

        parent::tearDown();
    }

    public function test_missing_import_file_becomes_failed_instead_of_retrying_forever(): void
    {
        $import = PagegenImport::create([
            'file_path' => 'missing/import.xlsx',
            'status' => 'pending',
        ]);

        $this->assertSame(1, Artisan::call('pagegen:process-imports'));
        $this->assertSame('failed', $import->fresh()->status);
    }

    public function test_oversized_workbook_is_rejected_before_rows_are_created(): void
    {
        config()->set('cost-safety.imports.max_rows', 1);
        $relativePath = 'tests-over-limit-'.uniqid().'.xlsx';
        $fullPath = public_path($relativePath);
        $this->temporaryFiles[] = $fullPath;

        $spreadsheet = new Spreadsheet;
        $spreadsheet->getActiveSheet()->fromArray([
            ['State', 'City', 'Location'],
            ['Haryana', 'Gurugram', 'Sector 30'],
            ['Haryana', 'Gurugram', 'Sector 31'],
        ]);
        (new Xlsx($spreadsheet))->save($fullPath);
        $spreadsheet->disconnectWorksheets();

        $import = PagegenImport::create([
            'file_path' => $relativePath,
            'status' => 'pending',
        ]);

        $this->assertSame(1, Artisan::call('pagegen:process-imports'));
        $this->assertSame('failed', $import->fresh()->status);
        $this->assertDatabaseCount('pagegen_import_rows', 0);
    }
}
