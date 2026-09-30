{{--
  Long-form guide for the "science home tutor Chennai" page (Classes 6 to 10,
  CBSE, ICSE and the Tamil Nadu State Board described generally). Byline in
  config: Aaditya Kashyap; role statement only, no anecdotes. Local facts come
  only from database/seo-content/areas/chennai-research.json (zone_facts and
  area "about" texts); Metro Phase II is described only as under construction.
  Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions by type, 30/25/25 sections, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, formative-only topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science as already stated on the Delhi science page. No state
  exam pattern is given. No school, society, mall or people's names, no
  distances or travel times, only the allowed fee sentence.

  Area links render only when that Chennai area page exists and is active.
--}}
@php
  $chAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $chA = function (string $slug, string $label) use ($chAreaSlugs) {
      return in_array($slug, $chAreaSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide chs-guide" aria-labelledby="chsGuideTitle">
  <h2 id="chsGuideTitle">Science home tutor in Chennai, Classes 6 to 10: one tutor, three strands, and a slot that fits after school</h2>

  <p class="nx-guide__lede">
    Science in the middle-school years is where children learn to write like scientists: the precise term, the
    named diagram, and a unit written beside each value. A home tutor in Chennai should build those habits from the book
    your child actually carries, whether it is NCERT for CBSE, a CISCE-approved text for ICSE or the Tamil Nadu State
    Board textbook, and should be able to keep one fixed after-school slot each week at your door. NXTutors sends
    two or three science tutors who meet both tests. Their fees are visible before you meet, and the first lesson is
    a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#chs-stage">Stage by stage</a> ·
    <a href="#chs-boards">Three boards</a> ·
    <a href="#chs-ten">Class 10 CBSE paper</a> ·
    <a href="#chs-school">School-only topics</a> ·
    <a href="#chs-pace">Pacing the year</a> ·
    <a href="#chs-nine">Class 9</a> ·
    <a href="#chs-where">Six neighbourhoods</a> ·
    <a href="#chs-demo">What to watch in the demo</a> ·
    <a href="#chs-fees">Fees</a> ·
    <a href="#chs-start">Starting out</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="chs-stage">What changes in science tuition between Class 6 and Class 10?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE science guidance on this page. The job of a science tutor shifts as a
    child climbs the classes:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science tuition by stage: what the year asks of a child and where a tutor earns their fee</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What the year asks</th><th scope="col">Where the tutor helps most</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 and 7</td><td>Activities and observation; CBSE uses NCERT's <em>Curiosity</em> books</td><td>Turning each activity into one correct sentence and one labelled sketch</td></tr>
      <tr><td>Class 8</td><td>Physics, chemistry and biology begin to separate; first numericals</td><td>Units written every time, word equations read aloud and then written</td></tr>
      <tr><td>Class 9</td><td>A steeper book and several new ideas at once</td><td>Catching gaps in motion, matter and the cell before they widen</td></tr>
      <tr><td>Class 10</td><td>The board paper, with a large share of application questions</td><td>Answer length matched to marks, timed sections, marking against the scheme</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Until Class 10, one tutor for all three strands usually works better than three: a single teacher can tell
    whether a wrong physics answer came from the arithmetic or from the concept. The national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page explains our approach, and the
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> page covers the middle years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-boards">CBSE, ICSE or State Board: does the board change the tutor you need?</h2>
  <p>
    It changes the book, and the book drives almost everything. Three situations are common in Chennai:
  </p>
  <ul>
    <li><strong>Tamil Nadu State Board.</strong> The state sets its own syllabus and textbooks, and Class 10 ends in a public examination that the state conducts. Look for a tutor who plans from the state textbook and sets practice from the board's model and past papers. We do not describe the state paper here; its official site carries the current scheme.</li>
    <li><strong>CBSE.</strong> NCERT books throughout, with the Class 10 paper described below. Most science tutors in the city know this route well.</li>
    <li><strong>ICSE.</strong> Class 10 science is three CISCE papers, Physics, Chemistry and Biology, and internal work is assessed for each one separately. Since each school selects its own textbooks inside the CISCE syllabus, the tutor has to teach from those books and set practice from CISCE specimen papers.</li>
  </ul>
  <p>
    Tutors with ICSE science experience tend to be fewer, so request one early. Some ICSE families bring in help only
    for the weakest of the three subjects from Class 9 onwards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-ten">How is the CBSE Class 10 science paper built?</h2>
  <p>
    The board paper runs three hours and carries 80 marks. The school adds 20 internal marks in four parts of 5:
    periodic assessment, multiple assessment, portfolio, and subject enrichment through practical work. In the
    2026-27 sample paper there are 39 questions: twenty one-mark items, including assertion–reason; six worth two
    marks; seven worth three; three case- or source-based questions worth four; and three long answers worth five.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science, 2026-27: marks by unit and the practice that suits each</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Weekly practice</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances</td><td>25</td><td>Balance two equations and explain one observation in writing</td></tr>
      <tr><td>World of Living</td><td>25</td><td>Draw and label one diagram from memory, then check it against the book</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>One circuit numerical with units carried on every line</td></tr>
      <tr><td>Natural Phenomena</td><td>12</td><td>One ray diagram with arrows on every ray</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>A short answer that uses the textbook term, not an everyday one</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Split by strand, biology accounts for 30 marks, and chemistry and physics for 25 each; across the five units,
    Chemical Substances and World of Living together hold 50 of the 80. By thinking skill, half the
    paper tests knowledge and understanding, 30% application, and 20% analysis and evaluation. Our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a> take each chapter in turn,
    and the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page shows how the board
    year is planned.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-school">Which Class 10 science topics stay with the school?</h2>
  <p>
    In 2026-27, three areas are assessed by the school rather than on the board paper: periodic classification of
    elements; evolution; and the electric motor, electromagnetic induction and the generator. They still count for
    internal marks and return in Class 11, so a tutor teaches them, but revision weeks belong to examined chapters.
    The curriculum also lists 14 experiments, and board questions draw on them, which makes the practical file useful
    revision.
  </p>
  <p>
    Every CBSE Class 10 student sits the main board exam, and an optional second exam lets eligible students improve
    up to three subjects, science among them. The 2027 dates are not out; follow cbse.gov.in, and plan as though the
    main exam is the one that matters. The <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">Class 10
    board-year planner</a> lays out the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-pace">How should a Class 10 science year be paced?</h2>
  <p>
    CBSE puts sample question papers and marking schemes on cbseacademic well ahead of the exam, and they remain the
    clearest guide to the current design. State Board and ICSE students have their own board's model and specimen
    papers, used the same way. A pace that suits most children:
  </p>
  <ul>
    <li><strong>First term:</strong> finish each chapter with the matching questions from a sample paper, marked strictly against the official scheme so your child learns where each mark is given.</li>
    <li><strong>Second term:</strong> one full paper every fortnight in three hours, followed by a close review of a single strand.</li>
    <li><strong>Final weeks:</strong> older papers for volume, plus a short notebook of repeated mistakes read every few days.</li>
  </ul>
  <p>
    Older CBSE papers carry fewer case-based items than the present design, so competency questions from recent
    sample papers still need their own practice time.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-nine">Why does Class 9 CBSE science need a fresh plan this year?</h2>
  <p>
    This session, Class 9 learns from NCERT's new book, <em>Exploration</em>, which the 2026-27 curriculum follows.
    The yearly exam stays at 80 marks, with 20 internal. Matter: its nature and behaviour carries 27; World of living
    25; Motion, force, work and sound 23; and Earth as a system 5. Handed-down notes follow the old book, so a tutor
    should build the year from the new chapter list. See the
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-where">How does a science tutor reach you in six Chennai neighbourhoods?</h2>
  <p>
    A younger child's lesson has to fit the gap between the school bus and the evening meal, so the tutor's route
    must be short and reliable. These
    six neighbourhoods, one from each of six zones, show how arrangements differ. Every locality is on our
    <a href="{{ url('/city/chennai') }}">Chennai page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>After-school science lessons in six Chennai neighbourhoods: homes, the nearest rail link and what to arrange</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">Homes</th><th scope="col">Nearest rail link</th><th scope="col">Worth arranging</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $chA('mylapore', 'Mylapore') !!}</td><td>Older houses on narrow lanes near the temple tank, flats on tree-lined avenues</td><td>MRTS at Light House, Thirumayilai and Mandaveli</td><td>Lanes near the tank are tight for cars; plan around festival days</td></tr>
      <tr><td>{!! $chA('west-mambalam', 'West Mambalam') !!}</td><td>Independent houses and small apartment buildings on packed streets</td><td>Mambalam suburban station; Ashok Nagar on the Green Line</td><td>Most tutors come by two-wheeler or on foot; mid-afternoon avoids the market rush</td></tr>
      <tr><td>{!! $chA('madipakkam', 'Madipakkam') !!}</td><td>Low-rise flats and houses on plotted streets around the lake</td><td>Puzhuthivakkam on the MRTS extension, or Velachery</td><td>Small buildings need only a word with the watchman</td></tr>
      <tr><td>{!! $chA('navalur', 'Navalur') !!}</td><td>Apartments and villa communities off the OMR</td><td>None yet; Line 3 is under construction</td><td>Gate registration, sometimes with ID on the first visit</td></tr>
      <tr><td>{!! $chA('shenoy-nagar', 'Shenoy Nagar') !!}</td><td>Older houses and low-rise apartment buildings</td><td>Shenoy Nagar on the Green Line</td><td>Tutors can arrive by metro and walk; start a little after the evening peak</td></tr>
      <tr><td>{!! $chA('ambattur', 'Ambattur') !!}</td><td>Established colonies of houses, with newer apartment buildings</td><td>Ambattur and Pattaravakkam on the suburban line</td><td>Late afternoon or weekends, away from commuter traffic on the high road</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Where the nearest science tutor for your board lives across the city, one online lesson a week alongside a home
    lesson keeps the plan steady without a long evening trip.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-demo">Which habits should the tutor insist on in the free demo?</h2>
  <p>
    Rather than a showpiece, request a normal lesson on this week's school chapter, and check whether the tutor
    pushes for these five habits:
  </p>
  <ol>
    <li><strong>Exact vocabulary.</strong> "Alveoli", not "air sacs"; "oesophagus", not "food pipe".</li>
    <li><strong>State symbols when asked.</strong> (s), (l), (aq) and (g) written into balanced equations.</li>
    <li><strong>Arrows on rays.</strong> Real rays solid, virtual rays dashed, every one with a direction.</li>
    <li><strong>Working shown in genetics.</strong> A cross drawn out, not just a ratio.</li>
    <li><strong>Points counted against marks.</strong> Three separate points for a three-mark answer; a diagram or equation plus four or five points for five marks.</li>
  </ol>
  <p>
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> adds
    further points. If the fit is wrong, we arrange a demo with another tutor on your shortlist, and changing tutor
    later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-fees">How much does a science home tutor in Chennai charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their
    own fee. For Classes 6 to 10, board-year teaching usually costs more than middle-school support, and the journey
    to your zone and the number of weekly lessons also count. You see every fee before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-start">How do you get started?</h2>
  <p>
    Tell us the class and board, the strand that worries you most, your locality with a nearby station or landmark,
    and the afternoons your family keeps free. We reply with two or three science tutors and their fees, and you pick
    one for a free demo class. If nobody suitable can travel at that hour, we suggest online or mixed lessons.
    NXTutors has its office in Sector 66, Gurugram, and teaches online across India. When your child moves into Class
    11, our <a href="{{ url('/physics-home-tutor-chennai') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-chennai') }}">chemistry</a> tutor pages for Chennai take over.
  </p>
  <p>
    Science teachers in Chennai who want students near home can look through open requests on the
    <a href="{{ url('/tuition-jobs/chennai') }}">Chennai tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
