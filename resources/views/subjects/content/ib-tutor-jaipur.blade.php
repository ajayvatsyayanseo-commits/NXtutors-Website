{{--
  Board hub for "IB tutor Jaipur". Author: Ajay Vatsyayan (role: IB, IGCSE and
  ISC maths). No anecdotes, years or results are claimed for him. No schools
  are named.

  Board facts restate only what ib-tutor-gurgaon states, which cites ibo.org
  (read 1 Oct 2026): PYP ages 3-12, six transdisciplinary themes, exhibition
  in the final year; MYP ages 11-16, five years (shorter versions allowed),
  eight subject groups (language and literature, language acquisition,
  individuals and societies, sciences, mathematics, arts, physical and health
  education, design), personal project of about 25 hours, eAssessment optional
  except the personal project, two-hour on-screen exams in some groups; DP
  ages 16-19, six subjects, normally three (not more than four) HL, 240 h HL /
  150 h SL, grades 1-7, EE + TOK up to three points, maximum 45, 24 points
  among the passing conditions, IA in every subject; EE 4,000-word limit,
  three reflection sessions ending in a viva voce, 500-word reflective
  statement (first assessment 2027); TOK exhibition of three objects and a
  1,600-word essay on one of six prescribed titles; IB maths revised for
  first teaching from August 2027. No exam dates.

  Local detail only from the city hub (jaipur.blade.php: "in a smaller group,
  the IB or Cambridge IGCSE"; IB/IGCSE card; online reach matters most for IB
  and IGCSE; Pink Line; Orange Line under construction) and
  database/seo-content/zones/jaipur.json. No share of IB schools is claimed.
  Fee wording is the approved sentence. FAQs render from
  faqs/ib-tutor-jaipur.php. Area links render only when that Jaipur area page
  exists and is active.
--}}
@php
  $jpAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jpA = function (string $slug, string $label) use ($jpAreaSlugs) {
      return in_array($slug, $jpAreaSlugs, true)
          ? '<a href="' . e(url('/city/jaipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ibj-guide" aria-labelledby="ibjGuideTitle">
  <h2 id="ibjGuideTitle">IB tutors in Jaipur: matching the programme, the subject and the level</h2>

  <p class="nx-guide__lede">
    Jaipur's IB students are a smaller group beside the city's CBSE, RBSE and CISCE families, and that changes the
    search. A request that says only "IB tutor" cannot be matched well; one that says "MYP 4 maths" or "DP2 Chemistry
    HL" can. This page explains what each IB programme asks for, how IB assessment differs from the boards most Jaipur
    tutors teach, which subjects families usually bring a tutor in for, how tutors reach each zone, and what to test in
    the free demo. Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors, is the author; our
    <a href="{{ url('/ib-tutor-gurgaon') }}">guide to how the IB works</a> covers the programmes at greater length.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibj-ask">What to tell us</a> ·
    <a href="#ibj-boards">IB beside CBSE and RBSE</a> ·
    <a href="#ibj-pyp">PYP</a> ·
    <a href="#ibj-myp">MYP</a> ·
    <a href="#ibj-dp">Diploma</a> ·
    <a href="#ibj-year">The DP calendar</a> ·
    <a href="#ibj-week">A weekly rhythm</a> ·
    <a href="#ibj-rules">Coursework rules</a> ·
    <a href="#ibj-subjects">Subjects</a> ·
    <a href="#ibj-zones">Zones</a> ·
    <a href="#ibj-demo">Demo</a> ·
    <a href="#ibj-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibj-ask">Four things to tell us in an IB request</h2>
  <ol>
    <li><strong>The programme:</strong> Primary Years, Middle Years or the Diploma.</li>
    <li><strong>The year:</strong> for example MYP 5 or DP1, because the needs change sharply from year to year.</li>
    <li><strong>The subject and level:</strong> Diploma subjects are taken at Standard or Higher Level, and maths comes as Analysis and Approaches or Applications and Interpretation.</li>
    <li><strong>What is due:</strong> an internal assessment, mocks, or simply weekly classwork.</li>
  </ol>
  <p>
    With those four answers we can look for a tutor who has taught that exact course, first near your locality, then
    among tutors who already travel to your part of the city, then across Jaipur and online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibj-boards">How the IB differs from CBSE and RBSE</h2>
  <p>
    Our <a href="{{ url('/city/jaipur') }}">Jaipur tutors page</a> describes the city's four broad systems: CBSE, RBSE,
    CISCE and, in a smaller group, the IB or Cambridge IGCSE. We do not put a number on any of them. In general terms,
    CBSE and the Rajasthan board examine a prescribed syllabus mainly through final papers. The IB judges much more
    work during the course: criteria-based tasks in the younger programmes, and an internally assessed component in
    every Diploma subject, marked by the teacher and moderated by the IB. A tutor who knows CBSE or RBSE thoroughly
    may never have worked to IB criteria, so ask directly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibj-pyp">The Primary Years Programme</h2>
  <p>
    The IB describes the PYP as a framework for ages 3 to 12, built around six transdisciplinary themes and taught
    through units of inquiry, ending with an exhibition in the final year. There are no external exams. A PYP tutor's
    job is quiet and important: secure tables, place value and fractions, reading stamina, and the habit of writing a
    clear paragraph. A child arriving from a textbook-based school often needs time to accept questions with more than
    one good answer. Worksheets of drill miss the point of the programme.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibj-myp">The Middle Years Programme</h2>
  <p>
    The MYP runs for five years, ages 11 to 16, though schools may offer a shorter version. Students work across eight
    subject groups: language and literature, language acquisition, individuals and societies, sciences, mathematics,
    arts, physical and health education, and design. Each is marked against published criteria. In the last year,
    every student completes a personal project of about 25 hours, which is moderated through eAssessment; schools may
    also enter students for two-hour on-screen exams in some subjects, at their own choice.
  </p>
  <p>
    MYP students usually need two kinds of help: maths and science content in MYP 4 and 5, when fluency starts to
    decide Diploma choices, and writing to the criteria, such as explaining a method or evaluating an experiment. A
    good MYP tutor reads the task sheet before teaching anything.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibj-dp">The Diploma Programme</h2>
  <p>
    The Diploma is a two-year course for ages 16 to 19. Students take six subjects across the IB's academic areas,
    normally three at Higher Level and at most four. The IB recommends 240 teaching hours at HL and 150 at SL. Subjects
    are graded 1 to 7, and the Extended Essay with Theory of Knowledge adds up to three points, so the maximum is 45;
    at least 24 points is one of several passing conditions. The IB's maths courses are revised for first teaching
    from August 2027, so check which version your child follows.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibj-year">The Diploma calendar and where a tutor fits</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Two Diploma years, and the help that fits each stretch</caption>
    <thead>
      <tr><th scope="col">Stretch</th><th scope="col">What the student is juggling</th><th scope="col">Ask the tutor to</th></tr>
    </thead>
    <tbody>
      <tr><td>First term of DP1</td><td>The jump from Grade 10; HL vocabulary and algebra</td><td>Close gaps fast; set a weekly past-paper habit</td></tr>
      <tr><td>Rest of DP1</td><td>Topic tests; IA and EE topics taking shape</td><td>Teach the subject behind the chosen topic; keep content moving</td></tr>
      <tr><td>Early DP2</td><td>IA drafts, the essay, TOK and normal lessons at once</td><td>Keep a written plan so no subject is dropped</td></tr>
      <tr><td>School mocks</td><td>Grades predicted for university applications</td><td>Timed papers marked with official markschemes; error logs</td></tr>
      <tr><td>Final session</td><td>Papers in every subject within a few weeks</td><td>Short, targeted revision of the weakest papers</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibj-week">A weekly rhythm that works for a DP student</h2>
  <p>
    Most Diploma students who use a tutor need one subject handled well rather than six handled thinly. A sensible
    pattern is one or two sessions a week in the hardest HL subject. The first session of the week starts from school:
    the latest unit test, the markscheme comments, or the criteria for the next assessed task. The tutor repairs one
    idea, then sets past-paper questions on it for the student to attempt alone. The second session, often shorter
    and sometimes online, marks those questions together and logs each lost mark by cause: a misread command term, an
    algebra slip, a missing unit, a weak explanation. Over a term the log shows whether the trouble is content or
    technique, which tells you what kind of help to keep paying for. In weeks when an internal assessment is due, the
    tutor teaches only the subject behind it and leaves the writing alone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibj-rules">IA, Extended Essay and TOK: where help must stop</h2>
  <p>
    The Extended Essay is independent research of up to 4,000 words, guided by a school supervisor. In the version
    first assessed in 2027 there are three reflection sessions, the last a short viva voce, and a 500-word reflective
    statement. TOK is assessed through an exhibition of three objects and a 1,600-word essay on one of six prescribed
    titles. A tutor may teach the underlying subject, explain the criteria and question a student's thinking; a tutor
    may not choose the topic, write or edit drafts, or do the analysis. If a tutor offers to "improve" an IA, decline.
    The <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE parent's guide</a> explains
    the criteria.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibj-subjects">IB subjects and our Jaipur pages</h2>
  <ul>
    <li><strong>Maths AA or AI:</strong> the most frequent Diploma request. See <a href="{{ url('/ib-maths-tutor') }}">IB maths tutors</a>, the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA or AI guide</a>, and local <a href="{{ url('/maths-home-tutor-jaipur') }}">maths home tutors in Jaipur</a>.</li>
    <li><strong>Physics:</strong> <a href="{{ url('/physics-home-tutor-jaipur') }}">physics home tutors in Jaipur</a> and the <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics guide</a>.</li>
    <li><strong>Chemistry and biology:</strong> <a href="{{ url('/chemistry-home-tutor-jaipur') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-jaipur') }}">biology</a>; state SL or HL.</li>
    <li><strong>English and other subjects:</strong> <a href="{{ url('/english-home-tutor-jaipur') }}">English home tutors</a>; for economics or a language, give the exact course name.</li>
  </ul>
  <p>
    Joining the Diploma from CBSE or ICSE? Read <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching
    from CBSE to IB or IGCSE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibj-zones">IB tutors across Jaipur's zones, at home or online</h2>
  <ul>
    <li><strong><a href="{{ url('/city/jaipur/zone/c-scheme-bani-park-vidhyadhar-nagar') }}">C-Scheme, Bani Park and Vidhyadhar Nagar</a>.</strong> {!! $jpA('civil-lines', 'Civil Lines') !!} has a Pink Line stop, so a specialist can ride in from Mansarovar or Shyam Nagar.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/raja-park-jawahar-nagar-bapu-nagar') }}">Raja Park, Jawahar Nagar and Bapu Nagar</a>.</strong> No metro; {!! $jpA('adarsh-nagar', 'Adarsh Nagar') !!} has some city bus service, and {!! $jpA('tilak-nagar', 'Tilak Nagar') !!} has newer multi-storey projects where the tutor registers at the gate.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/vaishali-nagar-west-jaipur') }}">Vaishali Nagar and West Jaipur</a>.</strong> {!! $jpA('nirman-nagar', 'Nirman Nagar') !!} is near Pink Line stations, which widens the pool.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/mansarovar-sanganer') }}">Mansarovar and Sanganer</a>.</strong> Around {!! $jpA('gopalpura-bypass', 'Gopalpura Bypass') !!} the student crowd fills the road through the day, so late-evening or weekend slots work better.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/malviya-nagar-jagatpura-tonk-road') }}">Malviya Nagar, Jagatpura and Tonk Road</a>.</strong> {!! $jpA('jagatpura', 'Jagatpura') !!} is mostly flats in gated complexes; share the tower and flat number before the demo.</li>
  </ul>
  <p>
    Because IB specialists for a given HL subject are few in any one locality, many Jaipur families combine a weekend
    home lesson with weekday online sessions. Online maths and science need the tutor to see working live, through a
    tablet, a shared whiteboard or a camera over the notebook. Jaipur's roads shape the choice too: crossing Tonk Road
    or Ajmer Road at the evening peak is slow, and the Orange Line is still under construction, so plan only around
    routes that run today. A PYP or younger MYP child, by contrast, usually gains more from a tutor at the table.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibj-demo">What to test in the free demo</h2>
  <ol>
    <li>Give the tutor a marked school test and ask where the method marks went.</li>
    <li>Ask which syllabus version your child's exam session uses.</li>
    <li>Ask what "hence" and "evaluate" require in an answer.</li>
    <li>Ask where they draw the line on IA and EE help, and listen for a clear one.</li>
    <li>Ask for a four- to six-week outline tied to school deadlines.</li>
  </ol>
  <p>
    You get two or three matched tutors with fees shown before the demo, and switching later is free. Tutors who join
    go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is published.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibj-fees">Fees and starting</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. In Jaipur the programme,
    level, number of subjects and travel at your slot set the fee; see the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-jaipur') }}">Jaipur tuition fees</a>.
  </p>
  <p>
    Send the four details above with your locality and free slots, and the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>; IB
    teachers can find <a href="{{ url('/tuition-jobs/jaipur') }}">tuition jobs in Jaipur</a>.
  </p>
  </section>

  </div>
</article>
