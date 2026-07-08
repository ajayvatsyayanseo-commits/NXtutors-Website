@extends('super.layouts.app')
@section('title','Edit Generated Page')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
  <div>
    <h3 class="mb-0">Edit Generated Page</h3>
    <small class="text-muted">Update geo, type, category, keywords & publish status (content auto-generated remains as-is).</small>
  </div>
  <a href="{{ route('super.pagegen.index') }}" class="btn btn-outline-secondary">Back to Pages</a>
</div>

@if($errors->any())
  <div class="alert alert-danger">{{ $errors->first() }}</div>
@endif

<form id="pageGenForm"
      method="POST"
      action="{{ route('super.pagegen.update', $page->id) }}"
      class="card border-0 shadow-sm">
  @csrf
  @method('PUT')

  <div class="card-body">

    {{-- ===== Core Inputs ===== --}}
    <div class="d-flex align-items-center justify-content-between mb-2">
      <div class="fw-semibold">Core Page Inputs</div>
      <div class="text-muted small"><i class="bi bi-pencil-square"></i> Edit</div>
    </div>

    <div class="row g-3">

      <div class="col-md-3">
        <label class="form-label">State</label>
        <input name="state" class="form-control"
               value="{{ old('state', $page->state) }}"
               placeholder="Haryana" required>
      </div>

      <div class="col-md-3">
        <label class="form-label">City</label>
        <input name="city" class="form-control"
               value="{{ old('city', $page->city) }}"
               placeholder="Gurugram" required>
      </div>

      <div class="col-md-3">
        <label class="form-label">Location (Sector/Area)</label>
        <input name="location" class="form-control"
               value="{{ old('location', $page->location) }}"
               placeholder="Sector 56" required>
        <small class="text-muted">Example: 57 or Sector 57</small>
      </div>

      <div class="col-md-4">
        <label class="form-label">Hyper-Location (Society/Tower)</label>
        <input name="hyper_location" class="form-control"
               value="{{ old('hyper_location', $page->hyper_location) }}"
               placeholder="Optional for Hyper-Location pages">
        <small class="text-muted">Only for Hyper-Location pages</small>
      </div>

      <div class="col-md-4">
        <label class="form-label">Page Type</label>
        <select name="page_type" class="form-select" required>
          <option value="location" @selected(old('page_type', $page->page_type)==='location')>
            Location Page (Sector/Area)
          </option>
          <option value="hyper" @selected(old('page_type', $page->page_type)==='hyper')>
            Hyper-Location Page (Society/Tower)
          </option>
          <option value="city" @selected(old('page_type', $page->page_type)==='city')>
            City Page
          </option>
        </select>
      </div>

      <div class="col-md-4">
        <label class="form-label">Service Mode</label>
        <select name="service_mode" class="form-select" required>
          <option value="home" @selected(old('service_mode', $page->service_mode)==='home')>Home</option>
          <option value="online" @selected(old('service_mode', $page->service_mode)==='online')>Online</option>
          <option value="institute" @selected(old('service_mode', $page->service_mode)==='institute')>Institute</option>
        </select>
      </div>

      {{-- ================= CATEGORY (A / B) ================= --}}
      @php
        // Category is not stored as column, but exists in payload in your store() code.
        $payload = is_array($page->payload) ? $page->payload : [];
        $savedCategory = old('category', $payload['category'] ?? 'academic');

        $savedSubjects = old('subjects_csv', implode(', ', (array)($page->subjects ?? [])));
        $savedBoards   = old('boards_csv', implode(', ', (array)($page->boards ?? [])));
        $savedClasses  = old('classes_csv', implode(', ', (array)($page->classes_tracks ?? [])));

        $savedSkillName  = old('skill_name', $payload['skill_name'] ?? '');
        $savedSkillLevel = old('skill_level', $payload['skill_level'] ?? 'beginner');
      @endphp

      <div class="col-md-4">
        <label class="form-label">Category</label>
        <select name="category" id="categorySelect" class="form-select" required>
          <option value="academic" @selected($savedCategory==='academic')>
            Academic (School / Boards / Exams)
          </option>
          <option value="skill" @selected($savedCategory==='skill')>
            Skill / Hobby (Yoga, Programming, Painting)
          </option>
        </select>
        <small class="text-muted">Category edit se AI re-generate nahi hota. Sirf data save hoga.</small>
      </div>

      {{-- ================= SKILL FIELDS (B) ================= --}}
      <div class="col-md-4 d-none" id="skillNameBlock">
        <label class="form-label">Skill / Hobby</label>
        <input name="skill_name" class="form-control"
               value="{{ $savedSkillName }}"
               placeholder="Yoga, Programming, Painting">
      </div>

      <div class="col-md-4 d-none" id="skillLevelBlock">
        <label class="form-label">Skill Level</label>
        <select name="skill_level" class="form-select">
          <option value="beginner" @selected($savedSkillLevel==='beginner')>Beginner</option>
          <option value="intermediate" @selected($savedSkillLevel==='intermediate')>Intermediate</option>
          <option value="advanced" @selected($savedSkillLevel==='advanced')>Advanced</option>
        </select>
      </div>

      {{-- ================= ACADEMIC FIELDS (A) ================= --}}
      <div class="col-md-4 academic-block">
        <label class="form-label">Subjects</label>
        <input name="subjects_csv" class="form-control"
               value="{{ $savedSubjects }}"
               placeholder="Maths, Physics">
        <div class="mt-2 d-flex flex-wrap gap-2">
          @foreach(['Maths','Physics','Chemistry','Biology','English','Economics','Computer Science'] as $s)
            <button type="button" class="btn btn-sm btn-outline-dark chip"
                    data-target="subjects_csv" data-value="{{ $s }}">
              {{ $s }}
            </button>
          @endforeach
        </div>
      </div>

      <div class="col-md-4 academic-block">
        <label class="form-label">Boards</label>
        <input name="boards_csv" class="form-control"
               value="{{ $savedBoards }}"
               placeholder="CBSE, ICSE">
        <div class="mt-2 d-flex flex-wrap gap-2">
          @foreach(['CBSE','ICSE','ISC','IB','IGCSE','State Board'] as $b)
            <button type="button" class="btn btn-sm btn-outline-dark chip"
                    data-target="boards_csv" data-value="{{ $b }}">
              {{ $b }}
            </button>
          @endforeach
        </div>
      </div>

      <div class="col-md-4 academic-block">
        <label class="form-label">Classes / Tracks</label>
        <input name="classes_csv" class="form-control"
               value="{{ $savedClasses }}"
               placeholder="Class 11-12 (Science)">
        <div class="mt-2 d-flex flex-wrap gap-2">
          @foreach([
            'Class 1-5','Class 6-8','Class 9-10',
            'Class 11-12 (Science)','Class 11-12 (Commerce)','Class 11-12 (Humanities)',
            'JEE (Mains/Advanced)','NEET','CUET'
          ] as $c)
            <button type="button" class="btn btn-sm btn-outline-dark chip"
                    data-target="classes_csv" data-value="{{ $c }}">
              {{ $c }}
            </button>
          @endforeach
        </div>
      </div>

      <div class="col-md-4 d-flex align-items-end">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" name="is_premium" value="1" id="prem"
                 @checked(old('is_premium', (bool)$page->is_premium))>
          <label class="form-check-label" for="prem">Premium Locality Flag (ShieldCheck)</label>
        </div>
      </div>

      <div class="col-md-5">
        <label class="form-label">Primary Keyword Override (optional)</label>
        <input name="primary_keyword" class="form-control"
               value="{{ old('primary_keyword', $page->primary_keyword) }}"
               placeholder="best maths home tutor in Sector 56 Gurugram">
      </div>

      <div class="col-md-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select" required>
          <option value="published" @selected(old('status', $page->status)==='published')>Publish</option>
          <option value="draft" @selected(old('status', $page->status)==='draft')>Draft</option>
        </select>
      </div>
      <div class="col-md-4 d-flex align-items-end">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="regen" value="1" id="regen">
    <label class="form-check-label" for="regen">
      Re-generate content (AI) on update
    </label>
    <div class="text-muted small">Agar unchecked hai to sirf fields/payload update hoga.</div>
  </div>
