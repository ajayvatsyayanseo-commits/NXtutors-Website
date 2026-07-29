@extends('super.layouts.app')
@section('title', 'Update Category')

@section('content')
<h3 class="mb-3">Category Update</h3>

<div class="card border-0 shadow-sm">
  <div class="card-body">
    @if($errors->any())
      <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('super.category.update', $data->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Category Title</label>
          <input type="text" name="cat_title" class="form-control" value="{{ old('cat_title', $data->cat_title) }}" required>
          @error('cat_title')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Parent Category</label>
          <select name="pid" id="pid" class="form-select">
            <option value="0">Select Parent</option>
            @foreach($categories as $row)
              <option value="{{ $row->id }}" {{ old('pid', $data->pid) == $row->id ? 'selected' : '' }}>
                {{ $row->cat_title }}
              </option>
            @endforeach
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Child Category</label>
          <select name="cid" id="cid" class="form-select">
            <option value="0">Select Child</option>
            @foreach($parentcategories as $rows)
              <option value="{{ $rows->id }}" {{ old('cid', $data->cid) == $rows->id ? 'selected' : '' }}>
                {{ $rows->cat_title }}
              </option>
            @endforeach
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Category Image</label>
          <input type="file" name="avatar" id="avatar" class="form-control">
          @if($data->avatar)
            <div class="current-image mt-2">
              <small class="text-muted">Current Image:</small><br>
              <img src="{{ asset('storage/category/' . $data->avatar) }}" 
                   class="rounded" 
                   style="max-width: 100px; height: 100px; object-fit: cover;">
            </div>
          @endif
          <img id="imagePreview" class="img-preview mt-2" 
               style="max-width: 100px; height: 100px; display: none; object-fit: cover;" 
               alt="Image Preview">
          <small class="text-muted mt-1 d-block">Leave empty to keep current image</small>
          @error('avatar')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Meta Title</label>
          <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $data->meta_title) }}">
          @error('meta_title')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Meta Description</label>
          <textarea name="meta_desc" class="form-control" rows="3">{{ old('meta_desc', $data->meta_desc) }}</textarea>
          @error('meta_desc')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Status</label>
          <select name="status" class="form-select" required>
            <option value="">Select</option>
            <option value="t" {{ old('status', $data->status) == 't' ? 'selected' : '' }}>Active</option>
            <option value="f" {{ old('status', $data->status) == 'f' ? 'selected' : '' }}>Pending</option>
          </select>
          @error('status')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="mt-3">
        <button type="submit" class="btn btn-dark">Update</button>
        <a href="{{ route('super.category.index') }}" class="btn btn-outline-secondary">Back</a>
      </div>
    </form>
  </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    // Image Preview
    $('#avatar').on('change', function() {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result).show();
            }
            reader.readAsDataURL(file);
        } else {
            $('#imagePreview').hide().attr('src', '');
        }
    });

    // Child Category AJAX - Load initial child categories based on parent
    var initialParentId = $('#pid').val();
    if (initialParentId != "0") {
        $.ajax({
            url: '{{ url("/super/category/get-child-categories") }}/' + initialParentId,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#cid').empty().append('<option value="0">Select Child</option>');
                $.each(data.child_categories, function(index, category) {
                    $('#cid').append('<option value="' + category.id + '">' + category.cat_title + '</option>');
                });
            }
        });
    }

    // Listen to changes in Parent Category dropdown
    $('#pid').change(function() {
        var parentId = $(this).val();
        $('#cid').empty().append('<option value="0">Select Child</option>');
        
        if (parentId != "0") {
            $.ajax({
                url: '{{ url("/super/category/get-child-categories") }}/' + parentId,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $.each(data.child_categories, function(index, category) {
                        $('#cid').append('<option value="' + category.id + '">' + category.cat_title + '</option>');
                    });
                }
            });
        }
    });
});
</script>
@endpush
