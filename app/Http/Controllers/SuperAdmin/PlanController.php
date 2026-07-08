<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PlanController extends Controller
{
    public function index()
    {
        $plans = SubscriptionPlan::orderBy('plan_type')
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->paginate(20);

        return view('super.plans.index', compact('plans'));
    }

    public function create()
    {
        return view('super.plans.create');
    }

    public function store(Request $request)
    {
        $data = $this->validatePlan($request);

        $data['features'] = $this->formatFeatures($request->features);
        $data['status'] = $request->boolean('status');

        SubscriptionPlan::create($data);

        return redirect()
            ->route('super.plans.index')
            ->with('success', 'Plan added successfully.');
    }

    public function edit($id)
    {
        $plan = SubscriptionPlan::findOrFail($id);

        return view('super.plans.edit', compact('plan'));
    }

    public function update(Request $request, $id)
    {
        $plan = SubscriptionPlan::findOrFail($id);

        $data = $this->validatePlan($request);

        $data['features'] = $this->formatFeatures($request->features);
        $data['status'] = $request->boolean('status');

        $plan->update($data);

        return redirect()
            ->route('super.plans.index')
            ->with('success', 'Plan updated successfully.');
    }

    public function destroy($id)
    {
        $plan = SubscriptionPlan::findOrFail($id);
        $plan->delete();

        return redirect()
            ->route('super.plans.index')
            ->with('success', 'Plan deleted successfully.');
    }

    private function validatePlan(Request $request): array
    {
        return $request->validate([
            'plan_type' => ['required', Rule::in(['student', 'tutor'])],
            'plan_name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'duration_days' => ['required', 'integer', 'min:1'],
            'ai_credits' => ['required', 'integer', 'min:0'],
            'contact_limit' => ['required', 'integer', 'min:0'],
            'lead_limit' => ['required', 'integer', 'min:0'],
            'features' => ['nullable', 'string'],
            'status' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);
    }

    private function formatFeatures(?string $features): array
    {
        if (!$features) {
            return [];
        }

        return collect(preg_split('/\r\n|\r|\n/', $features))
            ->map(fn ($feature) => trim($feature))
            ->filter()
            ->values()
            ->toArray();
    }
}