@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')
  <style>
    .cart-container { padding: 50px 0; }
    .cart-item img { width: 80px; height: 80px; object-fit: cover; }
    .quantity-btn { width: 30px; height: 30px; text-align: center; padding: 0; }
    .order-summary { background: #f8f9fa; padding: 20px; border-radius: 8px; }
    .btn-proceed { background-color: #1b3d23; color: #fff; }
    .btn-proceed:hover { background-color: #15401a; color: #fff; }
    .d-flex.justify-content-between.mb-2 {
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #dde3dd;
}
.input-wrap input, select {
    padding: 10px 15px;
    border-radius: 8px;
}
.contact-form-wrap {
    border-radius: 10px;
    padding: 20px 30px 20px;
    margin-bottom: 40px;
}
.input-wrap select {
    color: var(--theme-color-3);
    background: #fff;
    border: 2px solid transparent;
    outline: none;
    width: 100%;
    height: 52px;
}
.or {
    margin: 12px auto;
    background: #25d366;
    width: 35px;
    height: 35px;
    border-radius: 50px;
    padding: 7px;
    font-weight: 700;
    font-size: 14px;
    color: #fff;
}
</style>

<div class="container cart-container">
  <form id="checkoutForm">
  @csrf  
      <div class="row">
        <!-- Cart Items -->
        <div class="col-lg-7">
            <div class="contact-form-wrap text-start">
                <h4>Enter your details</h4>
                <div class="row form-row">
                    <div class="col-xl-6">
                        <div class="input-wrap">
                            <input type="text" placeholder="Full Name *" value="{{ Auth::check() ? Auth::user()->username : '' }}" name="name" required oninput="this.value=this.value.replace(/[^A-Za-z ]/g,'')" required id="name">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="input-wrap">
                            <input type="tel" placeholder="Phone Number *" value="{{ Auth::check() ? Auth::user()->mobile : '' }}" name="phone" maxlength="10" required oninput="this.value=this.value.replace(/[^0-9]/g,'')" required id="phone">
                        </div>
                    </div>
                </div>
                <div class="row form-row">
                    <div class="col-xl-6">
                        <div class="input-wrap">
                            <input type="email" placeholder="Email Address *" value="{{ Auth::check() ? Auth::user()->email : '' }}" name="email" required oninput="this.setCustomValidity(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.value) ? '' : 'Invalid Email')" required id="email">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="input-wrap">
                            <select name="state" required id="state">
                                <option value="">-- Select Your State *--</option>
                                <option>Andaman and Nicobar Islands</option>
                                <option>Andhra Pradesh</option>
                                <option>Arunachal Pradesh</option>
                                <option>Assam</option>
                                <option>Bihar</option>
                                <option>Chandigarh</option>
                                <option>Chhattisgarh</option>
                                <option>Dadra and Nagar Haveli</option>
                                <option>Daman and Diu</option>
                                <option>Delhi</option>
                                <option>Goa</option>
                                <option>Gujarat</option>
                                <option>Haryana</option>
                                <option>Himachal Pradesh</option>
                                <option>Jammu and Kashmir</option>
                                <option>Jharkhand</option>
                                <option>Karnataka</option>
                                <option>Kerala</option>
                                <option>Lakshadweep</option>
                                <option>Madhya Pradesh</option>
                                <option>Maharashtra</option>
                                <option>Manipur</option>
                                <option>Meghalaya</option>
                                <option>Mizoram</option>
                                <option>Nagaland</option>
                                <option>Odisha</option>
                                <option>Puducherry</option>
                                <option>Punjab</option>
                                <option>Rajasthan</option>
                                <option>Sikkim</option>
                                <option>Tamil Nadu</option>
                                <option>Telangana</option>
                                <option>Tripura</option>
                                <option>Uttar Pradesh</option>
                                <option>Uttarakhand</option>
                                <option>West Bengal</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="text" name="bot_field" class="d-none">
                <div class="row form-row">
                    <div class="col-xl-12">
                        <div class="input-wrap">
                            <input type="text" placeholder="Enter GST No." name="gstno">
                        </div>
                    </div>
                </div>
                <div class="row form-row">
                    <div class="col-xl-12">
                        <div class="input-wrap">
                            <textarea placeholder="Say Something..." name="message"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="courseId" value="{{ encrypt($course->id) }}">
            <a href="{{ url('courses') }}" class="text-decoration-none text-dark">&larr; Back to Courses</a>
        </div>

        <!-- Order Summary -->
        <div class="col-lg-5">
          <div class="order-summary">
            <h5>Your order</h5>
            <hr>
            <div class="d-flex justify-content-between mb-2 align-items-center gap-2">
                <div class="d-flex gap-2 align-items-center">
                    <div class="image">
                        <img src="{{ asset($course->image) }}" width="80px" class="rounded-3">
                    </div>
                    <a href="{{ url('course/'.$course->title) }}" class="fw-medium text-dark">
                         {{ $course->title }}
                    </a>
                </div>
                <p class="text-def text-main-2 fw-medium">₹{{ $course->price }}</p>
            </div>
            @php
                $price = $course->price;
                $gst = $price * 0.18;
                $totalPrice = $price + $gst;
            @endphp
            <div class="d-flex justify-content-between mb-2 pt-3">
              <span>GST (18%)</span>
              <span>₹{{ $gst }}</span>
            </div>

            <div class="d-flex justify-content-between mb-2 pt-3">
              <strong>Total</strong>
              <strong>₹{{ $totalPrice }}</strong>
            </div>

            <fieldset class="check-agree mb-3">
                <input type="checkbox" id="check" class="tf-check-rounded" required>
                <label for="check-agree" class="text-def">I agree with the 
                    <a href="{{ url('terms-and-conditions') }}" target="_blank" class="link">terms and conditions</a>
                </label>
            </fieldset>

            <button id="tgfds" type="submit" class="btn w-100 d-flex justify-content-between align-items-center e-primary-btn rounded-2 pt-2 pb-2 ps-3 pe-2">
              Click to pay full amount
              <span class="btn btn-sm rounded-circle" style="background: #fff;border-color: #fff;">→</span>
            </button>

            @if(!empty($course->minPrice))
            @php
                $mp = $course->minPrice;
                $gst = $mp * 0.18;
                $totalmp = $mp + $gst;
            @endphp
            <div class="text-center">
                <div class="or">OR</div>
                <a href="javascript:void(0);" class="e-primary-btn has-icon" onclick="minp({{ $totalmp }})">
                    Reserve Your Seat at - ₹{{ $totalmp }}
                    <span class="icon-wrap">
                        <span class="icon">
                            <i class="fa-regular fa-arrow-right"></i>
                            <i class="fa-regular fa-arrow-right"></i>
                        </span>
                    </span>
                </a>
                <input type="hidden" name="minPrice" class="minPrice">
            </div>
            @endif
          </div>
        </div>
      </div>
  </form>
</div>

@endsection 

@push('script')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>

function minp(price) { 
    let name  = $('#name').val().trim();
    let phone = $('#phone').val().trim();
    let email = $('#email').val().trim();
    let state = $('#state').val();
    let check = $('#check').is(':checked');
    if (!name || !phone || !email || !state) {
        toastr.error('Fill the form before proceeding for payment');
        return false;
    }

    if (!check) {
        toastr.error('Please accept terms and conditions');
        return false;
    }
    $('.minPrice').val(price);
    $('#checkoutForm').submit();
}

$('#tgfds').click(function(){
    $('.minPrice').val('');
})

$('#checkoutForm').on('submit', function (e) {
    e.preventDefault();
    $('.spinner-container').show();
    let formData = $(this).serialize();

    $.ajax({
        url: "{{ url('checkout/order') }}",
        type: "POST",
        data: formData,
        success: function (data) {

            let options = {
                key: data.key,
                currency: "INR",
                name: "Ethics4Work",
                description: "{{ $course->title }}",
                order_id: data.order_id,

                handler: function (response) {

                    $.ajax({
                        url: "{{ url('checkout/verify') }}",
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            razorpay_order_id: response.razorpay_order_id,
                            razorpay_payment_id: response.razorpay_payment_id,
                            razorpay_signature: response.razorpay_signature,
                            courseId: $('input[name="courseId"]').val(),
                            state: $('select[name="state"]').val(),
                            message: $('textarea[name="message"]').val(),
                            gstno: $('input[name="gstno"]').val(),
                            minPrice: $('.minPrice').val()
                        },
                        success: function (result) {
                            if (result.status === 'success') {
                                toastr.success("Payment Successful");
                                window.location.href = "{{ url('order-thank-you') }}";
                                $.ajax({
                                    url: "{{ url('send-mail') }}",
                                    type: "POST",
                                    data: {
                                        _token: "{{ csrf_token() }}",
                                        invoice_id: result.invoice_id
                                    },
                                    success: function (res) {
                                        console.log('Mail sent successfully');
                                    },
                                    error: function () {
                                        console.log('Mail failed but payment done');
                                    }
                                });

                            } else {
                                toastr.error('Payment Failed or canceled by user');
                            }
                        }
                    });
                }
            };

            let rzp = new Razorpay(options);
            rzp.open();
        },
        error: function (xhr) {
            if (xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                let msg = '';
                $.each(errors, function (k, v) {
                    msg += v[0] + "\n";
                });
                alert(msg);
            }
        },
        complete: function () {
            $('.spinner-container').hide();
        }
    });
});
</script>

@endpush