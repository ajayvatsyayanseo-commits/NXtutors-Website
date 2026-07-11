<?php

namespace Tests\Feature\CostSafety;

use App\Services\OpenAiPageGenerator;
use App\Services\PageGen\CreateGeneratedPage;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use RuntimeException;
use Tests\TestCase;

class ExternalCallSafetyTest extends TestCase
{
    public function test_page_generation_provider_call_is_outside_a_database_transaction(): void
    {
        Schema::create('generated_pages', function (Blueprint $table): void {
            $table->id();
            $table->string('status')->nullable();
            $table->string('city')->nullable();
            $table->string('location')->nullable();
            $table->string('service_mode')->nullable();
            $table->json('payload')->nullable();
            $table->timestamps();
        });

        $generator = new class extends OpenAiPageGenerator
        {
            public int $transactionLevel = -1;

            public function generate(array $input): array
            {
                $this->transactionLevel = DB::transactionLevel();
                throw new RuntimeException('provider stop');
            }
        };

        try {
            (new CreateGeneratedPage($generator))->create($this->validPagePayload());
            $this->fail('Expected the provider sentinel exception.');
        } catch (RuntimeException $exception) {
            $this->assertSame('provider stop', $exception->getMessage());
            $this->assertSame(0, $generator->transactionLevel);
        } finally {
            Schema::dropIfExists('generated_pages');
        }
    }

    public function test_openai_server_failures_have_bounded_retries_and_sanitized_errors(): void
    {
        config()->set('services.openai.key', 'test-secret-key');
        config()->set('services.openai.retry_times', 1);
        config()->set('services.openai.page_daily_limit', 100);
        Http::fakeSequence()
            ->push('provider-secret-response', 500)
            ->push('provider-secret-response', 500);

        try {
            app(OpenAiPageGenerator::class)->generate($this->validPagePayload());
            $this->fail('Expected provider failure.');
        } catch (RuntimeException $exception) {
            $this->assertStringNotContainsString('provider-secret-response', $exception->getMessage());
            $this->assertStringContainsString('HTTP 500', $exception->getMessage());
        }

        $requestCount = count(Http::recorded());
        $this->assertGreaterThanOrEqual(1, $requestCount);
        $this->assertLessThanOrEqual(2, $requestCount);
    }

    private function validPagePayload(): array
    {
        return [
            'country' => 'India',
            'state' => 'Haryana',
            'city' => 'Gurugram',
            'location' => 'Sector 30',
            'page_type' => 'location',
            'service_mode' => 'home',
            'category' => 'academic',
            'subjects' => ['Mathematics'],
            'boards' => ['CBSE'],
            'classes_tracks' => ['Class 10'],
            'premium_schools' => array_fill(0, 5, ['name' => 'School']),
            'demand_score' => 10,
            'index_flag' => 'Index',
            'canonical_target' => 'gurugram-sector-30-mathematics',
        ];
    }
}
