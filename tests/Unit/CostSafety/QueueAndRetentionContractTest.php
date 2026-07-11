<?php

namespace Tests\Unit\CostSafety;

use App\Jobs\GenerateTutorFromImportRow;
use App\Jobs\PageGen\GenerateFromImportRow;
use App\Services\StorageRetentionPolicy;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Tests\TestCase;

class QueueAndRetentionContractTest extends TestCase
{
    public function test_queue_visibility_exceeds_every_worker_timeout(): void
    {
        $retryAfter = (int) config('queue.connections.database.retry_after');

        $this->assertGreaterThan((int) config('cost-safety.workers.pagegen_timeout'), $retryAfter);
        $this->assertGreaterThan((int) config('cost-safety.workers.tutor_timeout'), $retryAfter);
    }

    public function test_expensive_jobs_have_stable_unique_ids_and_bounded_attempts(): void
    {
        $page = new GenerateFromImportRow(42);
        $tutor = new GenerateTutorFromImportRow(42);

        $this->assertInstanceOf(ShouldBeUnique::class, $page);
        $this->assertInstanceOf(ShouldBeUnique::class, $tutor);
        $this->assertSame('pagegen-import-row:42', $page->uniqueId());
        $this->assertSame('tutor-import-row:42', $tutor->uniqueId());
        $this->assertSame(3, $page->tries);
        $this->assertSame(3, $tutor->tries);
    }

    public function test_retention_never_selects_imports_or_generated_media(): void
    {
        $policy = app(StorageRetentionPolicy::class);
        $old = now()->subYear()->getTimestamp();

        $this->assertFalse($policy->shouldDelete('Import files', $old, now()));
        $this->assertFalse($policy->shouldDelete('Generated media', $old, now()));
        $this->assertTrue($policy->shouldDelete('Laravel logs', $old, now()));
        $this->assertFalse($policy->shouldDelete('Laravel logs', now()->getTimestamp(), now()));
    }
}
