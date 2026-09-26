{{--
  Long-form guide for the "ICSE maths tutor Gurgaon" page, written by
  Abhinandan Tiwary (Class 10 CBSE and ICSE maths). The Class 10 paper shape
  (80 marks; Section A compulsory, 40 marks; Section B any four questions) is
  taken from the CISCE ICSE 2026 Mathematics specimen paper; the 80 + 20 split
  and the Class 10 units from the CISCE ICSE Mathematics syllabus. ISC is kept
  brief and general (80-mark theory paper with a compulsory Section A and a
  choice of Section B or C, plus 20 marks of project work). Schools are named
  only as schools our students attend, never as partners; each was checked
  earlier against the school's own website (see maths-home-tutor-gurgaon).
  FAQs render from faqs/icse-maths-tutor-gurgaon.php.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide icm-guide" aria-labelledby="icmGuideTitle">
  <h2 id="icmGuideTitle">ICSE maths tutor in Gurgaon: Classes 6 to 10, and ISC maths</h2>

  <p class="nx-guide__lede">
    ICSE maths has a reputation in Gurugram for being "harder than CBSE". It is more accurate to say it is longer and
    stricter. The syllabus covers more ground at each level, the Class 10 paper is long for the time allowed, and the
    examiners expect every step to be written out. Students who understand the maths but work in their heads, skip
    lines or rush lose marks they should have kept. This guide walks through ICSE maths from Class 6 to Class 10, the
    shape of the Class 10 board paper, the working-out culture that decides ICSE marks, a brief look at ISC maths in
    Classes 11 and 12, and how ICSE maths tuition works across Gurugram.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icm-why">Why ICSE maths feels different</a> ·
    <a href="#icm-junior">Classes 6 to 8</a> ·
    <a href="#icm-nine">Class 9</a> ·
    <a href="#icm-ten">Class 10 syllabus</a> ·
    <a href="#icm-paper">The Class 10 paper</a> ·
    <a href="#icm-working">Full working</a> ·
    <a href="#icm-mistakes">Habits that cost marks</a> ·
    <a href="#icm-switch">Switching boards</a> ·
    <a href="#icm-plan">A Class 10 plan</a> ·
    <a href="#icm-isc">ISC maths</a> ·
    <a href="#icm-schools">Gurgaon ICSE schools</a> ·
    <a href="#icm-start">Fees and getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icm-why">Why ICSE maths feels different from CBSE</h2>
  <p>
    I teach Class 10 maths on both boards, and the mathematics overlaps far more than parents expect. Quadratic
    equations, trigonometry, circles, mensuration, statistics and probability appear in both. The differences are in
    breadth, in style and in marking:
  </p>
  <ul>
    <li><strong>More topics.</strong> ICSE includes areas CBSE does not examine at the same level, most noticeably commercial mathematics (GST, banking and shares and dividends), matrices, loci and reflection.</li>
    <li><strong>No single national textbook.</strong> CBSE is built on NCERT; ICSE schools choose their own textbooks from publishers who follow the CISCE syllabus. The syllabus, not the book, is the real guide.</li>
    <li><strong>Longer, more demanding papers.</strong> The Class 10 paper asks a lot for the time, so speed with accuracy matters.</li>
    <li><strong>Working is marked.</strong> Examiners give marks for method, and a bare answer, even a correct one, can lose most of the marks for a question.</li>
  </ul>
  <p>
    That is why we match ICSE students with tutors who actually teach ICSE, not general maths tutors who "can do ICSE
    too". For how the boards compare more widely, see our
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">guide to choosing a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-junior">Classes 6 to 8: building the habits ICSE rewards</h2>
  <p>
    In the junior classes, ICSE schools follow the CISCE syllabus with the textbooks each school has chosen. The content
    is broadly what you would expect: number systems, fractions and decimals, ratio and percentage, simple and later
    compound interest, the start of algebra, basic geometry and mensuration, and simple data handling. What makes these
    years matter for ICSE students is less the content than the habits:
  </p>
  <ul>
    <li><strong>Writing every step.</strong> Students who learn to set out a solution line by line in Class 6 will not have to be retrained in Class 9, when it starts to cost marks.</li>
    <li><strong>Arithmetic that is quick and accurate.</strong> Commercial mathematics in Classes 9 and 10 is mostly careful arithmetic with percentages. A student who is shaky with percentages in Class 7 will struggle with GST and shares later.</li>
    <li><strong>Algebraic confidence.</strong> Expanding brackets, simplifying and solving simple equations without fear. Everything in the senior syllabus leans on it.</li>
    <li><strong>Geometric reasoning.</strong> Giving a reason for every statement ("angles in the same segment", "alternate angles") is a habit ICSE geometry expects from Class 9 onwards.</li>
  </ul>
  <p>
    One session a week with a tutor who checks written work, not just answers, is usually enough in these years. Our
    <a href="{{ url('/maths-home-tutor/class-7') }}">Class 7 maths tutor</a> and
    <a href="{{ url('/maths-home-tutor/class-8') }}">Class 8 maths tutor</a> pages cover these classes across boards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-nine">Class 9: the year ICSE maths gets serious</h2>
  <p>
    Many ICSE families first look for a maths tutor in Class 9, and they are right to. The syllabus widens sharply:
    compound interest, expansions and factorisation, simultaneous equations, indices and logarithms, triangles and
    congruency, the mid-point theorem and Pythagoras, rectilinear figures, circles, statistics, mensuration, an
    introduction to trigonometry and coordinate geometry. Much of this is examined again, directly or indirectly, in
    Class 10.
  </p>
  <p>
    The Class 9 topics students most often struggle with are logarithms (new and abstract), geometry proofs (where
    reasons must be given for every step) and factorisation in its harder forms. A good tutor makes sure these are
    secure before the Class 10 year begins, because Class 10 has no spare time to go back. Our
    <a href="{{ url('/maths-home-tutor/class-9') }}">Class 9 maths tutor page</a> has more on this year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-ten">The ICSE Class 10 maths syllabus</h2>
  <p>
    The Class 10 syllabus is arranged in units. This is what the student sits in the board exam:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE Class 10 Mathematics: units and main topics</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Main topics</th><th scope="col">Where students slip</th></tr>
    </thead>
    <tbody>
      <tr><td>Commercial mathematics</td><td>GST, banking (recurring deposit accounts), shares and dividends</td><td>Confusing face value and market value; GST on inter-state and intra-state supplies</td></tr>
      <tr><td>Algebra</td><td>Linear inequations, quadratic equations, ratio and proportion, factorisation (factor and remainder theorems), matrices, arithmetic and geometric progressions</td><td>Representing inequations on a number line; matrix multiplication order; sign errors in the quadratic formula</td></tr>
      <tr><td>Coordinate geometry</td><td>Reflection, section and mid-point formulae, equation of a line</td><td>Reflection in the wrong axis; slope of perpendicular lines</td></tr>
      <tr><td>Geometry</td><td>Similarity, loci, circles, constructions</td><td>Missing reasons in proofs; loci described vaguely; construction steps not shown</td></tr>
      <tr><td>Mensuration</td><td>Cylinder, cone and sphere, including combined solids and melting or recasting</td><td>Units; using the wrong radius; forgetting a curved surface</td></tr>
      <tr><td>Trigonometry</td><td>Identities, heights and distances</td><td>Proving identities without clear steps; diagrams drawn badly</td></tr>
      <tr><td>Statistics and probability</td><td>Mean, median, mode, histograms, ogives; simple probability</td><td>Reading the median and quartiles from an ogive; class-boundary errors</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Commercial mathematics is the section CBSE-trained tutors are least familiar with, and it is also the most
    reliable scoring area once the student is fluent, because the questions follow recognisable patterns. Our
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths board guide</a> covers chapter-level
    preparation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-paper">How the ICSE Class 10 maths paper is built</h2>
  <p>
    The board paper is worth 80 marks, and a further 20 marks come from internal assessment carried out through the
    year. Going by the CISCE specimen paper for 2026, the theory paper has two sections:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE Class 10 Mathematics paper</caption>
    <thead>
      <tr><th scope="col">Part</th><th scope="col">Marks</th><th scope="col">What the student does</th></tr>
    </thead>
    <tbody>
      <tr><td>Section A</td><td>40</td><td>Compulsory. Short questions, including multiple-choice items, across the syllabus</td></tr>
      <tr><td>Section B</td><td>40</td><td>Answer any four questions from those given; longer, multi-part questions</td></tr>
      <tr><td>Internal assessment</td><td>20</td><td>Assignments set and marked through the year, with an external examiner involved</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two things follow for preparation. First, Section A covers the whole syllabus, so no chapter can be skipped, however
    confident a student feels about Section B. Second, the choice in Section B is a real advantage only if the student
    has practised choosing. In mock papers, a tutor should have the student read all of Section B, pick their four in
    the first few minutes, and stick with them. Students who start a question, abandon it and start another lose far
    more time than they realise.
  </p>
  <p>
    Parents often ask whether ICSE students should practise on CBSE papers too. For some topics, yes, but ICSE
    questions have their own style, especially in commercial mathematics and geometry. Past ICSE papers and the CISCE
    specimen paper should be the main practice material.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-working">The full-working culture: where ICSE marks are won and lost</h2>
  <p>
    If there is one thing I would want every ICSE parent to understand, it is this: in ICSE maths, how the answer is
    written matters almost as much as whether it is right. Examiners award marks for method and steps, and ICSE papers
    routinely tell students that omitting essential working will lose marks. In practice, that means:
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Show the formula, then substitute</h3>
  <p>
    Write the formula being used, substitute the values, then simplify. If the arithmetic slips, the method marks are
    still there. A student who writes only the final number gets nothing when it is wrong.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Give a reason for every geometry step</h3>
  <p>
    "Angle ABC = 50° (angles in the same segment)". Without the reason in brackets, a correct angle may not earn the
    mark. ICSE geometry is closer to proof than many students expect.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Rough work in the margin</h3>
  <p>
    ICSE papers ask for all working, including rough work, to be shown on the same sheet as the rest of the answer.
    Side calculations belong there, not on a separate scrap, and examiners look at them.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Units and final statements</h3>
  <p>
    Give units, and end word problems with a sentence answering the question: "The market value of each share is
    ₹125." It sounds pedantic; it is where easy marks go.
  </p>
    </div>
  </div>
  <p>
    Teaching this is slow, patient work. It means the tutor reading every line the student writes, every session, and
    correcting layout as well as maths. It is also the single biggest difference between a tutor who knows ICSE and
    one who does not.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-mistakes">Five ICSE Class 10 habits that quietly cost marks</h2>
  <p>
    Across the ICSE students I have taught, the same small habits cost marks year after year. None of them is about not
    knowing the maths:
  </p>
  <ul>
    <li><strong>Copying the question wrongly.</strong> A sign or a number changes between the question paper and the answer sheet. Reading the question once more before starting takes seconds.</li>
    <li><strong>Leaving the answer in the wrong form.</strong> An inequation solution given without the solution set when the question asks for one, or a quadratic root given as a decimal when the question asks for it correct to a particular number of places or significant figures.</li>
    <li><strong>Graph work done carelessly.</strong> Ogives and histograms need a stated scale, labelled axes and neatly plotted points. Reflection questions need the points and their images clearly marked.</li>
    <li><strong>Constructions without the steps.</strong> ICSE construction questions expect the steps or the construction lines to be visible. Erasing them removes the evidence the examiner is looking for.</li>
    <li><strong>Skipping the final statement.</strong> In commercial mathematics especially, the last line should answer the question in words, with units.</li>
  </ul>
  <p>
    A tutor who marks the student's work strictly, the way an examiner would, fixes most of these within a term.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-switch">Switching into ICSE from CBSE, or the other way</h2>
  <p>
    Families moving to Gurugram sometimes change board, and maths is where it shows first. A student moving from CBSE
    into ICSE in Class 8 or 9 usually needs to catch up on commercial mathematics, the ICSE approach to geometry proofs
    with reasons, and a more detailed style of setting out working. A student moving from ICSE to CBSE finds some ICSE
    topics simply disappear, but has to get used to NCERT-based questions and CBSE's competency-based items. In both
    cases a tutor who has taught both boards can map exactly which topics are missing and close them in a few weeks,
    rather than re-teaching the whole year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-plan">A Class 10 ICSE maths plan with a tutor</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Typical Class 10 ICSE maths tutoring plan</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>April to June</td><td>Commercial maths and algebra alongside school; repair Class 9 gaps</td><td>2</td></tr>
      <tr><td>July to September</td><td>Geometry, coordinate geometry, mensuration; chapter tests with full working</td><td>2</td></tr>
      <tr><td>October to December</td><td>Finish the syllabus; trigonometry and statistics; first full papers; internal assessment assignments</td><td>2 to 3</td></tr>
      <tr><td>Pre-boards onward</td><td>Timed full papers, Section B choice practice, error review</td><td>3</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Schools sequence chapters differently, so the tutor follows the school's order and fills in around it. Students
    starting late can still improve a great deal, usually by securing commercial mathematics and the most predictable
    Section B topics first. For a side-by-side view with CBSE, see our
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-isc">ISC maths in Classes 11 and 12, briefly</h2>
  <p>
    ISC maths is a big step up from ICSE Class 10. The Class 12 examination has an 80-mark theory paper and 20 marks for
    project work. The theory paper has a compulsory Section A, covering areas such as relations and functions, matrices
    and determinants, calculus and probability, and then a choice of Section B (vectors, three-dimensional geometry and
    applications of integrals) or Section C (applications of maths in commerce and economics, such as linear
    regression). Schools decide which of B or C they teach, so the tutor must know the student's exact combination.
  </p>
  <p>
    Class 11 carries much of the foundation for Class 12 (functions, limits and the start of calculus), and students
    who treat it as a light year pay for it later. Many ISC science students also prepare for JEE, and a tutor can plan
    the two together. Ajay Vatsyayan leads our ISC maths guidance; see our
    <a href="{{ url('/maths-home-tutor/class-11') }}">Class 11 maths tutor</a> and
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> pages, and our
    <a href="{{ url('/blog/isc-class-12-physics-tips') }}">ISC Class 12 physics tips</a> for the other big subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-schools">Gurgaon ICSE and ISC schools our students attend</h2>
  <p>
    Our ICSE and ISC students include families from schools such as The Shri Ram School, Aravali (ICSE and ISC) and
    Scottish High International School (ICSE), as well as students who have moved to Gurugram from ICSE schools in other
    cities. NXTutors has no partnership or affiliation with any school; these are simply schools the students we tutor
    attend, and the boards noted are as stated on each school's website.
  </p>
  <p>
    ICSE families are spread across the city, which is why we match on travel time rather than distance. In
    {!! $ggA('dlf-phase-3', 'DLF Phase 3') !!}, {!! $ggA('dlf-phase-4', 'DLF Phase 4') !!} and
    {!! $ggA('dlf-phase-5', 'DLF Phase 5') !!}, and around {!! $ggA('sushant-lok-phase-i', 'Sushant Lok') !!} and
    {!! $ggA('south-city-2', 'South City 2') !!}, experienced ICSE maths tutors are usually within easy reach for home
    sessions. In {!! $ggA('ardee-city', 'Ardee City') !!}, {!! $ggA('greenwood-city', 'Greenwood City') !!} and
    {!! $ggA('palam-vihar', 'Palam Vihar') !!}, we often find tutors who have taught both CBSE and ICSE for years. In
    newer sectors, a hybrid plan widens the choice. Families moving from CBSE into ICSE, or the reverse, will find our
    <a href="{{ url('/maths-home-tutor-gurgaon') }}">maths home tutor in Gurgaon</a> page useful on switching boards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-start">Fees, home or online, and getting started</h2>
  <p>
    Across NXTutors, most sessions fall between <strong>₹800 and ₹2,500 an hour</strong>. ICSE maths in Classes 6 to 8
    sits towards the lower end; Class 10 board preparation and ISC maths sit higher. The fee also depends on the tutor's
    experience, travel time and how many sessions a week you take. You see each tutor's fee before the demo, and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explains more.
  </p>
  <p>
    For ICSE, home tuition has a particular advantage: the tutor sits beside the student and corrects written working
    as it happens. Online sessions work well too if the student's notebook is on camera. Many families choose one home
    session plus one online.
  </p>
  <p>
    Tell us the class, the school year, the ICSE or ISC topics causing trouble, your sector or society and the slots
    that suit you. We shortlist two or three matched ICSE maths tutors, you pick one for a
    <a href="{{ url('/demo-class') }}">free demo class</a>, and switching later is free. Every tutor is ID-verified
    before being shortlisted. You can also browse <a href="{{ url('/tutors') }}">tutors near you</a> first.
  </p>
  </section>

  </div>
</article>
