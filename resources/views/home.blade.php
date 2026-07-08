<!doctype html>
<html>
<head>
  <meta charset="utf-8">
 
 @include('include.header')
   <main class="main">
 <link rel="stylesheet" href="{{ asset('public/frount/assets') }}/css/home.css" />
<section class="hero hero--slider">
  <div class="hero-slider" id="heroSlider">
    @php $i=1; @endphp
    @foreach($banner as $rows)
    
    @php
    $originalName = $rows->avatar;
    $fileName = pathinfo($originalName, PATHINFO_FILENAME);

    $webpPath = public_path('storage/banner/' . $fileName . '.webp');

    $bannerImage = file_exists($webpPath)
        ? asset('public/storage/banner/' . $fileName . '.webp')
        : asset('public/storage/banner/' . $originalName);
@endphp
    <div class="hero-slide @if($i==1) is-active @endif">
      <div class="hero-bg lazy-bg"
     data-bg="{{ $bannerImage }}">
</div>

      <div class="hero-overlay">
        <div class="hero-text"> 
          <p class="hero-kicker">{{ $rows->sub_title }}   </p>
          <h1 class="hero-title">{{ $rows->title }}</h1>
          <p class="hero-subtitle">{{ $rows->banner_desc }}</p>
        </div>

        <div class="hero-search">
          <div class="search-box">
            <span class="search-icon">🔍</span>
            <input
              type="text"
              id="heroSearchInput"
              class="search-input"
              placeholder="Search 'Class 10 Maths' or 'home tutor Sector 30'"
            />
          </div>

          <button type="button" id="heroSearchBtn" class="btn btn-accent hero-cta">
            Find Best Tutors
          </button>
        </div>
      </div>
    </div>
    @php $i++; @endphp
    @endforeach
  </div>
</section>


<section class="section">
        <div class="section-head">
          <h2 class="section-title">Explore Tutors by Subject, Skill & Exam</h2>
        </div>
        <div class="grid grid--categories">
         
        @foreach($category as $rowcc)
          <a href="{{ url('/')}}/category/{{ $rowcc->slug}}" class="tile">
            <div class="tile-icon"><img src="{{ asset('public/storage/category') }}/{{ $rowcc->avatar}}" alt="icon" style="width:40px; height:40px; border-radius: 50%;" loading="lazy" decoding="async" /></div>
            <div class="tile-main">
              <div class="tile-kicker">{{ $rowcc->cat_title}}</div>
              <!-- <div class="tile-title">All Subjects</div>
              <div class="tile-meta">18 tutors nearby</div> -->
            </div>
          </a>
            @endforeach

         
        </div>
      </section>
    

<section class="section section--suggested" id="suggestedTeachersSection">
  <div class="section-head">
    <h2 class="section-title" id="suggestedTitle">Suggested for your child</h2>
    <p id="suggestedSubtitle" style="margin-top:6px;color:#666;"></p>
 
  </div>

  <!-- <div id="teacherLoading" style="display:none; text-align:center; padding:20px; font-weight:600;">
    NXTutors AI is finding the best tutors for you...
  </div> -->
  <div id="teacherLoading" style="display:none; margin-top:14px;">
  <div class="nx-compare-loading">
    <div class="nx-compare-loader-ring"></div>

    <div class="nx-compare-loading-title">
      NXTutors AI is finding the best tutors...
    </div>

    <div class="nx-compare-loading-sub" id="teacherLoadingText">
      Matching subject, board, budget, location and availability
    </div>

    <div class="nx-compare-progress">
      <i id="teacherProgressBar"></i>
    </div>

    <div class="nx-compare-progress-text" id="teacherProgressText">
      Preparing search...
    </div>
  </div>
</div>

  <div
    class="suggested-grid"
    id="homeTeachersGrid"
    data-url="{{ route('home.teachers') }}"
  >
    @include('home.partials.teacher-cards', ['teachers' => $teachers])
  </div>
 
</section>

<section class="section" id="nxAskAISection">
  <div class="nxg-chat-card nxg-glass">

    <div class="nxg-chat-top">
      <h4>Ask NXT AI</h4>
      <p>Ask about tutor fit, fees, timing, demo class etc.</p>
    </div>

    <!-- PRE-DEFINED Q&A -->
    <div class="nxg-chat-box" id="nxAskAiThread">

      <div class="nxg-msg ai">
        <small>NXT AI</small>
        Ask anything about tutors 🙂
      </div>

      <div class="nxg-msg user">
        <small>Parent</small>
        Who is best tutor?
      </div>

      <div class="nxg-msg ai">
        <small>NXT AI</small>
        Best tutor depends on subject fit, experience and availability.
      </div>

      <div class="nxg-msg user">
        <small>Parent</small>
        What are fees?
      </div>

      <div class="nxg-msg ai">
        <small>NXT AI</small>
        Fees usually range between ₹800–₹2500 depending on class and subject.
      </div>

      <div class="nxg-msg user">
        <small>Parent</small>
        Demo class available?
      </div>

      <div class="nxg-msg ai">
        <small>NXT AI</small>
        Yes 👍 You can book a demo class before finalizing tutor.
      </div>

      <div class="nxg-msg user">
        <small>Parent</small>
        Online or home tutor?
      </div>

      <div class="nxg-msg ai">
        <small>NXT AI</small>
        Both options are available — online & home tutors.
      </div>

    </div>

    <!-- INPUT -->
    <div class="nxg-chat-input">
      <input type="text" id="nxAskAiInput" placeholder="Ask anything..." />
      <button id="nxAskAiSend">Send</button>
    </div>

  </div>
</section>
<section class="section" id="compareSection" style="margin-top:24px;">
 
   <div
    id="compareGrid"
    data-default-url="{{ route('home.compareDefaults') }}"
    data-ai-url="{{ route('home.compareAi') }}" style="display:none;"
  >
    <div style="padding:12px;color:#94a3b8;">
      Select tutors to start AI comparison…
    </div>
  </div> 

  <div id="compareLoadingWrap" style="display:none;">
    <div class="nx-compare-loading">
      <div class="nx-compare-loader-ring"></div>

      <div class="nx-compare-loading-title">
        NXTutors AI is comparing tutors...
      </div>

      <div class="nx-compare-loading-sub" id="nxCompareLoadingText">
        Checking subject fit, experience, rating, location, budget and availability
      </div>

      <div class="nx-compare-progress">
        <i id="nxCompareProgressBar"></i>
      </div>

      <div class="nx-compare-progress-text" id="nxCompareProgressText">
        Preparing comparison...
      </div>
    </div>
  </div>

  <div id="compareResultsMount"></div>
</section>
 
      
 

      <section class="section section--seo">
  <div class="seo-layout">
    <!-- LEFT: TEXT -->
    <div class="seo-text">
      <h2 class="section-title">AI-Based Tutor Matching Across India</h2>

      <p>
        Nxtutors is an AI-powered tutor and education matching platform connecting parents and
        students with verified educators across India. We provide home tutors, online tutors,
        institute mentors and hybrid academic support for Classes 6–12 across CBSE, ICSE, IB,
        ISC and IGCSE boards.
      </p>

      <p>
        Instead of browsing random tutor listings, our structured AI recommendation system evaluates
        academic compatibility and delivers a shortlist of 2–3 high-fit tutors based on subject
        expertise, board alignment, availability, budget and reliability signals.
      </p>

      <p>
        We also support competitive exam preparation including JEE and NEET through specialised
        mentors and structured learning plans. Parents can book a demo class to evaluate teaching
        clarity and decide confidently.
      </p>

      <ul class="seo-points">
        <li>Verified tutors for home, online and hybrid learning across India.</li>
        <li>Support for CBSE, ICSE, IB, ISC, IGCSE + JEE &amp; NEET.</li>
        <li>AI-based shortlisting: get 2–3 best matches instead of long lists.</li>
      </ul>
    </div>

    <!-- RIGHT: IMAGE CARD -->
    <aside class="seo-image">
      <div class="seo-image-card">
        <img
          src="{{ asset('public/frount/assets') }}/images/aa.png"
          alt="AI powered tutor matching platform across India" loading="lazy" decoding="async"
        />
        <div class="seo-badge">AI-Based · Verified Tutors · India-Wide</div>
      </div>
    </aside>
  </div>
