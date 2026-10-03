{{--
  Long-form guide for the "physics home tutor Gandhinagar" page (Classes 11
  and 12: GSEB HSC Science in general terms, CBSE, ISC, IB, IGCSE; JEE and
  NEET). Byline in config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/gandhinagar-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-physics-strategies (70 + 30, 33
  questions in sections A to E, blocks 33/18/12/7, recall share, practical
  scheme and record requirements, no calculators, transistors and logic gates
  out), jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern,
  JEE Advanced 2026 eligibility), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern) and -ib-physics-slhl-iaee (current guide first
  assessed May 2025, teaching hours, five themes, papers 80%, investigation
  20%). GSEB: only what https://www.gseb.org/ and https://www.gsebeservice.com/
  show (read 3 Oct 2026): HSC Science stream at Standard 12, past question
  papers and question-paper design notices for Standard 12 Science,
  question bank for Standards 9 to 12. No GSEB or GUJCET pattern is given.
  No coaching institute, school, college, society or people's names, no
  distances or travel times, only the allowed fee sentence.

  Area links render only when that Gandhinagar area page exists and is active.
--}}
@php
  $gnpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gnpA = function (string $slug, string $label) use ($gnpSlugs) {
      return in_array($slug, $gnpSlugs, true)
          ? '<a href="' . e(url('/city/gandhinagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide gnp-guide" aria-labelledby="gnpGuideTitle">
  <h2 id="gnpGuideTitle">Physics home tutor in Gandhinagar: derivations, diagrams and the problems nobody had time to finish</h2>

  <p class="nx-guide__lede">
    Senior physics in Gandhinagar is studied for several examiners at once. One student is in HSC Science on the
    Gujarat board, another writes the CBSE Class 12 paper, a third is on ISC or the IB Diploma, and many of them are
    also preparing for JEE or NEET. The chapters overlap; the marking does not. A home physics tutor is most useful
    when they know which paper comes first, sit beside the student while a problem is worked, and catch the step
    that keeps going wrong. NXTutors suggests two or three physics tutors who know your child's course and can reach
    your sector at the hour you need. You see their fees before meeting anyone, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gnp-target">The target exam</a> ·
    <a href="#gnp-gseb">HSC Science physics</a> ·
    <a href="#gnp-theory">CBSE theory paper</a> ·
    <a href="#gnp-lab">Practical marks</a> ·
    <a href="#gnp-lost">Where marks are lost</a> ·
    <a href="#gnp-eleven">Class 11 foundations</a> ·
    <a href="#gnp-intl">IB, ISC, IGCSE</a> ·
    <a href="#gnp-reach">Six localities</a> ·
    <a href="#gnp-fees">Fees</a> ·
    <a href="#gnp-ask">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gnp-target">Which exam is your child's physics really aimed at?</h2>
  <p>
    Decide the main target before the first session; every problem set the tutor chooses should follow from it.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Physics in the exams Gandhinagar students take in Classes 11 and 12, and what each rewards</caption>
    <thead>
      <tr><th scope="col">Exam</th><th scope="col">Physics in it</th><th scope="col">Scoring</th><th scope="col">What to practise</th></tr>
    </thead>
    <tbody>
      <tr><td>GSEB HSC Science, Standard 12</td><td>Set by the Gujarat board</td><td>As published on the board's own sites</td><td>The board's textbook and its own past papers, in the student's medium</td></tr>
      <tr><td>CBSE Class 12 (042)</td><td>Theory 70 marks, 33 compulsory questions; practical 30</td><td>Written answers; no calculator</td><td>Derivations, ray and circuit diagrams, case-based reading</td></tr>
      <tr><td>JEE Main, 2026 pattern</td><td>25 of 75 questions, 5 with a numerical answer</td><td>+4 right, −1 wrong</td><td>Multi-step problems against the clock, every error reviewed</td></tr>
      <tr><td>JEE Advanced</td><td>For 2026, open to the leading 2,50,000 JEE Main candidates</td><td>Set each year by the organising institute</td><td>Problems that combine ideas; past Advanced papers</td></tr>
      <tr><td>NEET (UG), 2026 pattern</td><td>45 of 180 questions, 180 of 720 marks, on paper</td><td>+4 right, −1 wrong</td><td>NCERT-level accuracy and fewer blind guesses</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Entrance syllabi are published by the conducting body, not by the school board, and they can keep topics a board
    has dropped, so read the current bulletin on nta.ac.in before striking anything off. Our
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics topic-by-topic plan</a> and
    <a href="{{ url('/blog/-neet-physics-highyield') }}">NEET physics chapters guide</a> set priorities, and the
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> and
    <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a> pages explain how we match.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnp-gseb">What about physics in GSEB HSC Science?</h2>
  <p>
    The Gujarat Secondary and Higher Secondary Education Board, based in Gandhinagar, runs the HSC examination for
    the Science stream at the end of Standard 12. Its e-service site, gsebeservice.com, carries past question papers
    for Standard 12 Science and the board's notices on question-paper design. The board revises these designs, so this page does not set out a pattern; start from the latest notice.
  </p>
  <p>
    A good HSC physics tutor works from the board's textbook in the language your child writes in, uses the board's
    own papers and question bank for practice, and still teaches the diagram-first habit that entrance tests reward.
    Students aiming at GUJCET should take its rules only from the board's official notices. Our
    <a href="{{ url('/gujarat-board-tutor-gandhinagar') }}">Gujarat Board tutor page for Gandhinagar</a> covers SSC
    and HSC more widely.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnp-theory">How are the 70 CBSE Class 12 theory marks laid out?</h2>
  <p>
    For 2026-27 the sample paper repeats last session's design. The fourteen NCERT chapters are marked in four blocks,
    and the paper in five sections:
  </p>
  <ul>
    <li><strong>Marks by block:</strong> electrostatics through alternating current 33; electromagnetic waves and optics 18; dual nature, atoms and nuclei 12; semiconductor electronics 7.</li>
    <li><strong>Questions by section:</strong> A has 16 one-mark items (12 multiple-choice, 4 assertion–reason); B five two-mark questions; C seven three-mark questions; D two four-mark case studies; E three five-mark long answers.</li>
  </ul>
  <p>
    That is 33 questions in all. Only about 38% of the marks reward recall; constants are given and no calculator is
    allowed. Transistors and logic gates are no longer in the syllabus, so old notes that include them can be set
    aside. There is one main Class 12 board exam, with 2027 dates still to come on cbse.gov.in. The
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> collect the
    derivations that recur, and the <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics tutor</a>
    page lays out a board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnp-lab">Can a home tutor help with the 30 practical marks?</h2>
  <p>
    Yes, more than families expect. The marks divide as follows:
  </p>
  <ul>
    <li><strong>Two experiments, 14 marks:</strong> 7 each, one from each section.</li>
    <li><strong>Practical record, 5 marks:</strong> at least eight experiments (four per section), six activities (three per section) and the project report.</li>
    <li><strong>Activity, 3 marks; investigatory project, 3 marks.</strong></li>
    <li><strong>Viva, 5 marks.</strong></li>
  </ul>
  <p>
    The apparatus stays at school, but at home a tutor can read each record entry for aim, diagram and observation
    table, go through precautions and sources of error, and run a mock viva: why take several readings, what does
    the slope of this graph mean, why is this resistor in series?
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnp-lost">Where do physics marks actually go missing?</h2>
  <p>
    A test score on its own says little. A tutor should sort every lost mark into one of four kinds, because each has
    a different cure:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Four kinds of lost physics marks and the fix for each</caption>
    <thead>
      <tr><th scope="col">Kind of loss</th><th scope="col">How it shows</th><th scope="col">Fix</th></tr>
    </thead>
    <tbody>
      <tr><td>Concept gap</td><td>Wrong law chosen, or none named</td><td>Re-teach the idea with two fresh problems a week later</td></tr>
      <tr><td>Set-up error</td><td>No diagram, directions or signs muddled</td><td>A diagram with directions before any equation, every time</td></tr>
      <tr><td>Algebra or arithmetic slip</td><td>Right method, wrong number; units missing</td><td>Units written on each line and a size check at the end</td></tr>
      <tr><td>Exam judgement</td><td>Time lost on one question; guesses on negatively marked items</td><td>Timed sections and a rule for when to skip</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Bring the last two tests to the free demo. A capable tutor will look through them and name the weak step before
    teaching anything new. If the class with an entrance batch already covers new chapters, the home hour is better
    spent on this sorting and on board-style answers. We compare
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching and a home tutor for JEE</a>
    and do the same <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">for NEET</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnp-eleven">Why start in Class 11?</h2>
  <p>
    Mechanics in Class 11 rests on vectors, graphs and simple calculus, and those tools return in nearly every Class
    12 chapter, from fields to optics. A student who leaves Class 11 unsure of resolving forces or reading a
    velocity–time graph spends the board year patching instead of progressing. A term spent on foundations is usually
    the cheaper repair. See the <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics tutor</a> page
    and our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">stream choice guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnp-intl">IB, ISC and IGCSE physics</h2>
  <p>
    <strong>IB Diploma.</strong> The current guide, first examined in May 2025, is built on five lettered themes with
    no options and no Paper 3. Exam papers carry 80% of the grade and an investigation that the student designs and
    writes alone carries 20%; recommended teaching time is 150 hours at SL and 240 at HL. Read our
    <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL guide</a>.
    <strong>ISC.</strong> CISCE assesses practical work and a project beside the theory paper and expects fuller
    reasoning than a single line; confirm the syllabus for your exam year.
    <strong>Cambridge IGCSE.</strong> Taken at Core or Extended level; a student moving to an Indian board in Class 11
    usually needs extra time on vectors and graphs. Specialists for these courses are fewer, so an online tutor may be
    the practical choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnp-reach">How will a physics tutor reach you in these six localities?</h2>
  <p>
    Senior students often get home late, so physics tends to land in the evening. Whether that slot holds depends on
    the tutor's route. See every locality on our <a href="{{ url('/city/gandhinagar') }}">Gandhinagar page</a>.
  </p>
  <h3>Next to a metro station</h3>
  <p>
    {!! $gnpA('sectors-16-22-23', 'Sectors 16, 22 and 23') !!} are served by Sector-16 station, opened in January
    2026; Sector 16 is full of government offices, so the roads load at the start and end of the working day.
    {!! $gnpA('infocity', 'Infocity') !!} has its own station, opened in September 2024 between Sector-1 and
    Dholakuva Circle, which lets a tutor arrive by metro from Ahmedabad or the sectors and walk or take an auto for
    the last stretch. Office traffic is heaviest at the same hours, so aim for later evening or weekends.
  </p>
  <h3>Grid sectors reached by road</h3>
  <p>
    In {!! $gnpA('sectors-25-26', 'Sectors 25 and 26') !!}, homes in Sector 25 sit beside the state industrial
    estate in Sector 26, and Sector-24 station lies in the adjoining sector; most homes face the sector roads, so a
    tutor parks outside. {!! $gnpA('sectors-6-7-8', 'Sectors 6, 7 and 8') !!} belong to the original grid, where a
    junction name such as CH-1 with the block and plot number is enough to find a house.
  </p>
  <h3>Edges of the city</h3>
  <p>
    {!! $gnpA('sector-30', 'Sector 30') !!} is known for state government quarters in numbered blocks, with NH-147 passing
    through; share the block and quarter number, and fix the slot away from office-hour traffic.
    {!! $gnpA('pethapur', 'Pethapur') !!}, the old town that joined the city in 2020, has no metro station, so tutors
    come by two-wheeler or car from the neighbouring sectors. When a late evening makes the trip hard, swap that
    week's lesson for an online hour with the same tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnp-fees">What does a physics home tutor in Gandhinagar charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees, which follow the target (board paper, JEE Main, JEE Advanced or NEET), their experience with it, how late
    the trip to your sector is and the sessions per week. The same tutor may charge less online. You see every fee
    before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnp-ask">What should you send us?</h2>
  <p>
    The class, the board (GSEB HSC Science, CBSE, ISC, IB or IGCSE), the main goal, the days an entrance class runs,
    your sector and block or locality with a landmark, and the evenings that are free. We send two or three physics
    tutors with fees, and you choose whom to meet for the free demo. A poor fit leads to a second demo, and changing
    tutor later is free. If nobody suitable can come at that hour, we propose an online or part-online plan.
    NXTutors works from Sector 66, Gurugram, and teaches online across India; the national
    <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page shows how we work elsewhere, and the
    <a href="{{ url('/maths-home-tutor-gandhinagar') }}">maths home tutor in Gandhinagar</a> page pairs well with
    this one.
  </p>
  <p>
    Physics teachers based in Gandhinagar who would like students nearby can see open requests on the
    <a href="{{ url('/tuition-jobs/gandhinagar') }}">Gandhinagar tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
