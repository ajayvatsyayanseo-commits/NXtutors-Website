{{--
  Board page "IGCSE tutor Chennai" (Cambridge IGCSE and Pearson Edexcel
  International GCSE). Author: Ajay Vatsyayan (role: IB, IGCSE and ISC maths).
  No anecdotes, years or results are claimed for him. No schools, societies
  or people are named.

  IGCSE facts are only those stated in igcse-tutor-gurgaon, which cites
  cambridgeinternational.org and qualifications.pearson.com syllabuses (read
  1 Oct 2026): 0580 Core (Papers 1 and 3, C-G) and Extended (Papers 2 and 4,
  A*-E), non-calculator paper, no graphical calculator, June/November plus
  March in India, about 130 guided learning hours; 0625/0620/0610 Core (C-G)
  or Extended (A*-G), MCQ 30%, theory 50%, practical or alternative 20%;
  0606; Edexcel 4MA1 Foundation (5-1) / Higher (9-4), January and June;
  4PH1/4CH1/4BI1 untiered, two written papers; 4PM1.
  The Chennai city hub names IB and IGCSE among the city's four broad kinds
  of board, so this page exists; chennai-zone-guides.json (OMR & ECR)
  suggests online tutors for IGCSE where no home tutor fits. Local detail
  only from database/seo-content/areas/chennai-research.json,
  chennai-zone-guides.json, zones/chennai.json and the Chennai city hub. Fee
  wording is the approved NXTutors sentence. FAQs render from
  faqs/igcse-tutor-chennai.php. Area links render only when that Chennai
  area page exists and is active.
--}}
@php
  $igchSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $igchA = function (string $slug, string $label) use ($igchSlugs) {
      return in_array($slug, $igchSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide igch-guide" aria-labelledby="igchGuideTitle">
  <h2 id="igchGuideTitle">IGCSE tutors in Chennai: a parent's walkthrough of codes, tiers and papers</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE is one of the four broad kinds of board the Chennai city hub describes, with the IB, the Tamil Nadu
    State Board, CBSE and CISCE making up the rest. The hub's advice is short and right: for IGCSE, success comes from
    command words, the correct tier and past papers marked against the official scheme. This walkthrough expands on
    each, from choosing between Cambridge and Edexcel to planning backwards from the exam series, and then covers
    subjects, travel across Chennai's zones and a checklist for the free demo. Ajay Vatsyayan, who teaches IB, IGCSE
    and ISC maths for NXTutors, is the author.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igch-city">IGCSE in Chennai</a> ·
    <a href="#igch-state">IGCSE and the State Board</a> ·
    <a href="#igch-codes">Codes</a> ·
    <a href="#igch-tiers">Tiers</a> ·
    <a href="#igch-sci">Sciences</a> ·
    <a href="#igch-plan">The two years</a> ·
    <a href="#igch-next">After IGCSE</a> ·
    <a href="#igch-subjects">Subjects</a> ·
    <a href="#igch-zones">Zones</a> ·
    <a href="#igch-demo">Demo checklist</a> ·
    <a href="#igch-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igch-city">IGCSE in Chennai: what we can and cannot say</h2>
  <p>
    We have no reliable count of IGCSE students in Chennai, so we offer none. Our OMR and ECR zone guide does make a
    practical point: where no home tutor along the corridor fits the board, an online tutor from elsewhere in India is
    worth considering for IGCSE and similar specialist papers. Elsewhere in the city, with suburban trains, the MRTS
    and two metro lines, a tutor for the common codes can usually reach a home near a station. Families whose school mixes
    Cambridge and Edexcel subjects should say so at the start, because the papers, tiers and grading then differ from
    one subject to the next.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igch-state">How IGCSE differs from the State Board, broadly</h2>
  <p>
    The State Board's Class 10 public examination is one board result from state textbooks, with the scheme in its
    official notices. IGCSE is a set of independent subjects, each with its own code, papers and grade, and Cambridge
    designs each around about 130 guided learning hours. Answers are judged against mark schemes that look for precise
    terms, and questions turn on command words. Students who join from the State Board or CBSE tend to know the
    content but lose marks on question style, calculator technique and the science practical papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igch-codes">Start with the codes</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Common Cambridge codes and their Edexcel counterparts</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Cambridge</th><th scope="col">Pearson Edexcel</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>0580 (Core or Extended)</td><td>4MA1 (Foundation or Higher)</td></tr>
      <tr><td>Further maths</td><td>0606 Additional Mathematics</td><td>4PM1 Further Pure Mathematics</td></tr>
      <tr><td>Physics</td><td>0625</td><td>4PH1</td></tr>
      <tr><td>Chemistry</td><td>0620</td><td>4CH1</td></tr>
      <tr><td>Biology</td><td>0610</td><td>4BI1</td></tr>
      <tr><td>Grading</td><td>A* to G on these codes</td><td>9 to 1</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The school office can confirm the codes on your child's entry. Note them down with the tier and the exam series
    before the first lesson, so the tutor plans from the right papers from day one. Our
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge vs Edexcel IGCSE comparison</a> goes
    through the papers side by side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igch-tiers">Then the tier</h2>
  <p>
    The tier sets a ceiling. On Cambridge 0580, Core means Papers 1 and 3 with grades C to G; Extended means Papers 2
    and 4 with grades A* to E. One Cambridge maths paper is sat without a calculator, and only a scientific calculator
    is allowed on the other. In the Cambridge sciences, Extended adds Supplement content and opens A* to G, while Core
    stays at C to G. On Edexcel 4MA1, Foundation targets 5 to 1 and Higher 9 to 4, with a calculator allowed on both
    papers. Schools usually settle tiers during Grade 10, from test results; a borderline student should be producing
    clear higher-tier work well before that decision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igch-sci">How the Cambridge science grade is built</h2>
  <p>
    In 0625, 0620 and 0610, every candidate sits three papers: 40 multiple-choice questions in 45 minutes for 30% of
    the grade, a theory paper of 80 marks in an hour and a quarter for 50%, and a 40-mark practical paper for 20%. The
    school decides whether that last paper is a hands-on practical test or the written alternative to practical. Each
    needs its own training: timed multiple-choice sets reviewed option by option, theory answers checked for mark-scheme
    key words, and practical skills such as controlling variables, tabulating results with units, drawing graphs and
    judging reliability. Edexcel's 4PH1, 4CH1 and 4BI1 differ: no tiers and two written papers, with practical skills
    tested inside them.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igch-plan">Planning the two IGCSE years</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>From Grade 9 to the exam series</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Tutor's plan</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9, first weeks</td><td>Command words, calculator rules, setting up an error log</td></tr>
      <tr><td>Through Grade 9</td><td>Past-paper questions by topic, one step ahead of or behind the school scheme</td></tr>
      <tr><td>Grade 10 to mocks</td><td>Finish content; work at the higher tier's level before tiers are fixed</td></tr>
      <tr><td>Mocks to the series</td><td>Whole papers timed and marked with the official scheme; revision targeted by cause</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Cambridge offers June and November series, and March in India; Edexcel Maths A sits in January and June. A March
    sitting compresses the final stretch, so plan backwards from the series on the entry.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igch-session">How a tutoring hour should run</h2>
  <p>
    A productive IGCSE lesson starts with the error log: two or three mistakes from last week, reworked properly. Then
    a single topic, taught with examples phrased like real exam questions. It ends with timed past-paper questions,
    marked together against the official scheme so the student hears which phrases and steps carried the marks.
    Homework stays small and targeted. Parents should get a one-line note on what was done and what is next; if that is
    never possible, ask why.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igch-join">Joining an IGCSE school mid-way</h2>
  <p>
    Children who switch into Grade 9 or even Grade 10 from the State Board or CBSE face a short, intense adjustment.
    The topics are mostly recognisable. What is new is the way questions are asked and marked: a "suggest" question
    wants a reasoned idea rather than a memorised line, a theory answer earns marks for particular words, and the
    Cambridge practical paper tests skills a textbook course may never have drilled. A tutor's first month should
    concentrate on exactly these, using past papers from the child's own codes, while filling any content gaps in
    parallel. Parents can help by getting the codes, tier and series from the school in the first week, so no time is
    spent preparing for the wrong papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igch-mode">Home, online or a mix</h2>
  <p>
    In Grade 9, and for any child who loses focus on a screen, a tutor at the table is worth seeking out first. Closer
    to the exam, when one paper or one subject needs a specialist, online lessons with the right person usually beat
    home lessons with a near miss. The OMR's limited rail makes the online route especially practical there; homes near
    an MRTS, suburban or metro station have more home-tutor options.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igch-next">After IGCSE</h2>
  <p>
    Students go on to the IB Diploma, A Level, or CBSE, ISC or the State Board's higher secondary course for Class 11.
    Diploma-bound students benefit from Extended maths and graphic-calculator practice; those moving to an Indian board
    need speed in hand calculation, radian trigonometry and fully written working. See
    <a href="{{ url('/ib-tutor-chennai') }}">IB tutors in Chennai</a> and the
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">CBSE, IB and IGCSE switching guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igch-subjects">Subjects and pages</h2>
  <ul>
    <li>Maths and Additional Maths: <a href="{{ url('/igcse-maths-tutor') }}">online IGCSE maths tutors</a> or <a href="{{ url('/maths-home-tutor-chennai') }}">Chennai maths tutors</a>.</li>
    <li>The sciences: <a href="{{ url('/physics-home-tutor-chennai') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-chennai') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-chennai') }}">biology</a> tutors in Chennai.</li>
    <li>English 0500 or 0510: <a href="{{ url('/english-home-tutor-chennai') }}">Chennai English tutors</a>.</li>
  </ul>
  <p>
    For the board in more depth, see our reference page <a href="{{ url('/igcse-tutor-gurgaon') }}">on how IGCSE is
    examined</a> and the <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE parent's
    guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igch-zones">Tutors across Chennai's zones</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How a visiting IGCSE tutor gets to you</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Route and advice</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/chennai/zone/adyar-besant-nagar-mylapore') }}">Adyar, Besant Nagar and Mylapore</a>, e.g. {!! $igchA('thiruvanmiyur', 'Thiruvanmiyur') !!}</td><td>MRTS to Thiruvanmiyur; name your nearest MRTS station in the request</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/t-nagar-nungambakkam-kodambakkam') }}">T Nagar, Nungambakkam and Kodambakkam</a></td><td>Suburban train or the Blue Line; walk from the station</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/velachery-guindy-tambaram') }}">Velachery, Guindy and Tambaram</a></td><td>MRTS now continues to St Thomas Mount; suburban trains along GST Road</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/omr-ecr') }}">OMR and ECR</a>, e.g. {!! $igchA('thoraipakkam', 'Thoraipakkam') !!} or {!! $igchA('navalur', 'Navalur') !!}</td><td>Road travel; register the tutor in the society app; online if no home tutor fits</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/anna-nagar-kilpauk-aminjikarai') }}">Anna Nagar, Kilpauk and Aminjikarai</a>, e.g. {!! $igchA('anna-nagar-west', 'Anna Nagar West') !!}</td><td>Green Line or the large bus terminus in Anna Nagar West</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/vadapalani-kk-nagar-porur') }}">Vadapalani, KK Nagar and Porur</a>, e.g. {!! $igchA('valasaravakkam', 'Valasaravakkam') !!}</td><td>Metro to Vadapalani then bus or auto on Arcot Road</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/mogappair-ambattur-avadi') }}">Mogappair, Ambattur and Avadi</a>, e.g. {!! $igchA('mogappair', 'Mogappair') !!}</td><td>Thirumangalam or Koyambedu on the Green Line, or bus</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/perambur-kolathur-north-chennai') }}">Perambur, Kolathur and North Chennai</a></td><td>Suburban line or Blue Line; share a landmark and door number</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The city hub notes that online lessons help most with IB, IGCSE and senior specialist papers; a weekend home lesson
    plus a weekday online one suits many IGCSE timetables, provided the tutor sees working live. All areas are on the
    <a href="{{ url('/city/chennai') }}">Chennai home tuition page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igch-demo">IGCSE demo checklist</h2>
  <ol>
    <li>State the code and tier; the tutor should outline the papers unprompted.</li>
    <li>Ask for a past-paper answer to be marked aloud against the scheme.</li>
    <li>For Cambridge maths, how will they build non-calculator fluency? For Edexcel, the long algebra?</li>
    <li>For Cambridge sciences, practical test or alternative paper, and how they prepare each.</li>
    <li>What do "describe", "explain" and "suggest" each demand?</li>
    <li>What is the plan, month by month, to your exam series?</li>
  </ol>
  <p>
    Your shortlist has two or three tutors with fees visible before the demo, and switching later is free. Tutors who
    join complete an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile appears.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igch-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The subject, tier, time
    left before the series and the tutor's route decide an IGCSE fee. See the
    <a href="{{ url('/blog/home-tuition-fees-chennai') }}">Chennai fees guide</a> and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  <p>
    Send the board, code, tier and series with the grade, your area and your hours, and book the
    <a href="{{ url('/demo-class') }}">free demo</a>, or browse <a href="{{ url('/tutors') }}">tutor profiles</a> first.
    Teachers who know these courses can see requests on <a href="{{ url('/tuition-jobs/chennai') }}">Chennai tuition
    jobs</a>.
  </p>
  </section>

  </div>
</article>
