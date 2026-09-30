{{--
  Long-form guide for the "maths home tutor Mumbai" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/mumbai-research.json (zone_facts and the "about"
  texts for colaba, bandra-west, andheri-west, powai, naupada and vashi).
  Exam facts reuse the checked statements in database/seo-content/blog:
  cbse-class-10-maths-preparation (unit marks, section layout, Standard/Basic
  skill split, no calculators, pi = 22/7), cbse-class-10-board-year-plan-gurgaon
  (80 + 20, two Class 10 exams), cbse-class-12-maths-calculusalgebra (38
  questions, calculus 35), icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC
  single 2027/2028 paper, seven units, project marking), -ib-math-aaai-slhl
  (AA/AI, teaching hours, paper weights, exploration) and
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern).
  The Maharashtra State Board is described in general terms only (no exam
  pattern). No school, society, mall or people's names, no roads named after
  people, no distances or travel times, only the allowed fee sentence.

  Area links render only when that Mumbai area page exists and is active.
--}}
@php
  $mummAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $mummA = function (string $slug, string $label) use ($mummAreaSlugs) {
      return in_array($slug, $mummAreaSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide mumm-guide" aria-labelledby="mummGuideTitle">
  <h2 id="mummGuideTitle">Maths home tutor in Mumbai: settle the syllabus, then the railway line</h2>

  <p class="nx-guide__lede">
    Mumbai runs north to south along its railway lines, and a maths tutor's week is shaped by them. A teacher who
    lives beside a Central line station can reach Mulund or Thane with ease but may never make a Bandra evening on
    time, while an IB specialist in the island city may be a long way from Kharghar. The syllabus matters just as
    much: CBSE, ICSE, ISC, IB, IGCSE and the Maharashtra State Board all ask for different practice. Send NXTutors the
    course and your neighbourhood, and you receive two or three maths tutors who fit both, every fee visible before
    you meet anyone. The opening class with the tutor you choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#mumm-boards">Six syllabuses</a> ·
    <a href="#mumm-cbse10">CBSE Class 10</a> ·
    <a href="#mumm-icse">ICSE and the State Board</a> ·
    <a href="#mumm-senior">Classes 11 and 12</a> ·
    <a href="#mumm-lines">Rail and metro</a> ·
    <a href="#mumm-places">Six neighbourhoods</a> ·
    <a href="#mumm-month">The first month</a> ·
    <a href="#mumm-fees">Fees</a> ·
    <a href="#mumm-request">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="mumm-boards">Which syllabus is your child on, and what should the tutor already know?</h2>
  <p>
    Ajay Vatsyayan writes the IB, IGCSE and ISC maths sections here; Abhinandan Tiwary writes the Class 10 CBSE and
    ICSE sections. In a single Mumbai building you can find one child preparing for the State Board SSC, a
    neighbour on ICSE and a cousin on the IB Diploma, so name the exact course first: a tutor strong in one can be a
    stranger to another.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses taught across Mumbai, the body that sets each one, and what a tutor must bring to it</caption>
    <thead>
      <tr><th scope="col">Syllabus</th><th scope="col">Set by</th><th scope="col">A tutor should already be able to</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Classes 9–12</td><td>CBSE, NCERT books</td><td>Mark a sample-paper section against the official scheme</td></tr>
      <tr><td>ICSE Class 10</td><td>CISCE</td><td>Show how working and presentation earn marks on a CISCE paper</td></tr>
      <tr><td>Maharashtra SSC and HSC</td><td>Maharashtra State Board of Secondary and Higher Secondary Education</td><td>Teach from the state-prescribed textbooks and the board's own question papers</td></tr>
      <tr><td>ISC Class 12</td><td>CISCE</td><td>Plan from the current single-paper syllabus and guide the two projects</td></tr>
      <tr><td>IB Diploma AA or AI, SL or HL</td><td>International Baccalaureate</td><td>Explain the exploration criteria without drafting any of it</td></tr>
      <tr><td>Cambridge IGCSE</td><td>Cambridge</td><td>Advise on Core against Extended with a reason</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Families thinking about changing boards after Class 10 can read our <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to moving from CBSE to IB or
    IGCSE</a>, which sets out what shifts in maths.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mumm-cbse10">How is the CBSE Class 10 maths paper built for 2026-27?</h2>
  <p>
    Abhinandan's summary for CBSE families: the board paper is worth 80 and the school adds 20, and the 80 are shared
    by 14 NCERT chapters grouped into seven units. Ranked by weight, the units stand like this:
  </p>
  <ol>
    <li><strong>Algebra, 20 marks.</strong> Polynomials, pairs of linear equations, quadratics and arithmetic progressions; the unit where word problems are most common.</li>
    <li><strong>Geometry, 15.</strong> Triangles and circles, where each step of a proof needs its reason.</li>
    <li><strong>Trigonometry, 12.</strong> Including heights and distances, where a neat figure comes first.</li>
    <li><strong>Statistics and probability, 11.</strong> Grouped data tables reward care more than speed.</li>
    <li><strong>Mensuration, 10.</strong> Surface areas and volumes of combined solids.</li>
    <li><strong>Real numbers and coordinate geometry, 6 each.</strong> Short questions that suit a quick warm-up.</li>
  </ol>
  <p>
    The layout has five sections. Section A holds twenty one-mark items, of which eighteen are multiple-choice and
    two are assertion–reason. Section B has five questions of two marks, C has six of three, D has four of five,
    and E closes with three case-study questions of four marks. No calculator is permitted, and π is 22/7 unless the
    question gives another value. Standard (041) and Basic (241) cover the same chapters, but they differ in demand:
    roughly 54% of Standard tests remembering and understanding, against about 75% of Basic. A student who might
    choose maths after Class 10 is normally better off on Standard; check the choice with the school before it is
    registered.
  </p>
  <p>
    Since 2026, every Class 10 student sits a compulsory main exam, and a second, optional sitting allows
    improvement in up to three subjects, maths among them. Dates for 2027 are not yet out, so keep an eye on
    cbse.gov.in. For chapter-by-chapter help, see our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> and the
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">month-by-month board-year plan</a>; the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page explains how we match for that
    year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mumm-icse">What about ICSE and the Maharashtra State Board in Class 10?</h2>
  <h3>ICSE</h3>
  <p>
    ICSE maths is a single three-hour paper out of 80, with 20 more from internal assessment. Because CISCE lets
    schools choose their textbooks, the tutor should work from your child's own book and CISCE specimen papers,
    and insist on every line of working. Our
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> goes deeper.
  </p>
  <h3>Maharashtra State Board (SSC)</h3>
  <p>
    The State Board sets the SSC examination at the end of Class 10 and the HSC at the end of Class 12, and teaches
    from its own prescribed textbooks. We do not describe its paper pattern here; the board publishes it, and your
    child's school will have the current version. What matters for matching is that the tutor teaches from those
    state textbooks rather than from NCERT, and practises with the board's own papers. State Board maths tutors are
    often available close to home.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mumm-senior">What changes in Classes 11 and 12, from ISC to JEE?</h2>
  <p>
    Senior maths splits even further by course. Ajay's notes on the international and ISC courses sit alongside
    the CBSE and entrance numbers in this table.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Senior maths in Mumbai: the numbers that shape a tutor's plan for each course</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Numbers that matter</th><th scope="col">What it means for weekly tuition</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Class 12</td><td>38 compulsory questions for 80 marks; calculus alone is worth 35</td><td>Calculus takes the biggest slice of the week from the start of the session</td></tr>
      <tr><td>ISC Class 12 (2027 and 2028)</td><td>Seven units in one 80-mark paper, no choice between Sections B and C; calculus 35; two projects worth 10 each</td><td>Vectors, 3D geometry, linear programming and probability are now for everyone</td></tr>
      <tr><td>IB Diploma</td><td>150 teaching hours at SL, 240 at HL; exploration 20% at both levels</td><td>SL papers weigh 40% each; HL splits 30, 30 and 20</td></tr>
      <tr><td>Cambridge IGCSE</td><td>Core tops out at grade C; Extended spans A* to G</td><td>Settle the tier with the school early in the course</td></tr>
      <tr><td>JEE Main (2026 pattern)</td><td>Paper 1 had 75 questions for 300 marks; 25 were maths, 20 multiple-choice and 5 numerical</td><td>Timed sets with +4 and −1 scoring, reviewed question by question</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Each ISC project is marked out of 10: format 1, content 4, findings 2 and viva 3. Older ISC revision books follow
    the earlier layout with optional sections, so check the exam year printed on any book. In the IB, Analysis and
    Approaches is the more algebraic course, with one paper taken without a calculator; Applications and
    Interpretation leans on modelling and statistics and uses a graphic display calculator in every paper. The
    exploration is the student's own work: a tutor may explain the criteria and ask hard questions about a draft,
    never write it. Read the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a> and the
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> for more.
  </p>
  <p>
    For a student juggling CBSE Class 12 and JEE Main, one tutor can usually carry both if each session ends with a
    board-style long answer after the entrance problems. NTA publishes each year's pattern at jeemain.nta.nic.in, so
    check it before fixing a plan. The <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12
    calculus and algebra guide</a>, the <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise
    guide</a> and the <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mumm-lines">Why do the railway and metro lines decide so much in Mumbai?</h2>
  <p>
    Most Mumbai tutors travel by local train or metro, so we look at the line as well as the neighbourhood:
  </p>
  <ul>
    <li><strong>Western line</strong> from Churchgate through Bandra, Andheri and Borivali, with the Harbour line's western branch as far as Goregaon.</li>
    <li><strong>Central line</strong> from the island city through Dadar, Ghatkopar, Bhandup and Mulund to Thane. Dadar is the one station both the Central and Western lines share.</li>
    <li><strong>Harbour and Trans-Harbour lines</strong> across the creek to Vashi, Nerul and Panvel, and from Thane through Airoli and Kopar Khairane.</li>
    <li><strong>Metro:</strong> Line 1 links Versova, Andheri and Ghatkopar; Lines 2A and 7 run up the western suburbs to Dahisar; Line 3, underground, has run from Aarey to Cuffe Parade since October 2025; Navi Mumbai's Line 1 serves Belapur and Kharghar.</li>
  </ul>
  <p>
    Evenings near the big stations are crowded at office closing time, so a slot that starts a little before or
    after the rush holds up better week after week. Browse tutors by neighbourhood on our
    <a href="{{ url('/city/mumbai') }}">Mumbai page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mumm-places">What does a maths slot look like in six Mumbai neighbourhoods?</h2>
  <p>
    These six neighbourhoods run from the island city through the western and central suburbs to Thane and Navi
    Mumbai, and each one sets up a regular class a little differently.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Mumbai neighbourhoods: the homes, the way in for a tutor and one timing tip for each</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">Homes</th><th scope="col">How a tutor gets there</th><th scope="col">Timing tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $mummA('colaba', 'Colaba') !!} (island city)</td><td>Colonial-era buildings beside later apartment blocks; a defence area at the southern end</td><td>Churchgate on the Western line, or Metro Line 3 to neighbouring Cuffe Parade, then a short taxi or bus</td><td>The Causeway is busy in the evening; inside the defence area, check the visitor process before the first class</td></tr>
      <tr><td>{!! $mummA('bandra-west', 'Bandra West') !!} (western suburbs)</td><td>Village cottages, low-rise cooperative buildings and newer towers</td><td>Bandra's west exit on the Western and Harbour lines, or Khar Road for the northern end, then an auto</td><td>Hill Road and Linking Road fill with shoppers after dark, so start a little earlier</td></tr>
      <tr><td>{!! $mummA('andheri-west', 'Andheri West') !!} (western suburbs)</td><td>Residential towers, cooperative societies and older low-rise blocks</td><td>Andheri station, or Line 1 stops at Azad Nagar and Versova; Line 2A connects further north</td><td>Most societies log visitors and parking is tight, so tutors usually come by metro</td></tr>
      <tr><td>{!! $mummA('powai', 'Powai') !!} (central suburbs)</td><td>High-rise gated complexes around the lake, plus government colonies</td><td>No station of its own; Kanjurmarg on the Central line, then an auto</td><td>Avoid office start and finish times on the link road; register the tutor at the gate</td></tr>
      <tr><td>{!! $mummA('naupada', 'Naupada') !!} (Thane)</td><td>Older mid-rise blocks with shops at street level</td><td>A walk from Thane station on the Central and Trans-Harbour lines</td><td>Late afternoon or weekends work better than the office rush around the station</td></tr>
      <tr><td>{!! $mummA('vashi', 'Vashi') !!} (Navi Mumbai)</td><td>CIDCO buildings, cooperative societies and some gated towers in numbered sectors</td><td>Vashi station on the Harbour and Trans-Harbour lines, then an auto into the sector</td><td>Roads near the station and highway peak in office hours</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mumm-month">After the first month, what should a parent be able to see?</h2>
  <p>
    Four weeks is too soon for a jump in marks, but long enough to see a method:
  </p>
  <ol>
    <li><strong>A written plan.</strong> The tutor can tell you which chapters come next and when the first timed section will be set.</li>
    <li><strong>Full working on paper.</strong> Steps your child used to skip now appear in the notebook, where examiners award method marks.</li>
    <li><strong>An error log.</strong> Each wrong answer is recorded with its cause, whether a sign slip, a misread question or a missing idea, and tried again a week later.</li>
    <li><strong>One marked timed section.</strong> Scored the way the board scores it, with the lost marks explained to your child.</li>
  </ol>
  <p>
    If most of these are missing, tell us. Switching to another tutor from your shortlist costs nothing, and the
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article helps if a mixed
    week would suit better.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mumm-fees">How much does a maths home tutor in Mumbai charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their
    own fee. What moves it is the course and class, the tutor's experience with that syllabus, the journey across the
    city at your chosen hour and the number of sessions a week. You see every shortlisted fee before the demo. See our
    <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">guide to home tuition fees in Mumbai</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mumm-request">What should your request include?</h2>
  <p>
    Five details get a good match: the class, the syllabus by its exact name, your neighbourhood and nearest station,
    the days and times that suit, and a budget. We reply with two or three maths tutors who fit, each with a fee,
    and the first class with the one you choose is a free demo. When nobody suitable can reach your part of Mumbai
    at that hour, we suggest online classes or a week split between home and online. NXTutors is based in Sector 66,
    Gurugram, and teaches online across India; the national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page shows how matching works elsewhere.
  </p>
  <p>
    Maths teachers living in Mumbai, Thane or Navi Mumbai who want students near home can see open requests on the
    <a href="{{ url('/tuition-jobs/mumbai') }}">Mumbai tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
