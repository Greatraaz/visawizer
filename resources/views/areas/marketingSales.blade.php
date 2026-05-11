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
    <div class="hero-slide-2" style="background-image: url(assets/images/area/banner4.webp)">
        <div class="bgoverlay"></div>
        <div class="container">
            <div class="hero-content-2">
                <div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
                    <h1>Drive Growth, Engage Customers, and Boost Sales with Us</h1>
                </div>
                <div class="services-2" data-animation="animate__fadeInUp" data-delay="0.4s">
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Proven Marketing Strategies</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Revenue-Driven Sales Solutions</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Customized Growth Plans</p>
                    </div>
                </div>
                <div class="join-us" data-animation="animate__fadeInUp" data-delay="0.5s">
                    <a class='e-primary-btn has-icon' href="{{ url('services') }}">Discover How We Can Help <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
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
                        <h4>Lead Generation</h4><i class="fa-light fa-magnifying-glass"></i>
                    </div>
                    <div class="service-content">
                        <p>We identify and target potential customers to drive high-quality leads and increase conversion rates.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Digital Marketing</h4><i class="fa-light fa-chart-line-up"></i>
                    </div>
                    <div class="service-content">
                        <p>Our team designs campaigns across SEO, social media, and email marketing to maximize brand visibility.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Sales Optimization</h4><i class="fa-light fa-handshake-simple"></i>
                    </div>
                    <div class="service-content">
                        <p>We implement data-driven sales strategies to improve revenue, streamline processes, and enhance client engagement.</p>
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
                        <img alt="thumb-1" src="{{ asset('assets/images/area/image-41.webp') }}">
                        <div class="s-shape"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-14.webp') }}"></div>
                    </div>
                    <div class="thumb-2"><img alt="thumb-2" src="{{ asset('assets/images/area/image-42.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb">
                            <img alt="thumb-3" src="{{ asset('assets/images/area/image-43.webp') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="common-subtitle">
                        <span>Who We Are</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Trusted Partner for Ethical Leadership Responsibility</h2>
                    </div>
                    <div class="text">
                        <p>
                            At <span class="green">Ethics<span class="golden">4</span>Work</span>, we guide organizations in building integrity-driven cultures. We provide expert consultation, compliance training, and actionable ethical frameworks to foster accountability, transparency, and responsible workplace practices across industries.
                        </p>
                    </div>

                    <!-- Key Strengths -->
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Ethics & Compliance Experts</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Certified & Accredited Programs</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Proven Track Record</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Tailored Corporate Solutions</p>
                            </div>
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
	<section class="dust-recycling-section" style="background-image: url(assets/images/area/big4.webp)">
    <div class="container">
        <div class="row justify-content-center align-items-xl-start align-items-center">
            <div class="col-lg-10 col-12 order-2 order-lg-1">
                <div class="dust-recycle-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="dust-recycle-top">
                        <h5>Ethical Sales Performance</h5>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Guidance From Certified Experts</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Real-time Ethical Support</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Ethical Sales Confidence</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Marketing Strategy Accuracy</p>
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
                         
                        <span>Ethical Campaigns</span>
                    </div>
                    <div class="common-title mb-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Purpose-Driven Campaigns That Create Real Impact</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="camping-slider-active-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                    <div class="swiper">
                        <div class="swiper-wrapper">

                            <!-- CARD 1 -->
                            <div class="swiper-slide">
                                <div class="camping-card-2">
                                    <div class="thumb">
                                            <img alt="thumb-2" src="{{ asset('assets/images/area/img4.webp') }}">
                                        <div class="date">
                                            <i class="fa-regular fa-clock"></i> 
                                            <span>Coming Soon</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="donation-wrap">
                                            <div class="content-top">
                                                <div class="title">
                                                    <h3>
                                                        <a href='#'>
                                                            Ethical Sales Transformation 2025
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="d-top">
                                                <p>Goal Progress</p>
                                                <p>72%</p>
                                            </div>
                                            <div class="progress" role="progressbar" 
                                                 aria-valuemin="0" aria-valuemax="100" aria-valuenow="72">
                                                <div class="progress-bar" style="width: 72%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CARD 2 -->
                            <div class="swiper-slide">
                                <div class="camping-card-2">
                                    <div class="thumb">
                                            <img alt="thumb-2" src="{{ asset('assets/images/area/img3.webp') }}">
                                        <div class="date">
                                            <i class="fa-regular fa-clock"></i> 
                                            <span>Coming Soon</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="donation-wrap">
                                            <div class="content-top">
                                                <div class="title">
                                                    <h3>
                                                        <a href='#'>
                                                            Responsible Marketing Leadership Initiative
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="d-top">
                                                <p>Goal Progress</p>
                                                <p>88%</p>
                                            </div>
                                            <div class="progress" role="progressbar" 
                                                 aria-valuemin="0" aria-valuemax="100" aria-valuenow="88">
                                                <div class="progress-bar" style="width: 88%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CARD 3 -->
                            <div class="swiper-slide">
                                <div class="camping-card-2">
                                    <div class="thumb">
                                            <img alt="thumb-2" src="{{ asset('assets/images/area/img2.webp') }}">
                                        <div class="date">
                                            <i class="fa-regular fa-clock"></i> 
                                            <span>Coming Soon</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="donation-wrap">
                                            <div class="content-top">
                                                <div class="title">
                                                    <h3>
                                                        <a href='#'>
                                                            Sales Ethics & Transparency Awareness Drive
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="d-top">
                                                <p>Goal Progress</p>
                                                <p>64%</p>
                                            </div>
                                            <div class="progress" role="progressbar" 
                                                 aria-valuemin="0" aria-valuemax="100" aria-valuenow="64">
                                                <div class="progress-bar" style="width: 64%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CARD 4 -->
                            <div class="swiper-slide">
                                <div class="camping-card-2">
                                    <div class="thumb">
                                            <img alt="thumb-2" src="{{ asset('assets/images/area/img1.webp') }}">
                                        <div class="date">
                                            <i class="fa-regular fa-clock"></i> 
                                            <span>Coming Soon</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="donation-wrap">
                                            <div class="content-top">
                                                <div class="title">
                                                    <h3>
                                                        <a href='#'>
                                                            Marketing Integrity Bootcamp 2025
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="d-top">
                                                <p>Goal Progress</p>
                                                <p>79%</p>
                                            </div>
                                            <div class="progress" role="progressbar" 
                                                 aria-valuemin="0" aria-valuemax="100" aria-valuenow="79">
                                                <div class="progress-bar" style="width: 79%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- swiper-wrapper -->
                    </div> <!-- swiper -->

                    <div class="camping-button-prev-2">
                        <i class="fa-regular fa-arrow-left"></i>
                    </div>
                    <div class="camping-button-next-2">
                        <i class="fa-regular fa-arrow-right"></i>
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
            <span>Completed Projects</span>
        </div>
        <div class="common-title" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
            <h2>Explore Our Proven Marketing & Sales Success Stories</h2>
        </div>
    </div>

    <div class="completed-project-slider-active-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
        <div class="swiper">
            <div class="swiper-wrapper">

                <!-- PROJECT 1 -->
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <a href="#">
                                <img alt="thumb-12" src="{{ asset('assets/images/area/study2.webp') }}">
                            </a>
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Brand Positioning Strategy</h5>
                                <p>Developed an ethical brand framework that strengthened market perception while ensuring transparent value communication.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PROJECT 2 -->
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <a href="#">
                                <img alt="thumb-11" src="{{ asset('assets/images/area/study1.webp') }}">
                            </a>
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Sales Transformation Program</h5>
                                <p>Executed a value-led sales redesign, improving conversions through ethical persuasion, clarity, and customer trust-building.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PROJECT 3 -->
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <a href="#">
                                <img alt="thumb-13" src="{{ asset('assets/images/area/study3.webp') }}">
                            </a>
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Campaign Management</h5>
                                <p>Designed and executed a multi-channel marketing campaign rooted in truth, transparency, and audience-first engagement.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PROJECT 4 -->
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <a href="#">
                                <img alt="thumb-11" src="{{ asset('assets/images/area/study4.webp') }}">
                            </a>
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Customer Journey Optimization</h5>
                                <p>Enhanced end-to-end customer experience by creating seamless, ethical, and meaningful touchpoints across the buying funnel.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- swiper-wrapper -->
        </div> <!-- swiper -->

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="completed-project-pagination-2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape-1">
        <img alt="shape" src="{{ asset('assets/img/shapes/shape-53.webp') }}">
    </div>
    <div class="shape-2">
        <img alt="shape" src="{{ asset('assets/img/shapes/shape-52.webp') }}">
    </div>
