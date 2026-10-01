{{--
  Board hub for "IB tutor Lucknow". Author: Ajay Vatsyayan (role: IB, IGCSE
  and ISC maths). No anecdotes, years or results are claimed for him. No
  schools are named.

  Board facts restate only what ib-tutor-gurgaon states, which cites ibo.org
  (read 1 Oct 2026): PYP ages 3-12, six transdisciplinary themes, exhibition
  in the final year, no external exams; MYP ages 11-16, five years (shorter
  versions allowed), eight subject groups, criteria-based, personal project of
  about 25 hours via eAssessment, optional two-hour on-screen exams in some
  groups; DP ages 16-19, two years, six subjects, normally three (no more than
  four) HL, 240 h HL / 150 h SL, grades 1-7, EE + TOK up to three points,
  maximum 45, 24 points among the passing conditions, IA in every subject
  (teacher-marked, IB-moderated); EE 4,000-word limit, three reflection
  sessions ending in a viva voce, 500-word reflective statement (first
  assessment 2027); TOK exhibition of three objects plus a 1,600-word essay on
  one of six prescribed titles; IB maths revised for first teaching from
  August 2027. No exam dates.

  Local detail only from the city hub (lucknow.blade.php: "a smaller number of
  students take the IB or Cambridge IGCSE"; the specialist gap: if the right IB
  teacher lives across the city, an online lesson avoids a long trip; Red
  Line; Blue Line under construction) and database/seo-content/zones/
  lucknow.json (Sushant Golf City tip: online for IB Maths when the right tutor
  lives across the city in Gomti Nagar or Aliganj). No share of IB schools is
  claimed. Fee wording is the approved sentence. FAQs render from
  faqs/ib-tutor-lucknow.php. Area links render only when that Lucknow area
  page exists and is active.
--}}
@php
  $lkAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $lkA = function (string $slug, string $label) use ($lkAreaSlugs) {
      return in_array($slug, $lkAreaSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ibl-guide" aria-labelledby="iblGuideTitle">
  <h2 id="iblGuideTitle">IB tutors in Lucknow: closing the specialist gap for PYP, MYP and Diploma students</h2>

  <p class="nx-guide__lede">
    In Lucknow a smaller number of students take the IB, beside a city where CBSE, CISCE and the UP Board dominate. That
    creates what our city guide calls the specialist gap: the tutor who knows your child's exact Diploma course may
    live on the far side of the Gomti, and a weekly cross-town trip is hard to sustain. This page helps you plan around
    that. It explains the three IB programmes, how Diploma points add up, what a tutor may and may not do on
    coursework, which subjects Lucknow families ask about, and how home and online lessons combine in each zone. The
    author is Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths with NXTutors. For the programmes in more depth,
    read <a href="{{ url('/ib-tutor-gurgaon') }}">how the IB works</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibl-city">IB in Lucknow</a> ·
    <a href="#ibl-diff">How IB assessment differs</a> ·
    <a href="#ibl-glance">Programmes at a glance</a> ·
    <a href="#ibl-points">Diploma points</a> ·
    <a href="#ibl-hl">HL load</a> ·
    <a href="#ibl-young">Younger children</a> ·
    <a href="#ibl-join">Joining the Diploma</a> ·
    <a href="#ibl-core">Coursework limits</a> ·
    <a href="#ibl-subjects">Subjects</a> ·
    <a href="#ibl-zones">Zones</a> ·
    <a href="#ibl-demo">Demo</a> ·
    <a href="#ibl-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibl-city">The IB in Lucknow's school mix</h2>
  <p>
    The <a href="{{ url('/city/lucknow') }}">Lucknow tutors page</a> sets out the city's boards: CBSE widely followed,
    a strong and long-standing CISCE presence, many UP Board families, and a smaller number of IB and Cambridge IGCSE
    students. We give no figures for any of them. For IB families the practical upshot is in our zone research: for
    senior specialist subjects such as IB maths, online lessons make sense when the right tutor lives across the city,
    for example in Gomti Nagar or Aliganj while the family is in a Shaheed Path township.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibl-diff">How IB assessment differs from CBSE, ICSE and the UP Board</h2>
  <p>
    Generally speaking, the Indian boards examine a prescribed syllabus chiefly through final papers. The IB's younger
    programmes mark work against published criteria in every subject, and the Diploma combines final exams with an
    internally assessed component in each subject, marked by the school and moderated by the IB. Command terms such as
    "evaluate" or "show that" carry precise meanings. A tutor who is strong for ISC or CBSE maths may handle IB content
    comfortably and still misread what a markscheme rewards, so ask about recent IB teaching, not general experience.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibl-glance">The three programmes at a glance</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>PYP, MYP and DP, as the IB describes them, with the usual tutoring request</caption>
    <thead>
      <tr><th scope="col">Programme</th><th scope="col">Span</th><th scope="col">Assessment</th><th scope="col">What families usually ask a tutor for</th></tr>
    </thead>
    <tbody>
      <tr><td>PYP</td><td>Ages 3 to 12</td><td>Inquiry units in six transdisciplinary themes; a final-year exhibition; no external exams</td><td>Reading, writing and arithmetic fluency</td></tr>
      <tr><td>MYP</td><td>Ages 11 to 16; five years, or fewer where the school shortens it</td><td>Criteria in eight subject groups; the personal project; on-screen exams if the school chooses</td><td>Maths and sciences near the end; writing against criteria</td></tr>
      <tr><td>DP</td><td>Ages 16 to 19; two years</td><td>Six subjects graded 1 to 7, an internal component in each, final exams, and the core</td><td>One HL subject, often maths or a science; IA understanding within the rules</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    MYP students finish with a personal project of about 25 hours, moderated through eAssessment. In the final MYP
    years, maths and science fluency starts to shape which Diploma subjects, and which levels, are realistic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibl-points">How Diploma points add up</h2>
  <p>
    Six subjects, each graded from 1 to 7, give up to 42 points. The Extended Essay and Theory of Knowledge together
    can add up to three more, which makes 45 the maximum. Reaching at least 24 points is one of the passing
    conditions, but not the only one, so a student should read the school's summary of the full rules. In practice,
    each grade in an HL subject is worth the same single point as a grade in an SL subject, yet takes far more teaching
    time, which is why a tutor's hours usually go furthest where a point is closest to being won or lost.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibl-hl">Higher Level load, and where a tutor fits in the two years</h2>
  <p>
    Diploma students normally take three subjects at Higher Level and never more than four. The IB recommends 240
    teaching hours for HL and 150 for SL. That gap shows up early: the first term of DP1 brings HL algebra, new
    scientific language and the first unit tests. By the middle of DP1, internal assessment topics and Extended Essay
    research start to overlap with lessons, and DP2 adds TOK tasks and school mocks that feed predicted grades. A tutor
    who begins in DP1 can fill gaps and build a weekly past-paper habit; one who begins after mocks can only target
    the weakest papers. The IB's maths courses are revised for first teaching from August 2027, so confirm which
    version your child is studying before tutoring starts.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibl-young">Younger IB children: when a tutor helps and when it does not</h2>
  <p>
    A PYP child has no external exams, so a tutor is not preparing anyone for a paper. Help is worth paying for when
    something basic is slipping: tables, place value, fractions, reading for longer than a few minutes, or writing a
    paragraph that holds together. It is also useful for a child who has just moved from a textbook-based school and
    is unsettled by open questions with several acceptable answers. In those cases one or two short sessions a week at
    home, close to where you live, usually suit better than a specialist across town. What does not help is turning
    inquiry units into drill worksheets.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibl-join">Joining the Diploma from ISC-style or CBSE schooling</h2>
  <p>
    Students who arrive in DP1 from an Indian board usually know a lot of content and are new to almost everything
    about how it is assessed. The first eight weeks are where a tutor helps most. Three things to build: reading
    command terms precisely, writing explanations rather than only final answers, and working with the approved
    calculator from day one. For HL maths, fluent algebra is needed from the first weeks, so any
    weakness there is the first thing to repair. A tutor who sets short past-paper questions in week one, marks them against the
    markscheme and logs each lost mark gives the clearest picture of what to fix.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibl-core">IA, Extended Essay and TOK: what a tutor may do</h2>
  <ul>
    <li><strong>Extended Essay:</strong> independent research, up to 4,000 words, supervised at school; in the version first assessed in 2027, three reflection sessions end in a short viva voce, and the student writes a 500-word reflective statement.</li>
    <li><strong>Theory of Knowledge:</strong> an exhibition of three objects, assessed in school and moderated, plus a 1,600-word essay on one of six titles the IB sets for each session.</li>
    <li><strong>Internal assessment:</strong> an exploration in maths, an investigation in the sciences, other formats elsewhere, all marked to published criteria.</li>
  </ul>
  <p>
    A tutor may teach the subject that sits behind a topic, explain each criterion and question a student's reasoning.
    A tutor may not choose the topic, write or edit drafts, or do the analysis. The viva exists partly to confirm the
    student understands their own work. The <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and
    IGCSE parent's guide</a> discusses the criteria further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibl-subjects">IB subjects and our Lucknow pages</h2>
  <ul>
    <li><strong>Maths AA or AI, SL or HL:</strong> <a href="{{ url('/ib-maths-tutor') }}">IB maths tutors</a>, the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA versus AI explainer</a>, and <a href="{{ url('/maths-home-tutor-lucknow') }}">maths home tutors in Lucknow</a>.</li>
    <li><strong>Physics:</strong> <a href="{{ url('/physics-home-tutor-lucknow') }}">physics home tutors in Lucknow</a> and the <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics guide</a>.</li>
    <li><strong>Chemistry and biology:</strong> <a href="{{ url('/chemistry-home-tutor-lucknow') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-lucknow') }}">biology</a> tutors; give the level.</li>
    <li><strong>English and other subjects:</strong> <a href="{{ url('/english-home-tutor-lucknow') }}">English home tutors in Lucknow</a>; for economics or a language, name the course.</li>
  </ul>
  <p>
    Coming into the Diploma from ISC-track or CBSE schooling? See
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching from CBSE to IB or IGCSE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibl-zones">Home and online IB lessons across Lucknow's zones</h2>
  <ul>
    <li><strong><a href="{{ url('/city/lucknow/zone/gomti-nagar-indira-nagar-chinhat') }}">Gomti Nagar, Indira Nagar and Chinhat</a>.</strong> {!! $lkA('gomti-nagar-extension', 'Gomti Nagar Extension') !!} has no station; ask the gate for a standing pass so a regular tutor is not stopped each visit.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/mahanagar-aliganj-jankipuram') }}">Mahanagar, Aliganj and Jankipuram</a>.</strong> {!! $lkA('kapoorthala', 'Kapoorthala') !!} is within reach of IT College station; in {!! $lkA('jankipuram', 'Jankipuram') !!}, a tutor from north of the river is easier to keep.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/hazratganj-lalbagh-aminabad') }}">Hazratganj, Lalbagh and Aminabad</a>.</strong> {!! $lkA('lalbagh', 'Lalbagh') !!} is served by Sachivalaya station, so a specialist who rides the Red Line can walk the last stretch.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/alambagh-ashiyana-rajajipuram') }}">Alambagh, Ashiyana and Rajajipuram</a>.</strong> For {!! $lkA('lda-colony', 'LDA Colony') !!}, Krishna Nagar station plus a short auto ride widens the pool.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/sushant-golf-city-vrindavan-yojana-telibagh') }}">Sushant Golf City, Vrindavan Yojana and Telibagh</a>.</strong> {!! $lkA('sushant-golf-city', 'Sushant Golf City') !!} has no metro; for IB maths, online lessons make sense when the right tutor lives in Gomti Nagar or Aliganj.</li>
  </ul>
  <p>
    Online IB lessons need the tutor to see written working live, by tablet, shared whiteboard or a camera over the
    notebook, and the student should use their own approved calculator. Many families keep one home lesson and one
    online session a week with the same tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibl-demo">What to try in the free demo</h2>
  <ol>
    <li>Hand over a marked unit test and ask where marks were lost against the markscheme.</li>
    <li>Ask which version of the syllabus your child's exam session follows.</li>
    <li>Ask the difference between "show that" and "hence".</li>
    <li>Ask exactly where their help on an IA or the Extended Essay stops.</li>
    <li>Ask for a plan for the next month that fits school deadlines.</li>
  </ol>
  <p>
    You see two or three matched tutors with fees before the demo, and can change tutor later at no cost. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibl-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For IB in Lucknow, the
    programme, level, number of subjects and the tutor's travel decide the fee; see the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-lucknow') }}">Lucknow
    tuition fees</a>.
  </p>
  <p>
    Send the programme, year, subject, level and your locality, with free slots. The first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>; IB
    teachers can see <a href="{{ url('/tuition-jobs/lucknow') }}">tuition jobs in Lucknow</a>.
  </p>
  </section>

  </div>
</article>
