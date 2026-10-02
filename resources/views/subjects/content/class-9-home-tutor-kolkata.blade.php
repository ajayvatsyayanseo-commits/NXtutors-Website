{{--
  Long-form guide for "Class 9 home tutor Kolkata" (first year of the two-year
  course to Madhyamik, CBSE Class 10, ICSE or IGCSE), covering Kolkata, Salt
  Lake, New Town and Howrah. Authors: Abhinandan Tiwary (Class 10 CBSE and ICSE
  maths) and Aaditya Kashyap (CBSE and ICSE science). Role statements only. City
  authority wave, written 2 Oct 2026. Structure follows
  class-9-home-tutor-mumbai; no sentences reused.

  Official sources:
  - WBBSE, wbbse.wb.gov.in (read 2 Oct 2026):
    * Annual Academic Calendar of 2026 (Notification D.S.(Aca)/940/A/25/6,
      29.12.2025): the Class IX-X routine lists First Language, Second
      Language, Mathematics (Ganit Prakash), Physical Science & Environment,
      Life Science & Environment, History & Environment, Geography &
      Environment and an optional elective; internal formative evaluation (IFE)
      in IX and X; three summative evaluations normally in the first week of
      April, August and December; textbooks distributed by January; school
      hours 10.40 to 16.30.
    * Home page notice list (2 Oct 2026): "Notification regarding online
      checklist verification of registration data for Class IX (2026)".
    * Main Objectives: the board conducts the secondary examination, the
      Madhyamik Pariksha, after Class X.
  - CBSE (as stated on cbse-home-tutor-kolkata, citing the Secondary
    Curriculum 2026-27 Part 1 on cbseacademic.nic.in): 80 + 20 in major
    subjects; Class IX maths and science a common 80-mark paper plus an
    optional Advanced paper (25 marks, 1 hour), not added to the aggregate;
    school-based internal assessment and annual exam in Class IX.
  - CISCE ICSE Examination Year 2028 Regulations (cisce.org, as on the
    verified Gurgaon and Mumbai Class 9 pages): two-year course; Class IX final
    exam conducted by schools; promotion needs 33% in five subjects including
    English and 75% attendance; no subject change after 15 September of Class
    IX; 80% external / 20% internal.
  - Cambridge IGCSE (cambridgeinternational.org): for 14 to 16 year olds,
    assessed at the end of the course (same pages).
  Local detail only from database/seo-content/zones/kolkata.json,
  database/seo-content/areas/kolkata-research.json, kolkata-zone-guides.json and
  the /city/kolkata hub (CBSE and CISCE sessions begin in April; Puja holidays
  in autumn). No school or people names; no request-data claims. Fee range is
  the approved sentence. FAQs: faqs/class-9-home-tutor-kolkata.php.
  Area links render only when that Kolkata area page exists and is active.
--}}
@php
  $c9KoSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $c9KoA = function (string $slug, string $label) use ($c9KoSlugs) {
      return in_array($slug, $c9KoSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="c9KoGuideTitle">
  <h2 id="c9KoGuideTitle">Class 9 home tutors in Kolkata: the first half of the road to Madhyamik, CBSE, ICSE or IGCSE</h2>

  <p class="nx-guide__lede">
    Class 9 is not a board year, which is exactly why it is so often wasted. Every Class 10 course a Kolkata student
    might sit, the Madhyamik, CBSE, ICSE or IGCSE, is really a two-year course, and Class 9 holds half of it. The
    chapters learnt now return in the board paper; the chapters skipped now come back as panic in December of Class 10.
    In this guide, Abhinandan Tiwary, who writes on Class 10 CBSE and ICSE maths, and Aaditya Kashyap, who writes on CBSE
    and ICSE science, explain how each board treats Class 9, the early warning signs, a term plan for Kolkata's two
    school calendars, and how to pick a tutor who can reach your neighbourhood all year.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#c9ko-why">Why Class 9 counts</a> ·
    <a href="#c9ko-boards">Each board's Class 9</a> ·
    <a href="#c9ko-signals">Warning signs</a> ·
    <a href="#c9ko-switch">Changing board</a> ·
    <a href="#c9ko-plan">A term plan</a> ·
    <a href="#c9ko-session">A good session</a> ·
    <a href="#c9ko-zones">Travel by zone</a> ·
    <a href="#c9ko-mode">Home or online</a> ·
    <a href="#c9ko-demo">The demo</a> ·
    <a href="#c9ko-fees">Fees</a> ·
    <a href="#c9ko-where">Where we match</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="c9ko-why">Why does Class 9 carry so much weight?</h2>
  <p>
    Three reasons. First, maths and science become cumulative: algebra, geometry proofs, motion, atoms and cells in
    Class 9 are the base for the Class 10 chapters that carry the most marks. Second, the student meets longer answers
    and timed tests, often for the first time. Third, Class 10 itself is crowded with pre-boards, practicals and
    projects, leaving little room to repair old gaps. A year of steady work in Class 9 makes Class 10 a revision year;
    a lost Class 9 makes it a rescue.
  </p>
  <p>
    For a state-board student there is a fourth reason. The West Bengal board's 2026 calendar asks schools to track
    each Class IX and X child through internal formative evaluation as well as the summative tests, using classwork,
    tasks, reference work and lab activities. That makes steady, complete notebooks and regular class participation
    part of the year's record, not just the test papers. A tutor who checks the school notebook every week, and not
    only the tuition notebook, helps keep that record in good shape, and spots early when a chapter has been copied
    rather than understood.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c9ko-boards">How does each board treat Class 9?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 9 on the boards Kolkata students follow</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Class 9 structure</th><th scope="col">What it means for tuition</th></tr>
    </thead>
    <tbody>
      <tr><td>West Bengal Board of Secondary Education</td><td>First and second language, Mathematics (Ganit Prakash), Physical Science, Life Science, History and Geography, each paired with environment, plus an optional elective; internal formative evaluation alongside three summative evaluations</td><td>Students are registered with the board in Class IX; follow the board's books in the child's medium and plan for each summative</td></tr>
      <tr><td>CBSE</td><td>School-based internal assessment and an annual exam; maths and science have a common 80-mark paper, with an optional Advanced paper of 25 marks that is not added to the aggregate</td><td>Decide early whether the Advanced paper is worth attempting</td></tr>
      <tr><td>ICSE (CISCE)</td><td>Two-year course; the school conducts the Class IX exam; promotion needs 33% in five subjects including English and 75% attendance; subjects cannot change after 15 September of Class IX</td><td>Settle the subject choice before mid-September</td></tr>
      <tr><td>Cambridge IGCSE</td><td>A course for 14 to 16 year olds, assessed at the end</td><td>No board test in Year 1, so the tutor must create the deadlines</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The West Bengal board pairs physical science and life science separately, so a state-board student has two science
    subjects to keep up with rather than one combined course. A tutor strong in physics and chemistry may not be the right
    person for life science, and vice versa. For more on each route, see the
    <a href="{{ url('/west-bengal-board-tutor-kolkata') }}">West Bengal board guide for Kolkata</a> and our
    <a href="{{ url('/cbse-home-tutor-kolkata') }}">CBSE</a>, <a href="{{ url('/icse-home-tutor-kolkata') }}">ICSE</a>
    and <a href="{{ url('/igcse-tutor-kolkata') }}">IGCSE</a> pages for the city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c9ko-signals">Which early signals mean a Class 9 student needs help?</h2>
  <ul>
    <li>The first unit test in maths or physical science is well below Class 8 marks, and the student cannot say why.</li>
    <li>Homework answers are copied from a guide book with no working.</li>
    <li>Algebraic manipulation, linear equations or basic geometry from Class 8 still cause trouble.</li>
    <li>Long answers in history, geography or life science are lists of facts without structure.</li>
    <li>Study is happening only in the week before a test.</li>
  </ul>
  <p>
    If two of these show up by the end of the first term, start now rather than waiting for the annual result.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c9ko-switch">What if your child has changed board or city?</h2>
  <p>
    Students who move into Kolkata, or switch between CBSE, ICSE and the state board at Class 9, face two problems at
    once: different books and, sometimes, a different medium. A tutor should begin by comparing the old and new
    syllabus chapter by chapter, list the topics the new class assumes, and fill them in the first six weeks. A
    student moving from the state board to ICSE needs more practice in English answer writing; one moving the other way
    may need help with the Bengali or Hindi first-language paper. Our article on
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching from CBSE to IB or IGCSE</a> covers
    the international route.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c9ko-plan">A Class 9 term plan for Kolkata's two calendars</h2>
  <p>
    CBSE and CISCE sessions begin in April. The state board works to a calendar year: its 2026 academic calendar has
    textbooks distributed by January and summative evaluations normally in the first week of April, August and
    December. Count the plan from your school's first month rather than a fixed date.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 9 plan, measured from the school's first month</caption>
    <thead>
      <tr><th scope="col">Stretch</th><th scope="col">Focus</th></tr>
    </thead>
    <tbody>
      <tr><td>Months 1 to 2</td><td>Collect the syllabus and paper pattern for each subject; repair Class 8 gaps in algebra and science basics</td></tr>
      <tr><td>Months 3 to 5</td><td>Weekly chapter tests; a mistakes notebook; first full-length answers in history, geography and life science</td></tr>
      <tr><td>Months 6 to 7</td><td>Mid-year exam or summative; review every error, not only the marks</td></tr>
      <tr><td>Months 8 to 9</td><td>Hardest chapters of the year; keep sessions going around the Puja holidays, online if travel is difficult</td></tr>
      <tr><td>Months 10 to 12</td><td>Timed papers under exam conditions; a short list of chapters to revisit at the start of Class 10</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c9ko-session">What does a good ninety-minute Class 9 session look like?</h2>
  <ol>
    <li><strong>Ten minutes:</strong> the student explains last session's topic in her own words.</li>
    <li><strong>Thirty minutes:</strong> new concept, with the tutor asking questions rather than lecturing.</li>
    <li><strong>Thirty-five minutes:</strong> the student solves board-style questions while the tutor watches the working.</li>
    <li><strong>Fifteen minutes:</strong> errors entered in the notebook, and a short task set for the next two days.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c9ko-zones">How tutors get to Class 9 students in each zone</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Routes and timing for Class 9 sessions in Kolkata and Howrah</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Typical route</th><th scope="col">Timing</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/kolkata/zone/tollygunge-jadavpur-garia') }}">Tollygunge, Jadavpur &amp; Garia</a></td><td>Kavi Nazrul on the Blue Line or Satyajit Ray on the Orange Line for Baghajatin</td><td>Avoid the station and bypass junction in the evening build-up</td></tr>
      <tr><td><a href="{{ url('/city/kolkata/zone/ballygunge-gariahat-alipore') }}">Ballygunge, Gariahat &amp; Alipore</a></td><td>Dhakuria on the suburban line, or Rabindra Sarobar on the Blue Line</td><td>Weekend mornings are easy; Gariahat Road is busy at peak hours</td></tr>
      <tr><td><a href="{{ url('/city/kolkata/zone/kasba-em-bypass-south') }}">Kasba &amp; EM Bypass South</a></td><td>VIP Bazar or Hemanta Mukhopadhyay on the Orange Line, or Ballygunge Junction</td><td>Complexes near the bypass register visitors; afternoons are easier</td></tr>
      <tr><td><a href="{{ url('/city/kolkata/zone/new-town-rajarhat') }}">New Town &amp; Rajarhat</a></td><td>Bus along VIP Road or Rajarhat Main Road; the VIP Road metro station is still being built</td><td>Keep clear of the Chinar Park and Teghoria peaks</td></tr>
      <tr><td><a href="{{ url('/city/kolkata/zone/north-kolkata') }}">North Kolkata</a></td><td>Belgachia on the Blue Line, open since 1984</td><td>Evening classes after the Jessore Road peak</td></tr>
      <tr><td><a href="{{ url('/city/kolkata/zone/howrah') }}">Howrah</a></td><td>Liluah or Tikiapara for Salkia, or the Green Line to Howrah</td><td>Give a lane landmark; market streets fill in the evening</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c9ko-mode">Home or online tuition in Class 9?</h2>
  <p>
    For maths and physical science, a tutor at the table sees every line and catches errors as they happen, which makes
    a strong case for starting at home. Online is a strong option for a specialist, an ICSE or IGCSE tutor who lives across
    the city, or a second subject on a different evening. It also keeps the routine alive during the autumn holidays.
    For maths online, insist on live sight of the notebook through a tablet or a phone camera. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> guide weighs the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c9ko-demo">What to ask in a Class 9 demo</h2>
  <ul>
    <li>"Which Class 9 chapters matter most for next year's board paper on our board?"</li>
    <li>"How will you check that my child can work alone, not only with you?"</li>
    <li>"Here is the last test. What would you fix first?"</li>
    <li>For the state board: "Can you teach in my child's medium, and do you cover both physical and life science?"</li>
  </ul>
  <p>
    The first class with the tutor you choose is a free demo, and you can switch to another tutor later at no cost.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes
    live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c9ko-fees">What does a Class 9 home tutor cost in Kolkata?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For Class 9, the board, the subjects, sessions per week and the journey to your neighbourhood decide the quote,
    and you see it on the shortlist before the demo. See <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">home
    tuition fees in Kolkata</a> and the <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c9ko-where">Where we match Class 9 tutors in Kolkata</h2>
  <p>
    {!! $c9KoA('baghajatin', 'Baghajatin') !!} has its own station on the suburban line and sits close to the EM Bypass,
    so tutors from Kasba or Garia can arrive by train or metro and an auto. In
    {!! $c9KoA('belgachia', 'Belgachia') !!}, flats in small buildings and family houses mean the tutor usually goes
    straight to the door. {!! $c9KoA('dhakuria', 'Dhakuria') !!} is a denser middle-class neighbourhood where inner-lane
    houses make a doorstep visit, and weekend mornings avoid the Gariahat Road peak.
  </p>
  <p>
    {!! $c9KoA('kasba', 'Kasba') !!} mixes older buildings in its paras with gated complexes near the bypass, so share
    the tutor's name with the gate before the first class. In {!! $c9KoA('rajarhat', 'Rajarhat') !!}, buses along VIP
    Road and Rajarhat Main Road are the usual way in. {!! $c9KoA('salkia', 'Salkia') !!} in north Howrah is reached by
    Liluah or Tikiapara stations, or from Howrah on the Green Line, then an auto or rickshaw.
  </p>
  <p>
    The year before is covered by <a href="{{ url('/class-6-8-home-tutor-kolkata') }}">Class 6 to 8 tutors</a>; the
    year after by <a href="{{ url('/class-10-home-tutor-kolkata') }}">Class 10 home tutors in Kolkata</a>. Subject
    pages: <a href="{{ url('/maths-home-tutor-kolkata') }}">maths</a> and
    <a href="{{ url('/science-home-tutor-kolkata') }}">science</a> in Kolkata, plus the national
    <a href="{{ url('/maths-home-tutor/class-9') }}">Class 9 maths</a> and
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science</a> outlines. Send the board, medium, subjects,
    neighbourhood and hours; we reply with two or three tutors and their fees. <a href="{{ url('/demo-class') }}">Book a
    free demo</a>, browse <a href="{{ url('/tutors') }}">tutors</a> or see every area on the
    <a href="{{ url('/city/kolkata') }}">Kolkata home tutors</a> page.
  </p>
  </section>

  </div>
</article>
