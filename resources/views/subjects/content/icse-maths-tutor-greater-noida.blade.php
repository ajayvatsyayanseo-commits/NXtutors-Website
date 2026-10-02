{{--
  Long-form guide for the "ICSE maths tutor Greater Noida" page. Authors:
  Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths) and Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths, for the ISC section). No anecdotes, years or
  results are claimed for either. No schools, societies, developers or other
  people are named.

  CISCE facts are reworded from icse-maths-tutor-gurgaon, which cites the CISCE
  ICSE Mathematics syllabus (80 theory + 20 internal assessment; Class 10
  units: commercial mathematics with GST, banking/recurring deposits, shares
  and dividends; algebra with linear inequations, quadratics, ratio and
  proportion, factor and remainder theorems, matrices, AP and GP; coordinate
  geometry with reflection, section and mid-point formulae, equation of a
  line; geometry with similarity, loci, circles, constructions; mensuration;
  trigonometry; statistics and probability), the ICSE 2026 Mathematics
  specimen paper (Section A compulsory, 40 marks, including multiple-choice
  items; Section B any four questions, 40 marks; essential working required;
  rough work on the same sheet), and the CISCE ISC Mathematics syllabus 2027
  and 2028 (from the 2027 exam, seven compulsory units and no Section B/C
  choice; 80 theory + 20 project; ISC Applied Mathematics a separate
  subject). Schools choose their own textbooks from publishers following the
  CISCE syllabus. UP Board comparison (70 + 30 in Class 10 maths) from
  upmsp.edu.in/Downloads/Syllabus/Class10/928-Maths-Class-10.pdf, read 2 Oct
  2026. No other dates.

  Local detail only from database/seo-content/zones/greater-noida.json,
  areas/greater-noida-research.json, greater-noida-zone-guides.json and the
  Greater Noida hub (CISCE's ICSE and ISC taught; syllabi broad, answers long;
  Sector 1 mid-segment societies on the Bisrakh side, Link Road and Bisrakh
  Road; Sector 16B societies by Ek Murti Chowk, roundabout being reshaped;
  Gamma 2 houses on plots between Gamma 1, Delta 3 and Beta 2, DELTA 1 /
  ALPHA 1 stations; Beta 1 houses beside Jagat Farm, ALPHA 1 station, J Block
  park; Phi 3 houses with parks, quiet roads after dark, Pari Chowk /
  Knowledge Park II stations; Sector 37 plots, tight parking, Kyampur
  markets). No request data is claimed. Fee wording is the approved sentence.
  FAQs render from faqs/icse-maths-tutor-greater-noida.php. Area links render
  only for active areas.
