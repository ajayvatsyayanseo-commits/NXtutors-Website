{{--
  Long-form guide for the "physics home tutor Port Blair" page (Sri Vijaya
  Puram, Andaman and Nicobar Islands; Classes 11 and 12 on CBSE, with JEE and
  NEET physics). Byline in config: NXTutors Academic Team.

  Board position only from the research file's board_facts
  (southandaman.nic.in/education: secondary and senior secondary schools
  affiliated to CBSE; CASIAN list archived June 2025 naming senior secondary
  schools at School Line, Haddo and Prothrapur). No school counts or names.
  CBSE and entrance facts reuse checked statements in database/seo-content/blog:
  cbse-class-12-physics-strategies (042; 70 + 30; 33 questions in sections A-E:
  16 x 1 incl. 4 assertion-reason, 5 x 2, 7 x 3, 2 x 4 case study, 3 x 5;
  blocks: electricity and magnetism 33, optics with EM waves 18, modern physics
  12, semiconductors 7; practical 7 + 7, record 5, activity 3, project 3, viva
  5; recall about 38%; transistors and logic gates not in the 2026-27
  syllabus; in 2026 practicals from January and theory from 17 February),
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026: 75 questions,
  25 per subject, 20 MCQ + 5 numerical, +4/-1) and
  neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026: 180
  questions, physics 45, +4/-1).
  Local facts only from database/seo-content/areas/port-blair-research.json.
  No tourism, no coaching institute/school/college/hospital/society/people
  names, no distances or travel times, only the allowed fee sentence. Area
  links render only for active areas.
