@extends('layouts.frontend')
@section('content')
@include('partials.studyPageStyles')

@php
    $situations = [
        ['icon' => 'fa-light fa-file-circle-xmark', 'title' => 'Visa Refusal or Cancellation', 'text' => 'You may need to understand whether a decision can be reviewed and what the next step should be.'],
        ['icon' => 'fa-light fa-scale-balanced', 'title' => 'ART Review Matters', 'text' => 'Certain visa decisions may be reviewable by the Administrative Review Tribunal.'],
        ['icon' => 'fa-light fa-shield-heart', 'title' => 'Protection Visa Concerns', 'text' => 'You may fear returning to your home country because of persecution or serious harm.'],
        ['icon' => 'fa-light fa-hands-holding-heart', 'title' => 'Humanitarian Circumstances', 'text' => 'Your case may involve personal safety, family risk, or sensitive humanitarian concerns.'],
        ['icon' => 'fa-light fa-folder-tree', 'title' => 'Complex Visa History', 'text' => 'Previous refusals, cancellations, overstays, or inconsistent records may need careful explanation.'],
        ['icon' => 'fa-light fa-clock', 'title' => 'Urgent Timelines', 'text' => 'Appeal and review matters may have strict deadlines, so early action is important.'],
    ];

    $carePrinciples = [
        'Confidential case discussion',
        'Respectful handling of personal history',
        'Clear explanation of options',
        'No false promises',
        'Evidence-led preparation',
        'Deadline awareness',
        'Careful review of past decisions',
    ];

    $evidenceAreas = [
        ['title' => 'Decision Documents', 'text' => 'Refusal letter, cancellation notice, review instructions, and deadline details.'],
        ['title' => 'Identity & Visa History', 'text' => 'Passports, previous visa records, entry history, notices, and correspondence.'],
        ['title' => 'Personal Statement', 'text' => 'A clear, truthful explanation of the background, events, fears, or decision history.'],
        ['title' => 'Country or Risk Evidence', 'text' => 'Relevant evidence supporting fear of harm or risk if returning home.'],
        ['title' => 'Family & Community Evidence', 'text' => 'Relationship documents, witness statements, community letters, or support documents where relevant.'],
        ['title' => 'Medical or Psychological Evidence', 'text' => 'Only where relevant, sensitive evidence may need careful handling.'],
    ];

    $process = [
        ['title' => 'Confidential Consultation', 'text' => 'We listen to your situation, current visa status, decision history, and immediate concerns.'],
        ['title' => 'Document Review', 'text' => 'We review decision letters, visa records, notices, deadlines, and supporting materials.'],
        ['title' => 'Pathway Assessment', 'text' => 'We help identify whether the matter relates to ART review, protection visa, or another possible next step.'],
        ['title' => 'Evidence Planning', 'text' => 'We identify what evidence may be needed and where the case requires stronger support.'],
        ['title' => 'Application or Review Preparation', 'text' => 'We help structure the case, organise documents, and prepare for the next step.'],
        ['title' => 'Ongoing Guidance', 'text' => 'We support communication, updates, additional document requests, and next-stage planning.'],
    ];

    $urgentIndicators = [
        'You received a visa refusal letter',
        'You received a cancellation notice',
        'You have an ART deadline',
        'Your current visa is expiring',
        'You are unsure about bridging visa conditions',
        'You fear returning to your home country',
        'You have been asked for further information',
    ];

    $trustCards = [
        ['icon' => 'fa-light fa-user-shield', 'title' => 'Confidential Discussion', 'text' => 'Your personal situation is handled with discretion and sensitivity.'],
        ['icon' => 'fa-light fa-hourglass-clock', 'title' => 'Deadline Awareness', 'text' => 'We help you understand urgent timelines and next-step priorities.'],
        ['icon' => 'fa-light fa-folder-check', 'title' => 'Evidence-Led Approach', 'text' => 'We focus on facts, documents, consistency, and case clarity.'],
        ['icon' => 'fa-light fa-comments-question-check', 'title' => 'Sensitive Communication', 'text' => 'We avoid pressure-based advice and explain options honestly.'],
        ['icon' => 'fa-light fa-diagram-project', 'title' => 'Complex Case Understanding', 'text' => 'We help organise matters involving refusals, cancellations, protection concerns, or humanitarian elements.'],
    ];
