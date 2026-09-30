{{--
  Long-form guide for the "science home tutor Pune" page (Classes 6 to 10,
  CBSE, ICSE and the Maharashtra State Board in general terms). Byline in
  config: Aaditya Kashyap; role statement only, no anecdotes. Local facts come
  only from database/seo-content/areas/pune-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements already used on the
  Delhi and Faridabad science pages, taken from
  database/seo-content/blog/cbse-class-10-science-notes and
  cbse-class-10-board-year-plan-gurgaon (80 + 20, 39 questions, 30/25/25,
  unit marks, 50/30/20 competencies, formative-only topics, 14 experiments,
  two Class 10 exams, Class 9 Exploration unit marks, ICSE three papers).
  The state board is named and described generally only (SSC, own textbooks,
  no pattern). No school, society, mall or people's names, no roads named
  after people, no distances or travel times, only the allowed fee sentence.

  Area links render only when that Pune area page exists and is active.
--}}
@php
  $psAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $psA = function (string $slug, string $label) use ($psAreaSlugs) {
      return in_array($slug, $psAreaSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pns-guide" aria-labelledby="pnsGuideTitle">
  <h2 id="pnsGuideTitle">Science home tutor in Pune for Classes 6 to 10: the right textbook, the right habits, a slot that holds</h2>

  <p class="nx-guide__lede">
    School science in the middle years looks gentle, yet it quietly decides how a child copes with the Class 10
    paper. Children who learn early to use the exact term, label a diagram and write a unit after every number carry
    those habits into the board year. A science tutor for a Pune family therefore needs three things: comfort with the
    book your child uses, whether NCERT, an ICSE text or the state board's, patience with all three strands, and a
    route to your home that works on a school evening. NXTutors sends two or three science tutors who fit. Their fees
    are visible before any meeting, and the opening lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pns-book">Three kinds of textbook</a> ·
    <a href="#pns-years">Class by class</a> ·
    <a href="#pns-ten">The Class 10 paper</a> ·
    <a href="#pns-school">Marked in school</a> ·
    <a href="#pns-nine">Class 9 this year</a> ·
    <a href="#pns-where">Six neighbourhoods</a> ·
    <a href="#pns-demo">Judging the demo</a> ·
    <a href="#pns-fees">Fees</a> ·
    <a href="#pns-start">Starting out</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pns-book">Which science book is your child working from?</h2>
  <p>
    The CBSE and ICSE sections of this guide are written by Aaditya Kashyap. In Pune three families of textbook are
    common, and each needs a slightly different tutor:
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>CBSE and NCERT</h3>
      <p>
        One science subject up to Class 10, taught from NCERT books and examined in Class 10 as a single paper with
        biology, chemistry and physics sections. A tutor should plan from CBSE's current sample paper and its marking
        scheme.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>ICSE</h3>
      <p>
        CISCE examines Class 10 science as three separate papers, Physics, Chemistry and Biology, each with internal
        assessment. Schools pick their own books within the council's syllabus, so the tutor must teach from the one on
        your child's desk and from CISCE specimen papers.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Maharashtra State Board</h3>
      <p>
        Students on the Maharashtra State Board of Secondary and Higher Secondary Education sit the SSC at the end of
        Class 10 and learn from the state's prescribed textbooks. We describe the board only in general terms here; a
        tutor should take its syllabus and paper details from the board's official notices.
      </p>
    </div>
  </div>
  <p>
    Name the book when you ask for a tutor. ICSE-experienced science tutors are fewer than CBSE ones in every city,
    so an early request, or an online specialist, widens the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-years">How should science tuition change from Class 6 to Class 10?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science from Class 6 to Class 10: what is new each year and what a tutor should keep an eye on</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">What is new</th><th scope="col">What the tutor watches</th></tr>
    </thead>
    <tbody>
      <tr><td>6 and 7</td><td>NCERT's activity-led <em>Curiosity</em> books</td><td>Each activity ends in one clear sentence using the correct scientific word</td></tr>
      <tr><td>8</td><td>Physics, chemistry and biology begin to separate; first numericals and word equations</td><td>Units written every time, and labelled sketches</td></tr>
      <tr><td>9</td><td>A new book, <em>Exploration</em>, with motion graphs, the nature of matter and the cell</td><td>Gaps that open quickly in graphs and in the language of particles</td></tr>
      <tr><td>10</td><td>The board paper, where application and analysis carry half the marks</td><td>Answers sized to the marks, and timed sections from sample papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Up to the board year one tutor for all three strands is usually enough, and it has a practical advantage: the
    same person notices when a physics numerical fails because of the algebra rather than the physics. The
    <a href="{{ url('/science-home-tutor/class-7') }}">Class 7</a> and
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> pages cover the middle years, and the
    national <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page explains our approach everywhere.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-ten">What does the CBSE Class 10 science paper look like?</h2>
  <p>
    It is a three-hour paper worth 80, and the school adds 20 internal marks in four parts of 5: periodic
    assessment, multiple assessment, portfolio, and practical-based subject enrichment. CBSE's 2026-27 sample paper
    has 39 questions. Twenty are one-mark items, assertion–reason among them; six carry two marks; seven carry three;
    three case- or source-based questions carry four; and three long answers carry five. Biology accounts for 30
    marks, chemistry and physics for 25 each.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science, 2026-27: marks for each unit and a weekly habit that suits it</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Weekly habit</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances: Nature and Behaviour</td><td>25</td><td>Two balanced equations, with state symbols when asked</td></tr>
      <tr><td>World of Living</td><td>25</td><td>One labelled diagram drawn from memory</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>A circuit numerical with the unit on each line</td></tr>
      <tr><td>Natural Phenomena</td><td>12</td><td>A ray diagram with arrows on every ray</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>A short case passage read before answering</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Half the paper tests knowledge and understanding, 30% application, and 20% analysis and evaluation, so a tutor
    who only dictates notes is preparing for part of the paper. Our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> work through every chapter,
    and the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page plans the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-school">Which Class 10 science topics does the school assess itself?</h2>
  <p>
    For 2026-27 three areas stay out of the board paper and are assessed by the school: periodic classification of
    elements; evolution; and the electric motor, electromagnetic induction and the generator. They still count for
    internal marks and reappear in Class 11, so a tutor should teach them, just not during board revision. The
    curriculum also names 14 experiments that board questions draw on, which turns the practical file into revision
    material.
  </p>
  <p>
    Every Class 10 student sits the main board exam, and a second, optional exam lets eligible students improve up to
    three subjects, science included. The 2027 dates have not been announced; check cbse.gov.in, and treat the main
    exam as the one to prepare for. The <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year
    planner</a> sets out the months.
  </p>
  <h3>Using CBSE's sample papers through the year</h3>
  <p>
    The sample question papers and marking schemes on cbseacademic are the surest guide to the current design, so
    they deserve a plan rather than a rush at the end. Early in the year, one section at the end of each finished
    chapter, checked against the official scheme, shows your child exactly where marks are awarded. From the second
    term, full three-hour papers under timed conditions, with one strand's section gone through in detail each week.
    Older board papers are useful extra practice closer to the exam, but they contain fewer case-based questions than
    today's design, so the competency questions in recent sample papers still need their own time. A short list of
    repeated mistakes, reread in the final month, often helps more than yet another paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-nine">What is different about Class 9 science this session?</h2>
  <p>
    CBSE's 2026-27 curriculum follows NCERT's new Class 9 book, <em>Exploration</em>. The yearly exam is still 80
    marks with 20 internal. Matter: its nature and behaviour carries 27; World of living 25; Motion, force, work and
    sound 23; and Earth as a system 5. Notes passed down from an older sibling were written for the previous book, so
    a tutor should plan from the new chapters. In practicals students make onion-peel and cheek-cell slides, separate
    mixtures and plot motion graphs, and a tutor who explains why each set-up works makes the linked theory easier.
    See the <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-where">How does an after-school science slot work in six Pune neighbourhoods?</h2>
  <p>
    For a younger child the lesson usually falls between school and dinner, so a short and predictable journey
    matters most. These six neighbourhoods, one from each of six zones, show how arrangements differ. Compare tutors
    anywhere on our <a href="{{ url('/city/pune') }}">Pune page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>After-school science tuition in six Pune neighbourhoods: homes, the way in, and one thing to arrange</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">Homes</th><th scope="col">How tutors arrive</th><th scope="col">Arrange this</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $psA('karve-nagar', 'Karve Nagar') !!}</td><td>Apartment buildings and builder floors on quiet lanes</td><td>No station inside; tutors from Kothrud, Warje or Erandwane often come by two-wheeler</td><td>Leave a name at the gate in larger societies; smaller buildings are doorstep visits</td></tr>
      <tr><td>{!! $psA('bavdhan', 'Bavdhan') !!}</td><td>Gated societies, with houses in older pockets</td><td>Vanaz on the Aqua Line, then an auto; the line's extension towards Chandani Chowk is being built</td><td>Gate registration, and a slot away from the Chandani Chowk peak</td></tr>
      <tr><td>{!! $psA('pimple-saudagar', 'Pimple Saudagar') !!}</td><td>Established and newer societies popular with young families</td><td>BRTS roads by bus, or PCMC Bhavan metro and Pimpri railway station with an auto</td><td>Visitor register at the gate; allow for evening traffic on the BRTS roads</td></tr>
      <tr><td>{!! $psA('kalyani-nagar', 'Kalyani Nagar') !!}</td><td>Apartment societies and some villas</td><td>Its own Aqua Line station, open since March 2024</td><td>A fixed weekly slot so the guard desk knows the tutor</td></tr>
      <tr><td>{!! $psA('wanowrie', 'Wanowrie') !!}</td><td>Older housing pockets and apartment complexes</td><td>No metro; two-wheeler, bus or auto from east and south Pune</td><td>Start before traffic builds towards Solapur Road and Hadapsar</td></tr>
      <tr><td>{!! $psA('bibwewadi', 'Bibwewadi') !!}</td><td>Independent houses, builder floors and apartments</td><td>Metro to Swargate, then bus or auto; a Bibwewadi station is planned on the Katraj extension</td><td>A start after the evening school traffic on Satara Road</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A tutor who lives in the same zone is usually the steadiest weekday choice for a child in Classes 6 to 8.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-demo">What should you look for during the free science demo?</h2>
  <p>
    Ask for an ordinary lesson on the chapter your child is doing at school, then notice whether the tutor insists
    on these habits:
  </p>
  <ul>
    <li><strong>The exact word.</strong> "Alveoli" and "oesophagus", not everyday substitutes; examiners give marks for the term.</li>
    <li><strong>Equations that balance.</strong> With (s), (aq) and (g) added whenever the question asks for states.</li>
    <li><strong>Arrows on rays.</strong> Virtual rays dotted, real rays solid, every ray with a direction.</li>
    <li><strong>A cross for every ratio.</strong> Heredity answers show the Punnett square, not just the result.</li>
    <li><strong>Points that match marks.</strong> Three distinct points for three marks; a diagram or equation plus four or five points for five.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> lists more to
    notice. If the first tutor does not suit, we set up a demo with the next one on your shortlist, and a change of
    tutor later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-fees">What does a science home tutor cost in Pune?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor decides their
    own rate. Class 10 board preparation usually costs more than middle-school help, and the trip to your zone and the
    number of weekly lessons also play a part. You see the fee before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-start">How do you start with a science tutor?</h2>
  <p>
    Tell us the class, the board and textbook, which strand is giving trouble, your neighbourhood and society or lane,
    and the afternoons that suit you. We send two or three science tutors with their fees, and you choose one for a
    free demo class. If nobody suitable can come at that time, we suggest online or mixed lessons. NXTutors is based
    in Sector 66, Gurugram, and teaches online throughout India.
  </p>
  <p>
    Science teachers living in Pune can browse student requests near them on the
    <a href="{{ url('/tuition-jobs/pune') }}">Pune tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
