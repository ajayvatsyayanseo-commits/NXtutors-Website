{{--
  Long-form guide for the "primary home tutor Chennai" page (Classes 1 to 5, all
  subjects). Written by the NXTutors Academic Team. Kept distinct from
  nursery-kg-home-tutor-chennai, class-6-8-home-tutor-chennai and the other
  cities' primary pages.

  Official sources:
  - IB PYP, ibo.org/programmes/primary-years-programme/ (ages 3 to 12,
    transdisciplinary framework, the Exhibition in the final year), as cited on
    the verified Gurgaon and Mumbai primary pages.
  - Cambridge Primary, cambridgeinternational.org (typically ages 5 to 11;
    optional assessments including Cambridge Primary Checkpoint), as cited there.
  - CISCE ICSE Examination Year 2028 Regulations
    (cisce.org/wp-content/uploads/2026/01/1.-Regulations.pdf): Classes I-VIII
    taught through school-chosen books, as cited on the verified Mumbai page.
  - Directorate of Government Examinations, Tamil Nadu (dge.tn.gov.in/aboutus.html,
    read 2 Oct 2026): conducts the board examinations for State Board students
    in Std X and XII. March 2026 SSLC question set (apply1.tndge.org question
    bank, SSLC_2026_Q.pdf): Part I language papers (Tamil and others), Part II
    English; Mathematics and Science papers printed in a Tamil and English
    version. No primary-level State Board rules are claimed.
  Local detail only from database/seo-content/zones/chennai.json,
  database/seo-content/areas/chennai-research.json, chennai-zone-guides.json
  and the Chennai city hub view (State Board schools follow the academic
  calendar the state announces; CBSE session opens in April). No school,
  society or people names. Fee range is the approved sentence.
  FAQs: faqs/primary-home-tutor-chennai.php.

  Area links render only when that Chennai area page exists and is active.
--}}
@php
  $prChSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $prChA = function (string $slug, string $label) use ($prChSlugs) {
      return in_array($slug, $prChSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="prChGuideTitle">
  <h2 id="prChGuideTitle">Class 1 to 5 home tutors in Chennai: reading in two languages, numbers that stick, and homework without tears</h2>

  <p class="nx-guide__lede">
    Primary school is where a child decides, quietly, whether they are "good at maths" or "bad at reading". A patient
    tutor in these years can change that story long before marks start to matter. For Chennai families the job has a
    local shape: many children juggle English with Tamil or another language, schools run on different boards and
    calendars, and the tutor has to reach your street by train, metro or two-wheeler at an hour when a seven-year-old
    can still concentrate. This guide from the NXTutors Academic Team covers the signs that a tutor would help, what
    to focus on class by class, how the boards differ, and how to judge a demo with a young child.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#prch-signs">Signs a tutor helps</a> ·
    <a href="#prch-bands">Class by class</a> ·
    <a href="#prch-boards">Boards in the primary years</a> ·
    <a href="#prch-homework">Homework or teaching?</a> ·
    <a href="#prch-lang">Tamil, Hindi and other languages</a> ·
    <a href="#prch-zones">Routes by zone</a> ·
    <a href="#prch-mode">Home or online</a> ·
    <a href="#prch-demo">The demo</a> ·
    <a href="#prch-fees">Fees</a> ·
    <a href="#prch-where">Where we match</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="prch-signs">What tells you a primary child would benefit from a tutor?</h2>
  <p>
    Look for patterns over a few weeks, not one bad test. These are the ones worth acting on:
  </p>
  <ul>
    <li><strong>Reading stalls.</strong> By Class 2 your child still guesses words from the picture, or reads aloud without being able to tell you what happened.</li>
    <li><strong>Counting on fingers past Class 3.</strong> Addition and subtraction facts are not yet automatic, so every sum takes all their attention.</li>
    <li><strong>Homework battles every evening.</strong> The work itself is short, but starting it takes an hour of argument.</li>
    <li><strong>The second language is slipping.</strong> Spelling tests in Tamil or Hindi come home with the same mistakes week after week.</li>
    <li><strong>A recent move or change of school</strong>, from another state, from abroad, or between boards, has left gaps nobody has mapped.</li>
  </ul>
  <p>
    If the trouble is mainly attention or behaviour across every subject, talk to the class teacher first. A tutor
    helps with learning gaps, not with every difficulty a child can have.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="prch-bands">What should a tutor focus on in each class?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Priorities for a primary tutor, Class 1 to Class 5</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Reading and language</th><th scope="col">Maths</th><th scope="col">Habits to build</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 1</td><td>Letter sounds, blending short words, reading simple sentences aloud</td><td>Counting objects, numbers to 100, adding and taking away with things to touch</td><td>Sitting for fifteen minutes; neat spacing between words</td></tr>
      <tr><td>Class 2</td><td>Reading short stories with expression; answering "why" questions</td><td>Place value, carrying and borrowing, telling the time</td><td>Packing the school bag the night before</td></tr>
      <tr><td>Class 3</td><td>Reading for meaning; writing four or five linked sentences</td><td>Times tables learned for real, simple fractions, measurement</td><td>Starting homework without a reminder</td></tr>
      <tr><td>Class 4</td><td>Paragraph writing, grammar in context, a reading log</td><td>Long multiplication and division, word problems, area and perimeter</td><td>Checking their own work before calling an adult</td></tr>
      <tr><td>Class 5</td><td>Comprehension with inference; letters and short essays</td><td>Fractions and decimals together, factors, early geometry</td><td>Planning a week's homework; revising before a test</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Environmental studies and science in these years are taught more effectively through talk, objects and drawing than through
    memorised question-answer lists. If the school sends home long answers to learn by heart, the tutor's job is to
    make sure your child understands them first.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="prch-boards">How do Chennai's boards differ in the primary years?</h2>
  <p>
    The city hub sorts Chennai's schools into four broad kinds of board, and each shapes primary teaching a little
    differently.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Primary years by board, and what a home tutor should adapt</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">What shapes Classes 1 to 5</th><th scope="col">What the tutor should adapt</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/tamil-nadu-board-tutor-chennai') }}">Tamil Nadu State Board</a></td><td>State textbooks and the school's own term tests</td><td>Teach from the state books in the medium your child learns in, and keep language reading regular</td></tr>
      <tr><td><a href="{{ url('/cbse-home-tutor-chennai') }}">CBSE</a></td><td>NCERT books and an emphasis on applying ideas; the session opens in April</td><td>Use NCERT exercises and everyday examples; build explanation, not just answers</td></tr>
      <tr><td><a href="{{ url('/icse-home-tutor-chennai') }}">ICSE</a></td><td>CISCE leaves the choice of books for Classes I to VIII to the school, often with heavier English</td><td>Work from the school's own books; extra reading and grammar practice pays off</td></tr>
      <tr><td><a href="{{ url('/ib-tutor-chennai') }}">IB PYP</a> and <a href="{{ url('/igcse-tutor-chennai') }}">Cambridge Primary</a></td><td>PYP is inquiry-led with an Exhibition in the final year; Cambridge Primary has optional Checkpoint assessments</td><td>Support projects and questions without doing the work; keep core reading and maths strong</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Tamil Nadu State Board schools follow the academic calendar the state announces each year, while CBSE schools
    begin in April. If you have one child on each board, mention it: the tutor will be planning around two different
    test seasons.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="prch-homework">Should the tutor finish homework or teach?</h2>
  <p>
    Both, in that order of caution. Homework shows what the school expects this week, so it is a useful starting
    point. But a tutor who simply sits beside your child while worksheets are completed is a paid supervisor, and
    the gaps underneath stay where they are. A healthy split for a one-hour session in Class 3 or above:
  </p>
  <ul>
    <li><strong>Ten minutes</strong> checking the day's homework, with your child explaining one answer aloud.</li>
    <li><strong>Thirty minutes</strong> on the gap the tutor has found: reading fluency, tables, word problems or writing.</li>
    <li><strong>Fifteen minutes</strong> of reading together, in English one day and in Tamil or the second language another.</li>
    <li><strong>Five minutes</strong> agreeing what your child will do alone before the next session.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="prch-lang">Tamil, Hindi and the other languages</h2>
  <p>
    Language is often the subject Chennai parents worry about most quietly. A family that speaks Telugu or Malayalam
    at home may have a child learning Tamil and English at school; a family new to the city may find Tamil itself the
    hurdle. The stakes rise later: on the State Board, the Class 10 examination from the Directorate of Government
    Examinations has a Part I language paper, Tamil or one of several other languages, alongside a separate English
    paper, and the maths and science papers are printed in both Tamil and English. CBSE and ICSE schools also teach
    a second and often a third language.
  </p>
  <p>
    If language is the main need, say so in the request. A tutor strong in maths is not automatically the right
    person for Tamil reading. Our <a href="{{ url('/english-home-tutor-chennai') }}">English home tutors in
    Chennai</a> page covers reading and writing in English in more depth, and the
    <a href="{{ url('/maths-home-tutor-chennai') }}">maths home tutors in Chennai</a> page does the same for number
    work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="prch-zones">How tutors reach primary families in each zone</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Routes and timing for after-school primary sessions in Chennai</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Typical route in</th><th scope="col">After-school tip</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/chennai/zone/adyar-besant-nagar-mylapore') }}">Adyar, Besant Nagar &amp; Mylapore</a></td><td>MRTS to Thirumayilai or Mandaveli, then a two-wheeler or a walk through the lanes</td><td>On temple festival days near the tank, move the lesson to the morning or online</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/t-nagar-nungambakkam-kodambakkam') }}">T Nagar, Nungambakkam &amp; Kodambakkam</a></td><td>Suburban train to Saidapet or Mambalam; Blue Line to Saidapet</td><td>Just after school hours suits both sides of the river bridge</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/velachery-guindy-tambaram') }}">Velachery, Guindy &amp; Tambaram</a></td><td>MRTS to Puzhuthivakkam or Velachery, or a two-wheeler from Nanganallur</td><td>Avoid the roads towards Velachery at peak hours</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/anna-nagar-kilpauk-aminjikarai') }}">Anna Nagar, Kilpauk &amp; Aminjikarai</a></td><td>Green Line to Anna Nagar Tower or Anna Nagar East</td><td>The avenue grid helps; book before the 2nd Avenue shops get busy</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/vadapalani-kk-nagar-porur') }}">Vadapalani, KK Nagar &amp; Porur</a></td><td>Green Line to Ashok Nagar and a short walk on numbered roads</td><td>A slot just after the evening rush at the pillar junction</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/perambur-kolathur-north-chennai') }}">Perambur, Kolathur &amp; North Chennai</a></td><td>Suburban train to Villivakkam, then an auto or a walk</td><td>Late afternoon, before roads near the station fill up</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="prch-mode">Home or online tuition for Classes 1 to 5?</h2>
  <p>
    Home suits Classes 1 to 3 most, when the tutor needs to watch handwriting, hear reading aloud and keep a
    restless child on task. From Class 4, a confident reader can manage some online sessions, especially for a
    specific subject such as English writing or a language, and online widens the choice when no suitable tutor
    lives near you. Keep online sessions to forty-five minutes, with a parent nearby, and use a laptop rather than a
    phone. Many families settle on home visits for maths and reading, and one short online slot for spelling or
    language practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="prch-demo">What should a demo with a young child look like?</h2>
  <ol>
    <li><strong>The tutor starts with a chat,</strong> not a test, and finds out what your child likes.</li>
    <li><strong>Your child reads aloud</strong> for a few minutes and the tutor notes where they stumble.</li>
    <li><strong>A short maths task</strong> shows whether the basics are automatic or still being worked out.</li>
    <li><strong>The tutor praises effort specifically</strong> ("you checked that one twice"), not just "good".</li>
    <li><strong>You hear a plain plan:</strong> what to fix first, how often to meet, and how you will see progress.</li>
  </ol>
  <p>
    The first class with the tutor you choose is a free demo, and switching later is free. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live; it is not a
    police or background check. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> lists more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="prch-fees">What does a primary home tutor cost in Chennai?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Primary lessons usually sit toward the lower end. The tutor's experience, the number of subjects, the journey at
    your hour and how many sessions a week you book all move the figure. Fees are shown before the demo; see the
    <a href="{{ url('/blog/home-tuition-fees-chennai') }}">Chennai home tuition fees guide</a> and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="prch-where">Where we match primary tutors in Chennai</h2>
  <p>
    In {!! $prChA('mylapore', 'Mylapore') !!}, older houses sit on narrow lanes near the tank, so tutors often arrive by
    two-wheeler or auto and walk the last stretch. {!! $prChA('saidapet', 'Saidapet') !!} has both a suburban station and
    two Blue Line stops, which gives families there a wide choice of tutors. Around its lake,
    {!! $prChA('madipakkam', 'Madipakkam') !!} is low-rise flats and houses on plotted streets, easy for a tutor from
    Velachery or Nanganallur on a two-wheeler.
  </p>
  <p>
    {!! $prChA('anna-nagar', 'Anna Nagar') !!}'s numbered avenues make any address easy to find, and
    {!! $prChA('ashok-nagar', 'Ashok Nagar') !!}, with its road-numbering system and Green Line station, is just as
    simple. In {!! $prChA('villivakkam', 'Villivakkam') !!}, densely built on both sides of the railway, tutors usually
    come by local train.
  </p>
  <p>
    Before Class 1, see <a href="{{ url('/nursery-kg-home-tutor-chennai') }}">nursery and KG tutors</a>; after Class 5,
    <a href="{{ url('/class-6-8-home-tutor-chennai') }}">Class 6 to 8 tutors in Chennai</a>. Tell us the class, board,
    subjects, home languages, locality and the afternoons that work; we shortlist two or three tutors with fees shown.
    <a href="{{ url('/demo-class') }}">Book a free demo</a>, browse <a href="{{ url('/tutors') }}">tutor profiles</a> or
    start from the <a href="{{ url('/city/chennai') }}">Chennai home tutors page</a>.
  </p>
  </section>

  </div>
</article>
