{{--
  Long-form guide for the "science home tutor Gangtok" page (Classes 6 to 10,
  CBSE and ICSE). Byline in config: Aaditya Kashyap; role statement only, no
  anecdotes. Page writer (capitals wave 2, subjects), 3 Oct 2026.
  Local facts come only from database/seo-content/areas/gangtok-research.json
  (zone_facts, area "about" texts and board_facts). Boards: Gangtok's schools
  follow CBSE or CISCE and mainly teach in English and Nepali
  (en.wikipedia.org/wiki/Gangtok, via board_facts). No state board is named.
  CBSE facts reuse the checked statements in database/seo-content/blog:
  cbse-class-10-science-notes (80 + 20, internal 5/5/5/5, unit marks, 39
  questions by type, 50/30/20 competency split, school-assessed topics) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams); Class 9 unit
  marks, Exploration and Curiosity books and the Class 9 Advanced paper as
  stated on the existing city science and CBSE pages (cbseacademic.nic.in,
  Curriculum 2026-27 Secondary); ICSE three-paper science as already stated
  on the existing city science pages. No school, college, society or
  people's names, no roads named after people, no distances or travel times,
  only the allowed fee sentence. Weather is timing advice only.

  Area links render only when that Gangtok area page exists and is active.
--}}
@php
  $gksAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gksA = function (string $slug, string $label) use ($gksAreaSlugs) {
      return in_array($slug, $gksAreaSlugs, true)
          ? '<a href="' . e(url('/city/gangtok/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp


<article class="nx-guide gtks-guide" aria-labelledby="gtksGuideTitle">
  <h2 id="gtksGuideTitle">Science home tutor in Gangtok for Classes 6 to 10: one teacher, three sciences, written the board's way</h2>

  <p class="nx-guide__lede">
    Up to Class 10, science is one subject with three strands, and most Gangtok children study it either from NCERT
    books in a CBSE school or from a CISCE school's chosen texts for ICSE. The child who struggles is rarely missing
    the facts. More often the ray diagram has no arrows, the equation is not balanced, or the answer stops one
    sentence short of the mark. A good science tutor fixes those habits week by week, at an hour that suits a family
    on a hillside. We put forward two or three tutors like that, with their fees visible from the start, and the
    opening lesson is a demo you do not pay for.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gtks-ten">CBSE Class 10</a> ·
    <a href="#gtks-paper">The paper itself</a> ·
    <a href="#gtks-nine">Class 9</a> ·
    <a href="#gtks-early">Classes 6 to 8</a> ·
    <a href="#gtks-icse">ICSE</a> ·
    <a href="#gtks-lang">Language</a> ·
    <a href="#gtks-places">Four localities</a> ·
    <a href="#gtks-demo">The demo</a> ·
    <a href="#gtks-fees">Fees</a> ·
    <a href="#gtks-begin">Beginning</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gtks-ten">CBSE Class 10 science: which units carry the board marks?</h2>
  <p>
    The CBSE and ICSE science advice here is written by Aaditya Kashyap. Schools in Gangtok follow CBSE or CISCE, and
    for the many on CBSE the Class 10 board paper is three hours for 80 marks, with 20 more assessed in school. The
    2026-27 unit weights tell a tutor where the hours belong:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science, 2026-27: board marks by unit and the skill each one tests most</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">The skill it tests most</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances</td><td>25</td><td>Balanced equations, reactions classified correctly, carbon compounds named</td></tr>
      <tr><td>World of Living</td><td>25</td><td>Labelled diagrams and processes described in the right order</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>Circuit diagrams with standard symbols and numericals with units</td></tr>
      <tr><td>Natural Phenomena</td><td>12</td><td>Ray diagrams for mirrors and lenses, and reasons for the eye and colour</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>Short, exact answers on food chains and waste</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Chemistry and biology together hold 50 of the 80 marks, so a tutor who is strong only in physics will leave most of
    the paper untouched. Ask at the demo how the tutor would split a typical month between the strands.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtks-paper">How the CBSE science paper is built, and what stays in school</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science sample paper: 39 questions by type and marks</caption>
    <thead>
      <tr><th scope="col">Question type</th><th scope="col">How many</th><th scope="col">Marks each</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice and assertion–reason</td><td>20</td><td>1</td></tr>
      <tr><td>Very short answer</td><td>6</td><td>2</td></tr>
      <tr><td>Short answer</td><td>7</td><td>3</td></tr>
      <tr><td>Case- or source-based</td><td>3</td><td>4</td></tr>
      <tr><td>Long answer</td><td>3</td><td>5</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Only half the marks go to knowing and understanding; 30% need application and 20% need analysis or evaluation,
    so memorised answers cannot carry a student through. The school's 20 marks are split evenly, five apiece, between
    periodic tests, multiple assessment, the portfolio and practical enrichment.
  </p>
  <p>
    Three topics never appear on the board paper and are tested by the school instead: electric motors, generators and
    electromagnetic induction; evolution; and the way the periodic table arranges the elements. They still feed
    internal marks and come back in Class 11, so a tutor should teach them properly. Since 2026, each Class 10 student
    takes one compulsory main exam, with an optional later sitting to try to improve as many as three subjects,
    science included; look for the 2027 dates on cbse.gov.in. For chapter-wise help, see our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a>; the
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page explains how we match for the
    board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtks-nine">Class 9: a new book, and an optional Advanced paper</h2>
  <p>
    CBSE Class 9 now teaches science from NCERT's Exploration book, so notes handed down from an older brother or
    sister may follow the wrong text. For 2026-27, Matter carries 27 of the 80 marks, World of living 25, Motion,
    force, work and sound 23, and Earth as a system 5.
  </p>
  <p>
    Every Class 9 student writes one common 80-mark science paper. A student may also choose an Advanced paper in
    science, maths, both or neither: 25 marks in one hour, made up of higher-order questions on extra content. Those
    marks sit outside the aggregate, and a score of 50% or more is noted on the marksheet. A tutor can help you decide,
    but the honest rule is simple: take Advanced only if your child already finds science comfortable, because the main
    paper still matters more. See the <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtks-early">Classes 6 to 8: habits that pay off two years later</h2>
  <ul>
    <li><strong>Classes 6 and 7.</strong> CBSE schools teach from NCERT's activity-led Curiosity books. Each activity should end with one accurate sentence, a tidy sketch, and the proper term used instead of a casual word.</li>
    <li><strong>Class 8.</strong> The three strands begin to separate and the first numericals arrive. Insist on a unit after every number and word equations written before symbols.</li>
    <li><strong>Every year.</strong> A short written test every fortnight, so gaps are found in the month they open rather than in the board year.</li>
  </ul>
  <p>
    Below Class 11, a single tutor covering physics, chemistry and biology tends to beat three separate ones: one
    person can spot whether a wrong numerical comes from the arithmetic or from the science. The
    <a href="{{ url('/science-home-tutor/class-6') }}">Class 6</a> and
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8</a> science tutor pages go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtks-icse">If your child's school follows ICSE</h2>
  <p>
    ICSE treats Class 10 science as three subjects: CISCE sets separate physics, chemistry and biology papers, and
    each carries its own internal marks, while the school picks textbooks that fit the CISCE syllabus. The tutor's
    material should be those books plus CISCE specimen papers, with definitions word-perfect and every numerical
    worked in full. Plenty of ICSE families need help in just one of the three; name it when you write to us. CBSE
    science tutors are easier to find than ICSE ones, so a sensible plan can pair an online specialist for one paper
    with a local tutor for the rest.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtks-lang">English, Nepali and the language of the answer</h2>
  <p>
    Gangtok's schools mainly teach in English and Nepali. Science answers are marked on precise wording, so a child
    who understands a process well can still lose marks if the written answer is loose. If your child is more at ease
    talking through an idea in Nepali, ask for a tutor who can do that while making sure every written answer is in
    the language of the paper, with the textbook's exact terms. Say this in your request; it shapes the shortlist.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtks-places">Four Gangtok localities: fitting science in after school</h2>
  <p>
    Younger students have science between coming home and the evening meal, so what matters most is a tutor whose
    journey is predictable. Four localities show what to arrange; every one is listed on our
    <a href="{{ url('/city/gangtok') }}">Gangtok page</a>.
  </p>
  <dl>
    <dt><strong>{!! $gksA('arithang', 'Arithang') !!}</strong></dt>
    <dd>A residential suburb beside the town centre, split into two municipal wards, where many families rent flats in buildings set into the hillside. The front door may be several flights above or below the road, so give a roadside landmark, the building name and the floor. Its central position suits a tutor who already teaches in the middle of town.</dd>
    <dt><strong>{!! $gksA('ranipool', 'Ranipool') !!}</strong></dt>
    <dd>A junction town on the Ranikhola, where routes to Gangtok, Singtam and Pakyong meet, with frequent taxis and buses. Homes are a mix of newer flats and older houses. Junction traffic peaks at rush hour, so agree a fixed slot with some margin.</dd>
    <dt><strong>{!! $gksA('chandmari', 'Chandmari') !!}</strong></dt>
    <dd>A ward on the eastern slope, mostly homes on the hillside, many reached by steps or footpaths. Give directions from the nearest taxi point and a phone number for the first visit; tutors from Tathangchen and Syari widen the choice.</dd>
    <dt><strong>{!! $gksA('bojoghari', 'Bojoghari') !!}</strong></dt>
    <dd>A suburb in the Bojoghari-2nd Mile ward, with houses and buildings above and below the road. Tutors from Chandmari, Tathangchen, Sichey and along the bypass are the most practical match for regular visits.</dd>
  </dl>
  <p>
    When monsoon rain is heavy, keep the lesson and the tutor but move them to a screen for the day; the
    <a href="{{ url('/online-tutor-gangtok') }}">online tutor for Gangtok</a> page explains how. The zone page for
    <a href="{{ url('/city/gangtok/zone/syari-chandmari-tathangchen') }}">Syari, Chandmari and Tathangchen</a> and
    the <a href="{{ url('/blog/gangtok-home-tuition-guide') }}">Gangtok home tuition guide</a> add timing advice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtks-demo">What to watch for in the free demo</h2>
  <p>
    Have the tutor take this week's school chapter. In that hour, look for correct symbols in any ray or circuit
    drawing, an equation balanced unprompted, a cleanly labelled biology figure, and a numerical that ends with its
    unit. Listen, too, for the tutor asking your child to talk a step through out loud. If those things are absent,
    say so: we set up a demo with a different tutor from the same shortlist, and swapping tutors later is free too.
    Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more to look for.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtks-fees">What do science home tutors in Gangtok charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor decides a
    rate. Board-year help in Class 10 normally costs more than support in Classes 6 to 8, and the journey and the
    number of lessons per week also play a part. You see every fee before the demo; the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-gangtok') }}">Gangtok home tuition fees</a> article explain more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtks-begin">Starting with a science tutor in Gangtok</h2>
  <p>
    Write to us with the class, the board, the strand your child finds hardest, the language they explain most easily in, a
    landmark near home with a note on how it is reached from the road, and the afternoons that are free. Two or three
    science tutors come back with fees, and you choose whom to meet for a <a href="{{ url('/demo-class') }}">free demo
    class</a>. Where no suitable tutor can come at that time, we suggest lessons online or a blend of the two.
    NXTutors works from Sector 66, Gurugram, and tutors online all over India; our national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page describes the approach. For Classes 11 and
    12, see the Gangtok <a href="{{ url('/physics-home-tutor-gangtok') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-gangtok') }}">chemistry</a> and
    <a href="{{ url('/biology-home-tutor-gangtok') }}">biology</a> pages, and for maths the
    <a href="{{ url('/maths-home-tutor-gangtok') }}">Gangtok maths tutor</a> page.
  </p>
  <p>
    Science teachers who live in Gangtok can see current student requests on the
    <a href="{{ url('/tuition-jobs/gangtok') }}">Gangtok tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
