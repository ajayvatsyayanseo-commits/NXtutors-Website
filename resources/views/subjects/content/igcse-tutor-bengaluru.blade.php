{{--
  Board page "IGCSE tutor Bengaluru" (Cambridge IGCSE and Pearson Edexcel
  International GCSE). Author: Ajay Vatsyayan (role: IB, IGCSE and ISC maths).
  No anecdotes, years or results are claimed for him. No schools, societies
  or people are named.

  IGCSE facts are only those stated in igcse-tutor-gurgaon, which cites
  (cambridgeinternational.org and qualifications.pearson.com, read
  1 Oct 2026): Cambridge IGCSE Mathematics 0580 (2025-2027): Core Papers 1
  and 3, grades C-G; Extended Papers 2 and 4, grades A*-E; one
  non-calculator paper; June and November series, March also in India;
  about 130 guided learning hours. Physics 0625, Chemistry 0620, Biology 0610
  (2026-2028): Core C-G or Extended A*-G; MCQ 40 questions, 45 min, 30%;
  theory 80 marks, 1 h 15 min, 50%; practical test or alternative to
  practical, 40 marks, 20%. Additional Mathematics 0606. Pearson Edexcel
  International GCSE Mathematics A 4MA1: Foundation and Higher, 9-1;
  4PH1/4CH1/4BI1 untiered, two written papers, no separate practical exam;
  Further Pure Mathematics 4PM1.
  The Bengaluru city hub names IB and IGCSE among the city's four kinds of
  examination, so this page exists. Local detail only from
  database/seo-content/areas/bengaluru-research.json,
  bengaluru-zone-guides.json, zones/bengaluru.json and the Bengaluru city hub.
  Fee wording is the approved NXTutors sentence. FAQs render from
  faqs/igcse-tutor-bengaluru.php. Area links render only when that Bengaluru
  area page exists and is active.
--}}
@php
  $igblSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $igblA = function (string $slug, string $label) use ($igblSlugs) {
      return in_array($slug, $igblSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide igbl-guide" aria-labelledby="igblGuideTitle">
  <h2 id="igblGuideTitle">IGCSE tutors in Bengaluru: the right code, the right tier, the right series</h2>

  <p class="nx-guide__lede">
    In Bengaluru, Cambridge IGCSE sits in the city's school mix beside the Karnataka state board, CBSE, ICSE and the IB.
    For a tutor, "IGCSE maths" is only the start of the brief. Is it Cambridge or Pearson Edexcel? Which syllabus code?
    Core or Extended, Foundation or Higher? And will your child sit in March, June or November? Those answers decide
    the papers, the reachable grades and what practice is worth doing. This page explains each of them, lists the
    subjects Bengaluru families tend to ask about, shows how tutors reach each zone and gives a checklist for the free
    demo. Ajay Vatsyayan, whose NXTutors teaching spans IB, IGCSE and ISC maths, is the author.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igbl-local">IGCSE in Bengaluru</a> ·
    <a href="#igbl-state">Compared with SSLC</a> ·
    <a href="#igbl-boards">Cambridge or Edexcel</a> ·
    <a href="#igbl-tiers">Tiers</a> ·
    <a href="#igbl-science">Science papers</a> ·
    <a href="#igbl-years">Grades 9 and 10</a> ·
    <a href="#igbl-subjects">Subjects</a> ·
    <a href="#igbl-zones">Zones</a> ·
    <a href="#igbl-demo">Demo checklist</a> ·
    <a href="#igbl-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igbl-local">IGCSE in Bengaluru's school mix</h2>
  <p>
    The city hub lists IB and Cambridge IGCSE as the fourth of the examination routes Bengaluru families follow. We do
    not estimate how many students that is; we have no sound figure and it differs from school to school. For tutoring,
    the practical facts are that IGCSE specialists for a particular code are fewer than general tutors, that schools
    may enter some subjects with Cambridge and others with Edexcel, and that the series your child sits shapes the
    whole year. Families moving into an IGCSE school from another board also ask for help with the change of style.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igbl-state">How IGCSE differs from the state board, in broad terms</h2>
  <p>
    Karnataka's state board sets one SSLC examination at the end of Class 10 from state textbooks, followed by the
    pre-university course. IGCSE is a set of separate subjects, each with its own code, papers and grade, and each
    designed by Cambridge around roughly 130 guided learning hours. Questions lean on command words such as
    "describe", "explain" and "suggest", and mark schemes reward precise key terms. Students arriving from a textbook
    board usually know the content and lose marks on unfamiliar question styles, calculator use and the practical
    papers in science.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igbl-boards">Cambridge or Edexcel: what to confirm with the school</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Two awarding bodies, compared on the points that change tutoring</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">Cambridge IGCSE</th><th scope="col">Pearson Edexcel International GCSE</th></tr>
    </thead>
    <tbody>
      <tr><td>Grades</td><td>A* to G on the codes most schools use</td><td>9 to 1</td></tr>
      <tr><td>Maths</td><td>0580, Core or Extended; one paper without a calculator</td><td>4MA1, Foundation or Higher; calculator in both papers</td></tr>
      <tr><td>Sciences</td><td>0625, 0620, 0610 in Core or Extended, with a practical paper</td><td>4PH1, 4CH1, 4BI1, untiered, two written papers</td></tr>
      <tr><td>Further maths</td><td>Additional Mathematics 0606</td><td>Further Pure Mathematics 4PM1</td></tr>
      <tr><td>Exam series</td><td>June and November, and March in India</td><td>Maths A in January and June; confirm others with the school</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Ask the school office for the exact codes on your child's entry before the first lesson. The
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge vs Edexcel comparison</a> goes paper by paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igbl-tiers">Why the tier decision matters</h2>
  <p>
    On Cambridge 0580, Core students sit Papers 1 and 3 and can be graded C to G, while Extended students sit Papers 2
    and 4 and can reach A* to E. In the Cambridge sciences, Extended adds Supplement content and opens A* to G, against
    C to G on Core. Edexcel maths Foundation aims at grades 5 to 1 and Higher at 9 to 4. So a student entered for Core
    maths cannot get an A however well they do. Schools usually settle tiers during Grade 10 from test evidence; a
    tutor's work before then is to make sure a borderline student is clearly performing at the higher tier.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igbl-science">The Cambridge science papers</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Three papers in each of Physics 0625, Chemistry 0620 and Biology 0610</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Shape</th><th scope="col">Share</th><th scope="col">Practise by</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice</td><td>40 questions, 45 minutes</td><td>30%</td><td>Full timed sets, then reasons for every wrong option</td></tr>
      <tr><td>Theory</td><td>80 marks, 1 hour 15 minutes</td><td>50%</td><td>Past questions marked for the mark scheme's key words</td></tr>
      <tr><td>Practical test or alternative to practical</td><td>40 marks; the school picks which</td><td>20%</td><td>Variables, results tables, graphs and evaluating a method</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Edexcel's sciences have no tiers and no separate practical exam; practical skills appear inside two written papers
    that reward clear, extended answers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igbl-years">Grades 9 and 10, stage by stage</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A realistic shape for the IGCSE years</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What the tutor focuses on</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9, first term</td><td>Command words, calculator habits and topic-by-topic past questions from the start</td></tr>
      <tr><td>Grade 9 to mid Grade 10</td><td>Keeping pace with the school scheme and building evidence for the higher tier</td></tr>
      <tr><td>Mocks</td><td>Full papers under time, marked with the official scheme</td></tr>
      <tr><td>After mocks</td><td>An error log by cause, and short revision on the weakest papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A March entry, available in India, shortens the run-in compared with June, so plan backwards from the series.
    After IGCSE, students head to the IB Diploma, A Level, or CBSE, ISC or PUC for Class 11; each needs a different
    bridge, set out in our <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to switching
    between CBSE and IB or IGCSE</a>. See also <a href="{{ url('/ib-tutor-bengaluru') }}">IB tutors in Bengaluru</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igbl-session">An hour with a good IGCSE tutor</h2>
  <p>
    Expect a pattern rather than a lecture. The first ten minutes go to last week's errors, taken from a written log
    the student keeps, not from memory. The middle of the hour is one topic, taught or repaired with examples written
    in the style of the real papers, command words included. The end is two or three past-paper questions done against
    the clock and then marked together with the official scheme, so your child sees exactly which phrase or step
    earned each mark. Homework is short and specific. Afterwards the tutor should be able to tell you, in two lines,
    what was covered and what comes next. If most of the hour is the tutor talking, or the worksheet never changes, ask
    for something different.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igbl-switch">Arriving in an IGCSE class from CBSE or the state board</h2>
  <p>
    A child who joins Grade 9 from CBSE or the state board often finds the topics familiar and relaxes, then drops
    marks on the first calculator paper or on a science question that asks them to "suggest" rather than recall. The
    first six to eight weeks are best spent on three things: reading each question for its command word, setting out
    working the way the mark scheme expects, and, for Cambridge sciences, practising method, tables and graphs for the
    practical paper. Content gaps are usually small and can be closed alongside.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igbl-subjects">Subjects and where to look</h2>
  <ul>
    <li>Maths, 0580 or 4MA1, and Additional or Further Pure maths: <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutors</a> and <a href="{{ url('/maths-home-tutor-bengaluru') }}">maths home tutors in Bengaluru</a>.</li>
    <li>Sciences: <a href="{{ url('/physics-home-tutor-bengaluru') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-bengaluru') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-bengaluru') }}">biology</a> tutors in Bengaluru; give the code and tier.</li>
    <li>English First Language 0500 or Second Language 0510: <a href="{{ url('/english-home-tutor-bengaluru') }}">English home tutors in Bengaluru</a>.</li>
  </ul>
  <p>
    Our reference page on <a href="{{ url('/igcse-tutor-gurgaon') }}">how IGCSE works</a> covers the board in more
    depth, and the <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE parent's guide</a>
    explains criteria and command terms.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igbl-zones">Reaching your zone</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What to tell a visiting IGCSE tutor, by zone</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Useful detail for the first visit</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/bengaluru/zone/koramangala-hsr-bellandur') }}">Koramangala, HSR and Bellandur</a>, e.g. {!! $igblA('sarjapur-road', 'Sarjapur Road') !!}</td><td>Tower and flat number for the security desk; no metro stop is open east of Silk Board</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/jayanagar-jp-nagar-banashankari') }}">Jayanagar, JP Nagar and Banashankari</a>, e.g. {!! $igblA('kumaraswamy-layout', 'Kumaraswamy Layout') !!}</td><td>Stage, cross and main numbers; a Green Line station plus a short auto</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/btm-bannerghatta-road-electronic-city') }}">BTM, Bannerghatta Road and Electronic City</a>, e.g. {!! $igblA('bannerghatta-road', 'Bannerghatta Road') !!}</td><td>Whether you are in a layout house or a tower; the Pink Line here is not open yet</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/indiranagar-old-airport-road') }}">Indiranagar and Old Airport Road</a></td><td>Which Purple Line station is nearest</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/whitefield-marathahalli-kr-puram') }}">Whitefield, Marathahalli and KR Puram</a>, e.g. {!! $igblA('marathahalli', 'Marathahalli') !!}</td><td>Your side of the ORR; Marathahalli has no metro station yet</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/hennur-kalyan-nagar-banaswadi') }}">Hennur, Kalyan Nagar and Banaswadi</a>, e.g. {!! $igblA('hennur', 'Hennur') !!}</td><td>Where a two-wheeler can be parked; road travel only for now</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/hebbal-rt-nagar-yelahanka') }}">Hebbal, RT Nagar and Yelahanka</a></td><td>New Town stage or Old Town landmark</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/malleshwaram-rajajinagar-yeshwanthpur') }}">Malleshwaram, Rajajinagar and Yeshwanthpur</a></td><td>Gate guard or visitor register, if any</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/vijayanagar-rr-nagar-kengeri') }}">Vijayanagar, RR Nagar and Kengeri</a>, e.g. {!! $igblA('rr-nagar', 'RR Nagar') !!}</td><td>Add the tutor to the visitor list before the demo</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/frazer-town-richmond-town-ulsoor') }}">Frazer Town, Richmond Town and Ulsoor</a></td><td>Name and flat number for the guard at the entrance</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Bengaluru hub points out that online lessons open up tutors across India for IGCSE, which helps when the right
    code specialist lives far away; a weekend home lesson plus a weekday online one is a workable mix. Online maths and
    science only work if the tutor sees handwritten working live. Every area is on our
    <a href="{{ url('/city/bengaluru') }}">Bengaluru home tuition page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igbl-demo">Demo checklist for an IGCSE tutor</h2>
  <ol>
    <li>Say the code and tier, for example "0620 Extended", and see whether the paper structure comes without notes.</li>
    <li>Have them mark your child's past-paper answer against the published scheme, aloud.</li>
    <li>For Cambridge maths, check how they build non-calculator speed; for Edexcel, the harder algebra.</li>
    <li>For Cambridge sciences, ask whether the school enters the practical test or the alternative, and how each is prepared.</li>
    <li>Ask what "describe", "explain" and "suggest" each require.</li>
    <li>Ask for the months to your exam series in outline.</li>
  </ol>
  <p>
    The shortlist is two or three tutors with fees shown before the demo, and moving to another tutor later is free.
    Anyone joining as a tutor completes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igbl-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. With IGCSE, the subject,
    tier, closeness of the exam and the tutor's journey decide where a fee lands. The
    <a href="{{ url('/blog/home-tuition-fees-bengaluru') }}">Bengaluru tuition fees guide</a> and the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain the ranges.
  </p>
  <p>
    Send the board, code and tier, the grade, your area and your hours, then book the
    <a href="{{ url('/demo-class') }}">free demo class</a> or look at <a href="{{ url('/tutors') }}">tutor
    profiles</a>. Teachers who know these syllabuses can find openings on
    <a href="{{ url('/tuition-jobs/bengaluru') }}">Bengaluru tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
