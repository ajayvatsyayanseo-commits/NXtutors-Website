{{--
  How home tuition works in this area's zone (config/zone_guides.php): the
  practical notes, the zone's long guide once it is live, and other areas in
  the same zone. Included by city/cityarea/single.blade.php.
--}}
@php $zgName = $areaSeo['name'] ?? $area->name; @endphp
<section class="cardx block section nxzone" id="zone" aria-labelledby="zoneTitle">
  <span class="nxzone__eyebrow">{{ $zoneName }} · {{ $city->city_name }}</span>
  <h2 class="h2" id="zoneTitle"><span></span>Home tuition in {{ $zgName }}: what to know</h2>

  @foreach($zoneGuide['intro'] ?? [] as $para)
    <p>{{ $para }}</p>
  @endforeach

  @if(!empty($zoneGuide['tips']))
    <h3 class="nxzone__h3">Before the first class</h3>
    <ul class="nxzone__tips">
      @foreach($zoneGuide['tips'] as $tip)
        <li>{{ $tip }}</li>
      @endforeach
    </ul>
  @endif

  @if(!empty($zoneGuide['live']))
    <p class="nxzone__more">
      <a href="{{ url('/blog/'.$zoneGuide['guide']) }}">Read the full guide to home tuition in {{ $zoneName }} →</a>
    </p>
  @endif

  @if($zoneAreas->isNotEmpty())
    <h3 class="nxzone__h3">More areas nearby</h3>
    <ul class="nxzone__areas">
      @foreach($zoneAreas as $za)
        <li><a href="{{ url('/city/'.$city->slug.'/'.$za->slug) }}">{{ \App\Support\CityHub::cleanAreaName($za->name, $za->slug) }}</a></li>
      @endforeach
    </ul>
  @endif

  <p class="nxzone__more">
    See all areas and our full guide for <a href="{{ url('/city/'.$city->slug) }}">home tutors in {{ $city->city_name }}</a>.
  </p>
</section>
