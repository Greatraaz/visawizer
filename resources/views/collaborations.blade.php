@extends('layouts.frontend')
@section('content') 
<style type="text/css">
@media (min-width: 1200px) and (max-width: 1399px) {
    .hero-section-5 {
        padding-top: 110px;
    }
}
.rightArea img {
    border-radius: 10px;
    border-right: 3px solid #e7b23b;
}
.become-volunteer-card, .donate-us-card {
    background: #0000006e;
    backdrop-filter: blur(0);
}
</style>
<section class="hero-section-5" style="background-image: url(assets/images/services/banner-2.webp)">
    <div class="container">
        <div class="hero-content-5">
            <div class="title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h1>Partnering for Ethical Impact Worldwide</h1>
            </div>
            <div class="text" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <p>We collaborate with organizations, institutions, and thought leaders to embed ethics into business, education, and society, creating lasting positive change.</p>
            </div>
            <div class="hero-content-1">
                <div class="join-us">    
                    <a class='e-primary-btn has-icon' data-aos-delay='600' data-aos-duration='1000' data-aos='fade-up' href="{{ url('contact-us') }}">
                        Join Our Network <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="shape"><img alt="shape" src="assets/img/shapes/shape-39.webp"></div>
    </div>
</section>

	<!-- hero-section end -->

<!-- collaboration-support-section start -->
<section class="make-donate-section">
    <div class="container">
        <div class="make-donate-layout" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <div class="donate-left" style="background-image: url(assets/img/shapes/shape-43.webp)">
                        <h4>Support Ethical Leadership Initiatives!</h4>
                        <p>🤝 Your partnership helps embed ethics in organizations worldwide.</p>
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
<!-- collaboration-support-section end -->


<!-- services-section start -->
<section class="services-section-3 p-t-100 p-t-xs-80">
    <div class="container">
        <div class="row m-b-50 m-b-xs-40">
            <div class="col-xl-12">
                <div class="section-top-9">
                    <div class="common-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <span>Our Collaborative Initiatives</span>
                    </div>
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Partnering with Organizations to Promote Ethics & Accountability</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Ethical<br>Leadership Programs</h4>
                        <i class="fa-light fa-balance-scale"></i>
                    </div>
                    <div class="service-content">
                        <p>Empowering leaders with training and guidance to foster transparency and integrity in organizations.</p>
                    </div>
                    <div class="i-shape">
                        <h1>01</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Corporate<br>Compliance Support</h4>
                        <i class="fa-light fa-file-shield"></i>
                    </div>
                    <div class="service-content">
                        <p>Helping companies implement and maintain robust ethical frameworks and compliance measures.</p>
                    </div>
                    <div class="i-shape">
                        <h1>02</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Education &<br>Market Awareness</h4>
                        <i class="fa-light fa-graduation-cap"></i>
                    </div>
                    <div class="service-content">
                        <p>Programs designed to educate employees, and communities about ethics responsibilities.</p>
                    </div>
                    <div class="i-shape">
                        <h1>03</h1>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Social<br>Impact Initiatives</h4>
                        <i class="fa-light fa-hand-holding-heart"></i>
                    </div>
                    <div class="service-content">
                        <p>Collaborating with partners to implement programs that positively affect communities and uphold ethical practices.</p>
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

<section class="why-us-section-4 p-t-120 p-b-100 p-t-md-100 p-t-xs-80 p-b-xs-80">
    <div class="container">
        <div class="row row-gap-5 align-items-center">
            <div class="col-xl-6">
                <div class="thumb px-xl-5 left" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="thumb-1">
                        <img src="{{ asset('assets/images/services/image-21.webp') }}">
                        
                    </div>
                    <div class="thumb-2"><img src="{{ asset('assets/images/services/image-52.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb"><img src="{{ asset('assets/images/services/image-43.webp') }}"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle text-uppercase">
                        <span>About <span class="green">Ethics<span class="golden">4</span>Work</span></span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Collaborating for Ethical Impact Across Industries</h2>
                    </div>
                    <div class="text">
                        <p>At <span class="green">Ethics<span class="golden">4</span>Work</span>, we partner with organizations, businesses, and institutions to foster a culture of integrity, accountability, and transparency. Our programs focus on promoting ethical leadership, compliance, and socially responsible practices across sectors.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Trusted Partnerships</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Expert Guidance</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Transparent Practices</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Global Network</p>
                            </div>
                        </div>
                    </div>
                    <div class="annual-donation-wrap">
                        <a class='e-primary-btn has-icon' href="{{ url('about-us') }}">Learn More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape"><img alt="shape" src="assets/img/shapes/shape-40.webp"></div>
</section>

<section class="donate-to-us-section" style="background-image: url(assets/images/services/big6.webp)">
    <div class="container">
        <div class="donate-to-us-layout">
            <div class="become-volunteer-card mb-0" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-light fa-users-medical"></i>
                </div>
                <h2>Join Our Network?</h2>
                <p>Collaborate with us to strengthen ethical practices in your organization.</p>
                <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">Get in Touch <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
            </div>
            <div class="icon-shape-1"><img alt="icon" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" src="assets/img/shapes/shape-44.webp"></div>
            <div class="icon-shape-2"></div>
        </div>
    </div>
</section>

<section class="why-us-section-5 p-t-120 p-b-80 p-t-md-100 p-b-md-120 p-b-lg-140 p-t-xs-80 p-b-xs-80">
    <div class="container">
        <div class="row row-gap-5 align-items-center">
            <div class="col-xl-6">
                <div class="why-us-content-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="common-subtitle text-uppercase">
                        <span>Why Partner With Us</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>We Ensure Integrity, Transparency & Impact in Every Collaboration</h2>
                    </div>
                    <div class="text">
                        <p>Our partnerships are designed to create measurable impact. We ensure ethical practices and transparent reporting so every initiative achieves tangible results.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Ethical Guidance</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Verified Programs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="thumb px-xl-5 left" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="thumb-1"><img alt="thumb-1" src="assets/images/area/image-31.webp"></div>
                    <div class="thumb-2">
                        <div class="btn-wrapped-thumb">
                            <img alt="thumb-2" src="assets/images/area/image-71.webp">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection 