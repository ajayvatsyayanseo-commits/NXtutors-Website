{{-- One floating card of the About section (see about-tank.blade.php). $c from App\Support\TutorAbout. --}}
<article class="nxtank__fish nxtank__fish--{{ $c['span'] }}" tabindex="0" data-intents="{{ implode(' ', $c['intents']) }}">
  <div class="nxtank__icon" aria-hidden="true"><svg viewBox="0 0 24 24">{!! $icon !!}</svg></div>
  <h3>{{ $c['title'] }}</h3>
  @if($c['lead'] !== '')<p>{{ $c['lead'] }}</p>@endif
  @if($c['list'])
    <ul class="nxtank__list">@foreach($c['list'] as $item)<li>{{ $item }}</li>@endforeach</ul>
  @endif
  @if($c['tags'])
    <ul class="nxtank__tags">@foreach($c['tags'] as $t)<li>{{ $t }}</li>@endforeach</ul>
  @endif
  @if($c['steps'])
    <ol class="nxtank__steps" style="--nxtank-steps:{{ count($c['steps']) > 6 ? 4 : count($c['steps']) }}">@foreach($c['steps'] as $s)<li>{{ $s }}</li>@endforeach</ol>
  @endif
  @if($c['more'])
    <details class="nxtank__more"><summary>More</summary>
      <div>
        @foreach($c['more'] as $b)
          @if($b['type'] === 'list')
            <ul>@foreach($b['items'] as $item)<li>{{ $item }}</li>@endforeach</ul>
          @else
            <p>{{ $b['text'] }}</p>
          @endif
        @endforeach
      </div>
    </details>
  @endif
</article>
