{{--
  Long-form guide for the "science home tutor Gandhinagar" page (Classes 6 to
  10: CBSE, ICSE and GSEB in general terms). Byline in config: Aaditya
  Kashyap; role statement only, no anecdotes. Local facts come only from
  database/seo-content/areas/gandhinagar-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions by type, 30/25/25 split, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (optional second Class 10 exam), plus
  the 50/30/20 competency split, the three school-assessed topics, 14 listed
  experiments, Class 9 Exploration unit marks, Curiosity for Classes 6 and 7,
  and ICSE three-paper science, as already stated on the Patna and Delhi
  science pages. GSEB: only what https://www.gseb.org/ and
  https://www.gsebeservice.com/ show (read 3 Oct 2026): SSC at Standard 10,
  past question papers, "Model Paper & Pari roop" pages, a subject-wise
  question bank for Standards 9 to 12. No GSEB pattern is given. No school,
  college, society or people's names, no distances or travel times, only the
  allowed fee sentence.

  Area links render only when that Gandhinagar area page exists and is active.
--}}
@php
  $gnsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gnsA = function (string $slug, string $label) use ($gnsSlugs) {
      return in_array($slug, $gnsSlugs, true)
          ? '<a href="' . e(url('/city/gandhinagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide gns-guide" aria-labelledby="gnsGuideTitle">
  <h2 id="gnsGuideTitle">Science home tutor in Gandhinagar for Classes 6 to 10: one teacher for three sciences, and answers shaped for the board</h2>

  <p class="nx-guide__lede">
    Between Class 6 and Class 10, science stops being a set of interesting observations and becomes three subjects
    with numericals, balanced equations and labelled diagrams. In Gandhinagar a child may meet that change through
    NCERT books on CBSE, through the separate physics, chemistry and biology texts of an ICSE school, or through the
    Gujarat board's books in Gujarati or English. A useful science tutor teaches from whichever book is on the desk,
    arrives at the same hour each week after school, and builds exam-style answers long before Class 10. NXTutors
    sends two or three science tutors who fit, each with the fee shown in advance, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gns-book">Which book?</a> ·
    <a href="#gns-gseb">Gujarat board science</a> ·
    <a href="#gns-early">Classes 6 to 9</a> ·
    <a href="#gns-ten">CBSE Class 10 marks</a> ·
    <a href="#gns-school">School-marked topics</a> ·
    <a href="#gns-icse">ICSE</a> ·
    <a href="#gns-week">A weekly rhythm</a> ·
    <a href="#gns-local">Six localities</a> ·
    <a href="#gns-fees">Fees</a> ·
    <a href="#gns-next">Next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gns-book">Which science book is your child actually using?</h2>
  <p>
    Aaditya Kashyap wrote the CBSE and ICSE guidance on this page. The first thing we ask a family is not the class
    but the book, because a tutor who teaches from the wrong text wastes the first month.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science courses in Gandhinagar homes up to Class 10, the books behind them and what to confirm with a tutor</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Books and papers</th><th scope="col">Confirm with the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE, Classes 6 to 10</td><td>NCERT: Curiosity in Classes 6 and 7, Exploration in Class 9; one combined science paper at Class 10</td><td>Do your notes follow the current NCERT editions?</td></tr>
      <tr><td>ICSE, Classes 9 and 10</td><td>School-chosen texts within the CISCE syllabus; three separate papers at Class 10</td><td>Can you take all three, or which one is your strength?</td></tr>
      <tr><td>GSEB, up to SSC</td><td>The board's textbooks, in Gujarati or English medium; past papers on the board's e-service site</td><td>Will you teach in my child's medium, with the same terms?</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Up to Class 10, one tutor for all three sciences usually works well. A single teacher sees why a physics
    numerical keeps failing, whether it is the arithmetic or the idea, and can move time between subjects as tests
    come round.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gns-gseb">Science on the Gujarat board: what should a tutor bring?</h2>
  <p>
    The Gujarat Secondary and Higher Secondary Education Board, which has its seat in Gandhinagar, conducts the SSC
    examination at the end of Standard 10. It sets and revises its own syllabus and question-paper design, so we do
    not describe its science paper here. Its sites, gseb.org and gsebeservice.com, are where a tutor should start:
    past question papers for Standard 10, model papers with the pariroop (the board's question-paper design), and a
    subject-wise question bank for Standards 9 to 12.
  </p>
  <p>
    Three questions sort a suitable GSEB science tutor from an unsuitable one. Do they teach in the medium your child
    writes in? Will practice come from the board's textbook and its own papers rather than a CBSE workbook? And will
    diagrams and equations be drilled as hard as the theory? For SSC and HSC planning beyond science, see our
    <a href="{{ url('/gujarat-board-tutor-gandhinagar') }}">Gujarat Board tutor page for Gandhinagar</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gns-early">What should science tuition do in Classes 6 to 9?</h2>
  <p>
    <strong>Classes 6 and 7.</strong> CBSE students now use NCERT's Curiosity books, which are built around activities.
    The tutor's job is to turn each activity into one clear sentence using the scientific word, and a labelled sketch.
    Notice whether your child says "evaporation" or "the water went away".
  </p>
  <p>
    <strong>Class 8.</strong> The three sciences pull apart. Numericals and word equations appear, and the habit to
    build is a unit after every number.
  </p>
  <p>
    <strong>Class 9.</strong> CBSE's 2026-27 curriculum follows NCERT's new Exploration book. The yearly exam keeps 80
    marks plus 20 internal across four units: Matter, its nature and behaviour, 27; World of living, 25; Motion, force,
    work and sound, 23; and Earth as a system, 5. Notes handed down from an older brother or sister follow the old
    book, so plan from the new chapters. Our
    <a href="{{ url('/science-home-tutor/class-6') }}">Class 6</a>,
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8</a> and
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9</a> science tutor pages describe each year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gns-ten">Where do the CBSE Class 10 science marks come from?</h2>
  <p>
    The board paper lasts three hours and is worth 80; the school adds 20, in four equal parts of 5 for periodic tests,
    multiple assessment, the portfolio and practical-based subject enrichment. Biology carries 30 of the 80, chemistry
    and physics 25 each. The table lists each unit with the drill it needs.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science, 2026-27: board marks by unit and the drill that protects them</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Drill</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances (reactions, acids, bases and salts, metals and non-metals, carbon compounds)</td><td>25</td><td>Balancing and naming every week</td></tr>
      <tr><td>World of Living (life processes, control and coordination, reproduction, heredity)</td><td>25</td><td>Diagrams labelled from memory</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>Circuit numericals with units on each line</td></tr>
      <tr><td>Natural Phenomena (light, the eye)</td><td>12</td><td>Ray diagrams with arrows</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>Short, quick revision, never skipped</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The 2026-27 sample paper has 39 questions. Twenty carry one mark each, a mix of multiple-choice and
    assertion–reason; then come six two-mark answers, seven three-mark answers, three four-mark questions based on a
    case or source, and three five-mark long answers. By thinking skill, half the paper is knowledge and
    understanding, 30% application and 20% analysis and evaluation. Each block needs its own practice: speed for the
    one-mark items, as many distinct points as marks for short answers, a careful read of the passage before
    case-based items, and an equation or diagram with clear points for the long ones. The
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a> take each chapter in
    turn, and the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page shows a board
    year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gns-school">Which topics are left to the school, and how many Class 10 exams are there?</h2>
  <p>
    Three areas are kept off the 2026-27 board paper and marked by the school instead: the electric motor,
    electromagnetic induction and the generator; evolution; and the arrangement of elements in the periodic table.
    They still count internally and return in Class 11, so teach them properly without spending board-revision weeks
    on them. The curriculum also lists 14 experiments that board questions draw on, which makes the practical file a
    revision tool rather than a chore.
  </p>
  <p>
    Every Class 10 student sits the compulsory main exam, and eligible students may take an optional second sitting
    to improve up to three subjects, science among them. Dates for 2027 are awaited on cbse.gov.in, so prepare as if
    the main exam is the only one. The
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> maps the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gns-icse">How is ICSE science different?</h2>
  <p>
    At ICSE Class 10, CISCE examines Physics, Chemistry and Biology as three separate papers, each with its own
    internal assessment. Schools pick their own textbooks within the syllabus, so the tutor has to work from your
    child's books and CISCE specimen papers, not from an NCERT plan. Precise definitions and fully worked numericals
    win the marks. Many families need help in only one of the three, usually from Class 9. ICSE-experienced science
    tutors are fewer, so mention ICSE in your first message; online lessons widen the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gns-week">What does a good weekly science session look like?</h2>
  <ol>
    <li><strong>A short recall.</strong> Last week's terms, equations and one diagram, written from memory.</li>
    <li><strong>The school chapter.</strong> Whatever the class is on now, taught from your child's own book.</li>
    <li><strong>One numerical or equation set.</strong> Solved line by line, with units or state symbols where needed.</li>
    <li><strong>One exam-style answer.</strong> Written by the child and marked before the tutor leaves.</li>
    <li><strong>Homework that can be checked.</strong> A short set, looked at first thing next session.</li>
  </ol>
  <p>
    Bring a recent school test to the free demo and ask the tutor to work from it. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> lists more to
    watch for. If the first tutor is not right, the next demo is with someone else on your shortlist, and switching
    later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gns-local">How does your locality shape the after-school slot?</h2>
  <p>
    For a child in Classes 6 to 10, tuition usually falls between school and dinner, so a short, regular trip matters
    more than anything else. Six localities show what to plan for; our
    <a href="{{ url('/city/gandhinagar') }}">Gandhinagar page</a> lists the rest.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Gandhinagar localities: homes, how the tutor gets in, and the timing to agree</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Getting in</th><th scope="col">Timing</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $gnsA('sector-21', 'Sector 21') !!}</td><td>Independent houses on plots behind a busy shopping area</td><td>Doorstep arrival; parking is easier inside the sector than on the market front</td><td>A fixed weekday hour, as the shops crowd in the evening</td></tr>
      <tr><td>{!! $gnsA('sectors-25-26', 'Sectors 25 and 26') !!}</td><td>Mainly homes in 25; the state industrial estate shares Sector 26</td><td>Most homes face the sector roads, so the tutor parks outside</td><td>Early evening or weekends, away from estate working hours</td></tr>
      <tr><td>{!! $gnsA('sector-30', 'Sector 30') !!}</td><td>Government quarters in numbered blocks, with private houses and flats</td><td>Share the block and quarter number; some colony gates ask the family's name</td><td>After school, before office traffic builds on NH-147</td></tr>
      <tr><td>{!! $gnsA('pethapur', 'Pethapur') !!}</td><td>An old town beside newer bungalow colonies and apartment projects</td><td>A landmark for the old lanes; gated colonies may ask visitors to sign in</td><td>No metro station here; tutors usually ride or drive from nearby sectors</td></tr>
      <tr><td>{!! $gnsA('sectors-6-7-8', 'Sectors 6, 7 and 8') !!}</td><td>Original-grid sectors with independent houses on numbered plots</td><td>A junction name such as CH-1 plus block and plot is usually enough</td><td>A regular weekday slot, agreed before the demo</td></tr>
      <tr><td>{!! $gnsA('sectors-2-3', 'Sectors 2 and 3') !!}</td><td>Independent and duplex houses in lettered blocks</td><td>Doorstep arrival and easy parking</td><td>Avoid the start and end of office hours towards Infocity</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    When a suitable science tutor lives across the city, one home session and one online session a week keeps the
    rhythm without a second long trip. The
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article helps decide.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gns-fees">How much does a science home tutor in Gandhinagar cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees. Within Classes 6 to 10, the board year usually costs more than the middle years, and the trip to your
    locality and the number of weekly lessons matter too. Every fee is visible before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gns-next">What happens after you contact us?</h2>
  <p>
    Tell us the class, the board and medium, the science that worries your child most, your sector and block or your
    locality with a landmark, and the afternoons that work. We send two or three science tutors with their fees, and
    you pick one for a free demo. If nobody suitable can reach you at that hour, we suggest an online or part-online
    plan. NXTutors works from Sector 66, Gurugram, and teaches online across India; the national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page explains our approach, and the
    <a href="{{ url('/maths-home-tutor-gandhinagar') }}">maths home tutor in Gandhinagar</a> page covers the other
    core subject.
  </p>
  <p>
    Science teachers living in Gandhinagar who want students near home can see open requests on the
    <a href="{{ url('/tuition-jobs/gandhinagar') }}">Gandhinagar tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
