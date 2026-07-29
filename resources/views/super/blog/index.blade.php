@extends('super.layouts.app')
@section('title', 'Blog Management')

@section('content')
<h3 class="mb-3">Blog Management</h3>

<div class="card border-0 shadow-sm">
  <div class="card-body">
    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
      <h5 class="card-title mb-0">Blog List</h5>
      <a href="{{ route('super.blog.create') }}" class="btn btn-dark">Add Blog</a>
    </div>

    <!-- Table with stripped rows -->
    <div class="table-responsive">
      <table id="blogsTable" class="table table-striped w-100">
        <thead>
          <tr>
            <th>Sr. No.</th>
            <th>Date</th>
            <th>Blog Name</th>
            <th>Post By</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @php $i=1; @endphp
          @forelse ($pages as $row)
          <tr>
            <td>{{ $i }}</td>
            <td>{{ $row->date }}</td>
            <td>{{ Str::limit($row->title, 30) }}</td>
            <td>{{ Str::limit($row->author, 20) }}</td>
            <td>
              @if($row->avatar)
                <img src="{{ asset('storage/blog/' . $row->avatar) }}" 
                     alt="Avatar" 
                     class="rounded" 
                     style="width: 50px; height: 50px; object-fit: cover;">
              @else
                <span class="text-muted">No Image</span>
              @endif
            </td>
            <td>
              <span class="badge {{ $row->status=='t' ? 'bg-success' : 'bg-warning' }}">
                {{ $row->status=='t' ? 'Active' : 'Pending' }}
              </span>
            </td>
            <td>
              <div class="btn-group" role="group">
                <a href="{{ route('super.blog.edit', $row->id) }}" 
                   class="btn btn-sm btn-outline-primary" 
                   title="Edit">
                  <i class="bi bi-pencil"></i>
                </a>
                <form action="{{ route('super.blog.destroy', $row->id) }}" 
                      method="POST" 
                      style="display: inline;" 
                      onsubmit="return confirm('Are you sure to delete this blog?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" 
                          class="btn btn-sm btn-outline-danger" 
                          title="Delete">
                    <i class="bi bi-trash"></i>
                  </button>
                </form>
              </div>
            </td>
          </tr>
          @php $i++; @endphp
          @empty
          <tr>
            <td colspan="7" class="text-center py-4">No blogs found</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
