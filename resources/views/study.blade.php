@extends('layouts.frontend')
@section('content')
    @include('partials.studyPageStyles')


{{-- Section 1: Hero --}}
<section class="hero-section-5 study-s1-hero" style="background-image: url('{{ asset('assets/images/services/banner-2.webp') }}');">
    <div class="container">
        <div class="hero-content-5">
            <div class="study-hero-tag" data-aos="fade-up" data-aos-delay="100">Your Australian study journey starts here</div>
            <div class="title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h1>Study in Australia with clear education and visa guidance</h1>
            </div>
            <div class="text" data-aos="fade-up" data-aos-delay="350" data-aos-duration="1000">
                <p class="study-copy-sub">From choosing the right course to preparing your student visa and planning your post-study pathway, Visawizer helps you move with clarity and confidence.</p>
            </div>
            <div class="text" data-aos="fade-up" data-aos-delay="450" data-aos-duration="1000">
                <p class="study-copy-body">Australia continues to be one of the most preferred destinations for international students seeking quality education, global exposure, and future career opportunities. Choosing the right course, institution, location, budget, and visa pathway can feel confusing without proper guidance. At Visawizer, we support students at every stage — course selection, admission, OSHC, student visa planning, course change, institution transfer, and post-study visa options.</p>
            </div>
            <div class="study-hero-actions" data-aos="fade-up" data-aos-delay="550" data-aos-duration="1000">
                <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                    Book Study Consultation
                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                </a>
                <a class="study-btn-outline-light" href="#study-visa-support">Explore Student Visa Options</a>
            </div>
        </div>
        <div class="shape"><img alt="" src="{{ asset('assets/img/shapes/shape-39.webp') }}"></div>
    </div>
</section>

{{-- Section 2: Pathway grid — services-section-3 / service-card-3 (reference: services, cmpd) --}}
<section class="services-section-3 study-s2-services p-t-100 p-b-100 p-t-xs-80 p-b-xs-80">
    <div class="container">
        <div class="study-section-head-center text-center" data-aos="fade-up">
            <div class="common-subtitle text-uppercase justify-content-center"><span>Choose your starting point</span></div>
            <div class="common-title m-b-15"><h2>Find the right study support for your situation</h2></div>
            <p class="study-copy-sub m-b-0" style="max-width:640px;">Whether you are planning your first admission or looking for a post-study pathway, we help you identify the next right step.</p>
        </div>
        <div class="row row-gap-4 study-s2-visual-grid" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/cmpd.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-graduation-cap"></i></div>
                        <h3>Education Counselling</h3>
                        <p>Understand study options, institutions, course suitability, and long-term career alignment.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/services/banner-3.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-building-columns"></i></div>
                        <h3>Admissions Support</h3>
                        <p>Guided support for applying to colleges, universities, and programs that match your profile.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/services/image-21.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-passport"></i></div>
                        <h3>Student Visa Guidance</h3>
                        <p>Prepare for Student Visa 500, Student Guardian 590, and Training Visa 407 pathways with structured support.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/services/image-52.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-heart-pulse"></i></div>
                        <h3>OSHC Assistance</h3>
                        <p>Help arranging Overseas Student Health Cover aligned with your study and visa needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/services/image-43.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-arrows-rotate"></i></div>
                        <h3>Course &amp; College Change</h3>
                        <p>Guidance if you need to change your course, education provider, or academic direction.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/area/image-31.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-route"></i></div>
                        <h3>Graduate Pathways</h3>
                        <p>Explore Temporary Graduate Visa 485 and post-study work options after completing your studies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 3: Split imagery + checklist — why-us-section-4 (reference: collaborations) --}}
