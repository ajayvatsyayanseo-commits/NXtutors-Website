{{--
  Board hub for "IB tutor Indore". Author: Ajay Vatsyayan (role: IB, IGCSE and
  ISC maths). No anecdotes, years or results are claimed for him. No schools
  are named.

  Board facts restate only what ib-tutor-gurgaon states, which cites ibo.org
  (read 1 Oct 2026): PYP ages 3-12, six transdisciplinary themes, exhibition
  in the final year, no external exams; MYP ages 11-16, five years (shorter
  versions allowed), eight subject groups, criteria-based marking, personal
  project of about 25 hours (eAssessment), optional two-hour on-screen exams
  in some groups; DP ages 16-19, six subjects, normally three (not more than
  four) at HL, 240 h HL / 150 h SL, grades 1-7, EE + TOK up to three points,
  maximum 45, 24 points among the passing conditions, IA in every subject;
  EE 4,000-word limit, three reflection sessions ending in a viva voce,
  500-word reflective statement (first assessment 2027); TOK exhibition of
  three objects and a 1,600-word essay on one of six prescribed titles; maths
  as Analysis and Approaches or Applications and Interpretation, SL or HL,
  revised for first teaching from August 2027. No exam dates.

  Local detail only from the city hub (indore.blade.php: "a smaller group
  following the IB or Cambridge IGCSE"; IB/IGCSE card; online reach for IB;
  Yellow Line 16 stations; Palasia, Bengali Square, Khajrana stations planned)
  and database/seo-content/zones/indore.json (Nipania zone: online tutors used
  for international-board subjects; Vijay Nagar zone: senior students use
  online tutors for a specialist subject; Rau: online for senior maths and
  science). No share of IB schools is claimed. Fee wording is the approved
  sentence. FAQs render from faqs/ib-tutor-indore.php. Area links render only
  when that Indore area page exists and is active.
--}}
@php
  $inAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $inA = function (string $slug, string $label) use ($inAreaSlugs) {
      return in_array($slug, $inAreaSlugs, true)
          ? '<a href="' . e(url('/city/indore/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ibi-guide" aria-labelledby="ibiGuideTitle">
  <h2 id="ibiGuideTitle">IB tutors in Indore: a local tutor, an online specialist, or both</h2>

  <p class="nx-guide__lede">
    A smaller group of Indore families follows the IB, and our zone research shows a clear pattern in how they use
    tutors: in the north-east and along the Ring Road, many turn to online tutors for international-board subjects,
    often alongside a local tutor for steady weekly work. This page is meant to help you build that combination well.
    It explains how the IB's three programmes assess students, how Diploma subjects and levels work, what a tutor may
    do on coursework, which subjects Indore families most often want help with, and how tutors reach each zone. It is
    by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors. Our <a href="{{ url('/ib-tutor-gurgaon') }}">IB
    programmes guide</a> covers the same ground at greater length.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibi-city">IB in Indore</a> ·
    <a href="#ibi-diff">IB, CBSE and MP Board</a> ·
    <a href="#ibi-map">Programme map</a> ·
    <a href="#ibi-levels">Subjects and levels</a> ·
    <a href="#ibi-terms">A term-by-term plan</a> ·
    <a href="#ibi-split">Local plus online</a> ·
    <a href="#ibi-myp">MYP years</a> ·
    <a href="#ibi-core">The core and coursework</a> ·
    <a href="#ibi-subjects">Subjects</a> ·
    <a href="#ibi-zones">Zones</a> ·
    <a href="#ibi-demo">Demo</a> ·
    <a href="#ibi-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibi-city">The IB in Indore</h2>
  <p>
    The <a href="{{ url('/city/indore') }}">Indore tutors page</a> describes CBSE schools across the city, the MP Board,
    CISCE schools and a smaller group following the IB or Cambridge IGCSE. We do not estimate the size of any group.
    For IB students the practical facts are about distance: the Yellow Line serves only the north-east so far, the
    centre and south rely on roads, and a specialist for one HL course may live on the other side of AB Road. That is
    why our search for an IB tutor runs from your locality outwards and then online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibi-diff">How the IB differs from CBSE and the MP Board</h2>
  <p>
    Speaking generally, CBSE and the MP Board examine a prescribed textbook syllabus mainly through year-end papers,
    the MP Board in Hindi or English medium. The IB spreads assessment through the course. Younger students are marked
    against criteria in each subject; Diploma students complete an internally assessed piece in every subject,
    marked by the teacher and moderated by the IB, as well as final exams. The vocabulary matters as much as the
    content: an IB command term such as "evaluate" or "show that" asks for something precise. A tutor fluent in the
    Indian boards needs specific IB experience to mark to that standard.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibi-map">A programme map</h2>
  <dl>
    <dt><strong>Primary Years Programme (ages 3 to 12)</strong></dt>
    <dd>Units of inquiry across six transdisciplinary themes, with an exhibition in the final year and no external exams. Tutoring, where needed, is about reading, writing and number fluency.</dd>
    <dt><strong>Middle Years Programme (ages 11 to 16)</strong></dt>
    <dd>Five years, which schools may shorten, across eight subject groups marked against criteria. A personal project of about 25 hours closes the programme; on-screen exams are offered only if the school opts in. Help is usually needed in maths and sciences in the last two years, and in writing to the criteria.</dd>
    <dt><strong>Diploma Programme (ages 16 to 19)</strong></dt>
    <dd>Two years, six subjects graded 1 to 7, an internal assessment in each, final exams, and the core of Extended Essay, Theory of Knowledge and CAS.</dd>
  </dl>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibi-levels">Diploma subjects, levels and points</h2>
  <p>
    A Diploma student takes six subjects from the IB's academic areas, normally three at Higher Level and not more
    than four. The IB recommends 240 teaching hours for HL and 150 for SL, so an HL course moves faster and further.
    Maths is taken as Analysis and Approaches or Applications and Interpretation, at SL or HL; the choice can matter
    for later study, so it is worth discussing with the school before tutoring begins. The IB's maths courses are
    revised for first teaching from August 2027, so the tutor should confirm which version applies.
  </p>
  <p>
    Each subject earns 1 to 7 points, and the Extended Essay with TOK can add up to three more, so 45 is the maximum.
    Achieving at least 24 points is one of the passing conditions, alongside others the school will explain. Our
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA versus AI guide</a> helps with the maths decision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibi-terms">A term-by-term plan for the Diploma</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where a tutor's hours do most good across DP1 and DP2</caption>
    <thead>
      <tr><th scope="col">Term</th><th scope="col">Main pressure</th><th scope="col">Tutor's contribution</th></tr>
    </thead>
    <tbody>
      <tr><td>DP1, first term</td><td>The step up to HL content and terminology</td><td>Repair algebra or science basics; begin past-paper questions by topic</td></tr>
      <tr><td>DP1, later terms</td><td>Choosing IA and Extended Essay topics</td><td>Teach the subject knowledge behind the topic; explain criteria</td></tr>
      <tr><td>DP2, first term</td><td>Drafts, TOK tasks and lessons together</td><td>Keep subject content moving; a written weekly plan</td></tr>
      <tr><td>DP2, mocks</td><td>Predicted grades for applications</td><td>Timed papers marked with official markschemes</td></tr>
      <tr><td>DP2, final weeks</td><td>All papers close together</td><td>Targeted revision of the weakest papers only</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibi-split">Splitting the work between a local and an online tutor</h2>
  <p>
    When a family uses two tutors, or one tutor in two modes, the arrangement works only if each session has a clear
    job. A pattern that suits many Diploma students: the home session, with the local tutor, handles the week's school
    content, homework that went wrong and written practice where the working has to be watched closely. The online
    session, often with the HL specialist, handles exam technique: past-paper questions under time, marked with the
    official markscheme, and the subject knowledge behind an internal assessment topic. The two should share one error
    log, a simple document both can see, so mistakes are not fixed twice or missed twice. Parents should ask both
    tutors, at the start, what each will own. Where one tutor can do both, at home on the weekend and online midweek,
    the log is simpler and the plan more consistent.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibi-myp">MYP students: the two years before the Diploma</h2>
  <p>
    The last two MYP years are where tutoring pays off quietly. Maths fluency, especially algebra, decides whether HL
    maths or a demanding science is realistic in the Diploma. Writing to criteria, explaining a method or evaluating
    an experiment in words, is a skill the Diploma's internal assessments will lean on. A good MYP tutor reads the task
    sheet and the criterion descriptors before teaching, and keeps the personal project firmly the student's own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibi-core">The core and coursework: what a tutor may and may not do</h2>
  <p>
    The Extended Essay is independent research of at most 4,000 words, supervised at school; from 2027 assessment it
    brings three formal reflection meetings with the supervisor, the final one a brief viva, plus a reflective
    statement of up to 500 words. Theory of
    Knowledge has two parts: an exhibition built around three objects, and an essay of up to 1,600 words answering
    one of the six titles set for that session. Internal assessments in each subject follow their own published
    criteria.
  </p>
  <p>
    A tutor's role is to teach the subject behind a topic, explain the criteria and ask the questions that sharpen a
    student's thinking. Choosing the topic, writing or editing drafts and doing the analysis belong to the student. A
    tutor who offers more is putting the diploma at risk. The
    <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE parent's guide</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibi-subjects">IB subjects and our Indore pages</h2>
  <ul>
    <li><strong>Maths:</strong> <a href="{{ url('/ib-maths-tutor') }}">IB maths tutors</a> and local <a href="{{ url('/maths-home-tutor-indore') }}">maths home tutors in Indore</a>.</li>
    <li><strong>Physics:</strong> <a href="{{ url('/physics-home-tutor-indore') }}">physics home tutors in Indore</a> and the <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL, HL, IA and EE guide</a>.</li>
    <li><strong>Chemistry and biology:</strong> <a href="{{ url('/chemistry-home-tutor-indore') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-indore') }}">biology</a> tutors; say SL or HL.</li>
    <li><strong>English and others:</strong> <a href="{{ url('/english-home-tutor-indore') }}">English home tutors in Indore</a>; for economics or languages, give the course name.</li>
  </ul>
  <p>
    For a student joining the Diploma from CBSE, ICSE or the MP Board, our
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to moving into IB or IGCSE</a> sets out a
    bridging plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibi-zones">IB tutors across Indore: home, online or both</h2>
  <ul>
    <li><strong><a href="{{ url('/city/indore/zone/vijay-nagar-ab-road') }}">Vijay Nagar and AB Road</a>.</strong> The {!! $inA('super-corridor', 'Super Corridor') !!} townships have Yellow Line stations but are still filling up, so many tutors travel out from Vijay Nagar or Sukhliya; add the tutor to the gate register before the demo.</li>
    <li><strong><a href="{{ url('/city/indore/zone/palasia-central-indore') }}">Palasia and Central Indore</a>.</strong> {!! $inA('new-palasia', 'New Palasia') !!} and {!! $inA('race-course-road', 'Race Course Road') !!} are reachable from most of the city; a tutor who comes by auto or two-wheeler avoids evening parking trouble.</li>
    <li><strong><a href="{{ url('/city/indore/zone/nipania-bicholi-ring-road') }}">Nipania, Bicholi and Ring Road</a>.</strong> For {!! $inA('mahalaxmi-nagar', 'Mahalaxmi Nagar') !!} and {!! $inA('nipania', 'Nipania') !!}, a tutor can ride to Malviya Nagar Chauraha and finish by auto; families here often add online tutors for international-board subjects.</li>
    <li><strong><a href="{{ url('/city/indore/zone/bhawarkua-rajendra-nagar-rau') }}">Bhawarkua, Rajendra Nagar and Rau</a>.</strong> In {!! $inA('silicon-city', 'Silicon City') !!} fewer tutors live locally; expect one from Rajendra Nagar or Bijalpur, with online sessions for senior maths or science.</li>
  </ul>
  <p>
    For an online IB lesson to be worth the fee, the tutor has to watch the working as it is written, on a tablet,
    a shared board or through a camera pointed at the page, and the student should work on the calculator the
    school approves. PYP and younger MYP children usually do
    better with a tutor at the table.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibi-demo">The demo: five things to test</h2>
  <ol>
    <li>Give the tutor a marked school test; they should read the markscheme and explain the lost marks quickly.</li>
    <li>Ask which syllabus version your child's exam session uses.</li>
    <li>Ask what "evaluate" requires compared with "describe".</li>
    <li>Ask where their help on an IA stops.</li>
    <li>Ask for a month's plan tied to the school's deadlines.</li>
  </ol>
  <p>
    You see two or three tutors with fees before the demo, and switching tutor later is free. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibi-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. In Indore the programme,
    level, subjects and the tutor's travel set the fee; see the <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    and <a href="{{ url('/blog/home-tuition-fees-indore') }}">Indore tuition fees</a>.
  </p>
  <p>
    Send the programme, year, subject and level, your scheme or colony and your free slots, and your first
    session will be a <a href="{{ url('/demo-class') }}">free demo</a>. You can also look through
    <a href="{{ url('/tutors') }}">tutor profiles</a>, and IB teachers will find <a href="{{ url('/tuition-jobs/indore') }}">tuition jobs in Indore</a>.
  </p>
  </section>

  </div>
</article>
