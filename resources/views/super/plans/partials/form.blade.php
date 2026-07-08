@php
    $selectedType = old('plan_type', $plan->plan_type ?? 'student');

    $featuresValue = old('features');

    if ($featuresValue === null && $plan && is_array($plan->features)) {
        $featuresValue = implode("\n", $plan->features);
    }
@endphp

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Please fix these errors:</strong>
        <ul class="mb-0 mt-2">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <div class="col-md-4 mb-3">
        <label>Plan Type <span class="text-danger">*</span></label>
        <select name="plan_type" class="form-control" required>
            <option value="student" @selected($selectedType === 'student')>Student</option>
            <option value="tutor" @selected($selectedType === 'tutor')>Tutor</option>
        </select>
    </div>

    <div class="col-md-8 mb-3">
        <label>Plan Name <span class="text-danger">*</span></label>
        <input type="text"
               name="plan_name"
               class="form-control"
               value="{{ old('plan_name', $plan->plan_name ?? '') }}"
               required>
    </div>

    <div class="col-md-4 mb-3">
        <label>Price <span class="text-danger">*</span></label>
        <input type="number"
               name="price"
               step="0.01"
               min="0"
               class="form-control"
               value="{{ old('price', $plan->price ?? 0) }}"
               required>
    </div>

    <div class="col-md-4 mb-3">
        <label>Duration Days <span class="text-danger">*</span></label>
        <input type="number"
               name="duration_days"
               min="1"
               class="form-control"
               value="{{ old('duration_days', $plan->duration_days ?? 30) }}"
               required>
    </div>

    <div class="col-md-4 mb-3">
        <label>AI Credits <span class="text-danger">*</span></label>
        <input type="number"
               name="ai_credits"
               min="0"
               class="form-control"
               value="{{ old('ai_credits', $plan->ai_credits ?? 0) }}"
               required>
    </div>

    <div class="col-md-4 mb-3">
        <label>Contact Limit <span class="text-danger">*</span></label>
        <input type="number"
               name="contact_limit"
               min="0"
               class="form-control"
               value="{{ old('contact_limit', $plan->contact_limit ?? 0) }}"
               required>
    </div>

    <div class="col-md-4 mb-3">
        <label>Lead Limit <span class="text-danger">*</span></label>
        <input type="number"
               name="lead_limit"
               min="0"
               class="form-control"
               value="{{ old('lead_limit', $plan->lead_limit ?? 0) }}"
               required>
    </div>

    <div class="col-md-4 mb-3">
        <label>Sort Order</label>
        <input type="number"
               name="sort_order"
               min="0"
               class="form-control"
               value="{{ old('sort_order', $plan->sort_order ?? 0) }}">
    </div>

    <div class="col-md-12 mb-3">
        <label>Features</label>
        <textarea name="features"
                  rows="6"
                  class="form-control"
                  placeholder="One feature per line">{{ $featuresValue }}</textarea>
    </div>

    <div class="col-md-12 mb-3">
        <input type="hidden" name="status" value="0">

        <label>
            <input type="checkbox"
                   name="status"
                   value="1"
                   @checked(old('status', $plan->status ?? true))>
            Active
        </label>
    </div>
</div>

<button type="submit" class="btn btn-primary">
    {{ $buttonText }}
</button>