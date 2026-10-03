<?php

namespace App\Console\Commands;

use App\Services\Enquiries\EnquiryFeed;
use Illuminate\Console\Command;

/**
 * Adds enquiries the desk has not seen yet (old rows, or anything stored by a
 * path that does not call EnquiryFeed::record()). Sends no emails.
 */
class EnquiriesSync extends Command
{
    protected $signature = 'enquiries:sync';

    protected $description = 'Backfill Super Admin Enquiries from every enquiry table (no emails)';

    public function handle(EnquiryFeed $feed): int
    {
        if (! EnquiryFeed::ready()) {
            $this->warn('The enquiry tables are not there yet (run the migrations).');

            return self::SUCCESS;
        }
        $this->info('Added ' . $feed->sync(0) . ' enquiries.');

        return self::SUCCESS;
    }
}
