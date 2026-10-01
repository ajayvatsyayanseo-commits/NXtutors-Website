{{--
  "Economics tutor Patna" subject page. Byline: NXTutors Academic Team.
  No school, society, person, institute or company is named.

  Board facts reuse the checked statements on the national economics-home-tutor
  page, which cites (read 1 Oct 2026):
  - CBSE Economics (030) XI-XII 2026-27,
    cbseacademic.nic.in/web_material/CurriculumMain27/SecPart2/Economics_SecP2_2026-27.pdf
    (XI: statistics 40, micro 40 = 4+14+14+8; XII: macro 40, IED 40 = 12+20+8;
    project 20; question design 40/30/30).
  - CISCE ISC Economics (856), cisce.org/wp-content/uploads/2025/04/13.-ISC-Economics.pdf.
  - Cambridge IGCSE Economics 0455 and AS & A Level 9708, cambridgeinternational.org.
  - IBO DP Economics page and subject briefs, ibo.org (150 h SL, 240 h HL).
  - NTA CUET (UG) 2026 Information Bulletin, cuet.nta.nic.in (309 Economics /
    Business Economics; 50 compulsory questions, 60 minutes; NCERT Class XII).
  BSEB intermediate is described generally only, as on the Patna hub.
  Local facts only from database/seo-content/areas/patna-research.json and
  patna-zone-guides.json. No claim of local commerce-tutor supply or demand.
--}}
@php
  $pecSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pecA = function (string $slug, string $label) use ($pecSlugs) {
      return in_array($slug, $pecSlugs, true)
          ? '<a href="' . e(url('/city/patna/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pec-guide" aria-labelledby="pecGuideTitle">
  <h2 id="pecGuideTitle">Economics tutor in Patna: find the weak skill first, then the right teacher</h2>

  <p class="nx-guide__lede">
    "My child does not understand economics" usually means something narrower. One student loses marks on diagrams,
    another on statistics, a third writes long answers that never reach a conclusion. In Patna the board adds another
    layer: the Bihar board's intermediate course, CBSE, ISC or an international syllabus each ask for different
    preparation, in Hindi, English or both. NXTutors matches on all of it and sends two or three tutors who can visit
    or teach online, with fees shown and a free first class.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pec-skill">Which skill is weak</a> ·
    <a href="#pec-boards">The boards</a> ·
    <a href="#pec-bseb">Bihar board</a> ·
    <a href="#pec-maths">Without maths</a> ·
    <a href="#pec-cuet">CUET</a> ·
    <a href="#pec-where">Six localities</a> ·
    <a href="#pec-mode">Home or online</a> ·
    <a href="#pec-demo">The demo</a> ·
    <a href="#pec-fees">Fees and request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pec-skill">Which economics skill is actually losing marks?</h2>
  <p>
    Look at the last marked test with your child before you ask for a tutor. The pattern of lost marks tells you what
    kind of help to request.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Reading a marked economics test: symptom, likely cause, what a tutor does</caption>
    <thead>
      <tr><th scope="col">What you see on the script</th><th scope="col">Likely cause</th><th scope="col">What tutoring targets</th></tr>
    </thead>
    <tbody>
      <tr><td>Short answers marked down despite "correct" ideas</td><td>Definitions in everyday words, not the textbook's precise terms</td><td>A personal glossary, tested aloud each session</td></tr>
      <tr><td>Diagrams with few or no marks</td><td>Unlabelled axes, missing equilibrium points, shifts not explained in the text</td><td>Drawing every diagram from memory and referring to it in the answer</td></tr>
      <tr><td>Statistics or national income questions half done</td><td>Working skipped, so one slip loses everything</td><td>Tabulated, step-by-step working the student can check alone</td></tr>
      <tr><td>Long answers scoring in the middle</td><td>Points listed, no weighing of effects or final judgement</td><td>Planning an answer around a clear conclusion</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pec-boards">What each board teaches in Classes 11 and 12</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Economics by board for Patna students (from the boards' syllabus documents)</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Class 11</th><th scope="col">Class 12</th><th scope="col">Coursework</th></tr>
    </thead>
    <tbody>
      <tr><td>BSEB (intermediate)</td><td colspan="2">Syllabus, books and paper set by the Bihar board; follow its notices</td><td>As the board specifies</td></tr>
      <tr><td>CBSE (030)</td><td>Statistics for Economics 40; Introductory Microeconomics 40</td><td>Introductory Macroeconomics 40; Indian Economic Development 40</td><td>A 20-mark project with a viva, each year</td></tr>
      <tr><td>ISC (856)</td><td>Basic concepts, Indian economic development, statistics</td><td>Micro theory, income and employment, money and banking, balance of payments, public finance, national income</td><td>Two projects of 10 marks</td></tr>
      <tr><td>Cambridge (0455; 9708)</td><td colspan="2">IGCSE in Grades 9–10; AS and A Level with data response and essays in the senior years</td><td>None; written papers only</td></tr>
      <tr><td>IB Economics</td><td colspan="2">Two-year course, SL or HL; HL adds a policy paper (Paper 3)</td><td>Internal assessment: three commentaries on news extracts</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In CBSE Class 12, the "current challenges facing the Indian economy" unit carries 20 marks on its own, and those
    answers are long and descriptive. A tutor who reads the news with the student and connects it to the chapter makes
    these answers more specific. IB recommends 150 teaching hours at SL and 240 at HL. With that much ground, a steady weekly session across both
    years usually serves an IB student better than a burst of lessons just before the exams, and it leaves room to
    practise the internal assessment skill on articles that are not part of the portfolio.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pec-bseb">Bihar board economics: what to ask of a tutor</h2>
  <p>
    The Bihar School Examination Board sets the intermediate examination for its schools, including economics, from its
    own syllabus and books. We describe it only in general terms; families should
    take the syllabus and paper pattern from the board's official site and notices. A good tutor for a BSEB student
    works from the prescribed book, practises with the board's model and past papers, and teaches in the medium your
    child writes in. Economic terms learnt only in English can feel foreign in a Hindi answer, and the reverse; ask for
    a tutor comfortable in both.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pec-maths">Studying economics without maths after Class 10</h2>
  <p>
    A student who drops mathematics after matric or Class 10 can still do well in economics, but Class 11 statistics catches them off guard: averages, dispersion, correlation and index numbers.
    The CBSE document asks students to interpret results as well as compute them. Statistics is arithmetic, not
    advanced mathematics, so the fix is method, not talent.
  </p>
  <p>
    A small worked example a tutor might use: a family's spending on food rises from ₹4,000 to ₹5,000 a month. The
    change is ₹1,000, which is 25% of the starting figure. If prices of food rose 25% over the same period, the family
    is buying roughly the same quantity as before, not more. The arithmetic is one line; the interpretation is where
    the marks are. Practised weekly, that habit carries into national income and the multiplier in Class 12.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pec-hour">What one hour with an economics tutor should contain</h2>
  <p>
    Whatever the board, an hour that moves a student forward has a recognisable shape. The proportions change with the
    class, but every part should be there most weeks:
  </p>
  <ul>
    <li><strong>A quick oral check</strong> of five definitions from earlier chapters, in the medium the paper uses.</li>
    <li><strong>One concept taught or repaired,</strong> with the student drawing the diagram while explaining it.</li>
    <li><strong>One numerical,</strong> set out in full and followed by a sentence on what the answer means.</li>
    <li><strong>One long answer</strong> written to time and marked against the board's pattern before the student leaves.</li>
    <li><strong>A short task</strong> for the days in between, small enough to finish around school and coaching.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pec-cuet">CUET (UG) economics, kept in proportion</h2>
  <p>
    Patna students who apply to central universities may also sit CUET (UG). The NTA's 2026 information bulletin lists
    Economics / Business Economics (code 309) among the domain subjects: 50 questions, all compulsory, in 60 minutes,
    with the syllabus following NCERT's Class 12 books. For a CBSE student that means board preparation already covers
    the content; the extra work is speed and accuracy on objective questions. For a BSEB student, a tutor should check
    the NCERT Class 12 chapters against the board's book and fill any gaps. Always read the bulletin for the year your
    child applies.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pec-where">How does a tutor reach six Patna localities?</h2>
  <p>
    Traffic at a handful of crossings and coaching changeover times decide most journeys. One or two localities from each
    zone below; the <a href="{{ url('/city/patna') }}">Patna home tuition page</a> covers the whole city.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How a visiting economics tutor reaches six Patna localities</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Way in</th><th scope="col">Plan for</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $pecA('kidwaipuri', 'Kidwaipuri') !!}</td><td>Two-wheeler or auto through the colonies off Boring Road</td><td>The colony name and lane, not just "Boring Road"</td></tr>
      <tr><td>{!! $pecA('boring-canal-road', 'Boring Canal Road') !!}</td><td>By road; a tutor from Buddha Colony or Anandpuri can ride over</td><td>A slot that avoids the evening rush at the Boring Road crossing</td></tr>
      <tr><td>{!! $pecA('saguna-more', 'Saguna More') !!}</td><td>Bailey Road from the Danapur end</td><td>A standing visitor pass at a township gate for a weekly tutor</td></tr>
      <tr><td>{!! $pecA('bhootnath-road', 'Bhootnath Road') !!}</td><td>Blue Line to Bhootnath, then a short auto ride</td><td>Avoiding the hour when coaching batches change over</td></tr>
      <tr><td>{!! $pecA('patna-city', 'Patna City') !!}</td><td>Patna Sahib station, or a two-wheeler or e-rickshaw through the lanes</td><td>A shop or gali landmark and a phone number</td></tr>
      <tr><td>{!! $pecA('phulwari-sharif', 'Phulwari Sharif') !!}</td><td>Phulwari Sharif station on the main line, or NH 139</td><td>Registering the tutor once with the guard of a newer building</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    More detail is in the zone guides for <a href="{{ url('/city/patna/zone/boring-road-patliputra') }}">Boring Road
    and Patliputra</a> and <a href="{{ url('/city/patna/zone/kankarbagh-rajendra-nagar') }}">Kankarbagh and Rajendra
    Nagar</a>, and in our <a href="{{ url('/blog/north-and-west-patna-tuition-guide') }}">North and West Patna tuition
    guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pec-mode">Home or online economics lessons in Patna?</h2>
  <p>
    Economics adapts well to online teaching: diagrams on a shared board, an article read together, an answer marked on
    screen. For IB, A Level or ISC students it often makes the difference, because tutors who know those courses are
    fewer. Home lessons still suit a Class 11 student who needs someone beside the notebook during statistics, and a
    student who loses focus on a screen after school and coaching. A mix is worth considering: a home session at the
    weekend for new chapters, and a shorter online session midweek to mark one written answer.
  </p>
  <p>
    We make no claim about how many economics tutors live in any locality. You can ask for a home tutor wherever you are
    in Patna; if nobody suitable can reach you at the time you need, online lessons open up tutors from across the city
    and other cities. Read more in <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online
    tutoring</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pec-demo">How to judge the free demo</h2>
  <ol>
    <li>The tutor asks for the board, class and medium of answers before teaching anything.</li>
    <li>Your child draws and labels the diagrams; the tutor does not draw them for the student.</li>
    <li>A numerical is set out step by step, then interpreted in a sentence.</li>
    <li>The tutor asks "so what?" after a point, pushing towards a judgement.</li>
    <li>Examples come from recent Indian news where the chapter calls for them.</li>
    <li>You leave with one task to complete and a plan for the next fortnight.</li>
  </ol>
  <p>If it is not a fit, we line up a demo with the next tutor on your shortlist. Changing tutor later is free.</p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pec-fees">Fees and what to send us</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    rates, shown to you before the demo; the <a href="{{ url('/blog/home-tuition-fees-patna') }}">Patna fees
    article</a> explains what moves them.
  </p>
  <p>
    Send the class, board, medium, weakest skill from the table above, your locality with a landmark, times and a
    budget. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. Commerce students
    can also see our <a href="{{ url('/accountancy-home-tutor-patna') }}">accountancy tutor in Patna</a> page; the
    national <a href="{{ url('/economics-home-tutor') }}">economics home tutor</a> guide covers each board in depth, and
    the <a href="{{ url('/cbse-home-tutor-patna') }}">CBSE</a>, <a href="{{ url('/icse-home-tutor-patna') }}">ICSE and
    ISC</a> and <a href="{{ url('/english-home-tutor-patna') }}">English</a> pages for Patna cover the rest of the
    timetable. Still choosing a stream? Our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">stream choice
    guide</a> and <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 page</a> are written for Gurugram but
    apply generally. Teachers can find requests on <a href="{{ url('/tuition-jobs/patna') }}">Patna tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
