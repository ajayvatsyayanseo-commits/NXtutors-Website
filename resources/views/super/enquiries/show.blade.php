@extends('super.layouts.app')
@section('title', 'Enquiry #' . $lead->id)

@use('App\Models\EnquiryLead')
@use('App\Services\Enquiries\EnquiryQuery')
@php
  $tz = EnquiryQuery::tz();
  $local = fn ($dt) => $dt ? $dt->timezone($tz)->format('Y-m-d\TH:i') : '';
  $shortlisted = $lead->shortlistedIds();
  $request = array_filter([
      'Class' => $lead->class_label,
      'Class band' => EnquiryLead::CLASS_BANDS[$lead->class_band] ?? null,
      'Subjects' => $lead->subjectList() ? implode(', ', $lead->subjectList()) : null,
      'Board' => $lead->board,
      'Exam goal' => EnquiryLead::EXAM_GOALS[$lead->exam_goal] ?? null,
      'City' => $lead->city,
      'Zone' => $lead->zone,
      'Area' => $lead->area,
      'Mode' => EnquiryLead::MODES[$lead->mode] ?? null,
      'Tutor gender wanted' => $lead->tutor_gender ? ucfirst($lead->tutor_gender) : null,
      'Budget' => $lead->budget,
      'Preferred days / time' => $lead->preferred_time,
      'Start by' => $lead->start_by,
      'Page' => $lead->page_url,
      'Referrer' => $lead->referrer,
      'UTM' => $lead->utm,
      'Device' => $lead->device,
  ], fn ($v) => $v !== null && $v !== '');
@endphp

