{{--
  Long-form guide for the "physics home tutor Ranchi" page (Classes 11 and 12,
  JEE and NEET alongside coaching, ISC/IB/IGCSE, the Jharkhand Academic
  Council in general terms). Byline in config: NXTutors Academic Team. Local
  facts come only from database/seo-content/areas/ranchi-research.json
  (zone_facts and area "about" texts). Exam facts reuse the checked statements
  in database/seo-content/blog: cbse-class-12-physics-strategies (70 + 30, 33
  questions in sections A to E, blocks 33/18/12/7, recall share, practical
  scheme and record requirements, no calculators, transistors and logic gates
  out), jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern,
  JEE Advanced 2026 eligibility), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern) and -ib-physics-slhl-iaee (first assessed May 2025,
  hours, five themes, papers 80%, investigation 20%). No coaching institute,
  school, college, society, company or people's names, no distances or
  travel times, only the allowed fee sentence.

  Area links render only when that Ranchi area page exists and is active.
--}}
@php
  $rcAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $rcA = function (string $slug, string $label) use ($rcAreaSlugs) {
      return in_array($slug, $rcAreaSlugs, true)
          ? '<a href="' . e(url('/city/ranchi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide rcp-guide" aria-labelledby="rcpGuideTitle">
  <h2 id="rcpGuideTitle">Physics home tutor in Ranchi: the second pair of eyes a JEE or NEET student needs</h2>

  <p class="nx-guide__lede">
    Plenty of Class 11 and 12 students in Ranchi divide their week between school and an entrance coaching class. The
    coaching class races through chapters and hands out problem sheets; school expects derivations, diagrams and a
    practical file. Nobody in that week sits with the student and reads their working line by line. That is where a
    home physics tutor earns their place. NXTutors puts forward two or three physics tutors who know your child's target
    exam and can reach your locality once coaching is over. You see each fee before choosing, and the first lesson is
    a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#rcp-split">Coaching and tutor</a> ·
    <a href="#rcp-targets">Target exams</a> ·
    <a href="#rcp-week">A sample week</a> ·
    <a href="#rcp-theory">Board theory</a> ·
    <a href="#rcp-practical">Practical marks</a> ·
    <a href="#rcp-jac">JAC Class 12</a> ·
    <a href="#rcp-routes">Four localities</a> ·
    <a href="#rcp-courses">ISC, IB, IGCSE</a> ·
    <a href="#rcp-fees">Fees</a> ·
    <a href="#rcp-book">Booking</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="rcp-split">What does a coaching class cover, and what is left for the tutor at home?</h2>
  <p>
    A home tutor who simply repeats the coaching lecture is poor value. The two should divide the work, roughly like
    this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How a physics coaching class and a home physics tutor can share the work in Classes 11 and 12</caption>
    <thead>
      <tr><th scope="col">Task</th><th scope="col">Coaching class</th><th scope="col">Home tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>New chapters</td><td>Introduces them at the pace of the batch</td><td>Does not re-teach; checks the student can explain the idea back</td></tr>
      <tr><td>Problem sheets</td><td>Sets them in bulk</td><td>Takes the unsolved ones one at a time, watching where the working breaks</td></tr>
      <tr><td>Mock tests</td><td>Gives a score and a rank</td><td>Sorts every lost mark: concept gap, careless slip, or a question that should have been left</td></tr>
      <tr><td>Board paper</td><td>Rarely touched</td><td>Derivations, labelled diagrams and case-based reading, once a week</td></tr>
      <tr><td>Practical file and viva</td><td>Not covered</td><td>Checks each record entry and rehearses viva questions</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Our articles on <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE coaching or a home
    tutor</a> and on <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET coaching or a
    home tutor</a> discuss the choice in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcp-targets">Which exam is the week built around?</h2>
  <p>
    Most chapters are common to every exam, but each rewards something different, so name the main target first.
  </p>
  <ul>
    <li><strong>CBSE Class 12 physics (042):</strong> 70 marks of theory in 33 compulsory questions, and 30 for practicals. Answers are written out; calculators are not allowed.</li>
    <li><strong>JEE Main, as set in 2026:</strong> physics is one third of Paper 1, or 25 questions, 5 of them with a numerical answer. A right answer earned four marks and a wrong one lost a mark.</li>
    <li><strong>JEE Advanced:</strong> in 2026 only the leading 2,50,000 JEE Main candidates were eligible. It favours problems that join several ideas.</li>
    <li><strong>NEET (UG), as set in 2026:</strong> 45 of the 180 questions, worth 180 of 720 marks, on pen and paper, with the same plus-four, minus-one marking.</li>
    <li><strong>Jharkhand board Class 12:</strong> set by the Jharkhand Academic Council; see its official website for the current scheme.</li>
  </ul>
  <p>
    Entrance syllabi come from the conducting body, not the school board, and can retain topics a board has dropped, so
    check the latest bulletin on nta.ac.in. Our <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics
    topic-wise plan</a> and <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics chapters</a>
    help set priorities, and the <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> and
    <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a> pages explain how we match.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcp-week">What might a coaching student's physics week look like?</h2>
  <p>
    Every family's timetable is different, but two home sessions a week usually cover the gaps. One workable pattern:
  </p>
  <ol>
    <li><strong>Session one, early in the week:</strong> the problems from last week's coaching sheet that were left undone or copied without understanding. The student solves; the tutor watches and stops at the first wrong step.</li>
    <li><strong>Between sessions:</strong> the student writes each fixed problem into a doubt notebook: the question, the first attempt, a one-line note of the mistake, and a clean solution a few days later.</li>
    <li><strong>Session two, later in the week:</strong> board work. One derivation, one diagram-based answer and one case-based question, marked the way a CBSE examiner would.</li>
    <li><strong>After each mock test:</strong> half a session on the lost marks, sorted into the three kinds above, with next week's plan built from that list.</li>
  </ol>
  <p>
    When a coaching day overruns, switching that evening to an online hour with the same tutor keeps the plan alive.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcp-theory">How are the 70 CBSE theory marks divided?</h2>
  <p>
    The 2026-27 sample paper keeps last session's design. The fourteen NCERT chapters fall into four marking blocks:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 physics theory for 2026-27: marking blocks, their marks, and where answers usually slip</caption>
    <thead>
      <tr><th scope="col">Block</th><th scope="col">Marks</th><th scope="col">Where answers usually slip</th></tr>
    </thead>
    <tbody>
      <tr><td>Electrostatics through to alternating current</td><td>33</td><td>Sign conventions and directions of fields and currents</td></tr>
      <tr><td>Optics and electromagnetic waves</td><td>18</td><td>Ray diagrams drawn without arrows or with the wrong focal side</td></tr>
      <tr><td>Dual nature, atoms and nuclei</td><td>12</td><td>Unit conversions in short numericals</td></tr>
      <tr><td>Semiconductor electronics</td><td>7</td><td>Revising transistors or logic gates, which are no longer in the syllabus</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The paper has 33 questions. Section A has sixteen one-mark items (twelve multiple-choice, four assertion–reason),
    B has five two-mark questions, C seven three-mark ones, D two case studies of four marks and E three long answers
    of five. Only about 38% of the marks reward recall; constants are supplied and no calculator is allowed. Class 12
    has one main board exam, and 2027 dates are awaited on cbse.gov.in. Frequently repeated derivations are gathered in
    our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a>, and the
    <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics tutor</a> page outlines a board-year plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcp-practical">Thirty practical marks that coaching leaves alone</h2>
  <p>
    The practical exam is the most predictable part of the subject. Two experiments bring 7 marks each, one from each
    section; the record is worth 5, an activity 3, the investigatory project 3 and the viva 5. The record must hold at
    least eight experiments, four per section, at least six activities, three per section, and the project report.
    Apparatus stays in the school lab, but at home a tutor can check that each entry has an aim, a diagram and an
    observation table, go through precautions and sources of error, and fire the kind of viva questions examiners like,
    such as why several readings are taken or what the slope of a graph stands for.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcp-jac">What about Class 12 physics on the Jharkhand board?</h2>
  <p>
    The Jharkhand Academic Council conducts the Intermediate (Class 12) examination with its own syllabus and papers,
    and revises them, so we give no pattern here; the council's website has the current version. Ask for a tutor who
    teaches from the prescribed book, explains in the language your child writes in, and still builds the diagram-first
    habit that JEE and NEET reward if either is on the plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcp-routes">Can a tutor reach you after coaching in these Ranchi localities?</h2>
  <p>
    Senior students often get home late, which pushes physics into the evening. Whether that slot holds depends on the
    tutor's route. Browse tutors by locality on our <a href="{{ url('/city/ranchi') }}">Ranchi page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>North-east and east</h3>
      <p>
        {!! $rcA('bariatu', 'Bariatu') !!} is mostly apartment buildings with three-bedroom flats, plus older houses in
        the housing colony. Bajra–Bariatu Road and Joda Talab Road are the links in; both get busy at peak hours, so a
        visit timed before the evening rush is steadier. {!! $rcA('kokar', 'Kokar') !!} mixes an industrial area with
        pockets such as Bank Colony and Vasuki Nagar. The Kantatoli flyover, opened in October 2024, has eased
        cross-town trips from this side; apartment blocks usually register visitors.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>North-west and south-west</h3>
      <p>
        {!! $rcA('ratu-road', 'Ratu Road') !!} runs north-west from the centre, with houses in the side lanes and
        flats behind the main road. The elevated corridor opened in July 2025 carries through traffic above it, though
        the ground road still fills at office hours. {!! $rcA('hatia', 'Hatia') !!} grew around a heavy engineering
        plant and its station, with staff colonies and low-rise homes, easy parking and doorstep access. A tutor coming
        from elsewhere can take the train and an auto for the last leg.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcp-courses">ISC, IB or IGCSE physics, and when to start</h2>
  <ul>
    <li><strong>IB Diploma:</strong> the current guide was first examined in May 2025. It is organised in five lettered themes, with no options and no Paper 3. The written papers make up 80% of the grade, and a scientific investigation the student designs alone makes up the other 20%; teaching time is 150 hours at SL and 240 at HL. See our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL guide</a>.</li>
    <li><strong>ISC:</strong> CISCE assesses practical work and a project alongside theory, and expects fuller reasoning than a one-line answer. Confirm the tutor teaches the syllabus for your exam year.</li>
    <li><strong>Cambridge IGCSE:</strong> Core or Extended. Students who move to an Indian board in Class 11 often need extra work on vectors and graphs.</li>
  </ul>
  <p>
    Class 11 is usually the cheapest year to begin, because the vectors, graphs and mechanics met then run through all
    of Class 12. See the <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics tutor</a> page and our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">guide to choosing a stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcp-fees">How much is a physics home tutor in Ranchi?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee, which reflects the target exam, their experience with it, how late the trip to your home is, and the number of
    weekly sessions. Online sessions with the same tutor may cost less. All fees are visible before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcp-book">How to ask for a physics shortlist in Ranchi</h2>
  <p>
    Tell us the class, board and main goal (board paper, JEE or NEET), the days your child attends coaching, your
    locality with a landmark, and the evenings that are free. We send two or three physics tutors with their fees, and
    you pick one for a free demo. If the fit is wrong, a second demo follows, and changing tutor later is free. When
    nobody suitable can come at that hour, we propose an online or mixed plan. NXTutors is based in Sector 66,
    Gurugram, and teaches online across India; the national <a href="{{ url('/physics-home-tutor') }}">physics home
    tutor</a> page covers other cities.
  </p>
  <p>
    Physics teachers living in Ranchi who want students close by can see current requests on the
    <a href="{{ url('/tuition-jobs/ranchi') }}">Ranchi tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
