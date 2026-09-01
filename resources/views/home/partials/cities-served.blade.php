@php
    /**
     * "Cities we serve" — the coverage band that sits above the footer.
     *
     * Every city here is a row in city_managment with status 't', and every one
     * links to its own /city/{slug} page, so this is real internal linking into
     * pages that exist rather than a decorative word cloud.
     *
     * Names only, no counts: a number beside five cities and nothing beside the
     * other nineteen reads as "we have nobody there". The tutor tally is still
     * computed, because it decides which cities are claimed as areaServed in the
     * structured data below — asserting coverage in a city with no tutors on
     * record is the part that would actually hurt.
     */
    use Illuminate\Support\Facades\DB;

    // Collapse spelling and spacing so "Delhi NCR", "delhi-ncr" and "Delhi ncr"
    // land on one key. Aliases cover the renames people still type.
    $keyOf = function (?string $name): string {
        $k = strtolower(trim((string) $name));
        $k = preg_replace('/[^a-z]/', '', $k);

        return match ($k) {
            'gurgaon'                       => 'gurugram',
            'bangalore'                     => 'bengaluru',
            'bombay'                        => 'mumbai',
            'calcutta'                      => 'kolkata',
            'madras'                        => 'chennai',
            'newdelhi', 'delhi', 'ncr'      => 'delhincr',
            'trivandrum'                    => 'thiruvananthapuram',
            default                         => $k,
        };
    };

    $cities = DB::table('city_managment')
        ->where('status', 't')
        ->select('city_name', 'slug')
        ->orderBy('city_name')
        ->get()
        ->filter(fn ($c) => trim((string) $c->slug) !== '')
        ->values();

    // One grouped query rather than a count per city.
    $tutorCounts = collect();
    foreach (DB::table('register')->where('join_as', 'teacher')->where('status', 't')
        ->select(DB::raw('city'), DB::raw('COUNT(*) as n'))->groupBy('city')->get() as $row) {
        $k = $keyOf($row->city);
        if ($k === '') {
            continue;
        }
        $tutorCounts[$k] = ($tutorCounts[$k] ?? 0) + (int) $row->n;
    }

    $withCounts = $cities->map(fn ($c) => [
        'name'  => $c->city_name,
        'slug'  => $c->slug,
        'count' => $tutorCounts[$keyOf($c->city_name)] ?? 0,
    ]);

    $covered = $withCounts->where('count', '>', 0)->count();
@endphp

@if($cities->count())
<section class="section nxcs-sec" aria-labelledby="citiesServedTitle">
  <h2 class="nxcs-title" id="citiesServedTitle">Cities we serve</h2>

  <p class="nxcs-lede">
    Home and online tutoring across {{ $cities->count() }} cities in India. Pick a city to
    see verified tutors near you, their subjects and fees, and to book a free demo class.
  </p>

  <ul class="nxcs-list">
    @foreach($withCounts as $c)
      <li class="nxcs-item">
        <a class="nxcs-link" href="{{ url('city/' . $c['slug']) }}">
          <span class="nxcs-name">{{ $c['name'] }}</span>
        </a>
      </li>
    @endforeach
  </ul>

  {{-- The cities this band links to. Only those with tutors on record are
       claimed as served areas; the rest are still linked above but not asserted
       here as places we have supply in. --}}
  <script type="application/ld+json">
  {!! json_encode([
      '@context' => 'https://schema.org',
      '@type'    => 'Service',
      '@id'      => url()->current() . '#coverage',
      'name'     => 'Home and online tutoring',
      'serviceType' => 'Tutoring',
      'provider' => ['@type' => 'Organization', 'name' => 'NXTutors', 'url' => url('/')],
      'areaServed' => $withCounts->where('count', '>', 0)->map(fn ($c) => [
          '@type' => 'City',
          'name'  => $c['name'],
          'url'   => url('city/' . $c['slug']),
      ])->values()->all(),
  ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
  </script>
</section>
@endif
