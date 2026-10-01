{{--
  Board page for "ICSE home tutor Faridabad" (CISCE: ICSE Class 10 and ISC
  Class 12). Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths),
  Aaditya Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths). No anecdotes, years or results are claimed for any of
  them. No schools, coaching institutes, societies, developers or people named.

  Board facts reworded from the Gurgaon board hub (icse-home-tutor-gurgaon),
  which cites (cisce.org, read 1 Oct 2026):
  - ICSE Regulations, Year 2027: Group I compulsory (English, a second
    language, History, Civics & Geography), Group II any two or three
    (Mathematics, Science, Economics, Commercial Studies, a modern foreign or
    classical language, Environmental Science), 80% external / 20% internal;
    Group III one subject (Computer Applications, Economic Applications,
    Commercial Applications, Art, Physical Education, Robotics and AI and
    others), 50% / 50%.
  - ICSE Mathematics (51), Year 2027 syllabus: one 3-hour paper of 80 marks
    plus 20 marks internal assessment; at least two assignments, assessed by
    the subject teacher and an external examiner.
  - ICSE Science (52) Physics, Chemistry, Biology, Year 2028 syllabuses: each
    one 2-hour paper of 80 marks plus 20 marks internal assessment of
    practical work.
  - ICSE Analysis of Pupil Performance (CISCE publishes these subject by
    subject).
  - ISC Regulations: English compulsory with three, four or five electives, no
    more than six subjects; practical exam needed in subjects with practicals;
    no Class XII subject not studied in Class XI; no change of subject after
    15 September of the Class XI year; promotion to XII needs 35% in four
    subjects including English and 75% attendance; grades 1 to 9; pass
    certificate needs four or more subjects including English, plus SUPW and
    Community Service; Physics cannot be combined with Engineering Science.
  - ISC Mathematics (860), Year 2027: Paper I theory, 3 hours, 80 marks, and
    Paper II project work, 20 marks, in Class XI and Class XII.
  Board mix and HBSE wording only as the Faridabad hub view states them (ICSE
  and ISC have a loyal following; HBSE conducts Haryana's Class 10 and 12
  exams, own pattern, Hindi or English medium). HBSE in general terms only.
  Local detail only from database/seo-content/areas/faridabad-research.json,
  faridabad-zone-guides.json, zones/faridabad.json and the Faridabad hub. Fee
  wording is the approved NXTutors sentence. FAQs:
  faqs/icse-home-tutor-faridabad.php. Area links render only for active
  Faridabad areas.
