<?php

namespace App\Console\Commands;

use App\Models\EnquiryLead;
use App\Services\Enquiries\EnquiryFeed;
use Illuminate\Console\Command;

/**
 * php artisan enquiries:summary --since=24h
 *
 * Counts by source, city and stage. No names, phone numbers or emails.
 */
class EnquiriesSummary extends Command
{
    protected $signature = 'enquiries:summary {--since=24h : 90m, 24h, 7d or all} {--no-sync : Do not pick up new source rows first}';

    protected $description = 'Enquiry counts by source, city and stage (no personal data)';

    public function handle(EnquiryFeed $feed): int
    {
        if (! EnquiryFeed::ready()) {
            $this->warn('The enquiry tables are not there yet (run the migrations).');

            return self::SUCCESS;
        }
        if (! $this->option('no-sync')) {
            $feed->sync(0);
        }

        $since = strtolower(trim((string) $this->option('since')));
        $q = EnquiryLead::query();
        $label = 'all time';
        if ($since !== 'all') {
            if (! preg_match('/^(\d{1,4})\s*([mhd])$/', $since, $m)) {
                $this->error('Use --since=90m, 24h, 7d or all.');

                return self::INVALID;
            }
            $from = match ($m[2]) {
                'm' => now()->subMinutes((int) $m[1]),
                'h' => now()->subHours((int) $m[1]),
                'd' => now()->subDays((int) $m[1]),
            };
            $q->where('received_at', '>=', $from);
            $label = 'since ' . $from->copy()->timezone(config('enquiries.timezone', 'Asia/Kolkata'))->format('d M Y H:i') . ' IST';
        }

        $total = (clone $q)->count();
        $this->info("Enquiries {$label}: {$total}");

        $table = function (string $title, string $col, array $labels = []) use ($q) {
            $rows = (clone $q)->selectRaw("COALESCE($col, '') as k, COUNT(*) as n")->groupBy($col)->orderByDesc('n')->limit(15)->get()
                ->map(fn ($r) => [$labels[$r->k] ?? ($r->k !== '' ? $r->k : '(none)'), $r->n])->all();
            $this->line('');
            $this->table([$title, 'Count'], $rows);
        };

        $table('Source', 'source', EnquiryLead::SOURCES);
        $table('City', 'city');
        $table('Stage', 'followup_status', ['' => 'New'] + EnquiryLead::STAGES);

        $overdue = EnquiryLead::query()->whereNotNull('next_follow_up_at')->where('next_follow_up_at', '<', now())
            ->where(fn ($w) => $w->whereNull('followup_status')->orWhereNotIn('followup_status', ['converted', 'lost']))->count();
        $this->line('');
        $this->line("Open enquiries with an overdue follow-up (any date): {$overdue}");

        return self::SUCCESS;
    }
}
