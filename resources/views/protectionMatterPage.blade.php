@extends('layouts.frontend')
@section('content')
@include('partials.studyPageStyles')

@php
    $hero = $page['hero'];
    $matterImages = $page['images'] ?? [];
    $heroImage = asset($matterImages['hero'] ?? $page['heroImage'] ?? 'assets/imgs/protection/art-review-appeals/hero.webp');
    $isProtectionMatter = ($page['slug'] ?? '') === 'protection-visa-866';
@endphp

<style type="text/css">
    .matter-page {
        --matter-dark: #071019;
        --matter-ink: #0f172a;
        --matter-muted: #64748b;
        --matter-soft: #f5faf9;
        --matter-accent: var(--theme-color-3);
        --matter-gold: #d7a642;
        --matter-border: rgba(15, 23, 42, 0.1);
    }
    .matter-page .matter-section {
        padding: clamp(70px, 8vw, 108px) 0;
        position: relative;
        overflow: hidden;
    }
    .matter-page .matter-light {
        background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
    }
    .matter-page .matter-soft {
        background:
            radial-gradient(circle at 8% 18%, color-mix(in srgb, var(--matter-accent) 10%, transparent), transparent 28%),
            linear-gradient(180deg, var(--matter-soft), #ffffff);
    }
    .matter-page .matter-dark {
        background:
            radial-gradient(circle at 12% 20%, color-mix(in srgb, var(--matter-accent) 18%, transparent), transparent 28%),
            radial-gradient(circle at 86% 82%, rgba(215, 166, 66, 0.18), transparent 28%),
            linear-gradient(145deg, #071019 0%, #132235 58%, #101827 100%);
        color: #f8fafc;
    }
    .matter-page .matter-dark h2,
    .matter-page .matter-dark h3,
    .matter-page .matter-dark .common-title h2 {
        color: #ffffff !important;
    }
    .matter-page .matter-dark p {
        color: rgba(248, 250, 252, 0.88);
    }
    .matter-page .matter-hero {
        background-position: center;
        background-size: cover;
        padding: clamp(46px, 6vw, 76px) 0 clamp(44px, 5vw, 70px);
        isolation: isolate;
    }
    .matter-page .matter-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: -1;
        background:
            linear-gradient(90deg, rgba(7, 16, 25, 0.94), rgba(7, 16, 25, 0.78) 48%, rgba(7, 16, 25, 0.42)),
            radial-gradient(circle at 82% 22%, rgba(215, 166, 66, 0.2), transparent 24%);
    }
    .matter-page .matter-hero-grid {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .matter-page .matter-hero-copy {
        max-width: 1160px;
        margin: 0 auto;
        text-align: center;
    }
    .matter-page .matter-hero-copy h1 {
        color: #ffffff;
        font-size: clamp(2.25rem, 4.8vw, 4.15rem);
        line-height: 1.08;
        margin-bottom: 20px;
    }
    .matter-page .matter-tag {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        font-size: 0.82rem;
        font-weight: 800;
        margin-bottom: 18px;
    }
    .matter-page .matter-tag::before {
        content: "";
        width: 38px;
        height: 2px;
        background: var(--matter-gold);
    }
    .matter-page .matter-hero-sub,
    .matter-page .matter-lead {
        font-size: 1.08rem;
        line-height: 1.72;
        color: rgba(255, 255, 255, 0.92);
    }
    .matter-page .matter-hero-separator {
        width: 120px;
        height: 3px;
        border-radius: 999px;
        margin-top: 18px;
        margin-left: auto;
        margin-right: auto;
        background: linear-gradient(90deg, var(--matter-accent), var(--matter-gold));
    }
    .matter-page .matter-hero-body {
        margin-top: 22px;
        display: grid;
        gap: 12px;
        max-width: 1040px;
        margin-left: auto;
        margin-right: auto;
    }
    .matter-page .matter-hero-body p {
        color: rgba(255, 255, 255, 0.88);
        line-height: 1.72;
        margin: 0;
    }
    .matter-page .matter-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        margin-top: 30px;
        align-items: center;
        justify-content: center;
    }
    .matter-page .matter-outline-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 24px;
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.72);
        color: #ffffff;
        font-weight: 800;
    }
    .matter-page .matter-outline-btn:hover {
        background: #ffffff;
        color: var(--matter-ink);
    }
    .matter-page .matter-hero-card {
        border-radius: 28px;
        padding: clamp(28px, 4vw, 42px);
        background: rgba(255, 255, 255, 0.11);
        border: 1px solid rgba(255, 255, 255, 0.16);
        box-shadow: 0 24px 58px rgba(0, 0, 0, 0.24);
        backdrop-filter: blur(8px);
    }
    .matter-page .matter-hero-card span {
        display: inline-flex;
        margin-bottom: 18px;
        color: var(--matter-gold);
        font-weight: 900;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        font-size: 0.78rem;
    }
    .matter-page .matter-hero-card p {
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.75;
        margin-bottom: 0;
    }
    .matter-page .matter-section-head {
        max-width: 860px;
        margin-bottom: clamp(32px, 5vw, 54px);
    }
    .matter-page .matter-section-head.center {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }
    .matter-page .matter-section-head .common-title {
        position: relative;
        padding-bottom: 18px;
        margin-bottom: 18px !important;
    }
    .matter-page .matter-section-head .common-title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 110px;
        height: 3px;
        border-radius: 999px;
        background: linear-gradient(90deg, var(--matter-accent), var(--matter-gold));
    }
    .matter-page .matter-section-head.center .common-title::after {
        left: 50%;
        transform: translateX(-50%);
    }
    .matter-page .matter-image-panel {
        min-height: 280px;
        border-radius: 28px;
        overflow: hidden;
        position: relative;
        background: var(--matter-panel-image) center / cover;
        box-shadow: 0 24px 58px rgba(15, 23, 42, 0.14);
    }
    .matter-page .matter-image-panel::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            linear-gradient(180deg, rgba(7, 16, 25, 0.08), rgba(7, 16, 25, 0.7)),
            radial-gradient(circle at 88% 18%, rgba(215, 166, 66, 0.24), transparent 26%);
    }
    .matter-page .matter-image-panel span {
        position: absolute;
        left: 26px;
        right: 26px;
        bottom: 26px;
        color: #ffffff;
        font-weight: 900;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        font-size: 0.8rem;
        z-index: 1;
    }
    .matter-page .matter-split-head {
        display: grid;
        grid-template-columns: minmax(0, 0.95fr) minmax(320px, 0.72fr);
        gap: clamp(24px, 4vw, 48px);
        align-items: stretch;
        margin-bottom: clamp(32px, 5vw, 54px);
    }
    .matter-page .matter-split-head .matter-section-head {
        margin-bottom: 0;
        align-self: center;
    }
    .matter-page .matter-dark .matter-split-head .matter-image-panel {
        border: 1px solid rgba(255, 255, 255, 0.13);
        box-shadow: 0 24px 58px rgba(0, 0, 0, 0.2);
    }
    .matter-page .matter-feature-grid {
        display: grid;
        gap: 22px;
    }
    .matter-page .matter-feature-card {
        display: grid;
        grid-template-columns: minmax(280px, 0.64fr) minmax(0, 1.36fr);
        gap: 18px;
        align-items: stretch;
        border-radius: 30px;
        padding: 18px;
        background:
            radial-gradient(circle at 92% 10%, color-mix(in srgb, var(--matter-accent) 8%, transparent), transparent 24%),
            #ffffff;
        border: 1px solid var(--matter-border);
        box-shadow: 0 24px 58px rgba(15, 23, 42, 0.08);
    }
    .matter-page .matter-feature-card:nth-child(even) {
        background: linear-gradient(145deg, var(--matter-soft), #ffffff);
    }
    .matter-page .matter-feature-visual {
        min-height: 100%;
        border-radius: 24px;
        position: relative;
        overflow: hidden;
        padding: clamp(26px, 3vw, 36px);
        background:
            linear-gradient(rgba(7, 16, 25, 0.34), rgba(7, 16, 25, 0.76)),
            var(--matter-feature-bg) center / cover;
        box-shadow: 0 20px 48px rgba(15, 23, 42, 0.14);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
    }
    .matter-page .matter-feature-visual::before {
        content: "";
        position: absolute;
        inset: 18px;
        border: 1px solid rgba(255, 255, 255, 0.14);
        border-radius: 18px;
        pointer-events: none;
    }
    .matter-page .matter-feature-label {
        color: #ffffff;
        font-weight: 900;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        font-size: 0.8rem;
        position: relative;
        z-index: 1;
    }
    .matter-page .matter-feature-label::before {
        content: "";
        display: block;
        width: 78px;
        height: 3px;
        border-radius: 999px;
        margin-bottom: 16px;
        background: linear-gradient(90deg, var(--matter-gold), rgba(255, 255, 255, 0.55));
    }
    .matter-page .matter-feature-body {
        border-radius: 24px;
        padding: clamp(30px, 4vw, 54px);
        background: #ffffff;
        border: 1px solid rgba(15, 23, 42, 0.06);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.7);
    }
    .matter-page .matter-feature-separator {
        width: 108px;
        height: 3px;
        border-radius: 999px;
        margin: 18px 0 22px;
        background: linear-gradient(90deg, var(--matter-accent), var(--matter-gold));
    }
    .matter-page .matter-feature-body p,
    .matter-page .matter-card p,
    .matter-page .matter-note p,
    .matter-page .matter-process-card p {
        line-height: 1.68;
        margin-bottom: 0;
    }
    .matter-page .matter-feature-body p + p {
        margin-top: 14px;
    }
    .matter-page .matter-chip-grid,
    .matter-page .matter-card-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 16px;
    }
    .matter-page .matter-chip {
        min-height: 94px;
        display: flex;
        align-items: center;
        gap: 14px;
        border-radius: 20px;
        padding: 18px;
        background: #ffffff;
        border: 1px solid var(--matter-border);
        box-shadow: 0 16px 36px rgba(15, 23, 42, 0.07);
        font-weight: 800;
        color: var(--matter-ink);
    }
    .matter-page .matter-dark .matter-chip {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.12);
        color: #ffffff;
        box-shadow: 0 16px 36px rgba(0, 0, 0, 0.14);
    }
    .matter-page .matter-chip i {
        color: var(--matter-accent);
        font-size: 1.1rem;
    }
    .matter-page .matter-dark .matter-chip i {
        color: var(--matter-gold);
    }
    .matter-page .matter-card {
        border-radius: 24px;
        padding: 26px;
        background: #ffffff;
        border: 1px solid var(--matter-border);
        box-shadow: 0 18px 42px rgba(15, 23, 42, 0.08);
        height: 100%;
    }
    .matter-page .matter-card strong {
        display: block;
        margin-bottom: 10px;
        color: var(--matter-ink);
        font-size: 1.05rem;
    }
    .matter-page .matter-check-section {
        background:
            linear-gradient(90deg, rgba(7, 16, 25, 0.035) 1px, transparent 1px),
            linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
        background-size: 42px 42px, auto;
    }
    .matter-page .matter-check-section .matter-section-head {
        max-width: 720px;
    }
    .matter-page .matter-check-section .matter-section-head .common-title::after {
        left: 0;
        transform: none;
    }
    .matter-page .matter-check-intro {
        display: grid;
        grid-template-columns: minmax(0, 0.8fr) minmax(320px, 0.62fr);
        gap: clamp(24px, 4vw, 44px);
        align-items: stretch;
        margin-bottom: clamp(34px, 5vw, 56px);
    }
    .matter-page .matter-check-intro .matter-section-head {
        margin-bottom: 0;
        align-self: center;
    }
    .matter-page .matter-check-intro .matter-image-panel {
        min-height: 250px;
    }
    .matter-page .matter-check-grid {
        grid-template-columns: repeat(12, minmax(0, 1fr));
        gap: 18px;
        position: relative;
        align-items: stretch;
    }
    .matter-page .matter-check-card {
        display: grid;
        grid-template-columns: 78px 1fr;
        gap: 18px;
        align-items: center;
        min-height: 156px;
        border-radius: 12px 28px 28px 28px;
        padding: 26px;
        background:
            linear-gradient(180deg, color-mix(in srgb, var(--matter-accent) 7%, #ffffff), #ffffff 42%),
            #ffffff;
        border: 1px solid rgba(15, 23, 42, 0.08);
        box-shadow: 0 18px 44px rgba(15, 23, 42, 0.08);
        position: relative;
        isolation: isolate;
    }
    .matter-page .matter-check-card:nth-child(1),
    .matter-page .matter-check-card:nth-child(6) {
        grid-column: span 5;
        background:
            radial-gradient(circle at 90% 12%, rgba(215, 166, 66, 0.2), transparent 28%),
            linear-gradient(145deg, #071019, #14243a);
        color: #ffffff;
    }
    .matter-page .matter-check-card:nth-child(2),
    .matter-page .matter-check-card:nth-child(5) {
        grid-column: span 4;
    }
    .matter-page .matter-check-card:nth-child(3),
    .matter-page .matter-check-card:nth-child(4) {
        grid-column: span 3;
    }
    .matter-page .matter-check-card::before {
        content: "";
        position: absolute;
        left: 22px;
        top: -12px;
        width: 118px;
        height: 28px;
        border-radius: 14px 14px 0 0;
        background: color-mix(in srgb, var(--matter-accent) 12%, #ffffff);
        border: 1px solid rgba(15, 23, 42, 0.06);
        border-bottom: 0;
        z-index: -1;
    }
    .matter-page .matter-check-card:nth-child(1)::before,
    .matter-page .matter-check-card:nth-child(6)::before {
        background: linear-gradient(90deg, var(--matter-gold), color-mix(in srgb, var(--matter-accent) 28%, #ffffff));
        border-color: rgba(255, 255, 255, 0.14);
    }
    .matter-page .matter-check-card::after {
        content: "";
        position: absolute;
        inset: 14px;
        border: 1px dashed rgba(15, 23, 42, 0.1);
        border-radius: 8px 20px 20px 20px;
        pointer-events: none;
    }
    .matter-page .matter-check-no {
        width: 68px;
        height: 68px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #ffffff;
        color: var(--matter-accent);
        font-weight: 900;
        border: 1px solid rgba(15, 23, 42, 0.08);
        box-shadow: 0 14px 28px rgba(15, 23, 42, 0.1);
        position: relative;
        z-index: 1;
    }
    .matter-page .matter-check-card:nth-child(1) .matter-check-no,
    .matter-page .matter-check-card:nth-child(6) .matter-check-no {
        background: rgba(255, 255, 255, 0.12);
        color: var(--matter-gold);
        border: 1px solid rgba(255, 255, 255, 0.15);
    }
    .matter-page .matter-check-card strong {
        display: block;
        margin-bottom: 10px;
        color: var(--matter-ink);
        font-size: 1.12rem;
        position: relative;
        z-index: 1;
    }
    .matter-page .matter-check-card:nth-child(1) strong,
    .matter-page .matter-check-card:nth-child(6) strong {
        color: #ffffff;
    }
    .matter-page .matter-check-card p {
        line-height: 1.65;
        margin-bottom: 0;
        position: relative;
        z-index: 1;
    }
    .matter-page .matter-check-card:nth-child(1) p,
    .matter-page .matter-check-card:nth-child(6) p {
        color: rgba(255, 255, 255, 0.84);
    }
    .matter-page .matter-note {
        margin-top: 28px;
        border-radius: 22px;
        padding: 24px;
        background: color-mix(in srgb, var(--matter-accent) 8%, #ffffff);
        border-left: 4px solid var(--matter-accent);
    }
    .matter-page .matter-dark .matter-note {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.13);
        border-left: 4px solid var(--matter-gold);
    }
    .matter-page .matter-doc-shell {
        display: grid;
        grid-template-columns: minmax(0, 0.82fr) minmax(0, 1.18fr);
        gap: clamp(24px, 4vw, 48px);
        align-items: start;
    }
    .matter-page .matter-doc-shell .matter-image-panel {
        margin-top: 28px;
        min-height: 240px;
    }
    .matter-page .matter-doc-list,
    .matter-page .matter-mistake-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .matter-page .matter-doc-list li,
    .matter-page .matter-mistake-list li {
        display: flex;
        gap: 12px;
        align-items: flex-start;
        padding: 16px;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.12);
        color: #ffffff;
        font-weight: 700;
    }
    .matter-page .matter-doc-list li i {
        color: var(--matter-gold);
        margin-top: 4px;
    }
    .matter-page .matter-mistake-list li {
        background: #ffffff;
        color: var(--matter-ink);
        border-color: var(--matter-border);
        box-shadow: 0 12px 30px rgba(15, 23, 42, 0.06);
    }
    .matter-page .matter-mistake-list li i {
        color: #b91c1c;
        margin-top: 4px;
    }
    .matter-page .matter-mistake-shell {
        display: grid;
        grid-template-columns: minmax(300px, 0.74fr) minmax(0, 1.26fr);
        gap: clamp(24px, 4vw, 48px);
        align-items: stretch;
    }
    .matter-page .matter-mistake-shell .matter-section-head {
        text-align: left;
        margin-left: 0;
        margin-right: 0;
    }
    .matter-page .matter-mistake-shell .matter-section-head .common-subtitle {
        justify-content: flex-start !important;
    }
    .matter-page .matter-mistake-shell .matter-section-head .common-title::after {
        left: 0;
        transform: none;
    }
    .matter-page .matter-mistake-shell .matter-image-panel {
        min-height: 100%;
    }
    .matter-page .matter-process-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 18px;
    }
    .matter-page .matter-process-showcase {
        display: grid;
        grid-template-columns: minmax(300px, 0.7fr) minmax(0, 1.3fr);
        gap: clamp(24px, 4vw, 44px);
        align-items: stretch;
    }
    .matter-page .matter-process-showcase .matter-image-panel {
        min-height: 100%;
        border: 1px solid rgba(255, 255, 255, 0.13);
    }
    .matter-page .matter-process-card {
        border-radius: 24px;
        padding: 28px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.13);
    }
    .matter-page .matter-process-card:nth-child(2n) {
        background: rgba(255, 255, 255, 0.12);
    }
    .matter-page .matter-process-no {
        display: inline-flex;
        margin-bottom: 18px;
        color: var(--matter-gold);
        font-weight: 900;
        letter-spacing: 0.1em;
    }
    .matter-page--protection .protection-pathway-wrap {
        display: grid;
        gap: 30px;
    }
    .matter-page--protection .protection-pathway-card {
        display: grid;
        grid-template-columns: minmax(300px, 0.74fr) minmax(0, 1.26fr);
        gap: 0;
        border-radius: 32px;
        overflow: hidden;
        background: #ffffff;
        border: 1px solid var(--matter-border);
        box-shadow: 0 24px 58px rgba(15, 23, 42, 0.08);
    }
    .matter-page--protection .protection-pathway-card:nth-child(even) {
        grid-template-columns: minmax(0, 1.26fr) minmax(300px, 0.74fr);
        background:
            radial-gradient(circle at 88% 16%, rgba(215, 166, 66, 0.18), transparent 28%),
            linear-gradient(145deg, #071019, #14243a);
        border-color: rgba(255, 255, 255, 0.13);
        box-shadow: 0 24px 58px rgba(15, 23, 42, 0.16);
    }
    .matter-page--protection .protection-pathway-card:nth-child(even) .protection-pathway-visual {
        order: 2;
    }
    .matter-page--protection .protection-pathway-card:nth-child(even) .protection-pathway-copy {
        order: 1;
    }
    .matter-page--protection .protection-pathway-card:nth-child(even) .common-title h2,
    .matter-page--protection .protection-pathway-card:nth-child(even) .protection-pathway-copy p {
        color: #ffffff !important;
    }
    .matter-page--protection .protection-pathway-card:nth-child(even) .common-subtitle span {
        color: rgba(248, 250, 252, 0.78) !important;
    }
    .matter-page--protection .protection-pathway-card:nth-child(even) .matter-feature-separator {
        background: linear-gradient(90deg, var(--matter-gold), rgba(255, 255, 255, 0.58));
    }
    .matter-page--protection .protection-pathway-card:nth-child(3) {
        grid-template-columns: 1fr;
        background:
            linear-gradient(180deg, color-mix(in srgb, var(--matter-accent) 6%, #ffffff), #ffffff 44%),
            #ffffff;
    }
    .matter-page--protection .protection-pathway-card:nth-child(3) .protection-pathway-visual {
        min-height: 210px;
        border-radius: 0 0 34px 34px;
        order: 1;
    }
    .matter-page--protection .protection-pathway-card:nth-child(3) .protection-pathway-copy {
        order: 2;
        max-width: 980px;
        margin: 0 auto;
        text-align: center;
        padding-top: clamp(34px, 4vw, 48px);
    }
    .matter-page--protection .protection-pathway-card:nth-child(3) .common-title {
        text-align: center !important;
    }
    .matter-page--protection .protection-pathway-card:nth-child(3) .matter-feature-separator {
        margin-left: auto;
        margin-right: auto;
    }
    .matter-page--protection .protection-pathway-visual {
        min-height: 360px;
        background: var(--protection-pathway-image) center / cover;
        position: relative;
        isolation: isolate;
    }
    .matter-page--protection .protection-pathway-visual::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            linear-gradient(180deg, rgba(7, 16, 25, 0.08), rgba(7, 16, 25, 0.76)),
            radial-gradient(circle at 82% 16%, rgba(215, 166, 66, 0.24), transparent 28%);
        z-index: -1;
    }
    .matter-page--protection .protection-pathway-count {
        position: absolute;
        left: 28px;
        top: 28px;
        width: 76px;
        height: 76px;
        border-radius: 24px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.14);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: var(--matter-gold);
        font-weight: 900;
    }
    .matter-page--protection .protection-pathway-label {
        position: absolute;
        left: 28px;
        right: 28px;
        bottom: 28px;
        color: #ffffff;
        font-weight: 900;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        font-size: 0.8rem;
    }
    .matter-page--protection .protection-pathway-label::before {
        content: "";
        display: block;
        width: 84px;
        height: 3px;
        border-radius: 999px;
        margin-bottom: 16px;
        background: linear-gradient(90deg, var(--matter-gold), rgba(255, 255, 255, 0.72));
    }
    .matter-page--protection .protection-pathway-copy {
        padding: clamp(32px, 5vw, 62px);
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .matter-page--protection .protection-pathway-copy p {
        line-height: 1.72;
        margin-bottom: 0;
    }
    .matter-page--protection .protection-pathway-copy p + p {
        margin-top: 14px;
    }
    .matter-page--protection .protection-doc-section {
        background:
            linear-gradient(90deg, rgba(7, 16, 25, 0.92), rgba(7, 16, 25, 0.8)),
            var(--protection-doc-image) center / cover;
    }
    .matter-page--protection .protection-doc-panel {
        padding: clamp(28px, 4vw, 46px);
        border-radius: 28px;
        background: rgba(7, 16, 25, 0.62);
        border: 1px solid rgba(255, 255, 255, 0.13);
        backdrop-filter: blur(8px);
    }
    .matter-page--protection .protection-doc-panel .matter-doc-shell {
        grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
    }
    .matter-page--protection .protection-doc-note-full {
        width: 100%;
        max-width: none;
        margin-top: 28px;
    }
    .matter-page--protection .protection-mistake-layout {
        display: grid;
        grid-template-columns: minmax(0, 0.82fr) minmax(0, 1.18fr);
        gap: clamp(24px, 4vw, 48px);
        align-items: center;
    }
    .matter-page--protection .protection-mistake-summary {
        border-radius: 30px;
        padding: clamp(30px, 4vw, 50px);
        background:
            radial-gradient(circle at 88% 12%, rgba(215, 166, 66, 0.16), transparent 28%),
            linear-gradient(145deg, #071019, #14243a);
        color: #ffffff;
        min-height: 100%;
    }
    .matter-page--protection .protection-mistake-summary .common-title h2,
    .matter-page--protection .protection-mistake-summary p {
        color: #ffffff !important;
    }
    .matter-page--protection .protection-mistake-summary .common-title::after {
        background: linear-gradient(90deg, var(--matter-gold), rgba(255, 255, 255, 0.64));
    }
    .matter-page--protection .protection-process-section {
        background:
            radial-gradient(circle at 14% 18%, color-mix(in srgb, var(--matter-accent) 18%, transparent), transparent 28%),
            radial-gradient(circle at 88% 78%, rgba(215, 166, 66, 0.18), transparent 28%),
            linear-gradient(145deg, #071019 0%, #132235 58%, #101827 100%);
        color: #f8fafc;
    }
    .matter-page--protection .protection-process-section .matter-section-head .common-title h2 {
        color: #ffffff !important;
    }
    .matter-page--protection .protection-process-section .matter-section-head p {
        color: rgba(248, 250, 252, 0.88);
    }
    .matter-page--protection .protection-process-section .common-subtitle span {
        color: rgba(248, 250, 252, 0.82) !important;
    }
    .matter-page--protection .protection-process-timeline {
        display: grid;
        gap: 16px;
        position: relative;
        max-width: 980px;
        margin: 0 auto;
    }
    .matter-page--protection .protection-process-step {
        display: grid;
        grid-template-columns: 86px 1fr;
        gap: 18px;
        align-items: start;
        border-radius: 24px;
        padding: 24px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.13);
        box-shadow: 0 18px 42px rgba(0, 0, 0, 0.16);
    }
    .matter-page--protection .protection-process-step:nth-child(even) {
        margin-left: clamp(0px, 8vw, 120px);
        background: rgba(255, 255, 255, 0.12);
    }
    .matter-page--protection .protection-process-step span {
        width: 70px;
        height: 70px;
        border-radius: 22px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: var(--matter-accent);
        background: #ffffff;
        font-weight: 900;
    }
    .matter-page--protection .protection-process-step h3 {
        color: #ffffff !important;
    }
    .matter-page--protection .protection-process-step p {
        color: rgba(248, 250, 252, 0.84);
        line-height: 1.68;
        margin-bottom: 0;
    }
    .matter-page .matter-final-panel {
        border-radius: 30px;
        padding: clamp(34px, 5vw, 58px);
        background:
            linear-gradient(145deg, rgba(7, 16, 25, 0.92), rgba(19, 34, 53, 0.88)),
            url('{{ $heroImage }}') center / cover;
        color: #ffffff;
        text-align: center;
        box-shadow: 0 24px 58px rgba(15, 23, 42, 0.18);
    }
    .matter-page .matter-final-panel h2 {
        color: #ffffff;
        font-size: clamp(1.85rem, 3.5vw, 3rem);
        line-height: 1.16;
    }
    .matter-page .matter-final-panel p {
        color: rgba(255, 255, 255, 0.9);
        max-width: 760px;
        margin: 14px auto 0;
        line-height: 1.72;
    }
    .matter-page .matter-final-panel .matter-actions {
        justify-content: center;
    }
    @media (max-width: 991px) {
        .matter-page .matter-feature-card,
        .matter-page .matter-doc-shell,
        .matter-page .matter-split-head,
        .matter-page .matter-check-intro,
        .matter-page .matter-mistake-shell,
        .matter-page .matter-process-showcase,
        .matter-page--protection .protection-pathway-card,
        .matter-page--protection .protection-pathway-card:nth-child(even),
        .matter-page--protection .protection-doc-panel .matter-doc-shell,
        .matter-page--protection .protection-mistake-layout {
            grid-template-columns: 1fr;
        }
        .matter-page--protection .protection-pathway-card:nth-child(even) .protection-pathway-visual,
        .matter-page--protection .protection-pathway-card:nth-child(even) .protection-pathway-copy {
            order: initial;
        }
        .matter-page--protection .protection-pathway-card:nth-child(3) .protection-pathway-copy {
            text-align: left;
        }
        .matter-page--protection .protection-pathway-card:nth-child(3) .common-title {
            text-align: left !important;
        }
        .matter-page--protection .protection-pathway-card:nth-child(3) .matter-feature-separator {
            margin-left: 0;
            margin-right: 0;
        }
        .matter-page .matter-mistake-shell .matter-image-panel,
        .matter-page .matter-process-showcase .matter-image-panel {
            min-height: 280px;
        }
        .matter-page--protection .protection-process-step:nth-child(even) {
            margin-left: 0;
        }
        .matter-page .matter-chip-grid,
        .matter-page .matter-card-grid,
        .matter-page .matter-process-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
        .matter-page .matter-check-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
        .matter-page .matter-check-card:nth-child(n) {
            grid-column: auto;
        }
        .matter-page .matter-process-card:nth-child(2n) {
            transform: none;
        }
        .matter-page .matter-check-card:nth-child(2),
        .matter-page .matter-check-card:nth-child(5) {
            transform: none;
        }
    }
    @media (max-width: 767px) {
        .matter-page .matter-chip-grid,
        .matter-page .matter-card-grid,
        .matter-page .matter-doc-list,
        .matter-page .matter-mistake-list,
        .matter-page .matter-process-grid,
        .matter-page .matter-check-grid {
            grid-template-columns: 1fr;
        }
        .matter-page .matter-actions {
            align-items: stretch;
            flex-direction: column;
        }
        .matter-page .matter-actions a {
            justify-content: center;
        }
    }
</style>

<div class="matter-page {{ $isProtectionMatter ? 'matter-page--protection' : '' }}">
    <section class="matter-section matter-hero matter-dark" style="background-image: url('{{ $heroImage }}');">
        <div class="container">
            <div class="matter-hero-grid">
                <div class="matter-hero-copy" data-aos="fade-up">
                    <div class="matter-tag">{{ $hero['tagline'] }}</div>
                    <h1>{{ $hero['heading'] }}</h1>
                    <p class="matter-hero-sub m-b-0">{{ $hero['subheading'] }}</p>
                    <div class="matter-hero-separator"></div>
                    <div class="matter-hero-body">
                        @foreach ($hero['content'] as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </div>
                    <div class="matter-actions">
                        <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                            {{ $hero['primaryCta'] }}
                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                        </a>
                        <a class="matter-outline-btn" href="{{ url('book-appointment') }}"><i class="fa-regular fa-calendar-check"></i>{{ $hero['secondaryCta'] }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($isProtectionMatter)
        <section class="matter-section matter-light">
            <div class="container">
                <div class="protection-pathway-wrap">
                    @foreach ($page['sections'] as $index => $section)
                        <div class="protection-pathway-card" data-aos="fade-up" data-aos-delay="{{ $index * 90 }}">
                            <div class="protection-pathway-visual" style="--protection-pathway-image: url('{{ $heroImage }}');">
                                <span class="protection-pathway-count">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                                <span class="protection-pathway-label">{{ $section['eyebrow'] }}</span>
                            </div>
                            <div class="protection-pathway-copy">
                                <div class="common-subtitle text-uppercase"><span>{{ $section['eyebrow'] }}</span></div>
                                <div class="common-title text-start m-b-15"><h2>{{ $section['heading'] }}</h2></div>
                                <p class="study-copy-sub m-b-0">{{ $section['subheading'] }}</p>
                                <div class="matter-feature-separator"></div>
                                @foreach ($section['content'] as $paragraph)
                                    <p>{{ $paragraph }}</p>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @else
        <section class="matter-section matter-light">
            <div class="container">
                <div class="matter-feature-grid">
                    @foreach ($page['sections'] as $index => $section)
                        <div class="matter-feature-card" data-aos="fade-up" data-aos-delay="{{ $index * 90 }}">
                            <div class="matter-feature-visual" style="--matter-feature-bg: url('{{ $heroImage }}');">
                                <div class="matter-feature-label">{{ $section['eyebrow'] }}</div>
                            </div>
                            <div class="matter-feature-body">
                                <div class="common-subtitle text-uppercase"><span>{{ $section['eyebrow'] }}</span></div>
                                <div class="common-title text-start m-b-15"><h2>{{ $section['heading'] }}</h2></div>
                                <p class="study-copy-sub m-b-0">{{ $section['subheading'] }}</p>
                                <div class="matter-feature-separator"></div>
                                @foreach ($section['content'] as $paragraph)
                                    <p>{{ $paragraph }}</p>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if (!empty($page['situations']))
        <section class="matter-section matter-dark">
            <div class="container">
                <div class="matter-split-head">
                    <div class="matter-section-head" data-aos="fade-up">
                        <div class="common-subtitle text-uppercase"><span>When support may be needed</span></div>
                        <div class="common-title text-start"><h2>{{ $page['situations']['heading'] }}</h2></div>
                        <p class="study-copy-sub m-b-0">{{ $page['situations']['subheading'] }}</p>
                    </div>
                    <div class="matter-image-panel" style="--matter-panel-image: url('{{ asset($matterImages['situations']) }}');" data-aos="fade-up" data-aos-delay="120">
                        <span>Review situations</span>
                    </div>
                </div>
                <div class="matter-chip-grid" data-aos="fade-up" data-aos-delay="160">
                    @foreach ($page['situations']['items'] as $item)
                        <div class="matter-chip"><i class="fa-regular fa-circle-check"></i>{{ $item }}</div>
                    @endforeach
                </div>
                @if (!empty($page['situations']['note']))
                    <div class="matter-note" data-aos="fade-up" data-aos-delay="160">
                        <p>{{ $page['situations']['note'] }}</p>
                    </div>
                @endif
            </div>
        </section>
    @endif

    @if (!empty($page['checklist']))
        <section class="matter-section matter-check-section">
            <div class="container">
                <div class="matter-check-intro">
                    <div class="matter-section-head" data-aos="fade-up">
                        <div class="common-subtitle text-uppercase"><span>What to check immediately</span></div>
                        <div class="common-title text-start"><h2>{{ $page['checklist']['heading'] }}</h2></div>
                        <p class="study-copy-sub m-b-0">{{ $page['checklist']['subheading'] }}</p>
                    </div>
                    <div class="matter-image-panel" style="--matter-panel-image: url('{{ asset($matterImages['checklist']) }}');" data-aos="fade-up" data-aos-delay="120">
                        <span>Deadline and status checks</span>
                    </div>
                </div>
                <div class="matter-card-grid matter-check-grid" data-aos="fade-up" data-aos-delay="160">
                    @foreach ($page['checklist']['items'] as $index => $item)
                        <div class="matter-check-card">
                            <span class="matter-check-no">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <div>
                                <strong>{{ $item['title'] }}</strong>
                            <p>{{ $item['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if (!empty($page['checklist']['note']))
                    <div class="matter-note" data-aos="fade-up" data-aos-delay="160">
                        <p>{{ $page['checklist']['note'] }}</p>
                    </div>
                @endif
            </div>
        </section>
    @endif

    <section class="matter-section matter-dark {{ $isProtectionMatter ? 'protection-doc-section' : '' }}" @if ($isProtectionMatter) style="--protection-doc-image: url('{{ asset($matterImages['documents']) }}');" @endif>
        <div class="container">
            <div class="{{ $isProtectionMatter ? 'protection-doc-panel' : '' }}">
                <div class="matter-doc-shell">
                    <div class="matter-section-head" data-aos="fade-up">
                        <div class="common-subtitle text-uppercase"><span>Documents and evidence</span></div>
                        <div class="common-title text-start"><h2>{{ $page['documents']['heading'] }}</h2></div>
                        <p class="study-copy-sub m-b-0">{{ $page['documents']['subheading'] }}</p>
                        @if (!empty($page['documents']['note']) && !$isProtectionMatter)
                            <div class="matter-note">
                                <p>{{ $page['documents']['note'] }}</p>
                            </div>
                        @endif
                    </div>
                    <ul class="matter-doc-list" data-aos="fade-up" data-aos-delay="120">
                        @foreach ($page['documents']['items'] as $item)
                            <li><i class="fa-regular fa-folder-check"></i>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                @if (!empty($page['documents']['note']) && $isProtectionMatter)
                    <div class="matter-note protection-doc-note-full" data-aos="fade-up" data-aos-delay="160">
                        <p>{{ $page['documents']['note'] }}</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section class="matter-section matter-soft">
        <div class="container">
            @if ($isProtectionMatter)
                <div class="protection-mistake-layout">
                    <div class="protection-mistake-summary" data-aos="fade-up">
                        <div class="common-subtitle text-uppercase"><span>Common mistakes</span></div>
                        <div class="common-title text-start"><h2>{{ $page['mistakes']['heading'] }}</h2></div>
                        <p class="study-copy-sub m-b-0">{{ $page['mistakes']['subheading'] }}</p>
                    </div>
                    <ul class="matter-mistake-list" data-aos="fade-up" data-aos-delay="120">
                        @foreach ($page['mistakes']['items'] as $item)
                            <li><i class="fa-regular fa-triangle-exclamation"></i>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @else
                <div class="matter-mistake-shell">
                    <div class="matter-image-panel" style="--matter-panel-image: url('{{ asset($matterImages['mistakes']) }}');" data-aos="fade-up">
                        <span>Avoidable review risks</span>
                    </div>
                    <div>
                        <div class="matter-section-head center" data-aos="fade-up" data-aos-delay="100">
                            <div class="common-subtitle text-uppercase justify-content-center"><span>Common mistakes</span></div>
                            <div class="common-title"><h2>{{ $page['mistakes']['heading'] }}</h2></div>
                            <p class="study-copy-sub m-b-0">{{ $page['mistakes']['subheading'] }}</p>
                        </div>
                        <ul class="matter-mistake-list" data-aos="fade-up" data-aos-delay="160">
                            @foreach ($page['mistakes']['items'] as $item)
                                <li><i class="fa-regular fa-triangle-exclamation"></i>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="matter-section {{ $isProtectionMatter ? 'protection-process-section' : 'matter-dark' }}">
        <div class="container">
            <div class="matter-section-head center" data-aos="fade-up">
                <div class="common-subtitle text-uppercase justify-content-center"><span>How Visawizer helps</span></div>
                <div class="common-title"><h2>{{ $page['process']['heading'] }}</h2></div>
                <p class="study-copy-sub m-b-0">{{ $page['process']['subheading'] }}</p>
            </div>
            @if ($isProtectionMatter)
                <div class="protection-process-timeline" data-aos="fade-up" data-aos-delay="120">
                    @foreach ($page['process']['items'] as $index => $item)
                        <div class="protection-process-step">
                            <span>{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <div>
                                <h3>{{ $item['title'] }}</h3>
                                <p>{{ $item['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="matter-process-showcase">
                    <div class="matter-image-panel" style="--matter-panel-image: url('{{ asset($matterImages['process']) }}');" data-aos="fade-up" data-aos-delay="100">
                        <span>Structured preparation</span>
                    </div>
                    <div class="matter-process-grid" data-aos="fade-up" data-aos-delay="160">
                        @foreach ($page['process']['items'] as $index => $item)
                            <div class="matter-process-card">
                                <span class="matter-process-no">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                                <h3>{{ $item['title'] }}</h3>
                                <p>{{ $item['text'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="matter-section matter-light">
        <div class="container">
            <div class="matter-final-panel" data-aos="fade-up">
                <h2>{{ $page['finalCta']['heading'] }}</h2>
                <p>{{ $page['finalCta']['subheading'] }}</p>
                <div class="matter-actions">
                    <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">
                        {{ $page['finalCta']['primaryCta'] }}
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                    <a class="matter-outline-btn" href="{{ url('book-appointment') }}"><i class="fa-regular fa-calendar-check"></i>{{ $page['finalCta']['secondaryCta'] }}</a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.commonCta', [
        'ctaBg' => $heroImage,
        'ctaEyebrow' => 'Confidential immigration guidance',
        'ctaHeading' => 'Need confidential help with a complex immigration matter?',
        'ctaLead' => 'Refusals, cancellations, protection claims, and humanitarian matters should be handled with care. Visawizer helps you understand your position, documents, timelines, and next step.',
        'ctaPrimaryLabel' => 'Get Confidential Advice',
        'ctaPrimaryUrl' => url('contact-us'),
        'ctaSecondaryLabel' => 'Book Appointment',
        'ctaSecondaryUrl' => url('book-appointment'),
    ])

    @include('partials.testi')
    @include('partials.faq')
    @include('partials.blogs')
</div>
@endsection
