{{--
  Long-form guide for the "IB maths tutor Chennai" page. Author: Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths). No anecdotes, years or results are claimed
  for him. No schools, societies or other people are named.

  Course and assessment facts are reworded from ib-maths-tutor-gurgaon (via
  ib-maths-tutor-mumbai), which cites the IB Diploma Programme subject briefs
  for Mathematics: analysis and approaches and Mathematics: applications and
  interpretation and the IB's curriculum update for the revised courses
  (ibo.org): two courses, each at SL or HL; 150 h SL / 240 h HL; SL Papers 1
  and 2 (40% each, 1 h 30 min each), HL Papers 1 and 2 (30% each, 2 h each)
  and Paper 3 (20%, two extended problem-solving questions, GDC); exploration
  20% at both levels, teacher-marked and IB-moderated, roughly 12 to 20 pages;
  AA Paper 1 without a calculator, AI uses the GDC on all papers; revised
  courses first taught August 2027 and first examined May 2029 (AA Papers 1
  and 2 to 100 marks from 110, Paper 3 to 50 marks from 55 with one hour;
  exploration kept with shared SL/HL criteria; 80/20 split kept); MYP maths
  four criteria. No other dates.

  Local detail only from database/seo-content/zones/chennai.json,
  chennai-research.json, chennai-zone-guides.json (OMR tip: consider an online
  tutor for IB, IGCSE or senior specialist papers; gated-community visitor
  approval; ECR calmer on weekdays; Besant Nagar has no station, MRTS to Adyar
  or Thiruvanmiyur then auto; Teynampet Blue Line for Alwarpet, Yellow Line
  under construction; Anna Nagar West bus terminus and Thirumangalam Green
  Line, Red Line station under construction; Valasaravakkam on Arcot Road,
  Yellow Line under construction, Green Line to Vadapalani then auto;
  Kelambakkam still a village panchayat, no rail, tutors from Navalur, Siruseri
  or Padur) and the city hub (IB and Cambridge students sit May papers; school
  calendars differ). Area links render only for active Chennai areas. Fee
  wording is the approved sentence. FAQs render from faqs/ib-maths-tutor-chennai.php.
--}}
@php
  $cimSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cimA = function (string $slug, string $label) use ($cimSlugs) {
      return in_array($slug, $cimSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="cimGuideTitle">
  <h2 id="cimGuideTitle">IB maths tutor in Chennai: matching the course, the level and the road to your gate</h2>

  <p class="nx-guide__lede">
    In Chennai, an IB maths request often comes from a gated community on the OMR, a bungalow on the ECR or a flat in
    one of the older southern neighbourhoods, and it usually comes in a hurry, after a first DP1 test has gone badly.
    Before any tutor can help, four facts have to be pinned down: Analysis and Approaches or Applications and
    Interpretation, Standard or Higher Level, the exam session, and a lesson time that a tutor can actually reach.
    This page works through each of them. It is written by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on
    NXTutors, and it sits under our <a href="{{ url('/maths-home-tutor-chennai') }}">maths home tutors in Chennai</a>
    page and the <a href="{{ url('/ib-tutor-chennai') }}">IB tutors in Chennai</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cim-brief">What to tell us</a> ·
    <a href="#cim-courses">AA and AI</a> ·
    <a href="#cim-papers">Papers and weights</a> ·
    <a href="#cim-revision">Which syllabus version</a> ·
    <a href="#cim-explore">The exploration</a> ·
    <a href="#cim-tools">Calculator and no calculator</a> ·
    <a href="#cim-bridge">Coming from another board</a> ·
    <a href="#cim-routes">Routes across Chennai</a> ·
    <a href="#cim-online">Online, at home, or both</a> ·
    <a href="#cim-plan">The two DP years</a> ·
    <a href="#cim-demo">Judging the demo</a> ·
    <a href="#cim-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cim-brief">What to tell us before we match an IB maths tutor</h2>
  <ol>
    <li><strong>Course:</strong> AA or AI. The school's report or timetable will say which.</li>
    <li><strong>Level:</strong> SL or HL, and whether the school might move your child between them.</li>
    <li><strong>Exam session:</strong> the May (or November) your child will sit, because the IB is replacing both courses with revised versions.</li>
    <li><strong>DP year and the problem:</strong> a DP1 student who is lost in functions needs different help from a DP2 student who runs out of time on Paper 2.</li>
    <li><strong>Where and when:</strong> your locality, community name and gate arrangements, and the hours you can keep free each week.</li>
  </ol>
  <p>
    With those five answers we can send two or three tutors who teach that exact combination, rather than anyone who
    says "IB maths".
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cim-courses">Analysis and Approaches or Applications and Interpretation?</h2>
  <p>
    Every Diploma student takes one maths course, and the IB offers two, each at SL or HL. The shared ground is
    familiar: number and algebra, functions, geometry and trigonometry, statistics and probability, calculus. The
    difference is in what each course asks a student to do with it.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Analysis and Approaches</h3>
  <p>
    Built on algebra, exact working and proof. One paper is sat without any calculator. Future engineers, physicists, coders,
    mathematicians and economists who like numbers usually find it the better fit.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Applications and Interpretation</h3>
  <p>
    Built on modelling, data and technology, with the graphic display calculator in use on every paper. It suits many
    students in the life sciences, social sciences, design and business. AI HL is demanding in its own right; it is
    no soft choice.
  </p>
    </div>
  </div>
  <p>
    Strength in one route does not carry over automatically: an AA HL proof specialist can struggle to teach AI SL
    statistics well, and the reverse. If your child is still
    deciding, the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA, AI, SL and HL guide</a> compares the four
    routes, and the national <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page goes deeper into content.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cim-papers">How the grade is built at SL and at HL</h2>
  <p>
    SL is planned for 150 teaching hours and HL for 240. On the courses now being examined, the written papers carry
    80 percent of the grade and the exploration the remaining 20 percent, at both levels.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Current IB DP maths assessment by component</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1</td><td>40%, 1 hour 30 minutes</td><td>30%, 2 hours</td></tr>
      <tr><td>Paper 2</td><td>40%, 1 hour 30 minutes</td><td>30%, 2 hours</td></tr>
      <tr><td>Paper 3: two extended problem-solving questions with the GDC</td><td>Not sat</td><td>20%</td></tr>
      <tr><td>Mathematical exploration</td><td>20%</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Paper 3 is the component HL students fear, because each question starts from something easy and climbs to a
    general result the student has not seen before. It cannot be crammed. The only preparation that works is meeting
    Paper 3-style problems regularly from DP1 onwards, so that following a long chain of linked parts becomes normal.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cim-revision">Which syllabus version will your child sit?</h2>
  <p>
    The IB has published revised versions of AA and AI, first taught from August 2027 and first examined in May 2029.
    Both courses and both levels continue. For AA, the published changes include shorter papers (Papers 1 and 2 drop
    from 110 to 100 marks; Paper 3 drops from 55 to 50 marks with one hour allowed), a single set of exploration
    criteria shared by SL and HL, and the same 80 to 20 split between exams and the exploration.
  </p>
  <p>
    So the exam session decides the material. A student who began the Diploma in August 2026 sits the current course
    in May 2028; one who starts in August 2027 or later is on the revised course. Past papers from the wrong version
    are not useless, but a tutor has to know which questions still fit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cim-explore">The exploration: the tutor's limits</h2>
  <p>
    The exploration is a piece of the student's own mathematics, roughly 12 to 20 pages in the IB's guidance, marked
    by the school against published criteria for presentation, mathematical communication, personal engagement,
    reflection and the use of mathematics, then moderated by the IB. Worth a fifth of the grade, it is where steady
    students often gain the most.
  </p>
  <ul>
    <li><strong>A tutor may</strong> teach mathematics that the student's idea needs, even beyond the syllabus; ask questions that help the student narrow a broad interest; explain what each criterion rewards; and say in general terms where an argument is hard to follow.</li>
    <li><strong>A tutor may not</strong> choose the topic, write or rephrase sentences, do calculations or graphs, build the model, or edit a draft line by line. Doing so risks the student's diploma under the IB's academic-integrity rules, and students should tell their teacher about any outside tutoring.</li>
  </ul>
  <p>
    Chennai offers honest starting points a student could own: tide or rainfall records for the coast, the spacing of
    stations on a metro line, the growth of a new suburb, the geometry of a temple tower. A narrow question carried
    through carefully beats an ambitious one left half-finished.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cim-tools">Calculator papers and the paper without one</h2>
  <p>
    AA's Paper 1 is sat with no calculator, so algebra, exact values, logarithms and calculus by hand must be fluent.
    AI students, and AA students on Paper 2, need the graphic display calculator to be second nature: setting a
    window, finding intersections, running a regression, and knowing when the calculator's answer needs to be written
    up with working. A sensible routine is a short no-calculator warm-up in each session for AA students and a quick
    GDC task for AI students; ten minutes, every week, matters more than a long burst before mocks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cim-bridge">Joining the Diploma from the State Board, CBSE, ICSE, IGCSE or the MYP</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What usually needs attention in the first DP term</caption>
    <thead>
      <tr><th scope="col">Previous course</th><th scope="col">Usually confident with</th><th scope="col">Usually new</th></tr>
    </thead>
    <tbody>
      <tr><td>Tamil Nadu State Board</td><td>Standard methods, constructions and graphs, short objective questions</td><td>Unguided multi-part problems, written reasoning, the GDC</td></tr>
      <tr><td>CBSE</td><td>Standard algebra and NCERT-style problem sets</td><td>Questions that give little scaffolding; modelling on AI</td></tr>
      <tr><td>ICSE</td><td>Laying out working line by line</td><td>Calculator technology and open modelling</td></tr>
      <tr><td>IGCSE Extended</td><td>Algebra and much of the content</td><td>The pace and the depth of calculus</td></tr>
      <tr><td>IB MYP</td><td>Open tasks judged on four criteria</td><td>Speed and density in timed papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For all of them, a few weeks before DP1 spent on algebraic fluency, functions and trigonometry, marked the IB way,
    makes the first term calmer. Our guide to <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching
    from CBSE to IB or IGCSE</a> sets out a bridging plan that suits State Board and ICSE students too; students from
    Cambridge should also see the <a href="{{ url('/igcse-maths-tutor-chennai') }}">IGCSE maths tutor in Chennai</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cim-routes">How IB maths tutors reach homes across Chennai</h2>
  <p>
    The pool of tutors who teach AA HL or AI HL is small in every city, so the route decides how wide we can look:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/chennai/zone/omr-ecr') }}">OMR and ECR</a>.</strong> {!! $cimA('neelankarai', 'Neelankarai') !!} has no station, so tutors drive down the ECR from Thiruvanmiyur or cross from Thoraipakkam; weekdays are calmer than beach weekends. Further south, {!! $cimA('kelambakkam', 'Kelambakkam') !!} has no rail at all and most homes sit in gated campuses, so tutors from Navalur, Siruseri or Padur are the realistic home option. Our zone notes suggest an online tutor here when no local IB specialist fits.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/adyar-besant-nagar-mylapore') }}">Adyar, Besant Nagar and Mylapore</a>.</strong> {!! $cimA('besant-nagar', 'Besant Nagar') !!}'s numbered streets are easy to find; a tutor comes by MRTS to Adyar or Thiruvanmiyur and finishes by auto. In {!! $cimA('alwarpet', 'Alwarpet') !!}, Teynampet on the Blue Line is the closest working stop.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/anna-nagar-kilpauk-aminjikarai') }}">Anna Nagar, Kilpauk and Aminjikarai</a>.</strong> For {!! $cimA('anna-nagar-west', 'Anna Nagar West') !!}, Thirumangalam on the Green Line and the large bus terminus on the Inner Ring Road bring tutors in; late afternoon avoids the ring road's office traffic.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/vadapalani-kk-nagar-porur') }}">Vadapalani, KK Nagar and Porur</a>.</strong> {!! $cimA('valasaravakkam', 'Valasaravakkam') !!} waits for its Yellow Line station, so tutors ride the Green Line to Vadapalani and take an auto along Arcot Road.</li>
  </ul>
  <p>
    Every locality is on the <a href="{{ url('/city/chennai') }}">Chennai home tutors page</a>, and the
    <a href="{{ url('/blog/omr-and-ecr-tuition-guide') }}">OMR and ECR tuition guide</a> covers that corridor in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cim-online">Online, at home, or both?</h2>
  <p>
    For IB maths in Chennai, the useful question is how to mix the two with one tutor. Handwritten AA working is
    easiest to correct at the table; online it works when the notebook sits under a second camera rather than being
    held up to a laptop. GDC teaching works online if the calculator screen is shared through an emulator or filmed
    from above. Families on the outer OMR, or anywhere the drive crosses the peak at Sholinganallur or Kathipara, often
    keep a weekend home session and move weekday sessions online. Our
    <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring guide</a> weighs it up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cim-plan">How tutoring time is spread over the two Diploma years</h2>
  <p>
    Chennai's schools do not share one calendar, and IB students sit their papers in May while State Board and CBSE
    neighbours follow a different rhythm. The plan therefore starts from your school's own dates.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical IB maths tutoring pattern</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Main use of the sessions</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Before or early in DP1</td><td>Algebra, functions and trigonometry repaired; GDC set up for AI</td><td>Two, for a few weeks</td></tr>
      <tr><td>DP1</td><td>Keeping pace with school; tests marked against IB markschemes; first Paper 3 problems for HL</td><td>One or two</td></tr>
      <tr><td>Exploration window</td><td>The mathematics behind the student's idea; criteria explained; no drafting</td><td>As before, one extra if needed</td></tr>
      <tr><td>DP2 to mocks</td><td>Remaining topics; mixed timed papers; an error log by topic</td><td>Two</td></tr>
      <tr><td>Mocks to May</td><td>Full papers by type, marked strictly; weak topics redone</td><td>Two or three</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cim-demo">Judging an IB maths demo in seven checks</h2>
  <ol>
    <li>Did the tutor ask the course, level and exam session before starting?</li>
    <li>Can they explain what "show that", "hence" and "hence or otherwise" require?</li>
    <li>Given a marked school test, can they separate method, accuracy and follow-through marks?</li>
    <li>For AA, do they insist on no-calculator practice; for AI, are they quick on the GDC?</li>
    <li>For HL, how would they introduce Paper 3 in DP1?</li>
    <li>On the exploration, do they say plainly that the choices and the writing stay with the student?</li>
    <li>How will they reach you, and at what time, through the traffic on your side of the city?</li>
  </ol>
  <p>
    A demo that misses on these is worth reporting to us; another matched tutor then gives a free demo of their own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cim-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For IB maths in Chennai, the course and level, the length of the tutor's journey and the number of weekly sessions
    shape the figure, and each tutor's fee is shown before the demo. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-chennai') }}">home tuition fees in Chennai</a>.
  </p>
  <p>
    Send the course, level, session, DP year, the trouble spot, your locality and the hours you can offer. Two or
    three matched tutors come back to you; one of them gives a <a href="{{ url('/demo-class') }}">free demo class</a>,
    and a later change of tutor costs nothing. Every tutor who joins passes an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before going live, and
    <a href="{{ url('/tutors') }}">tutor profiles</a> are open to browse. On the science side, look at <a href="{{ url('/ib-physics-tutor-chennai') }}">IB physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-chennai') }}">IB and IGCSE chemistry</a> tutors in Chennai.
  </p>
  </section>

  </div>
</article>
