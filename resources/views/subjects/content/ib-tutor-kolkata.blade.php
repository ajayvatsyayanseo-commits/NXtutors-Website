{{--
  Board page for "IB tutor Kolkata". Author: Ajay Vatsyayan (role: IB, IGCSE
  and ISC maths). No anecdotes, years or results are claimed for him. No
  schools, coaching institutes or people are named.

  Board facts only as the Gurgaon board hub (ib-tutor-gurgaon) states them,
  which cites ibo.org (read 1 Oct 2026):
  - PYP ages 3-12, six transdisciplinary themes, exhibition in the final year.
  - MYP ages 11-16, five years (shorter versions allowed), eight subject
    groups, criteria-based marking, personal project of about 25 hours,
    optional two-hour on-screen exams chosen by the school.
  - DP ages 16-19, six subjects, normally three (not more than four) at HL,
    240 h HL / 150 h SL; grades 1-7; EE + TOK up to three points; maximum 45;
    24 points among the passing conditions; IA in every subject.
  - EE (first assessment 2027): 4,000-word upper limit, three reflection
    sessions ending in a viva voce, 500-word reflective statement.
  - TOK: exhibition of three objects (internally assessed, moderated) and a
    1,600-word essay on one of six prescribed titles.
  - IB maths revised courses: first teaching August 2027.
  The IB's presence in Kolkata only as the /city/kolkata hub states it ("a
  smaller group follow the IB or Cambridge IGCSE"); no shares, no school
  names, no claim about which neighbourhoods IB families live in. Local
  travel detail only from kolkata-zone-guides.json and kolkata-research.json.
  Fee wording is the approved sentence. Area links render only for active
  Kolkata areas.
--}}
@php
  $kibSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kibA = function (string $slug, string $label) use ($kibSlugs) {
      return in_array($slug, $kibSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="kibGuideTitle">
  <h2 id="kibGuideTitle">IB tutors in Kolkata: matching the programme, the subject and the level</h2>

  <p class="nx-guide__lede">
    Kolkata's IB families are a smaller group in a city where ICSE, CBSE and the West Bengal boards dominate, and that
    shapes the search for a tutor. A teacher who is excellent for ISC physics may never have marked an IB
    investigation, and the right Diploma specialist for a single HL subject may live across the river or in another
    city. This page explains what each IB programme asks for, where students usually want help, what a tutor may and
    may not do with coursework, what to check when a tutor sits down for the free first class, and how home and
    online sessions combine across Kolkata's neighbourhoods. The author is Ajay Vatsyayan, whose subjects on NXTutors
    are IB, IGCSE and ISC maths.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kib-city">IB in Kolkata</a> ·
    <a href="#kib-progs">PYP, MYP and DP</a> ·
    <a href="#kib-dp">The Diploma in numbers</a> ·
    <a href="#kib-core">Coursework rules</a> ·
    <a href="#kib-move">Arriving from another board</a> ·
    <a href="#kib-subjects">Subjects and pages</a> ·
    <a href="#kib-reach">Reaching your home</a> ·
    <a href="#kib-demo">The demo</a> ·
    <a href="#kib-fees">Fees and starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kib-city">How common is the IB in Kolkata?</h2>
  <p>
    Our <a href="{{ url('/city/kolkata') }}">Kolkata tutors page</a> describes the IB and Cambridge IGCSE as the smaller
    group beside CISCE, CBSE and the state boards. We do not publish a share or name schools. Two practical points
    follow. First, the local pool of IB-experienced tutors is thinner than for ICSE or CBSE, so it pays to be precise
    in your request: "DP2, Chemistry HL, internal assessment due next term" finds the right person faster than "IB
    science". Second, many families arrive from another city or another board, and the first weeks with a tutor often
    go on habits the new programme expects rather than on content.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kib-progs">PYP, MYP and DP: three different jobs for a tutor</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The IB programmes, as the IB describes them, and where tutoring fits</caption>
    <thead>
      <tr><th scope="col">Programme</th><th scope="col">Ages</th><th scope="col">How work is judged</th><th scope="col">Useful tutoring</th></tr>
    </thead>
    <tbody>
      <tr><td>Primary Years (PYP)</td><td>Roughly 3 to 12</td><td>Inquiry-led units built on six transdisciplinary themes, closing with the PYP exhibition; nothing is externally examined</td><td>Secure number facts, reading stamina, clear short writing</td></tr>
      <tr><td>Middle Years (MYP)</td><td>Roughly 11 to 16; five years unless the school runs a shorter version</td><td>Each of the eight subject groups marked on its own criteria; a personal project the IB sizes at around 25 hours; on-screen exams if the school opts in</td><td>Maths and science fluency; writing explanations against criteria</td></tr>
      <tr><td>Diploma (DP)</td><td>Roughly 16 to 19, over two years</td><td>Six subjects, each with coursework and final papers and a grade out of 7; the core adds the Extended Essay, TOK and CAS</td><td>Higher Level maths and sciences, economics, coursework planning within the rules</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Nobody sits a PYP paper, so the work there is calm fluency and confidence with open questions. An MYP tutor should
    read the task sheet and criteria before teaching anything. A DP tutor is a subject specialist who knows the
    markscheme language and the coursework limits.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kib-dp">The Diploma in numbers</h2>
  <p>
    Six subjects make up a Diploma. Usually three of them are taken at Higher Level, four at most, with the IB
    suggesting 240 hours of teaching for an HL course against 150 for SL. Grades run from 1 to 7 per subject; up to
    three more points come from the Extended Essay and TOK combined, which is why 45 is the ceiling. Reaching 24 points
    is among the conditions for passing, though not the only one. Each subject also carries coursework that the
    school marks and the IB moderates, on deadlines your child's school sets.
  </p>
  <p>
    Pressure usually arrives in a predictable order: the step up at the start of DP1, the overlap of IA drafts, EE
    research and TOK tasks through the middle of the course, school mocks before predicted grades, and finally a few
    weeks of papers in every subject. A tutor is most valuable at the first two points, when gaps can still be closed
    without crowding out coursework. Maths students should also know that the IB's revised maths courses begin
    teaching in August 2027, so ask which version your child's exam session follows.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kib-core">IA, Extended Essay and TOK: the line a tutor must not cross</h2>
  <ul>
    <li><strong>Extended Essay:</strong> a research piece capped at 4,000 words, guided by a school supervisor. From 2027 assessment the student meets that supervisor for three formal reflections, the final one a brief viva voce, and adds a reflective statement of up to 500 words.</li>
    <li><strong>Theory of Knowledge:</strong> two parts. An exhibition built around three objects, which the school marks and the IB moderates, and an essay of up to 1,600 words answering one of the six titles the IB releases for that exam session.</li>
    <li><strong>Internal assessment:</strong> in maths an exploration, in the sciences an investigation, elsewhere other formats; every one judged on criteria the IB publishes.</li>
  </ul>
  <p>
    Ownership is the whole point. Teaching the chemistry or economics underneath your child's topic is fine, as is
    unpacking the criteria and pushing with questions until the research question gets sharper. Picking the topic,
    drafting or editing text, or doing the calculations is not. Anyone who offers to "polish" an IA or essay is
    risking the diploma.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kib-move">Arriving in the IB from ICSE, CBSE or IGCSE</h2>
  <p>
    Kolkata students who join the Diploma after Class 10 usually come with strong content and long-answer stamina,
    especially from ICSE. What they lack is different. They have rarely been marked against criteria, so a well-written
    lab report can still score low on "evaluation". They are used to a teacher setting every task, while the IB expects
    them to plan a long piece of work alone. And in maths they meet a graphic display calculator as an everyday tool
    rather than an occasional aid. A good tutor spends the first few weeks on exactly these three things, using the
    student's own school tasks rather than generic worksheets. A student coming from IGCSE usually has the calculator
    habit and the command words already, and needs depth at HL instead. Our
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">bridging plan for a move into IB or IGCSE</a>
    sets out the weeks in order.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kib-subjects">Which IB subjects do families ask about, and where to read more?</h2>
  <p>
    In the Diploma it is most often maths, Analysis and Approaches or Applications and Interpretation, at SL or HL,
    and the sciences at HL, followed by economics and essay subjects. In the MYP, the last two years of maths and
    sciences, when algebra fluency starts to shape Diploma choices.
  </p>
  <ul>
    <li><a href="{{ url('/ib-maths-tutor') }}">IB maths tutors</a>, and the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB Maths AA and AI guide</a> for choosing the course.</li>
    <li>Our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">guide to IB physics at both levels</a>, with the investigation and essay.</li>
    <li><a href="{{ url('/maths-home-tutor-kolkata') }}">Maths</a>, <a href="{{ url('/physics-home-tutor-kolkata') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-kolkata') }}">chemistry</a>, <a href="{{ url('/biology-home-tutor-kolkata') }}">biology</a> and <a href="{{ url('/english-home-tutor-kolkata') }}">English</a> home tutors in Kolkata; say "IB" and the level when you ask.</li>
    <li><a href="{{ url('/igcse-tutor-kolkata') }}">IGCSE tutors in Kolkata</a>, for the two years before the Diploma.</li>
  </ul>
  <p>
    For how the IB works in full, our <a href="{{ url('/ib-tutor-gurgaon') }}">IB board hub</a> is the reference page,
    and the <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">parent's guide to IB and IGCSE
    tutoring</a> compares the two systems.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kib-reach">How does an IB tutor reach your home in Kolkata?</h2>
  <p>
    Because IB specialists are fewer, the question is less "who lives nearest?" and more "who can reliably get here?".
    Our zone guides suggest:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/kolkata/zone/salt-lake') }}">Salt Lake</a>:</strong> the Green Line now runs from Sector V to Howrah Maidan in one ride, so a tutor from the centre or across the river can reach {!! $kibA('salt-lake-sector-2', 'Sector 2') !!}. Give block letters and the nearest avenue.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/new-town-rajarhat') }}">New Town and Rajarhat</a>:</strong> the Orange Line stations are still under construction, so in {!! $kibA('new-town-action-area-2', 'Action Area 2') !!} or {!! $kibA('rajarhat', 'Rajarhat') !!} a tutor already living nearby, plus online sessions for a scarce HL subject, is the practical mix. Register the tutor with the complex gate first.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/ballygunge-gariahat-alipore') }}">Alipore and the lakes</a>:</strong> {!! $kibA('alipore', 'Alipore') !!} is served by Majerhat and Kidderpore on the Circular section; for {!! $kibA('lake-gardens', 'Lake Gardens') !!}, Rabindra Sarobar on the Blue Line is the stop to give.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/kasba-em-bypass-south') }}">The southern bypass</a>:</strong> the Orange Line's Jyotirindra Nandi station serves {!! $kibA('mukundapur', 'Mukundapur') !!}, where apartment complexes ask for the tutor's name in advance.</li>
  </ul>
  <p>
    For HL subjects, a common pattern is one home session at the weekend and one online session midweek with the same
    tutor. Online maths and sciences only work if the tutor sees the student's written working live, and the student
    uses their own approved calculator. Plan around the city's calendar as well: in the weeks before Durga Puja the
    busiest crossings and market roads fill. If a coursework deadline falls in that stretch, moving sessions online for
    a fortnight, rather than cancelling them, keeps the IA or essay timetable intact. For a PYP or younger
    MYP child, by contrast, a nearby general tutor who is comfortable with inquiry-style homework usually serves better
    than a distant specialist.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kib-demo">What to test in an IB demo class</h2>
  <ol>
    <li><strong>Bring a returned test.</strong> Someone who knows the Diploma reads the markscheme codes in minutes and tells you which lost marks were method and which were accuracy.</li>
    <li><strong>Ask about the course edition.</strong> They should know which edition of the subject guide applies to your child's exam year.</li>
    <li><strong>Try the command terms.</strong> "Hence", "show that", "evaluate": each needs a different answer, and a specialist explains why.</li>
    <li><strong>Probe the coursework boundary.</strong> The right answer sounds like "I explain the ideas and the criteria; every word of the draft is yours".</li>
    <li><strong>Ask for a month's outline.</strong> Something concrete, fitted around the school's coursework and mock deadlines.</li>
  </ol>
  <p>
    Each request brings two or three matched tutors with fees visible up front, and changing tutor later costs
    nothing. Before a profile goes live, the tutor passes an <a href="{{ url('/how-we-verify-tutors') }}">ID
    check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kib-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Programme, level, number
    of subjects and travel at your slot move the figure. See the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">home tuition fees in Kolkata</a>.
  </p>
  <p>
    Send the programme and year with the subject and level (say, "DP1 Physics HL"), plus your neighbourhood and free
    slots; your first class with any shortlisted tutor is a <a href="{{ url('/demo-class') }}">free demo</a>. Browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>; IB teachers in the city can see
    <a href="{{ url('/tuition-jobs/kolkata') }}">tuition jobs in Kolkata</a>.
  </p>
  </section>

  </div>
</article>
