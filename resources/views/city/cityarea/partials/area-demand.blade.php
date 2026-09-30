{{--
  Recent tutor requests near this area, anonymised (App\Support\AreaDemand):
  month, class, board and subject only, and only when there are enough
  requests that no family can be picked out.
--}}
@php $adName = $areaSeo['name'] ?? $area->name; @endphp
<section class="cardx block section nxdemand" id="requests" aria-labelledby="demandTitle">
  <h2 class="h2" id="demandTitle"><span></span>
    @if($areaDemand['scope'] === 'area')
      Recent tutor requests in {{ $adName }}
    @else
      Recent tutor requests near {{ $adName }} ({{ $areaDemand['scope'] }})
    @endif
  </h2>
  <p class="nxarea-note">What families nearby asked us for in the last six months. We show only the class, board and subject, never who asked.</p>
  <ul class="nxdemand__list">
    @foreach($areaDemand['rows'] as $r)
      <li><span class="nxdemand__month">{{ $r['month'] }}</span><span class="nxdemand__what">{{ $r['what'] }}</span></li>
    @endforeach
  </ul>
  <p class="nxzone__more"><a href="#tutors">Need the same? See tutors for {{ $adName }} →</a></p>
</section>
