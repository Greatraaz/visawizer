@php
    $testiIntroP1 = $testiIntroP1 ?? 'Hear from clients who trusted Visawizer with study, family, sponsored, and migration journeys.';
    $testiIntroP2 = $testiIntroP2 ?? 'Trusted by clients across student, partner, sponsored, and visitor pathways.';
@endphp
<section class="testimonial p-t-100 p-t-xs-80 m-b-50">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-4 m-b-lg-60 m-b-md-60 m-b-xs-60">
                    <div class="testimonial-content" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <div class="common-subtitle">
                             <span class="bg-p">Testimonials</span>
                        </div>
                        <div class="common-title text-start mb-3">
                            <h2>What Clients Say About Us and <span>Our Services</span></h2>
                        </div>
                        <div class="b-line"></div>
                        <div class="text">
                            <p>{{ $testiIntroP1 }}</p>
                            <p class="m-t-20">{{ $testiIntroP2 }}</p>
                        </div>
                        <div class="cta-btn m-t-30">
                            <a class='e-primary-btn has-icon' href="{{ url('blogs') }}">Read More Success Stories
                                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="testimonial-slider-active" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="thumb">
                                            <img alt="testimonial-client-1" src="{{ asset('assets/images/testimonial1.webp') }}">
                                        </div>
                                        <div class="card-content">
                                            <div class="rating">
                                                <p>Rating</p><i class="fa-solid fa-star-sharp"></i> <span>5.0</span>
                                            </div>
                                            <div class="review">
                                                <p>"Had a great experience with them. Always available on one call, provided relevant and accurate information."</p>
                                                <p class="small mt-2 mb-0 text-white"><strong>Nishchay Sharma</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="thumb">
                                            <img alt="testimonial-client-2" src="{{ asset('assets/images/testimonial2.webp') }}">
                                        </div>
                                        <div class="card-content">
                                            <div class="rating">
                                                <p>Rating</p><i class="fa-solid fa-star-sharp"></i> <span>5.0</span>
                                            </div>
                                            <div class="review">
                                                <p>"We are extremely pleased with the professional services provided by Visawizer. They guided us throughout the visa process with clarity and efficiency."</p>
                                                <p class="small mt-2 mb-0 text-white"><strong>Kamaljeet Kaur</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="thumb">
                                            <img alt="testimonial-client-3" src="{{ asset('assets/images/testimonial3.webp') }}">
                                        </div>
                                        <div class="card-content">
                                            <div class="rating">
                                                <p>Rating</p><i class="fa-solid fa-star-sharp"></i> <span>5.0</span>
                                            </div>
                                            <div class="review">
                                                <p>"I had an amazing experience working with Visawizer for my wife&apos;s visa application… A 100% recommended for anyone trying for a visa no matter how complicated it is."</p>
                                                <p class="small mt-2 mb-0 text-white"><strong>Monish Kumar</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>