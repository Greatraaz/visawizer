@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')

<section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="details-layout-wrap">
                    <div class="details-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">

                        <!-- Thumb -->
                        <div class="thumb-wrap m-b-50">
                            <img src="{{ asset('assets/images/sustainability-esg.webp') }}" alt="thumb"/>
                        </div>

                        <!-- Title -->
                        <div class="details-title m-b-15">
                            <h2>Sustainability & ESG</h2>
                        </div>

                        <!-- Intro -->
                        <div class="detail-text m-b-30">
                            <p>
                                <b>“Sustainability is not just a compliance requirement — it is a strategic pathway to long-term value, trust, and responsible growth.”</b>
                            </p>
                            <p>
                                At <span class="green">Ethics<span class="golden">4</span>Work</span>, we help organizations embed Environmental, Social, and Governance (ESG) principles into everyday operations. 
                                Our approach strengthens transparency, reduces risk, accelerates ethical decision-making, and aligns your business with global frameworks such as 
                                GRI, BRSR, SASB, TCFD, and the United Nations Sustainable Development Goals.
                            </p>
                        </div>

                        <!-- Activities & Features -->
                        <div class="details-title m-b-15">
                            <h2>Key Activities & Features</h2>
                        </div>

                        <div class="detail-text m-b-25">
                            <p>
                                Our ESG framework empowers organizations to build resilience, demonstrate accountability, and create measurable long-term impact.
                            </p>
                        </div>

                        <!-- Bullet Lists -->
                        <div class="list-wrapper m-b-40">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <p>Comprehensive ESG & sustainability assessments aligned with global standards.</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <p>Development of ESG policies covering environment, ethics, labour, and governance.</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <p>Design of measurable KPIs and reporting frameworks for disclosures.</p>
                                </li>
                            </ul>
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <p>Carbon footprint analysis and climate action strategies including Net-Zero roadmaps.</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <p>Social impact program design — CSR, DEI, and community engagement.</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <p>Responsible supply-chain evaluation, due diligence, and ethical sourcing models.</p>
                                </li>
                            </ul>
                        </div>

                        <!-- Testimonial -->
                        <div class="testimonial-wrap m-b-60">
                            <div class="icon">
                                <img src="assets/img/icons/icon-17.svg" alt="icon">
                            </div>
                            <p class="review">
                                “Ethical sustainability frameworks empower organizations not only to meet compliance standards but also to build credibility and long-term stakeholder trust.”
                            </p>
                            <div class="author">
                                <h3><span class="green">Ethics<span class="golden">4</span>Work</span>Insights</h3>
                                <p>ESG & Responsibility Advisory</p>
                            </div>
                        </div>

                        <!-- How to Improve -->
                        <div class="details-title m-b-15">
                            <h2>How Organizations Can Improve ESG Performance</h2>
                        </div>

                        <div class="detail-text m-b-20">
                            <p>
                                Continuous improvement in sustainability requires a blend of data-driven insights, stakeholder dialogue, responsible governance, and transparent reporting. 
                                We help organizations adopt future-ready practices to enhance environmental performance, social responsibility, and governance integrity.
                            </p>
                        </div>

                        <div class="list-wrapper m-b-50">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <p>Strengthen governance structures and board-level oversight of ESG priorities.</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                    <p>Build transparent ESG reporting systems with accurate, verifiable metrics.</p>
                                </li>
                            </ul>
                        </div>

                        <!-- CTA -->
                        <div class="d-cta-wrap">
                            <div class="content-wrap">
                                <div class="common-title text-start">
                                    <h2>We Are Ready to Support Your Sustainability Journey <span>🌿</span></h2>
                                </div>
                                <div class="blog-btn">
                                    <a class='e-primary-btn has-icon' href='#'>
                                        Have Questions About ESG?
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