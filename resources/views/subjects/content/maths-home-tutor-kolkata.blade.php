{{--
  Long-form guide for the "maths home tutor Kolkata" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/kolkata-research.json (zone_facts and area "about"
  texts). Exam facts reuse checked statements in database/seo-content/blog:
  icse-isc-maths-gurgaon-guide (ICSE 80 + 20 with teacher 10 and external 10,
  tables, 2025 Section A/B, APP difficult topics, ISC 860 unit marks for
  Classes 11 and 12, single 2027/2028 paper, projects 1/4/2/3, viva by the
  visiting examiner), class-11-stream-choice-gurgaon (ISC Mathematics cannot
  be taken with Applied Mathematics), cbse-class-10-maths-preparation (unit
  marks, sections, Standard/Basic split, no calculators, pi = 22/7),
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  -ib-math-aaai-slhl (AA/AI, hours, weights, exploration) and
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern).
  West Bengal boards (WBBSE, WBCHSE) are named and described generally only.
  No school, society, hospital, mall or people's names, no distances or travel
  times, only the allowed fee sentence.

  Area links render only when that Kolkata area page exists and is active.
--}}
@php
  $klAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $klA = function (string $slug, string $label) use ($klAreaSlugs) {
      return in_array($slug, $klAreaSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide kom-guide" aria-labelledby="komGuideTitle">
  <h2 id="komGuideTitle">Maths home tutor in Kolkata: settle the board first, the neighbourhood second</h2>

  <p class="nx-guide__lede">
    Kolkata children sit maths under several exam bodies at once. On one lane there may be an ICSE Class 10 student
    drawing ogives, an ISC Class 12 student deep in integration, a CBSE child choosing between Standard and Basic, and
    a Madhyamik candidate on the state board's books. A tutor who suits one of them may be wrong for the next. NXTutors
    asks for the course and your locality, then sends two or three maths tutors who teach that course and can reach
    you. Their fees are on the shortlist, and your first class with the tutor you choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kom-boards">Four exam bodies</a> ·
    <a href="#kom-icse">ICSE Class 10</a> ·
    <a href="#kom-isc">ISC 11 and 12</a> ·
    <a href="#kom-cbse">CBSE Class 10</a> ·
    <a href="#kom-jee">Class 12 and JEE</a> ·
    <a href="#kom-ib">IB and IGCSE</a> ·
    <a href="#kom-where">Six neighbourhoods</a> ·
    <a href="#kom-term">First term</a> ·
    <a href="#kom-fees">Fees</a> ·
    <a href="#kom-send">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kom-boards">Four exam bodies in one city: which maths is on your child's desk?</h2>
  <p>
    Ajay Vatsyayan writes the ISC, IB and IGCSE maths sections here; Abhinandan Tiwary writes the CBSE and ICSE Class
    10 sections. Before we look for anyone, we need the exact name of the course, because the class number alone
    does not tell a Kolkata tutor what to prepare.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses taught in Kolkata homes, the classes they cover, the body that publishes each syllabus, and where the marks come from</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Classes</th><th scope="col">Syllabus published by</th><th scope="col">Where the marks come from</th></tr>
    </thead>
    <tbody>
      <tr><td>ICSE Mathematics</td><td>9 and 10</td><td>CISCE</td><td>A three-hour paper worth 80, plus 20 for assignments</td></tr>
      <tr><td>ISC Mathematics (860)</td><td>11 and 12</td><td>CISCE</td><td>An 80-mark theory paper and 20 for two projects, each year</td></tr>
      <tr><td>Mathematics Standard or Basic</td><td>10</td><td>CBSE</td><td>80 in the board paper, 20 assessed in school</td></tr>
      <tr><td>Mathematics</td><td>12</td><td>CBSE</td><td>80 across 38 compulsory questions, 20 internal</td></tr>
      <tr><td>Madhyamik and Higher Secondary</td><td>10; 11 and 12</td><td>WBBSE; WBCHSE</td><td>Set by the West Bengal boards; take the scheme from their official notices</td></tr>
      <tr><td>IB Diploma AA or AI; Cambridge IGCSE</td><td>11 and 12; 9 and 10</td><td>IB; Cambridge</td><td>Papers plus the exploration (IB); a Core or Extended tier (IGCSE)</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For Madhyamik and Higher Secondary students we keep the advice general. The West Bengal Board of Secondary
    Education and the West Bengal Council of Higher Secondary Education publish their own syllabuses and papers, so
    the tutor should work from the prescribed textbooks and the boards' own notices rather than from a CBSE plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kom-icse">ICSE Class 10 maths: where do examiners take marks away?</h2>
  <p>
    For the 2027 examination, CISCE lists a single three-hour paper of 80 marks. Some questions may need logarithmic
    or trigonometric tables, so a tutor should practise with them rather than leave them for the exam hall. The other
    20 marks come from at least two assignments, marked by the subject teacher out of 10 and by an external examiner
    out of 10. In the 2025 paper, Section A carried 40 compulsory marks and candidates chose any four questions in
    Section B for the remaining 40; confirm the layout for your child's year on the latest specimen paper at cisce.org.
  </p>
  <p>
    After every exam CISCE publishes an Analysis of Pupil Performance, and its October 2025 report is a ready-made
    checklist for a tutor. Among the Class 10 topics examiners found candidates struggling with:
  </p>
  <ul>
    <li><strong>Commercial maths:</strong> GST with SGST and CGST, the maturity value of a recurring deposit, and shares.</li>
    <li><strong>Algebra:</strong> inequations on a number line, quadratic equations, matrix multiplication, and terms and sums of AP and GP.</li>
    <li><strong>Geometry and graphs:</strong> equations of a line, similar triangles, locus and circle constructions, heights and distances, and reading values off an ogive.</li>
  </ul>
  <p>
    The same reports explain how to keep marks: every step on the page including rough work, a named theorem beside
    each geometry step, construction arcs left visible, rounding only at the end, and the sign flipped when an
    inequation is multiplied or divided by a negative number. Our
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> goes further, and the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page explains how we match for the
    board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kom-isc">ISC maths in Classes 11 and 12: how are the units weighted?</h2>
  <p>
    ISC Mathematics (860) has a three-hour theory paper of 80 marks and project work of 20 marks in each of the two
    years. It cannot be combined with ISC Applied Mathematics, so the choice is made once, at the start of Class 11.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ISC Mathematics theory units and their marks, Class 11 and the Class 12 paper for the 2027 and 2028 examinations</caption>
    <thead>
      <tr><th scope="col">Year</th><th scope="col">Units (marks out of 80)</th><th scope="col">Tutor's priority</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>Sets and Functions 18; Algebra 26; Coordinate Geometry 20; Calculus 8; Statistics and Probability 8</td><td>Functions and trigonometry built properly, since Class 12 calculus rests on them</td></tr>
      <tr><td>Class 12</td><td>Relations and Functions 10; Algebra 10; Calculus 35; Vector Algebra 5; Three-Dimensional Geometry 6; Linear Programming 5; Probability 9</td><td>Calculus given the most weekly time from April; every unit practised, since none is optional</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    That second row is a change. Earlier Class 12 papers had a compulsory Section A and a choice between Section B and
    Section C, and the 2026 syllabus still used the split. The syllabuses CISCE has published for 2027 and 2028 put
    seven units into one paper with no option, so vectors, three-dimensional geometry, linear programming and
    probability reach every candidate, while linear regression no longer appears in the unit list. Revision books
    printed for the older layout need checking chapter by chapter.
  </p>
  <p>
    The 20 project marks come from two projects, each scored out of 10: format 1, content 4, findings 2 and viva 3. In
    Class 12 the viva is taken by the visiting examiner and is based on the project, so a tutor may question a draft
    but must leave the work as your child's own. ISC examiners also listed matrices and determinants, applications of
    derivatives, integration, differential equations, Bayes' theorem and linear programming among the harder Class 12
    topics. The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> sets out a
    two-year plan, and the <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page covers online help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kom-cbse">CBSE Class 10: Standard or Basic, and which units to practise most?</h2>
  <p>
    Both levels share 14 NCERT chapters worth 80 marks. Algebra is the heaviest unit at 20, then geometry at 15,
    trigonometry at 12, statistics and probability at 11 and mensuration at 10, with real numbers and coordinate
    geometry at 6 apiece. The paper runs in five sections, from twenty one-mark items in Section A to three four-mark
    case studies in Section E. No calculator is allowed, and π is 22/7 unless a question says otherwise.
  </p>
  <p>
    The levels differ in what they ask of a student's thinking. Roughly 54% of Standard tests remembering and
    understanding; in Basic the figure is about 75%. A child who might take maths after Class 10 should normally sit
    Standard, and the school confirms the choice at registration. From 2026 there is a compulsory main exam and an
    optional second sitting to improve up to three subjects, maths among them; watch cbse.gov.in for 2027 dates. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths preparation guide</a> and the
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> go chapter by chapter
    and month by month.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kom-jee">Class 12 maths and JEE Main: can one tutor serve both?</h2>
  <p>
    Yes, provided each week has room for both styles. CBSE Class 12 maths asks 38 compulsory questions for 80 marks,
    and calculus accounts for 35 of them; ISC Class 12 also gives calculus 35 marks. Both boards want complete written
    working. JEE Main rewards something else: in 2026, maths was 25 of the 75 questions in Paper 1, 20 multiple-choice
    and 5 numerical-value, scored +4 for a right answer and −1 for a wrong one. NTA can change the pattern, so check
    jeemain.nta.nic.in each session.
  </p>
  <p>
    A workable split is one session on the coaching institute's unsolved problems and one on board-style long answers,
    with a timed set of entrance questions at the end of each month. ISC students should keep up the projects too, as
    those marks are earned early. See the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kom-ib">What should IB and IGCSE families in Kolkata settle early?</h2>
  <p>
    In the IB Diploma, Analysis and Approaches puts weight on algebra, functions, calculus and proof and has one
    paper without a calculator; Applications and Interpretation leans on modelling and statistics and uses a graphic
    display calculator throughout. The recommended teaching time is 150 hours at SL and 240 at HL. At SL, two papers
    carry 40% each; at HL, two carry 30% each and a third 20%. The exploration makes up the last 20% at both levels,
    and a tutor may explain its criteria but never write it. Our
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a> helps with the choice.
  </p>
  <p>
    Cambridge IGCSE students are entered for Core, where C is the highest grade, or Extended, which runs from A* to G,
    so the tier should be agreed with the school well before entries. Specialists for both programmes are fewer than
    CBSE or ICSE tutors in any city, and our <a href="{{ url('/ib-maths-tutor') }}">IB maths</a> and
    <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths</a> tutor pages describe online options.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kom-where">How does a maths tutor get to six Kolkata neighbourhoods?</h2>
  <p>
    Kolkata's metro, suburban rail and bus routes decide which tutors can keep a weekly slot at your door. Six
    neighbourhoods from six of our zones show how different the arrangements are; the
    <a href="{{ url('/city/kolkata') }}">Kolkata page</a> lists tutors by locality.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Kolkata neighbourhoods: the homes a maths tutor visits, the rail link, and what the family should share</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">Homes</th><th scope="col">Rail link</th><th scope="col">Tell the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $klA('ballygunge', 'Ballygunge') !!}</td><td>Mansions from the 1930s and 1940s beside newer apartment buildings</td><td>Ballygunge Junction on the Sealdah South lines; Kalighat on the Blue Line; Kavi Sukanta on the Orange Line</td><td>Avoid weekend evenings near the Gariahat crossing; buildings may note visitors at the gate</td></tr>
      <tr><td>{!! $klA('salt-lake-sector-1', 'Salt Lake Sector I') !!}</td><td>Independent houses in lettered blocks such as AA, AB and BD</td><td>City Centre and Central Park on the Green Line</td><td>The block letter, house number and nearest avenue; most doors open onto the street</td></tr>
      <tr><td>{!! $klA('new-town-action-area-1', 'New Town Action Area I') !!}</td><td>Plots in blocks AA to AF, government estates and apartment complexes</td><td>No working metro inside yet; Salt Lake Sector V on the Green Line, then auto or bus</td><td>Tower and flat number for the gate register</td></tr>
      <tr><td>{!! $klA('behala', 'Behala') !!}</td><td>Old family houses, apartment buildings and builder floors</td><td>Purple Line stations along Diamond Harbour Road, from Joka to Majerhat</td><td>An afternoon or weekend-morning slot beats the evening peak on the main road</td></tr>
      <tr><td>{!! $klA('lake-town', 'Lake Town') !!}</td><td>Apartment buildings, builder floors and older houses</td><td>Bidhannagar Road or Dum Dum Junction by train; Belgachia or Dum Dum on the Blue Line</td><td>Which side of VIP Road you are on, and an early or later evening hour</td></tr>
      <tr><td>{!! $klA('shibpur', 'Shibpur') !!}, Howrah</td><td>Houses in narrow lanes in the old core, with newer complexes</td><td>Howrah and Howrah Maidan on the Green Line since March 2024</td><td>A landmark on the main road, since the last stretch is often on foot</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Since August 2025 the Green Line has run without a break from Howrah Maidan to Salt Lake Sector V, which lets a
    tutor on either bank of the Hooghly reach the other side by metro. Where no suitable tutor can reach your
    neighbourhood at your hour, one home session and one online session a week is a practical compromise; the
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article weighs the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kom-term">What should the first term of maths tuition produce?</h2>
  <p>
    By the first unit test after tuition begins, a parent should be able to see four things without knowing any maths:
  </p>
  <ol>
    <li><strong>A formula notebook.</strong> Started in the first week, added to after every chapter, and used for revision rather than rewritten.</li>
    <li><strong>An error log.</strong> Each wrong question copied, sorted as a slip, a misread or a real gap, and tried again a fortnight later.</li>
    <li><strong>Board-style marking.</strong> At least one timed section of a specimen or sample paper marked the way CISCE or CBSE marks it, method marks included.</li>
    <li><strong>A plan you have seen.</strong> Which chapters are being covered before the school reaches them, and which are being repaired.</li>
  </ol>
  <p>
    If these are missing, tell us. We arrange a demo with another shortlisted tutor, and a change of tutor costs you
    nothing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kom-fees">How much does a maths home tutor in Kolkata charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    rates. What moves a figure up or down is the course and class, the tutor's years with that syllabus, the route to
    your neighbourhood at the hour you want, and the number of sessions each week. You see every shortlisted fee before
    the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kom-send">What should your request to us include?</h2>
  <p>
    Send the class, the course by name (ICSE, ISC, CBSE Standard or Basic, Madhyamik, Higher Secondary, IB or IGCSE),
    your neighbourhood with a block, pocket or landmark, the days and times that suit you, and a budget. We reply with
    two or three matched maths tutors and their fees, and you pick one for a free demo class. If nobody suitable can
    travel to you, we suggest online or split-week lessons. NXTutors works from Sector 66, Gurugram, and teaches online
    across India; the national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page explains how we work
    in other cities.
  </p>
  <p>
    Maths teachers living in Kolkata or Howrah can see open student requests on the
    <a href="{{ url('/tuition-jobs/kolkata') }}">Kolkata tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
