@extends('layouts.frontend')
@section('content') 
<style type="text/css">
.thumb img{
	object-fit: cover;
}
.content-top h3 {
    line-height: 22px !important;
    min-height: 70px;
}
.service-card-3.coyrs {
    margin-bottom: 20px;
}
</style>
@include('partials.breadcrumb')

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
                        
                        <span>Principles That Shape Responsible Action</span>
                    </div>

                    <!-- Title -->
                    <div class="common-title text-start">
                        <h2>Foundational principles that turn ethics into everyday practice.</h2>
                    </div>

                    <!-- Principles List -->
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p><strong>Collaboration</strong><br>
                                Harnessing diverse perspectives and collective intelligence to drive ethical progress.</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p><strong>Empowerment</strong><br>
                                Enabling individuals and institutions to act with integrity, purpose, and moral courage.</p>
                            </div>
                        </div>

                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p><strong>Stakeholder Engagement</strong><br>
                                Making balanced, inclusive decisions grounded in transparency and shared responsibility.</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p><strong>Ethical Accountability</strong><br>
                                Ensuring responsibility for actions, outcomes, and impacts across the value chain.</p>
                            </div>
                        </div>
                    </div>

                    <!-- CTA & Micro-Info -->
                    <div class="annual-donation-wrap">
                        <a class='e-primary-btn has-icon' href="{{ url('about-us') }}">
                            About Us
                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="services-we-offer-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80 m-b-80" style="background-image: linear-gradient(45deg, #66003f9e), url('assets/images/home-banner-1.webp')">
    <div class="container">
        <div class="text-center m-b-50 m-b-xs-40">
            <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <img alt="icon" src="assets/img/icons/icon-1.svg" style="background: #fff;border-radius: 5px;"> <span>Learn It. Live It. Teach It</span>
            </div>
            <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <h2>University courses, executive modules, and certifications</h2>
            </div>
        </div>
        <div class="row">
            @php 
            $i = 1;
            @endphp
            @forelse ($courses as $node)
            <div class="col-md-4">
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
                            </div><a class='e-primary-btn has-icon d-btn' href="{{ url('course/'.$node->slug) }}">View Details <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                        </div>
                    </div>
                    <div class="card-number-2">
                        <h1>{{ $i }}</h1>
                    </div>
                </div>
            </div>
            @php $i++; @endphp
            @empty
            <p>No courses found.</p>
            @endforelse
        </div>
    </div>
</section>

@include('partials.faq')
@include('partials.testi')
@endsection 