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
    <div class="hero-slide-2" style="background-image: url(assets/images/area/banner6.webp)">
        <div class="bgoverlay"></div>
        <div class="container">
            <div class="hero-content-2">
                <div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
                    <h1>Building Transparent & Ethical Supply Chains for Responsible Businesses</h1>
                </div>
                <div class="services-2" data-animation="animate__fadeInUp" data-delay="0.4s">
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Ensuring Supplier Compliance</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Embedding Ethics in Operations</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Driving Accountability & Transparency</p>
                    </div>
                </div>
                <div class="join-us" data-animation="animate__fadeInUp" data-delay="0.5s">
                    <a class='e-primary-btn has-icon' href="{{ url('about-us') }}">
                        Explore Our Supply Chain Solutions
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
                        <h4>Responsible Sourcing</h4><i class="fa-light fa-hand-holding-droplet"></i>
                    </div>
                    <div class="service-content">
                        <p>We help organizations build ethical sourcing frameworks, ensuring suppliers meet environmental standards.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Supply Chain Management</h4><i class="fa-light fa-recycle"></i>
                    </div>
                    <div class="service-content">
                        <p>Identify and mitigate ethical, operational, and compliance risks across your supply chain through structured assessments.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Supplier Engagement</h4><i class="fa-light fa-trees"></i>
                    </div>
                    <div class="service-content">
                        <p>Strengthen supplier transparency and accountability with regular audits, reviews, and corrective action plans.</p>
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
                        <img alt="thumb-1" src="{{ asset('assets/images/area/image-61.webp') }}">
                        <div class="s-shape"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-14.webp') }}"></div>
                    </div>
                    <div class="thumb-2"><img alt="thumb-2" src="{{ asset('assets/images/area/image-62.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb">
                            <img alt="thumb-3" src="{{ asset('assets/images/area/image-63.webp') }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="why-us-content" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle">
                         
                        <span>Your Supply Chain Advisory Partner</span>
                    </div>

                    <div class="common-title text-start">
                        <h2>Why Organizations Trust Our Supply Chain Expertise</h2>
                    </div>

                    <div class="text">
                        <p>
                            We help enterprises design, assess, and optimize ethical and sustainable supply chain frameworks.
                            From supplier audits to risk assessment and transparency tools, we ensure your operations remain compliant,
                            resilient, and responsible at every stage.
                        </p>
                    </div>

                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Ethical Sourcing Frameworks</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>End-to-End Process Transparency</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Supplier Audit & Compliance</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Continuous Risk Monitoring</p>
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
<section class="dust-recycling-section" style="background-image: url(assets/images/area/big6.webp)">
    <div class="container">
        <div class="row justify-content-center align-items-xl-start align-items-center">
            <div class="col-lg-10 col-12 order-2 order-lg-1">
                <div class="dust-recycle-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="dust-recycle-top">
                        <h5>Supply Chain  Insights</h5>

                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Work With Certified Supply Chain Experts</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Rapid Compliance Support Anytime</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Supplier Compliance Alignment</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Traceability Implementation Success</p>
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

<section class="faq-section p-t-xs-140 p-b-120 p-b-md-100 p-b-xs-80 m-t-80" style="background-image: url(assets/img/bg/why-us-bg.webp)">
    <div class="container">
        <div class="row faq">
            <div class="col-xl-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="accordion faq-accordion" id="accordionFlushExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <span class="accordion-title">1.</span>
                                How do we begin improving our supply chain compliance?
                                <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                You start with a structured supply chain assessment. We review your sourcing practices, risk exposure, supplier documentation, and compliance maturity to build a customised action roadmap.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <span class="accordion-title">2.</span>
                                What are the typical costs involved?
                                <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Fees depend on project scope—such as audits, training, due diligence, traceability programs, or compliance implementation. We provide transparent, modular pricing so you pay only for what you need.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="true" aria-controls="flush-collapseThree">
                                <span class="accordion-title">3.</span>
                                Which industries do you support?
                                <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                We work across manufacturing, retail, food & agriculture, logistics, automotive, textiles, and service-based supply chains—supporting both global enterprises and mid-sized organisations.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                <span class="accordion-title">4.</span>
                                What compliance areas do you measure?
                                <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                We evaluate labour compliance, ESG standards, ethical sourcing, supplier governance, documentation integrity, operational risks, and global regulatory alignment across your supply chain.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                <span class="accordion-title">5.</span>
                                How do you ensure secure handling of supplier data?
                                <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                All supplier documents and compliance files are handled using encrypted systems, restricted access workflows, and industry-standard data protection protocols to ensure complete confidentiality.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Content -->
            <div class="col-xl-5" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="common-subtitle">
                    
                    <span>Question & Answer</span>
                </div>
                <div class="common-title text-start">
                    <h2>Frequently Asked Questions <span>?</span></h2>
                </div>
                <div class="text">
                    <p>
                        Here are the most common queries we receive from organisations working to improve the transparency, governance, and compliance of their global supply chains.
                    </p>
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