--}}
@php
  $pbpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pbpA = function (string $slug, string $label) use ($pbpSlugs) {
      return in_array($slug, $pbpSlugs, true)
          ? '<a href="' . e(url('/city/port-blair/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pbp-guide" aria-labelledby="pbpGuideTitle">
  <h2 id="pbpGuideTitle">Physics home tutor in Sri Vijaya Puram (Port Blair): derivations, circuits and a plan that survives ship days and monsoon evenings</h2>

  <p class="nx-guide__lede">
    Physics in Classes 11 and 12 is the subject where a student can follow every lesson and still be unable to
    start a fresh question. In Sri Vijaya Puram, the island capital many still call Port Blair, senior secondary
    schools are affiliated to CBSE, and CBSE's list places several in and around the city, from School Line to
    Prothrapur. So the target paper is usually clear; what parents need is a tutor who can turn understanding into
    marks, keep the practical file in order and, where JEE or NEET is planned, add timed objective work without
    losing the board. NXTutors suggests two or three physics tutors who fit the class, the plan and your locality,
    shows every fee first, and the opening lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pbp-paper">The Class 12 paper</a> ·
    <a href="#pbp-blocks">Where the marks sit</a> ·
    <a href="#pbp-eleven">Class 11 first</a> ·
    <a href="#pbp-lab">The practical 30</a> ·
    <a href="#pbp-entrance">JEE and NEET physics</a> ·
    <a href="#pbp-language">Reading the question</a> ·
    <a href="#pbp-places">Five localities</a> ·
    <a href="#pbp-mix">Home and online</a> ·
    <a href="#pbp-trial">The demo</a> ·
    <a href="#pbp-money">Fees and request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pbp-paper">What does the CBSE Class 12 physics paper look like?</h2>
  <p>
    Physics (042) carries 70 marks for the three-hour theory paper and 30 for the practical examination. CBSE's
    2026-27 sample paper keeps the design of the previous session: 33 compulsory questions in five sections, with
    internal choice in some.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 physics, 2026-27 sample paper: sections and what each asks of a student</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Questions</th><th scope="col">Marks</th><th scope="col">What it asks</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>16 (12 multiple choice, 4 assertion-reason)</td><td>1 each, 16</td><td>Quick, exact recall and reasoning</td></tr>
      <tr><td>B</td><td>5</td><td>2 each, 10</td><td>A definition with one consequence, or a short numerical</td></tr>
      <tr><td>C</td><td>7</td><td>3 each, 21</td><td>Short derivations and three-part "explain why" answers</td></tr>
      <tr><td>D</td><td>2 case studies</td><td>4 each, 8</td><td>Reading a passage and answering in parts</td></tr>
      <tr><td>E</td><td>3</td><td>5 each, 15</td><td>A derivation, a diagram and a numerical together</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Only around 38% of the marks reward remembering and understanding; the rest ask a student to apply, analyse or
    evaluate. A tutor who only dictates notes is preparing for a paper that no longer exists.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbp-blocks">Which chapters carry the most marks?</h2>
  <ul>
    <li><strong>Electricity and magnetism, 33 marks.</strong> Two blocks covering seven chapters, from electric charges to alternating current: close to half the theory paper.</li>
    <li><strong>Optics with electromagnetic waves, 18 marks.</strong> The largest single block, heavy on ray diagrams and instruments.</li>
    <li><strong>Modern physics, 12 marks.</strong> Dual nature, atoms and nuclei: compact and often numerical.</li>
    <li><strong>Semiconductor electronics, 7 marks.</strong> A short chapter with a narrow syllabus.</li>
  </ul>
  <p>
    The curriculum also marks some topics as "no derivation" or "qualitative only", and some topics older guides
    still teach, such as transistors and logic gates, are not in the 2026-27 syllabus at all. Ask any tutor to show you
    which edition of the syllabus they plan from. Our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> guide covers each
    chapter and its limits.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbp-eleven">Why does Class 11 physics decide Class 12?</h2>
  <p>
    Class 11 is examined by the school, so it is tempting to coast. That is a mistake in physics. Vectors, calculus
    used as a tool, kinematics and the laws of motion return in every Class 12 chapter, and in every entrance paper.
    A student who arrives in Class 12 unable to resolve a vector or differentiate a simple expression spends the
    first term catching up instead of moving ahead. Class 11 also brings the first school practicals with proper
    observation tables, so the habit of recording readings with units and a sensible number of significant figures can
    start here rather than in the Class 12 rush.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A Class 11 physics checklist for the first two terms</caption>
    <thead>
      <tr><th scope="col">Skill</th><th scope="col">Test it with</th></tr>
    </thead>
    <tbody>
      <tr><td>Units and dimensions</td><td>Checking whether a given formula can be right</td></tr>
      <tr><td>Vectors</td><td>Resolving a force on an inclined plane without help</td></tr>
      <tr><td>Graphs of motion</td><td>Reading velocity and displacement from a single graph</td></tr>
      <tr><td>Free-body diagrams</td><td>Drawing one before any equation is written</td></tr>
      <tr><td>Energy and momentum</td><td>Choosing the right conservation law for a collision</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbp-lab">How can a tutor help with the 30 practical marks?</h2>
  <p>
    The practical marks are split into two experiments, one from each section, worth 7 each; the practical record, 5;
    one activity, 3; an investigatory project, 3; and a viva on the experiments, activities and project, 5. Nearly
    all of it is within a student's control. A tutor at home can check every record entry for aim, circuit or ray
    diagram, observation table and result; help choose and finish a project on time; and run short mock vivas on the
    experiments done at school. In 2026 the Class 12 practical examinations began in January, ahead of the theory
    papers that started on 17 February, so the record has to be complete well before the winter revision months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbp-entrance">How should JEE or NEET physics fit around the board?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Physics in the two entrance tests, as NTA ran them in 2026</caption>
    <thead>
      <tr><th scope="col">Test</th><th scope="col">Physics questions</th><th scope="col">Marking</th><th scope="col">What it rewards</th></tr>
    </thead>
    <tbody>
      <tr><td>JEE Main Paper 1</td><td>25 of 75: 20 multiple choice, 5 numerical answer</td><td>+4 correct, −1 wrong</td><td>Multi-step problem solving at speed</td></tr>
      <tr><td>NEET (UG)</td><td>45 of 180 multiple-choice questions</td><td>+4 correct, −1 wrong</td><td>Fast, accurate application of NCERT physics</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Entrance syllabi are set by the testing body, not CBSE, and can include topics the board leaves out, so a
    tutor should mark those topics separately. Keep board writing and entrance drills in different sessions: one
    builds full, step-by-step answers, the other builds speed and judgement about when to skip. A specialist in
    advanced JEE physics may not live on the island, and an online specialist alongside a local board tutor is a common
    answer. See the national <a href="{{ url('/jee-home-tutor') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor') }}">NEET</a> home tutor pages and our comparison of
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching, a home tutor or both</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbp-language">Why does reading the question matter so much here?</h2>
  <p>
    The district lists five mediums of instruction, English, Hindi, Tamil, Telugu and Bengali, and a student who
    studied in one of them up to Class 10 may meet English-only physics papers later. Physics questions are dense: a
    single sentence can hide a sign convention, a direction and a unit. Ask the tutor to make your child underline the
    given quantities, circle what is asked and write the relevant law in words before using a formula. It slows the
    first weeks and saves marks for the rest of the year.
  </p>
  <p>
    The case studies in Section D need the same care. Each is built on a short passage, and the four parts usually
    depend on reading one line correctly. Practising one unseen case passage a week, aloud and then in writing, trains
    the student to slow down where it matters and to keep the physics separate from the story around it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbp-places">What helps a physics tutor in five localities?</h2>
  <p>
    The <a href="{{ url('/city/port-blair') }}">Sri Vijaya Puram (Port Blair) page</a> lists every locality.
  </p>
  <ul>
    <li><strong>{!! $pbpA('school-line', 'School Line') !!}:</strong> senior secondary classes nearby mean Class 11 and 12 science is a frequent need. Give the lane and a landmark rather than only a house number, and agree where the tutor parks.</li>
    <li><strong>{!! $pbpA('prothrapur', 'Prothrapur') !!}:</strong> one of the larger settlements of South Andaman, with senior secondary classes of its own. A map pin helps; for a specialist subject, a home tutor for homework plus an online specialist is practical.</li>
    <li><strong>{!! $pbpA('bathubasti', 'Bathubasti') !!}:</strong> apartment buildings and houses around a local bazaar. Give the floor and flat number, and start before the evening market rush.</li>
    <li><strong>{!! $pbpA('phoenix-bay', 'Phoenix Bay') !!}:</strong> homes near the jetty and government offices. Keep sessions away from ship departure and arrival times.</li>
    <li><strong>{!! $pbpA('austinabad', 'Austinabad') !!}:</strong> partly brought into the city in the 2015 expansion. Tutors from the centre may come on fixed days only, so agree the weekly pattern before the demo.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbp-mix">Is a home and online mix sensible for physics?</h2>
  <p>
    Often it is. A visit suits derivations and long answers, where the tutor needs to watch the working line by line,
    and checking the practical record is easier with the file on the table. Objective entrance practice, doubt
    sessions and mock reviews run well online. Families who travel between islands for work, and evenings in the
    monsoon months, also make a fixed online fallback worth agreeing on day one. The
    <a href="{{ url('/online-tutor-port-blair') }}">online tutors for Port Blair</a> page and our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> comparison cover the set-up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbp-trial">How can you judge a physics tutor at the demo?</h2>
  <ol>
    <li>Ask for one five-mark question from Section E, taught from scratch: does the tutor plan the answer before writing it?</li>
    <li>Ask which topics are "no derivation" this year. A current tutor knows.</li>
    <li>Ask to see how they would check a record entry.</li>
    <li>If an entrance exam is planned, ask how the week divides between board and objective work.</li>
  </ol>
  <p>
    Not sure? The next tutor on the shortlist can give a demo, and switching later is free. See the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbp-money">What does a physics tutor cost, and what should you send?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees and you see each one before the demo; the <a href="{{ url('/blog/home-tuition-fees-port-blair') }}">Port
    Blair home tuition fees</a> guide lists the questions to ask.
  </p>
  <p>
    Send the class, whether JEE or NEET is planned, the chapters that are hurting, your locality and your free
    evenings. Two or three physics tutors come back with fees attached. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. Related pages:
    <a href="{{ url('/chemistry-home-tutor-port-blair') }}">chemistry</a> and
    <a href="{{ url('/maths-home-tutor-port-blair') }}">maths</a> tutors in Port Blair, the
    <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics tutor</a> page and the national
    <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page. Physics teachers can see requests on
    <a href="{{ url('/tuition-jobs/port-blair') }}">Port Blair tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
