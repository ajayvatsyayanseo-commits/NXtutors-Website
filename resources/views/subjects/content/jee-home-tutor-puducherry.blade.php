{{--
  Puducherry page for JEE home tutors (capitals wave, phase 2, subjects-b, 3 Oct 2026).
  The exam itself is on the national hub (/jee-home-tutor); this page is about JEE
  tuition in Puducherry town: students who began on the state syllabus and now sit
  CBSE, Tamil and English in the same lesson, the four zones, the rail line between
  Villianur and Puducherry stations, and Class 11, Class 12 and repeat-year plans.
  Byline: NXTutors Academic Team.

  Exam facts only as stated on the national page, which cites (fetched 1 Oct 2026):
  - NTA, JEE (Main) 2026 Information Bulletin (jeemain.nta.nic.in): Paper 1 CBT,
    3 hours, maths/physics/chemistry, 20 MCQ + 5 numerical each, 75 questions,
    300 marks, +4/-1 in both sections; two sessions; 13 languages; no age limit;
    Advanced eligibility by rank among Paper 1 candidates.
  - JEE (Advanced) 2026 Information Brochure (jeeadv.ac.in): two compulsory
    three-hour papers; English and Hindi; at most two attempts in consecutive years.
  Syllabus situation in Puducherry only from the research file's board_facts:
  - https://schooledn.py.gov.in/CBSE/cbsetrg.html (orientation, April-May 2024,
    "Ensuring a smooth swap from State Syllabus to CBSE Syllabus").
  - https://schooledn.py.gov.in/Exams/sslcResult.html (SSLC to 2024, CBSE 10 from
    2025; +2 to 2024, CBSE 12 from 2025; separate state-board analyses in 2026).
  The state-board syllabus followed in some private schools is not named and no
  pattern is stated. Local detail only from database/seo-content/areas/
  puducherry-research.json and the /city/puducherry hub. No schools, colleges,
  universities, coaching institutes, places of worship or people named. Area links
  render only for active Puducherry areas.
