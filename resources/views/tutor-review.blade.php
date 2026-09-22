@include('include.header')
@php
  use App\Support\ReviewOptions;
  $tutorImg = !empty($teacher->avatar)
    ? (str_starts_with($teacher->avatar, 'http') ? $teacher->avatar : asset('storage/user/'.$teacher->avatar))
    : asset('frount/assets/images/tutor1.jpg');
  $stars = ['rating' => 'Overall'] + ReviewOptions::SCORES;
@endphp
<style>
.rv-page{padding:clamp(28px,5vw,72px) 16px;}
.rv-wrap{max-width:1120px;margin:auto;display:grid;grid-template-columns:minmax(0,1fr) minmax(340px,600px);gap:clamp(22px,4vw,44px);align-items:start;}
.rv-side{position:sticky;top:24px;display:grid;gap:18px;}
.rv-panel{padding:clamp(18px,3vw,26px);border-radius:22px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);box-shadow:0 24px 70px rgba(0,0,0,.28);}
.rv-tutor{display:flex;gap:16px;align-items:center;}
.rv-tutor img{width:84px;height:84px;border-radius:18px;object-fit:cover;flex:0 0 auto;border:1px solid rgba(255,255,255,.18);}
.rv-tutor h1{color:#fff;font-size:clamp(22px,3vw,30px);line-height:1.15;margin:0 0 6px;}
.rv-tutor p{color:#cbd5e1;margin:0;font-size:14px;line-height:1.5;}
.rv-link{display:inline-block;margin-top:10px;color:#38bdf8;font-weight:700;font-size:14px;text-decoration:none;}
.rv-steps{list-style:none;margin:0;padding:0;display:grid;gap:12px;counter-reset:rv;}
.rv-steps li{position:relative;padding-left:40px;color:#e2e8f0;font-size:14px;line-height:1.5;}
.rv-steps li::before{counter-increment:rv;content:counter(rv);position:absolute;left:0;top:0;width:28px;height:28px;border-radius:50%;background:rgba(251,191,36,.16);color:#fbbf24;font-weight:800;display:grid;place-items:center;font-size:13px;}
.rv-side h2,.rv-card h2{color:#fff;font-size:18px;margin:0 0 12px;}
.rv-card{padding:clamp(20px,4vw,34px);border-radius:26px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);box-shadow:0 24px 70px rgba(0,0,0,.28);}
.rv-sec{padding:18px 0;border-top:1px solid rgba(255,255,255,.1);}
.rv-sec:first-of-type{border-top:0;padding-top:0;}
.rv-sec h3{color:#fff;font-size:16px;margin:0 0 12px;}
.rv-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px;}
.rv-full{grid-column:1/-1;}
.rv-card label.rv-l{display:block;color:#cbd5e1;font-size:13px;font-weight:600;margin-bottom:6px;}
.rv-card input[type=text],.rv-card input[type=email],.rv-card select,.rv-card textarea{width:100%;border:1px solid rgba(255,255,255,.1);outline:0;border-radius:14px;background:rgba(255,255,255,.09);color:#fff;padding:12px 14px;font-size:15px;}
.rv-card select option{color:#111827;}
.rv-card textarea{min-height:140px;resize:vertical;line-height:1.6;}
.rv-card input:focus,.rv-card select:focus,.rv-card textarea:focus{border-color:#fbbf24;box-shadow:0 0 0 3px rgba(251,191,36,.14);}
.rv-card ::placeholder{color:#94a3b8;}
.rv-seg{display:flex;gap:8px;flex-wrap:wrap;}
.rv-seg label,.rv-chip{cursor:pointer;user-select:none;}
.rv-seg input,.rv-chip input{position:absolute;opacity:0;pointer-events:none;}
.rv-seg span,.rv-chip span{display:inline-block;padding:9px 14px;border-radius:999px;border:1px solid rgba(255,255,255,.18);color:#e2e8f0;font-size:14px;font-weight:600;transition:.15s;}
.rv-seg input:checked + span,.rv-chip input:checked + span{background:#fbbf24;border-color:#fbbf24;color:#111827;}
.rv-seg input:focus-visible + span,.rv-chip input:focus-visible + span{outline:2px solid #38bdf8;outline-offset:2px;}
.rv-chips{display:flex;flex-wrap:wrap;gap:8px;}
.rv-stars-row{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:8px 0;}
.rv-stars-row .rv-name{color:#e2e8f0;font-size:14px;font-weight:700;}
.rv-stars-row.rv-overall .rv-name{font-size:16px;color:#fff;}
.star-rating{direction:rtl;display:inline-flex;gap:4px;font-size:28px;}
.rv-overall .star-rating{font-size:34px;}
.star-rating input{position:absolute;opacity:0;pointer-events:none;}
.star-rating label{cursor:pointer;color:rgba(255,255,255,.22);transition:.15s;line-height:1;}
.star-rating label::before{content:'★';}
.star-rating input:checked ~ label,.star-rating label:hover,.star-rating label:hover ~ label{color:#fbbf24;}
.star-rating input:focus-visible + label{outline:2px solid #38bdf8;border-radius:4px;}
.rv-hint{color:#94a3b8;font-size:12px;margin-top:6px;}
.rv-count{float:right;}
.rv-photo{display:flex;align-items:center;gap:14px;}
.rv-photo img{width:64px;height:64px;border-radius:50%;object-fit:cover;border:1px solid rgba(255,255,255,.2);}
.rv-photo input{color:#cbd5e1;font-size:14px;}
.rv-consent{display:flex;gap:10px;align-items:flex-start;color:#cbd5e1;font-size:14px;line-height:1.5;}
.rv-consent input{margin-top:4px;width:18px;height:18px;flex:0 0 auto;}
.rv-hp{position:absolute;left:-9999px;width:1px;height:1px;overflow:hidden;}
.rv-btn{width:100%;height:54px;border:0;border-radius:16px;background:#fbbf24;color:#111827;font-weight:800;font-size:16px;cursor:pointer;margin-top:18px;}
.rv-btn[disabled]{opacity:.6;cursor:wait;}
.rv-msg{margin-bottom:14px;}
.rv-err{color:#fca5a5;font-size:13px;margin-top:6px;}
.rv-done{text-align:center;padding:24px 8px;}
.rv-done h2{font-size:24px;}
.rv-done p{color:#cbd5e1;line-height:1.6;}
@media(max-width:992px){.rv-wrap{grid-template-columns:1fr;max-width:680px;}.rv-side{position:static;}}
@media(max-width:576px){.rv-grid{grid-template-columns:1fr;}.rv-card{border-radius:20px;padding:20px 14px;}.star-rating{font-size:26px;}.rv-overall .star-rating{font-size:30px;}}
</style>

<section class="rv-page">
  <div class="rv-wrap">

    <aside class="rv-side">
      <div class="rv-panel">
        <div class="rv-tutor">
          <img src="{{ $tutorImg }}" alt="{{ $teacher->name }}" onerror="this.src='{{ asset('frount/assets/images/tutor1.jpg') }}'">
          <div>
            <h1>Review {{ $teacher->name }}</h1>
            <p>
              {{ $subjects ? implode(', ', array_slice($subjects, 0, 4)) : 'Tutor' }}
              @if($teacher->city) · {{ $teacher->city }} @endif
            </p>
            @if($publicUrl)
              <a class="rv-link" href="{{ $publicUrl }}">View full profile →</a>
            @endif
          </div>
        </div>
      </div>

      <div class="rv-panel">
        <h2>How reviews are checked</h2>
        <ol class="rv-steps">
          <li>You share your experience with {{ $teacher->name }}.</li>
          @if($verifyEmail)
            <li>You confirm your email address from the link we send you.</li>
          @endif
          <li>Our team checks every review before it is published.</li>
          <li>It appears on the tutor's profile, helping other families choose.</li>
        </ol>
      </div>
    </aside>

    <div class="rv-card">
      <div id="rvMsg" class="rv-msg" role="status" aria-live="polite"></div>

      <form id="rvForm" method="POST" action="{{ route('feedback') }}" enctype="multipart/form-data" novalidate>
        @csrf
        <input type="hidden" name="user_id" value="{{ $teacher->user_id }}">
        <div class="rv-hp" aria-hidden="true">
          <label>Leave this empty <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
        </div>

        <div class="rv-sec">
          <h3>About you</h3>
          <div class="rv-grid">
            <div>
              <label class="rv-l" for="rvName">Your name</label>
              <input type="text" id="rvName" name="name" maxlength="80" autocomplete="name" placeholder="e.g. Priya Sharma" required>
            </div>
            <div>
              <label class="rv-l" for="rvEmail">Email address</label>
              <input type="email" id="rvEmail" name="email" maxlength="191" autocomplete="email" placeholder="you@example.com" required>
              <div class="rv-hint">Never shown publicly.@if($verifyEmail) We will send a link to confirm it.@endif</div>
            </div>
            <div class="rv-full">
              <span class="rv-l">I am a</span>
              <div class="rv-seg" role="radiogroup">
                @foreach(ReviewOptions::ROLES as $key => $label)
                  <label><input type="radio" name="reviewer_role" value="{{ $key }}" @checked($loop->first) required><span>{{ $label }}</span></label>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        <div class="rv-sec">
          <h3>Your ratings</h3>
          @foreach($stars as $field => $label)
            <div class="rv-stars-row {{ $field === 'rating' ? 'rv-overall' : '' }}">
              <span class="rv-name" id="lbl-{{ $field }}">{{ $label }}</span>
              <div class="star-rating" role="radiogroup" aria-labelledby="lbl-{{ $field }}">
                @for($s = 5; $s >= 1; $s--)
                  <input type="radio" id="{{ $field }}{{ $s }}" name="{{ $field }}" value="{{ $s }}" required>
                  <label for="{{ $field }}{{ $s }}" title="{{ $s }} star{{ $s > 1 ? 's' : '' }}"><span class="visually-hidden" style="position:absolute;left:-9999px;">{{ $s }} stars</span></label>
                @endfor
              </div>
            </div>
          @endforeach
        </div>

        <div class="rv-sec">
          <h3>Your classes</h3>
          <div class="rv-grid">
            <div>
              <label class="rv-l" for="rvSubject">Subject</label>
              <select id="rvSubject" name="subject_pick" required>
                <option value="">Choose a subject</option>
                @foreach($subjects as $s)
                  <option value="{{ $s }}">{{ $s }}</option>
                @endforeach
                <option value="__other">Other</option>
              </select>
              <input type="text" id="rvSubjectOther" maxlength="120" placeholder="Type the subject" style="margin-top:8px;" hidden>
              <input type="hidden" name="subject" id="rvSubjectValue">
            </div>
            <div>
              <label class="rv-l" for="rvBoard">Board / exam</label>
              <select id="rvBoard" name="board" required>
                <option value="">Choose</option>
                @foreach(ReviewOptions::BOARDS as $key => $label)
                  <option value="{{ $key }}">{{ $label }}</option>
                @endforeach
              </select>
            </div>
            <div>
              <label class="rv-l" for="rvClass">Class</label>
              <select id="rvClass" name="class_level" required>
                <option value="">Choose</option>
                @foreach(ReviewOptions::CLASSES as $key => $label)
                  <option value="{{ $key }}">{{ $label }}</option>
                @endforeach
              </select>
            </div>
            <div>
              <label class="rv-l" for="rvDuration">How long with this tutor</label>
              <select id="rvDuration" name="duration" required>
                <option value="">Choose</option>
                @foreach(ReviewOptions::DURATIONS as $key => $label)
                  <option value="{{ $key }}">{{ $label }}</option>
                @endforeach
              </select>
            </div>
            <div class="rv-full">
              <span class="rv-l">Mode of classes</span>
              <div class="rv-seg" role="radiogroup">
                @foreach(ReviewOptions::MODES as $key => $label)
                  <label><input type="radio" name="mode" value="{{ $key }}" required><span>{{ $label }}</span></label>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        <div class="rv-sec">
          <h3>What stood out? <span class="rv-hint" style="font-weight:400;">Pick up to {{ ReviewOptions::MAX_TAGS }}</span></h3>
          <div class="rv-chips" id="rvTags">
            @foreach(ReviewOptions::TAGS as $key => $label)
              <label class="rv-chip"><input type="checkbox" name="tags[]" value="{{ $key }}"><span>{{ $label }}</span></label>
            @endforeach
          </div>
        </div>

        <div class="rv-sec">
          <h3>Your review</h3>
          <label class="rv-l" for="rvMessage">Tell other families about your experience <span class="rv-count" id="rvCount">0 / 2000</span></label>
          <textarea id="rvMessage" name="message" minlength="50" maxlength="2000" required
            placeholder="What was difficult before, how the classes helped, and what changed — marks, confidence, exam results…"></textarea>
          <div class="rv-hint">At least 50 characters. Please don't include phone numbers.</div>
        </div>

        <div class="rv-sec">
          <h3>Your photo <span class="rv-hint" style="font-weight:400;">Optional</span></h3>
          <div class="rv-photo">
            <img id="rvPhotoPreview" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="" hidden>
            <input type="file" id="rvPhoto" name="photo" accept="image/jpeg,image/png,image/webp">
          </div>
          <div class="rv-hint">JPG, PNG or WebP, up to 3 MB. Shown next to your review.</div>
        </div>

        <div class="rv-sec">
          <label class="rv-consent">
            <input type="checkbox" name="consent" value="1" required>
            <span>This review is about my own (or my child's) experience with {{ $teacher->name }}, and I agree to it being shown on NXTutors with my first name and photo.</span>
          </label>
          <button type="submit" class="rv-btn" id="rvSubmit">Submit review</button>
        </div>
      </form>
    </div>

  </div>
</section>

@include('include.footer')

<script>
(function () {
  var form = document.getElementById('rvForm');
  var msg = document.getElementById('rvMsg');
  var submit = document.getElementById('rvSubmit');
  var subject = document.getElementById('rvSubject');
  var subjectOther = document.getElementById('rvSubjectOther');
  var subjectValue = document.getElementById('rvSubjectValue');
  var message = document.getElementById('rvMessage');
  var count = document.getElementById('rvCount');
  var photo = document.getElementById('rvPhoto');
  var preview = document.getElementById('rvPhotoPreview');
  var maxTags = {{ ReviewOptions::MAX_TAGS }};
  var backLink = @json($publicUrl ? ['url' => $publicUrl, 'name' => $teacher->name] : null);

  function escapeHtml(s) {
    return String(s).replace(/[&<>"']/g, function (c) {
      return {'&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;'}[c];
    });
  }
  function show(kind, text) {
    msg.innerHTML = '<div class="alert alert-' + kind + '">' + text + '</div>';
    msg.scrollIntoView({behavior: 'smooth', block: 'center'});
  }

  subject.addEventListener('change', function () {
    subjectOther.hidden = subject.value !== '__other';
    if (!subjectOther.hidden) subjectOther.focus();
  });

  message.addEventListener('input', function () {
    count.textContent = message.value.length + ' / 2000';
  });

  document.getElementById('rvTags').addEventListener('change', function (e) {
    var checked = this.querySelectorAll('input:checked');
    if (checked.length > maxTags) {
      e.target.checked = false;
      show('warning', 'You can pick up to ' + maxTags + ' tags.');
    }
  });

  photo.addEventListener('change', function () {
    var file = photo.files && photo.files[0];
    if (!file) { preview.hidden = true; return; }
    if (file.size > {{ (int) config('reviews.photo_max_kb') }} * 1024) {
      photo.value = ''; preview.hidden = true;
      show('warning', 'That photo is larger than 3 MB. Please choose a smaller one.');
      return;
    }
    preview.src = URL.createObjectURL(file);
    preview.hidden = false;
  });

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    subjectValue.value = subject.value === '__other' ? subjectOther.value.trim() : subject.value;

    var problems = [];
    if (!document.getElementById('rvName').value.trim()) problems.push('your name');
    if (!/^\S+@\S+\.\S+$/.test(document.getElementById('rvEmail').value.trim())) problems.push('a valid email address');
    ['rating', 'expertise', 'patience', 'reliability', 'communication'].forEach(function (f) {
      if (!form.querySelector('input[name="' + f + '"]:checked')) problems.push('a star rating for ' + (f === 'rating' ? 'overall' : f));
    });
    if (!subjectValue.value) problems.push('the subject');
    if (!form.board.value) problems.push('the board');
    if (!form.class_level.value) problems.push('the class');
    if (!form.duration.value) problems.push('how long you studied');
    if (!form.querySelector('input[name="mode"]:checked')) problems.push('the mode of classes');
    if (message.value.trim().length < 50) problems.push('a review of at least 50 characters');
    if (!form.consent.checked) problems.push('the confirmation checkbox');
    if (problems.length) {
      show('danger', 'Please add ' + problems.join(', ') + '.');
      return;
    }

    submit.disabled = true;
    submit.textContent = 'Submitting…';

    fetch(form.action, {
      method: 'POST',
      body: new FormData(form),
      headers: {'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest'}
    })
      .then(function (res) { return res.json().then(function (body) { return {ok: res.ok, status: res.status, body: body}; }); })
      .then(function (r) {
        if (r.ok) {
          form.parentNode.innerHTML =
            '<div class="rv-done"><h2>Thank you!</h2><p>' + escapeHtml(r.body.message) + '</p>' +
            (backLink ? '<a class="rv-link" href="' + escapeHtml(backLink.url) + '">Back to ' + escapeHtml(backLink.name) + '\'s profile →</a>' : '') +
            '</div>';
          return;
        }
        var text = (r.body && r.body.message) || 'Something went wrong. Please try again.';
        if (r.status === 422 && r.body && r.body.errors) {
          text = Object.keys(r.body.errors).map(function (k) { return r.body.errors[k][0]; }).join('<br>');
          text = escapeHtml(text).replace(/&lt;br&gt;/g, '<br>');
        } else if (r.status === 429) {
          text = 'Too many attempts. Please wait a minute and try again.';
        } else {
          text = escapeHtml(text);
        }
        show('danger', text);
        submit.disabled = false;
        submit.textContent = 'Submit review';
      })
      .catch(function () {
        show('danger', 'Could not reach the server. Please check your connection and try again.');
        submit.disabled = false;
        submit.textContent = 'Submit review';
      });
  });
})();
</script>
