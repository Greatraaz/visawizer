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
    <div class="hero-slide-2" style="background-image: url(assets/images/area/banner8.webp)">
        <div class="bgoverlay"></div>
        <div class="container">
            <div class="hero-content-2">
                <div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
                    <h1>Empowering Ethical Journalism for a Trusted Media</h1>
                </div>
                <div class="services-2" data-animation="animate__fadeInUp" data-delay="0.4s">
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Guiding Responsible Reporting Practices</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Trusted by Media Professionals Globally</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Customized Ethics Programs & Workshops</p>
                    </div>
                </div>
                <div class="join-us" data-animation="animate__fadeInUp" data-delay="0.5s">
                    <a class='e-primary-btn has-icon' href="{{ url('services') }}">
                        Explore Media Ethics Programs 
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
                        <h4>Ethical Reporting Workshops</h4>
                        <i class="fa-light fa-newspaper"></i>
                    </div>
                    <div class="service-content">
                        <p>Interactive workshops designed to train journalists in responsible reporting, fact-checking, and upholding media integrity.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Strategic Media Ethics Support</h4>
                        <i class="fa-light fa-shield-check"></i>
                    </div>
                    <div class="service-content">
                        <p>Consultancy for media houses to implement codes of ethics, develop policies, and navigate ethical dilemmas.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Investigative Journalism Training</h4>
                        <i class="fa-light fa-magnifying-glass"></i>
                    </div>
                    <div class="service-content">
                        <p>Programs aimed at equipping journalists with investigative skills while adhering to ethical and legal standards in reporting.</p>
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
                        <img alt="thumb-1" src="{{ asset('assets/images/area/image-81.webp') }}">
                        <div class="s-shape"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-14.webp') }}"></div>
                    </div>
                    <div class="thumb-2"><img alt="thumb-2" src="{{ asset('assets/images/area/image-82.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb">
                            <img alt="thumb-3" src="{{ asset('assets/images/area/image-83.webp') }}">
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
                        <h2>Why Choose <span class="green">Ethics<span class="golden">4</span>Work</span>for Media & Journalism?</h2>
                    </div>
                    <div class="text">
                        <p>We empower media professionals and organizations to uphold integrity, implement ethical reporting frameworks, and navigate complex editorial decisions with confidence.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Specialized in Media Ethics</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Trusted by Media Houses & Journalists</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Customized Training Programs</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Practical Guidelines & Advisory</p>
                            </div>
                        </div>
                    </div>
                    <div class="annual-donation-wrap">
                        <div class="blog-btn">
                            <a class='e-primary-btn has-icon' href="{{ url('courses') }}">Explore Our Course 
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

    </div>
    <div class="why-us-section-2-bg">
        <div class="left-img"><img alt="bg" src="{{ asset('assets/img/bg/who-we-are-bg.webp') }}"></div>
        <div class="right-img"><img alt="bg" src="{{ asset('assets/img/bg/why-us-bg.webp') }}"></div>
    </div>
</section>

	<!-- why-us-section end -->

	<!-- dust-recycling-section start -->
	<section class="dust-recycling-section" style="background-image: url(assets/images/area/big8.webp)">
    <div class="container">
        <div class="row justify-content-center align-items-xl-start align-items-center">
            
            <div class="col-lg-10 col-12 order-2 order-lg-1">
                <div class="dust-recycle-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="dust-recycle-top">
                        <h5>Investigative Journalism Ethics Program</h5>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Guided by Media Ethics Experts</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Practical Skills & Ethical Frameworks</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Participants Training Module</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Program Completion Growth</p>
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
	<section class="completed-project-2 m-t-80 m-b-80">
    <div class="container text-center m-b-50 m-b-xs-40">
        <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <span>Completed Programs</span>
        </div>
        <div class="common-title" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
            <h2>Explore Our Successful Media Ethics Initiatives</h2>
        </div>
    </div>
    <div class="completed-project-slider-active-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
        <div class="swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <img alt="thumb-12" src="{{ asset('assets/images/area/study2.webp') }}">
                            <div class="details-btn-2"><i class="fa-regular fa-arrow-right-long"></i></div>
                            <div class="content">
                                <h5>Investigative Journalism Ethics Workshop</h5>
                                <p>Trained 50 journalists on responsible reporting and fact-checking, resulting in 95% successful project completions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <img alt="thumb-11" src="{{ asset('assets/images/area/study1.webp') }}">
                            <div class="details-btn-2"><i class="fa-regular fa-arrow-right-long"></i></div>
                            <div class="content">
                                <h5>Responsible Reporting Bootcamp</h5>
                                <p>Delivered practical training to 35 journalists, improving editorial quality and ethical adherence in daily reporting.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <img alt="thumb-13" src="{{ asset('assets/images/area/study3.webp') }}">
                            <div class="details-btn-2"><i class="fa-regular fa-arrow-right-long"></i></div>
                            <div class="content">
                                <h5>Media Ethics Certification Program</h5>
                                <p>Certified 60+ journalists, enhancing accountability and trust in media reporting across multiple organizations.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <img alt="thumb-11" src="{{ asset('assets/images/area/study4.webp') }}">
                            <div class="details-btn-2"><i class="fa-regular fa-arrow-right-long"></i></div>
                            <div class="content">
                                <h5>Ethical Reporting Case<br> Studies</h5>
                                <p>Reviewed and guided 40 media projects with real-world ethical interventions, improving adherence to industry standards.</p>
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
	<section class="faq-section p-b-120 p-b-md-100 p-b-xs-80" style="background-image: url(assets/img/bg/why-us-bg.webp)">
    <div class="container">
        <div class="row faq">
            <div class="col-xl-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="accordion faq-accordion" id="accordionFlushExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseOne" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseOne" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">1.</span>How do I enroll in a program? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseOne">
                            <div class="accordion-body">
                                You can enroll online by selecting your program, filling the registration form, and submitting payment or application details. Confirmation and instructions will be emailed.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseTwo" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseTwo" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">2.</span>What are the program fees? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseTwo">
                            <div class="accordion-body">
                                Fees depend on program type and duration. Please check the program details page for exact pricing, early-bird offers, and scholarship opportunities.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseThree" aria-expanded="false" class="accordion-button" data-bs-target="#flush-collapseThree" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">3.</span>Are the programs online or in-person? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample" id="flush-collapseThree">
                            <div class="accordion-body">
                                Programs are offered both online and in-person to accommodate media professionals worldwide. Some workshops also provide hybrid options.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseFour" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseFour" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">4.</span>Do participants receive a certificate? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseFour">
                            <div class="accordion-body">
                                Yes. Successful participants receive a **Media Ethics and Responsible Journalism Certificate**, recognized by industry partners.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseFive" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseFive" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">5.</span>Who can join these programs? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseFive">
                            <div class="accordion-body">
                                Programs are designed for journalists, media students, and professionals seeking to improve ethical reporting, investigative journalism skills, and responsible media practices.
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
                    <p>Have questions about our media ethics programs or enrollment process? Explore the answers above or contact our team for guidance and support.</p>
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