{{--
  Dehradun page for JEE home tutors. The exam in full is on the national hub
  (/jee-home-tutor); this page is about running JEE preparation from a Dehradun
  home: the valley's four main roads, the five zones, UBSE / CBSE / CISCE
  students, Hindi and English, winter evenings and monsoon days, and Class 11,
  Class 12 and repeat-year plans. Page writer (capitals phase 2), 3 Oct 2026.

  Exam facts only as stated on the national page, which cites (fetched 1 Oct 2026):
  - NTA, JEE (Main) 2026 Information Bulletin (jeemain.nta.nic.in): Paper 1 CBT,
    3 hours, maths/physics/chemistry, 20 MCQ + 5 numerical each, 75 questions,
    300 marks, +4/-1 in both sections; two sessions (January and April 2026);
    13 languages; no age limit; Class XII passed in 2024 or 2025 or appearing in
    2026; Advanced eligibility by rank among Paper 1 candidates.
  - JEE (Advanced) 2026 Information Brochure (jeeadv.ac.in): two compulsory
    three-hour papers; English and Hindi; at most two attempts in consecutive years.
  Uttarakhand Board of School Education (UBSE): only what ubse.uk.gov.in
  publishes (Class 12 question-paper designs, see uttarakhand-board-tutor-dehradun);
  described generally here.
  Local detail only from database/seo-content/areas/dehradun-research.json
  (major roads, ISBT, railway station, Doiwala station on the Laksar-Dehradun
  line, Metro Neo only proposed, Balliwala Chowk bus stop, cantonment entry
  rules, winter and monsoon timing advice). No schools, colleges, coaching
  institutes, campuses, factories or people named. Area links render only for
  active Dehradun areas.
--}}
@php
  $djeSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $djeA = function (string $slug, string $label) use ($djeSlugs) {
      return in_array($slug, $djeSlugs, true)
          ? '<a href="' . e(url('/city/dehradun/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="djeGuideTitle">
  <h2 id="djeGuideTitle">JEE home tutor in Dehradun: steady weekly help without leaving the valley</h2>

  <p class="nx-guide__lede">
    A Dehradun family planning for JEE usually weighs three things at once: the school board paper in Class 12, a
    coaching batch or a self-study plan, and whether the child should stay at home at all. A home tutor makes staying
    at home workable when the role is precise and the slot holds through a winter term and a wet monsoon. This page
    explains how that role looks in practice: which jobs to hand a tutor, how timings fit the city's four main roads,
    which of our five zones can supply someone near you, how Uttarakhand board, CBSE and ICSE students close the gap
    to the NTA syllabus, and what changes between Class 11, Class 12 and a repeat year. For the exam as a whole, read
    our national <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> page.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dje-exam">JEE in brief</a> ·
    <a href="#dje-plans">Three Dehradun plans</a> ·
    <a href="#dje-season">Slots through the year</a> ·
    <a href="#dje-where">Localities</a> ·
    <a href="#dje-format">Home or online</a> ·
    <a href="#dje-board">Board to NTA syllabus</a> ·
    <a href="#dje-years">Class 11, 12, repeat</a> ·
    <a href="#dje-demo">The demo</a> ·
    <a href="#dje-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dje-exam">What the two JEE papers ask, briefly</h2>
  <p>
    The National Testing Agency conducts JEE (Main). The 2026 bulletin set Paper 1 as a three-hour computer test of 75
    questions, with mathematics, physics and chemistry carrying 25 each for a total of 300 marks. In every subject 20
    questions were multiple choice and 5 needed a numerical answer; a correct response earned four marks and a wrong
    one cost a mark in both types. There were two sessions, January and April, and the better result counted. Paper 1
    rank decided who could sit JEE (Advanced), which the 2026 brochure described as two compulsory papers of three hours
    each, available in English and Hindi. Details shift between years, so confirm them on jeemain.nta.nic.in and
    jeeadv.ac.in before you plan around them.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dje-plans">Three ways Dehradun students combine a tutor with JEE work</h2>
  <p>
    Families rarely arrive with the same starting point. Before asking for a tutor, decide which of these three
    describes your child, because the tutor's job and the number of sessions follow from it.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>JEE plans from a Dehradun home, and what the tutor owns in each</caption>
    <thead>
      <tr><th scope="col">Plan</th><th scope="col">What the tutor owns</th><th scope="col">Typical rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>Coaching batch plus tutor</td><td>Doubts left over from the batch, the mistakes in each class test, and the one subject pulling the total down</td><td>Two sessions a week, one of them short and online</td></tr>
      <tr><td>Self-study plus tutor</td><td>The chapter calendar written from the NTA syllabus, weekly targets, and a source of full timed papers</td><td>Three sessions a week across the subjects, plus a weekend paper</td></tr>
      <tr><td>Repeat year at home</td><td>A diagnosis of last year's attempts, rebuilding weak chapters, and many papers under exam conditions</td><td>Daytime sessions on most weekdays</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Whichever plan you pick, ask the tutor to keep a written error log from the first week: every wrong answer, the
    chapter, and the reason (concept, calculation, misreading, or time). After a month the log tells you more about
    progress than any single test score. Our guide on
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching or a home tutor for JEE</a>
    was written for another city, but its argument about splitting the work carries over to Dehradun directly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dje-season">Which slots hold through a Dehradun year?</h2>
  <p>
    Dehradun's main traffic runs along Rajpur Road, Chakrata Road, Saharanpur Road and Haridwar Road, and the busy
    junctions on each fill at office hours. Add a cold winter, when evenings turn dark early, and heavy monsoon rain,
    and a slot chosen in April may not survive until January. Plan for the whole year at the start.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Session timing for Dehradun JEE students, season by season</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Slot that tends to hold</th><th scope="col">Why</th></tr>
    </thead>
    <tbody>
      <tr><td>Ordinary school weeks</td><td>A fixed early-evening hour on two set days</td><td>Clears the office-hour peak at Ballupur Chowk, Balliwala Chowk and the roads near the ISBT</td></tr>
      <tr><td>Winter term</td><td>An earlier start, or the second weekly session moved online</td><td>Cold, dark evenings make late travel tiresome for tutor and student alike</td></tr>
      <tr><td>Monsoon weeks</td><td>The usual time, online on heavy-rain days, agreed in advance</td><td>A washed-out evening should not cost the week's physics</td></tr>
      <tr><td>Weekends</td><td>A full paper in the morning, the review the same afternoon</td><td>Roads are calmer and there is time to go through every question</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dje-where">Who can reach your part of Dehradun?</h2>
  <p>
    A tutor who lives on your side of the city is the one who still turns up in February. We start the shortlist from
    your own locality, then widen to its zone, then to the rest of the city, and then to online tutors.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Dehradun localities and the practical side of a weekly JEE visit</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Getting there</th><th scope="col">Worth knowing</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $djeA('ballupur', 'Ballupur') !!}</td><td>Two-wheeler, car or auto to Ballupur Chowk; the Metro Neo stop here is only proposed</td><td>Give the building name and floor for a flat, or a lane landmark for a house</td></tr>
      <tr><td>{!! $djeA('kanwali', 'Kanwali') !!}</td><td>Balliwala Chowk is the nearest main bus stop; tutors from GMS Road or Patel Nagar avoid the centre</td><td>In a gated township, ask for a regular pass once the demo goes well</td></tr>
      <tr><td>{!! $djeA('prem-nagar', 'Prem Nagar') !!}</td><td>Chakrata Road, which is heavy inbound at office hours</td><td>A tutor living in Prem Nagar or along Chakrata Road is the realistic choice; defence areas have their own visitor rules</td></tr>
      <tr><td>{!! $djeA('patel-nagar', 'Patel Nagar') !!}</td><td>Two-wheeler or auto; roads near the industrial area are busy at shift change</td><td>Builder floors: share the floor number so the tutor rings the right bell</td></tr>
      <tr><td>{!! $djeA('turner-road', 'Turner Road') !!}</td><td>Near the ISBT; a new bypass is under construction, so routes may shift</td><td>Most homes are independent houses with arrival at the door</td></tr>
      <tr><td>{!! $djeA('doiwala', 'Doiwala') !!}</td><td>On the highway towards Haridwar, with its own station on the Laksar-Dehradun line</td><td>A tutor from Doiwala itself for regular visits, with a Dehradun specialist online for the hardest subject</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Each zone has its own guide: <a href="{{ url('/city/dehradun/zone/rajpur-road-dalanwala') }}">Rajpur Road and
    Dalanwala</a>, <a href="{{ url('/city/dehradun/zone/sahastradhara-raipur') }}">Sahastradhara and Raipur</a>,
    <a href="{{ url('/city/dehradun/zone/haridwar-road') }}">Haridwar Road</a>,
    <a href="{{ url('/city/dehradun/zone/vasant-vihar-chakrata-road') }}">Vasant Vihar and Chakrata Road</a> and
    <a href="{{ url('/city/dehradun/zone/saharanpur-road-clement-town') }}">Saharanpur Road and Clement Town</a>. All
    localities are listed on the <a href="{{ url('/city/dehradun') }}">Dehradun home tutors page</a>, and the
    <a href="{{ url('/blog/dehradun-home-tuition-guide') }}">Dehradun home tuition guide</a> walks through every zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dje-format">Home or online, subject by subject</h2>
  <ul>
    <li><strong>Physics at the table.</strong> Most JEE physics errors happen before any calculation, when the student picks the wrong principle or draws the wrong diagram. A tutor sitting beside the notebook sees that moment.</li>
    <li><strong>Mathematics at home, reviews online.</strong> Long working belongs on paper in front of the tutor; going through a timed paper afterwards works well on a shared screen.</li>
    <li><strong>Chemistry largely online.</strong> Inorganic and organic recall suits short, frequent checks from a distance. Move physical chemistry numericals home if they keep going wrong.</li>
  </ul>
  <p>
    Advanced-level problem solving is a narrow skill. If no one near you has it, an online specialist from elsewhere in
    India is usually the stronger choice than the closest available name. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> comparison sets out the trade-offs,
    and the <a href="{{ url('/online-tutor-dehradun') }}">online tutors for Dehradun</a> page explains the set-up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dje-board">Uttarakhand board, CBSE or ICSE: bridging to the NTA syllabus</h2>
  <p>
    The NTA syllabus is built on NCERT content. How much bridging work a student needs depends on the school course
    and on the language they read most easily.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>School course and the extra work JEE needs</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Where it already helps</th><th scope="col">What the tutor adds</th></tr>
    </thead>
    <tbody>
      <tr><td>Uttarakhand board (UBSE)</td><td>The board's own syllabus files list NCERT books; Class 12 science papers mix one-mark objective items with written answers</td><td>Numerical and multi-concept practice well beyond the board paper, and objective speed under negative marking</td></tr>
      <tr><td>CBSE</td><td>NCERT is the school text, so the content match is closest</td><td>Problem depth, and a switch back to full written steps before the board exam</td></tr>
      <tr><td>ICSE and ISC</td><td>Long written answers build careful working</td><td>A chapter map against the NTA units so school and entrance study stay in step</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Language matters too. Many Dehradun students think in Hindi and write school answers in English, or the reverse.
    Pick the paper language early from the current bulletin's list, practise in it from Class 11, and ask for a tutor
    comfortable with technical terms in both. Board detail is on our
    <a href="{{ url('/uttarakhand-board-tutor-dehradun') }}">Uttarakhand board</a>,
    <a href="{{ url('/cbse-home-tutor-dehradun') }}">CBSE</a> and <a href="{{ url('/icse-home-tutor-dehradun') }}">ICSE</a>
    pages for Dehradun, and subject detail on the Dehradun <a href="{{ url('/maths-home-tutor-dehradun') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-dehradun') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-dehradun') }}">chemistry</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dje-years">Class 11, Class 12 and a repeat year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where the tutor's hours go at each stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Priority</th><th scope="col">Common trap</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>Mechanics, calculus basics and mole concept, with the error log started in the first month</td><td>Treating Class 11 as a warm-up year; most of the hardest JEE physics sits here</td></tr>
      <tr><td>Class 12</td><td>New chapters, steady Class 11 revision, full papers before the January session</td><td>Leaving board-style written practice until the last month</td></tr>
      <tr><td>Repeat year</td><td>Last year's papers analysed question by question, then weak chapters rebuilt</td><td>Repeating the same routine and expecting a different result</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Before committing to a repeat year, read the eligibility rules in the current documents; under the 2026 versions,
    JEE (Main) had no age limit and JEE (Advanced) allowed at most two attempts in consecutive years. For subject
    planning, see the <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> page and our topic-wise plans
    for <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">physics</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">chemistry</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dje-demo">What to test in the free JEE demo</h2>
  <ol>
    <li>Bring three questions your child could not finish. Does the tutor find the exact step where the student stopped, and then let the student complete the solution?</li>
    <li>Does the tutor ask about the board, the batch timings and the last test before suggesting a plan?</li>
    <li>Can they explain how negative marking should change the way your child attempts objective questions?</li>
    <li>Was the explanation easy to follow in the language your child prefers?</li>
    <li>Can they commit to the same weekly slot from where they live, including in winter?</li>
  </ol>
  <p>
    If any answer is weak, we arrange another demo, and switching tutor later is free. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dje-fees">JEE tutor fees in Dehradun, and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee, and you see it before the demo. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-dehradun') }}">home tuition fees in Dehradun</a>.
  </p>
  <p>
    Send the class, board, subjects, batch timings if any, and your locality with a landmark. You get two or three
    matched tutors and book a <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and you can browse <a href="{{ url('/tutors') }}">tutor
    profiles</a> first. For medical entrance, read the <a href="{{ url('/neet-home-tutor-dehradun') }}">NEET home tutor
    in Dehradun</a> page. Teachers can find local requests on
    <a href="{{ url('/tuition-jobs/dehradun') }}">Dehradun tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
