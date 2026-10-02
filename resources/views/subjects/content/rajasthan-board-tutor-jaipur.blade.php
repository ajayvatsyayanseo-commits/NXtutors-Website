{{--
  Board hub: "Rajasthan Board (RBSE) tutor Jaipur" — Secondary (Class 10) and
  Senior Secondary (Class 12). Author: nxtutors (NXTutors Academic Team). No
  school, college, coaching, society or people names. No exam dates, results,
  pass percentages or candidate numbers. No state entrance-exam page exists
  for Jaipur, so none is linked.

  Official sources (all on rajeduboard.rajasthan.gov.in, read 2 Oct 2026):
  - /0.htm (Overview): Board of Secondary Education, Rajasthan constituted
    under the Rajasthan Secondary Education Act 1957; set up in Jaipur on
    4 Dec 1957, shifted to Ajmer in 1961.
  - /2.htm (Examination): exams conducted: Secondary School and Vocational
    Examination (+10); Senior Secondary Examination (10+2) (Arts / Science /
    Commerce); Praveshika (+10) and Varishtha Upadhyay (10+2) (Sanskrit
    Shiksha); State Talent Search Examination.
  - /anudeshika-etc/anudeshika-syllabus.htm: syllabus for session 2026-2027
    for Classes 9, 10, 11, 12 (files 09/10/11/12_2027.pdf) and the 2026
    "vivranika" (prospectus) for each class.
  - /anudeshika-etc/10_2027.pdf (Class 10 syllabus 2026-27): Hindi (01),
    English (02), Science (07), Social Science (08), Maths (09), each one
    paper of 3 h 15 min, 80 marks + 20 sessional = 100; English: reading 20,
    writing and grammar 20, literature 40, books First Flight and Footprints
    Without Feet (NCERT, published under copyright); Science and Maths books
    are NCERT books published under copyright. Maths chapter marks: real
    numbers 4; polynomials 4, pair of linear equations 5, quadratic equations
    4, AP 5; triangles 4, circles 6; coordinate geometry 7; introduction to
    trigonometry 8, heights and distances 5; areas related to circles 5,
    surface areas and volumes 6; statistics 13; probability 4. Science
    chapter marks: ch 1-4 (chemical reactions 6, acids bases salts 7, metals
    and non-metals 5, carbon compounds 7), ch 5-8 (life processes 8, control
    and coordination 6, reproduction 7, heredity 4), ch 9-12 (light 8, human
    eye 4, electricity 7, magnetic effects 6), ch 13 our environment 5.
  - /anudeshika-etc/vivranika_cls10_2026.pdf (Class 10 prospectus 2026,
    amended): where textbook-printed syllabus and the website differ, the
    updated syllabus/mark split on the board website prevails; third language
    one of Sanskrit (71), Urdu (72), Gujarati (73), Sindhi (74), Punjabi
    (75); pass mark 33 of 100; sessional 20 = 10 from the school's
    half-yearly and three periodic tests, 5 project (science 4 + 1), 3
    attendance (75-80% = 1, 81-85% = 2, 86-100% = 3), 1 conduct, 1 tree
    planting; school-level subjects Rajasthan History and Culture (79),
    Health and Physical Education (82), IT concepts (80), SUPW (81), art
    education; vocational trade subjects in selected schools; 48 periods a
    week.
  - /anudeshika-etc/vivranika_cls12_2026.pdf (Class 12 prospectus 2026,
    amended): compulsory Hindi (01) and English (02) for all faculties;
    faculties: Arts (three subjects), Commerce (Accountancy 30 and Business
    Studies 31 compulsory plus one more, e.g. Economics 10, Mathematics 15),
    Science (Physics 40 and Chemistry 41 compulsory plus one of Biology 42,
    Mathematics 15, Geology 43, Computer Science 03 / Informatics Practices
    04, Environment Science 61 or a vocational subject), Agriculture
    (Agriculture 84 and Agriculture Biology 38 compulsory plus one more);
    subjects with practicals: theory 70 (incl. 14 sessional), practical 30,
    pass 23 and 10.
  - /anudeshika-etc/12_2027.pdf (Class 12 syllabus 2026-27): Physics (40),
    Chemistry (41), Biology (42): theory 3 h 15 min, 56 + 14 sessional = 70;
    practical 4 h, 30; candidates must pass theory and practical separately;
    Mathematics (15), Accountancy (30), Business Studies (31), Economics (10):
    one paper, 3 h 15 min, 80 + 20 = 100; English compulsory: reading 22,
    writing and grammar 18, Flamingo 29, Vistas 11. Physics unit marks
    (56): electrostatics 7, current electricity 3, magnetic effects and
    magnetism 8, EMI and AC 9, EM waves 2, optics 11, dual nature 4, atoms
    and nuclei 6, semiconductor electronics 6. NCERT books under copyright.
  - /main.asp (home): main and supplementary examination results 2026,
    supplementary exam time table, scrutiny 2026, certificates and
    marksheets 2015-2025 on DigiLocker / Raj eVault, sessional-marks
    instructions for schools. /books/books.htm: Books / Old Papers / Model
    Questions section.
  Hindi or English medium: syllabus published bilingually; medium question
  from database/seo-content/zones/jaipur.json (Mansarovar FAQ).
  Local detail only from zones/jaipur.json, areas/jaipur-research.json,
  areas/jaipur-zone-guides.json and city/content/jaipur.blade.php. Area links
  render only for active Jaipur areas. Fee wording is the approved sentence.
  FAQs render from faqs/rajasthan-board-tutor-jaipur.php.
--}}
@php
  $rbjSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $rbjA = function (string $slug, string $label) use ($rbjSlugs) {
      return in_array($slug, $rbjSlugs, true)
          ? '<a href="' . e(url('/city/jaipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="rbjGuideTitle">
  <h2 id="rbjGuideTitle">RBSE tutors in Jaipur: the Secondary exam in Class 10 and Senior Secondary in Class 12</h2>

  <p class="nx-guide__lede">
    Many Jaipur families simply say "Rajasthan Board". Its formal name is the Board of Secondary Education, Rajasthan,
    and it runs two public examinations a tutor plans around: the Secondary examination at the end of Class 10 and the
    Senior Secondary examination at the end of Class 12. The board was set up in Jaipur in 1957 and has worked from
    Ajmer since 1961, so its notices and portals all carry the Ajmer address. This guide explains what the board's own
    syllabus and prospectus for the coming exam year say: which books are prescribed, how each paper's 100 marks are
    split, how the four Class 12 faculties are built, and where a home tutor actually moves marks. Every detail about
    papers below comes from the board's website; please check the current document there before relying on it.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#rbj-board">The board</a> ·
    <a href="#rbj-books">Books and medium</a> ·
    <a href="#rbj-ten">Class 10 papers</a> ·
    <a href="#rbj-sessional">The 20 sessional marks</a> ·
    <a href="#rbj-weights">Chapter weights</a> ·
    <a href="#rbj-faculty">Class 11–12 faculties</a> ·
    <a href="#rbj-twelve">Class 12 papers</a> ·
    <a href="#rbj-cbse">RBSE beside CBSE</a> ·
    <a href="#rbj-after">After the result</a> ·
    <a href="#rbj-plan">A four-year plan</a> ·
    <a href="#rbj-zones">Zones</a> ·
    <a href="#rbj-demo">The demo</a> ·
    <a href="#rbj-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="rbj-board">What exactly does the board examine?</h2>
  <p>
    The board was constituted under the Rajasthan Secondary Education Act of 1957. Its examination page lists what it
    conducts today: the Secondary School examination (with a vocational side) after Class 10, the Senior Secondary
    examination after Class 12 in Arts, Science and Commerce, two Sanskrit-education examinations called Praveshika
    and Varishtha Upadhyay at the same two levels, and a State Talent Search Examination. This page is about the first
    two, the papers almost every RBSE school student sits.
  </p>
  <p>
    Classes 9 and 11 are school years with the board's syllabus but no board paper at the end. That matters for
    tuition: a Class 9 or Class 11 student is building the base the board will test a year later, and the chapters
    skipped then come back as the hardest ones in the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rbj-books">Which books, and in which medium?</h2>
  <p>
    Here RBSE surprises many parents who assume a state board means state books. For the current syllabus, the board
    prescribes NCERT textbooks, published for it under copyright, in subjects such as mathematics, science and English:
    Class 10 English is taught from First Flight and Footprints Without Feet, and Class 12 English from Flamingo and
    Vistas. The same chapters appear in a CBSE classroom, which is why a strong CBSE tutor can often help an RBSE
    student with content. What differs is how the board asks about it, covered further down.
  </p>
  <p>
    Two further points from the board's prospectus are worth knowing:
  </p>
  <ul>
    <li><strong>The website wins.</strong> If the syllabus or mark split printed in a textbook differs from the updated version on the board's website, the website version is the one that counts. A tutor should open the current syllabus PDF, not rely on a guidebook from an earlier year.</li>
    <li><strong>Hindi or English medium.</strong> The board publishes its syllabus in Hindi and English, and schools teach in either. Tell us the medium when you ask: a Hindi-medium student needs to write answers with the textbook's Hindi terms, even if the tutor explains a concept in English.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rbj-ten">The Class 10 Secondary examination, paper by paper</h2>
  <p>
    The board's prospectus lists six examined subjects for regular Class 10 students. Each is one written paper, and
    each is marked the same way.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>RBSE Class 10 subjects, as the board's prospectus and syllabus set them out</caption>
    <thead>
      <tr><th scope="col">Subject (code)</th><th scope="col">Written paper</th><th scope="col">Sessional</th><th scope="col">Pass mark</th></tr>
    </thead>
    <tbody>
      <tr><td>Hindi (01), English (02)</td><td>80 marks, 3 hours 15 minutes</td><td>20</td><td>33 of 100</td></tr>
      <tr><td>Third language: Sanskrit (71), Urdu (72), Gujarati (73), Sindhi (74) or Punjabi (75)</td><td>80 marks, 3 hours 15 minutes</td><td>20</td><td>33 of 100</td></tr>
      <tr><td>Science (07)</td><td>80 marks, 3 hours 15 minutes</td><td>20</td><td>33 of 100</td></tr>
      <tr><td>Social Science (08)</td><td>80 marks, 3 hours 15 minutes</td><td>20</td><td>33 of 100</td></tr>
      <tr><td>Mathematics (09)</td><td>80 marks, 3 hours 15 minutes</td><td>20</td><td>33 of 100</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Alongside these, the school itself assesses Rajasthan History and Culture, Health and Physical Education, a
    computer-concepts subject and socially useful productive work, and some schools offer a vocational trade such as
    IT, retail or healthcare. These rarely need a tutor, but a student who neglects them can still be held up, so it
    is worth asking the school how they are graded.
  </p>
  <p>
    The English paper shows the board's balance well: 20 marks for reading, 20 for writing and grammar, and 40 for
    the two literature books. For a student whose spoken English is fine but whose answers are thin, literature
    answers that quote and explain the text are where the marks are. Our
    <a href="{{ url('/english-home-tutor-jaipur') }}">English home tutors in Jaipur</a> page covers that subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rbj-sessional">Where the 20 sessional marks come from</h2>
  <p>
    Every main Class 10 subject carries 20 sessional marks that the school sends to the board. The prospectus spells
    out the split, and it is unusual enough to explain to every family:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 sessional marks per subject, per the board's 2026 prospectus</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Marks</th><th scope="col">What a tutor can do</th></tr>
    </thead>
    <tbody>
      <tr><td>School tests: the half-yearly exam and three periodic tests</td><td>10</td><td>Treat each periodic test as a mini board paper; revise for it the same way</td></tr>
      <tr><td>Project work (science: 4 for the project)</td><td>5</td><td>Help the student plan and check it; the work itself stays the student's</td></tr>
      <tr><td>Attendance</td><td>3</td><td>Nothing, except not scheduling tuition over school hours</td></tr>
      <tr><td>Conduct</td><td>1</td><td>—</td></tr>
      <tr><td>Tree planting (science counts it within its 5)</td><td>1</td><td>—</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Attendance is scored on a scale: 75 to 80 percent earns one mark, 81 to 85 percent two, and 86 percent or more all
    three. The practical lesson for families is simple. Half the sessional marks ride on the school's own tests through
    the year, so a tutor who only prepares for February leaves easy marks behind. We ask tutors to look at the school
    test calendar in the first week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rbj-weights">Chapter weights in Class 10 maths and science</h2>
  <p>
    The 2026–27 syllabus prints marks against each chapter, which turns revision planning into arithmetic. In
    mathematics, the 80 written marks fall like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>RBSE Class 10 mathematics: marks by area, 2026–27 syllabus</caption>
    <thead>
      <tr><th scope="col">Area</th><th scope="col">Chapters</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Algebra</td><td>Polynomials, linear equations in two variables, quadratic equations, arithmetic progressions</td><td>18</td></tr>
      <tr><td>Statistics and probability</td><td>Mean, median and mode of grouped data (13); theoretical probability (4)</td><td>17</td></tr>
      <tr><td>Trigonometry</td><td>Ratios and identities (8); heights and distances (5)</td><td>13</td></tr>
      <tr><td>Mensuration</td><td>Areas related to circles (5); surface areas and volumes (6)</td><td>11</td></tr>
      <tr><td>Geometry</td><td>Triangles (4); circles (6)</td><td>10</td></tr>
      <tr><td>Coordinate geometry</td><td>Distance and section formulae</td><td>7</td></tr>
      <tr><td>Real numbers</td><td>Fundamental theorem of arithmetic; irrationality proofs</td><td>4</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Grouped-data statistics alone is worth 13 marks, more than coordinate geometry, and it is mostly careful table work.
    A student weak in algebra can still secure a solid score by making statistics, mensuration and trigonometry reliable
    first. Our <a href="{{ url('/maths-home-tutor-jaipur') }}">maths home tutors in Jaipur</a> page goes further into
    the subject, and the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> guide covers it across
    boards.
  </p>
  <p>
    Science is split evenly. The four chemistry chapters carry 25 marks, the four biology chapters 25, the four physics
    chapters (light, the human eye, electricity and magnetic effects) another 25, and "Our Environment" the last 5. No
    branch can be written off, and a student who dislikes numericals cannot simply drop electricity, which alone carries
    7 marks. See <a href="{{ url('/science-home-tutor-jaipur') }}">science home tutors in Jaipur</a> for Classes 6 to 10.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rbj-faculty">Choosing a faculty for Classes 11 and 12</h2>
  <p>
    The board calls streams "faculties", and its Class 12 prospectus lists four. Hindi and English are compulsory in all
    of them; beyond that, each faculty fixes some subjects and leaves one or more to choice.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Senior Secondary faculties in the board's 2026 prospectus</caption>
    <thead>
      <tr><th scope="col">Faculty</th><th scope="col">Fixed subjects</th><th scope="col">Choice includes</th></tr>
    </thead>
    <tbody>
      <tr><td>Science</td><td>Physics (40), Chemistry (41)</td><td>One of Biology (42), Mathematics (15), Geology (43), Computer Science or Informatics Practices, Environment Science, or a vocational trade</td></tr>
      <tr><td>Commerce</td><td>Accountancy (30), Business Studies (31)</td><td>One of Economics (10), Mathematics (15), Hindi or English typing and shorthand, Computer Science or Informatics Practices, and others</td></tr>
      <tr><td>Arts</td><td>None fixed: three subjects from the list</td><td>Economics, Political Science, History, Geography, Mathematics, literature papers including Rajasthani, Sociology, Psychology, Music, Drawing and more</td></tr>
      <tr><td>Agriculture</td><td>Agriculture (84), Agriculture Biology (38)</td><td>One of Agriculture Chemistry, Physics, Mathematics and others</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two consequences for tutoring. A science student picks biology or mathematics as the third subject, and that
    choice decides between the NEET and JEE routes later. And a commerce student who takes mathematics as the third
    subject is sitting the same mathematics paper as a science student, not a lighter commerce version. Subject help is
    on our <a href="{{ url('/physics-home-tutor-jaipur') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-jaipur') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-jaipur') }}">biology</a>,
    <a href="{{ url('/accountancy-home-tutor-jaipur') }}">accountancy</a> and
    <a href="{{ url('/economics-home-tutor-jaipur') }}">economics</a> pages for Jaipur, and the
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">board and stream guide</a> helps with the choice itself.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rbj-twelve">How Class 12 papers are marked</h2>
  <p>
    Subjects with laboratory work follow one pattern and the rest another. Both appear in the 2026–27 syllabus:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Two marking patterns in RBSE Senior Secondary</caption>
    <thead>
      <tr><th scope="col">Pattern</th><th scope="col">Subjects</th><th scope="col">How the 100 marks split</th></tr>
    </thead>
    <tbody>
      <tr><td>Theory with practical</td><td>Physics, Chemistry, Biology (also Geology, Computer Science and some arts subjects)</td><td>Theory paper of 3 hours 15 minutes for 56 marks plus 14 sessional (70 in all, pass 23); a separate practical exam of 4 hours for 30 (pass 10). Theory and practical must each be passed.</td></tr>
      <tr><td>Single paper</td><td>Mathematics, Accountancy, Business Studies, Economics, English, Hindi</td><td>One paper of 3 hours 15 minutes for 80 marks plus 20 sessional</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The 56-mark theory paper in physics is tight. The syllabus gives optics 11 marks and electromagnetic induction with
    alternating current 9, against just 2 for electromagnetic waves, so a tutor's revision order should follow those
    numbers rather than the textbook's chapter order. Because the practical has its own pass mark, a student strong in
    theory still has to take the practical file and the viva seriously.
  </p>
  <p>
    An RBSE science student who is also aiming at a national entrance has one advantage: the board papers and the
    entrances draw on the same NCERT chapters, so one plan can serve both; our <a href="{{ url('/jee-home-tutor-jaipur') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor-jaipur') }}">NEET</a> pages for Jaipur explain how a home tutor fits beside
    coaching.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rbj-cbse">RBSE beside CBSE: same books, different paper</h2>
  <p>
    Because the textbooks overlap, families sometimes treat the two boards as interchangeable. For tuition, the
    differences that matter are these:
  </p>
  <ul>
    <li><strong>Paper length.</strong> RBSE papers run 3 hours 15 minutes for 80 marks. Timed practice should use that length and the board's own model questions, not another board's sample papers.</li>
    <li><strong>What the internal marks reward.</strong> RBSE's 20 sessional marks include attendance, conduct and tree planting alongside tests and projects. CBSE's internal marks are built differently; see our <a href="{{ url('/cbse-home-tutor-jaipur') }}">CBSE home tutors in Jaipur</a> page.</li>
    <li><strong>Medium.</strong> Hindi-medium answers are normal on RBSE, and a tutor has to teach the Hindi terms the examiner expects.</li>
    <li><strong>The Class 12 practical.</strong> Physics, chemistry and biology are 70 theory plus 30 practical, each with its own pass mark.</li>
  </ul>
  <p>
    If your child is on another board, our <a href="{{ url('/icse-home-tutor-jaipur') }}">ICSE and ISC</a>,
    <a href="{{ url('/ib-tutor-jaipur') }}">IB</a> and <a href="{{ url('/igcse-tutor-jaipur') }}">IGCSE</a> pages for
    Jaipur cover those.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rbj-after">After the result: supplementary exams, scrutiny and marksheets</h2>
  <p>
    The board's home page carries separate result links for the main and supplementary examinations, a supplementary
    timetable and a scrutiny portal, so a student who falls short in a subject has a route back within the same year.
    The board also states that its certificates and marksheets from 2015 to 2025 are available on DigiLocker and Raj
    eVault. The rules and fees for each step are announced in the board's own notices; a tutor's role is to prepare the
    student for the supplementary paper, not to interpret the procedure for you. The "Books / Old Papers / Model
    Questions" section of the site is where past papers and model questions sit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rbj-plan">A four-year RBSE tuition plan</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>From Class 9 to the Senior Secondary paper</caption>
    <thead>
      <tr><th scope="col">Year</th><th scope="col">Tutor's focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9</td><td>NCERT chapters done fully; written answers in the student's medium; school tests treated seriously from the first one</td><td>Two</td></tr>
      <tr><td>Class 10</td><td>Revision ordered by chapter weight; the three periodic tests and the half-yearly; full 3¼-hour papers from the board's model questions</td><td>Two or three</td></tr>
      <tr><td>Class 11</td><td>The new faculty's core subjects, especially physics, mathematics or accountancy, which carry straight into Class 12</td><td>One per subject</td></tr>
      <tr><td>Class 12</td><td>Theory papers to the unit weights; practical file and viva; entrance work alongside where the student needs it</td><td>Two per core subject near the exam</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rbj-zones">Where RBSE tutors come from, zone by zone</h2>
  <p>
    A weekly tutor has to make the same trip every week, so we match on the journey as well as the subject. Notes from
    our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/jaipur/zone/c-scheme-bani-park-vidhyadhar-nagar') }}">C-Scheme, Bani Park and Vidhyadhar Nagar</a>:</strong> {!! $rbjA('jhotwara', 'Jhotwara') !!} grew beside one of the city's older industrial areas and is mostly houses and builder floors, so parking is easier than in the centre; on {!! $rbjA('sikar-road', 'Sikar Road') !!}, say which end of the highway you live on, because that decides which tutors can reach you.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/raja-park-jawahar-nagar-bapu-nagar') }}">Raja Park, Jawahar Nagar and Bapu Nagar</a>:</strong> {!! $rbjA('bapu-nagar', 'Bapu Nagar') !!} sits between Tonk Road and C-Scheme, which lets tutors from the south come in without crossing the old city.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/vaishali-nagar-west-jaipur') }}">Vaishali Nagar and West Jaipur</a>:</strong> {!! $rbjA('sodala', 'Sodala') !!} has Ram Nagar station on Hawa Sadak, so a tutor can ride the Pink Line and walk the rest.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/mansarovar-sanganer') }}">Mansarovar and Sanganer</a>:</strong> in {!! $rbjA('sanganer', 'Sanganer') !!}'s older lanes a tutor on a two-wheeler finds the house more easily than one in a car.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/malviya-nagar-jagatpura-tonk-road') }}">Malviya Nagar, Jagatpura and Tonk Road</a>:</strong> {!! $rbjA('durgapura', 'Durgapura') !!} has its own railway station and well-laid roads, and tutors from Bajaj Nagar or Pratap Nagar reach it along Tonk Road.</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/central-and-north-jaipur-tuition-guide') }}">central and north Jaipur</a> and
    <a href="{{ url('/blog/south-and-west-jaipur-tuition-guide') }}">south and west Jaipur</a> guides go area by area,
    and every locality is listed on the <a href="{{ url('/city/jaipur') }}">Jaipur home tutors</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rbj-mode">Home, online, or a mix?</h2>
  <p>
    For Class 10 mathematics and science, and for any Hindi-medium student, a tutor at the table can check the written
    answer and the terms used in it line by line, which is what the board marks. In Class 12, when a student's day may
    already include school and coaching, one home session and one shorter online session a week is often easier to
    keep. Online also helps for a subject no nearby tutor teaches, such as geology or a literature paper. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online tutoring</a> comparison sets out the
    trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rbj-demo">Questions for an RBSE demo class</h2>
  <ol>
    <li><strong>Which RBSE classes and subjects have you taught?</strong> A Class 12 chemistry tutor is not automatically the right Class 10 science tutor.</li>
    <li><strong>Have you read the 2026–27 syllabus?</strong> Ask which chapters carry the most marks in your child's subject.</li>
    <li><strong>Can you teach in Hindi medium?</strong> Ask to see an answer written with the textbook's terms.</li>
    <li><strong>How will you use the periodic tests?</strong> They feed the sessional marks.</li>
    <li><strong>What is your plan for the practical?</strong> For Class 12 science, the practical has its own pass mark.</li>
    <li><strong>Which route will you take, and at what time?</strong> Tonk Road and Ajmer Road are slow in the evening rush.</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching tutor
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before
    their profile goes live. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> has more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rbj-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-jaipur') }}">home tuition fees in Jaipur</a>.
  </p>
  <p>
    Tell us the class, the faculty, the medium, the subjects, your colony with its sector or scheme, and the slots that
    work; the first class is a <a href="{{ url('/demo-class') }}">free demo</a>. You can browse
    <a href="{{ url('/tutors') }}">tutor profiles</a> first, or, if you teach RBSE subjects, see
    <a href="{{ url('/tuition-jobs/jaipur') }}">tuition jobs in Jaipur</a>.
  </p>
  </section>

  </div>
</article>
