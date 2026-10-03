{{--
  Long-form guide for the "physics home tutor Shimla" page (Classes 11 and 12:
  HP Board Plus Two, CBSE, ISC/IB/IGCSE, with JEE and NEET alongside).
  Byline in config: NXTutors Academic Team. Page writer (capitals wave 2,
  subjects), 3 Oct 2026. Local facts come only from
  database/seo-content/areas/shimla-research.json.
  HP Board facts only from hpbose.org (read 3 Oct 2026):
  - https://www.hpbose.org/Admin/Upload/Sylla.Phy.12.04.08.2025.pdf : Plus Two
    physics, one theory paper of 3 hours and 60 marks; 14 chapters (electric
    charges and fields to semiconductor electronics); practicals: at least 10
    experiments (5 from each section) and 8 activities (4 from each section)
    in the year, two demonstration experiments by the teacher with a record
    kept by students; practical exam: one experiment 5, two activities 3+3,
    record 3, demonstration record and viva 3, viva on experiments and
    activities 3; prescribed book published by HPBOSE, Dharamshala.
  - https://www.hpbose.org/ModelQuesPpr.aspx : Plus Two physics model
    question paper 2026-27 listed (scanned; its layout is not described here).
  - https://www.hpbose.org/SWMkg.aspx : step-wise marking, Plus Two physics
    (session 2024-25).
  Other exam facts reuse the checked statements in database/seo-content/blog:
  cbse-class-12-physics-strategies (70 + 30, 33 questions in sections A to E,
  blocks 33/18/12/7, about 38% recall, no calculators, practical 7+7/5/3/3/5,
  record minimums, transistors and logic gates out),
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026, JEE Advanced
  2026 eligibility), neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG
  2026) and -ib-physics-slhl-iaee (current IB guide). No coaching institute,
  school, college, society or people's names, no distances or travel times,
  only the allowed fee sentence. Weather is timing advice only.

  Area links render only when that Shimla area page exists and is active.
