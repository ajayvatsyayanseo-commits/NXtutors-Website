{{--
  Long-form guide for the "chemistry home tutor Leh" page, Classes 11 and 12
  with NEET and JEE (state/UT capitals wave 2, compact depth, subjects writer,
  3 Oct 2026). Byline in config: NXTutors Academic Team.

  Board position only from the "board_facts" block of
  database/seo-content/areas/leh-research.json: CBSE's affiliation list
  (https://saras.cbse.gov.in/saras/AffiliatedList/ListOfSchdirReport) has a
  separate entry for Ladakh, including government higher secondary schools in
  Leh district. No other board, switch year or school count.

  Exam facts reuse checked statements in database/seo-content/blog:
  cbse-class-12-chemistry-organicinorganic (70 + 30, 33 questions, chapter
  marks, branch totals 23/33/14, removed and school-assessed topics, practical
  scheme 8/8/6/4/4 and the permanganate titration, no calculator or log table,
  recall share about two-fifths), neet-preparation-gurgaon-coaching-or-home-tutor
  and jee-preparation-gurgaon-coaching-or-home-tutor (2026 patterns, +4/-1), and
  the IB chemistry structure/reactivity themes as stated on the Delhi, Patna and
  Itanagar chemistry pages.

  Local facts only from leh-research.json. Strictly practical: no politics,
  security or tourism; landmarks only to find a home; winter only as timing
  advice. No school, college, institute, society or people's names, no distances
  or travel times, only the allowed fee sentence. Area links render only for
  active areas.
--}}
@php
  $lhcSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $lhcA = function (string $slug, string $label) use ($lhcSlugs) {
      return in_array($slug, $lhcSlugs, true)
          ? '<a href="' . e(url('/city/leh/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide lhc-guide" aria-labelledby="lhcGuideTitle">
  <h2 id="lhcGuideTitle">Chemistry home tutor in Leh: physical, organic and inorganic kept moving together</h2>

  <p class="nx-guide__lede">
    Chemistry in Classes 11 and 12 is really three subjects sharing one paper. Physical chemistry is arithmetic with
    units, organic is a web of reactions, and inorganic depends on exact statements and reasons. For most senior
    students in Leh the final judge is CBSE, whose affiliation list carries Ladakh as a separate entry with government
    higher secondary schools across the district, and some also have NEET or JEE in mind. A tutor's real job is to
    keep all three branches progressing in the same weeks and turn understanding into marks. NXTutors suggests two or
    three chemistry tutors who fit the course and can manage your part of town or your village, by visit, online or
    both. Fees are shown before you choose, and lesson one is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#lhc-tests">Board, NEET, JEE</a> ·
    <a href="#lhc-marks">Chapter weights</a> ·
    <a href="#lhc-out">Removed topics</a> ·
    <a href="#lhc-cycle">A two-week cycle</a> ·
    <a href="#lhc-lab">The practical</a> ·
    <a href="#lhc-eleven">Class 11</a> ·
    <a href="#lhc-other">Other courses</a> ·
    <a href="#lhc-demo">The demo</a> ·
    <a href="#lhc-homes">Five localities</a> ·
    <a href="#lhc-winter">Winter</a> ·
    <a href="#lhc-fees">Fees and request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="lhc-tests">How do the board paper, NEET and JEE treat chemistry?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Chemistry in three exams a Leh senior student may face, and the skill each one pays for</caption>
    <thead>
      <tr><th scope="col">Exam</th><th scope="col">Chemistry in it</th><th scope="col">Pays for</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Class 12 chemistry (043)</td><td>Three-hour theory paper of 70 marks, 33 compulsory questions; 30 practical marks; no calculator or log table</td><td>Written reasons, balanced equations, numericals laid out neatly</td></tr>
      <tr><td>NEET (UG), 2026 pattern</td><td>45 of 180 questions, 180 of 720 marks, pen and paper; +4 right, −1 wrong</td><td>Fast, exact recall of NCERT lines and reactions</td></tr>
      <tr><td>JEE Main, 2026 Paper 1</td><td>25 of 75 questions: twenty with options, five numerical; same marking</td><td>Mechanisms and multi-step physical problems</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    NTA sets each entrance pattern afresh, so check the newest bulletin before planning. Our
    <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET preparation guide</a> and the
    <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET chemistry tutor</a> page go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhc-marks">Which Class 12 chapters carry the board marks?</h2>
  <p>
    Because CBSE publishes a mark value for every chapter, you can check a tutor's plan against it. The 2026-27 design is
    unchanged from last session, and the ten theory chapters group by branch:
  </p>
  <dl>
    <dt><strong>Organic, 33 marks</strong></dt>
    <dd>Aldehydes, ketones and carboxylic acids 8; biomolecules 7; haloalkanes and haloarenes 6; alcohols, phenols and ethers 6; amines 6. Conversion chains and named reactions decide most of these marks.</dd>
    <dt><strong>Physical, 23 marks</strong></dt>
    <dd>Electrochemistry 9; solutions 7; chemical kinetics 7. Marks here go on units, powers of ten and the last line of a long numerical.</dd>
    <dt><strong>Inorganic, 14 marks</strong></dt>
    <dd>The d- and f-block elements 7; coordination compounds 7. Naming, isomerism and one clear reason for each trend.</dd>
  </dl>
  <p>
    The paper is split into sections A to E with some internal choice. Roughly two-fifths of it checks recall and
    understanding, and the remainder needs application, analysis or evaluation. See the
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry guide</a>
    and the <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhc-out">Which topics left the board paper, and should NEET students still study them?</h2>
  <p>
    Two areas have left the 2026-27 Class 12 syllabus entirely: the solid state, and the p-block groups numbered 15
    to 18. Four
    more remain in teaching but are marked only by the school: surface chemistry, isolation of elements, polymers and
    chemistry in everyday life.
  </p>
  <p>
    That list is for board revision only. NTA publishes the entrance syllabus separately, and topics the board has
    dropped, including parts of the p-block, can still appear in NEET or JEE. A tutor preparing a student for both
    should keep two checklists and say clearly which one each lesson serves.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhc-cycle">A two-week cycle that keeps three branches moving</h2>
  <p>
    Rather than finishing one branch and forgetting another, a tutor can rotate between them. A fortnight might look like this:
  </p>
  <ol>
    <li><strong>Lesson 1, physical:</strong> two numericals solved by the student while the tutor watches every line, then one more without help.</li>
    <li><strong>Lesson 2, organic:</strong> the functional-group map redrawn from memory, alcohols to carbonyls to acids to amines, checked against NCERT, then three conversions.</li>
    <li><strong>Lesson 3, inorganic:</strong> a short quiz in NCERT's own words, with the reason behind each trend.</li>
    <li><strong>Lesson 4, mixed:</strong> a timed board section, plus a few objective questions if NEET or JEE is the aim.</li>
  </ol>
  <p>
    Ending each lesson with two "give reasons" questions, marked before the tutor leaves, keeps the board paper in
    step with entrance work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhc-lab">How are the 30 practical marks earned?</h2>
  <ul>
    <li>Volumetric analysis (titration): 8</li>
    <li>Salt analysis: 8</li>
    <li>An experiment based on theory content: 6</li>
    <li>Project: 4</li>
    <li>Class record and viva: 4</li>
  </ul>
  <p>
    The titration this session is potassium permanganate with either oxalic acid or Mohr's salt, and students
    prepare their own standard solution from a weighed sample. A tutor at home has no burette, but can rehearse the molarity
    calculation for a weighed sample, a clean readings table, the sequence of salt analysis from preliminary to
    confirmatory tests, and viva questions such as why permanganate needs no separate indicator.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhc-eleven">Why does Class 11 decide Class 12 chemistry?</h2>
  <p>
    Moles, equilibrium and the opening organic chapters come back in solutions, in electrochemistry and in each
    conversion question. Gaps left there surface twelve months on, in the board paper and the entrance tests alike,
    when time to repair them is short. A term spent making Class 11 ideas secure is usually the better investment. See the
    <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page.
  </p>
    <p>
    If Class 11 went badly, a tutor does not need to reteach the whole year. Mole concept, chemical bonding and the basics of organic chemistry are the three chapters Class 12 leans on most, and a few weeks spent on them early in Class 12 usually unlocks the chapters that follow.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhc-other">ISC, IB or IGCSE chemistry</h2>
  <p>
    For ISC, practical and project marks sit beside the theory paper, and one-line explanations rarely earn full
    credit. IB Diploma chemistry, at SL or HL, is organised around structure and reactivity, with an investigation
    that the student designs. Cambridge IGCSE comes in a Core tier and an Extended tier; our
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge and Edexcel IGCSE comparison</a> explains
    the boards. Such teachers are rare in Leh, so ask well ahead; the plan will probably include an online
    specialist.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhc-demo">What should a chemistry demo show you?</h2>
  <p>
    Ask for a lesson on whatever your child is studying at school this week, and keep a recent test paper on the
    table. In one hour you should be able to see four things:
  </p>
  <ul>
    <li>The tutor reads the test first and names which branch, and which kind of mistake, is costing marks.</li>
    <li>Your child solves or writes for most of the hour, rather than copying a neat explanation.</li>
    <li>A numerical is set out the way CBSE gives step marks, units included on each line.</li>
    <li>You leave with a plan for the next few lessons and homework that will actually be checked.</li>
  </ul>
  <p>
    If any of these is missing, tell us and the next shortlisted tutor gives a demo. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhc-homes">Chemistry tuition in five Leh localities</h2>
  <p>
    The <a href="{{ url('/city/leh') }}">Leh home tutors page</a> lists every locality; these five show how the
    arrangements differ between the town and the valley.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five Leh localities: zone, the practical detail a tutor needs, and a timing suggestion</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Zone</th><th scope="col">Practical detail</th><th scope="col">Timing</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $lhcA('main-bazaar-old-town', 'Main Bazaar & Old Town') !!}</td><td>Leh Town Centre</td><td>Old-town homes are up narrow lanes; old-town addresses are hard for a newcomer, so give a clear lane landmark</td><td>Early morning or late evening while the bazaar is busy in summer</td></tr>
      <tr><td>{!! $lhcA('changspa', 'Changspa') !!}</td><td>Leh Town Centre</td><td>Hillside homes; house name and lane marker matter more than a number</td><td>Early evening is quieter in the summer season</td></tr>
      <tr><td>{!! $lhcA('saboo', 'Saboo') !!}</td><td>Choglamsar, Spituk &amp; West</td><td>Homes spread across the village; agree where a car can park</td><td>A tutor coming from the town or Choglamsar can plan one route</td></tr>
      <tr><td>{!! $lhcA('stok', 'Stok') !!}</td><td>Indus Valley South &amp; East</td><td>Houses spread out on the south bank; a clear landmark helps</td><td>Midday or online in the coldest weeks</td></tr>
      <tr><td>{!! $lhcA('shey', 'Shey') !!}</td><td>Indus Valley South &amp; East</td><td>Family houses with space to stop a vehicle outside</td><td>Late afternoon or weekend for tutors from the town</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The <a href="{{ url('/city/leh/zone/indus-valley-south-east') }}">Indus valley south and east</a> zone page and the
    <a href="{{ url('/blog/leh-home-tuition-guide') }}">Leh home tuition guide</a> add more on timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhc-winter">What happens to chemistry lessons in winter?</h2>
  <p>
    Leh's cold season runs from late November to early March, with the long winter break inside it. Organic maps,
    inorganic quizzes and physical numericals all work online if the student writes on paper and shares a photo
    after each problem, so the break need not stop progress. Plan it in October: decide which weeks go online, which
    chapters will be finished first, and when the pre-board sample papers start.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhc-fees">Fees, and what to send us</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor names their
    own rate, usually shaped by the exam targeted, experience with it, the trip to your locality and the sessions per
    week. All fees appear before the demo; the
    <a href="{{ url('/blog/home-tuition-fees-leh') }}">home tuition fees in Leh</a> guide lists questions worth asking.
  </p>
  <p>
    Tell us the class and board, the exam that matters most, which branch is costing marks, a landmark near home,
    and your free evenings in term and in winter. Two or three chemistry tutors come back with their fees; you pick
    one to give the free demo, a second demo is arranged if needed, and switching later is free. If nobody suitable
    can reach you, the shortlist turns to online or mixed options. Each tutor who joins clears an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is marked Verified. See the national
    <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page, and
    <a href="{{ url('/biology-home-tutor-leh') }}">biology</a> and <a href="{{ url('/physics-home-tutor-leh') }}">physics</a>
    tutors in Leh for the rest of the stream. Chemistry teachers in and around Leh can browse open requests on
    <a href="{{ url('/tuition-jobs/leh') }}">Leh tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
