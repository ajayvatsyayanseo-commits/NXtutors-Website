@forelse($areas as $a)
 

  @php $aName = \App\Support\CityHub::cleanAreaName($a->name, $a->slug); @endphp
  <div class="area-card" data-name="{{ strtolower($aName.' '.$a->main_title) }}">
    <h3 class="area-name">Home tutors in {{ $aName }}</h3>

    <div class="area-meta">
      {!! $a->short_desc !!}
    </div>

    <div class="area-actions">
      <a class="btn-outline" href="{{ url('/')}}/city/{{ $city->slug }}/{{ $a->slug}}">View Tutors</a>
    </div>
  </div>
@empty
@endforelse
