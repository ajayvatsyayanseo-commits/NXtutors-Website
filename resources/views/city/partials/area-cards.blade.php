@forelse($areas as $a)
 

  <div class="area-card" data-name="{{ strtolower($a->main_title) }}">
    <h3 class="area-name">{{ $a->main_title }}</h3>

    <div class="area-meta">
      {!! $a->short_desc !!}
    </div>

    <div class="area-actions">
      <a class="btn-outline" href="{{ url('/')}}/city/{{ $city->slug }}/{{ $a->slug}}">View Tutors</a>
    </div>
  </div>
@empty
@endforelse
