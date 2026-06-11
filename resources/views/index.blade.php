@extends('layouts.frontend')
@section('content') 
<style type="text/css">
.homeForm .text-danger{
    color: #fff !important;
}
.homeForm textarea.form-control {
    color: #fff;
}
.coyrs .content {
    padding: 14px 5px 14px;
}
.coyrs .content .title h3 {
    line-height: 24px;
    min-height: 72px;
}
.service-card-3 .thumb img {
    object-fit: cover;
}
.service-top i img {
    background: #fff;
    border-radius: 50px;
    width: 60px;
    padding: 1px;
}
.service-card .service-top i {
    padding: 0;
}
.home-static-hero {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    position: relative;
    z-index: 1;
    overflow: hidden;
    min-height: 100svh;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    padding-top: 20px !important;
    padding-bottom: 44px !important;
}
.home-static-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgb(7 27 24 / 0%) 0%, rgb(7 27 24 / 0%) 36%, rgb(7 27 24 / 27%) 68%, rgba(7, 27, 24, 0.22) 100%);
}
.home-static-hero .container {
    position: relative;
    z-index: 1;
    width: min(100%, 1380px);
}
.home-static-hero .hero-content-1 {
    max-width: 980px;
}
.home-static-hero .hero-content-1 .subtitle {
    margin-bottom: 12px;
    border-radius: 6px;
    padding: 8px 14px;
}
.home-static-hero .hero-content-1 .subtitle span {
    font-size: 15px;
    line-height: 1.3;
    letter-spacing: 0.04em;
}
.home-static-hero .hero-content-1 .title {
    max-width: 980px;
    margin-bottom: 18px;
}
.home-static-hero .hero-content-1 .title h1 {
    font-size: clamp(2.1rem, 3.6vw, 3.6rem);
    line-height: 0.98;
}
.home-static-hero-subheading {
    max-width: 920px;
    font-size: clamp(1rem, 1.25vw, 1.18rem);
    line-height: 1.42;
    color: rgba(248, 247, 240, 0.92);
    font-weight: 500;
    margin-bottom: 16px;
}
.home-static-hero-body {
    max-width: 920px;
    margin-bottom: 24px;
}
.home-static-hero-body p {
    font-size: 15px;
    line-height: 1.55;
    color: rgba(248, 247, 240, 0.82);
    margin-bottom: 0;
}
.home-static-hero .join-us {
    flex-wrap: wrap;
    gap: 14px;
    margin-bottom: 18px;
}
.home-static-secondary-btn {
    display: inline-flex;
    align-items: center;
    gap: 14px;
    padding: 5px 5px 5px 24px;
    border-radius: 6px;
    background: var(--theme-color-3);
    border: 1px solid rgba(255, 255, 255, 0.22);
    color: #fff;
    font-weight: 600;
    text-decoration: none;
    backdrop-filter: blur(8px);
    transition: all 0.25s ease;
}
.home-static-secondary-btn .icon-wrap {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    background: #fff;
    color: var(--theme-color-3);
    flex: none;
    transition: all 0.25s ease;
}
.home-static-secondary-btn .icon {
    width: 15px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    overflow: hidden;
}
.home-static-secondary-btn:hover {
    color: #0f172a;
    background: #fff;
    border-color: #fff;
}
.home-static-secondary-btn:hover .icon-wrap {
    background: var(--theme-color-3);
    color: #fff;
}
.home-static-trust-points {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    max-width: 980px;
}
.home-static-trust-points li {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 14px;
    border-radius: 6px;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.14);
    backdrop-filter: blur(8px);
    color: rgba(248, 247, 240, 0.92);
    font-size: 13px;
    line-height: 1.3;
    flex: 0 1 auto;
}
.home-static-trust-points li i {
    color: #7ee1b9;
    font-size: 14px;
    margin-top: 0;
}
.home-static-hero.hero-slider-active-1 .hero-slider-pagination-1 {
    display: inline-flex;
}
.home-static-hero.hero-slider-active-1 .hero-slider-pagination-1 .swiper-pagination-bullet {
    cursor: default;
}
.home-static-hero.hero-slider-active-1 .hero-slider-social {
    display: flex;
}
@media (max-width: 991px) {
    .home-static-hero {
        min-height: auto;
        padding-top: 74px !important;
        padding-bottom: 48px !important;
    }
    .home-static-hero-body p {
        font-size: 15px;
        line-height: 1.55;
    }
    .home-static-trust-points {
        max-width: 100%;
    }
}
@media (max-width: 767px) {
    .home-static-hero {
        padding-top: 66px !important;
        padding-bottom: 40px !important;
    }
    .home-static-hero .hero-content-1 .subtitle {
        margin-bottom: 10px;
    }
    .home-static-hero-subheading {
        font-size: 0.98rem;
        line-height: 1.4;
    }
    .home-static-hero-body {
        margin-bottom: 18px;
    }
    .home-static-hero .join-us {
        align-items: stretch;
    }
    .home-static-secondary-btn {
        width: 100%;
        justify-content: space-between;
    }
    .home-static-hero.hero-slider-active-1 .hero-slider-social,
    .home-static-hero.hero-slider-active-1 .hero-slider-pagination-1 {
        display: none;
    }
}
.hero-side .group-shape-1 img {
    opacity: 0.7;
}
</style>
   {{-- Dynamic banner disabled in favor of a single static homepage hero.
<section class="hero-slider-active-1">
    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach ($banners as $b)
            <div class="swiper-slide">
                <div class="hero-side" style="background-image: url({{ asset($b->image) }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hero-content-1">

                                    <div class="title" data-animation="animate__fadeInUp" data-delay="0.4s">
                                        <h1>{{ $b->heading }}</h1>
                                    </div>

                                    <div class="text" data-animation="animate__fadeInUp" data-delay="0.5s">
                                        <p>{{ $b->description }}</p>
                                    </div>

                                    <div class="join-us" data-animation="animate__fadeInUp" data-delay="0.6s">
                                        <a class="e-primary-btn has-icon" href="{{ $b->link }}">
                                            {{ $b->button }}
                                            <span class="icon-wrap">
                                                <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group-shape-1">
                        <img src="{{ asset('assets/img/shapes/group-shape-1.webp') }}" alt="group-shape-1"/>
                    </div>
                    <div class="s-shape-1">
                        <img src="{{ asset('assets/img/shapes/shape-2.webp') }}" alt="s-shape-1"/>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="hero-slider-pagination-1"></div>

    <!-- Social Icons -->
    <div class="hero-slider-social">
        <div class="social-links">
            <a href="{{ config('site.facebook') }}"><i class="fab fa-facebook-f"></i></a>
            <a href="{{ config('site.twitter') }}"><i class="fab fa-x-twitter"></i></a>
            <a href="{{ config('site.instagram') }}"><i class="fab fa-instagram"></i></a>
            <a href="{{ config('site.linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="text">Join Social:</div>
    </div>

</section>
--}}
<!-- hero-section end -->