--}}
@php
  $shAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $shA = function (string $slug, string $label) use ($shAreaSlugs) {
      return in_array($slug, $shAreaSlugs, true)
          ? '<a href="' . e(url('/city/shimla/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide shmp-guide" aria-labelledby="shmpGuideTitle">
  <h2 id="shmpGuideTitle">Physics home tutor in Shimla: a second pair of eyes on every derivation and numerical</h2>

  <p class="nx-guide__lede">
    Physics in Classes 11 and 12 is where many Shimla students first feel that reading the chapter is not enough. The
    formulae look familiar, yet the numerical stalls at the second line, and the derivation that seemed clear in class
    falls apart on paper. A home tutor's value lies in watching that working closely and finding the step that breaks.
    The right person also depends on the paper: the Himachal Pradesh board's Plus Two exam, CBSE, ISC or an
    international course, often with JEE or NEET in view as well. NXTutors shortlists two or three physics tutors familiar
    with that exam and able to reach your part of the city; you see their fees first, and the first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#shmp-goal">Board or entrance</a> ·
    <a href="#shmp-hp">HP Board Plus Two</a> ·
    <a href="#shmp-cbse">CBSE theory</a> ·
    <a href="#shmp-lab">CBSE practical</a> ·
    <a href="#shmp-week">Beside coaching</a> ·
    <a href="#shmp-intl">ISC, IB, IGCSE</a> ·
    <a href="#shmp-areas">Five localities</a> ·
    <a href="#shmp-fees">Fees</a> ·
    <a href="#shmp-ask">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="shmp-goal">Board paper, JEE or NEET: which one leads the plan?</h2>
  <p>
    The chapters overlap heavily, but each exam pays for something different, so settle the main target at the first
    meeting and let practice follow it.
  </p>
  <dl>
    <dt><strong>HP Board Plus Two</strong></dt>
    <dd>A 60-mark theory paper of three hours, plus a 20-mark practical. Full written answers, laid out as the board's step-wise files expect.</dd>
    <dt><strong>CBSE Class 12</strong></dt>
    <dd>Theory worth 70, practical worth 30. Rewards complete derivations, neat diagrams and slow reading of case passages.</dd>
    <dt><strong>JEE Main</strong></dt>
    <dd>In 2026, physics supplied 25 of the 75 questions, five of them answered with a number; each right answer earned +4 and each wrong one cost 1. Speed on chained problems matters. For JEE Advanced 2026, eligibility was limited to the 2,50,000 highest-ranked JEE Main candidates.</dd>
    <dt><strong>NEET (UG)</strong></dt>
    <dd>In 2026, physics made up 45 questions (180 marks) of a 720-mark pen-and-paper paper, marked the same way. Rewards precise NCERT knowledge and disciplined guessing.</dd>
  </dl>
  <p>
    NTA publishes the entrance syllabi itself, and they can include material a school board has cut; check its latest
    information bulletin on nta.ac.in first. The <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE
    physics topic-wise plan</a> and <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics
    chapters</a> set priorities; matching for each exam is described on our <a href="{{ url('/physics-home-tutor/jee') }}">JEE</a> and
    <a href="{{ url('/physics-home-tutor/neet') }}">NEET</a> physics pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmp-hp">HP Board Plus Two physics: what the board's syllabus sets out</h2>
  <p>
    The Himachal Pradesh Board of School Education, based at Dharamshala, publishes its Plus Two physics syllabus on
    hpbose.org. The theory is one three-hour paper of 60 marks across 14 chapters, from electric charges and fields
    through optics and modern physics to semiconductor electronics, taught from a textbook the board publishes. The
    practical side is spelt out in detail. During the year each student performs at least ten experiments and eight
    activities, split equally between the syllabus's two sections, and keeps a record of two demonstration experiments
    the teacher performs with the class. The practical examination is marked like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>HP Board Plus Two physics practical examination: how the 20 marks are split, and what a tutor can prepare at home</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Marks</th><th scope="col">Preparation at home</th></tr>
    </thead>
    <tbody>
      <tr><td>One experiment from either section</td><td>5</td><td>Aim, circuit or ray diagram, observation table and sources of error, rehearsed aloud</td></tr>
      <tr><td>Two activities, one from each section</td><td>3 + 3</td><td>What each activity shows and how to state the result in one sentence</td></tr>
      <tr><td>Practical record of experiments and activities</td><td>3</td><td>Each entry checked for aim, diagram, table and result before submission</td></tr>
      <tr><td>Record of demonstration experiments, with a viva on them</td><td>3</td><td>The two demonstrations understood, not only copied</td></tr>
      <tr><td>Viva on experiments and activities</td><td>3</td><td>Practice questions: why repeat readings, what a graph's slope means</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The board also lists a 2026-27 Plus Two physics model paper and step-wise marking files on its site. A tutor for
    an HPBOSE student should teach from the board's book, use Hindi, English or both to suit your child, and mark
    long answers against those files. Our <a href="{{ url('/himachal-board-tutor-shimla') }}">HP Board tutor in
    Shimla</a> page covers every subject on the board.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmp-cbse">CBSE Class 12 physics: the four blocks behind 70 theory marks</h2>
  <p>
    For 2026-27 the sample paper keeps last session's design. Fourteen NCERT chapters fall into four marking blocks:
    33 marks for the electricity and magnetism run up to alternating current, 18 for optics with electromagnetic waves,
    12 for modern physics (dual nature, atoms, nuclei) and 7 for semiconductors, now without transistors or logic gates.
  </p>
  <p>
    There are 33 questions: 16 worth one mark each (12 of them multiple choice, the rest assertion–reason), then five of
    two marks, seven of three, two case-based questions of four and three long answers of five. Only about 38% of marks
    reward recall, constants are given, and calculators are not allowed. The 2027 dates will be published on
    cbse.gov.in. Recurring derivations are listed in our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a>; a full year plan is on the
    <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmp-lab">The CBSE practical: thirty marks a coaching batch never touches</h2>
  <p>
    Experiments account for 14 of the 30 marks (two at 7 apiece). The viva and the record are worth 5 each, while the
    activity and the investigatory project add 3 each. CBSE asks for a file holding eight or more experiments and six
    or more activities, half from each section, along with the project report. None of this needs a laboratory at home:
    the tutor reads the file entry by entry, quizzes precautions and error sources, and holds an occasional mock viva.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmp-week">A weekly physics hour that sits beside coaching</h2>
  <p>
    For a student who goes to an entrance batch, a home tutor should not teach the same chapter again. Three
    jobs are left over, and a steady hour can cover them in turn:
  </p>
  <ol>
    <li><strong>The unsolved pile.</strong> Problems skipped or copied without understanding pile up week by week; the tutor clears them one at a time, with the student solving aloud.</li>
    <li><strong>The board answer.</strong> One derivation or long answer written in full and marked, so board marks do not slip while entrance work takes over.</li>
    <li><strong>The mock-test review.</strong> Every dropped mark labelled: missing concept, slip, or a question worth skipping next time.</li>
  </ol>
  <p>
    A shared mistakes notebook links the three. Copy the question, leave the original attempt as it was, name the
    error in a line, then redo it cleanly a few days on: sketch first with directions marked, the principle stated,
    numbers substituted with their units, and a final sanity check on sign and size. Bring this book, or two recent
    coaching tests, to the free demo, and see whether the tutor finds the weak step quickly. Two articles weigh
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching against a home tutor for JEE</a>
    and <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">for NEET</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmp-intl">ISC, IB and IGCSE physics, and when to begin</h2>
  <ul>
    <li><strong>ISC.</strong> Theory sits beside assessed practical and project work, and answers need a chain of reasoning; make sure the tutor knows the syllabus for your child's exam year.</li>
    <li><strong>IB Diploma.</strong> The current guide, examined since May 2025, is organised in five themes. Exam papers make up 80% of the grade and an investigation the student designs makes up the remaining 20%; SL is taught over 150 hours and HL over 240. Our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">guide to IB physics SL and HL</a> has more.</li>
    <li><strong>IGCSE.</strong> Entered at Core or Extended; a student joining an Indian board for Class 11 often needs catching up on vectors and graphs.</li>
  </ul>
  <p>
    Fewer tutors teach these courses, so name yours at the start; an online specialist is a sound fallback. As for
    timing, the first term of Class 11 is generally the easiest moment to fix physics: mechanics leans on vectors and
    graphs that reappear all through Class 12. Read the <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11
    physics page</a> and our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">article on picking a Class 11
    stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmp-areas">Late-evening physics in five Shimla localities</h2>
  <p>
    Senior students often get home late, which pushes physics into the evening, and whether that slot holds depends on
    the tutor's route over the hills. Find tutors area by area on our <a href="{{ url('/city/shimla') }}">Shimla page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Evening physics tuition in five Shimla localities: the homes, the easiest tutors to match, and a timing tip</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Easiest tutors to match</th><th scope="col">Timing tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $shA('bharari', 'Bharari') !!}</td><td>Flats, builder floors and houses, newer buildings among older homes</td><td>Tutors from the central wards, often on foot or by local taxi</td><td>Avoid the evening rush near the Mall; tell a building guard the tutor's name</td></tr>
      <tr><td>{!! $shA('dhalli', 'Dhalli') !!}</td><td>Flats in apartment buildings beside older homes</td><td>Tutors from Sanjauli, through the tunnel</td><td>Leave extra margin in the apple trading season</td></tr>
      <tr><td>{!! $shA('chhota-shimla', 'Chhota Shimla') !!}</td><td>Older residences near state offices, some buildings with a guard at the gate</td><td>Tutors from New Shimla, Kasumpti, Sanjauli or the centre</td><td>Late afternoon or early evening, after the Secretariat rush</td></tr>
      <tr><td>{!! $shA('khalini', 'Khalini') !!}</td><td>Hillside homes; the last stretch may be steps</td><td>Tutors already teaching in New Shimla, Kanlog or Vikasnagar</td><td>Away from office traffic towards Chhota Shimla</td></tr>
      <tr><td>{!! $shA('totu', 'Totu') !!}</td><td>Homes around a local market, near the Jutogh cantonment</td><td>Tutors from Totu, Summer Hill or Boileauganj</td><td>Check how visitors are admitted near the cantonment; allow for monsoon fog</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    When a coaching class runs late, or snow and heavy rain make the trip unwise, swap that evening for an online hour
    with the same tutor; our <a href="{{ url('/online-tutor-shimla') }}">online tutor for Shimla</a> page explains how.
    The zone pages for <a href="{{ url('/city/shimla/zone/ridge-lakkar-bazar-jakhu') }}">Ridge, Lakkar Bazar and Jakhu</a>
    and <a href="{{ url('/city/shimla/zone/boileauganj-summer-hill-totu') }}">Boileauganj, Summer Hill and Totu</a> add
    more local detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmp-fees">What does a physics home tutor in Shimla charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Rates are the tutor's
    own. Board-only help is usually priced below entrance work, and a late evening climb to your home or several
    sessions a week will also show in the figure; a screen lesson from the same teacher can be cheaper. You see each
    fee before choosing a demo, and our <a href="{{ url('/blog/home-tuition-fees-shimla') }}">Shimla home tuition
    fees</a> article goes further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmp-ask">Asking us for physics tutors</h2>
  <p>
    Tell us the class and board, whether the board paper, JEE or NEET comes first, your coaching timetable, the
    locality with a landmark, and which evenings are open. A shortlist of two or three physics tutors arrives with fees
    attached; pick one for a <a href="{{ url('/demo-class') }}">free demo</a>. If it does not click, another demo
    follows, and switching later costs nothing. Where nobody suitable can come at your hour, we propose online lessons
    or a mix. NXTutors works from Sector 66, Gurugram, and its tutors teach online nationwide; see the national
    <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page, and pair this one with the Shimla
    <a href="{{ url('/maths-home-tutor-shimla') }}">maths</a> and
    <a href="{{ url('/chemistry-home-tutor-shimla') }}">chemistry</a> pages.
  </p>
  <p>
    Physics teachers based in Shimla can see current requests on the
    <a href="{{ url('/tuition-jobs/shimla') }}">Shimla tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
