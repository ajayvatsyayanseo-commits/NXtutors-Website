<?php

namespace Tests\Feature\CostSafety;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class TutorImportFinalizationTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Schema::create('tutor_imports', function (Blueprint $table): void {
            $table->id();
            $table->string('file_path');
            $table->string('status');
            $table->text('error')->nullable();
            $table->timestamps();
        });
        Schema::create('tutor_import_rows', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('tutor_import_id');
            $table->json('payload')->nullable();
            $table->string('status');
            $table->text('error')->nullable();
            $table->unsignedBigInteger('register_id')->nullable();
            $table->timestamps();
        });
    }

    protected function tearDown(): void
    {
        Schema::dropIfExists('tutor_import_rows');
        Schema::dropIfExists('tutor_imports');
        parent::tearDown();
    }

    public function test_import_is_completed_only_after_all_rows_are_terminal(): void
    {
        $importId = DB::table('tutor_imports')->insertGetId([
            'file_path' => 'imports/test.xlsx',
            'status' => 'processing',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tutor_import_rows')->insert([
            'tutor_import_id' => $importId,
            'payload' => '{}',
            'status' => 'done',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Artisan::call('tutor:process-imports', ['--limit' => 1]);

        $this->assertSame('done', DB::table('tutor_imports')->find($importId)->status);
    }
}
