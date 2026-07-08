@extends('super.layouts.app')
@section('title','Create Teacher')

@section('content')
<h3 class="mb-3">Create Teacher</h3>

<div class="card border-0 shadow-sm">
  <div class="card-body">
    @if (session('success'))
      <div id="success-message" class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    @if($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('super.teacher.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Teacher Name</label>
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
          @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Email Address</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Mobile Number</label>
          <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
          @error('phone')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Confirm Password</label>
          <input type="password" name="password_confirmation" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">Status</label>
          <select name="status" class="form-select @error('status') is-invalid @enderror" required>
            <option value="">Select Status</option>
            <option value="t" {{ old('status') == 't' ? 'selected' : '' }}>Active</option>
            <option value="f" {{ old('status') == 'f' ? 'selected' : '' }}>Pending</option>
          </select>
          @error('status')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label class="form-label">Address</label>
          <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3">{{ old('address') }}</textarea>
          @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Teacher Image</label>
          <input type="file" name="avatar" class="form-control @error('avatar') is-invalid @enderror" accept="image/*">
          @error('avatar')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          <small class="form-text text-muted">Upload teacher profile image (JPG, PNG)</small>
        </div>

        <input type="hidden" name="join_as" value="teacher">
      </div>

      <div class="mt-4">
        <button type="submit" class="btn btn-primary">Create Teacher</button>
        <a href="{{ route('super.teacher.index') }}" class="btn btn-outline-secondary">Back to List</a>
      </div>
    </form>
  </div>
</div>
@endsection
