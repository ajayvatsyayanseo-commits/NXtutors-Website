{{--
  Long-form guide for the "IGCSE maths tutor Gurgaon" page, written by Ajay
  Vatsyayan (IB, IGCSE and ISC maths). Paper structure, tiers, grades,
  calculator rules, accuracy conventions and command words come from the
  Cambridge IGCSE Mathematics 0580 syllabus for exams in 2025, 2026 and 2027
  (version 3, cambridgeinternational.org). The Additional Mathematics note
  follows the Cambridge IGCSE 0606 syllabus for 2025-2027. Schools are named only
  as schools our students attend, never as partners; each was checked earlier
  against the school's own website (see maths-home-tutor-gurgaon). NXTutors
  facts are limited to published policy. FAQs render from
  faqs/igcse-maths-tutor-gurgaon.php.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide igm-guide" aria-labelledby="igmGuideTitle">
  <h2 id="igmGuideTitle">IGCSE maths tutor in Gurgaon: Cambridge 0580, Core and Extended</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE Mathematics looks friendly on paper: nine familiar topics, two exams, and a syllabus most students
    have partly seen before. The marks are lost elsewhere: in the non-calculator paper, in rounding too early, in
    answering "show that" with a number instead of a method, and in the tier decision made a year before the exam.
    This guide explains the 0580 syllabus for the 2025 to 2027 exams, how Core and Extended differ, what the command
    words ask for, how to use past papers properly, where Additional Mathematics fits, and how IGCSE maths tuition
    works for families across Gurugram.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igm-papers">The four papers</a> ·
    <a href="#igm-tier">Core or Extended</a> ·
    <a href="#igm-topics">Topics and what is new</a> ·
    <a href="#igm-noncalc">The non-calculator paper</a> ·
    <a href="#igm-command">Command words and accuracy</a> ·
    <a href="#igm-past">Past-paper method</a> ·
    <a href="#igm-addmaths">Additional Maths (0606)</a> ·
    <a href="#igm-plan">A Grade 9 and 10 plan</a> ·
    <a href="#igm-switch">Coming from CBSE or ICSE</a> ·
    <a href="#igm-session">A good session</a> ·
    <a href="#igm-schools">Gurgaon IGCSE schools</a> ·
    <a href="#igm-start">Fees and getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igm-papers">How Cambridge IGCSE Mathematics 0580 is examined</h2>
  <p>
    Every candidate sits two papers, and which two depends on the tier. Core candidates take Paper 1 and Paper 3;
    Extended candidates take Paper 2 and Paper 4. In each pair, the first paper is without a calculator and the second
    requires a scientific calculator. Each paper is worth half of the qualification. Candidates write their answers on
    the question paper and must show all necessary working.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IGCSE Mathematics 0580 papers, exams in 2025, 2026 and 2027</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Tier</th><th scope="col">Calculator</th><th scope="col">Time</th><th scope="col">Marks</th><th scope="col">Weighting</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1</td><td>Core</td><td>Not allowed</td><td>1 hour 30 minutes</td><td>80</td><td>50%</td></tr>
      <tr><td>Paper 3</td><td>Core</td><td>Scientific calculator required</td><td>1 hour 30 minutes</td><td>80</td><td>50%</td></tr>
      <tr><td>Paper 2</td><td>Extended</td><td>Not allowed</td><td>2 hours</td><td>100</td><td>50%</td></tr>
      <tr><td>Paper 4</td><td>Extended</td><td>Scientific calculator required</td><td>2 hours</td><td>100</td><td>50%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    All four papers mix structured questions (with parts such as (a), (b), (c)(i)) and unstructured ones, and a single
    question can draw on more than one topic. Graphical and algebraic calculators are not permitted on the calculator
    papers. Exams run in the June and November series, and schools in India can also enter candidates in the March
    series, which some Gurugram schools use.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-tier">Core or Extended: the decision that sets the ceiling</h2>
  <p>
    The tier decides which grades are possible. Core candidates can achieve grades C to G. Extended candidates can
    achieve A* to E. So a Core entry caps the student at a C, however well they do, and a student who needs an A or
    A* for their next step must be entered for Extended.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Core (Papers 1 and 3)</h3>
  <p>
    Core content only, shorter papers and more direct questions. About 60 to 70 percent of the marks test knowledge
    and technique, and the rest test analysis and communication. It suits students who find maths hard and need a
    secure pass. It is not a good route for anyone planning maths-heavy study after Grade 10.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Extended (Papers 2 and 4)</h3>
  <p>
    The full syllabus, including all Core content plus more. The balance flips: roughly half or more of the marks go
    to analysis, interpretation and communication. Questions are longer and less guided. This is the tier for students
    heading to IB Diploma maths, A Level maths or any science stream.
  </p>
      </div>
    </div>
  <p>
    Schools usually make the entry decision in Grade 10 based on mock results, though teaching sets are often fixed in
    Grade 9. If your child is in a Core set but capable of more, raise it early. Moving up is possible, but it means
    learning the Extended-only content and getting used to longer, less guided questions, and that takes months, not
    weeks. A tutor can close that gap, and this is one of the most common IGCSE requests we get in Gurugram. Our
    <a href="{{ url('/blog/igcse-coreextended-maths') }}">IGCSE Core and Extended maths guide</a> goes into the choice in
    more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-topics">The nine topics, and what changed for 2025</h2>
  <p>
    The syllabus is arranged in nine topics: number; algebra and graphs; coordinate geometry; geometry; mensuration;
    trigonometry; transformations and vectors; probability; and statistics. Cambridge notes that they are not in a
    teaching order, so every school sequences them differently. Cambridge designs the course around roughly 130 guided
    learning hours.
  </p>
  <p>
    The current syllabus was refreshed for exams from 2025. For parents using older books or older tutors, the changes
    matter:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Main content changes in 0580 for 2025 to 2027</caption>
    <thead>
      <tr><th scope="col">Tier</th><th scope="col">Added</th><th scope="col">Removed</th></tr>
    </thead>
    <tbody>
      <tr><td>Core</td><td>Inequalities; recall of certain squares, cubes and roots</td><td>Adding and subtracting vectors; multiplying a vector by a scalar; data collection (no longer examined)</td></tr>
      <tr><td>Extended</td><td>Surds; domain and range; exact trigonometric values; recall of certain squares, cubes and roots; more graph forms</td><td>Linear programming; proper subsets; congruence criteria; box-and-whisker plots; data collection (no longer examined)</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The practical point: past papers from before 2025 still help, but a few questions in them test content that has
    gone, and they do not practise the new topics. A tutor should know which questions to skip and where to find
    practice for surds, exact trigonometric values and domain and range.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-noncalc">The non-calculator paper is where marks go missing</h2>
  <p>
    Half of every candidate's grade now comes from a paper without a calculator. Students who have leaned on a
    calculator since Grade 6 often find this the biggest shock. The Core non-calculator paper covers all Core content
    except the calculator-specific skills; the Extended one covers Extended content. Typical trouble spots:
  </p>
  <ul>
    <li><strong>Fractions and decimals.</strong> Dividing by a fraction, converting recurring decimals, and working with mixed numbers by hand.</li>
    <li><strong>Estimation.</strong> Rounding each value to one significant figure and estimating a result, a regular early question.</li>
    <li><strong>Surds and indices (Extended).</strong> Simplifying, rationalising denominators, and fractional and negative indices, all exactly.</li>
    <li><strong>Exact trigonometric values (Extended).</strong> Knowing sin, cos and tan of the standard angles without a calculator.</li>
    <li><strong>Long multiplication and division.</strong> Unfashionable, but tested, and slow students lose time here that they need later.</li>
  </ul>
  <p>
    The fix is little and often. Ten minutes of mental and written arithmetic at the start of each tutoring session,
    for a whole term, changes this paper more than any amount of last-minute revision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-command">Command words, working and accuracy</h2>
  <p>
    Cambridge publishes the command words it uses, and each tells the student exactly what the examiner wants. The ones
    that cause most confusion:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Selected IGCSE Mathematics command words</caption>
    <thead>
      <tr><th scope="col">Command word</th><th scope="col">Cambridge meaning</th><th scope="col">What it means in practice</th></tr>
    </thead>
    <tbody>
      <tr><td>Show (that)</td><td>Provide structured evidence that leads to a given result</td><td>The answer is given; the marks are for the method, so every step must be written</td></tr>
      <tr><td>Write down</td><td>Give an answer without significant working</td><td>Usually one mark; do not spend long on it</td></tr>
      <tr><td>Work out / Calculate</td><td>Calculate from given facts, figures or information</td><td>Show the method so method marks are available if the answer slips</td></tr>
      <tr><td>Sketch</td><td>Make a simple freehand drawing showing the key features</td><td>Label intercepts, turning points and axes; accuracy to scale is not needed</td></tr>
      <tr><td>Plot</td><td>Mark point(s) on a graph</td><td>Accurate points, each within half a small square</td></tr>
      <tr><td>Explain</td><td>Set out purposes or reasons, supported with evidence</td><td>A sentence with a reason, often using a number from the question</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Accuracy rules cost careless students marks every series. Non-exact answers should be given to three significant
    figures, and angles in degrees to one decimal place, unless the question says otherwise. Students should use the
    calculator's value of π or 3.142, and should not round until the final answer, carrying full values forward into
    later parts. If a question asks for an exact value, the answer may need to be in terms of π or as a surd. And if a
    question asks the student to show their working, they cannot get full marks without it, even with the right answer.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-past">A past-paper method that actually works</h2>
  <p>
    Every IGCSE student is told to "do past papers". Doing them badly (open book, untimed, marked only for the final
    answer) teaches very little. This is the method I use with IGCSE students:
  </p>
  <ol>
    <li><strong>Topic papers first.</strong> In Grade 9 and early Grade 10, use past questions sorted by topic to secure each area as it is taught.</li>
    <li><strong>Full papers under time.</strong> From the second half of Grade 10, sit full papers in exam time, with the right paper for the tier and the calculator rules followed strictly.</li>
    <li><strong>Mark with the mark scheme.</strong> Cambridge mark schemes show method marks (M), accuracy marks (A) and independent marks (B). Marking this way teaches the student where the marks really are.</li>
    <li><strong>Keep an error log.</strong> For every lost mark, record the topic and the type of mistake: concept, method, arithmetic slip, rounding, misread question.</li>
    <li><strong>Redo, don't just review.</strong> A week later, the student redoes the questions they got wrong, without looking at the solution.</li>
    <li><strong>Read the examiner reports.</strong> Cambridge publishes reports on each series describing common errors. A good tutor uses them.</li>
  </ol>
  <p>
    Remember the syllabus changed for 2025, so mix recent papers with older ones and skip questions on content that has
    been removed.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-addmaths">A note on Additional Mathematics (0606)</h2>
  <p>
    Some Gurugram schools offer Cambridge IGCSE Additional Mathematics alongside 0580 for strong students. It goes well
    beyond the Extended syllabus into areas such as further functions, logarithms, and an introduction to calculus.
    Students sit two papers of two hours and 80 marks each: Paper 1 without a calculator and Paper 2 with a scientific
    calculator. Grades A* to E are available; there are no F or G grades.
  </p>
  <p>
    Additional Maths is excellent preparation for IB Maths Analysis and Approaches HL or A Level maths, because it
    brings in calculus and harder algebra early. It is not the right choice for a student still insecure on Extended
    0580. If your child is taking both, look for a tutor who teaches both, so the two courses reinforce each other.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-plan">A Grade 9 and Grade 10 plan with a tutor</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Typical two-year IGCSE maths tutoring plan</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9, first half</td><td>Close gaps from earlier years; algebra fluency; non-calculator arithmetic habit</td><td>1</td></tr>
      <tr><td>Grade 9, second half</td><td>Follow school topics; topic past questions; tier conversation with the school if needed</td><td>1 to 2</td></tr>
      <tr><td>Grade 10, first half</td><td>Finish the syllabus; Extended-only topics; first full papers</td><td>2</td></tr>
      <tr><td>Mocks and after</td><td>Timed papers by pair (1 and 3, or 2 and 4); error log; examiner reports</td><td>2 to 3</td></tr>
      <tr><td>Final month</td><td>Weak topics, exam routines, accuracy rules</td><td>2 to 3</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Many IGCSE students in Gurugram move on to the IB Diploma in Grade 11. If that is the plan, the Extended tier and
    strong algebra matter more than the exact grade. Our <a href="{{ url('/ib-maths-tutor-gurgaon') }}">IB maths tutor
    in Gurgaon</a> page explains what comes next.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-switch">Coming into IGCSE from CBSE or ICSE</h2>
  <p>
    Gurugram has many students who join a Cambridge school in Grade 8 or 9 after years on CBSE or ICSE, often after a
    family move. The maths itself is rarely the problem; most of the arithmetic, algebra and geometry will be familiar.
    What trips these students up is different:
  </p>
  <ul>
    <li><strong>Unfamiliar topics.</strong> Transformations and vectors, set notation and Venn diagrams, and functions notation such as f(x) and inverse functions (Extended) can be new, or taught earlier than the student expects.</li>
    <li><strong>Question style.</strong> IGCSE questions often give less guidance and expect the student to decide the method. Students used to recognising a question type from a textbook exercise can freeze.</li>
    <li><strong>Accuracy conventions.</strong> Three significant figures, one decimal place for angles, no early rounding. These are small rules, but they appear on every calculator paper.</li>
    <li><strong>Answering on the paper.</strong> Working goes in the space provided, and a cramped or disordered method can cost method marks.</li>
  </ul>
  <p>
    A few weeks with a tutor who knows both systems usually settles it: an audit of the Cambridge topics the student has
    not met, then a steady diet of past questions in the new style. Students joining in Grade 10 need this quickly,
    because the tier decision will be made on their mock results.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-session">What a good IGCSE maths session looks like</h2>
  <p>
    Parents sometimes ask what they should see happening in a one-hour session. A good IGCSE maths tutor will usually:
  </p>
  <ol>
    <li><strong>Start with a short warm-up without a calculator,</strong> five or ten minutes of arithmetic, estimation or exact values.</li>
    <li><strong>Check last week's work,</strong> looking at the method and the layout, not only the final answers.</li>
    <li><strong>Teach or consolidate one topic,</strong> usually the one the school is on, or a weak area from the error log.</li>
    <li><strong>Set past-paper questions on it,</strong> in the student's tier, and mark them with the mark scheme in front of the student.</li>
    <li><strong>Agree the homework,</strong> a small set of questions, with a clear time to spend on them.</li>
  </ol>
  <p>
    If the session is mostly the tutor talking while the student watches, something is wrong. In maths, the pencil
    should be in the student's hand for most of the hour.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-schools">Gurgaon IGCSE and Cambridge schools our students attend</h2>
  <p>
    Our IGCSE maths students come from schools such as Lancers International School, GD Goenka World School, Scottish
    High International School and Suncity School, among others. NXTutors has no partnership or affiliation with any of
    them; they are schools where the students we tutor study, and the boards listed are as stated on each school's
    website. Several of these schools run more than one board, so tell us the exact course your child sits.
  </p>
  <p>
    IGCSE families are spread across the city. In {!! $ggA('dlf-phase-1', 'DLF Phase 1') !!},
    {!! $ggA('dlf-phase-2', 'DLF Phase 2') !!} and {!! $ggA('dlf-phase-3', 'DLF Phase 3') !!}, and along
    {!! $ggA('-golf-course-extn', 'Golf Course Extension Road') !!}, there is usually a good choice of Cambridge maths
    tutors for home visits. Around {!! $ggA('sushant-lok-phase-i', 'Sushant Lok Phase I') !!},
    {!! $ggA('sector-43', 'Sector 43') !!}, {!! $ggA('sector-56', 'Sector 56') !!} and
    {!! $ggA('sector-57', 'Sector 57') !!}, tutors come from both sides of the city, so slot timing decides the match.
    Further out, in {!! $ggA('vatika-city-sector-49-gurugram', 'Vatika City') !!} or
    {!! $ggA('emaar-palm-hills', 'Emaar Palm Hills') !!}, a mix of home and online sessions often works best. For
    maths tuition across every board, see our <a href="{{ url('/maths-home-tutor-gurgaon') }}">maths tutor in
    Gurgaon</a> page, and for the sciences our <a href="{{ url('/igcse-physics-tutor-gurgaon') }}">IGCSE physics
    tutor</a> and <a href="{{ url('/ib-igcse-chemistry-tutor-gurgaon') }}">IB and IGCSE chemistry tutor</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-start">Fees, home or online, and getting started</h2>
  <p>
    Across NXTutors, most sessions fall between <strong>₹800 and ₹2,500 an hour</strong>. IGCSE maths sits in the
    middle to upper part of that range, depending on the tier, whether Additional Maths is involved, the tutor's
    experience with Cambridge papers, travel time and how often you meet. You see each tutor's fee before the demo; our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explains the factors.
  </p>
  <p>
    IGCSE maths works at home and online. For the non-calculator paper especially, it helps if the tutor can see the
    student's handwritten working, either at the table or through a camera pointed at the notebook.
  </p>
  <p>
    Tell us the student's grade, tier (Core or Extended, or not yet decided), exam series, whether Additional Maths is
    in the picture, your sector or society and the slots you prefer. We shortlist two or three matched IGCSE maths
    tutors, you pick one for a <a href="{{ url('/demo-class') }}">free demo class</a>, and switching later is free.
    Every tutor is ID-verified. You can also browse <a href="{{ url('/tutors') }}">tutors</a> yourself.
  </p>
  </section>

  </div>
</article>
