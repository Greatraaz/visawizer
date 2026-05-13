@extends('layouts.frontend')
@section('content')
@include('partials.studyPageStyles')
<style type="text/css">
    /* Alternating bands (dark / light) — work-skilled page only */
    /* Section 2 only: same content band as study hero (.study-s1-hero .hero-content-5 → 1120px) */
    .wsm-work-page .study-s2-services > .container {
        max-width: 1120px;
    }
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
            radial-gradient(ellipse 70% 50% at 15% 20%, rgba(189, 28, 46, 0.12), transparent 50%),
            linear-gradient(165deg, #0b1220 0%, #121a2a 42%, #1a2438 100%);
        color: #e2e8f0;
    }
    .wsm-work-page .wsm-band-dark .why-us-content-2 .common-subtitle span { color: #94a3b8 !important; }
    .wsm-work-page .wsm-band-dark .why-us-content-2 .common-title h2 { color: #f8fafc !important; }
    .wsm-work-page .wsm-band-dark .why-us-content-2 .text .study-copy-sub { color: #cbd5e1 !important; }
    .wsm-work-page .wsm-band-dark .why-us-content-2 .text .study-copy-body { color: rgba(226, 232, 240, 0.92) !important; }
    .wsm-work-page .wsm-band-dark .why-us-content-2 .study-copy-body-sm { color: #cbd5e1 !important; }
    .wsm-work-page .wsm-band-dark .why-us-content-2 .service p { color: #e2e8f0 !important; }
    .wsm-work-page .wsm-band-dark .why-us-content-2 .service i { color: #fda4af; }
    .wsm-work-page .wsm-band-light.study-s7-split {
        padding-top: 100px;
        padding-bottom: 100px;
    }
    @media (max-width: 767px) {
        .wsm-work-page .wsm-band-light.study-s7-split { padding-top: 72px; padding-bottom: 72px; }
    }
    /* Regional section — intro left, pathway grid right */
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
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__eyebrow {
        margin: 0 0 clamp(12px, 1.8vw, 18px);
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
    }
    @media (min-width: 1200px) {
        .wsm-work-page #regional-special-streams .row > .col-xl-6 + .col-xl-6 .wsm-regional-catalog__grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
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
        --ac1: #26c6da;
        --ac2: #00838f;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 16px;
        min-height: 108px;
        padding: 18px 20px 20px 16px;
        box-sizing: border-box;
        border-radius: 4px 18px 18px 4px;
        background: rgba(15, 23, 42, 0.72);
        border: 1px solid rgba(148, 163, 184, 0.11);
        border-left: 5px solid var(--ac1);
        box-shadow: 0 14px 36px rgba(0, 0, 0, 0.22);
        transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__cell:hover {
        transform: translateY(-3px);
        border-color: rgba(148, 163, 184, 0.2);
        box-shadow: 0 20px 48px rgba(0, 0, 0, 0.32);
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__cell:nth-child(1) { --ac1: #26c6da; --ac2: #00838f; }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__cell:nth-child(2) { --ac1: #42a5f5; --ac2: #1565c0; }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__cell:nth-child(3) { --ac1: #ffa726; --ac2: #e65100; }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__cell:nth-child(4) { --ac1: #ec407a; --ac2: #ad1457; }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__cell:nth-child(5) { --ac1: #ab47bc; --ac2: #6a1b9a; }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__cell:nth-child(6) { --ac1: #26d0ce; --ac2: #006064; }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__mark {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
        flex-shrink: 0;
        width: 52px;
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__num {
        font-family: ui-monospace, "Cascadia Mono", "Segoe UI Mono", monospace;
        font-size: 0.65rem;
        font-weight: 800;
        letter-spacing: 0.14em;
        color: var(--ac1);
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__ico {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.08rem;
        color: #0f172a;
        background: linear-gradient(145deg, var(--ac1), var(--ac2));
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.28);
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__body {
        min-width: 0;
        flex: 1 1 auto;
        max-width: none;
        text-align: left;
    }
    .wsm-work-page #regional-special-streams .wsm-regional-catalog__body h4 {
        margin: 0;
        font-size: clamp(0.95rem, 1.65vw, 1.06rem);
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
        width: 46px;
        height: 46px;
        margin: 0;
        padding: 0;
        font-size: 1.02rem;
        line-height: 0;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
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

    /* Section 7 — equal-height journey cards + consistent green accents */
    .wsm-work-page #how-visawizer-helps-work .study-s4-cards-row {
        align-items: stretch;
    }
    .wsm-work-page #how-visawizer-helps-work .study-s4-cards-row > [class*="col-"] {
        display: flex;
    }
    .wsm-work-page #how-visawizer-helps-work .study-s4-cards-row .study-journey-card {
        flex: 1 1 auto;
        width: 100%;
        min-height: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .wsm-work-page #how-visawizer-helps-work .study-journey-card p {
        flex-grow: 1;
        margin-bottom: 0;
        max-width: none;
    }
    .wsm-work-page #how-visawizer-helps-work .study-s4-cards-row > div:nth-child(2) .study-journey-card {
        transform: none;
    }
    .wsm-work-page #how-visawizer-helps-work .study-s4-cards-row > div:nth-child(2) .study-journey-card:hover {
        transform: translateY(-8px);
    }
    .wsm-work-page #how-visawizer-helps-work .study-s4-cards-row > div:nth-child(2) .study-journey-card::before {
        background: linear-gradient(90deg, #1b7b61, #3dc59d);
    }
    .wsm-work-page #how-visawizer-helps-work .study-s4-cards-row > div:nth-child(2) .study-journey-card .journey-icon {
        color: #1b7b61;
        border-color: rgba(27, 123, 97, 0.18);
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.98), rgba(227, 245, 239, 0.95));
        box-shadow: 0 10px 25px rgba(27, 123, 97, 0.12);
    }
</style>

<div class="wsm-work-page">

{{-- Section 1: Hero — dark --}}
<section class="hero-section-5 study-s1-hero" style="background-image: url('{{ asset('assets/images/services/banner-1.webp') }}');">
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
        <div class="shape"><img alt="" src="{{ asset('assets/img/shapes/shape-39.webp') }}"></div>
    </div>
</section>

{{-- Section 2: Pathway overview — light --}}
<section class="services-section-3 study-s2-services wsm-band-light p-t-100 p-b-100 p-t-xs-80 p-b-xs-80">
    <div class="container">
        <div class="study-section-head-center text-center" data-aos="fade-up">
            <div class="common-subtitle text-uppercase justify-content-center"><span>Choose the right route</span></div>
            <div class="common-title m-b-15"><h2>Four major pathways under work and skilled migration</h2></div>
            <p class="study-copy-sub m-b-0">Your best option depends on whether you are applying independently, through nomination, through an employer, through a regional route, or through exceptional achievement.</p>
        </div>
        <div class="row gx-4 study-s2-visual-grid justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/services/image-21.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-user-graduate"></i></div>
                        <h3>Skilled Migration</h3>
                        <p>For applicants with skills, qualifications, and occupations that may support independent, state-nominated, or regional skilled migration.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/services/banner-3.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-building"></i></div>
                        <h3>Employer Sponsored</h3>
                        <p>For applicants with an Australian employer willing to sponsor or nominate them for a suitable skilled role.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/area/image-31.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-map-location-dot"></i></div>
                        <h3>Regional &amp; Special Streams</h3>
                        <p>For regional labour needs, short-stay specialist work, activity-based entry, or agreement-based pathways.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/services/image-52.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-lightbulb-on"></i></div>
                        <h3>Talent &amp; Innovation</h3>
                        <p>For high-achieving applicants with exceptional and internationally recognised records in priority areas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 3: Skilled migration — dark --}}
