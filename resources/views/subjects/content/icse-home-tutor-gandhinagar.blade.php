{{--
  Board page for "ICSE home tutor Gandhinagar" (CISCE: ICSE Class 10, ISC
  Class 12). Subjects-b writer, capitals wave, 3 Oct 2026. Authors: Abhinandan
  Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya Kashyap (role: CBSE
  and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE and ISC maths). No
  anecdotes, years or results are claimed. No schools, colleges, coaching
  institutes or people are named.
  Board facts only as the Gurgaon board hub (icse-home-tutor-gurgaon) states
  them, which cites cisce.org (read 1 Oct 2026): ICSE Regulations 2027 (Group
  I compulsory, Group II two or three subjects, 80/20; Group III one subject,
  50/50); ICSE Mathematics one 3-hour 80-mark paper + 20 internal from at
  least two assignments marked by the teacher and an external examiner; ICSE
  Physics, Chemistry, Biology separate 2-hour 80-mark papers + 20 practical
  internal; Analysis of Pupil Performance reports; ISC Regulations (English +
  three to five electives, at most six; no change after 15 September of
  Class XI; XII subject must be studied in XI; promotion 35% in four subjects
  incl. English and 75% attendance; practicals compulsory; Physics not with
  Engineering Science; grades 1-9; pass certificate four subjects incl.
  English + SUPW and Community Service); ISC Mathematics 80 theory + 20
  project.
  GSEB comparison facts from the board (read 3 Oct 2026): 2025-26 Std 10
  designs (Science one paper, 3 h, 80 marks, 24 one-mark objective items
  first; as cited on gujarat-board-tutor-ahmedabad); Std 10 period circular
  27-07-2026 (three-language formula from 2026-27); HSC Science groups A, B,
  AB and GUJCET (press note 08-11-2025); HSC Science maths/physics Part A 50
  OMR questions (2025-26 design).
  No claim about the city's board mix. Local detail only from
  database/seo-content/areas/gandhinagar-research.json. Fee wording is the
  approved sentence. Area links render only for active Gandhinagar areas.
  FAQs render from faqs/icse-home-tutor-gandhinagar.php.
--}}
@php
  $gniSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gniA = function (string $slug, string $label) use ($gniSlugs) {
      return in_array($slug, $gniSlugs, true)
          ? '<a href="' . e(url('/city/gandhinagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="gniGuideTitle">
  <h2 id="gniGuideTitle">ICSE and ISC home tutors in Gandhinagar: separate science papers, steady project work and a decision after Class 10</h2>

  <p class="nx-guide__lede">
    The CISCE route asks a lot of reading and writing. An ICSE student sits three separate science papers where a state
    board student sits one, carries a Group III subject in which half the marks are earned during the year, and writes
    long English answers judged on precision. Then, after Class 10, comes a real choice: continue to ISC, or move to the Gujarat board's HSC with its group
    system and GUJCET. A home
    tutor helps most by keeping the broad syllabus moving in rounds, reading the student's written answers every week,
    and giving an honest view at the Class 10 crossroads. This page covers the CISCE structure, how it compares with
    the state papers, the ISC rules worth knowing in advance, how tutors reach six localities and what to look for at
    the demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gni-groups">ICSE groups</a> ·
    <a href="#gni-papers">Maths and sciences</a> ·
    <a href="#gni-state">Beside the state board</a> ·
    <a href="#gni-rounds">Revision in rounds</a> ·
    <a href="#gni-english">English</a> ·
    <a href="#gni-isc">ISC rules</a> ·
    <a href="#gni-after">After Class 10</a> ·
    <a href="#gni-arrive">Localities</a> ·
    <a href="#gni-mode">Home or online</a> ·
    <a href="#gni-demo">Demo</a> ·
    <a href="#gni-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gni-groups">The three ICSE subject groups</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE groups and how each is assessed, from the CISCE regulations</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">What it holds</th><th scope="col">Exam and school marks</th></tr>
    </thead>
    <tbody>
      <tr><td>I, compulsory</td><td>English, a second language, and History and Civics with Geography</td><td>80 in the exam, 20 from school</td></tr>
      <tr><td>II, two or three subjects</td><td>Choices such as Mathematics, Science, Economics, Commercial Studies, Environmental Science and further languages</td><td>80 in the exam, 20 from school</td></tr>
      <tr><td>III, one subject</td><td>Applied subjects such as Computer Applications, Economic Applications, Art or Physical Education</td><td>50 in the exam, 50 from school</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Group III subject is easy to underrate. With half its marks earned through the year, a student who leaves the
    projects to the last month gives away marks that a steady routine would have kept. A tutor can plan the work, set
    deadlines and review drafts; every page submitted must still be the student's own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gni-papers">The maths paper and the three science papers</h2>
  <p>
    ICSE <strong>Mathematics</strong> is one three-hour paper of 80 marks, with 20 more from at least two assignments in
    the year, each marked by the teacher and by an external examiner. The syllabus mixes commercial topics with
    algebra, geometry, trigonometry and statistics, and examiners expect full working.
  </p>
  <p>
    <strong>Physics, Chemistry and Biology</strong> are three separate two-hour papers of 80 marks each, and each adds
    20 marks of internally assessed practical work. That separation changes how tuition should be planned: a weak
    subject cannot hide behind a strong one, so the tutor's time should follow the weakest of the three, not the one
    the student enjoys. After every exam season CISCE publishes an Analysis of Pupil Performance for each subject, which
    lists where candidates commonly lost marks. A tutor who reads it with the specimen paper knows which mistakes to
    drill first.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gni-state">ICSE beside the Gujarat board's Standard 10</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 science and maths: CISCE and GSEB compared</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">ICSE (CISCE)</th><th scope="col">GSEB Standard 10 (2025-26 designs)</th></tr>
    </thead>
    <tbody>
      <tr><td>Science papers</td><td>Three: physics, chemistry and biology, two hours and 80 marks each</td><td>One Science paper of three hours and 80 marks</td></tr>
      <tr><td>Objective items</td><td>Follow the current specimen paper for each subject</td><td>Each core paper opens with 24 compulsory one-mark objective items, then sections with internal choice</td></tr>
      <tr><td>Maths</td><td>One paper of 80 plus 20 from assignments</td><td>Mathematics Basic or Standard, 80 marks each</td></tr>
      <tr><td>School-assessed share</td><td>20 marks in most subjects; 50 in Group III</td><td>Internal and practical marks entered by schools on the board's portal</td></tr>
      <tr><td>Languages</td><td>English and a second language compulsory</td><td>Three-language formula in Standard 10 from 2026-27</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The comparison matters mainly if your child may change board, or if a tutor has taught only one system. Ask which
    papers they have prepared students for; content knowledge travels, but paper technique has to be learned for each
    board. Our <a href="{{ url('/gujarat-board-tutor-gandhinagar') }}">Gujarat Board tutors in Gandhinagar</a> page
    sets out the state side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gni-rounds">Covering a broad syllabus in rounds</h2>
  <p>
    ICSE syllabuses are wide, and a single pass through a chapter rarely lasts until the exam. A round-based plan works
    better. In the first round, each chapter is taught and practised. In the second, every chapter is revisited
    briefly through mixed questions, with errors logged. In the third, from the last term, the work is almost entirely
    timed papers, with the error log deciding what is retaught. A tutor who keeps a written record of each round can
    show a parent, at any point, which chapters are secure and which are not.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A three-round plan across Classes 9 and 10</caption>
    <thead>
      <tr><th scope="col">Round</th><th scope="col">When</th><th scope="col">Work</th></tr>
    </thead>
    <tbody>
      <tr><td>One</td><td>Class 9 and the first term of Class 10</td><td>Teach, practise, keep project work on schedule</td></tr>
      <tr><td>Two</td><td>Second term of Class 10</td><td>Mixed revision sets; specimen-paper questions by topic</td></tr>
      <tr><td>Three</td><td>Final months</td><td>Full timed papers in each subject, reviewed against the Analysis of Pupil Performance</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gni-english">English and the second language</h2>
  <p>
    English is compulsory throughout ICSE and ISC, and it is rarely the subject families worry about, which is exactly
    why marks slip there. Set-text answers that retell the plot instead of answering the question, and compositions
    written without a plan, cost marks even for fluent students. One timed literature answer and one piece of
    writing each week, marked against the specimen paper, fixes most of this. If the second language is the weak
    subject, ask for a tutor who teaches it at ICSE level. Our
    <a href="{{ url('/english-home-tutor-gandhinagar') }}">English home tutors in Gandhinagar</a> page goes further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gni-isc">ISC rules to know before Class 11 starts</h2>
  <ul>
    <li><strong>Subjects:</strong> English plus three to five electives, six subjects at most. Choose with the entrance plan in mind.</li>
    <li><strong>No late changes:</strong> subjects cannot be changed after 15 September of the Class 11 registration year, and a Class 12 subject must have been studied in Class 11.</li>
    <li><strong>Promotion:</strong> 35% in four subjects, including English, and 75% attendance are needed to move to Class 12.</li>
    <li><strong>Practicals:</strong> compulsory where a subject has them; Physics and Engineering Science cannot be combined.</li>
    <li><strong>Certificate:</strong> grades run from 1 to 9; a pass needs four subjects with English, plus Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    ISC Mathematics carries an 80-mark theory paper and a 20-mark project in each year. Ajay Vatsyayan, one of this
    page's authors, teaches IB, IGCSE and ISC maths; our <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a>
    page has more. Abhinandan Tiwary teaches Class 10 CBSE and ICSE maths, and Aaditya Kashyap CBSE and ICSE
    science.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gni-after">After ICSE: ISC, or the Gujarat board's HSC?</h2>
  <p>
    Some students in Gandhinagar weigh a move to the state board for Standards 11 and 12. The decision is a real one,
    because the HSC is organised differently. Science students sit in Group A, B or AB, which also decides their
    GUJCET papers; the 2025-26 maths and physics designs opened with 50 one-mark questions on an OMR sheet; and board schools teach in several media, Gujarati and English among them. Points to weigh with a tutor before deciding:
  </p>
  <ol>
    <li><strong>Entrance plans.</strong> GUJCET is held by the state board for its HSC Science groups; read the information booklet on gseb.org to see how it applies to an ISC student.</li>
    <li><strong>Paper style.</strong> An ICSE student used to long written answers will need OMR speed practice for the HSC's objective section.</li>
    <li><strong>Subject range.</strong> Compare the ISC elective list with the HSC stream subjects on each board's site before deciding.</li>
    <li><strong>The first term.</strong> Whichever route is chosen, a tutor who works through the new board's model papers early prevents a poor start.</li>
  </ol>
  <p>
    For a CBSE comparison, see our <a href="{{ url('/cbse-home-tutor-gandhinagar') }}">CBSE tutors in Gandhinagar</a>
    page, and for the stream decision our <a href="{{ url('/blog/how-to-choose-boardstream') }}">board and stream
    guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gni-arrive">How ICSE tutors reach six Gandhinagar localities</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Routes, gates and good slots</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Route</th><th scope="col">Tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $gniA('gift-city', 'GIFT City') !!}</td><td>Violet Line branch to GIFT City station</td><td>Register the tutor with tower security; evenings after the office rush or weekends</td></tr>
      <tr><td>{!! $gniA('randesan', 'Randesan') !!}</td><td>Randesan station on the Yellow Line</td><td>At bungalows the tutor comes to the door; in societies, tell the guard ahead</td></tr>
      <tr><td>{!! $gniA('vavol', 'Vavol') !!}</td><td>Two-wheeler or car via K Road; no station</td><td>Give the tower, flat number and a gate phone number before the demo</td></tr>
      <tr><td>{!! $gniA('raysan', 'Raysan') !!}</td><td>Raysan station, close to the GIFT City branch</td><td>Slots after the evening peak towards Ahmedabad work smoothly</td></tr>
      <tr><td>{!! $gniA('adalaj', 'Adalaj') !!}</td><td>Tapovan Circle station, then an auto or pick-up</td><td>Late afternoon or weekend classes avoid highway traffic</td></tr>
      <tr><td>{!! $gniA('kudasan', 'Kudasan') !!}</td><td>Sector-1 station, then a short ride</td><td>Plotted houses allow doorstep arrival</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone pages: <a href="{{ url('/city/gandhinagar/zone/koba-raysan-gift-city') }}">Koba, Raysan and GIFT City</a>,
    <a href="{{ url('/city/gandhinagar/zone/kudasan-sargasan') }}">Kudasan and Sargasan</a>,
    <a href="{{ url('/city/gandhinagar/zone/sectors-1-8-infocity') }}">Sectors 1–8 and Infocity</a> and
    <a href="{{ url('/city/gandhinagar/zone/sectors-16-30-pethapur') }}">Sectors 16–30 and Pethapur</a>. Every
    locality is listed on the <a href="{{ url('/city/gandhinagar') }}">Gandhinagar home tutors</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gni-mode">Home or online for ICSE in Gandhinagar?</h2>
  <p>
    Maths and the sciences usually go better at home in Classes 9 and 10, where the tutor can read long working and
    diagrams as they are written. English writing practice, Group III project reviews and ISC electives for which no nearby tutor fits work well online. A mixed week, with one or two home sessions and a short online one,
    is often the arrangement that lasts through the school year. Our <a href="{{ url('/online-tutor-gandhinagar') }}">online tutors for
    Gandhinagar</a> page explains how to set it up, and subject pages for
    <a href="{{ url('/maths-home-tutor-gandhinagar') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-gandhinagar') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-gandhinagar') }}">chemistry</a> and
    <a href="{{ url('/biology-home-tutor-gandhinagar') }}">biology</a> go into each subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gni-demo">Checking a tutor against the CISCE style</h2>
  <ol>
    <li>Do they know the current specimen paper and the latest Analysis of Pupil Performance for your child's subjects?</li>
    <li>Did they read a written answer from your child and point to exactly where marks would be lost?</li>
    <li>Do they have a plan for the Group III subject and the internal assessment, without doing the work for the student?</li>
    <li>For Class 10, can they talk sensibly about ISC versus the state HSC?</li>
    <li>Can they reach you at the same hour every week?</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching is
    free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. See also the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gni-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-gandhinagar') }}">home tuition fees in Gandhinagar</a> explain more.
  </p>
  <p>
    Tell us the class, subjects, Group III choice or ISC electives, your locality and the slots that suit you. The first
    class is a <a href="{{ url('/demo-class') }}">free demo</a>, and you can browse <a href="{{ url('/tutors') }}">tutor
    profiles</a> first. Teachers can find requests on <a href="{{ url('/tuition-jobs/gandhinagar') }}">Gandhinagar
    tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
