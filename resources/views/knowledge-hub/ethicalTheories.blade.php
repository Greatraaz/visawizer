@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')

 <section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="details-layout-wrap">
                    <div class="details-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">

                        <!-- Featured Image -->
                        <div class="thumb-wrap m-b-50">
                            <img src="{{ asset('assets/images/ethical-theory.webp') }}" alt="thumb"/>
                        </div>

                        <!-- PAGE TITLE -->
                        <div class="details-title m-b-15">
                            <h2>Understanding Ethical Theories</h2>
                        </div>

                        <!-- INTRO PARAGRAPH -->
                        <div class="detail-text m-b-30">
                            <p>
                                <b>Ethical theories help individuals and businesses evaluate actions, intentions, and outcomes through structured moral reasoning.</b>
                            </p>
                            <p>
                                From assessing consequences to analyzing duties and character, ethical frameworks guide responsible decision-making in complex situations. 
                                These theories form the foundation of business ethics, enabling leaders to navigate dilemmas with clarity, fairness, and integrity.
                            </p>
                        </div>

                        <!-- SECTION TITLE -->
                        <div class="details-title m-b-15">
                            <h2>Core Ethical Frameworks</h2>
                        </div>

                        <!-- SECTION TEXT -->
                        <div class="detail-text m-b-25">
                            <p>
                                Below are the most influential ethical theories that shape modern business conduct and individual decision-making.
                            </p>
                        </div>

                        <!-- LISTS -->
                        <div class="list-wrapper m-b-40">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p><b>Utilitarianism:</b> Decisions should maximize overall happiness and minimize harm.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p><b>Deontology:</b> Actions are moral when they follow duty, rules, and universal principles.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p><b>Virtue Ethics:</b> Focuses on character and virtues such as honesty, courage, and fairness.</p>
                                </li>
                            </ul>

                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p><b>Rights Theory:</b> Actions must respect individual rights and dignity.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p><b>Justice Theory:</b> Ensures fairness, equality, and equitable distribution of benefits and burdens.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p><b>Ethical Relativism:</b> Morality varies based on cultural and contextual norms.</p>
                                </li>
                            </ul>
                        </div>


                        <!-- TESTIMONIAL QUOTE -->
                        <div class="testimonial-wrap m-b-60">
                            <div class="icon">
                                <img src="assets/img/icons/icon-17.svg" alt="icon">
                            </div>
                            <p class="review">
                                Ethical theories offer a compass for decision-making. When organizations align actions with moral principles, trust, reputation, and long-term value naturally grow.
                            </p>
                            <div class="author">
                                <h3><span class="green">Ethics<span class="golden">4</span>Work</span>Insights Team</h3>
                                <p>Business Ethics Researchers</p>
                            </div>
                        </div>

                        <!-- IMPROVEMENT SECTION -->
                        <div class="details-title m-b-15">
                            <h2>Applying Ethical Theories in Real Decisions</h2>
                        </div>

                        <div class="detail-text m-b-20">
                            <p>
                                Leaders can strengthen ethical judgment by using these theories as analytical tools. 
                                They help interpret dilemmas from multiple lenses—outcomes, duties, rights, fairness, and character.
                            </p>
                        </div>

                        <div class="list-wrapper m-b-50">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Evaluate consequences and impacts on all stakeholders.</p>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-check"></i></div>
                                    <p>Ensure actions align with rules, values, and organizational ethics.</p>
                                </li>
                            </ul>
                        </div>

                        <!-- CTA -->
                        <div class="d-cta-wrap">
                            <div class="content-wrap">
                                <div class="common-title text-start">
                                    <h2>Need Help Understanding or Teaching Ethical Theories? <span>📘</span></h2>
                                </div>
                                <div class="blog-btn">
                                    <a class='e-primary-btn has-icon' href='#'>
                                        Contact Us
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