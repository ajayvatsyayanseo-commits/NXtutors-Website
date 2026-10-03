{{--
  Long-form guide for the "English home tutor Kohima" subject page. Byline:
  NXTutors Academic Team. No school, coaching institute, hospital, person or
  society is named; no literary text or author is named.

  Nagaland Board of School Education facts, read 3 Oct 2026 on nbsenl.edu.in:
  - https://nbsenl.edu.in/cms/document/49/syllabi (secondary textbooks 2025):
    English for Classes IX and X uses "A Multi-Skill Course in English";
    Alternative English is offered as a subject.
  - https://nbsenl.edu.in/cms/document/41/syllabi (higher secondary textbooks
    2025): English for XI and XII uses a Literature Reader and a Main Course
    Book, plus a long reading text in each class; Alternative English offered.
  - https://nbsenl.edu.in/cms/document/50/syllabi (Blueprint of HSLC 2026,
    English): 38 questions, 80 marks; 10 x 1 MCQ, 15 x 1 VSA, 5 x 3, 2 x 4,
    5 x 5, 1 x 7; sections Literature, Reading (unseen passages I-III),
    Writing (notice/advertisement/email/formal invitation; paragraph;
    question on visual input; article/speech/formal letter/report, 7 marks),
    Grammar (voice, adjective clause, narration, determiners/verbs/phrases/
    finite and non-finite/clause). Section totals computed from the
    blueprint: reading 20, writing 20, grammar 15, literature 25.
  - https://nbsenl.edu.in/cms/document/51/syllabi (Blueprint of HSSLC 2026,
    English): 30 questions, 80 marks; literature chapters; long reading text
    2 x 5 = 10; reading comprehension 7 questions, 8 marks; note making 7;
    writing tasks (message, advertisement, expressing opinions, filling
    forms; article, newspaper report, speech; business letter / job
    application); grammar (tense, idioms and phrases, modal auxiliaries).
  CBSE and CISCE facts reuse the checked statements on the national
  english-home-tutor page (CBSE 184 Class X 2026-27: reading 20; writing and
  grammar 20 = grammar 10, formal letter 5, analytical paragraph 5; literature
  40; internal 20 including listening and speaking 5. CISCE ICSE English: two
  80-mark papers plus 20 internal each; ISC: two 80-mark papers plus 20
  project each, 400-450 word composition).
  Purely practical and educational; weather only as timing advice. Only the
  allowed fee sentence.

  Area links render only when that Kohima area page exists and is active.
