{{--
  Long-form guide for the "IB maths tutor Greater Noida" page. Author: Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results are
  claimed for him. No schools, societies, developers or other people are named.

  Course and assessment facts are reworded from ib-maths-tutor-gurgaon (and as
  restated on ib-maths-tutor-mumbai), which cite the IB Diploma Programme
  subject briefs for Mathematics: analysis and approaches and Mathematics:
  applications and interpretation and the IB's published curriculum update for
  the revised courses (ibo.org): two courses, each at SL or HL; 150 h SL /
  240 h HL; SL Papers 1 and 2 (40% each, 1 h 30 min each); HL Papers 1 and 2
  (30% each, 2 h each) and Paper 3 (20%, two extended problem-solving
  questions, GDC allowed); exploration 20% at both levels, teacher-marked and
  IB-moderated, roughly 12 to 20 pages, criteria on presentation,
  communication, personal engagement, reflection and use of mathematics; AA
  Paper 1 without a calculator, AI uses the GDC on all papers; revised courses
  first taught August 2027 and first examined May 2029 (AA Papers 1 and 2 to
  100 marks from 110, Paper 3 to 50 marks from 55; one shared set of
  exploration criteria for SL and HL; 80/20 split kept); MYP maths four
  criteria. No other dates.
  UP Board facts (Class 12 maths 100 marks, calculus 44) from
  upmsp.edu.in/Downloads/Syllabus/Class12/131-Maths-Class-12.pdf, read 2 Oct
  2026, as on up-board-tutor-greater-noida.

  Local detail only from database/seo-content/zones/greater-noida.json,
  areas/greater-noida-research.json, greater-noida-zone-guides.json and the
  Greater Noida hub (IB/IGCSE families a smaller group than CBSE or ICSE, IB
  tutors correspondingly fewer, online widens the choice; Sector 12 on the
  130 m road, strict society security; Techzone 4 dense towers by Ek Murti
  Chowk, nearest metro Noida Sector 51; Delta 1 plotted, DELTA 1 station in
  Block A; Omega 2 township beside Pari Chowk, Pari Chowk station across in
  Knowledge Park I; Pi 2 mostly society flats, ALPHA 1 / DELTA 1 / GNIDA
  Office stations then e-rickshaw; Omicron 1A plotted, GNIDA Office station,
  autos and buses scarce, cabs easy). No claim that IB families live in any one
  area; no request data. Fee wording is the approved sentence. FAQs render from
  faqs/ib-maths-tutor-greater-noida.php. Area links render only for active
  areas.
--}}
@php
  $imgSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $imgA = function (string $slug, string $label) use ($imgSlugs) {
      return in_array($slug, $imgSlugs, true)
          ? '<a href="' . e(url('/city/greater-noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="imgGuideTitle">
  <h2 id="imgGuideTitle">IB maths tutor in Greater Noida: a specialist first, then a route that works</h2>

  <p class="nx-guide__lede">
    In Greater Noida, IB families are a smaller group than CBSE or ICSE families, and tutors who know one IB maths
    course in depth are fewer still. That changes the order in which you should search. Pin down the course, the
    level and the exam session first; find someone who teaches that exact combination; only then decide how much of
    the teaching happens at your table and how much on a screen. This page, written by Ajay Vatsyayan, who teaches IB,
    IGCSE and ISC maths on NXTutors, walks through that order. It sits under our
    <a href="{{ url('/maths-home-tutor-greater-noida') }}">maths home tutors in Greater Noida</a> page and the
    <a href="{{ url('/ib-tutor-greater-noida') }}">IB tutors in Greater Noida</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#img-courses">Course and level</a> ·
    <a href="#img-papers">The papers</a> ·
    <a href="#img-session">Which syllabus?</a> ·
    <a href="#img-ia">The exploration</a> ·
    <a href="#img-routes">Coming from another board</a> ·
    <a href="#img-zones">Tutors by zone</a> ·
    <a href="#img-online">Making online work</a> ·
    <a href="#img-plan">The two-year plan</a> ·
    <a href="#img-demo">Demo checks</a> ·
    <a href="#img-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="img-courses">Start with the course and level, not "IB maths"</h2>
  <p>
    Every Diploma student studies one of two maths courses, each offered at Standard Level (SL) or Higher Level (HL).
    Both cover number and algebra, functions, geometry and trigonometry, statistics and probability, and calculus, but
    the emphasis and the tools differ enough that a tutor's strength in one says little about strength in another.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The four IB DP maths routes and what the tutor must be strong in</caption>
    <thead>
      <tr><th scope="col">Route</th><th scope="col">Character</th><th scope="col">The tutor must be fluent in</th></tr>
    </thead>
    <tbody>
      <tr><td>Analysis and Approaches SL</td><td>Algebraic, exact answers, one paper without a calculator</td><td>Clean hand algebra, functions and introductory calculus explained step by step</td></tr>
      <tr><td>Analysis and Approaches HL</td><td>The most abstract route: more proof, deeper calculus, a third paper</td><td>Proof, calculus done by hand, and Paper 3 style investigation</td></tr>
      <tr><td>Applications and Interpretation SL</td><td>Modelling and statistics, calculator on every paper</td><td>Turning a situation into a model, statistical tests, quick graphic-calculator work</td></tr>
      <tr><td>Applications and Interpretation HL</td><td>Deeper modelling and statistics, a third paper</td><td>Advanced modelling and the calculator at speed, without losing the reasoning</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    If the choice is still open, our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">guide to AA, AI, SL and HL</a>
    sets out the trade-offs, and the national <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page covers the
    subject in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="img-papers">How the grade is built at each level</h2>
  <p>
    The IB allows 150 teaching hours for SL and 240 for HL. Exams supply four-fifths of the grade and the exploration,
    an internally assessed piece of writing, supplies the remaining fifth at both levels.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Current DP maths assessment by level</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1</td><td>1 h 30 min, 40%</td><td>2 h, 30%</td></tr>
      <tr><td>Paper 2</td><td>1 h 30 min, 40%</td><td>2 h, 30%</td></tr>
      <tr><td>Paper 3</td><td>Not taken</td><td>Two extended problem-solving questions with the calculator, 20%</td></tr>
      <tr><td>Exploration</td><td>20%</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    On AA, Paper 1 bans the calculator, so a student who reaches for one by habit loses time and marks. On AI, the
    graphic display calculator is allowed on every paper and is part of what is being tested. Paper 3 at HL is where
    tutoring changes most: each question starts on familiar ground and climbs, part by part, to a result the student
    has not seen. Students who meet that style only in DP2 tend to freeze. Students who have worked through one Paper 3
    question every few weeks since DP1 learn to keep going.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="img-session">Which syllabus will your child sit? It depends on the session</h2>
  <p>
    The IB has published revised versions of both courses, taught from August 2027 and examined for the first time in
    May 2029. Both courses and both levels continue. On the AA side, the IB has announced shorter papers, with Papers 1 and 2 cut to 100 marks from 110 and Paper 3 to 50 from 55. The exploration stays, with one set of criteria shared
    by SL and HL, and the 80/20 balance between exams and exploration is unchanged.
  </p>
  <p>
    The practical point is simple. A student who started DP1 in August 2026 is on the current course; one who starts
    in August 2027 or later is on the revised course. Past papers remain useful either way, but the mark totals and
    some question styles shift, so a tutor needs to know which version they are preparing your child for. Put the
    exam session in your request.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="img-ia">The exploration: where help is allowed and where it stops</h2>
  <p>
    The exploration is a written investigation of a question the student chooses, usually twelve to twenty pages. The
    school marks it against criteria covering presentation, mathematical communication, personal engagement,
    reflection and the use of mathematics, and the IB moderates those marks. At a fifth of the grade, it rewards
    early, steady work.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>What a tutor may do</h3>
  <p>
    Teach any mathematics the student's idea calls for, including topics outside the course. Ask the kind of questions that turn a vague interest into a question the student can actually answer. Explain what each criterion rewards, using the IB's published examples. Say in
    general terms that a section is unclear, so the student can fix it.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>What a tutor must not do</h3>
  <p>
    Choose the topic. Write, dictate or rephrase any part of it. Do calculations, draw graphs or build the model.
    Edit a draft line by line. Each of these breaches IB academic-integrity policy and puts the diploma at risk; the school's maths teacher should know that outside tuition is happening.
  </p>
    </div>
  </div>
  <p>
    Greater Noida offers questions a student can genuinely own: how evening waiting times at a busy roundabout vary,
    how the spacing of metro stations compares with travel times, how a planned sector grid shapes walking distances.
    A modest question carried through carefully usually scores better than an ambitious one left half done.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="img-routes">Arriving in DP maths from CBSE, the UP Board, ICSE, IGCSE or the MYP</h2>
  <p>
    Each earlier board leaves a different gap, and the first few sessions should target it:
  </p>
  <ul>
    <li><strong>CBSE and the UP Board.</strong> Students are quick with standard methods, and UP Board students are used to a Class 12 maths paper in which calculus alone carries 44 of 100 marks. What is new is the open, lightly guided question and the weight the IB puts on written reasoning.</li>
    <li><strong>ICSE.</strong> Working is usually well laid out; the gap is speed with the graphic calculator and comfort with modelling.</li>
    <li><strong>IGCSE Extended.</strong> The algebra is familiar but the pace is much faster, and AA HL proof is new territory. Our <a href="{{ url('/igcse-maths-tutor-greater-noida') }}">IGCSE maths tutors in Greater Noida</a> page covers the earlier stage.</li>
    <li><strong>MYP.</strong> MYP maths is judged on four criteria (knowing and understanding, investigating patterns, communicating, and applying maths in real-life contexts), so students are at ease with open tasks but can struggle with dense, timed papers.</li>
  </ul>
  <p>
    A four- to six-week block on algebra, functions and trigonometry, marked the IB way, closes most of these gaps. Whatever the earlier board, the bridging plan in our
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to switching from CBSE to IB or IGCSE</a> applies.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="img-zones">Finding an IB maths tutor in each part of Greater Noida</h2>
  <p>
    Because the specialist pool is small, we look along the Aqua Line and the main roads first, then widen to online.
    How the journey works zone by zone:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/greater-noida/zone/greater-noida-west') }}">Greater Noida West</a>.</strong> {!! $imgA('sector-12', 'Sector 12') !!} sits on the 130 m road, which helps a tutor driving in, but society security is strict, so set up the visitor entry before the first class. {!! $imgA('techzone-4', 'Techzone 4') !!} is a dense tower belt by Ek Murti Chowk with no metro nearby; a specialist usually drives, and an early-evening slot dodges the worst of the chowk.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/alpha-delta-pari-chowk') }}">Alpha–Delta and Pari Chowk</a>.</strong> {!! $imgA('delta-1', 'Delta 1') !!} has the DELTA 1 station in its Block A and plotted homes with no gate, so a tutor from anywhere on the Aqua Line can arrive by metro and walk or take an e-rickshaw.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omega-chi-phi') }}">Omega, Chi and Phi</a>.</strong> {!! $imgA('omega-2', 'Omega 2') !!} is mostly a large township beside Pari Chowk, with the Pari Chowk station just across in Knowledge Park I. Expect gate logging in the township blocks; the roundabout is busiest at office hours.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/pi-sigma-sectors-36-37') }}">Pi, Sigma and Sectors 36–37</a>.</strong> {!! $imgA('pi-2', 'Pi 2') !!} is mostly society flats; a tutor using the metro gets off at ALPHA 1, DELTA 1 or GNIDA Office and finishes by e-rickshaw.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omicron-mu-xu') }}">Omicron, Mu and Xu</a>.</strong> In {!! $imgA('omicron-1a', 'Omicron 1A') !!}, autos and buses are hard to find inside the sector although cabs are easy to book, so a specialist from further away often teaches one session at home and one online.</li>
  </ul>
  <p>
    <a href="{{ url('/city/greater-noida/zone/zeta-eta') }}">Zeta and Eta</a> are reached from GNIDA Office station
    with an auto for the last stretch. Every locality is on the <a href="{{ url('/city/greater-noida') }}">Greater
    Noida home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="img-online">Making online IB maths work</h2>
  <p>
    Many Greater Noida families end up with a mix: a weekend session at home and a weekday session online with the
    same tutor. Online maths only works if the tutor can see the working as it happens. Three set-ups make the
    difference:
  </p>
  <ol>
    <li><strong>A camera on the page.</strong> A phone on a stand above the notebook, or a tablet with a stylus, so the tutor watches each line of AA algebra being written rather than seeing a finished photo.</li>
    <li><strong>The calculator in view.</strong> For AI and HL Paper 3 practice, an emulator shared on screen or a second camera over the keypad, so the tutor can correct the key sequence, not just the answer.</li>
    <li><strong>Marked papers returned.</strong> Full scans after each timed paper, marked against the markscheme, with a running list of where marks were lost.</li>
  </ol>
  <p>
    Our <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring guide</a> covers the
    choice more generally.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="img-plan">Planning the two Diploma years</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How IB maths sessions are typically used across DP1 and DP2</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Main work</th><th scope="col">Typical frequency</th></tr>
    </thead>
    <tbody>
      <tr><td>Start of DP1</td><td>Closing gaps from the previous board; calculator set-up for AI</td><td>Two a week for a few weeks</td></tr>
      <tr><td>Rest of DP1</td><td>Keeping pace with school; markscheme-marked topic tests; first Paper 3 questions for HL</td><td>One or two a week</td></tr>
      <tr><td>Exploration period</td><td>Any extra mathematics the topic demands, the criteria unpacked, the writing left to the student</td><td>As before, with an extra session if needed</td></tr>
      <tr><td>DP2 teaching</td><td>Finishing the syllabus; mixed-topic practice; timed sections</td><td>One or two a week</td></tr>
      <tr><td>Before mocks and finals</td><td>Whole papers under exam timing, marked against the markscheme, weak topics revisited</td><td>Two or three a week</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="img-demo">What to check in the demo</h2>
  <ol>
    <li><strong>Questions before teaching.</strong> The tutor should ask about course, level, DP year and exam session first.</li>
    <li><strong>Command terms.</strong> Ask what "show that", "hence" and "hence or otherwise" demand. The answer should be immediate.</li>
    <li><strong>Marking.</strong> Hand over a marked school test and ask where the method, accuracy and follow-through marks went.</li>
    <li><strong>The calculator.</strong> For AA, insistence on non-calculator practice; for AI, speed and confidence on the graphic calculator.</li>
    <li><strong>The exploration line.</strong> A good answer separates teaching the maths from making the student's decisions or writing for them.</li>
    <li><strong>The week.</strong> Which station or road, and what happens when Pari Chowk or Ek Murti Chowk is jammed.</li>
  </ol>
  <p>
    If the demo falls short on these points, tell us and the next matched tutor gets a free demo of their own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="img-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For IB maths the figure moves with the course and level, how far the tutor travels and how many sessions you book
    each week. Tutors price their own time, and every fee is on the shortlist before you agree to a demo. Our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> breaks down the factors, and
    <a href="{{ url('/blog/home-tuition-fees-greater-noida') }}">home tuition fees in Greater Noida</a> puts them in
    local terms.
  </p>
  <p>
    To start, tell us the course, level, exam session, DP year and what is going wrong, plus your sector or society and
    the times you can offer. Two or three matched tutors come back to you; pick one for a
    <a href="{{ url('/demo-class') }}">free demo class</a>. If the match stops working later, a switch costs nothing.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before anything is
    published, and <a href="{{ url('/tutors') }}">tutor profiles</a> are open to browse. On the science side, see our
    <a href="{{ url('/ib-physics-tutor-greater-noida') }}">IB physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-greater-noida') }}">IB and IGCSE chemistry</a> pages for Greater Noida.
  </p>
  </section>

  </div>
</article>
