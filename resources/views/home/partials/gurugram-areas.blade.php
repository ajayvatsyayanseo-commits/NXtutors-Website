@php
    /**
     * "Home tutors across Gurugram": the home page's link into the Gurugram hub
     * and its best-known localities.
     *
     * Gurugram is where NXTutors is based and where most of its area pages are,
     * but the home page never linked to any of them, so the one page with the
     * most authority passed none of it to the pages that should rank for
     * "home tutor in <locality> gurgaon".
     *
     * Only areas that exist and are active are shown, so a renamed or disabled
     * slug drops out instead of becoming a broken link. Labels are written here
     * because the admin titles are long headlines, not link text.
     */
    use App\Models\City;
    use App\Models\City_area;
    use App\Models\Register;
    use Illuminate\Support\Facades\DB;

    $ggPicks = [
        'dlf-phase-1'                    => 'DLF Phase 1',
        'dlf-phase-2'                    => 'DLF Phase 2',
        'dlf-phase-3'                    => 'DLF Phase 3',
        'dlf-phase-4'                    => 'DLF Phase 4',
        'dlf-phase-5'                    => 'DLF Phase 5',
        '-golf-course-extn'              => 'Golf Course Extension Road',
        'dlf-garden-city'                => 'DLF Garden City',
        'dlf-new-town-heights-1'         => 'DLF New Town Heights',
        'ardee-city'                     => 'Ardee City',
        'greenwood-city'                 => 'Greenwood City',
        'vatika-city-sector-49-gurugram' => 'Vatika City, Sector 49',
        'm3m-urbana-residences-sector-67-gurugram' => 'M3M Urbana, Sector 67',
        'emaar-palm-drive'               => 'Emaar Palm Drive',
        'emaar-palm-hills'               => 'Emaar Palm Hills',
        'bestech-park-view-city-1'       => 'Bestech Park View City',
        'ansal-esencia'                  => 'Ansal Esencia',
        'the-world-spa-eastwest-sector-30-gurugram' => 'The World Spa, Sector 30',
        'huda-plots'                     => 'HUDA plots',
    ];

    $ggCity = City::where('slug', 'gurugram')->where('status', 't')->first();

    $ggAreas = collect();
    $ggAreaTotal = 0;
    $ggTutors = 0;

    if ($ggCity) {
        $ggFound = City_area::where('city_id', $ggCity->id)
            ->where('status', 't')
            ->whereIn('slug', array_keys($ggPicks))
            ->pluck('slug')
            ->all();

        // Keep the order above rather than the database's.
        $ggAreas = collect($ggPicks)->filter(fn ($label, $slug) => in_array($slug, $ggFound, true));

        $ggAreaTotal = City_area::where('city_id', $ggCity->id)->where('status', 't')->count();

        $ggTutors = Register::applyPublicVisibility(DB::table('register')->where('join_as', 'teacher'))
            ->whereIn(DB::raw('LOWER(TRIM(city))'), ['gurugram', 'gurgaon'])
            ->count();
    }
@endphp

@if($ggCity)
<section class="section nxcs-sec" aria-labelledby="gurugramAreasTitle">
  <h2 class="nxcs-title" id="gurugramAreasTitle">Home tutors across Gurugram (Gurgaon)</h2>

  <p class="nxcs-lede">
    NXTutors is based in Sector 66, Gurugram.
    @if($ggTutors > 0)
      {{ number_format($ggTutors) }} verified tutors in the city
    @else
      Our tutors
    @endif
    teach CBSE, ICSE, IB and IGCSE students at home, from Classes 6 to 12, as well as
    JEE and NEET aspirants. Pick your locality to see tutors near you, or
    <a href="{{ url('city/gurugram') }}">browse all {{ $ggAreaTotal > 0 ? $ggAreaTotal . ' ' : '' }}Gurugram areas</a>.
  </p>

  @if($ggAreas->count())
  <ul class="nxcs-list">
    @foreach($ggAreas as $slug => $label)
      <li class="nxcs-item">
        <a class="nxcs-link" href="{{ url('city/gurugram/' . $slug) }}">
          <span class="nxcs-name">{{ $label }}</span>
        </a>
      </li>
    @endforeach
    <li class="nxcs-item">
      <a class="nxcs-link" href="{{ url('city/gurugram') }}">
        <span class="nxcs-name">All Gurugram areas →</span>
      </a>
    </li>
  </ul>
  @endif
</section>
@endif
