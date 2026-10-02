{{--
  Long-form guide for the "IGCSE maths tutor Jaipur" page. Author: Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results are
  claimed for him. No schools, coaching institutes, societies or other people
  are named.

  Syllabus facts are reworded from igcse-maths-tutor-gurgaon /
  igcse-maths-tutor-mumbai, which cite the Cambridge IGCSE Mathematics 0580
  syllabus for exams in 2025, 2026 and 2027 and the 0606 Additional
  Mathematics syllabus for 2025-2027 (cambridgeinternational.org): Core Papers
  1 (no calculator) and 3 (calculator), 1 h 30 min, 80 marks each; Extended
  Papers 2 (no calculator) and 4 (calculator), 2 h, 100 marks each; each paper
  50%; Core grades C-G, Extended A*-E; scientific calculator, graphical and
  algebraic calculators not permitted; June and November series, March series
  available to schools in India; nine topic areas, no prescribed teaching
  order; about 130 guided learning hours; 2025 content changes (Core gained
  inequalities and recall of squares, cubes and roots, lost vector operations
  and data collection; Extended gained surds, domain and range, exact trig
  values, lost linear programming, proper subsets, congruence criteria,
  box-and-whisker plots and data collection); three significant figures,
  angles to one decimal place, calculator pi or 3.142; M, A and B marks;
  examiner reports; 0606 two papers of 2 h and 80 marks, Paper 1 without and
  Paper 2 with a calculator, grades A*-E. No other dates.

  Topic detail checked in the 0580 syllabus PDF for 2025-2027 (cambridgeinternational.org,
  read 26 Sep 2026): C1.2 sets and Venn diagrams, C1.10/E1.10 limits of accuracy,
  E2.13 functions (inverse, composite), E6.3 exact trig values, sine and cosine
  rules and 3D Pythagoras on Extended, E8.4 conditional probability, E9.6
  cumulative frequency, E9.7 histograms with frequency density.

  RBSE note: rajeduboard.rajasthan.gov.in Class 10 syllabus 2026-27 prescribes
  the NCERT mathematics textbook (published under copyright).

  Local detail only from database/seo-content/zones/jaipur.json,
  areas/jaipur-research.json, areas/jaipur-zone-guides.json and the city hub
  (IB/IGCSE a smaller group; online reach matters most for IGCSE; Gandhinagar
  station run entirely by women). Area links render only for active Jaipur
  areas. Fee wording is the approved sentence. FAQs render from
  faqs/igcse-maths-tutor-jaipur.php.
--}}
@php
  $igmjSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $igmjA = function (string $slug, string $label) use ($igmjSlugs) {
      return in_array($slug, $igmjSlugs, true)
          ? '<a href="' . e(url('/city/jaipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="igmjGuideTitle">
  <h2 id="igmjGuideTitle">IGCSE maths tutors in Jaipur: Cambridge 0580 Core or Extended, and 0606 for the keen</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE families in Jaipur are a smaller group than CBSE or RBSE families, and that shapes the search for a
    maths tutor. Plenty of tutors can teach quadratics; fewer know how Cambridge splits the grade between a
    calculator paper and a paper without one, or why a Core entry caps the grade at C. I teach IB, IGCSE and ISC maths
    on NXTutors, and this page sets out what Cambridge IGCSE Mathematics 0580 asks for in the 2025 to 2027 series, which
    topics trip up students who grew up on NCERT books, how Additional Mathematics fits in, and how tutors reach each
    part of Jaipur. Our <a href="{{ url('/igcse-tutor-jaipur') }}">IGCSE hub for Jaipur</a> covers the wider
    qualification.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igmj-code">Which syllabus</a> ·
    <a href="#igmj-tier">Core or Extended</a> ·
    <a href="#igmj-topics">Nine topics after NCERT</a> ·
    <a href="#igmj-nocalc">The paper without a calculator</a> ·
    <a href="#igmj-rules">Accuracy and command words</a> ·
    <a href="#igmj-0606">Additional Maths</a> ·
    <a href="#igmj-series">Exam series</a> ·
    <a href="#igmj-zones">Tutors by zone</a> ·
    <a href="#igmj-mode">Home or online</a> ·
    <a href="#igmj-plan">Grades 9 and 10</a> ·
    <a href="#igmj-demo">Demo checklist</a> ·
    <a href="#igmj-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igmj-code">Start with the syllabus code on the timetable</h2>
  <p>
    Before anyone teaches a lesson, check the code on your child's school timetable or entry sheet. "IGCSE maths" can
    mean Cambridge Mathematics 0580, Cambridge Additional Mathematics 0606 taken alongside it, or another exam board's
    International GCSE with different papers. This page is about 0580, with a section on 0606. A tutor matched on the
    wrong code will practise the wrong papers, however good the teaching.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igmj-tier">Core or Extended: the decision that fixes the highest grade</h2>
  <p>
    Each 0580 candidate sits a pair of papers worth half the grade each. One paper is taken without a calculator; the
    other needs a scientific calculator, and graphical or algebraic calculators are not permitted.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Mathematics 0580 in the 2025–2027 series</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">Core</th><th scope="col">Extended</th></tr>
    </thead>
    <tbody>
      <tr><td>Without a calculator</td><td>Paper 1: ninety minutes, out of 80</td><td>Paper 2: two hours, out of 100</td></tr>
      <tr><td>With a calculator</td><td>Paper 3: ninety minutes, out of 80</td><td>Paper 4: two hours, out of 100</td></tr>
      <tr><td>Grades available</td><td>C to G</td><td>A* to E</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    That bottom row is the one to explain at home. A perfect Core script still earns only a C. Anyone hoping for the
    highest grades, or planning on IB Analysis and Approaches, A Level mathematics or Class 11 science, has to be entered
    for Extended. Schools often set maths groups in Grade 9 and confirm entries in Grade 10 after
    the mocks, so the time to close an Extended gap is before those mocks. Our
    <a href="{{ url('/blog/igcse-coreextended-maths') }}">Core and Extended maths guide</a> covers the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igmj-topics">The nine topic areas, seen from an NCERT background</h2>
  <p>
    A child who switches into a Cambridge school from CBSE, or from RBSE (whose current syllabus also prescribes the
    NCERT maths book), already knows a good share of 0580. The useful exercise is to sort the nine areas Cambridge
    lists into familiar and new.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0580 topic areas and what usually needs teaching first</caption>
    <thead>
      <tr><th scope="col">Topic area</th><th scope="col">Mostly familiar</th><th scope="col">Often new</th></tr>
    </thead>
    <tbody>
      <tr><td>Number</td><td>Fractions, percentages, indices</td><td>Set notation and Venn diagrams; bounds; recall of squares, cubes and roots</td></tr>
      <tr><td>Algebra and graphs</td><td>Linear and quadratic equations, sequences</td><td>Inequalities; function notation, inverse and composite functions on Extended</td></tr>
      <tr><td>Coordinate geometry</td><td>Gradient, midpoint, length</td><td>Equations of parallel and perpendicular lines in Cambridge style</td></tr>
      <tr><td>Geometry</td><td>Angles, circle facts, similarity</td><td>Formal angle reasons in Cambridge wording</td></tr>
      <tr><td>Mensuration</td><td>Areas and volumes</td><td>Arc length and sector questions mixed with other topics</td></tr>
      <tr><td>Trigonometry</td><td>Right-angled triangles</td><td>Sine and cosine rules, 3D problems, exact values on Extended</td></tr>
      <tr><td>Transformations and vectors</td><td>—</td><td>Almost all of it</td></tr>
      <tr><td>Probability</td><td>Simple probability</td><td>Tree diagrams; conditional probability on Extended</td></tr>
      <tr><td>Statistics</td><td>Averages from grouped data</td><td>Cumulative frequency diagrams and histograms with frequency density, both on Extended</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Cambridge does not fix a teaching order and plans the course at about 130 guided learning hours, so schools
    sequence it differently. Content also shifted for the 2025 exams. Added to Core: inequalities, and knowing certain
    squares, cubes and roots by heart. Removed from Core: adding, subtracting and scaling vectors, and collecting data.
    Added to Extended: surds, domain and range, and exact trigonometric values. Removed from Extended: linear
    programming, proper subsets, the congruence criteria, box-and-whisker plots and data collection. Older guidebooks
    still help, provided the tutor skips the dropped material.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igmj-nocalc">Half the grade is earned without a calculator</h2>
  <p>
    Paper 1 or Paper 2 is where marks leak quietly. The cure is a short, daily kind of practice, and I start every
    IGCSE session with five minutes of it:
  </p>
  <ul>
    <li>Fraction and decimal arithmetic by hand, including dividing by a fraction and converting recurring decimals.</li>
    <li>Estimation: round each number to one significant figure, then calculate.</li>
    <li>For Extended, surds simplified and rationalised, and the exact trigonometric values recalled instantly.</li>
    <li>Long multiplication and division done quickly enough to leave time for the last questions.</li>
  </ul>
  <p>
    NCERT-trained students are often faster here than they think, because their Class 9 and 10 books expect a lot of
    arithmetic by hand. The adjustment is mainly to Cambridge's question style.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igmj-rules">Accuracy rules and command words</h2>
  <p>
    Cambridge's default accuracy, unless a question says otherwise, is three significant figures for answers that are
    not exact and one decimal place for angles in degrees; π comes from the calculator key or as 3.142, and rounding
    waits until the final line. "Exact" means leaving a surd or
    a multiple of π. Answers go on the question paper, and missing working can cost the marks even for a right
    answer.
  </p>
  <p>
    The command word sets the job. "Show that" gives the answer and pays only for the method. "Write down" signals one
    quick mark. "Calculate" and "work out" want visible working. "Sketch" wants shape and key points, "plot" wants
    accuracy. In the mark schemes, credit is labelled M for method, A for accuracy and B for marks that stand alone,
    and after every series Cambridge publishes examiner reports describing where candidates went wrong. A tutor who marks your child's work in that language, rather
    than with ticks and crosses, is teaching the exam.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igmj-0606">Additional Mathematics 0606</h2>
  <p>
    Some Cambridge schools offer 0606 to strong Extended students. It goes further into functions, logarithms and the
    beginnings of calculus. There are two papers, each two hours long and marked out of 80; calculators are banned in
    Paper 1 and needed in Paper 2, and grades run from A* to E. It is a good bridge towards IB AA HL or A Level, but only for a
    student already secure in Extended. If your child takes both, one tutor for the pair keeps the two courses pulling
    in the same direction.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igmj-series">June, November or March?</h2>
  <p>
    Cambridge's main series fall in June and November, and Indian schools have a third option in March. Your
    child's series decides when the tutor switches from topic teaching to full papers, so put it in the request. A
    student whose school enters for March has noticeably less time after the winter break than one entered for June.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igmj-zones">IGCSE maths tutors by zone</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Getting a tutor to the door in Jaipur</caption>
    <thead>
      <tr><th scope="col">Zone and locality</th><th scope="col">How tutors usually arrive</th><th scope="col">Tip for the first visit</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/jaipur/zone/c-scheme-bani-park-vidhyadhar-nagar') }}">Central and north</a>: {!! $igmjA('civil-lines', 'Civil Lines') !!}</td><td>Civil Lines station on the Pink Line's elevated Ajmer Road stretch, then an auto</td><td>Large plots hide house numbers, so send the full address and a landmark</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/raja-park-jawahar-nagar-bapu-nagar') }}">Raja Park and around</a>: {!! $igmjA('tilak-nagar', 'Tilak Nagar') !!}, {!! $igmjA('bajaj-nagar', 'Bajaj Nagar') !!}</td><td>Scooter or auto; Gandhinagar station, run entirely by women, stands in the Bajaj Nagar area</td><td>Newer Tilak Nagar apartments need the tutor's name at the gate; roads near Moti Doongri are slow in the evening</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/vaishali-nagar-west-jaipur') }}">West</a>: {!! $igmjA('chitrakoot', 'Chitrakoot') !!}</td><td>Scooter or car; no metro station</td><td>Chitrakoot has 12 sectors, so give the sector with the plot number</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/mansarovar-sanganer') }}">South-west</a>: {!! $igmjA('pratap-nagar', 'Pratap Nagar') !!}</td><td>By road along Tonk Road; Durgapura and Sanganer stations nearby</td><td>Housing board blocks are doorstep visits; give the sector number</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/malviya-nagar-jagatpura-tonk-road') }}">South</a>: {!! $igmjA('jagatpura', 'Jagatpura') !!}</td><td>Scooter or car; Getor Jagatpura station serves the area</td><td>Gated complexes want the tower and flat number in advance</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Our <a href="{{ url('/blog/south-and-west-jaipur-tuition-guide') }}">south and west Jaipur guide</a> covers travel in
    more detail, and the <a href="{{ url('/city/jaipur') }}">Jaipur home tutors</a> page lists every locality.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igmj-mode">Home or online for IGCSE maths</h2>
  <p>
    The paper without a calculator is the strongest case for sitting beside the student: a dropped minus sign gets caught
    on the line where it happens. A camera pointing down at the exercise book, with the student narrating each line,
    gets close to the same effect online. Since 0580 and 0606 specialists are fewer in Jaipur, online also widens the choice considerably, which the
    city hub notes for IGCSE in particular. A common pattern is one home session for written practice and one online
    session for paper review, with the same tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igmj-plan">How the hours are usually spread over Grades 9 and 10</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How IGCSE maths sessions are commonly distributed</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">What the sessions cover</th><th scope="col">Per week</th></tr>
    </thead>
    <tbody>
      <tr><td>First weeks of Grade 9</td><td>A gap audit against the nine topic areas; the non-calculator habit starts</td><td>One</td></tr>
      <tr><td>Rest of Grade 9</td><td>School topics in step; past questions by topic; the tier conversation if needed</td><td>One or two</td></tr>
      <tr><td>Grade 10 until the mocks</td><td>Content only Extended candidates sit; the first complete pair of papers</td><td>Two</td></tr>
      <tr><td>After the mocks</td><td>Both papers under time, marked to Cambridge's scheme; every lost mark reattempted a week on</td><td>Two or three</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    After Grade 10, students moving to the IB Diploma should read the
    <a href="{{ url('/ib-maths-tutor-jaipur') }}">IB maths tutor in Jaipur</a> page; those moving to a Class 11 board
    course will find our <a href="{{ url('/maths-home-tutor-jaipur') }}">maths home tutors in Jaipur</a> page more useful.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igmj-demo">Checklist for the IGCSE maths demo</h2>
  <ol>
    <li>Did the tutor ask for the syllabus code, the tier and the exam series?</li>
    <li>Was there non-calculator work in the session, done by your child?</li>
    <li>When a mistake happened, did the tutor name the mark lost (M, A or B)?</li>
    <li>Did they know the 2025 content changes, or hand out older material without comment?</li>
    <li>Did they spot which topics are new to a child from an NCERT background?</li>
    <li>Did they leave you with a plan to the next school test or mock?</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igmj-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    The tier, any Additional Maths, the length of the journey and how often you meet all move an IGCSE maths fee, and
    each tutor's figure is on the profile ahead of the demo. More in the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and our post on <a href="{{ url('/blog/home-tuition-fees-jaipur') }}">home tuition fees in Jaipur</a>.
  </p>
  <p>
    Send the grade, the syllabus code, Core or Extended, the series, the topics that worry you, your colony and the
    times you can offer. Two or three matched tutors come back; one gives a
    <a href="{{ url('/demo-class') }}">free demo class</a>, and moving to another tutor later costs nothing. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. You can also look through
    <a href="{{ url('/tutors') }}">tutor profiles</a>, read the national
    <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutor guide</a>, or turn to the Jaipur pages for
    <a href="{{ url('/igcse-physics-tutor-jaipur') }}">IGCSE physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-jaipur') }}">IB and IGCSE chemistry</a>.
  </p>
  </section>

  </div>
</article>
