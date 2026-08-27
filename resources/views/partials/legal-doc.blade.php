{{--
  Shared renderer for the legal pages (Privacy Policy, Terms & Conditions).

  The stored content is a single <p> in which every section reads
  "Label: sentence." run together, which renders as one unreadable wall of
  text. This splits it on those labels into real <h2> + <p> sections and
  builds a table of contents from them.

  The WORDING is never altered — only the markup around it. If the parser
  finds fewer than two sections (content was edited into a different shape),
  it falls back to printing the stored HTML untouched.

  Expects: $page (needs ->content; optionally ->main_title, ->avatar, ->updated_at)
--}}
@php
  $rawHtml = (string) ($page->content ?? '');

  // The hero already prints the page title, so drop the content's own H1 —
  // two H1s on one page is a real markup defect, not a style preference.
  $bodyHtml = preg_replace('#<h1\b[^>]*>.*?</h1>#is', '', $rawHtml, 1);

  $plain = html_entity_decode(strip_tags($bodyHtml), ENT_QUOTES | ENT_HTML5, 'UTF-8');
  $plain = trim(preg_replace('/\s+/u', ' ', $plain));

  // A section label is a short Title-Case phrase ending in a colon, sitting at
  // the start of the text or immediately after a full stop.
  $sections = [];
  if (preg_match_all('/(?:^|(?<=\.)\s)([A-Z][A-Za-z&\'\s]{2,38}?):\s/u', $plain, $m, PREG_OFFSET_CAPTURE)) {
      $count = count($m[0]);
      for ($i = 0; $i < $count; $i++) {
          $label = trim($m[1][$i][0]);
          $start = $m[0][$i][1] + strlen($m[0][$i][0]);
          $end   = ($i + 1 < $count) ? $m[0][$i + 1][1] : strlen($plain);
          $text  = trim(substr($plain, $start, max(0, $end - $start)));

          if ($label !== '' && $text !== '') {
              $sections[] = [
                  'id'   => \Illuminate\Support\Str::slug($label) ?: 'section-' . ($i + 1),
                  'head' => $label,
                  'body' => $text,
              ];
          }
      }
  }

  $useSections = count($sections) >= 2;
  $updatedAt   = optional($page->updated_at ?? null);
@endphp

<article class="nxlegal">

  @if($useSections)
    <nav class="nxlegal-toc" aria-label="On this page">
      <p class="nxlegal-toc__label">On this page</p>
      <ol class="nxlegal-toc__list">
        @foreach($sections as $s)
          <li><a href="#{{ $s['id'] }}">{{ $s['head'] }}</a></li>
        @endforeach
      </ol>
    </nav>
  @endif

  <div class="nxlegal-body">

    @if($updatedAt && $updatedAt->toDateString())
      <p class="nxlegal-updated">
        <svg width="13" height="13" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1m0 12.6A5.6 5.6 0 1 1 8 2.4a5.6 5.6 0 0 1 0 11.2M8.5 4.5h-1v4l3.2 1.9.5-.85-2.7-1.6z"/></svg>
        Last updated {{ $updatedAt->format('j F Y') }}
      </p>
    @endif

    @if($useSections)
      @foreach($sections as $s)
        <section class="nxlegal-section" id="{{ $s['id'] }}">
          <h2 class="nxlegal-section__head">{{ $s['head'] }}</h2>
          <p class="nxlegal-section__body">{{ $s['body'] }}</p>
        </section>
      @endforeach
    @else
      {{-- Stored markup didn't match the expected shape — print it verbatim. --}}
      <div class="nxlegal-raw">{!! $rawHtml !!}</div>
    @endif

    <aside class="nxlegal-help">
      <h2 class="nxlegal-help__head">Questions about this policy?</h2>
      <p class="nxlegal-help__text">
        If anything here is unclear, or you want to request access to or deletion of
        your data, contact us and a person will get back to you.
      </p>
      <div class="nxlegal-help__actions">
        <a class="nxbtn nxbtn--accent" href="{{ url('/contact') }}">Contact us</a>
        <a class="nxbtn" href="mailto:{{ $setting->email ?? 'support@nxtutors.com' }}">{{ $setting->email ?? 'support@nxtutors.com' }}</a>
      </div>
    </aside>

  </div>
</article>
