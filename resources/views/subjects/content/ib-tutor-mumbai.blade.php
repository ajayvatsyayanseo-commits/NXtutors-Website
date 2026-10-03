{{--
  Board page for "IB tutor Mumbai" (PYP, MYP, DP) across Mumbai, Thane and
  Navi Mumbai. Author: Ajay Vatsyayan (role: IB, IGCSE and ISC maths). No
  anecdotes, years or results are claimed for him. No schools or societies are
  named.

  IB facts are reworded from the Gurgaon board hub (ib-tutor-gurgaon), which
  cites ibo.org pages and IB PDFs (read 1 Oct 2026): PYP ages 3-12, six
  transdisciplinary themes, exhibition; MYP ages 11-16, five years, eight
  subject groups, personal project of about 25 hours, optional on-screen exams;
  DP ages 16-19, six subjects, three (max four) at HL, 240 h HL / 150 h SL,
  grades 1-7, EE + TOK up to three points, 45 maximum, 24 points among passing
  conditions, IA in every subject; EE (first assessment 2027) 4,000 words,
  three reflection sessions ending in a viva voce, 500-word reflective
  statement; TOK exhibition of three objects + 1,600-word essay on one of six
  prescribed titles; IB maths revision, first teaching August 2027. No exam
  dates.
  Local detail only from the Mumbai city hub view (one building may sit four
  sets of papers; IB/IGCSE card; international schools keep their own terms;
  online opens up tutors for IB and IGCSE), zones/mumbai.json (South Mumbai:
  many families find help for IB or IGCSE sciences online),
  mumbai-research.json (Malabar Hill: online widens choice for IB/IGCSE
  sciences) and mumbai-zone-guides.json. No claim is made about where IB
  families live. Area links render only for active Mumbai areas. Fee wording
  is the approved sentence. FAQs render from faqs/ib-tutor-mumbai.php.
--}}
@php
  $ibmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ibmA = function (string $slug, string $label) use ($ibmSlugs) {
      return in_array($slug, $ibmSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ibmGuideTitle">
  <h2 id="ibmGuideTitle">IB tutors in Mumbai: the right specialist for the programme, then the right journey</h2>

  <p class="nx-guide__lede">
    One Mumbai building can hold children sitting four different sets of papers, and the IB family in it usually has
    the narrowest search. A Diploma student in Chemistry HL does not need "a chemistry tutor"; they need someone who
    knows that course's papers, its internal assessment and the rules around coursework, and who can reach the flat
    or teach well online. This page explains how the IB's three programmes work, how they differ from the State Board
    route, where IB students usually ask for help, and how home and online tutoring play out across Mumbai, Thane and
    Navi Mumbai. It is written by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibm-programmes">PYP, MYP, DP</a> ·
    <a href="#ibm-state">IB and the State Board</a> ·
    <a href="#ibm-dp">The Diploma</a> ·
    <a href="#ibm-core">Coursework rules</a> ·
    <a href="#ibm-stages">Stage by stage</a> ·
    <a href="#ibm-subjects">Subjects</a> ·
    <a href="#ibm-zones">Home or online, by zone</a> ·
    <a href="#ibm-demo">The demo</a> ·
    <a href="#ibm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibm-programmes">Three programmes, three different kinds of help</h2>
  <p>
    The International Baccalaureate runs separate programmes by age, and a school may offer one, two or all three. The
    first thing a tutor needs to hear is the programme and year, then the subject and level.
  </p>
  <ul>
    <li><strong>Primary Years Programme, ages 3 to 12.</strong> Learning is organised around six transdisciplinary themes through units of inquiry, with an exhibition in the final year and no external exams. Help here means secure number facts, reading stamina and confident writing, not exam drill.</li>
    <li><strong>Middle Years Programme, ages 11 to 16.</strong> A five-year programme, sometimes shortened by schools, across eight subject groups, marked against published criteria. The final year has a personal project of about 25 hours, and schools may choose IB on-screen exams in some subjects.</li>
    <li><strong>Diploma Programme, ages 16 to 19.</strong> Two years, six subjects, internal assessment in each, final exams, plus the Extended Essay, Theory of Knowledge and CAS.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-state">How the IB differs from the State Board route</h2>
  <p>
    Many Mumbai families meet the IB after years in an SSC or CBSE school, or weigh a Diploma against a junior college
    for the HSC. The difference is less about difficulty than about how work is judged.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Two routes through the senior years, in general terms</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">IB Diploma</th><th scope="col">State Board HSC</th></tr>
    </thead>
    <tbody>
      <tr><td>What is studied</td><td>Six subjects across set areas, three or four at Higher Level, plus the core</td><td>A stream of subjects from the state's textbooks</td></tr>
      <tr><td>How it is judged</td><td>Grades 1 to 7 per subject against published criteria and markschemes; coursework moderated by the IB</td><td>The board's own papers, set from its textbooks</td></tr>
      <tr><td>Coursework</td><td>Internal assessment in every subject, the Extended Essay and TOK tasks</td><td>Practicals and school work as the board specifies</td></tr>
      <tr><td>What a tutor needs</td><td>Knowledge of the exact course, level, command terms and coursework rules</td><td>Knowledge of the state textbooks and past papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A student switching into the IB usually knows plenty of content and finds the open questions and written
    justifications the hard part. Our guide on <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching
    from CBSE to IB or IGCSE</a> sets out a bridging plan that suits State Board students too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-dp">The Diploma in numbers</h2>
  <p>
    Students choose six subjects, normally three at Higher Level and never more than four. The IB recommends 240
    teaching hours for an HL subject and 150 for Standard Level, which is why HL maths and sciences are where most
    tutoring requests land. Each subject is graded 1 to 7. The Extended Essay and TOK together add up to three bonus
    points, giving the familiar maximum of 45, and a total of at least 24 points is one of several conditions for the
    diploma. Every subject also has an internally assessed component, marked by the teacher and moderated by the IB.
  </p>
  <p>
    Maths needs a particular word. The course comes as Analysis and Approaches or Applications and Interpretation, at
    SL or HL, and the IB has a revised maths course starting with teaching from August 2027, so a tutor should
    confirm which version your child is on. Our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA vs AI guide</a> and
    the national <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page cover it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-core">Extended Essay, TOK and the IA: where a tutor must stop</h2>
  <p>
    The Extended Essay is independent research of up to 4,000 words, guided by a school supervisor. For essays first
    assessed in 2027, the student has three reflection sessions with that supervisor, the last a short viva voce, and
    writes a 500-word reflective statement. TOK is assessed through an exhibition of three objects and a 1,600-word
    essay on one of six titles the IB prescribes for the session.
  </p>
  <p>
    A tutor can teach the physics, economics or maths behind a chosen topic, explain what each criterion rewards and
    ask the questions that sharpen a research question. A tutor must not choose the topic, write or edit drafts, or
    do the analysis. The viva exists partly to check the student understands their own work, so a polished essay the
    student cannot explain is a risk to the whole diploma.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-stages">What to ask for at each stage</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IB tutoring by stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Typical request</th><th scope="col">Good first step</th></tr>
    </thead>
    <tbody>
      <tr><td>PYP</td><td>Maths fluency, reading and writing</td><td>A weekly home session with a primary specialist</td></tr>
      <tr><td>MYP years 1 to 3</td><td>Maths and science gaps, writing to criteria</td><td>Read the task sheet and criteria together before teaching</td></tr>
      <tr><td>MYP years 4 and 5</td><td>Algebra for the DP, the personal project's timeline</td><td>Settle subject choices for the Diploma with evidence</td></tr>
      <tr><td>DP year 1</td><td>The step up at HL, first unit tests</td><td>Fill gaps early and start past-paper questions by topic</td></tr>
      <tr><td>DP year 2</td><td>IA deadlines, mocks, predicted grades</td><td>Timed papers marked against official markschemes</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-subjects">Subjects and where to look</h2>
  <ul>
    <li><strong>Maths AA or AI:</strong> <a href="{{ url('/ib-maths-tutor') }}">IB maths tutors</a>, or <a href="{{ url('/maths-home-tutor-mumbai') }}">maths home tutors in Mumbai</a> who teach the IB.</li>
    <li><strong>Physics and chemistry:</strong> <a href="{{ url('/physics-home-tutor-mumbai') }}">physics</a> and <a href="{{ url('/chemistry-home-tutor-mumbai') }}">chemistry</a> home tutors in Mumbai; say SL or HL. The <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics guide</a> covers the IA and EE.</li>
    <li><strong>Biology:</strong> <a href="{{ url('/biology-home-tutor-mumbai') }}">biology home tutors in Mumbai</a>.</li>
    <li><strong>English and the language courses:</strong> <a href="{{ url('/english-home-tutor-mumbai') }}">English home tutors in Mumbai</a>; tell us the exact course.</li>
    <li><strong>Economics, business management, MYP subjects:</strong> matched on request.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">parent's guide to IB and IGCSE tutoring</a>
    compares the two systems, and is useful wherever you live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-zones">Home or online: how it works across the region</h2>
  <p>
    For IB work the specialist matters more than the distance, so most families end up with a mix. Our zone notes
    point the same way. In <a href="{{ url('/city/mumbai/zone/south-mumbai') }}">South Mumbai</a>, around
    {!! $ibmA('malabar-hill', 'Malabar Hill') !!} or {!! $ibmA('cuffe-parade', 'Cuffe Parade') !!}, tutors come in from
    the north by the Western line or Line 3, and many families find IB science help online. In
    <a href="{{ url('/city/mumbai/zone/worli-dadar-central-mumbai') }}">Worli, Dadar and Central Mumbai</a>, towers in
    {!! $ibmA('lower-parel', 'Lower Parel') !!} run strict visitor desks, so register a regular tutor once.
  </p>
  <p>
    In <a href="{{ url('/city/mumbai/zone/vile-parle-juhu') }}">Vile Parle and Juhu</a>, a tutor heading for
    {!! $ibmA('juhu', 'Juhu') !!} usually finishes by auto from Vile Parle or Santacruz, or uses the D N Nagar metro.
    <a href="{{ url('/city/mumbai/zone/bandra-khar-santacruz') }}">Bandra, Khar and Santacruz</a> and
    <a href="{{ url('/city/mumbai/zone/andheri-jogeshwari') }}">Andheri and Jogeshwari</a> sit on the metro lines,
    which widens the choice; <a href="{{ url('/city/mumbai/zone/goregaon-malad') }}">Goregaon and Malad</a> and
    <a href="{{ url('/city/mumbai/zone/kandivali-borivali-dahisar') }}">Kandivali, Borivali and Dahisar</a> work best
    with a tutor on your side of the tracks. In <a href="{{ url('/city/mumbai/zone/chembur-ghatkopar-powai') }}">Chembur,
    Ghatkopar and Powai</a>, {!! $ibmA('powai', 'Powai') !!} has no station, so a tutor takes an auto from Kanjurmarg
    or drives the link road; Bhandup and Mulund are on the same Central line.
  </p>
  <p>
    <a href="{{ url('/city/mumbai/zone/thane') }}">Thane</a>'s Ghodbunder Road townships and
    <a href="{{ url('/city/mumbai/zone/navi-mumbai') }}">Navi Mumbai</a> nodes such as
    {!! $ibmA('kharghar', 'Kharghar') !!} have their own pools, and crossing into them at rush hour is slow. For a
    single HL subject, a weekend home session plus weekday online sessions with the same tutor is often the
    practical answer, with online taking over on monsoon days. Online maths and science only work if the tutor sees
    the working live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-calendar">Planning an IB year around the school and the city</h2>
  <p>
    International schools in Mumbai keep their own terms, which rarely line up with the CBSE or State Board
    calendars your neighbours follow, so a tutor used to board-exam seasons has to plan from your school's dates
    instead. Start with the internal deadlines: IA drafts, EE milestones and TOK tasks usually cluster in the second
    half of DP1 and the first half of DP2, and that is when content teaching tends to slip. Put those dates on one
    sheet at the first session and plan teaching weeks around them. Then add the city: the monsoon months, when
    weekday travel is least predictable, are a good time to move to online sessions and save home visits for
    weekends, and the run-up to mocks is when an extra session pays off most.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-demo">What to test in the free demo</h2>
  <ol>
    <li><strong>A marked school test.</strong> A tutor who knows the course reads the markscheme notes and names what to practise.</li>
    <li><strong>The course version.</strong> Ask which syllabus your child's exam session uses.</li>
    <li><strong>Command terms.</strong> Ask what "show that", "hence" or "evaluate" require.</li>
    <li><strong>The coursework line.</strong> Listen for "I teach the ideas and the criteria; the writing is yours".</li>
    <li><strong>A plan.</strong> The next four to six weeks, tied to the school calendar, which in international schools follows its own terms.</li>
  </ol>
  <p>
    You get two or three matched tutors and see each fee before the demo; switching later is free. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibm-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The programme, level and
    the tutor's journey across Mumbai shape the figure; see the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">home tuition fees in Mumbai</a>.
  </p>
  <p>
    Tell us the programme, year, subject and level, your station or node and your slots; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. For a longer explanation of each programme, read our
    <a href="{{ url('/ib-tutor-gurgaon') }}">IB guide for Gurgaon families</a>. Browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>, all areas on the <a href="{{ url('/city/mumbai') }}">Mumbai tutors page</a>, or
    <a href="{{ url('/tuition-jobs/mumbai') }}">tuition jobs in Mumbai</a> if you teach the IB.
  </p>
  </section>

  </div>
</article>
