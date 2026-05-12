@extends('layouts.frontend')
@section('content')
<style type="text/css">
    .study-s8-banner .become-volunteer-card,
    .study-s8-banner .donate-us-card {
        background: #0000006e;
        backdrop-filter: blur(0);
    }
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
    .study-s6-donate .donate-left p {
        color: rgba(255, 255, 255, 0.95);
        font-size: 1.06rem;
        font-weight: 500;
        line-height: 1.55;
    }
    .study-s6-donate .rightArea .study-copy-body {
        color: rgba(255, 255, 255, 0.88);
        font-size: 0.94rem;
    }
    .study-s8-banner .become-volunteer-card .study-s8-lead {
        color: rgba(255, 255, 255, 0.92);
        font-size: 0.97rem;
        line-height: 1.7;
        max-width: 560px;
        margin-left: auto;
        margin-right: auto;
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
    .study-s1-hero {
        min-height: calc(100vh - 86px);
        min-height: calc(100svh - 86px);
        padding-top: 76px;
        padding-bottom: 18px;
        display: flex;
        align-items: center;
        overflow: hidden;
    }
    .study-s1-hero > .container {
        width: 100%;
    }
    .study-s1-hero .hero-content-5 {
        max-width: 1120px;
    }
    .study-s1-hero .hero-content-5 .title {
        margin-bottom: 8px;
    }
    .study-s1-hero .hero-content-5 .title h1 {
        max-width: 1080px;
        font-size: clamp(2.9rem, 6vw, 5.1rem);
        line-height: 0.94;
    }
    .study-s1-hero .hero-content-5 .text {
        max-width: 820px;
        margin-bottom: 14px;
    }
    .study-s1-hero .study-copy-sub {
        max-width: 760px;
        font-size: 1rem;
        line-height: 1.58;
        margin-left: auto;
        margin-right: auto;
    }
    .study-s1-hero .study-copy-body {
        max-width: 800px;
        font-size: 0.91rem;
        line-height: 1.62;
        margin-left: auto;
        margin-right: auto;
    }
    .study-hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        align-items: center;
        margin-top: 2px;
    }
    @media (max-width: 991px) {
        .study-s1-hero {
            min-height: calc(100svh - 78px);
            padding-top: 70px;
            padding-bottom: 16px;
        }
        .study-s1-hero .hero-content-5 {
            max-width: 94%;
        }
        .study-s1-hero .hero-content-5 .title h1 {
            font-size: clamp(2.6rem, 7vw, 4.2rem);
            line-height: 0.98;
        }
        .study-s1-hero .hero-content-5 .text,
        .study-s1-hero .study-copy-sub,
        .study-s1-hero .study-copy-body {
            max-width: 100%;
        }
    }
    @media (max-width: 767px) {
        .study-s1-hero {
            min-height: auto;
            padding-top: 88px;
            padding-bottom: 34px;
        }
        .study-s1-hero .hero-content-5 .title h1 {
            font-size: clamp(2.2rem, 9vw, 3.35rem);
            line-height: 1.02;
        }
        .study-s1-hero .hero-content-5 .text {
            margin-bottom: 12px;
        }
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

    /* Section 2: visual pathway cards (matches screenshot style) */
    .study-s2-services .study-section-head-center {
        max-width: 760px;
        margin: 0 auto 3rem;
        text-align: center;
    }
    .study-s2-services .study-section-head-center .study-copy-sub {
        margin-left: auto;
        margin-right: auto;
    }
    .study-s2-visual-grid {
        margin-top: 2.75rem;
    }
    .study-s2-services {
        padding-bottom: 40px !important;
    }
    .study-path-visual-card {
        min-height: 340px;
        border-radius: 18px;
        overflow: hidden;
        background-size: cover;
        background-position: center;
        position: relative;
        display: flex;
        align-items: flex-end;
        box-shadow: 0 24px 55px rgba(15, 23, 42, 0.14);
    }
    .study-path-visual-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(4, 19, 15, 0.18) 0%, rgba(4, 19, 15, 0.76) 100%);
    }
    .study-path-visual-card .study-path-visual-inner {
        position: relative;
        z-index: 1;
        width: calc(100% - 34px);
        margin: 0 17px 17px;
        padding: 26px 24px 24px;
        border-radius: 12px;
        background: rgba(11, 17, 28, 0.46);
        border: 1px solid rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(2px);
        text-align: center;
    }
    .study-path-visual-card .study-path-icon {
        width: 58px;
        height: 58px;
        margin: 0 auto 16px;
        border-radius: 50%;
        background: rgba(40, 174, 119, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.24);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
    }
    .study-path-visual-card h3 {
        color: #fff;
        font-size: clamp(1.5rem, 2.2vw, 2rem);
        line-height: 1.15;
        margin-bottom: 14px;
        font-weight: 700;
    }
    .study-path-visual-card p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.96rem;
        line-height: 1.6;
        margin: 0;
    }

    /* Section 3: why-us-section-4 + checklist (reference: collaborations / mission-vision) */
    .study-s3-mission .why-us-content-2 .common-subtitle span {
        font-size: 0.78rem;
        letter-spacing: 0.12em;
        color: #64748b;
    }
    .study-s3-mission .why-us-content-2 .common-title h2 {
        font-size: clamp(1.55rem, 2.4vw, 2rem);
    }
    .study-s3-mission .why-us-content-2 .text .study-copy-sub {
        color: #334155;
    }
    .study-s3-mission .why-us-content-2 .text .study-copy-body {
        color: #4b5563;
    }
    .study-s3-mission {
        padding-top: 40px !important;
    }
    @media (max-width: 767px) {
        .study-s2-services {
            padding-bottom: 24px !important;
        }
        .study-s3-mission {
            padding-top: 24px !important;
        }
    }

    /* Section 4: dark band + 3/2 step cards (matches screenshot style) */
    .study-s4-process {
        background:
            radial-gradient(circle at 18% 18%, rgba(40, 174, 119, 0.14), transparent 22%),
            radial-gradient(circle at 84% 26%, rgba(231, 178, 59, 0.08), transparent 20%),
            linear-gradient(180deg, #0c1424 0%, #172235 55%, #1d2a40 100%);
        color: #e2e8f0;
        padding: 96px 0 100px;
        position: relative;
        overflow: hidden;
    }
    .study-s4-process::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.18), transparent);
    }
    .study-s4-process .container {
        position: relative;
        z-index: 1;
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
    .study-s4-process .study-s4-intro {
        color: #cbd5e1 !important;
        max-width: 660px !important;
    }
    .study-s4-cards-row {
        margin-top: 2.5rem;
        position: relative;
    }
    .study-journey-card {
        min-height: 238px;
        border-radius: 18px;
        background: linear-gradient(180deg, #fffdf7 0%, #f7f2e7 100%);
        padding: 28px 28px 26px;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.5);
        box-shadow: 0 22px 55px rgba(3, 8, 18, 0.24);
        transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
    }
    .study-journey-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, #1b7b61, #3dc59d);
    }
    .study-journey-card::after {
        content: "";
        position: absolute;
        width: 130px;
        height: 130px;
        right: -28px;
        bottom: -34px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(27, 123, 97, 0.08), transparent 68%);
        pointer-events: none;
    }
    .study-journey-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 28px 70px rgba(3, 8, 18, 0.3);
        border-color: rgba(61, 197, 157, 0.3);
    }
    .study-journey-card .journey-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        border: 1px solid rgba(27, 123, 97, 0.18);
        color: #1b7b61;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.98), rgba(227, 245, 239, 0.95));
        box-shadow: 0 10px 25px rgba(27, 123, 97, 0.12);
        margin-bottom: 20px;
    }
    .study-journey-card .journey-no {
        position: absolute;
        right: 24px;
        top: 18px;
        font-size: 4.5rem;
        line-height: 1;
        font-weight: 700;
        color: rgba(43, 78, 69, 0.1);
        letter-spacing: -0.04em;
    }
    .study-journey-card h4 {
        color: #176a57;
        font-size: 1.24rem;
        line-height: 1.25;
        margin-bottom: 12px;
        font-weight: 700;
        max-width: 220px;
    }
    .study-journey-card p {
        color: #6d7b84;
        font-size: 0.9rem;
        line-height: 1.58;
        margin: 0;
        max-width: 240px;
    }
    .study-s4-bottom-row {
        margin-top: 22px;
        justify-content: center;
    }
    .study-s4-cards-row > div:nth-child(2) .study-journey-card {
        transform: translateY(-10px);
    }
    .study-s4-cards-row > div:nth-child(2) .study-journey-card:hover {
        transform: translateY(-16px);
    }
    .study-s4-cards-row > div:nth-child(2) .study-journey-card::before,
    .study-s4-bottom-row > div:nth-child(2) .study-journey-card::before {
        background: linear-gradient(90deg, #e7b23b, #f0cf7a);
    }
    .study-s4-cards-row > div:nth-child(2) .study-journey-card .journey-icon,
    .study-s4-bottom-row > div:nth-child(2) .study-journey-card .journey-icon {
        color: #a86c0e;
        border-color: rgba(231, 178, 59, 0.22);
        background: linear-gradient(180deg, #fffdf7, #fff3d7);
        box-shadow: 0 10px 25px rgba(231, 178, 59, 0.18);
    }
    @media (max-width: 1199px) {
        .study-s4-cards-row > div:nth-child(2) .study-journey-card,
        .study-s4-cards-row > div:nth-child(2) .study-journey-card:hover {
            transform: none;
        }
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

    /* Section 6: make-donate-section (reference: collaborations / training-workshops) */
    .study-s6-donate {
        padding: 0 0 90px;
    }
    .study-s6-donate .rightArea img {
        border-radius: 10px;
        border-right: 3px solid var(--theme-color-2, #e7b23b);
    }
    .study-s6-donate .donate-left h4 {
        font-size: clamp(1.35rem, 2vw, 1.65rem);
        line-height: 1.3;
    }

    .study-s7-split {
        padding: 0 0 100px;
    }
    .study-s7-split .study-grad-thumb img {
        border-radius: 16px;
        width: 100%;
        height: auto;
        box-shadow: 0 24px 55px rgba(15, 23, 42, 0.14);
        object-fit: cover;
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

    /* Section 8: donate-to-us banner card (reference: collaborations CTA / recommended-books) */
    .study-s8-banner {
        padding: 70px 0 110px;
    }
    .study-s8-banner .donate-to-us-layout {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .study-s8-banner .become-volunteer-card {
        text-align: center;
        max-width: 720px;
        margin-left: auto;
        margin-right: auto;
    }
    @media (max-width: 767px) {
        .study-s8-banner {
            padding: 50px 0 90px;
        }
    }
    .study-s8-banner .become-volunteer-card .card-icon {
        margin-bottom: 1rem;
    }
    .study-s8-banner .become-volunteer-card h2 {
        font-size: clamp(1.45rem, 2.8vw, 2rem);
        line-height: 1.25;
    }
    .study-s8-banner .study-final-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        justify-content: center;
        margin-top: 1.5rem;
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
    .study-s8-banner .study-btn-ghost-dark.is-on-dark {
        border-color: rgba(255, 255, 255, 0.85);
        color: #fff;
    }
    .study-s8-banner .study-btn-ghost-dark.is-on-dark:hover {
        background: #fff;
        color: #1a1a1a;
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

{{-- Section 2: Pathway grid — services-section-3 / service-card-3 (reference: services, cmpd) --}}
<section class="services-section-3 study-s2-services p-t-100 p-b-100 p-t-xs-80 p-b-xs-80">
    <div class="container">
        <div class="study-section-head-center text-center" data-aos="fade-up">
            <div class="common-subtitle text-uppercase justify-content-center"><span>Choose your starting point</span></div>
            <div class="common-title m-b-15"><h2>Find the right study support for your situation</h2></div>
            <p class="study-copy-sub m-b-0" style="max-width:640px;">Whether you are planning your first admission or looking for a post-study pathway, we help you identify the next right step.</p>
        </div>
        <div class="row row-gap-4 study-s2-visual-grid" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/cmpd.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-graduation-cap"></i></div>
                        <h3>Education Counselling</h3>
                        <p>Understand study options, institutions, course suitability, and long-term career alignment.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/services/banner-3.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-building-columns"></i></div>
                        <h3>Admissions Support</h3>
                        <p>Guided support for applying to colleges, universities, and programs that match your profile.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/services/image-21.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-passport"></i></div>
                        <h3>Student Visa Guidance</h3>
                        <p>Prepare for Student Visa 500, Student Guardian 590, and Training Visa 407 pathways with structured support.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/services/image-52.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-heart-pulse"></i></div>
                        <h3>OSHC Assistance</h3>
                        <p>Help arranging Overseas Student Health Cover aligned with your study and visa needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/services/image-43.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-arrows-rotate"></i></div>
                        <h3>Course &amp; College Change</h3>
                        <p>Guidance if you need to change your course, education provider, or academic direction.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="study-path-visual-card" style="background-image: url('{{ asset('assets/images/area/image-31.webp') }}');">
                    <div class="study-path-visual-inner">
                        <div class="study-path-icon"><i class="fa-light fa-route"></i></div>
                        <h3>Graduate Pathways</h3>
                        <p>Explore Temporary Graduate Visa 485 and post-study work options after completing your studies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 3: Split imagery + checklist — why-us-section-4 (reference: collaborations) --}}
<section class="why-us-section-4 study-s3-mission p-t-120 p-b-100 p-t-md-100 p-t-xs-80 p-b-xs-80 m-t-0 m-b-0">
    <div class="container">
        <div class="row row-gap-5 align-items-center">
            <div class="col-xl-6">
                <div class="thumb px-xl-5 left" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="thumb-1">
                        <img src="{{ asset('assets/images/services/image-21.webp') }}" alt="Study planning">
                    </div>
                    <div class="thumb-2"><img src="{{ asset('assets/images/services/image-52.webp') }}" alt="Learning environment"></div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb"><img src="{{ asset('assets/images/services/image-43.webp') }}" alt="Student support"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="common-subtitle text-uppercase"><span>More than a degree</span></div>
                    <div class="common-title text-start"><h2>An education destination with global possibilities</h2></div>
                    <div class="text">
                        <p class="study-copy-sub">Australia offers international students academic quality, multicultural exposure, and pathways that can support long-term personal and professional growth.</p>
                        <p class="study-copy-body">Studying in Australia is not just about getting admission into an institution. It is about choosing a course that fits your background, your career goals, your budget, your migration possibilities, and your future aspirations. Our role is to help you make an informed decision before you invest time, money, and effort into your international education journey.</p>
                    </div>
                    <div class="services">
                        <div class="service-left">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Globally recognised education system</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Wide range of courses and institutions</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Multicultural student environment</p>
                            </div>
                        </div>
                        <div class="service-right">
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Personal and professional development</p>
                            </div>
                            <div class="service">
                                <i class="fa-solid fa-check"></i>
                                <p>Post-study planning for eligible graduates</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape"><img alt="" src="{{ asset('assets/img/shapes/shape-40.webp') }}"></div>
</section>

{{-- Section 4: Journey steps — dark band + service-card-3 grid (reference: featured / training mix) --}}
<section class="study-s4-process" id="how-visawizer-helps">
    <div class="container">
        <div class="section-top-9 text-center">
            <div class="common-subtitle text-uppercase justify-content-center" data-aos="fade-up"><span>Guided from start to next step</span></div>
            <div class="common-title m-b-15" data-aos="fade-up" data-aos-delay="100"><h2>Complete support for your study journey</h2></div>
            <p class="study-s4-intro m-b-0 mx-auto" style="max-width:700px;" data-aos="fade-up" data-aos-delay="200">We help you move from confusion to a structured study and visa action plan.</p>
        </div>
        <div class="row row-gap-4 study-s4-cards-row justify-content-center" data-aos="fade-up" data-aos-delay="250">
            <div class="col-xl-4 col-md-6">
                <div class="study-journey-card">
                    <div class="journey-icon"><i class="fa-light fa-user-check"></i></div>
                    <div class="journey-no">01</div>
                    <h4>Profile Assessment</h4>
                    <p>We review your academic background, work history, English language readiness, budget, and long-term goals.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="study-journey-card">
                    <div class="journey-icon"><i class="fa-light fa-list-check"></i></div>
                    <div class="journey-no">02</div>
                    <h4>Course &amp; Institution Shortlisting</h4>
                    <p>We help identify suitable education options based on your eligibility and career direction.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="study-journey-card">
                    <div class="journey-icon"><i class="fa-light fa-file-signature"></i></div>
                    <div class="journey-no">03</div>
                    <h4>Admission Support</h4>
                    <p>We guide you through document preparation, application coordination, and offer letter requirements.</p>
                </div>
            </div>
        </div>
        <div class="row row-gap-4 study-s4-bottom-row" data-aos="fade-up" data-aos-delay="320">
            <div class="col-xl-4 col-md-6">
                <div class="study-journey-card">
                    <div class="journey-icon"><i class="fa-light fa-file-shield"></i></div>
                    <div class="journey-no">04</div>
                    <h4>Visa Planning</h4>
                    <p>We help you understand visa requirements, documentation needs, and application readiness.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="study-journey-card">
                    <div class="journey-icon"><i class="fa-light fa-compass"></i></div>
                    <div class="journey-no">05</div>
                    <h4>Post-Study Direction</h4>
                    <p>We help you think beyond admission by reviewing graduate and future migration possibilities.</p>
                </div>
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

{{-- Section 6: make-donate-section (reference: collaborations / training-workshops) --}}
<section class="make-donate-section study-s6-donate">
    <div class="container">
        <div class="make-donate-layout" data-aos="fade-up" data-aos-duration="1000">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <div class="donate-left" style="background-image: url('{{ asset('assets/img/shapes/shape-43.webp') }}');">
                        <div class="common-subtitle m-b-15" style="color: rgba(255,255,255,0.9);"><span>Already studying in Australia?</span></div>
                        <h4 class="text-white m-b-20">Support for course changes, college changes, and study decisions</h4>
                        <p class="m-b-0">If your current course, provider, or study direction no longer fits your goal, we can help you review your options carefully.</p>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="rightArea">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <p class="study-copy-body">Many students realise after arriving in Australia that their course, college, location, or career direction may not be the right fit. Any change should be considered carefully because it can affect academic progress, visa conditions, future eligibility, and long-term planning.</p>
                                <p class="study-copy-body m-b-20">Visawizer helps students understand their options before making a change.</p>
                                <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                                    Discuss My Study Situation
                                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                                </a>
                            </div>
                            <div class="col-md-6 m-t-xs-30">
                                <img src="{{ asset('assets/images/services/side6.webp') }}" alt="Students reviewing study options in Australia">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 7: Graduate pathways + image (reference: mission-vision / case-studies split) --}}
<section class="study-s7-split">
    <div class="container">
        <div class="row row-gap-5 align-items-center">
            <div class="col-xl-6 order-xl-2" data-aos="fade-up" data-aos-delay="150">
                <div class="study-grad-thumb">
                    <img src="{{ asset('assets/images/area/image-31.webp') }}" alt="Graduate planning next steps in Australia">
                </div>
            </div>
            <div class="col-xl-6 order-xl-1" data-aos="fade-up">
                <div class="study-grad-card m-b-0">
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
        </div>
    </div>
</section>

{{-- Section 8: donate-to-us banner CTA (reference: collaborations bottom / recommended-books) --}}
<section class="donate-to-us-section study-s8-banner" style="background-image: url('{{ asset('assets/images/services/big6.webp') }}');">
    <div class="container">
        <div class="donate-to-us-layout">
            <div class="become-volunteer-card mb-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-light fa-calendar-check"></i>
                </div>
                <div class="common-subtitle text-uppercase justify-content-center m-b-10"><span>Take the first informed step</span></div>
                <h2>Ready to plan your Australian study journey?</h2>
                <p class="study-s8-lead">Book a consultation with Visawizer and get clarity on course options, admission steps, student visa planning, and post-study possibilities.</p>
                <div class="study-final-actions">
                    <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
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
@endsection
