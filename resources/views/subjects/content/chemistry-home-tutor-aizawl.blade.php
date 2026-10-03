{{--
  Long-form guide for the "chemistry home tutor Aizawl" page (Classes 11 and
  12: MBSE HSSLC, CBSE, ISC/IB/IGCSE, with NEET and JEE alongside).
  Byline in config: NXTutors Academic Team. Page writer (capitals wave 2,
  subjects), 3 Oct 2026. Local facts come only from
  database/seo-content/areas/aizawl-research.json.
  MBSE facts only from mbse.edu.in (read 3 Oct 2026):
  - https://www.mbse.edu.in/wp-content/uploads/2024/08/HSS-Scheme-of-Examination-Question-Design-wef-2025.pdf
    (linked from https://www.mbse.edu.in/question-design-and-scheme-of-examination-sr-secondary-schools/):
    Chemistry (Theory) Class XII: 70 marks, 3 hours, 36 questions (14
    objective x1, 16 short answer I x2, 6 short answer II x4); units:
    Solutions 7, Electrochemistry 9, Chemical kinetics 7, d- and f-block 7,
    Coordination chemistry 7, Haloalkanes and haloarenes 6, Alcohols phenols
    and ethers 6, Aldehydes ketones and carboxylic acids 8, Amines 6,
    Biomolecules 7; objectives 50/30/20; internal choice in four 2-mark and
    three 4-mark questions; numericals about 12 marks; evaluation guidelines
    for organic units: IUPAC nomenclature, reasoning, distinction of
    compounds, name reactions, reaction mechanism, conversion word problems.
    Practical Class XII: 10 marks, 2 hours: one experiment 7 (salt analysis
    or volumetric analysis/titration), viva voce 3. Class XI units: Some
    basic concepts 7, Structure of atom 9, Classification of elements 6,
    Chemical bonding 7, Thermodynamics 9, Equilibrium 7, Redox 4, Organic
    basic principles 11, Hydrocarbons 10.
  - https://www.mbse.edu.in/wp-content/uploads/2025/12/HSS-Textbook-List-2026-2027-1.pdf :
    Chemistry Part I and Part II (NCERT) on the 2026-27 list for Classes XI
    and XII, with other reference titles.
  Other exam facts reuse the checked statements in database/seo-content/blog:
  cbse-class-12-chemistry-organicinorganic (chapter marks, branch totals
  23/14/33, 33 questions, 70 + 30, no calculators or log tables, deleted and
  school-assessed topics, practical 8/8/6/4/4),
  neet-preparation-gurgaon-coaching-or-home-tutor and
  jee-preparation-gurgaon-coaching-or-home-tutor. The observation that the
  MBSE and CBSE Class 12 chapter marks match compares the two official
  lists. No coaching institute, school, college, university, hospital,
  stadium, society or people's names, no distances or travel times, only the
  allowed fee sentence. Weather is timing advice only.

  Area links render only when that Aizawl area page exists and is active.
--}}
@php
  $azAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $azA = function (string $slug, string $label) use ($azAreaSlugs) {
      return in_array($slug, $azAreaSlugs, true)
          ? '<a href="' . e(url('/city/aizawl/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide azc-guide" aria-labelledby="azcGuideTitle">
  <h2 id="azcGuideTitle">Chemistry home tutor in Aizawl: the same chapters on two boards, answered two ways</h2>

  <p class="nx-guide__lede">
    Class 12 chemistry in Aizawl brings a pleasant surprise and a trap. The surprise: the Mizoram board's HSSLC
    design and CBSE give the same ten chapters the same theory marks, so the content is common ground. The trap: the
    papers ask for it in different shapes, and the practical carries 10 marks on one board and 30 on the other. A
    good home tutor teaches the chemistry once and the answer style twice, with NEET or JEE often added on top.
    Tell NXTutors the board and your locality, and we come back with two or three chemistry tutors who fit both.
    Each fee is shown up front, and your first lesson with the tutor you pick costs nothing.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#azc-chapters">Chapter marks</a> ·
    <a href="#azc-papers">Two paper shapes</a> ·
    <a href="#azc-organic">Organic answers</a> ·
    <a href="#azc-lab">Practicals</a> ·
    <a href="#azc-xi">Class 11</a> ·
    <a href="#azc-entrance">NEET and JEE</a> ·
    <a href="#azc-other">ISC, IB, IGCSE</a> ·
    <a href="#azc-places">Five localities</a> ·
    <a href="#azc-fees">Fees</a> ·
    <a href="#azc-request">Requesting tutors</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="azc-chapters">Ten chapters, one set of weights</h2>
  <p>
    The Mizoram Board of School Education's question design for the Higher Secondary School Leaving Certificate,
    in force for the 2025 examinations onwards, lists the Class 12 chemistry units with their marks. Set beside CBSE's
    2026-27 chapter marks, every figure agrees. NCERT's Chemistry Part I and Part II also appear on the board's
    2026-27 book list, so the textbook core is shared too.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 12 chemistry theory marks by chapter: identical in the MBSE design and CBSE's 2026-27 scheme</caption>
    <thead>
      <tr><th scope="col">Branch</th><th scope="col">Chapter</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td rowspan="3">Physical (23)</td><td>Electrochemistry</td><td>9</td></tr>
      <tr><td>Solutions</td><td>7</td></tr>
      <tr><td>Chemical kinetics</td><td>7</td></tr>
      <tr><td rowspan="2">Inorganic (14)</td><td>d- and f-block elements</td><td>7</td></tr>
      <tr><td>Coordination compounds</td><td>7</td></tr>
      <tr><td rowspan="5">Organic (33)</td><td>Aldehydes, ketones and carboxylic acids</td><td>8</td></tr>
      <tr><td>Biomolecules</td><td>7</td></tr>
      <tr><td>Haloalkanes and haloarenes</td><td>6</td></tr>
      <tr><td>Alcohols, phenols and ethers</td><td>6</td></tr>
      <tr><td>Amines</td><td>6</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Organic chemistry is close to half the theory paper on both boards, which is why it deserves the steadiest weekly
    attention. Physical chemistry carries the numericals, about 12 marks of them in the MBSE design, and inorganic
    rewards a student who can give the reason behind each trend rather than recite it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azc-papers">Two paper shapes for the same content</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 12 chemistry on the Mizoram board and on CBSE: what differs</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">MBSE HSSLC</th><th scope="col">CBSE Class 12</th></tr>
    </thead>
    <tbody>
      <tr><td>Theory paper</td><td>Three hours, 70 marks, 36 questions</td><td>Three hours, 70 marks; 33 questions, all compulsory, set in sections A to E</td></tr>
      <tr><td>Question sizes</td><td>14 objective of one mark, 16 short answers of two, 6 of four; no longer answers</td><td>From one-mark items up to five-mark long answers</td></tr>
      <tr><td>Choice</td><td>Internal options in four two-mark and three four-mark questions</td><td>As set in the current sample paper</td></tr>
      <tr><td>Practical</td><td>10 marks</td><td>30 marks</td></tr>
      <tr><td>Where to check</td><td>Question design and past HSSLC science papers on mbse.edu.in</td><td>The current sample paper with its marking scheme, on cbseacademic.nic.in</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Sixteen two-mark answers make the MBSE paper a test of compact, exact writing: a reason in two lines, a reaction
    with conditions, a short calculation with units. A tutor for an HSSLC student should practise exactly that
    length, timed, rather than long essays. For the board as a whole, see our
    <a href="{{ url('/mizoram-board-tutor-aizawl') }}">Mizoram Board tutor in Aizawl</a> page, and for CBSE across
    subjects the <a href="{{ url('/cbse-home-tutor-aizawl') }}">CBSE home tutor in Aizawl</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azc-organic">How MBSE examiners look at organic answers</h2>
  <p>
    The board's design goes further than marks: it lists what the organic questions (haloalkanes through amines)
    will test. A tutor can build a weekly drill straight from that list.
  </p>
  <ul>
    <li><strong>IUPAC names:</strong> five structures named, five names drawn, every lesson until it is automatic.</li>
    <li><strong>Reasoning:</strong> "why is phenol more acidic than ethanol" style questions answered in two lines.</li>
    <li><strong>Telling compounds apart:</strong> one chemical test, the observation, and which compound gives it.</li>
    <li><strong>Name reactions:</strong> each with reagent, conditions and product, written as an equation.</li>
    <li><strong>Mechanisms:</strong> arrows drawn from electrons to atoms, steps in order.</li>
    <li><strong>Conversions:</strong> two- and three-step routes between functional groups, built from a route map the student redraws from memory.</li>
  </ul>
  <p>
    The same drill serves CBSE students, whose paper rewards the same skills. Our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry guide</a>
    adds detail, including three CBSE points: students may use neither a calculator nor log tables; the solid-state
    chapter and the p-block (groups 15 to 18) are no longer in the CBSE syllabus; and four topics, from surface
    chemistry to everyday chemistry, are now tested only by the school.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azc-lab">Practicals: 10 marks or 30</h2>
  <p>
    The MBSE practical examination runs for two hours: one experiment worth 7 marks, either salt analysis or
    volumetric analysis by titration, followed by a 3-mark viva on the experiment performed. Theory and practical
    must be passed separately. CBSE's 30 marks are spread wider: 8 each for titration and salt analysis, 6 for a
    content-based experiment, and 4 each for the project and for the record with viva. In the current session the
    CBSE titration is a permanganate one, run against either oxalic acid or Mohr's salt.
  </p>
  <p>
    Neither needs a laboratory at home. A tutor can practise the sequence of salt-analysis tests, asking what each
    result proves, check the arithmetic of titration readings, and run viva questions until the answers come in a
    sentence. See also the <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry
    tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azc-xi">Class 11: where the board year is really won</h2>
  <p>
    The MBSE Class 11 design shows where the foundations lie: organic chemistry's basic principles carry 11 marks and
    hydrocarbons 10, structure of the atom and thermodynamics 9 each, and some basic concepts, chemical bonding and
    equilibrium 7 each. The mole concept, equilibrium and early organic work all come back in Class 12 and again in
    NEET and JEE, so a gap left in Class 11 costs twice. A tutor who starts in the first term of Class 11 can keep the
    weekly hour calm; one who starts in the board year has to rescue. The
    <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page explains more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azc-entrance">NEET and JEE: where the entrance syllabus differs</h2>
  <p>
    Chemistry carries a large share of both entrance tests. In 2026, NEET (UG) gave it 45 questions out of 180, worth 180 of the
    720 marks; JEE Main Paper 1 gave it 25 of its 75 questions, five of them with numerical answers. Both exams added
    four marks for a right answer and took one away for a wrong one. NEET pays for precise NCERT wording, while JEE
    tests mechanisms and long physical-chemistry problems. Because NTA writes its own syllabi, a chapter the board
    has dropped can still be examined; read NTA's current syllabus before skipping anything. The
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">important NEET chemistry chapters</a>, the
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry guide by branch</a> and our
    <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET chemistry tutor</a> page help set priorities.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azc-other">ISC, IB and IGCSE chemistry</h2>
  <p>
    ISC assesses practical and project work as well as the theory paper, and rewards step-by-step reasoning. IB
    Diploma chemistry (SL or HL) is built around two strands, structure and reactivity; the internal assessment is
    the student's own investigation, so a tutor's role there is limited to asking questions. IGCSE students sit Core
    or Extended papers, as the school decides; the
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">IGCSE board comparison</a> sets Cambridge beside
    Edexcel. Specialists in these courses are fewer, so name the course first; an online specialist
    paired with a nearby tutor for written practice works well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azc-places">Five Aizawl localities: arranging the chemistry evening</h2>
  <p>
    Aizawl's hillside buildings, stairs and narrow roads shape every visit, and the wet months add another layer.
    Browse tutors by locality on our <a href="{{ url('/city/aizawl') }}">Aizawl page</a>; for the heaviest rain, agree
    in advance that the lesson moves online with the same tutor.
  </p>
  <dl>
    <dt><strong>{!! $azA('durtlang', 'Durtlang') !!}</strong></dt>
    <dd>The highest part of the city, on the northern ridge, where a family's floor may sit above or below the road. Tutors from Bawngkawn and Chaltlang are the natural match; share the house name, floor and a landmark.</dd>
    <dt><strong>{!! $azA('ramhlun', 'Ramhlun') !!}</strong></dt>
    <dd>Five Ramhlun localities, from North to South, with Laipuitlang alongside. Tutors in Chaltlang, Bawngkawn, Chanmari or Zarkawt can usually take on a home here; plan around the evening rush on roads to the centre.</dd>
    <dt><strong>{!! $azA('zarkawt', 'Zarkawt') !!}</strong></dt>
    <dd>Central, with state education offices on McDonald Hill and homes close to the main roads. Easy to reach from Chanmari, Dawrpui or Khatla, but office hours crowd the roads, so start after the rush.</dd>
    <dt><strong>{!! $azA('tuikual', 'Tuikual') !!}</strong></dt>
    <dd>Tuikual North and South beside Dinthar, with deep valleys between neighbouring localities. The practical tutor is often the one on the same side of the valley, in Vaivakawn or Dawrpui Vengthar; ask the tutor to confirm the route.</dd>
    <dt><strong>{!! $azA('khatla', 'Khatla') !!}</strong></dt>
    <dd>A residential cluster with Khatla South, Khatla East, Bungkawn and Maubawk, which the district treats as one zone. A tutor living in the same cluster keeps evening classes starting on time.</dd>
  </dl>
  <p>
    The zone page for <a href="{{ url('/city/aizawl/zone/khatla-mission-veng-kulikawn') }}">Khatla, Mission Veng and
    Kulikawn</a> and the <a href="{{ url('/blog/aizawl-home-tuition-guide') }}">Aizawl home tuition guide</a> say more
    about timing in each zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azc-fees">What does a chemistry home tutor in Aizawl cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors name their own
    rates. A quote usually reflects the target exam, how long the tutor has taught it, the evening trip to your
    locality and how many sessions you want each week. Every fee is on your shortlist before the demo; the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-aizawl') }}">Aizawl home tuition fees</a> article go into detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azc-request">Requesting chemistry tutors</h2>
  <p>
    Write to us with five details: class and board; whether the HSSLC, CBSE, NEET or JEE paper matters most; which of
    organic, physical or inorganic chemistry is weakest; coaching days, if any; and your locality, building, floor
    and free evenings. Two or three tutors come back with their fees, and you book a
    <a href="{{ url('/demo-class') }}">free demo class</a> with one. A poor fit means a demo with the next name on the
    list, and a later change is free. Where no tutor can reach you at that hour, we suggest lessons online or a mix.
    Our office is in Sector 66, Gurugram, and our tutors teach online all over India; the national
    <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page describes the service elsewhere, and
    students who also take physics can read the
    <a href="{{ url('/physics-home-tutor-aizawl') }}">physics home tutor in Aizawl</a> page.
  </p>
  <p>
    Chemistry teachers living in Aizawl can browse open student requests on the
    <a href="{{ url('/tuition-jobs/aizawl') }}">Aizawl tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
