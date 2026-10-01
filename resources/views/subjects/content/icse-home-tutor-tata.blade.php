{{--
  Board page for "ICSE home tutor Jamshedpur" (city slug tata; the text says
  Jamshedpur and names no company). CISCE: ICSE Class 10, ISC Class 12.
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya
  Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE
  and ISC maths). No anecdotes, years or results are claimed. No schools,
  coaching institutes, companies or people are named.

  Board facts only as the Gurgaon board hub (icse-home-tutor-gurgaon) states
  them, which cites cisce.org (read 1 Oct 2026): ICSE Regulations 2027 (Group
  I compulsory, Group II two or three, 80/20; Group III one subject, 50/50);
  ICSE Mathematics 3-hour 80-mark paper + 20 internal from at least two
  assignments marked by teacher and external examiner; Physics, Chemistry,
  Biology separate 2-hour 80-mark papers + 20 practical internal; Analysis of
  Pupil Performance; ISC Regulations (English + three to five electives, max
  six; no change after 15 September of Class XI; XII subject studied in XI;
  promotion 35% in four incl. English + 75% attendance; practicals
  compulsory; no Physics with Engineering Science; grades 1-9; pass
  certificate four incl. English + SUPW and Community Service); ISC
  Mathematics 80 theory + 20 project.
  JAC described generally only, as on the /city/tata hub. Local detail only
  from tata-research.json, tata-zone-guides.json, zones/tata.json and the hub.
  Mango & Dimna has no zone page; only its area pages are linked. Fee wording
  is the approved sentence. Area links render only for active areas.
--}}
@php
  $jicSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jicA = function (string $slug, string $label) use ($jicSlugs) {
      return in_array($slug, $jicSlugs, true)
          ? '<a href="' . e(url('/city/tata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="jicGuideTitle">
  <h2 id="jicGuideTitle">ICSE and ISC home tutors in Jamshedpur: coverage first, then depth</h2>

  <p class="nx-guide__lede">
    The Jamshedpur hub sums up ICSE and ISC well: answers are long, the syllabus is broad, English carries set
    literature, and coverage is usually the real hurdle. Add two rivers, no metro and a project calendar that runs all
    year, and the tutor you choose has to be both a CISCE specialist and someone who can reach you reliably. This page
    explains how the ICSE and ISC years are organised, what the maths and science papers reward, which subjects families
    ask about, how tutors reach each zone, and how to test a tutor in the free demo. Abhinandan Tiwary writes on ICSE
    maths, Aaditya Kashyap on the sciences, and Ajay Vatsyayan on ISC maths.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jic-mix">ICSE in Jamshedpur</a> ·
    <a href="#jic-groups">The groups</a> ·
    <a href="#jic-papers">Maths and science</a> ·
    <a href="#jic-cycle">A revision cycle</a> ·
    <a href="#jic-english">English and humanities</a> ·
    <a href="#jic-isc">ISC</a> ·
    <a href="#jic-years">Year by year</a> ·
    <a href="#jic-subjects">Subjects</a> ·
    <a href="#jic-after">After Class 10</a> ·
    <a href="#jic-zones">By zone</a> ·
    <a href="#jic-mode">Home or online</a> ·
    <a href="#jic-demo">The demo</a> ·
    <a href="#jic-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jic-mix">How ICSE fits Jamshedpur's three boards</h2>
  <p>
    Our <a href="{{ url('/city/tata') }}">Jamshedpur tutors page</a> says three boards cover most requests: JAC, CBSE,
    and CISCE's ICSE and ISC. It gives no proportions and we add none. In general terms the state board, JAC, holds the
    Class 10 and Class 12 exams for its schools from prescribed textbooks and its own paper style, with details to be
    taken from the council's notices each year. ICSE asks for something different: more separate papers in Class 10,
    full written English across subjects, and preparation that uses CISCE's specimen papers and its subject-wise
    reports on candidates' errors. A tutor who knows the content from another board still needs to show they know how
    CISCE marks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-groups">ICSE's three groups</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 subject groups as set by the CISCE regulations</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Taken</th><th scope="col">Includes</th><th scope="col">Weighting</th></tr>
    </thead>
    <tbody>
      <tr><td>Group I</td><td>Compulsory</td><td>English; a second language; History, Civics and Geography</td><td>Exam 80%, internal 20%</td></tr>
      <tr><td>Group II</td><td>Any two or three</td><td>Mathematics, Science, Economics, Commercial Studies, a modern foreign or classical language, Environmental Science</td><td>Exam 80%, internal 20%</td></tr>
      <tr><td>Group III</td><td>One subject</td><td>An applied subject such as Computer Applications, Commercial or Economic Applications, Art, Physical Education or Robotics and AI</td><td>Exam 50%, internal 50%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The one Group III subject is half internal, so the work done in term matters as much as the paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-papers">Maths and the three science papers</h2>
  <p>
    The ICSE maths exam is one three-hour, 80-mark paper. The other 20 marks come from a minimum of two assignments,
    each marked by the subject teacher and separately by an external examiner. The syllabus mixes commercial
    mathematics, banking and shares among it, with algebra, geometry, trigonometry and statistics, and full working is
    expected throughout.
  </p>
  <p>
    Science splits into Physics, Chemistry and Biology, each a two-hour paper of 80 marks with another 20 for
    internal assessment of practical work. Three papers mean three sets of habits: numericals with units, balanced
    equations, labelled diagrams. Decide early whether one tutor covers all three or whether the weakest gets a
    specialist. CISCE's Analysis of Pupil Performance for each subject, issued after the exams, is the most direct
    guide to how examiners mark, and a good tutor uses it alongside specimen papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-cycle">A revision cycle that covers everything</h2>
  <p>
    The hub recommends a revision cycle that revisits every chapter, timed written answers, and an eye on internal
    assessment and project work. In practice: each week, one slot goes back to an old chapter in a different paper, so
    that over a month every paper gets a return visit. Each session closes with one answer written to time. And the
    project list, with dates, is checked at the start of every month. Within the hour, the student tries a few
    questions first; the tutor marks them line by line for steps, units, labels and wording, then teaches the next
    topic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-english">The English and humanities papers families underestimate</h2>
  <p>
    Parents tend to hire for maths and science and leave English and History, Civics and Geography to the school. Under
    ICSE that can be a costly choice, because Group I papers are compulsory and every one of them is won with long,
    organised writing. English carries set literature texts, which reward a student who can quote, explain and compare
    rather than retell. History and civics answers need dates and terms used precisely; geography needs map work and
    clear reasons. A tutor for these papers should set one written answer a week and return it marked for structure,
    not just content. Two short sessions a month, kept up from Class 9, often lift these papers more than an
    expensive burst before the exams.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-isc">ISC: what the regulations say about subjects</h2>
  <ul>
    <li>English is compulsory, with three to five electives and a maximum of six subjects.</li>
    <li>No change of subject is allowed after 15 September of the Class 11 registration year; a Class 12 subject must have been studied in Class 11.</li>
    <li>Promotion to Class 12 needs 35% in four subjects including English, and 75% attendance.</li>
    <li>Subjects with practicals require the practical exam; Physics cannot be taken with Engineering Science.</li>
    <li>Grades run 1 to 9; the pass certificate needs four subjects including English, plus Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    ISC Mathematics: a three-hour theory paper of 80 marks and 20 marks of project work in Class 11 and in Class 12.
    The <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page goes deeper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-years">Year by year on the CISCE route</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Classes 6 to 12 for an ICSE and ISC student in Jamshedpur</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">What decides the result</th><th scope="col">Where a tutor helps</th></tr>
    </thead>
    <tbody>
      <tr><td>6–8</td><td>The school's own exams</td><td>Written working, science vocabulary, full paragraphs</td></tr>
      <tr><td>9</td><td>School exams as the ICSE syllabus begins</td><td>Starting the revision cycle across all papers</td></tr>
      <tr><td>10</td><td>ICSE papers with internal marks</td><td>Specimen papers, examiner reports, timed answers</td></tr>
      <tr><td>11</td><td>School exams; promotion and subject rules</td><td>Elective choice; closing the step from ICSE</td></tr>
      <tr><td>12</td><td>ISC theory, practicals and projects</td><td>Depth, practical file, project deadlines</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-subjects">Subjects Jamshedpur ICSE families ask for</h2>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-tata') }}">Maths home tutors in Jamshedpur</a>; the <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> covers the papers.</li>
    <li><a href="{{ url('/science-home-tutor-tata') }}">Science tutors</a> for the three ICSE papers; <a href="{{ url('/physics-home-tutor-tata') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-tata') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-tata') }}">biology</a> tutors for ISC.</li>
    <li><a href="{{ url('/english-home-tutor-tata') }}">English tutors in Jamshedpur</a> for literature and long answers.</li>
    <li>Entrance work from Class 11: <a href="{{ url('/jee-home-tutor-tata') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-tata') }}">NEET</a> tutors.</li>
  </ul>
  <p>
    Maths and the sciences lead the requests, then English and History, Civics and Geography for students whose answers
    run short. For the board in depth, see our <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and ISC board
    hub</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-after">After Class 10: ISC, CBSE or JAC</h2>
  <p>
    Staying with CISCE keeps the familiar answer style, though ISC electives go far deeper. Moving to CBSE for Class 11
    brings NCERT, the board's sample papers and its theory and practical splits; maths and science carry over, the
    answer format changes. Moving to a JAC school means the council's prescribed books and paper style. Whichever way,
    decide before Class 11 begins, since ISC locks subjects in mid-September, and use the break for a short bridging
    plan. Our <a href="{{ url('/cbse-home-tutor-tata') }}">CBSE home tutors in Jamshedpur</a> page and the
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">stream choice guide</a> help with the decision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-zones">How ICSE tutors reach each zone</h2>
  <p>
    Tutors here come by two-wheeler, auto or bus, and the Subarnarekha and Kharkai decide most journeys. Because CISCE
    specialists are fewer than general tutors, we look on your own bank first and then widen the search for the
    subject. Notes from our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/tata/zone/central-jamshedpur') }}">Central</a>:</strong> houses in {!! $jicA('circuit-house-area', 'Circuit House Area') !!} are simple doorstep visits; tutors living in {!! $jicA('golmuri', 'Golmuri') !!} or Sakchi can also cover families across the Subarnarekha.</li>
    <li><strong><a href="{{ url('/city/tata/zone/west-jamshedpur-kharkai-side') }}">Kharkai side</a>:</strong> societies in {!! $jicA('sonari', 'Sonari') !!} and {!! $jicA('adityapur', 'Adityapur') !!} register visitors and set parking rules, so send the tutor's name and vehicle number ahead; bridge traffic peaks at office hours.</li>
    <li><strong><a href="{{ url('/city/tata/zone/south-jamshedpur-tatanagar') }}">South</a>:</strong> train times bring extra traffic to the station roads, so allow a buffer for tutors coming to {!! $jicA('parsudih', 'Parsudih') !!} from the centre.</li>
    <li><strong>Across the river:</strong> independent houses in {!! $jicA('dimna', 'Dimna') !!} are doorstep visits, but evenings at Dimna Chowk are heavy while the NH 18 elevated corridor is built; keep off-peak slots or go online.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-mode">Home or online for ICSE in Jamshedpur?</h2>
  <p>
    The hub's guidance fits ICSE closely: home lessons for subjects where the tutor must watch every line of working,
    online for ISC electives and specialist senior papers, which brings in tutors from across India. Across a river,
    a nearby tutor for regular school subjects plus an online specialist for senior work is a common and sensible
    pattern. For online maths or science, the tutor must see the notebook live. Many families settle on one tutor in
    both formats: a home lesson once a week for the paper that needs close marking, and a shorter online session for
    doubts, revision checks or a project review. In the run-up to the exams, adding online sessions is usually easier
    than finding extra home slots on busy evenings.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-demo">How to test an ICSE tutor</h2>
  <ol>
    <li>Ask which specimen papers and examiner reports they use, and from which year.</li>
    <li>Set a maths question and see whether every step and the final form are demanded.</li>
    <li>Ask for a physics numerical and a biology diagram within the same hour.</li>
    <li>Check whether they correct the wording of an answer, not just its content.</li>
    <li>For ISC, ask how they will support the project and practical file without writing them.</li>
  </ol>
  <p>
    Two or three matched tutors, fees shown before the demo, and a free switch later. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Class, number of papers,
    time to the exam and the tutor's journey, bridges included, set the fee; see the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-jamshedpur') }}">Jamshedpur
    fees post</a>.
  </p>
  <p>
    Tell us ICSE or ISC, the class, subjects, neighbourhood and slots; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. See the <a href="{{ url('/blog/jamshedpur-tuition-guide') }}">Jamshedpur
    tuition guide</a>, browse <a href="{{ url('/tutors') }}">tutor profiles</a>, or find
    <a href="{{ url('/tuition-jobs/tata') }}">tuition jobs in Jamshedpur</a>.
  </p>
  </section>

  </div>
</article>
