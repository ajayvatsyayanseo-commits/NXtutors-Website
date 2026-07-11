<?php

namespace Tests\Unit\CostSafety;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class WorkerScriptSafetyTest extends TestCase
{
    public static function legacyWorkerScripts(): array
    {
        return [
            ['cron-pagegen-worker.sh'],
            ['cron-pagegen-workers-10.sh'],
            ['cron-queue-workers.sh'],
        ];
    }

    #[DataProvider('legacyWorkerScripts')]
    public function test_legacy_worker_wrapper_is_finite_locked_and_environment_driven(string $file): void
    {
        $contents = file_get_contents(dirname(__DIR__, 3).DIRECTORY_SEPARATOR.$file);

        $this->assertIsString($contents);
        $this->assertStringContainsString('APP_ROOT', $contents);
        $this->assertStringContainsString('flock', $contents);
        $this->assertStringContainsString('--stop-when-empty', $contents);
        $this->assertStringNotContainsString('nohup', $contents);
        $this->assertStringNotContainsString('config:clear', $contents);
        $this->assertStringNotContainsString('cache:clear', $contents);
        $this->assertStringNotContainsString('/home/', $contents);
    }
}
