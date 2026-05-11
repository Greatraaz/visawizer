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
    <div class="hero-slide-2" style="background-image: url(assets/images/area/banner7.webp)">
        <div class="bgoverlay"></div>
        <div class="container">
            <div class="hero-content-2">
                <div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
                    <h1>Leading Ethical Finance for a Sustainable Future</h1>
                </div>
                <div class="services-2" data-animation="animate__fadeInUp" data-delay="0.4s">
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Trusted Guidance in Corporate Finance Ethics</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Integrating Integrity Across Financial Decisions</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Customized Advisory for Responsible Investing</p>
                    </div>
                </div>
                <div class="join-us" data-animation="animate__fadeInUp" data-delay="0.5s">
                    <a class='e-primary-btn has-icon' href="{{ url('services') }}">
                        Explore Financial Ethics Programs 
                        <span class="icon-wrap">
                            <span class="icon">
                                <i class="fa-regular fa-arrow-right"></i> 
                                <i class="fa-regular fa-arrow-right"></i>
                            </span>
                        </span>
                    </a>
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
                        <h4>Ethical Investment Advisory</h4>
                        <i class="fa-light fa-hand-holding-dollar"></i>
                    </div>
                    <div class="service-content">
                        <p>Guiding organizations and investors to make responsible financial decisions that align with ESG principles and long-term sustainability.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Corporate Finance<br> Ethics</h4>
                        <i class="fa-light fa-scale-balanced"></i>
                    </div>
                    <div class="service-content">
                        <p>Helping companies integrate integrity, transparency, and accountability into corporate governance, reporting, and financial decision-making.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Risk & Compliance Management</h4>
                        <i class="fa-light fa-shield-check"></i>
                    </div>
                    <div class="service-content">
                        <p>Providing frameworks and tools to identify ethical risks, ensure regulatory compliance, and maintain stakeholder trust in all financial operations.</p>
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
                        <img alt="thumb-1" src="{{ asset('assets/images/area/image-71.webp') }}">
                        <div class="s-shape"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-14.webp') }}"></div>
                    </div>
                    <div class="thumb-2"><img alt="thumb-2" src="{{ asset('assets/images/area/image-72.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb">
                            <img alt="thumb-3" src="{{ asset('assets/images/area/image-73.webp') }}">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-6">
                <div class="why-us-content" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle">
                         <span>Why Choose <span class="green">Ethics<span class="golden">4</span>Work</span></span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Trusted Leaders in Ethical Finance</h2>
                    </div>
                    <div class="text">
                        <p>We empower organizations and financial professionals to navigate complex ethical dilemmas, integrate integrity into decision-making, and drive sustainable, responsible business outcomes.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Specialized in Corporate Finance Ethics</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Certified & Experienced Advisors</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Proven Track Record of Client Success</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Customized Ethical Solutions</p>
                            </div>
                        </div>
                    </div>
                    <div class="annual-donation-wrap">
                        <div class="blog-btn">
                            <a class='e-primary-btn has-icon' href="{{ url('services') }}">Explore Our Solutions 
                                <span class="icon-wrap">
                                    <span class="icon">
                                        <i class="fa-regular fa-arrow-right"></i> 
                                        <i class="fa-regular fa-arrow-right"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- company-achievements start -->
        <div class="company-achievements" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <div class="achievement">
                <i class="fa-light fa-chart-mixed"></i>
                <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="95">0</span>%</h2>
                <p>Client Success Rate</p>
            </div>
            <div class="achievement">
                <i class="fa-light fa-lightbulb-exclamation-on"></i>
                <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="350">0</span>+</h2>
                <p>Ethical Finance Strategies Implemented</p>
            </div>
            <div class="achievement">
                <i class="fa-light fa-thumbs-up"></i>
                <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="120">0</span>+</h2>
                <p>Organizations Advised</p>
            </div>
            <div class="achievement">
                <i class="fa-light fa-users-medical"></i>
                <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="40">0</span>+</h2>
                <p>Experienced Finance Ethics Experts</p>
            </div>
        </div><!-- company-achievements end -->
    </div>
    <div class="why-us-section-2-bg">
        <div class="left-img"><img alt="bg" src="{{ asset('assets/img/bg/who-we-are-bg.webp') }}"></div>
        <div class="right-img"><img alt="bg" src="{{ asset('assets/img/bg/why-us-bg.webp') }}"></div>
    </div>