<!-- hero-section start -->
<section class="home-static-hero hero-side hero-slider-active-1" style="background-image: linear-gradient(135deg, rgba(7, 27, 24, 0.16) 0%, rgba(7, 27, 24, 0.1) 100%), url('{{ asset('img/main-banner.png') }}');">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-content-1">
                    <div class="subtitle">
                        <span>Clarity in every step</span>
                    </div>

                    <div class="title">
                        <h1>Australian visas, study pathways, and migration guidance made simpler</h1>
                    </div>

                    <p class="home-static-hero-subheading mb-2">From student admissions to skilled migration, employer-sponsored visas, family pathways, and appeals, Visawizer helps you move forward with confidence and a clear plan.</p>

                    <div class="w-line"></div>

                    <div class="home-static-hero-body">
                        <p>Whether you want to study, work, reunite with family, or settle in Australia, the right advice can save time, stress, and costly mistakes. At Visawizer, we help individuals and families understand their options, prepare strong applications, and take the next step with more confidence.</p>
                    </div>

                    <div class="join-us">
                        <a class="e-primary-btn has-icon" href="{{ url('book-appointment') }}">
                            Book Appointment
                            <span class="icon-wrap">
                                <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                            </span>
                        </a>
                        <a class="home-static-secondary-btn" href="#home-visa-pathways">
                            Explore Visa Pathways
                            <span class="icon-wrap">
                                <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>

                    <ul class="home-static-trust-points">
                        <li><i class="fa-solid fa-circle-check"></i><span>Melbourne-based visa and education support</span></li>
                        <li><i class="fa-solid fa-circle-check"></i><span>Student, family, skilled, sponsored, and appeal pathways</span></li>
                        <li><i class="fa-solid fa-circle-check"></i><span>Clear, personalised guidance from consultation to submission</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-slider-social">
        <div class="social-links">
            <a href="{{ config('site.facebook') }}"><i class="fab fa-facebook-f"></i></a>
            <a href="{{ config('site.twitter') }}"><i class="fab fa-x-twitter"></i></a>
            <a href="{{ config('site.instagram') }}"><i class="fab fa-instagram"></i></a>
            <a href="{{ config('site.linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="text">Join Social:</div>
    </div>

    <div class="group-shape-1">
        <img src="{{ asset('assets/img/shapes/group-shape-1.webp') }}" alt="group-shape-1"/>
    </div>
</section>
<!-- hero-section end -->

