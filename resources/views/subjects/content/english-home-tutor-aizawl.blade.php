{{--
  Long-form guide for the "English home tutor Aizawl" page (MBSE HSLC and
  HSSLC, CBSE, ICSE/ISC, IB/IGCSE; early reading; speaking). Byline in
  config: NXTutors Academic Team. Page writer (capitals wave 2, subjects),
  3 Oct 2026. Local facts come only from
  database/seo-content/areas/aizawl-research.json.
  MBSE facts only from mbse.edu.in (read 3 Oct 2026):
  - http://www.mbse.edu.in/mbseadmin/pdf/HSLC%20Scheme%202019.pdf (linked from
    https://www.mbse.edu.in/question-design-and-scheme-of-examination-secondary-schools/):
    English Class X, 80 marks, 3 hours, four sections A-D: Reading 10 (one
    unseen passage of 350-450 words, factual, literary or discursive, with
    2 marks for word-attack skills), Writing 15 (one short composition of
    not more than 50 words from two choices, 5 marks: post card, notice,
    message, poster, report, invitation, precis; one long composition of
    150-200 words, 10 marks: article, formal or informal letter, essay,
    diary entry), Grammar 15 (8 multiple-choice, 7 very short: tenses,
    modals, voice, concord, clauses, narration and more), Literature 40
    (Course Book 26, Literature Reader 14); difficulty 30/50/20; no overall
    choice. Mizo is a compulsory language subject (80 marks); other
    languages in lieu of Mizo include Alternative English.
  - https://www.mbse.edu.in/wp-content/uploads/2025/12/HS-Textbook-List-2026-2027.pdf :
    English for Class X: "Essential English: A Multiskill Language Course"
    (Main Course Book 10, Literature Reader 10, Workbook 10) and a grammar
    and usage book; Alternative English: Morning Dew 10 and a rapid reader.
  - https://www.mbse.edu.in/mbseadmin/pdf/HS-Curriculum.pdf (linked from
    https://www.mbse.edu.in/syllabus-secondary-schools/), section 14.5: the
    medium of instruction in general in all affiliated schools shall be
    English.
  - https://www.mbse.edu.in/wp-content/uploads/2024/08/HSS-Scheme-of-Examination-Question-Design-wef-2025.pdf :
    HSSLC English Class XII, 80 marks, 3 hours, 34 questions (16 x1, 11 x2,
    2 x4, 4 x6, 1 x10); Reading 16 (unseen passages, note-making and summary
    6), Writing 24 (notice and invitation 4 + 4, letter 10, article or
    report of 120 words 6), Literature 40 (Flamingo: poetry 8, prose 16;
    Vistas 16). Class XI: reading 16, writing 20, grammar 8, literature 36
    (Hornbill, Snapshots). English or Hindi is Language I.
  - https://www.mbse.edu.in/wp-content/uploads/2026/02/Standardized-Assessment-Framework-And-Competency-Based-Question-Bank-2025.pdf :
    English item bank, 108 items (MCQ and constructed response) with marking
    schemes.
  CBSE / CISCE facts reuse statements already on the existing city English
  pages (from the repo's checked blog facts). No school, college,
  university, hospital, stadium, society or people's names, no distances or
  travel times, only the allowed fee sentence. Weather is timing advice only.

  Area links render only when that Aizawl area page exists and is active.
--}}
@php
  $azAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $azA = function (string $slug, string $label) use ($azAreaSlugs) {
      return in_array($slug, $azAreaSlugs, true)
          ? '<a href="' . e(url('/city/aizawl/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide aze-guide" aria-labelledby="azeGuideTitle">
  <h2 id="azeGuideTitle">English home tutor in Aizawl: literature, writing and grammar for the paper your child sits</h2>

  <p class="nx-guide__lede">
    English matters twice over for many Aizawl students. It is a subject with its own board paper, and, according to
    the Mizoram board's curriculum, it is in general the medium of instruction in the schools the board affiliates,
    so weak reading or writing drags down science and social science too. Parents usually notice one symptom: long
    literature answers that say little, letters that lose format marks, or a reading passage answered from memory
    instead of the text. Tell us the board, the class and the skill that worries you. Two or three English tutors
    come back with their fees showing, and your child's first lesson with the one you choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#aze-papers">Which paper</a> ·
    <a href="#aze-hslc">MBSE Class 10</a> ·
    <a href="#aze-hsslc">MBSE Class 12</a> ·
    <a href="#aze-cbse">CBSE</a> ·
    <a href="#aze-skill">The weak skill</a> ·
    <a href="#aze-young">Young readers</a> ·
    <a href="#aze-places">Localities</a> ·
    <a href="#aze-fees">Cost and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="aze-papers">Start with the paper: English courses in Aizawl</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The English courses Aizawl students follow, their texts, and the official place to check details</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Books or texts</th><th scope="col">Official detail</th></tr>
    </thead>
    <tbody>
      <tr><td>MBSE HSLC (Class 10)</td><td>Essential English: Main Course Book, Literature Reader and Workbook for Class 10, with a grammar and usage book</td><td>Question design, textbook list and past HSLC papers on mbse.edu.in</td></tr>
      <tr><td>MBSE Alternative English (in place of Mizo)</td><td>Morning Dew 10 and a rapid reader</td><td>The board's separate Alternative English scheme and syllabus</td></tr>
      <tr><td>MBSE HSSLC (Class 11 and 12)</td><td>Hornbill and Snapshots in Class 11; Flamingo and Vistas in Class 12</td><td>The Higher Secondary question design on mbse.edu.in</td></tr>
      <tr><td>CBSE Class 10 and 12</td><td>NCERT texts: Language and Literature to Class 10, English Core after</td><td>cbseacademic.nic.in, for the curriculum and each year's sample paper</td></tr>
      <tr><td>ICSE, ISC, IGCSE, IB</td><td>Set texts chosen by CISCE; school-chosen texts for international courses</td><td>cisce.org, or the school's exam entries</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aze-hslc">MBSE Class 10 English: four sections, 80 marks</h2>
  <p>
    The board's question design gives English one three-hour paper with four sections and no overall choice. The
    weights show at once where a tutor's time should go:
  </p>
  <ul>
    <li><strong>Section A, reading (10 marks).</strong> One unseen passage of 350 to 450 words: factual, literary or an opinion piece, with two marks for word-attack skills such as word formation and inferring meaning.</li>
    <li><strong>Section B, writing (15 marks).</strong> A short composition of no more than 50 words, chosen from two (a notice, message, poster, postcard, report, invitation or précis), for 5 marks; and a long composition of 150 to 200 words, such as an article, a formal or informal letter, an essay or a diary entry, for 10.</li>
    <li><strong>Section C, grammar (15 marks).</strong> Eight multiple-choice and seven very short items on tenses, modals, active and passive voice, subject–verb agreement, clauses, reported speech and more.</li>
    <li><strong>Section D, literature (40 marks).</strong> 26 from the Main Course Book's prose and poetry, through extracts and short answers of 50 to 75 words, and 14 from the Literature Reader, including a drama extract.</li>
  </ul>
  <p>
    Literature is half the paper, so a student must know the set prose, poems and play closely enough to recognise
    any extract and answer from it. The writing tasks are precise about length: a 50-word notice that runs to 90 words, or a letter without
    its format, gives away easy marks. The board's Class 10 item bank, issued in November 2025, adds 108 English
    questions with marking schemes, a ready source of practice in the board's own voice. For the board's other
    subjects, see our <a href="{{ url('/mizoram-board-tutor-aizawl') }}">Mizoram Board tutor in Aizawl</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aze-hsslc">MBSE Classes 11 and 12: the HSSLC English paper</h2>
  <p>
    English or Hindi is the first language for the Higher Secondary certificate, and the English paper in Class 12
    is three hours and 80 marks over 34 questions. Reading carries 16 marks, including note-making and a summary.
    Writing carries 24: a notice and an invitation of about 50 words each, a 10-mark letter, and an article or report
    of about 120 words. Literature carries 40, split between Flamingo (poetry 8, prose 16) and the supplementary
    reader Vistas (16). In Class 11 the texts are Hornbill and Snapshots, and the paper also sets 8 marks of grammar.
  </p>
  <p>
    Because the letter alone is worth 10 marks, with 3 of them for format, an hour spent on letter layouts and
    openings is rarely wasted. Note-making and summary reward a method that can be taught: headings, sub-points,
    abbreviations and a key, then a summary written only from the notes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aze-cbse">CBSE, ICSE and the international courses</h2>
  <p>
    CBSE's Class 10 English paper carries 80 marks in 2026-27, and half of them, 40, come from literature. Reading is
    worth 20, split between an opinion-style passage and a factual case passage that includes a chart or data.
    Writing and grammar share the last 20: grammar takes 10, and a formal letter and an analytical paragraph that
    describes a chart, map or graph take 5 each. Another 20 marks are awarded in school, 5 of them for listening and
    speaking. CBSE English Core in Class 11 gives reading 26 marks, grammar and creative writing 23, and literature
    31. ISC keeps literature as a separate paper; its language paper asks for one composition of 400 to 450 words
    from a choice of six, plus directed writing and a proposal. For IGCSE, check with the school whether your child
    is entered for First or Second Language English; IB students work towards unseen textual analysis and an
    individual oral. The
    <a href="{{ url('/cbse-home-tutor-aizawl') }}">CBSE home tutor in Aizawl</a> page covers that board's other
    subjects, and the national <a href="{{ url('/english-home-tutor') }}">English home tutor guide</a> treats each
    course in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aze-skill">Name the weak skill, then choose the tutor</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five English problems parents describe, and what a tutor should do about each</caption>
    <thead>
      <tr><th scope="col">What you notice</th><th scope="col">The likely gap</th><th scope="col">What lessons should train</th></tr>
    </thead>
    <tbody>
      <tr><td>Reading answers copied from memory, not the passage</td><td>Locating evidence</td><td>Underline first, answer second; one timed unseen passage a week</td></tr>
      <tr><td>Letters and notices that lose marks</td><td>Format and length</td><td>A layout card for each task type, then writing to the word limit</td></tr>
      <tr><td>The same grammar errors in every essay</td><td>Unnoticed habits</td><td>A personal error list built from your child's own writing</td></tr>
      <tr><td>Literature answers that retell the story</td><td>Answer structure</td><td>Point, reference to the text, explanation, in that order</td></tr>
      <tr><td>Reluctance to speak in English</td><td>Confidence</td><td>A brief talk in English to close every lesson, a little longer each week</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Name the weak skill when you write to us; it decides which tutor we put forward. If confident speech matters as
    much as marks, mention that too; the
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide for students</a> describes what
    works. For a child more at ease in another language, a tutor can explain in both at first and then
    let English take over lesson by lesson, with a short daily reading habit and a notebook of new words.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aze-young">Classes 1 to 5: becoming a confident reader</h2>
  <p>
    For younger children the aim is fluent, willing reading. Warning signs include words guessed from the first
    letter, lines skipped, or a book put down after a page. Short, frequent practice works: the child sounds out new
    words, reads aloud with gentle correction, and retells the story in their own sentences. Chatting in English
    about a picture book builds the ear along with the eye. At this age a teacher who specialises in primary
    reading is a better choice than one who coaches board papers, and lessons at home beat lessons on a screen.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aze-places">How English tutors reach five Aizawl localities</h2>
  <p>
    In Aizawl a tutor's visit hinges on the hill roads, the stairs to your door and the day's rain, so the steadiest
    choice is normally someone living on your side of the valley. The <a href="{{ url('/city/aizawl') }}">Aizawl home tuition page</a> lists every
    locality.
  </p>
  <p>
    {!! $azA('zemabawk', 'Zemabawk') !!} mixes residential lanes with government rental blocks and institutional
    land; give the block name, and expect larger buildings to note visitors. Tutors from Thuampui or Bawngkawn are
    the easiest match. In {!! $azA('dawrpui', 'Dawrpui') !!}, around Bara Bazar, the market roads stay crowded much of
    the day, so lessons after shopping hours start on time. {!! $azA('tuikual', 'Tuikual') !!} is separated from its
    neighbours by deep valleys, so a tutor from Dinthar or Vaivakawn may be quicker than one who looks closer on a
    map. {!! $azA('bethlehem', 'Bethlehem') !!} shares a ward with College Veng, with Republic and Venghlui nearby;
    weekday slots outside office hours suit it. And in {!! $azA('kulikawn', 'Kulikawn') !!}, where Tlangnuam,
    Saikhamakawn and Thakthing are the nearest sources of tutors, tell the tutor which entrance and floor to use and
    share a phone number for the first visit.
  </p>
  <p>
    When the rain is too heavy for the trip, keep the lesson by moving it online at the normal time with the same
    tutor. From around Class 3, English adapts well to a screen, provided your child sends written work ahead. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> article and the
    <a href="{{ url('/online-tutor-aizawl') }}">online tutor for Aizawl</a> page explain the options, and the
    <a href="{{ url('/city/aizawl/zone/chanmari-zarkawt-dawrpui') }}">Chanmari, Zarkawt and Dawrpui</a> zone page and
    <a href="{{ url('/blog/aizawl-home-tuition-guide') }}">Aizawl home tuition guide</a> add more local detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aze-fees">What an English home tutor in Aizawl costs, and how to ask</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor decides the
    rate, which usually tracks the class and board, experience with that paper, the trip to your home at your chosen
    hour, and how many lessons a week you want. Fees show on the shortlist before the demo; read the
    <a href="{{ url('/blog/home-tuition-fees-aizawl') }}">Aizawl home tuition fees</a> article for the details.
  </p>
  <p>
    To start, tell us your child's class and board, the skill you are worried about, and your locality, building and
    floor, with the days and hours you can offer. We send two or three tutors with fees, and you pick one for a
    <a href="{{ url('/demo-class') }}">free demo class</a>. After it, check three things: the tutor studied a marked
    piece of school work, your child produced some writing or speech, and you know what happens next. If any is
    missing, the next tutor on your list gives a demo, and a later change of tutor is free. Every tutor who joins
    passes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is marked Verified. For other
    subjects see the Aizawl <a href="{{ url('/maths-home-tutor-aizawl') }}">maths</a> and
    <a href="{{ url('/science-home-tutor-aizawl') }}">science</a> pages; English teachers who want students nearby
    can browse <a href="{{ url('/tuition-jobs/aizawl') }}">Aizawl tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
