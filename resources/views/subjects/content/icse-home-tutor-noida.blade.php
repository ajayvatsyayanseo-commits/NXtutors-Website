{{--
  Board hub for "ICSE home tutor Noida" (CISCE: ICSE Class 10 and ISC
  Class 12). Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths),
  Aaditya Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths). No anecdotes, years or results are claimed for any of
  them. No schools, coaching institutes, societies, developers or people are
  named.

  Board facts restate only what icse-home-tutor-gurgaon states; its official
  sources (cisce.org, read 1 Oct 2026):
  - ICSE Regulations, Year 2027: Group I compulsory (English, a second
    language, History, Civics & Geography), Group II any two or three
    (Mathematics, Science, Economics, Commercial Studies, a modern foreign or
    classical language, Environmental Science), 80% external / 20% internal;
    Group III one subject (Computer Applications, Economic Applications,
    Commercial Applications, Art, Physical Education, Robotics and AI and
    others), 50% / 50%.
  - ICSE Mathematics (51), Year 2027 syllabus: one 3-hour paper of 80 marks
    plus 20 marks internal assessment; at least two assignments, assessed
    independently by the subject teacher and an external examiner.
  - ICSE Science (52) Physics, Chemistry, Biology, Year 2028 syllabuses: each
    one 2-hour paper of 80 marks plus 20 marks internal assessment of
    practical work.
  - ICSE Analysis of Pupil Performance (CISCE publishes these subject by
    subject).
  - ISC Regulations: English compulsory with three, four or five electives, no
    more than six subjects; subjects with practical papers need the practical
    exam; no Class XII subject not studied in Class XI; no change of subject
    after 15 September of the Class XI year; promotion to XII needs 35% in four
    subjects including English and 75% attendance; grades 1 to 9; pass
    certificate needs four or more subjects including English, plus SUPW and
    Community Service; Physics cannot be combined with Engineering Science.
  - ISC Mathematics (860), Year 2027: Paper I theory, 3 hours, 80 marks, and
    Paper II project work, 20 marks, in Class XI and Class XII.
  No exam dates. Board mix only as the Noida hub (resources/views/city/content/
  noida.blade.php) words it: CBSE most common, ICSE widely taught, some IB and
  Cambridge IGCSE, state board UPMSP (High School and Intermediate exams; paper
  pattern and medium can differ). UP Board described in general terms only. No
  share of any board is claimed and no board is tied to any part of the city.
  Local detail only from database/seo-content/areas/noida-research.json,
  noida-zone-guides.json, zones/noida.json and the Noida hub. Fee wording is
  the approved NXTutors sentence. FAQs render from
  faqs/icse-home-tutor-noida.php. Area links render only for active Noida areas.
