{{--
  Long-form guide for the "physics home tutor Chandigarh" page (Classes 11 and
  12, JEE and NEET, ISC/IB/IGCSE; PSEB and BSEH in general terms only). Byline
  in config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/chandigarh-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-physics-strategies (70 + 30, 33
  questions in sections A to E, blocks 33/18/12/7, recall share, practical
  scheme and record requirements, no calculators, transistors and logic gates
  out), jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern,
  JEE Advanced 2026 eligibility), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern) and -ib-physics-slhl-iaee (new guide first assessed
  May 2025, teaching hours, five themes, two papers 80%, investigation 20%).
  No school, society, mall or people's names, no distances or travel times,
  only the allowed fee sentence.

  Area links render only when that Chandigarh area page exists and is active.
--}}
@php
  $cgAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cgA = function (string $slug, string $label) use ($cgAreaSlugs) {
      return in_array($slug, $cgAreaSlugs, true)
          ? '<a href="' . e(url('/city/chandigarh/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide chp-guide" aria-labelledby="chpGuideTitle">
  <h2 id="chpGuideTitle">Physics home tutor in Chandigarh: decide what the marks are for, then find an evening that holds</h2>

  <p class="nx-guide__lede">
    A senior physics student in the tricity may be writing a CBSE or ISC board paper, sitting JEE or NEET soon after,
    working through an IB or IGCSE course, or studying under the Punjab or Haryana board. The chapters overlap; the
    marking does not. Evenings are tight too, because school, coaching and the road home all compete for the same
    hours. We pick two or three physics tutors who teach your child's target and can reach your sector
    or phase when you are free. You see each fee first, and the opening class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#chp-aim">What the marks are for</a> ·
    <a href="#chp-blocks">Class 12 theory</a> ·
    <a href="#chp-prac">Practical marks</a> ·
    <a href="#chp-entr">JEE and NEET</a> ·
    <a href="#chp-test">Reading a test</a> ·
    <a href="#chp-eve">Evening slots</a> ·
    <a href="#chp-intl">IB, ISC, IGCSE</a> ·
    <a href="#chp-eleven">Starting in Class 11</a> ·
    <a href="#chp-fees">Fees</a> ·
    <a href="#chp-book">Booking</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="chp-aim">Which exam should set the agenda for physics tuition?</h2>
  <p>
    Name one main target before the first lesson; it decides what the tutor sets every week.
  </p>
  <ul>
    <li><strong>CBSE Class 12 board.</strong> Written derivations, labelled diagrams and case-based reading, in a paper where calculators are not allowed.</li>
    <li><strong>ISC Class 12.</strong> A CISCE theory paper alongside practical and project work, with numericals expected in full.</li>
    <li><strong>JEE Main, then perhaps JEE Advanced.</strong> Speed on multi-step problems, then depth on problems that join several ideas.</li>
    <li><strong>NEET (UG).</strong> Accurate use of NCERT concepts and restraint with risky guesses.</li>
    <li><strong>IB Diploma or Cambridge IGCSE.</strong> Data handling and uncertainties for IB; the right tier for IGCSE.</li>
    <li><strong>PSEB or BSEH.</strong> The board's own books and notices on pseb.ac.in or bseh.org.in; we keep advice on these boards general.</li>
  </ul>
  <p>
    Entrance syllabi come from the conducting body, not from the school board, and may include topics a board has
    dropped, so read the current bulletin on nta.ac.in before cutting anything. Useful next reads: the
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics topic-wise guide</a> and the
    <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics chapters</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-blocks">How is the CBSE Class 12 physics theory paper built?</h2>
  <p>
    The theory paper (042) is worth 70 marks over three hours, with 33 compulsory questions; the 2026-27 sample
    paper repeats last session's design. The fourteen NCERT chapters fall into four blocks:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 physics theory, 2026-27: the four mark blocks and the kind of practice each rewards</caption>
    <thead>
      <tr><th scope="col">Block</th><th scope="col">Marks</th><th scope="col">Practice that pays</th></tr>
    </thead>
    <tbody>
      <tr><td>Electrostatics through to alternating current</td><td>33</td><td>Field and circuit diagrams, then derivations written from them</td></tr>
      <tr><td>Optics with electromagnetic waves</td><td>18</td><td>Ray diagrams with arrows, and lens and mirror numericals</td></tr>
      <tr><td>Dual nature, atoms and nuclei</td><td>12</td><td>Short numericals with careful powers of ten</td></tr>
      <tr><td>Semiconductor electronics</td><td>7</td><td>Diode behaviour explained in words and graphs</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Section A has 16 one-mark items (12 multiple-choice, 4 assertion–reason), Section B five of two marks, Section C
    seven of three, Section D two case studies of four and Section E three long answers of five. Physical constants
    are given. Only about 38% of the marks reward recall, so dictated notes cover less of the paper than families
    expect. Transistors and logic gates have left the syllabus, which dates any notes that still include them. There
    is one main board exam in Class 12, and the 2027 date sheet is not yet published; follow cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> post lists the
    derivations that keep returning, and the <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics
    tutor</a> page plans the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-prac">How are the 30 practical marks earned?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 physics practical: where the 30 marks come from and how a home tutor can help</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Marks</th><th scope="col">Home preparation</th></tr>
    </thead>
    <tbody>
      <tr><td>Two experiments, one from each section</td><td>7 + 7</td><td>Aim, circuit or ray diagram and a clean observation table</td></tr>
      <tr><td>Practical record</td><td>5</td><td>At least eight experiments and six activities, split evenly between the sections, plus the project report</td></tr>
      <tr><td>One activity</td><td>3</td><td>The reason behind each step, not just the steps</td></tr>
      <tr><td>Investigatory project</td><td>3</td><td>A topic the student can explain unaided</td></tr>
      <tr><td>Viva on all of the above</td><td>5</td><td>A mock viva: why repeat readings, what the slope means, sources of error</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The apparatus stays in the school laboratory, but the thinking can be rehearsed at a dining table, and these
    marks are among the easiest in the subject to secure.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-entr">What do JEE and NEET demand from physics?</h2>
  <p>
    In 2026, JEE Main Paper 1 was computer-based with 75 questions. Physics took 25 of them, 20 multiple-choice and 5
    numerical-value, each scored +4 for a correct answer and −1 for a wrong one. JEE Advanced 2026 was open only to
    the highest-ranked 2,50,000 JEE Main candidates, and its problems combine several concepts at once. NEET (UG)
    2026 was a pen-and-paper test of 180 questions for 720 marks; physics accounted for 45 questions and 180 marks,
    also +4 and −1.
  </p>
  <p>
    For JEE, the tutor's value lies in speed with accuracy and a frank review of every mock. For NEET, it lies in
    NCERT-exact concepts and fewer guesses. NTA sets the pattern each year, so check the latest bulletin. Our
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching or home tutor for JEE</a>
    comparison helps families decide how the two fit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-test">What should a tutor look for in a returned physics test?</h2>
  <p>
    Bring the last two class tests to the free demo. A useful tutor reads them before teaching and sorts every lost
    mark into one of four piles:
  </p>
  <ol>
    <li><strong>No diagram.</strong> The student jumped to an equation without a free-body, ray or circuit sketch.</li>
    <li><strong>No stated principle.</strong> The law being used is never named, so method marks are lost.</li>
    <li><strong>Units dropped.</strong> Substitution without units hides a wrong power of ten until the end.</li>
    <li><strong>No sense check.</strong> A negative mass or an enormous speed goes unquestioned.</li>
  </ol>
  <p>
    The biggest pile tells you where the first month of tuition should go, whatever the target exam.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-eve">Can a physics tutor keep a late slot in your part of the tricity?</h2>
  <p>
    Senior students often get home after coaching, so physics lessons start late. The tricity has no metro running,
    so the question is which road the tutor uses and how busy it is. Six places across the four zones show how it varies;
    see tutors by sector on our <a href="{{ url('/city/chandigarh') }}">Chandigarh page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Two central Chandigarh sectors</h3>
      <p>
        {!! $cgA('sector-11', 'Sector 11') !!} mixes builder floors and houses around a large education campus.
        Builder floors often share an entrance, so confirm the floor and bell the first time. Madhya Marg is close and
        busy at office hours. {!! $cgA('sector-22', 'Sector 22') !!}, the first sector the city built, is full of
        markets; parking near them is tight in the evening, so tutors often come by bus to the Sector 17 terminal and
        finish by auto. Inner lanes are calm, with doorstep visits.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>The south and the eastern edge</h3>
      <p>
        {!! $cgA('sector-35', 'Sector 35') !!} surrounds one of south Chandigarh's busiest markets, with houses and
        floors set back in quieter pockets; the Sector 43 bus terminal is near. {!! $cgA('manimajra', 'Manimajra') !!},
        an old town renamed Sector 13 in 2020, sits by Housing Board Chowk, which jams at both rush hours. Old-town
        lanes have little parking, while planned complexes may ask for a name at the gate.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Mohali and Zirakpur</h3>
      <p>
        {!! $cgA('mohali-phase-10', 'Mohali Phase 10') !!} is mostly three-bedroom flats, floors and houses beside the
        sports district of Phase 9, where match days add to office-hour traffic. {!! $cgA('zirakpur', 'Zirakpur') !!}
        lies where the highways to Shimla, Ambala and Patiala meet; most newer homes are in gated societies, so
        register the tutor at the gate.
      </p>
    </div>
  </div>
  <p>
    On nights when coaching runs late, one online lesson a week with the same tutor keeps the plan going without an
    end-of-day journey.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-intl">What should IB, ISC and IGCSE physics families confirm?</h2>
  <p>
    <strong>IB Diploma:</strong> a new physics guide was first examined in May 2025. It replaces the core-and-options
    structure and the old Paper 3 with five themes, A to E. Recommended teaching is 150 hours at SL and 240 at HL; two
    exam papers make up 80% and the scientific investigation 20%. The investigation belongs to the student, and a
    tutor can discuss the plan but write none of it. Our
    <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL guide</a> explains the change.
  </p>
  <p>
    <strong>ISC:</strong> theory, practical and project work are all set by CISCE, and answers run longer than a
    one-line CBSE reply; check the tutor knows your exam year's syllabus. <strong>Cambridge IGCSE:</strong> Core or
    Extended tier; students moving into CBSE Class 11 afterwards usually need early work on vectors, graphs and
    derivations. Specialists for these courses are scarcer than CBSE tutors, so name the course in your first
    message, and consider an online specialist with a nearby tutor checking written work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-eleven">Why is Class 11 a sensible time to begin?</h2>
  <p>
    Class 11 moves quickly from measurement and kinematics into Newton's laws, energy, rotation and gravitation, and
    each chapter leans on vectors, graphs and rates of change, sometimes before the maths class reaches them. Class 12
    then applies the same tools to charges and fields. A term spent making components, slopes and areas under
    graphs routine prevents a lot of repair later. See the
    <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics tutor</a> page, our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">stream choice guide</a> and the national
    <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-fees">How much should you budget for physics tuition in Chandigarh?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors fix their own
    rates according to the target, from a board paper up to JEE Advanced, their experience at that level, the late
    trip to your sector or phase, and how many lessons you book each week. An online lesson with the same tutor may
    cost less. Every fee sits on the shortlist, ahead of the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-book">How do you book a physics demo in the tricity?</h2>
  <p>
    Tell us the class, the course, which exam matters most (board, JEE or NEET), your sector or phase and the evenings
    left after school and coaching. A shortlist of two or three physics tutors follows, fees included, and you choose one for
    a free demo. If the fit is wrong, we arrange a demo with another tutor, and changing tutor later is also free.
    If nobody suitable can reach you at that hour, we suggest online lessons or a home-and-online mix. NXTutors is
    based in Sector 66, Gurugram, and teaches online across India.
  </p>
  <p>
    Physics teachers who live in the tricity can browse open student requests on the
    <a href="{{ url('/tuition-jobs/chandigarh') }}">Chandigarh tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
