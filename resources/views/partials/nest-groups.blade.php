{{-- A city's subject pages grouped by kind (SubjectLinks::forCityGrouped):
     board, board × subject, subject, class, exam, audience. Chips, one row
     per group. Pass $groups, $nestTitle and optionally $nestId / $nestSub. --}}
@if(!empty($groups))
  @php $nestId = $nestId ?? 'nestGroups'; @endphp
  <section class="nx-sec nx-nest" aria-labelledby="{{ $nestId }}">
    <div class="nx-sec__head">
      <div>
        <h2 class="nx-sec__title" id="{{ $nestId }}">{{ $nestTitle }}</h2>
        @if(!empty($nestSub))<p class="nx-sec__sub">{{ $nestSub }}</p>@endif
      </div>
    </div>
    @foreach($groups as $kind => $g)
      <h3 class="nx-card__kicker" style="margin:var(--nxt-s4, 14px) 0 var(--nxt-s2, 6px)">{{ $g['title'] }}</h3>
      <ul class="nx-chips nx-chips--rail" data-kind="{{ $kind }}">
        @foreach($g['items'] as $it)<li><a class="nx-chip" href="{{ $it['url'] }}">{{ $it['label'] }}</a></li>@endforeach
      </ul>
    @endforeach
  </section>
@endif
