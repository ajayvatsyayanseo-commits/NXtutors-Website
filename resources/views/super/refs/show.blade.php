@extends('super.layouts.app')
@section('title', 'Ref '.$h->code)

@section('content')
<div class="container-fluid py-3">
  <a href="{{ route('super.refs.index') }}" class="small">← All Refs</a>
  <h3 class="mt-2">Ref <code>{{ $h->code }}</code></h3>
  <p class="text-muted">
    {{ ucfirst(str_replace('_', ' ', $ctx['kind'])) }} · intent: {{ str_replace('_', ' ', $ctx['intent']) }} ·
    {{ $h->created_at?->format('d M Y, H:i') }} · expires {{ $h->expires_at?->format('d M Y') }} ·
    {{ $h->fetch_count ? 'read by Lead Intake '.$h->fetch_count.'×' : 'not yet read by Lead Intake' }}
  </p>

  <div class="row g-3">
    <div class="col-md-6"><div class="card"><div class="card-body">
      <h5>Page</h5>
      @if($ctx['source']['url'])
        <p class="mb-1"><a href="{{ $ctx['source']['url'] }}" target="_blank" rel="noopener">{{ $ctx['source']['url'] }}</a></p>
      @endif
      <p class="small text-muted mb-1">{{ $ctx['source']['page_type'] ?? '—' }} {{ $ctx['source']['page_title'] ? '· '.$ctx['source']['page_title'] : '' }}</p>
      @foreach((array) $ctx['source']['utm'] as $k => $v)
        <span class="badge bg-light text-dark">{{ $k }}: {{ $v }}</span>
      @endforeach

      <h5 class="mt-3">What the parent already told us</h5>
      @php $known = array_filter($ctx['known'], fn ($v) => $v !== null && $v !== []); @endphp
      @forelse($known as $k => $v)
        <div><b>{{ str_replace('_', ' ', $k) }}:</b> {{ is_array($v) ? implode(', ', $v) : $v }}</div>
      @empty
        <div class="text-muted">Nothing yet.</div>
      @endforelse
    </div></div></div>

    <div class="col-md-6"><div class="card"><div class="card-body">
      <h5>Tutors</h5>
      @forelse($ctx['tutors'] as $t)
        <div class="mb-2">
          <b>{{ $t['name'] }}</b>
          <span class="badge {{ $t['role'] === 'primary' ? 'bg-success' : 'bg-secondary' }}">{{ $t['role'] }}</span>
          @if($t['is_sample'])<span class="badge bg-warning text-dark">sample profile</span>@endif
          <div class="small">ID {{ $t['tutor_id'] }} · {{ implode(', ', $t['subjects']) }} · {{ implode(', ', $t['boards']) }} · {{ $t['area'] }} {{ $t['city'] }} · {{ $t['fee_label'] ?? 'fee not set' }}</div>
          @if($t['profile_url'])<a class="small" href="{{ $t['profile_url'] }}" target="_blank" rel="noopener">Profile</a>@endif
        </div>
      @empty
        <div class="text-muted">No tutor on this Ref.</div>
      @endforelse

      @if($ctx['compare'])
        <h5 class="mt-3">Comparison</h5>
        <div class="small">Ranked: {{ implode(' → ', $ctx['compare']['ranked_tutor_ids'] ?? []) }}</div>
      @endif

      @if($ctx['chat'])
        <h5 class="mt-3">AI chat</h5>
        <div class="small text-muted">{{ $ctx['chat']['user_turns'] }} questions</div>
        <div style="white-space:pre-wrap">{{ $ctx['chat']['summary'] }}</div>
      @endif
    </div></div></div>
  </div>
</div>
@endsection
