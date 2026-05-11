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
   <section class="hero-section-5" style="background-image: url({{ asset('assets/images/services/banner-3.webp') }});padding-top: 120px;">
    <div class="container">
        <div class="hero-content-5">
            <div class="title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h1>Empowering Ethical Leadership Through Training & Workshops</h1>
            </div>
            <div class="text" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <p>Our programs equip professionals and organizations with the skills to navigate complex ethical challenges, foster transparency, and create responsible workplaces.</p>
            </div>
            <div class="hero-content-1">
                <div class="join-us">    
                    <a class='e-primary-btn has-icon' data-aos-delay='600' data-aos-duration='1000' data-aos='fade-up' href="{{ url('contact-us') }}">
                        Contact Us <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="shape">
            <img alt="shape" src="{{ asset('assets/img/shapes/shape-39.webp') }}">
        </div>
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
                        <h4>Transform Your Organization with Ethics Training</h4>
                        <p>🌟 Equip your team with the tools to make responsible, ethical decisions in complex business environments.</p>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="rightArea">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4 class="text-white">Empower Your Workforce</h4>
                                <p class="text-white">Our workshops help professionals embrace ethical leadership, foster compliance, and build a culture of integrity.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('assets/images/services/side3.webp') }}" alt="Ethics Training Workshop">
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
                        <span>Our Expertise</span>
                    </div>
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Comprehensive Ethics & Compliance Workshops</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Corporate<br>
                            Ethics Training
                        </h4>
                        <i class="fa-light fa-handshake"></i>
                    </div>
                    <div class="service-content">
                        <p>Interactive sessions designed to embed ethical decision-making within organizational culture.</p>
                    </div>
                    <div class="i-shape">
                        <h1>01</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Leadership<br>
                            Mentoring
                        </h4>
                        <i class="fa-light fa-chess-king"></i>
                    </div>
                    <div class="service-content">
                        <p>Oue guided mentoring programs to cultivate integrity-focused leadership at all levels.</p>
                    </div>
                    <div class="i-shape">
                        <h1>02</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Regulatory<br>
                            Compliance
                        </h4>
                        <i class="fa-light fa-gavel"></i>
                    </div>
                    <div class="service-content">
                        <p>Workshops to ensure teams understand, interpret, and comply with ethical and regulatory standards.</p>
                    </div>
                    <div class="i-shape">
                        <h1>03</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Whistleblower<br>
                            Awareness
                        </h4>
                        <i class="fa-light fa-bullhorn"></i>
                    </div>
                    <div class="service-content">
                        <p>Programs that empower employees to identify and report unethical practices safely and effectively.</p>
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
                        <img src="{{ asset('assets/images/services/image-21.webp') }}">
                        
                    </div>
                    <div class="thumb-2"><img src="{{ asset('assets/images/services/image-22.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb"><img src="{{ asset('assets/images/services/image-23.webp') }}"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-title text-start">
                        <h2>Empowering Organizations Through Ethical Practices</h2>
                    </div>
                    <div class="text">
                        <p><span class="green">Ethics<span class="golden">4</span>Work</span>is committed to building ethical workplaces and nurturing integrity-driven leadership. 
                        Our tailored workshops and mentoring programs help professionals navigate complex ethical dilemmas, 
                        enhance compliance, and foster a culture of accountability.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Expert-Led Workshops</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Practical Mentoring</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Customized Programs</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Ongoing Support</p>
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
                        <span>Upcoming Programs</span>
                    </div>
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Explore Our Training Workshops & Mentoring Sessions</h2>
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
                                        <i class="fa-regular fa-calendar"></i> <span>Coming soon</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="donation-wrap">
                                        <div class="content-top">
                                            <div class="title">
                                                <h3><a href="{{ url('contact-us') }}">Ethical Leadership Workshop</a></h3>
                                            </div>
                                        </div>
                                        <div class="d-top">
                                            <p>Seats Filled</p>
                                            <p>68%</p>
                                        </div>
                                        <div class="progress" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 68%"></div>
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
                                    <img alt="thumb-2" src="{{ asset('assets/images/services/program2.webp') }}">
                                    <div class="date">
                                        <i class="fa-regular fa-calendar"></i> <span>Coming soon</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="donation-wrap">
                                        <div class="content-top">
                                            <div class="title">
                                                <h3><a href="{{ url('contact-us') }}">Mentoring for Ethical Decision-Making</a></h3>
                                            </div>
                                        </div>
                                        <div class="d-top">
                                            <p>Seats Filled</p>
                                            <p>45%</p>
                                        </div>
                                        <div class="progress" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 45%"></div>
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
                                    <img alt="thumb-3" src="{{ asset('assets/images/services/program3.webp') }}">
                                    <div class="date">
                                        <i class="fa-regular fa-calendar"></i> <span>Coming soon</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="donation-wrap">
                                        <div class="content-top">
                                            <div class="title">
                                                <h3><a href="{{ url('contact-us') }}">Corporate Compliance Training</a></h3>
                                            </div>
                                        </div>
                                        <div class="d-top">
                                            <p>Seats Filled</p>
                                            <p>52%</p>
                                        </div>
                                        <div class="progress" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 52%"></div>
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
                <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span>About Our Training Programs</span>
                </div>
                <div class="common-title text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>Empowering Professionals Through Ethical Excellence</h2>
                </div>
            </div>
            <div class="right" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <h6><span class="green">Ethics<span class="golden">4</span>Work</span>delivers professional training and mentoring programs designed to instill ethical decision-making and corporate governance skills.</h6>
                <p>Our workshops, coaching sessions, and certificate programs equip individuals and organizations with actionable knowledge to foster integrity, compliance, and sustainable ethical practices.</p>
            </div>
        </div>
        <div class="thumb">
            <img alt="training-thumb" src="{{ asset('assets/images/services/big3.webp') }}">
            <div class="company-achievements-2">
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i><img alt="shape" src="{{ asset('assets/images/services/icon/1.svg') }}"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="98">0</span>%</h2>
                    <p>Training Success Rate</p>
                </div>
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i><img alt="shape" src="{{ asset('assets/images/services/icon/2.svg') }}"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="565">0</span>+</h2>
                    <p>Participants Trained</p>
                </div>
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i><img alt="shape" src="{{ asset('assets/images/services/icon/3.svg') }}"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="36">0</span>+</h2>
                    <p>Certified Workshops Delivered</p>
                </div>
                <div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <i><img alt="shape" src="{{ asset('assets/images/services/icon/4.svg') }}"></i>
                    <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="100">0</span>+</h2>
                    <p>Experienced Mentors</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- donate-to-us-section start -->
    <section class="donate-to-us-section" style="background-image: url({{ asset('assets/images/services/support.webp') }})">
    <div class="container">
        <div class="donate-to-us-layout">
            <div class="become-volunteer-card" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-light fa-chalkboard-user"></i>
                </div>
                <h2>Join Our Training Programs</h2>
                <p>Participate in workshops and mentoring sessions to enhance ethical decision-making skills.</p>
                <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">Enroll Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
            </div>
            <div class="donate-us-card" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-solid fa-handshake-angle"></i>
                </div>
                <h2>Support Our Initiatives</h2>
                <p>Your contributions help us expand training and mentoring programs across organizations and individuals.</p>
                <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">Support Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
            </div>
            <div class="icon-shape-1"><img alt="icon" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" src="{{ asset('assets/img/shapes/shape-44.webp') }}"></div>
            
        </div>
    </div>
</section>

@include('partials.testi')

@endsection 