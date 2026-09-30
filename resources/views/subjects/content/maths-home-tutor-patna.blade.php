{{--
  Long-form guide for the "maths home tutor Patna" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/patna-research.json (zone_facts and area "about"
  texts, each with sources). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-10-maths-preparation (unit marks,
  section layout, Standard/Basic skill split, no calculators, pi = 22/7),
  cbse-class-10-board-year-plan-gurgaon (80 + 20, two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC single 2027/2028 paper,
  seven units, project marking), -ib-math-aaai-slhl (AA/AI, teaching hours,
  paper weights, exploration) and jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026 pattern). The Bihar School Examination Board is described in
  general terms only (no exam pattern). No school, college, coaching
  institute, society or people's names, no distances or travel times, only
  the allowed fee sentence.

  Area links render only when that Patna area page exists and is active.
--}}
@php
  $ptAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ptA = function (string $slug, string $label) use ($ptAreaSlugs) {
      return in_array($slug, $ptAreaSlugs, true)
          ? '<a href="' . e(url('/city/patna/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ptm-guide" aria-labelledby="ptmGuideTitle">
  <h2 id="ptmGuideTitle">Maths home tutor in Patna: fix the syllabus first, then the stretch of the city you live on</h2>

  <p class="nx-guide__lede">
    Patna families write maths for very different examiners: the Bihar board, CBSE, ICSE and ISC, and for some
    children IB or Cambridge IGCSE. A teacher who knows one of these inside out can be the wrong choice for the next. The city's shape matters as well: Patna stretches along
    the Ganga from Danapur in the west to the old city in the east, so a tutor living near Kankarbagh is rarely the
    easy answer for a flat off Bailey Road. Share your child's course and your locality with NXTutors and we send two
    or three maths tutors who suit both. You see each fee before meeting anyone, and the opening class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ptm-boards">Five syllabuses</a> ·
    <a href="#ptm-bseb">Bihar board maths</a> ·
    <a href="#ptm-ten">CBSE Class 10</a> ·
    <a href="#ptm-senior">Class 12 and JEE</a> ·
    <a href="#ptm-cisce">ICSE, ISC, IB, IGCSE</a> ·
    <a href="#ptm-map">Six localities</a> ·
    <a href="#ptm-demo">Judging the demo</a> ·
    <a href="#ptm-mode">Home or online</a> ·
    <a href="#ptm-fees">Fees</a> ·
    <a href="#ptm-request">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ptm-boards">Bihar board, CBSE, CISCE or an international course: which one sets your child's maths paper?</h2>
  <p>
    Two authors cover the exam detail here. Ajay Vatsyayan writes the guidance on IB, IGCSE and ISC maths; Abhinandan
    Tiwary writes the sections on Class 10 CBSE and ICSE maths. Before we look at any tutor, we ask which body sets
    the paper, because that decides the textbook, the style of working and the kind of practice that earns marks.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths syllabuses Patna families bring to us, the body behind each, and the first check to make with a tutor</caption>
    <thead>
      <tr><th scope="col">Syllabus</th><th scope="col">Examining body</th><th scope="col">What the final assessment looks like</th><th scope="col">First check with a tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>Bihar board, Class 10 and Class 12</td><td>Bihar School Examination Board</td><td>Set by the board; take the current scheme from its official website</td><td>Can you teach from my child's issued textbook, in the medium my child writes in?</td></tr>
      <tr><td>CBSE Class 10, Standard or Basic</td><td>CBSE</td><td>80-mark board paper, 20 marks assessed in school</td><td>Which level suits my child, and why?</td></tr>
      <tr><td>CBSE Class 12</td><td>CBSE</td><td>38 compulsory questions for 80, with 20 internal</td><td>How will calculus be spread across the year?</td></tr>
      <tr><td>ICSE Class 10 and ISC Class 12</td><td>CISCE</td><td>80-mark written paper plus 20 marks of internal or project work</td><td>Which exam year's syllabus do you teach from?</td></tr>
      <tr><td>IB Diploma or Cambridge IGCSE</td><td>IB; Cambridge</td><td>IB: timed papers plus an exploration. IGCSE: Core or Extended tier</td><td>Which course or tier have you taught recently?</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptm-bseb">What should a family on the Bihar board expect from a maths tutor?</h2>
  <p>
    The Bihar School Examination Board, which has its head office in Patna, runs the state's Class 10 (Matric) and
    Class 12 (Intermediate) examinations. It publishes its own syllabus and scheme of marking, and it revises them from
    time to time. For that reason this page does not describe a Bihar board paper; the board's
    official website is the place to confirm the current rules before a plan is drawn up.
  </p>
  <p>
    What parents can settle is whether a tutor fits. Four points cover most of it:
  </p>
  <ul>
    <li><strong>Language of the answers.</strong> A child who writes maths in Hindi needs a tutor who explains and marks in Hindi, using the same terms as the textbook.</li>
    <li><strong>The book on the desk.</strong> Exercises should come from the textbook the school has handed out and from any model papers the board releases, not from a practice book written for another board.</li>
    <li><strong>Written steps.</strong> Whatever the board, a solution set out line by line is easier to check and to mark than an answer worked out in the head.</li>
    <li><strong>Plans after Class 10.</strong> A student aiming at Class 11 science, or at JEE later, needs algebra and geometry made secure in Class 9 and 10, not just a pass in the Matric exam.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptm-ten">Where do the marks come from in CBSE Class 10 maths this session?</h2>
  <p>
    For 2026-27, CBSE places the 80 board marks across 14 NCERT chapters grouped in seven units, and the paper's
    design has stayed the same as last session. Ranked by weight, this is where a tutor should spend the year:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 maths units ranked by board marks, 2026-27, with the error a Patna tutor should look for first</caption>
    <thead>
      <tr><th scope="col">Marks</th><th scope="col">Unit</th><th scope="col">Error to look for first</th></tr>
    </thead>
    <tbody>
      <tr><td>20</td><td>Algebra: polynomials, pairs of linear equations, quadratics, arithmetic progressions</td><td>Setting up the equation wrongly from a word problem</td></tr>
      <tr><td>15</td><td>Geometry: triangles and circles</td><td>Statements in a proof with no reason attached</td></tr>
      <tr><td>12</td><td>Trigonometry, including heights and distances</td><td>Choosing a ratio before the figure is drawn</td></tr>
      <tr><td>11</td><td>Statistics and probability</td><td>Arithmetic slips inside a grouped frequency table</td></tr>
      <tr><td>10</td><td>Mensuration</td><td>Dropping units when two solids are combined</td></tr>
      <tr><td>6 + 6</td><td>Real numbers; coordinate geometry</td><td>Rushing short questions that should be free marks</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The paper has five sections. A carries 20 one-mark questions, of which 18 are multiple-choice and 2 are
    assertion–reason; B asks five questions of two marks; C six of three; D four of five; and E three case studies
    worth four each. No calculator is permitted, and π is 22/7 unless the question gives another value. Standard and
    Basic share the chapters but not the demand: roughly 54% of Standard marks rest on remembering and understanding,
    against roughly 75% in Basic. Choose Standard if maths in Class 11 is a possibility, and check the school's
    deadline for the choice.
  </p>
  <p>
    Since 2026, Class 10 students take one compulsory main exam and may sit an optional second exam to improve up to
    three subjects, maths among them. Dates for 2027 are not yet out; watch cbse.gov.in. The
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> takes each chapter
    in turn, the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> lays out the
    months, and our <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page explains how we
    match for that year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptm-senior">How does a home tutor fit beside JEE coaching in Class 12?</h2>
  <p>
    Many Patna students in Classes 11 and 12 already spend their evenings at a coaching centre; much of the Boring Road
    frontage is given over to coaching institutes, and more cluster along Bhootnath Road. A home tutor should not
    repeat that lecture. The useful job is different: finish the problems left unsolved from the coaching sheet, and
    keep the school board paper from being squeezed out.
  </p>
  <p>
    The two exams reward different habits. The CBSE Class 12 paper asks 38 compulsory questions for 80 marks, and
    calculus alone is worth 35, so it earns the biggest slice of each week from the start of the session. JEE Main
    2026 Paper 1 had 75 questions for 300 marks, 25 of them maths: 20 multiple-choice and 5 with a numerical answer,
    each scored +4 when right and −1 when wrong. Confirm the next pattern on jeemain.nta.nic.in. A workable week pairs
    one coaching-sheet session with one board session that ends on a long answer written out in full. See the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptm-cisce">ICSE, ISC, IB and IGCSE maths: what changes?</h2>
  <dl>
    <dt><strong>ICSE Class 10</strong></dt>
    <dd>One written paper of 80 marks, with 20 more from internal assessment. Our <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> explains how the working is judged.</dd>
    <dt><strong>ISC Class 12</strong></dt>
    <dd>For the 2027 and 2028 exams, CISCE sets a single 80-mark paper of seven units and removes the old choice between Sections B and C, so vectors, three-dimensional geometry, linear programming and probability are compulsory for everyone. Calculus accounts for 35 marks. Two projects add 20, each scored out of 10 as format 1, content 4, findings 2 and viva 3. The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> sets out both years.</dd>
    <dt><strong>IB Diploma</strong></dt>
    <dd>Analysis and Approaches centres on algebra, functions, calculus and proof, and has a paper without a calculator; Applications and Interpretation centres on modelling and statistics, with a graphic display calculator in every paper. Teaching time is 150 hours at SL and 240 at HL. SL is two papers at 40% each; HL is two at 30% and one at 20%; the exploration makes up the last 20% at both levels and has to be the student's own work. Read the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a>.</dd>
    <dt><strong>Cambridge IGCSE</strong></dt>
    <dd>Core limits the grade to C; Extended covers A* to G. Settle the tier with the school well before entries close. Families thinking of a change of board can read about <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching from CBSE to IB or IGCSE</a>.</dd>
  </dl>
  <p>
    Specialists for these four courses are harder to find than CBSE teachers, so mention the course in your first
    message; an online specialist can fill the gap if nobody nearby is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptm-map">What should you arrange before the first maths class in six Patna localities?</h2>
  <p>
    Most Patna tutors travel by two-wheeler, car or auto. The metro's Blue Line is open between Malahi Pakri,
    Bhootnath, Zero Mile and the Patliputra bus terminal, while the Red Line under Bailey Road is still being built.
    Compare tutors by locality on our <a href="{{ url('/city/patna') }}">Patna page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Patna localities: the homes you mostly find, how a tutor arrives, and one thing to settle in advance</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Arrival</th><th scope="col">Settle in advance</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $ptA('boring-road', 'Boring Road') !!}</td><td>Apartment buildings on the road; older houses in Nageshwar Colony and the Sri Krishna Puri lanes behind it</td><td>Most homes are a short turn off the main road; tutors from the adjoining colonies can walk or ride over</td><td>A slot that misses the evening rush at the crossing, and the building's sign-in rule</td></tr>
      <tr><td>{!! $ptA('patliputra-colony', 'Patliputra Colony') !!}</td><td>A cooperative colony formed in 1954: independent houses with newer apartment blocks</td><td>Doorstep arrival at most houses; some buildings keep a visitor register</td><td>A tutor from the colony or close by, as roads towards Boring Road fill up in the evening</td></tr>
      <tr><td>{!! $ptA('bailey-road', 'Bailey Road') !!}</td><td>A long belt of two- and three-bedroom flats on the western stretch</td><td>Gate registration is usual; metro construction can slow parts of the road</td><td>A tutor from the same stretch of the road, or a slot outside office hours</td></tr>
      <tr><td>{!! $ptA('danapur', 'Danapur') !!}</td><td>Mostly apartments, with houses, plots and builder floors; the cantonment has its own entry rules</td><td>Civilian buildings register visitors; ask the family how a visitor enters the cantonment</td><td>A tutor based in Danapur or Saguna More rather than the city centre</td></tr>
      <tr><td>{!! $ptA('kankarbagh', 'Kankarbagh') !!}</td><td>One of the city's largest colonies: houses, builder floors and a growing number of flats</td><td>Malahi Pakri metro station, opened in July 2026, then an auto; or directly by two-wheeler</td><td>Some margin in the slot, since the main-road markets are busy in the evening</td></tr>
      <tr><td>{!! $ptA('patna-city', 'Patna City') !!}</td><td>Older houses in the lanes of the old eastern city</td><td>Doorstep arrival; two-wheelers and e-rickshaws suit the lanes better than cars</td><td>A lane landmark and phone number; the riverfront expressway now links the old city with the west</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptm-demo">What should you watch for during the free maths demo?</h2>
  <p>
    Ask the tutor to teach whatever chapter your child is on at school, not a prepared showpiece. Then look for four
    things:
  </p>
  <ol>
    <li><strong>Questions before explanations.</strong> A good tutor finds out what your child already knows before starting to teach.</li>
    <li><strong>Mistakes sorted by kind.</strong> Is the slip in arithmetic, in reading the question, or in the concept? Each needs a different remedy.</li>
    <li><strong>Working in the board's format.</strong> The steps should look the way the examiner for your syllabus expects them to.</li>
    <li><strong>A plan for the week.</strong> By the end, you should know what the next three sessions will cover and what homework is set.</li>
  </ol>
  <p>
    If the fit is wrong, tell us and we arrange a demo with another tutor on your shortlist. A change of tutor later
    is free as well. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a>
    goes further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptm-mode">Home, online or a mix: which suits a Patna student?</h2>
  <p>
    At the same table a tutor catches an error as it is written, which matters most for younger children and proofs.
    Online suits a specialist living across the city or a coaching day that ends late, and a week with one of each
    often works well. The
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article weighs the options.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptm-fees">How much does a maths home tutor in Patna charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    rate. What moves it is the syllabus and class, the tutor's time with that syllabus, the trip to your locality at
    your chosen hour and the number of sessions each week. Every shortlisted fee is on screen before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptm-request">What should your request to us include?</h2>
  <p>
    Send five things: the class, the syllabus by its full name (Bihar board, CBSE Standard or Basic, ICSE, ISC, IB or
    IGCSE), your locality with a nearby landmark, the days and times you can offer, and a budget. We reply with two or
    three matched maths tutors, each fee listed, and you pick one for a free demo. If nobody suitable can reach your
    part of Patna at that hour, we suggest an online or mixed plan. NXTutors works from Sector 66, Gurugram, and
    teaches online across India; the national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page shows
    how we work in other cities.
  </p>
  <p>
    Maths teachers who live in Patna and want students near home can see open requests on the
    <a href="{{ url('/tuition-jobs/patna') }}">Patna tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