<section class="why-us-section-4 study-s3-mission p-t-120 p-b-100 p-t-md-100 p-t-xs-80 p-b-xs-80 m-t-0 m-b-0">
    <div class="container">
        <div class="row row-gap-5 align-items-center">
            <div class="col-xl-6">
                <div class="thumb px-xl-5 left" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="thumb-1">
                        <img src="{{ asset('assets/images/services/image-21.webp') }}" alt="Study planning">
                    </div>
                    <div class="thumb-2"><img src="{{ asset('assets/images/services/image-52.webp') }}" alt="Learning environment"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb"><img src="{{ asset('assets/images/services/image-43.webp') }}" alt="Student support"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle text-uppercase"><span>More than a degree</span></div>
                    <div class="common-title text-start"><h2>An education destination with global possibilities</h2></div>
                    <div class="text">
                        <p class="study-copy-sub">Australia offers international students academic quality, multicultural exposure, and pathways that can support long-term personal and professional growth.</p>
                        <p class="study-copy-body">Studying in Australia is not just about getting admission into an institution. It is about choosing a course that fits your background, your career goals, your budget, your migration possibilities, and your future aspirations. Our role is to help you make an informed decision before you invest time, money, and effort into your international education journey.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Globally recognised education system</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Wide range of courses and institutions</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Multicultural student environment</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Personal and professional development</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Post-study planning for eligible graduates</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape"><img alt="" src="{{ asset('assets/img/shapes/shape-40.webp') }}"></div>
</section>

{{-- Section 4: Journey steps — dark band + service-card-3 grid (reference: featured / training mix) --}}
<section class="study-s4-process" id="how-visawizer-helps">
    <div class="container">
        <div class="section-top-9 text-center">
            <div class="common-subtitle text-uppercase justify-content-center" data-aos="fade-up"><span>Guided from start to next step</span></div>
            <div class="common-title m-b-15" data-aos="fade-up" data-aos-delay="100"><h2>Complete support for your study journey</h2></div>
            <p class="study-s4-intro m-b-0 mx-auto" style="max-width:700px;" data-aos="fade-up" data-aos-delay="200">We help you move from confusion to a structured study and visa action plan.</p>
        </div>
        <div class="row row-gap-4 study-s4-cards-row justify-content-center" data-aos="fade-up" data-aos-delay="250">
            <div class="col-xl-4 col-md-6">
                <div class="study-journey-card">
                    <div class="journey-icon"><i class="fa-light fa-user-check"></i></div>
                    <div class="journey-no">01</div>
                    <h4>Profile Assessment</h4>
                    <p>We review your academic background, work history, English language readiness, budget, and long-term goals.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="study-journey-card">
                    <div class="journey-icon"><i class="fa-light fa-list-check"></i></div>
                    <div class="journey-no">02</div>
                    <h4>Course &amp; Institution Shortlisting</h4>
                    <p>We help identify suitable education options based on your eligibility and career direction.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="study-journey-card">
                    <div class="journey-icon"><i class="fa-light fa-file-signature"></i></div>
                    <div class="journey-no">03</div>
                    <h4>Admission Support</h4>
                    <p>We guide you through document preparation, application coordination, and offer letter requirements.</p>
                </div>
            </div>
        </div>
        <div class="row row-gap-4 study-s4-bottom-row" data-aos="fade-up" data-aos-delay="320">
            <div class="col-xl-4 col-md-6">
                <div class="study-journey-card">
                    <div class="journey-icon"><i class="fa-light fa-file-shield"></i></div>
                    <div class="journey-no">04</div>
                    <h4>Visa Planning</h4>
                    <p>We help you understand visa requirements, documentation needs, and application readiness.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="study-journey-card">
                    <div class="journey-icon"><i class="fa-light fa-compass"></i></div>
                    <div class="journey-no">05</div>
                    <h4>Post-Study Direction</h4>
                    <p>We help you think beyond admission by reviewing graduate and future migration possibilities.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 5: Student Visa & Compliance Support --}}
