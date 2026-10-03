{{--
  Long-form guide for the "ICSE maths tutor Faridabad" page. Authors:
  Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths) and Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths, for the ISC section). No anecdotes, years or
  results are claimed for either. No schools, societies or other people are
  named.

  CISCE facts are reworded from icse-maths-tutor-mumbai / icse-maths-tutor-
  gurgaon and icse-home-tutor-faridabad, which cite (cisce.org): ICSE
  Mathematics (51), Year 2027 syllabus, one 3-hour paper of 80 marks plus 20
  internal assessment (assignments assessed by the subject teacher and an
  external examiner); Class 10 units (commercial mathematics: GST, banking /
  recurring deposits, shares and dividends; algebra incl. linear inequations,
  quadratics, ratio and proportion, factor and remainder theorems, matrices,
  AP and GP; coordinate geometry incl. reflection, section and mid-point
  formulae, equation of a line; geometry incl. similarity, loci, circles,
  constructions; mensuration; trigonometry incl. identities, heights and
  distances; statistics and probability); ICSE 2026 Mathematics specimen paper
  (Section A compulsory, 40 marks, incl. multiple-choice items; Section B any
  four questions, 40 marks; essential working required; rough work on the same
  sheet); no single prescribed textbook (schools choose books from publishers
  following the CISCE syllabus); ISC Mathematics (860) Year 2027: Paper I
  theory 3 h 80 marks, Paper II project 20 marks; from the 2027 exam seven
  compulsory units and no Section B/C choice; ISC Applied Mathematics a
  separate subject; ISC: no change of subject after 15 September of Class XI.
  No other dates.

  Board mix only as the Faridabad hub view states it (most students CBSE; ICSE
  and ISC have a loyal following; HBSE conducts Haryana's Class 10 and 12
  exams). No claim about where ICSE families live. Local detail only from
  database/seo-content/areas/faridabad-research.json, faridabad-zone-guides.json
  and zones/faridabad.json (Sector 12 sports complex and town park, Bata Chowk,
  apartments may need gate registration; Jawahar Colony near the railway line,
  doorstep, two-wheeler, evening crossing; Sector 29 flats in gated societies,
  Sector 28 station, bus stop at the 28/29 chowk; Sector 48 older blocks near
  the Gurugram–Faridabad road, auto from Old Faridabad or Badkhal Mor; Sector 4
  plotted Ballabhgarh sector, railway station and Sihi / Raja Nahar Singh;
  Sector 85 builder apartments and affordable societies, Old Faridabad or
  Neelam Chowk Ajronda then auto). Area links render only for active
  Faridabad areas. Fee wording is the approved sentence.
  FAQs: faqs/icse-maths-tutor-faridabad.php.
