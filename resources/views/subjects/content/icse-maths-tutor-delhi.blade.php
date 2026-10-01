{{--
  Long-form guide for the "ICSE maths tutor Delhi" page. Authors: Abhinandan
  Tiwary (role: Class 10 CBSE and ICSE maths) and Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths, for the ISC section). No anecdotes, years or results are
  claimed for either. No schools, societies or other people are named.

  CISCE facts are reworded from icse-maths-tutor-mumbai,
  icse-maths-tutor-gurgaon and icse-home-tutor-delhi, which cite (cisce.org,
  https://cisce.org/regulations-and-syllabuses/):
  - ICSE Mathematics (51) syllabus, Year 2027: one 3-hour paper of 80 marks
    plus 20 marks internal assessment, at least two assignments assessed by
    the subject teacher and an external examiner; Class 10 units (commercial
    mathematics, algebra, coordinate geometry, geometry, mensuration,
    trigonometry, statistics and probability).
  - ICSE 2026 Mathematics specimen paper: Section A compulsory, 40 marks,
    including multiple-choice items; Section B any four questions, 40 marks;
    essential working required; rough work on the same sheet.
  - ISC Mathematics (860), Year 2027 and 2028: Paper I theory, 3 hours, 80
    marks; Paper II project work, 20 marks; from the 2027 exam seven
    compulsory units and no Section B/C choice; ISC Applied Mathematics a
    separate subject.
  - Schools choose their own textbooks from publishers following the CISCE
    syllabus.
  No other dates.

  Delhi detail only from the Delhi city hub view (CBSE for most students,
  ICSE/ISC a sizeable following; CISCE papers long-answer across a broad
  syllabus, coverage harder than difficulty, revision cycle, internal
  assessment and project work; Yamuna crossing; metro interchanges),
  database/seo-content/zones/delhi.json and
  database/seo-content/areas/delhi-research.json (Pamposh Enclave: Greater
  Kailash Magenta station, Nehru Place Violet, office-district evenings, guard
  informed, two-wheeler parking; Shivalik: Malviya Nagar Yellow Line,
  e-rickshaw, RWA gates, limited evening parking; Uttam Nagar: four Blue Line
  stations, fixed-route e-rickshaws, doorstep visits, market lanes; New
  Rajinder Nagar: Rajendra Place and Karol Bagh stations, calmer than the
  coaching lanes across Shankar Road, evening traffic on Shankar and Pusa
  Roads; Rohini Sector 11: Rithala or Sector 18,19, nearest station depends on
  pocket, home tutor plus online for one paper; Vasundhara Enclave:
  cooperative societies, New Ashok Nagar Blue Line and Namo Bharat, each
  society runs its own gate, not the Ghaziabad township). No board is said to
  concentrate in any area. Area links render only for active Delhi areas. Fee
  wording is the approved sentence. FAQs render from
  faqs/icse-maths-tutor-delhi.php.
--}}
@php
  $dcmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dcmA = function (string $slug, string $label) use ($dcmSlugs) {
      return in_array($slug, $dcmSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="dcmGuideTitle">
  <h2 id="dcmGuideTitle">ICSE maths tutor in Delhi: a wide syllabus, a marked method, and ISC after Class 10</h2>

  <p class="nx-guide__lede">
    In a city where CBSE is the board most children sit, an ICSE student's maths can look unusual to relatives and
    neighbours: chapters on shares and dividends, matrices, loci, and a habit of writing every step. CISCE has a sizeable
    following in Delhi, and its examiners reward the written method as well as the answer, across a syllabus that is
    harder to cover than it is to understand. So the tutor an ICSE child needs reads working line by line and plans a
    revision cycle that returns to every chapter. Abhinandan Tiwary, the NXTutors tutor for Class 10 CBSE and ICSE maths,
    wrote this page; the ISC part comes from Ajay Vatsyayan, our IB, IGCSE and ISC maths tutor. Parent pages: the
    <a href="{{ url('/maths-home-tutor-delhi') }}">maths home tutors in Delhi</a> guide and the Delhi
    <a href="{{ url('/icse-home-tutor-delhi') }}">ICSE and ISC hub</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dcm-differ">How ICSE maths differs</a> ·
    <a href="#dcm-middle">Classes 6 to 9</a> ·
    <a href="#dcm-ten">Class 10 by unit</a> ·
    <a href="#dcm-paper">The board paper</a> ·
    <a href="#dcm-layout">Setting out the answer</a> ·
    <a href="#dcm-cycle">A revision cycle</a> ·
    <a href="#dcm-cbse">Between CBSE and ICSE</a> ·
    <a href="#dcm-isc">ISC maths</a> ·
    <a href="#dcm-zones">Tutors across Delhi</a> ·
    <a href="#dcm-mode">Home or online</a> ·
    <a href="#dcm-demo">Demo checklist</a> ·
    <a href="#dcm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dcm-differ">How ICSE maths differs from the CBSE maths next door</h2>
  <p>
    Quadratics, trigonometry, circles, mensuration, statistics and probability appear on both boards. What sets the CISCE
    course apart comes down to three points.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Additional chapters</h3>
  <p>
    CISCE examines topics such as GST, recurring deposits, shares and dividends (together called commercial
    mathematics), plus matrices, loci and reflection. A tutor trained only on NCERT books is usually weakest exactly here.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>No single textbook</h3>
  <p>
    CISCE fixes the syllabus but not the book; schools choose from several publishers whose titles follow it. Two ICSE children in the same
    colony may learn one chapter from different books, so the tutor works from the syllabus, not one author.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>The method earns marks</h3>
  <p>
    CISCE papers warn that omitting essential working loses marks, and examiners award credit step by step. A right
    answer standing alone is a risk.
  </p>
    </div>
  </div>
  <p>
    So we match tutors whose regular students are ICSE students, rather than all-board tutors prepared to have a go. For a broader
    comparison of boards, see our <a href="{{ url('/blog/how-to-choose-boardstream') }}">board and stream guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-middle">Classes 6 to 9: building the habits Class 10 will need</h2>
  <p>
    The middle-school chapters look ordinary: fractions and decimals, ratio, percentage, simple interest,
    first algebra, basic geometry, mensuration and data handling. The value lies in the habits each one forms. Quick, accurate
    percentage work feeds straight into GST and shares in Class 10. Brackets handled confidently make factorisation
    easy. A reason written beside every geometry step becomes second nature long before the board year. One session a
    week that checks written work is usually enough at this stage; our
    <a href="{{ url('/maths-home-tutor/class-8') }}">Class 8 maths tutor</a> page describes it.
  </p>
  <p>
    Class 9 is the real jump. Within a single year the syllabus adds compound interest, harder expansions and
    factorisation, simultaneous equations, logarithms alongside indices, congruent triangles and the theorems that rest
    on them, rectilinear figures, circles, and an introduction to both trigonometry and coordinate geometry. Logarithms, reasoned proofs and
    awkward factorisation are the commonest sticking points, and Class 10 leaves no time to mend them. For a cross-board view of the
    year, open the <a href="{{ url('/maths-home-tutor/class-9') }}">Class 9 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-ten">Class 10 unit by unit, with the error a tutor hunts for</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE Class 10 Mathematics: units and typical errors</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Covers</th><th scope="col">Typical error</th></tr>
    </thead>
    <tbody>
      <tr><td>Commercial mathematics</td><td>GST, recurring deposits, shares and dividends</td><td>Dividend worked on market value instead of face value</td></tr>
      <tr><td>Algebra</td><td>Inequations, quadratics, proportion, the factor theorem, matrices, AP and GP</td><td>Matrix products taken in the wrong order; inequation answers not written as a set</td></tr>
      <tr><td>Coordinate geometry</td><td>Reflections; dividing a segment in a ratio; straight-line equations</td><td>Image reflected in the wrong axis or line</td></tr>
      <tr><td>Geometry</td><td>Similarity, loci, circle theorems, constructions</td><td>Statements with no reason; construction arcs rubbed out</td></tr>
      <tr><td>Mensuration</td><td>Cylinders, cones, spheres and their combinations; melting and recasting</td><td>Diameter used for radius; unit left off</td></tr>
      <tr><td>Trigonometry</td><td>Proving identities; height and distance problems</td><td>Proofs that jump lines; unlabelled diagrams</td></tr>
      <tr><td>Statistics and probability</td><td>Averages, histograms and ogives; probability</td><td>Median and quartiles misread from a rough ogive</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Commercial mathematics repays an early start: once fluent, a student finds its questions follow a few patterns and
    become reliable marks. For a chapter-wise plan, see the
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths board guide</a> on our blog.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-paper">The Class 10 board paper: 80 marks, two sections, one choice</h2>
  <p>
    The written examination is a single three-hour paper worth 80 marks. Internal assessment through the year supplies
    the other 20, through at least two assignments that the subject teacher and an external examiner assess. The 2026
    specimen paper published by CISCE makes Section A compulsory, worth 40 marks, with short questions, multiple-choice items
    among them, drawn from every unit. Section B carries the other 40, and the candidate picks any four of its longer
    multi-part questions.
  </p>
  <p>
    Two lessons follow. No chapter is safe to skip, because Section A touches them all. And choice in Section B is an
    advantage only after practice: scan the section, commit to four early, and never abandon a half-done question
    for another. Practise mainly from ICSE past papers and the specimen; other boards' questions help
    with content but not with this format.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-layout">Setting out an answer the way ICSE examiners want</h2>
  <ul>
    <li><strong>Formula, then substitution, then result,</strong> each on its own line, so a slip in arithmetic still leaves the method marks.</li>
    <li><strong>A reason in brackets</strong> beside every geometry statement; a correct angle without one can lose the mark.</li>
    <li><strong>Rough work on the answer sheet</strong>, in the margin, as CISCE asks, never on scrap paper.</li>
    <li><strong>A final sentence with units</strong> for every word problem.</li>
  </ul>
  <p>
    Teaching this is patient work, done by reading each line every session and correcting layout as well as
    mathematics. Students who find it fussy at first usually notice the difference in the next school test.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-cycle">A revision cycle for a long syllabus</h2>
  <p>
    Because coverage is the real difficulty, the Class 10 year runs better as a loop rather than a straight line.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A Class 10 ICSE maths year, phase by phase</caption>
    <thead>
      <tr><th scope="col">Phase</th><th scope="col">Main work</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Summer break and first term</td><td>Close Class 9 gaps; commercial mathematics and algebra alongside school</td><td>Two</td></tr>
      <tr><td>Middle of the year</td><td>Geometry, coordinate geometry, mensuration; chapter tests marked for working; first internal assessment assignments</td><td>Two</td></tr>
      <tr><td>Second term</td><td>Trigonometry, statistics and probability; syllabus finished; a first full paper; a quick pass back through the early units</td><td>Two or three</td></tr>
      <tr><td>From the pre-boards</td><td>Timed full papers including the Section B selection; lost marks reworked a week later</td><td>Three</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A student who starts late gains most by banking commercial mathematics and the dependable long-question topics before
    anything else.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-cbse">Moving between CBSE and ICSE</h2>
  <p>
    With both boards common in Delhi, children do change between them, often with a change of school. A child
    joining ICSE from CBSE in the middle-school years typically has to learn GST, shares and banking, matrices, reasoned geometry and a
    fuller written style. A student leaving ICSE for CBSE after Class 10 finds some chapters fall away but must get used
    to the NCERT books and CBSE's question formats. A tutor familiar with both syllabuses can map the gap and fill it
    within a few weeks, without re-teaching the whole year. Our <a href="{{ url('/cbse-home-tutor-delhi') }}">CBSE home tutors in
    Delhi</a> page describes the other side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-isc">ISC maths in Classes 11 and 12</h2>
  <p>
    ISC maths is a genuine step up from ICSE. The Class 12 assessment is Paper I, a three-hour theory paper of 80 marks,
    and Paper II, project work worth 20. From the 2027 examination the old choice between Sections B and C has gone:
    every candidate studies the same seven compulsory units, covering functions and relations, algebra, calculus, vectors,
    3D geometry, linear programming and probability. For an applied, commerce-facing course there is ISC Applied Mathematics, which is a different subject.
  </p>
  <p>
    Class 11 lays the base for all of it, particularly functions, limits and the first calculus, and students who drift
    through it pay in Class 12. ISC science students preparing for JEE can have a tutor plan both together; see our
    <a href="{{ url('/jee-home-tutor-delhi') }}">JEE home tutors in Delhi</a>. The national
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> guide explains the paper in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-zones">ICSE maths tutors across Delhi, six neighbourhoods</h2>
  <ul>
    <li><strong><a href="{{ url('/city/delhi/zone/gk-defence-colony-lajpat-nagar') }}">GK, Defence Colony and Lajpat Nagar</a>.</strong> {!! $dcmA('pamposh-enclave', 'Pamposh Enclave') !!} is served by Greater Kailash on the Magenta Line, with Nehru Place on the Violet Line for tutors from the east. Tell the colony guard in advance; a tutor on a two-wheeler parks easily inside.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket, Malviya Nagar and Hauz Khas</a>.</strong> In {!! $dcmA('shivalik', 'Shivalik') !!}, tutors take the Yellow Line to Malviya Nagar and an e-rickshaw from there. Lane parking is scarce in the evening.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">Janakpuri, Rajouri Garden and Punjabi Bagh</a>.</strong> {!! $dcmA('uttam-nagar', 'Uttam Nagar') !!} has four Blue Line stations, and fixed-route e-rickshaws cover the last leg. Visits are to the door, so share a landmark and the floor.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/karol-bagh-patel-nagar-rajinder-nagar') }}">Karol Bagh, Patel Nagar and Rajinder Nagar</a>.</strong> {!! $dcmA('new-rajinder-nagar', 'New Rajinder Nagar') !!} is quieter than the coaching lanes across Shankar Road; tutors walk from Rajendra Place on the Blue Line.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/rohini') }}">Rohini</a>.</strong> In {!! $dcmA('rohini-sector-11', 'Rohini Sector 11') !!}, the nearest station changes with the pocket: Rithala on the Red Line for some, Rohini Sector 18, 19 on the Yellow Line for others.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/mayur-vihar-patparganj-ip-extension') }}">Mayur Vihar, Patparganj and IP Extension</a>.</strong> {!! $dcmA('vasundhara-enclave', 'Vasundhara Enclave') !!}, not the Ghaziabad township, is reached from New Ashok Nagar on the Blue Line; each society runs its own gate, so register the tutor once.</li>
  </ul>
  <p>
    A tutor from the same side of the Yamuna usually keeps time better than a stronger one crossing it at rush hour.
    The <a href="{{ url('/blog/dwarka-and-west-delhi-tuition-guide') }}">Dwarka and West Delhi tuition guide</a> covers
    the western colonies in more detail, and every locality is listed on the
    <a href="{{ url('/city/delhi') }}">Delhi home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-mode">Home or online for ICSE maths</h2>
  <p>
    Because layout carries marks in ICSE, a tutor at the table has a real edge: errors in setting out are fixed while
    the pen is still moving. Online sessions can match that if a camera points down at the notebook and the child
    finishes each written line before discussing it. In Class 10 a mixed week, one home session and one online with the
    same tutor, is a sturdy choice, so
    that a week of school events or a difficult commute does not interrupt the pre-board run-up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-demo">What to test in the ICSE maths demo</h2>
  <ol>
    <li>Hand the tutor a dividend question and listen: face value, market value and the dividend itself should be untangled without hesitation.</li>
    <li>Watch whether they correct how your child sets out the working, not only the final figure.</li>
    <li>Ask how they train the Section B choice in full papers.</li>
    <li>Do they plan to teach in step with your school's books and sequence?</li>
    <li>For Class 10, ask for a plan up to the pre-boards that includes the internal assessment assignments.</li>
    <li>For ISC, confirm that they teach the 2027 pattern with no Section B or C choice.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Within that range, middle-school ICSE maths tends to cost less than the Class 10 board year or ISC, with the
    tutor's journey and the weekly number of sessions also counting. Each fee appears on the tutor's profile before the
    demo. Read the <a href="{{ url('/pricing-guide') }}">pricing guide</a> or our post on
    <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi tuition fees</a> for the detail.
  </p>
  <p>
    Send the class, the troublesome chapters, your colony or metro station and the times that suit you. Two or three
    matched ICSE maths tutors come back; one of them gives a <a href="{{ url('/demo-class') }}">free demo class</a>, and
    changing tutor later costs nothing. Every tutor who joins passes an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. Meanwhile, look through
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or compare boards on the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page.
  </p>
  </section>

  </div>
</article>
