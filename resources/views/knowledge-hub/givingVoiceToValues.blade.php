@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')

   <section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="details-layout-wrap">
                    <div class="details-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">

                        <!-- Thumbnail -->
                        <div class="thumb-wrap m-b-50">
                            <img src="{{ asset('assets/images/giving-voice-to-values.webp') }}" alt="thumb"/>
                        </div>

                        <!-- Title -->
                        <div class="details-title m-b-15">
                            <h2>Giving Voice to Values (GVV)</h2>
                        </div>

                        <!-- Intro Paragraph -->
                        <div class="detail-text m-b-30">
                            <p>
                                <b>Giving Voice to Values (GVV) is a powerful, practice-oriented approach to ethics that focuses not only on identifying the right thing to do — but on equipping individuals to confidently act on their values in real-world situations.</b>
                            </p>
                            <p>
                                Instead of debating “What is the right thing?”, GVV asks:  
                                <b>“How do I speak up? How do I implement ethical action effectively?”</b>  
                                Whether you're a leader, employee, entrepreneur, or student, GVV offers tested tools, scripts, and strategies to turn ethical intention into ethical impact.
                            </p>
                        </div>

                        <!-- Section 2 -->
                        <div class="details-title m-b-15">
                            <h2>Core Principles of GVV</h2>
                        </div>

                        <div class="detail-text m-b-25">
                            <p>
                                The GVV approach is based on the understanding that values conflicts are inevitable — but preparation and practice can transform individuals into confident ethical actors.
                            </p>
                        </div>

                        <!-- Lists -->
                        <div class="list-wrapper m-b-40">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Ethical action is a skill that can be practiced and strengthened.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>You are not alone — others share similar values and concerns.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Values conflicts can be approached with calm, clarity, and strategy.</p>
                                </li>
                            </ul>

                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Rehearsal builds confidence for real-world ethical challenges.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>GVV equips you with scripts, frameworks, and influence tactics.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Ethics is most effective when embedded into everyday decisions.</p>
                                </li>
                            </ul>
                        </div>

                        <!-- Testimonial -->
                        <div class="testimonial-wrap m-b-60">
                            <div class="icon">
                                <img src="assets/img/icons/icon-17.svg" alt="icon">
                            </div>
                            <p class="review">
                                “GVV enables people to move beyond fear and hesitation. It transforms ethical awareness into ethical action through preparation, scripting, and confidence-building practice.”
                            </p>
                            <div class="author">
                                <h3>Mary C. Gentile</h3>
                                <p>Creator of the Giving Voice to Values Program</p>
                            </div>
                        </div>

                        <!-- How to Improve -->
                        <div class="details-title m-b-15">
                            <h2>How GVV Strengthens Ethical Leadership</h2>
                        </div>

                        <div class="detail-text m-b-20">
                            <p>
                                GVV helps individuals rehearse real-life ethical situations before they happen. This proactive mindset builds clarity, courage, and influence — essential qualities for modern ethical leaders.
                            </p>
                        </div>

                        <div class="list-wrapper m-b-50">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Developing scripts for difficult conversations with stakeholders.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Practicing persuasive, values-driven communication strategies.</p>
                                </li>
                            </ul>
                        </div>

                        <!-- CTA -->
                        <div class="d-cta-wrap">
                            <div class="content-wrap">
                                <div class="common-title text-start">
                                    <h2>We Are Always Ready to Support Your Ethical Leadership Journey <span>✨</span></h2>
                                </div>
                                <div class="blog-btn">
                                    <a class='e-primary-btn has-icon' href='#'>
                                        Have Questions About GVV?
                                        <span class="icon-wrap">
                                            <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="thumb-wrap">
                                <img src="assets/img/shapes/shape-45.webp" alt="shape">
                            </div>
                            <div class="d-shape-1">
                                <img src="assets/img/shapes/shape-46.webp" alt="shape">
                            </div>
                        </div>

                    </div>

                    @include('knowledge-hub.sidebar')

                </div>
            </div>
        </div>
    </div>

    <div class="d-shape-1">
        <img src="assets/img/shapes/shape-31.webp" alt="shape-31"/>
    </div>
</section>

@endsection 