{{--
  Board hub: "Odisha Board tutor Bhubaneswar" (BSE Odisha, Class 10 Annual HSC
  examination; CHSE Odisha, +2 Classes 11-12). Author: nxtutors (NXTutors
  Academic Team). No school, college, coaching, hospital, society or people
  names. No candidate counts, results or dates beyond the current official
  documents.

  Official sources (read 3 Oct 2026):
  BSE Odisha, bseodisha.ac.in
  - Home page: name "Board of Secondary Education, Odisha"; Acts menu lists The
    Orissa Secondary Education Act 1953 (also 1979, 1996); examinations menu:
    HSC, Madhyama, OTET and others; Class IX and Class X text book pages;
    question-paper download link for the Annual Class IX, HSC and Madhyama
    Examination; notices for the supplementary HSC examination, checking of
    addition of marks of objective and subjective answer books, digitised HSC
    certificates through a WhatsApp chatbot.
  - images12/Subject_wise_syllabus_class_X_26_27.pdf ("Board of Secondary
    Education, Odisha, Cuttack", syllabus for session 2026-27): subjects
    English (SLE; texts "Skills of Communicative English", "Learn and Practice
    Grammar"), Odia (FLO), Mathematics (MTH), General Science (GSC), Social
    Science (SSC), third languages Hindi, Sanskrit, Odia, Persian, first
    languages Bengali, Urdu, English, Telugu, Hindi, second language Hindi,
    Environment & Population Education; Term I and Term II; IA-1 to IA-4 of 10
    marks each; an Aspirational Component of 20 marks in each term; Half-yearly
    Examination (100) and Annual Examination (100); revision weeks before the
    annual examination. The maths and science pages are printed in Odia.
  - images12/scoringKey2026.pdf: objective scoring keys for the A.H.S.C.
    Examination 2026 (Class X); keys run to question 50 in each subject; FLO,
    SLE, TLH, TLS and MTH keys in four sets (A-D).
  CHSE Odisha, chseodisha.nic.in
  - /about_us/: autonomous body under the School and Mass Education
    Department; prepares the syllabus, conducts examinations and publishes
    results of +2 students, and handles affiliation; established under the
    Odisha Higher Secondary Education Act 1982; administrative work began on
    7 September 1982; own building at Samantapur, Bhubaneswar ("Prajnapitha")
    since 2 January 1996; zonal offices.
  - /syllabus/: +2 Arts, Science and Commerce syllabi; vocational and
    integrated vocational courses; rationalised 2023 Biology, Chemistry,
    Mathematics, Physics; menus for academic calendar, free textbooks,
    examination pattern, distance education study materials, equivalent boards.
  - science_2016.pdf: four electives in addition to the compulsory English,
    M.I.L. and Environment Education, Yoga and Basic Computer Education;
    English book "Invitation to English" 1-4, published by the Odisha State
    Bureau of Text Book Preparation and Production.
  - Mathematics-CHSE-2023-F.pdf: Class XII one paper 80 marks, 3 hours, + 20
    internal (periodic tests, higher two of three, 10; activities 10); units
    relations and functions 8, algebra 10, calculus 35, vectors and 3-D 14,
    linear programming 5, probability 8; 33% internal choice.
  - Physics-CHSE-2023.pdf: theory 70, 3 hours; practical 30; at least 8
    experiments. Chemistry-CHSE-2023.pdf: theory 70; practical 30; Class XII
    electrochemistry 9 marks (largest unit); practical book from the Odisha
    State Bureau of Text Book Preparation and Production.
  - Biology-CHSE-2023.pdf: botany 35 and zoology 35, 1.5 hours each; pattern
    MCQ 5, fill in the blank 5, short notes 10, differentiate 5, long 10.
  OJEE, ojee.nic.in: committee under the Skill Development and Technical
  Education Department holding common entrance examinations and counselling for
  professional courses in Odisha. No dates used.
  Local detail only from database/seo-content/areas/bhubaneswar-research.json.
  Fee wording is the approved sentence. FAQs render from
  faqs/odisha-board-tutor-bhubaneswar.php. Area links render only for active areas.
--}}
@php
  $bbodSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $bbodA = function (string $slug, string $label) use ($bbodSlugs) {
      return in_array($slug, $bbodSlugs, true)
          ? '<a href="' . e(url('/city/bhubaneswar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="bbodGuideTitle">
  <h2 id="bbodGuideTitle">Odisha Board tutors in Bhubaneswar: BSE for Class 10, CHSE for the +2 years</h2>

  <p class="nx-guide__lede">
    "Odisha Board" is really two bodies. The Board of Secondary Education, Odisha, usually called BSE Odisha, conducts
    the Annual High School Certificate examination at the end of Class 10; its documents carry a Cuttack address. The
    Council of Higher Secondary Education, Odisha, known as CHSE, sets the syllabus and conducts the examinations for
    the two +2 years, Classes 11 and 12, and its office is in Bhubaneswar. A tutor who helps a student through the state
    system needs to know how each body plans its year, what papers look like, and where the official material lives.
    Everything on this page about marks, terms and papers comes from bseodisha.ac.in and chseodisha.nic.in. Check both
    sites again before your child's examination year, because schemes change and notices are posted there first.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#bbod-two">Two bodies</a> ·
    <a href="#bbod-year">The Class 10 year</a> ·
    <a href="#bbod-hsc">The HSC examination</a> ·
    <a href="#bbod-lang">Odia, English and medium</a> ·
    <a href="#bbod-plus2">The +2 course</a> ·
    <a href="#bbod-papers">+2 science papers</a> ·
    <a href="#bbod-res">Free material</a> ·
    <a href="#bbod-plan">Class 9 to 12 plan</a> ·
    <a href="#bbod-after">Entrance exams</a> ·
    <a href="#bbod-zones">Travel</a> ·
    <a href="#bbod-demo">Demo</a> ·
    <a href="#bbod-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="bbod-two">BSE Odisha and CHSE Odisha: who does what</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The two state bodies a Bhubaneswar student meets, from their own websites</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">BSE Odisha</th><th scope="col">CHSE Odisha</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes</td><td>Secondary stage, with the public examination in Class 10</td><td>The +2 stage, Classes 11 and 12</td></tr>
      <tr><td>Public examination</td><td>Annual HSC examination, with a supplementary examination later in the year</td><td>The +2 examinations</td></tr>
      <tr><td>Legal basis named on the site</td><td>The Orissa Secondary Education Act, 1953, with later acts</td><td>The Odisha Higher Secondary Education Act, 1982</td></tr>
      <tr><td>Streams or schemes</td><td>A common subject list for Class 10, plus the Madhyama examination in the Sanskrit stream</td><td>Arts, Science and Commerce, plus vocational courses</td></tr>
      <tr><td>Official site</td><td>bseodisha.ac.in</td><td>chseodisha.nic.in</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The council describes itself as an autonomous body under the state's School and Mass Education Department. It
    prepares the syllabus, conducts the examinations, publishes results for +2 students and handles affiliation. Its
    administrative work began in September 1982, and it has worked from its own building at Samantapur in Bhubaneswar
    since 1996.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbod-year">How the BSE Class 10 year is laid out</h2>
  <p>
    The board's subject-wise syllabus for session 2026-27 divides each Class 10 subject into two terms and attaches
    assessments to each. The shape is the same across subjects.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>BSE Odisha Class 10, session 2026-27, as the board's syllabus sets it out</caption>
    <thead>
      <tr><th scope="col">Term</th><th scope="col">Assessment</th><th scope="col">Marks</th><th scope="col">Timing in the syllabus</th></tr>
    </thead>
    <tbody>
      <tr><td>Term I</td><td>Internal assessments IA-1 and IA-2</td><td>10 each</td><td>Early and late in the first months of the session</td></tr>
      <tr><td>Term I</td><td>Aspirational component</td><td>20</td><td>Towards the end of the term</td></tr>
      <tr><td>Term I</td><td>Half-yearly examination</td><td>100</td><td>Early in the second half of the year</td></tr>
      <tr><td>Term II</td><td>Internal assessments IA-3 and IA-4</td><td>10 each</td><td>Late autumn and early winter</td></tr>
      <tr><td>Term II</td><td>Aspirational component</td><td>20</td><td>Early in the new calendar year</td></tr>
      <tr><td>Term II</td><td>Revision, then the annual examination</td><td>100</td><td>Revision weeks lead into the annual examination at the end of the session</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Each internal assessment covers named chapters, so the syllabus doubles as a calendar. A tutor can read it at the
    start of the year, list which chapters must be finished before each IA, and check the school notebook against that
    list every month. How these marks feed into the final certificate is decided by the board; ask the school for the
    current rule rather than guessing. The precise weeks for each assessment are printed in the syllabus file on
    bseodisha.ac.in.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbod-hsc">What the board publishes about the HSC examination</h2>
  <ul>
    <li><strong>Objective answers have their own scoring key.</strong> After the 2026 annual HSC examination the board posted objective scoring keys for each subject, each running to 50 questions, with some subjects, including mathematics, set in four versions marked A to D. Practise objective questions at speed, and never assume the neighbour's paper is the same.</li>
    <li><strong>Objective and subjective answer books.</strong> The board's notice on checking the addition of marks refers to both, so expect a paper with an objective part and a written part.</li>
    <li><strong>Past papers.</strong> The site links to question papers for the annual Class 9, HSC and Madhyama examinations. These are the most reliable practice material there is.</li>
    <li><strong>A second chance.</strong> A supplementary HSC examination is held after the annual one, and the board publishes notices for checking the addition of marks.</li>
    <li><strong>Certificates.</strong> The board has announced digitised HSC certificates, including access through a WhatsApp chatbot; follow its instructions on the site.</li>
  </ul>
  <p>
    The precise split between objective and written questions in each subject is not something we will guess. Take it
    from the current model or sample papers on bseodisha.ac.in, or from the school.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbod-lang">Odia, English and the medium of study</h2>
  <p>
    In the board's Class 10 subject list, Odia is the first language and English the second, and the list also offers
    first-language papers in Bengali, Urdu, English, Telugu and Hindi, third languages including Hindi and Sanskrit, and
    Environment and Population Education. The English syllabus names two textbooks, <em>Skills of Communicative
    English</em> and <em>Learn and Practice Grammar</em>. The maths and science pages of the 2026-27 syllabus are printed
    in Odia.
  </p>
  <p>
    For families this means three things. Tell us which medium your child writes the paper in, so we match a tutor who
    can teach the technical terms in that language. If your child is weak in Odia or English as a language subject, ask
    for a tutor who teaches that paper, not general conversation; our
    <a href="{{ url('/english-home-tutor-bhubaneswar') }}">English home tutors in Bhubaneswar</a> page covers the English
    side. And if a student will move to an English-medium +2 or CBSE course after Class 10, start a bilingual list of
    maths and science terms in Class 9.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbod-plus2">The +2 course under CHSE</h2>
  <p>
    The council publishes separate syllabi for +2 Arts, Science and Commerce, as well as a long list of vocational and
    integrated vocational courses. Its +2 Science syllabus document explains that each student reads four elective
    subjects in addition to the compulsory papers: English, an M.I.L. (a modern Indian language such as Odia, or
    Alternative English), and Environment Education, Yoga and Basic Computer Education. The English course uses
    <em>Invitation to English</em>, Books 1 to 4, published by the state's textbook bureau.
  </p>
  <p>
    In Science, the electives a tutor is most often asked for are physics, chemistry, mathematics and biology. In
    Commerce the council's syllabus includes a business studies and management paper among its electives, and in Arts
    the usual humanities subjects. For single-subject help, see our Bhubaneswar pages for
    <a href="{{ url('/maths-home-tutor-bhubaneswar') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-bhubaneswar') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-bhubaneswar') }}">chemistry</a> and
    <a href="{{ url('/biology-home-tutor-bhubaneswar') }}">biology</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbod-papers">The +2 science papers in the council's own files</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CHSE Class 12 science subjects, from the rationalised 2023 syllabus files</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Papers and marks</th><th scope="col">What it means for a tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>One three-hour paper of 80, plus 20 internal: periodic tests (the higher two of three count) and maths activities</td><td>Calculus carries 35 of the 80 marks and vectors with three-dimensional geometry 14; spend the time there. Internal choice covers about a third of the paper, with no overall choice</td></tr>
      <tr><td>Physics</td><td>Theory paper of 70 in three hours; practical of 30</td><td>At least eight experiments are required in the year, with a practical record submitted at the annual examination</td></tr>
      <tr><td>Chemistry</td><td>Theory paper of 70 in three hours; practical of 30</td><td>In Class 12, electrochemistry is the largest single unit; the practical book comes from the state textbook bureau</td></tr>
      <tr><td>Biology</td><td>Botany and zoology papers of 35 marks each, an hour and a half each, plus practicals</td><td>Each paper mixes five multiple-choice items, five one-word answers, short notes, "differentiate between" questions and two long answers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The council's mathematics file also lists NCERT's textbooks and exemplar books for Classes 11 and 12, which makes the
    content close to what national entrance syllabi assume. The difference lies in the paper: the council's maths
    design puts a little over half the marks on remembering and understanding, so a student who also sits an entrance
    exam needs extra practice in applying ideas to unseen problems.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbod-res">Free material on the two official sites</h2>
  <p>
    A careful Odisha Board tutor starts from the bodies' own documents and uses guidebooks only after that.
  </p>
  <ul>
    <li><strong>BSE Odisha:</strong> the subject-wise syllabus for Classes 9 and 10 (with the assessment calendar), the textbook pages for Classes 9 and 10, past question papers for the annual examinations, scoring keys for objective questions, and a Class 10 English teaching video.</li>
    <li><strong>CHSE Odisha:</strong> the +2 syllabi by stream and subject, an academic calendar, an examination pattern page, free textbook information, distance-education study materials, and the list of equivalent boards.</li>
  </ul>
  <p>
    Ask any tutor you meet which of these they have opened for your child's class. A tutor who has read the current
    syllabus file can tell you what is due before the next internal assessment without looking it up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbod-plan">A tutor's plan from Class 9 to the +2 examination</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How Odisha Board tuition usually changes stage by stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Focus of the sessions</th><th scope="col">Usual rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9</td><td>Algebra and geometry groundwork; science terms in the paper's language; the annual Class 9 examination's past papers</td><td>Two a week</td></tr>
      <tr><td>Class 10</td><td>Chapters finished before each IA; objective practice at speed; written answers for the subjective part; past HSC papers in the revision weeks</td><td>Two or three a week</td></tr>
      <tr><td>+2 first year</td><td>The new electives; for science, mechanics and calculus groundwork; practical work started properly</td><td>One or two per subject</td></tr>
      <tr><td>+2 second year</td><td>Unit weights guiding revision; full timed papers; practical records; entrance preparation alongside if planned</td><td>Two per core subject before the examinations</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbod-after">Entrance exams alongside the +2</h2>
  <p>
    Science students aiming at engineering or medicine prepare for national entrance examinations in parallel with the
    council's papers; see <a href="{{ url('/jee-home-tutor-bhubaneswar') }}">JEE home tutors</a> and
    <a href="{{ url('/neet-home-tutor-bhubaneswar') }}">NEET home tutors</a> in Bhubaneswar. Within the state, the Odisha
    Joint Entrance Examination committee, under the Skill Development and Technical Education Department, holds common
    entrance examinations and counselling for admission to a range of professional courses. Read the current brochure
    on ojee.nic.in for which courses it covers. Students from CBSE or ICSE schools have their own pages:
    <a href="{{ url('/cbse-home-tutor-bhubaneswar') }}">CBSE</a> and
    <a href="{{ url('/icse-home-tutor-bhubaneswar') }}">ICSE and ISC</a>. The guide to
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> helps at the Class 10 crossroads.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbod-zones">How tutors reach each part of Bhubaneswar</h2>
  <p>
    There is no metro running in Bhubaneswar. Tutors ride, drive, take a city bus, or come by train and finish by auto,
    so we match by side of the city first. Notes from our locality research:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/bhubaneswar/zone/north-bhubaneswar-patia-chandrasekharpur') }}">North</a>:</strong> {!! $bbodA('sailashree-vihar', 'Sailashree Vihar') !!} is a planned colony of numbered plots, so a plot number and landmark find the door; roads towards the IT offices are busy at office hours.</li>
    <li><strong><a href="{{ url('/city/bhubaneswar/zone/central-east-bhubaneswar-saheed-nagar-rasulgarh') }}">Central and East</a>:</strong> {!! $bbodA('laxmisagar', 'Laxmisagar') !!} sits on the Cuttack-Puri road between Rasulgarh and Kalpana squares, with easy autos for tutors who do not drive.</li>
    <li><strong><a href="{{ url('/city/bhubaneswar/zone/west-bhubaneswar-nayapalli-jaydev-vihar') }}">West</a>:</strong> {!! $bbodA('baramunda', 'Baramunda') !!}, home to the state's largest bus terminal, is easy to reach by bus; give a landmark away from the terminal gate.</li>
    <li><strong><a href="{{ url('/city/bhubaneswar/zone/south-bhubaneswar-old-town-bapuji-nagar') }}">South</a>:</strong> {!! $bbodA('bapuji-nagar', 'Bapuji Nagar') !!}, Unit 1 of the planned capital, is close to Bhubaneswar station; in {!! $bbodA('old-town', 'Old Town') !!} the inner lanes suit a two-wheeler, and temple festival days are better online.</li>
    <li><strong><a href="{{ url('/city/bhubaneswar/zone/south-west-bhubaneswar-khandagiri-patrapada') }}">South-West</a>:</strong> {!! $bbodA('kalinga-nagar', 'Kalinga Nagar') !!} has multi-storey buildings that check visitors, so share the sector, building and floor in advance.</li>
  </ul>
  <p>
    Every locality is on the <a href="{{ url('/city/bhubaneswar') }}">Bhubaneswar home tutors</a> page, and the
    <a href="{{ url('/blog/bhubaneswar-home-tuition-guide') }}">Bhubaneswar home tuition guide</a> goes zone by zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbod-mode">Home, online, or both?</h2>
  <p>
    In Classes 9 and 10, a tutor at the table can watch a geometry construction or a balanced equation being written
    and stop an error before it sets, which suits the state syllabus's step-by-step written answers. In the +2 years,
    when practicals and perhaps entrance coaching fill the week, one home session plus one online session is often
    easier to sustain. Online also covers festival days and evenings when the roads are slow. The
    <a href="{{ url('/online-tutor-bhubaneswar') }}">online tutors for Bhubaneswar</a> page explains the set-up, and our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> comparison sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbod-demo">Questions to ask at an Odisha Board demo</h2>
  <ol>
    <li><strong>Which classes and subjects have you taught under BSE or CHSE?</strong> Class 10 maths and +2 physics are different jobs.</li>
    <li><strong>Have you read this session's syllabus file?</strong> Ask which chapters fall before the next internal assessment.</li>
    <li><strong>How will you prepare the objective part?</strong> Listen for timed practice and past papers from the board's site.</li>
    <li><strong>Which language will written practice use?</strong> It should match the paper your child will sit.</li>
    <li><strong>How will you support practical records and activities?</strong> Guided and checked, never written for the student.</li>
    <li><strong>What is your route?</strong> Which road or station, and what happens on a festival day or a slow evening?</li>
  </ol>
  <p>
    We send two or three matched tutors and show each one's fee before the demo; the first class is free, and changing
    tutor later costs nothing. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>
    before their profile is marked Verified. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> has more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbod-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fees. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-bhubaneswar') }}">home tuition fees in Bhubaneswar</a>.
  </p>
  <p>
    Tell us the class, the stream for the +2 years, the medium of the paper, your locality and a landmark, and the slots
    that suit you. The first class is a <a href="{{ url('/demo-class') }}">free demo</a>, and you can browse
    <a href="{{ url('/tutors') }}">tutor profiles</a> any time. If you teach BSE or CHSE subjects, see
    <a href="{{ url('/tuition-jobs/bhubaneswar') }}">tuition jobs in Bhubaneswar</a>.
  </p>
  </section>

  </div>
</article>
