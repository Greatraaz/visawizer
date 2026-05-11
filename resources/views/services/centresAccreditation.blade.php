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
.service-card-3 .service-top h4 {
    font-size: 25px;
    line-height: 30px;
}
.testimonial .common-title h2 {
    font-size: 41px;
}
</style>
    <section class="hero-section-5" style="background-image: url({{ asset('assets/images/services/banner-2.webp') }});padding-top: 120px;">
    <div class="container">
        <div class="hero-content-5">
            <div class="title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h1>Empowering Institutions to Uphold Ethical Standards</h1>
            </div>
            <div class="text" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <p><span class="green">Ethics<span class="golden">4</span>Work</span>helps universities, corporates, and institutions establish Centres for Business Ethics, ensuring integrity, governance, and accountability become core organizational principles.</p>
            </div>
            <div class="hero-content-1">
                <div class="join-us">    
                    <a class='e-primary-btn has-icon' data-aos-delay='600' data-aos-duration='1000' data-aos='fade-up' href="{{ url('contact-us') }}">
                        Get Accredited / Collaborate <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
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
                        <h4>Establish a Centre for Business Ethics</h4>
                        <p>🌐 Equip your institution to champion integrity, governance, and ethical leadership.</p>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="rightArea">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4 class="text-white">Accreditation & Institutional Support</h4>
                                <p class="text-white">Receive guidance, frameworks, and mentorship to build a recognized Centre for Business Ethics and Society.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/services/ban2.webp') }}">
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
                        <span>Accreditation & Institutional Support</span>
                    </div>
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Helping Institutions Establish Centres for Business Ethics</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Centre Setup<br>Guidance</h4>
                        <i class="fa-light fa-building-columns"></i>
                    </div>
                    <div class="service-content">
                        <p>Step-by-step support for establishing fully functional Centres for corporates Business Ethics.</p>
                    </div>
                    <div class="i-shape">
                        <h1>01</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Accreditation<br>Programs</h4>
                        <i class="fa-light fa-certificate"></i>
                    </div>
                    <div class="service-content">
                        <p>Formal recognition and certification of Centres adhering to global ethical and governance standards.</p>
                    </div>
                    <div class="i-shape">
                        <h1>02</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Faculty & Training<br>Support</h4>
                        <i class="fa-light fa-chalkboard-teacher"></i>
                    </div>
                    <div class="service-content">
                        <p>Access to expert consultants and faculty for mentoring, curriculum design, and ethical leadership training.</p>
                    </div>
                    <div class="i-shape">
                        <h1>03</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Continuous<br> Evaluation</h4>
                        <i class="fa-light fa-chart-line-up"></i>
                    </div>
                    <div class="service-content">
                        <p>Ongoing assessment and guidance to ensure Centres maintain high standards and evolve with ethical practices.</p>
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
                        <img src="{{ asset('assets/images/services/image-11.webp') }}">
                        
                    </div>
                    <div class="thumb-2"><img src="{{ asset('assets/images/services/image-12.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb"><img src="{{ asset('assets/images/services/image-13.webp') }}"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle text-uppercase">
                        <span>About Our Centres</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Building Ethical Institutions for the Future</h2>
                    </div>
                    <div class="text">
                        <p><span class="green">Ethics<span class="golden">4</span>Work</span>collaborates with universities and organizations to create accredited Centres for Business Ethics. These centres promote governance, ethical decision-making, responsible leadership, and research-driven education to shape principled future leaders.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Custom Centre Design</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Accreditation Support</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Faculty & Training Guidance</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Ongoing Evaluation</p>
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
                        <span>Accreditation Programs & Initiatives</span>
                    </div>
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Highlights of Our Institutional Programs</h2>
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
                                                    <h3><a href="{{ url('contact-us') }}">Centre Setup & Accreditation</a></h3>
                                                </div>
                                            </div>
                                            <div class="d-top">
                                                <p>Seats Filled</p>
                                                <p>60%</p>
                                            </div>
                                            <div aria-label="Progress" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress" role="progressbar">
                                                <div class="progress-bar" style="width: 60%"></div>
                                            </div>
                                            <div class="fund">
                                            </div>
                                            <div class="d-bottom">
                                                <a class='e-primary-btn has-icon d-btn' href="{{ url('contact-us') }}">Join Program <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
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
                                                    <h3><a href="{{ url('contact-us') }}">Faculty & Leadership Training</a></h3>
                                                </div>
                                            </div>
                                            <div class="d-top">
                                                <p>Seats Filled</p>
                                                <p>75%</p>
                                            </div>
                                            <div aria-label="Progress" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress" role="progressbar">
                                                <div class="progress-bar" style="width: 75%"></div>
                                            </div>
                                            <div class="fund">
                                            </div>
                                            <div class="d-bottom">
                                                <a class='e-primary-btn has-icon d-btn' href="{{ url('contact-us') }}">Join Program <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
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
                                            <i class="fa-regular fa-clock"></i> <span>Next Session: Mar 2026</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="donation-wrap">
                                            <div class="content-top">
                                                <div class="title">
                                                    <h3><a href="{{ url('contact-us') }}">Ethical Research & Case Studies</a></h3>
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
                                                <a class='e-primary-btn has-icon d-btn' href="{{ url('contact-us') }}">Join Program <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
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
    </div>
    <div class="shape"><img alt="shape" src="{{ asset('assets/img/shapes/shape-41.webp') }}"></div>
    
