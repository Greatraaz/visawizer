@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')
    <section class="why-us-section-3 p-t-100 p-b-md-100 p-t-xs-80 p-b-xs-80">
        <div class="container">
            <div class="row align-items-center p-b-80">
                <div class="col-xl-6">
                    <div class="thumb-wrapper" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <div class="thumb-1">
                            <img alt="thumb" src="assets/images/rb1.webp">
                        </div>
                        <div class="thumb-2"><img alt="thumb" src="assets/images/rb2.webp"></div>
                        <div class="shape-1"><img alt="shape" src="assets/img/shapes/shape-24.webp"></div>
                        <div class="shape-2"><img alt="shape" src="assets/img/shapes/shape-25.webp"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-us-content why-us-content-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <div class="common-subtitle">
                             <span>Why Choose Us</span>
                        </div>
                        <div class="common-title text-start">
                            <h2>Some Reasons to Choose Econest Organization</h2>
                        </div>
                        <div class="text">
                            <p>The implant fixture is first placed, so that it ilikely to then a dental prosthetic is added then dental prosthetic occaecat laborum.</p>
                        </div>
                        <div class="services">
                            <div class="service-left">
                                <div class="service">
                                    <i class="fa-solid fa-check"></i>
                                    <p>Specialized Company</p>
                                </div>
                                <div class="service">
                                    <i class="fa-solid fa-check"></i>
                                    <p>Licensed & Insured</p>
                                </div>
                            </div>
                            <div class="service-right">
                                <div class="service">
                                    <i class="fa-solid fa-check"></i>
                                    <p>Dependable Services</p>
                                </div>
                                <div class="service">
                                    <i class="fa-solid fa-check"></i>
                                    <p>Day Scheduling</p>
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

    <section class="our-events-section-2 p-t-120 p-b-120 p-t-md-100 p-b-md-100 p-t-xs-80 p-b-xs-80 m-b-80">
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
                    <a href="{{ url('contact-us') }}"><img alt="thumb" src="assets/images/ethical-theory.webp"></a>
                </div>
            </div>
            <div class="col-lg-6 adjusted-col-gap">
                <div class="card-content">
                    <div class="category">
                        <p>Ethics Training</p>
                    </div>
                    <div class="event-card-title">
                        <h2><a href="{{ url('contact-us') }}">Two-Day Management Development Program on Business Ethics</a></h2>
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
    
<style type="text/css">
@media (min-width: 1200px) and (max-width: 1399px) {
    .why-us-section-5 .thumb .thumb-2 {
        width: 60%;
        bottom: -27%;
        right: 50%;
    }
}
</style>
    <section class="why-us-section-5 p-b-60 p-b-xs-80">
        <div class="container">
            <div class="row row-gap-5 align-items-center">
                <div class="col-xl-6">
                    <div class="why-us-content-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <div class="common-subtitle text-uppercase">
                            <span>Why Choose Us</span>
                        </div>
                        <div class="common-title text-start">
                            <h2>We take practical steps for 100% transparency.</h2>
                        </div>
                        <div class="text">
                            <p>We directly support communities in need, ensuring every donation makes a tangible difference.</p>
                        </div>
                        <div class="services">
                            <div class="service-left">
                                <div class="service">
                                    <i class="fa-solid fa-check"></i>
                                    <p>Healthcare Access</p>
                                </div>
                            </div>
                            <div class="service-right">
                                <div class="service">
                                    <i class="fa-solid fa-check"></i>
                                    <p>Dependable Services</p>
                                </div>
                            </div>
                        </div>
                        <div class="services">
                            <div class="service-left">
                                <div class="service">
                                    <i class="fa-solid fa-check"></i>
                                    <p>Education Support</p>
                                </div>
                            </div>
                            <div class="service-right">
                                <div class="service">
                                    <i class="fa-solid fa-check"></i>
                                    <p>Specialized Company</p>
                                </div>
                            </div>
                        </div>
                        <div class="annual-donation-wrap">
                            <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">Get in Touch <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="thumb px-xl-5 left" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <div class="thumb-1"><img alt="thumb-1" src="assets/images/au1.webp"></div>
                        <div class="thumb-2">
                            <div class="btn-wrapped-thumb">
                                <img alt="thumb-2" src="assets/images/au2.webp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection 