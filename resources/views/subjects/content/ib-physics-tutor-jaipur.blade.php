{{--
  Long-form guide for the "IB physics tutor Jaipur" page. Byline: NXTutors
  Academic Team. No schools, coaching institutes, societies or people are
  named.

  Course facts are reworded from ib-physics-tutor-gurgaon / ib-physics-tutor-
  mumbai, which cite the IB Diploma Programme Physics guide, first assessment
  2025 (ibo.org): five themes A to E and their topics, with A.4 rigid body
  mechanics, A.5 Galilean and special relativity, B.4 thermodynamics, D.4
  induction and E.2 quantum physics HL only; SL 150 h / HL 240 h; Paper 1A
  multiple choice (SL 25, HL 40 questions) and Paper 1B data-based questions
  (20 marks), sat together, 36% (SL 1 h 30 min, HL 2 h); Paper 2 (SL 1 h 30
  min, 55 marks; HL 2 h 30 min, 90 marks) 44%; IA scientific investigation 24
  marks, 20%, about 10 hours, 3,000-word maximum, four criteria of 6 marks
  (research design, data analysis, conclusion, evaluation); groups of up to
  three with individual research questions and no shared raw data; data from
  lab work, fieldwork, spreadsheets, databases or simulations; no penalty for
  wrong MCQ answers; calculators and the data booklet on both papers;
  collaborative sciences project. No other dates.

  RBSE note: rajeduboard.rajasthan.gov.in Class 10 syllabus 2026-27
  (10_2027.pdf, read 2 Oct 2026): physics chapters light (8), human eye (4),
  electricity (7), magnetic effects of current (6) within an 80-mark science
  paper; NCERT science book prescribed.

  Local detail only from database/seo-content/zones/jaipur.json,
  areas/jaipur-research.json, areas/jaipur-zone-guides.json and the city hub
  (IB a smaller group; online reach matters most for IB; coaching city; Pink
  Line; Orange Line under construction). Area links render only for active
  Jaipur areas. Fee wording is the approved sentence. FAQs render from
  faqs/ib-physics-tutor-jaipur.php.
--}}
@php
  $ibpjSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ibpjA = function (string $slug, string $label) use ($ibpjSlugs) {
      return in_array($slug, $ibpjSlugs, true)
          ? '<a href="' . e(url('/city/jaipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ibpjGuideTitle">
  <h2 id="ibpjGuideTitle">IB physics tutors in Jaipur: DP Physics SL and HL, data questions and the investigation</h2>

  <p class="nx-guide__lede">
    Jaipur is a coaching city, and much of its physics teaching is built for board papers and entrance tests. IB Diploma
    Physics asks for something different: reasoning about an unfamiliar dataset, explaining in
    linked steps, and designing an investigation of your own. A tutor who is excellent at entrance problems may still
    be the wrong person for Paper 1B. This page explains the DP Physics course examined since 2025, how SL and HL
    differ, what changes for students coming from Indian boards or IGCSE, how the internal assessment works and where a
    tutor must stop, and how IB physics tuition reaches each part of Jaipur. Two related pages: our
    <a href="{{ url('/physics-home-tutor-jaipur') }}">physics home tutors in Jaipur</a> guide for every board, and the
    <a href="{{ url('/ib-tutor-jaipur') }}">IB tutors in Jaipur</a> hub for the programme as a whole.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibpj-themes">The five themes</a> ·
    <a href="#ibpj-assess">Assessment</a> ·
    <a href="#ibpj-level">SL or HL</a> ·
    <a href="#ibpj-from">From Class 10 science</a> ·
    <a href="#ibpj-jee">IB physics beside entrance physics</a> ·
    <a href="#ibpj-data">Paper 1B skills</a> ·
    <a href="#ibpj-ia">The investigation</a> ·
    <a href="#ibpj-zones">Tutors by zone</a> ·
    <a href="#ibpj-mode">Home or online</a> ·
    <a href="#ibpj-plan">Two-year plan</a> ·
    <a href="#ibpj-demo">The demo</a> ·
    <a href="#ibpj-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibpj-themes">The course: five themes, five HL-only topics</h2>
  <p>
    The current guide drops the old core-and-options model. Everyone studies five themes, with 150 teaching hours
    planned at SL and 240 at HL:
  </p>
  <ul>
    <li><strong>Theme A</strong> (space, time and motion) runs from kinematics through momentum to energy and power; only HL students go on to rigid bodies and to relativity, both Galilean and special.</li>
    <li><strong>Theme B</strong> (matter as particles) takes in heat transfer, the greenhouse effect, the gas laws and electric circuits; thermodynamics is HL only.</li>
    <li><strong>Theme C</strong> (waves) covers oscillations, how waves travel and interfere, resonance in standing waves and the Doppler effect; it has no HL-only topic, though HL goes deeper in places.</li>
    <li><strong>Theme D</strong> (fields) deals with gravity, electric and magnetic fields and the motion of charges and masses in them; induction is reserved for HL.</li>
    <li><strong>Theme E</strong> (nuclear and quantum) looks at atomic structure, decay, fission and fusion in stars; quantum physics is HL only.</li>
  </ul>
  <p>
    The detail to watch is that "shared" does not mean "identical". Several shared topics carry additional
    higher-level understandings, so HL work on fields or oscillations reaches further than SL work. Ask the tutor to
    point to those extra lines in the guide.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibpj-assess">How the grade is made up</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>DP Physics assessment, first examined 2025</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A, multiple choice</td><td>25 questions</td><td>40 questions</td><td rowspan="2">36% together</td></tr>
      <tr><td>Paper 1B, data-based questions</td><td>20 marks</td><td>20 marks</td></tr>
      <tr><td>Time for Paper 1 (both parts)</td><td>1 h 30 min</td><td>2 h</td><td>—</td></tr>
      <tr><td>Paper 2, short and extended answers</td><td>55 marks, 1 h 30 min</td><td>90 marks, 2 h 30 min</td><td>44%</td></tr>
      <tr><td>Scientific investigation (internal)</td><td>24 marks</td><td>24 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    There is no penalty for a wrong multiple-choice answer, so every item deserves a guess. Both papers allow a
    calculator and an unmarked copy of the data booklet. The booklet removes formula memorising but not formula choice, and choosing the right
    relationship for an unfamiliar situation is precisely what many questions test.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibpj-level">Choosing between SL and HL</h2>
  <p>
    HL suits a student considering engineering, physics or a related degree who is comfortable with algebra and long
    reasoning chains; it adds five topics and a much longer Paper 2. SL suits a student who needs a group 4 science
    but has priorities elsewhere, or whose other science is at HL. Note that SL is not a cut-down syllabus: all five
    themes remain. Check the maths choice as well, since a student pairing HL physics with AI SL maths may want support
    with rates of change and calculus; the <a href="{{ url('/ib-maths-tutor-jaipur') }}">IB maths tutor in Jaipur</a>
    page covers that side, and our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">guide to IB physics levels, the
    IA and the EE</a> discusses the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibpj-from">From Class 10 science to DP Physics</h2>
  <p>
    A student joining the Diploma from RBSE or CBSE has met physics as one part of a combined science paper. In the
    Rajasthan Board's current Class 10 syllabus, for instance, the physics chapters are light, the human eye,
    electricity and magnetic effects of current, together worth 25 of the paper's 80 marks, all taught from the NCERT
    book. Mechanics does not appear in that Class 10 list at all. DP1 therefore starts with kinematics and forces that feel half-familiar but
    are now examined with graphs, vectors and uncertainties.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What usually needs work on entering DP Physics</caption>
    <thead>
      <tr><th scope="col">Arriving from</th><th scope="col">Strength</th><th scope="col">Gap</th></tr>
    </thead>
    <tbody>
      <tr><td>RBSE or CBSE Class 10</td><td>Standard numericals, NCERT definitions</td><td>Motion graphs, vectors, uncertainty, explanations in linked steps</td></tr>
      <tr><td>ICSE Class 10</td><td>Careful written working</td><td>Data handling and open-ended questions</td></tr>
      <tr><td>IGCSE Physics</td><td>Broad content, practical vocabulary</td><td>More algebra; fields as a unifying idea</td></tr>
      <tr><td>IB MYP</td><td>Inquiry and criteria</td><td>Speed in exam-style calculation</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Half a dozen sessions on graphs, vectors and uncertainties, before DP1 or in its opening weeks, take most of the
    strain out of the first term. A student coming from Cambridge can compare notes with our
    <a href="{{ url('/igcse-physics-tutor-jaipur') }}">IGCSE physics tutors in Jaipur</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibpj-jee">IB physics beside entrance physics</h2>
  <p>
    In a coaching city, the obvious question is whether an entrance-style physics class will also serve an IB student.
    The content overlaps in places, such as mechanics, fields and circuits, but the IB assesses it in its own way, so
    test any class against what the IB actually rewards:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What IB physics rewards, and what to check in any other class</caption>
    <thead>
      <tr><th scope="col">IB DP Physics rewards</th><th scope="col">Question to ask of a batch or class</th></tr>
    </thead>
    <tbody>
      <tr><td>Working, explanation and the precise term, marked against a markscheme</td><td>Is written working read and marked, or only the final number or option?</td></tr>
      <tr><td>Reasoning from unfamiliar data, in Paper 1B and the investigation</td><td>Are data and graph questions practised every week?</td></tr>
      <tr><td>Uncertainties, error bars and gradient lines throughout</td><td>Is uncertainty taught as a routine skill?</td></tr>
      <tr><td>Topics such as the greenhouse effect, stars and, at HL, relativity</td><td>Does the syllabus followed include them?</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A student taking both routes needs a tutor who keeps them apart rather than letting one quietly crowd out the other.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibpj-data">Building the skills Paper 1B tests</h2>
  <p>
    Paper 1B gives the student an experiment or dataset they have not seen. The skills are learnable through steady
    practice, ideally one data question at the end of every session:
  </p>
  <ul>
    <li>Read the axes, units and overall trend aloud before any arithmetic, then say what slope and intercept stand for in the experiment.</li>
    <li>Turn a curved relationship into a straight line by choosing the right quantities for each axis.</li>
    <li>Handle uncertainty in all three forms (absolute, fractional, percentage), draw error bars, and fit the steepest and least steep lines that still pass through them.</li>
    <li>Use the exact vocabulary: random versus systematic error, precision versus accuracy.</li>
    <li>Suggest improvements tied to the method in front of you, not "repeat the experiment".</li>
  </ul>
  <p>
    Paper 2 needs a different routine: attempt a question, mark it with the markscheme, then rewrite it. Answers that
    show the equation, the substitution and a linked explanation collect marks that bare numbers do not.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibpj-ia">The scientific investigation and a tutor's limits</h2>
  <p>
    SL and HL students do the identical task. Each writes their own research question and answers it with numerical
    data, using roughly ten hours of class time, and reports in no more than 3,000 words. Marks come from four
    criteria, six apiece: how the investigation was designed, how the data were analysed, the conclusion, and the
    evaluation. The data need not come from a bench experiment; fieldwork, spreadsheets, databases and simulations
    are all accepted. Up to three students may collaborate, yet every one of them needs a separate question and their
    own raw data.
  </p>
  <p>
    Where a tutor helps: unpacking the criteria, testing whether an idea is workable and has real physics in it, and
    teaching graphs and uncertainty beforehand. Where a tutor stays out: the choice of question, the method, the data
    processing and every word of the report. Breaking that line is an academic-integrity matter, and the school
    confirms the work is the student's own. The collaborative sciences project is a separate group task run by the school.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibpj-zones">IB physics tutors by zone</h2>
  <p>
    Tutors with real DP Physics experience are scarce everywhere, so the route gets as much attention as the CV:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/jaipur/zone/c-scheme-bani-park-vidhyadhar-nagar') }}">C-Scheme, Bani Park and Vidhyadhar Nagar</a>.</strong> {!! $ibpjA('shastri-nagar', 'Shastri Nagar') !!} has no Pink Line station, so tutors mostly come by scooter or auto; Orange Line stops at Pani Pech and Ambabari are planned but not open. In {!! $ibpjA('jhotwara', 'Jhotwara') !!}, Kalwar Road is busy in the evening, so slightly earlier slots help.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/raja-park-jawahar-nagar-bapu-nagar') }}">Raja Park, Jawahar Nagar and Bapu Nagar</a>.</strong> {!! $ibpjA('adarsh-nagar', 'Adarsh Nagar') !!} is served by city buses but no metro; houses and builder floors make the visit simple once the tutor knows where to park near the market roads.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/vaishali-nagar-west-jaipur') }}">Vaishali Nagar and West Jaipur</a>.</strong> Mansarovar station stands in the Padmavati Colony part of {!! $ibpjA('nirman-nagar', 'Nirman Nagar') !!}, so a tutor from the station side can ride in; high-rise buildings register visitors at the gate.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/mansarovar-sanganer') }}">Mansarovar and Sanganer</a>.</strong> {!! $ibpjA('sanganer', 'Sanganer') !!}, home to the airport, mixes narrow old lanes with newer apartment projects; Sanganer and Durgapura stations are the nearest rail links.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/malviya-nagar-jagatpura-tonk-road') }}">Malviya Nagar, Jagatpura and Tonk Road</a>.</strong> On {!! $ibpjA('tonk-road', 'Tonk Road') !!}, Gandhinagar station sits at Tonk Phatak; a tutor already on your side of the road is easier to keep weekly.</li>
  </ul>
  <p>
    See every locality on the <a href="{{ url('/city/jaipur') }}">Jaipur home tutors</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibpj-mode">Home or online for IB physics</h2>
  <p>
    Large parts of the course suit a screen: data questions, marking against markschemes and talking through an
    investigation idea. Going online also reaches IB-experienced tutors outside your zone, and the city hub singles out
    IB as the work where that reach matters most. In-person sessions pay off for long Paper 2 problems and for students
    who focus better with company. Families away from the Pink Line often keep a weekend visit at home and add weekday
    online slots with that same tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibpj-plan">How tutoring time is spread over the Diploma</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical DP Physics tutoring plan</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Just before DP1, or its first weeks</td><td>Graphs of motion, vector work, handling uncertainty</td><td>One or two</td></tr>
      <tr><td>DP1</td><td>Themes A to C with school; one data question every session</td><td>One at SL, two at HL</td></tr>
      <tr><td>While the IA is under way</td><td>What each criterion asks; is the idea workable; analysis practice. The write-up stays the student's</td><td>Only a handful overall</td></tr>
      <tr><td>DP2</td><td>Themes D and E, then complete papers under time, marked against IB markschemes</td><td>Two, rising before mocks</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibpj-demo">Questions for the IB physics demo</h2>
  <ol>
    <li>Can the tutor name the five themes and the HL-only topics? Talk of "options" means the old course.</li>
    <li>Ask them to draw maximum and minimum gradient lines through error bars and explain the uncertainty in the gradient.</li>
    <li>Ask where their help with the investigation stops; a clear answer should come without hesitation.</li>
    <li>Do they mark with IB markschemes and ask for rewrites of lost-mark answers?</li>
    <li>If your child also attends entrance coaching, how will they keep the IB work on track?</li>
    <li>Which route will they take to your colony, and at what time?</li>
  </ol>
  <p>
    Unhappy with the answers? Say so, and another matched tutor offers a free demo of their own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibpj-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors price their own sessions and the figure appears on each profile ahead of the demo. Background reading: our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and the post on
    <a href="{{ url('/blog/home-tuition-fees-jaipur') }}">home tuition fees in Jaipur</a>.
  </p>
  <p>
    Send SL or HL, the DP year, the sticking point (a theme, Paper 1B, Paper 2 or the investigation), your colony and
    the times you can offer. Two or three matched tutors come back; one gives a
    <a href="{{ url('/demo-class') }}">free demo class</a>, and changing tutor afterwards costs nothing. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. Other routes in:
    <a href="{{ url('/tutors') }}">tutor profiles</a>, our national <a href="{{ url('/physics-home-tutor') }}">physics
    home tutor</a> guide, and the Jaipur page for <a href="{{ url('/ib-igcse-chemistry-tutor-jaipur') }}">IB and IGCSE
    chemistry</a>.
  </p>
  </section>

  </div>
</article>
