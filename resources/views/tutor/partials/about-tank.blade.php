{{--
  About section of the tutor profile (agreed with Ajay, 2 Oct 2026).

  A calm, clear "tank": the facts float as separate glass cards in their own
  space, light comes from the top where reading starts, and the floor is quiet.
  The card a parent looks at comes slightly forward. "I'm here for" chips bring
  the cards about their goal to the front. Everything shown comes from the
  tutor's own bio (App\Support\TutorAbout) or from what NXTutors checked, and
  the two are labelled apart. Styles: public/frount/assets/css/nx-about.css.

  In: $tutor, $about (TutorAbout::parse), $fallbackText, $img, $isSampleProfile,
      $isWomanVerified, $reviewCount, $avgRating, $qualText
--}}
@php
  $first = \Illuminate\Support\Str::before(trim($tutor->name), ' ') ?: $tutor->name;
  $icons = [
    'book' => '<path d="M4 19V5l8 4 8-4v14l-8 4-8-4z"/><path d="M12 9v14"/>',
    'clock' => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
    'path' => '<path d="M3 12c3-4 6-4 9 0s6 4 9 0"/>',
    'paper' => '<path d="M5 4h11l3 3v13H5z"/><path d="M9 12h6M9 16h6M9 8h3"/>',
    'globe' => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"/>',
    'star' => '<path d="M12 3l3 6 6 1-4.5 4 1 6L12 17l-5.5 3 1-6L3 10l6-1z"/>',
    'pin' => '<path d="M12 21s-7-6.5-7-11a7 7 0 0 1 14 0c0 4.5-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/>',
    'shield' => '<path d="M12 3l8 3v6c0 4.5-3.5 8-8 9-4.5-1-8-4.5-8-9V6z"/><path d="M9 12l2 2 4-4"/>',
    'dot' => '<circle cx="12" cy="12" r="4"/>',
  ];
  $introLead = $about['intro']['lead'] !== '' ? $about['intro']['lead'] : $fallbackText;
  $hasReviews = ! empty($reviewCount);
  $pebbles = array_values(array_filter([
    $qualText !== '' ? ['v' => \Illuminate\Support\Str::limit(\Illuminate\Support\Str::before($qualText, ','), 18, ''), 'l' => 'Qualification', 's' => \Illuminate\Support\Str::limit($qualText, 56)] : null,
    $hasReviews
      ? ['v' => $avgRating.' ★', 'l' => $reviewCount.' NXTutors '.\Illuminate\Support\Str::plural('review', (int) $reviewCount), 's' => 'from parents who booked here']
      : ['v' => 'New', 'l' => 'on NXTutors', 's' => 'no NXTutors reviews yet'],
    ['v' => 'Free', 'l' => 'first demo class', 's' => 'continue only if it fits'],
  ]));
  $renderCard = function (array $c) use ($icons) {
    return view('tutor.partials.about-card', ['c' => $c, 'icon' => $icons[$c['icon']] ?? $icons['dot']])->render();
  };
@endphp

