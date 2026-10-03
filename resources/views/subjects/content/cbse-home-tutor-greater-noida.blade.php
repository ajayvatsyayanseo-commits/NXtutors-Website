{{--
  Board page for "CBSE home tutor Greater Noida". Authors: Abhinandan Tiwary
  (role: Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE and
  ICSE science). No anecdotes, years or results are claimed for either. No
  schools, coaching institutes, societies, developers or people are named.

  Board facts reworded from the Gurgaon board hub (cbse-home-tutor-gurgaon),
  which cites (cbseacademic.nic.in and cbse.gov.in, read 1 Oct 2026):
  - Curriculum 2026-27, Secondary (Classes IX-X), Curriculum_SecP1_2026-27.pdf:
    80 marks board / school annual exam + 20 internal assessment in major
    subjects; 33% to pass; about 50% competency-focused questions (case-based,
    source-based, integrated, data interpretation, situational, application);
    sample papers and marking schemes on cbseacademic.nic.in; Class IX maths
    and science at a common standard (80 marks) plus optional Advanced
    (25 marks, 1 hour, all HOTS) from 2026-27, not added to the aggregate;
    R3 (third language) mandatory in the transitional phase, assessed
    internally, no board exam.
  - Notification 14.02.2026, Two Board Examinations in Class X from 2026: first
    exam mandatory; improvement in up to three subjects among science, maths,
    social science and languages in the second exam.
  - Curriculum 2026-27, Senior Secondary (Classes XI-XII),
    Curriculum_SecP2_2026-27.pdf: Physics 042, Chemistry 043, Biology 044 are
    70 theory + 30 practical; Mathematics 041 or Applied Mathematics 241 (any
    one) 80 + 20 IA; Economics 030, Business Studies 054, Accountancy 055
    80 + 20; Computer Science 083 / Informatics Practices 065 70 + 30; more
    real-life application questions; Class XII board covers the entire
    syllabus; paper design notified with sample papers.
  State board described only in general terms, as the Greater Noida hub does
  (UPMSP: High School and Intermediate; content overlaps with NCERT-based
  syllabus; paper pattern and medium can differ).
  Local detail only from database/seo-content/areas/greater-noida-research.json,
  greater-noida-zone-guides.json, zones/greater-noida.json and the Greater
  Noida hub view. No claim that any board's families live in any one area.
  Fee wording is the approved NXTutors sentence. FAQs render from
  faqs/cbse-home-tutor-greater-noida.php. Area links render only for active
  Greater Noida areas.
--}}
@php
  $cgnSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cgnA = function (string $slug, string $label) use ($cgnSlugs) {
      return in_array($slug, $cgnSlugs, true)
          ? '<a href="' . e(url('/city/greater-noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide cgn-guide" aria-labelledby="cgnGuideTitle">
  <h2 id="cgnGuideTitle">CBSE home tutors in Greater Noida: what each class needs, and how a tutor gets to your door</h2>

  <p class="nx-guide__lede">
    CBSE is the board most Greater Noida students sit, and a request for a CBSE tutor can mean very different jobs: a Class 7
    child struggling with fractions, a Class 9 student weighing the new Advanced papers, a Class 12 student balancing
    practicals with an entrance exam. This page sorts those jobs by stage, compares CBSE with the UP Board pattern, and
    sets out how tutors reach the Greek-letter sectors and the Greater Noida West towers. Abhinandan Tiwary writes on Class 10 CBSE and ICSE maths, and Aaditya Kashyap on CBSE and ICSE science.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cgn-mix">CBSE in Greater Noida</a> ·
    <a href="#cgn-upboard">CBSE and the UP Board</a> ·
    <a href="#cgn-stages">Stage by stage</a> ·
    <a href="#cgn-changes">The 2026-27 changes</a> ·
    <a href="#cgn-senior">Classes 11 and 12</a> ·
    <a href="#cgn-subjects">Subjects</a> ·
    <a href="#cgn-session">A good session</a> ·
    <a href="#cgn-zones">Reaching each zone</a> ·
    <a href="#cgn-mode">Home or online</a> ·
    <a href="#cgn-demo">Demo checklist</a> ·
    <a href="#cgn-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cgn-mix">Where CBSE fits in Greater Noida's school mix</h2>
  <p>
    Families across Greater Noida follow the same spread of boards you find elsewhere in the NCR. CBSE is the one most
    students sit, ICSE and ISC account for a sizeable share, and a smaller group studies for the IB or Cambridge IGCSE.
    Because the city is in Uttar Pradesh, the state board, UPMSP, is part of the picture as well. A tutor strong on
    UP Board papers or ICSE literature is not automatically right for a CBSE board year, so we match on board.
    If your child is on a different board, see our <a href="{{ url('/icse-home-tutor-greater-noida') }}">ICSE and ISC
    tutors in Greater Noida</a>, <a href="{{ url('/ib-tutor-greater-noida') }}">IB tutors</a> or
    <a href="{{ url('/igcse-tutor-greater-noida') }}">IGCSE tutors</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgn-upboard">CBSE and the UP Board: why the same chapter can need a different tutor</h2>
  <p>
    The content of CBSE and UP Board courses overlaps a good deal, since both lean on NCERT-style material in maths and
    science. What differs is how the papers are built and, often, the language of teaching. UPMSP students sit the
    state's High School and Intermediate examinations, in Hindi or English medium; a CBSE student is marked against
    CBSE's own sample papers and marking schemes, with a large share of questions that test whether a concept can be
    applied to an unfamiliar situation.
  </p>
  <p>
    So when a child moves from a UP Board school to a CBSE one, the gap is rarely the chapter list. It is the question
    style, the way answers are set out and, sometimes, subject vocabulary in English. Tell us the board and medium
    together, and mention any recent switch, so the tutor spends the first weeks on question style rather than
    re-teaching content the child already knows.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgn-stages">What CBSE asks of a student, stage by stage</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Classes 6 to 12: the assessment, the usual risk and what to ask a tutor for</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">How it is assessed</th><th scope="col">The usual risk</th><th scope="col">What to ask the tutor for</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 to 8</td><td>School tests and projects only</td><td>Weak fractions and early algebra go unnoticed</td><td>A short diagnostic, then steady foundation work in maths and science</td></tr>
      <tr><td>Class 9</td><td>School annual exam: an 80-mark paper plus 20 internal marks in major subjects</td><td>The secondary syllabus arrives at speed; the optional Advanced papers add a decision</td><td>An honest view on Advanced, and NCERT plus competency-style practice</td></tr>
      <tr><td>Class 10</td><td>Board paper of 80 marks plus 20 internal marks; at least 33% to pass a subject</td><td>Relying on the second exam instead of preparing properly for the first</td><td>Sample-paper practice checked against the marking scheme, subject by subject</td></tr>
      <tr><td>Class 11</td><td>School exams on the new stream subjects</td><td>The jump in physics, chemistry and maths is underestimated</td><td>Early repair of weak chapters, and a weekly routine for practicals</td></tr>
      <tr><td>Class 12</td><td>Board theory papers plus practical or internal marks, on the whole Class 12 syllabus</td><td>Entrance preparation crowding out board-style writing</td><td>A plan that keeps full written answers in the week alongside any coaching</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgn-changes">The 2026-27 curriculum: what parents of Classes 9 and 10 should know</h2>
  <p>
    CBSE's 2026-27 secondary curriculum puts every Class 9 student on one common maths syllabus and one common science
    syllabus, each tested by an 80-mark paper. Beyond that, a student may opt for an Advanced paper in maths, in
    science, in both or in neither. An Advanced paper carries 25 marks, lasts an hour and consists only of
    higher-order questions. CBSE says those marks sit outside the aggregate. Advanced suits a child who already enjoys
    the subject and has time to spare; it is not a badge.
  </p>
  <p>
    A third language is also compulsory in the transition years, assessed by the school with no board paper.
  </p>
  <p>
    In Class 10 there are now two board examinations. Everyone sits the first. A student who has passed may return
    for the second to try to raise marks in up to three subjects drawn from science, maths, social science and the
    languages. Treat it as insurance, not the plan. Across secondary papers, CBSE says roughly half
    the questions are competency-focused: case-based, source-based, integrated, data-interpretation, situational and
    application items. The board publishes sample papers and marking schemes on cbseacademic.nic.in, and those are the
    documents a tutor should be working from.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgn-senior">Classes 11 and 12: where the marks come from</h2>
  <p>
    Each senior subject's split between theory and practical or internal work shows where a tutor's hour should go.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE senior subjects grouped by marks split (2026-27 curriculum)</caption>
    <thead>
      <tr><th scope="col">Split</th><th scope="col">Subjects (code)</th><th scope="col">What it means for tuition</th></tr>
    </thead>
    <tbody>
      <tr><td>70 theory, 30 practical</td><td>Physics (042), Chemistry (043), Biology (044), Computer Science (083), Informatics Practices (065)</td><td>Theory decides most of the grade, but the practical record cannot wait for the last month</td></tr>
      <tr><td>80 theory, 20 internal</td><td>Mathematics (041) or Applied Mathematics (241), never both; Accountancy (055); Economics (030); Business Studies (054)</td><td>Nearly everything rides on the paper: full working, formats, diagrams</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CBSE says senior papers will carry more real-life questions within the prescribed syllabus, and the Class 12 paper
    covers the whole Class 12 course. For the board year in depth, our <a href="{{ url('/cbse-home-tutor-gurgaon') }}">CBSE
    home tutor guide for Gurgaon</a> explains how the board works subject by subject; the
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice guide</a> helps if your child is
    still choosing subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgn-subjects">The subjects Greater Noida parents usually ask about</h2>
  <p>
    Up to Class 10 the requests are mostly maths and science, because each year builds on the last. In the senior classes it is physics, chemistry and maths for science
    students, biology for those heading towards medicine, and accountancy and economics for commerce. English is asked
    for less often.
  </p>
  <ul>
    <li><strong>Maths:</strong> <a href="{{ url('/maths-home-tutor-greater-noida') }}">maths home tutors in Greater Noida</a>, with <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> and <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths</a> for the board years.</li>
    <li><strong>Science, Classes 6 to 10:</strong> <a href="{{ url('/science-home-tutor-greater-noida') }}">science home tutors in Greater Noida</a> and <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science</a>.</li>
    <li><strong>Senior sciences:</strong> <a href="{{ url('/physics-home-tutor-greater-noida') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-greater-noida') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-greater-noida') }}">biology</a> tutors in Greater Noida, plus <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics</a> and <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry</a>.</li>
    <li><strong>English:</strong> <a href="{{ url('/english-home-tutor-greater-noida') }}">English home tutors in Greater Noida</a>.</li>
    <li><strong>Entrance alongside the board:</strong> <a href="{{ url('/jee-home-tutor-greater-noida') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-greater-noida') }}">NEET</a> home tutors in Greater Noida.</li>
  </ul>
  <p>
    Reading for the board years: <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths
    preparation</a>, <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> and
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgn-session">What a useful CBSE session looks like</h2>
  <p>
    The hour should start with the school notebook: what the class covered this week and which NCERT questions the
    child skipped. Then one topic is taught or repaired, beginning with the
    textbook explanation and moving to exemplar and competency-style questions on the same idea. The last part is
    writing: two or three board-style answers done in full, then compared with the marking scheme line by line. In
    maths that means every step shown; in science, labelled diagrams and units on every numerical; in accountancy,
    the correct format. A good tutor keeps a short log of chapters, marks and repeated mistakes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgn-zones">How CBSE tutors reach each part of Greater Noida</h2>
  <p>
    The first visit runs differently in each kind of housing. This is about getting a tutor to your door, wherever
    your child studies.
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/greater-noida/zone/greater-noida-west') }}">Greater Noida West</a>.</strong> In a society in {!! $cgnA('sector-1', 'Sector 1') !!} or anywhere in the tower belt, approve the tutor on the visitor app before day one and share the tower and flat number. There is no working metro station in the belt, so most tutors come by two-wheeler or car; avoid slots that cross Gaur Chowk or Ek Murti Chowk at the evening peak.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/alpha-delta-pari-chowk') }}">Alpha–Delta and Pari Chowk</a>.</strong> The easiest zone for a tutor without a vehicle: the ALPHA 1 station sits inside {!! $cgnA('alpha-1', 'Alpha 1') !!}, and DELTA 1 is a stop further on, with e-rickshaws for the last stretch. Plotted houses mean no gate to clear.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/pi-sigma-sectors-36-37') }}">Pi, Sigma and Sectors 36–37</a>.</strong> Most homes in {!! $cgnA('pi-1', 'Pi 1') !!} are society flats, so register the tutor with security; DELTA 1 is the usual metro stop, then an auto.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omega-chi-phi') }}">Omega, Chi and Phi</a>.</strong> In the walled communities of {!! $cgnA('omega-1', 'Omega 1') !!}, give the guard the tutor's name, number and vehicle a day ahead. Nearly every route passes Pari Chowk, so an earlier evening slot holds better.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/zeta-eta') }}">Zeta and Eta</a>.</strong> {!! $cgnA('zeta-1', 'Zeta 1') !!} is calm and well laid out but thin on public transport; GNIDA Office is the usual station and an auto finishes the trip. Tutors from Zeta, Eta or Delta keep weekday slots most reliably.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omicron-mu-xu') }}">Omicron, Mu and Xu</a>.</strong> {!! $cgnA('omicron-1', 'Omicron 1') !!} is mostly high-rise societies, so gate registration applies, and its connecting roads are congested at rush hour. Ask how the tutor will travel before you fix the time.</li>
  </ul>
  <p>
    The whole city, sector by sector, is on our <a href="{{ url('/city/greater-noida') }}">Greater Noida tutors
    page</a>, and the <a href="{{ url('/blog/greater-noida-west-tuition-guide') }}">Greater Noida West guide</a> and
    <a href="{{ url('/blog/greater-noida-sectors-tuition-guide') }}">Greek-letter sectors guide</a> add local timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgn-mode">Home classes or online for CBSE?</h2>
  <p>
    Because CBSE is the board most students here sit, CBSE tutors are usually the easiest to find, and for most classes
    and subjects a home tutor within easy reach is realistic. Home suits younger children, students who drift on a
    screen and any subject where handwriting, diagrams or a practical file need watching. Online makes sense when the right person
    for a Class 12 subject lives across the city, or when the route crosses a jammed junction at your only free hour. Many families mix a weekend home class with a weekday online
    session, with the tutor watching written working live. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a> goes further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgn-demo">A demo checklist for CBSE parents</h2>
  <ol>
    <li><strong>This year's papers.</strong> Ask which sample paper and marking scheme the tutor is using.</li>
    <li><strong>One unseen case-based question.</strong> Watch whether they teach your child to read it, or simply solve it.</li>
    <li><strong>Internal marks.</strong> Ask how they would help with the 20 internal marks or the practical record without doing the work themselves.</li>
    <li><strong>The Class 9 decision.</strong> For a Class 9 child, ask whether they would advise an Advanced paper, and why.</li>
    <li><strong>Board and medium.</strong> If your child moved from a UP Board school or studies some subjects in Hindi, ask how they would close the gap in question style.</li>
    <li><strong>Travel.</strong> Ask how they will reach you at the chosen time.</li>
  </ol>
  <p>
    You receive two or three matched tutors, see each fee before the demo, and can switch tutor later at no cost.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more questions
    to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgn-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For CBSE in Greater Noida,
    the class, the number of subjects, sessions per week and how far the tutor travels shape the figure. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-greater-noida') }}">home
    tuition fees in Greater Noida</a>.
  </p>
  <p>
    Send us the class, subjects, your sector and society or block, and the times that suit you. We shortlist two or
    three CBSE tutors and the first class is a <a href="{{ url('/demo-class') }}">free demo</a>. You can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>. Tutors who want to teach here can see open requests on
    <a href="{{ url('/tuition-jobs/greater-noida') }}">tuition jobs in Greater Noida</a>.
  </p>
  </section>

  </div>
</article>
