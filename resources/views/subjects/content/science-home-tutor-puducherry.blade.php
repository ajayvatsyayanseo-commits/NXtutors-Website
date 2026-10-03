{{--
  Long-form guide for the "science home tutor Puducherry" page (Classes 6 to
  10; CBSE in depth, ICSE briefly, the state-board SSLC syllabus in general
  terms only). Byline in config: Aaditya Kashyap; role statement only, no
  anecdotes. Covers Puducherry town only.

  Local facts come only from database/seo-content/areas/puducherry-research.json
  (area "about" texts and zone_facts). Board picture only from its top-level
  board_facts (schooledn.py.gov.in/CBSE/cbsetrg.html,
  schooledn.py.gov.in/Exams/sslcResult.html and the 2026 state-board result
  analysis PDF on schooledn.py.gov.in); the state board is not named and no
  pattern is given.

  Exam facts reuse checked statements in database/seo-content/blog:
  cbse-class-10-science-notes (80 + 20, internal 5/5/5/5, 39 questions by
  type, biology 30 / chemistry 25 / physics 25, unit marks) and
  cbse-class-10-board-year-plan-gurgaon (main exam plus optional second exam),
  with the 50/30/20 competency split, the three school-assessed topics, the
  14 listed experiments, Class 9 Exploration unit marks, Curiosity for
  Classes 6 and 7 and ICSE three-paper science as already stated on the
  existing CBSE-city science pages (source: cbseacademic.nic.in
  Science_SecP1_2026-27; cisce.org).

  No school, college, society or people's names, no distances or travel
  times, only the allowed fee sentence. Area links render only when that
  Puducherry area page exists and is active.
--}}
@php
  $pdsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pdsA = function (string $slug, string $label) use ($pdsSlugs) {
      return in_array($slug, $pdsSlugs, true)
          ? '<a href="' . e(url('/city/puducherry/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pds-guide" aria-labelledby="pdsGuideTitle">
  <h2 id="pdsGuideTitle">Science home tutor in Puducherry for Classes 6 to 10: NCERT habits, neat diagrams and a slot that holds</h2>

  <p class="nx-guide__lede">
    Between Class 6 and Class 10, science grows from simple observations into three subjects with numericals,
    equations and labelled diagrams. In Puducherry that climb now happens on CBSE books for many children, since government
    schools have moved across from the state syllabus, while some private schools still teach for the state-board
    SSLC and ICSE is another option. A good science tutor here teaches from whichever book is actually on the table, arrives
    at the same hour after school each week, and builds careful written answers long before the board year. NXTutors
    suggests two or three science tutors who can do that, shows each fee up front, and makes the first lesson a free
    demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pds-books">Which books</a> ·
    <a href="#pds-stage">Class 6 to 10</a> ·
    <a href="#pds-paper">Class 10 marks</a> ·
    <a href="#pds-qtypes">Question types</a> ·
    <a href="#pds-school">School-marked topics</a> ·
    <a href="#pds-nine">Class 9</a> ·
    <a href="#pds-icse">ICSE</a> ·
    <a href="#pds-areas">Six areas</a> ·
    <a href="#pds-week">A tuition week</a> ·
    <a href="#pds-fees">Fees</a> ·
    <a href="#pds-start">Starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pds-books">Which science books will the tutor be teaching from?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE science sections of this guide. The first question for any family is
    simple: which textbook did the school hand out this year? In Puducherry the answer changed recently. The
    Directorate of School Education held orientation sessions in April and May 2024 for a smooth swap from the state
    syllabus to CBSE, and its Class 10 results are listed as SSLC up to 2024 and as CBSE 10 from 2025.
  </p>
  <ul>
    <li><strong>CBSE (NCERT books).</strong> Now the syllabus in government schools. Practice should come from NCERT exercises, CBSE sample papers and their marking schemes.</li>
    <li><strong>State-board SSLC.</strong> Still followed by some private schools; the Directorate publishes separate state-board result analyses for them from 2026. A tutor should use the prescribed textbook and that board's own question papers, and the family should confirm the current scheme with the school.</li>
    <li><strong>ICSE.</strong> Science is examined as three separate papers, covered further down this page.</li>
  </ul>
  <p>
    A child who studied the state syllabus until recently and now has NCERT books may know the science well but write
    answers in a different style. Our <a href="{{ url('/cbse-home-tutor-puducherry') }}">CBSE home tutor in
    Puducherry</a> page deals with that switch across subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pds-stage">What changes in science from Class 6 to Class 10?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>School science from Class 6 to Class 10: what the tutor concentrates on and what a parent can check at home</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Tutor concentrates on</th><th scope="col">Parent can check</th></tr>
    </thead>
    <tbody>
      <tr><td>6 and 7</td><td>Turning each activity in the NCERT <em>Curiosity</em> books, or the school's own text, into a sentence and a labelled sketch</td><td>Scientific words used in place of everyday ones</td></tr>
      <tr><td>8</td><td>Physics, chemistry and biology pulled apart, with the first numericals and word equations</td><td>A unit written after every number</td></tr>
      <tr><td>9</td><td>A much heavier book: motion graphs, matter and the cell all arrive in one year</td><td>Gaps closed in the month they appear</td></tr>
      <tr><td>10</td><td>Every chapter aimed at the board paper and how it is marked</td><td>A timed section written under exam conditions</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Up to Class 10, one tutor for all three sciences usually works well, because the same person can see whether a
    wrong physics numerical comes from the arithmetic or from the idea. The national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page explains our approach, and there are class
    pages for <a href="{{ url('/science-home-tutor/class-6') }}">Class 6</a> and
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8</a> science.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pds-paper">How do the CBSE Class 10 science marks divide?</h2>
  <p>
    The board paper is three hours long and worth 80 marks, and the school adds 20 more in four equal parts of 5:
    periodic tests, multiple assessment, the portfolio and practical-based subject enrichment. Across the 80, biology
    accounts for 30 while chemistry and physics take 25 apiece.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science units with their board marks, and the habit that protects those marks</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Chapters</th><th scope="col">Habit that protects the marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances</td><td>25</td><td>Equations; acids, bases and salts; metals and non-metals; carbon compounds</td><td>Balancing and naming practised every week</td></tr>
      <tr><td>World of Living</td><td>25</td><td>Life processes; control and coordination; reproduction; heredity</td><td>Labelled diagrams drawn from memory</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>Circuits, resistance, the magnetic effect</td><td>Units on every line of a numerical</td></tr>
      <tr><td>Natural Phenomena</td><td>12</td><td>Light, the human eye, the colourful world</td><td>Arrows on every ray in a diagram</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>A short unit</td><td>Revise it rather than leave it out</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Measured by the thinking each question asks for, half of the paper tests knowledge and understanding, 30% asks the
    student to apply ideas, and the final 20% wants analysis and evaluation. Our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a> cover each chapter, and
    the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page lays out a board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pds-qtypes">Which kinds of question should a Class 10 student practise?</h2>
  <p>
    CBSE's 2026-27 sample paper has 39 questions. Twenty are worth one mark each, a mix of multiple-choice and
    assertion–reason. Six short answers carry two marks, seven carry three, three case- or source-based questions
    carry four, and three long answers carry five. A tutor should drill each type differently: speed and accuracy
    for the one-mark block; exactly as many separate points as there are marks in a short answer; reading the passage
    or data before touching the questions in case-based items; and a diagram or equation plus four or five clear
    points in a long answer. CBSE publishes sample papers and marking schemes on cbseacademic before the exam, and
    they remain the most reliable practice material.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pds-school">Which topics does the school mark instead of the board?</h2>
  <p>
    For 2026-27, three areas are kept out of the board paper and assessed by the school: the electric motor,
    electromagnetic induction and the generator; evolution; and the periodic classification of elements. They still
    count for internal marks and return in Class 11, so they need proper teaching, just not board-revision weeks. The
    curriculum also lists 14 experiments that board questions can draw on, which makes the practical notebook part
    of revision.
  </p>
  <p>
    Every Class 10 student sits the compulsory main exam, and eligible students may then take an optional second exam
    to improve their result in up to three subjects, science among them. Dates for 2027 were not out at the time of
    writing, so watch cbse.gov.in and treat the main exam as the one that counts. The
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> sets out the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pds-nine">Is Class 9 science different this year?</h2>
  <p>
    Yes. CBSE's 2026-27 curriculum uses NCERT's new Class 9 book, <em>Exploration</em>. The year-end exam is still 80
    marks with 20 internal, across four units: Matter, its nature and behaviour carries 27; World of living 25; Motion,
    force, work and sound 23; and Earth as a system 5. Notes handed down from an older brother or sister follow the
    earlier book, so the tutor should plan from the new chapters. See the
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pds-icse">What does a tutor need for ICSE science?</h2>
  <p>
    In ICSE Class 10, science is three papers rather than one: CISCE sets Physics, Chemistry and Biology separately,
    each with its own internal assessment. Schools pick their own textbooks within the CISCE syllabus, so the tutor
    works from your child's books and from CISCE specimen papers, not from an NCERT plan. Exact definitions and fully
    worked numericals are where ICSE marks are won. Some families need help with only one of the three, often from
    Class 9; say which one in your request. If no ICSE-experienced tutor can travel to you, online lessons widen the
    choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pds-areas">How do six Puducherry areas shape an after-school science slot?</h2>
  <p>
    For a child between Class 6 and Class 10, science tuition usually sits between school and dinner, so the trip
    has to be short and predictable. Six areas from the old town and the south show what to arrange; all areas are on
    our <a href="{{ url('/city/puducherry') }}">Puducherry page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Inside the old town</h3>
      <p>
        In the {!! $pdsA('tamil-quarter', 'Tamil Quarter') !!}, homes are mostly older houses facing the street, so a
        phone call brings the tutor to the front door; set the slot away from the evening rush on the shopping
        streets. {!! $pdsA('muthialpet', 'Muthialpet') !!} in the north is mostly independent houses with a few small
        apartment buildings; for a flat, pass on the flat number in advance, and allow a margin near the old market
        at peak hours.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>By the bus stand</h3>
      <p>
        {!! $pdsA('nellithope', 'Nellithope and Anna Nagar') !!} sit close to the Pondicherry bus stand, which makes
        them easier to reach for tutors who come by bus from Lawspet, Mudaliarpet or Villianur. Homes mix houses,
        plots and apartment buildings; for a flat, give the building name and floor and let the guard know. The roads
        here stay busy most of the day, so a two-wheeler is the simplest way in.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>South, beyond Ariyankuppam</h3>
      <p>
        {!! $pdsA('manavely', 'Manavely') !!} is served by bus route 2A towards Chinna Veerampattinam; share a street
        name and a landmark such as the main road junction. In {!! $pdsA('veerampattinam', 'Veerampattinam') !!} the
        Aadi-month car festival crowds the roads, so plan those weeks online. {!! $pdsA('thavalakuppam', 'Thavalakuppam') !!}
        lies on the Cuddalore highway; homes on plotted side roads have their own gate, so give the side road's name.
      </p>
    </div>
  </div>
  <p>
    Families in Lawspet, Kalapet, Reddiarpalayam or Villianur can read the
    <a href="{{ url('/city/puducherry/zone/lawspet-ecr') }}">Lawspet and ECR</a> and
    <a href="{{ url('/city/puducherry/zone/reddiarpalayam-villianur') }}">Reddiarpalayam and Villianur</a> zone
    guides, and the <a href="{{ url('/blog/puducherry-home-tuition-guide') }}">Puducherry home tuition guide</a>
    compares all four zones.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pds-week">What does a sensible science tuition week look like?</h2>
  <p>
    Two lessons a week suit most children in the middle years, and a board-year student may need a third close to
    the exams. A pattern that keeps all three sciences moving:
  </p>
  <ol>
    <li><strong>First lesson: the current chapter.</strong> Whatever the school is teaching, explained again, with the NCERT exercise questions done in writing.</li>
    <li><strong>Second lesson: one drill and one check.</strong> One drill from the list below, then a short written test on last week's chapter, marked in front of the child.</li>
    <li><strong>Between lessons: ten minutes a day.</strong> One diagram redrawn from memory or one equation balanced, nothing longer.</li>
  </ol>
  <p>
    The drills that pay back most in any board: ray diagrams with arrows on every ray and virtual rays dotted;
    circuit diagrams in standard symbols, ammeter in series and voltmeter in parallel; the heart, the digestive system
    and the nephron with correctly spelled labels; chemical equations balanced, with state symbols when asked; and
    heredity crosses drawn in full. At the free demo, see whether these habits appear without prompting; the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> lists more to
    watch. If the fit is wrong, the next tutor on the shortlist gives a demo, and switching later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pds-fees">What does a science home tutor in Puducherry charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees. Board-year teaching in Class 10 usually sits above help in the middle years; the trip to your area and the
    number of lessons a week also count. Every fee on the shortlist is visible before the demo, and the
    <a href="{{ url('/blog/home-tuition-fees-puducherry') }}">Puducherry home tuition fees</a> article lists the
    questions worth asking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pds-start">How do you start?</h2>
  <p>
    Send the class and syllabus (CBSE, state-board SSLC or ICSE), the strand that worries you most, your area with a
    landmark, the afternoons that suit you, and whether your child is more at ease with explanations in Tamil, English
    or both. We return two or three science tutors with fees, and you choose one for a free demo. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. If no suitable
    tutor can reach you at that hour, we suggest an online or part-online plan. NXTutors works from Sector 66,
    Gurugram, and teaches online across India. For later years, see the
    <a href="{{ url('/physics-home-tutor-puducherry') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-puducherry') }}">chemistry</a> tutor pages for Puducherry, and for maths,
    the <a href="{{ url('/maths-home-tutor-puducherry') }}">maths home tutor in Puducherry</a> page.
  </p>
  <p>
    Science teachers living in Puducherry can see open requests near home on the
    <a href="{{ url('/tuition-jobs/puducherry') }}">Puducherry tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
