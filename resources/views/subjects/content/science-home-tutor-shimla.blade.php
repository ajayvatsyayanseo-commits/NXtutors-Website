{{--
  Long-form guide for the "science home tutor Shimla" page (Classes 6 to 10:
  HP Board Matric, CBSE and ICSE). Byline in config: Aaditya Kashyap; role
  statement only, no anecdotes. Page writer (capitals wave 2, subjects),
  3 Oct 2026. Local facts come only from
  database/seo-content/areas/shimla-research.json (zone_facts and area
  "about" texts).
  HP Board facts only from hpbose.org (read 3 Oct 2026):
  - https://www.hpbose.org/Admin/Upload/Sylla.Sci.10.04.08.2025.pdf : Class 10
    Science and Technology; four units (Chemical substances: 10 questions,
    19 marks; World of living: 10 questions, 19 marks; Natural phenomena and
    effects of current: 9 questions, 18 marks; Natural resources: 2 questions,
    4 marks); 13 chapters; practical 20 marks, 14 listed experiments
    (physics 1-5, chemistry 6-9, biology 10-14); prescribed books Vigyan and
    Science published by the HP Board of School Education.
  - https://www.hpbose.org/Admin/Upload/9_2026_12_9_202610thScienceMQP2026-27.pdf :
    Model Question Paper Class X Science & Technology 2026-27: 3 hours,
    60 marks; Section A Q1-12 objective, one mark each; B Q13-21 two marks;
    C Q22-26 three marks; D Q27-29 five marks; labelled diagrams wherever
    necessary; instructions and questions in English and Hindi.
  - https://www.hpbose.org/SWMkg.aspx : step-wise marking files (2024-25),
    Matric science among them.
  CBSE facts reuse the checked statements in database/seo-content/blog:
  cbse-class-10-science-notes (80 + 20, internal 5/5/5/5, unit marks, 39
  questions by type, 50/30/20 competency split, school-assessed topics,
  14 experiments) and cbse-class-10-board-year-plan-gurgaon (two Class 10
  exams); Class 9 Exploration and ICSE three-paper science as already stated
  on the existing city science pages. No school, college, society or
  people's names, no distances or travel times, only the allowed fee
  sentence. Weather is timing advice only.

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

<article class="nx-guide shms-guide" aria-labelledby="shmsGuideTitle">
  <h2 id="shmsGuideTitle">Science home tutor in Shimla for Classes 6 to 10: one teacher for three sciences, from the right book</h2>

  <p class="nx-guide__lede">
    School science in Shimla arrives through different books. A child on the Himachal Pradesh board studies from the
    board's own Vigyan or Science textbook; a CBSE child uses NCERT; an ICSE school picks its own texts within the
    CISCE syllabus. By Class 10, all three routes demand the same things: balanced equations, ray and circuit
    diagrams, labelled biology figures and numericals with units. A good science tutor works from whichever book is
    on the desk, keeps a fixed after-school hour through the wet and cold months, and builds the written answers the
    board will mark. We put forward two or three tutors like that, with fees on view from the start, and the
    first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#shms-hp">HP Board science</a> ·
    <a href="#shms-prac">The practical</a> ·
    <a href="#shms-cbse">CBSE Class 10</a> ·
    <a href="#shms-years">Classes 6 to 9</a> ·
    <a href="#shms-icse">ICSE</a> ·
    <a href="#shms-habits">Marks in the details</a> ·
    <a href="#shms-areas">Five localities</a> ·
    <a href="#shms-fees">Fees</a> ·
    <a href="#shms-start">Starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="shms-hp">How is HP Board Class 10 science examined?</h2>
  <p>
    The CBSE and ICSE science advice here is written by Aaditya Kashyap; the HP Board details below come straight
    from the board's own documents on hpbose.org. The Matric course is called Science and Technology. Its syllabus
    groups 13 chapters into four units and states how many questions and marks each unit brings:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>HP Board Class 10 Science and Technology: units, chapters, and the questions and marks the syllabus assigns</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Chapters</th><th scope="col">Questions</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical substances: nature and behaviour</td><td>Chemical reactions and equations; acids, bases and salts; metals and non-metals; carbon and its compounds</td><td>10</td><td>19</td></tr>
      <tr><td>World of living</td><td>Life processes; control and coordination; how organisms reproduce; heredity</td><td>10</td><td>19</td></tr>
      <tr><td>Natural phenomena and effects of current</td><td>Light; the human eye and the colourful world; electricity; magnetic effects of current</td><td>9</td><td>18</td></tr>
      <tr><td>Natural resources</td><td>Our environment</td><td>2</td><td>4</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The board's 2026-27 model question paper is a three-hour, 60-mark paper in four sections. Questions 1 to 12 are
    one-mark objective items; 13 to 21 are very short answers of two marks; 22 to 26 are short answers of three marks;
    and 27 to 29 are long answers of five marks. The instructions ask for labelled diagrams wherever they help, and
    the paper is printed in English and Hindi. Three units carry almost equal weight, so a tutor who lets biology or
    electricity slide is giving away a third of the paper. The board also posts step-wise marking files that show how
    marks are split inside an answer; they show exactly how much a long answer should say. Check the
    current versions on hpbose.org, and see our <a href="{{ url('/himachal-board-tutor-shimla') }}">HP Board tutor in
    Shimla</a> page for the other subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shms-prac">The 20-mark practical on the HP Board</h2>
  <p>
    The Matric syllabus attaches 20 practical marks and lists 14 experiments. Five are physics: focal length of
    concave and convex mirrors, the path of light through a glass slab, current against potential difference, and
    resistors in series and in parallel. Four are chemistry: pH of common solutions; acids and bases tested with litmus,
    zinc and sodium carbonate; the reactivity of four metals in salt solutions; and the properties of ethanoic acid. Five
    are biology, from a stomata peel and respiration to photosynthesis, binary fission and budding, and water
    absorbed by raisins.
  </p>
  <p>
    The apparatus stays at school, but a tutor at home can make each experiment stick: the aim in one line, a neat
    diagram, the observation table drawn before any reading is taken, and the reason behind the result. That same
    understanding answers theory questions built on experiments, so the hour is never wasted.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shms-cbse">CBSE Class 10 science: what the board paper rewards</h2>
  <p>
    CBSE's written paper lasts three hours and is out of 80. A further 20 marks come from school, in four equal
    parts: periodic tests, multiple assessment, the portfolio and practical-based enrichment. Unit weights for
    2026-27 are:
  </p>
  <ul>
    <li>Chemical Substances and World of Living, 25 each.</li>
    <li>Effects of Current, 13.</li>
    <li>Natural Phenomena (light, the eye and colour), 12.</li>
    <li>Our Environment, 5.</li>
  </ul>
  <p>
    In the sample paper, the opening block of 20 questions is worth a mark apiece, mixing multiple choice with
    assertion–reason. After it come six questions of two marks, seven of three, three case- or source-based items of
    four, and three long answers of five, 39 in all. Measured by skill, 50% of marks reward knowing and understanding,
    30% applying and 20% analysing or evaluating. The school, not the board, examines three topics: motors,
    generators and induction; evolution; and the logic of the periodic table. Class 10 students all take a main exam,
    with an optional second attempt to lift up to three subjects; cbse.gov.in will publish the 2027 schedule. See our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a>, the
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page and, for the board overall, the
    <a href="{{ url('/cbse-home-tutor-shimla') }}">CBSE home tutor in Shimla</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shms-years">Classes 6 to 9: building towards the board year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What a science tutor should be building before Class 10, stage by stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What changes</th><th scope="col">What the tutor builds</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 and 7</td><td>Activity-based chapters; NCERT's Curiosity books in CBSE schools</td><td>One accurate sentence and a neat sketch for each activity, and the right scientific word in place of the everyday one</td></tr>
      <tr><td>Class 8</td><td>Physics, chemistry and biology start to separate; first numericals and word equations</td><td>A unit after every number, and equations written from the words up</td></tr>
      <tr><td>Class 9</td><td>Motion, matter and the cell arrive together; CBSE now uses NCERT's Exploration book</td><td>Gaps closed in the month they appear, plus a short written test every fortnight</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CBSE's 2026-27 Class 9 paper gives Matter 27 of its 80 marks, World of living 25, the unit on motion, force, work
    and sound 23, and Earth as a system 5; notes inherited from an older brother or sister follow the old book and
    mislead more than they help. Through Class 10, a single tutor for physics, chemistry and biology tends to beat
    three separate ones: one person can tell whether a wrong numerical comes from arithmetic or from the concept. See the
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8</a> and
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9</a> science tutor pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shms-icse">If the school follows ICSE</h2>
  <p>
    ICSE treats science as three subjects in Class 10, with a separate CISCE paper and internal marks for each of
    physics, chemistry and biology. Because each school picks its own textbooks inside the CISCE syllabus, the tutor
    should teach from the books in your child's bag and practise on CISCE specimen papers, insisting on precise
    definitions and complete working. Often a family needs help with only one of the three; name it when you write
    to us. Local ICSE science tutors are scarcer than CBSE or state-board ones, and an online specialist can fill
    the gap.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shms-habits">Where careful children collect marks and hurried ones lose them</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five habits a science tutor should drill until they are automatic</caption>
    <thead>
      <tr><th scope="col">Habit</th><th scope="col">What the tutor checks</th></tr>
    </thead>
    <tbody>
      <tr><td>Ray diagrams</td><td>An arrow on every ray, virtual rays dotted, the mirror or lens drawn with its correct symbol</td></tr>
      <tr><td>Circuits</td><td>Standard symbols, ammeter in series, voltmeter in parallel, and the reading written with its unit</td></tr>
      <tr><td>Biology figures</td><td>Heart, nephron or digestive system drawn large, labels spelt correctly and pointing to the right part</td></tr>
      <tr><td>Equations</td><td>Balanced every time, with state symbols when the question asks for them</td></tr>
      <tr><td>Heredity crosses</td><td>The whole cross written out, not just the final ratio</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    During the free demo, give the tutor this week's school chapter and notice whether these checks come up unasked. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> lists more.
    A poor fit simply means a demo with someone else on your shortlist; changing later is free too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shms-areas">Five Shimla localities: fitting science in after school</h2>
  <p>
    A Class 6 to 10 lesson has to fit between the school day and the evening meal, so the tutor's route has to be
    dependable.
    Here is what to arrange in five localities across the city; every locality is on our
    <a href="{{ url('/city/shimla') }}">Shimla page</a>.
  </p>
  <dl>
    <dt><strong>{!! $shA('jakhu', 'Jakhu') !!}</strong></dt>
    <dd>Homes on steep slopes below the summit, usually reached by hill roads and footpaths. Tutors from Lakkar Bazar, Bharari or Sanjauli know the lanes; say whether the last stretch is on foot. Weekday slots run more smoothly than weekends, when visitors head up the hill.</dd>
    <dt><strong>{!! $shA('bhattakufar', 'Bhattakufar') !!}</strong></dt>
    <dd>A residential ward on the eastern slopes, beside Sanjauli, Dhalli and Malyana. Tell the tutor whether it is a house down a lane or steps, or a flat behind a gate; a two-wheeler or local taxi copes with the narrow roads better than a car.</dd>
    <dt><strong>{!! $shA('vikasnagar', 'Vikasnagar') !!}</strong></dt>
    <dd>Part of the newer residential belt next to New Shimla, with Chhota Shimla, Kasumpti, Khalini and Panthaghati close by, which gives a wide pool of tutors. Late-afternoon starts avoid the office traffic towards the Secretariat.</dd>
    <dt><strong>{!! $shA('panthaghati', 'Panthaghati') !!}</strong></dt>
    <dd>A large suburb on the highway with apartments, government housing, builder floors and houses. Register the tutor at the gate of a gated project before the first class; evening lessons are easier once the commuter traffic has eased.</dd>
    <dt><strong>{!! $shA('boileauganj', 'Boileauganj') !!}</strong></dt>
    <dd>A busy junction on the western side with homes on the slopes around it. Parking is short, so tutors often come by bus or walk the last part; share a clear landmark and the lane or steps to the door.</dd>
  </dl>
  <p>
    On a snowy or very wet day, keep the slot and the tutor but hold the lesson on a screen; the <a href="{{ url('/online-tutor-shimla') }}">online tutor for Shimla</a> page explains how. The zone page
    for <a href="{{ url('/city/shimla/zone/boileauganj-summer-hill-totu') }}">Boileauganj, Summer Hill and Totu</a>
    and the <a href="{{ url('/blog/shimla-home-tuition-guide') }}">Shimla home tuition guide</a> add local timing advice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shms-fees">How much does a science home tutor in Shimla charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees. Board-year work in Class 10 is usually priced above support for Classes 6 to 8, and travel to your home and
    lessons per week also play a part. Fees are on the shortlist before any demo; the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-shimla') }}">Shimla home tuition fees</a> article explain more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shms-start">What to send us</h2>
  <p>
    Tell us the class, the board and the part of science your child finds hardest, plus a landmark near home, whether
    the tutor will need to walk the last stretch, and which weekday afternoons are free. A shortlist of two or three
    science tutors follows, fees included; pick one for a <a href="{{ url('/demo-class') }}">free demo class</a>. If no
    suitable tutor can come at your time, we suggest lessons online or a mix. NXTutors works from Sector 66, Gurugram,
    and its tutors teach online nationwide; the national <a href="{{ url('/science-home-tutor') }}">science home
    tutor</a> page explains our approach. For the senior years, see the Shimla
    <a href="{{ url('/physics-home-tutor-shimla') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-shimla') }}">chemistry</a> pages; for maths, the
    <a href="{{ url('/maths-home-tutor-shimla') }}">maths home tutor in Shimla</a> page.
  </p>
  <p>
    Science teachers living in Shimla can see current student requests on the
    <a href="{{ url('/tuition-jobs/shimla') }}">Shimla tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
