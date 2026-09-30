{{--
  Long-form guide for the "science home tutor Ranchi" page (Classes 6 to 10,
  CBSE, ICSE and the Jharkhand Academic Council in general terms). Byline in
  config: Aaditya Kashyap; role statement only, no anecdotes. Local facts come
  only from database/seo-content/areas/ranchi-research.json (zone_facts and
  area "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions by type, 30/25/25 split, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, school-assessed topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science as already stated on the Delhi, Faridabad and Patna
  science pages. No school, college, society or people's names, no distances
  or travel times, only the allowed fee sentence.

  Area links render only when that Ranchi area page exists and is active.
--}}
@php
  $rcAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $rcA = function (string $slug, string $label) use ($rcAreaSlugs) {
      return in_array($slug, $rcAreaSlugs, true)
          ? '<a href="' . e(url('/city/ranchi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide rcs-guide" aria-labelledby="rcsGuideTitle">
  <h2 id="rcsGuideTitle">Science home tutor in Ranchi for Classes 6 to 10: one tutor for three sciences, taught from your child's own book</h2>

  <p class="nx-guide__lede">
    Between Class 6 and Class 10, science stops being a set of interesting observations and becomes physics, chemistry
    and biology, each with its own numericals, equations and diagrams. Ranchi children meet this through different
    books: NCERT for CBSE, school-chosen texts for ICSE, and the books prescribed for the Jharkhand board. A science
    tutor therefore has to work from the book your child actually carries, arrive at a steady time after school, and
    build careful answer-writing well before Class 10. NXTutors suggests two or three science tutors who can do this,
    shows their fees in advance, and makes the first class a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#rcs-books">Which book</a> ·
    <a href="#rcs-stages">Stage by stage</a> ·
    <a href="#rcs-jac">JAC science</a> ·
    <a href="#rcs-marks">Class 10 marks</a> ·
    <a href="#rcs-paper">The 39 questions</a> ·
    <a href="#rcs-school">School-marked topics</a> ·
    <a href="#rcs-nine">Class 9</a> ·
    <a href="#rcs-icse">ICSE</a> ·
    <a href="#rcs-homes">Four localities</a> ·
    <a href="#rcs-notebook">The notebook</a> ·
    <a href="#rcs-fees">Fees</a> ·
    <a href="#rcs-start">Starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="rcs-books">Which science book is on your child's desk?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE guidance on this page. The first question is which book the school uses,
    because that decides what a tutor teaches and how answers are written.
  </p>
  <ul>
    <li><strong>CBSE, Classes 6 and 7:</strong> NCERT's <em>Curiosity</em> books, built around activities and questions.</li>
    <li><strong>CBSE, Class 9:</strong> NCERT's new book, <em>Exploration</em>, which older siblings' notes do not follow.</li>
    <li><strong>CBSE, Classes 8 and 10:</strong> NCERT, with Class 10 aimed squarely at the board paper.</li>
    <li><strong>ICSE:</strong> texts chosen by each school within the CISCE syllabus, with Physics, Chemistry and Biology taught as separate subjects.</li>
    <li><strong>Jharkhand board:</strong> the books the Jharkhand Academic Council prescribes, in Hindi or English.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcs-stages">What changes in science tuition as a child moves up?</h2>
  <p>
    In Classes 6 and 7 the job is language: turning each activity into one clear sentence and a labelled sketch, and
    replacing everyday words with scientific ones. Class 8 separates the three sciences and brings the first
    numericals, so units after every number become a rule. Class 9 is a steep climb, with motion graphs, the nature of
    matter and the cell arriving in the same year, and any gap should be closed within the month it appears. In Class
    10 every chapter points at the board paper and its marking.
  </p>
  <p>
    Up to Class 10 one tutor for all three sciences usually works better than three specialists. A single person can
    see whether a wrong physics numerical comes from weak arithmetic or a misunderstood idea. Read about our approach on
    the national <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page, and see the
    <a href="{{ url('/science-home-tutor/class-7') }}">Class 7 science tutor</a> and
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> pages for the middle years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcs-jac">What if your child is on the Jharkhand board?</h2>
  <p>
    The Jharkhand Academic Council conducts the state's Class 10 (Matric) examination and sets its own science syllabus
    and scheme, which it revises from time to time. This page does not describe the JAC paper; the council's official
    website is the place for current details. When you choose a tutor, three checks matter more than any pattern: the
    tutor explains in the language your child writes in, sets practice from the prescribed book and the council's own
    model papers, and drills diagrams and equations as carefully as for any other board.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcs-marks">Where are the marks in CBSE Class 10 science?</h2>
  <p>
    The three-hour board paper is worth 80. The remaining 20 are awarded in school, 5 each for periodic tests,
    multiple assessment, the portfolio and practical-based subject enrichment. Biology carries 30 of the board marks,
    chemistry and physics 25 each.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science units for 2026-27, their board marks, and a question a parent can ask at home to check progress</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Ask your child at home</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances: reactions, acids and bases, metals, carbon compounds</td><td>25</td><td>"Balance this equation and name the type of reaction."</td></tr>
      <tr><td>World of Living: life processes, control, reproduction, heredity</td><td>25</td><td>"Draw and label the part of the body this chapter is about."</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>"Where does the ammeter go in this circuit, and why?"</td></tr>
      <tr><td>Natural Phenomena: light, the eye, colour</td><td>12</td><td>"Show me the ray diagram, with arrows."</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>"Explain a food chain in three points."</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    By skill, half the paper tests knowledge and understanding, 30% application, and 20% analysis and evaluation. Our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a> go chapter by chapter, and
    the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page shows how a board year can
    be planned.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcs-paper">How should a tutor train for each type of question?</h2>
  <p>
    The 2026-27 CBSE sample paper has 39 questions. Twenty are worth one mark, a mix of multiple-choice and
    assertion–reason; these need fast, exact recall. Six short answers carry two marks and seven carry three, and the
    rule for both is one distinct point per mark. Three four-mark questions are built on a case or a set of data, so
    the passage has to be read before anything is written. Three long answers at five marks want a diagram or equation
    and four or five well-ordered points. CBSE posts sample papers with marking schemes on cbseacademic, and those
    remain the most reliable practice material.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcs-school">Which topics stay with the school, and how many board exams are there?</h2>
  <p>
    Three areas are assessed by the school and left out of the 2026-27 board paper: the electric motor,
    electromagnetic induction and the generator; evolution; and how elements are arranged in the periodic table. They
    still count for internal marks and return in Class 11, so they deserve proper teaching, just not board-revision
    time. The curriculum also names 14 experiments, and board questions lean on them, so the practical file doubles as
    revision.
  </p>
  <p>
    Every Class 10 student sits the main exam. Those eligible may take an optional second sitting to improve up to
    three subjects, science among them. Dates for 2027 are not out yet, so prepare as if the main exam is the only
    chance and follow cbse.gov.in. Our <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year
    planner</a> sets out the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcs-nine">Class 9 science on the new book</h2>
  <p>
    CBSE's 2026-27 Class 9 curriculum follows <em>Exploration</em>. The annual exam still carries 80 marks with 20
    internal. Matter, its nature and behaviour, is the largest unit at 27; World of living has 25; Motion, force, work
    and sound has 23; and Earth as a system has 5. A tutor should plan from the new chapters rather than from last
    year's guidebook. More on our <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcs-icse">How is ICSE science different to teach?</h2>
  <p>
    At ICSE Class 10, CISCE examines Physics, Chemistry and Biology as three separate papers, each with its own internal
    assessment. Because schools pick their own textbooks, a tutor must teach from your child's books and from CISCE
    specimen papers, not from an NCERT plan. Exact definitions and fully worked numericals win marks here. Some
    families only want help with one of the three, often from Class 9. ICSE science tutors are harder to find, so ask
    early; online lessons widen the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcs-homes">What should you arrange for an after-school slot in four Ranchi localities?</h2>
  <p>
    For Classes 6 to 10 the lesson usually falls between school and dinner, so a short, dependable trip matters more
    than anything. See tutors by locality on our <a href="{{ url('/city/ranchi') }}">Ranchi page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>After-school science tuition in four Ranchi localities: the homes, the approach, and what to share with the tutor</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Approach</th><th scope="col">Share with the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $rcA('morabadi', 'Morabadi') !!}</td><td>Mostly two- and three-bedroom flats, with older houses in colonies such as Dipatoli</td><td>Several routes in, including Morabadi Road, Circular Road and Karamtoli Road</td><td>The tutor's name for the gate register, and an online fallback on days when the ground hosts a big event</td></tr>
      <tr><td>{!! $rcA('namkum', 'Namkum') !!}</td><td>Plots, independent houses and newer gated enclaves in pockets such as Barganwa and Tetry Toli</td><td>Homes are spread out, so tutors usually ride their own two-wheeler; Namkon station is on the Gomoh–Hatia line</td><td>The enclave's visitor rules, or a house landmark</td></tr>
      <tr><td>{!! $rcA('kadru', 'Kadru') !!}</td><td>Independent houses and small buildings, including the A. G. Colony</td><td>Doorstep visits with little gate formality; narrow lanes suit a two-wheeler</td><td>A lane landmark and a slot clear of the office rush on the main roads</td></tr>
      <tr><td>{!! $rcA('hinoo', 'Hinoo') !!}</td><td>Houses and small apartment buildings in colonies near the airport</td><td>Mostly doorstep arrival; Doranda and the airport roads are busy at peak hours</td><td>A little buffer in the after-school time, and whether the building keeps a register</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcs-notebook">What should the science notebook at home contain?</h2>
  <p>
    A simple habit makes tuition visible to parents: one notebook, split into three parts. The first holds diagrams,
    redrawn each week from memory: the human heart, the nephron, a ray diagram for a convex lens, a circuit with the
    ammeter in series and the voltmeter in parallel. The second holds balanced equations, with state symbols where the
    question asks for them. The third is a list of wrong answers from school tests, each rewritten correctly with one
    line on what went wrong. Look through it every fortnight; if the third section is not getting shorter, raise it with
    the tutor.
  </p>
  <p>
    Bring this notebook, or recent test papers, to the free demo and see whether the tutor spots the pattern. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> lists more to
    watch for. If the first tutor is not right, the next demo is with someone else on your shortlist, and switching
    later is free as well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcs-fees">What does a science home tutor in Ranchi charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees. Within Classes 6 to 10, a board-year tutor usually costs more than one for the middle years, and the trip to
    your locality and the number of weekly lessons also count. You see every fee before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcs-start">How do you start?</h2>
  <p>
    Tell us the class and board, the science your child finds hardest, your locality with a landmark, and the
    afternoons that suit. We send two or three science tutors with fees, and you choose one for a free demo. If nobody
    suitable can reach you at that hour, we suggest online or part-online lessons. NXTutors works from Sector 66,
    Gurugram, and teaches online throughout India.
  </p>
  <p>
    Science teachers in Ranchi who want students nearby can find open requests on the
    <a href="{{ url('/tuition-jobs/ranchi') }}">Ranchi tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
