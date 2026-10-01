{{--
  Board page for "ICSE home tutor Kolkata" (CISCE: ICSE Class 10, ISC Class
  12). Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths),
  Aaditya Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths). No anecdotes, years or results are claimed. No
  schools, coaching institutes or people are named.

  Board facts only as the Gurgaon board hub (icse-home-tutor-gurgaon) states
  them, which cites cisce.org (read 1 Oct 2026):
  - ICSE Regulations 2027: Group I compulsory (English, a second language,
    History, Civics & Geography), Group II two or three subjects, 80/20;
    Group III one subject, 50/50.
  - ICSE Mathematics (51): one 3-hour paper of 80 marks + 20 internal from
    at least two assignments marked by the teacher and an external examiner.
  - ICSE Physics, Chemistry, Biology: separate 2-hour papers of 80 marks +
    20 internal assessment of practical work.
  - CISCE Analysis of Pupil Performance reports, subject by subject.
  - ISC Regulations: English compulsory plus three to five electives, at most
    six subjects; no subject change after 15 September of the Class XI year;
    no Class XII subject not studied in XI; promotion needs 35% in four
    subjects including English and 75% attendance; practicals compulsory;
    Physics not with Engineering Science; grades 1 to 9; pass certificate
    needs four subjects including English plus SUPW and Community Service.
  - ISC Mathematics (860): Paper I 3 hours, 80 marks; project work 20 marks.
  Kolkata's board mix only as the /city/kolkata hub states it (no shares);
  West Bengal boards described generally. Local detail only from
  kolkata-research.json, kolkata-zone-guides.json, zones/kolkata.json and the
  hub. Fee wording is the approved sentence. Area links render only for
  active Kolkata areas.