--}}
@php
  $icgSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $icgA = function (string $slug, string $label) use ($icgSlugs) {
      return in_array($slug, $icgSlugs, true)
          ? '<a href="' . e(url('/city/greater-noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="icgGuideTitle">
  <h2 id="icgGuideTitle">ICSE maths tutor in Greater Noida: method marks, commercial maths and the ISC years</h2>

  <p class="nx-guide__lede">
    ICSE maths is marked on the working as much as on the answer. A student who writes the right final line with no
    steps can lose most of the marks for a question, and one who sets out the method cleanly can keep many of them
    even after an arithmetic slip. That single fact shapes how an ICSE maths tutor should teach. This page is written
    by Abhinandan Tiwary, who teaches Class 10 CBSE and ICSE maths on NXTutors, with the ISC section by Ajay Vatsyayan,
    who teaches IB, IGCSE and ISC maths. It sits under our
    <a href="{{ url('/maths-home-tutor-greater-noida') }}">maths home tutors in Greater Noida</a> page and the
    <a href="{{ url('/icse-home-tutor-greater-noida') }}">ICSE and ISC tutors in Greater Noida</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icg-diff">How ICSE maths differs</a> ·
    <a href="#icg-units">Class 10 units</a> ·
    <a href="#icg-paper">The paper</a> ·
    <a href="#icg-junior">Classes 6 to 9</a> ·
    <a href="#icg-isc">ISC maths</a> ·
    <a href="#icg-first">The first three sessions</a> ·
    <a href="#icg-zones">Travel notes</a> ·
    <a href="#icg-mode">At home or on screen</a> ·
    <a href="#icg-plan">Class 10 plan</a> ·
    <a href="#icg-demo">Judging the demo</a> ·
    <a href="#icg-fees">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icg-diff">How ICSE maths differs from CBSE and the UP Board</h2>
  <p>
    Set ICSE beside CBSE or the UP Board, Uttar Pradesh's state board, and the three turn out to be closer in topics
    than in assessment. ICSE maths gives 80 marks to the written paper and 20 to internal
    assessment, against 70 and 30 in the UP Board's Class 10 maths. The bigger differences are in what the paper asks
    for.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where ICSE Class 10 maths stands apart</caption>
    <thead>
      <tr><th scope="col">Feature</th><th scope="col">What it means for tuition</th></tr>
    </thead>
    <tbody>
      <tr><td>Commercial mathematics</td><td>GST, recurring deposits and shares and dividends are full topics; they reward careful reading and correct formula choice more than clever algebra</td></tr>
      <tr><td>Matrices and the factor and remainder theorems</td><td>Short, mechanical questions that should become sure marks; an ICSE tutor drills them until they are routine</td></tr>
      <tr><td>Reflection and loci in geometry</td><td>Need accurate diagrams and a clear description of each step</td></tr>
      <tr><td>Essential working required</td><td>Every step written, rough work on the same sheet; marks follow the method</td></tr>
      <tr><td>The school chooses the textbook</td><td>CISCE sets the syllabus and schools pick books from publishers that follow it, so the tutor works from your child's own book</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icg-units">What the Class 10 syllabus covers</h2>
  <p>The CISCE Class 10 maths syllabus groups its content into these areas:</p>
  <ul>
    <li><strong>Commercial mathematics:</strong> GST, banking with recurring deposits, and shares and dividends.</li>
    <li><strong>Algebra:</strong> linear inequations, quadratic equations, ratio and proportion, the factor and remainder theorems, matrices, and arithmetic and geometric progressions.</li>
    <li><strong>Coordinate geometry:</strong> reflection, the section and mid-point formulae, and the equation of a line.</li>
    <li><strong>Geometry:</strong> similarity, loci, circles and constructions.</li>
    <li><strong>Mensuration, trigonometry, and statistics and probability.</strong></li>
  </ul>
  <p>
    A tutor's first job is usually diagnostic: work out which of these areas is weak, then spend the time there. Our
    guide to <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths for the boards</a> goes
    through the chapters in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icg-paper">How the Class 10 paper is set</h2>
  <p>
    The ICSE 2026 specimen paper has two sections. Section A is compulsory, carries 40 marks and includes
    multiple-choice items alongside short questions. In Section B the student chooses four questions, together worth
    another 40 marks. The instructions ask for essential working and for rough work to be done on the same sheet.
  </p>
  <p>Three habits follow from that structure, and a tutor should build each one deliberately:</p>
  <ol>
    <li><strong>Speed and accuracy in Section A.</strong> Short questions across the whole syllabus mean no topic can be skipped. Timed Section A practice shows which topics slow the student down.</li>
    <li><strong>Choosing well in Section B.</strong> Picking four questions is a skill. Students should practise reading every question first and choosing the ones they can finish fully.</li>
    <li><strong>Layout.</strong> Clear steps, labelled diagrams and units written in. A tutor should mark this every session, not only before the exam.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icg-junior">Classes 6 to 9: the years that decide Class 10</h2>
  <p>
    Most of the difficulty in ICSE Class 10 maths starts earlier. A student who reaches Class 9 unsure of fractions,
    algebraic manipulation or basic geometry proofs will find matrices, progressions and loci heavy going. For
    younger students, sessions should concentrate on:
  </p>
  <ul>
    <li>Number work and algebraic manipulation until they are automatic.</li>
    <li>Writing solutions in full, with each step justified, from the start.</li>
    <li>Geometry with ruler and compasses, so constructions are not new in Class 10.</li>
    <li>Word problems, including the percentage and interest questions that lead into commercial mathematics.</li>
  </ul>
  <p>
    One session a week through these years is usually enough. The aim is a student who arrives in Class 10 with time
    to practise papers rather than relearn basics.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icg-isc">ISC maths in Classes 11 and 12</h2>
  <p>
    The ISC Mathematics syllabus for 2027 and 2028 marks a real change. From the 2027 examination, the paper has seven
    compulsory units and no longer offers a choice between Sections B and C, so every student prepares the whole
    syllabus. The split stays at 80 marks for theory and 20 for a project. ISC Applied Mathematics is a separate
    subject with its own syllabus, so check which one appears on your child's timetable before you ask for a tutor.
  </p>
  <p>
    For ISC students, the method habits built in ICSE matter even more, because the calculus and algebra are longer
    and a single error early in a question carries through. Students preparing for JEE alongside ISC should see our
    <a href="{{ url('/jee-home-tutor-greater-noida') }}">JEE home tutors in Greater Noida</a> page, and our
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> covers both levels.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icg-first">What the first three sessions should look like</h2>
  <p>
    A new ICSE maths tutor should not start by teaching the next chapter. The opening weeks are for finding out where
    the marks are leaking, and a sensible tutor follows a pattern like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A diagnostic start with a new ICSE maths tutor</caption>
    <thead>
      <tr><th scope="col">Session</th><th scope="col">What happens</th><th scope="col">What parents should see afterwards</th></tr>
    </thead>
    <tbody>
      <tr><td>First (the free demo)</td><td>A short mixed test across commercial maths, algebra, geometry and trigonometry, then one question worked together with full layout</td><td>A list of two or three weak areas, named specifically</td></tr>
      <tr><td>Second</td><td>Recent school tests and the textbook reviewed; the weakest area taught from the ground up</td><td>A marked page showing where method marks were lost</td></tr>
      <tr><td>Third</td><td>A timed set of Section A style questions; a first Section B question chosen and answered in full</td><td>A plan for the term, linked to the school's test dates</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    If, after three sessions, you cannot say what the tutor is working on and why, ask. A clear answer is a good sign;
    a vague one is a reason to try the next tutor on your shortlist.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icg-zones">Travel notes for ICSE maths tutors across Greater Noida</h2>
  <ul>
    <li><strong><a href="{{ url('/city/greater-noida/zone/greater-noida-west') }}">Greater Noida West</a>.</strong> {!! $icgA('sector-1', 'Sector 1') !!} is mostly mid-segment societies on the Bisrakh side, reached by the Link Road and Bisrakh Road; public transport is thin, so tutors come by bike or car. {!! $icgA('sector-16b', 'Sector 16B') !!} sits by Ek Murti Chowk, where the roundabout is being reshaped, so leave some slack in the evening.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/alpha-delta-pari-chowk') }}">Alpha–Delta and Pari Chowk</a>.</strong> {!! $icgA('gamma-2', 'Gamma 2') !!} is houses on authority plots with no gate, close to the DELTA 1 and ALPHA 1 stations. In {!! $icgA('beta-1', 'Beta 1') !!}, Jagat Farm market is at the edge of the sector, so a tutor from the Alpha, Gamma or Delta sectors avoids the evening crowds.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omega-chi-phi') }}">Omega, Chi and Phi</a>.</strong> {!! $icgA('phi-3', 'Phi 3') !!} is roomy houses with parking in front. Some roads go quiet after dark, so many families choose daytime or early-evening slots.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/pi-sigma-sectors-36-37') }}">Pi, Sigma and Sectors 36–37</a>.</strong> {!! $icgA('sector-37', 'Sector 37') !!} is plotted houses where parking is often tight, so a tutor on a two-wheeler or dropped by auto arrives most easily.</li>
  </ul>
  <p>
    Away from the Aqua Line, in <a href="{{ url('/city/greater-noida/zone/zeta-eta') }}">Zeta and Eta</a> and
    <a href="{{ url('/city/greater-noida/zone/omicron-mu-xu') }}">Omicron, Mu and Xu</a>, most tutors arrive on a two-wheeler. Every locality is on the <a href="{{ url('/city/greater-noida') }}">Greater Noida
    home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icg-mode">Home or online for ICSE maths</h2>
  <p>
    Because ICSE marks the method, a tutor needs to see the working as it is written. At home that happens naturally:
    the tutor watches a construction or a long progression question and corrects the layout on the spot. Online works
    when the student writes under a camera or on a tablet the tutor can see live. Many families keep home sessions for
    Classes 9 and 10 and use online sessions for extra paper practice or for ISC topics where a specialist lives
    further away. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a> weighs
    it up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icg-plan">A Class 10 year in ICSE maths</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How a Class 10 ICSE maths year is usually planned</caption>
    <thead>
      <tr><th scope="col">Part of the year</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>First term</td><td>Keeping pace with school; commercial maths and algebra built properly; internal-assessment work supported</td><td>One or two</td></tr>
      <tr><td>Second term</td><td>Geometry, coordinate geometry and trigonometry; Section A timed drills begin</td><td>Two</td></tr>
      <tr><td>Before the pre-boards</td><td>Full papers; Section B choice practice; layout marked every time</td><td>Two</td></tr>
      <tr><td>Final weeks</td><td>Weak topics only; mixed papers under time</td><td>Two or three</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icg-demo">What to look for in the demo</h2>
  <ol>
    <li><strong>Working first.</strong> Does the tutor insist on every step, and explain why the marks depend on it?</li>
    <li><strong>Your textbook.</strong> Does the tutor work from the book your child's school uses?</li>
    <li><strong>Commercial maths.</strong> Ask the tutor to explain a recurring-deposit or GST question. It should be clear and quick.</li>
    <li><strong>Section B strategy.</strong> Ask how they teach students to choose four questions.</li>
    <li><strong>For ISC:</strong> does the tutor know that the 2027 paper has no section choice?</li>
    <li><strong>The journey:</strong> which road or station, and which evenings are reliable.</li>
  </ol>
  <p>
    If it does not click, say so; another tutor from your shortlist can take a free demo. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> lists further points to watch.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icg-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    What you pay depends on the class, on ICSE or ISC, and on the tutor's travel; tutors fix their own fee and it is on
    the shortlist before any demo. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> or our article on
    <a href="{{ url('/blog/home-tuition-fees-greater-noida') }}">home tuition fees in Greater Noida</a>.
  </p>
  <p>
    Share the class, whether it is ICSE or ISC, the textbook, the trouble spots, your sector or society and the
    evenings that suit. A shortlist of two or three tutors follows; the opening class is a
    <a href="{{ url('/demo-class') }}">free demo</a>, and moving to a different tutor later is free. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> first, so profiles appear only after it. Look
    through <a href="{{ url('/tutors') }}">tutor profiles</a> in the meantime, or visit the <a href="{{ url('/igcse-maths-tutor-greater-noida') }}">IGCSE
    maths</a> and <a href="{{ url('/up-board-tutor-greater-noida') }}">UP Board</a> pages for Greater Noida.
  </p>
  </section>

  </div>
</article>
