@extends('layouts.frontend')
@section('content')
@include('partials.studyPageStyles')

<style type="text/css">
/* ev462-page — layout & styling (inlined from event-462-webinar.css) */
.ev462-page {
    --ev462-dark: #07111f;
    --ev462-dark-2: #10243a;
    --ev462-accent: var(--theme-color-3);
    --ev462-gold: #d7a642;
    --ev462-border: rgba(15, 23, 42, 0.1);
    --ev462-eyebrow: 0.78rem;
    --ev462-body: 0.95rem;
    --ev462-body-line: 1.62;
    --ev462-heading-2: clamp(1.5rem, 2.4vw, 1.85rem);
    --ev462-heading-3: clamp(1.2rem, 2vw, 1.35rem);
}

/* Uniform typography across the page */
.ev462-page p,
.ev462-page .visa-lead,
.ev462-page .study-copy-body,
.ev462-page .study-copy-sub,
.ev462-page .study-grad-sub,
.ev462-page .ev462-innovation-banner__content > p,
.ev462-page .ev462-innovation-banner__sub,
.ev462-page .ev462-innovation-banner__trust li,
.ev462-page .ev462-innovation-banner__trust-label,
.ev462-page .ev462-s5-support-intro,
.ev462-page .study-s5-visa .visa-lead,
.ev462-page .ev462-s5-band .study-support-list li,
.ev462-page .study-support-list li,
.ev462-page .ev462-faq-item .study-copy-sub,
.ev462-page .ev462-faq-item .study-copy-body,
.ev462-page .ev462-fee .study-copy-body,
.ev462-page .ev462-agenda-band .study-s4-intro,
.ev462-page .ev462-agenda-item__body h4,
.ev462-page .ev462-agenda-item__time {
    font-size: var(--ev462-body);
    line-height: var(--ev462-body-line);
}

.ev462-page .details-title h2,
.ev462-page .common-title h2,
.ev462-page .ev462-why-split__header h2,
.ev462-page .study-s5-intro-card .common-title h2,
.ev462-page .ev462-innovation-banner__content h2,
.ev462-page .ev462-agenda-band .common-title h2 {
    font-size: var(--ev462-heading-2);
    line-height: 1.22;
}

.ev462-page .ev462-innovation-banner__mid-title {
    font-size: var(--ev462-heading-3);
    line-height: 1.3;
}

.ev462-page .common-subtitle span,
.ev462-page .ev462-why-split__header .bg-p,
.ev462-page .study-s5-intro-card .common-subtitle span,
.ev462-page .ev462-agenda-band .bg-p {
    font-size: var(--ev462-eyebrow);
}

.ev462-page .ev462-s5-band .study-s5-support-heading,
.ev462-page .ev462-speaker-share h4 {
    font-size: var(--ev462-body);
}

.ev462-page .detail-sidebar.ev462-speaker-card .organizer-info-wrap .date p,
.ev462-page .detail-sidebar.ev462-speaker-card .organizer-info-wrap .location p,
.ev462-page .detail-sidebar.ev462-speaker-card .organizer-info-wrap .text p,
.ev462-page .count-down-date p {
    font-size: var(--ev462-body);
    line-height: var(--ev462-body-line);
}

.ev462-page .detail-sidebar.ev462-speaker-card .organizer-info-wrap .name h3,
.ev462-page .detail-sidebar.ev462-speaker-card .s-widget-wrap .w-title h3 {
    font-size: var(--ev462-heading-3);
    line-height: 1.3;
}

.ev462-page .ev462-why-split .study-grad-card .study-grad-sub,
.ev462-page .ev462-content .visa-highlight,
.ev462-page .study-s5-visa .visa-lead.visa-highlight {
    font-size: var(--ev462-body);
    line-height: var(--ev462-body-line);
}

.ev462-page .ev462-why-split .study-grad-card .study-grad-sub {
    font-weight: 500;
}

.ev462-page .ev462-content .visa-highlight,
.ev462-page .study-s5-visa .visa-lead.visa-highlight {
    font-weight: 600;
}

.ev462-page .ev462-hero-row {
    align-items: stretch;
    margin-bottom: 28px;
}

