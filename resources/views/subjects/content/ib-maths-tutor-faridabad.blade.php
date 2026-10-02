{{--
  Long-form guide for the "IB maths tutor Faridabad" page. Author: Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results are
  claimed for him. No schools, societies or other people are named; no school
  counts.

  Course and assessment facts are reworded from ib-maths-tutor-mumbai /
  ib-maths-tutor-gurgaon, which cite the IB Diploma Programme subject briefs
  for Mathematics: analysis and approaches and Mathematics: applications and
  interpretation and the IB's published curriculum update (ibo.org): two
  courses, each SL or HL; 150 h SL / 240 h HL; SL Papers 1 and 2 (40% each,
  1 h 30 min each); HL Papers 1 and 2 (30% each, 2 h each) and Paper 3 (20%,
  two extended problem-solving questions, GDC); exploration 20% at both levels,
  teacher-marked and IB-moderated, roughly 12 to 20 pages, criteria
  presentation, communication, personal engagement, reflection, use of
  mathematics; AA Paper 1 without a calculator, AI uses the GDC on all papers;
  revised courses first taught August 2027 and first examined May 2029 (AA
  Papers 1 and 2 to 100 marks from 110, Paper 3 to 50 marks from 55 with one
  hour; exploration kept with shared SL/HL criteria; 80/20 split kept); MYP
  maths four criteria. No other dates.

  Board mix only as the Faridabad hub view states it (most students CBSE;
  ICSE/ISC a loyal following; a smaller group study for the IB or Cambridge
  IGCSE; HBSE conducts Haryana's Class 10 and 12 exams; IB and Cambridge
  candidates sit the May series). No claim about where IB families live.
  Local detail only from database/seo-content/areas/faridabad-research.json,
  faridabad-zone-guides.json and zones/faridabad.json (Sector 17 villas and a
  few gated societies, Old Faridabad station; Sector 15A has Neelam Chowk
  Ajronda inside it; Sector 37 near Sarai and Badarpur Border, tutors from
  south Delhi; Sector 43 on the Surajkund–Badkhal Road, metro then auto up
  towards the hills; Sector 75 societies, Escorts Mujesar then auto across the
  canal; Sector 81 gated societies, Neelam Chowk Ajronda or Bata Chowk then
  auto; Badkhal Lake). Area links render only for active Faridabad areas.
  Fee wording is the approved sentence. FAQs: faqs/ib-maths-tutor-faridabad.php.
--}}
@php
  $fimSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $fimA = function (string $slug, string $label) use ($fimSlugs) {
      return in_array($slug, $fimSlugs, true)
          ? '<a href="' . e(url('/city/faridabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="fimGuideTitle">
  <h2 id="fimGuideTitle">IB maths tutor in Faridabad: matching the course, the level and the journey</h2>

  <p class="nx-guide__lede">
    In Faridabad the IB is followed by a smaller group of students than CBSE or ICSE, and IB maths narrows that group
    again: a Diploma student needs someone who teaches their exact course and level, not simply "maths up to Class
    12". That is why an IB maths search here is part subject and part logistics. The right specialist may live in the
    next sector, across Mathura Road, or in south Delhi on the other end of the Violet Line, and some weeks will work
    better online. Ajay Vatsyayan, the IB, IGCSE and ISC maths author on NXTutors, wrote this guide. It explains
    the four DP maths routes, how they are assessed, what changes with the revised courses, where a tutor may and may
    not help with the exploration, and how the journey looks from different parts of the city. For the wider picture, see
    <a href="{{ url('/maths-home-tutor-faridabad') }}">maths home tutors in Faridabad</a> and the
    <a href="{{ url('/ib-tutor-faridabad') }}">IB tutors in Faridabad</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#fim-course">AA or AI, SL or HL</a> ·
    <a href="#fim-papers">How it is assessed</a> ·
    <a href="#fim-revised">The revised courses</a> ·
    <a href="#fim-ia">The exploration</a> ·
    <a href="#fim-arrive">Coming from CBSE, HBSE or ICSE</a> ·
    <a href="#fim-find">Finding a specialist</a> ·
    <a href="#fim-reach">Travel by zone</a> ·
    <a href="#fim-mode">Home or online</a> ·
    <a href="#fim-year">The two DP years</a> ·
    <a href="#fim-demo">The demo</a> ·
    <a href="#fim-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="fim-course">Start with the course name, not the subject</h2>
  <p>
    Every DP student takes one maths course, chosen from two, and each is offered at Standard Level and Higher Level.
    That makes four combinations, and someone excellent at one of them can be ordinary at the next.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The four IB Diploma maths routes in brief</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Character</th><th scope="col">Often chosen by students heading towards</th></tr>
    </thead>
    <tbody>
      <tr><td>Analysis and Approaches (AA) SL</td><td>Algebra, functions and calculus done by hand; exact answers; one paper without a calculator</td><td>Courses that need solid algebra but not the heaviest maths</td></tr>
      <tr><td>AA HL</td><td>The same approach in more depth, with proof and longer calculus chains</td><td>Engineering, physics, mathematics, computer science</td></tr>
      <tr><td>Applications and Interpretation (AI) SL</td><td>Modelling and statistics, with the graphic display calculator (GDC) on every paper</td><td>Social sciences, biology, business, design</td></tr>
      <tr><td>AI HL</td><td>Wider modelling, statistics and technology use; demanding in its own way</td><td>Economics, data-heavy or quantitative social science</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Put the course and level first in any request you send. Families still deciding can read our
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA, AI, SL and HL comparison</a>, and the national
    <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page covers the syllabus content in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fim-papers">How DP maths is assessed today</h2>
  <p>
    SL is planned by the IB as a 150-hour course and HL as a 240-hour one. At both levels the written exams carry
    80% of the grade, and the exploration, which the school marks, carries 20%.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Current assessment for both maths courses</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1</td><td>1 hour 30 minutes, 40%</td><td>2 hours, 30%</td></tr>
      <tr><td>Paper 2</td><td>1 hour 30 minutes, 40%</td><td>2 hours, 30%</td></tr>
      <tr><td>Paper 3</td><td>No Paper 3 at SL</td><td>20%: a pair of long problem-solving questions, GDC allowed</td></tr>
      <tr><td>Exploration</td><td>20%</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The calculator rule is the practical difference between the courses: in AA, Paper 1 is sat without one; in AI the
    GDC is used throughout. An AA student who has leaned on the calculator for two years finds Paper 1 hard, and an
    AI student who cannot drive the GDC quickly runs out of time. Paper 3 is the HL piece that most needs early
    practice, since each question walks from a familiar start to a result the student has never met.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fim-revised">Which version of the course is your child on?</h2>
  <p>
    New versions of AA and AI start in classrooms in August 2027, with the first exams in May 2029; both courses and
    both levels continue. For AA the IB lists shorter papers (Papers 1 and 2 drop from 110 marks to 100; Paper 3 drops
    from 55 to 50 marks and is given one hour), the exploration kept as the internal assessment but judged on criteria
    common to SL and HL, and no change to the weighting of exams against exploration.
  </p>
  <p>
    So, by start date: DP1 from August 2026 means the existing syllabus and May 2028 exams, while DP1 from
    August 2027 onwards means the new syllabus. Put the exam session in your request so the tutor works from the
    right past papers and markschemes from week one.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fim-ia">The exploration and the limits on outside help</h2>
  <p>
    The exploration is the student's own mathematical investigation, about 12 to 20 pages by the IB's guidance,
    which the school marks and the IB then moderates. The criteria cover how the work is presented and communicated,
    how personally the student engages with it, the quality of reflection, and how well the mathematics is used. At 20% of the grade, it can move a final result by a grade.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Within the rules</h3>
  <p>
    Teaching any mathematics the student's chosen idea calls for, syllabus or not. Prompting with questions so a wide
    interest becomes a manageable aim. Going through the criteria with the IB's published samples. Pointing out, without
    rewriting it, that a passage does not yet make sense.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Outside the rules</h3>
  <p>
    Picking the question for the student, drafting or polishing their sentences, producing calculations, graphs or
    models, or correcting the draft for them. The IB treats such help as an integrity breach that can cost the
    diploma, and schools expect to be told when a student has private tuition.
  </p>
    </div>
  </div>
  <p>
    Faridabad offers questions a student could genuinely own: how the gaps between Violet Line trains change through
    the day, how water levels at Badkhal Lake have varied, the queue pattern at a toll plaza or a busy flyover, or how
    the numbered sectors of Greater Faridabad filled up over time. A small question carried through carefully tends to score
    better than a grand one that runs out of steam.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fim-arrive">Arriving in DP maths from CBSE, HBSE, ICSE, IGCSE or the MYP</h2>
  <p>
    Students reach the Diploma by different roads, and each road leaves a different gap:
  </p>
  <ul>
    <li><strong>CBSE or Haryana board.</strong> Usually quick with standard methods, less used to questions that give little guidance and expect written reasoning; AI students also need GDC fluency from scratch.</li>
    <li><strong>ICSE.</strong> Good habits of showing working; the GDC and modelling are the new parts.</li>
    <li><strong>IGCSE Extended.</strong> Familiar algebra, but the pace of DP1 is much faster, and AA's non-calculator paper exposes weak manipulation.</li>
    <li><strong>MYP.</strong> At ease with open-ended tasks, because MYP maths assesses four strands (knowledge and understanding, pattern investigation, communication, and maths applied to real situations), but long timed papers are unfamiliar.</li>
  </ul>
  <p>
    Most of these gaps shrink with a few weeks of bridging work in algebra, functions and trigonometry, marked to IB
    markschemes, before DP1 or early in it. A bridging plan for board-switchers is in our
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">CBSE to IB or IGCSE guide</a>, and it works for
    any of these routes; Cambridge students can also read
    <a href="{{ url('/igcse-maths-tutor-faridabad') }}">IGCSE maths tutors in Faridabad</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fim-find">Why the right IB maths tutor may not be the nearest one</h2>
  <p>
    Because the IB is a smaller group in Faridabad, the tutor who fits your child's exact course and level may not
    live close by, and not every IB tutor teaches all four routes. We therefore look in widening circles: first a tutor who can reach your sector for the course and
    level you need, then one further along the Violet Line, then an online specialist. The order matters less than the
    fit. A tutor who has taught AA HL Paper 3 is worth an extra twenty minutes of travel; a tutor who has only taught
    CBSE Class 12 is not the right person for the exploration, however close they live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fim-reach">How IB maths tutors reach different parts of Faridabad</h2>
  <ul>
    <li><strong><a href="{{ url('/city/faridabad/zone/central-sectors-mathura-road') }}">Central sectors</a>:</strong> {!! $fimA('sector-15a', 'Sector 15A') !!} has Neelam Chowk Ajronda station inside it, so a tutor from anywhere on the line can walk in; {!! $fimA('sector-17', 'Sector 17') !!} is mostly houses and villas with a few gated societies, reached by auto from Old Faridabad station.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/sectors-28-31-37') }}">Sectors 28 to 31 and 37</a>:</strong> {!! $fimA('sector-37', 'Sector 37') !!} sits on the Delhi border near Sarai and Badarpur Border stations, which puts tutors from south Delhi within easy metro reach.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/surajkund-sainik-colony') }}">Surajkund and Sainik Colony</a>:</strong> {!! $fimA('sector-43', 'Sector 43') !!} lies on the Surajkund–Badkhal Road; tutors come by metro to NHPC Chowk, Mewla Maharajpur or Sector 28 and finish by auto up towards the hills, so agree the last leg in advance.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-75-80') }}">Greater Faridabad, Sectors 75 to 80</a>:</strong> {!! $fimA('sector-75', 'Sector 75') !!} is mostly gated societies and builder floors; tutors usually come to Escorts Mujesar and take an auto across the canal.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-81-89') }}">Greater Faridabad, Sectors 81 to 89</a>:</strong> {!! $fimA('sector-81', 'Sector 81') !!} is dominated by gated societies; Neelam Chowk Ajronda or Bata Chowk is the usual station, and the evening canal crossing is the slow part.</li>
  </ul>
  <p>
    <a href="{{ url('/city/faridabad/zone/nit-old-faridabad') }}">NIT and Old Faridabad</a> and
    <a href="{{ url('/city/faridabad/zone/ballabhgarh-southern-sectors') }}">Ballabhgarh</a> are also on the Violet
    Line. Every locality is listed on the <a href="{{ url('/city/faridabad') }}">Faridabad home tutors</a> page, and
    the <a href="{{ url('/blog/greater-faridabad-neharpar-tuition-guide') }}">Greater Faridabad tuition guide</a>
    covers society entry and the canal crossings.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fim-mode">Home, online or a mix for IB maths?</h2>
  <p>
    For IB maths in Faridabad the realistic question is usually the mix. Three things decide it:
  </p>
  <ol>
    <li><strong>Non-calculator algebra.</strong> AA students benefit from a tutor watching each line. Online works if the notebook sits under a second camera rather than being held up to the screen.</li>
    <li><strong>The GDC.</strong> For AI work and HL Paper 3, the tutor has to watch the calculator itself: a screen-shared emulator does this, and so does a phone propped above the keys.</li>
    <li><strong>The route.</strong> If the closest-fitting tutor is across the canal or in Delhi, one weekend home session with weekday sessions online keeps the week intact.</li>
  </ol>
  <p>
    Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online tutoring</a> article sets out the
    general trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fim-year">How sessions are used across DP1 and DP2</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical rhythm for IB maths tuition</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Focus</th><th scope="col">Sessions</th></tr>
    </thead>
    <tbody>
      <tr><td>Summer before DP1, or its opening weeks</td><td>Repairing algebra, functions and trigonometry; learning the GDC if on AI</td><td>A short intensive spell</td></tr>
      <tr><td>DP1</td><td>Staying level with the class; school tests reviewed against IB markschemes; HL students meet Paper 3 style early</td><td>One or two a week</td></tr>
      <tr><td>While the exploration is written</td><td>Maths the idea depends on; what the criteria reward; the student does all the writing</td><td>Usual rhythm, plus one if the maths is new</td></tr>
      <tr><td>DP2 to mocks</td><td>Mixed past-paper questions; an error log by topic</td><td>One or two a week</td></tr>
      <tr><td>Before the May exams</td><td>Full timed papers by type and markscheme marking</td><td>Two or three a week</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    IB candidates sit the May series, which is a different season from the CBSE and Haryana board exams your
    neighbours are planning around, so plan from the school's own calendar.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fim-demo">Testing a tutor at the free IB maths demo</h2>
  <ol>
    <li><strong>Did the tutor ask first?</strong> Course, level and exam session should come before any teaching.</li>
    <li><strong>Command terms.</strong> Ask the difference between "write down" and "show that", and when "hence" forbids another method; a seasoned IB tutor answers without pausing.</li>
    <li><strong>Marking.</strong> Give the tutor a marked school test and see whether they separate method, accuracy and follow-through marks.</li>
    <li><strong>The calculator.</strong> AA: do they insist on non-calculator practice? AI: can they work the GDC at speed?</li>
    <li><strong>Paper 3.</strong> For HL, ask how they introduce it in DP1.</li>
    <li><strong>The exploration line.</strong> You want to hear that the mathematics is theirs to teach and the writing is the student's.</li>
    <li><strong>The route.</strong> Ask how they will travel to your sector and what the back-up is on a jammed evening.</li>
  </ol>
  <p>
    If the demo misses on these, tell us and the next matched tutor gives their own free demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fim-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. What you pay depends on the course and
    level, the distance the tutor covers and the number of weekly sessions; every fee is visible on the profile before
    you book a demo. More in the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-faridabad') }}">Faridabad tuition fees</a>.
  </p>
  <p>
    Write to us with the course and level, the May session your child sits, the topics that feel shaky, your sector
    and two or three possible slots. You get two or three matched tutors, a <a href="{{ url('/demo-class') }}">free
    first class</a> and a free switch if the fit is wrong later. Everyone who joins as a tutor is put through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> first, and you are welcome to look through
    <a href="{{ url('/tutors') }}">tutor profiles</a> yourself. Science students can also see
    <a href="{{ url('/ib-physics-tutor-faridabad') }}">IB physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-faridabad') }}">IB and IGCSE chemistry</a> tutors in Faridabad.
  </p>
  </section>

  </div>
</article>
