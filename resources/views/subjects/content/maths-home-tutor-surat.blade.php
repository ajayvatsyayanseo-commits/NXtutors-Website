{{--
  Long-form guide for the "maths home tutor Surat" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/surat-research.json (zone_facts and area "about"
  texts, each with sources). Exam facts reuse the checked statements already
  used on the Delhi maths page, taken from database/seo-content/blog:
  cbse-class-10-maths-preparation, cbse-class-10-board-year-plan-gurgaon,
  cbse-class-12-maths-calculusalgebra, icse-isc-maths-gurgaon-guide,
  -ib-math-aaai-slhl and jee-preparation-gurgaon-coaching-or-home-tutor.
  GSEB is described in general terms only (SSC and HSC, no exam pattern).
  The Surat Metro is described as under construction, with no dates.
  No school, society, developer, mall or people's names, no distances or
  travel times, only the allowed fee sentence.

  Area links render only when that Surat area page exists and is active.
--}}
@php
  $srAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $srA = function (string $slug, string $label) use ($srAreaSlugs) {
      return in_array($slug, $srAreaSlugs, true)
          ? '<a href="' . e(url('/city/surat/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide srm-guide" aria-labelledby="srmGuideTitle">
  <h2 id="srmGuideTitle">Maths home tutor in Surat: fix the syllabus first, then think about which bank of the Tapi you live on</h2>

  <p class="nx-guide__lede">
    A maths tutor in Surat has to pass two tests: know the exact course, from GSEB in Gujarati medium to CBSE Standard,
    ISC or IB, and reach a high-rise flat in Vesu or a house lane in Rander at an hour that suits the school week. Send us the course, the class and your locality; we come back with two or three maths
    tutors who fit, each with a fee listed, and your first lesson with the one you choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#srm-courses">Courses compared</a> ·
    <a href="#srm-gseb">Gujarat board</a> ·
    <a href="#srm-ten">CBSE Class 10</a> ·
    <a href="#srm-senior">Class 12 and JEE Main</a> ·
    <a href="#srm-cisce">ISC, IB, IGCSE</a> ·
    <a href="#srm-zones">Five zones</a> ·
    <a href="#srm-six">Six localities</a> ·
    <a href="#srm-mix">Home and online</a> ·
    <a href="#srm-fees">Fees</a> ·
    <a href="#srm-send">What to send</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="srm-courses">Why does the course name matter more than the class number?</h2>
  <p>
    Ajay Vatsyayan is responsible for the IB, IGCSE and ISC maths guidance here, and Abhinandan Tiwary for the Class 10
    CBSE and ICSE guidance. A tutor fluent in one examining body may be a stranger to another, so we sort by course
    first.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses Surat families bring to us, and the first thing to settle with a tutor</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Where the marks come from</th><th scope="col">Settle first</th></tr>
    </thead>
    <tbody>
      <tr><td>GSEB SSC (Class 10) and HSC (Class 12)</td><td>The board's own scheme, published on gseb.org</td><td>Gujarati or English medium, and the prescribed textbook</td></tr>
      <tr><td>CBSE Class 10, Standard or Basic</td><td>80 on the board paper; 20 awarded in school</td><td>Which of the two levels your child is registered for</td></tr>
      <tr><td>CBSE Class 12</td><td>38 compulsory questions worth 80; 20 internal</td><td>How the calculus chapters will be spread over the year</td></tr>
      <tr><td>ICSE Class 10</td><td>An 80-mark written paper; 20 internal</td><td>How the tutor expects working to be laid out</td></tr>
      <tr><td>ISC Class 12</td><td>80 for theory; 20 for two projects</td><td>Which exam year's syllabus the tutor teaches from</td></tr>
      <tr><td>IB Diploma, AA or AI, SL or HL</td><td>Timed papers plus an internally assessed exploration</td><td>The course and level, since past papers differ</td></tr>
      <tr><td>Cambridge IGCSE</td><td>Core or Extended tier</td><td>Which tier the school has entered your child for</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srm-gseb">Studying under the Gujarat board: what should a Surat tutor be told?</h2>
  <p>
    GSEB conducts the SSC examination at the end of Class 10 and the HSC examination at the end of Class 12. Its
    syllabus, circulars and paper details are on gseb.org, and this page does not restate them. Three points matter
    when matching:
  </p>
  <ul>
    <li><strong>Language of instruction.</strong> A tutor should explain in the language your child is examined in, Gujarati or English, using the terms their teacher uses.</li>
    <li><strong>The prescribed book.</strong> Practice should come from the board's prescribed textbook and the school's unit tests, not a guide written for another board.</li>
    <li><strong>The HSC stream.</strong> Name the stream and group chosen for Classes 11 and 12, so the plan follows the right syllabus.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srm-ten">Where are the 80 board marks in CBSE Class 10 maths, and where do they leak?</h2>
  <p>
    For 2026-27 the 80 theory marks are drawn from 14 NCERT chapters, grouped into seven units. The paper's design is
    unchanged from last session, so the latest sample papers are still the right material to practise from.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 maths, 2026-27: unit marks and the slip a tutor should look for in each</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Where marks usually slip</th></tr>
    </thead>
    <tbody>
      <tr><td>Algebra: polynomials, pairs of linear equations, quadratics, arithmetic progressions</td><td>20</td><td>Setting up the equation from a word problem</td></tr>
      <tr><td>Geometry: triangles and circles</td><td>15</td><td>Proof steps written without the reason beside them</td></tr>
      <tr><td>Trigonometry, heights and distances included</td><td>12</td><td>No figure drawn before choosing a ratio</td></tr>
      <tr><td>Statistics and probability</td><td>11</td><td>Arithmetic errors in grouped-data columns</td></tr>
      <tr><td>Mensuration</td><td>10</td><td>Units dropped halfway through a combined solid</td></tr>
      <tr><td>Real numbers, and coordinate geometry</td><td>6 each</td><td>Rushed because they look easy</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Standard and Basic share one layout. Section A carries 20 single-mark items, 18 of them multiple-choice and 2
    assertion–reason; Section B has five questions of two marks, C six of three, D four of five, and E three case
    studies worth four each. No calculator is allowed, and π is 22/7 unless a question gives another value. The two
    levels part ways on the kind of thinking asked: roughly 54% of Standard marks test remembering and understanding,
    against about 75% in Basic. A child who might take maths in Class 11 should normally be entered for Standard;
    confirm with the school before registration closes.
  </p>
  <p>
    Since 2026, Class 10 students sit a compulsory main exam and may take an optional second one to raise their score
    in up to three subjects, maths included. Dates for 2027 are not yet published; watch cbse.gov.in. See the
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths preparation guide</a>, the
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a>, the
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srm-senior">Can Class 12 board maths and JEE Main share one tutor?</h2>
  <p>
    Yes, if each week has a written plan. The CBSE Class 12 paper sets 38 compulsory questions for 80 marks,
    and calculus accounts for 35 of those, so from the start of the session it deserves the biggest slice of tuition
    time. Our <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>
    explains the split.
  </p>
  <p>
    In JEE Main 2026, Paper 1 had 75 questions for 300 marks, and 25 of them were maths: 20 multiple-choice and 5 with
    a numerical answer, each scored +4 when right and −1 when wrong. Check jeemain.nta.nic.in for the next session
    before planning. A workable rhythm for a student who also attends coaching is to begin with that week's unsolved
    entrance questions and end with one board-length answer written in full. The
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srm-cisce">ISC, IB and IGCSE: what has changed, and what should a tutor already know?</h2>
  <p>
    <strong>ISC Class 12.</strong> For the 2027 and 2028 examinations CISCE sets one 80-mark paper of seven units, and
    the older choice between Section B and Section C is gone. Vectors, three-dimensional geometry, linear programming
    and probability are therefore compulsory for everyone, and calculus is worth 35 marks. Two projects make up the
    remaining 20, each scored out of 10 for format, content, findings and viva. See the
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a>.
  </p>
  <p>
    <strong>IB Diploma.</strong> Analysis and Approaches rests on algebra, functions, calculus and proof, with one paper
    taken without a calculator. Applications and Interpretation rests on modelling and statistics and needs a graphic
    display calculator throughout. At SL two papers carry
    40% each; at HL two carry 30% each and a third 20%. The exploration supplies the final 20% at either level, and it
    has to be the student's own: a tutor may explain the criteria and question a draft, never write it.
    The <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a> helps with the choice.
  </p>
  <p>
    <strong>Cambridge IGCSE.</strong> The Core tier tops out at grade C, while Extended covers A* to G, so settle the
    tier with the school early. Families thinking of changing board can read about
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">moving from CBSE to IB or IGCSE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srm-zones">How do Surat's five zones shape a weekly maths slot?</h2>
  <p>
    We group Surat's localities into five zones; browse any of them on our
    <a href="{{ url('/city/surat') }}">Surat page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Surat's five tutoring zones: how tutors reach each one today, and the usual kind of home</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">How tutors get there now</th><th scope="col">Typical homes</th></tr>
    </thead>
    <tbody>
      <tr><td>Adajan, Pal and Rander</td><td>Sitilink BRTS corridors fanning out from Adajan Patiya; two-wheelers and autos</td><td>Mid-segment apartment societies, with older family houses in Rander</td></tr>
      <tr><td>Central Surat, Athwa and Ghod Dod Road</td><td>City buses, autos; the cable-stayed bridge links Athwa with Adajan</td><td>Flats with a watchman, builder floors and older houses</td></tr>
      <tr><td>Piplod, Vesu and Dumas Road</td><td>The BRTS lane on Gaurav Path, autos and cabs</td><td>Gated high-rise societies and some villas</td></tr>
      <tr><td>Udhna, Althan and Pandesara</td><td>Udhna Junction, the first BRTS corridor, autos</td><td>Affordable apartments, houses and a housing board colony</td></tr>
      <tr><td>Katargam, Varachha and Sarthana</td><td>BRTS to Kosad and Sarthana Jakat Naka; Utran station</td><td>Compact apartment buildings and newer multi-storey societies</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Surat Metro's Red and Green Lines are being built, with Majura Gate planned as their interchange, but no
    section is open to passengers yet. Until it is, a tutor who lives on your side of the river, or on your BRTS
    corridor, is usually the one who keeps the slot.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srm-six">What does the weekly visit look like in six Surat localities?</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>West bank</h3>
      <p>
        {!! $srA('adajan', 'Adajan') !!} mixes mid-segment flats with independent houses, many of them on the Adajan
        Patiya side. Apartment blocks enter a new tutor at the security desk on the first day; the house lanes are
        doorstep visits. Bridge approaches fill at office hours, so set the slot around them.
        In {!! $srA('palanpur', 'Palanpur') !!} nearly every family lives in a multi-storey society of two- and
        three-bedroom flats, so expect gate registration and share the tutor's phone number with the guard in advance.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>South bank and south-west</h3>
      <p>
        {!! $srA('athwa', 'Athwa') !!}, including Athwalines, faces Adajan across the river and offers apartments,
        independent houses and some plots. Tutors from Nanpura, Piplod and City Light reach it easily; evenings near Ghod Dod Road get crowded, so an afternoon hour often works better.
        {!! $srA('vesu', 'Vesu') !!} is one of the city's newest expansions, mostly gated high-rise societies, where
        families sometimes need to arrange a visitor pass. Plan around the evening peak on VIP Road.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>South and north</h3>
      <p>
        {!! $srA('udhna', 'Udhna') !!} lies along the Surat-Navsari highway, with affordable flats and houses between
        industrial estates. Many homes are reached at the door; shift-change hours crowd the roads, so an evening slot
        after that is easier. {!! $srA('katargam', 'Katargam') !!}, north of the Tapi and home to the North Zone office,
        is a dense suburb of smaller apartment buildings near the diamond workshops. Fix the class after the workshop
        shifts end, when the lanes are quieter.
      </p>
    </div>
  </div>
  </section>


  <section class="nx-guide__sec">
  <h2 id="srm-mix">When does a mix of home and online lessons make sense in Surat?</h2>
  <p>
    Two cases suit a mixed week. For a specialist course, where the right IB HL or ISC teacher may live across the
    Tapi, pair one online hour with them and one home hour with a nearby tutor. On a crowded weekday, when shifts or
    shopping hours fill the roads, an online session keeps the plan intact. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article weighs the options.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srm-fees">How much does a maths home tutor in Surat cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees, which vary with the course and class, the tutor's experience of that syllabus, the trip to your zone at your
    chosen hour and the number of weekly sessions. Every fee on your shortlist is shown before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srm-send">What should you send us to start?</h2>
  <p>
    Five details: the class; the board and course by name, with the medium if it is GSEB; your locality and building
    or lane; the days and times you can offer; and a budget. We reply with two or three matched maths tutors and their
    fees, and you pick one for a free demo class. If nobody suitable can reach you at that hour, we suggest online
    or mixed sessions. NXTutors works from Sector 66, Gurugram; the national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page explains how we work
    elsewhere.
  </p>
  <p>
    Maths teachers who live in Surat and want students near home can see open requests on the
    <a href="{{ url('/tuition-jobs/surat') }}">Surat tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
