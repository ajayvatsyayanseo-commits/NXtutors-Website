{{--
  Long-form guide for the "ICSE maths tutor Bengaluru" page. Authors: Abhinandan
  Tiwary (role: Class 10 CBSE and ICSE maths) and Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths, for the ISC section). No anecdotes, years or results are
  claimed for either. No schools, societies or other people are named. Written
  by the city authority page writer, 2 Oct 2026.

  CISCE facts are reworded from icse-maths-tutor-gurgaon, which cites the CISCE
  ICSE Mathematics syllabus (80 theory + 20 internal assessment; Class 10
  units) and the ICSE 2026 Mathematics specimen paper (Section A compulsory,
  40 marks, including multiple-choice items; Section B any four questions, 40
  marks; essential working required; rough work on the same sheet), and the
  CISCE ISC Mathematics syllabus 2027 and 2028 (from the 2027 exam, seven
  compulsory units and no Section B/C choice; 80 theory + 20 project; ISC
  Applied Mathematics a separate subject). Schools choose their own textbooks
  from publishers following the CISCE syllabus. Karnataka facts (SSLC
  blueprint shape; PU department eligibility certificates for students
  joining PUC from other boards; KCET ranking on PCM from CET and the
  qualifying examination) as cited in karnataka-board-tutor-bengaluru and
  kcet-tutor-bengaluru. No other dates.

  Local detail only from database/seo-content/areas/bengaluru-research.json
  and bengaluru-zone-guides.json (Basavanagudi: National College Green Line
  station, Lalbagh and South End Circle close, houses, evening parking near
  Gandhi Bazaar; BTM Layout: Yellow Line BTM Layout and Central Silk Board
  stations since August 2025, Silk Board junction at peak hours; CV Raman
  Nagar: Baiyappanahalli station, township and gated complexes, Old Madras
  Road at office hours; RT Nagar: no metro, buses, two-wheelers and autos,
  houses, market-lane parking, tutors who need not cross the Hebbal flyover;
  Thanisandra: no metro, Nagawara Blue Line station under construction, gated
  societies, heavy main-road traffic; Frazer Town: no open station, Pink Line
  Pottery Town under construction, Purple Line plus auto, busy shopping
  streets in the evening) and the Bengaluru hub. Area links render only for
  active Bengaluru areas. Fee wording is the approved sentence. FAQs render
  from faqs/icse-maths-tutor-bengaluru.php.
--}}
@php
  $icmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $icmA = function (string $slug, string $label) use ($icmSlugs) {
      return in_array($slug, $icmSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="icmGuideTitle">
  <h2 id="icmGuideTitle">ICSE maths tutor in Bengaluru: Classes 6 to 10, the board paper, and ISC maths after it</h2>

  <p class="nx-guide__lede">
    ICSE maths rewards students who show their thinking. The CISCE paper expects working on every answer, gives a
    whole section of choice in the second half, and includes topics, such as GST, shares and recurring deposits, that
    the state board and CBSE handle differently or not at all. In Bengaluru, where an ICSE student's friends may be
    sitting the SSLC or a CBSE paper, the right tutor is one who knows the CISCE paper specifically rather than maths
    in general. This guide is written by Abhinandan Tiwary, who teaches Class 10 CBSE and ICSE maths on NXTutors, with
    the ISC section by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths. It sits under our
    <a href="{{ url('/maths-home-tutor-bengaluru') }}">maths home tutors in Bengaluru</a> page and the
    <a href="{{ url('/icse-home-tutor-bengaluru') }}">ICSE and ISC tutors in Bengaluru</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icm-own">What sets it apart</a> ·
    <a href="#icm-early">Classes 6 to 9</a> ·
    <a href="#icm-units">Class 10 units</a> ·
    <a href="#icm-paper">The board paper</a> ·
    <a href="#icm-working">Working that earns marks</a> ·
    <a href="#icm-year">The Class 10 year</a> ·
    <a href="#icm-switch">ICSE, SSLC and CBSE</a> ·
    <a href="#icm-isc">ISC maths</a> ·
    <a href="#icm-zones">Travel by zone</a> ·
    <a href="#icm-mode">Home or online</a> ·
    <a href="#icm-demo">The demo</a> ·
    <a href="#icm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icm-own">Why ICSE maths needs its own kind of tutor</h2>
  <ul>
    <li><strong>The marks split.</strong> CISCE sets the Class 10 maths examination at 80 marks, with a further 20 for internal assessment through the year.</li>
    <li><strong>No single textbook.</strong> CISCE publishes the syllabus, and schools choose books from publishers that follow it. Two ICSE students in the same city can be working from different books, so the tutor must work from the syllabus and the school's book together.</li>
    <li><strong>Commercial mathematics.</strong> GST, recurring deposits and shares and dividends are full topics, with their own vocabulary.</li>
    <li><strong>Method is marked.</strong> The specimen paper's instructions ask for essential working, and an answer without it can lose marks even when correct.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-early">Classes 6 to 9: build the habits before the board year</h2>
  <p>
    The middle-school years are where ICSE maths habits are made or lost. A tutor at this stage should be less worried
    about racing ahead and more about three things: arithmetic that is accurate without a calculator, algebra laid out
    one step per line, and geometry where every statement has a reason. Students who arrive in Class 9 with those
    habits find the jump manageable; students who do not spend Class 9 unlearning shortcuts.
  </p>
  <p>
    Class 9 is the real start of the board course. Many topics that appear in the Class 10 paper are introduced or
    deepened here, so a tutor who treats Class 9 as a warm-up costs the student later. One or two sessions a week from
    the start of Class 9 is usually enough; Class 6 to 8 students often need only one. Our
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> covers the years in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-units">The Class 10 syllabus, unit by unit</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE Class 10 mathematics units and where marks most often slip</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Topics</th><th scope="col">Where marks slip</th></tr>
    </thead>
    <tbody>
      <tr><td>Commercial mathematics</td><td>GST, recurring deposits, shares and dividends</td><td>Face value and market value confused; GST applied at the wrong stage</td></tr>
      <tr><td>Algebra</td><td>Linear inequations, quadratic equations, ratio and proportion, factor and remainder theorems, matrices, arithmetic and geometric progressions</td><td>Matrix products taken in the wrong order; solution sets of inequations left unwritten</td></tr>
      <tr><td>Coordinate geometry</td><td>Reflection, section and mid-point formulae, equation of a straight line</td><td>Reflection in the wrong axis or origin; slopes with sign errors</td></tr>
      <tr><td>Geometry</td><td>Similarity, loci, circles, constructions</td><td>Proof steps with no reasons; construction arcs rubbed out</td></tr>
      <tr><td>Mensuration</td><td>Cylinders, cones, spheres and combined solids, including melting and recasting</td><td>Radius and diameter swapped; units missing</td></tr>
      <tr><td>Trigonometry</td><td>Identities; heights and distances</td><td>Identity proofs that skip lines; diagrams drawn too small to use</td></tr>
      <tr><td>Statistics and probability</td><td>Mean, median, mode, histograms and ogives; simple probability</td><td>Median and quartiles read carelessly off an ogive</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-paper">How the board paper is organised</h2>
  <p>
    The 2026 specimen paper has two sections of 40 marks each. Section A is compulsory and includes multiple-choice
    items alongside short questions across the syllabus. Section B offers a choice: students answer any four questions.
    Rough work goes on the same sheet as the answer, next to it, not on a separate page.
  </p>
  <p>
    Two tactics follow. In Section A, speed with accuracy matters, because every question must be attempted; a tutor
    should time this section separately in practice. In Section B, choosing well is a skill: students should read the
    whole section first and pick the questions they can finish completely, rather than starting the first one they see.
    A tutor can rehearse this choice on specimen and past papers so it is automatic by the exam.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-working">Working that earns marks</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Formula, substitution, result</h3>
  <p>
    In mensuration and commercial maths, write the formula, substitute the values, then give the answer with its unit.
    If the arithmetic slips, the first two lines can still earn credit.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Reasons beside statements</h3>
  <p>
    In geometry, each step needs its reason in brackets: alternate angles, angle in a semicircle, tangent perpendicular
    to radius. A correct conclusion without reasons is a weak answer.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Rough work kept visible</h3>
  <p>
    Side calculations belong on the same page, where the examiner can see them. Students who hide them lose the chance
    of method credit.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Answer what was asked</h3>
  <p>
    End word problems with a sentence that answers the question in its own terms: the maturity value, the number of
    shares, the height of the tower.
  </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-year">Pacing the Class 10 year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A Class 10 ICSE maths plan by term</caption>
    <thead>
      <tr><th scope="col">Stretch of the year</th><th scope="col">What the tutor prioritises</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Opening months</td><td>Commercial mathematics and algebra alongside school; Class 9 gaps closed early</td><td>Two</td></tr>
      <tr><td>Middle of the year</td><td>Geometry, coordinate geometry and mensuration, with chapter tests marked for working</td><td>Two</td></tr>
      <tr><td>Later months</td><td>Trigonometry, statistics and probability; syllabus complete; first full timed papers; internal assessment tasks</td><td>Two or three</td></tr>
      <tr><td>Pre-boards to the exam</td><td>Full papers with Section B choice practised; error review after each</td><td>Three</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Internal assessment work should be guided by the tutor, never done for the student. For Class 10 more broadly,
    our <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths board guide</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-switch">Moving between ICSE, the state board and CBSE in Bengaluru</h2>
  <ul>
    <li><strong>Into ICSE from the state board or CBSE.</strong> The biggest new pieces are commercial mathematics and the habit of full written working. Six to eight focused sessions usually close the gap.</li>
    <li><strong>From ICSE into PUC.</strong> Some ICSE students continue in a Karnataka PU college. The PU department issues eligibility certificates for students from other boards, and the colleges arrange this. The II PUC maths paper follows the board's blueprint, with its own parts and question types, so a short adjustment is needed.</li>
    <li><strong>From ICSE into ISC or IB.</strong> ICSE working habits transfer well to both. Students heading to the IB Diploma should see the <a href="{{ url('/ib-maths-tutor-bengaluru') }}">IB maths tutor in Bengaluru</a> page.</li>
  </ul>
  <p>
    Students who will sit KCET later should know that KEA's engineering rank combines CET marks with PCM marks from
    the Class 12 examination, ISC included; our <a href="{{ url('/kcet-tutor-bengaluru') }}">KCET tutors in
    Bengaluru</a> page explains how.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-isc">ISC maths in Classes 11 and 12</h2>
  <p>
    From the 2027 examination, CISCE's ISC Mathematics syllabus has seven compulsory units with no choice between
    sections, and the subject is assessed as 80 marks of theory plus a 20-mark project. Applied Mathematics is a
    separate ISC subject, so check which one your child has chosen. ISC calculus, vectors, three-dimensional geometry
    and probability go well beyond ICSE, and the loss of section choice means no unit can be skipped. A tutor for ISC
    should be comfortable with the full Class 12 syllabus and with guiding, not writing, the project. The national
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page goes further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-zones">ICSE maths tutors, zone by zone</h2>
  <ul>
    <li><strong><a href="{{ url('/city/bengaluru/zone/jayanagar-jp-nagar-banashankari') }}">Jayanagar, JP Nagar and Banashankari</a>:</strong> {!! $icmA('basavanagudi', 'Basavanagudi') !!} is served by National College station on the Green Line; evening parking near Gandhi Bazaar is short, so the metro is the easier way in.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/btm-bannerghatta-road-electronic-city') }}">BTM, Bannerghatta Road and Electronic City</a>:</strong> {!! $icmA('btm-layout', 'BTM Layout') !!} has two Yellow Line stations; plan sessions away from peak hours at Silk Board junction.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/indiranagar-old-airport-road') }}">Indiranagar and Old Airport Road</a>:</strong> {!! $icmA('cv-raman-nagar', 'CV Raman Nagar') !!} is a short auto from Baiyappanahalli; townships and gated complexes need the tutor's name at the gate, and after-school slots avoid Old Madras Road at office hours.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/hebbal-rt-nagar-yelahanka') }}">Hebbal, RT Nagar and Yelahanka</a>:</strong> {!! $icmA('rt-nagar', 'RT Nagar') !!} has no metro; a tutor from RT Nagar or Hebbal can come by bus, auto or two-wheeler without crossing the flyover.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/hennur-kalyan-nagar-banaswadi') }}">Hennur, Kalyan Nagar and Banaswadi</a>:</strong> in {!! $icmA('thanisandra', 'Thanisandra') !!}, homes are mostly in gated societies and the main road is heavy at office hours, so share the tutor's details with security and favour weekend or after-school slots.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/frazer-town-richmond-town-ulsoor') }}">Frazer Town, Richmond Town and Ulsoor</a>:</strong> {!! $icmA('frazer-town', 'Frazer Town') !!} has no open station yet; tutors combine the Purple Line with an auto, and an afternoon or early evening class avoids the busy shopping streets.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-mode">Home or online for ICSE maths</h2>
  <p>
    For Classes 6 to 10, home tuition has a clear edge: a tutor beside the student sees whether reasons are written,
    whether rough work is kept, and whether a construction is accurate. Online suits revision of commercial maths,
    algebra practice and paper review, provided the working is visible. Where no metro reaches your area yet, one home
    session plus one online session a week is a practical split. See our comparison of
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-demo">Checks for the ICSE maths demo</h2>
  <ol>
    <li><strong>Which book does the school use?</strong> The tutor should ask, and then refer to the CISCE syllabus as well.</li>
    <li><strong>A commercial maths question.</strong> Ask for a recurring deposit or shares problem taught from scratch.</li>
    <li><strong>Marking for working.</strong> Show a marked school test and ask where method marks were lost.</li>
    <li><strong>Section B strategy.</strong> Ask how they train students to choose four questions.</li>
    <li><strong>Internal assessment.</strong> The tutor should guide, never write.</li>
    <li><strong>Travel and timing.</strong> Which route, and what happens on a day it fails.</li>
  </ol>
  <p>
    If the demo misses on these, tell us; the next matched tutor gives their own free demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee, visible on the profile; the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-bengaluru') }}">home tuition fees in Bengaluru</a> say what moves it.
  </p>
  <p>
    Tell us the class, the school's book if you know it, the topics causing trouble, your locality and the slots that
    work. You get two or three matched tutors and a <a href="{{ url('/demo-class') }}">free demo class</a>, and
    switching tutor later is free. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live; you can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>.
  </p>
  </section>

  </div>
</article>
