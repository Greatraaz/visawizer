<style type="text/css">
:root {
  --visa-primary:  #bd1c2e;
  --visa-accent: #85BF18;
  --visa-gradient: linear-gradient(150deg, # #bd1c2e 15%, # #bd1c2e 48.85%, # #bd1c2e 100%);
  --visa-light-bg: #f8faf7;
  --visa-border: #e8ede8;
  --visa-text: #1a1a2e;
  --visa-text-muted: #6b7280;
  --visa-shadow: 0 8px 40px rgba(0, 0, 0, 0.08);
  --visa-shadow-hover: 0 12px 50px rgba(0, 0, 0, 0.12);
  --visa-radius: 12px;
  --visa-radius-sm: 8px;
}
.header-bar-3 .bar {
    left: unset;
    top: unset;
}
/* ===== TOP UTILITY BAR ===== */
.visa-top-bar {
  background: #f5f7f5;
  border-bottom: 1px solid #e8ede8;
  padding: 6px 0;
  font-size: 13px;
}
.visa-top-bar .container-fluid {
  padding: 0 30px;
}
.visa-top-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.visa-top-links {
  display: flex;
  align-items: center;
  gap: 6px;
}
.visa-top-links a {
  color: #6b7280;
  text-decoration: none;
  font-size: 13px;
  font-weight: 400;
  transition: color 0.2s;
  padding: 2px 8px;
}
.visa-top-links a:hover {
  color:  #bd1c2e;
}
.visa-top-links .sep {
  color: #d1d5db;
  font-size: 12px;
}
.visa-top-cta {
  display: flex;
  align-items: center;
  gap: 16px;
}
.visa-top-cta a {
  color: #6b7280;
  text-decoration: none;
  font-size: 13px;
  font-weight: 500;
  transition: color 0.2s;
  display: flex;
  align-items: center;
  gap: 6px;
}
.visa-top-cta a:hover {
  color: #000;
}
.visa-top-cta a i {
  font-size: 12px;
}
.visa-top-cta .top-cta-btn {
  background-color: #bd1c2e;
  color: #fff !important;
  padding: 5px 16px;
  border-radius: 6px;
  font-size: 12px;
  font-weight: 600;
  gap: 6px;
}
.visa-top-cta .top-cta-btn:hover {
  background: #bd1c2e;
}

/* ===== HEADER LAYOUT ===== */
.header-section-1.visa-header {
  background: #fff;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.04);
  position: relative;
}
.header-bottom-layout-2.visa-nav-layout {
  display: flex;
  align-items: center;
  background: #fff;
}
.visa-nav-layout .header-left {
  display: flex;
  align-items: center;
  padding: 0;
  flex: none;
}
.visa-nav-layout .logo-wrap-2 {
  background: none;
  backdrop-filter: none;
  border: none;
  padding: 8px 30px;
  display: flex;
  align-items: center;
}
.visa-nav-layout .logo-wrap-2 a {
  display: flex;
  align-items: center;
  line-height: 0;
}
.visa-nav-layout .logo-wrap-2 img {
  max-width: 140px;
  width: 100%;
  height: auto;
  display: block;
}
.visa-nav-layout .header-middle {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex: 1;
  background: none;
  backdrop-filter: none;
  border: none;
}
.visa-nav-layout .header-right {
  display: flex;
  align-items: center;
  padding: 0 20px;
}

/* ===== MAIN NAVIGATION ===== */
.visa-nav {
  display: flex;
  align-items: center;
  list-style: none;
  margin: 0;
  padding: 0;
}
.main-menu-2 ul.visa-nav > li {
  display: flex;
}
.main-menu-2 ul.visa-nav > li.has-dropdown.has-megamenu {
  position: static;
}
.main-menu-2 ul.visa-nav > li.visa-nav-cta {
  position: relative;
}
.main-menu-2 ul.visa-nav > li > a {
  display: flex;
  align-items: center;
  gap: 4px;
  padding: 22px 14px;
  font-size: 15px;
  font-weight: 500;
  color: #1a1a2e;
  text-decoration: none;
  transition: color 0.2s;
  white-space: nowrap;
  position: relative;
  line-height: 1.2;
  border-radius: 0;
  background: none;
}
.main-menu-2 ul.visa-nav > li > a .nav-arrow {
  font-size: 10px;
  color: #9ca3af;
  transition: transform 0.25s;
}
.main-menu-2 ul.visa-nav > li:hover > a {
  color:  #bd1c2e;
  background: none;
}
.main-menu-2 ul.visa-nav > li:hover > a .nav-arrow {
  transform: rotate(180deg);
  color:  #bd1c2e;
}
.main-menu-2 ul.visa-nav > li > a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 14px;
  right: 14px;
  height: 3px;
  background:  #bd1c2e;
  border-radius: 3px 3px 0 0;
  transform: scaleX(0);
  transition: transform 0.25s;
}
.main-menu-2 ul.visa-nav > li:hover > a::after {
  transform: scaleX(1);
}

