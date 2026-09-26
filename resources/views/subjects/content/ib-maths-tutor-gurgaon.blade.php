{{--
  Long-form guide for the "IB maths tutor Gurgaon" page, written by Ajay
  Vatsyayan (IB, IGCSE and ISC maths). Course structure and assessment
  weightings follow the IB Diploma Programme subject briefs for Mathematics:
  analysis and approaches and Mathematics: applications and interpretation
  (ibo.org), and the IB's published curriculum updates for the revised courses
  (first teaching August 2027, first assessment May 2029). Schools are named only
  as schools our students attend, never as partners; each was checked earlier
  against the school's own website for the boards it offers (see
  maths-home-tutor-gurgaon). NXTutors facts are limited to published policy.
  FAQs render from faqs/ib-maths-tutor-gurgaon.php.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ibm-guide" aria-labelledby="ibmGuideTitle">
  <h2 id="ibmGuideTitle">IB maths tutor in Gurgaon: AA and AI, SL and HL, and the IA</h2>

  <p class="nx-guide__lede">
    IB Diploma maths is really four courses wearing one name. A student on Analysis and Approaches at Higher Level is
    doing something very different from a student on Applications and Interpretation at Standard Level, and a tutor who
    is excellent at one may not be the right person for the other. Add the mathematical exploration, which counts for a
    fifth of the final mark and has strict academic-integrity rules around it, and it is easy to see why IB families in
    Gurugram ask so many questions before they choose a maths tutor. This guide sets out how the IB maths courses are
    built and assessed, how a tutor should (and should not) help with the internal assessment, how to choose between AA
    and AI, and a realistic two-year plan for DP1 and DP2.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibm-courses">AA or AI</a> ·
    <a href="#ibm-levels">SL, HL and the papers</a> ·
    <a href="#ibm-revised">The revised courses</a> ·
    <a href="#ibm-ia">The exploration (IA)</a> ·
    <a href="#ibm-myp">MYP maths</a> ·
    <a href="#ibm-choose">Choosing your course</a> ·
    <a href="#ibm-plan">A two-year plan</a> ·
    <a href="#ibm-schools">Gurgaon IB schools</a> ·
    <a href="#ibm-tutor">What a good IB maths tutor does</a> ·
    <a href="#ibm-start">Fees and getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibm-courses">Analysis and Approaches or Applications and Interpretation?</h2>
  <p>
    Every IB Diploma student takes one maths course from Group 5. There are two, and each runs at Standard Level (SL)
    or Higher Level (HL). Both share a common core of number, algebra, functions, geometry, trigonometry, statistics,
    probability and calculus. Where they differ is the flavour of the mathematics and the kind of thinking the exams
    reward.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Mathematics: Analysis and Approaches (AA)</h3>
  <p>
    AA is the more algebraic, abstract course. It puts weight on manipulating expressions by hand, proof and
    reasoning, and calculus. One paper at each level is taken without a calculator, so fluent algebra and exact values
    matter. Students who enjoy "why does this work?" and who expect to study maths-heavy subjects such as engineering,
    physics or mathematics itself often lean this way.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Mathematics: Applications and Interpretation (AI)</h3>
  <p>
    AI leans towards statistics, modelling and technology. The graphic display calculator (GDC) is used throughout,
    and questions often start from a real context: data, a financial situation, a network, a growth model. It suits
    students heading towards the social sciences, business, biology, psychology or design, and students who think well
    with data but find long algebraic manipulation heavy going. AI HL is a demanding course in its own right, not a
    softer option.
  </p>
      </div>
    </div>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>AA and AI side by side</caption>
    <thead>
      <tr><th scope="col">Feature</th><th scope="col">Analysis and Approaches</th><th scope="col">Applications and Interpretation</th></tr>
    </thead>
    <tbody>
      <tr><td>Emphasis</td><td>Algebra, proof, calculus, analytic methods</td><td>Modelling, statistics, real-world contexts</td></tr>
      <tr><td>Calculator</td><td>Paper 1 without a calculator; GDC on the other papers</td><td>GDC used on all papers</td></tr>
      <tr><td>Where students struggle</td><td>Non-calculator algebra, proof, harder calculus at HL</td><td>Interpreting context, choosing the right model, statistics vocabulary</td></tr>
      <tr><td>Typical next step</td><td>Maths, physics, engineering, economics with heavy maths</td><td>Social sciences, business, life sciences, design</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    We cover the choice in more depth in our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">guide to IB Maths AA,
    AI, SL and HL</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-levels">SL and HL: teaching hours and how the papers are weighted</h2>
  <p>
    The IB sets 150 teaching hours for SL and 240 for HL. The difference is not only extra topics; HL questions are
    longer, less guided and more likely to combine several ideas. On the current courses, SL students sit two written
    papers and HL students sit three, and at both levels the exploration makes up the remaining 20 percent.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How IB DP maths is assessed (current courses)</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL weighting</th><th scope="col">HL weighting</th><th scope="col">What it tests</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1</td><td>40%</td><td>30%</td><td>Short and long questions; no calculator on AA, GDC on AI</td></tr>
      <tr><td>Paper 2</td><td>40%</td><td>30%</td><td>Short and long questions with a GDC</td></tr>
      <tr><td>Paper 3 (HL only)</td><td>n/a</td><td>20%</td><td>Two extended problem-solving questions with a GDC</td></tr>
      <tr><td>Mathematical exploration (IA)</td><td>20%</td><td>20%</td><td>A written investigation, marked by the teacher and moderated by the IB</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    SL papers are one and a half hours each and HL Papers 1 and 2 are two hours each. Paper 3 is the one HL students
    most often ask us about. It gives two long problems that build step by step from something familiar towards an
    unfamiliar result, and the skill it rewards is staying calm through several linked parts and using earlier answers
    later on. Past Paper 3 questions are the single best practice material for it, and a tutor should be doing them with
    the student from DP1, not saving them for the final month.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-revised">The revised IB maths courses from August 2027</h2>
  <p>
    The IB has revised both maths courses. The new AA and AI courses start teaching in August 2027 and are first
    examined in May 2029. Both pathways remain, and so do SL and HL; the IB describes the changes as refinement rather
    than a new course. Points the IB has published for AA include:
  </p>
  <ul>
    <li><strong>Shorter papers.</strong> Papers 1 and 2 drop to 100 marks (from 110), and Paper 3 drops to 50 marks (from 55) with one hour instead of one hour fifteen minutes.</li>
    <li><strong>The same exploration.</strong> The internal assessment remains the mathematical exploration, and SL and HL now share the same assessment criteria.</li>
    <li><strong>Same weight for the IA.</strong> External exams stay at 80 percent and the exploration at 20 percent.</li>
  </ul>
  <p>
    What this means in Gurugram: students starting DP1 in August 2026 sit the current courses in May 2028. Students
    starting DP1 in August 2027 or later are on the revised courses. When you ask us for a tutor, tell us the student's
    exam session so we match someone teaching the right version.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-ia">The mathematical exploration: how a tutor can help, and where the line is</h2>
  <p>
    The exploration is a written piece of work in which the student picks an area of mathematics that interests them,
    asks a focused question and works through it. The IB guide suggests a length of roughly 12 to 20 pages. It is
    marked by the school against published criteria covering how well the work is presented and communicated, the
    student's personal engagement, their reflection, and the use and accuracy of the mathematics. It carries 20 percent
    of the final grade, so a strong exploration can lift a borderline 5 to a 6, and a weak one can pull a student down.
  </p>
  <p>
    It must be the student's own work. The IB's academic-integrity rules are clear, and schools check submissions
    carefully. A tutor who writes, rewrites or "polishes" an exploration puts the student's whole diploma at risk. Here
    is where I draw the line with every IB student I teach:
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>What a tutor can do</h3>
  <p>
    Teach the mathematics the student needs, including topics beyond the syllabus. Help them brainstorm and narrow
    their own ideas into a question that is neither trivial nor impossible. Explain what each criterion is looking for,
    using the IB's published examples. Ask questions that push the student to reflect on their method. Point out, in
    general terms, where an argument is unclear so the student can fix it.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>What a tutor must not do</h3>
  <p>
    Choose the topic for the student. Write, dictate or rephrase any part of the text. Do the calculations, build the
    graphs or code the models. Edit the draft line by line. Help the student hide the use of outside help from their
    teacher. The school's own teacher is the person who gives formal feedback on the draft, and the student should
    tell their teacher about any tutoring they receive.
  </p>
      </div>
    </div>
  <p>
    Topic choice is where most explorations succeed or fail. Good starting points come from the student's own life: the
    physics of a sport they play, the maths inside a game, the statistics of something they care about, the geometry of
    a building in Gurugram they walk past every day. A topic that looks impressive (chaos theory, say) but that the
    student cannot actually work through with their own mathematics usually scores worse than a modest topic done
    thoroughly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-myp">MYP maths before the Diploma</h2>
  <p>
    Many Gurugram IB students come through the Middle Years Programme. MYP maths is assessed against four criteria:
    knowing and understanding, investigating patterns, communicating, and applying mathematics in real-life contexts.
    Many schools also teach MYP maths at two levels, often called standard and extended, and the extended route is the
    better preparation for AA and especially AA HL.
  </p>
  <p>
    The jump from MYP 5 to DP1 is real. MYP tasks are often open investigations with generous time; DP papers are
    timed, dense and exam-heavy. Students who did well in MYP by writing thoughtful investigations can be caught out by
    the speed of algebra DP expects. A few months of focused work on algebraic fluency, functions and trigonometry in
    MYP 5 makes DP1 much calmer. Some schools teach Cambridge IGCSE in Grades 9 and 10 instead of MYP; our
    <a href="{{ url('/igcse-maths-tutor-gurgaon') }}">IGCSE maths tutor page</a> covers that route.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-choose">Choosing between AA and AI, and between SL and HL</h2>
  <p>
    Schools usually ask students to choose at the end of MYP 5 or Grade 10, with a short window to change early in DP1.
    I ask families four questions:
  </p>
  <ol>
    <li><strong>What might the student study at university?</strong> Some degree courses, particularly in engineering, physics, mathematics and some economics programmes, ask for a specific IB maths course and level. Check the requirements of the actual universities and courses on the student's list before deciding, because they differ by country and by university.</li>
    <li><strong>How strong is the student's algebra without a calculator?</strong> If simplifying, factorising and solving by hand is slow or error-prone, AA will be hard work, especially at HL. This can be fixed, but it needs time.</li>
    <li><strong>What are the other five subjects?</strong> A student taking HL Physics or HL Economics uses maths all the time, which helps. A student with three heavy HL subjects already may be wiser to take maths at SL.</li>
    <li><strong>Does the student enjoy maths?</strong> HL is 240 hours. A student who dislikes the subject will find that a long two years.</li>
  </ol>
  <p>
    A common Gurugram pattern: a student strong in IGCSE Extended or MYP extended maths with engineering in mind takes
    AA HL; a student aiming for business or psychology takes AI SL; a student uncertain between them takes AA SL, which
    keeps more doors open. None of these is a rule. A few sessions with a tutor before the choice is final often shows
    where the student really stands.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-plan">A two-year IB maths plan with a tutor</h2>
  <p>
    Every school sequences topics differently and sets its own internal deadlines for the exploration, so the tutor's
    plan has to follow the school's calendar. This is the shape that works for most of my students:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Typical two-year IB maths tutoring plan</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Main focus</th><th scope="col">What the tutor does</th></tr>
    </thead>
    <tbody>
      <tr><td>DP1, first term</td><td>Functions, algebra, sequences, early trigonometry</td><td>Closes gaps from MYP or IGCSE; builds non-calculator fluency (AA) or GDC habits (AI)</td></tr>
      <tr><td>DP1, second term</td><td>Calculus begins; statistics and probability</td><td>Topic tests in IB style; first Paper 3 questions for HL</td></tr>
      <tr><td>DP1, end of year</td><td>Exploration topic ideas; internal exams</td><td>Teaches the criteria; helps the student test their own ideas; revision for school exams</td></tr>
      <tr><td>DP2, first term</td><td>Remaining syllabus; exploration drafting</td><td>Teaches any maths the student's exploration needs; never touches the draft</td></tr>
      <tr><td>DP2, second term</td><td>Mock exams</td><td>Full timed papers, marked against IB markschemes; error log by topic</td></tr>
      <tr><td>Final weeks</td><td>May exams</td><td>Past papers by paper type, weak-topic drills, exam-room routines</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Most IB students do well with one or two sessions a week in DP1, rising to two or three in the months before mocks
    and finals. HL students with a demanding Paper 3 often need the extra session earlier. Students who start in DP2
    can still gain a lot, but the tutor's focus shifts quickly to papers and exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-schools">Gurgaon IB schools our students attend</h2>
  <p>
    IB students come to us from across the city, including schools such as Pathways World School, Aravali; Pathways
    School Gurgaon; Lancers International School; GD Goenka World School; Scottish High International School; The Shri
    Ram School, Aravali (IB Diploma); and Shiv Nadar School Gurgaon. NXTutors has no partnership or affiliation with any
    of these schools; they are simply schools where the students we tutor study, and the boards noted are as stated on
    each school's website.
  </p>
  <p>
    Because IB families are spread across Gurugram, travel shapes the plan. Students on Golf Course Road and
    {!! $ggA('-golf-course-extn', 'Golf Course Extension Road') !!}, in {!! $ggA('dlf-phase-5', 'DLF Phase 5') !!} and
    {!! $ggA('dlf-phase-4', 'DLF Phase 4') !!}, and around {!! $ggA('nirvana-country', 'Nirvana Country') !!} and
    {!! $ggA('south-city-2', 'South City 2') !!} usually have a good choice of IB maths tutors for home sessions. In
    newer societies such as {!! $ggA('emaar-palm-drive', 'Emaar Palm Drive') !!},
    {!! $ggA('emaar-palm-hills', 'Emaar Palm Hills') !!} and
    {!! $ggA('m3m-urbana-residences-sector-67-gurugram', 'M3M Urbana') !!}, where specialist HL tutors are fewer, a
    hybrid plan (one home visit plus online sessions) often gets a stronger tutor. Many IB students also have long
    school days with activities and CAS commitments, so weekend mornings are popular slots.
  </p>
  <p>
    For maths tuition across every board in the city, see our <a href="{{ url('/maths-home-tutor-gurgaon') }}">maths
    home tutor in Gurgaon</a> page, or browse tutors by locality on the <a href="{{ url('/city/gurugram') }}">Gurugram
    page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-tutor">What a good IB maths tutor does in each session</h2>
  <p>
    IB maths rewards a particular way of working, and the tutor should be building it every week, not just explaining
    this week's homework.
  </p>
  <ul>
    <li><strong>Works from the IB's language.</strong> The IB uses command terms such as "show that", "hence", "hence or otherwise", "write down" and "sketch". Each tells the student how much working is expected. A good tutor makes these second nature.</li>
    <li><strong>Marks like an examiner.</strong> IB markschemes award method marks, accuracy marks and answer marks separately, and follow-through marks can rescue a student who made an early slip. The tutor should mark the student's work this way so they learn where marks come from.</li>
    <li><strong>Trains the GDC properly.</strong> Knowing how to find intersections, run a regression or solve an equation numerically on the calculator saves minutes on every paper. On AI in particular this is not optional.</li>
    <li><strong>Balances calculator and non-calculator work.</strong> For AA students, regular non-calculator practice so Paper 1 does not come as a shock.</li>
    <li><strong>Keeps an error log.</strong> Most students lose marks in a small number of recurring ways. Writing them down, by topic, turns revision from vague to targeted.</li>
    <li><strong>Connects to other subjects.</strong> Calculus in maths turns up in HL Physics and Economics. A tutor who knows this helps the student see the same idea twice. If Physics needs its own support, our <a href="{{ url('/ib-physics-tutor-gurgaon') }}">IB physics tutor in Gurgaon</a> page explains how we match for it.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-start">Fees, home or online, and getting started</h2>
  <p>
    Across NXTutors, most sessions fall between <strong>₹800 and ₹2,500 an hour</strong>. IB maths, and especially HL,
    usually sits towards the upper end because specialist tutors are fewer. The fee depends on the course and level,
    the tutor's experience, travel time for home sessions, and how many sessions a week you take. You see each tutor's
    fee before the demo, and our <a href="{{ url('/pricing-guide') }}">pricing guide</a> explains the factors in more
    detail.
  </p>
  <p>
    IB maths works well at home and online. Home sessions help students who need someone watching their written
    working; online sessions widen the choice of HL specialists and save travel time. Many families mix the two. Our
    <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring guide</a> weighs up the
    options.
  </p>
  <p>
    To start, tell us the student's course (AA or AI), level (SL or HL), exam session, school year, what is going wrong,
    your sector or society, and the slots you prefer. We shortlist two or three matched IB maths tutors, you choose one
    for a <a href="{{ url('/demo-class') }}">free demo class</a>, and switching tutor later is free. Every tutor is
    ID-verified before being shortlisted. You can also browse <a href="{{ url('/tutors') }}">all tutors</a> first.
  </p>
  </section>

  </div>
</article>
