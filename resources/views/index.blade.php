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
</style>
   <!-- hero-section start -->
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
<!-- hero-section end -->


 <!-- about-us-section start -->
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
                                        <span class="green"><span class="green">Ethics<span class="golden">4</span>Work</span></span> is a community of educators, researchers, business leaders, and ethics practitioners committed to embedding ethical thinking into everyday decision-making. 
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

    <!-- what-we-do-section start -->
    <section class="what-we-do-section m-t-80 p-t-100 p-b-120 p-b-md-100 p-t-xs-80 p-b-xs-80" style="background-image: linear-gradient(45deg, #000000e0), url({{ asset('assets/images/banner.jpg') }})">
        <div class="container">
            <div class="section-top-2">
                <div class="left">
                    <div class="common-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span>Solutions</span>
                    </div>
                    <div class="common-title text-start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <h2>Start with the pathway that fits your goal</h2>
                    </div>
                </div>
                <div class="right" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <p>Choose your direction and we will help you navigate the next step.</p>
                </div>
            </div>
            <div class="row row-gap-md-5 row-gap-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="project-card">
                        <div class="thumb">
                            <a href="{{ url('service/advisory-consulting') }}">
                                <img src="{{ asset('assets/images/from-policy-to-practice/1.webp') }}" alt="thumb-14"/>
                            </a>
                            <div class="content">
                                <h5>Study in Australia</h5>
                                <p>Admissions, course guidance, student visas, and post-study options.</p>
                                <div class="details-btn">
                                    <a class='e-primary-btn has-icon is-hover-white' href="{{ url('service/advisory-consulting') }}">
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
                            <a href="{{ url('service/training-workshops') }}">
                                <img src="{{ asset('assets/images/from-policy-to-practice/2.jpg') }}" alt="thumb-15"/>
                            </a>
                            <div class="content">
                                <h5>Visit Australia</h5>
                                <p>Tourist, ETA, eVisitor, transit, and holiday visa support.</p>
                                <div class="details-btn">
                                    <a class='e-primary-btn has-icon is-hover-white' href="{{ url('service/training-workshops') }}">
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
                            <a href="{{ url('service/certification-programs') }}">
                                <img src="{{ asset('assets/images/from-policy-to-practice/3.webp') }}" alt="thumb-16"/>
                            </a>
                            <div class="content">
                                <h5>Skilled Migration</h5>
                                <p>Independent, nominated, and regional migration pathways.</p>
                                <div class="details-btn">
                                    <a class='e-primary-btn has-icon is-hover-white' href="{{ url('service/certification-programs') }}">
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
                            <a href="{{ url('service/measure-maintain') }}">
                                <img src="{{ asset('assets/images/from-policy-to-practice/4.jpg') }}" alt="thumb-14"/>
                            </a>
                            <div class="content">
                                <h5>Employer Sponsored</h5>
                                <p>482, 186, 494, DAMA, and other employer-led visa options.</p>
                                <div class="details-btn">
                                    <a class='e-primary-btn has-icon is-hover-white' href="{{ url('service/measure-maintain') }}">
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
                            <a href="{{ url('service/centres-accreditation') }}">
                                <img src="{{ asset('assets/images/from-policy-to-practice/5.webp') }}" alt="thumb-15"/>
                            </a>
                            <div class="content">
                                <h5>Family Visas</h5>
                                <p>Partner, parent, child, and relative visa pathways.</p>
                                <div class="details-btn">
                                    <a class='e-primary-btn has-icon is-hover-white' href="{{ url('service/centres-accreditation') }}">
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
                            <a href="{{ url('service/coaching-mentoring') }}">
                                <img src="{{ asset('assets/images/from-policy-to-practice/6.jpg') }}" alt="thumb-16"/>
                            </a>
                            <div class="content">
                                <h5>Appeals & Protection</h5>
                                <p>Support for complex matters, review pathways, and humanitarian cases.</p>
                                <div class="details-btn">
                                    <a class='e-primary-btn has-icon is-hover-white' href="{{ url('service/coaching-mentoring') }}">
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
        <div class="shape-10">
            <img src="{{ asset('assets/img/shapes/shape-10.webp') }}" alt="shape-10"/>
        </div>
        <div class="shape-11">
            <img src="{{ asset('assets/img/shapes/shape-11.webp') }}" alt="shape-11"/>
        </div>
    </section>
    <!-- what-we-do-section end -->

