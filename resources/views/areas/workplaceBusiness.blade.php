@extends('layouts.frontend')
@section('content') 
<style type="text/css">
.dust-recycle-card {
    background: rgb(0 0 0 / 51%);
    backdrop-filter: blur(0);
}
.dust-recycle-card .dust-recycle-top .services-4 .service-2 i {
    color: #fff;
}
</style>
<section class="hero-slider-active-2">
    <div class="hero-slide-2" style="background-image: url(assets/images/area/banner1.webp)">
        <div class="bgoverlay"></div>
        <div class="container">
            <div class="hero-content-2">
                <div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
                    <h1>Building Ethical Workplaces for Sustainable Success</h1>
                </div>
                <div class="services-2" data-animation="animate__fadeInUp" data-delay="0.4s">
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Guidance on Workplace Ethics</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Trusted Business Practices</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Custom Solutions for Organizations</p>
                    </div>
                </div>
                <div class="join-us" data-animation="animate__fadeInUp" data-delay="0.5s">
                    <a class='e-primary-btn has-icon' href="{{ url('about-us') }}">Discover More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                </div>
            </div>
        </div>
        
        <div class="blur-circle"></div>
    </div>
</section>

	<!-- hero-section-2 end -->

	<!-- services-section start -->
<section class="services-section p-t-120 p-t-md-100 p-t-xs-80">
    <div class="container">
        <div class="row row-gap-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Ethics<br> Training</h4><i class="fa-light fa-lightbulb-exclamation"></i>
                    </div>
                    <div class="service-content">
                        <p>Comprehensive programs to instill ethical decision-making and integrity at all levels of your organization.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Compliance<br> Audits</h4><i class="fa-light fa-clipboard-check"></i>
                    </div>
                    <div class="service-content">
                        <p>Assess your workplace policies and practices to ensure full compliance with legal and ethical standards.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Workplace<br> Consulting</h4><i class="fa-light fa-people-roof"></i>
                    </div>
                    <div class="service-content">
                        <p>Customized solutions to foster a culture of transparency, accountability, and employee well-being.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

	<!-- services-section end -->

	<!-- why-us-section start -->
	<section class="why-us-section-2 p-t-100 p-t-xs-80 m-b-80 m-b-md-180 m-b-xs-0 p-b-5 p-b-xs-80">
    <div class="container">
        <div class="row align-items-center p-b-80">
            <div class="col-xl-6">
                <div class="thumb px-lg-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="thumb-1">
                        <img alt="thumb-1" src="{{ asset('assets/images/area/image-1.webp') }}">
                        <div class="s-shape"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-14.webp') }}"></div>
                    </div>
                    <div class="thumb-2"><img alt="thumb-2" src="{{ asset('assets/images/area/image-2.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb">
                            <img alt="thumb-3" src="{{ asset('assets/images/area/image-3.webp') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle">
                         <span>Who We Are</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Why Choose <span class="green">Ethics<span class="golden">4</span>Work</span></h2>
                    </div>
                    <div class="text">
                        <p>We help organizations build a culture of integrity, transparency, and accountability. Our solutions empower leaders and employees to make ethically sound decisions, minimize risks, and foster a trustworthy workplace.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Customized Ethics Programs</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Compliance & Risk Management</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Trusted Advisory Services</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Employee Engagement</p>
                            </div>
                        </div>
                    </div>
                    <div class="annual-donation-wrap">
                        <div class="blog-btn">
                            <a class='e-primary-btn has-icon' href="{{ url('about-us') }}">Explore More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="why-us-section-2-bg">
        <div class="left-img"><img alt="bg" src="{{ asset('assets/img/bg/who-we-are-bg.webp') }}"></div>
        <div class="right-img"><img alt="bg" src="{{ asset('assets/img/bg/why-us-bg.webp') }}"></div>
    </div>
</section>

	<!-- why-us-section end -->

	<!-- dust-recycling-section start -->
<section class="dust-recycling-section" style="background-image: url(assets/images/area/big1.webp)">
    <div class="container">
        <div class="row justify-content-center align-items-xl-start align-items-center">
            <div class="col-lg-10 col-12 order-2 order-lg-1">
                <div class="dust-recycle-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="dust-recycle-top">
                        <h5>Workplace Impact</h5>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Expert Ethical Guidance</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Compliance Solutions 24/7</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Ethics Compliance Module</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Employee Engagement</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 order-1 order-lg-2 m-b-md-60 m-b-xs-60" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
            </div>
        </div>
    </div>
