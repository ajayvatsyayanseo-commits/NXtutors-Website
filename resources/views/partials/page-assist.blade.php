{{--
  The home page's two helpers, on any page: "Suggested tutors" in the home
  card style, then Ask NXT AI, both tuned to the page.

  @include('partials.page-assist', [
      'assistTeachers' => $tutors,          // optional; section hidden when empty
      'assistTitle'    => 'Suggested tutors in Gurugram',
      'assistSub'      => 'Sorted by reviews and rating',
      'aiPage'         => ['type' => 'city', 'city' => 'Gurugram'],
  ])
--}}
@if(isset($assistTeachers) && $assistTeachers && $assistTeachers->count())
<section class="section section--suggested nx-assist" aria-labelledby="assistTitle">
  <div class="section-head">
    <h2 class="section-title" id="assistTitle">{{ $assistTitle ?? 'Suggested tutors' }}</h2>
    @if(!empty($assistSub))<p style="margin:0;">{{ $assistSub }}</p>@endif
    <a class="btn btn-ghost btn-small" href="{{ route('tutors.index') }}">View all tutors →</a>
  </div>
  <div class="suggested-grid">
    @include('home.partials.teacher-cards', ['teachers' => $assistTeachers])
  </div>
</section>
@endif

@include('home.partials.ask-ai', ['aiPage' => $aiPage ?? []])
