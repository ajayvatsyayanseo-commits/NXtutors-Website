{{--
  Long-form guide for the "biology home tutor Gangtok" page (Classes 11 and
  12: CBSE and ISC, NEET biology, IB/IGCSE online). Byline in config:
  NXTutors Academic Team. Page writer (capitals wave 2, subjects), 3 Oct 2026.
  Local facts come only from database/seo-content/areas/gangtok-research.json
  (zone_facts, area "about" texts and board_facts: Gangtok's schools follow
  CBSE or CISCE and mainly teach in English and Nepali). No state board is
  named.
  Exam facts reuse the checked statements on the national biology-home-tutor
  page, which cites (fetched 1 Oct 2026):
  - CBSE Biology (044), XI-XII 2026-27, cbseacademic.nic.in: theory 3 h 70,
    practical 30; XI: Diversity 15, Structural Organisation 10, Cell 15,
    Plant Physiology 12, Human Physiology 18; XII: Reproduction 16, Genetics
    and Evolution 20, Human Welfare 12, Biotechnology 12, Ecology 10.
  - CISCE ISC Biology (863), cisce.org: theory 70, practical 15, project 10,
    practical file 5.
  - NTA NEET (UG) 2026 Information Bulletin via neet.nta.nic.in: 180
    questions in 180 minutes, biology 90 (botany and zoology), 720 marks,
    +4/-1, biology first in tie-breaks; syllabus notified by NMC.
  - Cambridge IGCSE 0610, Edexcel 4BI1, IB DP Biology SL/HL.
  No school, college, hospital, society or people's names, no roads named
  after people, no distances or travel times, only the allowed fee sentence.

  Area links render only when that Gangtok area page exists and is active.
--}}
@php
  $gkbAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gkbA = function (string $slug, string $label) use ($gkbAreaSlugs) {
      return in_array($slug, $gkbAreaSlugs, true)
          ? '<a href="' . e(url('/city/gangtok/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp


<article class="nx-guide gtkb-guide" aria-labelledby="gtkbGuideTitle">
  <h2 id="gtkbGuideTitle">Biology home tutor in Gangtok: diagrams, exact terms and a plan that serves both the board and NEET</h2>

  <p class="nx-guide__lede">
    Senior biology looks like the friendliest science until the marks come back. The board paper wants full written
    answers with labelled diagrams; NEET wants the same chapters recalled precisely, at speed, with a mark lost for
    every wrong guess. A Gangtok student in Class 11 or 12 who understands the ideas can still drop marks on both,
    simply because the terms are loose or the diagram is half-labelled. Share your child's board and class, say
    whether medical entrance is part of the plan, and tell us your locality; NXTutors then puts forward two or three
    suitable biology tutors and shows what each one charges. Your first lesson with the chosen tutor costs nothing.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gtkb-boards">Which paper</a> ·
    <a href="#gtkb-units">CBSE unit marks</a> ·
    <a href="#gtkb-neet">NEET</a> ·
    <a href="#gtkb-year">Class 12 year plan</a> ·
    <a href="#gtkb-terms">Terms and diagrams</a> ·
    <a href="#gtkb-places">Five localities</a> ·
    <a href="#gtkb-mode">Home or online</a> ·
    <a href="#gtkb-demo">The demo</a> ·
    <a href="#gtkb-fees">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gtkb-boards">Which biology paper is your child preparing for?</h2>
  <p>
    Gangtok's schools follow CBSE or CISCE, so most senior biology students are on CBSE or ISC, and many add NEET.
    Before Class 11, biology sits inside science; for those years start with our
    <a href="{{ url('/science-home-tutor-gangtok') }}">science home tutor in Gangtok</a> page.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Senior biology papers a Gangtok student may face, how each is scored, and where a tutor puts the effort</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">How it is scored</th><th scope="col">Where the tutor puts the effort</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Biology (044), Classes 11 and 12</td><td>Every year: theory out of 70 over three hours, practical work out of 30</td><td>Reading NCERT closely, case-based items, and keeping the practical file up to date</td></tr>
      <tr><td>ISC Biology (863), Class 12</td><td>Theory 70; practical 15; project 10; practical file 5</td><td>Full explanations, precise vocabulary, carefully drawn figures</td></tr>
      <tr><td>NEET (UG)</td><td>Biology is 90 of the 180 questions, set by NTA</td><td>Fast, accurate recall, with the cost of guessing always in view</td></tr>
      <tr><td>IB Biology (SL or HL); IGCSE 0610 or 4BI1</td><td>Course papers plus, in the IB, an internally assessed investigation</td><td>Data handling and practical skills, usually with an online specialist</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkb-units">How CBSE spreads the biology marks over two years</h2>
  <p>
    The theory paper in both years is marked out of 70. Sorted by weight, the 2026-27 units show a tutor where the
    weeks should go:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Biology 2026-27: theory marks by unit for Classes 11 and 12, heaviest first, with a teaching note</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">How to teach it</th></tr>
    </thead>
    <tbody>
      <tr><td>12</td><td>Genetics and Evolution</td><td>20</td><td>A cross or pedigree problem in every lesson once the unit begins</td></tr>
      <tr><td>11</td><td>Human Physiology</td><td>18</td><td>Each organ system as a sequence of events, drawn and explained</td></tr>
      <tr><td>12</td><td>Reproduction</td><td>16</td><td>Stage-by-stage figures, with the sequence written beside them</td></tr>
      <tr><td>11</td><td>Diversity of Living Organisms; Cell</td><td>15 apiece</td><td>Kingdom tables and organelle sketches redone once a month</td></tr>
      <tr><td>11</td><td>Plant Physiology</td><td>12</td><td>Photosynthesis and respiration as step-by-step flows</td></tr>
      <tr><td>12</td><td>Human Welfare; Biotechnology</td><td>12 apiece</td><td>Precise definitions and named processes</td></tr>
      <tr><td>11; 12</td><td>Structural Organisation; Ecology</td><td>10 apiece</td><td>Short structured answers and data questions</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Physiology and the cell come back again and again, in Class 12 revision and in NEET, so revisiting both in the
    closing weeks of Class 11 is time well spent. Practical work is worth 30 in each year, built from experiments,
    spotting, the record and a project with its viva; it favours the student who keeps up month by month over the one
    who rushes at the end.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkb-neet">What NEET asks of biology</h2>
  <p>
    Under NTA's 2026 bulletin, NEET (UG) was a single sitting of 180 compulsory multiple-choice questions in 180
    minutes. Physics and chemistry had 45 questions each; biology, drawn from botany and zoology, had 90; the total was
    720 marks. Each correct response scored four, each incorrect one lost a mark, and when candidates tied, biology
    marks were checked before anything else. The National Medical Commission notifies the syllabus, and NTA confirms
    the pattern each year on neet.nta.nic.in, so read the current bulletin rather than an old summary.
  </p>
  <p>
    In practice that means reading NCERT closely, figures and tables included; a short timed objective test whenever
    a chapter is completed; and a log of every mock's errors to steer the following week. Our
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first NEET biology guide</a> and the
    <a href="{{ url('/neet-home-tutor') }}">NEET home tutor</a> page go further, and
    <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">coaching, a home tutor or both</a>
    weighs the options.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkb-year">Splitting Class 12 between the board paper and NEET</h2>
  <p>
    Every school runs to its own calendar, so read this as an outline to bend, not a timetable. It is written for a
    student facing the board exam and NEET in one year.
  </p>
  <ol>
    <li><strong>Opening months:</strong> the two heaviest Class 12 units, Reproduction and then Genetics, each closed with a written board answer every week and a quick objective test when the chapter ends.</li>
    <li><strong>Mid-year:</strong> Human Welfare, Biotechnology and Ecology; the practical file brought up to date; and short, repeated passes over Class 11 Physiology and Cell.</li>
    <li><strong>Run-up to the pre-boards:</strong> complete board papers against the clock, checked with the marking scheme, alongside a full NEET mock every two weeks and its error list.</li>
    <li><strong>Once the boards are over:</strong> a complete NCERT revision of both years, with a mock each week.</li>
  </ol>
  <p>
    For ISC, swap the CBSE papers for CISCE ones; the outline stays the same. What matters is that one exam is never
    put on hold while the other gets all the attention.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkb-terms">Technical terms and diagrams: where careful students gain</h2>
  <p>
    No other school science asks a student to learn so many new words. Gangtok's schools teach mainly in English and
    Nepali, and a student who discusses ideas easily in Nepali still has to write the exact English term the examiner
    expects. A good tutor builds this up deliberately:
  </p>
  <ul>
    <li><strong>Say it, define it, label it:</strong> every new term is spoken, explained and then written onto a figure.</li>
    <li><strong>Pieces of words:</strong> a handful of Greek and Latin beginnings and endings, so a student can decode a new term instead of cramming it.</li>
    <li><strong>A two-column notebook:</strong> each term beside a definition in the student's own words, quizzed out loud weekly.</li>
    <li><strong>Diagrams drawn large</strong> with labels spelt correctly and pointing to the right part, practised until they come quickly and neatly.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkb-places">Five Gangtok localities: how a biology tutor gets to you</h2>
  <p>
    Gangtok runs along its main roads, and homes climb the slopes on either side. Tutors arrive by shared taxi,
    two-wheeler or on foot, so the last stretch matters. The <a href="{{ url('/city/gangtok') }}">Gangtok page</a>
    lists every locality.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five Gangtok localities: the tutor's route in and what to share before the first lesson</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Route in</th><th scope="col">Share beforehand</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $gkbA('tibet-road', 'Tibet Road') !!}</td><td>On foot from the nearest taxi point; parking near the market is scarce</td><td>Building name and a nearby shop or junction; a weekday slot fixed in advance</td></tr>
      <tr><td>{!! $gkbA('arithang', 'Arithang') !!}</td><td>By shared taxi, walking the last stretch on narrow, steep roads</td><td>A roadside landmark and the floor; say whether the door is above or below the road</td></tr>
      <tr><td>{!! $gkbA('tadong', 'Tadong') !!}</td><td>Shared taxi along the highway, then often on foot to a hillside home</td><td>Upper or Lower Tadong, the building and floor; a tutor from Tadong or Deorali for evenings</td></tr>
      <tr><td>{!! $gkbA('chandmari', 'Chandmari') !!}</td><td>Shared taxi or two-wheeler, then steps or a footpath</td><td>Directions from the taxi point and a phone number for the first visit</td></tr>
      <tr><td>{!! $gkbA('sichey', 'Sichey') !!}</td><td>Along the bypass from Burtuk, Chandmari or the centre</td><td>Which part of Sichey, and a slot outside office-hour traffic</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone pages for <a href="{{ url('/city/gangtok/zone/deorali-tadong-ranipool') }}">Deorali, Tadong and
    Ranipool</a> and <a href="{{ url('/city/gangtok/zone/central-gangtok-tibet-road') }}">Central Gangtok and Tibet
    Road</a>, and the <a href="{{ url('/blog/gangtok-home-tuition-guide') }}">Gangtok home tuition guide</a>, add local
    timing advice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkb-mode">Home, online or a mix?</h2>
  <p>
    Biology at this level moves to a screen more easily than most subjects. A figure can be sketched on a tablet or
    shown to the webcam, and going through a NEET mock together works naturally on a shared screen. A tutor in the
    room still helps the student who loses focus alone, and lets a parent see the practical file being checked on
    paper. Because the specialist you want for ISC, IB or NEET may be across town or in another city, a common Gangtok
    arrangement is a weekly visit plus a weekly online lesson, with the visit also moving online on heavy-rain
    evenings. The <a href="{{ url('/online-tutor-gangtok') }}">online tutor for Gangtok</a> page explains how.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkb-demo">Signs of a good biology tutor at the demo</h2>
  <ul>
    <li>Questions come first: the tutor checks your child's starting point before teaching.</li>
    <li>A figure gets drawn and labelled by your child, not by the tutor.</li>
    <li>Each term is made simple in speech, then written in the examiner's exact wording.</li>
    <li>The tutor can explain how the CBSE or ISC paper is built and where NEET is different.</li>
    <li>There is a plan for going back over earlier units, not just racing to finish new ones.</li>
  </ul>
  <p>
    Not convinced? Tell us, and a demo with the next shortlisted tutor follows; a later change costs nothing either.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkb-fees">What does a biology home tutor in Gangtok charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Senior and NEET biology
    usually lands nearer the top of that range. Every tutor decides a rate, and you see it before the demo; the
    <a href="{{ url('/blog/home-tuition-fees-gangtok') }}">Gangtok home tuition fees</a> article lists the questions
    worth asking.
  </p>
  <p>
    Write to us with the class and board, whether NEET is on the cards, the units giving trouble, your locality, the
    hours you can offer and a budget. Back come two or three biology tutors with fees, and you can
    <a href="{{ url('/demo-class') }}">book a free demo class</a>. Every tutor who joins completes an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is marked Verified. The Gangtok
    <a href="{{ url('/physics-home-tutor-gangtok') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-gangtok') }}">chemistry</a> pages cover the other sciences, and our national
    <a href="{{ url('/biology-home-tutor') }}">biology home tutor</a> page goes deeper into IB and IGCSE. Biology
    teachers who live locally can look through open requests on <a href="{{ url('/tuition-jobs/gangtok') }}">Gangtok
    tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