</section>

	<!-- why-us-section end -->

	<!-- dust-recycling-section start -->
<section class="dust-recycling-section" style="background-image: url(assets/images/area/big7.webp)">
    <div class="container">
        <div class="row justify-content-center align-items-xl-start align-items-center">
            
            <div class="col-lg-10 col-12 order-2 order-lg-1">
                <div class="dust-recycle-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="dust-recycle-top">
                        <h5>Ethical Finance Leadership Program</h5>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Guided by Experienced Finance Ethics Experts</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Practical Tools & Frameworks for Decision-Making</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Participant Satisfaction</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Community Growth Factor</p>
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

	<!-- completed-project-2 start -->
	<section class="completed-project-2 m-t-80 m-b-xs-100 m-b-xs-80">
    <div class="container text-center m-b-50 m-b-xs-40">
        <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <span>Completed Projects</span>
        </div>
        <div class="common-title" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
            <h2>Successful Ethical Finance Engagements</h2>
        </div>
    </div>
    <div class="completed-project-slider-active-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
        <div class="swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <img alt="thumb-12" src="{{ asset('assets/images/area/study1.webp') }}">
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Corporate Finance Ethics Integration</h5>
                                <p>Implemented ethics frameworks for a leading financial services firm, improving transparency and governance.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <img alt="thumb-11" src="{{ asset('assets/images/area/study2.webp') }}">
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Responsible Investment Advisory</h5>
                                <p>Guided a mid-sized investment firm in aligning their portfolio with ESG and sustainable finance principles.</p>
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
                                <h5>Ethical Finance Training Programs</h5>
                                <p>Conducted workshops for corporate leaders on ethical decision-making in finance, compliance, and governance.</p>
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
                                <h5>Financial Risk & Compliance Audit</h5>
                                <p>Assisted a banking client in reviewing internal compliance and risk management practices for integrity and transparency.</p>
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

	<!-- faq-section start -->
	<section class="faq-section p-t-xs-140 p-b-120 p-b-md-100 p-b-xs-80" style="background-image: url(assets/img/bg/why-us-bg.webp)">
    <div class="container">
        <div class="row faq">
            
            <div class="col-xl-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="accordion faq-accordion" id="accordionFlushExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <span class="accordion-title">1.</span>How do I enroll in a program? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                You can enroll online by selecting a program, submitting an Expression of Interest (EOI), and completing the registration and payment process through our secure portal.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <span class="accordion-title">2.</span>What are the fees for programs? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Fees vary depending on the program. You can view detailed pricing during registration, including any applicable GST or discounts for early enrollment.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="true" aria-controls="flush-collapseThree">
                                <span class="accordion-title">3.</span>Who can participate in Finance Ethics programs? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Programs are designed for finance professionals, corporate leaders, ESG and compliance officers, and students pursuing business, management, or law.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                <span class="accordion-title">4.</span>Are certificates provided? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Yes, participants receive accredited certificates upon completion of eligible programs, workshops, and assessments.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                <span class="accordion-title">5.</span>How do I connect with an expert? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                You can connect with our Finance Ethics experts through the “Connect With an Expert” page, or during scheduled advisory sessions and workshops.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-5" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="common-subtitle">
                     <span>Question & Answer</span>
                </div>
                <div class="common-title text-start">
                    <h2>Frequently Asked Questions <span>?</span></h2>
                </div>
                <div class="text">
                    <p>Find answers to common queries about our Finance Ethics programs, registration, certifications, and connecting with experts.</p>
                </div>
                <div class="blog-btn">
                    <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">Have More Questions? <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                </div>
                <div class="top-right">
                    <img alt="authors" src="{{ asset('assets/images/area/faq.webp') }}">
                    <div class="people-joined">
                        <h5>500+</h5><span>Positive Feedback</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

	<!-- faq-section end -->
@endsection 