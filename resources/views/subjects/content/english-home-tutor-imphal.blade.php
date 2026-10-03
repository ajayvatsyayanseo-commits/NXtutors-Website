{{--
  Long-form guide for the "English home tutor Imphal" subject page. Byline:
  NXTutors Academic Team. Page writer (capitals wave 2, subjects), 3 Oct 2026.
  No school, coaching institute, hospital, person or society is named (the
  council's prose pieces and their writers are deliberately not listed).
  COHSEM facts, read 3 Oct 2026 on cohsem.nic.in:
  - https://cohsem.nic.in/docs/subjects/01_English.pdf : English, one 80-mark
    paper of 3 hours in Classes XI and XII. Class XII: reading 18 (an unseen
    passage of 400-450 words and one of about 300 words, factual, discursive,
    case-based with data, or descriptive/literary); advanced writing 26
    (invitation/reply/email up to 50 words 3; poster or diary entry up to 60
    words 4; letter of about 100-125 words 5 - official letter, letter to
    the editor or job application; report or factual description 100-125
    words 5; essay/article 120-150 words 5; grammar 4); literature 36 (prose
    16 with a critical question of about 100 words; poetry 10; supplementary
    reader 10). Prescribed: An Anthology of English Prose and Poetry, Book-I
    (XI) and Book-II (XII), and the Supplementary Reader for Classes XI & XII,
    both for the council.
  - https://cohsem.nic.in/docs/questionDesign/E.pdf : 100 marks = 80 written +
    20 internal; Class XII 40 questions (5 long answers 25, SA-I 2 = 8, SA-II
    3 = 9, SA-III 8 = 16, VSA 10, MCQ 12); sections A, B and C; two
    assertion-reason MCQs from the prescribed texts based on a comparative
    study of lessons; internal 20 in Class XII = periodic tests 10, project 7
    (topic 1, content 2, language use 2, creativity 2), viva 3; internal
    activities emphasise listening and speaking (group discussion, debate,
    extempore, seminar, news reading, storytelling).
  - https://cohsem.nic.in/exams.html : Alternative English and Elective
    English are separate subjects in the council's list.
  - https://bosem.in/ : BOSEM conducts the HSLC examination; no English paper
    design published there, so none is described.
  CBSE and CISCE facts reuse the checked statements on the national
  english-home-tutor page (CBSE 184 Class X: reading 20, writing and grammar
  20, literature 40, internal 20; CBSE English Core XI-XII internal 20 =
  listening 5, speaking 5, project 10; ICSE two papers). Local facts only from
  database/seo-content/areas/imphal-research.json. Strictly practical and
  educational; weather only as timing advice. Only the allowed fee sentence.

  Area links render only when that Imphal area page exists and is active.
--}}
@php
  $ipeSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ipeA = function (string $slug, string $label) use ($ipeSlugs) {
      return in_array($slug, $ipeSlugs, true)
          ? '<a href="' . e(url('/city/imphal/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ipe-guide" aria-labelledby="ipeGuideTitle">
  <h2 id="ipeGuideTitle">English home tutor in Imphal: word limits, unseen passages and the confidence to speak</h2>

  <p class="nx-guide__lede">
    English is the one subject every Imphal student sits on every board, and it is marked differently from the rest.
    Marks go to answers that stay inside a word limit, letters in the right format, a reading passage understood rather
    than skimmed, and, increasingly, to speaking and listening assessed in school. The Council of Higher Secondary
    Education, Manipur publishes a detailed English syllabus and question design for Classes XI and XII; CBSE and ICSE
    have their own. NXTutors suggests two or three English tutors who fit your child's board and goal, whether that is a
    board score, written fluency or spoken confidence, and you see each fee before a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ipe-council">Council English</a> ·
    <a href="#ipe-writing">Writing tasks</a> ·
    <a href="#ipe-forms">Question forms</a> ·
    <a href="#ipe-internal">Internal 20</a> ·
    <a href="#ipe-ten">Class 10</a> ·
    <a href="#ipe-speaking">Speaking</a> ·
    <a href="#ipe-young">Classes 1–8</a> ·
    <a href="#ipe-where">Localities</a> ·
    <a href="#ipe-demo">Demo</a> ·
    <a href="#ipe-fees">Fees</a> ·
    <a href="#ipe-send">Send us</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ipe-council">How is English examined by the council in Class XII?</h2>
  <p>
    The council's English paper is 80 marks over three hours, with 20 more marks of internal assessment. It is set in three
    sections, and the literature comes from the council's own books: An Anthology of English Prose and Poetry (Book-I in
    Class XI, Book-II in Class XII) and a Supplementary Reader shared by both years. A tutor who has only taught CBSE English
    must start with these books, not with NCERT ones.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>COHSEM Class XII English: the 80 written marks by section</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Marks</th><th scope="col">What it asks</th></tr>
    </thead>
    <tbody>
      <tr><td>A: Reading</td><td>18</td><td>Two unseen passages, one of 400–450 words and one of about 300; factual, discursive, case-based with data, or descriptive</td></tr>
      <tr><td>B: Advanced writing and grammar</td><td>26</td><td>Five short and long compositions plus four grammar items</td></tr>
      <tr><td>C: Literature</td><td>36</td><td>Prose 16 (including a critical answer of about 100 words), poetry 10, supplementary reader 10</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two of the multiple-choice questions are assertion-reason items drawn from the prescribed texts and based on comparing
    lessons, so reading each chapter once is not enough; the tutor should ask your child to connect characters and themes
    across chapters.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipe-writing">Which writing tasks carry the 26 marks?</h2>
  <p>
    Writing is where a home tutor makes the quickest difference, because every task has a format and a word limit that can
    be practised:
  </p>
  <ul>
    <li><strong>Invitation, reply or email, 3 marks:</strong> no more than 50 words, formal or informal.</li>
    <li><strong>Poster or diary entry, 4 marks:</strong> no more than 60 words.</li>
    <li><strong>Letter, 5 marks:</strong> about 100–125 words; an official letter (enquiry, complaint, order or reply), a letter to the editor or a job application.</li>
    <li><strong>Report or factual description, 5 marks:</strong> 100–125 words, for a newspaper or magazine.</li>
    <li><strong>Essay or article, 5 marks:</strong> 120–150 words.</li>
    <li><strong>Grammar, 4 marks:</strong> two very short answers and two multiple-choice items.</li>
  </ul>
  <p>
    A good routine is one timed composition each visit, marked against the format, the content and the word limit, with
    the corrected version rewritten by the student before the next session. In Class XI the council's tasks differ a little,
    including notices, classified advertisements, complaint or business letters and a speech or debate.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipe-forms">How many questions, and of what length?</h2>
  <p>
    The council's design for Class XII English has 40 questions: five long answers worth 25 marks, two SA-I questions
    worth 8, three SA-II worth 9, eight SA-III worth 16, ten very short answers and twelve multiple-choice items. The design
    sets the balance at 30% difficult, 50% average and 20% easy. With twenty-two one-mark items, careless reading costs
    more than most students expect; with five long answers, so does running out of time. A tutor should practise both:
    quick, exact answers to short questions, and a full paper against the clock at least once a month in the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipe-internal">What are the 20 internal marks in council English?</h2>
  <p>
    In Class XII, the council splits English internal assessment into periodic tests (10 marks), a project (7 marks: choice
    and relevance of the topic, content, language use, and creativity and originality) and a viva (3 marks). Its
    guidelines say the internal activities should stress listening and speaking, since reading and writing are already
    tested in the written paper. Suggested activities include group discussion, formal and informal debate, extempore
    speech, seminar presentation, news reading and storytelling, judged on interaction, fluency, pronunciation and
    language.
  </p>
  <p>
    That is a real reason to want a tutor who talks with your child in English, not only one who corrects written work.
    A short spell of speaking practice in each visit, on a current topic, builds exactly what the school assesses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipe-ten">What about Class 10 English, on HSLC or CBSE?</h2>
  <p>
    The Board of Secondary Education, Manipur conducts the HSLC examination, but its website does not set out an English
    paper design we could read, so we do not describe one; ask the school for the current pattern and sample papers. On
    CBSE, English Language and Literature is 80 marks plus 20 internal: reading 20, writing and grammar 20, and literature
    40 from the two NCERT books, with listening and speaking part of internal assessment. ICSE has two English papers,
    language and literature. In every case, the tutor's first weeks should go to reading speed and accuracy, the formats of
    letters and paragraphs, and the literature the board actually prescribes.
  </p>
  <p>
    After Class 10, note that the council also offers Alternative English and Elective English as separate subjects; check
    which one your child is registered for before choosing a tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipe-speaking">Can a home tutor help with spoken English too?</h2>
  <p>
    Yes, and it works well when it is built into the same lessons rather than run as a separate course. A tutor can use the
    week's reading passage for a short discussion, ask for a brief summary aloud, correct pronunciation gently and set
    a short talk for the next visit. For a younger child, reading aloud together and talking about the story does more than
    grammar drills. Our <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English for students</a> guide has
    practical routines.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipe-young">What about children in Classes 1 to 8?</h2>
  <p>
    The habits that the council's Class XII paper rewards, reading closely, writing to a limit and speaking clearly, start
    much earlier. For a primary child, an English tutor's visit might be shared reading, a few new words a week used in
    sentences, and a short piece of writing about something real: a festival at home, a trip to the market, a letter to a
    grandparent. In Classes 6 to 8, grammar becomes more formal, and the tutor should add paragraph writing, simple
    letters and comprehension passages with questions that ask "why", not only "what". A tutor who corrects every error
    at once discourages a young writer; one who picks two errors a week and fixes them for good gets further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipe-where">How does an English tutor reach your part of Imphal?</h2>
  <p>
    English tutors in Imphal mostly travel by two-wheeler or auto, and a clear leikai name with a landmark matters on the
    first visit. Five localities as examples:
  </p>
  <ul>
    <li>{!! $ipeA('lamphel', 'Lamphel and Lamphelpat') !!}: the Imphal West district headquarters, where offices sit beside homes; plan lessons after office hours, and if your building has a gate, tell the guard the tutor's name.</li>
    <li>{!! $ipeA('uripok', 'Uripok') !!}: many leikais and pockets, with Langol and Lamphel close by; give the leikai and a nearby landmark.</li>
    <li>{!! $ipeA('thangal-bazar', 'Thangal Bazar and Paona Bazar') !!}: homes behind the busiest shopping streets; early weekend mornings or evenings after the shops quieten work well.</li>
    <li>{!! $ipeA('singjamei', 'Singjamei') !!}: one catchment with Chingamakha, with Keishampat and Kwakeithel close by; agree how classes run on heavy-rain days.</li>
    <li>{!! $ipeA('chingmeirong', 'Chingmeirong') !!}: in Imphal East, in two parts, Nongchup and Nongpok; keep lessons clear of school opening and closing times.</li>
  </ul>
  <p>
    English also works well online, especially for the writing tasks, which can be shared and marked on screen. The
    <a href="{{ url('/city/imphal') }}">Imphal page</a> and the zone pages for
    <a href="{{ url('/city/imphal/zone/uripok-thangmeiband-lamphel') }}">Uripok, Thangmeiband and Lamphel</a> and
    <a href="{{ url('/city/imphal/zone/sagolband-keishampat-singjamei') }}">Sagolband, Keishampat and Singjamei</a> list
    the rest of the city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipe-demo">How can you judge an English tutor in one demo?</h2>
  <ol>
    <li><strong>Ask for a writing task in the demo.</strong> A good tutor sets one with a word limit and marks it against the format.</li>
    <li><strong>Listen to the conversation.</strong> Does the tutor get your child talking, or do most of the talking?</li>
    <li><strong>Check the books.</strong> The tutor should ask which texts your child's board prescribes, the council's anthology, NCERT or the ICSE set.</li>
    <li><strong>Look for a plan.</strong> By the end, you should know what will be practised each week.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipe-fees">What does an English home tutor in Imphal cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. English tutors set their own
    rate, and the shortlist shows it before the free demo. The
    <a href="{{ url('/blog/home-tuition-fees-imphal') }}">Imphal fee guide</a> covers what to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipe-send">What should you send us?</h2>
  <p>
    The class and board, what you want most (board marks, written fluency or spoken confidence), your locality and leikai
    with a landmark, and the afternoons that are free. We return two or three English tutors, fees attached; the opening
    lesson costs nothing, and a later change of tutor is free too. Every tutor who joins goes through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> first. See also the national
    <a href="{{ url('/english-home-tutor') }}">English home tutor</a> page, the
    <a href="{{ url('/manipur-board-tutor-imphal') }}">Manipur Board</a> page, the
    <a href="{{ url('/maths-home-tutor-imphal') }}">maths</a> and <a href="{{ url('/science-home-tutor-imphal') }}">science</a>
    pages for Imphal, and the <a href="{{ url('/blog/imphal-home-tuition-guide') }}">Imphal home tuition guide</a>. English
    teachers can find requests on <a href="{{ url('/tuition-jobs/imphal') }}">Imphal tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