<!-- why-us-section start -->
<section class="why-us-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80" style="background-image: url({{ asset('assets/img/bg/why-us-bg.webp') }})">
    <div class="container">
        <div class="row row-gap-5 align-items-center">

            <!-- Left Visuals -->
            <div class="col-xl-6">
                <div class="thumb px-xl-5 left" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="thumb-1">
                        <img alt="thumb-1" src="{{ asset('assets/images/principles-image-1.webp') }}">
                        <div class="s-shape-1"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-14.webp') }}"></div>
                    </div>
                    <div class="thumb-2"><img alt="thumb-2" src="{{ asset('assets/images/principles-image-2.webp') }}"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb">
                            <img alt="thumb-3" src="{{ asset('assets/images/principles-image-3.webp') }}">
                            <div class="s-shape-1"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-13.webp') }}"></div>
                            <div class="s-shape-2"><img alt="shape-2" src="{{ asset('assets/img/shapes/shape-15.webp') }}"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-xl-6">
                <div class="why-us-content" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">

                    <!-- Subtitle -->
                    <div class="common-subtitle">
                        <span>Why Visawizer</span>
                    </div>

                    <!-- Title -->
                    <div class="common-title text-start">
                        <h2>Practical migration guidance built around real goals</h2>
                    </div>

                    <p class="m-t-15 m-b-15">Not just forms and documents. Advice that connects your visa, study, work, and settlement plans.</p>
                    <p class="m-b-25">Every migration journey is different. Some clients need help choosing the right course and institution. Others need support with employer sponsorship, partner visas, regional pathways, or appeal matters. Our approach is to understand your situation first, then guide you with clarity, transparency, and a practical action plan.</p>

                    <!-- Principles List -->
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
<!-- why-us-section end -->


    <!-- our-camping start -->
    <section class="our-camping-section overflow-x-clip p-t-100 p-b-100 p-t-xs-80 p-b-xs-80">
        <div class="container">
            <div class="row m-b-50 m-b-xs-40">
                <div class="col-xl-12">
                    <div class="text-center">
                        <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <span>Study</span>
                        </div>
                        <div class="common-title mb-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                            <h2>Build your future through education in Australia</h2>
                        </div>
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
                                            <img alt="thumb-2" src="{{ asset('assets/images/ethical-theories.webp') }}">
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
                                <div class="swiper-slide">
                                    <div class="camping-card">
                                        <div class="thumb">
                                            <img alt="thumb-2" src="{{ asset('assets/images/stakeholder-managemt.webp') }}">
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
                                <div class="swiper-slide">
                                    <div class="camping-card">
                                        <div class="thumb">
                                            <img alt="thumb-2" src="{{ asset('assets/images/csr-sustainability.webp') }}">
                                        </div>
                                        <div class="content">
                                            <div class="content-top">
                                                <div class="title">
                                                    <h3>Post-Study<br> Planning</h3>
                                                </div>
                                                <div class="text">
                                                    <p>Explore graduate visa options and next steps after study.</p>
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
                                <div class="swiper-slide">
                                    <div class="camping-card">
                                        <div class="thumb">
                                            <img alt="thumb-2" src="{{ asset('assets/images/giving-voice.webp') }}">
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
                <a class='e-primary-btn has-icon is-hover-white' href="{{ url('contact') }}">
                    Explore Study Pathways
                    <span class="icon-wrap">
                        <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <!-- our-camping end -->

    <!-- skilled-sponsored-section start -->
    <section class="volunteer-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80">
        <div class="container">
            <div class="text-center m-b-50 m-b-xs-40">
                <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span>Work in Australia</span>
                </div>
                <div class="common-title mb-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>Skilled and employer-sponsored migration pathways, explained clearly</h2>
                </div>
                <p class="m-t-20 m-b-10" style="font-size: 20px; font-weight: 600; line-height: 1.5;">Whether you are applying independently or through an employer, we help you understand the pathway, process, and next action.</p>
                <p style="font-size: 16px; font-weight: 400; line-height: 1.75; color: #6b6b6b;">Australian migration can feel complex when visa subclasses, regional conditions, nominations, and sponsorship rules overlap. We simplify the picture by helping you understand which pathway matches your profession, employer opportunity, location, and long-term residency goals.</p>
            </div>

            <div class="row row-gap-4 justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="col-xl-6 col-md-6">
                    <div class="service-card">
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
                    <div class="service-card">
                        <div class="service-top">
                            <h4>Employer Sponsored</h4>
                            <i><img alt="icon" src="{{ asset('assets/images/icon/corporate-governance.svg') }}"></i>
                        </div>
                        <div class="service-content">
                            <p>For applicants and employers looking at 482, 186, 494, DAMA, short-stay specialist options, and related sponsorship pathways.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center m-t-40">
                <p class="m-b-25">Need help choosing between skilled and sponsored options? We help compare routes based on eligibility, timelines, and long-term goals.</p>
                <a class='e-primary-btn has-icon is-hover-white' href="{{ url('contact') }}">
                    Check Your Options
                    <span class="icon-wrap">
                        <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <!-- skilled-sponsored-section end -->

    <!-- volunteer-section start -->
    <section class="volunteer-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80">
        <div class="container">
            <div class="text-center m-b-50 m-b-xs-40">
                <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span>Where We Do the Work</span>
                </div>
                <div class="common-title mb-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>Ethics across functions, sectors, and society</h2>
                </div>
            </div>
            
            <div class="row row-gap-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="service-top">
                            <h4>Workplace & Business</h4>
                            <i><img alt="icon" src="{{ asset('assets/images/icon/workplace-business.svg') }}"></i>
                        </div>
                        <div class="service-content">
                            <p>Exploring leadership, teamwork, innovation, and workplace transformation strategies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="service-top">
                            <h4>AI & Technology</h4>
                            <i><img alt="icon" src="{{ asset('assets/images/icon/ai-technology.svg') }}"></i>
                        </div>
                        <div class="service-content">
                            <p>Advancing automation, data intelligence, and the digital future responsibly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="service-top">
                            <h4>Environment & Sustainability</h4>
                            <i><img alt="icon" src="{{ asset('assets/images/icon/environment.svg') }}"></i>
                        </div>
                        <div class="service-content">
                            <p>Promoting green innovation, climate action, and sustainable growth worldwide.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="service-top">
                            <h4>Marketing & Sales</h4>
                            <i><img alt="icon" src="{{ asset('assets/images/icon/marketing-sales.svg') }}"></i>
                        </div>
                        <div class="service-content">
                            <p>Empowering brands through strategy, creativity, and customer engagement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="service-top">
                            <h4>Corporate Governance</h4>
                            <i><img alt="icon" src="{{ asset('assets/images/icon/corporate-governance.svg') }}"></i>
                        </div>
                        <div class="service-content">
                            <p>Ensuring ethics, accountability, and transparency in business leadership.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="service-top">
                            <h4>Research & Publications</h4>
                            <i><img alt="icon" src="{{ asset('assets/images/icon/research.svg') }}"></i>
                        </div>
                        <div class="service-content">
                            <p>Sharing data-driven insights, reports, and academic knowledge.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="service-top">
                            <h4>Finance & Risk</h4>
                            <i><img alt="icon" src="{{ asset('assets/images/icon/finance-risk.svg') }}"></i>
                        </div>
                        <div class="service-content">
                            <p>Managing growth, compliance, and emerging risks in finance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="service-top">
                            <h4>Media & Journalism</h4>
                            <i><img alt="icon" src="{{ asset('assets/images/icon/media.svg') }}"></i>
                        </div>
                        <div class="service-content">
                            <p>Delivering truthful, ethical, and impactful stories globally.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        <div class="service-top">
                            <h4>Supply Chain & Procurement</h4>
                            <i><img alt="icon" src="{{ asset('assets/images/icon/scp.svg') }}"></i>
                        </div>
                        <div class="service-content">
                            <p>Creating efficient, ethical, and resilient global supply networks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- volunteer-section end -->

    <!-- completed-project start -->
    <section class="completed-project-section">
        <div class="completed-project-top" style="background-image: linear-gradient(45deg, #0060399e), url({{ asset('assets/images/home-banner-3.webp') }}">
            <div class="container">
                <div class="row align-items-end m-b-60 m-b-xs-40">
                    <div class="col-xl-6 col-lg-6 col-md-7">
                        <div class="common-subtitle style-color-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <span class="text-white">More pathways, one trusted team</span>
                        </div>
                        <div class="common-title style-color-light text-start m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                            <h2 class="fs-1">Support for family visas, visitor visas, and complex matters</h2>
                            <p class="text-white m-t-15" style="max-width: 90%;">Some applications are emotional. Some are urgent. Some are complicated. All of them deserve careful guidance.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-5 text-md-end">
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
                                <a href="#"><img alt="thumb-11" src="{{ asset('assets/images/stories-image-1.webp') }}" style="object-fit: none;object-position: -20px -3rem;"></a>
                                <div class="content">
                                    <h5>Family Visas</h5>
                                    <p>Partner, parent, child, and relative visa pathways handled with clarity and care.</p>
                                    <div class="details-btn">
                                        <a class='e-primary-btn is-hover-white has-icon' href="{{ url('contact') }}">Learn More
                                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-card">
                            <div class="thumb">
                                <a href="#"><img alt="thumb-11" src="{{ asset('assets/images/stories-image-2.webp') }}" style="object-fit: none;object-position: -10px -6rem;"></a>
                                <div class="content">
                                    <h5>Visitor Visas</h5>
                                    <p>Visitor, holiday, ETA, eVisitor, and transit support for short-term travel plans.</p>
                                    <div class="details-btn">
                                        <a class='e-primary-btn is-hover-white has-icon' href="{{ url('contact') }}">Learn More
                                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-card">
                            <div class="thumb">
                                <a href="#"><img alt="thumb-11" src="{{ asset('assets/images/stories-image-3.webp') }}" style="object-fit: none;object-position: -52px -12rem;"></a>
                                <div class="content">
                                    <h5>Appeals &amp; Protection</h5>
                                    <p>Guidance for review matters and other complex visa situations where careful strategy matters.</p>
                                    <div class="details-btn">
                                        <a class='e-primary-btn is-hover-white has-icon' href="{{ url('contact') }}">Learn More
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

   <!-- work-process-section start -->
