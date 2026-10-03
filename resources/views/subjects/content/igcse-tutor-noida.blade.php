{{--
  Board hub for "IGCSE tutor Noida" (Cambridge IGCSE and Pearson Edexcel
  International GCSE). Author: Ajay Vatsyayan (role: IB, IGCSE and ISC maths).
  No anecdotes, years or results are claimed for him. No schools, coaching
  institutes, societies, developers or people are named.

  Board facts restate only what igcse-tutor-gurgaon states; its official
  sources (syllabus PDFs from cambridgeinternational.org and
  qualifications.pearson.com, read 1 Oct 2026):
  - Cambridge IGCSE Mathematics 0580 syllabus: Core Papers 1 (non-calculator)
    and 3 (calculator), grades C-G; Extended Papers 2 and 4, grades A*-E;
    scientific calculator on calculator papers, graphical not permitted;
    about 130 guided learning hours per subject.
  - Cambridge IGCSE Chemistry 0620, Physics 0625, Biology 0610 syllabuses:
    Core (Papers 1 and 3, grades C-G) or Extended (Papers 2 and 4, grades
    A*-G, Core plus Supplement content); multiple-choice, theory and a
    practical test or alternative-to-practical paper (MCQ 40 questions,
    45 min, 30%; theory 80 marks, 1 h 15 min, 50%; practical 40 marks, 20%).
  - Cambridge IGCSE Additional Mathematics 0606.
  - Pearson Edexcel International GCSE Mathematics A (4MA1): Foundation and
    Higher tiers, grades 9-1 (Foundation 5-1, Higher 9-4); 4PH1/4CH1/4BI1
    untiered, two written papers, no separate practical exam; Further Pure
    Mathematics 4PM1. As used in blog/cambridge-vs-edexcel-igcse-gurgaon.
  No exam dates or exam-series months are given on this page. Board mix only as
  the Noida hub (resources/views/city/content/noida.blade.php) words it: CBSE
  most common, ICSE widely taught, some schools offer the IB or Cambridge
  IGCSE, state board UPMSP; specialists are fewer, so online or hybrid tuition
  often widens the choice. UP Board described in general terms only. No share
  of any board is claimed and no board is tied to any part of the city.
  Local detail only from database/seo-content/areas/noida-research.json,
  noida-zone-guides.json, zones/noida.json and the Noida hub. Fee wording is
  the approved NXTutors sentence. FAQs render from faqs/igcse-tutor-noida.php.
  Area links render only for active Noida areas.
--}}
@php
  $ignSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ign = function (string $slug, string $label) use ($ignSlugs) {
      return in_array($slug, $ignSlugs, true)
          ? '<a href="' . e(url('/city/noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ign-guide" aria-labelledby="ignGuideTitle">
  <h2 id="ignGuideTitle">IGCSE tutors in Noida: syllabus code first, then the tutor</h2>

  <p class="nx-guide__lede">
    Two Noida students can both be "doing IGCSE" and sit quite different exams. One may be on Cambridge Extended maths
    with a non-calculator paper; another on Edexcel Higher maths, where both papers allow a calculator. One may face a
    separate practical paper in physics; another has practical skills tested inside the written papers. A tutor who
    treats IGCSE as one thing will prepare a child for the wrong papers. This page sets out how the two awarding bodies
    differ, why tiers matter, what Grade 9 and Grade 10 should look like, which subjects families ask about, how to test
    a tutor in the demo and how home or online tuition works across Noida. It is written by Ajay Vatsyayan, who teaches
    IB, IGCSE and ISC maths on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ign-mix">IGCSE in Noida</a> ·
    <a href="#ign-style">Compared with CBSE and UP Board</a> ·
    <a href="#ign-bodies">Cambridge or Edexcel</a> ·
    <a href="#ign-tiers">Tiers</a> ·
    <a href="#ign-science">Science papers</a> ·
    <a href="#ign-years">Grade 9 and 10</a> ·
    <a href="#ign-subjects">Subjects</a> ·
    <a href="#ign-zones">Reaching each zone</a> ·
    <a href="#ign-mode">Home or online</a> ·
    <a href="#ign-demo">Demo checklist</a> ·
    <a href="#ign-start">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ign-mix">IGCSE among Noida's boards</h2>
  <p>
    Most Noida students are in CBSE schools, ICSE is widely taught, and there are schools affiliated to the UP Board,
    UPMSP. A smaller group of schools offers Cambridge IGCSE or the IB. For a family, that means plenty of tutors who
    know the maths and science content, and far fewer who know a given IGCSE syllabus code, its papers and its mark
    schemes. We therefore match on the code and tier first. Where the right person is not nearby, online or hybrid
    classes widen the choice. Our <a href="{{ url('/igcse-tutor-gurgaon') }}">Gurgaon IGCSE guide</a> covers the
    syllabuses in more depth, and for what comes next, see <a href="{{ url('/ib-tutor-noida') }}">IB tutors in
    Noida</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-style">How IGCSE differs from CBSE and the UP Board</h2>
  <p>
    CBSE and the UP Board award a single board result built on prescribed textbooks; the state board sets its own
    paper pattern for its High School exam. IGCSE is subject by subject: each course has its own code, papers and grade,
    and students are often entered for different tiers in different subjects. There is no single national textbook to
    finish; the syllabus document and past papers define the target. Students who arrive from CBSE or a state board
    usually find the content familiar and the questions unfamiliar, especially calculator papers, data-heavy science
    questions and "explain" or "suggest" items. The first month with a tutor should go on question styles, not chapters.
    Our <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to switching from CBSE to IGCSE or IB</a>
    has a bridging plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-bodies">Cambridge or Edexcel: what changes for the student</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Two awarding bodies, compared on the points that change tuition</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">Cambridge IGCSE</th><th scope="col">Pearson Edexcel International GCSE</th></tr>
    </thead>
    <tbody>
      <tr><td>Grades</td><td>A* to G on the codes covered here</td><td>9 to 1</td></tr>
      <tr><td>Maths tiers</td><td>Core or Extended (0580)</td><td>Foundation or Higher (4MA1)</td></tr>
      <tr><td>Calculator in maths</td><td>One paper without, one with a scientific calculator; graphical calculators not allowed</td><td>Calculator allowed on both papers</td></tr>
      <tr><td>Sciences</td><td>Core or Extended; a practical test or an alternative-to-practical paper</td><td>No tiers; practical skills assessed inside two written papers</td></tr>
      <tr><td>Extension maths</td><td>Additional Mathematics (0606)</td><td>Further Pure Mathematics (4PM1)</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The school chooses the board for each subject, and some mix the two, so get the exact codes from the school before
    the first session. Cambridge designs each syllabus around roughly 130 guided learning hours. Our
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge vs Edexcel comparison</a> goes paper by
    paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-tiers">Tiers: the ceiling on your child's grade</h2>
  <p>
    In Cambridge 0580, Core candidates take Papers 1 and 3 and can be awarded C to G; Extended candidates take Papers 2
    and 4 and can reach A* to E. In the Cambridge sciences, Extended adds Supplement content to the Core and opens grades
    A* to G, while Core tops out at C. In Edexcel maths, Foundation covers grades 5 to 1 and Higher 9 to 4. The tier is
    therefore a ceiling, not a label: no amount of effort on Core maths produces an A.
  </p>
  <p>
    Schools generally settle tiers during Grade 10, using test evidence. For a borderline student, the tutor's task in
    Grade 9 and early Grade 10 is to make the higher tier the obvious choice: Supplement topics, harder algebra and full
    Extended or Higher papers under time. For a student already secure on the higher tier, the work shifts to multi-step
    problems and precise answers to command words.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-science">How the Cambridge science papers split</h2>
  <p>
    Cambridge Physics (0625), Chemistry (0620) and Biology (0610) follow one structure. A multiple-choice paper of 40
    questions in 45 minutes is worth 30%. A theory paper of short and structured questions, 80 marks in an hour and a
    quarter, is worth 50%. A practical test or an alternative-to-practical paper, 40 marks, is worth the remaining 20%;
    the school decides which. The tier picks which multiple-choice and theory papers the student sits. Each paper needs
    its own practice: timed sets for multiple choice, mark-scheme key words for theory, and planning, tables, graphs and
    evaluation for the practical paper. Edexcel sciences have no tiers and no separate practical, so longer written
    answers carry more weight.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-years">Grade 9 and Grade 10 with a tutor</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A realistic shape for the two IGCSE years</caption>
    <thead>
      <tr><th scope="col">Phase</th><th scope="col">What the school is doing</th><th scope="col">What the tutor should do</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9, first term</td><td>New syllabus, familiar-looking content</td><td>Introduce past-paper questions by topic; fix calculator and units habits</td></tr>
      <tr><td>Grade 9, rest of year</td><td>Steady topic coverage</td><td>Stay one topic ahead or behind the school; start an error log</td></tr>
      <tr><td>Grade 10, before mocks</td><td>Finishing content; tiers under review</td><td>Supplement or Higher content for borderline students; full papers begin</td></tr>
      <tr><td>Grade 10, after mocks</td><td>Revision for the exam series</td><td>Timed full papers marked with the official scheme, every lost mark logged</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Ask the school which exam series your child is entered for and plan backwards from it: the series changes how much
    time the second half of Grade 10 really has.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-subjects">Subjects Noida's IGCSE families ask about</h2>
  <ul>
    <li><strong>Maths (0580 or 4MA1):</strong> the most common request, often tied to the tier decision. See the <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutor</a> page and <a href="{{ url('/maths-home-tutor-noida') }}">maths home tutors in Noida</a>.</li>
    <li><strong>Physics, chemistry and biology:</strong> <a href="{{ url('/physics-home-tutor-noida') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-noida') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-noida') }}">biology</a> tutors in Noida, matched to the code and practical route.</li>
    <li><strong>Additional Maths or Further Pure Maths:</strong> for students whose main maths grade is already secure.</li>
    <li><strong>English:</strong> <a href="{{ url('/english-home-tutor-noida') }}">English home tutors in Noida</a>; first language and second language are separate courses, so give the code.</li>
    <li><strong>Economics and business:</strong> matched on request.</li>
  </ul>
  <p>
    A good IGCSE hour opens on last week's errors from the log, teaches one topic in the papers' own style and command
    words, then sets two or three past-paper questions under time, marked together against the official mark scheme.
    The <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">parent's guide to IB and IGCSE
    tutoring</a> explains criteria and command words further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-zones">How an IGCSE tutor reaches each part of Noida</h2>
  <p>
    The tutor who knows your child's exact syllabus may start from anywhere in the city, so ask about the route, not
    just the distance:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/noida/zone/old-noida') }}">Old Noida</a>.</strong> {!! $ign('sector-29', 'Sector 29') !!} is near Botanical Garden, where the Blue and Magenta Lines meet, so a tutor can arrive from Delhi or across Noida by train; market streets are crowded in the evening, so agree a parking spot.</li>
    <li><strong><a href="{{ url('/city/noida/zone/central-noida') }}">Central Noida</a>.</strong> {!! $ign('sector-47', 'Sector 47') !!} is quiet houses and floors with no gate to clear; a tutor from Sector 46 or 48 avoids Dadri Main Road and Amrapali Road at busy hours.</li>
    <li><strong><a href="{{ url('/city/noida/zone/sector-62-belt') }}">Sector 62 belt</a>.</strong> {!! $ign('sector-55', 'Sector 55') !!} is plotted family homes along Khora Road; with the nearest stations at Sector 59 and Sector 15, metro tutors finish by auto, and an early-evening slot dodges the rush.</li>
    <li><strong><a href="{{ url('/city/noida/zone/sectors-70-82') }}">Sectors 70–82</a>.</strong> {!! $ign('sector-74', 'Sector 74') !!} is gated towers between the Aqua Line's Sector 50 and Sector 76 stations; tutors crossing from the Sector 61 side should allow for the Sector 71/51 junction.</li>
    <li><strong><a href="{{ url('/city/noida/zone/noida-expressway') }}">Noida Expressway</a>.</strong> {!! $ign('sector-93a', 'Sector 93A') !!} is established high-rise societies beside the expressway; a tutor from Sector 93 or 93B on local roads skips the office-hour slowdowns, and some gates want a pre-approved entry.</li>
    <li><strong><a href="{{ url('/city/noida/zone/near-noida-extension') }}">Near Noida Extension</a>.</strong> {!! $ign('sector-118', 'Sector 118') !!} has gated societies, some still being built around, and no metro inside; tutors come by two-wheeler or cab, and one already teaching in Sectors 117, 119 or 120 is easiest to schedule.</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/noida-sector-62-and-70s-tuition-guide') }}">Sector 62 and 70s guide</a> and the
    <a href="{{ url('/blog/noida-expressway-and-extension-tuition-guide') }}">Expressway and Extension guide</a> add local
    timing tips.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-mode">Home, online or a mix</h2>
  <p>
    Grade 9 students, and anyone who loses marks on hand-written working, usually do better with a tutor at the table.
    For Additional Maths, a science on the Cambridge practical route, or the final months of Grade 10, the right
    specialist matters more than the commute, and a weekday online lesson with that person beats a home lesson with a
    general tutor. Many families settle on one home session at the weekend and one online session in the week with the
    same tutor. Online maths and science only work if the tutor sees the working live. Read our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home vs online tutor</a> comparison.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-demo">Demo checklist for an IGCSE tutor</h2>
  <ol>
    <li><strong>Name the code and tier.</strong> Say "0620 Extended" or "4MA1 Higher" and see whether they describe the papers unprompted.</li>
    <li><strong>Mark a past-paper answer live</strong> against the published mark scheme, showing where method marks went.</li>
    <li><strong>Calculator discipline.</strong> For Cambridge maths, hand methods for the non-calculator paper; for Edexcel, the algebra a calculator will not do.</li>
    <li><strong>Practical route.</strong> For Cambridge sciences, ask whether the school uses the practical test or the alternative paper, and how they prepare each.</li>
    <li><strong>Command words.</strong> Ask how "describe", "explain" and "suggest" differ in a science answer.</li>
    <li><strong>A plan to the series.</strong> Expect an outline working back from your child's exam series.</li>
  </ol>
  <p>
    You get two or three matched tutors, see each fee before the demo, and a later switch is free. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has general questions too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ign-start">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For IGCSE, the subject,
    tier, time left before the exam and the tutor's journey at your hour shape the quote. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-noida') }}">home
    tuition fees in Noida</a>.
  </p>
  <p>
    Send the board, code and tier, for example "Cambridge 0625 Extended", with the grade, your sector and society, and
    free slots. We shortlist two or three tutors and the first class is a <a href="{{ url('/demo-class') }}">free
    demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>, every sector on our
    <a href="{{ url('/city/noida') }}">Noida tutors page</a>, or, for tutors, <a href="{{ url('/tuition-jobs/noida') }}">tuition
    jobs in Noida</a>.
  </p>
  </section>

  </div>
</article>
