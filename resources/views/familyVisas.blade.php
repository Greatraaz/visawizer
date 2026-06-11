@extends('layouts.frontend')
@section('content')
@include('partials.studyPageStyles')

@php
    $pathways = [
        [
            'icon' => 'fa-light fa-heart',
            'title' => 'Partner Visas',
            'text' => 'For spouses, de facto partners, and prospective spouses of eligible Australian sponsors.',
            'url' => '#partner-visa-support',
            'image' => 'assets/imgs/family/fv-path-partner.webp',
        ],
        [
            'icon' => 'fa-light fa-people-roof',
            'title' => 'Parent Visas',
            'text' => 'For parents of settled Australian citizens, Australian permanent residents, or eligible New Zealand citizens.',
            'url' => '#parent-visa-support',
            'image' => 'assets/imgs/family/fv-path-parent.webp',
        ],
        [
            'icon' => 'fa-light fa-child-reaching',
            'title' => 'Child & Adoption Visas',
            'text' => 'For dependent children, adopted children, and eligible children joining family in Australia.',
            'url' => '#child-adoption-orphan-pathways',
            'image' => 'assets/imgs/family/fv-path-child.webp',
        ],
        [
            'icon' => 'fa-light fa-hands-holding-heart',
            'title' => 'Carer & Relative Visas',
            'text' => 'For eligible relatives where care needs, dependency, or remaining family circumstances may apply.',
            'url' => '#carer-remaining-relative-pathways',
            'image' => 'assets/imgs/family/fv-path-carer.webp',
        ],
        [
            'icon' => 'fa-light fa-house-heart',
            'title' => 'Orphan Relative Visas',
            'text' => 'For eligible children who need to live with relatives because parents cannot care for them.',
            'url' => '#child-adoption-orphan-pathways',
            'image' => 'assets/imgs/family/fv-path-orphan.webp',
        ],
    ];

    $process = [
        ['icon' => 'fa-light fa-family', 'title' => 'Family Situation Review', 'text' => 'We understand who is applying, who is sponsoring, where everyone is located, and what the family goal is.'],
        ['icon' => 'fa-light fa-route', 'title' => 'Visa Pathway Mapping', 'text' => 'We identify which family visa option may fit the relationship, age, location, dependency, or care situation.'],
        ['icon' => 'fa-light fa-folder-open', 'title' => 'Evidence Planning', 'text' => 'We help organise relationship proof, sponsorship documents, identity papers, family history, custody evidence, care documents, or other supporting material.'],
        ['icon' => 'fa-light fa-file-signature', 'title' => 'Application Preparation', 'text' => 'We guide the file structure, forms, statements, supporting evidence, and submission readiness.'],
        ['icon' => 'fa-light fa-compass', 'title' => 'Ongoing Guidance', 'text' => 'We help families understand updates, further information requests, and next steps after lodgement.'],
    ];

    $evidence = [
        ['title' => 'Relationship Evidence', 'text' => 'Marriage, de facto, engagement, family history, communication records, photographs, joint arrangements, and statements.'],
        ['title' => 'Sponsor Evidence', 'text' => 'Citizenship or permanent residence evidence, identity documents, income or support details, and family relationship proof.'],
        ['title' => 'Parent & Child Evidence', 'text' => 'Birth certificates, adoption records, custody documents, dependency evidence, and family structure details.'],
        ['title' => 'Care & Medical Evidence', 'text' => 'Medical assessments, care need evidence, family support explanations, and availability of care in Australia.'],
        ['title' => 'Character & Identity Evidence', 'text' => 'Passports, police checks, health checks, name-change documents, and prior visa history.'],
    ];

    $whyCards = [
        ['icon' => 'fa-light fa-map-signs', 'title' => 'Clear Pathway Advice', 'text' => 'We explain which family visa route may suit your situation and why.'],
        ['icon' => 'fa-light fa-folder-check', 'title' => 'Evidence-Led Preparation', 'text' => 'We help build a file that supports the relationship or family need.'],
        ['icon' => 'fa-light fa-magnifying-glass-chart', 'title' => 'Careful Case Review', 'text' => 'We identify gaps, risks, inconsistencies, and missing documentation early.'],
        ['icon' => 'fa-light fa-hand-holding-heart', 'title' => 'Human Approach', 'text' => 'We handle sensitive family circumstances with respect and care.'],
    ];
@endphp

