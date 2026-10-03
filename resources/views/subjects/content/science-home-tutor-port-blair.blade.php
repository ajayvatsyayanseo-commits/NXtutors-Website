{{--
  Long-form guide for the "science home tutor Port Blair" page (Sri Vijaya
  Puram, Andaman and Nicobar Islands; Classes 6 to 10, CBSE). Byline in config:
  Aaditya Kashyap, role statement only (CBSE/ICSE science), no anecdotes.

  Board position only from the research file's board_facts:
  southandaman.nic.in/education ("All the Sr. Secondary and Secondary schools
  are affiliated to CBSE"; mediums English, Hindi, Tamil, Telugu, Bengali,
  figures dated 2008) and the archived CASIAN list
  (web.archive.org/web/20250621131025/https://education.andaman.gov.in/casian/).
  No school counts.
  CBSE facts reuse checked statements in database/seo-content/blog:
  cbse-class-10-science-notes (five units 25/25/12/13/5; 80 + 20, internal =
  periodic assessment, multiple assessment, portfolio, practical work; 39
  questions in the 2026-27 sample paper: 20 x 1, 6 x 2, 7 x 3, 3 x 4, 3 x 5;
  sections Biology 30, Chemistry 25, Physics 25; competency split 50/30/20)
  and cbse-class-10-board-year-plan-gurgaon (two Class 10 exams); Class 9
  common paper and optional Advanced paper as on cbse-home-tutor-gurgaon.
  Local facts only from database/seo-content/areas/port-blair-research.json.
  No tourism, no school/college/hospital/society/people names, no distances or
  travel times, only the allowed fee sentence. Area links render only for
  active areas.
--}}
@php
  $pbsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pbsA = function (string $slug, string $label) use ($pbsSlugs) {
      return in_array($slug, $pbsSlugs, true)
          ? '<a href="' . e(url('/city/port-blair/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pbs-guide" aria-labelledby="pbsGuideTitle">
  <h2 id="pbsGuideTitle">Science home tutor in Sri Vijaya Puram (Port Blair): three sciences in one paper, taught in words your child knows</h2>

  <p class="nx-guide__lede">
    From Class 6 to Class 10, science is three subjects sharing one notebook. A Class 10 student in Sri Vijaya
    Puram, still widely called Port Blair, will write balanced equations, trace a ray through a lens and label the
    human heart for the same CBSE paper, because the district's secondary schools are affiliated to CBSE. Many
    children here also learn in Hindi, Tamil, Telugu or Bengali before, or alongside, English, so a tutor has to teach
    the science and the vocabulary together. NXTutors asks for the class, the medium and your locality, then suggests
    two or three science tutors, each with a fee you see before the free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pbs-author">The byline</a> ·
    <a href="#pbs-ladder">Class by class</a> ·
    <a href="#pbs-paper">The Class 10 paper</a> ·
    <a href="#pbs-skills">Three skills</a> ·
    <a href="#pbs-words">Science vocabulary</a> ·
    <a href="#pbs-internal">The 20 school marks</a> ·
    <a href="#pbs-areas">Five localities</a> ·
    <a href="#pbs-mode">Home or online</a> ·
    <a href="#pbs-demo">The demo</a> ·
    <a href="#pbs-fee">Fees and next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pbs-author">Who writes the science advice here?</h2>
  <p>
    The byline is Aaditya Kashyap, whose role at NXTutors covers CBSE and ICSE science. Paper details follow CBSE's
    2026-27 curriculum and sample paper as set out in our Class 10 science notes; when the board posts a newer
    document, that document is the one to trust. Board position for the islands comes from the South Andaman district
    administration's education page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbs-ladder">What should science tuition aim for in each class?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science from Class 6 to Class 10 on CBSE: what to secure at each step</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Focus for the tutor</th><th scope="col">A sign it is working</th></tr>
    </thead>
    <tbody>
      <tr><td>6 and 7</td><td>Careful reading of the NCERT chapter and simple activities at home</td><td>Your child can explain an activity's result in their own words</td></tr>
      <tr><td>8</td><td>Units, simple measurements and the first chemical names</td><td>Answers carry units without being reminded</td></tr>
      <tr><td>9</td><td>Motion numericals, atoms and molecules, the cell</td><td>Numericals are set out as given, formula, working, answer</td></tr>
      <tr><td>10</td><td>The full board paper across chemistry, biology and physics</td><td>Timed sections finished with diagrams labelled</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Class 9 now has a common science paper for every student and an optional Advanced paper of 25 marks in one hour.
    The Advanced score does not count in the aggregate; 50% or more is noted on the marksheet. A good tutor will tell
    you whether your child should attempt it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbs-paper">How is the Class 10 science paper put together?</h2>
  <p>
    The board paper carries 80 marks and the school awards 20 more. The 2026-27 curriculum lists five units, and the
    sample paper groups the questions by science:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science, 2026-27: units, marks and how the sample paper groups them</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Sample-paper section</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances: Nature and Behaviour</td><td>25</td><td>Chemistry, 25</td></tr>
      <tr><td>World of Living</td><td>25</td><td rowspan="2">Biology, 30</td></tr>
      <tr><td>Natural Resources (Our Environment)</td><td>5</td></tr>
      <tr><td>Natural Phenomena (light, the eye)</td><td>12</td><td rowspan="2">Physics, 25</td></tr>
      <tr><td>Effects of Current</td><td>13</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The sample paper sets 39 questions: twenty of one mark (multiple choice and assertion-reason), six of two marks,
    seven of three, three case-based questions of four marks and three long answers of five. Each science has its own
    case study and its own long answer. The design weights competencies at 50% knowledge and understanding, 30%
    application and 20% analysis and evaluation, so half the paper asks for more than recall.
  </p>
  <p>
    Class 10 also has two board examinations: everyone sits the first, and a student who passes may take the second
    to improve up to three subjects, science among them. Our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> go chapter by chapter, and the
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page explains the match for the board
    year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbs-skills">Which three skills earn science marks?</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Exact chemistry</h3>
  <p>
    Equations balanced with state symbols, products named correctly and observations written as the examiner wants
    them: a colour change, a gas given off, a precipitate formed.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Labelled biology</h3>
  <p>
    Diagrams drawn neatly and labelled in full, and processes explained in order: digestion, reflex action,
    inheritance across two generations.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Disciplined physics</h3>
  <p>
    A formula stated before numbers go in, the sign convention used for mirrors and lenses, and arrows on every ray
    and every circuit diagram.
  </p>
    </div>
  </div>
  <p>
    A tutor who is strong in one science and weak in another can leave a third of the paper uncovered. Ask at the demo
    how the tutor would split a week across all three. A simple rotation works for most Class 10 students: one
    chemistry and one physics topic each week, biology diagrams practised in short bursts on both visits, and a mixed
    set of one-mark questions at the end of every session so older chapters are not forgotten.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbs-words">How does the medium of instruction affect science?</h2>
  <p>
    The district's education page lists five mediums of instruction, and the city research notes Telugu-medium and
    Hindi-medium schooling at Haddo and a Tamil-medium primary school on the Aberdeen side. Science carries a heavy load
    of technical words, and a child who knows "photosynthesis" or "refraction" by a different name can understand the
    idea and still lose marks on a label or a definition. A science tutor can help by:
  </p>
  <ol>
    <li><strong>Teaching the idea first,</strong> in whatever language makes it click.</li>
    <li><strong>Then fixing the exam word,</strong> written and spelt exactly as the paper uses it.</li>
    <li><strong>Keeping a running word list</strong> for each chapter, tested aloud for a few moments at the start of every lesson.</li>
    <li><strong>Practising one-line definitions</strong> until they come out correctly without notes.</li>
  </ol>
  <p>
    Mention the school's medium when you send a request, so we can look for a tutor who can explain in it.
  </p>
  <p>
    The same care helps in the case-based questions. A four-mark case study opens with a short passage, often about
    an everyday situation, and a child who reads English slowly can spend too long on the passage and too little on
    the answers. Weekly practice with one unseen case passage, read aloud, then answered part by part, builds both
    reading speed and confidence before the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbs-internal">What about the 20 marks the school awards?</h2>
  <p>
    Internal assessment in Class 10 science is built from periodic assessment, multiple assessment, a portfolio and
    practical work. These marks reward steady habits more than a rush in the final weeks. A tutor at home can keep the
    practical notebook complete, with aim, diagram, observation and result for every activity; check that the
    portfolio holds the work the school expects; and rehearse explaining an experiment aloud, which also helps with
    the case-based questions on the paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbs-areas">How do science tutors reach five localities?</h2>
  <p>
    Every locality we cover is listed on the <a href="{{ url('/city/port-blair') }}">Sri Vijaya Puram (Port Blair)
    page</a>. Here is what helps a tutor in five of them.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Practical notes for a science tutor's first visit</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">What to tell the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $pbsA('haddo', 'Haddo') !!}</td><td>One of the oldest named parts of the city, with schooling in several languages; for a quarters block, give the block, quarter number and nearest gate</td></tr>
      <tr><td>{!! $pbsA('phoenix-bay', 'Phoenix Bay') !!}</td><td>Homes beside the jetty and government offices; avoid ship departure and arrival times and give Transport Bhawan as a landmark</td></tr>
      <tr><td>{!! $pbsA('delanipur', 'Delanipur') !!}</td><td>A residential area; in a house the tutor can usually come to the door, in a flat give the block and number</td></tr>
      <tr><td>{!! $pbsA('dairy-farm', 'Dairy Farm') !!}</td><td>A residential locality where most children follow CBSE from the early classes; a clear landmark helps on the first visit</td></tr>
      <tr><td>{!! $pbsA('brookshabad', 'Brookshabad') !!}</td><td>Partly inside the city and partly just outside; share the lane, a landmark and a map pin</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone pages for <a href="{{ url('/city/port-blair/zone/aberdeen-old-town') }}">Aberdeen and the old town</a>,
    <a href="{{ url('/city/port-blair/zone/junglighat-central-localities') }}">Junglighat and the central
    localities</a> and the <a href="{{ url('/city/port-blair/zone/expansion-villages') }}">expansion villages</a> add
    more local detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbs-mode">Should science tuition be at home or online?</h2>
  <p>
    For Classes 6 to 8, a tutor at the table usually works better: younger children need someone watching the
    notebook, and small activities are easier to do together. From Class 9, much of science moves well to a screen.
    Diagrams can be drawn on a tablet, numericals photographed and marked, and a short chapter test run in a few
    moments. On an island where the right teacher for a particular science may live across the city, one home
    session and one online session a week is a sensible mix, and the online slot can absorb heavy-rain evenings in
    the monsoon months. The <a href="{{ url('/online-tutor-port-blair') }}">online tutors for Port Blair</a> page
    explains the set-up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbs-demo">What should a good science demo include?</h2>
  <ul>
    <li>A few quick questions to find what your child already knows before any teaching starts.</li>
    <li>At least one diagram or equation written by your child, not only by the tutor.</li>
    <li>A case-based question read aloud and broken into parts.</li>
    <li>A plan that names all three sciences, not just the tutor's favourite.</li>
    <li>Homework, and a day when it will be checked.</li>
  </ul>
  <p>
    If the demo does not convince you, another tutor from the shortlist can take the next one, and switching later is
    free. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more ideas.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbs-fee">What does a science home tutor cost, and how do you start?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees, and each one is visible before you book the demo. The <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    and <a href="{{ url('/blog/home-tuition-fees-port-blair') }}">home tuition fees in Port Blair</a> explain what to
    ask.
  </p>
  <p>
    Send the class, the school's medium, the chapters that worry you, your locality and the free afternoons. Two or
    three science tutors come back with their fees, and you choose who gives the free
    <a href="{{ url('/demo-class') }}">demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. From Class 11 the sciences split: see
    <a href="{{ url('/physics-home-tutor-port-blair') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-port-blair') }}">chemistry</a> and
    <a href="{{ url('/biology-home-tutor-port-blair') }}">biology</a> tutors in Port Blair, or the national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page. Science teachers in the islands can find
    requests on <a href="{{ url('/tuition-jobs/port-blair') }}">Port Blair tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
