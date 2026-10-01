@extends('legal.layout')
@php $E = $legal['entity_name']; @endphp

@section('summary')
<ul>
  <li>Tutors who join go through an ID check before their profile goes live. It confirms <strong>who</strong> the tutor is. It is <strong>not</strong> a police verification or a criminal background check.</li>
  <li>Parents stay responsible for supervising their child. Be at home for the demo, check the tutor against the profile, and keep young children's classes in a shared room.</li>
  <li>Tutors must follow clear rules: talk to the parent, not privately to the child; no recording without consent; no physical punishment.</li>
  <li>If anything worries you, stop the classes and tell us. In an emergency, call 112 first. For a child in distress, call 1098.</li>
</ul>
@endsection

@section('content')
<section>
  <h2 id="commitment">1. Our commitment</h2>
  <p>Many students on NXTutors are children. {{ $E }} ("NXTutors") wants every class, at home or online, to be safe. This policy sets out what we do, what we do not do, and what we expect from tutors and parents. It applies to everyone who uses the Platform, and breaking it is a breach of the <a href="{{ url('/terms-conditions') }}">Terms of Use</a> and the <a href="{{ url('/tutor-terms') }}">Tutor Terms</a>.</p>
</section>

<section>
  <h2 id="what-we-do">2. What NXTutors does</h2>
  <ul>
    <li><strong>ID check before a profile goes live.</strong> Tutors confirm their phone or email with a one-time code and upload a government photo ID. Our team reviews it, and the profile stays pending until it is made active. Each ID number can be linked to only one tutor account. See <a href="{{ url('/how-we-verify-tutors') }}">How we verify tutors</a>.</li>
    <li><strong>The Verified badge</strong> is shown only on real tutors who passed the check. Sample profiles are labelled and are never bookable.</li>
    <li><strong>A free demo first</strong>, so you meet the tutor before committing, and <strong>free switching</strong> if a tutor is not right.</li>
    <li><strong>Tutor declarations.</strong> Tutors confirm that they have not been convicted of, and are not facing a charge for, an offence involving children, a sexual offence or an offence of violence.</li>
    <li><strong>Acting on concerns.</strong> We look into every safeguarding report, can pause a tutor's profile while we do, and remove tutors who break this policy.</li>
    <li><strong>Children's data.</strong> We ask a parent or guardian for verifiable consent before keeping a child's learning records, as explained in the <a href="{{ url('/privacy-policy') }}#children">Privacy Policy</a>.</li>
  </ul>
</section>

<section>
  <h2 id="limits">3. What the check does not cover</h2>
  <p>The ID check confirms a tutor's identity. It is not a police verification, a criminal record check, a reference check or an assessment of teaching, and NXTutors does not supervise classes. We cannot guarantee any tutor's conduct. That is why the safety habits below matter, especially for younger children. If you want extra assurance, you may ask a tutor for a police clearance certificate before classes start.</p>
</section>

<section>
  <h2 id="parents">4. Safety habits for parents</h2>
  <ul>
    <li>Be at home for the demo class. Talk to the tutor and match the name and photo with the profile you were sent.</li>
    <li>In a gated society, add the tutor to the visitor app or gate register so every visit is logged.</li>
    <li>For younger children, keep an adult at home and hold classes in a shared room rather than a closed bedroom.</li>
    <li>For online classes, keep the camera on, use a shared space and check in during the class from time to time.</li>
    <li>Keep messages between the tutor and the family in a parent's phone or a family group, rather than the child's private chat.</li>
    <li>Talk to your child about the classes and listen if anything makes them uncomfortable.</li>
    <li>Pay fees for classes taken, monthly or as you go, rather than large sums in advance.</li>
  </ul>
</section>

<section>
  <h2 id="tutors">5. Rules for tutors</h2>
  <ul>
    <li>Arrange classes, schedules and fees with the parent. Do not contact a child privately, on social media or by personal messaging without the parent's knowledge.</li>
    <li>Teach in a room where a parent or another adult is at home, and for online classes, in a way the parent can observe.</li>
    <li>Never use physical punishment, threats, humiliation or inappropriate language, and never touch a student inappropriately.</li>
    <li>Do not record classes, take photos or share images of a student without the parent's written consent.</li>
    <li>Do not give gifts, meet outside class or offer lifts without the parent's agreement.</li>
    <li>Do not come to a class under the influence of alcohol or drugs.</li>
    <li>If a child tells you about abuse, or you suspect it, report it as the Protection of Children from Sexual Offences Act, 2012 requires and tell us.</li>
  </ul>
</section>

<section>
  <h2 id="report">6. How to report a concern</h2>
  <ul>
    <li><strong>Immediate danger</strong>: call the police on 112 first.</li>
    <li><strong>A child in distress</strong>: Childline on 1098 is free and runs day and night.</li>
    <li><strong>Tell NXTutors</strong>: stop the classes and write to <a href="mailto:{{ $legal['grievance_email'] }}">{{ $legal['grievance_email'] }}</a>, use the <a href="{{ url('/contact') }}">contact page</a> or message us on WhatsApp. Mark it "Safeguarding". You do not need proof to report a worry.</li>
  </ul>
</section>

<section>
  <h2 id="what-happens">7. What we do when we receive a report</h2>
  <ul>
    <li>We acknowledge it within {{ $legal['ack_hours'] }} hours and treat it as a priority.</li>
    <li>Where a child may be at risk, we pause the tutor's profile and leads while we look into it.</li>
    <li>We speak to the people involved where appropriate, keep the reporter's identity confidential as far as the law allows, and cooperate fully with the police and child-protection authorities.</li>
    <li>If a concern is upheld, we remove the tutor and do not allow them to register again.</li>
    <li>We tell the person who reported what we did, as far as privacy and the law allow.</li>
  </ul>
</section>

<section>
  <h2 id="review">8. Review of this policy</h2>
  <p>We review this policy at least once a year and after any serious incident. The date at the top shows the latest version.</p>
</section>
@endsection
