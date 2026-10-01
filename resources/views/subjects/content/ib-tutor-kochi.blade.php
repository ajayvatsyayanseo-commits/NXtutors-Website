{{--
  Board page "IB tutor Kochi" (DP mainly, with PYP and MYP). Author: Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results
  are claimed for him. No schools, societies or people are named.

  IB facts are only those stated in ib-tutor-gurgaon, which cites ibo.org
  pages and IB PDFs (read 1 Oct 2026): PYP 3-12, six transdisciplinary
  themes, exhibition; MYP 11-16, five years (shorter versions allowed),
  eight subject groups, personal project about 25 hours, optional two-hour
  on-screen exams; DP 16-19, six subjects, normally three (max four) HL,
  240 h / 150 h, grades 1-7, EE + TOK up to three points, maximum 45,
  24 points among passing conditions, IA in every subject; EE first assessed
  2027 (4,000 words, three reflection sessions ending in a viva voce,
  500-word reflective statement); TOK exhibition of three objects and
  1,600-word essay on one of six prescribed titles; maths revision, first
  teaching August 2027.
  The Kochi city hub says a smaller group of Kochi students take the IB
  Diploma or Cambridge IGCSE and that, as the specialist pool is national,
  online lessons are often the practical route. This page follows that line.
  Local detail only from database/seo-content/areas/kochi-research.json,
  kochi-zone-guides.json, zones/kochi.json and the Kochi city hub. Fee
  wording is the approved NXTutors sentence. FAQs render from
  faqs/ib-tutor-kochi.php. Area links render only when that Kochi area page
  exists and is active.
--}}
@php
  $ibkcSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ibkcA = function (string $slug, string $label) use ($ibkcSlugs) {
      return in_array($slug, $ibkcSlugs, true)
          ? '<a href="' . e(url('/city/kochi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ibkc-guide" aria-labelledby="ibkcGuideTitle">
  <h2 id="ibkcGuideTitle">IB tutors in Kochi: a small group, a national pool of specialists, and how to combine them</h2>

  <p class="nx-guide__lede">
    The Kochi city hub is candid about the IB: a smaller group of Kochi students take the IB Diploma or Cambridge
    IGCSE, and because the pool of specialists for those courses is national, online lessons with a tutor elsewhere in
    India are often the practical route. This page starts from that reality. It explains how the IB programmes work,
    what a tutor may do with coursework, how to choose between a Kochi home tutor, an online specialist or a mix of the
    two, what to ask in the free demo, and how a visiting tutor reaches each zone when a local match exists. It is
    written by Ajay Vatsyayan, whose own NXTutors teaching is IB, IGCSE and ISC maths.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibkc-local">The IB in Kochi</a> ·
    <a href="#ibkc-state">IB and the state syllabus</a> ·
    <a href="#ibkc-choose">Home, online or both</a> ·
    <a href="#ibkc-dp">The Diploma</a> ·
    <a href="#ibkc-core">Coursework limits</a> ·
    <a href="#ibkc-younger">PYP and MYP</a> ·
    <a href="#ibkc-subjects">Subjects</a> ·
    <a href="#ibkc-zones">Zones</a> ·
    <a href="#ibkc-demo">Demo checklist</a> ·
    <a href="#ibkc-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibkc-local">The IB in Kochi</h2>
  <p>
    Most Kochi students, according to the hub, follow the Kerala State Board, CBSE or CISCE; the IB group is smaller,
    and we have no figure for its size. For an IB family that has a practical consequence. A tutor in your exact
    Diploma subject and level may not live within easy reach of your home, especially for Higher Level sciences or
    economics. So when we shortlist, we look in three places at once: tutors in or near your zone, tutors who already
    travel into it, and online specialists elsewhere in India. You then choose the mix, rather than settling for
    whoever happens to be closest.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibkc-state">How the IB differs from the state syllabus</h2>
  <p>
    The Kerala state syllabus leads to the SSLC after Class 10 and then the Higher Secondary course, with a group of
    subjects chosen for Classes 11 and 12, taught from state textbooks in the child's medium of instruction, with the
    scheme set out in official notices. The IB Diploma is built on a different idea: six subjects across academic
    areas, a core of the Extended Essay, Theory of Knowledge and CAS, and internal assessment in every subject that
    teachers mark and the IB moderates. A student moving from the state syllabus or CBSE into the Diploma usually
    copes with the content but has to learn a new way of answering: command terms, open questions and extended written
    reasoning, all in English.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibkc-choose">Choosing between home, online and a mix</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Which format suits which IB need</caption>
    <thead>
      <tr><th scope="col">Need</th><th scope="col">Usually best</th><th scope="col">Why</th></tr>
    </thead>
    <tbody>
      <tr><td>PYP reading, writing and number</td><td>Home, if a suitable tutor is nearby</td><td>Young children focus better with someone at the table</td></tr>
      <tr><td>MYP maths or sciences</td><td>Home or hybrid</td><td>Content teaching works either way; criteria writing needs marked drafts</td></tr>
      <tr><td>One DP subject at HL</td><td>Online specialist, or hybrid</td><td>The right specialist matters more than the commute</td></tr>
      <tr><td>Exam-season revision</td><td>Online</td><td>Short, frequent sessions on weak papers; no travel time lost</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Online maths and sciences work only if the tutor watches handwritten working live, through a writing tablet,
    shared whiteboard or a camera over the notebook, and uses the same approved calculator your child takes into the
    exam. A weekend home lesson plus a weekday online one, with the same tutor or two who coordinate, is a good
    compromise when a local tutor covers one subject well and a remote specialist another.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibkc-setup">Making online IB lessons work at home</h2>
  <p>
    A few practical steps make online lessons almost as effective as a tutor at the table. Give your child a quiet
    desk with good light and a stable connection. Use a writing tablet, or a phone on a stand pointing at the
    notebook, so the tutor sees every line of working. Keep the school's markschemes, past papers and the current
    subject guide in a shared folder. Ask the tutor to send a two-line summary after each lesson. And for a younger MYP
    student, sit in on the first two lessons so you can judge whether attention holds on screen.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibkc-join">Joining the Diploma from another board</h2>
  <p>
    Students who enter DP1 from the state syllabus, CBSE or ICSE usually bring strong hand calculation and solid
    content, but little practice with command terms, open-ended investigations or a graphic calculator. Students from
    IGCSE know command words but may find the step to HL steep. The first six to eight weeks of DP1, before coursework
    deadlines arrive, are the best time to close these gaps, and an online specialist can start even before term does.
    Our <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to switching from CBSE to the IB or
    IGCSE</a> sets out a bridging plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibkc-dp">The Diploma: structure and pressure points</h2>
  <p>
    The Diploma runs over two years for students aged about 16 to 19. Six subjects are taken from the IB's academic
    areas; normally three, and no more than four, are at Higher Level, with 240 recommended teaching hours at HL and 150
    at SL. Each subject is graded 1 to 7, the Extended Essay and TOK combine for up to three more points, and so the
    maximum is 45; at least 24 points is among the conditions for the diploma. Every subject includes internal
    assessment, such as the maths exploration or the science investigation.
  </p>
  <p>
    The hardest stretches are predictable: the step up at the start of DP1, the overlap of IA, EE and TOK deadlines with
    ordinary teaching from late DP1 into DP2, and the mocks that set predicted grades for university applications. A
    tutor who keeps a written plan across those months prevents content being squeezed out. IB maths is being revised,
    with new courses first taught from August 2027, so confirm which version your child's exam session uses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibkc-core">Coursework: what a tutor may do</h2>
  <p>
    The Extended Essay is independent research, up to 4,000 words, supervised at school; from the 2027 assessment it
    includes three reflection sessions with the supervisor, ending in a short viva voce, and a 500-word reflective
    statement. TOK is assessed by an exhibition of three objects and a 1,600-word essay on one of six prescribed titles.
    A tutor may teach the subject knowledge behind a topic and explain what each criterion rewards. A tutor must not
    choose the topic, write or edit any part of the work, or do the analysis. That rule holds whether lessons are at
    home or online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibkc-younger">PYP and MYP in brief</h2>
  <p>
    The PYP, for ages 3 to 12, is organised around six transdisciplinary themes, taught through inquiry and rounded off
    by an exhibition in the final year, with no external exams; useful tutoring is reading, writing and number
    confidence. The MYP, for ages 11 to 16 over five years (shorter in some schools), covers eight subject groups judged
    against criteria, a personal project of about 25 hours, and optional two-hour on-screen exams in some groups.
    MYP help is mostly maths and sciences in the last two years, and writing to the criteria.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibkc-subjects">Subjects and pages</h2>
  <ul>
    <li>Maths, AA or AI at SL or HL: <a href="{{ url('/ib-maths-tutor') }}">IB maths tutors online</a> and <a href="{{ url('/maths-home-tutor-kochi') }}">maths tutors in Kochi</a>; the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA vs AI guide</a> explains the courses.</li>
    <li>Sciences: <a href="{{ url('/physics-home-tutor-kochi') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-kochi') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-kochi') }}">biology</a> tutors in Kochi, plus the <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL/HL guide</a>.</li>
    <li>Language A: <a href="{{ url('/english-home-tutor-kochi') }}">English tutors in Kochi</a>.</li>
  </ul>
  <p>
    For the full picture of the IB, read our reference page on <a href="{{ url('/ib-tutor-gurgaon') }}">how PYP, MYP and
    the Diploma work</a> and the <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE
    parent's guide</a>. Students coming from Cambridge courses may also want <a href="{{ url('/igcse-tutor-kochi') }}">IGCSE
    tutors in Kochi</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibkc-zones">When a home tutor is available: reaching each zone</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Routes for a visiting tutor, from our Kochi zone guides</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Route and timing</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/kochi/zone/central-ernakulam') }}">Central Ernakulam</a>, e.g. {!! $ibkcA('marine-drive', 'Marine Drive') !!} or {!! $ibkcA('thevara', 'Thevara') !!}</td><td>Blue Line to Town Hall, Ernakulam South or Kadavanthra; Thevara has no station, so a longer auto</td></tr>
      <tr><td><a href="{{ url('/city/kochi/zone/edappally-north-kochi') }}">Edappally and North Kochi</a>, e.g. {!! $ibkcA('kalamassery', 'Kalamassery') !!}</td><td>Blue Line to Kalamassery; avoid industrial shift changes and container traffic</td></tr>
      <tr><td><a href="{{ url('/city/kochi/zone/kakkanad-east-kochi') }}">Kakkanad and East Kochi</a>, e.g. {!! $ibkcA('vazhakkala', 'Vazhakkala') !!}</td><td>No metro yet; after the office rush toward the IT parks, or weekend mornings</td></tr>
      <tr><td><a href="{{ url('/city/kochi/zone/vyttila-tripunithura') }}">Vyttila and Tripunithura</a>, e.g. {!! $ibkcA('maradu', 'Maradu') !!}</td><td>Metro plus a short auto; in Maradu's complexes, confirm gate registration and visitor parking</td></tr>
      <tr><td><a href="{{ url('/city/kochi/zone/west-kochi-islands') }}">West Kochi and the islands</a>, e.g. {!! $ibkcA('vypin', 'Vypin') !!}</td><td>Water Metro from High Court; for specialist subjects in Vypin's northern villages, pair a local tutor with online classes</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    All areas are listed on the <a href="{{ url('/city/kochi') }}">Kochi home tuition page</a>, and the
    <a href="{{ url('/blog/kochi-tuition-guide') }}">Kochi tuition guide</a> covers timing in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibkc-demo">Demo checklist for an IB tutor, home or online</h2>
  <ol>
    <li>Share a marked test; the tutor should explain the markscheme notes and the method marks lost.</li>
    <li>Confirm the subject guide and exam session they are teaching to, including the maths change from 2027.</li>
    <li>Ask how they teach command terms such as "evaluate" and "show that".</li>
    <li>For online lessons, check the setup: can they see your child's handwriting clearly and in real time?</li>
    <li>Ask exactly where they draw the line on IA and EE help.</li>
    <li>Ask for a plan for the next month, tied to school deadlines.</li>
  </ol>
  <p>
    You get two or three matched tutors, local, online or both, with each fee shown before the demo, and switching later
    is free. Tutors who join complete an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before going live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibkc-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For the IB, the
    programme, level, number of subjects and whether lessons are at home or online shape the fee. See the
    <a href="{{ url('/blog/home-tuition-fees-kochi') }}">Kochi fees guide</a> and the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  <p>
    Send the programme, year, subject and level, your area, and whether you are open to online lessons, then book the
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a> meanwhile;
    IB teachers living in Kochi can find requests on <a href="{{ url('/tuition-jobs/kochi') }}">Kochi tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
