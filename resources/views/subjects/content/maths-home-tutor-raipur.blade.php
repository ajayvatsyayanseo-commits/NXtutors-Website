{{--
  Long-form guide for the "maths home tutor Raipur" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/raipur-research.json (zone_facts and area "about"
  texts, each with sources). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-10-maths-preparation (unit marks,
  section layout, Standard/Basic skill split, no calculators, pi = 22/7),
  cbse-class-10-board-year-plan-gurgaon (80 + 20, two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC single 2027/2028 paper,
  seven units, project marking), -ib-math-aaai-slhl (AA/AI, teaching hours,
  paper weights, exploration) and jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026 pattern).
  State board: Chhattisgarh Board of Secondary Education (Chhattisgarh
  Madhyamik Shiksha Mandal), office in Raipur, conducts the High School
  (Class 10) and Higher Secondary (Class 12) examinations -- per
  https://cgbse.nic.in/ (fetched 3 Oct 2026). No CGBSE exam pattern is stated.
  No school, college, coaching institute, society or people's names, no
  distances or travel times, only the allowed fee sentence.

  Area links render only when that Raipur area page exists and is active.
--}}
@php
  $rpmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $rpmA = function (string $slug, string $label) use ($rpmSlugs) {
      return in_array($slug, $rpmSlugs, true)
          ? '<a href="' . e(url('/city/raipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide rpm-guide" aria-labelledby="rpmGuideTitle">
  <h2 id="rpmGuideTitle">Maths home tutor in Raipur: name the board, name the colony, then meet the tutor</h2>

  <p class="nx-guide__lede">
    In one Raipur lane you can find a child writing the Chhattisgarh board's High School paper, a neighbour on CBSE
    Standard maths and a cousin preparing for ISC or IGCSE. Each of those papers is marked by a different examiner
    with different habits, so a maths teacher who suits one family can be a poor fit next door. Distance matters too:
    a tutor based in Samta Colony reaches the station side easily, while a family off VIP Road or out towards Saddu is
    better served by someone living on that side. Give NXTutors those two facts and we shortlist two or three maths
    teachers who match on paper and on the map. You see what each one charges up front, and the opening lesson costs
    nothing.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#rpm-courses">Which course</a> ·
    <a href="#rpm-cgbse">Chhattisgarh board</a> ·
    <a href="#rpm-ten">CBSE Class 10</a> ·
    <a href="#rpm-twelve">Class 12 and JEE</a> ·
    <a href="#rpm-other">ICSE, ISC, IB, IGCSE</a> ·
    <a href="#rpm-hour">Inside one session</a> ·
    <a href="#rpm-colonies">Six colonies</a> ·
    <a href="#rpm-demo">At the demo</a> ·
    <a href="#rpm-online">Online sessions</a> ·
    <a href="#rpm-fees">Fees</a> ·
    <a href="#rpm-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="rpm-courses">Which maths course is your child actually being examined on?</h2>
  <p>
    Two people stand behind the exam notes here: Ajay Vatsyayan writes on IB, IGCSE and ISC maths, while
    Abhinandan Tiwary handles the CBSE and ICSE Class 10 material. Whatever the class, we begin by asking a Raipur
    parent who sets the last paper of the year. The answer fixes the textbook, the way working is laid out and the type of
    practice that earns marks.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses Raipur students follow, who examines each, and what a tutor should be able to show you</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Set by</th><th scope="col">Year-end assessment</th><th scope="col">Proof of fit to look for</th></tr>
    </thead>
    <tbody>
      <tr><td>High School (Class 10) and Higher Secondary (Class 12)</td><td>Chhattisgarh Board of Secondary Education (CGBSE)</td><td>Fixed by CGBSE itself; cgbse.nic.in carries the current version</td><td>Lessons built on the textbook your child's school has issued, in the language your child answers in</td></tr>
      <tr><td>CBSE Class 10, Standard or Basic</td><td>CBSE</td><td>Board paper out of 80, school adds 20</td><td>A clear reason for recommending one level over the other</td></tr>
      <tr><td>CBSE Class 12</td><td>CBSE</td><td>38 questions, all compulsory, for 80; internal 20</td><td>A month-by-month plan for calculus</td></tr>
      <tr><td>ICSE Class 10; ISC Class 12</td><td>CISCE</td><td>Written paper out of 80; internal or project work 20</td><td>Familiarity with the syllabus for your child's exam year</td></tr>
      <tr><td>IB Diploma; Cambridge IGCSE</td><td>IB; Cambridge</td><td>Timed IB papers with an exploration; IGCSE entered at Core or Extended</td><td>Recent students on that very course or tier</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpm-cgbse">Maths on the Chhattisgarh board: what can a family settle in advance?</h2>
  <p>
    The Chhattisgarh Board of Secondary Education, known in Hindi as Chhattisgarh Madhyamik Shiksha Mandal, has its
    office in Raipur and conducts the state's High School examination at Class 10 and the Higher Secondary examination
    at Class 12. The board decides its own syllabus and marking, and those can change between sessions, so we do not
    describe a CGBSE maths paper on this page. The board's website, cgbse.nic.in, is where a tutor and a parent should
    confirm the current rules together.
  </p>
  <p>
    What you can decide without knowing the paper is whether a tutor suits a CGBSE student:
  </p>
  <ul>
    <li><strong>Medium.</strong> A child who answers in Hindi needs explanations and corrections in Hindi, using the very terms printed in the textbook.</li>
    <li><strong>Material.</strong> Practice should come from the school's prescribed book and from any question papers the board itself puts out, rather than a guide written for another board.</li>
    <li><strong>Layout.</strong> Line-by-line working, with each step visible, is easier to mark and easier to correct, on any board.</li>
    <li><strong>The year after.</strong> A Class 10 student who may take maths in Class 11, or attempt JEE later, needs algebra and geometry properly secure, not only enough to pass.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpm-ten">CBSE Class 10 maths in 2026-27: how the 80 board marks are built</h2>
  <p>
    The 2026-27 CBSE curriculum keeps last session's paper design. Fourteen NCERT chapters are grouped into seven
    units, and their weights show where tuition hours should be spent:
  </p>
  <ul>
    <li><strong>Algebra, 20 marks.</strong> Polynomials, linear equations in two variables, quadratics and arithmetic progressions. Watch for equations set up wrongly from a word problem.</li>
    <li><strong>Geometry, 15 marks.</strong> Triangles and circles. A proof loses marks when a statement has no reason beside it.</li>
    <li><strong>Trigonometry, 12 marks.</strong> Including heights and distances, where the figure must come before any ratio.</li>
    <li><strong>Statistics and probability, 11 marks.</strong> Grouped data tables are where small arithmetic slips hide.</li>
    <li><strong>Mensuration, 10 marks.</strong> Combined solids, with units carried to the last line.</li>
    <li><strong>Real numbers and coordinate geometry, 6 marks each.</strong> Short questions that should never be rushed.</li>
  </ul>
  <p>
    The question paper runs in five sections. Section A has twenty one-mark items, eighteen multiple-choice and two
    assertion–reason. Section B has five two-mark questions, C has six worth three, D has four worth five, and E closes
    with three case studies at four marks each. No calculator goes into the hall; use 22/7 for π
    whenever the question is silent on it. Standard and Basic share a chapter list but not a level of demand. Recall
    and understanding make up a little over half of Standard (around 54%) yet roughly three-quarters of Basic (around
    75%). A child who might want maths after Class 10 should sit Standard; ask the school when the choice closes.
  </p>
  <p>
    From 2026, every Class 10 student writes one compulsory main exam and may then take an optional second exam to
    raise the score in up to three subjects, which can include maths. Dates for 2027 have not been announced; follow
    cbse.gov.in. Our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a>
    goes chapter by chapter, the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year
    plan</a> sets out the months, and our page on a <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a>
    describes matching for the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpm-twelve">Class 12 maths and JEE: one tutor, two different scoreboards</h2>
  <p>
    A Raipur student in Class 12 who is also preparing for engineering entrance faces two papers that reward opposite
    habits. The CBSE board paper asks 38 compulsory questions for 80 marks and gives calculus 35 of them, so calculus
    should own the largest block of the timetable from the start of the session. In JEE Main 2026, Paper 1 carried 300 marks over 75
    questions. Of the 25 maths questions, twenty multiple-choice and five needing a numerical answer, with four marks for a
    correct response and one taken away for a wrong one. The next pattern will be published on jeemain.nta.nic.in.
  </p>
  <p>
    If your child already attends a coaching batch, the home tutor should not deliver the same lecture again. A more
    useful week has one session spent on problems left unfinished from the batch and another on a full-length board
    answer, written out completely and marked. Useful reading: our
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">guide to Class 12 calculus and algebra</a>, a
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths plan by topic</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpm-other">ICSE, ISC, IB and IGCSE maths in brief</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Four less common maths courses in Raipur: how each is assessed and where to read further</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">How it is assessed</th><th scope="col">Read further</th></tr>
    </thead>
    <tbody>
      <tr><td>ICSE Class 10</td><td>One written exam out of 80; the school's internal assessment supplies the remaining 20</td><td><a href="{{ url('/blog/icse-class-10-maths-boards') }}">How ICSE Class 10 maths is marked</a></td></tr>
      <tr><td>ISC Class 12</td><td>In the 2027 and 2028 exams CISCE drops the old Section B or C choice: a single paper out of 80 spans seven units, so every candidate meets vectors, 3D geometry, linear programming and probability. Calculus alone is worth 35. Two projects bring 20 more; each is scored out of 10 with 1 for format, 4 for content, 2 for findings and 3 for the viva</td><td><a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">Our ICSE and ISC maths explainer</a></td></tr>
      <tr><td>IB Diploma</td><td>Two routes. AA is built round proof, functions, algebra and calculus, and one paper bans calculators. AI is built round statistics and modelling, and a graphic display calculator is used in every paper. Recommended teaching time: 150 hours at SL, 240 at HL. Exam weights: SL 40% + 40%; HL 30% + 30% + 20%. At both levels an exploration, written by the student alone, supplies the last 20%</td><td><a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI</a></td></tr>
      <tr><td>Cambridge IGCSE</td><td>The Core tier tops out at grade C, while Extended runs from A* down to G. Settle the entry tier with the school early</td><td><a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">Moving from CBSE to IB or IGCSE</a></td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Fewer tutors teach these four courses than teach CBSE or the state syllabus, so mention the course straight
    away. If no specialist lives within reach, an online specialist can cover the course while a local tutor
    checks written practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpm-hour">What should one maths session in your home contain?</h2>
  <p>
    Parents often ask what they are paying for in an hour of home maths. A well-run session has a recognisable shape,
    whichever board your child follows:
  </p>
  <ol>
    <li><strong>A short warm-up from last week.</strong> Two or three questions from the previous topic, done without help, show whether anything has stuck.</li>
    <li><strong>The school notebook.</strong> The tutor reads what was set in class this week and picks out the exercise that went wrong.</li>
    <li><strong>New or repaired teaching.</strong> One idea taught properly, with the child doing most of the writing.</li>
    <li><strong>Exam-format practice.</strong> At least one question laid out the way the board's examiner expects, marked on the spot.</li>
    <li><strong>Homework with a purpose.</strong> A small, specific set that the tutor will actually check next time.</li>
  </ol>
  <p>
    If sessions regularly skip the last two steps, the child may enjoy the lesson and still lose marks in the exam.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpm-colonies">Six Raipur colonies and the practical detail each needs for home maths</h2>
  <p>
    Most Raipur tutors ride a two-wheeler or take an auto; some come by car. BRTS buses link the railway station with
    Nava Raipur, and the Atal Path expressway starts at Fafadih, but for regular evening classes a tutor who lives on
    your side of the city is usually the steadiest choice. Browse by locality on our <a href="{{ url('/city/raipur') }}">Raipur page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Around the station and the old centre</h3>
      <p>
        {!! $rpmA('samta-colony', 'Samta Colony') !!} sits close to the main market and to Raipur Junction, with
        Choubey Colony, Amanaka and Amapara on its edges, which puts it within reach of tutors from most directions.
        Independent houses mean the tutor comes to the door; for a flat, pass on the building name and floor.
        {!! $rpmA('devendra-nagar', 'Devendra Nagar') !!}, between Pandri and Fafadih, is laid out in numbered sectors
        and dominated by houses and builder floors, so the sector, house number and a landmark are all a tutor needs.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Where the expressway begins</h3>
      <p>
        {!! $rpmA('fafadih', 'Fafadih') !!} is the city end of the expressway to Nava Raipur, and flats, plots and
        offices share its main roads. Give the building name with a clear landmark and ask whether visitors sign a
        register. Evening traffic gathers around the chowk and the station roads, so a slot with some margin, or a
        tutor who lives close by, keeps the class on time.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>East and north-east</h3>
      <p>
        {!! $rpmA('shankar-nagar', 'Shankar Nagar') !!} mixes apartment buildings, builder floors, villas and houses;
        apartment gates usually register visitors, so let the guard know the tutor's name and your flat before the demo.
        {!! $rpmA('telibandha', 'Telibandha') !!} takes its name from the lake now popularly called Marine Drive, whose
        promenade fills up in the evenings and at weekends, so homes near it need a little slack in the timing.
        {!! $rpmA('saddu', 'Saddu') !!}, near Vidhan Sabha Road, is still filling in with houses built on plots; send a
        map pin, and look for a tutor from Mowa or Daldal Seoni for weekday classes.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpm-demo">How do you judge a maths tutor in one free demo?</h2>
  <p>
    Request a lesson on whatever chapter school has reached, rather than a polished set piece, and watch for four
    signs:
  </p>
  <ul>
    <li><strong>Does the tutor ask before telling?</strong> A few questions at the start should reveal what your child already knows.</li>
    <li><strong>Are errors diagnosed?</strong> Arithmetic, misreading and a weak concept are different problems with different fixes.</li>
    <li><strong>Does the working match the board?</strong> Steps should look the way your child's examiner wants to see them.</li>
    <li><strong>Is there a plan?</strong> You should leave knowing the topics for the coming sessions and the homework set.</li>
  </ul>
  <p>
    Not convinced? Let us know and the next tutor on the shortlist gives a demo instead. A switch further down
    the line costs nothing either. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for
    parents</a> has more questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpm-online">When does online maths make more sense in Raipur?</h2>
  <p>
    Sitting beside a child lets a tutor stop a mistake while the pen is still moving, which is why home classes suit
    younger students and anyone learning to write proofs. Screens win when the ISC, IB or IGCSE specialist you need lives
    on the far side of Raipur, when a coaching day runs late, or when a family has moved out towards Nava Raipur
    and a regular visit is hard to arrange. Many families settle on one home class and one online class each week. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article compares the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpm-fees">What does a maths home tutor in Raipur cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Rates are set
    by tutors themselves. Expect them to rise with the class and course, with years spent teaching that syllabus and
    with a harder evening journey to your colony, and to vary with the number of weekly sessions. The
    <a href="{{ url('/blog/home-tuition-fees-raipur') }}">Raipur home tuition fees</a> article goes further, and every
    fee on your shortlist is shown before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpm-start">What to put in your first message</h2>
  <p>
    A good request names the class, spells
    out the syllabus (CGBSE, CBSE Standard, CBSE Basic, ICSE, ISC, IB or IGCSE), gives the colony plus a landmark, lists
    the free days and hours, and states a budget. Our reply carries two or three maths tutors with fees attached; you
    choose whom to meet for the free demo. Where no good match can travel to your corner of Raipur at that time, we
    propose online lessons or a blend. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> first. Our office is in Sector 66, Gurugram, and online
    lessons run nationwide; the national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page shows how we work elsewhere, and the
    <a href="{{ url('/blog/raipur-home-tuition-guide') }}">Raipur home tuition guide</a> walks through every part of
    the city. For the sciences, see our <a href="{{ url('/science-home-tutor-raipur') }}">science</a> and
    <a href="{{ url('/physics-home-tutor-raipur') }}">physics</a> tutor pages for Raipur.
  </p>
  <p>
    Live in Raipur and teach maths? Requests from families in the city appear on the
    <a href="{{ url('/tuition-jobs/raipur') }}">Raipur tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