--}}
@php
  $inoSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ino = function (string $slug, string $label) use ($inoSlugs) {
      return in_array($slug, $inoSlugs, true)
          ? '<a href="' . e(url('/city/noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ino-guide" aria-labelledby="inoGuideTitle">
  <h2 id="inoGuideTitle">ICSE and ISC home tutors in Noida: a board that marks the writing as much as the answer</h2>

  <p class="nx-guide__lede">
    An ICSE student in Noida is likely to have friends on CBSE down the road, and the comparison causes confusion. The
    CISCE route means a longer list of Class 10 papers, longer written answers, and in the ISC years a set of
    subject rules that punish late decisions. A tutor who is strong on CBSE content can still miss what CISCE examiners
    reward. Below: the shape of the ICSE and ISC years, how they differ from the UP Board, where families
    usually want support, what to test in a demo, and how tutors get to each part of Noida. Authors: Abhinandan Tiwary, who covers
    Class 10 CBSE and ICSE maths; Aaditya Kashyap, CBSE and ICSE science; and, for the ISC parts, Ajay Vatsyayan, who
    teaches IB, IGCSE and ISC maths.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ino-mix">ICSE in Noida</a> ·
    <a href="#ino-up">Compared with the UP Board</a> ·
    <a href="#ino-ladder">Year by year</a> ·
    <a href="#ino-groups">Class 10 papers</a> ·
    <a href="#ino-isc">ISC rules</a> ·
    <a href="#ino-subjects">Subjects</a> ·
    <a href="#ino-session">A good session</a> ·
    <a href="#ino-zones">Reaching each zone</a> ·
    <a href="#ino-mode">Home or online</a> ·
    <a href="#ino-demo">Demo checklist</a> ·
    <a href="#ino-start">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ino-mix">ICSE among Noida's boards</h2>
  <p>
    CBSE is the most common board in Noida's schools, but ICSE is widely taught too, alongside a smaller group of IB and
    Cambridge IGCSE schools and schools affiliated to the Uttar Pradesh board, UPMSP. Both ICSE (Class 10) and ISC
    (Class 12) are set by the same council, CISCE. Because many tutors in the city teach mainly CBSE, we match on the
    board first: a tutor who has worked with CISCE specimen papers and examiner reports, not just the same chapter
    names. Our <a href="{{ url('/icse-home-tutor-gurgaon') }}">Gurgaon ICSE and ISC guide</a> goes deeper into the
    regulations; the <a href="{{ url('/cbse-home-tutor-noida') }}">CBSE tutors in Noida</a> page covers the other main
    board.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ino-up">How ICSE differs from the UP Board</h2>
  <p>
    UP Board students sit the state's High School and Intermediate examinations, with papers built to the board's own
    pattern and sometimes a different medium of teaching. ICSE differs less in topics than in demand: more
    subjects examined separately, more written English across every paper, and marks given for presentation and full
    working. A student moving from a state-board school into ICSE usually copes with the content and struggles with the
    volume of writing, so the first weeks should go on answer-writing practice in every subject, not only maths. Tell
    us the board your child is coming from when you ask for a tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ino-ladder">The CISCE route year by year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CISCE stages, Classes 6–12, and the writing each one asks for</caption>
    <thead>
      <tr><th scope="col">Classes</th><th scope="col">Exams set by</th><th scope="col">Writing demand</th><th scope="col">Where a tutor earns their fee</th></tr>
    </thead>
    <tbody>
      <tr><td>6–8</td><td>The school</td><td>Paragraph answers, labelled science diagrams, neat maths steps</td><td>Number work, early algebra, and the habit of writing at length</td></tr>
      <tr><td>9</td><td>The school; the two-year ICSE syllabus starts</td><td>Full answers in every subject from the first term</td><td>Keeping a large set of subjects moving together</td></tr>
      <tr><td>10</td><td>CISCE papers plus internal marks</td><td>Timed, paper-by-paper answers with method shown</td><td>Specimen papers, examiner reports, timed practice</td></tr>
      <tr><td>11</td><td>The school; promotion rules apply</td><td>Deeper elective answers and practical records</td><td>Bridging the ICSE-to-ISC jump in the electives</td></tr>
      <tr><td>12</td><td>CISCE theory papers, practicals and projects</td><td>Long derivations, essays, project reports</td><td>Depth in two or three electives and steady project deadlines</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ino-groups">Class 10: how many papers, and how they are marked</h2>
  <p>
    CISCE's regulations sort ICSE subjects into three groups. Everyone sits the compulsory Group I: English, a second
    language, and History, Civics and Geography. Group II adds two or three choices; Mathematics and Science are the
    usual ones, with Economics, Commercial Studies, Environmental Science or a modern foreign or classical language as
    alternatives. Group III adds exactly one applied subject, Computer Applications being a frequent pick, with Art,
    Physical Education, Robotics and AI, Economic Applications and Commercial Applications among the others.
  </p>
  <p>
    Groups I and II are weighted 80% to the final paper and 20% to internal work, so they are decided mostly in the exam
    hall. Group III is split evenly, half paper and half internal, which rewards a student who keeps up with project work
    through the year. Mathematics is one three-hour paper of 80 marks plus 20 internal marks from at least two
    assignments, each marked by the subject teacher and independently by an external examiner. Science is really three
    papers: Physics, Chemistry and Biology are each examined in two hours for 80 marks, with 20 marks for practical work.
    CISCE also publishes an Analysis of Pupil Performance for subjects after the exams, which shows where candidates lost
    marks. Our <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> and
    <a href="{{ url('/blog/icse-class-10-english-papers') }}">ICSE English papers guide</a> work through two of the
    heaviest papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ino-isc">ISC in Classes 11 and 12: rules worth knowing early</h2>
  <p>
    ISC keeps English compulsory and lets a student pick between three and five electives, six subjects being the cap.
    Several regulations shape a tutoring plan:
  </p>
  <ul>
    <li><strong>Choose carefully at the start.</strong> Electives are fixed by mid-September of Class 11, and a Class 12 subject must be one studied in Class 11.</li>
    <li><strong>Class 11 is not a rest year.</strong> Moving up requires 35% or more in four subjects, English among them, plus 75% attendance.</li>
    <li><strong>Practicals cannot be skipped</strong> in subjects that carry them.</li>
    <li><strong>Some pairings are barred</strong>, such as Physics with Engineering Science.</li>
    <li><strong>Grades are on a 1–9 scale</strong>; to earn the pass certificate a student must pass at least four subjects, English included, as well as Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    ISC Mathematics has an 80-mark, three-hour theory paper and a 20-mark project in both years. See our
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page and the
    <a href="{{ url('/blog/isc-class-12-english-literaturelanguage') }}">ISC Class 12 English guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ino-subjects">Subjects Noida's ICSE families usually ask about</h2>
  <p>
    For ICSE students the first requests are usually maths and the three sciences, then English language and literature, where long answers
    and set texts need a reader who corrects. History, Civics and Geography is often a revision-planning problem rather
    than a teaching one. ISC families tend to ask only for electives: maths, physics or chemistry on the
    science side, accounts or economics in commerce.
  </p>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-noida') }}">Maths home tutors in Noida</a>, ICSE and ISC.</li>
    <li><a href="{{ url('/science-home-tutor-noida') }}">Science home tutors in Noida</a> for ICSE Physics, Chemistry and Biology.</li>
    <li><a href="{{ url('/physics-home-tutor-noida') }}">Physics</a>, <a href="{{ url('/chemistry-home-tutor-noida') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-noida') }}">biology</a> tutors for a single paper or ISC elective.</li>
    <li><a href="{{ url('/english-home-tutor-noida') }}">English home tutors in Noida</a> for language and literature.</li>
    <li>ISC students with entrance plans: <a href="{{ url('/jee-home-tutor-noida') }}">JEE</a> or <a href="{{ url('/neet-home-tutor-noida') }}">NEET</a> tutors in Noida.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ino-session">What a useful ICSE session looks like</h2>
  <p>
    The CISCE style means the red pen matters as much as the explanation. A good hour opens with the student writing
    out one or two questions from last week's topic while the tutor watches. The tutor then marks them as CISCE marks: a missing step in maths, a unit dropped in physics, an unlabelled part of a biology diagram, a vague
    sentence in a history answer. New material follows, first from the textbook, then through specimen-paper
    questions. Before leaving, the student writes one answer against the clock. In ISC, science sessions also need time
    for the practical record: observations, the right graph and a conclusion that earns credit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ino-zones">How ICSE tutors reach each part of Noida</h2>
  <p>
    Each zone has its own pattern of travel and entry, and the right tutor is the one who can keep the same slot every
    week:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/noida/zone/old-noida') }}">Old Noida</a>.</strong> {!! $ino('sector-19', 'Sector 19') !!} is mostly houses and low-rise buildings near Noida Sector 16 station, so a tutor rings the doorbell; agree an online fallback for heavy-rain evenings.</li>
    <li><strong><a href="{{ url('/city/noida/zone/central-noida') }}">Central Noida</a>.</strong> {!! $ino('sector-41', 'Sector 41') !!} is plotted houses beside Aghapur village, with the Aqua Line station in neighbouring Sector 50; Dadri Road slows in the evening, so a tutor from Sectors 40, 49 or 50 travels light.</li>
    <li><strong><a href="{{ url('/city/noida/zone/sector-62-belt') }}">Sector 62 belt</a>.</strong> {!! $ino('sector-61', 'Sector 61') !!} has a Blue Line station inside the sector, but parking is tight, so a tutor who comes by metro is often the punctual one.</li>
    <li><strong><a href="{{ url('/city/noida/zone/sectors-70-82') }}">Sectors 70–82</a>.</strong> {!! $ino('sector-78', 'Sector 78') !!} is mainly towers near Noida Sector 101 station, where the junction jams at peak hour; register the tutor at the gate and start before the rush.</li>
    <li><strong><a href="{{ url('/city/noida/zone/noida-expressway') }}">Noida Expressway</a>.</strong> {!! $ino('sector-100', 'Sector 100') !!} is gated high-rise societies close to Sector 101 station; a pre-approved visitor pass and a fixed day keep entry quick.</li>
    <li><strong><a href="{{ url('/city/noida/zone/near-noida-extension') }}">Near Noida Extension</a>.</strong> {!! $ino('sector-119', 'Sector 119') !!} has no metro inside the sector, so tutors come by two-wheeler or cab, and one already teaching in Sectors 118, 120 or 121 is easiest to schedule.</li>
  </ul>
  <p>
    For timing and entry tips, read our <a href="{{ url('/blog/old-and-central-noida-tuition-guide') }}">Old and
    Central Noida</a>, <a href="{{ url('/blog/noida-sector-62-and-70s-tuition-guide') }}">Sector 62 and 70s</a> and
    <a href="{{ url('/blog/noida-expressway-and-extension-tuition-guide') }}">Expressway and Extension</a> guides.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ino-mode">At home, online, or a mix</h2>
  <p>
    Because ICSE is marked on presentation, home tuition has a real advantage in the middle years: the tutor sees the
    notebook, the diagrams and the handwriting as they happen. For ISC electives the case shifts. The tutor who knows a
    particular ISC subject well may not live near you, and a weekday online session with that tutor often beats a home
    session with a less suitable one. Many families combine the two: a weekend home class for written practice and an
    online class midweek. Online only works for maths and science if the tutor can see the working live. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> comparison goes through the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ino-demo">Demo checklist for an ICSE or ISC tutor</h2>
  <ol>
    <li><strong>Specimen papers and examiner reports.</strong> Ask which ones they use. A tutor who reads the Analysis of Pupil Performance knows where marks go.</li>
    <li><strong>A question marked live.</strong> Have your child attempt one, then watch the tutor mark the working, units and wording.</li>
    <li><strong>All three sciences.</strong> For ICSE science, ask for a short physics explanation and a biology diagram in the same demo.</li>
    <li><strong>Group III.</strong> Ask how they would keep the applied subject's internal work on track without doing it.</li>
    <li><strong>ISC choices.</strong> For a Class 10 student, ask what they would advise on electives, given the September cut-off.</li>
    <li><strong>Project and practical.</strong> For ISC, ask how they guide the project and practical file while leaving the work to the student.</li>
  </ol>
  <p>
    We send two or three matched tutors with their fees shown up front, and a later switch costs nothing. Every tutor who
    joins goes through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is published.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ino-start">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. An ICSE or ISC quote
    moves with the class, how many papers need help, the time left before exams and the tutor's journey. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-noida') }}">home
    tuition fees in Noida</a>.
  </p>
  <p>
    To begin, share the board (ICSE or ISC), class, subjects, sector, society or block and the hours you can offer. A
    shortlist follows, and the first class is a <a href="{{ url('/demo-class') }}">free demo</a>. You can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, every sector on our <a href="{{ url('/city/noida') }}">Noida tutors
    page</a>, or, for tutors, <a href="{{ url('/tuition-jobs/noida') }}">tuition jobs in Noida</a>.
  </p>
  </section>

  </div>
</article>
