{{--
  Long-form guide for the "IGCSE physics tutor Ahmedabad" page. Byline:
  NXTutors Academic Team. No schools, societies or people are named.

  Syllabus facts are reworded from igcse-physics-tutor-gurgaon /
  igcse-physics-tutor-mumbai, which cite the Cambridge IGCSE Physics 0625
  syllabus for 2026, 2027 and 2028 (cambridgeinternational.org): Paper 1
  (Core) / Paper 2 (Extended) multiple choice, 40 questions, 45 min, 30%;
  Paper 3 (Core) / Paper 4 (Extended) theory, 80 marks, 1 h 15 min, 50%;
  Paper 5 Practical Test (1 h 15 min) or Paper 6 Alternative to Practical
  (1 h), 40 marks, 20%, chosen by the school, same skills; AO weightings
  50/30/20; calculators in all parts; Core C-G, Extended A*-G; candidates
  expected to reach C or above entered for Extended; six topics (motion,
  forces and energy; thermal physics; waves; electricity and magnetism;
  nuclear physics; space physics); "recall and use" equations; command words.
  June, November and (India) March series as in igcse-tutor-mumbai. GSEB facts
  (Std 10 Science paper 80 marks, 24 objective items) from
  gujarat-board-tutor-ahmedabad, which cites gseb.org. No other dates.

  Local detail only from zones/ahmedabad.json, ahmedabad-zone-guides.json and
  ahmedabad-research.json (Memnagar Gurukul Road station, limited parking;
  Shela no metro, main-gate and tower checks; Ellisbridge Gandhigram station
  next to the railway station, Ashram Road at office hours; Sabarmati Red Line
  station, Motera Stadium one stop north; Khokhra near Maninagar station and
  Apparel Park / Amraiwadi stations; Meghaninagar no metro, Asarva railway
  station) and the Ahmedabad hub view (IGCSE command words, tiers and past
  papers; online widens IGCSE choice). No claim about where IGCSE families
  live. Area links render only for active Ahmedabad areas. Fee wording is the
  approved sentence. FAQs render from faqs/igcse-physics-tutor-ahmedabad.php.
--}}
@php
  $aigpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $aigpA = function (string $slug, string $label) use ($aigpSlugs) {
      return in_array($slug, $aigpSlugs, true)
          ? '<a href="' . e(url('/city/ahmedabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="aigpGuideTitle">
  <h2 id="aigpGuideTitle">IGCSE physics tutor in Ahmedabad: Cambridge 0625, the practical paper and answers examiners can credit</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE Physics, syllabus 0625, asks for three things that school lessons in Ahmedabad do not always
    practise together: quick, accurate multiple-choice work, structured written answers that use the right physics
    words, and practical skills tested either in a lab or on paper. Which of those needs help, and at which tier, is
    what a tutor has to find out first. This guide explains how the qualification is assessed, what the tier changes,
    how to prepare for the practical component without a home lab, and how to find a tutor who can reach your home
    across the city or work with your child online. It sits under our
    <a href="{{ url('/physics-home-tutor-ahmedabad') }}">physics home tutors in Ahmedabad</a> page and the
    <a href="{{ url('/igcse-tutor-ahmedabad') }}">IGCSE tutors in Ahmedabad</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#aigp-assess">Three components</a> ·
    <a href="#aigp-tier">Core or Extended</a> ·
    <a href="#aigp-topics">Six topics</a> ·
    <a href="#aigp-prac">The practical paper</a> ·
    <a href="#aigp-mcq">Multiple choice</a> ·
    <a href="#aigp-habits">Habits that keep marks</a> ·
    <a href="#aigp-example">A worked question</a> ·
    <a href="#aigp-years">Grades 9 and 10</a> ·
    <a href="#aigp-before">Before and after</a> ·
    <a href="#aigp-map">Tutors by zone</a> ·
    <a href="#aigp-mode">Home or online</a> ·
    <a href="#aigp-demo">The demo</a> ·
    <a href="#aigp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="aigp-assess">How 0625 is assessed: three components for every candidate</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics 0625 components</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Core</th><th scope="col">Extended</th><th scope="col">Length and marks</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice</td><td>Paper 1</td><td>Paper 2</td><td>40 questions, 45 minutes</td><td>30%</td></tr>
      <tr><td>Theory (structured questions)</td><td>Paper 3</td><td>Paper 4</td><td>80 marks, 1 hour 15 minutes</td><td>50%</td></tr>
      <tr><td>Practical</td><td colspan="2">Paper 5 (Practical Test, 1 h 15 min) or Paper 6 (Alternative to Practical, 1 h), chosen by the school</td><td>40 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Calculators may be used in every component. Across the qualification, about half the marks test knowledge with
    understanding, about 30% test handling information and solving problems, and 20% test experimental skills. In
    other words, a student who has only learnt definitions is preparing for at most half the paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aigp-tier">Core or Extended: the tier sets the ceiling</h2>
  <p>
    Core candidates can achieve grades C to G; Extended candidates A* to G. Cambridge advises that candidates expected
    to reach grade C or above should be entered for Extended. The school makes the entry, but a tutor's view, based
    on timed Extended questions in Grade 9, gives families something solid to discuss with the teacher. The
    Extended content adds depth to every topic, not extra topics alone, so a Core-trained student moved up late has
    more to catch up than it seems.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aigp-topics">The six topics and the usual sticking point in each</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0625 topics, as the syllabus lists them</caption>
    <thead>
      <tr><th scope="col">Topic</th><th scope="col">Where students commonly slip</th></tr>
    </thead>
    <tbody>
      <tr><td>Motion, forces and energy</td><td>Reading speed-time graphs; resultant force and momentum signs</td></tr>
      <tr><td>Thermal physics</td><td>Explaining with particles rather than repeating a definition</td></tr>
      <tr><td>Waves</td><td>Ray diagrams drawn freehand; mixing up frequency and wavelength</td></tr>
      <tr><td>Electricity and magnetism</td><td>Series and parallel rules; direction rules for motors and generators</td></tr>
      <tr><td>Nuclear physics</td><td>Balancing decay equations; half-life from a graph</td></tr>
      <tr><td>Space physics</td><td>Leaving it to the end; it is examined like any other topic</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The syllabus marks many equations as "recall and use", which means they are not given in the exam. A tutor should
    keep a running list and test it in five-minute bursts, so recall never costs time in a paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aigp-prac">Preparing for Paper 5 or Paper 6 without a home lab</h2>
  <p>
    Whether the school enters Paper 5 or Paper 6, the same experimental skills are tested: planning, taking readings,
    recording them in a table with units, drawing graphs, and drawing conclusions with an eye on reliability. Paper 6
    tests them entirely on paper, which suits home or online tuition well. A tutor can work through the practical
    contexts the syllabus lists, then set past Paper 6 questions that make the student record, plot and evaluate.
  </p>
  <p>
    Simple home kit helps more than families expect: a metre rule, a stopwatch on a phone, a spring and a few masses, a
    torch and a glass block. Measuring a pendulum's period or a spring's extension at the dining table builds the
    habits that marks depend on: repeat readings, consistent decimal places and sensible units. Whatever the school
    does in its own lab, the write-up skills can be practised anywhere.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aigp-mcq">The multiple-choice paper: 40 questions in 45 minutes</h2>
  <p>
    That is just over a minute a question. Students who are strong on written answers can still underperform here,
    because distractors are designed around common misconceptions. A useful routine is a set of ten questions at the
    start of a session, timed, followed by a review of every wrong option, not just the right one. Past papers from
    the June, November and March series give plenty of material; the school will tell you which series your child
    will sit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aigp-habits">Habits that protect IGCSE physics marks</h2>
  <ol>
    <li><strong>Write the equation before the numbers,</strong> so method marks survive an arithmetic slip.</li>
    <li><strong>Give units every time,</strong> including in tables and on graph axes.</li>
    <li><strong>Use the command word.</strong> "State" wants a short answer; "explain" wants a reason; "describe" wants what happens.</li>
    <li><strong>Draw with a ruler,</strong> for ray diagrams, circuit diagrams and lines of fit on graphs.</li>
    <li><strong>Quote readings to the same precision</strong> as the instrument used.</li>
    <li><strong>Read the whole question,</strong> since later parts often depend on an earlier answer.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aigp-example">One structured question, taught the way a tutor should</h2>
  <p>
    Take a typical theory-paper item: a speed-time graph for a cyclist, followed by three parts. Part one asks the
    student to describe the motion between two times; part two to calculate the acceleration; part three to work out
    the distance travelled. Here is how a good session handles it.
  </p>
  <ul>
    <li><strong>Describe.</strong> The answer names what happens to the speed ("increases at a constant rate"), not just "it goes up". The tutor asks the student to say it aloud before writing.</li>
    <li><strong>Calculate.</strong> The student writes "acceleration = change in speed ÷ time" first, then reads both values from the graph with units, then gives the answer with m/s². If a reading is slightly off, the method mark is still there.</li>
    <li><strong>Distance.</strong> The tutor checks that the student knows the area under the line is the distance, splits the shape into a triangle and a rectangle, and adds them, showing each area.</li>
  </ul>
  <p>
    Afterwards, the tutor compares the answer with a Cambridge markscheme and asks the student to find the marking
    point they nearly missed. Ten minutes like this, once a week, does more than a chapter of notes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aigp-years">Spreading the tutoring over Grades 9 and 10</h2>
  <p>
    In Grade 9, one session a week usually keeps pace with school topics, with a short multiple-choice set and one
    practical-skills task built in. In Grade 10, two a week is common: one for new or weak topics, one for timed past
    papers and Paper 6 questions. In the final weeks before the series, the focus moves to full papers under exam
    timing, marked against Cambridge markschemes. Cambridge schools in Ahmedabad set their own terms, so the tutor
    plans from the school's dates; Uttarayan week in mid-January is worth leaving light.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aigp-before">What comes before and after IGCSE physics</h2>
  <p>
    Students joining a Cambridge school from the Gujarat board arrive from a Standard 10 science paper of 80 marks
    with 24 one-mark objective items at the start, so they are often comfortable with quick questions but less used to
    structured written explanations and practical write-ups, and those from Gujarati medium may need physics terms in
    English for a while. Our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge and Edexcel
    IGCSE comparison</a> and <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">article on moving
    from CBSE to IB or IGCSE</a> help with the switch. After IGCSE, many students continue to the IB Diploma; see our
    <a href="{{ url('/ib-physics-tutor-ahmedabad') }}">IB physics tutor in Ahmedabad</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aigp-map">IGCSE physics tutors by zone, and the routes they use</h2>
  <ul>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/satellite-vastrapur-bodakdev') }}">Satellite, Vastrapur and Bodakdev</a>:</strong> {!! $aigpA('memnagar', 'Memnagar') !!} has Gurukul Road on the Blue Line; parking inside societies is tight, so metro or two-wheeler is easiest.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/prahlad-nagar-bopal-shela') }}">Prahlad Nagar, Bopal and Shela</a>:</strong> {!! $aigpA('shela', 'Shela') !!} has no rail or metro; tutors who already live on that side of the ring road are the dependable choice, with an online specialist if needed.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/navrangpura-paldi-ellisbridge') }}">Navrangpura, Paldi and Ellisbridge</a>:</strong> {!! $aigpA('ellisbridge', 'Ellisbridge') !!} has Gandhigram station on the Red Line, beside the railway station; Ashram Road is slow at office hours.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/naranpura-gota-chandkheda') }}">Naranpura, Gota and Chandkheda</a>:</strong> {!! $aigpA('sabarmati', 'Sabarmati') !!} has a Red Line station, and Motera Stadium one stop north links to the Gandhinagar line.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/maninagar-isanpur-kankaria') }}">Maninagar, Isanpur and Kankaria</a>:</strong> {!! $aigpA('khokhra', 'Khokhra') !!} is near Maninagar railway station and the Apparel Park and Amraiwadi metro stops.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/shahibaug-asarwa-meghaninagar') }}">Shahibaug, Asarwa and Meghaninagar</a>:</strong> {!! $aigpA('meghaninagar', 'Meghaninagar') !!} has no metro; tutors come by road or via Asarva railway station and an auto.</li>
  </ul>
  <p>
    For the <a href="{{ url('/city/ahmedabad/zone/nikol-naroda-bapunagar') }}">Nikol, Naroda and Bapunagar</a> zone and
    every other locality, see the <a href="{{ url('/city/ahmedabad') }}">Ahmedabad home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aigp-mode">Home or online for IGCSE physics</h2>
  <p>
    Our Ahmedabad hub notes that online lessons widen the choice of IGCSE teachers. Paper 6 practice, multiple-choice
    review and markscheme work translate well to a shared screen. Home sessions are better for building practical
    habits with real measurements and for students who drift when not supervised. A weekly home session plus an online
    paper session is a common pattern, particularly for families in corridors without a metro. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online tutor guide</a> helps you weigh it up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aigp-demo">What to look for in the IGCSE physics demo</h2>
  <ol>
    <li><strong>The right syllabus.</strong> The tutor should confirm 0625, the tier, the series and Paper 5 or 6.</li>
    <li><strong>A practical-skills task.</strong> Ask for one Paper 6 question taught from scratch.</li>
    <li><strong>Command words.</strong> Listen for the difference between "state", "describe" and "explain".</li>
    <li><strong>Equation recall.</strong> Ask how the tutor keeps "recall and use" equations fresh.</li>
    <li><strong>A plan for the next month.</strong> Specific topics and a way to check progress.</li>
    <li><strong>The route.</strong> Which road or station, and the online fallback for busy weeks.</li>
  </ol>
  <p>
    Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> lists more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aigp-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tier, weekly frequency and travel decide where an IGCSE physics fee falls, and each tutor's rate appears on the
    profile before booking. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our article on
    <a href="{{ url('/blog/home-tuition-fees-ahmedabad') }}">home tuition fees in Ahmedabad</a> add detail.
  </p>
  <p>
    Send the grade, tier, practical paper, exam series, locality and preferred times; you receive two or three matched
    tutors, the first lesson is a <a href="{{ url('/demo-class') }}">free demo</a>, and moving to another tutor later is
    free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. See <a href="{{ url('/tutors') }}">tutor profiles</a>, plus
    <a href="{{ url('/igcse-maths-tutor-ahmedabad') }}">IGCSE maths</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-ahmedabad') }}">IB and IGCSE chemistry</a> tutors in Ahmedabad.
  </p>
  </section>

  </div>
</article>
