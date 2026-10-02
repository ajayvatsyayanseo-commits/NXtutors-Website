{{-- "Nearby in NCR": the same page in the other NCR cities, only where it is live
     (App\Support\LinkNest::ncrSiblings, at most five). --}}
@if(count($related['ncr'] ?? []))
  <section class="nx-sec" aria-labelledby="nearNcrTitle">
    <div class="nx-sec__head">
      <h2 class="nx-sec__title" id="nearNcrTitle">Nearby in NCR</h2>
    </div>
    <ul class="nx-chips nx-chips--rail">
      @foreach($related['ncr'] as $r)<li><a class="nx-chip" href="{{ $r['url'] }}">{{ $r['label'] }}</a></li>@endforeach
    </ul>
  </section>
@endif
