{{--
  "AI-first tutoring, with real teachers": how NXTutors uses AI, and where
  people take over. Sits just above the FAQs.

  Why it exists: parents are wary of "AI", and Google rewards pages that
  explain plainly how something works and who is accountable (helpful
  content, E-E-A-T). The approved claim is "AI-first tutoring, with real
  teachers" - never "India's first AI tutoring platform", which cannot be
  proved (ASCI, CCPA 2022 guidelines, Google Ads misrepresentation policy).

  Every card is a feature that is live today: AI matching (TutorSearchService
  ranking), the NXT AI assistant, TutorTwin, and the WhatsApp Ref hand-off.
  Colour roles: indigo is AI; the teacher side is warm; links are blue.
--}}
@php
  $afTrial = \App\Support\TutorTwin::trialLabel();
@endphp
<section class="section nx-aif" aria-labelledby="nxAifTitle">
  <div class="nx-aif__bloom" aria-hidden="true"></div>

  <div class="nx-aif__head">
    <div class="nx-aif__intro">
      <span class="nx-aif__eyebrow">How NXTutors uses AI</span>
      <h2 class="nx-aif__title" id="nxAifTitle">AI-first tutoring, <span>with real teachers</span></h2>
      <p class="nx-aif__lede">
        AI does the slow parts of finding and supporting a tutor: shortlisting the right teacher,
        answering questions at any hour, helping with homework at night. Verified teachers do the
        part that matters, teaching your child.
      </p>
    </div>

    <figure class="nx-aif__art" role="img" aria-label="Illustration: Nix, the friendly NXT AI robot in a graduation cap, waving next to a smiling teacher holding a book, with a spark between them: AI and a real teacher working together.">
      <div class="nx-aif__pair" aria-hidden="true">
        @include('partials.ai-mascot', ['size' => 150, 'wave' => true])
        <svg class="nx-aif__spark" viewBox="0 0 60 60" width="54" height="54"><path d="M30 4 l7 17 17 7 -17 7 -7 17 -7 -17 -17 -7 17 -7 z" fill="#FBBF24"/><circle cx="30" cy="30" r="6" fill="#FFF7E0"/></svg>
        <svg class="nx-aif__teacher" viewBox="0 0 170 210" width="150" height="186">
          <defs><linearGradient id="aifT" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#FBBF24"/><stop offset="1" stop-color="#F97316"/></linearGradient></defs>
          <circle cx="85" cy="112" r="82" fill="#F59E0B" opacity=".16"/>
          <g stroke="#FFF7E0" stroke-width="3" stroke-linejoin="round" stroke-linecap="round">
            <path d="M34 206 Q36 150 85 142 Q134 150 136 206 Z" fill="url(#aifT)"/>
            <path d="M52 64 Q50 26 86 24 Q122 26 120 66 Q124 96 110 104 L62 104 Q46 96 52 64 Z" fill="#6B3F2A"/>
            <circle cx="85" cy="78" r="30" fill="#F4C7A1"/>
            <path d="M58 70 Q70 44 98 50 Q112 54 114 70 Q98 60 80 64 Q66 66 58 70 Z" fill="#6B3F2A"/>
            <path d="M72 80 Q76 84 80 80 M90 80 Q94 84 98 80" fill="none"/>
            <path d="M78 94 Q85 100 92 94" fill="none"/>
            <rect x="72" y="150" width="54" height="40" rx="4" fill="#EEF2FF" transform="rotate(-8 99 170)"/>
            <path d="M99 150 L96 190" stroke="#818CF8" transform="rotate(-8 99 170)"/>
          </g>
          <ellipse cx="68" cy="90" rx="6" ry="3.5" fill="#FB7185" opacity=".5"/><ellipse cx="102" cy="90" rx="6" ry="3.5" fill="#FB7185" opacity=".5"/>
          <path d="M104 162 H118 M104 170 H116" stroke="#818CF8" stroke-width="2.5" stroke-linecap="round" transform="rotate(-8 99 170)"/>
        </svg>
      </div>
      <figcaption class="nx-aif__caption"><span>Nix, NXT AI</span><span>Your child's teacher</span></figcaption>
    </figure>
  </div>

  <ul class="nx-aif__cards">
    <li class="nx-aif__card">
      <svg class="nx-aif__ico" viewBox="0 0 64 64" aria-hidden="true"><circle cx="16" cy="22" r="8" fill="#818CF8"/><circle cx="32" cy="18" r="9" fill="#A5B4FC"/><circle cx="48" cy="22" r="8" fill="#818CF8"/><circle cx="36" cy="40" r="11" fill="none" stroke="#FBBF24" stroke-width="4"/><path d="M44 48 L54 58" stroke="#FBBF24" stroke-width="5" stroke-linecap="round"/><path d="M31 40 l4 4 7-8" stroke="#34C77B" stroke-width="3.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <h3>AI tutor matching</h3>
      <p>Tell us the subject, class and area. The AI ranks verified tutors by subject, board and how close they are, and returns two or three, not a long list to scroll.</p>
      <a class="nx-aif__link" href="{{ route('tutors.index') }}">Find a tutor near you</a>
    </li>
    <li class="nx-aif__card">
      <div class="nx-aif__ico nx-aif__ico--mascot" aria-hidden="true">@include('partials.ai-mascot', ['size' => 56])</div>
      <h3>NXT AI assistant</h3>
      <p>Fees, timings, demo classes, which board suits your child: ask on any page and get an answer in seconds, day or night.</p>
      <a class="nx-aif__link" href="#nxAskAISection">Ask NXT AI</a>
    </li>
    <li class="nx-aif__card">
      <svg class="nx-aif__ico" viewBox="0 0 64 64" aria-hidden="true"><rect x="16" y="4" width="32" height="56" rx="8" fill="#0B141A" stroke="#E0E7FF" stroke-width="2.5"/><rect x="21" y="12" width="22" height="14" rx="3" fill="#F8F5EC"/><path d="M24 17 H38 M24 21 H34" stroke="#94A3B8" stroke-width="2" stroke-linecap="round"/><rect x="21" y="30" width="22" height="20" rx="4" fill="#4F46E5"/><path d="M25 36 H39 M25 41 H36 M25 46 H33" stroke="#E0E7FF" stroke-width="2" stroke-linecap="round"/><path d="M52 10 l2 5 5 2 -5 2 -2 5 -2-5 -5-2 5-2z" fill="#FBBF24"/></svg>
      <h3>TutorTwin on WhatsApp</h3>
      <p>Homework help 24x7: your child sends a photo of the question and gets the steps back, in English, Hindi or Hinglish.</p>
      <a class="nx-aif__link" href="{{ \App\Support\TutorTwin::link('/', 'ai_first_section', 'card') }}" target="_blank" rel="noopener">{{ $afTrial ?? 'See TutorTwin' }}</a>
    </li>
    <li class="nx-aif__card">
      <svg class="nx-aif__ico" viewBox="0 0 64 64" aria-hidden="true"><path d="M6 12 h30 a6 6 0 0 1 6 6 v12 a6 6 0 0 1-6 6 H18 l-8 7 v-7 H6 a6 6 0 0 1-6-6 V18 a6 6 0 0 1 6-6z" fill="#4F46E5" transform="translate(2 0)"/><path d="M14 22 H34 M14 28 H28" stroke="#E0E7FF" stroke-width="2.5" stroke-linecap="round"/><path d="M34 44 q10-2 12-12" stroke="#FBBF24" stroke-width="3" fill="none" stroke-dasharray="3 4" stroke-linecap="round"/><circle cx="50" cy="46" r="12" fill="#25D366"/><path d="M45 46 l3.5 3.5 7-7" stroke="#06301a" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <h3>No repeating yourself</h3>
      <p>Move from the website to WhatsApp and our team already knows the tutors you compared and what you asked NXT AI, so you never explain twice.</p>
    </li>
  </ul>

  <div class="nx-aif__people">
    <div class="nx-aif__people-head">
      <svg viewBox="0 0 48 48" width="44" height="44" aria-hidden="true"><circle cx="24" cy="24" r="22" fill="rgba(52,199,123,.16)" stroke="#34C77B" stroke-width="2"/><path d="M15 25 l6 6 12-13" stroke="#34C77B" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <h3>Where AI stops and people start</h3>
    </div>
    <ul>
      <li><strong>A person verifies every real tutor</strong>, and sample profiles are clearly marked as samples.</li>
      <li><strong>The free demo class decides</strong>, not an algorithm: you meet the tutor before you commit.</li>
      <li><strong>Teachers set the plan</strong> and have the final say on how your child learns.</li>
      <li><strong>The AI can make mistakes</strong>, and we say so. Check important answers with the teacher.</li>
    </ul>
  </div>
</section>
