{{--
  Board hub for "IB tutor Bhopal". Author: Ajay Vatsyayan (role: IB, IGCSE and
  ISC maths). No anecdotes, years or results are claimed for him. No schools
  are named.

  Board facts restate only what ib-tutor-gurgaon states, which cites ibo.org
  (read 1 Oct 2026): PYP ages 3-12, six transdisciplinary themes, final-year
  exhibition, no external exams; MYP ages 11-16, five years (shorter versions
  allowed), eight subject groups, criteria, personal project about 25 hours,
  eAssessment optional except the personal project, two-hour on-screen exams
  in some groups; DP ages 16-19, six subjects, normally three (not more than
  four) HL, 240 h HL / 150 h SL, grades 1-7, EE + TOK up to three points,
  maximum 45, 24 points among the passing conditions, IA in every subject
  (teacher-marked, IB-moderated); EE 4,000-word limit, three reflection
  sessions ending in a viva voce, 500-word reflective statement (first
  assessment 2027); TOK exhibition of three objects and a 1,600-word essay on
  one of six prescribed titles; maths AA or AI at SL or HL, revised for first
  teaching from August 2027. No exam dates.

  Local detail only from the city hub (bhopal.blade.php: "a smaller number of
  IB and Cambridge IGCSE candidates"; IB/IGCSE card: "These students often
  pair a local tutor with an online specialist"; Orange Line priority section
  of eight stations; lakes; corridors) and database/seo-content/zones/
  bhopal.json (online tutors suit specialist curricula or late study hours).
  No share of IB schools is claimed. Fee wording is the approved sentence.
  FAQs render from faqs/ib-tutor-bhopal.php. Area links render only when that
  Bhopal area page exists and is active.
--}}
@php
  $bpAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $bpA = function (string $slug, string $label) use ($bpAreaSlugs) {
      return in_array($slug, $bpAreaSlugs, true)
          ? '<a href="' . e(url('/city/bhopal/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ibb-guide" aria-labelledby="ibbGuideTitle">
  <h2 id="ibbGuideTitle">IB tutors in Bhopal: help for PYP, MYP and Diploma students, close by or online</h2>

  <p class="nx-guide__lede">
    Bhopal has a smaller number of IB candidates beside its CBSE, MP Board and CISCE students, and our city guide notes
    a habit among them: they often pair a local tutor with an online specialist. That is a sensible answer to a real
    problem, because the person who knows your child's Higher Level course well may live across the lakes or in
    another city. This page sets out how each IB programme is assessed, how the Diploma is scored, where a tutor's
    help must stop on coursework, how to prepare for school mocks, which subjects Bhopal families ask about, and how
    tutors reach each zone. The author, Ajay Vatsyayan, teaches IB, IGCSE and ISC maths on NXTutors. Our
    <a href="{{ url('/ib-tutor-gurgaon') }}">IB programmes guide</a> covers the same ground in more depth.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibb-city">IB in Bhopal</a> ·
    <a href="#ibb-boards">IB and the Indian boards</a> ·
    <a href="#ibb-prog">Which programme?</a> ·
    <a href="#ibb-dp">The Diploma</a> ·
    <a href="#ibb-rules">Coursework rules</a> ·
    <a href="#ibb-mocks">Mocks and predicted grades</a> ·
    <a href="#ibb-pair">Local plus online</a> ·
    <a href="#ibb-join">Joining DP1</a> ·
    <a href="#ibb-subjects">Subjects</a> ·
    <a href="#ibb-zones">Zones</a> ·
    <a href="#ibb-demo">Demo</a> ·
    <a href="#ibb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibb-city">IB students in Bhopal</h2>
  <p>
    The <a href="{{ url('/city/bhopal') }}">Bhopal tutors page</a> lists CBSE, the MP Board, CISCE's ICSE and ISC, and a
    smaller number of IB and Cambridge IGCSE candidates. We do not estimate their numbers. The geography matters more
    for IB families than the count: only the first Orange Line section is running, the long corridors slow down at
    office and shift hours, and the lakes split the map. Our zone research notes that online tutors suit specialist
    curricula and late study hours, which fits many Diploma students.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibb-boards">How the IB differs from CBSE, ICSE and the MP Board</h2>
  <p>
    In general terms, the Indian boards examine a prescribed syllabus through papers at the end of the year, with the
    MP Board also offering Hindi or English medium. The IB assesses across the course. Primary and Middle Years work
    is judged against published criteria. In the Diploma, every subject includes an internal assessment, marked by
    the teacher and moderated by the IB, alongside final exams. A tutor needs to know the criteria and the command
    terms, and must respect the IB's rules about help on assessed work. Experience with another board does not
    transfer automatically.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibb-prog">Which programme is your child in?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The IB programmes and the help each usually calls for</caption>
    <thead>
      <tr><th scope="col">Programme and ages</th><th scope="col">How it works</th><th scope="col">Help that makes sense</th></tr>
    </thead>
    <tbody>
      <tr><td>PYP, 3 to 12</td><td>Inquiry units across six transdisciplinary themes; an exhibition in the final year; no external exams</td><td>Reading, a clear written paragraph, secure arithmetic; a tutor close to home</td></tr>
      <tr><td>MYP, 11 to 16</td><td>Up to five years, eight subject groups, criteria-based marking; a personal project of about 25 hours; on-screen exams only if the school enters them</td><td>Maths and sciences in the final two years; writing to criteria; reading the task sheet first</td></tr>
      <tr><td>DP, 16 to 19</td><td>Two years, six subjects, internal assessment in each, final exams, Extended Essay, TOK and CAS</td><td>One or two HL subjects; IA subject knowledge within the rules; past papers</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibb-dp">The Diploma: levels, maths courses and points</h2>
  <p>
    Diploma students take six subjects, normally three at Higher Level and at most four. The IB recommends 240 teaching
    hours for HL against 150 for SL, so HL courses are the usual reason a family looks for help. Maths comes as
    Analysis and Approaches or Applications and Interpretation, each at SL or HL, and the courses are revised for
    first teaching from August 2027; confirm with the school which version applies. Each subject is graded 1 to 7, the
    Extended Essay and TOK together add up to three points, and 45 is the maximum. At least 24 points is one of the
    passing conditions. Read the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA versus AI explainer</a> if the maths
    choice is still open.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibb-rules">Coursework: what a tutor may and may not do</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The IB core and internal assessment, and the tutor's role</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">What it is</th><th scope="col">A tutor may</th><th scope="col">A tutor may not</th></tr>
    </thead>
    <tbody>
      <tr><td>Extended Essay</td><td>Independent research up to 4,000 words; from 2027 assessment, three reflection sessions ending in a viva voce, plus a 500-word reflective statement</td><td>Teach the subject behind the question; explain the criteria</td><td>Choose the topic, write or edit any part</td></tr>
      <tr><td>Theory of Knowledge</td><td>An exhibition of three objects and a 1,600-word essay on one of six prescribed titles</td><td>Discuss ideas and how the assessment works</td><td>Pick objects or draft the essay</td></tr>
      <tr><td>Internal assessment</td><td>A piece in every subject, marked by the teacher against published criteria and moderated by the IB</td><td>Teach the maths or science involved; question the student's reasoning</td><td>Run the analysis or polish the write-up</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE parent's guide</a> discusses
    the criteria in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibb-mocks">Preparing for school mocks and predicted grades</h2>
  <p>
    In DP2, school mock exams matter because they feed the grades predicted for university applications. A tutor's
    hours before mocks should be used narrowly. Start about two months out with a list of topics ranked by how often
    marks were lost in school tests. Work through past-paper questions on the top three or four topics, under time,
    marked against the official markscheme. In the final fortnight, switch to full papers in the student's weakest
    subject, again timed and marked, with every lost mark logged by cause. Avoid new content in the last weeks and
    keep sessions short. After mocks, sit down with the tutor and the marked scripts to plan the run-in to the final
    exams. Families who start this in DP1 rather than DP2 have far more room to move.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibb-pair">Making a local-plus-online pairing work</h2>
  <p>
    The pairing our city guide describes, a local tutor with an online specialist, can save a Diploma year or waste
    money, depending on how it is set up. Four rules keep it useful:
  </p>
  <ul>
    <li><strong>Give each tutor one job.</strong> The local tutor takes school content, homework repair and handwritten practice; the online specialist takes the HL course's exam technique and the subject knowledge behind an internal assessment.</li>
    <li><strong>Share one error log.</strong> A single document both tutors can read stops the same mistake being fixed twice or not at all.</li>
    <li><strong>Fix the online slot to the student's energy.</strong> Late study hours suit online sessions, but not after a long day of coaching; a forty-five-minute slot used well beats ninety minutes half-used.</li>
    <li><strong>Review together each month.</strong> Ten minutes with both tutors, or their notes, tells you whether marks are moving.</li>
  </ul>
  <p>
    Where one tutor can do both, a home lesson at the weekend and an online session midweek, the plan is simpler and
    nothing falls between two people.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibb-join">Arriving in DP1 from an Indian board</h2>
  <p>
    Students who join the Diploma after Class 10 on CBSE, ICSE or the MP Board usually know plenty of content. What is
    new is the assessment: command terms with exact meanings, explanations valued as much as final answers, criteria
    for every internal assessment and, in maths and sciences, the approved calculator used from the first week. The
    first two months are where a tutor helps most, with short past-paper questions marked against the markscheme.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibb-subjects">IB subjects and our Bhopal pages</h2>
  <ul>
    <li><strong>Maths AA or AI:</strong> <a href="{{ url('/ib-maths-tutor') }}">IB maths tutors</a> and local <a href="{{ url('/maths-home-tutor-bhopal') }}">maths home tutors in Bhopal</a>.</li>
    <li><strong>Physics:</strong> <a href="{{ url('/physics-home-tutor-bhopal') }}">physics home tutors in Bhopal</a> and the <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics guide</a>.</li>
    <li><strong>Chemistry and biology:</strong> <a href="{{ url('/chemistry-home-tutor-bhopal') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-bhopal') }}">biology</a>; tell us SL or HL.</li>
    <li><strong>English and other subjects:</strong> <a href="{{ url('/english-home-tutor-bhopal') }}">English home tutors in Bhopal</a>; for economics or a language, give the exact course.</li>
  </ul>
  <p>
    Moving into the Diploma from CBSE, ICSE or the MP Board? The
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching guide</a> has a bridging plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibb-zones">IB tutors across Bhopal's zones</h2>
  <ul>
    <li><strong><a href="{{ url('/city/bhopal/zone/arera-colony-shahpura-kolar-road') }}">Arera Colony, Shahpura and Kolar Road</a>.</strong> {!! $bpA('kolar-road', 'Kolar Road') !!} and {!! $bpA('chuna-bhatti', 'Chuna Bhatti') !!} have no metro or rail stop; register the tutor at the gate, and expect online sessions for an HL specialist.</li>
    <li><strong><a href="{{ url('/city/bhopal/zone/mp-nagar-tt-nagar-shivaji-nagar') }}">MP Nagar, TT Nagar and Shivaji Nagar</a>.</strong> {!! $bpA('mp-nagar', 'MP Nagar') !!} has an Orange Line station, so a specialist can arrive by metro; parking in the commercial blocks is tight.</li>
    <li><strong><a href="{{ url('/city/bhopal/zone/hoshangabad-road-misrod-katara-hills') }}">Hoshangabad Road, Misrod and Katara Hills</a>.</strong> Along {!! $bpA('hoshangabad-road', 'Hoshangabad Road') !!}, traffic is heavy both ways at office hours; set lessons after the evening peak or online.</li>
    <li><strong><a href="{{ url('/city/bhopal/zone/bhel-awadhpuri-ayodhya-bypass') }}">BHEL, Awadhpuri and Ayodhya Bypass</a>.</strong> {!! $bpA('saket-nagar', 'Saket Nagar') !!} is close to Alkapuri station, so a tutor from the city side can come by metro.</li>
    <li><strong><a href="{{ url('/city/bhopal/zone/old-city-lalghati-bairagarh') }}">Old City, Lalghati and Bairagarh</a>.</strong> In {!! $bpA('bairagarh', 'Bairagarh') !!}, tight lanes mean a two-wheeler and a short walk; the metro does not reach this side yet.</li>
  </ul>
  <p>
    Online IB lessons need the tutor to see written working live, through a tablet, a shared whiteboard or a camera
    over the page, with the student using their approved calculator. Younger PYP and MYP children usually gain more
    from a tutor at the table.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibb-demo">What to test in the free demo</h2>
  <ol>
    <li>Bring a marked unit test and ask the tutor to explain the lost marks against the markscheme.</li>
    <li>Ask which syllabus version your child's exam session uses.</li>
    <li>Ask what "show that" and "evaluate" each require.</li>
    <li>Ask precisely where their help on an IA or the Extended Essay stops.</li>
    <li>Ask for a plan to the next school deadline or mock.</li>
  </ol>
  <p>
    You get two or three matched tutors with fees shown before the demo, and switching tutor later is free. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. In Bhopal the programme,
    level, number of subjects and the tutor's journey set the fee. See the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-bhopal') }}">Bhopal tuition fees</a>.
  </p>
  <p>
    Send the programme, year, subject and level, your colony or sector, and your free hours. The first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>; IB
    teachers can see <a href="{{ url('/tuition-jobs/bhopal') }}">tuition jobs in Bhopal</a>.
  </p>
  </section>

  </div>
</article>
