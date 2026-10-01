{{--
  Board page for "IB tutor Ahmedabad" (PYP, MYP, DP). Author: Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths). No anecdotes, years or results are claimed
  for him. No schools or societies are named.

  IB facts are reworded from the Gurgaon board hub (ib-tutor-gurgaon), which
  cites ibo.org pages and IB PDFs (read 1 Oct 2026): PYP ages 3-12, six
  transdisciplinary themes, units of inquiry, final-year exhibition; MYP ages
  11-16, five years (shorter versions allowed), eight subject groups,
  criteria-based assessment, personal project of about 25 hours, optional
  two-hour on-screen exams; DP ages 16-19, six subjects, three (at most four)
  at HL, 240 h HL / 150 h SL, grades 1-7, EE + TOK up to three points, 45
  maximum, at least 24 points among passing conditions, IA in every subject
  moderated by the IB; EE (first assessment 2027) up to 4,000 words, three
  reflection sessions ending in a viva voce, 500-word reflective statement;
  TOK exhibition (three objects) and 1,600-word essay on one of six prescribed
  titles; maths AA/AI at SL/HL, revised course first taught August 2027. No
  exam dates.
  Local detail only from the Ahmedabad city hub view (four kinds of
  examination; IB Diploma mixes final exams with internally assessed coursework;
  online lessons open up teachers across India, which matters most for IB and
  IGCSE), zones/ahmedabad.json and ahmedabad-zone-guides.json (Prahlad Nagar,
  Bopal & Shela: nearby home tutor for core subjects plus online for specialist
  ones; Paldi and Ambawadi: specialist mix of home and online; Shahibaug: a
  west-bank specialist online). No claim is made about where IB families live.
  Area links render only for active Ahmedabad areas. Fee wording is the
  approved sentence. FAQs render from faqs/ib-tutor-ahmedabad.php.
--}}
@php
  $ibaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ibaA = function (string $slug, string $label) use ($ibaSlugs) {
      return in_array($slug, $ibaSlugs, true)
          ? '<a href="' . e(url('/city/ahmedabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ibaGuideTitle">
  <h2 id="ibaGuideTitle">IB tutors in Ahmedabad: four questions first, then home, online or both</h2>

  <p class="nx-guide__lede">
    The IB is one of four kinds of examination Ahmedabad families sit, and it is the one where "a good maths tutor"
    is least likely to be enough. An IB student is judged against published criteria, completes coursework in every
    Diploma subject under strict rules, and answers questions built on command terms. The right tutor knows the exact
    course and level, and the right arrangement may mix home sessions with online ones, because specialists for a
    particular HL subject are spread across the city and beyond. This page explains what to tell a tutor, how the
    three IB programmes work, how IB assessment compares with GSEB and CBSE, and how tutoring works in each zone. It is
    written by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#iba-four">Four questions</a> ·
    <a href="#iba-progs">The programmes</a> ·
    <a href="#iba-compare">IB, GSEB and CBSE</a> ·
    <a href="#iba-dp">Inside the Diploma</a> ·
    <a href="#iba-rules">Coursework rules</a> ·
    <a href="#iba-subjects">Subjects</a> ·
    <a href="#iba-zones">Zones</a> ·
    <a href="#iba-demo">The demo</a> ·
    <a href="#iba-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="iba-four">Four questions to answer before you ask for a tutor</h2>
  <ol>
    <li><strong>Which programme?</strong> Primary Years, Middle Years or the Diploma. Schools may offer one, two or all three.</li>
    <li><strong>Which year?</strong> "MYP 5" or "DP1" changes what help looks like more than the subject does.</li>
    <li><strong>Which subject and course?</strong> For maths, Analysis and Approaches or Applications and Interpretation; for languages, the exact course.</li>
    <li><strong>Which level?</strong> Higher or Standard. HL courses go much further.</li>
  </ol>
  <p>
    A request like "DP2, Physics HL, struggling with data questions" lets us shortlist tutors who have taught exactly
    that. "IB science" does not.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iba-progs">The three programmes in brief</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>PYP, MYP and DP, and the help each one usually needs</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">Ages</th><th scope="col">Structure</th><th scope="col">Where a tutor fits</th></tr>
    </thead>
    <tbody>
      <tr><td>PYP</td><td>3 to 12</td><td>Units of inquiry under six transdisciplinary themes; an exhibition in the last year; no external exams</td><td>Secure arithmetic and reading; comfort with open questions</td></tr>
      <tr><td>MYP</td><td>11 to 16</td><td>Five years (schools may shorten it), eight subject groups marked against criteria, a personal project of about 25 hours, optional on-screen exams</td><td>Maths and sciences in the later years; writing to criteria</td></tr>
      <tr><td>DP</td><td>16 to 19</td><td>Two years, six subjects, internal assessment in each, final exams, plus EE, TOK and CAS</td><td>HL subjects; organising coursework within the rules</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iba-compare">How IB assessment compares with GSEB and CBSE</h2>
  <p>
    Most Ahmedabad students study under GSEB or CBSE, both of which build to a public board exam set from prescribed
    textbooks. Three features of the IB change how a tutor should teach:
  </p>
  <p>
    <strong>Criteria and markbands.</strong> MYP tasks and Diploma coursework are judged against published criteria,
    each with levels. A student needs to know what the top level of a criterion actually looks like on the page, and
    a tutor should read the criteria with them before teaching anything.
  </p>
  <p>
    <strong>Coursework in every Diploma subject.</strong> Each subject has an internally assessed part, marked by the
    teacher and moderated by the IB, with its own deadline. This work overlaps with ordinary teaching for months.
  </p>
  <p>
    <strong>Command terms.</strong> "Describe", "explain", "evaluate" and "show that" each require a specific kind of
    answer, and markschemes reward that precisely. A student from a board school often knows the content and loses
    marks on the instruction. Our guide on <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching
    from CBSE to IB or IGCSE</a> has a bridging plan that suits GSEB students as well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iba-dp">Inside the Diploma: subjects, hours and points</h2>
  <p>
    Diploma students take six subjects across the IB's academic areas. Three are normally taken at Higher Level, and
    no more than four may be. The IB recommends 240 teaching hours for each HL subject and 150 for each SL subject,
    which is why HL maths, physics, chemistry and economics generate most tutoring requests. Subjects are graded from 1
    to 7, and the Extended Essay together with Theory of Knowledge can add up to three points, for a total of 45. At
    least 24 points is one of the conditions for the diploma, alongside others the IB sets.
  </p>
  <p>
    For maths, the course comes in two forms, Analysis and Approaches and Applications and Interpretation, each at SL
    or HL. The IB's revised maths courses begin teaching in August 2027, so check which version your child follows.
    Our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA vs AI guide</a> and the national
    <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page explain the differences.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A Diploma timeline and where tutoring helps</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">What is happening</th><th scope="col">Useful tutoring</th></tr>
    </thead>
    <tbody>
      <tr><td>Early DP1</td><td>The step up to HL; first unit tests</td><td>Close algebra and science gaps; topic-wise past questions</td></tr>
      <tr><td>Mid DP1 to early DP2</td><td>IA, EE and TOK work alongside teaching</td><td>Subject teaching behind chosen topics; a written plan so content keeps moving</td></tr>
      <tr><td>Before school mocks</td><td>Mocks inform predicted grades</td><td>Timed papers against official markschemes</td></tr>
      <tr><td>Final session</td><td>Exams in every subject</td><td>Narrow revision on the weakest papers</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iba-rules">Coursework rules every family should know</h2>
  <p>
    The Extended Essay is a piece of independent research of up to 4,000 words, supervised at school. For essays
    assessed from 2027, the student meets the supervisor for three reflection sessions, the final one a short viva
    voce, and writes a 500-word reflective statement. Theory of Knowledge is assessed through an exhibition built
    around three objects and a 1,600-word essay answering one of six titles prescribed for the session.
  </p>
  <ul>
    <li><strong>A tutor can</strong> teach the subject knowledge behind a topic, explain what each criterion rewards, and ask questions that help a student narrow a research question.</li>
    <li><strong>A tutor cannot</strong> choose the topic, write or edit any draft, or carry out the analysis.</li>
  </ul>
  <p>
    The viva exists partly to confirm that the student understands their own work. Anyone offering to improve the
    writing of an IA or EE is creating a risk to the diploma, not reducing one.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iba-younger">Younger IB students: MYP and PYP</h2>
  <p>
    Not every IB request is about the Diploma. In the MYP, the last two years matter most, because a student's
    fluency in algebra and confidence in the sciences shape which Diploma subjects, and which levels, are realistic.
    A tutor here should start from the task sheet and its criteria, teach the content the task needs, and help the
    student plan long pieces of work, including the personal project, without writing any of it. In the PYP there are
    no external exams, so the job is simply to make the basics solid: times tables, place value, fractions, reading
    for longer and writing a clear paragraph. A child arriving from a GSEB or CBSE primary school may also need time
    to get used to questions that have more than one good answer.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iba-subjects">Subjects and where to look</h2>
  <ul>
    <li><strong>Maths AA or AI:</strong> <a href="{{ url('/ib-maths-tutor') }}">IB maths tutors</a>, or IB-experienced tutors among <a href="{{ url('/maths-home-tutor-ahmedabad') }}">maths home tutors in Ahmedabad</a>.</li>
    <li><strong>Physics:</strong> <a href="{{ url('/physics-home-tutor-ahmedabad') }}">physics home tutors in Ahmedabad</a>; the <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics guide</a> covers SL, HL, the IA and EE.</li>
    <li><strong>Chemistry and biology:</strong> <a href="{{ url('/chemistry-home-tutor-ahmedabad') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-ahmedabad') }}">biology</a> home tutors in Ahmedabad.</li>
    <li><strong>English and language courses:</strong> <a href="{{ url('/english-home-tutor-ahmedabad') }}">English home tutors in Ahmedabad</a>.</li>
    <li><strong>Economics, business management and MYP subjects:</strong> matched on request.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">parent's guide to IB and IGCSE tutoring</a>
    compares the two international routes and applies wherever you live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iba-zones">Home or online, zone by zone</h2>
  <p>
    Online lessons open up teachers from across India, which matters most for IB subjects; our zone notes also show
    many families keeping a nearby home tutor for regular work and adding an online specialist. How that splits
    depends on where you live.
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/satellite-vastrapur-bodakdev') }}">Satellite, Vastrapur and Bodakdev</a>:</strong> a tutor on the Blue Line can ride to Thaltej Gam, Thaltej or Gurukul Road and take an auto to {!! $ibaA('bodakdev', 'Bodakdev') !!} or {!! $ibaA('thaltej', 'Thaltej') !!}; towers want the tutor registered before the demo.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/prahlad-nagar-bopal-shela') }}">Prahlad Nagar, Bopal and Shela</a>:</strong> no metro; in {!! $ibaA('shela', 'Shela') !!} and {!! $ibaA('prahlad-nagar', 'Prahlad Nagar') !!}, a local tutor for core subjects plus an online HL specialist is the pattern our zone notes describe. Allow time for gate checks at township towers.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/navrangpura-paldi-ellisbridge') }}">Navrangpura, Paldi and Ellisbridge</a>:</strong> the metro interchange makes it easy to reach; families in {!! $ibaA('ambawadi', 'Ambawadi') !!} often mix a weekly home lesson with online sessions for a specialist.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/naranpura-gota-chandkheda') }}">Naranpura, Gota and Chandkheda</a>:</strong> {!! $ibaA('gota', 'Gota') !!} has no station, so a tutor who already travels that side of SG Highway is the practical choice.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/maninagar-isanpur-kankaria') }}">Maninagar</a>, <a href="{{ url('/city/ahmedabad/zone/nikol-naroda-bapunagar') }}">Nikol and Naroda</a>, <a href="{{ url('/city/ahmedabad/zone/shahibaug-asarwa-meghaninagar') }}">Shahibaug</a>:</strong> on the east bank, an IB specialist from the west side is often easier online than in person.</li>
  </ul>
  <p>
    For online maths and sciences, insist that the tutor sees working live and that your child uses their own
    approved calculator. Navratri and Diwali evenings change routines in the autumn, so agree session times for those
    weeks at the start.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iba-demo">What the free demo should prove</h2>
  <ol>
    <li><strong>Markscheme fluency:</strong> give the tutor a marked test and ask where the marks went.</li>
    <li><strong>Course version:</strong> they should know which syllabus your child's session uses.</li>
    <li><strong>Command terms:</strong> ask what "evaluate" asks for that "describe" does not.</li>
    <li><strong>Coursework boundary:</strong> listen for a clear statement that the writing stays your child's.</li>
    <li><strong>A plan:</strong> the next six weeks, built on your school's calendar rather than a board-exam season.</li>
  </ol>
  <p>
    You get two or three matched tutors and see each fee before the demo; switching tutor later is free. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iba-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. In Ahmedabad, the
    programme, the level and the tutor's journey move the figure. See the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-ahmedabad') }}">home tuition fees in Ahmedabad</a>.
  </p>
  <p>
    Answer the four questions above, add your locality and slots, and the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. For a longer look at each programme, read our
    <a href="{{ url('/ib-tutor-gurgaon') }}">IB guide for Gurgaon</a>. Browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>, every area on the <a href="{{ url('/city/ahmedabad') }}">Ahmedabad tutors page</a>, or
    <a href="{{ url('/tuition-jobs/ahmedabad') }}">tuition jobs in Ahmedabad</a> if you teach the IB.
  </p>
  </section>

  </div>
</article>
