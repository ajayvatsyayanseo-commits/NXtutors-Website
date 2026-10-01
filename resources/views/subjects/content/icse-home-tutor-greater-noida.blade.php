{{--
  Board page for "ICSE home tutor Greater Noida" (CISCE: ICSE Class 10 and ISC
  Class 12). Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths),
  Aaditya Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths). No anecdotes, years or results are claimed for any of
  them. No schools, coaching institutes, societies, developers or people are
  named (area labels such as "Shahberi" are locality names from
  greater-noida-research.json).

  Board facts reworded from the Gurgaon board hub (icse-home-tutor-gurgaon),
  which cites (cisce.org, read 1 Oct 2026):
  - ICSE Regulations, Year 2027: Group I compulsory (English, a second
    language, History, Civics & Geography), Group II two or three (Mathematics,
    Science, Economics, Commercial Studies, a modern foreign or classical
    language, Environmental Science), 80% external / 20% internal; Group III
    one subject (Computer Applications, Economic Applications, Commercial
    Applications, Art, Physical Education, Robotics and AI and others),
    50% / 50%.
  - ICSE Mathematics (51), Year 2027 syllabus: one 3-hour paper of 80 marks
    plus 20 marks internal assessment; at least two assignments, assessed
    independently by the subject teacher and an external examiner.
  - ICSE Science (52) Physics, Chemistry, Biology, Year 2028 syllabuses: each
    one 2-hour paper of 80 marks plus 20 marks internal assessment of
    practical work.
  - ICSE Analysis of Pupil Performance (CISCE publishes these subject by
    subject).
  - ISC Regulations: English compulsory with three, four or five electives, no
    more than six subjects; subjects with practical papers need the practical
    exam; no Class XII subject not studied in Class XI; no change of subject
    after 15 September of the Class XI year; promotion to XII needs 35% in four
    subjects including English and 75% attendance; grades 1 to 9; pass
    certificate needs four or more subjects including English, plus SUPW and
    Community Service; Physics cannot be combined with Engineering Science.
  - ISC Mathematics (860), Year 2027: Paper I theory, 3 hours, 80 marks, and
    Paper II project work, 20 marks, in Class XI and Class XII.
  State board described only in general terms, as the Greater Noida hub does
  (UPMSP: High School and Intermediate; paper pattern and medium can differ).
  Local detail only from database/seo-content/areas/greater-noida-research.json,
  greater-noida-zone-guides.json, zones/greater-noida.json and the Greater
  Noida hub view. No claim that any board's families live in any one area.
  Fee wording is the approved NXTutors sentence. FAQs render from
  faqs/icse-home-tutor-greater-noida.php. Area links render only for active
  Greater Noida areas.
