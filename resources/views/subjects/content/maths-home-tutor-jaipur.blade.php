{{--
  Long-form guide for the "maths home tutor Jaipur" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/jaipur-research.json (zone_facts and area "about"
  texts, each with sources). Exam facts reuse the checked statements already
  used on the Delhi maths page and in database/seo-content/blog:
  cbse-class-10-maths-preparation (unit marks, section layout, Standard/Basic
  skill split, no calculators, pi = 22/7), cbse-class-10-board-year-plan-gurgaon
  (80 + 20, two Class 10 exams), cbse-class-12-maths-calculusalgebra (38
  questions, calculus 35), icse-isc-maths-gurgaon-guide (ICSE 80 + 20, tables;
  ISC single 2027/2028 paper, seven units, project marking), -ib-math-aaai-slhl
  and jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern,
  two sessions). The Rajasthan board (RBSE) is described generally only: its
  name, the two levels it examines, and that its own site carries the scheme;
  no RBSE exam pattern is given. No school, college, society, mall or people's
  names, no distances or travel times, only the allowed fee sentence.

  Area links render only when that Jaipur area page exists and is active.
--}}
@php
  $jpAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jpA = function (string $slug, string $label) use ($jpAreaSlugs) {
      return in_array($slug, $jpAreaSlugs, true)
          ? '<a href="' . e(url('/city/jaipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide jpm-guide" aria-labelledby="jpmGuideTitle">
  <h2 id="jpmGuideTitle">Maths home tutor in Jaipur: start from the board your child writes, then from the colony you live in</h2>

  <p class="nx-guide__lede">
    Jaipur families rarely share one maths syllabus. Next-door neighbours in Mansarovar may be on CBSE and on the
    Rajasthan board; a C-Scheme household may have one child on ICSE and another starting the IB. Beyond that, the
    city has spread from the planned colonies around the old walled city to sectors along Tonk Road, Ajmer Road and
    Sikar Road, so the tutor who suits one address may never reach another. NXTutors takes both questions together.
    Tell us the course and your locality, and we come back with two or three maths tutors who fit, each fee stated in
    advance. The opening class with the tutor you choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jpm-syllabus">Eight maths courses</a> ·
    <a href="#jpm-rbse">The Rajasthan board</a> ·
    <a href="#jpm-ten">CBSE Class 10</a> ·
    <a href="#jpm-cisce">ICSE, ISC, IB, IGCSE</a> ·
    <a href="#jpm-senior">Class 12 and JEE</a> ·
    <a href="#jpm-map">Six localities</a> ·
    <a href="#jpm-term">The first ten weeks</a> ·
    <a href="#jpm-online">Home or online</a> ·
    <a href="#jpm-fees">Fees</a> ·
    <a href="#jpm-request">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jpm-syllabus">Which of eight maths courses is your child actually on?</h2>
  <p>
    Two people write the maths guidance on this page. Ajay Vatsyayan is responsible for the IB, IGCSE and ISC maths
    sections, and Abhinandan Tiwary for Class 10 maths on CBSE and ICSE. Between them they start every Jaipur request
    the same way: with the exact course, because a tutor strong in one can be a stranger to another.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses that Jaipur families bring to us, the body that sets each, and what to have ready for the demo</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Examining body</th><th scope="col">Final assessment</th><th scope="col">Bring to the demo</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 10 Mathematics, Standard (041) or Basic (241)</td><td>CBSE</td><td>80 marks in a three-hour board paper; the school gives the other 20</td><td>The last school test, marked</td></tr>
      <tr><td>Secondary (Class 10) Mathematics</td><td>Board of Secondary Education, Rajasthan</td><td>Set by the state board; read the scheme on its own site</td><td>The state textbook and recent school tests</td></tr>
      <tr><td>ICSE Class 10 Mathematics</td><td>CISCE</td><td>A single 80-mark written paper plus 20 internal marks</td><td>Two recent assignments</td></tr>
      <tr><td>Class 12 Mathematics</td><td>CBSE</td><td>80 marks over 38 compulsory questions; 20 internal</td><td>The calculus chapters done so far</td></tr>
      <tr><td>Senior Secondary (Class 12) Mathematics</td><td>Board of Secondary Education, Rajasthan</td><td>Set by the state board; confirm the current scheme there</td><td>The school's term timetable</td></tr>
      <tr><td>ISC Mathematics (860)</td><td>CISCE</td><td>An 80-mark theory paper with project work for 20</td><td>The project topic, if chosen</td></tr>
      <tr><td>IB Diploma, AA or AI, SL or HL</td><td>IB</td><td>Written papers plus an internally assessed exploration</td><td>The exploration idea, in the student's own words</td></tr>
      <tr><td>Cambridge IGCSE Mathematics</td><td>Cambridge</td><td>Core or Extended tier</td><td>The tier the school has proposed</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpm-rbse">What should Rajasthan board families ask a maths tutor?</h2>
  <p>
    The Board of Secondary Education, Rajasthan, usually called RBSE and based in Ajmer, examines students at two
    levels: Secondary, which is Class 10, and Senior Secondary, which is Class 12. It publishes its own syllabus
    and scheme of examination, and these change from time to time, so we do not reproduce an RBSE
    pattern here. The board's official site, rajeduboard.rajasthan.gov.in, is the place to check.
  </p>
  <p>
    What a family can control is the fit. Three questions settle most of it:
  </p>
  <ul>
    <li><strong>Which medium?</strong> If your child writes maths in Hindi, the tutor should be able to explain and mark in Hindi, with the terms the state textbook uses.</li>
    <li><strong>Which book?</strong> Practice should come from the textbook your child's school has issued and from any practice papers the board or school puts out, not from a CBSE question bank with a different layout.</li>
    <li><strong>Which exam next?</strong> A Class 12 RBSE student preparing for JEE Main also needs entrance practice, and the tutor should say how the week will hold both.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpm-ten">How is CBSE Class 10 maths marked in 2026-27?</h2>
  <p>
    Fourteen NCERT chapters, grouped in seven units, share the 80 theory marks. Algebra is the heaviest unit at 20,
    covering polynomials, pairs of linear equations, quadratics and arithmetic progressions. Geometry follows with 15,
    trigonometry with its heights-and-distances questions takes 12, statistics and probability 11 and mensuration 10.
    Real numbers and coordinate geometry are the lightest, at 6 marks each. A tutor who spends the first weeks on
    algebra is spending time where a fourth of the paper sits.
  </p>
  <p>
    The layout is the same for Standard and Basic. Section A asks 20 one-mark questions, 18 of them multiple-choice
    and 2 assertion–reason. Section B has five questions of two marks, C six of three, D four of five, and E three
    case-based questions of four marks each. There is no calculator, and π means 22/7 unless the question gives
    another value. The levels part company in the kind of thinking asked: roughly 54% of Standard marks go to recall
    and understanding, while in Basic the share is close to 75%. For a child who might take maths after Class 10,
    Standard is the usual choice; settle it with the school before the registration window shuts.
  </p>
  <p>
    Since 2026, every Class 10 candidate sits a main exam, and a second, optional sitting lets a student try to raise
    the score in up to three subjects, maths among them. No 2027 dates are out yet, so watch cbse.gov.in. The
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> covers the
    chapters one by one, the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year
    plan</a> lays out the months, and the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a>
    page explains how we match for this year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpm-cisce">ICSE, ISC, IB and IGCSE: what differs from the NCERT route?</h2>
  <h3>ICSE Class 10</h3>
  <p>
    CISCE's syllabus for the 2027 examination keeps one three-hour, 80-mark paper, with at least two teacher-set
    assignments making up the 20 internal marks. Commercial mathematics, including GST, banking, and shares and
    dividends, has no CBSE counterpart, and some questions call for log and trigonometric tables, so a CBSE-trained
    tutor needs to show they know these parts. The <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE
    Class 10 maths guide</a> goes further.
  </p>
  <h3>ISC Class 12</h3>
  <p>
    For 2027 and 2028, ISC maths is a single 80-mark paper across seven units, and the old choice between Sections B
    and C has gone: every candidate now meets vectors, three-dimensional geometry, linear programming and
    probability. Calculus is worth 35 marks. Two projects of 10 marks each make up the rest, scored for format (1),
    content (4), findings (2) and viva (3). Books printed for the previous layout still sell, so check the year on
    the cover. Our <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> sets out
    both years.
  </p>
  <h3>IB Diploma and IGCSE</h3>
  <p>
    Analysis and Approaches is the more algebraic and proof-based of the two IB courses, with one paper sat without
    a calculator; Applications and Interpretation leans on modelling and statistics and expects a graphic display
    calculator throughout. Recommended teaching time is 150 hours at SL and 240 at HL. At both levels the exploration
    is worth 20% and must be the student's work: a tutor may explain the criteria and ask hard questions of a draft,
    never write it. Read the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA or AI guide</a> and our
    <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page. For Cambridge IGCSE, the Core tier caps the grade
    at C while Extended runs from A* to G, which is why the <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths
    tutor</a> conversation begins with the tier.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpm-senior">How does Class 12 maths sit beside JEE Main preparation?</h2>
  <p>
    The CBSE Class 12 paper asks 38 compulsory questions for 80 marks, and calculus is 35 of them, so it should hold
    the largest share of each week from the start of the session. JEE Main 2026 Paper 1 ran in two sessions, January
    and April, as a computer-based test of 75 questions for 300 marks; maths had 20 multiple-choice and 5
    numerical-value questions, with +4 for a right answer and −1 for a wrong one, and a student's better score across
    the sessions counted. Check jeemain.nta.nic.in before planning around 2027.
  </p>
  <p>
    Many senior students in Jaipur already attend a coaching class. The tutor's job then is not to repeat that
    lecture. It is to clear the problems from the coaching sheet that stayed unsolved, and to finish each session with
    one board-length answer written out in full, so the entrance habit of skipping steps does not leak into the board
    paper. See the <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra guide for
    Class 12</a>, the <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths guide by topic</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpm-map">What does a weekly maths visit involve in six Jaipur localities?</h2>
  <p>
    We group Jaipur into five zones: C-Scheme, Bani Park and Vidhyadhar Nagar in the centre and north; Raja Park,
    Jawahar Nagar and Bapu Nagar in the centre-east; Vaishali Nagar and the west; Mansarovar and Sanganer in the
    south-west and south; and Malviya Nagar, Jagatpura and Tonk Road in the south-east. The Pink Line has run since
    June 2015 between Mansarovar and the railway station side, while much of the city still depends on scooters and
    autos. Six localities show the spread; every area is listed on our <a href="{{ url('/city/jaipur') }}">Jaipur
    page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A maths tutor's weekly visit in six Jaipur localities: homes, how tutors arrive and what to arrange</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">How tutors usually arrive</th><th scope="col">What to arrange</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $jpA('c-scheme', 'C-Scheme') !!}</td><td>Three- and four-bedroom apartments and older bungalows, among offices and hotels</td><td>Sindhi Camp on the Pink Line, then a walk or auto</td><td>Tell building security the tutor's name; office-hour parking is tight, so pick an evening or weekend slot</td></tr>
      <tr><td>{!! $jpA('vidhyadhar-nagar', 'Vidhyadhar Nagar') !!}</td><td>Plotted houses and apartment buildings in numbered sectors, a satellite town laid out on the walled city's 3 x 3 grid</td><td>Scooter or auto; the Orange Line plans a stop here but has not opened</td><td>Give the sector number; allow spare time around Sikar Road at peak hours</td></tr>
      <tr><td>{!! $jpA('jawahar-nagar', 'Jawahar Nagar') !!}</td><td>Independent houses, many ground-plus-one, in Sectors 1 to 5</td><td>Scooter, car or auto; no metro in the locality</td><td>Quote the sector; inner sector roads are the calmer approach in the evening</td></tr>
      <tr><td>{!! $jpA('vaishali-nagar', 'Vaishali Nagar') !!}</td><td>Gated communities beside independent houses and builder floors</td><td>Scooter or car from Chitrakoot, Nirman Nagar or Shyam Nagar</td><td>Gate entry in societies, doorstep in houses; the market stretch is busy after dark</td></tr>
      <tr><td>{!! $jpA('mansarovar', 'Mansarovar') !!}</td><td>Housing board flats, plots, villas and apartment complexes in a colony planned by the Jaipur Development Authority</td><td>Pink Line to Mansarovar, New Aatish Market or Vivek Vihar</td><td>Newer complexes register visitors; Shipra Path fills up in the evening</td></tr>
      <tr><td>{!! $jpA('malviya-nagar', 'Malviya Nagar') !!}</td><td>Builder floors, apartments, villas and plotted houses</td><td>Scooter or car via Tonk Road or the airport road; no metro yet</td><td>An early after-school slot avoids the market crowd</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpm-term">What should the first ten weeks with a new maths tutor produce?</h2>
  <p>
    A good first term is easy to recognise if you know what to look for. A rough sequence:
  </p>
  <ol>
    <li><strong>Weeks 1–2, diagnosis.</strong> A short untimed test on last year's chapters, and a written note to you listing the three gaps that matter most.</li>
    <li><strong>Weeks 3–6, repair beside school.</strong> The current school chapter is taught, and one gap is closed each week with a small set of problems.</li>
    <li><strong>Weeks 7–8, the first timed section.</strong> One section of a recent sample or model paper, marked the way the board marks it.</li>
    <li><strong>Weeks 9–10, a review with you.</strong> What improved, what did not, and the plan until the half-yearly exam.</li>
  </ol>
  <p>
    Throughout, keep an eye on a single notebook where every wrong answer is copied, corrected and tried again a week
    later. If that notebook does not exist by week six, raise it. We can arrange a demo with another tutor, and
    switching tutor is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpm-online">Should maths be at home, online or a mix of both?</h2>
  <p>
    For most Class 6 to 10 students in Jaipur, a tutor at the table is worth the trip: working appears on paper
    where the tutor can see it. Two situations favour a mix. The first is a specialist course, IB HL, ISC or IGCSE
    Extended, where the right tutor may live across the city. The second is the long outer corridors along Sikar Road,
    Ajmer Road or Jagatpura, where one online hour a week spares everyone a journey. The
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> article weighs it up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpm-fees">How much does a maths home tutor in Jaipur charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their
    own figure, shaped by the course, their years with it, the journey to your part of Jaipur at your chosen hour
    and the number of sessions a week. You see each shortlisted fee before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpm-request">What should a request to us include?</h2>
  <p>
    Send the class, the course by its full name, including the medium for RBSE, your locality with its sector or
    landmark, the days and hours you can offer, and a budget. We reply with two or three matched maths tutors and
    their fees; you choose one for a free demo class. If nobody suitable can reach you at that hour, we suggest
    online or mixed sessions instead. NXTutors works from Sector 66, Gurugram, and teaches online anywhere in India;
    the national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page covers other cities. For the
    sciences, see our <a href="{{ url('/physics-home-tutor-jaipur') }}">physics tutors in Jaipur</a>.
  </p>
  <p>
    Maths teachers based in Jaipur who want students near home can see open requests on the
    <a href="{{ url('/tuition-jobs/jaipur') }}">Jaipur tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
