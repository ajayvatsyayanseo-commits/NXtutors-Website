{{--
  TutorTwin on the homepage: the WhatsApp AI tutor, told as an advert.

  It sits under "Find a tutor for any subject, exam or skill", where somebody
  has just decided they want help and is choosing how: a tutor who visits, or
  a tutor in their pocket between classes. The two are partners, so nothing
  here competes with booking a demo.

  Left: the promise, three proof points, the live price, one clear action.
  Right: the product itself - a photographed question and the worked answer,
  the thing a parent has to see to believe. The example is real maths and its
  steps are correct; keep it that way if it is ever changed.

  Copy rules come from TutorTwin itself: it is an AI and never a person, the
  trial is paid (never "free trial"), no promise of perfect answers, and prices are
  one or none (App\Support\TutorTwin). Links carry UTM tags per placement.

  Links are absolute to the TutorTwin host, a separate application on its own
  subdomain - `url()` here would point back at this site.
--}}
@php
  // Live plans (App\Support\TutorTwin). Photos, PDFs and voice notes are on Pro
  // and the trial, not on Solo, so the photo promise is priced with Pro.
  $ttTrial = \App\Support\TutorTwin::trial();
  $ttTrialLabel = \App\Support\TutorTwin::trialLabel();
  $ttFrom = \App\Support\TutorTwin::fromPrice();
  $ttPhotoFrom = \App\Support\TutorTwin::fromPrice(true);
