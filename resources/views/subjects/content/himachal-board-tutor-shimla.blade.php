{{--
  Board hub: "HP Board tutor Shimla" (Himachal Pradesh Board of School
  Education, HPBOSE, Dharamshala: Matric Class 10 and Plus Two Class 12).
  Author: nxtutors (NXTutors Academic Team). Page writer (capitals wave 2,
  subjects), 3 Oct 2026. No school, college, coaching, hospital, campus,
  society or people names. No exam dates, results, toppers, candidate or
  school counts.

  Official sources (all on hpbose.org; read 3 Oct 2026):
  - https://www.hpbose.org/AboutUs.aspx : came into existence in 1969 under
    Himachal Pradesh Act No. 14 of 1968, headquarters first at Shimla, moved
    to Dharamshala in January 1983; prescribes syllabus, courses of
    instruction and textbooks; publishes textbooks for Classes 1 to 12; a
    Liaison Office at Shimla and Book Distribution and Guidance/Information
    Centres in the state.
  - https://www.hpbose.org/ : address Gyan Alok Parisar, Dharamshala,
    Kangra; menus for Syllabus, Model Paper, Step Wise Marking, OMR Specimen
    Matric and Plus Two, Competency-Based Question Bank, Date Sheet, Result.
  - https://www.hpbose.org/Syllabus.aspx : "Syllabus for the Academic
    Session 2025-26 Examination"; Matric subjects include English, Hindi,
    Mathematics, Science, Social Science, Sanskrit, Urdu, Computer Science,
    Economics, Home Science, Music, Art; Plus Two subjects include Physics,
    Chemistry, Biology, Mathematics, Accountancy, Business Studies,
    Economics, English, Hindi, History, Geography, Political Science,
    Psychology, Sociology, Public Administration, Computer Science, Home
    Science, Music, Physical Education, Sanskrit, Urdu, Yoga.
  - Admin/Upload/9_2026_12_9_202610thMathsMQP2026-27.pdf : Class 10 maths
    model test paper 2026-27, 3 hours, 80 marks, sections A-E, Section A on
    the OMR sheet, English and Hindi.
  - Admin/Upload/9_2026_12_9_202610thScienceMQP2026-27.pdf : Class 10
    Science & Technology model paper 2026-27, 3 hours, 60 marks, four
    sections (1-, 2-, 3- and 5-mark questions), English and Hindi;
    Admin/Upload/Sylla.Sci.10.04.08.2025.pdf : practical 20 marks, books
    Vigyan and Science published by the board.
  - Admin/Upload/9_2026_12_9_202610thEnglishMQP2026-27.pdf : Class 10
    English model paper 2026-27, 3 hours, 80 marks: MCQ 16 (OMR), reading
    17, writing 17, literature 30.
  - Admin/Upload/Sylla.Phy.12.04.08.2025.pdf and
    Admin/Upload/Sylla.Chem.12.04.08.2025.pdf : Plus Two physics and
    chemistry, theory 3 hours 60 marks, practical 20.
  - Admin/Upload/9_2026_12_Maths12thMQP2026-27.pdf : Plus Two maths model
    paper 2026-27, 3 hours, 80 marks, sections A-E.
  - https://www.hpbose.org/SWMkg.aspx : step-wise marking files, session
    2024-25, Matric and Plus Two subjects.
  - https://www.hpbose.org/ModelQuesPpr.aspx : model question papers for
    Matric, Plus One and Plus Two (2026-27 series among them).
  Local facts only from database/seo-content/areas/shimla-research.json.
  Only the allowed fee sentence. Weather is timing advice only.

  Area links render only when that Shimla area page exists and is active.
--}}
@php
  $shAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $shA = function (string $slug, string $label) use ($shAreaSlugs) {
      return in_array($slug, $shAreaSlugs, true)
          ? '<a href="' . e(url('/city/shimla/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide shmhb-guide" aria-labelledby="shmhbGuideTitle">
  <h2 id="shmhbGuideTitle">HP Board (HPBOSE) tutors in Shimla: Matric in Class 10, Plus Two in Class 12</h2>

  <p class="nx-guide__lede">
    The Himachal Pradesh Board of School Education sets the Matric and Plus Two papers that many Shimla students
    write, and it publishes much of what a tutor needs: its own textbooks, a syllabus for each subject, model question
    papers and step-wise marking files. A good HP Board tutor uses those documents rather than a guidebook written for
    another board, teaches in the language your child answers in, and gets the student used to features such as the
    OMR section before exam day. NXTutors matches families across Shimla's hillside localities with two or three such
    tutors, shows every fee first, and makes the first class a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#shmhb-board">The board</a> ·
    <a href="#shmhb-matric">Matric papers</a> ·
    <a href="#shmhb-plus">Plus Two</a> ·
    <a href="#shmhb-files">Free material</a> ·
    <a href="#shmhb-lang">Hindi and English</a> ·
    <a href="#shmhb-cbse">Compared with CBSE</a> ·
    <a href="#shmhb-plan">Class 9 to 12</a> ·
    <a href="#shmhb-areas">Six localities</a> ·
    <a href="#shmhb-demo">The demo</a> ·
    <a href="#shmhb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="shmhb-board">The HP Board in brief</h2>
  <p>
    According to its own website, the board came into existence in 1969 under a state Act of 1968, with its
    headquarters first in Shimla; the headquarters moved to Dharamshala in January 1983. It prescribes the syllabus,
    courses and textbooks for school education in Himachal Pradesh, publishes textbooks for Classes 1 to 12, and
    conducts examinations including Matric (Class 10) and Plus Two (Class 12). It keeps a liaison office in Shimla and
    runs book distribution and guidance centres around the state. For anything official, including date sheets,
    results and notices, go to hpbose.org; this page describes the papers only as the board's own documents set them
    out.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmhb-matric">Matric: what a Class 10 student writes</h2>
  <p>
    The Matric syllabus covers English, Hindi, mathematics, science, social science and optional subjects such as
    Sanskrit, Urdu, computer science, economics, home science, music and art. The board's 2026-27 model papers for the
    three subjects families ask about most show how different the papers are:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>HP Board Class 10: shape of three 2026-27 model papers, and what a tutor should drill for each</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Model paper</th><th scope="col">What to drill</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>3 hours, 80 marks, five sections from multiple choice (answered on an OMR sheet) to two four-mark case studies</td><td>OMR practice under time; long answers set out as the step-wise files show</td></tr>
      <tr><td>Science and Technology</td><td>3 hours, 60 marks: one-mark objective items, then two-, three- and five-mark answers; a separate 20-mark practical</td><td>Labelled diagrams, balanced equations and the 14 listed experiments</td></tr>
      <tr><td>English</td><td>3 hours, 80 marks: multiple choice 16 (on the OMR sheet), reading 17, writing 17, literature 30</td><td>Letters, notices and short compositions to length; extract answers from the two readers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Subject detail is on our Shimla pages for <a href="{{ url('/maths-home-tutor-shimla') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-shimla') }}">science</a> and
    <a href="{{ url('/english-home-tutor-shimla') }}">English</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmhb-plus">Plus Two: subjects, streams and practical marks</h2>
  <p>
    The board's Plus Two syllabus lists subjects that families usually group into three streams. On the science side
    sit physics, chemistry, biology and mathematics; commerce students take accountancy, business studies and
    economics; humanities subjects include history, geography, political science, psychology, sociology and public
    administration. English and Hindi, computer science, physical education and others complete the list. Which
    combinations a school offers is decided by the school, so confirm them there.
  </p>
  <ul>
    <li><strong>Physics and chemistry:</strong> one three-hour theory paper of 60 marks each, plus a 20-mark practical. In physics, the practical splits into an experiment (5), two activities (3 each), the record (3), the demonstration-experiment record with viva (3) and a viva on the year's work (3). In chemistry: volumetric analysis 5, salt analysis 4, a content-based experiment 3, record and viva 3, investigatory project 5.</li>
    <li><strong>Mathematics:</strong> six units, from relations and functions to probability, taught from the board's Part-I and Part-II books; the 2026-27 model paper is three hours and 80 marks over five sections.</li>
    <li><strong>English:</strong> Flamingo and the supplementary reader Vistas, in the board's edition.</li>
  </ul>
  <p>
    Our <a href="{{ url('/physics-home-tutor-shimla') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-shimla') }}">chemistry</a> pages for Shimla go deeper. For choosing a stream,
    read <a href="{{ url('/blog/how-to-choose-boardstream') }}">how to choose a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmhb-files">Free material on the board's website</h2>
  <dl>
    <dt><strong>Syllabus</strong></dt>
    <dd>Subject files for Matric, Plus One and Plus Two, headed for the 2025-26 examination session at the time of writing, with chapter lists, practical lists and prescribed books.</dd>
    <dt><strong>Model question papers</strong></dt>
    <dd>Papers for Classes 9 to 12, with 2026-27 versions for many Matric and Plus Two subjects; the closest guide to the paper's layout.</dd>
    <dt><strong>Step-wise marking</strong></dt>
    <dd>Worked solutions with marks against each step, for Matric and Plus Two subjects. They show how much working earns full credit.</dd>
    <dt><strong>OMR specimens and a competency-based question bank</strong></dt>
    <dd>Specimen OMR sheets for Matric and Plus Two, and a bank of competency-based questions linked from the home page.</dd>
  </dl>
  <p>
    A tutor who builds lessons around these files, and checks the site for revisions during the year, is doing the
    job properly. One who relies on an old guide from another board is not.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmhb-lang">Hindi, English and the language of practice</h2>
  <p>
    The board's 2026-27 model papers in maths and science are printed in English and Hindi, and it publishes paired
    books such as Ganit and Mathematics, or Vigyan and Science. Students therefore answer in the language they are
    taught in, and the tutor should match it: explaining in Hindi where that helps, while making sure technical terms
    are learnt in the form the examiner expects. A student moving from Hindi to English medium, or the reverse, needs
    a deliberate bridge over a term or so rather than a sudden switch.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmhb-cbse">How the HP Board compares with CBSE in practice</h2>
  <ul>
    <li><strong>Content overlaps a good deal.</strong> The Class 10 English readers carry the same titles, and the ten Plus Two chemistry chapters match CBSE's list.</li>
    <li><strong>Marks are split differently.</strong> Plus Two physics and chemistry carry 60 theory and 20 practical marks on the HP Board, against 70 and 30 on CBSE.</li>
    <li><strong>The paper looks different.</strong> HP Board objective sections in Class 10 maths and English go on an OMR sheet.</li>
    <li><strong>Rules are separate.</strong> CBSE's two Class 10 exams and Class 9 Advanced papers are CBSE arrangements; follow the HP Board's own notices.</li>
  </ul>
  <p>
    Families comparing the two can read the <a href="{{ url('/cbse-home-tutor-shimla') }}">CBSE home tutor in
    Shimla</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmhb-plan">From Class 9 to Plus Two: where tuition time should go</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A four-year view for an HP Board student, with the main tuition focus each year</caption>
    <thead>
      <tr><th scope="col">Year</th><th scope="col">Main focus</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9</td><td>Gaps in maths and science closed; the board's Class 9 model papers used for end-of-term practice</td></tr>
      <tr><td>Class 10 (Matric)</td><td>The board's books chapter by chapter, OMR practice, step-wise layout for long answers, and the science practical list</td></tr>
      <tr><td>Plus One (Class 11)</td><td>The stream's new subjects made secure, especially physics, chemistry and maths, or accountancy for commerce</td></tr>
      <tr><td>Plus Two (Class 12)</td><td>Model papers under time, practical records and viva, and a plan that fits any entrance exam beside the board</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmhb-areas">How HP Board tutors reach six Shimla localities</h2>
  <p>
    On Shimla's slopes, the tutor's last stretch is often by steps or on foot, and rain or snow can stretch any trip.
    These six localities show the range; every area is listed on our <a href="{{ url('/city/shimla') }}">Shimla
    page</a>.
  </p>
  <ul>
    <li><strong>{!! $shA('jakhu', 'Jakhu') !!}</strong> (Ridge, Lakkar Bazar and Jakhu): steep homes below the summit, reached by hill roads and footpaths. Tutors from Lakkar Bazar, Bharari or Sanjauli know the lanes; weekdays run more smoothly than weekends.</li>
    <li><strong>{!! $shA('sanjauli', 'Sanjauli') !!}</strong> (Sanjauli and Dhalli): the main suburb, from flats and builder floors to houses and plots. A wide pool of nearby tutors; keep clear of the Chowk at office and school hours.</li>
    <li><strong>{!! $shA('panthaghati', 'Panthaghati') !!}</strong> (Chhota Shimla, Kasumpti and New Shimla): a large suburb on the highway with gated apartment projects; register the tutor at the gate before the first class.</li>
    <li><strong>{!! $shA('khalini', 'Khalini') !!}</strong> (same zone): a hillside ward next to New Shimla; say whether the last stretch is on foot, and use a two-wheeler or taxi rather than a large car.</li>
    <li><strong>{!! $shA('summer-hill', 'Summer Hill') !!}</strong> (Boileauganj, Summer Hill and Totu): homes down lanes and steps on a forested hill with its own railway station; later evening slots avoid student traffic.</li>
    <li><strong>{!! $shA('tutikandi', 'Tutikandi') !!}</strong> (same zone): home to the inter-state bus terminal, so tutors can arrive by bus from many parts of the city; give a precise landmark near the busy terminal.</li>
  </ul>
  <p>
    Zone pages with more timing advice:
    <a href="{{ url('/city/shimla/zone/ridge-lakkar-bazar-jakhu') }}">Ridge, Lakkar Bazar and Jakhu</a>,
    <a href="{{ url('/city/shimla/zone/sanjauli-dhalli') }}">Sanjauli and Dhalli</a>,
    <a href="{{ url('/city/shimla/zone/chhota-shimla-kasumpti-new-shimla') }}">Chhota Shimla, Kasumpti and New Shimla</a>
    and <a href="{{ url('/city/shimla/zone/boileauganj-summer-hill-totu') }}">Boileauganj, Summer Hill and Totu</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmhb-mode">Home tuition, online, or both?</h2>
  <p>
    For Classes 9 and 10, a tutor at home usually works better, especially for maths and science where the tutor
    needs to watch the working. Online lessons are a strong backup on snow days and heavy-rain evenings, and a real
    option for Plus Two subjects with few local specialists. Many families keep one visit a week and add an online
    hour; the <a href="{{ url('/online-tutor-shimla') }}">online tutor for Shimla</a> page explains the set-up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmhb-demo">Questions to ask at an HP Board demo</h2>
  <ol>
    <li>Do you teach from the board's own book for this class and subject, and in which language?</li>
    <li>Have you used the 2026-27 model paper and the step-wise marking files? Show me one.</li>
    <li>How will you prepare my child for the OMR section?</li>
    <li>What will you check in the practical record, and when?</li>
    <li>Which weekly slot can you keep through winter and the monsoon?</li>
  </ol>
  <p>
    If the answers do not satisfy you, another tutor from your shortlist gives a demo; changing tutor later is free.
    See the <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> for more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmhb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets a fee,
    shown on your shortlist before the demo; the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-shimla') }}">Shimla home tuition fees</a> article explain more.
  </p>
  <p>
    Send the class, the subjects, the language your child writes in, your locality with a landmark and the times that
    suit. We reply with two or three matched tutors, and you book a <a href="{{ url('/demo-class') }}">free demo
    class</a>. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; you can also
    <a href="{{ url('/tutors') }}">browse tutor profiles</a> or read the
    <a href="{{ url('/blog/shimla-home-tuition-guide') }}">Shimla home tuition guide</a>. Teachers who know the HP Board
    syllabus can find students on <a href="{{ url('/tuition-jobs/shimla') }}">Shimla tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
