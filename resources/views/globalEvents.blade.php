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
                        <span class="bg-p">Our Arrange</span>
                    </div>
                    <div class="common-title mb-3 style-color-3 text-start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <h2>Econest Upcoming Events</h2>
                    </div>
                    <div class="b-line"></div>
                </div>
                {{-- <div class="col-xl-6 col-md-4 text-md-end">
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
                </div> --}}
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

    @include('partials.commonCta', [
        'ctaEyebrow' => 'Plan before you apply',
        'ctaHeading' => 'Ready to take the next step toward Australia?',
        'ctaLead' => 'Book a consultation with Visawizer and get clarity on your options, requirements, and best path forward.',
        'ctaPrimaryLabel' => 'Book Appointment',
        'ctaPrimaryUrl' => url('book-appointment'),
        'ctaSecondaryLabel' => 'Contact Visawizer',
        'ctaSecondaryUrl' => url('contact-us'),
    ])

    @include('partials.testi')
@endsection 