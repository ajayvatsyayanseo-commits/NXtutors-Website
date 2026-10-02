{{-- Related links as chip groups. Expects $related: list of ['title' => .., 'items' => [['url','label'], ..]] (empty groups are skipped). --}}
@php $related = array_values(array_filter($related ?? [], fn ($g) => !empty($g['items']))); @endphp
@if($related)
  <section class="nx-sec nxj-related" aria-labelledby="relatedTitle">
    <div class="nx-sec__head"><h2 class="nx-sec__title" id="relatedTitle">Related pages</h2></div>
    @foreach($related as $g)
      <h3 class="nxj-related__h">{{ $g['title'] }}</h3>
      <ul class="nx-chips">
        @foreach($g['items'] as $it)<li><a class="nx-chip{{ !empty($it['muted']) ? ' nx-chip--muted' : '' }}" href="{{ $it['url'] }}">{{ $it['label'] }}</a></li>@endforeach
      </ul>
    @endforeach
  </section>
@endif
