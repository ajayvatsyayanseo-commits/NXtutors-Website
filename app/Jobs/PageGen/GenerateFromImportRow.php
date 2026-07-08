<?php

namespace App\Jobs\PageGen;

use App\Models\PagegenImportRow;
use App\Models\GeneratedPage;
use App\Services\PageGen\CreateGeneratedPage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GenerateFromImportRow implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;

    public function __construct(public int $rowId) {}

    public function handle(CreateGeneratedPage $creator)
    {
        $row = PagegenImportRow::findOrFail($this->rowId);

        // already done
        if ($row->status === 'done') return;

        $payload = is_array($row->payload) ? $row->payload : [];

        // ✅ Prevent job duplicate processing
        if ($row->status === 'processing') {
            return;
        }

        $row->update(['status' => 'processing', 'error' => null]);

        try {
            // ✅ NOTE:
            // Excel se index_flag/canonical_target nahi aa rahe (auto compute hoga CreateGeneratedPage me)
            // Isliye yaha koi "Skip by index_flag" check nahi hoga.

            // ✅ Optional: prevent same geo+service+category exact duplicates (extra safety)
            // (Agar aapko chahiye to)
            // $already = GeneratedPage::query()
            //     ->where('status','published')
            //     ->where('state', $payload['state'] ?? null)
            //     ->where('city', $payload['city'] ?? null)
            //     ->where('location', $payload['location'] ?? null)
            //     ->where('service_mode', $payload['service_mode'] ?? null)
            //     ->where('payload->category', $payload['category'] ?? null)
            //     ->exists();
            // if($already){
            //     $row->update(['status'=>'done','error'=>'Skipped: already exists for same geo+mode+category']);
            //     return;
            // }

            // ✅ Create page (CreateGeneratedPage will compute demand/index/canonical + premium schools)
            $page = $creator->create($payload, $row->created_by);

            $row->update([
                'status' => 'done',
                'generated_page_id' => $page->id,
            ]);

        } catch (\Throwable $e) {
            $row->update([
                'status' => 'failed',
                'error' => $e->getMessage(),
            ]);

            throw $e; // queue retry
        }
    }
}
