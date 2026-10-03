{{--
  Long-form guide for the "maths home tutor Srinagar" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/srinagar-research.json (zone_facts and area
  "about" texts, each with sources). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-10-maths-preparation (unit marks,
  section layout, Standard/Basic skill split, no calculators, pi = 22/7),
  cbse-class-10-board-year-plan-gurgaon (80 + 20, two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC single 2027/2028 paper,
  seven units, project marking), -ib-math-aaai-slhl (AA/AI, teaching hours,
  paper weights, exploration) and jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026 pattern).
  Jammu and Kashmir Board of School Education: name, Secondary School
  Examination (Class 10) and Higher Secondary examinations (Classes 11 and 12),
  syllabus page and JKBOSE textbooks for Classes 1 to 10, results by Jammu and
  Kashmir divisions, all from https://jkbose.jk.gov.in/ (fetched 3 Oct 2026).
  No JKBOSE exam pattern is given. Strictly practical and educational: winter
  appears only as timing advice. No school, college, coaching institute,
  hospital, society or people's names, no distances or travel times, only the
  allowed fee sentence.

  Area links render only when that Srinagar area page exists and is active.
--}}
@php
  $sgmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $sgmA = function (string $slug, string $label) use ($sgmSlugs) {
      return in_array($slug, $sgmSlugs, true)
          ? '<a href="' . e(url('/city/srinagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide sgm-guide" aria-labelledby="sgmGuideTitle">
  <h2 id="sgmGuideTitle">Maths home tutor in Srinagar: one examiner to prepare for, one route to your door, and a plan that survives the winter break</h2>

  <p class="nx-guide__lede">
    A Class 10 student in Rajbagh and another in Bemina may sit side by side in a coaching room yet answer to quite
    different maths examiners. One writes the JKBOSE Secondary School Examination; another sits the CBSE board; a few
    follow ICSE, ISC, the IB or Cambridge IGCSE. Each body rewards a slightly different way of setting out a solution,
    so the tutor has to fit the paper before anything else. Then comes the practical side: Srinagar spreads from the
    Civil Lines along the Jhelum out to the bypass colonies in the south-west, and the long winter break changes the
    rhythm of every family's week. Tell NXTutors the syllabus, the class and your locality, and we suggest two or three
    maths tutors who suit all three. Their fees are shown before you meet them, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#sgm-paper">Whose paper</a> ·
    <a href="#sgm-jk">JKBOSE maths</a> ·
    <a href="#sgm-c10">CBSE Class 10</a> ·
    <a href="#sgm-c12">Class 12 and JEE</a> ·
    <a href="#sgm-other">ICSE, ISC, IB, IGCSE</a> ·
    <a href="#sgm-winter">Term and winter</a> ·
    <a href="#sgm-areas">Six localities</a> ·
    <a href="#sgm-demo">The demo</a> ·
    <a href="#sgm-fees">Fees</a> ·
    <a href="#sgm-next">Next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="sgm-paper">Start with the paper: which body will mark your child's maths?</h2>
  <p>
    Two named authors stand behind the exam advice on this page. Ajay Vatsyayan writes on IB, IGCSE and ISC
    mathematics, and Abhinandan Tiwary writes on Class 10 maths for CBSE and ICSE. Before suggesting any tutor we ask
    a single question, because the answer decides the textbook, the depth of each chapter and the kind of written
    working an examiner expects.
  </p>
  <dl>
    <dt><strong>JKBOSE, Classes 9 to 12</strong></dt>
    <dd>The Jammu and Kashmir Board of School Education runs the Secondary School Examination at Class 10 and the Higher Secondary examinations in Classes 11 and 12. Ask the tutor: will you teach from the book my child's school has issued?</dd>
    <dt><strong>CBSE Class 10</strong></dt>
    <dd>An 80-mark board paper with 20 marks awarded by the school, at Standard or Basic level. Ask: which level fits my child, and what does that choice close off?</dd>
    <dt><strong>CBSE Class 12</strong></dt>
    <dd>Thirty-eight questions, all compulsory, for 80 marks, plus 20 internal. Ask: when in the year will calculus be finished?</dd>
    <dt><strong>ICSE and ISC</strong></dt>
    <dd>Set by CISCE, with an 80-mark written paper and 20 marks of internal or project work. Ask: which exam year's syllabus are you working from?</dd>
    <dt><strong>IB Diploma and Cambridge IGCSE</strong></dt>
    <dd>Timed papers plus an exploration for the IB; a Core or Extended tier for IGCSE. Ask: which course or tier have you taught most recently?</dd>
  </dl>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgm-jk">What does a JKBOSE student need from a maths tutor?</h2>
  <p>
    JKBOSE publishes its own syllabus and prints textbooks for Classes 1 to 10, and its official website,
    jkbose.jk.gov.in, lists the syllabus, the textbook price list and results for the Kashmir and Jammu divisions.
    The board can revise its scheme, so this page gives no JKBOSE paper pattern; check the current scheme on that site
    before a tutor plans the year. What a family can judge is the fit, and four things decide it:
  </p>
  <ul>
    <li><strong>The book in the school bag.</strong> Exercises should come first from the textbook your child's school uses, then from model or past papers the board itself puts out.</li>
    <li><strong>The language of explanation.</strong> Answers are written in the medium your child is taught in; the tutor should explain in whatever language makes a step clear, then insist the written answer follows the textbook's terms.</li>
    <li><strong>Every step on paper.</strong> Whatever the board, a solution set out line by line can be checked by a teacher and earns method marks; a correct number reached in the head earns far less.</li>
    <li><strong>The road after Class 10.</strong> A student who may choose science in Class 11, or attempt JEE later, needs algebra and geometry made secure now, not just enough to pass the secondary exam.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgm-c10">CBSE Class 10 maths: how are the 80 board marks spread this session?</h2>
  <p>
    In 2026-27 CBSE divides the board's 80 marks across seven units built from 14 NCERT chapters, and the design of
    the question paper is the same as the previous session. Laid out unit by unit, with what a tutor should check
    first:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 maths, 2026-27: board marks per unit and the habit a Srinagar tutor should test in the first fortnight</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Board marks</th><th scope="col">Habit to test early</th></tr>
    </thead>
    <tbody>
      <tr><td>Algebra (polynomials, linear pairs, quadratics, AP)</td><td>20</td><td>Can your child turn a word problem into the right equation without help?</td></tr>
      <tr><td>Geometry (triangles, circles)</td><td>15</td><td>Does every line of a proof carry its reason?</td></tr>
      <tr><td>Trigonometry, with heights and distances</td><td>12</td><td>Is the figure drawn and labelled before any ratio is picked?</td></tr>
      <tr><td>Statistics and probability</td><td>11</td><td>Are the columns of a grouped table added without slips?</td></tr>
      <tr><td>Mensuration</td><td>10</td><td>Do units survive when two solids are joined?</td></tr>
      <tr><td>Real numbers</td><td>6</td><td>Are short questions answered fully rather than rushed?</td></tr>
      <tr><td>Coordinate geometry</td><td>6</td><td>Is the formula written before numbers go in?</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Five sections make up the paper. Section A holds 20 one-mark items, 18 of them multiple choice and 2 of the
    assertion and reason kind; Section B has five two-mark questions; Section C six worth three; Section D four worth
    five; and Section E three case-study questions of four marks. Calculators stay outside the hall, and π is taken as
    22/7 unless a question states otherwise. Standard and Basic cover the same chapters with different demand: about
    54% of Standard's marks test remembering and understanding, compared with about 75% at Basic. If maths in Class 11
    is even a possibility, Standard keeps the door open; ask the school when the choice is locked.
  </p>
  <p>
    From 2026 a Class 10 student sits one compulsory main exam and may take an optional second exam to improve the
    score in up to three subjects, maths included. The 2027 dates have not been announced; cbse.gov.in will carry them.
    For chapter-by-chapter help, read our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> and the
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a>, and see how we match on the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgm-c12">Class 12 maths and JEE: what should a home tutor add to coaching?</h2>
  <p>
    Hyderpora, on the south-western side of the city, is known locally for its many coaching centres, and plenty of
    senior students across Srinagar already attend one. A home tutor who re-teaches the coaching lecture wastes the
    hour. The better use of the session is narrower: work through the problems from the coaching sheet that stayed
    unsolved, and keep the school board paper moving so it is not crowded out by entrance practice.
  </p>
  <p>
    The two papers ask for different strengths. CBSE's Class 12 maths paper has 38 compulsory questions for 80 marks,
    with calculus alone carrying 35, so calculus deserves steady time from the opening weeks. In JEE Main 2026, Paper 1
    set 75 questions for 300 marks; maths had 25 of them, 20 multiple choice and 5 with a numerical answer, scoring +4
    for a correct response and −1 for a wrong one. NTA confirms each year's pattern on jeemain.nta.nic.in. A JKBOSE
    higher secondary student with JEE in view needs the same split of attention: board answers written in full, and a
    separate block of timed objective work. Our
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgm-other">ICSE, ISC, IB and IGCSE: what changes for the tutor?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Four other maths courses Srinagar families ask about, how each is assessed, and where to read more</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">How it is assessed</th><th scope="col">Tutor's focus</th></tr>
    </thead>
    <tbody>
      <tr><td>ICSE Class 10</td><td>A written paper out of 80 plus 20 internal marks</td><td>Neat, complete working; see the <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a></td></tr>
      <tr><td>ISC Class 12, 2027 and 2028 exams</td><td>One 80-mark paper over seven compulsory units, the old Section B or C choice removed; calculus 35; two projects worth 20, each out of 10 (format 1, content 4, findings 2, viva 3)</td><td>Vectors, 3D geometry, linear programming and probability for every student; see the <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a></td></tr>
      <tr><td>IB Diploma</td><td>Analysis and Approaches or Applications and Interpretation; 150 teaching hours at SL, 240 at HL; SL two papers at 40% each, HL two at 30% and a third at 20%; the exploration is the last 20%</td><td>Exam technique, while the exploration stays the student's own work; see the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a></td></tr>
      <tr><td>Cambridge IGCSE</td><td>Core tier capped at grade C; Extended tier graded A* to G</td><td>Agree the tier with the school well before entries close</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Tutors for these four courses are fewer than for CBSE or JKBOSE, so name the course in your first message. If no
    specialist can reach your locality, an online specialist is a sound answer, and a local tutor can still mark
    written practice at home.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgm-winter">How should maths tuition run through the term and the winter break?</h2>
  <p>
    Srinagar families plan around a long winter break, and in December and January the days are short. That calls
    for a timetable that changes shape rather than one that simply stops. A pattern many families can adapt:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A maths tuition rhythm for a Srinagar school year, with the winter break used for consolidation</caption>
    <thead>
      <tr><th scope="col">Stretch of the year</th><th scope="col">Sessions</th><th scope="col">What the tutor does</th></tr>
    </thead>
    <tbody>
      <tr><td>School term</td><td>Two or three home visits a week, after school</td><td>Keeps pace with the class chapter and fixes errors from school tests</td></tr>
      <tr><td>Run-up to the winter break</td><td>Same visits, plus a list of weak topics agreed with the student</td><td>Builds the revision list from marked tests, not from memory</td></tr>
      <tr><td>Winter break</td><td>Morning or early-afternoon visits, or some sessions moved online</td><td>Clears the weak-topic list and sets timed practice on finished chapters</td></tr>
      <tr><td>Return to school</td><td>Back to after-school visits</td><td>Checks the break's work held, then resumes the class chapter</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The same tutor can switch between home and online, so nobody has to start again with a stranger midway through the
    year. The <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article compares the
    two in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgm-areas">What should you tell a maths tutor about your locality?</h2>
  <p>
    Most tutors in Srinagar travel by car, two-wheeler or shared transport, so a clear address and a sensible hour do
    more for a steady routine than anything else. Six localities from three parts of the city show what to share. The
    <a href="{{ url('/city/srinagar') }}">Srinagar page</a> lists every locality we cover.
  </p>
  <dl>
    <dt><strong>Civil Lines, along the Jhelum</strong></dt>
    <dd>{!! $sgmA('rajbagh', 'Rajbagh') !!}: residents often give a part of the locality, such as Pathan Bagh, Kursoo Rajbagh, Rajbagh Extension or Aramwari, so name the part and a landmark. Main roads fill at school opening and closing times, which makes a later afternoon slot the reliable one.</dd>
    <dd>{!! $sgmA('jawahar-nagar', 'Jawahar Nagar') !!}: one of the city's two government-planned residential areas, with wide roads, parks and houses on equal plots. A tutor reaches the door directly and usually parks on the street; the Gogji Bagh ramp of the flyover helps tutors coming from the Rambagh side.</dd>
    <dt><strong>Karan Nagar and Bemina, west of the centre</strong></dt>
    <dd>{!! $sgmA('karan-nagar', 'Karan Nagar') !!}: the other planned residential area, near Lal Chowk. A large institutional campus shares the locality, so daytime traffic is heavier than in a purely residential colony; give the lane name and allow some margin.</dd>
    <dd>{!! $sgmA('bemina', 'Bemina') !!}: planned colonies on the bypass, mostly houses in planned lanes with room to park. Bemina sits on the four-lane bypass, which is busy at peak hours, so mid-afternoon or later evening suits.</dd>
    <dt><strong>Airport Road, the south-west</strong></dt>
    <dd>{!! $sgmA('hyderpora', 'Hyderpora') !!}: a suburb of independent houses and plots. A tutor living in Peerbagh, Rawalpora or Sanat Nagar can reach it quickly; one crossing the city should avoid the office and school rush on the bypass.</dd>
    <dd>{!! $sgmA('sanat-nagar', 'Sanat Nagar') !!}: family houses in colony lanes with shops on the main road. Being on the bypass makes it reachable from several directions, provided the slot sits outside peak hours.</dd>
  </dl>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgm-demo">How can you tell, in one free demo, whether the maths tutor fits?</h2>
  <p>
    Ask for the demo on the chapter your child is doing at school this week, not a topic the tutor prefers. Then watch
    for these signs:
  </p>
  <ol>
    <li><strong>Diagnosis first.</strong> The tutor asks a few questions or sets a short problem before teaching anything new.</li>
    <li><strong>Errors named precisely.</strong> A wrong answer is traced to its cause: a sign slip, a misread question, or a gap in the idea.</li>
    <li><strong>Working the examiner will accept.</strong> The steps are laid out the way your child's board marks them.</li>
    <li><strong>A clear next fortnight.</strong> You leave knowing what the next few sessions cover and what homework will be checked.</li>
  </ol>
  <p>
    If the match is wrong, tell us and we arrange a demo with another tutor from your shortlist; changing tutor later
    costs nothing either. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a>
    lists more to look for.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgm-fees">What does a maths home tutor in Srinagar charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee. The class and syllabus, how long the tutor has taught that syllabus, the journey to your locality at your hour,
    and the number of sessions a week all play a part. Every fee on your shortlist is visible before the demo, and the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explains how tutors set rates.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgm-next">What should you send us to get a maths shortlist?</h2>
  <p>
    Five details are enough: the class; the syllabus by its full name (JKBOSE, CBSE Standard or Basic, ICSE, ISC, IB or
    IGCSE); your locality and a landmark; the days and hours that work, including any change you expect over the winter
    break; and a budget. We reply with two or three matched maths tutors and their fees, and you choose one for the free
    demo. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile
    goes live. If no suitable tutor can reach your part of Srinagar at that hour, we suggest an online or mixed plan.
    NXTutors works from Sector 66, Gurugram, and teaches online across India; the national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page shows how we work elsewhere, and you can browse
    profiles on <a href="{{ url('/tutors') }}">our tutors page</a>.
  </p>
  <p>
    Maths teachers who live in Srinagar and would like students close to home can see open requests on the
    <a href="{{ url('/tuition-jobs/srinagar') }}">Srinagar tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