--}}
@php
  $pyjeSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pyjeA = function (string $slug, string $label) use ($pyjeSlugs) {
      return in_array($slug, $pyjeSlugs, true)
          ? '<a href="' . e(url('/city/puducherry/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="pyjeGuideTitle">
  <h2 id="pyjeGuideTitle">JEE home tutor in Puducherry: one steady specialist for a compact town</h2>

  <p class="nx-guide__lede">
    Puducherry is small enough that a good maths or physics tutor can reach most homes on a two-wheeler, yet the
    town is split in ways that matter for a weekly slot: the old Boulevard Town, Oulgaret's colonies to the north and
    west, Villianur on the rail line inland and Kalapet on its own along the East Coast Road. JEE families here face two
    further questions. Students at government schools who are now in Class 11 or 12 began on the state
    syllabus and now sit CBSE, and many think through a hard problem in Tamil while the paper is set in English.
    This page shows how a home tutor fits around those facts, which slots tend to survive the year, how to divide
    subjects between home and online, and what each stage of preparation needs. For the exam in full, read the
    national <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pyje-paper">The papers</a> ·
    <a href="#pyje-switch">After the CBSE switch</a> ·
    <a href="#pyje-role">The tutor's role</a> ·
    <a href="#pyje-language">Tamil and English</a> ·
    <a href="#pyje-map">Six localities</a> ·
    <a href="#pyje-week">The week</a> ·
    <a href="#pyje-split">Home or online</a> ·
    <a href="#pyje-years">By year</a> ·
    <a href="#pyje-trial">The demo</a> ·
    <a href="#pyje-cost">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pyje-paper">What the two JEE papers ask, briefly</h2>
  <p>
    The National Testing Agency conducts JEE (Main). In the 2026 bulletin, Paper 1 was a three-hour computer test of
    75 questions: 25 in each of mathematics, physics and chemistry, for a total of 300 marks. Each subject had 20
    multiple-choice items and 5 with a numerical answer. A correct response earned four marks and a wrong one cost a
    mark in both kinds, so careless guessing is expensive. Main ran in two sessions, and the higher score counted. The
    highest-ranked Paper 1 candidates qualified for JEE (Advanced), which the IITs set as two compulsory papers of three
    hours each, in English or Hindi. Details shift each year, so treat jeemain.nta.nic.in and jeeadv.ac.in as the only
    authority.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyje-switch">A class that moved from the state syllabus to CBSE</h2>
  <p>
    Puducherry has no school board of its own. In April and May 2024 the Directorate of School Education ran orientation
    sessions for heads of schools, inspecting officers and teachers on what it called a smooth swap from the state
    syllabus to the CBSE syllabus. Its result pages list Class 10 results as SSLC up to 2024 and as CBSE 10 from 2025,
    and Class 12 results as +2 up to 2024 and as CBSE 12 from 2025. Some private schools still follow the state-board
    SSLC and +2 syllabus, and from 2026 the Directorate also publishes separate state-board analyses for them.
  </p>
  <p>
    For JEE this is mostly good news, because the NTA syllabus follows NCERT content and CBSE teaches from NCERT. The
    catch is the student who did Classes 6 to 10 on the older books and met NCERT only in Class 11. Topics may have
    been taught in a different order or at a different depth, and the jump in Class 11 physics and maths arrives together
    with an unfamiliar textbook. A tutor should start by checking a handful of base skills rather than assuming them.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Quick checks a JEE tutor should run in the first two weeks</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">What to test</th><th scope="col">If it is shaky</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>Algebraic manipulation, factorising, graphs of simple functions, trigonometric ratios</td><td>Two or three sessions of repair before calculus begins</td></tr>
      <tr><td>Physics</td><td>Units, vectors, reading a motion graph, drawing a free-body diagram</td><td>Rebuild with NCERT examples before coaching-level problems</td></tr>
      <tr><td>Chemistry</td><td>Mole calculations, balancing equations, the periodic table's trends</td><td>Short daily drills; online works well for these</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Students still on the state-board +2 syllabus need a written map of their chapters against the NTA units, made in
    the first month, and the objective and numerical practice that a written board paper does not demand. Take that
    board's formats only from its own notices, through the school.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyje-role">What should the tutor be responsible for?</h2>
  <p>
    A home tutor is worth the fee only with a defined role. Decide which of these your child needs, and say so in the
    request:
  </p>
  <ul>
    <li><strong>The whole plan.</strong> With no coaching batch, the tutor writes the chapter calendar from the NTA syllabus, sets timed papers and reviews them. Ask for the calendar on paper in week one.</li>
    <li><strong>Backing a batch.</strong> With coaching, the tutor clears the backlog of skipped sheet questions and test mistakes each week, and teaches nothing the batch has already taught well.</li>
    <li><strong>One weak subject.</strong> Concentrated hours on the subject pulling the total down, often physics, instead of thin help in all three.</li>
    <li><strong>The board year in Class 12.</strong> A switch from objective drilling to full written answers before the CBSE theory papers, so neither exam is sacrificed.</li>
  </ul>
  <p>
    Whatever the role, ask for a short error log kept in the notebook: the question, why it went wrong and the fix.
    Reading it back before each test does more than another chapter of new problems.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyje-language">Thinking in Tamil, answering in English</h2>
  <p>
    The Puducherry hub notes that many children read their textbooks in English and work through hard ideas in Tamil.
    That is not a problem to fix; it is a resource. A tutor who can explain why the normal force changes on an incline
    in Tamil, then make the student write the solution with English terms and symbols, gets understanding and exam
    habit in the same hour. Check the current JEE (Main) bulletin's language list before choosing the paper's medium,
    and practise in that medium from Class 11 so no vocabulary is new on the day.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyje-map">How tutors reach six Puducherry localities</h2>
  <p>
    The town is compact, but a slot that clashes with college hours or a crowded junction will not last a school
    year. Start with tutors from your own side.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Getting a JEE tutor to the door in six localities</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">How tutors usually come</th><th scope="col">Plan for</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $pyjeA('lawspet', 'Lawspet') !!}</td><td>Two-wheeler from nearby colonies, or along the East Coast Road</td><td>Airport Road and College Road fill when schools and colleges open and close; book outside those hours</td></tr>
      <tr><td>{!! $pyjeA('karuvadikuppam', 'Karuvadikuppam') !!}</td><td>From Lawspet or from Muthialpet along Karuvadikuppam Road</td><td>Evening build-up on the main road; fix a weekday time with some margin</td></tr>
      <tr><td>{!! $pyjeA('kalapet', 'Kalapet') !!}</td><td>Two-wheeler or bus up the East Coast Road</td><td>Campus residences set their own visitor rules; online widens the choice a great deal here</td></tr>
      <tr><td>{!! $pyjeA('reddiarpalayam', 'Reddiarpalayam') !!}</td><td>Two-wheeler or bus; Puducherry and Villianur stations are on the same line</td><td>A colony name plus a bus-stop landmark on day one</td></tr>
      <tr><td>{!! $pyjeA('saram', 'Saram') !!}</td><td>Easy by bus, being close to the main bus stand</td><td>Avoid the office-hour peak at the junction</td></tr>
      <tr><td>{!! $pyjeA('villianur', 'Villianur') !!}</td><td>Bus, two-wheeler or the train to Villianur station in Sulthanpet</td><td>Temple festival days crowd the centre; move those sessions online</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Each zone has its own page: <a href="{{ url('/city/puducherry/zone/lawspet-ecr') }}">Lawspet and ECR</a>,
    <a href="{{ url('/city/puducherry/zone/reddiarpalayam-villianur') }}">Reddiarpalayam and Villianur</a>,
    <a href="{{ url('/city/puducherry/zone/heritage-town') }}">Heritage Town</a> and
    <a href="{{ url('/city/puducherry/zone/mudaliarpet-ariyankuppam') }}">Mudaliarpet and Ariyankuppam</a>. All
    localities are listed on the <a href="{{ url('/city/puducherry') }}">Puducherry tutors page</a>, and the
    <a href="{{ url('/blog/puducherry-home-tuition-guide') }}">Puducherry home tuition guide</a> walks through each zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyje-week">A workable JEE week in Puducherry</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>One way to place tutor time around school and self-study</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">What happens</th><th scope="col">Format</th></tr>
    </thead>
    <tbody>
      <tr><td>Two weekday evenings</td><td>New problem types in the weakest subject; the student solves, the tutor questions</td><td>At home</td></tr>
      <tr><td>One short weekday slot</td><td>Doubts from the week's sheets and the error log</td><td>Online, 30 to 45 minutes</td></tr>
      <tr><td>Weekend morning</td><td>A timed part-paper or full paper, sat alone</td><td>At home, without the tutor</td></tr>
      <tr><td>Weekend afternoon</td><td>Review of every lost mark, sorted into concept, calculation and guess</td><td>Home or online</td></tr>
      <tr><td>Year-end rainy days, festival days</td><td>The usual slot at the usual time</td><td>Online, agreed in advance</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The hub's advice on the heaviest rain late in the year applies here: settle in the first week which sessions
    move online on a wet day, so nobody has to decide at the last minute.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyje-split">Which subjects at home, which online?</h2>
  <ul>
    <li><strong>Physics at home.</strong> The hard moment is choosing the principle and setting up the equations; a tutor beside the notebook sees exactly where the student hesitates.</li>
    <li><strong>Mathematics at home, reviews online.</strong> Long working belongs on paper at a table, but going through a timed paper question by question works well on a shared screen.</li>
    <li><strong>Chemistry often online.</strong> Organic mechanisms and inorganic facts suit short, frequent recall checks; physical chemistry numericals can come home if they lag.</li>
  </ul>
  <p>
    For Advanced-level problem solving, the right specialist may live outside Puducherry altogether, and an online tutor
    elsewhere in India is a sensible choice. Our <a href="{{ url('/online-tutor-puducherry') }}">online tutors for
    Puducherry</a> page explains how that works, and the <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or
    online tutor</a> comparison sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyje-years">Class 11, Class 12 and a repeat year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where a Puducherry JEE tutor should put the effort</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Main work</th><th scope="col">Local note</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>Mechanics, functions and calculus basics, mole concept; base-skill repair first</td><td>Most important for students meeting NCERT for the first time after the switch</td></tr>
      <tr><td>Class 12</td><td>New chapters, Class 11 revision in rounds, full papers before the first session</td><td>Written CBSE answers need their own weeks before the board theory papers</td></tr>
      <tr><td>Repeat year</td><td>Diagnose last year's papers, rebuild weak chapters, many timed papers</td><td>Daytime slots open up the widest choice of tutors across town</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Before a repeat year, read the eligibility rules in the current bulletin and brochure; in 2026 Main had no age
    limit, and Advanced allowed at most two attempts in consecutive years. For subject-level plans, see the
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> page and our topic guides for
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">physics</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">chemistry</a>. The Puducherry
    <a href="{{ url('/maths-home-tutor-puducherry') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-puducherry') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-puducherry') }}">chemistry</a> pages cover the school side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyje-trial">What to watch in the free demo</h2>
  <ol>
    <li>Before solving anything, did the tutor ask about the school syllabus, any batch and the last test score?</li>
    <li>Handed three questions your child could not do, did the tutor find the stuck point and let your child finish?</li>
    <li>When your child hesitated, could the tutor switch to Tamil or simpler English and then return to exam terms?</li>
    <li>Did they explain how negative marking should change the way your child attempts a paper?</li>
    <li>Can they come at the same hour every week from where they live, outside the busy road hours?</li>
  </ol>
  <p>
    If not, we arrange the next demo from your shortlist, and switching later is free. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> lists more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyje-cost">Fees and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets a personal fee, which you see before the demo. The <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-puducherry') }}">home tuition fees in Puducherry</a> explain
    what to ask about hours and travel.
  </p>
  <p>
    Send the class, the syllabus the school follows now, the target, subjects, any batch timings and your locality
    with a landmark. You get two or three matched tutors and book a <a href="{{ url('/demo-class') }}">free demo
    class</a>. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; you can also
    browse <a href="{{ url('/tutors') }}">tutor profiles</a>. For medical entrance, see the
    <a href="{{ url('/neet-home-tutor-puducherry') }}">NEET home tutor in Puducherry</a> page. Teachers can look at
    <a href="{{ url('/tuition-jobs/puducherry') }}">Puducherry tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
