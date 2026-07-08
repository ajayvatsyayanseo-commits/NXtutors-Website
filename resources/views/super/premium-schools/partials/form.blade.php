@php
  $v = fn($k, $d='') => old($k, $school?->{$k} ?? $d);
@endphp

<div class="row g-3">
  <div class="col-md-4">
    <label class="form-label">City</label>
    <input class="form-control" name="city" value="{{ $v('city') }}" required>
  </div>

  <div class="col-md-4">
    <label class="form-label">Area / Micro-Zone</label>
    <input class="form-control" name="area" value="{{ $v('area') }}">
  </div>

  <div class="col-md-4">
    <label class="form-label">Premium Tier</label>
    <select class="form-select" name="premium_tier">
      <option value="">-</option>
      <option value="A" @selected($v('premium_tier')==='A')>A</option>
      <option value="B" @selected($v('premium_tier')==='B')>B</option>
    </select>
  </div>

  <div class="col-md-6">
    <label class="form-label">School Name</label>
    <input class="form-control" name="school_name" value="{{ $v('school_name') }}" required>
  </div>

  <div class="col-md-3">
    <label class="form-label">Board Category</label>
    <select class="form-select" name="board_category" required>
      <option value="CBSE" @selected($v('board_category')==='CBSE')>CBSE</option>
      <option value="ICSE" @selected($v('board_category')==='ICSE')>ICSE</option>
      <option value="IGCSE" @selected($v('board_category')==='IGCSE')>IGCSE</option>
      <option value="IB" @selected($v('board_category')==='IB')>IB</option>
    </select>
  </div>

  <div class="col-md-3">
    <label class="form-label">Board</label>
    <input class="form-control" name="board" value="{{ $v('board') }}" placeholder="IB / ICSE">
  </div>

  <div class="col-12">
    <label class="form-label">Notes</label>
    <textarea class="form-control" name="notes" rows="3">{{ $v('notes') }}</textarea>
  </div>
</div>