--}}
@php
  $ignSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ignA = function (string $slug, string $label) use ($ignSlugs) {
      return in_array($slug, $ignSlugs, true)
          ? '<a href="' . e(url('/city/greater-noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ign-guide" aria-labelledby="ignGuideTitle">
  <h2 id="ignGuideTitle">ICSE and ISC home tutors in Greater Noida: papers, subject rules and realistic timetables</h2>

  <p class="nx-guide__lede">
    An ICSE student in Greater Noida usually needs a tutor for one of three reasons: too many separate papers in
    Class 10, written answers that know the content but lose marks on expression, or a hard step up into ISC
    electives. This page explains how CISCE structures both exams, how the style differs from CBSE and the UP Board,
    which subjects families ask about, and how to fit sessions around the city's traffic. It is written by Abhinandan
    Tiwary, who covers Class 10 CBSE and ICSE maths, and Aaditya Kashyap, who covers CBSE and ICSE science; the ISC
    sections are by Ajay Vatsyayan, who covers IB, IGCSE and ISC maths.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ign-mix">ICSE in Greater Noida</a> ·
    <a href="#ign-style">Compared with UP Board and CBSE</a> ·
    <a href="#ign-groups">Class 10 subject groups</a> ·
    <a href="#ign-papers">Maths and science papers</a> ·
    <a href="#ign-isc">ISC rules</a> ·
    <a href="#ign-years">Year by year</a> ·
    <a href="#ign-subjects">Subjects</a> ·
    <a href="#ign-session">A good session</a> ·
    <a href="#ign-zones">Timing by zone</a> ·
    <a href="#ign-mode">Home or online</a> ·
    <a href="#ign-demo">Demo checklist</a> ·
    <a href="#ign-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ign-mix">ICSE and ISC in Greater Noida's board mix</h2>
  <p>
    Greater Noida families study under the boards seen across the NCR. CBSE has the most students, ICSE and ISC are a
    sizeable second group, and a smaller number follow the IB or Cambridge IGCSE, with the UP Board (UPMSP) also
    present because the city is in Uttar Pradesh. With CBSE the larger board, ICSE tutors are usually fewer, and ISC
    subject specialists fewer again, so it pays to give us the exact class, subjects and papers from the start.
    Families on other boards can use our <a href="{{ url('/cbse-home-tutor-greater-noida') }}">CBSE</a>,
    <a href="{{ url('/ib-tutor-greater-noida') }}">IB</a> and <a href="{{ url('/igcse-tutor-greater-noida') }}">IGCSE</a>
    pages for Greater Noida.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-style">How the CISCE style differs from the UP Board and CBSE</h2>
  <p>
    The UP Board's High School and Intermediate exams and CBSE's papers both sit close to the NCERT-based syllabus, so
    a tutor used to either knows much of the maths and science content. CISCE asks for something different in the
    answer itself: longer written responses, every step of working shown, and English that is precise across subjects
    such as History and Geography, not only in English papers. The papers are set by CISCE, and its specimen papers and
    examiners' comments are the reference, not a state or CBSE sample paper.
  </p>
  <p>
    So a tutor who has mostly taught state-board or CBSE students can know the chapter and still miss what an ICSE
    examiner credits. Ask which ICSE or ISC papers they have taught recently, and whether they read CISCE's Analysis of
    Pupil Performance, the subject-by-subject reports on where candidates lost marks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-groups">ICSE Class 10: three subject groups, two marking splits</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How the CISCE regulations group ICSE subjects</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">What the student takes</th><th scope="col">Exam and internal</th><th scope="col">Tuition angle</th></tr>
    </thead>
    <tbody>
      <tr><td>I</td><td>Compulsory for everyone: English, History, Civics and Geography, and a second language</td><td>80 / 20</td><td>Long written answers; language precision counts everywhere</td></tr>
      <tr><td>II</td><td>A choice of two or three, from Mathematics, Science, Commercial Studies, Economics, Environmental Science or a modern foreign or classical language</td><td>80 / 20</td><td>Maths and science usually need the most weekly practice</td></tr>
      <tr><td>III</td><td>Exactly one subject from a list that includes Art, Computer Applications, Physical Education, Robotics and AI, and Commercial or Economic Applications</td><td>50 / 50</td><td>Half the marks come from coursework done through the year</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-papers">The ICSE maths and science papers</h2>
  <p>
    <strong>Mathematics</strong> is one three-hour paper worth 80 marks, plus 20 internal marks from at least two
    assignments that the subject teacher and an external examiner each assess separately. Commercial topics such as
    banking and shares sit beside algebra, geometry, trigonometry and statistics, and method carries marks, so
    skipped steps cost even when the final answer is right.
  </p>
  <p>
    <strong>Science</strong> is examined as three separate papers. Physics, Chemistry and Biology each get two hours
    and 80 marks, and practical work in each is worth a further 20 internal marks. A child can be comfortable with physics numericals and still lose ground on
    biology diagrams or balanced equations, so ask whether a science tutor teaches all three with equal confidence. For
    more on the maths paper, see our <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths
    guide</a>, and for English, the <a href="{{ url('/blog/icse-class-10-english-papers') }}">ICSE Class 10 English
    papers guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-isc">ISC Classes 11 and 12: the rules that shape planning</h2>
  <p>
    English is the only compulsory ISC subject. Around it a student builds a set of three to five electives, and the
    total can never go above six. The regulations contain several rules a family should know before choosing:
  </p>
  <ul>
    <li><strong>Choices lock in early.</strong> Once 15 September of the year a student registers for Class 11 has passed, the subject list is final, and nothing new can be started in Class 12.</li>
    <li><strong>Class 11 matters.</strong> Moving up needs at least 35% in four subjects including English, and 75% attendance.</li>
    <li><strong>No skipping practicals.</strong> A subject with a practical component is incomplete without that exam.</li>
    <li><strong>Not every pairing is allowed.</strong> Physics, for instance, cannot be combined with Engineering Science.</li>
    <li><strong>Grades run 1 to 9.</strong> To be certified, a candidate passes English and at least three other subjects, and also clears Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    In ISC Mathematics, 80 marks come from a three-hour theory paper and 20 from project work, in Class 11 and again in Class 12. See our
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page and the
    <a href="{{ url('/blog/isc-class-12-english-literaturelanguage') }}">ISC Class 12 English guide</a>. For the board in
    more detail, our <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE home tutor guide for Gurgaon</a> explains how
    CISCE works paper by paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-years">The CISCE route year by year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>From middle school to ISC: who assesses, and the warning sign to watch for</caption>
    <thead>
      <tr><th scope="col">Years</th><th scope="col">Who assesses</th><th scope="col">Warning sign</th><th scope="col">What tuition should do</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 to 8</td><td>The school</td><td>Short, careless answers; maths done in the head</td><td>Build written habits: full steps, labelled diagrams, paragraphs</td></tr>
      <tr><td>Class 9</td><td>The school, on a syllabus that runs across Classes 9 and 10</td><td>Falling behind in one of many subjects</td><td>A weekly plan across papers, with maths and science first</td></tr>
      <tr><td>Class 10</td><td>CISCE papers plus internal marks</td><td>Good marks in tests, poor marks on full papers</td><td>Timed specimen papers, examiner reports, one subject at a time</td></tr>
      <tr><td>Class 11</td><td>The school, with promotion rules</td><td>A weak elective nobody addresses before the September cut-off</td><td>Early repair, and an honest view on subject choice</td></tr>
      <tr><td>Class 12</td><td>ISC theory, practical and project work</td><td>Practical file and project left late</td><td>Depth in electives, with deadlines planned backwards</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-subjects">Which ICSE and ISC subjects families ask for</h2>
  <p>
    Maths and the three sciences lead the list for ICSE, then English and History, Civics and Geography for
    students whose answers need structure. In ISC, requests narrow to the electives: maths, physics, chemistry and
    biology on the science side, and accounts, commerce and economics on the commerce side.
  </p>
  <ul>
    <li><strong>Maths:</strong> <a href="{{ url('/maths-home-tutor-greater-noida') }}">maths home tutors in Greater Noida</a>, plus <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> and <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths</a>.</li>
    <li><strong>The sciences:</strong> <a href="{{ url('/science-home-tutor-greater-noida') }}">science</a>, <a href="{{ url('/physics-home-tutor-greater-noida') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-greater-noida') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-greater-noida') }}">biology</a> tutors in Greater Noida; for ISC, <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics</a> and <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry</a>, matched to ISC when you ask.</li>
    <li><strong>English language and literature:</strong> <a href="{{ url('/english-home-tutor-greater-noida') }}">English home tutors in Greater Noida</a>; tell us the set texts.</li>
    <li><strong>Entrance alongside ISC:</strong> <a href="{{ url('/jee-home-tutor-greater-noida') }}">JEE</a> or <a href="{{ url('/neet-home-tutor-greater-noida') }}">NEET</a> home tutors.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-session">What a strong ICSE session includes</h2>
  <p>
    Because CISCE marks the way an answer is written, the session should give real time to writing. Start with two or
    three questions the student attempted alone, corrected line by line for missing steps, units, labels and unclear
    sentences. Then teach the next topic from the textbook and extend it with specimen-paper questions. Finish with
    one answer written out under time. For ISC sciences, leave room each week for the practical: recording readings,
    drawing the right graph and writing a conclusion an examiner can credit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-zones">Fitting ICSE sessions around each zone's traffic</h2>
  <p>
    ICSE weeks are crowded, so a slot that holds every week matters as much as the tutor. Here is what tends to work
    in each part of the city, wherever your child's school is.
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/greater-noida/zone/greater-noida-west') }}">Greater Noida West</a>:</strong> in a locality such as {!! $ignA('shahberi', 'Shahberi') !!}, where many homes are builder floors, the tutor usually comes straight to the door; the trip across the busy chowks is what takes time, so an earlier evening slot is steadier.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/alpha-delta-pari-chowk') }}">Alpha–Delta and Pari Chowk</a>:</strong> {!! $ignA('beta-1', 'Beta 1') !!} is plotted houses with ALPHA 1 station close by, so a tutor can arrive by metro; Jagat Farm's evening crowds are the thing to avoid.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/pi-sigma-sectors-36-37') }}">Pi, Sigma and Sectors 36–37</a>:</strong> in a developing sector like {!! $ignA('sigma-1', 'Sigma 1') !!}, afternoon or early-evening slots miss the slow stretches of the Surajpur–Kasna road; send a map pin for the first visit.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omega-chi-phi') }}">Omega, Chi and Phi</a>:</strong> {!! $ignA('chi-3', 'Chi 3') !!} is mostly houses on authority plots, where buses and shared autos are thin; a tutor on a two-wheeler, or by metro to Pari Chowk or Knowledge Park II and then e-rickshaw, keeps to time.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/zeta-eta') }}">Zeta and Eta</a>:</strong> {!! $ignA('eta-1', 'Eta 1') !!} is quiet and plotted, with GNIDA Office the nearest station; a tutor from Zeta, Eta or Delta is easiest to keep weekly.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omicron-mu-xu') }}">Omicron, Mu and Xu</a>:</strong> {!! $ignA('mu-1', 'Mu 1') !!} has markets and autos close at hand, easier than its neighbours, and the house is reached without a gate pass.</li>
  </ul>
  <p>
    Every sector is listed on our <a href="{{ url('/city/greater-noida') }}">Greater Noida tutors page</a>, and the
    <a href="{{ url('/blog/greater-noida-sectors-tuition-guide') }}">Greek-letter sectors guide</a> and
    <a href="{{ url('/blog/greater-noida-west-tuition-guide') }}">Greater Noida West guide</a> cover local timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-mode">Home or online for ICSE and ISC?</h2>
  <p>
    Because ICSE and ISC specialists are usually fewer than CBSE tutors, the right tutor for a given paper may live on the other
    side of the city. Home classes are worth the effort for younger students and for subjects where the tutor must
    watch writing and diagrams. For an ISC elective or a single weak science, a hybrid often works: one home session at
    the weekend and one online on a weekday with the same tutor, who sees the written working live. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a> helps you decide.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-demo">A demo checklist for ICSE and ISC parents</h2>
  <ol>
    <li><strong>Method marks.</strong> In maths, does the tutor insist on every step and on the form of the final answer?</li>
    <li><strong>CISCE documents.</strong> Ask which specimen papers and examiners' reports they use.</li>
    <li><strong>Range across sciences.</strong> Have them explain a physics idea, then draw and label a biology diagram.</li>
    <li><strong>Writing.</strong> In History, Geography or English, do they correct expression as well as facts?</li>
    <li><strong>ISC coursework.</strong> Ask how they guide project work and the practical file without doing it.</li>
    <li><strong>A reliable slot.</strong> Ask how they will reach you at the chosen hour, week after week.</li>
  </ol>
  <p>
    Each request brings two or three matched tutors, with fees shown before any demo and free switching later on.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. More
    questions are in our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. On the CISCE route,
    what you pay depends mostly on the class, the number of papers, the time left before exams and travel distance. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-greater-noida') }}">home
    tuition fees in Greater Noida</a>.
  </p>
  <p>
    Send the board (ICSE or ISC), class, subjects, your sector and block or society, and the hours you have free.
    A shortlist of two or three follows, and the first class is a <a href="{{ url('/demo-class') }}">free demo</a>. Browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or if you teach CISCE subjects, see
    <a href="{{ url('/tuition-jobs/greater-noida') }}">tuition jobs in Greater Noida</a>.
  </p>
  </section>

  </div>
</article>
