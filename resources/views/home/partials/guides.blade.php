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

  <div class="nxgd-grid">
    @foreach($gdOrder as $topic)
      @continue(empty($gdByTopic[$topic]))
      <div class="nxgd-col">
        <h3 class="nxgd-h">{{ BlogTopics::TOPICS[$topic] }}</h3>
        <ul class="nxgd-list">
          @foreach(array_slice($gdByTopic[$topic], 0, 5) as $p)
            <li><a href="{{ url('blog/' . trim($p->slug)) }}">{{ $p->title }}</a></li>
          @endforeach
        </ul>
      </div>
    @endforeach
  </div>

  <p class="nxgd-all">
    @if(!empty($gdByTopic['city']))
      Local guides for {{ count($gdByTopic['city']) }} neighbourhoods are on each area page. ·
    @endif
    <a href="{{ url('blog') }}">All guides →</a>
  </p>

  <style>
    .nxgd-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:18px;margin-top:16px}
    .nxgd-h{font-size:15px;font-weight:800;margin:0 0 8px;color:#fff}
    .nxgd-list{list-style:none;margin:0;padding:0}
    .nxgd-list li{padding:5px 0;font-size:14px;line-height:1.4}
    .nxgd-list a,.nxgd-all a{color:#c9d6ff;text-decoration:none}
    .nxgd-list a:hover,.nxgd-all a:hover{text-decoration:underline}
    .nxgd-all{margin:14px 0 0;font-size:14px;opacity:.9}
  </style>
</section>
@endif