<section class="nxsec nxtank" id="aboutTutor" aria-labelledby="nxtank-h">
  <span class="nxtank__bubble" aria-hidden="true"></span><span class="nxtank__bubble" aria-hidden="true"></span>
  <span class="nxtank__bubble" aria-hidden="true"></span><span class="nxtank__bubble" aria-hidden="true"></span>

  {{-- 1. One look: who --}}
  <div class="nxtank__obs">
    <div class="nxtank__face">
      <img src="{{ \App\Support\Thumb::url($img, 120) }}" alt="" width="84" height="84" loading="lazy" decoding="async"
           onerror="this.onerror=null;this.src={{ json_encode(asset('frount/assets/images/tutor1.jpg'), JSON_UNESCAPED_SLASHES) }};">
      @unless($isSampleProfile)<span class="nxtank__tick{{ $isWomanVerified ? ' nxtank__tick--woman' : '' }}" aria-hidden="true">✓</span>@endunless
    </div>
    <div>
      <h2 class="nxtank__eyebrow" id="nxtank-h">About {{ $tutor->name }}</h2>
      @if($about['headline'])<p class="nxtank__line">{{ $about['headline'] }}</p>@endif
      <p class="nxtank__sub">{{ $introLead }}</p>
      @if($about['intro']['more'])
        <details class="nxtank__more"><summary>More about {{ $first }}</summary>
          <div>@foreach($about['intro']['more'] as $p)<p>{{ $p }}</p>@endforeach</div>
        </details>
      @endif
      @if($isSampleProfile)
        <span class="nxtank__seal nxtank__seal--sample">Sample profile</span>
      @else
        <span class="nxtank__seal{{ $isWomanVerified ? ' nxtank__seal--woman' : '' }}"><span aria-hidden="true">✓</span> ID checked by the NXTutors team</span>
      @endif
    </div>
  </div>

  {{-- 2. Pebbles: what a parent scans first, not already in the quick facts --}}
  <div class="nxtank__pebbles" role="list">
    @foreach($pebbles as $p)
      <div class="nxtank__peb" role="listitem"><b>{{ $p['v'] }}</b><span>{{ $p['l'] }}</span><small>{{ $p['s'] }}</small></div>
    @endforeach
  </div>

  @if($about['cards'])
    {{-- 3. Intent: bring forward what this parent came for --}}
    @if($about['intents'])
      <div class="nxtank__intent" role="group" aria-label="Show what matters to you">
        <span class="nxtank__q">I'm here for</span>
        <button class="nxtank__chip" type="button" aria-pressed="true" data-intent="all">Everything</button>
        @foreach($about['intents'] as $key => $label)
          <button class="nxtank__chip" type="button" aria-pressed="false" data-intent="{{ $key }}">{{ $label }}</button>
        @endforeach
      </div>
    @endif

    {{-- 4. The cards, with the student quotes set into the gap after the path --}}
    <div class="nxtank__school" data-nxtank-school>
      @foreach($about['cards'] as $i => $c)
        {!! $renderCard($c) !!}
        @if($i === $about['quotesAfter'] && $about['quotes'])
          @foreach($about['quotes'] as $q)
            <figure class="nxtank__voice{{ count($about['quotes']) === 1 ? ' nxtank__voice--solo' : '' }}">
              <blockquote>“{{ $q }}”</blockquote>
              <figcaption>Quoted in {{ $first }}'s profile</figcaption>
            </figure>
          @endforeach
        @endif
      @endforeach
    </div>
  @endif

  {{-- 5. What NXTutors checked, and what the tutor says: never mixed --}}
  <div class="nxtank__ledger">
    <div>
      @if($isSampleProfile)
        <h3>Sample profile</h3>
        <ul><li>Shows the kind of tutor we match</li><li>{{ config('tutors.match_promise') }}</li></ul>
      @else
        <h3><span class="nxtank__ok" aria-hidden="true">✓</span> Checked by NXTutors</h3>
        <ul><li>Identity document</li><li>Free demo arranged through us</li></ul>
      @endif
    </div>
    <div>
      <h3><span aria-hidden="true">ⓘ</span> From {{ $first }}'s own profile</h3>
      <ul>
        <li>Qualifications, experience and teaching method</li>
        @if($about['quotes'])<li>Student quotes</li>@endif
        @if($hasReviews)
          <li><a href="#reviews">{{ $reviewCount }} NXTutors {{ \Illuminate\Support\Str::plural('review', (int) $reviewCount) }} below</a></li>
        @else
          <li>No NXTutors reviews yet: a demo is the best way to judge</li>
        @endif
      </ul>
    </div>
  </div>

  {{-- 6. One way out --}}
  <div class="nxtank__cta">
    <p><b>See one class before you decide.</b> {{ $about['cta'] ?: 'One trial session to judge the teaching style; continue only if it fits.' }}</p>
    <div class="nxtank__btns">
      <a class="nxtank__btn nxtank__btn--act" href="#demoModal" data-modal-target="demoModal">{{ $isSampleProfile ? 'Get a verified tutor' : 'Book a free demo' }}</a>
      <a class="nxtank__btn nxtank__btn--wa" target="_blank" rel="nofollow noopener" href="{{ \App\Support\Wa::tutor($tutor->user_id, 'about') }}">WhatsApp</a>
      <a class="nxtank__btn nxtank__btn--ai" href="#nxAskAISection" data-ask-ai>Ask AI about {{ $first }}</a>
    </div>
  </div>
</section>

<script>
(function () {
  var tank = document.getElementById('aboutTutor');
  if (!tank) return;
  var school = tank.querySelector('[data-nxtank-school]');
  var chips = tank.querySelectorAll('.nxtank__chip');
  chips.forEach(function (chip) {
    chip.addEventListener('click', function () {
      chips.forEach(function (c) { c.setAttribute('aria-pressed', c === chip ? 'true' : 'false'); });
      var want = chip.getAttribute('data-intent');
      school.classList.toggle('is-filtered', want !== 'all');
      var firstMatch = null;
      school.querySelectorAll('[data-intents]').forEach(function (card) {
        var hit = want !== 'all' && (' ' + card.getAttribute('data-intents') + ' ').indexOf(' ' + want + ' ') > -1;
        card.classList.toggle('is-match', hit);
        if (hit && !firstMatch) firstMatch = card;
      });
      if (firstMatch && firstMatch.getBoundingClientRect().top > window.innerHeight * 0.7) {
        firstMatch.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    });
  });
})();
</script>