/* CTA Button in nav */
.visa-nav-cta {
  margin-left: 6px;
}
.main-menu-2 ul.visa-nav > li.visa-nav-cta > a {
  background: var(--visa-gradient);
  color: #fff;
  padding: 10px 22px;
  border-radius: 50px;
  font-weight: 600;
  font-size: 14px;
  gap: 8px;
  transition: all 0.3s;
  box-shadow: 0 4px 15px rgba(0, 96, 57, 0.2);
  border: none;
}
.main-menu-2 ul.visa-nav > li.visa-nav-cta > a::after { display: none; }
.main-menu-2 ul.visa-nav > li.visa-nav-cta > a:hover {
  transform: translateY(-1px);
  box-shadow: 0 6px 20px rgba(189, 28, 46, 0.3);
  color: #fff;
  background: var(--visa-gradient);
}
.main-menu-2 ul.visa-nav > li.visa-nav-cta > a .nav-arrow {
  color: rgba(255,255,255,0.8);
  font-size: 11px;
}
.main-menu-2 ul.visa-nav > li.visa-nav-cta:hover > a .nav-arrow {
  color: #fff;
}

/* ===== MEGA MENU ===== */
.visa-mega {
  position: absolute;
  left: 50%;
  transform: translateX(-50%) translateY(12px);
  top: 100%;
  width: 1140px;
  max-width: calc(100vw - 40px);
  background: #fff;
  border-radius: 16px;
  box-shadow: var(--visa-shadow);
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  z-index: 999;
  border: 1px solid #f0f2f0;
}
.visa-nav > li:hover .visa-mega {
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
  transform: translateX(-50%) translateY(0);
}
.visa-mega-inner {
  padding: 24px 28px 20px;
}
.visa-mega-row {
  display: flex;
  gap: 0;
}

/* Column within mega menu */
.visa-mega-col {
  flex: 1;
  padding: 0 16px;
  border-right: 1px solid #f0f2f0;
  min-width: 0;
}
.visa-mega-col:last-child {
  border-right: none;
}
.visa-mega-col.visa-mega-promo-col {
  flex: 1.3;
  border-right: none;
  padding-right: 0;
}

/* Section within a column */
.visa-mega-section {
  margin-bottom: 16px;
}
.visa-mega-section:last-child {
  margin-bottom: 0;
}
.visa-mega-section-title {
  font-family: var(--outfit-font);
  font-size: 12px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.8px;
  color:  #bd1c2e;
  margin: 0 0 8px 0;
  padding-bottom: 6px;
  border-bottom: 1.5px solid #e8ede8;
}

/* Link list in mega menu */
.visa-mega-links {
  list-style: none;
  margin: 0;
  padding: 0;
}
.visa-mega-links li {
  margin-bottom: 1px;
}
.visa-mega-links li a {
  display: flex !important;
  align-items: center !important;
  gap: 8px !important;
  padding: 5px 8px !important;
  font-size: 14px !important;
  font-weight: 400 !important;
  color: #4b5563 !important;
  text-decoration: none !important;
  border-radius: 6px !important;
  transition: all 0.2s !important;
  line-height: 1.4 !important;
}
.visa-mega-links li a:hover {
  color:  #bd1c2e;
  background: rgba(0, 96, 57, 0.06);
  padding-left: 12px;
}
.visa-mega-links li a .link-icon {
  width: 4px;
  height: 4px;
  border-radius: 50%;
  background: #d1d5db;
  flex: none;
  transition: all 0.2s;
}
.visa-mega-links li a:hover .link-icon {
  background:  #bd1c2e;
  width: 6px;
  height: 6px;
}
.visa-mega-links li a .link-badge {
  font-size: 10px;
  background: #f0f5f0;
  color: #6b7280;
  padding: 1px 8px;
  border-radius: 10px;
  font-weight: 500;
  margin-left: auto;
}

