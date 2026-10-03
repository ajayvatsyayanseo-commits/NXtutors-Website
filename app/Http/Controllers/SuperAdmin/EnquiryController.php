<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\EnquiryLead;
use App\Models\User;
use App\Services\Enquiries\EnquiryFeed;
use App\Services\Enquiries\EnquiryMatcher;
use App\Services\Enquiries\EnquiryPipeline;
use App\Services\Enquiries\EnquiryQuery;
use App\Services\Enquiries\EnquiryStats;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Super Admin → Enquiries: every family enquiry from every form, with the
 * follow-up pipeline. Behind auth + role:super_admin like the rest of /super.
 *
 * Privacy: the query string carries filters only. The name/phone/email search
 * is POSTed and kept in the session; exports are logged with the admin's id,
 * the row count and the filter names, never a value that identifies a family.
 */
class EnquiryController extends Controller
{
    private const SEARCH_KEY = 'enquiries.search';

    private ?Collection $adminCache = null;

    public function __construct(
        private readonly EnquiryFeed $feed,
        private readonly EnquiryQuery $query,
        private readonly EnquiryStats $stats,
        private readonly EnquiryPipeline $pipeline,
    ) {
    }

    public function index(Request $request)
    {
        if (! EnquiryFeed::ready()) {
            return view('super.enquiries.not-ready');
        }
        $this->feed->sync();

        $f = EnquiryQuery::filtersFrom($request->query());
        $search = (string) $request->session()->get(self::SEARCH_KEY, '');
        $q = $this->filtered($f, $search);
        $view = $request->query('view') === 'board' ? 'board' : 'table';
        $per = in_array((int) ($f['per'] ?? 25), [25, 50, 100], true) ? (int) ($f['per'] ?? 25) : 25;

        $board = [];
        $leads = null;
        if ($view === 'board') {
            $fNoStage = $f;
            unset($fNoStage['stage'], $fNoStage['outcome']);
            foreach (EnquiryLead::STAGES as $key => $label) {
                $col = $this->filtered($fNoStage, $search);
                $key === 'new' ? $col->whereNull('followup_status') : $col->where('followup_status', $key);
                $board[$key] = ['label' => $label, 'count' => (clone $col)->reorder()->count(), 'items' => $col->limit(30)->get()];
            }
            $pageLeads = collect($board)->flatMap(fn ($c) => $c['items']);
        } else {
            $leads = $q->paginate($per)->withQueryString();
            $pageLeads = collect($leads->items());
        }

        $now = EnquiryQuery::now();

        return view('super.enquiries.index', [
            'f' => $f,
            'search' => $search,
            'view' => $view,
            'leads' => $leads,
            'board' => $board,
            'contacts' => $this->feed->contactsFor($pageLeads),
            'kpis' => $this->stats->kpis($this->filtered($f, $search)),
            'charts' => $this->stats->breakdowns($this->filtered($f, $search)),
            'action' => $this->stats->needsAction(),
            'todayCount' => EnquiryLead::query()->where('received_at', '>=', $now->startOfDay()->utc())->count(),
            'newCount' => EnquiryLead::query()->whereNull('followup_status')->whereNull('duplicate_of_id')->count(),
            'admins' => $this->admins(),
            'options' => $this->options(),
            'per' => $per,
        ]);
    }

    public function search(Request $request)
    {
        $term = mb_substr(trim((string) $request->input('q', '')), 0, 120);
        $term === '' ? $request->session()->forget(self::SEARCH_KEY) : $request->session()->put(self::SEARCH_KEY, $term);
        parse_str((string) $request->input('qs', ''), $qs);
        $keep = array_intersect_key(is_array($qs) ? $qs : [], array_flip(array_merge(EnquiryQuery::FILTER_KEYS, ['view'])));

        return redirect()->route('super.enquiries.index', $keep);
    }

    public function show(Request $request, EnquiryLead $lead, EnquiryMatcher $matcher)
    {
        $contact = $this->feed->contactFor($lead);
        $group = $this->feed->duplicateGroup($lead);

        return view('super.enquiries.show', [
            'lead' => $lead,
            'contact' => $contact,
            'activities' => $lead->activities()->limit(200)->get(),
            'group' => $group,
            'groupContacts' => $this->feed->contactsFor($group),
            'matches' => $matcher->suggest($lead),
            'admins' => $this->admins(),
            'handoff' => $lead->wa_ref ? \App\Models\NxtHandoff::where('code', $lead->wa_ref)->first() : null,
        ]);
    }

    public function update(Request $request, EnquiryLead $lead)
    {
        $data = $request->validate($this->rules());
        $n = $this->pipeline->apply($lead, $data, $request->user());

        if ($request->expectsJson()) {
            return response()->json(['ok' => true, 'changes' => $n, 'stage' => $lead->stage()]);
        }

        return $this->back($request, $lead)->with('success', $n ? 'Enquiry #' . $lead->id . ' updated.' : 'Nothing changed.');
    }

