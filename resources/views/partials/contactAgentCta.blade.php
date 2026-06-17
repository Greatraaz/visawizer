{{-- Earlier layout: green photo band + cream card + headline + primary CTA; content unchanged --}}
<style>
    .contact-page-agent-strip.completed-project-top {
        padding-top: 96px !important;
        padding-bottom: 96px !important;
    }
    @media (max-width: 767px) {
        .contact-page-agent-strip.completed-project-top {
            padding-top: 72px !important;
            padding-bottom: 72px !important;
        }
    }
    .contact-page-agent-card {
        background: #f8f7f0;
        border-radius: 16px;
        padding: 1.75rem 1.5rem 2rem;
        box-shadow: 0 18px 45px -28px rgba(1, 10, 21, 0.35);
    }
    @media (min-width: 1200px) {
        .contact-page-agent-card {
            padding: 2rem 1.75rem 2.25rem;
        }
    }
    .contact-page-agent-card__logo {
        max-width: 140px;
        height: auto;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }
    .contact-page-agent-card__tagline {
        font-size: 0.62rem;
        font-weight: 700;
        color: #bd1c2e;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin: 0.35rem 0 0.85rem;
        line-height: 1.25;
    }
    .contact-page-agent-card__icon i {
        width: 72px;
        height: 72px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.65rem;
        color: var(--theme-color-2, #e7b23b);
        background: linear-gradient(161.69deg, var(--theme-color-3) 12.43%, #0a4d32 100%);
        border-radius: 50%;
        box-shadow: 0 12px 28px -12px rgba(0, 96, 57, 0.45);
    }
    .contact-page-agent-card__name {
        font-weight: 700;
        font-size: 1.3rem;
        color: #1a2f55;
        margin: 0.35rem 0 0.25rem;
    }
    .contact-page-agent-card__role {
        font-size: 0.9rem;
        color: #5c5c58;
        margin: 0;
    }
    .contact-page-agent-card__marn {
        font-weight: 700;
        font-size: 0.95rem;
        color: #bd1c2e;
        margin: 0.35rem 0 0.85rem;
    }
    .contact-page-agent-card__links {
        display: flex;
        flex-direction: column;
        gap: 0.35rem;
        font-size: 0.9rem;
        font-weight: 500;
    }
    .contact-page-agent-card__links a {
        color: var(--theme-color-3);
        text-decoration: none;
    }
    .contact-page-agent-card__links a:hover {
        text-decoration: underline;
        color: #00422a;
    }
</style>
<section class="completed-project-section contact-page-agent-section">
    <div class="completed-project-top contact-page-agent-strip" style="background-image: linear-gradient(#0000008f), url({{ asset('img/main-banner.png') }}); background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container">
            <div class="row align-items-center justify-content-between g-4 gy-5">
                <div class="col-xl-4 col-lg-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="contact-page-agent-card text-center mx-lg-0 mx-auto" style="max-width: 400px;">
                        <img class="contact-page-agent-card__logo" src="{{ asset('assets/images/visawizer_logo.svg') }}" alt="Visawizer" width="140" height="40" loading="lazy" decoding="async">
                        <p class="contact-page-agent-card__tagline mb-0">Education &amp; Migration Services</p>
                        <div class="contact-page-agent-card__icon mb-2">
                            <i class="fa-light fa-user-tie"></i>
                        </div>
                        <h3 class="contact-page-agent-card__name">Ankur Saini</h3>
                        <p class="contact-page-agent-card__role">Registered Migration Agent</p>
                        <p class="contact-page-agent-card__marn mb-0">2117640</p>
                        <div class="contact-page-agent-card__links mt-2">
                            <a href="tel:+61468963273"><i class="fa-regular fa-phone me-2"></i>+61 468 963 273</a>
                            <a href="mailto:info@visawizer.com.au"><i class="fa-regular fa-envelope me-2"></i>info@visawizer.com.au</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7" data-aos="fade-up" data-aos-delay="350" data-aos-duration="1000">
                    <div class="common-subtitle style-color-2 mb-2">
                        <span class="text-white text-uppercase" style="letter-spacing: 0.08em;">Speak with an expert</span>
                    </div>
                    <div class="common-title style-color-light text-start m-b-0">
                        <h2 class="text-white mb-0" style="font-size: clamp(1.65rem, 3.5vw, 2.5rem); line-height: 1.2;">Connect With Our Certified Migration Agent!.</h2>
                        <p class="text-white m-t-20 m-b-0" style="max-width: 36rem; opacity: 0.92; line-height: 1.65;">Book a consultation to discuss your visa options, timelines, and the best pathway for your situation.</p>
                    </div>
                    <div class="m-t-30">
                        <a class="e-primary-btn has-icon active" href="{{ url('book-appointment') }}">
                            Book appointment
                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-8"><img src="{{ asset('assets/img/shapes/shape-8.webp') }}" alt="Decorative section shape" width="200" height="200" loading="lazy" decoding="async"></div>
        <div class="shape-9"><img src="{{ asset('assets/img/shapes/shape-9.webp') }}" alt="Decorative section shape" width="200" height="200" loading="lazy" decoding="async"></div>
    </div>
</section>
