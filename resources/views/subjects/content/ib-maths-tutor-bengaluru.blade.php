{{--
  Long-form guide for the "IB maths tutor Bengaluru" page. Author: Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results are
  claimed for him. No schools, societies or other people are named. Written by
  the city authority page writer, 2 Oct 2026.

  Course and assessment facts are reworded from ib-maths-tutor-gurgaon, which
  cites the IB Diploma Programme subject briefs for Mathematics: analysis and
  approaches and Mathematics: applications and interpretation and the IB's
  published curriculum update for the revised courses (ibo.org): two courses,
  each at SL or HL; 150 h SL / 240 h HL; SL Papers 1 and 2 (40% each, 1 h 30
  min each), HL Papers 1 and 2 (30% each, 2 h each) and Paper 3 (20%, two
  extended problem-solving questions with a GDC); exploration 20% at both
  levels, teacher-marked and IB-moderated, roughly 12 to 20 pages; AA Paper 1
  without a calculator, AI uses the GDC on all papers; revised courses first
  taught August 2027 and first examined May 2029 (AA Papers 1 and 2 to 100
  marks from 110, Paper 3 to 50 marks from 55 and one hour; exploration kept
  with shared SL/HL criteria; 80/20 split kept); MYP maths four criteria.
  Karnataka SSLC maths paper shape from the KSEAB 2026-27 blueprint (as cited
  in karnataka-board-tutor-bengaluru). No other dates.

  Local detail only from database/seo-content/areas/bengaluru-research.json
  and bengaluru-zone-guides.json (Sadashivanagar: large houses with guards,
  no station, Green Line Malleshwaram stations or Bellary Road, heavy evening
  traffic; Richmond Town: guards at entrances, MG Road Purple Line station
  plus auto, central roads congested at office hours; Ulsoor: Trinity and
  Halasuru Purple Line stations; Arekere: Pink Line built but not open, road
  or Yellow Line plus auto; Banaswadi: railway station, Purple Line stations
  plus auto or bus, houses; Basaveshwaranagar: hilly streets, Rajajinagar or
  Vijayanagar stations plus auto, Chord Road busy at school and office hours)
  and the Bengaluru hub (online widens IB choice; Pink and Blue lines still
  being built). Area links render only for active Bengaluru areas. Fee wording
  is the approved sentence. FAQs render from faqs/ib-maths-tutor-bengaluru.php.
--}}
@php
  $ibmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ibmA = function (string $slug, string $label) use ($ibmSlugs) {
      return in_array($slug, $ibmSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ibmGuideTitle">
  <h2 id="ibmGuideTitle">IB maths tutor in Bengaluru: the course, the level, the session, and a tutor who can get there</h2>

  <p class="nx-guide__lede">
    "IB maths" covers four different courses, two revisions of the syllabus and a piece of coursework worth a fifth of
    the grade, so the first job of any search in Bengaluru is to pin down exactly which one your child is taking. The
    second is geography: a Diploma student in the north-west of the city and one in the south-east may both need an AA HL
    specialist, but the tutor who can reach one on a weekday evening usually cannot reach the other. This page is
    written by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors. It sits under our
    <a href="{{ url('/maths-home-tutor-bengaluru') }}">maths home tutors in Bengaluru</a> page and the
    <a href="{{ url('/ib-tutor-bengaluru') }}">IB tutors in Bengaluru</a> hub, and it covers the courses, the papers,
    the exploration, the jump from other boards and the practical business of travel.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibm-facts">What we ask first</a> ·
    <a href="#ibm-courses">AA or AI</a> ·
    <a href="#ibm-papers">Papers and weightings</a> ·
    <a href="#ibm-revised">The revised courses</a> ·
    <a href="#ibm-ia">The exploration</a> ·
    <a href="#ibm-from">Arriving from another board</a> ·
    <a href="#ibm-skills">Three skills to start early</a> ·
    <a href="#ibm-zones">Travel by zone</a> ·
    <a href="#ibm-mode">Home or online</a> ·
    <a href="#ibm-demo">The demo</a> ·
    <a href="#ibm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibm-facts">Four facts we need before suggesting anyone</h2>
  <ol>
    <li><strong>The course:</strong> Analysis and Approaches (AA) or Applications and Interpretation (AI).</li>
    <li><strong>The level:</strong> Standard Level (SL) or Higher Level (HL).</li>
    <li><strong>The exam session:</strong> which May the student will sit, because that decides whether the current or the revised syllabus applies.</li>
    <li><strong>Where the student is now:</strong> DP1 or DP2, and what the last school test or report says.</li>
  </ol>
  <p>
    With those four, we can shortlist tutors who teach that exact combination. Without them, a family can end up
    meeting tutors who are excellent at the wrong course. If the course or level is still being decided, our
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">guide to AA, AI, SL and HL</a> sets out the choice, and the national
    <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page goes deeper into the subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-courses">AA or AI: two ways into the same core</h2>
  <p>
    Both courses share five areas, number and algebra, functions, geometry and trigonometry, statistics and probability,
    and calculus, but they ask a student to think in different ways.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How the two IB maths courses differ in practice</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">Analysis and Approaches</th><th scope="col">Applications and Interpretation</th></tr>
    </thead>
    <tbody>
      <tr><td>Flavour</td><td>Algebraic and abstract: exact values, proof, calculus by hand</td><td>Modelling and data: real contexts turned into mathematics</td></tr>
      <tr><td>Calculator</td><td>Paper 1 is taken without one</td><td>The graphic display calculator is used on every paper</td></tr>
      <tr><td>What trips students up</td><td>Long algebraic chains with no calculator to check them</td><td>Choosing the right model and explaining what the numbers mean</td></tr>
      <tr><td>The tutor you need</td><td>Strong on proof, functions and calculus technique</td><td>Fluent with the GDC, statistics and written interpretation</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    AI at HL is not a soft option; its statistics and modelling go well beyond school level. A tutor who is brilliant
    at AA HL proof may be the wrong person for AI SL statistics, so we match on course and level together.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-papers">Papers and weightings on the current courses</h2>
  <p>
    The IB plans 150 teaching hours for SL and 240 for HL. Every student completes the exploration, which supplies 20%
    of the grade; the rest comes from written papers.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Current IB DP maths assessment by level</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1</td><td>1 h 30 min, 40%</td><td>2 h, 30%</td></tr>
      <tr><td>Paper 2</td><td>1 h 30 min, 40%</td><td>2 h, 30%</td></tr>
      <tr><td>Paper 3</td><td>Not taken</td><td>Two extended problem-solving questions with a GDC, 20%</td></tr>
      <tr><td>Exploration</td><td>20%</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Paper 3 deserves its own plan. Each question starts somewhere familiar and climbs, part by part, towards a result
    the student has not seen before, and later parts lean on earlier ones. Students who meet this style only in DP2
    tend to panic; students who have done one such question a fortnight since DP1 treat it as routine.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-revised">The revised courses: which students they affect</h2>
  <p>
    The IB has published revised versions of both courses, first taught from August 2027 and first examined in May
    2029. AA and AI both stay, as do SL and HL, and the exploration remains the internal assessment with a single set of
    criteria for both levels; the 80/20 balance between exams and exploration does not change. For AA, the published
    changes include shorter papers: Papers 1 and 2 drop from 110 to 100 marks, and Paper 3 from 55 to 50 marks, with an
    hour allowed.
  </p>
  <p>
    The practical point is simple. A student who started DP1 in August 2026 is on the current course and sits it in
    May 2028; anyone starting in August 2027 or later is on the revised one. Tell us the session, and expect the tutor
    to pick past papers accordingly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-ia">The exploration: what a tutor may and may not do</h2>
  <p>
    The exploration is a short written investigation, roughly 12 to 20 pages in the IB's guidance, of a mathematical
    question the student has chosen. The school marks it against published criteria (communication, mathematical
    presentation, personal engagement, reflection, and the use of mathematics) and the IB moderates the marks.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Within the rules</h3>
  <p>
    Teaching the mathematics the idea needs, even if it lies outside the syllabus; asking questions that help the
    student narrow a wide interest into a workable question; explaining what each criterion rewards using the IB's
    published examples; pointing out, in general terms, that a section is unclear.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Off limits</h3>
  <p>
    Choosing the topic; writing, dictating or rephrasing any of the text; carrying out the calculations, graphs or
    models; editing a draft line by line. Any of these puts the diploma at risk under the IB's academic integrity
    policy, and the student should tell their teacher about outside tutoring.
  </p>
    </div>
  </div>
  <p>
    Bengaluru offers questions a student could genuinely own: how far apart metro stations sit on different lines,
    how a lake's water level changes through the year, the timing of signals at a busy junction, the curve of a
    flyover ramp. A modest question, worked through carefully with the student's own mathematics, usually serves
    better than an ambitious one they cannot finish.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-from">Arriving in DP maths from SSLC, ICSE, CBSE, IGCSE or the MYP</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What each route tends to bring, and what tends to be new</caption>
    <thead>
      <tr><th scope="col">Previous course</th><th scope="col">Usually brings</th><th scope="col">Usually needs</th></tr>
    </thead>
    <tbody>
      <tr><td>Karnataka SSLC</td><td>Practice with structured papers that mix one-mark items with four- and five-mark answers</td><td>Unguided questions, written reasoning, the GDC</td></tr>
      <tr><td>CBSE Class 10</td><td>Quick standard methods from the NCERT books</td><td>Questions with little scaffolding; "show that" and "hence" chains</td></tr>
      <tr><td>ICSE Class 10</td><td>Neat, complete working</td><td>Modelling, technology use, and the pace of DP topics</td></tr>
      <tr><td>Cambridge IGCSE Extended</td><td>Familiar algebra and functions</td><td>A much faster pace and longer multi-part problems</td></tr>
      <tr><td>IB MYP</td><td>Open tasks judged on four criteria, including communication and real-life application</td><td>Speed and accuracy in timed, dense papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For all of them the fix has the same shape: four to six weeks before DP1, or early in its first term, on algebraic
    fluency, functions and trigonometry, with questions marked the IB way. Our
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to switching from CBSE to IB or IGCSE</a>
    lays out a bridging plan that suits state board and ICSE students too. Students coming from Cambridge should also
    see the <a href="{{ url('/igcse-maths-tutor-bengaluru') }}">IGCSE maths tutor in Bengaluru</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-skills">Three skills worth starting in DP1, not DP2</h2>
  <ul>
    <li><strong>Non-calculator algebra (AA).</strong> Ten minutes at the start of each session on exact values, logarithms, surds and rearranging, done by hand and checked line by line.</li>
    <li><strong>GDC fluency (AI, and HL Paper 3).</strong> Regression, solving equations graphically, statistical tests and matrices on the calculator, practised until the keystrokes are automatic.</li>
    <li><strong>Reading the command terms.</strong> "Show that" needs every step; "write down" needs none; "hence" means the previous part must be used. Students who misread these lose marks they had earned.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-zones">How IB maths tutors reach each part of Bengaluru</h2>
  <p>
    HL specialists are few in any city, so the journey shapes the match as much as the course. From our area notes:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/bengaluru/zone/malleshwaram-rajajinagar-yeshwanthpur') }}">Malleshwaram, Rajajinagar and Yeshwanthpur</a>.</strong> {!! $ibmA('sadashivanagar', 'Sadashivanagar') !!} has no station inside it; tutors use a Malleshwaram-side Green Line stop and an auto, or Bellary Road, which is heavy in the evening. Many houses have a guard, so give the tutor's name in advance.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/frazer-town-richmond-town-ulsoor') }}">Frazer Town, Richmond Town and Ulsoor</a>.</strong> {!! $ibmA('ulsoor', 'Ulsoor') !!} is served by Trinity and Halasuru on the Purple Line, so a tutor from Indiranagar can come straight in; in {!! $ibmA('richmond-town', 'Richmond Town') !!}, the nearest open station is MG Road, and central roads clog at office hours, so later evening or weekend slots hold better.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/btm-bannerghatta-road-electronic-city') }}">BTM, Bannerghatta Road and Electronic City</a>.</strong> The Pink Line through {!! $ibmA('arekere', 'Arekere') !!} is built but not yet open, so tutors come by road or by the Yellow Line and an auto.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/hennur-kalyan-nagar-banaswadi') }}">Hennur, Kalyan Nagar and Banaswadi</a>.</strong> {!! $ibmA('banaswadi', 'Banaswadi') !!} has a railway station, and the nearest metro stops are on the Purple Line, finished by auto or bus; most homes are houses, so there is no gate list.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/vijayanagar-rr-nagar-kengeri') }}">Vijayanagar, RR Nagar and Kengeri</a>.</strong> {!! $ibmA('basaveshwaranagar', 'Basaveshwaranagar') !!} sits on hilly streets with no station of its own; tutors use Rajajinagar or Vijayanagar and an auto, and a mid-evening slot avoids Chord Road's worst hours.</li>
  </ul>
  <p>
    Tutors for <a href="{{ url('/city/bengaluru/zone/koramangala-hsr-bellandur') }}">Koramangala, HSR and Bellandur</a>,
    <a href="{{ url('/city/bengaluru/zone/whitefield-marathahalli-kr-puram') }}">Whitefield and KR Puram</a> and the
    other zones are listed on the <a href="{{ url('/city/bengaluru') }}">Bengaluru home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-mode">Home or online for IB maths in Bengaluru</h2>
  <p>
    Where the Pink and Blue metro lines are still being built, a weekday home visit from a specialist across the city
    is fragile. Many families settle on a mix: one home session at the weekend for full papers, and one or two shorter
    online sessions in the week. Online works for maths if two things are in place: the student's notebook on a second
    camera rather than held up to the screen, and the GDC shared through an emulator or filmed from above. Our guide to
    <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring</a> covers the general case.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-demo">What to look for in the IB maths demo</h2>
  <ol>
    <li><strong>The four facts.</strong> A good tutor asks the course, level, session and DP year before teaching anything.</li>
    <li><strong>Command terms.</strong> Ask what "hence or otherwise" allows. The answer should come without hesitation.</li>
    <li><strong>Marking.</strong> Hand over a marked school test and ask where the method, accuracy and follow-through marks went.</li>
    <li><strong>Calculator discipline.</strong> For AA, insistence on non-calculator practice; for AI, speed on the GDC.</li>
    <li><strong>Paper 3 for HL.</strong> Ask how they would introduce it in DP1.</li>
    <li><strong>The exploration line.</strong> Listen for "I teach the maths; the choices and the writing stay yours".</li>
    <li><strong>The journey.</strong> How they will reach you, and what happens when the road is jammed.</li>
  </ol>
  <p>
    If the fit is wrong, tell us; the next matched tutor gives their own free demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-fees">Fees and how to begin</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For IB maths, the level, the distance the tutor travels and the number of sessions each week move the figure; each
    tutor sets their own fee, and it is on the profile before you book. Our note on
    <a href="{{ url('/blog/home-tuition-fees-bengaluru') }}">home tuition fees in Bengaluru</a> and the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain more.
  </p>
  <p>
    Send the four facts above, your locality and the slots you can offer. We reply with two or three matched tutors;
    you pick one for a <a href="{{ url('/demo-class') }}">free demo class</a>, and changing tutor later costs nothing.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes
    live, and you can browse <a href="{{ url('/tutors') }}">tutor profiles</a> first. For the sciences, see
    <a href="{{ url('/ib-physics-tutor-bengaluru') }}">IB physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-bengaluru') }}">IB and IGCSE chemistry</a> tutors in Bengaluru.
  </p>
  </section>

  </div>
</article>
