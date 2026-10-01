{{--
  Tutor record card — the one component every tutor surface uses.

  Every card is filed in the same order, so a parent compares like with like:
  portrait (or an initials avatar), name with its verified seal, where they
  are, what they teach, which boards, then experience and fee, then the two
  things you can do next. Used by /tutors, the home "Suggested" and "Local
  tutors" rows, subject and city pages and the compare grid.

  Expects:
    $t          tutor row (needs ->name); an App\Models\Register lets the card
                work out subjects, boards, experience and fee itself
    $img        resolved portrait URL ('' or the generic fallback = no photo)
    $chips      array of labels (fallback when boards are not known)
    $rating     formatted rating string, e.g. "4.8"
    $reviews    int review count
    $address    street/area (may be ''), composed with $city below
    $city       city name (may be '')
    $waLink     WhatsApp link (App\Support\Wa)
    $profileUrl profile URL
    $compare    optional array of data-* attributes; renders the Compare
                control when present. Text-only by contract — the compare
                script rewrites this button's textContent.
    $sample     optional bool; defaults to $t->is_sample. A model profile
                (config/tutors.php) is shown honestly: no Verified seal,
                rating, experience, fee or Compare; a "Sample profile" label,
                and the 10-minute match as its action.
    $placeLabel optional search line ("In Sector 56", "In Haryana").
    $subjects, $boards, $expYears, $feeLabel
                optional, for callers that already have them (search cards).

  Copy rule: facts only. Nothing is shown as "—"; a missing fact is left out.
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
  $isSample = (bool) ($sample ?? ($t->is_sample ?? false));

  // What they teach, their boards, experience and fee: from the caller when it
  // has them, else from the tutor record (PublicTutorFieldMapper, the one place
  // that turns a tutor into public data).
  $tcMapper = app(\App\NxtAi\Support\PublicTutorFieldMapper::class);
  $tcCaps = (! isset($subjects) || ! isset($boards)) && $t instanceof \App\Models\Register ? $tcMapper->capabilities($t) : null;
  $notSubject = fn ($s) => is_string($s) && $s !== '' && ! preg_match('/academic|class|\(|\bboth\b|online|home/i', $s);
  $tcSubjects = array_slice(array_values(array_filter((array) ($subjects ?? ($tcCaps['subjects'] ?? [])), $notSubject)), 0, 3);
  $tcBoards = array_slice(array_values(array_filter((array) ($boards ?? ($tcCaps['boards'] ?? [])), fn ($b) => is_string($b) && $b !== '')), 0, 3);
  if (! $tcBoards) {
    // No boards known: keep the caller's chips, minus labels a parent cannot use.
    $tcBoards = array_slice(array_values(array_filter((array) ($chips ?? []), fn ($c) => is_string($c) && ! preg_match('/^academic|^class\s*-|^(home|online|both)$/i', trim($c)))), 0, 3);
  }
  $tcExp = $expYears ?? $tcMapper->parseExperience((string) ($t->experience ?? ''));
  $tcFee = $feeLabel ?? $tcMapper->parseFee((string) ($t->budget ?? ''))['label'];
  if ($tcFee) {
    $tcFee = str_replace(' / hour', '/hr', $tcFee);
  }

  // No photo: an initials avatar in a calm colour chosen by name, instead of
  // a grey silhouette that reads as "nobody here".
  $tcImg = trim((string) ($img ?? ''));
  $tcNoPhoto = $tcImg === '' || str_contains($tcImg, 'avatar-fallback') || str_contains($tcImg, '/images/tutor1.jpg');
  $tcWords = preg_split('/\s+/', trim((string) $t->name)) ?: [];
  $tcInitials = mb_strtoupper(mb_substr($tcWords[0] ?? 'T', 0, 1).(count($tcWords) > 1 ? mb_substr(end($tcWords), 0, 1) : ''));
  $tcHues = [['#4F46E5', '#7C3AED'], ['#0E7490', '#0891B2'], ['#B45309', '#D97706'], ['#9D174D', '#BE185D'], ['#166534', '#15803D'], ['#1D4ED8', '#2563EB']];
  $tcHue = $tcHues[crc32((string) $t->name) % count($tcHues)];

  // A resized copy instead of the full upload (App\Support\Thumb): the photo
  // is the card's width, which on a phone is the whole screen. If a thumb
  // fails, the error handler falls back to the original, then the generic one.
  $tcSrcset = $tcNoPhoto ? '' : \App\Support\Thumb::srcset($tcImg, [320, 480, 640]);
  $tcSrc = $tcSrcset !== '' ? \App\Support\Thumb::url($tcImg, 480) : $tcImg;
  if (! empty($compare) && ! $tcNoPhoto) {
    // The compare dock shows a 34px face.
    $compare['img'] = \App\Support\Thumb::url($tcImg, 96);
  }
@endphp
<article class="tutor-card{{ $isSample ? ' tutor-card--sample' : '' }}">
  <div class="tutor-photo{{ $tcNoPhoto ? ' tutor-photo--mono' : '' }}">
    @if($tcNoPhoto)
      <svg class="tutor-mono" viewBox="0 0 160 120" role="img" aria-label="{{ $t->name }}" preserveAspectRatio="xMidYMid slice">
        <defs><linearGradient id="tm{{ crc32((string) $t->name.($profileUrl ?? '')) }}" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="{{ $tcHue[0] }}"/><stop offset="1" stop-color="{{ $tcHue[1] }}"/></linearGradient></defs>
        <rect width="160" height="120" fill="url(#tm{{ crc32((string) $t->name.($profileUrl ?? '')) }})"/>
        <circle cx="132" cy="18" r="34" fill="#fff" opacity=".08"/><circle cx="20" cy="108" r="26" fill="#fff" opacity=".06"/>
        <path d="M112 86 q10 -6 20 0 v14 q-10 -6 -20 0 z M132 86 q10 -6 20 0 v14 q-10 -6 -20 0 z" fill="#fff" opacity=".22"/>
        <text x="80" y="72" text-anchor="middle" font-family="'Bricolage Grotesque',Manrope,system-ui,sans-serif" font-size="40" font-weight="800" fill="#fff" letter-spacing="1">{{ $tcInitials }}</text>
      </svg>
    @else
      <img src="{{ $tcSrc }}"@if($tcSrcset !== '') srcset="{{ $tcSrcset }}" sizes="(max-width: 640px) 92vw, 360px"@endif alt="{{ $t->name }}" loading="lazy" decoding="async"
           onerror="if (this.srcset) { this.removeAttribute('srcset'); this.src = {{ json_encode($tcImg, JSON_UNESCAPED_SLASHES) }}; } else { this.onerror = null; this.src = {{ json_encode(asset('frount/assets/images/tutor1.jpg'), JSON_UNESCAPED_SLASHES) }}; }">
    @endif

    @if($isSample)
      <span class="badge-sample">Sample profile</span>
    @else
      <span class="badge-verified">
        <svg width="11" height="11" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M6.5 11.3 3.4 8.2l1.1-1.1 2 2 4.9-4.9 1.1 1.1z"/></svg>
        Verified
      </span>

      {{-- A score only when parents have given one; no "New" placeholder. --}}
      @if((int) $reviews > 0)
        <span class="tutor-score">★ {{ $rating }}<span class="tutor-score__n">({{ $reviews }})</span></span>
      @endif
    @endif
  </div>

  <div class="tutor-body">
    <div class="tutor-headline">
      <h3 class="tutor-name">{{ $t->name }}</h3>
      @if(!empty($compare) && ! $isSample)
        <button type="button" class="btn btn-ghost btn-small js-compare-toggle tutor-compare"
          @foreach($compare as $key => $value) data-{{ $key }}="{{ $value }}" @endforeach
        >Compare</button>
      @endif
    </div>

    @if(!empty($placeLabel))
      <p class="tutor-reach">{{ $placeLabel }}</p>
    @endif
    @if(!empty($place))
      <p class="tutor-location">
        <svg width="12" height="12" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M8 1a5 5 0 0 0-5 5c0 3.6 4.4 8.6 4.6 8.8a.5.5 0 0 0 .8 0C8.6 14.6 13 9.6 13 6a5 5 0 0 0-5-5m0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4"/></svg>
        {{ $place }}
      </p>
    @endif

    @if($tcSubjects)
      <p class="tutor-teaches"><span>Teaches</span> {{ implode(' · ', $tcSubjects) }}</p>
    @endif

    @if($tcBoards)
      <div class="tutor-tags">
        @foreach($tcBoards as $chip)
          <span class="tutor-chip">{{ $chip }}</span>
        @endforeach
      </div>
    @endif

    @if(! $isSample && ($tcExp || $tcFee))
      <dl class="tutor-facts">
        @if($tcExp)<div><dt>Experience</dt><dd>{{ $tcExp }}+ yrs</dd></div>@endif
        @if($tcFee)<div><dt>Fee</dt><dd>{{ $tcFee }}</dd></div>@endif
      </dl>
    @endif
  </div>

  @if($isSample)
  <div class="tutor-actions tutor-actions--sample">
    <a class="btn-outline" href="{{ $profileUrl }}" rel="nofollow">View sample</a>
    <a class="nxbtn tutor-match" href="#" data-modal-target="demoModal" title="{{ config('tutors.match_promise') }}">Get matched in 10 min</a>
  </div>
  @else
  <div class="tutor-actions">
    <a class="btn-outline" href="{{ $profileUrl }}">Profile</a>
    <a class="nxbtn tutor-wa" href="{{ $waLink }}" target="_blank" rel="nofollow noopener">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347M12.05 21.785h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884"/></svg>
      WhatsApp
    </a>
  </div>
  @endif
</article>
