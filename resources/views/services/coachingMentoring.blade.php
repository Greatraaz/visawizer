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
    <section class="hero-section-5" style="background-image: url({{ asset('assets/images/services/banner-6.webp') }});padding-top: 120px;">
    <div class="container">
        <div class="hero-content-5">
            <div class="title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h1>Empowering Leaders, Transforming Careers</h1>
            </div>
            <div class="text" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <p>Unlock your potential with personalized coaching and mentoring programs designed to elevate professional and personal growth.</p>
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
                        <h4>Invest in Personal Growth!</h4>
                        <p>🌟 Every coaching session brings you closer to your goals.</p>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="rightArea">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4 class="text-white">Unlock Your Potential</h4>
                                <p class="text-white">Tailored coaching & mentoring programs for personal and professional success.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/services/side6.webp') }}">
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
                        <span>Our Coaching Programs</span>
                    </div>
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Empowering Individuals & Teams Across Industries</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Leadership<br>
                            Development
                        </h4>
                        <i class="fa-light fa-user-tie"></i>
                    </div>
                    <div class="service-content">
                        <p>Programs designed to enhance leadership skills and strategic decision-making.</p>
                    </div>
                    <div class="i-shape">
                        <h1>01</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Career<br>
                            Mentoring
                        </h4>
                        <i class="fa-light fa-graduation-cap"></i>
                    </div>
                    <div class="service-content">
                        <p>Our best guided mentorship to support professional growth and career transitions.</p>
                    </div>
                    <div class="i-shape">
                        <h1>02</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Skill<br>
                            Enhancement
                        </h4>
                        <i class="fa-light fa-lightbulb-on"></i>
                    </div>
                    <div class="service-content">
                        <p>We offer tailored corporate sessions designed to strengthen essential professional and soft skills..</p>
                    </div>
                    <div class="i-shape">
                        <h1>03</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Team<br>
                            Coaching
                        </h4>
                        <i class="fa-light fa-people-group"></i>
                    </div>
                    <div class="service-content">
                        <p>Collaborative coaching for teams to improve performance and collaboration.</p>
                    </div>
                    <div class="i-shape">
                        <h1>04</h1>
                    </div>
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
                        <img src="{{ asset('assets/images/services/image-61.webp') }}">
                        
                    </div>
                    <div class="thumb-2"><img src="{{ asset('assets/images/services/image-62.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb"><img src="{{ asset('assets/images/services/image-63.webp') }}"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle text-uppercase">
                        <span>About Us</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Empowering Growth, One Insight at a Time</h2>
                    </div>
                    <div class="text">
                        <p>At Evolvia Coaching, we guide individuals and organizations to unlock their full potential. Our programs focus on leadership development, career mentoring, skill enhancement, and team coaching to create lasting impact.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Customized Coaching</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Experienced Mentors</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Proven Methodologies</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Flexible Scheduling</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
