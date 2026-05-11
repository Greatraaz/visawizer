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
    <div class="hero-slide-2" style="background-image: url(assets/images/area/banner5.webp)">
        <div class="bgoverlay"></div>
        <div class="container">
            <div class="hero-content-2">
                <div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
                    <h1>Driving Integrity and Accountability at the Heart of Corporate Governance</h1>
                </div>
                <div class="services-2" data-animation="animate__fadeInUp" data-delay="0.4s">
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Promoting Ethical Leadership</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Fostering Transparency & Compliance</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Embedding Accountability Across Boards</p>
                    </div>
                </div>
                <div class="join-us" data-animation="animate__fadeInUp" data-delay="0.5s">
                    <a class='e-primary-btn has-icon' href="{{ url('about-us') }}">
                        Learn How We Guide Organizations
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
                        <h4>Ethical Leadership</h4><i class="fa-light fa-chess-queen"></i>
                    </div>
                    <div class="service-content">
                        <p>Empowering leaders to make decisions rooted in integrity, transparency, and moral courage, shaping responsible corporate cultures.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Board Accountability</h4><i class="fa-light fa-gavel"></i>
                    </div>
                    <div class="service-content">
                        <p>We ethicaly strengthening governance structures to ensure oversight, compliance, and clarity of responsibilities at every level of the board.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Stakeholder Engagement</h4><i class="fa-light fa-handshake"></i>
                    </div>
                    <div class="service-content">
                        <p>Promoting transparent communication and inclusive decision-making to balance the interests of shareholders, employees, and society.</p>
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
                        <img alt="thumb-1" src="{{ asset('assets/images/area/image-51.webp') }}">
                        <div class="s-shape"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-14.webp') }}"></div>
                    </div>
                    <div class="thumb-2"><img alt="thumb-2" src="{{ asset('assets/images/area/image-52.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb">
                            <img alt="thumb-3" src="{{ asset('assets/images/area/image-53.webp') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle">
                         <span>Corporate Governance</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Why Organizations Trust Our Governance Expertise</h2>
                    </div>
                    <div class="text">
                        <p>We help organizations build robust governance frameworks that promote transparency, accountability, and ethical decision-making across all levels of leadership and management.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Ethics-Driven Leadership</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Transparent Governance Practices</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Stakeholder Accountability</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Compliance & Risk Oversight</p>
                            </div>
                        </div>
                    </div>
                    <div class="annual-donation-wrap">
                        <div class="blog-btn">
                            <a class='e-primary-btn has-icon' href="{{ url('about-us') }}">Explore Our Approach 
                                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
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
                <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="98">0</span>%</h2>
                <p>Client Satisfaction</p>
            </div>
            <div class="achievement">
                <i class="fa-light fa-lightbulb-exclamation-on"></i>
                <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="565">0</span>+</h2>
                <p>Governance Projects Guided</p>
            </div>
            <div class="achievement">
                <i class="fa-light fa-thumbs-up"></i>
                <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="36.2">0</span>k</h2>
                <p>Ethical Decisions Enabled</p>
            </div>
            <div class="achievement">
                <i class="fa-light fa-users-medical"></i>
                <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="100">0</span>+</h2>
                <p>Expert Consultants</p>
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
<section class="dust-recycling-section" style="background-image: url(assets/images/area/big5.webp)">
    <div class="container">
        <div class="row justify-content-center align-items-xl-start align-items-center">
            <div class="col-lg-10 col-12 order-2 order-lg-1">
                <div class="dust-recycle-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="dust-recycle-top">
                        <h5>Corporate Governance Process</h5>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Establish Ethical Frameworks</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Implement Compliance & Oversight</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Governance Implementation</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Stakeholder Engagement</p>
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
	<section class="completed-project-2 m-b-120 m-b-xs-100 m-b-xs-80 m-t-80">
    <div class="container text-center m-b-50 m-b-xs-40">
        <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <span>Our Initiatives</span>
        </div>
        <div class="common-title" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
            <h2>Case Studies in Strengthening Corporate Governance</h2>
        </div>
    </div>
    <div class="completed-project-slider-active-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
        <div class="swiper">
            <div class="swiper-wrapper">

                <!-- Case Study 1 -->
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <a href='#'><img alt="thumb-12" src="{{ asset('assets/images/area/study2.webp') }}"></a>
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Board Ethics Implementation</h5>
                                <p>Guided a multinational company to establish a robust ethics framework at the board level.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <a href='#'><img alt="thumb-11" src="{{ asset('assets/images/area/study1.webp') }}"></a>
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Compliance & Risk Oversight</h5>
                                <p>Implemented transparent compliance and risk management mechanisms across operations.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3 -->
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <a href='#'><img alt="thumb-13" src="{{ asset('assets/images/area/study3.webp') }}"></a>
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Ethical Culture Transformation</h5>
                                <p>Worked with leadership teams to embed ethical decision-making in organizational culture.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 4 -->
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <a href='#'><img alt="thumb-11" src="{{ asset('assets/images/area/study4.webp') }}"></a>
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Stakeholder Engagement</h5>
                                <p>Developed mechanisms for inclusive decision-making to balance societal interests.</p>
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
	<section class="faq-section p-t-xs-140 p-b-120 p-b-md-100 p-b-xs-80" style="background-image: url(assets/img/bg/why-us-bg.webp)">
    <div class="container">
        <div class="row faq">
            <div class="col-xl-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="accordion faq-accordion" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseOne" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseOne" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">1.</span> How do I start implementing corporate governance in my organization?
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseOne">
                            <div class="accordion-body">
                                Begin by assessing your current governance structures, establishing ethical leadership principles, and defining roles and responsibilities at board and management levels.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseTwo" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseTwo" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">2.</span> What services does Ethics4Work provide for governance enhancement?
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseTwo">
                            <div class="accordion-body">
                                We provide advisory on board ethics, compliance frameworks, stakeholder engagement, ethical culture transformation, and customized leadership training programs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseThree" aria-expanded="true" class="accordion-button" data-bs-target="#flush-collapseThree" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">3.</span> Who should be involved in governance training?
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample" id="flush-collapseThree">
                            <div class="accordion-body">
                                Senior leaders, board members, compliance officers, HR and operations managers, and anyone responsible for decision-making and ethical oversight should participate.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseFour" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseFour" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">4.</span> How do you measure the effectiveness of governance programs?
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseFour">
                            <div class="accordion-body">
                                Through audits, stakeholder feedback, compliance metrics, board performance evaluations, and monitoring the integration of ethical practices in daily operations.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseFive" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseFive" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">5.</span> How can organizations sustain ethical practices long-term?
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseFive">
                            <div class="accordion-body">
                                By embedding ethics into corporate policies, training employees continuously, establishing oversight mechanisms, and fostering a culture of accountability and transparency.
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
                    <p>Explore practical answers on implementing corporate governance, enhancing board accountability, and embedding ethical decision-making in your organization.</p>
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