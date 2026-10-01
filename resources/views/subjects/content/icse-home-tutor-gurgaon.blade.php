{{--
  Board hub for "ICSE home tutor Gurgaon" (CISCE: ICSE Class 10 and ISC
  Class 12). Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths),
  Aaditya Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths). No anecdotes, years or results are claimed for any of
  them. No schools are named.

  Official sources (cisce.org, read 1 Oct 2026):
  - ICSE Regulations, Year 2027 (cisce.org/wp-content/uploads/2025/02/
    1.-Regulations.pdf, read via cisce.org search extract; the PDF link now
    returns 404): Group I compulsory (English, a second language, History,
    Civics & Geography), Group II any two or three (Mathematics, Science,
    Economics, Commercial Studies, a modern foreign or classical language,
    Environmental Science), 80% external / 20% internal; Group III
    any one or two (Computer Applications, Economic Applications, Commercial Applications,
    Art, Physical Education, Robotics and AI and others), 50% / 50%.
  - ICSE Mathematics (51), Year 2027 syllabus: one 3-hour paper of 80 marks
    plus 20 marks internal assessment; at least two assignments, assessed
    independently by the subject teacher and an external examiner.
  - ICSE Science (52) Physics, Chemistry, Biology, Year 2028 syllabuses: each
    one 2-hour paper of 80 marks plus 20 marks internal assessment of
    practical work.
  - ICSE Analysis of Pupil Performance, Mathematics, October 2025 (CISCE
    publishes these reports subject by subject).
  - ISC Regulations: English compulsory with three, four or five electives, no
    more than six subjects; subjects with practical papers need the practical
    exam; no Class XII subject not studied in Class XI; no change of subject
    after 15 September of the Class XI year; promotion to XII needs 35% in four
    subjects including English and 75% attendance; grades 1 to 9; pass
    certificate needs four or more subjects including English, plus SUPW and
    Community Service; Physics cannot be combined with Engineering Science.
  - ISC Mathematics (860), Year 2027: Paper I theory, 3 hours, 80 marks, and
    Paper II project work, 20 marks, in Class XI and Class XII.
  Local detail only from config/zone_guides.php (Gurugram). Fee wording is the
  approved NXTutors sentence. FAQs render from faqs/icse-home-tutor-gurgaon.php.
  Area links render only when the Gurugram area page exists and is active.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ich-guide" aria-labelledby="ichGuideTitle">
  <h2 id="ichGuideTitle">ICSE and ISC home tutors in Gurgaon: the CISCE route from Class 6 to Class 12</h2>

  <p class="nx-guide__lede">
    ICSE has a reputation for being heavy, and the reputation is earned in two ways: the number of separate papers a
    Class 10 student sits, and the amount of written working and language the examiners expect. The same council,
    CISCE, runs the ISC for Classes 11 and 12, where subject choice and practical exams take over. This page sets out
    how the ICSE and ISC years are structured, which subjects families usually want help with, how to choose a tutor
    who suits the CISCE style, and how home or online tuition works across Gurugram. It is written by Abhinandan Tiwary
    (Class 10 CBSE and ICSE maths) and Aaditya Kashyap (CBSE and ICSE science), with Ajay Vatsyayan (IB, IGCSE and ISC
    maths) on the ISC sections.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ich-groups">ICSE subject groups</a> ·
    <a href="#ich-papers">Papers and internal marks</a> ·
    <a href="#ich-middle">Classes 6 to 8</a> ·
    <a href="#ich-isc">ISC in Classes 11 and 12</a> ·
    <a href="#ich-ladder">The years at a glance</a> ·
    <a href="#ich-session">A good session</a> ·
    <a href="#ich-subjects">Pick a subject</a> ·
    <a href="#ich-demo">Choosing a tutor</a> ·
    <a href="#ich-switch">ICSE to ISC, or to CBSE</a> ·
    <a href="#ich-mode">Home or online</a> ·
    <a href="#ich-start">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ich-groups">How ICSE subjects are grouped</h2>
  <p>
    CISCE's ICSE regulations put subjects into three groups. The groups matter for tutoring because they tell you how
    much of each subject's mark comes from the final paper.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE (Class 10) subject groups, as the CISCE regulations set them out</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Subjects</th><th scope="col">External and internal split</th></tr>
    </thead>
    <tbody>
      <tr><td>Group I (compulsory)</td><td>English; a second language; History, Civics and Geography</td><td>80% exam, 20% internal</td></tr>
      <tr><td>Group II (two or three)</td><td>Mathematics; Science; Economics; Commercial Studies; a modern foreign or classical language; Environmental Science</td><td>80% exam, 20% internal</td></tr>
      <tr><td>Group III (one subject)</td><td>Computer Applications, Economic Applications, Commercial Applications, Art, Physical Education, Robotics and AI and other applied subjects</td><td>50% exam, 50% internal</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In practice, a Group III subject such as Computer Applications rewards steady project work through the year, while
    Group I and II subjects are won or lost mainly in the final papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ich-papers">What the maths and science papers look like</h2>
  <p>
    <strong>Mathematics.</strong> One paper of three hours for 80 marks, plus 20 marks of internal assessment. The
    internal marks come from at least two assignments, each marked independently by the subject teacher and by an
    external examiner. The syllabus includes commercial mathematics, such as banking and shares, alongside algebra,
    geometry, trigonometry and statistics, and examiners expect every step to be shown.
  </p>
  <p>
    <strong>Science.</strong> ICSE Science is really three subjects. Physics, Chemistry and Biology are each examined
    in a separate two-hour paper of 80 marks, and each carries 20 marks of internal assessment of practical work. A
    student who is strong in physics numericals can still lose ground in biology diagrams or chemical equations, so
    a science tutor must be comfortable across all three, or the family needs a plan for the weakest one.
  </p>
  <p>
    CISCE also publishes an Analysis of Pupil Performance for each subject after the exams, describing common errors
    and what examiners wanted. A tutor who uses these reports alongside specimen papers is working the way the board
    marks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ich-middle">Classes 6 to 8: building for the ICSE years</h2>
  <p>
    Before Class 9 the exams are the school's own, but the habits CISCE rewards start here: long written answers in
    English and history, neat step-by-step maths, and labelled diagrams in science. Children who arrive in Class 9
    without these find the jump sharp, because CISCE lays out each subject's syllabus across Classes 9 and 10. A
    middle-school tutor is most useful for maths foundations (fractions, ratio, early algebra), science vocabulary,
    and reading and writing at length. Our <a href="{{ url('/maths-home-tutor-gurgaon') }}">maths home tutors in
    Gurgaon</a> and <a href="{{ url('/science-home-tutor-gurgaon') }}">science home tutors in Gurgaon</a> pages cover
    these years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ich-isc">ISC in Classes 11 and 12: subject rules that affect tutoring</h2>
  <p>
    ISC works differently from ICSE. English is compulsory, and students add three, four or five elective subjects,
    up to six subjects in all. Several rules in the ISC regulations shape how a family should plan:
  </p>
  <ul>
    <li><strong>No late switching.</strong> Subjects cannot be changed after 15 September of the year a student registers in Class 11, and a subject cannot be taken in Class 12 unless it was studied in Class 11.</li>
    <li><strong>Class 11 counts.</strong> Promotion to Class 12 needs at least 35% in four subjects including English, on the year's cumulative average, and 75% attendance. There is no promotion on trial.</li>
    <li><strong>Practicals are compulsory</strong> in subjects that have them; without the practical exam the subject is incomplete.</li>
    <li><strong>Some combinations are not allowed</strong>, for example Physics with Engineering Science.</li>
    <li><strong>Grades run from 1 to 9</strong>, and the pass certificate needs passes in four or more subjects including English, plus a pass in Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    ISC Mathematics has a three-hour theory paper of 80 marks and 20 marks of project work in both Class 11 and Class
    12. For a subject-level view, see our <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page and
    <a href="{{ url('/class-12-home-tutor-gurgaon') }}">Class 12 home tutors in Gurgaon</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ich-ladder">The CISCE years at a glance</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>From Class 6 to Class 12 on the CISCE route</caption>
    <thead>
      <tr><th scope="col">Classes</th><th scope="col">What counts</th><th scope="col">What a tutor should focus on</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>School exams and projects</td><td>Maths foundations, science vocabulary, writing at length</td></tr>
      <tr><td>9</td><td>School exams; the ICSE syllabus for Classes 9 and 10 begins</td><td>Keeping up across many subjects; working and diagrams from the start</td></tr>
      <tr><td>10</td><td>ICSE papers (80%) and internal marks (20%, or 50% in Group III)</td><td>Specimen papers, examiner reports, timed practice paper by paper</td></tr>
      <tr><td>11</td><td>School's Class 11 exams; promotion needs 35% in four subjects including English</td><td>Choosing electives well and closing the jump from ICSE early</td></tr>
      <tr><td>12</td><td>ISC theory papers, practicals and project work</td><td>Depth in the electives, practical and project deadlines</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ich-session">What an ICSE tuition session should look like</h2>
  <p>
    Because ICSE marks reward presentation, a good session spends real time on writing, not only on explaining. A
    typical hour starts with the student's own attempt at two or three questions from the previous topic, which the
    tutor marks line by line: missing steps, units, labels and, in the language-heavy subjects, the clarity of each
    sentence. Then comes the new topic, taught from the textbook and extended with specimen-paper questions. The session
    ends with one question written out in full under time. In ISC, sessions for physics, chemistry and biology should
    also leave space for the practical: how to record observations, draw the right graph and write a conclusion the
    examiner can credit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ich-subjects">Pick a subject: ICSE and ISC pages for Gurgaon</h2>
  <p>
    In ICSE, maths and the three sciences are where most families start, because marks there depend on method and
    practice that build week by week. English and History, Civics and Geography need long, well-organised answers and
    reward a tutor who corrects writing. In ISC the picture narrows to the electives: maths, physics and chemistry for
    science students, and accounts, commerce and economics for commerce students.
  </p>
  <ul>
    <li><strong>ICSE maths, Classes 6 to 10, and ISC maths:</strong> <a href="{{ url('/icse-maths-tutor-gurgaon') }}">ICSE maths tutors in Gurgaon</a>, and the <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> for the papers in detail.</li>
    <li><strong>ICSE physics, chemistry and biology:</strong> <a href="{{ url('/science-home-tutor-gurgaon') }}">science home tutors</a>, or <a href="{{ url('/physics-home-tutor-gurgaon') }}">physics</a> and <a href="{{ url('/chemistry-home-tutor-gurgaon') }}">chemistry</a> tutors for a single paper.</li>
    <li><strong>The Class 10 board year:</strong> <a href="{{ url('/class-10-home-tutor-gurgaon') }}">Class 10 home tutors in Gurgaon</a> covers planning across all papers.</li>
    <li><strong>ISC physics and chemistry:</strong> <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics</a> and <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry</a>, taught to the ISC syllabus on request.</li>
    <li><strong>English language and literature, History, Civics and Geography, Commercial Studies, Accounts and Economics:</strong> we match these on request; say whether it is ICSE or ISC, and which texts the school has set.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ich-demo">Choosing a tutor who suits the CISCE style</h2>
  <p>
    A tutor who is good for CBSE is not automatically right for ICSE. Use the free demo to check the things this board
    rewards:
  </p>
  <ol>
    <li><strong>Full working.</strong> In maths, watch whether the tutor insists on every step and on the answer's units and form. Marks go for method.</li>
    <li><strong>Specimen papers and the Analysis of Pupil Performance.</strong> Ask which ones they use. A tutor who has read the examiners' comments knows where students lose marks.</li>
    <li><strong>All three sciences.</strong> For science, ask them to teach a short piece of physics and then a biology diagram, and see whether both are confident.</li>
    <li><strong>Language.</strong> ICSE answers across subjects are written at length. A good tutor corrects expression as well as content.</li>
    <li><strong>For ISC,</strong> ask how they will handle the project work and the practical file: guidance on method, not doing it for the student.</li>
  </ol>
  <p>
    You get two or three matched tutors, see each one's fee before the demo, and switching tutor later is free. Tutors
    who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ich-switch">After Class 10: ISC, or a move to CBSE</h2>
  <p>
    After ICSE, students continue to ISC, move to CBSE for Class 11, or move to the IB Diploma. Moving within CISCE keeps the style of answers familiar, though ISC subjects go much deeper. Moving to CBSE
    means NCERT textbooks, CBSE sample papers and a different balance of theory and practical marks; the maths and
    science content carries over well. Whichever route, choose Class 11 subjects carefully, since ISC does not allow a
    change after mid-September. Our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice
    guide</a> and <a href="{{ url('/cbse-home-tutor-gurgaon') }}">CBSE home tutors in Gurgaon</a> page help with the
    decision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ich-mode">ICSE home tutors across Gurugram, or online?</h2>
  <p>
    Families in Old Gurugram, Central Gurugram and along Sohna Road commonly look for ICSE tutors as well as CBSE ones.
    In the older sectors, such as {!! $ggA('sector-15', 'Sector 15') !!}, {!! $ggA('sector-9', 'Sector 9') !!} and
    {!! $ggA('sector-17', 'Sector 17') !!}, tutors often live nearby and two or three sessions a week are easy to
    arrange. Central sectors like {!! $ggA('sector-31', 'Sector 31') !!} and {!! $ggA('sector-43', 'Sector 43') !!}
    are within reach of tutors from most of the city. On Sohna Road, in {!! $ggA('south-city-2', 'South City 2') !!}
    or {!! $ggA('sector-70', 'Sector 70') !!}, a tutor on your own side of the road avoids the slow crossing at school
    and office hours.
  </p>
  <p>
    ICSE specialists are fewer than CBSE tutors, and ISC specialists fewer still. In New Gurugram and along the
    Southern Peripheral Road, families often choose the right tutor first and then use a mix: a weekend home session
    and weekday online classes. For online maths and science, the tutor must see written working live. See
    <a href="{{ url('/online-tutor-gurgaon') }}">online tutoring for Gurgaon</a>, and the
    <a href="{{ url('/blog/gurgaon-sohna-road-south-city-tuition-guide') }}">Sohna Road and South City guide</a> for
    local timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ich-start">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For ICSE and ISC, the
    class, the number of papers, how close the exam is and the tutor's travel set the fee. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our <a href="{{ url('/blog/home-tuition-fees-gurgaon') }}">Gurgaon
    fees post</a>.
  </p>
  <p>
    Tell us whether it is ICSE or ISC, the class, subjects, your sector or society and your slots. We shortlist two or
    three tutors and the first class is a <a href="{{ url('/demo-class') }}">free demo</a>. Browse
    <a href="{{ url('/tutors') }}">tutor profiles</a> or all areas on our page of <a href="{{ url('/city/gurugram') }}">home tutors in Gurgaon</a>.
  </p>
  </section>

  </div>
</article>
