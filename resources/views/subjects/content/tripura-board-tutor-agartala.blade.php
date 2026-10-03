{{--
  Board hub: "Tripura Board tutor Agartala" (Tripura Board of Secondary
  Education, TBSE: Madhyamik Pariksha (Secondary Examination), Class X, and
  Higher Secondary (+2 Stage) Examination, Class XII). Author: nxtutors
  (NXTutors Academic Team). Page writer, capitals wave 2 (subjects),
  3 Oct 2026. Modelled on maharashtra-board-tutor-mumbai (structure only).
  No school, college, coaching, hospital, society, developer or people names.
  No results, pass percentages, candidate or school counts, and no exam dates
  beyond the board's own 2026-27 calendar.

  Official sources (all tbse.tripura.gov.in, read 3 Oct 2026):
  - https://tbse.tripura.gov.in/about-us : established in 1973 by the Tripura
    Board of Secondary Education Act, 1973 (Tripura Act No. 12) passed by the
    Tripura Legislative Assembly; started functioning from 1 January 1976;
    the intervening period was used to frame rules, regulations, curricula
    and syllabi.
  - https://tbse.tripura.gov.in/ (home page, What's New): Madhyamik and H.S.
    (+2 Stage) examinations; results link https://tbresults.tripura.gov.in/;
    Bachhar Bachao Examination 2026 for Madhyamik and H.S. (+2 Stage)
    (admit cards, results); notification on the syllabus for 2026-27;
    permission for appearing at the pre-board examination; lists of schools
    for vocational subjects in 2026-27 (Classes IX-X and XI-XII);
    self-inspection of evaluated answer scripts; review of results; model
    question papers; academic calendar 2026-27.
  - https://tbse.tripura.gov.in/sites/default/files/TBSE_Notification_Syllabus_18_08_2026_20260818_0001.pdf :
    18 Aug 2026, the existing 2025-26 syllabi for Classes IX, X, XI and XII
    remain in force for 2026-27.
  - https://tbse.tripura.gov.in/sites/default/files/Annual%20Calender%202026-2027_pdf_compressed.pdf
    (2 June 2026): online registration of Class IX and enrolment of Class XI
    (candidates of 2028) by schools, 3-31 Aug 2026; Madhyamik and H.S. 2027
    exam forms (7M / 7H) filled online 4-25 Jan 2027, in school, with the
    guardian's written consent; Madhyamik practical exam (vocational subjects
    only) and H.S. practical exam 17.11.2026-05.12.2026; external candidates
    must pass the pre-board examination; changes notified in local newspapers.
  - https://tbse.tripura.gov.in/syllabus-class-x : Class X syllabus subjects
    (Bengali, English, Hindi, Kokborok, Mizo, Mathematics, Science, Social
    Science and vocational subjects such as IT-ITeS, retail, automotive,
    electronics and hardware, beauty and wellness, tourism and hospitality,
    power, agriculture).
  - https://tbse.tripura.gov.in/syllabus : syllabus list including physics,
    chemistry, biology, mathematics, computer science, accountancy, business
    studies, economics, history, geography, philosophy, sociology, education,
    music, Sanskrit, languages and vocational subjects.
  - .../MATHEMATICS_1.pdf (Class X maths, Basic and Standard, 80 + 20 internal,
    unit marks; Bengali version included); .../SCIENCE_1.pdf (Class X science
    80 + 20: biology 30, physics 25, chemistry 25; half-yearly and pre-board /
    board final blueprints); .../ENGLISH_1.pdf (Class X English 80 + 20:
    reading 20, writing and grammar 20, literature 40); .../MATHEMATICS_3.pdf
    (Class XII maths 80 + 20); .../PHYSICS_0.pdf (Class XII physics 70 theory,
    3 hours, 30 practical); .../CHEMISTRY_1.pdf (Class XII chemistry 70 + 30).
  - .../math_basic_to_std.pdf : a candidate who passed Math (Basic) in the
    Madhyamik examination may apply, through the head of the institution, to
    appear in Math (Standard).
  Local facts only from database/seo-content/areas/agartala-research.json.
  Only the allowed fee sentence. Area links render only for active areas.
--}}
@php
  $agtSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $agtA = function (string $slug, string $label) use ($agtSlugs) {
      return in_array($slug, $agtSlugs, true)
          ? '<a href="' . e(url('/city/agartala/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide agt-guide" aria-labelledby="agtGuideTitle">
  <h2 id="agtGuideTitle">Tripura Board tutors in Agartala: Madhyamik in Class X, Higher Secondary in Class XII</h2>

  <p class="nx-guide__lede">
    The Tripura Board of Secondary Education, TBSE for short, sets two examinations that shape a student's school
    years: the Madhyamik Pariksha (Secondary Examination) at the end of Class X and the Higher Secondary (+2 Stage)
    Examination at the end of Class XII. A tutor who prepares a child for either should work from the board's own
    syllabus, blueprints and model papers, not from material written for another board. NXTutors matches Agartala
    families with two or three tutors who know the TBSE course for your child's class and subjects and can reach your
    locality. You see each fee before meeting anyone, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#agt-board">The board</a> ·
    <a href="#agt-year">The board's year</a> ·
    <a href="#agt-syllabus">Syllabus and papers</a> ·
    <a href="#agt-madhyamik">Madhyamik subjects</a> ·
    <a href="#agt-maths">Basic or Standard</a> ·
    <a href="#agt-hs">Higher Secondary</a> ·
    <a href="#agt-after">After the results</a> ·
    <a href="#agt-plan">A tutor's year</a> ·
    <a href="#agt-places">Localities</a> ·
    <a href="#agt-demo">Demo questions</a> ·
    <a href="#agt-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="agt-board">What is TBSE, and where does it publish what you need?</h2>
  <p>
    TBSE was set up under the Tripura Board of Secondary Education Act, 1973, passed by the state legislative
    assembly, and it began functioning on 1 January 1976 after framing its rules, curricula and syllabi. Its office
    is in Agartala. For a parent, three websites matter:
  </p>
  <ul>
    <li><strong><a href="https://tbse.tripura.gov.in/" rel="noopener">tbse.tripura.gov.in</a></strong> carries the syllabus for each class, model question papers, the academic calendar and every notice.</li>
    <li><strong>tbresults.tripura.gov.in</strong>, linked from the board's home page, is where Madhyamik and H.S. results are published.</li>
    <li><strong>tbseonline.tripura.gov.in</strong> is the portal schools use for online registration and exam forms; families deal with it through the school.</li>
  </ul>
  <p>
    The calendar notes that any change to its schedule is announced in local newspapers, so keep an eye on the
    board's notices as well as the school's.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-year">What does the board's 2026-27 calendar ask of students?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Steps in the TBSE annual calendar 2026-27 that involve a student, as published by the board on 2 June 2026</caption>
    <thead>
      <tr><th scope="col">Step</th><th scope="col">Who</th><th scope="col">When (per the calendar)</th><th scope="col">What a family should do</th></tr>
    </thead>
    <tbody>
      <tr><td>Registration in Class IX and enrolment in Class XI (candidates of 2028)</td><td>The school, online</td><td>August 2026</td><td>Check spellings and details on the verification sheet the school shares</td></tr>
      <tr><td>Practical examinations: Madhyamik vocational subjects; H.S. (+2 Stage)</td><td>Students</td><td>17 November to 5 December 2026</td><td>Bring the practical record up to date well before</td></tr>
      <tr><td>Exam forms for Madhyamik (7M) and H.S. (7H) 2027</td><td>Students, in school</td><td>4 to 25 January 2027</td><td>The form is filled in school with the guardian's written consent</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The calendar also states that external candidates must pass the board's pre-board examination before they can sit
    the 2027 Madhyamik or H.S. examination. Theory exam dates are not part of this calendar; wait for the
    board's own notice rather than relying on dates passed around informally.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-syllabus">Which syllabus applies this year, and how should a tutor use it?</h2>
  <p>
    On 18 August 2026 the board notified that the 2025-26 syllabi for Classes IX, X, XI and XII stay in force for
    2026-27. The subject files on its <a href="https://tbse.tripura.gov.in/syllabus" rel="noopener">syllabus page</a>
    do more than list chapters. The Class X science file, for example, carries separate blueprints for the
    half-yearly exam and for the pre-board and board final exam, showing how many questions of each mark value come
    from each chapter. The Class X maths file includes a Bengali version alongside the English, and the Class XII
    chemistry file is printed in Bengali.
  </p>
  <p>
    A tutor should use these documents in three ways: to plan the year by unit marks, to build practice papers to the
    blueprint, and to revise from the board's <a href="https://tbse.tripura.gov.in/model-question-paper" rel="noopener">model
    question papers</a>. Ask to see the current file at the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-madhyamik">The Madhyamik year: how core subjects are marked</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Marks in three core Class X subjects from the TBSE syllabus documents, and where a tutor adds most</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Written paper and internal</th><th scope="col">How the 80 divides</th><th scope="col">Where a tutor adds most</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics (Basic or Standard)</td><td>80 + 20</td><td>Algebra 20, geometry 15, trigonometry 12, statistics and probability 11, mensuration 10, number systems 6, coordinate geometry 6</td><td>Word problems into equations; proofs with reasons</td></tr>
      <tr><td>Science</td><td>80 + 20</td><td>Biology 30, physics 25, chemistry 25</td><td>Diagrams, balanced equations, units in numericals</td></tr>
      <tr><td>English</td><td>80 + 20</td><td>Reading 20, writing and grammar 20, literature 40</td><td>Planned literature answers; letter and paragraph formats</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Class X syllabus page also lists Bengali, Hindi, Kokborok, Mizo and social science, and vocational subjects
    such as IT-ITeS, retail, automotive, electronics and hardware, tourism and hospitality, and agriculture, offered in
    the schools the board lists for 2026-27. Subject-by-subject detail is on our Agartala
    <a href="{{ url('/maths-home-tutor-agartala') }}">maths</a>, <a href="{{ url('/science-home-tutor-agartala') }}">science</a>
    and <a href="{{ url('/english-home-tutor-agartala') }}">English</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-maths">Basic or Standard maths in the Madhyamik exam</h2>
  <p>
    TBSE Class X maths comes at two levels, and the Standard syllabus includes portions that Basic omits. The choice
    matters most for a child who may take maths in Class XI. The board also publishes a form for a candidate who has
    passed Math (Basic) in the Madhyamik examination to apply, through the head of the school, to appear in Math
    (Standard). It is better to settle the level in Class IX, with advice from the school and a tutor who has seen a
    term of your child's work, than to rely on a later exam.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-hs">The Higher Secondary (+2 Stage) years</h2>
  <p>
    The board's syllabus list covers physics, chemistry, biology, mathematics and computer science; accountancy,
    business studies and economics; history, geography, philosophy, sociology, education and music; and languages
    including Bengali, English, Hindi, Kokborok, Mizo and Sanskrit, with vocational subjects in listed schools. The
    combinations a school offers decide what your child can take, so start there.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class XII marking in three TBSE subjects, from the board's syllabus documents</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Theory</th><th scope="col">Practical or internal</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics</td><td>70, a three-hour paper</td><td>30 practical</td></tr>
      <tr><td>Chemistry</td><td>70</td><td>30 practical</td></tr>
      <tr><td>Mathematics</td><td>80</td><td>20 internal assessment</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Students aiming at engineering or medicine prepare for JEE or NEET alongside the H.S. course. The board paper
    still needs full written answers and a complete practical record, so a tutor should give board writing its own
    weekly block. See <a href="{{ url('/physics-home-tutor-agartala') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-agartala') }}">chemistry</a> home tutors in Agartala, and our guide on
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-after">After the results: second chances and checks</h2>
  <p>
    The board's notices show several routes after the main results. It holds a Bachhar Bachao examination for
    Madhyamik and H.S. (+2 Stage) candidates, with its own application form, admit cards and results. It also accepts
    applications for self-inspection of evaluated answer scripts and for review of results. Eligibility, fees and
    deadlines are set in each notice, so read the current one on the board's website. A tutor can help a student
    preparing for the Bachhar Bachao examination focus on the subjects concerned in the time available.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-plan">A TBSE tutor's year, Class IX to Class XII</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What a Tripura Board tutor should concentrate on in each class</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Main focus</th><th scope="col">Board link</th></tr>
    </thead>
    <tbody>
      <tr><td>IX</td><td>Algebra, geometry and science basics made secure; maths level decided</td><td>Registration through the school</td></tr>
      <tr><td>X</td><td>Blueprint-based practice; half-yearly and pre-board papers treated as rehearsals</td><td>Madhyamik exam form in January</td></tr>
      <tr><td>XI</td><td>The step up in the chosen subjects; Class XI enrolment checked</td><td>Enrolment through the school</td></tr>
      <tr><td>XII</td><td>Model papers, practical records, written answers; entrance work if planned</td><td>Practicals, then the H.S. exam form</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-places">Where Agartala's TBSE tutors travel from</h2>
  <p>
    Tutors in Agartala mostly ride two-wheelers or use autos and city buses, and the municipal corporation's four
    zones (North, Central, East and South) are a good guide to who can reach you easily.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Agartala localities: zone, nearby tutor pool and one practical tip for TBSE home tuition</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Zone</th><th scope="col">Nearby tutor pool</th><th scope="col">Practical tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $agtA('indranagar', 'Indranagar') !!}</td><td>North</td><td>Abhoynagar, Kunjaban, Dhaleswar, Banamalipur</td><td>Shift classes online during the Diwali fair days</td></tr>
      <tr><td>{!! $agtA('krishnanagar', 'Krishnanagar') !!}</td><td>Central</td><td>Banamalipur, Ramnagar, Kunjaban, Dhaleswar</td><td>Avoid the Tuesday and Friday market hours</td></tr>
      <tr><td>{!! $agtA('ramnagar', 'Ramnagar') !!}</td><td>Central</td><td>Joynagar, Krishnanagar and the other central wards</td><td>Share the numbered division and a landmark</td></tr>
      <tr><td>{!! $agtA('shibnagar', 'Shibnagar') !!}</td><td>East</td><td>Dhaleswar, Banamalipur, Krishnanagar, the Jogendranagar wards</td><td>Name which Shibnagar ward you live in</td></tr>
      <tr><td>{!! $agtA('jogendranagar', 'Jogendranagar') !!}</td><td>East</td><td>Shibnagar, Dhaleswar; tutors near the railway line</td><td>Give a landmark near Station Road</td></tr>
      <tr><td>{!! $agtA('badharghat', 'Badharghat') !!}</td><td>South</td><td>Arundhutinagar, Pratapgarh and the southern wards</td><td>Leave margin near the station at train times</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone guides: <a href="{{ url('/city/agartala/zone/north-agartala') }}">North</a>,
    <a href="{{ url('/city/agartala/zone/central-agartala') }}">Central</a>,
    <a href="{{ url('/city/agartala/zone/east-agartala') }}">East</a> and
    <a href="{{ url('/city/agartala/zone/south-agartala') }}">South Agartala</a>; every locality is on the
    <a href="{{ url('/city/agartala') }}">Agartala page</a>. When the right subject specialist lives across the city,
    <a href="{{ url('/online-tutor-agartala') }}">online tutoring</a> fills the gap.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-demo">Questions to ask a TBSE tutor at the demo</h2>
  <ol>
    <li>Do you have this year's TBSE syllabus and blueprint for my child's subjects with you?</li>
    <li>Which model question papers will we practise from?</li>
    <li>Can you teach in the language my child writes answers in?</li>
    <li>For Class X maths, which level do you recommend for my child, Basic or Standard, and why?</li>
    <li>How will you handle the practical record and the internal assessment marks?</li>
  </ol>
  <p>
    If the fit is wrong, tell us and we arrange another demo; switching later is free. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more ideas, and our
    <a href="{{ url('/cbse-home-tutor-agartala') }}">CBSE home tutor</a> page explains how CBSE preparation differs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets a fee,
    shown before the demo. Read the <a href="{{ url('/blog/home-tuition-fees-agartala') }}">Agartala home tuition fees
    guide</a> and the <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  <p>
    Send the class, the subjects, the language of the answer script, your locality with a landmark and the days that
    suit. We reply with two or three matched TBSE tutors and their fees, and you choose one for a
    <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and you can browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>. The <a href="{{ url('/blog/agartala-home-tuition-guide') }}">Agartala home tuition guide</a> covers the
    city, and teachers can find students on <a href="{{ url('/tuition-jobs/agartala') }}">Agartala tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
