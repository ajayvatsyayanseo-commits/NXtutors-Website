@extends('super.layouts.app')
@section('title', 'Student Management')

@section('content')
<h3 class="mb-3">Student Management</h3>

<div class="card border-0 shadow-sm">
  <div class="card-body">
    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
      <h5 class="card-title mb-0">Student List</h5>
     
    </div>

    <!-- Table with stripped rows -->
    <div class="table-responsive">
      <table id="usersTable" class="table table-striped w-100 datatable">
        <thead>
          <tr>
            <th>Sr. No.</th>
            <th>Date Of Register</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @php $i=1; @endphp
          @forelse ($pages as $row)
          <tr>
            <td>{{ $i }}</td>
            <td>{{ $row->date ? date('d M Y', strtotime($row->date)) : $row->created_at->format('d M Y') }}</td>
            <td>{{ Str::limit($row->name, 20) }}</td>
            <td>{{ Str::limit($row->email, 25) }}</td>
            <td>{{ $row->phone ?? 'N/A' }}</td>
            <td>
              <span class="badge {{ $row->status=='t' ? 'bg-success' : 'bg-warning' }}">
                {{ $row->status=='t' ? 'Active' : 'Pending' }}
              </span>
            </td>
            <td>
              <div class="btn-group" role="group">
                <a href="{{ route('super.user.edit', $row->id) }}" 
                   class="btn btn-sm btn-outline-primary" 
                   title="Edit">
                  <i class="bi bi-pencil"></i>
                </a>
                <form action="{{ route('super.user.destroy', $row->id) }}" 
                      method="POST" 
                      style="display: inline;" 
                      onsubmit="return confirm('Are you sure to delete this user?')">
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
            <td colspan="7" class="text-center py-4">No users found</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
