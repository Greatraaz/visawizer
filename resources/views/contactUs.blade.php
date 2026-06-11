@extends('layouts.frontend')
@section('content')
<style type="text/css">
    .contact-page-info-grid .service-card .service-top {
        gap: 10px;
    }
    .contact-page-info-grid .service-card .service-top h4 {
        text-transform: uppercase;
        letter-spacing: 0.03em;
        max-width: none;
        flex: 1 1 auto;
        min-width: 0;
        white-space: nowrap;
        font-size: clamp(17px, 1.65vw, 26px);
        line-height: 1.2;
    }
    @media (max-width: 360px) {
        .contact-page-info-grid .service-card .service-top h4 {
            white-space: normal;
            font-size: 16px;
        }
    }
    .contact-page-info-grid .service-card .service-content {
        min-height: 5.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .contact-page-details-exact {
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
        text-align: left;
        font-size: 0.95rem;
        line-height: 1.5;
    }
    .contact-page-details-exact .contact-page-details-line {
        display: grid;
        grid-template-columns: 3.5rem 0.35rem 1fr;
        column-gap: 0.2rem;
        align-items: baseline;
        margin: 0;
        padding: 0.4rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.18);
        color: #fff;
    }
    .contact-page-details-exact .contact-page-details-line:last-child {
        border-bottom: 0;
        padding-bottom: 0;
    }
    .contact-page-details-exact .contact-page-details-line strong {
        font-weight: 700;
        color: #fff;
    }
    .contact-page-details-exact .contact-page-details-line a {
        color: #fff;
        text-decoration: none;
        font-weight: 500;
        word-break: break-word;
    }
    .contact-page-details-exact .contact-page-details-line a:hover {
        text-decoration: underline;
        color: #f0f0f0;
    }
    .contact-page-form-intro {
        max-width: 640px;
        margin-left: auto;
        margin-right: auto;
    }
    .contact-page-follow-up section.testimonial {
        padding-top: 36px !important;
        margin-top: 0 !important;
    }
    @media (max-width: 767px) {
        .contact-page-follow-up section.testimonial {
            padding-top: 28px !important;
        }
    }
</style>
@include('partials.breadcrumb')

    <section class="volunteer-section p-t-80 p-b-70 p-t-xs-60 p-b-xs-60 contact-page-info-grid">
        <div class="container">
            <div class="text-center m-b-40 m-b-xs-32">
                <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span>Contact</span>
                </div>
                <div class="common-title mb-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>Get in touch</h2>
                </div>
                <p class="m-t-20 m-b-0" style="font-size: 18px; line-height: 1.65; color: #6b6b6b; max-width: 720px; margin-left: auto; margin-right: auto;" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                    Visit us in Melbourne, call, or email — our team is here to help with education and migration enquiries.
                </p>
            </div>

            <div class="row row-gap-4 justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="col-xl-4 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-top">
                            <h4>Address</h4>
                            <i class="fa-light fa-location-dot"></i>
                        </div>
                        <div class="service-content">
                            <p class="text-center m-0">
                                <span class="d-block">level 7/276 Flinders St, Melbourne VIC</span>
                                <span class="d-block">3000, Australia</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card contact-page-details-card h-100">
                        <div class="service-top">
                            <h4>Contact details</h4>
                            <i class="fa-light fa-phone-volume"></i>
                        </div>
                        <div class="service-content">
                            <div class="contact-page-details-exact">
                                <p class="contact-page-details-line">
                                    <strong>Email</strong><span>:</span>
                                    <a href="mailto:info@visawizer.com.au">info@visawizer.com.au</a>
                                </p>
                                <p class="contact-page-details-line">
                                    <strong>Phone</strong><span>:</span>
                                    <a href="tel:+61451951561">+61 451 951 561</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-top">
                            <h4>Office hours</h4>
                            <i class="fa-light fa-clock"></i>
                        </div>
                        <div class="service-content">
                            <p class="text-center m-0">Mon - Fri : 9:30 am&ndash;5:30 pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.contactAgentCta')

    <section class="volunteer-section contact-page-form-section p-t-100 p-b-50 p-t-xs-80 p-b-xs-50" style="background-color: #fbfbfa;">
        <div class="container">
            <div class="text-center m-b-50 m-b-xs-40">
                <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span>Send a message</span>
                </div>
                <div class="common-title mb-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <h2>We will get back to you</h2>
                </div>
                <p class="contact-page-form-intro m-t-20 m-b-0" style="font-size: 17px; line-height: 1.7; color: #6b6b6b;" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                    Guiding your journey to new beginnings in Australia with expert education and migration assistance. Share a few details and we will respond as soon as we can.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="contact-form-wrap m-b-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <form id="contactForm" aria-label="Contact enquiry form">
                            @csrf
                            <div class="row form-row">
                                <div class="col-xl-6">
                                    <div class="input-wrap">
                                        <input type="text" placeholder="Full Name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input-wrap">
                                        <input type="tel" placeholder="Phone (e.g. 0468 983 273)" name="phone">
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
                                            <option value="">Select topic</option>
                                            <option>Study in Australia / Student visa</option>
                                            <option>Graduate visa (Subclass 485)</option>
                                            <option>Visitor visa</option>
                                            <option>Skilled migration</option>
                                            <option>Employer sponsored visa</option>
                                            <option>Partner / family visa</option>
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
                                        <textarea placeholder="How can we help you?" name="message"></textarea>
                                    </div>
                                    <div class="mb-3 text-start">
                                        <input type="checkbox" required=""> By submitting, I confirm my acceptance of the T &amp; C and Privacy Policy.<br>
                                        <input type="checkbox"> I&apos;m happy to receive updates via Call/SMS/RCS/WhatsApp
                                    </div>
                                    <div class="input-button">
                                        <button type="submit" class="e-primary-btn has-icon">
                                            <span class="btext">Submit</span>
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
    </section>

    <div class="contact-page-follow-up">
        @include('partials.testi')
        @include('partials.blogs')
    </div>
@endsection