    public function duplicate(Request $request, EnquiryLead $lead)
    {
        $data = $request->validate(['of' => ['nullable', 'integer', 'exists:enquiry_leads,id']]);
        $of = ! empty($data['of']) && (int) $data['of'] !== $lead->id ? EnquiryLead::find($data['of']) : null;
        $this->pipeline->markDuplicate($lead, $of, $request->user());

        return redirect()->route('super.enquiries.show', $lead)->with('success', 'Marked as a duplicate.');
    }

    public function bulk(Request $request)
    {
        $data = $request->validate([
            'ids' => ['required', 'array', 'max:500'],
            'ids.*' => ['integer'],
            'action' => ['required', Rule::in(['assign', 'stage', 'tag', 'duplicate', 'spam', 'export', 'priority'])],
            'value' => ['nullable', 'string', 'max:64'],
            'tag_value' => ['nullable', 'string', 'max:30'],
        ]);
        $leads = EnquiryLead::query()->whereIn('id', $data['ids'])->orderByDesc('received_at')->get();

        if ($data['action'] === 'export') {
            return $this->csv($leads, $request, ['bulk']);
        }

        $value = $data['value'] ?? null;
        $input = match ($data['action']) {
            'assign' => ['assigned_to' => $value],
            'stage' => ['stage' => $value],
            'priority' => ['priority' => $value],
            'tag' => ['add_tag' => $data['tag_value'] ?? $value],
            'spam' => ['stage' => 'lost', 'lost_reason' => 'spam'],
            default => [],
        };
        if ($data['action'] === 'stage') {
            validator($input, ['stage' => ['required', Rule::in(array_keys(EnquiryLead::STAGES))]])->validate();
        }
        if ($data['action'] === 'priority') {
            validator($input, ['priority' => ['nullable', Rule::in(array_keys(EnquiryLead::PRIORITIES))]])->validate();
        }
        if ($data['action'] === 'assign') {
            validator($input, ['assigned_to' => ['nullable', function ($attr, $v, $fail) {
                if ($v !== null && $v !== '' && $v !== 'none' && ! $this->admins()->has((int) $v)) {
                    $fail('Choose an admin.');
                }
            }]])->validate();
        }

        $done = 0;
        foreach ($leads as $lead) {
            if ($data['action'] === 'duplicate') {
                $this->pipeline->markDuplicate($lead, null, $request->user());
                $done++;
            } elseif ($this->pipeline->apply($lead, $input, $request->user()) > 0) {
                $done++;
            }
        }
        parse_str((string) $request->input('qs', ''), $qs);
        $keep = array_intersect_key(is_array($qs) ? $qs : [], array_flip(array_merge(EnquiryQuery::FILTER_KEYS, ['view', 'page'])));

        return redirect()->route('super.enquiries.index', $keep)->with('success', $done . ' enquir' . ($done === 1 ? 'y' : 'ies') . ' updated.');
    }

    public function export(Request $request)
    {
        $f = EnquiryQuery::filtersFrom($request->query());
        $leads = $this->filtered($f, (string) $request->session()->get(self::SEARCH_KEY, ''))->limit(10000)->get();

        return $this->csv($leads, $request, array_keys($f));
    }

    // ------------------------------------------------------------------

    private function filtered(array $f, string $search)
    {
        $q = $this->query->build($f);
        if ($search !== '') {
            $this->feed->applySearch($q, $search);
        }

        return $q;
    }

    private function back(Request $request, EnquiryLead $lead)
    {
        $to = (string) $request->input('return', '');

        return $to === 'list' ? redirect()->back() : redirect()->route('super.enquiries.show', $lead);
    }

    private function rules(): array
    {
        return [
            'stage' => ['sometimes', 'nullable', Rule::in(array_keys(EnquiryLead::STAGES))],
            'lost_reason' => ['sometimes', 'nullable', Rule::in(array_keys(EnquiryLead::LOST_REASONS))],
            'priority' => ['sometimes', 'nullable', Rule::in(array_keys(EnquiryLead::PRIORITIES))],
            'assigned_to' => ['sometimes', 'nullable', function ($attr, $v, $fail) {
                if ($v !== null && $v !== '' && $v !== 'none' && ! $this->admins()->has((int) $v)) {
                    $fail('Choose an admin.');
                }
            }],
            'next_follow_up_at' => ['sometimes', 'nullable', 'date'],
            'demo_at' => ['sometimes', 'nullable', 'date'],
            'tags' => ['sometimes', 'nullable', 'string', 'max:250'],
            'shortlisted_tutor_ids' => ['sometimes', 'nullable', 'string', 'max:250'],
            'demo_tutor_id' => ['sometimes', 'nullable', 'string', 'max:64'],
            'note' => ['sometimes', 'nullable', 'string', 'max:5000'],
        ];
    }

