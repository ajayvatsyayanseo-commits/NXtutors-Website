{{--
  Long-form guide for the "physics home tutor Lucknow" page (Classes 11 and
  12, JEE and NEET, ISC/IB/IGCSE, UP Board Intermediate described generally).
  Byline in config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/lucknow-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-physics-strategies (70 + 30, 33
  questions in sections A to E, blocks 33/18/12/7, recall share, constants
  supplied, no calculators, transistors and logic gates out, practical scheme
  and record requirements), jee-preparation-gurgaon-coaching-or-home-tutor (JEE
  Main 2026 pattern, JEE Advanced 2026 eligibility),
  neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026 pattern) and
  -ib-physics-slhl-iaee (new guide first assessed May 2025, hours, five themes,
  two papers 80%, investigation 20%). ISC is described only in the general
  terms the repo's ISC material supports. No school, society or people's
  names; the airport is not named; no distances or travel times; only the
  allowed fee sentence.

  Area links render only when that Lucknow area page exists and is active.
--}}
@php
  $lkAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $lkA = function (string $slug, string $label) use ($lkAreaSlugs) {
      return in_array($slug, $lkAreaSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide lkp-guide" aria-labelledby="lkpGuideTitle">
  <h2 id="lkpGuideTitle">Physics home tutor in Lucknow: pace the two senior years, then protect the evening slot</h2>

  <p class="nx-guide__lede">
    Senior physics is where many Lucknow students first feel stretched. The subject jumps in difficulty at the start
    of Class 11, the board paper and the entrance tests expect different kinds of answer, and coaching often claims
    the early evening. A physics tutor has to know the target, whether that is a CBSE, ISC or UP Board paper, JEE,
    NEET, IB or IGCSE, and still be able to reach your home at the hour that is left. NXTutors shortlists two or
    three physics tutors who fit both needs. You see each fee before meeting anyone, and the first class is a free
    demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#lkp-pace">Two years, paced</a> ·
    <a href="#lkp-paper">The board theory paper</a> ·
    <a href="#lkp-lab">Practical marks</a> ·
    <a href="#lkp-entrance">JEE and NEET</a> ·
    <a href="#lkp-boards">ISC, UP Board, IB, IGCSE</a> ·
    <a href="#lkp-local">Six localities</a> ·
    <a href="#lkp-ask">Questions for the demo</a> ·
    <a href="#lkp-cost">Fees</a> ·
    <a href="#lkp-book">Booking</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="lkp-pace">How should physics tuition be paced across Classes 11 and 12?</h2>
  <p>
    Starting early is usually cheaper than rescuing late. Class 11 moves from measurement and motion to forces,
    energy, rotation and gravitation, and almost every chapter leans on vectors, graphs and rates of change,
    sometimes before the maths class has covered them. Class 12 then reuses the same tools for charges, fields and
    circuits. One workable rhythm for a student preparing for a board paper and an entrance test together:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A two-year physics rhythm for Lucknow students taking a Class 12 board paper and JEE or NEET</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Main physics work</th><th scope="col">What the tutor adds</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11, first term</td><td>Units, motion in one and two dimensions, laws of motion</td><td>Vector components, reading slopes and areas under graphs</td></tr>
      <tr><td>Class 11, second term</td><td>Work and energy, rotation, gravitation, then heat, oscillations and waves</td><td>Free-body diagrams on every problem; first timed entrance sets</td></tr>
      <tr><td>Summer before Class 12</td><td>Mechanics revision; a start on electrostatics</td><td>A list of Class 11 weak spots, cleared before school resumes</td></tr>
      <tr><td>Class 12, April to August</td><td>Electrostatics, current, magnetism, induction and alternating current</td><td>Derivations written from a labelled diagram; circuit numericals</td></tr>
      <tr><td>Class 12, September to November</td><td>Optics, dual nature, atoms, nuclei, semiconductors</td><td>Ray diagrams drawn to scale; the practical record checked</td></tr>
      <tr><td>December to the exams</td><td>Sample papers and entrance mocks</td><td>Every lost mark sorted by cause and fixed the same week</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics tutor</a> page goes chapter by chapter,
    and families still weighing streams can read the
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkp-paper">What does the CBSE Class 12 physics theory paper hold?</h2>
  <p>
    Seventy theory marks over three hours, 33 compulsory questions, no calculator, with the values of physical
    constants supplied. The 2026-27 sample paper keeps last session's design:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 physics sample paper, 2026-27: sections, question counts and marks, with a practice focus for each</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Questions</th><th scope="col">Marks</th><th scope="col">Practice focus</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>16 of one mark: 12 multiple-choice, 4 assertion–reason</td><td>16</td><td>Reading every option before choosing</td></tr>
      <tr><td>B</td><td>5 of two marks</td><td>10</td><td>A law stated, then one line of working</td></tr>
      <tr><td>C</td><td>7 of three marks</td><td>21</td><td>Short derivations and single-step numericals</td></tr>
      <tr><td>D</td><td>2 case studies of four marks</td><td>8</td><td>Pulling data out of an unfamiliar passage</td></tr>
      <tr><td>E</td><td>3 long answers of five marks</td><td>15</td><td>Full derivations with diagrams</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    By topic, electricity and magnetism together carry 33 marks, nearly half. Optics with electromagnetic waves
    takes 18, dual nature, atoms and nuclei 12, and semiconductor electronics 7. Transistors and logic gates have
    left the syllabus, so drop any notes that still include them. Only about 38% of the marks reward recall; the
    rest ask for application and reasoning. The 2027 date sheet is not out yet, so follow cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> article lists the
    derivations worth mastering, and the <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics
    tutor</a> page maps the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkp-lab">How are the 30 practical marks earned?</h2>
  <p>
    Two experiments, one from each section, are worth 7 marks each. The practical record adds 5, one activity 3,
    the investigatory project 3 and the viva 5. The record must contain at least eight experiments, four per
    section, at least six activities, three per section, and the project report. Apparatus stays in the school
    laboratory, but the write-up and the viva can be rehearsed at home: aim, diagram and observation table checked
    for each experiment, sources of error explained rather than copied, and questions such as what a graph's slope
    represents answered aloud.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkp-entrance">How much physics do JEE and NEET carry, and in what style?</h2>
  <ul>
    <li><strong>JEE Main.</strong> In the 2026 Paper 1, physics was 25 of the 75 questions: 20 multiple-choice and 5 with a numerical answer. The test is computer-based. Speed through multi-step problems decides the score, so every mock deserves an honest review.</li>
    <li><strong>JEE Advanced.</strong> In 2026 it was open only to the 2,50,000 highest-ranked JEE Main candidates. It asks for several ideas inside one problem, and past Advanced papers are the right practice.</li>
    <li><strong>NEET (UG).</strong> A pen-and-paper test in which physics was 45 of 180 questions in 2026, worth 180 of 720 marks. Accuracy on NCERT concepts pays more than risky attempts.</li>
  </ul>
  <p>
    JEE Main and NEET both gave +4 for a right answer and −1 for a wrong one. The syllabi are published by the conducting body
    and may include topics the board has removed, so check the latest bulletin on nta.ac.in before trimming
    anything. Useful next reads: the <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics topic-wise
    guide</a>, the <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics chapters</a> and our
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching or home tutor for JEE</a>
    comparison.
  </p>
  <p>
    Where a student already attends a coaching institute, a home tutor is most useful as the person who finishes what
    coaching starts: the questions left unsolved on the week's sheet, the board-style written answer that entrance
    classes tend to skip, and a check that the school practical record keeps pace. Agree that division at the demo,
    so the two do not repeat each other and the student's evenings are not overloaded.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkp-boards">What if the board is ISC, the UP Board, IB or IGCSE?</h2>
  <ul>
    <li><strong>ISC.</strong> CISCE examines physics through a theory paper with practical and project work, and it expects fuller written answers than a one-line reply. Ask the tutor which exam year's syllabus they are teaching from. Our <a href="{{ url('/blog/isc-class-12-physics-tips') }}">ISC Class 12 physics tips</a> follow the board approach.</li>
    <li><strong>UP Board Intermediate.</strong> Uttar Pradesh Madhyamik Shiksha Parishad conducts the Class 12 examination and publishes its scheme at upmsp.edu.in. We keep to that: the tutor teaches from the prescribed books, and a student aiming at JEE or NEET should have the entrance syllabus checked against them.</li>
    <li><strong>IB Diploma.</strong> A new physics guide was first examined in May 2025. The syllabus runs in five themes, A to E, with 150 recommended teaching hours at SL and 240 at HL. Two papers make up 80% of the grade and a scientific investigation, the student's own work, the other 20%. See our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL guide</a>.</li>
    <li><strong>Cambridge IGCSE.</strong> Core or Extended. Students moving on to Class 11 physics often need early practice with vectors, graphs and derivations.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkp-local">After coaching, can a physics tutor still reach these six Lucknow localities?</h2>
  <p>
    Senior students often get home late, so a physics lesson tends to start after the office rush has begun. Six
    localities across the city show how the route shapes the slot; browse tutors on our
    <a href="{{ url('/city/lucknow') }}">Lucknow page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>East and north: no metro yet</h3>
      <p>
        {!! $lkA('gomti-nagar-extension', 'Gomti Nagar Extension') !!} is laid out in numbered sectors along Shaheed
        Path, with authority plots, high-rise towers and gated townships. Tutors come by road, and a gate pass for a
        regular visitor is worth arranging early. {!! $lkA('jankipuram', 'Jankipuram') !!}, a development-authority
        area in lettered sectors, also lies beyond the Red Line; a tutor living in Jankipuram, Aliganj or Vikas Nagar
        is the dependable choice for late slots.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Trans-Gomti and the centre</h3>
      <p>
        {!! $lkA('nirala-nagar', 'Nirala Nagar') !!}, a planned neighbourhood of parks and wide roads, is served by IT
        College station, from which trains run on to Hazratganj and Charbagh. Traffic builds on roads towards
        Hazratganj, so a slightly earlier start helps. {!! $lkA('rajendra-nagar', 'Rajendra Nagar') !!} is mostly
        mid-rise apartments close to Charbagh, the main railway station and a Red Line stop; parking is easier inside
        compounds than on the narrow roads.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Along Kanpur Road</h3>
      <p>
        {!! $lkA('lda-colony', 'LDA Colony') !!}, the authority's Kanpur Road scheme, runs in lettered sectors from B to
        K and is served by Krishna Nagar station; houses mean a doorstep arrival. In
        {!! $lkA('sarojini-nagar', 'Sarojini Nagar') !!}, on the airport side, the Amausi and Transport Nagar metro stations and
        Amausi railway station help, but the highway is slow at office hours, so a weekend or early-evening slot holds
        better.
      </p>
    </div>
  </div>
  <p>
    On the latest coaching nights, one online session a week with the same tutor keeps the plan intact without an
    evening journey for anyone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkp-ask">Which four questions should you put to a physics tutor at the demo?</h2>
  <ol>
    <li><strong>"Which exam are you planning for first?"</strong> A clear answer, board or entrance, with a reason, shows the tutor has read your child's situation.</li>
    <li><strong>"Can you look at the last test paper?"</strong> A capable tutor will spot whether marks went on concepts, algebra, units or unlabelled diagrams.</li>
    <li><strong>"How will you handle numericals?"</strong> Listen for a routine: diagram, the law named, units on every line, a sense check at the end.</li>
    <li><strong>"What will you set between sessions?"</strong> A short, specific task beats a vague instruction to revise.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkp-cost">How much do physics home tutors in Lucknow charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Every physics tutor
    sets their own rate, which reflects the exam in question, their record at that level, the route to your
    locality at a late hour and the number of weekly sessions. Online classes with the same tutor may cost less.
    All fees are shown before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lkp-book">What happens after you ask us for a physics tutor?</h2>
  <p>
    Tell us the class and board, the entrance test if there is one, your locality with its sector or block, and
    the evenings free after school and coaching. We send two or three matched physics tutors with their fees, and
    you pick one for a free demo class. If it is not the right fit, another demo is arranged, and switching later
    costs nothing. Where no suitable tutor can travel at your hour, we propose online or mixed sessions. NXTutors
    is based in Sector 66, Gurugram, and teaches online across India; the national
    <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page describes our approach elsewhere.
  </p>
  <p>
    Physics teachers living in Lucknow can view open requests from families on the
    <a href="{{ url('/tuition-jobs/lucknow') }}">Lucknow tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
