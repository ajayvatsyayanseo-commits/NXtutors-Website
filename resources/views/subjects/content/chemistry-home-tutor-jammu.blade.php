{{--
  Long-form guide for the "chemistry home tutor Jammu" page (Classes 11 and
  12, NEET and JEE alongside coaching, ISC/IB/IGCSE, JKBOSE in general terms).
  Byline in config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/jammu-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements in database/seo-content/blog:
  cbse-class-12-chemistry-organicinorganic (chapter-wise marks, branch totals
  23/14/33, 33 questions in five sections, no calculators or log tables,
  recall share, topics removed and topics assessed only in school, practical
  scheme 8/8/6/4/4, KMnO4 titration against oxalic acid or Mohr's salt with
  the standard solution weighed by the student, one main Class 12 exam),
  neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026 pattern),
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern) and
  cambridge-vs-edexcel-igcse-gurgaon (Cambridge science tiers). IB chemistry
  themes as already stated on the Delhi and Patna pages.
  JKBOSE: https://jkbose.jk.gov.in/ (fetched 3 Oct 2026) lists Higher
  Secondary Part I (Class 11) and the Higher Secondary examination (Class 12)
  and publishes a syllabus, model test papers and a question bank; no paper
  pattern is given here.
  No coaching institute, school, college, society or people's names, no
  distances or travel times, only the allowed fee sentence.

  Area links render only when that Jammu area page exists and is active.
