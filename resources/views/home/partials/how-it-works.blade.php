{{--
  How it works: three steps, each with its own drawing, joined by a dashed
  path so the eye reads left to right as one journey. Replaces "How NXTutors
  finds the right tutor", which said the same as the AI-first section.

  Every promise here is already the site's own: two or three matches, the
  first class a free demo, switching tutor free, verified tutors, board and
  exam alignment. The matching step is the AI colour (indigo, with Nix);
  the people steps are warm.
--}}
<section class="section nx-how" aria-labelledby="nxHowTitle">
  <div class="section-head">
    <span class="nx-how__eyebrow">How it works</span>
    <h2 class="section-title" id="nxHowTitle">The right tutor in three steps, the first class free</h2>
    <p class="section-subtitle">No long lists to sift through. We check subject, board, location, timing and budget, and you meet the tutor before you decide.</p>
  </div>

  <ol class="nx-how__steps">
    <li class="nx-how__step" style="--hw:#F59E0B">
      <figure class="nx-how__art" aria-hidden="true">
        <svg viewBox="0 0 240 150">
          <ellipse cx="120" cy="140" rx="80" ry="6" fill="#000" opacity=".25"/>
          <circle cx="190" cy="34" r="30" fill="#F59E0B" opacity=".14"/>
          <g stroke="#EEF2F9" stroke-width="2.2" stroke-linejoin="round" stroke-linecap="round">
            <path d="M52 136 Q54 98 84 94 Q114 98 116 136 Z" fill="#B45309"/>
            <circle cx="84" cy="70" r="18" fill="#F4C7A1"/>
            <path d="M66 66 Q68 48 86 50 Q102 52 102 66 Q92 58 80 60 Q72 60 66 66 Z" fill="#3F2A1E"/>
            <rect x="126" y="40" width="64" height="100" rx="12" fill="#0B141A"/>
          </g>
          <g font-family="Manrope,system-ui,sans-serif" font-weight="800" font-size="10">
            <rect x="134" y="54" width="48" height="16" rx="8" fill="#FBBF24"/><text x="158" y="65" text-anchor="middle" fill="#1F1300">Maths</text>
            <rect x="134" y="76" width="48" height="16" rx="8" fill="#FDE68A"/><text x="158" y="87" text-anchor="middle" fill="#1F1300">Class 10</text>
            <rect x="134" y="98" width="48" height="16" rx="8" fill="#FED7AA"/><text x="158" y="109" text-anchor="middle" fill="#1F1300">Sector 56</text>
          </g>
          <path d="M106 108 L128 100" stroke="#F4C7A1" stroke-width="6" stroke-linecap="round"/>
        </svg>
      </figure>
      <span class="nx-how__no">1</span>
      <h3>Tell us what your child needs</h3>
      <p>Subject, class and your area, in the search above or on WhatsApp. It takes a minute.</p>
    </li>

    <li class="nx-how__step nx-how__step--ai" style="--hw:#818CF8">
      <figure class="nx-how__art" aria-hidden="true">
        <svg viewBox="0 0 240 150">
          <ellipse cx="120" cy="140" rx="84" ry="6" fill="#000" opacity=".25"/>
          <circle cx="50" cy="30" r="30" fill="#6366F1" opacity=".18"/>
          <g stroke="#EEF2F9" stroke-width="2" stroke-linejoin="round">
            <rect x="96" y="30" width="56" height="74" rx="10" fill="#1E1B4B"/>
            <rect x="160" y="42" width="52" height="68" rx="10" fill="#1E1B4B"/>
            <rect x="36" y="42" width="52" height="68" rx="10" fill="#1E1B4B"/>
          </g>
          <circle cx="124" cy="56" r="14" fill="#F4C7A1"/><rect x="108" y="76" width="32" height="6" rx="3" fill="#A5B4FC"/><rect x="112" y="86" width="24" height="5" rx="2.5" fill="#6366F1"/>
          <circle cx="186" cy="66" r="12" fill="#E8B48A"/><rect x="172" y="84" width="28" height="5" rx="2.5" fill="#A5B4FC"/>
          <circle cx="62" cy="66" r="12" fill="#D6A07A"/><rect x="48" y="84" width="28" height="5" rx="2.5" fill="#A5B4FC"/>
          <circle cx="146" cy="32" r="11" fill="#34C77B"/><path d="M141 32 l3.5 3.5 6-7" stroke="#052E16" stroke-width="2.6" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M112 118 l4 9 9 4 -9 4 -4 9 -4-9 -9-4 9-4z" fill="#FBBF24"/>
        </svg>
        <span class="nx-how__nix">@include('partials.ai-mascot', ['size' => 54])</span>
      </figure>
      <span class="nx-how__no">2</span>
      <h3>Meet two or three matched tutors</h3>
      <p>Our AI shortlists verified tutors who teach your board and class and can reach you, instead of a long directory.</p>
    </li>

    <li class="nx-how__step" style="--hw:#34C77B">
      <figure class="nx-how__art" aria-hidden="true">
        <svg viewBox="0 0 240 150">
          <ellipse cx="120" cy="140" rx="84" ry="6" fill="#000" opacity=".25"/>
          <circle cx="196" cy="36" r="30" fill="#34C77B" opacity=".14"/>
          <g stroke="#EEF2F9" stroke-width="2.2" stroke-linejoin="round" stroke-linecap="round">
            <path d="M24 136 Q26 102 54 98 Q82 102 84 136 Z" fill="#15803D"/>
            <circle cx="54" cy="76" r="17" fill="#E8B48A"/>
            <path d="M37 74 Q37 56 54 56 Q71 56 71 74 Q63 64 54 66 Q45 64 37 74 Z" fill="#1E2233"/>
            <path d="M150 136 Q152 108 176 104 Q200 108 202 136 Z" fill="#4F46E5"/>
            <circle cx="176" cy="86" r="14" fill="#F4C7A1"/>
            <path d="M162 84 Q162 68 176 68 Q190 68 190 84 Q182 76 176 78 Q170 76 162 84 Z" fill="#3F2A1E"/>
            <rect x="92" y="96" width="56" height="36" rx="4" fill="#F8F5EC"/>
          </g>
          <path d="M100 108 H140 M100 118 H130" stroke="#94A3B8" stroke-width="2.4" stroke-linecap="round"/>
          <text x="120" y="60" text-anchor="middle" font-family="Manrope,system-ui,sans-serif" font-size="13" font-weight="800" fill="#A7F3D0">FREE DEMO</text>
          <path d="M120 70 l3 7 7 3 -7 3 -3 7 -3-7 -7-3 7-3z" fill="#FBBF24"/>
        </svg>
      </figure>
      <span class="nx-how__no">3</span>
      <h3>Free demo class, then decide</h3>
      <p>The first class is free. Continue with the tutor you like, or switch at no cost.</p>
    </li>
  </ol>

  <div class="nx-how__foot">
    <ul class="nx-how__trust">
      <li>CBSE · ICSE · ISC · IB · IGCSE</li>
      <li>JEE &amp; NEET specialists</li>
      <li>Home or online</li>
    </ul>
    <div class="nx-how__cta">
      <a class="nx-how__primary" href="#demoModal" data-modal-target="demoModal">Book a free demo class</a>
      <a class="nx-how__secondary" href="{{ route('tutors.index') }}">Browse tutors</a>
    </div>
  </div>
</section>
