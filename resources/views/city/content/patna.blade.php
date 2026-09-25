{{--
  Long-form guide for the Patna city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for Patna parents
  choosing a home tutor, not for search engines: every figure here is either
  live from the database or a published NXTutors policy. No schools or
  coaching institutes are named.

  Area links render only when that area page exists and is active, so adding,
  renaming or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $ptAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pA = function (string $slug, string $label) use ($ptAreaSlugs) {
      return in_array($slug, $ptAreaSlugs, true)
          ? '<a href="' . e(url('/city/patna/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $ptAreas = $allAreas->count();
@endphp

<article class="pt-guide" aria-labelledby="ptGuideTitle">
  <h2 id="ptGuideTitle">Home tuition in Patna: a practical guide for parents</h2>

  <p class="pt-lede">
    In Patna, conversations about school very quickly become conversations about JEE and NEET. Many families plan for
    engineering or medical entrance years before Class 11, and the city has a long tradition of coaching classes and
    self-study that goes with it. The question most parents here face is not whether their child will study hard, but how
    to make that effort count: whether to send a teenager to Kota or Delhi, or keep them at home with the right support;
    how to handle a CBSE or BSEB board year alongside coaching; and how to spend a tuition budget wisely. This guide sets
    out how NXTutors finds home tutors in Patna and what to look for when you choose one.
  </p>

  <nav class="pt-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pt-how">How matching works</a> ·
    <a href="#pt-where">Localities</a> ·
    <a href="#pt-boards">CBSE, BSEB and ICSE</a> ·
    <a href="#pt-classes">Class by class</a> ·
    <a href="#pt-jee-neet">JEE &amp; NEET at home</a> ·
    <a href="#pt-medium">Hindi to English medium</a> ·
    <a href="#pt-subjects">Subjects</a> ·
    <a href="#pt-mode">Home or online</a> ·
    <a href="#pt-fees">Fees</a> ·
    <a href="#pt-choose">Choosing a tutor</a> ·
    <a href="#pt-safety">Safety</a> ·
    <a href="#pt-calendar">The Patna school year</a> ·
    <a href="#pt-start">Getting started</a>
  </nav>

  <h2 id="pt-how">How we find the right tutor for your child</h2>
  <p>
    You fill in one short request: the student's class and board, the subjects where help is needed, your locality in
    Patna, the days and times that are free after school and coaching, whether you want the tutor at home or online, and
    what you can spend. From that, we put forward two or three tutors who fit the whole picture. We do not send a list of
    fifty names to call one by one.
  </p>
  <p>Behind that shortlist are a few questions we ask about every tutor:</p>
  <ul>
    <li><strong>Have they taught this exact combination before?</strong> Teaching BSEB Class 10 Science in Hindi medium is a different job from teaching CBSE Class 12 Chemistry to a NEET aspirant. We match on board, class and medium, not only the subject name.</li>
    <li><strong>Can they reach you reliably?</strong> A tutor across town, or on the far side of the railway line, may look close on a map but be slow to reach in the evening. We look at where the tutor travels from and at what time.</li>
    <li><strong>Does their free time match the student's free time?</strong> Many Patna students attend school in the morning and coaching in the afternoon or evening, so the only open window may be early morning or late evening. We only suggest tutors who genuinely have that slot.</li>
    <li><strong>Are they inside your budget?</strong> Every tutor's fee is shown before you meet them.</li>
    <li><strong>What do other families say?</strong> Reviews, punctuality and how long students stay with a tutor all count.</li>
  </ul>
  <p>
    You then take a <strong>free demo class</strong> with the tutor you prefer. It should be a real lesson on whatever the
    student is studying that week, so you can see how the tutor teaches. If it does not feel right, tell us and we arrange
    another demo with someone else. Changing tutor costs nothing.
  </p>

  <h2 id="pt-where">Where our tutors teach in Patna</h2>
  <p>
    @if($hubCounts['tutors'] > 0)
      NXTutors currently has {{ number_format($hubCounts['tutors']) }} verified tutors listed for Patna,
    @else
      We are building our tutor network in Patna,
    @endif
    and we arrange home tuition across the city
    @if($ptAreas > 0)
      &mdash; {{ number_format($ptAreas) }} localities are already listed on this page.
    @else
      &mdash; tell us your locality and we will look for the nearest suitable tutor.
    @endif
    Where no home tutor is close enough, an experienced online tutor is always an option. Each part of the city has its
    own character when it comes to tuition.
  </p>

  <h3>Boring Road, Patliputra Colony and the western side</h3>
  <p>
    Around {!! $pA('boring-road', 'Boring Road') !!}, {!! $pA('patliputra-colony', 'Patliputra Colony') !!} and
    {!! $pA('ashiana-nagar', 'Ashiana Nagar') !!}, many families have children in CBSE schools and a good number are
    already enrolled in entrance coaching from Class 9 or 10. Families here often ask for Class 11 and 12 Physics,
    Chemistry and Maths, and for tutors who can work through coaching material rather than repeat school lessons.
   
  </p>

  <h3>Bailey Road and Danapur</h3>
  <p>
    Along {!! $pA('bailey-road', 'Bailey Road') !!} and out towards {!! $pA('danapur', 'Danapur') !!}, homes are more
    spread out and travel times are longer. Families here often choose a tutor who comes two or three times a week for
    longer sessions, rather than daily short visits, and are more open to a mix of home and online classes.
  </p>

  <h3>Kankarbagh, Rajendra Nagar and Kadamkuan</h3>
  <p>
    {!! $pA('kankarbagh', 'Kankarbagh') !!} is one of the largest residential areas in the city, and together with
    {!! $pA('rajendra-nagar', 'Rajendra Nagar') !!} and {!! $pA('kadamkuan', 'Kadamkuan') !!} it has long been home to
    students preparing for competitive exams, including many who live in hostels or rented rooms near coaching classes.
    Families here ask us for a wide mix: BSEB matric and intermediate preparation, CBSE board classes, and one-to-one
    doubt sessions for JEE and NEET.
  </p>

  <h3>Bankipur and the Gandhi Maidan area</h3>
  <p>
    The older central city around {!! $pA('bankipur', 'Bankipur') !!} and {!! $pA('gandhi-maidan', 'Gandhi Maidan') !!}
    has a mix of long-settled families and students who have come from other districts of Bihar to study in Patna. Families
    here often ask for help moving from Hindi-medium to English-medium study, for BSEB board preparation, and
    for English and Mathematics in the lower secondary classes.
  </p>

  <h2 id="pt-boards">CBSE, BSEB and ICSE: what each board asks for</h2>
  <p>
    Patna students sit several different boards, and the right tutor for one is not always the right tutor for another.
  </p>

  <h3>CBSE</h3>
  <p>
    Many private schools in Patna follow CBSE. The board's papers stay close to the NCERT textbooks, and a growing share of
    each paper is made up of case-based, assertion–reason and application questions. For a Patna student who also
    prepares for JEE or NEET, the good news is that NCERT is the common ground: a tutor who teaches NCERT thoroughly is
    helping with both at once. What entrance-focused CBSE students often lack is practice in writing complete, step-by-step
    answers.
  </p>

  <h3>Bihar School Examination Board (BSEB)</h3>
  <p>
    A large number of Patna students study under the BSEB, which conducts the Class 10 (matric) and Class 12
    (intermediate) examinations. BSEB papers include a significant objective (multiple-choice) section along with
    subjective questions, so preparation needs both speed and written answers. The matric and intermediate exams are
    usually held in February, earlier than many parents expect, which means revision has to start well before the
    winter. Students may take their papers in Hindi or English, and a tutor who can teach comfortably in both is often
    the best fit.
  </p>

  <h3>ICSE and ISC</h3>
  <p>
    A smaller number of Patna schools follow the CISCE curriculum. ICSE and ISC ask for longer and more precise written
    answers, especially in English, History and the sciences, and the syllabus is broad. We match tutors who know the prescribed
    texts and project requirements.
  </p>

  <h2 id="pt-classes">Tuition needs, class by class</h2>

  <h3>Classes 1 to 5</h3>
  <p>
    At this age, the aim is reading fluently, writing neatly, and being comfortable with numbers. A tutor who sits with the
    child for an hour three or four evenings a week, checks homework and builds good habits is usually what families want.
    For children in English-medium schools whose home language is Hindi, Bhojpuri, Magahi or Maithili, gentle daily
    practice in reading English aloud makes a large difference.
  </p>

  <h3>Classes 6 to 8</h3>
  <p>
    Middle school is where Mathematics and Science start to separate students. Topics like fractions, integers, basic
    algebra and simple equations are the foundation for everything that follows. Before any "foundation" course, make sure
    the school syllabus is truly understood; a child secure in Class 7 Mathematics copes with foundation material later.
  </p>

  <h3>Classes 9 and 10</h3>
  <p>
    Class 9 is often the year a Patna student first joins a coaching class, and also the year school Mathematics and
    Science become noticeably harder. Trying to do both without support can leave gaps in each. A home tutor at this
    stage typically keeps the school syllabus on track, prepares the student for the matric or CBSE Class 10 exam, and
    makes sure coaching work does not crowd out board preparation.
  </p>

  <h3>Classes 11 and 12</h3>
  <p>
    For many Patna families, the senior classes are where tuition matters most, especially in the science stream. Class 11 is
    the difficult year: the jump from Class 10 is sharp, and a large part of the JEE and NEET syllabus is taught in it.
    Students who fall behind in Class 11 Physics or Maths often struggle for the rest of their preparation. We usually
    suggest a specialist tutor for each difficult subject rather than one tutor for everything.
  </p>

  <h2 id="pt-jee-neet">JEE and NEET preparation without leaving home</h2>
  <p>
    Every year many Patna families weigh the same decision: send their child to Kota or Delhi for two years of coaching,
    or keep them in Patna. Moving away suits some students, but it is expensive, and not every sixteen-year-old copes
    well alone. Plenty of families decide that their child studies better at
    home, with local coaching and a home tutor filling the gaps. That arrangement works when the tutor has a clear role:
  </p>
  <ul>
    <li><strong>Clearing doubts from coaching.</strong> Large coaching batches move fast. A tutor who goes through the student's own coaching modules and test papers each week makes sure nothing is left half-understood.</li>
    <li><strong>Balancing boards and the entrance exam.</strong> Class 12 students still need a good board result. A tutor can plan revision so that board and entrance preparation reinforce each other.</li>
    <li><strong>Rescuing one weak subject.</strong> A student may be comfortable in Chemistry and Biology and struggling in Physics. Focused one-to-one work on that one subject is usually a better use of money than extra hours everywhere.</li>
  </ul>
  <p>
    JEE Main is held in two sessions early in the year, and those who qualify go on to JEE Advanced. NEET UG is usually
    held in May. For NEET, Biology carries the most marks and is almost entirely NCERT-based, so line-by-line NCERT work
    matters more than extra question banks; see our note on
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">an NCERT-first approach to NEET Biology</a>. For JEE, our
    topic-wise guides for <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">Physics</a> and
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">Maths</a> are a useful starting point to discuss with a tutor.
  </p>

  <h2 id="pt-medium">Moving from Hindi medium to English medium</h2>
  <p>
    Many Patna students change medium at some point: from a Hindi-medium school to an English-medium one, from BSEB to
    CBSE after Class 10, or into English-language coaching material for JEE and NEET. The subject knowledge is usually
    there. What slows them down is reading questions quickly in English, understanding technical terms, and writing
    answers confidently.
  </p>
  <p>A tutor who has helped students through this change will usually:</p>
  <ul>
    <li>teach new terms in both languages at first (for example, explaining "velocity" alongside its Hindi meaning) and then gradually drop the Hindi;</li>
    <li>have the student read questions aloud and restate them in their own words, so that comprehension is checked, not assumed;</li>
    <li>build a short personal glossary for each subject, revised every week;</li>
    <li>practise writing answers in simple, correct English rather than memorised paragraphs.</li>
  </ul>
  <p>
    Most students settle in within a few months with this kind of support. For confidence in speaking, our guide to
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English for students</a> has exercises that can be
    done at home.
  </p>

  <h2 id="pt-subjects">Subjects Patna families ask for</h2>
  <p>
    In a city so focused on engineering and medical entrance, Physics, Chemistry, Mathematics and Biology are the subjects
    parents ask about first, especially in Classes 9 to 12. We also arrange tutors for English, Hindi, Sanskrit and Social Science for board classes, Accountancy and Economics for commerce
    students, and Computer Science, as well as primary classes, where one tutor usually covers all subjects.
  </p>
  <p>
    In <strong>Mathematics</strong>, gaps build on each other, so a tutor should find where understanding first broke down,
    even if that is two classes back. In <strong>Physics</strong>, the aim is reasoning from the concept, not memorising
    formula sheets. <strong>Chemistry</strong> needs three approaches at once: numericals for Physical, reaction patterns
    for Organic, and careful NCERT reading for Inorganic. For Class 10 Science, our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 Science notes</a> are a helpful companion to
    tuition, and much of that material also serves BSEB students.
  </p>

  <h2 id="pt-mode">Home tuition, online tuition, or both</h2>
  <p>
    Home tuition is the first choice for most Patna families, and it suits younger children, students who lose focus on a
    screen, and subjects that need a lot of written working.
  </p>
  <p>
    Online tuition has its place too. For a specialist subject, such as advanced JEE Mathematics or a particular board's
    Literature syllabus, the best available tutor may not live in Patna at all. Online sessions also help when travel is
    difficult: in the May–June heat, when monsoon rain waterlogs roads, or around Chhath and other festivals.
  </p>
  <p>
    Many families settle on a hybrid: the tutor comes home two or three times a week, and a short online session is added
    for doubts before a test. Our article on
    <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring</a> covers the trade-offs in more
    detail.
  </p>

  <h2 id="pt-fees">What home tuition costs, and how to get value</h2>
  <p>
    Across NXTutors, most sessions cost between <strong>₹800 and ₹2,500 an hour</strong>. The fee for any particular
    tutor depends on:
  </p>
  <ul>
    <li><strong>The class.</strong> Primary and middle-school tuition sits at the lower end; Classes 11 and 12 higher.</li>
    <li><strong>The subject and goal.</strong> Entrance-level Physics or Mathematics costs more than school-level support in the same subject.</li>
    <li><strong>The tutor's experience.</strong> Tutors with many years of board and entrance teaching, and good reviews, charge more.</li>
    <li><strong>Travel.</strong> A tutor who lives nearby can often offer a better rate than one who crosses the city.</li>
    <li><strong>How often, and how long.</strong> Many tutors reduce the hourly rate for regular weekly sessions or a monthly arrangement.</li>
  </ul>
  <p>
    If you are working to a fixed monthly amount, it is often better to choose fewer, longer sessions (say, three
    sessions of ninety minutes a week) than five short ones. A longer session leaves time to teach, practise and check,
    and the tutor spends less time travelling. Put the budget where the difficulty is: one strong Physics tutor may do
    more good than cheaper help in four subjects. You see every shortlisted tutor's fee before
    the demo. Our <a href="{{ url('/pricing-guide') }}">pricing guide</a> breaks costs down further.
  </p>

  <h2 id="pt-choose">Questions to ask before you decide</h2>
  <p>Use the demo class to answer these for yourself:</p>
  <ol>
    <li><strong>Did the tutor ask what the student is doing in school and in coaching</strong> before starting? A good tutor wants to know the whole timetable.</li>
    <li><strong>Did they check the student's understanding with a question or two</strong>, instead of teaching from the beginning of the chapter?</li>
    <li><strong>Is the language right?</strong> Could the student follow comfortably, whether the lesson was in Hindi, English or a mix?</li>
    <li><strong>Do they know the board?</strong> Ask how the BSEB objective section or the CBSE case-based questions should be approached this year.</li>
    <li><strong>Did the student solve problems themselves</strong> during the lesson, or only watch?</li>
    <li><strong>Did they propose a plan</strong> for the next four weeks, with a way to measure progress?</li>
  </ol>
  <p>
    If the demo leaves you unsure, say so. We will arrange another tutor from the shortlist at no cost.
  </p>

  <h2 id="pt-safety">Safety and verification</h2>
  <p>
    Every tutor on NXTutors is ID-verified and goes through a profile check before being suggested to a family, and we
    continue to track reviews and reliability once lessons begin. For home tuition, we suggest a few simple habits: hold
    sessions when a parent or another adult is at home, use a common room rather than a bedroom, and keep the tutor's
    details and schedule where the family can see them. If anything about a tutor's behaviour worries you, contact us
    and we will act promptly.
  </p>

  <h2 id="pt-calendar">Planning around the Patna school year</h2>
  <p>
    Most CBSE schools in Patna begin their new session in April, and BSEB classes follow a broadly similar year. A typical
    year for a student in a board or entrance class looks like this:
  </p>
  <ul>
    <li><strong>April to June:</strong> the best time to start with a tutor. The syllabus is fresh, and the summer holidays give time to repair gaps, although the afternoons are very hot, so morning or evening slots work better.</li>
    <li><strong>July to September:</strong> the monsoon months. Keep a regular rhythm and agree with the tutor in advance on switching to online when heavy rain makes travel difficult.</li>
    <li><strong>October to November:</strong> Durga Puja, Diwali and Chhath fall in these months, and many families travel or host relatives. Plan lighter weeks around the festivals and make up the time before or after.</li>
    <li><strong>December to January:</strong> finish the syllabus and move to full papers. BSEB students especially need to be revising by now, since their exams come early.</li>
    <li><strong>February to May:</strong> BSEB matric and intermediate exams (usually February), CBSE board exams from February, JEE Main in two sessions early in the year, and NEET UG usually in May.</li>
  </ul>
  <p>
    Starting in April gives a tutor a full year to work with. Starting later still helps, with more focus on practice.
  </p>

  <h2 id="pt-start">Getting started</h2>
  <p>
    Tell us the student's class, board, medium and subjects, your locality in Patna, and the times that suit you around
    school and coaching. We will suggest two or three tutors, you choose one for a free demo, and you decide after that.
    You can browse <a href="{{ url('/tutors') }}">all tutors</a> or book a
    <a href="{{ url('/demo-class') }}">free demo class</a> now.
  </p>
  <p class="pt-note">
    Looking outside Patna? We also arrange tutors in <a href="{{ url('/city/ranchi') }}">Ranchi</a>,
    <a href="{{ url('/city/tata') }}">Jamshedpur</a> and <a href="{{ url('/city/kolkata') }}">Kolkata</a>, and in
    <a href="{{ url('/city') }}">cities across India</a>.
  </p>
</article>

<style>
  .pt-guide{margin-top:40px;color:#fff;line-height:1.7;max-width:860px}
  .pt-guide h2{font-size:24px;font-weight:900;margin:36px 0 12px;scroll-margin-top:90px}
  .pt-guide h3{font-size:18px;font-weight:800;margin:22px 0 8px}
  .pt-guide p,.pt-guide li{opacity:.9}
  .pt-guide ul,.pt-guide ol{padding-left:20px}
  .pt-guide li{margin:6px 0}
  .pt-guide a{color:#c9d6ff}
  .pt-lede{font-size:17px}
  .pt-toc{margin:18px 0;padding:14px 16px;border:1px solid rgba(255,255,255,.14);border-radius:14px;font-size:14px;line-height:2}
  .pt-note{margin-top:20px;font-size:14px;opacity:.8}
</style>
