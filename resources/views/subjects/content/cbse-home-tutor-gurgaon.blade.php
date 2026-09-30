{{--
  Board hub for "CBSE home tutor Gurgaon". Authors: Abhinandan Tiwary (role:
  Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE and ICSE
  science). No anecdotes, years or results are claimed for either. No schools
  are named.

  Official sources (cbseacademic.nic.in and cbse.gov.in, read 1 Oct 2026):
  - Curriculum 2026-27, Secondary (Classes IX-X), Curriculum_SecP1_2026-27.pdf:
    80 marks board / school annual exam + 20 internal assessment in major
    subjects; 33% to pass; about 50% competency-focused questions (case-based,
    source-based, integrated, data interpretation, situational, application);
    sample papers and marking schemes on cbseacademic.nic.in; Class IX maths
    and science at a common standard (80 marks) plus optional Advanced
    (25 marks, 1 hour, all HOTS) from 2026-27, board-examined in Class X from
    2027-28, not added to the aggregate; Basic/Standard discontinued from
    2026-27 except for the 2026-27 Class X batch; R3 (third language) mandatory
    in the transitional phase, assessed internally, no board exam; CT & AI for
    Classes III-VIII from 2026-27.
  - Notification 14.02.2026, Two Board Examinations in Class X from 2026: first
    exam mandatory; improvement in up to three subjects among science, maths,
    social science and languages in the second exam.
  - Curriculum 2026-27, Senior Secondary (Classes XI-XII),
    Curriculum_SecP2_2026-27.pdf: Physics 042, Chemistry 043, Biology 044 are
    70 theory + 30 practical; Mathematics 041 or Applied Mathematics 241 (any
    one) 80 + 20 IA; Economics 030, Business Studies 054, Accountancy 055
    80 + 20; Computer Science 083 / Informatics Practices 065 70 + 30; board
    papers to carry more real-life application questions; Class XII board
    covers the entire syllabus; paper design notified with sample papers.
  Local detail only from config/zone_guides.php (Gurugram). Fee wording is the
  approved NXTutors sentence. FAQs render from faqs/cbse-home-tutor-gurgaon.php.
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

<article class="nx-guide cbh-guide" aria-labelledby="cbhGuideTitle">
  <h2 id="cbhGuideTitle">CBSE home tutors in Gurgaon: Classes 6 to 12, by stage and subject</h2>

  <p class="nx-guide__lede">
    From Old Gurugram to Sohna Road, CBSE is the board families most often want a tutor for, and it is changing
    faster than many parents realise. From the
    2026-27 session, Class 9 maths and science have an optional Advanced level, a third language is compulsory in the
    secondary transition, and Class 10 has two board exams. This page walks through what CBSE expects at each stage
    from Class 6 to Class 12, which subjects usually need a tutor, what the board means by competency-based questions,
    how to judge a CBSE tutor in the free demo, and where home tuition is easy or hard to arrange across the city.
    Abhinandan Tiwary writes on Class 10 CBSE and ICSE maths, and Aaditya Kashyap on CBSE and ICSE science.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cbh-stages">CBSE by stage</a> ·
    <a href="#cbh-class9">Class 9 from 2026-27</a> ·
    <a href="#cbh-class10">Class 10 and the two exams</a> ·
    <a href="#cbh-senior">Classes 11 and 12</a> ·
    <a href="#cbh-competency">Competency-based questions</a> ·
    <a href="#cbh-session">A good session</a> ·
    <a href="#cbh-subjects">Pick a subject</a> ·
    <a href="#cbh-demo">Judging a tutor</a> ·
    <a href="#cbh-mode">Home or online</a> ·
    <a href="#cbh-start">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cbh-stages">What CBSE expects at each stage</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE from Class 6 to Class 12, and where tuition helps</caption>
    <thead>
      <tr><th scope="col">Classes</th><th scope="col">Who sets the exams</th><th scope="col">What changes for the student</th><th scope="col">Typical tutoring need</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>The school</td><td>Subjects separate out; from 2026-27 computational thinking and AI literacy are woven into existing subjects up to Class 8</td><td>Maths foundations, science concepts, reading and writing habits</td></tr>
      <tr><td>9</td><td>The school (annual exam of 80 marks plus 20 internal)</td><td>Secondary syllabus begins; optional Advanced maths and science from 2026-27</td><td>Maths and science, deciding on the Advanced papers</td></tr>
      <tr><td>10</td><td>CBSE board exam (80) plus school internal assessment (20)</td><td>First board exam, with an optional second exam to improve up to three subjects</td><td>Maths, science, and a plan across all subjects</td></tr>
      <tr><td>11 and 12</td><td>School in Class 11, CBSE board in Class 12</td><td>Stream subjects; theory and practical or internal marks per subject</td><td>Physics, chemistry, maths, biology, accountancy, economics</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In Classes 6 to 8 there are no board papers, so a tutor's value is in the foundations: fractions, negative numbers,
    early algebra and a clear idea of what an experiment shows. Gaps left here surface as "sudden" trouble in Class 9.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbh-class9">Class 9 from 2026-27: Standard and the optional Advanced papers</h2>
  <p>
    CBSE's 2026-27 secondary curriculum changes how maths and science are offered. Every student studies a common
    syllabus and sits a common paper of 80 marks, three hours long: a school annual exam in Class 9, and the board exam
    in Class 10 from 2027-28. In addition, a student may choose Mathematics Advanced, Science Advanced, both or
    neither. Each Advanced paper is 25 marks, one hour long and made up entirely of higher-order questions on
    additional content. CBSE says Advanced marks are not added to the aggregate; a student scoring 50% or more gets a
    note on the marksheet that the Advanced level was cleared.
  </p>
  <p>
    For a tutor, this creates two very different jobs. A student taking only the common paper needs the NCERT content
    secure and the competency-style questions practised. A student attempting Advanced needs extra topics and genuinely
    harder problem-solving, in the same week as normal school work. Choose Advanced for a subject your child enjoys and
    is already comfortable in, not as a way to "look better". The old Standard and Basic split in maths is being
    discontinued, though the Class 10 batch of 2026-27 continues under the earlier scheme.
  </p>
  <p>
    The same curriculum makes a third language (R3) compulsory for students in the transition batches. It is assessed
    by the school, with no board exam, but passing it is required for the Class 10 certificate. It rarely needs a
    tutor; it does need a regular slot in the week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbh-class10">Class 10: board marks, internal marks and the second exam</h2>
  <p>
    In major subjects the Class 10 result combines an 80-mark board paper with 20 marks of internal assessment
    conducted by the school, and a student needs at least 33% to pass a subject. Since 2026 there are two board exams.
    The first is compulsory for everyone. A student who has passed can use the second exam to improve their marks in
    up to three subjects from science, maths, social science and the languages; a student who missed three or more
    subjects in the first exam cannot sit the second.
  </p>
  <p>
    The second exam is a safety net, not a plan. Treat the first exam as the real one and use the second only for a
    subject that genuinely went wrong. Our <a href="{{ url('/class-10-home-tutor-gurgaon') }}">Class 10 home tutors in
    Gurgaon</a> page and the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">CBSE Class 10 board
    year plan</a> set out the month-by-month approach.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbh-senior">Classes 11 and 12: how the stream subjects are marked</h2>
  <p>
    In the senior classes each subject has its own split between the theory paper and practical or internal work. The
    split tells a tutor where marks are won:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Marks split in common CBSE Class 11–12 subjects (2026-27 curriculum)</caption>
    <thead>
      <tr><th scope="col">Subject (code)</th><th scope="col">Theory</th><th scope="col">Practical or internal</th><th scope="col">Where a tutor helps most</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics (042)</td><td>70</td><td>30 practical</td><td>Derivations, numericals, graphs and error in experiments</td></tr>
      <tr><td>Chemistry (043)</td><td>70</td><td>30 practical</td><td>Organic reactions, physical chemistry numericals</td></tr>
      <tr><td>Biology (044)</td><td>70</td><td>30 practical</td><td>Diagrams, processes, answer structure</td></tr>
      <tr><td>Mathematics (041) or Applied Mathematics (241), one only</td><td>80</td><td>20 internal</td><td>Calculus, algebra, full working</td></tr>
      <tr><td>Accountancy (055)</td><td>80</td><td>20 internal</td><td>Formats, adjustments, presentation</td></tr>
      <tr><td>Economics (030)</td><td>80</td><td>20 internal</td><td>Diagrams, numericals, case-based answers</td></tr>
      <tr><td>Business Studies (054)</td><td>80</td><td>20 internal</td><td>Case studies and structured answers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CBSE's senior curriculum says board papers will carry more questions set in real-life situations that ask students
    to apply, analyse and evaluate, while staying within the prescribed syllabus and textbooks. The detailed paper
    design comes with each year's sample question paper, so a tutor should work from the current one. The Class 12 board
    exam covers the whole Class 12 syllabus. See <a href="{{ url('/class-12-home-tutor-gurgaon') }}">Class 12 home tutors
    in Gurgaon</a> for the board-year plan, and the <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11
    stream choice guide</a> if your child is still deciding.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbh-competency">What "competency-based" means for tuition</h2>
  <p>
    CBSE's 2026-27 curriculum says that about half the questions in secondary board papers are competency-focused:
    case-based, source-based, integrated, data-interpretation, situational and application questions. The rest are
    multiple-choice and short or long constructed answers. Sample papers and marking schemes are released in advance on
    cbseacademic.nic.in.
  </p>
  <p>
    That changes what a good session looks like. Finishing NCERT exercises is necessary but no longer enough. A tutor
    should regularly give an unseen passage, table or situation, ask the student to identify which chapter's idea it
    uses, and then check the written answer against the marking scheme. Students who have only practised textbook
    questions often know the content and still lose marks here.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbh-session">What a CBSE tuition session should look like</h2>
  <p>
    A session of an hour to ninety minutes usually works well in three parts. First, a short check of school
    work from the week: which NCERT exercises were done, which were skipped and why. Second, teaching or repair of one
    chapter, starting from the NCERT explanation and then moving to exemplar-style and competency-style questions on the
    same idea. Third, a few board-style questions written in full, checked step by step against the marking scheme,
    with presentation corrected as well as the answer. For science, that means diagrams labelled properly and
    numericals with units; for maths, every step of working; for accountancy, the correct formats.
  </p>
  <p>
    Across the week, the tutor should keep a simple record: chapters covered, test scores and the mistakes that keep
    returning. In Classes 9 to 12, ask to see it once a month. It is the fastest way to tell whether tuition is working
    or just filling time.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbh-subjects">Pick a subject: CBSE pages for Gurgaon</h2>
  <ul>
    <li><strong>Maths, Classes 5 to 12 and JEE:</strong> <a href="{{ url('/maths-home-tutor-gurgaon') }}">maths home tutors in Gurgaon</a>; for the board year, <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> and <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths</a>.</li>
    <li><strong>Science, Classes 6 to 10:</strong> <a href="{{ url('/science-home-tutor-gurgaon') }}">science home tutors in Gurgaon</a> and <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science</a>.</li>
    <li><strong>Physics and chemistry, Classes 11 and 12:</strong> <a href="{{ url('/physics-home-tutor-gurgaon') }}">physics tutors</a> and <a href="{{ url('/chemistry-home-tutor-gurgaon') }}">chemistry tutors</a> in Gurgaon, plus <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics</a> and <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry</a>.</li>
    <li><strong>Accountancy, economics, business studies, biology and English:</strong> we match these on request; tell us the class and whether the school follows the standard textbooks.</li>
  </ul>
  <p>
    Useful reading: <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths preparation</a>,
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> and
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a>. If your child is also
    preparing for an entrance exam, read <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE
    preparation in Gurgaon</a> or <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET
    preparation in Gurgaon</a>: the board still needs its own practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbh-demo">How to judge a CBSE tutor in the demo</h2>
  <ol>
    <li><strong>Current documents.</strong> Ask which sample paper and marking scheme they are using this year. A tutor still teaching from an old pattern has not looked.</li>
    <li><strong>A competency question.</strong> Hand over a case-based question from a recent sample paper and watch whether they teach the reading, not just the formula.</li>
    <li><strong>Internal assessment.</strong> Ask how they would support the 20 internal marks or the practical file without doing the work for your child.</li>
    <li><strong>Class 9 choices.</strong> For a Class 9 student, ask whether they would recommend an Advanced paper and why.</li>
    <li><strong>Working, not answers.</strong> In maths and numericals, they should correct the steps and presentation, because that is how CBSE marking schemes award marks.</li>
  </ol>
  <p>
    You receive two or three matched tutors, see each fee before the demo, and can switch tutor later for free.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbh-mode">CBSE home tutors across Gurugram, or online?</h2>
  <p>
    CBSE tutors are the easiest to find in the city. In Old Gurugram, many tutors live locally, so two or three short
    sessions a week are practical in sectors such as {!! $ggA('sector-14', 'Sector 14') !!},
    {!! $ggA('sector-4', 'Sector 4') !!}, {!! $ggA('sector-23', 'Sector 23') !!} and
    {!! $ggA('palam-vihar', 'Palam Vihar') !!}; parking in older colonies is worth sorting on day one. Central
    Gurugram, around {!! $ggA('sector-44', 'Sector 44') !!} and {!! $ggA('south-city-1', 'South City 1') !!}, is within
    reach of tutors from most of the city, which helps for Class 11 and 12 subjects.
  </p>
  <p>
    In the newer sectors the choice is thinner. Along the Dwarka Expressway and in New Gurugram, in sectors such as
    {!! $ggA('sector-37d', 'Sector 37D') !!} or {!! $ggA('sector-86', 'Sector 86') !!}, families often combine a
    weekend home class with weekday online sessions, and families who move in mid-year often want a tutor who has
    handled a change of school or board. Sohna Road families, for example in
    {!! $ggA('sector-47', 'Sector 47') !!} or {!! $ggA('sector-48', 'Sector 48') !!}, do better with a tutor on their
    own side of the road. Read our <a href="{{ url('/blog/old-gurgaon-palam-vihar-tuition-guide') }}">Old Gurgaon and
    Palam Vihar guide</a> and <a href="{{ url('/blog/new-gurgaon-dwarka-expressway-tuition-guide') }}">New Gurgaon and
    Dwarka Expressway guide</a>, or see <a href="{{ url('/online-tutor-gurgaon') }}">online tutoring for Gurgaon</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbh-start">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For CBSE, the class, the
    number of subjects, how many sessions a week and the tutor's travel set the fee. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-gurgaon') }}">home
    tuition fees in Gurgaon</a>.
  </p>
  <p>
    Tell us the class, subjects, your sector or society and free slots; we shortlist two or three CBSE tutors, and the
    first class is a <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor
    profiles</a> or all areas on our <a href="{{ url('/city/gurugram') }}">Gurugram tutors page</a>.
  </p>
  </section>

  </div>
</article>