<section class="work-process p-t-100 p-b-120 p-b-md-100 p-t-xs-80 p-b-xs-80">
    <div class="container">

        <!-- Section Header -->
        <div class="text-center m-b-50 m-b-xs-40">
            <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <span>Your Journey With <span class="green">Ethics<span class="golden">4</span>Work</span></span>
            </div>
            <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <h2>A Pathway to Ethical Excellence</h2>
            </div>
        </div>

        <div class="row row-gap-4 row-gap-md-5 align-items-center">

            <div class="col-xl-6">
                <img src="{{ asset('assets/images/contact.jpg') }}" class="rounded-3" style="height: 639px;width: 100%;object-fit: cover;">
            </div>

            <!-- Right-Side Form -->
            <div class="col-xl-6">
                <div class="contact-form-3" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                    <div class="form-content">

                        <h3>Fill the form below</h3>
                        <p style="max-width: 100%;">Connect with our team to explore programs, consulting support, or ethical leadership pathways tailored to your needs.</p>

                        <form id="contactForm" class="homeForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input class="form-control" name="name" placeholder="Full Name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input class="form-control" name="email" placeholder="Email Address" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input class="form-control" name="phone" placeholder="Contact Number" type="number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <select class="form-control" name="course">
                                            <option value="">Select Topic</option>
                                            <option>Two-Day MDP on Business Ethics</option>
                                            <option>Foundational Certificate in Business Ethics</option>
                                            <option>Ethical Leadership Consulting</option>
                                            <option>Workshops, Seminars & Capacity Building</option>
                                            <option>Campus & Institutional Initiatives</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <textarea class="form-control" name="message" placeholder="How can we support you?" rows="4"></textarea>
                            </div>
                            <input type="text" name="bot_field" class="d-none">
                            <input type="hidden" name="formName" value="Home Page">
                            <div class="mb-3 text-white">
                                <input type="checkbox" required=""> By submitting,I confirm my acceptance of the T & C and Privacy Policy.<br>
                                <input type="checkbox"> i'm excited to receive updates via Call/SMS/RCS/WhatsApp
                            </div>
                            <button class="e-primary-btn has-icon active" type="submit">
                                <span class="btext">Click</span>
                                <span class="icon-wrap">
                                    <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                </span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- work-process-section end -->

    <section class="services-we-offer-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80" style="background-image: linear-gradient(45deg, #0060399e), url('assets/images/home-banner-1.webp')">
        <div class="container">
            <div class="text-center m-b-50 m-b-xs-40">
                <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span>Learn It. Live It. Teach It</span>
                </div>
                <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>University courses, executive modules, and certifications</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="service-slider-active" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @php 
                                use App\Models\Courses;
                                $courses = Courses::orderBy('id', 'desc')->get();
                                @endphp
                                @forelse ($courses as $node)
                                <div class="swiper-slide">
                                    <div class="service-card-3 coyrs">
                                        <div class="thumb">
                                            <a href="{{ url('course/'.$node->slug) }}"><img src="{{ asset($node->image) }}" alt="{{ $node->title }}"></a>
                                        </div>
                                        <div class="content">
                                            <div class="donation-wrap">
                                                <div class="content-top">
                                                    <div class="title">
                                                        <h3><a href="{{ url('course/'.$node->slug) }}">{{ $node->title }}</a></h3>
                                                    </div>
                                                    <div class="text">
                                                        <p>{{ Str::limit(strip_tags($node->description), 80) }}</p>
                                                    </div>
                                                </div>
                                                <a class='e-primary-btn has-icon d-btn' href="{{ url('course/'.$node->slug) }}">View Details <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <p>No courses found.</p>
                                @endforelse
                            </div>
                        </div>
                        <div class="service-pagination-wrap">
                            <div class="service-pagination"></div>
                        </div>
                        <div class="service-button-prev">
                            <i class="fa-regular fa-arrow-left"></i>
                        </div>
                        <div class="service-button-next">
                            <i class="fa-regular fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.testi')
    @include('partials.blogs')

@endsection    