{{--
  TutorTwin strip: one line under a page's hero advertising the WhatsApp AI
  tutor. Slim on purpose - it sits next to the tutor search, which is still the
  page's job, and it must never read as the page's main offer.

  Expects:
    $placement  where it is (home_hero, subject_hero, city_hero, area_hero…),
                carried into the link's UTM tags.
    $subject    optional page subject; the strip speaks about it ("Maths doubts
                at 11pm?") when TutorTwin sells it (App\Support\TutorTwin).

  Copy rules (TutorTwin's own): an AI, not a person; no free trial; no
  accuracy promise; the price is the live one or none.
--}}
@php
  $ttSubject = \App\Support\TutorTwin::subjectFor($subject ?? null);
  $ttPrice = \App\Support\TutorTwin::priceLabel();
  $ttHook = $ttSubject ? $ttSubject.' doubt at 11pm?' : 'Stuck on homework at 11pm?';
@endphp
<a class="nx-twin-strip" href="{{ \App\Support\TutorTwin::link('/', $placement ?? 'page_hero', $ttSubject ? \Illuminate\Support\Str::slug($ttSubject) : null) }}"
   target="_blank" rel="noopener" data-nx-twin="{{ $placement ?? 'page_hero' }}">
  <span class="nx-twin-strip__badge">New</span>
  <span class="nx-twin-strip__text">
    <strong>{{ $ttHook }}</strong>
    <span>Send a photo to TutorTwin on WhatsApp and get the steps in seconds{{ $ttPrice ? ' · '.$ttPrice : '' }}</span>
  </span>
  <span class="nx-twin-strip__go" aria-hidden="true">
    <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38a9.9 9.9 0 0 0 4.79 1.22c5.46 0 9.91-4.45 9.91-9.91A9.9 9.9 0 0 0 12.04 2Zm4.9 13.8c-.21.58-1.2 1.12-1.67 1.18-.43.06-.97.09-1.57-.1-.36-.11-.83-.27-1.42-.53-2.5-1.08-4.13-3.6-4.25-3.77-.12-.17-1.02-1.36-1.02-2.6 0-1.23.65-1.84.88-2.09.23-.25.5-.31.67-.31h.48c.15 0 .36-.06.56.43.21.5.71 1.73.77 1.85.06.13.1.27.02.44-.08.17-.12.27-.25.42-.12.15-.26.33-.37.44-.12.12-.25.26-.11.51.15.25.65 1.07 1.39 1.73.96.85 1.77 1.12 2.02 1.24.25.13.4.1.54-.06.15-.17.62-.72.79-.97.17-.25.33-.21.56-.12.23.08 1.45.69 1.7.81.25.13.41.19.48.29.06.1.06.58-.15 1.16Z"/></svg>
    See TutorTwin
  </span>
</a>
