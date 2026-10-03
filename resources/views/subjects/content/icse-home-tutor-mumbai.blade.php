{{--
  Board page for "ICSE home tutor Mumbai" (CISCE: ICSE Class 10, ISC Class 12)
  across Mumbai, Thane and Navi Mumbai. Authors: Abhinandan Tiwary (role:
  Class 10 CBSE and ICSE maths), Aaditya Kashyap (role: CBSE and ICSE science)
  and Ajay Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or
  results are claimed for any of them. No schools or societies are named.

  Board facts are reworded from the Gurgaon board hub (icse-home-tutor-gurgaon),
  which cites cisce.org (read 1 Oct 2026): ICSE Regulations (Group I compulsory,
  Group II two or three subjects, 80/20; Group III one subject, 50/50), ICSE
  Mathematics (one 3-hour 80-mark paper + 20 internal from at least two
  assignments marked by the teacher and an external examiner), ICSE Physics,
  Chemistry, Biology (separate 2-hour 80-mark papers + 20 practical internal),
  Analysis of Pupil Performance reports, ISC Regulations (English + three to
  five electives, max six subjects; no change after 15 September of Class XI;
  no Class XII subject not studied in XI; promotion 35% in four subjects incl.
  English and 75% attendance; grades 1-9; practicals compulsory) and ISC
  Mathematics (80 theory + 20 project). No exam dates.
  Local detail only from the Mumbai city hub view (ICSE/ISC long precise
  answers, wide syllabus, prescribed literature; SSC/HSC and junior college;
  monsoon online fallback), mumbai-research.json, mumbai-zone-guides.json and
  zones/mumbai.json. Bhandup & Mulund has no zone page (plain text). Area links
  render only for active Mumbai areas. Fee wording is the approved sentence.
  FAQs render from faqs/icse-home-tutor-mumbai.php.
--}}
@php
  $icmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $icmA = function (string $slug, string $label) use ($icmSlugs) {
      return in_array($slug, $icmSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="icmGuideTitle">
  <h2 id="icmGuideTitle">ICSE and ISC home tutors in Mumbai: breadth, written answers and a tutor on your line</h2>

  <p class="nx-guide__lede">
    The usual ICSE complaint in Mumbai homes is not that one subject is hard. It is that there are so many papers,
    each wanting long and carefully worded answers, that something always falls behind. CISCE, the council behind
    ICSE in Class 10 and ISC in Class 12, rewards students who write fully and revise widely, so the right tutor is
    partly a teacher and partly a pacer. This page explains how the ICSE and ISC years are built, how they compare
    with the State Board route many neighbours follow, which subjects need help most, and how tutors reach each part
    of Mumbai, Thane and Navi Mumbai. Abhinandan Tiwary (Class 10 CBSE and ICSE maths) and Aaditya Kashyap (CBSE and
    ICSE science) wrote it, with Ajay Vatsyayan (IB, IGCSE and ISC maths) on the ISC sections.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icm-groups">ICSE subjects</a> ·
    <a href="#icm-papers">Maths and science papers</a> ·
    <a href="#icm-isc">ISC rules</a> ·
    <a href="#icm-years">Year by year</a> ·
    <a href="#icm-after">After Class 10</a> ·
    <a href="#icm-subjects">Subjects</a> ·
    <a href="#icm-zones">Travel by zone</a> ·
    <a href="#icm-demo">The demo</a> ·
    <a href="#icm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icm-groups">How ICSE subjects are grouped, and why it matters</h2>
  <p>
    A Class 10 ICSE student takes subjects from three groups set out in the CISCE regulations. The group decides how
    much of the mark rests on the final exam and how much on work done during the year.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE subject groups and their exam-to-internal split</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">What it contains</th><th scope="col">Final paper : internal</th></tr>
    </thead>
    <tbody>
      <tr><td>I, compulsory</td><td>English, a second language, and History, Civics and Geography</td><td>80 : 20</td></tr>
      <tr><td>II, two or three chosen</td><td>Such as Mathematics, Science, Economics, Commercial Studies, a modern foreign or classical language, Environmental Science</td><td>80 : 20</td></tr>
      <tr><td>III, one chosen</td><td>An applied subject such as Computer Applications, Commercial Applications, Art or Physical Education</td><td>50 : 50</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Group III subject is the one where steady project work through the year pays off most. The other groups are
    decided mainly in the final papers, which is where a tutor's timed writing practice counts.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-papers">Maths and the three science papers</h2>
  <p>
    ICSE Mathematics is a single three-hour paper of 80 marks, with 20 more from internal assessment based on at least
    two assignments; the subject teacher and an external examiner each mark them. Commercial topics such as banking
    and shares sit alongside algebra, geometry and trigonometry, and the examiners give marks for method, so every
    step has to be on the page.
  </p>
  <p>
    Science is effectively three subjects. Physics, Chemistry and Biology are separate two-hour papers of 80 marks,
    each with 20 internal marks for practical work. Many students are comfortable in one and uneasy in another, so
    the tutor needs to cover all three confidently, or the family should plan a separate tutor for the weak one.
    After each exam session CISCE publishes an Analysis of Pupil Performance, subject by subject, describing the
    mistakes examiners saw; a tutor who works from these and the specimen papers is preparing your child for the way
    the papers are marked.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-isc">ISC in Classes 11 and 12: the rules to plan around</h2>
  <ul>
    <li>English is compulsory, with three, four or five electives, and no more than six subjects in total.</li>
    <li>A subject cannot be changed after 15 September of the Class 11 registration year, and nothing can be taken in Class 12 that was not studied in Class 11.</li>
    <li>Moving up to Class 12 needs at least 35% in four subjects including English, plus 75% attendance.</li>
    <li>Subjects with practical papers need the practical exam to be complete; results come as grades from 1 to 9.</li>
  </ul>
  <p>
    ISC Mathematics has an 80-mark, three-hour theory paper and 20 marks of project work in each of Class 11 and Class
    12. The <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page goes into the papers in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-years">The CISCE years, one at a time</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where an ICSE or ISC tutor should put the effort</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">What is at stake</th><th scope="col">Tutor's focus</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>School exams only</td><td>Writing at length, neat maths working, labelled science diagrams</td></tr>
      <tr><td>9</td><td>The two-year ICSE syllabus starts</td><td>Keeping every subject moving, not just maths</td></tr>
      <tr><td>10</td><td>ICSE papers plus internal marks</td><td>Specimen papers, examiner reports, timed answers</td></tr>
      <tr><td>11</td><td>Promotion rules and elective choice</td><td>Closing the jump from ICSE in the first term</td></tr>
      <tr><td>12</td><td>ISC theory, practicals and projects</td><td>Depth in electives, deadlines for project work</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-after">After Class 10: ISC, a junior college or CBSE</h2>
  <p>
    Mumbai students leave ICSE in different directions. Some stay with CISCE for the ISC, where the answer style is
    familiar and the electives go much deeper. Others move to a junior college for the State Board's HSC, which is
    common across the city; the textbooks become the state's own, and the board's past papers become the practice
    material. A few move to CBSE and switch to NCERT books. In each case the maths and science carry over, but the
    tutor should spend the first weeks on the new textbook's language and the new board's papers. If the plan is ISC,
    choose electives carefully, because the mid-September cut-off arrives quickly. Our guide to
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> helps with the decision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-subjects">Subjects families ask for, and our Mumbai pages</h2>
  <ul>
    <li><strong>ICSE maths and ISC maths:</strong> <a href="{{ url('/maths-home-tutor-mumbai') }}">maths home tutors in Mumbai</a>, and the <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a>.</li>
    <li><strong>ICSE physics, chemistry and biology:</strong> <a href="{{ url('/science-home-tutor-mumbai') }}">science home tutors</a>, or a single-paper specialist in <a href="{{ url('/physics-home-tutor-mumbai') }}">physics</a> or <a href="{{ url('/chemistry-home-tutor-mumbai') }}">chemistry</a>.</li>
    <li><strong>ISC biology:</strong> <a href="{{ url('/biology-home-tutor-mumbai') }}">biology home tutors in Mumbai</a>.</li>
    <li><strong>English language and the prescribed literature:</strong> <a href="{{ url('/english-home-tutor-mumbai') }}">English home tutors in Mumbai</a>.</li>
    <li><strong>History, Civics and Geography, Commercial Studies, Accounts, Economics:</strong> matched on request; say ICSE or ISC and which texts are set.</li>
  </ul>
  <p>
    ISC science students preparing for entrance exams can also look at <a href="{{ url('/jee-home-tutor-mumbai') }}">JEE</a>
    and <a href="{{ url('/neet-home-tutor-mumbai') }}">NEET</a> home tutors in Mumbai.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-zones">Which tutors can reach you, zone by zone</h2>
  <p>
    ICSE specialists are fewer than CBSE or State Board tutors, so it pays to think about the journey before the
    name. In the island city, <a href="{{ url('/city/mumbai/zone/worli-dadar-central-mumbai') }}">Worli, Dadar and
    Central Mumbai</a> is the easiest place to be: {!! $icmA('matunga', 'Matunga') !!} has a station on all three
    lines, and in its older buildings a tutor can usually walk straight up. <a href="{{ url('/city/mumbai/zone/south-mumbai') }}">South
    Mumbai</a> depends on the Western line and the underground Line 3, with lobby desks to clear first.
  </p>
  <p>
    On the western side, <a href="{{ url('/city/mumbai/zone/bandra-khar-santacruz') }}">Bandra, Khar and Santacruz</a>
    stations serve both the Western and Harbour lines, which helps a family in {!! $icmA('santacruz-west', 'Santacruz West') !!};
    <a href="{{ url('/city/mumbai/zone/vile-parle-juhu') }}">Vile Parle and Juhu</a> and
    <a href="{{ url('/city/mumbai/zone/andheri-jogeshwari') }}">Andheri and Jogeshwari</a> add metro routes, so an
    {!! $icmA('andheri-west', 'Andheri West') !!} tutor can arrive by Line 1 or 2A. Further north,
    <a href="{{ url('/city/mumbai/zone/goregaon-malad') }}">Goregaon and Malad</a> and
    <a href="{{ url('/city/mumbai/zone/kandivali-borivali-dahisar') }}">Kandivali, Borivali and Dahisar</a> are best
    served by tutors on your side of the tracks.
  </p>
  <p>
    On the Central side, <a href="{{ url('/city/mumbai/zone/chembur-ghatkopar-powai') }}">Chembur, Ghatkopar and
    Powai</a> and Bhandup and Mulund share the Central line, and {!! $icmA('mulund', 'Mulund') !!} sits one stop from
    Thane. In <a href="{{ url('/city/mumbai/zone/thane') }}">Thane</a>, a home near the station such as
    {!! $icmA('naupada', 'Naupada') !!} draws on far more tutors than one deep along Ghodbunder Road.
    <a href="{{ url('/city/mumbai/zone/navi-mumbai') }}">Navi Mumbai</a> has its own pool; in
    {!! $icmA('seawoods', 'Seawoods') !!} or any node, look first at tutors from your node or the next.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-week">A realistic ICSE week in a Mumbai home</h2>
  <p>
    School, a commute and often a second activity leave a Class 9 or 10 student with perhaps two clear evenings. A
    workable pattern is one longer session for maths, worked line by line, and one session that rotates through the
    sciences, with a written answer in English, history or geography checked every fortnight. Each session should
    open with the student's own attempt at a few questions from last time, which the tutor marks before teaching
    anything new, and close with one answer written under a time limit. Ten minutes at the end to agree what will
    be revised next week keeps the wide syllabus from slipping. In the board year, the rotation tightens: one paper a
    week done in full, then corrected together against the specimen paper's marking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-mode">Home, online, or both</h2>
  <p>
    Because ICSE marks depend on written presentation, at least part of the week should have the tutor reading your
    child's answers as they are written. A home session does that naturally; online works if the tutor sees the
    notebook live through a camera or a writing tablet. Where the right specialist lives on another line, many
    families keep one home lesson at the weekend and add a shorter online session midweek, and switch everything online
    on heavy-rain days. Read <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring</a>
    before deciding.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-demo">Testing an ICSE tutor in the free demo</h2>
  <ol>
    <li><strong>Mark an old answer.</strong> Give the tutor a school test and see whether they correct the working, the units and the wording, not just the final answer.</li>
    <li><strong>Examiner reports.</strong> Ask whether they use CISCE's Analysis of Pupil Performance and the specimen papers.</li>
    <li><strong>All three sciences.</strong> Ask for a short physics explanation and then a biology diagram.</li>
    <li><strong>A revision cycle.</strong> Ask how they would make sure every chapter is revisited before the board year.</li>
    <li><strong>For ISC,</strong> ask how they guide project work and practical files without writing them.</li>
  </ol>
  <p>
    You receive two or three matched tutors, see each fee before the demo, and switching later is free. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icm-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For ICSE and ISC, the
    number of papers, the closeness of the board year and the tutor's journey matter most. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">Mumbai
    fees post</a> give more detail.
  </p>
  <p>
    Tell us ICSE or ISC, the class, subjects, your station and slots, and the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. For a fuller explanation of how CISCE structures both
    examinations, read our <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and ISC guide for Gurgaon</a>. Browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, all areas on the <a href="{{ url('/city/mumbai') }}">Mumbai tutors
    page</a>, or, for tutors, <a href="{{ url('/tuition-jobs/mumbai') }}">tuition jobs in Mumbai</a>.
  </p>
  </section>

  </div>
</article>
