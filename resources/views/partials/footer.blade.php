</main>

<!-- footer-section start -->
<footer class="footer-section footer-section-2 p-t-80 p-b-30" style="background-image: linear-gradient(45deg, #0000009e), url({{ asset('img/footer.png')  }});z-index: 1;position: relative;background-position: center;">
    <div class="container">

   
<div class="row justify-content-between row-gap-md-5 row-gap-4 p-b-40">
    <div class="col-md-3">
        <div class="footer-widget">
            <div class="about-widget">
                <div class="footer-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/visawizer_logo.svg') }}" alt="logo-footer">
                    </a>
                </div>
                <p class="text-white">Guiding your journey to new beginnings in Australia with expert education and migration assistance. Committed to providing tailored solutions to navigate visa processes and education pathways seamlessly.</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="footer-widget">
            <h3 class="w-title">Quick Links</h3>
            <ul>
                <li><a href="{{ url('about-us') }}">About Us</a></li>
                <li><a href="{{ url('education') }}">Education</a></li>
                <li><a href="{{ url('professional-year-programs') }}">Professional Year Programs</a></li>
                <li><a href="{{ url('admission') }}">Admission</a></li>
                <li><a href="{{ url('popular-courses-australia') }}">Popular Courses Australia</a></li>
                <li><a href="{{ url('career-guidance') }}">Career Guidan</a></li>
            </ul>
        </div>
    </div>

    <div class="col-md-3">
        <div class="footer-widget">
            <h3 class="w-title">Visitor Options</h3>
            <ul>
                <li><a href="{{ url('visa/visitor-600') }}">Visitor Visa (Subclass 600)</a></li>
                <li><a href="{{ url('visa/e-visitor-651') }}">E-Visitor Visa (Subclass 651)</a></li>
                <li><a href="{{ url('visa/eta-601') }}">Electronic Travel Authority (Subclass 601)</a></li>
                <li><a href="{{ url('visa/transit-771') }}">Transit Visa (Subclass 771)</a></li>
                <li><a href="{{ url('service/centres-accreditation') }}">Centres & Accreditation</a></li>
            </ul>
        </div>
    </div>

    <div class="col-md-3">
        <div class="footer-widget">
            <h3 class="w-title">Get in Touch</h3>
            <div class="get-in-touch">
                
                <a href="https://maps.google.com/?q={{ urlencode(config('site.address1')) }}" class="footer-address align-items-start">
                    <div class="icon" style="padding: 14px;">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="text">
                        <p>{{ config('site.address1') }}</p>
                    </div>
                </a>

                <a href="mailto:{{ config('site.email1') }}" class="email">
                    <div class="icon">
                        <i class="fa-solid fa-paper-plane"></i>
                    </div>
                    <div class="text">
                        <p>{{ config('site.email1') }}</p>
                    </div>
                </a>

                <a href="tel:{{ config('site.phone1') }}" class="phone">
                    <div class="icon">
                        <i class="fa-solid fa-phone-arrow-up-right"></i>
                    </div>
                    <div class="text">
                        <p>{{ config('site.phone1') }}</p>
                    </div>
                </a>
                <div class="about-widget">
                    <div class="social-links mt-0">
                        <a href="{{ config('site.facebook') }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ config('site.twitter') }}"><i class="fab fa-x-twitter"></i></a>
                        <a href="{{ config('site.instagram') }}"><i class="fab fa-instagram"></i></a>
                        <a href="{{ config('site.linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
        <div class="footer-bottom m-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="container">
                        <div class="footer-bottom-layout">
                            <div class="footer-copyright">
                               Copyright © 2026 Visawizer.com.au
                            </div>
                            <div class="footer-bottom-menu">
                                <ul>
                                    <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                                    <li><a href="{{ url('terms-and-conditions') }}">Terms & Condition</a></li>
                                    <li><a href="{{ url('return-and-refund') }}">Return & Refund</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-section end -->

<a href="https://wa.me/918130600405" class="whatsapp_float" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>

<!-- Vendors Js -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/fancybox/fancybox.umd.js') }}"></script>
<script src="{{ asset('assets/vendor/counter/purecounter.js') }}"></script>

<!-- Main Js -->
<script src="{{ asset('assets/js/script.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>
  function hideModal() {
     $('.modal').hide();
  }
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  $(document).ready(function() {
      toastr.options.timeOut = 2000;
      @if (Session::has('error'))
          toastr.error('{{ Session::get('error') }}');
      @elseif(Session::has('success'))
          toastr.success('{{ Session::get('success') }}');
      @endif
  });

function validateForm() {
    let valid = true;

    $('.text-danger').remove();
    $('.is-invalid').removeClass('is-invalid');

    let name = $('input[name="name"]');
    let nameVal = name.val().trim();
    let nameRegex = /^[A-Za-z\s]+$/;

    if (nameVal === "" || !nameRegex.test(nameVal)) {
        name.addClass('is-invalid');
        name.after('<small class="text-danger">Please enter a valid name (letters only)</small>');
        valid = false;
    }

    let phone = $('input[name="phone"]');
    let phoneVal = phone.val().trim();
    let phoneRegex = /^[0-9]{10}$/;

    if (phoneVal === "" || !phoneRegex.test(phoneVal)) {
        phone.addClass('is-invalid');
        phone.after('<small class="text-danger">Please enter a valid phone number (10 digits)</small>');
        valid = false;
    }

    let email = $('input[name="email"]');
    let emailVal = email.val().trim();
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (emailVal === "" || !emailRegex.test(emailVal)) {
        email.addClass('is-invalid');
        email.after('<small class="text-danger">Please enter a valid email</small>');
        valid = false;
    }

    let city = $('input[name="city"]');
    if (city.length) {
        let cityVal = city.val().trim();
        let cityRegex = /^[A-Za-z\s]+$/;
        if (cityVal !== "" && !cityRegex.test(cityVal)) {
            city.addClass('is-invalid');
            city.after('<small class="text-danger">Please enter a valid city name</small>');
            valid = false;
        }
    }

    return valid;
}

$('#contactForm').on('submit', function(e){
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
        url: "{{ url('contact-form') }}",
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
                    window.location.href = "{{ url('thank-you') }}";
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

$('#newsletterForm').on('submit', function(e){
    e.preventDefault();
    var form = $(this);
    var button = $('.btn-subscribe');
    form.find('.text-danger').remove();
    form.find('.is-invalid').removeClass('is-invalid');

    $.ajax({
        url: "{{ url('newsletter-form') }}",
        type: "POST",
        data: form.serialize(),
        dataType: "json",

        beforeSend: function(){
            button.text("Submitting").prop('disabled', true);
        },

        success: function(res){
            if(res.status === 'success'){
                button.text("Submitted ");
                setTimeout(function(){
                    window.location.href = "{{ url('thank-you-subscribe') }}";
                }, 300);
            }
        },

        error: function(xhr){
            clearInterval(interval);
            button.text("Submit").prop('disabled', false);

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

$(window).scroll(function() {
    if ($(window).scrollTop() > 73) {
        $(".header-section-1").css('position', 'fixed');
    }
    else {
        $(".header-section-1").css('position', 'relative');
    }
});
</script>
@stack('script')