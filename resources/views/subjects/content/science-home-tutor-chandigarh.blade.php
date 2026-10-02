{{--
  Long-form guide for the "science home tutor Chandigarh" page (Classes 6 to
  10; CBSE and ICSE in detail, PSEB and BSEH in general terms only). Byline in
  config: Aaditya Kashyap; role statement only, no anecdotes. Local facts come
  only from database/seo-content/areas/chandigarh-research.json (zone_facts
  and area "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions by type, 30/25/25 subject split, unit marks, internal 5/5/5/5,
  answer-writing points) and cbse-class-10-board-year-plan-gurgaon (two Class
  10 exams), plus the 50/30/20 competency split, school-assessed topics, 14
  listed experiments, Class 9 Exploration unit marks, Curiosity for Classes 6
  and 7 and ICSE three-paper science as already stated on the Delhi page. No
  school, society, mall or people's names, no distances or travel times, only
  the allowed fee sentence.

  Area links render only when that Chandigarh area page exists and is active.
--}}
@php
  $cgAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cgA = function (string $slug, string $label) use ($cgAreaSlugs) {
      return in_array($slug, $cgAreaSlugs, true)
          ? '<a href="' . e(url('/city/chandigarh/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide chs-guide" aria-labelledby="chsGuideTitle">
  <h2 id="chsGuideTitle">Science home tutor in Chandigarh for Classes 6 to 10: start with the book on the desk</h2>

  <p class="nx-guide__lede">
    Science tuition in the tricity begins with a practical question: which book is your child reading from? A
    Chandigarh child on CBSE learns from NCERT, an ICSE child from books the school picks within the CISCE syllabus,
    and a child in Mohali or Panchkula may follow the Punjab or Haryana board. A tutor who teaches from the wrong book
    wastes the term. NXTutors sends two or three science tutors who know your child's board and can reach your sector
    after school. Each tutor's fee appears before you meet, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#chs-board">Board and book</a> ·
    <a href="#chs-units">Class 10 units</a> ·
    <a href="#chs-kinds">Question kinds</a> ·
    <a href="#chs-school">School-only topics</a> ·
    <a href="#chs-nine">Class 9</a> ·
    <a href="#chs-young">Classes 6 to 8</a> ·
    <a href="#chs-where">Six neighbourhoods</a> ·
    <a href="#chs-slips">Common slips</a> ·
    <a href="#chs-ahead">Looking to Class 11</a> ·
    <a href="#chs-fees">Fees</a> ·
    <a href="#chs-go">Next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="chs-board">Which board, and which book, should the science tutor teach from?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE science guidance on this page. The table sets out what each board
    means for a tutor's preparation.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science boards in the tricity for Classes 6 to 10, the material a tutor should use, and what to confirm first</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Teaching material</th><th scope="col">Confirm before the first lesson</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>NCERT books: <em>Curiosity</em> in Classes 6 and 7, <em>Exploration</em> in Class 9</td><td>That the tutor has taught the new books, not only the old ones</td></tr>
      <tr><td>ICSE</td><td>The school's chosen books within the CISCE syllabus; separate Physics, Chemistry and Biology papers in Class 10</td><td>Which publisher your child's school uses</td></tr>
      <tr><td>PSEB (Punjab)</td><td>The board's own textbooks; syllabus and notices on pseb.ac.in</td><td>The medium of instruction and the current syllabus</td></tr>
      <tr><td>BSEH (Haryana)</td><td>The board's own textbooks; syllabus and notices on bseh.org.in</td><td>The current syllabus and any exam changes the board has announced</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    We keep advice on the two state boards general and point tutors to the boards' own pages. The rest of this guide
    concentrates on CBSE and ICSE.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-units">Where do the 80 marks sit in CBSE Class 10 science?</h2>
  <p>
    The board paper runs for three hours and is out of 80. Another 20 come from the school, split equally between
    periodic tests, multiple assessment, the portfolio and subject enrichment through practicals.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science, 2026-27: board marks by unit and the weekly habit that suits each</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Board marks</th><th scope="col">A habit for every week</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances</td><td>25</td><td>Balance two equations from memory, with state symbols where asked</td></tr>
      <tr><td>World of Living</td><td>25</td><td>Draw and label one diagram without looking at the book</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>Solve a circuit problem with the unit on every line</td></tr>
      <tr><td>Natural Phenomena</td><td>12</td><td>Draw one ray diagram with arrows on each ray</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>Answer one short question in exact terms</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Split by subject, the 80 are 30 for biology, 25 for chemistry and 25 for physics. Seen by skill, half the paper tests
    knowledge and understanding, 30% application and 20% analysis and evaluation. Our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> work through the chapters.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-kinds">What kinds of questions make up the Class 10 science paper?</h2>
  <p>
    The 2026-27 sample paper has 39 questions. Twenty are worth one mark each, multiple-choice and assertion–reason
    together. Six short answers carry two marks and seven carry three. Three case- or source-based questions are worth
    four marks each, and three long answers five each. A tutor can match practice to this spread: a burst of one-mark
    items at the start of a session, then one three-mark answer checked for three separate points, and once a week a
    long answer with a labelled diagram or a balanced equation. CBSE posts sample papers and marking schemes on
    cbseacademic well before the exam; they are the most reliable guide to the current pattern, and older board papers
    carry fewer case-based questions. The <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science
    tutor</a> page explains how we plan the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-school">Which Class 10 topics are marked only by the school?</h2>
  <p>
    For 2026-27, three areas are assessed in school rather than on the board paper: periodic classification of
    elements; evolution; and the electric motor, electromagnetic induction and the generator. They still count
    towards internal marks and return in Class 11, so they must be learnt, though revision weeks belong to examined
    chapters. The curriculum lists 14 experiments, and board questions draw on them, so the practical file doubles as
    revision.
  </p>
  <p>
    All Class 10 students sit the main exam. A second, optional exam lets eligible students improve up to three
    subjects, science included. The 2027 dates are not yet out; follow cbse.gov.in and treat the main exam as the one
    that counts. Our <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> maps
    the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-nine">What has changed in Class 9 science this session?</h2>
  <p>
    Class 9 now follows NCERT's new <em>Exploration</em> book. The yearly exam is still 80 marks with 20 internal.
    Matter: its nature and behaviour is worth 27; World of living 25; Motion, force, work and sound 23; and Earth as a
    system 5. Hand-me-down notes were written for the previous book, so begin with the new chapters. School
    practicals include onion-peel and cheek-cell slides, separating mixtures and plotting motion graphs, and a tutor
    who explains why each step is done makes the related theory questions much easier. See the
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-young">What should science tuition do in Classes 6 to 8?</h2>
  <p>
    In Classes 6 and 7, NCERT's <em>Curiosity</em> books are built around activities. The tutor's job is to turn
    each activity into a precise sentence and a labelled sketch. In Class 8, physics, chemistry and biology begin to
    separate, numericals arrive and units start to matter. One tutor for all three strands is usually right until
    Class 10, and that tutor can spot when a physics problem is really failing on arithmetic. The
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> page and the national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page say more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-where">How does an after-school science slot work in six tricity neighbourhoods?</h2>
  <p>
    For a younger child, a lesson usually sits between school and dinner, so a short and predictable trip matters
    most. There is no metro in the tricity, and tutors come by scooter, car, bus or auto. See tutors by sector on our
    <a href="{{ url('/city/chandigarh') }}">Chandigarh page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>After-school science lessons in six tricity neighbourhoods: homes, arrival and a tip for each</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">Homes</th><th scope="col">Arrival and a tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $cgA('sector-8', 'Sector 8') !!}, Chandigarh</td><td>Older first-phase sector of houses and low-rise blocks</td><td>A doorstep visit with no gate register. Madhya Marg fills in the evening rush, so start before it.</td></tr>
      <tr><td>{!! $cgA('sector-19', 'Sector 19') !!}, Chandigarh</td><td>Houses plus housing-board flats</td><td>Flats have no formal gate check. The Sadar Bazaar market is crowded in the evening, so agree parking.</td></tr>
      <tr><td>{!! $cgA('sector-40', 'Sector 40') !!}, Chandigarh</td><td>Housing-board flats and houses</td><td>On the Mohali side, so tutors from Mohali's phases come easily. Share block and flat number in advance.</td></tr>
      <tr><td>{!! $cgA('mohali-phase-5', 'Mohali Phase 5') !!}</td><td>Independent houses of several sizes</td><td>Street parking at the door; tutors from neighbouring phases arrive quickly by scooter.</td></tr>
      <tr><td>{!! $cgA('mohali-sector-70', 'Mohali Sector 70') !!}</td><td>Apartment complexes, houses and builder floors</td><td>Give the tutor's name at the complex gate. Airport Road and the bypass are busy at office hours.</td></tr>
      <tr><td>{!! $cgA('panchkula-sector-15', 'Panchkula Sector 15') !!}</td><td>Mostly independent houses around a full sector market</td><td>The market's tuition centres mean many teachers already work nearby, which helps with home visits.</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-slips">Which small slips cost the most science marks?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five answer-writing slips in board science and the correction a tutor should drill</caption>
    <thead>
      <tr><th scope="col">The slip</th><th scope="col">The correction</th></tr>
    </thead>
    <tbody>
      <tr><td>Everyday words in place of terms, such as "food pipe"</td><td>"Oesophagus"; keep a glossary per chapter and test it weekly</td></tr>
      <tr><td>Equations without state symbols when the question asks for them</td><td>(s), (aq) and (g) written every time until it is automatic</td></tr>
      <tr><td>Rays drawn without arrows, or virtual rays drawn solid</td><td>Arrows and dashed lines checked on every ray diagram</td></tr>
      <tr><td>A heredity ratio with no cross shown</td><td>The Punnett square first, then the ratio</td></tr>
      <tr><td>Too few points for the marks</td><td>Three distinct points for three marks; a diagram or equation plus four or five points for five</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    At the free demo, ask for an ordinary lesson on this week's chapter and watch whether the tutor insists on these
    corrections. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> lists
    more to look for. If the fit is wrong, we book a demo with another tutor from the shortlist, and switching tutor
    later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-ahead">How does Class 10 science prepare a child for the Class 11 stream choice?</h2>
  <p>
    Families in the tricity often start thinking about Class 11 streams during Class 10, and the science marks are
    only part of the evidence. A tutor who has taught your child for a year can tell you more useful things: whether
    numericals in electricity come easily or only with prompting, whether chemical equations are understood or
    memorised, and whether biology diagrams are drawn from understanding. Those habits predict comfort in senior
    physics, chemistry and biology better than a single test score.
  </p>
  <p>
    Ask the tutor for a short, honest note on each strand before the school's stream deadline. Children leaning
    towards medicine should hear how steady their biology and chemistry recall is; those leaning towards engineering
    should hear how their algebra holds up inside physics problems. Our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice guide</a> sets out the options,
    and the tutor's note gives you something concrete to bring to that conversation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-fees">How much should you budget for a science tutor in the tricity?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor names a
    rate. For Classes 6 to 10, board-year teaching generally costs more than middle-school support, and the trip
    across the tricity and the number of weekly lessons also play a part. You see every fee before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chs-go">What do we need from you to begin?</h2>
  <p>
    Tell us your child's class and board, the strand that is causing trouble, your sector or phase, and the
    afternoons that suit you. We reply with two or three science tutors and their fees, and you choose one for the
    free demo. If nobody suitable can come at your hour, we propose online lessons, or home and online in turn.
    Our office is in Sector 66, Gurugram, and online classes reach families anywhere in India.
  </p>
  <p>
    Science teachers in Chandigarh, Mohali or Panchkula can view open requests on the
    <a href="{{ url('/tuition-jobs/chandigarh') }}">Chandigarh tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
