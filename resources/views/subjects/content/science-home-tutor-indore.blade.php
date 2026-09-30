{{--
  Long-form guide for the "science home tutor Indore" page (Classes 6 to 10,
  CBSE and ICSE, MP Board in general terms). Byline in config: Aaditya
  Kashyap; role statement only, no anecdotes. Local facts come only from
  database/seo-content/areas/indore-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions by type, 30/25/25 sections, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, formative-only topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science as already stated on the Delhi and Faridabad science
  pages. No school, society, mall or people's names, no distances or travel
  times, only the allowed fee sentence.

  Area links render only when that Indore area page exists and is active.
--}}
@php
  $inAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $inA = function (string $slug, string $label) use ($inAreaSlugs) {
      return in_array($slug, $inAreaSlugs, true)
          ? '<a href="' . e(url('/city/indore/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ids-guide" aria-labelledby="idsGuideTitle">
  <h2 id="idsGuideTitle">Science home tutor in Indore, Classes 6 to 10: teach from the right book, then train for the paper</h2>

  <p class="nx-guide__lede">
    Science in the school years is three subjects sharing one timetable slot. Physics asks for numbers and diagrams,
    chemistry for equations and exact names, biology for labelled drawings and precise terms. A science tutor for an
    Indore child in Classes 6 to 10 has to handle all three, teach from the book your child's board prescribes, and
    arrive at the same after-school hour each week. NXTutors puts forward two or three science tutors able to do that
    in your locality. Every fee is on the shortlist before you meet, and your first class with the chosen tutor costs
    nothing.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ids-books">Which book</a> ·
    <a href="#ids-middle">Classes 6 to 8</a> ·
    <a href="#ids-nine">Class 9</a> ·
    <a href="#ids-ten">The Class 10 paper</a> ·
    <a href="#ids-school">School-assessed topics</a> ·
    <a href="#ids-icse">ICSE science</a> ·
    <a href="#ids-near">Six localities</a> ·
    <a href="#ids-notebook">Notebook check</a> ·
    <a href="#ids-fees">Fees</a> ·
    <a href="#ids-start">Starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ids-books">Which science book is your child actually learning from?</h2>
  <p>
    Aaditya Kashyap is responsible for the CBSE and ICSE science guidance on this page. The first thing he asks a tutor
    to confirm is the book, because a plan built on the wrong one wastes weeks:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science books and papers for Indore students in Classes 6 to 10, and what the tutor should confirm</caption>
    <thead>
      <tr><th scope="col">Board and class</th><th scope="col">Book or syllabus</th><th scope="col">Tutor should confirm</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Classes 6 and 7</td><td>NCERT <em>Curiosity</em>, built around activities</td><td>That each activity ends in a written sentence and a labelled sketch</td></tr>
      <tr><td>CBSE Class 9</td><td>NCERT's new <em>Exploration</em> book</td><td>That notes from the old book are set aside</td></tr>
      <tr><td>CBSE Class 10</td><td>NCERT, one board paper of 80</td><td>The current sample paper and marking scheme</td></tr>
      <tr><td>ICSE Classes 9 and 10</td><td>School-chosen books within the CISCE syllabus</td><td>The exact titles on your child's desk and CISCE specimen papers</td></tr>
      <tr><td>MP Board</td><td>Board of Secondary Education, Madhya Pradesh syllabus</td><td>The prescribed textbook and the board's official notices</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For MP Board students we keep our advice general, since the board publishes its own syllabus and exam details; a
    tutor should follow those rather than a CBSE plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ids-middle">What should science tuition look like in Classes 6 to 8?</h2>
  <p>
    The aim in these years is habits, not marks. In Classes 6 and 7, the tutor turns each <em>Curiosity</em> activity
    into the correct scientific word and a neat labelled diagram, so observation becomes explanation. By Class 8,
    physics, chemistry and biology begin to behave like separate subjects: simple numericals appear, word equations
    arrive, and units stop being optional. A single tutor covering physics, chemistry and biology usually works well
    here, with a practical benefit: the same person notices when a physics question is really failing on arithmetic. The
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> page covers these years; how we work
    in every city is on the national <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ids-nine">Why does Class 9 science need a fresh plan this session?</h2>
  <p>
    Class 9 students now study from <em>Exploration</em>, the new NCERT book on which CBSE bases its 2026-27
    curriculum. Marks stay at 80 for the annual paper plus 20 from the school. The smallest unit, Earth as a system,
    is worth 5; Motion, force, work and sound is worth 23; World of living, 25; and the largest, Matter: its nature and
    behaviour, 27. Motion graphs, the particle nature of matter and the cell tend to arrive in the same months, which
    is why gaps open quickly in Class 9. In the school lab, children make onion-peel and cheek-cell slides, separate
    mixtures and plot graphs of motion; when a tutor explains the reason behind each step, the linked theory
    questions become far simpler. More on this year is on the
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ids-ten">How is the CBSE Class 10 science board paper built?</h2>
  <p>
    Candidates get three hours for an 80-mark paper. The remaining 20 are internal, 5 each for periodic tests,
    multiple assessment, the portfolio and practical-based subject enrichment. In the 2026-27 sample paper there are
    39 questions in all. Twenty are one-markers, assertion–reason among them. Then come 6 two-mark and 7 three-mark
    short answers, 3 four-mark questions built on a case or source, and 3 five-mark long answers. On thinking
    skills, one mark in five goes to analysis and evaluation, three in ten to application, and the rest to knowledge
    and understanding. By strand, biology has 30 marks, with 25 apiece for chemistry and physics. By unit:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science, 2026-27: marks by unit and a weekly habit for each</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Weekly habit</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances</td><td>25</td><td>Balanced equations with state symbols, written from memory</td></tr>
      <tr><td>World of Living</td><td>25</td><td>One labelled diagram redrawn without looking</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>A circuit numerical with units on every line</td></tr>
      <tr><td>Natural Phenomena</td><td>12</td><td>A ray diagram with arrows and the image marked</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>A short case-based passage read and answered</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Chapter notes are in our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a>;
    for how we match a tutor to the board year, see the
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page.
  </p>
  <p>
    Sample papers work well in stages. From April to October, set one section at the end of each chapter and mark
    it against CBSE's official scheme, so your child learns where marks are given. From November, sit complete papers
    in three hours and review one strand in depth each week. In the pre-board months, older board papers add volume,
    though they hold fewer case-based questions than the current design, so recent sample papers stay the core. A
    short list of repeated errors, reread in the final month, is worth more than one extra paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ids-school">Which Class 10 topics are marked by the school, not the board?</h2>
  <p>
    Three areas stay out of the 2026-27 board paper and are assessed by the school through the year: periodic
    classification of elements; evolution; and the group of electric motor, electromagnetic induction and generator.
    Internal marks depend on them and Class 11 picks them up again, so they are taught, just not revised for the
    board. The curriculum also names 14 experiments that board questions are built on, which makes the practical file
    useful revision material.
  </p>
  <p>
    The main board exam is compulsory for every Class 10 student. A second, optional sitting allows eligible students
    to try to raise their score in a maximum of three subjects, and science qualifies. With 2027 dates still to come
    on cbse.gov.in, plan as if the main sitting is the only one. Our
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> maps the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ids-icse">How is ICSE science different?</h2>
  <p>
    For ICSE Class 10, CISCE sets Physics, Chemistry and Biology as three papers, and internal assessment is attached
    to each one. Each school picks its textbooks inside the CISCE syllabus, which means the tutor needs those exact
    books and CISCE specimen papers; an NCERT-based plan will not line up. Marks tend to leak through vague
    definitions and numericals left half done. From Class 9, some parents hire help only for the paper their child
    finds hardest. Tutors with ICSE science experience are scarcer than CBSE tutors, so put the request in early and
    keep online lessons as a fallback.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ids-near">How does an after-school science slot work in six Indore localities?</h2>
  <p>
    A younger child's lesson normally sits in the gap after school and before the evening meal, so the tutor's trip
    must be short and reliable. Six localities across our four Indore zones show the range; every locality's tutors are on the
    <a href="{{ url('/city/indore') }}">Indore page</a>.
  </p>
  <ul>
    <li><strong>{!! $inA('scheme-114', 'Scheme No. 114') !!}</strong>, on the Vijay Nagar side, mixes apartment buildings and plotted houses. Laxmibai Nagar and Mangliya Gaon are the nearest railway stations and the Vijay Nagar metro stops the closest Yellow Line points, so tutors finish by auto. Register the tutor with the guard once in apartments; fix a steady weekday time before roads to AB Road fill up.</li>
    <li><strong>{!! $inA('manorama-ganj', 'Manorama Ganj') !!}</strong>, a quiet, green central locality, has houses and small apartment buildings where tutors come straight to the door. City buses stop within walking reach and autos are easy to find. A class soon after school avoids the evening crowd at Geeta Bhawan Square.</li>
    <li><strong>{!! $inA('pipliyahana', 'Pipliyahana') !!}</strong>, in the south-east, has planned layouts of plotted houses and apartments beside the Eastern Ring Road. No metro serves it yet; Bengali Square is a planned station. Late afternoon or later evening avoids the office-hour crowd at the ring road junction.</li>
    <li><strong>{!! $inA('scheme-140', 'Scheme No. 140') !!}</strong>, an IDA scheme in east Indore near the Bhopal road, has apartments and plotted houses. Tutors arrive by auto, bus or two-wheeler along the Eastern Ring Road, and a slot just after school suits most families.</li>
    <li><strong>{!! $inA('sudama-nagar', 'Sudama Nagar') !!}</strong>, a large west Indore area, is mostly independent houses, so short weekday lessons are easy to fit in. Lokmanya Nagar and Indore Junction are the nearest stations via Annapurna Road, which gets busy in the evening.</li>
    <li><strong>{!! $inA('sapna-sangeeta', 'Sapna Sangeeta Road') !!}</strong> combines a shopping street with apartments, builder floors and plots. Buses and autos are plentiful; book the lesson before the evening market rush.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ids-notebook">What should you look for in the science notebook each month?</h2>
  <p>
    Parents need no science background to judge whether tuition is helping. Once a month, turn the pages and look
    for five things:
  </p>
  <ol>
    <li><strong>Exact vocabulary.</strong> "Alveoli", not "air sacs"; "oesophagus", not "food pipe".</li>
    <li><strong>State symbols where asked.</strong> Equations balanced, with (s), (l), (aq) or (g) shown.</li>
    <li><strong>Arrowed rays.</strong> Every ray diagram with arrows, and virtual rays dotted.</li>
    <li><strong>Crosses drawn out.</strong> Heredity ratios shown with the Punnett square that produces them.</li>
    <li><strong>Points to match marks.</strong> Three separate points for a three-mark answer; a diagram or equation plus four or five points for five marks.</li>
  </ol>
  <p>
    Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> suggests what
    to watch during the free demo. When the first tutor is not right, a demo with the next name on the shortlist
    follows, and switching later carries no charge.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ids-fees">How much does a science home tutor in Indore cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets a
    personal rate. Expect the board year to be priced above the middle-school years; travel to your locality and
    the number of weekly lessons matter too. Each fee is on the shortlist before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ids-start">What do we need from you?</h2>
  <p>
    Share your child's class and board, the strand giving the most trouble, your colony, scheme or sector, and the
    afternoons that are free. Two or three science tutors come back with their fees attached; choose one, and the
    first class is a free demo. If none of them can reach you at that hour, online or part-online lessons are the
    alternative we propose. NXTutors has its office in Sector 66, Gurugram, and its tutors also teach online anywhere
    in India.
  </p>
  <p>
    Science teachers in Indore who want students close to home can see open requests on the
    <a href="{{ url('/tuition-jobs/indore') }}">Indore tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