</section>

  

      <section class="section">
        <div class="section-head">
          <h2 class="section-title">Local tutors</h2>
        </div>

        <div class="suggested-grid"
             id="localTutorsRow"
             data-url="{{ route('home.localTutors') }}">
          {{-- Initial fallback (page load pe) --}}
          @include('home.partials.local-teacher-cards', ['teachers' => $teachers ?? collect()])
        </div>
      </section>

       
 

      <!-- PARENT GUIDE -->
      <section class="section">
        <div class="section-head section-head--row">
          <div>
            <h2 class="section-title">Parent’s Guide — Choosing the right tutor</h2>
            <p class="section-subtitle">
              Short, actionable checklist for busy parents: topics to ask, trial class checklist &amp; pricing guidance.
            </p>
          </div>
          <!-- <a onclick="openPDF()" class="btn btn-ghost btn-small">Download guide (PDF)</a> -->
        </div>
 
        <div class="grid grid--guide">
          <article class="guide-card">
            <h3 class="guide-title">Before you speak</h3>
            <ul class="guide-list">
              <li>Confirm board &amp; class experience</li>
              <li>Ask for sample lesson or demo</li>
              <li>Check availability &amp; location</li>
            </ul>
          </article>
          <article class="guide-card">
            <h3 class="guide-title">During trial class</h3>
            <ul class="guide-list">
              <li>Look for clarity in explanations</li>
              <li>Check engagement with child</li>
              <li>Ask for a follow-up plan</li>
            </ul>
          </article>
          <article class="guide-card">
            <h3 class="guide-title">After hiring</h3>
            <ul class="guide-list">
              <li>Set weekly goals</li>
              <li>Track progress monthly</li>
              <li>Ask for regular feedback</li>
            </ul>
          </article>
        </div>
      </section>

      <!-- TRUSTED BY -->
      <section class="section">
        <div class="section-head">
          <h2 class="section-title">Trusted by schools &amp; parents in Gurugram</h2>
          <p class="section-subtitle">
            We work with local schools and coaching centres — here are some logos.
          </p>
        </div>

        <div class="logo-row">
          <div class="logo-card">
            <img src="{{ asset('public/frount/assets') }}/images/logo1.png" loading="lazy" decoding="async" alt="School logo" />
          </div>
          <div class="logo-card">
            <img src="{{ asset('public/frount/assets') }}/images/logo2.png" loading="lazy" decoding="async" alt="School logo" />
          </div>
          <div class="logo-card">
            <img src="{{ asset('public/frount/assets') }}/images/logo3.png" loading="lazy" decoding="async" alt="School logo" />
          </div>
          <div class="logo-card">
            <img src="{{ asset('public/frount/assets') }}/images/logo4.png" loading="lazy" decoding="async" alt="School logo" />
          </div>
        </div>
      </section>

 
<section class="section section--seo">
  <div class="seo-layout">
    <!-- LEFT: TEXT -->
    <aside class="seo-image">
      <div class="seo-image-card">
        <img
          src="{{ asset('public/frount/assets') }}/images/aa1.png"
          alt="AI tutor matching compatibility system" loading="lazy" decoding="async"
        />
        <div class="seo-badge">2–3 Best Matches · Demo First · Verified</div>
      </div>
    </aside>
    <div class="seo-text">
      <h2 class="section-title">How Our AI Tutor Matching System Works</h2>

      <p>
        Our AI engine processes structured compatibility parameters to recommend educators who fit
        your child’s academic goals — whether it’s school support, foundation building or
        competitive exam preparation.
      </p>

      <ul class="seo-points">
        <li>Subject expertise relevance &amp; teaching experience match</li>
        <li>Board alignment (CBSE, ICSE, IB, ISC, IGCSE)</li>
        <li>Class &amp; exam specialization (JEE, NEET)</li>
        <li>Location feasibility for home tutoring &amp; online readiness</li>
        <li>Availability overlap with preferred time slots</li>
        <li>Teaching clarity, feedback signals &amp; outcome patterns</li>
        <li>Reliability, consistency &amp; profile verification</li>
        <li>Budget/pricing alignment and communication quality</li>
      </ul>

      <p>
        This system helps parents avoid confusion and saves time by delivering 2–3 precise tutor
        recommendations with high match confidence. You can book a demo to confirm the fit before
        continuing.
      </p>
    </div>

    <!-- RIGHT: IMAGE CARD -->
    
  </div>
</section>
 <section class="section">
  <div class="section-head section-head--row">
    <div>
      <h2 class="section-title">What parents say</h2>
      <p class="section-subtitle">Real reviews from local parents — quick highlights.</p>
    </div>
    <a href="javascript:void(0)" class="btn btn-ghost btn-small">All reviews</a>
  </div>

  <div class="review-slider">
    <button class="rnav rnav--left" type="button" aria-label="Previous">‹</button>

    <div class="review-track" id="reviewTrack">
      @include('home.partials.review-slider-cards', ['reviews' => $reviews ?? collect()])
    </div>

    <button class="rnav rnav--right" type="button" aria-label="Next">›</button>
  </div>
</section>
      <!-- FAQ -->
     <section class="section">
  <div class="section-head section-head--row">
    <h2 class="section-title">Frequently asked questions</h2>
    <a href="#" class="btn btn-ghost btn-small">More FAQs</a>
  </div>

  <div class="faq-grid">
    <!-- LEFT COLUMN (6) -->
    <div class="faq-list">
      <details class="faq-item">
        <summary>How does Nxtutors AI tutor matching work?</summary>
        <p>
          Our AI evaluates subject expertise, board alignment, class/exam needs, location feasibility,
          availability overlap, budget and reliability signals to recommend 2–3 high-fit tutors instead
          of long random lists.
        </p>
      </details>

      <details class="faq-item">
        <summary>Do you provide home tutors and online tutors across India?</summary>
        <p>
          Yes. Nxtutors supports home tutoring, online tutoring, institute mentoring and hybrid learning
          across India based on tutor availability and feasibility.
        </p>
      </details>

      <details class="faq-item">
        <summary>Which classes and boards are supported?</summary>
        <p>
          We support Classes 6–12 across CBSE, ICSE, IB, ISC and IGCSE boards, including foundation
          support and board exam preparation.
        </p>
      </details>

      <details class="faq-item">
        <summary>Do you support JEE and NEET preparation?</summary>
        <p>
          Yes. We match students with specialised JEE/NEET mentors for Physics, Chemistry, Maths and Biology
          based on goals, level and schedule.
        </p>
      </details>

      <details class="faq-item">
        <summary>Are tutors verified on Nxtutors?</summary>
        <p>
          Every educator undergoes structured verification and profile validation. We also track feedback and
          reliability signals to maintain quality and accountability.
        </p>
      </details>

      <details class="faq-item">
        <summary>How does the trial/demo class work?</summary>
        <p>
          A demo is a normal session to evaluate teaching style and student comfort. After the demo, you can
          continue with the same tutor or request a different match.
        </p>
      </details>
    </div>

    <!-- RIGHT COLUMN (6) -->
    <div class="faq-list">
      <details class="faq-item">
        <summary>What are the typical fees for tutors?</summary>
        <p>
          Fees depend on class, subject and experience. In most cases, tutoring ranges from ₹800 to ₹2500/hour.
          We shortlist tutors aligned to your budget range.
        </p>
      </details>

      <details class="faq-item">
        <summary>Can I change the tutor after hiring?</summary>
        <p>
          Yes. If the match isn’t working, we help you switch quickly by recommending alternate verified tutors
          with better fit.
        </p>
      </details>

      <details class="faq-item">
        <summary>How quickly can I get matched with a tutor?</summary>
        <p>
          Typically, you receive 2–3 recommendations within a short time after sharing your requirement (class,
          subjects, board, location, schedule and budget).
        </p>
      </details>

      <details class="faq-item">
        <summary>What details should I share to get the best match?</summary>
        <p>
          Share class/grade, board, subjects, location (city/pincode), preferred days &amp; time slots, mode
          (home/online) and budget. The more precise the input, the better the match.
        </p>
      </details>

      <details class="faq-item">
        <summary>Do tutors give homework, tests and progress updates?</summary>
        <p>
          Many tutors follow structured plans with homework, periodic tests and feedback. You can also request
          weekly progress updates while finalising the tutor.
        </p>
      </details>

      <details class="faq-item">
        <summary>Which cities do you currently support?</summary>
        <p>
          Nxtutors supports tutor matching across India. Availability depends on tutor network in each area, and
          online tutoring is available nationwide.
        </p>
      </details>
    </div>
  </div>
