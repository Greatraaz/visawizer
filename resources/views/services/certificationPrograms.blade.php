@extends('layouts.frontend')
@section('content') 
<style type="text/css">
.rightArea h4 {
    color: #e7b23b;
}
.rightArea img {
    border-radius: 10px;
    border-right: 3px solid #e7b23b;
}
.become-volunteer-card, .donate-us-card {
    background: #0000006e;
    backdrop-filter: blur(0);
}
.testimonial .common-title h2 {
    font-size: 41px;
}
</style>
    <section class="hero-section-5" style="background-image: url({{ asset('assets/images/services/banner-4.webp') }});padding-top: 120px;">
    <div class="container">
        <div class="hero-content-5">
            <div class="title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h1>Empowering Professionals Through Ethical Certification</h1>
            </div>
            <div class="text" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <p>Our certification programs are designed to equip individuals and organizations with the knowledge, tools, and frameworks to implement ethical practices and responsible governance in every sector.</p>
            </div>
            <div class="hero-content-1">
                <div class="join-us">    
                    <a class='e-primary-btn has-icon' data-aos-delay='600' data-aos-duration='1000' data-aos='fade-up' href="{{ url('contact-us') }}">
                        Contact Us Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="shape"><img alt="shape" src="{{ asset('assets/img/shapes/shape-39.webp') }}"></div>
    </div>
</section>

    <!-- hero-section end -->

    <!-- make-donate-section start -->
   <section class="make-donate-section">
    <div class="container">
        <div class="make-donate-layout" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <div class="donate-left" style="background-image: url({{ asset('assets/img/shapes/shape-43.webp') }})">
                        <h4>Advance Your Career with Certification</h4>
                        <p>📜 Enhance your professional credentials and ethical expertise.</p>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="rightArea">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4 class="text-white">Structured Programs for Every Professional</h4>
                                <p class="text-white">Our certification programs are tailored to provide practical skills, ethical frameworks, and industry recognition.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/services/side4.webp') }}" style="height: 211px;width: 100%;object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- make-donate-section end -->

    <!-- services-section start -->
 <section class="services-section-3 p-t-100 p-t-xs-80">
    <div class="container">
        <div class="row m-b-50 m-b-xs-40">
            <div class="col-xl-12">
                <div class="section-top-9">
                    <div class="common-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <span>Professional Certification Programs</span>
                    </div>
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Empowering Individuals & Organizations Globally</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Ethical<br> Leadership<br>Certification</h4>
                        <i class="fa-light fa-user-tie"></i>
                    </div>
                    <div class="service-content">
                        <p>Develop skills to lead organizations with integrity and ethical decision-making frameworks.</p>
                    </div>
                    <div class="i-shape"><h1>01</h1></div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Corporate<br> Governance<br> Certification</h4>
                        <i class="fa-light fa-building-columns"></i>
                    </div>
                    <div class="service-content">
                        <p>Gain practical knowledge of governance policies, compliance, and ethical business practices.</p>
                    </div>
                    <div class="i-shape"><h1>02</h1></div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Social<br> Responsibility<br>Certification</h4>
                        <i class="fa-light fa-hand-holding-heart"></i>
                    </div>
                    <div class="service-content">
                        <p>Learn to implement CSR programs and ethical impact initiatives in organizations and communities.</p>
                    </div>
                    <div class="i-shape"><h1>03</h1></div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Ethics<br> Compliance<br>Certification</h4>
                        <i class="fa-light fa-shield-check"></i>
                    </div>
                    <div class="service-content">
                        <p>Master compliance standards, audit processes, and ethical reporting to organizational integrity.</p>
                    </div>
                    <div class="i-shape"><h1>04</h1></div>
                </div>
            </div>

        </div>
    </div>
    
</section>

    <!-- services-section end -->

    <!-- why-us-section start -->
 <section class="why-us-section-4 p-t-120 p-t-md-100 p-t-xs-80 p-b-xs-80">
    <div class="container">
        <div class="row row-gap-5 align-items-center">
            <div class="col-xl-6">
                <div class="thumb px-xl-5 left" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="thumb-1">
                        <img src="{{ asset('assets/images/services/image-41.webp') }}">
                        
                    </div>
                    <div class="thumb-2"><img src="{{ asset('assets/images/services/image-42.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb"><img src="{{ asset('assets/images/services/image-43.webp') }}"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle text-uppercase">
                        <span>About Our Programs</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Certifying Ethical Excellence Worldwide</h2>
                    </div>
                    <div class="text">
                        <p>Our certification programs are designed to provide professionals and organizations with structured learning, practical tools, and recognized credentials to implement ethical practices, compliance standards, and corporate governance frameworks effectively.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Globally Recognized</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Expert-Led Training</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Practical & Actionable</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Flexible Learning Options</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
</section>


  <section class="about-us-section-2 p-t-100 p-t-xs-80">
    <div class="container">
        <div class="section-top-5">
            <div class="left">
                <div class="common-title text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>Advancing Ethics & Professional Excellence Globally</h2>
                </div>
            </div>
            <div class="right" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <h6>Empowering Individuals & Organizations through Certification Programs</h6>
                <p>Since our inception, we have delivered globally recognized programs, equipping professionals with the skills, frameworks, and credentials to implement ethical practices and responsible governance.</p>
            </div>
        </div>
        <div class="thumb">
            <img alt="thumb" src="{{ asset('assets/images/services/big4.webp') }}">
            <div class="company-achievements-2">
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i class="fa-light fa-chart-mixed"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="98">0</span>%</h2>
                    <p>Program Completion Rate</p>
                </div>
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i class="fa-light fa-lightbulb-exclamation-on"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="565">0</span>+</h2>
                    <p>Certification Programs Delivered</p>
                </div>
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i class="fa-light fa-thumbs-up"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="36">0</span>k</h2>
                    <p>Professionals Trained</p>
                </div>
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i class="fa-light fa-users-medical"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="100">0</span>+</h2>
                    <p>Experienced Trainers & Advisors</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- donate-to-us-section start -->
   <section class="donate-to-us-section" style="background-image: url({{ asset('assets/images/services/last4.webp') }})">
    <div class="container">
        <div class="donate-to-us-layout">
            <div class="become-volunteer-card" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-light fa-chalkboard-user"></i>
                </div>
                <h2>Enroll in a Certification Program</h2>
                <p>Join our courses and enhance your ethical expertise and professional credentials.</p>
                <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">Enroll Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
            </div>
            <div class="donate-us-card" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-solid fa-circle-info"></i>
                </div>
                <h2>Request Program Information</h2>
                <p>Get detailed information about upcoming certification programs and modules.</p>
                <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">Contact Us <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
            </div>
            <div class="icon-shape-1"><img alt="icon" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" src="{{ asset('assets/img/shapes/shape-44.webp') }}"></div>
            
        </div>
    </div>
</section>

@include('partials.testi')

@endsection 