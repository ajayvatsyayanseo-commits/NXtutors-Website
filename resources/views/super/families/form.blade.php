@extends('super.layouts.app')
@section('title', $family->exists ? 'Family: '.$family->name : 'Add family')

@section('content')
<div class="container-fluid py-3">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="mb-0">{{ $family->exists ? $family->name : 'Add family' }}</h3>
    <a href="{{ route('super.families.index') }}" class="btn btn-sm btn-secondary">← All families</a>
  </div>

  @if($errors->any())
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)<div>{{ $error }}</div>@endforeach
    </div>
  @endif

  {{-- The parent --}}
  <div class="card mb-4">
    <div class="card-header fw-semibold">Parent</div>
    <div class="card-body">
      <form method="POST" action="{{ $family->exists ? route('super.families.update', $family) : route('super.families.store') }}">
        @csrf
        @if($family->exists) @method('PUT') @endif
        <div class="row g-3">
          <div class="col-md-4">
            <label class="form-label" for="f-name">Parent name</label>
            <input class="form-control" id="f-name" name="name" value="{{ old('name', $family->name) }}" required>
          </div>
          <div class="col-md-3">
            <label class="form-label" for="f-phone">WhatsApp mobile</label>
            <input class="form-control" id="f-phone" name="phone" value="{{ old('phone', $family->phone) }}" placeholder="98765 43210" required>
            <div class="form-text">10 digits; 91 is removed. Login codes go to this number.</div>
          </div>
          <div class="col-md-3">
            <label class="form-label" for="f-email">Email (optional)</label>
            <input class="form-control" id="f-email" name="email" type="email" value="{{ old('email', $family->email) }}">
          </div>
          <div class="col-md-2">
            <label class="form-label" for="f-status">Status</label>
            <select class="form-select" id="f-status" name="status">
              @foreach(\App\Models\NxtParent::STATUSES as $s)
                <option value="{{ $s }}" @selected(old('status', $family->status ?: 'active') === $s)>{{ ucfirst($s) }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-3">
          <span class="small text-muted">
            @if($family->exists)
              Last login: {{ $family->last_login_at?->format('d M Y, H:i') ?? 'Never' }}
              · Password: {{ $family->password ? 'set by the parent' : 'not set (WhatsApp only)' }}
            @else
              An inactive parent cannot log in.
            @endif
          </span>
          <button class="btn btn-primary">{{ $family->exists ? 'Save parent' : 'Create family' }}</button>
        </div>
      </form>
    </div>
  </div>

  @if($family->exists)
    {{-- Linked children --}}
    <div class="card mb-4">
      <div class="card-header fw-semibold">Children ({{ $children->count() }})</div>
      <div class="card-body p-0">
        <table class="table table-sm align-middle mb-0">
          <thead><tr><th>Child</th><th>Class</th><th>Board</th><th>Relationship</th><th class="text-center">Primary</th><th>Account</th><th class="text-end"></th></tr></thead>
          <tbody>
            @forelse($children as $child)
              @php $fid = 'child-'.$child->id; @endphp
              <tr>
                <td><input form="{{ $fid }}" class="form-control form-control-sm" name="child_name" value="{{ $child->child_name }}" required></td>
                <td><input form="{{ $fid }}" class="form-control form-control-sm" name="child_class" value="{{ $child->child_class }}" style="max-width:110px"></td>
                <td><input form="{{ $fid }}" class="form-control form-control-sm" name="board" value="{{ $child->board }}" style="max-width:110px"></td>
                <td>
                  <select form="{{ $fid }}" class="form-select form-select-sm" name="relationship">
                    @foreach(\App\Models\NxtParentChild::RELATIONSHIPS as $r)
                      <option value="{{ $r }}" @selected($child->relationship === $r)>{{ ucfirst($r) }}</option>
                    @endforeach
                  </select>
                </td>
                <td class="text-center">
                  <input form="{{ $fid }}" type="hidden" name="is_primary" value="0">
                  <input form="{{ $fid }}" class="form-check-input" type="checkbox" name="is_primary" value="1" @checked($child->is_primary)>
                </td>
                <td class="small">
                  @if($child->student_user_id)
                    <code>{{ $child->student_user_id }}</code>
                    @if($child->student) <span class="text-muted">· {{ $child->student->phone }}</span> @else <span class="text-danger">· account missing</span> @endif
                  @else
                    <span class="text-muted">No account</span>
                  @endif
                </td>
                <td class="text-end text-nowrap">
                  <form id="{{ $fid }}" method="POST" action="{{ route('super.families.children.update', [$family, $child]) }}" class="d-inline">
                    @csrf @method('PUT')
                    <button class="btn btn-sm btn-outline-primary">Save</button>
                  </form>
                  <form method="POST" action="{{ route('super.families.children.destroy', [$family, $child]) }}" class="d-inline"
                        onsubmit="return confirm('Unlink this child from the family? Their student account, if any, is not changed.');">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-outline-danger">Unlink</button>
                  </form>
                </td>
              </tr>
            @empty
              <tr><td colspan="7" class="text-muted p-3">No children linked yet. Search for a student account below, or add a child by name.</td></tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

    <div class="row g-4">
      {{-- Link an existing student account --}}
      <div class="col-lg-7">
        <div class="card h-100">
          <div class="card-header fw-semibold">Link a student account</div>
          <div class="card-body">
            <form method="GET" action="{{ route('super.families.edit', $family) }}" class="d-flex gap-2 mb-3">
              <input name="student_q" value="{{ $sq }}" class="form-control form-control-sm" placeholder="Student phone, name or user id">
              <button class="btn btn-sm btn-outline-secondary">Search</button>
            </form>
            @if($sq !== '')
              <table class="table table-sm align-middle mb-0">
                <thead><tr><th>Student</th><th>User id</th><th>Phone</th><th>Class</th><th>Relationship</th><th></th></tr></thead>
                <tbody>
                  @forelse($students as $s)
                    @php $sid = 'link-'.$s->id; @endphp
                    <tr>
                      <td>{{ $s->name }}<div class="small text-muted">{{ $s->city }}</div></td>
                      <td><code>{{ $s->user_id }}</code></td>
                      <td class="small">{{ $s->phone }}</td>
                      <td class="small">{{ $s->for_class }}</td>
                      <td>
                        <select form="{{ $sid }}" class="form-select form-select-sm" name="relationship">
                          @foreach(\App\Models\NxtParentChild::RELATIONSHIPS as $r)
                            <option value="{{ $r }}">{{ ucfirst($r) }}</option>
                          @endforeach
                        </select>
                      </td>
                      <td class="text-end">
                        @if($children->contains('student_user_id', (string) $s->user_id))
                          <span class="badge text-bg-light">Linked</span>
                        @else
                          <form id="{{ $sid }}" method="POST" action="{{ route('super.families.children.store', $family) }}">
                            @csrf
                            <input type="hidden" name="student_user_id" value="{{ $s->user_id }}">
                            <button class="btn btn-sm btn-primary">Link</button>
                          </form>
                        @endif
                      </td>
                    </tr>
                  @empty
                    <tr><td colspan="6" class="text-muted">No student account matches “{{ $sq }}”.</td></tr>
                  @endforelse
                </tbody>
              </table>
            @else
              <p class="small text-muted mb-0">Searches student accounts only (register, join_as = student). The child's name and class are copied from the account and can be edited after linking.</p>
            @endif
          </div>
        </div>
      </div>

      {{-- Add a child without an account --}}
      <div class="col-lg-5">
        <div class="card h-100">
          <div class="card-header fw-semibold">Add a child without an account</div>
          <div class="card-body">
            <form method="POST" action="{{ route('super.families.children.store', $family) }}">
              @csrf
              <div class="mb-2">
                <label class="form-label" for="c-name">Child's name</label>
                <input class="form-control form-control-sm" id="c-name" name="child_name" required>
              </div>
              <div class="row g-2 mb-2">
                <div class="col-6">
                  <label class="form-label" for="c-class">Class</label>
                  <input class="form-control form-control-sm" id="c-class" name="child_class" placeholder="8">
                </div>
                <div class="col-6">
                  <label class="form-label" for="c-board">Board</label>
                  <input class="form-control form-control-sm" id="c-board" name="board" placeholder="CBSE">
                </div>
              </div>
              <div class="mb-2">
                <label class="form-label" for="c-rel">Relationship</label>
                <select class="form-select form-select-sm" id="c-rel" name="relationship">
                  @foreach(\App\Models\NxtParentChild::RELATIONSHIPS as $r)
                    <option value="{{ $r }}">{{ ucfirst($r) }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="is_primary" value="1" id="c-primary">
                <label class="form-check-label" for="c-primary">Primary child</label>
              </div>
              <button class="btn btn-sm btn-primary">Add child</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endif
</div>
@endsection
