{{--
  Patna page for JEE home tutors. The exam as a whole is on the national hub
  (/jee-home-tutor); this page is about JEE tuition in a Patna week: coaching
  batches and their changeover hours, the five zones, BSEB / CBSE / CISCE
  students, Hindi and English medium, and Class 11, Class 12 and repeat-year plans.

  Exam facts only as stated on the national page, which cites (fetched 1 Oct 2026):
  - NTA, JEE (Main) 2026 Information Bulletin (jeemain.nta.nic.in): Paper 1 CBT,
    3 hours, maths/physics/chemistry, 20 MCQ + 5 numerical each, 75 questions,
    300 marks, +4/-1 in both sections; two sessions (January and April 2026);
    13 languages; no age limit; Class XII passed in 2024 or 2025 or appearing in
    2026; Advanced eligibility by rank among Paper 1 candidates.
  - JEE (Advanced) 2026 Information Brochure (jeeadv.ac.in): two compulsory
    three-hour papers; English and Hindi; at most two attempts in consecutive years.
  Bihar School Examination Board described generally only, as on the Patna city
  hub. Local detail only from database/seo-content/areas/patna-research.json,
  patna-zone-guides.json, zones/patna.json and /city/patna (coaching frontage on
  Boring Road and coaching changeover traffic on Bhootnath Road are from those
  files). No schools, colleges, coaching institutes or people named. Area links
  render only for active Patna areas.
--}}
@php
  $pjeSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pjeA = function (string $slug, string $label) use ($pjeSlugs) {
      return in_array($slug, $pjeSlugs, true)
          ? '<a href="' . e(url('/city/patna/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="pjeGuideTitle">
  <h2 id="pjeGuideTitle">JEE home tutor in Patna: a tutor beside the coaching batch, on your side of the city</h2>

  <p class="nx-guide__lede">
    In Patna, JEE preparation and school run side by side from Class 9 or 10 for many students, and the coaching batch
    usually sets the shape of the day. Many families also face a bigger choice: send a sixteen-year-old to another city,
    or keep them at home with local coaching and a tutor. Staying home works when the tutor has a clear job and a slot
    that survives Patna's roads, heat and festival weeks. This page covers that job: when the sessions fit, which zone's
    tutors can reach you, which subject to keep at home, how a Bihar board or Hindi-medium student closes the gap to the
    NTA syllabus, and how plans differ for Class 11, Class 12 and a repeat year. The national
    <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> hub covers the exam in full.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pje-exams">The exams in short</a> ·
    <a href="#pje-job">The tutor's job</a> ·
    <a href="#pje-slots">Slots around the batch</a> ·
    <a href="#pje-zones">Six localities</a> ·
    <a href="#pje-mode">Home or online</a> ·
    <a href="#pje-boards">BSEB, CBSE, ICSE</a> ·
    <a href="#pje-stages">Stages</a> ·
    <a href="#pje-demo">Demo</a> ·
    <a href="#pje-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pje-exams">JEE Main and Advanced in short</h2>
  <p>
    JEE (Main) is run by the NTA. Under the 2026 bulletin its Paper 1 took three hours on computer and had 75 questions,
    25 each in mathematics, physics and chemistry, worth 300 marks. Every subject mixed 20 multiple-choice questions with
    5 numerical-answer ones, and a wrong answer in either kind lost a mark while a right one gained four. It was held in
    two sessions, and the better score was used. The strongest Paper 1 candidates, by rank, became eligible for JEE
    (Advanced), which the IITs set as two compulsory three-hour papers offered in English and Hindi. Rules change from year
    to year; take them only from jeemain.nta.nic.in and jeeadv.ac.in.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pje-job">What should a Patna home tutor actually do next to coaching?</h2>
  <p>
    A tutor who repeats the coaching lecture wastes the hour. In Patna the useful jobs are narrower:
  </p>
  <ul>
    <li><strong>The weekly clean-up.</strong> Every question from the coaching sheet that was skipped or half understood, and every wrong answer in the latest test, cleared before the batch moves on.</li>
    <li><strong>The weakest subject.</strong> Concentrated time on the one subject dragging the total down, rather than a little help in all three.</li>
    <li><strong>The board in view.</strong> Class 12 NCERT content sits under the board paper and the entrance syllabus, so one revision plan should serve both, with a switch to written answers before the board.</li>
    <li><strong>The test habit.</strong> Full papers under timing, reviewed question by question, so marks lost to guessing or slowness show up.</li>
  </ul>
  <p>
    For families deciding whether their child should stay in Patna, it helps to list who will supply each part of the
    preparation at home, and to be honest about the gaps:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Preparing for JEE from home in Patna: who covers what</caption>
    <thead>
      <tr><th scope="col">Need</th><th scope="col">Local coaching plus tutor</th><th scope="col">Tutor only</th></tr>
    </thead>
    <tbody>
      <tr><td>Chapter plan and pace</td><td>The batch</td><td>The tutor, written down from the NTA syllabus at the start</td></tr>
      <tr><td>Doubts and test errors</td><td>The tutor, weekly</td><td>The tutor</td></tr>
      <tr><td>Full timed papers</td><td>The batch's test series</td><td>Past NTA papers plus a separately arranged mock series</td></tr>
      <tr><td>Daily routine</td><td>Shared between batch and family</td><td>Mostly the family: fixed study hours, phones away</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pje-slots">Which slots survive a Patna coaching week?</h2>
  <p>
    Batches fill the afternoons for many students, and the roads near the coaching areas fill when batches change over.
    Fix the tutor slot around both.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Tutor slots that tend to work for Patna JEE students</caption>
    <thead>
      <tr><th scope="col">Slot</th><th scope="col">Use it for</th><th scope="col">Patna reason</th></tr>
    </thead>
    <tbody>
      <tr><td>Early morning, before school</td><td>A focused 60-minute maths or physics session at home</td><td>Cooler in the hot months; no batch changeover traffic on Bhootnath Road or Boring Road</td></tr>
      <tr><td>Late evening on batch days</td><td>A short online doubt session</td><td>The tutor does not cross the city after dark; doubts are fresh</td></tr>
      <tr><td>Weekend block</td><td>Full mock in the morning, review in the afternoon</td><td>Office traffic on Bailey Road is lighter; time for proper analysis</td></tr>
      <tr><td>Heavy monsoon days, Durga Puja, Diwali, Chhath</td><td>Online sessions, agreed in advance as the back-up</td><td>Heavy rain or festival crowds should not cost the week's session</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Our <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE coaching or a home tutor</a> guide
    was written for another city, but its reasoning about commute time and dividing the work holds in Patna.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pje-zones">Which tutors can reach your locality?</h2>
  <p>
    Patna runs a long way east to west, and a tutor from the far end rarely lasts a full year of evening visits. Start
    from your own stretch of the city.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Patna localities and how JEE tutors usually reach them</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Travel for the tutor</th><th scope="col">Tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $pjeA('boring-road', 'Boring Road') !!}</td><td>Two-wheeler or auto; homes are in the colonies off the main road</td><td>Give the colony and lane, and avoid the evening rush at the crossing</td></tr>
      <tr><td>{!! $pjeA('patliputra-colony', 'Patliputra Colony') !!}</td><td>From nearby colonies, or along the riverfront expressway from Digha</td><td>A tutor from the same side of Boring Road is the easiest to keep</td></tr>
      <tr><td>{!! $pjeA('saguna-more', 'Saguna More') !!}</td><td>Along Bailey Road; the Red Line is still under construction</td><td>Ask the township gate for a standing visitor pass</td></tr>
      <tr><td>{!! $pjeA('kankarbagh', 'Kankarbagh') !!}</td><td>The open Blue Line stations at Bhootnath and Malahi Pakri, then a short auto</td><td>Keep clear of the hours when coaching batches change over</td></tr>
      <tr><td>{!! $pjeA('bankipur', 'Bankipur') !!}</td><td>Patna Junction side; the riverfront expressway helps tutors from the north-west</td><td>Tell the building gate the tutor's name; online on big Gandhi Maidan event days</td></tr>
      <tr><td>{!! $pjeA('anisabad', 'Anisabad') !!}</td><td>By road; no metro yet</td><td>Choose a tutor from your side of the roundabout</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone guides go further: <a href="{{ url('/city/patna/zone/boring-road-patliputra') }}">Boring Road and Patliputra</a>,
    <a href="{{ url('/city/patna/zone/bailey-road-danapur') }}">Bailey Road and Danapur</a>,
    <a href="{{ url('/city/patna/zone/kankarbagh-rajendra-nagar') }}">Kankarbagh and Rajendra Nagar</a>,
    <a href="{{ url('/city/patna/zone/gandhi-maidan-ashok-rajpath-old-patna') }}">Gandhi Maidan, Ashok Rajpath and Old Patna</a>
    and <a href="{{ url('/city/patna/zone/anisabad-gardanibagh-phulwari') }}">Anisabad, Gardanibagh and Phulwari</a>. Every
    locality is on the <a href="{{ url('/city/patna') }}">Patna page</a>, and our
    <a href="{{ url('/blog/north-and-west-patna-tuition-guide') }}">north and west Patna</a> guide covers that side in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pje-mode">Home or online for each JEE subject?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A sensible split for Patna JEE students</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Format</th><th scope="col">Why</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics</td><td>At home</td><td>Choosing the principle and setting up the problem is where students stall; the tutor needs to watch</td></tr>
      <tr><td>Mathematics</td><td>Home, with online test reviews</td><td>Long calculations on paper; reviews of timed papers work well on a shared screen</td></tr>
      <tr><td>Chemistry</td><td>Online for inorganic and organic recall; home if physical numericals lag</td><td>Short, frequent checks suit online</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For Advanced-level problems, a specialist teaching online from elsewhere in India is often a better choice than the
    nearest available tutor. See our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> comparison.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pje-boards">From BSEB, CBSE or ICSE to the NTA syllabus</h2>
  <p>
    The NTA syllabus follows NCERT content. How large the gap is depends on the school course and the language the
    student reads most comfortably.
  </p>
  <ul>
    <li><strong>Bihar board intermediate.</strong> The Bihar School Examination Board sets its own Class 12 papers and textbooks. A tutor should work from the board's prescribed books and past papers for the school side, map them against the NTA units, and add the objective and numerical practice the board paper does not demand.</li>
    <li><strong>CBSE.</strong> NCERT is the school book, so the content match is closest. The gap is writing: after months of objective practice, board answers still need full steps.</li>
    <li><strong>ICSE and ISC.</strong> Wide syllabus and long answers. Map the chapter order against the NTA units early, so coaching and school do not run months apart.</li>
    <li><strong>Hindi, English or both.</strong> Many Patna students study partly in Hindi. Choose the paper language early, using the current bulletin's list, and ask for a tutor who teaches technical terms in both languages.</li>
  </ul>
  <p>
    Our Patna <a href="{{ url('/maths-home-tutor-patna') }}">maths</a>, <a href="{{ url('/physics-home-tutor-patna') }}">physics</a>
    and <a href="{{ url('/chemistry-home-tutor-patna') }}">chemistry</a> pages cover the board side subject by subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pje-stages">Class 11, Class 12 and a repeat year in Patna</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The tutor's focus at each stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Focus</th><th scope="col">Patna note</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>Mechanics, basic calculus, mole concept; an error log from the first month</td><td>The syllabus jumps here; a student who loses Class 11 physics or maths rarely wins it back in Class 12</td></tr>
      <tr><td>Class 12</td><td>New chapters, Class 11 revision, full papers before the January session</td><td>Bihar board and CBSE students both need written-answer practice before the board; schedule it, do not squeeze it</td></tr>
      <tr><td>Repeat year</td><td>Diagnose last year's papers, rebuild weak chapters, many timed papers</td><td>Daytime sessions avoid batch changeover hours and widen the choice of tutor</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Before committing to a repeat year, read the eligibility rules in the current bulletin and brochure; in 2026, Main had
    no age limit, and Advanced allowed two attempts in consecutive years. Subject detail: the
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> page and our topic plans for
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">maths</a>, <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">physics</a>
    and <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">chemistry</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pje-demo">How to judge the JEE demo</h2>
  <ol>
    <li>Did the tutor ask about school, coaching days and the last test before planning anything?</li>
    <li>Given three unsolved coaching questions, did they find where the student got stuck, and let the student finish?</li>
    <li>Could your child follow easily, whether the lesson ran in Hindi, English or both?</li>
    <li>Could they say how your board's paper is set this year, and how negative marking should change guessing?</li>
    <li>Can they reach you at the same hour every week, from where they live?</li>
  </ol>
  <p>
    If the answer is no, we arrange the next demo; switching is free. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pje-fees">JEE tutor fees in Patna and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fee, shown before the demo; entrance-level physics or maths is usually priced above school-level
    help. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-patna') }}">home tuition fees in Patna</a>.
  </p>
  <p>
    Send the class, board, target, subjects, batch timings and your locality with a landmark. You receive two or three
    matched tutors and book a <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; you can also browse <a href="{{ url('/tutors') }}">tutor profiles</a>.
    For medical entrance, see the <a href="{{ url('/neet-home-tutor-patna') }}">NEET home tutor in Patna</a> page. Teachers
    can find requests on <a href="{{ url('/tuition-jobs/patna') }}">Patna tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
