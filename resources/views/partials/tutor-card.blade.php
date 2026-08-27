{{--
  Tutor record card — the one component every tutor surface uses.

  The portrait leads, a stamped VERIFIED seal sits on it, and everything below
  is filed in a fixed order: name and score, place, what they teach, then the
  two things you can do next. Used by /tutors, the home "Suggested" and
  "Local tutors" rows, and the compare grid, so a tutor looks the same
  wherever a parent meets them.

  Expects:
    $t          tutor row (needs ->name)
    $img        resolved portrait URL
    $chips      array of subject/board labels (may be empty)
    $rating     formatted rating string, e.g. "4.8"
    $reviews    int review count
    $address    street/area (may be ''), composed with $city below
    $city       city name (may be '')
    $waLink     WhatsApp deep link
    $profileUrl profile URL
    $compare    optional array of data-* attributes; renders the Compare
                control when present. Text-only by contract — the compare
                script rewrites this button's textContent.
--}}
@php
  // "Sector 15, Gurugram" — but never "gurgaon, gurgaon" when the stored
  // address is just the city again.
  $parts = [];
  foreach ([$address ?? '', $city ?? ''] as $bit) {
    $bit = trim(\Illuminate\Support\Str::limit((string) $bit, 44, ''));
    if ($bit === '') continue;
    foreach ($parts as $seen) {
      if (mb_strtolower($seen) === mb_strtolower($bit)) { $bit = ''; break; }
    }
    if ($bit !== '') $parts[] = $bit;
  }
  $place = implode(', ', $parts);
@endphp
<article class="tutor-card">
  <div class="tutor-photo">
    <img src="{{ $img }}" alt="{{ $t->name }}" loading="lazy" decoding="async"
         onerror="this.src='{{ asset('frount/assets/images/tutor1.jpg') }}'">

    <span class="badge-verified">
      <svg width="11" height="11" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M6.5 11.3 3.4 8.2l1.1-1.1 2 2 4.9-4.9 1.1 1.1z"/></svg>
      Verified
    </span>

    {{-- The score belongs on the face it describes. --}}
    @if((int) $reviews > 0)
      <span class="tutor-score">★ {{ $rating }}<span class="tutor-score__n">({{ $reviews }})</span></span>
    @else
      <span class="tutor-score tutor-score--new">New</span>
    @endif
  </div>

  <div class="tutor-body">
    <div class="tutor-headline">
      <h3 class="tutor-name">{{ $t->name }}</h3>
      @if(!empty($compare))
        <button type="button" class="btn btn-ghost btn-small js-compare-toggle tutor-compare"
          @foreach($compare as $key => $value) data-{{ $key }}="{{ $value }}" @endforeach
        >Compare</button>
      @endif
    </div>

    @if(!empty($place))
      <p class="tutor-location">
        <svg width="12" height="12" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M8 1a5 5 0 0 0-5 5c0 3.6 4.4 8.6 4.6 8.8a.5.5 0 0 0 .8 0C8.6 14.6 13 9.6 13 6a5 5 0 0 0-5-5m0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4"/></svg>
        {{ $place }}
      </p>
    @endif

    @if(!empty($chips))
      <div class="tutor-tags">
        @foreach($chips as $chip)
          <span class="tutor-chip">{{ $chip }}</span>
        @endforeach
      </div>
    @endif
  </div>

  <div class="tutor-actions">
    <a class="btn-outline" href="{{ $profileUrl }}">Profile</a>
    <a class="nxbtn tutor-wa" href="{{ $waLink }}" target="_blank" rel="nofollow noopener">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347M12.05 21.785h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884"/></svg>
      WhatsApp
    </a>
  </div>
</article>
