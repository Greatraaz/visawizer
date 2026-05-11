@extends('layouts.frontend')
@section('content') 
<style type="text/css">
.activeESW {
    background: var(--theme-color-3);
    color: #fff;
}
.activeESW .icon-wrap {
    background: #f8f7f0;
}
.activeESW span.icon {
    rotate: 90deg;
}
</style>
@include('partials.breadcrumb')

    <section class="our-events-section-2 p-t-120 p-b-120 p-t-xs-80 p-b-xs-80">
        <div class="container">
            <div class="row align-items-end m-b-60 m-b-xs-40">
                <div class="col-xl-6 col-md-8 m-b-xs-20">
                    <div class="common-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <img src="assets/img/icons/icon-2.svg" alt="icon-1"/>
                        <span>Our Arrange</span>
                    </div>
                    <div class="common-title m-b-0 style-color-3 text-start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <h2>Econest Upcoming Events</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-md-4 text-md-end">
                    <div class="row">
                        <div class="col-md-4">
                            <a class="e-primary-btn has-icon {{ Request::is('global-events') ? 'activeESW' : '' }}"
                               href="{{ url('global-events') }}">
                                View All Events <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="e-primary-btn has-icon {{ Request::is('seminars') ? 'activeESW' : '' }}"
                               href="{{ url('seminars') }}">
                                View All Seminars <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="e-primary-btn has-icon {{ Request::is('webinars') ? 'activeESW' : '' }}"
                               href="{{ url('webinars') }}">
                                View All Webinars <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                <div class="col-xl-12">
                    @forelse($seminars as $event)
                    <div class="event-card-2 m-b-30">
                        <div class="event-thumb">
                            <a href="{{ url('event-details/'.$event->slug) }}">
                                <img src="{{ asset($event->image) }}" alt="thumb" height="300" class="object-fit-cover">
                            </a>

                            <div class="event-date">
                                <h5>
                                    {{ \Carbon\Carbon::parse($event->start_date)->format('d M') }}
                                    -
                                    {{ \Carbon\Carbon::parse($event->end_date)->format('d M, Y') }}
                                </h5>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="event-card-title">
                                <h2>
                                    <a href="{{ url('event-details/'.$event->slug) }}">
                                        {{ $event->title }}
                                    </a>
                                </h2>
                            </div>

                            <div class="address">
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <span>{{ date('h:ia', strtotime($event->start_time)) }} - {{ date('h:ia', strtotime($event->end_time)) }}</span>
                                </div>

                                <div class="location">
                                    <i class="fa-regular fa-location-dot"></i>
                                    <span>{{ $event->location }}</span>
                                </div>
                            </div>

                            <div class="detail-sidebar">
                              <div class="s-widget-wrap p-0">
                                <div class="w-title">
                                  <div class="bar-wrap">
                                    <div class="bar-1"></div>
                                    <div class="bar-2"></div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="join-event">
                                <div class="blog-btn">
                                    <a class='e-primary-btn has-icon' href="{{ url('event-details/'.$event->slug) }}">
                                        Register Now
                                        <span class="icon-wrap">
                                            <span class="icon">
                                                <i class="fa-regular fa-arrow-right"></i>
                                                <i class="fa-regular fa-arrow-right"></i>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty

                    <p class="text-center mt-4 mb-4">No Events Found</p>

                    @endforelse

                </div>
            </div>
        </div>
    </section>

    <section class="testimonial p-t-100 p-t-xs-80 m-b-50">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-4 m-b-lg-60 m-b-md-60 m-b-xs-60">
                    <div class="testimonial-content" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <div class="common-subtitle">
                             <span>Testimonials</span>
                        </div>
                        <div class="common-title text-start">
                            <h2>Why They Believe <span><i class="fa-solid fa-quote-right"></i> In Us</span></h2>
                        </div>
                        <div class="text">
                            <p>Llikely to then a dental prosthetic is added then dental prosthetic occaecat laborum.</p>
                        </div>
                        <div class="reviews">
                            <h3>
                                <span class="purecounter" data-purecounter-duration="1" data-purecounter-end="99">0</span>%
                            </h3><img alt="favicon" src="{{ asset('assets/img/logo/favicon.webp') }}">
                            <h5>Positive Reviews</h5>
                        </div>
                        <a class='review-btn' href='#'><img alt="icon" src="{{ asset('assets/img/icons/icon-3.svg') }}">
                            <span><span>Write your honest review</span> <i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="testimonial-slider-active" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="thumb">
                                            <img alt="thumb-10" src="{{ asset('assets/img/thumbs/thumb-10.webp') }}">
                                            <a class="video-play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&ab_channel=Motiversity">Play</a>
                                        </div>
                                        <div class="card-content">
                                            <div class="rating">
                                                <p>Rating</p><i class="fa-solid fa-star-sharp"></i> <span>5.0</span>
                                            </div>
                                            <div class="review">
                                                <p>I was very impressed 😍 involves providing of advice and guidance on
                                                    energy-related for matters. Understand the advantages hiring
                                                    professionals to design and maintain your garden. 🙋</p>
                                            </div>
                                            <div class="author-details">
                                                <h5>Penelope Miller <span>(Arjun)</span></h5>
                                                <h6>Sr. Volunteer</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="thumb">
                                            <img alt="thumb-10" src="{{ asset('assets/img/thumbs/thumb-10.2.webp') }}">
                                            <a class="video-play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&ab_channel=Motiversity">Play</a>
                                        </div>
                                        <div class="card-content">
                                            <div class="rating">
                                                <p>Rating</p><i class="fa-solid fa-star-sharp"></i> <span>5.0</span>
                                            </div>
                                            <div class="review">
                                                <p>I was very impressed 😍 involves providing of advice and guidance on
                                                    energy-related for matters. Understand the advantages hiring
                                                    professionals to design and maintain your garden. 🙋</p>
                                            </div>
                                            <div class="author-details">
                                                <h5>Penelope Miller <span>(Arjun)</span></h5>
                                                <h6>Sr. Volunteer</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="thumb">
                                            <img alt="thumb-10" src="{{ asset('assets/img/thumbs/thumb-10.3.webp') }}">
                                            <a class="video-play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&ab_channel=Motiversity">Play</a>
                                        </div>
                                        <div class="card-content">
                                            <div class="rating">
                                                <p>Rating</p><i class="fa-solid fa-star-sharp"></i> <span>5.0</span>
                                            </div>
                                            <div class="review">
                                                <p>I was very impressed 😍 involves providing of advice and guidance on
                                                    energy-related for matters. Understand the advantages hiring
                                                    professionals to design and maintain your garden. 🙋</p>
                                            </div>
                                            <div class="author-details">
                                                <h5>Penelope Miller <span>(Arjun)</span></h5>
                                                <h6>Sr. Volunteer</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="thumb">
                                            <img alt="thumb-10" src="{{ asset('assets/img/thumbs/thumb-10.2.webp') }}">
                                            <a class="video-play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&ab_channel=Motiversity">Play</a>
                                        </div>
                                        <div class="card-content">
                                            <div class="rating">
                                                <p>Rating</p><i class="fa-solid fa-star-sharp"></i> <span>5.0</span>
                                            </div>
                                            <div class="review">
                                                <p>I was very impressed 😍 involves providing of advice and guidance on
                                                    energy-related for matters. Understand the advantages hiring
                                                    professionals to design and maintain your garden. 🙋</p>
                                            </div>
                                            <div class="author-details">
                                                <h5>Penelope Miller <span>(Arjun)</span></h5>
                                                <h6>Sr. Volunteer</h6>
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
@endsection 