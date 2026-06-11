@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')

<style type="text/css">
.work-card-thumb img {
    height: 290px;
    width: 410px;
    object-fit: cover;
    transform: translate(-24px, 0px);
    background: #107f52;
}
.work-card-thumb:before {
    top: 0px;
    left: -120px;
}
@media (min-width: 1200px) and (max-width: 1399px) {
    .why-us-section-3 .thumb-wrapper .thumb-2 {
        width: 80%;
        left: -60px;
    }
}
</style>
  <section class="why-us-section-3 p-t-100 p-b-md-100 p-t-xs-80 p-b-xs-80">
    <div class="container">
        <div class="row align-items-center p-b-80">
            <div class="col-xl-6">
                <div class="thumb-wrapper" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="thumb-1">
                        <img alt="thumb" src="{{ asset('assets/images/principles-image-1.webp') }}">
                    </div>
                    <div class="thumb-2"><img alt="thumb" src="{{ asset('assets/images/about-image-1.webp') }}" style="    border-radius: 10px;"></div>
                    <div class="shape-1"><img alt="shape" src="assets/img/shapes/shape-24.webp"></div>
                    <div class="shape-2"><img alt="shape" src="assets/img/shapes/shape-25.webp"></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content why-us-content-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle">
                         <span>Why Visawizer</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Empowering Organizations Through Ethical Practices</h2>
                    </div>
                    <div class="text">
                        <p>We provide actionable insights, structured programs, and practical frameworks that enable professionals and organizations to navigate ethical challenges, AI governance, HR compliance, and workplace integrity with confidence.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Ethics Training & Certification</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>AI & Technology Governance</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>HR Policies & Compliance</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Organizational Culture Transformation</p>
                            </div>
                        </div>
                    </div>
                    <div class="annual-donation-wrap">
                        <div class="blog-btn">
                            <a class='e-primary-btn has-icon' href="{{ url('about-us') }}">Learn More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-section-2 p-t-100 p-t-xs-80">
    <div class="container">
        <div class="services-content">
            <div class="text-center m-b-50 m-b-xs-40">
                <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                     <span>Work Process</span>
                </div>
                <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>How to Engage with Visawizer</h2>
                </div>
            </div>

            <div class="row row-gap-4 m-b-135 m-b-lg-120 m-b-md-100 m-b-xs-80" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                
                <!-- Step 1: Awareness -->
                <div class="col-xl-4 col-md-6">
                    <div class="service-card-2">
                        <div class="service-top">
                            <h4>Awareness</h4>
                            <h4 class="circled-heading">01</h4>
                        </div>
                        <div class="service-content">
                            <p>Discover Visawizerand explore our ethics programs, resources, and insights designed to help individuals and organizations navigate complex ethical challenges.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Engagement -->
                <div class="col-xl-4 col-md-6">
                    <div class="service-card-2">
                        <div class="service-top">
                            <h4>Engagement</h4>
                            <h4 class="circled-heading">02</h4>
                        </div>
                        <div class="service-content">
                            <p>Interact with our learning modules, events, seminars, webinars, and consultations to deepen your understanding of workplace ethics, AI governance, compliance, and HR policies.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Purchase / Expression of Interest -->
                <div class="col-xl-4 col-md-6">
                    <div class="service-card-2">
                        <div class="service-top">
                            <h4>Action</h4>
                            <h4 class="circled-heading">03</h4>
                        </div>
                        <div class="service-content">
                            <p>Share Expression of Interest or book a consultation. Users can pay partially or fully through our secure payment gateway to access courses, services, or tailored programs.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 4: Usage -->
                <div class="col-xl-4 col-md-6">
                    <div class="service-card-2">
                        <div class="service-top">
                            <h4>Usage</h4>
                            <h4 class="circled-heading">04</h4>
                        </div>
                        <div class="service-content">
                            <p>Utilize our well structured programs, tools, and resources to apply ethical principles in real-world scenarios and workplace decisions.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 5: Loyalty -->
                <div class="col-xl-4 col-md-6">
                    <div class="service-card-2">
                        <div class="service-top">
                            <h4>Loyalty</h4>
                            <h4 class="circled-heading">05</h4>
                        </div>
                        <div class="service-content">
                            <p>Stay engaged with Visawizerthrough continuous learning, updates, and exclusive resources that strengthen your ethical confidence.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 6: Advocacy -->
                <div class="col-xl-4 col-md-6">
                    <div class="service-card-2">
                        <div class="service-top">
                            <h4>Advocacy</h4>
                            <h4 class="circled-heading">06</h4>
                        </div>
                        <div class="service-content">
                            <p>Share your ethical insights and successes with your community. Help promote ethical leadership across organizations and industries.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="shape-2"></div>
        </div>
    </div>
    <div class="shape-1"><img alt="shape" src="assets/img/shapes/shape-26.webp"></div>
</section>

<section class="latest-work-section">
    <div class="container">
        <div class="text-center m-b-60 m-b-xs-50">
            <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                 <span>Our Programs</span>
            </div>
            <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <h2>Recent Completed Courses & Workshops</h2>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
            <div class="col-xl-12">
                <div class="work-card">
                    <div class="work-card-thumb"><svg class="clippy">
                        <defs>
                            <clippath id="w-mask-image">
                                <path d="M94.208 5.66961L19.4714 50.3601C7.39412 57.582 0 70.6187 0 84.6905V542.872H499.787V138.759C499.787 124.827 492.537 111.898 480.65 104.631L319.1 5.87191C312.818 2.0319 305.599 0 298.236 0H114.737C107.507 0 100.413 1.95932 94.208 5.66961Z" fill="#FFE175"></path>
                            </clippath>
                        </defs></svg> <img alt="thumb" src="assets/images/rb1.webp"></div>
                    <div class="work-card-content">
                        <p>Two-Day MDP on Business Ethics</p>
                        <h3>Equipping leaders to make purpose-driven, ethical decisions in complex environments.</h3>
                        
                    </div>
                </div>
                <div class="work-card">
                    <div class="work-card-thumb"><img alt="thumb" src="assets/images/cmpd-1.webp"></div>
                    <div class="work-card-content">
                        <p>Ethics<span class="golden">4</span>Work Foundational Certificate</p>
                        <h3>Foundational learning for early-career professionals and students in ethics and business responsibility.</h3>
                        
                    </div>
                </div>
                <div class="work-card">
                    <div class="work-card-thumb"><img alt="thumb" src="assets/images/cmpd.webp"></div>
                    <div class="work-card-content">
                        <p>Corporate Ethics Workshop</p>
                        <h3>Interactive sessions on ethical dilemmas, governance, and responsible business practices.</h3>
                        
                    </div>
                </div>
                <div class="work-card">
                    <div class="work-card-thumb"><img alt="thumb" src="assets/images/corporate-social-responsibility.webp"></div>
                    <div class="work-card-content">
                        <p>Ethics Simulation Lab</p>
                        <h3>Hands-on team exercises to apply ethical frameworks to real-world business challenges.</h3>
                        
                    </div>
                </div>
                <div class="work-card">
                    <div class="work-card-thumb"><img alt="thumb" src="assets/images/stories-image-2.webp"></div>
                    <div class="work-card-content">
                        <p>Responsible Leadership Program</p>
                        <h3>Building leaders who integrate ethical thinking, accountability, and ESG principles in decision-making.</h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



	@include('partials.blogs')
@endsection 