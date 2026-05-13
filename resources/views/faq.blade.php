@extends('layouts.frontend')
@section('content')
@include('partials.breadcrumb')

<div class="main-content pb-0 pt-93 threed">
    <section class="faq-section p-t-60 p-b-100 p-b-xs-80" style="background-image: url({{ asset('assets/img/bg/why-us-bg.webp') }});">
        <div class="container">
            <div class="text-center m-b-50 m-b-xs-40">
                <div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span>Visa &amp; Immigration services</span>
                </div>
                <div class="common-title mb-0" data-aos="fade-up" data-aos-delay="350" data-aos-duration="1000">
                    <h1 class="h2 mb-0">Frequently Asked Questions</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-11" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="accordion faq-accordion" id="faqPageAccordion">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-page-1" aria-expanded="true" aria-controls="faq-page-1">
                                    <span class="accordion-title">1.</span>What is the procedure for obtaining Immigration Advice?
                                    <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                                </button>
                            </h2>
                            <div id="faq-page-1" class="accordion-collapse collapse show" data-bs-parent="#faqPageAccordion">
                                <div class="accordion-body">
                                    <p>Our Immigration Services are divided into two primary phases.</p>
                                    <p><strong>Stage 1:</strong> involves a consultation session. During this time, we will gather crucial information about your situation and advise you on your available immigration pathways.</p>
                                    <p><strong>Stage 2:</strong> deals with your case management. This could entail processing a visa application, submitting an appeal to a tribunal, or preparing specific waivers or requests for information from the Department. At this stage, we undertake extensive work to help you reach your immigration goals.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-page-2" aria-expanded="false" aria-controls="faq-page-2">
                                    <span class="accordion-title">2.</span>How can I schedule a consultation?
                                    <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                                </button>
                            </h2>
                            <div id="faq-page-2" class="accordion-collapse collapse" data-bs-parent="#faqPageAccordion">
                                <div class="accordion-body">
                                    <p>You can arrange a consultation by contacting us at <a href="tel:+61468963273">+61 468 963 273</a> or sending an email to <a href="mailto:info@visawizer.com.au">info@visawizer.com.au</a>. Please plan to spend about an hour with us during the consultation.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-page-3" aria-expanded="false" aria-controls="faq-page-3">
                                    <span class="accordion-title">3.</span>What if I cannot visit your office in person?
                                    <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                                </button>
                            </h2>
                            <div id="faq-page-3" class="accordion-collapse collapse" data-bs-parent="#faqPageAccordion">
                                <div class="accordion-body">
                                    <p>We provide extensive consultation services via phone, email, or Skype/Video Conference for our clients who are either located interstate or overseas, or for those who prefer not to visit our office in person. Regardless of the communication method chosen, we ensure that you receive the same level of comprehensive advice and information.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-page-4" aria-expanded="false" aria-controls="faq-page-4">
                                    <span class="accordion-title">4.</span>What preparations are required for the consultation?
                                    <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                                </button>
                            </h2>
                            <div id="faq-page-4" class="accordion-collapse collapse" data-bs-parent="#faqPageAccordion">
                                <div class="accordion-body">
                                    <p>Upon finalizing the date and time for your consultation, we will send you a confirmation email, followed by a reminder the day before your scheduled appointment. We will also send you a consultation form to fill out and return to us at least 24 hours prior to your appointment. This form is crucial as it provides us with essential information to better understand your case and ensures that you maximize the benefits of your consultation.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-page-5" aria-expanded="false" aria-controls="faq-page-5">
                                    <span class="accordion-title">5.</span>Is there a charge for the consultation?
                                    <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                                </button>
                            </h2>
                            <div id="faq-page-5" class="accordion-collapse collapse" data-bs-parent="#faqPageAccordion">
                                <div class="accordion-body">
                                    <p>Our fee for Immigration Consultations is <strong>&#36;88</strong>. However, if you decide to proceed with our services for your visa application or appeal, we will offset your consultation fee against your total package fee.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-page-6" aria-expanded="false" aria-controls="faq-page-6">
                                    <span class="accordion-title">6.</span>Can I bring friends and family with me, if I am to be interviewed?
                                    <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                                </button>
                            </h2>
                            <div id="faq-page-6" class="accordion-collapse collapse" data-bs-parent="#faqPageAccordion">
                                <div class="accordion-body">
                                    <p>Yes. You may bring someone for support to your consultation if you wish. Please let us know in advance so we can arrange seating and discuss any privacy or confidentiality considerations for your case.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-page-7" aria-expanded="false" aria-controls="faq-page-7">
                                    <span class="accordion-title">7.</span>What deliverables can I expect from the consultation?
                                    <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                                </button>
                            </h2>
                            <div id="faq-page-7" class="accordion-collapse collapse" data-bs-parent="#faqPageAccordion">
                                <div class="accordion-body">
                                    <p>During the consultation, we will collate the details of your case, analyze it in accordance with the applicable immigration laws, and provide you with:</p>
                                    <ul class="mb-0 ps-3">
                                        <li>A clear outline of your immigration strategy options</li>
                                        <li>The essential milestones required for visa approval</li>
                                        <li>Critical dates pertinent to your immigration strategy</li>
                                        <li>Insight on the current processing times and associated fees</li>
                                        <li>All viable visa options available to you</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-page-8" aria-expanded="false" aria-controls="faq-page-8">
                                    <span class="accordion-title">8.</span>What if I don’t qualify for a visa?
                                    <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                                </button>
                            </h2>
                            <div id="faq-page-8" class="accordion-collapse collapse" data-bs-parent="#faqPageAccordion">
                                <div class="accordion-body">
                                    <p>Our consultations offer a comprehensive evaluation of your immigration options in Australia. Sometimes, determining ineligibility for a visa can be more complex as it necessitates ruling out all potential avenues. Our services are thoroughly professional, requiring extensive research and advice provision in each case, and thus, a fee is applicable.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-page-9" aria-expanded="false" aria-controls="faq-page-9">
                                    <span class="accordion-title">9.</span>Why should I opt for an agent?
                                    <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                                </button>
                            </h2>
                            <div id="faq-page-9" class="accordion-collapse collapse" data-bs-parent="#faqPageAccordion">
                                <div class="accordion-body">
                                    <p>Navigating through immigration law can be intricate, and a single mistake could result in visa denial or revocation, having severe repercussions for the applicant. Relying on advice from non-experts or even official Immigration Department resources can be risky and potentially deceptive. We possess in-depth knowledge of the immigration process and advocate solely on your behalf, not the government’s.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-page-10" aria-expanded="false" aria-controls="faq-page-10">
                                    <span class="accordion-title">10.</span>Why choose Visawizer Education and Migration Services for my visa needs?
                                    <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                                </button>
                            </h2>
                            <div id="faq-page-10" class="accordion-collapse collapse" data-bs-parent="#faqPageAccordion">
                                <div class="accordion-body">
                                    <p>We are a forward-thinking, highly qualified agency dedicated to providing innovative advice. We uphold the utmost professional standards and commit to doing whatever it takes to secure the results you need, even if it means going beyond our financial interests since all our fees are provided upfront. With us, you won’t encounter any hidden costs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-page-11" aria-expanded="false" aria-controls="faq-page-11">
                                    <span class="accordion-title">11.</span>What will be the total cost?
                                    <span class="icon"><span class="icon-plus"></span><span class="icon-minus"></span></span>
                                </button>
                            </h2>
                            <div id="faq-page-11" class="accordion-collapse collapse" data-bs-parent="#faqPageAccordion">
                                <div class="accordion-body">
                                    <p>The workload varies across different visa subclasses, and each individual case may require varying amounts of work. Consequently, we offer personalized cost estimates for every client based on the details gathered during the consultation phase. Additionally, we can provide you with information on government fees and other associated costs for each visa subclass relevant to your immigration strategy.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="text-center m-t-40">
                        <a class="e-primary-btn has-icon" href="{{ url('book-appointment') }}">
                            Book appointment
                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.testi')
</div>
@endsection
