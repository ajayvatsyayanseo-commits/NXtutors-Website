{{--
  TutorTwin on the homepage: the WhatsApp product, one card for the family and
  one for the teacher.

  It sits directly under "Find a tutor for any subject, exam or skill" because
  that is where somebody has just decided they want help and is choosing how to
  get it - a tutor who visits, or a tutor in their pocket.

  Deliberately two cards and not one. A parent and a teacher want opposite
  things from the same product (help for my child / students and tools for my
  practice), and a single card written for both had to be vague about each.

  Links are absolute to the TutorTwin host, which is a separate application on
  its own subdomain - `url()` here would point back at this site.
--}}
@php
  $nxTwin = rtrim(config('tutortwin.url', 'https://nxtutortwin.nxtutors.com'), '/');
@endphp
<section class="section nx-twin" aria-labelledby="nxTwinTitle">
  <div class="section-head">
    <h2 class="section-title" id="nxTwinTitle">TutorTwin — your tutor on WhatsApp</h2>
    <p class="section-subtitle">
      No app to install and no class to schedule. Ask on WhatsApp, day or night,
      and get a worked explanation back — with a real NXTutors teacher behind it
      when you want one.
    </p>
  </div>

  <div class="nx-grid nx-twin__grid">
    <a class="nx-card nx-twin__card" href="{{ $nxTwin }}/" rel="noopener">
      <span class="nx-card__kicker">For students &amp; parents</span>
      <span class="nx-card__title">TutorTwin for students</span>
      <p class="nx-twin__lede">
        Send a question, a photo of the homework, a PDF or a voice note. You get
        the steps, not just the answer — in English, Hindi or Hinglish, whichever
        your child types.
      </p>
      <ul>
        <li>Answers any time, including the night before the exam</li>
        <li>Photo of a question in, worked solution out</li>
        <li>Practice sets, revision and printable PDFs</li>
        <li>Remembers what your child finds hard, so they stop re-explaining</li>
        <li>Add a real named teacher who reads the chat and steps in</li>
      </ul>
      <span class="nx-card__meta">See plans and start →</span>
    </a>

    <a class="nx-card nx-twin__card" href="{{ $nxTwin }}/for-tutors" rel="noopener">
      <span class="nx-card__kicker">For teachers</span>
      <span class="nx-card__title">TutorTwin for teachers</span>
      <p class="nx-twin__lede">
        Your own AI assistant, in your teaching style, answering your students
        between lessons — while you keep the relationship and the fees.
      </p>
      <ul>
        <li>Your students get help at 11pm; you do not have to be awake</li>
        <li>You are told when a student is stuck, and can reply from WhatsApp</li>
        <li>See what each student has practised and where they struggle</li>
        <li>Set work for one student or the whole class in one message</li>
        <li>Generate worksheets and practice papers in seconds</li>
      </ul>
      <span class="nx-card__meta">See teacher plans →</span>
    </a>
  </div>

  <p class="nx-twin__foot">
    Want both? <a href="{{ $nxTwin }}/humai-tutor" rel="noopener">HumanAI tutoring</a>
    pairs your child with a real NXTutors teacher and their AI assistant on the
    same WhatsApp chat.
  </p>
</section>
