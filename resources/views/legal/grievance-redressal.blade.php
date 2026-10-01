@extends('legal.layout')
@php
  $E = $legal['entity_name'];
  $officer = $legal['grievance_officer'];
@endphp

@section('summary')
<ul>
  <li>Write to the Grievance Officer at <a href="mailto:{{ $legal['grievance_email'] }}">{{ $legal['grievance_email'] }}</a>.</li>
  <li>We acknowledge every complaint within {{ $legal['ack_hours'] }} hours.</li>
  <li>Complaints about content or conduct on the Platform are resolved within 7 days. Consumer complaints are resolved within one month. Requests about your personal data are answered within 30 days.</li>
  <li>If you are not satisfied, you can go to the National Consumer Helpline, a Consumer Commission, the Grievance Appellate Committee or the Data Protection Board of India.</li>
</ul>
@endsection

@section('content')
<section>
  <h2 id="officer">1. Grievance Officer</h2>
  <p>As required by rule 4 of the Consumer Protection (E-Commerce) Rules, 2020, rule 3(2) of the Information Technology (Intermediary Guidelines and Digital Media Ethics Code) Rules, 2021 and the Digital Personal Data Protection Act, 2023, {{ $E }} ("NXTutors") has appointed a Grievance Officer:</p>
  <ul>
    @if($officer)<li><strong>Name:</strong> {{ $officer }}</li>@endif
    <li><strong>Designation:</strong> {{ $legal['grievance_designation'] }}</li>
    <li><strong>Address:</strong> {{ $E }}, {{ $legal['address'] }}</li>
    <li><strong>Email:</strong> <a href="mailto:{{ $legal['grievance_email'] }}">{{ $legal['grievance_email'] }}</a></li>
    <li><strong>Phone:</strong> {{ $legal['phone'] }}</li>
  </ul>
</section>

<section>
  <h2 id="what-you-can-raise">2. What you can raise</h2>
  <ul>
    <li>a problem with a plan, a payment or a refund;</li>
    <li>a complaint about a tutor, a parent or another user;</li>
    <li>content on the Platform that you believe is unlawful, harmful, false or infringes your rights, including a profile or review;</li>
    <li>a request about your personal data: access, correction, erasure, withdrawal of consent or nomination;</li>
    <li>a decision we made about your account, such as a suspension;</li>
    <li>a safeguarding concern about a child. For these, please also see the <a href="{{ url('/safeguarding-policy') }}">Child Safety and Safeguarding Policy</a>.</li>
  </ul>
</section>

<section>
  <h2 id="how-to-complain">3. How to complain</h2>
  <p>Email the Grievance Officer, or write to the address above, with:</p>
  <ul>
    <li>your name and the email or phone number on your account;</li>
    <li>what happened, with dates, and the link to any profile, review or page involved;</li>
    <li>any order or transaction reference, and screenshots if they help;</li>
    <li>what outcome you are asking for.</li>
  </ul>
  <p>You will receive a complaint reference number. We may ask for more information or proof of identity, especially for requests about personal data.</p>
</section>

<section>
  <h2 id="timelines">4. Timelines</h2>
  <table class="nxlegal-table">
    <thead><tr><th>Type of complaint</th><th>Acknowledgement</th><th>Resolution</th></tr></thead>
    <tbody>
      <tr><td>Any complaint</td><td>Within {{ $legal['ack_hours'] }} hours</td><td>As below</td></tr>
      <tr><td>Content or conduct on the Platform, under the Intermediary Guidelines</td><td>Within {{ $legal['ack_hours'] }} hours</td><td>Within 7 days</td></tr>
      <tr><td>Request to remove content of a kind prohibited by rule 3(1)(b) of the Intermediary Guidelines</td><td>Within {{ $legal['ack_hours'] }} hours</td><td>Action within 36 hours</td></tr>
      <tr><td>Content that shows a person's private area, nudity or a sexual act, or impersonates a person, reported by or for that person</td><td>Immediately</td><td>Removed or disabled within 2 hours</td></tr>
      <tr><td>Consumer complaint (plans, payments, refunds, service)</td><td>Within {{ $legal['ack_hours'] }} hours</td><td>Within one month of receipt</td></tr>
      <tr><td>Request about your personal data</td><td>Within {{ $legal['ack_hours'] }} hours</td><td>Within 30 days</td></tr>
      <tr><td>Safeguarding concern</td><td>Within {{ $legal['ack_hours'] }} hours</td><td>Treated as a priority; protective steps taken at once where a child may be at risk</td></tr>
    </tbody>
  </table>
  <p>Where the law sets a shorter time for a particular complaint, we follow the shorter time.</p>
</section>

<section>
  <h2 id="escalation">5. If you are not satisfied</h2>
  <ul>
    <li><strong>Consumer complaints</strong>: National Consumer Helpline on 1915 or at consumerhelpline.gov.in, or a complaint to the District, State or National Consumer Disputes Redressal Commission under the Consumer Protection Act, 2019 (online through e-Daakhil).</li>
    <li><strong>Decisions about content or accounts</strong> under the Intermediary Guidelines: an appeal to the Grievance Appellate Committee set up by the Government of India, within 30 days of the Grievance Officer's decision.</li>
    <li><strong>Personal data</strong>: after using our grievance process, a complaint to the Data Protection Board of India under the Digital Personal Data Protection Act, 2023.</li>
  </ul>
</section>

<section>
  <h2 id="good-faith">6. Fair use of this process</h2>
  <p>Please raise complaints in good faith. We may decline complaints that are abusive, repeated without new information, or clearly made to harass another user, and will tell you if we do.</p>
</section>
@endsection