    /** Super admins who can own an enquiry. @return Collection<int,string> */
    private function admins(): Collection
    {
        if ($this->adminCache !== null) {
            return $this->adminCache;
        }
        try {
            $users = User::role('super_admin')->orderBy('name')->get(['id', 'name']);
        } catch (\Throwable $e) {
            $users = User::query()->orderBy('name')->limit(50)->get(['id', 'name']);
        }

        return $this->adminCache = $users->mapWithKeys(fn ($u) => [(int) $u->id => (string) $u->name]);
    }

    /** Values the filter menus offer, from the enquiries themselves. */
    private function options(): array
    {
        $distinct = fn (string $col, int $limit = 80) => EnquiryLead::query()->whereNotNull($col)->where($col, '!=', '')
            ->distinct()->orderBy($col)->limit($limit)->pluck($col)->all();
        $subjects = [];
        foreach (EnquiryLead::query()->whereNotNull('subjects')->limit(3000)->pluck('subjects') as $s) {
            foreach (array_filter(explode(',', (string) $s)) as $one) {
                $subjects[$one] = true;
            }
        }
        ksort($subjects);
        $tags = [];
        foreach (EnquiryLead::query()->whereNotNull('tags')->limit(3000)->pluck('tags') as $s) {
            foreach (array_filter(explode(',', (string) $s)) as $one) {
                $tags[$one] = true;
            }
        }
        ksort($tags);

        return [
            'cities' => $distinct('city'),
            'zones' => $distinct('zone'),
            'boards' => $distinct('board', 30),
            'subjects' => array_keys($subjects),
            'tags' => array_keys($tags),
        ];
    }

    /** @param iterable<EnquiryLead> $leads */
    private function csv(iterable $leads, Request $request, array $filterNames): StreamedResponse
    {
        $leads = collect($leads);
        $contacts = $this->feed->contactsFor($leads);
        $admins = $this->admins();
        $tz = EnquiryQuery::tz();

        Log::info('Enquiries exported', [
            'admin_user_id' => $request->user()?->id,
            'rows' => $leads->count(),
            'filters' => array_values(array_diff($filterNames, ['range'])),
        ]);

        $cell = function ($v): string {
            $v = (string) ($v ?? '');

            return preg_match('/^[=+\-@\t\r]/', $v) ? "'" . $v : $v;
        };

        return response()->streamDownload(function () use ($leads, $contacts, $admins, $tz, $cell) {
            $out = fopen('php://output', 'w');
            fputcsv($out, ['ID', 'Received (IST)', 'Source', 'Stage', 'Lost reason', 'Priority', 'Assigned to', 'Class', 'Class band', 'Subjects',
                'Board', 'Exam goal', 'City', 'Zone', 'Area', 'Mode', 'Tutor gender', 'Budget', 'Preferred time', 'Start', 'Parent name',
                'Phone', 'Email', 'Page', 'UTM', 'WhatsApp Ref', 'Next follow-up (IST)', 'Demo (IST)', 'Tags', 'Latest note', 'Possible duplicate']);
            foreach ($leads as $l) {
                $c = $contacts[$l->id] ?? [];
                fputcsv($out, array_map($cell, [
                    $l->id, $l->received_at?->timezone($tz)->format('Y-m-d H:i'), $l->sourceLabel(), $l->stageLabel(),
                    EnquiryLead::LOST_REASONS[$l->lost_reason] ?? '', $l->priority, $admins[(int) $l->assigned_to] ?? '',
                    $l->class_label, EnquiryLead::CLASS_BANDS[$l->class_band] ?? '', implode(', ', $l->subjectList()), $l->board,
                    EnquiryLead::EXAM_GOALS[$l->exam_goal] ?? '', $l->city, $l->zone, $l->area, $l->mode, $l->tutor_gender, $l->budget,
                    $l->preferred_time, $l->start_by, $c['name'] ?? '', $c['phone'] ?? '', $c['email'] ?? '', $l->page_url, $l->utm, $l->wa_ref,
                    $l->next_follow_up_at?->timezone($tz)->format('Y-m-d H:i'), $l->demo_at?->timezone($tz)->format('Y-m-d H:i'),
                    trim((string) $l->tags, ','), $l->followup_note, $l->possible_duplicate ? 'yes' : '',
                ]));
            }
            fclose($out);
        }, 'enquiries-' . EnquiryQuery::now()->format('Y-m-d-His') . '.csv', [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Cache-Control' => 'no-store, private',
        ]);
    }
}
