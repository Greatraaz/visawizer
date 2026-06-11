@extends('layouts.frontend')
@section('content') 
<style>
.rfvt {
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(180deg, #f5f8f7 0%, #eef4f1 100%);
    padding: 80px 0;
}
.thankyou-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 12px 32px rgba(15,23,42,0.08);
    padding: 46px 40px;
    max-width: 980px;
    animation: fadeIn 1s ease-in-out;
    margin: auto;
    overflow: hidden;
}
.thankyou-icon {
    font-size: 50px;
    color: #16a34a;
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
    font-size: 42px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 14px;
}
.thankyou-text p {
    font-size: 16px;
    color: #475569;
    margin: 0 0 18px;
    line-height: 1.7;
}
.thankyou-copy {
    text-align: left;
    padding-right: 10px;
}
.thankyou-copy .lead-copy {
    font-size: 18px;
    color: #334155;
    line-height: 1.75;
}
.thankyou-steps {
    margin: 24px 0;
    padding: 20px 22px;
    border-radius: 12px;
    background: #f8fbfa;
    border: 1px solid #e3ece8;
}
.thankyou-steps h3 {
    margin: 0 0 12px;
    font-size: 20px;
    color: #0f172a;
}
.thankyou-steps ul {
    margin: 0;
    padding-left: 20px;
    color: #475569;
}
.thankyou-steps li {
    margin-bottom: 8px;
    line-height: 1.65;
}
.thankyou-steps li:last-child {
    margin-bottom: 0;
}
.thankyou-actions {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    gap: 14px;
    margin-top: 26px;
}
.thankyou-actions .e-primary-btn,
.thankyou-actions .thankyou-secondary-btn {
    border-radius: 12px !important;
    flex: 0 0 auto;
    width: auto;
}
.thankyou-actions .e-primary-btn .icon-wrap,
.thankyou-actions .thankyou-secondary-btn .icon-wrap {
    border-radius: 10px !important;
}
.thankyou-secondary-btn {
    display: inline-flex;
    align-items: center;
    gap: 14px;
    padding: 5px 5px 5px 20px;
    background: #fff;
    border: 1px solid #cbd5e1;
    color: #0f172a;
    text-decoration: none;
    font-weight: 600;
}
.thankyou-secondary-btn .icon-wrap {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f8fafc;
    color: #be182f;
}
.thankyou-visual img {
    width: 100%;
    border-radius: 12px;
    object-fit: cover;
    min-height: 100%;
}
@media (max-width: 767px) {
    .rfvt {
        padding: 60px 0;
    }
    .thankyou-card {
        padding: 28px 22px;
    }
    .thankyou-copy {
        padding-right: 0;
        margin-bottom: 22px;
    }
    .thankyou-text h1 {
        font-size: 34px;
    }
}
</style>

    <div class="rfvt">
        <div class="thankyou-card">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="thankyou-copy">
                    <div class="thankyou-icon">
                        <i class="fa fa-check-circle"></i>
                    </div>
                    <div class="thankyou-text">
                        <h1>Thank You!</h1>
                        <p class="lead-copy">Your enquiry has been received successfully. Our team will review your details and get back to you with the next right step for your Australian study, visa, or migration plan.</p>

                        <div class="thankyou-steps">
                            <h3>What happens next</h3>
                            <ul>
                                <li>We review your enquiry and requirements carefully.</li>
                                <li>We identify the most relevant pathway options for your situation.</li>
                                <li>Our team contacts you to discuss the next steps clearly.</li>
                            </ul>
                        </div>

                        <p>You will also receive a confirmation email from Visawizer with the details of your enquiry.</p>

                        <div class="thankyou-actions">
                            <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                                Book Appointment
                                <span class="icon-wrap">
                                    <span class="icon">
                                        <i class="fa-regular fa-arrow-right"></i>
                                        <i class="fa-regular fa-arrow-right"></i>
                                    </span>
                                </span>
                            </a>
                            <a class="thankyou-secondary-btn" href="{{ url('/') }}">
                                Back to Home
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
                <div class="col-md-6">
                    <div class="thankyou-visual">
                        <img src="{{ asset('assets/images/four/1.jpg') }}" alt="Thank you">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection    
