{{--
  Long-form guide for the "science home tutor Faridabad" page (Classes 6 to 10,
  CBSE, ICSE and HBSE in general terms). Byline in config: Aaditya Kashyap;
  role statement only, no anecdotes. Local facts come only from
  database/seo-content/areas/faridabad-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions, 30/25/25 sections, 50/30/20 competencies, formative-only topics,
  14 listed experiments, two exams) and cbse-class-10-board-year-plan-gurgaon,
  plus the Class 9 Exploration textbook, 2026-27 Class 9 unit marks and ICSE
  three-paper science as already stated on the Ghaziabad and Gurgaon science
  pages. HBSE is described generally only (board name and seat from
  bseh.org.in). No school, society or developer names, no distances or travel
  times, only the allowed fee sentence.

  Area links render only when that Faridabad area page exists and is active.
--}}
@php
  $fdAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $fdA = function (string $slug, string $label) use ($fdAreaSlugs) {
      return in_array($slug, $fdAreaSlugs, true)
          ? '<a href="' . e(url('/city/faridabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide fds-guide" aria-labelledby="fdsGuideTitle">
  <h2 id="fdsGuideTitle">Science home tutor in Faridabad, Classes 6 to 10: one subject, three strands, many boards</h2>

  <p class="nx-guide__lede">
    A good science tutor for a Faridabad child in Classes 6 to 10 does three jobs at once. They teach from the
    textbook and board your child actually follows, whether that is CBSE, ICSE or the Haryana board. They keep
    physics, chemistry and biology moving together, so one strand does not fall behind. And they turn up at the same
    after-school hour every week, whether you live near a Violet Line station on Mathura Road or across the Agra
    canal in Greater Faridabad. NXTutors shortlists two or three science tutors on those grounds. You see every fee
    before you meet anyone, and the first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#fds-board">Board and book</a> ·
    <a href="#fds-cbse10">CBSE Class 10 paper</a> ·
    <a href="#fds-cbse9">Class 9 in 2026-27</a> ·
    <a href="#fds-other">ICSE and HBSE</a> ·
    <a href="#fds-slots">Six localities, six slots</a> ·
    <a href="#fds-rhythm">How often, how long</a> ·
    <a href="#fds-watch">Watching the demo</a> ·
    <a href="#fds-fees">Fees</a> ·
    <a href="#fds-start">Starting out</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="fds-board">Which book and board should a Faridabad science tutor teach from?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE science guidance in this guide. Our first question to any family is
    simple: which board, which class, and which book is on the desk this year? A science tutor who brings last
    year's guidebook to a class that has moved to a new text wastes the first month.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science tuition in Faridabad by board and class: what is assessed and what the tutor should bring to each lesson</caption>
    <thead>
      <tr><th scope="col">Board and class</th><th scope="col">What is assessed</th><th scope="col">What the tutor brings</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Classes 6 and 7</td><td>School work from NCERT <em>Curiosity</em>, which is activity-led</td><td>Precise terms, simple home observations, a labelled sketch in every answer</td></tr>
      <tr><td>CBSE Class 8</td><td>School tests as physics, chemistry and biology begin to separate</td><td>Units on every quantity; word equations that balance</td></tr>
      <tr><td>CBSE Class 9</td><td>A yearly paper based on the new NCERT <em>Exploration</em></td><td>Graphs of motion, valency and cell biology taught from the current chapters</td></tr>
      <tr><td>CBSE Class 10</td><td>Board paper of 80 marks, school assessment of 20</td><td>Timed practice on application questions, section by section</td></tr>
      <tr><td>ICSE Classes 9 and 10</td><td>Physics, Chemistry and Biology as three papers</td><td>Exact definitions and fully worked numericals from the school's own books</td></tr>
      <tr><td>HBSE</td><td>Set by the Board of School Education Haryana</td><td>The student's HBSE textbooks and the board's current notices</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The national <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page explains how we approach the
    subject across India.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fds-cbse10">What does the CBSE Class 10 science paper reward in 2026-27?</h2>
  <p>
    Candidates write a three-hour board paper for 80 marks, and the school adds 20: periodic assessment, multiple
    assessment, the portfolio and practical work count equally towards that 20. In the 2026-27 sample paper the 39
    questions fall into three subject sections, with 30 marks for biology and 25 each for chemistry and physics.
  </p>
  <p>
    By competency, 50% of the paper checks knowledge and understanding, 30% checks application, and 20% asks for
    analysis, evaluation and creation. Half the marks, then, go to using an idea rather than repeating it, and a
    tutor's weekly questions should be set in that proportion. Three more points shape the year:
  </p>
  <ol>
    <li><strong>Some topics stay in school.</strong> Periodic classification, evolution, and the electric motor, electromagnetic induction and the generator are assessed formatively and are not in the board paper. Tutors working from older guides may still drill them.</li>
    <li><strong>The practical file doubles as revision.</strong> The curriculum lists 14 experiments, and the board paper includes questions built on them.</li>
    <li><strong>Two sittings exist; plan for one.</strong> From 2026 there is a compulsory main exam and an optional second one in which a student can try to improve up to three subjects, science among them. Dates for 2027 have not been announced; follow cbse.gov.in.</li>
  </ol>
  <p>
    For chapter notes, read our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science
    notes</a>; the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page lays out a
    board-year plan, and the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">Class 10 board-year
    planner</a> covers all subjects together.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fds-cbse9">Why does Class 9 science need a fresh start this year?</h2>
  <p>
    NCERT's new Class 9 textbook is called <em>Exploration</em>, and CBSE's curriculum for 2026-27 is built on it.
    The yearly exam is still 80 marks plus 20 internal. The four units carry these marks: Matter: its nature and
    behaviour, 27; World of living, 25; Motion, force, work and sound, 23; and Earth as a system, 5.
  </p>
  <p>
    Hand-me-down notes may follow the old chapter order, so the tutor should plan from the new book. School
    practicals include mounts of onion peel and cheek cells, separation of mixtures, and distance-time and
    velocity-time graphs. When a tutor explains why each set-up works, the related theory questions become easier.
    Our <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page follows the new chapters.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fds-other">What if your child is on ICSE or the Haryana board?</h2>
  <h3>ICSE</h3>
  <p>
    ICSE students take Class 10 science as three separate papers, each with theory and internal assessment. Marks
    slip through loose definitions, unfinished numericals and the sheer amount of content. Schools pick their own
    books within the CISCE syllabus, so a tutor should teach from those books and CISCE specimen papers rather than
    NCERT. Some families add targeted help in the weakest of the three from Class 9. ICSE-experienced science tutors
    are fewer, so ask early; online sessions widen the choice.
  </p>
  <h3>HBSE</h3>
  <p>
    Some Faridabad students study under the Board of School Education Haryana, which is based in Bhiwani. We keep
    our advice general here: the board sets its own syllabus and exam arrangements and posts updates on
    bseh.org.in. Ask a prospective tutor whether they have taught HBSE science and which books they use, and do not
    assume a CBSE plan transfers unchanged.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fds-slots">How easy is an after-school science slot in different parts of Faridabad?</h2>
  <p>
    For a child in middle school, science tuition has to fit between school, play and homework, usually late in the
    afternoon. The six localities below, one from six of our seven zones, show how the practical side changes. See
    nearby tutors for any locality on our <a href="{{ url('/city/faridabad') }}">Faridabad page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Getting a science tutor to the door in six Faridabad localities</caption>
    <thead>
      <tr><th scope="col">Locality (zone)</th><th scope="col">Homes</th><th scope="col">How a tutor gets there</th><th scope="col">What helps the slot hold</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $fdA('jawahar-colony', 'Jawahar Colony') !!} (NIT &amp; Old Faridabad)</td><td>Independent houses and small flats in an older, closely built pocket</td><td>Violet Line along Mathura Road, then a short auto ride; two-wheelers suit the lanes</td><td>A slot soon after school or on a weekend morning</td></tr>
      <tr><td>{!! $fdA('sector-16a', 'Sector 16A') !!} (Central Sectors)</td><td>Mainly independent houses in a compact sector</td><td>Old Faridabad metro station is inside the sector; Faridabad railway station is next door in 20A</td><td>Tutors without a car can still keep a weekly hour</td></tr>
      <tr><td>{!! $fdA('sector-46', 'Sector 46') !!} (Surajkund &amp; Sainik Colony)</td><td>Apartment complexes, builder floors and plotted houses near the Aravalli</td><td>Sector 28 station, then an auto, or own vehicle</td><td>Register the tutor at complex gates; plotted homes are doorstep visits</td></tr>
      <tr><td>{!! $fdA('sector-2', 'Sector 2') !!} (Ballabhgarh &amp; Southern Sectors)</td><td>Houses and builder floors on HSVP plots, some authority flats</td><td>Two-wheeler from Ballabhgarh, or Raja Nahar Singh metro and an auto</td><td>Early-evening or weekend classes</td></tr>
      <tr><td>{!! $fdA('sector-76', 'Sector 76') !!} (Greater Faridabad, 75–80)</td><td>Gated-society flats, builder floors and some plots</td><td>Across the canal; Sant Surdas (Sihi) or Escorts Mujesar and an auto</td><td>Share gate-entry details before the demo</td></tr>
      <tr><td>{!! $fdA('sector-87', 'Sector 87') !!} (Greater Faridabad, 81–89)</td><td>Plots, builder floors, houses and newer apartments</td><td>Near the Kheri Road canal crossing, so easier from the old city</td><td>Confirm doorstep or gate entry before the first class</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The pattern is clear from the table. West of the canal, the Violet Line runs the length of the old city, from
    Sarai in the north to Raja Nahar Singh in Ballabhgarh, so a tutor living near almost any station can reach the
    central and southern sectors without a car. East of the canal, in Neharpar, there is no station, and a tutor who
    lives in the same group of sectors is often the steadiest choice for a weekday class.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fds-rhythm">How many science sessions a week does a child need?</h2>
  <p>
    It depends on the class more than on the child. A rough guide:
  </p>
  <ul>
    <li><strong>Classes 6 and 7:</strong> one session a week, sometimes two before exams. The aim is habit: exact words, labelled diagrams and units.</li>
    <li><strong>Class 8:</strong> one or two, as the three strands start to pull apart and numericals appear.</li>
    <li><strong>Class 9:</strong> two, because new vocabulary, graphs and chemistry arrive at the same time.</li>
    <li><strong>Class 10:</strong> two or three for CBSE, often with one online for timed papers. ICSE families sometimes split the week by paper.</li>
  </ul>
  <p>
    For CBSE up to Class 10, one tutor covering all three strands usually works, because a single person can see
    how a weak step in one strand spills into another. A child who keeps losing physics numericals when rearranging a
    formula may need algebra practice more than more physics. Bring in a specialist only when marks point clearly to
    one strand.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fds-watch">What should parents watch for during the free demo?</h2>
  <p>
    Ask for an ordinary lesson on the chapter your child is on this week, then notice:
  </p>
  <ul>
    <li>whether the tutor asks what the class has covered and opens your child's own book;</li>
    <li>whether your child writes, draws and labels, or simply listens;</li>
    <li>whether each numerical is set out as formula, substitution with units, then answer with its unit;</li>
    <li>whether the tutor asks your child to predict or explain a result, which is the skill competency questions test;</li>
    <li>whether you leave with a plan and a date for the first short test.</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> adds more
    points. If the match is wrong, we set up the next tutor's demo, and switching later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fds-fees">What will a science home tutor in Faridabad cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors choose their
    own rates. Within Classes 6 to 10, board-year teaching generally costs more than middle-school support, and a
    specialist in one strand more than a general science tutor. The trip to your zone at your hour and the number of
    sessions also count. Fees appear before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fds-start">How do you get started?</h2>
  <p>
    Share the class and board, the part of science that is giving trouble, your sector, colony or society, and the
    after-school hours that suit you. We send two or three matched science tutors with their fees, and you pick one
    for a free demo class. If nobody suitable can reach you at that hour, we suggest online or mixed sessions.
    NXTutors also teaches online across India, and its office is in Sector 66, Gurugram.
  </p>
  <p>
    Science teachers who live in Faridabad and want students close by can see open requests on the
    <a href="{{ url('/tuition-jobs/faridabad') }}">Faridabad tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
