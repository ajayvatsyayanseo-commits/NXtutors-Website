{{--
  "Accountancy home tutor Guwahati" subject page. Byline: NXTutors Academic Team.
  No school, society, person, institute or company is named.

  Board facts reuse the checked statements on the national accountancy-home-tutor
  page, which cites (read 1 Oct 2026):
  - CBSE Accountancy (055) XI-XII 2026-27,
    cbseacademic.nic.in/web_material/CurriculumMain27/SecPart2/Accountancy_SecP2_2026-27.pdf
    (80 + 20 each year; XII partnership 36, companies 24, Part B 20; project file 12 + viva 8).
  - CBSE Business Studies (054) 2026-27, cbseacademic.nic.in.
  - CISCE ISC Accounts (858) and Commerce (857), cisce.org/wp-content/uploads/2025/04/
    (Part I 20; Part II five of eight at 12; XII Section A: compulsory Q1 of 12, then
    four of seven at 12; Section B or C 20; two 10-mark projects).
  - Cambridge IGCSE Accounting 0452 (2027-2029) and AS & A Level 9706 (2026-2028),
    cambridgeinternational.org (IGCSE not tiered, grades A*-G).
  - IBO DP subject list (no separate accounting course).
  - NTA CUET (UG) 2026 Information Bulletin, cuet.nta.nic.in (301; 50 questions, 60 min).
  Assam's state board (AHSEC for Classes 11-12, since brought together with SEBA under
  a single state school education board) is described generally only, as on the
  Guwahati hub. Local facts only from database/seo-content/areas/guwahati-research.json
  and guwahati-zone-guides.json. No claim of local commerce-tutor supply or demand.
--}}
@php
  $gacSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gacA = function (string $slug, string $label) use ($gacSlugs) {
      return in_array($slug, $gacSlugs, true)
          ? '<a href="' . e(url('/city/guwahati/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide gac-guide" aria-labelledby="gacGuideTitle">
  <h2 id="gacGuideTitle">Accountancy home tutor in Guwahati: a plan for the partnership year and everything before it</h2>

  <p class="nx-guide__lede">
    Guwahati commerce students write accountancy for Assam's state board, CBSE, ISC or a Cambridge syllabus. Whichever
    it is, Class 12 turns on partnership accounts, and partnership turns on the Class 11 basics. NXTutors asks for the
    board, the class, the chapters that are slipping, the medium of answers and your locality, then suggests two or
    three tutors who can come home or teach online. You see each fee before choosing, and the tutor you pick teaches
    the first class as a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gac-boards">Boards side by side</a> ·
    <a href="#gac-state">Assam's state board</a> ·
    <a href="#gac-partner">Partnership, worked</a> ·
    <a href="#gac-isc">The ISC Class 12 paper</a> ·
    <a href="#gac-where">Six localities</a> ·
    <a href="#gac-mode">Home or online</a> ·
    <a href="#gac-cuet">CUET and streams</a> ·
    <a href="#gac-demo">The demo</a> ·
    <a href="#gac-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gac-boards">Accountancy boards side by side</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Senior accountancy in Guwahati: theory paper, coursework and the option to check</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Theory paper</th><th scope="col">Coursework</th><th scope="col">Option to check</th></tr>
    </thead>
    <tbody>
      <tr><td>Assam state board, higher secondary commerce</td><td colspan="2">Set out in the board's own syllabus and notices</td><td>The current syllabus and medium of answers</td></tr>
      <tr><td>CBSE Accountancy (055)</td><td>80 marks, three hours, NCERT books</td><td>20 marks; in Class 12 a project file (12) and viva (8)</td><td>Class 12 Part B: financial statement analysis or Computerised Accounting</td></tr>
      <tr><td>ISC Accounts (858)</td><td>80 marks, three hours</td><td>Two projects of 10 marks</td><td>Class 12: Section B or Section C</td></tr>
      <tr><td>ISC Commerce (857)</td><td>80 marks, descriptive</td><td>Two projects of 10 marks</td><td>Whether your child takes it alongside Accounts</td></tr>
      <tr><td>Cambridge IGCSE Accounting (0452)</td><td>Multiple choice (30%) and a structured paper (70%); not tiered, so every candidate can reach A*</td><td>None</td><td>The exam series your child is entered for</td></tr>
      <tr><td>Cambridge AS &amp; A Level Accounting (9706)</td><td>Four papers across AS and A Level, including cost and management accounting</td><td>None</td><td>One series or staged over two years</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CBSE commerce students usually add Business Studies (054), its own 80-mark paper with a 20-mark project. The IB
    Diploma has no accounting course; IB students meet accounting inside Business Management. Our
    <a href="{{ url('/cbse-home-tutor-guwahati') }}">CBSE home tutor in Guwahati</a> and
    <a href="{{ url('/icse-home-tutor-guwahati') }}">ICSE and ISC home tutor in Guwahati</a> pages cover the other
    subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gac-state">Commerce on Assam's state board</h2>
  <p>
    For many years AHSEC, the Assam Higher Secondary Education Council, ran the Class 11 and 12 course, and SEBA ran the
    Class 10 examination. The two have since been brought together under a single state school education board, so
    newer notices may carry the new name. We describe the board's commerce stream only in general terms; families
    should take its syllabus, books and paper pattern from the board's own official notices.
  </p>
  <p>
    For a tutor, that means three practical things: plan from the board's prescribed book and recent papers, keep an
    eye on notices for any change of pattern, and teach in the language your child writes in. Some students answer in
    English, some in Assamese; if your child moved from Assamese medium to English at Class 11, ask for a tutor who can
    explain in Assamese while building the English terms the paper uses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gac-partner">Partnership accounts, worked through once</h2>
  <p>
    Partnership firms are the largest single unit in CBSE Class 12 (36 of 80 theory marks), and in ISC they sit inside
    the compulsory 60-mark Section A. Admission of a partner shows why a fixed order of working matters. Suppose A and B
    share profits 3:2 and admit C for a one-fifth share:
  </p>
  <ol>
    <li><strong>New ratio.</strong> C takes 1/5, leaving 4/5 for A and B in their old ratio. A gets 3/5 of 4/5 = 12/25; B gets 2/5 of 4/5 = 8/25; C gets 5/25. New ratio 12:8:5.</li>
    <li><strong>Sacrificing ratio.</strong> Old share minus new share: A gives up 15/25 − 12/25 = 3/25; B gives up 10/25 − 8/25 = 2/25. Sacrificing ratio 3:2.</li>
    <li><strong>Goodwill.</strong> C's share of goodwill is credited to A and B in the sacrificing ratio.</li>
    <li><strong>Revaluation and reserves.</strong> Gains and losses on revaluing assets, and any reserves, go to the old partners in the old ratio.</li>
    <li><strong>Capital accounts and balance sheet.</strong> Only then are the capitals and the new balance sheet drawn up.</li>
  </ol>
  <p>
    The usual mistake is to use the new ratio at step 3 or step 4. Once that happens, every account after it is wrong,
    and a student who wrote no working notes cannot collect method marks. A tutor's job is to make this order automatic
    and to insist that each step is written down, then to repeat the routine for retirement and death of a partner,
    where the gaining ratio takes the sacrificing ratio's place.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gac-isc">How the ISC Class 12 paper is put together</h2>
  <p>
    In ISC Accounts Class 12, Section A carries 60 marks: a compulsory 12-mark first question, then four questions out of
    seven, each worth 12. The last 20 marks come from Section B (financial statement analysis and the cash flow statement)
    or Section C (computerised accounting with spreadsheets and databases), with two questions out of three at 10 marks
    each. Class 11 follows the standard CISCE pattern: 20 compulsory short-answer marks, then five questions from eight.
    Students who practise choosing their questions in the first five minutes of a paper lose less time later, and a
    tutor can rehearse that choice on past-style papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gac-where">How does a tutor reach six Guwahati localities?</h2>
  <p>
    GS Road, the railway and the hills shape most journeys, and office and market hours decide when a lesson can start
    on time. Six localities from five zones; the <a href="{{ url('/city/guwahati') }}">Guwahati home tuition page</a>
    covers the rest.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Guwahati localities: the route in and what a visiting accountancy tutor should know</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Way in</th><th scope="col">Share before the demo</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $gacA('paltan-bazaar', 'Paltan Bazaar') !!}</td><td>Guwahati railway station and the bus terminal behind it</td><td>The floor, since many homes sit above or behind shops</td></tr>
      <tr><td>{!! $gacA('uzan-bazar', 'Uzan Bazar') !!}</td><td>Bus or auto into the old core near the river</td><td>A lane landmark such as the nearest ghat or tank</td></tr>
      <tr><td>{!! $gacA('lachit-nagar', 'Lachit Nagar') !!}</td><td>Rajgarh Road between GS Road and the Zoo Road side</td><td>Where a two-wheeler or car can be parked in the narrow lanes</td></tr>
      <tr><td>{!! $gacA('hatigaon', 'Hatigaon') !!}</td><td>Buses through Ganeshguri, then a short auto ride</td><td>A slot outside office opening and closing times near the capital complex</td></tr>
      <tr><td>{!! $gacA('six-mile', 'Six Mile') !!}</td><td>GS Road and the flyover to the highway, or Narangi station</td><td>Tower and flat number for apartment buildings</td></tr>
      <tr><td>{!! $gacA('adabari', 'Adabari') !!}</td><td>City bus to Adabari Tiniali, or Kamakhya Junction nearby</td><td>A precise pick-up point and a margin for the busy junction</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone guides for <a href="{{ url('/city/guwahati/zone/old-city-riverfront') }}">the Old City and Riverfront</a>,
    <a href="{{ url('/city/guwahati/zone/gs-road-dispur') }}">GS Road and Dispur</a> and
    <a href="{{ url('/city/guwahati/zone/maligaon-jalukbari-north-guwahati') }}">Maligaon, Jalukbari and North
    Guwahati</a> go further, and the <a href="{{ url('/blog/guwahati-tuition-guide') }}">Guwahati tuition guide</a>
    covers the city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gac-mode">Home or online for accountancy in Guwahati?</h2>
  <p>
    A home tutor sees every line of the ledger as it is written, which is why home lessons suit Class 11 and the long
    partnership questions of Class 12. Online lessons work once the student sends homework photos before the session
    and keeps the notebook in view; for CBSE Computerised Accounting or ISC Section C they can be the better choice, with
    a shared spreadsheet.
  </p>
  <p>
    We do not say how many commerce tutors live near you, because we cannot know that in advance. Families anywhere in the city can request a
    home tutor; if nobody suitable can reach you at your hour, online widens the choice to tutors across Guwahati and
    beyond. Around Bohag Bihu and Durga Puja, when parts of the city fill up, an online week keeps the routine. See
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutoring</a> for the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gac-cuet">CUET, and the decision before Class 11</h2>
  <p>
    The NTA's CUET (UG) 2026 bulletin lists Accountancy / Book Keeping (code 301) as a domain subject: 50 compulsory
    questions to answer in an hour, following the Class 12 NCERT syllabus. A state-board student aiming at CUET should ask the tutor to
    compare the board's book with the NCERT chapters. Check the bulletin for your year. If the stream is not yet
    chosen, read our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">guide to picking a Class 11
    stream</a> alongside the <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 tutoring page</a>. Both use
    Gurugram examples, yet the questions they ask a family to weigh are the same in Guwahati.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gac-demo">What to check in the free demo</h2>
  <ol>
    <li>The tutor asks for the board, class, medium and any Class 12 option first.</li>
    <li>Your child works through a question with working notes, step by step.</li>
    <li>On a partnership question, the tutor insists on the order of working.</li>
    <li>Errors are found by questioning, not just corrected.</li>
    <li>For a state-board student, the board's book and recent papers are used.</li>
    <li>You leave with practice for the next fortnight and a date to review it.</li>
  </ol>
  <p>
    Not convinced after the hour? Tell us, and the next tutor on your shortlist gives a demo instead. Should the match
    stop working months later, changing tutor costs nothing either.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gac-fees">Accountancy tuition fees in Guwahati, and your request</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own fees,
    shown before the demo. A tutor's rate in Guwahati moves with the class and board, experience with that paper, the
    journey to your locality at your hour, and how many sessions a week you book; our
    <a href="{{ url('/blog/home-tuition-fees-guwahati') }}">Guwahati home tuition fees</a> article sets this out.
  </p>
  <p>
    In your request, include the class and board, any Class 12 option, the language of answers, the weakest chapters,
    your locality and nearest landmark, preferred days and the budget you have in mind. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. Most commerce students take
    economics as well: see our <a href="{{ url('/economics-home-tutor-guwahati') }}">economics tutor in Guwahati</a>
    page. For depth by chapter, the national <a href="{{ url('/accountancy-home-tutor') }}">accountancy home tutor</a>
    guide is the place to go; for other subjects in the city, try the Guwahati
    <a href="{{ url('/english-home-tutor-guwahati') }}">English</a> and <a href="{{ url('/maths-home-tutor-guwahati') }}">maths</a>
    pages. Accountancy teachers living here can look through current requests on
    <a href="{{ url('/tuition-jobs/guwahati') }}">Guwahati tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
