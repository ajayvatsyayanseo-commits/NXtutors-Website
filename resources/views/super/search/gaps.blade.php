@extends('super.layouts.app')
@section('title', 'Search & tutor gaps')

@section('content')
<div class="container-fluid py-3">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="mb-0">Search &amp; tutor gaps</h3>
    <div>
      @foreach([7, 30, 90] as $d)
        <a class="btn btn-sm {{ $days === $d ? 'btn-primary' : 'btn-outline-secondary' }}" href="?days={{ $d }}">{{ $d }} days</a>
      @endforeach
    </div>
  </div>

  <div class="row g-3 mb-4">
    @foreach(['searches' => 'Searches', 'zero' => 'No match', 'picks' => 'Suggestions picked', 'demos' => 'Demo requests after a search'] as $k => $label)
      <div class="col-6 col-md-3"><div class="card"><div class="card-body">
        <div class="text-muted small">{{ $label }}</div>
        <div class="h4 mb-0">{{ number_format($totals[$k]) }}</div>
      </div></div></div>
    @endforeach
  </div>

  <div class="card mb-4"><div class="card-body">
    <h5>Tutor gaps: searches with no matching tutor</h5>
    <p class="text-muted small">Recruit for these first. "What" is the subject we understood, or the words typed.</p>
    <table class="table table-sm">
      <thead><tr><th>What</th><th>City</th><th>Area</th><th>Mode</th><th class="text-end">Searches</th></tr></thead>
      <tbody>
        @forelse($gaps as $g)
          <tr><td>{{ $g->what }}</td><td>{{ $g->city }}</td><td>{{ $g->area }}</td><td>{{ $g->mode ?: 'either' }}</td><td class="text-end">{{ $g->n }}</td></tr>
        @empty
          <tr><td colspan="5" class="text-muted">Nothing yet.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h5>Home-tutor gaps by area (fewer than 3 home tutors found)</h5>
    <table class="table table-sm">
      <thead><tr><th>Subject</th><th>Area</th><th>City</th><th class="text-end">Best result</th><th class="text-end">Searches</th></tr></thead>
      <tbody>
        @forelse($homeGaps as $g)
          <tr><td>{{ $g->subject }}</td><td>{{ $g->area }}</td><td>{{ $g->city }}</td><td class="text-end">{{ $g->best }}</td><td class="text-end">{{ $g->n }}</td></tr>
        @empty
          <tr><td colspan="5" class="text-muted">Nothing yet.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div></div>

  <div class="row g-3">
    <div class="col-md-7"><div class="card"><div class="card-body">
      <h5>Most searched</h5>
      <table class="table table-sm">
        <thead><tr><th>Subject</th><th>City</th><th class="text-end">Searches</th><th class="text-end">Avg tutors found</th></tr></thead>
        <tbody>
          @forelse($top as $t)
            <tr><td>{{ $t->subject }}</td><td>{{ $t->city }}</td><td class="text-end">{{ $t->n }}</td><td class="text-end">{{ $t->avg_results }}</td></tr>
          @empty
            <tr><td colspan="4" class="text-muted">Nothing yet.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div></div></div>
    <div class="col-md-5"><div class="card"><div class="card-body">
      <h5>Suggestions parents pick</h5>
      <table class="table table-sm">
        <tbody>
          @forelse($picks as $p)
            <tr><td>{{ $p->pick }}</td><td class="text-end">{{ $p->n }}</td></tr>
          @empty
            <tr><td class="text-muted">Nothing yet.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div></div></div>
  </div>
</div>
@endsection
