{{--
  Long-form guide for the "science home tutor Aizawl" page (Classes 6 to 10:
  MBSE HSLC, CBSE and ICSE). Byline in config: Aaditya Kashyap; role
  statement only, no anecdotes. Page writer (capitals wave 2, subjects),
  3 Oct 2026. Local facts come only from
  database/seo-content/areas/aizawl-research.json (zone_facts and area
  "about" texts).
  MBSE facts only from mbse.edu.in (read 3 Oct 2026):
  - http://www.mbse.edu.in/mbseadmin/pdf/HSLC%20Scheme%202019.pdf (linked from
    https://www.mbse.edu.in/question-design-and-scheme-of-examination-secondary-schools/):
    Science is Th & Pr, 70 + 10, 3 hours; practicals conducted by schools
    and marks reported to the Board; internal assessment up to 20 marks.
    Class X Science (Theory) 70 marks, 39 questions: 14 objective x1, 7 very
    short x1, 8 short answer I x2, 7 short answer II x3, 3 long answer x4;
    objectives knowledge 30%, understanding 30%, application 20%, HOTS 10%,
    evaluation 10%; three sections: A Physics, B Chemistry, C Biology;
    16 content units (Light ... Management of Natural Resources).
    Practical 10: practical exercise 5, viva voce 2, practical records 3
    (regularity, recording, neatness 1 each).
  - https://www.mbse.edu.in/wp-content/uploads/2025/12/HS-Textbook-List-2026-2027.pdf :
    Science 10: bilingual Secondary Science textbooks for Class X (Physics,
    Chemistry, Biology) and a book of experimental skills in science.
  - https://www.mbse.edu.in/wp-content/uploads/2026/02/Standardized-Assessment-Framework-And-Competency-Based-Question-Bank-2025.pdf :
    science item bank, 111 items (physics 32, chemistry 32, biology 47),
    marking schemes for constructed-response items.
  CBSE facts reuse the checked statements in database/seo-content/blog:
  cbse-class-10-science-notes and cbse-class-10-board-year-plan-gurgaon;
  Class 9 split and ICSE three-paper science as already stated on the
  existing city science pages. No school, college, university, hospital,
  stadium, society or people's names (except the page author), no distances
  or travel times, only the allowed fee sentence. Weather is timing advice
  only.

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

<article class="nx-guide azs-guide" aria-labelledby="azsGuideTitle">
  <h2 id="azsGuideTitle">Science home tutor in Aizawl for Classes 6 to 10: three sciences, one steady teacher</h2>

  <p class="nx-guide__lede">
    Until Class 10, most Aizawl children meet physics, chemistry and biology as one subject called science, and one
    tutor for all three usually serves them better than three specialists. What changes from child to child is the
    book and the paper. A student on the Mizoram board learns from bilingual textbooks and writes a 70-mark HSLC
    theory paper split into physics, chemistry and biology sections; a CBSE student works from NCERT towards an
    80-mark paper; an ICSE student sits three separate science papers. NXTutors suggests two or three tutors who
    know your child's route and can keep an after-school slot through the wet season. You see each fee first, and
    the opening class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#azs-hslc">HSLC science</a> ·
    <a href="#azs-prac">Practical and records</a> ·
    <a href="#azs-cbse">CBSE Class 10</a> ·
    <a href="#azs-middle">Classes 6 to 9</a> ·
    <a href="#azs-icse">ICSE</a> ·
    <a href="#azs-habits">Marks in the details</a> ·
    <a href="#azs-places">Five localities</a> ·
    <a href="#azs-fees">Fees</a> ·
    <a href="#azs-send">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="azs-hslc">How does the Mizoram board examine Class 10 science?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE science guidance on this page; the Mizoram Board of School Education
    (MBSE) details come from the question design and textbook list the board posts on mbse.edu.in. For the High
    School Leaving Certificate, science is a theory-and-practical subject: a three-hour theory paper worth 70 marks,
    a practical worth 10 that the school conducts and reports to the board, and up to 20 internal-assessment marks
    from the child's record over the year.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>MBSE HSLC science theory: the 39 questions in the board's question design</caption>
    <thead>
      <tr><th scope="col">Question type</th><th scope="col">How many</th><th scope="col">Marks each</th><th scope="col">Total</th></tr>
    </thead>
    <tbody>
      <tr><td>Objective</td><td>14</td><td>1</td><td>14</td></tr>
      <tr><td>Very short answer</td><td>7</td><td>1</td><td>7</td></tr>
      <tr><td>Short answer I</td><td>8</td><td>2</td><td>16</td></tr>
      <tr><td>Short answer II</td><td>7</td><td>3</td><td>21</td></tr>
      <tr><td>Long answer</td><td>3</td><td>4</td><td>12</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The paper comes in three sections, physics, chemistry and biology, so a weak strand cannot hide. The design
    lists 16 units, from light, the human eye and electricity through acids, metals and carbon to life processes,
    heredity and the environment. It also names sources of energy, periodic classification and the management of
    natural resources, chapters a tutor used only to the current CBSE list might skip, so check the board's list
    before crossing anything out. The setter aims for 30% knowledge, 30% understanding, 20% application, and 10%
    each for higher-order thinking and evaluation.
  </p>
  <p>
    For 2026-27 the board prescribes bilingual Secondary Science textbooks for Class 10, one each for physics,
    chemistry and biology, plus a book on experimental skills. Its Class 10 competency-based item bank, issued in
    November 2025, adds 111 science questions (32 physics, 32 chemistry, 47 biology) with marking schemes for the
    written answers, which makes it a useful official practice set. Past HSLC papers from 2021 to
    2025 sit on the board's previous-years page. Our
    <a href="{{ url('/mizoram-board-tutor-aizawl') }}">Mizoram Board tutor in Aizawl</a> page covers the other subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azs-prac">The HSLC practical: ten marks and a record book</h2>
  <p>
    The board's guidelines divide the 10 practical marks three ways: 5 for the practical exercise itself (setting up
    and handling the apparatus, any calculation, the observations and their interpretation), 2 for the viva, and 3
    for the practical record, with a mark each for regular submission, proper recording of experiments and
    neatness. Those last three marks are the easiest in the whole subject to lose by drift.
  </p>
  <p>
    The apparatus stays at school, but a tutor at home can still make each experiment count. Before the class does
    it, the child writes the aim in one line and draws the diagram; afterwards, the observation table is completed
    and the result explained in a sentence. A quick check of the record book every few weeks keeps it up to date,
    and a few practice viva questions before the exam ease the nerves.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azs-cbse">CBSE Class 10 science: where the 80 board marks sit</h2>
  <p>
    CBSE sets a three-hour, 80-mark paper; the school awards 20 more through periodic tests, multiple assessment, the
    portfolio and practical enrichment, five marks each. For 2026-27 the units are weighted as follows:
  </p>
  <ul>
    <li><strong>Chemical Substances</strong> and <strong>World of Living:</strong> 25 marks each.</li>
    <li><strong>Effects of Current:</strong> 13 marks.</li>
    <li><strong>Natural Phenomena</strong> (light, the eye and colour): 12 marks.</li>
    <li><strong>Our Environment:</strong> 5 marks.</li>
  </ul>
  <p>
    The sample paper has 39 questions: 20 one-mark items mixing multiple choice and assertion–reason, six of two
    marks, seven of three, three four-mark case or source questions and three five-mark long answers. Half the marks
    test knowledge and understanding, 30% application and 20% analysis and evaluation. Generators, motors and
    electromagnetic induction, evolution, and how the periodic table orders elements are assessed only in school.
    Every Class 10 student sits a compulsory main exam, and an optional second sitting can improve up to three
    subjects; the 2027 dates will be published on cbse.gov.in. See our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a>, the
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page, and the
    <a href="{{ url('/cbse-home-tutor-aizawl') }}">CBSE home tutor in Aizawl</a> page for the board as a whole.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azs-middle">Classes 6 to 9: laying the ground for the board year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What a science tutor should build before Class 10, stage by stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What school asks</th><th scope="col">What tuition should add</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 and 7</td><td>Activities, observation and new vocabulary</td><td>A precise sentence and a clear sketch for each activity; the scientific word used in place of the everyday one</td></tr>
      <tr><td>Class 8</td><td>The three sciences begin to separate; first numericals and word equations</td><td>Units written after every number; equations built from the words up</td></tr>
      <tr><td>Class 9</td><td>Motion, matter and the cell arrive together; on the Mizoram board the school runs the promotion exam</td><td>Gaps closed in the month they appear, and a short written test each fortnight</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    On CBSE, Class 9 science for 2026-27 splits its 80 marks across Matter (27), World of living (25), Motion, force,
    work and sound (23) and Earth as a system (5), so an older sibling's notes from the earlier book are a poor guide.
    On the Mizoram board, the Class 9 science design also uses physics, chemistry and biology sections, so the habit
    of answering in three distinct styles can start a year early. See the
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8</a> and
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9</a> science tutor pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azs-icse">If the school follows ICSE</h2>
  <p>
    ICSE handles Class 10 science differently from both boards above: CISCE sets three separate papers for physics,
    chemistry and biology, and each carries its own internal assessment. Textbooks are chosen by the school within
    the CISCE syllabus, so the tutor should teach from those books and use CISCE specimen papers for practice, with
    definitions learnt word for word. Often only one of the three papers is the worry; tell us which. Fewer tutors
    teach ICSE science, so an online tutor is worth considering if no one nearby fits.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azs-habits">Small habits that decide science marks</h2>
  <p>
    Whatever the board, the same five habits separate a tidy answer from a costly one. A good tutor drills them until
    your child does them without being reminded:
  </p>
  <ol>
    <li><strong>Ray diagrams:</strong> arrows on every ray, virtual rays dotted, and the mirror or lens drawn with the right symbol.</li>
    <li><strong>Circuits:</strong> standard symbols, the ammeter in series and the voltmeter in parallel, each reading with its unit.</li>
    <li><strong>Biology figures:</strong> drawn large, with labels spelt correctly and pointing exactly at the part named.</li>
    <li><strong>Chemical equations:</strong> balanced every time, with state symbols where the question asks.</li>
    <li><strong>Heredity crosses:</strong> every generation shown in a grid, so the examiner can follow the ratio to its source.</li>
  </ol>
  <p>
    During the free demo, hand the tutor this week's school chapter and notice whether these corrections happen on
    their own. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> lists other
    things to watch. Not convinced? We line up a demo with the next tutor on your shortlist, and changing tutors
    later costs nothing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azs-places">Five Aizawl localities: fitting science in after school</h2>
  <p>
    For Classes 6 to 10 the lesson sits between school and dinner, so the tutor's journey needs to be predictable.
    Here is what to arrange in five localities across the city; every locality is on our
    <a href="{{ url('/city/aizawl') }}">Aizawl page</a>.
  </p>
  <dl>
    <dt><strong>{!! $azA('chaltlang', 'Chaltlang') !!}</strong></dt>
    <dd>A hillside locality long linked with school education: the academic wing of the state's Directorate of School Education has been based here since it was set up. Homes are multi-storey, with floors reached by stairs, so give the floor number and a landmark. Bawngkawn, Durtlang and Ramhlun supply most nearby tutors.</dd>
    <dt><strong>{!! $azA('ramhlun', 'Ramhlun') !!}</strong></dt>
    <dd>A group of localities, from Ramhlun North to Ramhlun South, with Laipuitlang alongside. Tutors from Chaltlang, Bawngkawn, Chanmari or Zarkawt can take on a home here; a two-wheeler parks more easily than a car on the narrow roads.</dd>
    <dt><strong>{!! $azA('dawrpui', 'Dawrpui') !!}</strong></dt>
    <dd>Home to Bara Bazar, the city's main shopping centre, so shops and flats share the slopes and the market roads stay busy for much of the day. Choose a time outside shopping hours and expect the tutor to walk the last part from a parking spot.</dd>
    <dt><strong>{!! $azA('vaivakawn', 'Vaivakawn') !!}</strong></dt>
    <dd>Where the central localities meet the Luangmual side, so tutors can come from either direction. Tell the tutor which entrance to use, since many buildings are entered at road level with stairs down to the flat.</dd>
    <dt><strong>{!! $azA('bethlehem', 'Bethlehem') !!}</strong></dt>
    <dd>Bethlehem Veng and Bethlehem Vengthlang share a ward with College Veng, and Republic and Venghlui are close by, which is where most nearby tutors live. Weekday slots outside office hours start most reliably.</dd>
  </dl>
  <p>
    In the heaviest rain, move that day's lesson online with the same tutor at the usual hour; the
    <a href="{{ url('/online-tutor-aizawl') }}">online tutor for Aizawl</a> page explains how. The zone page for
    <a href="{{ url('/city/aizawl/zone/chanmari-zarkawt-dawrpui') }}">Chanmari, Zarkawt and Dawrpui</a> and the
    <a href="{{ url('/blog/aizawl-home-tuition-guide') }}">Aizawl home tuition guide</a> add local timing advice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azs-fees">How much does a science home tutor in Aizawl charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets a fee.
    A Class 10 student heading for the board exam is usually quoted more than a child in Class 6, 7 or 8, and the
    climb to your home and how often the tutor comes also count. Fees appear on the shortlist before any demo; the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-aizawl') }}">Aizawl home tuition fees</a> article explain more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azs-send">What to send us</h2>
  <p>
    Share the class and board, which science gives your child most trouble, your building name, floor and a
    landmark, and the weekday afternoons you can offer. We reply with two or three science tutors and their fees,
    and you choose one for a <a href="{{ url('/demo-class') }}">free demo class</a>. If nobody suitable can reach you
    at that hour, we propose an online or part-online plan. NXTutors is based in Sector 66, Gurugram, and teaches
    online across India; the national <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page
    describes our approach. For Classes 11 and 12, see the Aizawl
    <a href="{{ url('/physics-home-tutor-aizawl') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-aizawl') }}">chemistry</a> tutor pages, and for maths the
    <a href="{{ url('/maths-home-tutor-aizawl') }}">maths home tutor in Aizawl</a> page.
  </p>
  <p>
    Science teachers living in Aizawl can see current student requests on the
    <a href="{{ url('/tuition-jobs/aizawl') }}">Aizawl tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