/* ===== PROMO CARD IN MEGA MENU ===== */
.visa-promo-card {
  background: linear-gradient(150deg, #f0f7f3 0%, #e8f0eb 100%);
  border-radius: 12px;
  padding: 24px 22px;
  height: 100%;
  display: flex;
  flex-direction: column;
  border: 1px solid #dce8e0;
}
.visa-promo-card .promo-icon {
  width: 44px;
  height: 44px;
  border-radius: 10px;
  background: #bd1c2e;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 14px;
  color: #fff;
  font-size: 20px;
}
.visa-promo-card h5 {
  font-family: var(--outfit-font);
  font-size: 16px;
  font-weight: 700;
  color: #1a1a2e;
  margin: 0 0 8px 0;
  line-height: 1.3;
}
.visa-promo-card p {
  font-size: 13px;
  color: #6b7280;
  line-height: 1.5;
  margin: 0 0 16px 0;
  flex: 1;
}
.visa-promo-card .promo-actions {
  display: flex;
  flex-direction: column;
  gap: 8px;
}
.visa-promo-card .promo-btn-primary {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  background:  #bd1c2e !important;
  color: #fff !important;
  padding: 10px 20px;
  border-radius: 8px;
  font-size: 13px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.25s;
  border: none;
}
.visa-promo-card .promo-btn-primary:hover {
  background:  #0000 !important;
  transform: translateY(-1px);
  box-shadow: 0 4px 12px rgba(189, 28, 46, 0.2);
  color: #fff;
}
.visa-promo-card .promo-btn-outline {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  background: transparent;
  color:  #bd1c2e;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 13px;
  font-weight: 500;
  text-decoration: none;
  transition: all 0.25s;
  border: 1.5px solid #c8d8d0;
}
.visa-promo-card .promo-btn-outline:hover {
  border-color:  #bd1c2e;
  background: rgba(163, 44, 18, 0.04);
  color:  #bd1c2e;
}

/* ===== SIZE VARIANTS ===== */
.visa-mega-sm .visa-mega-inner {
  padding: 20px 24px 18px;
}
.visa-mega-sm .visa-mega-col {
  padding: 0 16px;
}

/* ===== HEADER CTAs (desktop right side) ===== */
.header-cta-wrap {
  display: flex;
  align-items: center;
  gap: 12px;
}
.header-cta-wrap .cta-phone {
  display: flex;
  align-items: center;
  gap: 8px;
  color: #1a1a2e;
  text-decoration: none;
  font-size: 14px;
  font-weight: 600;
  transition: color 0.2s;
}
.header-cta-wrap .cta-phone:hover {
  color:  #bd1c2e;
}
.header-cta-wrap .cta-phone i {
  font-size: 16px;
  color: #bd1c2e;
}
.header-cta-wrap .cta-btn {
  background: var(--visa-gradient);
  color: #fff;
  padding: 10px 22px;
  border-radius: 50px;
  font-size: 14px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s;
  box-shadow: 0 4px 15px rgba(0, 96, 57, 0.2);
  display: flex;
  align-items: center;
  gap: 8px;
}
.header-cta-wrap .cta-btn:hover {
  transform: translateY(-1px);
  box-shadow: 0 6px 20px rgba(0, 96, 57, 0.3);
  color: #fff;
}

/* ===== HEADER BAR (hamburger) ===== */
.visa-nav-layout .header-bar-3 {
  width: 44px;
  height: 44px;
  padding: 22px;
  background: #f5f7f5;
  backdrop-filter: none;
  border: 1px solid #e8ede8;
  border-radius: 10px;
}
.visa-nav-layout .header-bar-3 .bar {
  background: #1a1a2e;
  width: 20px;
  height: 2px;
}
.visa-nav-layout .header-bar-3.active {
  background: #bd1c2e;
  border-color: #bd1c2e;
}

/* ===== RESPONSIVE ===== */
@media (min-width: 1400px) {
  .main-menu-2 ul.visa-nav > li > a {
    padding: 22px 16px;
    font-size: 15px;
  }
  .visa-mega {
    width: 1280px;
  }
}

@media (max-width: 1399px) {
  .main-menu-2 ul.visa-nav > li > a {
    padding: 18px 10px;
    font-size: 14px;
  }
  .visa-mega {
    width: 98vw;
  }
  .visa-mega-inner {
    padding: 20px 20px 16px;
  }
  .visa-mega-col {
    padding: 0 12px;
  }
  .visa-nav-layout .logo-wrap-2 {
    padding: 8px 20px;
  }
  .visa-nav-layout .logo-wrap-2 img {
    max-width: 120px;
  }
}

@media (min-width: 1200px) and (max-width: 1399px) {
  .main-menu-2 ul.visa-nav > li > a {
    padding: 18px 8px;
    font-size: 13px;
  }
  .main-menu-2 ul.visa-nav > li.visa-nav-cta > a {
    padding: 8px 16px;
    font-size: 13px;
  }
  .visa-mega-col {
    padding: 0 10px;
  }
  .visa-mega-section-title {
    font-size: 11px;
  }
  .visa-mega-links li a {
    font-size: 13px;
    padding: 4px 6px;
  }
  .visa-promo-card {
    padding: 18px 16px;
  }
  .visa-promo-card h5 {
    font-size: 14px;
  }
  .visa-top-bar .container-fluid {
    padding: 0 20px;
  }
}

@media (max-width: 1199px) {
  .visa-top-bar .container-fluid {
    padding: 0 16px;
  }
  .visa-top-links a {
    font-size: 12px;
    padding: 2px 5px;
  }
  .visa-top-cta .top-cta-btn {
    font-size: 11px;
    padding: 4px 12px;
  }
  .visa-nav-layout .header-middle {
    padding: 0;
  }
}

@media (max-width: 991px) {
  .visa-top-inner {
    flex-direction: column;
    gap: 4px;
  }
  .visa-top-links {
    flex-wrap: wrap;
    justify-content: center;
  }
}

@media (max-width: 767px) {
  .visa-top-links a {
    font-size: 11px;
    padding: 1px 4px;
  }
  .visa-top-cta {
    display: none;
  }
}

/* preserve existing essential styles below */
span.green { color: var(--theme-color-3); }
.bgoverlay {
  background: #0000008f;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}
.project-card .thumb .number { display: none; }
.common-subtitle img { width: 30px; }
@media only screen and (max-width: 768px) {
.logo-wrap-2 img { max-width: 100px; }
.blog-btn.text-end {
  text-align: left !important;
  margin-bottom: 20px;
  margin-top: -20px;
}
.about-widget .footer-logo img { max-width: 150px; }
}
.whatsapp_float {
  position: fixed;
  width: 50px;
  height: 50px;
  bottom: 15px;
  right: 15px;
  background-color: #25D366;
  color: #fff;
  border-radius: 50%;
  text-align: center;
  font-size: 30px;
  box-shadow: 0px 3px 10px rgba(0,0,0,0.3);
  z-index: 999;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: 0.3s ease;
}
.whatsapp_float:hover {
  background-color: #bd1c2e;
  transform: scale(1.1);
}
.ratio298{
  height: 298px;
  object-fit: cover;
  object-position: top;
}
.spinner-container{ display: none; }
.spinner-core{
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.55);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
}
.spinner{
  width: 55px;
  height: 55px;
  border: 5px solid rgba(255,255,255,0.3);
  border-top-color: #bd1c2e;
  border-radius: 50%;
  animation: spin 0.8s linear infinite;
}
@keyframes spin{ to{ transform: rotate(360deg); } }

</style>

<div class="spinner-container">
  <div class="spinner-core">
    <div class="spinner"></div>
  </div>
</div>

<!-- header-section start -->
<header class="header-section-1 visa-header">
  <!-- Top Utility Bar -->
  <div class="visa-top-bar d-none d-xl-block">
    <div class="container-fluid">
      <div class="visa-top-inner">
        <div class="visa-top-links">
          <a href="{{ url('faq') }}">FAQ</a>
          <span class="sep">|</span>
          <a href="{{ url('blogs') }}">Blogs</a>
          <span class="sep">|</span>
          <a href="{{ url('contact-us') }}">Contact</a>
          <span class="sep">|</span>
          <a href="{{ url('privacy-policy') }}">Privacy Policy</a>
          <span class="sep">|</span>
          <a href="{{ url('code-of-conduct') }}">Code of Conduct</a>
        </div>
        <div class="visa-top-cta">
          <a href="tel:{{ config('site.phone1') }}"><i class="fa-regular fa-phone"></i> Call Now</a>
          <a href="{{ url('book-appointment') }}" class="top-cta-btn"><i class="fa-regular fa-calendar-check"></i> Book Appointment</a>
        </div>
      </div>
    </div>
  </div>

  <div class="header-bottom-layout-2 visa-nav-layout">
    <div class="header-left">
      <div class="logo-wrap-2">
        <a href="{{ url('/') }}">
          <img src="{{ asset('assets/images/visawizer_logo.svg') }}" alt="Visawizer"/>
        </a>
      </div>
    </div>

    <div class="w-100 d-none d-xl-block">
      <div class="header-middle">
        <nav class="main-menu-2">
          <ul class="visa-nav">
            <!-- Home -->
            <li><a href="{{ url('/') }}">Home</a></li>

            <!-- 1) Study in Australia -->
            <li class="has-dropdown has-megamenu">
              <a href="javascript:void(0);">Study in Australia <span class="nav-arrow"><i class="fa-regular fa-chevron-down"></i></span></a>
              <div class="visa-mega">
                @include('partials.menu.studyInAus')
              </div>
            </li>

            <!-- 2) Work & Skilled Migration -->
            <li class="has-dropdown has-megamenu">
              <a href="javascript:void(0);">Work &amp; Skilled Migration <span class="nav-arrow"><i class="fa-regular fa-chevron-down"></i></span></a>
              <div class="visa-mega">
                <div class="visa-mega-inner">
                  <div class="visa-mega-row">
                    <div class="visa-mega-col">
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Skilled Migration</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('visa/skilled-independent-189') }}"><span class="link-icon"></span>Skilled Independent Visa (Subclass 189)</a></li>
                          <li><a href="{{ url('visa/skilled-nominated-190') }}"><span class="link-icon"></span>Skilled Nominated Visa (Subclass 190)</a></li>
                          <li><a href="{{ url('visa/skilled-work-regional-491') }}"><span class="link-icon"></span>Skilled Work Regional (Provisional) Visa (Subclass 491)</a></li>
                          <li><a href="{{ url('visa/permanent-residence-skilled-regional-191') }}"><span class="link-icon"></span>Permanent Residence (Skilled Regional) Visa (Subclass 191)</a></li>
                          <li><a href="{{ url('visa/skilled-regional-887') }}"><span class="link-icon"></span>Skilled Regional Visa (Subclass 887)</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="visa-mega-col">
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Employer Sponsored</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('visa/skills-in-demand-482') }}"><span class="link-icon"></span>Skills in Demand (SID) Visa – Subclass 482</a></li>
                          <li><a href="{{ url('visa/employer-nomination-186-trt') }}"><span class="link-icon"></span>Employer Nomination Scheme (Subclass 186) TRT</a></li>
                          <li><a href="{{ url('visa/employer-nomination-186-de') }}"><span class="link-icon"></span>Employer Nomination Direct Entry (Subclass 186)</a></li>
                          <li><a href="{{ url('visa/skilled-employer-sponsored-494') }}"><span class="link-icon"></span>Skilled Employer Sponsored Regional (Subclass 494)</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="visa-mega-col">
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Regional &amp; Special Streams</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('visa/dama') }}"><span class="link-icon"></span>Designated Area Migration Agreements (DAMA)</a></li>
                          <li><a href="{{ url('visa/temporary-work-400') }}"><span class="link-icon"></span>Temporary Work (Short Stay Specialist) Visa (Subclass 400)</a></li>
                          <li><a href="{{ url('visa/temporary-activity-408') }}"><span class="link-icon"></span>Temporary Activity Visa (Subclass 408)</a></li>
                        </ul>
                      </div>
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Talent Pathways</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('visa/distinguished-talent-124') }}"><span class="link-icon"></span>Distinguished Talent Visa Offshore (Subclass 124)</a></li>
                          <li><a href="{{ url('visa/distinguished-talent-858') }}"><span class="link-icon"></span>Distinguished Talent Visa Onshore (Subclass 858)</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="visa-mega-col visa-mega-promo-col">
                      <div class="visa-promo-card">
                        <div class="promo-icon"><i class="fa-regular fa-briefcase"></i></div>
                        <h5>Skilled, Sponsored, and Regional Visa Options</h5>
                        <p>Find the right pathway for independent migration, employer sponsorship, or regional opportunities.</p>
                        <div class="promo-actions">
                          <a href="{{ url('eligibility-check') }}" class="promo-btn-primary"><i class="fa-regular fa-check-circle"></i> Check Eligibility</a>
                          <a href="{{ url('book-appointment') }}" class="promo-btn-outline"><i class="fa-regular fa-calendar-check"></i> Book Appointment</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <!-- 3) Family Visas -->
            <li class="has-dropdown has-megamenu">
              <a href="javascript:void(0);">Family Visas <span class="nav-arrow"><i class="fa-regular fa-chevron-down"></i></span></a>
              <div class="visa-mega">
                <div class="visa-mega-inner">
                  <div class="visa-mega-row">
                    <div class="visa-mega-col">
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Partner Visas</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('visa/partner-820-801') }}"><span class="link-icon"></span>Partner Visa (Subclass 820/801)</a></li>
                          <li><a href="{{ url('visa/partner-309-100') }}"><span class="link-icon"></span>Partner Visa (Subclass 309/100)</a></li>
                          <li><a href="{{ url('visa/prospective-marriage-300') }}"><span class="link-icon"></span>Prospective Marriage Visa (Subclass 300)</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="visa-mega-col">
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Parent Visas I</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('visa/parent-103') }}"><span class="link-icon"></span>Parents Visa (Subclass 103)</a></li>
                          <li><a href="{{ url('visa/contributory-parent-143') }}"><span class="link-icon"></span>Contributory Parent Visa (Subclass 143)</a></li>
                          <li><a href="{{ url('visa/contributory-parent-temp-173') }}"><span class="link-icon"></span>Contributory Parent (Temporary) Visa (Subclass 173)</a></li>
                          <li><a href="{{ url('visa/aged-parent-804') }}"><span class="link-icon"></span>Aged Parent Visa (Subclass 804)</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="visa-mega-col">
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Parent Visas II</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('visa/contributory-aged-parent-864') }}"><span class="link-icon"></span>Contributory Aged Parent Visa (Subclass 864)</a></li>
                          <li><a href="{{ url('visa/sponsored-parent-870') }}"><span class="link-icon"></span>Sponsored Parent (Temporary) Visa (Subclass 870)</a></li>
                          <li><a href="{{ url('visa/contributory-aged-parent-temp-884') }}"><span class="link-icon"></span>Contributory Aged Parent (Temporary) Visa (Subclass 884)</a></li>
                        </ul>
                      </div>
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Child &amp; Relative Visas</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('visa/child-101') }}"><span class="link-icon"></span>Child Visa (Subclass 101)</a></li>
                          <li><a href="{{ url('visa/adoption-102') }}"><span class="link-icon"></span>Adoption Visa (Subclass 102)</a></li>
                          <li><a href="{{ url('visa/remaining-relative-115') }}"><span class="link-icon"></span>Remaining Relative Visa (Subclass 115)</a></li>
                          <li><a href="{{ url('visa/carer-116') }}"><span class="link-icon"></span>Carer Visa (Subclass 116)</a></li>
                          <li><a href="{{ url('visa/orphan-relative-117') }}"><span class="link-icon"></span>Orphan Relative Visa (Subclass 117)</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="visa-mega-col visa-mega-promo-col">
                      <div class="visa-promo-card">
                        <div class="promo-icon"><i class="fa-regular fa-heart"></i></div>
                        <h5>Reunite with Your Family in Australia</h5>
                        <p>Partner, parent, child, and relative visa pathways guided with care and clarity.</p>
                        <div class="promo-actions">
                          <a href="{{ url('book-appointment') }}" class="promo-btn-primary"><i class="fa-regular fa-user-headset"></i> Speak to an Expert</a>
                          <a href="{{ url('book-appointment') }}" class="promo-btn-outline"><i class="fa-regular fa-calendar-check"></i> Book Appointment</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <!-- 4) Visitor & Short Stay -->
            <li class="has-dropdown has-megamenu">
              <a href="javascript:void(0);">Visitor &amp; Short Stay <span class="nav-arrow"><i class="fa-regular fa-chevron-down"></i></span></a>
              <div class="visa-mega visa-mega-sm">
                <div class="visa-mega-inner">
                  <div class="visa-mega-row">
                    <div class="visa-mega-col">
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Visitor Options</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('visa/visitor-600') }}"><span class="link-icon"></span>Visitor Visa (Subclass 600)</a></li>
                          <li><a href="{{ url('visa/e-visitor-651') }}"><span class="link-icon"></span>E-Visitor Visa (Subclass 651)</a></li>
                          <li><a href="{{ url('visa/eta-601') }}"><span class="link-icon"></span>Electronic Travel Authority (Subclass 601)</a></li>
                          <li><a href="{{ url('visa/transit-771') }}"><span class="link-icon"></span>Transit Visa (Subclass 771)</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="visa-mega-col">
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Holiday &amp; Travel</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('visa/work-holiday-417') }}"><span class="link-icon"></span>Work and Holiday Visa (Subclass 417)</a></li>
                          <li><a href="{{ url('visa/work-holiday-462') }}"><span class="link-icon"></span>Work and Holiday Visa (Subclass 462)</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="visa-mega-col visa-mega-promo-col">
                      <div class="visa-promo-card">
                        <div class="promo-icon"><i class="fa-regular fa-plane"></i></div>
                        <h5>Visit Australia with Confidence</h5>
                        <p>Tourist, short-stay, ETA, transit, and holiday visa guidance in one place.</p>
                        <div class="promo-actions">
                          <a href="{{ url('book-appointment') }}" class="promo-btn-primary"><i class="fa-regular fa-file-check"></i> Apply With Guidance</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <!-- 5) Protection, Appeals & Humanitarian -->
            <li class="has-dropdown has-megamenu">
              <a href="javascript:void(0);">Protection, Appeals &amp; Humanitarian <span class="nav-arrow"><i class="fa-regular fa-chevron-down"></i></span></a>
              <div class="visa-mega">
                <div class="visa-mega-inner">
                  <div class="visa-mega-row">
                    <div class="visa-mega-col">
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Appeals &amp; Reviews</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('art-review-appeals') }}"><span class="link-icon"></span>ART Review Appeals</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="visa-mega-col">
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Protection Visas</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('visa/protection-866') }}"><span class="link-icon"></span>Protection Visa (Subclass 866)</a></li>
                          <li><a href="{{ url('visa/temporary-protection-785') }}"><span class="link-icon"></span>Temporary Protection Visa (Subclass 785)</a></li>
                          <li><a href="{{ url('visa/safe-haven-enterprise-790') }}"><span class="link-icon"></span>Safe Haven Enterprise Visa (Subclass 790)</a></li>
                          <li><a href="{{ url('visa/resolution-status-851') }}"><span class="link-icon"></span>Resolution of Status Visa (Subclass 851)</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="visa-mega-col">
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Humanitarian Pathways</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('visa/refugee-200-201-203-204') }}"><span class="link-icon"></span>Refugee Visas (Subclass 200, 201, 203, 204)</a></li>
                          <li><a href="{{ url('visa/global-special-humanitarian-202') }}"><span class="link-icon"></span>Global Special Humanitarian (Subclass 202)</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="visa-mega-col visa-mega-promo-col">
                      <div class="visa-promo-card">
                        <div class="promo-icon">  <i class="fa-solid fa-plane-departure"></i></div>
                        <h5>Support for Complex Immigration Matters</h5>
                        <p>Appeals, protection, and humanitarian pathways handled with sensitivity and expertise.</p>
                        <div class="promo-actions">
                          <a href="{{ url('contact-us') }}" class="promo-btn-primary"><i class="fa-regular fa-lock"></i> Get Confidential Advice</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <!-- 6) About Us / Why Visawizer -->
            <li class="has-dropdown has-megamenu">
              <a href="javascript:void(0);">About Us <span class="nav-arrow"><i class="fa-regular fa-chevron-down"></i></span></a>
              <div class="visa-mega">
                <div class="visa-mega-inner">
                  <div class="visa-mega-row">
                    <div class="visa-mega-col">
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Discover</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('about-us') }}"><span class="link-icon"></span>About Us</a></li>
                          <li><a href="{{ url('contact-us') }}"><span class="link-icon"></span>Contact</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="visa-mega-col">
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Success</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('testimonials') }}"><span class="link-icon"></span>Testimonials</a></li>
                          <li><a href="{{ url('video-testimonials') }}"><span class="link-icon"></span>Video Testimonials</a></li>
                          <li><a href="{{ url('case-studies') }}"><span class="link-icon"></span>Case Studies</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="visa-mega-col">
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Resources</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('blogs') }}"><span class="link-icon"></span>Blogs</a></li>
                          <li><a href="{{ url('videos') }}"><span class="link-icon"></span>Videos</a></li>
                          <li><a href="{{ url('podcast') }}"><span class="link-icon"></span>Podcast</a></li>
                          <li><a href="{{ url('webinars') }}"><span class="link-icon"></span>Webinars</a></li>
                          <li><a href="{{ url('white-papers') }}"><span class="link-icon"></span>White Papers</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="visa-mega-col">
                      <div class="visa-mega-section">
                        <h6 class="visa-mega-section-title">Help &amp; Policies</h6>
                        <ul class="visa-mega-links">
                          <li><a href="{{ url('visa-guides') }}"><span class="link-icon"></span>Visa Guides</a></li>
                          <li><a href="{{ url('checklists') }}"><span class="link-icon"></span>Checklists</a></li>
                          <li><a href="{{ url('downloads') }}"><span class="link-icon"></span>Downloads</a></li>
                          <li><a href="{{ url('faq') }}"><span class="link-icon"></span>FAQ</a></li>
                          <li><a href="{{ url('privacy-policy') }}"><span class="link-icon"></span>Privacy Policy</a></li>
                          <li><a href="{{ url('code-of-conduct') }}"><span class="link-icon"></span>Code of Conduct</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            
          </ul>
        </nav>
      </div>
    </div>

    <div class="header-right">
      <div class="header-bar-3 d-none d-xl-flex" data-toggle="sidebar">
        <div class="bar bar-1"></div>
        <div class="bar bar-2"></div>
        <div class="bar bar-3"></div>
      </div>
      <div class="header-bar-3 d-xl-none" data-toggle="menubar">
        <div class="bar bar-1"></div>
        <div class="bar bar-2"></div>
        <div class="bar bar-3"></div>
      </div>
    </div>
  </div>
