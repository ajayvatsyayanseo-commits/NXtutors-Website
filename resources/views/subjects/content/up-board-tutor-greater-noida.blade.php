{{--
  Board hub: "UP Board tutor Greater Noida" (UPMSP High School and
  Intermediate). Byline: NXTutors Academic Team. No school, college,
  coaching, hospital, society, developer or people names. No exam dates,
  results, pass rates or candidate or school counts. No state entrance-exam
  page exists for Greater Noida, so Class 12 science links go to the JEE and
  NEET pages.

  Official sources (all upmsp.edu.in, read 2 Oct 2026; the Hindi PDFs are set
  in a Krutidev font and were read and translated by the writer):
  - https://upmsp.edu.in/AboutUs.aspx ("Historical Over View"): set up in 1921
    at Prayagraj by an act of the United Provinces Legislative Council; first
    examination 1923; 10+2 pattern from the start (High School after ten
    years, Intermediate after the +2 stage); head office at Prayagraj with
    regional offices; functions: recognise schools, prescribe courses and
    textbooks, conduct both examinations, grant equivalence to other boards'
    examinations; the state's Director of Education is ex-officio chairman;
    curriculum, examination, result, recognition and finance sub-committees.
  - https://upmsp.edu.in/Board_Syllabus.aspx (home menus on the same page):
    advance registration Classes 9 and 11; institutional and private
    registration Classes 10 and 12; attendance portal Classes 9-12; student
    links for syllabus, monthly syllabus, model papers, question bank,
    formative assessment; career guidance for agriculture, arts, commerce and
    science groups.
  - Downloads/Syllabus/Class10/901-Hindi-Class-10.pdf (2026-27): 70 written +
    30 internal; prose and poetry with their literary history, khand kavya,
    elements of poetic beauty, a Sanskrit section of 14 marks, letter 4,
    grammar 7, essay 7; Section A multiple choice 20 marks.
  - Downloads/Syllabus/Class10/917-English-Class-10.pdf: 70 + 30 internal;
    reading 10, writing 10, grammar 15 (including a 4-mark translation of four
    Hindi sentences into English), literature 35 (First Flight 23, Footprints
    Without Feet 12); recommended handbook from ELTI, U.P., Prayagraj
    (eltiup.org). ModelPaper/class10/917-English.pdf: 3 h 15 min, first 15
    minutes for reading, 70 marks, Part A 20 one-mark MCQs on OMR (no erasing,
    cutting or whitener), Part B 50 marks descriptive.
  - Downloads/Syllabus/Class10/928-Maths-Class-10.pdf: 70 + 30 internal with
    project work, pass 23 + 10 = 33; number systems 5, algebra 18, coordinate
    geometry 5, geometry 10, trigonometry 12, mensuration 10, statistics and
    probability 10.
  - Downloads/Syllabus/Class10/931-Science-Class-10.pdf: 70 written + 30
    practical, pass 23 + 10; chemical substances 20, living world 20, natural
    phenomena 12, effects of current 13, natural resources 5.
  - Downloads/Syllabus/Class10/932-Social-Science-Class-10.pdf: 70 + 30
    project; history 20, geography 20, democratic politics 15, economics 15.
  - Downloads/Syllabus/Class10/935-Commerce-Class-10.pdf: 70 + 30; no textbook
    prescribed or recommended, schools choose one.
  - Downloads/Syllabus/Class12/131-Maths-Class-12.pdf: 100 marks; relations and
    functions 10, algebra 15, calculus 44, vectors and 3D geometry 18, linear
    programming 5, probability 8.
  - Downloads/Syllabus/Class12/151-Physics-Class-12.pdf: 70 paper + 30
    practical, pass 23 + 10.
  - Downloads/Syllabus/Class12/153-Biology-Class-12.pdf: 70 written + 30
    practical; reproduction 14, genetics and evolution 18, biology in human
    welfare 14, biotechnology 10, ecology 14.
  - Downloads/Syllabus/Class12/117-English-Class-12.pdf: one paper of 100;
    reading 15, writing 20, grammar 25 (including a 5-mark Hindi-to-English
    translation of seven or eight sentences), literature 40 (Flamingo,
    Vistas); poetry questions on seven named figures of speech; four
    school-level unit tests for remedial teaching (MCQ in the second week of
    July, the first worth 10 marks of summer homework plus 10 of test;
    descriptive at the end of August; MCQ at the end of November; descriptive
    at the end of December), marks not included in the final result. The
    same four-test note appears in the Class 12 accountancy, business studies
    and economics files.
  - ModelPaper/class12/136-Economics.pdf and 156-Lekhashastra.pdf: 3 h 15 min
    with 15 minutes' reading time, 100 marks; MCQs answered in the answer book.
  Model papers read for maths, science and physics are set in Hindi (as
  recorded on up-board-tutor-noida from the same files).
  Local detail only from database/seo-content/zones/greater-noida.json,
  areas/greater-noida-research.json, greater-noida-zone-guides.json and the
  Greater Noida hub (CBSE most widely followed, ICSE/ISC, IB and IGCSE for a
  smaller group, UPMSP in the mix; no board tied to any part of the city).
  Fee wording is the approved sentence. FAQs render from
  faqs/up-board-tutor-greater-noida.php. Area links render only for active
  areas.
--}}
@php
  $ugnSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ugnA = function (string $slug, string $label) use ($ugnSlugs) {
      return in_array($slug, $ugnSlugs, true)
          ? '<a href="' . e(url('/city/greater-noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ugnGuideTitle">
  <h2 id="ugnGuideTitle">UP Board tutors in Greater Noida: High School, Intermediate and the papers behind them</h2>

  <p class="nx-guide__lede">
    Greater Noida is in Uttar Pradesh, so the state's own board, the Madhyamik Shiksha Parishad (UPMSP, or simply the
    UP Board), sits alongside CBSE, ICSE and the international boards in the city's schools. A UP Board student sits
    two public examinations: High School at the end of Class 10 and Intermediate at the end of Class 12. This guide,
    from the NXTutors Academic Team, reads the board's own syllabus files and model papers for session 2026-27 and
    turns them into practical advice: what each paper rewards, what the school assesses on its own, how the English
    paper differs from the one CBSE students sit, and how a tutor reaches each part of Greater Noida. Every exam detail
    here comes from upmsp.edu.in. The board revises its files each session, so check them again in your child's
    exam year.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ugn-board">How the board works</a> ·
    <a href="#ugn-hs">High School subjects</a> ·
    <a href="#ugn-format">The paper format</a> ·
    <a href="#ugn-eng">English and Hindi</a> ·
    <a href="#ugn-inter">Intermediate weights</a> ·
    <a href="#ugn-tests">The school-year tests</a> ·
    <a href="#ugn-match">What we match on</a> ·
    <a href="#ugn-zones">Tutors by zone</a> ·
    <a href="#ugn-demo">The demo</a> ·
    <a href="#ugn-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ugn-board">How the UP Board works, from registration to result</h2>
  <p>
    The Parishad dates from 1921, when an act of the United Provinces legislature created it at Prayagraj, and its
    first examinations were held in 1923. It has used a 10+2 pattern from the start, and its two
    certificates still carry the old names, High School and Intermediate, rather than Class 10 and Class 12. Prayagraj remains
    the head office, with regional offices sharing the load, and the state's Director of Education chairs the board
    ex officio. Separate committees deal with the curriculum, the examinations, results, school recognition and
    finance.
  </p>
  <p>
    The board's job, in its own words, is to recognise schools, prescribe the courses and textbooks for both levels,
    conduct the two examinations and decide which other boards' certificates count as equivalent. For a parent, the
    part that matters is the sequence your child moves through:
  </p>
  <ul>
    <li><strong>Class 9 and Class 11:</strong> advance registration with the board, done through the school.</li>
    <li><strong>Class 10 and Class 12:</strong> the examination registration; the board also takes private candidates in these two years.</li>
    <li><strong>Every year from Class 9 to 12:</strong> the board's attendance portal, and marks for school-assessed work uploaded by the school.</li>
  </ul>
  <p>
    None of this is a tutor's job, but a tutor who knows the cycle understands why a Class 9 student's projects matter
    and why Class 11 is not a gap year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugn-hs">High School: six subjects, one 70 + 30 pattern</h2>
  <p>
    In the board's Class 10 syllabus files, almost every main subject divides 100 marks the same way: 70 for the
    written board paper and 30 earned in school, through internal assessment, projects or a practical examination.
    Where the file states a pass mark, it is 23 in the paper and 10 in the school part, so a student must clear both
    halves separately.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 subjects in the board's 2026-27 syllabus files</caption>
    <thead>
      <tr><th scope="col">Subject (code)</th><th scope="col">School-assessed 30</th><th scope="col">How the 70-mark paper is weighted</th></tr>
    </thead>
    <tbody>
      <tr><td>Hindi (901)</td><td>Internal assessment</td><td>Prose and poetry with their literary history, a short epic poem, poetic devices, a 14-mark Sanskrit section, then letter, grammar and essay</td></tr>
      <tr><td>English (917)</td><td>Internal assessment</td><td>Reading 10, writing 10, grammar 15, literature 35</td></tr>
      <tr><td>Mathematics (928)</td><td>Internal assessment with project work</td><td>Algebra 18, trigonometry 12, geometry, mensuration and statistics with probability 10 each, number systems and coordinate geometry 5 each</td></tr>
      <tr><td>Science (931)</td><td>A practical examination</td><td>Chemical substances 20, the living world 20, effects of current 13, natural phenomena 12, natural resources 5</td></tr>
      <tr><td>Social Science (932)</td><td>Project work</td><td>History 20, geography 20, democratic politics 15, economics 15</td></tr>
      <tr><td>Commerce (935)</td><td>Two projects and unit tests</td><td>Final accounts, business systems, banking and basic economics; the board prescribes no single textbook, so the school picks one</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two lines in that table surprise families who know CBSE. The Hindi paper carries a Sanskrit section worth 14
    marks, so a student weak in Sanskrit loses marks inside Hindi itself. And in Commerce the school chooses the book,
    so a tutor has to work from your child's actual textbook rather than a standard one. For subject-by-subject help,
    see our <a href="{{ url('/maths-home-tutor-greater-noida') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-greater-noida') }}">science</a> and
    <a href="{{ url('/english-home-tutor-greater-noida') }}">English</a> tutor pages for Greater Noida.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugn-format">What a High School paper looks like on the day</h2>
  <p>
    The 2026-27 model papers for Class 10 English, maths and commerce share one frame. The paper lasts three hours and
    fifteen minutes, and the first fifteen are for reading only. Part A is twenty one-mark multiple-choice questions
    answered on an OMR sheet with a blue or black ballpoint, and the instructions forbid erasing, cutting or whitener
    once a circle is filled. Part B carries the remaining 50 marks as written answers, and in commerce the model paper
    even caps the length: about 30 words for a very short answer, 100 for a short one and 200 for a long one.
  </p>
  <p>What a tutor should build from that frame:</p>
  <ul>
    <li><strong>A reading-time routine.</strong> Fifteen minutes is long enough to choose the order of attack and mark the questions to leave for last. Students who have never practised it simply start writing late.</li>
    <li><strong>OMR discipline.</strong> Twenty marks ride on circles that cannot be corrected. A few sessions on printed OMR sheets, answering the multiple-choice block in a fixed time, removes most careless losses.</li>
    <li><strong>Answers sized to the marks.</strong> A 100-word limit punishes padding as much as thin answers. The tutor should mark length as well as content.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugn-eng">English and Hindi: the papers families underestimate</h2>
  <p>
    The UP Board English paper is not the CBSE English paper with a new cover. The Class 10 file uses the NCERT
    readers First Flight and Footprints Without Feet, but the grammar unit includes a four-mark translation of a short
    Hindi passage into English, alongside multiple-choice questions on parts of speech, tenses, articles, sentence
    order and spelling, and short answers on narration, voice and punctuation. At Intermediate, the single 100-mark
    paper gives 25 marks to grammar (including a five-mark Hindi-to-English translation of seven or eight sentences),
    20 to writing an article and a formal letter, 15 to an unseen passage and 40 to the Flamingo and Vistas readers.
    Poetry questions name the figures of speech to expect: simile, metaphor, personification, oxymoron, apostrophe,
    hyperbole and onomatopoeia.
  </p>
  <p>
    The board recommends a grammar and composition handbook published by the English Language Teaching Institute at
    Prayagraj, available online at eltiup.org. A tutor who has used it knows the house style of the questions.
  </p>
  <p>
    On the Hindi side, the paper is as much literature and language history as it is grammar, and the Sanskrit
    section described above sits inside it. The model papers we read for maths, science and physics are written in
    Hindi, so ask the school which language your child's science and maths papers will be in and tell us when you
    request a tutor. Explanations can be in either language; written practice should use the terms of the paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugn-inter">Intermediate: where the marks sit in the main Class 12 subjects</h2>
  <p>
    The board's career-guidance pages sort Intermediate students into four groups: agriculture, arts, commerce and
    science. Within each group, the Class 12 syllabus files show exactly where the marks are, and a tutor's revision
    plan should follow those weights rather than the order of the textbook.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Unit weights in selected Class 12 syllabus files, session 2026-27</caption>
    <thead>
      <tr><th scope="col">Subject (code)</th><th scope="col">Paper and practical</th><th scope="col">Heaviest areas</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics (131)</td><td>100 marks, no practical</td><td>Calculus 44, vectors and three-dimensional geometry 18, algebra 15, relations and functions 10, probability 8, linear programming 5</td></tr>
      <tr><td>Physics (151)</td><td>70 paper + 30 practical, pass 23 + 10</td><td>Two halves of 35: electricity and magnetism, then optics and modern physics</td></tr>
      <tr><td>Biology (153)</td><td>70 paper + 30 practical</td><td>Genetics and evolution 18; reproduction, biology in human welfare and ecology 14 each; biotechnology 10</td></tr>
      <tr><td>Accountancy (156)</td><td>100 marks</td><td>Partnership accounts 45 across four units; company accounts and analysis of statements 55</td></tr>
      <tr><td>Economics (136)</td><td>100 marks</td><td>Microeconomics 50, macroeconomics 50; consumer equilibrium and producer behaviour 18 each</td></tr>
      <tr><td>English (117)</td><td>100 marks</td><td>Literature 40, grammar 25, writing 20, reading 15</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Read plainly: in Class 12 maths, calculus is close to half the paper, so a student who is shaky on differentiation
    by the end of Class 11 is already behind. In biology, genetics and evolution is the single heaviest unit. In the
    commerce subjects there is no practical cushion, and the whole 100 rides on the written paper. Our single-subject
    pages go deeper: <a href="{{ url('/physics-home-tutor-greater-noida') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-greater-noida') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-greater-noida') }}">biology</a>,
    <a href="{{ url('/accountancy-home-tutor-greater-noida') }}">accountancy</a> and
    <a href="{{ url('/economics-home-tutor-greater-noida') }}">economics</a> in Greater Noida, and the
    <a href="{{ url('/commerce-home-tutor-greater-noida') }}">commerce home tutors</a> page for the stream as a whole.
    Science students preparing for national entrances alongside the board can see our
    <a href="{{ url('/jee-home-tutor-greater-noida') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor-greater-noida') }}">NEET</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugn-tests">The school-year tests the board sets out</h2>
  <p>
    Several Class 12 syllabus files for 2026-27 (English, accountancy, business studies and economics among them) end
    with the same note: schools hold four unit tests during the year as part of remedial teaching, and their marks do
    not count in the board result. Even so, they give a family the earliest warning of trouble.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The four school-level unit tests named in the Class 12 files</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">Type</th><th scope="col">What a tutor does around it</th></tr>
    </thead>
    <tbody>
      <tr><td>Second week of July</td><td>Multiple choice, 20 marks, half of them for summer-vacation homework</td><td>Makes sure the holiday work is finished and checked before school reopens</td></tr>
      <tr><td>End of August</td><td>Descriptive, 20 marks</td><td>First full written answers of the year; marks length and layout as well as content</td></tr>
      <tr><td>End of November</td><td>Multiple choice, 20 marks</td><td>Timed objective practice across everything taught so far</td></tr>
      <tr><td>End of December</td><td>Descriptive, 20 marks</td><td>Moves straight on to the board's model papers under exam timing</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The board also publishes a monthly syllabus for each subject, showing roughly what a school should have finished
    by each month, plus a question bank and formative-assessment material. A tutor can hold a child's notebook up
    against the monthly syllabus at the start of every month and know at once whether the class is on track.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugn-match">What we match on for a UP Board request</h2>
  <p>
    The Greater Noida hub records CBSE as the most widely followed board in the city, with the UP Board in the mix, so
    we do not assume a tutor's CBSE experience covers a UPMSP paper. A request is matched on:
  </p>
  <ol>
    <li><strong>Class and level:</strong> High School or Intermediate, and for Classes 11 and 12, the group (science, commerce, arts or agriculture).</li>
    <li><strong>Subjects and codes:</strong> the subject names on the timetable, which the board numbers (928 for Class 10 maths, 131 for Class 12 maths).</li>
    <li><strong>Language of the paper:</strong> Hindi or English, and which terms the school expects in written answers.</li>
    <li><strong>The journey:</strong> your sector, block or tower, and the junction the tutor would have to cross.</li>
  </ol>
  <p>
    A student moving to or from another board can compare our <a href="{{ url('/cbse-home-tutor-greater-noida') }}">CBSE</a>,
    <a href="{{ url('/icse-home-tutor-greater-noida') }}">ICSE and ISC</a>,
    <a href="{{ url('/ib-tutor-greater-noida') }}">IB</a> and
    <a href="{{ url('/igcse-tutor-greater-noida') }}">IGCSE</a> pages for Greater Noida, and our guide to
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugn-zones">How tutors reach each zone of Greater Noida</h2>
  <p>
    A weekly arrangement only lasts if the journey works every week, so the route counts as much as the subject. From
    our zone notes:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/greater-noida/zone/greater-noida-west') }}">Greater Noida West</a>:</strong> {!! $ugnA('sector-16c', 'Sector 16C') !!} is mostly one large township of towers, so a tutor who already teaches a few blocks away can often add another student the same evening. Gaur Chowk is the bottleneck; register the tutor at the gate in advance.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/alpha-delta-pari-chowk') }}">Alpha–Delta and Pari Chowk</a>:</strong> {!! $ugnA('sector-p-3', 'Sector P-3') !!} is a large plotted sector of houses and builder floors with no gate formalities and the Pari Chowk station close by. A tutor based in Greater Noida tends to be more punctual than one coming down the expressway from Noida.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omega-chi-phi') }}">Omega, Chi and Phi</a>:</strong> {!! $ugnA('chi-4', 'Chi 4') !!} mixes plotted houses with a high-rise society. Buses and autos inside the Chi sectors are thin, so tutors come by two-wheeler or by metro to Knowledge Park II or Pari Chowk and an e-rickshaw after that.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/pi-sigma-sectors-36-37') }}">Pi, Sigma and Sectors 36–37</a>:</strong> {!! $ugnA('sigma-4', 'Sigma 4') !!} is largely apartment societies with greenbelts in front, and tutors from the Pi and Sigma sectors can usually reach it; the gate will want the tutor's details.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/zeta-eta') }}">Zeta and Eta</a>:</strong> {!! $ugnA('eta-2', 'Eta 2') !!} is still being built in places, with newer societies near the Aqua Line's Depot station. The stretch from the station often needs an e-rickshaw, so many tutors prefer to ride in.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omicron-mu-xu') }}">Omicron, Mu and Xu</a>:</strong> {!! $ugnA('xu-3', 'Xu 3') !!} is independent houses on plots, which means no gate pass, but residents point to a shortage of shops and public transport, so confirm at the demo that the tutor has a two-wheeler.</li>
  </ul>
  <p>
    The zone guides for <a href="{{ url('/blog/greater-noida-sectors-tuition-guide') }}">the Greek-letter sectors</a>
    and <a href="{{ url('/blog/greater-noida-west-tuition-guide') }}">Greater Noida West</a> go further, and every
    locality is listed on the <a href="{{ url('/city/greater-noida') }}">Greater Noida home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugn-mode">At home, online, or both</h2>
  <p>
    For High School students, a tutor at the table can watch an OMR block being filled under time and catch the
    student who reads a question in English and answers in half-remembered Hindi terms. That suits home sessions. At
    Intermediate, when practicals and entrance preparation compete for evenings, many families keep one home session
    and move a second online, especially where the tutor would otherwise cross Pari Chowk or Gaur Chowk at the evening
    peak. Our comparison of <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a> sets
    out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugn-demo">Five things to test in a UP Board demo</h2>
  <ol>
    <li><strong>The current files.</strong> Ask the tutor to name the heaviest unit in your child's subject for 2026-27. Someone who has read the syllabus answers without looking it up.</li>
    <li><strong>A Part A drill.</strong> Ask how they would train the twenty-question OMR block, and how long they would give it.</li>
    <li><strong>The translation question.</strong> For English, ask how they teach Hindi-to-English translation; it is marked, so it needs practice, not luck.</li>
    <li><strong>The school's 30 marks.</strong> Ask how they will support projects, practicals and unit tests without doing the work for the student.</li>
    <li><strong>The route.</strong> Which road or station, and what happens on a jammed evening at Pari Chowk or Gaur Chowk?</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching tutor
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their
    profile goes live. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has
    more questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugn-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee, and you see it on the shortlist. The <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and our post on <a href="{{ url('/blog/home-tuition-fees-greater-noida') }}">home tuition fees in Greater
    Noida</a> explain what moves the figure.
  </p>
  <p>
    Send us the class, the group for Intermediate, the subjects, the language of the paper, your sector and block or
    society and tower, and the slots that suit you. The first class is a <a href="{{ url('/demo-class') }}">free
    demo</a>. You can also browse <a href="{{ url('/tutors') }}">tutor profiles</a>, and if you teach UP Board subjects
    yourself, see <a href="{{ url('/tuition-jobs/greater-noida') }}">tuition jobs in Greater Noida</a>.
  </p>
  </section>

  </div>
</article>
