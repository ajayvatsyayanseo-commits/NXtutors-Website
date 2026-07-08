<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\GeneratedPage;
use Carbon\Carbon;

class PagegenPublishDrafts extends Command
{
    protected $signature = 'pagegen:publish-drafts 
                            {--limit=300 : How many pages to publish per run}';

    protected $description = 'Publish draft generated pages in controlled batches';

    public function handle()
    {
        $limit = (int) $this->option('limit');

        $pages = GeneratedPage::query()
            ->where('status', 'draft')
            ->where('payload->index_flag', 'Index') // only strong pages
            ->orderBy('created_at')
            ->limit($limit)
            ->get();

        if ($pages->isEmpty()) {
            $this->info('No draft pages to publish.');
            return 0;
        }

        foreach ($pages as $page) {
            $page->update([
                'status' => 'published',
                'published_at' => Carbon::now(),
            ]);
        }

        $this->info("Published {$pages->count()} pages.");
        return 0;
    }
}