</div>


    </div>

    {{-- ===== Advanced Controls (stored in payload only) ===== --}}
    <hr class="my-4">

    <div class="d-flex align-items-center justify-content-between mb-2">
      <div class="fw-semibold">Advanced Service & SEO Blocks <span class="text-muted">(Payload)</span></div>
      <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#advancedBlock">
        Toggle
      </button>
    </div>

    @php
      $savedTargetWords = old('target_words', $payload['target_words'] ?? 1800);
      $savedIntentBias = old('intent_bias', $payload['intent_bias'] ?? 'balanced');
      $savedInternalLinking = old('internal_linking', $payload['internal_linking'] ?? 'balanced');
      $savedLanguageVariant = old('language_variant', $payload['language_variant'] ?? 'english_india');
      $savedSyllabusDepth = old('syllabus_depth', $payload['syllabus_depth'] ?? 'balanced');
    @endphp

    <div id="advancedBlock" class="collapse show">
      <div class="row g-3">

        <div class="col-md-4">
          <label class="form-label">Content Depth (SEO + UX)</label>
          <select name="syllabus_depth" class="form-select">
            <option value="balanced" @selected($savedSyllabusDepth==='balanced')>Balanced</option>
            <option value="light_overview" @selected($savedSyllabusDepth==='light_overview')>Light Overview</option>
            <option value="board_aligned_detailed" @selected($savedSyllabusDepth==='board_aligned_detailed')>Board-Aligned Detailed</option>
            <option value="exam_oriented" @selected($savedSyllabusDepth==='exam_oriented')>Exam-Oriented</option>
          </select>
        </div>

        <div class="col-md-4">
          <label class="form-label">AI Intent Bias</label>
          <select name="intent_bias" class="form-select">
            <option value="balanced" @selected($savedIntentBias==='balanced')>Balanced</option>
            <option value="seo_first" @selected($savedIntentBias==='seo_first')>SEO-First</option>
            <option value="conversion_first" @selected($savedIntentBias==='conversion_first')>Conversion-First</option>
            <option value="authority_first" @selected($savedIntentBias==='authority_first')>Authority-First</option>
          </select>
        </div>

        <div class="col-md-4">
          <label class="form-label">Internal Linking Strategy</label>
          <select name="internal_linking" class="form-select">
            <option value="balanced" @selected($savedInternalLinking==='balanced')>Balanced</option>
            <option value="conservative" @selected($savedInternalLinking==='conservative')>Conservative</option>
            <option value="aggressive" @selected($savedInternalLinking==='aggressive')>Aggressive</option>
          </select>
        </div>

        <div class="col-md-4">
          <label class="form-label">Language Variant</label>
          <select name="language_variant" class="form-select">
            <option value="english_india" @selected($savedLanguageVariant==='english_india')>English (India tone)</option>
            <option value="english_us" @selected($savedLanguageVariant==='english_us')>English (US tone)</option>
            <option value="english_uk" @selected($savedLanguageVariant==='english_uk')>English (UK tone)</option>
            <option value="international" @selected($savedLanguageVariant==='international')>International</option>
          </select>
        </div>

        <div class="col-md-4">
          <label class="form-label">Target Words</label>
          <input type="number" min="800" max="2600" name="target_words"
                 class="form-control" value="{{ $savedTargetWords }}">
          <small class="text-muted">Recommended: 1800–2200</small>
        </div>

        <div class="col-md-4">
          <label class="form-label">Schema Stack (Read-only)</label>
          <input type="text" class="form-control"
                 value="WebPage, LocalBusiness, EducationalOrganization, Service, Course, Person, Offer, FAQPage, BreadcrumbList" readonly>
          <small class="text-muted">Schemas are built by Laravel builder</small>
        </div>

      </div>
    </div>

    <hr class="my-4">

    <div class="d-flex align-items-center justify-content-between">
      <div>
        <span class="badge bg-primary-subtle text-primary border border-primary-subtle">Editing</span>
        <small class="text-muted ms-2">This will update fields & payload only.</small>
      </div>

      <div class="d-flex gap-2">
        <button type="button" id="copyPayload" class="btn btn-outline-secondary">
          Copy Payload
        </button>
        <button class="btn btn-dark">
          Update Page
        </button>
      </div>
    </div>

  </div>