<style type="text/css">
    .family-page {
        --family-dark: #180c18;
        --family-dark-2: #2b1430;
        --family-accent: var(--theme-color-3);
        --family-muted: #64748b;
        --family-light: #fff7fb;
        --family-border: rgba(102, 0, 63, 0.12);
    }
    .family-page .family-band-light {
        background: linear-gradient(180deg, #fff 0%, var(--family-light) 100%);
        position: relative;
    }
    .family-page .family-band-dark {
        background:
            radial-gradient(circle at 15% 18%, rgba(218, 87, 102, 0.15), transparent 28%),
            radial-gradient(circle at 86% 72%, rgba(102, 0, 63, 0.22), transparent 24%),
            linear-gradient(160deg, var(--family-dark) 0%, var(--family-dark-2) 48%, #111827 100%);
        color: #f8fafc;
        position: relative;
        overflow: hidden;
    }
    .family-page .family-band-dark .common-title h2,
    .family-page .family-band-dark h3,
    .family-page .family-band-dark h4 {
        color: #fff !important;
    }
    .family-page .family-band-dark .study-copy-sub,
    .family-page .family-band-dark .study-copy-body,
    .family-page .family-band-dark p {
        color: rgba(248, 250, 252, 0.86);
    }
    .family-page .family-section-pad {
        padding: clamp(72px, 8vw, 110px) 0;
    }
    .family-page .family-hero {
        background-position: center;
    }
    .family-page .family-hero .study-copy-body {
        max-width: 860px;
    }
    .family-page .family-separated .title,
    .family-page .family-separated .common-title {
        position: relative;
        display: block;
        margin-bottom: clamp(18px, 2vw, 24px) !important;
        padding-bottom: clamp(18px, 2vw, 24px);
    }
    .family-page .family-separated .title::after,
    .family-page .family-separated .common-title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: min(100%, 780px);
        height: 1px;
        border-radius: 999px;
        background: rgba(102, 0, 63, 0.18);
    }
    .family-page .family-separated .study-copy-sub,
    .family-page .family-separated .study-s4-intro {
        position: relative;
        display: block;
        margin-bottom: clamp(26px, 2.8vw, 36px) !important;
        padding-bottom: clamp(22px, 2.3vw, 30px);
    }
    .family-page .family-separated .study-copy-sub::after,
    .family-page .family-separated .study-s4-intro::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: clamp(90px, 12vw, 140px);
        height: 3px;
        border-radius: 999px;
        background: linear-gradient(90deg, var(--family-accent), #da5766);
    }
    .family-page .family-separated-dark .title::after,
    .family-page .family-separated-dark .common-title::after {
        background: rgba(255, 255, 255, 0.22);
    }
    .family-page .family-separated-center .title::after,
    .family-page .family-separated-center .common-title::after,
    .family-page .family-separated-center .study-copy-sub::after,
    .family-page .family-separated-center .study-s4-intro::after,
    .family-page .family-separated.text-center .common-title::after,
    .family-page .family-separated.text-center .study-copy-sub::after,
    .family-page .family-separated.text-center .study-s4-intro::after {
        left: 50%;
        transform: translateX(-50%);
    }
    .family-page .family-path-card {
        display: flex;
        width: 100%;
        min-height: 305px;
        border-radius: 18px;
        overflow: hidden;
        background-position: center;
        background-size: cover;
        box-shadow: 0 24px 55px rgba(15, 23, 42, 0.13);
        position: relative;
        isolation: isolate;
        text-decoration: none;
    }
    .family-page .family-path-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(24, 12, 24, 0.16), rgba(24, 12, 24, 0.88));
        z-index: -1;
    }
    .family-page .family-path-card:hover {
        transform: translateY(-5px);
        color: inherit;
    }
    .family-page .family-path-inner {
        align-self: flex-end;
        padding: 30px;
    }
    .family-page .family-path-icon,
    .family-page .family-soft-icon {
        width: 58px;
        height: 58px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 16px;
        background: #fff;
        color: var(--family-accent);
        font-size: 1.55rem;
        box-shadow: 0 14px 32px rgba(15, 23, 42, 0.14);
        margin-bottom: 18px;
    }
    .family-page .family-path-card h3,
    .family-page .family-path-card p {
        color: #fff;
    }
    .family-page .family-path-card h3 {
        font-size: 1.28rem;
        margin-bottom: 10px;
    }
    .family-page .family-path-card p {
        margin: 0;
        line-height: 1.65;
    }
    .family-page .family-split-card {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 18px;
        padding: clamp(30px, 4vw, 48px);
        height: 100%;
        box-shadow: 0 24px 55px rgba(0, 0, 0, 0.18);
    }
    .family-page .family-split-media img {
        width: 100%;
        min-height: clamp(320px, 38vw, 454px);
        object-fit: cover;
        border-radius: 18px;
        box-shadow: 0 26px 65px rgba(0, 0, 0, 0.3);
    }
    .family-page .family-visa-pills {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 26px;
    }
    .family-page .family-visa-pills span {
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 999px;
        color: #fff;
        font-size: 0.82rem;
        font-weight: 700;
        padding: 8px 14px;
        background: rgba(255, 255, 255, 0.08);
    }
    .family-page .family-parent-wrap {
        background: #fff;
        border: 1px solid var(--family-border);
        border-radius: 22px;
        padding: clamp(26px, 4vw, 48px);
        box-shadow: 0 24px 60px rgba(102, 0, 63, 0.08);
    }
    .family-page .family-parent-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 14px;
        margin-top: 28px;
    }
    .family-page .family-parent-list span {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 14px 16px;
        border-radius: 12px;
        background: var(--family-light);
        color: #334155;
        font-weight: 700;
        line-height: 1.35;
    }
    .family-page .family-parent-list i {
        color: var(--family-accent);
    }
    .family-page .family-inline-image {
        position: relative;
        overflow: hidden;
        border-radius: 18px;
        box-shadow: 0 22px 55px rgba(15, 23, 42, 0.14);
        border: 1px solid var(--family-border);
        margin-bottom: 26px;
    }
    .family-page .family-inline-image img {
        display: block;
        width: 100%;
        min-height: 250px;
        object-fit: cover;
    }
    .family-page .family-inline-image::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, transparent 45%, rgba(24, 12, 24, 0.55));
        pointer-events: none;
    }
    .family-page .family-image-strip {
        display: grid;
        grid-template-columns: 1.2fr 0.8fr 1fr;
        gap: clamp(14px, 2vw, 22px);
        margin-top: 38px;
        margin-bottom: 42px;
    }
    .family-page .family-image-strip img {
        width: 100%;
        height: clamp(190px, 22vw, 300px);
        object-fit: cover;
        border-radius: 18px;
        box-shadow: 0 22px 52px rgba(0, 0, 0, 0.18);
        border: 1px solid rgba(255, 255, 255, 0.12);
    }
    .family-page .family-image-strip img:nth-child(2) {
        margin-top: 32px;
    }
    .family-page .family-child-grid,
    .family-page .family-evidence-grid,
    .family-page .family-why-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: clamp(16px, 2vw, 22px);
    }
    .family-page .family-child-card,
    .family-page .family-evidence-card,
    .family-page .family-why-card {
        border-radius: 18px;
        padding: 28px;
        height: 100%;
    }
    .family-page .family-child-card {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.12);
    }
    .family-page .family-child-card .family-soft-icon {
        margin-bottom: 18px;
    }
    .family-page .family-relative-panel {
        background:
            linear-gradient(135deg, rgba(102, 0, 63, 0.08), transparent 42%),
            #fff;
        border: 1px solid var(--family-border);
        border-radius: 22px;
        padding: clamp(28px, 4vw, 52px);
        box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08);
    }
    .family-page .family-relative-note {
        border-left: 5px solid var(--family-accent);
        border-radius: 14px;
        padding: 24px;
        background: var(--family-light);
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .family-page .family-relative-photo {
        height: 235px;
        border-radius: 16px;
        overflow: hidden;
        margin-top: auto;
        margin-bottom: 0;
        box-shadow: 0 20px 45px rgba(15, 23, 42, 0.12);
    }
    .family-page .family-relative-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .family-page .family-process-visual,
    .family-page .family-evidence-visual,
    .family-page .family-why-visual {
        margin-top: 36px;
        border-radius: 22px;
        overflow: hidden;
        box-shadow: 0 26px 65px rgba(0, 0, 0, 0.2);
        position: relative;
    }
    .family-page .family-process-visual img,
    .family-page .family-evidence-visual img,
    .family-page .family-why-visual img {
        width: 100%;
        height: clamp(250px, 30vw, 390px);
        object-fit: cover;
        display: block;
    }
    .family-page .family-process-visual::after,
    .family-page .family-why-visual::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(24, 12, 24, 0.74), rgba(24, 12, 24, 0.08));
        pointer-events: none;
    }
    .family-page .family-process-grid {
        display: grid;
        grid-template-columns: repeat(5, minmax(0, 1fr));
        gap: 18px;
        margin-top: 42px;
    }
    .family-page .family-process-card {
        position: relative;
        min-height: 285px;
        padding: 28px 22px;
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.12);
    }
    .family-page .family-process-no {
        font-family: ui-monospace, "Cascadia Mono", "Segoe UI Mono", monospace;
        color: rgba(255, 255, 255, 0.35);
        font-size: 2.2rem;
        line-height: 1;
        font-weight: 800;
        margin-bottom: 18px;
    }
    .family-page .family-process-card i {
        color: #fff;
        font-size: 1.35rem;
        margin-bottom: 18px;
    }
    .family-page .family-evidence-layout {
        display: grid;
        grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
        gap: clamp(22px, 3vw, 36px);
        align-items: stretch;
        margin-top: 46px;
    }
    .family-page .family-evidence-visual-panel {
        position: relative;
        min-height: 100%;
        border-radius: 24px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 28px 70px rgba(102, 0, 63, 0.13);
        border: 1px solid var(--family-border);
    }
    .family-page .family-evidence-visual-panel img {
        width: 100%;
        height: 100%;
        min-height: 520px;
        object-fit: cover;
        display: block;
    }
    .family-page .family-evidence-visual-panel::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(24, 12, 24, 0.05) 0%, rgba(24, 12, 24, 0.78) 100%);
        pointer-events: none;
    }
    .family-page .family-evidence-visual-content {
        position: absolute;
        left: 28px;
        right: 28px;
        bottom: 28px;
        z-index: 1;
        color: #fff;
    }
    .family-page .family-evidence-visual-content h3 {
        color: #fff;
        font-size: clamp(1.35rem, 2.2vw, 1.8rem);
        margin-bottom: 12px;
    }
    .family-page .family-evidence-visual-content p {
        color: rgba(255, 255, 255, 0.88);
        margin-bottom: 0;
        line-height: 1.65;
    }
    .family-page .family-evidence-layout .family-evidence-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: clamp(14px, 1.8vw, 20px);
        margin-top: 0 !important;
    }
    .family-page .family-evidence-map {
        display: grid;
        grid-template-columns: repeat(12, minmax(0, 1fr));
        grid-template-areas:
            "a a a a center center center center b b b b"
            "c c c c center center center center d d d d"
            ". . e e e e e e e e . .";
        gap: clamp(16px, 2vw, 24px);
        align-items: stretch;
        margin-top: 48px;
        position: relative;
    }
    .family-page .family-evidence-map::before {
        content: "";
        position: absolute;
        inset: 52px 8% 70px;
        border: 1px dashed rgba(102, 0, 63, 0.22);
        border-radius: 28px;
        pointer-events: none;
    }
    .family-page .family-evidence-map__center {
        grid-area: center;
        position: relative;
        min-height: 520px;
        border-radius: 28px;
        overflow: hidden;
        box-shadow: 0 30px 80px rgba(102, 0, 63, 0.16);
        border: 1px solid rgba(102, 0, 63, 0.16);
        z-index: 1;
    }
    .family-page .family-evidence-map__center img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    .family-page .family-evidence-map__center::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(24, 12, 24, 0.04), rgba(24, 12, 24, 0.72));
    }
    .family-page .family-evidence-map__caption {
        position: absolute;
        left: 26px;
        right: 26px;
        bottom: 26px;
        z-index: 1;
        color: #fff;
    }
    .family-page .family-evidence-map__caption h3 {
        color: #fff;
        margin-bottom: 10px;
        font-size: clamp(1.25rem, 2vw, 1.65rem);
    }
    .family-page .family-evidence-map__caption p {
        color: rgba(255, 255, 255, 0.88);
        margin-bottom: 0;
        line-height: 1.65;
    }
    .family-page .family-evidence-map .family-evidence-card {
        position: relative;
        z-index: 2;
        min-height: 205px;
    }
    .family-page .family-evidence-map .family-evidence-card:nth-child(1) { grid-area: a; }
    .family-page .family-evidence-map .family-evidence-card:nth-child(2) { grid-area: b; }
    .family-page .family-evidence-map .family-evidence-card:nth-child(3) { grid-area: c; }
    .family-page .family-evidence-map .family-evidence-card:nth-child(4) { grid-area: d; }
    .family-page .family-evidence-map .family-evidence-card:nth-child(5) {
        grid-area: e;
        min-height: 170px;
    }
    .family-page .family-evidence-card {
        background: #fff;
        border: 1px solid var(--family-border);
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.07);
        transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
    }
    .family-page .family-evidence-card:hover {
        transform: translateY(-4px);
        border-color: rgba(102, 0, 63, 0.22);
        box-shadow: 0 24px 58px rgba(102, 0, 63, 0.12);
    }
    .family-page .family-evidence-card::before {
        content: "";
        display: block;
        width: 54px;
        height: 4px;
        border-radius: 999px;
        background: var(--family-accent);
        margin-bottom: 18px;
    }
    .family-page .family-why-card {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.12);
        text-align: center;
    }
    .family-page .family-why-card .family-soft-icon {
        margin-bottom: 20px;
    }
    .family-page .family-why-layout {
        display: grid;
        grid-template-columns: minmax(0, 0.95fr) minmax(0, 1.05fr);
        gap: clamp(20px, 3vw, 34px);
        align-items: stretch;
        margin-top: 42px;
    }
    .family-page .family-why-visual {
        margin-top: 0;
        margin-bottom: 0;
        height: 100%;
    }
    .family-page .family-why-visual img {
        height: 100%;
        min-height: 430px;
    }
    .family-page .family-why-layout .family-why-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: clamp(16px, 2vw, 22px);
        margin-top: 0 !important;
    }
    .family-page .family-why-layout .family-why-card {
        min-height: 205px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .family-page .family-testimonials-before-cta {
        background: linear-gradient(180deg, #fff7fb 0%, #ffffff 45%, #f8fafc 100%);
    }
    .family-page .family-testimonials-before-cta .testimonial {
        margin-bottom: 0;
        padding-bottom: clamp(72px, 8vw, 100px);
    }
    .family-page .family-cta-wrap {
        margin-top: 26px;
        display: flex;
        gap: 14px;
        flex-wrap: wrap;
        justify-content: center;
    }
    @media (max-width: 1199px) {
        .family-page .family-process-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
    }
    @media (max-width: 991px) {
        .family-page .family-evidence-layout {
            grid-template-columns: 1fr;
        }
        .family-page .family-evidence-map {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            grid-template-areas:
                "center center"
                "a b"
                "c d"
                "e e";
        }
        .family-page .family-evidence-map::before {
            display: none;
        }
        .family-page .family-evidence-map__center {
            min-height: 320px;
        }
        .family-page .family-evidence-visual-panel img {
            min-height: 320px;
        }
        .family-page .family-why-layout {
            grid-template-columns: 1fr;
        }
        .family-page .family-why-visual img {
            min-height: 280px;
        }
        .family-page .family-child-grid,
        .family-page .family-evidence-grid,
        .family-page .family-why-grid,
        .family-page .family-process-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }
    @media (max-width: 767px) {
        .family-page .family-parent-list,
        .family-page .family-child-grid,
        .family-page .family-evidence-grid,
        .family-page .family-why-grid,
        .family-page .family-image-strip,
        .family-page .family-process-grid {
            grid-template-columns: 1fr;
        }
        .family-page .family-image-strip img:nth-child(2) {
            margin-top: 0;
        }
        .family-page .family-path-inner,
        .family-page .family-child-card,
        .family-page .family-evidence-card,
        .family-page .family-why-card {
            padding: 24px;
        }
        .family-page .family-evidence-map {
            grid-template-columns: 1fr;
            grid-template-areas:
                "center"
                "a"
                "b"
                "c"
                "d"
                "e";
        }
    }

    .study-copy-body {
    font-size: 18px;
}
</style>

<div class="family-page">
    <section class="hero-section-5 study-s1-hero family-hero family-band-dark" style="background-image: url('{{ asset('assets/imgs/family/fv-s1-bg.webp') }}');">
        <div class="container">
            <div class="hero-content-5 family-separated family-separated-dark family-separated-center">
                <div class="study-hero-tag" data-aos="fade-up" data-aos-delay="100">Families belong together</div>
                <div class="title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <h1>Family visa guidance to help reunite with your loved ones in Australia</h1>
                </div>
                <div class="text" data-aos="fade-up" data-aos-delay="350" data-aos-duration="1000">
                    <p class="study-copy-sub">Partner, parent, child, carer, orphan relative, and remaining relative visa pathways guided with care, clarity, and structured support.</p>
                </div>
                <div class="text" data-aos="fade-up" data-aos-delay="450" data-aos-duration="1000">
                    <p class="study-copy-body">Moving closer to family is one of the most personal reasons to apply for an Australian visa. Whether you want to bring your partner, parent, child, or relative to Australia, the process can feel emotional, document-heavy, and confusing.</p>
                    <p class="study-copy-body m-t-20 m-b-0">At Visawizer, we help families understand the right pathway, prepare strong documentation, and move forward with a clear application plan.</p>
                </div>
                <div class="study-hero-actions" data-aos="fade-up" data-aos-delay="550" data-aos-duration="1000">
                    <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                        Speak to an Expert
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                    <a class="study-btn-outline-light" href="{{ url('book-appointment') }}"><i class="fa-regular fa-calendar-check"></i> Book Appointment</a>
                </div>
            </div>
            <div class="shape"><img alt="" src="{{ asset('assets/img/shapes/shape-39.webp') }}"></div>
        </div>
    </section>

    <section class="family-section-pad family-band-light">
        <div class="container">
            <div class="study-section-head-center text-center family-separated" data-aos="fade-up">
                <div class="common-subtitle text-uppercase justify-content-center"><span>Choose the right family pathway</span></div>
                <div class="common-title m-b-15"><h2>Different family situations need different visa options</h2></div>
                <p class="study-copy-sub m-b-0">The right visa depends on your relationship, location, age, dependency, sponsorship position, and long-term family goal.</p>
            </div>
            <div class="row row-gap-4 justify-content-center m-t-45" data-aos="fade-up" data-aos-delay="150">
                @foreach ($pathways as $pathway)
                    <div class="col-xl-4 col-md-6 d-flex">
                        <a href="{{ $pathway['url'] }}" class="family-path-card" style="background-image: url('{{ asset($pathway['image']) }}');">
                            <div class="family-path-inner">
                                <div class="family-path-icon"><i class="{{ $pathway['icon'] }}"></i></div>
                                <h3>{{ $pathway['title'] }}</h3>
                                <p>{{ $pathway['text'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="family-section-pad family-band-dark" id="partner-visa-support">
        <div class="container">
            <div class="row row-gap-5 align-items-center">
                <div class="col-lg-5" data-aos="fade-up">
                    <div class="text-uppercase"><span class="bg-p">For couples building life together</span></div>
                    <div class="common-title text-start m-b-15 mt-3"><h2>Partner visa pathways for married, de facto, and engaged couples</h2></div>
                    <div class="family-split-media">
                        <img src="{{ asset('assets/imgs/family/fv-split-partner.webp') }}" alt="Partner visa support for couples">
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="120">
                    <div class="family-split-card family-separated family-separated-dark">
                        
                        <p class="study-copy-sub">We help couples prepare their relationship evidence, sponsor details, and application narrative with care.</p>
                        <p class="study-copy-body">Partner visa applications require more than basic identity and relationship documents. The application should show the history, genuineness, commitment, financial aspects, social recognition, household arrangements, and future plans of the relationship.</p>
                        <p class="study-copy-body m-b-0">Visawizer supports couples across onshore partner visa 820/801, offshore partner visa 309/100, and prospective marriage visa 300 pathways. Home Affairs describes the 820/801 visa as allowing the de facto partner or spouse of an Australian citizen, Australian permanent resident, or eligible New Zealand citizen to live in Australia, while the 309/100 pathway applies to partners applying from overseas.</p>
                        <div class="family-visa-pills">
                            <span>820/801</span>
                            <span>309/100</span>
                            <span>Subclass 300</span>
                        </div>
                        <div class="m-t-30">
                            <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                                Explore Partner Visas
                                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="family-section-pad family-band-light" id="parent-visa-support">
        <div class="container">
            <div class="family-parent-wrap" data-aos="fade-up">
                <div class="row row-gap-4 align-items-center">
                    <div class="col-lg-6 family-separated">
                        <div class="text-uppercase mb-3"><span class="bg-p">Bring parents closer</span></div>
                        <div class="common-title text-start m-b-15"><h2>Parent visa options for short-term and permanent family reunification</h2></div>
                        <p class="study-copy-sub">We help families understand parent visa options, contributory routes, aged parent options, and temporary sponsored parent pathways.</p>
                        <p class="study-copy-body">Parent visas are among the most important and sensitive family pathways. Some parents may be looking for permanent settlement, while others may need a longer temporary stay with their children in Australia.</p>
                        <p class="study-copy-body m-b-0">Parent visa categories can involve queueing, balance of family requirements, sponsorship requirements, and different application strategies.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="family-inline-image">
                            <img src="{{ asset('assets/imgs/family/fv-split-parent.webp') }}" alt="Parents and family reviewing Australian visa options">
                        </div>
                        <p class="study-copy-body">Visawizer helps families compare options such as Parent Visa 103, Contributory Parent Visa 143, Contributory Parent Temporary Visa 173, Aged Parent Visa 804, Contributory Aged Parent Visa 864, Sponsored Parent Temporary Visa 870, and Contributory Aged Parent Temporary Visa 884.</p>
                        <div class="family-parent-list">
                            <span><i class="fa-solid fa-check"></i> Parent Visa 103</span>
                            <span><i class="fa-solid fa-check"></i> Contributory Parent 143</span>
                            <span><i class="fa-solid fa-check"></i> Temporary Parent 173</span>
                            <span><i class="fa-solid fa-check"></i> Aged Parent 804</span>
                            <span><i class="fa-solid fa-check"></i> Aged Parent 864</span>
                            <span><i class="fa-solid fa-check"></i> Sponsored Parent 870</span>
                        </div>
                        <div class="m-t-30">
                            <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                                Explore Parent Visas
                                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="family-section-pad family-band-dark" id="child-adoption-orphan-pathways">
        <div class="container">
            <div class="study-section-head-center text-center family-separated family-separated-dark" data-aos="fade-up">
                <div class="common-subtitle text-uppercase justify-content-center"><span>For children and family care</span></div>
                <div class="common-title m-b-15"><h2>Visa guidance for children joining family in Australia</h2></div>
                <p class="study-copy-sub m-b-0">Child and orphan relative visa pathways require careful evidence around relationship, care, dependency, custody, and family circumstances.</p>
            </div>
            <div class="family-image-strip" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('assets/imgs/family/fv-child-strip-1.webp') }}" alt="Child visa pathway planning">
                <img src="{{ asset('assets/imgs/family/fv-child-strip-2.webp') }}" alt="Family care and child visa documents">
                <img src="{{ asset('assets/imgs/family/fv-child-strip-3.webp') }}" alt="Children joining family in Australia">
            </div>
            <div class="family-child-grid m-t-45" data-aos="fade-up" data-aos-delay="150">
                <div class="family-child-card">
                    <div class="family-soft-icon"><i class="fa-light fa-child"></i></div>
                    <h3>Child Visas 101/802</h3>
                    <p>For eligible dependent children joining parents or guardians in Australia, with evidence around relationship, dependency, care, and consent.</p>
                </div>
                <div class="family-child-card">
                    <div class="family-soft-icon"><i class="fa-light fa-hands-holding-child"></i></div>
                    <h3>Adoption Visa 102</h3>
                    <p>For adopted children where adoption, guardianship, legal process, and family documentation need to be presented clearly.</p>
                </div>
                <div class="family-child-card">
                    <div class="family-soft-icon"><i class="fa-light fa-house-heart"></i></div>
                    <h3>Orphan Relative 117/837</h3>
                    <p>For eligible children whose parents are deceased, unable to care for them, or cannot be found, and who need to live with relatives.</p>
                </div>
            </div>
            <div class="row justify-content-center m-t-40">
                <div class="col-lg-10 text-center" data-aos="fade-up">
                    <p class="study-copy-body">Children may need to join parents, guardians, adoptive parents, or relatives in Australia for different reasons. Some cases are straightforward. Others may involve adoption, custody, parental consent, orphan circumstances, or guardianship issues.</p>
                    <a class="e-primary-btn has-icon m-t-15" href="{{ url('contact-us') }}">
                        Discuss Child Visa Options
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="family-section-pad family-band-light" id="carer-remaining-relative-pathways">
        <div class="container">
            <div class="family-relative-panel" data-aos="fade-up">
                <div class="row row-gap-4 align-items-stretch">
                    <div class="col-lg-7 family-separated">
                        <div class="common-subtitle text-uppercase"><span>When family support is essential</span></div>
                        <div class="common-title text-start m-b-15"><h2>Relative visa pathways for care, dependency, and remaining family circumstances</h2></div>
                        <p class="study-copy-sub">These applications are sensitive and evidence-led, requiring a clear explanation of family need and eligibility.</p>
                        <p class="study-copy-body">Other family visa pathways may apply where a relative needs to provide care, where a person has no near relatives outside Australia, or where family dependency creates a genuine need for migration support.</p>
                        <p class="study-copy-body m-b-0">These pathways include Remaining Relative Visa 115/835 and Carer Visa 116/836. Home Affairs notes that Australia offers permanent visa options for carers and remaining relatives of settled Australian citizens, permanent residents, and eligible New Zealand citizens, but places are limited each Migration Program year.</p>
                    </div>
                    <div class="col-lg-5">
                        <div class="family-relative-note">
                            <div class="family-soft-icon"><i class="fa-light fa-user-shield"></i></div>
                            <h3>Evidence must explain the need</h3>
                            <p class="study-copy-body m-b-20">Care, dependency, remaining family circumstances, and sponsorship position should be supported with consistent documents and a clear explanation.</p>
                            <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                                Review My Family Case
                                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                            </a>
                            <div class="family-relative-photo">
                                <img src="{{ asset('assets/imgs/family/fv-split-carer.webp') }}" alt="Relative visa guidance for care and support">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="family-section-pad family-band-dark" id="how-visawizer-helps-family">
        <div class="container">
            <div class="section-top-9 text-center family-separated family-separated-dark" data-aos="fade-up">
                <div class="common-subtitle text-uppercase justify-content-center"><span>A structured family visa process</span></div>
                <div class="common-title m-b-15"><h2>We help families prepare with care and clarity</h2></div>
                <p class="study-s4-intro m-b-0 mx-auto" style="max-width:760px;">Family applications need accurate documents, strong evidence, and a clear explanation of the relationship or family need.</p>
            </div>
            <div class="family-process-visual" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('assets/imgs/family/fv-process.webp') }}" alt="Structured family visa preparation process">
            </div>
            <div class="family-process-grid" data-aos="fade-up" data-aos-delay="150">
                @foreach ($process as $index => $step)
                    <div class="family-process-card">
                        <div class="family-process-no">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</div>
                        <i class="{{ $step['icon'] }}"></i>
                        <h4>{{ $step['title'] }}</h4>
                        <p>{{ $step['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="family-section-pad family-band-light">
        <div class="container">
            <div class="study-section-head-center text-center family-separated" data-aos="fade-up">
                <div class="common-subtitle text-uppercase justify-content-center"><span>Documentation matters</span></div>
                <div class="common-title m-b-15"><h2>Strong family visa applications are built on consistent evidence</h2></div>
                <p class="study-copy-sub m-b-0">The evidence must support the relationship, sponsorship, family need, and applicant eligibility.</p>
            </div>
            <div class="family-evidence-map" data-aos="fade-up" data-aos-delay="120">
                @foreach ($evidence as $item)
                    <div class="family-evidence-card">
                        <h3>{{ $item['title'] }}</h3>
                        <p class="study-copy-body m-b-0">{{ $item['text'] }}</p>
                    </div>
                @endforeach
                <div class="family-evidence-map__center">
                    <img src="{{ asset('assets/imgs/family/fv-evidence.webp') }}" alt="Family visa evidence and document preparation">
                    <div class="family-evidence-map__caption">
                        <h3>Evidence tells the family story</h3>
                        <p>Each document should connect clearly to the relationship, sponsor position, identity, care need, or family circumstance being claimed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="family-section-pad family-band-dark">
        <div class="container">
            <div class="study-section-head-center text-center family-separated family-separated-dark" data-aos="fade-up">
                <div class="common-subtitle text-uppercase justify-content-center"><span>Practical guidance with sensitivity</span></div>
                <div class="common-title m-b-15"><h2>Family visa support that understands the emotion behind the application</h2></div>
                <p class="study-copy-sub m-b-0">We know family visa matters are personal. Our role is to bring structure, clarity, and calmness to the process.</p>
            </div>
            <div class="family-why-layout">
                <div class="family-why-visual" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/imgs/family/fv-why.webp') }}" alt="Families choosing careful visa guidance">
                </div>
                <div class="family-why-grid" data-aos="fade-up" data-aos-delay="150">
                    @foreach ($whyCards as $card)
                        <div class="family-why-card">
                            <div class="family-soft-icon"><i class="{{ $card['icon'] }}"></i></div>
                            <h3>{{ $card['title'] }}</h3>
                            <p>{{ $card['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="family-testimonials-before-cta">
        @include('partials.testi', [
            'testiIntroP1' => 'Hear from families who trusted Visawizer for partner, parent, child, carer, and relative visa guidance.',
            'testiIntroP2' => 'Real feedback from people who needed clarity, careful document planning, and calm support through important family visa decisions.',
        ])
    </div>

    @include('partials.commonCta', [
        'ctaBg' => asset('assets/imgs/family/fv-cta-bg.webp'),
        'ctaEyebrow' => 'Reunite with confidence',
        'ctaHeading' => 'Ready to explore the right family visa pathway?',
        'ctaLead' => 'Speak with Visawizer and understand the documents, eligibility, and next steps for your family visa application.',
        'ctaPrimaryLabel' => 'Speak to an Expert',
        'ctaPrimaryUrl' => url('contact-us'),
        'ctaSecondaryLabel' => 'Book Appointment',
        'ctaSecondaryUrl' => url('book-appointment'),
    ])

    @include('partials.faq')
    @include('partials.blogs')
</div>
@endsection
