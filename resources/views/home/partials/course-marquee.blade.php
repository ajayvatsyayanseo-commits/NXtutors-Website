@php
    /**
     * The strip of what we teach, sliding above the footer.
     *
     * These cards are descriptions, not navigation — there is deliberately no
     * link on them. Their SEO value is the copy itself: a crawlable, factual
     * account of the subjects this business actually covers, backed by the
     * ItemList of Services at the bottom of this file.
     *
     * Two copies of the list sit in the track. The animation travels exactly
     * one copy's width and restarts, so the second copy is standing where the
     * first began and the seam never shows.
     */
    $strip = collect($courseStrip ?? []);

    $parents = \App\Models\Category::whereIn('id', $strip->pluck('pid')->filter()->unique())
        ->pluck('cat_title', 'id');

    // The real subjects sitting under each card, used to say what it covers.
    $children = \App\Models\Category::query()
        ->where('status', 't')
        ->whereIn('pid', $strip->pluck('id'))
        ->orderBy('id')
        ->get()
        ->groupBy('pid');

    // Some titles carry trailing punctuation from the admin ("University
    // Entrance:"), which reads as a typo once it sits mid-sentence.
    $clean = fn ($s) => rtrim(trim((string) $s), " \t:-\u{2013}\u{2014},");

    /**
     * The subjects under a card, de-duplicated.
     *
     * The class rows were entered many times with different spacing — "Class-I",
     * "Class- I" and "Class -I" all exist under Academic, which is why it counts
     * 55 children for 17 real subjects. Collapsing on a whitespace- and
     * case-insensitive key keeps the first spelling and drops the rest, so the
     * list never reads as a stutter.
     */
    $subjectsOf = function ($c) use ($children, $clean) {
        return collect($children[$c->id] ?? [])
            ->pluck('cat_title')
            ->map($clean)
            ->filter()
            ->unique(fn ($t) => strtolower(preg_replace('/[\s\-]+/', '', $t)))
            ->values();
    };

    /**
     * The card's body copy, as paragraphs.
     *
     * An admin-written cdesc still wins outright. Without one, the copy comes
     * from SubjectCopy, which writes to what the category actually is — a board,
     * a class level, an entrance exam, a language — instead of repeating one
     * generic sentence on all 24 cards. See that class for why.
     */
    $paragraphs = function ($c) use ($parents, $clean, $subjectsOf) {
        $written = trim(strip_tags((string) $c->cdesc));
        if ($written !== '') {
            return [$written];
        }

        return \App\Support\SubjectCopy::paragraphs(
            $clean($c->cat_title),
            $c->pid ? $clean($parents[$c->pid] ?? '') : null,
            $subjectsOf($c)
        );
    };

    // Shown as its own line so the facts stay scannable rather than buried in
    // the prose above them.
    $facts = function ($c) use ($subjectsOf) {
        $kids = $subjectsOf($c);

        return array_values(array_filter([
            $kids->count() ? $kids->count() . ' subjects' : null,
            'Home &amp; online',
            'Verified tutors',
            'Free demo class',
        ]));
    };
@endphp