</form>

{{-- ===== JS: chips + CSV->array + copy payload ===== --}}
<script>
(function(){
  const form = document.getElementById('pageGenForm');
  const category = document.getElementById('categorySelect');
  const academicBlocks = document.querySelectorAll('.academic-block');
  const skillName = document.getElementById('skillNameBlock');
  const skillLevel = document.getElementById('skillLevelBlock');

  function toggleCategory(){
    const skillInput = document.querySelector('[name="skill_name"]');
    if(category.value === 'skill'){
      academicBlocks.forEach(el=>el.classList.add('d-none'));
    skillName.classList.remove('d-none');
    skillLevel.classList.remove('d-none');
    if(skillInput) skillInput.setAttribute('required','required');
    } else {
      academicBlocks.forEach(el=>el.classList.remove('d-none'));
    skillName.classList.add('d-none');
    skillLevel.classList.add('d-none');
    if(skillInput) skillInput.removeAttribute('required');
    }
  }
  category.addEventListener('change', toggleCategory);
  toggleCategory();

  // ✅ highlight chips which are already in input
  function markChips(){
    document.querySelectorAll('.chip').forEach(btn=>{
      const target = document.querySelector(`[name="${btn.dataset.target}"]`);
      const val = (btn.dataset.value || '').trim();
      const list = (target?.value || '').split(',').map(s=>s.trim()).filter(Boolean);
      const active = list.includes(val);
      btn.classList.toggle('btn-dark', active);
      btn.classList.toggle('btn-outline-dark', !active);
    });
  }
  markChips();

  // chip click -> add/remove in csv input
  document.querySelectorAll('.chip').forEach(btn => {
    btn.addEventListener('click', () => {
      const target = document.querySelector(`[name="${btn.dataset.target}"]`);
      const val = (btn.dataset.value || '').trim();
      const list = (target.value || '').split(',').map(s=>s.trim()).filter(Boolean);

      const idx = list.indexOf(val);
      if(idx === -1) list.push(val);
      else list.splice(idx, 1);

      target.value = list.join(', ');
      markChips();
    });
  });

  // Convert CSV fields to arrays before submit
  // form.addEventListener('submit', function(){
  //   const makeHiddenArray = (name, input) => {
  //     form.querySelectorAll(`input[type="hidden"][data-hidden="${name}"]`).forEach(n=>n.remove());
  //     const arr = (input.value || '').split(',').map(s=>s.trim()).filter(Boolean);
  //     arr.forEach(v=>{
  //       const i=document.createElement('input');
  //       i.type='hidden';
  //       i.name=name+'[]';
  //       i.value=v;
  //       i.setAttribute('data-hidden', name);
  //       form.appendChild(i);
  //     });
  //   };

  //   const s = document.querySelector('[name=subjects_csv]');
  //   const b = document.querySelector('[name=boards_csv]');
  //   const c = document.querySelector('[name=classes_csv]');

  //   if(s) makeHiddenArray('subjects', s);
  //   if(b) makeHiddenArray('boards', b);
  //   if(c) makeHiddenArray('classes_tracks', c);
  // });

  form.addEventListener('submit', function(){

  // remove old hidden arrays every submit
  ['subjects','boards','classes_tracks'].forEach(name=>{
    form.querySelectorAll(`input[type="hidden"][data-hidden="${name}"]`).forEach(n=>n.remove());
  });

  // ✅ only academic -> create arrays
  if(category.value !== 'academic') return;

  const makeHiddenArray = (name, input) => {
    const arr = (input.value || '').split(',').map(s=>s.trim()).filter(Boolean);
    arr.forEach(v=>{
      const i=document.createElement('input');
      i.type='hidden';
      i.name=name+'[]';
      i.value=v;
      i.setAttribute('data-hidden', name);
      form.appendChild(i);
    });
  };

  const s = document.querySelector('[name=subjects_csv]');
  const b = document.querySelector('[name=boards_csv]');
  const c = document.querySelector('[name=classes_csv]');

  if(s) makeHiddenArray('subjects', s);
  if(b) makeHiddenArray('boards', b);
  if(c) makeHiddenArray('classes_tracks', c);
});

  // Copy payload (debug)
  document.getElementById('copyPayload')?.addEventListener('click', () => {
    const fd = new FormData(form);
    const payload = {};

    fd.forEach((v,k)=>{
      if(['subjects_csv','boards_csv','classes_csv','_method'].includes(k)) return;
      if(k.endsWith('[]')){
        const key = k.replace('[]','');
        payload[key] = payload[key] || [];
        payload[key].push(v);
      } else {
        payload[k] = v;
      }
    });

    navigator.clipboard.writeText(JSON.stringify(payload, null, 2));
    alert('Payload copied!');
  });

})();
</script>
@endsection
