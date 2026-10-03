{{--
  Long-form guide for the "English home tutor Shillong" subject page. Byline:
  NXTutors Academic Team. Page writer (capitals wave 2, subjects), 3 Oct 2026.
  No school, college, university, coaching institute, person or society is
  named; no distances or travel times; only the allowed fee sentence; no
  defence or tourism references. Local facts only from
  database/seo-content/areas/shillong-research.json.

  MBOSE facts, read on www.mbose.in on 3 Oct 2026:
  - SSLC English sample paper 2024-25 (new course, NCERT textbook):
    https://www.mbose.in/public/media_file/1782119526.pdf
    80 theory (pass 24) + 20 internal (pass 6); 56 questions; Section A 30
    one-mark MCQs (Q1-14 from the English Reader and Supplementary Reader,
    Q15-20 grammar, Q21-30 on a passage); Section B 10 one-mark questions on
    an unseen case-based factual passage with visual input, statistical data
    or chart; Section C creative writing, answer any two, 8 marks each
    (letter/article/story on a given situation; analytical paragraph on a
    map, chart, graph or cue); Section D 24 marks on the Reader and
    Supplementary Reader (extracts, short and long answers). Internal
    assessment by project work, written tests or assignments.
  - HSSLC English Core sample paper for 2027 (Notification No. 1020,
    https://www.mbose.in/public/notice/17879049240.pdf):
    https://www.mbose.in/public/media_file/1787905609.pdf  80 marks, 3 hours,
    8 compulsory questions; Section A reading 20; Section B grammar and
    creative writing 20; Section C literature 40.
  - Downloads page https://www.mbose.in/download-files : rationalised English
    textbooks for Classes 9-10 and 11-12; SSLC programme 2026-27
    (https://www.mbose.in/public/notice/17893801860.pdf): English on 4 Dec
    2026; Indian Languages (Garo, Khasi, Hindi, Bengali, Assamese, Nepali,
    Urdu, Mizo) or Additional English on 9 Dec 2026.
  CBSE, CISCE, Cambridge and IB facts reuse the checked statements on the
  national english-home-tutor page (CBSE English Language and Literature 184
  for 2026-27; English Core 301; ICSE and ISC English; IGCSE 0500/0510;
  IB Language A), cbseacademic.nic.in and cisce.org as cited there.

  Area links render only when that Shillong area page exists and is active.
--}}
@php
  $sleSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $sleA = function (string $slug, string $label) use ($sleSlugs) {
      return in_array($slug, $sleSlugs, true)
          ? '<a href="' . e(url('/city/shillong/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide sle-guide" aria-labelledby="sleGuideTitle">
  <h2 id="sleGuideTitle">English home tutor in Shillong: board papers, reading, writing and speaking, sorted by the skill your child needs</h2>

  <p class="nx-guide__lede">
    English means different things to different Shillong families. For one child it is the SSLC paper on the Meghalaya
    board, with thirty multiple-choice questions to get through before any writing begins. For another it is a CBSE
    literature answer that stops after two lines, or an HSSLC English Core paper where reading and writing carry as
    many marks as literature. For a younger child it is simply reading aloud with confidence. We ask three things
    before suggesting anyone: the board, the weakest skill, and your locality. Two or three suitable English tutors
    follow, each fee visible, and the first lesson with the tutor you choose costs nothing.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#sle-sslc">MBOSE SSLC English</a> ·
    <a href="#sle-hsslc">HSSLC English Core</a> ·
    <a href="#sle-cbse">CBSE Class 10</a> ·
    <a href="#sle-other">ICSE, ISC, IGCSE, IB</a> ·
    <a href="#sle-skill">Which skill</a> ·
    <a href="#sle-young">Younger readers</a> ·
    <a href="#sle-local">Five localities</a> ·
    <a href="#sle-mode">Home or online</a> ·
    <a href="#sle-cost">Cost and request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="sle-sslc">The MBOSE SSLC English paper: four sections, four kinds of practice</h2>
  <p>
    The Meghalaya Board of School Education uses NCERT-based English books for Class 10 and publishes a full sample
    paper. The written paper is worth 80 marks, with 24 needed to pass, and the school awards 20 internal marks through
    project work, written tests or assignments, with a pass mark of 6.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>MBOSE SSLC English (2024-25 sample paper): sections, marks and a weekly task for each</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">What it tests</th><th scope="col">Marks</th><th scope="col">Weekly task</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>30 multiple-choice questions: 14 on the Reader and Supplementary Reader, 6 on grammar, 10 on a passage</td><td>30</td><td>A timed set of objective questions, with every wrong option explained</td></tr>
      <tr><td>B</td><td>An unseen factual passage with a chart, data or picture, ten one-mark questions</td><td>10</td><td>Reading a short report or table and answering only from it</td></tr>
      <tr><td>C</td><td>Two writing tasks of 8 marks each: a letter, article or story on a situation, and an analytical paragraph on a map, chart, graph or cue</td><td>16</td><td>One planned piece of writing, marked for content, format and accuracy</td></tr>
      <tr><td>D</td><td>Extracts, short answers and long answers on the two readers</td><td>24</td><td>Two literature answers that point to the text</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The balance is worth noticing. Almost half the marks sit in Sections A and B, which reward quick, accurate reading
    more than long writing. A tutor who only practises essays leaves those marks to chance; one who only drills
    multiple-choice leaves Section C and D thin. Under the 2026-27 SSLC programme issued on 14 September 2026, English
    is the first paper, on 4 December 2026, with Indian languages such as Khasi and Garo, or Additional English, on 9
    December; check www.mbose.in for any change. Our <a href="{{ url('/meghalaya-board-tutor-shillong') }}">MBOSE tutor
    in Shillong</a> page covers the other SSLC subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sle-hsslc">HSSLC English Core: the 2027 sample paper</h2>
  <p>
    The board issued new Class 12 sample papers in August 2026 for the 2027 HSSLC. English Core is an 80-mark,
    three-hour paper of eight compulsory questions in three sections: reading skills for 20 marks, grammar and creative
    writing for 20, and literature for 40. Word limits are set within the questions, and the paper asks students to
    keep to them. The board has also published rationalised English textbooks for Classes 11 and 12 on its downloads
    page, so the tutor should teach from the current list rather than an older guide.
  </p>
  <p>
    In practice, a Class 12 English Core student needs one timed reading passage and one piece of creative writing each
    week, plus literature answers planned in three moves: a claim, a reference to the text, and an explanation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sle-cbse">CBSE Class 10 English: where the marks are</h2>
  <p>
    The 2026-27 CBSE English Language and Literature paper divides its 80 marks into reading (20), writing with grammar
    (20) and literature (40). Reading has a discursive passage and a case-based factual passage with a chart or data;
    writing and grammar split into grammar 10, a formal letter 5 and an analytical paragraph 5. The school adds 20
    internal marks, of which 5 are for listening and speaking. With literature worth half the paper, the student who
    knows every story but writes a thin answer loses the most, and two marked literature answers a week usually help
    more than extra grammar worksheets. In Class 11, CBSE English Core splits into reading 26, grammar with creative
    writing 23 and literature 31. Our <a href="{{ url('/cbse-home-tutor-shillong') }}">CBSE home tutor in
    Shillong</a> page covers the board across subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sle-other">ICSE, ISC, IGCSE and IB English</h2>
  <ul>
    <li><strong>ICSE.</strong> Separate English language and literature papers of 80 marks each, plus internal marks; set texts and specimen papers come from cisce.org.</li>
    <li><strong>ISC.</strong> Two three-hour papers of 80 marks, each with project work. The language paper includes a composition, directed writing and a proposal.</li>
    <li><strong>Cambridge IGCSE.</strong> First Language English (0500) or English as a Second Language (0510 or 0511); the school's entry decides the course.</li>
    <li><strong>IB Language A.</strong> Analysis of unseen texts, a comparative essay and an individual oral.</li>
  </ul>
  <p>
    Fewer tutors teach these courses in any one city, so name the course in your first message; online lessons often
    fill the gap. The national <a href="{{ url('/english-home-tutor') }}">English home tutor</a> guide goes deeper into
    each.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sle-skill">Reading, writing, grammar, literature or speaking: naming the real problem</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Common English difficulties, what parents notice, and what lessons should do about them</caption>
    <thead>
      <tr><th scope="col">Skill</th><th scope="col">What you notice</th><th scope="col">What lessons should do</th></tr>
    </thead>
    <tbody>
      <tr><td>Reading</td><td>Answers wander away from the passage; objective questions guessed</td><td>Mark the evidence in the text first; time one passage a week</td></tr>
      <tr><td>Writing</td><td>Right format, nothing to say</td><td>Plan in points, then link them into paragraphs</td></tr>
      <tr><td>Grammar</td><td>The same errors in every piece</td><td>A personal list of errors, revisited until each one stops</td></tr>
      <tr><td>Literature</td><td>Knows the story, writes two lines</td><td>Claim, reference to the text, explanation, every time</td></tr>
      <tr><td>Speaking</td><td>Understands but rarely answers aloud</td><td>Short spoken summaries at the end of each lesson</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Speaking carries marks on several boards, and it matters beyond the exam for interviews and college. If fluent
    conversation is a goal, say so in your request, because it changes the tutor we look for; our
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide for students</a> explains what helps.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sle-young">Younger children, Classes 1 to 5</h2>
  <p>
    At this stage English tuition is about becoming a reader. The warning signs are easy to see: words guessed from the
    first letter, a finger that skips lines, a book put away unfinished. Short, frequent sessions work: the child
    sounds out new words, reads aloud while the tutor corrects gently, and retells the story in their own sentences. A
    tutor who talks about pictures and simple stories in English, switching to another language only to unblock a
    word, builds listening as well as reading. A primary specialist suits this age better than a board-exam tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sle-local">How English tutors reach five Shillong localities</h2>
  <p>
    Shillong has no railway, so tutors arrive by shared taxi, city bus or their own vehicle. A tutor from your own side
    of the city is usually the one who stays reliable through the monsoon. The
    <a href="{{ url('/city/shillong') }}">Shillong home tuition page</a> lists every locality.
  </p>
  <ul>
    <li><strong>{!! $sleA('police-bazar', 'Police Bazar') !!}</strong>: known in Khasi as Khyndailad, the city's main commercial hub, with homes in the lanes that branch off Jail Road, Quinton Road and Thana Road. Choose a time outside shop hours, and give the building name for a flat above a shop.</li>
    <li><strong>{!! $sleA('jaiaw', 'Jaiaw') !!}</strong>: an old residential ward next to Garikhana and Police Bazar, with its own post office. Many homes are up narrow, sloping lanes, so share the lane name and say if the last part is on foot.</li>
    <li><strong>{!! $sleA('laitumkhrah', 'Laitumkhrah') !!}</strong>: often called the heart of Shillong and known as a centre of education, with a busy market. School and college traffic peaks at opening and closing times, so evening lessons run more smoothly.</li>
    <li><strong>{!! $sleA('umpling', 'Umpling') !!}</strong>: linked to Laitumkhrah by its own road and next to Rynjah. Tutors from Rynjah, Laitumkhrah or Nongthymmai are the first to look for; agree a meeting point at the Lapalang or Nongrah stop for the first visit.</li>
    <li><strong>{!! $sleA('mawlai', 'Mawlai') !!}</strong>: a large area of several localities, among them Mawlai Mawiong, Nongpdeng and Mawdatbaki. Say which part you live in and the nearest stop; homes on steps or narrow lanes should mention it when booking.</li>
  </ul>
  <p>
    The <a href="{{ url('/city/shillong/zone/police-bazar-jaiaw') }}">Police Bazar and Jaiaw</a> and
    <a href="{{ url('/city/shillong/zone/mawlai-pynthorumkhrah') }}">Mawlai and Pynthorumkhrah</a> zone pages add
    timing advice, and the <a href="{{ url('/blog/shillong-home-tuition-guide') }}">Shillong home tuition guide</a>
    covers each zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sle-mode">Home or online for English?</h2>
  <p>
    From about Class 3, online English lessons work well, provided the tutor sees written work beforehand as notebook
    photos or a shared file. Online also opens up ISC, IGCSE and IB specialists from other cities. Home visits remain the
    stronger choice for beginning readers and for speaking practice, which tends to grow faster in person. Many families
    combine a weekly visit with a weekly screen lesson that can also stand in on a heavy-rain evening. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article weighs the choice, and
    the <a href="{{ url('/online-tutor-shillong') }}">online tutors for Shillong</a> page explains how online matching
    works here.
  </p>
  <p>
    After the demo, ask yourself: did the tutor look at a marked school answer first? Did your child produce something,
    a paragraph or a spoken answer, rather than only listen? Does the tutor know how your child's paper is laid out?
    And is there homework that will be corrected next time? Mostly no means asking for the next tutor on your shortlist;
    a later change is free too. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> has more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sle-cost">What does an English home tutor in Shillong cost, and how do you ask?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets a rate that reflects the class and board, experience with that paper, the trip at your chosen hour
    and the number of weekly lessons. The shortlist shows every fee before the demo; the
    <a href="{{ url('/blog/home-tuition-fees-shillong') }}">Shillong home tuition fees</a> article explains more.
  </p>
  <p>
    To ask for tutors, send your child's class and board, the English skill that worries you, your locality with a
    landmark or bus stop, the days and times that suit, and a budget. Two or three matched tutors come back with their
    fees. Tutors who join NXTutors go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the
    profile goes live. The <a href="{{ url('/maths-home-tutor-shillong') }}">maths</a> and
    <a href="{{ url('/science-home-tutor-shillong') }}">science</a> pages for Shillong cover other subjects, and English
    teachers looking for students can open <a href="{{ url('/tuition-jobs/shillong') }}">Shillong tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
