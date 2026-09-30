{{--
  Long-form guide for the "maths home tutor Hyderabad" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/hyderabad-research.json (zone_facts and area
  "about" texts, each with sources). Exam facts reuse the checked statements
  in database/seo-content/blog: cbse-class-10-maths-preparation (unit marks,
  section layout, Standard/Basic skill split, no calculators, pi = 22/7),
  cbse-class-10-board-year-plan-gurgaon (80 + 20, two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC single 2027/2028 paper,
  seven units, project marking), -ib-math-aaai-slhl (AA/AI, teaching hours,
  paper weights, exploration) and jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026 pattern and sessions, JEE Advanced 2026 eligibility, mock
  analysis). The Telangana boards are described generally only (names and
  what they award); no state exam pattern is given. No school, college,
  society, developer or people's names, no distances or travel times, only
  the allowed fee sentence.

  Area links render only when that Hyderabad area page exists and is active.
--}}
@php
  $hyAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $hyA = function (string $slug, string $label) use ($hyAreaSlugs) {
      return in_array($slug, $hyAreaSlugs, true)
          ? '<a href="' . e(url('/city/hyderabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide hym-guide" aria-labelledby="hymGuideTitle">
  <h2 id="hymGuideTitle">Maths home tutor in Hyderabad: pin down the syllabus, then the side of the city</h2>

  <p class="nx-guide__lede">
    Hyderabad runs from the office towers of Gachibowli and Kokapet to the cantonment colonies of Secunderabad and
    the LB Nagar crossroads, and its maths classrooms are just as varied. One apartment tower can hold children on
    CBSE, ICSE, the Telangana state syllabus and IB, while an older sibling combines Intermediate or Class 12 with JEE
    preparation. NXTutors begins with the paper your child will write and the neighbourhood you live in, then shares
    two or three maths tutors who suit both. Every fee is visible before you meet, and the opening class with the
    tutor you pick is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#hym-which">Eight syllabuses</a> ·
    <a href="#hym-tenth">Class 10 marks</a> ·
    <a href="#hym-jee">Entrance and board together</a> ·
    <a href="#hym-week">A sample week</a> ·
    <a href="#hym-global">ISC, IB and IGCSE</a> ·
    <a href="#hym-where">Six neighbourhoods</a> ·
    <a href="#hym-month">The first month</a> ·
    <a href="#hym-mode">Home or online</a> ·
    <a href="#hym-cost">Fees</a> ·
    <a href="#hym-send">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="hym-which">Which of Hyderabad's maths syllabuses is your child following?</h2>
  <p>
    The IB, IGCSE and ISC material below is written by Ajay Vatsyayan, who teaches those maths courses. The CBSE and
    ICSE Class 10 material is written by Abhinandan Tiwary, who teaches Class 10 maths for both boards. We ask for the
    syllabus before the class, because a tutor fluent in one can be a stranger to another.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths syllabuses Hyderabad families bring to us, the body behind each, and a first question for any tutor</caption>
    <thead>
      <tr><th scope="col">Syllabus</th><th scope="col">Awarding body</th><th scope="col">How it is finally assessed</th><th scope="col">First question for the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 10 Mathematics, Standard or Basic</td><td>CBSE</td><td>An 80-mark board paper lasting three hours; the school awards 20 more</td><td>When in the year do you begin full sample papers?</td></tr>
      <tr><td>ICSE Class 10 Mathematics</td><td>CISCE</td><td>A single 80-mark paper of three hours, with 20 internal marks</td><td>How do you mark the steps of a solution?</td></tr>
      <tr><td>SSC Mathematics (Class 10)</td><td>Board of Secondary Education, Telangana</td><td>Set by the state board; its official site carries the current scheme</td><td>Do you teach from the state textbooks and the board's model papers?</td></tr>
      <tr><td>Intermediate Mathematics, first and second year</td><td>Telangana Board of Intermediate Education</td><td>Set by the state board; check its official site for the pattern</td><td>How will you fit entrance practice around board chapters?</td></tr>
      <tr><td>Class 12 Mathematics</td><td>CBSE</td><td>38 compulsory questions for 80, and 20 internal</td><td>What share of each week goes to calculus?</td></tr>
      <tr><td>ISC Mathematics, Class 12</td><td>CISCE</td><td>One 80-mark theory paper and two projects worth 20</td><td>Are your notes built on the 2027 single-paper layout?</td></tr>
      <tr><td>IB Diploma: Analysis and Approaches, or Applications and Interpretation</td><td>IB</td><td>SL sits two papers, HL three, and both write an exploration</td><td>How do you guide an exploration without drafting it?</td></tr>
      <tr><td>Cambridge IGCSE Mathematics</td><td>Cambridge</td><td>Core or Extended tier</td><td>Which tier would you advise for my child?</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Intermediate is Telangana's name for Classes 11 and 12, taken as a first and a second year. Students choose a
    subject group, and the MPC group of maths, physics and chemistry is the usual route for engineering aspirants. We do not
    reproduce state papers on this page: the two Telangana boards publish their own schemes, and a tutor for SSC or
    Intermediate should work from those and from the textbooks your child's school has issued.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hym-tenth">Class 10 maths on CBSE and ICSE: how are the marks divided?</h2>
  <p>
    CBSE's 2026-27 curriculum spreads 80 theory marks over seven units built from 14 NCERT chapters. By weight,
    algebra leads with 20, geometry follows at 15, trigonometry is 12, statistics and probability 11 and mensuration
    10, while real numbers and coordinate geometry take 6 apiece. Algebra runs underneath nearly every other unit, so
    a tutor who makes it secure in the first term lightens the rest of the year.
  </p>
  <p>
    Standard and Basic share one five-part layout. Part A has twenty one-mark items, eighteen multiple-choice and two
    assertion–reason; Part B five answers of two marks; Part C six of three; Part D four of five; Part E three case
    studies at four marks each. Calculators stay out of the hall, and π is 22/7 unless the question states another
    value. The levels part company on depth: around 54% of Standard marks test remembering and understanding, against
    about 75% in Basic. If maths in Class 11 is a real possibility, Standard is usually the safer entry, but settle it
    with the school before registration.
  </p>
  <p>
    From 2026 every CBSE Class 10 candidate sits a compulsory main exam, and an optional later exam allows improvement
    in up to three subjects, maths among them; 2027 dates are not yet out, so keep an eye on cbse.gov.in. ICSE maths is
    likewise 80 in the exam plus 20 internal. Useful next reads: the
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths chapter guide</a>, our
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hym-jee">JEE alongside Intermediate or Class 12: what does the plan have to respect?</h2>
  <p>
    In Hyderabad, senior maths is very often entrance maths as well. Students in the MPC group or the CBSE science
    stream often spend Classes 11 and 12 preparing for JEE while keeping up with school, and many add a
    coaching programme. Five facts shape any sensible plan:
  </p>
  <ul>
    <li><strong>Two sittings.</strong> NTA ran JEE (Main) 2026 Paper 1 in a January session and an April session, as a three-hour computer-based test. Candidates could take one or both, and the better NTA score counted.</li>
    <li><strong>Maths is a third of the paper.</strong> Of 75 questions worth 300 marks, 25 were maths: 20 multiple-choice in Section A and 5 numerical-value in Section B. A right answer earned +4 and a wrong one −1 in both sections.</li>
    <li><strong>Main opens several doors.</strong> Its results feed admission to NITs, IIITs and other institutions, and it is the qualifying test for JEE (Advanced).</li>
    <li><strong>Advanced is a separate day.</strong> JEE (Advanced), the route to the IITs, has two compulsory computer-based papers, both sat on one day. For 2026 a candidate had to rank among the first 2,50,000 successful JEE (Main) candidates, across all categories, to register.</li>
    <li><strong>Rules are reset yearly.</strong> The 2027 bulletins are not out yet, so check jeemain.nta.nic.in and jeeadv.ac.in before building a calendar around any date.</li>
  </ul>
  <p>
    JEE rewards multi-step problems solved under time pressure; the board rewards complete, well-set-out working. On
    the CBSE side, the Class 12 paper asks 38
    compulsory questions for 80 marks and calculus alone carries 35 of them, so calculus earns the biggest slice of
    every week from April. An Intermediate student should get the same discipline, with one extra check: the tutor
    compares the state board's current maths syllabus with NTA's JEE syllabus line by line rather than assuming they
    match.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hym-week">What does a balanced week look like for a Class 12 student aiming at JEE?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>One way to split two tutor sessions and an optional online hour between board maths and JEE maths</caption>
    <thead>
      <tr><th scope="col">Slot</th><th scope="col">Board work</th><th scope="col">Entrance work</th></tr>
    </thead>
    <tbody>
      <tr><td>First weekday session</td><td>One calculus or algebra topic, ending with a full long answer set out as the board expects</td><td>A short timed set of single-concept problems on the same topic</td></tr>
      <tr><td>Second weekday session</td><td>Corrections from the latest school test</td><td>The week's unsolved questions from the coaching sheet or the student's doubt list</td></tr>
      <tr><td>Weekend hour, often online</td><td>None</td><td>Mock-test review: every lost mark sorted as concept unknown, concept misapplied, calculation slip, misread question or out of time</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Before school exams and pre-boards the weight tips towards written board practice, then swings back. Flat coaching
    scores over several tests, piling doubts, or a student who follows a worked solution but cannot start the next
    problem alone are the signs that one-to-one maths help is worth adding. For more depth, read
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching, a home tutor or both for
    JEE</a>, the <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise guide</a>, the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page. Entrance students usually need
    physics support too; see <a href="{{ url('/physics-home-tutor-hyderabad') }}">physics home tutors in
    Hyderabad</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hym-global">ISC, IB and IGCSE: which changes should families know about?</h2>
  <h3>ISC Class 12</h3>
  <p>
    Earlier ISC papers let candidates pick Section B or Section C. For 2027 and 2028, CISCE sets seven units in a
    single 80-mark paper with no such choice, so vectors, three-dimensional geometry, linear programming and
    probability now reach every candidate, and calculus accounts for 35 marks. Two projects make up the remaining 20,
    each out of 10: format 1, content 4, findings 2 and viva 3. The
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> lays out a two-year plan.
  </p>
  <h3>IB Diploma and Cambridge IGCSE</h3>
  <p>
    Analysis and Approaches centres on algebra, calculus and proof, with one paper taken without a calculator;
    Applications and Interpretation centres on modelling and statistics, with a graphic display calculator in every
    paper. At SL two papers carry 40% each; at HL two carry 30% each and a third 20%. The exploration supplies the final 20% at either level and must
    be the student's own; a tutor may explain the criteria and question a draft, never write it. See our
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA or AI guide</a>. For IGCSE, Core caps the grade at C and
    Extended runs from A* to G, so agree the tier with the school early.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hym-where">How does a maths tutor reach six very different Hyderabad neighbourhoods?</h2>
  <p>
    Three metro lines shape most tutor journeys: the Red Line from Miyapur to LB Nagar, the Blue Line from Nagole to
    Raidurg, and the Green Line through Parade Ground to MG Bus Station, with MMTS suburban trains filling gaps. Browse tutors by locality on our
    <a href="{{ url('/city/hyderabad') }}">Hyderabad page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Hyderabad localities: how a maths tutor usually gets there and what the family should arrange</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Usual approach</th><th scope="col">Worth arranging</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $hyA('kondapur', 'Kondapur') !!}</td><td>HITEC City on the Blue Line, or Hafeezpet on the MMTS, then an auto or bus</td><td>Most homes are in gated communities, so register the tutor and ask about visitor parking; start before the office rush builds around Kothaguda</td></tr>
      <tr><td>{!! $hyA('kphb-colony', 'KPHB Colony') !!}</td><td>KPHB Colony station on the Red Line, then a walk or short auto ride</td><td>The colony is laid out in numbered phases, so give phase and block; houses are doorstep visits, apartment buildings ask visitors to sign in</td></tr>
      <tr><td>{!! $hyA('narsingi', 'Narsingi') !!}</td><td>No metro; usually by road along the Outer Ring Road, or Raidurg on the Blue Line and then a cab</td><td>Newer homes are gated towers where security may phone the flat; an after-school or weekend slot is easier to hold</td></tr>
      <tr><td>{!! $hyA('banjara-hills', 'Banjara Hills') !!}</td><td>Punjagutta on the Red Line for the eastern side, Jubilee Hills Check Post on the Blue Line for the western roads, then an auto</td><td>Name your numbered road; independent houses have room for a two-wheeler, apartment buildings keep a register</td></tr>
      <tr><td>{!! $hyA('marredpally', 'Marredpally') !!}</td><td>Parade Ground, the Blue and Green Line interchange, or Secunderabad Junction, then an auto</td><td>Say whether you are in East or West Marredpally; builder floors are doorstep visits, apartments want the visitor registered</td></tr>
      <tr><td>{!! $hyA('lb-nagar', 'LB Nagar') !!}</td><td>The Red Line's southern terminus, reachable from Ameerpet or Kukatpally without changing trains</td><td>The crossroads are heavy at office hours, so fix the session after the evening rush</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hym-month">What should the first month of maths tuition produce?</h2>
  <p>
    Marks take a term to move, but a month shows whether the tutor has a plan. Look for:
  </p>
  <ol>
    <li><strong>A diagnosis you can read:</strong> a short early test with the gaps named by chapter.</li>
    <li><strong>A plan tied to the calendar:</strong> chapters mapped against school exams and, for entrance students, the JEE sessions.</li>
    <li><strong>An error log:</strong> each wrong answer corrected and retried a week later.</li>
    <li><strong>One timed section marked honestly:</strong> scored as the board or NTA would score it.</li>
  </ol>
  <p>
    If two of these are absent, tell us. We line up a demo with another shortlisted tutor, and changing tutor is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hym-mode">Home, online or a mix: what suits Hyderabad families?</h2>
  <p>
    A tutor at the table sees every line of working as it appears. A mix helps in two cases: when the specialist you
    need for IB HL, ISC or IGCSE Extended lives across the city, pair them online with a nearby tutor for written
    practice; and on coaching evenings, an online hour spares a late trip through office traffic. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article compares the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hym-cost">How much does a maths home tutor in Hyderabad charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee, which reflects the syllabus and level, how long they have taught it, the journey to your neighbourhood at your
    chosen hour and the number of weekly sessions. Every shortlisted fee appears before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hym-send">What should your request to us include?</h2>
  <p>
    Five details get a match moving: the class or Intermediate year, the syllabus by its exact name, your locality and
    building or colony, the days and times you can offer, and a budget. Two or three matched maths tutors follow, fees
    included, and you choose one for a free demo class. If nobody suitable can reach your part of Hyderabad at that
    hour, we suggest online or split-week sessions. NXTutors, whose office is in Sector 66, Gurugram, also teaches
    online across India; the national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page shows how we
    work elsewhere.
  </p>
  <p>
    Maths teachers based in Hyderabad who want students near home can see open requests on the
    <a href="{{ url('/tuition-jobs/hyderabad') }}">Hyderabad tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
