{{--
  Long-form guide for the "science home tutor Jammu" page (Classes 6 to 10,
  CBSE, ICSE and JKBOSE in general terms). Byline in config: Aaditya Kashyap;
  role statement only, no anecdotes. Local facts come only from
  database/seo-content/areas/jammu-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions by type, 30/25/25 sections, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, school-assessed topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science as already stated on the Delhi and Patna science pages.
  JKBOSE: https://jkbose.jk.gov.in/ (fetched 3 Oct 2026) lists the Secondary
  School Examination (Class 10) and publishes a syllabus, model test papers
  and a question bank; no paper pattern is given here.
  No school, college, society or people's names, no distances or travel
  times, only the allowed fee sentence.

  Area links render only when that Jammu area page exists and is active.
--}}
@php
  $jmsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jmsA = function (string $slug, string $label) use ($jmsSlugs) {
      return in_array($slug, $jmsSlugs, true)
          ? '<a href="' . e(url('/city/jammu/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide jms-guide" aria-labelledby="jmsGuideTitle">
  <h2 id="jmsGuideTitle">Science home tutor in Jammu, Classes 6 to 10: the right book, the same weekday hour, and answers built for the marker</h2>

  <p class="nx-guide__lede">
    In Class 6, school science is mostly noticing things and describing them. By Class 10 it has become three
    subjects, each with equations, numericals and diagrams that are marked line by line. Jammu children make that
    climb on more than one syllabus: CBSE with NCERT books, ICSE with whichever texts the school has chosen, or the
    state board, the Jammu and Kashmir Board of School Education. What helps most is a tutor who works from your
    child's own book, turns up at a fixed hour after school, and builds tidy answer-writing well ahead of Class 10.
    Tell NXTutors the class, the board and your colony; we reply with two or three matching science tutors and their
    fees, and the opening lesson costs nothing.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jms-stage">Class by class</a> ·
    <a href="#jms-state">State board</a> ·
    <a href="#jms-marks">Class 10 weights</a> ·
    <a href="#jms-paper">Question types</a> ·
    <a href="#jms-inschool">Internal topics</a> ·
    <a href="#jms-nine">Class 9 book</a> ·
    <a href="#jms-icse">ICSE</a> ·
    <a href="#jms-habits">Five habits</a> ·
    <a href="#jms-where">Six colonies</a> ·
    <a href="#jms-fees">Fees</a> ·
    <a href="#jms-ask">Your message</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jms-stage">How does a science tutor's work shift between Class 6 and Class 10?</h2>
  <p>
    Aaditya Kashyap is the author of this page's CBSE and ICSE sections. Broadly, a tutor starts as an explainer and
    ends as an examiner. The table shows the focus for each year, with one quick test a parent can run on the
    notebook.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Jammu science tuition, Class 6 to Class 10: the year's focus and a notebook test for parents</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Focus for the year</th><th scope="col">Notebook test</th></tr>
    </thead>
    <tbody>
      <tr><td>6 and 7</td><td>Each activity in NCERT's <em>Curiosity</em> series, or the school's chosen book, written up as one accurate line plus a drawing with labels</td><td>Do proper scientific words appear, or loose everyday ones?</td></tr>
      <tr><td>8</td><td>Physics, chemistry and biology start to separate; the first numericals and word equations appear</td><td>Is there a unit after each value?</td></tr>
      <tr><td>9</td><td>The book thickens sharply: motion graphs, the states of matter and the cell all in one term</td><td>Are shaky chapters mended within weeks?</td></tr>
      <tr><td>10</td><td>Each chapter taught with the board's marking in view</td><td>Has a complete timed section been attempted?</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Until the end of Class 10, one tutor covering all three sciences is usually the sensible choice, because that
    person can trace a wrong physics answer back to weak arithmetic or to a misunderstood idea. Our national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page sets out the method; for the younger
    years, see the <a href="{{ url('/science-home-tutor/class-6') }}">Class 6 science</a> and
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science</a> tutor pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jms-state">What should a family on the J&amp;K state board look for?</h2>
  <p>
    JKBOSE holds its Secondary School Examination when students finish Class 10. Its official site,
    jkbose.jk.gov.in, offers the syllabus along with model test papers and a question bank. Because the board writes
    and revises its own science paper, we point families to that site for the current format instead of copying it
    here.
  </p>
  <p>
    Three checks settle most matches. First, the lessons should run on the textbook prescribed for your child's
    class. Second, practice should draw on the board's own model papers and question bank, with guide books kept
    for later. Third, units, labelled diagrams and balanced equations should be demanded every week. If a tutor
    agrees to all three without hesitation, the match is sound.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jms-marks">How are the 80 board marks in CBSE Class 10 science spread?</h2>
  <p>
    Students write for three hours and the paper is marked out of 80. Twenty further marks are given in school, in
    four equal parts of five: periodic tests, multiple assessment, a portfolio and practical subject enrichment. Of
    the board's 80, biology is worth 30 and the two other sciences 25 apiece.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The five CBSE Class 10 science units ranked by marks, with the weekly work that protects them</caption>
    <thead>
      <tr><th scope="col">Marks</th><th scope="col">Unit and chapters</th><th scope="col">Weekly work</th></tr>
    </thead>
    <tbody>
      <tr><td>25</td><td>Chemical Substances (reactions and equations, acids, bases and salts, metals and non-metals, carbon)</td><td>A handful of equations balanced and named, every single week</td></tr>
      <tr><td>25</td><td>World of Living (life processes, control and coordination, reproduction, heredity)</td><td>One diagram reproduced from memory, then compared with the book</td></tr>
      <tr><td>13</td><td>Effects of Current (circuits, resistance, magnetism from current)</td><td>Two numericals, each line carrying its unit</td></tr>
      <tr><td>12</td><td>Natural Phenomena (light, the human eye, dispersion and scattering)</td><td>A ray diagram, arrows drawn on</td></tr>
      <tr><td>5</td><td>Our Environment</td><td>A quick recap before each test so it is never skipped</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In terms of skills, 50% of the paper checks knowledge and understanding, 30% checks application and the last 20%
    asks for analysis and evaluation. For chapter notes, use our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a>; for planning the year,
    the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jms-paper">Which question types fill the Class 10 science paper?</h2>
  <p>
    CBSE's 2026-27 sample paper contains 39 questions arranged in five blocks:
  </p>
  <ul>
    <li><strong>20 at one mark</strong>, a blend of multiple-choice and assertion–reason items. Train speed and exact recall.</li>
    <li><strong>6 at two marks</strong> and <strong>7 at three marks</strong>. Teach the rule of one clear point per mark.</li>
    <li><strong>3 at four marks</strong>, built on a case, a source or a set of data. Read the passage first, then the question.</li>
    <li><strong>3 at five marks</strong>. A diagram or equation, then four or five well-separated points.</li>
  </ul>
  <p>
    CBSE releases sample papers with marking schemes on cbseacademic ahead of the exam, and no other practice set
    matches the real paper as closely.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jms-inschool">Which chapters stay off the board paper this session?</h2>
  <p>
    Three areas are assessed by schools, not by the board, in 2026-27: the electric motor together with
    electromagnetic induction and the generator; evolution; and how the periodic table arranges elements. They still
    count internally and return in Class 11, so a tutor should teach them properly while keeping board-revision weeks
    for the rest. The curriculum lists 14 experiments, and board questions draw on them, which is why the practical
    file is worth revising too.
  </p>
  <p>
    There is one compulsory main exam for every Class 10 student. Eligible students can then attempt an optional
    second exam to improve as many as three subjects, and science may be one of them. The 2027 schedule had not been
    published at the time of writing, so watch cbse.gov.in and treat the main exam as the one that counts. Our
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> maps out the session.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jms-nine">What is the new Class 9 science book, and what does it weigh?</h2>
  <p>
    From 2026-27 CBSE follows <em>Exploration</em>, NCERT's new Class 9 textbook. The yearly exam keeps 80 marks plus
    20 internal, divided into four units: Matter, its nature and behaviour (27), World of living (25), Motion, force,
    work and sound (23) and Earth as a system (5). Hand-me-down notes match the previous book, so ask the tutor to
    plan from the new chapter list. More on our
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jms-icse">How should a tutor approach ICSE science?</h2>
  <p>
    ICSE treats Class 10 science as three subjects. Physics, Chemistry and Biology each have a CISCE paper of their
    own, and each carries its own internal marks. Because schools pick books within the CISCE syllabus, the tutor
    must teach from your child's texts and CISCE specimen papers instead of following the NCERT order. Marks in ICSE
    come from precise definitions and numericals worked to the end. Some families need support in just one of the
    three papers, commonly from Class 9 onwards. ICSE science specialists are scarcer than CBSE ones, so mention the
    board at the start; online lessons can widen the field.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jms-habits">Five written habits a science tutor should make automatic</h2>
  <p>
    Diagrams and equations reward patience and punish haste. Whatever the board, these should be repeated until your
    child does them unprompted:
  </p>
  <ol>
    <li><strong>Ray diagrams for mirrors and lenses</strong>: every ray arrowed, virtual rays dotted.</li>
    <li><strong>Circuit diagrams</strong>: standard symbols, the ammeter in series, the voltmeter in parallel.</li>
    <li><strong>Body-system diagrams</strong>: the heart, the alimentary canal and the nephron, labels spelled right.</li>
    <li><strong>Chemical equations</strong>: balanced, with state symbols when the question wants them.</li>
    <li><strong>Genetic crosses</strong>: the full working, not just a ratio at the end.</li>
  </ol>
  <p>
    During the free demo, let the tutor teach this week's chapter and see whether these habits surface on their own.
    Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> adds more
    pointers. A mismatch simply means a demo with another shortlisted tutor, and changing tutor later is also free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jms-where">Six colonies on the left bank: what to arrange for an after-school science hour</h2>
  <p>
    Younger students usually fit science between coming home and the evening meal, so the tutor's route needs to be
    short and dependable. These six colonies, spread over three zones south of the Tawi, show the practical details.
    Each colony has its own page, linked from our <a href="{{ url('/city/jammu') }}">Jammu page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Near Jammu Tawi station</h3>
      <p>
        {!! $jmsA('shastri-nagar', 'Shastri Nagar') !!} includes a Housing Board colony and is a ward of its own;
        homes are houses and flats, with two bedrooms the usual size. If several families share an entrance, leave
        the tutor's name there. Neighbouring {!! $jmsA('nanak-nagar', 'Nanak Nagar') !!} is mainly plotted houses,
        and the road via Khalsa Chowk helps a newcomer find the lane.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Channi Himmat and Bathindi</h3>
      <p>
        Housing Board sectors give {!! $jmsA('channi-himmat', 'Channi Himmat') !!} a simple address system: sector,
        then house number. In {!! $jmsA('bathindi', 'Bathindi') !!}, spelled Bhatindi on many signs, new apartment
        buildings stand beside houses; Bhatindi Morh, where the area meets NH-44, is the landmark to give, and some
        gates keep a sign-in book.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Sainik Colony and Greater Kailash</h3>
      <p>
        {!! $jmsA('sainik-colony', 'Sainik Colony') !!} spans two municipal wards of mostly independent houses, and
        new homes are still going up in the Extension. {!! $jmsA('greater-kailash', 'Greater Kailash') !!} mixes
        houses with apartment blocks near local shops; its chowk, which it shares in name with Trikuta Nagar, fills
        up in the evening, so set the hour before or after the rush.
      </p>
    </div>
  </div>
  <p>
    Zone guides for <a href="{{ url('/city/jammu/zone/trikuta-channi') }}">Trikuta and Channi</a> and
    <a href="{{ url('/city/jammu/zone/kunjwani-sainik-colony') }}">Kunjwani and Sainik Colony</a> give further
    landmarks, and our <a href="{{ url('/blog/jammu-home-tuition-guide') }}">Jammu home tuition guide</a> also covers
    the old city side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jms-fees">What will a science home tutor in Jammu charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Rates are set by tutors
    themselves. Within Classes 6 to 10, a Class 10 board year generally costs more than support lower down, and the
    journey to your colony and the weekly number of lessons make a difference as well. You can compare all the fees
    before any demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jms-ask">What goes into your message to us?</h2>
  <p>
    Include the class, the board, the part of science that causes most trouble, your colony and a landmark, and the
    afternoons you can offer. Our reply names two or three suitable science tutors with fees; you pick whom to meet
    for the free demo. Anyone joining as a tutor first passes an <a href="{{ url('/how-we-verify-tutors') }}">ID
    check</a>. If the right person cannot get to you at the hour you need, we suggest lessons online or a mix of the
    two. NXTutors is based in Sector 66, Gurugram, and teaches online throughout India.
  </p>
  <p>
    Older students can look at our <a href="{{ url('/maths-home-tutor-jammu') }}">maths</a>,
    <a href="{{ url('/chemistry-home-tutor-jammu') }}">chemistry</a> and
    <a href="{{ url('/biology-home-tutor-jammu') }}">biology</a> pages for Jammu. Teachers in Jammu who would like
    science students nearby can browse the <a href="{{ url('/tuition-jobs/jammu') }}">Jammu tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
