{{--
  Long-form guide for the "maths home tutor Nagpur" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/nagpur-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements already used on the
  Delhi maths page (CBSE Class 10 unit marks and section layout, Standard and
  Basic skill shares, two Class 10 exams, CBSE Class 12 38 questions with
  calculus 35, ICSE 80 + 20, ISC 2027/2028 single paper and project marking,
  IB AA/AI hours and weights, IGCSE tiers, JEE Main 2026 pattern). The
  Maharashtra State Board is described in general terms only (SSC, HSC,
  state textbooks); no exam pattern is stated for it. No school, society,
  hospital, campus or people's names, no distances or travel times, only the
  allowed fee sentence.

  Area links render only when that Nagpur area page exists and is active.
--}}
@php
  $ngpmAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ngpmA = function (string $slug, string $label) use ($ngpmAreaSlugs) {
      return in_array($slug, $ngpmAreaSlugs, true)
          ? '<a href="' . e(url('/city/nagpur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ngpm-guide" aria-labelledby="ngpmGuideTitle">
  <h2 id="ngpmGuideTitle">Maths home tutor in Nagpur: settle the board, then check which metro line or ring road brings the tutor</h2>

  <p class="nx-guide__lede">
    Two metro lines now cross Nagpur at Sitabuldi, yet a maths tutor's week still depends on geography. A teacher living off Hingna Road can reach Trimurti Nagar with ease but may
    struggle to make a Manewada evening, and a teacher who knows the Maharashtra SSC books inside out may never have
    taught ISC calculus or IB Analysis and Approaches. Tell NXTutors the board and the neighbourhood. We come back
    with two or three maths tutors who fit, each fee visible from the start, and the first class with the one you
    choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ngpm-board">Board first</a> ·
    <a href="#ngpm-ssc">SSC and HSC maths</a> ·
    <a href="#ngpm-sections">CBSE Class 10 paper</a> ·
    <a href="#ngpm-units">Where the marks sit</a> ·
    <a href="#ngpm-senior">Class 12, ISC, IB, JEE</a> ·
    <a href="#ngpm-map">Metro and ring roads</a> ·
    <a href="#ngpm-month">The first month</a> ·
    <a href="#ngpm-fees">Fees</a> ·
    <a href="#ngpm-send">What to send</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ngpm-board">Why does the board matter more than the class number?</h2>
  <p>
    The IB, IGCSE and ISC maths advice on this page is Ajay Vatsyayan's responsibility; the Class 10 CBSE and ICSE
    advice is Abhinandan Tiwary's. The starting point is the board: "Class 9 maths" means four different books in
    Nagpur, and a tutor who is strong on one may be a stranger to another.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths boards Nagpur families ask us about, the books each uses, and a first question for any tutor</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Books and papers</th><th scope="col">A first question for the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>Maharashtra State Board (SSC, HSC)</td><td>State-prescribed textbooks and the board's own question papers</td><td>Do you teach from the state books in the school's order?</td></tr>
      <tr><td>CBSE</td><td>NCERT books; Standard or Basic maths in Class 10</td><td>When do you start timed sample-paper sections?</td></tr>
      <tr><td>ICSE and ISC</td><td>School-chosen books within the CISCE syllabus; CISCE specimen papers</td><td>How do you mark the presentation of working?</td></tr>
      <tr><td>IB Diploma</td><td>Analysis and Approaches or Applications and Interpretation, SL or HL</td><td>How will you guide the exploration without writing it?</td></tr>
      <tr><td>Cambridge IGCSE</td><td>Core or Extended tier</td><td>Which tier suits my child, and why?</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpm-ssc">What should an SSC or HSC family ask of a maths tutor?</h2>
  <p>
    The Maharashtra State Board of Secondary and Higher Secondary Education conducts the SSC examination after Class
    10 and the HSC after Class 12, and Nagpur has one of the board's divisional offices. Its students learn from
    state textbooks rather than NCERT, and the board publishes its own paper scheme, which we leave to the board's
    official site and your child's school rather than restating here.
  </p>
  <p>
    For matching, three things count. The tutor should teach from those state books and practise with the board's
    own past papers; a CBSE worksheet habit does not transfer cleanly. State Board maths tutors are among the easiest
    to find close to home in most Nagpur neighbourhoods. And an HSC student who also sits JEE Main or the state's
    MHT CET entrance, run by the State Common Entrance Test Cell, needs a tutor who can line up the state textbook
    against the entrance syllabus and flag where more depth is expected.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpm-sections">What does the CBSE Class 10 maths paper look like, section by section?</h2>
  <p>
    Standard and Basic share one structure for 2026-27, unchanged from last session, so the latest sample papers are
    still the right practice. The paper is out of 80, with 20 more from the school.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 maths, 2026-27: the five sections of the 80-mark paper and how to practise each</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Questions</th><th scope="col">Marks</th><th scope="col">How to practise it</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>20 one-mark: 18 multiple-choice, 2 assertion–reason</td><td>20</td><td>A ten-question warm-up at the start of each lesson</td></tr>
      <tr><td>B</td><td>5 of two marks</td><td>10</td><td>Short answers with one clear method line</td></tr>
      <tr><td>C</td><td>6 of three marks</td><td>18</td><td>Proofs and multi-step working with every reason written</td></tr>
      <tr><td>D</td><td>4 of five marks</td><td>20</td><td>Long answers set out on a fresh page, units on each line</td></tr>
      <tr><td>E</td><td>3 case studies of four marks</td><td>12</td><td>Reading the situation first, then choosing the chapter</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    No calculator is allowed, and π is taken as 22/7 unless a question says otherwise. What separates the two levels
    is the thinking tested: about 54% of the Standard paper checks remembering and understanding, while in Basic that
    figure is about 75%. If maths is a possible Class 11 subject, Standard is normally the sensible choice; settle it
    with the school before board registration.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpm-units">Which Class 10 units should get the most hours?</h2>
  <p>
    Seven units share the 80 marks. Algebra, covering polynomials, linear equations, quadratics and arithmetic
    progressions, leads with 20. Geometry follows with 15, trigonometry including heights and distances with 12,
    statistics and probability with 11, and mensuration with 10. Real numbers and coordinate geometry close the list
    with 6 each. A tutor who splits the year evenly across chapters is ignoring that spread.
  </p>
  <p>
    From 2026 every Class 10 student takes a compulsory main exam, and an optional second exam lets students raise
    their marks in up to three subjects, maths included. The 2027 schedule is not yet out; watch cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths preparation guide</a> works through
    the chapters, the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> maps the
    months, and ICSE students, whose paper is a three-hour 80 with 20 internal marks, can use the
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a>. The
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page explains how we match for this year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpm-senior">Classes 11 and 12: what should CBSE, ISC, IB and JEE students check?</h2>
  <h3>CBSE Class 12 and JEE Main</h3>
  <p>
    The CBSE Class 12 paper sets 38 compulsory questions for 80 marks, and calculus is worth 35 of them, so it should
    take the biggest block of every week from April. JEE Main 2026 Paper 1 had 75 questions for 300 marks; the 25 in
    maths were 20 multiple-choice and 5 numerical-answer, at +4 for a right answer and −1 for a wrong one. Confirm the
    next session's pattern at jeemain.nta.nic.in. A tutor working alongside coaching can take the week's unsolved
    sheet problems and still finish with a board-style long answer. See the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a> and the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise guide</a>.
  </p>
  <h3>ISC</h3>
  <p>
    For the 2027 and 2028 examinations CISCE has moved ISC maths to a single 80-mark paper of seven compulsory units,
    removing the old choice between Sections B and C. Calculus is worth 35. Two projects add 20, each scored out of
    10 with 1 for format, 4 for content, 2 for findings and 3 for the viva. Our
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> sets out a two-year plan.
  </p>
  <h3>IB and IGCSE</h3>
  <p>
    Analysis and Approaches weights algebra, functions, calculus and proof, with one paper sat without a calculator;
    Applications and Interpretation weights modelling and statistics, with a graphic display calculator in every
    paper. Recommended teaching time is 150 hours at SL and 240 at HL. SL is two papers of 40% each; HL adds a third,
    so the split becomes 30%, 30% and 20%. The exploration supplies the final 20% at both levels and must be the
    student's own work. IGCSE students sit Core, capped at grade C, or Extended, graded A* to G. Read the
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpm-map">How do the metro lines and ring roads shape a weekly maths slot?</h2>
  <p>
    The Orange Line runs north–south, along Wardha Road and Kamptee Road, and the Aqua Line runs east–west; they meet
    at Sitabuldi. Much of the city sits on or near one of them, but the northern and south-eastern belts rely on
    roads. Six neighbourhoods from different zones show the range; browse every zone on the
    <a href="{{ url('/city/nagpur') }}">Nagpur page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Nagpur neighbourhoods: how a maths tutor usually arrives and what helps the slot hold</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">Zone</th><th scope="col">How tutors usually arrive</th><th scope="col">What helps</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $ngpmA('dharampeth', 'Dharampeth') !!}</td><td>Central West</td><td>Aqua Line to Shankar Nagar Square, then a short auto ride</td><td>A slot slightly after the shopping rush; parking is tight near the market lanes</td></tr>
      <tr><td>{!! $ngpmA('shankar-nagar', 'Shankar Nagar') !!}</td><td>Central West</td><td>Its own Aqua Line station on North Ambazari Road; most homes are a walk away</td><td>A two-wheeler rather than a car, and a slightly earlier weekday start</td></tr>
      <tr><td>{!! $ngpmA('trimurti-nagar', 'Trimurti Nagar') !!}</td><td>Hingna Road and Ring Road</td><td>Subhash Nagar or Rachana Ring Road Junction on the Aqua Line, then an auto</td><td>Wide streets make parking easy; allow a margin for evening Ring Road traffic</td></tr>
      <tr><td>{!! $ngpmA('somalwada', 'Somalwada') !!}</td><td>Wardha Road</td><td>Ujjwal Nagar station on the Orange Line, also called Somalwada</td><td>Share the tutor's name with the apartment gate; start after the office rush</td></tr>
      <tr><td>{!! $ngpmA('sadar', 'Sadar') !!}</td><td>North</td><td>Auto or two-wheeler; Orange Line stops around Kasturchand Park and Zero Mile to the south</td><td>Arrive a little early, since the commercial roads fill up in the evening</td></tr>
      <tr><td>{!! $ngpmA('manewada', 'Manewada') !!}</td><td>East and South-East</td><td>No metro; two-wheeler, car or auto along Besa Road</td><td>Independent houses mean doorstep visits; leave a small buffer at office hours</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpm-month">What should the first month with a new maths tutor produce?</h2>
  <p>
    Marks move slowly, but a month is long enough to see whether the arrangement works. By the fourth week you should
    be able to point to:
  </p>
  <ul>
    <li><strong>A diagnosis.</strong> The tutor can name your child's two or three commonest error types, such as sign slips or misread questions, and has a plan for each.</li>
    <li><strong>An error notebook.</strong> Wrong questions copied, corrected and tried again a week later.</li>
    <li><strong>Longer working.</strong> Steps that used to happen in the head now appear on paper, where method marks live.</li>
    <li><strong>One timed section.</strong> Part of a sample or past paper, marked the way the board marks it.</li>
  </ul>
  <p>
    If two of these are missing, tell us. We arrange a demo with the next tutor on your shortlist, and changing tutor
    costs nothing. Families weighing online help for a specialist course can read
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpm-fees">How much does a maths home tutor in Nagpur cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their
    own rate, and it tends to move with the board and class, the tutor's years with that course, the journey to your
    zone at your chosen hour and the number of weekly sessions. Every shortlisted fee is on screen before the demo,
    and the <a href="{{ url('/blog/home-tuition-fees-nagpur') }}">Nagpur home tuition fees guide</a> goes further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpm-send">What should you send us to be matched?</h2>
  <p>
    Five details are enough: the class, the board and exact course, your neighbourhood with the nearest square or
    metro station, the days and times you can offer, and a budget. Two or three matched maths tutors follow, with
    their fees, and you choose one for a free demo class. If nobody suitable can reach you at that hour, we suggest
    online or split-week sessions. NXTutors works from Sector 66, Gurugram, and teaches online across India; the
    national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page and the
    <a href="{{ url('/blog/nagpur-tuition-guide') }}">Nagpur tuition guide</a> explain more.
  </p>
  <p>
    Maths teachers who live in Nagpur and want students nearby can see open requests on the
    <a href="{{ url('/tuition-jobs/nagpur') }}">Nagpur tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
