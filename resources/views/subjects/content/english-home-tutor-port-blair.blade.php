{{--
  Long-form guide for the "English home tutor Port Blair" page (Sri Vijaya
  Puram, Andaman and Nicobar Islands). Byline in config: NXTutors Academic
  Team. No school, institute, person or literary author is named.

  Board position and mediums only from the research file's board_facts:
  southandaman.nic.in/education (secondary and senior secondary schools
  affiliated to CBSE; five mediums: English, Hindi, Tamil, Telugu, Bengali;
  the page's figures date from 2008). Medium details for Haddo and Aberdeen
  from the research file's area texts and zone_facts (archived
  education.andaman.gov.in pages). No school counts.
  CBSE facts reuse the checked statements on the national english-home-tutor
  page (cbseacademic.nic.in 2026-27): English Language and Literature (184),
  Class 10: reading 20, writing and grammar 20 (grammar 10, formal letter 5,
  analytical paragraph 5), literature 40, internal 20 incl. listening and
  speaking 5. English Core (301): Class 11 reading 26, grammar and creative
  writing 23, literature 31; Class 12 reading 22, creative writing 18,
  literature 40; internal 20 = listening 5, speaking 5, project 10.
  No tourism, no names, no distances or travel times, only the allowed fee
  sentence. Area links render only for active areas.
--}}
@php
  $pbeSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pbeA = function (string $slug, string $label) use ($pbeSlugs) {
      return in_array($slug, $pbeSlugs, true)
          ? '<a href="' . e(url('/city/port-blair/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pbe-guide" aria-labelledby="pbeGuideTitle">
  <h2 id="pbeGuideTitle">English home tutor in Sri Vijaya Puram (Port Blair): a board paper, a second language and the confidence to speak it</h2>

  <p class="nx-guide__lede">
    In Sri Vijaya Puram, the Andaman capital still widely known as Port Blair, school is not taught in one language
    alone. The district's education page lists five mediums of instruction: English, Hindi, Tamil, Telugu and Bengali.
    So an English tutor here may be teaching a board subject to one child and a second language to the next, sometimes
    in the same locality. Either way the paper is usually CBSE's, because the district's secondary and senior
    secondary schools are affiliated to CBSE. NXTutors asks what your child needs, whether that is board marks, reading
    and writing, or spoken confidence, then suggests two or three English tutors with their fees shown first. The
    first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pbe-need">Three kinds of need</a> ·
    <a href="#pbe-ten">Class 10 paper</a> ·
    <a href="#pbe-senior">Classes 11 and 12</a> ·
    <a href="#pbe-medium">From another medium</a> ·
    <a href="#pbe-writing">Writing</a> ·
    <a href="#pbe-speak">Listening and speaking</a> ·
    <a href="#pbe-young">Younger children</a> ·
    <a href="#pbe-week">A sample week</a> ·
    <a href="#pbe-local">Five localities</a> ·
    <a href="#pbe-mode">Home or online</a> ·
    <a href="#pbe-demo">The demo</a> ·
    <a href="#pbe-fee">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pbe-need">Which kind of English help does your child need?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Three common English needs in the city and what the tutor should focus on</caption>
    <thead>
      <tr><th scope="col">Need</th><th scope="col">Typical student</th><th scope="col">Tutor's focus</th></tr>
    </thead>
    <tbody>
      <tr><td>Board marks</td><td>Class 9 to 12 student in an English-medium section</td><td>Paper sections, timed writing, literature answers</td></tr>
      <tr><td>English as a second language</td><td>Child taught mainly in Hindi, Tamil, Telugu or Bengali</td><td>Vocabulary, sentence building, reading speed, then the board paper</td></tr>
      <tr><td>Spoken confidence</td><td>Any age, often before a change of school or stream</td><td>Conversation, pronunciation, short talks</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Tell us which row fits, because the right tutor for one is not always right for another.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbe-ten">How is the CBSE Class 10 English paper built?</h2>
  <p>
    English Language and Literature (184) has an 80-mark board paper and 20 marks of internal assessment. Under the
    2026-27 curriculum the 80 marks split into reading (unseen passages) 20, writing and grammar 20, and literature
    40. Within writing and grammar, grammar carries 10, a formal letter 5 and an analytical paragraph 5. Five of the
    internal marks are for listening and speaking.
  </p>
  <p>
    Literature is half the paper, so a student who has read the prescribed chapters closely and can quote and explain
    them has a strong base. Reading carries a quarter, and it is the section where students from other mediums often
    lose time. The analytical paragraph, which asks a student to describe a chart or data in a short structured
    paragraph, is worth practising every week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbe-senior">What changes in English Core in Classes 11 and 12?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE English Core (301), 2026-27: theory marks by section</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Class 11</th><th scope="col">Class 12</th></tr>
    </thead>
    <tbody>
      <tr><td>Reading</td><td>26</td><td>22</td></tr>
      <tr><td>Grammar and creative writing</td><td>23</td><td>18 (creative writing only)</td></tr>
      <tr><td>Literature</td><td>31</td><td>40</td></tr>
      <tr><td>Internal assessment</td><td colspan="2">20: listening 5, speaking 5, project 10</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Class 12 literature rises to 40 marks, so the second year rewards close reading and well-organised long answers.
    Creative writing formats, such as notices, invitations, letters and articles, follow set conventions that a tutor can
    drill quickly. Students who also study physics or accountancy often neglect English in Class 12; a short weekly
    session protects marks that count in every percentage.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbe-medium">What if your child studied in another medium?</h2>
  <p>
    The research we hold for the city notes Telugu-medium and Hindi-medium schooling at Haddo and a Tamil-medium
    primary school on the Aberdeen side. A child who has studied in one of these languages and then moves into an
    English-medium section, or simply faces English-only papers later, needs a plan that builds the language before the
    exam formats. A good plan runs in this order:
  </p>
  <ol>
    <li><strong>Reading aloud every lesson,</strong> a short passage, with new words written down and used in a sentence.</li>
    <li><strong>Sentence patterns before essays:</strong> tenses, articles and prepositions practised in short sentences until they sound right.</li>
    <li><strong>Subject vocabulary:</strong> the English terms for maths and science, since the other subjects will be answered in English as well.</li>
    <li><strong>Then the board formats,</strong> letter, analytical paragraph and literature answers, once sentences are secure.</li>
  </ol>
  <p>
    Ask for a tutor who can explain a grammar point in your child's first language where that helps; we try to match
    that when you mention it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbe-writing">How should writing be practised?</h2>
  <p>
    Writing improves only when it is marked. A useful weekly cycle: the tutor sets one task in class, the student
    writes it under a time limit, the tutor marks it with two or three specific corrections, and the student rewrites
    it. Keep every draft in one folder so progress is visible to you as well. Short tasks done this way do more than a
    long essay written once a month.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbe-speak">How can a tutor build listening and speaking?</h2>
  <p>
    Listening and speaking carry internal marks in every CBSE class from 10 to 12, and they matter beyond the paper,
    in interviews and in class discussion. A tutor can start each lesson with a few lines of conversation in English,
    set a short talk on a familiar subject each week, and play a short recording for the student to summarise. Shy
    students often speak more freely one-to-one at home than in a classroom.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbe-young">What about younger children?</h2>
  <p>
    For Classes 1 to 5, reading habits matter more than grammar rules. A tutor should read with the child, ask simple
    questions about the story, and build phonics and handwriting where they are weak. In homes where another language
    is spoken, English stories read aloud two or three times a week make a visible difference within a term.
  </p>
  <p>
    For Classes 6 to 8, the bridge years, the focus shifts to reading longer passages without help, answering in
    complete sentences and writing a short paragraph with a clear opening line. A tutor can keep a small notebook of
    new words from each chapter, so the child revises them weekly rather than meeting each word once and forgetting it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbe-week">What does a sensible English week look like?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A sample week of English support for a Class 9 or 10 student</caption>
    <thead>
      <tr><th scope="col">Day</th><th scope="col">With the tutor</th><th scope="col">On their own</th></tr>
    </thead>
    <tbody>
      <tr><td>Early in the week</td><td>An unseen passage read aloud, then answered in writing; new words listed</td><td>Use five of the new words in sentences</td></tr>
      <tr><td>Midweek</td><td>One literature chapter: key points, a long answer planned and written</td><td>Re-read the chapter and note two quotations</td></tr>
      <tr><td>End of the week</td><td>A writing task under time, marked with two or three precise corrections</td><td>Rewrite the task using the corrections</td></tr>
      <tr><td>Every lesson</td><td>A few lines of conversation in English to start</td><td>Ten pages of any English book they enjoy</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two sessions a week can cover this if the reading and rewriting happen between visits. For a Class 12 student the
    same rhythm works with English Core formats and longer literature answers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbe-local">What should an English tutor know about five localities?</h2>
  <p>
    The <a href="{{ url('/city/port-blair') }}">Sri Vijaya Puram (Port Blair) page</a> lists every locality we cover.
  </p>
  <ul>
    <li><strong>{!! $pbeA('aberdeen-bazaar', 'Aberdeen Bazaar') !!}:</strong> the shopping centre, where homes sit above shops and in side lanes. Give the lane and the clock tower or a shop as a reference, and avoid the evening crowd.</li>
    <li><strong>{!! $pbeA('haddo', 'Haddo') !!}:</strong> schooling in English, Hindi and Telugu, so mention the medium. For a quarters block, give the block, quarter number and nearest gate.</li>
    <li><strong>{!! $pbeA('delanipur', 'Delanipur') !!}:</strong> a residential area where senior classes are often taken elsewhere in the city; the move to Class 11 is a common time to add English support.</li>
    <li><strong>{!! $pbeA('bathubasti', 'Bathubasti') !!}:</strong> houses and apartment buildings around a local bazaar; share the floor and flat number, and start before the evening rush.</li>
    <li><strong>{!! $pbeA('austinabad', 'Austinabad') !!}:</strong> on the edge of the city; a map pin helps, and an online lesson can replace a visit on wet monsoon evenings.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbe-mode">Does English tuition work online?</h2>
  <p>
    English is one of the easiest subjects to teach online. Passages and drafts can be shared on screen, writing is
    photographed and marked, and conversation practice needs nothing but a stable connection. Younger children and
    those just starting in English do better with someone beside them, at least at first. A tutor at home for one
    lesson and online for a second is a practical mix for senior students. The
    <a href="{{ url('/online-tutor-port-blair') }}">online tutors for Port Blair</a> page explains how it works, and the
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> comparison lays out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbe-demo">What should you look for in an English demo?</h2>
  <ul>
    <li>The tutor listens to your child read and speak before teaching.</li>
    <li>Your child writes something, even a short paragraph, and gets specific feedback on it.</li>
    <li>The tutor knows the section marks of the paper your child will sit.</li>
    <li>For a child from another medium, the tutor explains patiently and checks understanding.</li>
  </ul>
  <p>
    If the fit is wrong, another tutor from the shortlist can give the next demo, and switching later is free. See the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbe-fee">What does an English home tutor cost, and how do you start?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own fee,
    and you see it before booking. The <a href="{{ url('/blog/home-tuition-fees-port-blair') }}">home tuition fees in
    Port Blair</a> guide lists the questions worth asking.
  </p>
  <p>
    Send the class, the school's medium, what you want from English, your locality and the free afternoons; two or
    three tutors come back with fees, and you choose who gives the free <a href="{{ url('/demo-class') }}">demo
    class</a>. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. The national
    <a href="{{ url('/english-home-tutor') }}">English home tutor</a> page covers ICSE, ISC, IGCSE and IB English, and
    the <a href="{{ url('/blog/port-blair-home-tuition-guide') }}">Port Blair home tuition guide</a> walks through each
    zone. English teachers can find requests on <a href="{{ url('/tuition-jobs/port-blair') }}">Port Blair tuition
    jobs</a>.
  </p>
  </section>

  </div>
</article>
