@extends('layouts.frontend')
@section('content') 
<style>
.rfvt {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f3f3f3;
    padding: 70px 0;
}
.thankyou-card {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    padding: 50px 40px;
    max-width: 900px;
    text-align: center;
    animation: fadeIn 1s ease-in-out;
    margin: auto;
    margin-top: 50px;
}
.thankyou-icon {
    font-size: 50px;
    color: #28a745;
    animation: pop 0.8s ease;
}
@keyframes pop {
    0% { transform: scale(0.5); opacity: 0; }
    100% { transform: scale(1); opacity: 1; }
}
@keyframes fadeIn {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
}
.thankyou-text h1 {
    font-size: 45px;
    font-weight: 700;
    color: #333;
}
.thankyou-text p {
    font-size: 16px;
    color: #666;
    margin: 0 0 25px;
}
a.batan {
    background: #f8c32c;
    padding: 17px 22px;
    display: block;
    width: fit-content;
    margin: auto;
    margin-bottom: 10px;
    border-radius: 54px;
    font-size: 18px;
}
</style>

    <div class="rfvt">
        <div class="thankyou-card">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="thankyou-icon">
                        <i class="fa fa-check-circle"></i>
                    </div>
                    <div class="thankyou-text">
                        <h1>Thank You!</h1>
                        <p>Your registration has been successfully completed. Your trust means a lot to us 💖</p>
                        <hr>
                        <p>We are excited to have you join us for this upcoming session. If you need any assistance, feel free to reach out.</p>
                        <a class="e-primary-btn has-icon" href="{{ url('/') }}">
                            Visit Website
                            <span class="icon-wrap">
                                <span class="icon">
                                    <i class="fa-regular fa-arrow-right"></i>
                                    <i class="fa-regular fa-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/four/1.jpg') }}" alt="Thank you for registering for a Visawizer event" width="318" height="394" loading="lazy" decoding="async" style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>
@endsection    