--}}
@php
  $ficSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ficA = function (string $slug, string $label) use ($ficSlugs) {
      return in_array($slug, $ficSlugs, true)
          ? '<a href="' . e(url('/city/faridabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide fic-guide" aria-labelledby="ficGuideTitle">
  <h2 id="ficGuideTitle">ICSE and ISC tutors in Faridabad: a CISCE specialist, matched to your sector</h2>

  <p class="nx-guide__lede">
    ICSE and ISC have a loyal following in Faridabad, even though CBSE is the larger board here. CISCE's papers put
    real weight on English, on breadth and on written answers, and a CISCE tutor is a narrower search than a CBSE one, so where you live and when you
    can offer a slot matter more. This page explains how the ICSE and ISC years are built, which papers cause the most
    trouble, what a tutor should do in a session, how tutors reach each part of the city, and what to look for in the
    free demo. Abhinandan Tiwary (Class 10 CBSE and ICSE maths) and Aaditya Kashyap (CBSE and ICSE science) wrote it,
    with Ajay Vatsyayan (IB, IGCSE and ISC maths) on the ISC sections.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#fic-place">CISCE, CBSE and HBSE</a> ·
    <a href="#fic-groups">The three ICSE groups</a> ·
    <a href="#fic-papers">Maths and science papers</a> ·
    <a href="#fic-ladder">Class 6 to Class 12</a> ·
    <a href="#fic-isc">ISC rules</a> ·
    <a href="#fic-subjects">Subjects</a> ·
    <a href="#fic-session">A good session</a> ·
    <a href="#fic-reach">Tutors by zone</a> ·
    <a href="#fic-demo">The demo</a> ·
    <a href="#fic-start">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="fic-place">How the CISCE boards differ from CBSE and the Haryana board</h2>
  <p>
    Three kinds of Indian board meet in Faridabad. CBSE, which most students follow, builds its papers on the NCERT
    books. The Board of School Education Haryana, or HBSE, sets the state's Class 10 and Class 12 exams to its own
    pattern, in schools that may teach in Hindi or English. CISCE, the council behind ICSE and ISC, asks for more
    separate papers in Class 10 and more extended writing in almost every subject, including history and geography.
  </p>
  <p>
    For a family, the practical difference is presentation. An ICSE answer earns its marks through complete working,
    precise terms and organised paragraphs, and a student who joins from a state-board or CBSE school often knows the
    content but writes too briefly. A tutor who marks writing line by line closes that gap faster than one who simply
    re-teaches chapters.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fic-groups">The three ICSE subject groups</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How CISCE's ICSE regulations group the Class 10 subjects</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">What a student takes</th><th scope="col">Exam and internal weight</th><th scope="col">What it means for tuition</th></tr>
    </thead>
    <tbody>
      <tr><td>I</td><td>All of: English, a second language, and History, Civics and Geography</td><td>80% paper, 20% internal</td><td>Long written answers marked for expression as well as facts</td></tr>
      <tr><td>II</td><td>Two or three of: Mathematics, Science, Economics, Commercial Studies, a modern foreign or classical language, Environmental Science</td><td>80% paper, 20% internal</td><td>Where most tutoring hours go, especially maths and the sciences</td></tr>
      <tr><td>III</td><td>One applied subject, such as Computer Applications, Economic Applications, Commercial Applications, Art, Physical Education or Robotics and AI</td><td>50% paper, 50% internal</td><td>Steady project work through the year matters as much as the exam</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fic-papers">The maths and science papers in detail</h2>
  <p>
    <strong>ICSE Mathematics</strong> is a single three-hour paper worth 80 marks, with 20 marks of internal assessment
    built from at least two assignments. Those assignments are marked separately by the subject teacher and by an
    external examiner. Alongside algebra, geometry, trigonometry and statistics, the syllabus carries commercial
    mathematics such as banking and shares, and method marks depend on every step being visible.
  </p>
  <p>
    <strong>ICSE Science</strong> is three papers, not one. Physics, Chemistry and Biology each have their own
    two-hour, 80-mark paper and 20 marks of internal assessment drawn from practical work. That changes how you choose
    a tutor: someone fluent in physics numericals may be shaky on biology diagrams or balancing chemical equations, so
    ask about all three or plan a separate tutor for the weakest.
  </p>
  <p>
    After each exam, CISCE releases an Analysis of Pupil Performance for every subject, setting out the errors
    examiners saw most and what a full-credit answer needed. Together with the specimen papers, these reports are the
    most direct guide to how the board marks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fic-ladder">From Class 6 to Class 12 on the CISCE route</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The CISCE years, and the habit each one should build</caption>
    <thead>
      <tr><th scope="col">Classes</th><th scope="col">What is assessed</th><th scope="col">Habit to build</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>The school's own exams and projects</td><td>Neat stepwise maths, labelled diagrams, paragraphs that answer the question</td></tr>
      <tr><td>9</td><td>School exams, as the two-year ICSE syllabus starts</td><td>Keeping every paper moving, not only maths and science</td></tr>
      <tr><td>10</td><td>ICSE papers plus internal work (20%, or 50% in Group III)</td><td>Specimen papers, examiner reports and timed answers, paper by paper</td></tr>
      <tr><td>11</td><td>School exams; promotion needs 35% in four subjects including English</td><td>Choosing electives carefully and absorbing the step up from ICSE early</td></tr>
      <tr><td>12</td><td>ISC theory papers, practical exams and project work</td><td>Depth in each elective, with practical and project deadlines met</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fic-isc">ISC rules that should shape your plans</h2>
  <p>
    In ISC, English is compulsory and a student adds three, four or five electives, to a maximum of six subjects. The
    regulations contain a few rules that catch families out:
  </p>
  <ul>
    <li><strong>Subjects are fixed early.</strong> No change is allowed after 15 September of the Class 11 registration year, and nothing can be taken in Class 12 that was not studied in Class 11.</li>
    <li><strong>Class 11 has a bar to clear.</strong> Promotion needs at least 35% in four subjects, English among them, and 75% attendance.</li>
    <li><strong>Practicals are part of the subject.</strong> Where a subject has a practical exam, missing it leaves the subject incomplete.</li>
    <li><strong>Not every pairing is allowed.</strong> Physics, for example, cannot be combined with Engineering Science.</li>
    <li><strong>Grading runs from 1 to 9.</strong> A pass certificate needs four or more subjects including English, plus Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    ISC Mathematics pairs a three-hour, 80-mark theory paper with 20 marks of project work, in both Class 11 and Class
    12. Our <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page covers that subject on its own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fic-subjects">Which subjects CISCE families usually want help with</h2>
  <p>
    In ICSE, maths and the three sciences come first, because marks there rest on method practised week after week.
    English, and History, Civics and Geography, follow closely, since they reward long, well-ordered answers that a
    tutor can correct. In ISC the requests narrow to the electives: maths, physics and chemistry for science students,
    and accounts, commerce and economics for commerce.
  </p>
  <ul>
    <li><strong>Maths:</strong> <a href="{{ url('/maths-home-tutor-faridabad') }}">maths home tutors in Faridabad</a>, and the <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a>.</li>
    <li><strong>Physics, chemistry and biology:</strong> <a href="{{ url('/science-home-tutor-faridabad') }}">science</a>, <a href="{{ url('/physics-home-tutor-faridabad') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-faridabad') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-faridabad') }}">biology</a> tutors in Faridabad.</li>
    <li><strong>English:</strong> <a href="{{ url('/english-home-tutor-faridabad') }}">English home tutors in Faridabad</a>, with guides to <a href="{{ url('/blog/icse-class-10-english-papers') }}">the ICSE Class 10 English papers</a> and <a href="{{ url('/blog/isc-class-12-english-literaturelanguage') }}">ISC Class 12 English</a>.</li>
    <li><strong>ISC with an entrance exam:</strong> <a href="{{ url('/jee-home-tutor-faridabad') }}">JEE</a> or <a href="{{ url('/neet-home-tutor-faridabad') }}">NEET</a> tutors in Faridabad, plus <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics</a> and <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry</a> taught to the ISC syllabus on request.</li>
  </ul>
  <p>
    For more on how the board works, our <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE home tutors in Gurgaon</a>
    page goes deeper into each paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fic-session">What a good ICSE or ISC session includes</h2>
  <p>
    Because CISCE marks presentation as well as content, the writing has to happen during the session, not only at
    home. A useful hour opens with the student's own answers to two or three questions from last week, which the tutor
    marks the way an examiner would: a missing step, a unit left off, an unlabelled diagram, a sentence that does not
    say what the student meant. New teaching follows, from the textbook and then from specimen-paper questions. The last
    part is one answer written against the clock. For ISC sciences, some sessions should go to the practical side:
    recording observations, choosing axes for a graph and writing a conclusion the examiner can credit. For ISC maths,
    the tutor should guide the project's method without writing any of it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fic-reach">How CISCE tutors reach each part of Faridabad</h2>
  <p>
    With fewer specialists to choose from, a route the tutor can repeat every week is what keeps tuition going. Here is
    how the journey looks in six areas, one in each of six zones:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Reaching a home in six Faridabad areas</caption>
    <thead>
      <tr><th scope="col">Area and zone</th><th scope="col">Usual route for a tutor</th><th scope="col">What to arrange</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $ficA('old-faridabad', 'Old Faridabad') !!} (<a href="{{ url('/city/faridabad/zone/nit-old-faridabad') }}">NIT and Old Faridabad</a>)</td><td>Violet Line to Old Faridabad in Sector 16A, or the railway station in Sector 20A, then a short walk or auto</td><td>A clear landmark; early slots before the evening market crowd</td></tr>
      <tr><td>{!! $ficA('sector-16', 'Sector 16') !!} (<a href="{{ url('/city/faridabad/zone/central-sectors-mathura-road') }}">central sectors</a>)</td><td>Old Faridabad station and a brief auto, or a two-wheeler</td><td>Parking near the Sector 16 market is tight in the evening</td></tr>
      <tr><td>{!! $ficA('sector-29', 'Sector 29') !!} (<a href="{{ url('/city/faridabad/zone/sectors-28-31-37') }}">Sectors 28–31 and 37</a>)</td><td>Violet Line to Sector 28, then a short auto; Badkhal Mor is the next option</td><td>For gated flats, give security the tutor's name beforehand</td></tr>
      <tr><td>{!! $ficA('sector-45', 'Sector 45') !!} (<a href="{{ url('/city/faridabad/zone/surajkund-sainik-colony') }}">Surajkund and Sainik Colony</a>)</td><td>Sector 28, NHPC Chowk or Mewla Maharajpur station, then an auto into the sector</td><td>Add the tutor to the apartment visitor list before the first class</td></tr>
      <tr><td>{!! $ficA('sector-3', 'Sector 3') !!} (<a href="{{ url('/city/faridabad/zone/ballabhgarh-southern-sectors') }}">Ballabhgarh and southern sectors</a>)</td><td>Ride over from nearby sectors, or the metro to Sihi or Ballabhgarh and an auto</td><td>A slightly later start avoids rush-hour traffic on the bypass</td></tr>
      <tr><td>{!! $ficA('sector-76', 'Sector 76') !!} (<a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-75-80') }}">Greater Faridabad, Sectors 75–80</a>)</td><td>Across the Agra canal: metro to Sihi or Escorts Mujesar and an auto, or by Tigaon Road</td><td>Share gate-entry details; plan the canal crossing before day one</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Sectors 81 to 89 have their own <a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-81-89') }}">zone
    page</a>. Where the nearest ICSE or ISC specialist lives far away, a mix of one home class at the weekend and one
    online class on a weekday keeps the same tutor in place. Online works for CISCE subjects only if the tutor can
    see written answers as they are produced, on a tablet or through a camera over the notebook. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor vs online tutor</a> post compares the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fic-demo">What to check in the free demo</h2>
  <ol>
    <li><strong>Has the tutor taught ICSE or ISC recently?</strong> A strong CBSE tutor is not automatically suited to CISCE; ask which papers and which class.</li>
    <li><strong>Do they use the examiner reports?</strong> Ask how the Analysis of Pupil Performance changes what they teach.</li>
    <li><strong>Can they cover all three sciences?</strong> Ask for a short physics explanation and then a biology diagram.</li>
    <li><strong>Do they correct writing?</strong> In English, history and geography, they should mark expression as well as facts.</li>
    <li><strong>For ISC:</strong> how will they support projects and practicals while leaving the work to your child?</li>
  </ol>
  <p>
    You receive two or three matched tutors, see each fee before the demo, and can switch tutor later at no cost.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes
    live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fic-start">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For ICSE and ISC, the
    class, the number of papers, how near the exam is and the tutor's journey settle the figure. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-faridabad') }}">Faridabad fees post</a>.
  </p>
  <p>
    Tell us ICSE or ISC, the class, subjects, your sector or colony and your free slots. We shortlist two or three
    tutors, and the first class is a <a href="{{ url('/demo-class') }}">free demo</a>. Browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, see all areas on our
    <a href="{{ url('/city/faridabad') }}">Faridabad tutors page</a>, or compare with
    <a href="{{ url('/cbse-home-tutor-faridabad') }}">CBSE home tutors in Faridabad</a>. Tutors who teach CISCE
    subjects can find open requests on <a href="{{ url('/tuition-jobs/faridabad') }}">Faridabad tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
