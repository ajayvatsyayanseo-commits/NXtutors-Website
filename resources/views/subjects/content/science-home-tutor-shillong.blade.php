{{--
  Long-form guide for the "science home tutor Shillong" page (Classes 6 to 10:
  MBOSE SSLC, CBSE and ICSE). Byline in config: Aaditya Kashyap (CBSE and ICSE
  science); role statement only, no anecdotes. Page writer (capitals wave 2,
  subjects), 3 Oct 2026.

  Local facts only from database/seo-content/areas/shillong-research.json.
  No school, college, university, hospital, society or people's names; no
  distances or travel times; only the allowed fee sentence; no defence or
  tourism references.

  MBOSE facts, read on www.mbose.in on 3 Oct 2026:
  - SSLC Science sample paper (Science & Technology, new course, NCERT
    textbook), 2024-25: https://www.mbose.in/public/media_file/1782119640.pdf
    80 theory (pass 24) + 20 internal (pass 6); A 30 MCQ x 1; B very short
    answers x 2 (attempt 10), up to 30 words; C short answers x 3 (attempt 6),
    up to 50 words; D long answers x 4 (attempt 3 of 5), up to 70 words.
    Indicative weightage: chapters 1-4 (chemical reactions, acids/bases/salts,
    metals and non-metals, carbon compounds) 26; chapters 5-8 and 13 (life
    processes, control and coordination, reproduction, heredity, our
    environment) 28; chapters 9-12 (light, the eye, electricity, magnetic
    effects) 26. Internal assessment through project work, written tests or
    assignments; project types: discussions and debates, reports, charts,
    posters and diagrams, textbook activities.
  - Corrigendum No. 262, 19 Sep 2024 (Section B now 13 questions offered,
    Section C 8): https://www.mbose.in/public/media_file/1782119443.pdf
  - Programme for SSLC Examination 2026-27 (Science on 7 Dec 2026):
    https://www.mbose.in/public/notice/17893801860.pdf
  - Assessment Blueprint, Classes 9 and 10 (Government of Meghalaya, DERT,
    2024; "a sample only"), inside
    https://www.mbose.in/public/media_file/1775648411.zip : school half-yearly
    examination and selection test for Class 10; suggested internal
    assessment of projects/experiments 10, group discussion and presentation
    5, oral questions or quiz 5; NCERT science laboratory manual for practical work.
  CBSE facts reuse the checked statements in database/seo-content/blog:
  cbse-class-10-science-notes (80 + 20, 39 questions by type, unit marks,
  internal 5/5/5/5) and cbse-class-10-board-year-plan-gurgaon (two Class 10
  exams), plus the 50/30/20 competency split and ICSE three-paper science as
  stated on the Delhi, Patna and Dehradun science pages.

  Area links render only when that Shillong area page exists and is active.
--}}
@php
  $slsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $slsA = function (string $slug, string $label) use ($slsSlugs) {
      return in_array($slug, $slsSlugs, true)
          ? '<a href="' . e(url('/city/shillong/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide sls-guide" aria-labelledby="slsGuideTitle">
  <h2 id="slsGuideTitle">Science home tutor in Shillong, Classes 6 to 10: three sciences, one tutor, and answers written to the board's word limits</h2>

  <p class="nx-guide__lede">
    School science asks more of a child each year. In Class 6 it is mostly observing and describing; by Class 10 it
    has become chemistry, biology and physics, each with its own equations, diagrams and numericals, and each tested
    against tight answer formats. In Shillong those formats depend on the board. A student on the Meghalaya Board of
    School Education writes the SSLC Science and Technology paper, where short answers come with word limits; a CBSE
    student writes a paper with case-based questions and a different mix of marks; an ICSE student takes three
    separate science papers. A good tutor teaches from the book on your child's desk and trains the answer style that
    board rewards. NXTutors sends two or three tutors who fit, shows every fee first, and makes the first class a
    free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#sls-stage">Class by class</a> ·
    <a href="#sls-sslc">MBOSE SSLC science</a> ·
    <a href="#sls-school">School marks</a> ·
    <a href="#sls-cbse">CBSE Class 10</a> ·
    <a href="#sls-icse">ICSE</a> ·
    <a href="#sls-drill">Weekly drills</a> ·
    <a href="#sls-local">Five localities</a> ·
    <a href="#sls-fees">Fees</a> ·
    <a href="#sls-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="sls-stage">What should a science tutor be doing at each stage?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE science guidance on this page. The common thread is that the tutor's job
    moves from explaining ideas to training exam answers, and the move happens earlier than most families expect.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science tuition from Class 6 to Class 10: the shift in each stage and what to check at home</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What changes</th><th scope="col">What to check</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 and 7</td><td>Activities and observation; everyday words give way to scientific ones</td><td>Can your child describe an activity in one accurate sentence and a labelled sketch?</td></tr>
      <tr><td>Class 8</td><td>The three sciences begin to separate; first numericals and word equations</td><td>Does a unit follow every number?</td></tr>
      <tr><td>Class 9</td><td>Motion, matter and the cell arrive together; the board registers Class 9 students</td><td>Are gaps closed in the month they appear?</td></tr>
      <tr><td>Class 10</td><td>Every chapter aims at the board paper and its answer formats</td><td>Has your child written full timed sections before the school's selection test?</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Until Class 10, one tutor for all three strands usually works better than three, because one person can tell
    whether a wrong numerical is a maths slip or a science gap. The national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page and the
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8</a> and
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9</a> science tutor pages cover the middle years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sls-sslc">MBOSE SSLC Science and Technology: how the board's sample paper works</h2>
  <p>
    The Meghalaya board uses the NCERT textbook for Class 10 science, and its sample paper sets out the scheme in
    full: 80 marks for the written paper, with 24 to pass, and 20 internal marks, with 6 to pass. The written paper
    has four sections, and three of them come with a word limit on each answer.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>MBOSE SSLC science theory paper, from the board's sample paper and its 2024 corrigendum</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Questions</th><th scope="col">Word limit</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>A: multiple choice</td><td>All 30, one mark each, marked in boxes on the answer sheet</td><td>None</td><td>30</td></tr>
      <tr><td>B: very short answers</td><td>Any 10 of 13, two marks each</td><td>Up to 30 words</td><td>20</td></tr>
      <tr><td>C: short answers</td><td>Any 6 of 8, three marks each</td><td>Up to 50 words</td><td>18</td></tr>
      <tr><td>D: long answers</td><td>Any 3 of 5, four marks each</td><td>Up to 70 words</td><td>12</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The board's indicative weightage splits the paper almost evenly: the chemistry chapters (reactions, acids and
    bases, metals and non-metals, carbon compounds) 26 marks; the biology chapters, with Our Environment, 28; and the
    physics chapters on light, the eye, electricity and magnetism 26. No single strand can be left for later.
  </p>
  <p>
    The word limits are the part most students underrate. A 50-word answer worth three marks needs three clear
    points, not a paragraph of background, and a 70-word long answer leaves room for a labelled diagram and a few
    precise sentences only. A tutor should time these answers and count their words in practice until the habit is
    automatic. The 2026-27 SSLC programme, issued on 14 September 2026, places Science on 7 December 2026; dates can
    be rescheduled, so follow www.mbose.in. Board-wide detail is on our
    <a href="{{ url('/meghalaya-board-tutor-shillong') }}">MBOSE tutor in Shillong</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sls-school">The 20 internal marks and the school's own tests</h2>
  <p>
    MBOSE lets schools award the internal marks through project work, written tests or assignments, and its sample
    paper suggests the kind of project it means: class discussions and debates, reports, charts, posters and
    diagrams based on lessons, and the activities in the textbook. The state's 2024 assessment blueprint for Classes
    9 and 10, posted on the board's site as a sample, adds a school half-yearly examination and a selection test in
    Class 10, and suggests internal marks for projects or experiments, a group discussion and presentation, and oral
    questions. For experiments it points teachers to the NCERT science laboratory manual.
  </p>
  <p>
    A tutor cannot award these marks, but can see that the work behind them is done properly: a poster with correct
    labels, a report written by your child, answers ready for oral questions. Six marks out of 20 are needed to pass
    the internal part, so treat it as a real paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sls-cbse">CBSE Class 10 science: the 2026-27 paper</h2>
  <p>
    The CBSE paper is also 80 marks over three hours, with 20 internal marks split equally between periodic tests,
    multiple assessment, the portfolio and subject enrichment through practical work. Biology carries 30 board marks
    and physics and chemistry 25 each. The 2026-27 sample paper has 39 questions: twenty one-mark items, six two-mark
    answers, seven three-mark answers, three four-mark questions built on a case or source, and three five-mark long
    answers. Half the marks test knowledge and understanding, 30% application and 20% analysis and evaluation.
  </p>
  <p>
    From 2026 every CBSE Class 10 student sits a compulsory main exam, and an optional second sitting lets an eligible
    student improve up to three subjects, science included. The 2027 dates are announced on cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a>, the
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year plan</a> and the
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page go further. Families comparing
    the two boards can read our <a href="{{ url('/cbse-home-tutor-shillong') }}">CBSE home tutor in Shillong</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sls-icse">If the school follows ICSE</h2>
  <p>
    At ICSE Class 10, CISCE examines physics, chemistry and biology as three separate papers, each with its own
    internal assessment. Schools choose textbooks within the CISCE syllabus, so the tutor works from your child's books
    and CISCE specimen papers. Exact definitions and complete numericals win marks. Many ICSE families want help in one
    of the three papers only, usually from Class 9. Fewer tutors teach ICSE science, so put the board in your first
    message; an online option widens the field.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sls-drill">Five drills worth repeating every week</h2>
  <p>
    Whichever board your child is on, marks in science are lost in the same places. A tutor should return to these
    until they need no reminder:
  </p>
  <ol>
    <li><strong>One diagram from memory.</strong> The heart, the nephron, a flower in section or the eye, with labels spelled correctly.</li>
    <li><strong>Three balanced equations.</strong> With state symbols when asked, and the type of reaction named.</li>
    <li><strong>One ray diagram.</strong> Arrows on every ray, virtual rays dotted, the image described in words.</li>
    <li><strong>One circuit numerical.</strong> Standard symbols, the ammeter in series, units on every line.</li>
    <li><strong>One answer cut to size.</strong> For MBOSE, a short answer rewritten inside its word limit; for CBSE, a case question answered from the passage.</li>
  </ol>
  <p>
    At the free demo, ask the tutor to teach your child's current chapter and see whether these habits appear without
    prompting. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> lists more
    questions. If the first tutor does not suit, the next demo is with another tutor from your shortlist, and a later
    switch is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sls-local">Five Shillong localities: arranging the after-school lesson</h2>
  <p>
    For Classes 6 to 10 the lesson usually sits between school and dinner, so a short, predictable trip for the tutor
    matters most. Shillong has no railway, and tutors travel by shared taxi, city bus or their own vehicle. Browse
    tutors by locality on the <a href="{{ url('/city/shillong') }}">Shillong page</a>.
  </p>
  <ul>
    <li><strong>{!! $slsA('jaiaw', 'Jaiaw') !!}</strong>: an old residential ward whose narrow, sloping lanes run up towards Mawlai. Give the lane name or a landmark and say whether the last stretch is on foot; tutors from the central wards are close.</li>
    <li><strong>{!! $slsA('malki', 'Malki') !!}</strong>: between the city centre and Laitumkhrah, with the Dhankheti and Malki bus stops on the main road. Tell a new tutor which entrance to use and where a two-wheeler can stand.</li>
    <li><strong>{!! $slsA('lawsohtun', 'Lawsohtun') !!}</strong>: a quieter pocket beside Laban, often reached by sloping lanes. Tutors already teaching in Laban are the natural first choice; mention if the final part is a footpath with nowhere to park.</li>
    <li><strong>{!! $slsA('umpling', 'Umpling') !!}</strong>: reached by its own road from Laitumkhrah, beside Rynjah. Many homes sit off the main road, so agree whether to meet the tutor at the Lapalang or Nongrah stop on the first visit.</li>
    <li><strong>{!! $slsA('pynthorumkhrah', 'Pynthorumkhrah') !!}</strong>: includes Langkyrding, near Mawpat and Nongmynsong. Cross-city travel is slow at peak times, so a tutor who lives on this side of the city is the sensible choice; the Laitlum, Umkdait and Itshyrwat stops help as meeting points.</li>
  </ul>
  <p>
    Zone pages for <a href="{{ url('/city/shillong/zone/laban-upper-shillong') }}">Laban and Upper Shillong</a> and
    <a href="{{ url('/city/shillong/zone/mawlai-pynthorumkhrah') }}">Mawlai and Pynthorumkhrah</a> add local timing
    advice. In the monsoon, agree in advance that a lesson moves online at its usual hour on a day of heavy rain; the
    <a href="{{ url('/online-tutor-shillong') }}">online tutors for Shillong</a> page explains how.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sls-fees">What does a science home tutor in Shillong charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own rates, depending on the class and board, their experience with that paper, the trip to your
    locality and the number of weekly sessions. You see each fee before the demo; our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and the
    <a href="{{ url('/blog/home-tuition-fees-shillong') }}">Shillong home tuition fees</a> article explain more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sls-start">Getting started</h2>
  <p>
    Send the class, the board (MBOSE, CBSE or ICSE), the strand that worries you most, your locality with a landmark
    or bus stop, and the evenings that are free. We return two or three matched science tutors with their fees, and
    you pick one for a free <a href="{{ url('/demo-class') }}">demo class</a>. If no suitable tutor can reach you at
    that hour, we suggest an online or mixed plan. Students moving on to Class 11 can read the
    <a href="{{ url('/physics-home-tutor-shillong') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-shillong') }}">chemistry</a> home tutor pages for Shillong, and the
    <a href="{{ url('/maths-home-tutor-shillong') }}">maths</a> page pairs well with science in Class 10.
  </p>
  <p>
    Science teachers living in Shillong can see student requests on
    <a href="{{ url('/tuition-jobs/shillong') }}">Shillong tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
