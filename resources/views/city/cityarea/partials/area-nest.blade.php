{{-- Where to go from an area page (App\Support\LinkNest): its zone, 4–6
     city pages chosen for this area (the zone's board mix first), and nearby
     areas in the zone. Different on every area page, unlike the old rail. --}}
@php
  $nestArea = $areaSeo['name'] ?? $area->name;
  $nestNearby = collect($nest['nearby'] ?? []);
  $nestSameZone = !empty($nest['zone']) && $nestNearby->every(fn ($a) => $a->zone === $nest['zone']);
@endphp
@if(!empty($nest) && (!empty($nest['zoneUrl']) || count($nest['pages'] ?? []) || $nestNearby->count()))
<section class="cardx block section nx-sec" id="area-nest">
  <h2 class="h2"><span></span>Find a tutor near {{ $nestArea }}</h2>

  @if(!empty($nest['zoneUrl']))
    <h3 class="nx-card__kicker" style="margin:var(--nxt-s3, 10px) 0 var(--nxt-s2, 6px)">Your zone</h3>
    <ul class="nx-chips">
      <li><a class="nx-chip" href="{{ $nest['zoneUrl'] }}">Home tutors in {{ $nest['zone'] }}</a></li>
    </ul>
  @endif

  @if(count($nest['pages'] ?? []))
    <h3 class="nx-card__kicker" style="margin:var(--nxt-s4, 14px) 0 var(--nxt-s2, 6px)">By board and subject</h3>
    <ul class="nx-chips">
      @foreach($nest['pages'] as $p)<li><a class="nx-chip" href="{{ $p['url'] }}">{{ $p['label'] }}</a></li>@endforeach
    </ul>
  @endif

  @if($nestNearby->count())
    <h3 class="nx-card__kicker" style="margin:var(--nxt-s4, 14px) 0 var(--nxt-s2, 6px)">{{ $nestSameZone ? 'Nearby in ' . $nest['zone'] : 'Nearby areas' }}</h3>
    <ul class="nx-chips">
      @foreach($nestNearby as $nb)<li><a class="nx-chip" href="{{ $nb->url }}">{{ $nb->name }}</a></li>@endforeach
    </ul>
  @endif
</section>
@endif
