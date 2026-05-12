@extends('layouts.frontend')
@section('content')
<style>
    .study-copy-sub {
        font-size: 1.09rem;
        line-height: 1.68;
        font-weight: 500;
    }
    .study-copy-body {
        font-size: 0.96rem;
        line-height: 1.75;
        font-weight: 400;
    }
    .study-copy-body-sm {
        font-size: 0.935rem;
        line-height: 1.68;
        font-weight: 400;
    }
    .study-section-head .study-copy-sub {
        color: #475569;
    }
    .study-s3-why .study-copy-sub {
        color: #334155;
    }
    .study-s3-why .study-copy-body {
        color: #4b5563;
    }
    .study-s1-hero .study-copy-sub {
        color: rgba(255, 255, 255, 0.96);
    }
    .study-s1-hero .study-copy-body {
        color: rgba(255, 255, 255, 0.88);
    }
    .study-s4-process .study-s4-intro {
        font-size: 1.06rem;
        line-height: 1.65;
        color: #cbd5e1;
        font-weight: 500;
    }
    .study-s6-change .study-change-panel .cp-left .study-copy-sub {
        color: rgba(255, 255, 255, 0.98);
        font-size: 1.06rem;
    }
    .study-s6-change .study-change-panel .cp-right .study-copy-body {
        color: #cbd5e1;
        font-size: 0.94rem;
    }
    .study-final-frame .study-copy-body {
        color: #64748b;
        font-size: 0.97rem;
        line-height: 1.7;
    }

    .study-s1-hero .study-hero-tag {
        display: inline-block;
        font-size: 0.85rem;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.9);
        margin-bottom: 1rem;
        border-left: 3px solid var(--theme-color-2, #e7b23b);
        padding-left: 12px;
    }
    .study-s1-hero .hero-content-5 .title h1 {
        max-width: 920px;
    }
    .study-hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        align-items: center;
        margin-top: 8px;
    }
    .study-btn-outline-light {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 26px;
        border: 2px solid rgba(255,255,255,0.85);
        color: #fff;
        font-weight: 600;
        border-radius: 4px;
        text-decoration: none;
        transition: background 0.25s, color 0.25s;
    }
    .study-btn-outline-light:hover {
        background: #fff;
        color: #1a1a1a;
    }

    .study-s2-path {
        background: #f6f7f9;
        padding: 88px 0 72px;
        overflow: hidden;
    }
    .study-s2-path .study-section-head {
        max-width: 720px;
        margin-bottom: 2.5rem;
    }
    .study-s2-path .study-section-head .common-subtitle span {
        font-size: 0.78rem;
        letter-spacing: 0.12em;
        color: #64748b;
    }
    .study-s2-path .study-section-head .common-title h2 {
        font-size: clamp(1.55rem, 2.4vw, 2rem);
    }
    .study-path-rail {
        display: flex;
        gap: 20px;
        overflow-x: auto;
        padding-bottom: 12px;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
    }
    .study-path-rail::-webkit-scrollbar { height: 6px; }
    .study-path-rail::-webkit-scrollbar-thumb { background: #c5cbd6; border-radius: 4px; }
    .study-path-card {
        flex: 0 0 min(300px, 85vw);
        scroll-snap-align: start;
        background: #fff;
        border-radius: 14px;
        padding: 28px 24px 32px;
        box-shadow: 0 12px 40px rgba(15, 23, 42, 0.08);
        border-top: 4px solid var(--theme-color-3, #28ae77);
        position: relative;
    }
    .study-path-card:nth-child(even) { border-top-color: var(--theme-color-2, #e7b23b); }
    .study-path-card h3 {
        font-size: 1.18rem;
        margin-bottom: 12px;
        line-height: 1.35;
        font-weight: 700;
    }
    .study-path-card p {
        margin: 0;
        color: #64748b;
        font-size: 0.92rem;
        line-height: 1.62;
        font-weight: 400;
    }
    .study-path-card .path-idx {
        position: absolute;
        top: 18px;
        right: 20px;
        font-size: 2rem;
        font-weight: 800;
        color: rgba(15, 23, 42, 0.06);
        line-height: 1;
    }

    .study-s3-why {
        padding: 100px 0;
    }
    .study-s3-why .why-us-content .common-subtitle span {
        font-size: 0.78rem;
        letter-spacing: 0.1em;
        color: #64748b;
    }
    .study-s3-why .why-us-content .common-title h2 {
        font-size: clamp(1.55rem, 2.4vw, 2rem);
        margin-bottom: 1rem;
    }
    .study-s3-why .study-why-chips {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 1.5rem;
    }
    .study-s3-why .study-chip {
        background: #eef6f2;
        color: #14532d;
        padding: 10px 16px;
        border-radius: 999px;
        font-size: 0.875rem;
        font-weight: 600;
    }
    .study-s3-why .study-chip:nth-child(3n+2) { background: #fdf6e8; color: #7c4a03; }

    .study-s4-process {
        background: linear-gradient(180deg, #0f172a 0%, #1e293b 100%);
        color: #e2e8f0;
        padding: 96px 0;
    }
    .study-s4-process .section-top-9 .common-title h2,
    .study-s4-process .section-top-9 .common-subtitle span { color: #f8fafc; }
    .study-s4-process .section-top-9 .common-subtitle span {
        font-size: 0.78rem;
        letter-spacing: 0.12em;
        color: #94a3b8 !important;
    }
    .study-s4-process .section-top-9 .common-title h2 {
        font-size: clamp(1.55rem, 2.5vw, 2.05rem);
    }
    .study-s4-process .text-muted-custom { color: #94a3b8; }
    .study-process-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 0;
        margin-top: 3rem;
        border: 1px solid rgba(148, 163, 184, 0.25);
        border-radius: 12px;
        overflow: hidden;
    }
    @media (max-width: 991px) {
        .study-process-grid { grid-template-columns: 1fr; }
    }
    .study-process-step {
        padding: 28px 22px;
        border-right: 1px solid rgba(148, 163, 184, 0.2);
        position: relative;
    }
    @media (max-width: 991px) {
        .study-process-step { border-right: none; border-bottom: 1px solid rgba(148, 163, 184, 0.2); }
    }
    .study-process-step:last-child { border-right: none; border-bottom: none; }
    .study-process-step .step-no {
        font-size: 0.75rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--theme-color-2, #e7b23b);
        font-weight: 700;
        margin-bottom: 10px;
    }
    .study-process-step h4 {
        color: #fff;
        font-size: 1.08rem;
        margin-bottom: 10px;
        font-weight: 600;
    }
    .study-process-step p {
        margin: 0;
        font-size: 0.88rem;
        color: #94a3b8;
        line-height: 1.58;
        font-weight: 400;
    }

    .study-s5-visa {
        padding: 100px 0;
        background: linear-gradient(165deg, #f1f5f9 0%, #ffffff 38%, #eef7f3 100%);
        position: relative;
        overflow: hidden;
    }
    .study-s5-visa::before {
        content: '';
        position: absolute;
        width: 420px;
        height: 420px;
        right: -120px;
        top: -80px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(40, 174, 119, 0.12) 0%, transparent 70%);
        pointer-events: none;
    }
    .study-s5-visa::after {
        content: '';
        position: absolute;
        width: 280px;
        height: 280px;
        left: -80px;
        bottom: -60px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(231, 178, 59, 0.1) 0%, transparent 70%);
        pointer-events: none;
    }
    .study-s5-visa .container { position: relative; z-index: 1; }
    .study-s5-intro-card {
        background: #fff;
        border-radius: 20px;
        padding: 44px 40px 48px;
        box-shadow: 0 20px 50px rgba(15, 23, 42, 0.08), 0 1px 0 rgba(255,255,255,0.9) inset;
        border: 1px solid rgba(226, 232, 240, 0.9);
        position: relative;
        height: 100%;
    }
    .study-s5-intro-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 28px;
        bottom: 28px;
        width: 4px;
        border-radius: 4px;
        background: linear-gradient(180deg, var(--theme-color-3, #28ae77), #0d9488);
    }
    .study-s5-intro-card .common-subtitle {
        justify-content: flex-start;
        margin-bottom: 14px;
    }
    .study-s5-intro-card .common-subtitle span {
        font-size: 0.78rem;
        letter-spacing: 0.14em;
        color: #64748b;
        font-weight: 600;
    }
    .study-s5-intro-card .common-title h2 {
        font-size: clamp(1.65rem, 2.5vw, 2.1rem);
        line-height: 1.2;
        color: #0f172a;
    }
    .study-s5-visa .visa-lead {
        font-size: 0.96rem;
        line-height: 1.74;
        color: #475569;
        margin-bottom: 0;
        font-weight: 400;
    }
    .study-s5-visa .visa-lead.visa-highlight {
        font-size: 1.1rem;
        font-weight: 600;
        line-height: 1.68;
        color: #0f172a;
        padding: 18px 20px;
        background: linear-gradient(135deg, rgba(40, 174, 119, 0.06), rgba(13, 148, 136, 0.04));
        border-radius: 12px;
        border-left: 3px solid var(--theme-color-3, #28ae77);
    }

    .study-s5-support-card {
        background: #fff;
        border-radius: 20px;
        padding: 0;
        box-shadow: 0 24px 55px rgba(15, 23, 42, 0.1);
        border: 1px solid rgba(226, 232, 240, 0.95);
        overflow: hidden;
        height: 100%;
    }
    .study-s5-support-head {
        padding: 28px 32px 22px;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 55%, #134e4a 120%);
        position: relative;
    }
    .study-s5-support-head::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 32px;
        right: 32px;
        height: 2px;
        background: linear-gradient(90deg, var(--theme-color-2, #e7b23b), transparent);
        opacity: 0.55;
    }
    .study-s5-support-heading {
        font-size: 1.05rem;
        font-weight: 700;
        color: #fff;
        margin: 0;
        letter-spacing: 0.02em;
    }
    .study-support-list {
        list-style: none;
        padding: 8px 0 12px;
        margin: 0;
    }
    .study-support-list li {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 18px 28px;
        border-bottom: 1px solid #eef2f7;
        color: #334155;
        font-weight: 500;
        font-size: 0.93rem;
        line-height: 1.48;
        transition: background 0.2s ease, padding-left 0.2s ease;
    }
    .study-support-list li:last-child { border-bottom: none; }
    .study-support-list li:hover {
        background: linear-gradient(90deg, rgba(40, 174, 119, 0.06), transparent);
        padding-left: 32px;
    }
    .study-support-list .li-mark {
        flex-shrink: 0;
        width: 26px;
        height: 26px;
        border-radius: 8px;
        background: rgba(40, 174, 119, 0.12);
        color: var(--theme-color-3, #28ae77);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.72rem;
        margin-top: 2px;
    }
    .study-support-list li:nth-child(even) .li-mark {
        background: rgba(231, 178, 59, 0.15);
        color: #b45309;
    }

    .study-s6-change {
        padding: 0 0 90px;
    }
    .study-change-panel {
        border-radius: 20px;
        overflow: hidden;
        display: grid;
        grid-template-columns: 1fr 1fr;
        box-shadow: 0 24px 60px rgba(15, 23, 42, 0.12);
    }
    @media (max-width: 767px) {
        .study-change-panel { grid-template-columns: 1fr; }
    }
    .study-change-panel .cp-left {
        background: var(--theme-color-3, #28ae77);
        color: #fff;
        padding: 56px 48px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .study-change-panel .cp-left h2 { color: #fff; margin-bottom: 1rem; }
    .study-change-panel .cp-right {
        background: #0f172a;
        color: #e2e8f0;
        padding: 56px 48px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .study-change-panel .cp-right p { margin-bottom: 1.25rem; }
    .study-change-panel .cp-left .common-subtitle span {
        font-size: 0.82rem;
        letter-spacing: 0.06em;
    }
    .study-change-panel .cp-left h2 {
        font-size: clamp(1.45rem, 2.2vw, 1.85rem);
        line-height: 1.28;
    }

    .study-s7-grad {
        padding: 0 0 96px;
    }
    .study-grad-card {
        background: #2c333f;
        color: #fff;
        border-radius: 16px;
        padding: 56px 48px 52px;
        text-align: left;
        max-width: 100%;
    }
    @media (max-width: 575px) {
        .study-grad-card { padding: 40px 24px 36px; }
    }
    .study-grad-card .study-grad-tag {
        display: block;
        font-size: 0.88rem;
        letter-spacing: 0.06em;
        text-transform: none;
        color: #e7c66b;
        margin-bottom: 14px;
        font-weight: 600;
    }
    .study-grad-card h2 {
        color: #fff;
        font-weight: 700;
        font-size: clamp(1.5rem, 3vw, 2.25rem);
        line-height: 1.25;
        margin-bottom: 22px;
    }
    .study-grad-card .study-grad-sub {
        color: rgba(255, 255, 255, 0.98);
        font-size: 1.12rem;
        line-height: 1.62;
        margin-bottom: 22px;
        font-weight: 600;
    }
    .study-grad-card .study-grad-body p {
        color: rgba(255, 255, 255, 0.88);
        font-size: 0.94rem;
        line-height: 1.72;
        margin-bottom: 1.1rem;
        font-weight: 400;
    }
    .study-grad-card .study-grad-body p:last-of-type {
        margin-bottom: 0;
    }
    .study-grad-card .study-grad-cta {
        margin-top: 32px;
    }

    .study-s8-final {
        padding: 0 0 110px;
    }
    .study-final-frame {
        max-width: 900px;
        margin: 0 auto;
        text-align: center;
        padding: 56px 40px;
        border: 2px solid #e5e7eb;
        border-radius: 4px;
        position: relative;
        background: #fff;
    }
    .study-final-frame .common-subtitle span {
        font-size: 0.78rem;
        letter-spacing: 0.12em;
    }
    .study-final-frame .common-title h2 {
        font-size: clamp(1.55rem, 2.6vw, 2rem);
    }
    .study-final-frame::before {
        content: '';
        position: absolute;
        left: 50%;
        top: -2px;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: var(--theme-color-2, #e7b23b);
    }
    .study-final-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        justify-content: center;
        margin-top: 1.75rem;
    }
    .study-btn-ghost-dark {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 26px;
        border: 2px solid #1f2937;
        color: #1f2937;
        font-weight: 600;
        border-radius: 4px;
        text-decoration: none;
        transition: background 0.2s, color 0.2s;
    }
    .study-btn-ghost-dark:hover {
        background: #1f2937;
        color: #fff;
    }
</style>

{{-- Section 1: Hero --}}
<section class="hero-section-5 study-s1-hero" style="background-image: url('{{ asset('assets/images/services/banner-2.webp') }}');">
    <div class="container">
        <div class="hero-content-5">
            <div class="study-hero-tag" data-aos="fade-up" data-aos-delay="100">Your Australian study journey starts here</div>
            <div class="title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h1>Study in Australia with clear education and visa guidance</h1>
            </div>
            <div class="text" data-aos="fade-up" data-aos-delay="350" data-aos-duration="1000">
                <p class="study-copy-sub">From choosing the right course to preparing your student visa and planning your post-study pathway, Visawizer helps you move with clarity and confidence.</p>
            </div>
            <div class="text" data-aos="fade-up" data-aos-delay="450" data-aos-duration="1000">
                <p class="study-copy-body">Australia continues to be one of the most preferred destinations for international students seeking quality education, global exposure, and future career opportunities. Choosing the right course, institution, location, budget, and visa pathway can feel confusing without proper guidance. At Visawizer, we support students at every stage — course selection, admission, OSHC, student visa planning, course change, institution transfer, and post-study visa options.</p>
            </div>
            <div class="study-hero-actions" data-aos="fade-up" data-aos-delay="550" data-aos-duration="1000">
                <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                    Book Study Consultation
                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                </a>
                <a class="study-btn-outline-light" href="#study-visa-support">Explore Student Visa Options</a>
            </div>
        </div>
        <div class="shape"><img alt="" src="{{ asset('assets/img/shapes/shape-39.webp') }}"></div>
    </div>
</section>

{{-- Section 2: Pathway cards --}}
<section class="study-s2-path">
    <div class="container">
        <div class="study-section-head" data-aos="fade-up">
            <div class="common-subtitle text-uppercase"><span>Choose your starting point</span></div>
            <div class="common-title text-start m-b-15"><h2>Find the right study support for your situation</h2></div>
            <p class="study-copy-sub m-b-0" style="max-width:640px;">Whether you are planning your first admission or looking for a post-study pathway, we help you identify the next right step.</p>
        </div>
        <div class="study-path-rail" data-aos="fade-up" data-aos-delay="150">
            <article class="study-path-card">
                <span class="path-idx">01</span>
                <h3>Education Counselling</h3>
                <p>Understand study options, institutions, course suitability, and long-term career alignment.</p>
            </article>
            <article class="study-path-card">
                <span class="path-idx">02</span>
                <h3>Admissions Support</h3>
                <p>Guided support for applying to colleges, universities, and programs that match your profile.</p>
            </article>
            <article class="study-path-card">
                <span class="path-idx">03</span>
                <h3>Student Visa Guidance</h3>
                <p>Prepare for Student Visa 500, Student Guardian 590, and Training Visa 407 pathways with structured support.</p>
            </article>
            <article class="study-path-card">
                <span class="path-idx">04</span>
                <h3>OSHC Assistance</h3>
                <p>Help arranging Overseas Student Health Cover aligned with your study and visa needs.</p>
            </article>
            <article class="study-path-card">
                <span class="path-idx">05</span>
                <h3>Course &amp; College Change</h3>
                <p>Guidance if you need to change your course, education provider, or academic direction.</p>
            </article>
            <article class="study-path-card">
                <span class="path-idx">06</span>
                <h3>Graduate Pathways</h3>
                <p>Explore Temporary Graduate Visa 485 and post-study work options after completing your studies.</p>
            </article>
        </div>
    </div>
</section>

{{-- Section 3: Image collage + narrative + chips --}}
<section class="about-us-section study-s3-why m-t-0 m-b-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="thumb" data-aos="fade-up" data-aos-delay="150">
                    <div class="shape-wrapped-thumb-2">
                        <div class="thumb-wrapper">
                            <img alt="Students planning study in Australia" src="{{ asset('assets/images/stories-image-1.webp') }}">
                            <img alt="Campus and learning" src="{{ asset('assets/images/about-image-1.webp') }}" style="border-radius: 10px;">
                        </div>
                        <div class="positioned-thumb"><img alt="" src="{{ asset('assets/images/principles-image-3.webp') }}" class="w-100"></div>
                        <div class="shape-1"><img alt="" src="{{ asset('assets/img/shapes/shape-22.webp') }}"></div>
                        <div class="shape-2"><img alt="" src="{{ asset('assets/img/shapes/shape-23.webp') }}"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content" data-aos="fade-up" data-aos-delay="300">
                    <div class="common-subtitle"><span>More than a degree</span></div>
                    <div class="common-title text-start"><h2>An education destination with global possibilities</h2></div>
                    <div class="text">
                        <p class="study-copy-sub">Australia offers international students academic quality, multicultural exposure, and pathways that can support long-term personal and professional growth.</p>
                        <p class="study-copy-body">Studying in Australia is not just about getting admission into an institution. It is about choosing a course that fits your background, your career goals, your budget, your migration possibilities, and your future aspirations. Our role is to help you make an informed decision before you invest time, money, and effort into your international education journey.</p>
                    </div>
                    <div class="study-why-chips" aria-label="Key reasons">
                        <span class="study-chip">Globally recognised education system</span>
                        <span class="study-chip">Wide range of courses and institutions</span>
                        <span class="study-chip">Multicultural student environment</span>
                        <span class="study-chip">Personal and professional development</span>
                        <span class="study-chip">Post-study planning for eligible graduates</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 4: Dark continuous strip — five connected columns --}}
<section class="study-s4-process" id="how-visawizer-helps">
    <div class="container">
        <div class="section-top-9 text-center">
            <div class="common-subtitle text-uppercase justify-content-center" data-aos="fade-up"><span>Guided from start to next step</span></div>
            <div class="common-title m-b-15" data-aos="fade-up" data-aos-delay="100"><h2>Complete support for your study journey</h2></div>
            <p class="study-s4-intro m-b-0 mx-auto" style="max-width:700px;" data-aos="fade-up" data-aos-delay="200">We help you move from confusion to a structured study and visa action plan.</p>
        </div>
        <div class="study-process-grid" data-aos="fade-up" data-aos-delay="250">
            <div class="study-process-step">
                <div class="step-no">Step 01</div>
                <h4>Profile Assessment</h4>
                <p>We review your academic background, work history, English language readiness, budget, and long-term goals.</p>
            </div>
            <div class="study-process-step">
                <div class="step-no">Step 02</div>
                <h4>Course &amp; Institution Shortlisting</h4>
                <p>We help identify suitable education options based on your eligibility and career direction.</p>
            </div>
            <div class="study-process-step">
                <div class="step-no">Step 03</div>
                <h4>Admission Support</h4>
                <p>We guide you through document preparation, application coordination, and offer letter requirements.</p>
            </div>
            <div class="study-process-step">
                <div class="step-no">Step 04</div>
                <h4>Visa Planning</h4>
                <p>We help you understand visa requirements, documentation needs, and application readiness.</p>
            </div>
            <div class="study-process-step">
                <div class="step-no">Step 05</div>
                <h4>Post-Study Direction</h4>
                <p>We help you think beyond admission by reviewing graduate and future migration possibilities.</p>
            </div>
        </div>
    </div>
</section>

{{-- Section 5: Student Visa & Compliance Support --}}
<section class="study-s5-visa" id="study-visa-support">
    <div class="container">
        <div class="row align-items-stretch row-gap-4 justify-content-center">
            <div class="col-xl-6 col-lg-6" data-aos="fade-up">
                <div class="study-s5-intro-card">
                    <div class="common-subtitle text-uppercase"><span>Prepare with confidence</span></div>
                    <div class="common-title text-start m-b-15"><h2>Student visa guidance that goes beyond paperwork</h2></div>
                    <p class="visa-lead visa-highlight m-t-10 m-b-0">Your visa application should reflect your genuine study intention, financial readiness, education plan, and future clarity.</p>
                    <p class="visa-lead m-t-25 m-b-0">A student visa application is not only about submitting forms. It requires a complete and consistent picture of your study purpose, course selection, financial position, documentation, health cover, and future plans.</p>
                    <p class="visa-lead m-t-20 m-b-0">Visawizer helps students organise their information, understand requirements, and reduce avoidable errors before submission.</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6" data-aos="fade-up" data-aos-delay="120">
                <div class="study-s5-support-card">
                    <div class="study-s5-support-head">
                        <p class="study-s5-support-heading">Support Areas:</p>
                    </div>
                    <ul class="study-support-list">
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Student Visa Subclass 500 guidance</span></li>
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Student Guardian Visa Subclass 590 guidance</span></li>
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Training Visa Subclass 407 guidance</span></li>
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>OSHC planning</span></li>
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Documentation checklist support</span></li>
                        <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>Application review and next-step guidance</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 6: Split colour panel + CTA --}}
<section class="study-s6-change">
    <div class="container">
        <div class="study-change-panel" data-aos="fade-up">
            <div class="cp-left">
                <div class="common-subtitle" style="color: rgba(255,255,255,0.85);"><span>Already studying in Australia?</span></div>
                <h2>Support for course changes, college changes, and study decisions</h2>
                <p class="study-copy-sub m-b-0">If your current course, provider, or study direction no longer fits your goal, we can help you review your options carefully.</p>
            </div>
            <div class="cp-right">
                <p class="study-copy-body">Many students realise after arriving in Australia that their course, college, location, or career direction may not be the right fit. Any change should be considered carefully because it can affect academic progress, visa conditions, future eligibility, and long-term planning.</p>
                <p class="study-copy-body m-b-0">Visawizer helps students understand their options before making a change.</p>
                <div class="m-t-30">
                    <a class="e-primary-btn has-icon is-hover-white" href="{{ url('contact-us') }}">
                        Discuss My Study Situation
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 7: Graduate & Post-Study Pathways --}}
<section class="study-s7-grad">
    <div class="container">
        <div class="study-grad-card" data-aos="fade-up">
            <span class="study-grad-tag">After your studies</span>
            <h2>Plan your next step after completing your course</h2>
            <p class="study-grad-sub m-b-0">Graduation is not the end of the journey. For many students, it is the beginning of work experience, further study, or migration planning.</p>
            <div class="study-grad-body m-t-20">
                <p class="m-b-0">Eligible international graduates may explore Temporary Graduate Visa 485 and related post-study options depending on their qualification, study history, and current rules. The Temporary Graduate visa allows eligible international students to live, study and work in Australia temporarily after completing their studies.</p>
                <p class="m-t-20 m-b-0">Visawizer helps you understand your possible next steps before your current visa timeline becomes urgent.</p>
            </div>
            <div class="study-grad-cta">
                <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                    Explore Graduate Visa Options
                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Section 8: Framed closing CTA --}}
<section class="study-s8-final">
    <div class="container">
        <div class="study-final-frame" data-aos="fade-up">
            <div class="common-subtitle text-uppercase justify-content-center"><span>Take the first informed step</span></div>
            <div class="common-title m-b-15"><h2>Ready to plan your Australian study journey?</h2></div>
            <p class="study-copy-body m-b-0 mx-auto" style="max-width:560px;">Book a consultation with Visawizer and get clarity on course options, admission steps, student visa planning, and post-study possibilities.</p>
            <div class="study-final-actions">
                <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                    Book Appointment
                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                </a>
                <a class="study-btn-ghost-dark" href="{{ url('contact-us') }}">Contact Visawizer</a>
            </div>
        </div>
    </div>
</section>
@endsection
