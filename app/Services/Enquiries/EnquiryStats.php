<?php

namespace App\Services\Enquiries;

use App\Models\EnquiryLead;
use Illuminate\Database\Eloquent\Builder;

/**
 * The numbers at the top of the Enquiries page and in the morning digest.
 * Counts only: nothing here reads a name, phone or email.
 */
final class EnquiryStats
{
    /**
     * @param Builder $q the filtered list query (its ordering is dropped)
     * @return array<string,mixed>
     */
    public function kpis(Builder $q): array
    {
        $base = (clone $q)->reorder();
        $total = (clone $base)->count();
        $new = (clone $base)->whereNull('followup_status')->count();
        $contacted = (clone $base)->where(fn ($w) => $w->whereNotNull('first_contacted_at')->orWhereNotNull('followup_status'))->count();
        $demo = (clone $base)->where(fn ($w) => $w->whereNotNull('demo_at')->orWhereIn('followup_status', ['demo_scheduled', 'demo_done', 'converted']))->count();
        $converted = (clone $base)->where('followup_status', 'converted')->count();
        $overdue = EnquiryQuery::open(clone $base)->whereNotNull('next_follow_up_at')->where('next_follow_up_at', '<', now())->count();

        $minutes = [];
        foreach ((clone $base)->whereNotNull('first_contacted_at')->limit(5000)->get(['received_at', 'first_contacted_at']) as $r) {
            if ($r->received_at && $r->first_contacted_at && $r->first_contacted_at >= $r->received_at) {
                $minutes[] = $r->received_at->diffInMinutes($r->first_contacted_at);
            }
        }
        sort($minutes);
        $median = null;
        if ($minutes) {
            $n = count($minutes);
            $median = $n % 2 ? $minutes[intdiv($n, 2)] : ($minutes[$n / 2 - 1] + $minutes[$n / 2]) / 2;
        }

        $pct = fn (int $x) => $total > 0 ? (int) round($x * 100 / $total) : 0;

        return [
            'total' => $total,
            'new' => $new,
            'contacted_pct' => $pct($contacted),
            'demo_pct' => $pct($demo),
            'converted_pct' => $pct($converted),
            'converted' => $converted,
            'overdue' => $overdue,
            'median_first_response' => $median === null ? null : self::duration((int) round($median)),
        ];
    }

    /** @return array<string,mixed> */
    public function breakdowns(Builder $q): array
    {
        $base = (clone $q)->reorder();
        $group = fn (string $col, int $limit = 12) => (clone $base)->selectRaw("COALESCE($col, '') as k, COUNT(*) as n")
            ->groupBy($col)->orderByDesc('n')->limit($limit)->pluck('n', 'k')->all();

        $subjects = [];
        foreach ((clone $base)->whereNotNull('subjects')->limit(5000)->pluck('subjects') as $s) {
            foreach (array_filter(explode(',', (string) $s)) as $one) {
                $subjects[$one] = ($subjects[$one] ?? 0) + 1;
            }
        }
        arsort($subjects);

        $stages = $group('followup_status', 20);
        $funnel = [];
        foreach (EnquiryLead::STAGES as $key => $label) {
            $funnel[$label] = (int) ($stages[$key === 'new' ? '' : $key] ?? 0);
        }

        $bands = [];
        foreach ($group('class_band', 10) as $k => $n) {
            $bands[EnquiryLead::CLASS_BANDS[$k] ?? 'Not given'] = $n;
        }
        $sources = [];
        foreach ($group('source', 10) as $k => $n) {
            $sources[EnquiryLead::SOURCES[$k] ?? ($k ?: 'Unknown')] = $n;
        }
        $cities = [];
        foreach ($group('city', 10) as $k => $n) {
            $cities[$k !== '' ? $k : 'Not given'] = $n;
        }

        return [
            'source' => $sources,
            'city' => $cities,
            'subject' => array_slice($subjects, 0, 10, true),
            'band' => $bands,
            'funnel' => $funnel,
            'days' => $this->byDay(),
        ];
    }

    /** Enquiries per IST day, the last 30 days (whatever the filters). @return array<string,int> */
    public function byDay(int $days = 30): array
    {
        $tz = EnquiryQuery::tz();
        $start = EnquiryQuery::now()->subDays($days - 1)->startOfDay();
        $out = [];
        for ($i = 0; $i < $days; $i++) {
            $out[$start->addDays($i)->format('Y-m-d')] = 0;
        }
        foreach (EnquiryLead::query()->where('received_at', '>=', $start->utc())->pluck('received_at') as $at) {
            $d = $at?->copy()->timezone($tz)->format('Y-m-d');
            if ($d !== null && isset($out[$d])) {
                $out[$d]++;
            }
        }

        return $out;
    }

    /** "Needs action now". @return array<string,mixed> */
    public function needsAction(): array
    {
        $hours = (int) config('enquiries.unassigned_alert_hours', 2);
        $now = EnquiryQuery::now();

        return [
            'unassigned' => EnquiryQuery::open(EnquiryLead::query())->whereNull('assigned_to')->whereNull('duplicate_of_id')
                ->where('received_at', '<', now()->subHours($hours))->orderBy('received_at')->limit(10)->get(),
            'overdue' => EnquiryQuery::open(EnquiryLead::query())->whereNotNull('next_follow_up_at')
                ->where('next_follow_up_at', '<', now())->orderBy('next_follow_up_at')->limit(10)->get(),
            'demos_today' => EnquiryLead::query()->whereBetween('demo_at', [$now->startOfDay()->utc(), $now->endOfDay()->utc()])
                ->orderBy('demo_at')->limit(10)->get(),
            'hours' => $hours,
        ];
    }

    public static function duration(int $minutes): string
    {
        return match (true) {
            $minutes < 60 => $minutes . ' min',
            $minutes < 60 * 48 => round($minutes / 60, 1) . ' h',
            default => round($minutes / 1440, 1) . ' days',
        };
    }
}
