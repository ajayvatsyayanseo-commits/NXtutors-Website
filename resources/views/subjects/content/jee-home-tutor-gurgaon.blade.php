{{--
  Gurugram page for JEE home tutors. The exam itself is covered on the national
  hub (/jee-home-tutor); this page is about fitting JEE tuition into a Gurugram
  week: school, coaching travel, zones, society logistics and hybrid plans.

  Exam facts (brief recap only) from the NTA JEE (Main) 2026 Information Bulletin
  (jeemain.nta.nic.in: Paper 1 CBT, maths/physics/chemistry, 75 questions, 300
  marks, 3 hours, two sessions; qualifying examinations list in clause 3.2) and the
  JEE (Advanced) 2026 Information Brochure (jeeadv.ac.in: two compulsory 3-hour
  papers). Local detail only from config/zone_guides.php ('Gurugram') and
  config/zones.php; no schools, coaching institutes or societies are named beyond
  area-page links. Area links render only for active Gurugram areas.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="jgGuideTitle">
  <h2 id="jgGuideTitle">JEE home tutor in Gurgaon (Gurugram): fitting the preparation into a Gurugram week</h2>

  <p class="nx-guide__lede">
    For a JEE aspirant in Gurugram, the hardest part is often not a chapter but the calendar. School runs until the
    afternoon, coaching may be across the city, evening traffic swallows an hour, and the only time left for a tutor is
    late in the day or at the weekend. NXTutors is based in Sector 66, on Golf Course Extension Road. This page is about
    making JEE tuition work around that week: which slots are realistic in each zone, when home or online makes more
    sense, how to handle a school board that is not CBSE, and how to use a tutor's hours well. For the exam pattern,
    the subject split and plans by class, read our national <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> hub first.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jg-recap">The exams in one paragraph</a> ·
    <a href="#jg-week">The Gurugram JEE week</a> ·
    <a href="#jg-zones">Zone by zone</a> ·
    <a href="#jg-example">An example week</a> ·
    <a href="#jg-boards">JEE from a non-CBSE school</a> ·
    <a href="#jg-profiles">Which set-up suits which student</a> ·
    <a href="#jg-home">Home sessions in societies</a> ·
    <a href="#jg-demo">Demos in Gurugram</a> ·
    <a href="#jg-fees">Fees and starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jg-recap">JEE Main and Advanced in one paragraph</h2>
  <p>
    Under the NTA's 2026 bulletin, JEE (Main) Paper 1 is a three-hour computer-based test with 75 questions across
    mathematics, physics and chemistry, 300 marks in all, held in two sessions a year. JEE (Advanced), run by the IITs
    for students who qualify through JEE Main, has two compulsory three-hour papers on the same day. Everything else, from
    the marking to the eligibility rules and the choice between one tutor and three, is on the
    <a href="{{ url('/jee-home-tutor') }}">national JEE page</a>. Check jeemain.nta.nic.in and jeeadv.ac.in for the current year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jg-week">What a JEE student's week looks like in Gurugram</h2>
  <p>
    A typical week for a Gurugram JEE student in coaching runs like this: school until early afternoon, a short break,
    coaching on three or four days, and homework and self-study squeezed in after. The tutor has to fit into what is
    left, and in Gurugram the deciding factor is road time, not distance. Office traffic on Golf Course Road and around
    the Rapid Metro builds from about six in the evening; Sohna Road is slow at both school and office hours. A tutor
    who looks close on a map can be a long drive away at the wrong hour.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Tutor slots that tend to work for Gurugram JEE students</caption>
    <thead>
      <tr><th scope="col">Slot</th><th scope="col">Good for</th><th scope="col">Why it works here</th></tr>
    </thead>
    <tbody>
      <tr><td>Weekday, before 5 pm (non-coaching days)</td><td>Main teaching session at home</td><td>Ahead of the office peak; the student is fresher than after coaching</td></tr>
      <tr><td>Weekday, after 7:30 pm</td><td>Short online doubt session (30 to 45 minutes)</td><td>Avoids the worst traffic; no travel for anyone</td></tr>
      <tr><td>Saturday or Sunday morning</td><td>Long home session or test analysis</td><td>Roads are quieter; time for a full mock review</td></tr>
      <tr><td>Weekday daytime</td><td>Repeat-year students, who are free during school hours</td><td>Off-peak travel and wider choice of tutor time</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Coaching travel is the other half of the picture. Our guide
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE preparation in Gurgaon: coaching or a home tutor</a>
    treats commuting as a real cost and compares the routes. The practical point for tutoring is simple: fix the tutor slot
    around the coaching timetable first, not the other way round, and keep it the same every week. Tutors who travel
    across the city plan their evenings around regular slots, and a fixed slot is far easier to keep in the board months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jg-zones">JEE tuition zone by zone</h2>
  <p>
    Gurugram's zones differ in how many tutors live nearby and how easily they move at peak hours, and that shapes
    whether home, online or hybrid tuition makes sense. You can browse tutors near you from the
    page of <a href="{{ url('/city/gurugram') }}">home tutors in Gurgaon</a>, which lists each sector and society.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Golf Course Road, DLF phases and MG Road</h3>
  <p>
    Around {!! $ggA('dlf-phase-4', 'DLF Phase 4') !!}, Sector 43 and the MG Road and Cyber City
    sectors, homes sit close to the city's busiest office district. Tutors living in the DLF phases or Sushant Lok 1 can
    usually reach you quickly; tutors from further out prefer early-evening or weekend slots. For JEE this often means one
    weekend home session for the heavy work and online sessions on coaching days.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Central Gurugram</h3>
  <p>
    From {!! $ggA('south-city-1', 'South City 1') !!} and Sushant Lok 3 to
    {!! $ggA('sector-44', 'Sector 44') !!} and the sectors around the old HUDA City Centre, homes are within reach of
    tutors from most of the city. That widens the choice for Class 11 and 12 specialists, and a board-year student can
    often fit two shorter weekday sessions instead of one long one.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Golf Course Extension Road and Sohna Road</h3>
  <p>
    Our office is on the Extension Road, in Sector 66. Tutors living here or in the Sohna Road sectors cover societies
    around {!! $ggA('sector-56', 'Sector 56') !!}, {!! $ggA('sector-67', 'Sector 67') !!} and
    {!! $ggA('nirvana-country', 'Nirvana Country') !!} well. Sohna Road is slow at peak hours, so a tutor on your side of it
    is worth a short wait. Large societies can take ten minutes from gate to tower: build it into the start time.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Southern Peripheral Road and New Gurugram</h3>
  <p>
    In the newer high-rise sectors such as {!! $ggA('sector-76', 'Sector 76') !!} and {!! $ggA('sector-86', 'Sector 86') !!},
    distances between societies are longer and fewer tutors live nearby. This is where online and hybrid plans help
    most: a subject specialist for weekend home sessions and online classes in between, rather than whoever is closest.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Dwarka Expressway</h3>
  <p>
    Societies along the expressway, around {!! $ggA('sector-103', 'Sector 103') !!} and Sector 106,
    are often recently occupied, and many families have moved from Delhi or other cities mid-year. For a JEE student that
    can mean a new school pace and a new coaching batch at once; tell us, and we look for a tutor who can start with a
    diagnostic rather than the next chapter.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Old Gurugram and Palam Vihar</h3>
  <p>
    In {!! $ggA('palam-vihar', 'Palam Vihar') !!}, Sector 14 and the older sectors, many
    tutors live locally, so home tuition two or three times a week is practical. With plenty of choice, compare two demos
    before deciding, and ask each tutor how they will work around the coaching days.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jg-example">An example: one student, two zones apart from coaching</h2>
  <p>
    Take an illustrative Class 12 student living in a newer society off the Southern Peripheral Road, with coaching in
    another zone on Monday, Wednesday and Friday evenings, and a gap in physics. Insisting on a weekday home session
    would mean a tutor driving out at peak hour on the two free evenings, which few specialists will do reliably. A
    plan that fits the geography instead:
  </p>
  <ul>
    <li><strong>Saturday morning, at home, 2 hours:</strong> the main physics session, with the week's doubt list and one chapter rebuilt properly.</li>
    <li><strong>Tuesday, online, 45 minutes after 7:30 pm:</strong> doubts from Monday's coaching, while they are fresh.</li>
    <li><strong>Thursday, online, 45 minutes:</strong> review of the latest coaching test, question by question.</li>
  </ul>
  <p>
    The same hours spent on three short home visits would lose much of their value to travel and late starts. The
    reverse holds in Old Gurugram, where local tutors make two or three short home sessions a week easy. Tell us your
    coaching days when you ask for tutors, and we shortlist people whose own week fits yours.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jg-boards">Preparing for JEE from a non-CBSE school in Gurugram</h2>
  <p>
    Gurugram has a wide board mix: CBSE, ICSE and ISC, and IB and Cambridge schools, sometimes within one society. The
    NTA's JEE syllabus follows the content of the NCERT books, so a student on CBSE sees the closest match, and a
    student on another board needs a clear map of the gap.
  </p>
  <ul>
    <li><strong>ISC students.</strong> Much of the maths, physics and chemistry overlaps, but chapter order differs and the ISC paper style is long-form. A tutor should chart which NTA units the school covers in which term, so JEE practice does not run ahead of what has been taught.</li>
    <li><strong>IB Diploma and other international programmes.</strong> Topic coverage and depth can differ considerably from the NTA syllabus, and the qualifying-examination rules are set in the NTA bulletin. Read the bulletin's list of qualifying examinations first, then ask the tutor for a unit-by-unit gap list against the NTA syllabus.</li>
    <li><strong>Moving board at Class 11.</strong> A common Gurugram pattern after Class 10. The first months of Class 11 are when gaps from the old board show; a diagnostic in the first two weeks catches them.</li>
  </ul>
  <p>
    For the board side of the same subjects, see our <a href="{{ url('/maths-home-tutor-gurgaon') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-gurgaon') }}">physics</a> and <a href="{{ url('/chemistry-home-tutor-gurgaon') }}">chemistry</a>
    home tutor pages for Gurugram, and the <a href="{{ url('/class-12-home-tutor-gurgaon') }}">Class 12 home tutor</a> page for
    the board year as a whole.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jg-profiles">Which tutor set-up suits which Gurugram JEE student</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Common situations and the set-up that usually fits</caption>
    <thead>
      <tr><th scope="col">Situation</th><th scope="col">Set-up that usually fits</th></tr>
    </thead>
    <tbody>
      <tr><td>In coaching, one subject lagging, long commute to coaching</td><td>One subject tutor; a weekend home session plus a short online doubt session after a coaching day</td></tr>
      <tr><td>In coaching, scores flat in all three subjects</td><td>A tutor for test analysis first (often maths or physics), then add a second subject only if the analysis points there</td></tr>
      <tr><td>Not in coaching, preparing from home</td><td>Separate tutors per subject, a fixed weekly plan, and a mock-test series arranged separately</td></tr>
      <tr><td>Living in a newer sector with few local tutors</td><td>An online specialist with occasional home sessions, rather than a nearby generalist</td></tr>
      <tr><td>Repeat year, free in the daytime</td><td>Daytime home sessions on weekdays; weekends kept for full-length papers</td></tr>
      <tr><td>New to Gurugram mid-year</td><td>A diagnostic session first, then a tutor who can start soon</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The signs that a coaching student needs one-to-one help, and how to use a tutor through a doubt list and mock
    analysis, are set out in the Gurgaon JEE blog guide linked above; the subject-level detail is on the
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> page and in our
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">maths</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">chemistry</a> topic guides.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jg-home">Making home sessions work in Gurugram societies</h2>
  <p>
    JEE sessions are long, often 90 minutes or more, so a late start at the gate costs real teaching time. A few
    habits help:
  </p>
  <ul>
    <li><strong>Pre-register the tutor</strong> on your society's visitor app or at the gate once, so the first class does not start late.</li>
    <li><strong>Share the tower and gate details</strong> before the first session, especially in newer or larger societies with several entrances.</li>
    <li><strong>Set up a proper table</strong> in a common room with space for a notebook, a coaching module and a timer. JEE work is written work.</li>
    <li><strong>Keep coaching material ready.</strong> The session starts from the doubt list and the latest test, not from a blank page.</li>
    <li><strong>Agree the online back-up</strong> for days when traffic or weather makes travel unrealistic, so the week does not lose its session.</li>
  </ul>
  <p>
    Tutors who join NXTutors go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. For home sessions, having an adult at home and using a common area are sensible habits for any family.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jg-demo">Running the free demo in Gurugram</h2>
  <p>
    You get two or three matched tutors and a free demo with the one you prefer. In Gurugram, a quick way to compare is
    an online demo with one tutor and a home demo with another in the same week, which avoids two evenings of travel
    planning. For a JEE demo, bring questions the student could not solve from their own coaching sheet or last test, and
    ask the tutor at the end for a short written plan: which chapters next month, how often, and how progress will be
    checked. If it is not the right fit, tell us and we set up the next demo; switching is free. You can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jg-fees">JEE tutor fees in Gurugram and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fee and you see each one before the demo. In Gurugram, travel at peak hours is one reason a
    tutor's home fee can differ from their online fee. Our <a href="{{ url('/blog/home-tuition-fees-gurgaon') }}">home tuition
    fees in Gurgaon</a> guide and the <a href="{{ url('/pricing-guide') }}">pricing guide</a> cover the rest.
  </p>
  <p>
    To start, tell us the student's class and board, the target (JEE Main, or Main and Advanced), the subjects, the
    coaching days if any, your sector or society and the slots that work. Book a
    <a href="{{ url('/demo-class') }}">free demo class</a>, or read the <a href="{{ url('/neet-home-tutor-gurgaon') }}">NEET home tutor
    in Gurgaon</a> page if your child is preparing for medical entrance instead.
  </p>
  </section>

  </div>
</article>
