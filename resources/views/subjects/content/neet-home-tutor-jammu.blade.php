{{--
  Jammu page for NEET home tutors. The exam, the NMC syllabus and NCERT-first
  tutoring are on the national hub (/neet-home-tutor); this page is about NEET
  tuition in Jammu: the JKBOSE biology paper split into botany and zoology
  sections, the Class 11 board year, the five zones, summer heat and short
  winter days as timing advice, and Class 11, Class 12 and repeat-year plans.
  Author: nxtutors (NXTutors Academic Team). Capitals phase 2 writer
  (subjects-b), 3 Oct 2026.

  Exam facts only as stated on the national page, which cites (fetched 1 Oct 2026):
  - NTA, NEET (UG) 2026 Information Bulletin (neet.nta.nic.in): 180 compulsory
    MCQs in 180 minutes (physics 45, chemistry 45, biology 90), 720 marks, +4/-1,
    pen and paper, single shift; booklets in English, Hindi (bilingual) or English
    plus a regional language (13 in all); minimum age 17 by 31 December; ties by
    biology, then chemistry, then physics.
  - NMC syllabus for NEET (UG) 2026: biology 10 units (five Class 11, five Class 12).
  JKBOSE facts from jkbose.jk.gov.in, read 3 Oct 2026:
  - https://jkbose.jk.gov.in/Syllabus-for-12th-class.html ->
    pdf/Syllabi Class 12th 2026 organised.pdf : Biology 100 = 70 theory (3 hours)
    + 30 practical (scheme table: 10 internal + 20 external practical); Section A
    Botany 35 (reproduction in flowering plants 7, genetics 9, biology and human
    welfare 7, ecology and environment 12); Section B Zoology 35 (reproduction in
    animals 11, genetics and evolution 12, biology in human welfare 7,
    biotechnology 5). Botany paper: 5 x 1 objective, 5 x 2 (20-30 words),
    5 x 3 (100-150 words), 1 x 5 (150-200 words, internal choice); HOTS
    questions included. Science faculty: Physics and Chemistry compulsory;
    Biology is one option in its group (with Statistics and Geography).
    Pass 36% in elective subjects; theory and practical passed separately.
  - https://jkbose.jk.gov.in/ModelTestPapers.html : Botany and Zoology model
    papers listed separately for Class 11 and Class 12.
  - https://jkbose.jk.gov.in/DateSheets12thJmu.html : date sheets for Jammu
    Division summer-zone and winter-zone sessions; a 2024 notice on external
    practical examinations of JEE/NEET aspirants (Class 12, Annual Regular 2024).
  No schools, colleges, hospitals, coaching institutes or people named. Local
  detail only from database/seo-content/areas/jammu-research.json. Flyovers
  under construction without dates. Fee wording is the approved sentence.
  Area links render only for active Jammu areas.
--}}
@php
  $jneSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jneA = function (string $slug, string $label) use ($jneSlugs) {
      return in_array($slug, $jneSlugs, true)
          ? '<a href="' . e(url('/city/jammu/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="jneGuideTitle">
  <h2 id="jneGuideTitle">NEET home tutor in Jammu: botany, zoology and physics on one weekly plan</h2>

  <p class="nx-guide__lede">
    NEET rewards students who know the NCERT biology books almost line by line and who do not leak marks in physics.
    In Jammu, a state-board student meets the same biology twice: once in the board's own papers, where it is split
    into a botany section and a zoology section with written answers, and again in NEET's multiple-choice format. A
    good home tutor turns that double exposure into an advantage instead of a doubled workload. This page sets out what
    the tutor should own, how the board's biology paper is built, which part of Jammu your tutor can reach without a
    long ride, how to plan around the hot months and short winter days, and what changes between Class 11, Class 12
    and a repeat year. The national <a href="{{ url('/neet-home-tutor') }}">NEET home tutor</a> page covers the exam in
    depth.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jne-exam">NEET in brief</a> ·
    <a href="#jne-board">The board's biology paper</a> ·
    <a href="#jne-week">A NEET week</a> ·
    <a href="#jne-which">NEET or biology tutor</a> ·
    <a href="#jne-mode">Home or online</a> ·
    <a href="#jne-areas">Localities</a> ·
    <a href="#jne-boards">JKBOSE, CBSE, ICSE</a> ·
    <a href="#jne-stages">Stages</a> ·
    <a href="#jne-mocks">Mocks</a> ·
    <a href="#jne-demo">Demo</a> ·
    <a href="#jne-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jne-exam">NEET (UG) in brief</h2>
  <p>
    According to the NTA's 2026 information bulletin, NEET (UG) was a single pen-and-paper sitting of 180 minutes with
    180 compulsory multiple-choice questions: 90 in biology and 45 each in physics and chemistry, for 720 marks. Each
    correct answer earned four marks and each wrong answer lost one. Where two candidates tied, biology marks were
    compared first. The syllabus is notified by the National Medical Commission and its ten biology units follow the
    NCERT books for Classes 11 and 12. Booklets were offered in English, in Hindi with English, and in English with a
    regional language. Confirm everything on neet.nta.nic.in before each cycle.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jne-board">How the JKBOSE Class 12 biology paper is built</h2>
  <p>
    The board's 2026-27 syllabus for the summer-zone areas of the Jammu Division gives Class 12 biology 70 theory marks
    and 30 for practical work. The theory is divided equally: 35 marks of botany and 35 of zoology, each with its own
    sections. The board also lists Botany and Zoology as separate model papers for Classes 11 and 12, so a tutor can
    give a student two clean practice sets instead of one mixed one.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 12 biology units and marks in the JKBOSE syllabus</caption>
    <thead>
      <tr><th scope="col">Botany section (35)</th><th scope="col">Marks</th><th scope="col">Zoology section (35)</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Reproduction in flowering plants</td><td>7</td><td>Reproduction in animals</td><td>11</td></tr>
      <tr><td>Genetics, including the molecular basis of inheritance</td><td>9</td><td>Genetics and evolution</td><td>12</td></tr>
      <tr><td>Biology and human welfare</td><td>7</td><td>Biology in human welfare</td><td>7</td></tr>
      <tr><td>Ecology and environment</td><td>12</td><td>Biotechnology and its applications</td><td>5</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The botany section follows a fixed shape in the syllabus: five one-mark objective questions, five two-mark answers
    of 20 to 30 words, five three-mark answers of 100 to 150 words, and one five-mark long answer of 150 to 200 words with
    an internal choice. That is a long way from NEET's one-line options. The tutor's job is to use the same NCERT
    paragraph for both: first a written answer at the board's length, then ten quick questions on the details hidden in
    it. Genetics and ecology deserve extra time, since they carry heavy marks on the board side and appear across NEET
    biology too.
  </p>
  <p>
    Two rules from the board's scheme matter for planning. Biology sits in a group of the science faculty where it
    competes with other options, so confirm in Class 11 that your child is registered for it. And the board expects
    theory and practical to be passed separately, so the practical record and specimen work cannot be left to the last
    month.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jne-week">What does a NEET week with a Jammu tutor look like?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A workable week for a Class 12 NEET student in Jammu</caption>
    <thead>
      <tr><th scope="col">Session</th><th scope="col">Content</th><th scope="col">Format</th></tr>
    </thead>
    <tbody>
      <tr><td>Biology recall, three short slots</td><td>One NCERT chapter at a time: a self-test, then the gaps re-read</td><td>Online, short and frequent</td></tr>
      <tr><td>Physics, one long session</td><td>Numericals and diagrams worked in front of the tutor</td><td>At home</td></tr>
      <tr><td>Chemistry, one session</td><td>Physical chemistry numericals; reaction lists for organic and inorganic</td><td>Home or online, depending on the weak part</td></tr>
      <tr><td>Board writing, one session</td><td>Botany or zoology answers to the word limits, marked</td><td>At home in the board year</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The board-writing session is the one most NEET students drop, and the one JKBOSE students can least afford to.
    Our <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first NEET biology</a> guide explains the reading
    method behind the recall slots, and the <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">NEET
    chemistry chapters</a> guide helps set the chemistry order.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jne-which">A NEET tutor or a biology tutor?</h2>
  <p>
    Families often ask whether they need a NEET specialist or simply a good biology teacher. The answer depends on the
    gap. If your child's board marks in biology are weak, start with a <a href="{{ url('/biology-home-tutor-jammu') }}">biology
    home tutor</a> who teaches the NCERT chapters properly and trains written answers; NEET practice on shaky
    foundations wastes time. If the board marks are sound but mock scores stall, a NEET tutor who drills timed
    multiple-choice questions, tracks wrong answers and builds speed is the better use of money. Many Class 12
    students need the first in the opening months and the second after the board syllabus is complete. Physics is
    different: a weak NEET physics score usually means weak problem-setting, which only a physics specialist fixes,
    whatever the board.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jne-mode">Home or online, and when the season decides</h2>
  <p>
    Physics belongs at the table: a tutor needs to see how a ray diagram or a circuit is set up before the numbers go
    in. Biology recall works well online in short bursts, because what matters is frequency, not travel. Jammu's
    weather pushes in the same direction. In the hot months, move physics to an early morning or evening home slot and
    keep the afternoons for online recall. When winter days are short, bring the home session forward to straight after
    school and do the late slot online. See <a href="{{ url('/online-tutor-jammu') }}">online tutors for Jammu</a> for
    how to set up the screen side properly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jne-areas">Six localities: who can reach you, and how</h2>
  <ul>
    <li><strong>{!! $jneA('sidhra', 'Sidhra') !!}</strong> lies on the north-eastern side, with the NH-44 bypass passing through. Tutors arrive by the bypass from the southern colonies or over the Tawi bridge from the old city. Apartment complexes may register visitors at the gate.</li>
    <li><strong>{!! $jneA('kunjwani', 'Kunjwani') !!}</strong> is a junction locality where highway traffic is heavy at peak hours. Homes in the lanes off the highway are easiest by two-wheeler; a lane landmark avoids confusion near the chowk.</li>
    <li><strong>{!! $jneA('shastri-nagar', 'Shastri Nagar') !!}</strong> has a Housing Board colony in the new city. Tutors from Gandhi Nagar, Nanak Nagar or Trikuta Nagar can usually take it on; a building with several flats may want the tutor's name at the entrance.</li>
    <li><strong>{!! $jneA('bakshi-nagar', 'Bakshi Nagar') !!}</strong> sits between Rehari, Talab Tillo and the old city, so tutors from any of the three reach it easily. Keep a fixed weekday slot outside the evening rush.</li>
    <li><strong>{!! $jneA('talab-tillo', 'Talab Tillo') !!}</strong> gets crowded around the chowk in the evening. Ask for a lane landmark and plan the start time with some margin.</li>
    <li><strong>{!! $jneA('roop-nagar', 'Roop Nagar') !!}</strong> is a planned colony along the foothills. The nearest tutors are usually in Roop Nagar itself, Janipur and Paloura.</li>
  </ul>
  <p>
    Zone pages: <a href="{{ url('/city/jammu/zone/rail-head-new-city') }}">Rail Head and New City</a>,
    <a href="{{ url('/city/jammu/zone/trikuta-channi') }}">Trikuta and Channi</a>,
    <a href="{{ url('/city/jammu/zone/kunjwani-sainik-colony') }}">Kunjwani and Sainik Colony</a>,
    <a href="{{ url('/city/jammu/zone/old-city-sidhra') }}">Old City and Sidhra</a> and
    <a href="{{ url('/city/jammu/zone/janipur-akhnoor-road') }}">Janipur and Akhnoor Road</a>. The full list of localities
    is on the <a href="{{ url('/city/jammu') }}">Jammu home tutors</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jne-boards">JKBOSE, CBSE or ICSE: what the tutor must add</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The gap between each school board and NEET</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">What already helps</th><th scope="col">What the tutor adds</th></tr>
    </thead>
    <tbody>
      <tr><td>JKBOSE</td><td>Separate botany and zoology practice; long written answers build understanding</td><td>Speed on options; NCERT details that a written answer can skip; a board exam in Class 11 that must not stall NEET work</td></tr>
      <tr><td>CBSE</td><td>NCERT is the school book</td><td>Volume of timed multiple-choice practice; written board answers kept alive</td></tr>
      <tr><td>ICSE and ISC</td><td>Strong descriptive writing</td><td>Mapping the school chapter order to NCERT units, and early objective practice</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Language is a choice to make early. Some Jammu students prefer to learn biology terms in Hindi and English together;
    pick the booklet language from the current bulletin and practise in it from Class 11. More on the state board is on
    our <a href="{{ url('/jkbose-tutor-jammu') }}">JKBOSE tutors in Jammu</a> page, and subject help on the
    <a href="{{ url('/biology-home-tutor-jammu') }}">biology</a> and
    <a href="{{ url('/chemistry-home-tutor-jammu') }}">chemistry</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jne-stages">Class 11, Class 12 and a repeat year</h2>
  <ul>
    <li><strong>Class 11.</strong> Half the NEET biology syllabus lives here, and for JKBOSE students it also ends in a board paper. Start a chapter-by-chapter recall log in the first month and keep physics fundamentals moving.</li>
    <li><strong>Class 12.</strong> New chapters, steady Class 11 revision, and the board's botany and zoology sections to length. Watch the board's date-sheet page for practical examination notices; in 2024 it issued one about external practicals for JEE and NEET aspirants.</li>
    <li><strong>Repeat year.</strong> No board papers, so the day opens up. Begin with last year's paper analysed question by question, then weekly full mocks. Read the current bulletin's eligibility rules first.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jne-mocks">Paper mocks and the cost of a wrong answer</h2>
  <p>
    With a mark lost for every wrong answer, a student who guesses freely can lose what careful biology recall earned.
    A tutor should run full 180-question papers at home under strict timing, in the same pen-and-paper format as the
    exam, then sort every error into one of three kinds: did not know, misread, or guessed. Only the first kind needs
    more teaching; the other two need habits. In the hot months, set the mock for the cooler part of the day so the
    score reflects knowledge rather than fatigue. The <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a>
    page has more on the subject that most often decides the rank.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jne-demo">What to watch in the NEET demo</h2>
  <ol>
    <li>Does the tutor ask about board, class, coaching days and the last test before teaching?</li>
    <li>Given a page of NCERT biology, can they turn it into a written board answer and into quick objective questions?</li>
    <li>In physics, do they make your child draw and set up the problem, or solve it for them?</li>
    <li>Do they know that JKBOSE examines Class 11 and splits biology into botany and zoology sections?</li>
    <li>Can they keep the same hour through summer and winter from where they live?</li>
  </ol>
  <p>
    If the answer is no, we arrange the next demo; switching later is free. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> lists more checks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jne-fees">NEET tutor fees in Jammu and how to begin</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee and you see it before the demo. Short online recall slots and a long home physics
    session are different jobs, so ask how a tutor would split the week. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-jammu') }}">home tuition fees in Jammu</a> guide.
  </p>
  <p>
    Send the class, board, weak subject, coaching days and your locality with a landmark. You receive two or three
    matched tutors and book a <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; you can browse <a href="{{ url('/tutors') }}">tutor profiles</a>
    too. For engineering, see <a href="{{ url('/jee-home-tutor-jammu') }}">JEE home tutors in Jammu</a>. Teachers can
    find requests on <a href="{{ url('/tuition-jobs/jammu') }}">Jammu tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
