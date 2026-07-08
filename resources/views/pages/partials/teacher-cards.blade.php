@foreach($teachers as $t)
@php
  $avatar = $t->avatar ?? '';
  $img = ($avatar && str_starts_with($avatar,'http'))
      ? $avatar
      : ($avatar ? asset('public/storage/user/'.$avatar)
                 : asset('public/frount/assets/images/tutor1.jpg'));

  $chip = 'Verified Tutor';
  if (!empty($t->courses) && $t->courses->count()) {
    $c = $t->courses->first();
    $parts = [];
    if ($c->board?->cat_title) $parts[] = $c->board->cat_title;
    if ($c->category?->cat_title) $parts[] = $c->category->cat_title;
    if ($parts) $chip = implode(' • ', array_slice($parts,0,2));
  }

  $rating  = number_format((float)($t->rating_avg ?? 0), 1);
  $reviews = (int)($t->reviews_count ?? 0);

  $waText = "Hi, I want to connect with tutor {$t->name} (UserID: {$t->user_id}).";
  if (isset($page)) {
    $waText .= " Page: {$page->title} | {$page->location}, {$page->city}.";
  }
 $waNumber = preg_replace('/[^0-9]/', '', $setting->phone);

$waLink = "https://wa.me/" . $waNumber . "?text=" . urlencode($waText);

 $encodedId = rtrim(strtr(base64_encode($t->user_id . '-nxt'), '+/', '-_'), '=');

$profileLink = route('tutor.newshow', [
    'city' => Str::slug($t->city),
    'user_id' => $encodedId,
    'name' => Str::slug($t->name),
]);

@endphp

<div class="tutor-card">
  <div class="tutor-top">
    <div class="tutor-avatar">
      <img src="{{ $img }}" alt="{{ $t->name }}"
           onerror="this.src='{{ asset('public/frount/assets/images/tutor1.jpg') }}'">
      <span class="badge-verified">✔</span>
    </div>

    <div class="tutor-info">
      <h3 class="tutor-name">{{ $t->name }}</h3>

      <div class="tutor-rating">
        ⭐ {{ $rating }}
        <span>({{ $reviews }} reviews)</span>
      </div>

      <span class="tutor-chip">{{ $chip }}</span>
    </div>
  </div>

  <div class="tutor-location">
    📍 {{ Str::limit($t->address ?? '', 70) }}
  </div>

  <div class="tutor-actions">
    <a href="{{ $waLink }}" target="_blank"
       class=" btn-accent" rel="nofollow noopener">
      WhatsApp
    </a>

    <a href="{{ $profileLink }}"
       class="btn-outline">
      View Profile
    </a>
  </div>
</div>
@endforeach
<style>
  .tutor-card{
  background:linear-gradient(180deg,#1c2330,#151b26);
  border:1px solid #2a3242;
  border-radius:16px;
  padding:16px;
  transition:.25s ease;
}
.tutor-card:hover{
  transform:translateY(-4px);
  box-shadow:0 10px 30px rgba(0,0,0,.4);
}

.tutor-top{
  display:flex;
  gap:14px;
}

.tutor-avatar{
  position:relative;
}
.tutor-avatar img{
  width:92px;
  height:92px;
  object-fit:cover;
  border-radius:14px;
}
.badge-verified{
  position:absolute;
  bottom:-6px;
  right:-6px;
  background:#2ecc71;
  color:#000;
  font-size:12px;
  padding:4px 6px;
  border-radius:50%;
  font-weight:700;
}

.tutor-info{flex:1}
.tutor-name{
  margin:0;
  font-size:18px;
  font-weight:700;
  color:#fff;
}
.tutor-rating{
  font-size:14px;
  opacity:.85;
  margin:4px 0;
}
.tutor-rating span{opacity:.7}

.tutor-chip{
  display:inline-block;
  font-size:12px;
  padding:4px 10px;
  border-radius:999px;
  background:#24314d;
  color:#9fb4ff;
}

.tutor-location{
  margin-top:10px;
  font-size:13px;
  opacity:.8;
}

.tutor-actions{
  display:flex;
  gap:10px;
  margin-top:14px;
}

.btn-accent{
  flex:1;
  text-decoration: none;
  text-align:center;
 
  padding:10px;
  border-radius:10px;
  font-weight:600;
}
 

.btn-outline{
  flex:1;
  text-decoration: none;
  text-align:center;
  border:1px solid #4c8dff;
  color:#4c8dff;
  padding:10px;
  border-radius:10px;
}
.btn-outline:hover{
  background:#4c8dff;
  color:#fff;
}

</style>