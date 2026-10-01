{{--
  Board page for "IGCSE tutor Surat" (Cambridge IGCSE and Pearson Edexcel
  International GCSE). Author: Ajay Vatsyayan (role: IB, IGCSE and ISC maths).
  No anecdotes, years or results are claimed for him. No schools or societies
  are named.

  Syllabus facts are reworded from the Gurgaon board hub (igcse-tutor-gurgaon),
  which cites cambridgeinternational.org and qualifications.pearson.com
  syllabus PDFs (read 1 Oct 2026): about 130 guided learning hours; 0580 Core
  (Papers 1 and 3, C-G), Extended (Papers 2 and 4, A*-E), one non-calculator
  and one calculator paper; 0625/0620/0610 Core or Extended (Extended A*-G,
  Core C-G), multiple choice 40 questions 45 min 30%, theory 80 marks
  1 h 15 min 50%, practical test or alternative to practical 40 marks 20%; June
  and November series, March also in India; Edexcel 4MA1 Foundation (5-1) and
  Higher (9-4), calculator on both papers; 4PH1/4CH1/4BI1 untiered, two
  written papers, no separate practical exam; 0606 and 4PM1. No exam dates.
  Local detail only from the Surat city hub view (a Gujarati-medium GSEB Class
  9 student and an IGCSE candidate need different teachers; for Cambridge
  IGCSE, command words, the correct tier and marked past papers carry most of
  the weight; online widens the choice for IGCSE; GSEB media; Navratri and
  Diwali), zones/surat.json and surat-zone-guides.json. No claim is made about
  where IGCSE families live. Area links render only for active Surat areas.
  Fee wording is the approved sentence. FAQs render from faqs/igcse-tutor-surat.php.
--}}
@php
  $igsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $igsA = function (string $slug, string $label) use ($igsSlugs) {
      return in_array($slug, $igsSlugs, true)
          ? '<a href="' . e(url('/city/surat/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="igsGuideTitle">
  <h2 id="igsGuideTitle">IGCSE tutors in Surat: the exact syllabus, the right tier and papers marked properly</h2>

  <p class="nx-guide__lede">
    A Gujarati-medium GSEB student in Class 9 and an IGCSE candidate of the same age need different teachers, so we
    match board and class as one choice. For Cambridge IGCSE, three things carry most of the weight: answering the
    command word, being entered at the correct tier, and practising past papers marked against the official scheme.
    Edexcel's International GCSE shares the spirit but not the details. This page explains how to describe your
    child's course, how the papers and tiers work, how IGCSE compares with GSEB and CBSE, the mistakes worth avoiding,
    and how home and online tuition work across Surat. It is written by Ajay Vatsyayan, who teaches IB, IGCSE and ISC
    maths on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igs-request">A precise request</a> ·
    <a href="#igs-tiers">Tiers and grades</a> ·
    <a href="#igs-science">Science components</a> ·
    <a href="#igs-gseb">IGCSE, GSEB and CBSE</a> ·
    <a href="#igs-mistakes">Mistakes to avoid</a> ·
    <a href="#igs-plan">Grade 9 and 10</a> ·
    <a href="#igs-subjects">Subjects</a> ·
    <a href="#igs-zones">Across Surat</a> ·
    <a href="#igs-demo">The demo</a> ·
    <a href="#igs-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igs-request">What a precise IGCSE request looks like</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The details that decide which tutor fits</caption>
    <thead>
      <tr><th scope="col">Detail</th><th scope="col">Example</th><th scope="col">Why the tutor needs it</th></tr>
    </thead>
    <tbody>
      <tr><td>Awarding body</td><td>Cambridge or Pearson Edexcel</td><td>The two set different papers and grade differently: letters A* to G against numbers 9 to 1</td></tr>
      <tr><td>Syllabus code</td><td>0580, 0625, 4MA1, 4CH1</td><td>Each code has its own papers and content</td></tr>
      <tr><td>Tier</td><td>Core or Extended; Foundation or Higher</td><td>The tier caps the grade available</td></tr>
      <tr><td>Exam series</td><td>June or November, or March in India</td><td>Sets how much time remains</td></tr>
      <tr><td>Practical route (Cambridge science)</td><td>Practical test or alternative to practical</td><td>Changes how practical skills are prepared</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    IGCSE is usually taught over Grades 9 and 10, each subject a separate qualification; Cambridge designs a syllabus
    for about 130 guided learning hours. The school office can confirm the codes. Our
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge vs Edexcel comparison</a> goes paper by
    paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igs-tiers">Tiers and the grades they open</h2>
  <p>
    Cambridge maths (0580) is entered at Core or Extended. Core candidates sit Papers 1 and 3, one without and one with
    a calculator, and the best grade available is C. Extended candidates sit Papers 2 and 4 and can reach A*, with E as
    the lowest grade. In Cambridge physics, chemistry and biology, Extended includes extra Supplement content and opens
    grades A* to G, while Core runs from C to G. Edexcel maths (4MA1) has Foundation, aimed at grades 5 to 1, and
    Higher, aimed at 9 to 4, with a calculator allowed on both papers; Edexcel's sciences are not tiered.
  </p>
  <p>
    Schools generally fix the tier in Grade 10 from test results. If your child is near the line, the work in Grade 9
    and early Grade 10 should aim to make the higher tier the obvious choice, through Supplement or Higher topics and
    full higher-tier questions under time.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igs-science">Cambridge science: three components</h2>
  <ul>
    <li><strong>Multiple choice, 30%.</strong> Forty questions in three quarters of an hour. Practise full timed sets and write down why each wrong option is wrong.</li>
    <li><strong>Theory, 50%.</strong> Eighty marks over an hour and a quarter, in short and structured answers. Mark practice answers against the key words the scheme credits.</li>
    <li><strong>Practical, 20%.</strong> Forty marks, as a practical test or a written alternative, whichever the school enters. Practise planning, results tables with units, graphs and judging reliability.</li>
  </ul>
  <p>
    Edexcel's sciences use two written papers instead, with practical understanding tested inside them and more
    room for extended answers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igs-gseb">IGCSE beside GSEB and CBSE: medium and method</h2>
  <p>
    Surat's state board, GSEB, teaches many of the city's students, whether in Gujarati, in English or in another
    medium, and CBSE schools teach many more. Both of those boards lead to a single public examination at each stage,
    set from prescribed textbooks. IGCSE is assembled differently: a separate grade in each subject, earned on papers
    written to a published syllabus, where marks hinge on the command word. "Describe" wants an account of what
    happens, "explain" wants the reason, and "suggest" wants a sensible idea applied to an unfamiliar case. Children
    who used Gujarati textbooks in earlier classes meet one extra hurdle, the English names for every process and
    quantity, and the steadiest fix is a short vocabulary list built with the tutor as each topic is taught.
  </p>
  <p>
    The choice after Grade 10 should shape the IGCSE years. Students heading for the IB Diploma gain from Extended
    maths and early graphic-calculator use. Those returning to GSEB or joining CBSE for Class 11 will need brisk
    mental and written arithmetic and the full, line-by-line working those boards expect. Read our
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to switching boards</a>, and see
    <a href="{{ url('/ib-tutor-surat') }}">IB tutors in Surat</a> for the Diploma.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igs-mistakes">Mistakes worth avoiding</h2>
  <ol>
    <li><strong>Teaching the content, not the paper.</strong> Knowing the science is necessary; answering the command word earns the mark.</li>
    <li><strong>Leaving the tier to chance.</strong> By the time the school decides, it is late to change the evidence.</li>
    <li><strong>Calculator dependence.</strong> Cambridge maths has a non-calculator paper; speed by hand needs regular practice.</li>
    <li><strong>Skipping practical skills.</strong> A fifth of each Cambridge science grade rests on them.</li>
    <li><strong>Marking by feel.</strong> Past papers should be marked against the official scheme, not the tutor's impression.</li>
    <li><strong>Starting full papers too late.</strong> Timed papers after the mocks, every week, beat a rush in the final month.</li>
  </ol>
  <p>
    Most of these are prevented by a plain session routine. Open with the error log from last week, teach or repair
    a single topic using questions in the style of the real papers, then finish with two or three past-paper
    questions done to time and marked together against the scheme. A one-line note to you afterwards, covering what
    was done and what comes next, keeps everyone honest about progress.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igs-plan">Grade 9 and Grade 10 at a glance</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A realistic IGCSE tutoring rhythm</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Emphasis</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9, first term</td><td>Command words, calculator discipline, topic-by-topic past questions, an error log</td></tr>
      <tr><td>Grade 9, rest of the year</td><td>Higher-tier content for students near the line</td></tr>
      <tr><td>Grade 10 until the mocks</td><td>Finishing each syllabus; practical skills in science</td></tr>
      <tr><td>Grade 10 after the mocks</td><td>Weekly full papers under time, marked with the official scheme</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Plan back from the series your child is entered for; a March entry leaves less time after the mocks than June.
    International schools keep their own terms, but Navratri and the Diwali holidays still change evenings across
    Gujarat, so agree those weeks in advance.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igs-subjects">Subjects and our Surat pages</h2>
  <ul>
    <li><strong>Mathematics:</strong> for 0580 or 4MA1, start with our <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutor</a> page or <a href="{{ url('/maths-home-tutor-surat') }}">maths home tutors in Surat</a>. Students secure in the main course can add Cambridge Additional Mathematics (0606) or Edexcel Further Pure (4PM1); ask and we match.</li>
    <li><strong>The sciences:</strong> separate specialists through <a href="{{ url('/physics-home-tutor-surat') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-surat') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-surat') }}">biology</a> home tutors in Surat, or a single <a href="{{ url('/science-home-tutor-surat') }}">science home tutor</a> while all three are still at Grade 9 level.</li>
    <li><strong>English:</strong> tell us whether it is the first-language or second-language course, as they are examined differently; see <a href="{{ url('/english-home-tutor-surat') }}">English home tutors in Surat</a>.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igs-zones">Home and online across Surat</h2>
  <p>
    Online lessons widen the choice to IGCSE tutors across India, and many Surat families pair a nearby tutor with an
    online specialist for a particular code. With the metro not yet open, the home part depends on bridges, buses and
    shift traffic.
  </p>
  <p>
    West of the Tapi, in <a href="{{ url('/city/surat/zone/adajan-pal-rander') }}">Adajan, Pal and Rander</a>, a
    tutor who already lives on that bank keeps a weekly slot in {!! $igsA('jahangirpura', 'Jahangirpura') !!} far
    more easily than one crossing the bridges; mention any nearby BRTS corridor stop. In
    <a href="{{ url('/city/surat/zone/central-surat-athwa-ghod-dod-road') }}">Central Surat, Athwa and Ghod Dod Road</a>,
    {!! $igsA('majura-gate', 'Majura Gate') !!} and {!! $igsA('parle-point', 'Parle Point') !!} are central enough to
    draw tutors from Adajan, Piplod and City Light; start straight after school, before the shopping crowd.
  </p>
  <p>
    To the south, <a href="{{ url('/city/surat/zone/piplod-vesu-dumas-road') }}">Piplod, Vesu and Dumas Road</a>
    societies are gated, so arrange a standing visitor entry after the demo. In
    <a href="{{ url('/city/surat/zone/udhna-althan-pandesara') }}">Udhna, Althan and Pandesara</a>, housing board
    blocks in {!! $igsA('pandesara', 'Pandesara') !!} usually let the tutor come straight up, and families often add
    online classes for specialist subjects. In <a href="{{ url('/city/surat/zone/katargam-varachha-sarthana') }}">Katargam,
    Varachha and Sarthana</a>, diamond-unit shift times shape the roads around {!! $igsA('yogi-chowk', 'Yogi Chowk') !!},
    and {!! $igsA('amroli', 'Amroli') !!} on the northern edge often suits a local tutor plus an online specialist.
    Online maths and science need the tutor to see working live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igs-demo">A demo checklist</h2>
  <ol>
    <li>Give the code and tier; the tutor should describe the papers without looking them up.</li>
    <li>Ask them to mark one past-paper answer against the official scheme while you watch.</li>
    <li>Ask how they will build non-calculator speed, or, for Edexcel, multi-step algebra.</li>
    <li>For Cambridge science, ask which practical route they would prepare for and how.</li>
    <li>For a child from Gujarati-medium study, ask how they will build English subject vocabulary.</li>
  </ol>
  <p>
    Every request gets a shortlist of two or three tutors, each showing a fee up front, and a later change of tutor
    costs you nothing. Anyone joining as a tutor goes through an <a href="{{ url('/how-we-verify-tutors') }}">ID
    check</a> before the profile is published.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igs-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For an IGCSE student in
    Surat, the code and tier, how near the exam series is, and whether a bridge stands between tutor and home all
    affect it. Our <a href="{{ url('/pricing-guide') }}">pricing guide</a> and the
    <a href="{{ url('/blog/home-tuition-fees-surat') }}">Surat home tuition fees</a> post explain more.
  </p>
  <p>
    Share the details from the table near the top, plus your locality and the evenings that suit you, and we set up
    a <a href="{{ url('/demo-class') }}">free demo</a> as the first class. To read more about how IGCSE works, try
    our <a href="{{ url('/igcse-tutor-gurgaon') }}">IGCSE explainer written for Gurgaon families</a>. You can also
    look through <a href="{{ url('/tutors') }}">tutor profiles</a>, the full list of localities on our
    <a href="{{ url('/city/surat') }}">Surat tutors page</a>, or, for teachers,
    <a href="{{ url('/tuition-jobs/surat') }}">tuition jobs in Surat</a>.
  </p>
  </section>

  </div>
</article>
