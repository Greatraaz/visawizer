@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')

 <section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="details-layout-wrap">
                    <div class="details-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">

                        <!-- Top Featured Image -->
                        <div class="thumb-wrap m-b-50">
                            <img src="{{ asset('assets/images/business-society.webp') }}" alt="thumb"/>
                        </div>

                        <!-- Title -->
                        <div class="details-title m-b-15">
                            <h2>The Interdependence of Business & Society</h2>
                        </div>

                        <!-- Intro Content -->
                        <div class="detail-text m-b-30">
                            <p>
                                <b>“Businesses don’t operate in isolation—they influence and are shaped by the social systems around them.”</b>
                            </p>

                            <p>
                                The relationship between business and society is dynamic, interdependent, and constantly evolving.
                                Ethical leadership, responsible decision-making, and rising societal expectations shape how 
                                organizations operate and grow. Whether it is sustainability, labour rights, governance, or community 
                                well-being, businesses today are expected to create value that extends beyond profits.
                            </p>

                            <p>
                                Understanding this relationship empowers leaders to make decisions that balance economic goals with
                                transparency, fairness, and long-term trust.
                            </p>
                        </div>

                        <!-- Section Title -->
                        <div class="details-title m-b-15">
                            <h2>Key Themes & Insights</h2>
                        </div>

                        <div class="detail-text m-b-25">
                            <p>
                                The business–society connection is influenced by ethical expectations, regulatory frameworks, and 
                                cultural values. These core principles help organizations navigate this space responsibly.
                            </p>
                        </div>

                        <!-- Lists -->
                        <div class="list-wrapper m-b-40">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>How businesses influence communities, livelihoods, and social well-being.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>The role of ethics and governance in strengthening public trust.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Balancing economic performance with social responsibility and fairness.</p>
                                </li>
                            </ul>

                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>The long-term importance of sustainability, environmental stewardship, and ESG commitments.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>The ethical and responsible use of technology, data, and digital innovation.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Understanding stakeholder needs and how they shape organizational decisions.</p>
                                </li>
                            </ul>
                        </div>

                        <!-- Testimonial Block -->
                        <div class="testimonial-wrap m-b-60">
                            <div class="icon">
                                <img src="assets/img/icons/icon-17.svg" alt="icon">
                            </div>
                            <p class="review">
                                Ethical business practice is no longer optional—it is foundational to sustainable success.
                                Organizations that respect societal values earn trust, credibility, and long-term growth.
                                The business–society connection is ultimately about creating shared value for all.
                            </p>
                            <div class="author">
                                <h3><span class="green">Ethics<span class="golden">4</span>Work</span>Insights Team</h3>
                                <p>Business Ethics & Research</p>
                            </div>
                        </div>

                        <!-- Improvement Section -->
                        <div class="details-title m-b-15">
                            <h2>How Businesses Can Strengthen Their Societal Impact</h2>
                        </div>

                        <div class="detail-text m-b-20">
                            <p>
                                Building a positive business–society relationship requires consistent ethical actions,
                                transparent communication, and responsible policies. Organizations must engage stakeholders,
                                adopt sustainable practices, and align decisions with long-term societal welfare.
                            </p>
                        </div>

                        <div class="list-wrapper m-b-50">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Integrate ethical frameworks into leadership, culture, and daily operations.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Collaborate with communities and policymakers to ensure fair, responsible growth.</p>
                                </li>
                            </ul>
                        </div>

                        <!-- CTA -->
                        <div class="d-cta-wrap">
                            <div class="content-wrap">
                                <div class="common-title text-start">
                                    <h2>We’re Here to Support Your Ethical Journey <span>🌱</span></h2>
                                </div>
                                <div class="blog-btn">
                                    <a class='e-primary-btn has-icon' href="{{ url('contact-us') }}">
                                        Have You Any Questions?
                                        <span class="icon-wrap">
                                            <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="thumb-wrap">
                                <img src="{{ asset('assets/images/we-are-here.webp') }}" alt="shape">
                            </div>
                            <div class="d-shape-1">
                                <img src="{{ asset('assets/img/shapes/shape-46.webp') }}" alt="shape">
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
    </div>
</section>

@endsection 