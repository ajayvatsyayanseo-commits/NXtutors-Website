<?php

namespace App\Console\Commands;

use App\Mail\EnquiryDigestMail;
use App\Models\EnquiryLead;
use App\Services\Enquiries\EnquiryAlerts;
use App\Services\Enquiries\EnquiryFeed;
use App\Services\Enquiries\EnquiryQuery;
use Illuminate\Console\Command;

/**
 * The 9:00 IST morning digest to config enquiries.alert_email: the last 24
 * hours' counts, what is still New, and the overdue follow-ups by parent name
 * only (never a phone number or email). Scheduled in routes/console.php.
 */
class EnquiriesDigest extends Command
{
    protected $signature = 'enquiries:digest {--force : Send even when ENQUIRY_DIGEST is off}';

    protected $description = 'Email the morning enquiries digest (counts and overdue follow-ups, names only)';

    public function handle(EnquiryFeed $feed, EnquiryAlerts $alerts): int
    {
        if (! config('enquiries.digest', true) && ! $this->option('force')) {
            $this->info('Digest is switched off (ENQUIRY_DIGEST=false).');

            return self::SUCCESS;
        }
        if (! EnquiryFeed::ready()) {
            $this->warn('The enquiry tables are not there yet.');

            return self::SUCCESS;
        }
        $to = trim((string) config('enquiries.alert_email'));
        if ($to === '') {
            return self::SUCCESS;
        }
        $feed->sync(0);

        $last24 = EnquiryLead::query()->where('received_at', '>=', now()->subDay());
        $bySource = [];
        foreach ((clone $last24)->selectRaw('source, COUNT(*) as n')->groupBy('source')->pluck('n', 'source') as $s => $n) {
            $bySource[EnquiryLead::SOURCES[$s] ?? $s] = (int) $n;
        }
        $overdue = EnquiryQuery::open(EnquiryLead::query())->whereNotNull('next_follow_up_at')
            ->where('next_follow_up_at', '<', now())->orderBy('next_follow_up_at')->limit(25)->get();
        $contacts = $feed->contactsFor($overdue);
        $today = EnquiryQuery::now();

        $data = [
            'received24' => (clone $last24)->count(),
            'bySource' => $bySource,
            'newOpen' => EnquiryLead::query()->whereNull('followup_status')->whereNull('duplicate_of_id')->count(),
            'unassigned' => EnquiryQuery::open(EnquiryLead::query())->whereNull('assigned_to')->whereNull('duplicate_of_id')->count(),
            'demosToday' => EnquiryLead::query()->whereBetween('demo_at', [$today->startOfDay()->utc(), $today->endOfDay()->utc()])->count(),
            'overdue' => $overdue->map(fn (EnquiryLead $l) => [
                'id' => $l->id,
                'name' => mb_substr((string) ($contacts[$l->id]['name'] ?? 'Parent'), 0, 60),
                'what' => trim(($l->class_label ?? '') . ' ' . ($l->subjectList()[0] ?? '') . ($l->city ? ' · ' . $l->city : '')),
                'due' => $l->next_follow_up_at?->timezone(EnquiryQuery::tz())->format('d M, g:i A'),
                'url' => route('super.enquiries.show', $l->id),
            ])->all(),
        ];

        $alerts->send($to, new EnquiryDigestMail($data));
        $this->info('Digest sent.');

        return self::SUCCESS;
    }
}
