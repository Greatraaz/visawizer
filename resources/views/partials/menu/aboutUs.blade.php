<style type="text/css">
:root {
  --brand:      #66003f;
  --brand-dark: #4a002d;
  --brand-pale: #fdf0f6;
  --brand-mist: #f5e0ee;
  --gold:       var(--theme-color-3);
  --gold-lt:    #e8c97a;
}
.mega-menu22 {
    transform: translateX(-50%);
    border-radius: 0;
}
.col-heading2 i {
    font-size: 1rem;
    color: var(--theme-color-3) !important;
}
/* ── Column header ── */
.col-heading2 {
    font-size: .8rem;
    font-weight: 700;
    letter-spacing: .16em;
    text-transform: uppercase;
    color: #66003f;
    border-bottom: 2px solid #66003f;
    padding-bottom: .6rem;
    margin-bottom: .75rem;
}
.mega-link {
    justify-content: start !important;
}

.link-icon2 {
    width: 28px;
    height: 28px;
    min-width: 28px;
    border-radius: 7px;
    background: #66003f;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: .9rem;
    color: #fff;
    transition: all .22s ease;
    position: relative;
    z-index: 1;
}
.link-text2 { position: relative; z-index: 1; line-height: 1.3; }

/* ── Promo card ── */
.promo-card {
  background: linear-gradient(145deg, var(--brand) 0%, var(--brand-dark) 100%);
  border-radius: 12px; position: relative; overflow: hidden;
}
.promo-card::before {
  content: ''; position: absolute;
  width: 200px; height: 200px; border-radius: 50%;
  border: 45px solid rgba(255,255,255,.06);
  top: -55px; right: -55px; pointer-events: none;
}
.promo-card::after {
  content: ''; position: absolute;
  width: 100px; height: 100px; border-radius: 50%;
  background: rgba(201,164,90,.12);
  bottom: 40px; left: -25px; pointer-events: none;
}
.promo-img-placeholder {
  height: 130px; width: 100%;
  background: rgba(255,255,255,.06);
  display: flex; align-items: center; justify-content: center;
  color: rgba(255,255,255,.2); font-size: 2.5rem;
}
.promo-badge {
  display: inline-flex; align-items: center; gap: .35rem;
  background: rgba(201,164,90,.18); border: 1px solid rgba(201,164,90,.35);
  color: var(--gold-lt);
  font-size: .65rem; font-weight: 600; letter-spacing: .1em;
  text-transform: uppercase; padding: .25rem .65rem; border-radius: 6px;
}
.promo-heading {
  font-size: 1.2rem; font-weight: 700; color: #fff; line-height: 1.2;
}
.promo-divider {
  width: 32px; height: 2px;
  background: #fff; border-radius: 2px;
}
.promo-text { font-size: .78rem; color: rgba(255,255,255,.72); line-height: 1.55; }
.btn-gold {
  background: #fff; color: var(--brand-dark);
  border: none; border-radius: 8px;
  font-size: .8rem; font-weight: 700;
  transition: all .22s ease;
}
.btn-gold:hover {
  background: var(--gold-lt); color: var(--brand-dark);
  transform: translateY(-2px);
  box-shadow: 0 6px 18px rgba(201,164,90,.4);
}
.btn-outline-light-sm {
  background: rgba(255,255,255,.1);
  color: #fff; border: 1px solid rgba(255,255,255,.25);
  border-radius: 8px; font-size: .8rem; font-weight: 500;
  transition: all .22s ease;
}
.btn-outline-light-sm:hover {
  background: rgba(255,255,255,.18); color: #fff;
  transform: translateY(-2px);
}

