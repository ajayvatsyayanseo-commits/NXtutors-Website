{{--
  Long-form guide for the "physics home tutor Imphal" page (Classes 11 and 12:
  COHSEM, CBSE, ISC/IB/IGCSE in general, with JEE and NEET alongside).
  Byline in config: NXTutors Academic Team. Page writer (capitals wave 2,
  subjects), 3 Oct 2026. Local facts come only from
  database/seo-content/areas/imphal-research.json.
  COHSEM facts, read 3 Oct 2026 on cohsem.nic.in:
  - https://cohsem.nic.in/docs/subjects/41_Physics.pdf : Class XI and XII
    physics, one theory paper of 3 hours and 70 marks plus a 30-mark
    practical; NCERT Physics Part I and Part II prescribed. Class XI unit
    marks: physical world and measurement 3, kinematics 10, laws of motion
    10, work energy power 6, system of particles and rigid body 6,
    gravitation 5, bulk matter 10, thermodynamics 5, kinetic theory 5,
    oscillations and waves 10. Class XI practical: 12 experiments (6 from
    each section); activities demonstrated by teachers. Class XII unit marks:
    electrostatics 9, current electricity 7, magnetic effect of current and
    magnetism 9, EMI and AC 8, EM waves 3, optics 15, dual nature 5, atoms and
    nuclei 7, electronic devices 7. Question design (XI and XII): 36
    questions; essay/long answer 3 (15 marks), SA-I 6 (18), SA-II 10 (20),
    VSA 7 (7), MCQ 10 (10); no sections; internal option in the essay
    questions and in three SA-I questions including the one case-study
    question; two assertion-reason MCQs; difficulty 35/50/15. Class XII
    practical exam 30: two experiments 8 + 8 (theory 2, observation/data 4,
    conclusion 1, accuracy 1 each), investigatory project record 5, viva on
    the project 2, practical record 5, viva on experiments 2.
  - https://cohsem.nic.in/academic_calender.html : Class XII regular classes
    from the last week of May; examinations February-March.
  - https://cohsem.nic.in/docs/Notice/GradingSystem.pdf : relative grading
    from the 2027 examinations; modalities to follow.
  Other exam facts reuse the checked statements in database/seo-content/blog:
  cbse-class-12-physics-strategies (70 + 30, 33 questions in sections A to E,
  blocks 33/18/12/7), jee-preparation-gurgaon-coaching-or-home-tutor (JEE
  Main 2026) and neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG
  2026: 180 questions, 45 physics, 720 marks). No coaching institute, school,
  college, society or people's names, no distances or travel times, only the
  allowed fee sentence. Weather is timing advice only.

  Area links render only when that Imphal area page exists and is active.
--}}
@php
  $ippSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ippA = function (string $slug, string $label) use ($ippSlugs) {
      return in_array($slug, $ippSlugs, true)
          ? '<a href="' . e(url('/city/imphal/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ipp-guide" aria-labelledby="ippGuideTitle">
  <h2 id="ippGuideTitle">Physics home tutor in Imphal: a 70-mark council paper, a 30-mark practical and the entrance exam waiting behind both</h2>

  <p class="nx-guide__lede">
    Physics is often the subject where a Class 11 student discovers that school maths was not quite enough.
    Vectors, calculus and graphs arrive in the first term, numericals become longer and the practical record has to be
    kept up all year. Under the Council of Higher Secondary Education, Manipur, physics is examined at the end of
    Class XI as well as in the Higher Secondary examination, so there is no quiet year. NXTutors matches students with
    physics tutors for the council paper, CBSE, ISC or an international course, and for JEE or NEET alongside. You see
    each tutor's fee before the free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ipp-which">Which paper</a> ·
    <a href="#ipp-eleven">Class XI</a> ·
    <a href="#ipp-twelve">Class XII marks</a> ·
    <a href="#ipp-forms">Question forms</a> ·
    <a href="#ipp-practical">Practical</a> ·
    <a href="#ipp-cbse">CBSE beside it</a> ·
    <a href="#ipp-entrance">JEE and NEET</a> ·
    <a href="#ipp-where">Localities</a> ·
    <a href="#ipp-fees">Fees</a> ·
    <a href="#ipp-ask">Ask</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ipp-which">Whose marking rules is your child really training for?</h2>
  <p>
    A council student, a CBSE student and a JEE aspirant can open the same NCERT physics book and still need different
    practice. The council lists NCERT Physics Part I and Part II as its textbooks, so the chapters are familiar; what
    differs is the paper. The council and CBSE both reward complete written answers with diagrams and units. JEE and NEET
    reward speed and accuracy on objective questions, with marks lost for wrong answers. A home tutor's first job is to
    know which of these comes next, and to plan backwards from it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipp-eleven">Why does Class XI physics count in Manipur?</h2>
  <p>
    The council conducts a Class XI examination in February and March, so Class XI physics ends on a public marksheet.
    The paper is 70 marks of theory over three hours, with the rest of the 100 from a 30-mark practical. In the course
    structure, kinematics, laws of motion, properties of bulk matter, and oscillations and waves carry 10 marks each,
    together 40 of the 70. Work, energy and power and rotational motion carry 6 each; gravitation, thermodynamics and
    kinetic theory 5 each; and physical world and measurement 3.
  </p>
  <p>
    Those four ten-mark units are also the base for Class XII and for every entrance paper. A tutor who spends the first
    months making vectors, graphs and free-body diagrams automatic is preparing the whole two-year course, not just the
    Class XI examination. Every student performs twelve experiments in Class XI, six from each section, and a tutor can
    help keep that record accurate.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipp-twelve">Where are the 70 theory marks in council Class XII physics?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>COHSEM Class XII physics: unit marks from the council's course structure, and the habit each unit needs</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Habit to build</th></tr>
    </thead>
    <tbody>
      <tr><td>Optics</td><td>15</td><td>Ray diagrams to scale, sign convention applied every time</td></tr>
      <tr><td>Electrostatics</td><td>9</td><td>Field and potential drawn before any formula</td></tr>
      <tr><td>Magnetic effect of current and magnetism</td><td>9</td><td>Right-hand rules stated in words, not just gestures</td></tr>
      <tr><td>Electromagnetic induction and alternating current</td><td>8</td><td>Phasor sketches and the direction of induced current</td></tr>
      <tr><td>Current electricity</td><td>7</td><td>Circuit diagrams redrawn before solving</td></tr>
      <tr><td>Atoms and nuclei</td><td>7</td><td>Energy-level diagrams and unit conversions</td></tr>
      <tr><td>Electronic devices</td><td>7</td><td>Labelled characteristics and truth tables</td></tr>
      <tr><td>Dual nature of matter and radiation</td><td>5</td><td>Photoelectric graphs read correctly</td></tr>
      <tr><td>Electromagnetic waves</td><td>3</td><td>The spectrum in order, with one use for each band</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Optics is the single heaviest unit at 15 marks. Electrostatics through to alternating current together carry 33, nearly
    half the paper, so electricity and magnetism cannot be left for the winter months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipp-forms">What kinds of question does the council set?</h2>
  <p>
    The council's design has 36 questions and no separate sections: three essay-type long answers worth 15 marks, six
    SA-I questions worth 18, ten SA-II questions worth 20, seven very short answers and ten multiple-choice questions, two
    of them assertion-reason. One SA-I question is case-study based, and internal choice is given in the essay questions
    and in three SA-I questions. The difficulty split is 35% difficult, 50% average and 15% easy.
  </p>
  <p>
    Ten SA-II questions are the biggest block, so the weekly practice should centre on two- and three-step answers set out
    cleanly: a formula, substitution with units, and a one-line conclusion. Long answers usually combine a derivation, a
    diagram and a numerical part; those deserve one full practice question a week from the start of Class XII.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipp-practical">How can a home tutor help with the 30-mark practical?</h2>
  <p>
    The council's Class XII practical examination is marked like this:
  </p>
  <ul>
    <li><strong>Two experiments, 8 marks each.</strong> Within each: theory 2, observation and data 4, conclusion 1 and accuracy of the result 1.</li>
    <li><strong>Investigatory project, 7 marks.</strong> 5 for the project record and 2 for the viva on it.</li>
    <li><strong>Practical record and viva, 7 marks.</strong> 5 for the record of experiments and 2 for the viva on them.</li>
  </ul>
  <p>
    A tutor cannot do the experiments at home, but can do almost everything around them: explain the principle and
    working formula of each experiment, check that tables have units and that graphs are labelled, help the student
    choose a manageable project and rehearse the "why" questions examiners ask in a viva.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipp-cbse">What if your child is on CBSE?</h2>
  <p>
    CBSE's Class 12 physics paper is also 70 marks plus a 30-mark practical, but it has 33 compulsory questions in five
    sections, A to E. Electricity and magnetism carry 33 marks, optics with electromagnetic waves 18, modern physics 12
    and semiconductor electronics 7. The weightings are close enough that a good tutor can move between the two boards,
    but the practice papers must come from the board your child will actually sit. Our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">CBSE Class 12 physics strategies</a> guide goes
    chapter by chapter, and <a href="{{ url('/physics-home-tutor/class-12') }}">physics tutors for Class 12</a> explains
    how we match for the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipp-entrance">How should board physics and JEE or NEET share the week?</h2>
  <p>
    In JEE Main 2026, Paper 1 carried 25 physics questions, twenty multiple choice and five with a numerical answer,
    with four marks for a correct response and one deducted for a wrong one. NEET UG 2026 was a pen-and-paper exam of
    180 multiple-choice questions for 720 marks, 45 of them in physics. Both reward speed and accuracy; the council paper
    rewards complete, well-presented answers.
  </p>
  <p>
    A workable plan for an Imphal student is to learn each chapter for understanding, write the board-style answers that
    week, and then do a timed set of objective questions on the same chapter. The council's academic calendar ends regular
    classes in late January and holds the Higher Secondary examination in February and March, so board revision takes
    over in winter and entrance practice resumes afterwards. Relative grading in council examinations is due from 2027;
    follow cohsem.nic.in for the details. Our
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE preparation</a> and
    <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET preparation</a> guides compare
    coaching and one-to-one help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipp-where">Can a physics tutor reach you after school in these localities?</h2>
  <p>
    The right physics specialist for your child's board may live on the far side of Imphal. Five localities show what
    to think about:
  </p>
  <ul>
    <li>{!! $ippA('thangmeiband', 'Thangmeiband') !!}: central, so tutors from Uripok, Langol, Lamphel and the Thangal side can all reach it. Roads towards the market are busiest late in the afternoon; fix an early-evening slot.</li>
    <li>{!! $ippA('lamphel', 'Lamphel and Lamphelpat') !!}: offices sit beside homes, so traffic builds when offices open and close. Lessons that start after office hours run more smoothly; if the gate has a guard, give the tutor's name in advance.</li>
    <li>{!! $ippA('thangal-bazar', 'Thangal Bazar and Paona Bazar') !!}: homes on the lanes behind the busiest shopping streets. Evening lessons after the shops quieten, or early weekend mornings, suit these homes better.</li>
    <li>{!! $ippA('porompat', 'Porompat') !!}: the headquarters of Imphal East district, busiest at office times. Tutors from Porompat, Kongba or Khurai are well placed, and online sessions help when the right specialist lives across the city.</li>
    <li>{!! $ippA('wangkhei', 'Wangkhei') !!}: east of the river; tutors crossing from the west use the central bridges, which are busy late in the afternoon.</li>
  </ul>
  <p>
    One workable pattern is two home visits a week with an online session for doubts on a third day, or on a heavy-rain
    evening. The <a href="{{ url('/city/imphal') }}">Imphal page</a> and the
    <a href="{{ url('/city/imphal/zone/wangkhei-khurai-porompat') }}">Wangkhei, Khurai and Porompat</a> and
    <a href="{{ url('/city/imphal/zone/uripok-thangmeiband-lamphel') }}">Uripok, Thangmeiband and Lamphel</a> zone
    pages list every locality we cover.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipp-fees">What does a physics home tutor in Imphal charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each physics tutor sets a
    rate, reflecting the board, whether entrance preparation is included and the trip to your locality. Rates appear on
    the shortlist before any demo; read the <a href="{{ url('/blog/home-tuition-fees-imphal') }}">Imphal tuition
    fees</a> guide and the <a href="{{ url('/pricing-guide') }}">pricing guide</a> for what to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipp-ask">How do you ask for a physics shortlist?</h2>
  <p>
    Tell us the class, the board, any entrance exam, your locality and leikai, and the evenings that are free. Two or
    three physics tutors come back with their fees; the first lesson with your chosen tutor is a free demo, and changing
    tutor later costs nothing. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
    The national <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page, the
    <a href="{{ url('/maths-home-tutor-imphal') }}">maths tutor in Imphal</a> page (vectors and calculus run through
    physics), the <a href="{{ url('/chemistry-home-tutor-imphal') }}">chemistry</a> page and the
    <a href="{{ url('/manipur-board-tutor-imphal') }}">Manipur Board</a> page are useful next reads. Physics teachers can
    see requests on <a href="{{ url('/tuition-jobs/imphal') }}">Imphal tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