.ev462-page .ev462-hero-main {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.ev462-page .ev462-hero-thumb {
    flex: 1 1 auto;
    min-height: 480px;
    margin-bottom: 20px;
    overflow: hidden;
    display: flex;
    border-radius: 10px;
}

.ev462-page .ev462-hero-thumb img {
    width: 100%;
    height: 100%;
    min-height: 480px;
    object-fit: cover;
    object-position: center;
    border-radius: 10px;
}

@media (max-width: 991px) {
    .ev462-page .ev462-hero-thumb {
        min-height: 320px;
    }

    .ev462-page .ev462-hero-thumb img {
        min-height: 320px;
    }
}

.ev462-page .ev462-speaker-card .s-widget-wrap {
    background: #e5e5e5;
    height: 100%;
}

.ev462-page .ev462-speaker-card .organizer-info-wrap .thumb {
    max-width: 120px;
    height: 120px;
}

.ev462-page .ev462-speaker-card .organizer-info-wrap .date,
.ev462-page .ev462-speaker-card .organizer-info-wrap .location {
    justify-content: left;
}

/* Share — inside speaker card */
.ev462-page .ev462-speaker-share {
    margin-top: 18px;
    padding-top: 18px;
    border-top: 1px solid rgba(15, 23, 42, 0.1);
}

.ev462-page .ev462-speaker-share h4 {
    margin: 0 0 12px;
    font-weight: 600;
    color: var(--theme-color-3);
}

.ev462-page .ev462-speaker-share .social-links {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.ev462-page .ev462-speaker-share .social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    border-radius: 10px;
    background: #fff;
    color: var(--body-color);
    transition: transform 0.2s ease, background 0.2s ease, color 0.2s ease;
}

.ev462-page .ev462-speaker-share .social-links a:hover {
    transform: translateY(-2px);
    background: var(--ev462-accent);
    color: #fff;
}

/* Full-width body */
.ev462-page .ev462-body {
    width: 100%;
    max-width: 100%;
}

.ev462-page .ev462-content {
    background: #fff;
    border-radius: 12px;
    padding: clamp(22px, 3vw, 32px) clamp(20px, 3vw, 32px);
    border: 1px solid rgba(226, 232, 240, 0.9);
    box-shadow: 0 20px 50px rgba(15, 23, 42, 0.07);
    margin-bottom: 0;
}

.ev462-page .ev462-section {
    padding-bottom: clamp(20px, 2.5vw, 28px);
    margin-bottom: clamp(20px, 2.5vw, 28px);
    border-bottom: 1px solid #e2e8f0;
}

.ev462-page .ev462-section:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.ev462-page .ev462-content .common-subtitle {
    justify-content: flex-start;
    margin-bottom: 12px;
}

.ev462-page .ev462-content .common-subtitle span {
    letter-spacing: 0.14em;
    color: #64748b;
    font-weight: 600;
}

.ev462-page .ev462-content .common-title h2 {
    color: #0f172a;
    margin-bottom: 0;
}

.ev462-page .ev462-content .study-copy-sub {
    color: #334155;
}

.ev462-page .ev462-content .study-copy-body {
    color: #475569;
}

.ev462-page .ev462-content .visa-lead {
    color: #475569;
    margin-bottom: 0;
    font-weight: 400;
}

.ev462-page .ev462-content .visa-highlight {
    font-weight: 600;
    color: #0f172a;
    padding: 18px 20px;
    border-radius: 10px;
    background: color-mix(in srgb, var(--theme-color-3) 7%, #f8fafc);
    border-left: 4px solid var(--theme-color-3);
}

.ev462-page .ev462-fee {
    margin-top: 14px;
    padding: 22px 24px;
    border-radius: 10px;
    background: linear-gradient(135deg, var(--theme-color-3) 0%, color-mix(in srgb, var(--theme-color-3) 75%, #0f172a) 100%);
    color: #fff;
}

.ev462-page .ev462-fee .ev462-fee-old {
    font-size: 0.94rem;
    opacity: 0.85;
    text-decoration: line-through;
    margin-bottom: 4px;
}

.ev462-page .ev462-fee .ev462-fee-new {
    font-size: clamp(1.35rem, 2.2vw, 1.75rem);
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 10px;
}

.ev462-page .ev462-fee .study-copy-body {
    color: rgba(255, 255, 255, 0.9);
}

.ev462-page .ev462-faq-item {
    padding: 16px 0;
    border-bottom: 1px solid #e2e8f0;
}

.ev462-page .ev462-faq-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.ev462-page .ev462-faq-item .study-copy-sub {
    color: #0f172a;
    margin-bottom: 6px;
}

.ev462-page .ev462-band {
    margin-bottom: clamp(24px, 3vw, 36px);
}

.ev462-page .ev462-why-split {
    padding: 0;
}

.ev462-page .ev462-why-split__header {
    margin-bottom: clamp(20px, 3vw, 28px);
}

.ev462-page .ev462-why-split__header .bg-p {
    display: inline-block;
    margin-bottom: 14px;
    font-weight: 600;
}

.ev462-page .ev462-why-split__header h2 {
    font-weight: 700;
    color: #0f172a;
    margin: 0;
}

.ev462-page .ev462-why-split .study-grad-card {
    display: flex;
    flex-direction: column;
    height: 100%;
    padding: clamp(28px, 3vw, 40px) clamp(24px, 2.5vw, 36px);
}

.ev462-page .ev462-why-split .study-grad-card .study-grad-sub + .study-grad-sub {
    margin-top: 14px;
}

.ev462-page .ev462-why-split .study-grad-cta {
    margin-top: auto;
    padding-top: 20px;
}

.ev462-page .ev462-why-split__visual {
    margin: 0;
    display: flex;
    width: 100%;
    height: 100%;
    min-height: 260px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 24px 55px rgba(15, 23, 42, 0.14);
}

.ev462-page .ev462-why-split__visual img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 42%;
    display: block;
}

.ev462-page .ev462-s5-band.study-s5-visa {
    padding: 0;
    margin-bottom: clamp(24px, 3vw, 36px);
    background: transparent;
    overflow: visible;
}

.ev462-page .ev462-s5-band.study-s5-visa::before,
.ev462-page .ev462-s5-band.study-s5-visa::after {
    display: none;
}

.ev462-page .ev462-s5-band .study-s5-intro-card {
    padding: 26px 28px 22px;
}

.ev462-page .ev462-s5-band .study-s5-intro-card::before {
    top: 18px;
    bottom: 18px;
}

.ev462-page .ev462-s5-band .study-s5-intro-card .common-subtitle {
    margin-bottom: 6px;
}

.ev462-page .ev462-s5-band .study-s5-intro-card .common-title {
    margin-bottom: 6px !important;
}

.ev462-page .ev462-s5-band .study-s5-intro-card .common-title h2 {
    margin-bottom: 0;
}

.ev462-page .ev462-s5-band .study-s5-intro-card .visa-lead {
    margin-top: 4px !important;
}

.ev462-page .ev462-s5-band .study-s5-intro-card .ev462-s5-intro-list {
    margin: 0.5rem -28px 0;
    padding-top: 0;
    border-top: 1px solid #eef2f7;
}

.ev462-page .ev462-s5-band .study-s5-support-head {
    padding: 16px 24px 12px;
}

.ev462-page .ev462-s5-band .study-s5-support-card .ev462-s5-support-intro {
    margin: 0;
    padding: 10px 22px 2px;
    color: #475569;
    font-weight: 500;
}

.ev462-page .ev462-s5-band .study-support-list {
    padding: 2px 0 4px;
}

.ev462-page .ev462-s5-band .study-support-list li {
    padding: 10px 22px;
    gap: 12px;
    line-height: 1.4;
}

.ev462-page .ev462-s5-band .study-support-list li:hover {
    padding-left: 26px;
}

@media (max-width: 575px) {
    .ev462-page .ev462-s5-band .study-s5-intro-card {
        padding: 22px 20px 18px;
    }

    .ev462-page .ev462-s5-band .study-s5-intro-card .ev462-s5-intro-list {
        margin-left: -20px;
        margin-right: -20px;
    }
}

.ev462-page .ev462-innovation-band {
    padding: 0;
    margin-bottom: clamp(24px, 3vw, 36px);
}

.ev462-page .ev462-innovation-banner {
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

.ev462-page .ev462-innovation-banner__content {
    padding: clamp(14px, 2vw, 22px) clamp(18px, 2.5vw, 28px) clamp(22px, 3vw, 36px);
}

.ev462-page .ev462-innovation-banner__content h2 {
    margin: 0 0 10px;
    font-weight: 700;
    color: #0f172a;
    letter-spacing: -0.02em;
}

.ev462-page .ev462-innovation-banner__content .ev462-innovation-banner__sub {
    margin: 0;
    color: #475569;
    font-weight: 500;
}

.ev462-page .ev462-innovation-banner__mid-title {
    margin: 1rem 0 8px;
    font-weight: 700;
    color: #0f172a;
}

.ev462-page .ev462-innovation-banner__content > p {
    margin: 0 0 0.85rem;
    color: #64748b;
}

.ev462-page .ev462-innovation-banner__trust-label {
    margin: 14px 0 8px;
    font-weight: 700;
    color: #0f172a;
}

.ev462-page .ev462-innovation-banner__trust {
    list-style: none;
    padding: 0;
    margin: 0 0 4px;
    display: grid;
    grid-template-columns: repeat(5, minmax(0, 1fr));
    gap: 14px 18px;
}

.ev462-page .ev462-innovation-banner__trust li {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    color: #475569;
    margin-bottom: 0;
    font-weight: 500;
    line-height: 1.45;
}

.ev462-page .ev462-innovation-banner__trust li i {
    flex-shrink: 0;
    margin-top: 4px;
    font-size: 0.72rem;
    color: var(--theme-color-3);
}

@media (max-width: 1199px) {
    .ev462-page .ev462-innovation-banner__trust {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }
}

@media (max-width: 767px) {
    .ev462-page .ev462-innovation-banner__trust {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 575px) {
    .ev462-page .ev462-innovation-banner__trust {
        grid-template-columns: 1fr;
    }
}

.ev462-page .ev462-innovation-banner__cta {
    margin-top: 1.1rem;
}

.ev462-page .ev462-agenda-band {
    padding: clamp(28px, 3.5vw, 44px) clamp(16px, 2vw, 24px);
    margin-bottom: clamp(24px, 3vw, 36px);
    border-radius: 12px;
}

.ev462-page .ev462-agenda-band .section-top-9 {
    margin-bottom: 0;
}

.ev462-page .ev462-agenda-band .section-top-9 .common-title h2 {
    color: #f8fafc;
}

.ev462-page .ev462-agenda-track {
    display: grid;
    grid-template-columns: repeat(5, minmax(0, 1fr));
    gap: 10px;
    max-width: 100%;
    margin: 18px auto 0;
    padding: 0;
    position: relative;
}

.ev462-page .ev462-agenda-track::before {
    content: '';
    position: absolute;
    left: 8%;
    right: 8%;
    top: 20px;
    height: 2px;
    border-radius: 999px;
    background: linear-gradient(90deg, var(--theme-color-3), rgba(148, 163, 184, 0.35));
    pointer-events: none;
}

.ev462-page .ev462-agenda-item {
    position: relative;
    display: flex;
    flex-direction: column;
    height: 100%;
    padding: 12px 10px 14px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.97);
    border: 1px solid rgba(255, 255, 255, 0.65);
    border-top: 3px solid var(--theme-color-3);
    box-shadow: 0 10px 28px rgba(0, 0, 0, 0.16);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.ev462-page .ev462-agenda-item::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 14px;
    transform: translateX(-50%);
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: var(--theme-color-3);
    border: 2px solid #1d2a40;
    box-shadow: 0 0 0 2px color-mix(in srgb, var(--theme-color-3) 35%, transparent);
}

.ev462-page .ev462-agenda-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 34px rgba(0, 0, 0, 0.2);
}

.ev462-page .ev462-agenda-item__head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 6px;
    margin-top: 14px;
    margin-bottom: 8px;
}

.ev462-page .ev462-agenda-item__no {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 30px;
    height: 24px;
    padding: 0 8px;
    border-radius: 6px;
    background: color-mix(in srgb, var(--theme-color-3) 12%, #fff);
    color: var(--theme-color-3);
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.05em;
}

.ev462-page .ev462-agenda-item__icon {
    flex-shrink: 0;
    width: 32px;
    height: 32px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.95rem;
    color: var(--theme-color-3);
    background: color-mix(in srgb, var(--theme-color-3) 10%, #fff);
    border: 1px solid color-mix(in srgb, var(--theme-color-3) 18%, transparent);
}

.ev462-page .ev462-agenda-item__time {
    display: block;
    color: var(--theme-color-3);
    font-weight: 700;
    margin-bottom: 8px;
}

.ev462-page .ev462-agenda-item__time i {
    margin-right: 4px;
    font-size: 0.75rem;
}

.ev462-page .ev462-agenda-item__body h4 {
    margin: 0;
    font-weight: 700;
    color: #0f172a;
}

@media (max-width: 1199px) {
    .ev462-page .ev462-agenda-track {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }
    .ev462-page .ev462-agenda-track::before {
        display: none;
    }
    .ev462-page .ev462-agenda-item::before {
        display: none;
    }
    .ev462-page .ev462-agenda-item__head {
        margin-top: 0;
    }
}

@media (max-width: 767px) {
    .ev462-page .ev462-agenda-track {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        gap: 10px;
        padding-bottom: 4px;
        -webkit-overflow-scrolling: touch;
    }
    .ev462-page .ev462-agenda-item {
        flex: 0 0 min(78vw, 220px);
        scroll-snap-align: start;
    }
}

.ev462-page .ev462-fee-cta {
    margin-top: 18px;
}

.ev462-page .services-details-section {
    margin-bottom: clamp(20px, 3vw, 10px) !important;
    padding-bottom: clamp(12px, 2vw, 20px) !important;
}

.ev462-page .contact-form-3 {
    margin-top: clamp(24px, 3vw, 40px);
    margin-bottom: 0;
    border-radius: 12px;
    box-shadow: 0 24px 58px rgba(0, 69, 64, 0.22);
}

.ev462-page .contact-form-3 p {
    max-width: 100%;
}

.ev462-page #eventForm .text-danger,
.ev462-page textarea.form-control,
.ev462-page .form-control {
    color: #fff !important;
}

@media (max-width: 767px) {
    .ev462-page .ev462-content {
        padding: 24px 20px;
    }
}
</style>

@php
    $daysLeft = \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($event->start_date), false);
    $shareUrl = urlencode(url()->current());
    $shareTitle = urlencode($event->title);

    $audiences = [
        'Young applicants planning to apply for the 462 Work and Holiday Visa',
        'Indian applicants who want to understand the ballot process',
        'Parents who want clarity before supporting their child’s application',
        'Students and graduates exploring short-term Australia options',
        'Applicants confused about documents, timing and eligibility',
        'Anyone who wants to understand the difference between travel, work and long-term migration planning',
    ];

    $learnItems = [
        'What the 462 Work and Holiday Visa is',
        'Who can apply for the visa',
        'Age, passport and location requirements',
        'What the ballot process means',
        'What documents may be required',
        'Common reasons applicants make mistakes',
        'What to do after selection',
        'Whether this visa can support future Australia planning',
        'When to consult a registered migration agent',
    ];

    $agenda = [
        ['time' => '5:00 PM – 5:10 PM Melbourne Time', 'topic' => 'Introduction to the 462 Visa Pathway', 'icon' => 'fa-light fa-route'],
        ['time' => '5:10 PM – 5:25 PM', 'topic' => 'Eligibility, Age, Passport and Location Requirements', 'icon' => 'fa-light fa-passport'],
        ['time' => '5:25 PM – 5:40 PM', 'topic' => 'Ballot Process and Preparation Steps', 'icon' => 'fa-light fa-ticket'],
        ['time' => '5:40 PM – 5:50 PM', 'topic' => 'Documents, Mistakes and Practical Warnings', 'icon' => 'fa-light fa-file-circle-exclamation'],
        ['time' => '5:50 PM – 6:00 PM', 'topic' => 'Live Q&A with ' . $event->speaker, 'icon' => 'fa-light fa-comments'],
    ];

    $trustPoints = [
        'Melbourne-based visa guidance',
        'Speaker-led session by ' . $event->speaker,
        'Practical explanation in simple language',
        'Focus on document readiness and mistake prevention',
        'Suitable for Indian and international applicants',
    ];

    $faqs = [
        ['q' => 'Is this a personalised consultation?', 'a' => 'No. This is a group awareness webinar. Personalised consultation can be booked separately with Visa Wizer.'],
        ['q' => 'Will attending guarantee ballot selection or visa grant?', 'a' => 'No. The webinar explains the process and preparation points. It does not guarantee selection, invitation or visa outcome.'],
        ['q' => 'Is the webinar useful for Indian applicants?', 'a' => 'Yes. The session will include a special focus on Indian applicants and the ballot process.'],
        ['q' => 'Will I be able to ask questions?', 'a' => 'Yes. A short Q&A section will be included at the end of the session.'],
        ['q' => 'Can parents attend?', 'a' => 'Yes. Parents who want to understand the pathway before supporting the applicant are welcome to attend.'],
    ];
@endphp

@include('partials.breadcrumb')

<div class="ev462-page">
    <section class="services-details-section p-t-120 p-t-lg-80 p-t-md-80 p-t-xs-60">
        <div class="container">
            {{-- Top: image + speaker --}}
            <div class="row ev462-hero-row g-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="col-lg-8 ev462-hero-main">
                    <div class="thumb-wrap ev462-hero-thumb">
                        <img src="{{ asset($event->image) }}" alt="{{ $event->title }}" loading="eager" width="960" height="540">
                    </div>
                    <div class="count-down-date m-b-20">
                        <i class="fa-light fa-calendar-days"></i>
                        <p>{{ $daysLeft > 0 ? $daysLeft . ' Days Left' : 'Event End' }}</p>
                    </div>
                    <div class="details-title m-b-0">
                        <h2>{{ $event->title }}</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="detail-sidebar ev462-speaker-card">
                        <div class="s-widget-wrap m-b-0 h-100">
                            <div class="w-title">
                                <h3>
                                    <img src="{{ asset('assets/img/icons/icon-20.svg') }}" alt="icon"/>
                                    Speaker
                                </h3>
                                <div class="bar-wrap">
                                    <div class="bar-1"></div>
                                    <div class="bar-2"></div>
                                </div>
                            </div>
                            <div class="organizer-info-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/visawizer_logo.svg') }}" alt="Visawizer" style="height: 100%; object-fit: contain; border-radius: 0; padding: 6px;">
                                </div>
                                <div class="name">
                                    <h3>{{ $event->speaker }}</h3>
                                </div>
                                <div class="text">
                                    <p>“Committed to providing tailored solutions”</p>
                                </div>
                                <div class="divider"></div>
                                <div class="date m-b-10">
                                    <i class="fa-light fa-calendar-days"></i>
                                    <p>{{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }}</p>
                                </div>
                                <div class="location m-b-10">
                                    <i class="fa-light fa-clock"></i>
                                    <p>{{ date('h:ia', strtotime($event->start_time)) }} - {{ date('h:ia', strtotime($event->end_time)) }}</p>
                                </div>
                                <div class="location">
                                    <i class="fa-light fa-location-dot"></i>
                                    <p>{{ $event->location }}</p>
                                </div>
                                <div class="ev462-speaker-share">
                                    <h4>Share This Event</h4>
                                    <div class="social-links">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" rel="noopener" aria-label="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareTitle }}" target="_blank" rel="noopener" aria-label="Share on X"><i class="fab fa-x-twitter"></i></a>
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $shareUrl }}" target="_blank" rel="noopener" aria-label="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://api.whatsapp.com/send?text={{ $shareTitle }}%20{{ $shareUrl }}" target="_blank" rel="noopener" aria-label="Share on WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Full-width content + register --}}
            <div class="ev462-body" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                {{-- Section 2 --}}
                <div class="study-s7-split ev462-why-split ev462-band">
                    <div class="ev462-why-split__header">
                        <h2>Why This Webinar Matters</h2>
                    </div>
                    <div class="row row-gap-3 align-items-stretch g-3">
                        <div class="col-xl-4 col-lg-4 d-flex">
                            <figure class="ev462-why-split__visual w-100">
                                <img src="{{ asset('assets/imgs/founder/ankur-saini-trust.jpeg') }}" alt="{{ $event->speaker }} — Visa Wizer migration advisory" loading="lazy" width="640" height="512">
                            </figure>
                        </div>
                        <div class="col-xl-8 col-lg-8 d-flex">
                            <div class="study-grad-card m-b-0 w-100">
                                <p class="study-grad-sub m-b-0">The 462 Work and Holiday Visa is an exciting opportunity for eligible young people who want to travel, work and experience life in Australia. However, many applicants are confused about eligibility, documents, timing, ballot requirements and what happens after selection.</p>
                                <p class="study-grad-sub m-b-0">This webinar will simplify the process and help you understand whether this pathway may be suitable for you before you make mistakes or miss important steps.</p>
                                <div class="study-grad-cta">
                                    <a class="e-primary-btn has-icon" href="#eventForm">
                                        Reserve Your Seat for ₹299
                                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sections 3 & 4: audience + learning (single row, ref: work-skilled-migration study-s5-visa) --}}
                <div class="study-s5-visa ev462-s5-band ev462-band" data-aos="fade-up">
                    <div class="row align-items-stretch row-gap-3 justify-content-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="study-s5-intro-card">
                                <div class="common-subtitle text-uppercase"><span>Audience</span></div>
                                <div class="common-title text-start m-b-0"><h2>Who Should Attend?</h2></div>
                                <p class="visa-lead m-b-0">This webinar is suitable for:</p>
                                <ul class="study-support-list ev462-s5-intro-list">
                                    @foreach ($audiences as $item)
                                    <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>{{ $item }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="study-s5-support-card">
                                <div class="study-s5-support-head">
                                    <p class="study-s5-support-heading">What You Will Learn</p>
                                </div>
                                <p class="ev462-s5-support-intro">In this session, {{ $event->speaker }} will explain:</p>
                                <ul class="study-support-list">
                                    @foreach ($learnItems as $item)
                                    <li><span class="li-mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span><span>{{ $item }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sections 5 & 6 — innovation banner (reference: workSkilledMigration) --}}
                <section class="ev462-innovation-band ev462-band">
                    <div class="ev462-innovation-banner" data-aos="fade-up">
                        <div class="row align-items-stretch g-0">
                            <div class="col-12">
                                <div class="ev462-innovation-banner__content w-100">
                                    <h2>Special Focus for Indian Applicants</h2>
                                    <p>Many Indian applicants are interested in the 462 Work and Holiday Visa but are unsure about the ballot process and how to prepare. This webinar will help applicants understand the practical sequence: checking eligibility, preparing documents, registering correctly, monitoring updates and avoiding avoidable errors.</p>
                                    <p>This is not a guarantee of selection or visa grant. It is an awareness session to help applicants make informed decisions.</p>
                                    <h3 class="ev462-innovation-banner__mid-title">Why Learn From Visa Wizer?</h3>
                                    <p>Visa Wizer is a Melbourne-based migration advisory brand led by {{ $event->speaker }}. The session will focus on clear explanation, practical guidance and responsible visa awareness. The aim is not to create false hope, but to help applicants understand the pathway correctly.</p>
                                    <p class="ev462-innovation-banner__trust-label">Trust Points:</p>
                                    <ul class="ev462-innovation-banner__trust">
                                        @foreach ($trustPoints as $point)
                                        <li><i class="fa-solid fa-check" aria-hidden="true"></i><span>{{ $point }}</span></li>
                                        @endforeach
                                    </ul>
                                    <div class="ev462-innovation-banner__cta">
                                        <a class="e-primary-btn has-icon" href="#eventForm">
                                            Reserve Your Seat for ₹299
                                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Section 7: horizontal agenda --}}
                <section class="study-s4-process ev462-agenda-band ev462-band">
                    <div class="section-top-9 text-center">
                        <div class="text-uppercase justify-content-center"><span class="bg-p">Session Plan</span></div>
                        <div class="common-title mt-2 mb-1"><h2>Webinar Agenda</h2></div>
                        <p class="study-s4-intro m-b-0 mx-auto" style="max-width:640px;">Melbourne time · 60-minute awareness session</p>
                    </div>
                    <div class="ev462-agenda-track">
                        @foreach ($agenda as $index => $row)
                        <article class="ev462-agenda-item">
                            <div class="ev462-agenda-item__head">
                                <span class="ev462-agenda-item__no">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                <div class="ev462-agenda-item__icon" aria-hidden="true"><i class="{{ $row['icon'] }}"></i></div>
                            </div>
                            <span class="ev462-agenda-item__time"><i class="fa-regular fa-clock" aria-hidden="true"></i>{{ $row['time'] }}</span>
                            <div class="ev462-agenda-item__body">
                                <h4>{{ $row['topic'] }}</h4>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </section>

                <div class="ev462-content">
                    <div class="ev462-section">
                        <div class="common-subtitle text-uppercase"><span>Registration Fee</span></div>
                        <div class="common-title text-start m-b-15"><h2>Reserve Your Seat</h2></div>
                        <div class="ev462-fee">
                            <p class="ev462-fee-old m-b-0">Actual Session Value: ₹5,000</p>
                            <p class="ev462-fee-new m-b-0">Special Awareness Fee: ₹299 Only</p>
                            <p class="study-copy-body m-b-0">This special fee has been introduced to make professional awareness accessible for young applicants and families planning their Australia journey.</p>
                            <div class="ev462-fee-cta">
                                <a class="e-primary-btn has-icon is-hover-white" href="#eventForm">
                                    <span class="btext">Reserve Your Seat for ₹299</span>
                                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="ev462-section">
                        <div class="common-subtitle text-uppercase"><span>Disclaimer</span></div>
                        <div class="common-title text-start m-b-15"><h2>Important Disclaimer</h2></div>
                        <p class="visa-lead visa-highlight m-b-0">This webinar is for general awareness and education only. It does not replace personalised migration advice. Every applicant’s situation is different, and eligibility must be assessed individually before making any visa decision.</p>
                    </div>

                    <div class="ev462-section">
                        <div class="common-subtitle text-uppercase"><span>Questions</span></div>
                        <div class="common-title text-start m-b-20"><h2>FAQ</h2></div>
                        @foreach ($faqs as $faq)
                        <div class="ev462-faq-item">
                            <p class="study-copy-sub m-b-0">{{ $faq['q'] }}</p>
                            <p class="study-copy-body m-b-0">{{ $faq['a'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="contact-form-3" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                    <div class="form-content">
                        <h3>Register Now</h3>
                        <p>Register for the 462 Work and Holiday Visa awareness webinar with {{ $event->speaker }}.</p>
                        <form id="eventForm">
                            @csrf
                            <div class="mb-3">
                                <input class="form-control" name="name" placeholder="Full Name" type="text">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" name="email" placeholder="Email Address" type="email">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" name="phone" placeholder="10 Digit Phone No." type="number">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="message" placeholder="Any message/comment..." rows="4"></textarea>
                            </div>
                            <input type="text" name="bot_field" class="d-none">
                            <input type="hidden" name="seminarId" value="{{ $event->id }}">
                            <input type="hidden" name="event" value="{{ $event->title }}">
                            <div class="hero-content-1">
                                <div class="join-us">
                                    <button class="e-primary-btn has-icon is-hover-white" type="submit">
                                        <span class="btext">Register Now</span>
                                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-shape-1">
            <img src="{{ asset('assets/img/shapes/shape-31.webp') }}" alt="shape-31"/>
        </div>
    </section>
</div>
@endsection

@push('script')
<script>
$('#eventForm').on('submit', function(e){
    e.preventDefault();
    if (typeof validateForm === 'function' && !validateForm()) {
        return false;
    }
    var form = $(this);
    var btn = form.find('.btext');
    var button = form.find('button[type=submit]');
    form.find('.text-danger').remove();
    form.find('.is-invalid').removeClass('is-invalid');

    var progress = 0;
    var interval = setInterval(function () {
        progress += 5;
        btn.text("Submitting " + progress + "%");
        if (progress >= 90) clearInterval(interval);
    }, 200);

    $.ajax({
        url: "{{ url('event-form') }}",
        type: "POST",
        data: form.serialize(),
        dataType: "json",
        beforeSend: function(){ button.prop('disabled', true); },
        success: function(res){
            if(res.status === 'success'){
                btn.text("Submitting 100%");
                setTimeout(function(){ window.location.href = "{{ url('thank-you-for-registration') }}"; }, 300);
            }
        },
        error: function(xhr){
            clearInterval(interval);
            btn.text("Register Now");
            button.prop('disabled', false);
            if(xhr.status === 422){
                $.each(xhr.responseJSON.errors, function(field, message){
                    var input = form.find('[name="'+field+'"]');
                    input.addClass('is-invalid');
                    input.after('<small class="text-danger">'+message+'</small>');
                });
            } else {
                toastr.error("Something went wrong!");
            }
        }
    });
});
</script>
@endpush
