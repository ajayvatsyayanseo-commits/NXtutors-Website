{{--
  Board page: "CBSE home tutor Aizawl" (Classes 6 to 12). Authors in config:
  Abhinandan Tiwary (Class 10 CBSE/ICSE maths) and Aaditya Kashyap
  (CBSE/ICSE science); role statements only. Page writer (capitals wave 2,
  subjects), 3 Oct 2026. Local facts come only from
  database/seo-content/areas/aizawl-research.json.
  CBSE facts reuse the checked statements in database/seo-content/blog
  (cbse-class-10-maths-preparation, cbse-class-10-board-year-plan-gurgaon,
  cbse-class-10-science-notes, cbse-class-12-physics-strategies,
  cbse-class-12-chemistry-organicinorganic, cbse-class-12-maths-calculusalgebra)
  as already stated on the existing city CBSE pages: Class 9 common papers
  and optional Advanced papers (1 hour, 25 marks, outside the aggregate,
  50% or more noted), 2026-27 last batch for Basic/Standard, two Class 10
  exams, about half competency-based, third language school-assessed,
  33% pass mark, 70 + 30 sciences, 80 + 20 maths and commerce.
  MBSE comparison points only from mbse.edu.in (read 3 Oct 2026):
  - http://www.mbse.edu.in/mbseadmin/pdf/HSLC%20Scheme%202019.pdf : HSLC science
    70 theory + 10 practical, internal assessment up to 20; maths 80 with a
    3-mark Sets topic; Class IX promotional exam conducted by schools.
  - https://www.mbse.edu.in/wp-content/uploads/2024/08/HSS-Scheme-of-Examination-Question-Design-wef-2025.pdf :
    HSSLC subjects with practicals 70 + 10; Class 12 chemistry chapter marks
    (equal to CBSE's 2026-27 chapter marks).
  - https://www.mbse.edu.in/wp-content/uploads/2025/12/HS-Textbook-List-2026-2027.pdf
    and HSS-Textbook-List-2026-2027-1.pdf : Classes 9-10 own prescribed
    books (bilingual maths and science textbooks, Essential English series);
    Classes 11-12 lists include NCERT titles.
  No school, college, university, hospital, stadium, society or people's
  names (except the page authors), no distances or travel times, only the
  allowed fee sentence. Weather is timing advice only.

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

<article class="nx-guide azcb-guide" aria-labelledby="azcbGuideTitle">
  <h2 id="azcbGuideTitle">CBSE home tutors in Aizawl: NCERT learnt properly, answers shaped for the marking scheme</h2>

  <p class="nx-guide__lede">
    CBSE schools and Mizoram board schools share Aizawl's hillsides, and it is not unusual for two children in one
    family to sit different boards. For a CBSE student, what a home tutor should do in Class 6 has little in common
    with what Class 12 demands, and the 2026-27 session has added new rules in Classes 9 and 10. Abhinandan Tiwary
    writes the Class 10 maths guidance on this page and Aaditya Kashyap the science. Read on for the job at each
    stage, the new rules, the senior marks split, a fair comparison with the state board, a week that keeps working
    in the rain, notes on five localities and questions for the free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#azcb-stages">Stages</a> ·
    <a href="#azcb-new">The 2026-27 rules</a> ·
    <a href="#azcb-senior">Senior marks</a> ·
    <a href="#azcb-mbse">CBSE and MBSE</a> ·
    <a href="#azcb-week">A senior week</a> ·
    <a href="#azcb-mode">Visit or screen</a> ·
    <a href="#azcb-places">Localities</a> ·
    <a href="#azcb-demo">Demo questions</a> ·
    <a href="#azcb-fees">Cost</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="azcb-stages">Five stages, five different jobs for a tutor</h2>
  <dl>
    <dt><strong>Classes 6 to 8 (marked in school)</strong></dt>
    <dd>Fractions, negative numbers and the first algebra trip children up, and science chapters get skimmed. The tutor's job is solid arithmetic and the habit of writing every step.</dd>
    <dt><strong>Class 9 (school papers out of 80, plus 20 internal)</strong></dt>
    <dd>Maths and science both get harder at once. Regular short written tests catch slipping chapters, and the family has to decide about the optional Advanced papers.</dd>
    <dt><strong>Class 10 (board paper out of 80, plus 20 from school)</strong></dt>
    <dd>Unfamiliar, applied questions and messy presentation cost the most. Timed sample papers, checked line by line against the official marking scheme, are the core of the year.</dd>
    <dt><strong>Class 11 (marked in school)</strong></dt>
    <dd>Physics, chemistry and maths take a steep step up. Whatever is built in the first term carries Class 12.</dd>
    <dt><strong>Class 12 (board paper plus practical or internal marks)</strong></dt>
    <dd>Entrance preparation tends to crowd out board revision, so one combined timetable matters.</dd>
  </dl>
  <p>
    A Class 10 student must score 33% in each subject to pass. Sudden trouble in Class 9 usually traces back to a
    gap left open in Class 7 or 8, which is why tuition in the middle years pays off most when it fills old holes instead
    of running ahead of the syllabus.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azcb-new">The 2026-27 rules for Classes 9 and 10</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Changes CBSE families in Classes 9 and 10 should plan around</caption>
    <thead>
      <tr><th scope="col">Rule</th><th scope="col">What it means at home</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9 maths and science papers are common to all students; an Advanced paper (one hour, 25 marks, outside the aggregate) is optional, and 50% or more on it is recorded on the marksheet</td><td>Add the Advanced paper only if the regular paper is already comfortable</td></tr>
      <tr><td>Students in Class 10 during 2026-27 are the last to pick Basic or Standard maths</td><td>Choose with Class 11 in mind; Standard keeps the maths route open</td></tr>
      <tr><td>A first board exam for everyone, then an optional second sitting to raise up to three subjects among science, maths, social science and languages</td><td>Prepare for the first sitting as though there will be no second</td></tr>
      <tr><td>Roughly half of each secondary paper is competency-based, using cases, sources and data; the third language is marked by the school</td><td>Weekly practice on case and data questions, not only textbook exercises</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> and the
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> go through NCERT one chapter
    at a time; how we match tutors is set out on the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths
    tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azcb-senior">Classes 11 and 12: theory, practical and internal marks</h2>
  <p>
    In the three sciences, CBSE awards 70 marks for the written paper and keeps 30 for practical work. Maths (or
    Applied Mathematics), accountancy, economics and business studies run on 80 for the paper and 20 internal. Put
    simply, close to a third of each science is earned through the lab file, the experiments and the viva, and a
    tutor who skips them leaves marks on the table. The Class 12 paper spans the whole year's syllabus, and its
    format is adjusted slightly each session through the sample paper. For the board year, see our guides to
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">physics</a>,
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">chemistry</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">maths</a>, and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azcb-mbse">CBSE beside the Mizoram board</h2>
  <p>
    Aizawl students do move between CBSE and the Mizoram Board of School Education (MBSE), and many tutors teach
    both. The board's own documents on mbse.edu.in show that the two are further apart in Class 10 than in Class 12.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What changes, and what does not, when an Aizawl student switches between CBSE and MBSE</caption>
    <thead>
      <tr><th scope="col">Area</th><th scope="col">CBSE</th><th scope="col">MBSE (from mbse.edu.in)</th></tr>
    </thead>
    <tbody>
      <tr><td>Books in Classes 9 and 10</td><td>NCERT</td><td>The board's own list, with bilingual maths and science textbooks and the Essential English series</td></tr>
      <tr><td>Class 10 science paper</td><td>80 marks at the board, 20 in school</td><td>A 70-mark theory paper with physics, chemistry and biology sections, a 10-mark practical run by the school, and internal marks</td></tr>
      <tr><td>Class 10 maths content</td><td>Seven units, real numbers to statistics and probability</td><td>Eight topic areas, one of them a short Sets topic worth 3 marks</td></tr>
      <tr><td>Class 9 assessment</td><td>Common papers, with optional Advanced papers</td><td>The school's own promotion exam</td></tr>
      <tr><td>Class 12 science subjects</td><td>70 theory, 30 practical</td><td>70 theory, 10 practical</td></tr>
      <tr><td>Class 12 chemistry</td><td>Ten chapters with fixed marks</td><td>The same ten chapters carrying the same marks, with NCERT books on the list</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Since NCERT titles sit on both boards' senior lists, a switch at Class 11 is usually smooth. A switch in Class 9
    or 10 needs a careful term of catching up with new books and question styles. The state board is covered in
    detail on <a href="{{ url('/mizoram-board-tutor-aizawl') }}">Mizoram Board tutors in Aizawl</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azcb-week">Protecting board work in a JEE or NEET year</h2>
  <p>
    Once entrance coaching starts, school subjects slip quietly off the calendar. Three weekly habits hold them in
    place:
  </p>
  <ol>
    <li><strong>A full written answer in each main subject,</strong> done under time and marked with the CBSE scheme. A diet of only objective questions leaves a student unable to set out a derivation.</li>
    <li><strong>A short session on the practical file or project,</strong> with a few viva questions, so the 30 practical marks are not crammed at the end.</li>
    <li><strong>A short revisit of a weak NCERT chapter,</strong> because the board paper keeps close to the textbook.</li>
  </ol>
  <p>
    For the entrance side, see the national <a href="{{ url('/jee-home-tutor') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor') }}">NEET</a> home tutor pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azcb-mode">A tutor's visit or a screen?</h2>
  <p>
    Until about Class 8, a child gains far more from an adult sitting alongside than from any video call. Older
    students tend to learn maths and science well in person, while English, social science and quick revision
    checks transfer easily online. Aizawl adds a weather reason: when heavy rain makes the trip unwise, the lesson
    goes online at its usual hour instead of being lost. A common arrangement is one visit plus one screen lesson a
    week; see <a href="{{ url('/online-tutor-aizawl') }}">online tutors for Aizawl</a>. The city's subject pages
    cover <a href="{{ url('/maths-home-tutor-aizawl') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-aizawl') }}">science</a> to Class 10,
    <a href="{{ url('/physics-home-tutor-aizawl') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-aizawl') }}">chemistry</a> in the senior classes, and
    <a href="{{ url('/english-home-tutor-aizawl') }}">English</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azcb-places">Weekly CBSE lessons in five Aizawl localities</h2>
  <ul>
    <li><strong>{!! $azA('chaltlang', 'Chaltlang') !!}</strong> (Durtlang, Chaltlang and Bawngkawn): families live on several levels reached by stairs; give the floor and a landmark, and allow for traffic into the centre and rain from April to October.</li>
    <li><strong>{!! $azA('bawngkawn', 'Bawngkawn') !!}</strong> (same zone): tutors from Durtlang, Chaltlang, Ramhlun or Zemabawk can reach it without crossing the city; say whether the door is at road level or below.</li>
    <li><strong>{!! $azA('chanmari', 'Chanmari') !!}</strong> (Chanmari, Zarkawt and Dawrpui): central and busy all day; fix a slot after the evening rush and suggest a two-wheeler over a car.</li>
    <li><strong>{!! $azA('vaivakawn', 'Vaivakawn') !!}</strong> (Tuikual, Vaivakawn and Luangmual): where the central localities meet the Luangmual side, so tutors can come from either; name the entrance to use.</li>
    <li><strong>{!! $azA('mission-veng', 'Mission Veng') !!}</strong> (Khatla, Mission Veng and Kulikawn): an old locality of offices, institutions and homes; tutors from Salem Veng, Venghnuai or Kulikawn are nearest, and big events can fill the roads nearby.</li>
  </ul>
  <p>
    Every locality is listed on the four zone pages,
    <a href="{{ url('/city/aizawl/zone/durtlang-chaltlang-bawngkawn') }}">Durtlang, Chaltlang and Bawngkawn</a>,
    <a href="{{ url('/city/aizawl/zone/chanmari-zarkawt-dawrpui') }}">Chanmari, Zarkawt and Dawrpui</a>,
    <a href="{{ url('/city/aizawl/zone/tuikual-vaivakawn-luangmual') }}">Tuikual, Vaivakawn and Luangmual</a> and
    <a href="{{ url('/city/aizawl/zone/khatla-mission-veng-kulikawn') }}">Khatla, Mission Veng and Kulikawn</a>, and on
    the <a href="{{ url('/city/aizawl') }}">Aizawl home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azcb-demo">Questions to put to a CBSE tutor at the demo</h2>
  <ul>
    <li>Which Class 9 or 10 students have you taught under the 2026-27 rules, and what did you do differently?</li>
    <li>Here is a marked school answer: where would a CBSE examiner give and withhold marks?</li>
    <li>How do you prepare students for case-study and data-based questions?</li>
    <li>At what point in the year will you check the lab file or project?</li>
    <li>Can you keep the same weekly slot from April to October, and go online on the wettest days?</li>
  </ul>
  <p>
    If the answers leave you unsure, another tutor from the shortlist gives a demo, and swapping tutors later costs
    nothing. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> lists more
    points to watch.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azcb-fees">What it costs and how to begin</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor fixes a
    rate, and every rate is on your shortlist ahead of the demo; the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-aizawl') }}">Aizawl home tuition fees</a> describe what
    pushes a fee up or down.
  </p>
  <p>
    Send the class, the subjects, the time school finishes and your locality with the building name and a landmark.
    We reply with two or three suitable tutors, and your first lesson is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Tutors who join pass an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profiles appear. You can also
    <a href="{{ url('/tutors') }}">browse tutor profiles</a> or read the
    <a href="{{ url('/blog/aizawl-home-tuition-guide') }}">Aizawl home tuition guide</a> first. Teachers looking for
    students can use <a href="{{ url('/tuition-jobs/aizawl') }}">Aizawl tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
