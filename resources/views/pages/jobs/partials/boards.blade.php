{{--
  "Boards you can teach here": one card per board (JSON board_cards, or the
  state board box), each with its classes, a note, the official site and our
  own board pages in the city / state (JobsPage::boardCards).
  Expects: $boards, $boardsTitle, $boardsSub (optional).
--}}
<section class="nx-sec" id="boards" aria-labelledby="boardTitle">
  <div class="nx-sec__head"><h2 class="nx-sec__title" id="boardTitle">{{ $boardsTitle }}</h2></div>
  @if(!empty($boardsSub))<p class="nx-sec__sub">{{ \App\Support\JobsContent::rich($boardsSub) }}</p>@endif
  <div class="nxj-boards">
    @foreach($boards as $b)
      <article class="nxj-board nxjobs-board">
        <div class="nxj-board__head">
          <span class="nxj-board__mark" aria-hidden="true">{{ $b['mark'] }}</span>
          <div>
            <h3>@if($b['site'] !== '')<a href="{{ $b['site'] }}" rel="noopener" target="_blank">{{ $b['name'] }}</a>@else{{ $b['name'] }}@endif</h3>
            @if($b['classes'] !== '')<p class="nxj-board__classes">{{ $b['classes'] }}</p>@endif
          </div>
        </div>
        @if($b['note'] !== '')<p>{{ \App\Support\JobsContent::rich($b['note']) }}</p>@endif
        @if($b['site'] !== '' || $b['pages'])
          <ul class="nxj-board__links">
            @if($b['site'] !== '')<li>Official site: <a href="{{ $b['site'] }}" rel="noopener" target="_blank">{{ preg_replace('#^https?://(www\.)?#i', '', rtrim($b['site'], '/')) }}</a></li>@endif
            @foreach($b['pages'] as $pg)<li><a href="{{ $pg['url'] }}">{{ $pg['label'] }}</a></li>@endforeach
          </ul>
        @endif
      </article>
    @endforeach
  </div>
</section>
