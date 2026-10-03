{{--
  Long-form guide for the "English home tutor Patna" subject page. Byline:
  NXTutors Academic Team. No school, coaching institute, person or society is
  named.

  Exam facts reuse the checked statements on the national english-home-tutor
  page, which cites (fetched 1 Oct 2026):
  - CBSE English Language and Literature (184), Class X 2026-27,
    cbseacademic.nic.in/web_material/CurriculumMain27/SecPart1/English_LL_SecP1_2026-27.pdf
    (reading 20: discursive passage and case-based factual passage with a
    chart or data; writing and grammar 20 = grammar 10, formal letter 5,
    analytical paragraph 5; literature 40; internal 20 incl. listening and
    speaking 5).
  - CBSE English Core (301), XI-XII 2026-27, cbseacademic.nic.in
    (XI: reading 26, grammar and creative writing 23, literature 31).
  - CISCE ICSE English (exam year 2028) and ISC English (801), cisce.org.
  - Cambridge IGCSE 0500/0510 (2027-2029), cambridgeinternational.org; IB
    Language A: language and literature, ibo.org.
  BSEB (matric and intermediate) is described generally only, as on the Patna
  city hub. Local facts only from database/seo-content/areas/patna-research.json
  and patna-zone-guides.json. Only the allowed fee sentence.
  Area links render only when that Patna area page exists and is active.
--}}
@php
  $penSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $penA = function (string $slug, string $label) use ($penSlugs) {
      return in_array($slug, $penSlugs, true)
          ? '<a href="' . e(url('/city/patna/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pen-guide" aria-labelledby="penGuideTitle">
  <h2 id="penGuideTitle">English home tutor in Patna: from the board paper to confident speaking</h2>

  <p class="nx-guide__lede">
    Many Patna students think in Hindi, speak Bhojpuri, Magahi or Maithili at home and are examined in English. Some
    are strong readers who lose marks on letter formats; others understand every lesson but hesitate to write a full
    paragraph; a few need spoken English for interviews as much as for the board. Before we look for anyone, we ask
    which board your child sits (BSEB, CBSE, ICSE or ISC, or an international course), which skill is weakest, and
    where you live. Then we send two or three English tutors who fit, with their fees shown, and the first class with
    the one you choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pen-boards">Boards</a> ·
    <a href="#pen-cbse10">CBSE Class 10</a> ·
    <a href="#pen-bseb">BSEB English</a> ·
    <a href="#pen-bridge">Hindi to English</a> ·
    <a href="#pen-speak">Speaking</a> ·
    <a href="#pen-young">Classes 1 to 5</a> ·
    <a href="#pen-senior">Classes 11 and 12</a> ·
    <a href="#pen-where">Six localities</a> ·
    <a href="#pen-mode">Home or online</a> ·
    <a href="#pen-demo">The demo</a> ·
    <a href="#pen-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pen-boards">How is English examined on each Patna board?</h2>
  <p>
    Patna students sit the Bihar board, CBSE, CISCE's ICSE and ISC, and a smaller number follow IB or Cambridge
    IGCSE. The same word, English, means a different paper on each.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>English on the boards Patna students sit, at Class 10 and Class 12, and what the tutor should bring</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Class 10</th><th scope="col">Class 12</th><th scope="col">The tutor should bring</th></tr>
    </thead>
    <tbody>
      <tr><td>BSEB</td><td>English in the matric examination</td><td>English in the intermediate examination</td><td>The board's prescribed books and its own model and past papers</td></tr>
      <tr><td>CBSE</td><td>English Language and Literature: 80 in the paper, 20 in school</td><td>English Core: 80 in the paper, 20 for listening, speaking and a project</td><td>The NCERT readers and CBSE sample papers</td></tr>
      <tr><td>CISCE</td><td>ICSE: separate language and literature papers, 80 each plus internal marks</td><td>ISC: two three-hour papers of 80, each with project work</td><td>Set texts and specimen papers from cisce.org</td></tr>
      <tr><td>Cambridge; IB</td><td>IGCSE First Language (0500) or Second Language (0510/0511)</td><td>IB Language A: unseen analysis, a comparative essay and an oral</td><td>Past papers and the school's entry decision</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pen-cbse10">CBSE Class 10 English: where are the 80 marks?</h2>
  <p>
    CBSE's 2026-27 curriculum splits the Class 10 board paper into three blocks. Knowing the split lets a tutor give
    each block the time it deserves instead of spending every lesson on the chapter the school happens to be teaching.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 English Language and Literature, 2026-27: marks and what to practise</caption>
    <thead>
      <tr><th scope="col">Block</th><th scope="col">Marks</th><th scope="col">What it asks</th><th scope="col">Practice that pays</th></tr>
    </thead>
    <tbody>
      <tr><td>Reading</td><td>20</td><td>A discursive passage and a case-based factual passage with a chart or data</td><td>One unseen passage a week under time, answers checked against the text</td></tr>
      <tr><td>Grammar</td><td>10</td><td>Items drawn from the syllabus grammar list</td><td>Errors from the student's own writing, fixed pattern by pattern</td></tr>
      <tr><td>Writing</td><td>10</td><td>A formal letter (5) and an analytical paragraph on a chart, map or graph (5)</td><td>Format learned once, then content and linking words each week</td></tr>
      <tr><td>Literature</td><td>40</td><td>First Flight and Footprints without Feet</td><td>Answers planned in points, kept to the word limit, with a reference to the text</td></tr>
      <tr><td>Internal assessment</td><td>20</td><td>Set by the school, including 5 for listening and speaking</td><td>Short spoken summaries at the end of lessons</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Literature is half the paper, and it is where a Patna student who knows the story in Hindi but writes a thin
    English answer loses the most. Two planned literature answers a week, marked for length and relevance, are a
    better use of lesson time than extra grammar worksheets.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pen-bseb">What should a BSEB student's English tutor do?</h2>
  <p>
    The Bihar School Examination Board conducts the matric examination at Class 10 and the intermediate examination
    at Class 12, and it sets its own English syllabus and paper. We keep our advice on those papers general. A tutor
    for a BSEB student should work from the board's prescribed books and its own model and past papers, teach in the
    language the student reads most easily until English takes over, and take formats and dates only from the board's
    official website, since they change.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pen-bridge">Moving from Hindi medium to English medium</h2>
  <p>
    A student moving from Hindi-medium study into English-medium books needs a tutor who explains in both languages at
    first and then lets the Hindi fall away. In practice that bridge has four parts:
  </p>
  <ol>
    <li><strong>Translation both ways.</strong> A short Hindi paragraph turned into English and an English one turned back, which shows exactly where sentence structure breaks.</li>
    <li><strong>A reading diary.</strong> Ten minutes of English reading every day at home, with two new words and one sentence about what was read.</li>
    <li><strong>Frames for answers.</strong> Opening lines and linking phrases for letters, paragraphs and literature answers, used until they become natural.</li>
    <li><strong>A cut-off date.</strong> An agreed point, often after the first term, from which the whole lesson runs in English.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pen-speak">Can a home tutor help with spoken English too?</h2>
  <p>
    Yes, and it fits naturally into board preparation, since CBSE, ISC and ICSE all give marks for listening and
    speaking. A tutor can end each lesson with a two-minute spoken summary of the day's passage, then build up to short
    talks and question-and-answer practice. Families who want spoken confidence for its own sake should say so in the
    request, because it shapes the choice of tutor. Our
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide for students</a> explains what works.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pen-young">What about younger children in Classes 1 to 5?</h2>
  <p>
    At this stage the job is reading, not exam technique. A child who guesses at words, skips lines or avoids books
    needs short, frequent practice: sounding out new words, reading a page aloud to an adult who corrects gently, and
    retelling the story in their own sentences. Twenty to thirty minutes of focused work does more than a full hour. For
    a child who hears little English at home, a tutor who talks through pictures and stories in simple English, with a
    Hindi word only when the child is stuck, builds listening as well as reading. Ask for a primary specialist rather
    than a senior-class tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pen-senior">English in Classes 11 and 12: CBSE, ISC and the international courses</h2>
  <p>
    CBSE English Core in Class 11 gives 26 marks to reading, 23 to grammar and creative writing and 31 to literature
    from Hornbill and Snapshots; in Class 12 grammar drops out and literature rises. ISC English asks for a
    composition of 400 to 450 words from a choice of six, directed writing and a proposal, plus a separate literature
    paper. For IGCSE, confirm whether your child is entered for First Language or Second Language English, and for the
    IB, expect unseen-text analysis and a 15-minute individual oral. Specialists for these courses are fewer in Patna,
    so an online tutor is often the answer. The national <a href="{{ url('/english-home-tutor') }}">English home
    tutor</a> guide covers every course in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pen-where">How does an English tutor get to six Patna localities?</h2>
  <p>
    Only part of the Patna Metro Blue Line is open, so most tutors still travel by two-wheeler, auto or car, and the
    right match is often someone from your own stretch of the city. The
    <a href="{{ url('/city/patna') }}">Patna home tuition page</a> covers every locality.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Patna localities: the homes an English tutor visits and how to plan the slot</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Plan for</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $penA('sri-krishna-puri', 'Sri Krishna Puri') !!}</td><td>Flats in the north, older houses in the inner lanes, beside Boring Road</td><td>Evening traffic where the colony meets Boring Road; a fixed weekday slot</td></tr>
      <tr><td>{!! $penA('patliputra-colony', 'Patliputra Colony') !!}</td><td>A cooperative colony of independent houses with newer apartment buildings</td><td>A tutor based in the colony or next door for weekday classes</td></tr>
      <tr><td>{!! $penA('raja-bazar', 'Raja Bazar') !!}</td><td>Two- and three-bedroom flats in small complexes on Bailey Road</td><td>Metro works under Bailey Road; a slot outside the evening peak</td></tr>
      <tr><td>{!! $penA('rajendra-nagar', 'Rajendra Nagar') !!}</td><td>A planned colony on numbered roads with parks between blocks</td><td>Share the road number and house name; avoid train rush near the terminal</td></tr>
      <tr><td>{!! $penA('patna-city', 'Patna City') !!}</td><td>Older houses in close-built lanes</td><td>A lane landmark and phone number; a two-wheeler or e-rickshaw beats a car</td></tr>
      <tr><td>{!! $penA('anisabad', 'Anisabad') !!}</td><td>Flats of one to four bedrooms, plotted homes and builder floors</td><td>A tutor from your side of the roundabout, which is slow at peak hours</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone guides for <a href="{{ url('/city/patna/zone/boring-road-patliputra') }}">Boring Road and
    Patliputra</a>, <a href="{{ url('/city/patna/zone/gandhi-maidan-ashok-rajpath-old-patna') }}">Gandhi Maidan,
    Ashok Rajpath and Old Patna</a> and <a href="{{ url('/city/patna/zone/anisabad-gardanibagh-phulwari') }}">Anisabad,
    Gardanibagh and Phulwari</a> add landmarks and quiet hours. Our
    <a href="{{ url('/blog/north-and-west-patna-tuition-guide') }}">north and west Patna</a> and
    <a href="{{ url('/blog/south-and-old-patna-tuition-guide') }}">south and old Patna</a> tuition guides compare the
    two halves of the city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pen-mode">Home or online English tuition in Patna?</h2>
  <p>
    Online English works well from about Class 3 upwards if written work reaches the tutor before each session, through
    photos of the notebook or a shared document. It also opens up ISC, IGCSE and IB specialists who may live in another
    part of Patna or another city. Home lessons are better for young children learning to read, for a student in the
    first months of a Hindi-to-English switch, and for anyone whose speaking improves face to face. Where the most suitable
    tutor lives across the city, one home visit a week and one online session is a sensible split, and it avoids
    crossing the Anisabad roundabout or Bailey Road at the worst hour twice a week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pen-demo">How can you judge the tutor in one demo class?</h2>
  <ul>
    <li><strong>Diagnosis:</strong> did the tutor look at a marked school answer before starting?</li>
    <li><strong>Language:</strong> could your child follow, whether the lesson ran in Hindi, English or both, and did it lean towards English by the end?</li>
    <li><strong>Output:</strong> did your child write a paragraph or speak at length, not just listen?</li>
    <li><strong>Paper knowledge:</strong> could the tutor explain how the BSEB, CBSE or CISCE English paper for your child's class is set?</li>
    <li><strong>Next step:</strong> did you leave with homework the tutor will mark and a plan for the month?</li>
  </ul>
  <p>
    If the answer to these is no, tell us. We arrange a demo with the next shortlisted tutor, and a later change of
    tutor is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pen-fees">What does an English home tutor in Patna cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees, which follow the class, the board, the tutor's experience with its paper, travel at your hour and how often
    you meet. You see each fee on the shortlist before the demo; the
    <a href="{{ url('/blog/home-tuition-fees-patna') }}">Patna home tuition fees</a> article explains more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pen-send">What to send us</h2>
  <p>
    Send the class and board, the skill that worries you (reading, writing, grammar, literature or speaking), the
    language your child is most comfortable in, your colony and a landmark, your days and times, and a budget. We reply
    with two or three matched tutors and their fees, and tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. For other subjects, see our
    <a href="{{ url('/maths-home-tutor-patna') }}">maths</a> and <a href="{{ url('/science-home-tutor-patna') }}">science</a>
    tutor pages for Patna. English teachers in the city can find open requests on
    <a href="{{ url('/tuition-jobs/patna') }}">Patna tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
