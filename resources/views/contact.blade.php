<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $metatitle }}</title>
    <meta name="title" content="{{ $metatitle }}">
    <meta name="keywords" content="{{ $metakey }}">
    <meta name="description" content="{{ $metadesc }}">
    @include('include.header')
</head>
<body>
  <style>
  /* Breadcrumb Section */
 
/* Contact Section */
.tl-7-contact {
    padding:  0;
}

.tl-8-section-title {
    font-size: 34px;
    font-weight: 700;
    margin-bottom: 25px;
    color: #0f172a;
    position: relative;
}

.tl-8-section-title::after {
    content: "";
    width: 70px;
    height: 4px;
    background: #f59e0b;
    display: block;
    margin-top: 10px;
    border-radius: 10px;
}

/* Form Card */
.tl-7-contact-form {
    background: #ffffff;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 15px 50px rgba(15, 23, 42, 0.08);
    border: 1px solid #e2e8f0;
}

/* Inputs */
.tl-7-contact-form input,
.tl-7-contact-form textarea {
    width: 100%;
    border: 1px solid #dbeafe;
    background: #f8fafc;
    padding: 14px 16px;
    border-radius: 12px;
    font-size: 15px;
    color: #0f172a;
    outline: none;
    transition: all 0.3s ease;
}

.tl-7-contact-form input:focus,
.tl-7-contact-form textarea:focus {
    border-color: #2563eb;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
}

.tl-7-contact-form textarea {
    min-height: 140px;
    resize: none;
}

/* Button */
.tl-7-def-btn {
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
    color: #fff;
    border: none;
    padding: 14px 28px;
    border-radius: 12px;
    font-size: 15px;
    font-weight: 600;
    transition: 0.3s ease;
    box-shadow: 0 10px 25px rgba(37, 99, 235, 0.25);
}

.tl-7-def-btn:hover {
    transform: translateY(-2px);
    background: linear-gradient(135deg, #1d4ed8, #1e40af);
}

/* Success message */
.alert-success {
    border-radius: 12px;
    padding: 14px 18px;
    background: #dcfce7;
    color: #166534;
    border: 1px solid #86efac;
    margin-bottom: 20px;
}

/* Error text */
.text-danger {
    font-size: 13px;
    margin-top: 6px;
    color: #dc2626 !important;
}

/* Map Styling */
.contact-map-wrap {
    background: #fff;
    padding: 15px;
    border-radius: 20px;
    box-shadow: 0 15px 50px rgba(15, 23, 42, 0.08);
    border: 1px solid #e2e8f0;
}

.contact-map-wrap iframe {
    width: 100%;
    height: 450px;
    border: 0;
    border-radius: 16px;
}

/* Responsive */
@media (max-width: 991px) {
   

    .tl-7-contact {
        padding: 60px 0;
    }

    .tl-7-contact-form {
        padding: 25px;
    }

    .contact-map-wrap iframe {
        height: 350px;
    }
}

@media (max-width: 576px) {
   

    .tl-8-section-title {
        font-size: 26px;
    }

    .tl-7-contact-form {
        padding: 20px;
        border-radius: 16px;
    }

    .tl-7-def-btn {
        width: 100%;
        text-align: center;
    }

    .contact-map-wrap iframe {
        height: 280px;
    }
}
  
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
      <h1 class="page-hero__title">Contact Us</h1>

      <nav class="page-hero__crumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="page-hero__sep">›</span>
        <span>Contact Us</span>
      </nav>
    </div>
  </div>
</section>
    <section class="tl-7-contact">
      <div class="container">
        <div
          class="row gy-4 gy-md-5 justify-content-between align-items-center"
        >
          <div class="col-lg-6">
            <h2 class="tl-8-section-title">Get In Touch</h2>
             @if (session('success'))
                                <div id="success-message" class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                             @endif
            <form  method="post" action="{{ route('enquiry') }}" class="tl-7-contact-form">
            	@csrf
              <div class="row g-3 g-md-4">
                <div class="col-12 col-xxs-12">
                  <input type="text"  name="name" id="name" required  placeholder="Your Name" />
                  @error('name')
                    <div class="text-danger">{{ $message }}</div>
                   @enderror
                </div>

                <div class="col-6 col-xxs-12">
                  <input type="email"   name="email" id="email" required  placeholder="Your Email" />
                </div>

                

                <div class="col-6 col-xxs-12">
                  <input
                    type="text"
                     name="phone" id="phone" required
                    placeholder="Your Mobile Number"
                  />
                </div>

                <div class="col-12">
                  <textarea name="message" id="message"  placeholder="Your Message"  ></textarea>
                </div>

                <div class="col">
                  <button type="submit" class="tl-7-def-btn">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
    <div class="contact-map-wrap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3509.573934801124!2d77.0597153!3d28.401934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d228c92bd9dc5%3A0x3f7d62a1f2b90a00!2sM3M%20Cosmopolitan!5e0!3m2!1sen!2sin!4v1758969902295!5m2!1sen!2sin"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
        </div>
      </div>
    </section>
  
  @include('include.footer')
</body>
</html>