.mega-footer-strip {
  background: var(--brand-pale);
  border-top: 1px solid rgba(102,0,63,.1);
  border-radius: 0 0 16px 16px;
}
.strip-link {
  font-size: .76rem; color: #5a3347; text-decoration: none;
  display: flex; align-items: center; gap: .35rem;
  transition: color .2s ease;
}
.strip-link:hover { color: var(--brand); }
.mega-menu22 .d-flex.gap-2.mt-1 a {
    padding: 5px 15px;
}
</style>
<div class="row p-3">

  <!-- COL 2: Success -->
  <div class="col-lg-2 col-md-6 border-start border-1" style="border-color:rgba(102,0,63,.1)!important;">
      <img src="http://localhost/visawizer/public/assets/images/services/image-52.webp" class="rounded-3" style="height: 196px;width: 100%;object-fit: cover;">
      <h5 style="margin: 10px 0 3px;">We are best</h5>
      <p>From choosing the right course to preparing your student visa and planning your post-study pathway, Visawizer helps you move with clarity and confidence.</p>
  </div>

  <!-- COL 1: Discover -->
  <div class="col-lg-2 col-md-6">
    <div class="col-heading2">
      <i class="fa-solid fa-compass me-2" style="color:var(--gold);"></i>Discover
    </div>
    <div class="d-flex flex-column gap-1">

      <a href="{{ url('about') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-building-columns"></i></span>
        <span class="link-text2">About Us</span>
      </a>

      <a href="{{ url('contact') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-phone-flip"></i></span>
        <span class="link-text2">Contact</span>
      </a>

    </div>
    <div class="col-heading2 pt-3">
      <i class="fa-solid fa-trophy me-2" style="color:var(--gold);"></i>Success
    </div>
    <div class="d-flex flex-column gap-1">

      <a href="{{ url('testimonials') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-star"></i></span>
        <span class="link-text2">Testimonials</span>
      </a>

      <a href="{{ url('testimonials/video') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-circle-play"></i></span>
        <span class="link-text2">Video Testimonials</span>
      </a>

      <a href="{{ url('case-studies') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-folder-open"></i></span>
        <span class="link-text2">Case Studies</span>
      </a>

    </div>
  </div>

  <!-- COL 3: Resources -->
  <div class="col-lg-2 col-md-6 border-start border-1" style="border-color:rgba(102,0,63,.1)!important;">
    <div class="col-heading2 ps-3">
      <i class="fa-solid fa-layer-group me-2" style="color:var(--gold);"></i>Resources
    </div>
    <div class="d-flex flex-column gap-1 ps-2">

      <a href="{{ url('resources/blogs') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-pen-nib"></i></span>
        <span class="link-text2">Blogs</span>
      </a>

      <a href="{{ url('resources/videos') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-film"></i></span>
        <span class="link-text2">Videos</span>
      </a>

      <a href="{{ url('resources/podcast') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-microphone-lines"></i></span>
        <span class="link-text2">Podcast</span>
      </a>

      <a href="{{ url('resources/webinars') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-laptop-file"></i></span>
        <span class="link-text2">Webinars</span>
      </a>

      <a href="{{ url('resources/white-papers') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-file-lines"></i></span>
        <span class="link-text2">White Papers</span>
      </a>

    </div>
  </div>

  <!-- COL 4: Help & Policies -->
  <div class="col-lg-2 col-md-6 border-start border-1" style="border-color:rgba(102,0,63,.1)!important;">
    <div class="col-heading2 ps-3">
      <i class="fa-solid fa-shield-halved me-2" style="color:var(--gold);"></i>Help &amp; Policies
    </div>
    <div class="d-flex flex-column gap-1 ps-2">

      <a href="{{ url('resources/visa-guides') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-book-open"></i></span>
        <span class="link-text2">Visa Guides</span>
      </a>

      <a href="{{ url('resources/checklists') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-list-check"></i></span>
        <span class="link-text2">Checklists</span>
      </a>

      <a href="{{ url('resources/downloads') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-download"></i></span>
        <span class="link-text2">Downloads</span>
      </a>

      <a href="{{ url('faq') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-circle-question"></i></span>
        <span class="link-text2">FAQ</span>
      </a>

      <a href="{{ url('privacy-policy') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-lock"></i></span>
        <span class="link-text2">Privacy Policy</span>
      </a>

      <a href="{{ url('code-of-conduct') }}" class="mega-link">
        <span class="link-icon2"><i class="fa-solid fa-gavel"></i></span>
        <span class="link-text2">Code of Conduct</span>
      </a>

    </div>
  </div>

  <!-- PROMO CARD -->
  <div class="col-lg-4 col-md-12">
    <div class="promo-card h-100">
      <img src="https://ethics4work.com/assets/images/principles-image-3.webp" class="w-100 rounded-top" style="height:138px;object-fit:cover;" alt="Visawizer Team"/>
      <div class="p-3 d-flex flex-column gap-2" style="position:relative;z-index:1;">
        <div class="promo-badge">
          <i class="fa-solid fa-award"></i> Trusted Experts
        </div>
        <h3 class="promo-heading mb-0">Why Choose Visawizer?</h3>
        <div class="promo-divider"></div>
        <p class="promo-text mb-0">
          Registered migration agents delivering transparent, results-driven visa solutions for families and professionals across Australia.
        </p>
        <div class="d-flex flex-column gap-2 mt-1">
          <a href="{{ url('contact/speak-to-expert') }}" class="btn btn-gold btn-sm d-flex align-items-center justify-content-center gap-2 py-2">
            <i class="fa-solid fa-headset"></i> Speak to an Expert
          </a>
          <a href="{{ url('contact/book-appointment') }}" class="btn btn-outline-light-sm btn-sm d-flex align-items-center justify-content-center gap-2 py-2 text-white">
            <i class="fa-regular fa-calendar-check"></i> Book Appointment
          </a>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="mega-footer-strip px-4 py-2 d-flex align-items-center justify-content-between flex-wrap gap-2">
  <span class="d-flex align-items-center gap-2" style="font-size:.76rem;color:#5a3347;">
    <i class="fa-solid fa-circle-info" style="color:var(--brand);"></i>
    All content is provided for general information only.
  </span>
  <div class="d-flex align-items-center gap-3">
    <a href="{{ url('resources/visa-checker') }}" class="strip-link">
      <i class="fa-solid fa-magnifying-glass"></i>Visa Checker
    </a>
    <a href="{{ url('resources/processing-times') }}" class="strip-link">
      <i class="fa-regular fa-clock"></i>Processing Times
    </a>
    <a href="{{ url('contact') }}" class="strip-link">
      <i class="fa-solid fa-phone-flip"></i>Get in Touch
    </a>
  </div>
</div>