@extends('legal.layout')
@php $E = $legal['entity_name']; @endphp

@section('summary')
<ul>
  <li>The first class with a matched tutor is a free demo. There is nothing to refund, and nothing to cancel.</li>
  <li>Switching tutor costs nothing on NXTutors.</li>
  <li>Paid plans start as soon as you pay and are <strong>not refundable for a change of mind</strong> once activated.</li>
  <li>You do get your money back for a duplicate or failed charge, a plan that was paid for but never activated, or a plan we could not provide because of a fault on our side.</li>
  <li>Tuition fees paid directly to a tutor are agreed between you and the tutor, and refunds of those fees are a matter between you and the tutor.</li>
  <li>Approved refunds go back to the original payment method within 7 working days of approval.</li>
</ul>
@endsection

@section('content')
<section>
  <h2 id="scope">1. What this policy covers</h2>
  <p>This policy explains when {{ $E }} ("NXTutors") refunds payments made to it, and how cancellations work. It forms part of the <a href="{{ url('/terms-conditions') }}">Terms of Use</a> and the <a href="{{ url('/tutor-terms') }}">Tutor Terms</a>. It does not limit any right to a refund that you have under the Consumer Protection Act, 2019 or other Indian law.</p>
</section>

<section>
  <h2 id="free-services">2. The free demo and free switching</h2>
  <ul>
    <li>The first class with a matched tutor is a free demo for the parent. NXTutors does not charge for it, and you should not be asked to pay for it. If a tutor asks you to pay for the demo, please tell us.</li>
    <li>You may ask for a different tutor at any time. NXTutors does not charge for switching.</li>
    <li>If you need to cancel or move a demo, tell the tutor or us as early as you can, ideally at least 12 hours before.</li>
  </ul>
</section>

<section>
  <h2 id="tuition-fees">3. Tuition fees paid to tutors</h2>
  <p>Tutors set their own fees, and you see a tutor's fee before the demo. Unless a page clearly says that you are buying a class package from NXTutors, tuition fees are paid by the parent directly to the tutor, on the terms they agree. NXTutors does not receive, hold or control those fees, and is not responsible for refunding them.</p>
  <p>We encourage parents and tutors to agree in writing (a WhatsApp message is enough) how fees are paid and what happens when a class is missed or cancelled. If you have a dispute with a tutor about fees, tell us: we will contact the tutor and try to help you reach a fair outcome, and a tutor who does not act fairly may be suspended under the Tutor Terms.</p>
</section>

<section>
  <h2 id="packages">4. Class packages paid through NXTutors</h2>
  <p>Where we offer class packages that you pay for through NXTutors, the package page shows the number of classes, their price and how long they can be used. For such packages:</p>
  <ul>
    <li>classes not yet taken can be cancelled, and their price is refunded or kept as credit, as you prefer;</li>
    <li>classes already taken are not refundable, unless the class did not take place, or was not delivered as agreed, because of the tutor or NXTutors;</li>
    <li>a class cancelled by the parent less than 12 hours before it starts may be counted as taken, if the package page says so.</li>
  </ul>
</section>

<section>
  <h2 id="plans">5. Plans for parents, students and tutors</h2>
  <p>Plans are described on <a href="{{ url('/pricing') }}">/pricing</a> and at checkout. A plan is activated immediately when payment succeeds, and its credits, contacts or lead views can be used at once. For that reason, <strong>a paid plan is not refundable once it has been activated</strong>, including where:</p>
  <ul>
    <li>you change your mind, or no longer need the plan;</li>
    <li>you did not use some or all of the credits, contacts or lead views before the plan ended;</li>
    <li>a family or tutor you contacted did not reply, or did not go ahead with tuition;</li>
    <li>you bought a new plan while one was active, which replaces the earlier plan;</li>
    <li>your account was suspended or closed because you broke the Terms, the Tutor Terms or the Community Guidelines, except where the law requires a refund.</li>
  </ul>
  <p>Plans do not renew automatically at present, so there is no renewal to cancel. If automatic renewal is ever offered, you will be able to cancel it at any time before the next renewal date, and you will not be charged again after cancelling.</p>
</section>

<section>
  <h2 id="when-we-refund">6. When we do refund a plan payment</h2>
  <p>We refund the payment in full, or in the part stated, in these cases:</p>
  <ul>
    <li><strong>Duplicate or excess charge</strong>: you were charged more than once, or more than the price shown, for the same plan. The extra amount is refunded in full.</li>
    <li><strong>Failed payment</strong>: money left your account but the payment failed. This is usually reversed automatically by your bank or the payment gateway. If it has not reached you within 7 working days, tell us and we will follow it up.</li>
    <li><strong>Plan not activated</strong>: the payment succeeded but the plan was not activated within 24 hours, and we could not fix it after you told us. You may choose activation or a full refund.</li>
    <li><strong>Our fault</strong>: the main features of the plan were unavailable for a substantial part of the plan period because of a fault on our side. We will extend the plan by the time lost or refund the unused part on a pro-rata basis.</li>
    <li><strong>We close the account</strong> for a reason other than a breach by you: the unused part of the plan is refunded on a pro-rata basis.</li>
    <li><strong>Where the law requires</strong> a refund in any other case.</li>
  </ul>
</section>

<section>
  <h2 id="credits">7. Credits and lead views that are returned</h2>
  <ul>
    <li>If an NXT AI feature fails and does not produce a result, the credit it used is returned automatically.</li>
    <li>Opening the same lead more than once uses only one lead view.</li>
    <li>If a tutor opens a lead that turns out to be fake, spam, a duplicate of a lead already opened, or withdrawn by the parent before the tutor opened it, the tutor can report it within 7 days and, if we confirm it, the lead view is returned.</li>
    <li>Returned credits and lead views go back to the current plan and end when that plan ends. They are not exchanged for money.</li>
  </ul>
</section>

<section>
  <h2 id="how-to-request">8. How to ask for a refund</h2>
  <p>Write to <a href="mailto:{{ $legal['email'] }}">{{ $legal['email'] }}</a> within 30 days of the payment (or, for a fault during the plan, within 7 days of the plan ending) with:</p>
  <ul>
    <li>the name, email and phone number on your account;</li>
    <li>the plan, the amount, the payment date and the order or transaction reference;</li>
    <li>the reason, with a screenshot of the bank statement or error where relevant.</li>
  </ul>
  <p>Requests made after these periods are still considered where the law requires.</p>
</section>

<section>
  <h2 id="timelines">9. Timelines</h2>
  <ul>
    <li>We acknowledge a refund request within 48 hours and decide on it within 7 working days.</li>
    <li>An approved refund is sent to the original payment method within 7 working days of approval. Your bank or card issuer may take a few more working days to show it.</li>
    <li>If we decline a request, we explain why. You can then raise it with the Grievance Officer through <a href="{{ url('/grievance-redressal') }}">Grievance Redressal</a>.</li>
  </ul>
</section>

<section>
  <h2 id="chargebacks">10. Chargebacks</h2>
  <p>Please contact us before raising a chargeback, so that we can fix the problem quickly. If a chargeback is raised for a payment that was valid and used, we may pause the plan while the bank reviews it, and we will share the payment and usage records with the bank.</p>
</section>

<section>
  <h2 id="changes">11. Changes to this policy</h2>
  <p>We may update this policy. A change applies only to payments made after the date shown at the top, never to a payment already made.</p>
</section>
@endsection