<!-- why-visawizer-section start -->
<section class="why-us-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80" style="background-image: url({{ asset('assets/img/bg/why-us-bg.webp') }})">
    <div class="container">
        <div class="row row-gap-5 align-items-center">

            <!-- Left Visuals -->
            <div class="col-xl-6">
                <div class="thumb px-xl-5 left" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="thumb-1">
                        <img alt="thumb-1" src="{{ asset('img/img1.png') }}">
                        <div class="s-shape-1"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-14.webp') }}"></div>
                    </div>
                    <div class="thumb-2"><img alt="thumb-2" src="{{ asset('img/img2.png') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb">
                            <img alt="thumb-3" src="{{ asset('img/img3.png') }}">
                            <div class="s-shape-1"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-13.webp') }}"></div>
                            <div class="s-shape-2"><img alt="shape-2" src="{{ asset('assets/img/shapes/shape-15.webp') }}"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-xl-6">
                <div class="why-us-content" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle">
                        <span class="bg-p">Why Visawizer</span>
                    </div>
                    <div class="common-title text-start mb-3">
                        <h2>Practical migration guidance built around real goals</h2>
                    </div>
                    <div class="b-line"></div>
                    <p class="m-t-15 m-b-15" style="font-size: 20px; font-weight: 600; line-height: 1.5;">Not just forms and documents. Advice that connects your visa, study, work, and settlement plans.</p>
                    <p class="m-b-25">Every migration journey is different. Some clients need help choosing the right course and institution. Others need support with employer sponsorship, partner visas, regional pathways, or appeal matters. Our approach is to understand your situation first, then guide you with clarity, transparency, and a practical action plan.</p>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p><strong>Clear eligibility assessment</strong></p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p><strong>Honest pathway advice</strong></p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p><strong>Application preparation support</strong></p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p><strong>Ongoing updates and next-step guidance</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- why-visawizer-section end -->


