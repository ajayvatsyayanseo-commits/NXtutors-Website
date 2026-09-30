{{--
  Long-form guide for the "maths home tutor Coimbatore" subject page (authors
  in config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/coimbatore-research.json (zone_facts and area
  "about" texts, each with sources). The Coimbatore metro is described only as
  proposed and unsanctioned. Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-10-maths-preparation (unit marks,
  section layout, Standard/Basic skill split, no calculators, pi = 22/7),
  cbse-class-10-board-year-plan-gurgaon (80 + 20, two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC single 2027/2028 paper,
  seven units, project marking), -ib-math-aaai-slhl (AA/AI, teaching hours,
  paper weights, exploration) and jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026 pattern). The Tamil Nadu State Board is described generally
  only; no state exam pattern is given. No school, college, society, mall or
  people's names (no roads named after people), no distances or travel times,
  only the allowed fee sentence.

  Area links render only when that Coimbatore area page exists and is active.
--}}
@php
  $cbAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cbA = function (string $slug, string $label) use ($cbAreaSlugs) {
      return in_array($slug, $cbAreaSlugs, true)
          ? '<a href="' . e(url('/city/coimbatore/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide cbem-guide" aria-labelledby="cbemGuideTitle">
  <h2 id="cbemGuideTitle">Maths home tutor in Coimbatore: pin down the syllabus, then the side of town</h2>

  <p class="nx-guide__lede">
    Two children on the same Coimbatore street can be preparing for entirely different maths exams: one follows the
    Tamil Nadu State Board textbooks, a neighbour writes CBSE, a cousin is on ISC or the IB. A tutor strong in one may
    be a stranger to another, and one who lives beyond Trichy Road may not want to cross to Vadavalli twice a week. Tell us the syllabus and your
    locality, and we send two or three maths tutors who suit both, with every fee visible before you meet anyone. The
    first class with the tutor you choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cbem-which">Which syllabus</a> ·
    <a href="#cbem-state">State Board</a> ·
    <a href="#cbem-ten">Class 10 marks</a> ·
    <a href="#cbem-senior">ISC, IB, IGCSE</a> ·
    <a href="#cbem-jee">Board plus JEE</a> ·
    <a href="#cbem-zones">Five zones</a> ·
    <a href="#cbem-local">Six localities</a> ·
    <a href="#cbem-term">End-of-term check</a> ·
    <a href="#cbem-fees">Fees</a> ·
    <a href="#cbem-brief">Your brief</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cbem-which">Why do we ask for the syllabus before the class number?</h2>
  <p>
    Guidance on IB, IGCSE and ISC maths here comes from Ajay Vatsyayan, who teaches those courses; guidance on CBSE
    and ICSE Class 10 maths comes from Abhinandan Tiwary, who teaches that year. "Class 10" alone tells a tutor little
    in Coimbatore, where several syllabi run side by side.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths syllabi Coimbatore families bring to us, what the year leads up to, and what a new tutor should do first</caption>
    <thead>
      <tr><th scope="col">Syllabus</th><th scope="col">The year leads up to</th><th scope="col">First fortnight with a new tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>Tamil Nadu State Board, Class 10 or higher secondary</td><td>A public examination conducted by the state</td><td>Lessons planned from the textbook the school has issued, practice from the board's own model papers</td></tr>
      <tr><td>CBSE Class 10, Standard or Basic</td><td>An 80-mark board paper, plus 20 marks awarded by the school</td><td>A short diagnostic across algebra and geometry</td></tr>
      <tr><td>ICSE Class 10 (CISCE)</td><td>80 marks in the written exam and 20 from internal work</td><td>A check on how neatly each step is set out</td></tr>
      <tr><td>CBSE Class 12</td><td>38 compulsory questions for 80 marks, 20 more internal</td><td>A calculus plan for the whole session</td></tr>
      <tr><td>ISC Class 12 (CISCE)</td><td>An 80-mark theory paper and 20 marks of project work</td><td>Confirmation that notes follow the 2027 layout</td></tr>
      <tr><td>IB Diploma, AA or AI, SL or HL</td><td>External papers and the internally assessed exploration</td><td>A clear line on what help the exploration may receive</td></tr>
      <tr><td>Cambridge IGCSE</td><td>Entry at Core or Extended tier</td><td>An early view on which tier suits the child</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbem-state">What makes a good maths tutor for a State Board child?</h2>
  <p>
    The Tamil Nadu State Board writes its own syllabus and prints its own textbooks, and the state conducts the public
    examinations at the end of Class 10 and Class 12. We do not set out that paper's design on this page, because the
    board publishes it and can revise it between sessions. The tutor to look for works chapter by chapter from the
    state book on your child's desk, uses the board's model and earlier question papers for practice, and does not
    quietly swap in an NCERT plan.
  </p>
  <p>
    For a State Board student also aiming at JEE, the tutor should lay the entrance syllabus beside the state chapter
    list in Class 11 and timetable any missing topics early.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbem-ten">CBSE Class 10 maths: which units decide the 80 marks?</h2>
  <p>
    For 2026-27, fourteen NCERT chapters are grouped into seven units, and the question-paper design is unchanged from
    last session. Ordered by weight, the units look like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 maths 2026-27, heaviest unit first, with the slip that most often costs marks there</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Where marks usually slip</th></tr>
    </thead>
    <tbody>
      <tr><td>Algebra</td><td>20</td><td>Setting up the equation from a word problem</td></tr>
      <tr><td>Geometry</td><td>15</td><td>Proof steps written without the reason beside them</td></tr>
      <tr><td>Trigonometry</td><td>12</td><td>Heights and distances attempted without a figure</td></tr>
      <tr><td>Statistics and probability</td><td>11</td><td>Arithmetic errors inside grouped-data tables</td></tr>
      <tr><td>Mensuration</td><td>10</td><td>Units dropped halfway through a combined-solid answer</td></tr>
      <tr><td>Real numbers</td><td>6</td><td>Rushing a proof that looks easy</td></tr>
      <tr><td>Coordinate geometry</td><td>6</td><td>Sign errors in the section formula</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The paper runs in five sections. A holds twenty one-mark items, eighteen multiple-choice and two
    assertion–reason; B has five questions of two marks; C six of three; D four of five; and E three case studies of
    four marks each. There is no calculator in the hall, and π is 22/7 unless the question states otherwise.
    Standard and Basic weigh thinking differently: roughly 54% of Standard marks
    reward recall and understanding, against about 75% in Basic. Keep Standard if maths in Class 11 is still an
    option, and settle it with the school before registration.
  </p>
  <p>
    Since 2026, CBSE Class 10 has a compulsory main exam and an optional later sitting in which up to three subjects,
    maths among them, can be improved; the 2027 dates are awaited on cbse.gov.in. ICSE Class 10 maths likewise splits
    into 80 exam marks and 20 internal. For chapter-level help, read the
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths preparation guide</a> or the
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a>, and see the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page for how we match in that year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbem-senior">ISC, IB and IGCSE maths: which details catch families out?</h2>
  <h3>ISC Class 12 has lost its section choice</h3>
  <p>
    Candidates once picked between Section B and Section C. For the 2027 and 2028 examinations CISCE sets seven units
    in one 80-mark paper with no such option, so vectors, three-dimensional geometry, linear programming and
    probability are now for everyone. Calculus is worth 35 of the 80. Two projects bring the other 20, each scored
    out of 10 as format 1, content 4, findings 2 and viva 3. A two-year plan is in our
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a>.
  </p>
  <h3>IB Diploma: AA or AI, and the exploration</h3>
  <p>
    Analysis and Approaches centres on algebra, functions, calculus and proof, with one paper taken without a
    calculator. Applications and Interpretation centres on modelling and statistics and uses a graphic display
    calculator on every paper. Recommended teaching time is 150 hours at SL and 240 at HL. At SL two papers carry 40%
    apiece; at HL two carry 30% apiece and a third 20%. The exploration supplies the final 20% at either level, and it
    has to be the student's work: a tutor can unpack the criteria and challenge a draft, never write it. Our
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA and AI guide</a> helps with the choice.
  </p>
  <p>
    For Cambridge IGCSE, the Core tier caps the grade at C, while Extended spans A* to G, so agree the tier with the
    school early. Families thinking of a board change can read about
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">moving from CBSE to IB or IGCSE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbem-jee">Can board maths and JEE Main share one weekly plan?</h2>
  <p>
    They can, provided the plan exists on paper. The CBSE Class 12 paper has 38 compulsory questions for 80 marks and
    calculus accounts for 35 of them, so it takes the biggest slice of time from the first month; State Board and ISC
    students need the same emphasis. JEE Main 2026 Paper 1 carried 75 questions for 300 marks, and maths was 25 of
    them: 20 multiple-choice and 5 numerical-value, marked +4 for a right answer and −1 for a wrong one. NTA held
    sessions in January and April; confirm the 2027 rules on jeemain.nta.nic.in.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A two-session week for a Class 12 student writing both the board paper and JEE Main</caption>
    <thead>
      <tr><th scope="col">Session</th><th scope="col">Board half</th><th scope="col">Entrance half</th></tr>
    </thead>
    <tbody>
      <tr><td>First</td><td>The school's current chapter, ending in one fully written long answer</td><td>Five quick problems on the same idea, checked for method</td></tr>
      <tr><td>Second</td><td>Corrections from the first session's long answer</td><td>A timed set of coaching questions left unsolved that week</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Further reading: the <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and
    algebra guide</a>, the <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-by-topic plan</a>,
    and the <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbem-zones">How do Coimbatore's five zones affect a maths match?</h2>
  <p>
    We sort Coimbatore's localities into five zones. The city has no metro (one was proposed, but the Union
    Government returned the proposal in 2025 and it is not sanctioned), so tutors come by two-wheeler, town bus or
    local train. Every locality is listed on our
    <a href="{{ url('/city/coimbatore') }}">Coimbatore page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Coimbatore's five tutoring zones: the road or rail link tutors rely on, the homes they visit and a timing tip</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Links tutors use</th><th scope="col">Homes</th><th scope="col">Timing tip</th></tr>
    </thead>
    <tbody>
      <tr><td>RS Puram, Race Course &amp; Gandhipuram</td><td>Coimbatore Junction, Coimbatore North Junction, Gandhipuram bus terminus</td><td>Grid streets of houses, apartments with a security desk</td><td>Shopping streets fill up in the evening; start before the crowd</td></tr>
      <tr><td>Saravanampatti, Ganapathy &amp; Thudiyalur</td><td>Sathy Road and Mettupalayam Road buses; MEMU trains at Thudiyalur</td><td>Gated apartment complexes, dense streets of houses, plotted layouts</td><td>Avoid the hours when offices on Sathy Road open and close</td></tr>
      <tr><td>Peelamedu, Kalapatti &amp; Avinashi Road</td><td>Avinashi Road and its elevated expressway; Pilamedu station</td><td>Apartments, villa communities and plots</td><td>After the evening office rush suits tutors from the centre</td></tr>
      <tr><td>Ramanathapuram, Singanallur &amp; Trichy Road</td><td>Trichy Road buses, Singanallur bus terminus and station</td><td>Houses and mid-income apartment buildings</td><td>A tutor on your side of Trichy Road saves the crossing</td></tr>
      <tr><td>Podanur, Kuniyamuthur &amp; Vadavalli</td><td>Podanur Junction, Ukkadam bus terminus, Marudamalai Road</td><td>Mostly independent houses and plots</td><td>Western and southern fringes: pair a nearby tutor with online help</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbem-local">What does a weekly maths visit look like in six localities?</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>The planned west-central grid</h3>
      <p>
        {!! $cbA('rs-puram', 'RS Puram') !!} is laid out in straight roads between Mettupalayam Road and Thadagam
        Road, so a new tutor finds the house by road and door number. The main streets are shopping districts; park on
        a residential cross road and book a slot before the evening crowd. Next door,
        {!! $cbA('saibaba-colony', 'Saibaba Colony') !!} is mostly independent houses where the tutor rings at the gate,
        though newer apartment buildings may ask for a flat number.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>The northern and eastern growth belts</h3>
      <p>
        {!! $cbA('saravanampatti', 'Saravanampatti') !!}, on Sathy Road, joined the corporation in 2011 and has grown
        around office parks; most families live in gated complexes, so register the tutor at the gate or on the visitor
        app. Weekday early evenings and weekend mornings suit working parents. In
        {!! $cbA('peelamedu', 'Peelamedu') !!}, the elevated expressway above Avinashi Road ends at a junction inside the
        locality, and Pilamedu station lies on the main line. Add the tutor to the complex's visitor list.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>An old neighbourhood and a foothill suburb</h3>
      <p>
        {!! $cbA('ramanathapuram', 'Ramanathapuram') !!} has been part of the corporation since 1882, with Trichy Road
        running through the middle. Houses mean a doorstep visit; apartment guards ask for the flat number, and a tutor
        on your side of the main road is simpler to schedule. {!! $cbA('vadavalli', 'Vadavalli') !!} sits on
        Marudamalai Road at the foot of the Western Ghats. Most homes are houses, villa communities keep a visitor list,
        and tutors from the western neighbourhoods are the easiest to fix.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbem-term">How can a parent check maths tuition at the end of a term?</h2>
  <p>
    Open the notebook and the last test. Every step should be on paper, because method marks vanish when a child works
    in their head. The tutor should be able to name where marks go (signs, misreading or one weak chapter), wrong
    answers should be copied out and retried a week later, and at least one section of a sample or model paper should
    have been sat against the clock. If most of this is missing, tell us: we set up a demo with the next tutor on your
    shortlist, and switching costs nothing. Where the right specialist lives across the city, one online and one home
    session a week can work; the <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a>
    article weighs it up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbem-fees">What will a maths home tutor in Coimbatore charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The rate is the tutor's
    own and moves with the syllabus, the tutor's experience of it, the trip at your chosen hour and the number of
    weekly sessions. Each shortlisted fee is shown before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbem-brief">What goes into a request for a maths tutor?</h2>
  <p>
    Give us the class, the board and the course name, your locality with a landmark or nearby road, the days and hours
    that are free, and a budget. Two or three matched maths tutors come back with their fees, and you pick one for the
    free demo class. If nobody suitable can reach your part of Coimbatore at that time, we suggest online or
    split-week sessions. NXTutors has its office in Sector 66, Gurugram, and also teaches online across India; the
    national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page shows how matching works elsewhere, and
    Class 11–12 students can also look at our <a href="{{ url('/physics-home-tutor-coimbatore') }}">physics home tutors
    in Coimbatore</a>.
  </p>
  <p>
    Maths teachers who live in Coimbatore and want students close to home can see open requests on the
    <a href="{{ url('/tuition-jobs/coimbatore') }}">Coimbatore tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