@endphp

<style type="text/css">
    .protection-page {
        --protection-dark: #071019;
        --protection-dark-2: #132235;
        --protection-light: #f7fbff;
        --protection-soft: #eef7f6;
        --protection-accent: var(--theme-color-3);
        --protection-gold: #d7a642;
        --protection-border: rgba(15, 23, 42, 0.1);
        --protection-muted: #64748b;
    }
    .protection-page .protection-band-light {
        background: linear-gradient(180deg, #ffffff 0%, var(--protection-light) 100%);
        position: relative;
    }
    .protection-page .protection-band-dark {
        background:
            radial-gradient(circle at 12% 18%, color-mix(in srgb, var(--protection-accent) 20%, transparent), transparent 28%),
            radial-gradient(circle at 86% 74%, rgba(215, 166, 66, 0.18), transparent 26%),
            linear-gradient(155deg, var(--protection-dark) 0%, var(--protection-dark-2) 52%, #101827 100%);
        color: #f8fafc;
        position: relative;
        overflow: hidden;
    }
    .protection-page .protection-band-soft {
        background:
            linear-gradient(90deg, rgba(248, 250, 250, 0.72), rgba(238, 247, 246, 0.58)),
            url('{{ asset('assets/imgs/protection/pa-band-soft.webp') }}') center / cover;
        position: relative;
    }
    .protection-page .protection-band-dark h2,
    .protection-page .protection-band-dark h3,
    .protection-page .protection-band-dark h4,
    .protection-page .protection-band-dark .common-title h2 {
        color: #ffffff !important;
    }
    .protection-page .protection-band-dark p,
    .protection-page .protection-band-dark .study-copy-sub,
    .protection-page .protection-band-dark .study-copy-body {
        color: rgba(248, 250, 252, 0.88);
    }
    .protection-page .protection-section-pad {
        padding: clamp(72px, 8vw, 112px) 0;
    }
    .protection-page .protection-separated .title,
    .protection-page .protection-separated .common-title {
        position: relative;
        margin-bottom: clamp(18px, 2vw, 24px) !important;
        padding-bottom: clamp(18px, 2vw, 24px);
    }
    .protection-page .protection-separated .title::after,
    .protection-page .protection-separated .common-title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: min(100%, 760px);
        height: 1px;
        background: rgba(15, 23, 42, 0.14);
    }
    .protection-page .protection-separated .study-copy-sub {
        position: relative;
        padding-bottom: 24px;
    }
    .protection-page .protection-separated .study-copy-sub::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 124px;
        height: 3px;
        border-radius: 999px;
        background: linear-gradient(90deg, var(--protection-accent), var(--protection-gold));
    }
    .protection-page .protection-separated-center .title::after,
    .protection-page .protection-separated-center .common-title::after,
    .protection-page .protection-separated-center .study-copy-sub::after {
        left: 50%;
        transform: translateX(-50%);
    }
    .protection-page .protection-separated-dark .title::after,
    .protection-page .protection-separated-dark .common-title::after {
        background: rgba(255, 255, 255, 0.2);
    }
    .protection-page .protection-hero {
        background-position: center;
        isolation: isolate;
    }
    .protection-page .protection-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(7, 16, 25, 0.36), rgba(7, 16, 25, 0.94));
        z-index: -1;
    }
    .protection-page .protection-hero .study-copy-body {
        max-width: 920px;
    }
    .protection-page .protection-hero-flags {
        display: flex;
        justify-content: center;
        gap: 12px;
        flex-wrap: wrap;
        margin-top: 28px;
    }
    .protection-page .protection-hero-flags span {
        border: 1px solid rgba(255, 255, 255, 0.18);
        border-radius: 999px;
        color: #ffffff;
        padding: 8px 14px;
        background: rgba(255, 255, 255, 0.08);
        font-size: 0.9rem;
    }
    .protection-page .protection-card-weave {
        display: grid;
        grid-template-columns: repeat(12, minmax(0, 1fr));
        gap: 18px;
        margin-top: 44px;
    }
    .protection-page .protection-situation-card {
        grid-column: span 4;
        border-radius: 24px;
        padding: 28px;
        background: #ffffff;
        border: 1px solid var(--protection-border);
        box-shadow: 0 20px 52px rgba(15, 23, 42, 0.08);
        min-height: 240px;
    }
    .protection-page .protection-soft-icon,
    .protection-page .protection-trust-icon {
        width: 58px;
        height: 58px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 18px;
        background: color-mix(in srgb, var(--protection-accent) 10%, #ffffff);
        color: var(--protection-accent);
        font-size: 1.55rem;
        margin-bottom: 20px;
    }
    .protection-page .protection-situation-card h3,
    .protection-page .protection-evidence-card h3,
    .protection-page .protection-trust-card h3 {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }
    .protection-page .protection-situation-card p,
    .protection-page .protection-evidence-card p,
    .protection-page .protection-trust-card p,
    .protection-page .protection-step-card p {
        line-height: 1.65;
        margin-bottom: 0;
    }
    .protection-page .protection-review-shell {
        display: grid;
        grid-template-columns: minmax(0, 0.94fr) minmax(0, 1.06fr);
        gap: clamp(24px, 4vw, 48px);
        align-items: stretch;
    }
    .protection-page .protection-review-card {
        border-radius: 28px;
        padding: clamp(32px, 4vw, 54px);
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.14);
        box-shadow: 0 24px 58px rgba(0, 0, 0, 0.2);
    }
    .protection-page .protection-deadline-panel {
        border-radius: 26px;
        padding: clamp(28px, 3.5vw, 46px);
        background:
            linear-gradient(145deg, rgba(255, 255, 255, 0.14), rgba(255, 255, 255, 0.06)),
            radial-gradient(circle at 88% 12%, rgba(215, 166, 66, 0.2), transparent 32%);
        border: 1px solid rgba(255, 255, 255, 0.16);
        box-shadow: 0 24px 58px rgba(0, 0, 0, 0.2);
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    .protection-page .protection-deadline-head {
        position: relative;
        z-index: 1;
        margin-bottom: 26px;
        padding-bottom: 22px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.14);
    }
    .protection-page .protection-deadline-head h3 {
        color: #ffffff !important;
        margin-bottom: 10px;
        font-size: clamp(1.35rem, 2.4vw, 2rem);
    }
    .protection-page .protection-deadline-head p,
    .protection-page .protection-deadline-panel p {
        color: rgba(248, 250, 252, 0.88) !important;
    }
    .protection-page .protection-deadline-row {
        display: grid;
        grid-template-columns: 52px 1fr;
        gap: 16px;
        align-items: start;
        padding: 18px;
        border-radius: 18px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        background: rgba(255, 255, 255, 0.08);
        position: relative;
        z-index: 1;
        margin-bottom: 14px;
    }
    .protection-page .protection-deadline-row:last-child {
        margin-bottom: 0;
    }
    .protection-page .protection-deadline-row span {
        width: 52px;
        height: 52px;
        border-radius: 16px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #ffffff;
        color: var(--protection-accent);
        font-weight: 800;
        box-shadow: 0 12px 26px rgba(0, 0, 0, 0.18);
    }
    .protection-page .protection-deadline-row strong {
        color: #ffffff;
    }
    .protection-page .protection-visa-panel {
        border-radius: 30px;
        overflow: hidden;
        background: #ffffff;
        box-shadow: 0 24px 60px rgba(15, 23, 42, 0.12);
        border: 1px solid var(--protection-border);
    }
    .protection-page .protection-visa-image {
        height: 100%;
        min-height: 430px;
        position: relative;
        overflow: hidden;
    }
    .protection-page .protection-visa-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    .protection-page .protection-visa-image::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(7, 16, 25, 0.04), rgba(7, 16, 25, 0.55));
    }
    .protection-page .protection-visa-copy {
        padding: clamp(32px, 4vw, 54px);
    }
    .protection-page .protection-care-wrap {
        display: grid;
        grid-template-columns: minmax(0, 0.84fr) minmax(0, 1.16fr);
        gap: clamp(24px, 4vw, 48px);
        align-items: center;
    }
    .protection-page .protection-care-side {
        display: flex;
        align-items: center;
        height: 100%;
    }
    .protection-page .protection-care-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 30px;
        width: 100%;
    }
    .protection-page .protection-care-list span {
        display: flex;
        align-items: center;
        gap: 10px;
        border-radius: 8px;    
        padding: 16px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.12);
        color: #ffffff;
        font-weight: 700;
        min-height: 82px;
    }
    .protection-page .protection-care-list span i {
        color: var(--protection-gold);
    }
    .protection-page .protection-evidence-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 18px;
        align-items: stretch;
        margin-top: 42px;
    }
    .protection-page .protection-evidence-card {
        width: 100%;
        border-radius: 22px;
        padding: 28px;
        margin: 0;
        background: #ffffff;
        border: 1px solid var(--protection-border);
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
    }
    .protection-page .protection-evidence-card:nth-child(even) {
        background: linear-gradient(145deg, var(--protection-soft), #ffffff);
    }
    .protection-page .protection-evidence-card:nth-child(1) {
        grid-column: 1;
        grid-row: 1;
    }
    .protection-page .protection-evidence-card:nth-child(2) {
        grid-column: 1;
        grid-row: 2;
    }
    .protection-page .protection-evidence-card:nth-child(3) {
        grid-column: 2;
        grid-row: 1;
    }
    .protection-page .protection-evidence-card:nth-child(4) {
        grid-column: 2;
        grid-row: 2;
    }
    .protection-page .protection-evidence-card:nth-child(5) {
        grid-column: 3;
        grid-row: 1;
    }
    .protection-page .protection-evidence-card:nth-child(6) {
        grid-column: 3;
        grid-row: 2;
    }
    .protection-page .protection-evidence-no {
        display: inline-flex;
        color: var(--protection-accent);
        font-weight: 800;
        letter-spacing: 0.08em;
        margin-bottom: 14px;
    }
    .protection-page .protection-evidence-mini-image {
        width: 100%;
        height: 150px;
        border-radius: 20px;
        overflow: hidden;
        margin-bottom: 18px;
        box-shadow: 0 18px 42px rgba(15, 23, 42, 0.1);
    }
    .protection-page .protection-evidence-mini-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    .protection-page .protection-evidence-aside {
        margin-top: -28px;
    }
    .protection-page .protection-process-ladder {
        display: grid;
        gap: 16px;
        margin-top: 44px;
        position: relative;
    }
    .protection-page .protection-step-card {
        display: grid;
        grid-template-columns: 96px 1fr;
        gap: 22px;
        align-items: start;
        width: min(100%, 860px);
        border-radius: 24px;
        padding: 24px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.13);
    }
    .protection-page .protection-step-card:nth-child(even) {
        margin-left: auto;
        background: rgba(255, 255, 255, 0.12);
    }
    .protection-page .protection-step-no {
        width: 76px;
        height: 76px;
        border-radius: 24px;
        background: #ffffff;
        color: var(--protection-accent);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 1.2rem;
    }
    .protection-page .protection-urgent-shell {
        display: grid;
        grid-template-columns: minmax(340px, 0.95fr) minmax(360px, 0.75fr);
        gap: clamp(24px, 5vw, 58px);
        align-items: stretch;
        max-width: 1180px;
        margin: 0 auto;
    }
    .protection-page .protection-urgent-section {
        padding: clamp(48px, 5vw, 72px) 0;
    }
    .protection-page .protection-urgent-note {
        border-radius: 16px;
        padding: clamp(34px, 4vw, 48px);
        background: rgba(255, 255, 255, 0.82);
        border: 1px solid rgba(255, 255, 255, 0.7);
        box-shadow: 0 18px 46px rgba(15, 23, 42, 0.08);
        backdrop-filter: blur(6px);
    }
    .protection-page .protection-urgent-note .common-title h2 {
        font-size: clamp(2rem, 3.1vw, 3rem);
        line-height: 1.15;
    }
    .protection-page .protection-urgent-aside {
        display: grid;
        gap: 14px;
        align-self: stretch;
        align-content: start;
    }
    .protection-page .protection-urgent-image {
        width: 100%;
        height: clamp(185px, 18vw, 235px);
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.65);
        box-shadow: 0 14px 34px rgba(15, 23, 42, 0.1);
    }
    .protection-page .protection-urgent-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    .protection-page .protection-urgent-list {
        list-style: none;
        margin: 0;
        padding: 0;
        display: grid;
        gap: 10px;
    }
    .protection-page .protection-urgent-list li {
        display: flex;
        gap: 10px;
        align-items: center;
        border-radius: 9px;
        background: rgba(255, 255, 255, 0.92);
        border: 1px solid rgba(15, 23, 42, 0.05);
        padding: 11px 16px;
        font-size: 0.9rem;
        font-weight: 800;
        line-height: 1.25;
        color: #071019;
        box-shadow: 0 10px 26px rgba(15, 23, 42, 0.06);
    }
    .protection-page .protection-urgent-list i {
        color: var(--protection-accent);
        font-size: 0.95rem;
        margin-top: 0;
    }
    .protection-page .protection-trust-grid {
        display: grid;
        grid-template-columns: repeat(5, minmax(0, 1fr));
        gap: 16px;
        margin-top: 44px;
    }
    .protection-page .protection-trust-card {
        border-radius: 24px;
        padding: 24px;
        background: #ffffff;
        border: 1px solid var(--protection-border);
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
    }
    .protection-page .protection-trust-card:nth-child(3) {
        transform: translateY(-20px);
        background: linear-gradient(150deg, var(--protection-dark-2), var(--protection-dark));
        color: #ffffff;
    }
    .protection-page .protection-trust-card:nth-child(3) h3,
    .protection-page .protection-trust-card:nth-child(3) p {
        color: #ffffff;
    }
    .protection-page .protection-trust-card:nth-child(3) .protection-trust-icon {
        background: rgba(255, 255, 255, 0.12);
        color: var(--protection-gold);
    }
    @media (max-width: 1199px) {
        .protection-page .protection-trust-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
    }
    @media (max-width: 991px) {
        .protection-page .protection-situation-card {
            grid-column: span 6;
        }
        .protection-page .protection-review-shell,
        .protection-page .protection-care-wrap,
        .protection-page .protection-urgent-shell {
            grid-template-columns: 1fr;
        }
        .protection-page .protection-visa-image {
            min-height: 320px;
        }
        .protection-page .protection-care-list,
        .protection-page .protection-trust-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
        .protection-page .protection-evidence-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
        .protection-page .protection-evidence-card:nth-child(n) {
            grid-column: auto;
            grid-row: auto;
        }
        .protection-page .protection-evidence-aside {
            margin-top: 0;
        }
    }
    @media (max-width: 767px) {
        .protection-page .protection-situation-card {
            grid-column: span 12;
        }
        .protection-page .protection-care-list,
        .protection-page .protection-trust-grid,
        .protection-page .protection-evidence-grid {
            grid-template-columns: 1fr;
        }
        .protection-page .protection-step-card {
            grid-template-columns: 1fr;
        }
        .protection-page .protection-step-card:nth-child(even),
        .protection-page .protection-trust-card:nth-child(3) {
            margin-left: 0;
            transform: none;
        }
    }
