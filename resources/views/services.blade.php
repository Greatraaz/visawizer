@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')

    <section class="services-section p-t-100 p-b-120">
        <div class="container">
            <div class="row justify-content-center text-center m-b-50 m-b-xs-40">
                <div class="col-xl-8">
                    <div class="common-subtitle" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        <span>services & programs</span>
                    </div>
                    <div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                        <h2>From Policy to Practice</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="col-xl-6 m-b-30">
                    <div class="project-card style-2 style-service">
                        <div class="thumb">
                            <a href="{{ url('service/advisory-consulting') }}"><img alt="thumb-63" src="assets/images/services/advisory-&-consulting.webp"></a>
                            <div class="tag">
                                <p>No - 01</p>
                            </div>
                            <div class="content">
                                <h5>Advisory & Consulting</h5>
                                <p>Codes of conduct, professional ethics, crisis readiness, and investigations framework.</p>
                                <div class="join-us">
                                    <a class='e-primary-btn has-icon' href="{{ url('service/advisory-consulting') }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 m-b-30">
                    <div class="project-card style-2 style-service">
                        <div class="thumb">
                            <a href="{{ url('service/training-workshops') }}"><img alt="thumb-63" src="assets/images/services/training-&-workshops.webp"></a>
                            <div class="tag">
                                <p>No - 02</p>
                            </div>
                            <div class="content">
                                <h5>Training & Workshops</h5>
                                <p>Leader labs, frontline drills, summer camps, seminars, and conferences.</p>
                                <div class="join-us">
                                    <a class='e-primary-btn has-icon' href="{{ url('service/training-workshops') }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 m-b-30">
                    <div class="project-card style-2 style-service">
                        <div class="thumb">
                            <a href="{{ url('service/certification-programs') }}"><img alt="thumb-63" src="assets/images/services/certification-programs.webp"></a>
                            <div class="tag">
                                <p>No - 03</p>
                            </div>
                            <div class="content">
                                <h5>Certification Programs</h5>
                                <p>Role-based credentials; submit EOI to host in your organisation.</p>
                                <div class="join-us">
                                    <a class='e-primary-btn has-icon' href="{{ url('service/certification-programs') }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 m-b-30">
                    <div class="project-card style-2 style-service">
                        <div class="thumb">
                            <a href="{{ url('service/measure-maintain') }}"><img alt="thumb-63" src="assets/images/services/measure-&-maintain.webp"></a>
                            <div class="tag">
                                <p>No - 04</p>
                            </div>
                            <div class="content">
                                <h5>Measure & Maintain</h5>
                                <p>Culture audits, pulse checks, dashboards, and remediation playbooks.</p>
                                <div class="join-us">
                                    <a class='e-primary-btn has-icon' href="{{ url('service/measure-maintain') }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 m-b-30">
                    <div class="project-card style-2 style-service">
                        <div class="thumb">
                            <a href="{{ url('service/centres-accreditation') }}"><img alt="thumb-63" src="assets/images/services/centres-&-accreditation.webp"></a>
                            <div class="tag">
                                <p>No - 05</p>
                            </div>
                            <div class="content">
                                <h5>Centres & Accreditation</h5>
                                <p>Set up a Centre for Business Ethics; get your institution accredited.</p>
                                <div class="join-us">
                                    <a class='e-primary-btn has-icon' href="{{ url('service/centres-accreditation') }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 m-b-30">
                    <div class="project-card style-2 style-service">
                        <div class="thumb">
                            <a href="{{ url('service/coaching-mentoring') }}"><img alt="thumb-63" src="assets/images/services/coaching-&-mentoring.webp"></a>
                            <div class="tag">
                                <p>No - 06</p>
                            </div>
                            <div class="content">
                                <h5>Coaching & Mentoring</h5>
                                <p>1:1 and cohort journeys for ethical leadership.</p>
                                <div class="join-us">
                                    <a class='e-primary-btn has-icon' href="{{ url('service/coaching-mentoring') }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 