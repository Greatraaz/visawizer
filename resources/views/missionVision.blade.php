@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')

<section class="about-us-section m-t-100 m-t-xs-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="thumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="shape-wrapped-thumb-2">
                        <div class="thumb-wrapper">
                            <img alt="thumb" src="assets/images/stories-image-1.webp"> 
                            <img alt="thumb" src="assets/images/about-image-1.webp" style="border-radius: 10px;">
                        </div>
                        <div class="positioned-thumb"><img alt="thumb" src="assets/images/principles-image-3.webp" class="w-100"></div>
                        <div class="shape-1"><img alt="shape" src="assets/img/shapes/shape-22.webp"></div>
                        <div class="shape-2"><img alt="shape" src="assets/img/shapes/shape-23.webp"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle">
                         <span>Our Mission</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Making Ethics Actionable</h2>
                    </div>
                    <div class="c-tabs-wrapper">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="c-tab-mission-pane" role="tabpanel" tabindex="0">
                                <div class="text">
                                    <p>Our mission is to make ethics actionable by empowering individuals and organizations to move from knowing what is right to doing what is right. We achieve this through education, collaboration, and applied engagement, fostering integrity, accountability, and sustainable practices.</p>
                                </div>
                                <div class="benefits">
                                    <ul>
                                        <li>Empower ethical leadership at all organizational levels</li>
                                        <li>Embed ethical decision-making into daily business practices</li>
                                        <li>Equip leaders to navigate complex moral and social challenges</li>
                                    </ul>
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


	<section class="our-events-section-2 p-t-120 p-b-120 p-t-md-100 p-b-md-100 p-t-xs-80 p-b-xs-80 m-t-80 m-b-80">
    <div class="container">
        <div class="section-top-6">
            <div class="left">
                <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span>Recent Programs</span>
                </div>
                <div class="common-title text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>Ethical Leadership & Corporate Governance</h2>
                </div>
            </div>
        </div>
        <div class="row event-card-3 m-b-30" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
            <div class="col-lg-6 adjusted-col-gap">
                <div class="event-thumb">
                    <a href='#'><img alt="thumb" src="assets/images/individual-business-ethics.webp"></a>
                </div>
            </div>
            <div class="col-lg-6 adjusted-col-gap">
                <div class="card-content">
                    <div class="category">
                        <p>Ethics Training</p>
                    </div>
                    <div class="event-card-title">
                        <h2>Two-Day Management Development Program on Business Ethics</h2>
                    </div>
                    <div class="event-card-text">
                        <p>This program equips leaders and professionals with frameworks to make ethical decisions, foster accountability, and embed integrity into organizational practices.</p>
                    </div>
                    <div class="join-event">
                        <div class="blog-btn">
                            <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">Contact Us <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-number-3">
                <h1>01</h1>
            </div>
        </div>
    </div>
</section>


<section class="hero-section-4 overflow-hidden" style="background-image: url(assets/img/bg/hero-bg-4.webp)">
    <div class="hero-slider-social">
        <div class="social-links">
            <a href="{{ config('site.facebook') }}"><i class="fab fa-facebook-f"></i></a>
            <a href="{{ config('site.twitter') }}"><i class="fab fa-x-twitter"></i></a>
            <a href="{{ config('site.instagram') }}"><i class="fab fa-instagram"></i></a>
            <a href="{{ config('site.linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="hero-content-4">
                    <div class="subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <span>Our Vision</span>
                    </div>
                    <div class="common-title text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h1>Empowering a Culture of Integrity</h1>
                    </div>
                    <div class="text" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        <p>We envision a world where ethics are embedded in every decision and action, creating accountable organizations and responsible leaders who drive sustainable, positive impact across society.</p>
                    </div>
                    <div class="hero-rating-wrap" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                        <a class='e-primary-btn has-icon' href="{{ url('about-us') }}">Discover More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thumb"><img alt="thumb" src="assets/images/menu/services.webp"></div>
</section>

@endsection 