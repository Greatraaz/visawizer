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
    <div class="hero-slide-2" style="background-image: url(assets/images/area/banner9.webp)">
        <div class="bgoverlay"></div>
        <div class="container">
            <div class="hero-content-2">
                <div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
                    <h1>Advancing Ethical Insights Through Research & Publications</h1>
                </div>
                <div class="services-2" data-animation="animate__fadeInUp" data-delay="0.4s">
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Evidence-Based Research</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Trusted Industry Publications</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Shaping Policies and Practices</p>
                    </div>
                </div>
                <div class="join-us" data-animation="animate__fadeInUp" data-delay="0.5s">
                    <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">
                        Get in Touch With Us <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
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
                        <h4>Research<br> Reports</h4><i class="fa-light fa-book-open"></i>
                    </div>
                    <div class="service-content">
                        <p>In-depth studies on corporate ethics, workplace conduct, and compliance frameworks, designed to inform leaders and policy makers.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Case<br> Studies</h4><i class="fa-light fa-file-chart-line"></i>
                    </div>
                    <div class="service-content">
                        <p>Practical, real-world analyses of ethical dilemmas and resolutions across industries, providing actionable insights for organizations.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Leadership<br> Articles</h4><i class="fa-light fa-lightbulb"></i>
                    </div>
                    <div class="service-content">
                        <p>Expert commentary and articles on emerging trends in ethics, governance, and corporate social responsibility for knowledge sharing.</p>
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
                        <img alt="thumb-1" src="{{ asset('assets/images/area/image-91.webp') }}">
                        <div class="s-shape"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-14.webp') }}"></div>
                    </div>
                    <div class="thumb-2"><img alt="thumb-2" src="{{ asset('assets/images/area/image-92.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb">
                            <img alt="thumb-3" src="{{ asset('assets/images/area/image-93.webp') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle">
                         <span>Our Expertise</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Why Choose <span class="green">Ethics<span class="golden">4</span>Work</span> for Research & Publications</h2>
                    </div>
                    <div class="text">
                        <p>We provide rigorous, ethically-driven research and publications that inform leaders, shape policies, and advance corporate ethics across sectors.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Comprehensive Research Reports</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Peer-Reviewed Publications</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Actionable Insights for Organizations</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Global Ethical Standards Alignment</p>
                            </div>
                        </div>
                    </div>
                    <div class="annual-donation-wrap">
                        <div class="blog-btn">
                            <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">Contact Us 
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
                <p>Research Accuracy</p>
            </div>
            <div class="achievement">
                <i class="fa-light fa-lightbulb-exclamation-on"></i>
                <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="565">0</span>+</h2>
                <p>Published Articles</p>
            </div>
            <div class="achievement">
                <i class="fa-light fa-thumbs-up"></i>
                <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="36.2">0</span>k</h2>
                <p>Downloads & Citations</p>
            </div>
            <div class="achievement">
                <i class="fa-light fa-users-medical"></i>
                <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="100">0</span>+</h2>
                <p>Expert Contributors</p>
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
<section class="dust-recycling-section" style="background-image: url(assets/images/area/big9.webp)">
    <div class="container">
        <div class="row justify-content-center align-items-xl-start align-items-center">
            <div class="col-lg-6 col-12 order-2 order-lg-1">
                <div class="dust-recycle-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="dust-recycle-top">
                        <h5>Featured Research</h5>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Reviewed by Expert Panel</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Research Completion Rate</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Accessible Insights for Organizations</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Publications Released</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 order-1 order-lg-2 m-b-md-60 m-b-xs-60" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
            </div>
        </div>
    </div>
</section>

	<!-- completed-project-2 start -->
<section class="completed-project-2 m-t-80 m-b-80">
    <div class="container text-center m-b-50 m-b-xs-40">
        <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <span>Featured Publications</span>
        </div>
        <div class="common-title" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
            <h2>Explore Our Top Research Reports</h2>
        </div>
    </div>
    <div class="completed-project-slider-active-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Publication 1 -->
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <img alt="research-thumb-1" src="{{ asset('assets/images/area/study2.webp') }}">
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Ethics in Corporate<br> Leadership</h5>
                                <p>Analyzing the impact of ethical decision-making on organizational success and transparency.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Publication 2 -->
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <img alt="research-thumb-2" src="{{ asset('assets/images/area/study1.webp') }}">
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Whistleblowing &<br> Transparency</h5>
                                <p>Study on how reporting unethical practices strengthens corporate ethics frameworks.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Publication 3 -->
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <img alt="research-thumb-3" src="{{ asset('assets/images/area/study3.webp') }}">
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Code of Conduct Implementation</h5>
                                <p>Best practices for developing and monitoring effective ethical codes in organizations.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Publication 4 -->
                <div class="swiper-slide">
                    <div class="project-card-2">
                        <div class="thumb">
                            <img alt="research-thumb-4" src="{{ asset('assets/images/area/study4.webp') }}">
                            <div class="details-btn-2">
                                <i class="fa-regular fa-arrow-right-long"></i>
                            </div>
                            <div class="content">
                                <h5>Ethical Challenges in Modern Workplaces</h5>
                                <p>Insights on navigating complex ethical dilemmas in global and remote work environments.</p>
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
                                <span class="accordion-title">1.</span>How can I access Ethics4work research publications? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseOne">
                            <div class="accordion-body">
                                All publications are available on the Ethics4work website under the "Research & Publications" section. Some reports are freely accessible, while others may require registration or subscription.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseTwo" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseTwo" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">2.</span>Are the research papers peer-reviewed? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseTwo">
                            <div class="accordion-body">
                                Yes, all Ethics4work publications undergo a thorough peer-review process by subject matter experts to ensure accuracy, reliability, and ethical compliance.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseThree" aria-expanded="false" class="accordion-button" data-bs-target="#flush-collapseThree" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">3.</span>Can I cite Ethics4work publications in my research? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample" id="flush-collapseThree">
                            <div class="accordion-body">
                                Absolutely. You can cite publications following standard academic referencing guidelines. Always include proper attribution to Ethics4workand the specific author or report.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseFour" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseFour" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">4.</span>How often are new publications released? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseFour">
                            <div class="accordion-body">
                                Ethics4workpublishes new research and case studies periodically throughout the year. You can subscribe to our newsletter to receive updates on the latest publications.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button aria-controls="flush-collapseFive" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseFive" data-bs-toggle="collapse" type="button">
                                <span class="accordion-title">5.</span>Can organizations collaborate or contribute to research? 
                                <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseFive">
                            <div class="accordion-body">
                                Yes, Ethics4workwelcomes collaboration with organizations, institutions, and individuals interested in ethical research. Contact us through the website to explore collaboration opportunities.
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
                    <p>Have questions about accessing, citing, or contributing to Ethics4work research? Find answers here or reach out to us directly.</p>
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