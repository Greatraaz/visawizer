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
    <div class="hero-slide-2" style="background-image: url(assets/images/area/banner3.webp)">
        <div class="bgoverlay"></div>
        <div class="container">
            <div class="hero-content-2">
                <div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
                    <h1>Protecting Our Planet for a Sustainable Future</h1>
                </div>
                <div class="services-2" data-animation="animate__fadeInUp" data-delay="0.4s">
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Eco-Friendly Practices</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Committed to Sustainability</p>
                    </div>
                    <div class="service">
                        <i class="fa-solid fa-check"></i>
                        <p>Community Engagement</p>
                    </div>
                </div>
                <div class="join-us" data-animation="animate__fadeInUp" data-delay="0.5s">
                    <a class='e-primary-btn has-icon' href="{{ url('about-us') }}">Learn More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
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
                        <h4>Water Conservation</h4><i class="fa-light fa-hand-holding-droplet"></i>
                    </div>
                    <div class="service-content">
                        <p>Implementing sustainable water management practices to protect this vital resource.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Recycling Management</h4><i class="fa-light fa-recycle"></i>
                    </div>
                    <div class="service-content">
                        <p>Recycling programs and reducing environmental impact through proper waste management.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="service-top">
                        <h4>Forest Preservation</h4><i class="fa-light fa-trees"></i>
                    </div>
                    <div class="service-content">
                        <p>Protecting forests and wildlife habitats to maintain biodiversity and ecological balance.</p>
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
            <!-- Left Thumb Images -->
            <div class="col-xl-6">
                <div class="thumb px-lg-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="thumb-1">
                        <img alt="thumb-1" src="{{ asset('assets/images/area/image-31.webp') }}">
                        <div class="s-shape"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-14.webp') }}"></div>
                    </div>
                    <div class="thumb-2"><img alt="thumb-2" src="{{ asset('assets/images/area/image-32.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb">
                            <img alt="thumb-3" src="{{ asset('assets/images/area/image-33.webp') }}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Content -->
            <div class="col-xl-6">
                <div class="why-us-content" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle">
                         <span>Our Mission</span>
                    </div>
                    <div class="common-title text-start">
                        <h2>Why Choose Econest for Environmental Solutions</h2>
                    </div>
                    <div class="text">
                        <p>We dedicate ourselves to sustainable development, conserving natural habitats, and promoting eco-friendly practices that positively impact communities and the planet.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Eco-focused Solutions</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Certified & Insured Team</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Reliable Project Management</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Timely & Sustainable Execution</p>
                            </div>
                        </div>
                    </div>
                    <div class="annual-donation-wrap">
                        <div class="blog-btn">
                            <a class='e-primary-btn has-icon' href="{{ url('about-us') }}">Explore About Us <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Achievements -->
        <div class="company-achievements" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <div class="achievement">
                <i class="fa-light fa-chart-mixed"></i>
                <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="95">0</span>%</h2>
                <p>Successful Environmental Projects</p>
            </div>
            <div class="achievement">
                <i class="fa-light fa-lightbulb-exclamation-on"></i>
                <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="420">0</span>+</h2>
                <p>Implemented Green Strategies</p>
            </div>
            <div class="achievement">
                <i class="fa-light fa-thumbs-up"></i>
                <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="35">0</span>k</h2>
                <p>Trees Planted / Protected</p>
            </div>
            <div class="achievement">
                <i class="fa-light fa-users-medical"></i>
                <h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="120">0</span>+</h2>
                <p>Experienced Environmental Experts</p>
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
<section class="dust-recycling-section" style="background-image: url(assets/images/area/big3.webp)">
    <div class="container">
        <div class="row justify-content-center align-items-xl-start align-items-center">
            <div class="col-lg-10 col-12 order-2 order-lg-1">
                <div class="dust-recycle-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="dust-recycle-top">
                        <h5>Eco Waste Recycling</h5>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Partnered With Environmental Experts</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Active Environmental Campaigns</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Response for Waste Emergencies</p>
                            </div>
                        </div>
                        <div class="services-4">
                            <div class="service-2">
                                <i class="fa-light fa-badge-check"></i>
                                <p>Recycling Initiatives</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-4">
                        <p class="text-white">Our eco-friendly recycling programs reduce landfill waste and support local communities.</p>
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
                         <span>Our Campaigns</span>
                    </div>
                    <div class="common-title mb-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <h2>Join Our Environmental Initiatives</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="camping-slider-active-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="camping-card-2">
                                    <div class="thumb">
                                        <a href="{{ url('about-us') }}"><img alt="thumb-1" src="{{ asset('assets/images/area/img4.webp') }}"></a>
                                        <div class="date">
                                            <i class="fa-regular fa-clock"></i> <span>Coming Soon</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="donation-wrap">
                                            <div class="content-top">
                                                <div class="title">
                                                    <h3><a href="{{ url('about-us') }}">Urban Tree Planting Drive 2025</a></h3>
                                                </div>
                                            </div>
                                            <div class="d-top">
                                                <p>Donation Complete</p>
                                                <p>65%</p>
                                            </div>
                                            <div class="progress" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 65%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="camping-card-2">
                                    <div class="thumb">
                                        <a href="{{ url('about-us') }}"><img alt="thumb-2" src="{{ asset('assets/images/area/img3.webp') }}"></a>
                                        <div class="date">
                                            <i class="fa-regular fa-clock"></i> <span>Coming Soon</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="donation-wrap">
                                            <div class="content-top">
                                                <div class="title">
                                                    <h3><a href="{{ url('about-us') }}">Plastic-Free Oceans Initiative</a></h3>
                                                </div>
                                            </div>
                                            <div class="d-top">
                                                <p>Donation Complete</p>
                                                <p>78%</p>
                                            </div>
                                            <div class="progress" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 78%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="camping-card-2">
                                    <div class="thumb">
                                        <a href="{{ url('about-us') }}"><img alt="thumb-3" src="{{ asset('assets/images/area/img2.webp') }}"></a>
                                        <div class="date">
                                            <i class="fa-regular fa-clock"></i> <span>Coming Soon</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="donation-wrap">
                                            <div class="content-top">
                                                <div class="title">
                                                    <h3><a href="{{ url('about-us') }}">Endangered Wildlife Habitat Protection</a></h3>
                                                </div>
                                            </div>
                                            <div class="d-top">
                                                <p>Donation Complete</p>
                                                <p>82%</p>
                                            </div>
                                            <div class="progress" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 82%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 4 -->
                            <div class="swiper-slide">
                                <div class="camping-card-2">
                                    <div class="thumb">
                                        <a href="{{ url('about-us') }}"><img alt="thumb-4" src="{{ asset('assets/images/area/img1.webp') }}"></a>
                                        <div class="date">
                                            <i class="fa-regular fa-clock"></i> <span>Coming Soon</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="donation-wrap">
                                            <div class="content-top">
                                                <div class="title">
                                                    <h3><a href="{{ url('about-us') }}">Renewable Energy Awareness Campaign</a></h3>
                                                </div>
                                            </div>
                                            <div class="d-top">
                                                <p>Donation Complete</p>
                                                <p>70%</p>
                                            </div>
                                            <div class="progress" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 70%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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


@include('partials.testi2')
@include('partials.faq')

@endsection 