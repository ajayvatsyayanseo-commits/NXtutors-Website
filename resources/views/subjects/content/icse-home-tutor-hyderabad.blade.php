{{--
  Board page "ICSE home tutor Hyderabad" (CISCE: ICSE Class 10, ISC Class 12).
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya
  Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE
  and ISC maths). No anecdotes, years or results are claimed for any of them.
  No schools, societies or people are named.

  CISCE facts are only those stated in icse-home-tutor-gurgaon, which cites
  (cisce.org, read 1 Oct 2026): ICSE Regulations, Year 2027; ICSE
  Mathematics (51), Year 2027; ICSE Physics, Chemistry, Biology, Year 2028;
  Analysis of Pupil Performance reports; ISC Regulations; ISC Mathematics
  (860), Year 2027. Group III is one subject.
  Telangana SSC and Intermediate described only in general terms, as the
  Hyderabad hub does. Local detail only from database/seo-content/areas/
  hyderabad-research.json, hyderabad-zone-guides.json, zones/hyderabad.json
  and the Hyderabad city hub. Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/icse-home-tutor-hyderabad.php. Area links render only
  when that Hyderabad area page exists and is active.
--}}
@php
  $ichySlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ichyA = function (string $slug, string $label) use ($ichySlugs) {
      return in_array($slug, $ichySlugs, true)
          ? '<a href="' . e(url('/city/hyderabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ichy-guide" aria-labelledby="ichyGuideTitle">
  <h2 id="ichyGuideTitle">ICSE and ISC home tutors in Hyderabad: written answers, many papers and the step to ISC</h2>

  <p class="nx-guide__lede">
    CISCE's two examinations, ICSE after Class 10 and ISC after Class 12, are one of the four routes the Hyderabad
    city hub describes, next to the Telangana state board, CBSE and the international boards. Their demands are
    distinctive: full, well-organised written answers over a wide syllabus, set literature in English, three separately
    examined sciences, and project work running through the year. A tutor who suits CBSE or Intermediate students is
    not automatically right for this. Here we cover how the ICSE and ISC years are built, how they compare with the
    state route, which subjects Hyderabad parents raise most, how tutors get to each zone and how to test the fit in a
    free demo. The ICSE maths and science sections reflect Abhinandan Tiwary's and Aaditya Kashyap's teaching areas;
    Ajay Vatsyayan, who teaches ISC maths among other courses, covers ISC.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ichy-where">CISCE in Hyderabad</a> ·
    <a href="#ichy-state">ICSE and SSC</a> ·
    <a href="#ichy-groups">Groups and marks</a> ·
    <a href="#ichy-maths">Maths and the sciences</a> ·
    <a href="#ichy-isc">ISC</a> ·
    <a href="#ichy-years">Year by year</a> ·
    <a href="#ichy-subjects">Subjects</a> ·
    <a href="#ichy-zones">Zones</a> ·
    <a href="#ichy-demo">Demo checklist</a> ·
    <a href="#ichy-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ichy-where">Where CISCE sits in the twin cities</h2>
  <p>
    The hub lists ICSE and ISC as one of four examination routes in Hyderabad and Secunderabad, and says the pressure
    in both is usually breadth: keeping every chapter fresh across many papers. We do not estimate how many children
    follow CISCE here, since we have no dependable figure. For matching, what helps is knowing which of three needs you
    have: building writing and number habits in the middle years, rescuing one or two papers in Class 9 or 10, or
    keeping up with the much deeper ISC electives.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ichy-state">ICSE and ISC compared with SSC and Intermediate</h2>
  <p>
    Telangana's Board of Secondary Education holds the SSC after Class 10; the Board of Intermediate Education then
    runs a two-year course in groups such as MPC and BiPC. The details of those papers belong on the state boards'
    websites. In general terms, a family moving between the systems notices that ICSE spreads science across three
    separately examined subjects, expects longer written answers in almost every paper, and leads into ISC under the
    same council rather than into a separate Intermediate board. ISC also asks students to choose electives in Class 11
    and fixes them early, where the Intermediate groups come as set packages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ichy-groups">ICSE groups and how marks divide</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The ICSE subject groups (CISCE regulations)</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Subjects</th><th scope="col">Paper / school</th></tr>
    </thead>
    <tbody>
      <tr><td>Group I, compulsory</td><td>English; a second language; History, Civics and Geography</td><td>80 / 20</td></tr>
      <tr><td>Group II, two or three subjects</td><td>Choices include Mathematics, Science, Economics, Commercial Studies, Environmental Science and a modern or classical language</td><td>80 / 20</td></tr>
      <tr><td>Group III, one subject</td><td>Applied options such as Computer Applications, Commercial or Economic Applications, Art, Physical Education, and Robotics and AI</td><td>50 / 50</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Because the Group III subject is half school-assessed, it is won by finishing projects on time. Groups I and II are
    where examination technique decides the result.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ichy-maths">ICSE Mathematics and the three sciences</h2>
  <p>
    ICSE Mathematics is one paper of three hours and 80 marks. The other 20 marks come from at least two assignments,
    each marked by the school's teacher and by an external examiner. Banking and shares sit in the syllabus beside
    algebra, geometry, trigonometry and statistics, and marks follow method, so every step needs to be on the page.
  </p>
  <p>
    Physics, Chemistry and Biology are examined separately, each in a two-hour, 80-mark paper, with 20 internal marks
    for practical work in each. Strength in one does not carry over to the others: a confident physics student can still
    lose marks on balanced equations or on a biology diagram without labels. CISCE's subject-wise Analysis of Pupil
    Performance, published after the exams, lists the mistakes examiners saw most; a tutor who teaches from those
    reports and from specimen papers is preparing your child for how the papers are actually marked.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ichy-isc">ISC: choosing and keeping electives</h2>
  <p>
    In ISC, English is compulsory and a student takes three, four or five electives, six subjects at most. The rules
    that most affect tutoring are about timing and completeness:
  </p>
  <ul>
    <li>No subject changes after 15 September of the Class 11 registration year, and nothing can be taken in Class 12 that was not studied in Class 11.</li>
    <li>Moving to Class 12 needs 35% in four subjects including English, on the cumulative average, plus 75% attendance.</li>
    <li>A subject with a practical is incomplete without the practical exam; Physics cannot be paired with Engineering Science.</li>
    <li>Grades run 1 to 9; a pass certificate needs passes in four or more subjects including English, and in Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    ISC Mathematics has a theory paper of 80 marks over three hours and 20 marks of project work, in both Class 11
    and Class 12. See the <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page and the
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ichy-years">From Class 6 to Class 12 on the CISCE route</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What each stage asks of a tutor</caption>
    <thead>
      <tr><th scope="col">Classes</th><th scope="col">Assessment</th><th scope="col">Tutor focus</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>School tests and projects</td><td>Long-form writing, neat maths working, science vocabulary</td></tr>
      <tr><td>9</td><td>School exams as the two-year ICSE syllabus begins</td><td>Not letting any of the many papers slip</td></tr>
      <tr><td>10</td><td>ICSE papers and internal marks</td><td>Specimen papers, examiner reports and timed answers</td></tr>
      <tr><td>11</td><td>School exams; the promotion rule applies</td><td>Electives chosen carefully, gaps from ICSE closed</td></tr>
      <tr><td>12</td><td>ISC papers, practicals and projects</td><td>Depth, practical records and project deadlines</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ichy-session">Inside a good ICSE lesson</h2>
  <p>
    Since CISCE rewards presentation, the hour should include real writing. A sound pattern: the student first
    attempts two or three questions from last week's topic and the tutor marks them line by line for missing steps,
    units, labels and, in the language-heavy papers, clarity. New material follows, taught from the textbook and then
    stretched with specimen-paper questions. The lesson closes with one answer written in full against the clock. In
    ISC science, part of the time goes to the practical: recording observations, choosing and drawing the right graph,
    and writing a conclusion an examiner can credit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ichy-subjects">What Hyderabad ICSE parents ask for</h2>
  <p>
    Maths and the sciences head the list, followed by English and History, Civics and Geography, where weekly marked
    writing makes the biggest difference. In ISC, requests narrow to the electives: maths and the sciences for science
    students, and accounts, commerce and economics for commerce students.
  </p>
  <ul>
    <li>Maths: <a href="{{ url('/maths-home-tutor-hyderabad') }}">maths tutors in Hyderabad</a>, ICSE and ISC.</li>
    <li>ICSE science in one place: <a href="{{ url('/science-home-tutor-hyderabad') }}">science tutors in Hyderabad</a>.</li>
    <li>One science at ISC level: <a href="{{ url('/physics-home-tutor-hyderabad') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-hyderabad') }}">chemistry</a> or <a href="{{ url('/biology-home-tutor-hyderabad') }}">biology</a>.</li>
    <li>Language and literature papers: <a href="{{ url('/english-home-tutor-hyderabad') }}">English tutors in Hyderabad</a>, plus the <a href="{{ url('/blog/isc-class-12-english-literaturelanguage') }}">ISC Class 12 English</a> post.</li>
  </ul>
  <p>
    The board itself is set out in our reference page,
    <a href="{{ url('/icse-home-tutor-gurgaon') }}">how ICSE and ISC work from Class 6 to 12</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ichy-zones">Getting a CISCE tutor to each zone</h2>
  <p>
    ICSE and ISC specialists are fewer than CBSE or state-board tutors, so we often look one zone further out. These
    notes, from our zone guides, cover what to tell a tutor coming to you for the first time.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Address details that save the first visit</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">What to send</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/hyderabad/zone/gachibowli-kondapur-madhapur') }}">Gachibowli, Kondapur and Madhapur</a></td><td>Visitor-app registration and whether the guard calls up first</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/kukatpally-miyapur-nizampet') }}">Kukatpally, Miyapur and Nizampet</a>, e.g. {!! $ichyA('miyapur', 'Miyapur') !!}</td><td>Colony name, landmark and map pin for the leg from the Red Line</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/manikonda-narsingi-kokapet') }}">Manikonda, Narsingi and Kokapet</a></td><td>Tower and flat number a day ahead</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/chandanagar-lingampally-tellapur') }}">Chandanagar, Lingampally and Tellapur</a></td><td>House number for independent homes; gate registration in Tellapur</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/banjara-hills-jubilee-hills-somajiguda') }}">Banjara Hills, Jubilee Hills and Somajiguda</a></td><td>Road number and house number together</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/ameerpet-begumpet-punjagutta') }}">Ameerpet, Begumpet and Punjagutta</a></td><td>A landmark and the floor, as many buildings hold several households</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/khairatabad-himayatnagar-abids') }}">Khairatabad, Himayatnagar and Abids</a>, e.g. {!! $ichyA('himayatnagar', 'Himayatnagar') !!}</td><td>The tutor's name and days for the watchman; Narayanguda or Chikkadpally station</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/secunderabad-marredpally-tarnaka') }}">Secunderabad, Marredpally and Tarnaka</a>, e.g. {!! $ichyA('tarnaka', 'Tarnaka') !!}</td><td>Colony name and a map pin, since inner lanes look alike</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/sainikpuri-alwal-trimulgherry') }}">Sainikpuri, Alwal and Trimulgherry</a>, e.g. {!! $ichyA('sainikpuri', 'Sainikpuri') !!}</td><td>House number and which colony gate to use</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/uppal-habsiguda-nacharam') }}">Uppal, Habsiguda and Nacharam</a>, e.g. {!! $ichyA('habsiguda', 'Habsiguda') !!}</td><td>Colony name, or the watchman's details in apartment blocks</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/dilsukhnagar-lb-nagar-vanasthalipuram') }}">Dilsukhnagar, LB Nagar and Vanasthalipuram</a></td><td>Your nearest Red Line station by name</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/mehdipatnam-tolichowki-attapur') }}">Mehdipatnam, Tolichowki and Attapur</a>, e.g. {!! $ichyA('mehdipatnam', 'Mehdipatnam') !!}</td><td>Expressway pillar number in Attapur; exact pin elsewhere</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Browse every area on the <a href="{{ url('/city/hyderabad') }}">Hyderabad home tuition page</a>, or read the
    <a href="{{ url('/blog/central-hyderabad-tuition-guide') }}">central Hyderabad tuition guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ichy-mode">Home or online for ICSE and ISC</h2>
  <p>
    For ICSE, a tutor at the table who marks every written answer is the strongest option, so home lessons are worth
    the effort of finding someone within reach. For ISC electives, especially a single science, online lessons with
    the right specialist often beat a weaker local match. A hybrid, with one home session and one online, works well
    when the specialist lives across the city. Online, insist that the tutor sees handwritten working as it is
    written.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ichy-demo">Demo checklist for ICSE and ISC</h2>
  <ol>
    <li>Ask the tutor to mark one of your child's maths answers. Do they deduct for missing steps the way CISCE examiners do?</li>
    <li>Ask which specimen papers and examiner reports they use this year.</li>
    <li>For science, ask about all three papers; a tutor strong only in physics is a partial fit.</li>
    <li>For English or History, watch whether they correct expression and structure, not only facts.</li>
    <li>For ISC, ask how they guide projects and practical records without writing them.</li>
    <li>For Class 11, ask how they would weigh elective choices before the September deadline.</li>
  </ol>
  <p>
    Two or three tutors make the shortlist, each fee is visible first, and changing tutor afterwards is free. Each
    tutor who joins clears an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before appearing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ichy-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. In ICSE and ISC the fee
    moves with the class, the number of papers, how close the exams are and how far the tutor travels. See the
    <a href="{{ url('/blog/home-tuition-fees-hyderabad') }}">Hyderabad fees guide</a> and the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  <p>
    Say whether it is ICSE or ISC, then the class, subjects, colony and hours; the first session is a
    <a href="{{ url('/demo-class') }}">free demo</a>. You can browse <a href="{{ url('/tutors') }}">tutor profiles</a>
    now. CISCE-trained teachers in the city can see requests on
    <a href="{{ url('/tuition-jobs/hyderabad') }}">Hyderabad tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
