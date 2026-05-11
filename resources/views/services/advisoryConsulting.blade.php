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
.testimonial .common-title h2 {
    font-size: 41px;
}
</style>
   <section class="hero-section-5" style="background-image: url({{ asset('assets/images/services/banner-1.webp') }});padding-top: 120px;">
    <div class="container">
        <div class="hero-content-5">
            <div class="title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h1>Transforming Organizations Through Ethical Excellence</h1>
            </div>
            <div class="text" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <p>Partner with <span class="green">Ethics<span class="golden">4</span>Work</span>to embed integrity, accountability, and responsible decision-making into every layer of your organization.</p>
            </div>
            <div class="hero-content-1">
                <div class="join-us">    
                    <a class='e-primary-btn has-icon' data-aos-delay='600' data-aos-duration='1000' data-aos='fade-up' href="{{ url('contact-us') }}">
                        Request a Consultation <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
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
                        <h4>Partner with Experts to Strengthen Your Ethics</h4>
                        <p>📈 Drive organizational integrity, compliance, and responsible decision-making.</p>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="rightArea">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4 class="text-white">Customized Advisory for Every Organization</h4>
                                <p class="text-white">From governance frameworks to crisis management, we provide actionable solutions that build trust and resilience.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/services/ethics.webp') }}">
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
                        <span>Expert Solutions for Ethical Leadership</span>
                    </div>
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Comprehensive Advisory Services for Organizations Worldwide</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Ethics &<br> Compliance
                        </h4>
                        <i class="fa-light fa-scale-balanced"></i>
                    </div>
                    <div class="service-content">
                        <p>Design and implement governance structures and codes of ethics that strengthen integrity and compliance.</p>
                    </div>
                    <div class="i-shape">
                        <h1>01</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Crisis<br>
                            Management
                        </h4>
                        <i class="fa-light fa-shield-exclamation"></i>
                    </div>
                    <div class="service-content">
                        <p>Our best guidance for navigating ethical crises, protecting reputation, and restoring stakeholder trust effectively.</p>
                    </div>
                    <div class="i-shape">
                        <h1>02</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Responsible<br>
                            Leadership
                        </h4>
                        <i class="fa-light fa-lightbulb"></i>
                    </div>
                    <div class="service-content">
                        <p>Coaching and mentoring leaders to make values-driven decisions and cultivate ethical organizational cultures.</p>
                    </div>
                    <div class="i-shape">
                        <h1>03</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Stakeholder<br>
                            Engagement
                        </h4>
                        <i class="fa-light fa-handshake"></i>
                    </div>
                    <div class="service-content">
                        <p>Develop strategies for inclusive decision-making, transparent reporting, and building long-term stakeholder trust.</p>
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
                        <img src="{{ asset('assets/images/services/image-1.webp') }}">
                        
                    </div>
                    <div class="thumb-2"><img src="{{ asset('assets/images/services/image-2.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb"><img src="{{ asset('assets/images/services/image-3.webp') }}"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-title text-start">
                        <h2>Empowering Organizations to Lead with Integrity</h2>
                    </div>
                    <div class="text">
                        <p>At <span class="green">Ethics<span class="golden">4</span>Work</span>, we partner with organizations to embed ethical practices across strategy, culture, and operations. Our advisory services focus on governance, compliance, responsible leadership, and stakeholder engagement, helping companies make decisions that are principled, transparent, and sustainable.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Customized Advisory Solutions</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Governance & Compliance Expertise</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Crisis & Risk Management</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Leadership Coaching & Mentoring</p>
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
                        <span>Ethics Consulting Programs</span>
                    </div>
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Showcasing Our Advisory Initiatives</h2>
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
                                    <a href="{{ url('contact-us') }}"><img alt="thumb-1" src="{{ asset('assets/images/services/program1.webp') }}"></a>
                                    <div class="date">
                                        <i class="fa-regular fa-clock"></i> <span>Coming soon</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="donation-wrap">
                                        <div class="content-top">
                                            <div class="title">
                                                <h3><a href="{{ url('contact-us') }}">Corporate Ethics & Compliance Program</a></h3>
                                            </div>
                                        </div>
                                        <div class="d-top">
                                            <p>Seats Filled</p>
                                            <p>65%</p>
                                        </div>
                                        <div aria-label="Progress" aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress" role="progressbar">
                                            <div class="progress-bar" style="width: 65%"></div>
                                        </div>
                                        <div class="fund">
                                        </div>
                                        <div class="d-bottom">
                                            <a class='e-primary-btn has-icon d-btn' href="{{ url('contact-us') }}">Register Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="camping-card-2">
                                <div class="thumb">
                                    <a href="{{ url('contact-us') }}"><img alt="thumb-2" src="{{ asset('assets/images/services/program2.webp') }}"></a>
                                    <div class="date">
                                        <i class="fa-regular fa-clock"></i> <span>Coming soon</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="donation-wrap">
                                        <div class="content-top">
                                            <div class="title">
                                                <h3><a href="{{ url('contact-us') }}">Ethical Leadership<br> Lab</a></h3>
                                            </div>
                                        </div>
                                        <div class="d-top">
                                            <p>Seats Filled</p>
                                            <p>78%</p>
                                        </div>
                                        <div aria-label="Progress" aria-valuemax="100" aria-valuemin="0" aria-valuenow="78" class="progress" role="progressbar">
                                            <div class="progress-bar" style="width: 78%"></div>
                                        </div>
                                        <div class="fund">
                                        </div>
                                        <div class="d-bottom">
                                            <a class='e-primary-btn has-icon d-btn' href="{{ url('contact-us') }}">Register Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="camping-card-2">
                                <div class="thumb">
                                    <a href="{{ url('contact-us') }}"><img alt="thumb-3" src="{{ asset('assets/images/services/program3.webp') }}"></a>
                                    <div class="date">
                                        <i class="fa-regular fa-clock"></i> <span>Coming soon</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="donation-wrap">
                                        <div class="content-top">
                                            <div class="title">
                                                <h3><a href="{{ url('contact-us') }}">Stakeholder Engagement Workshop</a></h3>
                                            </div>
                                        </div>
                                        <div class="d-top">
                                            <p>Seats Filled</p>
                                            <p>50%</p>
                                        </div>
                                        <div aria-label="Progress" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress" role="progressbar">
                                            <div class="progress-bar" style="width: 50%"></div>
                                        </div>
                                        <div class="fund">
                                        </div>
                                        <div class="d-bottom">
                                            <a class='e-primary-btn has-icon d-btn' href="{{ url('contact-us') }}">Register Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
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
                    <h2>Shaping Ethical Leadership Globally</h2>
                </div>
            </div>
            <div class="right" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <h6>Delivering Consulting Excellence with Proven Impact Across Industries</h6>
                <p>Since our inception, <span class="green">Ethics<span class="golden">4</span>Work</span>has partnered with businesses, educational institutions, and NGOs to embed ethics into governance, decision-making, and organizational culture. Our programs foster integrity, transparency, and sustainable practices across every layer of your organization.</p>
            </div>
        </div>
        <div class="thumb">
            <img alt="thumb" src="{{ asset('assets/images/services/ethical-leadership.webp') }}">
        </div>
    </div>
</section>


    <!-- donate-to-us-section start -->
  <section class="donate-to-us-section" style="background-image: url({{ asset('assets/images/services/partner-with-us.webp') }})">
    <div class="container">
        <div class="donate-to-us-layout">
            <div class="become-volunteer-card" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-light fa-users-medical"></i>
                </div>
                <h2>Partner With Us?</h2>
                <p>Collaborate with <span class="green">Ethics<span class="golden">4</span>Work</span>to embed ethics and integrity in your organization.</p>
                <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">Contact Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
            </div>
            <div class="donate-us-card" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-solid fa-handshake"></i>
                </div>
                <h2>Book a Consultation</h2>
                <p>Start your journey toward responsible leadership and ethical organizational culture.</p>
                <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">Schedule Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
            </div>
            <div class="icon-shape-1"><img alt="icon" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" src="{{ asset('assets/img/shapes/shape-44.webp') }}"></div>
            
        </div>
    </div>
</section>


@include('partials.testi')

@endsection 