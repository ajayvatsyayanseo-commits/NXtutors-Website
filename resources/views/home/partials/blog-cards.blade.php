@foreach($blogs as $b)
  @php
    $thumb = $b->avatar
      ? asset('storage/blog/'.$b->avatar)
      : asset('frount/assets/images/blog1.jpg');
  @endphp

  <article class="blog-card">
    <div class="blog-thumb">
      <img src="{{ $thumb }}" alt="{{ $b->title }}"
           onerror="this.src='{{ asset('frount/assets/images/blog1.jpg') }}'">
    </div>

    <div class="blog-body">
      <div class="blog-kicker">Latest • {{ $b->date ?? '' }}</div>

      <h3 class="blog-title">
        <a href="{{ url('/blog/'.$b->slug) }}" style="color:inherit;text-decoration:none;">
          {{ $b->title }}
        </a>
      </h3>

      <p class="blog-text">
        {{ \Illuminate\Support\Str::limit(strip_tags($b->meta_desc ?? ''), 90) }}
      </p>

      <div class="blog-meta">Read more →</div>
    </div>
  </article>
@endforeach
