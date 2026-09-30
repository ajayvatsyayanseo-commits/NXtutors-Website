{{--
  Long-form guide for the "maths home tutor Lucknow" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/lucknow-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog: icse-isc-maths-gurgaon-guide (ICSE 80 + 20,
  tables, commercial maths, assignments marked 10 + 10; ISC 860 theory 80 +
  project 20, Class 11 and Class 12 unit marks, single 2027/2028 paper,
  regression gone, project marking and viva, not with Applied Mathematics,
  examiners' difficult topics and presentation advice), class-11-stream-choice
  (two maths courses in CBSE and ISC), cbse-class-10-maths-preparation (unit
  marks, section layout, Standard/Basic skill split, no calculators, pi =
  22/7), cbse-class-10-board-year-plan-gurgaon (two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  -ib-math-aaai-slhl (AA/AI, hours, weights, exploration) and
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern).
  The UP Board is described in general terms only (official name and site).
  No school, society, township-developer or people's names; the airport is
  not named; no distances or travel times; only the allowed fee sentence.

  Area links render only when that Lucknow area page exists and is active.
--}}
@php
  $lkAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $lkA = function (string $slug, string $label) use ($lkAreaSlugs) {
      return in_array($slug, $lkAreaSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide lkm-guide" aria-labelledby="lkmGuideTitle">
  <h2 id="lkmGuideTitle">Maths home tutor in Lucknow: settle the board, then the bank of the Gomti you live on</h2>

  <p class="nx-guide__lede">
    Lucknow homes follow an unusually wide spread of maths syllabuses. ICSE and ISC are a common choice
    here alongside CBSE, many families follow the UP Board, and others take IB or Cambridge IGCSE.
    A tutor who is sharp on one can be a poor fit for the next. Geography matters too: a teacher based in Aliganj will not easily keep a weekday evening slot in
    Vrindavan Yojana. Tell NXTutors the course and your locality, and we come back with two or three maths tutors
    who suit both, with each fee visible before you meet. Your first class with the tutor you choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#lkm-board">Five boards</a> ·
    <a href="#lkm-icse">ICSE Class 10</a> ·
    <a href="#lkm-isc">ISC units and marks</a> ·
    <a href="#lkm-writing">Working that scores</a> ·
    <a href="#lkm-cbse">CBSE Class 10 and 12</a> ·
    <a href="#lkm-intl">IB and IGCSE</a> ·
    <a href="#lkm-map">Lucknow by zone</a> ·
    <a href="#lkm-homes">Six neighbourhoods</a> ·
    <a href="#lkm-cost">Fees</a> ·
    <a href="#lkm-request">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="lkm-board">Five boards in one city: which paper is your child sitting?</h2>
  <p>
    The ICSE, ISC, IB and IGCSE maths advice on this page is written by Ajay Vatsyayan, and the Class 10 CBSE and
    ICSE sections by Abhinandan Tiwary. We ask for the exact course first; the class number alone says little.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses taught in Lucknow homes, the body that examines each, and what a tutor needs to have ready</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Examined by</th><th scope="col">Classes</th><th scope="col">What the tutor should bring</th></tr>
    </thead>
    <tbody>
      <tr><td>ICSE Mathematics</td><td>CISCE</td><td>9 and 10</td><td>Commercial maths, construction work and CISCE specimen papers</td></tr>
      <tr><td>ISC Mathematics (860)</td><td>CISCE</td><td>11 and 12</td><td>The syllabus for your child's exam year, plus a plan for two projects</td></tr>
      <tr><td>CBSE Mathematics, Standard or Basic in Class 10</td><td>CBSE</td><td>9 to 12</td><td>Recent CBSE sample papers and their marking schemes</td></tr>
      <tr><td>High School and Intermediate mathematics</td><td>UP Board</td><td>10 and 12</td><td>The prescribed textbooks and the board's own notices</td></tr>
      <tr><td>IB Diploma (AA or AI) and Cambridge IGCSE</td><td>IB and Cambridge</td><td>9 to 12</td><td>Calculator fluency and a clear view of internal assessment</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The UP Board's formal name is Uttar Pradesh Madhyamik Shiksha Parishad, and it conducts the High School
    (Class 10) and Intermediate (Class 12) examinations. We do not reproduce its paper patterns here; the current
    scheme and timetable are published at upmsp.edu.in, and a tutor for this board should work from those and the
    prescribed books.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkm-icse">ICSE Class 10 maths: what makes it different from CBSE?</h2>
  <p>
    Breadth, mostly. The CISCE syllabus for the 2027 examination sets a single three-hour paper of 80 marks, and
    alongside the familiar algebra, geometry, mensuration, trigonometry, statistics and probability it includes
    commercial mathematics: GST, banking, and shares and dividends. Some questions may need logarithmic and
    trigonometric tables, so a student should be comfortable reading them. The remaining 20 marks are internal,
    based on at least two assignments, with 10 awarded by the subject teacher and 10 by an external examiner.
  </p>
  <p>
    CISCE's Analysis of Pupil Performance, published after each exam, lists where marks leaked. For Class 10 in
    2025 that included GST with its SGST and CGST split, recurring deposits, shares, inequations on a number line,
    AP and GP sums, locus and circle constructions, heights and distances, and reading an ogive. A tutor should
    turn it into a checklist to clear by the pre-boards, and check the latest specimen paper on cisce.org. Our
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> goes further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkm-isc">How are the ISC maths marks shared out in Classes 11 and 12?</h2>
  <p>
    ISC Mathematics (860) is examined through a three-hour theory paper of 80 marks and project work worth 20, in
    each of the two years. A student takes either this course or ISC Applied Mathematics, never both. The unit weights show where the teaching time should go:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ISC Mathematics theory, units and marks out of 80 for each year, as CISCE lists them for current syllabuses</caption>
    <thead>
      <tr><th scope="col">Class 11 unit</th><th scope="col">Marks</th><th scope="col">Class 12 unit</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Algebra</td><td>26</td><td>Calculus</td><td>35</td></tr>
      <tr><td>Coordinate Geometry</td><td>20</td><td>Relations and Functions</td><td>10</td></tr>
      <tr><td>Sets and Functions</td><td>18</td><td>Algebra</td><td>10</td></tr>
      <tr><td>Calculus</td><td>8</td><td>Probability</td><td>9</td></tr>
      <tr><td>Statistics and Probability</td><td>8</td><td>Three-Dimensional Geometry; Vector Algebra; Linear Programming</td><td>6; 5; 5</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Class 12 paper is changing shape. Up to the 2026 syllabus it had a compulsory Section A of 65 marks and a
    choice of Section B or Section C for the last 15. The syllabuses CISCE has released for 2027 and 2028 list
    seven units in one paper with no such option, so every candidate now meets vectors, three-dimensional
    geometry, linear programming and probability, and linear regression has left the list. An older guidebook
    prepares a student for the wrong paper.
  </p>
  <p>
    Projects follow a fixed scheme: two a year, each out of 10, with 1 for format, 4 for content, 2 for findings
    and 3 for a viva. In Class 12 a visiting examiner conducts that viva on the project itself, which is why the
    work has to be the student's own; a tutor can help choose a manageable topic and rehearse questions, nothing
    more. The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> sets out a
    month-by-month plan for both years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkm-writing">What kind of working do CISCE examiners reward?</h2>
  <p>
    ISC Class 12 candidates in 2025 struggled most with matrix and determinant properties, uses of derivatives,
    definite and indefinite integrals, differential equations, Bayes' theorem, areas by integration and linear
    programming. The examiners also saw students mixing up symmetric with skew-symmetric matrices and
    "increasing" with "strictly increasing". Each is a failure to choose the method before writing, so a good session
    asks "which approach, and why?" first. The examiners' advice, worth enforcing weekly:
  </p>
  <ul>
    <li><strong>Keep rough work beside the answer.</strong> Method earns marks even when the last line is wrong.</li>
    <li><strong>Name the reason in geometry.</strong> Each step carries its theorem or property.</li>
    <li><strong>Leave construction arcs visible.</strong> Rubbed-out arcs cost marks.</li>
    <li><strong>Round once, at the end,</strong> and only to the accuracy the question asks for.</li>
    <li><strong>Flip the inequality</strong> whenever both sides are multiplied or divided by a negative number.</li>
    <li><strong>In calculus, write the rule used,</strong> state conditions such as where a function increases, and never drop the constant of integration.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkm-cbse">What should CBSE families in Lucknow plan for in Class 10 and Class 12?</h2>
  <h3>Class 10</h3>
  <p>
    The 80-mark paper, plus 20 internal marks, draws on 14 NCERT chapters. Algebra is the heaviest unit at 20
    marks; geometry follows with 15, trigonometry 12, statistics and probability 11 and mensuration 10, while real
    numbers and coordinate geometry take 6 each. Standard and Basic share one layout of five sections, from 20
    one-mark items in Section A to three four-mark case studies in Section E, with no calculators and π as 22/7
    unless stated. They part company on thinking skills: about 54% of Standard marks test remembering and
    understanding, against roughly 75% in Basic. Anyone considering maths in Class 11 should normally sit
    Standard. Since 2026 there is also an optional second board exam in which up to three subjects, maths among
    them, can be improved; the 2027 dates are not out yet, so watch cbse.gov.in. See the
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page.
  </p>
  <h3>Class 12, often with JEE Main</h3>
  <p>
    The board paper has 38 compulsory questions for 80 marks, and calculus accounts for 35 of them. In the 2026
    JEE Main Paper 1, maths supplied 25 of the 75 questions, 20 multiple-choice and 5 numerical, with +4 for a right
    answer and −1 for a wrong one; confirm the next pattern at jeemain.nta.nic.in. One rewards speed, the other
    full written steps, so each week should hold both. CBSE and ISC also offer Applied Mathematics in place of
    Mathematics; the <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">stream choice guide</a> explains
    it. Further reading: the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise plan</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkm-intl">IB and IGCSE maths: which choices need settling early?</h2>
  <p>
    In the IB Diploma the first decision is the course. Analysis and Approaches is built on algebra, functions,
    calculus and proof, and one paper is sat without a calculator. Applications and Interpretation favours
    modelling and statistics, with a graphic display calculator in every paper. Recommended teaching time is 150
    hours at SL and 240 at HL. SL grades come from two papers at 40% each; HL from papers weighted 30%, 30% and 20%;
    and at both levels the exploration supplies the final 20%. A tutor may explain the criteria and question a draft,
    never write it. The <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI
    guide</a> goes deeper.
  </p>
  <p>
    Cambridge IGCSE students are entered for Core or Extended. Core tops out at grade C, while Extended covers A*
    to G, so the tier deserves a conversation with the school well before entries close. Families changing
    boards can read our <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">board-switching guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkm-map">How does Lucknow's layout shape a weekly maths slot?</h2>
  <p>
    We group Lucknow into five tutoring zones. The city has one working metro line, the Red Line, which runs from
    the airport end at Amausi through Alambagh, Charbagh and Hazratganj to Munshi Pulia in Indira Nagar; its first
    stretch opened in September 2017 and the full line in March 2019. Browse tutors by locality on our <a href="{{ url('/city/lucknow') }}">Lucknow page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Lucknow's five tutoring zones, the rail link a travelling maths tutor can rely on, and the homes they usually visit</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Rail link today</th><th scope="col">Typical homes</th></tr>
    </thead>
    <tbody>
      <tr><td>Gomti Nagar, Indira Nagar and Chinhat, in the east</td><td>Four Red Line stations in Indira Nagar and Gomti Nagar railway station; no metro in the Extension or Chinhat</td><td>Plotted houses, with gated complexes in newer sectors</td></tr>
      <tr><td>Mahanagar, Aliganj and Jankipuram, across the Gomti</td><td>Badshahnagar, IT College and Vishwavidyalaya on the Red Line; nothing further north in Jankipuram</td><td>Houses in lettered or numbered LDA sectors</td></tr>
      <tr><td>Hazratganj, Lalbagh and Aminabad, in the centre</td><td>Underground Red Line at Hazratganj, Sachivalaya and Hussainganj; a Blue Line to the old city is being built</td><td>Flats above shops, little parking</td></tr>
      <tr><td>Alambagh, Ashiyana and Rajajipuram, along Kanpur Road</td><td>The 2017 section of the Red Line: Alambagh, Singar Nagar, Krishna Nagar, Transport Nagar</td><td>Houses in LDA sectors and lettered blocks, some gated communities</td></tr>
      <tr><td>Raebareli Road and Sultanpur Road, in the south-east</td><td>No metro; Shaheed Path and the two highways carry most trips</td><td>Township sectors, gated towers and houses on plotted lanes</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkm-homes">Six Lucknow neighbourhoods: what should you arrange before the first maths class?</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>East and across the river</h3>
      <p>
        {!! $lkA('gomti-nagar', 'Gomti Nagar') !!} is a planned township whose khands all start with V, such as
        Vibhuti, Vishwas, Vivek and Vijay Khand. Its metro stops are next door in Indira Nagar, so apartment
        families should share the tower and flat number, and a tutor living in nearby khands is easiest after work
        hours. {!! $lkA('aliganj', 'Aliganj') !!}, one of the largest localities in the north, runs from Sector A
        through to N; a sector letter and house number are enough for a first visit, and Badshahnagar is the nearest
        station.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Trans-Gomti and the centre</h3>
      <p>
        {!! $lkA('mahanagar', 'Mahanagar') !!} lost its planned metro station when the Red Line was finalised, so tutors
        use Badshahnagar or IT College and finish on foot or by auto; most houses mean a straight arrival at the door.
        In {!! $lkA('hazratganj', 'Hazratganj') !!}, a market dating from 1827 and rebuilt in a Victorian style after
        1857, homes are mainly flats above shops. The underground station makes the metro easier than parking, and an
        upper-floor flat may need a call on arrival.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Kanpur Road and Raebareli Road</h3>
      <p>
        {!! $lkA('alambagh', 'Alambagh') !!}, whose garden palace became a fort in 1857, has two Red Line stations and
        the city's biggest bus terminal. Houses allow doorstep visits, gated communities keep a register, and Kanpur
        Road rush hour is the thing to avoid. {!! $lkA('vrindavan-yojana', 'Vrindavan Yojana') !!} is a UP Awas Vikas Parishad
        township in numbered sectors just past the Shaheed Path junction, with no metro; a tutor living in the
        township or in Telibagh keeps a regular slot most easily.
      </p>
    </div>
  </div>
  <p>
    If the right ISC or IB specialist is across the city, pair one online hour with them and one home session
    with a nearby tutor; the <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a>
    article weighs the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkm-cost">How much does a maths home tutor in Lucknow cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Within that range each
    tutor sets their own figure, shaped by the course and class, their experience with that particular paper, how
    far across Lucknow they must come at your chosen hour, and the number of weekly sessions. You see every
    shortlisted fee before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkm-request">What should your request to us include?</h2>
  <p>
    Send the class, the board and course by name (for instance ISC Mathematics or CBSE Standard), your
    neighbourhood with its khand, sector or block, the days and times that suit, and a budget. We reply with two or
    three maths tutors and their fees, and you choose one for a free demo class. If none suits, we arrange another
    demo, and switching tutor later is free. Where nobody suitable can reach you at that time, we suggest online or
    mixed sessions. NXTutors is run from Sector 66, Gurugram, and teaches online across India; the national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page covers other cities.
  </p>
  <p>
    Maths teachers based in Lucknow who would like students close to home can see current requests on the
    <a href="{{ url('/tuition-jobs/lucknow') }}">Lucknow tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
