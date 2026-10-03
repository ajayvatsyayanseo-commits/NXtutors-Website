@extends('super.layouts.app')
@section('title', 'Families')

@section('content')
<div class="container-fluid py-3">
  <div class="d-flex justify-content-between align-items-center mb-3 gap-2 flex-wrap">
    <h3 class="mb-0">Families</h3>
    <div class="d-flex gap-2">
      <form class="d-flex gap-2" method="GET" action="{{ route('super.families.index') }}">
        <input name="q" value="{{ $q }}" class="form-control form-control-sm" placeholder="Name, phone or email">
        <button class="btn btn-sm btn-outline-secondary">Search</button>
      </form>
      <a href="{{ route('super.families.create') }}" class="btn btn-sm btn-primary">Add family</a>
    </div>
  </div>
  <p class="text-muted small">Parent accounts. A parent logs in at <code>/parent/login</code> with a WhatsApp code sent to this phone, or with email and a password they set themselves. Link each child here; tutor assignment comes later.</p>

  <table class="table table-sm align-middle">
    <thead><tr><th>Parent</th><th>Phone</th><th>Email</th><th class="text-center">Children</th><th>Status</th><th>Last login</th><th></th></tr></thead>
    <tbody>
      @forelse($parents as $p)
        <tr>
          <td><a href="{{ route('super.families.edit', $p) }}">{{ $p->name }}</a></td>
          <td class="small">{{ $p->prettyPhone() }}</td>
          <td class="small">{{ $p->email ?: '—' }}</td>
          <td class="text-center">{{ $p->children_count }}</td>
          <td>
            @if($p->isActive())
              <span class="badge text-bg-success">Active</span>
            @else
              <span class="badge text-bg-secondary">Inactive</span>
            @endif
          </td>
          <td class="small">{{ $p->last_login_at?->format('d M Y, H:i') ?? 'Never' }}</td>
          <td class="text-end"><a href="{{ route('super.families.edit', $p) }}" class="btn btn-sm btn-outline-primary">Edit</a></td>
        </tr>
      @empty
        <tr><td colspan="7" class="text-muted">{{ $q !== '' ? 'No family matches that search.' : 'No families yet. Add the first one.' }}</td></tr>
      @endforelse
    </tbody>
  </table>
  <div class="mt-3">{{ $parents->links('pagination::bootstrap-5') }}</div>
</div>
@endsection
