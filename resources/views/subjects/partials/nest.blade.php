{{-- Zones and localities of the city on a city subject / board / class / exam
     page (App\Support\LinkNest): every live zone with a one-line hint, then
     8–12 areas that rotate by page so the city's pages between them link
     every area. --}}
@php
  $nestCity = !empty($page['city_slug']) ? \App\Support\LinkNest::cityLabel($page['city_slug'], $page['city'] ?? null) : null;
  $nestWhat = ucfirst(\App\Support\SubjectLinks::lcLabel(trim((string) preg_replace('/\s+in\s+[^()]*$/u', '', \App\Support\SubjectLinks::anchor($page)))));
@endphp
@if($nestCity && (count($related['zones'] ?? []) || count($related['localities'] ?? [])))
  <style>
    body.page .nx-nest__zones{list-style:none;margin:0;padding:0;display:grid;grid-template-columns:repeat(auto-fill,minmax(230px,1fr));gap:8px 16px}
    body.page .nx-nest__zones li{display:flex;flex-direction:column;gap:2px;min-width:0}
    body.page .nx-nest__hint{font-size:.85em;color:var(--nxt-muted, #64748b)}
  </style>
  @if(count($related['zones'] ?? []))
    <section class="nx-sec" aria-labelledby="nestZonesTitle">
      <div class="nx-sec__head">
        <h2 class="nx-sec__title" id="nestZonesTitle">{{ $nestCity }} by zone</h2>
      </div>
      <ul class="nx-nest__zones">
        @foreach($related['zones'] as $z)
          <li><a href="{{ $z->url }}">Home tutors in {{ $z->name }}</a>@if($z->hint !== '')<span class="nx-nest__hint">{{ $z->hint }}</span>@endif</li>
        @endforeach
      </ul>
    </section>
  @endif
  @if(count($related['localities'] ?? []))
    <section class="nx-sec" aria-labelledby="nestAreasTitle">
      <div class="nx-sec__head">
        <h2 class="nx-sec__title" id="nestAreasTitle">{{ $nestWhat }} by locality in {{ $nestCity }}</h2>
      </div>
      <ul class="nx-chips">
        @foreach($related['localities'] as $a)<li><a class="nx-chip" href="{{ $a->url }}">{{ $a->name }}</a></li>@endforeach
      </ul>
    </section>
  @endif
@endif