--}}
@php
  $fcmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $fcmA = function (string $slug, string $label) use ($fcmSlugs) {
      return in_array($slug, $fcmSlugs, true)
          ? '<a href="' . e(url('/city/faridabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="fcmGuideTitle">
  <h2 id="fcmGuideTitle">ICSE maths tutor in Faridabad: a CISCE paper needs a CISCE-minded tutor</h2>

  <p class="nx-guide__lede">
    In Faridabad, ICSE and ISC have a loyal following even though CBSE is the larger board, and maths is the subject
    where the difference between the boards shows most. The ICSE paper examines topics the other boards leave out,
    marks the written method closely and lets students choose only part of the paper. A tutor used mostly to CBSE or
    Haryana board students can teach the ideas well and still miss the marks that ICSE examiners look for. This page
    is by Abhinandan Tiwary, who teaches Class 10 CBSE and ICSE maths on NXTutors, with the ISC section from Ajay
    Vatsyayan, who teaches IB, IGCSE and ISC maths. It covers the extra syllabus, the paper, the writing habits that
    keep marks, a Class 10 plan, ISC maths and how tutors reach different parts of the city. See also the
    <a href="{{ url('/icse-home-tutor-faridabad') }}">ICSE and ISC tutors in Faridabad</a> hub and
    <a href="{{ url('/maths-home-tutor-faridabad') }}">maths home tutors in Faridabad</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#fcm-differ">How ICSE maths differs</a> ·
    <a href="#fcm-early">Classes 6 to 9</a> ·
    <a href="#fcm-units">Class 10 units</a> ·
    <a href="#fcm-paper">The board paper</a> ·
    <a href="#fcm-layout">Setting out</a> ·
    <a href="#fcm-plan">A Class 10 plan</a> ·
    <a href="#fcm-switch">Changing boards</a> ·
    <a href="#fcm-isc">ISC maths</a> ·
    <a href="#fcm-reach">Reaching you</a> ·
    <a href="#fcm-demo">The demo</a> ·
    <a href="#fcm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="fcm-differ">Why ICSE maths is not the same subject as CBSE or HBSE maths</h2>
  <p>
    Quadratics, circles, trigonometry and statistics appear on every board. What changes on ICSE is everything around
    them:
  </p>
  <ul>
    <li><strong>Topics only ICSE students meet.</strong> GST, recurring deposit accounts, shares and dividends, matrices, loci and reflection in the axes are all on the ICSE Class 10 paper. A tutor who has never taught them is learning alongside your child.</li>
    <li><strong>No single textbook.</strong> CISCE publishes the syllabus and schools choose books from publishers that follow it, so two ICSE students in neighbouring sectors may use different books for the same chapter. The syllabus, not the book, is the reference.</li>
    <li><strong>Working is marked.</strong> CISCE papers state that omitting essential working loses marks, and examiners award marks for steps.</li>
  </ul>
  <p>
    For that reason we look for tutors who teach ICSE regularly, not general maths tutors happy to try it. The
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">guide to choosing a board and stream</a> compares the
    boards more widely.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fcm-early">Classes 6 to 9: what a tutor should be building</h2>
  <p>
    Middle-school ICSE maths (fractions, ratio and percentage, simple and compound interest, early algebra, basic
    geometry and mensuration, data handling) looks familiar, and a weekly session that checks written work is usually
    enough. The point of those years is habit: fast, accurate percentages, which later carry GST and shares; brackets
    and signs handled without fear; and geometry written with a reason beside each line.
  </p>
  <p>
    Class 9 is the step up. Compound interest, expansions and factorisation, simultaneous equations, indices and
    logarithms, congruency, the mid-point theorem, Pythagoras, circles and the first trigonometry and coordinate
    geometry arrive together. Logarithms and geometry proofs are where students usually stall, and Class 10 has no
    spare weeks to fix them, so Class 9 is the sensible year to start a tutor if your child is wobbling. Our
    <a href="{{ url('/maths-home-tutor/class-9') }}">Class 9 maths</a> page covers that year across boards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fcm-units">The Class 10 syllabus unit by unit</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE Class 10 Mathematics: units and the mistake a tutor watches for</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Main content</th><th scope="col">Common mistake</th></tr>
    </thead>
    <tbody>
      <tr><td>Commercial mathematics</td><td>GST, recurring deposits, shares and dividends</td><td>Using market value where face value is needed for dividend</td></tr>
      <tr><td>Algebra</td><td>Linear inequations, quadratics, ratio and proportion, factor and remainder theorems, matrices, AP and GP</td><td>Solution set not written on the number line; matrix product taken in the wrong order</td></tr>
      <tr><td>Coordinate geometry</td><td>Reflection, section and mid-point formulae, equation of a line</td><td>Image found in the wrong axis or origin</td></tr>
      <tr><td>Geometry</td><td>Similarity, loci, circles, constructions</td><td>Statements written without reasons; construction arcs rubbed out</td></tr>
      <tr><td>Mensuration</td><td>Cylinders, cones, spheres and combined solids, including recasting</td><td>Diameter used as radius; units lost on the last line</td></tr>
      <tr><td>Trigonometry</td><td>Identities, heights and distances</td><td>Proofs that skip steps; diagrams not labelled</td></tr>
      <tr><td>Statistics and probability</td><td>Mean, median, mode, histograms, ogives, simple probability</td><td>Median and quartiles read carelessly from the ogive</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Commercial mathematics repays an early start: once the formats are familiar, its questions become some of the
    most reliable marks on the paper. Our <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10
    maths board guide</a> works through the chapters in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fcm-paper">How the ICSE maths paper is marked</h2>
  <p>
    The written paper is three hours and 80 marks, and internal assessment adds 20, from at least two assignments
    assessed by the subject teacher and an external examiner. On the CISCE specimen paper for 2026, Section A is
    compulsory and worth 40 marks, with short questions, including multiple choice, drawn from across the syllabus.
    Section B is also worth 40 marks, and the student chooses four of the longer questions.
  </p>
  <p>
    Two lessons follow. First, no chapter can be skipped, because Section A samples them all. Second, the choice in
    Section B is a skill: in timed practice the student should read every Section B question, decide on four within a
    few minutes and stick to them. A tutor running mock papers should time that decision as well as the answers. ICSE
    past papers and the specimen paper are the core material; CBSE or Haryana board papers help with a few shared
    topics but not with the ICSE style.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fcm-layout">Setting out answers the way ICSE examiners mark them</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>One step per line</h3>
  <p>Formula, then substitution, then the result. If the arithmetic goes wrong, the method marks survive.</p>
    </div>
    <div class="nx-guide__card">
  <h3>Reasons in geometry</h3>
  <p>Each statement carries its reason, such as "angles in the same segment". A right angle with no reason can still cost the mark.</p>
    </div>
    <div class="nx-guide__card">
  <h3>Rough work in view</h3>
  <p>CISCE wants rough work on the same sheet as the answer, not on separate paper; examiners can see it.</p>
    </div>
    <div class="nx-guide__card">
  <h3>Finish in words</h3>
  <p>Word problems end with a sentence and units. It is a small habit that saves marks across a whole paper.</p>
    </div>
  </div>
  <p>
    Teaching this means reading every line of every answer, every session, and correcting the layout as well as the
    maths. It is slow at first, and it shows in the next school test.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fcm-plan">A Class 10 year, term by term</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Pacing ICSE Class 10 maths tuition</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Opening months</td><td>Commercial mathematics and algebra alongside school; any Class 9 gaps closed</td><td>Two</td></tr>
      <tr><td>Middle of the year</td><td>Coordinate geometry, geometry and mensuration; chapter tests checked for working; internal assignments guided, not written for the student</td><td>Two</td></tr>
      <tr><td>Later months</td><td>Trigonometry and statistics; syllabus completed; first full timed papers</td><td>Two or three</td></tr>
      <tr><td>Pre-boards to the exam</td><td>Full papers with the Section B choice timed; error log reviewed weekly</td><td>Three</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A late starter should secure commercial mathematics and the most predictable Section B topics first, then widen.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fcm-switch">Switching between ICSE, CBSE and the Haryana board</h2>
  <p>
    Faridabad students move between boards for many reasons: a new school after a house move across the canal, a
    change at Class 11, or a family relocating from another city. A student joining ICSE in Class 8 or 9 from CBSE or
    the Haryana board usually needs commercial mathematics, reasoned geometry and fuller setting out. A student
    leaving ICSE for CBSE or the Haryana board finds some chapters vanish but has to adjust to new textbooks and
    question formats. A tutor who knows both sides can list the gaps and close them in a few weeks. Families moving to
    the Haryana board can read our <a href="{{ url('/haryana-board-tutor-faridabad') }}">Haryana board tutors in
    Faridabad</a> page, and those moving to CBSE our <a href="{{ url('/cbse-home-tutor-faridabad') }}">CBSE tutors in
    Faridabad</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fcm-isc">ISC maths in Classes 11 and 12</h2>
  <p>
    Students who stay with CISCE after Class 10 meet a much harder course. The Class 12 assessment is a three-hour,
    80-mark theory paper plus 20 marks of project work. From the 2027 examination, the old choice between Section B
    and Section C has gone: every candidate studies the same seven units, from relations and functions, algebra and
    calculus through vectors, three-dimensional geometry, linear programming and probability. Commerce-minded students
    who want applied content take ISC Applied Mathematics, a separate subject. ISC rules also stop students changing
    subjects after 15 September of Class 11, so a maths decision needs to be firm early in that year.
  </p>
  <p>
    Class 11 is the foundation: functions, limits and early calculus done carelessly there come back in Class 12. Many
    ISC science students also prepare for JEE; our <a href="{{ url('/jee-home-tutor-faridabad') }}">JEE home tutors in
    Faridabad</a> page explains how to combine the two, and the national
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> guide sets out the paper in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fcm-reach">How ICSE maths tutors reach each part of Faridabad</h2>
  <ul>
    <li><strong><a href="{{ url('/city/faridabad/zone/central-sectors-mathura-road') }}">Central sectors</a>:</strong> {!! $fcmA('sector-12', 'Sector 12') !!}, with the state sports complex and the town park, has Bata Chowk station on Mathura Road; apartment residents may need to register the tutor at the gate.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/nit-old-faridabad') }}">NIT and Old Faridabad</a>:</strong> {!! $fcmA('jawahar-colony', 'Jawahar Colony') !!} is close to the railway line; homes open on the lane, and a tutor on a two-wheeler beats the evening crossing more easily than one in a car.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/sectors-28-31-37') }}">Sectors 28 to 31 and 37</a>:</strong> {!! $fcmA('sector-29', 'Sector 29') !!} mixes houses with flats in gated societies; Sector 28 station and the bus stop at the 28/29 chowk are the usual arrival points.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/surajkund-sainik-colony') }}">Surajkund and Sainik Colony</a>:</strong> {!! $fcmA('sector-48', 'Sector 48') !!} is an older area of long-established blocks near the Gurugram–Faridabad road; tutors finish by auto from Old Faridabad or Badkhal Mor.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/ballabhgarh-southern-sectors') }}">Ballabhgarh</a>:</strong> {!! $fcmA('sector-4', 'Sector 4') !!} is a plotted sector by Ballabhgarh railway station, with Sihi and Raja Nahar Singh on the Violet Line close by.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-81-89') }}">Greater Faridabad</a>:</strong> {!! $fcmA('sector-85', 'Sector 85') !!} is mostly builder apartments and gated societies; metro riders come to Old Faridabad or Neelam Chowk Ajronda and take an auto over the canal.</li>
  </ul>
  <p>
    The southern half of Neharpar, <a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-75-80') }}">Sectors
    75 to 80</a>, works the same way. For a home session that suits ICSE's written style, with online sessions on
    evenings the canal or Mathura Road is jammed, see our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home
    or online guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fcm-demo">What to look for in the ICSE maths demo</h2>
  <ol>
    <li><strong>Commercial maths.</strong> Ask the tutor to explain a shares and dividends question. Hesitation here is a warning sign.</li>
    <li><strong>Layout.</strong> Does the tutor correct how your child sets out the answer, or only whether it is right?</li>
    <li><strong>Section B strategy.</strong> Ask how they would train the choice of four questions.</li>
    <li><strong>Internal assessment.</strong> The tutor should guide assignments, never write them.</li>
    <li><strong>The journey.</strong> Which station or road, and what happens on an evening when traffic stops?</li>
  </ol>
  <p>
    We put forward two or three tutors with fees on view before the demo; the first class is free and so is a later
    change of tutor. Each tutor completes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> with us before the profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fcm-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. ICSE Class 10 work usually
    sits below ISC Class 12 work; the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-faridabad') }}">tuition fees in Faridabad</a> explain the factors.
  </p>
  <p>
    Send the class, the school's textbook, what is going wrong, your sector and your free slots, and book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. You can also look through
    <a href="{{ url('/tutors') }}">tutor profiles</a> first.
  </p>
  </section>

  </div>
</article>