</section>

 
      <section class="section">
        <div class="cta-row">
          <div class="cta-text">
            <h3>Book a demo — limited slots today</h3>
            <p>Get a free 30-minute demo with a top local tutor. Slots fill fast.</p>
          </div>
          <div class="cta-actions">
            <a href="#" class="btn btn-accent">Book demo</a>
            <a href="#" class="btn btn-ghost">Call us</a>
          </div>
        </div>
      </section>

       

      

    </main>

  @include('include.footer')
 
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function(){

  const input = document.getElementById("nxAskAiInput");
  const send = document.getElementById("nxAskAiSend");
  const chatBox = document.getElementById("nxAskAiThread");

  if(!input || !send || !chatBox) return;

  function getReply(q){
    q = q.toLowerCase();

    if(q.includes("fees") || q.includes("price")){
      return "Fees depend on class and subject. Usually ₹800–₹2500.";
    }

    if(q.includes("demo")){
      return "Yes 👍 Demo class available before finalizing tutor.";
    }

    if(q.includes("best")){
      return "Best tutor depends on subject fit, experience and timing.";
    }

    if(q.includes("timing") || q.includes("evening")){
      return "Tutors are matched based on your preferred timing.";
    }

    if(q.includes("online")){
      return "Both online and home tutors are available.";
    }

    return "I can help you choose best tutor. Ask about fees, demo or subject.";
  }

  function addMsg(text, type){
    const div = document.createElement("div");
    div.className = "nxg-msg " + type;
    div.innerHTML = `<small>${type === "ai" ? "NXT AI" : "You"}</small>${text}`;
    chatBox.appendChild(div);
    chatBox.scrollTop = chatBox.scrollHeight;
  }

  function sendMsg(){
    const val = input.value.trim();
    if(!val) return;

    addMsg(val, "user");
    input.value = "";

    setTimeout(()=>{
      addMsg(getReply(val), "ai");
    }, 400);
  }

  send.addEventListener("click", sendMsg);

  input.addEventListener("keypress", function(e){
    if(e.key === "Enter"){
      e.preventDefault();
      sendMsg();
    }
  });

});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  (function () {
    const KEY = "nx_compare_tutors";

    const grid = document.getElementById("compareGrid");
    const title = document.getElementById("compareTitle");
    const hint = document.getElementById("compareHint");
    const compareSection = document.getElementById("compareSection");
    const compareLoadingWrap = document.getElementById("compareLoadingWrap");
    const compareResultsMount = document.getElementById("compareResultsMount");
    const loadingTextEl = document.getElementById("nxCompareLoadingText");
    const progressBarEl = document.getElementById("nxCompareProgressBar");
    const progressTextEl = document.getElementById("nxCompareProgressText");

    if (!grid) return;

    const defaultUrl = grid.dataset.defaultUrl || "";
    const aiUrlBase = grid.dataset.aiUrl || "";

    let compareProgressTimer = null;
    let compareResizeObserver = null;

    function wait(ms) {
      return new Promise(resolve => setTimeout(resolve, ms));
    }

    function loadSelected() {
      try {
        const parsed = JSON.parse(localStorage.getItem(KEY) || "[]");
        return Array.isArray(parsed) ? parsed : [];
      } catch (e) {
        return [];
      }
    }

    function saveSelected(list) {
      localStorage.setItem(KEY, JSON.stringify(Array.isArray(list) ? list : []));
    }

    function removeById(list, id) {
      return list.filter(x => String(x.id).trim() !== String(id).trim());
    }

    function esc(str) {
      return String(str ?? "")
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
    }

    function getMatchLabel(score) {
      if (score >= 90) return "Excellent Match";
      if (score >= 80) return "Strong Match";
      if (score >= 70) return "Good Match";
      if (score >= 60) return "Worth Demo";
      return "Needs Validation";
    }

    function normalizeTutor(t) {
      const rawScore = parseInt(t.score, 10) || 0;
      const displayScore = rawScore < 70 ? Math.min(100, rawScore + 12) : rawScore;
      const b = t.breakdown || {};

      return {
        ...t,
        _displayScore: displayScore,
        _subject: Math.max(0, Math.min(100, parseInt(b["Subject Fit"] ?? b["Subject"] ?? 82, 10) || 82)),
        _experience: Math.max(0, Math.min(100, parseInt(b["Experience"] ?? 78, 10) || 78)),
        _reviews: Math.max(0, Math.min(100, parseInt(b["Reviews"] ?? b["Rating"] ?? 80, 10) || 80)),
        _location: Math.max(0, Math.min(100, parseInt(b["Location"] ?? 74, 10) || 74)),
        _budget: Math.max(0, Math.min(100, parseInt(b["Budget"] ?? 72, 10) || 72)),
        _availability: Math.max(0, Math.min(100, parseInt(b["Availability"] ?? 76, 10) || 76))
      };
    }

    function getChatReply(q, winner, tutors) {
      const text = (q || "").toLowerCase();
      const second = tutors[1] || null;

      if (text.includes("budget")) {
        if (second && second._budget > winner._budget) {
          return `${second.name} looks slightly safer on budget, but ${winner.name} remains the stronger overall choice because of better combined fit across subject, experience and availability.`;
        }
        return `${winner.name} is still ahead overall. Budget fit is acceptable, but the final decision should still be validated through a demo class.`;
      }

      if (text.includes("science")) {
        return `${winner.name} is the current overall leader, but for a Science-first decision you should compare subject fit and teaching clarity in the demo. Subject-specific comfort can change the final ranking.`;
      }

      if (text.includes("math")) {
        return `${winner.name} is currently strongest for Maths-led requirements because the overall fit, subject compatibility and consistency indicators are higher.`;
      }

      if (text.includes("timing") || text.includes("evening") || text.includes("availability")) {
        return `${winner.name} appears stronger for schedule matching. If timing flexibility matters more than total score, the second option can remain a practical backup.`;
      }

      if (text.includes("fees") || text.includes("price")) {
        return `${winner.name} stays ahead on overall value. If pure price is your first filter, compare budget fit with demo outcome before finalising.`;
      }

      if (text.includes("why")) {
        return `${winner.name} ranks first because the combined score across subject fit, experience, reviews and availability is stronger than the rest. Use a demo to validate teaching style before booking long-term sessions.`;
      }

      return `${winner.name} is still the best overall choice based on current AI comparison. You can ask about budget, timing, subject fit, board fit or demo suitability for a sharper recommendation.`;
    }

    function startFakeCompareProgress() {
      if (!progressBarEl || !progressTextEl || !loadingTextEl) return;

      let progress = 0;

      const steps = [
        { at: 8, title: "Reading tutor profiles...", text: "Analyzing selected tutor profiles and base information" },
        { at: 18, title: "Checking subject fit...", text: "Comparing class, board and subject compatibility" },
        { at: 32, title: "Analyzing experience...", text: "Reviewing relevant teaching experience and expertise" },
        { at: 48, title: "Checking reviews and trust signals...", text: "Evaluating parent feedback, reliability and score patterns" },
        { at: 64, title: "Matching budget and location...", text: "Comparing budget fit, travel convenience and locality match" },
        { at: 80, title: "Checking availability...", text: "Finding the best overlap for preferred timing and session flow" },
        { at: 92, title: "Generating AI recommendation...", text: "Preparing the final tutor ranking and recommendation summary" }
      ];

      progressBarEl.style.width = "0%";
      progressTextEl.textContent = "Preparing comparison...";
      loadingTextEl.textContent = "Checking subject fit, experience, rating, location, budget and availability";

      if (compareProgressTimer) clearInterval(compareProgressTimer);

      compareProgressTimer = setInterval(() => {
        progress += Math.random() * 3.2;
        if (progress > 95) progress = 95;

        progressBarEl.style.width = progress.toFixed(0) + "%";

        let currentTitle = "NXTutors AI is comparing tutors...";
        let currentText = "Preparing comparison...";

        steps.forEach(step => {
          if (progress >= step.at) {
            currentTitle = step.title;
            currentText = step.text;
          }
        });

        loadingTextEl.textContent = currentTitle;
        progressTextEl.textContent = currentText;
      }, 900);
    }

    function stopFakeCompareProgress(success = true) {
      if (compareProgressTimer) {
        clearInterval(compareProgressTimer);
        compareProgressTimer = null;
      }

      if (progressBarEl) progressBarEl.style.width = success ? "100%" : "0%";
      if (progressTextEl) progressTextEl.textContent = success ? "Comparison ready" : "Comparison failed";
    }

    function renderAiLoading() {
      if (compareLoadingWrap) compareLoadingWrap.style.display = "block";
      if (compareResultsMount) compareResultsMount.innerHTML = "";
      startFakeCompareProgress();

      if (compareSection) {
        compareSection.scrollIntoView({ behavior: "smooth", block: "start" });
      }
    }

    async function loadDefaults() {
      const pin = localStorage.getItem("nx_pin") || "";
      const city = localStorage.getItem("nx_city") || "";

      if (compareLoadingWrap) compareLoadingWrap.style.display = "none";
      if (compareResultsMount) compareResultsMount.innerHTML = "";

      if (!defaultUrl) {
        grid.innerHTML = `<div style="padding:12px;color:#94a3b8;">Default compare URL missing.</div>`;
        return;
      }

      try {
        const qs = new URLSearchParams({ pincode: pin, city: city });
        const res = await fetch(defaultUrl + "?" + qs.toString(), {
          headers: { "X-Requested-With": "XMLHttpRequest" }
        });

        const html = await res.text();
        grid.innerHTML = html;

        if (title) title.textContent = "Compare tutors (suggested near you)";
        if (hint) hint.textContent = "Tip: Click Compare on any tutor card to add here.";

        updateCompareButtons();
      } catch (e) {
        grid.innerHTML = `<div style="padding:12px;color:#dc2626;">Unable to load suggested tutors.</div>`;
      }
    }

    function buildGlassCompareUI(tutors, selectedList, recommendationReason = "") {
      if (!tutors || !tutors.length) return "";

      const winner = tutors[0];
      const top3 = tutors.slice(0, 3);
      const rankedTutors = tutors;
      const second = tutors[1] || null;
      const third = tutors[2] || null;

      const winnerMeta =
        selectedList.find(x => String(x.id) === String(winner._compareId || winner.id)) || {};

      function avatarLetter(name) {
        return (name || "T").trim().charAt(0).toUpperCase();
      }
 

      function scoreLine(label, value, cls = "blue") {
        const safe = Math.max(0, Math.min(100, parseInt(value, 10) || 0));
        return `
          <div class="nxg-score-row">
            <div class="nxg-score-meta">
              <span>${esc(label)}</span>
              <b>${safe}</b>
            </div>
            <div class="nxg-line ${cls}">
              <i style="width:${safe}%"></i>
            </div>
          </div>
        `;
      }

      const leftCards = rankedTutors.map((t, idx) => `
        <div class="nxg-mini-card">
          <div class="nxg-mini-head">
            <div class="nxg-avatar ${colorClass(idx)}">${avatarLetter(t.name)}</div>
            <div>
              <strong>${esc(t.name)}</strong>
              <span>${esc(getMatchLabel(t._displayScore))}</span>
            </div>
          </div>

          <div class="nxg-mini-score-row">
            <div class="nxg-mini-score">${esc(t._displayScore)}/100</div>
            <button type="button" class="nxg-remove-btn js-compare-remove" data-id="${esc(t._compareId || t.id)}">Remove</button>
          </div>

          <div class="nxg-mini-bar ${colorClass(idx)}">
            <i style="width:${t._displayScore}%"></i>
          </div>
        </div>
      `).join("");

      const compareHead = top3.map((t, idx) => `
        <div class="nxg-tutor-chip">
          <div class="nxg-avatar ${colorClass(idx)}">${avatarLetter(t.name)}</div>
          <div>
            <strong>${esc(t.name)}</strong>
            <span>${esc(getMatchLabel(t._displayScore))}</span>
          </div>
          <small>${esc(t._displayScore)}</small>
        </div>
      `).join("");

      const metrics = [
        { key: "_subject", label: "Subject fit" },
        { key: "_experience", label: "Experience" },
        { key: "_reviews", label: "Reviews" },
        { key: "_budget", label: "Budget fit" },
        { key: "_availability", label: "Availability" }
      ];

      const compareRows = metrics.map(metric => `
        <div class="nxg-compare-row">
          <div class="nxg-metric">${esc(metric.label)}</div>
          ${top3.map((t, idx) => `
            <div class="nxg-metric-box">
              <b>${esc(t[metric.key])}</b>
              <div class="nxg-line ${colorClass(idx)}">
                <i style="width:${t[metric.key]}%"></i>
              </div>
            </div>
          `).join("")}
        </div>
      `).join("");

      const selectedMobile = top3.map((t, idx) => {
        const meta =
          selectedList.find(x => String(x.id) === String(t._compareId || t.id)) || {};

        return `
          <div class="nxg-mobile-chip">
            <div class="nxg-mobile-chip__top">
              <div class="nxg-avatar ${colorClass(idx)}">${avatarLetter(t.name)}</div>
              <div>
                <strong>${esc(t.name)}</strong>
                <span>${esc(getMatchLabel(t._displayScore))}</span>
              </div>
            </div>

            <div class="nxg-mobile-chip__bottom">
              <small>${esc(t._displayScore)}/100</small>
              <div class="nxg-mobile-chip__actions">
                <a href="${esc(t._wa || meta.wa || '#')}" target="_blank" rel="nofollow noopener">Demo</a>
                <button type="button" class="nxg-remove-btn js-compare-remove" data-id="${esc(t._compareId || t.id)}">Remove</button>
              </div>
            </div>
          </div>
        `;
      }).join("");

      const aiFirstQuestion = `Who is best for my child among ${top3.map(t => t.name).join(", ")}?`;
      const aiReply = `${winner.name} ranks first overall because subject fit, experience and availability are strongest. ${second ? `${second.name} is a good backup option` : ""}${winner._budget < 75 ? ", especially if budget is flexible." : "."}`;

      return `
        <div class="nxg-wrap" id="nxgCompareWrap">
          <div class="nxg-orb nxg-orb--1"></div>
          <div class="nxg-orb nxg-orb--2"></div>
          <div class="nxg-orb nxg-orb--3"></div>

          <div class="nxg-topbar">
            <div>
              <h2>NXTutors — Compare + Ask AI</h2>
              <p>Smart tutor comparison powered by subject fit, teaching strength, budget comfort and schedule alignment.</p>
            </div>
          </div>

          <div class="nxg-shell">
            <div class="nxg-main">
              <div class="nxg-hero nxg-glass">
                <div class="nxg-hero__content">
                  <span class="nxg-pill">AI Comparison</span>
                  <h3>${esc(winner.name)} is the best overall choice</h3>
                  <p>${esc(recommendationReason || "Best balance of subject fit, experience, reviews, budget and availability.")}</p>

                  <div class="nxg-tags">
                    <span>2–3 tutors only</span>
                    <span>No clipped columns</span>
                    <span>Demo-first decision</span>
                  </div>
                </div>

                <div class="nxg-scorecard">
                  <label>Best overall</label>
                  <div class="nxg-scorecard__value">${esc(winner._displayScore)} <small>/100</small></div>
                  <span class="nxg-scorecard__pill">AI Top Pick</span>
                </div>
              </div>

              <div class="nxg-grid">
                <div class="nxg-panel nxg-glass nxg-selected-panel">
                <div class="nxg-selected-top">
                  <div class="nxg-selected-chart">
                    <h4>Score distribution</h4>
                    <p>Visual comparison of shortlisted tutors by AI match score.</p>

                    <div class="nxg-pie-wrap">
                      <canvas id="nxComparePieChart"></canvas>
                    </div>
                  </div>

    <div class="nxg-selected-list-wrap">
      <h4>Shortlisted tutors</h4>
<p>AI-ranked tutor list based on overall fit, teaching relevance and session readiness.</p>

      <div class="nxg-mini-list nxg-mini-list-scroll ${rankedTutors.length > 3 ? 'has-scroll' : ''}">
        ${leftCards}
      </div>
    </div>
  </div>
</div>

                <div class="nxg-panel nxg-glass">
                  <h4>Why ${esc(winner.name)} ranks first</h4>
                  <p>Compare key tutor signals clearly without overflow or clutter.</p>

                  <div class="nxg-head-row">
                    <div class="nxg-head-row__title">Signals</div>
                    ${compareHead}
                  </div>

                  <div class="nxg-rows">
                    ${compareRows}
                  </div>

                  <div class="nxg-footer-tags">
                    <span class="green">Strong fit</span>
                    <span>Subject + experience lead</span>
                    <span class="gold">Watch-out</span>
                    <span>Use demo class as final tie-breaker</span>
                  </div>
                </div>

                 
              </div>
            </div>

            <div class="nxg-mobile nxg-mobile-preview">
              <div class="nxg-mobile-frame">
                <div class="nxg-mobile-inner">
                  <h3>Compare tutors</h3>
                  <p>Sticky mobile comparison preview</p>

                  <div class="nxg-mobile-top nxg-glass">
                    <span class="nxg-pill green">AI Top Pick</span>
                    <h4>${esc(winner.name)} leads the shortlist</h4>
                    <p>${esc(recommendationReason || "Best overall fit for experience, reviews and schedule match.")}</p>

                    <div class="nxg-mobile-top__meta">
                      <small>${esc(winner._displayScore)}/100</small>
                      <span>Good Match</span>
                      <a href="${esc(winnerMeta.wa || '#')}" target="_blank" rel="nofollow noopener">Demo</a>
                    </div>
                  </div>

                  <h5>Selected tutors</h5>
                  <div class="nxg-mobile-list">
                    ${selectedMobile}
                  </div>

                  <div class="nxg-mobile-win nxg-glass">
                    <h5>Why ${esc(winner.name)} wins</h5>

                    <div class="nxg-rings nxg-rings--sm">
                      <div class="nxg-ring gold sm" style="--val:${winner._displayScore}">
                        <div class="nxg-ring blue sm2" style="--val:${second ? second._displayScore : 0}">
                          <div class="nxg-ring pink sm3" style="--val:${third ? third._displayScore : 0}">
                            <div class="nxg-ring-center">
                              <strong>${esc(winner._displayScore)}</strong>
                              <span>Top pick</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    ${scoreLine("Subject", winner._subject, "blue")}
                    ${scoreLine("Experience", winner._experience, "blue")}
                    ${scoreLine("Reviews", winner._reviews, "blue")}
                    ${scoreLine("Budget", winner._budget, "blue")}
                    ${scoreLine("Availability", winner._availability, "blue")}

                    <div class="nxg-mobile-note">Use demo clarity as final decision factor.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      `;
    }

    let nxComparePieChart = null;

function renderComparePieChart(tutors) {
  const canvas = document.getElementById("nxComparePieChart");
  if (!canvas || typeof Chart === "undefined") return;

  if (nxComparePieChart) {
    nxComparePieChart.destroy();
  }

  const colors = ["#f2b24b", "#6c91ff", "#df5aae", "#60c7b2", "#8b7dff"];

  nxComparePieChart = new Chart(canvas, {
    type: "doughnut",
    data: {
      labels: tutors.map(t => t.name),
      datasets: [{
        data: tutors.map(t => t._displayScore),
        backgroundColor: tutors.map((_, i) => colors[i % colors.length]),
        borderWidth: 0
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      cutout: "62%",
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          callbacks: {
            label: function(ctx) {
              return `${ctx.label}: ${ctx.raw}/100`;
            }
          }
        }
      }
    }
  });
}

    function colorClass(index){
  return ["gold", "blue", "pink", "blue", "gold"][index % 5] || "blue";
}

    function applyCompareLayoutMode() {
      const wrap = document.getElementById("nxgCompareWrap");
      if (!wrap) return;

      const width = wrap.clientWidth;

      wrap.classList.remove("nxg-mode-compact", "nxg-mode-single");

      if (width <= 900) {
        wrap.classList.add("nxg-mode-single");
      } else if (width <= 1250) {
        wrap.classList.add("nxg-mode-compact");
      }
    }

    function wireAskAI(tutors) {
      const input = document.getElementById("nxAskAiInput");
      const send = document.getElementById("nxAskAiSend");
      const chatBox = document.getElementById("nxAskAiThread");
      const promptBtns = document.querySelectorAll(".nx-ask-chip");
      const budgetBtn = document.querySelector(".nx-ask-budget");

      if (!input || !send || !chatBox || !tutors || !tutors.length) return;

      const winner = tutors[0];

      function addBubble(text, type) {
        const div = document.createElement("div");
        div.className = "nxg-msg " + type;
        div.innerHTML = `<small>${type === "ai" ? "NXT AI" : "Parent"}</small>${esc(text)}`;
        chatBox.appendChild(div);
        chatBox.scrollTop = chatBox.scrollHeight;
      }

      function submitAsk(q) {
        const value = (q || input.value || "").trim();
        if (!value) return;

        addBubble(value, "user");
        input.value = "";

        setTimeout(() => {
          addBubble(getChatReply(value, winner, tutors), "ai");
        }, 500);
      }

      send.addEventListener("click", function () {
        submitAsk();
      });

      input.addEventListener("keydown", function (e) {
        if (e.key === "Enter") {
          e.preventDefault();
          submitAsk();
        }
      });

      promptBtns.forEach(btn => {
        btn.addEventListener("click", function () {
          const q = this.getAttribute("data-question") || "";
          input.value = q;
          submitAsk(q);
        });
      });

      if (budgetBtn) {
        budgetBtn.addEventListener("click", function () {
          submitAsk("Compare only budget between selected tutors");
        });
      }
    }

    async function renderAiCompare(list) {
      const ids = list.map(x => x.id).join(",");
      if (!ids || !aiUrlBase) return;

      renderAiLoading();

      const city = localStorage.getItem("nx_city") || "";
      const pincode = localStorage.getItem("nx_pin") || "";

      const qs = new URLSearchParams({ ids, city, pincode });
      const url = aiUrlBase + "?" + qs.toString();

      const MIN_LOADER_TIME = 5000;
      const startTime = Date.now();

      let response, data;

      try {
        [response] = await Promise.all([
          fetch(url, {
            headers: { "X-Requested-With": "XMLHttpRequest" }
          }),
          wait(MIN_LOADER_TIME)
        ]);

        data = await response.json();
      } catch (e) {
        const elapsed = Date.now() - startTime;
        if (elapsed < MIN_LOADER_TIME) {
          await wait(MIN_LOADER_TIME - elapsed);
        }

        stopFakeCompareProgress(false);

        if (compareLoadingWrap) compareLoadingWrap.style.display = "none";
        if (grid) grid.style.display = "none"; 
        if (compareResultsMount) {
          compareResultsMount.innerHTML = `
            <div style="padding:16px;background:#fff;border:1px solid #fee2e2;color:#dc2626;border-radius:16px;">
              AI compare failed. Try again.
            </div>
          `;
        }
        return;
      }

      if (!data || !data.ok || !Array.isArray(data.tutors) || !data.tutors.length) {
        stopFakeCompareProgress(false);

        if (compareLoadingWrap) compareLoadingWrap.style.display = "none";
        if (compareResultsMount) {
          compareResultsMount.innerHTML = `
            <div style="padding:16px;background:#fff;border:1px solid #e5e7eb;color:#334155;border-radius:16px;">
              No tutors available for comparison.
            </div>
          `;
        }
        return;
      }

      stopFakeCompareProgress(true);
      await wait(500);

      const tutors = data.tutors
        .map(normalizeTutor)
        .map((t, index) => {
          const matched =
            list.find(x => String(x.id) === String(t.id)) ||
            list.find(x => (x.name || "").trim().toLowerCase() === (t.name || "").trim().toLowerCase()) ||
            list[index] ||
            {};

          return {
            ...t,
            _compareId: matched.id || t.id || "",
            _wa: matched.wa || "#",
            _profile: matched.profile || "#",
            img: matched.img || t.img || "",
            rating: matched.rating || t.rating || "0.0",
            reviews: matched.reviews || t.reviews || "0"
          };
        })
        .sort((a, b) => b._displayScore - a._displayScore);

      const winner = tutors[0];

      const uiHtml = buildGlassCompareUI(
        tutors,
        list,
        (data.recommendation && data.recommendation.reason) || "Best balance of subject fit, reviews, budget and location."
      );

      if (compareLoadingWrap) compareLoadingWrap.style.display = "none";
      if (compareResultsMount) {
        compareResultsMount.innerHTML = uiHtml;
      }

      applyCompareLayoutMode();
      wireAskAI(tutors);
      renderComparePieChart(tutors);

      const wrap = document.getElementById("nxgCompareWrap");
      if (compareResizeObserver) {
        compareResizeObserver.disconnect();
        compareResizeObserver = null;
      }

      if (wrap && typeof ResizeObserver !== "undefined") {
        compareResizeObserver = new ResizeObserver(() => applyCompareLayoutMode());
        compareResizeObserver.observe(wrap);
      }

      if (title) title.textContent = "AI Compare Results";
      if (hint) hint.textContent = `Top Recommendation: ${winner.name} (${winner._displayScore}/100)`;

      setTimeout(() => {
        if (compareResultsMount) {
          //compareResultsMount.scrollIntoView({ behavior: "smooth", block: "start" });
        }
      }, 120);
    }

    function updateCompareButtons() {
      document.querySelectorAll(".js-compare-toggle").forEach(btn => {
        const id = btn.dataset.id;
        const selected = loadSelected().some(x => String(x.id) === String(id));
        btn.classList.toggle("is-selected", selected);
        btn.textContent = selected ? "Compared ✓" : "Compare";
      });
    }

   
   async function refreshCompare() {
  const list = loadSelected();

  if (list.length === 0) {
    if (grid) grid.style.display = "block";
    if (compareResultsMount) compareResultsMount.innerHTML = "";
    if (compareLoadingWrap) compareLoadingWrap.style.display = "none";
    updateCompareButtons();
    return;
  }

  if (grid) grid.style.display = "none";

  if (list.length === 1) {
    showCompareTrayPhase1(list[0]);
    updateCompareButtons();
    return;
  }

  if (list.length === 2) {
    showCompareTrayPhase2(list);
    updateCompareButtons();
    return;
  }

  if (list.length > 3) {
    list.splice(3);
    saveSelected(list);
  }
}


// function showCompareTrayPhase1(tutor) {
//   compareResultsMount.innerHTML = `
//     <div class="compare-tray">
//       <div class="compare-card">
//         <strong>${tutor.name}</strong>
//         <span>Selected</span>
//       </div>

//       <div class="compare-placeholder">
//         + Select one more tutor to compare
//       </div>
//     </div>
//   `;
// }

function showCompareTrayPhase1(tutor) {
  compareResultsMount.innerHTML = `
    <div class="compare-tray">
      <div class="compare-card">
        <div class="compare-card-top">
          <strong>${esc(tutor.name)}</strong>
          <button type="button"
            class="compare-remove-btn js-compare-remove"
            data-id="${esc(tutor.id)}">×</button>
        </div>
        <span>Selected</span>
      </div>

      <div class="compare-placeholder">
        + Select one more tutor to compare
      </div>
    </div>
  `;
}

function showCompareTrayPhase2(list) {
  compareResultsMount.innerHTML = `
    <div class="compare-tray">
      <div class="compare-tray-list">
        ${list.map(t => `
          <div class="compare-card">
            <div class="compare-card-top">
              <strong>${t.name}</strong>
              <button type="button" class="compare-remove-btn" data-id="${t.id}">×</button>
            </div>
          </div>
        `).join("")}
      </div>

      <div class="compare-actions">
        <button id="compareNowBtn" class="compare-now-btn" type="button">
          Compare Now
        </button>
      </div>
    </div>
  `;

  const compareBtn = document.getElementById("compareNowBtn");
  if (compareBtn) {
    compareBtn.addEventListener("click", () => {
      renderAiCompare(list);
    });
  }

  document.querySelectorAll(".compare-remove-btn").forEach(btn => {
    btn.addEventListener("click", async function () {
      const id = this.getAttribute("data-id");
      const updated = loadSelected().filter(x => String(x.id) !== String(id));
      saveSelected(updated);
      await refreshCompare();
    });
  });
}
    document.addEventListener("click", async (e) => {
      const btn = e.target.closest(".js-compare-toggle");
      if (btn) {
        const list = loadSelected();
        const id = btn.dataset.id;
        const already = list.some(x => String(x.id) === String(id));

        if (already) {
          saveSelected(removeById(list, id));
          await refreshCompare();
          return;
        }

        // if (list.length >= 3) {
        //   alert("You can compare up to 3 tutors at a time");
        //   return;
        // }
        if (list.length >= 3) {
          alert("You can compare up to 3 tutors at a time.");
          return;
        }

        list.push({
          id: btn.dataset.id || "",
          name: btn.dataset.name || "",
          img: btn.dataset.img || "",
          rating: btn.dataset.rating || "0.0",
          reviews: btn.dataset.reviews || "0",
          exp: btn.dataset.exp || "",
          edu: btn.dataset.edu || "",
          budget: btn.dataset.budget || "",
          chip: btn.dataset.chip || "",
          city: btn.dataset.city || "",
          pincode: btn.dataset.pincode || "",
          wa: btn.dataset.wa || "#",
          profile: btn.dataset.profile || "#"
        });

        saveSelected(list);
        await refreshCompare();
        return;
      }

      const rm = e.target.closest(".js-compare-remove");
      if (rm) {
        const id = rm.dataset.id;
        const list = loadSelected();
        saveSelected(removeById(list, id));
        await refreshCompare();
      }
    });

    refreshCompare();
  })();
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {


  window.nxTeacherState = {
  rotationTimer: null,
  rotationRunning: false,
  searchMode: false,
  teacherLoading: false,
  teacherOffset: 10,
  teacherLimit: 10,
  teacherMobileOffset: 0,
  teacherMobileLimit: 2,
  lastMobileMode: null
};

window.nxBlogState = {
  rotationTimer: null,
  loading: false,
  mobileOffset: 0,
  mobileLimit: 2,
  lastMobileMode: null
};

function isMobileView() {
  return window.innerWidth <= 768;
}
 
(function () {
  const bBtn = document.getElementById('homeLoadMoreBlogs');
  const bGrid = document.getElementById('homeBlogsGrid');
  if (!bGrid || !bBtn) return;

  const blogState = window.nxBlogState;
  const blogUrl = bBtn.dataset.url;
  let desktopLoading = false;
  let resizeTimer = null;

  async function fetchBlogs(offset = 0, limit = 6) {
    const qs = new URLSearchParams({
      offset: String(offset),
      limit: String(limit)
    });

    const res = await fetch(blogUrl + '?' + qs.toString(), {
      headers: { 'X-Requested-With': 'XMLHttpRequest' }
    });

    if (!res.ok) throw new Error('HTTP ' + res.status);
    return (await res.text()).trim();
  }

  async function renderMobileBlogs(offset = 0) {
    if (!isMobileView()) return;
    if (blogState.loading) return;

    blogState.loading = true;

    try {
      let html = await fetchBlogs(offset, blogState.mobileLimit);

      if (!html) {
        blogState.mobileOffset = 0;
        html = await fetchBlogs(0, blogState.mobileLimit);
      }

      if (!html) return;

      bGrid.style.opacity = '0.2';

      setTimeout(() => {
        if (isMobileView()) {
          bGrid.innerHTML = html;
          bGrid.style.opacity = '1';
        }
      }, 180);

      blogState.mobileOffset = offset + blogState.mobileLimit;
    } catch (e) {
      console.log('Mobile blog rotate failed:', e);
    } finally {
      blogState.loading = false;
    }
  }

  function startBlogRotation() {
    if (!isMobileView()) return;
    if (blogState.rotationTimer) return;

    blogState.rotationTimer = setInterval(() => {
      renderMobileBlogs(blogState.mobileOffset);
    }, 4500);
  }

  function stopBlogRotation() {
    if (blogState.rotationTimer) {
      clearInterval(blogState.rotationTimer);
      blogState.rotationTimer = null;
    }
  }

  async function setupBlogMode(force = false) {
    const mobile = isMobileView();

    if (!force && blogState.lastMobileMode === mobile) return;
    blogState.lastMobileMode = mobile;

    stopBlogRotation();

    if (mobile) {
      blogState.mobileOffset = 0;
      await renderMobileBlogs(0);
      startBlogRotation();
    } else {
      try {
        const html = await fetchBlogs(0, 10);
        if (html) {
          bGrid.innerHTML = html;
        }

        bBtn.dataset.offset = '6';
        bBtn.disabled = false;
        bBtn.textContent = 'Load More Blogs';
        bBtn.style.opacity = '1';
      } catch (e) {
        console.log('Desktop blog reset failed:', e);
      }
    }
  }

  bBtn.addEventListener('click', async () => {
    if (isMobileView()) return;
    if (desktopLoading) return;

    desktopLoading = true;

    const offset = parseInt(bBtn.dataset.offset || '0', 10);

    bBtn.disabled = true;
    bBtn.textContent = 'Loading...';

    try {
      const html = await fetchBlogs(offset, 6);

      if (!html) {
        bBtn.textContent = 'No more blogs';
        bBtn.style.opacity = '0.7';
        return;
      }

      bGrid.insertAdjacentHTML('beforeend', html);

      const nextOffset = offset + 6;
      bBtn.dataset.offset = String(nextOffset);
      bBtn.textContent = 'Load More Blogs';
      bBtn.disabled = false;
      bBtn.style.opacity = '1';

      const tmp = document.createElement('div');
      tmp.innerHTML = html;

      if (tmp.querySelectorAll('.blog-card').length < 6) {
        bBtn.textContent = 'No more blogs';
        bBtn.disabled = true;
        bBtn.style.opacity = '0.7';
      }
    } catch (e) {
      console.error(e);
      bBtn.textContent = 'Try again';
      bBtn.disabled = false;
    } finally {
      desktopLoading = false;
    }
  });

  setupBlogMode(true);

  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      setupBlogMode();
    }, 220);
  });

  document.addEventListener('visibilitychange', () => {
    if (document.hidden) {
      stopBlogRotation();
    } else if (isMobileView()) {
      startBlogRotation();
    }
  });
})();

 

