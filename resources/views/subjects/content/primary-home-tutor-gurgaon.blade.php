{{--
  Long-form guide for the "primary home tutor Gurgaon" page (Classes 1 to 5,
  all subjects). Written by the NXTutors Academic Team. No schools are named.
  Board facts are kept general and checked against official sources:
  IB PYP (ages 3 to 12, transdisciplinary framework with six themes, the
  Exhibition in the final year) from ibo.org/programmes/primary-years-programme;
  Cambridge Primary (typically ages 5 to 11, optional assessments including
  Cambridge Primary Checkpoint) from cambridgeinternational.org. NXTutors facts
  are limited to published policies (two or three matched tutors, free demo,
  free switching, fee shown before the demo, home tutoring across Gurugram and
  online across India, office in Sector 66). Fee range is the approved wording.
  FAQs render from faqs/primary-home-tutor-gurgaon.php.

  Area links render only when that Gurugram area page exists and is active, so
  renaming or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pr-guide" aria-labelledby="prGuideTitle">
  <h2 id="prGuideTitle">Primary home tutors in Gurgaon (Gurugram): Class 1 to 5, all subjects</h2>

  <p class="nx-guide__lede">
    A good primary home tutor for a child in Class 1 to 5 does three jobs: builds reading and number sense, keeps
    English, maths, EVS and Hindi from slipping behind the class, and turns homework into a calm daily habit. At this
    age one patient tutor usually teaches every subject in three to five short sessions a week, at home rather than online. This
    guide, from the NXTutors Academic Team in Sector 66, Gurugram, explains what a primary tutor should actually do
    in each subject, how the CBSE, ICSE, IB PYP and Cambridge Primary approaches differ, how often to book sessions,
    what a demo with a young child should look like, and how to keep home tuition safe in a Gurgaon society.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pr-need">Does my child need a tutor?</a> ·
    <a href="#pr-subjects">Subject by subject</a> ·
    <a href="#pr-boards">Boards at primary level</a> ·
    <a href="#pr-classes">Class 1 to Class 5</a> ·
    <a href="#pr-homework">Homework habits</a> ·
    <a href="#pr-often">How often</a> ·
    <a href="#pr-mode">Home or online</a> ·
    <a href="#pr-demo">The demo</a> ·
    <a href="#pr-safety">Safety</a> ·
    <a href="#pr-fees">Fees</a> ·
    <a href="#pr-where">Where we match</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pr-need">Does a child in Class 1 to 5 need a home tutor?</h2>
  <p>
    Many do not. A child who reads comfortably, enjoys numbers and finishes homework without a nightly battle is
    usually best left to school, play and reading at home. A primary tutor earns their place when something specific
    is getting in the way, and the earlier that is spotted, the smaller the fix.
  </p>
  <p>The common reasons Gurgaon parents ask us for a primary tutor:</p>
  <ul>
    <li><strong>Reading has stalled.</strong> The child guesses words from the first letter, avoids reading aloud, or reads fluently but cannot say what the passage was about.</li>
    <li><strong>Maths facts are shaky.</strong> Counting on fingers in Class 3, confusion over place value, or a sudden drop when word problems arrive.</li>
    <li><strong>Hindi or a second language is new.</strong> Families who have moved from another state or from abroad often find Hindi is the subject where a child is furthest behind.</li>
    <li><strong>Homework has become a fight.</strong> Both parents work, evenings are short, and the hour after school has turned into a daily argument.</li>
    <li><strong>A change of school or board.</strong> Moving into a Gurgaon school mid-year, or from an international curriculum into CBSE, leaves gaps that the new class assumes are already filled.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pr-subjects">What a primary tutor covers, subject by subject</h2>
  <p>
    At primary level we look for one tutor who can teach all the core subjects well, rather than separate tutors for
    each. A young child settles faster with one familiar adult, and a single tutor sees how a reading difficulty is
    also causing trouble in maths word problems and EVS answers.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Reading and phonics</h3>
  <p>
    In Classes 1 and 2 the tutor should be teaching letter sounds, blending and common tricky words in a clear order,
    with short daily reading from books at the right level. From Class 3 the focus moves to fluency and understanding:
    reading aloud with expression, then answering "why" and "what next" questions. A tutor who only sets
    comprehension worksheets is skipping the step most struggling readers actually need.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>English</h3>
  <p>
    Grammar in primary English is best learnt through the child's own writing: full sentences, capital letters and
    full stops, then short paragraphs, then simple stories and letters. Spelling lists help only when the tutor
    connects them to sound patterns. Look for a tutor who reads the child's school notebook each week and corrects
    one or two habits at a time, not everything at once.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Maths</h3>
  <p>
    Number sense matters more than speed: place value, what addition and subtraction really mean, times tables
    learnt with understanding, then fractions, measurement and simple geometry by Class 4 and 5. Good primary maths
    tutors use objects, drawings and number lines before worksheets. For children who are ahead or behind in maths
    specifically, see our <a href="{{ url('/maths-home-tutor/class-5') }}">Class 5 maths tutor</a> page.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>EVS</h3>
  <p>
    Environmental studies (or science and social studies, depending on the school) asks children to observe,
    describe and explain: plants, animals, water, family, neighbourhood and maps. The tutor's job is to get the child
    talking and writing answers in their own words, not memorising the textbook's sentences. Short activities at home,
    such as sorting leaves or drawing a map of the society, work well here.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Hindi</h3>
  <p>
    Hindi is often the weakest subject for children new to Gurgaon or new to the language. The order matters: letters
    and matras first, then reading simple words and sentences aloud, then writing, then grammar. A tutor who can
    explain in English when the child is stuck, while keeping the lesson itself in Hindi, helps children who hear
    little Hindi at home.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pr-boards">CBSE, ICSE, IB PYP and Cambridge Primary: what changes for a tutor</h2>
  <p>
    Gurgaon primary schools follow several different approaches, and the right tutor adapts to the one your child's
    school uses. There are no board exams in primary school: in both CBSE and CISCE schools the first board exam comes
    at Class 10. So primary tutoring is about skills and confidence, not exam preparation.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How primary learning differs by school approach</caption>
    <thead>
      <tr><th scope="col">Approach</th><th scope="col">How learning is organised</th><th scope="col">What a tutor should do</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE schools</td><td>Subject by subject from textbooks the school chooses, with class tests and worksheets</td><td>Follow the school's books and chapter order; strengthen reading and number basics behind them</td></tr>
      <tr><td>ICSE (CISCE) schools</td><td>Subject by subject from the school's chosen textbooks, with written answers expected across subjects</td><td>Build clear written English early; keep pace with the school's chapter plan</td></tr>
      <tr><td>IB Primary Years Programme</td><td>An inquiry-based, transdisciplinary framework for ages 3 to 12, built around six themes, with the Exhibition, a group inquiry, in the final year</td><td>Support reading, writing and maths skills that feed the inquiry units; help the child research and explain, never do project work for them</td></tr>
      <tr><td>Cambridge Primary</td><td>A curriculum typically for ages 5 to 11 across subjects such as English, mathematics and science, with optional assessments including Cambridge Primary Checkpoint</td><td>Follow the school's stage and scheme of work; practise explaining reasoning in maths and science</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Tell us the programme and the class, and share the book list if you have it. That is more useful to a tutor than
    the school's name.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pr-classes">What changes from Class 1 to Class 5</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 and 2: learning to read and count</h3>
  <p>
    Sessions should be short, active and playful: 30 to 45 minutes, with a change of activity every ten minutes or
    so. The goals are phonics, early reading, writing letters and numbers correctly, and counting and simple sums with
    real objects.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 3 and 4: reading to learn</h3>
  <p>
    Children now have to read instructions and chapters on their own, and the gaps show. Tables, multiplication and
    division, longer written answers in English and EVS, and cursive writing all arrive. This is the stage where a
    tutor who notices a reading problem early saves a great deal of trouble later.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Class 5: getting ready for middle school</h3>
  <p>
    Fractions, decimals, larger numbers and longer word problems in maths; paragraph writing and grammar in English;
    more independent study. The tutor should start handing over: the child plans homework, checks their own work, and
    asks for help only where stuck. Children who leave Class 5 with that habit find Class 6 much easier.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pr-homework">Should a primary tutor help with homework?</h2>
  <p>
    Yes, but homework help is not the same as doing homework. A tutor who simply completes the worksheet with the child
    produces a neat notebook and a child who has learnt nothing. What good homework support looks like:
  </p>
  <ol>
    <li><strong>A fixed routine.</strong> Same days, same time, same place, ideally a table in a common room, with a short snack break between school and study.</li>
    <li><strong>The child reads the task first.</strong> The tutor asks what the question wants before anyone picks up a pencil.</li>
    <li><strong>The child attempts, the tutor checks.</strong> Mistakes are corrected by the child, with a hint, not by the tutor's pen.</li>
    <li><strong>A few minutes of skill-building.</strong> Every session keeps ten minutes for reading aloud, tables or Hindi letters, so tuition builds skills rather than only clearing the day's work.</li>
    <li><strong>A short note for parents.</strong> What was done, what was hard, what to practise before next time.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pr-often">How often should a Class 1 to 5 child have tuition?</h2>
  <p>
    Shorter and more frequent beats longer and rare at this age. As a starting point:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Typical primary tuition plans</caption>
    <thead>
      <tr><th scope="col">Situation</th><th scope="col">Sessions a week</th><th scope="col">Session length</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 1 and 2, reading or number support</td><td>3 to 4</td><td>30 to 45 minutes</td></tr>
      <tr><td>Classes 3 to 5, all subjects and homework</td><td>3 to 5</td><td>45 to 60 minutes</td></tr>
      <tr><td>One weak subject only (for example Hindi)</td><td>2</td><td>45 minutes</td></tr>
      <tr><td>New to the school or board</td><td>4 to 5 for the first month, then fewer</td><td>45 to 60 minutes</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Review after about a month. When reading, tables and homework are running smoothly, most families drop a session
    or two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pr-mode">Home or online tuition for young children?</h2>
  <p>
    For Classes 1 to 5, home tuition is usually the better choice. Young children need someone beside them to watch
    how they hold the pencil, form letters, point at words while reading and count on a number line. They also find
    it hard to stay focused on a screen for a full lesson. A tutor in the room keeps the child engaged and catches small
    habits before they become big ones.
  </p>
  <p>
    Online can still work in a few cases: a short Hindi or reading session with a parent sitting nearby, a family in a
    newer sector where a suitable tutor is too far to visit, or a Class 5 child who is already comfortable on a
    laptop. If you do go online, keep sessions to 30 to 40 minutes and have the child's notebook visible on camera. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor vs online tutor guide</a> compares the two in
    detail, and our <a href="{{ url('/online-tutor-gurgaon') }}">online tutoring for Gurgaon students</a> page covers the
    setup.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pr-demo">What should a demo class for a young child look like?</h2>
  <p>
    The first class is a free demo, and with a young child it tells you a great deal in a short time. Sit nearby for
    the whole demo. Watch for these:
  </p>
  <ul>
    <li><strong>A warm start.</strong> The tutor talks to your child for a few minutes before teaching and learns something about them.</li>
    <li><strong>A quick check of level.</strong> Asking the child to read a short passage aloud or solve two or three sums, before deciding what to teach.</li>
    <li><strong>The child does most of the work.</strong> Reading, writing, counting and answering, not listening to a lecture.</li>
    <li><strong>Patience with mistakes.</strong> No sighing, no "this is easy", no taking the pencil away.</li>
    <li><strong>Variety.</strong> A change of activity when attention drops, such as moving from a worksheet to a word game.</li>
    <li><strong>A clear summary for you.</strong> What the tutor noticed and what they would work on first.</li>
    <li><strong>Your child's reaction.</strong> Ask them afterwards whether they would like the tutor to come again.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> has the full
    list. If the demo does not feel right, tell us and we arrange a demo with the next tutor on the shortlist.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pr-safety">Safety for home tuition with a young child</h2>
  <p>
    Safety matters most at this age, because a young child cannot always tell you when something is wrong. We check
    each tutor's identity before shortlisting, and for primary tuition we recommend a few simple rules:
  </p>
  <ul>
    <li><strong>An adult at home for every session,</strong> not just the first few.</li>
    <li><strong>Classes in a common room,</strong> such as the dining table, with the door open.</li>
    <li><strong>Pre-approve the tutor on the society's visitor app,</strong> so every entry is logged and no time is lost at the gate.</li>
    <li><strong>All messages go through a parent's phone,</strong> never directly to the child.</li>
    <li><strong>Ask your child about tuition</strong> in a relaxed way, and take any reluctance seriously.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/choose-home-tutor-gurgaon-safety-checklist') }}">home tutor safety checklist for Gurgaon
    parents</a> covers ID checks, references, payments and warning signs in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pr-fees">What does a primary home tutor cost in Gurgaon?</h2>
  <p>
    Across NXTutors most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11 and 12,
    IB and IGCSE and JEE and NEET sit toward the upper end, and specialists for IB HL or JEE Advanced can charge more.
    For primary classes, the factors that move the fee are:
  </p>
  <ul>
    <li><strong>How many subjects</strong> the tutor covers, and whether homework support is included.</li>
    <li><strong>Session length and frequency.</strong> Many tutors offer a monthly arrangement for four or five sessions a week.</li>
    <li><strong>The tutor's experience</strong> with early reading and primary teaching.</li>
    <li><strong>Travel.</strong> A tutor in your own sector or society often charges less than one crossing the city at peak hours.</li>
  </ul>
  <p>
    You see each shortlisted tutor's fee before the demo. Our guide to
    <a href="{{ url('/blog/home-tuition-fees-gurgaon') }}">home tuition fees in Gurgaon</a> explains how to budget.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pr-where">Where we match primary tutors in Gurugram</h2>
  <p>
    For young children, a tutor who lives close by matters even more than it does for older students: regular short
    sessions only work if the tutor can arrive on time after school hours. In the older, denser parts of the city,
    such as {!! $ggA('dlf-phase-3', 'DLF Phase 3') !!}, {!! $ggA('south-city-1', 'South City 1') !!} and
    {!! $ggA('palam-vihar', 'Palam Vihar') !!}, primary tutors often teach several children within a short walk, and
    afternoon slots are easier to find. Along Golf Course Extension Road, in sectors such as
    {!! $ggA('sector-57', 'Sector 57') !!}, most homes are in gated societies, so sort out visitor entry before the
    demo. In New Gurugram and along Dwarka Expressway, in sectors such as {!! $ggA('sector-82', 'Sector 82') !!} and
    {!! $ggA('sector-106', 'Sector 106') !!}, ask us whether a tutor already teaches in your society; that is often the
    most reliable arrangement.
  </p>
  <p>
    Tell us your child's class, school programme, the subjects that need help, your sector or society and the times
    that work. We shortlist two or three primary tutors, you choose one for a free demo, and switching tutor later is
    free. Start from our page of <a href="{{ url('/city/gurugram') }}">home tutors in Gurgaon</a> or book a
    <a href="{{ url('/demo-class') }}">free demo class</a>.
  </p>
  </section>

  </div>
</article>
