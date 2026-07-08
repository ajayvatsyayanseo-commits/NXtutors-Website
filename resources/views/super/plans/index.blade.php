@extends('super.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Subscription Plans</h4>

        <a href="{{ route('super.plans.create') }}" class="btn btn-primary">
            Add Plan
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Plan Name</th>
                        <th>Price</th>
                        <th>Duration</th>
                        <th>AI Credits</th>
                        <th>Contact Limit</th>
                        <th>Lead Limit</th>
                        <th>Status</th>
                        <th>Sort</th>
                        <th width="160">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($plans as $plan)
                        <tr>
                            <td>{{ $plan->id }}</td>
                            <td>{{ ucfirst($plan->plan_type) }}</td>
                            <td>{{ $plan->plan_name }}</td>
                            <td>₹{{ number_format($plan->price, 2) }}</td>
                            <td>{{ $plan->duration_days }} days</td>
                            <td>{{ $plan->ai_credits }}</td>
                            <td>{{ $plan->contact_limit }}</td>
                            <td>{{ $plan->lead_limit }}</td>
                            <td>
                                @if($plan->status)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>{{ $plan->sort_order }}</td>
                            <td>
                                <a href="{{ route('super.plans.edit', $plan->id) }}" class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <form action="{{ route('super.plans.destroy', $plan->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="11" class="text-center">No plans found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $plans->links() }}
        </div>
    </div>
</div>
@endsection