<section class="why-us-section-4 study-s3-mission wsm-band-dark p-t-120 p-b-100 p-t-md-100 p-t-xs-80 p-b-xs-80 m-t-0 m-b-0">
    <div class="container">
        <div class="row row-gap-5 align-items-center">
            <div class="col-xl-6">
                <div class="thumb px-xl-5 left" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="thumb-1">
                        <img src="{{ asset('assets/images/services/image-43.webp') }}" alt="Skilled migration planning for Australia">
                    </div>
                    <div class="thumb-2"><img src="{{ asset('assets/images/services/image-21.webp') }}" alt="Skilled visa pathways"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb"><img src="{{ asset('assets/images/services/image-52.webp') }}" alt="Professional migration support"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle text-uppercase"><span>Independent and nominated options</span></div>
                    <div class="common-title text-start"><h2>Skilled visas for qualified professionals and regional applicants</h2></div>
                    <div class="text">
                        <p class="study-copy-sub">Skilled migration may suit applicants who have relevant qualifications, experience, occupation eligibility, and points-based strength.</p>
                        <p class="study-copy-body">Skilled migration pathways may include the Skilled Independent Visa 189, Skilled Nominated Visa 190, Skilled Work Regional Visa 491, and Permanent Residence Skilled Regional Visa 191. The 189 visa is for invited workers with skills Australia needs, while the 190 visa allows nominated skilled workers to live and work in Australia as permanent residents.</p>
                    </div>
                    <p class="study-copy-body-sm m-b-15 m-t-10 text-uppercase" style="letter-spacing:0.06em;font-weight:600;">Key support areas:</p>
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

