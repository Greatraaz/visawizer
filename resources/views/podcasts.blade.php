@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')

<style type="text/css">
.testimonial-card-2 .thumb img {
    width: 220px;
}
</style>
<section class="testimonial-section-2 p-t-120 p-t-md-100 p-t-xs-80 p-b-80 m-b-80" style="background-image: url(assets/img/bg/testimonial-bg.webp)">
    <div class="container">
        <div class="row text-center m-b-60 m-b-xs-40">
            <div class="col-md-12 m-b-xs-20">
                <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span>Podcasts Practitioner Interviews</span>
                </div>
                <div class="common-title m-b-0 style-color-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>Why Leaders Trust Visawizer</h2>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
            <div class="col-xl-6 m-b-30">
                <div class="testimonial-card-2">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/testimonial1.webp') }}" alt="Visawizer podcast testimonial from Neha Sharma" width="220" height="220" loading="lazy" decoding="async">
                    </div>
                    <div class="card-content">
                        <div class="review">
                            <p>Visawizertruly transformed the way our team approaches compliance and ethical decisions. Their training sessions were not only insightful but incredibly practical. I finally feel confident that our organization is moving in the right direction.</p>
                        </div>
                        <div class="author-details">
                            <h5>Neha Sharma</h5>
                            <h6>HR Manager, Delhi</h6>
                        </div>
                    </div>
                    <div class="quote-icon"><img src="{{ asset('assets/img/icons/icon-5.svg') }}" alt="Quote icon" width="40" height="40" loading="lazy" decoding="async"></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="testimonial-card-2">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/testimonial2.webp') }}" alt="Visawizer podcast testimonial from Shivam Gupta" width="220" height="220" loading="lazy" decoding="async">
                    </div>
                    <div class="card-content">
                        <div class="review">
                            <p>The consultants at Visawizerare experts who genuinely care. Their guidance helped our team handle sensitive situations with clarity and fairness. Their approach is modern, practical, and perfectly tailored to today’s corporate challenges.</p>
                        </div>
                        <div class="author-details">
                            <h5>Shivam Gupta</h5>
                            <h6>Senior Analyst, Bengaluru</h6>
                        </div>
                    </div>
                    <div class="quote-icon"><img src="{{ asset('assets/img/icons/icon-5.svg') }}" alt="Quote icon" width="40" height="40" loading="lazy" decoding="async"></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="testimonial-card-2">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/testimonial3.webp') }}" alt="Visawizer podcast testimonial from Aditi Mehra" width="220" height="220" loading="lazy" decoding="async">
                    </div>
                    <div class="card-content">
                        <div class="review">
                            <p>We struggled with internal communication, but after partnering with Visawizer, everything became structured and transparent. Their ethical frameworks are easy to implement and made a real difference in our daily processes.</p>
                        </div>
                        <div class="author-details">
                            <h5>Aditi Mehra</h5>
                            <h6>Operations Lead, Mumbai</h6>
                        </div>
                    </div>
                    <div class="quote-icon"><img src="{{ asset('assets/img/icons/icon-5.svg') }}" alt="Quote icon" width="40" height="40" loading="lazy" decoding="async"></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="testimonial-card-2">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/testimonial4.webp') }}" alt="Visawizer podcast testimonial from Laxman Singh" width="220" height="220" loading="lazy" decoding="async">
                    </div>
                    <div class="card-content">
                        <div class="review">
                            <p>I was impressed with their deep understanding of workplace ethics. The customised compliance training they provided elevated our entire department’s performance. Visawizeris not just a service provider they are growth partners.</p>
                        </div>
                        <div class="author-details">
                            <h5>Laxman Singh</h5>
                            <h6>Compliance Officer, Ahmedabad</h6>
                        </div>
                    </div>
                    <div class="quote-icon"><img src="{{ asset('assets/img/icons/icon-5.svg') }}" alt="Quote icon" width="40" height="40" loading="lazy" decoding="async"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 