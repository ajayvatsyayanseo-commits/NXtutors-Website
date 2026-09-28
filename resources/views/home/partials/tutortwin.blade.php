{{--
  TutorTwin on the homepage: the WhatsApp AI tutor, told as an advert.

  It sits under "Find a tutor for any subject, exam or skill", where somebody
  has just decided they want help and is choosing how: a tutor who visits, or
  a tutor in their pocket between classes. The two are partners, so nothing
  here competes with booking a demo.

  Left: the promise, three proof points, the live price, one clear action.
  Right: the product itself - a photographed question and the worked answer,
  the thing a parent has to see to believe. The example is real maths and its
  steps are correct; keep it that way if it is ever changed.

  Copy rules come from TutorTwin itself: it is an AI and never a person, there
  is no free trial, no promise of perfect answers, and the price is the live
  one or none (App\Support\TutorTwin). Links carry UTM tags per placement.

  Links are absolute to the TutorTwin host, a separate application on its own
  subdomain - `url()` here would point back at this site.
--}}
@php
  // Live plans (App\Support\TutorTwin). Photos, PDFs and voice notes are on Pro
  // and the trial, not on Solo, so the photo promise is priced with Pro.
  $ttTrial = \App\Support\TutorTwin::trial();
  $ttTrialLabel = \App\Support\TutorTwin::trialLabel();
  $ttFrom = \App\Support\TutorTwin::fromPrice();
  $ttPhotoFrom = \App\Support\TutorTwin::fromPrice(true);
@endphp
<section class="section nx-twin" aria-labelledby="nxTwinTitle">
  <div class="nx-twin__hero">
    <div class="nx-twin__copy">
      <span class="nx-twin__eyebrow"><span class="nx-twin__live" aria-hidden="true"></span> New from NXTutors · Live on WhatsApp</span>
      <h2 class="nx-twin__title" id="nxTwinTitle">Stuck at 11pm? Send a photo. <span>Get the steps.</span></h2>
      <p class="nx-twin__lede">
        <strong>TutorTwin</strong> is an AI tutor on WhatsApp. Your child sends a question: typed,
        a photo of the homework, a PDF or a voice note. A step-by-step explanation comes back
        in seconds, in English, Hindi or Hinglish.
      </p>

      <ul class="nx-twin__points">
        <li><strong>Any hour</strong>, including the night before the exam</li>
        <li><strong>Photo, PDF or voice note in</strong>, worked steps out</li>
        <li><strong>Remembers</strong> what your child finds hard</li>
      </ul>

      <div class="nx-twin__cta">
        <a class="nx-twin__btn" href="{{ \App\Support\TutorTwin::link('/payment', 'home_section', $ttTrial ? 'trial' : 'start') }}" target="_blank" rel="noopener" data-nx-twin="{{ $ttTrial ? 'home_section_trial' : 'home_section_start' }}">
          {{ $ttTrialLabel ?? ('Start TutorTwin'.($ttFrom ? ' · from ₹'.number_format($ttFrom).'/month' : '')) }}
        </a>
        <a class="nx-twin__more" href="{{ \App\Support\TutorTwin::link('/', 'home_section', 'how_it_works') }}" target="_blank" rel="noopener" data-nx-twin="home_section_more">See plans and how it works →</a>
      </div>
      @if($ttTrial || $ttFrom)
        <p class="nx-twin__price">
          @if($ttTrial)
            {{ $ttTrial['answers'] }} answers{{ $ttTrial['photos'] ? ', photos included' : '' }}.
          @endif
          @if($ttFrom)
            {{ $ttTrial ? 'Then plans' : 'Plans' }} from ₹{{ number_format($ttFrom) }}/month{{
              $ttPhotoFrom === $ttFrom ? ', photos included'
              : ' for typed questions'.($ttPhotoFrom ? '; photos, PDFs and voice notes on Pro, from ₹'.number_format($ttPhotoFrom).'/month' : '')
            }}.
          @endif
        </p>
      @endif
      <p class="nx-twin__fine">
        No app to install. Maths, Physics, Chemistry, Biology, English, Computer Science, Social Science and Economics.
        It is an AI, so check important answers. Want a real teacher in the same chat?
        <a href="{{ \App\Support\TutorTwin::link('/humai-tutor', 'home_section', 'humanai') }}" target="_blank" rel="noopener">HumanAI tutoring</a>.
      </p>
    </div>

    {{-- The product, shown: a real question and a correct worked answer. --}}
    <figure class="nx-twin__phone" role="img" aria-label="A WhatsApp chat: a student sends a photo of 'Solve 2x² − 5x + 3 = 0' and TutorTwin replies with the steps, x = 3/2 or x = 1, then offers a similar question to practise.">
      <div class="nx-twin__bar"><span class="nx-twin__avatar">T</span><span><strong>TutorTwin</strong><small>AI tutor · online</small></span></div>
      <div class="nx-twin__chat" aria-hidden="true">
        <div class="nx-twin__msg nx-twin__msg--me">
          <div class="nx-twin__photo"><span>Q3.</span> Solve 2x² − 5x + 3 = 0</div>
          solve Q3 please
          <time>10:52 pm</time>
        </div>
        <div class="nx-twin__msg">
          <b>Step 1</b> a = 2, b = −5, c = 3<br>
          <b>Step 2</b> D = b² − 4ac = 25 − 24 = 1<br>
          <b>Step 3</b> x = (5 ± 1) ÷ 4<br>
          <b>So</b> x = 3/2 or x = 1 ✓<br>
          <span class="nx-twin__hint">Check: 2(1)² − 5(1) + 3 = 0</span>
          <time>10:52 pm</time>
        </div>
        <div class="nx-twin__msg nx-twin__msg--me">one more like this?<time>10:53 pm</time></div>
        <div class="nx-twin__msg">Try this one: 3x² − 7x + 2 = 0. Send me your first step 🙂<time>10:53 pm</time></div>
      </div>
    </figure>
  </div>

  <a class="nx-card nx-twin__teachers" href="{{ \App\Support\TutorTwin::link('/for-tutors', 'home_section', 'teachers') }}" target="_blank" rel="noopener" data-nx-twin="home_section_teachers">
    <span class="nx-card__kicker">For teachers</span>
    <span class="nx-card__title">TutorTwin for teachers: your own AI assistant, in your teaching style</span>
    <ul>
      <li>Your students get help at 11pm; you do not have to be awake</li>
      <li>You are told when a student is stuck, and can reply from WhatsApp</li>
      <li>Set practice for any student in one message, and create worksheets in seconds</li>
    </ul>
    <span class="nx-card__meta">See teacher plans →</span>
  </a>
</section>