{{-- Section 4: Employer sponsored — light --}}
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

{{-- Section 5: Regional & special — dark --}}
<section class="study-s4-process wsm-band-dark" id="regional-special-streams">
    <div class="container">
        <div class="row align-items-start justify-content-between row-gap-5 gx-xl-5">
            <div class="col-xl-6" data-aos="fade-up">
                <div class="wsm-regional-intro-col text-start">
                    <div class="common-subtitle text-uppercase justify-content-start"><span>Regional and short-term options</span></div>
                    <div class="common-title text-start m-b-15 m-t-10" data-aos="fade-up" data-aos-delay="80"><h2>Regional, agreement-based, and special work pathways</h2></div>
                    <p class="study-s4-intro m-b-0" data-aos="fade-up" data-aos-delay="140">Some visa options are built around specific regions, labour agreements, short-term specialist work, or defined activities.</p>
                    <p class="study-s4-intro m-t-20 m-b-0" data-aos="fade-up" data-aos-delay="200">Regional and special streams can support applicants and employers in situations where standard skilled or sponsored pathways may not fully fit. DAMA provides access to more occupations than the standard skilled migration program in designated areas, while Subclass 400 and Subclass 408 may support specific short-term or activity-based purposes.</p>
                </div>
            </div>
            <div class="col-xl-6 mt-4 mt-xl-0" data-aos="fade-up" data-aos-delay="120">
                <div class="wsm-regional-catalog">
                    <p class="wsm-regional-catalog__eyebrow">Pathways covered</p>
                    <div class="wsm-regional-catalog__grid" role="list">
                        <div class="wsm-regional-catalog__cell" role="listitem">
                            <div class="wsm-regional-catalog__mark">
                                <span class="wsm-regional-catalog__num" aria-hidden="true">01</span>
                                <div class="wsm-regional-catalog__ico" aria-hidden="true"><i class="fa-light fa-map"></i></div>
                            </div>
                            <div class="wsm-regional-catalog__body">
                                <h4>DAMA</h4>
                            </div>
                        </div>
                        <div class="wsm-regional-catalog__cell" role="listitem">
                            <div class="wsm-regional-catalog__mark">
                                <span class="wsm-regional-catalog__num" aria-hidden="true">02</span>
                                <div class="wsm-regional-catalog__ico" aria-hidden="true"><i class="fa-light fa-clock"></i></div>
                            </div>
                            <div class="wsm-regional-catalog__body">
                                <h4>Temporary Work Visa 400</h4>
                            </div>
                        </div>
                        <div class="wsm-regional-catalog__cell" role="listitem">
                            <div class="wsm-regional-catalog__mark">
                                <span class="wsm-regional-catalog__num" aria-hidden="true">03</span>
                                <div class="wsm-regional-catalog__ico" aria-hidden="true"><i class="fa-light fa-briefcase"></i></div>
                            </div>
                            <div class="wsm-regional-catalog__body">
                                <h4>Temporary Activity Visa 408</h4>
                            </div>
                        </div>
                        <div class="wsm-regional-catalog__cell" role="listitem">
                            <div class="wsm-regional-catalog__mark">
                                <span class="wsm-regional-catalog__num" aria-hidden="true">04</span>
                                <div class="wsm-regional-catalog__ico" aria-hidden="true"><i class="fa-light fa-location-dot"></i></div>
                            </div>
                            <div class="wsm-regional-catalog__body">
                                <h4>Regional employer options</h4>
                            </div>
                        </div>
                        <div class="wsm-regional-catalog__cell" role="listitem">
                            <div class="wsm-regional-catalog__mark">
                                <span class="wsm-regional-catalog__num" aria-hidden="true">05</span>
                                <div class="wsm-regional-catalog__ico" aria-hidden="true"><i class="fa-light fa-file-contract"></i></div>
                            </div>
                            <div class="wsm-regional-catalog__body">
                                <h4>Labour agreement awareness</h4>
                            </div>
                        </div>
                        <div class="wsm-regional-catalog__cell" role="listitem">
                            <div class="wsm-regional-catalog__mark">
                                <span class="wsm-regional-catalog__num" aria-hidden="true">06</span>
                                <div class="wsm-regional-catalog__ico" aria-hidden="true"><i class="fa-light fa-route"></i></div>
                            </div>
                            <div class="wsm-regional-catalog__body">
                                <h4>Special-purpose work or activity planning</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 6: Talent & Innovation — light --}}
