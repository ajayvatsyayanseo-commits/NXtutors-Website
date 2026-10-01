{{--
  Long-form guide for the "ICSE maths tutor Mumbai" page. Authors: Abhinandan
  Tiwary (role: Class 10 CBSE and ICSE maths) and Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths, for the ISC section). No anecdotes, years or results are
  claimed for either. No schools, societies or other people are named.

  CISCE facts are reworded from icse-maths-tutor-gurgaon, which cites the CISCE
  ICSE Mathematics syllabus (80 theory + 20 internal assessment; Class 10
  units) and the ICSE 2026 Mathematics specimen paper (Section A compulsory,
  40 marks, including multiple-choice items; Section B any four questions, 40
  marks; essential working required; rough work on the same sheet), and the
  CISCE ISC Mathematics syllabus 2027 and 2028 (from the 2027 exam, seven
  compulsory units and no Section B/C choice; 80 theory + 20 project; ISC
  Applied Mathematics a separate subject). Schools choose their own textbooks
  from publishers following the CISCE syllabus. No other dates.

  Local detail only from database/seo-content/zones/mumbai.json (Matunga served
  by three suburban stations; Andheri East reached by Line 1 and Line 3 at
  Marol Naka and SEEPZ; Borivali a terminus on the Western line with Line 2A
  and Line 7; Thane East / Kopri walkable from Thane station, Trans-Harbour
  trains; Nerul a Harbour line and Trans-Harbour terminus), mumbai-research.json
  and the city hub (SSC/HSC and junior college context, monsoon fallback).
  The ICSE listing sentence reports public tuition listings
  (plan/mumbai-competitors.md section 4), not NXTutors request data. Bhandup &
  Mulund has no zone page, so it is plain text. Area links render only for
  active Mumbai areas. Fee wording is the approved sentence. FAQs render from
  faqs/icse-maths-tutor-mumbai.php.
--}}
@php
  $icxSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $icxA = function (string $slug, string $label) use ($icxSlugs) {
      return in_array($slug, $icxSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="icxGuideTitle">
  <h2 id="icxGuideTitle">ICSE maths tutor in Mumbai: Classes 6 to 10, the board paper, and ISC after it</h2>

  <p class="nx-guide__lede">
    In a Mumbai housing society, the ICSE child is often the one whose maths homework looks longest. That is not an
    illusion: the CISCE syllabus covers more ground than many parents expect, the Class 10 paper is dense, and the marks
    reward a written method as much as a correct answer. A good ICSE maths tutor is therefore part teacher, part
    examiner, reading every line the student writes. This page is written by Abhinandan Tiwary, who teaches Class 10
    CBSE and ICSE maths on NXTutors, with the ISC section from Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths. It
    belongs to our <a href="{{ url('/maths-home-tutor-mumbai') }}">maths home tutors in Mumbai</a> page and the
    <a href="{{ url('/icse-home-tutor-mumbai') }}">ICSE and ISC tutors in Mumbai</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icx-scope">What ICSE maths covers</a> ·
    <a href="#icx-junior">Classes 6 to 9</a> ·
    <a href="#icx-units">Class 10 units</a> ·
    <a href="#icx-paper">The board paper</a> ·
    <a href="#icx-method">Writing the method</a> ·
    <a href="#icx-year">Pacing Class 10</a> ·
    <a href="#icx-switch">Between SSC, CBSE and ICSE</a> ·
    <a href="#icx-isc">ISC maths</a> ·
    <a href="#icx-zones">Tutors across Mumbai</a> ·
    <a href="#icx-mode">Home or online</a> ·
    <a href="#icx-demo">Demo checklist</a> ·
    <a href="#icx-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icx-scope">What makes ICSE maths its own subject</h2>
  <p>
    Much of the mathematics is shared with other Indian boards: quadratics, trigonometry, circles, mensuration,
    statistics and probability. Three things set ICSE apart.
  </p>
  <ul>
    <li><strong>Extra territory.</strong> Commercial mathematics (GST, banking through recurring deposits, shares and dividends), matrices, loci and reflection are all examined, and tutors trained only on other boards are often weakest here.</li>
    <li><strong>The syllabus is the authority.</strong> There is no single prescribed textbook; each school picks books from publishers who follow the CISCE syllabus, so two ICSE students in the same building may use different books for the same chapter.</li>
    <li><strong>Method is marked.</strong> CISCE papers warn that leaving out essential working loses marks, and examiners award marks step by step.</li>
  </ul>
  <p>
    That is why we look for tutors who teach ICSE week in, week out, rather than general maths tutors willing to try it.
    Our <a href="{{ url('/blog/how-to-choose-boardstream') }}">guide to choosing a board and stream</a> compares the
    boards more broadly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icx-junior">Classes 6 to 9: habits first, then the Class 9 jump</h2>
  <p>
    In Classes 6 to 8 the content looks ordinary: number work, fractions and decimals, ratio and percentage, interest,
    early algebra, simple geometry and mensuration, data handling. What matters is the habit each topic builds. Line-by-line
    setting out, quick percentages (the raw material of GST and shares later), confident bracket work in algebra, and a
    reason written beside each geometry statement. One weekly session that checks written work is usually enough here;
    see our <a href="{{ url('/maths-home-tutor/class-8') }}">Class 8 maths tutor</a> page for that stage.
  </p>
  <p>
    Class 9 is where many Mumbai ICSE families first look for help, and with reason. The syllabus widens to compound
    interest, expansions and factorisation, simultaneous equations, indices and logarithms, congruency, the mid-point
    theorem and Pythagoras, rectilinear figures, circles, statistics, mensuration, and first steps in trigonometry and
    coordinate geometry. Logarithms, reasoned geometry proofs and harder factorisation are the usual sticking points,
    and Class 10 leaves no slack to repair them. Our <a href="{{ url('/maths-home-tutor/class-9') }}">Class 9 maths
    tutor</a> page covers this year across boards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icx-units">The Class 10 units, and the slip typical of each</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE Class 10 Mathematics by unit</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">What it includes</th><th scope="col">Slip a tutor watches for</th></tr>
    </thead>
    <tbody>
      <tr><td>Commercial mathematics</td><td>GST; recurring deposit accounts; shares and dividends</td><td>Mixing up face value and market value</td></tr>
      <tr><td>Algebra</td><td>Linear inequations, quadratics, ratio and proportion, factor and remainder theorems, matrices, AP and GP</td><td>Multiplying matrices in the wrong order; solution sets left out</td></tr>
      <tr><td>Coordinate geometry</td><td>Reflection, section and mid-point formulae, equation of a line</td><td>Reflecting in the wrong axis</td></tr>
      <tr><td>Geometry</td><td>Similarity, loci, circles, constructions</td><td>Steps without reasons; construction lines erased</td></tr>
      <tr><td>Mensuration</td><td>Cylinder, cone, sphere and combinations; melting and recasting</td><td>Radius and diameter confused; units dropped</td></tr>
      <tr><td>Trigonometry</td><td>Identities; heights and distances</td><td>Identity proofs that jump steps; poor diagrams</td></tr>
      <tr><td>Statistics and probability</td><td>Mean, median, mode, histograms, ogives; simple probability</td><td>Reading the median or quartiles off an ogive inaccurately</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Commercial mathematics deserves an early start. Once a student is fluent, its questions follow recognisable
    patterns and become dependable marks. Our <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10
    maths board guide</a> goes chapter by chapter.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icx-paper">How the board paper is put together</h2>
  <p>
    The written paper carries 80 marks and internal assessment through the year adds 20, through assignments set and
    marked with an external examiner involved. Going by the CISCE specimen paper for 2026, Section A is compulsory, worth
    40 marks, and spreads short questions, including multiple-choice items, across the whole syllabus. Section B is also
    worth 40 marks, and the student answers any four of the longer, multi-part questions on offer.
  </p>
  <p>
    Two consequences follow. No chapter can be dropped, because Section A reaches all of them. And the Section B choice
    only helps a student who has practised choosing: read the whole section, commit to four in the opening minutes, and
    do not abandon a question halfway for another. In full mock papers, a tutor should time that choice as strictly as
    the answers. ICSE past papers and the specimen paper should be the main practice material; other boards' papers help
    with a few topics but not with ICSE's style.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icx-method">Writing the method: where ICSE marks are kept</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Formula, substitution, answer</h3>
  <p>
    Each on its own line. If the arithmetic slips, the method marks remain; a lone wrong number earns nothing.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>A reason in brackets</h3>
  <p>
    Every geometry statement needs its justification beside it. A correct angle with no reason can still lose the mark.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Rough work on the same sheet</h3>
  <p>
    CISCE asks for rough work alongside the answer, not on scrap paper. Examiners do read the margin.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>A closing sentence</h3>
  <p>
    Word problems end with the answer in words and units. It feels fussy; it is where easy marks sit.
  </p>
    </div>
  </div>
  <p>
    Teaching this is slow work: the tutor reads every line, every session, and corrects layout as well as mathematics.
    Students who resist at first usually see the difference in their next school test.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icx-year">Pacing Class 10 through a Mumbai school year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How Class 10 ICSE maths sessions are usually spread</caption>
    <thead>
      <tr><th scope="col">Part of the year</th><th scope="col">Priority</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>First term</td><td>Commercial mathematics and algebra in step with school; Class 9 gaps closed</td><td>Two</td></tr>
      <tr><td>Monsoon months</td><td>Geometry, coordinate geometry and mensuration, with chapter tests marked for working; more sessions online on heavy-rain days</td><td>Two</td></tr>
      <tr><td>Second term</td><td>Trigonometry and statistics; syllabus finished; first timed full papers; internal assessment assignments</td><td>Two or three</td></tr>
      <tr><td>Pre-boards to the exam</td><td>Full papers with the Section B choice timed; error review</td><td>Three</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A student who starts late can still gain a lot by securing commercial mathematics and the most predictable Section B
    topics first, then widening out.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icx-switch">Moving between SSC, CBSE and ICSE in Mumbai</h2>
  <p>
    Mumbai families change boards more often than most, with a change of school, a move across the city, or a plan for
    junior college. A student coming into ICSE from the State Board or CBSE in Class 8 or 9 usually needs commercial
    mathematics, reasoned geometry and a fuller style of setting out. A student leaving ICSE for another board finds
    some topics disappear but must adjust to that board's textbooks and question style. Either way, a tutor who knows
    both sides can list the missing topics and close them in weeks rather than re-teaching the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icx-isc">ISC maths in Classes 11 and 12</h2>
  <p>
    After Class 10, some Mumbai ICSE students stay with CISCE for ISC while others move to a junior college. For those
    who stay, ISC maths is a real step up. The Class 12 assessment is an 80-mark theory paper plus 20 marks for project
    work. From the 2027 examination there is no longer a choice between Section B and Section C: every candidate covers
    the same seven units, running from relations and functions, algebra and calculus to vectors, three-dimensional
    geometry, linear programming and probability. Students who want applied, commerce-oriented content take ISC Applied
    Mathematics, which is a separate subject.
  </p>
  <p>
    Class 11 lays the ground for Class 12, especially functions, limits and early calculus, and students who coast
    through it pay later. Many ISC science students also prepare for JEE, which a tutor can plan alongside; see our
    <a href="{{ url('/jee-home-tutor-mumbai') }}">JEE home tutors in Mumbai</a> page. The national
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> guide sets out the paper in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icx-zones">ICSE maths tutors across Mumbai, zone by zone</h2>
  <p>
    ICSE families are spread across the suburbs as well as the island city. We plan around how a tutor travels to you:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/mumbai/zone/worli-dadar-central-mumbai') }}">Worli, Dadar and Central Mumbai</a>.</strong> {!! $icxA('matunga', 'Matunga') !!} is served by stations on all three suburban lines, so tutors arrive from almost anywhere without changing trains. Popular weekday evening slots fill early.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/andheri-jogeshwari') }}">Andheri and Jogeshwari</a>.</strong> {!! $icxA('andheri-east', 'Andheri East') !!} is reached on Line 1 or on Line 3 at Marol Naka and SEEPZ; road traffic peaks as offices open and close.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/kandivali-borivali-dahisar') }}">Kandivali, Borivali and Dahisar</a>.</strong> {!! $icxA('borivali-west', 'Borivali West') !!} sits by a Western line terminus with many services, plus Line 2A on New Link Road.</li>
    <li><strong>Bhandup and Mulund.</strong> {!! $icxA('mulund', 'Mulund') !!} is on the Central line, so tutors from Thane or Ghatkopar can arrive by train in minutes.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/thane') }}">Thane</a>.</strong> In {!! $icxA('thane-east', 'Thane East') !!}, homes around Kopri are a walk from Thane station, which also starts the Trans-Harbour trains.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/navi-mumbai') }}">Navi Mumbai</a>.</strong> {!! $icxA('nerul', 'Nerul') !!} is on the Harbour line and ends the Trans-Harbour route from Thane, which helps families draw tutors from both directions.</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/mumbai-central-suburbs-tuition-guide') }}">central suburbs tuition guide</a> and
    <a href="{{ url('/blog/south-and-central-mumbai-tuition-guide') }}">South and Central Mumbai guide</a> go deeper, and
    every locality is listed on the <a href="{{ url('/city/mumbai') }}">Mumbai home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icx-mode">Home or online for ICSE maths</h2>
  <p>
    ICSE maths is one of the subjects where a home tutor earns their keep, because the method is the mark and a tutor
    at the table corrects layout the moment it slips. Online works if the notebook is filmed from above and the student
    writes every step before speaking. For Class 10 many families settle on one home session and one online, switching
    both online in heavy-rain weeks so the pre-board run-up is not interrupted.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icx-demo">A checklist for the ICSE maths demo</h2>
  <ol>
    <li>Ask the tutor to solve a shares-and-dividends question aloud. They should handle face value, market value and dividend without hesitation.</li>
    <li>Watch whether they correct the layout of your child's working, not only the answer.</li>
    <li>Ask how they practise the Section B choice in mock papers.</li>
    <li>Check that they follow your school's chapter order rather than their own.</li>
    <li>For Class 10, ask for a week-by-week plan up to the pre-boards, including internal assessment work.</li>
    <li>For ISC, ask whether they teach the syllabus for your child's exam year, with no Section B or C choice from 2027.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icx-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Classes 6 to 8 usually sit lower in that range, and Class 10 board preparation and ISC higher, with travel and
    weekly sessions also counting. Each tutor's fee is visible before the demo; see the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">home tuition fees in Mumbai</a>.
  </p>
  <p>
    Tell us the class, the chapters causing trouble, your station or locality and your slots. We shortlist two or three
    matched ICSE maths tutors, you pick one for a <a href="{{ url('/demo-class') }}">free demo class</a>, and switching
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. You can also
    browse <a href="{{ url('/tutors') }}">tutor profiles</a> or see the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page for a cross-board view.
  </p>
  </section>

  </div>
</article>
