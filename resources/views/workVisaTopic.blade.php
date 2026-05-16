@extends('layouts.frontend')
@section('content')
@include('partials.studyPageStyles')
@php
    $heroImg = $page['images']['hero'] ?? $page['images']['hero_bg'] ?? 'assets/images/services/banner-1.webp';
    $profileImg = $page['images']['profile'] ?? 'assets/images/services/image-21.webp';
    $supportImg = $page['images']['support'] ?? 'assets/images/services/image-43.webp';
    $strategyImg = $page['images']['strategy'] ?? $supportImg;
    $wvtSectionIndex = 0;
    $introShowsSuitForMerged = !empty($page['suit']) && !empty($page['planning']);
    $introSingleImg = $introShowsSuitForMerged
        ? ($page['images']['intro_suit'] ?? $page['images']['intro'] ?? $page['images']['intro_single'] ?? $profileImg)
        : ($page['images']['intro'] ?? $page['images']['intro_single'] ?? $profileImg);
    $introPanelLabel = $introShowsSuitForMerged
        ? ($page['suit']['eyebrow'] ?? 'Fit & suitability')
        : ($page['hero']['tagline'] ?? 'Overview');
    $introPanelTitle = $introShowsSuitForMerged
        ? ($page['suit']['heading'] ?? '')
        : ($page['hero']['subheading'] ?? 'Guidance built around your situation and long-term plans');
    $introPanelBody = $introShowsSuitForMerged
        ? ($page['suit']['content'] ?? '')
        : ($page['hero']['content'] ?? '');
    $stackSectionImg = $page['images']['suit_planning'] ?? $page['images']['suit_stack'] ?? $profileImg;
    $topicCategory = strtolower($page['category'] ?? '');
    $isFamilyVisaTopic = str_contains($topicCategory, 'parent') || str_contains($topicCategory, 'partner') || str_contains($topicCategory, 'relative') || str_contains($topicCategory, 'family');
    $isVisitorVisaTopic = str_contains($topicCategory, 'visitor') || str_contains($topicCategory, 'short stay');
    $showCtaBeforeTestimonials = !empty($page['bottom']['ctaBeforeTestimonials']);
