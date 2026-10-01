{{--
  Board page for "IGCSE tutor Mumbai" (Cambridge IGCSE and Pearson Edexcel
  International GCSE) across Mumbai, Thane and Navi Mumbai. Author: Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results are
  claimed for him. No schools or societies are named.

  Syllabus facts are reworded from the Gurgaon board hub (igcse-tutor-gurgaon),
  which cites cambridgeinternational.org and qualifications.pearson.com
  syllabus PDFs (read 1 Oct 2026): about 130 guided learning hours per
  Cambridge subject; 0580 Core Papers 1 and 3 (grades C-G), Extended Papers 2
  and 4 (A*-E), one non-calculator and one calculator paper; 0625/0620/0610
  Core or Extended (Extended A*-G, Core C-G), multiple choice 40 questions
  45 min 30%, theory 80 marks 1 h 15 min 50%, practical test or alternative to
  practical 40 marks 20%; series June and November, March also in India;
  Edexcel 4MA1 Foundation (5-1) and Higher (9-4), calculator in both papers;
  4PH1/4CH1/4BI1 untiered, two written papers, no separate practical exam;
  Additional Maths 0606 and Further Pure 4PM1. No exam dates.
  Local detail only from the Mumbai city hub view (IB and Cambridge IGCSE card:
  command words, tier choice, past papers; online opens up tutors for IGCSE;
  international schools keep their own terms), zones/mumbai.json (South
  Mumbai: IB or IGCSE sciences often found online) and mumbai-zone-guides.json.
  No claim is made about where IGCSE families live. Area links render only for
  active Mumbai areas. Fee wording is the approved sentence.
  FAQs render from faqs/igcse-tutor-mumbai.php.
--}}
@php
  $igmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $igmA = function (string $slug, string $label) use ($igmSlugs) {
      return in_array($slug, $igmSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="igmGuideTitle">
  <h2 id="igmGuideTitle">IGCSE tutors in Mumbai: syllabus code first, then tier, then the train</h2>

  <p class="nx-guide__lede">
    When a Mumbai parent asks us for "an IGCSE maths tutor", the next three questions are always the same: Cambridge or
    Edexcel, which syllabus code, and which tier. Two students both "doing IGCSE physics" may sit entirely different
    papers, and a tutor who prepares for the wrong one wastes months. This page explains how IGCSE courses are built,
    how they compare with the SSC and CBSE route in Classes 9 and 10, what the tier decision means, and how home or
    online tutoring works across Mumbai, Thane and Navi Mumbai. It is written by Ajay Vatsyayan, who teaches IB, IGCSE
    and ISC maths on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igm-boards">Cambridge or Edexcel</a> ·
    <a href="#igm-vs">IGCSE and SSC</a> ·
    <a href="#igm-tiers">The tier decision</a> ·
    <a href="#igm-science">Science papers</a> ·
    <a href="#igm-plan">Grade 9 and 10</a> ·
    <a href="#igm-subjects">Subjects</a> ·
    <a href="#igm-zones">Zones and travel</a> ·
    <a href="#igm-demo">The demo</a> ·
    <a href="#igm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igm-boards">Two awarding bodies, many codes</h2>
  <p>
    Schools in India that teach IGCSE usually do so across Grades 9 and 10, entering students with either Cambridge or
    Pearson Edexcel, and sometimes with both for different subjects. Each subject is a separate qualification with its
    own code and grade; Cambridge plans each syllabus around roughly 130 guided learning hours.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The differences a tutor must know before the first session</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">Cambridge IGCSE</th><th scope="col">Edexcel International GCSE</th></tr>
    </thead>
    <tbody>
      <tr><td>Grades</td><td>Letters, A* down to G, on the common codes</td><td>Numbers, 9 down to 1</td></tr>
      <tr><td>Maths entry</td><td>0580 at Core or Extended</td><td>4MA1 at Foundation or Higher</td></tr>
      <tr><td>Calculator</td><td>One paper without, one with</td><td>Permitted on both papers</td></tr>
      <tr><td>Sciences</td><td>0625, 0620, 0610, each Core or Extended, with a practical paper</td><td>4PH1, 4CH1, 4BI1, no tiers, two written papers</td></tr>
      <tr><td>Series</td><td>June and November, plus a March series in India</td><td>Check per subject with the school</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The school office can tell you the exact codes on your child's entry. Our
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge vs Edexcel comparison</a> walks through
    the papers side by side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-vs">How IGCSE differs from SSC or CBSE in Classes 9 and 10</h2>
  <p>
    In Mumbai one building can hold students of four boards, so families compare notes and comparisons are natural. In general terms, a State Board or CBSE student prepares for one board result built on a
    prescribed set of textbooks, while an IGCSE student collects separate subject grades, each decided by papers
    written to a published syllabus and mark scheme rather than a single textbook. IGCSE questions lean on command
    words such as "describe", "explain" and "suggest", each wanting a different kind of answer, and the science
    papers test practical skills directly. Content overlaps a great deal; technique does not. A tutor who mainly
    teaches SSC or CBSE may be excellent on the subject and still need to show you that they know the IGCSE papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-tiers">The tier decision, and why to plan for it early</h2>
  <p>
    In Cambridge 0580 maths, a Core candidate sits Papers 1 and 3, with C as the highest grade available; an Extended
    candidate sits Papers 2 and 4, with grades from A* to E. In the Cambridge sciences, Extended adds Supplement
    content and opens grades A* to G, while Core tops out at C. Edexcel maths uses Foundation, aimed at grades 5 to 1,
    and Higher, aimed at 9 to 4.
  </p>
  <p>
    Schools usually fix the tier during Grade 10 using test evidence. For a student near the line, the most valuable
    thing a tutor can do in Grade 9 is make sure the evidence clearly supports the higher tier before that decision
    is taken. Ask the school when the decision is made and what it rests on. For a student already secure on
    Extended or Higher and aiming at the top grade, the work changes: multi-step problems, precise answers to each
    command word, and a log of every mark dropped in past papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-science">Cambridge science: three papers, three kinds of practice</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics, Chemistry and Biology</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">What it is</th><th scope="col">Share</th><th scope="col">Practice that works</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice</td><td>40 questions, 45 minutes</td><td>30%</td><td>Timed sets, then a reason for every wrong option</td></tr>
      <tr><td>Theory</td><td>80 marks, 1 hour 15 minutes</td><td>50%</td><td>Past questions marked against the key words in the mark scheme</td></tr>
      <tr><td>Practical test or alternative to practical</td><td>40 marks; the school decides which</td><td>20%</td><td>Planning, tables with units, graphs, evaluating results</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Edexcel sciences have no separate practical exam; practical understanding is tested inside two written papers,
    so extended written answers matter more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-plan">A two-year plan for Grade 9 and Grade 10</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where an IGCSE tutor should spend the time</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Focus</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9, first term</td><td>Calculator and non-calculator habits, command words, topic-wise past questions</td></tr>
      <tr><td>Grade 9, second term</td><td>Supplement or Higher-tier topics for students near the tier line</td></tr>
      <tr><td>Grade 10, to the mocks</td><td>Finish content subject by subject; practical-paper skills in the sciences</td></tr>
      <tr><td>Grade 10, after the mocks</td><td>Full timed papers, marked with the official scheme, every lost mark logged</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A March entry, available in India, shortens the last stretch compared with June, so ask which series your child
    is entered for and count backwards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-session">Inside a useful IGCSE session</h2>
  <p>
    A useful session usually follows a pattern. It starts from evidence: the student's error log or last week's marked
    questions, not the tutor's memory of what went wrong. The teaching that follows is short and specific, one topic
    at a time, with examples written in the style of the real papers so the command words become familiar. Then the
    student works two or three past-paper questions against the clock, and the tutor marks them with the official
    scheme open on the table, pointing to exactly which line earned or lost each mark. Homework is small and precise.
    For a science student on the Cambridge route, one session in four should go on practical skills: choosing
    variables, drawing a results table with units, plotting a graph and commenting on how reliable the results are.
    If sessions drift into the tutor talking for an hour, ask for the pattern above or ask us for the next tutor on
    your shortlist.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-year">Fitting IGCSE around a Mumbai year</h2>
  <p>
    International schools keep their own terms, so build the plan from your school's calendar and the exam series,
    not from the board-exam season your neighbours talk about. Two local factors are worth planning for. The monsoon
    makes weekday travel unpredictable for several months, which is a good reason to agree an online fallback in the
    first week. And long commutes eat into evenings, so short, regular sessions usually beat one long weekend
    marathon, especially in Grade 10, when a steady weekly rhythm of timed papers matters more than extra hours.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-subjects">Subjects, and our Mumbai pages</h2>
  <ul>
    <li><strong>Maths 0580 or 4MA1:</strong> <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutors</a> or <a href="{{ url('/maths-home-tutor-mumbai') }}">maths home tutors in Mumbai</a>. Additional Maths (0606) and Further Pure (4PM1) are matched on request.</li>
    <li><strong>Physics and chemistry:</strong> <a href="{{ url('/physics-home-tutor-mumbai') }}">physics</a> and <a href="{{ url('/chemistry-home-tutor-mumbai') }}">chemistry</a> home tutors in Mumbai; give the code.</li>
    <li><strong>Biology:</strong> <a href="{{ url('/biology-home-tutor-mumbai') }}">biology home tutors in Mumbai</a>.</li>
    <li><strong>English:</strong> first language and second language are different courses; see <a href="{{ url('/english-home-tutor-mumbai') }}">English home tutors in Mumbai</a>.</li>
  </ul>
  <p>
    Thinking about what follows Grade 10? Our <a href="{{ url('/ib-tutor-mumbai') }}">IB tutors in Mumbai</a> page
    explains the Diploma, and students moving to CBSE, ISC or a junior college should expect more hand calculation and
    textbook-style working; the <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">board switching
    guide</a> covers both directions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-zones">Getting an IGCSE tutor to your door</h2>
  <p>
    Specialists for a particular code are spread thinly, so start with the journey. Our zone guides suggest:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/mumbai/zone/south-mumbai') }}">South Mumbai</a> and <a href="{{ url('/city/mumbai/zone/worli-dadar-central-mumbai') }}">Worli and Dadar</a>:</strong> Line 3 now runs underground to Cuffe Parade, with stops in {!! $igmA('worli', 'Worli') !!}, so tutors from the airport side can come straight down. Many South Mumbai families find science help online.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/bandra-khar-santacruz') }}">Bandra, Khar and Santacruz</a> and <a href="{{ url('/city/mumbai/zone/vile-parle-juhu') }}">Vile Parle and Juhu</a>:</strong> stations on both the Western and Harbour lines; in {!! $igmA('khar', 'Khar') !!}, say which side of the tracks you are on.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/andheri-jogeshwari') }}">Andheri and Jogeshwari</a>:</strong> {!! $igmA('lokhandwala', 'Lokhandwala') !!} towers have gate desks and tight parking; a tutor on Line 2A avoids both.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/goregaon-malad') }}">Goregaon and Malad</a> and <a href="{{ url('/city/mumbai/zone/kandivali-borivali-dahisar') }}">Kandivali, Borivali and Dahisar</a>:</strong> Line 2A along Link Road serves {!! $igmA('kandivali-west', 'Kandivali West') !!}; Line 7 serves the highway side.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/chembur-ghatkopar-powai') }}">Chembur, Ghatkopar and Powai</a> and Bhandup and Mulund:</strong> complexes need gate registration; Ghatkopar's metro link brings in tutors from Andheri.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/thane') }}">Thane</a> and <a href="{{ url('/city/mumbai/zone/navi-mumbai') }}">Navi Mumbai</a>:</strong> on {!! $igmA('ghodbunder-road', 'Ghodbunder Road') !!}, weekend or mid-afternoon slots are steadier; in {!! $igmA('cbd-belapur', 'CBD Belapur') !!}, the Harbour line and the Navi Mumbai metro decide who can come.</li>
  </ul>
  <p>
    When the right specialist lives two lines away, keep one home session and add online sessions midweek with the
    same tutor. For online maths and science, the tutor must see written working live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-demo">Five checks for the free demo</h2>
  <ol>
    <li><strong>Name the code and tier</strong> and see whether the tutor describes the papers without looking them up.</li>
    <li><strong>Mark a past-paper answer together</strong> against the published scheme.</li>
    <li><strong>Calculator habits:</strong> by hand for Cambridge's non-calculator paper; algebra that a calculator cannot shortcut for Edexcel.</li>
    <li><strong>Practical skills:</strong> ask how they prepare a practical test compared with the alternative paper.</li>
    <li><strong>A route to the exam series</strong> your child is entered for.</li>
  </ol>
  <p>
    You get two or three matched tutors, see each fee first, and can switch later for free. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The subject, tier, time to
    the exam and the journey move the figure; see the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">home tuition fees in Mumbai</a>.
  </p>
  <p>
    Send the awarding body, code, tier, grade, your station or node and slots; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Our <a href="{{ url('/igcse-tutor-gurgaon') }}">IGCSE guide for
    Gurgaon families</a> explains the qualification in more depth. Browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>, all areas on the <a href="{{ url('/city/mumbai') }}">Mumbai tutors page</a>, or
    <a href="{{ url('/tuition-jobs/mumbai') }}">tuition jobs in Mumbai</a>.
  </p>
  </section>

  </div>
</article>
