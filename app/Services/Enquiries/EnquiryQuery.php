<?php

namespace App\Services\Enquiries;

use App\Models\EnquiryLead;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Builder;

/**
 * The admin list's filters, quick tabs and sorts, applied to enquiry_leads.
 * Dates are IST days. Filter values come from the query string, which never
 * carries a name, phone or email (the search box posts and lives in the session).
 */
final class EnquiryQuery
{
    public const FILTER_KEYS = ['range', 'from', 'to', 'source', 'stage', 'priority', 'assigned', 'overdue', 'city', 'zone', 'area', 'band',
        'subject', 'board', 'exam', 'mode', 'gender', 'dup', 'has_demo', 'outcome', 'lost_reason', 'page', 'tag', 'tab', 'sort', 'per'];

    public const RANGES = ['today' => 'Today', 'yesterday' => 'Yesterday', '7d' => 'Last 7 days', '30d' => 'Last 30 days', 'all' => 'All time', 'custom' => 'Custom'];

    public const TABS = [
        'new_today' => 'New today',
        'unassigned' => 'Unassigned',
        'due' => 'Follow-up due',
        'demo_week' => 'Demo this week',
        'hot' => 'Hot leads',
        'converted_month' => 'Converted this month',
        'lost' => 'Lost',
    ];

    public const SORTS = ['received' => 'Newest first', 'oldest' => 'Oldest first', 'follow_up' => 'Next follow-up', 'priority' => 'Priority', 'stage_age' => 'Longest in stage'];

    public const OPEN = [null, 'new', 'contacted', 'requirement_confirmed', 'shortlisted', 'demo_scheduled', 'demo_done'];

    public static function tz(): string
    {
        return (string) config('enquiries.timezone', 'Asia/Kolkata');
    }

    public static function now(): CarbonImmutable
    {
        return CarbonImmutable::now(self::tz());
    }

    /** @return array{0:?CarbonImmutable,1:?CarbonImmutable} UTC bounds for a range */
    public static function bounds(array $f): array
    {
        $now = self::now();
        $range = $f['range'] ?? 'all';

        [$from, $to] = match ($range) {
            'today' => [$now->startOfDay(), null],
            'yesterday' => [$now->subDay()->startOfDay(), $now->startOfDay()],
            '7d' => [$now->subDays(6)->startOfDay(), null],
            '30d' => [$now->subDays(29)->startOfDay(), null],
            'custom' => [
                self::date($f['from'] ?? null)?->startOfDay(),
                self::date($f['to'] ?? null)?->addDay()->startOfDay(),
            ],
            default => [null, null],
        };

        return [$from?->utc(), $to?->utc()];
    }

    private static function date(?string $d): ?CarbonImmutable
    {
        if (! is_string($d) || ! preg_match('/^\d{4}-\d{2}-\d{2}$/', $d)) {
            return null;
        }
        try {
            return CarbonImmutable::createFromFormat('Y-m-d', $d, self::tz());
        } catch (\Throwable $e) {
            return null;
        }
    }

    public static function open(Builder $q): Builder
    {
        return $q->where(fn ($w) => $w->whereNull('followup_status')->orWhereIn('followup_status', array_filter(self::OPEN)));
    }

    public function build(array $f): Builder
    {
        $q = EnquiryLead::query();
        $this->applyRange($q, $f);
        $this->applyFilters($q, $f);
        $this->applyTab($q, $f['tab'] ?? null);
        $this->applySort($q, $f['sort'] ?? 'received');

        return $q;
    }

    public function applyRange(Builder $q, array $f): void
    {
        [$from, $to] = self::bounds($f);
        if ($from) {
            $q->where('received_at', '>=', $from);
        }
        if ($to) {
            $q->where('received_at', '<', $to);
        }
    }