@endphp
<section class="section nx-twin" aria-labelledby="nxTwinTitle">
  <div class="nx-twin__hero">
    <div class="nx-twin__copy">
      <span class="nx-twin__eyebrow"><span class="nx-twin__live" aria-hidden="true"></span> New from NXTutors · Live on WhatsApp</span>
      <h2 class="nx-twin__title" id="nxTwinTitle">Stuck at 11pm? Send a photo. <span>Get the steps.</span></h2>
      <p class="nx-twin__lede">
        <strong>TutorTwin</strong> is an AI tutor on WhatsApp. Your child sends a question: typed,
        a photo of the homework, a PDF or a voice note. A step-by-step explanation comes back
        in seconds, in English, Hindi or Hinglish.
      </p>

      <ul class="nx-twin__points">
        <li><strong>Any hour</strong>, including the night before the exam</li>
        <li><strong>Photo, PDF or voice note in</strong>, worked steps out</li>
        <li><strong>Remembers</strong> what your child finds hard</li>
      </ul>

      <div class="nx-twin__cta">
        <a class="nx-twin__btn" href="{{ \App\Support\TutorTwin::link('/payment', 'home_section', $ttTrial ? 'trial' : 'start') }}" target="_blank" rel="noopener" data-nx-twin="{{ $ttTrial ? 'home_section_trial' : 'home_section_start' }}">
          {{ $ttTrialLabel ?? ('Start TutorTwin'.($ttFrom ? ' · from ₹'.number_format($ttFrom).'/month' : '')) }}
        </a>
        <a class="nx-twin__more" href="{{ \App\Support\TutorTwin::link('/', 'home_section', 'how_it_works') }}" target="_blank" rel="noopener" data-nx-twin="home_section_more">See plans and how it works →</a>
      </div>
      @if($ttTrial || $ttFrom)
        <p class="nx-twin__price">
          @if($ttTrial)
            {{ $ttTrial['answers'] }} answers{{ $ttTrial['photos'] ? ', photos included' : '' }}.
          @endif
          @if($ttFrom)
            {{ $ttTrial ? 'Then plans' : 'Plans' }} from ₹{{ number_format($ttFrom) }}/month{{
              $ttPhotoFrom === $ttFrom ? ', photos included'
              : ' for typed questions'.($ttPhotoFrom ? '; photos, PDFs and voice notes on Pro, from ₹'.number_format($ttPhotoFrom).'/month' : '')
            }}.
          @endif
        </p>
      @endif
      <p class="nx-twin__fine">
        No app to install. Maths, Physics, Chemistry, Biology, English, Computer Science, Social Science and Economics.
        It is an AI, so check important answers. Want a real teacher in the same chat?
        <a href="{{ \App\Support\TutorTwin::link('/humai-tutor', 'home_section', 'humanai') }}" target="_blank" rel="noopener">HumanAI tutoring</a>.
      </p>
    </div>

    {{-- The product, shown: a real question and a correct worked answer. --}}
    <figure class="nx-twin__phone" role="img" aria-label="A WhatsApp chat: a student sends a photo of 'Solve 2x² − 5x + 3 = 0' and TutorTwin replies with the steps, x = 3/2 or x = 1, then offers a similar question to practise.">
      <div class="nx-twin__bar"><span class="nx-twin__avatar">T</span><span><strong>TutorTwin</strong><small>AI tutor · online</small></span></div>
      <div class="nx-twin__chat" aria-hidden="true">
        <div class="nx-twin__msg nx-twin__msg--me">
          <div class="nx-twin__photo"><span>Q3.</span> Solve 2x² − 5x + 3 = 0</div>
          solve Q3 please
          <time>10:52 pm</time>
        </div>
        <div class="nx-twin__msg">
          <b>Step 1</b> a = 2, b = −5, c = 3<br>
          <b>Step 2</b> D = b² − 4ac = 25 − 24 = 1<br>
          <b>Step 3</b> x = (5 ± 1) ÷ 4<br>
          <b>So</b> x = 3/2 or x = 1 ✓<br>
          <span class="nx-twin__hint">Check: 2(1)² − 5(1) + 3 = 0</span>
          <time>10:52 pm</time>
        </div>
        <div class="nx-twin__msg nx-twin__msg--me">one more like this?<time>10:53 pm</time></div>
        <div class="nx-twin__msg">Try this one: 3x² − 7x + 2 = 0. Send me your first step 🙂<time>10:53 pm</time></div>
      </div>
    </figure>
  </div>

  {{--
    TutorTwin for teachers, told as its own advert. The picture carries the
    promise before a word is read: the teacher asleep at 11pm while the phone
    answers a student and flags the one who is stuck. Every claim below is a
    live feature of the teacher plan (TutorTwin /for-tutors, /public/tutor-plans):
    free sign-up, own students only, chats readable, replies marked as the
    teacher, stuck alerts, worksheet and lesson-plan tools, practice sent to a
    student, a Sunday report to parents. Not claimed: whole-class sends
    (cohort is off), or that NXTutors sends the teacher students.
  --}}
  @php $ttTeach = \App\Support\TutorTwin::teacherPlan(); @endphp
  <div class="nx-twin-t" role="group" aria-labelledby="nxTwinTeachTitle">
    <figure class="nx-twin-t__art" role="img" aria-label="Sketch: a teacher asleep at the desk at 11pm under the moon, while the phone shows TutorTwin answering a student's question and an alert that another student is stuck.">
      <svg viewBox="0 0 480 330" aria-hidden="true" focusable="false">
        <defs>
          <linearGradient id="ttSky" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#2B2A6E"/><stop offset="1" stop-color="#171338"/></linearGradient>
          <radialGradient id="ttLamp" cx=".5" cy=".5" r=".5"><stop offset="0" stop-color="#FFD37A" stop-opacity=".55"/><stop offset="1" stop-color="#FFD37A" stop-opacity="0"/></radialGradient>
          <linearGradient id="ttShirt" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#818CF8"/><stop offset="1" stop-color="#6D28D9"/></linearGradient>
        </defs>
        <rect x="6" y="6" width="468" height="318" rx="26" fill="url(#ttSky)"/>
        {{-- window, moon, stars --}}
        <g stroke="#C7D2FE" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" fill="none">
          <path d="M34 34 L182 31 L185 140 L37 143 Z" fill="#1E1B4B"/>
          <path d="M110 32 L111 141 M36 88 L184 86"/>
        </g>
        <circle cx="72" cy="62" r="15" fill="#FBBF24"/><circle cx="79" cy="57" r="13" fill="#1E1B4B"/>
        <g fill="#FDE68A"><circle cx="146" cy="52" r="2.2"/><circle cx="160" cy="110" r="1.8"/><circle cx="58" cy="118" r="1.6"/><circle cx="135" cy="118" r="2"/></g>
        <text x="130" y="72" font-family="'Segoe Print','Comic Sans MS',cursive" font-size="15" fill="#FDE68A">11 pm</text>
        {{-- lamp glow and lamp --}}
        <circle cx="92" cy="206" r="92" fill="url(#ttLamp)"/>
        <g stroke="#E9EDF5" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
          <path d="M70 252 L112 252" fill="none"/><path d="M92 252 L78 196 L104 166" fill="none"/>
          <path d="M92 150 L128 164 L112 186 Z" fill="#F59E0B"/>
        </g>
        {{-- desk --}}
        <path d="M22 256 Q180 250 340 256 L340 272 Q180 266 22 272 Z" fill="#7C4A2A" stroke="#E9EDF5" stroke-width="2.4" stroke-linejoin="round"/>
        <path d="M44 272 L40 318 M318 272 L322 318" stroke="#E9EDF5" stroke-width="2.4" stroke-linecap="round"/>
        {{-- worksheet under the arms, with hatch lines --}}
        <path d="M150 238 L262 230 L268 254 L154 262 Z" fill="#F8F5EC" stroke="#E9EDF5" stroke-width="2"/>
        <path d="M166 244 L240 239 M168 251 L226 247" stroke="#94A3B8" stroke-width="2" stroke-linecap="round"/>
        {{-- the teacher, asleep on folded arms --}}
        <g stroke="#E9EDF5" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
          <path d="M140 250 Q150 212 206 208 Q262 212 274 250 Z" fill="url(#ttShirt)"/>
          <ellipse cx="170" cy="242" rx="34" ry="13" fill="url(#ttShirt)"/>
          <ellipse cx="244" cy="242" rx="34" ry="13" fill="url(#ttShirt)"/>
          <circle cx="207" cy="208" r="27" fill="#F4C7A1"/>
          <path d="M180 204 Q182 176 210 178 Q238 180 236 206 Q226 190 206 194 Q190 196 180 204 Z" fill="#1E2233"/>
          <path d="M194 212 Q199 216 204 212 M212 212 Q217 216 222 212" fill="none"/>
          <path d="M203 224 Q208 226 213 224" fill="none"/>
        </g>
        <circle cx="194" cy="220" r="4" fill="#FB7185" opacity=".45"/><circle cx="222" cy="220" r="4" fill="#FB7185" opacity=".45"/>
        <text x="244" y="170" font-family="'Segoe Print','Comic Sans MS',cursive" font-size="22" fill="#C7D2FE">z</text>
        <text x="258" y="152" font-family="'Segoe Print','Comic Sans MS',cursive" font-size="17" fill="#C7D2FE">z</text>
        <text x="270" y="138" font-family="'Segoe Print','Comic Sans MS',cursive" font-size="13" fill="#C7D2FE">z</text>
        {{-- the phone, answering --}}
        <g stroke="#E9EDF5" stroke-width="2.6" stroke-linejoin="round">
          <rect x="332" y="38" width="124" height="232" rx="20" fill="#0B141A" transform="rotate(4 394 154)"/>
        </g>
        <g transform="rotate(4 394 154)" font-family="Manrope,system-ui,sans-serif">
          <rect x="344" y="56" width="100" height="24" rx="7" fill="#1F2C34"/>
          <circle cx="357" cy="68" r="7" fill="#6366F1"/>
          <text x="369" y="72" font-size="10.5" font-weight="700" fill="#E9EDF5">Your TutorTwin</text>
          <rect x="376" y="90" width="68" height="30" rx="8" fill="#005C4B"/>
          <text x="383" y="104" font-size="9.5" fill="#E9EDF5">Sir, Q5</text>
          <text x="383" y="115" font-size="9.5" fill="#E9EDF5">kaise karein?</text>
          <rect x="344" y="128" width="86" height="54" rx="8" fill="#202C33"/>
          <text x="351" y="142" font-size="9.5" font-weight="700" fill="#A5B4FC">Step 1</text>
          <path d="M351 150 H420 M351 159 H412 M351 168 H400" stroke="#8696A0" stroke-width="3" stroke-linecap="round"/>
          <path d="M428 124 l3 7 7 3 -7 3 -3 7 -3 -7 -7 -3 7 -3 z" fill="#FBBF24"/>
          <rect x="344" y="194" width="100" height="44" rx="9" fill="#F59E0B" stroke="#0B141A" stroke-width="1.5"/>
          <text x="352" y="210" font-size="10" font-weight="800" fill="#1F1300">🔔 Riya is stuck</text>
          <text x="352" y="226" font-size="9.5" font-weight="700" fill="#1F1300">Reply as you →</text>
        </g>
        {{-- a practice sheet on its way --}}
        <g transform="rotate(-10 300 90)" stroke="#E9EDF5" stroke-width="2" stroke-linejoin="round">
          <rect x="262" y="62" width="54" height="66" rx="5" fill="#EEF2FF"/>
          <path d="M270 78 H306 M270 88 H300 M270 98 H306 M270 108 H294" stroke="#818CF8" stroke-width="2.4" stroke-linecap="round"/>
        </g>
        <path d="M252 132 Q236 120 246 104" stroke="#C7D2FE" stroke-width="2" stroke-dasharray="4 5" fill="none" stroke-linecap="round"/>
      </svg>
    </figure>

    <div class="nx-twin-t__copy">
      <span class="nx-twin-t__eyebrow">TutorTwin for teachers · Free to sign up</span>
      <h3 class="nx-twin-t__title" id="nxTwinTeachTitle">An AI teaching assistant on WhatsApp that answers your students <span>while you sleep</span></h3>
      <p class="nx-twin-t__lede">
        Private tutors, home tutors and coaching teachers across India add the students they already teach.
        TutorTwin answers them round the clock in your teaching style, and you stay in charge of every chat.
      </p>

      <ul class="nx-twin-t__benefits">
        <li>
          <span class="nx-twin-t__ico" aria-hidden="true">🌙</span>
          <span><strong>Help at 11pm, not a missed doubt</strong>Photos, PDFs and voice notes answered step by step, 24x7.</span>
        </li>
        <li>
          <span class="nx-twin-t__ico" aria-hidden="true">🔔</span>
          <span><strong>You stay the teacher</strong>Read every chat, get an alert when a student is stuck, and reply from WhatsApp, marked as you.</span>
        </li>
        <li>
          <span class="nx-twin-t__ico" aria-hidden="true">📝</span>
          <span><strong>Studio tools</strong>Worksheets and lesson plans in seconds, practice sent to any student, and a report to parents every Sunday.</span>
        </li>
      </ul>

      <div class="nx-twin-t__cta">
        <a class="nx-twin-t__btn" href="{{ \App\Support\TutorTwin::link('/for-tutors', 'home_section', 'teachers') }}" target="_blank" rel="noopener" data-nx-twin="home_section_teachers">
          Sign up free as a teacher
        </a>
        <span class="nx-twin-t__proof">
          @if($ttTeach)
            {{ $ttTeach['seats'] }} student seats · plans from ₹{{ number_format($ttTeach['price']) }}/month
          @else
            Pay only when you pick a plan
          @endif
          · student numbers stay private
        </span>
      </div>
    </div>
  </div>
</section>
