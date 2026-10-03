{{--
  Long-form guide for the "accountancy home tutor Indore" page. Byline: NXTutors
  Academic Team. No schools, coaching institutes, societies or people are named,
  and no claim is made about local commerce-tutor supply or demand.

  Local facts come only from database/seo-content/areas/indore-research.json,
  indore-zone-guides.json, database/seo-content/zones/indore.json and the city
  hub (resources/views/city/content/indore.blade.php): CBSE, MP Board, CISCE,
  smaller IB/IGCSE group; four zones; Yellow Line first five stations on the
  Super Corridor opened 31 May 2025, next eleven (Super Corridor 2 to Malviya
  Nagar Chauraha) in regular service from 6 Sep 2026; Palasia as an education hub
  with coaching institutes; IDA schemes (Scheme 78 sectors and slices);
  Sukhliya colonies near Hira Nagar / MR 10 Road stations; Geeta Bhawan IDA
  flats and societies; Khajrana temple junction on the Ring Road; Bhawarkua
  student hub; Sudama Nagar independent houses on Annapurna Road. MP Board
  (Board of Secondary Education, Madhya Pradesh) in general terms only.

  Board facts are reused from the national accountancy-home-tutor page, which
  read these official documents on 1 Oct 2026:
  - CBSE Accountancy (055) and Business Studies (054) 2026-27, cbseacademic.nic.in
  - CISCE ISC Accounts (858) and Commerce (857), cisce.org
  - Cambridge IGCSE Accounting 0452 (2027-2029), AS & A Level 9706 (2026-2028)
  - IBO DP individuals and societies subject list, ibo.org
  - NTA CUET (UG) 2026 Information Bulletin, cuet.nta.nic.in
  Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/accountancy-home-tutor-indore.php.
  Area links render only when that Indore area page exists and is active.
--}}
@php
  $iacAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $iacA = function (string $slug, string $label) use ($iacAreaSlugs) {
      return in_array($slug, $iacAreaSlugs, true)
          ? '<a href="' . e(url('/city/indore/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="iacGuideTitle">
  <h2 id="iacGuideTitle">Accountancy tuition in Indore: school, coaching and the board paper, from Vijay Nagar to Rau</h2>

  <p class="nx-guide__lede">
    Indore's commerce families study under CBSE, the MP Board, CISCE's ISC and, in a smaller group, Cambridge or the
    IB. Palasia and Bhawarkua are busy with coaching institutes and students, and for a student who attends coaching
    a home tutor's job changes: less a second teacher, more the person who checks every ledger line and keeps school work on track around the
    coaching timetable. NXTutors matches accountancy tutors on board, class and medium first, then on scheme or
    colony and the journey in. This NXTutors Academic Team page covers Indore's side of things; the syllabus in full
    is on our national <a href="{{ url('/accountancy-home-tutor') }}">accountancy home tutor</a> guide.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#iac-boards">Boards and papers</a> ·
    <a href="#iac-mp">MP Board commerce</a> ·
    <a href="#iac-adjust">Adjustments, worked</a> ·
    <a href="#iac-coaching">Alongside coaching</a> ·
    <a href="#iac-shares">Share forfeiture</a> ·
    <a href="#iac-cuet">CUET</a> ·
    <a href="#iac-zones">Four zones</a> ·
    <a href="#iac-areas">Six localities</a> ·
    <a href="#iac-mode">Home or online</a> ·
    <a href="#iac-demo">Demo</a> ·
    <a href="#iac-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="iac-boards">The accounting papers Indore students sit</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Accounting by board for Indore commerce students, summarised from the official documents</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Class 11</th><th scope="col">Class 12</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Accountancy (055)</td><td>Theoretical framework 12, accounting process 44, financial statements of a sole proprietor 24, project 20</td><td>Partnership 36, companies 24, then Financial Statement Analysis 20 or Computerised Accounting; project or practical 20</td></tr>
      <tr><td>ISC Accounts (858)</td><td>Part I 20 compulsory short answers; Part II five 12-mark questions from eight; two 10-mark projects</td><td>Section A 60 (compulsory) plus Section B or Section C, 20; two projects</td></tr>
      <tr><td>MP Board</td><td colspan="2">The board's own commerce syllabus, prescribed books and paper, taught in Hindi or English medium</td></tr>
      <tr><td>Cambridge</td><td>IGCSE Accounting 0452: multiple choice 30%, structured paper 70%</td><td>AS &amp; A Level 9706, including a cost and management accounting paper</td></tr>
      <tr><td>IB Diploma</td><td colspan="2">No separate accounting course; Business Management and Economics are the nearby subjects</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Business Studies (CBSE 054) usually travels with accountancy: another 80-mark paper with a 20-mark project, but
    a written subject marked on points, terms and case application. Tell us whether the help is for one subject or
    both; a specialist for the weaker one is often the better use of a budget.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iac-mp">MP Board commerce: what to ask a tutor</h2>
  <p>
    The Board of Secondary Education, Madhya Pradesh runs the state's Class 10 and Class 12 examinations, and many
    students take them in Hindi or English medium. We describe its commerce stream only in general terms: the board
    sets its own syllabus and books and writes its own paper, and the scheme and dates should be read on its official
    website. Ask any tutor whether they have taught from your child's prescribed book and practised the board's
    recent papers, and whether they can explain account titles and theory in the medium your child writes in.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iac-adjust">Adjustments: one worked example</h2>
  <p>
    Final accounts with adjustments carry 24 marks in CBSE Class 11 and appear in ISC Class 11 too, and a common way to
    lose marks is showing an adjustment in only one place. Consider debtors of ₹50,000 in the trial balance, a note that a
    further ₹2,000 is bad, and an instruction to keep a provision for doubtful debts at 5%. The bad debt is written off
    first, leaving ₹48,000; the provision is 5% of that, ₹2,400. Both amounts go to the profit and loss account (after
    allowing for any old provision), and the balance sheet shows debtors of ₹48,000 less ₹2,400. Students who take 5%
    of ₹50,000, or forget to reduce debtors in the balance sheet, lose marks in two statements at once.
  </p>
  <p>
    A tutor builds a two-effects check for every adjustment, so the student asks "where else does this go?" before
    moving on. It is a small habit with a large effect on whether the balance sheet tallies.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iac-coaching">When the student already goes to coaching</h2>
  <p>
    Palasia is an education hub full of coaching institutes, and Bhawarkua is a busy student area too. If your child
    attends coaching, put its timetable in the request. A home tutor's best role then is narrower and sharper: checking
    homework line by line, rebuilding weak Class 11 basics the batch moved past, preparing for school tests and the
    project, and keeping the board's formats and working notes exact. The tutor's slot should sit before or after
    coaching, not squeezed between it and dinner.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iac-shares">Class 12: forfeiture and reissue of shares, step by step</h2>
  <p>
    Company accounts carry 24 marks in CBSE Class 12, and forfeiture is where students easily tangle the
    figures. Take 100 shares of ₹10 each, fully called. One holder pays ₹7 a share but not the final call of ₹3, and
    the shares are forfeited. Share capital is debited with the ₹1,000 called up, calls in arrears credited with the
    unpaid ₹300, and the ₹700 already received is credited to the share forfeiture account. If the company reissues
    the shares as fully paid for ₹8 each, the ₹200 discount is met from the forfeiture account, and the ₹500 left
    over is transferred to capital reserve.
  </p>
  <p>
    Each line has a reason, and a tutor asks the student to say it aloud before writing the entry. Students who can
    explain why the ₹500 becomes a capital profit are far less likely to confuse the accounts in the exam.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iac-cuet">Accountancy in CUET (UG)</h2>
  <p>
    The NTA's 2026 CUET (UG) bulletin includes Accountancy / Book Keeping (code 301) among the domain subjects, with
    50 compulsory questions in 60 minutes and a syllabus based on NCERT's Class 12 books. The NTA issues a new bulletin
    each cycle, so confirm the details for your child's year. Timed objective practice is best added after the board
    chapters are secure, not instead of them.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iac-zones">How tutors travel to each Indore zone</h2>
  <p>
    The Yellow Line is the only metro so far. Its first five stations, on the Super Corridor, opened on 31 May 2025,
    and regular service on eleven more, through Vijay Nagar to Malviya Nagar Chauraha, began on 6 September 2026.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Indore's four zones and the usual way a home tutor gets there</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Usual travel</th><th scope="col">Useful in the request</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/indore/zone/vijay-nagar-ab-road') }}">Vijay Nagar &amp; AB Road</a></td><td>Yellow Line stations such as Vijay Nagar Chauraha, Meghdoot Garden, Hira Nagar and MR 10 Road</td><td>The nearest station, plus scheme, sector and plot</td></tr>
      <tr><td><a href="{{ url('/city/indore/zone/palasia-central-indore') }}">Palasia &amp; Central Indore</a></td><td>City bus, auto or two-wheeler; Palasia Square station is planned, not open</td><td>The coaching timetable</td></tr>
      <tr><td><a href="{{ url('/city/indore/zone/nipania-bicholi-ring-road') }}">Nipania, Bicholi &amp; Ring Road</a></td><td>Metro to Malviya Nagar Chauraha then auto; otherwise the Ring Road</td><td>A slot either side of the junction peaks</td></tr>
      <tr><td><a href="{{ url('/city/indore/zone/bhawarkua-rajendra-nagar-rau') }}">Bhawarkua, Rajendra Nagar &amp; Rau</a></td><td>City buses on AB Road; Rajendra Nagar and Rau rail stations</td><td>A landmark, and a later evening start near Bhawarkua</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iac-areas">Six Indore localities and how a weekly lesson fits</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>North-east</h3>
      <p>
        {!! $iacA('scheme-78', 'Scheme No. 78') !!} is mainly plotted IDA houses arranged in sectors and slices; give
        the slice as well as the plot. {!! $iacA('sukhliya', 'Sukhliya') !!} is a set of plotted colonies off MR-10
        with Hira Nagar and MR 10 Road stations close by.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Centre and east</h3>
      <p>
        {!! $iacA('geeta-bhawan', 'Geeta Bhawan') !!} mixes IDA flats, cooperative societies and houses near a busy
        square; societies keep a visitor register. {!! $iacA('khajrana', 'Khajrana') !!} has older lanes round its
        temple junction, which is crowded on festival days and weekends.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>South-west</h3>
      <p>
        {!! $iacA('bhawarkua', 'Bhawarkua') !!} is a student hub on AB Road whose roads stay busy most of the day.
        {!! $iacA('sudama-nagar', 'Sudama Nagar') !!} is mostly independent houses linked by Annapurna Road, so the
        tutor usually arrives straight at the door.
      </p>
    </div>
  </div>
  <p>
    Read more in our <a href="{{ url('/blog/vijay-nagar-and-east-indore-tuition-guide') }}">Vijay Nagar and east
    Indore guide</a> and <a href="{{ url('/blog/central-and-south-indore-tuition-guide') }}">central and south Indore
    guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iac-mode">Home or online accountancy in Indore?</h2>
  <p>
    For Class 11 and for the long Class 12 partnership questions, a tutor at the table catches wrong-side postings as
    they happen. Online works when the notebook is clearly on camera and homework photos come in before the lesson,
    and it is the natural format for Computerised Accounting or ISC Section C. Any Indore family can request an
    accountancy tutor; we do not promise a specialist in your scheme, and online opens the choice to tutors across
    India. A tutor who can ride the Yellow Line widens the options for homes near Vijay Nagar and the Super Corridor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iac-demo">A short checklist for the free demo</h2>
  <ul>
    <li>Board, class, medium and Class 12 option confirmed before any teaching.</li>
    <li>Your child writes; the tutor watches and questions.</li>
    <li>Every adjustment checked for its second effect.</li>
    <li>Working notes and the board's formats required.</li>
    <li>For MP Board, the prescribed book used, in the right medium.</li>
    <li>If coaching is in the picture, a clear plan for how the two fit.</li>
    <li>A defined task before the next lesson.</li>
  </ul>
  <p>
    If the fit is poor, we arrange the next demo from your shortlist, and switching later is free. Tutors who join
    go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="iac-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their fees
    and you see them before the demo; our <a href="{{ url('/blog/home-tuition-fees-indore') }}">Indore home tuition
    fees guide</a> explains the range.
  </p>
  <p>
    Tell us the class, board and medium, the chapters causing trouble, any coaching timetable, your scheme or colony,
    free times, home or online, and a budget. We return two or three tutor profiles, and you pick one for a
    <a href="{{ url('/demo-class') }}">free demo class</a>. Browse tutors on our
    <a href="{{ url('/city/indore') }}">Indore page</a>; teachers can see open requests on
    <a href="{{ url('/tuition-jobs/indore') }}">Indore tuition jobs</a>.
  </p>
  <p>
    Economics is the usual partner subject: see our <a href="{{ url('/economics-home-tutor-indore') }}">economics
    tutors in Indore</a>. Also see <a href="{{ url('/cbse-home-tutor-indore') }}">CBSE tutors in Indore</a>,
    <a href="{{ url('/icse-home-tutor-indore') }}">ICSE and ISC tutors in Indore</a>,
    <a href="{{ url('/english-home-tutor-indore') }}">English tutors in Indore</a> for theory answers, and
    <a href="{{ url('/maths-home-tutor-indore') }}">maths tutors in Indore</a>. Before Class 11, our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">stream-choice guide</a> and
    <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 tuition page</a> help with the decision.
  </p>
  </section>

  </div>
</article>
