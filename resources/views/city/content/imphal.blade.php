{{--
  Long-form guide for the Imphal city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for Imphal parents
  arranging a home or online tutor. Strictly practical and educational: no
  politics, no electoral divisions, no history beyond place names used for
  directions, no tourism, and the monsoon appears only as timing advice.
  Every figure is either live from the database or a published NXTutors
  policy; local facts come only from the cited research in
  database/seo-content/areas/imphal-research.json. The BOSEM and COHSEM
  descriptions come only from the boards' own sites (https://bosem.in/ and
  https://cohsem.nic.in/). No school, college, institute, hospital, place of
  worship, society, developer or person is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $impAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $impA = function (string $slug, string $label) use ($impAreaSlugs) {
      return in_array($slug, $impAreaSlugs, true)
          ? '<a href="' . e(url('/city/imphal/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $impTutors = (int) ($hubCounts['tutors'] ?? 0);
  $impAreas = $allAreas->count();
@endphp

<article class="nx-guide imp-guide" aria-labelledby="impGuideTitle">
  <h2 id="impGuideTitle">Home tuition in Imphal: a parent's guide from Uripok to Khurai</h2>

  <p class="nx-guide__lede imp-lede">
    In Imphal an address is a leikai, not a block number. The city is a patchwork of small named neighbourhoods,
    many carrying a family name, so Sagolband alone holds a dozen leikais and Khurai even more. The Imphal River
    splits the capital between two districts: Imphal West, run from Lamphelpat, and Imphal East, run from Porompat.
    Tutors here travel by two-wheeler or auto rather than by train or metro, and the inner lanes favour two wheels.
    So the questions that decide whether tuition lasts are simple ones: can the tutor find the house on the first
    evening, which side of the river do they start from, and what happens on a night of heavy rain? This guide works
    through those questions, then covers boards, classes, fees and the free demo.
  </p>
  <nav class="nx-guide__toc imp-toc" aria-label="In this guide">
    <strong>Inside this guide:</strong>
    <a href="#imp-how">Asking for a tutor</a> ·
    <a href="#imp-zones">Three parts of Imphal</a> ·
    <a href="#imp-boards">BOSEM, COHSEM, CBSE</a> ·
    <a href="#imp-classes">Class by class</a> ·
    <a href="#imp-subjects">Subject requests</a> ·
    <a href="#imp-entrance">JEE and NEET</a> ·
    <a href="#imp-mode">Home, online or both</a> ·
    <a href="#imp-fees">What tutors charge</a> ·
    <a href="#imp-demo">The free demo</a> ·
    <a href="#imp-year">Planning the year</a> ·
    <a href="#imp-start">Where to begin</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="imp-how">How do Imphal parents ask for a tutor on NXTutors?</h2>
  <p>
    You send one request and we do the sorting. Include your child's class and board, the subjects causing trouble,
    the leikai and a landmark close to your gate, the hours left after school, and whether you want visits at home,
    classes online or some of each. Add a rough monthly budget. In return you get two or three suggested tutors,
    and every fee is on the shortlist before you meet anyone. The first lesson with the tutor you pick is a free
    demo, and swapping to a different tutor later is free. In Imphal four details shape that shortlist
    more than anything else:
  </p>
  <ul>
    <li><strong>Leikai, mapal and landmark.</strong> Many neighbourhoods have similar family names, such as Thokchom Leikai in more than one locality. Give all three, and a phone number the tutor can ring from the main road.</li>
    <li><strong>West bank or east bank.</strong> Say whether you live in Imphal West or Imphal East. A tutor on your side of the river avoids the busy central crossings every week.</li>
    <li><strong>Board and exam stage.</strong> A Class 10 student sitting the HSLC of the Board of Secondary Education, Manipur, a Class 12 student under the higher secondary council and a CBSE student each need someone who knows that paper.</li>
    <li><strong>A plan for wet nights.</strong> Monsoon rain slows every route. Agree in week one whether a washed-out evening becomes an online lesson rather than a lost one.</li>
  </ul>
  <p>
    Use the demo for a real piece of this week's schoolwork. A tutor's handling of an ordinary stuck moment says
    more than a prepared lesson ever could.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="imp-zones">Imphal in three parts</h2>
  <p>
    @if($impTutors > 0)
      Suggestions for Imphal families are drawn from {{ number_format($impTutors) }} tutor profiles,
    @else
      Suggestions for Imphal families are drawn from our tutor profiles,
    @endif
    and @if($impAreas > 0){{ number_format($impAreas) }} Imphal localities @else each Imphal locality we cover @endif
    each get a dedicated page. That page shows resident tutors first, then tutors from the same zone, then
    those elsewhere in Imphal, and after them online tutors anywhere in the country. For planning visits we sort the
    localities into three zones, two west of the river and one east:
    <a href="#imp-west">Uripok, Thangmeiband &amp; Lamphel</a>,
    <a href="#imp-centre">Sagolband, Keishampat &amp; Singjamei</a> and
    <a href="#imp-east">Wangkhei, Khurai &amp; Porompat</a>. These groupings are our own, drawn for travel; they
    are not official boundaries.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="imp-west">Uripok, Thangmeiband &amp; Lamphel: the western side</h3>
  <p>
    {!! $impA('uripok', 'Uripok') !!} is a long-settled locality west of the city centre, made of many small leikais
    such as Polem, Yambem, Achom and Khaidem Leikai, with Naoremthong and Khwai Brahmapur alongside.
    {!! $impA('thangmeiband', 'Thangmeiband') !!} is larger, spread across Sinam,
    Yumnam, Maisnam and Hijam Leikai and more, and part of the Thangal Bazar trading area falls within its block.
    {!! $impA('langol', 'Langol') !!} covers several separate neighbourhoods, including Lairembi Leikai and Aying
    Leikai, with Langol Tarung on the Thangmeiband side. {!! $impA('lamphel', 'Lamphel and Lamphelpat') !!} is the
    headquarters of Imphal West district; the name joins Lamphel with pat, the Manipuri word for a lake, and government
    offices sit there among homes and the Lamphel Sana Keithel market.
  </p>
  <p>
    Because all four share one side of the city, a tutor living in any of them can usually take on homes in the
    others. Two habits help here. In Langol, say which part you mean, since the name alone covers several places.
    Around Lamphelpat, traffic follows office hours, so a slot that starts after offices close tends to run on time.
    Thangmeiband families, with many children in board years, often book early-evening sessions that avoid the
    late-afternoon rush towards the market. Where a home lies inside a gated campus, tell the guard the tutor's name
    before the first visit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="imp-centre">Sagolband, Keishampat &amp; Singjamei: the central and southern belt</h3>
  <p>
    {!! $impA('sagolband', 'Sagolband') !!} is a dense central locality of leikais and leiraks, from Sagolband Tera
    and Bijoy Govinda to Moirang Leirak and Meino Leirak, and it takes in Kakhulong, Old Lambulane and part of Paona
    Bazar. {!! $impA('keishampat', 'Keishampat') !!} sits beside it, grouped with Keishamthong, Elangbam Leikai and
    Huidrom Leikai, and {!! $impA('kwakeithel', 'Kwakeithel') !!} borders both, with Irom Pukhri Mapal and
    Khagempalli Panthak close by. {!! $impA('singjamei', 'Singjamei') !!} lies near the boundary with Imphal East
    and pairs naturally with Chingamakha and Chingamathak. {!! $impA('thangal-bazar', 'Thangal Bazar and Paona Bazar') !!}
    form the trading heart, west of Kangla Fort on the river's western bank, where the Ima Keithel market complex
    stands on the main road; the Nambul River also runs through this middle part of the
    city.
  </p>
  <p>
    This belt is compact, so a tutor who lives in Keishampat, Kwakeithel or Sagolband can reach most homes in it.
    The real challenge is the address: with so many lanes carrying near-identical names, send the leikai, the lane
    and a landmark in writing. Homes behind the shopfronts of the two bazaars are easier to visit outside shopping
    hours, either on weekend mornings or in the evening once the shops quieten, and a two-wheeler is far easier to
    park than a car. In Singjamei, Chingamakha counts as the same catchment for tutor travel.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="imp-east">Wangkhei, Khurai &amp; Porompat: east of the river</h3>
  <p>
    {!! $impA('wangkhei', 'Wangkhei') !!} sits on the eastern side of the Imphal River, with neighbourhoods such as
    Angom Leikai, Konsam Leikai and Ningthem Pukhri Mapal, and Moirangkhom and Brahmapur grouped with it. Kangla
    Nongpok Torban, the riverside stretch on the eastern bank, is a well-known point for directions.
    {!! $impA('khurai', 'Khurai') !!} is a large spread of leikais, from Konsam and Thoidingjam to Kongkham and
    Chingangbam, with Khomidok, Sangomsang and Ningthoubung nearby. {!! $impA('porompat', 'Porompat') !!} is the
    headquarters of Imphal East district, formed in 1997, and Kongba, Gangapat and Naharup lie close by. {!! $impA('chingmeirong', 'Chingmeirong') !!} divides into
    Nongchup and Nongpok parts and is grouped with Mantri Pukhri and Kabo Leikai.
  </p>
  <p>
    For families on this side, the tutor's starting point matters most. Someone living in Khurai, Kongba or Wangkhei
    can visit weekly without crossing the river, while a tutor from the western localities meets the central bridges
    at their busiest in the late afternoon. Chingmeirong has several schools nearby, so avoid opening and closing
    times when setting a slot. In Porompat, office hours shape the traffic, much as they do around Lamphelpat.
    Specialist Class 11 and 12 subjects are where an online tutor most often fills the gap.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="imp-boards">Which boards do Imphal tutors cover?</h2>
  <p>
    Imphal students sit papers set by Manipur's own bodies, by CBSE, by CISCE or by an international board,
    depending on the school. Manipur splits its state examinations between two bodies, one for Class 10 and one for
    Classes 11 and 12, so name the class as well as the board when you write to us.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Board of Secondary Education, Manipur (BOSEM)</h3>
  <p>
    BOSEM conducts the High School Leaving Certificate (HSLC) examination, the Class 10 paper for state board
    students, and publishes HSLC results, including those of its compartmental examination, on its official site,
    <a href="https://bosem.in/" rel="noopener">bosem.in</a>. For syllabus details and exam dates, rely on the
    board's own notices and your school rather than on anything secondhand. Our page on
    <a href="{{ url('/manipur-board-tutor-imphal') }}">Manipur board tutors in Imphal</a> explains what to ask a
    tutor.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Council of Higher Secondary Education, Manipur (COHSEM)</h3>
  <p>
    COHSEM handles Classes 11 and 12. Its website,
    <a href="https://cohsem.nic.in/" rel="noopener">cohsem.nic.in</a>, carries the curriculum and syllabus for
    Classes XI–XII, guidelines for internal assessment, an academic calendar, previous question papers, notices and
    Class 12 results. A good higher secondary tutor builds practice around those previous papers and keeps an eye on
    the internal assessment guidelines alongside the written exam.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE, CISCE and international boards</h3>
  <p>
    CBSE papers rest on the NCERT textbooks, and the same NCERT content underpins JEE and NEET, so careful textbook
    work counts twice; see <a href="{{ url('/cbse-home-tutor-imphal') }}">CBSE home tutors in Imphal</a>. ICSE and
    ISC students face long written answers over a wide syllabus, and IB or IGCSE learners usually find the right
    specialist online.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="imp-classes">What should tuition focus on, class by class?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Up to Class 8</h3>
  <p>
    The aim is fluent reading, reliable arithmetic and homework finished without a fight. Three short visits a week
    usually beat one long one. Children who will later want entrance preparation need fractions, ratios and simple
    equations to be solid before anything else.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Class 9 is where gaps begin to cost marks, because each chapter leans on the last. Whether the paper is the HSLC
    or CBSE Class 10, the tutor should move in step with the school syllabus and hold back weeks for revision. Two free
    resources track the NCERT chapters and help state board learners as well:
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">how to prepare for Class 10 maths</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">notes for Class 10 science</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    The step into Class 11 is steep. For COHSEM or CBSE Class 12, spend the tutor's hours on the subject that is
    slipping instead of spreading them evenly. Useful reading includes
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">strategies for Class 12 physics</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="imp-subjects">Which subjects do Imphal families request?</h2>
  <p>
    From Class 9 onwards, most requests are for Maths, Science, Physics and Chemistry, with English close behind.
    Our tutors can also take Economics, Accountancy, Social Science, Computer Science and Business Studies, while
    younger children often have one tutor for every subject. Imphal has its own pages for
    <a href="{{ url('/maths-home-tutor-imphal') }}">home maths tutors</a>,
    <a href="{{ url('/science-home-tutor-imphal') }}">science tutors at home</a>,
    <a href="{{ url('/physics-home-tutor-imphal') }}">physics tuition</a>,
    <a href="{{ url('/chemistry-home-tutor-imphal') }}">chemistry tuition</a> and
    <a href="{{ url('/english-home-tutor-imphal') }}">English tuition</a>.
  </p>
  <p>
    Look for a maths tutor who hunts down the exact line where a solution broke; a physics tutor who asks
    for the law in words before any formula; and a chemistry tutor who drills numericals, reactions and recall as
    separate habits, the approach our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 organic and inorganic chemistry notes</a>
    take. In English, the goal is answers composed in the student's own words; our
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide for students</a> gives daily
    practice ideas. Less common electives are often quicker to staff online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="imp-entrance">Can a home tutor help with JEE or NEET from Imphal?</h2>
  <p>
    Yes, when the job is clearly defined. A home tutor is most useful on one of three tasks: clearing doubts left from the
    week's practice, merging board revision with entrance problems in one timetable, or strengthening the weakest
    subject. Since the Class 11 and 12 NCERT books serve both the school papers and the entrance syllabus, a single
    plan can carry a student through both.
  </p>
  <p>
    JEE Main and NEET UG are conducted by NTA, and JEE Advanced follows for those who qualify. Dates and rules change, so take them
    only from that year's NTA bulletin. A common pattern pairs a local tutor for steady weekly practice with a
    specialist online for the toughest problems; our
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths preparation by topic</a> and the
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first NEET biology plan</a> are sensible places to
    start.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="imp-mode">Home visits, online classes or both in Imphal?</h2>
  <p>
    Home lessons suit younger children, teenagers whose attention wanders online, and subjects where the tutor needs to watch
    every line of working. Online lessons widen the choice to tutors anywhere in India. Several Imphal situations
    lead families to combine the two:
  </p>
  <ul>
    <li><strong>Heavy-rain evenings.</strong> In the monsoon, an online lesson on the wettest nights keeps the week intact.</li>
    <li><strong>Cross-river matches.</strong> When the tutor lives in Uripok and the student in Khurai, alternating a visit with a screen lesson keeps the pairing alive.</li>
    <li><strong>Busy bazaar hours.</strong> Homes near Thangal Bazar and Paona Bazar can switch shopping-hour slots online.</li>
    <li><strong>Specialist subjects.</strong> An uncommon elective or an IB or IGCSE syllabus may need a tutor based in another city.</li>
  </ul>
  <p>
    Often the same tutor does both: visits in a normal week, screen lessons when the week goes wrong. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">guide to home versus online tutoring</a> lays out the
    choice, and <a href="{{ url('/online-tutor-imphal') }}">online tutoring for Imphal students</a> shows how lessons
    run on screen.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="imp-fees">What do home tutors charge in Imphal?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Every tutor
    sets their own fee, so if two shortlisted rates look far apart, these questions usually explain the gap:
  </p>
  <ul>
    <li><strong>Which class and goal is this for?</strong> Help with school work in the lower classes tends to be quoted below senior or entrance teaching.</li>
    <li><strong>Which side of the river does the tutor start from?</strong> A long journey can be built into a rate; a tutor from the next leikai may not need to.</li>
    <li><strong>Is a rain-day online class charged the same?</strong> Settle this before the monsoon.</li>
    <li><strong>How long is each visit?</strong> Weigh total teaching time rather than counting visits.</li>
  </ul>
  <p>
    Every fee is visible ahead of the demo, and suggestions stay within the budget you give us. For class-wise and
    subject-wise rates, see the <a href="{{ url('/pricing-guide') }}">NXTutors pricing guide</a>, and for questions
    to ask locally, read <a href="{{ url('/blog/home-tuition-fees-imphal') }}">our guide to home tuition fees in
    Imphal</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="imp-demo">What should you look for in the free demo?</h2>
  <p>A good profile gets a tutor shortlisted; the hour of the demo shows whether they should stay. Notice whether:</p>
  <ol>
    <li><strong>They asked first.</strong> School timetable, the next test, and what to do on a rain-heavy evening.</li>
    <li><strong>They checked the starting point.</strong> A few quick questions before any teaching.</li>
    <li><strong>Your child can explain it back.</strong> In their own words, after the tutor has finished.</li>
    <li><strong>They know the paper.</strong> HSLC, COHSEM or CBSE: could they describe it and name where they check details?</li>
    <li><strong>Your child did most of the work.</strong> Solving, not just listening.</li>
    <li><strong>The slot is realistic.</strong> Can they reach your leikai at that hour every week?</li>
  </ol>
  <p>
    Share the leikai, the landmark and a map pin ahead of the visit, keep lessons in a family room, and make sure a
    grown-up is in the house. Tutors who join go through an ID check; the page on
    <a href="{{ url('/how-we-verify-tutors') }}">our tutor ID check</a> sets out its scope. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> and our
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">advice on choosing a board and stream</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="imp-year">How should tuition fit the Imphal school year?</h2>
  <p>
    Each board sets its own session and exam timetable, so take dates from your school and from official notices;
    COHSEM posts an academic calendar on its site, and BOSEM publishes HSLC notices and results on its own. Most
    tuition years move through four phases:
  </p>
  <ul>
    <li><strong>Start of session:</strong> new books and teachers; repair whatever last year left shaky.</li>
    <li><strong>Monsoon months:</strong> keep the weekly rhythm, moving the worst evenings online instead of dropping them.</li>
    <li><strong>Middle of the year:</strong> chapter work with short tutor-set tests.</li>
    <li><strong>Before the papers:</strong> full timed papers, with COHSEM students working through the council's previous questions.</li>
  </ul>
  <p>
    An early start leaves room to understand rather than memorise; a late start still helps if the hours go on past
    papers and answer-writing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="imp-start">Where should an Imphal family begin?</h2>
  <p>
    Tell us the class, board, subjects, leikai, landmark and free hours. We suggest two or three tutors, you try one
    in a free demo, and you decide afterwards. Pick your locality from the list on this page, read through
    <a href="{{ url('/tutors') }}">profiles of tutors</a>, or <a href="{{ url('/demo-class') }}">request your free
    demo</a>. Where nobody nearby can visit yet, lessons can start online in the meantime.
  </p>
  <p>
    The <a href="{{ url('/blog/imphal-home-tuition-guide') }}">Imphal home tuition guide</a> covers all three zones
    locality by locality, from Uripok and Lamphelpat to Singjamei, Khurai and Porompat.
  </p>
  <p class="imp-note">
    Elsewhere in the region and beyond, see tutors in <a href="{{ url('/city/guwahati') }}">Guwahati</a>,
    <a href="{{ url('/city/kolkata') }}">Kolkata</a>, <a href="{{ url('/city/delhi') }}">Delhi</a> and
    <a href="{{ url('/city') }}">more cities across India</a>.
  </p>
  <p class="imp-note">
    Tutors living in Imphal can look at <a href="{{ url('/tuition-jobs/imphal') }}">home tuition jobs in Imphal</a>
    to see which localities parents are asking about.
  </p>
  </section>

  </div>
</article>
