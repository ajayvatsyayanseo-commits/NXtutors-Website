{{--
  Long-form guide for the "science home tutor Mumbai" page (Classes 6 to 10,
  CBSE and ICSE, with the Maharashtra State Board described in general terms
  only). Byline in config: Aaditya Kashyap; role statement only, no anecdotes.
  Local facts come only from database/seo-content/areas/mumbai-research.json
  (zone_facts and the "about" texts for dadar, juhu, borivali-west, mulund,
  manpada and kharghar). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions by type, 30/25/25 sections, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, formative-only topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science as already stated on the Delhi, Faridabad and Ghaziabad
  science pages. No school, society, mall or people's names, no roads named
  after people, no distances or travel times, only the allowed fee sentence.

  Area links render only when that Mumbai area page exists and is active.
--}}
@php
  $mumsAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $mumsA = function (string $slug, string $label) use ($mumsAreaSlugs) {
      return in_array($slug, $mumsAreaSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide mums-guide" aria-labelledby="mumsGuideTitle">
  <h2 id="mumsGuideTitle">Science home tutor in Mumbai for Classes 6 to 10: the right textbook, a steady slot, and board-ready answers</h2>

  <p class="nx-guide__lede">
    For a child between Class 6 and Class 10, a science tutor does two jobs. The first is to teach from the book on
    the desk, which in Mumbai may be NCERT, a CISCE-listed text or a Maharashtra State Board textbook. The second is to
    turn good understanding into answers that score: the precise term, the labelled diagram, the unit after every
    number. Both depend on a tutor who can reach your home at the same after-school hour each week. NXTutors sends two
    or three science tutors who fit your board and neighbourhood, with each fee shown up front, and the first class
    is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#mums-book">Board and book</a> ·
    <a href="#mums-middle">Classes 6 to 9</a> ·
    <a href="#mums-ten">The Class 10 paper</a> ·
    <a href="#mums-school">School-only topics</a> ·
    <a href="#mums-icse">ICSE's three papers</a> ·
    <a href="#mums-near">Six neighbourhoods</a> ·
    <a href="#mums-demo">Watching the demo</a> ·
    <a href="#mums-fees">Fees</a> ·
    <a href="#mums-next">Next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="mums-book">Which board and which book does your child's science follow?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE science guidance on this page. Start any request by naming the board,
    because the three common in Mumbai organise Class 10 science quite differently.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 science on the three boards most Mumbai families use, and what that means when choosing a tutor</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Books</th><th scope="col">How Class 10 science is examined</th><th scope="col">Look for a tutor who</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>NCERT</td><td>One 80-mark board paper with biology, chemistry and physics sections, plus 20 internal marks</td><td>Can balance all three strands and mark against CBSE's scheme</td></tr>
      <tr><td>ICSE</td><td>Chosen by each school within the CISCE syllabus</td><td>Separate Physics, Chemistry and Biology papers, each with internal assessment</td><td>Teaches from your school's books and CISCE specimen papers</td></tr>
      <tr><td>Maharashtra State Board (SSC)</td><td>State-prescribed textbooks</td><td>Set by the state board; check the current scheme on its official website</td><td>Has taught the current state textbooks and uses the board's own papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The national <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page explains how we match in
    every city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mums-middle">What should science tuition build in Classes 6 to 9?</h2>
  <p>
    The early years are about habits, not marks. In Classes 6 and 7, NCERT's <em>Curiosity</em> books are built
    around activities, and a tutor's job is to help a child describe each one in a proper scientific sentence and a
    labelled sketch. Class 8 is where physics, chemistry and biology begin to separate, numericals first appear and
    units stop being optional; the <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> page
    covers that year.
  </p>
  <p>
    Class 9 on CBSE now uses NCERT's new book, <em>Exploration</em>, and the 2026-27 curriculum keeps the familiar
    split of 80 marks for the yearly exam and 20 internal. The 80 are divided across four units:
  </p>
  <ul>
    <li><strong>Matter: its nature and behaviour</strong>, 27 marks</li>
    <li><strong>World of living</strong>, 25 marks</li>
    <li><strong>Motion, force, work and sound</strong>, 23 marks</li>
    <li><strong>Earth as a system</strong>, 5 marks</li>
  </ul>
  <p>
    Notes passed down from an older sibling follow the previous book, so plan from the new chapters. School practicals
    in Class 9 include onion-peel and cheek-cell slides, separating mixtures and drawing motion graphs, and a tutor
    who explains why each set-up works makes the matching theory much easier. See the
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mums-ten">What does the CBSE Class 10 science paper look like for 2026-27?</h2>
  <p>
    It is a three-hour paper for 80 marks, and the school adds 20 internal marks in four parts of 5: periodic
    assessment, multiple assessment, portfolio, and subject enrichment through practicals. Biology takes 30 of the
    80, chemistry and physics 25 each. Marks by unit:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science units for 2026-27, with their board marks and a weekly focus for home tuition</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Weekly focus at home</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances: Nature and Behaviour</td><td>25</td><td>Balanced equations and reaction types, written without prompting</td></tr>
      <tr><td>World of Living</td><td>25</td><td>Labelled diagrams and process answers in the right order</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>Circuit numericals with units on every line</td></tr>
      <tr><td>Natural Phenomena</td><td>12</td><td>Ray diagrams with arrows, drawn to the question</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>Short answers and examples, revised in bursts</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CBSE's sample paper sets 39 questions. Twenty carry one mark each and include assertion–reason items; six are
    worth two marks, seven are worth three, three case- or source-based questions carry four, and three long answers
    carry five. Half the paper tests knowledge and understanding, 30% tests application, and 20% asks for analysis and
    evaluation, so a tutor who only dictates notes is preparing for half the paper. Our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> go chapter by chapter, and the
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page sets out the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mums-school">Which Class 10 topics stay with the school, and why does the practical file matter?</h2>
  <p>
    For 2026-27, three topics are assessed by the school only and do not appear on the board paper: electromagnetic
    induction with the electric motor and generator, evolution, and the periodic classification of elements. They
    still count internally and return in Class 11, so they need teaching, just not in the final revision weeks.
  </p>
  <p>
    The curriculum lists 14 experiments, and board questions are built around them, so the practical file doubles as
    revision. Every Class 10 student sits the main exam; a later, optional sitting lets eligible students improve up
    to three subjects, science included. The 2027 dates are not out yet, so check cbse.gov.in and plan around the
    main exam. The <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> lays out
    the months.
  </p>
  <p>
    Sample papers deserve a plan of their own. CBSE posts them with marking schemes on cbseacademic, and they are the
    surest guide to the current design. Through the first half of the session, one section at the end of each
    chapter, scored against the official scheme, shows a child exactly where marks are given. From late autumn, full
    papers under a three-hour clock take over, with one strand reviewed in depth each week. Older board papers are
    useful extra practice, but they carry fewer competency questions than the present design.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mums-icse">How should ICSE science be handled with three separate papers?</h2>
  <p>
    ICSE Class 10 science is examined as Physics, Chemistry and Biology, each with its own internal assessment. A tutor
    has to follow the textbooks your school has picked and practise with CISCE specimen papers, because an NCERT plan
    will not line up. Marks usually slip on loose definitions and half-finished numericals. Many ICSE families bring
    in a tutor for just the weakest of the three from Class 9. ICSE-experienced science tutors are fewer than CBSE
    ones, so ask early; if no one nearby is free, online sessions widen the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mums-near">How do science tutors reach families in six Mumbai neighbourhoods?</h2>
  <p>
    With a younger child the class usually falls between school and dinner, so a short and predictable trip for the
    tutor matters most. These six neighbourhoods, from the island city to Navi Mumbai, show how arrangements vary.
    Compare tutors near you on our <a href="{{ url('/city/mumbai') }}">Mumbai page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Island city and western suburbs</h3>
      <p>
        {!! $mumsA('dadar', 'Dadar') !!} grew from the Bombay Improvement Trust's plan of 1899–1900, and its older
        colonies still have low and mid-rise buildings on regular streets, where tutors rarely face gate formalities.
        It is the only station shared by the Central and Western lines, so tutors from almost any suburb arrive
        directly. {!! $mumsA('juhu', 'Juhu') !!} has no station of its own; tutors ride to Santacruz, Vile Parle or
        Andheri and take an auto. Standalone homes mean a knock at the door, while apartment buildings ask for the
        tutor's name at the gate. {!! $mumsA('borivali-west', 'Borivali West') !!} is mostly cooperative-society
        flats; with Borivali station a terminus for many trains and four Line 2A metro stops on the west side, tutors
        have plenty of ways in.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Central suburbs and Thane</h3>
      <p>
        {!! $mumsA('mulund', 'Mulund') !!}, the last suburb before Thane, was laid out from 1922 on a grid of
        streets running out from the station. Tutors from Thane, Bhandup and along the Central line walk or take an
        auto from Mulund station, and most societies have a watchman who records visitors.
        {!! $mumsA('manpada', 'Manpada') !!}, just off Ghodbunder Road in Thane West, is mostly gated mid-rise and
        high-rise complexes. Its Metro Line 4 station is still being built, so tutors come by road; adding the tutor
        to the visitor list or security app saves time each week.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Navi Mumbai</h3>
      <p>
        {!! $mumsA('kharghar', 'Kharghar') !!} is a CIDCO-planned node of numbered sectors, mostly apartment complexes
        and cooperative housing societies. Kharghar station is on the Harbour line, and Navi Mumbai Metro Line 1 has
        several stations inside the node, which helps tutors reach sectors away from the railway. Register a regular
        tutor with security in gated towers.
      </p>
    </div>
  </div>
  <p>
    Evening office crowds build around big stations such as Dadar and Borivali, and along Ghodbunder Road, so a
    slot fixed just before or after that rush usually holds steady through the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mums-demo">During the free demo, what should you watch for?</h2>
  <p>
    Ask the tutor to teach whatever chapter the class is on, then notice whether they press for these habits:
  </p>
  <ol>
    <li><strong>Exact vocabulary.</strong> "Alveoli" rather than "air sacs", "oesophagus" rather than "food pipe".</li>
    <li><strong>Equations that balance.</strong> With state symbols such as (s), (aq) and (g) when the question asks for them.</li>
    <li><strong>Ray diagrams with arrows.</strong> And virtual rays drawn dotted, not solid.</li>
    <li><strong>Heredity worked through a cross.</strong> A ratio with no Punnett square seldom earns every mark.</li>
    <li><strong>Answers sized to marks.</strong> Three separate points for three marks; a diagram or equation plus four or five points for five.</li>
  </ol>
  <p>
    Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> lists more
    to look for. If the fit is wrong, pick another tutor from your shortlist; switching later is free too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mums-fees">What should you expect to pay a science tutor in Mumbai?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    rates. For Classes 6 to 10, board-year teaching usually costs more than middle-school help, and the journey to
    your neighbourhood and the number of weekly sessions also count. Each shortlisted fee is on screen before the
    demo; our <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">Mumbai home tuition fees guide</a> explains more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mums-next">How do you get a science tutor matched?</h2>
  <p>
    Tell us the class and board, the strand that is causing trouble, your neighbourhood and nearest station, and the
    afternoons that work. You receive two or three science tutors with their fees and choose one for a free demo
    class. Where nobody suitable can travel at your time, we suggest online or mixed lessons. NXTutors works from
    Sector 66, Gurugram, and teaches online anywhere in India.
  </p>
  <p>
    Science teachers who live in Mumbai, Thane or Navi Mumbai can find student requests near them on the
    <a href="{{ url('/tuition-jobs/mumbai') }}">Mumbai tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
