{{--
  Board hub: "Meghalaya Board tutor Shillong" (Meghalaya Board of School
  Education, MBOSE: SSLC Class 10 and HSSLC Class 12). Author: nxtutors
  (NXTutors Academic Team). Page writer (capitals wave 2, subjects), 3 Oct
  2026. No school, college, university, coaching, hospital, society or people
  names. No results, toppers or candidate counts. No defence or tourism
  references. Dates only as printed in the board's own notices.

  Official sources, all on www.mbose.in (read 3 Oct 2026):
  - https://www.mbose.in/ and https://www.mbose.in/about/about-us : board
    started 1973, headquarters at Tura; first SSLC examination 1974; the
    higher secondary stage (earlier a separate course) taken over by the
    board after 1996; frames the syllabus for all classes including SSLC and
    HSSLC; MBOSE Act 1973 as amended in 2006; HSSLC results listed for Arts,
    Science, Commerce and Vocational streams; previous question papers for
    Class X (2017-2026), Class XI (2018-2022) and Class XII (2018-2026);
    syllabus, booklist, sample question papers, CM IMPACT Guidebook for SSLC
    Examination 2026.
  - https://www.mbose.in/contact-us : Tura, West Garo Hills. Board notices are
    copied to "The Director, MBOSE Regional Office, Shillong" (e.g. the
    notifications below); the Branch page lists a Shillong Office.
  - Programme for SSLC Examination 2026-27, 14 Sep 2026:
    https://www.mbose.in/public/notice/17893801860.pdf  English 4 Dec,
    Science 7 Dec, Indian Languages / Additional English 9 Dec, Health and
    Physical Education / Computer Science / Vocational 11 Dec, Social Science
    14 Dec, Mathematics / Special Mathematics 16 Dec 2026; 10 am-1 pm;
    vocational theory one hour; Indian languages Garo, Khasi, Hindi, Bengali,
    Assamese, Nepali, Urdu, Mizo; may be rescheduled.
  - Notification No. 1021, 9 Sep 2026: https://www.mbose.in/public/notice/17889610260.pdf
    SSLC online forms by 30 Sep 2026 for the December 2026 exam; HSSLC 2027
    forms tentatively last week of October to last week of November 2026.
  - SSLC sample papers 2024-25: Mathematics
    https://www.mbose.in/public/media_file/1782119605.pdf ; Science
    https://www.mbose.in/public/media_file/1782119640.pdf ; English
    https://www.mbose.in/public/media_file/1782119526.pdf (80 theory, pass 24;
    20 internal, pass 6; internal by project work, written tests or
    assignments; maths answers with minimum steps; science word limits).
    Corrigendum 262: https://www.mbose.in/public/media_file/1782119443.pdf ;
    Notification 268 (sample papers for Additional English, Garo, Khasi,
    Computer Science; new pattern from SSLC 2025):
    https://www.mbose.in/public/media_file/1782119040.pdf
  - Notification No. 40, 6 Nov 2024: https://www.mbose.in/public/media_file/1782119473.pdf
    CBSE question pattern for Class XI-XII subjects with CBSE syllabus and
    NCERT books; Alternative English, Modern Indian Languages, Philosophy,
    Education, Geology, Anthropology, Statistics and Elective Languages keep
    the MBOSE pattern; Class XI from 2024-25, HSSLC from 2026.
  - Notification No. 39, 10 Jul 2024 (inside
    https://www.mbose.in/public/media_file/1776162442.zip): 20 internal marks
    in Classes XI and XII from 2024-25 / 2025-26 for Alternative English,
    Modern Indian Languages, Philosophy, Education, Statistics and Elective
    Languages.
  - Notification No. 1020, 28 Aug 2026: https://www.mbose.in/public/notice/17879049240.pdf
    Class XII sample papers in 21 subjects, new pattern from HSSLC 2027; same
    pattern for Class XI internal/promotion exams from 2027. Physics sample
    https://www.mbose.in/public/media_file/1787905161.pdf (33 questions, 70
    marks); English Core sample https://www.mbose.in/public/media_file/1787905609.pdf
    (80 marks: reading 20, grammar and creative writing 20, literature 40).
  - Assessment Blueprint Classes 9 and 10 (Government of Meghalaya, DERT,
    2024, "a sample only") and FAQs, inside
    https://www.mbose.in/public/media_file/1775648411.zip : half-yearly,
    annual and selection-test papers set in school; LO-mapped syllabus with an
    academic year plan.
  - Notice of 15 Sep 2026 (session named by calendar year, "Academic Session
    2026"): https://www.mbose.in/public/notice/17894655420.pdf
  Local detail only from database/seo-content/areas/shillong-research.json.
  Fee wording is the approved sentence. FAQs render from
  faqs/meghalaya-board-tutor-shillong.php. Area links render only for active areas.
--}}
@php
  $slxSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $slxA = function (string $slug, string $label) use ($slxSlugs) {
      return in_array($slug, $slxSlugs, true)
          ? '<a href="' . e(url('/city/shillong/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide slx-guide" aria-labelledby="slxGuideTitle">
  <h2 id="slxGuideTitle">Meghalaya Board (MBOSE) tutors in Shillong: SSLC in Class 10, HSSLC in Class 12</h2>

  <p class="nx-guide__lede">
    Shillong is the capital of Meghalaya, and many of its students take the examinations of the state's own board, the
    Meghalaya Board of School Education, known as MBOSE. Its headquarters are at Tura, and its notices are also sent to
    the board's regional office in Shillong. MBOSE conducts two public examinations: the Secondary School Leaving
    Certificate (SSLC) at the end of Class 10 and the Higher Secondary School Leaving Certificate (HSSLC) at the end of
    Class 12. Both have changed recently, and the SSLC runs on a calendar quite unlike CBSE's. This page summarises what
    the board's own documents say, explains how a home tutor should work with them, and lists the questions worth
    asking at a demo. Every exam detail here comes from www.mbose.in; the board revises its papers and dates, so check
    its notices again at the start of your child's exam year.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#slx-board">The board</a> ·
    <a href="#slx-calendar">Calendar</a> ·
    <a href="#slx-sslc">SSLC papers</a> ·
    <a href="#slx-hsslc">HSSLC changes</a> ·
    <a href="#slx-school">School exams</a> ·
    <a href="#slx-files">Board material</a> ·
    <a href="#slx-plan">Class 9 to 12</a> ·
    <a href="#slx-where">Localities</a> ·
    <a href="#slx-demo">The demo</a> ·
    <a href="#slx-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="slx-board">The Meghalaya board in brief</h2>
  <p>
    According to its website, MBOSE began in 1973 with its headquarters at Tura and held its first SSLC examination in
    1974. The higher secondary stage was run outside the board until 1996, when the board took it
    over; since then it has framed the syllabus for all classes, including SSLC and HSSLC. It works under the MBOSE Act
    of 1973, as amended in 2006. Students are registered with the board in Class 9 and again in Class 11, and HSSLC
    results are published by stream: Arts, Science, Commerce and Vocational.
  </p>
  <p>
    For a family, the practical point is this: in the SSLC papers whose samples we read, part of the marks is earned
    in school and part in the written board paper, and each part has its own pass mark. A tutor cannot award the school marks, but
    can make sure the work behind them is done well and on time.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slx-calendar">A different calendar from CBSE</h2>
  <p>
    MBOSE notices name the school session by calendar year ("Academic Session 2026"), and the SSLC sits at the end of
    it. The board's programme for the 2026-27 SSLC, issued on 14 September 2026, runs from 4 to 16 December 2026, each
    paper from 10 am to 1 pm:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>MBOSE SSLC Examination 2026-27 programme, as published by the board (subject to rescheduling)</caption>
    <thead>
      <tr><th scope="col">Date</th><th scope="col">Paper</th></tr>
    </thead>
    <tbody>
      <tr><td>Friday 4 December 2026</td><td>English</td></tr>
      <tr><td>Monday 7 December 2026</td><td>Science</td></tr>
      <tr><td>Wednesday 9 December 2026</td><td>Indian Languages (Garo, Khasi, Hindi, Bengali, Assamese, Nepali, Urdu, Mizo) or Additional English</td></tr>
      <tr><td>Friday 11 December 2026</td><td>Health and Physical Education, Computer Science or a vocational subject (vocational theory is one hour)</td></tr>
      <tr><td>Monday 14 December 2026</td><td>Social Science</td></tr>
      <tr><td>Wednesday 16 December 2026</td><td>Mathematics or Special Mathematics</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The board asked schools to complete SSLC application forms by 30 September 2026, and said HSSLC 2027 forms are
    expected to be filled between late October and late November 2026. HSSLC exam dates come in a separate notice. For
    tuition, the message is simple: a Class 10 MBOSE student needs the syllabus finished and full papers practised
    well before December, not in the spring.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slx-sslc">SSLC papers: what the sample papers show</h2>
  <p>
    The board's 2024-25 sample papers for mathematics, science and English, written for the new NCERT-based course,
    share one frame: 80 marks for the written paper with 24 to pass, and 20 internal marks with 6 to pass, awarded
    through project work, written tests or assignments. Each paper opens with 30 one-mark multiple-choice questions
    answered in boxes on the answer sheet.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Three SSLC papers in the MBOSE sample papers: the features a tutor must train for</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">After the 30 multiple-choice marks</th><th scope="col">Feature to train</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>Any 6 of 9 two-mark, 6 of 9 three-mark and 4 of 7 five-mark questions</td><td>Minimum steps: three, five and eight in those sections</td></tr>
      <tr><td>Science and Technology</td><td>Ten two-mark, six three-mark and three four-mark answers, each chosen from a larger set</td><td>Word limits of 30, 50 and 70 words</td></tr>
      <tr><td>English</td><td>Ten questions on an unseen factual passage, two writing tasks of 8 marks, 24 marks of literature</td><td>Reading data and charts; planned writing</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The board has also published sample papers for Additional English, Garo, Khasi and Computer Science, with the new
    pattern applying from the 2025 SSLC. Subject detail is on our
    <a href="{{ url('/maths-home-tutor-shillong') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-shillong') }}">science</a> and
    <a href="{{ url('/english-home-tutor-shillong') }}">English</a> pages for Shillong.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slx-hsslc">HSSLC: the move to the CBSE question pattern</h2>
  <p>
    The biggest recent change is at Classes 11 and 12. A notification of November 2024 put every subject that uses the
    CBSE syllabus and NCERT textbooks on the CBSE question pattern, from the 2024-25 session in Class 11 and from the
    2026 HSSLC. A group of subjects keeps the board's own pattern: Alternative English, Modern Indian Languages,
    Philosophy, Education, Geology, Anthropology, Statistics and Elective Languages. Separately, the board gave 20
    internal marks to Alternative English, Modern Indian Languages, Philosophy, Education, Statistics and Elective
    Languages.
  </p>
  <p>
    In August 2026 the board issued new Class 12 sample papers in 21 subjects, from English and Mathematics to Physics,
    Chemistry, Biology, Accountancy, Business Studies, Economics, History, Geography and Psychology, for the 2027
    HSSLC. It added that Class 11 internal and promotion examinations will follow the same pattern from 2027. The
    physics sample, for instance, has 33 questions for 70 marks in five sections, and English Core gives 20 marks to
    reading, 20 to grammar and creative writing and 40 to literature. In practice, an HSSLC student in a CBSE-pattern
    subject can use NCERT and CBSE-style practice, but should sit the MBOSE sample paper itself under time. See our
    <a href="{{ url('/physics-home-tutor-shillong') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-shillong') }}">chemistry</a> pages for Shillong.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slx-school">Exams inside school before the board paper</h2>
  <p>
    The board's site also carries a 2024 assessment blueprint for Classes 9 and 10 from the state's Directorate of
    Educational Research and Training, described as a sample that may change. It sets out school papers for the
    half-yearly and annual examinations and, in Class 10, a selection test, along with chapter weights and question
    types, and it links each question type to learning outcomes. Its FAQs point teachers to an academic year plan in
    the learning-outcome syllabus for Classes 1 to 10. A tutor who reads these can match practice to what the school
    will test each term, not only to the final board paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slx-files">Free material on the board's website</h2>
  <ul>
    <li><strong>Sample question papers</strong> for SSLC subjects and the new Class 12 set for HSSLC 2027.</li>
    <li><strong>Previous question papers</strong> for Class 10 from 2017 to 2026, some Class 11 years, and Class 12 from 2018 to 2026.</li>
    <li><strong>Syllabus and booklist</strong> files, including rationalised English textbooks for Classes 9 to 12.</li>
    <li><strong>A CM IMPACT guidebook</strong> for the SSLC examination, with corrigenda.</li>
    <li><strong>Notifications</strong> on exam programmes, registration and form filling.</li>
  </ul>
  <p>
    At the demo, ask the tutor which of these they have already used for your child's subject this session. A vague
    answer is a warning sign.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slx-plan">Four years on the Meghalaya board: where tuition time goes</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>MBOSE tuition from Class 9 to Class 12</caption>
    <thead>
      <tr><th scope="col">Year</th><th scope="col">Main work with the tutor</th><th scope="col">Sessions a week, typically</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9</td><td>NCERT foundations in maths and science; school half-yearly and annual papers; board registration</td><td>Two</td></tr>
      <tr><td>Class 10 (SSLC)</td><td>Syllabus finished early; Section A drills; full sample and past papers marked for steps and word limits; internal work on time</td><td>Two to three, rising before December</td></tr>
      <tr><td>Class 11</td><td>The new stream's subjects in the CBSE question pattern; school exams in the board's new format from 2027</td><td>One or two per subject</td></tr>
      <tr><td>Class 12 (HSSLC)</td><td>MBOSE 2027 sample papers and past papers; practical and internal work; entrance preparation for some</td><td>Two per main subject in the final months</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For stream choice after Class 10, read <a href="{{ url('/blog/how-to-choose-boardstream') }}">how to choose a board
    and stream</a>; students planning an engineering or medical entrance can see the national
    <a href="{{ url('/jee-home-tutor') }}">JEE</a> and <a href="{{ url('/neet-home-tutor') }}">NEET</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slx-where">How tutors reach six Shillong localities</h2>
  <p>
    The tutor who lasts is the one for whom your home is an easy weekly trip, so shortlists start in your locality and
    widen to the zone, the city and then online. Shillong has no railway; tutors use shared taxis, city buses or their
    own vehicles.
  </p>
  <ul>
    <li><strong>{!! $slxA('police-bazar', 'Police Bazar') !!}</strong>: the busy commercial core, with homes in side lanes such as those off Jail Road and Quinton Road; pick a time outside shop hours.</li>
    <li><strong>{!! $slxA('jaiaw', 'Jaiaw') !!}</strong>: once part of the old Mawkhar village, with sloping lanes such as Jaiaw Laitdom; say if the last stretch is on foot.</li>
    <li><strong>{!! $slxA('laban', 'Laban') !!}</strong>: name your part, Lumparing, Madan Laban, Kench's Trace or Rilbong; allow extra time on hill roads in heavy rain.</li>
    <li><strong>{!! $slxA('malki', 'Malki') !!}</strong>: between the centre and Laitumkhrah, with Dhankheti and Risa Colony; the Dhankheti and Malki stops help tutors on public transport.</li>
    <li><strong>{!! $slxA('rynjah', 'Rynjah') !!}</strong>: lanes known by bylane number; tutors already teaching in Laitumkhrah or Nongthymmai can add it to a round.</li>
    <li><strong>{!! $slxA('mawlai', 'Mawlai') !!}</strong>: many separate localities; give yours and the nearest stop, such as Mawiong, Nonglum or Mawlai Pump.</li>
  </ul>
  <p>
    Zone pages: <a href="{{ url('/city/shillong/zone/police-bazar-jaiaw') }}">Police Bazar and Jaiaw</a>,
    <a href="{{ url('/city/shillong/zone/laban-upper-shillong') }}">Laban and Upper Shillong</a>,
    <a href="{{ url('/city/shillong/zone/laitumkhrah-rynjah') }}">Laitumkhrah and Rynjah</a> and
    <a href="{{ url('/city/shillong/zone/mawlai-pynthorumkhrah') }}">Mawlai and Pynthorumkhrah</a>. Every locality is on
    the <a href="{{ url('/city/shillong') }}">Shillong home tutors page</a>, and the
    <a href="{{ url('/blog/shillong-home-tuition-guide') }}">Shillong home tuition guide</a> covers each zone. On cold
    winter evenings and heavy monsoon days, an <a href="{{ url('/online-tutor-shillong') }}">online lesson</a> at the
    usual hour keeps the week intact.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slx-demo">Questions to ask at an MBOSE demo</h2>
  <ol>
    <li><strong>Board experience.</strong> Which MBOSE classes and subjects has the tutor taught recently? SSLC maths and HSSLC chemistry need different strengths.</li>
    <li><strong>Current documents.</strong> Can the tutor explain this year's SSLC programme, or the 2027 HSSLC sample paper for your child's subject?</li>
    <li><strong>Answer format.</strong> Will practice be marked for the board's step minimums or word limits, not just right or wrong?</li>
    <li><strong>School marks.</strong> How will projects, assignments and school tests be kept on schedule, with the work left to the student?</li>
    <li><strong>Travel and weather.</strong> Which route will the tutor take, and what happens on a heavy-rain evening?</li>
  </ol>
  <p>
    You receive two or three matched tutors with their fees listed up front. The first class is free, and changing
    tutor later is free too. Tutors who join NXTutors go through an <a href="{{ url('/how-we-verify-tutors') }}">ID
    check</a> before their profile appears. More questions are in the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>. If your child follows CBSE
    instead, see the <a href="{{ url('/cbse-home-tutor-shillong') }}">CBSE home tutor in Shillong</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slx-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own rates; the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our article on
    <a href="{{ url('/blog/home-tuition-fees-shillong') }}">home tuition fees in Shillong</a> explain what moves them.
  </p>
  <p>
    To begin, send the class, the stream if your child is in Class 11 or 12, the subjects, your locality with a
    landmark or bus stop and your free evenings, then book the <a href="{{ url('/demo-class') }}">free demo class</a>.
    You can look through <a href="{{ url('/tutors') }}">tutor profiles</a> first. Teachers of MBOSE subjects can find
    openings on <a href="{{ url('/tuition-jobs/shillong') }}">Shillong tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
