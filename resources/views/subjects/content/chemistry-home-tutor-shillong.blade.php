{{--
  Long-form guide for the "chemistry home tutor Shillong" page (Classes 11 and
  12: MBOSE HSSLC, CBSE, ISC/IB, with NEET and JEE alongside). Byline in config:
  NXTutors Academic Team. Page writer (capitals wave 2, subjects), 3 Oct 2026.

  Local facts only from database/seo-content/areas/shillong-research.json.
  No school, college, university, coaching institute, hospital, society or
  people's names; no distances or travel times; only the allowed fee
  sentence; no defence or tourism references.

  MBOSE facts, read on www.mbose.in on 3 Oct 2026:
  - Notification No. 40, 6 Nov 2024 (CBSE question pattern for Class XI-XII
    subjects using CBSE syllabus and NCERT books; HSSLC from 2026):
    https://www.mbose.in/public/media_file/1782119473.pdf
  - Notification No. 1020, 28 Aug 2026 (new Class XII sample papers for HSSLC
    2027; same pattern for Class XI internal/promotion exams from 2027):
    https://www.mbose.in/public/notice/17879049240.pdf
  - HSSLC Chemistry sample paper: https://www.mbose.in/public/media_file/1787905800.pdf
    70 marks, 3 hours, 33 questions with internal choice; A 16 MCQ x 1 (write
    the correct choice and the answer); B 5 x 2; C 7 x 3; D 2 case-based x 4;
    E 3 long answer x 5; all questions compulsory.
  CBSE, NEET and JEE facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-chemistry-organicinorganic
  (chapter marks, branch totals 23/14/33, 33 questions in five sections, no
  calculators or log tables, deleted and school-assessed topics, practical
  8/8/6/4/4, permanganate titration), neet-preparation-gurgaon-coaching-or-
  home-tutor (NEET UG 2026) and jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026). IB and ISC points as already stated on the Delhi, Patna
  and Dehradun chemistry pages.

  Area links render only when that Shillong area page exists and is active.
--}}
@php
  $slcSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $slcA = function (string $slug, string $label) use ($slcSlugs) {
      return in_array($slug, $slcSlugs, true)
          ? '<a href="' . e(url('/city/shillong/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide slc-guide" aria-labelledby="slcGuideTitle">
  <h2 id="slcGuideTitle">Chemistry home tutor in Shillong: physical, organic and inorganic, held together in one weekly hour</h2>

  <p class="nx-guide__lede">
    Chemistry in Classes 11 and 12 asks for three different kinds of work at once: numericals in physical chemistry,
    reaction routes in organic, and precise recall in inorganic. Students in Shillong who are on the Meghalaya Board of
    School Education now write an HSSLC chemistry paper in the CBSE question pattern, CBSE students write the CBSE
    paper itself, and many in either group are also preparing for NEET or JEE. A home tutor's job is to keep all of
    that in one plan: check what was understood this week, fix what was not, and practise writing it the way each
    exam wants. NXTutors suggests two or three chemistry tutors who know your child's syllabus and can reach your part
    of the city. Fees are visible up front, and the opening lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#slc-exams">Three exams</a> ·
    <a href="#slc-hsslc">HSSLC paper</a> ·
    <a href="#slc-chapters">Chapter marks</a> ·
    <a href="#slc-out">What is out</a> ·
    <a href="#slc-hour">The weekly hour</a> ·
    <a href="#slc-lab">Practical</a> ·
    <a href="#slc-local">Five localities</a> ·
    <a href="#slc-more">ISC and IB</a> ·
    <a href="#slc-fees">Fees</a> ·
    <a href="#slc-go">Getting matched</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="slc-exams">Board paper, NEET or JEE: how each one counts chemistry</h2>
  <ul>
    <li><strong>MBOSE HSSLC.</strong> The board's 2027 sample paper is a three-hour, 70-mark paper of 33 questions in five sections, set to the CBSE pattern. Written reasons, balanced equations and clean numericals earn the marks.</li>
    <li><strong>CBSE Class 12 (043).</strong> The same 33-question, 70-mark shape, with 30 more marks from the practical examination.</li>
    <li><strong>NEET (UG) in 2026.</strong> A pen-and-paper exam in which chemistry made up 45 questions out of 180, so 180 marks out of 720. Fast and exact recall of NCERT lines matters most.</li>
    <li><strong>JEE Main 2026, Paper 1.</strong> Chemistry took up a third of the 75 questions: 20 with options and 5 needing a numerical answer. Reaction mechanisms and longer physical chemistry problems decide the score.</li>
  </ul>
  <p>
    Both NTA exams in 2026 gave four marks for a correct answer and took one away for a wrong one. NTA publishes the
    pattern each year, so check its newest bulletin. For entrance priorities, read the
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">important NEET chemistry chapters</a> and the
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry guide by branch</a>; our
    <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET chemistry tutor</a> page explains how we match for it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slc-hsslc">The MBOSE HSSLC chemistry paper, section by section</h2>
  <p>
    MBOSE moved Class 11 and 12 subjects that use the CBSE syllabus and NCERT books to the CBSE question pattern in a
    November 2024 notification, effective from the 2026 HSSLC. Its new sample papers, issued in August 2026, apply to
    the 2027 HSSLC, and the board has said Class 11 internal and promotion exams will follow the same pattern from
    2027. The chemistry sample looks like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>MBOSE HSSLC chemistry sample paper for 2027: 33 questions, 70 marks, three hours</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Questions</th><th scope="col">Marks</th><th scope="col">Note for practice</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>16 multiple-choice, one mark each</td><td>16</td><td>The student writes the chosen option and the answer itself</td></tr>
      <tr><td>B</td><td>5 short answers, two marks each</td><td>10</td><td>One clear reason or a short calculation</td></tr>
      <tr><td>C</td><td>7 short answers, three marks each</td><td>21</td><td>Mechanisms, conversions, trends with reasons</td></tr>
      <tr><td>D</td><td>2 case-based questions, four marks each</td><td>8</td><td>Answers drawn from the passage or data given</td></tr>
      <tr><td>E</td><td>3 long answers, five marks each</td><td>15</td><td>Multi-part questions; internal choices offered</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The practical arrangements for the HSSLC are set in the board's syllabus; ask the school for the current scheme.
    Our <a href="{{ url('/meghalaya-board-tutor-shillong') }}">MBOSE tutor in Shillong</a> page covers the board's
    other papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slc-chapters">Where CBSE puts the Class 12 chemistry marks</h2>
  <p>
    Because the HSSLC now follows the CBSE pattern for NCERT-based chemistry, CBSE's chapter weights are a sensible
    guide to where the year's hours should go, though MBOSE students should confirm their own syllabus. For 2026-27:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry, 2026-27: marks by branch and chapter, with the work each needs</caption>
    <thead>
      <tr><th scope="col">Branch</th><th scope="col">Chapters (marks)</th><th scope="col">Work it needs</th></tr>
    </thead>
    <tbody>
      <tr><td>Organic, 33</td><td>Aldehydes, ketones and carboxylic acids (8), biomolecules (7), haloalkanes and haloarenes (6), alcohols, phenols and ethers (6), amines (6)</td><td>Conversion routes and distinguishing tests, drawn and redrawn</td></tr>
      <tr><td>Physical, 23</td><td>Electrochemistry (9), solutions (7), chemical kinetics (7)</td><td>Numericals with units and powers of ten on every line</td></tr>
      <tr><td>Inorganic, 14</td><td>The d- and f-block elements (7), coordination compounds (7)</td><td>A reason for every trend; naming and isomers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The CBSE paper allows neither calculators nor log tables. Our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 organic and inorganic chemistry
    guide</a> takes each chapter in turn, and a month-by-month approach is on the
    <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slc-out">Topics the board paper has dropped, and why entrance students should still check</h2>
  <p>
    For 2026-27, CBSE's Class 12 syllabus no longer includes the solid state or the p-block groups 15 to 18. Four
    further areas are taught and assessed in school but kept off the board paper: surface chemistry, the isolation of
    elements from ores, polymers, and chemistry in everyday life. Students preparing for NEET or JEE should not cross
    these off on the board's word alone, because NTA publishes its own syllabus and may still include some of them.
    Use the board's list for board revision and NTA's list for entrance revision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slc-hour">What should the weekly home hour contain?</h2>
  <p>
    Let the home session follow one step behind the chapter being taught at school or coaching, rather than running
    ahead. An hour that holds up week after week has four parts:
  </p>
  <ol>
    <li><strong>A spoken check.</strong> About ten quick NCERT-based questions on the week's chapter, which show at once what was absorbed in class.</li>
    <li><strong>A numerical talked through.</strong> Your child explains each line of a kinetics, solutions or electrochemistry problem out loud, so a lost unit is caught at the step where it goes missing.</li>
    <li><strong>A conversion chart.</strong> Functional groups linked by arrows on a single page, rebuilt from memory every few weeks until a three-step synthesis feels like a route on a map.</li>
    <li><strong>Reasons in writing.</strong> A couple of short "explain why" answers in board style, marked on the spot.</li>
  </ol>
  <p>
    Inorganic chemistry fits inside the first part: NEET in particular pays for exact NCERT wording, so quick-fire
    questions that also ask why a trend happens do more good than long rereading.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slc-lab">Preparing for the practical without a laboratory</h2>
  <p>
    CBSE's practical is worth 30 marks: 8 for volumetric analysis, 8 for salt analysis, 6 for a content-based
    experiment, 4 for the project and 4 for the record and viva. The 2026-27 titration is potassium permanganate
    against either oxalic acid or Mohr's salt, with every student weighing out and making up their own standard
    solution.
  </p>
  <p>
    No reagents are needed to prepare for most of this. At home a tutor can practise turning a weighed mass into a
    molarity, setting out burette readings so the calculation is easy to follow, running through salt analysis in its
    proper sequence, choosing a project that is realistic for your child, and asking the viva questions examiners
    like, for example what tells you the end point when permanganate is its own indicator.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slc-local">An evening chemistry class in five Shillong localities</h2>
  <p>
    Shillong has no railway, so tutors arrive by shared taxi, city bus or their own vehicle, and many homes are reached
    by lanes or steps. The practical arrangements change from one locality to the next. Browse tutors by locality on
    the <a href="{{ url('/city/shillong') }}">Shillong page</a>.
  </p>
  <ul>
    <li><strong>{!! $slcA('laban', 'Laban') !!}</strong>: tell the tutor which part you live in, since Lumparing, Madan Laban, Kench's Trace and Rilbong each go by their own names. Bara Bazar and the Rilbong side link Laban to the centre, and shared taxis and buses make the route simple; allow extra time on hill roads in heavy rain.</li>
    <li><strong>{!! $slcA('malki', 'Malki') !!}</strong>: includes Dhankheti and Risa Colony, with the national highway passing along it. Homes range from older houses in inner lanes to newer buildings on the main road, so name the entrance; many families add a weekend class before exams.</li>
    <li><strong>{!! $slcA('rynjah', 'Rynjah') !!}</strong>: lanes are known by bylane number, so give yours with a landmark. If the house is down steps from the road, say so; on the heaviest monsoon evenings a short online class can stand in.</li>
    <li><strong>{!! $slcA('nongthymmai', 'Nongthymmai') !!}</strong>: its name means "the new village" in Khasi, and it includes Jingkieng and Motinagar. Lanes climb off the main road, so share the lane name and whether a car can reach the gate.</li>
    <li><strong>{!! $slcA('pynthorumkhrah', 'Pynthorumkhrah') !!}</strong>: tutors living here or in Mawpat or Nongmynsong are the practical choice, since crossing the city at peak hours is slow. Book weekday evening slots early in exam months.</li>
  </ul>
  <p>
    The zone guides for <a href="{{ url('/city/shillong/zone/laban-upper-shillong') }}">Laban and Upper
    Shillong</a> and <a href="{{ url('/city/shillong/zone/laitumkhrah-rynjah') }}">Laitumkhrah and Rynjah</a> give more
    local detail, and the <a href="{{ url('/blog/shillong-home-tuition-guide') }}">Shillong home tuition guide</a>
    covers the whole city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slc-more">ISC and IB chemistry</h2>
  <p>
    For ISC, CISCE marks practical and project work as well as the theory paper, and its examiners reward a reasoned
    explanation over a learned-by-heart line. IB Diploma chemistry, at SL or HL, is organised around
    two ideas, structure and reactivity, and the internal investigation belongs entirely to the student; a tutor may
    ask questions about it but not shape it. Tutors for these courses are few, so mention the course in your first
    message; an online specialist plus a nearby tutor for written work is a workable pair.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slc-fees">What does a chemistry home tutor in Shillong cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    A tutor's own figure usually reflects the target exam, how long they have taught for it, the evening trip to your
    locality and the number of sessions each week. Online lessons with the same tutor may be priced differently.
    Every fee is visible before the demo; see the
    <a href="{{ url('/blog/home-tuition-fees-shillong') }}">Shillong home tuition fees</a> article and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slc-go">Getting matched with a chemistry tutor</h2>
  <p>
    Write to us with the class and board, the exam that matters most, the branch where marks slip away, coaching
    days if any, your locality and a landmark, and the evenings you can offer. You get two or three chemistry tutors
    with fees listed and pick one for the free demo; if that tutor is not right, another demo is arranged, and a
    switch later is free as well. If no one suitable can travel to you, an online or mixed plan is the fallback. In
    Class 11, moles, equilibrium and the opening organic chapters come first, because Class 12 builds on them; see
    the <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page, and the national <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page covers
    other cities. Students taking physics too can read the
    <a href="{{ url('/physics-home-tutor-shillong') }}">physics home tutor in Shillong</a> page.
  </p>
  <p>
    Chemistry teachers living in Shillong can look through student requests on
    <a href="{{ url('/tuition-jobs/shillong') }}">Shillong tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