@if($strip->count())
<section class="section nxmq-sec" aria-labelledby="courseStripTitle">
  <div class="section-head">
    <h2 class="section-title" id="courseStripTitle">What we teach</h2>
  </div>

  <p class="nxmq-lede">
    Boards, entrance exams, languages and professional skills — {{ $strip->count() }}
    subjects taught one-to-one by verified tutors, at home and online across India.
  </p>

  <div class="nxmq" style="--nxmq-n: {{ $strip->count() }};">
    <ul class="nxmq__track">
      {{-- Pass 1: the real list. This is the copy that gets read and crawled. --}}
      @foreach($strip as $c)
        <li class="nxmq__item">
          <article class="nxmq-card">
            <span class="nxmq-card__head">
              <span class="nxmq-card__icon">
                @if($c->avatar)
                  <img src="{{ asset('storage/category') . '/' . $c->avatar }}" alt=""
                       width="40" height="40" loading="lazy" decoding="async">
                @endif
              </span>
              <span class="nxmq-card__names">
                <span class="nxmq-card__kicker">{{ $c->pid ? $clean($parents[$c->pid] ?? 'Tutoring') : 'Tutoring' }}</span>
                <h3 class="nxmq-card__title">{{ $clean($c->cat_title) }}</h3>
              </span>
            </span>
            @foreach($paragraphs($c) as $i => $para)
              <p class="{{ $i === 0 ? 'nxmq-card__desc' : 'nxmq-card__more' }}">{{ $para }}</p>
            @endforeach

            @php($kids = $subjectsOf($c))
            @if($kids->count())
              {{-- Every subject actually taught under this card, named in
                   crawlable text instead of hidden behind "and 14 more". --}}
              <span class="nxmq-card__subjects">
                <span class="nxmq-card__subjects-label">Includes</span>
                <span class="nxmq-chips">
                  @foreach($kids as $k)
                    <span class="nxmq-chip">{{ $k }}</span>
                  @endforeach
                </span>
              </span>
            @endif

            <span class="nxmq-card__facts">
              @foreach($facts($c) as $f)
                <span class="nxmq-fact">{!! $f !!}</span>
              @endforeach
            </span>
          </article>
        </li>
      @endforeach

      {{-- Pass 2: the seam filler. Identical markup to pass 1 — the travel
           distance is one whole copy, so any difference in card height between
           the two passes would show as a jump at the loop. Hidden from
           assistive tech; carries no heading, so it cannot duplicate the
           outline the first pass builds. --}}
      @foreach($strip as $c)
        <li class="nxmq__item" aria-hidden="true">
          <article class="nxmq-card">
            <span class="nxmq-card__head">
              <span class="nxmq-card__icon">
                @if($c->avatar)
                  <img src="{{ asset('storage/category') . '/' . $c->avatar }}" alt=""
                       width="40" height="40" loading="lazy" decoding="async">
                @endif
              </span>
              <span class="nxmq-card__names">
                <span class="nxmq-card__kicker">{{ $c->pid ? $clean($parents[$c->pid] ?? 'Tutoring') : 'Tutoring' }}</span>
                <span class="nxmq-card__title">{{ $clean($c->cat_title) }}</span>
              </span>
            </span>
            @foreach($paragraphs($c) as $i => $para)
              <p class="{{ $i === 0 ? 'nxmq-card__desc' : 'nxmq-card__more' }}">{{ $para }}</p>
            @endforeach

            @php($kids = $subjectsOf($c))
            @if($kids->count())
              <span class="nxmq-card__subjects">
                <span class="nxmq-card__subjects-label">Includes</span>
                <span class="nxmq-chips">
                  @foreach($kids as $k)
                    <span class="nxmq-chip">{{ $k }}</span>
                  @endforeach
                </span>
              </span>
            @endif

            <span class="nxmq-card__facts">
              @foreach($facts($c) as $f)
                <span class="nxmq-fact">{!! $f !!}</span>
              @endforeach
            </span>
          </article>
        </li>
      @endforeach
    </ul>
  </div>

  {{-- The services these cards describe, listed once — the clone is never counted.
       No url on the items: these cards are descriptions, not links. --}}
  <script type="application/ld+json">
  {!! json_encode([
      '@context' => 'https://schema.org',
      '@type'    => 'ItemList',
      '@id'      => url()->current() . '#subjects',
      'name'     => 'Subjects tutored by NXTutors',
      'numberOfItems' => $strip->count(),
      'itemListOrder' => 'https://schema.org/ItemListUnordered',
      'itemListElement' => $strip->values()->map(fn ($c, $i) => [
          '@type'    => 'ListItem',
          'position' => $i + 1,
          'item'     => array_filter([
              '@type'       => 'Service',
              'name'        => $clean($c->cat_title),
              'serviceType' => 'Tutoring',
              // Matches the two paragraphs the card actually renders.
              'description' => implode(' ', $paragraphs($c)),
              'areaServed'  => ['@type' => 'Country', 'name' => 'India'],
              'provider'    => ['@type' => 'Organization', 'name' => 'NXTutors'],
              // The same subject names shown as chips, so the structured data
              // never claims more than the visible text.
              'hasOfferCatalog' => $subjectsOf($c)->count() ? [
                  '@type' => 'OfferCatalog',
                  'name'  => $clean($c->cat_title) . ' subjects',
                  'itemListElement' => $subjectsOf($c)->map(fn ($s) => [
                      '@type' => 'Offer',
                      'itemOffered' => [
                          '@type' => 'Service',
                          'name' => $s,
                          'serviceType' => 'Tutoring',
                      ],
                  ])->all(),
              ] : null,
          ]),
      ])->all(),
  ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
  </script>
</section>
@endif
