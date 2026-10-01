{{--
  Long-form guide for the "economics home tutor Delhi" page. Byline: NXTutors
  Academic Team. No schools, coaching institutes, societies, developers or
  people are named. Local detail comes only from
  database/seo-content/areas/delhi-research.json, delhi-zone-guides.json,
  database/seo-content/zones/delhi.json and the Delhi city hub view (CBSE for
  most students, ICSE/ISC sizeable, a smaller IB/IGCSE group). No Delhi state
  board is described; families from another state's board are mentioned in
  general terms only. No claim is made about local supply of or demand for
  economics tutors.

  Official exam facts, reused from the national economics-home-tutor page
  (read 1 Oct 2026):
  - CBSE Economics (030) XI-XII 2026-27, cbseacademic.nic.in
    (web_material/CurriculumMain27/SecPart2/Economics_SecP2_2026-27.pdf):
    XI statistics 40 + microeconomics 40; XII macroeconomics 40 + Indian
    Economic Development 40; project 20 (relevance 3, research 6,
    presentation 3, viva 8), 3,500-4,000 words; question design 40/30/30.
  - CISCE ISC Economics (856), cisce.org: 80 theory (Part I 20 compulsory,
    Part II five of eight at 12) + two 10-mark projects.
  - Cambridge IGCSE Economics 0455 (2027-2029) and AS & A Level 9708
    (2026-2028), cambridgeinternational.org: AS essays in two parts, A Level
    essays unstructured.
  - IBO DP Economics page and SL/HL subject briefs (ibo.org): Paper 1 and 2 at
    SL and HL, Paper 3 policy paper HL only, IA portfolio of three
    commentaries (30% SL, 20% HL).
  - NTA CUET (UG) 2026 Information Bulletin, cuet.nta.nic.in: domain subject
    309 Economics / Business Economics; 50 compulsory questions, 60 minutes;
    NCERT Class XII syllabus. No dates given.
  Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/economics-home-tutor-delhi.php.
  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $ecDlSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ecDl = function (string $slug, string $label) use ($ecDlSlugs) {
      return in_array($slug, $ecDlSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ecDlGuideTitle">
  <h2 id="ecDlGuideTitle">Economics tuition in Delhi: definitions, diagrams, numbers and judgement</h2>

  <p class="nx-guide__lede">
    Economics in Classes 11 and 12 asks a Delhi student to do four things in one paper: write definitions exactly,
    draw diagrams that carry an argument, set out calculations step by step, and weigh one effect against another.
    Most students who say they "don't get economics" are strong in two of these and losing marks on the other two.
    The right tutor spots which two in the first lesson. Families anywhere in Delhi can request an economics tutor
    for CBSE, ISC, Cambridge or the IB; NXTutors sends two or three profiles that fit the course and your part of the
    city, with each fee shown first, and the first class with the tutor you pick is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ecdl-skills">Which skill is weak?</a> ·
    <a href="#ecdl-boards">Courses taught in Delhi</a> ·
    <a href="#ecdl-project">Projects and the IA</a> ·
    <a href="#ecdl-session">A sample lesson</a> ·
    <a href="#ecdl-cuet">CUET</a> ·
    <a href="#ecdl-zones">Your zone</a> ·
    <a href="#ecdl-mode">Home or online</a> ·
    <a href="#ecdl-demo">The demo</a> ·
    <a href="#ecdl-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ecdl-skills">Which of the four economics skills is costing marks?</h2>
  <p>
    Before matching a tutor we ask a parent to look at one marked test with us. The pattern is usually clear within a
    page.
  </p>
  <ul>
    <li><strong>Loose wording.</strong> "Demand is what people want" earns nothing. Examiners mark precise definitions, and a student who writes everyday English loses steady short-answer marks.</li>
    <li><strong>Unlabelled or unused diagrams.</strong> A demand curve without labelled axes, or a shift drawn but never mentioned in the answer, scores far below its effort.</li>
    <li><strong>Numericals without working.</strong> Class 11 statistics and Class 12 national income questions give marks for each step, so an answer written straight down is a gamble.</li>
    <li><strong>Lists instead of arguments.</strong> Longer answers, and nearly everything in IB and A Level, reward a judgement: which effect is larger, for whom, and why.</li>
  </ul>
  <p>
    Each weakness needs a different kind of session. A student whose diagrams are the problem needs to draw them
    from memory every week; one whose essays wander needs a written plan before every answer. A tutor who teaches all
    four the same way wastes half of every hour.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ecdl-boards">What do the economics courses taught in Delhi actually assess?</h2>
  <p>
    Most Delhi students take CBSE, ISC has a sizeable following, and a smaller group sit IGCSE, A Level or the IB
    Diploma. Students who join a Delhi school from a state board elsewhere usually meet a new pattern as well as a
    new syllabus.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Economics courses for Classes 11–12 and their assessment, from the boards' own documents</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">How the marks are split</th><th scope="col">What usually needs work</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Economics (030), Class 11</td><td>Statistics for Economics 40 and Introductory Microeconomics 40, plus a 20-mark project</td><td>Tabulated statistics working; demand and cost diagrams</td></tr>
      <tr><td>CBSE Economics (030), Class 12</td><td>Introductory Macroeconomics 40 and Indian Economic Development 40, plus a 20-mark project</td><td>National income and multiplier steps; long answers on the economy</td></tr>
      <tr><td>ISC Economics (856)</td><td>80 theory marks, 60 of them from 12-mark questions (five out of eight), plus two 10-mark projects</td><td>Complete answers to time</td></tr>
      <tr><td>Cambridge IGCSE (0455) and AS &amp; A Level (9708)</td><td>Multiple-choice plus structured or data response papers; AS essays come in two parts, A Level essays are unstructured</td><td>Planning an essay without a scaffold</td></tr>
      <tr><td>IB Economics SL and HL</td><td>Papers 1 and 2 at both levels, a policy-based Paper 3 at HL, and an internal assessment of three commentaries</td><td>Evaluation, real examples, commentary technique</td></tr>
      <tr><td>Another state's board</td><td>Economics in the senior classes to that board's own syllabus and pattern</td><td>Adjusting to the new board's paper</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Our national <a href="{{ url('/economics-home-tutor') }}">economics home tutor guide</a> gives the unit marks,
    paper timings and the IB assessment table in full. For other subjects on the same boards, see our
    <a href="{{ url('/cbse-home-tutor-delhi') }}">CBSE tutors in Delhi</a>,
    <a href="{{ url('/icse-home-tutor-delhi') }}">ICSE and ISC tutors in Delhi</a> and
    <a href="{{ url('/ib-tutor-delhi') }}">IB tutors in Delhi</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ecdl-project">Projects, commentaries and the line a tutor must not cross</h2>
  <p>
    Every senior economics course has a piece of coursework, and parents often ask how far a tutor may help. CBSE
    expects one project a session of 3,500 to 4,000 words, marked for relevance, research, presentation and a viva
    worth 8 of the 20 marks. ISC sets two projects of 10 marks each. The IB internal assessment is a portfolio of three
    commentaries on news extracts, each from a different unit and using a different key concept.
  </p>
  <p>
    A tutor can teach the economics behind a chosen topic, explain how the work is marked, and rehearse the viva. A
    tutor must not research, write or rewrite any part of it; the IB is explicit about this under its
    academic-integrity rules. Ask the tutor at the demo how they handle coursework. A clear answer is a good sign.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ecdl-session">A Class 12 macroeconomics lesson, step by step</h2>
  <p>
    Here is how a strong tutor might handle one of the most tested ideas in CBSE Class 12, the investment
    multiplier. The student first states the definition in exam language. Then comes a short numerical: if the
    marginal propensity to consume is 0.8, the multiplier is 1 ÷ (1 − 0.8) = 5, so an extra ₹100 crore of investment
    raises income by ₹500 crore. The tutor makes the student set out each line, because the marks sit in the steps.
  </p>
  <p>
    Next, the student draws the diagram and explains in two sentences what the shift shows. Finally the tutor asks
    the question that separates good answers from adequate ones: what would make the real effect smaller than the
    arithmetic suggests? A student who can say "people save part of each extra rupee, and some spending leaks into
    imports" has understood the idea, not just the formula. That one sequence, definition, numerical, diagram,
    judgement, is the shape of most good economics lessons.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ecdl-cuet">Economics for CUET (UG)</h2>
  <p>
    Economics / Business Economics is domain subject 309 in the NTA's CUET (UG) 2026 bulletin, with 50 compulsory
    questions in 60 minutes on NCERT's Class 12 syllabus. Because the test is objective, preparation means quick
    recognition of concepts and short, accurate calculations, built on board revision rather than replacing it. The
    NTA publishes a fresh bulletin each cycle, so confirm the pattern for your child's year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ecdl-zones">How does an economics tutor reach your zone?</h2>
  <p>
    Our <a href="{{ url('/city/delhi') }}">Delhi page</a> divides the city into twelve zones. A shortlist starts with
    tutors living close to you, then tutors who already travel to your zone, then the wider city, and finally online
    tutors from anywhere in India.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Vasant Kunj and the Magenta Line arc</h3>
  <p>
    The <a href="{{ url('/city/delhi/zone/vasant-kunj-vasant-vihar-palam') }}">Vasant Kunj, Vasant Vihar and Palam</a>
    zone splits in two. The Palam side is well served by stations, but
    {!! $ecDl('vasant-kunj', 'Vasant Kunj') !!} has none, so tutors drive, ride or take an auto from Vasant Vihar
    station. Afternoon and weekend slots dodge the office-hour crawl near Munirka.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>GK, Lodhi Colony and Jangpura</h3>
  <p>
    In {!! $ecDl('greater-kailash-1', 'Greater Kailash 1') !!}, in the
    <a href="{{ url('/city/delhi/zone/gk-defence-colony-lajpat-nagar') }}">GK, Defence Colony and Lajpat Nagar</a>
    zone, block RWAs keep guards, so pass on the tutor's name. Further north, in the
    <a href="{{ url('/city/delhi/zone/lodhi-colony-jangpura-nizamuddin') }}">Lodhi Colony, Jangpura and
    Nizamuddin</a> zone, {!! $ecDl('jangpura', 'Jangpura') !!} is mostly builder floors near Violet Line stations.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Central and North Delhi</h3>
  <p>
    {!! $ecDl('old-rajinder-nagar', 'Old Rajinder Nagar') !!}, in the
    <a href="{{ url('/city/delhi/zone/karol-bagh-patel-nagar-rajinder-nagar') }}">Karol Bagh, Patel Nagar and
    Rajinder Nagar</a> zone, has coaching lanes that stay busy late, so weekday lessons run calmer than weekend ones.
    {!! $ecDl('model-town', 'Model Town') !!} sits on the Yellow Line in the
    <a href="{{ url('/city/delhi/zone/pitampura-model-town-north-campus') }}">Pitampura, Model Town and North
    Campus</a> zone.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Across the Yamuna</h3>
  <p>
    {!! $ecDl('mayur-vihar-phase-1', 'Mayur Vihar Phase 1') !!} is a Blue and Pink Line interchange in the
    <a href="{{ url('/city/delhi/zone/mayur-vihar-patparganj-ip-extension') }}">Mayur Vihar, Patparganj and IP
    Extension</a> zone. Patparganj complexes log every visitor, and service lanes along the Noida Link Road slow at
    office hours.
  </p>
      </div>
    </div>
  <p>
    For more on each part of the city, read our <a href="{{ url('/blog/south-delhi-tuition-guide') }}">South Delhi</a>,
    <a href="{{ url('/blog/rohini-and-north-delhi-tuition-guide') }}">Rohini and North Delhi</a> and
    <a href="{{ url('/blog/east-delhi-tuition-guide') }}">East Delhi</a> tuition guides.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ecdl-mode">Home or online economics lessons?</h2>
  <p>
    Economics moves online more easily than most subjects. Diagrams work on a shared whiteboard, a news article can
    be read together, and essays can be marked on screen and returned before the next class. For IB or A Level
    economics, an online tutor also removes the commute: the right specialist for a particular course can live
    anywhere in Delhi, or anywhere in India. Home lessons still suit Class 11 statistics, where a tutor at the table
    catches arithmetic slips as the pencil moves, and students who drift on a screen. Many families request a home
    tutor and keep online as the fallback for exam weeks and monsoon evenings; others mix one home session with one
    online session each week with the same tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ecdl-demo">What to check in the free economics demo</h2>
  <ol>
    <li>Did the tutor ask for the exact course (CBSE, ISC, IGCSE, AS or A Level, IB SL or HL) before teaching?</li>
    <li>Did your child draw the diagrams, with axes and curves labelled?</li>
    <li>Did the tutor push for a judgement rather than a list of points?</li>
    <li>Were the real-world examples recent and relevant to the topic?</li>
    <li>For CBSE, could they teach the statistics or national income steps clearly?</li>
    <li>For IB, did they explain the commentary criteria and say plainly they will not write any of it?</li>
    <li>Did the session end with set practice and a way to check it next time?</li>
  </ol>
  <p>
    If the fit is wrong, tell us and we arrange a demo with the next tutor on the shortlist. Switching is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ecdl-fees">What does an economics tutor cost in Delhi, and what next?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees; you see each one before the demo, and our
    <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi home tuition fees guide</a> has more detail.
  </p>
  <p>
    Tell us the course and class, which skill seems weakest, your colony and nearest station, times, home or online,
    and a budget. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and you
    can book a <a href="{{ url('/demo-class') }}">free demo class</a> with the tutor you choose. Commerce students
    usually need accountancy too: see our <a href="{{ url('/accountancy-home-tutor-delhi') }}">accountancy tutors in
    Delhi</a>. We also match <a href="{{ url('/english-home-tutor-delhi') }}">English tutors in Delhi</a> and
    <a href="{{ url('/maths-home-tutor-delhi') }}">maths tutors in Delhi</a>, and younger siblings can use our
    <a href="{{ url('/science-home-tutor-delhi') }}">science tutors in Delhi</a>. Still deciding on a stream? Our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice guide</a> and
    <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 tutoring page</a> were written for Gurugram, but
    the reasoning travels.
  </p>
  <p>
    Economics teachers can find open Delhi requests on the <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition
    jobs</a> page.
  </p>
  </section>

  </div>
</article>
