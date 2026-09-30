{{--
  "{Area} at a glance": facts that are true for this area only (zone,
  sector, neighbours, pincode, real tutors living in or travelling to it,
  what nearby families asked for), so neighbouring area pages differ in
  substance, not just in the name. Built in HomeController::cityAreaShow.
--}}
@php
  $gName = $areaSeo['name'] ?? $area->name;
  $gCity = $city->city_name;
  $gc = $glance['counts'];
  $gLocal = $gc['in'] + $gc['travel'];
  $gNb = $glance['neighbours']->pluck('name')->all();
  $gNbText = count($gNb) > 1 ? implode(', ', array_slice($gNb, 0, -1)) . ' and ' . end($gNb) : ($gNb[0] ?? '');
  $gTutor = fn (int $n) => $n === 1 ? '1 tutor' : $n . ' tutors';
  $gParts = [$gName . ' is in ' . ($glance['zone'] ? 'the ' . $glance['zone'] . ' part of ' . $gCity : $gCity) . ($glance['sector'] ? ' (' . $glance['sector'] . ')' : '') . '.'];
  if ($gNbText !== '') { $gParts[] = 'Its neighbouring areas include ' . $gNbText . '.'; }
  if ($gLocal > 0) {
    $gParts[] = $gTutor($gLocal) . ' on NXTutors ' . ($gLocal === 1 ? 'lives in or travels' : 'live in or travel') . ' to ' . $gName
      . ($gc['zone'] > 0 ? ', and ' . $gTutor($gc['zone']) . ' more ' . ($gc['zone'] === 1 ? 'covers' : 'cover') . ' the wider ' . $glance['zone'] . ' zone' : '') . '.';
  } elseif ($gc['zone'] > 0) {
    $gParts[] = 'No tutor lives in ' . $gName . ' yet; ' . $gTutor($gc['zone']) . ' ' . ($gc['zone'] === 1 ? 'covers' : 'cover') . ' the ' . $glance['zone'] . ' zone, and online tutors can teach from anywhere.';
  } else {
    $gParts[] = 'No home tutor lists ' . $gName . ' yet, so the tutors below are from elsewhere in ' . $gCity . ' or teach online.';
  }
  if (!empty($glance['asked'])) { $gParts[] = 'Recent requests from families nearby include ' . implode('; ', $glance['asked']) . '.'; }
  $gSentence = implode(' ', $gParts);
@endphp
<section class="cardx block section nxglance" id="at-a-glance" aria-labelledby="glanceTitle">
  <h2 class="h2" id="glanceTitle"><span></span>{{ $gName }} at a glance</h2>
  <p>{{ $gSentence }}</p>
  <div class="nx-table-wrap">
    <table class="nx-table">
      <tbody>
        @if($glance['zone'])<tr><th scope="row">Zone</th><td>{{ $glance['zone'] }}, {{ $gCity }}</td></tr>@endif
        @if($glance['sector'])<tr><th scope="row">Sector</th><td>{{ $glance['sector'] }}</td></tr>@endif
        @if($glance['pincode'] !== '')<tr><th scope="row">PIN code</th><td>{{ $glance['pincode'] }}</td></tr>@endif
        @if($glance['neighbours']->isNotEmpty())
          <tr><th scope="row">Neighbouring areas</th><td>
            @foreach($glance['neighbours'] as $nb)<a href="{{ url('/city/' . $city->slug . '/' . $nb->slug) }}">{{ $nb->name }}</a>@if(!$loop->last), @endif @endforeach
          </td></tr>
        @endif
        <tr><th scope="row">Tutors here</th><td>{{ $gc['in'] . ' live in ' . $gName . ' · ' . $gc['travel'] . ' travel here' . ($glance['zone'] ? ' · ' . $gc['zone'] . ' cover the zone' : '') }}</td></tr>
        <tr><th scope="row">Lessons</th><td>At home in {{ $gName }}, online, or both</td></tr>
        <tr><th scope="row">Fees</th><td>Most sessions ₹800–2,500 an hour; you see each tutor's fee before the demo</td></tr>
        <tr><th scope="row">First class</th><td>Free demo; switching tutor later is free</td></tr>
        @if(!empty($zoneGuide['live']))<tr><th scope="row">Local guide</th><td><a href="{{ url('/blog/' . $zoneGuide['guide']) }}">Home tuition in {{ $glance['zone'] }}</a></td></tr>@endif
      </tbody>
    </table>
  </div>
</section>
