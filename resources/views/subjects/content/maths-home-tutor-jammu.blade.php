{{--
  Long-form guide for the "maths home tutor Jammu" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/jammu-research.json (zone_facts and area "about"
  texts, each with sources). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-10-maths-preparation (unit marks,
  section layout, Standard/Basic skill split, no calculators, pi = 22/7),
  cbse-class-10-board-year-plan-gurgaon (80 + 20, two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC single 2027/2028 paper,
  seven units, project marking), -ib-math-aaai-slhl (AA/AI, teaching hours,
  paper weights, exploration) and jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026 pattern).
  JKBOSE: official site https://jkbose.jk.gov.in/ (fetched 3 Oct 2026) lists
  the Secondary School Examination (Class 10), Higher Secondary Part I
  (Class 11) and Higher Secondary (Class 12), and publishes a syllabus, model
  test papers and a question bank. No paper pattern is stated here.
  No school, college, coaching institute, society or people's names, no
  distances or travel times, only the allowed fee sentence. Flyovers are
  mentioned only as "under construction", without dates.

  Area links render only when that Jammu area page exists and is active.
--}}
@php
  $jmmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jmmA = function (string $slug, string $label) use ($jmmSlugs) {
      return in_array($slug, $jmmSlugs, true)
          ? '<a href="' . e(url('/city/jammu/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide jmm-guide" aria-labelledby="jmmGuideTitle">
  <h2 id="jmmGuideTitle">Maths home tutor in Jammu: name the board, name the colony, then choose the teacher</h2>

  <p class="nx-guide__lede">
    Two families on the same Jammu street can need quite different maths teachers. One child writes the Jammu and
    Kashmir board's Class 10 paper; the next sits CBSE Standard maths; a third is in ISC Class 12 and also thinking
    about JEE. Geography adds a second filter, because the city is split by the Tawi, with the old city on the right
    bank and the newer colonies spread across the left. NXTutors asks for both details first, then puts forward two
    or three maths tutors who suit the syllabus and can reach your side of the river. Each fee is visible before you
    meet anyone, and the opening lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jmm-who">Which paper</a> ·
    <a href="#jmm-jkbose">JKBOSE maths</a> ·
    <a href="#jmm-middle">Classes 5 to 8</a> ·
    <a href="#jmm-ten">CBSE Class 10</a> ·
    <a href="#jmm-twelve">Class 12 and JEE</a> ·
    <a href="#jmm-other">CISCE and international</a> ·
    <a href="#jmm-colonies">Six colonies</a> ·
    <a href="#jmm-demo">The demo</a> ·
    <a href="#jmm-mode">Home or online</a> ·
    <a href="#jmm-fees">Fees</a> ·
    <a href="#jmm-start">Starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jmm-who">Who sets your child's maths paper, and what should you ask a tutor about it?</h2>
  <p>
    This page has two named authors with separate roles. Ajay Vatsyayan writes the guidance on IB, IGCSE and ISC
    maths. Abhinandan Tiwary writes the parts on Class 10 maths for CBSE and ICSE. The first thing both of them would
    ask a Jammu parent is the name of the examining body, since the textbook, the layout of a good answer and the
    practice material all follow from it.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses Jammu families ask us about, who examines each, and one question worth putting to any tutor</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Examined by</th><th scope="col">Shape of the final assessment</th><th scope="col">Ask the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 10, 11 and 12 on the state board</td><td>Jammu and Kashmir Board of School Education (JKBOSE)</td><td>Fixed by the board; read the current syllabus and model test papers on its website</td><td>Have you taught from the books my child's school uses this year?</td></tr>
      <tr><td>CBSE Class 10, Standard or Basic</td><td>CBSE</td><td>Board paper out of 80; the school adds 20</td><td>Which of the two levels fits my child, and on what evidence?</td></tr>
      <tr><td>CBSE Class 12</td><td>CBSE</td><td>38 questions, all compulsory, for 80; 20 internal</td><td>How early will calculus begin, and how often will it return?</td></tr>
      <tr><td>ICSE Class 10; ISC Class 12</td><td>CISCE</td><td>An 80-mark written paper, plus 20 from internal work or projects</td><td>Which exam year's syllabus are you working from?</td></tr>
      <tr><td>IB Diploma; Cambridge IGCSE</td><td>IB; Cambridge</td><td>IB papers with an exploration; IGCSE at Core or Extended tier</td><td>Which course, level or tier have you taught most recently?</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmm-jkbose">How should a tutor prepare a JKBOSE student for maths?</h2>
  <p>
    The Jammu and Kashmir Board of School Education runs three public examinations: the Secondary School Examination
    in Class 10, Higher Secondary Part I in Class 11 and the Higher Secondary examination in Class 12. On its official
    website, jkbose.jk.gov.in, the board publishes a syllabus, model test papers and a question bank for these
    levels. We do not describe the board's maths paper on this page, because the board sets and revises it; the
    website is where the current version lives.
  </p>
  <p>
    What a family can judge is the tutor's method. Four habits matter for a state-board maths student:
  </p>
  <ul>
    <li><strong>The board's own material first.</strong> Practice should start from the prescribed textbook and the model test papers on the board's site, and only then move to other books.</li>
    <li><strong>Every chapter, not a favourite few.</strong> A tutor who skips the chapters they find dull leaves gaps the board can test.</li>
    <li><strong>Language that suits your child.</strong> If your child understands an idea faster when it is explained in the language spoken at home, ask for a tutor who can do that while keeping the written steps in the language of the exam.</li>
    <li><strong>Class 11 in mind.</strong> A student who may take science in Class 11 needs algebra, trigonometry and coordinate geometry made solid in Classes 9 and 10, not just enough to pass.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmm-middle">Is a maths tutor worth it before the board years?</h2>
  <p>
    Often more than in Class 10 itself. Most trouble in the board year starts earlier: fractions that were never
    quite understood, negative numbers handled by guesswork, or a first meeting with algebra that went badly. A tutor
    in Classes 5 to 8 has time to find those cracks and fill them calmly.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths tuition from Class 5 to Class 10: the main task at each stage and a sign that it is working</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Main task for the tutor</th><th scope="col">A sign it is working</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 5 and 6</td><td>Number sense: place value, fractions, decimals and the four operations without a crutch</td><td>Your child estimates an answer before working it out</td></tr>
      <tr><td>Classes 7 and 8</td><td>The step into algebra, ratio and simple equations, plus geometry with reasons</td><td>Letters stop looking frightening; working is written in lines</td></tr>
      <tr><td>Class 9</td><td>A heavier book, with proofs, polynomials and coordinate geometry arriving together</td><td>Mistakes are fixed within the chapter, not at the year end</td></tr>
      <tr><td>Class 10</td><td>Every chapter tied to the board paper and its marking</td><td>Timed sections are finished with a few minutes left for checking</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmm-ten">What does the CBSE Class 10 maths paper reward in 2026-27?</h2>
  <p>
    CBSE keeps the same paper design as last session. Fourteen NCERT chapters are grouped into seven units for the
    80 board marks, and the order below is the order in which a tutor's year should be weighted:
  </p>
  <ul>
    <li><strong>Algebra, 20 marks.</strong> Polynomials, linear equations in two variables, quadratics and arithmetic progressions. Watch for equations that are set up wrongly from the words of a problem.</li>
    <li><strong>Geometry, 15 marks.</strong> Triangles and circles. Each line of a proof needs its reason beside it.</li>
    <li><strong>Trigonometry, 12 marks.</strong> Including heights and distances, where the sketch should come before any ratio.</li>
    <li><strong>Statistics and probability, 11 marks.</strong> Grouped data tables invite small arithmetic slips.</li>
    <li><strong>Mensuration, 10 marks.</strong> Combined solids, with units carried to the last line.</li>
    <li><strong>Real numbers and coordinate geometry, 6 marks each.</strong> Short questions that ought to be safe.</li>
  </ul>
  <p>
    Section A holds 20 one-mark items (18 multiple-choice and 2 assertion–reason). Section B then has five two-mark
    questions, C six three-mark ones, D four five-mark answers and E three four-mark case studies. Calculators stay
    outside the hall, and π is taken as 22/7 unless a question says otherwise. Standard and Basic cover the same
    chapters, but about 54% of Standard's marks test remembering and understanding against about 75% in Basic, so
    Standard is the safer choice for anyone who might take maths in Class 11.
  </p>
  <p>
    From 2026, every Class 10 student sits a compulsory main exam, and those eligible can take an optional second
    exam to improve up to three subjects, maths included. Dates for 2027 had not been announced when this was
    written; cbse.gov.in will carry them. Chapter-by-chapter help is in the
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a>, a month-by-month
    plan is in the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a>, and the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page explains how we match for that year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmm-twelve">Class 12 boards and JEE: how should a maths tutor split the week?</h2>
  <p>
    The CBSE Class 12 paper has 38 compulsory questions for 80 marks, and calculus alone accounts for 35 of them.
    That makes calculus the backbone of the year: it should start early and come back every week, not be saved for
    the winter. JEE Main 2026 Paper 1 set 75 questions for 300 marks, of which 25 were maths, 20 with options and 5
    with a numerical answer; a correct response earned 4 and a wrong one cost 1. NTA publishes the pattern each year
    on jeemain.nta.nic.in, so confirm it before planning mock tests.
  </p>
  <p>
    For a student who already attends a coaching class, a home tutor should not deliver the lecture a second time.
    A sensible week has one session that clears problems left over from the coaching sheet and one that works through
    a board-style long answer, written out in full and marked. Read the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">topic-wise JEE maths guide</a> and our
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page. If coaching or home tuition is
    the open question, <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">this comparison</a>
    sets out both.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmm-other">ICSE, ISC, IB and IGCSE maths: what is different?</h2>
  <dl>
    <dt><strong>ICSE Class 10</strong></dt>
    <dd>A written paper out of 80, with a further 20 from internal assessment. Complete, ordered working is what earns marks; the <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> shows how.</dd>
    <dt><strong>ISC Class 12</strong></dt>
    <dd>For the 2027 and 2028 exams CISCE sets one 80-mark paper in seven units with no choice between the former Sections B and C, so vectors, three-dimensional geometry, linear programming and probability are now for everyone. Calculus is worth 35. Two projects add 20 marks, each out of 10: 1 for format, 4 for content, 2 for findings and 3 for the viva. Our <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> covers both years.</dd>
    <dt><strong>IB Diploma</strong></dt>
    <dd>Analysis and Approaches leans on algebra, functions, calculus and proof, and keeps one paper without a calculator. Applications and Interpretation leans on modelling and statistics, with a graphic display calculator throughout. SL is taught over 150 hours and HL over 240. At SL two papers carry 40% each; at HL three papers carry 30%, 30% and 20%; at both levels the exploration supplies the final 20% and must be the student's own work. See the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">guide to IB maths AA and AI</a>.</dd>
    <dt><strong>Cambridge IGCSE</strong></dt>
    <dd>The Core tier caps the grade at C, while Extended spans A* to G. Agree the tier with the school well before entries close, and read about <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">moving from CBSE to IB or IGCSE</a> if a change of board is on the table.</dd>
  </dl>
  <p>
    Teachers for these four courses are fewer than for CBSE, so name the course in your first message. When nobody
    suitable lives near you, an online specialist can take the course-specific work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmm-colonies">What should you arrange for a maths tutor in six Jammu colonies?</h2>
  <p>
    Most tutors in Jammu move by two-wheeler, car or auto, and the colonies differ in how a visitor finds the door.
    The six below sit across three zones of the new city. Our <a href="{{ url('/city/jammu') }}">Jammu page</a> links each colony's
    own page.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Jammu colonies: the usual homes, how a tutor finds you, and one thing to agree before the first class</caption>
    <thead>
      <tr><th scope="col">Colony</th><th scope="col">Usual homes</th><th scope="col">Finding the door</th><th scope="col">Agree beforehand</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $jmmA('gandhi-nagar', 'Gandhi Nagar') !!}</td><td>Private houses, single-storey government housing and some newer flats around a big market</td><td>Gol Market Chowk or Last Morh as the landmark; government quarters may check visitors at the gate</td><td>A fixed slot with margin, since the market roads fill in the evening and the Satwari–Last Morh flyover is still under construction</td></tr>
      <tr><td>{!! $jmmA('nanak-nagar', 'Nanak Nagar') !!}</td><td>Independent houses on plotted lanes, with builder floors and a few apartment blocks</td><td>Doorstep arrival; give the lane landmark, as the colony is large enough to span three wards</td><td>Whether the tutor already teaches in Gandhi Nagar or Trikuta Nagar, which makes the trip simple</td></tr>
      <tr><td>{!! $jmmA('trikuta-nagar', 'Trikuta Nagar') !!}</td><td>A planned colony of plotted houses in Sectors 1 to 9, including 5A, with its own shops</td><td>Sector and house number are usually enough</td><td>A weekday hour away from the peak at the junctions near the station and the bypass</td></tr>
      <tr><td>{!! $jmmA('channi-rama', 'Channi Rama') !!}</td><td>Houses and new construction, with two-bedroom homes the most common choice</td><td>Send a map pin; newer pockets can be hard to find the first time</td><td>Tell the guard or neighbours if you live in a flat and a tutor will call</td></tr>
      <tr><td>{!! $jmmA('sainik-colony', 'Sainik Colony') !!}</td><td>Independent houses, with plots still being built on in the Extension</td><td>Sector and house number, plus a phone number for the first visit</td><td>A slot outside office hours on the highway junctions</td></tr>
      <tr><td>{!! $jmmA('greater-kailash', 'Greater Kailash') !!}</td><td>Houses and apartment buildings, with shops close by</td><td>Buildings may keep a visitor register; houses mean doorstep arrival</td><td>A fixed time clear of the evening rush at Greater Kailash Chowk</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Families on the right bank of the Tawi can read the zone guides for
    <a href="{{ url('/city/jammu/zone/old-city-sidhra') }}">Old City and Sidhra</a> and
    <a href="{{ url('/city/jammu/zone/janipur-akhnoor-road') }}">Janipur and Akhnoor Road</a>; the
    <a href="{{ url('/blog/jammu-home-tuition-guide') }}">Jammu home tuition guide</a> walks through every zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmm-demo">How can you tell, in one free demo, whether a maths tutor is right?</h2>
  <p>
    Ask the tutor to teach the chapter your child is on at school this week, not a set piece. Then notice four
    things:
  </p>
  <ol>
    <li><strong>A short diagnosis.</strong> The tutor asks a few questions to find out where your child stands before explaining anything.</li>
    <li><strong>Errors named precisely.</strong> Was the mistake in calculation, in reading the question or in the idea? A good tutor says which, because each has a different fix.</li>
    <li><strong>Working that matches the board.</strong> The steps on the page look the way your child's examiner wants them.</li>
    <li><strong>A clear next step.</strong> You leave knowing the plan for the following three lessons and the homework that will be checked.</li>
  </ol>
  <p>
    If the match is wrong, say so and we set up a demo with the next tutor on your shortlist; moving to a different
    tutor later is free as well. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist for parents</a> has more to look for.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmm-mode">Should maths tuition in Jammu be at home, online or both?</h2>
  <p>
    Sitting at the same table, a tutor sees an error the moment it is written, which matters most for younger
    children and for proofs. Online lessons are useful when the right specialist lives on the other bank of the
    Tawi, or when a coaching day ends late. Plenty of families settle on one home session and one online session a
    week. The <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article sets out
    the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmm-fees">What does a maths home tutor in Jammu charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Every tutor fixes their
    own rate. The class and syllabus, the tutor's experience with that paper, the journey to your colony at your
    chosen hour and the number of lessons each week all affect it. You see every shortlisted fee before the demo, and
    the <a href="{{ url('/blog/home-tuition-fees-jammu') }}">Jammu home tuition fees</a> article covers the questions
    worth asking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmm-start">How do you ask for a maths shortlist in Jammu?</h2>
  <p>
    Send five details: the class; the syllabus by name (JKBOSE, CBSE Standard or Basic, ICSE, ISC, IB or IGCSE); your
    colony and a nearby landmark; the days and hours you can offer; and a budget. We reply with two or three matched
    maths tutors and their fees, and you pick one for a free demo. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. If nobody suitable can
    reach your colony at that hour, we suggest an online or mixed plan. NXTutors works from Sector 66, Gurugram, and
    teaches online across India; the national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page
    explains how matching works elsewhere.
  </p>
  <p>
    For other subjects in the city, see our <a href="{{ url('/science-home-tutor-jammu') }}">science</a>,
    <a href="{{ url('/physics-home-tutor-jammu') }}">physics</a> and
    <a href="{{ url('/jee-home-tutor-jammu') }}">JEE</a> tutor pages for Jammu. Maths teachers who live in Jammu
    and want students close to home can see open requests on the
    <a href="{{ url('/tuition-jobs/jammu') }}">Jammu tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
