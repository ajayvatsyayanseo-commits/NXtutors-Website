@extends('super.layouts.app')
@section('title', 'Update Blog')

@section('content')
<h3 class="mb-3">Blog Update</h3>

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

    <form action="{{ route('super.blog.update', $page->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Blog Title</label>
          <input type="text" name="title" class="form-control" value="{{ old('title', $page->title) }}" required>
          @error('title')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Post By</label>
          <input type="text" name="author" class="form-control" value="{{ old('author', $page->author) }}" required>
          @error('author')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label class="form-label">Blog Description</label>
          <textarea name="bdesc" id="editor" class="form-control" rows="5">{{ old('bdesc', $page->bdesc) }}</textarea>
          @error('bdesc')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Blog Image</label>
          <input type="file" name="avatar" id="avatar" class="form-control">
          @if($page->avatar)
            <img src="{{ asset('storage/blog/' . $page->avatar) }}" alt="Current Image" 
                 style="max-width: 100px; height: 100px; margin-top: 10px;">
          @endif
          <small class="text-muted">Leave empty to keep current image</small>
          @error('avatar')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Meta Title</label>
          <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $page->meta_title) }}">
          @error('meta_title')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Meta Key</label>
          <input type="text" name="meta_key" class="form-control" value="{{ old('meta_key', $page->meta_key) }}">
          @error('meta_key')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Meta Description</label>
          <textarea name="meta_desc" class="form-control" rows="3">{{ old('meta_desc', $page->meta_desc) }}</textarea>
          @error('meta_desc')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Status</label>
          <select name="status" class="form-select" required>
            <option value="">Select</option>
            <option value="t" {{ old('status', $page->status) == 't' ? 'selected' : '' }}>Active</option>
            <option value="f" {{ old('status', $page->status) == 'f' ? 'selected' : '' }}>Pending</option>
          </select>
          @error('status')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="mt-3">
        <button type="submit" class="btn btn-dark">Update</button>
        <a href="{{ route('super.blog.index') }}" class="btn btn-outline-secondary">Back</a>
      </div>
    </form>
  </div>
</div>
@endsection
