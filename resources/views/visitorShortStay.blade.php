@extends('layouts.frontend')
@section('content')
@include('partials.studyPageStyles')

@php
    $pathways = [
        ['icon' => 'fa-light fa-passport', 'title' => 'Visitor Visa 600', 'text' => 'For tourism, family visits, cruises, or certain business visitor purposes.', 'url' => url('visa/visitor-600')],
        ['icon' => 'fa-light fa-plane-departure', 'title' => 'E-Visitor 651', 'text' => 'For eligible passport holders visiting Australia for tourism or business visitor activities.', 'url' => url('visa/e-visitor-651')],
        ['icon' => 'fa-light fa-mobile-screen-button', 'title' => 'ETA 601', 'text' => 'For eligible travellers seeking short visits to Australia through the Electronic Travel Authority pathway.', 'url' => url('visa/eta-601')],
        ['icon' => 'fa-light fa-route', 'title' => 'Transit Visa 771', 'text' => 'For travellers transiting through Australia to another country.', 'url' => url('visa/transit-771')],
        ['icon' => 'fa-light fa-suitcase-rolling', 'title' => 'Working Holiday 417', 'text' => 'For eligible young travellers who want an extended holiday and may work to support their trip.', 'url' => url('visa/work-holiday-417')],
        ['icon' => 'fa-light fa-earth-asia', 'title' => 'Work and Holiday 462', 'text' => 'For eligible young travellers from participating countries planning holiday and short-term work in Australia.', 'url' => url('visa/work-holiday-462')],
    ];

    $issues = [
        ['title' => 'Unclear Travel Purpose', 'text' => 'The application does not clearly explain why the applicant wants to visit Australia.'],
        ['title' => 'Weak Home-Country Ties', 'text' => 'Employment, study, family, property, or financial ties are not properly shown.'],
        ['title' => 'Insufficient Financial Evidence', 'text' => 'The applicant does not clearly prove ability to support the trip.'],
        ['title' => 'Incomplete Invitation Documents', 'text' => 'Family or friend invitations are missing details or supporting proof.'],
        ['title' => 'Travel History Concerns', 'text' => 'Previous visa refusals, overstays, or inconsistent travel records are not properly explained.'],
        ['title' => 'Wrong Visa Selection', 'text' => 'The applicant chooses ETA, eVisitor, visitor, transit, or working holiday incorrectly.'],
    ];

    $process = [
        ['title' => 'Travel Purpose Review', 'text' => 'We understand why you are travelling, how long you plan to stay, and who you will meet.'],
        ['title' => 'Visa Pathway Selection', 'text' => 'We help identify whether Visitor 600, ETA 601, eVisitor 651, Transit 771, 417, or 462 may be relevant.'],
        ['title' => 'Document Checklist Planning', 'text' => 'We guide you on identity, funds, employment, invitation, travel, and home-country evidence.'],
        ['title' => 'Application File Structuring', 'text' => 'We help organise your case so the purpose and supporting documents are clear.'],
        ['title' => 'Next-Step Guidance', 'text' => 'We support you through submission planning, updates, and further information requests if needed.'],
    ];

    $audiences = [
        ['icon' => 'fa-light fa-camera-retro', 'title' => 'Tourists', 'text' => 'Travellers visiting Australia for holidays, sightseeing, or cruises.'],
        ['icon' => 'fa-light fa-family', 'title' => 'Parents & Family Visitors', 'text' => 'Applicants visiting children, relatives, or family members in Australia.'],
        ['icon' => 'fa-light fa-briefcase', 'title' => 'Business Visitors', 'text' => 'People attending meetings, conferences, negotiations, or business visitor activities.'],
        ['icon' => 'fa-light fa-plane-up', 'title' => 'Transit Travellers', 'text' => 'Passengers passing through Australia on the way to another country.'],
        ['icon' => 'fa-light fa-backpack', 'title' => 'Young Travellers', 'text' => 'Eligible applicants planning working holiday or work and holiday stays.'],
        ['icon' => 'fa-light fa-file-circle-exclamation', 'title' => 'Previously Refused Applicants', 'text' => 'Travellers who need stronger review before reapplying.'],
    ];
