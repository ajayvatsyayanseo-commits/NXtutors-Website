@php
    /**
     * "Guides for parents and students": the home page's links into the blog,
     * grouped by topic. Newest-first used to surface only the Gurugram
     * locality posts (there are ~80 of them), which buried the board and exam
     * guides; each topic now gets its own short list.
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

    // Local guides are linked from their own area pages; here they get one
    // line so they do not crowd out the national topics.
    $gdOrder = ['boards', 'entrance', 'choose', 'abroad', 'skills'];
@endphp

@if($gdPosts->count())
<section class="section nxgd-sec" aria-labelledby="guidesTitle">
  <div class="section-head">
    <h2 class="section-title" id="guidesTitle">Guides for parents and students</h2>
    <p class="section-subtitle">Board-by-board study plans, JEE and NEET preparation, and how to choose the right tutor.</p>
  </div>

  <div class="nx-rail">
    @foreach($gdOrder as $topic)
      @continue(empty($gdByTopic[$topic]))
      <div class="nx-card">
        <span class="nx-card__kicker">{{ count($gdByTopic[$topic]) }} guides</span>
        <h3 class="nx-card__title">{{ BlogTopics::TOPICS[$topic] }}</h3>
        <ul>
          @foreach(array_slice($gdByTopic[$topic], 0, 4) as $p)
            <li><a href="{{ url('blog/' . trim($p->slug)) }}">{{ $p->title }}</a></li>
          @endforeach
        </ul>
        <a class="nx-sec__action" style="margin-top:auto;padding-top:8px" href="{{ url('blog') }}#topic-{{ $topic }}">All {{ strtolower(BlogTopics::TOPICS[$topic]) }} →</a>
      </div>
    @endforeach
  </div>

  <p style="margin:var(--nxt-s4) 0 0;font-size:var(--nxt-t-sm);color:var(--nxt-text-dim)">
    @if(!empty($gdByTopic['city']))
      Plus local guides for {{ count(array_unique(array_map(fn ($p) => \App\Support\BlogTopics::localityOf($p->slug), $gdByTopic['city']))) }} neighbourhoods on their area pages ·
    @endif
    <a class="nx-sec__action" href="{{ url('blog') }}">All guides →</a>
  </p>
</section>
@endif