</section>

    <!-- why-us-section end -->

    <!-- our-camping-section-2 start -->
   <section class="our-camping-section-3 p-t-100 p-b-100 p-t-xs-80 p-b-xs-80" style="background-image: url({{ asset('assets/img/bg/our-camping-bg-2.webp') }})">
    <div class="container">
        <div class="row m-b-50 m-b-xs-40">
            <div class="col-xl-12">
                <div class="section-top-7" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="common-subtitle text-uppercase">
                        <span>Our Coaching Programs</span>
                    </div>
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Explore Our Mentoring Initiatives</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
            <div class="col-xl-12">
                <div class="camping-slider-active-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="camping-card-2">
                                <div class="thumb">
                                    <img alt="thumb-1" src="{{ asset('assets/images/services/program1.webp') }}">
                                    <div class="date">
                                        <i class="fa-regular fa-clock"></i> <span>Coming Soon</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="donation-wrap">
                                        <div class="content-top">
                                            <div class="title">
                                                <h3><a href="javascript:void(0)">Leadership Development Program</a></h3>
                                            </div>
                                        </div>
                                        <div class="d-top">
                                            <p>Progress</p>
                                            <p>60%</p>
                                        </div>
                                        <div aria-label="Progress example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress" role="progressbar">
                                            <div class="progress-bar" style="width: 60%"></div>
                                        </div>
                                        <div class="fund">
                                        </div>
                                        <div class="d-bottom">
                                            <a class='e-primary-btn has-icon d-btn' href="javascript:void(0)">Register Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="camping-card-2">
                                <div class="thumb">
                                    <img alt="thumb-2" src="{{ asset('assets/images/services/program2.webp') }}">
                                    <div class="date">
                                        <i class="fa-regular fa-clock"></i> <span>Coming Soon</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="donation-wrap">
                                        <div class="content-top">
                                            <div class="title">
                                                <h3><a href="javascript:void(0)">Career Mentoring<br> Program</a></h3>
                                            </div>
                                        </div>
                                        <div class="d-top">
                                            <p>Progress</p>
                                            <p>40%</p>
                                        </div>
                                        <div aria-label="Progress example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" class="progress" role="progressbar">
                                            <div class="progress-bar" style="width: 40%"></div>
                                        </div>
                                        <div class="fund">
                                        </div>
                                        <div class="d-bottom">
                                            <a class='e-primary-btn has-icon d-btn' href="javascript:void(0)">Register Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="camping-card-2">
                                <div class="thumb">
                                    <img alt="thumb-3" src="{{ asset('assets/images/services/program3.webp') }}">
                                    <div class="date">
                                        <i class="fa-regular fa-clock"></i> <span>Coming Soon</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="donation-wrap">
                                        <div class="content-top">
                                            <div class="title">
                                                <h3><a href="javascript:void(0)">Skill Enhancement Workshops</a></h3>
                                            </div>
                                        </div>
                                        <div class="d-top">
                                            <p>Progress</p>
                                            <p>30%</p>
                                        </div>
                                        <div aria-label="Progress example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="30" class="progress" role="progressbar">
                                            <div class="progress-bar" style="width: 30%"></div>
                                        </div>
                                        <div class="fund">
                                        </div>
                                        <div class="d-bottom">
                                            <a class='e-primary-btn has-icon d-btn' href="javascript:void(0)">Register Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape"><img alt="shape" src="{{ asset('assets/img/shapes/shape-41.webp') }}"></div>
    
</section>

    <!-- our-camping-section-2 end -->

  <section class="about-us-section-2 p-t-100 p-t-xs-80">
    <div class="container">
        <div class="section-top-5">
            <div class="left">
                <div class="common-title text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>Empowering Professionals Through Coaching &<br> Mentoring</h2>
                </div>
            </div>
            <div class="right" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <h6>Welcome to Evolvia Coaches, Your Partner in Growth and Leadership Excellence.</h6>
                <p>We provide personalized coaching and mentoring programs designed to enhance skills, boost confidence, and unlock potential in every professional.</p>
            </div>
        </div>
        <div class="thumb mt-5">
            <img alt="thumb" src="{{ asset('assets/images/services/big6.webp') }}">
            <div class="company-achievements-2">
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i class="fa-light fa-chart-mixed"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="95">0</span>%</h2>
                    <p>Client Success Rate</p>
                </div>
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i class="fa-light fa-lightbulb-exclamation-on"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="500">0</span>+</h2>
                    <p>Programs Delivered</p>
                </div>
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i class="fa-light fa-thumbs-up"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="120">0</span>k</h2>
                    <p>Participants Coached</p>
                </div>
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i class="fa-light fa-users-medical"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="50">0</span>+</h2>
                    <p>Experienced Coaches</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- donate-to-us-section start -->
   <section class="donate-to-us-section" style="background-image: url({{ asset('assets/images/services/last6.webp') }})">
    <div class="container">
        <div class="donate-to-us-layout">
            <div class="become-volunteer-card" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-light fa-users-medical"></i>
                </div>
                <h2>Join Our Coaching Programs</h2>
                <p>Enroll today and unlock your true potential with expert mentoring.</p>
                <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">Enroll Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
            </div>
            <div class="donate-us-card" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-solid fa-hands-holding-circle"></i>
                </div>
                <h2>Support Our Mentoring Initiatives</h2>
                <p>Your contribution helps us reach more professionals and nurture talent worldwide.</p>
                <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">Contact Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
            </div>
            <div class="icon-shape-1"><img alt="icon" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" src="{{ asset('assets/img/shapes/shape-44.webp') }}"></div>
            
        </div>
    </div>
</section>

@include('partials.testi')

@endsection 