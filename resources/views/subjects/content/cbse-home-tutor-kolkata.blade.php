{{--
  Board page for "CBSE home tutor Kolkata". Authors: Abhinandan Tiwary (role:
  Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE and ICSE
  science). No anecdotes, years or results are claimed for either. No schools,
  coaching institutes or people are named.

  Board facts only as the Gurgaon board hub (cbse-home-tutor-gurgaon) states
  them, which cites cbseacademic.nic.in / cbse.gov.in (read 1 Oct 2026):
  - Curriculum 2026-27, Secondary (Curriculum_SecP1_2026-27.pdf): 80 marks
    exam + 20 internal in major subjects; 33% to pass; about half the
    questions competency-focused; Class IX maths and science common paper
    (80 marks) plus optional Advanced (25 marks, 1 hour, higher-order),
    not added to the aggregate, 50%+ noted on the marksheet; Basic/Standard
    discontinued except the 2026-27 Class X batch; R3 internally assessed.
  - Notification 14.02.2026, Two Board Examinations in Class X: first exam
    compulsory; improvement in up to three of science, maths, social science
    and languages in the second.
  - Curriculum 2026-27, Senior Secondary: Physics 042, Chemistry 043,
    Biology 044 70 + 30 practical; Mathematics 041 / Applied Mathematics 241
    (one only), Accountancy 055, Economics 030, Business Studies 054 80 + 20.
  West Bengal boards (WBBSE Madhyamik, WBCHSE Higher Secondary) described
  generally only, as on the /city/kolkata hub. Kolkata's board mix only as the
  hub states it (no shares). Local detail only from
  database/seo-content/areas/kolkata-research.json, kolkata-zone-guides.json,
  zones/kolkata.json and the hub. Fee wording is the approved sentence.
  Area links render only for active Kolkata areas.
--}}
@php
  $kcbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kcbA = function (string $slug, string $label) use ($kcbSlugs) {
      return in_array($slug, $kcbSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="kcbGuideTitle">
  <h2 id="kcbGuideTitle">CBSE home tutors in Kolkata: NCERT-first teaching in a city of many boards</h2>

  <p class="nx-guide__lede">
    In Kolkata a CBSE family is one of several kinds of family on the same street. CISCE's ICSE and ISC have a long
    following here, the West Bengal boards run Madhyamik and Higher Secondary, and CBSE is widely taken alongside
    them. That mix matters when you hire a tutor, because a teacher who has spent years on one board's papers does
    not automatically mark the way CBSE marks. This page explains what CBSE asks for from Class 6 to Class 12, what
    changed in the 2026-27 curriculum, which subjects Kolkata parents most often want help with, how tutors reach
    each part of the city, and how to test a CBSE tutor in the free demo. Abhinandan Tiwary contributes the Class 10
    maths view and Aaditya Kashyap the science view.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kcb-mix">CBSE among Kolkata's boards</a> ·
    <a href="#kcb-ladder">Class by class</a> ·
    <a href="#kcb-new">What changed for 2026-27</a> ·
    <a href="#kcb-session">A good hour</a> ·
    <a href="#kcb-subjects">Subjects and pages</a> ·
    <a href="#kcb-zones">Reaching your neighbourhood</a> ·
    <a href="#kcb-mode">Home or online</a> ·
    <a href="#kcb-demo">The demo</a> ·
    <a href="#kcb-fees">Fees and starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kcb-mix">Where does CBSE sit among Kolkata's boards?</h2>
  <p>
    Our <a href="{{ url('/city/kolkata') }}">Kolkata tutors page</a> describes four kinds of board side by side: ICSE
    and ISC with a long and strong following, CBSE taken widely, the state's own West Bengal boards, and a smaller
    group on the IB or Cambridge IGCSE. We do not have figures for how many children study under each, and we do not
    guess. What matters for you is that the tutor pool is mixed too, so say "CBSE" and the class in your request,
    rather than only the subject.
  </p>
  <p>
    How is CBSE different from the West Bengal boards? In general terms, CBSE builds every paper on the NCERT
    textbooks and publishes sample papers and marking schemes on cbseacademic.nic.in each year. The West Bengal Board
    of Secondary Education runs Madhyamik at Class 10 and the West Bengal Council of Higher Secondary Education runs
    the Higher Secondary course for Classes 11 and 12, each with its own books, pattern and notices, and state-board
    schools teach in Bengali, English and other media. A tutor moving between them has to change textbooks, question
    style and sometimes the language of instruction. If your child has switched from a state-board or ICSE school to
    CBSE, tell us; the first month of tuition should be spent on NCERT language and the CBSE answer format.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcb-ladder">CBSE class by class, and the tutor's job at each step</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE from Class 6 to Class 12 for a Kolkata student</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Exams that count</th><th scope="col">The usual sticking point</th><th scope="col">What the tutor should do</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 to 8</td><td>School tests only</td><td>Fractions, integers, first algebra; reading a science chapter properly</td><td>Fix foundations before Class 9 exposes them</td></tr>
      <tr><td>Class 9</td><td>School annual paper of 80 marks plus 20 internal</td><td>The syllabus widens in maths and science at once</td><td>Chapter tests; advise on the optional Advanced papers</td></tr>
      <tr><td>Class 10</td><td>Board paper of 80 plus 20 school marks; 33% needed per subject</td><td>Competency questions and full written answers</td><td>Sample papers marked against the official scheme</td></tr>
      <tr><td>Class 11</td><td>School exams</td><td>The step up in physics, chemistry, maths or accountancy</td><td>Build the base the board year depends on</td></tr>
      <tr><td>Class 12</td><td>Board theory plus practical or internal marks</td><td>Covering the whole syllabus while practicals and projects run</td><td>A revision cycle that keeps returning to older chapters</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In the senior classes the subject decides the split. Physics, chemistry and biology carry 70 marks of theory and
    30 of practical work; mathematics or applied mathematics (a student takes one, not both), accountancy, economics
    and business studies carry 80 and 20. A tutor for a practical subject should leave time for the record file and
    graph work, not only numericals.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcb-new">What changed in the 2026-27 CBSE curriculum?</h2>
  <p>
    <strong>Class 9 maths and science.</strong> Every student now takes a common paper of 80 marks. Beyond that, a
    student may opt for an Advanced paper in maths, in science, in both or in neither: 25 marks, one hour, entirely
    higher-order questions on extra content. The Advanced marks do not enter the aggregate; scoring 50% or more is
    recorded on the marksheet. The old Basic and Standard split is going, except for the Class 10 batch of 2026-27,
    which finishes under the earlier scheme. Opt for Advanced where your child is already comfortable, not to impress.
  </p>
  <p>
    <strong>Class 10, two board exams.</strong> The first exam is compulsory. A student who passes may sit the second
    to improve up to three subjects from science, maths, social science and the languages. Plan for the first; keep
    the second as insurance for one subject that slips.
  </p>
  <p>
    <strong>Competency questions.</strong> About half of a secondary paper is now case-based, source-based,
    data-interpretation or application questions. A student who has only done NCERT exercises can know the chapter
    and still drop marks, so ask the tutor to bring an unseen passage or table to most sessions. A third language is
    also compulsory in the transition years; the school assesses it and there is no board paper, but it needs a slot
    in the week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcb-session">How should a CBSE hour be spent?</h2>
  <p>
    Start with the school notebook, not the tutor's plan: which NCERT exercises were set this week, which were done,
    and where the child stopped. Then one chapter, taught from the textbook's own explanation before moving to
    exemplar problems and a competency question on the same idea. Finish with two board-style answers written in
    full and marked step by step, with units, labelled diagrams and presentation corrected along with the result. A
    short written record of chapters covered, test marks and repeated mistakes, shown to you once a month, is the
    simplest way to tell whether the hours are working. Ask for it from the first week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcb-subjects">Which CBSE subjects do Kolkata parents ask about?</h2>
  <p>
    Up to Class 10 the requests are mostly maths and science, the two subjects where each year builds on the last.
    From Class 11 they split by stream: physics, chemistry and maths, or biology for medical aspirants, and accountancy
    and economics in commerce. English comes up when a child who reads well writes loosely in board answers.
    Each subject has its own Kolkata page:
  </p>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-kolkata') }}">Maths home tutors in Kolkata</a>, with the national <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> and <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths</a> pages for the board years.</li>
    <li><a href="{{ url('/science-home-tutor-kolkata') }}">Science tutors in Kolkata</a> for Classes 6 to 10, and <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science</a>.</li>
    <li><a href="{{ url('/physics-home-tutor-kolkata') }}">Physics</a>, <a href="{{ url('/chemistry-home-tutor-kolkata') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-kolkata') }}">biology</a> tutors for Classes 11 and 12.</li>
    <li><a href="{{ url('/english-home-tutor-kolkata') }}">English tutors in Kolkata</a> for answer-writing and literature.</li>
    <li>Preparing for an entrance exam as well? See <a href="{{ url('/jee-home-tutor-kolkata') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-kolkata') }}">NEET</a> home tutors in Kolkata. CBSE board answers still need separate practice.</li>
  </ul>
  <p>
    For how the board works in detail, our <a href="{{ url('/cbse-home-tutor-gurgaon') }}">CBSE board hub</a> is the
    reference page. Worth reading too: <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths
    preparation</a>, <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> and
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcb-zones">How do CBSE tutors reach your part of Kolkata?</h2>
  <p>
    Kolkata is easier to cross than most Indian cities because of its rail map, and that widens the tutor pool. A few
    patterns from our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/kolkata/zone/salt-lake') }}">Salt Lake</a>.</strong> Write the address the local way, block letters, house number and nearest avenue, as in {!! $kcbA('salt-lake-sector-1', 'Sector 1') !!}. Roads towards Sector V fill at office hours, so early evenings and weekends suit a visiting tutor.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/new-town-rajarhat') }}">New Town and Rajarhat</a>.</strong> Nearly every home is in a gated complex, for example in {!! $kcbA('new-town-action-area-1', 'Action Area 1') !!}. While the Orange Line stations are still being built, a tutor who already lives nearby is the easiest match.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/behala-new-alipore') }}">Behala</a>.</strong> The Purple Line runs above Diamond Harbour Road, so a tutor to {!! $kcbA('behala', 'Behala') !!} can name the stop and finish by auto, avoiding the road at its slowest.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/kasba-em-bypass-south') }}">Kasba and the southern bypass</a>.</strong> In {!! $kcbA('kasba', 'Kasba') !!}, a para name and landmark help a first visit; bypass junctions are heavy in the evening rush, and the Orange Line is the reliable way in.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/lake-town-dum-dum-baguiati') }}">Dum Dum</a>.</strong> With trains and two metro lines, {!! $kcbA('dum-dum', 'Dum Dum') !!} is among the easiest places in the city to reach, so you can afford to ask for a subject specialist.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/tollygunge-jadavpur-garia') }}">Tollygunge to Garia</a>.</strong> The Blue Line is the backbone; in {!! $kcbA('garia', 'Garia') !!}, a tutor on the metro keeps time better than one driving the main road at peak.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcb-mode">Home or online for CBSE in Kolkata?</h2>
  <p>
    Home sessions suit younger children and any paper where written working earns the marks: maths, physics
    numericals, chemistry equations, accountancy formats. Online helps in two cases. The first is a senior subject
    where the right tutor lives across the river or across the city. The second is the festive season: around Durga
    Puja the busiest crossings and heritage lanes fill, and a planned online week keeps the routine going. For online
    maths and science, insist that the tutor sees the notebook live. Many families mix the two with one tutor; our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a> sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcb-demo">A demo checklist for a CBSE tutor</h2>
  <ol>
    <li><strong>This year's papers.</strong> Ask which sample paper and marking scheme they teach from. The answer should be the current one, from the board's own site.</li>
    <li><strong>An unseen case question.</strong> Hand over a competency question and see whether they teach how to read it.</li>
    <li><strong>Board habits, not another board's.</strong> If they also teach ICSE or Madhyamik, ask how a CBSE answer differs in length and format.</li>
    <li><strong>Internal marks.</strong> How will they support the 20 internal marks or the practical file, without doing the work?</li>
    <li><strong>A month's plan.</strong> Which chapters next, and how will you see progress?</li>
  </ol>
  <p>
    You receive two or three matched tutors, see each fee before the demo, and switching tutor later is free. Tutors
    who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For CBSE in Kolkata, the
    class, number of subjects, sessions a week and the tutor's journey move the figure. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">home
    tuition fees in Kolkata</a>.
  </p>
  <p>
    Tell us the class, subjects, your neighbourhood and free slots, and the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Local reading: the
    <a href="{{ url('/blog/south-kolkata-tuition-guide') }}">South Kolkata tuition guide</a> and the
    <a href="{{ url('/blog/salt-lake-and-new-town-tuition-guide') }}">Salt Lake and New Town guide</a>. You can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, and if you teach CBSE yourself, see
    <a href="{{ url('/tuition-jobs/kolkata') }}">tuition jobs in Kolkata</a>.
  </p>
  </section>

  </div>
</article>