</section>

	<!-- dust-recycling-section end -->

	<!-- our-camping-section-2 start -->
	<section class="our-camping-section-2 p-t-120 p-t-md-100 p-b-100 p-t-xs-80 p-b-xs-80">
    <div class="container">
        <div class="row m-b-50 m-b-xs-40">
            <div class="col-xl-12">
                <div class="text-center">
                    <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                         <span>Research & Publications</span>
                    </div>
                    <div class="common-title mb-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Insights for Ethical Workplace Practices</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="camping-slider-active-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="camping-card-2">
                                <div class="thumb">
                                    <a href='#'><img alt="thumb-2" src="{{ asset('assets/images/area/img4.webp') }}"></a>
                                    <div class="date">
                                        <i class="fa-regular fa-clock"></i> <span>Coming Soon</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="donation-wrap">
                                        <div class="content-top">
                                            <div class="title">
                                                <h3><a href='#'>Ethical Leadership in Modern Workplaces</a></h3>
                                            </div>
                                        </div>
                                        <div class="d-top">
                                            <p>Report Complete</p>
                                            <p>85%</p>
                                        </div>
                                        <div aria-label="Progress" aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" class="progress" role="progressbar">
                                            <div class="progress-bar" style="width: 85%"></div>
                                        </div>
                                        <div class="fund">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="camping-card-2">
                                <div class="thumb">
                                    <a href='#'><img alt="thumb-2" src="{{ asset('assets/images/area/img3.webp') }}"></a>
                                    <div class="date">
                                        <i class="fa-regular fa-clock"></i> <span>Coming Soon</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="donation-wrap">
                                        <div class="content-top">
                                            <div class="title">
                                                <h3><a href='#'>Building a Culture of Transparency</a></h3>
                                            </div>
                                        </div>
                                        <div class="d-top">
                                            <p>Report Complete</p>
                                            <p>78%</p>
                                        </div>
                                        <div aria-label="Progress" aria-valuemax="100" aria-valuemin="0" aria-valuenow="78" class="progress" role="progressbar">
                                            <div class="progress-bar" style="width: 78%"></div>
                                        </div>
                                        <div class="fund">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="camping-card-2">
                                <div class="thumb">
                                    <a href='#'><img alt="thumb-2" src="{{ asset('assets/images/area/img2.webp') }}"></a>
                                    <div class="date">
                                        <i class="fa-regular fa-clock"></i> <span>Coming Soon</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="donation-wrap">
                                        <div class="content-top">
                                            <div class="title">
                                                <h3><a href='#'>Workplace Ethics & Compliance Guidelines</a></h3>
                                            </div>
                                        </div>
                                        <div class="d-top">
                                            <p>Report Complete</p>
                                            <p>90%</p>
                                        </div>
                                        <div aria-label="Progress" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" class="progress" role="progressbar">
                                            <div class="progress-bar" style="width: 90%"></div>
                                        </div>
                                        <div class="fund">
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
</section>

	<!-- our-camping-section-2 end -->

	<!-- completed-project-2 start -->
	<section class="completed-project-2 m-b-120 m-b-xs-100 m-b-xs-80">
    <div class="container text-center m-b-50 m-b-xs-40">
        <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <span>Case Studies</span>
        </div>
        <div class="common-title" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
            <h2>Explore Our Workplace Ethics Initiatives</h2>
        </div>
    </div>
    <div class="completed-project-slider-active-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <img alt="thumb-12" src="{{ asset('assets/images/area/study2.webp') }}">
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Ethical Leadership Program</h5>
                                <p>Implemented a corporate ethics training program improving decision-making integrity.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <img alt="thumb-11" src="{{ asset('assets/images/area/study1.webp') }}">
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Transparency in Reporting</h5>
                                <p>Guided organizations to adopt transparent reporting and compliance processes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <img alt="thumb-13" src="{{ asset('assets/images/area/study3.webp') }}">
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Whistleblower Protection</h5>
                                <p>Developed programs ensuring safe and anonymous reporting of workplace issues.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <img alt="thumb-11" src="{{ asset('assets/images/area/study4.webp') }}">
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Inclusive Workplace Initiative</h5>
                                <p>Launched initiatives promoting equality, diversity, and ethical work culture.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="completed-project-pagination-2"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-1"><img alt="shape" src="{{ asset('assets/img/shapes/shape-53.webp') }}"></div>
    <div class="shape-2"><img alt="shape" src="{{ asset('assets/img/shapes/shape-52.webp') }}"></div>
</section>


@include('partials.testi2')
@include('partials.faq')

@endsection 