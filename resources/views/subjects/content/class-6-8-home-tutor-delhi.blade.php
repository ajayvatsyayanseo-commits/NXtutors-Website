{{--
  Long-form guide for the "Class 6 to 8 home tutor Delhi" page (middle school,
  all subjects). Authors: Aaditya Kashyap (CBSE and ICSE science) with the
  NXTutors Academic Team. Role statements only; no anecdotes or experience
  claims. No schools named. Kept distinct from class-6-8-home-tutor-gurgaon and
  class-6-8-home-tutor-mumbai.

  Official sources (as verified for the Gurgaon Class 6-8 page, 1 Oct 2026):
  - CBSE Secondary Curriculum 2026-27, Part 1
    (cbseacademic.nic.in/web_material/CurriculumMain27/SecPart1/Curriculum_SecP1_2026-27.pdf):
    three-language framework R1, R2, R3; two of the three native to India; R3
    compulsory from Class VI with effect from 2026-27. Computational thinking
    and AI literacy for Classes III-VIII from 2026-27 (as cited on
    cbse-home-tutor-delhi).
  - NCERT middle-school books Ganita Prakash (maths) and Curiosity (science)
    (ncert.nic.in).
  - CISCE ICSE Examination Year 2028 Regulations
    (cisce.org/wp-content/uploads/2026/01/1.-Regulations.pdf): a third language
    from at least Class V to Class VIII (internal examination); Classes I-VIII
    taught through school-chosen books.
  - IB MYP (ibo.org/programmes/middle-years-programme/): ages 11 to 16, five
    years, eight subject groups, at least 50 teaching hours per subject group
    per year.
  - Cambridge Lower Secondary (cambridgeinternational.org): typically ages 11
    to 14, Checkpoint an optional assessment.
  No Delhi state board is described; board mix from the Delhi city hub view.
  Local detail only from database/seo-content/zones/delhi.json,
  database/seo-content/areas/delhi-research.json, delhi-zone-guides.json and
  the hub view. Fee range is the approved sentence.
  FAQs: faqs/class-6-8-home-tutor-delhi.php.

  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $d68Slugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $d68A = function (string $slug, string $label) use ($d68Slugs) {
      return in_array($slug, $d68Slugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="d68GuideTitle">
  <h2 id="d68GuideTitle">Class 6, 7 and 8 home tutors in Delhi: the quiet years that decide Class 9</h2>

  <p class="nx-guide__lede">
    Nobody sits a board exam in Classes 6 to 8, so these years are easy to underrate. Yet this is where algebra first
    appears, science splits into topics with their own vocabulary, a third language arrives for many CBSE students, and
    the child is expected to study with less help. Gaps that open here tend to surface as a shock in Class 9. In this
    guide, Aaditya Kashyap, who writes on CBSE and ICSE science for NXTutors, and our Academic Team explain what changes
    in middle school on each board Delhi children follow, which subjects most often need support, which habits to
    build, and how to find a tutor who can reach your colony or sector on a weekday evening.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#d68-change">What changes</a> ·
    <a href="#d68-boards">Boards</a> ·
    <a href="#d68-subjects">Subjects</a> ·
    <a href="#d68-habits">Habits</a> ·
    <a href="#d68-session">A useful session</a> ·
    <a href="#d68-projects">Projects</a> ·
    <a href="#d68-zones">Reaching you</a> ·
    <a href="#d68-mode">Home or online</a> ·
    <a href="#d68-demo">The demo</a> ·
    <a href="#d68-fees">Fees</a> ·
    <a href="#d68-where">Where we match</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="d68-change">What actually changes when a child reaches Class 6?</h2>
  <p>
    Four shifts happen at once, and a tutor's job is to keep any one of them from snowballing:
  </p>
  <ul>
    <li><strong>Maths turns abstract.</strong> Integers, fractions with unlike denominators, ratio and the first letters standing for numbers arrive within two years. A child who memorised methods in primary school often stalls here.</li>
    <li><strong>Science gets its own language.</strong> Words like "reflection", "reaction" and "respiration" have precise meanings, and answers are marked on whether they are used correctly.</li>
    <li><strong>More languages.</strong> Many CBSE students now carry three languages; ICSE schools have a third language running through these classes too.</li>
    <li><strong>Less hand-holding.</strong> Teachers expect notes to be kept, projects to be planned and tests to be revised for without reminders.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d68-boards">How do Delhi's boards handle Classes 6 to 8?</h2>
  <p>
    CBSE is the board most Delhi students sit, with a sizeable ICSE following and a smaller IB and Cambridge group, as
    our <a href="{{ url('/city/delhi') }}">Delhi tutors page</a> sets out. In middle school, every board leaves the
    exams to the school, but the books and expectations differ:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Middle school by board in Delhi: what is distinctive and what a tutor should know</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">What is distinctive in Classes 6 to 8</th><th scope="col">What the tutor should know</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>New NCERT books, Ganita Prakash for maths and Curiosity for science; three languages (R1, R2, R3), two native to India, with R3 compulsory from Class 6 from 2026-27; computational thinking and AI literacy inside existing subjects</td><td>Work from the new books, including their activities and puzzles; do not teach from older editions a sibling used</td></tr>
      <tr><td>ICSE (CISCE)</td><td>Schools choose their own books up to Class 8; a third language from at least Class 5 to Class 8, examined internally</td><td>Follow the school's exact books; expect longer written answers and plenty of English</td></tr>
      <tr><td>IB MYP</td><td>Ages 11 to 16 over five years; eight subject groups, each with at least 50 teaching hours a year; assessment against published criteria</td><td>Understand criterion-based marking and support unit projects without doing them</td></tr>
      <tr><td>Cambridge Lower Secondary</td><td>Typically ages 11 to 14; Checkpoint is an optional assessment</td><td>Use the school's scheme; practise Checkpoint-style questions only if the school enters students</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Our <a href="{{ url('/cbse-home-tutor-delhi') }}">CBSE</a>, <a href="{{ url('/icse-home-tutor-delhi') }}">ICSE</a>
    and <a href="{{ url('/ib-tutor-delhi') }}">IB</a> pages for Delhi cover each board across the classes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d68-subjects">Which subjects usually need a tutor in Classes 6 to 8?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where middle-school marks slip in Delhi, and what helps</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Where marks usually slip</th><th scope="col">What a tutor does</th></tr>
    </thead>
    <tbody>
      <tr><td>Maths</td><td>Negative numbers, fractions, the first algebra, word problems</td><td>Rebuilds number sense with diagrams and real examples before drilling methods</td></tr>
      <tr><td>Science</td><td>Using terms loosely, labelled diagrams, simple numericals on speed or density</td><td>Insists on precise words and clean diagrams; links each chapter to something seen at home</td></tr>
      <tr><td>English</td><td>Grammar in context, structured paragraphs, comprehension inference</td><td>Short weekly writing with feedback; reading beyond the textbook</td></tr>
      <tr><td>Hindi or the third language</td><td>Spelling, grammar, unseen passages</td><td>A fixed short slot each week so it does not get squeezed out</td></tr>
      <tr><td>Social science</td><td>Map work and long answers</td><td>Usually a reading routine, not regular tuition</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Our <a href="{{ url('/maths-home-tutor-delhi') }}">maths</a> and <a href="{{ url('/science-home-tutor-delhi') }}">science</a>
    pages for Delhi go deeper, and the national <a href="{{ url('/maths-home-tutor/class-6') }}">Class 6 maths</a> page
    sets out the new chapters.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d68-habits">Which habits should be in place before Class 9?</h2>
  <p>
    By the end of Class 8, a student should be able to do these without a parent standing over them. A tutor should
    be building them all along, not just teaching chapters:
  </p>
  <ol>
    <li><strong>A notebook that can be revised from:</strong> dated, headed, with worked examples and corrections in a different colour.</li>
    <li><strong>A mistakes list</strong> for maths and science, reviewed before every test.</li>
    <li><strong>Reading the question twice</strong> and underlining what it asks.</li>
    <li><strong>Showing every step</strong> in maths, even when the answer is obvious.</li>
    <li><strong>A weekly plan</strong> that includes self-study, not just tuition and homework.</li>
  </ol>
  <p>
    Our article on <a href="{{ url('/blog/notemaking-time-management') }}">note-making and time management</a> is a
    good place for a Class 7 or 8 student to start.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d68-session">What does a useful middle-school session look like?</h2>
  <p>
    An hour with a Class 7 student goes further when it has a shape the child can predict. A pattern we suggest to
    tutors and parents alike:
  </p>
  <ol>
    <li><strong>Five minutes of recall:</strong> two or three quick questions on last week's topic, answered without the book.</li>
    <li><strong>Twenty-five minutes on the hard part of this week's chapter,</strong> with the student doing the problems and explaining the reasoning aloud.</li>
    <li><strong>Fifteen minutes on school work due,</strong> checked rather than written by the tutor.</li>
    <li><strong>Ten minutes on the mistakes list,</strong> adding anything new from the session.</li>
    <li><strong>Five minutes to agree the self-study task</strong> for the days between visits, written in the student's own planner.</li>
  </ol>
  <p>
    After a month, ask your child to show you the mistakes list. If it is growing and being used, the sessions are
    working.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d68-projects">Projects and activities: how much should a tutor help?</h2>
  <p>
    Middle school brings model-making, survey projects, science activities and, in IB schools, unit tasks marked
    against criteria. A tutor can explain the brief, help the student plan the steps, suggest where to find
    information and check that the work answers the question. The tutor should not write, draw or build the work. A
    simple test: could your child explain every part of the project to the teacher without help? If not, the tutor
    did too much.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d68-zones">How do tutors reach middle-school families in each zone?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Routes and slot advice for Class 6 to 8 sessions in six zones</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Route a tutor usually takes</th><th scope="col">Slot advice</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket, Malviya Nagar &amp; Hauz Khas</a></td><td>Green Park on the Yellow Line, or Bhikaji Cama Place on the Pink Line for the western blocks</td><td>Cross the Outer Ring Road junctions before or after office hours</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/kalkaji-cr-park-sarita-vihar') }}">Kalkaji, CR Park &amp; Sarita Vihar</a></td><td>Kalkaji Mandir, where the Violet and Magenta Lines meet, or Jasola Apollo</td><td>Move to mornings or online in festival weeks</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a></td><td>Blue Line to the sector station, then a walk or e-rickshaw</td><td>Fix one weekly time so the gate list stays simple</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">Janakpuri, Rajouri Garden &amp; Punjabi Bagh</a></td><td>Blue Line along Najafgarh Road, or Mayapuri on the Pink Line</td><td>Market lanes have little parking; metro riders arrive more reliably</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/rohini') }}">Rohini</a></td><td>Deepali Chowk on the Magenta Line, or the Red Line stations</td><td>Outer Ring Road traffic builds in the evening; start a little earlier</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">Laxmi Nagar, Preet Vihar &amp; Shahdara</a></td><td>Blue, Pink or Red Line, then an e-rickshaw</td><td>Avoid peak hours on the main roads; lanes are tight for cars</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d68-mode">Home or online tuition in Classes 6 to 8?</h2>
  <p>
    By Class 7 or 8, many students cope well online, especially for one subject. Home suits a child who loses focus
    easily or who needs someone to check the notebook page by page. Online widens the choice when the right tutor,
    say an MYP science specialist, lives on another line or across the Yamuna; the tutor must see the student's
    working through a shared whiteboard or a phone camera over the notebook. A common Delhi pattern is a home session
    for maths and science and an online one for English or a language.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d68-demo">What to check in a Class 6 to 8 demo</h2>
  <p>
    The first class with the tutor you choose is a free demo. Ask the tutor to work on a chapter your child found hard
    this term, and watch for:
  </p>
  <ul>
    <li>a quick check of what your child already knows before teaching;</li>
    <li>explanations with pictures, number lines or everyday examples, not just steps;</li>
    <li>your child writing and explaining, not just watching;</li>
    <li>familiarity with the current books for your board, including the new NCERT titles for CBSE;</li>
    <li>a short plan for the term, including the habits listed above.</li>
  </ul>
  <p>
    If the fit is wrong, the next tutor on your shortlist can come, and switching later is free. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. See our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> for more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d68-fees">What does a Class 6 to 8 home tutor cost in Delhi?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For middle school the board, the number of subjects, how often the tutor comes and how far they travel at your
    hour all affect the fee. Tutors set their own, and you see each one before the demo. Read the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> or <a href="{{ url('/blog/home-tuition-fees-delhi') }}">home
    tuition fees in Delhi</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d68-where">Where we match Class 6 to 8 tutors in Delhi</h2>
  <p>
    {!! $d68A('safdarjung-enclave', 'Safdarjung Enclave') !!} has three lines close by, Pink, Yellow and Magenta, which
    widens the choice of tutors for families there. {!! $d68A('jasola-vihar', 'Jasola Vihar') !!} has DDA pockets with
    RWA gates beside an office district, so evening sessions after the rush work well.
    {!! $d68A('dwarka-sector-14', 'Dwarka Sector 14') !!}, mostly DDA flats at the Kakrola end, has its own Blue Line
    station.
  </p>
  <p>
    In {!! $d68A('hari-nagar', 'Hari Nagar') !!}, tutors usually come from Subhash Nagar or Mayapuri station, and DDA
    pockets may log visitors at the gate. {!! $d68A('rohini-sector-3', 'Rohini Sector 3') !!} is large, so share your
    pocket letter, 3A to 3G, with the house number. {!! $d68A('geeta-colony', 'Geeta Colony') !!} is closely built, so a
    tutor coming by metro and e-rickshaw is the practical choice.
  </p>
  <p>
    Before Class 6, see <a href="{{ url('/primary-home-tutor-delhi') }}">primary tutors in Delhi</a>; next comes
    <a href="{{ url('/class-9-home-tutor-delhi') }}">Class 9</a>. Send us the class, board, subjects, your colony or
    sector and the evenings that suit you, and we will shortlist two or three tutors with fees shown.
    <a href="{{ url('/demo-class') }}">Book a free demo</a>, browse <a href="{{ url('/tutors') }}">tutor profiles</a> or
    visit the <a href="{{ url('/city/delhi') }}">home tutors in Delhi</a> page. Teaching middle school in Delhi? See
    <a href="{{ url('/tuition-jobs/delhi') }}">tuition jobs in Delhi</a>.
  </p>
  </section>

  </div>
</article>