</section>

    <!-- our-camping-section-2 end -->

    <section class="about-us-section-2 p-t-100 p-t-xs-80">
    <div class="container">
        <div class="section-top-5">
            <div class="left">
                <div class="common-title text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>Driving Ethical Excellence in Institutions Globally</h2>
                </div>
            </div>
            <div class="right" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <h6>Welcome to <span class="green">Ethics<span class="golden">4</span>Work</span>, Pioneers in Accreditation & Centre Development</h6>
                <p>Since our inception, we have partnered with universities, corporates, and NGOs to establish Centres for Business Ethics, providing frameworks, training, and ongoing support to build integrity-driven organizations worldwide.</p>
            </div>
        </div>
        <div class="thumb">
            <img alt="thumb" src="{{ asset('assets/images/services/ethical-excellence.webp') }}">
            <div class="company-achievements-2">
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i><img alt="shape" src="{{ asset('assets/images/services/icon/1.svg') }}"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="98">0</span>%</h2>
                    <p>Client Satisfaction</p>
                </div>
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i><img alt="shape" src="{{ asset('assets/images/services/icon/2.svg') }}"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="565">0</span>+</h2>
                    <p>Consulting Engagements</p>
                </div>
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i><img alt="shape" src="{{ asset('assets/images/services/icon/3.svg') }}"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="36">0</span>k</h2>
                    <p>Leaders Trained</p>
                </div>
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i><img alt="shape" src="{{ asset('assets/images/services/icon/4.svg') }}"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="100">0</span>+</h2>
                    <p>Expert Consultants</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- donate-to-us-section start -->
    <section class="donate-to-us-section" style="background-image: url({{ asset('assets/images/services/bg2.webp') }})">
    <div class="container">
        <div class="donate-to-us-layout">
            <div class="become-volunteer-card" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-light fa-users-medical"></i>
                </div>
                <h2>Partner With Us</h2>
                <p>Collaborate with <span class="green">Ethics<span class="golden">4</span>Work</span>to establish a Centre for Business Ethics in your institution.</p>
                <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">Contact Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
            </div>
            <div class="donate-us-card" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-solid fa-handshake"></i>
                </div>
                <h2>Request Accreditation</h2>
                <p>Submit a request to have your institution evaluated and accredited for excellence in ethical practices.</p>
                <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">Apply Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
            </div>
            <div class="icon-shape-1"><img alt="icon" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" src="{{ asset('assets/img/shapes/shape-44.webp') }}"></div>
            
        </div>
    </div>
</section>

@include('partials.testi')

@endsection 