@extends('super.layouts.app')
@section('title', 'Category Management')

@section('content')
<h3 class="mb-3">Category Management</h3>

<div class="card border-0 shadow-sm">
  <div class="card-body">
    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
      <h5 class="card-title mb-0">Category List</h5>
      <a href="{{ route('super.category.create') }}" class="btn btn-dark">Add Category</a>
    </div>

    <!-- Table with stripped rows -->
    <div class="table-responsive">
      <table  class="table table-striped datatable w-100">
        <thead>
          <tr>
            <th style="width: 10px">S.no.</th>
            <th>Title</th>
            <th>Parent Category</th>
            <th>Child Category</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @php $i=1; @endphp
          @forelse ($category as $row)
          <tr class="align-middle">
            <td>{{ $i }}</td>
            <td>{{ Str::limit($row->cat_title, 30) }}</td>
            <td>
              @if($row->parentCategory)  
                {{ Str::limit($row->parentCategory->cat_title, 25) }}
              @else
                <span class="text-muted">No Parent</span>
              @endif
            </td>
            <td>
              @if($row->childCategory)  
                {{ Str::limit($row->childCategory->cat_title, 25) }}
              @else
                <span class="text-muted">No Child</span>
              @endif
            </td>
            <td>
              <span class="badge {{ $row->status=='t' ? 'bg-success' : 'bg-warning' }}">
                {{ $row->status=='t' ? 'Active' : 'Pending' }}
              </span>
            </td>
            <td>
              <div class="btn-group" role="group">
                <a href="{{ route('super.category.edit', $row->id) }}" 
                   class="btn btn-sm btn-outline-primary" 
                   title="Edit">
                  <i class="bi bi-pencil"></i>
                </a>
                <form action="{{ route('super.category.destroy', $row->id) }}" 
                      method="POST" 
                      style="display: inline;" 
                      onsubmit="return confirm('Are you sure to delete this category?')">
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
            <td colspan="6" class="text-center py-4">No categories found</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
