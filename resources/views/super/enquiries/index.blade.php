@extends('super.layouts.app')
@section('title', 'Enquiries')

@use('App\Models\EnquiryLead')
@use('App\Services\Enquiries\EnquiryQuery')
@php
  $tz = EnquiryQuery::tz();
  $qs = request()->query();
  unset($qs['page']);
  $link = function (array $change) use ($qs) {
      $q = array_filter(array_merge($qs, $change), fn ($v) => $v !== null && $v !== '');
      return route('super.enquiries.index', $q);
  };
  $tab = $f['tab'] ?? null;
  $sel = fn ($key, $value) => (string) ($f[$key] ?? '') === (string) $value ? 'selected' : '';
  $stageBadge = [
      'new' => 'bg-primary', 'contacted' => 'bg-info text-dark', 'requirement_confirmed' => 'bg-info text-dark',
      'shortlisted' => 'bg-secondary', 'demo_scheduled' => 'bg-warning text-dark', 'demo_done' => 'bg-warning text-dark',
      'converted' => 'bg-success', 'lost' => 'bg-dark',
  ];
  $prioBadge = ['hot' => 'bg-danger', 'warm' => 'bg-warning text-dark', 'cold' => 'bg-light text-dark border'];
@endphp

@push('scripts')
<style>
  .enq-kpi .card-body{padding:.75rem 1rem}
  .enq-kpi .num{font-size:1.5rem;font-weight:700;line-height:1.2}
  .enq-chart{min-width:0}
  .enq-bar{display:grid;grid-template-columns:minmax(80px,40%) 1fr 2.5rem;gap:.5rem;align-items:center;font-size:.8rem;margin-bottom:.25rem}
  .enq-bar__track{background:#eef1f6;border-radius:4px;height:.6rem;overflow:hidden}
  .enq-bar__fill{display:block;height:100%;background:#4f46e5;border-radius:4px}
  .enq-bar__n{text-align:right;font-variant-numeric:tabular-nums}
  .enq-days{display:flex;align-items:flex-end;gap:2px;height:80px}
  .enq-days span{flex:1;background:#4f46e5;border-radius:2px 2px 0 0;min-height:1px}
  .enq-table td,.enq-table th{font-size:.82rem;vertical-align:top}
  .enq-table .inline-form select,.enq-table .inline-form input{font-size:.78rem;padding:.15rem .35rem}
  .enq-board{display:flex;gap:.75rem;overflow-x:auto;padding-bottom:.5rem}
  .enq-col{flex:0 0 250px;background:#f1f3f7;border-radius:8px;padding:.5rem}
  .enq-card{background:#fff;border-radius:6px;padding:.5rem;margin-bottom:.5rem;font-size:.8rem;box-shadow:0 1px 2px rgba(0,0,0,.06)}
  .enq-dup{color:#b45309;font-weight:600}
  @media (max-width: 767px){ .enq-hide-sm{display:none} }
</style>
@endpush

@section('content')
<div class="container-fluid px-0">
  <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center mb-3">
    <div class="d-flex flex-wrap align-items-center gap-2">
      <h3 class="mb-0">Enquiries</h3>
      <span class="badge bg-primary" title="Received today (IST)">Today: {{ $todayCount }}</span>
      <a class="badge bg-warning text-dark text-decoration-none" href="{{ route('super.enquiries.index', ['stage' => 'new', 'range' => 'all']) }}">New: {{ $newCount }}</a>
    </div>
    <div class="d-flex flex-wrap gap-2">
      <div class="btn-group btn-group-sm" role="group" aria-label="View">
        <a class="btn {{ $view === 'table' ? 'btn-dark' : 'btn-outline-dark' }}" href="{{ $link(['view' => null]) }}">Table</a>
        <a class="btn {{ $view === 'board' ? 'btn-dark' : 'btn-outline-dark' }}" href="{{ $link(['view' => 'board']) }}">Board</a>
      </div>
      <a class="btn btn-sm btn-outline-secondary" href="{{ route('super.enquiries.export', array_diff_key($qs, ['view' => 1])) }}">Export CSV</a>
    </div>
  </div>

  {{-- Quick tabs --}}
  <ul class="nav nav-pills flex-wrap gap-1 mb-3 small">
    <li class="nav-item"><a class="nav-link py-1 {{ $tab ? '' : 'active' }}" href="{{ $link(['tab' => null]) }}">All</a></li>
    @foreach(EnquiryQuery::TABS as $key => $label)
      <li class="nav-item"><a class="nav-link py-1 {{ $tab === $key ? 'active' : '' }}" href="{{ $link(['tab' => $key, 'range' => null]) }}">{{ $label }}</a></li>
    @endforeach
  </ul>

  {{-- Search: posted, kept in the session, never in the URL. --}}
  <form method="POST" action="{{ route('super.enquiries.search') }}" class="d-flex flex-wrap gap-2 mb-2" role="search">
    @csrf
    <input type="hidden" name="qs" value="{{ http_build_query($qs) }}">
    <label class="visually-hidden" for="enq-q">Search by name, phone or email</label>
    <input id="enq-q" name="q" value="{{ $search }}" class="form-control form-control-sm" style="max-width:320px" placeholder="Search name, phone or email" autocomplete="off">
    <button class="btn btn-sm btn-primary">Search</button>
    @if($search !== '')
      <button class="btn btn-sm btn-outline-secondary" name="q" value="">Clear search</button>
      <span class="small text-muted align-self-center">Showing matches for your search.</span>
    @endif
  </form>

  {{-- Filters --}}
  <details class="card border-0 shadow-sm mb-3" {{ count(array_diff_key($f, ['range' => 1, 'tab' => 1, 'sort' => 1, 'per' => 1])) ? 'open' : '' }}>
    <summary class="card-header bg-white small fw-semibold" style="cursor:pointer">Filters &amp; sort</summary>
    <div class="card-body">
      <form method="GET" action="{{ route('super.enquiries.index') }}" class="row g-2 small">
        @if($tab)<input type="hidden" name="tab" value="{{ $tab }}">@endif
        @if($view === 'board')<input type="hidden" name="view" value="board">@endif
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-range">Received</label>
          <select id="f-range" name="range" class="form-select form-select-sm">
            @foreach(EnquiryQuery::RANGES as $k => $v)<option value="{{ $k }}" {{ $sel('range', $k) }}>{{ $v }}</option>@endforeach
          </select>
        </div>
        <div class="col-6 col-md-2"><label class="form-label mb-0" for="f-from">From (custom)</label><input id="f-from" type="date" name="from" value="{{ $f['from'] ?? '' }}" class="form-control form-control-sm"></div>
        <div class="col-6 col-md-2"><label class="form-label mb-0" for="f-to">To (custom)</label><input id="f-to" type="date" name="to" value="{{ $f['to'] ?? '' }}" class="form-control form-control-sm"></div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-source">Source</label>
          <select id="f-source" name="source" class="form-select form-select-sm"><option value="">Any</option>
            @foreach(EnquiryLead::SOURCES as $k => $v)<option value="{{ $k }}" {{ $sel('source', $k) }}>{{ $v }}</option>@endforeach
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-stage">Stage</label>
          <select id="f-stage" name="stage" class="form-select form-select-sm"><option value="">Any</option>
            @foreach(EnquiryLead::STAGES as $k => $v)<option value="{{ $k }}" {{ $sel('stage', $k) }}>{{ $v }}</option>@endforeach
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-priority">Priority</label>
          <select id="f-priority" name="priority" class="form-select form-select-sm"><option value="">Any</option>
            @foreach(EnquiryLead::PRIORITIES as $k => $v)<option value="{{ $k }}" {{ $sel('priority', $k) }}>{{ $v }}</option>@endforeach
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-assigned">Assigned to</label>
          <select id="f-assigned" name="assigned" class="form-select form-select-sm"><option value="">Anyone</option><option value="none" {{ $sel('assigned', 'none') }}>Unassigned</option>
            @foreach($admins as $id => $name)<option value="{{ $id }}" {{ $sel('assigned', $id) }}>{{ $name }}</option>@endforeach
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-city">City</label>
          <select id="f-city" name="city" class="form-select form-select-sm"><option value="">Any</option>
            @foreach($options['cities'] as $c)<option value="{{ $c }}" {{ $sel('city', $c) }}>{{ $c }}</option>@endforeach
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-zone">Zone</label>
          <select id="f-zone" name="zone" class="form-select form-select-sm"><option value="">Any</option>
            @foreach($options['zones'] as $z)<option value="{{ $z }}" {{ $sel('zone', $z) }}>{{ $z }}</option>@endforeach
          </select>
        </div>
        <div class="col-6 col-md-2"><label class="form-label mb-0" for="f-area">Area contains</label><input id="f-area" name="area" value="{{ $f['area'] ?? '' }}" class="form-control form-control-sm"></div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-band">Class band</label>
          <select id="f-band" name="band" class="form-select form-select-sm"><option value="">Any</option>
            @foreach(EnquiryLead::CLASS_BANDS as $k => $v)<option value="{{ $k }}" {{ $sel('band', $k) }}>{{ $v }}</option>@endforeach
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-subject">Subject</label>
          <select id="f-subject" name="subject" class="form-select form-select-sm"><option value="">Any</option>
            @foreach($options['subjects'] as $s)<option value="{{ $s }}" {{ $sel('subject', $s) }}>{{ $s }}</option>@endforeach
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-board">Board</label>
          <select id="f-board" name="board" class="form-select form-select-sm"><option value="">Any</option>
            @foreach($options['boards'] as $b)<option value="{{ $b }}" {{ $sel('board', $b) }}>{{ $b }}</option>@endforeach
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-exam">Exam goal</label>
          <select id="f-exam" name="exam" class="form-select form-select-sm"><option value="">Any</option>
            @foreach(EnquiryLead::EXAM_GOALS as $k => $v)<option value="{{ $k }}" {{ $sel('exam', $k) }}>{{ $v }}</option>@endforeach
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-mode">Mode</label>
          <select id="f-mode" name="mode" class="form-select form-select-sm"><option value="">Any</option>
            @foreach(EnquiryLead::MODES as $k => $v)<option value="{{ $k }}" {{ $sel('mode', $k) }}>{{ $v }}</option>@endforeach
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-gender">Tutor gender wanted</label>
          <select id="f-gender" name="gender" class="form-select form-select-sm"><option value="">Any</option>
            <option value="female" {{ $sel('gender', 'female') }}>Female</option><option value="male" {{ $sel('gender', 'male') }}>Male</option>
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-outcome">Outcome</label>
          <select id="f-outcome" name="outcome" class="form-select form-select-sm"><option value="">Any</option>
            <option value="converted" {{ $sel('outcome', 'converted') }}>Converted</option><option value="lost" {{ $sel('outcome', 'lost') }}>Lost</option>
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-lost">Lost reason</label>
          <select id="f-lost" name="lost_reason" class="form-select form-select-sm"><option value="">Any</option>
            @foreach(EnquiryLead::LOST_REASONS as $k => $v)<option value="{{ $k }}" {{ $sel('lost_reason', $k) }}>{{ $v }}</option>@endforeach
          </select>
        </div>
        <div class="col-6 col-md-2"><label class="form-label mb-0" for="f-page">Page / URL contains</label><input id="f-page" name="page" value="{{ $f['page'] ?? '' }}" class="form-control form-control-sm"></div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-tag">Tag</label>
          <select id="f-tag" name="tag" class="form-select form-select-sm"><option value="">Any</option>
            @foreach($options['tags'] as $t)<option value="{{ $t }}" {{ $sel('tag', $t) }}>{{ $t }}</option>@endforeach
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-sort">Sort</label>
          <select id="f-sort" name="sort" class="form-select form-select-sm">
            @foreach(EnquiryQuery::SORTS as $k => $v)<option value="{{ $k }}" {{ $sel('sort', $k) }}>{{ $v }}</option>@endforeach
          </select>
        </div>
        <div class="col-6 col-md-2">
          <label class="form-label mb-0" for="f-per">Per page</label>
          <select id="f-per" name="per" class="form-select form-select-sm">
            @foreach([25, 50, 100] as $n)<option value="{{ $n }}" {{ $per === $n ? 'selected' : '' }}>{{ $n }}</option>@endforeach
          </select>
        </div>
        <div class="col-12 d-flex flex-wrap gap-3 align-items-center">
          <label class="form-check-label"><input class="form-check-input" type="checkbox" name="overdue" value="1" {{ !empty($f['overdue']) ? 'checked' : '' }}> Overdue follow-ups</label>
          <label class="form-check-label"><input class="form-check-input" type="checkbox" name="dup" value="1" {{ !empty($f['dup']) ? 'checked' : '' }}> Possible duplicates</label>
          <label class="form-check-label"><input class="form-check-input" type="checkbox" name="has_demo" value="1" {{ !empty($f['has_demo']) ? 'checked' : '' }}> Has a demo</label>
          <button class="btn btn-sm btn-primary">Apply</button>
          <a class="btn btn-sm btn-outline-secondary" href="{{ route('super.enquiries.index', $view === 'board' ? ['view' => 'board'] : []) }}">Reset</a>
        </div>
      </form>
    </div>
  </details>

  {{-- KPIs for the chosen range and filters --}}
  <div class="row g-2 mb-3 enq-kpi">
    @foreach([
      ['Enquiries', $kpis['total']], ['New', $kpis['new']], ['Contacted', $kpis['contacted_pct'] . '%'],
      ['Demo scheduled', $kpis['demo_pct'] . '%'], ['Converted', $kpis['converted_pct'] . '%'],
      ['Median first response', $kpis['median_first_response'] ?? '—'], ['Overdue follow-ups', $kpis['overdue']],
    ] as [$label, $value])
      <div class="col-6 col-md-3 col-xl">
        <div class="card border-0 shadow-sm h-100"><div class="card-body"><div class="text-muted small">{{ $label }}</div><div class="num">{{ $value }}</div></div></div>
      </div>
    @endforeach
  </div>

  {{-- Needs action now --}}
  @php($na = $action)
  @if($na['unassigned']->count() || $na['overdue']->count() || $na['demos_today']->count())
    <div class="card border-warning mb-3">
      <div class="card-header bg-warning-subtle small fw-semibold">Needs action now</div>
      <div class="card-body row g-3 small">
        <div class="col-md-4">
          <div class="fw-semibold">Unassigned for over {{ $na['hours'] }} h ({{ $na['unassigned']->count() }}{{ $na['unassigned']->count() >= 10 ? '+' : '' }})</div>
          @foreach($na['unassigned'] as $l)<div><a href="{{ route('super.enquiries.show', $l) }}">#{{ $l->id }}</a> {{ $l->class_label }} {{ $l->subjectList()[0] ?? '' }} · {{ $l->city }} · {{ $l->received_at?->timezone($tz)->format('d M, g:i A') }}</div>@endforeach
        </div>
        <div class="col-md-4">
          <div class="fw-semibold">Overdue follow-ups ({{ $na['overdue']->count() }}{{ $na['overdue']->count() >= 10 ? '+' : '' }})</div>
          @foreach($na['overdue'] as $l)<div><a href="{{ route('super.enquiries.show', $l) }}">#{{ $l->id }}</a> due {{ $l->next_follow_up_at?->timezone($tz)->format('d M, g:i A') }} · {{ $admins[(int) $l->assigned_to] ?? 'unassigned' }}</div>@endforeach
        </div>
        <div class="col-md-4">
          <div class="fw-semibold">Demos today ({{ $na['demos_today']->count() }})</div>
          @foreach($na['demos_today'] as $l)<div><a href="{{ route('super.enquiries.show', $l) }}">#{{ $l->id }}</a> {{ $l->demo_at?->timezone($tz)->format('g:i A') }} · {{ $l->subjectList()[0] ?? '' }} · {{ $l->city }}</div>@endforeach
        </div>
      </div>
    </div>
  @endif

  {{-- Breakdowns --}}
  <details class="card border-0 shadow-sm mb-3">
    <summary class="card-header bg-white small fw-semibold" style="cursor:pointer">Breakdowns (source, city, subject, class, funnel, last 30 days)</summary>
    <div class="card-body">
      <div class="row g-4">
        <div class="col-md-4">@include('super.enquiries._bars', ['title' => 'By source', 'data' => $charts['source']])</div>
        <div class="col-md-4">@include('super.enquiries._bars', ['title' => 'By city (top 10)', 'data' => $charts['city']])</div>
        <div class="col-md-4">@include('super.enquiries._bars', ['title' => 'By subject (top 10)', 'data' => $charts['subject']])</div>
        <div class="col-md-4">@include('super.enquiries._bars', ['title' => 'By class band', 'data' => $charts['band']])</div>
        <div class="col-md-4">@include('super.enquiries._bars', ['title' => 'Stage funnel', 'data' => $charts['funnel']])</div>
        <div class="col-md-4">
          <div class="fw-semibold small mb-2">By day, last 30 days (all enquiries)</div>
          @php($dmax = max(1, ...array_values($charts['days'])))
          <div class="enq-days" role="img" aria-label="Enquiries per day for the last 30 days">
            @foreach($charts['days'] as $d => $n)<span style="height: {{ max(1, round($n * 100 / $dmax)) }}%" title="{{ \Carbon\Carbon::parse($d)->format('d M') }}: {{ $n }}"></span>@endforeach
          </div>
          <div class="d-flex justify-content-between small text-muted"><span>{{ \Carbon\Carbon::parse(array_key_first($charts['days']))->format('d M') }}</span><span>Today</span></div>
        </div>
      </div>
    </div>
  </details>

  @if($view === 'board')
    <div class="enq-board" aria-label="Enquiries by stage">
      @foreach($board as $key => $col)
        <section class="enq-col" aria-labelledby="col-{{ $key }}">
          <div class="d-flex justify-content-between mb-2"><h6 id="col-{{ $key }}" class="mb-0 small fw-bold">{{ $col['label'] }}</h6><span class="badge bg-secondary">{{ $col['count'] }}</span></div>
          @forelse($col['items'] as $l)
            @php($c = $contacts[$l->id] ?? [])
            <div class="enq-card">
              <div class="d-flex justify-content-between">
                <a href="{{ route('super.enquiries.show', $l) }}" class="fw-semibold text-decoration-none">{{ $c['name'] ?? 'Enquiry #' . $l->id }}</a>
                @if($l->priority)<span class="badge {{ $prioBadge[$l->priority] ?? 'bg-light' }}">{{ ucfirst($l->priority) }}</span>@endif
              </div>
              <div>{{ $l->class_label }} {{ implode(', ', array_slice($l->subjectList(), 0, 2)) }}</div>
              <div class="text-muted">{{ $l->city }}{{ $l->area ? ' · ' . $l->area : '' }} · {{ $l->received_at?->timezone($tz)->format('d M') }}</div>
              @if($l->possible_duplicate)<div class="enq-dup">Possible duplicate</div>@endif
              <form method="POST" action="{{ route('super.enquiries.update', $l) }}" class="d-flex gap-1 mt-1">
                @csrf <input type="hidden" name="return" value="list">
                <label class="visually-hidden" for="mv-{{ $l->id }}">Move enquiry {{ $l->id }} to stage</label>
                <select id="mv-{{ $l->id }}" name="stage" class="form-select form-select-sm">
                  @foreach(EnquiryLead::STAGES as $k => $v)<option value="{{ $k }}" {{ $l->stage() === $k ? 'selected' : '' }}>{{ $v }}</option>@endforeach
                </select>
                <button class="btn btn-sm btn-outline-primary">Move</button>
              </form>
            </div>
          @empty
            <div class="text-muted small">None</div>
          @endforelse
          @if($col['count'] > count($col['items']))<a class="small" href="{{ $link(['view' => null, 'stage' => $key]) }}">All {{ $col['count'] }} →</a>@endif
        </section>
      @endforeach
    </div>
  @else
    {{-- Bulk actions: the checkboxes below belong to this form (form="enq-bulk"). --}}
    <form id="enq-bulk" method="POST" action="{{ route('super.enquiries.bulk') }}" class="d-flex flex-wrap gap-2 align-items-center mb-2 small">
      @csrf
      <input type="hidden" name="qs" value="{{ http_build_query(request()->query()) }}">
      <label for="bulk-action" class="fw-semibold">With selected:</label>
      <select id="bulk-action" name="action" class="form-select form-select-sm" style="width:auto">
        <option value="assign">Assign to…</option><option value="stage">Change stage to…</option><option value="priority">Set priority…</option>
        <option value="tag">Add tag…</option><option value="duplicate">Mark duplicate</option><option value="spam">Mark spam</option><option value="export">Export CSV</option>
      </select>
      <label for="bulk-value" class="visually-hidden">Value</label>
      <select id="bulk-value" name="value" class="form-select form-select-sm" style="width:auto">
        <optgroup label="Assign to"><option value="none">Nobody</option>@foreach($admins as $id => $name)<option value="{{ $id }}">{{ $name }}</option>@endforeach</optgroup>
        <optgroup label="Stage">@foreach(EnquiryLead::STAGES as $k => $v)<option value="{{ $k }}">{{ $v }}</option>@endforeach</optgroup>
        <optgroup label="Priority">@foreach(EnquiryLead::PRIORITIES as $k => $v)<option value="{{ $k }}">{{ $v }}</option>@endforeach</optgroup>
      </select>
      <label for="bulk-tag" class="visually-hidden">Tag</label>
      <input id="bulk-tag" name="tag_value" class="form-control form-control-sm" style="width:150px" placeholder="Tag (for Add tag)" maxlength="30">
      <button class="btn btn-sm btn-dark">Apply</button>
    </form>

    <div class="table-responsive bg-white shadow-sm rounded">
      <table class="table table-sm table-hover align-top mb-0 enq-table">
        <thead class="table-light">
          <tr>
            <th scope="col"><input type="checkbox" aria-label="Select all on this page" onclick="document.querySelectorAll('.enq-pick').forEach(c => c.checked = this.checked)"></th>
            <th scope="col">Received (IST)</th><th scope="col">Source</th><th scope="col">Class</th><th scope="col">Subject(s)</th><th scope="col">Board</th>
            <th scope="col">City · area</th><th scope="col">Mode</th><th scope="col">Parent</th><th scope="col">Phone · email</th>
            <th scope="col">Status · note</th><th scope="col" class="enq-hide-sm">Assigned</th><th scope="col" class="enq-hide-sm">Follow-up</th>
          </tr>
        </thead>
        <tbody>
          @forelse($leads as $l)
            @php($c = $contacts[$l->id] ?? [])
            <tr>
              <td><input type="checkbox" class="enq-pick" form="enq-bulk" name="ids[]" value="{{ $l->id }}" aria-label="Select enquiry {{ $l->id }}"></td>
              <td class="text-nowrap"><a href="{{ route('super.enquiries.show', $l) }}">#{{ $l->id }}</a><br>{{ $l->received_at?->timezone($tz)->format('d M Y') }}<br><span class="text-muted">{{ $l->received_at?->timezone($tz)->format('g:i A') }}</span></td>
              <td>{{ $l->sourceLabel() }}@if($l->wa_ref)<br><code>{{ $l->wa_ref }}</code>@endif @if($l->possible_duplicate)<br><span class="enq-dup">Possible duplicate</span>@endif</td>
              <td>{{ $l->class_label ?: (EnquiryLead::CLASS_BANDS[$l->class_band] ?? '—') }}@if($l->exam_goal)<br><span class="text-muted">{{ EnquiryLead::EXAM_GOALS[$l->exam_goal] ?? '' }}</span>@endif</td>
              <td>{{ $l->subjectList() ? implode(', ', $l->subjectList()) : '—' }}</td>
              <td>{{ $l->board ?? '—' }}</td>
              <td>{{ $l->city ?? '—' }}@if($l->area)<br><span class="text-muted">{{ $l->area }}</span>@endif @if($l->zone)<br><span class="text-muted small">{{ $l->zone }}</span>@endif</td>
              <td>{{ EnquiryLead::MODES[$l->mode] ?? '—' }}</td>
              <td>{{ $c['name'] ?? '—' }}</td>
              <td class="text-nowrap">
                @if(!empty($c['phone']))<a href="tel:{{ preg_replace('/[^0-9+]/', '', $c['phone']) }}">{{ $c['phone'] }}</a>@else — @endif
                @if(!empty($c['email']))<br><a href="mailto:{{ $c['email'] }}" class="small">{{ $c['email'] }}</a>@endif
              </td>
              <td style="min-width:210px">
                <span class="badge {{ $stageBadge[$l->stage()] ?? 'bg-secondary' }}">{{ $l->stageLabel() }}</span>
                @if($l->lost_reason)<span class="small text-muted">· {{ EnquiryLead::LOST_REASONS[$l->lost_reason] ?? $l->lost_reason }}</span>@endif
                @if($l->priority)<span class="badge {{ $prioBadge[$l->priority] ?? '' }}">{{ ucfirst($l->priority) }}</span>@endif
                @if($l->followup_note)<div class="small text-muted text-truncate" style="max-width:240px" title="{{ $l->followup_note }}">{{ $l->followup_note }}</div>@endif
                <form method="POST" action="{{ route('super.enquiries.update', $l) }}" class="inline-form d-flex flex-wrap gap-1 mt-1">
                  @csrf <input type="hidden" name="return" value="list">
                  <label class="visually-hidden" for="st-{{ $l->id }}">Stage for enquiry {{ $l->id }}</label>
                  <select id="st-{{ $l->id }}" name="stage" class="form-select form-select-sm" style="width:auto">
                    @foreach(EnquiryLead::STAGES as $k => $v)<option value="{{ $k }}" {{ $l->stage() === $k ? 'selected' : '' }}>{{ $v }}</option>@endforeach
                  </select>
                  <label class="visually-hidden" for="nt-{{ $l->id }}">Note for enquiry {{ $l->id }}</label>
                  <input id="nt-{{ $l->id }}" name="note" class="form-control form-control-sm" style="width:120px" placeholder="Add note">
                  <button class="btn btn-sm btn-outline-primary">Save</button>
                </form>
              </td>
              <td class="enq-hide-sm">{{ $admins[(int) $l->assigned_to] ?? '—' }}</td>
              <td class="enq-hide-sm text-nowrap">
                @if($l->next_follow_up_at)
                  <span class="{{ $l->next_follow_up_at->isPast() && in_array($l->followup_status, EnquiryQuery::OPEN, true) ? 'text-danger fw-semibold' : '' }}">{{ $l->next_follow_up_at->timezone($tz)->format('d M, g:i A') }}</span>
                @else — @endif
                @if($l->demo_at)<br><span class="small">Demo {{ $l->demo_at->timezone($tz)->format('d M, g:i A') }}</span>@endif
              </td>
            </tr>
          @empty
            <tr><td colspan="13" class="text-muted p-3">No enquiries match these filters.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>
    <div class="mt-3">{{ $leads->links('pagination::bootstrap-5') }}</div>
  @endif
</div>
@endsection
