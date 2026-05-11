@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')
  <section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="details-layout-wrap">
                    <div class="details-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">

                        <!-- Main Banner -->
                        <div class="thumb-wrap m-b-50">
                            <img src="{{ asset('assets/images/corporate-social-responsibility.webp') }}" alt="thumb"/>
                        </div>

                        <!-- Title -->
                        <div class="details-title m-b-15">
                            <h2>Corporate Social Responsibility (CSR): Building Businesses That Do Good</h2>
                        </div>

                        <div class="detail-text m-b-30">
                            <p>
                                <b>“CSR is not an obligation—it is an opportunity to create long-term value for society, the environment and the business itself.”</b>
                            </p>

                            <p>
                                Corporate Social Responsibility reflects how organisations contribute to economic,
                                social, and environmental well-being. Whether it's creating ethical workspaces,
                                reducing carbon footprints, or strengthening communities, CSR aligns business growth with
                                sustainable progress. When done right, CSR becomes a strategic tool for trust,
                                reputation, and responsible leadership.
                            </p>
                        </div>

                        <!-- Activities & Features -->
                        <div class="details-title m-b-15">
                            <h2>Key CSR Activities & Impact Areas</h2>
                        </div>

                        <div class="detail-text m-b-25">
                            <p>
                                Effective CSR programs are intentional, measurable, and closely integrated with an
                                organisation’s mission and values. Below are core areas where companies contribute
                                meaningfully.
                            </p>
                        </div>

                        <div class="list-wrapper m-b-40">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Environmental protection and sustainability initiatives.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Community development programs and social upliftment.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Responsible governance and transparent workplace practices.</p>
                                </li>
                            </ul>

                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Employee well-being, diversity, and ethical labor standards.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Ethical sourcing and sustainable supply-chain management.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Education, skilling, and capacity-building initiatives.</p>
                                </li>
                            </ul>
                        </div>

                        <!-- Testimonial -->
                        <div class="testimonial-wrap m-b-60">
                            <div class="icon">
                                <img src="assets/img/icons/icon-17.svg" alt="icon">
                            </div>
                            <p class="review">
                                “Responsible organisations recognise that profit and purpose go hand in hand. CSR builds
                                lasting value—strengthening trust, enhancing reputation, and ensuring ethical stewardship
                                of resources.”
                            </p>
                            <div class="author">
                                <h3><span class="green">Ethics<span class="golden">4</span>Work</span> Insights</h3>
                                <p>Thought Leadership Commentary</p>
                            </div>
                        </div>

                        <!-- Improvement Section -->
                        <div class="details-title m-b-15">
                            <h2>How Organisations Can Strengthen Their CSR Strategy</h2>
                        </div>

                        <div class="detail-text m-b-20">
                            <p>
                                Meaningful CSR requires consistency, long-term commitment, and a strategic approach.
                                Organisations must focus on impact-based initiatives anchored in ethics, stakeholder
                                needs, and sustainable growth.
                            </p>
                        </div>

                        <div class="list-wrapper m-b-50">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Align CSR goals with organisational purpose and stakeholder expectations.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Measure impact and report outcomes transparently to build trust.</p>
                                </li>
                            </ul>
                        </div>

                        <!-- CTA -->
                        <div class="d-cta-wrap">
                            <div class="content-wrap">
                                <div class="common-title text-start">
                                    <h2>We Are Always Ready to Help You Explore Ethical Business Practices <span>🌱</span></h2>
                                </div>
                                <div class="blog-btn">
                                    <a class='e-primary-btn has-icon' href='#'>
                                        Have Any Questions?
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