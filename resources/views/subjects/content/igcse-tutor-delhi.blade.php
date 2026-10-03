{{--
  Board hub for "IGCSE tutor Delhi" (Cambridge IGCSE and Pearson Edexcel
  International GCSE). Author: Ajay Vatsyayan (role: IB, IGCSE and ISC maths).
  No anecdotes, years or results are claimed for him. No schools, coaching
  institutes, societies or people are named.

  Board facts are reworded from the Gurgaon IGCSE hub (igcse-tutor-gurgaon),
  which cites these official sources (syllabus PDFs from
  cambridgeinternational.org and qualifications.pearson.com, read 1 Oct 2026):
  - Cambridge IGCSE Mathematics 0580 syllabus for 2025-2027: Core Papers 1
    (non-calculator) and 3 (calculator), grades C-G; Extended Papers 2 and 4,
    grades A*-E; scientific calculator on calculator papers, graphical not
    permitted; more than one exam series a year; about 130 guided learning
    hours per subject.
  - Cambridge IGCSE Chemistry 0620, Physics 0625, Biology 0610 syllabuses for
    2026-2028: Core (Papers 1 and 3, grades C-G) or Extended (Papers 2 and 4,
    grades A*-G, Core plus Supplement content); MCQ 40 questions, 45 min, 30%;
    theory 80 marks, 1 h 15 min, 50%; practical test or alternative to
    practical, 40 marks, 20%.
  - Cambridge IGCSE Additional Mathematics 0606.
  - Pearson Edexcel International GCSE Mathematics A (4MA1): Foundation and
    Higher tiers, grades 9-1; 4PH1/4CH1/4BI1 untiered, two written papers, no
    separate practical exam.
  No exam months are given on this page. Delhi detail only from the Delhi city
  hub view (CBSE for most students, ICSE/ISC sizeable, a smaller IB/IGCSE
  group; IGCSE rewards command words, the right tier and past papers against
  the official scheme; no state board described),
  database/seo-content/areas/delhi-research.json and delhi-zone-guides.json.
  No board is said to concentrate in any area. Fee wording is the approved
  NXTutors sentence. FAQs render from faqs/igcse-tutor-delhi.php. Area links
  render only for active Delhi areas.
--}}
@php
  $igdSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $igdA = function (string $slug, string $label) use ($igdSlugs) {
      return in_array($slug, $igdSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide igd-guide" aria-labelledby="igdGuideTitle">
  <h2 id="igdGuideTitle">IGCSE tutors in Delhi: syllabus codes, tiers and exam craft</h2>

  <p class="nx-guide__lede">
    An IGCSE request is only useful to a tutor once it carries four details: the awarding body, the syllabus code, the
    tier and the exam series. Two Delhi students both "doing IGCSE maths" can be sitting quite different papers with
    different grade ceilings. This guide explains how Cambridge IGCSE and Pearson Edexcel International GCSE are put
    together, why the tier decision deserves attention early, how the Cambridge science papers are weighted, which
    subjects Delhi families ask about, what to test in a demo, and how tutors reach homes around the city. It is written
    by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igd-delhi">IGCSE in Delhi</a> ·
    <a href="#igd-boards">Cambridge or Edexcel</a> ·
    <a href="#igd-stages">Year by year</a> ·
    <a href="#igd-tiers">Tiers</a> ·
    <a href="#igd-science">Science papers</a> ·
    <a href="#igd-subjects">Subjects</a> ·
    <a href="#igd-session">A good session</a> ·
    <a href="#igd-travel">Reaching your home</a> ·
    <a href="#igd-demo">The demo</a> ·
    <a href="#igd-fees">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igd-delhi">IGCSE among Delhi's boards</h2>
  <p>
    On our <a href="{{ url('/city/delhi') }}">Delhi tutors page</a> the picture is clear: CBSE is what most Delhi
    students sit, ICSE and ISC have a sizeable following, and a smaller group study for the IB or Cambridge IGCSE. The
    same page names what IGCSE rewards: exam craft, meaning command words, the right tier and past papers checked
    against the official mark scheme. Those three things are also what separate a real IGCSE tutor from a general
    subject tutor, and because IGCSE specialists are fewer, it pays to be precise when you ask.
  </p>
  <p>
    Students who move into IGCSE from CBSE, ICSE or a state board elsewhere usually find the content familiar and the
    questions unfamiliar. Calculator and non-calculator papers, "explain" and "suggest" questions, and marks tied to
    key words in the scheme are new habits. A tutor's early sessions should target those habits rather than reteach
    topics the student has already met.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igd-boards">Cambridge or Edexcel: what to find out from the school</h2>
  <p>
    The school chooses the awarding body, subject by subject, and some schools mix the two. Before the first lesson,
    ask the school office for the exact code and tier on your child's entry. The main differences a tutor works with:
  </p>
  <ul>
    <li><strong>Grades.</strong> Cambridge IGCSE uses A* to G in its main syllabuses (separate 9–1 versions exist under other codes); Edexcel International GCSE uses 9 to 1.</li>
    <li><strong>Maths tiers.</strong> Cambridge 0580 has Core and Extended; Edexcel 4MA1 has Foundation and Higher.</li>
    <li><strong>Calculators.</strong> Cambridge maths includes a non-calculator paper and a calculator paper, with a scientific calculator only; Edexcel maths allows a calculator in both papers.</li>
    <li><strong>Sciences.</strong> Cambridge 0625, 0620 and 0610 are tiered and include a practical paper; Edexcel 4PH1, 4CH1 and 4BI1 are untiered, with two written papers and practical skills tested inside them.</li>
    <li><strong>Exam series.</strong> Each board runs its own series, and Cambridge offers more than one a year; the school decides which one your child sits.</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge versus Edexcel comparison</a> goes
    paper by paper, and our <a href="{{ url('/igcse-tutor-gurgaon') }}">IGCSE tutors in Gurgaon</a> guide explains the
    courses in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igd-stages">The IGCSE years, stage by stage</h2>
  <p>
    Most schools teach IGCSE across Grades 9 and 10, and Cambridge designs each syllabus around roughly 130 guided
    learning hours. Each subject has its own code, papers and grade.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What an IGCSE tutor should be doing at each stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What is happening</th><th scope="col">The tutor's priority</th></tr>
    </thead>
    <tbody>
      <tr><td>The year before Grade 9</td><td>School-set work; a board change for some students</td><td>Algebra fluency, hand calculation and reading longer questions</td></tr>
      <tr><td>Grade 9</td><td>Content moves quickly and feels familiar</td><td>Stay a topic ahead or just behind the school; start topic-wise past-paper questions early</td></tr>
      <tr><td>Grade 10, to the mocks</td><td>Content finishes; the school usually fixes tiers from test results</td><td>Working clearly at the higher tier's level before the decision is made</td></tr>
      <tr><td>Grade 10, after the mocks</td><td>Full papers and revision</td><td>Timed papers marked with the official scheme; every lost mark logged by cause</td></tr>
      <tr><td>After IGCSE</td><td>IB, A Level, or CBSE or ISC in Class 11</td><td>Bridging: graphic-calculator habits for IB; hand calculation and full textbook working for CBSE or ISC</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The series your child sits changes how long Grade 10 really is, so ask the school early and plan backwards from it.
    If Class 11 will be at an IB school, our <a href="{{ url('/ib-tutor-delhi') }}">IB tutors in Delhi</a> page sets out
    what comes next.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igd-tiers">Why the tier decision deserves attention</h2>
  <p>
    The tier sets the ceiling. In Cambridge 0580, Core candidates take Papers 1 and 3 and can be graded C to G, while
    Extended candidates take Papers 2 and 4 and can reach A* to E. In Cambridge sciences, Extended adds Supplement
    content to the Core and opens grades A* to G; Core stays at C to G. In Edexcel maths, Foundation aims at grades 5 to
    1 and Higher at 9 to 4. A student on Core maths cannot earn an A however well they perform, so for a borderline
    student the most valuable tutoring happens before the school fixes the tier: Supplement topics, harder algebra and
    full higher-tier papers under time. Ask the school when the tier is set and what evidence it uses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igd-science">The Cambridge science papers and their weights</h2>
  <p>
    Cambridge IGCSE Physics, Chemistry and Biology share a structure of three papers. The multiple-choice paper has 40
    questions in 45 minutes and carries 30%. The theory paper, of short-answer and structured questions, is 80 marks in
    an hour and a quarter and carries 50%. The practical component is either a practical test or an
    alternative-to-practical written paper, 40 marks and 20%, and the school chooses which. The tier decides which
    multiple-choice and theory papers a student sits.
  </p>
  <p>
    Each paper needs its own practice: timed sets of 40 for the first, mark-scheme key words for the second, and for
    the third, planning methods, drawing results tables with units, plotting graphs and commenting on reliability.
    Edexcel sciences have no separate practical exam, so their longer written papers reward clear extended answers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igd-subjects">IGCSE subjects Delhi families ask about</h2>
  <ul>
    <li><strong>Maths (0580 or 4MA1):</strong> the <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutor</a> page; for home lessons, <a href="{{ url('/maths-home-tutor-delhi') }}">maths home tutors in Delhi</a>.</li>
    <li><strong>Additional Maths (Cambridge 0606):</strong> extra algebra, functions and calculus for students already secure in their main maths; we match maths tutors who teach it.</li>
    <li><strong>Physics, chemistry and biology:</strong> <a href="{{ url('/physics-home-tutor-delhi') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-delhi') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-delhi') }}">biology</a> home tutors in Delhi, matched to the syllabus code; <a href="{{ url('/science-home-tutor-delhi') }}">science tutors</a> for a student taking a combined course.</li>
    <li><strong>English:</strong> <a href="{{ url('/english-home-tutor-delhi') }}">English home tutors in Delhi</a>; tell us whether it is a first-language or second-language course, as they are different syllabuses.</li>
    <li><strong>Economics and business:</strong> matched on request with the syllabus code.</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">parent's guide to IB and IGCSE
    tutoring</a> covers command words and criteria across both systems.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igd-session">What a good IGCSE session includes</h2>
  <p>
    A strong session opens with the student's error log, not with the tutor's memory of last week. It then repairs one
    topic using examples written the way the real papers are written, command words included. The final stretch is
    two or three past-paper questions on that topic under time, marked together against the published scheme so the
    student sees where each mark sits. Homework is short and named, and the parent gets a line on what was done and
    what is next. A session that is mostly the tutor talking, or the same worksheet each week, is a reason to ask for a
    change.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igd-travel">How IGCSE tutors reach homes across Delhi</h2>
  <p>
    IGCSE students live in every part of the city, and a tutor for an exact code and tier may be a metro ride away.
    These examples show how families keep a weekly slot dependable:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Delhi colonies and how an IGCSE tutor gets there</caption>
    <thead>
      <tr><th scope="col">Colony</th><th scope="col">Zone</th><th scope="col">Travel note</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $igdA('vasant-kunj', 'Vasant Kunj') !!}</td><td><a href="{{ url('/city/delhi/zone/vasant-kunj-vasant-vihar-palam') }}">Vasant Kunj, Vasant Vihar and Palam</a></td><td>No station inside the colony: agree whether the tutor drives or takes an auto from Vasant Vihar, and give sector letter, pocket and flat</td></tr>
      <tr><td>{!! $igdA('defence-colony', 'Defence Colony') !!}</td><td><a href="{{ url('/city/delhi/zone/gk-defence-colony-lajpat-nagar') }}">GK, Defence Colony and Lajpat Nagar</a></td><td>Lajpat Nagar or Moolchand station; tell the block guard the floor and which bell to ring</td></tr>
      <tr><td>{!! $igdA('hauz-khas', 'Hauz Khas') !!}</td><td><a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket, Malviya Nagar and Hauz Khas</a></td><td>Yellow and Magenta Line interchange; avoid the Village approach roads on weekend evenings</td></tr>
      <tr><td>{!! $igdA('jangpura', 'Jangpura') !!}</td><td><a href="{{ url('/city/delhi/zone/lodhi-colony-jangpura-nizamuddin') }}">Lodhi Colony, Jangpura and Nizamuddin</a></td><td>Violet Line to Jangpura; Mathura Road is heavy at the evening peak, so a metro-riding tutor is steadier</td></tr>
      <tr><td>{!! $igdA('chittaranjan-park', 'Chittaranjan Park') !!}</td><td><a href="{{ url('/city/delhi/zone/kalkaji-cr-park-sarita-vihar') }}">Kalkaji, CR Park and Sarita Vihar</a></td><td>Kalkaji Mandir interchange, then an e-rickshaw; plan morning or online lessons in Durga Puja week</td></tr>
      <tr><td>{!! $igdA('dwarka-sector-22', 'Dwarka Sector 22') !!}</td><td><a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a></td><td>Sector 21 station (Blue Line and Airport Express), then a walk or e-rickshaw; share the tutor's name with the society gate</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For a Cambridge science on the practical route, Additional Maths, or a Grade 10 student close to the exam, the
    right specialist may live across the city. A hybrid plan keeps them within reach: a home lesson at the weekend and
    an online one mid-week, with the tutor seeing written working live. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online tutor</a> article compares the two, and
    the <a href="{{ url('/blog/south-delhi-tuition-guide') }}">South Delhi</a> and
    <a href="{{ url('/blog/dwarka-and-west-delhi-tuition-guide') }}">Dwarka and West Delhi</a> guides cover local timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igd-demo">An IGCSE demo checklist</h2>
  <ol>
    <li><strong>Name the code and tier.</strong> Say "0610 Extended" or "4MA1 Higher" and see if the tutor describes the papers without looking them up.</li>
    <li><strong>Mark a past-paper answer live.</strong> Ask them to mark your child's attempt with the published scheme and explain each lost mark.</li>
    <li><strong>Calculator discipline.</strong> For Cambridge maths, check that they drill the non-calculator paper by hand.</li>
    <li><strong>The practical paper.</strong> For Cambridge sciences, ask how they would prepare for a practical test versus the alternative paper.</li>
    <li><strong>Command words.</strong> Ask what "describe", "explain" and "suggest" each require.</li>
    <li><strong>A plan to the series.</strong> Expect an outline of the months to your child's exam series.</li>
  </ol>
  <p>
    You get two or three matched tutors and see each fee before the demo; switching later is free. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igd-fees">IGCSE tutor fees in Delhi and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    The subject, tier, how close the exam is and the tutor's travel at your slot shape the fee. See the
    <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi fees guide</a> and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  <p>
    Send the board, code and tier (for example "Cambridge 0620 Extended"), the grade, your colony with its block or
    sector, the nearest station and your free slots. We shortlist two or three tutors and the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>, or see
    our Delhi <a href="{{ url('/cbse-home-tutor-delhi') }}">CBSE</a> and <a href="{{ url('/icse-home-tutor-delhi') }}">ICSE</a>
    pages if a move after Grade 10 is likely. Tutors can find open requests on
    <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
