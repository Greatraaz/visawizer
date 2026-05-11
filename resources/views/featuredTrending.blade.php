@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')
<style type="text/css">
.service-card-3 .service-top h4 {
    font-size: 25px;
}
</style>
<section class="about-us-section m-t-100 m-t-xs-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="thumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="shape-wrapped-thumb-2">
                        <div class="thumb-wrapper">
                            <img alt="thumb" src="assets/images/stories-image-1.webp"> 
                            <img alt="thumb" src="assets/images/area/image-31.webp" style="border-radius: 10px;">
                        </div>
                        <div class="shape-1"><img alt="shape" src="assets/img/shapes/shape-22.webp"></div>
                        <div class="shape-2"><img alt="shape" src="assets/img/shapes/shape-23.webp"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle">
                         <span>Featured & Trending</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Latest insights, impactful ideas, and what’s shaping ethical workplaces today.</h2>
                    </div>
                    <div class="c-tabs-wrapper">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="c-tab-mission-pane" role="tabpanel" tabindex="0">
                                <div class="text">
                                    <span class="green">Ethics<span class="golden">4</span>Work</span> brings you fresh perspectives and in-depth guidance on the evolving world of workplace ethics. From emerging compliance trends to innovative culture-building strategies, our featured insights help leaders stay informed, make principled decisions, and create environments where integrity thrives.
                                </div>
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
</section>


 <section class="services-section-3 p-t-100 p-t-xs-80">
    <div class="container">
        <div class="row m-b-50 m-b-xs-40">
            <div class="col-xl-12">
                <div class="section-top-9">
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Featured Insights</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">

            <div class="col-md-4">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Building a High-Integrity Workplace Culture</h4>
                        <i class="fa-light fa-user-tie"></i>
                    </div>
                    <div class="service-content">
                        <p>Key pillars that help organizations establish trust, transparency, and strong ethical foundations. From leadership alignment to values-based decision-making, learn what truly drives an integrity-first culture.</p>
                    </div>
                    <div class="i-shape"><h1>01</h1></div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>The <span class="green">Ethics<span class="golden">4</span>Work</span> Compliance Toolkit</h4>
                        <i class="fa-light fa-building-columns"></i>
                    </div>
                    <div class="service-content">
                        <p>Our most downloaded resource of the month. A practical toolkit designed for HR teams, compliance officers, and leaders to strengthen workplace policies, reporting systems, and ethical governance.</p>
                    </div>
                    <div class="i-shape"><h1>02</h1></div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card-3">
                    <div class="service-top">
                        <h4>Ethical Leadership Masterclass (New Release)</h4>
                        <i class="fa-light fa-hand-holding-heart"></i>
                    </div>
                    <div class="service-content">
                        <p>A deep-dive learning experience for managers and executives. Explore real-world scenarios, ethical dilemmas, and frameworks that shape principled leadership across industries.</p>
                    </div>
                    <div class="i-shape"><h1>03</h1></div>
                </div>
            </div>

        </div>
    </div>
    
</section>


<section class="m-t-80">
    <div class="container">
        <div class="row m-b-50 m-b-xs-40">
            <div class="col-xl-12">
                <div class="section-top-9">
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Trending Insights</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hero-section-4 overflow-hidden" style="background-image: url(assets/img/bg/hero-bg-4.webp)">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="hero-content-4 p-0">
                    <ul style="margin-left: -20px;list-style: none;">
                        <li class="mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Why Psychological Safety Matters in Ethical Cultures</h5>
                                    <p class="card-text">
                                        Employees speak up only when they feel safe. Learn how psychological safety boosts
                                        transparency, accountability, and ethical decision making.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">AI in the Workplace: Ethics, Risks & Responsibilities</h5>
                                    <p class="card-text">As AI tools become mainstream, organizations must understand their moral and compliance obligations. This trending topic breaks down responsible AI adoption.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">The Rise of Whistleblower Support Systems</h5>
                                    <p class="card-text">Companies across sectors are strengthening speak-up channels. Find out what’s driving this trend and how to build a trustworthy reporting mechanism.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Microaggressions & Modern Workplace Ethics</h5>
                                    <p class="card-text">Trending among HR leaders — identifying subtle biases and fostering inclusive, respectful environments.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="thumb"><img alt="thumb" src="assets/images/area/image-91.webp"></div>
</section>

@endsection 