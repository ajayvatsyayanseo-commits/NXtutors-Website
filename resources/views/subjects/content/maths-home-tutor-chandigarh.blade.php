{{--
  Long-form guide for the "maths home tutor Chandigarh" subject page (tricity:
  Chandigarh sectors, Manimajra, Mohali, Panchkula and Zirakpur). Authors in
  config: Ajay Vatsyayan (IB, IGCSE and ISC maths) and Abhinandan Tiwary
  (Class 10 CBSE and ICSE maths); role statements only, no anecdotes.
  Local facts come only from database/seo-content/areas/chandigarh-research.json
  (zone_facts and area "about" texts). Exam facts reuse the checked statements
  in database/seo-content/blog: cbse-class-10-maths-preparation (unit marks,
  section layout, Standard/Basic split, no calculators, pi = 22/7),
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC single 2027/2028 paper,
  seven units, project marking), -ib-math-aaai-slhl (AA/AI, hours, weights,
  exploration) and jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main
  2026 pattern). PSEB and BSEH are described in general terms only, pointing
  to their official sites. No school, society, mall or people's names, no
  distances or travel times, only the allowed fee sentence.

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

<article class="nx-guide chm-guide" aria-labelledby="chmGuideTitle">
  <h2 id="chmGuideTitle">Maths home tutor in Chandigarh, Mohali and Panchkula: one grid of sectors, several boards</h2>

  <p class="nx-guide__lede">
    The tricity looks simple on a map, because Chandigarh, Mohali and Panchkula all number their neighbourhoods as
    sectors. The maths is less uniform. Within a single lane you may find a CBSE Class 10 student, a child in an ISC
    Class 12 year, an IB Diploma candidate and, across the border in Punjab or Haryana, a family on the state board.
    NXTutors starts with the paper your child will sit and the sector you live in, then sends two or three maths
    tutors who suit both. You see each fee before you meet anyone, and the opening lesson with your chosen tutor is a
    free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#chm-who">Who writes this</a> ·
    <a href="#chm-state">Punjab and Haryana boards</a> ·
    <a href="#chm-ten">The Class 10 paper</a> ·
    <a href="#chm-cisce">ISC in 2027</a> ·
    <a href="#chm-ib">IB and IGCSE</a> ·
    <a href="#chm-jee">Class 12 and JEE</a> ·
    <a href="#chm-grid">Four zones</a> ·
    <a href="#chm-six">Six sectors</a> ·
    <a href="#chm-demo">Questions for the demo</a> ·
    <a href="#chm-fees">Fees</a> ·
    <a href="#chm-next">Next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="chm-who">Who writes this maths guide, and which papers does it cover?</h2>
  <p>
    Two NXTutors authors share this page. Ajay Vatsyayan writes the parts on IB, IGCSE and ISC mathematics.
    Abhinandan Tiwary writes the parts on Class 10 maths for CBSE and ICSE. The page covers these courses:
  </p>
  <ul>
    <li><strong>CBSE Class 10</strong>, Mathematics Standard (041) or Basic (241), and <strong>CBSE Class 12</strong> Mathematics.</li>
    <li><strong>ICSE Class 10</strong> and <strong>ISC Class 12</strong> Mathematics, both set by CISCE.</li>
    <li><strong>IB Diploma</strong> maths, in Analysis and Approaches or Applications and Interpretation, and <strong>Cambridge IGCSE</strong> Mathematics.</li>
    <li><strong>JEE Main</strong> maths for students who combine the board year with entrance preparation.</li>
  </ul>
  <p>
    For younger children, the <a href="{{ url('/maths-home-tutor') }}">national maths home tutor</a> page explains how
    we match from primary classes upward.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-state">What if your child studies under the Punjab or Haryana board?</h2>
  <p>
    The tricity spans three administrations. Chandigarh is a union territory, Mohali lies in Punjab, and Panchkula
    was planned by Haryana, so some families in Mohali follow the Punjab School Education Board (PSEB) and some in
    Panchkula follow the Board of School Education Haryana (BSEH). We keep our advice on these two boards general.
    Each publishes its own syllabus, books and exam notices, on pseb.ac.in and bseh.org.in respectively, and a tutor
    should plan from those pages and from the textbooks your child actually carries, not from a CBSE sample paper.
  </p>
  <p>
    When you ask for a tutor, write the board's name in full. A maths teacher who has taught a state-board class
    before will know how that board's books sequence chapters, and that saves the first weeks of the term.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-ten">How is the CBSE Class 10 maths paper laid out for 2026-27?</h2>
  <p>
    The board paper is out of 80 and lasts three hours; the school adds 20 internal marks. The design is unchanged
    from last session, and Standard and Basic share the same five sections:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 maths paper, 2026-27: the five sections, their marks, and how a tutor can rehearse each</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Questions and marks</th><th scope="col">How to rehearse it at home</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>20 items of one mark: 18 multiple-choice, 2 assertion–reason</td><td>A quick-fire set at the start of every lesson, answered without rough work where possible</td></tr>
      <tr><td>B</td><td>5 questions of two marks</td><td>Short answers with the key step written, not skipped</td></tr>
      <tr><td>C</td><td>6 questions of three marks</td><td>Proofs and constructions of reasoning, one line per step</td></tr>
      <tr><td>D</td><td>4 questions of five marks</td><td>Long algebra or mensuration problems finished under a clock</td></tr>
      <tr><td>E</td><td>3 case studies of four marks</td><td>Reading the situation aloud before choosing a method</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Across 14 NCERT chapters, algebra is worth 20 marks, geometry 15, trigonometry 12, statistics with probability
    11, mensuration 10, and real numbers and coordinate geometry 6 apiece. No calculator is permitted, and π is 22/7
    unless the question states another value. The two levels differ in the kind of thinking they reward: roughly 54%
    of Standard tests remembering and understanding, compared with about 75% of Basic. Children who might choose maths
    in Class 11 are usually better placed on Standard, so settle this with the school before registration.
  </p>
  <p>
    Since 2026, every Class 10 student sits a main exam, and a second, optional sitting allows improvement in up to
    three subjects, maths among them. Dates for 2027 have not been announced; watch cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> takes the
    chapters in turn and the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year plan</a>
    lays out the months. ICSE Class 10 is a single three-hour paper of 80 with 20 internal marks; see the
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-cisce">What changes in ISC Class 12 maths from 2027?</h2>
  <p>
    ISC Mathematics (860) used to offer a choice between Section B and Section C. For the 2027 and 2028
    examinations, CISCE sets one 80-mark paper across seven units with no such option, which means vectors,
    three-dimensional geometry, linear programming and probability are now compulsory for everyone. Calculus accounts
    for 35 of the 80. Project work brings the other 20: two projects of 10 marks each, scored as format 1, content 4,
    findings 2 and viva 3. Revision books printed for the older layout will leave gaps, so ask any tutor which exam
    year they plan from. The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a>
    sets out a two-year plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-ib">IB Diploma and IGCSE maths: what must a tutor know?</h2>
  <p>
    The IB Diploma offers two courses. Analysis and Approaches is built on algebra, functions, calculus and proof,
    and one of its papers is taken without a calculator. Applications and Interpretation is built on modelling and
    statistics, with a graphic display calculator needed in every paper. Recommended teaching time is 150 hours at SL
    and 240 at HL.
  </p>
  <ul>
    <li><strong>SL:</strong> two papers of 40% each, plus the exploration at 20%.</li>
    <li><strong>HL:</strong> two papers of 30% each and a third of 20%, plus the exploration at 20%.</li>
    <li><strong>The exploration</strong> must be written by the student. A tutor may explain the criteria and question a draft, never compose it.</li>
  </ul>
  <p>
    Cambridge IGCSE maths is taken at Core, where the grade stops at C, or Extended, graded A* to G. Settle the tier
    early with the school. Read our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a>, and
    if you are thinking of changing boards, the
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">CBSE to IB or IGCSE switching guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-jee">Can one tutor handle Class 12 board maths and JEE Main?</h2>
  <p>
    Yes, provided the week is planned in writing. The CBSE Class 12 paper has 38 compulsory questions worth 80, of
    which calculus takes 35, so from April calculus should get the biggest block of time. In the 2026 JEE Main, Paper 1
    had 75 questions for 300 marks; maths supplied 25, twenty multiple-choice and five numerical-answer, with four
    marks for a right answer and one deducted for a wrong one. Confirm the next pattern on jeemain.nta.nic.in.
  </p>
  <p>
    A workable rhythm for a coaching student: solve the week's stuck coaching problems first, then end with one
    board-style long answer written in full. The
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">topic-wise JEE maths guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-grid">How do the tricity's four zones shape a weekly maths slot?</h2>
  <p>
    We group the tricity into four zones. There is no metro running yet, so tutors travel by car, scooter, city bus
    or auto, and the evening rush on the main roads is what decides whether a class starts on time. Browse tutors
    by sector on our <a href="{{ url('/city/chandigarh') }}">Chandigarh page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The tricity's four tutoring zones: how each was built, the roads that matter and what a maths tutor meets at the door</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">How it was built</th><th scope="col">Roads to plan around</th><th scope="col">At the door</th></tr>
    </thead>
    <tbody>
      <tr><td>Chandigarh Sectors 1–30</td><td>First phase: low-rise plotted sectors, with Sector 17 as the city centre</td><td>Madhya Marg, Jan Marg, Dakshin Marg</td><td>Mostly a bell at the house gate</td></tr>
      <tr><td>Chandigarh Sectors 31–56 &amp; Manimajra</td><td>Second phase at higher density; housing-board flats and cooperative societies; Manimajra became Sector 13 in 2020</td><td>Dakshin Marg, Housing Board Chowk</td><td>Flats without staffed gates, some guarded societies</td></tr>
      <tr><td>Mohali</td><td>An extension of the sector grid, with early sectors called Phases</td><td>Roads across the Chandigarh border, Airport Road</td><td>Houses in the phases, gated complexes in newer sectors</td></tr>
      <tr><td>Panchkula &amp; Zirakpur</td><td>Panchkula planned by Haryana in the 1970s; Zirakpur grew along the highway</td><td>Madhya Marg, the Zirakpur–Panchkula highway</td><td>Gated societies in many sectors, houses in others</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-six">What does a maths visit look like in six tricity sectors?</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Two Chandigarh sectors on either side of the centre</h3>
      <p>
        {!! $cgA('sector-15', 'Sector 15') !!} sits beside the large university campus in Sector 14, so postgraduate
        students and researchers who tutor often live within walking or cycling range. Homes are houses and builder
        floors, reached at the door. {!! $cgA('sector-21', 'Sector 21') !!}, south of the centre, is split into blocks
        A to D; many homes are builder floors, so give the block, house number and floor in advance. Dakshin Marg runs
        along its edge and is busy at office hours.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>A society sector and a Mohali phase</h3>
      <p>
        {!! $cgA('sector-49', 'Sector 49') !!} is largely cooperative society flats of two to four bedrooms. Add the
        tutor to the visitor list at the gate once and later visits run smoothly; with so many families nearby,
        tutors who already teach in the sector are common. {!! $cgA('mohali-phase-7', 'Mohali Phase 7') !!}, officially
        Sector 61, borders Chandigarh's Sector 52 and sits on Sarovar Path, so teachers from the southern sectors reach
        it easily. The Phase 7 market is crowded in the evening; agree parking beforehand.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Two Panchkula addresses</h3>
      <p>
        In {!! $cgA('panchkula-sector-20', 'Panchkula Sector 20') !!} nearly every family lives in a group housing
        society, so register the tutor at the gate on day one; the highway to Zirakpur fills up at office hours.
        {!! $cgA('mansa-devi-complex-panchkula', 'Mansa Devi Complex') !!}, in the north of Panchkula, mixes plots with
        flats. The temple that gives it its name draws very large crowds during Navratra, so in those weeks move the
        class earlier or online.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-demo">What should you ask a maths tutor during the free demo?</h2>
  <p>
    Ask the tutor to teach the chapter your child is on this week, then put four questions:
  </p>
  <ol>
    <li><strong>Which paper will you practise from first?</strong> The answer should name a current sample or specimen paper for your child's board and year.</li>
    <li><strong>What did you notice about my child's working?</strong> A good tutor will already have spotted a habit, such as skipped steps or careless signs.</li>
    <li><strong>How will you track mistakes?</strong> Look for a mistake log, with each wrong question re-attempted a week later.</li>
    <li><strong>When will my child sit a timed section?</strong> Within the first month is reasonable.</li>
  </ol>
  <p>
    If the answers feel vague, tell us. We set up a demo with the next tutor on the shortlist, and a change of tutor
    later is free as well. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a>
    article helps if a specialist is better reached online, which suits IB HL or ISC students when no one nearby
    teaches the course.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-fees">How much does a maths home tutor in Chandigarh charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    rates, which depend on the board and class, the tutor's experience with that paper, whether the trip crosses from
    one town of the tricity into another, and how many lessons a week you book. Every shortlisted fee is on screen
    before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-next">What do we need from you to start?</h2>
  <p>
    Send the class, the board and exact course, your sector or phase with the house or flat details, the evenings you
    can offer and a budget. We return two or three matched maths tutors with their fees, and you pick one for the
    free demo. If nobody suitable can reach your sector at that hour, we suggest online lessons or a mix of home and
    online. NXTutors works from Sector 66, Gurugram, and teaches online across India.
  </p>
  <p>
    Maths teachers who live in the tricity can see open requests on the
    <a href="{{ url('/tuition-jobs/chandigarh') }}">Chandigarh tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
