{{--
  How home tuition works in this area's zone (config/zone_guides.php): the
  practical notes, the zone's long guide once it is live, and other areas in
  the same zone. Included by city/cityarea/single.blade.php.
--}}
@php $zgName = $areaSeo['name'] ?? $area->name; @endphp
<section class="cardx block section nxzone" id="zone" aria-labelledby="zoneTitle">
  <span class="nxzone__eyebrow">{{ $zoneName }} · {{ $city->city_name }}</span>
  <h2 class="h2" id="zoneTitle"><span></span>Home tuition in {{ $zgName }}: what to know</h2>

  {{-- One paragraph here (the same for every area in the zone); the area's
       own facts are in "at a glance" and the full text in the zone guide. --}}
  {{-- When the zone's full guide is live, it carries the zone text; the page
       keeps only the practical tips (identical zone text on every area page
       made neighbouring pages look alike). --}}
  @if(empty($zoneGuide['live']) && !empty($zoneGuide['intro'][0]))<p>{{ $zoneGuide['intro'][0] }}</p>@endif

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

  {{-- Neighbouring areas are listed once, in the "More areas" section. --}}

  <p class="nxzone__more">
    See all areas and our full guide for <a href="{{ url('/city/'.$city->slug) }}">home tutors in {{ $city->city_name }}</a>.
  </p>
</section>
