{{--
  Exam page: "MHT-CET tutor Mumbai" (PCM and PCB groups), Mumbai, Thane and
  Navi Mumbai. Author: nxtutors (NXTutors Academic Team). No school, college,
  coaching, society or people names. No candidate numbers, no exam dates.

  Official sources (State Common Entrance Test Cell, Maharashtra; read 1 Oct 2026):
  - cetcell.mahacet.org/wp-content/uploads/2023/12/MHT-CET-2026-Information-
    Brochure-Updated-on-11.04.2026.pdf: CET Cell set up under Mah. Act XXVIII
    of 2015, office at Fort, Mumbai; MHT-CET for first-year B.E./B.Tech,
    pharmacy, B.Planning, integrated M.E./M.Tech, Pharm.D and integrated
    M.Planning (AY 2026-27); online CBT at centres across Maharashtra, PCM and
    PCB separately; choose PCM, PCB or both, option final; marks not
    transferred between groups; English/Marathi/Urdu medium for Physics,
    Chemistry and Biology, choice irrevocable, English version final in
    dispute; MCQs with four options, one correct; PCM: Physics and Chemistry
    1 mark, Mathematics 2 marks per question, 150 questions in 180 minutes;
    PCB: 1 mark each, 200 questions in 180 minutes; no negative marking;
    questions shown one at a time; first 90 minutes Physics & Chemistry, then
    auto-submit and 90 minutes Mathematics or Biology; mock link on
    mahacet.org; percentile not the same as percentage; two attempts in 2026,
    best Total percentile of the two counts, not subject percentiles;
    Physics/Chemistry percentiles not interchanged between groups; eligibility:
    passed/appearing HSC or equivalent, Indian nationality, no age limit;
    Maharashtra State and Minority candidature must take MHT-CET for
    B.E./B.Tech and B.Pharm/Pharm.D; for All India candidature JEE (Main)
    score preferred for B.E./B.Tech and NEET for B.Pharm/Pharm.D;
    definitions of SSC (Std X) and HSC (Std XII).
  - cetcell.mahacet.org/wp-content/uploads/2023/12/Syllabus-Technical-2026.pdf
    (MHT-CET 2026 syllabus and marking scheme): questions on the State Council
    of Educational Research and Training, Maharashtra syllabus; about 20%
    Std XI and 80% Std XII; no negative marking; difficulty at par with JEE
    (Main) for Mathematics, Physics, Chemistry and with NEET for Biology;
    mainly application based; three 100-mark MCQ papers of 90 minutes:
    Paper I Mathematics 10 (XI) + 40 (XII) at 2 marks; Paper II Physics
    10 + 40 and Chemistry 10 + 40 at 1 mark; Paper III Biology 20 + 80 at
    1 mark; whole Std XII syllabus plus listed Std XI chapters (Physics:
    Vectors, Error Analysis, Motion in a plane, Laws of Motion, Gravitation,
    Thermal properties of matter, Sound, Optics, Electrostatics,
    Semiconductors; Chemistry: Some Basic concepts, Structure of atom,
    Chemical Bonding, Redox reactions, Elements of group 1 and 2, States of
    Matter, Adsorption and colloids, Hydrocarbons, Basic principles of organic
    chemistry, Chemistry in everyday life; Mathematics: Trigonometry II,
    Straight Line, Circle, Probability, Complex Numbers, Permutations and
    Combinations, Functions, Limits, Continuity, Conic Section; Biology:
    Biomolecules, Respiration and Energy Transfer, Human Nutrition, Excretion
    and Osmoregulation).
  - cetcell.mahacet.org/.../MHT-CET-2026-Result-Processing-Methodology.pdf:
    multi-shift normalisation, percentile per session to 7 decimals, topper
    of each session at 100, Total percentile not an average of subject
    percentiles.
  - cetcell.mahacet.org press notes (June 2026) confirm PCM and PCB first and
    second attempts held in 2026 at centres across Maharashtra (no figures used).
  HSC facts from mahahsscboard.in as cited in maharashtra-board-tutor-mumbai.
  Local detail only from areas/mumbai-research.json, zones/mumbai.json and the
  Mumbai hub view. Bhandup & Mulund has no zone page, so it is plain text.
  Fee wording is the approved sentence. FAQs render from
  faqs/mht-cet-tutor-mumbai.php.
--}}
@php
  $mctSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $mctA = function (string $slug, string $label) use ($mctSlugs) {
      return in_array($slug, $mctSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="mctGuideTitle">
  <h2 id="mctGuideTitle">MHT-CET tutors in Mumbai: the PCM and PCB papers, and how to prepare around HSC and JEE or NEET</h2>

  <p class="nx-guide__lede">
    MHT-CET is Maharashtra's own entrance test for engineering, pharmacy and planning degrees, run by the State Common
    Entrance Test Cell from its office in Fort. It is a computer-based multiple-choice test with no negative marking,
    taken as a PCM group, a PCB group or both, and it draws on the state's Class 11 and Class 12 syllabus. That makes
    it the entrance most closely tied to the HSC, but its pace and question style are quite different from a written
    board paper. This page explains the test as the CET Cell's 2026 information brochure and syllabus describe it,
    how it sits beside the HSC and beside JEE and NEET, and how a home tutor in Mumbai, Thane or Navi Mumbai can plan
    the two years. The CET Cell publishes a new brochure for each year's test, so check the current one on
    cetcell.mahacet.org before relying on any detail here.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#mct-what">What it is for</a> ·
    <a href="#mct-pattern">The paper</a> ·
    <a href="#mct-syllabus">Syllabus</a> ·
    <a href="#mct-score">Attempts and percentiles</a> ·
    <a href="#mct-hsc">HSC, JEE and NEET</a> ·
    <a href="#mct-plan">A tutor's plan</a> ·
    <a href="#mct-zones">Zones and travel</a> ·
    <a href="#mct-demo">The demo</a> ·
    <a href="#mct-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="mct-what">Who takes MHT-CET, and for which courses?</h2>
  <p>
    The 2026 brochure lists first-year admission to Bachelor of Engineering and Technology, pharmacy degrees,
    B.Planning, integrated M.E./M.Tech, Pharm.D and integrated M.Planning. Anyone of Indian nationality who has passed,
    or is appearing for, the HSC or an equivalent Class 12 examination may sit it, and there is no age limit, so CBSE,
    ISC and other-board students take it alongside State Board students.
  </p>
  <p>
    For a Mumbai family the key line is about candidature. Students applying under Maharashtra State or Minority
    candidature must appear for MHT-CET to be considered for B.E./B.Tech and for B.Pharm or Pharm.D. Students
    applying under All India candidature may skip it, because a JEE (Main) score is preferred for engineering and a
    NEET score for pharmacy in that category. The brochure defines several types of Maharashtra candidature; read
    them on the CET Cell's site rather than assuming which applies to you.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mct-pattern">How the PCM and PCB papers are built</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>MHT-CET papers as set out in the CET Cell's 2026 syllabus and marking scheme</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Questions from Std XI</th><th scope="col">Questions from Std XII</th><th scope="col">Marks each</th><th scope="col">Total</th><th scope="col">Time</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper I: Mathematics</td><td>10</td><td>40</td><td>2</td><td>100</td><td>90 minutes</td></tr>
      <tr><td>Paper II: Physics</td><td>10</td><td>40</td><td>1</td><td rowspan="2">100</td><td rowspan="2">90 minutes</td></tr>
      <tr><td>Paper II: Chemistry</td><td>10</td><td>40</td><td>1</td></tr>
      <tr><td>Paper III: Biology</td><td>20</td><td>80</td><td>1</td><td>100</td><td>90 minutes</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The PCM group sits Papers I and II: 150 questions in 180 minutes. The PCB group sits Papers II and III: 200
    questions in 180 minutes. In both, the first 90 minutes open only physics and chemistry; when that time ends,
    that section is submitted automatically and the mathematics or biology section opens for the next 90 minutes.
    Time cannot be moved between the two halves.
  </p>
  <ul>
    <li><strong>Computer-based, one question at a time.</strong> Each question has four options with one correct answer, shown on screen one by one. The CET Cell puts a mock test link on its site before the exam; practise on it.</li>
    <li><strong>No negative marking.</strong> A blank scores the same as a wrong answer, so no question should be left unanswered at the end.</li>
    <li><strong>Language.</strong> Physics, chemistry and biology can be taken in English, Marathi or Urdu. The choice made in the form cannot be changed, and if a translation is disputed, the English version is final.</li>
    <li><strong>Level.</strong> The CET Cell says the maths, physics and chemistry questions are set at the level of JEE (Main) and the biology questions at the level of NEET, and that questions are mainly application based.</li>
  </ul>
  <p>
    Some simple arithmetic on those numbers shapes the coaching. In the physics and chemistry half, 100 questions
    share 90 minutes, a little under a minute each. In maths, 50 questions share 90 minutes, about 1.8 minutes each,
    but every one is worth two marks. Biology is again 100 questions in 90 minutes. A student who writes beautiful
    three-mark HSC derivations may still run out of time here unless speed is practised separately.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mct-syllabus">What the syllabus covers: about 20% Class 11, 80% Class 12</h2>
  <p>
    Questions are based on the syllabus of the State Council of Educational Research and Training, Maharashtra. The
    whole Class 12 syllabus in each subject is included, and the CET Cell names the Class 11 chapters it will use:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11 chapters in the MHT-CET 2026 syllabus</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Std XI chapters listed by the CET Cell</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics</td><td>Vectors; Error Analysis; Motion in a Plane; Laws of Motion; Gravitation; Thermal Properties of Matter; Sound; Optics; Electrostatics; Semiconductors</td></tr>
      <tr><td>Chemistry</td><td>Some Basic Concepts of Chemistry; Structure of Atom; Chemical Bonding; Redox Reactions; Elements of Group 1 and 2; States of Matter; Adsorption and Colloids; Hydrocarbons; Basic Principles of Organic Chemistry; Chemistry in Everyday Life</td></tr>
      <tr><td>Mathematics</td><td>Trigonometry II; Straight Line; Circle; Probability; Complex Numbers; Permutations and Combinations; Functions; Limits; Continuity; Conic Section</td></tr>
      <tr><td>Biology</td><td>Biomolecules; Respiration and Energy Transfer; Human Nutrition; Excretion and Osmoregulation</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The list is a gift for planning. A Class 11 student can treat those chapters as permanent CET material, and a
    Class 12 student who joined late can see exactly which Class 11 gaps to close. The list can change from year to
    year, so compare it with the syllabus published for your child's year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mct-score">Two attempts, shifts and percentiles</h2>
  <p>
    The test runs in several shifts, each with a different set of questions, so the CET Cell converts raw marks into
    percentiles within each session. The top scorer in every session gets 100, the scores are calculated to seven
    decimal places to avoid ties, and the total percentile is worked out from the total raw score, not by averaging
    the subject percentiles. A percentile is not a percentage of marks: it tells you what share of candidates in your
    session scored the same as you or less.
  </p>
  <p>
    For 2026 the CET Cell offered two attempts for each group. A student who sat both had the better of the two total
    percentiles counted for admission; only the total percentile was compared, not subject percentiles, and physics or chemistry
    percentiles from one group were not carried to the other. Marks in one group are never transferred to the
    other. Whether a second attempt is offered, and on what terms, is set out in each year's brochure, so read the
    current one before building a plan around it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mct-hsc">How MHT-CET relates to the HSC, JEE and NEET</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Same subjects, different demands</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">HSC (Maharashtra Board)</th><th scope="col">MHT-CET</th><th scope="col">JEE Main / NEET</th></tr>
    </thead>
    <tbody>
      <tr><td>Who sets it</td><td>The state board</td><td>State CET Cell</td><td>NTA</td></tr>
      <tr><td>Answer style</td><td>Written answers, derivations, diagrams; practicals and a journal</td><td>Multiple choice on screen, no negative marking</td><td>Objective questions under NTA's own pattern and marking rules</td></tr>
      <tr><td>Syllabus base</td><td>State textbooks for Classes 11 and 12</td><td>State syllabus, about 20% Class 11 and 80% Class 12</td><td>NTA's published syllabus</td></tr>
      <tr><td>What it decides</td><td>The Class 12 result</td><td>State engineering and pharmacy admissions</td><td>National engineering or medical admissions</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    <strong>With the HSC.</strong> For a State Board science student the content is largely shared, which is the
    biggest advantage MHT-CET offers: one set of chapters serves both. The difference is the skill. The HSC rewards
    complete written working and a well-kept journal; the CET rewards quick, accurate choices. A tutor should keep
    both alive rather than letting one crowd out the other. Our <a href="{{ url('/maharashtra-board-tutor-mumbai') }}">Maharashtra
    Board tutors in Mumbai</a> page covers the board side.
  </p>
  <p>
    <strong>With JEE and NEET.</strong> The CET Cell pitches its maths, physics and chemistry at JEE (Main) level and
    its biology at NEET level, so a student preparing for those national tests is usually well placed for MHT-CET,
    provided the state syllabus is checked chapter by chapter against what they have studied. CBSE and ISC students
    in particular should compare the Class 11 list above with their own books. The reverse is not true: a student
    who has prepared only for MHT-CET will meet harder questions and a different marking scheme in JEE or NEET. See
    <a href="{{ url('/jee-home-tutor-mumbai') }}">JEE home tutors in Mumbai</a> and
    <a href="{{ url('/neet-home-tutor-mumbai') }}">NEET home tutors in Mumbai</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mct-plan">How a home tutor plans MHT-CET preparation</h2>
  <ol>
    <li><strong>Class 11: build the listed chapters properly.</strong> Vectors, laws of motion, chemical bonding, complex numbers, conics, and for biology students human nutrition and respiration, will all be examined again. Teach them for understanding, then add short sets of timed multiple-choice questions after each chapter.</li>
    <li><strong>Class 12, first half: one syllabus, two styles.</strong> Each week, a written HSC-style set and a timed MCQ set from the same chapters. This is where one tutor per subject earns their fee, because coaching batches often move at a pace that leaves board answers behind.</li>
    <li><strong>Class 12, before the boards: protect the HSC.</strong> Practical journal, viva preparation and full theory papers come first; keep MCQ practice short and regular so speed is not lost.</li>
    <li><strong>After the boards: full mocks on screen.</strong> Practise in the real format: 90 minutes of physics and chemistry, then a hard switch to maths or biology. Review every mock for time spent, not only for wrong answers.</li>
    <li><strong>Between attempts, if a second is offered.</strong> Rework the weakest section rather than repeating everything; the better total percentile is what counts.</li>
  </ol>
  <p>
    For subject-level reading, our guides on <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET biology</a> cover much of the same ground. Subject
    tutors are on our <a href="{{ url('/maths-home-tutor-mumbai') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-mumbai') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-mumbai') }}">chemistry</a> and
    <a href="{{ url('/biology-home-tutor-mumbai') }}">biology</a> pages for Mumbai.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mct-zones">Getting an MHT-CET tutor to your door, zone by zone</h2>
  <p>
    Senior students already lose hours to junior college and coaching, so the tutor's journey must not eat into
    theirs. Notes from our area research:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/mumbai/zone/south-mumbai') }}">South Mumbai</a> and <a href="{{ url('/city/mumbai/zone/worli-dadar-central-mumbai') }}">Worli, Dadar and Central Mumbai</a>:</strong> {!! $mctA('parel', 'Parel') !!} is on the Central line, with Prabhadevi on the Western line close by for tutors from the western suburbs.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/bandra-khar-santacruz') }}">Bandra, Khar and Santacruz</a>:</strong> in {!! $mctA('santacruz-east', 'Santacruz East') !!}, tutors come by train or by the Line 3 metro to Vakola, then an auto into Kalina.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/vile-parle-juhu') }}">Vile Parle and Juhu</a> and <a href="{{ url('/city/mumbai/zone/andheri-jogeshwari') }}">Andheri and Jogeshwari</a>:</strong> the metro lines meeting around Andheri bring senior-subject tutors in from both directions.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/goregaon-malad') }}">Goregaon and Malad</a>:</strong> {!! $mctA('bangur-nagar', 'Bangur Nagar') !!} has its own Line 2A station, and street parking is short, so train or metro plus a short walk is easiest.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/kandivali-borivali-dahisar') }}">Kandivali, Borivali and Dahisar</a>:</strong> in {!! $mctA('charkop', 'Charkop') !!}, share the sector and plot number; {!! $mctA('dahisar-west', 'Dahisar West') !!} is served by Kandarpada on Line 2A.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/chembur-ghatkopar-powai') }}">Chembur, Ghatkopar and Powai</a> and Bhandup and Mulund:</strong> Ghatkopar's link between the Central line and Line 1 lets a tutor from Andheri arrive without changing at Dadar.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/thane') }}">Thane</a>:</strong> around {!! $mctA('majiwada', 'Majiwada') !!}, the junction is slow at rush hour, so families often choose weekend or mid-afternoon slots.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/navi-mumbai') }}">Navi Mumbai</a>:</strong> {!! $mctA('ghansoli', 'Ghansoli') !!} is on the Trans-Harbour line, and {!! $mctA('seawoods', 'Seawoods') !!} on the Harbour line, so tutors from Vashi, Nerul or Belapur come by train.</li>
  </ul>
  <p>
    When the trains are disrupted or coaching runs late, a short online session with the same tutor keeps the week
    on track; our comparison of <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a>
    explains when each works best.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mct-demo">What to check in an MHT-CET demo class</h2>
  <ol>
    <li><strong>The current brochure.</strong> Ask the tutor what the latest CET Cell syllabus says about Class 11 chapters and marks per question. A tutor working from an old pattern is a warning sign.</li>
    <li><strong>A timed set.</strong> Ask for ten questions in the CET time budget, then watch how the tutor reviews the ones that took too long.</li>
    <li><strong>Group fit.</strong> PCM and PCB need different emphasis; if your child is sitting both, ask how the week will be split.</li>
    <li><strong>Board balance.</strong> Ask how HSC written answers and the practical journal will be kept on track alongside MCQ work.</li>
    <li><strong>Medium.</strong> If your child will take physics, chemistry or biology in Marathi, the tutor should be comfortable with those terms.</li>
    <li><strong>The route and the backup.</strong> Which line, which station, and an agreed online fallback.</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching
    tutor later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>
    before their profile is marked Verified. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> has more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mct-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">home
    tuition fees in Mumbai</a>.
  </p>
  <p>
    Tell us the class, board, group (PCM, PCB or both), medium, your station or node and free slots; the first class
    is a <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>,
    see every area on our <a href="{{ url('/city/mumbai') }}">Mumbai tutors page</a>, or, if you teach, look at
    <a href="{{ url('/tuition-jobs/mumbai') }}">tuition jobs in Mumbai</a>.
  </p>
  </section>

  </div>
</article>
