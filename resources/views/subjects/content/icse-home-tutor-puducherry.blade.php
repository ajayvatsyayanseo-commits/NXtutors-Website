{{--
  Board page for "ICSE home tutor Puducherry" (CISCE: ICSE Class 10, ISC Class 12),
  capitals wave, phase 2, subjects-b, 3 Oct 2026.
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya Kashyap
  (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE and ISC maths).
  No anecdotes, years or results are claimed.

  CISCE facts only as the Gurgaon board hub (icse-home-tutor-gurgaon) states them,
  citing cisce.org (read 1 Oct 2026): ICSE Regulations 2027 (Group I compulsory,
  Group II two or three subjects, 80/20; Group III one subject, 50/50); ICSE
  Mathematics one 3-hour 80-mark paper + 20 internal from at least two assignments
  marked by the teacher and an external examiner; ICSE Physics, Chemistry, Biology
  separate 2-hour 80-mark papers + 20 practical internal; Analysis of Pupil
  Performance reports; ISC Regulations (English + three to five electives, at most
  six; no change after 15 September of Class XI; XII subject must be studied in XI;
  promotion 35% in four subjects incl. English and 75% attendance; practicals
  compulsory; Physics not with Engineering Science; grades 1-9; pass certificate
  four subjects incl. English + SUPW and Community Service); ISC Mathematics 80
  theory + 20 project.
  Puducherry syllabus situation only from the research file's board_facts
  (schooledn.py.gov.in/CBSE/cbsetrg.html; schooledn.py.gov.in/Exams/sslcResult.html).
  The state-board syllabus in some private schools is not named; no pattern stated.
  Local detail only from puducherry-research.json and the /city/puducherry hub. No
  schools, colleges, universities, places of worship or people named. Fee wording is
  the approved sentence. Area links render only for active Puducherry areas.
--}}
@php
  $pyicSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pyicA = function (string $slug, string $label) use ($pyicSlugs) {
      return in_array($slug, $pyicSlugs, true)
          ? '<a href="' . e(url('/city/puducherry/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="pyicGuideTitle">
  <h2 id="pyicGuideTitle">ICSE and ISC home tutors in Puducherry: long papers, steady revision, careful choices</h2>

  <p class="nx-guide__lede">
    In a town where government schools have just moved to CBSE, ICSE families can feel like a small group with fewer
    people to ask. The council's demands are distinctive: long written answers in English across almost every subject,
    three separate science papers at Class 10, a wide syllabus that needs more than one revision pass, and ISC rules in
    Classes 11 and 12 that lock choices early. Below you will find the shape of the council's
    two stages, the places students usually drop marks, a plan for the two-year ICSE course, the choice between ISC,
    CBSE and the state-board syllabus after Class 10, and how tutors reach six Puducherry localities. The maths notes
    come from Abhinandan Tiwary (ICSE) and Ajay Vatsyayan (ISC), and the science notes from Aaditya Kashyap.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pyic-place">ICSE in Puducherry</a> ·
    <a href="#pyic-groups">The Class 10 groups</a> ·
    <a href="#pyic-papers">Maths and science</a> ·
    <a href="#pyic-rounds">Revision rounds</a> ·
    <a href="#pyic-isc">ISC rules</a> ·
    <a href="#pyic-years">Year by year</a> ·
    <a href="#pyic-crossroads">After Class 10</a> ·
    <a href="#pyic-reach">Six localities</a> ·
    <a href="#pyic-format">Home or online</a> ·
    <a href="#pyic-trial">The demo</a> ·
    <a href="#pyic-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pyic-place">Where ICSE sits among Puducherry's boards</h2>
  <p>
    Puducherry has no board of its own. The Directorate of School Education ran orientation programmes in 2024 for a
    swap from the state syllabus to CBSE, and it now reports Class 10 and 12 results as CBSE results, with separate
    state-board analyses from 2026 for private schools that still teach the state-board SSLC and +2 syllabus. Our
    <a href="{{ url('/city/puducherry') }}">Puducherry tutors page</a> lists CISCE's ICSE and ISC alongside these, and
    a smaller IB and Cambridge group. We do not publish shares for each board, because we do not have reliable ones.
  </p>
  <p>
    What matters for tuition is the contrast. CBSE builds its papers on NCERT and keeps answers fairly close to the
    textbook. ICSE expects fuller answers written in good English, examines the sciences as three papers, and releases a
    subject-wise Analysis of Pupil Performance after each exam season showing where candidates lost marks. A tutor
    used to CBSE or state-board students needs to show they mark to CISCE's expectations.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyic-groups">How ICSE Class 10 subjects are grouped</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The three ICSE groups and their mark split, from the CISCE regulations</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">What it contains</th><th scope="col">Exam : internal</th></tr>
    </thead>
    <tbody>
      <tr><td>Group I (every candidate)</td><td>English; a second language; History, Civics and Geography as one subject</td><td>80 : 20</td></tr>
      <tr><td>Group II (choose two or three)</td><td>Among them Mathematics, Science, Economics, Commercial Studies, Environmental Science, and modern foreign or classical languages</td><td>80 : 20</td></tr>
      <tr><td>Group III (choose one)</td><td>Applied subjects, among them Computer Applications, Art, Physical Education, Robotics and AI, and the Economic and Commercial Applications papers</td><td>50 : 50</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Half of the Group III mark comes from work done during the year, so a student who keeps project tasks moving each
    month gains far more there than one who saves it all for the end.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyic-papers">ICSE maths and the three science papers</h2>
  <p>
    <strong>Mathematics</strong> is a single three-hour paper of 80 marks, plus 20 internal marks from at least two
    assignments, each marked by the school's teacher and by an external examiner. Commercial topics such as banking and
    shares sit beside algebra, geometry, trigonometry and statistics, and examiners expect every step shown.
  </p>
  <p>
    <strong>Physics, Chemistry and Biology</strong> are examined separately, each in a two-hour, 80-mark paper with a
    further 20 marks for practical work assessed internally. A strong physics student is not automatically safe in
    biology, so ask early whether one tutor will cover all three or whether the weakest needs its own specialist. A
    tutor should keep the latest specimen papers and the Analysis of Pupil Performance side by side, because the second
    explains exactly why answers to the first lost marks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyic-rounds">Planning the two ICSE years in revision rounds</h2>
  <p>
    On the Puducherry city page we advise that ICSE and ISC revision should come round more than once. A tutor can turn that into
    a simple pattern across Classes 9 and 10:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>One way to cover the ICSE syllabus without letting early chapters fade</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">New work</th><th scope="col">Going back</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9, first term</td><td>School chapters in order, with written answers every session</td><td>None yet; build the notebook habit</td></tr>
      <tr><td>Class 9, second term</td><td>Remaining chapters</td><td>One session in four returns to a first-term chapter</td></tr>
      <tr><td>Class 10, first term</td><td>Class 10 chapters</td><td>Class 9 topics revisited paper by paper; timed answers begin</td></tr>
      <tr><td>Class 10, second term</td><td>Final chapters</td><td>Specimen papers in full, each followed by a marked review</td></tr>
      <tr><td>Before the exams</td><td>None</td><td>Weakest paper first; examiner-report errors checked one by one</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Keep a dated list of internal tasks and projects on the fridge or the study wall, and check it at the start of each
    month. A well-run session opens with the tutor marking what the student attempted alone, introduces a single new
    idea, and closes with a timed long answer.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyic-isc">ISC in Classes 11 and 12: rules to know before choosing</h2>
  <ul>
    <li><strong>Subject count.</strong> English plus three to five electives; six subjects at most.</li>
    <li><strong>Choices lock early.</strong> No subject changes once 15 September of the Class 11 registration year has passed, and nothing can be taken in Class 12 that was not studied in Class 11.</li>
    <li><strong>Promotion.</strong> 75% attendance, and 35% in four subjects of which English must be one.</li>
    <li><strong>Practicals.</strong> Compulsory in every subject that has them; Physics and Engineering Science may not be paired.</li>
    <li><strong>Results.</strong> Grades from 1 to 9. The pass certificate requires English and three more subjects, together with Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    In ISC Mathematics, both years carry a three-hour theory paper of 80 marks and a 20-mark project. Our
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page and the
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> go through both levels.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyic-years">The CISCE years for a Puducherry student</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Seven school years under CISCE, and what tuition should do in each</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">At stake</th><th scope="col">Tuition that helps most</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>School exams</td><td>Complete sentences, stepwise maths, scientific words used precisely</td></tr>
      <tr><td>9</td><td>Start of the two-year ICSE course</td><td>Revision rounds from the first term; diagrams and working each week</td></tr>
      <tr><td>10</td><td>ICSE papers plus internal marks</td><td>Timed specimen papers and examiner reports, one paper at a time</td></tr>
      <tr><td>11</td><td>Promotion rules; subjects locked in September</td><td>Electives chosen carefully; early help with the step up from Class 10</td></tr>
      <tr><td>12</td><td>Theory papers, practical exams and project deadlines</td><td>Depth in each elective, with deadlines kept</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyic-crossroads">After Class 10: ISC, CBSE or the state-board +2?</h2>
  <p>
    A Puducherry student finishing ICSE has three realistic routes. Staying with ISC keeps the CISCE style of answer,
    though every elective goes much deeper and practical and project work grows. Moving to CBSE for Class 11 brings
    NCERT books, CBSE sample papers and a 70 : 30 theory-practical split in the sciences; the subject knowledge
    transfers, though CBSE answers are briefer and track the textbook's own wording. Some private schools teach the state-board +2
    syllabus; a move there means new textbooks and a different paper, so check the details with the school before
    deciding.
  </p>
  <p>
    Whichever route, use the summer after Class 10 for a short bridge: the opening chapters of the new course, a look at
    how its questions are phrased and, for science students, a gentle first pass at Class 11 physics and maths. Since ISC subjects lock in
    September, decide early. The <a href="{{ url('/cbse-home-tutor-puducherry') }}">CBSE home tutor in Puducherry</a>
    page covers that board; for subject combinations, our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">guide
    to choosing a Class 11 stream</a> was written for another city but applies here too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyic-reach">How ICSE tutors reach six Puducherry localities</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Visits in six localities on the Oulgaret side of town</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Arrival</th><th scope="col">Slot advice</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $pyicA('lawspet', 'Lawspet') !!}</td><td>Gate check at government housing campuses and apartment blocks; doorstep on colony streets</td><td>Avoid school and college opening and closing on Airport Road and College Road</td></tr>
      <tr><td>{!! $pyicA('kamaraj-nagar', 'Kamaraj Nagar') !!}</td><td>Front door, or a building gate where names are noted</td><td>A fixed slot agreed in advance, clear of the evening rush on nearby commercial roads</td></tr>
      <tr><td>{!! $pyicA('karuvadikuppam', 'Karuvadikuppam') !!}</td><td>Doorstep on residential streets; flats may want the tutor's name at the gate</td><td>Leave a margin for evening traffic on the main road</td></tr>
      <tr><td>{!! $pyicA('reddiarpalayam', 'Reddiarpalayam') !!}</td><td>Mostly houses; give a colony name and a bus-stop landmark</td><td>Evenings with a tutor from a neighbouring colony</td></tr>
      <tr><td>{!! $pyicA('saram', 'Saram') !!}</td><td>Doorstep in houses; flat number to the guard in apartment buildings</td><td>Stay off the bus-stand junction at office hours</td></tr>
      <tr><td>{!! $pyicA('thattanchavady', 'Thattanchavady') !!}</td><td>Builder floors may need a call from the gate</td><td>A weekday slot with room for office-hour traffic</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    See the zone pages for <a href="{{ url('/city/puducherry/zone/lawspet-ecr') }}">Lawspet and ECR</a>,
    <a href="{{ url('/city/puducherry/zone/reddiarpalayam-villianur') }}">Reddiarpalayam and Villianur</a>, the
    <a href="{{ url('/city/puducherry/zone/heritage-town') }}">Heritage Town</a> and
    <a href="{{ url('/city/puducherry/zone/mudaliarpet-ariyankuppam') }}">Mudaliarpet and Ariyankuppam</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyic-format">Home or online for ICSE and ISC?</h2>
  <p>
    Up to Class 10, ICSE maths and the three sciences are marked line by line, so having the tutor sit beside the
    notebook usually repays the travel. Online is the practical route for an ISC elective or English literature taught
    by someone on the far side of town or outside Puducherry, for quick checks as exams approach, and for the wettest
    days of the year-end rains. If maths or science does move online, the tutor must see the writing live: a stylus
    tablet, a shared board, or a phone camera angled at the page. Our <a href="{{ url('/online-tutor-puducherry') }}">online
    tutors for Puducherry</a> page explains the setup. Subject pages: <a href="{{ url('/maths-home-tutor-puducherry') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-puducherry') }}">science</a> and
    <a href="{{ url('/english-home-tutor-puducherry') }}">English</a> in Puducherry, and the
    <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and ISC board hub</a> for the board in full.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyic-trial">Testing a tutor against CISCE marking</h2>
  <ol>
    <li>Ask them to name the specimen paper and the Analysis of Pupil Performance report they are teaching from.</li>
    <li>Give them one of your child's old maths answers and see whether they mark missing steps, units and the conclusion.</li>
    <li>Ask for one physics numerical and one labelled biology diagram within the hour, to see range across the papers.</li>
    <li>Notice whether they fix the language of an answer and not only the facts in it.</li>
    <li>For ISC, ask what their role in the project or practical file is; the answer should be guidance, never writing.</li>
  </ol>
  <p>
    The shortlist holds two or three tutors with fees visible before the demo, and a later change of tutor costs
    nothing. Every tutor who joins passes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the
    profile is published.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyic-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    What moves a fee for CISCE students is mostly the class, how many papers need help, how close the exams are and how
    far the tutor travels. Read the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-puducherry') }}">Puducherry fees post</a>.
  </p>
  <p>
    Send us the course (ICSE or ISC), class, subjects, locality and the slots you can offer, and book the
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>, read the
    <a href="{{ url('/blog/puducherry-home-tuition-guide') }}">Puducherry home tuition guide</a>, and if you teach
    CISCE subjects, see <a href="{{ url('/tuition-jobs/puducherry') }}">tuition jobs in Puducherry</a>.
  </p>
  </section>

  </div>
</article>
