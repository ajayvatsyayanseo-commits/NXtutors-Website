{{--
  Long-form guide for the "IB maths tutor Ahmedabad" page. Author: Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results are
  claimed for him. No schools, societies or other people are named.

  Course and assessment facts are reworded from ib-maths-tutor-gurgaon /
  ib-maths-tutor-mumbai, which cite the IB Diploma Programme subject briefs for
  Mathematics: analysis and approaches and Mathematics: applications and
  interpretation and the IB curriculum update for the revised courses
  (ibo.org): two courses, each at SL or HL; 150 h SL / 240 h HL; SL Papers 1
  and 2 (40% each, 1 h 30 min each); HL Papers 1 and 2 (30% each, 2 h each)
  and Paper 3 (20%, two extended problem-solving questions, GDC allowed);
  exploration 20% at both levels, teacher-marked and IB-moderated, about 12 to
  20 pages; AA Paper 1 without a calculator, AI uses the GDC on all papers;
  revised courses first taught August 2027 and first examined May 2029 (AA
  Papers 1 and 2 to 100 marks from 110, Paper 3 to 50 marks from 55 and one
  hour; exploration kept with shared SL/HL criteria; 80/20 split kept); MYP
  maths four criteria. GSEB facts (Std 10 Mathematics Standard and Basic, 80
  marks, 24 objective items) from gujarat-board-tutor-ahmedabad, which cites
  gseb.org. No other dates.

  Local detail only from zones/ahmedabad.json, ahmedabad-zone-guides.json,
  ahmedabad-research.json (Thaltej Gam the Blue Line's western end, Bodakdev
  towers that log visitor phone numbers; Shela township gate checks, no metro;
  Ellisbridge Gandhigram Red Line station; Gota BRTS Route 9 and no metro;
  Amraiwadi Blue Line station opened May 2019; Shahibaug flats, Airport Road,
  west-bank specialist online) and the Ahmedabad hub view (four kinds of
  examination; online opens up teachers across India for IB; Uttarayan in
  mid-January). No claim about where IB families live. Area links render only
  for active Ahmedabad areas. Fee wording is the approved sentence. FAQs render
  from faqs/ib-maths-tutor-ahmedabad.php.
--}}
@php
  $aibmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $aibmA = function (string $slug, string $label) use ($aibmSlugs) {
      return in_array($slug, $aibmSlugs, true)
          ? '<a href="' . e(url('/city/ahmedabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="aibmGuideTitle">
  <h2 id="aibmGuideTitle">IB maths tutor in Ahmedabad: pin down the course, then find someone who can reach you</h2>

  <p class="nx-guide__lede">
    Ahmedabad has a small pool of tutors who teach Diploma maths well, and a city split by a river, a highway corridor
    without a metro station and two metro lines that do not reach every IB household. So the order in which a family
    decides things matters. First the course: Analysis and Approaches or Applications and Interpretation, Standard or
    Higher Level, and which exam session. Then the tutor who teaches exactly that. Only then the route, and whether
    the week should run at home, online or as a mix. This guide follows that order. Its author, Ajay Vatsyayan, covers IB, IGCSE and ISC
    maths on NXTutors; the page sits under our
    <a href="{{ url('/maths-home-tutor-ahmedabad') }}">maths home tutors in Ahmedabad</a> page and the
    <a href="{{ url('/ib-tutor-ahmedabad') }}">IB tutors in Ahmedabad</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#aibm-routes">Four routes</a> ·
    <a href="#aibm-assess">How it is assessed</a> ·
    <a href="#aibm-session">Which syllabus version</a> ·
    <a href="#aibm-expl">The exploration</a> ·
    <a href="#aibm-from">Arriving from GSEB, CBSE or IGCSE</a> ·
    <a href="#aibm-map">Reaching your home</a> ·
    <a href="#aibm-mix">Home, online or both</a> ·
    <a href="#aibm-cal">Two DP years</a> ·
    <a href="#aibm-demo">The demo</a> ·
    <a href="#aibm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="aibm-routes">Two courses, two levels: four different jobs for a tutor</h2>
  <p>
    Each Diploma student takes one maths course. Both courses can be studied at SL or HL, and both are organised
    around the same five content areas, from algebra and functions through geometry and statistics to calculus. Where
    they part company is in what they ask the student to do with that content.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What separates AA from AI in day-to-day tutoring</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">Analysis and Approaches (AA)</th><th scope="col">Applications and Interpretation (AI)</th></tr>
    </thead>
    <tbody>
      <tr><td>Character</td><td>Algebraic, exact answers, proof and hand calculus</td><td>Modelling, data and technology-driven solutions</td></tr>
      <tr><td>Calculator</td><td>Paper 1 is taken without one</td><td>The GDC is allowed throughout, on all papers</td></tr>
      <tr><td>What sessions spend time on</td><td>Clean algebra, proof by induction at HL, unfamiliar function questions</td><td>Turning a situation into a model, statistical tests, GDC fluency</td></tr>
      <tr><td>Often chosen by</td><td>Students heading for engineering, physics, maths or quantitative economics</td><td>Students heading for biology, social sciences, design or business</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    AI HL is not the easy option it is sometimes taken for, and AA SL is not a lighter AA HL. A tutor who is excellent
    with one combination can be ordinary with another, which is why we match on course and level together. If the choice
    is still open, our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">guide to choosing between AA, AI, SL and HL</a>
    helps, and our national <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page goes further into the subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibm-assess">How the grade is built at SL and at HL</h2>
  <p>
    Teaching time is set at 150 hours for SL and 240 for HL. On the courses currently examined, the exams carry four
    fifths of the grade and the exploration one fifth, at both levels.
  </p>
  <ul>
    <li><strong>SL:</strong> Paper 1 and Paper 2, an hour and a half each, worth 40% apiece.</li>
    <li><strong>HL:</strong> Papers 1 and 2, two hours each, worth 30% apiece, and Paper 3, worth 20%: two long problem-solving questions with the GDC allowed.</li>
    <li><strong>Both levels:</strong> the mathematical exploration, 20%, marked by the school and moderated by the IB.</li>
  </ul>
  <p>
    Paper 3 deserves early attention. Each question starts somewhere comfortable and climbs, part by part, to a
    result the student has not met before, and later parts often depend on earlier answers. Students who first meet
    this style in the final term tend to freeze. Students who try one Paper 3 question every few weeks from DP1
    learn to keep going when a part fails and to pick up the thread again with the "hence" that follows.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibm-session">Which version of the syllabus applies to your child?</h2>
  <p>
    Revised versions of both courses start in classrooms in August 2027, with first exams in May 2029. AA and AI both
    survive, each at SL and HL. On the AA side, Papers 1 and 2 drop from 110 marks to 100 and HL Paper 3 from 55 marks
    to 50, now in one hour; the exploration remains, judged on criteria common to both levels, and exams still make
    up 80% of the grade against the exploration's 20%.
  </p>
  <p>
    So a student who started DP1 in August 2026 sits the current course in May 2028, while anyone whose DP1 begins in
    August 2027 or later follows the revised one. Past papers remain useful for both, but mark totals and timing differ, and
    a tutor should know which version your child is on before setting a timed paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibm-expl">The exploration: what a tutor may and may not do</h2>
  <p>
    The exploration is the student's own investigation of a mathematical question, usually 12 to 20 pages. Teachers at
    the school mark it on five criteria, covering how it is presented, how the maths is communicated, the student's
    personal engagement, their reflection and the mathematics itself, after which the IB moderates the marks.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Within the rules</h3>
  <p>
    Teaching the mathematics a chosen idea requires, even when it goes beyond the syllabus. Prompting the student, by
    questions, to cut a broad interest down to something they can finish. Explaining what each criterion rewards with
    the IB's published examples. Saying, in general terms, that a section is hard to follow.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Over the line</h3>
  <p>
    Choosing the topic. Writing, rephrasing or dictating text. Doing calculations, graphs or models for the student.
    Correcting a draft line by line. Any of these breaks the IB's academic-integrity rules and puts the diploma at
    risk; the student should also tell their maths teacher that they have outside help.
  </p>
    </div>
  </div>
  <p>
    Ahmedabad offers good raw material for a question the student genuinely owns: how the gap between trains changes
    along a metro line through the day, how a kite's string sags during Uttarayan, how BRTS journey times vary by hour,
    or how the shape of a lake can be approximated with functions. A narrow question pursued thoroughly almost always
    serves better than a grand one left half done.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibm-from">Arriving in DP maths from GSEB, CBSE, ICSE, IGCSE or the MYP</h2>
  <p>
    Diploma classrooms in Ahmedabad draw students from several routes, and each leaves a different gap.
  </p>
  <ul>
    <li><strong>From the Gujarat board.</strong> GSEB Standard 10 maths opens with 24 objective items and rewards fast, accurate standard methods. The DP asks for longer chains of reasoning with little guidance, in English. A student from Gujarati medium may also need a few weeks of maths vocabulary in English before the course gathers speed.</li>
    <li><strong>From CBSE.</strong> Strong on routine procedures, often less used to explaining why a method works, which the IB markscheme expects.</li>
    <li><strong>From ICSE.</strong> Usually good at laying out working; needs GDC practice and modelling, especially for AI.</li>
    <li><strong>From IGCSE Extended.</strong> Familiar algebra, but the DP moves faster and goes deeper, particularly in functions and calculus.</li>
    <li><strong>From the MYP.</strong> Comfortable with investigations, whose MYP maths was assessed through criteria rather than long exams, so dense timed papers can come as a shock.</li>
  </ul>
  <p>
    Whatever the starting point, the bridge looks similar: a month or so, ahead of DP1 or in its first weeks, spent
    on algebra, functions and trigonometry, with each question marked against an IB markscheme. A plan of that shape
    is set out in our <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">article on moving from CBSE
    to IB or IGCSE</a>, and it suits state-board students equally. If your child is still in Grade 9 or 10 on Cambridge, see
    the <a href="{{ url('/igcse-maths-tutor-ahmedabad') }}">IGCSE maths tutor in Ahmedabad</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibm-map">Getting an IB maths tutor to your home in Ahmedabad</h2>
  <p>
    Because HL specialists in particular are few, the travel question is about which tutor can repeat the trip every
    week, not who lives nearest. From our zone notes:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/satellite-vastrapur-bodakdev') }}">Satellite, Vastrapur and Bodakdev</a>.</strong> In {!! $aibmA('bodakdev', 'Bodakdev') !!}, Thaltej Gam and Thaltej on the Blue Line are the nearest stations, and towers often log a phone number for every visitor, so register the tutor at the gate before the demo.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/prahlad-nagar-bopal-shela') }}">Prahlad Nagar, Bopal and Shela</a>.</strong> {!! $aibmA('shela', 'Shela') !!} has no metro or rail; tutors come by two-wheeler along the ring road, and township gates may check them twice. This is where an online specialist most often fills the gap.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/navrangpura-paldi-ellisbridge') }}">Navrangpura, Paldi and Ellisbridge</a>.</strong> {!! $aibmA('ellisbridge', 'Ellisbridge') !!} has Gandhigram station on the Red Line, one stop from the Old High Court interchange, so tutors from either line can arrive by metro.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/naranpura-gota-chandkheda') }}">Naranpura, Gota and Chandkheda</a>.</strong> {!! $aibmA('gota', 'Gota') !!} has no station; BRTS Route 9 ends there, and most tutors drive along SG Highway.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/nikol-naroda-bapunagar') }}">Nikol, Naroda and Bapunagar</a>.</strong> {!! $aibmA('amraiwadi', 'Amraiwadi') !!} has had its own Blue Line station since 2019, so a tutor anywhere on that line can reach it directly.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/shahibaug-asarwa-meghaninagar') }}">Shahibaug, Asarwa and Meghaninagar</a>.</strong> {!! $aibmA('shahibaug', 'Shahibaug') !!} is reached by Airport Road or Riverfront Road; our zone notes suggest an online session when the specialist you want lives on the west bank.</li>
  </ul>
  <p>
    The <a href="{{ url('/city/ahmedabad/zone/maninagar-isanpur-kankaria') }}">Maninagar, Isanpur and Kankaria</a>
    zone is served by rail and the Blue Line too; every locality is on our
    <a href="{{ url('/city/ahmedabad') }}">Ahmedabad home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibm-mix">Home, online or both, for IB maths in particular</h2>
  <p>
    Our Ahmedabad hub notes that online lessons open up teachers from across India, which matters most for IB. For
    maths specifically, three things decide the mix:
  </p>
  <ol>
    <li><strong>Seeing the working.</strong> On AA, the tutor has to follow each line of algebra done without a calculator. Across a table that happens by itself; online, point a second camera at the notebook.</li>
    <li><strong>Seeing the calculator.</strong> On AI, and in HL Paper 3 practice, the tutor must watch the keystrokes. Screen-share an emulator, or prop a phone above the GDC.</li>
    <li><strong>The trip.</strong> If the right specialist is across the river or the trip runs into SG Highway's evening traffic, one home session at the weekend and one online midweek usually holds better than two home visits.</li>
  </ol>
  <p>
    Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor versus online tutor</a> guide weighs the
    two more generally.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibm-cal">Planning the two Diploma years</h2>
  <p>
    IB schools set their own terms, which do not follow the GSEB or CBSE calendar most neighbours plan around, so the
    tutor works from the school's dates.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How IB maths sessions are used across the Diploma</caption>
    <thead>
      <tr><th scope="col">Stretch</th><th scope="col">Main use of sessions</th><th scope="col">Typical rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>Before or early in DP1</td><td>Algebra, functions and trigonometry repair; English maths vocabulary for students from Gujarati medium; GDC set-up for AI</td><td>Two a week for a few weeks</td></tr>
      <tr><td>DP1</td><td>Keeping pace with school topics; tests marked to the markscheme; first Paper 3 questions for HL</td><td>One or two a week</td></tr>
      <tr><td>Exploration period</td><td>The maths behind the student's idea; the criteria; no drafting help</td><td>As before, plus one if needed</td></tr>
      <tr><td>Mid-January</td><td>Uttarayan disrupts most households; move that week online or shift sessions</td><td>Adjusted</td></tr>
      <tr><td>Mocks to May exams</td><td>Full papers by type, error log by topic, timing drills</td><td>Two or three a week</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibm-demo">What to check in an IB maths demo</h2>
  <ol>
    <li><strong>Questions before teaching.</strong> A good tutor wants the course, the level, the DP year and the exam session before solving anything.</li>
    <li><strong>Command terms.</strong> Ask what "show that", "hence" and "hence or otherwise" require. The answer should come without hesitation.</li>
    <li><strong>Marking a real test.</strong> Hand over a school test your child has already had back, and ask the tutor to point out where method, accuracy and follow-through marks went.</li>
    <li><strong>Calculator policy.</strong> For AA, insistence on non-calculator practice; for AI, quick and confident GDC use.</li>
    <li><strong>Paper 3.</strong> For HL, ask when and how a first-year student should meet it.</li>
    <li><strong>The exploration boundary.</strong> Listen for "I teach the mathematics; the choices and the writing stay yours".</li>
    <li><strong>The trip.</strong> Which road or line, and the plan for Uttarayan week.</li>
  </ol>
  <p>
    A demo that falls short on several of these is reason enough to try the next matched tutor, whose demo is also free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibm-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Within that range, an IB maths fee in Ahmedabad depends mostly on course and level, how far the tutor travels and
    how many sessions a week you want. Tutors price their own lessons, and the price is on the profile before any demo
    is booked. Read the <a href="{{ url('/pricing-guide') }}">pricing guide</a> or our article on
    <a href="{{ url('/blog/home-tuition-fees-ahmedabad') }}">home tuition fees in Ahmedabad</a> for the detail.
  </p>
  <p>
    To start, tell us the course and level, the exam session and DP year, which topics are slipping, your locality
    and the times that suit you. You get two or three matched profiles; the first lesson with the one you pick is a
    <a href="{{ url('/demo-class') }}">free demo</a>, and changing tutor later costs nothing. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified, and you can
    look through <a href="{{ url('/tutors') }}">tutor profiles</a> at any time. Science help sits on our
    <a href="{{ url('/ib-physics-tutor-ahmedabad') }}">IB physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-ahmedabad') }}">IB and IGCSE chemistry</a> pages for Ahmedabad.
  </p>
  </section>

  </div>
</article>
