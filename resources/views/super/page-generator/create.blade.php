@extends('super.layouts.app')
@section('title','Page Generator')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
  <div>
    <h3 class="mb-0">NXTutors Page Generator</h3>
    <small class="text-muted">Generate city / location / hyper-location pages with OG/Twitter + 9 schemas + 1800+ words</small>
  </div>
  <a href="{{ route('super.pagegen.index') }}" class="btn btn-outline-secondary">Generated Pages</a>
</div>

@if($errors->any())
  <div class="alert alert-danger">{{ $errors->first() }}</div>
@endif

<form id="pageGenForm" method="POST" action="{{ route('super.pagegen.store') }}" class="card border-0 shadow-sm">
  @csrf
  <div class="card-body">

    {{-- ===== Core Inputs ===== --}}
    <div class="d-flex align-items-center justify-content-between mb-2">
      <div class="fw-semibold">Core Page Inputs</div>
      <div class="text-muted small"><i class="bi bi-layers"></i> Layers</div>
    </div>

    <div class="row g-3">
      <!-- <div class="col-md-3">
        <label class="form-label">Country</label>
        <input name="country" class="form-control" value="India" required>
      </div> -->

      <div class="col-md-3">
        <label class="form-label">State</label>
        <input name="state" class="form-control" placeholder="Haryana" required>
      </div>

      <div class="col-md-3">
        <label class="form-label">City</label>
        <input name="city" class="form-control" placeholder="Gurugram" required>
      </div>

      <div class="col-md-3">
        <label class="form-label">Location (Sector/Area)</label>
        <input name="location" class="form-control" placeholder="Sector 56" required>
      </div>

      <div class="col-md-4">
        <label class="form-label">Hyper-Location (Society/Tower)</label>
        <input name="hyper_location" class="form-control" placeholder="Optional for Hyper-Location pages">
        <small class="text-muted">Only for Hyper-Location pages</small>
      </div>

      <div class="col-md-4">
        <label class="form-label">Page Type</label>
        <select name="page_type" class="form-select" required>
          <option value="location">Location Page (Sector/Area)</option>
          <option value="hyper">Hyper-Location Page (Society/Tower)</option>
          <option value="city">City Page</option>
        </select>
      </div>

      <div class="col-md-4">
        <label class="form-label">Service Mode</label>
        <select name="service_mode" class="form-select" required>
          <option value="home">Home</option>
          <option value="online">Online</option>
          <option value="institute">Institute</option>
        </select>
      </div>

      {{-- ================= CATEGORY (A / B) ================= --}}
  <div class="col-md-4">
    <label class="form-label">Category</label>
    <select name="category" id="categorySelect" class="form-select" required>
      <option value="academic" selected>Academic (School / Boards / Exams)</option>
      <option value="skill">Skill / Hobby (Yoga, Programming, Painting)</option>
    </select>
  </div>

  {{-- ================= SKILL FIELDS (B) ================= --}}
  <div class="col-md-4 d-none" id="skillNameBlock">
    <label class="form-label">Skill / Hobby</label>
    <input name="skill_name" class="form-control"
           placeholder="Yoga, Programming, Painting">
  </div>

  <div class="col-md-4 d-none" id="skillLevelBlock">
    <label class="form-label">Skill Level</label>
    <select name="skill_level" class="form-select">
      <option value="beginner">Beginner</option>
      <option value="intermediate">Intermediate</option>
      <option value="advanced">Advanced</option>
    </select>
  </div>

  {{-- ================= ACADEMIC FIELDS (A) ================= --}}
  <div class="col-md-4 academic-block">
    <label class="form-label">Subjects</label>
    <input name="subjects_csv" class="form-control" placeholder="Maths, Physics">
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
    <input name="boards_csv" class="form-control" placeholder="CBSE, ICSE">
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
          <input class="form-check-input" type="checkbox" name="is_premium" value="1" id="prem">
          <label class="form-check-label" for="prem">Premium Locality Flag (ShieldCheck)</label>
        </div>
      </div>

      <div class="col-md-5">
        <label class="form-label">Primary Keyword Override (optional)</label>
        <input name="primary_keyword" class="form-control" placeholder="best maths home tutor in Sector 56 Gurugram">
      </div>

      <div class="col-md-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select" required>
          <option value="published">Publish</option>
          <option value="draft">Draft</option>
        </select>
      </div>
    </div>

    {{-- ===== Advanced Controls ===== --}}
    <hr class="my-4">

    <div class="d-flex align-items-center justify-content-between mb-2">
      <div class="fw-semibold">Advanced Service & SEO Blocks <span class="text-muted">(Conditional)</span></div>
      <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#advancedBlock">
        Toggle
      </button>
    </div>

    <div id="advancedBlock" class="collapse show">
      <div class="row g-3">

        <div class="col-md-4">
          <label class="form-label">Content Depth (SEO + UX)</label>
          <select name="syllabus_depth" class="form-select">
            <option value="balanced">Balanced</option>
            <option value="light_overview">Light Overview</option>
            <option value="board_aligned_detailed">Board-Aligned Detailed</option>
            <option value="exam_oriented">Exam-Oriented</option>
          </select>
        </div>

        <div class="col-md-4">
          <label class="form-label">AI Intent Bias</label>
          <select name="intent_bias" class="form-select">
            <option value="balanced">Balanced</option>
            <option value="seo_first">SEO-First</option>
            <option value="conversion_first">Conversion-First</option>
            <option value="authority_first">Authority-First</option>
          </select>
        </div>

        <div class="col-md-4">
          <label class="form-label">Internal Linking Strategy</label>
          <select name="internal_linking" class="form-select">
            <option value="balanced">Balanced</option>
            <option value="conservative">Conservative</option>
            <option value="aggressive">Aggressive</option>
          </select>
        </div>

        <div class="col-md-4">
          <label class="form-label">Language Variant</label>
          <select name="language_variant" class="form-select">
            <option value="english_india">English (India tone)</option>
            <option value="english_us">English (US tone)</option>
            <option value="english_uk">English (UK tone)</option>
            <option value="international">International</option>
          </select>
        </div>

        <div class="col-md-4">
          <label class="form-label">Target Words</label>
          <input type="number" min="800" max="2600" name="target_words" class="form-control" value="1800">
          <small class="text-muted">Recommended: 1800–2200</small>
        </div>

        <div class="col-md-4">
          <label class="form-label">Schema Stack (Override)</label>
          <input type="text" class="form-control" value="WebPage, LocalBusiness, EducationalOrganization, Service, Course, Person, Offer, FAQPage, BreadcrumbList" readonly>
          <small class="text-muted">Schemas are generated by Laravel (not AI)</small>
        </div>

        <div class="col-12">
          <div class="p-3 bg-light rounded-3 border">
            <div class="fw-semibold mb-2">Local Context Enrichment (DB-driven)</div>
            <div class="d-flex flex-wrap gap-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="local_blocks[]" value="nearby_schools" id="lb1" checked>
                <label class="form-check-label" for="lb1">Nearby schools</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="local_blocks[]" value="exam_centers" id="lb2" checked>
                <label class="form-check-label" for="lb2">Nearby exam centers</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="local_blocks[]" value="area_pain_points" id="lb3" checked>
                <label class="form-check-label" for="lb3">Area-specific pain points</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="local_blocks[]" value="parent_demographics" id="lb4" checked>
                <label class="form-check-label" for="lb4">Parent/student demographics</label>
              </div>
            </div>
            <small class="text-muted d-block mt-2">
              These blocks should be filled from your DB (schools/locations/blogs). AI will not invent names.
            </small>
          </div>
        </div>

      </div>
    </div>

    <hr class="my-4">

    <div class="d-flex align-items-center justify-content-between">
      <div>
        <span class="badge bg-success-subtle text-success border border-success-subtle">Ready to Generate</span>
        <small class="text-muted ms-2">Target: 1800+ words • 9 schemas • OG/Twitter enabled</small>
      </div>

      <div class="d-flex gap-2">
        <button type="button" id="copyPayload" class="btn btn-outline-secondary">
          Copy Payload
        </button>
        <button class="btn btn-dark">
          Generate Page
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
    if(category.value === 'skill'){
      academicBlocks.forEach(el=>el.classList.add('d-none'));
      skillName.classList.remove('d-none');
      skillLevel.classList.remove('d-none');
    } else {
      academicBlocks.forEach(el=>el.classList.remove('d-none'));
      skillName.classList.add('d-none');
      skillLevel.classList.add('d-none');
    }
  }
  category.addEventListener('change', toggleCategory);
  toggleCategory();


  // chip click -> add to csv input
  document.querySelectorAll('.chip').forEach(btn => {
    btn.addEventListener('click', () => {
      const target = document.querySelector(`[name="${btn.dataset.target}"]`);
      const val = btn.dataset.value;
      const list = (target.value || '').split(',').map(s=>s.trim()).filter(Boolean);
      if(!list.includes(val)) list.push(val);
      target.value = list.join(', ');
      btn.classList.remove('btn-outline-dark');
      btn.classList.add('btn-dark');
    });
  });

  // Convert CSV fields to arrays before submit
  form.addEventListener('submit', function(e){
    const makeHiddenArray = (name, input) => {
      // remove previous
      form.querySelectorAll(`input[type="hidden"][data-hidden="${name}"]`).forEach(n=>n.remove());
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
    makeHiddenArray('subjects', document.querySelector('[name=subjects_csv]'));
    makeHiddenArray('boards', document.querySelector('[name=boards_csv]'));
    makeHiddenArray('classes_tracks', document.querySelector('[name=classes_csv]'));
  });

  // Copy payload (debug)
  document.getElementById('copyPayload').addEventListener('click', () => {
    const fd = new FormData(form);
    // Remove CSV helper fields from copied payload
    const payload = {};
    fd.forEach((v,k)=>{
      if(['subjects_csv','boards_csv','classes_csv'].includes(k)) return;
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
