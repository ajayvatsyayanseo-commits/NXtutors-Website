{{--
  Board page for "IB tutor Faridabad". Author: Ajay Vatsyayan (role: IB, IGCSE
  and ISC maths). No anecdotes, years or results are claimed for him. No
  schools, coaching institutes, societies, developers or people are named.

  Board facts reworded from the Gurgaon board hub (ib-tutor-gurgaon), which
  cites (fetched 1 Oct 2026; ibo.org text read from ibo.org search extracts
  and IB PDFs):
  - IB Extended essay subject brief, first assessment 2027 (ibo.org PDF):
    DP for ages 16–19, six academic areas around a core, normally three (not
    more than four) HL subjects, 240 h HL / 150 h SL; EE 4,000-word upper
    limit, three reflection sessions ending in a viva voce, 500-word
    reflective statement; EE + TOK award up to three points.
  - ibo.org/programmes/diploma-programme/curriculum/dp-core/theory-of-knowledge/
    : TOK assessed by an exhibition (three objects, internally assessed and
    moderated) and a 1,600-word essay on one of six prescribed titles.
  - ibo.org/programmes/primary-years-programme/ and the PYP brochure: ages
    3–12, six transdisciplinary themes, the exhibition in the final year.
  - ibo.org/programmes/middle-years-programme/ and MYP curriculum pages: ages
    11–16, five years (schools may run shorter versions), eight subject
    groups, personal project of about 25 hours, eAssessment optional except the
    personal project; two-hour on-screen exams in some subject groups.
  - DP subject grades 1–7, maximum 45, 24-point threshold among the passing
    conditions, IA in every subject (ibo.org DP assessment pages, as verified
    for blog/ib-igcse-tutoring-gurgaon-parents-guide).
  Board mix and HBSE wording only as the Faridabad hub view states them (a
  smaller group study for the IB or Cambridge IGCSE; HBSE conducts Haryana's
  Class 10 and 12 exams, own pattern, Hindi or English medium). HBSE in general
  terms only. No claim that IB families live in any particular area. Local
  detail only from database/seo-content/areas/faridabad-research.json,
  faridabad-zone-guides.json, zones/faridabad.json and the Faridabad hub. Fee
  wording is the approved NXTutors sentence. FAQs: faqs/ib-tutor-faridabad.php.
  Area links render only for active Faridabad areas.
--}}
@php
  $fibSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $fibA = function (string $slug, string $label) use ($fibSlugs) {
      return in_array($slug, $fibSlugs, true)
          ? '<a href="' . e(url('/city/faridabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide fib-guide" aria-labelledby="fibGuideTitle">
  <h2 id="fibGuideTitle">IB tutors in Faridabad: PYP, MYP and the Diploma, and how to make a specialist practical</h2>

  <p class="nx-guide__lede">
    In Faridabad the IB is studied by a smaller group of students than CBSE or ICSE, which shapes how you look for a
    tutor. The right person is defined by the programme, the subject and the level, say MYP Year 4 sciences or Diploma
    Chemistry HL, and that person may not live in the next sector. So an IB search here is partly about the course
    and partly about logistics: how a specialist gets to you across a city split by Mathura Road and the Agra canal, and
    when online classes make more sense. This page explains how the three IB programmes work, where students tend to
    need support, where the coursework line sits for a tutor, what to test at the free demo, and how the
    journey looks from different parts of the city. The author is Ajay Vatsyayan, who
    teaches IB, IGCSE and ISC maths on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#fib-local">IB beside CBSE and HBSE</a> ·
    <a href="#fib-programmes">PYP, MYP and DP</a> ·
    <a href="#fib-dp">How the Diploma is scored</a> ·
    <a href="#fib-core">Coursework rules</a> ·
    <a href="#fib-timeline">DP1 and DP2</a> ·
    <a href="#fib-subjects">Subjects</a> ·
    <a href="#fib-reach">Reaching you</a> ·
    <a href="#fib-demo">The demo</a> ·
    <a href="#fib-start">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="fib-local">The IB beside CBSE and the Haryana board</h2>
  <p>
    Most Faridabad students follow CBSE, ICSE and ISC have a loyal following, the Board of School Education Haryana
    sets the state's Class 10 and 12 exams to its own pattern, and a smaller group study for the IB or Cambridge
    IGCSE. The IB is the odd one out in method. The Indian boards, CBSE and HBSE included, end in board papers set
    against a fixed syllabus. The IB judges much of a student's work against published criteria, spreads
    assessment across coursework as well as final exams, and in the PYP has no external exams at all.
  </p>
  <p>
    That difference matters most when a student changes system. A child who arrives in the Diploma from a CBSE or
    state-board school is often strong on content and procedure but new to open questions, command terms and
    self-directed coursework. One moving the other way, from IB to an Indian board for Class 11, usually needs speed
    in hand calculation and practice with textbook-style answers. A tutor should know which way your child is
    travelling. Our guide to <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching between CBSE
    and IB or IGCSE</a> sets out a bridging plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fib-programmes">The three programmes, and what families ask a tutor for</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IB programmes by age, assessment and typical request</caption>
    <thead>
      <tr><th scope="col">Programme</th><th scope="col">Ages, as the IB states</th><th scope="col">How work is judged</th><th scope="col">What parents usually ask for</th></tr>
    </thead>
    <tbody>
      <tr><td>Primary Years (PYP)</td><td>3 to 12</td><td>Inquiry units built on six transdisciplinary themes, ending with the PYP exhibition; nothing is externally examined</td><td>Confident reading, writing and arithmetic; comfort with open tasks</td></tr>
      <tr><td>Middle Years (MYP)</td><td>11 to 16, over five years (some schools run fewer)</td><td>Published criteria across eight subject groups; the personal project, roughly 25 hours of independent work; optional two-hour on-screen exams in some groups, at the school's choice</td><td>Maths and science fluency; writing to the criteria; managing long tasks</td></tr>
      <tr><td>Diploma (DP)</td><td>16 to 19, over two years</td><td>Grades from 1 to 7 in six subjects, each with coursework and written exams, plus the core: Extended Essay, TOK and CAS</td><td>Higher Level maths and sciences, economics and essay subjects, with coursework kept to schedule</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In the PYP, the useful work is fluency: tables, place value, fractions, reading stamina and a clear paragraph. A
    tutor who turns inquiry units into drill sheets is missing the point. In the MYP, the task sheet and its criteria
    should be read together before any teaching starts, because the marks follow the criteria. Our
    <a href="{{ url('/maths-home-tutor-faridabad') }}">maths</a> and <a href="{{ url('/science-home-tutor-faridabad') }}">science</a>
    tutors in Faridabad cover the younger years; tell us the MYP year so we match someone who knows the criteria.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fib-dp">How the Diploma is built and scored</h2>
  <p>
    Six subjects make up a Diploma, chosen from the IB's academic areas. Usually three, and at most four, are studied
    at Higher Level. The IB suggests 240 hours of teaching for each HL course against 150 for SL, so a single HL subject
    in trouble can eat the hours meant for the rest. Subject grades run from 7 down to 1. Up to three more points come
    from the Extended Essay and TOK combined, which is how the ceiling reaches 45, and a minimum of 24 points is among
    the conditions for passing. Internal assessment exists in every subject: the school's teacher marks it, the IB
    moderates it, and the school fixes its deadlines.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fib-core">Coursework: what a tutor may and may not do</h2>
  <p>
    Parents ask about this more than anything else. The IB's descriptions draw the boundaries:
  </p>
  <ul>
    <li><strong>Extended Essay:</strong> independent research in one subject or across two, externally assessed, with a 4,000-word upper limit. Under the version first assessed in 2027, the student holds three reflection sessions with the school supervisor, the last a short viva voce, and also submits a reflective statement of up to 500 words.</li>
    <li><strong>Theory of Knowledge:</strong> two parts. The exhibition presents three objects and is assessed internally, then moderated; the essay, 1,600 words long, answers one of six titles the IB sets for each session.</li>
    <li><strong>Internal assessment:</strong> the maths exploration, the science investigations and other formats elsewhere, all marked against published criteria.</li>
  </ul>
  <p>
    Everything submitted must be the student's own work. The legitimate help is teaching: the chemistry, physics,
    economics or maths underneath the topic, what the criteria are looking for, and questions that push a student to
    narrow a vague idea. Picking the topic, drafting, editing or doing the analysis are off limits for a tutor; draft feedback belongs to the
    supervisor, within the IB's limits. If anyone offers to "tidy up" an IA or EE, decline: it puts the diploma at
    risk. Our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL/HL, IA and EE guide</a> shows where the
    boundary sits in one subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fib-timeline">DP1 and DP2: when a tutor helps most</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The two Diploma years, and the tutor's job at each point</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">What the student faces</th><th scope="col">Tutor's job</th></tr>
    </thead>
    <tbody>
      <tr><td>First weeks of DP1</td><td>A sharp step up from Grade 10, especially at HL</td><td>Find and fill algebra or science gaps before unit tests</td></tr>
      <tr><td>Later DP1</td><td>IA planning starts; EE topic thinking begins</td><td>Keep content moving while explaining the criteria</td></tr>
      <tr><td>Early DP2</td><td>IA, EE and TOK deadlines arrive together</td><td>A written weekly plan so no subject is quietly dropped</td></tr>
      <tr><td>Mock exams</td><td>School mocks feed predicted grades</td><td>Timed papers marked with official markschemes; error log by topic</td></tr>
      <tr><td>Final weeks</td><td>Papers in every subject</td><td>Targeted revision on the weakest papers, no new content</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fib-subjects">Choosing the subject page</h2>
  <ul>
    <li><strong>Maths AA or AI, SL or HL:</strong> our <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page, and the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA vs AI guide</a> if the course choice is still open.</li>
    <li><strong>Physics, chemistry and biology:</strong> <a href="{{ url('/physics-home-tutor-faridabad') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-faridabad') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-faridabad') }}">biology</a> tutors in Faridabad; say "IB" and the level in your request.</li>
    <li><strong>English, economics, business management and languages:</strong> matched on request, with <a href="{{ url('/english-home-tutor-faridabad') }}">English home tutors in Faridabad</a> as a starting point.</li>
  </ul>
  <p>
    For the full picture of how each programme works, see our <a href="{{ url('/ib-tutor-gurgaon') }}">IB tutors in
    Gurgaon</a> page and the <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE
    guide for parents</a>. If an IGCSE year comes before the Diploma, read
    <a href="{{ url('/igcse-tutor-faridabad') }}">IGCSE tutors in Faridabad</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fib-reach">How an IB specialist reaches you, sector by sector</h2>
  <p>
    The tutor who knows your child's exact course may live anywhere in Faridabad or across the border in Delhi, so the
    route matters more than for a general tutor. A few examples from different zones:
  </p>
  <ul>
    <li><strong>{!! $fibA('sector-21c', 'Sector 21C') !!}</strong> (<a href="{{ url('/city/faridabad/zone/central-sectors-mathura-road') }}">central sectors</a>): along the Surajkund–Badkhal road, an auto ride from Badkhal Mor or Sector 28 station. That road is busy at peak hours, so start before the evening rush; apartment buildings want the tutor's name at the gate.</li>
    <li><strong>{!! $fibA('sector-31', 'Sector 31') !!}</strong> (<a href="{{ url('/city/faridabad/zone/sectors-28-31-37') }}">Sectors 28–31 and 37</a>): Mewla Maharajpur station stands inside the sector, so a specialist from south Delhi can arrive by metro and walk, avoiding Mathura Road in office hours.</li>
    <li><strong>{!! $fibA('charmwood-village', 'Charmwood Village') !!}</strong> (<a href="{{ url('/city/faridabad/zone/surajkund-sainik-colony') }}">Surajkund and Sainik Colony</a>): the nearest Violet Line stations are Badarpur Border and Tughlakabad on the Delhi side, so most tutors come by auto, cab or their own vehicle. Register the tutor at the guarded gate, and plan online classes for days of the February crafts fair at Surajkund.</li>
    <li><strong>{!! $fibA('sector-62', 'Sector 62') !!}</strong> (<a href="{{ url('/city/faridabad/zone/ballabhgarh-southern-sectors') }}">Ballabhgarh and southern sectors</a>): little public transport inside the sector; tutors come by two-wheeler or by metro to the Ballabhgarh terminus and an auto. Construction on the Mohna Road can slow things, so keep timings flexible.</li>
    <li><strong>{!! $fibA('sector-77', 'Sector 77') !!}</strong> (<a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-75-80') }}">Greater Faridabad, Sectors 75–80</a>): metro riders leave at Escorts Mujesar and cross the canal by auto. Time weekday classes to miss the evening queues on the canal bridges, and arrange a visitor pass in townships.</li>
    <li><strong>{!! $fibA('sector-86', 'Sector 86') !!}</strong> (<a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-81-89') }}">Greater Faridabad, Sectors 81–89</a>): one of the Neharpar sectors nearest the old city, so tutors from both banks of the canal can serve it; Neelam Chowk Ajronda or Old Faridabad station plus an auto is the usual route.</li>
  </ul>
  <p>
    Where the specialist is far away, a hybrid plan works well: a home class at the weekend and an online class on a
    weekday with the same tutor. For maths and sciences online, the tutor must see your child's working live, on a
    writing tablet, a shared whiteboard or a camera over the notebook, and the student should use their own approved
    calculator. The <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor vs online tutor</a> post weighs
    the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fib-demo">Testing an IB tutor at the free demo</h2>
  <ol>
    <li><strong>Bring a marked school test.</strong> A tutor who knows the Diploma reads the markscheme annotations and says within minutes where marks went and what to practise.</li>
    <li><strong>Ask about the current guide.</strong> IB courses are revised on a cycle, and the Extended Essay brief is new for 2027 assessment; a current tutor knows which version applies to your child's session.</li>
    <li><strong>Probe the command terms.</strong> What does "show that" demand compared with "hence", or "evaluate" compared with "discuss"?</li>
    <li><strong>Ask where the coursework line is.</strong> The answer you want: the tutor teaches the concepts and criteria, and the writing stays your child's.</li>
    <li><strong>Ask for the next six weeks.</strong> A good tutor sketches a plan tied to the school's deadlines before the demo ends.</li>
  </ol>
  <p>
    We suggest two or three matched tutors and show each fee ahead of the demo; changing tutor later is free. Every
    tutor who joins goes through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is marked Verified. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> adds general
    questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fib-start">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For IB, the programme,
    level, number of subjects and the tutor's travel to your sector shape the fee. For budgeting, read our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and the
    <a href="{{ url('/blog/home-tuition-fees-faridabad') }}">Faridabad tuition fees post</a>.
  </p>
  <p>
    Send the programme and year with the subject and level (for example "DP2, Chemistry HL"), plus your sector or
    colony and the slots you can offer. A shortlist of two or three tutors follows, and your first class with one of
    them is a <a href="{{ url('/demo-class') }}">free demo</a>. You can also browse <a href="{{ url('/tutors') }}">tutor
    profiles</a> or every area on our <a href="{{ url('/city/faridabad') }}">Faridabad tutors page</a>. IB teachers
    in the city can see open requests on <a href="{{ url('/tuition-jobs/faridabad') }}">Faridabad tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
