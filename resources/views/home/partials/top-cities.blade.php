@php
    /**
     * "Home tutors in India's major cities": the home page's door into the
     * city hubs. Metros first as cards, then every other city as a plain link,
     * then the state-by-state directory at /city.
     *
     * NXTutors is a pan-India service, so no one city is singled out here; the
     * cards simply show where tutors and local pages already exist. Counts come
     * from App\Support\Geo so they match /city and the city pages.
     */
    use App\Support\Geo;
    use Illuminate\Support\Facades\DB;

    $tcCities = DB::table('city_managment')
        ->where('status', 't')
        ->whereNotNull('slug')->where('slug', '!=', '')
        ->select('city_name', 'slug')
        ->get();

    $tcCounts = Geo::counts();

    // Metros first, busiest first, so the grid leads with where tutors are.
    $tcMetros = $tcCities
        ->filter(fn ($c) => Geo::isMetro($c->slug))
        ->sortByDesc(fn ($c) => ($tcCounts[$c->slug]['tutors'] ?? 0) * 1000 + ($tcCounts[$c->slug]['areas'] ?? 0))
        ->values();

    $tcOthers = $tcCities->reject(fn ($c) => Geo::isMetro($c->slug))->sortBy('city_name')->values();

    $tcTutorTotal = collect($tcCounts)->sum('tutors');
@endphp

@if($tcCities->count())
<section class="section nxtc-sec" aria-labelledby="topCitiesTitle">
  <div class="section-head">
    <h2 class="section-title" id="topCitiesTitle">Home tutors in India’s major cities</h2>
    <p class="section-subtitle">
      Verified home tutors in {{ $tcCities->count() }} cities
      @if($tcTutorTotal > 0) ({{ number_format($tcTutorTotal) }} tutors and growing) @endif,
      and online tutoring everywhere in India. Pick your city for local tutors, areas and fees.
    </p>
  </div>

  <ul class="nxtc-grid">
    @foreach($tcMetros as $c)
      @php
        $n = $tcCounts[$c->slug] ?? ['tutors' => 0, 'areas' => 0, 'pages' => 0];
        $aka = Geo::akaOf($c->slug);
      @endphp
      <li class="nxtc-card">
        <a class="nxtc-link" href="{{ url('city/' . $c->slug) }}">
          <span class="nxtc-name">Home tutors in {{ $c->city_name }}</span>
          <span class="nxtc-meta">
            {{ Geo::stateOf($c->slug) }}@if($aka) · also {{ $aka }}@endif
          </span>
          @if($n['tutors'] > 0 || $n['areas'] > 0)
            <span class="nxtc-stats">
              @if($n['tutors'] > 0){{ number_format($n['tutors']) }} tutors @endif
              @if($n['tutors'] > 0 && $n['areas'] > 0) · @endif
              @if($n['areas'] > 0){{ number_format($n['areas']) }} areas @endif
            </span>
          @endif
        </a>
      </li>
    @endforeach
  </ul>

  @php $tcSubjects = \App\Support\SubjectLinks::pillars(); @endphp
  @if(count($tcSubjects))
    <h3 class="nx-card__kicker" style="margin:var(--nxt-s5) 0 var(--nxt-s3)">Popular subjects</h3>
    <ul class="nx-chips nx-chips--rail">
      @foreach($tcSubjects as $sp)<li><a class="nx-chip" href="{{ $sp['url'] }}">{{ $sp['label'] }}</a></li>@endforeach
    </ul>
  @endif

  @if($tcOthers->count())
    <h3 class="nx-card__kicker" style="margin:var(--nxt-s5) 0 var(--nxt-s3)">Also in</h3>
    <ul class="nx-chips nx-chips--rail">
      @foreach($tcOthers as $c)<li><a class="nx-chip" href="{{ url('city/' . $c->slug) }}">{{ $c->city_name }}</a></li>@endforeach
      <li><a class="nx-chip nx-chip--muted" href="{{ url('city') }}">All cities by state →</a></li>
    </ul>
  @endif

  <style>
    .nxtc-grid{list-style:none;margin:18px 0 0;padding:0;display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:12px}
    @media(max-width:900px){.nxtc-grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
    @media(max-width:520px){.nxtc-grid{grid-template-columns:1fr}}
    .nxtc-link{display:flex;flex-direction:column;gap:4px;padding:16px;border-radius:16px;border:1px solid rgba(255,255,255,.12);background:linear-gradient(180deg,rgba(255,255,255,.06),rgba(255,255,255,.02));color:#fff;text-decoration:none;height:100%}
    .nxtc-link:hover{border-color:rgba(255,255,255,.28)}
    .nxtc-name{font-weight:800;font-size:16px}
    .nxtc-meta{font-size:13px;opacity:.7}
    .nxtc-stats{font-size:13px;color:#9fb4ff;font-weight:700}
  </style>
</section>
@endif
