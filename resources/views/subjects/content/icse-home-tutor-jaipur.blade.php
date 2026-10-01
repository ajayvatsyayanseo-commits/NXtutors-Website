{{--
  Board hub for "ICSE home tutor Jaipur" (CISCE: ICSE Class 10, ISC Class 12).
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya
  Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE
  and ISC maths). No anecdotes, years or results are claimed for any of them.
  No schools are named.

  Board facts restate only what icse-home-tutor-gurgaon states, which cites
  cisce.org (read 1 Oct 2026): ICSE Regulations (Group I compulsory: English,
  a second language, History Civics & Geography; Group II two or three from
  Mathematics, Science, Economics, Commercial Studies, a modern foreign or
  classical language, Environmental Science; both 80/20; Group III one
  applied subject, 50/50), ICSE Mathematics (3 h, 80 + 20 internal from at
  least two assignments, assessed by teacher and external examiner), ICSE
  Physics, Chemistry, Biology (2 h, 80 + 20 practical IA each), Analysis of
  Pupil Performance, ISC Regulations (English + three to five electives, up to
  six; practical exams compulsory; no Class XII subject not studied in XI; no
  change after 15 September of Class XI; promotion 35% in four subjects incl.
  English and 75% attendance; grades 1-9; pass certificate needs four
  subjects incl. English plus SUPW and Community Service; Physics not with
  Engineering Science), ISC Mathematics 860 (80 theory + 20 project, XI and
  XII). No exam dates.

  Local detail only from the city hub (jaipur.blade.php: CBSE, RBSE, CISCE and
  a smaller IB/IGCSE group; ICSE/ISC card; Pink Line; Orange Line under
  construction), database/seo-content/zones/jaipur.json and
  areas/jaipur-research.json / -zone-guides.json. No share of CISCE schools is
  claimed. Fee wording is the approved sentence. FAQs render from
  faqs/icse-home-tutor-jaipur.php. Area links render only when that Jaipur area
  page exists and is active.
--}}
@php
  $jpAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jpA = function (string $slug, string $label) use ($jpAreaSlugs) {
      return in_array($slug, $jpAreaSlugs, true)
          ? '<a href="' . e(url('/city/jaipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide icj-guide" aria-labelledby="icjGuideTitle">
  <h2 id="icjGuideTitle">ICSE and ISC home tutors in Jaipur: range, written answers and the ISC rulebook</h2>

  <p class="nx-guide__lede">
    The hard part of ICSE is rarely one difficult chapter. It is range: a Class 10 student writes many separate papers,
    each expecting full, well-organised answers, with prescribed literature in English and internal work running in
    the background. ISC then narrows the subjects but deepens every one of them and adds rules about subject choice
    that catch families out. This page sets out how CISCE examines at both levels, which subjects Jaipur parents
    usually ask about, how tutors reach each of the city's zones, and what to check before you commit to a tutor. It is
    by Abhinandan Tiwary (Class 10 CBSE and ICSE maths) and Aaditya Kashyap (CBSE and ICSE science), with Ajay
    Vatsyayan (IB, IGCSE and ISC maths) writing the ISC part. The longer explanation of the board is in our
    <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and ISC board guide</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icj-mix">CISCE in Jaipur</a> ·
    <a href="#icj-load">The ICSE load</a> ·
    <a href="#icj-isc">ISC rules</a> ·
    <a href="#icj-plan">Class-by-class plan</a> ·
    <a href="#icj-week">A good week</a> ·
    <a href="#icj-after">After Class 10</a> ·
    <a href="#icj-subj">Subjects</a> ·
    <a href="#icj-zones">Zones</a> ·
    <a href="#icj-mode">Home or online</a> ·
    <a href="#icj-check">Choosing a tutor</a> ·
    <a href="#icj-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icj-mix">CISCE among Jaipur's boards, and against RBSE</h2>
  <p>
    Our <a href="{{ url('/city/jaipur') }}">Jaipur tutors page</a> names four broad systems in the city: CBSE, the
    Rajasthan board (RBSE), CISCE's ICSE and ISC, and a smaller IB and Cambridge group. We do not estimate how many
    students follow each. In practice, a tutor who knows CISCE papers well is a narrower search, so an ICSE family should state the board
    clearly and expect the search to reach a little further across the city.
  </p>
  <p>
    Compared in general terms with RBSE, which sets its own syllabus, books and paper pattern for Rajasthan's
    affiliated schools and is taught in Hindi or English medium, ICSE asks for more separate subjects at Class 10 and
    heavier written English, including literature. A student moving into an ICSE school from an RBSE or CBSE school
    usually copes with the content and struggles with the length and organisation of answers. That is the gap to work
    on first.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icj-load">The ICSE load: groups, papers and internal marks</h2>
  <p>
    Every ICSE student takes Group I in full: English, a second language, and History, Civics and Geography. From
    Group II they choose two or three subjects, such as Mathematics, Science, Economics, Commercial Studies, a foreign
    or classical language or Environmental Science; Groups I and II are marked 80% on the paper and 20% internally.
    Group III is a single applied subject, for example Computer Applications or Physical Education, marked half on the
    paper and half internally.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The ICSE maths and science papers, as CISCE's syllabuses set them</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Written exam</th><th scope="col">Internal part</th><th scope="col">Practice that pays</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>3 hours, 80 marks</td><td>20 marks from two or more assignments, marked by the teacher and an external examiner</td><td>Every step shown; commercial maths alongside algebra and geometry</td></tr>
      <tr><td>Physics</td><td>2 hours, 80 marks</td><td>20 marks of practical work</td><td>Numericals with units, ray diagrams</td></tr>
      <tr><td>Chemistry</td><td>2 hours, 80 marks</td><td>20 marks of practical work</td><td>Equations, observations, definitions word-perfect</td></tr>
      <tr><td>Biology</td><td>2 hours, 80 marks</td><td>20 marks of practical work</td><td>Labelled diagrams, process explanations</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CISCE publishes an Analysis of Pupil Performance for each subject after the exams, describing common errors and
    what examiners were looking for. A tutor who brings these reports and the specimen papers into lessons is
    preparing your child for the way the board marks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icj-isc">ISC in Classes 11 and 12: the rules that matter</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ISC regulations and what they mean for a Jaipur family</caption>
    <thead>
      <tr><th scope="col">Rule</th><th scope="col">What to do about it</th></tr>
    </thead>
    <tbody>
      <tr><td>English is compulsory, plus three to five electives, six subjects at most</td><td>Pick electives with Class 12 and entrance plans in mind</td></tr>
      <tr><td>No subject change after 15 September of the Class 11 year</td><td>If an elective is going badly, get help in the first weeks</td></tr>
      <tr><td>A Class 12 subject must have been studied in Class 11</td><td>No late additions; choose carefully at the start</td></tr>
      <tr><td>Promotion needs 35% in four subjects including English and 75% attendance</td><td>Class 11 exams count; treat them seriously</td></tr>
      <tr><td>Practical papers are compulsory where a subject has one</td><td>Keep the practical record and project work up to date</td></tr>
      <tr><td>Grades from 1 to 9; certificate also needs SUPW and Community Service</td><td>Plan school activities alongside tuition</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Some combinations are not allowed, such as Physics with Engineering Science. ISC Mathematics carries an 80-mark,
    three-hour theory paper and 20 marks of project work in each year; see our <a href="{{ url('/isc-maths-tutor') }}">ISC
    maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icj-plan">A class-by-class tutoring plan on CISCE</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where tuition helps from Class 6 to Class 12</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Focus</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>Written habits: paragraphs in English and history, neat steps in maths, science words used correctly</td></tr>
      <tr><td>9</td><td>The two-year ICSE syllabus starts; keep every subject moving and start specimen questions early</td></tr>
      <tr><td>10</td><td>Paper-by-paper timed practice; examiner reports; Group III project work finished on time</td></tr>
      <tr><td>11</td><td>Elective choice before mid-September; close the jump from ICSE quickly</td></tr>
      <tr><td>12</td><td>Depth in each elective, practical record, projects, full papers</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icj-week">What a week of ICSE tuition should look like</h2>
  <p>
    With so many papers, the danger is that tuition becomes a rush through whichever chapter the school did last. A
    better week has a rotation. Each session opens with the student's own written attempt at a few questions from the
    previous topic, which the tutor marks line by line for missing steps, units, labels and loose sentences. The new
    topic follows, taught from the school textbook and then tested at once with specimen-paper questions. One question
    is always finished in full against the clock. Once a fortnight, the tutor should also pull back an older chapter
    from a different subject, because ICSE rewards students who keep the whole syllabus fresh rather than those who
    know only the latest unit well. For ISC science students, some weeks should give time to the practical record: how
    readings are tabulated, which graph to draw and how to write a conclusion that earns credit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icj-after">After ICSE: ISC, CBSE or the state board</h2>
  <p>
    At the end of Class 10 a Jaipur student may continue to ISC, move to a CBSE school, or move to RBSE. Staying with
    CISCE keeps the answer style familiar, though each ISC subject goes much deeper. Moving to CBSE means NCERT books,
    CBSE sample papers and different theory and practical splits; the maths and science content carries over well.
    Whatever the route, settle the Class 11 subjects early, because ISC does not allow a change after mid-September.
    Our <a href="{{ url('/cbse-home-tutor-jaipur') }}">CBSE home tutors in Jaipur</a> page covers the CBSE side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icj-subj">ICSE and ISC subjects Jaipur parents ask about</h2>
  <p>
    Maths and the three sciences come first at ICSE, then English language and literature, then History, Civics and
    Geography. At ISC, science students ask for maths, physics, chemistry and biology, and commerce students for
    accounts, commerce and economics. Our Jaipur subject pages:
  </p>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-jaipur') }}">Maths home tutors in Jaipur</a>, for ICSE and ISC maths</li>
    <li><a href="{{ url('/science-home-tutor-jaipur') }}">Science home tutors</a> for the three ICSE science papers</li>
    <li><a href="{{ url('/physics-home-tutor-jaipur') }}">Physics</a>, <a href="{{ url('/chemistry-home-tutor-jaipur') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-jaipur') }}">biology</a> for ISC</li>
    <li><a href="{{ url('/english-home-tutor-jaipur') }}">English home tutors</a> for language and the set texts</li>
    <li>With ISC science: <a href="{{ url('/jee-home-tutor-jaipur') }}">JEE</a> or <a href="{{ url('/neet-home-tutor-jaipur') }}">NEET</a> tutors</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> covers both maths papers
    in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icj-zones">How ICSE tutors reach your part of Jaipur</h2>
  <ul>
    <li><strong><a href="{{ url('/city/jaipur/zone/c-scheme-bani-park-vidhyadhar-nagar') }}">C-Scheme, Bani Park and Vidhyadhar Nagar</a>.</strong> Sindhi Camp, Railway Station and Civil Lines are Pink Line stops, so a tutor can ride in and take an auto into {!! $jpA('c-scheme', 'C-Scheme') !!} or {!! $jpA('bani-park', 'Bani Park') !!}. C-Scheme buildings ask for the tutor's name at the gate; parking is tight in office hours.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/raja-park-jawahar-nagar-bapu-nagar') }}">Raja Park, Jawahar Nagar and Bapu Nagar</a>.</strong> In {!! $jpA('raja-park', 'Raja Park') !!}, give a landmark on your inner lane rather than the market road, and suggest a spot for a two-wheeler.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/vaishali-nagar-west-jaipur') }}">Vaishali Nagar and West Jaipur</a>.</strong> Always give the sector with a {!! $jpA('chitrakoot', 'Chitrakoot') !!} address; evening traffic on Ajmer Road and the 200 Feet Bypass needs slack in the timing.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/mansarovar-sanganer') }}">Mansarovar and Sanganer</a>.</strong> {!! $jpA('pratap-nagar', 'Pratap Nagar') !!} is mostly housing board blocks reached at the door; Tonk Road is heavy at office hours.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/malviya-nagar-jagatpura-tonk-road') }}">Malviya Nagar, Jagatpura and Tonk Road</a>.</strong> {!! $jpA('durgapura', 'Durgapura') !!} has a station on the North Western Railway and well-laid roads; tutors from Pratap Nagar and Bapu Nagar come by scooter or car.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icj-mode">Home or online for a CISCE student in Jaipur</h2>
  <p>
    Home lessons suit the ICSE years, because what needs correcting is on the page: missing steps, half-labelled
    diagrams, answers that ramble. If a CISCE tutor lives on your side of Tonk Road or Ajmer Road, take the home
    option. For ISC electives the right specialist may live across the city, and with the Orange Line still under
    construction, crossing it at peak time is slow. A weekend home lesson with a weekday online session, the tutor
    watching working live on a shared whiteboard or through a camera over the notebook, is often the practical
    answer. See <a href="{{ url('/blog/central-and-north-jaipur-tuition-guide') }}">central and north Jaipur</a> and
    <a href="{{ url('/blog/south-and-west-jaipur-tuition-guide') }}">south and west Jaipur</a> for local timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icj-check">Choosing a tutor who teaches the CISCE way</h2>
  <ol>
    <li><strong>Watch the working.</strong> A good ICSE maths tutor will not accept an answer without the steps and the final form.</li>
    <li><strong>Ask about examiner reports.</strong> Has the tutor read the latest Analysis of Pupil Performance for your child's subject?</li>
    <li><strong>Test two sciences.</strong> Ask for a short chemistry equation and a biology diagram in the same demo.</li>
    <li><strong>Listen for language.</strong> CISCE tutors should correct how an answer is written, not just what it says.</li>
    <li><strong>For ISC, ask about projects.</strong> The tutor guides method and timelines; the student writes the work.</li>
  </ol>
  <p>
    Your shortlist has two or three tutors with fees visible before the demo, and moving to another tutor later is free.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icj-fees">Fees and how to begin</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For ICSE and ISC the
    class, how many papers need help, how near the exam is and the tutor's route set the fee. Read the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-jaipur') }}">Jaipur
    tuition fees</a>.
  </p>
  <p>
    Tell us ICSE or ISC, the class, subjects, locality and free slots, and the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. See <a href="{{ url('/tutors') }}">tutor profiles</a>; CISCE
    teachers can find <a href="{{ url('/tuition-jobs/jaipur') }}">tuition jobs in Jaipur</a>.
  </p>
  </section>

  </div>
</article>