</section>
    
    @include('partials.testi2')
	<!-- faq-section start -->
	<section class="faq-section p-t-xs-140 p-b-120 p-b-md-100 p-b-xs-80" style="background-image: url(assets/img/bg/why-us-bg.webp)">
    <div class="container">
        <div class="row faq">

            <!-- FAQ Left Column -->
            <div class="col-xl-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="accordion faq-accordion" id="accordionFlushExample">

                    <!-- Q1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <span class="accordion-title">1.</span>
                                How do I get started with <span class="green">Ethics<span class="golden">4</span>Work</span>?
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Getting started is simple. Schedule a consultation, share your current challenges, and we’ll help you choose the right ethical marketing, sales, or capability-building program tailored to your business goals.
                            </div>
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <span class="accordion-title">2.</span>
                                What fees do you charge?
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Our pricing depends on the program scope—strategy consulting, learning interventions, behaviour transformation courses, or organisation-wide capability enhancement. All fees are transparent and aligned with ethical business practices.
                            </div>
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="true" aria-controls="flush-collapseThree">
                                <span class="accordion-title">3.</span>
                                Who are your programs designed for?
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                We work with CXOs, sales teams, marketing teams, founders, HR heads, L&amp;D heads, and organisations seeking responsible growth. Whether you're scaling up or realigning your ethics culture, our frameworks apply across industries.
                            </div>
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                <span class="accordion-title">4.</span>
                                What outcomes can we expect?
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Expect measurable improvements—clearer sales conversations, ethical marketing communication, stronger internal culture, improved decision-making, and enhanced customer trust leading to sustainable growth.
                            </div>
                        </div>
                    </div>

                    <!-- Q5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                <span class="accordion-title">5.</span>
                                Can these programs integrate with our existing systems?
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Yes. All our frameworks are designed to align with your current workflows, CRM tools, marketing systems, HR processes, and L&amp;D infrastructure—ensuring smooth adoption without disruption.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Column -->
            <div class="col-xl-5" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="common-subtitle">
                    
                    <span>Question &amp; Answer</span>
                </div>

                <div class="common-title text-start">
                    <h2>Frequently Asked Questions <span>?</span></h2>
                </div>

                <div class="text">
                    <p>
                        Here are the most common queries leaders ask us before beginning their ethical transformation journey. 
                        If you need clarity, our team is always ready to guide you.
                    </p>
                </div>

                <div class="blog-btn">
                    <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">
                        Have More Questions? 
                        <span class="icon-wrap"><span class="icon">
                            <i class="fa-regular fa-arrow-right"></i>
                            <i class="fa-regular fa-arrow-right"></i>
                        </span></span>
                    </a>
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