<section class="study-s5-visa" id="study-visa-support">
    <div class="container">
        <div class="row align-items-stretch row-gap-4 justify-content-center">
            <div class="col-xl-6 col-lg-6" data-aos="fade-up">
                <div class="study-s5-intro-card">
                    <div class="common-subtitle text-uppercase"><span>Prepare with confidence</span></div>
                    <div class="common-title text-start m-b-15"><h2>Student visa guidance that goes beyond paperwork</h2></div>
                    <p class="visa-lead visa-highlight m-t-10 m-b-0">Your visa application should reflect your genuine study intention, financial readiness, education plan, and future clarity.</p>
                    <p class="visa-lead m-t-25 m-b-0">A student visa application is not only about submitting forms. It requires a complete and consistent picture of your study purpose, course selection, financial position, documentation, health cover, and future plans.</p>
                    <p class="visa-lead m-t-20 m-b-0">Visawizer helps students organise their information, understand requirements, and reduce avoidable errors before submission.</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6" data-aos="fade-up" data-aos-delay="120">
                <div class="study-s5-support-card">
                    <div class="study-s5-support-head">
                        <p class="study-s5-support-heading">Support Areas:</p>
                    </div>
                    <ul class="study-support-list">
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Student Visa Subclass 500 guidance</span></li>
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Student Guardian Visa Subclass 590 guidance</span></li>
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Training Visa Subclass 407 guidance</span></li>
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>OSHC planning</span></li>
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Documentation checklist support</span></li>
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Application review and next-step guidance</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 6: make-donate-section (reference: collaborations / training-workshops) --}}
<section class="make-donate-section study-s6-donate">
    <div class="container">
        <div class="make-donate-layout" data-aos="fade-up" data-aos-duration="1000">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <div class="donate-left" style="background-image: url('{{ asset('assets/img/shapes/shape-43.webp') }}');">
                        <div class="common-subtitle m-b-15" style="color: rgba(255,255,255,0.9);"><span>Already studying in Australia?</span></div>
                        <h4 class="text-white m-b-20">Support for course changes, college changes, and study decisions</h4>
                        <p class="m-b-0">If your current course, provider, or study direction no longer fits your goal, we can help you review your options carefully.</p>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="rightArea">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <p class="study-copy-body">Many students realise after arriving in Australia that their course, college, location, or career direction may not be the right fit. Any change should be considered carefully because it can affect academic progress, visa conditions, future eligibility, and long-term planning.</p>
                                <p class="study-copy-body m-b-20">Visawizer helps students understand their options before making a change.</p>
                                <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                                    Discuss My Study Situation
                                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                                </a>
                            </div>
                            <div class="col-md-6 m-t-xs-30">
                                <img src="{{ asset('assets/images/services/side6.webp') }}" alt="Students reviewing study options in Australia">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 7: Graduate pathways + image (reference: mission-vision / case-studies split) --}}
<section class="study-s7-split">
    <div class="container">
        <div class="row row-gap-5 align-items-center">
            <div class="col-xl-6 order-xl-2" data-aos="fade-up" data-aos-delay="150">
                <div class="study-grad-thumb">
                    <img src="{{ asset('assets/images/area/image-31.webp') }}" alt="Graduate planning next steps in Australia">
                </div>
            </div>
            <div class="col-xl-6 order-xl-1" data-aos="fade-up">
                <div class="study-grad-card m-b-0">
                    <span class="study-grad-tag">After your studies</span>
                    <h2>Plan your next step after completing your course</h2>
                    <p class="study-grad-sub m-b-0">Graduation is not the end of the journey. For many students, it is the beginning of work experience, further study, or migration planning.</p>
                    <div class="study-grad-body m-t-20">
                        <p class="m-b-0">Eligible international graduates may explore Temporary Graduate Visa 485 and related post-study options depending on their qualification, study history, and current rules. The Temporary Graduate visa allows eligible international students to live, study and work in Australia temporarily after completing their studies.</p>
                        <p class="m-t-20 m-b-0">Visawizer helps you understand your possible next steps before your current visa timeline becomes urgent.</p>
                    </div>
                    <div class="study-grad-cta">
                        <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                            Explore Graduate Visa Options
                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 8: donate-to-us banner CTA (reference: collaborations bottom / recommended-books) --}}
<section class="donate-to-us-section study-s8-banner" style="background-image: url('{{ asset('assets/images/services/big6.webp') }}');">
    <div class="container">
        <div class="donate-to-us-layout">
            <div class="become-volunteer-card mb-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-light fa-calendar-check"></i>
                </div>
                <div class="common-subtitle text-uppercase justify-content-center m-b-10"><span>Take the first informed step</span></div>
                <h2>Ready to plan your Australian study journey?</h2>
                <p class="study-s8-lead">Book a consultation with Visawizer and get clarity on course options, admission steps, student visa planning, and post-study possibilities.</p>
                <div class="study-final-actions">
                    <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                        Book Appointment
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                    <a class="study-btn-ghost-dark is-on-dark" href="{{ url('contact-us') }}">Contact Visawizer</a>
                </div>
            </div>
            <div class="icon-shape-1"><img alt="" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" src="{{ asset('assets/img/shapes/shape-44.webp') }}"></div>
        </div>
    </div>
</section>
@endsection
