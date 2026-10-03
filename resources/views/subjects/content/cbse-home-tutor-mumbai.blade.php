{{--
  Board page for "CBSE home tutor Mumbai" (Mumbai, Thane and Navi Mumbai).
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths) and Aaditya
  Kashyap (role: CBSE and ICSE science). No anecdotes, years or results are
  claimed for either. No schools, colleges or societies are named.

  Board facts are reworded from the Gurgaon board hub (cbse-home-tutor-gurgaon),
  which cites cbseacademic.nic.in and cbse.gov.in (read 1 Oct 2026):
  Curriculum 2026-27 Secondary (80 + 20 in major subjects, 33% pass, about half
  the questions competency-focused, Class IX common 80-mark maths and science
  with optional 25-mark one-hour Advanced papers not added to the aggregate,
  R3 assessed internally), the 14.02.2026 notification on two Class X board
  exams (improvement in up to three subjects), and Curriculum 2026-27 Senior
  Secondary (Physics 042, Chemistry 043, Biology 044 70 + 30; Mathematics 041
  or Applied Mathematics 241 80 + 20; Accountancy 055, Economics 030 80 + 20).
  No exam dates.
  Local detail only from the Mumbai city hub view (CBSE schools spread through
  the suburbs, Thane and Navi Mumbai; SSC/HSC from state textbooks; junior
  college after Class 10; monsoon online fallback; CBSE session from April,
  many State Board schools from June), database/seo-content/areas/
  mumbai-research.json, mumbai-zone-guides.json and zones/mumbai.json.
  Bhandup & Mulund has no zone page, so it is plain text. Area links render
  only for active Mumbai areas. Fee wording is the approved sentence.
  FAQs render from faqs/cbse-home-tutor-mumbai.php.
--}}
@php
  $cbmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cbmA = function (string $slug, string $label) use ($cbmSlugs) {
      return in_array($slug, $cbmSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="cbmGuideTitle">
  <h2 id="cbmGuideTitle">CBSE home tutors in Mumbai, Thane and Navi Mumbai: what the board asks, and who can reach you</h2>

  <p class="nx-guide__lede">
    In a Mumbai housing society it is common for the child on the third floor to be in an SSC school while the child
    upstairs sits CBSE papers, and the two need quite different help. CBSE schools are spread across the suburbs,
    Thane and Navi Mumbai, so the hard part is rarely finding the board; it is finding a tutor who knows its current
    papers and can reach your station week after week, monsoon included. This page covers how CBSE differs from the
    Maharashtra State Board, what each stage from Class 6 to Class 12 demands, which subjects families ask about most,
    and how tutors travel to each part of the region. Abhinandan Tiwary writes on Class 10 CBSE and ICSE maths and
    Aaditya Kashyap on CBSE and ICSE science.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cbm-vs">CBSE or State Board</a> ·
    <a href="#cbm-stages">Class 6 to 12</a> ·
    <a href="#cbm-changes">Class 9 and 10 now</a> ·
    <a href="#cbm-senior">Classes 11 and 12</a> ·
    <a href="#cbm-subjects">Subjects</a> ·
    <a href="#cbm-zones">Zones and travel</a> ·
    <a href="#cbm-mode">Home or online</a> ·
    <a href="#cbm-demo">The demo</a> ·
    <a href="#cbm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cbm-vs">How a CBSE year differs from an SSC or HSC year</h2>
  <p>
    Families moving between boards in Mumbai, or comparing a CBSE school with a State Board one, usually notice the
    difference in the textbooks first and in the papers second. The comparison below is general; for any State Board
    detail, the board's own website is the place to check.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE and the Maharashtra State Board, in broad terms</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">CBSE</th><th scope="col">Maharashtra State Board</th></tr>
    </thead>
    <tbody>
      <tr><td>Public exams</td><td>Class 10 and Class 12 board papers set nationally</td><td>SSC after Class 10, HSC after Class 12</td></tr>
      <tr><td>Books</td><td>NCERT textbooks, with exemplar problems</td><td>The state's own prescribed textbooks</td></tr>
      <tr><td>Classes 11 and 12</td><td>Usually in the same school</td><td>Often in a junior college, with a new timetable</td></tr>
      <tr><td>Paper style</td><td>A large share of case-based and application questions</td><td>Built on the state textbooks and the board's past papers</td></tr>
      <tr><td>Session start</td><td>April</td><td>Many schools reopen in June</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The practical result: a tutor who has spent years preparing SSC students may know the maths perfectly well and
    still be unfamiliar with how CBSE marking schemes split marks between method and answer, or with the unseen
    case passages that now fill a big part of each paper. Ask, rather than assume.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbm-stages">From Class 6 to Class 12: where tuition earns its place</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE by stage, for a Mumbai family planning tuition</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Who examines</th><th scope="col">What usually needs a tutor</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 to 8</td><td>The school</td><td>Fractions, integers, early algebra; reading science explanations carefully</td><td>One or two</td></tr>
      <tr><td>Class 9</td><td>The school, on an 80-mark annual paper plus 20 internal</td><td>Maths and science foundations; deciding on the optional Advanced papers</td><td>Two</td></tr>
      <tr><td>Class 10</td><td>CBSE board paper (80) and school internal marks (20)</td><td>Maths, science, and a timetable that covers every subject</td><td>Two or three</td></tr>
      <tr><td>Classes 11 and 12</td><td>School in Class 11, CBSE in Class 12</td><td>Physics, chemistry, maths or biology; accountancy and economics for commerce</td><td>One per subject, often two</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Middle school is cheap to fix and expensive to ignore. A child who reaches Class 9 unsure of negative numbers or
    simple equations spends the secondary years patching, not learning. One relaxed weekly session in Classes 6 to 8
    is often enough.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbm-changes">Class 9 and Class 10 under the 2026-27 curriculum</h2>
  <p>
    <strong>Class 9.</strong> Maths and science now have one common syllabus and one common 80-mark paper for every
    student. On top of that, a student can opt for a Mathematics Advanced paper, a Science Advanced paper, both or
    neither. Each Advanced paper carries 25 marks, lasts an hour and is built entirely from higher-order questions.
    CBSE does not add these marks to the aggregate; a score of half or more earns a note on the marksheet. The older
    Basic and Standard maths split is being phased out, though the 2026-27 Class 10 batch finishes under it. A third
    language is compulsory for the transition batches and is assessed by the school, without a board paper.
  </p>
  <p>
    <strong>Class 10.</strong> In major subjects the result joins an 80-mark board paper to 20 marks of school
    internal assessment, with 33% needed to pass. There are now two board exams in the year. Everyone sits the first;
    a student who has passed may use the second to try to raise marks in up to three of science, maths, social science
    and the languages. Plan as if the first exam is the only one. Our <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10
    maths</a> and <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science</a> pages go into each paper.
  </p>
  <p>
    Across secondary papers, roughly half the questions are competency-focused: case-based, source-based, integrated,
    data-interpretation, situational and application items. Sample papers and marking schemes appear on
    cbseacademic.nic.in, and a tutor should be working from this year's set.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbm-senior">Classes 11 and 12: theory, practicals and entrance exams</h2>
  <p>
    In the sciences, physics, chemistry and biology each split 70 marks of theory and 30 of practical work. Maths is
    taken either as Mathematics or as Applied Mathematics, never both, with 80 marks of theory and 20 internal;
    accountancy and economics follow the same 80 and 20 pattern. The Class 12 board paper covers the full Class 12
    syllabus, and CBSE says its senior papers will carry more questions set in real situations.
  </p>
  <p>
    Plenty of Mumbai students in these years also attend coaching for JEE or NEET, or weigh the state's MHT CET. A CBSE
    board tutor's job is then narrower and sharper: full written answers, NCERT wording, practical files on time, and
    sample papers marked against the scheme. For the entrance side, see <a href="{{ url('/jee-home-tutor-mumbai') }}">JEE
    home tutors in Mumbai</a> and <a href="{{ url('/neet-home-tutor-mumbai') }}">NEET home tutors in Mumbai</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbm-subjects">Which CBSE subjects Mumbai parents usually ask about</h2>
  <ul>
    <li><strong>Maths, Class 6 onwards.</strong> The most common request at every stage: <a href="{{ url('/maths-home-tutor-mumbai') }}">maths home tutors in Mumbai</a>.</li>
    <li><strong>Science up to Class 10.</strong> One tutor across physics, chemistry and biology topics: <a href="{{ url('/science-home-tutor-mumbai') }}">science home tutors in Mumbai</a>.</li>
    <li><strong>Physics and chemistry in Classes 11 and 12.</strong> Usually separate specialists: <a href="{{ url('/physics-home-tutor-mumbai') }}">physics</a> and <a href="{{ url('/chemistry-home-tutor-mumbai') }}">chemistry</a> tutors.</li>
    <li><strong>Biology for Classes 11 and 12, with or without NEET.</strong> <a href="{{ url('/biology-home-tutor-mumbai') }}">Biology home tutors in Mumbai</a>.</li>
    <li><strong>English.</strong> Reading, grammar and longer written answers: <a href="{{ url('/english-home-tutor-mumbai') }}">English home tutors in Mumbai</a>.</li>
    <li><strong>Accountancy and economics.</strong> Matched on request; tell us the class and textbook.</li>
  </ul>
  <p>
    For reading between sessions, our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths
    preparation</a> guide, <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> and
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> follow the CBSE
    syllabus.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbm-zones">How CBSE tutors reach each part of the region</h2>
  <p>
    The rail line usually decides which tutor is realistic. These notes come from our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/mumbai/zone/south-mumbai') }}">South Mumbai</a>:</strong> tutors arrive from the north by the Western line or underground Line 3; most homes are towers with a lobby desk, so pass on the tutor's name before the demo.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/worli-dadar-central-mumbai') }}">Worli, Dadar and Central Mumbai</a>:</strong> Dadar serves both main lines, so the pool is wide; avoid timing a session with the office crowd at the station.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/vile-parle-juhu') }}">Vile Parle and Juhu</a>:</strong> long known as an education centre, so tutors for board subjects often live close by, for instance near {!! $cbmA('vile-parle-west', 'Vile Parle West') !!}.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/bandra-khar-santacruz') }}">Bandra, Khar and Santacruz</a> and <a href="{{ url('/city/mumbai/zone/andheri-jogeshwari') }}">Andheri and Jogeshwari</a>:</strong> say which side of the tracks you live on; the metro lines that meet around Andheri bring in tutors without the road.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/goregaon-malad') }}">Goregaon and Malad</a>:</strong> Line 2A on Link Road serves the west side, around {!! $cbmA('malad-west', 'Malad West') !!}; Line 7 on the highway serves the east.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/kandivali-borivali-dahisar') }}">Kandivali, Borivali and Dahisar</a>:</strong> Borivali's many train services widen the pool for {!! $cbmA('borivali-west', 'Borivali West') !!}; townships check visitors at the gate.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/chembur-ghatkopar-powai') }}">Chembur, Ghatkopar and Powai</a> and Bhandup and Mulund:</strong> {!! $cbmA('chembur', 'Chembur') !!} is on the Harbour line, Ghatkopar on the Central line and Line 1; Mulund's grid is easy to reach on foot from the station.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/thane') }}">Thane</a>:</strong> along Ghodbunder Road, around {!! $cbmA('manpada', 'Manpada') !!}, choose a tutor from your own stretch of the road rather than the station side.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/navi-mumbai') }}">Navi Mumbai</a>:</strong> give node, sector and plot; in {!! $cbmA('nerul', 'Nerul') !!} and the other nodes, look first at tutors from your own or the next node.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbm-mode">Home tuition or online for a CBSE student?</h2>
  <p>
    For maths and science up to Class 10, a tutor at the table usually works best: the tutor sees every line of
    working and every diagram as it is drawn. CBSE tutors are the easiest board specialists to find locally, so most
    families can keep at least one home session a week. Online sessions fit three situations well: a senior
    specialist who lives on another line, short revision or doubt sessions during the board months, and heavy-rain
    days. Agree with the tutor at the start that a session moves online when the trains are disrupted, so the
    monsoon does not cost a month. A common Mumbai pattern is one home lesson plus one online check-in with the same
    tutor. Our comparison of <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutors</a> lays
    out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbm-demo">What to check in a CBSE demo class</h2>
  <ol>
    <li><strong>This year's sample paper.</strong> Ask which one the tutor is teaching from and whether they have read the marking scheme.</li>
    <li><strong>An unseen case question.</strong> Give one from the sample paper. A good tutor teaches the student to read the situation, not just recall a formula.</li>
    <li><strong>The 20 internal marks.</strong> Ask how they would support projects, practical files or assignments without doing them.</li>
    <li><strong>Board background.</strong> If most of their students are SSC or HSC, ask how they adjust to NCERT wording and CBSE marking.</li>
    <li><strong>The route.</strong> Which line, which station, and what happens on a heavy-rain day?</li>
  </ol>
  <p>
    You get two or three matched tutors and see each fee before the demo; switching tutor later is free. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbm-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. In Mumbai, a journey
    across lines or over the creek at rush hour can show in the fee. See the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">home tuition fees in Mumbai</a>.
  </p>
  <p>
    Tell us the class, subjects, your station or node and free slots; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. For the board in more depth, our
    <a href="{{ url('/cbse-home-tutor-gurgaon') }}">CBSE guide for Gurgaon families</a> explains how the board works
    stage by stage. You can browse <a href="{{ url('/tutors') }}">tutor profiles</a>, see every area on our
    <a href="{{ url('/city/mumbai') }}">Mumbai tutors page</a>, or, if you teach, look at
    <a href="{{ url('/tuition-jobs/mumbai') }}">tuition jobs in Mumbai</a>.
  </p>
  </section>

  </div>
</article>
