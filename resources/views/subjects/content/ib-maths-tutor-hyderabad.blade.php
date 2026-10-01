{{--
  Long-form guide for the "IB maths tutor Hyderabad" page. Author: Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results
  are claimed for him. No schools, societies or other people are named.

  Course and assessment facts are reworded from ib-maths-tutor-gurgaon and
  ib-maths-tutor-mumbai, which cite the IB Diploma Programme subject briefs
  for Mathematics: analysis and approaches and Mathematics: applications and
  interpretation and the IB's curriculum update for the revised courses
  (ibo.org): two courses at SL or HL; 150 h SL / 240 h HL; SL Papers 1 and 2
  (40% each, 1 h 30 min each), HL Papers 1 and 2 (30% each, 2 h each) and
  Paper 3 (20%, two extended problem-solving questions, GDC); exploration 20%
  at both levels, teacher-marked and IB-moderated, roughly 12 to 20 pages; AA
  Paper 1 without a calculator, AI uses the GDC on all papers; revised courses
  first taught August 2027 and first examined May 2029 (AA Papers 1 and 2 to
  100 marks from 110, Paper 3 to 50 marks from 55 with one hour; exploration
  kept with shared SL/HL criteria; 80/20 balance kept); MYP maths assessed on
  four criteria. No other dates.

  Telangana facts from bse.telangana.gov.in (G.O.Ms.No.33 of 2022: six-paper
  SSC, one 80-mark maths paper; G.O.Ms.No.15 of 2018: Telugu compulsory in
  Classes I-X in every school whatever the board), as cited in
  telangana-board-tutor-hyderabad. Local detail only from
  areas/hyderabad-research.json, hyderabad-zone-guides.json, zones/
  hyderabad.json and the city hub (international schools keep their own
  terms). Area links render only for active Hyderabad areas. Fee wording is
  the approved sentence. FAQs render from faqs/ib-maths-tutor-hyderabad.php.
--}}
@php
  $hbmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $hbmA = function (string $slug, string $label) use ($hbmSlugs) {
      return in_array($slug, $hbmSlugs, true)
          ? '<a href="' . e(url('/city/hyderabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="hbmGuideTitle">
  <h2 id="hbmGuideTitle">IB maths tutor in Hyderabad: match the course first, then the commute</h2>

  <p class="nx-guide__lede">
    Ask three families in a Gachibowli tower what "IB maths" means and you may get three different courses. One
    child is on Analysis and Approaches at Higher Level and wrestling with proof; another is on AI SL, the
    applied course at the lower level, and needs help reading data off a graphic calculator; a third has just joined the
    Diploma from the Telangana SSC or CBSE and finds the questions strangely unguided. A tutor who suits one of them
    may not suit the others. Ajay Vatsyayan, the NXTutors author for IB, IGCSE and ISC maths, wrote this page to
    explain how we match on course, level and exam session, and then on a journey a tutor can keep across Hyderabad.
    For the wider picture, see <a href="{{ url('/maths-home-tutor-hyderabad') }}">maths home tutors in Hyderabad</a>
    and the <a href="{{ url('/ib-tutor-hyderabad') }}">Hyderabad IB tutors</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#hbm-three">Three facts we need</a> ·
    <a href="#hbm-assess">How the grade is made</a> ·
    <a href="#hbm-cohort">Which syllabus your cohort sits</a> ·
    <a href="#hbm-explore">The exploration</a> ·
    <a href="#hbm-gaps">Joining from SSC, CBSE or IGCSE</a> ·
    <a href="#hbm-gdc">Calculator habits</a> ·
    <a href="#hbm-west">Tutors by zone</a> ·
    <a href="#hbm-mode">Home, online or both</a> ·
    <a href="#hbm-demo">Judging the demo</a> ·
    <a href="#hbm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="hbm-three">Three facts we need before suggesting anyone</h2>
  <p>
    Every Diploma student takes one maths course, chosen from two, each offered at two levels. The IB plans 150
    teaching hours at Standard Level and 240 at Higher Level. All four routes share the same five broad areas,
    from algebra and functions to calculus and statistics, but the emphasis does not.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The four IB DP maths routes and what each asks of a tutor</caption>
    <thead>
      <tr><th scope="col">Route</th><th scope="col">Character</th><th scope="col">What the tutor must be strong in</th></tr>
    </thead>
    <tbody>
      <tr><td>AA SL</td><td>Algebraic, with one paper taken without a calculator</td><td>Clean manipulation, exact answers, calculus by hand</td></tr>
      <tr><td>AA HL</td><td>The most abstract route, with proof and a demanding Paper 3</td><td>Proof, extended reasoning, unfamiliar multi-step problems</td></tr>
      <tr><td>AI SL</td><td>Modelling and statistics, graphic calculator on every paper</td><td>Interpreting context, choosing a model, calculator fluency</td></tr>
      <tr><td>AI HL</td><td>Deeper modelling and statistics, also with a Paper 3</td><td>Statistical testing, modelling judgment, long applied problems</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The third fact is the exam session, explained below. With course, level and session in hand, we look for tutors
    who teach that exact combination. If the course decision is still open, our
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">guide to AA, AI, SL and HL</a> sets out the choice; for the
    syllabus itself, read our <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> guide for all of India.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbm-assess">How the final grade is put together</h2>
  <p>
    Four-fifths of the grade comes from written exams and one-fifth from the exploration, at both levels. The split
    within the exams differs:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Current IB DP maths components, by what each one tests</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">What it rewards</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1</td><td>40%, 1 h 30 min</td><td>30%, 2 h</td><td>On AA, working without a calculator; on AI, the GDC is allowed</td></tr>
      <tr><td>Paper 2</td><td>40%, 1 h 30 min</td><td>30%, 2 h</td><td>Calculator-assisted problem solving across the syllabus</td></tr>
      <tr><td>Paper 3</td><td>Not taken</td><td>20%</td><td>Two extended problem-solving questions, GDC allowed</td></tr>
      <tr><td>Exploration</td><td>20%</td><td>20%</td><td>A written investigation of the student's own question</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two consequences for tutoring. At SL, Papers 1 and 2 carry equal weight, so an AA student who is fine with a
    calculator but weak without one is giving away a large share of the grade. At HL, Paper 3 rewards students who
    can carry an earlier result into a later part of a question they have never seen; it is learned slowly, from DP1,
    through regular exposure to past Paper 3 questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbm-cohort">Which version of the syllabus your child's cohort sits</h2>
  <p>
    Revised versions of AA and AI start in classrooms in August 2027, and their first exams fall in May 2029. Both courses and both levels continue. For AA, the published changes include Papers 1 and 2 moving from 110
    marks to 100 and Paper 3 becoming a 50-mark, one-hour paper, while the exploration remains, now judged by
    identical criteria at both levels, and the exam share of the grade stays at 80%.
  </p>
  <ul>
    <li><strong>Started DP1 in August 2026:</strong> the current course, examined in May 2028.</li>
    <li><strong>Starting DP1 in August 2027 or later:</strong> the revised course, first examined in May 2029.</li>
  </ul>
  <p>
    International schools in Hyderabad keep their own terms, and some families follow a different session, so give us
    the session your school has registered your child for. The practical point is past papers: a tutor drilling the
    wrong set of papers costs weeks, and from 2027 onwards the right set will depend on the cohort.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbm-explore">The exploration, and where outside help must stop</h2>
  <p>
    In the exploration, a student investigates a mathematical question of their own and writes it up, usually
    somewhere between 12 and 20 pages, which is marked by the school against published criteria (presentation and communication, personal
    engagement, reflection, and the use of mathematics) and moderated by the IB. At a fifth of the grade it can lift a
    final result, which is exactly why the rules on help are strict.
  </p>
  <p>
    A tutor may teach the mathematics a student needs, even beyond the syllabus, ask questions that help them narrow
    a broad interest to something workable, and walk through the criteria with the IB's published sample work. A tutor must not choose the topic, write or reword sentences, run calculations, draw graphs or edit a
    draft line by line. The student should tell the school's maths teacher about any outside tutoring.
  </p>
  <p>
    Hyderabad offers students plenty of questions they could genuinely own: modelling waiting times between trains on a
    metro line, comparing journey times by road and by rail across the city, the shape of a flyover's curve, or how a
    lake's water level changes across the monsoon. Depth beats ambition here: a narrow question pursued all the way
    through tends to earn more than a grand one left half-done.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbm-gaps">Joining the Diploma from the Telangana SSC, CBSE, ICSE, IGCSE or the MYP</h2>
  <p>
    Hyderabad's DP classes draw on several routes into Grade 11, and the gap each student brings is predictable.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where students usually need a bridge into DP maths</caption>
    <thead>
      <tr><th scope="col">Previous course</th><th scope="col">Usually strong in</th><th scope="col">Usually needs</th></tr>
    </thead>
    <tbody>
      <tr><td>Telangana SSC</td><td>Standard methods from a single 80-mark maths paper</td><td>Unguided, multi-part questions; written reasoning; the GDC for AI</td></tr>
      <tr><td>CBSE Class 10</td><td>Routine problem types, steady algebra</td><td>Questions that give little direction; mathematical communication</td></tr>
      <tr><td>ICSE Class 10</td><td>Neat, complete working</td><td>Modelling and calculator work, especially on AI</td></tr>
      <tr><td>Cambridge IGCSE</td><td>Familiar algebra and functions</td><td>The faster pace and greater depth of DP1</td></tr>
      <tr><td>IB MYP</td><td>Open tasks; work judged on four criteria</td><td>Timed, dense papers and exam technique</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Whatever the starting point, the repair work is similar: a month or so of algebra, functions and trigonometry,
    ideally in the summer before Grade 11, with every exercise marked against IB-style markschemes. Our post on
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">moving from CBSE to IB or IGCSE</a> lays out such
    a plan, and it suits State Board and ICSE students as well. Students arriving from Cambridge should also read
    our <a href="{{ url('/igcse-maths-tutor-hyderabad') }}">IGCSE maths tutor in Hyderabad</a> page. One local point for
    younger siblings: Telangana's 2018 law makes Telugu a compulsory language up to Class 10 in schools of every board,
    so MYP and IGCSE years carry a Telugu class alongside maths.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbm-gdc">Calculator habits: the hidden half of IB maths</h2>
  <ul>
    <li><strong>For AA students,</strong> the risk is leaning on the calculator so much in Paper 2 practice that Paper 1 suffers. A tutor should set short non-calculator drills in every session: exact values, fractions, logarithm laws, differentiation by hand.</li>
    <li><strong>For AI students,</strong> the risk is the opposite: slow, uncertain keying on the GDC. Statistical tests, regression, finance and solving equations graphically should become fast and automatic, and the tutor needs to see the screen to correct technique.</li>
    <li><strong>For HL students on either course,</strong> Paper 3 combines both habits: a structured investigation in which the calculator helps but the reasoning carries the marks.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbm-west">IB maths tutors by zone: who can reach you</h2>
  <p>
    Few tutors teach HL maths week in, week out, so in Hyderabad the route often decides between two equally good
    candidates. Notes from our
    area research:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/hyderabad/zone/gachibowli-kondapur-madhapur') }}">Gachibowli, Kondapur and Madhapur</a>.</strong> {!! $hbmA('gachibowli', 'Gachibowli') !!} has no metro station; Raidurg, the Blue Line's western end, is the usual stop, then an auto or cab. In {!! $hbmA('nanakramguda', 'Nanakramguda') !!}, in the Financial District, the Outer Ring Road interchange makes a tutor arriving by road the more dependable option. Register the tutor at the tower gate before the demo.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/manikonda-narsingi-kokapet') }}">Manikonda, Narsingi and Kokapet</a>.</strong> {!! $hbmA('kokapet', 'Kokapet') !!} has no metro, and nearly every home is in a gated community, so tutors come by road via the ORR or Gandipet Main Road. The nearby tutor pool is still growing, which is why many families here mix home and online lessons.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/banjara-hills-jubilee-hills-somajiguda') }}">Banjara Hills, Jubilee Hills and Somajiguda</a>.</strong> {!! $hbmA('jubilee-hills', 'Jubilee Hills') !!} has three Blue Line stations; give the road number with the house number, and avoid the evening peak near Road No. 36.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/ameerpet-begumpet-punjagutta') }}">Ameerpet, Begumpet and Punjagutta</a>.</strong> {!! $hbmA('begumpet', 'Begumpet') !!} has a Blue Line metro stop with an MMTS station beside it, so a tutor from almost anywhere on the network can arrive by rail.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/secunderabad-marredpally-tarnaka') }}">Secunderabad, Marredpally and Tarnaka</a>.</strong> {!! $hbmA('secunderabad', 'Secunderabad') !!} is the MMTS hub, with Blue and Green Line stations at the junction; cantonment colonies may ask visitors to register at the gate.</li>
  </ul>
  <p>
    The <a href="{{ url('/city/hyderabad/zone/chandanagar-lingampally-tellapur') }}">Chandanagar, Lingampally and
    Tellapur</a> zone, with its gated towers beyond the MMTS terminus, and the
    <a href="{{ url('/city/hyderabad/zone/kukatpally-miyapur-nizampet') }}">Kukatpally, Miyapur and Nizampet</a> zone on
    the Red Line have their own tutor pools; see every locality on the
    <a href="{{ url('/city/hyderabad') }}">Hyderabad home tutors page</a> and our
    <a href="{{ url('/blog/west-hyderabad-tuition-guide') }}">west Hyderabad tuition guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbm-mode">Home, online, or both for IB maths</h2>
  <p>
    For AA, a tutor beside the student sees every line of non-calculator algebra, which is hard to replicate online
    unless the notebook is on a second camera. For AI, online works well once the calculator screen is shared through
    an emulator or a phone camera. Many families in the western towers settle on one home session at the weekend, when
    the roads are lighter, and one online session in the week; it also lets them keep a strong HL specialist who lives
    across the city. Our <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring</a>
    post compares the two more generally.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbm-demo">How to judge an IB maths demo in under an hour</h2>
  <ol>
    <li><strong>Did the tutor ask before teaching?</strong> Course, level, session and the school's topic order should come first.</li>
    <li><strong>Command terms.</strong> Ask what "show that", "hence" and "write down" each demand, and listen for precise answers.</li>
    <li><strong>A marked test.</strong> Give the tutor a recent school test. They should explain method, accuracy and follow-through marks and show exactly where marks were lost.</li>
    <li><strong>The calculator question.</strong> For AA, how will non-calculator skill be protected? For AI, can the tutor drive the GDC quickly?</li>
    <li><strong>HL only:</strong> how would they introduce Paper 3 to a DP1 student?</li>
    <li><strong>The exploration.</strong> The right answer sounds like "I teach the mathematics; the topic, writing and choices stay yours".</li>
    <li><strong>Logistics.</strong> Which metro line, which gate, and what happens in a heavy-traffic week.</li>
  </ol>
  <p>
    A demo that misses several of these is a reason to try the next tutor on the shortlist, whose demo is also free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbm-fees">What IB maths tuition costs, and the next step</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Level, travel and sessions per week are what usually move an IB maths fee in Hyderabad. Tutors price their own
    time and the figure is on their profile before any demo; our <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and the <a href="{{ url('/blog/home-tuition-fees-hyderabad') }}">Hyderabad fees post</a> go into detail.
  </p>
  <p>
    Tell us AA or AI, SL or HL, the session, whether your child is in DP1 or DP2, the trouble spots, and your
    locality with tower or colony and free hours. Two or three matched tutors come back to you, the first lesson is a
    <a href="{{ url('/demo-class') }}">free demo</a>, and a later change of tutor is free. Tutors who join go through
    an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; <a href="{{ url('/tutors') }}">profiles</a> are open
    to browse. Science help on the same track: <a href="{{ url('/ib-physics-tutor-hyderabad') }}">IB physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-hyderabad') }}">IB and IGCSE chemistry</a> in Hyderabad.
  </p>
  </section>

  </div>
</article>
