{{--
  Board hub: "Maharashtra Board SSC & HSC tutor Mumbai" (Mumbai, Thane, Navi Mumbai).
  Author: nxtutors (NXTutors Academic Team). No school, college, coaching,
  society or people names. No exam dates, results or candidate numbers.

  Official sources (all read 1 Oct 2026):
  - mahahsscboard.in, Student & Syllabus > SSC General and HSC General subject
    lists (served as /en/studentAndSyllabus/sscGeneral and /hscGeneral): SSC
    subject codes 71 Mathematics, 72 Science & Technology, 73 Social Sciences,
    first-language and 2/3-language lists (Marathi, Hindi, English, Urdu,
    Gujarati, Kannada, Tamil, Telugu, Malayalam, Sindhi, Bengali, Punjabi...),
    composite languages, NSQF vocational subjects; HSC compulsory subjects 30
    Health & Physical Education and 31 Environment Education & Water Security;
    optional 54 Physics, 55 Chemistry, 56 Biology, 40 Mathematics & Statistics
    (Arts and Science), 88 Maths & Statistics (Commerce), 50 Book Keeping &
    Accountancy, 51 Organisation of Commerce & Management, 52 Secretarial
    Practice, 53 Co-operation, 49 Economics, 38 History, 39 Geography, 42
    Political Science, 45 Sociology, 48 Psychology, 46 Philosophy, 47 Logic,
    97/98/99 Information Technology (Science/Arts/Commerce); bifocal subjects
    such as D9 Computer Science and C2 Electronics; HSC vocational subjects.
  - mahahsscboard.in, Evaluation page PDFs (state-board-strapi-upload...):
    "STD IX & X MATHEMATICS (71)" revised evaluation scheme: Part I 40 marks
    2 hours, Part II 40 marks 2 hours, internal assessment 20 (one assignment
    per part, 5 + 5; one practical per part, 20 marks converted to 10).
    "STD IX & X SCIENCE (72)": Class 10 Science & Technology Part 1 and Part 2,
    each a 40-mark activity sheet (krutipatrika) of two hours, on two separate
    days; question types (1-mark MCQ based on textbook, 2-mark "give scientific
    reasons", 3- and 5-mark choices); internal marks from experiments, journal
    and projects, one project for each part in the year.
    "Physics (54) Std XII": theory 70 marks, 3 hours, Sections A-D (10 MCQ and
    8 VSA of one mark; any 8 of 12 two-mark; any 8 of 12 three-mark; any 3 of 5
    four-mark), log tables allowed, calculators not; weightage with option
    Knowledge 30%, Understanding 42%, Application & Skill 28%; difficulty
    easy 30%, average 50%, difficult 20%; practical 30 marks, 3 hours, passing
    11 (long experiment 10, short 5, activity 5, viva 5, certified journal 5),
    at least 75% of handbook experiments; practical handbook published by
    Balbharati; unit test 25 marks. Scheme "Year 2020-2021 onwards".
    "Biology (56) Std XII": same question types (MCQ, VSA, SA-I, SA-II, LA).
    "Mathematics & Statistics (40) Std XII (Arts and Science)": 80 marks,
    3 hours, four sections; theory questions up to 15%.
    "Book Keeping and Accountancy (50) Std XII": board written 80 + 20
    application-based test (internal); terminal exam 50 marks, 2.5 hours;
    final result on board exam marks; GR of 8 Aug 2019.
  - mahahsscboard.in Divisions data: nine divisional boards; Mumbai Divisional
    Board (1985) covers Mumbai, Thane, Raigad and Palghar districts.
  - mahahsscboard.in FAQs (English): Class Improvement Scheme (passed once,
    next three consecutive examinations, all subjects, no change of subject);
    marks verification, photocopy and revaluation after results; sample
    question papers under Student Login; digital marksheets on the board site
    and DigiLocker; APAAR ID needed for the digital marksheet; eligibility
    verification for HSC students coming from other boards; practical and
    internal marks entered by schools and junior colleges on the board portal;
    board recognition for Marathi- and English-medium schools.
  - cetcell.mahacet.org, MHT-CET 2026 Information Brochure (updated
    11.04.2026), definitions of SSC (Std X) and HSC (Std XII); syllabus PDF
    (SCERT Maharashtra syllabus, about 20% Std XI and 80% Std XII).
  Local detail only from the Mumbai hub view, zones/mumbai.json,
  areas/mumbai-research.json and mumbai-zone-guides.json (Vile Parle as an
  education centre with Marathi and Gujarati communities; Ghatkopar's Marathi
  and Gujarati communities; rail, metro and gate notes). Bhandup & Mulund has
  no zone page, so it is plain text. Fee wording is the approved sentence.
  FAQs render from faqs/maharashtra-board-tutor-mumbai.php.
--}}
@php
  $mhbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $mhbA = function (string $slug, string $label) use ($mhbSlugs) {
      return in_array($slug, $mhbSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="mhbGuideTitle">
  <h2 id="mhbGuideTitle">Maharashtra Board tutors in Mumbai: SSC in Class 10, HSC in Classes 11 and 12</h2>

  <p class="nx-guide__lede">
    The Maharashtra State Board of Secondary and Higher Secondary Education sets two public examinations: the SSC at
    the end of Standard X and the HSC at the end of Standard XII. For families in Mumbai, Thane and Navi Mumbai the
    board's Mumbai Divisional Board is the local office, and its papers have a shape of their own: two separate
    40-mark maths papers in Class 10, science written as two "activity sheets", and junior-college subjects with
    fixed theory and practical shares. This page sets out what the board itself publishes about SSC and HSC, how
    those papers differ from CBSE and ICSE, which HSC streams and subject combinations exist, and how a home tutor
    can carry a student from Class 9 through to the HSC. Everything about papers and marks below is taken from the
    board's own website; check it again there before you plan around it.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#mhb-board">The board in Mumbai</a> ·
    <a href="#mhb-ssc">SSC Class 10 papers</a> ·
    <a href="#mhb-medium">Medium and languages</a> ·
    <a href="#mhb-streams">HSC streams</a> ·
    <a href="#mhb-hsc">HSC papers</a> ·
    <a href="#mhb-other">Versus CBSE and ICSE</a> ·
    <a href="#mhb-plan">A tutor's plan</a> ·
    <a href="#mhb-zones">Zones and travel</a> ·
    <a href="#mhb-demo">The demo</a> ·
    <a href="#mhb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="mhb-board">Which office of the board looks after Mumbai?</h2>
  <p>
    The board works through nine divisional boards. The Mumbai Divisional Board, set up in 1985, covers the Mumbai,
    Thane, Raigad and Palghar districts, so every zone on our <a href="{{ url('/city/mumbai') }}">Mumbai tutors
    page</a>, Navi Mumbai and the Ghodbunder Road townships included, falls under it. Schools and junior colleges
    enter practical and internal marks on the board's portal, and after a result the board offers marks verification,
    a photocopy of the answer book and revaluation, each applied for online through the student login. Marksheets can
    also be downloaded in digital form from the board's site or through DigiLocker; the board notes that an APAAR ID
    is needed for the digital copy.
  </p>
  <p>
    Two terms are worth fixing early. "SSC" is the Secondary School Certificate examination taken in Standard X, and
    "HSC" is the Higher Secondary Certificate examination taken in Standard XII. Search engines often confuse the
    second with an Australian qualification of the same name, which is why we call this page "Maharashtra Board".
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mhb-ssc">What does the SSC ask of a Class 10 student?</h2>
  <p>
    On the board's SSC list, the core academic subjects are Mathematics (code 71), Science and Technology (72) and
    Social Sciences (73), alongside a first language and a second or third language. Each of the first two is split
    into two papers, and each carries internal marks that the school awards during the year.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>SSC maths and science as the board's evaluation schemes describe them</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Written papers</th><th scope="col">Internal assessment</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics (71)</td><td>Part I: 40 marks, 2 hours. Part II: 40 marks, 2 hours</td><td>20 marks: one assignment for each part (5 + 5) and one practical for each part, marked out of 20 and scaled to 10</td></tr>
      <tr><td>Science and Technology (72)</td><td>Part 1 and Part 2: each a 40-mark activity sheet of 2 hours, sat on separate days</td><td>Experiments, a practical journal and projects, with one project for each part during the year</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The board calls a science paper a <em>krutipatrika</em>, an activity sheet, and the name tells you what it wants.
    The opening question has one-mark multiple-choice items based on the textbook and short one-mark tasks such as
    finding the odd one out, matching pairs or naming a substance. Two-mark questions include "give scientific
    reasons", and the three- and five-mark sections ask the student to complete diagrams, fill in tables, solve
    numerical examples and explain with examples from daily life, with a choice inside each section. A student who
    has only memorised definitions finds the later sections hard; one who can explain a diagram in their own words
    finds them fair.
  </p>
  <p>
    In maths, Part I and Part II are separate two-hour papers of 40 marks each, and every question from the second
    onwards offers a choice of sub-questions. The scheme says the last two questions go beyond the textbook: one set
    is built on its activities but more challenging, and the final one asks for creative work. That makes neat,
    complete working the habit to train from Class 9, since the board publishes one combined scheme for Classes 9
    and 10. Our <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a>
    page and <a href="{{ url('/maths-home-tutor-mumbai') }}">maths home tutors in Mumbai</a> go further into the
    subject itself.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mhb-medium">Marathi medium, English medium and the language papers</h2>
  <p>
    The board recognises both Marathi-medium and English-medium schools, and its SSC language list is long: Marathi,
    Hindi, English, Urdu, Gujarati, Kannada, Tamil, Telugu, Malayalam, Sindhi, Bengali and Punjabi as first languages,
    many more as second or third languages, and "composite" pairings such as Marathi with Hindi or Hindi with
    Sanskrit. For a tutor this has two practical effects.
  </p>
  <ul>
    <li><strong>Terms in the right language.</strong> A child in a Marathi-medium class writes science and maths answers with the Marathi technical words used in the textbook. A tutor who explains in English is fine, provided the written practice uses the words the examiner expects.</li>
    <li><strong>The language papers themselves.</strong> English, Marathi and Hindi are often the papers families forget until late. If a child's English or second-language marks lag, ask for a tutor who teaches the board's language paper, not just "spoken English". Our <a href="{{ url('/english-home-tutor-mumbai') }}">English home tutors in Mumbai</a> page covers this.</li>
  </ul>
  <p>
    In neighbourhoods with long-established Marathi and Gujarati communities, such as
    {!! $mhbA('vile-parle-east', 'Vile Parle East') !!} and {!! $mhbA('ghatkopar', 'Ghatkopar') !!}, it is often
    possible to find a tutor who is comfortable in both the medium of instruction and English.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mhb-streams">HSC streams and subject combinations in Classes 11 and 12</h2>
  <p>
    After the SSC, most State Board students move to a junior college for Classes 11 and 12. The board's HSC subject
    list does not name streams as such, but its subjects fall into the familiar Science, Commerce and Arts groups, and
    two subjects appear in each version: Mathematics and Statistics, and Information Technology. Every HSC student
    also takes two compulsory subjects, Health and Physical Education, and Environment Education and Water Security,
    along with languages.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Subjects on the board's HSC list, grouped by stream</caption>
    <thead>
      <tr><th scope="col">Stream</th><th scope="col">Subjects families most often ask a tutor for</th><th scope="col">Other options on the list</th></tr>
    </thead>
    <tbody>
      <tr><td>Science</td><td>Physics (54), Chemistry (55), Biology (56), Mathematics and Statistics (40)</td><td>Information Technology (Science), bifocal subjects such as Computer Science and Electronics</td></tr>
      <tr><td>Commerce</td><td>Book Keeping and Accountancy (50), Economics (49), Organisation of Commerce and Management (51), Maths and Statistics for Commerce (88)</td><td>Secretarial Practice (52), Co-operation (53), Information Technology (Commerce)</td></tr>
      <tr><td>Arts</td><td>Economics, History, Geography, Political Science, Psychology, Sociology</td><td>Logic, Philosophy, Mathematics and Statistics (40), Information Technology (Arts), literature papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Science students choose between maths and biology, or keep both; the choice matters later because the state's
    engineering and pharmacy entrance, MHT-CET, has a PCM group and a PCB group. Commerce students should know that
    the commerce version of maths and statistics is a different paper from the science one. For subject help, see
    <a href="{{ url('/physics-home-tutor-mumbai') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-mumbai') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-mumbai') }}">biology</a>,
    <a href="{{ url('/accountancy-home-tutor-mumbai') }}">accountancy</a> and
    <a href="{{ url('/economics-home-tutor-mumbai') }}">economics</a> home tutors in Mumbai, and our guide on
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mhb-hsc">How HSC papers are built: theory, practicals and internal marks</h2>
  <p>
    The board publishes an evaluation scheme for each HSC subject. The versions on its website, marked as applying
    from 2020-21, describe the papers below. Check the board's site for any later revision before your child's
    exam year.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Selected Standard XII schemes from the board's Evaluation page</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Board theory paper</th><th scope="col">Other marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics (54)</td><td>70 marks, 3 hours, four sections: one-mark MCQs and very short answers, then a choice of two-, three- and four-mark questions; log tables allowed, calculators not</td><td>Practical exam of 30 marks over 3 hours (pass mark 11): a long and a short experiment, an activity, a viva and the certified journal</td></tr>
      <tr><td>Biology (56)</td><td>Same question types as physics: MCQ, very short, two kinds of short answer, long answer</td><td>Practical work as set out in the board's scheme and Balbharati's practical handbook</td></tr>
      <tr><td>Mathematics and Statistics (40), Arts and Science</td><td>80 marks, 3 hours, four sections, with up to 15% theory questions</td><td>See the board's current scheme</td></tr>
      <tr><td>Book Keeping and Accountancy (50)</td><td>80-mark written paper</td><td>20-mark application-based test as internal assessment; the junior college also holds a 50-mark terminal exam</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The physics and biology schemes spread marks (with options) roughly 30% to knowledge, 42% to understanding and
    28% to application and skill, with about half the questions of average difficulty and a fifth difficult. In plain
    terms, recall alone covers less than a third of the paper. The physics scheme also expects at least three
    quarters of the experiments in the handbook to be done during the year, which is why a tidy, signed journal
    matters as much as the theory.
  </p>
  <p>
    The board publishes Class 11 schemes too, but the public HSC examination itself is taken at the end of Class 12. Sample question papers are on the board's site under the student login, and a tutor should be
    working from those rather than from guesswork.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mhb-other">How SSC and HSC differ from CBSE and ICSE in practice</h2>
  <p>
    Families in Mumbai often weigh a State Board school against a CBSE or ICSE one, or switch at Class 11. The
    differences that change how a tutor works are these:
  </p>
  <ul>
    <li><strong>Paper split.</strong> SSC maths is two 40-mark papers on separate days, and science is two activity sheets; CBSE Class 10 maths and science are single 80-mark papers with 20 internal marks. Pacing practice for one does not transfer neatly to the other.</li>
    <li><strong>Books and wording.</strong> SSC and HSC papers are written from the state's own textbooks, so examples and the order of chapters differ from NCERT or CISCE books even where the topic is the same.</li>
    <li><strong>Where Classes 11 and 12 happen.</strong> State Board students usually move to a junior college; CBSE and ISC students more often stay in one school. A new timetable and larger classes are why many families add a tutor in Class 11.</li>
    <li><strong>Switching in.</strong> A student joining the HSC from another board needs the board's eligibility verification, which the junior college arranges.</li>
    <li><strong>A second try.</strong> A student who has passed the SSC or HSC can sit again under the Class Improvement Scheme in the next three consecutive examinations, but must take all the original subjects again; picking one subject is not allowed.</li>
  </ul>
  <p>
    If your child is on another board, our <a href="{{ url('/cbse-home-tutor-mumbai') }}">CBSE</a>,
    <a href="{{ url('/icse-home-tutor-mumbai') }}">ICSE and ISC</a>, <a href="{{ url('/ib-tutor-mumbai') }}">IB</a>
    and <a href="{{ url('/igcse-tutor-mumbai') }}">IGCSE</a> pages for Mumbai cover those papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mhb-plan">How a home tutor helps from Class 9 to the HSC</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A State Board tuition plan, stage by stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What the tutor concentrates on</th><th scope="col">Typical rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9</td><td>Both maths parts and both science parts from the start; written answers in the textbook's terms; the first assignments and practicals done properly</td><td>Two sessions a week</td></tr>
      <tr><td>Class 10 (SSC)</td><td>Activity-sheet practice by question type, timed 2-hour papers, the board's sample papers, steady revision of social sciences and languages</td><td>Two or three sessions a week</td></tr>
      <tr><td>Class 11 (junior college)</td><td>Settling into new subjects, especially maths and physics or accountancy; unit tests and the college's own exams</td><td>One per subject, often two</td></tr>
      <tr><td>Class 12 (HSC)</td><td>Full-length theory papers, the practical journal, viva practice, and, for science students, a plan that also covers MHT-CET, JEE or NEET</td><td>Two per core subject in the final months</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The HSC science subjects overlap with the state's entrance test, which draws on the state syllabus for Classes 11
    and 12. If your child is aiming at engineering or pharmacy in Maharashtra, read our
    <a href="{{ url('/mht-cet-tutor-mumbai') }}">MHT-CET tutors in Mumbai</a> page; for national entrances, see
    <a href="{{ url('/jee-home-tutor-mumbai') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-mumbai') }}">NEET</a>
    home tutors in Mumbai. For Class 10 science, our <a href="{{ url('/science-home-tutor-mumbai') }}">science home
    tutors in Mumbai</a> page has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mhb-zones">Where State Board tutors travel from, zone by zone</h2>
  <p>
    A weekly tutor has to be able to repeat the journey, so we match along rail and metro lines first. Notes from our
    zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/mumbai/zone/south-mumbai') }}">South Mumbai</a>:</strong> Churchgate, CSMT and Mumbai Central are the old ways in, and Line 3 now runs right down to Cuffe Parade.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/worli-dadar-central-mumbai') }}">Worli, Dadar and Central Mumbai</a>:</strong> {!! $mhbA('sion', 'Sion') !!} sits on the Central line between Matunga and Kurla, so tutors living along that line can come straight in.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/bandra-khar-santacruz') }}">Bandra, Khar and Santacruz</a>:</strong> stations here serve both the Western and Harbour lines, which widens the pool.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/vile-parle-juhu') }}">Vile Parle and Juhu</a>:</strong> long known as an education centre, so tutors for board subjects often live a few lanes away.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/andheri-jogeshwari') }}">Andheri and Jogeshwari</a>:</strong> in {!! $mhbA('jogeshwari-west', 'Jogeshwari West') !!}, Line 2A's Oshiwara stations bring tutors in, with an auto for the inner lanes.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/goregaon-malad') }}">Goregaon and Malad</a>:</strong> {!! $mhbA('goregaon-west', 'Goregaon West') !!} is mostly cooperative societies, reached by train or the Link Road metro.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/kandivali-borivali-dahisar') }}">Kandivali, Borivali and Dahisar</a>:</strong> Line 7's Poisar and Akurli stations serve {!! $mhbA('kandivali-east', 'Kandivali East') !!}, and {!! $mhbA('dahisar-east', 'Dahisar East') !!} is where Lines 2A and 7 meet.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/chembur-ghatkopar-powai') }}">Chembur, Ghatkopar and Powai</a>:</strong> {!! $mhbA('vikhroli', 'Vikhroli') !!} is on the Central line, and the link road gives a direct route from the western suburbs.</li>
    <li><strong>Bhandup and Mulund:</strong> Bhandup, Nahur and Mulund stations on the Central line, plus the bridge from Airoli by road.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/thane') }}">Thane</a>:</strong> {!! $mhbA('thane-east', 'Thane East') !!} is a short walk or auto from Thane station; the Ghodbunder belt has no suburban rail, so local tutors are the practical choice there.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/navi-mumbai') }}">Navi Mumbai</a>:</strong> {!! $mhbA('airoli', 'Airoli') !!} is on the Trans-Harbour line, so tutors from Thane come by train; give your sector number with the request.</li>
  </ul>
  <p>
    Our zone guides go further: <a href="{{ url('/blog/south-and-central-mumbai-tuition-guide') }}">South and
    Central Mumbai</a>, <a href="{{ url('/blog/mumbai-western-suburbs-tuition-guide') }}">the western suburbs</a>,
    <a href="{{ url('/blog/mumbai-central-suburbs-tuition-guide') }}">the central suburbs</a> and
    <a href="{{ url('/blog/thane-and-navi-mumbai-tuition-guide') }}">Thane and Navi Mumbai</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mhb-mode">Home tuition, online, or both?</h2>
  <p>
    For SSC maths and science, a tutor in the room can watch a geometry construction or a science diagram being drawn
    and correct it on the spot, which suits the activity-sheet style. In junior college, when a student already
    spends long hours travelling to college and perhaps to coaching, one home session and one shorter online session
    a week is often easier to keep. Online is also the fallback when heavy rain stops the trains. Our comparison of
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a> sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mhb-demo">Questions to ask at a Maharashtra Board demo</h2>
  <ol>
    <li><strong>Which papers have you taught recently?</strong> SSC, HSC Science, HSC Commerce or Arts; a good HSC physics tutor may not be the right SSC science tutor.</li>
    <li><strong>Can you teach in my child's medium?</strong> Ask to see an answer written with the textbook's terms.</li>
    <li><strong>Show me an activity-sheet question.</strong> For SSC science, ask the tutor to take one "give scientific reasons" item from the board's sample paper and teach it.</li>
    <li><strong>How will you handle internal and practical work?</strong> Assignments, the practical journal and projects should be guided, never written for the student.</li>
    <li><strong>What is the plan for entrances?</strong> For HSC science, ask how board preparation and MHT-CET or JEE/NEET practice will share the week.</li>
    <li><strong>The route.</strong> Which line, which station, and what happens on a heavy-rain day?</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching
    tutor later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>
    before their profile goes live. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> has more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mhb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">home
    tuition fees in Mumbai</a>.
  </p>
  <p>
    Tell us the standard, the stream, the medium, your station or node and the slots that work; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. You can also browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>, or, if you teach State Board subjects, see <a href="{{ url('/tuition-jobs/mumbai') }}">tuition jobs
    in Mumbai</a>.
  </p>
  </section>

  </div>
</article>
