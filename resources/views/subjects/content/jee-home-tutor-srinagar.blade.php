{{--
  Srinagar page for JEE home tutors. The exam as a whole is on the national hub
  (/jee-home-tutor); this page is about JEE tuition in a Srinagar year: the
  JKBOSE Class 11 and Class 12 board papers running alongside, the long winter
  break as a preparation block, short winter days, the five zones, and Class
  11, Class 12 and repeat-year plans.

  Exam facts only as stated on the national page, which cites (fetched 1 Oct 2026):
  - NTA, JEE (Main) 2026 Information Bulletin (jeemain.nta.nic.in): Paper 1 CBT,
    3 hours, maths/physics/chemistry, 20 MCQ + 5 numerical each, 75 questions,
    300 marks, +4/-1 in both sections; two sessions (January and April 2026);
    13 languages; no age limit; Advanced eligibility by rank among Paper 1
    candidates.
  - JEE (Advanced) 2026 Information Brochure (jeeadv.ac.in): two compulsory
    three-hour papers; English and Hindi; at most two attempts in consecutive years.
  JKBOSE facts only from jkbose.jk.gov.in (read 3 Oct 2026): Class 11 Higher Secondary Part I and Class 12 Part II board
  examinations; Class 12 physics model test paper 3 hours, 70 marks, word
  limits, log tables allowed, scientific calculator not allowed; Class 12
  maths model paper 80 marks with three six-mark long answers.
  Local detail only from database/seo-content/areas/srinagar-research.json
  (Hyderpora known locally for coaching centres; bypass and flyover ramps;
  Hazratbal university area; Soura institutional-campus traffic; Lal Bazar
  school-time traffic; winter timing). No schools, colleges, coaching
  institutes or people named. Area links render only for active areas.
--}}
@php
  $srjSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $srjA = function (string $slug, string $label) use ($srjSlugs) {
      return in_array($slug, $srjSlugs, true)
          ? '<a href="' . e(url('/city/srinagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="srjGuideTitle">
  <h2 id="srjGuideTitle">JEE home tutor in Srinagar: two board years, one entrance, and a winter to use well</h2>

  <p class="nx-guide__lede">
    A Srinagar student preparing for JEE carries more board weight than most. Under the state board, Class 11 ends in a
    public examination of its own and Class 12 in another, so the entrance syllabus has to be built while two sets of
    board papers are also being written. Add the long winter break, when daylight is short and school stops, and the
    year has a shape quite unlike a plains city. This page is about fitting a home tutor into that shape: what the
    tutor should own, how to use the winter, which subject to keep at home, how JKBOSE and CBSE students close the gap
    to the NTA syllabus, and what changes for Class 11, Class 12 and a repeat year. The national
    <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> hub covers the exam in full.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#srj-exam">The exam briefly</a> ·
    <a href="#srj-owns">What the tutor owns</a> ·
    <a href="#srj-winter">The winter block</a> ·
    <a href="#srj-board">Board and entrance</a> ·
    <a href="#srj-session">A home session</a> ·
    <a href="#srj-reach">Localities</a> ·
    <a href="#srj-format">Home or online</a> ·
    <a href="#srj-stages">Stages</a> ·
    <a href="#srj-demo">Demo</a> ·
    <a href="#srj-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="srj-exam">The two JEE papers, briefly</h2>
  <p>
    The NTA's 2026 bulletin set JEE (Main) Paper 1 as a three-hour computer-based test of 75 questions worth 300 marks:
    25 each in mathematics, physics and chemistry, of which 20 per subject were multiple choice and 5 needed a
    numerical answer. Correct answers earned four marks and wrong ones lost a mark in both kinds. The exam ran in two
    sessions and the better score counted. The highest-ranked Paper 1 candidates qualified for JEE (Advanced), two compulsory
    three-hour papers offered in English and Hindi. Main was offered in 13 languages. Confirm every rule on
    jeemain.nta.nic.in and jeeadv.ac.in for your year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srj-owns">What should the tutor own in a Srinagar JEE plan?</h2>
  <p>
    Some students attend coaching, for example in Hyderpora, which our locality research notes is known for its many
    coaching centres. Others prepare from home with a tutor alone. In either case, give the tutor a clear brief:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Dividing JEE work in a Srinagar home</caption>
    <thead>
      <tr><th scope="col">Job</th><th scope="col">With coaching</th><th scope="col">Without coaching</th></tr>
    </thead>
    <tbody>
      <tr><td>Chapter order through the year</td><td>The batch sets it; the tutor keeps the board chapters in step</td><td>The tutor writes it at the start from the NTA syllabus and the board timetable</td></tr>
      <tr><td>Unsolved questions and test errors</td><td>The tutor, every week</td><td>The tutor, every week</td></tr>
      <tr><td>Board answers to the right length</td><td>The tutor, before each board paper</td><td>The tutor</td></tr>
      <tr><td>Timed full papers</td><td>The batch's tests, reviewed with the tutor</td><td>Past NTA papers on screen, plus a mock series arranged separately</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The third row is the one most often dropped. JEE practice is objective, while the board's Class 12 physics model
    paper asks for written answers within word limits, 20 to 30 words for two marks and up to 150 words for five. A
    student who has spent months on multiple choice needs scheduled practice at writing again.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srj-winter">How do you use the winter break for JEE?</h2>
  <p>
    The long break is the biggest block of free time in a Srinagar student's year, and the families who plan it get
    the most from it. Short December and January days make late home visits harder, so the routine moves earlier.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A sample winter-break JEE week in Srinagar</caption>
    <thead>
      <tr><th scope="col">Part of the week</th><th scope="col">Session</th><th scope="col">Purpose</th></tr>
    </thead>
    <tbody>
      <tr><td>Two late mornings</td><td>Home tutor, two hours each, while there is daylight for the journey</td><td>The hardest chapters of the coming term, taught before school starts them</td></tr>
      <tr><td>Two evenings</td><td>Short online sessions</td><td>Doubts from self-study and the error log, without anyone travelling after dark</td></tr>
      <tr><td>One morning a week</td><td>A full timed paper at home</td><td>Stamina and timing, reviewed question by question in the next session</td></tr>
      <tr><td>Coldest days</td><td>Everything online</td><td>Keeps the routine instead of cancelling it</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In term time, slots move to after school, once the school-time rush on main roads such as the bypass has passed.
    Our <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE coaching or a home tutor</a>
    guide was written for another city, but its reasoning about commute time and splitting the work applies here too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srj-board">JKBOSE, CBSE or ICSE: closing the gap to the NTA syllabus</h2>
  <ul>
    <li><strong>JKBOSE.</strong> The board prints its own textbooks and examines both Class 11 and Class 12. A tutor maps each board chapter to the NTA units at the start of Class 11, so that Part I revision also serves JEE. Note the physics paper rules: log tables are allowed, a scientific calculator is not, which also matches the habit JEE needs of calculating without a device.</li>
    <li><strong>CBSE.</strong> NCERT is the school book, so the content match is closest. The gap is written board answers after months of objective work.</li>
    <li><strong>ICSE and ISC.</strong> Wide content and long answers; line up the ISC chapter order with the NTA units early so school and entrance work do not drift apart.</li>
  </ul>
  <p>
    Our <a href="{{ url('/jkbose-tutor-srinagar') }}">JKBOSE tutor in Srinagar</a> page sets out the board's model
    papers in detail. For board-side subject help, see the Srinagar <a href="{{ url('/maths-home-tutor-srinagar') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-srinagar') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-srinagar') }}">chemistry</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srj-session">What a two-hour JEE session at home should contain</h2>
  <p>
    Long gaps between visits are common when a tutor comes twice a week, so each visit has to carry real weight. A
    structure that keeps the hour honest:
  </p>
  <ol>
    <li><strong>The error log first.</strong> Three or four questions the student got wrong since the last visit, re-solved without help. If any fails again, it goes back on the list.</li>
    <li><strong>One idea taught properly.</strong> A single concept, such as rotational motion or definite integrals, built from the basics with the student writing, not watching.</li>
    <li><strong>Problems in rising difficulty.</strong> From the board textbook level to NTA level, with the tutor intervening only when the student is stuck.</li>
    <li><strong>A timed block.</strong> A short set under exam conditions, marked at once, with the four-for-right and minus-one-for-wrong rule applied.</li>
    <li><strong>The task until next time.</strong> Written down, with the questions numbered, so the next visit starts from evidence.</li>
  </ol>
  <p>
    If a tutor spends most of the visit lecturing while your child copies, ask for this structure instead.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srj-reach">Which tutors can reach your locality?</h2>
  <p>
    A JEE tutor visits for two years, so the route matters as much as the résumé. Notes for six localities:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Srinagar localities and the practical side of a weekly JEE visit</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">How a tutor usually gets there</th><th scope="col">Timing tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $srjA('rawalpora', 'Rawalpora') !!}</td><td>From Sanat Nagar or Hyderpora; from the Nowgam side over the small bridge beside the railway bridge</td><td>Mid-afternoon or after the evening rush on roads to the bypass</td></tr>
      <tr><td>{!! $srjA('natipora', 'Natipora') !!}</td><td>The flyover's Natipora ramp gives a quick run from the city centre</td><td>Evening, once office and school traffic below has cleared</td></tr>
      <tr><td>{!! $srjA('barzulla', 'Barzulla') !!}</td><td>The flyover's Barzulla ramp from the Lal Chowk side, then side lanes</td><td>Allow extra time after school; the main road is busy all day</td></tr>
      <tr><td>{!! $srjA('soura', 'Soura') !!}</td><td>Inner lanes, avoiding the roads beside the large institutional campus</td><td>Late afternoon or evening</td></tr>
      <tr><td>{!! $srjA('lal-bazar', 'Lal Bazar') !!}</td><td>From Zadibal, Soura or the Hazratbal side</td><td>Once students are home; main roads are lively at school times</td></tr>
      <tr><td>{!! $srjA('hazratbal', 'Hazratbal') !!}</td><td>Many university students and teachers live nearby, so subject tutors for senior classes are often close</td><td>Avoid the busiest lakefront hours for the first demo</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone pages: <a href="{{ url('/city/srinagar/zone/airport-road') }}">Airport Road</a>,
    <a href="{{ url('/city/srinagar/zone/natipora-nowgam') }}">Natipora and Nowgam</a>,
    <a href="{{ url('/city/srinagar/zone/north-city') }}">North City</a>,
    <a href="{{ url('/city/srinagar/zone/civil-lines') }}">Civil Lines</a> and
    <a href="{{ url('/city/srinagar/zone/karan-nagar-bemina') }}">Karan Nagar and Bemina</a>. All localities are on the
    <a href="{{ url('/city/srinagar') }}">Srinagar page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srj-format">Home or online for each JEE subject?</h2>
  <ul>
    <li><strong>Physics at home where possible.</strong> Students stall at setting up the problem, and a tutor beside them sees it at once.</li>
    <li><strong>Maths at home, test reviews online.</strong> Long working belongs on paper; going through a timed paper works well on a shared screen.</li>
    <li><strong>Chemistry largely online.</strong> Organic and inorganic recall suits short, frequent checks; physical chemistry numericals can join the home session if they lag.</li>
  </ul>
  <p>
    For Advanced-level problem solving, an online specialist from elsewhere in India is often a better choice than the
    nearest available tutor. Our <a href="{{ url('/online-tutor-srinagar') }}">online tutors for Srinagar</a> page explains
    the set-up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srj-stages">Class 11, Class 12 and a repeat year</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Class 11</h3>
  <p>
    A board year under JKBOSE as well as the base of JEE. Mechanics, functions and calculus basics, and the mole
    concept must be secure before the winter break; use the break for the chapters the new term will bring.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Class 12</h3>
  <p>
    New chapters, Class 11 revision and full papers before the January session, with written board practice scheduled
    rather than squeezed in. Three six-mark long answers in the board's maths model paper reward careful calculus.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>A repeat year</h3>
  <p>
    Diagnose last year's papers first. In 2026, Main had no age limit and Advanced allowed two attempts in consecutive
    years; confirm in the current documents. Daytime sessions widen the choice of tutor.
  </p>
    </div>
  </div>
  <p>
    Topic plans: <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">physics</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">chemistry</a>, and the
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srj-demo">What to test in the free JEE demo</h2>
  <ol>
    <li>Before teaching, did the tutor ask about the board, coaching (if any) and the last test?</li>
    <li>Given three questions your child could not solve, did they find the exact sticking point and let the student finish?</li>
    <li>Do they know that the Class 11 board examination comes before Class 12, and how they will protect it?</li>
    <li>What is their winter plan: earlier home slots, online sessions, or both?</li>
    <li>Can they reach you at the same hour every week from where they live?</li>
  </ol>
  <p>
    If the fit is wrong, we arrange the next demo; switching later is free. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srj-fees">JEE tutor fees in Srinagar and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fee and you see it before the demo. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    and <a href="{{ url('/blog/home-tuition-fees-srinagar') }}">home tuition fees in Srinagar</a>.
  </p>
  <p>
    Send the class, board, subjects, any coaching timings, your locality with a landmark and your winter plans. You
    receive two or three matched tutors and book a <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; browse <a href="{{ url('/tutors') }}">tutor
    profiles</a> too. For medical entrance, see the <a href="{{ url('/neet-home-tutor-srinagar') }}">NEET home tutor in
    Srinagar</a> page. Teachers can find requests on <a href="{{ url('/tuition-jobs/srinagar') }}">Srinagar tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