(function () {
  const grid = document.getElementById('homeTeachersGrid');
  if (!grid) return;

  const url = grid.dataset.url;
  const state = window.nxTeacherState;
  let resizeTimer = null;

  async function fetchTeachers(offset = 0, limit = 6) {
    const qs = new URLSearchParams({
      offset: String(offset),
      limit: String(limit)
    });

    const res = await fetch(url + '?' + qs.toString(), {
      headers: { 'X-Requested-With': 'XMLHttpRequest' }
    });

    if (!res.ok) throw new Error('HTTP ' + res.status);
    return (await res.text()).trim();
  }

  async function rotateTeachers() {
    if (state.teacherLoading) return;
    if (state.searchMode) return;

    state.teacherLoading = true;

    try {
      const isMobile = isMobileView();
      const limit = isMobile ? state.teacherMobileLimit : state.teacherLimit;
      let offset = isMobile ? state.teacherMobileOffset : state.teacherOffset;

      let html = await fetchTeachers(offset, limit);

      if (!html) {
        offset = 0;
        html = await fetchTeachers(0, limit);
      }

      if (!html) {
        state.teacherLoading = false;
        return;
      }

      grid.style.opacity = '0.2';

      setTimeout(() => {
        if (!state.searchMode) {
          grid.innerHTML = html;
          grid.style.opacity = '1';
        }
      }, 180);

      if (isMobile) {
        state.teacherMobileOffset = offset + state.teacherMobileLimit;
      } else {
        state.teacherOffset = offset + state.teacherLimit;
      }
    } catch (e) {
      console.log('Teacher auto-rotate failed:', e);
    } finally {
      state.teacherLoading = false;
    }
  }

  async function setupTeacherMode(force = false) {
    const mobile = isMobileView();

    if (!force && state.lastMobileMode === mobile) return;
    state.lastMobileMode = mobile;

    window.stopTeacherRotation();

    if (state.searchMode) return;

    try {
      const limit = mobile ? state.teacherMobileLimit : state.teacherLimit;
      const html = await fetchTeachers(0, limit);

      if (html) {
        grid.innerHTML = html;
        grid.style.opacity = '1';

        if (mobile) {
          state.teacherMobileOffset = limit;
        } else {
          state.teacherOffset = limit;
        }
      }
    } catch (e) {
      console.log('Teacher mode setup failed:', e);
    }

    window.startTeacherRotation();
  }

  window.startTeacherRotation = function () {
    if (state.rotationTimer) return;
    if (state.searchMode) return;

    state.rotationRunning = true;

    state.rotationTimer = setInterval(() => {
      rotateTeachers();
    }, isMobileView() ? 4000 : 5000);
  };

  window.stopTeacherRotation = function () {
    if (state.rotationTimer) {
      clearInterval(state.rotationTimer);
      state.rotationTimer = null;
    }
    state.rotationRunning = false;
  };

  setupTeacherMode(true);

  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      setupTeacherMode();
    }, 220);
  });

  document.addEventListener('visibilitychange', () => {
    if (document.hidden) {
      window.stopTeacherRotation();
    } else if (!state.searchMode) {
      window.startTeacherRotation();
    }
  });
})();

  // ==============================
  // REVIEW SLIDER
  // ==============================
  (function(){
    const track = document.getElementById('reviewTrack');
    if (!track) return;

    const leftBtn  = document.querySelector('.rnav--left');
    const rightBtn = document.querySelector('.rnav--right');

    function step(){
      const first = track.querySelector('.review-slide');
      if (!first) return 320;
      const w = first.getBoundingClientRect().width;
      const gap = parseFloat(window.getComputedStyle(track).gap || '14');
      return w + gap;
    }

    leftBtn?.addEventListener('click', () => {
      track.scrollLeft -= step();
    });

    rightBtn?.addEventListener('click', () => {
      track.scrollLeft += step();
    });
  })();

 
  (function () {
    const grid = document.getElementById('homeTeachersGrid');
    if (!grid) return;

    const url = grid.dataset.url;
    const state = window.nxTeacherState;

    async function rotateTeachers() {
      if (state.teacherLoading) return;
      if (state.searchMode) return;

      state.teacherLoading = true;

      try {
        const qs = new URLSearchParams({
          offset: String(state.teacherOffset),
          limit: String(state.teacherLimit)
        });

        const res = await fetch(url + "?" + qs.toString(), {
          headers: { "X-Requested-With": "XMLHttpRequest" }
        });

        if (!res.ok) throw new Error("HTTP " + res.status);

        const html = await res.text();

        if (!html || html.trim().length < 10) {
          state.teacherOffset = 0;
          state.teacherLoading = false;
          return;
        }

        grid.style.opacity = "0.2";

        setTimeout(() => {
          if (!state.searchMode) {
            grid.innerHTML = html;
            grid.style.opacity = "1";
          }
        }, 180);

        state.teacherOffset += state.teacherLimit;
      } catch (e) {
        console.log("Teacher auto-rotate failed:", e);
      } finally {
        state.teacherLoading = false;
      }
    }

    window.startTeacherRotation = function () {
      if (state.rotationTimer) return;
      state.rotationRunning = true;
      state.rotationTimer = setInterval(rotateTeachers, 5000);
    };

    window.stopTeacherRotation = function () {
      if (state.rotationTimer) {
        clearInterval(state.rotationTimer);
        state.rotationTimer = null;
      }
      state.rotationRunning = false;
    };

    window.startTeacherRotation();

    document.addEventListener("visibilitychange", () => {
      if (document.hidden) {
        window.stopTeacherRotation();
      } else if (!state.searchMode) {
        window.startTeacherRotation();
      }
    });
  })();

});
</script>

 
<script>
$(document).ready(function () {

    const SEARCH_MIN_LOADER_TIME = 15000; // 15 sec
    let teacherProgressTimer = null;

    function startTeacherProgress() {
        let progress = 0;

        const steps = [
            { at: 8,  title: 'Reading your requirement...', text: 'Understanding class, subject, board and location' },
            { at: 22, title: 'Checking subject fit...', text: 'Matching tutors by subject expertise and teaching level' },
            { at: 38, title: 'Checking board and class alignment...', text: 'Comparing board, class and teaching compatibility' },
            { at: 55, title: 'Checking budget and location...', text: 'Finding tutors who match price and nearby availability' },
            { at: 72, title: 'Checking ratings and experience...', text: 'Reviewing teaching experience and parent feedback' },
            { at: 88, title: 'Preparing best matches...', text: 'Finalizing the most relevant tutors for your child' }
        ];

        $('#teacherProgressBar').css('width', '0%');
        $('#teacherLoadingText').text('NXTutors AI is finding the best tutors...');
        $('#teacherProgressText').text('Preparing search...');

        if (teacherProgressTimer) {
            clearInterval(teacherProgressTimer);
        }

        teacherProgressTimer = setInterval(function () {
            progress += Math.random() * 4;
            if (progress > 94) progress = 94;

            $('#teacherProgressBar').css('width', progress.toFixed(0) + '%');

            let currentTitle = 'NXTutors AI is finding the best tutors...';
            let currentText = 'Preparing search...';

            steps.forEach(function(step){
                if (progress >= step.at) {
                    currentTitle = step.title;
                    currentText = step.text;
                }
            });

            $('#teacherLoadingText').text(currentTitle);
            $('#teacherProgressText').text(currentText);
        }, 900);
    }

    function stopTeacherProgress(success = true) {
        if (teacherProgressTimer) {
            clearInterval(teacherProgressTimer);
            teacherProgressTimer = null;
        }

        $('#teacherProgressBar').css('width', success ? '100%' : '0%');
        $('#teacherProgressText').text(success ? 'Search ready' : 'Search failed');
    }

    function finishAfterDelay(startTime, minTime, callback) {
        let elapsed = Date.now() - startTime;
        let wait = Math.max(0, minTime - elapsed);
        setTimeout(callback, wait);
    }

    function loadTeachers(search = '', offset = 0, append = false) {
        let url = $('#homeTeachersGrid').data('url');
        let state = window.nxTeacherState || {};

        const isFreshSearch = !append && search.trim() !== '';
        const minTime = isFreshSearch ? SEARCH_MIN_LOADER_TIME : 0;
        const requestStart = Date.now();

        // User ne manually interact kiya -> auto rotate band
        state.searchMode = true;
        if (typeof window.stopTeacherRotation === 'function') {
            window.stopTeacherRotation();
        }

        $('#teacherLoading').show();
        $('#heroSearchBtn').prop('disabled', true).text('Finding Tutors...');
        $('#homeLoadMoreTeachers').prop('disabled', true);

        if (minTime > 0) {
            startTeacherProgress();
        } else {
            $('#teacherProgressBar').css('width', '0%');
            $('#teacherLoadingText').text('NXTutors AI is finding the best tutors...');
            $('#teacherProgressText').text('Loading...');
        }

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                search: search,
                offset: offset,
                limit: 6
            },
            success: function(response) {
                finishAfterDelay(requestStart, minTime, function () {
                    stopTeacherProgress(true);

                    $('#teacherLoading').hide();
                    $('#heroSearchBtn').prop('disabled', false).text('Find Best Tutors');

                    let cleanResponse = $.trim(response);

                    if (!cleanResponse) {
                        if (!append) {
                            $('#homeTeachersGrid').html(`
                                <div style="grid-column:1/-1;text-align:center;padding:30px;">
                                    <h3>No tutors found</h3>
                                    <p>Try another subject, class, board, or location.</p>
                                </div>
                            `);
                        }

                        $('#homeLoadMoreTeachers')
                            .text('No more tutors')
                            .prop('disabled', true)
                            .css('opacity', '0.7')
                            .show();

                        return;
                    }

                    if (append) {
                        $('#homeTeachersGrid').append(cleanResponse);
                    } else {
                        $('#homeTeachersGrid').html(cleanResponse);
                    }

                    let tempDiv = $('<div>').html(cleanResponse);
                    let loadedCards = tempDiv.find('.card--tutor').length; // FIXED

                    $('#homeLoadMoreTeachers')
                        .data('query', search)
                        .data('offset', offset + loadedCards)
                        .text('Load More Tutors')
                        .prop('disabled', false)
                        .css('opacity', '1')
                        .show();

                    if (search.trim() !== '') {
                        $('#suggestedTitle').text('Results for "' + search + '"');
                        $('#suggestedSubtitle').text('Handpicked tutors based on your search');
                    } else {
                        $('#suggestedTitle').text('Suggested for your child');
                        $('#suggestedSubtitle').text('');
                    }

                    if (!append && $('#suggestedTeachersSection').length) {
                        $('html, body').animate({
                            scrollTop: $('#suggestedTeachersSection').offset().top - 40
                        }, 1000);
                    }

                    // Intentionally NO auto hide/disable here
                    // Button tabhi disable hoga jab actual blank response milega
                });
            },
            error: function() {
                finishAfterDelay(requestStart, minTime, function () {
                    stopTeacherProgress(false);

                    $('#teacherLoading').hide();
                    $('#heroSearchBtn').prop('disabled', false).text('Find Best Tutors');
                    $('#homeLoadMoreTeachers').prop('disabled', false);

                    alert('Something went wrong. Please try again.');
                });
            }
        });
    }

    $('#heroSearchBtn').on('click', function () {
        let search = $('#heroSearchInput').val().trim();
        loadTeachers(search, 0, false);
    });

    $('#heroSearchInput').on('keypress', function (e) {
        if (e.which === 13) {
            e.preventDefault();
            let search = $(this).val().trim();
            loadTeachers(search, 0, false);
        }
    });

    $('#homeLoadMoreTeachers').on('click', function () {
        let btn = $(this);
        let offset = parseInt(btn.data('offset')) || 0;
        let search = btn.data('query') || '';
        loadTeachers(search, offset, true);
    });

});
</script>

