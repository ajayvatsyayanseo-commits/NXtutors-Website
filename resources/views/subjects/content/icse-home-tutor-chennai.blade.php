{{--
  Board page "ICSE home tutor Chennai" (CISCE: ICSE Class 10, ISC Class 12).
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya
  Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE
  and ISC maths). No anecdotes, years or results are claimed for any of them.
  No schools, societies or people are named.

  CISCE facts are only those stated in icse-home-tutor-gurgaon, which cites
  (cisce.org, read 1 Oct 2026): ICSE Regulations, Year 2027 (Groups I-III;
  80/20; Group III one subject, 50/50); ICSE Mathematics (51), Year 2027;
  ICSE Physics, Chemistry, Biology, Year 2028; Analysis of Pupil
  Performance; ISC Regulations; ISC Mathematics (860), Year 2027.
  Tamil Nadu State Board described only in general terms, as the Chennai hub
  does. Local detail only from database/seo-content/areas/
  chennai-research.json, chennai-zone-guides.json, zones/chennai.json and the
  Chennai city hub. Fee wording is the approved NXTutors sentence. FAQs
  render from faqs/icse-home-tutor-chennai.php. Area links render only when
  that Chennai area page exists and is active.
--}}
@php
  $icchSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $icchA = function (string $slug, string $label) use ($icchSlugs) {
      return in_array($slug, $icchSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide icch-guide" aria-labelledby="icchGuideTitle">
  <h2 id="icchGuideTitle">ICSE and ISC tutors in Chennai: how the CISCE papers work and how to choose well</h2>

  <p class="nx-guide__lede">
    Chennai families, the city hub says, study under four broad kinds of board, and CISCE's ICSE and ISC are one of
    them. The hub sums up both examinations well: long written answers across a wide syllabus, set literature in
    English, and a difficulty that is usually breadth rather than any single topic. This guide turns that into
    practical advice: how ICSE groups its subjects and splits marks, how the maths and science papers are built, the
    ISC rules that catch families out, where tutoring helps at each stage, how tutors travel across Chennai's zones and
    what to test in the free demo. ICSE maths and science fall within Abhinandan Tiwary's and Aaditya Kashyap's
    teaching; Ajay Vatsyayan, who teaches ISC maths, contributed the ISC sections.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icch-why">Why ICSE feels different</a> ·
    <a href="#icch-state">ICSE and the State Board</a> ·
    <a href="#icch-groups">Groups and marks</a> ·
    <a href="#icch-papers">Maths and sciences</a> ·
    <a href="#icch-isc">ISC rules</a> ·
    <a href="#icch-stages">Stages</a> ·
    <a href="#icch-subjects">Subjects</a> ·
    <a href="#icch-zones">Zones</a> ·
    <a href="#icch-demo">Demo checklist</a> ·
    <a href="#icch-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icch-why">Why ICSE tuition is its own job</h2>
  <p>
    We have no reliable count of ICSE students in Chennai and will not offer one. The hub's description points to the
    real need. Students rarely struggle with one impossible chapter; they struggle with keeping a dozen papers
    alive at once, and with writing answers complete enough for examiners who credit method and expression. So a good
    ICSE tutor plans revision loops that return to every chapter, sets timed written answers every week, and watches
    project and internal work across subjects, as the hub advises.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icch-state">ICSE compared with the Tamil Nadu State Board</h2>
  <p>
    The State Board's route is a public examination after Class 10 and the higher secondary course in Classes 11 and
    12, using state textbooks, with patterns and dates set out in its official notices. Without going into those
    schemes, three general differences stand out for a family weighing or switching boards. ICSE examines physics,
    chemistry and biology as three separate papers. It expects organised, paragraph-length answers in subjects where
    other boards accept short points. And after Class 10 it leads into ISC, where students pick electives and must fix
    them early in Class 11.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icch-groups">ICSE subject groups and the mark split</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Three groups, two ways of dividing marks</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Rule</th><th scope="col">Examples</th><th scope="col">Exam vs internal</th></tr>
    </thead>
    <tbody>
      <tr><td>I</td><td>All compulsory</td><td>English; a second language; History, Civics and Geography</td><td>80 : 20</td></tr>
      <tr><td>II</td><td>Choose two or three</td><td>Mathematics, Science, Economics, Commercial Studies, Environmental Science, a modern foreign or classical language</td><td>80 : 20</td></tr>
      <tr><td>III</td><td>Choose one</td><td>Computer Applications, Economic Applications, Commercial Applications, Art, Physical Education, Robotics and AI, among others</td><td>50 : 50</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Group III subject rewards a project timetable. Groups I and II are where tuition earns its keep.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icch-papers">Inside the ICSE maths and science papers</h2>
  <p>
    <strong>Mathematics</strong> is a single paper of 80 marks lasting three hours, with 20 further marks of internal
    assessment based on at least two assignments that the subject teacher and an external examiner each mark. Banking
    and shares appear beside algebra, geometry, trigonometry and statistics. Method carries marks, so a student who
    jumps to an answer leaves marks behind even when it is right.
  </p>
  <p>
    <strong>Science</strong> is three papers. Physics, Chemistry and Biology each take two hours and carry 80 marks,
    with 20 internal marks per subject for practical work. A science tutor therefore has to be comfortable with
    numericals, equations and labelled diagrams alike, or the family should name the weak subject so we match a
    specialist. After each exam season CISCE publishes an Analysis of Pupil Performance for every subject, in which
    examiners explain the common errors; a tutor who uses these reports with specimen papers teaches the way the board
    marks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icch-isc">ISC: the rules worth knowing early</h2>
  <ul>
    <li><strong>Subject count:</strong> English plus three, four or five electives; six subjects at most.</li>
    <li><strong>Deadline:</strong> subjects cannot change after 15 September in the Class 11 registration year, and a Class 12 subject must have been studied in Class 11.</li>
    <li><strong>Promotion:</strong> 35% in four subjects including English, on the year's cumulative average, and 75% attendance; there is no promotion on trial.</li>
    <li><strong>Practicals:</strong> compulsory where a subject has one; certain combinations, such as Physics with Engineering Science, are not allowed.</li>
    <li><strong>Results:</strong> grades 1 to 9; a pass certificate needs four or more subjects including English, plus Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    ISC Mathematics carries an 80-mark theory paper of three hours and 20 marks of project work in each of Classes 11
    and 12. More on the <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page and in the
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icch-stages">Class 6 to Class 12, stage by stage</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What to expect from a tutor on the CISCE route</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Assessed by</th><th scope="col">Where a tutor helps</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 to 8</td><td>The school</td><td>Writing at length, step-by-step maths, exact science words</td></tr>
      <tr><td>Class 9</td><td>The school, as the ICSE syllabus for Classes 9 and 10 starts</td><td>A weekly rhythm that touches every paper</td></tr>
      <tr><td>Class 10</td><td>CISCE papers and internal marks</td><td>Specimen papers, examiner reports, timed practice</td></tr>
      <tr><td>Class 11</td><td>The school; the promotion rule</td><td>Choosing and settling into electives</td></tr>
      <tr><td>Class 12</td><td>ISC papers, practicals, projects</td><td>Depth in electives; practical and project deadlines</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icch-after">After ICSE: staying with CISCE or moving on</h2>
  <p>
    At the end of Class 10, students either continue into ISC, move to CBSE or the State Board for Class 11, or join
    the IB Diploma. Staying with CISCE keeps the answer style familiar, though ISC electives go far deeper. Moving to
    CBSE means NCERT textbooks, sample papers and a different balance of theory and practical marks, while the maths
    and science themselves carry over well. Moving to the State Board's higher secondary course means its own textbooks
    and the scheme in its notices. Whichever way your child goes, settle the Class 11 subjects early: ISC allows no
    change after mid-September, and a late switch costs weeks on any board.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icch-subjects">What Chennai ICSE families ask for</h2>
  <p>
    Maths and the three sciences first, since marks there build from week to week; then English and History, Civics
    and Geography, where long answers improve when someone marks them every week. In ISC, requests follow the
    electives: maths and the sciences, or accounts, commerce and economics.
  </p>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-chennai') }}">Maths tutors in Chennai</a> for ICSE and ISC.</li>
    <li><a href="{{ url('/science-home-tutor-chennai') }}">Science tutors in Chennai</a> for the ICSE years, or a single subject: <a href="{{ url('/physics-home-tutor-chennai') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-chennai') }}">chemistry</a>, <a href="{{ url('/biology-home-tutor-chennai') }}">biology</a>.</li>
    <li><a href="{{ url('/english-home-tutor-chennai') }}">English tutors in Chennai</a>, with the <a href="{{ url('/blog/isc-class-12-english-literaturelanguage') }}">ISC Class 12 English</a> post for the senior papers.</li>
  </ul>
  <p>
    For a fuller account of the board, see the reference page
    <a href="{{ url('/icse-home-tutor-gurgaon') }}">how ICSE and ISC work</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icch-zones">Getting an ICSE tutor to your door</h2>
  <p>
    CISCE specialists are fewer than general tutors, so a good match may live a zone or two away. Timing and access
    then matter as much as distance.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Timing and entry tips from our Chennai zone guides</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Tip</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/chennai/zone/adyar-besant-nagar-mylapore') }}">Adyar, Besant Nagar and Mylapore</a>, e.g. {!! $icchA('mylapore', 'Mylapore') !!}</td><td>On temple festival days near the tank, move the lesson to the morning or online</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/t-nagar-nungambakkam-kodambakkam') }}">T Nagar, Nungambakkam and Kodambakkam</a>, e.g. {!! $icchA('nungambakkam', 'Nungambakkam') !!}</td><td>Avoid bazaar weekends and festival seasons; a tutor by suburban train is more punctual</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/velachery-guindy-tambaram') }}">Velachery, Guindy and Tambaram</a>, e.g. {!! $icchA('tambaram', 'Tambaram') !!}</td><td>Kathipara and GST Road are heavy at office hours; book just before or after</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/omr-ecr') }}">OMR and ECR</a></td><td>Add the tutor as a regular guest in the society app before the demo</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/anna-nagar-kilpauk-aminjikarai') }}">Anna Nagar, Kilpauk and Aminjikarai</a>, e.g. {!! $icchA('kilpauk', 'Kilpauk') !!}</td><td>Give avenue or street number and block; book before the early-evening rush near the shops</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/vadapalani-kk-nagar-porur') }}">Vadapalani, KK Nagar and Porur</a>, e.g. {!! $icchA('kk-nagar', 'KK Nagar') !!}</td><td>Sector or road number; late afternoon or weekends on Arcot Road</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/mogappair-ambattur-avadi') }}">Mogappair, Ambattur and Avadi</a></td><td>Gate instructions in advance for estates and defence areas</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/perambur-kolathur-north-chennai') }}">Perambur, Kolathur and North Chennai</a>, e.g. {!! $icchA('perambur', 'Perambur') !!}</td><td>A slightly earlier slot, before market roads fill</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    See every area on the <a href="{{ url('/city/chennai') }}">Chennai home tuition page</a> and the
    <a href="{{ url('/blog/south-chennai-tuition-guide') }}">south Chennai tuition guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icch-mode">Home or online</h2>
  <p>
    ICSE students up to Class 10 benefit most from a tutor who marks written answers at the table, so it is worth
    searching for someone within reach first. For an ISC elective, or a single science where the right specialist is
    far away, online lessons or a home-and-online mix are sensible. Online maths and science need the tutor to see
    handwritten working as it happens, and long English or History answers should be shared and marked before the
    next lesson.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icch-demo">ICSE demo checklist</h2>
  <ol>
    <li>Does the tutor insist on full working and the correct final form in maths?</li>
    <li>Do they use specimen papers and the Analysis of Pupil Performance?</li>
    <li>Can they handle physics, chemistry and biology, or only one?</li>
    <li>Do they correct how an English or History answer is written, not just its facts?</li>
    <li>For ISC, how will they guide projects and the practical file without doing them?</li>
    <li>For Class 11, what is their advice on electives before the September deadline?</li>
  </ol>
  <p>
    Two or three tutors are matched to you, fees are shown before the demo, and you can change tutor later for free.
    Tutors who join pass an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icch-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For ICSE and ISC in
    Chennai, the class, number of papers, nearness of the exams and the tutor's travel shape the fee. See the
    <a href="{{ url('/blog/home-tuition-fees-chennai') }}">Chennai fees guide</a> and the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  <p>
    Tell us ICSE or ISC, the class, subjects, your area and your hours, and the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a> in the
    meantime. CISCE teachers in the city can see requests on <a href="{{ url('/tuition-jobs/chennai') }}">Chennai
    tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