</header>
<!-- header-section end -->

<!-- off-canvas-sidebar start -->
<div class="off-canvas-sidebar">
  <div class="off-canvas-sidebar-body">
    <div class="off-canvas-sidebar-close" data-close="sidebar">
      <i class="fa-regular fa-xmark"></i>
    </div>
    <div class="off-canvas-logo m-b-20">
      <a href="{{ url('/') }}">
        <img src="{{ asset('assets/images/visawizer_logo.svg') }}" alt="side-logo"/>
      </a>
    </div>
    <div class="off-canvas-text m-b-30">
      <p>Your trusted partner for Australian visas, education, and migration services.</p>
    </div>
    <div class="off-canvas-thumb m-b-40">
      <img src="{{ asset('assets/img/thumbs/thumb-3.webp') }}" alt="thumb"/>
    </div>
    <div class="off-canvas-contact m-b-40">
      <a href="#" class="off-canvas-contact-item">
        <div class="icon" style="padding: 18px;">
          <i class="fa-solid fa-location-dot"></i>
        </div>
        <div class="text">
          <h6>Address</h6>
          <p>{{ config('site.address1') }}</p>
        </div>
      </a>
      <a href="mailto:support@example.com" class="off-canvas-contact-item">
        <div class="icon">
          <i class="fa-solid fa-paper-plane"></i>
        </div>
        <div class="text">
          <h6>Email</h6>
          <p>{{ config('site.email1') }}</p>
        </div>
      </a>
      <a href="tel:+70264566579" class="off-canvas-contact-item">
        <div class="icon">
          <i class="fa-solid fa-phone-arrow-up-right"></i>
        </div>
        <div class="text">
          <h6>Phone</h6>
          <p>{{ config('site.phone1') }}</p>
        </div>
      </a>
    </div>
    <div class="off-canvas-social-links">
      <a href="{{ config('site.facebook') }}"><i class="fab fa-facebook-f"></i></a>
      <a href="{{ config('site.twitter') }}"><i class="fab fa-x-twitter"></i></a>
      <a href="{{ config('site.instagram') }}"><i class="fab fa-instagram"></i></a>
      <a href="{{ config('site.linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
    </div>
  </div>
  <div class="off-canvas-sidebar-overlay" data-close="sidebar"></div>
