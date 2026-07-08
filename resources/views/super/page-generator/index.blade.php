@extends('super.layouts.app')
@section('title','Generated Pages')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h3 class="mb-0">Generated Pages</h3>
  <a href="{{ route('super.pagegen.create') }}" class="btn btn-dark">+ Generate New</a>

  <a href="{{ route('super.pagegen.import.create') }}" class="btn btn-dark">+ Import Excel</a>
</div>
 

<div class="card border-0 shadow-sm">
  <div class="table-responsive">
    <table class="table table-striped mb-0 align-middle datatable">
      <thead>
        <tr>
          <th>Sr. No.</th>
          <th>Date</th>
          <th>Title</th>
          <th>Country/State/City</th>
          <th>Location</th>
          <th>Status</th>
          <th class="text-end">Action</th>
        </tr>
      </thead>
      <tbody>
        @php $i = 1; @endphp
        @forelse($pages as $p)
          <tr>
            <td>{{ $i }}</td>
            <td class="text-muted">{{ $p->created_at?->format('d M Y h:i A') }}</td>
            <td>
              <div class="fw-semibold">{{ $p->title }}</div>
              <div class="small text-muted">/{{ $p->slug }}</div>
            </td>
            <td class="small">
              {{ $p->country ?? '-' }}<br>
              {{ $p->state ?? '-' }}<br>
              <b>{{ $p->city ?? '-' }}</b>
            </td>
            <td>{{ $p->location ?? '-' }}</td>
            <td>
              <span class="badge {{ $p->status === 'published' ? 'text-bg-success' : 'text-bg-secondary' }}">
                {{ ucfirst($p->status) }}
              </span>
            </td>
            <td class="text-end">
              <a class="btn btn-sm btn-primary" target="_blank" href="{{ route('pages.show', $p->slug) }}">
                View
              </a>
              <a class="btn btn-warning"
       href="{{ route('super.pagegen.edit', $p->id) }}">
      Edit
    </a>

    {{-- Delete --}}
    <form action="{{ route('super.pagegen.destroy', $p->id) }}"
          method="POST"
          onsubmit="return confirm('Are you sure you want to delete this page?')">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger">
        Delete
      </button>
    </form>

            </td>
          </tr>
          @php $i++; @endphp
        @empty
          <tr>
            <td colspan="6" class="text-center text-muted py-4">No pages generated yet.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

@endsection
