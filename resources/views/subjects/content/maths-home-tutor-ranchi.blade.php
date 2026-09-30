{{--
  Long-form guide for the "maths home tutor Ranchi" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/ranchi-research.json (zone_facts and area "about"
  texts). Exam facts reuse checked statements in database/seo-content/blog:
  cbse-class-10-maths-preparation (unit marks, sections, Standard/Basic split,
  no calculators, pi = 22/7), cbse-class-10-board-year-plan-gurgaon (two
  Class 10 exams), cbse-class-12-maths-calculusalgebra (38 questions,
  calculus 35), icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC single
  2027/2028 paper, seven units, project marking), -ib-math-aaai-slhl (AA/AI,
  hours, weights, exploration) and jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026 pattern). The Jharkhand Academic Council is described in
  general terms only (no exam pattern). No school, college, coaching
  institute, society or people's names, no distances or travel times, only
  the allowed fee sentence.

  Area links render only when that Ranchi area page exists and is active.
--}}
@php
  $rcAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $rcA = function (string $slug, string $label) use ($rcAreaSlugs) {
      return in_array($slug, $rcAreaSlugs, true)
          ? '<a href="' . e(url('/city/ranchi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide rcm-guide" aria-labelledby="rcmGuideTitle">
  <h2 id="rcmGuideTitle">Maths home tutor in Ranchi: pick the syllabus, then the side of town, then the person</h2>

  <p class="nx-guide__lede">
    In Ranchi, two children in the same colony can be preparing for quite different maths papers. One writes the
    Jharkhand Academic Council exam, the next is on CBSE, a third follows ICSE or ISC, and a few study IB or
    Cambridge IGCSE. The city also spreads out in several directions from its centre: north along Kanke Road towards
    Morabadi, east through Lalpur and Kokar, west across Harmu and Argora, and south past Doranda to Hatia. A good
    match has to fit both the paper and the route. Tell NXTutors the course and your locality, and we come back with
    two or three maths tutors who fit. Every fee is on screen before you meet anyone, and the first lesson is a free
    demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#rcm-course">Which course</a> ·
    <a href="#rcm-jac">JAC maths</a> ·
    <a href="#rcm-cbse10">CBSE Class 10</a> ·
    <a href="#rcm-twelve">Class 12 and JEE</a> ·
    <a href="#rcm-other">ICSE, ISC, IB, IGCSE</a> ·
    <a href="#rcm-places">Five localities</a> ·
    <a href="#rcm-month">The first month</a> ·
    <a href="#rcm-demo">The demo</a> ·
    <a href="#rcm-fees">Fees</a> ·
    <a href="#rcm-ask">Asking us</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="rcm-course">Whose exam is it? Sorting Ranchi's maths courses before choosing a tutor</h2>
  <p>
    Ajay Vatsyayan writes the IB, IGCSE and ISC maths guidance here, and Abhinandan Tiwary the Class 10 CBSE and ICSE
    sections. Both begin with one question: which body writes your child's paper? That fixes the book, the answer
    layout and the practice that moves marks.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses studied in Ranchi homes, who sets the final exam, and where a home tutor adds the most</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Who sets the final exam</th><th scope="col">Where a home tutor adds the most</th></tr>
    </thead>
    <tbody>
      <tr><td>Jharkhand board, Classes 10 and 12</td><td>Jharkhand Academic Council (JAC)</td><td>Working through the prescribed textbook in the medium your child writes in</td></tr>
      <tr><td>CBSE Class 10 (Standard or Basic)</td><td>CBSE; 80 marks in the board exam and 20 marked in school</td><td>Algebra and geometry proofs, where most lost marks hide</td></tr>
      <tr><td>CBSE Class 12</td><td>CBSE; 38 compulsory questions for 80 marks</td><td>Calculus, spread steadily across the year</td></tr>
      <tr><td>ICSE Class 10 and ISC Class 12</td><td>CISCE; an 80-mark paper plus 20 marks of internal or project work</td><td>Full working set out the way CISCE examiners read it</td></tr>
      <tr><td>IB Diploma, Cambridge IGCSE</td><td>IB; Cambridge</td><td>The right course or tier, and calculator skills where they are allowed</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcm-jac">How should a JAC student's maths tuition be set up?</h2>
  <p>
    The Jharkhand Academic Council conducts the state's Class 10 (Matric) and Class 12 (Intermediate) examinations. It
    decides its own syllabus and marking scheme and updates them, so we do not describe a JAC paper here. Check the
    council's official website for the current scheme before a tutor draws up a year plan.
  </p>
  <p>
    What a family can control is the fit. Ask any tutor you shortlist these things:
  </p>
  <ul>
    <li><strong>Can you teach in the language my child answers in?</strong> A student who writes in Hindi should hear the same terms the textbook uses.</li>
    <li><strong>Will homework come from our book?</strong> Practice should follow the prescribed textbook and the model papers the council itself puts out.</li>
    <li><strong>Do you insist on written steps?</strong> A line-by-line solution can be checked and marked; a bare answer cannot.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcm-cbse10">CBSE Class 10 maths in 2026-27: what the paper looks like</h2>
  <p>
    CBSE sets 80 board marks across seven units built from 14 NCERT chapters, and this session's design is the same as
    last year's. The marks decide where a tutor's hours should go:
  </p>
  <ul>
    <li><strong>Algebra, 20 marks.</strong> Polynomials, pairs of linear equations, quadratic equations and arithmetic progressions. Word problems are the usual weak point: the equation is set up wrongly before any algebra starts.</li>
    <li><strong>Geometry, 15.</strong> Triangles and circles. Each line of a proof needs its reason written beside it.</li>
    <li><strong>Trigonometry, 12.</strong> Identities plus heights and distances; drawing the figure first prevents most errors.</li>
    <li><strong>Statistics and probability, 11.</strong> Mean, median and mode from grouped data, where one slip in the table spoils the whole answer.</li>
    <li><strong>Mensuration, 10.</strong> Surface areas and volumes of combined solids, with units kept on every line.</li>
    <li><strong>Real numbers and coordinate geometry, 6 each.</strong> Short questions that should never be rushed.</li>
  </ul>
  <p>
    There are five sections. Section A holds 20 questions of one mark (18 multiple-choice and 2
    assertion–reason). Section B has five two-mark questions, C has six worth three, D has four worth five, and E has
    three case studies worth four each. Calculators are not allowed, and π is taken as 22/7 unless stated. Standard and
    Basic cover the same chapters, but about 54% of Standard marks test remembering and understanding compared with
    about 75% in Basic, so Standard is the safer choice for anyone who may take maths in Class 11.
  </p>
  <p>
    Since 2026, Class 10 has one compulsory main exam and an optional second sitting in which a student may try to
    improve up to three subjects, maths included. The 2027 dates have not been announced, so keep an eye on
    cbse.gov.in. For chapter-by-chapter help see the
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths preparation guide</a> and the
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">month-by-month board-year plan</a>; our
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page explains how we match for that year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcm-twelve">Class 12 maths alongside JEE coaching: dividing the work</h2>
  <p>
    Many Class 11 and 12 students in Ranchi already attend JEE coaching, so a home tutor who repeats the lecture
    wastes the evening. The better split is that coaching introduces topics and sets problem
    sheets, while the home tutor clears the problems the student could not finish and protects the board paper.
  </p>
  <p>
    The two papers pull in different directions. In CBSE Class 12 maths, 38 compulsory questions carry 80 marks and
    calculus alone is worth 35 of them, so every answer needs full written working. JEE Main 2026 Paper 1 set 75
    questions for 300 marks; its maths section had 25 questions, 20 multiple-choice and 5 with a numerical answer,
    with four marks for a correct response and one deducted for a wrong one. NTA publishes the pattern afresh each
    year on jeemain.nta.nic.in. A practical week has one session on the coaching sheet and one on board questions,
    ending with a long answer written out in full. The
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-by-topic guide</a> and our
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcm-other">ICSE, ISC, IB and IGCSE maths in brief</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Four non-CBSE maths courses: how the final grade is built and the point to settle with a tutor early</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">How the grade is built</th><th scope="col">Settle early</th></tr>
    </thead>
    <tbody>
      <tr><td>ICSE Class 10</td><td>One written paper of 80 marks with 20 from internal assessment</td><td>How the school's internal work is set and marked; see our <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a></td></tr>
      <tr><td>ISC Class 12, 2027 and 2028 exams</td><td>A single 80-mark paper of seven compulsory units, calculus worth 35; two projects add 20, each out of 10 (format 1, content 4, findings 2, viva 3)</td><td>Revision books written for the old Section B or C choice no longer fit; read the <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a></td></tr>
      <tr><td>IB Diploma</td><td>Analysis and Approaches or Applications and Interpretation; 150 teaching hours at SL, 240 at HL. SL: two papers at 40% each. HL: two at 30% and one at 20%. The exploration is 20% at both levels and must be the student's own work</td><td>Which course and level; our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a> compares them</td></tr>
      <tr><td>Cambridge IGCSE</td><td>Core, graded up to C, or Extended, graded A* to G</td><td>The tier, before the school's entry deadline</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Name the course in your first message, as specialists are fewer than CBSE tutors; an online specialist can fill
    any gap. Families weighing a change
    of board can read about <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">moving from CBSE to IB or
    IGCSE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcm-places">How does home maths tuition work in five Ranchi localities?</h2>
  <p>
    Most Ranchi tutors travel by two-wheeler, auto or e-rickshaw. See tutors locality by locality on our <a href="{{ url('/city/ranchi') }}">Ranchi page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>{!! $rcA('kanke-road', 'Kanke Road') !!}</h3>
      <p>
        One of the two roads that fork off Circular Road beyond Kutchery, with colonies such as Jawahar Nagar and
        Indrapuri behind it. Older houses mean a doorstep visit; newer apartment buildings ask visitors to sign in.
        Pick a slot away from the office rush on the road itself.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>{!! $rcA('lalpur', 'Lalpur') !!}</h3>
      <p>
        Built around Lalpur Chowk, where Circular Road meets Old Hazaribagh Road, with homes in compounds such as
        Burdwan Compound. Parking near the main road is scarce, so tutors often come by auto or e-rickshaw. Keep the
        time clear of the market rush.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>{!! $rcA('harmu', 'Harmu') !!}</h3>
      <p>
        Harmu Housing Colony, set up in the early 1960s, lies along Bypass Road. Its independent houses allow parking in
        the street; the newer high-rises register visitors. Bypass Road is busy around office hours, so leave a little
        buffer.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>{!! $rcA('ashok-nagar', 'Ashok Nagar') !!}</h3>
      <p>
        A plotted cooperative colony formed in 1975. Most homes are independent houses on internal roads, so a tutor
        reaches the door and parks close by. Argora station is near for anyone coming part of the way by train.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>{!! $rcA('doranda', 'Doranda') !!}</h3>
      <p>
        One of Ranchi's older districts, with office para neighbourhoods, staff colonies and apartment buildings.
        Staff colonies and flats may keep a gate register; the market roads fill up in the evening, so a slot just
        before or after that helps.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcm-month">What should the first four weeks of maths tuition look like?</h2>
  <p>
    A new tutor should not jump straight into the next chapter. A sensible first month looks like this:
  </p>
  <ol>
    <li><strong>Week one: find the gaps.</strong> A short written check on earlier topics, such as fractions and linear equations for Class 8 to 10, or functions and trigonometry for Class 11 and 12.</li>
    <li><strong>Week two: fix the foundations.</strong> Two or three of the weakest topics, with practice set from your child's own textbook.</li>
    <li><strong>Week three: catch up with school.</strong> The current school chapter, so homework and class tests stop slipping.</li>
    <li><strong>Week four: a timed section.</strong> A short paper under exam conditions, marked the way the board marks, with the results shared with you.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcm-demo">How do you judge a maths tutor at the free demo?</h2>
  <p>
    Ask the tutor to teach this week's school chapter, then notice whether they ask your child to try a question before explaining it, whether they can tell a careless slip
    from a real misunderstanding, whether the working they model matches your board, and whether they end by telling
    you what the next few sessions will cover. If the fit is not right, tell us and a demo with another tutor from your
    shortlist follows. Changing tutor later is free too. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> has more to look
    for, and <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> helps if you are
    choosing between the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcm-fees">What does a maths home tutor in Ranchi cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    rates. The class and course, the tutor's experience with that course, the trip to your part of Ranchi and the
    number of weekly sessions all make a difference, and you see every fee before choosing whom to meet.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcm-ask">What to tell us when you ask for a Ranchi maths tutor</h2>
  <p>
    Send the class, the exact course (JAC, CBSE Standard or Basic, ICSE, ISC, IB or IGCSE), your locality and a
    landmark, the days and times that work, and a budget. We reply with two or three maths tutors and their fees, and
    you choose one for a free demo. When no suitable tutor can reach your side of the city at that hour, we suggest
    online lessons or a mix. NXTutors is based in Sector 66, Gurugram, and also teaches online across India; the national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page explains how matching works elsewhere.
  </p>
  <p>
    Maths teachers living in Ranchi who would like students close to home can see open requests on the
    <a href="{{ url('/tuition-jobs/ranchi') }}">Ranchi tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
