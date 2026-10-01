{{--
  Board hub for "IB tutor Chandigarh" (tricity). Author: Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths). No anecdotes, years or results are claimed
  for him. No schools are named.

  Board facts restate only what ib-tutor-gurgaon states, which cites ibo.org
  (read 1 Oct 2026): PYP ages 3-12, six transdisciplinary themes, exhibition
  in the final year; MYP ages 11-16, five years (shorter versions allowed),
  eight subject groups, personal project of about 25 hours, eAssessment
  optional except the personal project, two-hour on-screen exams in some
  groups; DP ages 16-19, six subjects, normally three (not more than four) at
  HL, 240 h HL / 150 h SL, grades 1-7, EE + TOK up to three points, maximum
  45, 24 points among the passing conditions, IA in every subject; EE
  4,000-word limit, three reflection sessions ending in a viva voce, 500-word
  reflective statement (first assessment 2027); TOK exhibition of three
  objects and a 1,600-word essay on one of six prescribed titles; IB maths
  revised for first teaching from August 2027. No exam dates.

  Local detail only from the city hub (chandigarh.blade.php: the international
  programmes among up to five tricity boards; IB/IGCSE card; online reach for
  IB and IGCSE; no metro) and database/seo-content/zones/chandigarh.json
  (local tutor plus online specialist for IB, IGCSE or senior science; fewer
  tutors living in Aerocity). No share of IB schools is claimed. Fee wording
  is the approved sentence. FAQs render from faqs/ib-tutor-chandigarh.php.
  Area links render only when that tricity area page exists and is active.
--}}
@php
  $cgAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cgA = function (string $slug, string $label) use ($cgAreaSlugs) {
      return in_array($slug, $cgAreaSlugs, true)
          ? '<a href="' . e(url('/city/chandigarh/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ibc-guide" aria-labelledby="ibcGuideTitle">
  <h2 id="ibcGuideTitle">IB tutors in the tricity: PYP, MYP and Diploma help in Chandigarh, Mohali and Panchkula</h2>

  <p class="nx-guide__lede">
    In the tricity, IB families share streets with CBSE, CISCE and two state boards, and that shapes how a tutor is
    found. A tutor who teaches your child's exact Diploma subject at the right level may not live in your
    sector, so a mix often suits families here: someone local for weekly work and, for a hard Higher Level
    course, a specialist who teaches online. This page explains how the three IB programmes are built, where tricity
    students usually ask for help, which pages to use for each subject, how to test a tutor in the free demo, and how
    travel works in each zone. The author is Ajay Vatsyayan, whose NXTutors teaching covers IB, IGCSE and ISC maths. For a
    fuller account of the programmes, see <a href="{{ url('/ib-tutor-gurgaon') }}">how the IB works</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibc-place">IB in the tricity</a> ·
    <a href="#ibc-diff">IB against CBSE and the state boards</a> ·
    <a href="#ibc-map">The three programmes</a> ·
    <a href="#ibc-dp">The Diploma in detail</a> ·
    <a href="#ibc-core">IA, EE and TOK</a> ·
    <a href="#ibc-session">A good session</a> ·
    <a href="#ibc-subjects">Subjects</a> ·
    <a href="#ibc-zones">Tutors by zone</a> ·
    <a href="#ibc-demo">Demo checklist</a> ·
    <a href="#ibc-start">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibc-place">The IB's place in the tricity</h2>
  <p>
    Our <a href="{{ url('/city/chandigarh') }}">tricity tutors page</a> describes up to five boards across Chandigarh,
    Mohali, Panchkula and Zirakpur, with the IB and Cambridge as the international pair. We do not quote numbers for
    IB families, and nobody should. What the zone research does show is a pattern in requests: for IB, IGCSE or senior
    science, a local tutor for steady weekly work combined with an online specialist is often the sensible split,
    especially in newer townships such as Aerocity where fewer tutors live so far.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibc-diff">How the IB differs from CBSE and the state boards</h2>
  <p>
    In broad terms, CBSE and the Punjab and Haryana boards examine a fixed textbook syllabus, mostly through a final
    paper with a smaller internal share. The IB works differently at every stage. The Primary and Middle Years
    programmes judge work against published criteria, not a single percentage. In the Diploma, every subject has an
    internally assessed component, marked by the teacher and moderated by the IB, alongside final exams, and the core
    adds an essay, a knowledge course and activities. For a tutor this means reading task sheets and criteria before
    teaching, and respecting firm rules about what help is allowed on assessed work. A strong CBSE tutor is not
    automatically a good IB tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibc-map">The three programmes, and where a tutor usually helps</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IB programmes by age, as the IB describes them</caption>
    <thead>
      <tr><th scope="col">Programme</th><th scope="col">Ages</th><th scope="col">How work is judged</th><th scope="col">Typical tutoring</th></tr>
    </thead>
    <tbody>
      <tr><td>Primary Years (PYP)</td><td>3 to 12</td><td>Units of inquiry under six transdisciplinary themes, with an exhibition in the last year; no external exams</td><td>Reading stamina, number fluency, confidence with open questions</td></tr>
      <tr><td>Middle Years (MYP)</td><td>11 to 16, five years (schools may shorten it)</td><td>Criteria in eight subject groups; a personal project of about 25 hours; on-screen exams only if the school opts in</td><td>Maths and sciences in the last two years; writing to criteria</td></tr>
      <tr><td>Diploma (DP)</td><td>16 to 19, two years</td><td>Six subjects graded 1 to 7, an internal component in each, final exams, plus the core</td><td>One or two HL subjects, IA planning within the rules, timed past papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A PYP child needs no exam coaching; the useful help is reading, writing a clear paragraph and secure arithmetic.
    An MYP student most often needs maths and science content as the Diploma approaches, and help explaining a method
    or evaluating an experiment in words. Our <a href="{{ url('/maths-home-tutor-chandigarh') }}">maths home tutors in
    Chandigarh</a> page lists local maths tutors for these years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibc-dp">The Diploma: what a tricity DP student is working towards</h2>
  <p>
    Diploma students take six subjects across the IB's academic areas, normally three at Higher Level and never more
    than four. The IB recommends 240 teaching hours for an HL subject and 150 for SL, which helps explain why HL maths
    and the HL sciences are the usual tuition requests. Each subject is graded 1 to 7; the Extended Essay and Theory of
    Knowledge together add up to three more points, giving a maximum of 45, and the passing conditions include at
    least 24 points along with other requirements.
  </p>
  <p>
    The pressure points are predictable. Early in DP1, HL students meet a step up in algebra and new scientific
    vocabulary. From mid-DP1 into DP2, internal assessments, the essay and TOK tasks overlap with normal teaching.
    Before predicted grades, school mocks matter because they feed university applications. A tutor who starts early
    in DP1 has room to fix gaps; one who starts after mocks can only triage. Maths students should also know that the
    IB has revised its maths courses for first teaching from August 2027, so a tutor should confirm which version your
    child is on.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibc-core">Internal assessment, Extended Essay and TOK: the tutor's limits</h2>
  <p>
    This is where families most need clarity. The Extended Essay is independent research with an upper limit of 4,000
    words, supervised at school; under the version first assessed in 2027 it involves three reflection sessions, the
    last a short viva voce, and a 500-word reflective statement. TOK is assessed through an exhibition of three
    objects and a 1,600-word essay on one of six titles the IB prescribes. Every subject's internal assessment is
    marked against published criteria.
  </p>
  <p>
    A tutor may teach the subject behind a chosen topic, explain what each criterion rewards and ask questions that
    sharpen a research question. A tutor must not choose the topic, write or edit drafts, or run the analysis. Any
    offer to "polish" an IA puts the diploma at risk. Our
    <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">parent's guide to IB and IGCSE tutoring</a>
    explains the criteria in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibc-session">What a useful IB session looks like</h2>
  <p>
    IB tuition goes wrong when it copies board-exam coaching: a chapter explained, a worksheet set, the same again next
    week. A better hour has three parts. It begins with something real from school, such as a marked test, a unit
    task sheet or the criteria for the next assessment, so the tutor works on what the teacher will actually judge.
    The middle is teaching or repair of one idea, taken from the subject guide's wording, with examples pitched at
    the student's level, SL or HL. The last part is past-paper practice under time, marked against the official
    markscheme together, so the student sees where each mark is awarded and logs the mistake by type. For MYP
    students the last part changes: instead of past papers, the tutor asks the student to explain a method or
    evaluate a result in writing, then checks the paragraph against the criterion. Either way, a parent should get a
    line after each session on what was covered and what is next.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibc-subjects">Which IB subjects tricity families ask for, and where to go</h2>
  <ul>
    <li><strong>Maths, AA or AI, SL or HL:</strong> the most common request. Start with <a href="{{ url('/ib-maths-tutor') }}">IB maths tutors</a> and the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA versus AI guide</a>; local tutors are on <a href="{{ url('/maths-home-tutor-chandigarh') }}">maths home tutors in Chandigarh</a>.</li>
    <li><strong>Physics:</strong> data questions and the investigation; see <a href="{{ url('/physics-home-tutor-chandigarh') }}">physics home tutors in the tricity</a> and the <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL, HL, IA and EE guide</a>.</li>
    <li><strong>Chemistry and biology:</strong> <a href="{{ url('/chemistry-home-tutor-chandigarh') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-chandigarh') }}">biology</a> tutors; tell us the level, since HL content goes well beyond school-board Class 12 in places.</li>
    <li><strong>English, economics and the languages:</strong> <a href="{{ url('/english-home-tutor-chandigarh') }}">English home tutors</a>, and others on request with the exact course name.</li>
  </ul>
  <p>
    Changing into the Diploma from CBSE or ICSE after Class 10? Read
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching from CBSE to IB or IGCSE</a> before
    the first term.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibc-zones">How IB tutors reach each zone, and when to go online</h2>
  <ul>
    <li><strong><a href="{{ url('/city/chandigarh/zone/chandigarh-sectors-1-30') }}">Sectors 1 to 30</a>.</strong> Plotted homes where the tutor rings at the gate, with the Sector 17 bus terminal close by. In {!! $cgA('sector-11', 'Sector 11') !!} or {!! $cgA('sector-27', 'Sector 27') !!}, a weekend morning avoids the Madhya Marg and Dakshin Marg office rush.</li>
    <li><strong><a href="{{ url('/city/chandigarh/zone/chandigarh-sectors-31-56-manimajra') }}">Sectors 31 to 56 and Manimajra</a>.</strong> {!! $cgA('sector-36', 'Sector 36') !!} has independent houses on quiet streets and is close to the Sector 43 bus terminal, which helps a specialist who travels by bus.</li>
    <li><strong><a href="{{ url('/city/chandigarh/zone/mohali') }}">Mohali</a>.</strong> {!! $cgA('mohali-phase-10', 'Phase 10') !!} is largely apartment complexes, so register the tutor at the gate, and avoid match days near the Phase 9 stadiums. {!! $cgA('aerocity-mohali', 'Aerocity') !!} has few resident tutors so far; a home and online mix is the usual answer.</li>
    <li><strong><a href="{{ url('/city/chandigarh/zone/panchkula-zirakpur') }}">Panchkula and Zirakpur</a>.</strong> {!! $cgA('panchkula-sector-20', 'Panchkula Sector 20') !!} is gated societies; a tutor on your side of Housing Board Chowk keeps the weekly slot reliable.</li>
  </ul>
  <p>
    Online IB lessons work when the tutor sees written working live, through a tablet, a shared whiteboard or a camera
    over the notebook, and when the student uses their own approved calculator. Our
    <a href="{{ url('/blog/mohali-and-panchkula-tuition-guide') }}">Mohali and Panchkula guide</a> adds local timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibc-demo">Testing an IB tutor in the free demo</h2>
  <ol>
    <li><strong>Bring a marked school test.</strong> A DP tutor should read the markscheme codes and say where method marks went within minutes.</li>
    <li><strong>Ask about versions.</strong> Which syllabus does your child's exam session use, and what changed recently in maths or the Extended Essay?</li>
    <li><strong>Command terms.</strong> Ask what "show that", "hence" or "evaluate" demand. Vague answers are a warning.</li>
    <li><strong>The IA line.</strong> Listen for "I teach the concepts and criteria; the writing is yours."</li>
    <li><strong>A plan to the calendar.</strong> You should leave with four to six weeks in outline, tied to school deadlines.</li>
  </ol>
  <p>
    You receive two or three matched tutors, see each fee before the demo, and can switch later for free. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibc-start">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The programme, level,
    number of subjects and the tutor's travel across the tricity set the figure; see the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-chandigarh') }}">tricity
    tuition fees</a>.
  </p>
  <p>
    Send the programme, the year, the subject and its level (for example "DP1, Chemistry HL"), your sector or phase and your
    slots. The first class is a <a href="{{ url('/demo-class') }}">free demo</a>. Browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>; IB teachers can see <a href="{{ url('/tuition-jobs/chandigarh') }}">tuition
    jobs in the tricity</a>.
  </p>
  </section>

  </div>
</article>
