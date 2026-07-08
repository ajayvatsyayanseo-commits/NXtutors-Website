<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $metatitle }}</title>
    <meta name="title" content="{{ $metatitle }}">
    <meta name="keywords" content="{{ $metakey }}">
    <meta name="description" content="{{ $metadesc }}">
    @include('include.header')
</head>
<body>



<main class="main">
  <style>
.page-hero{
  position: relative;
  overflow: hidden;
  background: linear-gradient(135deg, #1f5f99 0%, #2f6da7 100%);
  min-height: 220px;
  display: flex;
  align-items: center;
}

.page-hero::before,
.page-hero::after{
  content: "";
  position: absolute;
  inset: 0;
  pointer-events: none;
}

.page-hero::before{
  background:
    radial-gradient(circle at 15% 100%, rgba(255,255,255,.16) 0, rgba(255,255,255,0) 28%),
    radial-gradient(circle at 85% 0%, rgba(255,255,255,.12) 0, rgba(255,255,255,0) 32%);
}

.page-hero::after{
  background-image:
    repeating-radial-gradient(
      circle at 12% 110%,
      rgba(255,255,255,.16) 0 2px,
      transparent 2px 14px
    ),
    repeating-radial-gradient(
      circle at 88% -10%,
      rgba(255,255,255,.14) 0 2px,
      transparent 2px 14px
    );
  opacity: .55;
}

.page-hero .container{
  position: relative;
  z-index: 2;
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
}

.page-hero__row{
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;
  min-height: 220px;
}

.page-hero__title{
  margin: 0;
  color: #fff;
  font-size: 56px;
  line-height: 1.1;
  font-weight: 800;
  letter-spacing: -.02em;
}

.page-hero__crumbs{
  display: flex;
  align-items: center;
  gap: 10px;
  flex-wrap: wrap;
  color: rgba(255,255,255,.95);
  font-size: 18px;
  font-weight: 500;
}

.page-hero__crumbs a{
  color: #fff;
  text-decoration: none;
}

.page-hero__crumbs a:hover{
  text-decoration: underline;
}

.page-hero__sep{
  opacity: .9;
  font-size: 24px;
  line-height: 1;
}

@media (max-width: 768px){
  .page-hero{
    min-height: 170px;
  }

  .page-hero__row{
    min-height: 170px;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    gap: 12px;
  }

  .page-hero__title{
    font-size: 38px;
  }

  .page-hero__crumbs{
    font-size: 15px;
  }
}
</style>

<section class="page-hero">
  <div class="container">
    <div class="page-hero__row">
      <h1 class="page-hero__title">FAQs</h1>

      <nav class="page-hero__crumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="page-hero__sep">›</span>
        <span>FAQs</span>
      </nav>
    </div>
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

<style>
/* 2-column FAQ layout */
.faq-grid{
  display:grid;
  grid-template-columns: 1fr;
  gap: 14px;
}
@media (min-width: 900px){
  .faq-grid{
    grid-template-columns: 1fr 1fr;
    gap: 18px;
    align-items:start;
  }
}
</style>

</main>

@include('include.footer')
</body>
</html>