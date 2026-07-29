@foreach($blogs as $b)
  @php
    $img = $b->avatar
      ? asset('storage/blog/'.$b->avatar)    
      : asset('frount/assets/images/blog1.jpg');

    // title tag (small)
    $tag = trim(($page->location ?? '').' · '.($page->city ?? ''));
    $desc = strip_tags($b->meta_desc ?? '');
    $desc = \Illuminate\Support\Str::limit($desc, 90);

    $blogUrl = url('/blog/'.$b->slug);  
  @endphp

  <a href="{{ $blogUrl }}" class="blogcard">
    <div class="blogcard__img">
      <img src="{{ $img }}" alt="{{ $b->title }}"
           onerror="this.src='{{ asset('frount/assets/images/blog1.jpg') }}'">
    </div>

    <div class="blogcard__body">
      <div class="blogcard__tag">{{ $tag }}</div>
      <div class="blogcard__title">{{ $b->title }}</div>
      @if($desc)
        <div class="blogcard__desc">{{ $desc }}</div>
      @endif
    </div>
  </a>
@endforeach
