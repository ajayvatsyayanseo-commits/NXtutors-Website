{{--
  Main board page for "CBSE home tutor Puducherry" (capitals wave, phase 2,
  subjects-b, 3 Oct 2026). Puducherry has no board of its own, so this page also
  explains the move of government schools from the state syllabus to CBSE.
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths) and Aaditya
  Kashyap (role: CBSE and ICSE science). No anecdotes, years or results claimed.

  Puducherry syllabus facts only from the research file's board_facts, which cite
  the Directorate of School Education, Puducherry (read again 3 Oct 2026):
  - https://schooledn.py.gov.in/CBSE/cbsetrg.html : orientation programmes issued
    25/04/2024 (heads of institutions, inspecting officers and teachers, "Ensuring a
    smooth swap from State Syllabus to CBSE Syllabus") and 08/05/2024 (lecturers
    and TGTs in CBSE syllabus).
  - https://schooledn.py.gov.in/Exams/sslcResult.html : Class 10 result analyses
    listed as SSLC up to 2024, CBSE 10 in 2025, "CBSE & State Board 10" in 2026;
    Class 12 as +2 up to 2024 and CBSE 12 from 2025.
  - https://schooledn.py.gov.in/Exams/Results%202026/12th%20STATE%20BOARD%20RESULT-2026%20Eng%20%26%20Tamil.pdf :
    separate State Board result analysis for private schools in the Puducherry and
    Karaikal regions from 2026.
  The state board used by those private schools is not named and no pattern is stated.

  CBSE facts only as the Gurgaon board hub (cbse-home-tutor-gurgaon) states them,
  citing cbseacademic.nic.in / cbse.gov.in (read 1 Oct 2026): Curriculum 2026-27
  Secondary (80 + 20 in major subjects, 33% pass, about half competency-focused
  questions, Class IX common paper + optional Advanced 25 marks / 1 hour, not in
  aggregate, 50%+ noted; Basic/Standard ending with the 2026-27 Class X batch;
  third language internally assessed); Notification 14.02.2026 on two Class X board
  exams; Curriculum 2026-27 Senior Secondary (Physics 042, Chemistry 043, Biology
  044 at 70 + 30; Mathematics 041 / Applied Mathematics 241 at 80 + 20; Accountancy
  055, Economics 030, Business Studies 054 at 80 + 20).
  Local detail only from puducherry-research.json and the /city/puducherry hub.
  No schools, colleges, universities, places of worship or people named. Fee
  wording is the approved sentence. Area links render only for active areas.
--}}
@php
  $pycbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pycbA = function (string $slug, string $label) use ($pycbSlugs) {
      return in_array($slug, $pycbSlugs, true)
          ? '<a href="' . e(url('/city/puducherry/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="pycbGuideTitle">
  <h2 id="pycbGuideTitle">CBSE home tutors in Puducherry: help for a town that has changed syllabus</h2>

  <p class="nx-guide__lede">
    For most Puducherry families, CBSE is no longer one option among several. Government schools have moved from the
    state syllabus to CBSE, and the town's Class 10 and Class 12 results are now reported as CBSE results. That means
    many children are learning from NCERT books and sitting CBSE-style papers for the first time, while their
    parents studied under a different system. A home tutor is most useful here as a guide to the new board: how its
    papers are marked, what changed in Classes 9 and 10 for 2026-27, how the senior subjects are weighted and how to
    write answers the CBSE way. This page covers all of that, plus how tutors reach six localities and what to check in
    the free demo. Class 10 maths notes are by Abhinandan Tiwary and science notes by Aaditya Kashyap.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pycb-change">What changed</a> ·
    <a href="#pycb-settle">Settling into NCERT</a> ·
    <a href="#pycb-ladder">Class by class</a> ·
    <a href="#pycb-nine">Classes 9 and 10</a> ·
    <a href="#pycb-senior">Classes 11 and 12</a> ·
    <a href="#pycb-private">State-board schools</a> ·
    <a href="#pycb-tamil">Tamil and English</a> ·
    <a href="#pycb-subjects">Subjects</a> ·
    <a href="#pycb-places">Six localities</a> ·
    <a href="#pycb-demo">The demo</a> ·
    <a href="#pycb-start">Fees and start</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pycb-change">What changed in Puducherry schools?</h2>
  <p>
    Puducherry has no school board of its own. The Directorate of School Education's own pages record the shift:
  </p>
  <ul>
    <li><strong>Teacher orientation in 2024.</strong> Circulars dated April and May 2024 set out orientation programmes for heads of institutions, inspecting officers, lecturers and teachers under the heading "Ensuring a smooth swap from State Syllabus to CBSE Syllabus".</li>
    <li><strong>Results renamed.</strong> The Directorate's result analyses list Class 10 as SSLC up to 2024 and as CBSE 10 from 2025, and Class 12 as +2 up to 2024 and as CBSE 12 from 2025.</li>
    <li><strong>A state-board group remains.</strong> From 2026 the Directorate also publishes separate state-board SSLC and +2 result analyses for private schools in the Puducherry and Karaikal regions.</li>
  </ul>
  <p>
    So check two things before you brief a tutor: which syllabus your child's school follows this year, and which one
    your child studied before. The <a href="{{ url('/city/puducherry') }}">Puducherry tutors page</a> sets out the
    other boards in the town, CISCE's ICSE and ISC and a smaller IB and Cambridge group, without shares or counts,
    because we do not have reliable ones.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pycb-settle">Settling into NCERT after the switch</h2>
  <p>
    The content of school maths and science does not change much between syllabi, but the way it is presented and
    examined does. NCERT books explain an idea through worked examples and activities, then ask questions that apply
    it to a fresh situation. CBSE papers follow that lead: around half of each secondary paper is competency-based,
    built on cases, data, sources and real situations. A child used to learning answers from a question bank can find
    that unsettling. The tutor's work in the first term after a switch is practical:
  </p>
  <ol>
    <li>Read each new chapter with the child, marking definitions, solved examples and the boxed summaries.</li>
    <li>Do the in-text and end-of-chapter questions in writing, not orally.</li>
    <li>Add the NCERT exemplar and a few case-based questions on the same idea.</li>
    <li>Mark answers against a CBSE marking scheme, so the child sees where step marks come from.</li>
  </ol>
  <p>
    Topics that were taught in a different class under the old syllabus can leave a gap or a repeat. A short list of
    those, made with the school's textbook in hand, saves months of confusion.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pycb-ladder">CBSE from Class 6 to Class 12</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What each stage asks of a Puducherry CBSE student</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Assessed by</th><th scope="col">Common sticking point</th><th scope="col">Tutor's focus</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>The school</td><td>Fractions, integers, reading a science passage closely</td><td>Basics and written working, while the stakes are low</td></tr>
      <tr><td>9</td><td>School: 80-mark annual paper and 20 internal</td><td>Maths and science widen at once</td><td>Regular chapter tests; whether to try the Advanced paper</td></tr>
      <tr><td>10</td><td>CBSE: 80-mark board paper and 20 school-assessed</td><td>Application questions and presentation</td><td>Sample papers marked to the official scheme</td></tr>
      <tr><td>11</td><td>The school</td><td>The step up in physics, chemistry and maths</td><td>A sound base before the board year</td></tr>
      <tr><td>12</td><td>CBSE: theory plus practical or internal</td><td>Revising the full year while entrance tests compete</td><td>One plan that serves both</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The pass mark at Class 10 is 33% in each subject. Trouble that seems to appear "suddenly" in Class 9 usually began
    with fractions or early algebra, so a tutor in the middle years earns more by repairing than by racing ahead.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pycb-nine">Classes 9 and 10 under the 2026-27 curriculum</h2>
  <p>
    In Class 9 every student now sits a common 80-mark maths paper and a common 80-mark science paper. On top of that, a
    student may choose an Advanced paper in maths, science, both or neither. Each Advanced paper is worth 25 marks, lasts
    an hour, contains only higher-order questions on additional content, and stays outside the aggregate; a score of
    50% or more is recorded on the marksheet. The old Basic and Standard maths split is ending, with the 2026-27 Class 10
    batch the last to use it. For a child who has just moved to CBSE, the honest advice is to secure the common paper
    first and add Advanced only where the subject already feels easy.
  </p>
  <p>
    Class 10 has two board exams from 2026. The first is compulsory. A student who passes it may sit the second to
    improve marks in up to three of science, maths, social science and the languages. Plan for the first as the real
    exam and treat the second as a safety net for one subject. A third language is also compulsory in the transition
    years and is assessed by the school, with no board paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pycb-senior">Classes 11 and 12: how the marks are split</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Senior secondary subjects most often tutored, 2026-27 curriculum</caption>
    <thead>
      <tr><th scope="col">Subject (code)</th><th scope="col">Theory</th><th scope="col">Practical or internal</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics (042), Chemistry (043), Biology (044)</td><td>70</td><td>30 practical</td></tr>
      <tr><td>Mathematics (041) or Applied Mathematics (241), one only</td><td>80</td><td>20 internal</td></tr>
      <tr><td>Accountancy (055), Economics (030), Business Studies (054)</td><td>80</td><td>20 internal</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Class 12 board paper covers the full Class 12 syllabus, and CBSE has said senior papers will lean further
    towards application. The design arrives each year with the sample paper on cbseacademic.nic.in, so the tutor should
    work from the current one. Students also preparing for entrance exams can see
    <a href="{{ url('/jee-home-tutor-puducherry') }}">JEE home tutors in Puducherry</a> and
    <a href="{{ url('/neet-home-tutor-puducherry') }}">NEET home tutors in Puducherry</a>; commerce students, the
    <a href="{{ url('/accountancy-home-tutor-puducherry') }}">accountancy tutor in Puducherry</a> page. Our guides to
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics</a>,
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra</a> help in the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pycb-private">If your child's school follows the state-board syllabus</h2>
  <p>
    Some private schools in Puducherry still teach the state-board SSLC and +2 syllabus. A tutor for these students
    should work from the prescribed textbooks and that board's own past papers, and take every exam format and date
    from the school, which receives the board's notices. We do not restate that board's patterns here.
  </p>
  <p>
    Children do move between the two, often at Class 11. A move to CBSE means NCERT books, CBSE sample papers and a
    theory-practical split as shown above; a move the other way means new textbooks and a different paper. Either
    way, the summer before the new class is the time for a short bridge: the new book's first chapters, its question
    style and a few fully marked answers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pycb-tamil">Explaining in Tamil, writing in English</h2>
  <p>
    The Puducherry hub notes that many children read their books in English but think through a hard idea in Tamil.
    A tutor can use that: explain the idea in whichever language lands, then have the child write the answer in clear
    English with the terms NCERT uses. Kept up every session, that habit saves marks in the board paper, where a correct
    idea in a vague sentence earns less than it should. Ask for a monthly one-page note of chapters done, test scores
    and errors that keep returning, so you can follow progress whatever language the lesson runs in.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pycb-subjects">Which subjects, and where to read more</h2>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-puducherry') }}">Maths home tutors in Puducherry</a>, with national board-year pages for <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10</a> and <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12</a> maths.</li>
    <li><a href="{{ url('/science-home-tutor-puducherry') }}">Science tutors in Puducherry</a> and our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a>.</li>
    <li><a href="{{ url('/physics-home-tutor-puducherry') }}">Physics</a>, <a href="{{ url('/chemistry-home-tutor-puducherry') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-puducherry') }}">biology</a> for the senior classes.</li>
    <li><a href="{{ url('/english-home-tutor-puducherry') }}">English tutors in Puducherry</a> for writing and literature.</li>
  </ul>
  <p>
    The <a href="{{ url('/cbse-home-tutor-gurgaon') }}">CBSE board hub</a> explains the board in more depth, and
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation</a> gives a workable order for
    the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pycb-places">How tutors reach six Puducherry localities</h2>
  <ul>
    <li><strong>{!! $pycbA('karuvadikuppam', 'Karuvadikuppam') !!}:</strong> close to both Lawspet and Muthialpet, so tutors come from either side; flats may need the tutor's name at the gate, and the main road is busier in the evening.</li>
    <li><strong>{!! $pycbA('kamaraj-nagar', 'Kamaraj Nagar') !!}:</strong> a front door or a building gate with a visitor's book; keep to a slot agreed in advance, since nearby commercial roads fill in the evening.</li>
    <li><strong>{!! $pycbA('kalapet', 'Kalapet') !!}:</strong> apart from the main town on the East Coast Road; a tutor from Kalapet itself or the Lawspet side, with online sessions for senior subjects, is the usual answer.</li>
    <li><strong>{!! $pycbA('saram', 'Saram') !!}:</strong> near the main bus stand, which makes it easy for tutors who travel by bus; avoid the junction at office hours.</li>
    <li><strong>{!! $pycbA('thattanchavady', 'Thattanchavady') !!}:</strong> plotted streets and builder floors; send the floor number and a landmark before the first class.</li>
    <li><strong>{!! $pycbA('villianur', 'Villianur') !!}:</strong> reachable by bus, two-wheeler or train to Villianur station; plan around temple festival days in the centre.</li>
  </ul>
  <p>
    Zone pages: <a href="{{ url('/city/puducherry/zone/lawspet-ecr') }}">Lawspet and ECR</a>,
    <a href="{{ url('/city/puducherry/zone/reddiarpalayam-villianur') }}">Reddiarpalayam and Villianur</a>,
    <a href="{{ url('/city/puducherry/zone/heritage-town') }}">Heritage Town</a> and
    <a href="{{ url('/city/puducherry/zone/mudaliarpet-ariyankuppam') }}">Mudaliarpet and Ariyankuppam</a>. Our
    <a href="{{ url('/blog/puducherry-home-tuition-guide') }}">Puducherry home tuition guide</a> adds timing advice for each.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pycb-demo">Five questions for a CBSE tutor at the demo</h2>
  <ol>
    <li><strong>"Which sample paper do you use?"</strong> It should be the current year's, from the CBSE academic site.</li>
    <li><strong>"Walk my child through a case-based question."</strong> Watch whether the tutor teaches how to read it.</li>
    <li><strong>"What changes for a child who studied the state syllabus until now?"</strong> A good answer names specific habits, not just "more practice".</li>
    <li><strong>"How do you mark a written answer?"</strong> Steps, units, diagrams and the final statement.</li>
    <li><strong>"What will I see each month?"</strong> Chapters covered, scores and recurring errors.</li>
  </ol>
  <p>
    You get two or three matched tutors, see every fee before the demo, take the first class free and can switch later
    at no cost. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pycb-start">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For CBSE in Puducherry, the class, the number of subjects, sessions a week and the tutor's travel decide where a
    fee sits. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-puducherry') }}">home tuition fees in Puducherry</a>.
  </p>
  <p>
    Share the class, the syllabus now and before, the subjects, your locality and free slots, then book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. You can browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>, compare with <a href="{{ url('/icse-home-tutor-puducherry') }}">ICSE and ISC tutors in Puducherry</a>,
    or, if you teach CBSE, see <a href="{{ url('/tuition-jobs/puducherry') }}">tuition jobs in Puducherry</a>.
  </p>
  </section>

  </div>
</article>
