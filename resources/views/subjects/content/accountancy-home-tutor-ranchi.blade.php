{{--
  "Accountancy home tutor Ranchi" subject page. Byline: NXTutors Academic Team.
  No school, society, person, institute or company is named.

  Board facts reuse the checked statements on the national accountancy-home-tutor
  page, which cites (read 1 Oct 2026):
  - CBSE Accountancy (055) XI-XII 2026-27,
    cbseacademic.nic.in/web_material/CurriculumMain27/SecPart2/Accountancy_SecP2_2026-27.pdf
    (80 theory + 20 project each year; XII Part A partnership 36 + companies 24;
    Part B analysis 12 + cash flow 8, or Computerised Accounting; project file 12 + viva 8).
  - CBSE Business Studies (054) 2026-27, cbseacademic.nic.in.
  - CISCE ISC Accounts (858) and Commerce (857), cisce.org/wp-content/uploads/2025/04/
    (Part I 20; Part II five of eight at 12; XII Section A 60, Section B or C 20).
  - Cambridge IGCSE Accounting 0452 and AS & A Level 9706, cambridgeinternational.org.
  - IBO DP subject list (no separate accounting course).
  - NTA CUET (UG) 2026 Information Bulletin, cuet.nta.nic.in (301; 50 compulsory
    questions, 60 minutes; NCERT Class XII).
  JAC is described generally only, as on the Ranchi hub.
  Local facts only from database/seo-content/areas/ranchi-research.json and
  ranchi-zone-guides.json. No claim of local commerce-tutor supply or demand.
--}}
@php
  $racSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $racA = function (string $slug, string $label) use ($racSlugs) {
      return in_array($slug, $racSlugs, true)
          ? '<a href="' . e(url('/city/ranchi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide rac-guide" aria-labelledby="racGuideTitle">
  <h2 id="racGuideTitle">Accountancy home tutor in Ranchi: from the first journal entry to the Class 12 paper</h2>

  <p class="nx-guide__lede">
    Accountancy is the commerce subject that starts from nothing in Class 11 and then builds on itself, chapter on
    chapter, until the Class 12 paper. A Ranchi student might be writing it for JAC, CBSE, ISC or a Cambridge
    syllabus, and the help that works depends on which. Send NXTutors the board, the class and your locality, and we
    suggest two or three tutors who can come home or teach online. Their fees are on the shortlist, and the first class
    with the tutor you choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#rac-ref">Quick reference</a> ·
    <a href="#rac-jac">JAC commerce</a> ·
    <a href="#rac-log">The mistake log</a> ·
    <a href="#rac-plan">A Class 12 plan</a> ·
    <a href="#rac-where">Six localities</a> ·
    <a href="#rac-mode">Home or online</a> ·
    <a href="#rac-next">CUET and streams</a> ·
    <a href="#rac-demo">The demo</a> ·
    <a href="#rac-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="rac-ref">Accountancy by board: a quick reference</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Senior accountancy courses a Ranchi student may be sitting, with the Class 12 choice on each</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Course</th><th scope="col">Marks each year</th><th scope="col">Class 12 choice</th></tr>
    </thead>
    <tbody>
      <tr><td>JAC</td><td>Accountancy in the intermediate commerce stream</td><td>As set out in the council's syllabus</td><td>Check the council's notices</td></tr>
      <tr><td>CBSE</td><td>Accountancy (055), with Business Studies (054) alongside</td><td>Theory 80 in three hours; project 20</td><td>Financial statement analysis or Computerised Accounting</td></tr>
      <tr><td>CISCE</td><td>ISC Accounts (858); ISC Commerce (857) as a separate subject</td><td>Theory 80; two projects of 10</td><td>Section B (analysis, cash flow) or Section C (spreadsheets, databases)</td></tr>
      <tr><td>Cambridge</td><td>IGCSE Accounting (0452); AS &amp; A Level Accounting (9706)</td><td>IGCSE: multiple-choice 30%, structured paper 70%</td><td>A Level includes a separate cost and management accounting paper</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    There is no accounting course in the IB Diploma; IB students usually meet accounting inside Business Management.
    For the CBSE and CISCE routes in Ranchi, our <a href="{{ url('/cbse-home-tutor-ranchi') }}">CBSE home tutor in
    Ranchi</a> and <a href="{{ url('/icse-home-tutor-ranchi') }}">ICSE and ISC home tutor in Ranchi</a> pages cover the
    rest of the timetable.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rac-jac">Commerce on the Jharkhand Academic Council</h2>
  <p>
    JAC is Jharkhand's state board and conducts the Class 10 and Class 12 examinations for its affiliated schools. Its
    intermediate commerce stream has its own syllabus, books and question pattern, which the council publishes; we do
    not restate them here, and families should take them only from its official site and notices.
  </p>
  <p>
    What we look for in a tutor for a JAC student is practical. They should work from the council's prescribed book and
    its past papers, know how its paper is set for the current year, and teach in the language your child writes
    answers in. Some students are most at ease in Hindi, others in English, and many move between the two; accountancy vocabulary has
    to come out right in whichever language the answer sheet uses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rac-log">Why a mistake log beats more practice questions</h2>
  <p>
    Accountancy errors repeat. A student who posts a returns entry to the wrong side in October usually does it again in
    December. A good tutor keeps a written log with the student, one line per error, and returns to it every week until
    each line stops recurring. A useful log has four columns:
  </p>
  <ul>
    <li><strong>The question:</strong> a reference to the exercise or test where the error appeared.</li>
    <li><strong>What went wrong:</strong> in the student's words, such as "treated drawings as an expense".</li>
    <li><strong>The rule behind it:</strong> traced back to the accounting equation or the relevant adjustment.</li>
    <li><strong>Retest date:</strong> when the tutor will set a fresh question on the same point.</li>
  </ul>
  <p>
    Parents can read the log in two minutes and see whether the same mistakes are disappearing. It also shows the tutor
    where the Class 11 foundations are weak, which matters because the Class 12 chapters assume them. A student who
    never settled final accounts with adjustments finds the partnership chapters much harder than they need to be.
  </p>
  <p>
    A typical log entry, worked through: the owner takes goods costing ₹2,000 from the business for personal use. The
    student credits Sales. The tutor asks what actually happened: no customer paid anything, so nothing was sold. The
    goods left the business at cost and the owner's claim on it fell, so the entry debits Drawings and credits
    Purchases with ₹2,000. Written into the log with the reason beside it, that error rarely comes back; corrected in red
    and forgotten, it reappears in the next test.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rac-plan">A Class 12 plan, term by term</h2>
  <p>
    Partnership carries 36 of the 80 CBSE theory marks; in ISC, partnership and company accounts make up the
    compulsory 60-mark Section A. A plan built on that weighting:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Pacing Class 12 accountancy with a tutor (CBSE and ISC)</caption>
    <thead>
      <tr><th scope="col">Stretch of the year</th><th scope="col">CBSE focus</th><th scope="col">ISC focus</th></tr>
    </thead>
    <tbody>
      <tr><td>Start of session to mid-year</td><td>Partnership fundamentals, goodwill, change in profit-sharing ratio, admission</td><td>Partnership in the same order, with one full 12-mark question each fortnight</td></tr>
      <tr><td>Mid-year to the half-yearly</td><td>Retirement and death of a partner; issue of shares</td><td>Joint stock company accounts; the first Section B or C topic</td></tr>
      <tr><td>After the half-yearly</td><td>Debentures; analysis and cash flow, or Computerised Accounting practicals</td><td>The rest of the chosen section; Part I short answers across the syllabus</td></tr>
      <tr><td>Pre-board weeks</td><td>Full papers; project file and viva practice</td><td>Full papers; the two projects and their viva</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The project and viva on both boards must be the student's own work; a tutor can check understanding and rehearse
    questions, nothing more. A JAC student should build the same kind of plan around the council's own syllabus, with
    the council's past papers taking the place of the CBSE or ISC full papers in the final weeks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rac-where">How does a tutor reach six Ranchi localities?</h2>
  <p>
    There is no metro, so almost every tutor in the city travels by road, and the slow points are a few junctions and
    market stretches at office hours rather than distance. A tutor who lives in your own zone usually keeps a weekly slot
    more reliably than one crossing the centre. These six localities span all four zones; the
    <a href="{{ url('/city/ranchi') }}">Ranchi home tuition page</a> lists the rest.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Getting an accountancy tutor to six Ranchi localities</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Way in</th><th scope="col">Good to arrange</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $racA('morabadi', 'Morabadi') !!}</td><td>Morabadi Road or Karamtoli Road</td><td>A morning slot or online on days the maidan hosts a large event</td></tr>
      <tr><td>{!! $racA('kadru', 'Kadru') !!}</td><td>Kadru–Kumhartoli Road off Bypass Road</td><td>A tutor on a two-wheeler, since the lanes are narrow</td></tr>
      <tr><td>{!! $racA('pundag', 'Pundag') !!}</td><td>Pundag Road from the Bypass Road side</td><td>The tutor's name at the enclave gate before the demo</td></tr>
      <tr><td>{!! $racA('namkum', 'Namkum') !!}</td><td>By road, or Namkon station on the Gomoh–Hatia line</td><td>A map pin with the enclave gate; homes are spread out</td></tr>
      <tr><td>{!! $racA('doranda', 'Doranda') !!}</td><td>Near Argora and Ranchi Junction</td><td>A time away from the busy market roads</td></tr>
      <tr><td>{!! $racA('tupudana', 'Tupudana') !!}</td><td>The Ranchi–Khunti road, close to the Ring Road</td><td>A tutor from Hatia or Dhurwa with their own two-wheeler</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The <a href="{{ url('/city/ranchi/zone/harmu-argora-ratu-road') }}">Harmu, Argora and Ratu Road</a> and
    <a href="{{ url('/city/ranchi/zone/doranda-hinoo-hatia') }}">Doranda, Hinoo and Hatia</a> zone guides list routes
    and quiet hours, and our <a href="{{ url('/blog/ranchi-tuition-guide') }}">Ranchi tuition guide</a> covers the city
    as a whole.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rac-mode">Should accountancy lessons be at home or online?</h2>
  <p>
    Home lessons have a clear advantage in Class 11: the tutor sits beside the ledger and catches the wrong side or the
    missed posting as it happens. Online lessons work once habits are settled, as long as homework photos arrive before
    the session and the notebook stays in the camera's view. For the Computerised Accounting option or ISC Section C,
    online can be the better format, with tutor and student sharing one spreadsheet.
  </p>
  <p>
    We do not claim a commerce tutor lives near every Ranchi home. You can request home tuition anywhere in the city; if
    no suitable tutor can reach you at your hour, online lessons widen the choice across Ranchi and beyond. A blend,
    home sessions for long partnership questions and online sessions for theory, suits many timetables. Our article on
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutoring</a> sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rac-next">CUET, and the choice of stream</h2>
  <p>
    Under the NTA's CUET (UG) 2026 bulletin, Accountancy / Book Keeping (code 301) is a domain subject with 50
    compulsory questions in 60 minutes, based on NCERT's Class 12 syllabus. Check the bulletin for your own year. A JAC
    student aiming at CUET should ask the tutor to compare the council's book with the NCERT chapters. If commerce
    itself is still undecided, our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream
    guide</a> and <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 tutoring page</a> were written for
    Gurugram families, but the advice on choosing a stream is general.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rac-demo">What to look for in the free demo</h2>
  <ol>
    <li>The tutor asks for the board, class and any Class 12 option before starting.</li>
    <li>Your child writes most of the hour, with working notes and proper formats.</li>
    <li>The tutor finds the cause of an error and adds it to a log, rather than just correcting it.</li>
    <li>An explanation in Hindi is available if your child needs it.</li>
    <li>For JAC students, the tutor brings the council's book and past papers.</li>
    <li>You get a short plan for the next two weeks.</li>
  </ol>
  <p>Not the right fit? We arrange a demo with the next tutor on your shortlist, and switching later is free.</p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rac-fees">Fees, and how to ask for a tutor</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own fees,
    and each one is shown before the demo. The <a href="{{ url('/blog/home-tuition-fees-ranchi') }}">Ranchi home
    tuition fees</a> article explains how rates vary.
  </p>
  <p>
    Send the class, board, the chapters that hurt, the medium of answers, your locality and a landmark, times and a
    budget. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. For the other
    half of most commerce timetables, see our <a href="{{ url('/economics-home-tutor-ranchi') }}">economics tutor in
    Ranchi</a> page. The national <a href="{{ url('/accountancy-home-tutor') }}">accountancy home tutor</a> guide has a
    chapter-by-chapter table of trouble spots, and our <a href="{{ url('/english-home-tutor-ranchi') }}">English</a>
    and <a href="{{ url('/maths-home-tutor-ranchi') }}">maths</a> pages for Ranchi cover other subjects. Teachers can
    see open requests on <a href="{{ url('/tuition-jobs/ranchi') }}">Ranchi tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
