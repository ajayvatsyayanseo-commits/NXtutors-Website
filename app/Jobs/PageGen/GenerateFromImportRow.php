<?php

namespace App\Jobs\PageGen;

use App\Models\PagegenImportRow;
use App\Services\PageGen\CreateGeneratedPage;
use App\Services\Queue\AtomicImportClaim;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\Middleware\WithoutOverlapping;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;
use Throwable;

class GenerateFromImportRow implements ShouldBeUnique, ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;

    public int $timeout = 240;

    public bool $failOnTimeout = true;

    public int $uniqueFor = 1800;

    public function __construct(public int $rowId) {}

    public function uniqueId(): string
    {
        return 'pagegen-import-row:'.$this->rowId;
    }

    public function backoff(): array
    {
        return [30, 120, 300];
    }

    public function retryUntil(): \DateTimeInterface
    {
        return now()->addMinutes(20);
    }

    public function middleware(): array
    {
        return [
            (new WithoutOverlapping($this->uniqueId()))
                ->dontRelease()
                ->expireAfter($this->timeout + 60),
        ];
    }

    public function handle(CreateGeneratedPage $creator, AtomicImportClaim $claimer): void
    {
        $row = PagegenImportRow::find($this->rowId);

        if (! $row || $row->status === 'done' || $row->generated_page_id) {
            return;
        }

        if (! $claimer->claim(PagegenImportRow::class, $this->rowId)) {
            return;
        }

        $row->refresh();
        $payload = is_array($row->payload) ? $row->payload : [];

        try {
            $page = $creator->create($payload, $row->created_by);

            PagegenImportRow::query()
                ->whereKey($this->rowId)
                ->where('status', 'processing')
                ->update([
                    'status' => 'done',
                    'generated_page_id' => $page->id,
                    'error' => null,
                    'updated_at' => now(),
                ]);
        } catch (Throwable $exception) {
            if ($this->attempts() < $this->tries) {
                $this->releaseForRetry($exception);
            } else {
                $this->markFailed($exception);
            }

            throw $exception;
        }
    }

    public function failed(?Throwable $exception): void
    {
        $this->markFailed($exception);
    }

    private function markFailed(?Throwable $exception): void
    {
        $message = $exception
            ? Str::limit(preg_replace('/\s+/', ' ', $exception->getMessage()) ?: 'Generation failed.', 500)
            : 'Generation failed.';

        PagegenImportRow::query()
            ->whereKey($this->rowId)
            ->where('status', 'processing')
            ->update([
                'status' => 'failed',
                'error' => $message,
                'updated_at' => now(),
            ]);
    }

    private function releaseForRetry(Throwable $exception): void
    {
        PagegenImportRow::query()
            ->whereKey($this->rowId)
            ->where('status', 'processing')
            ->update([
                'status' => 'pending',
                'error' => Str::limit(preg_replace('/\s+/', ' ', $exception->getMessage()) ?: 'Retry scheduled.', 500),
                'updated_at' => now(),
            ]);
    }
}