--}}
@php
  $kicSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kicA = function (string $slug, string $label) use ($kicSlugs) {
      return in_array($slug, $kicSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="kicGuideTitle">
  <h2 id="kicGuideTitle">ICSE and ISC home tutors in Kolkata: long answers, many papers, one council</h2>

  <p class="nx-guide__lede">
    Few Indian cities know the CISCE route as well as Kolkata, where ICSE and ISC have a long and strong following. That
    familiarity cuts both ways. Parents know the board is demanding; tutors who learnt the style years ago sometimes
    teach from memory rather than from the current regulations and specimen papers. This page sets out how the ICSE
    and ISC years are built, where students usually lose marks, which subjects Kolkata families ask about, how tutors
    reach each neighbourhood, and how to tell in a free demo whether a tutor really teaches the CISCE way. Abhinandan
    Tiwary covers Class 10 maths, Aaditya Kashyap the sciences, and Ajay Vatsyayan ISC maths.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kic-city">CISCE in Kolkata</a> ·
    <a href="#kic-groups">Class 10 subject groups</a> ·
    <a href="#kic-papers">Maths and science papers</a> ·
    <a href="#kic-isc">ISC rules</a> ·
    <a href="#kic-years">Year by year</a> ·
    <a href="#kic-subjects">Subjects and pages</a> ·
    <a href="#kic-zones">Tutors by neighbourhood</a> ·
    <a href="#kic-after">After Class 10</a> ·
    <a href="#kic-mode">Home or online</a> ·
    <a href="#kic-demo">Testing a tutor</a> ·
    <a href="#kic-fees">Fees and starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kic-city">How does ICSE fit into Kolkata's school mix?</h2>
  <p>
    Our <a href="{{ url('/city/kolkata') }}">Kolkata tutors page</a> lists four kinds of board in the city: CISCE's ICSE
    and ISC, CBSE, the West Bengal boards and a smaller IB and IGCSE group. We have no reliable shares for each and do
    not invent them. In general terms, the state route is Madhyamik at Class 10 under WBBSE and the Higher Secondary
    course under WBCHSE, with its own textbooks, pattern and media of instruction. ICSE differs in three ways a parent
    feels at home: more separate papers in Class 10, more written English across every subject, and examiner reports
    that spell out exactly where marks were lost. A tutor who has taught only the state papers needs time to adjust
    to the length and precision CISCE expects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kic-groups">The three ICSE subject groups</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE Class 10 subject groups under the CISCE regulations</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">What a student takes</th><th scope="col">Exam and internal weight</th><th scope="col">Where tutoring helps</th></tr>
    </thead>
    <tbody>
      <tr><td>I, compulsory</td><td>English; a second language; History, Civics and Geography</td><td>80% paper, 20% internal</td><td>Long answers, literature texts, map and source work</td></tr>
      <tr><td>II, two or three subjects</td><td>From Mathematics, Science, Economics, Commercial Studies, a modern foreign or classical language, Environmental Science</td><td>80% paper, 20% internal</td><td>Maths method and the three science papers</td></tr>
      <tr><td>III, one subject</td><td>An applied subject such as Computer Applications, Economic Applications, Commercial Applications, Art, Physical Education or Robotics and AI</td><td>50% paper, 50% internal</td><td>Steady project work through the year</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Group III is a single subject, but half its marks come from internal work, so a slack term costs more there than
    in any other paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kic-papers">What the maths and science papers ask for</h2>
  <p>
    ICSE Mathematics is one three-hour paper of 80 marks plus 20 internal marks from at least two assignments, each
    judged separately by the subject teacher and an external examiner. Commercial topics such as banking and shares
    sit beside algebra, geometry, trigonometry and statistics, and the working is marked line by line.
  </p>
  <p>
    Science is three subjects in practice. Physics, Chemistry and Biology are examined in separate two-hour papers of
    80 marks, and each adds 20 marks of internal assessment of practical work. A child who enjoys physics numericals
    can still slip on biology diagrams or balanced equations, so ask whether one tutor is comfortable in all three or
    whether the weakest paper needs its own specialist. After every exam season CISCE publishes an Analysis of Pupil
    Performance for each subject; a tutor who reads these alongside specimen papers is preparing your child for how
    the examiners actually mark.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kic-isc">ISC in Classes 11 and 12: rules worth knowing early</h2>
  <ul>
    <li><strong>Subjects:</strong> English plus three, four or five electives, six subjects at most. A Class 12 subject must have been studied in Class 11.</li>
    <li><strong>Deadline:</strong> no change of subject after 15 September of the Class 11 registration year, so a wrong choice cannot be fixed late.</li>
    <li><strong>Promotion:</strong> at least 35% in four subjects including English, and 75% attendance, to move to Class 12.</li>
    <li><strong>Practicals:</strong> compulsory wherever a subject has them; Physics cannot be paired with Engineering Science.</li>
    <li><strong>Result:</strong> grades from 1 to 9; the pass certificate needs four subjects including English, plus Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    ISC Mathematics pairs a three-hour, 80-mark theory paper with 20 marks of project work in each of the two years.
    See the <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page for the subject in depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kic-years">The CISCE years, and what each one needs</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>From Class 6 to Class 12 on the ICSE and ISC route</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">What counts</th><th scope="col">Tutor's focus</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>The school's own exams</td><td>Neat stepwise maths, science vocabulary, writing a full paragraph</td></tr>
      <tr><td>9</td><td>School exams; the two-year ICSE syllabus starts</td><td>Keeping every paper moving; diagrams and working from day one</td></tr>
      <tr><td>10</td><td>ICSE papers plus internal marks</td><td>Specimen papers and examiner reports, paper by paper, under time</td></tr>
      <tr><td>11</td><td>School exams; promotion rules apply</td><td>Choosing electives well and closing the jump from ICSE</td></tr>
      <tr><td>12</td><td>ISC theory, practicals and projects</td><td>Depth in electives; practical file and project deadlines</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A useful ICSE session spends as much time on writing as on explaining: the student attempts two or three questions
    first, the tutor marks them line by line for steps, units, labels and clear sentences, then teaches the next
    topic and ends with one full answer under time.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kic-subjects">Which subjects do Kolkata ICSE families ask about?</h2>
  <p>
    Maths and the three sciences first, because their marks depend on method built week by week. English language and
    literature, and History, Civics and Geography, come next for students whose knowledge is sound but whose answers
    run short. In ISC the requests narrow to the electives: maths, physics, chemistry and biology on the science side,
    accounts, commerce and economics on the commerce side.
  </p>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-kolkata') }}">Maths home tutors in Kolkata</a> for ICSE and ISC maths, and the <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> for the papers.</li>
    <li><a href="{{ url('/science-home-tutor-kolkata') }}">Science tutors</a> for the three ICSE papers; <a href="{{ url('/physics-home-tutor-kolkata') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-kolkata') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-kolkata') }}">biology</a> tutors for ISC.</li>
    <li><a href="{{ url('/english-home-tutor-kolkata') }}">English tutors in Kolkata</a> for set texts and answer-writing.</li>
    <li>Entrance plans from Class 11: <a href="{{ url('/jee-home-tutor-kolkata') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-kolkata') }}">NEET</a> tutors in Kolkata.</li>
  </ul>
  <p>
    For a fuller account of the board, read our <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and ISC board
    hub</a>. If your child is weighing ISC against another board for Class 11, the
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice guide</a> helps; decide before
    mid-September of that year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kic-zones">How do ICSE tutors reach your neighbourhood?</h2>
  <p>
    ICSE specialists are fewer than general tutors, so travel matters. From our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/kolkata/zone/ballygunge-gariahat-alipore') }}">Ballygunge, Gariahat and Alipore</a>.</strong> Tell the tutor which Blue Line stop to use; for {!! $kicA('bhowanipore', 'Bhowanipore') !!} that is Netaji Bhavan or Jatin Das Park. In older houses in {!! $kicA('ballygunge', 'Ballygunge') !!}, say which floor and bell, and avoid weekend evenings near the Gariahat crossing.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/tollygunge-jadavpur-garia') }}">Tollygunge and Jadavpur</a>.</strong> Mahanayak Uttam Kumar is the stop for {!! $kicA('tollygunge', 'Tollygunge') !!}; weekend mornings are the calmest slot.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/behala-new-alipore') }}">New Alipore</a>.</strong> Give the block letter with the house number in {!! $kicA('new-alipore', 'New Alipore') !!}; suburban trains and the Purple Line both reach it.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/north-kolkata') }}">North Kolkata</a>.</strong> Public transport beats a car; the last steps to homes in {!! $kicA('shyambazar', 'Shyambazar') !!} are often on foot. Avoid school and office hours at the five-point crossing.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/howrah') }}">Howrah</a>.</strong> Ask for a tutor who already teaches on the Howrah side, or one who can take the Green Line under the river; in {!! $kicA('shibpur', 'Shibpur') !!}, give a lane landmark.</li>
  </ul>
  <p>
    Where the right ISC elective tutor lives far away, use one home session and one online session a week with the same
    person. The <a href="{{ url('/blog/north-kolkata-and-howrah-tuition-guide') }}">North Kolkata and Howrah guide</a>
    adds local timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kic-after">After Class 10: stay with ISC, or change board?</h2>
  <p>
    Kolkata students finishing ICSE have more than one road. Staying with CISCE keeps the style of answers familiar,
    though ISC electives go much deeper and the practical and project work grows. Moving to CBSE means NCERT
    textbooks, CBSE sample papers and a different balance of theory and practical marks; the maths and science content
    carries across well, the answer format less so. Moving to the state Higher Secondary course means new textbooks,
    a new pattern and, possibly, a different medium of teaching, so read the council's own notices before deciding.
    Whichever way, a tutor can run a short bridging plan over the break: the new board's textbook language, its
    sample papers and the opening chapters of Class 11. Our <a href="{{ url('/cbse-home-tutor-kolkata') }}">CBSE home
    tutors in Kolkata</a> page covers that board's papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kic-mode">Home or online for ICSE in Kolkata?</h2>
  <p>
    A tutor at the table is hard to beat for Class 6 to 10 maths and the science papers, where a pencil in the margin
    corrects a step at once. Online earns its place for scarcer needs: an ISC elective, set literature texts or a
    Group III subject where the right teacher lives on the far side of the Hooghly. It also rescues the Puja weeks,
    when heritage lanes and market crossings fill. For online maths and science, the tutor must see written working
    live, through a tablet, a shared whiteboard or a camera over the notebook.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kic-demo">How to test an ICSE tutor in the demo</h2>
  <ol>
    <li><strong>Current documents.</strong> Which specimen paper and which Analysis of Pupil Performance do they use? Recent years, not old notes.</li>
    <li><strong>Method in maths.</strong> Do they insist on every step, the units and the final form?</li>
    <li><strong>Two sciences in one hour.</strong> Ask for a short physics problem and then a labelled biology diagram.</li>
    <li><strong>Language.</strong> Do they correct the sentence as well as the fact?</li>
    <li><strong>ISC projects.</strong> How will they guide the project and practical file without writing them?</li>
  </ol>
  <p>
    You get two or three matched tutors, see each fee before the demo, and switching later is free. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kic-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For ICSE and ISC the
    class, the number of papers, how near the exam is and the tutor's travel decide the fee; see the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">tuition
    fees in Kolkata</a>.
  </p>
  <p>
    Say whether it is ICSE or ISC, the class, subjects, neighbourhood and free slots. We shortlist two or three tutors
    and the first class is a <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>, or, if you teach CISCE subjects, see <a href="{{ url('/tuition-jobs/kolkata') }}">tuition jobs in
    Kolkata</a>.
  </p>
  </section>

  </div>
</article>