    public function applyFilters(Builder $q, array $f): void
    {
        $eq = ['source' => 'source', 'priority' => 'priority', 'city' => 'city', 'zone' => 'zone', 'band' => 'class_band',
            'board' => 'board', 'exam' => 'exam_goal', 'mode' => 'mode', 'gender' => 'tutor_gender', 'lost_reason' => 'lost_reason'];
        foreach ($eq as $key => $col) {
            if (($v = $this->val($f, $key)) !== null) {
                $q->where($col, $v);
            }
        }
        if (($stage = $this->val($f, 'stage')) !== null) {
            $stage === 'new' ? $q->whereNull('followup_status') : $q->where('followup_status', $stage);
        }
        if (($a = $this->val($f, 'assigned')) !== null) {
            $a === 'none' ? $q->whereNull('assigned_to') : $q->where('assigned_to', (int) $a);
        }
        if (! empty($f['overdue'])) {
            self::open($q)->whereNotNull('next_follow_up_at')->where('next_follow_up_at', '<', now());
        }
        if (($v = $this->val($f, 'area')) !== null) {
            $q->where('area', 'like', '%' . addcslashes($v, '%_') . '%');
        }
        if (($v = $this->val($f, 'subject')) !== null) {
            $q->where('subjects', 'like', '%,' . addcslashes($v, '%_') . ',%');
        }
        if (($v = $this->val($f, 'tag')) !== null) {
            $q->where('tags', 'like', '%,' . addcslashes($v, '%_') . ',%');
        }
        if (($v = $this->val($f, 'page')) !== null) {
            $q->where('page_url', 'like', '%' . addcslashes($v, '%_') . '%');
        }
        if (! empty($f['dup'])) {
            $q->where(fn ($w) => $w->where('possible_duplicate', true)->orWhereNotNull('duplicate_of_id'));
        }
        if (! empty($f['has_demo'])) {
            $q->where(fn ($w) => $w->whereNotNull('demo_at')->orWhereIn('followup_status', ['demo_scheduled', 'demo_done']));
        }
        if (($o = $this->val($f, 'outcome')) !== null && in_array($o, ['converted', 'lost'], true)) {
            $q->where('followup_status', $o);
        }
    }

    public function applyTab(Builder $q, ?string $tab): void
    {
        $now = self::now();
        match ($tab) {
            'new_today' => $q->whereNull('followup_status')->where('received_at', '>=', $now->startOfDay()->utc()),
            'unassigned' => self::open($q)->whereNull('assigned_to'),
            'due' => self::open($q)->whereNotNull('next_follow_up_at')->where('next_follow_up_at', '<', $now->endOfDay()->utc()),
            'demo_week' => $q->whereBetween('demo_at', [$now->startOfWeek()->utc(), $now->endOfWeek()->utc()]),
            'hot' => self::open($q)->where('priority', 'hot'),
            'converted_month' => $q->where('followup_status', 'converted')->where('stage_changed_at', '>=', $now->startOfMonth()->utc()),
            'lost' => $q->where('followup_status', 'lost'),
            default => null,
        };
    }

    public function applySort(Builder $q, ?string $sort): void
    {
        match ($sort) {
            'oldest' => $q->orderBy('received_at')->orderBy('id'),
            'follow_up' => $q->orderByRaw('CASE WHEN next_follow_up_at IS NULL THEN 1 ELSE 0 END')->orderBy('next_follow_up_at')->orderByDesc('id'),
            'priority' => $q->orderByRaw("CASE priority WHEN 'hot' THEN 0 WHEN 'warm' THEN 1 WHEN 'cold' THEN 2 ELSE 3 END")->orderByDesc('received_at')->orderByDesc('id'),
            'stage_age' => $q->orderByRaw('COALESCE(stage_changed_at, received_at) ASC')->orderBy('id'),
            default => $q->orderByDesc('received_at')->orderByDesc('id'),
        };
    }

    private function val(array $f, string $key): ?string
    {
        $v = $f[$key] ?? null;
        if (! is_string($v)) {
            return null;
        }
        $v = trim($v);

        return $v === '' ? null : mb_substr($v, 0, 120);
    }

    /** The filters of a request, only the known keys. */
    public static function filtersFrom(array $input): array
    {
        $f = [];
        foreach (self::FILTER_KEYS as $k) {
            if (isset($input[$k]) && is_string($input[$k]) && trim($input[$k]) !== '') {
                $f[$k] = mb_substr(trim($input[$k]), 0, 120);
            }
        }
        // A quick tab looks at every date unless a range is chosen with it.
        $f['range'] = $f['range'] ?? (isset($f['tab']) || ! empty($f['overdue']) ? 'all' : '30d');

        return $f;
    }
}
