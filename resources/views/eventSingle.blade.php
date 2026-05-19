@extends('layouts.frontend')
@section('content') 
<style type="text/css">
.detail-sidebar .s-widget-wrap .organizer-info-wrap .thumb {
    max-width: 120px;
    height: 120px;
}
#eventForm .text-danger {
    color: #fff !important;
}
textarea.form-control, .form-control {
    color: #fff !important;
}
.contact-form-3 p {
    max-width: 100%;
}
.detail-sidebar .s-widget-wrap {
    background: #e5e5e5;
}
.detail-sidebar .s-widget-wrap .organizer-info-wrap .date, .detail-sidebar .s-widget-wrap .organizer-info-wrap .location {
    justify-content: left;
}
</style>
@include('partials.breadcrumb')

    <section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="details-layout-wrap">
                        <div class="details-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <div class="thumb-wrap m-b-30">
                                <img src="{{ asset($event->image) }}" alt="event-img" height="400" width="100%" class="object-fit-cover">
                            </div>
                            <div class="count-down-date m-b-20">
                                <i class="fa-light fa-calendar-days"></i>
                                @php
                                    $daysLeft = \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($event->start_date), false);
                                @endphp

                                <p>{{ $daysLeft > 0 ? $daysLeft . ' Days Left' : 'Event End' }}</p>
                            </div>
                            <div class="details-title m-b-15">
                                <h2>{{ $event->title }}</h2>
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
                            <div class="detail-text m-b-30">
                                {!! $event->description !!}
                            </div>
                            <div class="contact-form-3" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                                <div class="form-content">
                                    <h3>Register Now</h3>
                                    <p>Secure your place in this powerful learning experience designed to elevate your ethical leadership and workplace integrity.</p>
                                    <form id="eventForm">
                                        @csrf
                                        <div class="mb-3">
                                            <input class="form-control" name="name" placeholder="Full Name" type="text">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" name="email" placeholder="Email Address" type="email">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" name="phone" placeholder="10 Digit Phone No." type="number">
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="form-control" name="message" placeholder="Any message/comment..." rows="4"></textarea>
                                        </div>
                                        <input type="text" name="bot_field" class="d-none">
                                        <input type="hidden" name="seminarId" value="{{ $event->id }}">
                                        <input type="hidden" name="event" value="{{ $event->title }}">
                                        <div class="hero-content-1">
                                            <div class="join-us">       
                                                <button class="e-primary-btn has-icon is-hover-white" type="submit"><span class="btext">Register Now</span> <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="detail-sidebar" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                            <div class="detail-sidebar-inner">
                                <div class="s-widget-wrap m-b-30">
                                    <div class="w-title">
                                        <h3>
                                            <img src="{{ asset('assets/img/icons/icon-20.svg') }}" alt="icon"/>
                                            Speaker
                                        </h3>
                                        <div class="bar-wrap">
                                            <div class="bar-1"></div>
                                            <div class="bar-2"></div>
                                        </div>
                                    </div>
                                    <div class="organizer-info-wrap">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/visawizer_logo.svg') }}" alt="thumb"/ style="height: 100%;object-fit: contain;    border-radius: 0;padding: 6px;">
                                        </div>
                                        <div class="name">
                                            <h3>{{ $event->speaker }}</h3>
                                        </div>
                                        <div class="text">
                                            <p>
                                                “Committed to providing tailored solutions”
                                            </p>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="date m-b-10">
                                            <i class="fa-light fa-calendar-days"></i>
                                            <p>{{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }}</p>
                                        </div>
                                        <div class="location m-b-10">
                                            <i class="fa-light fa-clock"></i>
                                            <p>{{ date('h:ia', strtotime($event->start_time)) }} - {{ date('h:ia', strtotime($event->end_time)) }}</p>
                                        </div>
                                        <div class="location">
                                            <i class="fa-light fa-location-dot"></i>
                                            <p>{{ $event->location }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="s-widget-wrap">
                                    <div class="w-title">
                                        <h3>Share This Event</h3>
                                        <div class="bar-wrap">
                                            <div class="bar-1"></div>
                                            <div class="bar-2"></div>
                                        </div>
                                    </div>
                                    <div class="socials">
                                        @php
                                            $url = urlencode(url()->current());
                                            $title = urlencode('Check out this blog!');
                                        @endphp
                                        <div class="social-links">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $title }}"><i class="fab fa-x-twitter"></i></a>
                                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="https://api.whatsapp.com/send?text={{ $title }}%20{{ $url }}"><i class="fab fa-whatsapp"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-shape-1">
            <img src="{{ asset('assets/img/shapes/shape-31.webp') }}" alt="shape-31"/>
        </div>
    </section>
@endsection 

@push('script')
<script type="text/javascript">
$('#eventForm').on('submit', function(e){
    e.preventDefault();
    if (!validateForm()) {
        return false;
    }
    var form = $(this);
    var btn = $('.btext');
    var button = $('button[type=submit]');
    form.find('.text-danger').remove();
    form.find('.is-invalid').removeClass('is-invalid');

    var progress = 0;

    var interval = setInterval(function () {
        progress += 5;
        btn.text("Submitting " + progress + "%");

        if (progress >= 90) {
            clearInterval(interval);
        }
    }, 200);

    $.ajax({
        url: "{{ url('event-form') }}",
        type: "POST",
        data: form.serialize(),
        dataType: "json",

        beforeSend: function(){
            button.prop('disabled', true);
        },

        success: function(res){
            if(res.status === 'success'){
                btn.text("Submitting 100%");
                setTimeout(function(){
                    window.location.href = "{{ url('thank-you-for-registration') }}";
                }, 300);
            }
        },

        error: function(xhr){
            clearInterval(interval);
            btn.text("Submit");
            button.prop('disabled', false);

            if(xhr.status === 422){
                let errors = xhr.responseJSON.errors;
                $.each(errors, function(field, message){
                    var input = form.find('[name="'+field+'"]');
                    input.addClass('is-invalid');
                    input.after('<small class="text-danger">'+message+'</small>');
                });
            } else {
                toastr.error("Something went wrong!");
            }
        },

        complete: function(){
        }
    });
});
</script>
@endpush