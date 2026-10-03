{{--
  Long-form guide for the "IB maths tutor Jaipur" page. Author: Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths). No anecdotes, years or results are claimed
  for him. No schools, coaching institutes, societies or other people are
  named.

  Course and assessment facts are reworded from ib-maths-tutor-gurgaon /
  ib-maths-tutor-mumbai, which cite the IB Diploma Programme subject briefs for
  Mathematics: analysis and approaches and Mathematics: applications and
  interpretation and the IB's published curriculum update (ibo.org): two
  courses, each at SL or HL; 150 h SL / 240 h HL; SL Papers 1 and 2 (40% each,
  1 h 30 min each); HL Papers 1 and 2 (30% each, 2 h each) and Paper 3 (20%,
  two extended problem-solving questions, GDC allowed); exploration 20% at
  both levels, teacher-marked and IB-moderated, roughly 12 to 20 pages,
  criteria: presentation, mathematical communication, personal engagement,
  reflection, use of mathematics; AA Paper 1 without a calculator, AI uses the
  GDC on all papers; revised courses first taught August 2027 and first
  examined May 2029 (AA Papers 1 and 2 to 100 marks from 110, Paper 3 to 50
  marks from 55 with one hour; exploration kept with shared SL/HL criteria,
  80/20 split kept); MYP maths four criteria. No other dates.

  RBSE note: rajeduboard.rajasthan.gov.in, Class 10 syllabus 2026-27
  (10_2027.pdf): mathematics taught from the NCERT textbook published under
  copyright; statistics 13 and probability 4 of 80 marks.

  Local detail only from database/seo-content/zones/jaipur.json,
  areas/jaipur-research.json, areas/jaipur-zone-guides.json and the city hub
  (IB/IGCSE a smaller group; online reach matters most for IB; Jaipur as a
  coaching city; Pink Line; Orange Line under construction; Vidhyadhar Nagar
  planned on the walled city's grid). Area links render only for active Jaipur
  areas. Fee wording is the approved sentence. FAQs render from
  faqs/ib-maths-tutor-jaipur.php.
--}}
@php
  $ibmjSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ibmjA = function (string $slug, string $label) use ($ibmjSlugs) {
      return in_array($slug, $ibmjSlugs, true)
          ? '<a href="' . e(url('/city/jaipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ibmjGuideTitle">
  <h2 id="ibmjGuideTitle">IB maths tutors in Jaipur: matched to AA or AI, SL or HL, and your exam session</h2>

  <p class="nx-guide__lede">
    In a city where most maths tuition is built around NCERT chapters and entrance batches, an IB Diploma student needs
    something different: a tutor who knows how the IB asks its questions, not just the mathematics behind them. Those
    tutors are fewer in Jaipur than CBSE or RBSE maths tutors, so the way you describe the need decides how good the
    match can be. I teach IB, IGCSE and ISC maths on NXTutors, and this page explains what we ask for, how the two IB
    courses and their papers work, what the coming course revision means for your child's session, how to handle the
    exploration honestly, and how a tutor gets to your colony. It belongs to our
    <a href="{{ url('/maths-home-tutor-jaipur') }}">maths home tutors in Jaipur</a> page and the
    <a href="{{ url('/ib-tutor-jaipur') }}">IB tutors in Jaipur</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibmj-send">What to send us</a> ·
    <a href="#ibmj-courses">AA or AI</a> ·
    <a href="#ibmj-papers">Papers and weights</a> ·
    <a href="#ibmj-session">Which syllabus applies</a> ·
    <a href="#ibmj-explore">The exploration</a> ·
    <a href="#ibmj-ncert">After NCERT maths</a> ·
    <a href="#ibmj-coaching">IB in a coaching city</a> ·
    <a href="#ibmj-zones">Reaching your colony</a> ·
    <a href="#ibmj-mode">Home or online</a> ·
    <a href="#ibmj-plan">Two-year plan</a> ·
    <a href="#ibmj-demo">The demo</a> ·
    <a href="#ibmj-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibmj-send">The five lines that make a good IB maths request</h2>
  <p>
    "IB maths, Class 11" is not enough for us to find the right person. A request that matches well carries five
    details:
  </p>
  <ol>
    <li><strong>Course:</strong> Analysis and Approaches (AA) or Applications and Interpretation (AI).</li>
    <li><strong>Level:</strong> Standard (SL) or Higher (HL).</li>
    <li><strong>Exam session:</strong> for example May 2028. This tells the tutor which syllabus version and past papers apply.</li>
    <li><strong>Where it hurts:</strong> a topic, the calculator, Paper 3, timing, or the exploration.</li>
    <li><strong>Your colony and slots:</strong> with the sector or scheme number, since a weekly route has to hold.</li>
  </ol>
  <p>
    With those five lines we can tell an AA HL specialist from a tutor who is good for AI SL statistics, and we only
    send names that fit both the course and the journey.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibmj-courses">Analysis and Approaches or Applications and Interpretation?</h2>
  <p>
    Every Diploma student takes one maths course, at one of two levels. Both courses share the same five areas (number
    and algebra, functions, geometry and trigonometry, statistics and probability, calculus) but handle them in
    opposite spirits.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How the two IB maths courses feel to a student</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">Analysis and Approaches</th><th scope="col">Applications and Interpretation</th></tr>
    </thead>
    <tbody>
      <tr><td>Centre of gravity</td><td>Algebra, proof and calculus worked by hand</td><td>Modelling, data and interpreting results</td></tr>
      <tr><td>Calculator</td><td>Paper 1 is sat without one</td><td>Graphic display calculator on every paper</td></tr>
      <tr><td>Typical question</td><td>"Show that…" followed by a chain of exact steps</td><td>A real situation the student must turn into a model</td></tr>
      <tr><td>Often chosen by</td><td>Future engineers, physicists, maths and economics students</td><td>Students heading to social sciences, biology, design or business</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Neither is the soft option at HL. What matters for tuition is that the skills barely overlap, so we never treat
    "IB maths" as one subject. If the choice is still open, read our
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">guide to AA, AI, SL and HL</a> and the national
    <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibmj-papers">Papers and weights on the current courses</h2>
  <p>
    The IB plans 150 teaching hours for SL and 240 for HL. Exams carry 80 percent of the grade and the exploration the
    remaining 20, at both levels.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Current IB DP mathematics assessment</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Standard Level</th><th scope="col">Higher Level</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1</td><td>1 h 30 min, 40%</td><td>2 h, 30%</td></tr>
      <tr><td>Paper 2</td><td>1 h 30 min, 40%</td><td>2 h, 30%</td></tr>
      <tr><td>Paper 3: two long problem-solving questions, calculator allowed</td><td>Not sat</td><td>20%</td></tr>
      <tr><td>Exploration (internal)</td><td>20%</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For AA students, the non-calculator Paper 1 is where NCERT-trained habits help most, since quick, exact algebra is
    exactly what it tests. Paper 3 is different from anything in Indian board papers: each question starts somewhere
    comfortable and walks the student, part by part, to a result they have not seen before. The only preparation that
    works is meeting such questions regularly from DP1, not discovering them in the mocks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibmj-session">Which syllabus version will your child sit?</h2>
  <p>
    The IB has revised both maths courses. The revised versions are taught from August 2027 and examined for the first
    time in May 2029. AA and AI stay, SL and HL stay, and the 80/20 split between exams and the exploration stays. For
    AA, Papers 1 and 2 drop from 110 to 100 marks, Paper 3 drops from 55 to 50 marks with one hour allowed, and the
    exploration keeps one shared set of criteria for SL and HL.
  </p>
  <p>
    The working rule: a student who started DP1 in August 2026 sits the current course in May 2028; one who starts in
    August 2027 or later is on the revised course. A tutor drilling the wrong set of past papers costs weeks, which is
    why the exam session is the third line of the request.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibmj-explore">The exploration: a Jaipur question, the student's own work</h2>
  <p>
    The exploration is a written mathematical investigation, roughly 12 to 20 pages, marked by the school on
    presentation, mathematical communication, personal engagement, reflection and the use of mathematics, then moderated
    by the IB. Being a fifth of the grade at both levels, it rewards an early start.
  </p>
  <p>
    Jaipur offers questions a student can own. Vidhyadhar Nagar was planned on the grid of the old walled city, which
    invites a study of distances on a grid against straight-line distance. Pink Line timings between Mansarovar and the
    old city can be modelled; so can the curve of a flyover or the flow of traffic around a circle. The idea has to be
    the student's own, though, and smaller is usually better than grander.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>What a tutor may do</h3>
  <p>
    Teach mathematics the idea needs, even beyond the syllabus; ask questions that help the student narrow a topic;
    explain what each criterion rewards using the IB's published examples; say in general terms that a section is
    unclear.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>What a tutor must not do</h3>
  <p>
    Choose the topic; write, dictate or reword sentences; do calculations, graphs or models; edit drafts line by line.
    These breach the IB's academic-integrity rules. The student should also tell their teacher about outside help.
  </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibmj-ncert">Arriving in the Diploma after NCERT maths</h2>
  <p>
    A Jaipur student who joins the Diploma from CBSE or from RBSE arrives with NCERT mathematics either way, since the
    Rajasthan Board's current syllabus prescribes the NCERT textbook too. That background brings real
    strengths: fluent algebra, standard trigonometry, grouped-data statistics. What it rarely brings is comfort with
    unguided questions, written justification, a graphic calculator, or a paper that mixes topics within one question.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Typical gaps on entering DP maths, by previous course</caption>
    <thead>
      <tr><th scope="col">Previous course</th><th scope="col">Usually brings</th><th scope="col">Usually needs</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE or RBSE Class 10</td><td>Speed with standard methods</td><td>Open-ended questions, reasoning in words, GDC use for AI</td></tr>
      <tr><td>ICSE Class 10</td><td>Neat, complete working</td><td>Modelling and calculator fluency</td></tr>
      <tr><td>IGCSE Extended</td><td>Familiar algebra and functions</td><td>A faster pace and longer chains of reasoning</td></tr>
      <tr><td>IB MYP</td><td>Open tasks judged on four criteria</td><td>Timed, dense exam papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Four to six weeks of algebra, functions and trigonometry before DP1 or early in it, with questions marked the IB
    way, settles most of these. Our <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to
    switching from CBSE to IB or IGCSE</a> lays out a bridging plan, and students arriving from Cambridge can read the
    <a href="{{ url('/igcse-maths-tutor-jaipur') }}">IGCSE maths tutor in Jaipur</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibmj-coaching">IB maths in a coaching city</h2>
  <p>
    Jaipur is a coaching city, and much of its tuition is organised as batches for board and entrance syllabuses.
    Those batches are built for a different exam. An IB student who joins one usually finds the pace fine but the questions wrong: no
    exploration, no Paper 3 style, no GDC, and marking that rewards the answer rather than the reasoning. One-to-one
    tuition lets the tutor follow the school's IB sequence instead of the batch's, and mark with IB markschemes
    every week. If your child is also considering an entrance, plan that separately rather than squeezing it into IB
    maths time.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibmj-zones">Reaching your colony: notes by zone</h2>
  <ul>
    <li><strong><a href="{{ url('/city/jaipur/zone/c-scheme-bani-park-vidhyadhar-nagar') }}">C-Scheme, Bani Park and Vidhyadhar Nagar</a>.</strong> In {!! $ibmjA('c-scheme', 'C-Scheme') !!}, apartment buildings near Statue Circle ask visitors to sign in and parking is tight in office hours; a tutor can come by Pink Line to Sindhi Camp and walk or take an auto.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/raja-park-jawahar-nagar-bapu-nagar') }}">Raja Park, Jawahar Nagar and Bapu Nagar</a>.</strong> {!! $ibmjA('jawahar-nagar', 'Jawahar Nagar') !!} runs in Sectors 1 to 5 of independent homes, so tutors park outside and come to the door; always give the sector.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/vaishali-nagar-west-jaipur') }}">Vaishali Nagar and West Jaipur</a>.</strong> {!! $ibmjA('vaishali-nagar', 'Vaishali Nagar') !!} lies between Queens Road, the Delhi Bypass, Ajmer Road and Sirsi Road with no metro station, so tutors arrive by scooter or car and the Amrapali Circle market slows evenings. On {!! $ibmjA('ajmer-road', 'Ajmer Road') !!}, colonies near Civil Lines can draw on Pink Line tutors, while the outer townships suit someone living close by.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/mansarovar-sanganer') }}">Mansarovar and Sanganer</a>.</strong> {!! $ibmjA('mansarovar', 'Mansarovar') !!} is where the Pink Line starts, which widens the pool; Shipra Path fills later in the evening.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/malviya-nagar-jagatpura-tonk-road') }}">Malviya Nagar, Jagatpura and Tonk Road</a>.</strong> {!! $ibmjA('malviya-nagar', 'Malviya Nagar') !!} has wide roads but busy market streets after dark, so a slot soon after school works better.</li>
  </ul>
  <p>
    Every locality is on the <a href="{{ url('/city/jaipur') }}">Jaipur home tutors</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibmj-mode">Home or online for IB maths in Jaipur</h2>
  <p>
    Because AA HL and AI HL specialists are a small group in any city, online is often what makes the right tutor
    possible, and the city hub notes that online reach matters most for IB work. Three practical points decide whether
    it works:
  </p>
  <ul>
    <li><strong>The notebook must be visible.</strong> For AA, a second camera or phone pointed at the page beats holding work up to the screen.</li>
    <li><strong>The calculator must be shared.</strong> For AI and HL Paper 3, a calculator emulator on screen, or a phone filming the keypad, lets the tutor see each step.</li>
    <li><strong>Keep one face-to-face anchor if you can.</strong> A weekend home session plus a weekday online one with the same tutor suits many families who live off the metro line.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring</a> guide has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibmj-plan">How the two Diploma years are usually tutored</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical IB maths tutoring year, fitted to the school's own calendar</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">Sessions are spent on</th><th scope="col">Per week</th></tr>
    </thead>
    <tbody>
      <tr><td>Weeks before or at the start of DP1</td><td>Algebra, functions, trigonometry; setting up the GDC for AI</td><td>Two, briefly</td></tr>
      <tr><td>DP1</td><td>Keeping pace with school topics; IB-style tests; early Paper 3 problems for HL</td><td>One or two</td></tr>
      <tr><td>Exploration months</td><td>Teaching the mathematics the student's idea needs; criteria explained, nothing drafted</td><td>As before</td></tr>
      <tr><td>DP2 to the mocks</td><td>Remaining topics, then papers by type under time</td><td>Two</td></tr>
      <tr><td>Mocks to May</td><td>Full papers marked to the markscheme; an error log by topic</td><td>Two or three</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibmj-demo">What to listen for in the demo</h2>
  <ol>
    <li>Does the tutor ask for the course, level and exam session before starting?</li>
    <li>Can they explain at once what "hence or otherwise", "show that" and "write down" each demand?</li>
    <li>Given a marked school test, do they separate method, accuracy and follow-through marks?</li>
    <li>For AA, do they insist on non-calculator practice? For AI, can they drive the GDC quickly?</li>
    <li>For HL, how would they introduce Paper 3?</li>
    <li>On the exploration, do they draw the line without being asked?</li>
    <li>Which route will they take to your colony, and at what time?</li>
  </ol>
  <p>
    If the demo misses on these, tell us; the next matched tutor gets their own free demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibmj-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For IB maths in Jaipur, the level, the tutor's journey and the number of weekly sessions shape the figure, and each
    fee is visible before the demo. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-jaipur') }}">home tuition fees in Jaipur</a> explain more.
  </p>
  <p>
    Send the five lines above. We come back with two or three matched tutors, you pick one for a
    <a href="{{ url('/demo-class') }}">free demo class</a>, and switching tutor later is free. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. You can
    also browse <a href="{{ url('/tutors') }}">tutor profiles</a>. For the sciences, see
    <a href="{{ url('/ib-physics-tutor-jaipur') }}">IB physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-jaipur') }}">IB and IGCSE chemistry</a> tutors in Jaipur.
  </p>
  </section>

  </div>
</article>