</style>

<div class="protection-page">
    <section class="hero-section-5 study-s1-hero protection-hero protection-band-dark" style="background-image: url('{{ asset('assets/imgs/protection/pa-s1-bg.webp') }}');">
        <div class="container">
            <div class="hero-content-5 protection-separated protection-separated-dark protection-separated-center">
                <div class="study-hero-tag" data-aos="fade-up" data-aos-delay="100">Sensitive matters need careful guidance</div>
                <div class="title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <h1>Support for complex immigration, protection, and appeal matters</h1>
                </div>
                <div class="text" data-aos="fade-up" data-aos-delay="350" data-aos-duration="1000">
                    <p class="study-copy-sub">Appeals, protection visa matters, and humanitarian concerns handled with privacy, sensitivity, and structured guidance.</p>
                </div>
                <div class="text" data-aos="fade-up" data-aos-delay="450" data-aos-duration="1000">
                    <p class="study-copy-body">Some immigration matters are simple. Others involve refusal decisions, review deadlines, protection concerns, humanitarian circumstances, fear of return, or complex personal histories. These matters need more than routine visa advice. They require careful listening, accurate documentation, and a calm, structured approach.</p>
                    <p class="study-copy-body m-t-20 m-b-0">Visawizer supports clients who need guidance with ART review matters and Protection Visa Subclass 866 pathways.</p>
                </div>
                <div class="study-hero-actions" data-aos="fade-up" data-aos-delay="550" data-aos-duration="1000">
                    <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                        Get Confidential Advice
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                    <a class="study-btn-outline-light" href="{{ url('book-appointment') }}"><i class="fa-regular fa-calendar-check"></i> Book Appointment</a>
                </div>
                <div class="protection-hero-flags" data-aos="fade-up" data-aos-delay="650">
                    <span>ART Reviews</span>
                    <span>Protection Visa 866</span>
                    <span>Refusals</span>
                    <span>Humanitarian Concerns</span>
                </div>
            </div>
            <div class="shape"><img alt="" src="{{ asset('assets/img/shapes/shape-39.webp') }}"></div>
        </div>
    </section>

    <section class="protection-section-pad protection-band-light">
        <div class="container">
            <div class="study-section-head-center text-center protection-separated protection-separated-center" data-aos="fade-up">
                <div class="mb-3 text-uppercase justify-content-center"><span class="bg-p">For complex situations</span></div>
                <div class="common-title m-b-15"><h2>Not every visa matter fits a standard pathway</h2></div>
                <p class="study-copy-sub m-b-0">You may need appeal, review, or protection-related guidance when your situation requires urgent care or detailed evidence.</p>
            </div>
            <div class="protection-card-weave" data-aos="fade-up" data-aos-delay="140">
                @foreach ($situations as $situation)
                    <div class="protection-situation-card">
                        <div class="protection-soft-icon"><i class="{{ $situation['icon'] }}"></i></div>
                        <h3>{{ $situation['title'] }}</h3>
                        <p>{{ $situation['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="protection-section-pad protection-band-dark" id="art-review-guidance">
        <div class="container">
            <div class="protection-review-shell">
                <div class="protection-review-card protection-separated protection-separated-dark" data-aos="fade-up">
                    <div class="common-subtitle text-uppercase"><span>Understand your review options</span></div>
                    <div class="protection-deadline-head"><h3>ART review guidance for eligible visa decisions</h3></div>
                    <p class="study-copy-sub">If your visa has been refused or cancelled, the first step is to understand whether you have review rights and what your deadline is.</p>
                    <p class="study-copy-body">The Administrative Review Tribunal has jurisdiction to review certain visa decisions made under the Migration Act 1958. If a visa decision is under review, Home Affairs also advises applicants to keep checking their current visa details and conditions through VEVO.</p>
                    <p class="study-copy-body m-b-0">A refusal or cancellation letter usually contains important information about whether review rights are available, how to apply, and the deadline for lodging the review. These details should be checked immediately.</p>
                    <a class="e-primary-btn has-icon m-t-30" href="{{ url('contact-us') }}">
                        Review My Appeal Options
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                </div>
                <div class="protection-deadline-panel" data-aos="fade-up" data-aos-delay="140">
                    <div class="protection-deadline-head">
                        <div class="common-subtitle text-uppercase"><span>First things to check</span></div>
                        <h3>Review matters start with the decision notice</h3>
                        <p class="study-copy-body m-b-0">Before preparing a response, confirm the type of decision, review pathway, and deadline shown in the letter.</p>
                    </div>
                    <div class="protection-deadline-row">
                        <span>01</span>
                        <p class="study-copy-body m-b-0"><strong>Check the decision letter.</strong> Confirm the decision type, notification date, and review instructions.</p>
                    </div>
                    <div class="protection-deadline-row">
                        <span>02</span>
                        <p class="study-copy-body m-b-0"><strong>Identify the deadline.</strong> Review rights can be time-sensitive and should be checked immediately.</p>
                    </div>
                    <div class="protection-deadline-row">
                        <span>03</span>
                        <p class="study-copy-body m-b-0"><strong>Prepare evidence carefully.</strong> A review matter should be built around facts, documents, and a clear response to the decision.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="protection-section-pad protection-band-light" id="protection-visa-guidance">
        <div class="container">
            <div class="protection-visa-panel" data-aos="fade-up">
                <div class="row g-0 align-items-stretch">
                    <div class="col-lg-5">
                        <div class="protection-visa-image">
                            <img src="{{ asset('assets/imgs/protection/pa-split-protection.webp') }}" alt="Protection visa guidance for asylum seekers in Australia">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="protection-visa-copy protection-separated">
                            <div class="mb-3 text-uppercase justify-content-center"><span class="bg-p">For genuine protection needs</span></div>
                            <div class="common-title text-start m-b-15"><h2>Protection Visa Subclass 866 guidance for asylum seekers in Australia</h2></div>
                            <p class="study-copy-sub">The Protection Visa is for people who arrived in Australia on a valid visa and seek protection because they fear serious harm or persecution in their home country.</p>
                            <p class="study-copy-body">Home Affairs describes the Subclass 866 Protection Visa as a visa for people who arrived in Australia on a valid visa and want to seek asylum, allowing successful applicants to stay in Australia permanently.</p>
                            <p class="study-copy-body m-b-0">Home Affairs also states that the Protection Visa is for genuine asylum seekers who are at real risk of significant harm or persecution in their home country, and not for people who simply want to stay longer in Australia to work.</p>
                            <a class="e-primary-btn has-icon m-t-30" href="{{ url('contact-us') }}">
                                Discuss Protection Visa Matter
                                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="protection-section-pad protection-band-dark">
        <div class="container">
            <div class="protection-care-wrap">
                <div class="protection-separated protection-separated-dark" data-aos="fade-up">
                    <div class="text-uppercase mb-3"><span class="bg-p">Privacy and care first</span></div>
                    <div class="protection-deadline-head"><h3>Complex immigration matters need trust, time, and confidentiality</h3></div>
                    <p class="study-copy-sub">These cases often involve deeply personal facts, family risk, safety concerns, trauma, previous decisions, or difficult documents.</p>
                    <p class="study-copy-body m-b-0">Protection and appeal matters should not be handled with generic templates. The facts must be understood carefully. The evidence must be organised respectfully. The timeline must be managed properly. Most importantly, the person's situation must be treated with dignity and confidentiality.</p>
                </div>
                <div class="protection-care-side" data-aos="fade-up" data-aos-delay="140">
                    <div class="protection-care-list">
                        @foreach ($carePrinciples as $principle)
                            <span><i class="fa-regular fa-check-circle"></i>{{ $principle }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="protection-section-pad protection-band-light">
        <div class="container">
            <div class="row row-gap-4 align-items-end">
                <div class="col-lg-7 protection-separated" data-aos="fade-up">
                    <div class="text-uppercase mb-3"><span class="bg-p">Evidence matters deeply</span></div>
                    <div class="common-title text-start m-b-15"><h2>A strong case depends on a clear story supported by documents</h2></div>
                    <p class="study-copy-sub m-b-0">Whether it is an appeal or protection matter, the application should be built around facts, consistency, and evidence.</p>
                </div>
                <div class="col-lg-5 protection-evidence-aside" data-aos="fade-up" data-aos-delay="120">
                    <div class="protection-evidence-mini-image">
                        <img src="{{ asset('assets/imgs/protection/pa-evidence.webp') }}" alt="Evidence planning for protection and appeal matters">
                    </div>
                    <p class="study-copy-body m-b-0">Evidence planning helps connect the legal issue, personal history, previous decisions, and supporting material into one organised file.</p>
                </div>
            </div>
            <div class="protection-evidence-grid" data-aos="fade-up" data-aos-delay="160">
                @foreach ($evidenceAreas as $index => $area)
                    <div class="protection-evidence-card">
                        <span class="protection-evidence-no">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                        <h3>{{ $area['title'] }}</h3>
                        <p>{{ $area['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="protection-section-pad protection-band-dark" id="how-visawizer-helps-complex-matters">
        <div class="container">
            <div class="study-section-head-center text-center protection-separated protection-separated-dark protection-separated-center" data-aos="fade-up">
                <div class="text-uppercase mb-3"><span class="bg-p">Structured support</span></div>
                <div class="common-title m-b-15"><h2>We help you understand the situation before taking the next step</h2></div>
                <p class="study-copy-sub m-b-0">Complex matters should begin with a careful review, not rushed decisions.</p>
            </div>
            <div class="protection-process-ladder" data-aos="fade-up" data-aos-delay="140">
                @foreach ($process as $index => $step)
                    <div class="protection-step-card">
                        <div class="protection-step-no">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</div>
                        <div>
                            <h3>{{ $step['title'] }}</h3>
                            <p>{{ $step['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="protection-section-pad protection-band-soft protection-urgent-section">
        <div class="container">
            <div class="protection-urgent-shell">
                <div class="protection-urgent-note protection-separated" data-aos="fade-up">
                    <div class="text-uppercase mb-3"><span class="bg-p">Timing can be critical</span></div>
                    <div class="common-title text-start m-b-15"><h2>Do not delay if you have received a refusal, cancellation, or deadline notice</h2></div>
                    <p class="study-copy-sub">Review rights and deadlines may be limited, and missing a deadline can seriously affect your options.</p>
                    <p class="study-copy-body m-b-0">If you have received a refusal or cancellation decision, check the notification letter immediately. Home Affairs explains that refusal notification letters include information about whether you have the right to seek review at the Administrative Review Tribunal and instructions about appeal options.</p>
                </div>
                <div class="protection-urgent-aside" data-aos="fade-up" data-aos-delay="140">
                    <div class="protection-urgent-image">
                        <img src="{{ asset('assets/imgs/protection/pa-urgent.webp') }}" alt="Urgent visa review and protection guidance">
                    </div>
                    <ul class="protection-urgent-list">
                        @foreach ($urgentIndicators as $indicator)
                            <li><i class="fa-regular fa-triangle-exclamation"></i>{{ $indicator }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="protection-section-pad protection-band-light">
        <div class="container">
            <div class="study-section-head-center text-center protection-separated protection-separated-center" data-aos="fade-up">
                <div class="text-uppercase mb-3"><span class="bg-p">Calm, careful, confidential</span></div>
                <div class="common-title m-b-15"><h2>Guidance designed for sensitive immigration cases</h2></div>
                <p class="study-copy-sub m-b-0">We combine structured document handling with a human approach to complex migration situations.</p>
            </div>
            <div class="protection-trust-grid" data-aos="fade-up" data-aos-delay="140">
                @foreach ($trustCards as $card)
                    <div class="protection-trust-card">
                        <div class="protection-trust-icon"><i class="{{ $card['icon'] }}"></i></div>
                        <h3>{{ $card['title'] }}</h3>
                        <p>{{ $card['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.commonCta', [
        'ctaBg' => asset('assets/imgs/protection/pa-cta-bg.webp'),
        'ctaEyebrow' => 'Get guidance before you decide',
        'ctaHeading' => 'Need help with an appeal, protection, or complex immigration matter?',
        'ctaLead' => 'Speak with Visawizer in confidence and understand your next step with clarity.',
        'ctaPrimaryLabel' => 'Get Confidential Advice',
        'ctaPrimaryUrl' => url('contact-us'),
        'ctaSecondaryLabel' => 'Book Appointment',
        'ctaSecondaryUrl' => url('book-appointment'),
    ])

    @include('partials.faq')
    @include('partials.blogs')
</div>
@endsection
