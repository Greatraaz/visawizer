@extends('layouts.frontend')
@section('content') 
<style type="text/css">
.cImg {
    padding: 20px;
    border-radius: 20px;
    margin-bottom: -70px;
    background: linear-gradient(180deg, var(--theme-color-3), #0060399e);
}
.cImg img {
    position: relative;
    z-index: 1;
    border-radius: 10px;
    height: 200px;
    object-fit: cover;
    width: 100%;
}
.detail-sidebar .s-widget-wrap .project-info-wrap .project-info .icon {
    width: 40px;
    height: 40px;
    font-size: 15px;
    padding: 14px;
}
  #collabPopup .btn-outline-primary {
    border-radius: 30px;
    border-width: 2px;
  }
  #collabPopup input, 
  #collabPopup select,
  #collabPopup textarea {
    background: #f5f7fa;
    border: 1px solid #e8e8e8;
  }
  #collabPopup .modal-content {
    border-radius: 20px !important;
    overflow: hidden;
}
.form-control-lg {
    font-size: 16px;
    font-weight: 400;
}
.details-title {
    padding: 10px;
    border-radius: 10px;
    background-image: linear-gradient(180deg, var(--theme-color-3), #0060399e);
    box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
    z-index: 1;
    position: relative;
}
.details-title h2 {
    color: #fff;
    font-size: 22px;
}
.details-content {
    background: #ffffff;
    padding: 40px 35px;
    border-radius: 16px;
    box-shadow: 0px 10px 35px rgba(0,0,0,0.07);
    transition: all 0.3s ease;
}

.details-content:hover {
    transform: translateY(-5px);
    box-shadow: 0px 15px 45px rgba(0,0,0,0.1);
}

.course-title {
    font-size: 32px;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 18px;
    letter-spacing: 0.5px;
}

.desc-box,
.features-box {
    background: #fafafb;
    padding: 20px 25px;
    border-radius: 12px;
    border-left: 4px solid var(--theme-color-3);
    font-size: 16px;
    line-height: 1.8;
    color: #444;
    margin-bottom: 25px;
}
.detail-sidebar .s-widget-wrap .project-info-wrap .project-info {
    padding-bottom: 4px;
}
.e-primary-btn .icon-wrap {
    width: 30px;
    height: 30px;
}
</style>
@include('partials.breadcrumb')

    <section class="services-section-3 p-t-100 p-t-xs-80">
        <div class="container">
            <div class="row m-b-50 m-b-xs-40">
                <div class="col-xl-12">
                    <div class="section-top-9">
                        <div class="common-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <span>Empowering Ethical Leadership for Every Workplace</span>
                        </div>
                        <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                            <h2>Why Choose <span class="green">Ethics<span class="golden">4</span>Work</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                <div class="col-md-4">
                    <div class="service-card-3">
                        <div class="service-top">
                            <h4>Expert-Guided, Practical Learning</h4>
                            <i class="fa-light fa-chalkboard-teacher"></i>
                        </div>
                        <div class="service-content">
                            <p><span class="green">Ethics<span class="golden">4</span>Work</span> courses are designed and delivered by industry experts who understand real workplace challenges. Each module focuses on practical that employees can immediately apply in their day-to-day decision-making.</p>
                        </div>
                        <div class="i-shape">
                            <h1>01</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card-3">
                        <div class="service-top">
                            <h4>Strengthen Your Culture of Integrity</h4>
                            <i class="fa-light fa-shield-heart"></i>
                        </div>
                        <div class="service-content">
                            <p>Our courses help organizations build a strong foundation of ethics, trust, and accountability. By empowering employees with the right knowledge, companies can foster a transparent, responsible, and positive work environment.</p>
                        </div>
                        <div class="i-shape">
                            <h1>02</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card-3">
                        <div class="service-top">
                            <h4>Tailored to Your Organization Need</h4>
                            <i class="fa-light fa-sliders-h"></i>
                        </div>
                        <div class="service-content">
                            <p>Every organization is different—and so are its ethical challenges. <span class="green">Ethics<span class="golden">4</span>Work</span> offers flexible and customizable training programs that can be tailored to your industry, team size, and specific compliance or leadership goals.</p>
                        </div>
                        <div class="i-shape">
                            <h1>03</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="make-donate-section" style="margin-top: 70px;">
        <div class="container">
            <div class="make-donate-layout">
                <div class="row align-items-center">
                    <div class="col-xl-12">
                        <p style="font-size: 22px;color: #fff;text-align: center;"><span class="green">Ethics<span class="golden">4</span>Work</span> is not just a training initiative; it is a movement that empowers organizations to rise beyond compliance and embrace integrity as a way of life. It inspires leaders to make decisions with courage, teams to act with responsibility, and workplaces to grow with transparency and respect</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-details-section p-t-80 p-b-250">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="details-layout-wrap">
                        <div class="course-details-section">
                            <div class="details-content">

                                <div class="details-title">
                                    <h2 class="course-title">{{ $course->title }}</h2>
                                </div>

                                <div class="detail-text desc-box">
                                    {!! $course->description !!}
                                </div>

                                <div class="details-title">
                                    <h2 class="course-title">Features</h2>
                                </div>

                                <div class="detail-text features-box">
                                    {!! $course->features !!}
                                </div>

                            </div>
                        </div>

                        <div class="detail-sidebar">
                            <div class="detail-sidebar-inner">
                                <div class="cImg">
                                    <img src="{{ asset($course->image) }}">
                                </div>
                                <div class="s-widget-wrap m-b-30">
                                    <div class="project-info-wrap mt-3">
                                        <div class="project-info mt-4">
                                            <div class="icon">
                                                <i class="fa-regular fa-calendar"></i>
                                            </div>
                                            <div class="key-value">
                                                <div class="value">
                                                    <h6>Duration</h6>
                                                </div>
                                                <div class="key">
                                                    <p>{{ $course->duration }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-info">
                                            <div class="icon">
                                                <i class="fa-regular fa-users"></i>
                                            </div>
                                            <div class="key-value">
                                                <div class="value">
                                                    <h6>Enrolled Students</h6>
                                                </div>
                                                <div class="key">
                                                    <p>{{ $course->students }} Students</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-info">
                                            <div class="icon">
                                                <i class="fa-regular fa-shield"></i>
                                            </div>
                                            <div class="key-value">
                                                <div class="value">
                                                    <h6>Certificate</h6>
                                                </div>
                                                <div class="key">
                                                    <p>{{ $course->certificate }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if($course->price =='' || $course->price ==null)
                                    <a class="e-primary-btn has-icon mt-4" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#collabPopup">
                                        Enroll Now
                                        <span class="icon-wrap">
                                            <span class="icon">
                                                <i class="fa-regular fa-arrow-right"></i>
                                                <i class="fa-regular fa-arrow-right"></i>
                                            </span>
                                        </span>
                                    </a>
                                    @else
                                    <a class="e-primary-btn has-icon mt-4" href="{{ url('course-checkout/'.$course->slug) }}">
                                        Enroll Now
                                        <span class="icon-wrap">
                                            <span class="icon">
                                                <i class="fa-regular fa-arrow-right"></i>
                                                <i class="fa-regular fa-arrow-right"></i>
                                            </span>
                                        </span>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-shape-1"><img alt="shape-31" src="{{ asset('assets/img/shapes/shape-31.webp') }}"></div>
    </section>

    <div class="modal fade" id="collabPopup" tabindex="-1">
      <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow-lg">

          <div class="modal-body p-0">
            <div class="row g-0">

              <!-- LEFT SECTION -->
              <div class="col-lg-6 p-5 text-center" style="background-image: url({{ asset('assets/images/img-bg.webp')  }});    background-color: #F0EEFF;">
                <img src="{{ asset('assets/images/logo.png') }}" width="250" class="mb-4"/>
                <h3 class="fw-bold mb-3">Join the <span style="color:#e1b652;">Future</span> of Work Management Access Now Open!</h3>
                <p class="text-muted mb-4">An all-in-one system for growing IT teams to manage projects, people, and sales better.</p>

                <div class="d-flex flex-wrap gap-2 justify-content-center">
                  <button class="btn rounded-pill px-4" style="border: 2px solid;border-color: var(--theme-color-3);color: var(--theme-color-3);">
                    <i class="fa fa-check-circle"></i> Priority Onboarding</button>
                  <button class="btn rounded-pill px-4" style="border: 2px solid;border-color: #e7b23b;color: #e7b23b;">
                    <i class="fa fa-check-circle"></i> Better Growth</button>
                  <button class="btn btn-outline-primary rounded-pill px-4">
                    <i class="fa fa-check-circle"></i> Try It Before The Rest Of The World</button>
                </div>
              </div>

              <!-- RIGHT SECTION -->
              <div class="col-lg-6 p-5 bg-white">
                <form id="contactForm">
                  @csrf
                  <div class="row g-3">
                    <div class="col-12">
                      <input type="text" name="name" class="form-control form-control-lg rounded-3" placeholder="Full Name *">
                    </div>

                    <div class="col-12">
                      <input type="email" name="email" class="form-control form-control-lg rounded-3" placeholder="Email Address *">
                    </div>

                    <div class="col-6">
                      <input type="tel" name="phone" class="form-control form-control-lg rounded-3" placeholder="Phone Number *">
                    </div>

                    <div class="col-6">
                      <input type="text" name="city" class="form-control form-control-lg rounded-3" placeholder="Your City">
                    </div>

                    <div class="col-12">
                        <textarea name="message" class="form-control-lg w-100" placeholder="Enter your message/comment" style="height: 90px;"></textarea>
                    </div>

                    <input type="text" name="bot_field" class="d-none">
                    <input type="hidden" name="course" value="{{ $course->title }}">
                    <input type="hidden" name="formName" value="Single Course">
                    <div class="col-12 mt-2">
                      <button id="submitBtn" type="Submit" class="btn btn-primary btn-lg w-100 rounded-3" style="background:var(--theme-color-3); border:none;">
                        <span class="btext">Click</span>
                      </button>
                    </div>
                  </div>

                </form>
              </div>

            </div>
          </div>

          <!-- Close Button -->
          <button type="button" class="btn-close position-absolute end-0 m-3" data-bs-dismiss="modal"></button>

        </div>
      </div>
    </div>

@endsection 