{{--
  Tutor search cards (App\NxtAi TutorCardMapper arrays) rendered in the site's
  one tutor card component, so a tutor looks the same here as on the home page.
--}}
@php
  $waNumber = preg_replace('/[^0-9]/', '', (string) ($setting->phone ?? ''));
@endphp
@foreach($cards as $c)
  @php
    $t = (object) ['name' => $c['name'] ?? 'Tutor'];
    $chips = array_slice(array_values(array_unique(array_filter(array_merge(
      (array) ($c['boards'] ?? []),
      array_slice((array) ($c['subjects'] ?? []), 0, 2),
      array_slice((array) ($c['classes'] ?? []), 0, 1)
    )))), 0, 3);
    $waLink = 'https://wa.me/' . $waNumber . '?text=' . rawurlencode('Hi, I want to talk to tutor: ' . ($c['name'] ?? ''));
  @endphp
  @include('partials.tutor-card', [
    't' => $t,
    'img' => $c['image_url'] ?: asset('frount/assets/images/avatar-fallback.webp'),
    'chips' => $chips,
    'rating' => number_format((float) ($c['rating'] ?? 0), 1),
    'reviews' => (int) ($c['review_count'] ?? 0),
    'address' => (string) ($c['area'] ?? ''),
    'city' => (string) ($c['city'] ?? ''),
    'waLink' => $waLink,
    'profileUrl' => $c['profile_url'] ?? url('/tutors'),
  ])
@endforeach
