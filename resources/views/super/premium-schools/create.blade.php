@extends('super.layouts.app')
@section('title','Add Premium School')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h3 class="mb-0">Add Premium School</h3>
  <a class="btn btn-outline-secondary" href="{{ route('super.premium-schools.index') }}">Back</a>
</div>

@if($errors->any())
  <div class="alert alert-danger">{{ $errors->first() }}</div>
@endif

<form class="card p-3" method="POST" action="{{ route('super.premium-schools.store') }}">
  @csrf
  @include('super.premium-schools.partials.form', ['school' => null])
  <div class="mt-3">
    <button class="btn btn-dark">Save</button>
  </div>
</form>
@endsection