</div>
<!-- off-canvas-sidebar end -->

<!-- off-canvas-menubar start -->
<div class="off-canvas-menubar">
  <div class="off-canvas-menubar-body">
    <div class="off-canvas-head">
      <div class="off-canvas-logo">
        <a href="{{ url('/') }}">
          <img src="{{ asset('assets/images/visawizer_logo.svg') }}" alt="logo"/>
        </a>
      </div>
      <div class="off-canvas-menubar-close" data-close="menubar">
        <i class="fa-regular fa-xmark"></i>
      </div>
    </div>

    <div class="off-canvas-menu">
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>

        <li class="has-dropdown">
          <a href="javascript:void(0);">Study in Australia</a>
          <ul class="sub-menu">
            <li><a href="{{ url('education') }}">Education</a></li>
            <li><a href="{{ url('professional-year-programs') }}">Professional Year Programs</a></li>
            <li><a href="{{ url('admission') }}">Admission</a></li>
            <li><a href="{{ url('popular-courses-australia') }}">Popular Courses Australia</a></li>
            <li><a href="{{ url('career-guidance') }}">Career Guidance</a></li>
            <li><a href="{{ url('change-of-course') }}">Change Of Course</a></li>
            <li><a href="{{ url('change-of-college-university') }}">Change Of College / University</a></li>
            <li><a href="{{ url('overseas-student-health-cover') }}">OSHC</a></li>
            <li><a href="{{ url('study-visas') }}">Study Visas</a></li>
            <li><a href="{{ url('visa/student-visa-500') }}">Student Visa (Subclass 500)</a></li>
            <li><a href="{{ url('visa/student-guardian-590') }}">Student Guardian Visa (Subclass 590)</a></li>
            <li><a href="{{ url('visa/training-407') }}">Training Visa (Subclass 407)</a></li>
            <li><a href="{{ url('visa/temporary-graduate-485') }}">Temporary Graduate Visa (Subclass 485)</a></li>
            <li><a href="{{ url('visa/post-study-work-485') }}">Post Study Work Visa (Subclass 485)</a></li>
          </ul>
        </li>

        <li class="has-dropdown">
          <a href="javascript:void(0);">Work &amp; Skilled Migration</a>
          <ul class="sub-menu">
            <li><a href="{{ url('visa/skilled-independent-189') }}">Skilled Independent Visa (Subclass 189)</a></li>
            <li><a href="{{ url('visa/skilled-nominated-190') }}">Skilled Nominated Visa (Subclass 190)</a></li>
            <li><a href="{{ url('visa/skilled-work-regional-491') }}">Skilled Work Regional (Provisional) Visa (Subclass 491)</a></li>
            <li><a href="{{ url('visa/permanent-residence-skilled-regional-191') }}">PR (Skilled Regional) Visa (Subclass 191)</a></li>
            <li><a href="{{ url('visa/skilled-regional-887') }}">Skilled Regional Visa (Subclass 887)</a></li>
            <li><a href="{{ url('visa/skills-in-demand-482') }}">Skills in Demand (SID) Visa – Subclass 482</a></li>
            <li><a href="{{ url('visa/employer-nomination-186-trt') }}">Employer Nomination Scheme (Subclass 186) TRT</a></li>
            <li><a href="{{ url('visa/employer-nomination-186-de') }}">Employer Nomination Direct Entry (Subclass 186)</a></li>
            <li><a href="{{ url('visa/skilled-employer-sponsored-494') }}">Skilled Employer Sponsored Regional (Subclass 494)</a></li>
            <li><a href="{{ url('visa/dama') }}">DAMA</a></li>
            <li><a href="{{ url('visa/temporary-work-400') }}">Temporary Work (Subclass 400)</a></li>
            <li><a href="{{ url('visa/temporary-activity-408') }}">Temporary Activity Visa (Subclass 408)</a></li>
            <li><a href="{{ url('visa/distinguished-talent-124') }}">Distinguished Talent Visa Offshore (Subclass 124)</a></li>
            <li><a href="{{ url('visa/distinguished-talent-858') }}">Distinguished Talent Visa Onshore (Subclass 858)</a></li>
          </ul>
        </li>

        <li class="has-dropdown">
          <a href="javascript:void(0);">Family Visas</a>
          <ul class="sub-menu">
            <li><a href="{{ url('visa/partner-820-801') }}">Partner Visa (Subclass 820/801)</a></li>
            <li><a href="{{ url('visa/partner-309-100') }}">Partner Visa (Subclass 309/100)</a></li>
            <li><a href="{{ url('visa/prospective-marriage-300') }}">Prospective Marriage Visa (Subclass 300)</a></li>
            <li><a href="{{ url('visa/parent-103') }}">Parents Visa (Subclass 103)</a></li>
            <li><a href="{{ url('visa/contributory-parent-143') }}">Contributory Parent Visa (Subclass 143)</a></li>
            <li><a href="{{ url('visa/contributory-parent-temp-173') }}">Contributory Parent (Temporary) Visa (Subclass 173)</a></li>
            <li><a href="{{ url('visa/aged-parent-804') }}">Aged Parent Visa (Subclass 804)</a></li>
            <li><a href="{{ url('visa/contributory-aged-parent-864') }}">Contributory Aged Parent Visa (Subclass 864)</a></li>
            <li><a href="{{ url('visa/sponsored-parent-870') }}">Sponsored Parent (Temporary) Visa (Subclass 870)</a></li>
            <li><a href="{{ url('visa/contributory-aged-parent-temp-884') }}">Contributory Aged Parent (Temporary) Visa (Subclass 884)</a></li>
            <li><a href="{{ url('visa/child-101') }}">Child Visa (Subclass 101)</a></li>
            <li><a href="{{ url('visa/adoption-102') }}">Adoption Visa (Subclass 102)</a></li>
            <li><a href="{{ url('visa/remaining-relative-115') }}">Remaining Relative Visa (Subclass 115)</a></li>
            <li><a href="{{ url('visa/carer-116') }}">Carer Visa (Subclass 116)</a></li>
            <li><a href="{{ url('visa/orphan-relative-117') }}">Orphan Relative Visa (Subclass 117)</a></li>
          </ul>
        </li>

        <li class="has-dropdown">
          <a href="javascript:void(0);">Visitor &amp; Short Stay</a>
          <ul class="sub-menu">
            <li><a href="{{ url('visa/visitor-600') }}">Visitor Visa (Subclass 600)</a></li>
            <li><a href="{{ url('visa/e-visitor-651') }}">E-Visitor Visa (Subclass 651)</a></li>
            <li><a href="{{ url('visa/eta-601') }}">Electronic Travel Authority (Subclass 601)</a></li>
            <li><a href="{{ url('visa/transit-771') }}">Transit Visa (Subclass 771)</a></li>
            <li><a href="{{ url('visa/work-holiday-417') }}">Work and Holiday Visa (Subclass 417)</a></li>
            <li><a href="{{ url('visa/work-holiday-462') }}">Work and Holiday Visa (Subclass 462)</a></li>
          </ul>
        </li>

        <li class="has-dropdown">
          <a href="javascript:void(0);">Protection, Appeals &amp; Humanitarian</a>
          <ul class="sub-menu">
            <li><a href="{{ url('art-review-appeals') }}">ART Review Appeals</a></li>
            <li><a href="{{ url('visa/protection-866') }}">Protection Visa (Subclass 866)</a></li>
            <li><a href="{{ url('visa/temporary-protection-785') }}">Temporary Protection Visa (Subclass 785)</a></li>
            <li><a href="{{ url('visa/safe-haven-enterprise-790') }}">Safe Haven Enterprise Visa (Subclass 790)</a></li>
            <li><a href="{{ url('visa/resolution-status-851') }}">Resolution of Status Visa (Subclass 851)</a></li>
            <li><a href="{{ url('visa/refugee-200-201-203-204') }}">Refugee Visas (Subclass 200, 201, 203, 204)</a></li>
            <li><a href="{{ url('visa/global-special-humanitarian-202') }}">Global Special Humanitarian (Subclass 202)</a></li>
          </ul>
        </li>

        <li class="has-dropdown">
          <a href="javascript:void(0);">About Us / Why Visawizer</a>
          <ul class="sub-menu">
            <li><a href="{{ url('about-us') }}">About Us</a></li>
            <li><a href="{{ url('contact-us') }}">Contact</a></li>
            <li><a href="{{ url('testimonials') }}">Testimonials</a></li>
            <li><a href="{{ url('video-testimonials') }}">Video Testimonials</a></li>
            <li><a href="{{ url('case-studies') }}">Case Studies</a></li>
            <li><a href="{{ url('blogs') }}">Blogs</a></li>
            <li><a href="{{ url('videos') }}">Videos</a></li>
            <li><a href="{{ url('podcast') }}">Podcast</a></li>
            <li><a href="{{ url('webinars') }}">Webinars</a></li>
            <li><a href="{{ url('white-papers') }}">White Papers</a></li>
            <li><a href="{{ url('visa-guides') }}">Visa Guides</a></li>
            <li><a href="{{ url('checklists') }}">Checklists</a></li>
            <li><a href="{{ url('downloads') }}">Downloads</a></li>
            <li><a href="{{ url('faq') }}">FAQ</a></li>
            <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
            <li><a href="{{ url('code-of-conduct') }}">Code of Conduct</a></li>
          </ul>
        </li>

        <li><a href="{{ url('book-appointment') }}">Book Appointment</a></li>
        <li><a href="{{ url('login') }}">Login</a></li>
      </ul>
    </div>
  </div>
  <div class="off-canvas-menubar-overlay" data-close="menubar"></div>
</div>
<!-- off-canvas-menubar end -->

<main>