<section class="study-s7-split wsm-band-light">
    <div class="container">
        <div class="row row-gap-5 align-items-center">
            <div class="col-xl-6 order-xl-1" data-aos="fade-up">
                <div class="study-grad-card m-b-0">
                    <p class="m-b-12 text-uppercase" style="font-size:0.72rem;font-weight:700;letter-spacing:0.12em;color:#e7c66b;">Talent &amp; Innovation</p>
                    <span class="study-grad-tag">For exceptional achievers</span>
                    <h2>National Innovation Visa guidance for outstanding talent</h2>
                    <p class="study-grad-sub m-b-0">A pathway for applicants with exceptional and internationally recognised achievement in eligible areas.</p>
                    <div class="study-grad-body m-t-20">
                        <p class="m-b-0">The National Innovation Visa Subclass 858 is a permanent visa for people with an internationally recognised record of exceptional and outstanding achievement in an eligible area. The Department describes it as a pathway for exceptionally talented migrants who can contribute to Australia’s prosperity.</p>
                        <p class="m-t-20 m-b-0" style="font-size:0.9rem;color:rgba(255,255,255,0.75);border-top:1px solid rgba(255,255,255,0.15);padding-top:16px;"><strong>Ideal content positioning:</strong> Use Talent &amp; Innovation as the menu label instead of “Distinguished Talent,” because the current public-facing subclass direction is National Innovation Visa 858.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 order-xl-2" data-aos="fade-up" data-aos-delay="150">
                <div class="study-grad-thumb">
                    <img src="{{ asset('assets/images/cmpd.webp') }}" alt="National Innovation Visa pathway">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 7: How Visawizer helps — dark --}}
<section class="study-s4-process wsm-band-dark" id="how-visawizer-helps-work">
    <div class="container">
        <div class="section-top-9 text-center">
            <div class="common-subtitle text-uppercase justify-content-center" data-aos="fade-up"><span>From confusion to clarity</span></div>
            <div class="common-title m-b-15" data-aos="fade-up" data-aos-delay="100"><h2>We help you compare pathways before you commit</h2></div>
            <p class="study-s4-intro m-b-0 mx-auto" style="max-width:720px;" data-aos="fade-up" data-aos-delay="200">The right visa decision should be based on eligibility, timing, documentation strength, occupation fit, and long-term goals.</p>
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
                    <div class="journey-icon"><i class="fa-light fa-list-check"></i></div>
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

{{-- Section 8: Banner CTA — same layout as /study (donate-to-us / study-s8-banner), work-focused copy --}}
<section class="donate-to-us-section study-s8-banner" style="background-image: url('{{ asset('assets/images/services/big6.webp') }}');">
    <div class="container">
        <div class="donate-to-us-layout">
            <div class="become-volunteer-card mb-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-light fa-calendar-check"></i>
                </div>
                <div class="common-subtitle text-uppercase justify-content-center m-b-10"><span>Take the first informed step</span></div>
                <h2>Ready to plan your Australian work and skilled migration pathway?</h2>
                <p class="study-s8-lead">Book a consultation with Visawizer and get clarity on skilled migration, employer sponsorship, regional and special streams, documentation readiness, and long-term settlement planning.</p>
                <div class="study-final-actions">
                    <a class="e-primary-btn has-icon" href="{{ url('book-appointment') }}">
                        Book Appointment
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                    <a class="study-btn-ghost-dark is-on-dark" href="{{ url('contact-us') }}">Contact Visawizer</a>
                </div>
            </div>
            <div class="icon-shape-1"><img alt="" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" src="{{ asset('assets/img/shapes/shape-44.webp') }}"></div>
        </div>
    </div>
</section>

</div>
@endsection
