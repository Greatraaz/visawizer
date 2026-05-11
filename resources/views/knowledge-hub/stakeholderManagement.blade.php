@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')

  <section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="details-layout-wrap">
                    <div class="details-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">

                        <!-- Top Thumbnail -->
                        <div class="thumb-wrap m-b-50">
                            <img src="{{ asset('assets/images/stakeholder-management.webp') }}" alt="thumb"/>
                        </div>

                        <!-- Title -->
                        <div class="details-title m-b-15">
                            <h2>Stakeholder Management: Building Responsible & Sustainable Relationships</h2>
                        </div>

                        <!-- Intro Text -->
                        <div class="detail-text m-b-30">
                            <p><b>“Responsible organizations grow through trust. Stakeholder management ensures that every business decision respects people, communities, and the environment.”</b></p>

                            <p>
                                Effective stakeholder management is at the heart of ethical leadership. It helps organizations
                                understand expectations, manage risks, and create long-term value for everyone involved. This
                                approach emphasizes transparency, fairness, and accountability—ensuring decisions positively
                                impact employees, customers, communities, investors, and the environment.
                            </p>
                        </div>

                        <!-- Section: Key Principles -->
                        <div class="details-title m-b-15">
                            <h2>Core Principles of Stakeholder Management</h2>
                        </div>

                        <div class="detail-text m-b-25">
                            <p>
                                Every ethical organization follows a structured approach to balance stakeholder interests and
                                business goals. These principles guide responsible decision-making and help maintain trust.
                            </p>
                        </div>

                        <!-- List -->
                        <div class="list-wrapper m-b-40">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Identifying all key stakeholders and understanding their expectations.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Building transparent communication channels that encourage honest dialogue.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Actively managing risks to protect stakeholder interests.</p>
                                </li>
                            </ul>

                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Balancing short-term performance with long-term sustainability.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Ensuring decisions are ethical, fair, and socially responsible.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Promoting inclusive participation and shared value creation.</p>
                                </li>
                            </ul>
                        </div>

                        <!-- Testimonial -->
                        <div class="testimonial-wrap m-b-60">
                            <div class="icon">
                                <img src="assets/img/icons/icon-17.svg" alt="icon">
                            </div>
                            <p class="review">
                                “Organizations that invest in stakeholder relationships build stronger reputations and
                                outperform those that only focus on short-term profits.”
                            </p>
                            <div class="author">
                                <h3>Dr. A. Mehra</h3>
                                <p>Ethics & Governance Specialist</p>
                            </div>
                        </div>

                        <!-- Section: How to Improve -->
                        <div class="details-title m-b-15">
                            <h2>Strategies to Strengthen Stakeholder Management</h2>
                        </div>

                        <div class="detail-text m-b-20">
                            <p>
                                Organizations can enhance stakeholder engagement by implementing thoughtful strategies that
                                prioritize transparency, participation, and shared outcomes.
                            </p>
                        </div>

                        <div class="list-wrapper m-b-50">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Use stakeholder mapping tools to identify influence, interests, and potential risks.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Create continuous feedback loops through surveys, meetings, and open forums.</p>
                                </li>
                            </ul>
                        </div>

                        <!-- CTA -->
                        <div class="d-cta-wrap">
                            <div class="content-wrap">
                                <div class="common-title text-start">
                                    <h2>We’re Here to Guide You in Ethical Decision-Making <span>✨</span></h2>
                                </div>
                                <div class="blog-btn">
                                    <a class="e-primary-btn has-icon" href="#">
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
    </div>

    <div class="d-shape-1">
        <img src="assets/img/shapes/shape-31.webp" alt="shape-31"/>
    </div>
</section>

@endsection 