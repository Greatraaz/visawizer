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
          <a href="https://www.mara.gov.au/tools-for-registered-agents/code-of-conduct" target="_blank">Code of Conduct</a>
          <span class="sep">|</span>
          <a href="https://www.mara.gov.au/get-help-visa-subsite/FIles/consumer_guide_english.pdf" target="_blank">Consumer Guide</a>
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
          <img src="{{ asset('assets/images/visawizer_logo.svg') }}" alt="Visawizer" width="140" height="40" loading="lazy" decoding="async"/>
        </a>
      </div>
    </div>

    <div class="d-none d-xl-block">
      <div class="header-middle">
        <nav class="main-menu-2">
          <ul class="visa-nav">
            <!-- Home -->
            <li><a href="{{ url('/') }}">Home</a></li>

            <!-- 1) Study in Australia -->
            <li class="has-dropdown has-megamenu">
              <a href="{{ url('study') }}">Study in Australia <span class="nav-arrow"><i class="fa-regular fa-chevron-down"></i></span></a>
              <div class="visa-mega">
                @include('partials.menu.studyInAus')
              </div>
            </li>

            <!-- 2) Work & Skilled Migration -->
            <li class="has-dropdown has-megamenu">
              <a href="{{ url('work-skilled-migration') }}">Work &amp; Skilled Migration <span class="nav-arrow"><i class="fa-regular fa-chevron-down"></i></span></a>
              <div class="visa-mega">
                @include('partials.menu.workAndSkill')
              </div>
            </li>

            <!-- 3) Family Visas -->
            <li class="has-dropdown has-megamenu">
              <a href="{{ url('family-visas') }}">Family Visas <span class="nav-arrow"><i class="fa-regular fa-chevron-down"></i></span></a>
              <div class="visa-mega">
                @include('partials.menu.familyVisas')
              </div>
            </li>

            <!-- 4) Visitor & Short Stay -->
            <li class="has-dropdown has-megamenu">
              <a href="{{ url('visitor-short-stay') }}">Visitor &amp; Short Stay <span class="nav-arrow"><i class="fa-regular fa-chevron-down"></i></span></a>
              <div class="visa-mega">
                @include('partials.menu.visiterAndShortStay')
              </div>
            </li>

            <!-- 5) Protection, Appeals & Humanitarian -->
            <li class="has-dropdown has-megamenu">
              <a href="{{ url('appeals-and-reviews') }}">Appeals & Reviews <span class="nav-arrow"><i class="fa-regular fa-chevron-down"></i></span></a>
              <div class="visa-mega">
                @include('partials.menu.appeals')
              </div>
            </li>

            <!-- 6) About Us / Why Visawizer -->
            <li class="has-dropdown has-megamenu">
              <a href="{{ url('about-us') }}">About Us <span class="nav-arrow"><i class="fa-regular fa-chevron-down"></i></span></a>
              <div class="visa-mega mega-menu22">
                @include('partials.menu.aboutUs')
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
        <img src="{{ asset('assets/images/visawizer_logo.svg') }}" alt="Visawizer" width="140" height="40" loading="lazy" decoding="async"/>
      </a>
    </div>
    <div class="off-canvas-text m-b-30">
      <p>Your trusted partner for Australian visas, education, and migration services.</p>
    </div>
    <div class="off-canvas-thumb m-b-40">
      <img src="{{ asset('img/sidebar.png') }}" alt="Visawizer migration and education services" width="342" height="228" loading="lazy" decoding="async"/>
    </div>
    <div class="off-canvas-contact m-b-40">
      <a href="https://www.google.com/maps/search/?api=1&amp;query={{ urlencode(config('site.address1')) }}" class="off-canvas-contact-item" target="_blank" rel="noopener noreferrer">
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
      <a href="tel:{{ config('site.phone1') }}" class="off-canvas-contact-item">
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
          <img src="{{ asset('assets/images/visawizer_logo.svg') }}" alt="Visawizer" width="140" height="40" loading="lazy" decoding="async"/>
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
          <a href="{{ url('study') }}">Study in Australia</a>
          <ul class="sub-menu">
            <li><a href="{{ url('study') }}">Study in Australia overview</a></li>
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
          <a href="{{ url('work-skilled-migration') }}">Work &amp; Skilled Migration</a>
          <ul class="sub-menu">
            <li><a href="{{ url('work-skilled-migration') }}">Work &amp; Skilled Migration overview</a></li>
            <li><a href="{{ url('visa/skilled-independent-189') }}">Skilled Independent Visa (Subclass 189)</a></li>
            <li><a href="{{ url('visa/skilled-nominated-190') }}">Skilled Nominated Visa (Subclass 190)</a></li>
            <li><a href="{{ url('visa/skilled-work-regional-491') }}">Skilled Work Regional (Provisional) Visa (Subclass 491)</a></li>
            <li><a href="{{ url('visa/permanent-residence-skilled-regional-191') }}">PR (Skilled Regional) Visa (Subclass 191)</a></li>
            <li><a href="{{ url('visa/skilled-regional-887') }}">Skilled Regional Visa (Subclass 887)</a></li>
            <li><a href="{{ url('visa/skills-in-demand-482') }}">Skills in Demand (SID) Visa – Subclass 482</a></li>
            <li><a href="{{ url('visa/employer-nomination-186-trt') }}">Employer Nomination Scheme (Subclass 186) TRT</a></li>
            <li><a href="{{ url('visa/employer-nomination-186-de') }}">Employer Nomination Direct Entry (Subclass 186)</a></li>
            <li><a href="{{ url('visa/skilled-employer-sponsored-494') }}">Skilled Employer Sponsored Regional (Subclass 494)</a></li>
            <li><a href="{{ url('visa/training-407-employer-sponsored') }}">Training Visa (Subclass 407)</a></li>
            <li><a href="{{ url('visa/dama') }}">DAMA</a></li>
            <li><a href="{{ url('visa/temporary-work-400') }}">Temporary Work (Subclass 400)</a></li>
            <li><a href="{{ url('visa/temporary-activity-408') }}">Temporary Activity Visa (Subclass 408)</a></li>
            <li><a href="{{ url('visa/national-innovation-858') }}">National Innovation Visa (Subclass 858)</a></li>
          </ul>
        </li>

        <li class="has-dropdown">
          <a href="{{ url('family-visas') }}">Family Visas</a>
          <ul class="sub-menu">
            <li><a href="{{ url('family-visas') }}">Family Visas overview</a></li>
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
          <a href="{{ url('visitor-short-stay') }}">Visitor &amp; Short Stay</a>
          <ul class="sub-menu">
            <li><a href="{{ url('visitor-short-stay') }}">Visitor &amp; Short Stay overview</a></li>
            <li><a href="{{ url('visa/visitor-600') }}">Visitor Visa (Subclass 600)</a></li>
            <li><a href="{{ url('visa/e-visitor-651') }}">E-Visitor Visa (Subclass 651)</a></li>
            <li><a href="{{ url('visa/eta-601') }}">Electronic Travel Authority (Subclass 601)</a></li>
            <li><a href="{{ url('visa/transit-771') }}">Transit Visa (Subclass 771)</a></li>
            <li><a href="{{ url('visa/work-holiday-417') }}">Work and Holiday Visa (Subclass 417)</a></li>
            <li><a href="{{ url('visa/work-holiday-462') }}">Work and Holiday Visa (Subclass 462)</a></li>
          </ul>
        </li>

        <li class="has-dropdown">
          <a href="{{ url('appeals-and-reviews') }}">Appeals & Reviews</a>
          <ul class="sub-menu">
            <li><a href="{{ url('appeals-and-reviews') }}">Appeals & Reviews</a></li>
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
          <a href="{{ url('about-us') }}">About Us / Why Visawizer</a>
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
            <li><a href="{{ route('checklist.index') }}">Checklists</a></li>
            <li><a href="{{ url('downloads') }}">Downloads</a></li>
            <li><a href="{{ url('faq') }}">FAQ</a></li>
            <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
            <li><a href="{{ url('code-of-conduct') }}">Code of Conduct</a></li>
          </ul>
        </li>

        <li><a href="{{ url('book-appointment') }}">Book Appointment</a></li>
        <!-- <li><a href="{{ url('login') }}">Login</a></li> -->
      </ul>
    </div>
  </div>
  <div class="off-canvas-menubar-overlay" data-close="menubar"></div>
</div>
<!-- off-canvas-menubar end -->

<main>
