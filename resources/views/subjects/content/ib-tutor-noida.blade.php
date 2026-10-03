{{--
  Board hub for "IB tutor Noida" (PYP, MYP and the Diploma). Author: Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results are
  claimed for him. No schools, coaching institutes, societies, developers or
  people are named.

  Board facts restate only what ib-tutor-gurgaon states; its official sources
  (fetched 1 Oct 2026; ibo.org text read from ibo.org search extracts and IB
  PDFs):
  - IB Extended essay subject brief (ibo.org PDF): DP for ages 16-19, six
    academic areas around a core, normally three (not more than four) HL
    subjects, 240 h HL / 150 h SL; EE 4,000-word upper limit, three reflection
    sessions ending in a short viva voce, 500-word reflective statement;
    EE + TOK award up to three points.
  - ibo.org/programmes/diploma-programme/curriculum/dp-core/theory-of-knowledge/
    : TOK assessed by an exhibition (three objects, internally assessed and
    moderated) and a 1,600-word essay on one of six prescribed titles.
  - ibo.org/programmes/primary-years-programme/ and the PYP brochure: ages 3-12,
    six transdisciplinary themes, the exhibition in the final year.
  - ibo.org/programmes/middle-years-programme/ and MYP curriculum pages: ages
    11-16, five years (schools may run shorter versions), eight subject
    groups, personal project of about 25 hours, eAssessment optional except
    the personal project; two-hour on-screen exams in some subject groups.
  - DP subject grades 1-7, maximum 45, 24-point threshold among the passing
    conditions, and IA in every subject (ibo.org DP assessment pages, as
    verified for blog/ib-igcse-tutoring-gurgaon-parents-guide).
  No exam dates or syllabus-change dates are given on this page. Board mix only
  as the Noida hub (resources/views/city/content/noida.blade.php) words it:
  CBSE most common, ICSE widely taught, some schools offer the IB or Cambridge
  IGCSE, state board UPMSP; IB specialists are fewer, so online or hybrid
  tuition often widens the choice. UP Board described in general terms only.
  No share of any board is claimed and no board is tied to any part of the
  city. Local detail only from database/seo-content/areas/noida-research.json,
  noida-zone-guides.json, zones/noida.json and the Noida hub. Fee wording is
  the approved NXTutors sentence. FAQs render from faqs/ib-tutor-noida.php.
  Area links render only for active Noida areas.
--}}
@php
  $ibnSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ibn = function (string $slug, string $label) use ($ibnSlugs) {
      return in_array($slug, $ibnSlugs, true)
          ? '<a href="' . e(url('/city/noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ibn-guide" aria-labelledby="ibnGuideTitle">
  <h2 id="ibnGuideTitle">IB tutors in Noida: matching the programme, the subject and the level</h2>

  <p class="nx-guide__lede">
    In Noida, where most children study CBSE, an IB family can find that a tutor described as "IB" has taught a
    little MYP science once, or knows the Diploma maths content but not its internal assessment. The match has to be
    narrower than the board: which programme, which year, which subject, which level. This page explains how the three
    IB programmes work, how they differ from the CBSE and UP Board style most local tutors know, what a tutor may and
    may not do with coursework, what to check in the free demo, and how a specialist can realistically reach you in each
    part of the city. It is written by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibn-mix">IB in Noida</a> ·
    <a href="#ibn-style">A different style</a> ·
    <a href="#ibn-programmes">PYP, MYP, DP</a> ·
    <a href="#ibn-dp">The Diploma</a> ·
    <a href="#ibn-core">Coursework rules</a> ·
    <a href="#ibn-subjects">Subjects</a> ·
    <a href="#ibn-session">A good session</a> ·
    <a href="#ibn-zones">Reaching each zone</a> ·
    <a href="#ibn-mode">Home or online</a> ·
    <a href="#ibn-demo">Demo checklist</a> ·
    <a href="#ibn-start">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibn-mix">Where the IB fits in Noida's schools</h2>
  <p>
    Noida's school mix is led by CBSE, with ICSE widely taught, schools affiliated to the Uttar Pradesh board, UPMSP, and
    a smaller group of schools offering the IB or Cambridge IGCSE. The practical consequence for IB families is
    supply: tutors who know a specific Diploma subject at Higher Level are fewer than CBSE tutors in any one sector, so
    online or hybrid tuition often widens the choice. We match on programme, subject and level first and on distance
    second. For the programmes in more depth, see our <a href="{{ url('/ib-tutor-gurgaon') }}">Gurgaon IB guide</a>; for
    Cambridge courses, the <a href="{{ url('/igcse-tutor-noida') }}">IGCSE tutors in Noida</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibn-style">How IB study differs from CBSE and the UP Board</h2>
  <p>
    CBSE and the UP Board both run on prescribed textbooks and a board paper at the end of Classes 10 and 12, with the
    state board setting its own pattern for the High School and Intermediate exams. The IB works differently. Teachers
    design units within the IB's frameworks, much of the work is judged against published criteria rather than a
    single percentage, and in the Diploma every subject carries internal assessment alongside the final exams. A tutor
    whose experience is mainly board papers tends to over-teach content and under-teach explanation, which is where IB
    marks are lost. Students arriving from CBSE or a state board need a few weeks on that shift; our
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to switching from CBSE to IB or IGCSE</a>
    sets out a bridging plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibn-programmes">PYP, MYP and the Diploma: what each one asks a tutor to do</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The three IB programmes and the help each usually needs</caption>
    <thead>
      <tr><th scope="col">Programme</th><th scope="col">Ages, as the IB states</th><th scope="col">What the student produces</th><th scope="col">Signs a tutor would help</th></tr>
    </thead>
    <tbody>
      <tr><td>Primary Years (PYP)</td><td>3–12</td><td>Inquiry work across six transdisciplinary themes, ending in an exhibition in the final year; no external exams</td><td>Shaky reading, place value or times tables; anxiety about open questions</td></tr>
      <tr><td>Middle Years (MYP)</td><td>11–16, up to five years</td><td>Criteria-marked tasks in eight subject groups and a personal project of about 25 hours; IB on-screen exams only if the school enters them</td><td>Algebra not fluent by the last two years; weak written explanations</td></tr>
      <tr><td>Diploma (DP)</td><td>16–19, two years</td><td>Six graded subjects, internal assessment in each, final exams, plus the Extended Essay, TOK and CAS</td><td>Struggling at HL, IA deadlines piling up, mocks below predicted targets</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A PYP child needs a patient generalist who strengthens basics without turning inquiry units into drills; our
    <a href="{{ url('/maths-home-tutor-noida') }}">maths</a> and <a href="{{ url('/english-home-tutor-noida') }}">English</a>
    tutors in Noida cover these years. An MYP student needs a tutor who reads the task sheet and criteria before teaching,
    since a method explained in words scores where a bare answer does not. The Diploma calls for a subject specialist.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibn-dp">The Diploma in numbers</h2>
  <p>
    A Diploma student takes six subjects across the IB's academic areas, normally three at Higher Level and never more
    than four. The IB recommends 240 teaching hours for each HL subject and 150 for each SL subject, which is why HL is
    where most tutoring requests land. Every subject is graded from 1 to 7; the Extended Essay and Theory of Knowledge
    together contribute up to three further points, giving a maximum of 45. At least 24 points is one of several
    conditions for the award. Internal assessment in each subject is marked by the school and moderated by the IB,
    with deadlines set in the school's own calendar, so a tutor should know those dates from the first week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibn-core">Extended Essay, TOK and IA: the rules a tutor must respect</h2>
  <ul>
    <li><strong>Extended Essay:</strong> independent research in one subject or across two, capped at 4,000 words, guided by a school supervisor through three reflection sessions, the final one a short viva voce, with a 500-word reflective statement.</li>
    <li><strong>Theory of Knowledge:</strong> an exhibition built around three objects, marked in school and moderated, plus a 1,600-word essay on one of six titles the IB prescribes for the session.</li>
    <li><strong>Internal assessment:</strong> in maths an exploration, in the sciences an investigation, with other formats elsewhere, each judged against published criteria.</li>
  </ul>
  <p>
    All of it must be the student's own work. A tutor may teach the economics, chemistry or maths underneath a chosen
    topic, explain what each criterion rewards and question a vague research question until it sharpens. A tutor must
    not choose the topic, draft or edit text, or carry out the analysis. Feedback on drafts belongs to the school
    supervisor, within IB limits. If a tutor offers to "tidy up" an IA, decline: it puts the diploma at risk.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibn-subjects">Subjects IB families in Noida ask about</h2>
  <ul>
    <li><strong>Maths, Analysis and Approaches or Applications and Interpretation, SL or HL:</strong> the most frequent request. See the <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page and our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA vs AI guide</a>.</li>
    <li><strong>Physics, chemistry and biology:</strong> data questions, the investigation and HL depth. Our <a href="{{ url('/physics-home-tutor-noida') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-noida') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-noida') }}">biology</a> pages for Noida list tutors; say "IB" and the level when you ask. The <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL/HL, IA and EE guide</a> goes deeper.</li>
    <li><strong>Economics, business management, English and other languages:</strong> matched on request; give the exact course and level.</li>
    <li><strong>MYP maths and sciences:</strong> a tutor who has taught MYP criteria; tell us the MYP year.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">parent's guide to IB and IGCSE tutoring</a>
    compares the two systems side by side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibn-session">What a strong Diploma session looks like</h2>
  <p>
    The student brings the latest marked test or homework, and the session starts there: the tutor reads the markscheme
    annotations, sorts lost marks into content gaps and communication gaps, and picks the one that costs most. Teaching
    follows, framed in the command terms the paper will use, such as "show that", "hence" or "evaluate". Then two or
    three past-paper questions, worked on the student's own approved calculator, marked against the official
    markscheme. Ten minutes at the end go to the coursework calendar: what is due, what the student will do before next
    week, and which concepts behind the IA topic still need teaching. Parents should get a short note on what was
    covered.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibn-zones">How an IB specialist reaches each part of Noida</h2>
  <p>
    Because the right IB tutor may start from further away than a CBSE tutor would, the route and the hour matter a
    great deal. A sector-by-sector view:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/noida/zone/old-noida') }}">Old Noida</a>:</strong> {!! $ibn('sector-14a', 'Sector 14A') !!}, at the Delhi edge beside the DND Flyway, is plotted homes, some with their own security routine; evening traffic onto the DND is heavy, so an early slot suits a tutor from across the river.</li>
    <li><strong><a href="{{ url('/city/noida/zone/central-noida') }}">Central Noida</a>:</strong> {!! $ibn('sector-44', 'Sector 44') !!} sits near the Mahamaya Flyover, with Botanical Garden and Okhla Bird Sanctuary stations on the Magenta Line within reach, which helps a specialist travelling from Delhi.</li>
    <li><strong><a href="{{ url('/city/noida/zone/sector-62-belt') }}">Sector 62 belt</a>:</strong> {!! $ibn('sector-56', 'Sector 56') !!} has no station inside it; tutors usually come by two-wheeler or cab from Sector 59 or Sector 15 stations, and office-hour traffic argues for an after-school start.</li>
    <li><strong><a href="{{ url('/city/noida/zone/sectors-70-82') }}">Sectors 70–82</a>:</strong> {!! $ibn('sector-72', 'Sector 72') !!} is low-rise, with Noida Sector 51 station and its Blue Line link nearby; the Sector 51 junction jams at peak hours, but internal lanes are easy.</li>
    <li><strong><a href="{{ url('/city/noida/zone/noida-expressway') }}">Noida Expressway</a>:</strong> {!! $ibn('sector-128', 'Sector 128') !!} is township-style campuses with no metro station in easy walking distance; the gate needs the tutor's name and time, and evening jams build at the expressway cuts.</li>
    <li><strong><a href="{{ url('/city/noida/zone/near-noida-extension') }}">Near Noida Extension</a>:</strong> {!! $ibn('sector-121', 'Sector 121') !!} is known mainly for one very large society, and congestion near the FNG Expressway junctions makes a weekend home class plus weekday online sessions practical.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/noida-expressway-and-extension-tuition-guide') }}">Expressway and Extension guide</a> and
    <a href="{{ url('/blog/old-and-central-noida-tuition-guide') }}">Old and Central Noida guide</a> add timing detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibn-mode">Home, online or hybrid for IB</h2>
  <p>
    For PYP and early MYP, a home tutor nearby is usually right: young children concentrate better with someone in the
    room. For a single Diploma subject at HL, the calculation changes. The strongest match for, say, Chemistry HL may live
    an hour away at your slot, and an online lesson with that tutor will usually do more than a home lesson with a
    weaker fit. A hybrid plan, one home session at the weekend and one online session midweek with the same tutor, is
    common. Online maths and science need the tutor to see written working live, by tablet or a camera over the
    notebook. See our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home vs online tutor</a> comparison.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibn-demo">Demo checklist for an IB tutor</h2>
  <ol>
    <li><strong>Bring a marked school test.</strong> A Diploma tutor should read the markscheme codes and name what to practise within minutes.</li>
    <li><strong>Ask about the course version.</strong> IB subjects are revised on a cycle; a current tutor knows which guide your child's exam session follows.</li>
    <li><strong>Probe the command terms.</strong> Ask what "hence" or "evaluate" requires. Vagueness is a warning.</li>
    <li><strong>Watch the calculator.</strong> They should work on your child's approved GDC or calculator.</li>
    <li><strong>Ask where the IA line is.</strong> The right answer: "I teach the concepts and the criteria; the writing is yours."</li>
    <li><strong>Ask for a six-week outline</strong> tied to the school's coursework calendar.</li>
  </ol>
  <p>
    You receive two or three matched tutors and see each fee before the demo; switching later is free. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibn-start">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Within that, the programme,
    the level, the number of subjects and the tutor's journey at your hour shape each quote. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-noida') }}">home
    tuition fees in Noida</a>.
  </p>
  <p>
    Tell us the programme, year, subject and level, for example "DP2, Maths AA HL", plus your sector, society and free
    slots. We shortlist two or three tutors and the first class is a <a href="{{ url('/demo-class') }}">free demo</a>.
    Browse <a href="{{ url('/tutors') }}">tutor profiles</a> or every sector on our <a href="{{ url('/city/noida') }}">Noida
    tutors page</a>. IB teachers looking for students can see <a href="{{ url('/tuition-jobs/noida') }}">tuition jobs in
    Noida</a>.
  </p>
  </section>

  </div>
</article>
