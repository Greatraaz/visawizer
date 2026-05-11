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
    <div class="hero-slide-2" style="background-image: url(assets/images/area/banner2.webp)">
        <div class="bgoverlay"></div>
        <div class="container">
            <div class="hero-content-2">
                <div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
                    <h1>Unlock the Future with AI-Powered Solutions</h1>
                </div>
                <div class="services-2" data-animation="animate__fadeInUp" data-delay="0.4s">
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>AI & Machine Learning Expertise</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Data-Driven Decision Making</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Custom AI Solutions for Your Needs</p>
                    </div>
                </div>
                <div class="join-us" data-animation="animate__fadeInUp" data-delay="0.5s">
                    <a class='e-primary-btn has-icon' href="{{ url('service') }}">Explore Our Solutions <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
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
                        <h4>AI-Powered Analytics</h4><i class="fa-light fa-brain"></i>
                    </div>
                    <div class="service-content">
                        <p>Leverage advanced AI models to gain actionable insights from workplace data, improving decision-making and efficiency.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Automation & Workflow</h4><i class="fa-light fa-robot"></i>
                    </div>
                    <div class="service-content">
                        <p>Streamline routine tasks and enhance productivity with AI-driven automation tailored for ethical business practices.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Predictive Insights</h4><i class="fa-light fa-chart-line-up"></i>
                    </div>
                    <div class="service-content">
                        <p>Use AI to anticipate trends, monitor employee engagement, and optimize workplace strategies for growth.</p>
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
                        <img alt="thumb-1" src="{{ asset('assets/images/services/image-41.webp') }}">
                        <div class="s-shape"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-14.webp') }}"></div>
                    </div>
                    <div class="thumb-2"><img alt="thumb-2" src="{{ asset('assets/images/services/image-42.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb">
                            <img alt="thumb-3" src="{{ asset('assets/images/services/image-43.webp') }}">
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
                        <h2>Why Choose <span class="green">Ethics<span class="golden">4</span>Work</span>AI Solutions?</h2>
                    </div>
                    <div class="text">
                        <p>We combine cutting-edge AI technology with ethical workplace practices to optimize performance, ensure compliance, and empower organizations to make data-driven decisions responsibly.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>AI-Powered Insights</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Ethics-First Approach</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Reliable Technology Solutions</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Customizable Workplace Tools</p>
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
<section class="dust-recycling-section" style="background-image: url(assets/images/area/big2.webp)">
    <div class="container">
        <div class="row justify-content-center align-items-xl-start align-items-center">
            <div class="col-lg-10 col-12 order-2 order-lg-1">
                <div class="dust-recycle-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="dust-recycle-top">
                        <h5>AI Capabilities</h5>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Expert AI Solutions</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>24/7 Ethical AI Support</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>AI System Accuracy</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>AI Projects Implementation</p>
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
            <span>Completed AI Projects</span>
        </div>
        <div class="common-title" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
            <h2>Explore Our Successful AI Initiatives</h2>
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
                                <h5>AI Ethics Monitoring</h5>
                                <p>Developed AI systems to monitor workplace ethical compliance and reporting.</p>
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
                                <h5>Predictive Analytics</h5>
                                <p>Implemented predictive AI models to enhance workplace safety and efficiency.</p>
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
                                <h5>Automated Reporting</h5>
                                <p>AI-driven automation for reporting compliance and reducing manual errors.</p>
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
                                <h5>Smart Workflow AI</h5>
                                <p>Integrated AI systems to optimize internal workflows and task allocation.</p>
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
                                <span class="accordion-title">1.</span>How do I start using your AI solutions? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseOne">
                            <div class="accordion-body">
                                Begin by contacting our AI consulting team. We evaluate your requirements and provide a roadmap for seamless AI integration.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseTwo" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseTwo" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">2.</span>What are the costs for AI implementation? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseTwo">
                            <div class="accordion-body">
                                Costs vary based on project scope, complexity, and data requirements. Our team provides a detailed estimate after initial consultation.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseThree" aria-expanded="false" class="accordion-button" data-bs-target="#flush-collapseThree" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">3.</span>Which industries can benefit from your AI solutions? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample" id="flush-collapseThree">
                            <div class="accordion-body">
                                Our AI solutions are designed for healthcare, finance, manufacturing, logistics, and tech-driven businesses seeking efficiency and data-driven decision-making.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseFour" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseFour" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">4.</span>How secure is the data handled by AI? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseFour">
                            <div class="accordion-body">
                                Security is our top priority. All AI implementations comply with industry-standard encryption and data privacy regulations.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseFive" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseFive" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">5.</span>Can your AI solutions integrate with existing systems? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseFive">
                            <div class="accordion-body">
                                Yes, our AI tools are designed for seamless integration with existing software and workflows, ensuring minimal disruption.
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
                    <p>Explore how our AI solutions can transform your business, streamline operations, and unlock actionable insights from your data.</p>
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