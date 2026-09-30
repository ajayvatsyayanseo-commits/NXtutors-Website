{{--
  Long-form guide for the "science home tutor Delhi" page (Classes 6 to 10,
  CBSE and ICSE). Byline in config: Aaditya Kashyap; role statement only, no
  anecdotes. Local facts come only from
  database/seo-content/areas/delhi-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions by type, 30/25/25 sections, unit marks, internal 5/5/5/5,
  answer-writing points) and cbse-class-10-board-year-plan-gurgaon (two Class
  10 exams), plus the 50/30/20 competency split, formative-only topics, 14
  listed experiments, Class 9 Exploration unit marks, Curiosity for Classes 6
  and 7, and ICSE three-paper science as already stated on the Faridabad and
  Ghaziabad science pages. No state board is described. No school, society,
  mall or people's names, no distances or travel times, only the allowed fee
  sentence.

  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $dlAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dlA = function (string $slug, string $label) use ($dlAreaSlugs) {
      return in_array($slug, $dlAreaSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide dls-guide" aria-labelledby="dlsGuideTitle">
  <h2 id="dlsGuideTitle">Science home tutor in Delhi, Classes 6 to 10: build the habits early, then aim at the board paper</h2>

  <p class="nx-guide__lede">
    Most science marks in Class 10 are won or lost on habits formed years earlier: the exact word instead of a vague
    one, the arrow on a ray diagram, the unit after a number. A science tutor for a Delhi child in Classes 6 to 10
    should build those habits, teach from the CBSE or ICSE books your child actually uses, and reach your home at
    the same after-school hour every week. NXTutors shortlists two or three science tutors who meet those tests.
    You see what each one charges before any meeting, and the opening lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dls-ladder">Class by class</a> ·
    <a href="#dls-reach">Six localities</a> ·
    <a href="#dls-paper">The Class 10 paper</a> ·
    <a href="#dls-scope">What stays in school</a> ·
    <a href="#dls-papers">Sample papers</a> ·
    <a href="#dls-nine">Class 9 and Exploration</a> ·
    <a href="#dls-icse">ICSE science</a> ·
    <a href="#dls-habits">Five answer habits</a> ·
    <a href="#dls-fees">Fees</a> ·
    <a href="#dls-begin">How to begin</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dls-ladder">What should a science tutor focus on from Class 6 to Class 10?</h2>
  <p>
    The CBSE and ICSE science sections here are written by Aaditya Kashyap. What a tutor should do changes as a child
    moves up, and a good tutor changes with it:
  </p>
  <ol>
    <li><strong>Classes 6 and 7: noticing and naming.</strong> NCERT's <em>Curiosity</em> books are built around activities. The tutor's task is to turn each activity into a sentence with the right scientific word, and a sketch with labels.</li>
    <li><strong>Class 8: three strands appear.</strong> Physics, chemistry and biology start to feel like different subjects. Numericals arrive, and so do word equations; units become non-negotiable.</li>
    <li><strong>Class 9: a new book and a steeper year.</strong> Motion graphs, the structure of matter and the cell arrive together. This is the year gaps open fastest.</li>
    <li><strong>Class 10: the board paper.</strong> Everything is aimed at one 80-mark paper, with application questions carrying half the marks.</li>
  </ol>
  <p>
    Until the board year, a single tutor for physics, chemistry and biology is normally enough, and has one real
    advantage: the same person can see when a physics numerical is failing on algebra rather than on physics. The national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page describes our approach in every city, and
    the <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> page covers the middle years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dls-reach">How does a science tutor reach you in six different parts of Delhi?</h2>
  <p>
    For a younger child the slot usually falls between school and dinner, so a short, predictable trip matters more
    than anything else. These six localities, spread across south, west, north and east Delhi, show how the
    arrangements differ. Compare tutors in any locality on our <a href="{{ url('/city/delhi') }}">Delhi page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>South: a plotted colony and an apartment quarter</h3>
      <p>
        {!! $dlA('defence-colony', 'Defence Colony') !!} was set up in 1960 in five blocks, A to E. Many houses are now
        builder floors, and block guards keep a register, so tell them a new tutor is expected. Lajpat Nagar, a Violet
        and Pink Line interchange, and South Extension on the Pink Line are both close. In
        {!! $dlA('alaknanda', 'Alaknanda') !!}, homes are DDA and cooperative apartment complexes, each with its own
        gate. There is no station inside, so tutors come from Greater Kailash on the Magenta Line or Govindpuri on the
        Violet Line, and finish by auto.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>West and north: two planned areas</h3>
      <p>
        {!! $dlA('paschim-vihar', 'Paschim Vihar') !!} runs along Rohtak Road and has two Green Line stations of its own,
        Paschim Vihar East and West. Society flats need a name at the gate; builder floors in the plotted blocks are
        doorstep visits. {!! $dlA('pitampura', 'Pitampura') !!}, developed by the DDA in the 1980s and known for its TV
        Tower, has three Red Line stations, so most tutors arrive by metro and a short e-rickshaw ride. Its enclaves
        are doorstep visits, while DDA towers may log visitors.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>East: a plotted colony and a society belt</h3>
      <p>
        {!! $dlA('preet-vihar', 'Preet Vihar') !!} is laid out in lettered blocks of houses and builder floors, with its
        Blue Line station on Vikas Marg, opened in January 2010. Some blocks have RWA gates; after the first visit the
        tutor goes straight to the house. In {!! $dlA('patparganj', 'Patparganj') !!}, around 175 acres were allotted to
        group housing societies, so almost every family lives behind a staffed gate. Pre-register a regular tutor with
        security; IP Extension and Mandawali on the Pink Line are the nearest stations.
      </p>
    </div>
  </div>
  <p>
    Late afternoon tends to suit these slots better than the office rush on the main roads, and a tutor who lives on
    the same metro line is usually the steadiest choice for a weekday class.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dls-paper">How is the CBSE Class 10 science paper put together?</h2>
  <p>
    Candidates write for three hours for 80 board marks. Internal assessment adds 20 more, made of four parts worth 5
    each: periodic assessment, multiple assessment, portfolio, and subject enrichment through practical work. In
    CBSE's 2026-27 sample paper, the 39 questions come in five kinds:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science sample paper, 2026-27: question types, marks and the practice each one needs</caption>
    <thead>
      <tr><th scope="col">Question type</th><th scope="col">How many</th><th scope="col">Marks</th><th scope="col">Practice at home</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple-choice and assertion–reason</td><td>20</td><td>1 each, 20 in all</td><td>Ten mixed items to open every session</td></tr>
      <tr><td>Short answer</td><td>6</td><td>2 each, 12 in all</td><td>One definition plus one example, nothing extra</td></tr>
      <tr><td>Short answer</td><td>7</td><td>3 each, 21 in all</td><td>Three separate points, or an equation with two lines of reasoning</td></tr>
      <tr><td>Case- or source-based</td><td>3</td><td>4 each, 12 in all</td><td>Reading a passage or data first, theory second</td></tr>
      <tr><td>Long answer</td><td>3</td><td>5 each, 15 in all</td><td>A labelled diagram or equation with four or five points</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    By subject, biology takes 30 marks and chemistry and physics 25 each. By unit, Chemical Substances and World of
    Living carry 25 each, Effects of Current 13, Natural Phenomena 12 and Our Environment 5. Measured by thinking skill,
    20% of the paper asks for analysis and evaluation, 30% for application, and the remaining half for knowledge and
    understanding. Our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a> go chapter by chapter, and
    the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page shows how a tutor plans the
    board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dls-scope">Which Class 10 topics are assessed only in school?</h2>
  <p>
    Three areas sit outside the 2026-27 board paper and are assessed formatively by the school: the generator,
    electromagnetic induction and the electric motor; evolution; and the periodic classification of elements. A
    tutor should still teach them, because internal marks depend on them and Class 11 builds on them, but should
    not spend board-revision weeks there. The curriculum also lists 14 experiments, and the board paper asks questions built on them, so the
    practical file is revision material in its own right.
  </p>
  <p>
    Every Class 10 candidate must sit the main board exam; a later, optional exam lets eligible students raise their
    marks in as many as three subjects, and science is one of those allowed. The 2027 dates have not been published,
    so check cbse.gov.in and treat the main exam as the one that matters.
    The <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">Class 10 board-year planner</a> maps the
    months for all subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dls-papers">How should sample papers be used through the Class 10 year?</h2>
  <p>
    CBSE publishes sample question papers with marking schemes on cbseacademic well before the exam, and they are the
    most reliable guide to the current pattern. A sensible order for a science tutor:
  </p>
  <ol>
    <li><strong>April to October:</strong> single sections from the sample paper at the end of each chapter, marked against the official scheme so your child sees where each mark sits.</li>
    <li><strong>From November:</strong> full papers in three hours, with one subject section reviewed in detail each week.</li>
    <li><strong>Pre-board months:</strong> older board papers for extra practice, remembering that they carry fewer case-based questions than the current design, so competency questions from recent sample papers still need extra time.</li>
  </ol>
  <p>
    A short notebook of repeated mistakes, revised in the last month, usually does more than one more new paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dls-nine">Why is Class 9 science different this year?</h2>
  <p>
    Class 9 students this session learn from NCERT's new book, <em>Exploration</em>, which CBSE's 2026-27 curriculum
    follows. Marks remain 80 for the yearly exam and 20 internal. Of the 80, the smallest unit, Earth as a system,
    has 5; Motion, force, work and sound has 23; World of living has 25; and Matter: its nature and behaviour has 27.
    Notes handed down from an older cousin follow the old book, so plans should start from the new chapters. In
    school practicals, students prepare onion-peel and cheek-cell slides, separate mixtures and plot motion graphs;
    a tutor who explains why each set-up works makes the related theory questions far easier. See the
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dls-icse">What should ICSE families look for in a science tutor?</h2>
  <p>
    CISCE examines ICSE Class 10 science as separate Physics, Chemistry and Biology papers, and each has its own
    internal assessment alongside theory. Because every ICSE school picks textbooks within the CISCE syllabus, the
    tutor must teach from the books on your child's desk and from CISCE specimen papers; an NCERT-based plan will not
    fit. Loose definitions and half-finished numericals are where ICSE marks usually go. Some families bring in help
    only for the weakest of the three, from Class 9 onwards. ICSE-experienced science tutors are fewer than CBSE ones
    in any city, so ask early, and consider online sessions if nobody nearby is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dls-habits">Which five answer-writing habits should a tutor build?</h2>
  <ul>
    <li><strong>Precise terms.</strong> "Oesophagus", not "food pipe"; "alveoli", not "air bags". Vague words lose marks.</li>
    <li><strong>Balanced equations with state symbols.</strong> When a question asks for them, (s), (aq) and (g) carry marks.</li>
    <li><strong>Arrows on every ray.</strong> Rays without arrows, or virtual rays drawn solid, cost marks in ray diagrams.</li>
    <li><strong>Crosses shown in heredity.</strong> A ratio without its Punnett square rarely earns full marks.</li>
    <li><strong>Points matched to marks.</strong> A 3-mark answer needs three distinct correct points; a 5-mark answer usually needs a diagram or equation and four or five points.</li>
  </ul>
  <p>
    During the free demo, request a normal lesson on whatever chapter is current and see whether the tutor asks for
    these habits. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for
    parents</a> adds more. When a match does not suit, we book a demo with another shortlisted tutor, and a change of
    tutor later costs nothing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dls-fees">What does a science home tutor in Delhi cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors decide
    their own rates. Between Classes 6 and 10, board-year teaching usually costs more than help in the middle-school
    years; the journey to your part of Delhi and how many lessons you book each week also shape the figure. Every fee
    is visible before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dls-begin">How do you begin?</h2>
  <p>
    Tell us the class and board, which strand is causing trouble, your locality with its block or pocket, and the
    afternoons that work for your family. You get a shortlist of two or three science tutors, each fee included, and
    pick one for a free demo class. Where no one suitable can travel at that time, we propose online or mixed
    lessons. NXTutors, based in Sector 66, Gurugram, also teaches online anywhere in India.
  </p>
  <p>
    Science teachers who live in Delhi and want students nearby can see open requests on the
    <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
