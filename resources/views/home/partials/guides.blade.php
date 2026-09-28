@php
    /**
     * "Guides for parents and students": the home page's links into the blog,
     * grouped by topic. Newest-first used to surface only the Gurugram
     * locality posts (there are ~80 of them), which buried the board and exam
     * guides; each topic now gets its own short list.
     *
     * Laid out as a bento grid so there is never a lone card on a row: the
     * biggest topic is a wide featured card, and the grid closes on "Can't
     * find it? Ask NXT AI" (a dead end turned into an action). Each topic has
     * its own drawn cover (home/partials/guide-cover) and one calm tint used
     * only in that drawing; links stay the link colour.
     */
    use App\Support\BlogTopics;
    use Illuminate\Support\Facades\DB;

    $gdPosts = DB::table('blog_managment')
        ->where('status', 't')
        ->whereNotNull('slug')->where('slug', '!=', '')
        ->orderByDesc('id')
        ->get(['title', 'slug']);

    $gdByTopic = [];
    foreach ($gdPosts as $p) {
        $gdByTopic[BlogTopics::of($p->slug)][] = $p;
    }

    // Topic => [tint a, tint b, one-line promise]. Local guides are linked
    // from their own area pages, so they get one line below, not a card.
    $gdMeta = [
        'boards'   => ['#22D3EE', '#0E7490', 'Study plans and exam tips, board by board.'],
        'entrance' => ['#FBBF24', '#F472B6', 'JEE, NEET, CUET and Olympiad preparation.'],
        'choose'   => ['#4ADE80', '#15803D', 'New to tutoring? Start here.'],
        'abroad'   => ['#38BDF8', '#9F1239', 'SAT, IELTS and TOEFL, step by step.'],
        'skills'   => ['#FBBF24', '#F472B6', 'Habits that make every subject easier.'],
    ];
    $gdTopics = array_values(array_filter(array_keys($gdMeta), fn ($t) => ! empty($gdByTopic[$t])));
    // The topic with the most guides leads, wide.
    usort($gdTopics, fn ($a, $b) => count($gdByTopic[$b]) <=> count($gdByTopic[$a]));
    // The closing "Ask NXT AI" card takes exactly the columns left on the last
    // row of four (the lead card is two wide), so no row ends with a gap.
    $gdLeft = (4 - ((count($gdTopics) + 1) % 4)) % 4;
    $gdAskSpan = $gdLeft === 0 ? 4 : $gdLeft;
@endphp

@if($gdTopics)
<section class="section nxgd-sec" aria-labelledby="guidesTitle">
  <div class="section-head">
    <span class="nxgd-eyebrow">Free guides · no sign-up needed</span>
    <h2 class="section-title" id="guidesTitle">Guides for parents and students</h2>
    <p class="section-subtitle">Board-by-board study plans, JEE and NEET preparation, and how to choose the right tutor.</p>
  </div>

  <div class="nxgd-grid">
    @foreach($gdTopics as $i => $topic)
      @php [$gA, $gB, $gPromise] = $gdMeta[$topic]; $gdList = $gdByTopic[$topic]; @endphp
      <article class="nxgd-card{{ $i === 0 ? ' nxgd-card--feature' : '' }}" style="--gd-a:{{ $gA }};--gd-b:{{ $gB }}">
        <a class="nxgd-card__cover" href="{{ url('blog') }}#topic-{{ $topic }}" tabindex="-1" aria-hidden="true">
          @include('home.partials.guide-cover', ['topic' => $topic])
          <span class="nxgd-card__count">{{ count($gdList) }} {{ count($gdList) === 1 ? 'guide' : 'guides' }}</span>
          @if($topic === 'choose')<span class="nxgd-card__flag">Start here</span>@endif
        </a>
        <div class="nxgd-card__body">
          <h3 class="nxgd-card__title">{{ BlogTopics::TOPICS[$topic] }}</h3>
          <p class="nxgd-card__promise">{{ $gPromise }}</p>
          <ul class="nxgd-card__list">
            @foreach(array_slice($gdList, 0, $i === 0 ? 4 : 3) as $p)
              <li><a href="{{ url('blog/' . trim($p->slug)) }}">{{ $p->title }}</a></li>
            @endforeach
          </ul>
          <a class="nxgd-card__all" href="{{ url('blog') }}#topic-{{ $topic }}">See all {{ count($gdList) }} guides</a>
        </div>
      </article>
    @endforeach

    <aside class="nxgd-ask" aria-labelledby="gdAskTitle" style="--gd-span:{{ $gdAskSpan }}">
      <div class="nxgd-ask__art">@include('partials.ai-mascot', ['size' => 96, 'wave' => true])</div>
      <div>
        <h3 id="gdAskTitle">Can't find your answer?</h3>
        <p>Ask NXT AI about your child's board, class or exam and get an answer in seconds, or let a tutor explain it in a free demo class.</p>
        <div class="nxgd-ask__cta">
          <a class="nxgd-ask__ai" href="#nxAskAISection">Ask NXT AI</a>
          <a class="nxgd-ask__demo" href="#demoModal" data-modal-target="demoModal">Book a free demo</a>
        </div>
      </div>
    </aside>
  </div>

  <p class="nxgd-foot">
    @if(!empty($gdByTopic['city']))
      Plus local guides for {{ count(array_unique(array_map(fn ($p) => \App\Support\BlogTopics::localityOf($p->slug), $gdByTopic['city']))) }} neighbourhoods on their area pages ·
    @endif
    <a href="{{ url('blog') }}">All guides</a>
  </p>
</section>
@endif
