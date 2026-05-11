@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')
<style type="text/css">
.dust-recycle-card {
    background: rgb(0 0 0 / 41%);
    backdrop-filter: blur(0);
}
.dust-recycle-card .dust-recycle-top .services-4 .service-2 i {
    color: #fff;
}
</style>
<section class="about-us-section m-t-120 m-t-md-100 m-t-xs-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="shape-wrapped-thumb-1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img src="{{ asset('assets/images/about-image-1.webp') }}" alt="about-image-1" class="w-100" style="transform: translateY(30px);">
                    <div class="box-shape">
                        <img src="{{ asset('assets/img/shapes/shape-14.webp') }}" alt="box-shape"/>
                    </div>
                </div>
            </div>


            <div class="col-xl-6">
                <div class="about-us-content px-xxl-5 px-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="common-subtitle">
                        <span>Who We Are</span>
                    </div>

                    <div class="common-title text-start">
                        <h2>Shaping Ethical Leaders for a Changing World</h2>
                    </div>

                    <div class="c-tabs-wrapper">
                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="c-tab-1" data-bs-toggle="tab" data-bs-target="#c-tab-1-pane" type="button" role="tab">
                                Our Journey
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="c-tab-2" data-bs-toggle="tab" data-bs-target="#c-tab-2-pane" type="button" role="tab">
                                What Drives Us
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="c-tab-3" data-bs-toggle="tab" data-bs-target="#c-tab-3-pane" type="button" role="tab">
                                Our Aspiration
                            </button>
                        </li>
                    </ul>

                        <div class="tab-content" id="myTabContent">

                            <!-- STORY TAB -->
                            <div class="tab-pane fade show active" id="c-tab-1-pane" role="tabpanel" tabindex="0">
                                <div class="text">
                                    <p>
                                        <span class="green">Ethics<span class="golden">4</span>Work</span>was founded with a single belief: ethical decision-making is not an optional value but a core leadership competency. What began as a knowledge initiative has grown into a platform empowering individuals, teams, and organizations to navigate work with integrity, clarity, and purpose.
                                    </p>
                                </div>
                                <div class="benefits">
                                    <ul>
                                        <li><i class="fa fa-check-circle"></i> Rooted in research-backed behavioural science</li>
                                        <li><i class="fa fa-check-circle"></i> Built on real-world workplace challenges and case studies</li>
                                        <li><i class="fa fa-check-circle"></i> Designed to strengthen ethical confidence in daily decisions</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- MISSION TAB -->
                            <div class="tab-pane fade" id="c-tab-2-pane" role="tabpanel" tabindex="0">
                                <div class="text">
                                    <p>
                                        Our mission is to democratize access to high-quality ethics education and make it actionable for professionals at every level. We bridge knowledge with practice, helping leaders make confident, principled choices in complex workplace environments.
                                    </p>
                                </div>
                                <div class="benefits">
                                    <ul>
                                        <li><i class="fa fa-check-circle"></i> Empowering individuals to lead with integrity</li>
                                        <li><i class="fa fa-check-circle"></i> Strengthening organizations through ethical culture-building</li>
                                        <li><i class="fa fa-check-circle"></i> Enabling continuous learning through structured programs</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- VISION TAB -->
                            <div class="tab-pane fade" id="c-tab-3-pane" role="tabpanel" tabindex="0">
                                <div class="text">
                                    <p>
                                        We envision a world where ethical leadership becomes the default — where individuals make choices that elevate teams, transform workplaces, and positively influence society at large.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="dust-recycling-section m-t-60 m-b-60" style="background-image: url(assets/images/services/big6.webp)">
    <div class="container">
        <div class="row justify-content-center align-items-xl-start align-items-center">
            
            <div class="col-lg-10 col-12 order-2 order-lg-1">
                <div class="dust-recycle-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">

                    <div class="dust-recycle-top">
                        <h5>Our Ethical Impact</h5>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Guided by Experienced Ethicists</p>
                            </div>
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Support & Learning Anytime</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Ethical Awareness & Education</p>
                            </div>
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Community Engagement & Programs</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-2 order-1 order-lg-2 m-b-md-60 m-b-xs-60" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <!-- <div class="btn-layer">
                    <a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&ab_channel=Motiversity">Play</a>
                </div> -->
            </div>

        </div>
    </div>
</section>

    @include('partials.faq')
	@include('partials.blogs')
@endsection 