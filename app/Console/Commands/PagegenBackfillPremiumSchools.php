<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\GeneratedPage;
use App\Jobs\PageGen\BackfillPremiumSchoolsForPage;

class PagegenBackfillPremiumSchools extends Command
{
    protected $signature = 'pagegen:backfill-premium-schools
        {--limit=10 : How many pages to dispatch}
        {--regen=0 : 1 = regenerate AI content, 0 = patch only}
        {--status=published : published|draft|any}
        {--all=0 : 1 = process all pages (ignore missing premium check)}
        {--only_missing=1 : 1 = dispatch only pages missing premium_schools (recommended)}';

    protected $description = 'Backfill payload.premium_schools + sections.premium_schools_fit (and optional AI regen) for generated pages.';

    public function handle()
    {
        $limit = (int)$this->option('limit');
        $regen = (bool)((int)$this->option('regen'));
        $status = (string)$this->option('status');
        $all = (bool)((int)$this->option('all'));
        $onlyMissing = (bool)((int)$this->option('only_missing'));

        $q = GeneratedPage::query()->orderBy('id', 'desc');

        if ($status !== 'any') {
            $q->where('status', $status);
        }

        // ✅ If only_missing=1 then pick pages where payload->premium_schools is missing or < 5
        if ($onlyMissing && !$all) {
            // MySQL JSON_LENGTH returns NULL when path missing -> treat as missing
            $q->whereRaw("COALESCE(JSON_LENGTH(JSON_EXTRACT(payload,'$.premium_schools')), 0) < 5");
        }

        $pages = $q->limit($limit)->get(['id','slug']);

        if ($pages->isEmpty()) {
            $this->info("No eligible pages found.");
            return 0;
        }

        $count = 0;
        foreach ($pages as $p) {
            BackfillPremiumSchoolsForPage::dispatch($p->id, $regen)->onQueue('pagegen');
            $this->line("Dispatched: #{$p->id} {$p->slug}");
            $count++;
        }

        $this->info("Done. Dispatched {$count} jobs. regen=" . ($regen ? 1 : 0));
        return 0;
    }
}
