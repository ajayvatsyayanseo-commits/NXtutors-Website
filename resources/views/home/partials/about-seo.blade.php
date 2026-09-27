{{--
  "About NXTutors": the home page's long-form copy for search engines and for
  parents who want the detail, in one section. The first paragraph shows; the
  rest sits in a <details> panel (indexed, but not in the way). Facts only:
  fees, payment, demo and switching policy as published on the site.
--}}
@php
  $aboutPillars = collect(\App\Support\SubjectLinks::pillars());
  $aboutCities = \Illuminate\Support\Facades\DB::table('city_managment')->where('status', 't')->whereNotNull('slug')
      ->orderBy('city_name')->get(['city_name', 'slug']);
@endphp
<section class="section nx-about" aria-labelledby="aboutTitle">
  <div class="section-head">
    <h2 class="section-title" id="aboutTitle">Home and online tutors across India, matched to your child</h2>
  </div>

  <p class="nx-about__lede">
    NXTutors helps parents find the right home tutor or online tutor without sifting through hundreds of listings.
    Tell us the subject, class, board and your area; we check who can actually teach it and reach you, and share two
    or three tutors who fit. The first class is a free demo, and if the match is not right, switching tutor is free.
  </p>

  <details class="nx-more nx-about__more">
    <summary><span class="nx-more__closed">Read more about how NXTutors works</span><span class="nx-more__open">Show less</span></summary>

    <div class="nx-about__grid">
      <div>
        <h3>How we match a tutor</h3>
        <p>
          We look at five things together: the subject and exam, the class and board, where you live (for home
          tuition), your preferred timings, and your budget. For home tuition we start with tutors in your area,
          then nearby areas, then the rest of your city. For online classes, location does not matter, so we
          look for the best fit anywhere in India. Verified tutors always come first.
        </p>
      </div>
      <div>
        <h3>Boards and classes</h3>
        <p>
          Our tutors teach school students from primary classes up to Class 12 across CBSE, ICSE, ISC, IB (MYP and
          Diploma), Cambridge IGCSE and state boards. For senior classes we match subject specialists: a Class 12
          physics or IB maths tutor, not a general tutor.
        </p>
      </div>
      <div>
        <h3>Entrance exams</h3>
        <p>
          Many families prepare for JEE, NEET or CUET alongside the board exam. We match tutors who plan both
          together, so board marks and entrance preparation support each other instead of competing for time.
        </p>
      </div>
      <div>
        <h3>Fees and payment</h3>
        <p>
          Most sessions fall between ₹800 and ₹2,500 an hour, depending on the class, subject, board, the tutor's
          experience and whether classes are at home or online. You see each tutor's fee before the demo. Payments are
          made in advance by UPI, card or net banking, and if you cancel within 24 hours of booking you are eligible
          for a refund.
        </p>
      </div>
      <div>
        <h3>Verified tutors</h3>
        <p>
          Tutors marked Verified have had their identity checked by our team. Some profiles on the site are sample
          profiles, clearly labelled, that show the kind of tutor we match; ask for a match and we connect you with a
          verified tutor, usually within minutes.
        </p>
      </div>
      <div>
        <h3>Home or online</h3>
        <p>
          Home tuition suits younger children and students who focus better with a tutor beside them. Online classes
          widen the choice of specialist tutors, especially for IB, IGCSE, JEE and NEET. Many families mix the two.
        </p>
      </div>
    </div>

    @if($aboutPillars->count())
      <h3 class="nx-about__h">Subject guides</h3>
      <ul class="nx-chips">
        @foreach($aboutPillars as $p)<li><a class="nx-chip" href="{{ $p['url'] }}">{{ $p['label'] }}</a></li>@endforeach
      </ul>
    @endif

    @if($aboutCities->count())
      <h3 class="nx-about__h">Home tutors in {{ $aboutCities->count() }} cities</h3>
      <ul class="nx-chips">
        @foreach($aboutCities as $c)<li><a class="nx-chip" href="{{ url('/city/' . $c->slug) }}">{{ \App\Support\Geo::displayName($c->slug, $c->city_name) }}</a></li>@endforeach
      </ul>
    @endif
  </details>
</section>
