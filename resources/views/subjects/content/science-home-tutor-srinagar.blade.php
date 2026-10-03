{{--
  Long-form guide for the "science home tutor Srinagar" page (Classes 6 to 10,
  CBSE, ICSE and JKBOSE in general terms). Byline in config: Aaditya Kashyap;
  role statement only, no anecdotes. Local facts come only from
  database/seo-content/areas/srinagar-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39 questions
  by type, 30/25/25 split, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, school-assessed topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science as already stated on the Delhi and Patna science pages.
  Jammu and Kashmir Board of School Education: name, Secondary School
  Examination, syllabus page and JKBOSE textbooks for Classes 1 to 10, from
  https://jkbose.jk.gov.in/ (fetched 3 Oct 2026); no JKBOSE pattern given.
  Strictly practical and educational: winter only as timing advice. No
  school, college, hospital, society or people's names, no distances or
  travel times, only the allowed fee sentence.

  Area links render only when that Srinagar area page exists and is active.
--}}
@php
  $sgsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $sgsA = function (string $slug, string $label) use ($sgsSlugs) {
      return in_array($slug, $sgsSlugs, true)
          ? '<a href="' . e(url('/city/srinagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide sgs-guide" aria-labelledby="sgsGuideTitle">
  <h2 id="sgsGuideTitle">Science home tutor in Srinagar for Classes 6 to 10: the school's own book, a dependable slot, and answers set out for the marker</h2>

  <p class="nx-guide__lede">
    Over the years from Class 6 to Class 10, school science grows from noticing how plants and magnets behave into three separate disciplines, each with its own numericals, equations and diagrams. In Srinagar, children meet that
    change through different books: the JKBOSE textbooks, NCERT for CBSE, or the texts an ICSE school picks. A science
    tutor has to teach from the book your child actually carries, reach your home at a steady hour after school, and
    build exam-style answer writing well before the board year. NXTutors suggests two or three science tutors who can
    do all of that, shows each fee in advance, and the opening lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#sgs-stage">Stage by stage</a> ·
    <a href="#sgs-jk">JKBOSE science</a> ·
    <a href="#sgs-units">Class 10 units</a> ·
    <a href="#sgs-qtypes">Question types</a> ·
    <a href="#sgs-internal">School-marked topics</a> ·
    <a href="#sgs-nine">Class 9</a> ·
    <a href="#sgs-icse">ICSE</a> ·
    <a href="#sgs-break">Winter break</a> ·
    <a href="#sgs-local">Six localities</a> ·
    <a href="#sgs-fees">Fees</a> ·
    <a href="#sgs-start">Starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="sgs-stage">What changes in school science between Class 6 and Class 10?</h2>
  <p>
    The CBSE and ICSE guidance on this page is written by Aaditya Kashyap. A science tutor's job is not the same in
    every class, and parents can check progress with one simple question at each stage:
  </p>
  <ul>
    <li><strong>Classes 6 and 7.</strong> CBSE students use NCERT's Curiosity books; JKBOSE and ICSE students use their school's text. The tutor's task is to turn each activity into a correct sentence and a neat, labelled sketch. Check: does your child use the scientific word rather than an everyday one?</li>
    <li><strong>Class 8.</strong> Physics, chemistry and biology start to separate, and numericals and word equations appear. Check: does a unit follow every number?</li>
    <li><strong>Class 9.</strong> The book gets steeper, as motion graphs, matter and the cell all arrive together. Check: are gaps closed within the month they appear?</li>
    <li><strong>Class 10.</strong> Every chapter now points at the board paper and its marking scheme. Check: has your child written a timed section under exam conditions?</li>
  </ul>
  <p>
    Until the end of Class 10 a single tutor for all three sciences tends to suit most children, since a single person can tell whether a
    physics numerical fails on arithmetic or on the idea itself. The national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page sets out our approach, and the
    <a href="{{ url('/science-home-tutor/class-6') }}">Class 6</a> and
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8</a> science tutor pages cover the earlier years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgs-jk">Your child is on the JKBOSE syllabus: what should the science tutor do?</h2>
  <p>
    The Jammu and Kashmir Board of School Education conducts the Secondary School Examination at the end of Class 10.
    Its official website, jkbose.jk.gov.in, carries the board's syllabus and a list of the textbooks it publishes for
    Classes 1 to 10. Because the board can change its scheme, this page does not describe a JKBOSE science paper;
    families and tutors should take the current details from that site.
  </p>
  <p>
    Three questions matter more for matching than any exam pattern. Will the tutor teach from the prescribed JKBOSE
    textbook rather than a guide written for another board? Will practice include the board's own model or past
    papers? And will diagrams, units and equations be drilled with the same care a CBSE tutor gives them? A tutor who
    answers yes to all three is a sound choice for a JKBOSE student at any class from 6 to 10.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgs-units">CBSE Class 10 science: where do the 80 board marks sit?</h2>
  <p>
    Candidates have three hours for an 80-mark board paper. Another 20 marks stay with the school, five apiece for periodic tests, multiple assessment, the portfolio, and subject enrichment through practicals. Split by discipline, the 80 give biology 30 and leave 25 each to chemistry and physics.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science units for 2026-27, their board marks, and the drill that protects those marks</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Drill that protects the marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances (reactions and equations; acids, bases, salts; metals, non-metals; carbon and its compounds)</td><td>25</td><td>Weekly balancing and naming practice, started early in the year</td></tr>
      <tr><td>World of Living (life processes; how organisms control and coordinate; reproduction; heredity)</td><td>25</td><td>Figures drawn from memory and labelled in full</td></tr>
      <tr><td>Effects of Current: circuits, resistance, magnetic effect</td><td>13</td><td>Numericals with the unit written on each line</td></tr>
      <tr><td>Natural Phenomena (reflection and refraction, the human eye, the colourful world)</td><td>12</td><td>Ray diagrams with arrowheads on every ray</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>Short, quick revision so the marks are never skipped</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Viewed by competency, 50% of the paper tests what a student knows and understands, 30% tests applying it, and the final 20% tests analysing and evaluating. Our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a>
    go chapter by chapter, while the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a>
    page describes how we plan the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgs-qtypes">Which question types does the Class 10 paper use, and how is each practised?</h2>
  <p>
    CBSE's 2026-27 sample paper has 39 questions. Each type wants a slightly different habit, so a tutor should train
    them separately:
  </p>
  <ol>
    <li><strong>Twenty one-mark questions</strong>, a mix of multiple choice and assertion and reason. Practise fast recall and reading both statements before choosing.</li>
    <li><strong>Six two-mark short answers.</strong> Practise writing exactly as many separate points as there are marks.</li>
    <li><strong>Seven three-mark answers.</strong> Practise one point per mark, with a diagram or equation where it saves words.</li>
    <li><strong>Three four-mark case or source questions.</strong> Practise reading the passage or data first and answering from it.</li>
    <li><strong>Three five-mark long answers.</strong> Practise a labelled diagram or balanced equation plus four or five clear points.</li>
  </ol>
  <p>
    CBSE publishes sample papers and marking schemes on cbseacademic ahead of the exam, and they remain the most
    dependable practice material.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgs-internal">Which topics are marked by the school, and how many Class 10 exams are there?</h2>
  <p>
    In 2026-27 the school, not the board paper, examines three topics: electromagnetic induction with the motor and generator, evolution, and how the periodic table arranges elements. Because these count internally and reappear in Class 11, a tutor should teach them properly while keeping board revision for other chapters. CBSE also names 14 experiments that board questions can be built on, so revising the practical file is revising for the paper.
  </p>
  <p>
    Every CBSE Class 10 student takes a compulsory main exam, and those eligible may sit an optional second exam to raise the result in as many as three subjects, and science may be one of them. The 2027 dates will appear on cbse.gov.in; until then, treat the main exam as the one that counts. The <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a>
    lays out the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgs-nine">Why does Class 9 science need a fresh plan this year?</h2>
  <p>
    From 2026-27, Class 9 students study from NCERT's new textbook, Exploration. The year-end exam keeps the 80 plus 20 shape, and its four units weigh in at 27 for matter and how it behaves, 25 for the living world, 23 for motion, force, work and sound, and 5 for Earth as a system. Hand-me-down notes were written for the old book, so plans should start from the new chapter list. More on the
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgs-icse">How is ICSE science different to teach?</h2>
  <p>
    CISCE sets three separate science papers at ICSE Class 10, Physics, Chemistry and Biology, and each carries its own internal assessment. Each school picks its own textbooks within the CISCE syllabus, so the tutor should teach from your child's books and CISCE's specimen papers instead of following NCERT. Precise wording in definitions and fully worked numericals earn the marks. Often a family wants help in just one of the three, usually starting in Class 9. Fewer tutors know ICSE science well, so ask early; online lessons widen the field.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgs-break">How can the winter break be used for science?</h2>
  <p>
    Srinagar's long winter break and short December and January days usually move lessons earlier in the day or partly
    online. Science suits that change well if the break is given a clear purpose:
  </p>
  <ul>
    <li><strong>A diagram bank.</strong> Every diagram from the year's chapters redrawn from memory, labelled, and checked by the tutor.</li>
    <li><strong>An equation sheet.</strong> All the reactions met so far, balanced, with state symbols where the chapter asks for them.</li>
    <li><strong>A numericals log.</strong> One page per physics topic with three solved problems and the unit on every line.</li>
    <li><strong>The practical file.</strong> Aim, method, observation table and precautions reviewed for each listed experiment.</li>
  </ul>
  <p>
    Online sessions work well for this kind of checking if the notebook is photographed and sent before the lesson.
    Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> comparison has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgs-local">How does your locality shape the after-school science slot?</h2>
  <p>
    Younger students usually have tuition in the gap after school and before dinner, so what matters most is that the tutor's journey is short and the same every week. Six localities from three parts of Srinagar show what to arrange; the
    <a href="{{ url('/city/srinagar') }}">Srinagar page</a> covers the rest.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Srinagar localities: the setting, the after-school timing that tends to work, and what to tell the tutor</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Setting</th><th scope="col">Timing</th><th scope="col">Tell the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $sgsA('lal-chowk', 'Lal Chowk') !!}</td><td>The central business district; families live in lanes and older houses behind the shopfronts</td><td>Late afternoon or evening, once shops and offices thin out</td><td>The lane name and a landmark</td></tr>
      <tr><td>{!! $sgsA('sonwar', 'Sonwar') !!}</td><td>Sonwar Bagh along the Jhelum, made up of parts such as Iqbal Colony, Indira Nagar and Hamza Colony</td><td>Outside school times, when the main road is crowded</td><td>Which part of Sonwar; inner colonies are quieter</td></tr>
      <tr><td>{!! $sgsA('karan-nagar', 'Karan Nagar') !!}</td><td>A government-planned residential area west of the centre, with a large institutional campus among the homes</td><td>After-school, with a little margin for daytime traffic</td><td>The lane name or a nearby landmark</td></tr>
      <tr><td>{!! $sgsA('batamaloo', 'Batamaloo') !!}</td><td>An old locality of market roads and family lanes, once home to the city's main bus stop</td><td>After the morning market rush and before the evening return</td><td>Check local event days before fixing the demo</td></tr>
      <tr><td>{!! $sgsA('peerbagh', 'Peerbagh') !!}</td><td>Residential colonies on the airport side of the south-west, next to Hyderpora</td><td>Away from the morning and early-evening rush on the main road</td><td>Your colony name; side lanes are the easier way in</td></tr>
      <tr><td>{!! $sgsA('rawalpora', 'Rawalpora') !!}</td><td>Houses in colony lanes, with no gate formalities for a visitor</td><td>Mid-afternoon or after the evening rush near the bypass</td><td>Tutors from the Nowgam side can use the small bridge by the Doodhganga railway bridge</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgs-fees">How much does a science home tutor in Srinagar cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Rates are set by tutors themselves. Class 10 board preparation usually costs more than help in Classes 6 to 8, and travel to your area and lessons per week make a difference too. All fees are on view before the demo; the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explains the factors.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgs-start">How do you get a science shortlist?</h2>
  <p>
    Share the class, the board, the branch of science that troubles your child, your locality plus a landmark, and the afternoons that are free, noting any change over the winter break. A shortlist of two or three science tutors arrives with fees attached; choose one for a free demo. Should that tutor not suit, another from the list gives the next demo, and changing tutor later is also free. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. If nobody suitable can come at your time, we propose lessons that are partly or wholly online. Our office is in Sector 66, Gurugram, and online lessons run nationwide; for the next subject up, see our
    <a href="{{ url('/maths-home-tutor-srinagar') }}">maths home tutor in Srinagar</a> page.
  </p>
  <p>
    Science teachers in Srinagar who want students near home can view open requests on the
    <a href="{{ url('/tuition-jobs/srinagar') }}">Srinagar tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
