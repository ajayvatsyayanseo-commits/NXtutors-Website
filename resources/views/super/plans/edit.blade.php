@extends('super.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Edit Subscription Plan</h4>

        <a href="{{ route('super.plans.index') }}" class="btn btn-secondary">
            Back
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('super.plans.update', $plan->id) }}" method="POST">
                @csrf
                @method('PUT')

                @include('super.plans.partials.form', [
                    'plan' => $plan,
                    'buttonText' => 'Update Plan'
                ])
            </form>
        </div>
    </div>
</div>
@endsection