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
     * Never invented: an admin-written cdesc wins, and the fallback is built
     * only from categories that actually exist in the database.
     */
    $describe = function ($c) use ($parents, $children, $clean) {
        $written = trim(strip_tags((string) $c->cdesc));
        if ($written !== '') {
            return $written;
        }

        $kids = collect($children[$c->id] ?? [])
            ->pluck('cat_title')
            ->map($clean)
            ->filter()
            ->values();

        if ($kids->count()) {
            $shown = $kids->take(3)->implode(', ');
            $rest  = $kids->count() - min(3, $kids->count());

            return $rest > 0
                ? "Covers {$shown} and {$rest} more, taught one-to-one at home or online."
                : "Covers {$shown}, taught one-to-one at home or online.";
        }

        $parent = $c->pid ? $clean($parents[$c->pid] ?? '') : null;

        return $parent
            ? "Part of {$parent}. One-to-one lessons with verified tutors, at home or online."
            : 'One-to-one lessons with verified tutors, at home or online.';
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
            <p class="nxmq-card__desc">{{ $describe($c) }}</p>
          </article>
        </li>
      @endforeach

      {{-- Pass 2: the seam filler. Hidden from assistive tech; carries no
           heading, so it cannot duplicate the outline the first pass builds. --}}
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
            <p class="nxmq-card__desc">{{ $describe($c) }}</p>
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
          'item'     => [
              '@type'       => 'Service',
              'name'        => $clean($c->cat_title),
              'serviceType' => 'Tutoring',
              'description' => $describe($c),
              'areaServed'  => ['@type' => 'Country', 'name' => 'India'],
              'provider'    => ['@type' => 'Organization', 'name' => 'NXTutors'],
          ],
      ])->all(),
  ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
  </script>
</section>
@endif
