@extends('super.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Add Subscription Plan</h4>

        <a href="{{ route('super.plans.index') }}" class="btn btn-secondary">
            Back
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('super.plans.store') }}" method="POST">
                @csrf

                @include('super.plans.partials.form', [
                    'plan' => null,
                    'buttonText' => 'Save Plan'
                ])
            </form>
        </div>
    </div>
</div>
@endsection