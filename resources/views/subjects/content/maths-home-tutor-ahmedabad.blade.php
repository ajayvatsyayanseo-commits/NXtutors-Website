{{--
  Long-form guide for the "maths home tutor Ahmedabad" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/ahmedabad-research.json (zone_facts and area
  "about" texts, each with sources). Exam facts reuse the checked statements
  already used on the Delhi maths page, taken from database/seo-content/blog:
  cbse-class-10-maths-preparation, cbse-class-10-board-year-plan-gurgaon,
  cbse-class-12-maths-calculusalgebra, icse-isc-maths-gurgaon-guide,
  -ib-math-aaai-slhl and jee-preparation-gurgaon-coaching-or-home-tutor.
  GSEB is described in general terms only (SSC and HSC, no exam pattern).
  No school, society, developer, mall or people's names, no roads named after
  people (the ring road is not named), no distances or travel times, only the
  allowed fee sentence.

  Area links render only when that Ahmedabad area page exists and is active.
--}}
@php
  $amAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $amA = function (string $slug, string $label) use ($amAreaSlugs) {
      return in_array($slug, $amAreaSlugs, true)
          ? '<a href="' . e(url('/city/ahmedabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide amdm-guide" aria-labelledby="amdmGuideTitle">
  <h2 id="amdmGuideTitle">Maths home tutor in Ahmedabad: one exam board, one reachable address, one steady weekly hour</h2>

  <p class="nx-guide__lede">
    Ahmedabad families rarely struggle to find a maths teacher; they struggle to find the right one. A GSEB student
    in Maninagar, a CBSE student in Satellite and an IB student in Bodakdev need different books, different mark
    schemes and, quite often, a tutor who lives on their side of the Sabarmati. Give NXTutors the board, the class
    and your neighbourhood, and we reply with two or three maths tutors who match all three. Every fee is visible
    before you meet anyone, and your first class with the tutor you choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#amdm-boards">Boards side by side</a> ·
    <a href="#amdm-gseb">GSEB students</a> ·
    <a href="#amdm-ten">Class 10 CBSE</a> ·
    <a href="#amdm-cisce">ICSE and ISC</a> ·
    <a href="#amdm-ib">IB and IGCSE</a> ·
    <a href="#amdm-jee">Class 12 and JEE Main</a> ·
    <a href="#amdm-map">Six neighbourhoods</a> ·
    <a href="#amdm-month">The first month</a> ·
    <a href="#amdm-mix">Home, online or both</a> ·
    <a href="#amdm-fees">Fees</a> ·
    <a href="#amdm-next">Next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="amdm-boards">Which board does your child write, and what does that change?</h2>
  <p>
    On this page Ajay Vatsyayan is responsible for the IB, IGCSE and ISC maths advice, and Abhinandan Tiwary for the
    Class 10 CBSE and ICSE advice. Across Ahmedabad, children on the same floor of a building may follow the
    Gujarat board, CBSE, ICSE or an international course, so we treat the board as the first filter and the class
    as the second.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses Ahmedabad students take, the year they matter most, and what a tutor should bring to the first lesson</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Key year</th><th scope="col">How it is examined</th><th scope="col">Bring to lesson one</th></tr>
    </thead>
    <tbody>
      <tr><td>GSEB SSC and HSC</td><td>Classes 10 and 12</td><td>Set by the Gujarat board; details on gseb.org</td><td>The school's own textbook, in the child's medium</td></tr>
      <tr><td>CBSE Mathematics, Standard or Basic</td><td>Class 10</td><td>80-mark board paper and 20 school marks</td><td>A recent CBSE sample paper</td></tr>
      <tr><td>CBSE Mathematics</td><td>Class 12</td><td>38 questions for 80, with 20 internal</td><td>A calculus plan for the year</td></tr>
      <tr><td>ICSE Mathematics</td><td>Class 10</td><td>A single 80-mark paper plus 20 internal</td><td>CISCE specimen questions</td></tr>
      <tr><td>ISC Mathematics</td><td>Class 12</td><td>80-mark paper and 20 for two projects</td><td>The 2027 syllabus, not an older guide</td></tr>
      <tr><td>IB Diploma AA or AI, SL or HL</td><td>Years 1 and 2</td><td>Written papers and an internal exploration</td><td>Past papers for the right course and level</td></tr>
      <tr><td>Cambridge IGCSE</td><td>Year 10 or 11</td><td>Core or Extended tier</td><td>A view on which tier suits your child</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="amdm-gseb">What should GSEB families ask a maths tutor?</h2>
  <p>
    The Gujarat Secondary and Higher Secondary Education Board runs the SSC examination at the end of Class 10 and
    the HSC examination at the end of Class 12, and it publishes its own syllabus, timetables and notices. We do not
    restate its paper pattern here, because the board's site at gseb.org is the only reliable source for any given
    year. What we can say is practical. First, tell us the medium: a child studying maths in Gujarati needs a tutor
    who can explain in Gujarati and use the same terms the teacher uses, while an English-medium child needs the
    opposite. Second, ask the tutor to work from the textbook your child's school prescribes and from the school's
    own unit tests, not from a CBSE guide that happens to cover similar chapters. Third, for HSC, say whether your
    child is in the science stream or the general stream, so the tutor plans from the right syllabus.
  </p>
  <p>
    A tutor who already teaches GSEB students in your part of the city will usually know the rhythm of school tests
    and preliminary exams, which makes the weekly plan easier to set.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="amdm-ten">How is the CBSE Class 10 maths paper built for 2026-27?</h2>
  <p>
    The board paper is worth 80 marks and lasts three hours; schools award the remaining 20. The theory marks come
    from 14 NCERT chapters grouped into seven units. Ranked by weight:
  </p>
  <ol>
    <li>Algebra: polynomials, pairs of linear equations, quadratics and arithmetic progressions, 20 marks.</li>
    <li>Geometry: triangles and circles, 15 marks.</li>
    <li>Trigonometry, including heights and distances, 12 marks.</li>
    <li>Statistics and probability, 11 marks.</li>
    <li>Mensuration, 10 marks.</li>
    <li>Real numbers, 6 marks, and coordinate geometry, another 6.</li>
  </ol>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 maths, 2026-27: the five sections of the paper, identical for Standard and Basic</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Questions</th><th scope="col">Marks each</th><th scope="col">Section total</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>20 (18 multiple-choice, 2 assertion–reason)</td><td>1</td><td>20</td></tr>
      <tr><td>B</td><td>5</td><td>2</td><td>10</td></tr>
      <tr><td>C</td><td>6</td><td>3</td><td>18</td></tr>
      <tr><td>D</td><td>4</td><td>5</td><td>20</td></tr>
      <tr><td>E</td><td>3 case studies</td><td>4</td><td>12</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    No calculator is permitted, and π is 22/7 unless the question states another value. Standard and Basic differ
    in the kind of thinking tested: roughly 54% of Standard marks go to remembering and understanding, compared with
    about 75% in Basic. If maths is likely in Class 11, Standard is normally the sensible choice; check with the
    school before the registration deadline. Since 2026, Class 10 students take a compulsory main exam and may sit an
    optional second exam to improve as many as three subjects, maths among them; the 2027 dates are not yet out, so
    follow cbse.gov.in. Chapter-by-chapter help is in our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths preparation guide</a> and the
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">Class 10 board-year planner</a>, and the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page shows how we match for this year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="amdm-cisce">ICSE Class 10 and ISC Class 12: what is different?</h2>
  <p>
    ICSE maths in Class 10 is one three-hour written paper of 80 marks, with 20 more from internal assessment, and
    CISCE examiners look closely at how working is laid out. Our
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> covers the topics in order.
  </p>
  <p>
    ISC Class 12 has changed more. For the 2027 and 2028 examinations CISCE sets seven units in a single 80-mark
    paper, and the old choice between Section B and Section C has gone. Every candidate now meets vectors,
    three-dimensional geometry, linear programming and probability, and calculus alone is worth 35 marks. Two
    projects make up the other 20, each marked out of 10: 1 for format, 4 for content, 2 for findings and 3 for the
    viva. Revision books printed for the older layout will mislead, so ask any tutor which exam year they plan for.
    The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> sets out a two-year
    plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="amdm-ib">IB Diploma and IGCSE maths: which choices need settling early?</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>AA or AI</h3>
      <p>
        Analysis and Approaches is built on algebra, functions, calculus and proof, and one of its papers must be
        written without a calculator. Applications and Interpretation is built on modelling and statistics, and a
        graphic display calculator is needed in every paper. The choice shapes university options, so make it with
        the school's coordinator, not the tutor alone.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>SL or HL, and the exploration</h3>
      <p>
        The IB suggests 150 teaching hours for SL and 240 for HL. At SL, two papers carry 40% each; at HL, two papers
        carry 30% each and a third paper 20%. The exploration supplies the final 20% at both levels and has to be the
        student's own work. A tutor may explain the criteria and challenge a draft, never write it. See our
        <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a>.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>IGCSE tier</h3>
      <p>
        Cambridge IGCSE students are entered for Core, where the highest grade is C, or Extended, graded A* to G.
        Agree the tier with the school well before entries close. If a move between boards is on the cards, read
        our <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to switching from CBSE to IB or
        IGCSE</a>.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="amdm-jee">Class 12 board maths and JEE Main: can they share one tutor?</h2>
  <p>
    They can, provided the week is planned on paper. In CBSE Class 12, the 80-mark paper has 38 compulsory questions
    and calculus accounts for 35 of those marks, so from the start of the session calculus should take the biggest
    slice of every week.
  </p>
  <p>
    In JEE Main 2026, Paper 1 carried 75 questions for 300 marks. Twenty-five were maths: 20 multiple-choice and 5
    numerical-answer, each earning +4 when right and −1 when wrong. Confirm the next session's pattern on
    jeemain.nta.nic.in before planning around it. For a student who also attends coaching, a practical routine is to
    clear the week's unsolved coaching problems first and finish with one full board-style long answer, so that
    written presentation does not slip. Useful reading: the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise guide</a>, and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="amdm-map">How does a maths tutor reach six Ahmedabad neighbourhoods?</h2>
  <p>
    We divide the city into seven zones, four west of the Sabarmati and three to the east. Metro coverage is uneven:
    some neighbourhoods have a Blue or Red Line station on the doorstep, others rely on BRTS, suburban trains or a
    two-wheeler. Browse tutors area by area on our <a href="{{ url('/city/ahmedabad') }}">Ahmedabad page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Ahmedabad neighbourhoods: typical homes, how a tutor arrives, and one thing to arrange before the first class</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">Typical homes</th><th scope="col">How the tutor arrives</th><th scope="col">Arrange in advance</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $amA('navrangpura', 'Navrangpura') !!}, west, near the river</td><td>Older low-rise blocks, independent houses and newer towers</td><td>Blue Line stations inside the area; Old High Court interchange nearby</td><td>A watchman's register in apartment buildings</td></tr>
      <tr><td>{!! $amA('satellite', 'Satellite') !!}, west</td><td>Apartment complexes plus bungalows on plotted lanes</td><td>No metro station yet; two-wheeler, auto, BRTS or city bus</td><td>Gate registration in societies; bungalows are doorstep visits</td></tr>
      <tr><td>{!! $amA('bopal', 'Bopal') !!}, south-west edge</td><td>Mid-priced multi-storey societies, villas in newer pockets</td><td>BRTS towards the Shivranjani crossroads, or two-wheeler</td><td>The guard logs visitors; share the tutor's name</td></tr>
      <tr><td>{!! $amA('gota', 'Gota') !!}, north-west</td><td>Mid-range apartment societies and builder floors</td><td>BRTS Route 9 ends here; otherwise by road along SG Highway</td><td>Some gates phone the family to confirm entry</td></tr>
      <tr><td>{!! $amA('maninagar', 'Maninagar') !!}, south, east bank</td><td>Older houses on market streets, apartment blocks, newer flats</td><td>Main-line railway station with a footbridge to BRTS</td><td>An earlier after-school slot, before market roads fill</td></tr>
      <tr><td>{!! $amA('shahibaug', 'Shahibaug') !!}, north-central, east bank</td><td>Mostly spacious three- and four-bedroom apartments</td><td>By road via Riverfront Road or Airport Road</td><td>A visitor entry at the gate and a quick call upstairs</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Across most of the western suburbs, SG Highway and the ring-road junctions are slowest at office hours, so a
    tutor coming from farther away is easier to hold to a late-afternoon or weekend slot. On the east bank the
    busiest stretches are market streets and the roads into the old city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="amdm-month">What should the first month with a new maths tutor look like?</h2>
  <p>
    Four weeks is long enough to judge whether a match is working, well before any term exam. A sound tutor will
    usually cover this ground:
  </p>
  <ul>
    <li><strong>Week one: diagnosis.</strong> A short mixed test from earlier chapters, marked in front of your child, with each lost mark sorted as a concept gap, a careless slip or a misread question.</li>
    <li><strong>Week two: a written plan.</strong> Chapters in the order the school will teach them, with revision slots built in before each school test.</li>
    <li><strong>Week three: full working.</strong> Every answer written out line by line, the way board examiners award method marks.</li>
    <li><strong>Week four: a timed section.</strong> One section of a sample or specimen paper done against the clock and marked to the official scheme.</li>
  </ul>
  <p>
    If the month ends without a plan you can read or a marked timed section, tell us. We set up a demo with the next
    tutor on your shortlist, and a change of tutor costs you nothing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="amdm-mix">Home tutor, online tutor, or a mix?</h2>
  <p>
    Sitting beside a child lets a tutor catch a wrong sign the moment it is written, which is why most families
    start with home classes. Two cases favour a mix. Specialists in IB HL, ISC or IGCSE Extended are fewer than CBSE
    or GSEB tutors, so the right one may live across the river; one online session with them plus one home session
    with a nearby tutor covers both needs. And families on the newer edges of the city, such as Shela or Gota, often
    keep a local tutor for regular practice and add online classes for a specialist topic. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article compares the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="amdm-fees">What does a maths home tutor in Ahmedabad charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their
    own rate. What moves it is the board and class, the tutor's experience with that exact course, the journey to
    your neighbourhood at your chosen hour, and the number of sessions each week. All shortlisted fees are in front
    of you before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="amdm-next">What do we need from you to start?</h2>
  <p>
    Send five things: the class, the board and course by name (with the medium, for GSEB), your neighbourhood and
    the nearest landmark crossroads, the days and times you can offer, and a budget. We come back with two or three
    matched maths tutors and their fees, and you pick one for a free demo class. Where nobody suitable can reach you
    at that hour, we suggest online or split-week classes. NXTutors works from Sector 66, Gurugram, and teaches online
    across India; the national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page explains how we
    match in other cities.
  </p>
  <p>
    Maths teachers based in Ahmedabad who would like students near home can look through open requests on the
    <a href="{{ url('/tuition-jobs/ahmedabad') }}">Ahmedabad tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
