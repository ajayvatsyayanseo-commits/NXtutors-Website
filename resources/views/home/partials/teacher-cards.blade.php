@php use Illuminate\Support\Str; @endphp
@php $q=1; @endphp
@foreach($teachers as $t)

@if($q<=6)
  @php
    $avatar = $t->avatar ?? '';
    if ($avatar && str_starts_with($avatar, 'http')) {
        $img = $avatar;
    } else {
        $img = $avatar ? asset('public/storage/user/'.$avatar) : asset('public/frount/assets/images/tutor1.jpg');
    }

    $chip = 'Verified Tutor';
    if (!empty($t->courses) && $t->courses->count()) {
      $c = $t->courses->first();
      $parts = [];
      if ($c->board?->cat_title) $parts[] = $c->board->cat_title;
      if ($c->category?->cat_title) $parts[] = $c->category->cat_title;
      if (count($parts)) $chip = implode(' + ', array_slice($parts, 0, 2));
    }

    $rating  = number_format((float)($t->rating_avg ?? 0), 1);
    $reviews = (int)($t->reviews_count ?? 0);

    $waNumber = preg_replace('/[^0-9]/', '', $setting->phone);
    $waText = rawurlencode("Hi, I want to talk to tutor: {$t->name}");
    $waLink = "https://wa.me/{$waNumber}?text={$waText}";

    $encodedId = rtrim(strtr(base64_encode($t->user_id . '-nxt'), '+/', '-_'), '=');
	
    $profileLinks = route('tutor.newshow', [
        'city' => Str::slug($t->city),
        'user_id' => $encodedId,
        'name' => Str::slug($t->name),
    ]);

  @endphp

   
 <article class="card card--tutor">
  <div class="card-header">
    <img src="{{ $img }}"
         alt="{{ $t->name }}"
         class="avatar"
         loading="lazy"   decoding="async"
         onerror="this.src='{{ asset('public/frount/assets/images/tutor1.jpg') }}'">

    <div>
      <div class="card-title">{{ $t->name }}</div>
      <div class="card-subtitle">{{ $chip }}</div>
    </div>
  </div>

  <div class="card-meta">
    <span class="rating">★ {{ $rating }}</span>
    <span>
      · {{ $reviews }} reviews
      @if(!empty($t->address))
        · {{ \Illuminate\Support\Str::limit($t->address, 30) }}
      @endif
    </span>
  </div>

  <div class="card-text">
    @if(!empty($t->fees))
      From ₹{{ $t->fees }} / hour ·
    @endif
    {{ $t->teaching_mode ?? 'Home & Online' }}
  </div>

  <div class="card-actions">
    <a href="{{ $profileLinks }}"
       class="btn btn-ghost">
      View Profile
    </a>
<button type="button"
  class="btn btn-ghost btn-small js-compare-toggle"
  data-id="{{ $t->user_id }}"
  data-name="{{ e($t->name) }}"
  data-img="{{ $img }}"
  data-rating="{{ number_format((float)($t->rating_avg ?? 0), 1) }}"
  data-reviews="{{ (int)($t->reviews_count ?? 0) }}"
  data-exp="{{ e($t->experience ?? '') }}"
  data-edu="{{ e($t->education ?? '') }}"
  data-budget="{{ e($t->budget ?? '') }}"
  data-chip="{{ e($chip ?? '') }}"
  data-city="{{ e($t->city ?? '') }}"
  data-pincode="{{ e($t->pincode ?? '') }}"
  data-wa="{{ e($waLink) }}"
  data-profile="{{ $profileLinks }}"
>
  Compare
</button>
    <a href="{{ $waLink }}"
       target="_blank"
       rel="nofollow noopener"
       class="btn btn-accent btn-small">
      Chat on WhatsApp
    </a>

    

  </div>
</article>
@endif
@php $q++; @endphp
@endforeach
 