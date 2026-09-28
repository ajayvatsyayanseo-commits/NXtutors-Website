@extends('super.layouts.app')
@section('title', 'WhatsApp Refs')

@section('content')
<div class="container-fluid py-3">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="mb-0">WhatsApp Refs</h3>
    <form class="d-flex gap-2" onsubmit="event.preventDefault(); var c=this.code.value.trim(); if(c) location.href='{{ url('super/ref') }}/'+encodeURIComponent(c);">
      <input name="code" class="form-control form-control-sm" placeholder="NX-7K3Q2M">
      <button class="btn btn-sm btn-primary">Open</button>
    </form>
  </div>
  <p class="text-muted small">Every WhatsApp button on the site ends its message with a Ref. Open one to see what the parent was doing: the tutor, the comparison, the AI chat and the page.</p>
  <table class="table table-sm align-middle">
    <thead><tr><th>Ref</th><th>When</th><th>From</th><th>Intent</th><th>Page</th><th>Tutor</th><th class="text-end">Read by agent</th></tr></thead>
    <tbody>
      @forelse($refs as $r)
        <tr>
          <td><a href="{{ route('super.refs.show', $r->code) }}"><code>{{ $r->code }}</code></a></td>
          <td class="small">{{ $r->created_at?->format('d M, H:i') }}</td>
          <td>{{ str_replace('_', ' ', $r->kind) }}</td>
          <td>{{ str_replace('_', ' ', $r->intent) }}</td>
          <td class="small text-truncate" style="max-width:280px">{{ $r->source_url }}</td>
          <td class="small">{{ $r->primary_tutor_id }}</td>
          <td class="text-end small">{{ $r->fetch_count ? 'Yes' : '—' }}</td>
        </tr>
      @empty
        <tr><td colspan="7" class="text-muted">No Refs yet.</td></tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection
