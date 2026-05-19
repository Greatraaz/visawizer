@extends('layouts.frontend')
@section('content')

<style type="text/css">
    .faq-page {
        --faq-dark: #071019;
        --faq-ink: #071032;
        --faq-muted: #64748b;
        --faq-accent: var(--theme-color-3);
        --faq-gold: #d7a642;
        --faq-border: rgba(15, 23, 42, 0.1);
    }
    .faq-page .faq-hero {
        padding: clamp(70px, 8vw, 110px) 0;
        background-image:
            linear-gradient(
                165deg,
                color-mix(in srgb, var(--theme-color-3) 72%, transparent) 0%,
                color-mix(in srgb, var(--theme-color-3) 88%, #060308) 45%,
                color-mix(in srgb, var(--theme-color-3) 94%, #030204) 100%
            ),
            url('{{ asset('assets/imgs/study/study-visas/hero-bg.webp') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: #ffffff;
        text-align: center;
    }
    .faq-page .faq-hero h1 {
        color: #ffffff;
        font-size: clamp(2.35rem, 4.8vw, 4.2rem);
        line-height: 1.1;
        margin-bottom: 16px;
    }
    .faq-page .faq-hero p {
        color: rgba(255, 255, 255, 0.88);
        max-width: 720px;
        margin: 0 auto;
        line-height: 1.72;
    }
    .faq-page .faq-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        color: rgba(255, 255, 255, 0.94);
        font-size: 0.82rem;
        font-weight: 900;
        margin-bottom: 14px;
    }
    .faq-page .faq-eyebrow::before {
        content: "";
        width: 42px;
        height: 2px;
        background: var(--faq-gold);
    }
    .faq-page .faq-hero .faq-eyebrow {
        margin-left: auto;
        margin-right: auto;
    }
    .faq-page .faq-main {
        padding: clamp(64px, 7vw, 98px) 0;
        background: linear-gradient(180deg, #f5f7fb 0%, #ffffff 72%);
    }
    .faq-page .faq-main .container {
        max-width: 920px;
    }
    .faq-page .faq-accordion-wrap .accordion-item {
        border: 1px solid var(--faq-border);
        border-radius: 20px;
        background: #ffffff;
        box-shadow: 0 12px 32px rgba(15, 23, 42, 0.06);
        overflow: hidden;
    }
    .faq-page .faq-accordion-wrap .accordion-item .accordion-header .accordion-button {
        background: #ffffff;
        color: var(--faq-ink);
    }
    .faq-page .faq-accordion-wrap .accordion-item .accordion-header .accordion-button .icon {
        background-color: #f5f7fb;
        border-color: color-mix(in srgb, var(--faq-accent) 18%, #e2e8f0);
    }
    .faq-page .faq-accordion-wrap .accordion-item .accordion-body {
        color: var(--faq-muted);
        line-height: 1.72;
    }
    .faq-page .faq-accordion-wrap .accordion-item .accordion-body a {
        color: var(--faq-accent);
        font-weight: 700;
    }
    .faq-page .faq-cta {
        margin-top: clamp(36px, 5vw, 48px);
        text-align: center;
    }
    .faq-page .faq-testi-wrap .testimonial,
    .faq-page .faq-testi-wrap .testimonial.p-t-100 {
        padding-top: 0 !important;
        margin-bottom: 0 !important;
    }
    .faq-page .faq-testi-wrap .testimonial-content .cta-btn {
        margin-bottom: 40px;
    }
</style>

<div class="faq-page">
    <section class="faq-hero">
        <div class="container">
            <div class="faq-eyebrow justify-content-center">Visa &amp; Immigration</div>
            <h1>Frequently Asked Questions</h1>
            <p>Clear answers about consultations, eligibility, costs, and how Visawizer can support your Australian visa journey.</p>
        </div>
    </section>

    <section class="faq-main">
        <div class="container">
            <div class="faq-accordion-wrap">
                <div class="accordion faq-accordion" id="faqPageAccordion" data-aos="fade-up" data-aos-duration="1000">

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

                <div class="faq-cta">
                    <a class="e-primary-btn has-icon" href="{{ url('book-appointment') }}">
                        Book appointment
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="faq-testi-wrap">
        @include('partials.testi')
    </div>
</div>
@endsection
