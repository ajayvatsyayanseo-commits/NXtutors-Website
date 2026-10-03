{{--
  Long-form guide for the "physics home tutor Agartala" page (Classes 11 and
  12; TBSE Higher Secondary, CBSE, ISC/IB/IGCSE in brief; JEE and NEET).
  Byline in config: NXTutors Academic Team. Page writer, capitals wave 2
  (subjects), 3 Oct 2026.

  Local facts only from database/seo-content/areas/agartala-research.json.
  Tripura board facts only from tbse.tripura.gov.in (read 3 Oct 2026):
  - https://tbse.tripura.gov.in/sites/default/files/PHYSICS_0.pdf : Class XII
    Physics syllabus 2024-25: theory 70 marks, 3 hours, practical 30; unit
    blocks: electrostatics and current electricity 16; magnetic effects of
    current and magnetism, electromagnetic induction and alternating current
    17; electromagnetic waves and optics 18; dual nature of radiation and
    matter, atoms and nuclei 12; semiconductor electronics 7.
  - https://tbse.tripura.gov.in/sites/default/files/Annual%20Calender%202026-2027_pdf_compressed.pdf :
    H.S. (+2 Stage) calendar 2026-27: practical examination 17.11.2026 to
    05.12.2026; Class XI enrolment through schools (Aug 2026).
  - https://tbse.tripura.gov.in/sites/default/files/TBSE_Notification_Syllabus_18_08_2026_20260818_0001.pdf :
    2025-26 syllabi remain in force for 2026-27.
  - https://tbse.tripura.gov.in/model-question-paper : Class XII model
    question papers, physics among them.
  CBSE / JEE / NEET / IB facts reuse the checked statements in
  database/seo-content/blog (cbse-class-12-physics-strategies: 70 + 30, 33
  compulsory questions, no calculators; jee-preparation-gurgaon-coaching-or-
  home-tutor: JEE Main 2026 pattern, JEE Advanced 2026 eligibility;
  neet-preparation-gurgaon-coaching-or-home-tutor: NEET UG 2026 pattern;
  -ib-physics-slhl-iaee) as already stated on the Patna and Raipur physics
  pages. No coaching institute, school, college, society or people's names,
  no distances or travel times, only the allowed fee sentence.
  Area links render only when that Agartala area page exists and is active.
--}}
@php
  $agpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $agpA = function (string $slug, string $label) use ($agpSlugs) {
      return in_array($slug, $agpSlugs, true)
          ? '<a href="' . e(url('/city/agartala/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide agp-guide" aria-labelledby="agpGuideTitle">
  <h2 id="agpGuideTitle">Physics home tutor in Agartala: Higher Secondary and CBSE physics, with JEE or NEET alongside</h2>

  <p class="nx-guide__lede">
    Physics is the subject where many good Class 10 students first find themselves stuck. The jump to Class 11 brings
    calculus-based ideas, vectors and long multi-step problems, and the Class 12 year adds a practical exam and, for
    many, an entrance test. Whether your child sits the Tripura board's Higher Secondary (+2 Stage) examination or
    CBSE's Class 12 paper in Agartala, NXTutors sends two or three physics tutors matched to the board, the target and
    your locality, with each fee shown before a free demo class.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#agp-gap">Class 10 to 11</a> ·
    <a href="#agp-tbse">TBSE Class XII</a> ·
    <a href="#agp-exams">Board, JEE, NEET</a> ·
    <a href="#agp-practical">Practicals</a> ·
    <a href="#agp-intl">ISC, IB, IGCSE</a> ·
    <a href="#agp-session">A physics session</a> ·
    <a href="#agp-year">The year</a> ·
    <a href="#agp-mode">Home or online</a> ·
    <a href="#agp-places">Localities</a> ·
    <a href="#agp-fees">Fees</a> ·
    <a href="#agp-ask">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="agp-gap">Why does Class 11 physics feel so much harder?</h2>
  <p>
    Three things change at once. The maths gets heavier, with vectors, graphs and rates of change appearing in the
    first chapters. The problems get longer, so a single slip early in the working ruins the final answer. And the
    pace speeds up, because Class 11 builds the base for both the Class 12 board paper and any entrance exam. A home
    tutor's first job is to find which of the three is hurting your child:
  </p>
  <ul>
    <li><strong>A maths gap</strong> shows as correct physics reasoning with wrong algebra. The fix is a few weeks of targeted maths alongside physics; our <a href="{{ url('/maths-home-tutor-agartala') }}">maths tutors in Agartala</a> can help.</li>
    <li><strong>A concept gap</strong> shows as formulas used in the wrong situation. The fix is slower teaching with diagrams and simple cases first.</li>
    <li><strong>A pace gap</strong> shows as unfinished homework and skipped chapters. The fix is a plan that catches up one chapter at a time.</li>
  </ul>
  <p>
    The national <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics tutor</a> page goes further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agp-tbse">How is Higher Secondary physics weighted on the Tripura board?</h2>
  <p>
    The Tripura Board of Secondary Education's Class XII physics syllabus sets a three-hour theory paper of 70 marks
    and a practical examination of 30. The board has kept the 2025-26 syllabi in force for 2026-27, and it posts Class
    XII model question papers on <a href="https://tbse.tripura.gov.in/model-question-paper" rel="noopener">its website</a>;
    those are the first practice material a tutor should use.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Unit blocks in TBSE Class XII physics, their theory marks, and the skill each block tests most</caption>
    <thead>
      <tr><th scope="col">Unit block</th><th scope="col">Marks</th><th scope="col">Skill tested most</th></tr>
    </thead>
    <tbody>
      <tr><td>Electrostatics; current electricity</td><td>16</td><td>Field and potential reasoning; circuit analysis with the loop and junction rules</td></tr>
      <tr><td>Magnetic effects of current and magnetism; electromagnetic induction and alternating current</td><td>17</td><td>Direction rules, flux arguments and AC phasor ideas</td></tr>
      <tr><td>Electromagnetic waves; optics</td><td>18</td><td>Ray diagrams drawn to convention; interference and diffraction explained in words</td></tr>
      <tr><td>Dual nature of radiation and matter; atoms and nuclei</td><td>12</td><td>Short derivations and exact definitions</td></tr>
      <tr><td>Semiconductor electronics</td><td>7</td><td>Device behaviour and labelled circuit sketches</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Optics and the electricity-and-magnetism blocks together carry more than two-thirds of the theory marks, so a
    sensible year front-loads them. Our <a href="{{ url('/tripura-board-tutor-agartala') }}">Tripura Board tutor
    page</a> covers the Higher Secondary year across subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agp-exams">Board, JEE Main or NEET: how does physics count?</h2>
  <p>
    The chapters overlap, but each exam scores physics differently. Agree the main target with the tutor in the first
    week, because it decides what gets practised.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Physics in the Class 12 board papers and the two national entrance tests, compared</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">TBSE or CBSE Class 12</th><th scope="col">JEE Main (2026 pattern)</th><th scope="col">NEET UG (2026 pattern)</th></tr>
    </thead>
    <tbody>
      <tr><td>Weight</td><td>70 theory and 30 practical on both boards</td><td>25 of 75 questions in Paper 1</td><td>45 of 180 questions, 180 of 720 marks</td></tr>
      <tr><td>Answers</td><td>Written, with derivations and diagrams</td><td>20 multiple-choice, 5 numerical</td><td>Multiple-choice on paper</td></tr>
      <tr><td>Scoring</td><td>Step marks for working</td><td>+4 right, −1 wrong</td><td>+4 right, −1 wrong</td></tr>
      <tr><td>Practise for</td><td>Complete answers and neat diagrams</td><td>Speed on long problems</td><td>Precision at NCERT level</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The CBSE Class 12 physics paper has 33 compulsory questions and no calculator is allowed. JEE Advanced sits above
    JEE Main; for 2026, the leading 2,50,000 JEE Main candidates were eligible. Confirm current patterns on the NTA
    and jeeadv.ac.in websites. Our guides cover <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12
    physics strategies</a>, <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics topic by topic</a> and
    <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics</a>; the
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> and
    <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a> pages explain matching.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agp-practical">Do not leave the 30 practical marks to chance</h2>
  <p>
    On both TBSE and CBSE, 30 of the 100 physics marks sit outside the theory paper. For Higher Secondary students
    the board's 2026-27 calendar places the practical examination in late November and early December 2026, well
    before the theory exams. A tutor cannot replace the school laboratory, but can make sure your child:
  </p>
  <ul>
    <li>understands the aim, the formula and the sources of error for each listed experiment;</li>
    <li>keeps the practical record complete and up to date through the year, not in the last week;</li>
    <li>can answer viva questions in plain words, without reciting the procedure.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agp-intl">ISC, IB and IGCSE physics</h2>
  <p>
    A smaller number of Agartala students follow ISC or an international course. IB physics is taught at SL or HL
    across five themes, with external papers worth 80% and an internal investigation worth 20%. IGCSE physics has
    tiered entry, so settle the tier with the school. Specialist tutors for these are few locally, which is where an
    <a href="{{ url('/online-tutor-agartala') }}">online tutor</a> often makes sense.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agp-session">What should a physics session look like?</h2>
  <ol>
    <li><strong>One idea, explained with a diagram.</strong> Not a lecture of the whole chapter.</li>
    <li><strong>Worked examples that rise in difficulty.</strong> The tutor solves the first, the student solves the rest aloud.</li>
    <li><strong>A board-style answer.</strong> One derivation or long answer written out in full and marked.</li>
    <li><strong>An error log.</strong> Every wrong answer noted with its cause: concept, algebra, units or misreading.</li>
  </ol>
  <p>
    For a student in a coaching batch, the tutor's hour should go on the problems left unsolved from the batch sheet
    and on board writing, not on repeating the same lecture. The
    <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics tutor</a> page has more on that balance.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agp-year">A Class 12 physics year, term by term</h2>
  <p>
    The exact dates come from the school and the board, but the shape of a good year is much the same for TBSE and
    CBSE students in Agartala:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A term-by-term plan for Class 12 physics with a home tutor</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Main work</th><th scope="col">Check at the end</th></tr>
    </thead>
    <tbody>
      <tr><td>Start of session to the half-yearly</td><td>Electrostatics, current electricity and magnetism, with derivations written out</td><td>A full unit test marked to the board's scheme</td></tr>
      <tr><td>After the half-yearly</td><td>Induction, AC, waves and optics; practical record brought up to date</td><td>Viva practice on every listed experiment</td></tr>
      <tr><td>Leading up to the pre-board</td><td>Modern physics and semiconductor electronics; first full papers</td><td>Two timed papers with an error review</td></tr>
      <tr><td>Pre-board to the board exam</td><td>Mixed revision built from model papers</td><td>One timed paper a week and a list of formulas to recall cold</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Students preparing for JEE or NEET run an entrance track beside this one, usually with one extra session a week.
    If coaching takes the afternoons, the tutor's sessions can move to weekends or, for short revision blocks, online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agp-mode">Home or online for physics?</h2>
  <p>
    Physics depends on diagrams and step-by-step working, so the first months with a new tutor usually go better at
    home, where the tutor can watch each line being written. Once the tutor knows the student, online sessions work
    well for problem practice, revision and doubt-clearing before tests. A mix is common: home lessons on weekdays
    and an online session at the weekend, or online on monsoon days when heavy rain makes travel slow. The
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article weighs it up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agp-places">Physics tuition in five Agartala localities</h2>
  <p>
    Most tutors come by two-wheeler, auto or city bus, and the flyover that runs from Police Lines in the south to Fire
    Brigade Chowmuhani in the centre makes crossing between those parts of the city easier. A tutor in your own
    municipal zone is usually the simplest to keep on a weekly slot.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five Agartala localities for physics home tuition, with the arrival detail to share before the demo</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Zone</th><th scope="col">Share before the demo</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $agpA('kunjaban', 'Kunjaban') !!}</td><td>North</td><td>A house on a lane or a flat with a gate, plus a landmark on the hill road</td></tr>
      <tr><td>{!! $agpA('abhoynagar', 'Abhoynagar') !!}</td><td>North</td><td>A lane landmark and phone number; agree a slot that can shift on festival days</td></tr>
      <tr><td>{!! $agpA('melarmath', 'Melarmath') !!}</td><td>Central</td><td>The house or building name; whether a two-wheeler can park at the door</td></tr>
      <tr><td>{!! $agpA('shibnagar', 'Shibnagar') !!}</td><td>East</td><td>Which of the two Shibnagar wards you are in</td></tr>
      <tr><td>{!! $agpA('pratapgarh', 'Pratapgarh') !!}</td><td>South</td><td>Town, Paschim or Purba Pratapgarh, as the three parts are spread out</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    All localities are on the <a href="{{ url('/city/agartala') }}">Agartala page</a>, with zone guides for
    <a href="{{ url('/city/agartala/zone/north-agartala') }}">North</a>,
    <a href="{{ url('/city/agartala/zone/central-agartala') }}">Central</a>,
    <a href="{{ url('/city/agartala/zone/east-agartala') }}">East</a> and
    <a href="{{ url('/city/agartala/zone/south-agartala') }}">South Agartala</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agp-fees">Physics tuition fees in Agartala</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fee and you see it before the demo. The <a href="{{ url('/blog/home-tuition-fees-agartala') }}">Agartala fees
    guide</a> and the <a href="{{ url('/pricing-guide') }}">pricing guide</a> list the questions worth asking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agp-ask">What to send when you ask for a physics tutor</h2>
  <p>
    Send the class, the board (TBSE, CBSE, ISC, IB or IGCSE), the target (board marks, JEE or NEET), any coaching
    timings, your locality with a landmark and the days that suit. We reply with two or three matched tutors and their
    fees, and you choose one for a <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through
    an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; browse <a href="{{ url('/tutors') }}">tutor
    profiles</a> too. For chemistry alongside, see <a href="{{ url('/chemistry-home-tutor-agartala') }}">chemistry
    home tutors in Agartala</a>; the national <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page
    and the <a href="{{ url('/blog/agartala-home-tuition-guide') }}">Agartala home tuition guide</a> give the wider
    picture. Physics teachers in the city can find students on
    <a href="{{ url('/tuition-jobs/agartala') }}">Agartala tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