--}}
@php
  $kmeSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kmeA = function (string $slug, string $label) use ($kmeSlugs) {
      return in_array($slug, $kmeSlugs, true)
          ? '<a href="' . e(url('/city/kohima/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide kme-guide" aria-labelledby="kmeGuideTitle">
  <h2 id="kmeGuideTitle">English home tutor in Kohima: unseen passages, a seven-mark writing task and grammar that holds up under time</h2>

  <p class="nx-guide__lede">
    English is a subject where marks drain away quietly. A Kohima student may read well and still lose marks on the
    format of a notice, or know a chapter thoroughly and write an answer too thin to earn credit. Another may manage
    every written task yet stay silent when asked to speak. Before suggesting anyone, we ask four things: who sets
    your child's paper (the Nagaland Board of School Education, CBSE, CISCE, or an international course), the class,
    the weakest skill, and your ward. Then we send two or three English tutors, each with the fee shown, and the first
    lesson with the one you choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kme-skills">Four skills</a> ·
    <a href="#kme-hslc">HSLC English</a> ·
    <a href="#kme-hsslc">HSSLC English</a> ·
    <a href="#kme-cbse">CBSE and CISCE</a> ·
    <a href="#kme-writing">Writing tasks</a> ·
    <a href="#kme-young">Younger children</a> ·
    <a href="#kme-speak">Speaking</a> ·
    <a href="#kme-year">Through the year</a> ·
    <a href="#kme-wards">Five wards</a> ·
    <a href="#kme-demo">The demo</a> ·
    <a href="#kme-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kme-skills">Which part of English is costing your child marks?</h2>
  <p>
    School English splits into four skills, and few students are equally strong in all of them. Before any teaching,
    a good tutor reads a corrected answer sheet to see which one is weakest:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Four strands of school English, the sign on a marked paper, and a weekly remedy</caption>
    <thead>
      <tr><th scope="col">Strand</th><th scope="col">What the marked paper shows</th><th scope="col">Weekly remedy</th></tr>
    </thead>
    <tbody>
      <tr><td>Reading</td><td>Answers copied word for word from the passage, or the question's key word missed</td><td>One unseen passage under time, each answer traced to its line</td></tr>
      <tr><td>Writing</td><td>Format marks lost; ideas in one long block</td><td>A three-line plan, then one notice, letter or article a week, corrected</td></tr>
      <tr><td>Grammar</td><td>The same error repeated across answers</td><td>A personal error list built from the student's own work, cleared item by item</td></tr>
      <tr><td>Speaking and listening</td><td>Short, hesitant replies</td><td>A short spoken summary to close each lesson</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kme-hslc">How is HSLC English examined at Class 10?</h2>
  <p>
    For Classes 9 and 10 the Nagaland board lists a multi-skill English course book, and it also offers Alternative
    English as a separate subject, so first check which one your child takes. The board's 2026 HSLC blueprint for
    English sets 38 questions for 80 marks, in four parts:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>NBSE HSLC 2026 English blueprint: the four parts and how a tutor should practise each</caption>
    <thead>
      <tr><th scope="col">Part</th><th scope="col">Marks</th><th scope="col">What it contains</th><th scope="col">Practice</th></tr>
    </thead>
    <tbody>
      <tr><td>Reading</td><td>20</td><td>Three unseen passages</td><td>A timed passage each week; answers in the student's own words</td></tr>
      <tr><td>Writing</td><td>20</td><td>A notice, advertisement, email or formal invitation; a paragraph; a question on a visual; and a seven-mark article, speech, formal letter or report</td><td>Each format learnt once, then content, order and linking words</td></tr>
      <tr><td>Literature</td><td>25</td><td>Prose, poetry and drama from the prescribed book</td><td>Short plans before answers, with the text referred to</td></tr>
      <tr><td>Grammar</td><td>15</td><td>Voice, adjective clauses, narration, and determiners, verbs, phrases and clauses</td><td>Short daily drills drawn from the student's own mistakes</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The question mix leans heavily on short items: ten multiple-choice and fifteen very short answers of one mark
    each, so 25 marks reward accuracy more than length. At the other end, one seven-mark writing task is the single
    largest question on the paper, and it is worth practising every fortnight from early in Class 10. Check the
    current blueprint, question bank and past papers on nbsenl.edu.in before planning revision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kme-hsslc">What changes in HSSLC English for Classes 11 and 12?</h2>
  <p>
    At the higher secondary stage the board lists a literature reader and a main course book, plus a longer reading
    text in each class. Its 2026 HSSLC English blueprint sets 30 questions for 80 marks. Four features matter for a
    tutor:
  </p>
  <ul>
    <li><strong>The long reading text carries 10 marks</strong> through two five-mark questions, so it needs to be read in full, not from a summary.</li>
    <li><strong>Note making is worth 7</strong>, a skill many students have never practised before Class 11.</li>
    <li><strong>Writing widens</strong> to messages, advertisements, opinions and forms; articles, newspaper reports and speeches; and business letters or job applications.</li>
    <li><strong>Grammar narrows</strong> to tense, idioms and phrases, and modal auxiliaries, mostly tested through one-mark items.</li>
  </ul>
  <p>
    Reading comprehension adds seven short questions worth 8 marks. Alternative English is offered at this stage too,
    with its own books, so confirm the subject before choosing a tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kme-cbse">How do CBSE and CISCE papers differ?</h2>
  <p>
    CBSE's Class 10 English Language and Literature paper is out of 80 with 20 more from the school. Reading takes 20
    marks through a discursive passage and a factual, case-based one built around a chart or data; writing and grammar
    take 20, split as grammar 10 plus 5 each for a formal letter and a paragraph analysing a chart or graph; literature
    takes 40. Listening and speaking
    make up 5 of the school's 20. Literature is therefore half the board paper on CBSE, against roughly a third on the
    HSLC paper, a real difference for a student moving between boards.
  </p>
  <p>
    On CISCE, ICSE English is two papers, language and literature, each out of 80 with 20 internal; ISC has two
    80-mark papers, each with 20 marks of project work, and a 400 to 450 word composition. Tutors who specialise in
    these are fewer, so online lessons often widen the choice. Our national
    <a href="{{ url('/english-home-tutor') }}">English home tutor</a> page sets out every course.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kme-writing">How should a tutor teach the writing tasks?</h2>
  <p>
    Writing tasks are the most coachable marks in school English, because the formats are fixed and the marking
    rewards order. A tutor can work through them in a steady cycle:
  </p>
  <ol>
    <li><strong>Model once.</strong> Show one good notice, letter or article, and name its parts.</li>
    <li><strong>Plan in three lines.</strong> Purpose, three points, and a closing line, before a word of the answer is written.</li>
    <li><strong>Write to the limit.</strong> Count words on the first few attempts so the student learns what the limit feels like.</li>
    <li><strong>Correct one thing at a time.</strong> Format first, then order, then vocabulary.</li>
    <li><strong>Rotate the formats.</strong> Over a month every format on the blueprint gets a turn, so none is new in the exam.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kme-young">What do younger children need from an English tutor?</h2>
  <p>
    In the primary years, fluent reading matters more than any exam skill. Watch for a child who guesses words from
    their opening letters, loses their place on the page or quietly avoids books. Little and often helps most: a
    handful of new words sounded out, a page read aloud with gentle correction, then the story retold in the child's
    own words. Where English is not the main language at home, chatting in English about pictures and simple stories
    builds listening, with the home language kept for moments of real confusion. Ask for someone who teaches primary
    classes, not a Class 12 specialist.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kme-speak">Can a home tutor build spoken English too?</h2>
  <p>
    Yes, and it sits comfortably inside board preparation. Lessons can end with the student retelling the day's
    passage aloud, moving over time to short prepared talks and answering questions on them. If confidence in
    speaking is the main aim, for an interview or a class presentation, put that in your request so we choose tutors
    who teach it. The Nagaland board's 2026 calendars also list an English listening and speaking test for Classes 9
    and 10, and for Classes 11 and 12, so this practice counts at school too. Our
    <a href="{{ url('/blog/spoken-english-for-students') }}">guide to spoken English for students</a> has practical
    ideas.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kme-year">How should English tuition run through the Kohima year?</h2>
  <p>
    The Nagaland board's 2026 calendar had classes from January and the HSLC and HSSLC examinations in February, so
    an NBSE student's English year runs almost exactly with the calendar. Rain is heaviest from June to September,
    when an online slot is a sensible standby. English adapts well to that, since reading and written work can be
    sent ahead and marked remotely:
  </p>
  <ul>
    <li><strong>January to May:</strong> the literature chapters as the school reaches them, plus one writing format a week.</li>
    <li><strong>June to September:</strong> unseen passages and note making, with some lessons online and written work photographed in advance.</li>
    <li><strong>October to the examination:</strong> full papers to the blueprint, with the seven-mark writing task practised weekly.</li>
  </ul>
  <p>
    Our article on <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online and offline tutoring</a> compares
    the two modes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kme-wards">How does an English tutor reach five Kohima wards?</h2>
  <p>
    Most tutors get around by taxi or bus, so a tutor living on your side of Kohima is usually the most reliable. The
    <a href="{{ url('/city/kohima') }}">Kohima page</a> covers every area.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>English tuition in five Kohima wards: the setting and what to plan for</caption>
    <thead>
      <tr><th scope="col">Ward</th><th scope="col">Setting</th><th scope="col">Plan for</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $kmeA('peraciezie', 'Peraciezie') !!}</td><td>The first municipal ward, at the northern end, beside Bayavü Hill</td><td>A tutor crossing from the south should avoid the hour when offices close</td></tr>
      <tr><td>{!! $kmeA('kohima-village', 'Kohima Village') !!}</td><td>The old settlement on the high ground, run by its own village council</td><td>The nearest point a taxi can reach, and a landmark from there</td></tr>
      <tr><td>{!! $kmeA('officers-hill', "Officers' Hill") !!}</td><td>Thegabakha, west of the centre, between Midland and PR Hill</td><td>Where a two-wheeler can be left on a narrow road</td></tr>
      <tr><td>{!! $kmeA('lower-chandmari', 'Lower Chandmari') !!}</td><td>A ward of its own beside Upper Chandmari, with Midland to the north</td><td>Late-afternoon slots; say "Lower" clearly</td></tr>
      <tr><td>{!! $kmeA('lerie', 'Lerie') !!}</td><td>The southern end, grouped with New Ministers' Hill and New Reserve</td><td>A tutor from Agri Farm or PR Hill for weekday visits</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kme-demo">What should you look for in the English demo?</h2>
  <ul>
    <li><strong>A starting point:</strong> did the tutor ask to see a marked answer before teaching?</li>
    <li><strong>The right paper:</strong> could they describe your child's HSLC, HSSLC, CBSE or CISCE English paper in outline?</li>
    <li><strong>Your child's share:</strong> did your child do most of the reading, talking and writing?</li>
    <li><strong>A clear next step:</strong> did the lesson end with a piece of writing set and a date for marking it?</li>
  </ul>
  <p>
    If most answers are no, we arrange a demo with another tutor from your list, and changing later is free as well.
    More pointers are in the <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">checklist for parents</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kme-fees">Fees for English tuition in Kohima, and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Rates are each tutor's
    own; the class, the board, the tutor's experience of that paper, the trip at your hour and the lessons per week
    all move them. Every fee is on the shortlist before the demo, and the
    <a href="{{ url('/blog/home-tuition-fees-kohima') }}">Kohima fees guide</a> explains what to ask.
  </p>
  <p>
    Send the class, the board and whether your child takes English or Alternative English, the skill that worries you
    most, your ward with a landmark, and the hours that suit. Two or three English tutors come back with fees. Each
    tutor on NXTutors passes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before appearing on the
    site. Kohima parents can also see our <a href="{{ url('/maths-home-tutor-kohima') }}">maths</a> and
    <a href="{{ url('/science-home-tutor-kohima') }}">science</a> tutor pages, and English teachers in the city can
    browse requests on <a href="{{ url('/tuition-jobs/kohima') }}">Kohima tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