@endphp

<style type="text/css">
    .visitor-page {
        --visitor-dark: #07111f;
        --visitor-dark-2: #10243a;
        --visitor-light: #f5fbff;
        --visitor-accent: var(--theme-color-3);
        --visitor-border: rgba(15, 23, 42, 0.1);
        --visitor-muted: #64748b;
    }
    .visitor-page .visitor-band-light {
        background: linear-gradient(180deg, #ffffff 0%, var(--visitor-light) 100%);
        position: relative;
    }
    .visitor-page .visitor-band-dark {
        background:
            radial-gradient(circle at 14% 18%, color-mix(in srgb, var(--visitor-accent) 20%, transparent), transparent 30%),
            radial-gradient(circle at 82% 80%, rgba(59, 130, 246, 0.16), transparent 28%),
            linear-gradient(155deg, var(--visitor-dark) 0%, var(--visitor-dark-2) 52%, #111827 100%);
        color: #f8fafc;
        position: relative;
        overflow: hidden;
    }
    .visitor-page .visitor-band-dark h2,
    .visitor-page .visitor-band-dark h3,
    .visitor-page .visitor-band-dark h4,
    .visitor-page .visitor-band-dark .common-title h2 {
        color: #ffffff !important;
    }
    .visitor-page .visitor-band-dark p,
    .visitor-page .visitor-band-dark .study-copy-sub,
    .visitor-page .visitor-band-dark .study-copy-body {
        color: rgba(248, 250, 252, 0.88);
    }
    .visitor-page .visitor-section-pad {
        padding: clamp(72px, 8vw, 110px) 0;
    }
    .visitor-page .visitor-separated .title,
    .visitor-page .visitor-separated .common-title {
        position: relative;
        margin-bottom: clamp(18px, 2vw, 24px) !important;
        padding-bottom: clamp(18px, 2vw, 24px);
    }
    .visitor-page .visitor-separated .title::after,
    .visitor-page .visitor-separated .common-title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: min(100%, 740px);
        height: 1px;
        background: rgba(15, 23, 42, 0.14);
    }
    .visitor-page .visitor-separated .study-copy-sub,
    .visitor-page .visitor-separated .study-s4-intro {
        position: relative;
        padding-bottom: 24px;
    }
    .visitor-page .visitor-separated .study-copy-sub::after,
    .visitor-page .visitor-separated .study-s4-intro::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 120px;
        height: 3px;
        border-radius: 999px;
        background: linear-gradient(90deg, var(--visitor-accent), #38bdf8);
    }
    .visitor-page .visitor-separated-center .title::after,
    .visitor-page .visitor-separated-center .common-title::after,
    .visitor-page .visitor-separated-center .study-copy-sub::after,
    .visitor-page .visitor-separated-center .study-s4-intro::after {
        left: 50%;
        transform: translateX(-50%);
    }
    .visitor-page .visitor-separated-dark .title::after,
    .visitor-page .visitor-separated-dark .common-title::after {
        background: rgba(255, 255, 255, 0.18);
    }
    .visitor-page .visitor-hero {
        background-position: center;
        isolation: isolate;
    }
    .visitor-page .visitor-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(7, 17, 31, 0.4), rgba(7, 17, 31, 0.92));
        z-index: -1;
    }
    .visitor-page .visitor-hero .study-copy-body {
        max-width: 900px;
    }
    .visitor-page .visitor-hero-notes {
        display: flex;
        justify-content: center;
        gap: 12px;
        flex-wrap: wrap;
        margin-top: 28px;
    }
    .visitor-page .visitor-hero-notes span {
        border: 1px solid rgba(255, 255, 255, 0.18);
        border-radius: 999px;
        color: #fff;
        padding: 8px 14px;
        background: rgba(255, 255, 255, 0.08);
        font-size: 0.9rem;
    }
    .visitor-page .visitor-path-grid {
        display: grid;
        grid-template-columns: repeat(6, minmax(0, 1fr));
        gap: 18px;
    }
    .visitor-page .visitor-path-card {
        grid-column: span 2;
        min-height: 260px;
        border-radius: 22px;
        padding: 28px;
        background: #ffffff;
        border: 1px solid var(--visitor-border);
        box-shadow: 0 20px 52px rgba(15, 23, 42, 0.08);
        text-decoration: none;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
    }
    .visitor-page .visitor-path-card:hover {
        transform: translateY(-6px);
        border-color: color-mix(in srgb, var(--visitor-accent) 32%, transparent);
        box-shadow: 0 26px 62px rgba(15, 23, 42, 0.13);
        color: inherit;
    }
    .visitor-page .visitor-path-icon,
    .visitor-page .visitor-soft-icon {
        width: 58px;
        height: 58px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 18px;
        background: color-mix(in srgb, var(--visitor-accent) 10%, #ffffff);
        color: var(--visitor-accent);
        font-size: 1.55rem;
        margin-bottom: 22px;
    }
    .visitor-page .visitor-path-card h3,
    .visitor-page .visitor-info-card h3,
    .visitor-page .visitor-issue-card h3,
    .visitor-page .visitor-audience-card h3 {
        font-size: 1.22rem;
        margin-bottom: 10px;
    }
    .visitor-page .visitor-path-card p,
    .visitor-page .visitor-info-card p,
    .visitor-page .visitor-issue-card p,
    .visitor-page .visitor-audience-card p,
    .visitor-page .visitor-process-card p {
        line-height: 1.65;
        margin-bottom: 0;
    }
    .visitor-page .visitor-split-panel {
        border-radius: 24px;
        padding: clamp(30px, 4vw, 52px);
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.12);
        height: 100%;
        box-shadow: 0 24px 56px rgba(0, 0, 0, 0.2);
    }
    .visitor-page .visitor-split-media {
        border-radius: 24px;
        overflow: hidden;
        height: 100%;
        min-height: 420px;
        box-shadow: 0 24px 58px rgba(0, 0, 0, 0.22);
    }
    .visitor-page .visitor-split-media img,
    .visitor-page .visitor-image-card img,
    .visitor-page .visitor-work-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    .visitor-page .visitor-option-strip {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 22px;
        margin-top: 40px;
    }
    .visitor-page .visitor-info-card {
        border-radius: 22px;
        padding: clamp(28px, 3.5vw, 42px);
        background: #ffffff;
        border: 1px solid var(--visitor-border);
        box-shadow: 0 20px 52px rgba(15, 23, 42, 0.08);
        height: 100%;
    }
    .visitor-page .visitor-info-card.is-dark {
        background: linear-gradient(150deg, #10243a 0%, #07111f 100%);
        color: #fff;
    }
    .visitor-page .visitor-info-card.is-dark h3,
    .visitor-page .visitor-info-card.is-dark p {
        color: #fff;
    }
    .visitor-page .visitor-transit-wrap {
        display: grid;
        grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
        gap: clamp(24px, 4vw, 48px);
        align-items: center;
    }
    .visitor-page .visitor-route-card {
        border-radius: 28px;
        padding: clamp(30px, 4vw, 52px);
        background:
            linear-gradient(135deg, rgba(255, 255, 255, 0.94), rgba(245, 251, 255, 0.94)),
            url('{{ asset('assets/imgs/visitor/vv-transit-route.webp') }}') center / cover;
        border: 1px solid var(--visitor-border);
        box-shadow: 0 24px 58px rgba(15, 23, 42, 0.1);
    }
    .visitor-page .visitor-band-dark .visitor-route-card p,
    .visitor-page .visitor-band-dark .visitor-route-card .study-copy-body {
        color: #334155;
    }
    .visitor-page .visitor-band-dark .visitor-route-card strong {
        color: #0f172a;
    }
    .visitor-page .visitor-route-line {
        display: grid;
        grid-template-columns: 20px 1fr;
        gap: 16px;
        margin-top: 26px;
    }
    .visitor-page .visitor-route-line span {
        width: 20px;
        height: 20px;
        border: 5px solid var(--visitor-accent);
        border-radius: 50%;
        margin-top: 4px;
        position: relative;
    }
    .visitor-page .visitor-route-line:not(:last-child) span::after {
        content: "";
        position: absolute;
        left: 50%;
        top: 16px;
        width: 2px;
        height: 54px;
        background: color-mix(in srgb, var(--visitor-accent) 24%, transparent);
        transform: translateX(-50%);
    }
    .visitor-page .visitor-work-card {
        background: #ffffff;
        border-radius: 26px;
        overflow: hidden;
        box-shadow: 0 24px 58px rgba(15, 23, 42, 0.1);
        border: 1px solid var(--visitor-border);
    }
    .visitor-page .visitor-work-media {
        height: 100%;
        min-height: 420px;
    }
    .visitor-page .visitor-work-copy {
        padding: clamp(30px, 4vw, 52px);
    }
    .visitor-page .visitor-band-dark .visitor-work-card h2,
    .visitor-page .visitor-band-dark .visitor-work-card h3,
    .visitor-page .visitor-band-dark .visitor-work-card .common-title h2 {
        color: #0f172a !important;
    }
    .visitor-page .visitor-band-dark .visitor-work-card p,
    .visitor-page .visitor-band-dark .visitor-work-card .study-copy-sub,
    .visitor-page .visitor-band-dark .visitor-work-card .study-copy-body {
        color: var(--body-color);
    }
    .visitor-page .visitor-visa-pills {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 24px;
    }
    .visitor-page .visitor-visa-pills span {
        border-radius: 999px;
        background: color-mix(in srgb, var(--visitor-accent) 12%, #ffffff);
        color: var(--visitor-accent);
        padding: 8px 14px;
        font-weight: 700;
        font-size: 0.9rem;
    }
    .visitor-page .visitor-issue-grid {
        display: grid;
        grid-template-columns: repeat(12, minmax(0, 1fr));
        gap: 18px;
        margin-top: 44px;
    }
    .visitor-page .visitor-issue-card {
        grid-column: span 4;
        border-radius: 22px;
        padding: 28px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.12);
        min-height: 215px;
    }
    .visitor-page .visitor-issue-card:nth-child(1),
    .visitor-page .visitor-issue-card:nth-child(6) {
        grid-column: span 5;
    }
    .visitor-page .visitor-issue-card:nth-child(2),
    .visitor-page .visitor-issue-card:nth-child(5) {
        grid-column: span 3;
    }
    .visitor-page .visitor-issue-no {
        width: 44px;
        height: 44px;
        border-radius: 14px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #ffffff;
        color: var(--visitor-accent);
        font-weight: 800;
        margin-bottom: 18px;
    }
    .visitor-page .visitor-process-rail {
        display: grid;
        grid-template-columns: repeat(5, minmax(0, 1fr));
        gap: 16px;
        margin-top: 44px;
        position: relative;
    }
    .visitor-page .visitor-process-rail::before {
        content: "";
        position: absolute;
        left: 8%;
        right: 8%;
        top: 38px;
        height: 2px;
        background: color-mix(in srgb, var(--visitor-accent) 28%, transparent);
    }
    .visitor-page .visitor-process-card {
        position: relative;
        z-index: 1;
        padding: 0 6px;
    }
    .visitor-page .visitor-process-no {
        width: 76px;
        height: 76px;
        border-radius: 24px;
        background: var(--visitor-accent);
        color: #ffffff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 1.25rem;
        box-shadow: 0 18px 35px color-mix(in srgb, var(--visitor-accent) 24%, transparent);
        margin-bottom: 20px;
    }
    .visitor-page .visitor-process-card h3 {
        font-size: 1.08rem;
        margin-bottom: 10px;
    }
    .visitor-page .visitor-audience-layout {
        display: grid;
        grid-template-columns: minmax(0, 0.78fr) minmax(0, 1.22fr);
        gap: clamp(20px, 3vw, 34px);
        align-items: stretch;
    }
    .visitor-page .visitor-image-card {
        min-height: 420px;
        border-radius: 24px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 24px 58px rgba(15, 23, 42, 0.12);
    }
    .visitor-page .visitor-image-card::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(7, 17, 31, 0.08), rgba(7, 17, 31, 0.62));
    }
    .visitor-page .visitor-audience-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 12px;
        height: auto;
    }
    .visitor-page .visitor-audience-card {
        border-radius: 16px;
        padding: 14px;
        background: #ffffff;
        border: 1px solid var(--visitor-border);
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.07);
    }
    .visitor-page .visitor-audience-card .visitor-soft-icon {
        width: 38px;
        height: 38px;
        border-radius: 12px;
        font-size: 2rem;
        margin-bottom: 10px;
    }
    .visitor-page .visitor-audience-card h3 {
        font-size: 0.95rem;
        margin-bottom: 6px;
    }
    .visitor-page .visitor-audience-card p {
        font-size: 0.84rem;
        line-height: 1.45;
    }
    .visitor-page .visitor-band-dark .visitor-audience-card h3 {
        color: #0f172a !important;
    }
    .visitor-page .visitor-band-dark .visitor-audience-card p {
        color: var(--body-color);
    }
    .visitor-page .visitor-cta-wrap {
        display: flex;
        gap: 14px;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 28px;
    }
    @media (max-width: 1199px) {
        .visitor-page .visitor-path-card {
            grid-column: span 3;
        }
        .visitor-page .visitor-process-rail {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
        .visitor-page .visitor-process-rail::before {
            display: none;
        }
    }
    @media (max-width: 991px) {
        .visitor-page .visitor-transit-wrap,
        .visitor-page .visitor-audience-layout {
            grid-template-columns: 1fr;
        }
        .visitor-page .visitor-issue-card,
        .visitor-page .visitor-issue-card:nth-child(1),
        .visitor-page .visitor-issue-card:nth-child(2),
        .visitor-page .visitor-issue-card:nth-child(5),
        .visitor-page .visitor-issue-card:nth-child(6) {
            grid-column: span 6;
        }
        .visitor-page .visitor-image-card {
            min-height: 320px;
        }
        .visitor-page .visitor-audience-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }
    @media (max-width: 767px) {
        .visitor-page .visitor-path-grid,
        .visitor-page .visitor-option-strip,
        .visitor-page .visitor-process-rail,
        .visitor-page .visitor-audience-grid {
            grid-template-columns: 1fr;
        }
        .visitor-page .visitor-path-card,
        .visitor-page .visitor-issue-card,
        .visitor-page .visitor-issue-card:nth-child(1),
        .visitor-page .visitor-issue-card:nth-child(2),
        .visitor-page .visitor-issue-card:nth-child(5),
        .visitor-page .visitor-issue-card:nth-child(6) {
            grid-column: span 1;
        }
        .visitor-page .visitor-path-card:nth-child(2),
        .visitor-page .visitor-path-card:nth-child(5),
        .visitor-page .visitor-path-card:nth-child(2):hover,
        .visitor-page .visitor-path-card:nth-child(5):hover {
            transform: none;
        }
        .visitor-page .visitor-split-media,
        .visitor-page .visitor-work-media {
            min-height: 300px;
        }
    }
.visitor-route-line p{
    font-size: 1.2rem;
}
</style>

<div class="visitor-page">
    <section class="hero-section-5 study-s1-hero visitor-hero visitor-band-dark" style="background-image: url('{{ asset('assets/imgs/visitor/vv-s1-bg.webp') }}');">
        <div class="container">
            <div class="hero-content-5 visitor-separated visitor-separated-dark visitor-separated-center">
                <div class="study-hero-tag" data-aos="fade-up" data-aos-delay="100">Visit Australia with confidence</div>
                <div class="title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <h1>Visitor and short-stay visa guidance for Australia</h1>
                </div>
                <div class="text" data-aos="fade-up" data-aos-delay="350" data-aos-duration="1000">
                    <p class="study-copy-sub">Tourist, family visit, business visit, ETA, eVisitor, transit, and working holiday visa guidance in one place.</p>
                </div>
                <div class="text" data-aos="fade-up" data-aos-delay="450" data-aos-duration="1000">
                    <p class="study-copy-body">Planning a short visit to Australia should feel exciting, not confusing. Whether you are visiting family, travelling for tourism, attending a short business meeting, transiting through Australia, or planning a working holiday, choosing the right visa pathway matters.</p>
                    <p class="study-copy-body m-t-20 m-b-0">Visawizer helps travellers understand suitable visitor and short-stay options, prepare documents correctly, and avoid common application mistakes.</p>
                </div>
                <div class="study-hero-actions" data-aos="fade-up" data-aos-delay="550" data-aos-duration="1000">
                    <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                        Apply With Guidance
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                    <a class="study-btn-outline-light" href="{{ url('book-appointment') }}"><i class="fa-regular fa-calendar-check"></i> Book Appointment</a>
                </div>
                <div class="visitor-hero-notes" data-aos="fade-up" data-aos-delay="650">
                    <span>Tourism</span>
                    <span>Family Visits</span>
                    <span>Business Visitor</span>
                    <span>Transit</span>
                    <span>Working Holiday</span>
                </div>
            </div>
            <div class="shape"><img alt="" src="{{ asset('assets/img/shapes/shape-39.webp') }}"></div>
        </div>
    </section>

    <section class="visitor-section-pad visitor-band-light">
        <div class="container">
            <div class="study-section-head-center text-center visitor-separated visitor-separated-center" data-aos="fade-up">
                <div class="mb-3 text-uppercase justify-content-center"><span class="bg-p">Choose your travel purpose</span></div>
                <div class="common-title m-b-15"><h2>Different visit purposes need different visa options</h2></div>
                <p class="study-copy-sub m-b-0">Your visa option depends on your passport, travel purpose, stay duration, family connection, and whether you plan to work, transit, or only visit.</p>
            </div>
            <div class="visitor-path-grid m-t-50" data-aos="fade-up" data-aos-delay="150">
                @foreach ($pathways as $pathway)
                    <a href="{{ $pathway['url'] }}" class="visitor-path-card">
                        <div>
                            <div class="visitor-path-icon"><i class="{{ $pathway['icon'] }}"></i></div>
                            <h3>{{ $pathway['title'] }}</h3>
                            <p>{{ $pathway['text'] }}</p>
                        </div>
                        <span class="m-t-25 d-inline-flex align-items-center gap-2">Explore pathway <i class="fa-regular fa-arrow-right"></i></span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="visitor-section-pad visitor-band-dark" id="visitor-visa-guidance">
        <div class="container">
            <div class="row row-gap-5 align-items-center">
                <div class="col-lg-5" data-aos="fade-up">
                    <div class="visitor-split-media">
                        <img src="{{ asset('assets/imgs/visitor/vv-split-guidance.webp') }}" alt="Visitor visa guidance for Australia">
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="120">
                    <div class="visitor-split-panel visitor-separated visitor-separated-dark">
                        <div class="common-subtitle text-uppercase"><span>Tourism, family visits, and more</span></div>
                        <div class="common-title text-start m-b-15"><h2>Visitor visa support for genuine short stays</h2></div>
                        <p class="study-copy-sub">We help travellers prepare clear, consistent, and purpose-driven visitor visa applications.</p>
                        <p class="study-copy-body">Visitor visa applications often look simple from the outside, but refusals can happen when the travel purpose, financial capacity, home-country ties, family situation, or intention to return are not clearly shown.</p>
                        <p class="study-copy-body m-b-0">The Visitor Visa Subclass 600 includes streams for tourism, visiting family and friends, business visitor purposes, and sponsored family visits. Home Affairs states that the tourist stream can allow a person to visit Australia as a tourist, go on a cruise, or see family and friends.</p>
                        <div class="m-t-30">
                            <a class="e-primary-btn has-icon" href="{{ url('visa/visitor-600') }}">
                                Explore Visitor Visa 600
                                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="visitor-section-pad visitor-band-light" id="short-stay-options">
        <div class="container">
            <div class="row row-gap-4 align-items-end">
                <div class="col-lg-7 visitor-separated" data-aos="fade-up">
                    <div class="common-subtitle text-uppercase"><span>ETA and eVisitor</span></div>
                    <div class="common-title text-start m-b-15"><h2>Short-stay travel options for eligible passport holders</h2></div>
                    <p class="study-copy-sub m-b-0">Some travellers may be eligible for ETA or eVisitor pathways depending on nationality and travel purpose.</p>
                </div>
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="120">
                    <p class="study-copy-body m-b-0">For eligible passport holders, the ETA 601 and eVisitor 651 pathways may be suitable for short visits. Visawizer helps travellers understand whether these options fit their purpose and passport category.</p>
                </div>
            </div>
            <div class="visitor-option-strip" data-aos="fade-up" data-aos-delay="180">
                <div class="visitor-info-card is-dark">
                    <div class="visitor-soft-icon"><i class="fa-light fa-plane"></i></div>
                    <h3>eVisitor 651</h3>
                    <p>The eVisitor 651 allows eligible travellers to visit Australia multiple times in a 12-month period and stay up to 3 months each time.</p>
                    <a class="e-primary-btn has-icon m-t-25" href="{{ url('visa/e-visitor-651') }}">
                        Check Short-Stay Options
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                </div>
                <div class="visitor-info-card">
                    <div class="visitor-soft-icon"><i class="fa-light fa-mobile-signal"></i></div>
                    <h3>ETA 601</h3>
                    <p>ETA 601 is another short-stay travel authority for eligible passport holders visiting Australia for an approved short-stay purpose.</p>
                    <a class="e-primary-btn has-icon m-t-25" href="{{ url('visa/eta-601') }}">
                        Check Short-Stay Options
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="visitor-section-pad visitor-band-dark" id="transit-through-australia">
        <div class="container">
            <div class="visitor-transit-wrap">
                <div class="visitor-separated" data-aos="fade-up">
                    <div class="common-subtitle text-uppercase"><span>Passing through Australia</span></div>
                    <div class="common-title text-start pb-0"><h2>Transit visa guidance for smooth travel connections</h2></div>
                    <p class="study-copy-sub">Even a short stop in Australia may require proper visa planning depending on nationality, airport, and route.</p>
                    <p class="study-copy-body">Transit rules can be misunderstood. Some travellers may be eligible to transit without a visa if they meet specific conditions, while others may need a Transit Visa Subclass 771.</p>
                    <a class="e-primary-btn has-icon m-t-25" href="{{ url('visa/transit-771') }}">
                        Review My Transit Requirement
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                </div>
                <div class="visitor-route-card" data-aos="fade-up" data-aos-delay="150">
                    <div class="visitor-route-line">
                        <span></span>
                        <p class="study-copy-body"><strong>Check route and nationality.</strong> Your passport, destination country, and Australian airport can affect the requirement.</p>
                    </div>
                    <div class="visitor-route-line">
                        <span></span>
                        <p class="study-copy-body"><strong>Confirm whether immigration clearance is needed.</strong> Airport limitations may affect whether a traveller needs to clear immigration.</p>
                    </div>
                    <div class="visitor-route-line">
                        <span></span>
                        <p class="study-copy-body m-b-0"><strong>Plan the right transit option.</strong> Home Affairs states that the 771 visa allows up to 72 hours to transit Australia on the way to another country.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="visitor-section-pad visitor-band-light" id="working-holiday-options">
        <div class="container">
            <div class="visitor-work-card" data-aos="fade-up">
                <div class="row g-0 align-items-stretch">
                    <div class="col-lg-5">
                        <div class="visitor-work-media">
                            <img src="{{ asset('assets/imgs/visitor/vv-work-holiday.webp') }}" alt="Working holiday visa guidance for young travellers">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="visitor-work-copy visitor-separated">
                            <div class="common-subtitle text-uppercase"><span>Travel, work, and explore</span></div>
                            <div class="common-title text-start m-b-15"><h2>Working holiday visa guidance for eligible young travellers</h2></div>
                            <p class="study-copy-sub">Australia offers working holiday pathways for eligible young travellers who want to explore while supporting their trip through short-term work.</p>
                            <p class="study-copy-body">Working holiday pathways are different from standard visitor visas. They are designed for eligible young travellers who want an extended holiday and may work during their stay to help fund the trip.</p>
                            <p class="study-copy-body m-b-0">Home Affairs describes the first Working Holiday Visa 417 as allowing people aged 18 to 30 to have their first extended holiday in Australia and work to help fund their trip.</p>
                            <div class="visitor-visa-pills">
                                <span>Subclass 417</span>
                                <span>Subclass 462</span>
                                <span>Holiday + short-term work</span>
                            </div>
                            <a class="e-primary-btn has-icon m-t-30" href="{{ url('visa/work-holiday-417') }}">
                                Explore Working Holiday Options
                                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="visitor-section-pad visitor-band-dark">
        <div class="container">
            <div class="study-section-head-center text-center visitor-separated visitor-separated-dark visitor-separated-center" data-aos="fade-up">
                <div class="common-subtitle text-uppercase justify-content-center"><span>Avoid avoidable mistakes</span></div>
                <div class="common-title m-b-15"><h2>A visitor visa application should clearly prove the purpose of travel</h2></div>
                <p class="study-copy-sub m-b-0">Many visitor visa problems come from weak evidence, unclear purpose, or inconsistent documents.</p>
            </div>
            <div class="visitor-issue-grid" data-aos="fade-up" data-aos-delay="140">
                @foreach ($issues as $index => $issue)
                    <div class="visitor-issue-card">
                        <div class="visitor-issue-no">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</div>
                        <h3>{{ $issue['title'] }}</h3>
                        <p>{{ $issue['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="visitor-section-pad visitor-band-light" id="how-visawizer-helps-visitors">
        <div class="container">
            <div class="study-section-head-center text-center visitor-separated visitor-separated-center" data-aos="fade-up">
                <div class="common-subtitle text-uppercase justify-content-center"><span>From travel plan to application readiness</span></div>
                <div class="common-title m-b-15"><h2>We help you prepare a clearer short-stay application</h2></div>
                <p class="study-copy-sub m-b-0">The right visitor visa strategy begins with understanding your purpose, profile, and documents.</p>
            </div>
            <div class="visitor-process-rail" data-aos="fade-up" data-aos-delay="140">
                @foreach ($process as $index => $step)
                    <div class="visitor-process-card">
                        <div class="visitor-process-no">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</div>
                        <h3>{{ $step['title'] }}</h3>
                        <p>{{ $step['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="visitor-section-pad visitor-band-dark">
        <div class="container">
            <div class="visitor-audience-layout">
                <div class="visitor-image-card" data-aos="fade-up">
                    <img src="{{ asset('assets/imgs/visitor/vv-audience.webp') }}" alt="Visitor visa support for travellers and families">
                </div>
                <div data-aos="fade-up" data-aos-delay="120">
                    <div class="visitor-separated">
                        <div class="common-subtitle text-uppercase"><span>For travellers and families</span></div>
                        <div class="common-title text-start pb-0"><h2>Visitor visa support for different travel situations</h2></div>
                        <p class="study-copy-sub">Whether the trip is personal, family-related, business-related, or urgent, the application should be prepared with care.</p>
                    </div>
                    <div class="visitor-audience-grid m-t-35">
                        @foreach ($audiences as $audience)
                            <div class="visitor-audience-card">
                                <div class="visitor-soft-icon"><i class="{{ $audience['icon'] }}"></i></div>
                                <h3>{{ $audience['title'] }}</h3>
                                <p>{{ $audience['text'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.commonCta', [
        'ctaBg' => asset('assets/imgs/visitor/vv-cta-bg.webp'),
        'ctaEyebrow' => 'Travel with clarity',
        'ctaHeading' => 'Planning to visit Australia? Get the right visa guidance first.',
        'ctaLead' => 'Speak with Visawizer and understand the best visitor or short-stay pathway for your passport, purpose, and travel plan.',
        'ctaPrimaryLabel' => 'Apply With Guidance',
        'ctaPrimaryUrl' => url('contact-us'),
        'ctaSecondaryLabel' => 'Book Appointment',
        'ctaSecondaryUrl' => url('book-appointment'),
    ])

    @include('partials.faq')
    @include('partials.blogs')
</div>
@endsection
