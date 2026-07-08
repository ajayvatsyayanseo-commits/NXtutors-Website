@extends('super.layouts.app')
@section('title','Edit Premium School')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h3 class="mb-0">Edit Premium School</h3>
  <a class="btn btn-outline-secondary" href="{{ route('super.premium-schools.index') }}">Back</a>
</div>

@if($errors->any())
  <div class="alert alert-danger">{{ $errors->first() }}</div>
@endif

<form class="card p-3" method="POST" action="{{ route('super.premium-schools.update', $school->id) }}">
  @csrf @method('PUT')
  @include('super.premium-schools.partials.form', ['school' => $school])
  <div class="mt-3">
    <button class="btn btn-dark">Update</button>
  </div>
</form>
@endsection
