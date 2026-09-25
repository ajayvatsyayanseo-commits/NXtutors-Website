@php
    /**
     * "Cities we serve, by state": the coverage band above the footer.
     *
     * Every city here is a row in city_managment with status 't' and links to
     * its own /city/{slug} page; each state heading links to that state's
     * section of the /city directory. Together with the metro cards higher up
     * the page this gives Google the India → state → city path.
     *
     * Only cities with tutors on record are claimed as areaServed in the
     * structured data; asserting coverage where there is no supply is the part
     * that would actually hurt.
     */
    use App\Support\Geo;
    use Illuminate\Support\Facades\DB;

    $cities = DB::table('city_managment')
        ->where('status', 't')
        ->select('city_name', 'slug')
        ->orderBy('city_name')
        ->get()
        ->filter(fn ($c) => trim((string) $c->slug) !== '')
        ->values();

    $csCounts = Geo::counts();
    $csStates = Geo::groupByState($cities);
@endphp

@if($cities->count())
<section class="section nxcs-sec" aria-labelledby="citiesServedTitle">
  <h2 class="nxcs-title" id="citiesServedTitle">Cities we serve, by state</h2>

  <p class="nxcs-lede">
    Home and online tutoring across {{ $cities->count() }} cities in {{ count(array_diff(array_keys($csStates), [Geo::OTHER_STATE])) }} states and union territories.
    Pick a city to see verified tutors near you, their subjects and fees, and to book a free demo class.
  </p>

  <div class="nxcs-states">
    @foreach($csStates as $state => $list)
      <div class="nxcs-state">
        <h3 class="nxcs-state-h">
          <a href="{{ url('city') }}#{{ Geo::stateSlug($state) }}">{{ $state }}</a>
        </h3>
        <ul class="nxcs-list">
          @foreach($list as $c)
            <li class="nxcs-item">
              <a class="nxcs-link" href="{{ url('city/' . $c->slug) }}">
                <span class="nxcs-name">{{ $c->city_name }}</span>
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    @endforeach
  </div>

  <style>
    .nxcs-states{display:grid;grid-template-columns:repeat(auto-fill,minmax(210px,1fr));gap:14px 22px;margin-top:14px}
    .nxcs-state-h{font-size:13px;font-weight:800;letter-spacing:.04em;text-transform:uppercase;margin:0 0 6px}
    .nxcs-state-h a{color:#9fb4ff;text-decoration:none}
  </style>

  @php
    $nxcsLd = [
      '@context' => 'https://schema.org',
      '@type'    => 'Service',
      '@id'      => url()->current() . '#coverage',
      'name'     => 'Home and online tutoring',
      'serviceType' => 'Tutoring',
      'provider' => ['@type' => 'Organization', 'name' => 'NXTutors', 'url' => url('/')],
      'areaServed' => $cities
          ->filter(fn ($c) => ($csCounts[$c->slug]['tutors'] ?? 0) > 0)
          ->map(fn ($c) => [
              '@type' => 'City',
              'name'  => $c->city_name,
              'url'   => url('city/' . $c->slug),
              'containedInPlace' => ['@type' => 'State', 'name' => Geo::stateOf($c->slug)],
          ])->values()->all(),
    ];
  @endphp
  <script type="application/ld+json">{!! json_encode($nxcsLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
</section>
@endif
