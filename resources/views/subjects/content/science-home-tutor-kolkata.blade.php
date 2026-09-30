{{--
  Long-form guide for the "science home tutor Kolkata" page (Classes 6 to 10,
  CBSE, ICSE and the West Bengal board in general terms). Byline in config:
  Aaditya Kashyap; role statement only, no anecdotes. Local facts come only
  from database/seo-content/areas/kolkata-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39 questions
  by type, 30/25/25 subject split, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, formative-only topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science as already stated on the Delhi and Faridabad science
  pages. WBBSE is named and described generally only. No school, society,
  hospital, mall or people's names, no distances or travel times, only the
  allowed fee sentence.

  Area links render only when that Kolkata area page exists and is active.
--}}
@php
  $klAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $klA = function (string $slug, string $label) use ($klAreaSlugs) {
      return in_array($slug, $klAreaSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide kos-guide" aria-labelledby="kosGuideTitle">
  <h2 id="kosGuideTitle">Science home tutor in Kolkata, Classes 6 to 10: the right books for the board, and habits that last to Class 10</h2>

  <p class="nx-guide__lede">
    In the middle-school years a science tutor's real job is to make a child precise: the correct term, the labelled
    diagram, the unit written after every number. By Class 10 those habits are worth marks on a board paper, whether it
    is set by CBSE, by CISCE as three separate ICSE papers, or by the West Bengal board. NXTutors asks which books your
    child uses and where you live in Kolkata, then sends two or three science tutors who teach those books and can
    reach you after school. You see their fees first, and the opening class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kos-books">Books by board</a> ·
    <a href="#kos-years">Year by year</a> ·
    <a href="#kos-units">Class 10 CBSE units</a> ·
    <a href="#kos-inschool">What the school marks</a> ·
    <a href="#kos-nine">Class 9</a> ·
    <a href="#kos-icse">ICSE's three papers</a> ·
    <a href="#kos-local">Six neighbourhoods</a> ·
    <a href="#kos-slips">Common slips</a> ·
    <a href="#kos-fees">Fees</a> ·
    <a href="#kos-next">Next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kos-books">Which science books does each Kolkata board use?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE science guidance on this page. The first thing we check is the textbook,
    because a tutor planning from the wrong book wastes the first month.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science in Classes 6 to 10 in Kolkata: the books behind each board, and how Class 10 is assessed</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Classes 6 to 8</th><th scope="col">Classes 9 and 10</th><th scope="col">Class 10 assessment</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>NCERT, with <em>Curiosity</em> in Classes 6 and 7</td><td>NCERT, with <em>Exploration</em> in Class 9</td><td>One science paper of 80 marks, 20 internal</td></tr>
      <tr><td>ICSE (CISCE)</td><td>Books the school picks within the CISCE syllabus</td><td>The school's chosen Physics, Chemistry and Biology books</td><td>Three papers, each with its own internal assessment</td></tr>
      <tr><td>West Bengal board (WBBSE)</td><td>The state's prescribed textbooks</td><td>The state's prescribed textbooks</td><td>The Madhyamik examination; the board's official site carries the scheme</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For Madhyamik students we keep our advice general: the tutor should teach from the prescribed books and follow the
    West Bengal Board of Secondary Education's own notices for the exam pattern.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kos-years">How should science tuition change from Class 6 to Class 10?</h2>
  <ul>
    <li><strong>Classes 6 and 7:</strong> the <em>Curiosity</em> books lead with activities. A tutor turns each one into a sentence using the right word and a small labelled sketch.</li>
    <li><strong>Class 8:</strong> physics, chemistry and biology begin to separate. The first numericals and word equations arrive, and units stop being optional.</li>
    <li><strong>Class 9:</strong> the steepest climb, with motion graphs, particles of matter and the cell in the same term. Gaps opened here tend to widen in Class 10.</li>
    <li><strong>Class 10:</strong> everything points at the board paper, where half the CBSE marks go to application, analysis and evaluation.</li>
  </ul>
  <p>
    Up to Class 10 one tutor for all three strands usually works well, and brings a hidden benefit: the same person
    notices when a physics numerical fails on arithmetic rather than on physics. The national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page explains our approach, and the
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> page covers the middle years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kos-units">CBSE Class 10 science: where do the 80 board marks sit?</h2>
  <p>
    The board paper runs three hours. CBSE's 2026-27 sample paper holds 39 questions: twenty one-mark items including
    assertion–reason, six worth two marks, seven worth three, three case- or source-based questions of four, and three
    long answers of five. Biology accounts for 30 marks, chemistry 25 and physics 25. The 20 internal marks are split
    equally across periodic assessment, multiple assessment, the portfolio and practical enrichment.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science units for 2026-27, their board marks, and what a tutor should keep checking</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Keep checking</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances</td><td>25</td><td>Equations balanced, with state symbols where asked</td></tr>
      <tr><td>World of Living</td><td>25</td><td>Exact biological terms and neatly labelled diagrams</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>Circuit symbols, and units on every line of a numerical</td></tr>
      <tr><td>Natural Phenomena</td><td>12</td><td>Arrows on each ray and the sign convention in lens and mirror sums</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>Short, specific answers rather than general statements</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Measured by skill, half the paper tests knowledge and understanding, 30% application, and 20% analysis and
    evaluation. The <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a> work
    through each chapter, and the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page
    shows how a board year is planned.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kos-inschool">Which Class 10 topics are marked only by the school?</h2>
  <p>
    For 2026-27, three areas stay off the board paper and are assessed formatively in school: the periodic
    classification of elements; evolution; and the electric motor, electromagnetic induction and the generator. They
    still need teaching, since internal marks rest on them and Class 11 returns to them, but revision time before the
    board belongs to the examined chapters. The curriculum also lists 14 experiments, and board questions are built on
    them, so the practical file doubles as revision.
  </p>
  <p>
    Every Class 10 student sits the main board exam. An optional later sitting lets eligible students improve up to
    three subjects, science included; 2027 dates are not yet out, so keep an eye on cbse.gov.in. The
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> lays out the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kos-nine">What is new in Class 9 science?</h2>
  <p>
    CBSE's 2026-27 curriculum follows NCERT's new Class 9 book, <em>Exploration</em>. The yearly exam is still 80
    marks with 20 internal, divided as Matter: its nature and behaviour 27, World of living 25, Motion, force, work and
    sound 23, and Earth as a system 5. An older sibling's notes follow the previous book, so any plan should start
    from the new chapters. Practical work covers slides of onion peel and cheek cells, separating mixtures and drawing
    motion graphs; a tutor who explains why each set-up works makes the matching theory questions much easier. See
    the <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kos-icse">What does an ICSE science student in Kolkata need from a tutor?</h2>
  <p>
    CISCE examines ICSE Class 10 science as three papers, Physics, Chemistry and Biology, each with internal
    assessment beside the theory. Schools choose their own textbooks within the syllabus, so the tutor has to work from
    the books your child brings home and from CISCE specimen papers, not from an NCERT plan. Marks tend to slip on loose
    definitions and numericals left half-finished. Some families add a tutor only for the weakest of the three papers
    from Class 9. ICSE-experienced science tutors are fewer than CBSE ones in every city we serve, so ask early and
    keep online lessons in mind if no one near you is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kos-local">Which after-school slot works in your part of Kolkata?</h2>
  <p>
    For a younger child the lesson usually falls between school and dinner, so a short and predictable trip matters.
    Six neighbourhoods from six zones show how different that trip can be; tutors for every locality are on our
    <a href="{{ url('/city/kolkata') }}">Kolkata page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>South: a planned plot layout and a busy crossing</h3>
      <p>
        {!! $klA('jodhpur-park', 'Jodhpur Park') !!} was divided into about 450 plots by a co-operative society in
        1947, so its streets run in a regular pattern and most homes are independent houses where the tutor goes
        straight to the door. Rabindra Sarobar on the Blue Line and Dhakuria on the Sealdah South lines are close.
        {!! $klA('jadavpur', 'Jadavpur') !!} mixes family houses and apartment buildings around the 8B crossing,
        which is crowded when offices and classes open and close, so a weekend or early-afternoon lesson is easier to hold.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>East: the bypass and the oldest planned township</h3>
      <p>
        {!! $klA('kasba', 'Kasba') !!} sits between the Sealdah South line and the EM Bypass, with older buildings in
        the inner paras and newer complexes near the bypass that register visitors, so share the tutor's name ahead of
        time. VIP Bazar on the Orange Line serves the bypass side. In
        {!! $klA('salt-lake-sector-2', 'Salt Lake Sector II') !!}, mostly independent houses in blocks such as BL, DL
        and EE, Karunamoyee station on the Green Line stands beside a large bus terminal, which suits tutors coming
        from Dum Dum, Sealdah or Howrah.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>North: a transit hub and an old crossing</h3>
      <p>
        {!! $klA('dum-dum', 'Dum Dum') !!}, which takes in Nagerbazar, is among the easiest areas to reach by train or
        metro: the Blue Line has served it since 1984 and the Yellow Line has run through Dum Dum Cantonment since
        August 2025. Flats in small buildings usually mean going straight to the door. In
        {!! $klA('shyambazar', 'Shyambazar') !!}, the tutor often walks the last stretch through the lanes from the
        Blue Line station; mid-afternoon or later evening avoids the busiest hours at the five-point crossing.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kos-slips">Which science slips should a tutor fix first?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five common ways science answers lose marks, and the habit that fixes each</caption>
    <thead>
      <tr><th scope="col">The slip</th><th scope="col">The habit to build</th></tr>
    </thead>
    <tbody>
      <tr><td>Everyday words in place of scientific ones ("food pipe")</td><td>The exact term every time ("oesophagus"), learnt with its spelling</td></tr>
      <tr><td>Bare chemical equations</td><td>Balanced equations, with (s), (aq) and (g) wherever a question asks for them</td></tr>
      <tr><td>Rays drawn without direction</td><td>An arrow on every ray, and virtual rays shown dotted</td></tr>
      <tr><td>A heredity ratio with no working</td><td>The cross or Punnett square drawn out before the ratio</td></tr>
      <tr><td>One long paragraph for a three-mark question</td><td>As many separate points as the question has marks, with a diagram in five-mark answers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Use the free demo as a test: ask for an ordinary lesson on this week's chapter and see whether the tutor insists
    on these habits. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for
    parents</a> lists more to watch for. Two sessions a week suit most children in Classes 6 to 8; many families add a
    third in the months before the Class 10 board. If the first match is wrong, another shortlisted tutor gives a demo,
    and switching later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kos-fees">What does a science home tutor in Kolkata cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee. Within Classes 6 to 10, board-year teaching tends to cost more than middle-school help, and the trip to your
    neighbourhood and the number of weekly lessons also count. All fees are visible before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kos-next">What is the next step?</h2>
  <p>
    Tell us the class and board, the strand your child finds hardest, your neighbourhood with a block or landmark, and
    the afternoons you can offer. We send a shortlist of two or three science tutors with their fees, and you choose one
    for a free demo class. If no suitable tutor can travel at that hour, we suggest online or mixed lessons. NXTutors
    is based in Sector 66, Gurugram, and teaches online throughout India.
  </p>
  <p>
    Science teachers in Kolkata who want students near home can browse open requests on the
    <a href="{{ url('/tuition-jobs/kolkata') }}">Kolkata tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