--}}
@php
  $jmcSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jmcA = function (string $slug, string $label) use ($jmcSlugs) {
      return in_array($slug, $jmcSlugs, true)
          ? '<a href="' . e(url('/city/jammu/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide jmc-guide" aria-labelledby="jmcGuideTitle">
  <h2 id="jmcGuideTitle">Chemistry home tutor in Jammu: turn a pile of notes into answers that score</h2>

  <p class="nx-guide__lede">
    Ask a Class 12 student in Jammu which subject feels heaviest and chemistry often comes up. There are three
    branches that need three different kinds of work, a practical exam that nobody seems to prepare for, and, for
    many, NEET or JEE as well as the board paper. A home chemistry tutor is useful when the hour is spent on what a
    classroom cannot give: checking that this week's chapter is understood and practising it in the form each exam
    rewards. NXTutors sends two or three chemistry tutors suited to your child's syllabus and able to reach your
    colony. You see their fees first, and the opening lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jmc-exams">Chemistry by exam</a> ·
    <a href="#jmc-chapters">Ten chapters</a> ·
    <a href="#jmc-trimmed">Dropped and internal topics</a> ·
    <a href="#jmc-three">Three branches</a> ·
    <a href="#jmc-lab">Practical exam</a> ·
    <a href="#jmc-state">JKBOSE</a> ·
    <a href="#jmc-courses">ISC, IB, IGCSE</a> ·
    <a href="#jmc-eleven">Class 11</a> ·
    <a href="#jmc-local">Six colonies</a> ·
    <a href="#jmc-fees">Fees</a> ·
    <a href="#jmc-next">Next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jmc-exams">How large is chemistry in each exam a Jammu Class 12 student may sit?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Chemistry across the papers a Jammu student may take in Class 12: its weight, format and what it pays for</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Weight and format</th><th scope="col">Pays for</th></tr>
    </thead>
    <tbody>
      <tr><td>JKBOSE Higher Secondary</td><td>Syllabus and paper set by the Jammu and Kashmir Board of School Education</td><td>Whatever the current scheme on jkbose.jk.gov.in asks for</td></tr>
      <tr><td>CBSE Class 12 (043)</td><td>Theory: 33 compulsory questions, 70 marks, three hours. Practical: 30 marks</td><td>Reasons in words, balanced equations, careful numericals</td></tr>
      <tr><td>NEET (UG), 2026 format</td><td>45 of 180 questions, 180 of the 720 marks, on paper</td><td>Quick, exact recall of NCERT lines</td></tr>
      <tr><td>JEE Main 2026, Paper 1</td><td>One third of 75 questions; of chemistry's 25, five ask for a number</td><td>Reaction mechanisms and multi-stage physical chemistry</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Both NTA papers in 2026 used plus four for each correct response and minus one for each incorrect response. NTA sets the
    pattern afresh every year, so the latest bulletin is what counts. Further reading: the
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">key NEET chemistry chapters</a>, our
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry guide by branch</a> and the
    <a href="{{ url('/chemistry-home-tutor/neet') }}">chemistry tutor for NEET</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmc-chapters">Which CBSE Class 12 chemistry chapters carry the most marks?</h2>
  <p>
    CBSE assigns marks chapter by chapter, which gives a tutor a ready-made timetable. The 2026-27 curriculum keeps
    last session's paper design. The ten chapters, heaviest first:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry, 2026-27: chapter marks, branch and the form of practice each chapter needs</caption>
    <thead>
      <tr><th scope="col">Chapter</th><th scope="col">Marks</th><th scope="col">Branch</th><th scope="col">Form of practice</th></tr>
    </thead>
    <tbody>
      <tr><td>Electrochemistry</td><td>9</td><td>Physical</td><td>Cell EMF and conductance problems with units</td></tr>
      <tr><td>Aldehydes, Ketones and Carboxylic Acids</td><td>8</td><td>Organic</td><td>Named reactions written as conversion chains</td></tr>
      <tr><td>Solutions</td><td>7</td><td>Physical</td><td>Colligative-property numericals</td></tr>
      <tr><td>Chemical Kinetics</td><td>7</td><td>Physical</td><td>Order, rate law and half-life working</td></tr>
      <tr><td>The d- and f-Block Elements</td><td>7</td><td>Inorganic</td><td>Each trend with a single stated reason</td></tr>
      <tr><td>Coordination Compounds</td><td>7</td><td>Inorganic</td><td>IUPAC names, isomers, bonding sketches</td></tr>
      <tr><td>Biomolecules</td><td>7</td><td>Organic</td><td>Crisp definitions and structures</td></tr>
      <tr><td>Haloalkanes and Haloarenes</td><td>6</td><td>Organic</td><td>Substitution versus elimination, step by step</td></tr>
      <tr><td>Alcohols, Phenols and Ethers</td><td>6</td><td>Organic</td><td>Distinguishing tests, preparation routes</td></tr>
      <tr><td>Amines</td><td>6</td><td>Organic</td><td>Comparing basicity; conversions</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Grouped by branch, organic is worth 33, physical 23 and inorganic 14. The paper runs for three hours in five
    lettered sections, with internal choice in a few questions; neither calculators nor log tables are allowed.
    Recall and understanding account for roughly two-fifths of the marks; the rest go to application, analysis and
    evaluation. For detail on every chapter, read our <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">guide
    to Class 12 organic and inorganic chemistry</a>, and the
    <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry tutor</a> page shows a year plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmc-trimmed">What has been dropped from the board paper, and what still matters for entrance exams?</h2>
  <p>
    This session the board has removed the solid state completely, along with the p-block's Groups 15 to 18. A
    further four topics are still taught yet marked internally rather than on the board paper: surface chemistry,
    how metals are extracted and isolated, polymers, and everyday chemistry.
  </p>
  <p>
    Entrance candidates should not cross these off too quickly. NTA issues a separate syllabus, and some topics the
    board no longer examines, including p-block content, can still appear in NEET or JEE. Plan board revision from
    the board's list and entrance revision from NTA's.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmc-three">One kind of work for each branch</h2>
  <p>
    The home session should follow the chapter currently being taught at school or in a batch, never jump ahead,
    and each branch needs its own kind of attention:
  </p>
  <dl>
    <dt><strong>Physical chemistry</strong></dt>
    <dd>Watch the student solve one or two problems line by line. In solutions, electrochemistry and kinetics, students often know the formula and still lose the mark to a missing unit or a slipped exponent.</dd>
    <dt><strong>Organic chemistry</strong></dt>
    <dd>Keep one sheet that links every functional group to the next, from alcohols through carbonyls and acids to amines. Redraw it from memory weekly and compare it with NCERT, so conversions become routes rather than lists.</dd>
    <dt><strong>Inorganic chemistry</strong></dt>
    <dd>Short oral quizzes taken straight from the textbook, with the reason behind every trend. NEET, especially, rewards the exact NCERT wording.</dd>
  </dl>
  <p>
    Finish every lesson with a couple of board-style "why" questions that the tutor marks on the spot; that keeps the
    written board answers moving alongside entrance practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmc-lab">How much of the 30-mark practical can be prepared away from the lab?</h2>
  <p>
    More than families expect. The split is 8 for titration, 8 for salt analysis, 6 for a content-based
    experiment, 4 for the project and 4 for the record and viva together. In this session's titration, potassium
    permanganate is run against oxalic acid or Mohr's salt (ferrous ammonium sulphate), and every student weighs out
    and prepares that standard solution personally.
  </p>
  <p>
    Glassware stays in the school lab, but at a desk a tutor can rehearse working out molarity from the mass weighed,
    setting out burette readings neatly, the order of tests in salt analysis, a project that is realistic to
    complete, and common viva questions, for example why permanganate titrations need no added indicator.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmc-state">What should a JKBOSE chemistry student ask for?</h2>
  <p>
    The Jammu and Kashmir Board of School Education examines Class 11 (Higher Secondary Part I) and Class 12 (the
    Higher Secondary examination), and its site, jkbose.jk.gov.in, carries the syllabus, model test papers and a
    question bank. The board sets and revises its own chemistry paper, so we do not describe it here. The right
    tutor works from the prescribed textbook, practises with the board's own papers, and can carry the same chapters
    forward for NEET or JEE if they are part of the plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmc-courses">ISC, IB and IGCSE chemistry</h2>
  <ul>
    <li><strong>ISC:</strong> alongside theory, CISCE marks practical work and a project, and examiners look for reasoning set out in full sentences.</li>
    <li><strong>IB Diploma:</strong> offered at SL and HL, with content grouped into two themes, structure and reactivity. The investigation is the student's own work; a tutor may ask questions about it, never draft it.</li>
    <li><strong>Cambridge IGCSE:</strong> science is entered at Core or Extended tier; read how the tiers compare in our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge versus Edexcel IGCSE</a> article.</li>
  </ul>
  <p>
    Fewer tutors teach these courses than CBSE, so raise it in your first message. When no specialist can come to
    your colony, combine an online specialist with a nearby tutor for marking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmc-eleven">Why fix chemistry in Class 11 rather than Class 12?</h2>
  <p>
    Moles and stoichiometry, chemical equilibrium and the opening organic chapters of Class 11 reappear in solutions, electrochemistry
    and every conversion question a year later. Gaps there cost marks in the board paper and in entrance tests
    alike, and repairing them in the board year takes longer than building them properly the first time. Our <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page has more, and
    the national <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page explains matching
    elsewhere in India.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmc-local">What does your colony change for an evening chemistry lesson?</h2>
  <p>
    These six colonies sit across the three zones of the new city, south of the Tawi. Every colony page is linked
    from our <a href="{{ url('/city/jammu') }}">Jammu page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Evening chemistry tuition in six Jammu colonies: the setting, how a tutor gets in, and a practical tip</caption>
    <thead>
      <tr><th scope="col">Colony</th><th scope="col">Setting</th><th scope="col">Getting in</th><th scope="col">Tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $jmcA('gandhi-nagar', 'Gandhi Nagar') !!}</td><td>A planned colony around one of the city's large markets, with houses, government quarters and some flats</td><td>Doorstep on inner lanes; a gate check at some government housing</td><td>Name Gol Market Chowk or Last Morh, and avoid the market's evening peak</td></tr>
      <tr><td>{!! $jmcA('nanak-nagar', 'Nanak Nagar') !!}</td><td>Plotted houses, builder floors and a few apartment buildings across three wards</td><td>Usually straight to the door</td><td>A tutor already teaching nearby in Gandhi Nagar or Trikuta Nagar keeps the trip easy</td></tr>
      <tr><td>{!! $jmcA('channi-himmat', 'Channi Himmat') !!}</td><td>Housing Board sectors with local shops</td><td>Sector and house number lead to the door</td><td>Tutors from the highway side can use the road to the bypass at Deeli</td></tr>
      <tr><td>{!! $jmcA('channi-rama', 'Channi Rama') !!}</td><td>Houses and new construction near Chowadhi and Sunjwan</td><td>Map pin needed for newer pockets</td><td>Tell the guard or neighbours to expect the tutor if you live in a flat</td></tr>
      <tr><td>{!! $jmcA('bathindi', 'Bathindi') !!}</td><td>Fast-growing, with many new flats beside houses</td><td>Apartment gates may ask visitors to sign in</td><td>Give Bhatindi Morh as the landmark; leave margin at the highway junction</td></tr>
      <tr><td>{!! $jmcA('greater-kailash', 'Greater Kailash') !!}</td><td>Houses and apartment blocks with shops close by</td><td>Some buildings keep a visitor register</td><td>Set the hour away from the evening rush at Greater Kailash Chowk</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    If a route becomes unreliable near the pre-boards, move one weekly visit online so revision does not slip. The
    <a href="{{ url('/blog/jammu-home-tuition-guide') }}">Jammu home tuition guide</a> covers every zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmc-fees">Chemistry tuition fees in Jammu: what sets them?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor quotes their
    own rate, and it usually rises with the exam being targeted and the tutor's experience of it; the evening journey
    to your colony and how many lessons you book each week matter too. Every fee is shown before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmc-next">What do we need from you for a chemistry shortlist?</h2>
  <p>
    Send the class and syllabus, the exam that matters most, the weakest branch, any batch days, your colony with a
    landmark, and the evenings you can offer. Our shortlist names two or three chemistry tutors with
    fees beside each, and you decide who takes the free demo. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. If the first choice does
    not fit, a second demo follows, and changing tutor later is free. Where nobody suitable can reach you, we propose
    online or part-online lessons. Our office is in Sector 66, Gurugram, and lessons run online nationwide.
  </p>
  <p>
    See also our <a href="{{ url('/physics-home-tutor-jammu') }}">physics</a>,
    <a href="{{ url('/biology-home-tutor-jammu') }}">biology</a> and
    <a href="{{ url('/neet-home-tutor-jammu') }}">NEET</a> pages for Jammu. Chemistry teachers living in Jammu can
    browse open requests on <a href="{{ url('/tuition-jobs/jammu') }}">Jammu tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
