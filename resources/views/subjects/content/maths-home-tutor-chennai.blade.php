{{--
  Long-form guide for the "maths home tutor Chennai" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/chennai-research.json (zone_facts and area "about"
  texts, each with sources). Metro Phase II lines are described only as under
  construction, with no opening dates. Exam facts reuse the checked statements
  in database/seo-content/blog: cbse-class-10-maths-preparation (unit marks,
  section layout, Standard/Basic skill split, no calculators, pi = 22/7),
  cbse-class-10-board-year-plan-gurgaon (80 + 20, two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC single 2027/2028 paper,
  seven units, project marking), -ib-math-aaai-slhl (AA/AI, teaching hours,
  paper weights, exploration) and jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026 pattern). The Tamil Nadu State Board is described generally
  only; no state exam pattern is given. No school, college, society, mall or
  people's names, no distances or travel times, only the allowed fee sentence.

  Area links render only when that Chennai area page exists and is active.
--}}
@php
  $chAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $chA = function (string $slug, string $label) use ($chAreaSlugs) {
      return in_array($slug, $chAreaSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide chm-guide" aria-labelledby="chmGuideTitle">
  <h2 id="chmGuideTitle">Maths home tutor in Chennai: start from the board your child writes, then from the line that serves your street</h2>

  <p class="nx-guide__lede">
    Chennai families rarely share one maths syllabus. A single apartment building in Velachery or Anna Nagar can hold
    a Tamil Nadu State Board child, a CBSE child and an ICSE child, and a tutor who is excellent for one may never
    have taught another. Travel matters as much: the MRTS, the suburban lines and two working metro lines serve some
    neighbourhoods well and leave others to the road. NXTutors weighs the syllabus and the locality together and
    replies with two or three maths tutors who fit both. You see each fee before meeting anyone, and the first class
    is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#chm-boards">Five boards</a> ·
    <a href="#chm-state">State Board families</a> ·
    <a href="#chm-ten">CBSE and ICSE Class 10</a> ·
    <a href="#chm-senior">ISC, IB and IGCSE</a> ·
    <a href="#chm-jee">Class 12 and JEE</a> ·
    <a href="#chm-map">Eight zones</a> ·
    <a href="#chm-streets">Six neighbourhoods</a> ·
    <a href="#chm-month">The first month</a> ·
    <a href="#chm-fees">Fees</a> ·
    <a href="#chm-request">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="chm-boards">Five boards, one city: which maths course is your child on?</h2>
  <p>
    On this page, Ajay Vatsyayan writes the guidance for IB, IGCSE and ISC maths, the courses he teaches, and
    Abhinandan Tiwary writes the guidance for CBSE and ICSE Class 10 maths, which he teaches. Before we look for a
    tutor we ask for the exact course, because the class number alone says little in Chennai.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses Chennai parents bring to NXTutors, and the one question worth putting to any new tutor</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Board</th><th scope="col">Final assessment in brief</th><th scope="col">Put this to the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>State Board maths, Class 10 and the higher secondary years</td><td>Tamil Nadu State Board</td><td>Set by the state; its official site carries the current scheme</td><td>Do you teach from the state textbooks and the board's own model papers?</td></tr>
      <tr><td>Class 10 Mathematics, Standard or Basic</td><td>CBSE</td><td>An 80-mark written paper, with the school adding 20</td><td>At what point in the year do full timed papers begin?</td></tr>
      <tr><td>ICSE Class 10 Mathematics</td><td>CISCE</td><td>80 marks in the exam hall and 20 from internal work</td><td>How do you train a child to set out every step?</td></tr>
      <tr><td>Class 12 Mathematics</td><td>CBSE</td><td>38 compulsory questions for 80 marks, plus 20 internal</td><td>How is calculus spread across the year?</td></tr>
      <tr><td>ISC Mathematics, Class 12</td><td>CISCE</td><td>An 80-mark theory paper with 20 more for projects</td><td>Do your notes follow the 2027 layout with no section choice?</td></tr>
      <tr><td>IB Diploma maths, AA or AI, at SL or HL</td><td>IB</td><td>External papers plus an internally assessed exploration</td><td>What will you do, and not do, for the exploration?</td></tr>
      <tr><td>Cambridge IGCSE Mathematics</td><td>Cambridge</td><td>Entered at Core or Extended tier</td><td>Which tier suits my child, and when should we decide?</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-state">What should a Tamil Nadu State Board family ask of a maths tutor?</h2>
  <p>
    The state board follows its own syllabus and textbooks, and Class 10 and Class 12 end in public examinations that
    the state conducts. We do not reproduce the state's question-paper design here; the board publishes it, and it can
    change between sessions. What we look for instead: a tutor who teaches from the book your child's school has
    issued, practises with the board's model and previous papers, and plans from the state book rather than NCERT.
  </p>
  <p>
    State Board students aiming at JEE need one more step: a tutor who compares the entrance syllabus with the state
    book at the start of Class 11 and schedules any gaps early, rather than finding them in a Class 12 mock test.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-ten">CBSE and ICSE Class 10 maths: what does the paper look like?</h2>
  <p>
    For 2026-27, CBSE builds its 80 theory marks from 14 NCERT chapters grouped in seven units. The paper design is
    the same as last session, so the latest sample paper is the right model.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 maths, 2026-27: the five sections of the paper and a habit for each</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Questions and marks</th><th scope="col">Habit to build at home</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>20 items of one mark: 18 multiple-choice, 2 assertion–reason</td><td>Read every option before marking one</td></tr>
      <tr><td>B</td><td>5 answers of two marks</td><td>Two clean lines of working, never just the result</td></tr>
      <tr><td>C</td><td>6 answers of three marks</td><td>State the formula or theorem before using it</td></tr>
      <tr><td>D</td><td>4 answers of five marks</td><td>A neat figure or table first, then the calculation</td></tr>
      <tr><td>E</td><td>3 case studies of four marks</td><td>Pull the numbers out of the passage before solving</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    By unit, algebra is worth 20, geometry 15, trigonometry 12, statistics and probability 11 and mensuration 10;
    real numbers and coordinate geometry take 6 each. No calculator is permitted, and π is 22/7 unless a question
    gives another value. Standard and Basic differ in the thinking they ask for: close to 54% of Standard marks
    reward remembering and understanding, compared with about 75% in Basic. If maths in Class 11 is possible, Standard
    is usually the wiser choice; agree it with the school before registration.
  </p>
  <p>
    Since 2026, every CBSE Class 10 student sits a compulsory main exam, and a later optional exam can improve up to
    three subjects, maths included; watch cbse.gov.in for 2027 dates. ICSE maths is also marked 80 in the exam and
    20 internally. Useful reading: our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">chapter-by-chapter CBSE Class 10 maths
    guide</a>, the <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-senior">ISC, IB and IGCSE maths: what has changed and what to settle early?</h2>
  <ul>
    <li><strong>ISC Class 12.</strong> From the 2027 examination, and again in 2028, CISCE sets seven units in a single 80-mark paper and removes the old choice between Sections B and C. Every candidate now meets vectors, three-dimensional geometry, linear programming and probability. Calculus is worth 35 marks. Two projects make up the other 20, each marked out of 10: 1 for format, 4 for content, 2 for findings and 3 for the viva. The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> sets out a plan across both years.</li>
    <li><strong>IB Diploma.</strong> Analysis and Approaches is heavier on algebra, calculus and proof and includes a paper without a calculator; Applications and Interpretation is heavier on modelling and statistics and uses a graphic display calculator throughout. The IB recommends 150 teaching hours at SL and 240 at HL. At SL two papers carry 40% each; at HL two carry 30% each and a third 20%. The exploration supplies the last 20% at both levels and must be the student's own work. Our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">guide to IB maths AA and AI</a> helps with the choice.</li>
    <li><strong>Cambridge IGCSE.</strong> Core tops out at grade C; Extended runs from A* to G. Settle the tier with the school well before entries close, and plan revision to match.</li>
  </ul>
  <p>
    Teachers for these courses are fewer, so name the course in your first message. Families thinking about a change
    of board can read our
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to moving from CBSE to IB or IGCSE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-jee">Class 12 board maths and JEE Main: can one tutor handle both?</h2>
  <p>
    Yes, when the week is planned on paper. The CBSE Class 12 paper has 38 compulsory questions for 80 marks, and
    calculus carries 35 of them, so it deserves the largest block of time from the start of the session; State Board
    and ISC students need the same focus.
  </p>
  <p>
    JEE (Main) 2026 Paper 1 had 75 questions for 300 marks, and 25 of them were maths: 20 multiple-choice in
    Section A and 5 numerical-value in Section B, with +4 for a correct answer and −1 for a wrong one. NTA held a
    January and an April session; check jeemain.nta.nic.in for 2027. A workable split: the first weekly session takes one board topic to a full written long answer; the
    second clears the week's unsolved coaching problems on the same topic under a timer. Read the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">topic-wise JEE maths plan</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page. Parents weighing a coaching
    institute against a home tutor can see our
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE coaching or home tutor</a>
    comparison.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-map">How do Chennai's eight zones shape the search for a maths tutor?</h2>
  <p>
    We group Chennai's localities into eight zones. For a weekly maths slot, two things decide most matches: which
    rail line a tutor can use to reach you, and whether the home is a house with a doorstep entry or a flat behind a
    gate register. All localities are listed on our <a href="{{ url('/city/chennai') }}">Chennai page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Chennai's eight tutoring zones grouped by side of the city, with working rail links and typical homes</caption>
    <thead>
      <tr><th scope="col">Side of the city</th><th scope="col">Zones</th><th scope="col">Working rail links</th><th scope="col">Typical homes</th></tr>
    </thead>
    <tbody>
      <tr><td>South and the coast</td><td>Adyar, Besant Nagar &amp; Mylapore; T Nagar, Nungambakkam &amp; Kodambakkam</td><td>MRTS, the suburban South Line, Metro Blue Line</td><td>Independent houses in named nagars, older lanes and small apartment buildings</td></tr>
      <tr><td>South and south-west</td><td>Velachery, Guindy &amp; Tambaram</td><td>MRTS, suburban line to Tambaram, Blue and Green Lines</td><td>Apartment complexes, plotted streets and suburban houses</td></tr>
      <tr><td>IT corridor</td><td>OMR &amp; ECR</td><td>MRTS at Perungudi; otherwise road only for now</td><td>Gated communities and villas, with bungalows along the ECR</td></tr>
      <tr><td>West and central</td><td>Anna Nagar, Kilpauk &amp; Aminjikarai; Vadapalani, KK Nagar &amp; Porur</td><td>Metro Green Line</td><td>Housing-board layouts, grid avenues and apartment buildings</td></tr>
      <tr><td>North-west and north</td><td>Mogappair, Ambattur &amp; Avadi; Perambur, Kolathur &amp; North Chennai</td><td>Suburban line towards Arakkonam, Blue Line in the far north</td><td>Colony houses, housing-board estates and older family homes</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Chennai Metro Phase II is under construction: Line 3 along the OMR, Line 4 through Porur and Vadapalani, and
    Line 5 through Kolathur and the southern suburbs to Sholinganallur. Until it opens, OMR and Porur tutors mostly
    come by road.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-streets">What does a weekly maths slot look like in six Chennai neighbourhoods?</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Two southern addresses</h3>
      <p>
        {!! $chA('adyar', 'Adyar') !!} is a set of named residential nagars on the southern bank of the Adyar River,
        where houses on leafy streets stand beside low-rise apartment blocks. The MRTS stops at Kasturba Nagar,
        Indira Nagar and Thiruvanmiyur, and tutors coming that way finish by auto. Evening traffic gathers at the
        Adyar signal, so an early or late slot is easier. {!! $chA('t-nagar', 'T Nagar') !!} was laid out in the
        1920s and is now a major shopping district, with homes in pockets away from the bazaar streets and Mambalam
        station on its western edge.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>A rail suburb and an OMR junction</h3>
      <p>
        {!! $chA('velachery', 'Velachery') !!} has been on the MRTS since 2007, and since March 2026 the line has run
        on to St Thomas Mount, where it meets the metro. Most families live in apartment complexes that register
        visitors. Book around the office rush at the Vijayanagar junction.
        {!! $chA('sholinganallur', 'Sholinganallur') !!} is where the road from Medavakkam meets the OMR. It has no
        rail line yet, though Lines 3 and 5 are both being built with stations here. Large gated communities want the
        tutor added as a regular visitor, and evening slots after the peak work better.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Two planned grids in the west</h3>
      <p>
        {!! $chA('anna-nagar', 'Anna Nagar') !!} was laid out by the Tamil Nadu Housing Board in the early 1970s as
        a grid of numbered avenues, with three underground Green Line stations: Anna Nagar East, Anna Nagar Tower and
        Thirumangalam.
        {!! $chA('kk-nagar', 'KK Nagar') !!} is a grid of rectangular sectors with a park near the centre of each,
        mostly flats and housing-board homes, with Ashok Nagar on the Green Line the nearest station. In both grids,
        numbered addresses mean tutors rarely lose time looking for a door.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-month">How can you judge the first month of maths tuition?</h2>
  <p>
    Marks take a term to move, but these signs appear within a few sessions:
  </p>
  <ol>
    <li><strong>A diagnosis.</strong> The tutor can name the shaky chapters and the error that keeps returning.</li>
    <li><strong>Longer working.</strong> Steps once done mentally are now written, where method marks are awarded.</li>
    <li><strong>An error log.</strong> Each wrong answer is copied out, corrected and tried again a week later.</li>
    <li><strong>One timed section.</strong> At least one part of a board sample or model paper, attempted against the clock and marked the way the board marks.</li>
  </ol>
  <p>
    If most of these are missing, tell us. We arrange a demo with another tutor from your shortlist, and switching
    tutor is free. When the nearest specialist lives on the far side of the city, one online and one home session a
    week can combine both strengths; our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or
    online tutor</a> article sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-fees">How much does a maths home tutor in Chennai cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The tutor, not NXTutors,
    sets the rate, which follows the course, the tutor's experience with it, the journey to your zone and how many
    sessions you book each week. Every shortlisted fee is on screen before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chm-request">What should your first message to us include?</h2>
  <p>
    Send the class, the board and course by name, your locality with a nearby station or landmark, the days and times
    you can offer, and a budget. We reply with two or three matched maths tutors and their fees, and you pick one for
    a free demo class. If nobody suitable can reach your part of Chennai at that hour, we suggest online or split-week
    lessons instead. NXTutors, whose office is in Sector 66, Gurugram, also teaches online across India; the national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page explains how matching works elsewhere, and
    senior students can pair this page with our <a href="{{ url('/physics-home-tutor-chennai') }}">physics home tutors
    in Chennai</a>.
  </p>
  <p>
    Maths teachers living in Chennai who would like students close to home can browse open requests on the
    <a href="{{ url('/tuition-jobs/chennai') }}">Chennai tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