{{-- about-us-section start
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

            <!-- Right Content Area -->
            <div class="col-xl-6">
                <div class="about-us-content px-xxl-5 px-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">

                    <!-- Subtitle -->
                    <div class="common-subtitle">
                        <span>About Us</span>
                    </div>

                    <!-- Title -->
                    <div class="common-title text-start">
                        <h2>Ethics, Leadership & Responsible Business for a Better World</h2>
                    </div>

                    <!-- Tabs -->
                    <div class="c-tabs-wrapper">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="c-tab-1" data-bs-toggle="tab"
                                        data-bs-target="#c-tab-1-pane" type="button" role="tab"
                                        aria-controls="c-tab-1-pane" aria-selected="true">
                                    Who We Are
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="c-tab-2" data-bs-toggle="tab"
                                        data-bs-target="#c-tab-2-pane" type="button" role="tab"
                                        aria-controls="c-tab-2-pane" aria-selected="false">
                                    Our Mission
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="c-tab-3" data-bs-toggle="tab"
                                        data-bs-target="#c-tab-3-pane" type="button" role="tab"
                                        aria-controls="c-tab-3-pane" aria-selected="false">
                                    Our Vision
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">

                            <!-- TAB 1: Who We Are -->
                            <div class="tab-pane fade show active" id="c-tab-1-pane" role="tabpanel" aria-labelledby="c-tab-1" tabindex="0">
                                <div class="text">
                                    <p>
                                        <span class="green">Visawizer</span> is a community of educators, researchers, business leaders, and ethics practitioners committed to embedding ethical thinking into everyday decision-making. 
                                        We bring together academic rigor, responsible leadership practice, and real-world insights to strengthen integrity, accountability, and human dignity across institutions by:
                                    </p>
                                </div>
                                <div class="benefits">
                                    <ul>
                                        <li><i class="fa fa-check-circle"></i> Integrating ethics into leadership, governance, and organizational culture</li>
                                        <li><i class="fa fa-check-circle"></i> Bridging theory and practice through research, tools, and experiential learning</li>
                                        <li><i class="fa fa-check-circle"></i> Empowering individuals and institutions to make values-led decisions</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- TAB 2: Mission -->
                            <div class="tab-pane fade" id="c-tab-2-pane" role="tabpanel" aria-labelledby="c-tab-2" tabindex="0">
                                <div class="text">
                                    <p>
                                        Our mission is to make ethics actionable. We equip individuals and organizations to move from knowing what is right to doing what is right—through education, collaboration, and applied engagement.
                                        We help leaders institutionalize ethics, strengthen governance systems, and promote accountability across value chains.
                                    </p>
                                </div>
                                <div class="benefits">
                                    <ul>
                                        <li><i class="fa fa-check-circle"></i> Enabling purpose-driven leadership rooted in integrity</li>
                                        <li><i class="fa fa-check-circle"></i> Building ethical cultures through engagement and empowerment</li>
                                        <li><i class="fa fa-check-circle"></i> Supporting responsible business aligned with ESG, SDGs, and societal expectations</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- TAB 3: Vision -->
                            <div class="tab-pane fade" id="c-tab-3-pane" role="tabpanel" aria-labelledby="c-tab-3" tabindex="0">
                                <div class="text">
                                    <p>
                                        Our vision is to create a world where businesses, leaders, and institutions act as forces for good—balancing profit with purpose and ensuring that ethical integrity becomes central to progress, sustainability, and human well-being.
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
<!-- about-us-section end -->
--}}

    <!-- what-we-do-section start -->
    <section id="home-visa-pathways" class="what-we-do-section p-t-80 p-b-80" style="background: #e1e1e1">
        <div class="container">
            <div class="section-top-2">
                <div class="left">
                    <div class="common-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span class="bg-p">Solutions</span>
                    </div>
                    <div class="common-title text-start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <h2 class="text-dark">Start with the pathway that fits your goal</h2>
                    </div>
                </div>
                <div class="right" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <p class="text-dark">Choose your direction and we will help you navigate the next step.</p>
                </div>
            </div>
            <div class="row row-gap-md-5 row-gap-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="project-card">
                        <div class="thumb">
                            <a href="{{ url('study') }}">
                                <img src="{{ asset('img/study-in-australia.png') }}" alt="thumb-14"/>
                            </a>
                            <div class="content">
                                <h5>Study in Australia</h5>
                                <p>Admissions, course guidance, student visas, and post-study options.</p>
                                <div class="details-btn">
                                    <a class='e-primary-btn has-icon is-hover-white' href="{{ url('study') }}">
                                        Learn More
                                        <span class="icon-wrap">
                                            <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="project-card">
                        <div class="thumb">
                            <a href="{{ url('visitor-short-stay') }}">
                                <img src="{{ asset('img/visit-autraliya.png') }}" alt="thumb-15"/>
                            </a>
                            <div class="content">
                                <h5>Visit Australia</h5>
                                <p>Tourist, ETA, eVisitor, transit, and holiday visa support.</p>
                                <div class="details-btn">
                                    <a class='e-primary-btn has-icon is-hover-white' href="{{ url('visitor-short-stay') }}">
                                        Learn More
                                        <span class="icon-wrap">
                                            <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="project-card">
                        <div class="thumb">
                            <a href="{{ url('work-skilled-migration') }}">
                                <img src="{{ asset('img/skilled-migration.png') }}" alt="thumb-16"/>
                            </a>
                            <div class="content">
                                <h5>Skilled Migration</h5>
                                <p>Independent, nominated, and regional migration pathways.</p>
                                <div class="details-btn">
                                    <a class='e-primary-btn has-icon is-hover-white' href="{{ url('work-skilled-migration') }}">
                                        Learn More
                                        <span class="icon-wrap">
                                            <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="project-card">
                        <div class="thumb">
                            <a href="{{ url('skilled-employer-sponsored-regional-494') }}">
                                <img src="{{ asset('img/employer-sponsored.png') }}" alt="thumb-14"/>
                            </a>
                            <div class="content">
                                <h5>Employer Sponsored</h5>
                                <p>482, 186, 494, DAMA, and other employer-led visa options.</p>
                                <div class="details-btn">
                                    <a class='e-primary-btn has-icon is-hover-white' href="{{ url('skilled-employer-sponsored-regional-494') }}">
                                        Learn More
                                        <span class="icon-wrap">
                                            <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="project-card">
                        <div class="thumb">
                            <a href="{{ url('family-visas') }}">
                                <img src="{{ asset('img/family-visas.png') }}" alt="thumb-15"/>
                            </a>
                            <div class="content">
                                <h5>Family Visas</h5>
                                <p>Partner, parent, child, and relative visa pathways.</p>
                                <div class="details-btn">
                                    <a class='e-primary-btn has-icon is-hover-white' href="{{ url('family-visas') }}">
                                        Learn More
                                        <span class="icon-wrap">
                                            <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="project-card">
                        <div class="thumb">
                            <a href="{{ url('appeals-and-reviews') }}">
                                <img src="{{ asset('img/appeals-protection.png') }}" alt="thumb-16"/>
                            </a>
                            <div class="content">
                                <h5>Appeals & Reviews</h5>
                                <p>Support for complex matters, review pathways, and migration assistance.</p>
                                <div class="details-btn">
                                    <a class='e-primary-btn has-icon is-hover-white' href="{{ url('appeals-and-reviews') }}">
                                        Learn More
                                        <span class="icon-wrap">
                                            <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center m-t-40" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                <a class='e-primary-btn has-icon is-hover-white' href="{{ url('contact-us') }}">
                    Find My Pathway
                    <span class="icon-wrap">
                        <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <!-- what-we-do-section end -->



    <!-- our-camping start -->
    <section class="our-camping-section overflow-x-clip p-t-100 p-b-100 p-t-xs-80 p-b-xs-80">
        <div class="container">
            <div class="row m-b-50 m-b-xs-40">
                <div class="col-xl-12">
                    <div class="text-center">
                        <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <span class="bg-p">Study</span>
                        </div>
                        <div class="common-title mb-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                            <h2>Build your future through education in Australia</h2>
                        </div>
                        <div class="b-line m-auto"></div>
                        <p class="m-t-20 m-b-10" style="font-size: 20px; font-weight: 600; line-height: 1.5;">From admissions and course selection to student visas and post-study planning, we help students make informed moves.</p>
                        <p style="font-size: 16px; font-weight: 400; line-height: 1.75; color: #6b6b6b;">Australia offers strong academic opportunities, international exposure, and real career potential. We support students with admissions guidance, education planning, OSHC, change of course or institution support, and visa pathways that align with long-term goals.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="camping-slider-active" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="camping-card">
                                        <div class="thumb">
                                            <img alt="thumb-2" src="{{ asset('img/admission-support.png') }}">
                                        </div>
                                        <div class="content">
                                            <div class="content-top">
                                                <div class="title">
                                                    <h3>Admissions<br> Support</h3>
                                                </div>
                                                <div class="text">
                                                    <p>Find suitable colleges, universities, and programs based on your profile and budget.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="camping-card">
                                        <div class="thumb">
                                            <img alt="thumb-2" src="{{ asset('img/student-visa.png') }}">
                                        </div>
                                        <div class="content">
                                            <div class="content-top">
                                                <div class="title">
                                                    <h3>Student Visa<br> Guidance</h3>
                                                </div>
                                                <div class="text">
                                                    <p>Support for Student Visa 500, Student Guardian 590, and Training Visa 407 pathways.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="camping-card">
                                        <div class="thumb">
                                            <img alt="thumb-2" src="{{ asset('img/post-study.png') }}">
                                        </div>
                                        <div class="content">
                                            <div class="content-top">
                                                <div class="title">
                                                    <h3>Post-Study<br> Planning</h3>
                                                </div>
                                                <div class="text">
                                                    <p>Explore graduate visa pathways and post-study opportunities for your future career.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="camping-card">
                                        <div class="thumb">
                                            <img alt="thumb-2" src="{{ asset('img/student-support.png') }}">
                                        </div>
                                        <div class="content">
                                            <div class="content-top">
                                                <div class="title">
                                                    <h3>Student Support<br> Services</h3>
                                                </div>
                                                <div class="text">
                                                    <p>Guidance for OSHC, course change, college transfer, and education planning.</p>
                                                </div>
                                            </div>
                                            <!-- <div class="mb-3 ms-3">
                                                <div class="d-bottom">
                                                    <a class='e-primary-btn has-icon d-btn' href="#">Read More
                                                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                                                    </a>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="camping-pagination-wrap">
                            <div class="camping-pagination"></div>
                        </div>
                        <div class="camping-button-prev">
                            <i class="fa-regular fa-arrow-left"></i>
                        </div>
                        <div class="camping-button-next">
                            <i class="fa-regular fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center m-t-40">
                <a class='e-primary-btn has-icon is-hover-white' href="{{ url('contact-us') }}">
                    Explore Study Pathways
                    <span class="icon-wrap">
                        <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <!-- our-camping end -->

