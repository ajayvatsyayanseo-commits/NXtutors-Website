{{--
  Board page for "CBSE home tutor Port Blair" (Sri Vijaya Puram, Andaman and
  Nicobar Islands), the main board page for the city; the islands have no
  board of their own. Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE
  maths) and Aaditya Kashyap (role: CBSE and ICSE science). No anecdotes,
  years or results are claimed. No schools, coaching institutes or people are
  named; no school counts are given.

  Board position ONLY from the research file's board_facts
  (database/seo-content/areas/port-blair-research.json):
  - https://southandaman.nic.in/education/ : "All the Sr. Secondary and
    Secondary schools are affiliated to CBSE"; education in five mediums,
    English, Hindi, Tamil, Telugu and Bengali (page figures dated 2008); no
    separate island board named.
  - https://web.archive.org/web/20250621131025/https://education.andaman.gov.in/casian/ :
    CASIAN, a common web portal for CBSE-affiliated government schools under
    the Directorate of Education; its list includes government secondary or
    senior secondary schools at Aberdeen, Haddo (incl. a Telugu-medium
    school), School Line, Junglighat, Delanipur, Dairy Farm, South Point and
    Prothrapur (archived June 2025; live site did not resolve 3 Oct 2026).
  - https://www.pib.gov.in/PressReleaseIframePage.aspx?PRID=2054647 : 13 Sep
    2024 decision to rename Port Blair as Sri Vijaya Puram.
  CBSE facts only as the Gurgaon board hub (cbse-home-tutor-gurgaon) and the
  Kohima board page state them, citing cbseacademic.nic.in / cbse.gov.in:
  2026-27 secondary curriculum (80 + 20 in major subjects, 33% to pass, about
  half competency-based; Class IX common paper + optional Advanced 25 marks /
  1 hour, not in aggregate, 50%+ recorded; Basic/Standard ends with the
  2026-27 Class X batch); two Class X board exams (first compulsory, improve
  up to three of science, maths, social science, languages); senior
  secondary (Physics 042, Chemistry 043, Biology 044 at 70 + 30; Mathematics
  041 or Applied Mathematics 241, one only, 80 + 20; Accountancy 055,
  Economics 030, Business Studies 054 at 80 + 20). Class 12 dates in 2026
  (practicals from January, theory from 17 February) from
  cbse-class-12-physics-strategies.
  Local facts only from the research file. No tourism. Only the allowed fee
  sentence. Area links render only for active areas.
--}}
@php
  $pbxSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pbxA = function (string $slug, string $label) use ($pbxSlugs) {
      return in_array($slug, $pbxSlugs, true)
          ? '<a href="' . e(url('/city/port-blair/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pbx-guide" aria-labelledby="pbxGuideTitle">
  <h2 id="pbxGuideTitle">CBSE home tutors in Sri Vijaya Puram (Port Blair): one board for the islands, five classroom languages, and a plan for every stage</h2>

  <p class="nx-guide__lede">
    In many state capitals, a parent looking for a tutor first has to choose between a state board and a national one.
    In Sri Vijaya Puram, the name the Government of India decided in September 2024 to give Port Blair, that step is
    largely settled: the South Andaman district administration states that all its secondary and senior secondary
    schools are affiliated to CBSE, and no separate island board appears on the official pages. What varies is
    everything around the board: the medium your child studies in, the move from a secondary school to a senior
    secondary one after Class 10, and the timetable of an island city. This page covers what CBSE asks at each stage,
    the 2026-27 changes, the senior subjects, and how tutors reach six localities. Abhinandan Tiwary writes on Class 10
    maths and Aaditya Kashyap on the sciences.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pbx-board">The board position</a> ·
    <a href="#pbx-stages">Stage by stage</a> ·
    <a href="#pbx-nine-ten">Classes 9 and 10</a> ·
    <a href="#pbx-senior">Classes 11 and 12</a> ·
    <a href="#pbx-medium">The medium question</a> ·
    <a href="#pbx-move">After Class 10</a> ·
    <a href="#pbx-case">Competency questions</a> ·
    <a href="#pbx-year">An island year</a> ·
    <a href="#pbx-areas">Six localities</a> ·
    <a href="#pbx-pages">Subject pages</a> ·
    <a href="#pbx-ask">Demo questions</a> ·
    <a href="#pbx-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pbx-board">What do the official pages say about schools and boards?</h2>
  <p>
    Three points come from official sources, and we state nothing beyond them about the islands' schools:
  </p>
  <ul>
    <li><strong>CBSE affiliation.</strong> The district administration's education page says that all senior secondary and secondary schools are affiliated to CBSE.</li>
    <li><strong>Five mediums.</strong> The same page lists education in English, Hindi, Tamil, Telugu and Bengali; its figures are dated, so ask your school which medium applies to your child's section.</li>
    <li><strong>A common portal.</strong> The Directorate of Education has run a web portal for its CBSE-affiliated government schools, whose list includes secondary or senior secondary schools at Aberdeen, Haddo, School Line, Junglighat, Delanipur, Dairy Farm, South Point and Prothrapur.</li>
  </ul>
  <p>
    Families on ICSE, IB or Cambridge courses, for example after moving from the mainland, should say so in their
    request; specialists for those papers are usually found online. The rest of this page is about CBSE.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbx-stages">Where should a CBSE tutor's effort go, class by class?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE stages for a student in Sri Vijaya Puram and what a tutor should concentrate on</caption>
    <thead>
      <tr><th scope="col">Classes</th><th scope="col">How the board assesses</th><th scope="col">What the tutor concentrates on</th></tr>
    </thead>
    <tbody>
      <tr><td>1 to 5</td><td>School assessment</td><td>Reading, number sense and handwriting, in the school's medium and in English</td></tr>
      <tr><td>6 to 8</td><td>School assessment on NCERT books</td><td>Fractions, early algebra, science reading and English vocabulary before Class 9</td></tr>
      <tr><td>9</td><td>A common paper in maths and science, plus an optional Advanced paper</td><td>A steady base and a sensible decision on the Advanced paper</td></tr>
      <tr><td>10</td><td>Two board examinations, the first compulsory</td><td>Full preparation for the first; a targeted plan if the second is needed</td></tr>
      <tr><td>11</td><td>School examinations</td><td>New stream subjects built properly from the first month</td></tr>
      <tr><td>12</td><td>One main board examination, with practical or internal marks</td><td>Timed papers, records and projects, and JEE or NEET where planned</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbx-nine-ten">What changes in Classes 9 and 10 under the 2026-27 curriculum?</h2>
  <p>
    In the major subjects the board paper carries 80 marks and the school 20, and 33% is needed to pass. Close to half
    of each paper is competency-based, built on cases, data and real situations rather than plain recall.
  </p>
  <p>
    Class 9 maths and science now have a single common paper for everyone. Alongside it sits an optional Advanced
    paper in each subject: one hour, 25 marks, higher-order questions on additional content. Its marks stay out of the
    aggregate, though a result of 50% or above appears on the marksheet. Maths is also leaving behind its Basic and
    Standard split; students in Class 10 in 2026-27 are the final batch to take it.
  </p>
  <p>
    Class 10 has two board examinations. Every student sits the first; those who pass may sit the second to improve up
    to three of science, maths, social science and the languages. Treat the first as the real examination. Our
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a>, the
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths guide</a> and the
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> go into detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbx-senior">How are marks split in Classes 11 and 12?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE senior secondary marks for common subjects, 2026-27</caption>
    <thead>
      <tr><th scope="col">Subject (code)</th><th scope="col">Theory</th><th scope="col">Practical or internal</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics (042), Chemistry (043), Biology (044)</td><td>70</td><td>30 practical</td></tr>
      <tr><td>Mathematics (041) or Applied Mathematics (241); a student takes one</td><td>80</td><td>20 internal</td></tr>
      <tr><td>Accountancy (055), Economics (030), Business Studies (054)</td><td>80</td><td>20 internal</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Class 12 has one main board examination. In 2026 the practical examinations began in January and the theory
    papers on 17 February; later dates belong to cbse.gov.in. Each year's sample paper sets out the paper design, so a
    tutor should work from the current one. Commerce students should decide early whether they want help in
    accountancy; if no specialist is free nearby at the right hour, it is a subject that works well online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbx-medium">How does the medium of instruction change tuition?</h2>
  <p>
    The syllabus is CBSE's whichever medium a school teaches in, but the medium changes how a tutor should explain.
    The city research notes, for instance, Hindi-medium and Telugu-medium schooling at Haddo and a Tamil-medium primary
    school on the Aberdeen side.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Matching a tutor to the school's medium</caption>
    <thead>
      <tr><th scope="col">Situation</th><th scope="col">What to ask for</th></tr>
    </thead>
    <tbody>
      <tr><td>Child studies in Hindi, Tamil, Telugu or Bengali medium</td><td>A tutor who can explain in that language; confirm with the school which language the board answers will be written in</td></tr>
      <tr><td>Child moving to an English-medium section</td><td>Subject vocabulary in English built alongside the syllabus, with an <a href="{{ url('/english-home-tutor-port-blair') }}">English tutor</a> if reading is slow</td></tr>
      <tr><td>English-medium throughout</td><td>A tutor matched on subject and class alone</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbx-move">What happens after Class 10?</h2>
  <p>
    Some localities have government secondary schools that end at Class 10, so a student may change school for Classes
    11 and 12; the city research describes this for Delanipur, for example. A change of school, new classmates and new
    stream subjects arrive together. A tutor who already knows the student is a steady point through that change.
    Three things help: choose the stream with the Class 10 results and the student's interest in view, start the new
    subjects with a tutor in the first month rather than after the first test, and keep any entrance plan realistic
    until Class 11 physics and maths feel secure.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbx-case">How should a tutor teach competency-based questions?</h2>
  <p>
    With close to half of each secondary paper built on cases and data, a tutor who drills only textbook exercises
    leaves marks behind. These questions test reading as much as subject knowledge, which matters even more for a
    student working in a second language. A steady routine:
  </p>
  <ol>
    <li><strong>Read the passage once for the story,</strong> then again marking every number and condition.</li>
    <li><strong>Name the textbook idea underneath:</strong> a ratio, a reflex arc, a balanced equation, Ohm's law.</li>
    <li><strong>Answer each part separately,</strong> so one mistake does not spill into the next.</li>
    <li><strong>Write the reasoning,</strong> because a bare answer earns little.</li>
  </ol>
  <p>
    At the demo, ask the tutor to teach one such question. Abhinandan Tiwary's role covers Class 10 CBSE maths, and
    Aaditya Kashyap's covers CBSE physics, chemistry and biology.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbx-year">How should an island year be planned?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A CBSE tuition rhythm for a board student in Sri Vijaya Puram</caption>
    <thead>
      <tr><th scope="col">Part of the year</th><th scope="col">Home sessions</th><th scope="col">Online sessions</th></tr>
    </thead>
    <tbody>
      <tr><td>Start of the session</td><td>Two a week for the main subject</td><td>A short weekly check in a second subject</td></tr>
      <tr><td>Monsoon months</td><td>Kept where possible</td><td>Same tutor, same hour, on heavy-rain evenings</td></tr>
      <tr><td>Weeks of inter-island travel</td><td>Paused</td><td>Every lesson moved online</td></tr>
      <tr><td>Winter months before the boards</td><td>Full timed papers with the tutor present</td><td>Marking and discussion of papers done at home</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The inter-island ships that leave from Phoenix Bay run on set days, so a family that travels for work can plan
    those weeks in advance. The <a href="{{ url('/online-tutor-port-blair') }}">online tutors for Port Blair</a> page
    explains the set-up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbx-areas">How do CBSE tutors reach six localities?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Notes for a tutor's first visit in six localities</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">What helps</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $pbxA('aberdeen-bazaar', 'Aberdeen Bazaar') !!}</td><td>Lane name plus the clock tower or a shop as a reference; a slot before the evening market crowd</td></tr>
      <tr><td>{!! $pbxA('haddo', 'Haddo') !!}</td><td>Mention the school's medium; for a quarters block, the block, quarter number and nearest gate</td></tr>
      <tr><td>{!! $pbxA('delanipur', 'Delanipur') !!}</td><td>Block and flat number in a building, the door in a house; plan for the Class 10 to 11 move</td></tr>
      <tr><td>{!! $pbxA('junglighat', 'Junglighat') !!}</td><td>A landmark and lane rather than a house number; parking details for flats</td></tr>
      <tr><td>{!! $pbxA('prothrapur', 'Prothrapur') !!}</td><td>Senior secondary classes on hand; a map pin, and online support for a specialist subject</td></tr>
      <tr><td>{!! $pbxA('dollygunj', 'Dollygunj') !!}</td><td>Newer lanes, so share a map pin; fix the slot around school-bus and work timings</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zones: <a href="{{ url('/city/port-blair/zone/aberdeen-old-town') }}">Aberdeen and the old town</a>,
    <a href="{{ url('/city/port-blair/zone/junglighat-central-localities') }}">Junglighat and the central
    localities</a> and the <a href="{{ url('/city/port-blair/zone/expansion-villages') }}">expansion villages</a>.
    Every area is on the <a href="{{ url('/city/port-blair') }}">Sri Vijaya Puram (Port Blair) page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbx-pages">Which subject page should you read next?</h2>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-port-blair') }}">Maths home tutors in Port Blair</a>, Classes 6 to 12.</li>
    <li><a href="{{ url('/science-home-tutor-port-blair') }}">Science home tutors in Port Blair</a>, Classes 6 to 10.</li>
    <li><a href="{{ url('/physics-home-tutor-port-blair') }}">Physics</a>, <a href="{{ url('/chemistry-home-tutor-port-blair') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-port-blair') }}">biology</a> for Classes 11 and 12.</li>
    <li><a href="{{ url('/english-home-tutor-port-blair') }}">English home tutors in Port Blair</a>, including help when changing medium.</li>
    <li>The national <a href="{{ url('/jee-home-tutor') }}">JEE</a> and <a href="{{ url('/neet-home-tutor') }}">NEET</a> home tutor pages for entrance preparation.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbx-ask">Which questions should you ask a CBSE tutor at the demo?</h2>
  <ol>
    <li>Is the optional Advanced paper in Class 9 a good idea for my child, and why?</li>
    <li>Which board examination in Class 10 are you planning for, and what would make the second one worth taking?</li>
    <li>Can you explain in my child's school medium where needed, while answers stay in the paper's language?</li>
    <li>Which year's sample paper are you working from at the moment?</li>
    <li>If we travel, or the rain is heavy, does the lesson move online at the same hour?</li>
  </ol>
  <p>
    We send two or three matched tutors with fees shown before the demo; the first class is free, and switching later
    is free too. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbx-fees">What do CBSE tutors charge, and how do you start?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own fee,
    which you see before booking. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-port-blair') }}">home tuition fees in Port Blair</a> explain what to ask.
  </p>
  <p>
    Send the class, subjects, the school's medium, your locality with a landmark and the slots that suit, then book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and you can browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>. Teachers can see <a href="{{ url('/tuition-jobs/port-blair') }}">tuition jobs in Port Blair</a>, and
    the <a href="{{ url('/blog/port-blair-home-tuition-guide') }}">Port Blair home tuition guide</a> walks through each
    zone.
  </p>
  </section>

  </div>
</article>
