@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')
    <section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="details-layout-wrap">

                    <!-- MAIN CONTENT -->
                    <div class="details-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">

                        <!-- THUMB -->
                        <div class="thumb-wrap m-b-50">
                            <img src="{{ asset('assets/images/individual-business-ethics.webp') }}" alt="thumb"/>
                        </div>

                        <!-- TITLE -->
                        <div class="details-title m-b-15">
                            <h2>Individual & Business Ethics</h2>
                        </div>

                        <!-- INTRO CONTENT -->
                        <div class="detail-text m-b-30">
                            <p><b>Ethical behavior begins with individuals — but its influence shapes entire workplaces.</b></p>

                            <p>
                                Individual ethics guide personal decision-making, integrity, and moral judgment.
                                Business ethics extend these values across teams, policies, and systems, ensuring fairness,
                                responsibility, transparency, and respect for all stakeholders.
                                When individuals and organizations align their values, they build cultures of trust,
                                accountability, and long-term ethical performance.
                            </p>
                        </div>

                        <!-- ACTIVITIES & FEATURES -->
                        <div class="details-title m-b-15">
                            <h2>Core Ethical Dimensions</h2>
                        </div>

                        <div class="detail-text m-b-25">
                            <p>
                                Understanding these dimensions helps individuals and leaders navigate ethical dilemmas
                                with confidence and clarity.
                            </p>
                        </div>

                        <div class="list-wrapper m-b-40">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Integrity — choosing the right path even when no one is watching.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Accountability — owning actions, decisions, and their consequences.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Fairness — ensuring impartiality and equal treatment.</p>
                                </li>
                            </ul>

                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Transparency — being open, clear, and honest in communication.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Respect — valuing people, perspectives, and human dignity.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Responsibility — recognizing the social and environmental impact of choices.</p>
                                </li>
                            </ul>
                        </div>

                        <!-- TESTIMONIAL / QUOTE -->
                        <div class="testimonial-wrap m-b-60">
                            <div class="icon">
                                <img src="assets/img/icons/icon-17.svg" alt="icon">
                            </div>
                            <p class="review">
                                “Ethics is not a checklist — it is a culture shaped by everyday decisions made by individuals and teams.”
                            </p>
                            <div class="author">
                                <h3><span class="green">Ethics<span class="golden">4</span>Work</span>Insights</h3>
                                <p>Knowledge Hub</p>
                            </div>
                        </div>

                        <!-- HOW TO IMPROVE -->
                        <div class="details-title m-b-15">
                            <h2>Building Ethical Decision-Making Skills</h2>
                        </div>

                        <div class="detail-text m-b-20">
                            <p>
                                Ethical decision-making improves through practice, reflection, and structured frameworks
                                that help individuals assess dilemmas objectively and responsibly.
                            </p>
                        </div>

                        <div class="list-wrapper m-b-50">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Identify the ethical dilemma clearly and without bias.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Consider the impact and consequences for all stakeholders.</p>
                                </li>
                            </ul>
                        </div>

                        <!-- CTA -->
                        <div class="d-cta-wrap">
                            <div class="content-wrap">
                                <div class="common-title text-start">
                                    <h2>We’re Here to Help You Understand Ethics Better <span>😊</span></h2>
                                </div>
                                <div class="blog-btn">
                                    <a class='e-primary-btn has-icon' href='#'>
                                        Have Questions?
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

        <div class="d-shape-1">
            <img src="assets/img/shapes/shape-31.webp" alt="shape-31"/>
        </div>

    </section>

@endsection 