<script>
function openPDF() {
    document.getElementById("pdfModal").style.display = "block";
}

function closePDF() {
    document.getElementById("pdfModal").style.display = "none";
}
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('nxAskAiInput');
    const sendBtn = document.getElementById('nxAskAiSend');
    const thread = document.getElementById('nxAskAiThread');

    function addMessage(type, name, text) {
        const msg = document.createElement('div');
        msg.className = 'nxg-msg ' + type;
        msg.innerHTML = '<small>' + name + '</small>' + escapeHtml(text);
        thread.appendChild(msg);
        thread.scrollTop = thread.scrollHeight;
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.innerText = text;
        return div.innerHTML;
    }

    function sendMessage() {
        const message = input.value.trim();
        if (!message) return;

        addMessage('user', 'Parent', message);
        input.value = '';

        sendBtn.disabled = true;
        sendBtn.innerText = 'Thinking...';

        fetch("{{ route('ask.nxt.ai') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ message })
        })
        .then(res => res.json())
        .then(data => {
            addMessage('ai', 'NXT AI', data.reply || 'No response received.');
        })
        .catch(() => {
            addMessage('ai', 'NXT AI', 'Server response nahi mila.');
        })
        .finally(() => {
            sendBtn.disabled = false;
            sendBtn.innerText = 'Send';
        });
    }

    sendBtn.addEventListener('click', sendMessage);

    input.addEventListener('keydown', function(e){
        if(e.key === 'Enter') sendMessage();
    });
});
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {

    const lazyBackgrounds = document.querySelectorAll(".lazy-bg");

    const observer = new IntersectionObserver((entries, obs) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                const el = entry.target;
                const bg = el.dataset.bg;

                el.style.backgroundImage = `url('${bg}')`;

                obs.unobserve(el);
            }
        });

    });

    lazyBackgrounds.forEach(el => observer.observe(el));

});
</script>