@endphp
<style type="text/css">
    .work-visa-topic-page .wvt-band-light {
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 48%, #f1f5f9 100%);
        position: relative;
    }
    .work-visa-topic-page .wvt-band-dark {
        background:
            radial-gradient(ellipse 70% 50% at 15% 20%, color-mix(in srgb, var(--theme-color-3) 14%, transparent), transparent 50%),
            linear-gradient(165deg, #0b1220 0%, #121a2a 42%, #1a2438 100%);
        color: #e2e8f0;
    }
    .work-visa-topic-page .wvt-band-dark h2,
    .work-visa-topic-page .wvt-band-dark .wvt-heading {
        color: #f8fafc;
    }
    .work-visa-topic-page .wvt-band-dark .wvt-lead {
        color: rgba(226, 232, 240, 0.92);
    }
    .work-visa-topic-page .wvt-band-dark .common-subtitle span {
        color: #94a3b8 !important;
    }
    .work-visa-topic-page .wvt-band-dark .common-title h2 {
        color: #f8fafc !important;
    }
    .work-visa-topic-page .wvt-band-light h2,
    .work-visa-topic-page .wvt-band-light .wvt-heading {
        color: #0f172a;
    }
    .work-visa-topic-page .wvt-band-light .wvt-lead {
        color: var(--body-color);
    }
    .work-visa-topic-page .wvt-band-light .common-subtitle span {
        color: #64748b !important;
    }
    .work-visa-topic-page .wvt-band-light .common-title h2 {
        color: #0f172a !important;
    }
    .work-visa-topic-page .wvt-band-dark .study-copy-sub {
        color: #cbd5e1 !important;
    }
    .work-visa-topic-page .wvt-band-dark .wvt-planning-panel {
        background: rgba(15, 23, 42, 0.55);
        border: 1px solid rgba(148, 163, 184, 0.18);
        box-shadow: 0 18px 44px rgba(0, 0, 0, 0.22);
    }
    .work-visa-topic-page .wvt-band-dark .wvt-planning-panel .wvt-lead {
        color: rgba(226, 232, 240, 0.94);
    }

    .work-visa-topic-page .work-visa-hero.wvt-hero.hero-section-5 {
        background-size: cover;
        background-position: center;
        position: relative;
        min-height: 0 !important;
        padding: 64px 0 104px !important;
        display: flex;
        align-items: flex-start;
        overflow: visible;
    }
    .work-visa-topic-page .work-visa-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: 0;
        background: linear-gradient(180deg, color-mix(in srgb, var(--theme-color-3) 22%, transparent) 0%, color-mix(in srgb, var(--title-color) 82%, var(--theme-color-3)) 100%);
    }
    .work-visa-topic-page .work-visa-hero > .container {
        position: relative;
        z-index: 1;
        width: 100%;
    }
    .work-visa-topic-page .work-visa-hero .hero-content-5 {
        position: relative;
        z-index: 1;
        max-width: min(100%, 1240px);
        width: 100%;
        margin: 0 auto;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .work-visa-topic-page .work-visa-hero .topic-tag {
        display: inline-block;
        font-size: 0.85rem;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 12px;
        padding-left: 12px;
        border-left: 3px solid var(--theme-color-3);
        text-align: left;
    }
    .work-visa-topic-page .work-visa-hero h1 {
        font-size: clamp(2rem, 4.2vw, 3.25rem);
        line-height: 1.12;
        margin-bottom: 14px;
        color: #fff;
        text-align: center;
        max-width: 100%;
        width: 100%;
    }
    .work-visa-topic-page .work-visa-hero .hero-sub {
        color: rgba(255, 255, 255, 0.94);
        font-size: 1.05rem;
        line-height: 1.65;
        max-width: 100%;
        width: 100%;
        margin: 0 auto;
        text-align: center;
    }
    .work-visa-topic-page .work-visa-hero .hero-body {
        color: rgba(255, 255, 255, 0.92);
        font-size: 1.02rem;
        line-height: 1.68;
        max-width: 100%;
        width: 100%;
        margin-top: clamp(16px, 2.5vw, 22px);
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 0;
        font-weight: 500;
        text-align: center;
    }
    .work-visa-topic-page .work-visa-hero .hero-cta {
        margin-top: clamp(22px, 3vw, 28px);
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        align-items: center;
        justify-content: center;
    }
    @media (max-width: 991px) {
        .work-visa-topic-page .work-visa-hero.wvt-hero.hero-section-5 {
            padding: 64px 0 96px !important;
        }
        .work-visa-topic-page .work-visa-hero .hero-content-5 {
            max-width: 94%;
        }
        .work-visa-topic-page .work-visa-hero h1,
        .work-visa-topic-page .work-visa-hero .hero-sub,
        .work-visa-topic-page .work-visa-hero .hero-body {
            max-width: 100%;
        }
    }
    @media (max-width: 767px) {
        .work-visa-topic-page .work-visa-hero.wvt-hero.hero-section-5 {
            padding: 80px 0 88px !important;
        }
    }
    .work-visa-topic-page .work-visa-hero .e-primary-btn,
    .work-visa-topic-page .wvt-band-light .e-primary-btn,
    .work-visa-topic-page .wvt-band-dark .e-primary-btn {
        border-radius: 12px !important;
    }
    .work-visa-topic-page .work-visa-hero .e-primary-btn:before,
    .work-visa-topic-page .wvt-band-light .e-primary-btn:before,
    .work-visa-topic-page .wvt-band-dark .e-primary-btn:before {
        border-radius: 12px !important;
    }
    .work-visa-topic-page .work-visa-hero .e-primary-btn .icon-wrap,
    .work-visa-topic-page .wvt-band-light .e-primary-btn .icon-wrap,
    .work-visa-topic-page .wvt-band-dark .e-primary-btn .icon-wrap {
        border-radius: 10px !important;
    }

    .work-visa-topic-page .wvt-intro-band {
        position: relative;
        margin-top: clamp(24px, 4vw, 48px);
        z-index: 2;
        padding: clamp(16px, 2.5vw, 28px) 0 clamp(56px, 8vw, 88px);
        overflow: hidden;
        background: linear-gradient(
            180deg,
            color-mix(in srgb, var(--theme-color-3) 6%, #f8fafc) 0%,
            color-mix(in srgb, var(--theme-color-3) 10%, #ffffff) 32%,
            #f8fafc 72%,
            #ffffff 100%
        );
    }
    .work-visa-topic-page .wvt-intro-band__tint {
        position: absolute;
        inset: 0;
        z-index: 1;
        background: linear-gradient(
            180deg,
            rgba(255, 255, 255, 0.88) 0%,
            color-mix(in srgb, var(--theme-color-3) 8%, #ffffff) 45%,
            rgba(248, 250, 252, 0.92) 100%
        );
        pointer-events: none;
    }
    .work-visa-topic-page .wvt-intro-band__bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        background-size: cover;
        background-position: center;
        opacity: 0.14;
        filter: saturate(1.1);
    }
    .work-visa-topic-page .wvt-intro-band > .container {
        position: relative;
        z-index: 2;
    }
    .work-visa-topic-page .wvt-intro-band__card {
        border-radius: 20px;
        overflow: visible;
        box-shadow:
            0 22px 56px color-mix(in srgb, var(--theme-color-3) 16%, transparent),
            0 0 0 1px color-mix(in srgb, var(--theme-color-3) 12%, transparent);
        background: #ffffff;
    }
    .work-visa-topic-page .wvt-intro-band__card--suit {
        box-shadow:
            0 28px 64px color-mix(in srgb, var(--theme-color-3) 20%, transparent),
            0 0 0 1px color-mix(in srgb, var(--theme-color-3) 14%, transparent);
        overflow: hidden;
    }
    .work-visa-topic-page .wvt-intro-band__card--suit::before {
        content: "";
        display: block;
        height: 4px;
        background: linear-gradient(90deg, var(--theme-color-3) 0%, color-mix(in srgb, var(--theme-color-3) 52%, #ffffff) 42%, var(--theme-color-3) 100%);
    }
    @media (max-width: 991px) {
        .work-visa-topic-page .wvt-intro-band__card {
            overflow: hidden;
        }
    }
    .work-visa-topic-page .wvt-intro-panel {
        position: relative;
        padding: clamp(32px, 5vw, 52px) clamp(24px, 4vw, 48px);
        height: 100%;
        min-height: 280px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: #ffffff;
        overflow: hidden;
    }
    .work-visa-topic-page .wvt-intro-panel::after {
        content: "";
        position: absolute;
        right: -8%;
        bottom: -12%;
        width: min(240px, 55%);
        height: min(280px, 50%);
        background: radial-gradient(ellipse at 40% 60%, color-mix(in srgb, var(--theme-color-3) 10%, transparent) 0%, transparent 68%);
        pointer-events: none;
        z-index: 0;
    }
    .work-visa-topic-page .wvt-intro-panel > * {
        position: relative;
        z-index: 1;
    }
    @media (min-width: 992px) {
        .work-visa-topic-page .wvt-intro-text-col {
            border-left: 1px solid #e8eef0;
        }
        .work-visa-topic-page .wvt-intro-band__row--suit .wvt-intro-text-col {
            border-left: none;
        }
    }
    .work-visa-topic-page .wvt-intro-panel__label {
        font-size: 0.78rem;
        font-weight: 600;
        letter-spacing: 0.06em;
        text-transform: none;
        color: #94a3b8;
        margin-bottom: 12px;
    }
    .work-visa-topic-page .wvt-intro-panel__title {
        font-size: clamp(1.55rem, 2.9vw, 2.25rem);
        font-weight: 700;
        line-height: 1.18;
        color: #0f172a;
        margin: 0 0 18px;
    }
    .work-visa-topic-page .wvt-intro-panel__body {
        margin: 0;
        font-size: 1.02rem;
        line-height: 1.75;
        color: #64748b;
        font-weight: 400;
    }
    .work-visa-topic-page .wvt-intro-panel .e-primary-btn {
        margin-top: 22px;
        align-self: flex-start;
    }

    
    .work-visa-topic-page .wvt-intro-band__row--suit .wvt-intro-collage-wrap {
        background: linear-gradient(
            165deg,
            color-mix(in srgb, var(--theme-color-3) 9%, #ffffff) 0%,
            #ffffff 45%,
            #f8fafc 100%
        );
    }
    .work-visa-topic-page .wvt-intro-band__row--suit .wvt-intro-visual {
        border: 3px solid rgba(255, 255, 255, 0.98);
        box-shadow:
            0 0 0 1px color-mix(in srgb, var(--theme-color-3) 18%, transparent),
            0 20px 50px color-mix(in srgb, var(--theme-color-3) 18%, transparent),
            0 8px 24px rgba(15, 23, 42, 0.06);
    }
    .work-visa-topic-page .wvt-intro-panel--suit {
        border-left: 3px solid var(--theme-color-3);
        padding-left: clamp(26px, 3.5vw, 36px);
    }
    @media (max-width: 991px) {
        .work-visa-topic-page .wvt-intro-panel--suit {
            border-left: none;
            border-top: 3px solid var(--theme-color-3);
            padding-left: clamp(24px, 4vw, 48px);
            padding-top: clamp(28px, 4vw, 40px);
        }
    }
    .work-visa-topic-page .wvt-intro-panel--suit .wvt-intro-panel__label {
        display: inline-block;
        padding: 7px 16px;
        border-radius: 999px;
        background: linear-gradient(
            180deg,
            color-mix(in srgb, var(--theme-color-3) 14%, #ffffff) 0%,
            color-mix(in srgb, var(--theme-color-3) 8%, #ffffff) 100%
        );
        border: 1px solid color-mix(in srgb, var(--theme-color-3) 28%, transparent);
        color: color-mix(in srgb, var(--theme-color-3) 55%, var(--title-color)) !important;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        font-size: 0.68rem;
        margin-bottom: 16px;
    }
    .work-visa-topic-page .wvt-intro-panel--suit .wvt-intro-panel__title {
        font-size: clamp(1.65rem, 3.1vw, 2.35rem);
        letter-spacing: -0.02em;
        color: var(--title-color);
    }
    .work-visa-topic-page .wvt-intro-panel--suit .wvt-intro-panel__body {
        padding: clamp(16px, 2.5vw, 22px);
        border-radius: 14px;
        background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
        border: 1px solid rgba(148, 163, 184, 0.22);
        color: var(--body-color);
        margin-top: 4px;
    }
    .work-visa-topic-page .wvt-intro-fit-block__head {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-top: clamp(22px, 3.2vw, 30px);
    }
    .work-visa-topic-page .wvt-intro-fit-block__ico {
        flex-shrink: 0;
        width: 46px;
        height: 46px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        color: var(--theme-color-3);
        background: linear-gradient(
            145deg,
            color-mix(in srgb, var(--theme-color-3) 16%, #ffffff) 0%,
            color-mix(in srgb, var(--theme-color-3) 10%, #ffffff) 100%
        );
        border: 1px solid color-mix(in srgb, var(--theme-color-3) 22%, transparent);
        box-shadow: 0 6px 18px color-mix(in srgb, var(--theme-color-3) 12%, transparent);
    }
    .work-visa-topic-page .wvt-intro-fit-block__title {
        margin: 0;
        font-size: 0.74rem;
        font-weight: 800;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--body-color);
    }
    .work-visa-topic-page .wvt-intro-fit-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(188px, 1fr));
        gap: 10px;
        margin-top: 14px;
    }
    @media (min-width: 1200px) {
        .work-visa-topic-page .wvt-intro-fit-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    .work-visa-topic-page .wvt-intro-fit-chip {
        display: flex;
        align-items: flex-start;
        gap: 11px;
        padding: 12px 14px;
        border-radius: 12px;
        background: #fff;
        border: 1px solid rgba(148, 163, 184, 0.22);
        box-shadow: 0 4px 16px rgba(15, 23, 42, 0.04);
        transition: border-color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease;
    }
    .work-visa-topic-page .wvt-intro-fit-chip:hover {
        transform: translateY(-2px);
        border-color: color-mix(in srgb, var(--theme-color-3) 35%, rgba(148, 163, 184, 0.35));
        box-shadow: 0 10px 28px color-mix(in srgb, var(--theme-color-3) 14%, transparent);
    }
    .work-visa-topic-page .wvt-intro-fit-chip > i {
        flex-shrink: 0;
        width: 28px;
        height: 28px;
        margin-top: 1px;
        border-radius: 9px;
        font-size: 0.72rem;
        color: #fff;
        background: linear-gradient(150deg, var(--theme-color-3) 15%, color-mix(in srgb, var(--theme-color-3) 52%, #ffffff) 48.85%, var(--theme-color-3) 100%);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 12px color-mix(in srgb, var(--theme-color-3) 30%, transparent);
    }
    .work-visa-topic-page .wvt-intro-fit-chip span {
        font-size: 0.92rem;
        font-weight: 500;
        line-height: 1.45;
        color: var(--title-color);
    }

    .work-visa-topic-page .wvt-intro-collage-wrap {
        background: #ffffff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: stretch;
        position: relative;
        
        padding: clamp(32px, 5vw, 52px) clamp(24px, 4vw, 48px);
    }
    .work-visa-topic-page .wvt-intro-visual {
        width: 100%;
        max-width: 100%;
        margin: 0;
        aspect-ratio: 1 / 1;
        border-radius: clamp(14px, 1.8vw, 20px);
        overflow: hidden;
        border: 3px solid #fff;
        box-shadow: 0 18px 44px rgba(15, 23, 42, 0.1), 0 2px 10px rgba(15, 23, 42, 0.05);
        background: #e2e8f0;
        flex-shrink: 0;
    }
    .work-visa-topic-page .wvt-intro-visual img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
    }

    .work-visa-topic-page .wvt-topic-section {
        padding: clamp(64px, 9vw, 96px) 0;
    }

    
    .work-visa-topic-page .wvt-suit-planning-stack {
        position: relative;
        overflow: hidden;
    }
    .work-visa-topic-page .wvt-stack-hero {
        position: relative;
        padding: clamp(52px, 8vw, 80px) 0 clamp(88px, 12vw, 120px);
        color: #e2e8f0;
    }
    .work-visa-topic-page .wvt-stack-hero__bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        background-size: cover;
        background-position: center;
        opacity: 0.35;
        pointer-events: none;
    }
    .work-visa-topic-page .wvt-stack-hero__tint {
        position: absolute;
        inset: 0;
        z-index: 1;
        background: linear-gradient(165deg, rgba(11, 18, 32, 0.92) 0%, rgba(18, 26, 42, 0.94) 45%, rgba(15, 42, 34, 0.88) 100%);
        pointer-events: none;
    }
    .work-visa-topic-page .wvt-stack-hero .container {
        position: relative;
        z-index: 2;
    }
    .work-visa-topic-page .wvt-stack-hero .wvt-stack-hero__title {
        font-size: clamp(1.65rem, 3.2vw, 2.35rem);
        line-height: 1.18;
        font-weight: 800;
        color: #f8fafc;
        margin-bottom: clamp(14px, 2vw, 20px);
    }
    .work-visa-topic-page .wvt-stack-hero .wvt-stack-hero__lead {
        font-size: 1.06rem;
        line-height: 1.72;
        font-weight: 500;
        color: rgba(226, 232, 240, 0.94);
        margin-bottom: 0;
        max-width: 640px;
    }
    .work-visa-topic-page .wvt-stack-hero .wvt-stack-hero__cta .e-primary-btn {
        white-space: nowrap;
    }
    .work-visa-topic-page .wvt-stack-hero .wvt-point-grid {
        margin-top: clamp(28px, 4vw, 40px);
    }
    .work-visa-topic-page .wvt-stack-wave {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: clamp(36px, 5vw, 52px);
        z-index: 1;
        pointer-events: none;
        background-repeat: no-repeat;
        background-position: center bottom;
        background-size: 100% 100%;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 48' preserveAspectRatio='none'%3E%3Cpath fill='%23ffffff' d='M0 32C180 8 360 48 540 22c120-18 240-18 360 0 180 26 360-14 540 10v16H0z'/%3E%3C/svg%3E");
        opacity: 0.95;
    }
    .work-visa-topic-page .wvt-stack-overlap {
        position: relative;
        z-index: 2;
        margin-top: -1px;
        padding: 0 0 clamp(56px, 8vw, 88px);
        background: linear-gradient(
            180deg,
            color-mix(in srgb, var(--theme-color-3) 4%, #ffffff) 0%,
            #ffffff 38%,
            #f8fafc 100%
        );
    }

    
    .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-stack-overlap {
        padding-top: clamp(36px, 6vw, 56px);
        background: linear-gradient(185deg, #d8e0ea 0%, #c5d0e0 38%, #e4eaf2 72%, #f1f5f9 100%);
    }
    .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-stack-card {
        position: relative;
        overflow: hidden;
        margin-top: 0;
        border-radius: 20px;
        padding: clamp(32px, 5vw, 52px);
        border: 1px solid rgba(148, 163, 184, 0.28);
        box-shadow:
            0 40px 100px rgba(15, 23, 42, 0.22),
            inset 0 1px 0 rgba(255, 255, 255, 0.06);
        background:
            radial-gradient(ellipse 85% 70% at 100% 12%, color-mix(in srgb, var(--theme-color-3) 22%, transparent) 0%, transparent 58%),
            linear-gradient(158deg, #0f1419 0%, #161d2a 44%, color-mix(in srgb, var(--theme-color-3) 16%, #141b28) 100%);
    }
    .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-stack-card::before {
        content: "";
        position: absolute;
        left: 8%;
        right: 8%;
        bottom: 0;
        height: 2px;
        border-radius: 2px;
        background: linear-gradient(
            90deg,
            transparent 0%,
            var(--theme-color-3) 22%,
            color-mix(in srgb, var(--theme-color-3) 55%, #ffffff) 50%,
            var(--theme-color-3) 78%,
            transparent 100%
        );
        pointer-events: none;
        opacity: 0.75;
    }
    .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-stack-card > .row {
        position: relative;
        z-index: 1;
    }
    .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-visual-shell {
        position: relative;
        display: block;
        width: 100%;
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
        padding: clamp(10px, 1.5vw, 14px);
        border-radius: clamp(16px, 2vw, 22px);
        background: rgba(255, 255, 255, 0.07);
        border: 1px solid rgba(255, 255, 255, 0.16);
        box-shadow:
            0 24px 56px rgba(0, 0, 0, 0.35),
            inset 0 0 0 1px rgba(255, 255, 255, 0.04);
    }
    @media (min-width: 768px) {
        .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-visual-shell {
            margin-right: 0;
            margin-left: auto;
        }
    }
    .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-visual-shell::after {
        content: "";
        position: absolute;
        inset: clamp(8px, 1.2vw, 12px);
        border-radius: clamp(12px, 1.6vw, 18px);
        border: 2px solid color-mix(in srgb, var(--theme-color-3) 42%, rgba(255, 255, 255, 0.2));
        pointer-events: none;
        z-index: 1;
    }
    .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-visual-shell .wvt-stack-overlap-visual {
        position: relative;
        z-index: 2;
        margin: 0;
        border-radius: clamp(12px, 1.6vw, 18px);
        border: none;
        box-shadow: 0 12px 36px rgba(0, 0, 0, 0.35);
    }
    .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-copy {
        padding: 0;
        border: none;
    }
    @media (max-width: 991px) {
        .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-copy {
            margin-top: clamp(8px, 2vw, 16px);
            padding-top: 0;
            border-top: none;
        }
    }
    @media (min-width: 992px) {
        .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-copy {
            padding: clamp(4px, 1vw, 10px) clamp(12px, 2.5vw, 28px) 0 0;
        }
    }
    .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-copy__eyebrow {
        display: inline-block;
        margin-bottom: 12px;
        padding: 6px 14px;
        border-radius: 999px;
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        border-width: 1px;
        border-style: solid;
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.18);
        color: color-mix(in srgb, var(--theme-color-3) 72%, #f8fafc);
    }
    .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-copy__title {
        font-size: clamp(1.5rem, 2.8vw, 2.2rem);
        line-height: 1.2;
        font-weight: 800;
        letter-spacing: -0.02em;
        margin: 0 0 clamp(16px, 2.5vw, 22px);
        text-align: left;
        color: #f8fafc;
    }
    .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-copy__panel {
        background: transparent;
        border: none;
        box-shadow: none;
        border-radius: 0;
        padding: 0 0 0 clamp(14px, 2vw, 20px);
        border-left: 2px solid color-mix(in srgb, var(--theme-color-3) 85%, rgba(255, 255, 255, 0.35));
    }
    .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-copy__panel::before {
        display: none;
    }
    .work-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-copy__panel .wvt-lead {
        padding-left: 0;
        color: rgba(226, 232, 240, 0.9);
        font-weight: 400;
        line-height: 1.75;
    }
    .work-visa-topic-page .wvt-stack-overlap-visual {
        margin: 0 auto;
        border-radius: 14px;
        overflow: hidden;
        aspect-ratio: 1 / 1;
        width: 100%;
        max-width: min(100%, 300px);
        box-shadow: none;
        border: none;
        background: #1e293b;
    }
    @media (min-width: 768px) {
        .work-visa-topic-page .wvt-stack-overlap-visual {
            margin-top: 0;
            margin-left: 0;
            margin-right: 0;
            margin-bottom: 0;
            max-width: 100%;
        }
    }
    .work-visa-topic-page .wvt-stack-overlap-visual img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .work-visa-topic-page .wvt-lead {
        font-size: 1.06rem;
        line-height: 1.72;
        font-weight: 500;
        margin-bottom: 0;
    }

    
    .work-visa-topic-page .wvt-point-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: clamp(14px, 2vw, 20px);
        margin-top: clamp(28px, 4vw, 40px);
    }
    .work-visa-topic-page .wvt-point-card {
        position: relative;
        padding: 18px 18px 18px 16px;
        border-radius: 4px 14px 14px 4px;
        background: rgba(15, 23, 42, 0.55);
        border: 1px solid rgba(148, 163, 184, 0.14);
        border-left: 4px solid var(--theme-color-3);
        box-shadow: 0 14px 36px rgba(0, 0, 0, 0.2);
    }
    .work-visa-topic-page .wvt-point-card p {
        margin: 0;
        color: rgba(226, 232, 240, 0.95);
        font-size: 0.96rem;
        line-height: 1.58;
    }
    .work-visa-topic-page .wvt-point-card .wvt-point-ico {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        background: color-mix(in srgb, var(--theme-color-3) 22%, transparent);
        color: #e2e8f0;
        font-size: 0.85rem;
    }

    
    .work-visa-topic-page .wvt-planning-rail {
        position: relative;
        padding-left: 22px;
        border-left: 3px solid var(--theme-color-3);
    }
    .work-visa-topic-page .wvt-planning-panel {
        margin-top: clamp(22px, 3vw, 32px);
        padding: clamp(22px, 3vw, 30px);
        border-radius: 14px;
        background: linear-gradient(180deg, #ffffff 0%, #f8fcfa 100%);
        border: 1px solid color-mix(in srgb, var(--theme-color-3) 12%, transparent);
        box-shadow: 0 20px 50px rgba(15, 23, 42, 0.06);
    }

    
    .work-visa-topic-page .wvt-section-strategy.wvt-band-dark {
        background: linear-gradient(165deg, #030711 0%, #0a1628 52%, #050d18 100%);
    }

    

    .work-visa-topic-page .wvt-pair-col--strategy {
        display: grid;
        grid-template-columns: minmax(220px, 0.8fr) minmax(0, 1.35fr);
        gap: clamp(26px, 4vw, 42px);
        align-items: stretch;
        background:
            radial-gradient(circle at top right,
            rgba(255, 255, 255, 0.06),
            transparent 35%),
            linear-gradient(145deg, #071428 0%, #0d1b34 100%);
        border: none !important;
        border-radius: 28px !important;
        padding: 42px !important;
        overflow: hidden;
        position: relative;
    }

    .work-visa-topic-page .wvt-pair-col--strategy .wvt-strategy-figure {
        position: relative;
        z-index: 1;
        min-height: 100%;
        border-radius: 22px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 22px 48px rgba(0, 0, 0, 0.26);
    }

    .work-visa-topic-page .wvt-pair-col--strategy .wvt-strategy-figure img {
        display: block;
        width: 100%;
        height: 100%;
        min-height: 280px;
        object-fit: cover;
    }

    .work-visa-topic-page .wvt-pair-col--strategy::before {
        content: "";
        position: absolute;
        width: 260px;
        height: 260px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 50%;
        top: -120px;
        right: -100px;
    }

    .work-visa-topic-page .wvt-pair-col--strategy .wvt-approach-copy,
    .work-visa-topic-page .wvt-pair-col--strategy .wvt-strategy-grid {
        position: relative;
        z-index: 1;
    }

    .work-visa-topic-page .wvt-pair-col--strategy .common-subtitle span {
        color: #d59adf !important;
        letter-spacing: 0.16em;
        font-size: 0.72rem;
    }

    .work-visa-topic-page .wvt-pair-col--strategy .wvt-approach-copy__title {
        color: #fff !important;
        font-size: clamp(1.6rem, 2.5vw, 2.2rem);
        line-height: 1.18;
        margin-bottom: 18px;
    }

    .work-visa-topic-page .wvt-pair-col--strategy .wvt-approach-copy__lead {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-left: 4px solid #b10073;
        color: rgba(255, 255, 255, 0.92);
        border-radius: 18px;
        padding: 24px;
        font-size: 1rem;
        line-height: 1.7;
    }

    

    .work-visa-topic-page .wvt-pair-col--strategy .wvt-strategy-grid {
        margin-top: 28px;
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    .work-visa-topic-page .wvt-pair-col--strategy .wvt-strategy-card {
        position: relative;
        background: transparent !important;
        border: none !important;
        padding-left: 68px;
        min-height: 56px;
        box-shadow: none !important;
    }

    .work-visa-topic-page .wvt-pair-col--strategy .wvt-strategy-card::before {
        content: "";
        position: absolute;
        left: 18px;
        top: 48px;
        width: 2px;
        height: calc(100% + 18px);
        background: rgba(255, 255, 255, 0.12);
    }

    .work-visa-topic-page .wvt-pair-col--strategy .wvt-strategy-card:last-child::before {
        display: none;
    }

    .work-visa-topic-page .wvt-pair-col--strategy .wvt-strategy-card__num {
        position: absolute;
        left: 0;
        top: 0;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(145deg, #d3007a, #7a0046);
        color: #fff !important;
        font-size: 0.8rem;
        font-weight: 700;
        box-shadow: 0 10px 24px rgba(211, 0, 122, 0.35);
    }

    .work-visa-topic-page .wvt-pair-col--strategy .wvt-strategy-card p {
        color: rgba(255, 255, 255, 0.92) !important;
        font-size: 0.98rem;
        line-height: 1.6;
        padding-top: 6px;
        margin: 0;
    }

    @media (max-width: 991px) {
        .work-visa-topic-page .wvt-pair-col--strategy {
            grid-template-columns: 1fr;
            padding: 28px !important;
        }

        .work-visa-topic-page .wvt-pair-col--strategy .wvt-strategy-figure img {
            min-height: 240px;
            max-height: 360px;
        }
    }

    
    .work-visa-topic-page .wvt-section-challenges.wvt-band-light {
        background:
            radial-gradient(ellipse 80% 50% at 100% 0%, color-mix(in srgb, var(--theme-color-3) 7%, transparent), transparent 55%),
            radial-gradient(ellipse 60% 45% at 0% 100%, color-mix(in srgb, var(--theme-color-3) 5%, transparent), transparent 50%),
            linear-gradient(180deg, #f8fafc 0%, #ffffff 42%, #f1f5f9 100%);
    }

    .work-visa-topic-page .wvt-reality-head {
        position: relative;
        padding: clamp(4px, 1vw, 8px) 0;
    }

    .work-visa-topic-page .wvt-pair-col--challenges .wvt-reality-head {
        padding-left: 0 !important;
        border-left: none !important;
    }

    .work-visa-topic-page .wvt-reality-head .common-subtitle {
        justify-content: flex-start;
    }

    

    .work-visa-topic-page .wvt-pair-col--challenges {
        position: relative;
        overflow: hidden;
        background:
            radial-gradient(ellipse 100% 70% at 100% -10%, rgba(177, 0, 115, 0.07) 0%, transparent 52%),
            radial-gradient(ellipse 80% 50% at -5% 100%, rgba(122, 0, 70, 0.06) 0%, transparent 48%),
            linear-gradient(168deg, #ffffff 0%, #fefbfd 38%, #f5f0fa 72%, #faf8fc 100%);
        border-radius: 28px !important;
        padding: 42px !important;
        border: 1px solid rgba(177, 0, 115, 0.14) !important;
        box-shadow:
            0 20px 50px rgba(15, 23, 42, 0.06),
            0 0 0 1px rgba(255, 255, 255, 0.65) inset;
    }

    .work-visa-topic-page .wvt-pair-col--challenges::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 6px;
        background: linear-gradient(180deg, #e11d8c 0%, #b10073 38%, #7a0046 72%, #4a0a32 100%);
        border-radius: 28px 0 0 28px;
        pointer-events: none;
    }

    .work-visa-topic-page .wvt-pair-col--challenges > * {
        position: relative;
        z-index: 1;
    }

    .work-visa-topic-page .wvt-pair-col--challenges .common-subtitle span {
        color: #7a0046 !important;
        letter-spacing: 0.16em;
        font-size: 0.72rem;
    }

    .work-visa-topic-page .wvt-pair-col--challenges .wvt-heading {
        font-size: clamp(1.5rem, 2.4vw, 2rem);
        line-height: 1.2;
        color: #08142b;
    }

    .work-visa-topic-page .wvt-pair-col--challenges .wvt-reality-lead {
        color: #475569;
        margin-top: 14px;
        line-height: 1.7;
    }

    

    .work-visa-topic-page .wvt-pair-col--challenges .wvt-challenge-grid {
        margin-top: 30px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
    }

    @media (max-width: 991px) {
        .work-visa-topic-page .wvt-pair-col--challenges .wvt-challenge-grid {
            grid-template-columns: 1fr;
        }
    }

    .work-visa-topic-page .wvt-pair-col--challenges .wvt-challenge-card {
        background: #f8fafc !important;
        border: 1px solid #e4e8ee !important;
        border-left: 4px solid #7a0046 !important;
        border-radius: 18px !important;
        padding: 18px 18px !important;
        gap: 14px;
        min-height: 84px;
        align-items: center;
        box-shadow: none !important;
        transition: all 0.25s ease;
        display: flex;
    }

    .work-visa-topic-page .wvt-pair-col--challenges .wvt-challenge-card:hover {
        transform: translateY(-4px);
        background: #fff !important;
        box-shadow: 0 14px 32px rgba(122, 0, 70, 0.08) !important;
    }

    .work-visa-topic-page .wvt-pair-col--challenges .wvt-challenge-card > i {
        width: 38px;
        height: 38px;
        border-radius: 12px;
        background: linear-gradient(145deg, #b10073, #7a0046);
        color: #fff;
        flex-shrink: 0;
        font-size: 0.8rem;
        box-shadow: 0 8px 18px rgba(177, 0, 115, 0.25);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-top: 0;
    }

    .work-visa-topic-page .wvt-pair-col--challenges .wvt-challenge-card span {
        color: #08142b !important;
        font-size: 0.96rem;
        font-weight: 500;
        line-height: 1.5;
    }

    .work-visa-topic-page .wvt-pair-col--challenges .wvt-reality-head .common-subtitle {
        justify-content: center;
    }
    @media (min-width: 992px) {
        .work-visa-topic-page .wvt-pair-col--challenges .wvt-reality-head .common-subtitle {
            justify-content: flex-start;
        }
    }

    
    .work-visa-topic-page .wvt-section-strategy.wvt-band-light {
        background:
            radial-gradient(ellipse 75% 50% at 0% 30%, color-mix(in srgb, var(--theme-color-3) 8%, transparent), transparent 55%),
            linear-gradient(
                180deg,
                color-mix(in srgb, var(--theme-color-3) 6%, #ffffff) 0%,
                #ffffff 50%,
                #f8fafc 100%
            );
    }
    .work-visa-topic-page .wvt-section-strategy.wvt-band-light .common-subtitle span {
        color: var(--theme-color-3) !important;
    }
    .work-visa-topic-page .wvt-section-strategy.wvt-band-light .wvt-approach-copy__title {
        color: var(--title-color);
    }
    .work-visa-topic-page .wvt-section-strategy.wvt-band-light .wvt-approach-copy__lead {
        color: #334155;
        background: #fff;
        border: 1px solid color-mix(in srgb, var(--theme-color-3) 14%, transparent);
        border-left: 4px solid var(--theme-color-3);
        box-shadow: 0 12px 36px rgba(15, 23, 42, 0.06);
    }
    .work-visa-topic-page .wvt-section-strategy.wvt-band-light .wvt-strategy-card {
        background: #fff;
        border: 1px solid rgba(148, 163, 184, 0.2);
        box-shadow: 0 8px 24px rgba(15, 23, 42, 0.04);
    }
    .work-visa-topic-page .wvt-section-strategy.wvt-band-light .wvt-strategy-card p {
        color: #334155;
    }

    .work-visa-topic-page .wvt-section-challenges.wvt-band-dark {
        background:
            radial-gradient(ellipse 70% 50% at 100% 20%, color-mix(in srgb, var(--theme-color-3) 14%, transparent), transparent 55%),
            linear-gradient(168deg, #0b1220 0%, #121a2a 100%);
    }
    .work-visa-topic-page .wvt-section-challenges.wvt-band-dark .wvt-reality-head .wvt-heading {
        color: #f8fafc;
    }
    .work-visa-topic-page .wvt-section-challenges.wvt-band-dark .wvt-reality-head .wvt-reality-lead {
        color: rgba(226, 232, 240, 0.88);
    }
    .work-visa-topic-page .wvt-section-challenges.wvt-band-dark .wvt-reality-head .common-subtitle span {
        color: color-mix(in srgb, var(--theme-color-3) 52%, #ffffff) !important;
    }
    .work-visa-topic-page .wvt-section-challenges.wvt-band-dark .wvt-challenge-card {
        background: rgba(15, 23, 42, 0.55);
        border: 1px solid rgba(148, 163, 184, 0.18);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.25);
    }
    .work-visa-topic-page .wvt-section-challenges.wvt-band-dark .wvt-challenge-card span {
        color: rgba(241, 245, 249, 0.95);
    }

    
    .work-visa-topic-page .wvt-support-figure {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 22px 52px rgba(0, 0, 0, 0.38);
        border: 1px solid rgba(255, 255, 255, 0.14);
    }
    .work-visa-topic-page .wvt-band-light .wvt-support-figure {
        box-shadow: 0 20px 48px rgba(15, 23, 42, 0.12);
        border: 1px solid rgba(148, 163, 184, 0.22);
    }
    .work-visa-topic-page .wvt-support-figure img {
        display: block;
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    

    
    .work-visa-topic-page .wvt-topic-section {
        padding: 64px 0 !important;
    }

    .work-visa-topic-page .container {
        max-width: 1180px;
    }

    
    .work-visa-topic-page .work-visa-hero.wvt-hero.hero-section-5 {
        padding: 64px 0 104px !important;
        min-height: 0 !important;
        overflow: visible;
    }

    .work-visa-topic-page .work-visa-hero .hero-content-5 {
        max-width: min(100%, 1240px);
    }

    .work-visa-topic-page .work-visa-hero h1 {
        font-size: clamp(2.1rem, 4vw, 3.15rem);
        line-height: 1.12;
    }

    .work-visa-topic-page .work-visa-hero .hero-sub,
    .work-visa-topic-page .work-visa-hero .hero-body {
        max-width: 100%;
        line-height: 1.65;
    }

    
    .work-visa-topic-page .wvt-intro-band {
        margin-top: clamp(24px, 4vw, 48px) !important;
        padding: clamp(16px, 2.5vw, 28px) 0 64px !important;
    }

    .work-visa-topic-page .wvt-intro-band__card {
        border-radius: 24px !important;
        overflow: hidden !important;
        box-shadow: 0 24px 70px rgba(15, 23, 42, 0.12);
    }

    
    .work-visa-topic-page .wvt-intro-collage-wrap,
    .work-visa-topic-page .wvt-intro-panel {
        padding: 36px !important;
        min-height: 100% !important;
    }

    .work-visa-topic-page .wvt-intro-visual {
        aspect-ratio: 4 / 3 !important;
        height: 100% !important;
        min-height: 380px;
        border-radius: 20px !important;
    }

    .work-visa-topic-page .wvt-intro-visual img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    
    .work-visa-topic-page .wvt-intro-panel {
        justify-content: center;
    }

    .work-visa-topic-page .wvt-intro-panel__title {
        font-size: clamp(1.55rem, 2.5vw, 2.15rem) !important;
        line-height: 1.22 !important;
        margin-bottom: 16px !important;
    }

    .work-visa-topic-page .wvt-intro-panel__body,
    .work-visa-topic-page .wvt-lead,
    .work-visa-topic-page .wvt-approach-copy__lead,
    .work-visa-topic-page .wvt-reality-lead {
        font-size: 1rem !important;
        line-height: 1.65 !important;
    }

    
    .work-visa-topic-page .wvt-stack-overlap {
        padding: 56px 0 !important;
    }

    .work-visa-topic-page .wvt-planning-stack-card {
        border-radius: 24px !important;
        padding: 36px !important;
    }

    .work-visa-topic-page .wvt-stack-overlap-visual {
        aspect-ratio: 4 / 3 !important;
        max-width: 100% !important;
        border-radius: 18px !important;
    }

    .work-visa-topic-page .wvt-stack-overlap-visual img {
        object-fit: cover;
    }

    
    .work-visa-topic-page .wvt-section-strategy.wvt-topic-section,
    .work-visa-topic-page .wvt-section-challenges.wvt-topic-section {
        padding: 64px 0 !important;
    }

    
    .work-visa-topic-page .wvt-support-figure {
        height: 360px;
        border-radius: 22px !important;
    }

    .work-visa-topic-page .wvt-support-figure img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .work-visa-topic-page .wvt-heading {
        font-size: clamp(1.65rem, 3vw, 2.25rem);
        line-height: 1.22;
    }

    
    .work-visa-topic-page .m-t-15 {
        margin-top: 12px !important;
    }

    .work-visa-topic-page .m-t-25 {
        margin-top: 20px !important;
    }

    .work-visa-topic-page .m-b-15 {
        margin-bottom: 12px !important;
    }

    
    @media (max-width: 991px) {
        .work-visa-topic-page .work-visa-hero.wvt-hero.hero-section-5 {
            padding: 64px 0 96px !important;
        }

        .work-visa-topic-page .wvt-topic-section {
            padding: 48px 0 !important;
        }

        .work-visa-topic-page .wvt-intro-band {
            padding-bottom: 48px !important;
        }

        .work-visa-topic-page .wvt-intro-collage-wrap,
        .work-visa-topic-page .wvt-intro-panel,
        .work-visa-topic-page .wvt-planning-stack-card {
            padding: 24px !important;
        }

        .work-visa-topic-page .wvt-intro-visual,
        .work-visa-topic-page .wvt-support-figure {
            min-height: unset;
            height: 280px;
            aspect-ratio: auto !important;
        }
    }

    .work-visa-topic-page .wvt-page-bottom-stack {
        background: linear-gradient(180deg, #f1f5f9 0%, #f8fafc 35%, #ffffff 100%);
    }
    .work-visa-topic-page .wvt-page-bottom-stack .testimonial {
        margin-bottom: 0;
        padding-bottom: clamp(56px, 7vw, 88px);
    }

    /* Family visa topic pages: custom intro/suitability UI */
    .family-visa-topic-page .wvt-intro-band {
        background: linear-gradient(180deg, #fff7fb 0%, #ffffff 58%, #f8fafc 100%) !important;
        margin-top: 0 !important;
        padding: clamp(54px, 7vw, 88px) 0 !important;
    }
    .family-visa-topic-page .wvt-intro-band__bg,
    .family-visa-topic-page .wvt-intro-band__tint {
        display: none;
    }
    .family-visa-topic-page .wvt-intro-band__card--suit {
        position: relative;
        border-radius: 34px !important;
        overflow: hidden !important;
        background:
            radial-gradient(circle at 8% 14%, color-mix(in srgb, var(--theme-color-3) 12%, transparent), transparent 28%),
            linear-gradient(135deg, #ffffff 0%, #fff7fb 52%, #ffffff 100%);
        border: 1px solid color-mix(in srgb, var(--theme-color-3) 16%, transparent);
        box-shadow: 0 32px 86px rgba(102, 0, 63, 0.12) !important;
    }
    .family-visa-topic-page .wvt-intro-band__card--suit::before {
        display: none;
    }
    .family-visa-topic-page .wvt-intro-band__row--suit {
        flex-direction: row-reverse;
        min-height: 520px;
    }
    .family-visa-topic-page .wvt-intro-band__row--suit .wvt-intro-collage-wrap {
        background: transparent;
        padding: clamp(22px, 3vw, 36px) !important;
        justify-content: stretch;
    }
    .family-visa-topic-page .wvt-intro-band__row--suit .wvt-intro-visual {
        height: 100% !important;
        min-height: 456px;
        aspect-ratio: auto !important;
        border-radius: 28px !important;
        border: 0;
        box-shadow: 0 28px 70px rgba(102, 0, 63, 0.18);
        position: relative;
        overflow: hidden;
    }
    .family-visa-topic-page .wvt-intro-band__row--suit .wvt-intro-visual::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(24, 12, 24, 0.04), rgba(24, 12, 24, 0.28));
        pointer-events: none;
    }
    .family-visa-topic-page .wvt-intro-band__row--suit .wvt-intro-text-col {
        border-left: 0;
        display: flex;
        align-items: center;
    }
    .family-visa-topic-page .wvt-intro-panel--suit {
        width: 100%;
        background: transparent;
        border-left: 0;
        padding: clamp(34px, 5vw, 62px) !important;
        min-height: auto !important;
    }
    .family-visa-topic-page .wvt-intro-panel--suit::after {
        content: "";
        position: absolute;
        left: clamp(34px, 5vw, 62px);
        bottom: clamp(24px, 3vw, 38px);
        width: 96px;
        height: 4px;
        border-radius: 999px;
        background: linear-gradient(90deg, var(--theme-color-3), #da5766);
    }
    .family-visa-topic-page .wvt-intro-panel--suit .wvt-intro-panel__label {
        width: fit-content;
        padding: 9px 18px;
        background: #fff;
        box-shadow: 0 10px 28px rgba(102, 0, 63, 0.08);
    }
    .family-visa-topic-page .wvt-intro-panel--suit .wvt-intro-panel__title {
        max-width: 720px;
        font-size: clamp(2rem, 3.6vw, 3.2rem) !important;
        line-height: 1.08 !important;
        margin-bottom: clamp(22px, 2.6vw, 32px) !important;
    }
    .family-visa-topic-page .wvt-intro-panel--suit .wvt-intro-panel__body {
        max-width: 680px;
        padding: clamp(20px, 2.6vw, 28px);
        border-radius: 22px;
        background: rgba(255, 255, 255, 0.74);
        border: 1px solid rgba(102, 0, 63, 0.12);
        box-shadow: 0 18px 44px rgba(15, 23, 42, 0.06);
        color: #475569;
    }
    @media (max-width: 991px) {
        .family-visa-topic-page .wvt-intro-band__row--suit {
            flex-direction: column;
            min-height: 0;
        }
        .family-visa-topic-page .wvt-intro-band__row--suit .wvt-intro-visual {
            min-height: 300px;
        }
        .family-visa-topic-page .wvt-intro-panel--suit::after {
            left: 24px;
        }
    }

    .family-visa-topic-page .wvt-intro-band__card--suit {
        border-radius: 34px !important;
        background:
            radial-gradient(circle at 88% 12%, rgba(102, 0, 63, 0.08), transparent 30%),
            linear-gradient(180deg, #ffffff 0%, #fff7fb 100%) !important;
    }
    .family-visa-topic-page .wvt-intro-band__row--suit {
        display: grid !important;
        grid-template-columns: 1fr;
        grid-template-areas:
            "copy"
            "image";
        min-height: 0;
    }
    .family-visa-topic-page .wvt-intro-band__row--suit .wvt-intro-text-col {
        grid-area: copy;
        width: 100% !important;
        max-width: 100% !important;
        flex: 0 0 100% !important;
        display: block;
    }
    .family-visa-topic-page .wvt-intro-band__row--suit .wvt-intro-collage-wrap {
        grid-area: image;
        width: 100% !important;
        max-width: 100% !important;
        flex: 0 0 100% !important;
        padding: 0 clamp(24px, 4vw, 56px) clamp(26px, 4vw, 56px) !important;
    }
    .family-visa-topic-page .wvt-intro-panel--suit {
        text-align: center;
        align-items: center;
        padding: clamp(34px, 5vw, 60px) clamp(24px, 6vw, 84px) clamp(24px, 4vw, 38px) !important;
    }
    .family-visa-topic-page .wvt-intro-panel--suit::after {
        display: none;
    }
    .family-visa-topic-page .wvt-intro-panel--suit .wvt-intro-panel__title {
        margin-left: auto;
        margin-right: auto;
        max-width: 860px;
    }
    .family-visa-topic-page .wvt-intro-panel--suit .wvt-intro-panel__body {
        margin-left: auto;
        margin-right: auto;
        max-width: 820px;
    }
    .family-visa-topic-page .wvt-intro-band__row--suit .wvt-intro-visual {
        min-height: 0;
        height: clamp(260px, 34vw, 420px) !important;
        aspect-ratio: auto !important;
        border-radius: 26px !important;
        box-shadow: 0 26px 70px rgba(102, 0, 63, 0.16);
    }

    .family-visa-topic-page .wvt-intro-band__card,
    .family-visa-topic-page .wvt-planning-stack-card,
    .family-visa-topic-page .wvt-planning-copy__panel,
    .family-visa-topic-page .wvt-strategy-card,
    .family-visa-topic-page .wvt-challenge-card,
    .family-visa-topic-page .wvt-support-figure,
    .family-visa-topic-page .wvt-intro-visual,
    .family-visa-topic-page .wvt-stack-overlap-visual,
    .family-visa-topic-page .wvt-strategy-figure,
    .family-visa-topic-page .wvt-point-card,
    .family-visa-topic-page .wvt-planning-rail,
    .family-visa-topic-page .wvt-planning-panel,
    .family-visa-topic-page .wvt-planning-visual-shell {
        border-radius: 12px !important;
    }
    .family-visa-topic-page .e-primary-btn,
    .family-visa-topic-page .e-primary-btn::before,
    .family-visa-topic-page .e-primary-btn .icon-wrap,
    .family-visa-topic-page .wvt-intro-panel__label,
    .family-visa-topic-page .wvt-planning-copy__eyebrow,
    .family-visa-topic-page .wvt-intro-fit-chip,
    .family-visa-topic-page .wvt-point-ico {
        border-radius: 8px !important;
    }
    .family-visa-topic-page .wvt-suit-planning-stack--planning-only .wvt-planning-stack-card::before,
    .family-visa-topic-page .wvt-intro-panel--suit::after {
        border-radius: 5px !important;
    }

    .family-visa-topic-page .wvt-reality-standalone.wvt-section-challenges {
        background:
            radial-gradient(circle at 10% 20%, rgba(102, 0, 63, 0.08), transparent 26%),
            linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
    }
    .family-visa-topic-page .wvt-reality-standalone .wvt-pair-col--challenges {
        padding: 0 !important;
        overflow: hidden;
        background: #ffffff !important;
        border: 1px solid rgba(102, 0, 63, 0.14) !important;
        box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08) !important;
        border-radius: 12px !important;
    }
    .family-visa-topic-page .wvt-reality-standalone .wvt-pair-col--challenges::before {
        display: none;
    }
    .family-visa-topic-page .wvt-reality-standalone .wvt-reality-head {
        display: grid;
        grid-template-columns: minmax(190px, 0.34fr) minmax(0, 1fr);
        grid-template-rows: auto auto;
        gap: 0;
        padding: 0 !important;
        text-align: left !important;
    }
    .family-visa-topic-page .wvt-reality-standalone .wvt-reality-head .common-subtitle {
        grid-column: 1;
        grid-row: 1 / span 2;
        align-self: stretch;
        justify-content: center !important;
        align-items: center;
        margin: 0 !important;
        padding: clamp(26px, 3vw, 42px) 24px;
        background-image:
            linear-gradient(180deg, rgba(24, 12, 24, 0.42), rgba(102, 0, 63, 0.46)),
            url('{{ asset($strategyImg) }}');
        background-size: cover;
        background-position: center;
    }
    .family-visa-topic-page .wvt-reality-standalone .wvt-reality-head .common-subtitle span {
        display: none;
    }
    .family-visa-topic-page .wvt-reality-standalone .wvt-reality-head .wvt-heading {
        grid-column: 2;
        padding: clamp(28px, 3vw, 44px) clamp(28px, 4vw, 54px) 0;
        color: #111827;
        text-align: left !important;
        font-size: clamp(1.65rem, 2.8vw, 2.4rem);
    }
    .family-visa-topic-page .wvt-reality-standalone .wvt-reality-head .wvt-reality-lead {
        grid-column: 2;
        padding: 14px clamp(28px, 4vw, 54px) clamp(28px, 3vw, 44px);
        margin: 0;
        color: #475569;
        text-align: left !important;
        max-width: 920px;
    }
    .family-visa-topic-page .wvt-reality-standalone .wvt-pair-col--challenges .wvt-challenge-grid {
        padding: 0 clamp(28px, 4vw, 54px) clamp(28px, 3vw, 44px);
    }
    @media (max-width: 767px) {
        .family-visa-topic-page .wvt-reality-standalone .wvt-reality-head {
            grid-template-columns: 1fr;
        }
        .family-visa-topic-page .wvt-reality-standalone .wvt-reality-head .common-subtitle,
        .family-visa-topic-page .wvt-reality-standalone .wvt-reality-head .wvt-heading,
        .family-visa-topic-page .wvt-reality-standalone .wvt-reality-head .wvt-reality-lead {
            grid-column: 1;
            grid-row: auto;
        }
    }

    /* Visitor & Short Stay topic pages */
    .visitor-visa-topic-page {
        --visitor-topic-dark: #07111f;
        --visitor-topic-dark-2: #10243a;
        --visitor-topic-light: #f5fbff;
        --visitor-topic-border: rgba(15, 23, 42, 0.1);
    }
    .visitor-visa-topic-page .wvt-topic-section {
        padding: clamp(64px, 7vw, 96px) 0 !important;
    }
    .visitor-visa-topic-page .wvt-band-light {
        background:
            radial-gradient(circle at 8% 18%, color-mix(in srgb, var(--theme-color-3) 7%, transparent), transparent 25%),
            linear-gradient(180deg, #ffffff 0%, var(--visitor-topic-light) 100%) !important;
    }
    .visitor-visa-topic-page .wvt-band-dark {
        background:
            radial-gradient(circle at 14% 18%, color-mix(in srgb, var(--theme-color-3) 18%, transparent), transparent 30%),
            radial-gradient(circle at 86% 78%, rgba(56, 189, 248, 0.12), transparent 28%),
            linear-gradient(155deg, var(--visitor-topic-dark) 0%, var(--visitor-topic-dark-2) 56%, #111827 100%) !important;
    }
    .visitor-visa-topic-page .visitor-topic-card {
        border-radius: 24px;
        padding: clamp(28px, 4vw, 48px);
        background: #ffffff;
        border: 1px solid var(--visitor-topic-border);
        box-shadow: 0 24px 60px rgba(15, 23, 42, 0.1);
        height: 100%;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-card {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.14);
        box-shadow: 0 24px 60px rgba(0, 0, 0, 0.22);
    }
    .visitor-visa-topic-page .visitor-topic-card h2,
    .visitor-visa-topic-page .visitor-topic-card h3 {
        color: #0f172a;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-card h2,
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-card h3 {
        color: #ffffff !important;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-card p {
        color: rgba(248, 250, 252, 0.9);
    }
    .visitor-visa-topic-page .visitor-topic-kicker {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 16px;
        color: var(--theme-color-3);
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        font-size: 0.82rem;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-kicker {
        color: color-mix(in srgb, var(--theme-color-3) 45%, #ffffff);
    }
    .visitor-visa-topic-page .visitor-topic-icon {
        width: 54px;
        height: 54px;
        border-radius: 16px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: color-mix(in srgb, var(--theme-color-3) 10%, #ffffff);
        color: var(--theme-color-3);
        font-size: 1.35rem;
        margin-bottom: 22px;
    }
    .visitor-visa-topic-page .visitor-topic-media {
        border-radius: 24px;
        overflow: hidden;
        height: 100%;
        min-height: 360px;
        box-shadow: 0 24px 60px rgba(15, 23, 42, 0.12);
        position: relative;
    }
    .visitor-visa-topic-page .visitor-topic-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    .visitor-visa-topic-page .visitor-topic-media::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(7, 17, 31, 0.04), rgba(7, 17, 31, 0.24));
    }
    .visitor-visa-topic-page .visitor-topic-point-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 14px;
        margin-top: 30px;
    }
    .visitor-visa-topic-page .visitor-topic-point {
        border-radius: 16px;
        padding: 18px;
        background: #ffffff;
        border: 1px solid var(--visitor-topic-border);
        box-shadow: 0 16px 38px rgba(15, 23, 42, 0.06);
        display: flex;
        gap: 12px;
        align-items: flex-start;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-point {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.14);
        box-shadow: none;
    }
    .visitor-visa-topic-page .visitor-topic-point i {
        width: 28px;
        height: 28px;
        border-radius: 9px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex: 0 0 auto;
        background: var(--theme-color-3);
        color: #ffffff;
        font-size: 0.75rem;
        margin-top: 1px;
    }
    .visitor-visa-topic-page .visitor-topic-point span {
        color: #0f172a;
        line-height: 1.45;
        font-weight: 600;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-point span {
        color: rgba(248, 250, 252, 0.94);
    }
    .visitor-visa-topic-page .visitor-topic-support {
        border-radius: 28px;
        overflow: hidden;
        background: #ffffff;
        border: 1px solid var(--visitor-topic-border);
        box-shadow: 0 28px 70px rgba(15, 23, 42, 0.12);
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-support {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.14);
        box-shadow: 0 28px 70px rgba(0, 0, 0, 0.24);
    }
    .visitor-visa-topic-page .visitor-topic-support__copy {
        padding: clamp(28px, 4vw, 52px);
    }
    .visitor-visa-topic-page .visitor-topic-support__image {
        height: 100%;
        min-height: 340px;
    }
    .visitor-visa-topic-page .visitor-topic-support__image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-support h2 {
        color: #ffffff !important;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-support p {
        color: rgba(248, 250, 252, 0.9);
    }
    .visitor-visa-topic-page .visitor-topic-feature {
        display: grid;
        grid-template-columns: minmax(0, 1.05fr) minmax(0, 0.95fr);
        gap: clamp(22px, 4vw, 46px);
        align-items: center;
    }
    .visitor-visa-topic-page .visitor-topic-feature__media {
        height: clamp(320px, 36vw, 430px);
        min-height: 0;
        border-radius: 32px;
        overflow: hidden;
        box-shadow: 0 28px 74px rgba(15, 23, 42, 0.16);
        position: relative;
    }
    .visitor-visa-topic-page .visitor-topic-feature__media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    .visitor-visa-topic-page .visitor-topic-feature__media::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(7, 17, 31, 0.02), rgba(7, 17, 31, 0.32));
    }
    .visitor-visa-topic-page .visitor-topic-feature__copy {
        border-radius: 28px;
        padding: clamp(30px, 4.5vw, 56px);
        background: #ffffff;
        border: 1px solid var(--visitor-topic-border);
        box-shadow: 0 24px 58px rgba(15, 23, 42, 0.08);
        position: relative;
        z-index: 2;
        margin-left: clamp(-80px, -5vw, -40px);
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-feature__copy {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.14);
        box-shadow: 0 24px 58px rgba(0, 0, 0, 0.22);
    }
    .visitor-visa-topic-page .visitor-topic-feature__copy h2 {
        color: #0f172a;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-feature__copy h2 {
        color: #ffffff !important;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-feature__copy p {
        color: rgba(248, 250, 252, 0.9);
    }
    .visitor-visa-topic-page .visitor-topic-panel {
        border-radius: 32px;
        padding: clamp(34px, 5vw, 64px);
        background:
            radial-gradient(circle at 12% 18%, color-mix(in srgb, var(--theme-color-3) 12%, transparent), transparent 26%),
            #ffffff;
        border: 1px solid var(--visitor-topic-border);
        box-shadow: 0 28px 70px rgba(15, 23, 42, 0.09);
        text-align: center;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-panel {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.14);
        box-shadow: 0 28px 70px rgba(0, 0, 0, 0.24);
    }
    .visitor-visa-topic-page .visitor-topic-panel h2 {
        color: #0f172a;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-panel h2 {
        color: #ffffff !important;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-panel p {
        color: rgba(248, 250, 252, 0.9);
    }
    .visitor-visa-topic-page .visitor-topic-panel__steps {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 14px;
        margin-top: 30px;
    }
    .visitor-visa-topic-page .visitor-topic-panel__steps span {
        border-radius: 999px;
        padding: 12px 16px;
        background: color-mix(in srgb, var(--theme-color-3) 10%, #ffffff);
        color: var(--theme-color-3);
        font-weight: 800;
        font-size: 0.9rem;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-panel__steps span {
        background: rgba(255, 255, 255, 0.1);
        color: #ffffff;
    }
    .visitor-visa-topic-page .visitor-topic-story {
        display: grid;
        grid-template-columns: minmax(0, 0.78fr) minmax(0, 1.22fr);
        gap: clamp(22px, 4vw, 46px);
        align-items: stretch;
    }
    .visitor-visa-topic-page .visitor-topic-story__mark {
        min-height: 280px;
        border-radius: 28px;
        background:
            linear-gradient(180deg, rgba(7, 17, 31, 0.22), rgba(7, 17, 31, 0.72)),
            var(--story-image) center / cover;
        display: flex;
        align-items: flex-end;
        padding: 28px;
        box-shadow: 0 24px 58px rgba(15, 23, 42, 0.14);
    }
    .visitor-visa-topic-page .visitor-topic-story__mark span {
        width: 72px;
        height: 72px;
        border-radius: 22px;
        background: #ffffff;
        color: var(--theme-color-3);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.6rem;
    }
    .visitor-visa-topic-page .visitor-topic-story__copy {
        border-radius: 28px;
        padding: clamp(30px, 4vw, 54px);
        background: #ffffff;
        border: 1px solid var(--visitor-topic-border);
        box-shadow: 0 24px 58px rgba(15, 23, 42, 0.08);
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-story__copy {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.14);
    }
    .visitor-visa-topic-page .visitor-topic-story__copy h2 {
        color: #0f172a;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-story__copy h2 {
        color: #ffffff !important;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-story__copy p {
        color: rgba(248, 250, 252, 0.9);
    }
    .visitor-visa-topic-page .visitor-topic-warning-grid {
        display: grid;
        grid-template-columns: minmax(260px, 0.8fr) minmax(0, 1.2fr);
        gap: clamp(18px, 3vw, 34px);
        margin-top: 0;
        align-items: stretch;
    }
    .visitor-visa-topic-page .visitor-topic-warning-intro {
        border-radius: 26px;
        padding: clamp(28px, 4vw, 44px);
        background:
            radial-gradient(circle at 18% 12%, color-mix(in srgb, var(--theme-color-3) 20%, transparent), transparent 30%),
            linear-gradient(155deg, #ffffff 0%, #fdf2f8 100%);
        border: 1px solid color-mix(in srgb, var(--theme-color-3) 16%, transparent);
        box-shadow: 0 24px 58px rgba(15, 23, 42, 0.1);
        min-height: 100%;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-warning-intro {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.14);
        box-shadow: 0 24px 58px rgba(0, 0, 0, 0.24);
    }
    .visitor-visa-topic-page .visitor-topic-warning-intro .visitor-topic-icon {
        background: var(--theme-color-3);
        color: #ffffff;
    }
    .visitor-visa-topic-page .visitor-topic-warning-intro h2 {
        color: #0f172a;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-warning-intro h2 {
        color: #ffffff !important;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-warning-intro p {
        color: rgba(248, 250, 252, 0.9);
    }
    .visitor-visa-topic-page .visitor-topic-warning-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px;
    }
    .visitor-visa-topic-page .visitor-topic-warning {
        border-radius: 16px;
        padding: 16px 18px;
        background: #ffffff;
        border: 1px solid var(--visitor-topic-border);
        box-shadow: 0 18px 44px rgba(15, 23, 42, 0.07);
        min-height: 92px;
        display: grid;
        grid-template-columns: 42px 1fr;
        gap: 12px;
        align-items: center;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-warning {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.14);
        box-shadow: none;
    }
    .visitor-visa-topic-page .visitor-topic-warning strong {
        width: 42px;
        height: 42px;
        border-radius: 14px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: color-mix(in srgb, var(--theme-color-3) 10%, #ffffff);
        color: var(--theme-color-3);
        font-size: 0.86rem;
        margin-bottom: 0;
    }
    .visitor-visa-topic-page .visitor-topic-warning span {
        color: #0f172a;
        font-weight: 650;
        line-height: 1.45;
    }
    .visitor-visa-topic-page .wvt-band-dark .visitor-topic-warning span {
        color: rgba(248, 250, 252, 0.94);
    }
    @media (max-width: 1199px) {
        .visitor-visa-topic-page .visitor-topic-point-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
        .visitor-visa-topic-page .visitor-topic-warning-list {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }
    @media (max-width: 991px) {
        .visitor-visa-topic-page .visitor-topic-feature,
        .visitor-visa-topic-page .visitor-topic-story {
            grid-template-columns: 1fr;
        }
        .visitor-visa-topic-page .visitor-topic-feature__copy {
            margin-left: 0;
        }
        .visitor-visa-topic-page .visitor-topic-panel__steps {
            grid-template-columns: 1fr;
        }
        .visitor-visa-topic-page .visitor-topic-point-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
        .visitor-visa-topic-page .visitor-topic-warning-grid {
            grid-template-columns: 1fr;
        }
        .visitor-visa-topic-page .visitor-topic-media,
        .visitor-visa-topic-page .visitor-topic-support__image {
            min-height: 280px;
        }
        .visitor-visa-topic-page .visitor-topic-feature__media {
            height: 280px;
        }
    }
    @media (max-width: 575px) {
        .visitor-visa-topic-page .visitor-topic-point-grid,
        .visitor-visa-topic-page .visitor-topic-warning-list {
            grid-template-columns: 1fr;
        }
    }


</style>

<div class="wsm-work-page work-visa-topic-page{{ $isFamilyVisaTopic ? ' family-visa-topic-page' : '' }}{{ $isVisitorVisaTopic ? ' visitor-visa-topic-page' : '' }}">

<section class="work-visa-hero wvt-hero hero-section-5" style="background-image: url('{{ asset($heroImg) }}');">
    <div class="container">
        <div class="hero-content-5" data-aos="fade-up">
            <div class="topic-tag">{{ $page['hero']['tagline'] ?? '' }}</div>
            <h1>{{ $page['hero']['heading'] ?? $page['label'] }}</h1>
            @if (!empty($page['hero']['subheading']))
                <p class="hero-sub">{{ $page['hero']['subheading'] }}</p>
            @endif
            @if (!empty($page['hero']['content']))
                <p class="hero-body">{{ $page['hero']['content'] }}</p>
            @endif
            @if (!empty($page['hero']['cta']))
                <div class="hero-cta">
                    <a class="e-primary-btn has-icon" href="{{ url('book-appointment') }}">
                        {{ $page['hero']['cta'] }}
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                </div>
            @endif
        </div>
    </div>
</section>

@if ($isVisitorVisaTopic)
@php
    $visitorTopicSections = [];

    if (!empty($page['suit'])) {
        $visitorTopicSections[] = [
            'kind' => 'feature',
            'eyebrow' => $page['suit']['eyebrow'] ?? 'Who this visa may suit',
            'heading' => $page['suit']['heading'] ?? '',
            'content' => $page['suit']['content'] ?? '',
            'image' => $introSingleImg,
            'icon' => $page['icon'] ?? 'fa-light fa-passport',
        ];
    }

    if (!empty($page['planning'])) {
        $visitorTopicSections[] = [
            'kind' => 'panel',
            'eyebrow' => $page['planning']['eyebrow'] ?? 'Planning',
            'heading' => $page['planning']['heading'] ?? '',
            'content' => $page['planning']['content'] ?? '',
            'image' => $stackSectionImg,
            'icon' => 'fa-light fa-route',
            'reverse' => true,
        ];
    }

    if (!empty($page['strategy'])) {
        $visitorTopicSections[] = [
            'kind' => !empty($page['strategy']['points']) ? 'points' : 'split',
            'eyebrow' => $page['strategy']['eyebrow'] ?? 'Guidance',
            'heading' => $page['strategy']['heading'] ?? '',
            'content' => $page['strategy']['content'] ?? '',
            'points' => $page['strategy']['points'] ?? [],
            'image' => $strategyImg,
            'icon' => 'fa-light fa-folder-check',
        ];
    }

    foreach ($page['extraSections'] ?? [] as $extraSection) {
        $visitorTopicSections[] = [
            'kind' => !empty($extraSection['points']) ? 'points' : 'story',
            'eyebrow' => $extraSection['eyebrow'] ?? 'Guidance',
            'heading' => $extraSection['heading'] ?? '',
            'content' => $extraSection['content'] ?? '',
            'points' => $extraSection['points'] ?? [],
            'image' => $strategyImg,
            'icon' => 'fa-light fa-envelope-open-text',
            'reverse' => true,
        ];
    }

    if (!empty($page['challenges'])) {
        $visitorTopicSections[] = [
            'kind' => !empty($page['challenges']['points']) ? 'warnings' : 'story',
            'eyebrow' => $page['challenges']['eyebrow'] ?? 'Reality check',
            'heading' => $page['challenges']['heading'] ?? '',
            'content' => $page['challenges']['content'] ?? '',
            'points' => $page['challenges']['points'] ?? [],
            'image' => $supportImg,
            'icon' => 'fa-light fa-triangle-exclamation',
        ];
    }

    if (!empty($page['support'])) {
        $visitorTopicSections[] = [
            'kind' => 'support',
            'eyebrow' => 'Support',
            'heading' => $page['support']['heading'] ?? '',
            'content' => $page['support']['content'] ?? '',
            'cta' => $page['support']['cta'] ?? '',
            'image' => $supportImg,
        ];
    }
@endphp

@foreach ($visitorTopicSections as $sectionIndex => $section)
    @php $sectionBand = $sectionIndex % 2 === 0 ? 'wvt-band-light' : 'wvt-band-dark'; @endphp
    <section class="wvt-topic-section {{ $sectionBand }}">
        <div class="container">
            @if ($section['kind'] === 'feature')
                <div class="visitor-topic-feature" data-aos="fade-up">
                    <div class="visitor-topic-feature__media">
                        <img src="{{ asset($section['image']) }}" alt="{{ $section['heading'] }}" loading="lazy">
                    </div>
                    <div class="visitor-topic-feature__copy">
                        <div class="visitor-topic-icon"><i class="{{ $section['icon'] }}"></i></div>
                        <span class="visitor-topic-kicker">{{ $section['eyebrow'] }}</span>
                        <h2 class="wvt-heading">{{ $section['heading'] }}</h2>
                        @if (!empty($section['content']))
                            <p class="wvt-lead m-t-15 m-b-0">{{ $section['content'] }}</p>
                        @endif
                    </div>
                </div>
            @elseif ($section['kind'] === 'panel')
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="visitor-topic-panel" data-aos="fade-up">
                            <span class="visitor-topic-kicker">{{ $section['eyebrow'] }}</span>
                            <h2 class="wvt-heading">{{ $section['heading'] }}</h2>
                            @if (!empty($section['content']))
                                <p class="wvt-lead m-t-15 m-b-0">{{ $section['content'] }}</p>
                            @endif
                            <div class="visitor-topic-panel__steps" aria-hidden="true">
                                <span>Purpose</span>
                                <span>Profile</span>
                                <span>Documents</span>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($section['kind'] === 'points')
                <div class="row justify-content-center">
                    <div class="col-xl-10 text-center" data-aos="fade-up">
                        <span class="visitor-topic-kicker">{{ $section['eyebrow'] }}</span>
                        <h2 class="wvt-heading">{{ $section['heading'] }}</h2>
                        @if (!empty($section['content']))
                            <p class="wvt-lead m-t-15 m-b-0">{{ $section['content'] }}</p>
                        @endif
                    </div>
                </div>
                @if (!empty($section['points']))
                    <div class="visitor-topic-point-grid" data-aos="fade-up" data-aos-delay="100">
                        @foreach ($section['points'] as $point)
                            <div class="visitor-topic-point">
                                <i class="fa-solid fa-check" aria-hidden="true"></i>
                                <span>{{ $point }}</span>
                            </div>
                        @endforeach
                    </div>
                @endif
            @elseif ($section['kind'] === 'warnings')
                <div class="visitor-topic-warning-grid" data-aos="fade-up">
                    <div class="visitor-topic-warning-intro">
                        <div class="visitor-topic-icon"><i class="{{ $section['icon'] }}"></i></div>
                        <span class="visitor-topic-kicker">{{ $section['eyebrow'] }}</span>
                        <h2 class="wvt-heading">{{ $section['heading'] }}</h2>
                        @if (!empty($section['content']))
                            <p class="wvt-lead m-t-15 m-b-0">{{ $section['content'] }}</p>
                        @endif
                    </div>
                    @if (!empty($section['points']))
                    <div class="visitor-topic-warning-list">
                        @foreach ($section['points'] as $point)
                            <div class="visitor-topic-warning">
                                <strong>{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</strong>
                                <span>{{ $point }}</span>
                            </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            @elseif ($section['kind'] === 'support')
                <div class="visitor-topic-support" data-aos="fade-up">
                    <div class="row g-0 align-items-stretch">
                        <div class="col-lg-5">
                            <div class="visitor-topic-support__image">
                                <img src="{{ asset($section['image']) }}" alt="{{ $section['heading'] }}" loading="lazy">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="visitor-topic-support__copy">
                                <span class="visitor-topic-kicker">{{ $section['eyebrow'] }}</span>
                                <h2 class="wvt-heading">{{ $section['heading'] }}</h2>
                                @if (!empty($section['content']))
                                    <p class="wvt-lead m-t-15 m-b-0">{{ $section['content'] }}</p>
                                @endif
                                @if (!empty($section['cta']))
                                    <div class="m-t-25">
                                        <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                                            {{ $section['cta'] }}
                                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($section['kind'] === 'story')
                <div class="visitor-topic-story" data-aos="fade-up">
                    <div class="visitor-topic-story__mark" style="--story-image: url('{{ asset($section['image']) }}');">
                        <span><i class="{{ $section['icon'] }}"></i></span>
                    </div>
                    <div class="visitor-topic-story__copy">
                        <span class="visitor-topic-kicker">{{ $section['eyebrow'] }}</span>
                        <h2 class="wvt-heading">{{ $section['heading'] }}</h2>
                        @if (!empty($section['content']))
                            <p class="wvt-lead m-t-15 m-b-0">{{ $section['content'] }}</p>
                        @endif
                    </div>
                </div>
            @else
                <div class="row align-items-center g-4 g-lg-5{{ !empty($section['reverse']) ? ' flex-lg-row-reverse' : '' }}">
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="visitor-topic-card">
                            <div class="visitor-topic-icon"><i class="{{ $section['icon'] }}"></i></div>
                            <span class="visitor-topic-kicker">{{ $section['eyebrow'] }}</span>
                            <h2 class="wvt-heading">{{ $section['heading'] }}</h2>
                            @if (!empty($section['content']))
                                <p class="wvt-lead m-t-15 m-b-0">{{ $section['content'] }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="visitor-topic-media">
                            <img src="{{ asset($section['image']) }}" alt="{{ $section['heading'] }}" loading="lazy">
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endforeach

@else
<section class="wvt-intro-band" aria-labelledby="wvt-intro-panel-title">
    <div class="wvt-intro-band__bg" style="background-image: url('{{ asset($heroImg) }}');" aria-hidden="true"></div>
    <div class="wvt-intro-band__tint" aria-hidden="true"></div>
    <div class="container">
        <div class="wvt-intro-band__card{{ $introShowsSuitForMerged ? ' wvt-intro-band__card--suit' : '' }}" data-aos="fade-up">
            <div class="row g-0 align-items-stretch{{ $introShowsSuitForMerged ? ' wvt-intro-band__row--suit' : '' }}">
                <div class="col-lg-6 wvt-intro-collage-wrap d-flex flex-column">
                    <figure class="wvt-intro-visual" data-aos="fade-up">
                        <img src="{{ asset($introSingleImg) }}" alt="{{ $page['label'] }}" loading="lazy" width="720" height="720">
                    </figure>
                </div>
                <div class="col-lg-6 wvt-intro-text-col">
                    <div class="wvt-intro-panel{{ $introShowsSuitForMerged ? ' wvt-intro-panel--suit' : '' }}">
                        <p class="wvt-intro-panel__label">{{ $introPanelLabel }}</p>
                        <h2 class="wvt-intro-panel__title" id="wvt-intro-panel-title">{{ $introPanelTitle }}</h2>
                        @if ($introPanelBody !== '')
                            <p class="wvt-intro-panel__body">{{ $introPanelBody }}</p>
                        @endif
                        @if ($introShowsSuitForMerged && !empty($page['suit']['points']))
                            <div class="wvt-intro-fit-block">
                                <div class="wvt-intro-fit-block__head">
                                    <span class="wvt-intro-fit-block__ico" aria-hidden="true"><i class="fa-light fa-clipboard-list"></i></span>
                                    <p class="wvt-intro-fit-block__title">Key applicant profile</p>
                                </div>
                                <div class="wvt-intro-fit-grid">
                                    @foreach ($page['suit']['points'] as $point)
                                        <div class="wvt-intro-fit-chip" data-aos="fade-up" data-aos-delay="{{ min(40 + $loop->index * 40, 280) }}">
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            <span>{{ $point }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        @if (!$introShowsSuitForMerged && !empty($page['hero']['cta']))
                            <a class="e-primary-btn has-icon" href="{{ url('book-appointment') }}">
                                {{ $page['hero']['cta'] }}
                                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if (!empty($page['suit']) && !empty($page['planning']))
@php $wvtSectionIndex += 2; @endphp
<section class="wvt-suit-planning-stack wvt-suit-planning-stack--planning-only" aria-label="{{ $page['planning']['heading'] ?? 'Planning' }}">
    <div class="wvt-stack-overlap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="wvt-planning-stack-card" data-aos="fade-up" data-aos-delay="40">
                        <div class="row align-items-center g-4 g-lg-5">
                            <div class="col-md-7 col-lg-8 order-2 order-md-1">
                                <div class="wvt-planning-copy">
                                    @if (!empty($page['planning']['eyebrow']))
                                        <span class="wvt-planning-copy__eyebrow">{{ $page['planning']['eyebrow'] }}</span>
                                    @else
                                        <span class="wvt-planning-copy__eyebrow">Planning</span>
                                    @endif
                                    <h2 class="wvt-heading wvt-planning-copy__title">{{ $page['planning']['heading'] ?? '' }}</h2>
                                    <div class="wvt-planning-copy__panel">
                                        <p class="wvt-lead m-b-0">{{ $page['planning']['content'] ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-4 order-1 order-md-2 text-center text-md-end">
                                <div class="wvt-planning-visual-shell" data-aos="fade-up" data-aos-delay="20">
                                    <figure class="wvt-stack-overlap-visual">
                                        <img src="{{ asset($stackSectionImg) }}" alt="" loading="lazy" width="480" height="480">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@else
@if (!empty($page['suit']))
@php $wvtSectionIndex++; @endphp
<section class="wvt-topic-section {{ $wvtSectionIndex % 2 === 1 ? 'wvt-band-dark' : 'wvt-band-light' }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="why-us-content-2">
                    <div class="common-subtitle text-uppercase justify-content-center" data-aos="fade-up"><span>Fit &amp; suitability</span></div>
                    <div class="common-title text-center m-b-15" data-aos="fade-up" data-aos-delay="60">
                        <h2>{{ $page['suit']['heading'] ?? '' }}</h2>
                    </div>
                </div>
                @if (!empty($page['suit']['content']))
                    <p class="wvt-lead text-center m-b-0" data-aos="fade-up" data-aos-delay="100">{{ $page['suit']['content'] }}</p>
                @endif
                @if (!empty($page['suit']['points']))
                    <div class="wvt-point-grid" data-aos="fade-up" data-aos-delay="140">
                        @foreach ($page['suit']['points'] as $point)
                            <div class="wvt-point-card">
                                <div class="wvt-point-ico" aria-hidden="true"><i class="fa-solid fa-check"></i></div>
                                <p>{{ $point }}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endif

@if (!empty($page['planning']))
@php $wvtSectionIndex++; @endphp
<section class="wvt-topic-section {{ $wvtSectionIndex % 2 === 1 ? 'wvt-band-dark' : 'wvt-band-light' }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10" data-aos="fade-up">
                <div class="wvt-planning-rail">
                    @if (!empty($page['planning']['eyebrow']))
                        <div class="common-subtitle text-uppercase m-b-10"><span>{{ $page['planning']['eyebrow'] }}</span></div>
                    @else
                        <div class="common-subtitle text-uppercase m-b-10"><span>Planning</span></div>
                    @endif
                    <div class="common-title m-b-0">
                        <h2 class="wvt-heading m-b-0">{{ $page['planning']['heading'] ?? '' }}</h2>
                    </div>
                    <div class="wvt-planning-panel">
                        <p class="wvt-lead m-b-0">{{ $page['planning']['content'] ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endif

@if (!empty($page['strategy']) || !empty($page['challenges']))
@php
    $wvtStrategyHasPoints = !empty($page['strategy']['points'] ?? []);
@endphp

@if ($wvtStrategyHasPoints)
    @php $wvtSectionIndex++; @endphp
    <section class="wvt-topic-section wvt-band-light wvt-section-challenges wvt-reality-standalone wvt-section-strategy-points" aria-labelledby="wvt-strategy-points-heading">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="wvt-pair-col wvt-pair-col--challenges">
                        <div class="wvt-reality-head text-center text-lg-start mx-auto ms-lg-0 me-lg-0" data-aos="fade-up">
                            <div class="common-subtitle text-uppercase justify-content-center justify-content-lg-start m-b-10"><span>{{ $page['strategy']['eyebrow'] ?? 'Approach' }}</span></div>
                            @if (!empty($page['strategy']['heading']))
                                <h2 id="wvt-strategy-points-heading" class="wvt-heading m-b-0 text-center text-lg-start">{{ $page['strategy']['heading'] ?? '' }}</h2>
                            @endif
                            @if (!empty($page['strategy']['content']))
                                <p class="wvt-reality-lead text-center text-lg-start">{{ $page['strategy']['content'] }}</p>
                            @endif
                        </div>
                        <div class="wvt-challenge-grid" data-aos="fade-up" data-aos-delay="80">
                            @foreach ($page['strategy']['points'] as $point)
                                <div class="wvt-challenge-card" data-aos="fade-up" data-aos-delay="{{ min(40 + $loop->index * 35, 260) }}">
                                    <i class="fa-solid fa-check" aria-hidden="true"></i>
                                    <span>{{ $point }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (!empty($page['extraSections']))
        @foreach ($page['extraSections'] as $extraSection)
            @php $wvtSectionIndex++; @endphp
            <section class="wvt-topic-section {{ $wvtSectionIndex % 2 === 1 ? 'wvt-band-dark' : 'wvt-band-light' }}">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10" data-aos="fade-up">
                            <div class="wvt-planning-rail">
                                <div class="common-subtitle text-uppercase m-b-10"><span>{{ $extraSection['eyebrow'] ?? 'Guidance' }}</span></div>
                                <div class="common-title m-b-0">
                                    <h2 class="wvt-heading m-b-0">{{ $extraSection['heading'] ?? '' }}</h2>
                                </div>
                                @if (!empty($extraSection['content']))
                                    <div class="wvt-planning-panel">
                                        <p class="wvt-lead m-b-0">{{ $extraSection['content'] }}</p>
                                    </div>
                                @endif
                                @if (!empty($extraSection['points']))
                                    <div class="wvt-point-grid" data-aos="fade-up" data-aos-delay="80">
                                        @foreach ($extraSection['points'] as $point)
                                            <div class="wvt-point-card">
                                                <div class="wvt-point-ico" aria-hidden="true"><i class="fa-solid fa-check"></i></div>
                                                <p>{{ $point }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    @endif

    @if (!empty($page['challenges']['heading']) || !empty($page['challenges']['content']) || !empty($page['challenges']['points']))
        @php $wvtSectionIndex++; @endphp
        <section class="wvt-topic-section wvt-band-light wvt-section-challenges wvt-reality-standalone" aria-labelledby="wvt-challenges-narrative-heading">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <div class="wvt-pair-col wvt-pair-col--challenges">
                            @if (!empty($page['challenges']['heading']) || !empty($page['challenges']['content']))
                                <div class="wvt-reality-head text-center text-lg-start mx-auto ms-lg-0 me-lg-0" data-aos="fade-up">
                                    <div class="common-subtitle text-uppercase justify-content-center justify-content-lg-start m-b-10"><span>{{ $page['challenges']['eyebrow'] ?? 'Reality check' }}</span></div>
                                    @if (!empty($page['challenges']['heading']))
                                        <h2 id="wvt-challenges-narrative-heading" class="wvt-heading m-b-0 text-center text-lg-start">{{ $page['challenges']['heading'] ?? '' }}</h2>
                                    @endif
                                    @if (!empty($page['challenges']['content']))
                                        <p class="wvt-reality-lead text-center text-lg-start">{{ $page['challenges']['content'] }}</p>
                                    @endif
                                </div>
                            @endif
                            @if (!empty($page['challenges']['points']))
                                <div class="wvt-challenge-grid" data-aos="fade-up" data-aos-delay="80">
                                    @foreach ($page['challenges']['points'] as $point)
                                        <div class="wvt-challenge-card" data-aos="fade-up" data-aos-delay="{{ min(40 + $loop->index * 35, 260) }}">
                                            <i class="fa-solid fa-check" aria-hidden="true"></i>
                                            <span>{{ $point }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

@else

@if (!empty($page['strategy']))
@php $wvtSectionIndex++; @endphp
<section class="wvt-topic-section wvt-band-dark wvt-section-strategy wvt-approach-split" aria-labelledby="wvt-approach-heading">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-11">
                <div class="wvt-pair-col wvt-pair-col--strategy">
                    <div class="wvt-strategy-figure" data-aos="fade-up">
                        <img src="{{ asset($strategyImg) }}" alt="{{ $page['strategy']['heading'] ?? 'Work visa strategy planning' }}" loading="lazy">
                    </div>
                    <div class="wvt-approach-copy" data-aos="fade-up">
                        <div class="common-subtitle text-uppercase m-b-10"><span>Approach</span></div>
                        <h2 id="wvt-approach-heading" class="wvt-heading wvt-approach-copy__title m-b-0">{{ $page['strategy']['heading'] ?? '' }}</h2>
                        @if (!empty($page['strategy']['content']))
                            <p class="wvt-approach-copy__lead m-t-10">{{ $page['strategy']['content'] }}</p>
                        @endif
                    </div>
                    @if (!empty($page['strategy']['points']))
                        <div class="wvt-strategy-grid" data-aos="fade-up" data-aos-delay="60">
                            @foreach ($page['strategy']['points'] as $point)
                                <div class="wvt-strategy-card" data-aos="fade-up" data-aos-delay="{{ min(40 + $loop->index * 40, 280) }}">
                                    <span class="wvt-strategy-card__num">{{ str_pad((string) ($loop->iteration), 2, '0', STR_PAD_LEFT) }}</span>
                                    <p>{{ $point }}</p>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if (!empty($page['extraSections']))
    @foreach ($page['extraSections'] as $extraSection)
        @php $wvtSectionIndex++; @endphp
        <section class="wvt-topic-section {{ $wvtSectionIndex % 2 === 1 ? 'wvt-band-dark' : 'wvt-band-light' }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10" data-aos="fade-up">
                        <div class="wvt-planning-rail">
                            <div class="common-subtitle text-uppercase m-b-10"><span>{{ $extraSection['eyebrow'] ?? 'Guidance' }}</span></div>
                            <div class="common-title m-b-0">
                                <h2 class="wvt-heading m-b-0">{{ $extraSection['heading'] ?? '' }}</h2>
                            </div>
                            @if (!empty($extraSection['content']))
                                <div class="wvt-planning-panel">
                                    <p class="wvt-lead m-b-0">{{ $extraSection['content'] }}</p>
                                </div>
                            @endif
                            @if (!empty($extraSection['points']))
                                <div class="wvt-point-grid" data-aos="fade-up" data-aos-delay="80">
                                    @foreach ($extraSection['points'] as $point)
                                        <div class="wvt-point-card">
                                            <div class="wvt-point-ico" aria-hidden="true"><i class="fa-solid fa-check"></i></div>
                                            <p>{{ $point }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endif

@if (!empty($page['challenges']))
@php $wvtSectionIndex++; @endphp
<section class="wvt-topic-section wvt-band-light wvt-section-challenges wvt-reality-standalone" aria-labelledby="wvt-reality-heading">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <div class="wvt-pair-col wvt-pair-col--challenges">
                    <div class="wvt-reality-head text-center text-lg-start mx-auto ms-lg-0 me-lg-0" data-aos="fade-up">
                        <div class="common-subtitle text-uppercase justify-content-center justify-content-lg-start m-b-10"><span>Reality check</span></div>
                        <h2 id="wvt-reality-heading" class="wvt-heading m-b-0 text-center text-lg-start">{{ $page['challenges']['heading'] ?? '' }}</h2>
                        @if (!empty($page['challenges']['content']))
                            <p class="wvt-reality-lead text-center text-lg-start">{{ $page['challenges']['content'] }}</p>
                        @endif
                    </div>
                    @if (!empty($page['challenges']['points']))
                        <div class="wvt-challenge-grid" data-aos="fade-up" data-aos-delay="80">
                            @foreach ($page['challenges']['points'] as $point)
                                <div class="wvt-challenge-card" data-aos="fade-up" data-aos-delay="{{ min(40 + $loop->index * 35, 260) }}">
                                    <i class="fa-solid fa-check" aria-hidden="true"></i>
                                    <span>{{ $point }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@endif

@endif
@endif

@if (!$isVisitorVisaTopic && !empty($page['support']))
@php $wvtSectionIndex++; @endphp
<section class="wvt-topic-section {{ $wvtSectionIndex % 2 === 1 ? 'wvt-band-dark' : 'wvt-band-light' }}">
    <div class="container">
        <div class="row align-items-center g-4 flex-lg-row-reverse">
            <div class="col-lg-6" data-aos="fade-up">
                <div class="common-subtitle text-uppercase m-b-10"><span>Support</span></div>
                <h2 class="wvt-heading">{{ $page['support']['heading'] ?? '' }}</h2>
                <p class="wvt-lead m-t-15 m-b-0">{{ $page['support']['content'] ?? '' }}</p>
                @if (!empty($page['support']['cta']))
                    <div class="m-t-25">
                        <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                            {{ $page['support']['cta'] }}
                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                        </a>
                    </div>
                @endif
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="wvt-support-figure">
                    <img src="{{ asset($supportImg) }}" alt="" loading="lazy" width="640" height="420">
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if ($showCtaBeforeTestimonials)
    @include('partials.commonCta', [
        'ctaEyebrow' => $page['bottom']['cta']['eyebrow'] ?? 'Plan before you apply',
        'ctaHeading' => $page['bottom']['cta']['heading'] ?? 'Not sure which work visa pathway fits your profile?',
        'ctaLead' => $page['bottom']['cta']['lead'] ?? 'Speak to Visawizer and get a clearer view of your skilled, sponsored, regional, training, or innovation visa options.',
        'ctaPrimaryLabel' => $page['bottom']['cta']['primaryLabel'] ?? 'Book Work Visa Consultation',
        'ctaPrimaryUrl' => $page['bottom']['cta']['primaryUrl'] ?? url('book-appointment'),
        'ctaSecondaryLabel' => $page['bottom']['cta']['secondaryLabel'] ?? 'Contact Visawizer',
        'ctaSecondaryUrl' => $page['bottom']['cta']['secondaryUrl'] ?? url('contact-us'),
    ])
@endif

<div class="wvt-page-bottom-stack">
    @include('partials.testi', [
        'testiIntroP1' => $page['bottom']['testimonials']['intro1'] ?? 'Hear from clients who trusted Visawizer with skilled migration, employer sponsorship, documentation readiness, and long-term settlement planning.',
        'testiIntroP2' => $page['bottom']['testimonials']['intro2'] ?? 'Trusted feedback from people who needed clear pathway comparisons—not generic advice—before committing to an application strategy.',
    ])
</div>

@if (!$showCtaBeforeTestimonials)
    @include('partials.commonCta', [
        'ctaEyebrow' => $page['bottom']['cta']['eyebrow'] ?? 'Plan before you apply',
        'ctaHeading' => $page['bottom']['cta']['heading'] ?? 'Not sure which work visa pathway fits your profile?',
        'ctaLead' => $page['bottom']['cta']['lead'] ?? 'Speak to Visawizer and get a clearer view of your skilled, sponsored, regional, training, or innovation visa options.',
        'ctaPrimaryLabel' => $page['bottom']['cta']['primaryLabel'] ?? 'Book Work Visa Consultation',
        'ctaPrimaryUrl' => $page['bottom']['cta']['primaryUrl'] ?? url('book-appointment'),
        'ctaSecondaryLabel' => $page['bottom']['cta']['secondaryLabel'] ?? 'Contact Visawizer',
        'ctaSecondaryUrl' => $page['bottom']['cta']['secondaryUrl'] ?? url('contact-us'),
    ])
@endif

@include('partials.faq')
@include('partials.blogs')

</div>
@endsection
