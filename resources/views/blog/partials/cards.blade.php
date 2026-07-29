@foreach($blogs as $b)
  @php
    $img = !empty($b->avatar)
      ? (str_starts_with($b->avatar,'http') ? $b->avatar : asset('storage/blog/'.$b->avatar))
      : asset('frount/assets/images/og-default.jpg');
  @endphp

  <a class="blog-card" href="{{ url('/blog/'.$b->slug) }}">
    <img class="blog-thumb" src="{{ $img }}" alt="{{ $b->title }}"
         loading="lazy"
         onerror="this.src='{{ asset('frount/assets/images/og-default.jpg') }}'">

    <div class="blog-body">
      <h3 class="blog-title">{{ $b->title }}</h3>
      <p class="blog-desc">{{ \Illuminate\Support\Str::limit(strip_tags($b->short_desc ?? $b->bdesc ?? ''), 90) }}</p>
      <span class="blog-read">Read more →</span>
    </div>
  </a>
@endforeach
