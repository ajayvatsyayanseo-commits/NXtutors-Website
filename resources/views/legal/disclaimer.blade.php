@extends('legal.layout')
@php $E = $legal['entity_name']; @endphp

@section('summary')
<ul>
  <li>We do not promise marks, ranks, admissions or any particular result.</li>
  <li>NXT AI is an automated assistant. It can be wrong, so check important answers with a tutor or the official source.</li>
  <li>Sample profiles show what a profile looks like. They are not real tutors and cannot be booked.</li>
  <li>The Verified badge confirms identity only. It is not a police check or a rating of teaching.</li>
  <li>Fee ranges, exam information and articles are general guidance, not professional advice.</li>
</ul>
@endsection

@section('content')
<section>
  <h2 id="general">1. General</h2>
  <p>The information on the NXTutors Platform, run by {{ $E }} ("NXTutors"), is provided for general guidance. We work to keep it accurate and up to date, but to the extent the law allows, we do not guarantee that it is complete, current or suitable for your purpose. This Disclaimer forms part of the <a href="{{ url('/terms-conditions') }}">Terms of Use</a> and does not limit any right you have under Indian law.</p>
</section>

<section>
  <h2 id="results">2. No promise of results</h2>
  <p>Progress, marks, ranks and admissions depend on the student's effort, attendance and starting point, the tutor, the school and many other things outside our control. NXTutors does not guarantee any academic result. A tutor's past results or experience do not promise the same for your child.</p>
</section>

<section>
  <h2 id="tutors">3. Tutors and their profiles</h2>
  <ul>
    <li>Tutors are independent professionals, not employees of NXTutors. Qualifications, experience, fees and other profile details are provided by the tutor. We check identity, not every statement on a profile.</li>
    <li>Tutors who join go through an ID check. The Verified badge confirms identity only. It is not a police verification, a criminal background check or an assessment of teaching. See <a href="{{ url('/how-we-verify-tutors') }}">How we verify tutors</a>.</li>
    <li>The first class is a free demo so that you can judge the tutor yourself before you commit.</li>
  </ul>
</section>

<section>
  <h2 id="sample-profiles">4. Sample profiles</h2>
  <p>While we grow in each city, some pages show sample profiles so that you can see what a tutor profile looks like. They are always labelled "Sample profile", never carry the Verified badge, and show no rating, fee or Compare button. They are not tutors you can book. Counts that include them are described as "tutor profiles", not as verified tutors. When you send a request, we match you with real, active tutors only.</p>
</section>

<section>
  <h2 id="nxt-ai">5. NXT AI and other AI features</h2>
  <ul>
    <li>NXT AI and our AI tools generate answers automatically using a third-party AI model. Answers can be incomplete, out of date or wrong, even when they sound confident.</li>
    <li>NXT AI is not a teacher, an exam board, a counsellor or a medical, legal or financial adviser. For exam dates, syllabi and rules, the official board or agency website is the authority.</li>
    <li>Tutor suggestions from NXT AI come from tutor profiles on the Platform and the details you give. They are not endorsements.</li>
    <li>Use AI help to learn, not to submit work that must be your own.</li>
  </ul>
</section>

<section>
  <h2 id="fees">6. Fees and price guides</h2>
  <p>Tutors set their own fees. Fee ranges in our guides describe what we see across NXTutors and are not a quote. The fee that applies is the one the tutor shows you before the demo.</p>
</section>

<section>
  <h2 id="content">7. Articles, guides and exam information</h2>
  <p>Our blog posts, city guides and subject pages are written to help families, using official sources for exam and syllabus facts where we can. Boards and agencies change their rules, so always confirm with the official source before acting. Opinions in articles are those of the named author.</p>
</section>

<section>
  <h2 id="reviews">8. Reviews</h2>
  <p>Reviews are the opinions of the families who wrote them. Our team checks reviews before they are published, but we cannot confirm every statement in them.</p>
</section>

<section>
  <h2 id="third-party">9. Third-party links and services</h2>
  <p>The Platform links to other websites and uses third-party services, such as WhatsApp, maps, payment gateways and exam-board websites. We do not control them and are not responsible for their content, accuracy or availability.</p>
</section>

<section>
  <h2 id="local-info">10. Local information</h2>
  <p>Area and city pages describe localities, travel and timings to help you plan classes. Roads, transport and buildings change, so treat this as general guidance.</p>
</section>
@endsection
