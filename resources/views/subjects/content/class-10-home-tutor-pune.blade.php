{{--
  Long-form guide for the "Class 10 home tutor Pune" page (SSC, CBSE, ICSE
  and IGCSE board year), covering Pune and Pimpri-Chinchwad. Authors:
  Abhinandan Tiwary (Class 10 CBSE and ICSE maths) and Aaditya Kashyap (CBSE
  and ICSE science). Role statements only. No schools named. Written SSC-first;
  structure follows class-10-home-tutor-mumbai with no sentences reused.

  Official sources:
  - Maharashtra State Board of Secondary and Higher Secondary Education:
    https://www.mahahsscboard.in/rules.pdf (read 2 Oct 2026): head office in
    Pune; the rules list the Poona Divisional Board among the divisional
    boards. https://www.mahahsscboard.in/ Evaluation page PDFs and FAQs (as
    read 1 Oct 2026 for maharashtra-board-tutor-mumbai): "STD IX & X
    MATHEMATICS (71)": Part I 40 marks 2 hours, Part II 40 marks 2 hours,
    internal 20; "STD IX & X SCIENCE (72)": Class 10 Science & Technology
    Part 1 and Part 2, each a 40-mark paper (activity sheet) of two hours on
    separate days; question types include 1-mark MCQs based on the textbook
    and 2-mark "give scientific reasons"; internal marks from experiments,
    journal and projects, one project for each part. FAQs: Class Improvement
    Scheme (passed once, next three consecutive examinations, all subjects);
    marks verification, photocopy and revaluation after results; sample
    question papers under Student Login; digital marksheets on the board site
    and DigiLocker; APAAR ID needed for the digital marksheet. SSC General
    subject list (first, second and third languages incl. Marathi, Hindi,
    English, Urdu, Gujarati, Kannada; composite languages).
  - CBSE (cbseacademic.nic.in 2026-27 curriculum; cbse.gov.in notification of
    14.02.2026), as on cbse-home-tutor-pune and class-10-home-tutor-mumbai:
    80 + 20, 33% pass per subject, about half competency-focused questions,
    Maths Standard/Basic, two Class X board exams from 2026 (compulsory main,
    optional second to improve up to three subjects); 2027 dates not announced.
  - CISCE ICSE Mathematics (https://cisce.org/): one 3-hour 80-mark paper + 20
    internal (10 teacher, 10 external examiner).
  - Cambridge IGCSE 0580 (2025-2027) Core C-G, Extended A*-E
    (https://www.cambridgeinternational.org/); Edexcel 4MA1 Foundation 5-1,
    Higher 9-4 (https://qualifications.pearson.com/).
  Local detail only from the Pune city hub view (junior college for Classes 11
  and 12; CBSE session from April, many State Board schools from June),
  database/seo-content/zones/pune.json, pune-zone-guides.json and
  database/seo-content/areas/pune-research.json. Fee range is the approved
  sentence. FAQs: faqs/class-10-home-tutor-pune.php.
  Area links render only when that Pune area page exists and is active.
--}}
@php
  $pn10Slugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pn10 = function (string $slug, string $label) use ($pn10Slugs) {
      return in_array($slug, $pn10Slugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="pn10GuideTitle">
  <h2 id="pn10GuideTitle">Class 10 home tutors in Pune: the SSC paper first, then CBSE, ICSE and IGCSE</h2>

  <p class="nx-guide__lede">
    Pune is home to the Maharashtra State Board itself, and for State Board students here Class 10 means the SSC. Others are
    preparing for CBSE or ICSE board papers, or for IGCSE at the end of Grade 10. Each exam is set differently, so the
    right tutor is chosen for the actual paper, not just the subject. Abhinandan Tiwary (Class 10 CBSE and ICSE maths)
    and Aaditya Kashyap (CBSE and ICSE science) set out here how the SSC papers are built, how the other boards compare, which subjects repay a tutor, how to plan the year from June or April, and
    how to keep a tutor coming through Pune's traffic and monsoon until the last paper.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pn10-ssc">The SSC papers</a> ·
    <a href="#pn10-after">After the result</a> ·
    <a href="#pn10-boards">CBSE, ICSE, IGCSE</a> ·
    <a href="#pn10-subjects">Which subjects</a> ·
    <a href="#pn10-year">The year</a> ·
    <a href="#pn10-zones">Reaching you</a> ·
    <a href="#pn10-mode">At home or on screen</a> ·
    <a href="#pn10-demo">The demo</a> ·
    <a href="#pn10-fees">Fees</a> ·
    <a href="#pn10-where">Localities</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pn10-ssc">How are the SSC maths and science papers built?</h2>
  <p>
    The Maharashtra State Board of Secondary and Higher Secondary Education, which runs the SSC, has its head office
    in Pune; the board's rules also list a Poona Divisional Board among its divisions. The board publishes an
    evaluation scheme for each subject, and for maths and science the structure is worth
    knowing in detail:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>SSC maths and science, from the board's published evaluation schemes</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Written papers</th><th scope="col">Internal marks</th><th scope="col">What a tutor stresses</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics (71)</td><td>Part I and Part II, each 40 marks in two hours</td><td>20, from assignments and practical work for each part</td><td>Algebra and geometry as separate disciplines, each with its own practice routine</td></tr>
      <tr><td>Science and Technology (72)</td><td>Part 1 and Part 2, each a 40-mark paper of two hours, written on separate days</td><td>From experiments, the journal and a project for each part</td><td>Textbook-based objective questions, "give scientific reasons" answers, and longer structured answers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In practice, an SSC tutor should work through every textbook exercise, practise the board's own question types
    until the answer style is automatic, and keep the journal and projects complete, because internal marks are easy
    to lose through neglect. The board's sample question papers are available to students after logging in on
    mahahsscboard.in, which is where the current pattern should always be checked. Our page on
    <a href="{{ url('/maharashtra-board-tutor-pune') }}">Maharashtra Board tutors in Pune</a> covers the board across
    classes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn10-after">What happens after the SSC result?</h2>
  <p>
    For State Board students, Classes 11 and 12 are usually spent in a junior college, and SSC marks feed directly into the
    choice of stream and junior college. Two board processes are worth knowing before results day. After the result, students
    can apply for verification of marks, a photocopy of the answer book and revaluation. And the board's Class
    Improvement Scheme lets a student who has passed reappear in all subjects at one of the next three consecutive
    examinations to try for a better result, without changing subjects. Marksheets are also issued digitally on the
    board's site and through DigiLocker, for which an APAAR ID is needed. Check every rule on the board's site in the
    year you need it. The next step is covered on our
    <a href="{{ url('/class-11-home-tutor-pune') }}">Class 11 home tutors in Pune</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn10-boards">What if the board is CBSE, ICSE or IGCSE?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The other Class 10 routes Pune students take</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Structure</th><th scope="col">Choices and rules</th><th scope="col">Where marks go</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>Main subjects: 80-mark board paper and 20 internal; 33% pass per subject; about half the questions competency-focused</td><td>Maths at Standard or Basic level; since 2026, one compulsory main board exam plus an optional second sitting in which up to three subjects can be improved; the 2027 schedule has not been published</td><td>Applying ideas to unfamiliar cases, within the time</td></tr>
      <tr><td>ICSE</td><td>Maths: a single paper of three hours carrying 80 marks, with 20 more from internal work assessed partly by the teacher and partly by an external examiner</td><td>A wide syllabus across all subjects</td><td>Incomplete working and rushed long answers</td></tr>
      <tr><td>Cambridge IGCSE maths (0580)</td><td>Examined papers only</td><td>2025–2027 syllabus at two tiers: Core, graded C–G, and Extended, graded A*–E</td><td>Choosing the wrong tier</td></tr>
      <tr><td>Edexcel International GCSE maths</td><td>Examined papers only</td><td>Two tiers: Foundation, graded 5–1, and Higher, graded 9–4</td><td>Choosing the wrong tier</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Board-specific pages: <a href="{{ url('/cbse-home-tutor-pune') }}">CBSE</a>,
    <a href="{{ url('/icse-home-tutor-pune') }}">ICSE</a> and <a href="{{ url('/igcse-tutor-pune') }}">IGCSE tutors in
    Pune</a>, plus our <a href="{{ url('/blog/icse-class-10-maths-boards') }}">guide to ICSE Class 10 maths</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn10-subjects">Where does a Class 10 tutor earn the fee?</h2>
  <ul>
    <li><strong>Maths</strong> on every board, because steps carry marks and errors compound. See <a href="{{ url('/maths-home-tutor-pune') }}">maths home tutors in Pune</a> and the <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation</a> guide.</li>
    <li><strong>Science</strong>, especially physics numericals and chemical equations. See <a href="{{ url('/science-home-tutor-pune') }}">science home tutors in Pune</a> and our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a>.</li>
    <li><strong>English</strong>, usually for a few weeks of answer formats and writing practice rather than all year.</li>
    <li><strong>Marathi, Hindi or another language</strong>, when the student joined the school late or the script is weak.</li>
    <li><strong>Social science</strong>, rarely: a disciplined reading and map routine usually suffices.</li>
  </ul>
  <p>
    One tutor for maths and science works when both are only a little behind. For a weak subject or a high target, a
    specialist is worth the extra fee.
  </p>
  <p>
    Languages deserve a word for SSC students. The board's subject list offers first, second and third languages from a
    long menu that includes Marathi, Hindi, English, Urdu, Gujarati and Kannada, among others, and composite language
    options too. A student who moved to Pune from another state, or who studies in a medium that is not spoken at home,
    can lose marks here without anyone noticing until the preliminary exams. A short weekly session on reading,
    grammar and set answer formats, starting early in the year, usually fixes it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn10-year">How should the board year be planned?</h2>
  <p>
    CBSE's session opens in April and many State Board schools start in June. Count from your school's first month:
  </p>
  <ol>
    <li><strong>Opening weeks:</strong> collect each subject's pattern from the board's site, test Class 9 basics, and fix the worst gaps.</li>
    <li><strong>Monsoon term:</strong> chapter-wise tests every week, a mistakes notebook, and online sessions on the heaviest rain days.</li>
    <li><strong>Diwali break:</strong> finish the syllabus; complete journals, practicals and projects so internal marks are safe.</li>
    <li><strong>Preliminary or pre-board exams:</strong> full timed papers, marked against the board's style.</li>
    <li><strong>Last weeks:</strong> revise from the mistakes notebook, follow the official timetable, and stop adding new material.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn10-zones">Getting a board-year tutor to your door in each zone</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Pune's seven zones: the usual way in and the hour to choose</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Usual way in</th><th scope="col">Hour to choose</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar &amp; Deccan</a></td><td>Aqua Line to Paud Phata for Erandwane, Vanaz or Anand Nagar for Kothrud</td><td>Clear of the Paud Road rush</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner &amp; Pashan</a></td><td>Road via University Road or Baner Road</td><td>Later evening once office traffic eases</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad, Hinjewadi &amp; Pimpri-Chinchwad</a></td><td>Purple Line to Pimpri; road for Pimple Saudagar and Wakad</td><td>Early evening or weekends</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar &amp; Kharadi</a></td><td>Aqua Line to Kalyani Nagar or Ramwadi</td><td>After the Nagar Road evening wave</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/koregaon-park-camp-wanowrie') }}">Koregaon Park, Camp &amp; Wanowrie</a></td><td>Pune Railway Station metro for Camp; Bund Garden for Koregaon Park</td><td>Weekdays; Camp's shopping streets peak on weekend evenings</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa &amp; NIBM</a></td><td>Two-wheeler, bus or auto; Swargate is the nearest metro for Kondhwa</td><td>Avoid the Katraj to Kondhwa Road school rush</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/katraj-bibwewadi-sinhagad-road') }}">Katraj, Bibwewadi &amp; Sinhagad Road</a></td><td>Swargate, then bus or auto up Satara Road</td><td>Check the onward leg fits the lesson time</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn10-mode">Home or online for the board year?</h2>
  <p>
    For SSC maths and science, a tutor at the table sees every line of working, which is where marks are won. Online
    widens the choice for ICSE and IGCSE specialists and avoids long evening rides in the western and eastern IT belts.
    Online maths only works if the tutor can watch your child write, using a pen tablet, a shared board or a phone
    propped over the page. One workable pattern is a Saturday visit plus a shorter online class on a weekday, and agree in June that heavy
    rain means an online lesson at the usual time.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn10-demo">How to use the free Class 10 demo</h2>
  <ol>
    <li><strong>Ask how the paper is built.</strong> An SSC tutor should explain the two maths parts and the two science papers; a CBSE tutor the internal marks and second exam; an IGCSE tutor the tier.</li>
    <li><strong>Share a recent test</strong> and ask which mistakes cost the most marks.</li>
    <li><strong>Watch the checking:</strong> each step, or only the final answer?</li>
    <li><strong>Pick an unfamiliar textbook question</strong> and see whether the tutor explains the thinking or simply works it out.</li>
    <li><strong>Request a month-by-month outline</strong> that names when full papers begin.</li>
  </ol>
  <p>
    You pay nothing for this first lesson. When the match is wrong, a second tutor from the shortlist can take their
    own demo, and moving to someone else mid-year costs nothing either. Every tutor who signs up passes an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before going live, and our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">checklist for demo classes</a> lists further questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn10-fees">Fees for Class 10 tuition in Pune</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    In the board year, the exam, the number of subjects, the tutor's experience with that paper, the journey at your
    hour and the number of sessions a week all affect the quote. Each tutor fixes their own rate, and it is on your shortlist
    before anything is booked. Our <a href="{{ url('/pricing-guide') }}">pricing guide</a> and the post on
    <a href="{{ url('/blog/home-tuition-fees-pune') }}">what home tuition costs in Pune</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn10-where">Where we match Class 10 tutors in Pune and Pimpri-Chinchwad</h2>
  <p>
    {!! $pn10('erandwane', 'Erandwane') !!}, which takes in Prabhat Road, keeps older bungalows on tree-lined lanes;
    Paud Phata station is close, and a map pin for the lane helps a new tutor. In {!! $pn10('aundh', 'Aundh') !!}, along
    University Road, no metro station is open yet, so tutors come by road. {!! $pn10('pimple-saudagar', 'Pimple Saudagar') !!}
    mixes established and newer societies, where a gate entry should be set up before the demo.
  </p>
  <p>
    {!! $pn10('camp', 'Camp') !!}, the old cantonment, is run by its cantonment board, and near army areas a visiting
    tutor may need a pass, so ask first. {!! $pn10('kondhwa', 'Kondhwa') !!}, made up of Kondhwa Budruk and Kondhwa
    Khurd, runs from older cooperative societies to high-rise townships, with Swargate as the nearest metro. And in
    {!! $pn10('katraj', 'Katraj') !!}, at the foot of the ghat on Satara Road, houses and societies ring the old
    village, and tutors usually arrive by two-wheeler or from Swargate.
  </p>
  <p>
    Before the board year, see <a href="{{ url('/class-9-home-tutor-pune') }}">Class 9 tutors in Pune</a>. Share the
    board, the subjects, the medium, your locality and the evenings that are free, and two or three suitable tutors come
    back with their fees. You can also <a href="{{ url('/demo-class') }}">request a free demo</a> straight away, look
    through <a href="{{ url('/tutors') }}">tutor profiles</a>, or start from the full list of localities on
    <a href="{{ url('/city/pune') }}">home tutors in Pune</a>.
  </p>
  </section>

  </div>
</article>
