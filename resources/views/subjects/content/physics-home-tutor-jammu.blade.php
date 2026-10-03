{{--
  Long-form guide for the "physics home tutor Jammu" page (Classes 11 and 12,
  JEE and NEET alongside coaching, ISC/IB/IGCSE, JKBOSE in general terms).
  Byline in config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/jammu-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements in database/seo-content/blog:
  cbse-class-12-physics-strategies (70 + 30, 33 questions in sections A to E,
  blocks 33/18/12/7, recall share, practical scheme and record requirements,
  no calculators, transistors and logic gates out),
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern, JEE
  Advanced 2026 eligibility), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern) and -ib-physics-slhl-iaee (guide first assessed May
  2025, teaching hours, five themes, papers 80%, investigation 20%).
  JKBOSE: https://jkbose.jk.gov.in/ (fetched 3 Oct 2026) lists Higher
  Secondary Part I (Class 11) and the Higher Secondary examination (Class 12)
  and publishes a syllabus, model test papers and a question bank; no paper
  pattern is given here.
  No coaching institute, school, college, society or people's names, no
  distances or travel times, only the allowed fee sentence. Flyovers only as
  "under construction" / "being completed", no dates.

  Area links render only when that Jammu area page exists and is active.
--}}
@php
  $jmpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jmpA = function (string $slug, string $label) use ($jmpSlugs) {
      return in_array($slug, $jmpSlugs, true)
          ? '<a href="' . e(url('/city/jammu/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide jmp-guide" aria-labelledby="jmpGuideTitle">
  <h2 id="jmpGuideTitle">Physics home tutor in Jammu: someone who reads your child's working, line by line, once a week</h2>

  <p class="nx-guide__lede">
    Senior physics asks a lot of a Jammu student in Class 11 or 12. School teaches one chapter, an entrance batch may
    be on another, and the board paper still expects derivations written in full with neat diagrams. What gets
    squeezed out is the slow part: going back over a solution and finding the exact step that fails. That is where a
    home physics tutor earns their place. NXTutors puts forward two or three tutors who know your child's target
    exam and can reach your colony at a workable hour. Fees are on the shortlist before you meet anyone, and the
    first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jmp-target">Pick the target</a> ·
    <a href="#jmp-week">A sample week</a> ·
    <a href="#jmp-errors">The error log</a> ·
    <a href="#jmp-board">CBSE theory</a> ·
    <a href="#jmp-practical">Practical marks</a> ·
    <a href="#jmp-jkbose">JKBOSE physics</a> ·
    <a href="#jmp-intl">ISC, IB, IGCSE</a> ·
    <a href="#jmp-colonies">Six colonies</a> ·
    <a href="#jmp-fees">Fees</a> ·
    <a href="#jmp-request">Requesting tutors</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jmp-target">Which physics exam is the main target this year?</h2>
  <p>
    The chapters overlap from one exam to the next, but the marking does not. Decide the primary target at the first
    meeting, because the practice a tutor sets depends on it.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Physics in the exams Jammu's senior students prepare for, with how each is scored and what the tutor should stress</caption>
    <thead>
      <tr><th scope="col">Exam</th><th scope="col">How much physics</th><th scope="col">Scoring</th><th scope="col">Stress in tuition</th></tr>
    </thead>
    <tbody>
      <tr><td>JKBOSE Class 11 and 12</td><td>Set by the Jammu and Kashmir Board of School Education</td><td>As published on jkbose.jk.gov.in</td><td>The prescribed book and the board's model test papers</td></tr>
      <tr><td>CBSE Class 12 (042)</td><td>A 70-mark theory paper of 33 compulsory questions, plus 30 for practicals</td><td>Written answers, no calculator</td><td>Derivations, labelled diagrams, reading case-based items</td></tr>
      <tr><td>JEE Main (2026 pattern)</td><td>25 questions, one third of the paper; 5 need a numerical answer</td><td>Plus 4 for right, minus 1 for wrong</td><td>Multi-step problems against the clock, then a review of each miss</td></tr>
      <tr><td>JEE Advanced</td><td>Open in 2026 only to the leading 2,50,000 JEE Main candidates</td><td>Decided each year by the organising institute</td><td>Problems that join several ideas; past Advanced papers</td></tr>
      <tr><td>NEET (UG), 2026 format</td><td>45 of 180 questions, 180 of 720 marks, answered on paper</td><td>Plus 4 for right, minus 1 for wrong</td><td>NCERT-level precision and fewer guesses</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Entrance syllabi come from the conducting body, not from the school board, and may keep topics a board has
    dropped, so check the current bulletin on nta.ac.in before deleting any chapter. For priorities, see our
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics plan by topic</a> and the
    <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics chapters</a>, along with the
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> and
    <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmp-week">What does a useful week with a home physics tutor look like?</h2>
  <p>
    For a student who also attends an entrance batch, repeating the batch lecture wastes the hour. Two sessions a
    week can be divided like this instead:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A two-session physics week for a Jammu student combining school, an entrance batch and home tuition</caption>
    <thead>
      <tr><th scope="col">Session</th><th scope="col">First half</th><th scope="col">Second half</th></tr>
    </thead>
    <tbody>
      <tr><td>Early in the week</td><td>Unfinished problems from the batch sheet, worked slowly with the student holding the pen</td><td>One concept the student could not explain back in their own words</td></tr>
      <tr><td>Later in the week</td><td>A board-style derivation or long answer, written in full and marked</td><td>Review of the latest mock: each lost mark sorted into concept, slip or a question to skip</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Our articles on <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE coaching versus a
    home tutor</a> and on <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">the same choice
    for NEET</a> look at when a batch, a tutor or both make sense.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmp-errors">Why keep a physics error log, and what goes in it?</h2>
  <p>
    A single notebook shared by student and tutor is the simplest tool in senior physics. Every entry has four
    parts: the question exactly as set; the first attempt, left uncorrected; one line naming what went wrong; and a
    fresh solution written a few days later without looking. For each solution the tutor should demand a fixed
    order: a diagram with directions, the governing law stated in words, substitution with units on every line, and
    a final check that the sign and size of the answer are sensible.
  </p>
  <p>
    Bring this log, or two recent batch tests, to the free demo. A capable tutor can turn a few pages and point to
    the weak step before teaching anything new.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmp-board">How are the 70 theory marks spread in CBSE Class 12 physics?</h2>
  <p>
    The 2026-27 sample paper keeps last session's design, and the fourteen NCERT chapters are marked in four
    groups:
  </p>
  <ul>
    <li><strong>33 marks, electricity and magnetism.</strong> Electrostatics through to alternating current: close to half the paper.</li>
    <li><strong>18 marks, optics with electromagnetic waves.</strong> The largest single group after electricity, decided largely by ray diagrams.</li>
    <li><strong>12 marks, modern physics.</strong> Dual nature, atoms and nuclei, often in short numericals.</li>
    <li><strong>7 marks, semiconductor electronics.</strong> Transistors and logic gates are no longer in the syllabus, so older notes that include them are out of date.</li>
  </ul>
  <p>
    The 33 questions run from Section A, with sixteen one-mark items (twelve multiple-choice, four
    assertion–reason), through B with five two-mark questions, C with seven at three marks and D with two four-mark
    case studies, to E with three five-mark answers. Only about 38% of marks reward recall; constants are supplied
    and calculators are not allowed. Class 12 has a single main board exam, with 2027 dates still to come on
    cbse.gov.in. Recurring derivations are gathered in our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a>, and the
    <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics tutor</a> page sets out a full-year plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmp-practical">Can the 30 practical marks be prepared at home?</h2>
  <p>
    Largely, yes, even though the apparatus stays at school. CBSE divides the 30 as follows: two experiments worth
    7 each (14 in all, one from each section), 5 for the record, 3 for an activity, 3 for the investigatory project
    and 5 for the viva. The record must hold at least eight experiments, four per section, and at least six
    activities, three per section, together with the project report.
  </p>
  <p>
    At home a tutor can check each record entry for its aim, diagram and observation table, rehearse precautions and
    sources of error, and run a mock viva with questions such as why repeated readings are taken or what the slope of
    a graph stands for. Batch classes rarely touch this, which makes it some of the easiest marks to protect.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmp-jkbose">What about physics on the J&amp;K state board?</h2>
  <p>
    The Jammu and Kashmir Board of School Education examines Class 11 as Higher Secondary Part I and Class 12 in the
    Higher Secondary examination. Its website, jkbose.jk.gov.in, has the syllabus, model test papers and a question
    bank. We give no paper pattern here because the board sets and revises it. Ask for a tutor who teaches from the
    prescribed book and the board's papers, and who keeps the diagram-first habit going if JEE or NEET is also in the
    plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmp-intl">ISC, IB or IGCSE physics, and when should tuition start?</h2>
  <ul>
    <li><strong>IB Diploma.</strong> The current guide, first examined in May 2025, is organised into five lettered themes with no options and no Paper 3. Written papers make up 80% of the grade and an investigation designed and written by the student supplies the other 20%. Teaching time is 150 hours at SL and 240 at HL. See our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL guide</a>.</li>
    <li><strong>ISC.</strong> CISCE assesses practical work and a project alongside the theory paper and expects fuller reasoning than one-line answers. Confirm the tutor knows the syllabus for your child's exam year.</li>
    <li><strong>Cambridge IGCSE.</strong> Entered at Core or Extended. Students moving to an Indian board for Class 11 often need extra work on vectors and graphs.</li>
  </ul>
  <p>
    On timing, Class 11 is usually the cheaper place to start: mechanics rests on vectors and graphs that keep
    returning throughout Class 12. Read the <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics
    tutor</a> page and our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">guide to choosing a
    stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmp-colonies">Can a physics tutor reach these six Jammu colonies in the evening?</h2>
  <p>
    Senior students often get home late, so physics lessons drift into the evening. Whether that hour holds depends
    on the tutor's route across the city. Every colony's page is linked from our
    <a href="{{ url('/city/jammu') }}">Jammu page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Gandhi Nagar and Shastri Nagar</h3>
      <p>
        {!! $jmpA('gandhi-nagar', 'Gandhi Nagar') !!} is reached from the old city by the road through Jewel Chowk
        and from Bikram Chowk by the elevated road opened in 2017. A flyover from Satwari Chowk to Last Morh is under
        construction, so expect diversions on that stretch. {!! $jmpA('shastri-nagar', 'Shastri Nagar') !!} connects
        to the highway by a loop road through Nai Basti; a tutor already teaching in Gandhi Nagar can usually add it.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Trikuta Nagar and Channi Himmat</h3>
      <p>
        {!! $jmpA('trikuta-nagar', 'Trikuta Nagar') !!} has numbered sectors and links to the NH-44 bypass along the
        canal and past the marble market. {!! $jmpA('channi-himmat', 'Channi Himmat') !!} has a road from its first
        junction through Sectors 4 and 7 out to the bypass at Deeli, which helps a tutor coming in from the highway
        side late in the day.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Channi Rama and Sainik Colony</h3>
      <p>
        {!! $jmpA('channi-rama', 'Channi Rama') !!} is still seeing new construction, and its newer lanes are hard to
        find after dark, so send a map pin. {!! $jmpA('sainik-colony', 'Sainik Colony') !!} lies close to NH-44;
        Bari Brahmana and Jammu Tawi are the nearest stations, and a link road towards Purmandal Chowk via Chowadi is
        planned.
      </p>
    </div>
  </div>
  <p>
    When a batch runs late, switch that evening's lesson to an online hour with the same tutor rather than asking
    anyone to cross the city at night. The <a href="{{ url('/city/jammu/zone/rail-head-new-city') }}">Rail Head and
    New City</a> zone guide has more on the Gandhi Nagar side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmp-fees">What does a physics home tutor in Jammu charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors decide their own
    fees, which reflect the target (board, JEE Main, JEE Advanced or NEET), their experience with it, how late the
    journey to you is and the sessions booked each week. All fees are on the shortlist before the demo; the
    <a href="{{ url('/blog/home-tuition-fees-jammu') }}">Jammu tuition fees</a> article lists questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmp-request">How do you request physics tutors in Jammu?</h2>
  <p>
    Tell us the class, board and main goal, the days the batch meets if there is one, your colony and a landmark,
    and the evenings still free. Two or three physics tutors come back with fees, and you choose whom to meet for the
    free demo. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their
    profile goes live. A poor fit leads to a second demo, and switching later is free. If nobody suitable can come at
    your hour, an online or mixed plan is offered. NXTutors works from Sector 66, Gurugram, and teaches online across
    India; our national <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page covers other cities.
  </p>
  <p>
    Related pages for Jammu: <a href="{{ url('/chemistry-home-tutor-jammu') }}">chemistry tutors</a>,
    <a href="{{ url('/maths-home-tutor-jammu') }}">maths tutors</a> and
    <a href="{{ url('/neet-home-tutor-jammu') }}">NEET tutors</a>. Physics teachers in Jammu can see open requests
    on <a href="{{ url('/tuition-jobs/jammu') }}">Jammu tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
