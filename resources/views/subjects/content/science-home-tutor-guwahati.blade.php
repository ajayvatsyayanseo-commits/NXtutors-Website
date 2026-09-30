{{--
  Long-form guide for the "science home tutor Guwahati" page (Classes 6 to 10,
  CBSE and ICSE, with the Assam state board named generally). Byline in
  config: Aaditya Kashyap; role statement only, no anecdotes. Local facts come
  only from database/seo-content/areas/guwahati-research.json (zone_facts and
  area "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39 questions
  by type, 30/25/25 by subject, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, school-assessed topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science, as already stated on the Delhi science page. The state
  board (HSLC; formerly SEBA, now shown as Assam State School Education Board
  on site.sebaonline.org) is described generally, with no paper pattern. No
  school, society, hospital or people's names (other than the author), no
  distances or travel times, only the allowed fee sentence.

  Area links render only when that Guwahati area page exists and is active.
--}}
@php
  $ghAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ghA = function (string $slug, string $label) use ($ghAreaSlugs) {
      return in_array($slug, $ghAreaSlugs, true)
          ? '<a href="' . e(url('/city/guwahati/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ghs-guide" aria-labelledby="ghsGuideTitle">
  <h2 id="ghsGuideTitle">Science home tutor in Guwahati, Classes 6 to 10: the right book, a fixed afternoon, and answers that earn their marks</h2>

  <p class="nx-guide__lede">
    Science tuition in the middle years is less about covering chapters than about building exactness: the correct
    term, a labelled diagram, a unit written after every number. Those habits decide the Class 10 result long
    before the board year starts. In Guwahati a science tutor also has to match the book your child studies from,
    whether CBSE, ICSE or the state board, and turn up at your door on the same weekday afternoon, week after week. NXTutors
    replies with two or three science tutors who fit both. Fees are shown up front, and the first lesson is a
    free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="Sections of this page">
    <strong>Sections:</strong>
    <a href="#ghs-books">Which book</a> ·
    <a href="#ghs-stages">Class by class</a> ·
    <a href="#ghs-ten">The Class 10 paper</a> ·
    <a href="#ghs-school">School-assessed topics</a> ·
    <a href="#ghs-nine">Class 9</a> ·
    <a href="#ghs-icse">ICSE</a> ·
    <a href="#ghs-slot">Afternoon slots</a> ·
    <a href="#ghs-check">The fortnightly check</a> ·
    <a href="#ghs-fees">Fees</a> ·
    <a href="#ghs-next">Next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ghs-books">Which science book is your child actually using?</h2>
  <p>
    The CBSE and ICSE science advice on this page is by Aaditya Kashyap. The book matters first, because each board
    words its answers differently:
  </p>
  <ul>
    <li><strong>CBSE:</strong> NCERT books, with <em>Curiosity</em> in Classes 6 and 7 and the new <em>Exploration</em> in Class 9, leading to one integrated science paper in Class 10.</li>
    <li><strong>ICSE:</strong> textbooks chosen by each school within the CISCE syllabus, and three separate papers in Class 10.</li>
    <li><strong>Assam state board:</strong> the board's own prescribed books, leading to the HSLC examination after Class 10. The board, long known as SEBA, now appears on its official website as the Assam State School Education Board. Its scheme can change, so take the current one from the board's notices; we do not describe it here. Ask for a tutor who teaches from those books in the medium your child writes in.</li>
  </ul>
  <p>
    The national <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page explains how we match science
    tutors in every city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghs-stages">What does a science tutor need to change as your child moves up?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science tuition by stage: what shifts in each class and the tutor's main weekly job</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">What shifts</th><th scope="col">Tutor's weekly job</th></tr>
    </thead>
    <tbody>
      <tr><td>6 and 7</td><td>Activity-led chapters</td><td>Turn each activity into one precise sentence and a labelled sketch</td></tr>
      <tr><td>8</td><td>Physics, chemistry and biology start to separate; numericals appear</td><td>Units on every answer; word equations written in full</td></tr>
      <tr><td>9</td><td>A new book and a steeper climb in motion, matter and the cell</td><td>Catch gaps early, before they stack up</td></tr>
      <tr><td>10</td><td>Board year</td><td>Answers shaped to the marking scheme, timed sections from sample papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Until the board year a single tutor across biology, chemistry and physics is normally enough, and can see when a physics numerical is
    really failing on algebra. The <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page
    covers the year where gaps open fastest.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghs-ten">CBSE Class 10 science: what does the paper look like?</h2>
  <p>
    The written paper runs three hours for 80 marks. Internal assessment adds 20, built from four 5-mark pieces: periodic
    tests, multiple assessment, a portfolio and practical enrichment work. Biology carries 30
    of the 80 marks, with chemistry and physics at 25 apiece.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science, 2026-27: board marks by unit and a drill for each</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Drill that fits it</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances</td><td>25</td><td>Balance two equations a session and state the reaction type</td></tr>
      <tr><td>World of Living</td><td>25</td><td>Draw and label one diagram from memory, then check it against the book</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>Circuit numericals with the formula, substitution and unit on separate lines</td></tr>
      <tr><td>Natural Phenomena</td><td>12</td><td>Ray diagrams with arrows, then the sign convention written out</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>Short answers with one example each</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CBSE's sample paper for 2026-27 sets 39 questions. Twenty carry a mark each (assertion–reason among them); then
    come six two-markers, seven three-markers, three case- or source-based items of four, and three five-mark long answers.
    By skill, 50% of the paper rewards knowing and understanding, 30% applying, and 20% analysing and evaluating, so learning
    lines by heart covers only part of the paper. Our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class
    10 science notes</a> take each chapter in turn; for the board-year plan, see the
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghs-school">Which Class 10 chapters never reach the board paper, and is there a second exam?</h2>
  <p>
    For 2026-27, three areas are assessed by the school rather than on the board paper: electromagnetic induction,
    the motor and the generator; evolution; and how elements were arranged into the periodic table. They still feed internal
    marks and Class 11, so they are taught, just not revised at board-paper intensity. Fourteen experiments are named in
    the curriculum and the paper builds questions around them, which makes the practical file useful revision too.
  </p>
  <p>
    Every candidate sits the main exam; an optional second exam later allows improvement in up to three subjects,
    science among them. The 2027 dates are not out, so follow cbse.gov.in. The
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> sets out the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghs-nine">Why does Class 9 need a fresh plan this year?</h2>
  <p>
    CBSE's 2026-27 curriculum follows NCERT's new <em>Exploration</em> book, so an older sibling's notes no longer
    line up. The yearly exam keeps 80 marks plus 20 internal. The heaviest unit is Matter: its nature and behaviour (27);
    then World of living (25), the motion, force, work and sound unit (23), and Earth as a system, worth just 5. Practicals such as onion-peel and
    cheek-cell slides, separating mixtures and plotting motion graphs make the theory easier when a tutor explains
    why each set-up works.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghs-icse">What should ICSE families in Guwahati look for?</h2>
  <p>
    For ICSE Class 10, CISCE sets separate Physics, Chemistry and Biology papers, and
    each one has its own internal assessment. Because the school picks the textbooks, the tutor has to teach from those books and
    from CISCE specimen papers; an NCERT plan will not match. Marks usually go on loose definitions and numericals
    left half done. Some families take help only for the weakest paper from Class 9. ICSE science tutors are fewer
    than CBSE ones, so ask early and keep online sessions in mind.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghs-slot">Which after-school slot works where you live?</h2>
  <p>
    Younger children study in the gap after school and before the evening meal, and a tutor with a short, reliable
    journey is the one who keeps turning up. Guwahati has no metro, and tutors come by bus, auto or two-wheeler. Six localities show how
    the arrangements vary; compare tutors across the city on our <a href="{{ url('/city/guwahati') }}">Guwahati
    page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>North and east of the centre</h3>
      <p>
        {!! $ghA('uzan-bazar', 'Uzan Bazar') !!}, one of the oldest settlements, runs beside the Brahmaputra with
        older family houses and apartment buildings, some facing the river. Houses mean doorstep arrival; for flats,
        give the guard the building name and a phone number. The riverside fills up in the evening, so an afternoon
        or early-evening lesson suits. {!! $ghA('chandmari', 'Chandmari') !!}, where Zoo Road begins, has a strong
        student feel and many evening coaching classes, so fix the weekday slot in advance.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Off GS Road in the south</h3>
      <p>
        {!! $ghA('rukminigaon', 'Rukminigaon') !!}, close to Dispur, is mostly multistorey flats a short walk from GS
        Road, so a tutor on the bus has an easy last stretch. Buildings may keep a visitor register, and some lanes
        have little parking. {!! $ghA('survey', 'Survey') !!}, beside Beltola and Hatigaon, has lanes such as Ajanta
        Path running off the main road and a bus stop of its own; tell the tutor where a two-wheeler can stand.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>The southern edge and the west</h3>
      <p>
        {!! $ghA('basistha', 'Basistha') !!}, at the city's southern edge where the national highway passes Basistha
        Chariali, has independent houses and large complexes that need the tower and flat number at the gate; share a
        clear landmark. {!! $ghA('adabari', 'Adabari') !!}, around its busy three-way junction and bus depot, is easy
        for tutors from Maligaon, Jalukbari and Pandu, but agree an exact meeting point for the first visit.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghs-check">What should you look for in the science notebook every fortnight?</h2>
  <ul>
    <li><strong>Exact words:</strong> "alveoli", not "air sacs in the lungs"; "oesophagus", not "food pipe".</li>
    <li><strong>State symbols</strong> in equations, (s), (aq), (g), when the question wants them.</li>
    <li><strong>Arrowheads on rays</strong>, with virtual rays dotted rather than solid.</li>
    <li><strong>Punnett squares</strong> shown before any ratio in heredity.</li>
    <li><strong>Points counted against marks:</strong> three separate points for a three-mark answer.</li>
  </ul>
  <p>
    At the free demo, ask for an ordinary lesson on the current chapter and watch whether the tutor insists on
    these. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> lists more.
    If the match is wrong we set up a demo with another shortlisted tutor, and a later change of tutor costs nothing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghs-fees">What does a science home tutor in Guwahati cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor names a
    fee. Class 10 board preparation usually costs more than help in Classes 6 to 8, and the trip to your
    locality and lessons per week shape it too. Every fee is visible ahead of the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghs-next">What is the next step?</h2>
  <p>
    Send the class and board, the strand that worries you, your locality and nearest landmark, and the free
    afternoons. A shortlist of two or three science tutors arrives, fees included; pick one for the free demo. Where
    no nearby tutor can make that hour, online or part-online lessons are the fallback. NXTutors has its office in
    Sector 66, Gurugram, and runs online classes all over India.
  </p>
  <p>
    Guwahati-based science teachers looking for students can browse the
    <a href="{{ url('/tuition-jobs/guwahati') }}">Guwahati tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
