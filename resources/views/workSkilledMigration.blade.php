@extends('layouts.frontend')
@section('content')
@include('partials.studyPageStyles')
<style type="text/css">
    .wsm-work-page .study-s2-services .study-section-head-center {
        max-width: none;
        margin: 0 auto clamp(0.75rem, 1.75vw, 1.25rem);
    }
    .wsm-work-page .study-s2-services .row.study-s2-visual-grid {
        margin-top: 0;
        --bs-gutter-x: clamp(18px, 2.5vw, 26px);
        --bs-gutter-y: 0;
        row-gap: clamp(16px, 2.5vw, 24px);
    }

    .wsm-work-page .wsm-band-light {
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 48%, #f1f5f9 100%);
        position: relative;
    }
    .wsm-work-page .wsm-band-light.study-s5-visa::before,
    .wsm-work-page .wsm-band-light.study-s5-visa::after {
        opacity: 0.35;
    }
    .wsm-work-page .wsm-band-dark.why-us-section-4 {
        background:
            radial-gradient(ellipse 70% 50% at 15% 20%, color-mix(in srgb, var(--theme-color-3) 14%, transparent), transparent 50%),
            linear-gradient(165deg, #0b1220 0%, #121a2a 42%, #1a2438 100%);
        color: #e2e8f0;
    }
    .wsm-work-page .wsm-band-dark .why-us-content-2 .common-subtitle span { color: #94a3b8 !important; }
    .wsm-work-page .wsm-band-dark .why-us-content-2 .common-title h2 { color: #f8fafc !important; }
    .wsm-work-page .wsm-band-dark .why-us-content-2 .text .study-copy-sub { color: #cbd5e1 !important; }
    .wsm-work-page .wsm-band-dark .why-us-content-2 .text .study-copy-body { color: rgba(226, 232, 240, 0.92) !important; }
    .wsm-work-page .wsm-band-dark .why-us-content-2 .study-copy-body-sm { color: #cbd5e1 !important; }
    .wsm-work-page .wsm-band-dark .why-us-content-2 .service p { color: #e2e8f0 !important; }
    .wsm-work-page #wsm-skilled-migration-split .why-us-content-2 .service i {
        color: #fff !important;
        background: #3f4198;
    }

    .wsm-work-page #wsm-skilled-migration-split.wsm-band-dark.why-us-section-4 {
        background:
            radial-gradient(ellipse 75% 55% at 12% 18%, color-mix(in srgb, var(--theme-color-3) 10%, transparent), transparent 52%),
            radial-gradient(ellipse 55% 45% at 88% 80%, color-mix(in srgb, var(--theme-color-3) 8%, transparent), transparent 48%),
            linear-gradient(165deg, #152238 0%, #1e2d42 44%, #263652 100%);
    }
    .wsm-work-page #wsm-skilled-migration-split .wsm-skilled-mission__figure {
        width: 100%;
        max-width: none;
        margin-left: auto;
        margin-right: auto;
        border-radius: 7px;
        overflow: hidden;
        box-shadow: 0 22px 52px rgba(0, 0, 0, 0.38);
        border: 1px solid rgba(255, 255, 255, 0.14);
    }
    @media (min-width: 768px) {
        .wsm-work-page #wsm-skilled-migration-split .wsm-skilled-mission__figure {
            margin-left: 0;
            margin-right: auto;
        }
    }
    .wsm-work-page #wsm-skilled-migration-split .wsm-skilled-mission__figure img {
        display: block;
        width: 100%;
        height: auto;
        border-radius: 7px;
        object-fit: cover;
        aspect-ratio: 3 / 4;
        min-height: clamp(380px, 52vw, 620px);
    }
    @media (max-width: 575px) {
        .wsm-work-page #wsm-skilled-migration-split .wsm-skilled-mission__figure img {
            min-height: clamp(260px, 78vw, 440px);
        }
    }
    .wsm-work-page #wsm-skilled-migration-split .wsm-skilled-mission__content .common-subtitle {
        margin-bottom: 0.7rem;
    }
    .wsm-work-page #wsm-skilled-migration-split .wsm-skilled-mission__content .common-title {
        padding-bottom: clamp(1rem, 1.6vw, 1.35rem);
        margin-bottom: clamp(1.15rem, 1.9vw, 1.55rem);
        border-bottom: 1px solid rgba(148, 163, 184, 0.3);
    }
    .wsm-work-page #wsm-skilled-migration-split .wsm-skilled-mission__content .text {
        width: 100%;
        max-width: none;
        display: flex;
        flex-direction: column;
        gap: clamp(0.95rem, 1.5vw, 1.25rem);
        margin-top: 0.15rem;
        margin-bottom: 0;
    }
    .wsm-work-page #wsm-skilled-migration-split .wsm-skilled-mission__content .text p {
        margin-bottom: 0 !important;
    }
    .wsm-work-page #wsm-skilled-migration-split .wsm-skilled-mission__content .wsm-skilled-mission__support-head {
        margin-top: clamp(1.4rem, 2.3vw, 1.95rem);
        margin-bottom: 0.9rem;
        padding-top: clamp(1.05rem, 1.6vw, 1.35rem);
        border-top: 1px solid rgba(148, 163, 184, 0.3);
    }
    .wsm-work-page #wsm-skilled-migration-split .wsm-skilled-mission__content .services {
        margin-top: 0.15rem;
        margin-bottom: 0;
        gap: clamp(14px, 2vw, 22px);
    }
    .wsm-work-page #wsm-skilled-migration-split .wsm-skilled-mission__content .service {
        margin-bottom: clamp(10px, 1.4vw, 14px);
    }
    .wsm-work-page #wsm-skilled-migration-split .wsm-skilled-mission__content .service:last-child {
        margin-bottom: 0;
    }

    .wsm-work-page .wsm-band-light.study-s7-split {
        padding-top: 100px;
        padding-bottom: 100px;
    }
    .wsm-work-page .wsm-band-light.study-s7-split.wsm-innovation-band {
        padding-top: clamp(48px, 7vw, 80px);
        padding-bottom: clamp(48px, 7vw, 80px);
    }
    @media (max-width: 767px) {
        .wsm-work-page .wsm-band-light.study-s7-split { padding-top: 72px; padding-bottom: 72px; }
    }
    @media (max-width: 767px) {
        .wsm-work-page .wsm-band-light.study-s7-split.wsm-innovation-band {
            padding-top: 40px;
            padding-bottom: 40px;
        }
    }
    .wsm-work-page #regional-special-streams.study-s4-process {
        background:
            radial-gradient(circle at 18% 18%, color-mix(in srgb, var(--theme-color-3) 16%, transparent), transparent 22%),
            radial-gradient(circle at 84% 26%, color-mix(in srgb, var(--theme-color-3) 10%, transparent), transparent 20%),
            linear-gradient(180deg, #0c1424 0%, #172235 55%, #1d2a40 100%);
    }
    .wsm-work-page #regional-special-streams .wsm-regional-intro-col .common-subtitle span {
        color: #94a3b8 !important;
    }
    .wsm-work-page #regional-special-streams .wsm-regional-intro-col .common-title h2 {
        color: #f8fafc !important;
    }
    .wsm-work-page #regional-special-streams .wsm-regional-intro-col .study-s4-intro {
        max-width: none;
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog {
        max-width: none;
        margin: 0;
        padding-top: 0;
        border-top: none;
        min-height: 0;
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__eyebrow {
        margin: 0 0 clamp(12px, 1.8vw, 18px);
        flex-shrink: 0;
        font-size: 0.68rem;
        font-weight: 800;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: #94a3b8;
        text-align: left;
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: clamp(14px, 2vw, 20px);
        min-height: 0;
    }
    @media (min-width: 768px) {
        .wsm-work-page #regional-special-streams .wsm-regional-catalog {
            flex: 1 1 auto;
            min-height: 0;
        }
        .wsm-work-page #regional-special-streams .wsm-regional-catalog__grid {
            flex: 1 1 auto;
            align-self: stretch;
            grid-auto-rows: 1fr;
            align-content: stretch;
        }
        .wsm-work-page #regional-special-streams .wsm-regional-catalog__cell {
            height: 100%;
            min-height: 108px;
        }
    }
    @media (max-width: 991px) {
        .wsm-work-page #regional-special-streams .wsm-regional-catalog__grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }
    @media (max-width: 575px) {
        .wsm-work-page #regional-special-streams .wsm-regional-catalog__grid {
            grid-template-columns: 1fr;
        }
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__cell {
        --ac1: var(--theme-color-3);
        --ac2: color-mix(in srgb, var(--theme-color-3) 72%, #0f172a);
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        justify-content: flex-start;
        gap: 0.55rem;
        min-height: 108px;
        box-sizing: border-box;
        padding: 12px 14px 16px 11px;
        border-radius: 4px 18px 18px 4px;
        background: rgba(15, 23, 42, 0.72);
        border: 1px solid rgba(148, 163, 184, 0.11);
        border-left: 5px solid var(--ac1);
        box-shadow: 0 14px 36px rgba(0, 0, 0, 0.22);
        transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        text-decoration: none;
        color: inherit;
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__cell:hover {
        transform: translateY(-3px);
        border-color: rgba(148, 163, 184, 0.2);
        box-shadow: 0 20px 48px rgba(0, 0, 0, 0.32);
        color: inherit;
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__num {
        font-family: ui-monospace, "Cascadia Mono", "Segoe UI Mono", monospace;
        font-size: 0.65rem;
        font-weight: 800;
        letter-spacing: 0.14em;
        color: var(--ac1);
        flex-shrink: 0;
        line-height: 1.2;
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__ico {
        position: relative;
        width: 100%;
        flex: 1 1 auto;
        min-height: clamp(104px, 11vw, 148px);
        border-radius: 7px;
        overflow: hidden;
        display: block;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.35);
        border: 1px solid rgba(255, 255, 255, 0.12);
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__ico img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        border-radius: 7px;
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__body {
        min-width: 0;
        flex: 0 0 auto;
        max-width: none;
        text-align: left;
        padding-top: 2px;
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__body h4 {
        margin: 0;
        font-size: clamp(0.88rem, 1.45vw, 1rem);
        font-weight: 700;
        line-height: 1.35;
        color: #f1f5f9;
        text-align: left;
    }

    .wsm-work-page .study-s2-visual-grid > [class*="col-"] {
        display: flex;
    }
    .wsm-work-page .study-s2-visual-grid .study-path-visual-card {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
        min-height: clamp(340px, 40vw, 480px);
        align-items: stretch;
        justify-content: flex-start;
        padding: clamp(14px, 2vw, 20px);
        box-sizing: border-box;
    }
    .wsm-work-page .study-s2-visual-grid .study-path-visual-card .study-path-visual-inner {
        width: 100%;
        height: auto;
        max-height: none;
        margin: 0;
        margin-top: auto;
        flex: 0 1 auto;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        gap: clamp(7px, 1.05vw, 10px);
        padding: clamp(12px, 1.55vw, 16px);
        box-sizing: border-box;
        overflow: visible;
    }
.wsm-work-page .study-s2-visual-grid .study-path-visual-card .study-path-icon {
    width: 60px;
    height: 60px;
    margin: 0;
    padding: 0;
    font-size: 2.02rem;
    line-height: 0;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: color-mix(in srgb, var(--theme-color-3) 28%, transparent);
    border: 1px solid rgba(255, 255, 255, 0.24);
    color: #fff;
}
    .wsm-work-page .study-s2-visual-grid .study-path-visual-card .study-path-icon i {
        line-height: 1;
        display: block;
        margin: 0;
        padding: 0;
    }
    .wsm-work-page .study-s2-visual-grid .study-path-visual-card h3 {
        font-size: clamp(0.98rem, 1.85vw, 1.22rem);
        line-height: 1.25;
        margin: 0;
        padding: 0;
        flex-shrink: 0;
    }
    .wsm-work-page .study-s2-visual-grid .study-path-visual-card p {
        font-size: clamp(0.78rem, 1.45vw, 0.9rem);
        line-height: 1.5;
        margin: 0;
        padding: 0;
        flex-shrink: 0;
    }
    .wsm-work-page .wsm-innovation-banner {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        background:
            radial-gradient(ellipse 90% 80% at 100% 0%, color-mix(in srgb, var(--theme-color-3) 10%, transparent), transparent 55%),
            radial-gradient(ellipse 70% 60% at 0% 100%, color-mix(in srgb, var(--theme-color-3) 7%, transparent), transparent 50%),
            linear-gradient(145deg, #ffffff 0%, #f8fafc 38%, #f1f5f9 100%);
        border: 1px solid rgba(148, 163, 184, 0.28);
        box-shadow:
            0 1px 0 rgba(255, 255, 255, 0.9) inset,
            0 22px 48px rgba(15, 23, 42, 0.07);
    }
    .wsm-work-page .wsm-innovation-banner__lead,
    .wsm-work-page .wsm-innovation-banner__mid,
    .wsm-work-page .wsm-innovation-banner__visual {
        padding: clamp(24px, 3.5vw, 40px) clamp(20px, 3vw, 32px);
    }
    @media (min-width: 992px) {
        .wsm-work-page .wsm-innovation-banner__lead {
            padding-right: clamp(20px, 2.5vw, 28px);
        }
        .wsm-work-page .wsm-innovation-banner__mid {
            border-left: 1px solid rgba(148, 163, 184, 0.35);
            padding-left: clamp(28px, 3.5vw, 40px);
            padding-right: clamp(20px, 2.5vw, 28px);
        }
        .wsm-work-page .wsm-innovation-banner__visual {
            padding-left: clamp(16px, 2vw, 24px);
        }
    }
    .wsm-work-page .wsm-innovation-banner__eyebrow {
        margin: 0 0 10px;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--theme-color-3);
    }
    .wsm-work-page .wsm-innovation-banner__lead h2 {
        margin: 0 0 14px;
        font-size: clamp(1.45rem, 2.8vw, 2rem);
        font-weight: 700;
        line-height: 1.22;
        color: #0f172a;
        letter-spacing: -0.02em;
    }
    .wsm-work-page .wsm-innovation-banner__tag {
        display: block;
        margin: 0 0 12px;
        font-size: 0.95rem;
        font-weight: 600;
        color: color-mix(in srgb, var(--theme-color-3) 88%, #0f172a);
    }
    .wsm-work-page .wsm-innovation-banner__sub {
        margin: 0;
        font-size: 0.98rem;
        line-height: 1.65;
        color: #475569;
        font-weight: 500;
    }
    .wsm-work-page .wsm-innovation-banner__mid p {
        margin: 0 0 1rem;
        font-size: 0.92rem;
        line-height: 1.72;
        color: #64748b;
    }
    .wsm-work-page .wsm-innovation-banner__mid p:last-of-type {
        margin-bottom: 0;
    }
    .wsm-work-page .wsm-innovation-banner__cta {
        margin-top: 1.35rem;
    }
    .wsm-work-page .wsm-innovation-banner__figure {
        margin: 0 auto;
        max-width: 280px;
        border-radius: 14px;
        background: linear-gradient(180deg, color-mix(in srgb, var(--theme-color-3) 8%, #fffbeb) 0%, #ffffff 55%);
        border: 1px solid color-mix(in srgb, var(--theme-color-3) 22%, rgba(251, 191, 36, 0.25));
        box-shadow: 0 16px 40px rgba(15, 23, 42, 0.08);
        padding: clamp(14px, 2vw, 22px);
        text-align: center;
    }
    .wsm-work-page .wsm-innovation-banner__figure img {
        width: auto;
        max-width: 100%;
        height: auto;
        max-height: min(220px, 38vw);
        object-fit: contain;
        display: block;
        margin: 0 auto;
        border-radius: 10px;
    }
    @media (max-width: 991px) {
        .wsm-work-page .wsm-innovation-banner__visual {
            border-top: 1px solid rgba(148, 163, 184, 0.28);
            padding-top: clamp(22px, 3vw, 32px);
        }
        .wsm-work-page .wsm-innovation-banner__mid {
            border-top: 1px solid rgba(148, 163, 184, 0.22);
        }
    }

    .wsm-work-page .wsm-testimonials-below-cta {
        background: linear-gradient(180deg, #f1f5f9 0%, #f8fafc 35%, #ffffff 100%);
    }
    .wsm-work-page .wsm-testimonials-below-cta .testimonial {
        margin-bottom: 0;
        padding-bottom: clamp(72px, 8vw, 100px);
    }
</style>

<div class="wsm-work-page">

<section class="hero-section-5 study-s1-hero" style="background-image: url('{{ asset('assets/imgs/work/wsm-s1-bg.webp') }}');">
    <div class="container">
        <div class="hero-content-5">
            <div class="study-hero-tag" data-aos="fade-up" data-aos-delay="100">Work, skill, sponsor, settle</div>
            <div class="title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h1>Work and skilled migration pathways for Australia</h1>
            </div>
            <div class="text" data-aos="fade-up" data-aos-delay="350" data-aos-duration="1000">
                <p class="study-copy-sub">Explore skilled, employer-sponsored, regional, training, and innovation visa pathways with clear guidance from Visawizer.</p>
            </div>
            <div class="text" data-aos="fade-up" data-aos-delay="450" data-aos-duration="1000">
                <p class="study-copy-body">Australia offers multiple work and skilled migration pathways for people with the right qualifications, experience, occupation profile, employer opportunity, regional connection, or exceptional talent. But choosing the right pathway can be difficult because every subclass has different eligibility rules, nomination requirements, sponsorship conditions, and long-term outcomes.</p>
                <p class="study-copy-body m-t-20 m-b-0">Visawizer helps applicants, employers, and families understand available options and move forward with a structured plan.</p>
            </div>
            <div class="study-hero-actions" data-aos="fade-up" data-aos-delay="550" data-aos-duration="1000">
                <a class="e-primary-btn has-icon" href="{{ url('eligibility-check') }}">
                    Check My Visa Options
                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                </a>
                <a class="study-btn-outline-light" href="{{ url('book-appointment') }}"><i class="fa-regular fa-calendar-check"></i> Book Consultation</a>
            </div>
        </div>
        <div class="shape"><img src="{{ asset('assets/img/shapes/shape-39.webp') }}" alt="Decorative work migration hero shape" width="1920" height="1080" loading="lazy" decoding="async"></div>
    </div>
</section>

<section class="services-section-3 study-s2-services wsm-band-light p-t-100 p-b-100 p-t-xs-80 p-b-xs-80">
    <div class="container">
        <div class="study-section-head-center text-center" data-aos="fade-up">
            <div class="common-subtitle text-uppercase justify-content-center"><span>Choose the right route</span></div>
            <div class="common-title m-b-15"><h2>Four major pathways under work and skilled migration</h2></div>
            <p class="study-copy-sub m-b-0">Your best option depends on whether you are applying independently, through nomination, through an employer, through a regional route, or through exceptional achievement.</p>
        </div>
        <div class="row gx-4 study-s2-visual-grid justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                <a href="{{ url('visa/skilled-independent-189') }}" class="text-decoration-none text-reset d-flex w-100">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/imgs/work/wsm-s2-skilled.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-user-graduate"></i></div>
                        <h3>Skilled Migration</h3>
                        <p>For applicants with skills, qualifications, and occupations that may support independent, state-nominated, or regional skilled migration.</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                <a href="{{ url('visa/skills-in-demand-482') }}" class="text-decoration-none text-reset d-flex w-100">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/imgs/work/wsm-s2-employer.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-building"></i></div>
                        <h3>Employer Sponsored</h3>
                        <p>For applicants with an Australian employer willing to sponsor or nominate them for a suitable skilled role.</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                <a href="{{ url('visa/dama') }}" class="text-decoration-none text-reset d-flex w-100">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/imgs/work/wsm-s2-regional.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-map-location-dot"></i></div>
                        <h3>Regional &amp; Special Streams</h3>
                        <p>For regional labour needs, short-stay specialist work, activity-based entry, or agreement-based pathways.</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                <a href="{{ url('visa/national-innovation-858') }}" class="text-decoration-none text-reset d-flex w-100">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/imgs/work/wsm-s2-innovation.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-lightbulb-on"></i></div>
                        <h3>Talent &amp; Innovation</h3>
                        <p>For high-achieving applicants with exceptional and internationally recognised records in priority areas.</p>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="why-us-section-4 study-s3-mission wsm-band-dark p-t-120 p-b-100 p-t-md-100 p-t-xs-80 p-b-xs-80 m-t-0 m-b-0" id="wsm-skilled-migration-split">
    <div class="container">
        <div class="row row-gap-5 align-items-center">
            <div class="col-md-4 d-flex justify-content-center justify-content-md-start">
                <div class="wsm-skilled-mission__figure" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <img src="{{ asset('assets/imgs/work/wsm-s3-mission.webp') }}" alt="Skilled migration planning for Australia" width="520" height="650" loading="lazy" decoding="async">
                </div>
            </div>
            <div class="col-md-8">
                <div class="why-us-content-2 wsm-skilled-mission__content" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="text-uppercase mb-3"><span class="bg-p">Independent and nominated options</span></div>
                    <div class="common-title text-start"><h2>Skilled visas for qualified professionals and regional applicants</h2></div>
                    <div class="text">
                        <p class="study-copy-sub m-b-0">Skilled migration may suit applicants who have relevant qualifications, experience, occupation eligibility, and points-based strength.</p>
                        <p class="study-copy-body m-b-0">Skilled migration pathways may include the Skilled Independent Visa 189, Skilled Nominated Visa 190, Skilled Work Regional Visa 491, and Permanent Residence Skilled Regional Visa 191. The 189 visa is for invited workers with skills Australia needs, while the 190 visa allows nominated skilled workers to live and work in Australia as permanent residents.</p>
                    </div>
                    <p class="study-copy-body-sm wsm-skilled-mission__support-head m-b-0 text-uppercase" style="letter-spacing:0.06em;font-weight:600;">Key support areas:</p>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Occupation and eligibility review</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Skills assessment direction</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Points profile understanding</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Expression of Interest planning</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>State or territory nomination awareness</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Regional pathway planning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="study-s5-visa wsm-band-light" id="employer-sponsored-pathways">
    <div class="container">
        <div class="row align-items-stretch row-gap-4 justify-content-center">
            <div class="col-xl-6 col-lg-6" data-aos="fade-up">
                <div class="study-s5-intro-card">
                    <div class="common-subtitle text-uppercase"><span>When an employer supports your pathway</span></div>
                    <div class="common-title text-start m-b-15"><h2>Employer sponsorship and nomination visa support</h2></div>
                    <p class="visa-lead m-t-10 m-b-0">Employer-sponsored visas connect skilled workers with Australian labour market needs.</p>
                    <p class="visa-lead visa-highlight m-t-25 m-b-0">Employer-sponsored options may include Skills in Demand Visa 482, Employer Nomination Scheme 186, Skilled Employer Sponsored Regional Visa 494, and Training Visa 407. The Skills in Demand 482 visa allows employers to sponsor suitably skilled workers where they cannot find a suitably skilled Australian worker, while the 494 visa supports regional employers addressing labour shortages.</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6" data-aos="fade-up" data-aos-delay="120">
                <div class="study-s5-support-card">
                    <div class="study-s5-support-head">
                        <p class="study-s5-support-heading">Support areas:</p>
                    </div>
                    <ul class="study-support-list">
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Applicant profile review</span></li>
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Employer sponsorship readiness</span></li>
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Nomination documentation guidance</span></li>
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Occupation and role alignment</span></li>
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Employer and employee coordination</span></li>
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Long-term pathway planning</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="study-s4-process wsm-band-dark" id="regional-special-streams">
    <div class="container">
        <div class="row align-items-stretch justify-content-between row-gap-5 gx-xl-5">
            <div class="col-md-4 d-flex" data-aos="fade-up">
                <div class="wsm-regional-intro-col text-start w-100">
                    <div class="common-subtitle text-uppercase justify-content-start"><span>Regional and short-term options</span></div>
                    <div class="common-title text-start m-b-15 m-t-10" data-aos="fade-up" data-aos-delay="80"><h2>Regional, agreement-based, and special work pathways</h2></div>
                    <p class="study-s4-intro m-b-0" data-aos="fade-up" data-aos-delay="140">Some visa options are built around specific regions, labour agreements, short-term specialist work, or defined activities.</p>
                    <p class="study-s4-intro m-t-20 m-b-0" data-aos="fade-up" data-aos-delay="200">Regional and special streams can support applicants and employers in situations where standard skilled or sponsored pathways may not fully fit. DAMA provides access to more occupations than the standard skilled migration program in designated areas, while Subclass 400 and Subclass 408 may support specific short-term or activity-based purposes.</p>
                </div>
            </div>
            <div class="col-md-8 mt-4 mt-md-0 d-flex flex-column" data-aos="fade-up" data-aos-delay="120">
                <div class="wsm-regional-catalog flex-grow-1 d-flex flex-column">
                    <p class="wsm-regional-catalog__eyebrow">Pathways covered</p>
                    <div class="wsm-regional-catalog__grid" role="list">
                        <a class="wsm-regional-catalog__cell" role="listitem" href="{{ url('visa/dama') }}">
                            <span class="wsm-regional-catalog__num" aria-hidden="true">01</span>
                            <div class="wsm-regional-catalog__ico" aria-hidden="true"><img src="{{ asset('assets/imgs/work/wsm-regional-dama.webp') }}" alt="DAMA regional migration pathway" width="180" height="130" loading="lazy" decoding="async"></div>
                            <div class="wsm-regional-catalog__body">
                                <h4>DAMA</h4>
                            </div>
                        </a>
                        <a class="wsm-regional-catalog__cell" role="listitem" href="{{ url('visa/temporary-work-400') }}">
                            <span class="wsm-regional-catalog__num" aria-hidden="true">02</span>
                            <div class="wsm-regional-catalog__ico" aria-hidden="true"><img src="{{ asset('assets/imgs/work/wsm-regional-400.webp') }}" alt="Temporary Work Visa Subclass 400" width="180" height="130" loading="lazy" decoding="async"></div>
                            <div class="wsm-regional-catalog__body">
                                <h4>Temporary Work Visa 400</h4>
                            </div>
                        </a>
                        <a class="wsm-regional-catalog__cell" role="listitem" href="{{ url('visa/temporary-activity-408') }}">
                            <span class="wsm-regional-catalog__num" aria-hidden="true">03</span>
                            <div class="wsm-regional-catalog__ico" aria-hidden="true"><img src="{{ asset('assets/imgs/work/wsm-regional-408.webp') }}" alt="Temporary Activity Visa Subclass 408" width="180" height="130" loading="lazy" decoding="async"></div>
                            <div class="wsm-regional-catalog__body">
                                <h4>Temporary Activity Visa 408</h4>
                            </div>
                        </a>
                        <a class="wsm-regional-catalog__cell" role="listitem" href="{{ url('visa/skilled-employer-sponsored-494') }}">
                            <span class="wsm-regional-catalog__num" aria-hidden="true">04</span>
                            <div class="wsm-regional-catalog__ico" aria-hidden="true"><img src="{{ asset('assets/imgs/work/wsm-regional-494.webp') }}" alt="Regional employer sponsored visa options" width="180" height="130" loading="lazy" decoding="async"></div>
                            <div class="wsm-regional-catalog__body">
                                <h4>Regional employer options</h4>
                            </div>
                        </a>
                        <a class="wsm-regional-catalog__cell" role="listitem" href="{{ url('visa/skills-in-demand-482') }}">
                            <span class="wsm-regional-catalog__num" aria-hidden="true">05</span>
                            <div class="wsm-regional-catalog__ico" aria-hidden="true"><img src="{{ asset('assets/imgs/work/wsm-regional-labour.webp') }}" alt="Labour agreement visa awareness" width="180" height="130" loading="lazy" decoding="async"></div>
                            <div class="wsm-regional-catalog__body">
                                <h4>Labour agreement awareness</h4>
                            </div>
                        </a>
                        <a class="wsm-regional-catalog__cell" role="listitem" href="{{ url('visa/temporary-activity-408') }}">
                            <span class="wsm-regional-catalog__num" aria-hidden="true">06</span>
                            <div class="wsm-regional-catalog__ico" aria-hidden="true"><img src="{{ asset('assets/imgs/work/wsm-regional-special.webp') }}" alt="Special-purpose work and activity planning" width="180" height="130" loading="lazy" decoding="async"></div>
                            <div class="wsm-regional-catalog__body">
                                <h4>Special-purpose work or activity planning</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="study-s7-split wsm-band-light wsm-innovation-band">
    <div class="container">
        <div class="wsm-innovation-banner" data-aos="fade-up">
            <div class="row align-items-lg-stretch g-0">
                <div class="col-lg-4">
                    <div class="wsm-innovation-banner__lead">
                        <p class="wsm-innovation-banner__eyebrow">Talent &amp; innovation</p>
                        <span class="wsm-innovation-banner__tag">For exceptional achievers</span>
                        <h2>National Innovation Visa guidance for outstanding talent</h2>
                        <p class="wsm-innovation-banner__sub">A pathway for applicants with exceptional and internationally recognised achievement in an eligible area.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="wsm-innovation-banner__mid">
                        <p>The National Innovation Visa Subclass 858 is a permanent visa for people with an internationally recognised record of exceptional and outstanding achievement in an eligible area. The Department describes it as a pathway for exceptionally talented migrants who can contribute to Australia’s prosperity.</p>
                        <p>Visawizer helps you understand how this pathway compares with skilled, sponsored, and regional options before you commit to a direction.</p>
                        <div class="wsm-innovation-banner__cta">
                            <a class="e-primary-btn has-icon" href="{{ url('visa/national-innovation-858') }}">
                                Learn about Subclass 858
                                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <div class="wsm-innovation-banner__visual w-100">
                        <div class="wsm-innovation-banner__figure">
                            <img src="{{ asset('assets/imgs/work/wsm-innovation.webp') }}" alt="National Innovation Visa — exceptional talent in Australia" width="280" height="220" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="study-s4-process wsm-band-dark" id="how-visawizer-helps-work">
    <div class="container">
        <div class="section-top-9 text-center">
            <div class="text-uppercase justify-content-center" data-aos="fade-up"><span class="bg-p">From confusion to clarity</span></div>
            <div class="common-title mt-3 mb-3" data-aos="fade-up" data-aos-delay="100"><h2>We help you compare pathways before you commit</h2></div>
            <div class="w-line m-auto"></div>
            <p class="study-s4-intro m-b-0 mt-2 mx-auto" style="max-width:720px;" data-aos="fade-up" data-aos-delay="200">The right visa decision should be based on eligibility, timing, documentation strength, occupation fit, and long-term goals.</p>
        </div>
        <div class="row row-gap-4 study-s4-cards-row justify-content-center" data-aos="fade-up" data-aos-delay="250">
            <div class="col-xl-3 col-md-6">
                <div class="study-journey-card">
                    <div class="journey-icon"><i class="fa-light fa-user-check"></i></div>
                    <div class="journey-no">01</div>
                    <h4>Profile Review</h4>
                    <p>We understand your education, work experience, occupation, employer situation, and migration objective.</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="study-journey-card">
                    <div class="journey-icon"><i class="fa-solid fa-list-check"></i></div>
                    <div class="journey-no">02</div>
                    <h4>Pathway Mapping</h4>
                    <p>We compare suitable skilled, sponsored, regional, training, or innovation pathways.</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="study-journey-card">
                    <div class="journey-icon"><i class="fa-light fa-folder-open"></i></div>
                    <div class="journey-no">03</div>
                    <h4>Documentation Planning</h4>
                    <p>We guide you on documents, evidence gaps, skills assessment, employer documents, and application readiness.</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="study-journey-card">
                    <div class="journey-icon"><i class="fa-light fa-compass"></i></div>
                    <div class="journey-no">04</div>
                    <h4>Application Direction</h4>
                    <p>We support your next step with a structured action plan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="wsm-testimonials-below-cta">
    @include('partials.testi', [
        'testiIntroP1' => 'Hear from clients who trusted Visawizer with skilled migration, employer sponsorship, documentation readiness, and long-term settlement planning.',
        'testiIntroP2' => 'Trusted feedback from people who needed clear pathway comparisons—not generic advice—before committing to an application strategy.',
    ])
</div>

<section class="donate-to-us-section study-s8-banner" style="background-image: url('{{ asset('assets/imgs/work/wsm-s8-bg.webp') }}');">
    <div class="container">
        <div class="donate-to-us-layout">
            <div class="become-volunteer-card mb-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-light fa-calendar-check"></i>
                </div>
                <div class="common-subtitle text-uppercase justify-content-center m-b-10"><span>Plan before you apply</span></div>
                <h2>Not sure which work visa pathway fits your profile?</h2>
                <p class="study-s8-lead">Speak to Visawizer and get a clearer view of your skilled, sponsored, regional, training, or innovation visa options.</p>
                <div class="study-final-actions">
                    <a class="e-primary-btn has-icon" href="{{ url('book-appointment') }}">
                        Book Work Visa Consultation
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                    <a class="study-btn-ghost-dark is-on-dark" href="{{ url('contact-us') }}">Contact Visawizer</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.faq')
@include('partials.blogs')

</div>
@endsection
