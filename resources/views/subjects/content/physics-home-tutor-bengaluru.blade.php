{{--
  Long-form guide for the "physics home tutor Bengaluru" page (Classes 11 and
  12, JEE and NEET, ISC/IB/IGCSE, with Karnataka PUC and KCET named in general
  terms only). Byline in config: NXTutors Academic Team. Local facts come only
  from database/seo-content/areas/bengaluru-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-physics-strategies (70 + 30, 33
  questions in sections A to E, blocks 33/18/12/7, recall share, practical
  scheme and record requirements, no calculators, transistors and logic gates
  out), jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern,
  JEE Advanced 2026 eligibility), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern) and -ib-physics-slhl-iaee (new guide first assessed
  May 2025, teaching hours, five themes, two papers 80%, investigation 20%).
  No state-board or KCET exam pattern. Pink and Blue Lines only as under
  construction. No school, society, mall or people's names, no distances or
  travel times, only the allowed fee sentence.

  Area links render only when that Bengaluru area page exists and is active.
--}}
@php
  $blAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $blA = function (string $slug, string $label) use ($blAreaSlugs) {
      return in_array($slug, $blAreaSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide blp-guide" aria-labelledby="blpGuideTitle">
  <h2 id="blpGuideTitle">Physics home tutor in Bengaluru: find where the marks leak, then plan around coaching and the commute</h2>

  <p class="nx-guide__lede">
    A Class 11 or 12 student in Bengaluru may be preparing for a CBSE, ISC or second PUC board paper, an IB or IGCSE
    course, and JEE, NEET or the state's own entrance test, often all at once. Each rewards a different kind of
    practice, and each has to fit into evenings already shared between school, coaching and the ride home.
    NXTutors sends you two or three physics tutors who teach your child's target and can reach your neighbourhood at
    the hour that is actually free. Fees are listed before you meet, and the first session is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#blp-leak">Where marks leak</a> ·
    <a href="#blp-paper">The CBSE paper</a> ·
    <a href="#blp-lab">Practical marks</a> ·
    <a href="#blp-entrance">JEE and NEET</a> ·
    <a href="#blp-state">PUC and KCET</a> ·
    <a href="#blp-intl">IB, ISC, IGCSE</a> ·
    <a href="#blp-evenings">Evenings by neighbourhood</a> ·
    <a href="#blp-eleven">Starting in Class 11</a> ·
    <a href="#blp-fees">Fees</a> ·
    <a href="#blp-book">Booking</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="blp-leak">Where is your child actually losing physics marks?</h2>
  <p>
    Before choosing a tutor, look at the last two marked test papers. Lost physics marks usually fall into one of four
    patterns, and each points to a different kind of help:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Four common ways senior students lose physics marks, and what a tutor should do about each</caption>
    <thead>
      <tr><th scope="col">What you see on the paper</th><th scope="col">Likely cause</th><th scope="col">What the tutor should do</th></tr>
    </thead>
    <tbody>
      <tr><td>Right idea, wrong final number</td><td>Units dropped, powers of ten slipping</td><td>Insist on units in every line of substitution</td></tr>
      <tr><td>Blank or half-done numericals</td><td>No picture of the situation</td><td>Start each problem with a free-body, ray or circuit diagram</td></tr>
      <tr><td>Derivations started but not finished</td><td>Steps memorised without the reasoning</td><td>Rebuild each derivation from its diagram and first law</td></tr>
      <tr><td>Good in class, weak in timed tests</td><td>Too little practice under the clock</td><td>Short timed sets every week, reviewed honestly</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A tutor who reads those papers at the free demo and names the pattern before teaching is worth a second look.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blp-paper">What does the CBSE Class 12 physics paper look like in 2026-27?</h2>
  <p>
    The theory paper is 70 marks over three hours, with 33 compulsory questions and no calculator; physical
    constants are given. The design matches last session's.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 physics theory, 2026-27: the five sections</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Questions</th><th scope="col">Marks each</th><th scope="col">Section total</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>16: 12 multiple-choice, 4 assertion–reason</td><td>1</td><td>16</td></tr>
      <tr><td>B</td><td>5 short answers</td><td>2</td><td>10</td></tr>
      <tr><td>C</td><td>7 short answers</td><td>3</td><td>21</td></tr>
      <tr><td>D</td><td>2 case studies</td><td>4</td><td>8</td></tr>
      <tr><td>E</td><td>3 long answers</td><td>5</td><td>15</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The fourteen NCERT chapters sit in four blocks. Electrostatics, current, magnetism, induction and alternating
    current make up 33 marks, almost half. The largest single block is optics together with electromagnetic
    waves, 18 marks. Modern physics (dual nature of radiation, atoms, nuclei) adds 12, and semiconductor
    electronics 7. Transistors and logic gates have left
    the syllabus. Only about 38% of the paper rewards plain recall, so practice has to go beyond reading notes. There
    is one main Class 12 board exam; the 2027 date sheet is awaited on cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> post lists the
    recurring derivations, and the <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics tutor</a> page
    plans the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blp-lab">How much of the practical exam can be prepared at home?</h2>
  <p>
    More than families expect. The 30 practical marks break down as two experiments at 7 each, one from each
    section; the record at 5; an activity at 3; the investigatory project at 3; and a viva at 5. The record needs at
    least eight experiments (four per section), at least six activities (three per section) and the project report.
  </p>
  <p>
    The apparatus stays in school, but a tutor at home can check that every write-up has its aim, diagram and
    observation table in order, go over errors and precautions, and run a mock viva. Good viva questions ask why:
    why repeat a reading, what a graph's slope means, what would change with a thicker wire.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blp-entrance">How should tuition change for JEE or NEET physics?</h2>
  <p>
    In JEE Main 2026, Paper 1 had 75 questions and physics accounted for 25: 20 multiple-choice and 5
    numerical-value, each correct answer +4 and each wrong one −1. JEE Advanced in 2026 was open only to the leading
    2,50,000 JEE Main candidates, and its problems join several ideas in one question. NEET (UG) 2026 was a pen-and-paper
    test with 45 physics questions out of 180, worth 180 of the 720 marks, marked the same way.
  </p>
  <p>
    For JEE, sessions should build speed on multi-step problems and include an honest review of every mock test. For
    NEET, the gain is in accuracy on NCERT concepts and in skipping risky guesses. Entrance syllabi come from the
    conducting body, not the board, and can keep topics the board has dropped, so check the bulletin on nta.ac.in first.
    Useful reading: the <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics topic-wise guide</a>,
    <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics chapters</a>, and
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching or a home tutor for JEE</a>.
    The <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> page explains how we match for it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blp-state">What about second PUC physics and KCET?</h2>
  <p>
    On the Karnataka state board, Classes 11 and 12 are the first and second years of the Pre-University Course, and
    the second PUC examination is conducted by the Karnataka School Examination and Assessment Board
    (kseab.karnataka.gov.in). Admission to many engineering and other professional courses in the state also uses the
    Karnataka Common Entrance Test, run by the Karnataka Examinations Authority. We do not describe either paper
    here; read the current notices from each body. When you ask for a tutor, say "second PUC" or "KCET" plainly, and
    ask each candidate which of these they have taught recently.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blp-intl">What should IB, ISC and IGCSE families check?</h2>
  <ul>
    <li><strong>IB Diploma.</strong> The current physics course was examined for the first time in May 2025. Its content sits in five lettered themes, and the earlier option topics and Paper 3 no longer exist. Recommended teaching time is 150 hours for SL, 240 for HL. Written exams account for four-fifths of the grade; the remaining fifth is an individual scientific investigation, which a tutor may discuss but never draft. See the <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL guide</a>.</li>
    <li><strong>ISC.</strong> CISCE combines theory, practical and project work, and expects fuller written answers than a one-line reply. Confirm the tutor knows your exam year's syllabus.</li>
    <li><strong>Cambridge IGCSE.</strong> Taken at Core or Extended level. After IGCSE, a student joining Class 11 on a different board often has to catch up on derivations, vector diagrams and reading graphs.</li>
  </ul>
  <p>
    These specialists are fewer than CBSE tutors, so name the course in your first message. If no one can reach you,
    pair an online specialist with a nearby tutor who checks written work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blp-evenings">Will a late-evening physics class hold in your part of Bengaluru?</h2>
  <p>
    Senior students often get home after coaching, so physics tuition tends to start late, and the route decides
    whether a tutor can keep that hour. Six neighbourhoods show the range; tutors across the city are on our
    <a href="{{ url('/city/bengaluru') }}">Bengaluru page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>The Outer Ring Road belt</h3>
      <p>
        {!! $blA('bellandur', 'Bellandur') !!} is mostly gated apartment communities, so share the tower and flat
        number with security. No metro runs here yet; the Blue Line along the Outer Ring Road is under construction,
        and tutors come by road from HSR Layout, Sarjapur Road or Marathahalli, ideally after the evening peak.
        {!! $blA('marathahalli', 'Marathahalli') !!} sits where the Outer Ring Road meets Old Airport Road. Its Blue
        Line station is also under construction, so a tutor living on your side of the Ring Road is the practical
        choice for weekday classes.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>South: two metro neighbourhoods</h3>
      <p>
        {!! $blA('jp-nagar', 'JP Nagar') !!} is spread over many phases, so give the exact phase and cross road when
        booking. Its Green Line station has been open since June 2017; houses are doorstep
        visits and apartment complexes need gate entry. {!! $blA('btm-layout', 'BTM Layout') !!} gained BTM Layout
        and Central Silk Board stations on the Yellow Line in August 2025, so a tutor can arrive by metro and finish
        on foot or by auto, ideally outside office rush.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>North and south-west</h3>
      <p>
        {!! $blA('hebbal', 'Hebbal') !!} has no metro yet; its Blue Line station is under construction. The flyover
        and Bellary Road carry airport and office traffic, so a tutor on your side of the flyover is steadier for
        weekday evenings. {!! $blA('rr-nagar', 'RR Nagar') !!} has had its own Purple Line station since August 2021,
        giving tutors from Vijayanagar or Kengeri a direct ride; families in gated complexes should put the tutor on
        the visitor list, and a slightly later evening start avoids Mysore Road office traffic.
      </p>
    </div>
  </div>
  <p>
    When coaching finishes very late, moving that one evening online, with the tutor you already have, protects
    the weekly plan and spares everyone a night-time journey.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blp-eleven">Why is Class 11 the right time to start?</h2>
  <p>
    Starting early is usually cheaper than rescuing later. The Class 11 book runs from units and kinematics through
    Newton's laws, energy, rotational motion and gravitation, and it quietly assumes a student can resolve a vector,
    read a slope and interpret the area under a curve, occasionally before the maths class has taught these. Class
    12 electricity and magnetism lean on exactly the same skills. Secure them in the first term and the board year
    becomes revision instead of rescue. Our
    <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics</a> page walks through that year,
    families choosing a stream can read the <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11
    stream choice guide</a>, and the <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page covers matching in
    other cities.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blp-fees">How much does physics tuition in Bengaluru cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Rates are the tutor's own
    choice and usually rise with the exam being targeted and the tutor's years with it; the evening trip to your
    neighbourhood and the weekly number of sessions matter too. Online lessons with the same tutor can cost less. You see all
    fees before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blp-book">What do we need from you to arrange a physics demo?</h2>
  <p>
    Tell us the class and board, whether the goal is the board paper, JEE, NEET or KCET, your neighbourhood with its
    phase, stage, block or sector, and which evenings remain after school and coaching. You receive a shortlist of two or three
    physics tutors with fees attached and choose one for the free demo. A poor fit simply means a demo with the next
    tutor, and changing tutor later costs nothing. If nobody who fits can come at that time, we propose online lessons or a
    blend of the two. Our office is in Sector 66, Gurugram, and online classes run anywhere in India.
  </p>
  <p>
    Physics teachers based in Bengaluru can see open student requests on the
    <a href="{{ url('/tuition-jobs/bengaluru') }}">Bengaluru tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
