{{--
  Long-form guide for the "IGCSE physics tutor Lucknow" page. Byline: NXTutors
  Academic Team. No schools, societies or people are named.

  Syllabus facts are reworded from igcse-physics-tutor-gurgaon, which cites the
  Cambridge IGCSE Physics 0625 syllabus for 2026, 2027 and 2028
  (cambridgeinternational.org): Paper 1 (Core) / Paper 2 (Extended) multiple
  choice, 40 questions, 45 min, 30%; Paper 3 (Core) / Paper 4 (Extended)
  theory, 80 marks, 1 h 15 min, 50%; Paper 5 Practical Test (1 h 15 min) or
  Paper 6 Alternative to Practical (1 h), 40 marks, 20%, chosen by the school,
  same skills and contexts; AO weightings 50/30/20; calculators in all parts;
  Core C-G, Extended A*-G; candidates expected to reach C or above entered for
  Extended; six topics; "recall and use" equations; practical skills listed in
  the syllabus; command words and their definitions (checked in phy0625.txt).
  The AO split by component (theory papers AO1
  63 / AO2 37, practical papers AO3 100) and the six topic titles checked in
  the syllabus text held in the scratchpad (phy0625.txt). June, November and
  (India) March series as stated in igcse-maths-tutor-gurgaon. No other dates.

  Local detail only from database/seo-content/zones/lucknow.json,
  areas/lucknow-research.json, lucknow-zone-guides.json and the Lucknow hub
  (a smaller number of students take Cambridge IGCSE; Gomti Nagar khands and
  railway station in Vivek Khand, Red Line in Indira Nagar; Mahanagar
  Badshahnagar and IT College stations, doorstep arrival at houses; Nishatganj
  near IT College, apartment entrances ask names; Chowk narrow lanes, no
  metro, Blue Line planned, two-wheeler or auto; Sarojini Nagar Amausi and
  Transport Nagar stations, highway slow at office hours; Sushant Golf City
  gated towers, entry pass). No request data is claimed. Area links render
  only for active Lucknow areas. Fee wording is the approved sentence. FAQs
  render from faqs/igcse-physics-tutor-lucknow.php.
--}}
@php
  $ligpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ligpA = function (string $slug, string $label) use ($ligpSlugs) {
      return in_array($slug, $ligpSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ligpGuideTitle">
  <h2 id="ligpGuideTitle">IGCSE physics tutor in Lucknow: three papers, three different skills</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE Physics (0625) looks, at first glance, like the Class 9 and 10 physics most Lucknow families know
    from CBSE or ICSE. The content overlaps a good deal. What differs is the examination: a fast multiple-choice paper,
    a structured theory paper, and a practical paper that tests experimental skill on its own. A student can know the
    physics well and still under-perform on one of the three. This page, from the NXTutors Academic Team, explains each
    paper and what a tutor should do about it. It sits under our
    <a href="{{ url('/physics-home-tutor-lucknow') }}">physics home tutors in Lucknow</a> page and the
    <a href="{{ url('/igcse-tutor-lucknow') }}">IGCSE tutors in Lucknow</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ligp-papers">The three components</a> ·
    <a href="#ligp-tier">Core or Extended</a> ·
    <a href="#ligp-ao">What is being tested</a> ·
    <a href="#ligp-mcq">The multiple-choice paper</a> ·
    <a href="#ligp-prac">Paper 5 or Paper 6</a> ·
    <a href="#ligp-topics">Six topics and the equations</a> ·
    <a href="#ligp-words">Command words</a> ·
    <a href="#ligp-plan">A two-year plan</a> ·
    <a href="#ligp-after">After IGCSE</a> ·
    <a href="#ligp-zones">Tutors by zone</a> ·
    <a href="#ligp-demo">The demo</a> ·
    <a href="#ligp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ligp-papers">The three components of IGCSE Physics</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics 0625, syllabus for 2026 to 2028</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Core student sits</th><th scope="col">Extended student sits</th><th scope="col">Format</th><th scope="col">Share of grade</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice</td><td>Paper 1</td><td>Paper 2</td><td>40 questions in 45 minutes</td><td>30%</td></tr>
      <tr><td>Theory</td><td>Paper 3</td><td>Paper 4</td><td>80 marks in 1 hour 15 minutes, structured questions</td><td>50%</td></tr>
      <tr><td>Practical</td><td colspan="2">Paper 5 (Practical Test, 1 h 15 min) or Paper 6 (Alternative to Practical, 1 h), as the school decides</td><td>40 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Calculators may be used on every component. The school chooses between Paper 5 and Paper 6, not the student, so ask
    which one your child is entered for; the preparation differs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligp-tier">Core or Extended: what the tier changes</h2>
  <p>
    Core candidates can be awarded grades C to G, and Extended candidates A* to G. Cambridge advises that students
    expected to reach grade C or above should be entered for Extended. Unlike some subjects, then, Extended does not
    shut out the lower grades, but Core stops at grade C. The Extended papers go further into the same topics, with more
    demanding calculations and explanations. A tutor should help the family understand where the student stands well
    before the school finalises entries, and should teach Extended content to any student with a realistic chance of
    reaching it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligp-ao">What each paper is really testing</h2>
  <p>
    Cambridge sets three assessment objectives: knowledge with understanding (50 percent of the overall grade), handling
    information and problem-solving (30 percent), and experimental skills and investigations (20 percent). They are not
    spread evenly. The multiple-choice and theory papers test only the first two, weighted roughly 63 to 37, and the
    practical paper tests only the third.
  </p>
  <p>
    In practice, a student who learns definitions and laws thoroughly secures much of the theory
    paper but may struggle with the problem-solving share, where data must be read from a table or a graph and applied
    to a new situation. And no amount of theory revision prepares a student for the practical paper. A good tutor
    therefore splits time three ways: secure knowledge, unfamiliar problems, and practical skills.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligp-mcq">Forty questions in forty-five minutes</h2>
  <p>
    The multiple-choice paper allows a little over a minute per question. Questions test understanding as much as recall:
    a diagram of a circuit, a ray through a lens, or a velocity-time graph, with four options that differ in one detail.
    Students lose marks by reading too fast and by not checking units. Short timed sets of ten questions, two or three
    times a week, train the pace better than a full paper once a month. After each set, the tutor should go through every
    wrong answer and every lucky guess.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligp-prac">Paper 5 or Paper 6: preparing for the practical</h2>
  <p>
    Both practical options test the same skills in the same kinds of experimental context, and both are worth 40 marks.
    Paper 5 is done at a bench with apparatus; Paper 6 is a written paper about experiments. The syllabus lists the skills
    and the experimental contexts in detail. They include:
  </p>
  <ul>
    <li><strong>Measuring and recording.</strong> Reading instruments correctly, choosing ranges, recording in tables with units in the headings and a consistent number of decimal places.</li>
    <li><strong>Graphs.</strong> Sensible scales, plotted points, a straight line or smooth curve drawn through them, and a gradient found from a large triangle.</li>
    <li><strong>Variables and fair tests.</strong> Naming the independent, dependent and control variables, and suggesting improvements.</li>
    <li><strong>Explaining sources of error</strong> and how repeating readings helps.</li>
  </ul>
  <p>
    For Paper 6 especially, a tutor at home can do a great deal: working through past Alternative to Practical papers,
    and setting up simple experiments with everyday objects such as a pendulum on a string or a ruler and coins, so that
    "describe how you would measure" questions come from experience rather than memory.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligp-topics">Six topics, and the equations to know by heart</h2>
  <p>
    The syllabus content is arranged in six topics: motion, forces and energy; thermal physics; waves; electricity and
    magnetism; nuclear physics; and space physics. Space physics is split into the Earth and the Solar System, and stars and
    the Universe.
  </p>
  <p>
    Throughout the syllabus, statements marked "recall and use the equation" tell the student which formulae must be
    memorised and applied. A tutor should build a single list of these from the syllabus,
    grouped by topic, and test it in short bursts until it is automatic. The command words used in questions, such as
    "state", "describe", "explain" and "calculate", are defined in the syllabus and indicate the depth of answer the
    examiner expects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligp-words">Reading the command word before writing</h2>
  <p>
    Marks on the theory paper can be lost not through wrong physics but through answering a different question from
    the one set. The syllabus defines each command word, and a tutor should make students underline it before they
    write a line.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Selected command words as the 0625 syllabus defines them, and what that means for an answer</caption>
    <thead>
      <tr><th scope="col">Command word</th><th scope="col">Syllabus meaning, in brief</th><th scope="col">What the student should write</th></tr>
    </thead>
    <tbody>
      <tr><td>State</td><td>Express in clear terms</td><td>A short, direct answer; no explanation needed</td></tr>
      <tr><td>Describe</td><td>Give the main points or features</td><td>What happens, in order, with any pattern in data stated</td></tr>
      <tr><td>Explain</td><td>Give reasons, say why or how, with evidence</td><td>A cause linked to its effect, using the physics idea by name</td></tr>
      <tr><td>Calculate</td><td>Work out from given facts or figures</td><td>Equation, substitution, answer and unit, each on its own line</td></tr>
      <tr><td>Suggest</td><td>Apply understanding where several answers are valid</td><td>A reasoned proposal for an unfamiliar situation</td></tr>
      <tr><td>Sketch</td><td>A simple freehand drawing showing key features</td><td>Labelled axes and the right shape, with proportions roughly right</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligp-plan">A two-year plan from Grade 9 to the exam series</h2>
  <p>
    Cambridge runs June and November series, and schools in India can also use a March series; the school picks the
    one your child sits. Working back from that date, tutoring usually moves through four phases.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How IGCSE physics tutoring can be paced over two years</caption>
    <thead>
      <tr><th scope="col">Phase</th><th scope="col">Main focus</th><th scope="col">Practical and exam skills alongside</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9, first half</td><td>Keeping pace with the school's order of topics; the "recall and use" equations as they arrive</td><td>Units, significant figures and reading instruments</td></tr>
      <tr><td>Grade 9, second half</td><td>Consolidating motion, forces and energy, and thermal physics; first structured questions</td><td>Tables and graphs from simple home experiments</td></tr>
      <tr><td>Grade 10 until mocks</td><td>Finishing the syllabus, including space physics; Extended content for students on that tier</td><td>Timed multiple-choice sets; Paper 5 or 6 questions each week</td></tr>
      <tr><td>Mocks to the exam</td><td>Full papers under time, one component at a time, then together</td><td>An error log by topic and by skill, reviewed every session</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A student who starts tutoring late can compress the first two phases, but should not skip the practical-skills
    column: those marks are a fifth of the grade and respond quickly to practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligp-after">What comes after IGCSE physics</h2>
  <p>
    Students who stay for the IB Diploma will find that IGCSE practical skills feed directly into IB Paper 1B and the
    scientific investigation; see our <a href="{{ url('/ib-physics-tutor-lucknow') }}">IB physics tutors in Lucknow</a>
    page. Those moving to ISC or CBSE Class 11 will meet more mathematics in physics, especially calculus-based
    mechanics, and benefit from a summer bridge. For maths at the same stage, see
    <a href="{{ url('/igcse-maths-tutor-lucknow') }}">IGCSE maths tutors in Lucknow</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligp-zones">Finding an IGCSE physics tutor near you in Lucknow</h2>
  <p>
    Cambridge physics specialists are not spread evenly across the city, so the route matters. From our zone notes:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/lucknow/zone/gomti-nagar-indira-nagar-chinhat') }}">Gomti Nagar, Indira Nagar and Chinhat</a>.</strong> In {!! $ligpA('gomti-nagar', 'Gomti Nagar') !!}, give the khand and plot; tutors reach the area by metro to Indira Nagar or by road, and a tutor living in the same khands is easiest in the early evening.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/mahanagar-aliganj-jankipuram') }}">Mahanagar, Aliganj and Jankipuram</a>.</strong> {!! $ligpA('mahanagar', 'Mahanagar') !!} relies on Badshahnagar and IT College stations; most houses allow a straight arrival at the door. {!! $ligpA('nishatganj', 'Nishatganj') !!} is also near IT College, and its apartment buildings may ask the tutor's name at the entrance.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/hazratganj-lalbagh-aminabad') }}">Hazratganj, Lalbagh and Aminabad</a>.</strong> {!! $ligpA('chowk', 'Chowk') !!} has narrow lanes and no metro station yet, so tutors arrive by two-wheeler or auto; morning or afternoon slots avoid the evening market.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/alambagh-ashiyana-rajajipuram') }}">Alambagh, Ashiyana and Rajajipuram</a>.</strong> {!! $ligpA('sarojini-nagar', 'Sarojini Nagar') !!} is served by Amausi and Transport Nagar stations; the highway is slow at office hours.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/sushant-golf-city-vrindavan-yojana-telibagh') }}">Sushant Golf City, Vrindavan Yojana and Telibagh</a>.</strong> {!! $ligpA('sushant-golf-city', 'Sushant Golf City') !!} has gated towers and no metro; register the tutor at the gate and agree a fixed weekly slot.</li>
  </ul>
  <p>
    When no Cambridge physics tutor lives within easy reach, online sessions work well for theory and multiple-choice
    practice, while home sessions suit practical work; see our guide to
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a>. Every locality is on the
    <a href="{{ url('/city/lucknow') }}">Lucknow home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligp-demo">What to look for in an IGCSE physics demo</h2>
  <ol>
    <li><strong>Questions about the entry.</strong> Core or Extended, Paper 5 or Paper 6, and the exam series.</li>
    <li><strong>A past-paper question marked in front of you,</strong> with the mark scheme explained.</li>
    <li><strong>Practical sense.</strong> Ask how they would teach a student to find a gradient or name a control variable.</li>
    <li><strong>Equations.</strong> Ask how they would make sure every "recall and use" equation is learnt.</li>
    <li><strong>Pace.</strong> How they would train for forty questions in forty-five minutes.</li>
    <li><strong>The route,</strong> and what happens on a jammed evening.</li>
  </ol>
  <p>
    If the demo is not a good fit, the next matched tutor gives their own free demo; the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more ideas.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligp-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee, shown before the demo; see the <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    and <a href="{{ url('/blog/home-tuition-fees-lucknow') }}">home tuition fees in Lucknow</a>.
  </p>
  <p>
    Tell us the tier, the practical paper, the exam series, your child's grade, your locality and your free slots. We
    share two or three matched tutors; the first class is a <a href="{{ url('/demo-class') }}">free demo</a> and
    switching tutor later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID
    check</a> before their profile goes live; you can also browse <a href="{{ url('/tutors') }}">tutor profiles</a>. For
    chemistry, see <a href="{{ url('/ib-igcse-chemistry-tutor-lucknow') }}">IB and IGCSE chemistry tutors in Lucknow</a>.
  </p>
  </section>

  </div>
</article>
