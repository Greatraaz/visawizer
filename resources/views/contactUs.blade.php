@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')
    <section class="services-section p-t-120">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                <div class="col-xl-4">
                    <div class="service-card">
                        <div class="service-top">
                            <i class="fa-light fa-location-dot"></i>
                        </div>
                        <div class="service-content">
                            <p>{{ config('site.address1') }}</p>
                        </div>
                        <div class="i-shape">
                            <i class="fa-light fa-location-dot"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="service-card">
                        <div class="service-top">
                            <i class="fa-light fa-phone-volume"></i>
                        </div>
                        <div class="service-content">
                            <p>{{ config('site.phone1') }}
                            {{ config('site.phone2') }} </p>
                            <p></p>
                        </div>
                        <div class="i-shape">
                            <i class="fa-light fa-phone-volume"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="service-card">
                        <div class="service-top">
                            <i class="fa-light fa-envelope"></i>
                        </div>
                        <div class="service-content">
                            <p>{{ config('site.email1') }}
                            {{ config('site.email2') }}</p>
                        </div>
                        <div class="i-shape">
                            <i class="fa-light fa-envelope"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-section end -->

    <!-- contact-section start -->
    <div class="contact-section p-t-120 p-b-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="contact-form-wrap" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <h3>Get in touch with our team</h3>
                        <p>Fill out the form and feel free to say !!</p>
                        <form id="contactForm">
                            @csrf
                            <div class="row form-row">
                                <div class="col-xl-6">
                                    <div class="input-wrap">
                                        <input type="text" placeholder="Full Name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input-wrap">
                                        <input type="tel" placeholder="Phone Number" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-xl-6">
                                    <div class="input-wrap">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input-wrap">
                                        <input type="text" placeholder="Your City" name="city">
                                    </div>
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-xl-12">
                                    <div class="select-wrap">
                                        <select name="course">
                                            <option value="">Select Topic</option>
                                            <option>Two-Day MDP on Business Ethics</option>
                                            <option>Foundational Certificate in Business Ethics</option>
                                            <option>Ethical Leadership Consulting</option>
                                            <option>Workshops, Seminars & Capacity Building</option>
                                            <option>Campus & Institutional Initiatives</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-icon">
                                            <i class="fa-regular fa-angle-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="text" name="bot_field" class="d-none">
                            <input type="hidden" name="formName" value="Contact Page">
                            <div class="row mt-3">
                                <div class="col-xl-12">
                                    <div class="input-wrap">
                                        <textarea placeholder="Say Something..." name="message"></textarea>
                                    </div>
                                    <div class="mb-3 text-start">
                                        <input type="checkbox" required=""> By submitting,I confirm my acceptance of the T & C and Privacy Policy.<br>
                                        <input type="checkbox"> i'm excited to receive updates via Call/SMS/RCS/WhatsApp
                                    </div>
                                    <div class="input-button">
                                        <button type="submit" class="e-primary-btn has-icon">
                                            <span class="btext">Click</span>
                                            <span class="icon-wrap">
                                                <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 