@section('content')
<div class="container-fluid px-0">
  <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
    <div>
      <a href="{{ route('super.enquiries.index') }}" class="small">← All enquiries</a>
      <h3 class="mb-0">Enquiry #{{ $lead->id }} <span class="badge bg-secondary align-middle fs-6">{{ $lead->stageLabel() }}</span>
        @if($lead->priority)<span class="badge bg-danger-subtle text-dark align-middle fs-6">{{ ucfirst($lead->priority) }}</span>@endif</h3>
      <div class="text-muted small">{{ $lead->sourceLabel() }} · received {{ $lead->received_at?->timezone($tz)->format('d M Y, g:i A') }} IST
        @if($lead->lost_reason) · Lost: {{ EnquiryLead::LOST_REASONS[$lead->lost_reason] ?? $lead->lost_reason }}@endif</div>
    </div>
  </div>

  <div class="row g-3">
    <div class="col-lg-7">
      <div class="card border-0 shadow-sm mb-3">
        <div class="card-header bg-white fw-semibold">Parent</div>
        <div class="card-body">
          <dl class="row mb-0 small">
            <dt class="col-sm-4">Name</dt><dd class="col-sm-8">{{ $contact['name'] ?? '—' }}</dd>
            <dt class="col-sm-4">Phone</dt><dd class="col-sm-8">@if(!empty($contact['phone']))<a href="tel:{{ preg_replace('/[^0-9+]/', '', $contact['phone']) }}">{{ $contact['phone'] }}</a>@else — @endif</dd>
            <dt class="col-sm-4">Email</dt><dd class="col-sm-8">@if(!empty($contact['email']))<a href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a>@else — @endif</dd>
            @if($lead->wa_ref)
              <dt class="col-sm-4">WhatsApp Ref</dt><dd class="col-sm-8"><a href="{{ route('super.refs.show', $lead->wa_ref) }}"><code>{{ $lead->wa_ref }}</code></a>
                @if($handoff) · {{ str_replace('_', ' ', $handoff->kind) }}@endif</dd>
            @endif
          </dl>
        </div>
      </div>

      <div class="card border-0 shadow-sm mb-3">
        <div class="card-header bg-white fw-semibold">Request</div>
        <div class="card-body">
          <dl class="row mb-0 small">
            @forelse($request as $label => $value)
              <dt class="col-sm-4">{{ $label }}</dt><dd class="col-sm-8 text-break">{{ $value }}</dd>
            @empty
              <dd class="col-12 text-muted">The form did not say; see the message below.</dd>
            @endforelse
          </dl>
        </div>
      </div>

      <div class="card border-0 shadow-sm mb-3">
        <div class="card-header bg-white fw-semibold">Message</div>
        <div class="card-body">
          <p class="small mb-3" style="white-space:pre-wrap">{{ $contact['message'] ?? 'No message.' }}</p>
          <details class="small">
            <summary>Every field as stored ({{ $lead->source_table }} #{{ $lead->source_id }})</summary>
            <table class="table table-sm mt-2 mb-0">
              @foreach($contact['raw'] ?? [] as $k => $v)
                <tr><th class="text-muted fw-normal" style="width:35%">{{ $k }}</th><td class="text-break">{{ is_scalar($v) || $v === null ? $v : json_encode($v) }}</td></tr>
              @endforeach
            </table>
          </details>
        </div>
      </div>

      <div class="card border-0 shadow-sm mb-3">
        <div class="card-header bg-white fw-semibold d-flex justify-content-between">
          <span>Duplicates @if($lead->possible_duplicate)<span class="badge bg-warning text-dark">Possible duplicate</span>@endif</span>
          @if($lead->duplicate_of_id)<a class="small" href="{{ route('super.enquiries.show', $lead->duplicate_of_id) }}">Duplicate of #{{ $lead->duplicate_of_id }}</a>@endif
        </div>
        <div class="card-body small">
          @forelse($group as $g)
            <div class="d-flex flex-wrap justify-content-between align-items-center border-bottom py-1 gap-2">
              <span><a href="{{ route('super.enquiries.show', $g) }}">#{{ $g->id }}</a> · {{ $g->sourceLabel() }} · {{ $g->received_at?->timezone($tz)->format('d M Y') }} · {{ $groupContacts[$g->id]['name'] ?? '' }} · {{ $g->stageLabel() }}</span>
              <form method="POST" action="{{ route('super.enquiries.duplicate', $lead) }}">@csrf<input type="hidden" name="of" value="{{ $g->id }}">
                <button class="btn btn-sm btn-outline-warning">Merge this one into #{{ $g->id }}</button></form>
            </div>
          @empty
            <p class="text-muted mb-2">No other enquiry with the same phone or email.</p>
          @endforelse
          @if(! $lead->duplicate_of_id)
            <form method="POST" action="{{ route('super.enquiries.duplicate', $lead) }}" class="mt-2">@csrf
              <button class="btn btn-sm btn-outline-secondary">Mark as duplicate</button></form>
          @endif
        </div>
      </div>

      <div class="card border-0 shadow-sm mb-3">
        <div class="card-header bg-white fw-semibold">Suggested tutors</div>
        <div class="card-body small">
          @if($matches['note'])<p class="text-muted">{{ $matches['note'] }}</p>@endif
          @forelse($matches['cards'] as $t)
            <div class="d-flex flex-wrap justify-content-between align-items-start border-bottom py-2 gap-2">
              <div>
                <div class="fw-semibold">
                  @if(!empty($t['profile_url']))<a href="{{ $t['profile_url'] }}" target="_blank" rel="noopener">{{ $t['name'] }}</a>@else{{ $t['name'] }}@endif
                  @if(!empty($t['is_sample']))<span class="badge bg-light text-dark border">Sample profile</span>@elseif($t['verified'])<span class="badge bg-success">Verified</span>@endif
                </div>
                <div class="text-muted">{{ $t['place_label'] ?? ($t['city'] ?? '') }} @if(!empty($t['subjects'])) · {{ implode(', ', array_slice((array) $t['subjects'], 0, 4)) }}@endif
                  @if(!empty($t['teaching_modes'])) · {{ implode('/', (array) $t['teaching_modes']) }}@endif @if(!empty($t['fee_label'])) · {{ $t['fee_label'] }}@endif</div>
                @if(!empty($t['match_reasons']))<div class="text-muted">{{ implode(' · ', array_slice((array) $t['match_reasons'], 0, 3)) }}</div>@endif
              </div>
              @if(!empty($t['user_id']) && empty($t['is_sample']))
                @if(in_array((string) $t['user_id'], $shortlisted, true))
                  <span class="badge bg-info text-dark">Shortlisted</span>
                @else
                  <form method="POST" action="{{ route('super.enquiries.update', $lead) }}">@csrf
                    <input type="hidden" name="shortlisted_tutor_ids" value="{{ implode(',', array_merge($shortlisted, [(string) $t['user_id']])) }}">
                    <button class="btn btn-sm btn-outline-primary">Add to shortlist</button></form>
                @endif
              @endif
            </div>
          @empty
            <p class="text-muted mb-0">No tutor suggestions for this request yet.</p>
          @endforelse
        </div>
      </div>
    </div>

    <div class="col-lg-5">
      <div class="card border-0 shadow-sm mb-3">
        <div class="card-header bg-white fw-semibold">Follow-up</div>
        <div class="card-body">
          <form method="POST" action="{{ route('super.enquiries.update', $lead) }}" class="row g-2 small">
            @csrf
            <div class="col-6"><label class="form-label mb-0" for="e-stage">Stage</label>
              <select id="e-stage" name="stage" class="form-select form-select-sm">
                @foreach(EnquiryLead::STAGES as $k => $v)<option value="{{ $k }}" {{ $lead->stage() === $k ? 'selected' : '' }}>{{ $v }}</option>@endforeach
              </select></div>
            <div class="col-6"><label class="form-label mb-0" for="e-lost">Lost reason</label>
              <select id="e-lost" name="lost_reason" class="form-select form-select-sm"><option value="">—</option>
                @foreach(EnquiryLead::LOST_REASONS as $k => $v)<option value="{{ $k }}" {{ $lead->lost_reason === $k ? 'selected' : '' }}>{{ $v }}</option>@endforeach
              </select></div>
            <div class="col-6"><label class="form-label mb-0" for="e-prio">Priority</label>
              <select id="e-prio" name="priority" class="form-select form-select-sm"><option value="">—</option>
                @foreach(EnquiryLead::PRIORITIES as $k => $v)<option value="{{ $k }}" {{ $lead->priority === $k ? 'selected' : '' }}>{{ $v }}</option>@endforeach
              </select></div>
            <div class="col-6"><label class="form-label mb-0" for="e-assign">Assigned to</label>
              <select id="e-assign" name="assigned_to" class="form-select form-select-sm"><option value="">Nobody</option>
                @foreach($admins as $id => $name)<option value="{{ $id }}" {{ (int) $lead->assigned_to === $id ? 'selected' : '' }}>{{ $name }}</option>@endforeach
              </select></div>
            <div class="col-6"><label class="form-label mb-0" for="e-next">Next follow-up (IST)</label>
              <input id="e-next" type="datetime-local" name="next_follow_up_at" value="{{ $local($lead->next_follow_up_at) }}" class="form-control form-control-sm"></div>
            <div class="col-6"><label class="form-label mb-0" for="e-demo">Demo (IST)</label>
              <input id="e-demo" type="datetime-local" name="demo_at" value="{{ $local($lead->demo_at) }}" class="form-control form-control-sm"></div>
            <div class="col-6"><label class="form-label mb-0" for="e-dt">Demo tutor (user id)</label>
              <input id="e-dt" name="demo_tutor_id" value="{{ $lead->demo_tutor_id }}" class="form-control form-control-sm" maxlength="64"></div>
            <div class="col-6"><label class="form-label mb-0" for="e-sl">Shortlisted tutors (user ids)</label>
              <input id="e-sl" name="shortlisted_tutor_ids" value="{{ implode(',', $shortlisted) }}" class="form-control form-control-sm" maxlength="250"></div>
            <div class="col-12"><label class="form-label mb-0" for="e-tags">Tags (comma separated)</label>
              <input id="e-tags" name="tags" value="{{ implode(', ', $lead->tagList()) }}" class="form-control form-control-sm" maxlength="250"></div>
            <div class="col-12"><label class="form-label mb-0" for="e-note">Add a note</label>
              <textarea id="e-note" name="note" rows="3" class="form-control form-control-sm" maxlength="5000" placeholder="What happened on the call, what was agreed…"></textarea></div>
            <div class="col-12"><button class="btn btn-primary btn-sm">Save</button></div>
          </form>
          <div class="small text-muted mt-2">
            @if($lead->first_contacted_at)First contact {{ $lead->first_contacted_at->timezone($tz)->format('d M, g:i A') }}. @endif
            @if($lead->followed_up_at)Last update by {{ $lead->followed_up_by ?? 'admin' }}, {{ $lead->followed_up_at->timezone($tz)->format('d M, g:i A') }}.@endif
          </div>
        </div>
      </div>

      <div class="card border-0 shadow-sm mb-3">
        <div class="card-header bg-white fw-semibold">Timeline</div>
        <ul class="list-group list-group-flush small">
          @forelse($activities as $a)
            <li class="list-group-item">
              <div class="text-muted">{{ $a->created_at?->timezone($tz)->format('d M Y, g:i A') }} · {{ $a->user_name ?? 'System' }}</div>
              @switch($a->type)
                @case('created') Enquiry received ({{ EnquiryLead::SOURCES[$a->to_value] ?? $a->to_value }}). @break
                @case('stage') Stage: {{ EnquiryLead::STAGES[$a->from_value] ?? $a->from_value }} → <strong>{{ EnquiryLead::STAGES[$a->to_value] ?? $a->to_value }}</strong> @break
                @case('assign') Assigned to {{ $admins[(int) $a->to_value] ?? ($a->to_value ? 'admin #' . $a->to_value : 'nobody') }} @break
                @case('note') <div style="white-space:pre-wrap">{{ $a->body }}</div> @break
                @default {{ ucfirst(str_replace('_', ' ', $a->type)) }}@if($a->to_value || $a->from_value): {{ $a->from_value ?? '—' }} → {{ $a->to_value ?? '—' }}@endif @if($a->body) {{ $a->body }}@endif
              @endswitch
            </li>
          @empty
            <li class="list-group-item text-muted">Nothing yet.</li>
          @endforelse
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