<style>
.hero-section {
  position: relative;
  padding: 80px 0;
}
.hero-bg {
  position: absolute; inset: 0;
  background: #e1e1e1;
}
.hero-content { position: relative; z-index: 2; }
.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--theme-color-3);
    color: #fff;
    letter-spacing: 1.8px;
    text-transform: uppercase;
    padding: 6px 16px;
    border-radius: 7px;
    margin-bottom: 24px;
    font-size: 14px;
}
.hero-title {
    font-size: clamp(2.4rem, 5.5vw, 3.2rem);
    font-weight: 700;
    line-height: 1.2;
    color: #000;
    margin-bottom: 1.2rem;
}
.hero-title .accent {
    color: var(--theme-color-3);
    border-bottom: 1px solid;
}
.hero-desc {
  font-size: 1.08rem;
  line-height: 1.4;
  color: #000;
  max-width: 560px;
  margin-bottom: 1rem;
}
.hero-img-block {
  position: relative;
  z-index: 2;
}
.hero-img-main {
  width: 100%;
  border-radius: 16px;
  box-shadow: 0 8px 48px rgba(0,0,0,0.28);
}
.hero-img-main img {
    width: 100%;
    height: 550px;
    display: block;
    border-radius: 10px;
    object-fit: cover;
    object-position: top;
}
.hero-float-card {
  position: absolute;
  bottom: -24px;
  left: -24px;
  background: #305139;
  color: #fff;
  border-radius: 12px;
  padding: 20px 24px;
  box-shadow: 0 12px 40px rgba(39,174,112,0.35);
  min-width: 200px;
}
.hero-float-card .num { font-size: 2rem; font-weight: 700; }
.hero-float-card .lbl { font-size: 0.8rem; opacity: 0.85; margin-top: 2px; }
.hero-float-card2 {
    position: absolute;
    top: -10px;
    right: -10px;
    background: #fff;
    color: var(--theme-color-3);
    border-radius: 12px;
    padding: 16px 20px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.15);
    min-width: 180px;
    border: 4px solid var(--theme-color-3);
    z-index: 99999999;
}
.hero-float-card2 .icon-wrap {
  width: 38px; height: 38px;
  background: #d4edda;
  border-radius: 8px;
  display: flex; align-items: center; justify-content: center;
  color: var(--theme-color-3);
  font-size: 1.1rem;
  margin-bottom: 8px;
}
.hero-float-card2 .lbl2 { font-size: 0.78rem; color: #6b7280; }
.hero-float-card2 .val { font-size: 1rem; font-weight: 700; color: #1a1f2e; }    
    </style>

    <section class="hero-section">
        <div class="hero-bg"></div>
        <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-6 hero-content">
                <div class="hero-badge">
                <i class="fa fa-globe"></i> Founder, Visawizer Education & Migration Services
                </div>
                <h2 class="hero-title">
                From <span class="accent"> Migrant Journey </span> to Migration Guidance
                </h2>
                <p class="hero-desc">
                Ankur Saini’s story began with a dream many people carry — to build a better future in Australia. Having personally experienced the journey of moving to Australia, understanding the migration system, and navigating the pathway toward settlement, Ankur transformed his experience into a professional mission.
                </p>
                <p class="hero-desc" style="font-size:0.93rem; margin-bottom:2rem;">
                Today, as the Founder of Visawizer Education & Migration Services and a Registered Migration Agent, he helps students, professionals, families, and skilled migrants make informed, confident, and legally guided decisions for their Australian journey.
                </p>
                <a class="e-primary-btn has-icon mb-3" href="{{ url('book-appointment') }}">
                    Book Appointment
                    <span class="icon-wrap">
                        <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                    </span>
                </a>
                <a class="home-static-secondary-btn" href="{{ url('ankur-saini-founder-visawizer') }}">
                    Know More
                    <span class="icon-wrap">
                        <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                    </span>
                </a>
            </div>
            <div class="col-lg-6 hero-img-block ps-lg-5 mt-5 mt-lg-0">
                <div class="hero-img-main" style="position:relative;">
                <img src="{{ url('img/ankur-saini.jpeg') }}" alt="Resilient minds" loading="eager" fetchpriority="high" decoding="async">
                <div class="hero-float-card2 d-lg-block d-none">
                    <div class="icon-wrap"><i class="fa fa-user"></i></div>
                    <!-- <div class="lbl2">Registered Migration Agent</div> -->
                    <div class="val">Ankur Saini</div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- skilled-sponsored-section start -->
    <section class="volunteer-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80">
        <div class="container">
            <div class="text-center m-b-50 m-b-xs-40">
                <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span class="bg-p">Work in Australia</span>
                </div>
                <div class="common-title mb-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>Skilled and employer-sponsored migration pathways, explained clearly</h2>
                </div>
                <div class="b-line m-auto"></div>
                <p class="m-t-20 m-b-10" style="font-size: 20px; font-weight: 600; line-height: 1.5;">Whether you are applying independently or through an employer, we help you understand the pathway, process, and next action.</p>
                <p style="font-size: 16px; font-weight: 400; line-height: 1.75; color: #6b6b6b;">Australian migration can feel complex when visa subclasses, regional conditions, nominations, and sponsorship rules overlap. We simplify the picture by helping you understand which pathway matches your profession, employer opportunity, location, and long-term residency goals.</p>
            </div>

            <div class="row row-gap-4 justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="col-xl-6 col-md-6">
                    <div class="service-card" style="background-image: linear-gradient(90deg, var(--theme-color-3), rgba(0, 0, 0, 0)), url({{ asset('img/bg4.jpg') }});background-size: cover;background-position: center;">
                        <div class="service-top">
                            <h4>Skilled Migration</h4>
                            <i><img alt="icon" src="{{ asset('assets/images/icon/workplace-business.svg') }}"></i>
                        </div>
                        <div class="service-content">
                            <p>For applicants exploring independent, nominated, or regional pathways including 189, 190, 491, 191, and 887 options.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="service-card" style="background-image: linear-gradient(90deg, rgb(0, 0, 0, 0), var(--theme-color-3)), url({{ asset('img/bg3.png') }});background-size: cover;background-position: center;">
                        <div class="service-top">
                            <i><img alt="icon" src="{{ asset('assets/images/icon/corporate-governance.svg') }}"></i>
                            <h4 class="text-end">Employer Sponsored</h4>
                        </div>
                        <div class="service-content">
                            <p class="text-end" style="margin-left: auto;">For applicants and employers looking at 482, 186, 494, DAMA, short-stay specialist options, and related sponsorship pathways.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center m-t-40">
                <p class="m-b-25">Need help choosing between skilled and sponsored options? We help compare routes based on eligibility, timelines, and long-term goals.</p>
                <a class='e-primary-btn has-icon is-hover-white' href="{{ url('contact-us') }}">
                    Check Your Options
                    <span class="icon-wrap">
                        <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <!-- skilled-sponsored-section end -->

    <!-- completed-project start -->
    <section class="completed-project-section">
        <div class="completed-project-top" style="background-image: linear-gradient(45deg, #66003f78), url({{ asset('img/why-choose.png') }}">
            <div class="container">
                <div class="row align-items-center m-b-60 m-b-xs-40">
                    <div class="col-md-9">
                        <div class="common-subtitle style-color-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <span class="text-white"><strong>More pathways, one trusted team</strong></span>
                        </div>
                        <div class="common-title style-color-light text-start m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                            <h2 class="fs-1 pb-3">Support for family visas, visitor visas, and complex matters</h2>
                            <div class="w-line"></div>
                            <p class="text-white m-t-15" style="max-width: 90%;">Some applications are emotional. Some are urgent. Some are complicated. All of them deserve careful guidance.</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-md-end">
                        <a class='e-primary-btn has-icon active' data-aos-delay='600' data-aos-duration='1000' data-aos='fade-up' href="{{ url('contact-us') }}">Speak to a Visa Expert
                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                    </div>
                </div>
            </div>
            <div class="shape-8"><img alt="shape-8" src="{{ asset('assets/img/shapes/shape-8.webp') }}"></div>
            <div class="shape-9"><img alt="shape-9" src="{{ asset('assets/img/shapes/shape-9.webp') }}"></div>
        </div>
        <div class="completed-project-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="project-card">
                            <div class="thumb">
                                <a href="#"><img alt="thumb-11" src="{{ asset('img/family-visa1.png') }}"></a>
                                <div class="content">
                                    <h5>Family Visas</h5>
                                    <p>Partner, parent, child, and relative visa pathways handled with clarity and care.</p>
                                    <div class="details-btn">
                                        <a class='e-primary-btn is-hover-white has-icon' href="{{ url('contact-us') }}">Learn More
                                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-card">
                            <div class="thumb">
                                <a href="#"><img alt="thumb-11" src="{{ asset('img/visitor-visa1.png') }}"></a>
                                <div class="content">
                                    <h5>Visitor Visas</h5>
                                    <p>Visitor, holiday, ETA, eVisitor, and transit support for seamless short-term travel plans.</p>
                                    <div class="details-btn">
                                        <a class='e-primary-btn is-hover-white has-icon' href="{{ url('contact-us') }}">Learn More
                                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-card">
                            <div class="thumb">
                                <a href="#"><img alt="thumb-11" src="{{ asset('img/appeals.png') }}"></a>
                                <div class="content">
                                    <h5>Appeals &amp; Reviews</h5>
                                    <p>Guidance for review matters and other complex visa situations where careful strategy matters.</p>
                                    <div class="details-btn">
                                        <a class='e-primary-btn is-hover-white has-icon' href="{{ url('contact-us') }}">Learn More
                                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- completed-project end -->


    <!-- how-we-work-section start -->
    <section class="services-section-3 p-t-100 p-b-100 p-t-xs-80 p-b-xs-80">
        <div class="container">
            <div class="row m-b-50 m-b-xs-40">
                <div class="col-xl-12">
                    <div class="section-top-9 text-center">
                        <div class="common-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <span class="bg-p">Process</span>
                        </div>
                        <div class="common-title mb-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                            <h2>A clearer way to move through the visa journey</h2>
                        </div>
                        <div class="b-line m-auto"></div>
                        <p class="m-t-20 m-b-0" style="font-size: 20px; font-weight: 600; line-height: 1.5;">
                            We make the process easier by breaking it into practical, manageable steps.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="service-card-3 h-100">
                        <div class="service-top">
                            <h4>Consultation</h4>
                            <i class="fa-light fa-comments"></i>
                        </div>
                        <div class="service-content">
                            <p>We understand your background, goal, and current visa situation.</p>
                        </div>
                        <div class="i-shape">
                            <h1>01</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="service-card-3 h-100">
                        <div class="service-top">
                            <h4>Pathway Review</h4>
                            <i class="fa-light fa-route"></i>
                        </div>
                        <div class="service-content">
                            <p>We identify suitable options and explain the requirements clearly.</p>
                        </div>
                        <div class="i-shape">
                            <h1>02</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="service-card-3 h-100">
                        <div class="service-top">
                            <h4>Documentation &amp; Preparation</h4>
                            <i class="fa-light fa-file-lines"></i>
                        </div>
                        <div class="service-content">
                            <p>We help organise documents, address gaps, and prepare the application carefully.</p>
                        </div>
                        <div class="i-shape">
                            <h1>03</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="service-card-3 h-100">
                        <div class="service-top">
                            <h4>Submission &amp; Ongoing Guidance</h4>
                            <i class="fa-light fa-circle-check"></i>
                        </div>
                        <div class="service-content">
                            <p>We stay involved through submission, updates, and next-step planning.</p>
                        </div>
                        <div class="i-shape">
                            <h1>04</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center m-t-40">
                <p style="font-size: 16px; font-weight: 400; line-height: 1.75;" class="bg-p">
                    No guesswork. No confusing jargon. Just a more structured path forward.
                </p>
            </div>
        </div>
    </section>
    <!-- how-we-work-section end -->

    <!-- why-clients-choose-section start -->
    <section class="services-section-3 p-t-100 p-b-100 p-t-xs-80 p-b-xs-80" style="background-color: #e5e5e5;">
        <div class="container">
            <div class="row row-gap-5 align-items-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="section-top-9" style="background-image: linear-gradient(#31339170), url('{{ asset('img/trust.png')  }}'); max-height: 600px;padding: 20px;background-size: cover;background-position: center;border-radius: 10px;">
                        <div class="common-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <span class="bg-p">Trust</span>
                        </div>
                        <div class="common-title mb-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                            <h2 class="text-white">Guidance that is responsive, practical, and focused on outcomes</h2>
                        </div>
                        <div class="w-line m-auto"></div>
                        <p class="m-t-20 m-b-10 text-white" style="font-size: 20px; font-weight: 600; line-height: 1.5;">
                            Clients come to us for clarity. They stay with us because they feel supported at every stage.
                        </p>
                        <p style="font-size: 16px; font-weight: 400; line-height: 1.75; color: #fff;">
                            Migration decisions affect education, family, work, and future plans. That is why our clients value responsiveness, straightforward guidance, and a process that feels more personal than transactional.
                        </p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="row row-gap-4 singla" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        <div class="col-md-6">
                            <div class="service-card-3">
                                <div class="service-top">
                                    <h4>Clear Communication</h4>
                                    <i class="fa-light fa-comments" style="background: var(--theme-color-3);"></i>
                                </div>
                                <div class="service-content">
                                    <p>Understand what matters, what is needed, and what comes next.</p>
                                </div>
                                <div class="i-shape"><h1>01</h1></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-card-3">
                                <div class="service-top">
                                    <h4>Tailored Advice</h4>
                                    <i class="fa-light fa-user-pen" style="background: var(--theme-color-3);"></i>
                                </div>
                                <div class="service-content">
                                    <p>Recommendations shaped around your case, not generic assumptions.</p>
                                </div>
                                <div class="i-shape"><h1>02</h1></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-card-3">
                                <div class="service-top">
                                    <h4>Broad Pathway Coverage</h4>
                                    <i class="fa-light fa-route" style="background: var(--theme-color-3);"></i>
                                </div>
                                <div class="service-content">
                                    <p>Support across study, family, skilled, sponsored, visitor, and review matters.</p>
                                </div>
                                <div class="i-shape"><h1>03</h1></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-card-3">
                                <div class="service-top">
                                    <h4>Action-Focused Guidance</h4>
                                    <i class="fa-light fa-bullseye-arrow" style="background: var(--theme-color-3);"></i>
                                </div>
                                <div class="service-content">
                                    <p>We help turn confusion into a practical next step.</p>
                                </div>
                                <div class="i-shape"><h1>04</h1></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why-clients-choose-section end -->

    <!-- resources-knowledge-hub-section start -->
    <section class="services-we-offer-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80" style="background-image: linear-gradient(45deg, #31339170), url('{{ asset('img/bg.png') }}');background-position: bottom;">
        <div class="container">
            <div class="text-center m-b-50 m-b-xs-40">
                <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span class="text-white">Resources</span>
                </div>
                <div class="common-title style-color-light mb-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>Learn before you apply</h2>
                </div>
                <div class="w-line m-auto"></div>
                <p class="text-white m-t-20 m-b-10" style="font-size: 20px; font-weight: 600; line-height: 1.5;">
                    Explore useful guidance, updates, and practical information to make better migration decisions.
                </p>
                <p class="text-white" style="font-size: 16px; font-weight: 400; line-height: 1.75; opacity: 0.92; max-width: 980px; margin: 0 auto;">
                    The best applications begin with better understanding. Our resource hub is designed to help you learn about visa categories, common mistakes, changing rules, and important planning decisions before you begin.
                </p>
            </div>

            <div class="row row-gap-4 dbla" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <div class="col-xl-3 col-md-6">
                    <div class="service-card-3">
                        <div class="service-top">
                            <h4>Visa Guides</h4>
                            <i class="fa-light fa-passport"></i>
                        </div>
                        <div class="service-content">
                            <p>Straightforward explainers for key pathways and subclasses.</p>
                        </div>
                        <div class="i-shape"><h1>01</h1></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card-3">
                        <div class="service-top">
                            <h4>Checklists</h4>
                            <i class="fa-light fa-list-check"></i>
                        </div>
                        <div class="service-content">
                            <p>Know what documents and details are usually important.</p>
                        </div>
                        <div class="i-shape"><h1>02</h1></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card-3">
                        <div class="service-top">
                            <h4>Videos &amp; Webinars</h4>
                            <i class="fa-light fa-circle-play"></i>
                        </div>
                        <div class="service-content">
                            <p>Helpful content for applicants who prefer visual guidance.</p>
                        </div>
                        <div class="i-shape"><h1>03</h1></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-card-3">
                        <div class="service-top">
                            <h4>Blogs &amp; Updates</h4>
                            <i class="fa-light fa-newspaper"></i>
                        </div>
                        <div class="service-content">
                            <p>Stay informed about changes, timelines, and practical migration topics.</p>
                        </div>
                        <div class="i-shape"><h1>04</h1></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- resources-knowledge-hub-section end -->

    @include('partials.testi')

    @include('partials.commonCta', [
        'ctaEyebrow' => 'Plan before you apply',
        'ctaHeading' => 'Ready to take the next step toward Australia?',
        'ctaLead' => 'Book a consultation with Visawizer and get clarity on your options, requirements, and best path forward.',
        'ctaPrimaryLabel' => 'Book Appointment',
        'ctaPrimaryUrl' => url('book-appointment'),
        'ctaSecondaryLabel' => 'Contact Visawizer',
        'ctaSecondaryUrl' => url('contact-us'),
    ])

    @include('partials.faq')
    @include('partials.blogs')

@endsection    