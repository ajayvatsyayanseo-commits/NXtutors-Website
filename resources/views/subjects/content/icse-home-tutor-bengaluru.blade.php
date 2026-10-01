{{--
  Board page "ICSE home tutor Bengaluru" (CISCE: ICSE Class 10, ISC Class 12).
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya
  Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE
  and ISC maths). No anecdotes, years or results are claimed for any of them.
  No schools, societies or people are named.

  CISCE facts are only those stated in icse-home-tutor-gurgaon, which cites
  (cisce.org, read 1 Oct 2026): ICSE Regulations, Year 2027 (Groups I-III,
  80/20 and 50/50 splits; Group III is one subject); ICSE Mathematics (51),
  Year 2027 (3-hour, 80-mark paper + 20 internal from at least two
  assignments); ICSE Physics, Chemistry, Biology, Year 2028 (separate 2-hour,
  80-mark papers + 20 practical internal); Analysis of Pupil Performance
  reports; ISC Regulations (English + 3-5 electives, max six; no change after
  15 September of Class XI; promotion 35% in four subjects incl. English and
  75% attendance; grades 1-9; SUPW and Community Service); ISC Mathematics
  (860), Year 2027 (80-mark theory + 20 project).
  Karnataka SSLC and PUC described only in general terms, as the Bengaluru
  hub does. Local detail only from database/seo-content/areas/
  bengaluru-research.json, bengaluru-zone-guides.json, zones/bengaluru.json
  and the Bengaluru city hub. Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/icse-home-tutor-bengaluru.php. Area links render only
  when that Bengaluru area page exists and is active.
--}}
@php
  $icblSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $icblA = function (string $slug, string $label) use ($icblSlugs) {
      return in_array($slug, $icblSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide icbl-guide" aria-labelledby="icblGuideTitle">
  <h2 id="icblGuideTitle">ICSE and ISC tutors in Bengaluru: breadth, long answers and a plan for every paper</h2>

  <p class="nx-guide__lede">
    The CISCE council examines ICSE at the end of Class 10 and ISC at the end of Class 12, and in Bengaluru it sits
    beside the Karnataka state board, CBSE and the international programmes. Parents who choose ICSE usually know its
    reputation: many separate papers, a wide syllabus and examiners who want answers written out in full. That makes
    the choice of tutor less about one hard chapter and more about steady habits across a dozen subjects. Below we set
    out how ICSE and ISC are structured, where Bengaluru families tend to ask for help, how tutors reach each zone and
    what to test in the free demo. Abhinandan Tiwary (Class 10 CBSE and ICSE maths) and Aaditya Kashyap (CBSE and ICSE
    science) wrote the ICSE parts, and Ajay Vatsyayan (IB, IGCSE and ISC maths) the ISC parts.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icbl-place">ICSE in Bengaluru</a> ·
    <a href="#icbl-state">Compared with SSLC</a> ·
    <a href="#icbl-groups">Subject groups</a> ·
    <a href="#icbl-papers">Maths and science papers</a> ·
    <a href="#icbl-isc">ISC rules</a> ·
    <a href="#icbl-ladder">Year by year</a> ·
    <a href="#icbl-subjects">Subjects and pages</a> ·
    <a href="#icbl-zones">Reaching your home</a> ·
    <a href="#icbl-demo">Demo checklist</a> ·
    <a href="#icbl-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icbl-place">Where ICSE fits in Bengaluru's school mix</h2>
  <p>
    The Bengaluru city hub lists four examination routes for the city's families, and CISCE is one of them. We do not
    put a number on how many children follow it; that varies by school and neighbourhood, and we would rather say
    nothing than guess. In practice, an ICSE request reaches us as one of three situations: a middle-school child who
    needs the writing habits ICSE expects, a Class 9 or 10 student who is falling behind in one or two of many
    papers, or an ISC student whose chosen electives have suddenly become much deeper than the ICSE versions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icbl-state">ICSE compared with the Karnataka state board</h2>
  <p>
    The state board holds the SSLC at the end of Class 10 and then the pre-university course, using state textbooks and
    a scheme it announces in its own notices. Without going into that scheme, three broad contrasts help a family
    moving between the two. ICSE students write more: answers in history, geography, English and even science are
    expected in organised paragraphs. ICSE splits science into three separately examined subjects rather than one.
    And after Class 10, CISCE students continue into ISC within the same council, while state-board students move into
    PUC. A tutor who has taught both can make a move between them much smoother.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icbl-groups">The three ICSE subject groups</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE Class 10 subjects as CISCE groups them</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">What a student takes</th><th scope="col">Exam and school marks</th></tr>
    </thead>
    <tbody>
      <tr><td>I</td><td>All of: English, a second language, and History, Civics and Geography</td><td>80% paper, 20% internal</td></tr>
      <tr><td>II</td><td>Two or three from Mathematics, Science, Economics, Commercial Studies, a modern foreign or classical language and Environmental Science</td><td>80% paper, 20% internal</td></tr>
      <tr><td>III</td><td>One applied subject, such as Computer Applications, Economic Applications, Commercial Applications, Art, Physical Education or Robotics and AI</td><td>Half paper, half internal</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Group III subject is where steady project work through the year earns half the mark, so it needs a schedule
    more than a tutor. Groups I and II are decided mostly in the final papers, which is where tuition usually goes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icbl-papers">What the ICSE maths and science papers ask</h2>
  <p>
    ICSE Mathematics is a single three-hour paper of 80 marks, with 20 more marks of internal assessment drawn from at
    least two assignments, each marked by the subject teacher and an external examiner. Commercial topics such as
    banking and shares sit alongside algebra, geometry, trigonometry and statistics, and the examiners credit method,
    so a correct answer with missing steps loses marks.
  </p>
  <p>
    Science is examined as three subjects. Physics, Chemistry and Biology each have a two-hour, 80-mark paper and
    20 internal marks for practical work. A child can be confident with circuits and lenses and still drop marks on
    chemical equations or unlabelled diagrams, so a science tutor should either cover all three well or the family
    should know which one needs a specialist. CISCE also releases an Analysis of Pupil Performance for each subject,
    where examiners describe the errors they saw; a tutor who reads these teaches the way the papers are marked.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icbl-isc">ISC in Classes 11 and 12: the rules that shape tutoring</h2>
  <ul>
    <li>English is compulsory, with three, four or five electives and no more than six subjects in all.</li>
    <li>Subjects are fixed after 15 September of the Class 11 year, and a Class 12 subject must have been studied in Class 11.</li>
    <li>Promotion to Class 12 needs at least 35% in four subjects including English, plus 75% attendance.</li>
    <li>Subjects with a practical cannot be completed without the practical exam, and some pairings are barred, such as Physics with Engineering Science.</li>
    <li>Results come as grades from 1 to 9; the pass certificate needs four or more subjects including English, plus Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    ISC Mathematics has an 80-mark, three-hour theory paper and a 20-mark project in both Class 11 and Class 12. Our
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page and the
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> go deeper into the papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icbl-ladder">The CISCE years for a Bengaluru student</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Classes 6 to 12 on the ICSE and ISC route</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What is assessed</th><th scope="col">The tutor's main job</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 to 8</td><td>The school's own tests and projects</td><td>Writing at length, number work, science words used precisely</td></tr>
      <tr><td>Class 9</td><td>School exams as the two-year ICSE syllabus starts</td><td>Keeping every paper moving; full working from week one</td></tr>
      <tr><td>Class 10</td><td>ICSE papers plus internal marks</td><td>Specimen papers, examiner reports, timed practice paper by paper</td></tr>
      <tr><td>Class 11</td><td>School exams; promotion rule of 35% in four subjects</td><td>Bridging the jump from ICSE in the electives</td></tr>
      <tr><td>Class 12</td><td>ISC theory, practicals and projects</td><td>Depth in each elective and deadlines for practical files</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icbl-subjects">Subjects Bengaluru ICSE families ask for, and where to look</h2>
  <p>
    Maths and the three sciences come first, because their marks build week on week. English and History, Civics and
    Geography follow, since long answers improve fastest when someone marks them regularly. In ISC the request narrows
    to the electives: maths, physics, chemistry or biology for science students, and accounts, commerce or economics
    for commerce.
  </p>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-bengaluru') }}">Maths home tutors in Bengaluru</a> and <a href="{{ url('/science-home-tutor-bengaluru') }}">science home tutors</a> for the ICSE years.</li>
    <li><a href="{{ url('/physics-home-tutor-bengaluru') }}">Physics</a>, <a href="{{ url('/chemistry-home-tutor-bengaluru') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-bengaluru') }}">biology</a> tutors for ISC.</li>
    <li><a href="{{ url('/english-home-tutor-bengaluru') }}">English home tutors in Bengaluru</a> for the two ICSE papers and the ISC composition; the <a href="{{ url('/blog/isc-class-12-english-literaturelanguage') }}">ISC Class 12 English</a> post helps too.</li>
  </ul>
  <p>
    For more on the board itself, our reference page on
    <a href="{{ url('/icse-home-tutor-gurgaon') }}">how ICSE and ISC work</a> covers each stage in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icbl-zones">Getting an ICSE tutor to your home</h2>
  <p>
    ICSE and ISC specialists are fewer than general tutors, so the first shortlist may include someone from a
    neighbouring zone. What decides whether that works is the last part of the journey and the front gate.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The last mile and the gate, zone by zone</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Homes and entry</th><th scope="col">Travel note</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/bengaluru/zone/koramangala-hsr-bellandur') }}">Koramangala, HSR and Bellandur</a></td><td>Bells in Koramangala's inner blocks; security desks in the towers</td><td>Give the block number, as the Inner Ring Road splits it</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/jayanagar-jp-nagar-banashankari') }}">Jayanagar, JP Nagar and Banashankari</a>, e.g. {!! $icblA('jayanagar', 'Jayanagar') !!}</td><td>Mostly houses, so no gate list</td><td>Evening parking near the 4th Block shops is tight</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/btm-bannerghatta-road-electronic-city') }}">BTM, Bannerghatta Road and Electronic City</a>, e.g. {!! $icblA('electronic-city', 'Electronic City') !!}</td><td>Society gates register visitors in advance</td><td>Keep lessons clear of office shift changes</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/indiranagar-old-airport-road') }}">Indiranagar and Old Airport Road</a>, e.g. {!! $icblA('cv-raman-nagar', 'CV Raman Nagar') !!}</td><td>Gated complexes in CV Raman Nagar</td><td>Baiyappanahalli station is closest for the last leg</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/whitefield-marathahalli-kr-puram') }}">Whitefield, Marathahalli and KR Puram</a></td><td>Desks that may ask for photo ID on a first visit</td><td>Metro plus a short auto beats driving</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/hennur-kalyan-nagar-banaswadi') }}">Hennur, Kalyan Nagar and Banaswadi</a></td><td>Block and cross numbers in HRBR Layout</td><td>No metro yet; a nearby tutor keeps weekdays regular</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/hebbal-rt-nagar-yelahanka') }}">Hebbal, RT Nagar and Yelahanka</a>, e.g. {!! $icblA('rt-nagar', 'RT Nagar') !!}</td><td>Market lanes; agree where a two-wheeler can stand</td><td>Share a landmark with the block number</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/malleshwaram-rajajinagar-yeshwanthpur') }}">Malleshwaram, Rajajinagar and Yeshwanthpur</a></td><td>Houses and small buildings; some guarded gates</td><td>Green Line stations are close to most homes</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/vijayanagar-rr-nagar-kengeri') }}">Vijayanagar, RR Nagar and Kengeri</a>, e.g. {!! $icblA('vijayanagar', 'Vijayanagar') !!}</td><td>Plotted layouts with room to park; visitor lists in newer blocks</td><td>Purple Line stations from Vijayanagar west</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/frazer-town-richmond-town-ulsoor') }}">Frazer Town, Richmond Town and Ulsoor</a>, e.g. {!! $icblA('frazer-town', 'Frazer Town') !!}</td><td>Guards at many entrances</td><td>Frazer Town has no open station; agree an auto point</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    See every area on our <a href="{{ url('/city/bengaluru') }}">Bengaluru home tuition page</a>, and the
    <a href="{{ url('/blog/north-bengaluru-tuition-guide') }}">north Bengaluru</a> and
    <a href="{{ url('/blog/west-and-central-bengaluru-tuition-guide') }}">west and central Bengaluru</a> guides.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icbl-mode">Home, online or a mix</h2>
  <p>
    For ICSE up to Class 10, a home tutor who marks written answers at the table is hard to beat, and many families
    keep at least one home session. For ISC electives, and for a Class 10 student who needs a specialist in one
    science, online lessons widen the choice well beyond your zone. The tutor must see handwritten working live,
    through a tablet, shared whiteboard or a camera over the notebook, or method marks go unchecked.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icbl-demo">Demo checklist for an ICSE or ISC tutor</h2>
  <ol>
    <li><strong>Method marks.</strong> In maths, does the tutor insist on each step, units and the final form?</li>
    <li><strong>Examiner reports.</strong> Ask whether they use the Analysis of Pupil Performance alongside specimen papers.</li>
    <li><strong>Three sciences.</strong> Ask for a short physics explanation and then a labelled biology diagram, and see if both are confident.</li>
    <li><strong>Language in every subject.</strong> A good ICSE tutor corrects how an answer is written, not only what it says.</li>
    <li><strong>ISC projects and practicals.</strong> Ask how they guide project work and the practical file without doing it.</li>
    <li><strong>Subject choices.</strong> For Class 11, ask how they would advise on electives before the mid-September cut-off.</li>
  </ol>
  <p>
    You get two or three matched tutors and see each fee before the demo; switching later costs nothing. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icbl-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For ICSE and ISC, the
    class, the number of papers, how near the exams are and the tutor's travel move the figure. Read the
    <a href="{{ url('/blog/home-tuition-fees-bengaluru') }}">Bengaluru fees guide</a> or our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  <p>
    Tell us whether it is ICSE or ISC, the class, the subjects, your area and your free slots, and book the
    <a href="{{ url('/demo-class') }}">free demo class</a>. You can also browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>. Teachers who know the CISCE syllabus can find open requests on
    <a href="{{ url('/tuition-jobs/bengaluru') }}">Bengaluru tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
