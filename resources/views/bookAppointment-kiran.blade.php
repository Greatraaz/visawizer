@extends('layouts.frontend')
@section('content')

@php
    $hero = $appointmentPage['hero'];
    $agent = $appointmentPage['agent'];
    $schedule = $appointmentPage['schedule'];
@endphp

<style type="text/css">
    .appointment-page {
        --appointment-dark: #071019;
        --appointment-ink: #071032;
        --appointment-muted: #64748b;
        --appointment-accent: var(--theme-color-3);
        --appointment-gold: #d7a642;
        --appointment-border: rgba(15, 23, 42, 0.1);
        --appointment-soft: #f8fafc;
    }
    .appointment-page .appointment-hero {
        padding: clamp(70px, 8vw, 110px) 0;
        background-image:
            linear-gradient(#00000073),
            url('{{ asset('assets/imgs/study/study-visas/hero-bg.webp') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: #ffffff;
        text-align: center;
    }
    .appointment-page .appointment-hero h1 {
        color: #ffffff;
        font-size: clamp(2.35rem, 4.8vw, 4.2rem);
        line-height: 1.1;
        margin-bottom: 16px;
    }
    .appointment-page .appointment-hero p {
        color: rgba(255, 255, 255, 0.88);
        max-width: 820px;
        margin: 0 auto;
        line-height: 1.72;
    }
    .appointment-page .appointment-section {
        padding: clamp(64px, 7vw, 98px) 0;
    }

    .appointment-page .appointment-section--alt-light {
        background: linear-gradient(180deg, #f5f7fb 0%, #ffffff 72%);
    }

    .appointment-page .appointment-section--alt-dark {
        background: linear-gradient(
            175deg,
            color-mix(in srgb, var(--theme-color-3) 86%, #060308) 0%,
            color-mix(in srgb, var(--theme-color-3) 92%, #030205) 55%,
            color-mix(in srgb, var(--theme-color-3) 88%, #0a0710) 100%
        );
        color: rgba(255, 255, 255, 0.92);
    }

    .appointment-page .appointment-section--alt-dark h2 {
        color: #ffffff;
    }

    .appointment-page .appointment-section--alt-dark .appointment-section-head p,
    .appointment-page .appointment-section--alt-dark .appointment-lead {
        color: rgba(255, 255, 255, 0.78);
    }

    .appointment-page .appointment-section--alt-dark .appointment-eyebrow {
        color: rgba(255, 255, 255, 0.94);
    }

    .appointment-page .appointment-section--alt-dark .appointment-eyebrow::before {
        background: rgba(255, 255, 255, 0.45);
    }
    .appointment-page .appointment-intro-grid {
        display: grid;
        grid-template-columns: minmax(0, 1.05fr) minmax(280px, 0.95fr);
        gap: clamp(28px, 5vw, 48px);
        align-items: center;
    }

    .appointment-page .appointment-intro-photo {
        margin: 0;
        border-radius: 9px;
        overflow: hidden;
        box-shadow: 0 18px 44px rgba(9, 32, 79, 0.1);
        border: 1px solid color-mix(in srgb, var(--theme-color-3) 14%, #d8e0ef);
        line-height: 0;
    }

    .appointment-page .appointment-intro-photo img {
        width: 100%;
        height: clamp(280px, 32vw, 400px);
        display: block;
        object-fit: cover;
        object-position: center top;
    }
    .appointment-page .appointment-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        color: var(--appointment-accent);
        font-size: 0.82rem;
        font-weight: 900;
        margin-bottom: 14px;
    }
    .appointment-page .appointment-eyebrow::before {
        content: "";
        width: 42px;
        height: 2px;
        background: var(--appointment-gold);
    }
    .appointment-page h2 {
        color: var(--appointment-ink);
        font-size: clamp(2rem, 3.6vw, 3.25rem);
        line-height: 1.15;
    }
    .appointment-page .appointment-lead {
        color: var(--appointment-muted);
        line-height: 1.72;
        margin-bottom: 0;
    }
    .appointment-page .appointment-contact-card {
        border-radius: 30px;
        padding: clamp(28px, 4vw, 44px);
        background:
            radial-gradient(circle at 90% 14%, rgba(215, 166, 66, 0.18), transparent 28%),
            linear-gradient(145deg, var(--appointment-dark), #14243a);
        box-shadow: 0 24px 58px rgba(15, 23, 42, 0.14);
    }
    .appointment-page .appointment-contact-card h3 {
        color: #ffffff;
        margin-bottom: 20px;
    }
    .appointment-page .appointment-contact-list {
        display: grid;
        gap: 14px;
    }
    .appointment-page .appointment-contact-item {
        display: grid;
        grid-template-columns: 52px 1fr;
        gap: 14px;
        align-items: center;
        padding: 15px;
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.12);
    }
    .appointment-page .appointment-contact-item i {
        width: 52px;
        height: 52px;
        border-radius: 16px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #ffffff;
        color: var(--appointment-accent);
    }
    .appointment-page .appointment-contact-item span {
        display: block;
        color: var(--appointment-gold);
        font-size: 0.78rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        margin-bottom: 3px;
    }
    .appointment-page .appointment-contact-item p,
    .appointment-page .appointment-contact-item a {
        color: #ffffff;
        margin: 0;
        font-weight: 700;
        line-height: 1.45;
    }
    .appointment-page .appointment-section-head {
        max-width: 820px;
        margin: 0 auto clamp(34px, 5vw, 54px);
        text-align: center;
    }
    .appointment-page .appointment-section-head p {
        color: var(--appointment-muted);
        line-height: 1.72;
        margin-bottom: 0;
    }
    .appointment-page .appointment-service-list {
        max-width: 1060px;
        margin: 0 auto;
        border-radius: 28px;
        overflow: hidden;
        border: 1px solid var(--appointment-border);
        box-shadow: 0 24px 58px rgba(15, 23, 42, 0.08);
        background: #ffffff;
    }
    .appointment-page .appointment-panel.is-hidden {
        display: none;
    }
    .appointment-page .appointment-thank-you-banner {
        max-width: 1060px;
        margin: 0 auto 32px;
        padding: clamp(26px, 3vw, 36px) clamp(28px, 4vw, 44px);
        background: #ffffff;
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-left: 5px solid #85BF18;
        border-radius: 8px;
        box-shadow: 0 20px 48px rgba(0, 0, 0, 0.22);
        color: var(--appointment-ink);
        position: relative;
        text-align: center;
    }
    .appointment-page .appointment-thank-you-banner.is-hidden {
        display: none;
    }
    .appointment-page .appointment-thank-you-banner .appointment-thank-you-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: color-mix(in srgb, var(--appointment-accent) 12%, #ffffff);
        color: var(--appointment-accent);
        font-size: 1.5rem;
        margin-bottom: 14px;
    }
    .appointment-page .appointment-thank-you-banner h3 {
        color: var(--appointment-accent);
        font-size: 1.45rem;
        margin: 0 0 12px;
    }
    .appointment-page .appointment-thank-you-banner p {
        margin: 0 0 10px;
        line-height: 1.55;
        color: var(--appointment-ink);
        font-size: 0.98rem;
    }
    .appointment-page .appointment-thank-you-ref {
        display: inline-block;
        margin-top: 6px;
        padding: 8px 16px;
        background: #f8fafc;
        border-radius: 4px;
        font-size: 0.92rem;
        font-weight: 800;
        color: var(--appointment-accent);
        letter-spacing: 0.02em;
    }
    .appointment-page .appointment-thank-you-close {
        position: absolute;
        top: 12px;
        right: 14px;
        border: 0;
        background: transparent;
        color: var(--appointment-muted);
        font-size: 1.6rem;
        line-height: 1;
        cursor: pointer;
        padding: 4px 8px;
    }
    .appointment-page .appointment-thank-you-close:hover {
        color: var(--appointment-ink);
    }
    .appointment-page .appointment-thank-you-cta {
        margin-top: 20px;
        border: 0;
        background: var(--appointment-accent);
        color: #ffffff;
        text-transform: uppercase;
        font-weight: 900;
        letter-spacing: 0.06em;
        padding: 13px 28px;
        cursor: pointer;
        font-size: 0.82rem;
        border-radius: 4px;
    }
    .appointment-page .appointment-thank-you-cta:hover {
        filter: brightness(1.08);
    }
    .appointment-page .appointment-service-card {
        display: grid;
        grid-template-columns: 210px 1fr 110px;
        gap: 28px;
        align-items: start;
        padding: clamp(24px, 4vw, 42px);
        border-bottom: 1px solid rgba(15, 23, 42, 0.12);
    }
    .appointment-page .appointment-service-card:last-child {
        border-bottom: 0;
    }
    .appointment-page .appointment-agent-card {
        min-height: 180px;
        border-radius: 6px;
        background:
            linear-gradient(180deg, rgba(255, 255, 255, 0.78), rgba(255, 255, 255, 0.92)),
            url('{{ asset('assets/images/services/banner-1.webp') }}') center / cover;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 18px;
        text-align: center;
    }
    .appointment-page .appointment-agent-card img {
        max-width: 126px;
        max-height: 62px;
        object-fit: contain;
        margin-bottom: 14px;
    }
    .appointment-page .appointment-agent-card strong {
        color: var(--appointment-accent);
        font-size: 0.86rem;
        display: block;
    }
    .appointment-page .appointment-agent-card span {
        display: block;
        color: var(--appointment-ink);
        font-size: 0.78rem;
        font-weight: 800;
    }
    .appointment-page .appointment-service-copy h3 {
        color: var(--appointment-ink);
        font-size: 1.18rem;
        margin-bottom: 2px;
    }
    .appointment-page .appointment-service-meta {
        color: var(--appointment-ink);
        font-weight: 700;
        margin-bottom: 20px;
    }
    .appointment-page .appointment-service-copy p {
        color: var(--appointment-ink);
        line-height: 1.62;
        margin-bottom: 22px;
    }
    .appointment-page .appointment-service-desc {
        margin-bottom: 12px;
    }
    .appointment-page .appointment-service-desc.is-collapsed {
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
        margin-bottom: 12px;
    }
    .appointment-page .appointment-show-less {
        color: var(--appointment-ink);
        text-transform: uppercase;
        letter-spacing: 0.08em;
        font-size: 0.78rem;
        font-weight: 900;
    }
    .appointment-page .appointment-desc-toggle {
        display: inline-block;
        border: 0;
        padding: 0;
        background: none;
        font: inherit;
        cursor: pointer;
        text-align: left;
    }
    .appointment-page .appointment-desc-toggle:focus-visible {
        outline: 2px solid var(--appointment-accent);
        outline-offset: 2px;
    }
    .appointment-page .appointment-book-btn {
        justify-self: end;
        border: 0;
        background: var(--appointment-accent);
        color: #ffffff;
        text-transform: uppercase;
        font-weight: 900;
        padding: 13px 22px;
        border-radius: 0;
        cursor: pointer;
    }
    .appointment-page .appointment-schedule-wrap {
        max-width: 1060px;
        margin: 0 auto;
    }
    .appointment-page .appointment-back-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #ffffff;
        background: transparent;
        border: 0;
        padding: 0;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        font-weight: 900;
        font-size: 0.85rem;
        margin-bottom: 28px;
        cursor: pointer;
    }
    .appointment-page .appointment-schedule-title {
        color: #ffffff;
        text-align: center;
        margin-bottom: 32px;
    }
    .appointment-page .appointment-selected-card,
    .appointment-page .appointment-calendar-card {
        background: #ffffff;
        border: 1px solid var(--appointment-border);
        box-shadow: 0 22px 52px rgba(0, 0, 0, 0.16);
        padding: clamp(24px, 4vw, 36px);
        margin-bottom: 34px;
    }
    .appointment-page .appointment-selected-card {
        display: grid;
        grid-template-columns: 210px 1fr 42px;
        gap: 28px;
        align-items: start;
    }
    .appointment-page .appointment-selected-card h3,
    .appointment-page .appointment-calendar-card h3 {
        color: var(--appointment-ink);
        font-size: 1.12rem;
        margin-bottom: 4px;
    }
    .appointment-page .appointment-selected-card p {
        color: var(--appointment-ink);
        line-height: 1.62;
        margin-bottom: 0;
    }
    .appointment-page .appointment-close {
        font-size: 1.7rem;
        color: var(--appointment-ink);
        text-align: right;
    }
    .appointment-page .appointment-calendar-card {
        display: grid;
        grid-template-columns: minmax(290px, 0.9fr) minmax(0, 1fr);
        gap: clamp(28px, 5vw, 64px);
    }
    .appointment-page .appointment-month {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: var(--appointment-ink);
        font-weight: 800;
        margin-bottom: 28px;
    }
    .appointment-page .appointment-calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 18px 20px;
        text-align: center;
        color: var(--appointment-ink);
    }
    .appointment-page .appointment-weekday {
        font-weight: 900;
    }
    .appointment-page .appointment-date {
        min-height: 34px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #d1d5db;
    }
    .appointment-page .appointment-date.is-available {
        color: var(--appointment-ink);
        font-weight: 800;
    }
    .appointment-page .appointment-date.is-selected {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        margin: 0 auto;
        color: #ffffff;
        background: var(--appointment-accent);
    }
    .appointment-page .appointment-timezone {
        color: var(--appointment-ink);
        font-size: 0.86rem;
        text-transform: uppercase;
        margin-bottom: 24px;
        text-decoration: underline;
        text-underline-offset: 3px;
    }
    .appointment-page .appointment-times-added {
        background: #ffffff;
        border: 1px solid var(--appointment-border);
        padding: 22px 26px;
        margin-bottom: 22px;
        max-width: 1060px;
        margin-left: auto;
        margin-right: auto;
        display: none;
    }
    .appointment-page .appointment-times-added.is-visible {
        display: block;
    }
    .appointment-page .appointment-times-added-label {
        font-size: 0.78rem;
        font-weight: 900;
        letter-spacing: 0.1em;
        color: var(--appointment-ink);
        margin-bottom: 14px;
    }
    .appointment-page .appointment-times-added-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .appointment-page .appointment-times-added-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #e5e7eb;
        color: var(--appointment-ink);
        font-weight: 700;
    }
    .appointment-page .appointment-times-added-row:last-child {
        border-bottom: 0;
    }
    .appointment-page .appointment-times-added-remove {
        border: 0;
        background: transparent;
        color: var(--appointment-accent);
        font-weight: 900;
        font-size: 0.72rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        cursor: pointer;
        padding: 4px 0;
    }
    .appointment-page .appointment-schedule-continue-wrap {
        text-align: center;
        margin-bottom: 28px;
        display: none;
    }
    .appointment-page .appointment-schedule-continue-wrap.is-visible {
        display: block;
    }
    .appointment-page .appointment-schedule-continue-btn {
        border: 0;
        background: var(--appointment-accent);
        color: #ffffff;
        text-transform: uppercase;
        font-weight: 900;
        letter-spacing: 0.06em;
        padding: 16px 48px;
        cursor: pointer;
        font-size: 0.9rem;
    }
    .appointment-page .appointment-modal-backdrop {
        position: fixed;
        inset: 0;
        background: rgba(7, 16, 25, 0.55);
        z-index: 1000;
        display: none;
    }
    .appointment-page .appointment-modal-backdrop.is-open {
        display: block;
    }
    .appointment-page .appointment-modal {
        position: fixed;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: min(520px, calc(100vw - 32px));
        max-height: min(90vh, 640px);
        overflow-y: auto;
        background: #ffffff;
        z-index: 1001;
        padding: 20px 24px 28px;
        box-shadow: 0 24px 64px rgba(0, 0, 0, 0.28);
        display: none;
    }
    .appointment-page .appointment-modal.is-open {
        display: block;
    }
    .appointment-page .appointment-modal-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 18px;
    }
    .appointment-page .appointment-modal-nav-btn {
        border: 0;
        background: transparent;
        font-weight: 800;
        font-size: 0.78rem;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: var(--appointment-ink);
        cursor: pointer;
        padding: 4px 0;
    }
    .appointment-page .appointment-modal-title {
        font-size: 1.35rem;
        font-weight: 800;
        color: var(--appointment-ink);
        margin: 0 0 8px;
    }
    .appointment-page .appointment-modal-sub {
        color: var(--appointment-muted);
        font-size: 0.95rem;
        margin-bottom: 22px;
        line-height: 1.45;
    }
    .appointment-page .appointment-modal-field {
        margin-bottom: 18px;
    }
    .appointment-page .appointment-modal-field label {
        display: block;
        font-size: 0.72rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--appointment-muted);
        margin-bottom: 8px;
    }
    .appointment-page .appointment-modal-field select {
        width: 100%;
        padding: 12px 14px;
        border: 1px solid #e5e7eb;
        font-size: 0.95rem;
        background: #f9fafb;
    }
    .appointment-page .appointment-modal-summary {
        font-size: 0.92rem;
        color: var(--appointment-ink);
        line-height: 1.55;
        margin-top: 8px;
    }
    .appointment-page .appointment-modal-summary strong {
        font-weight: 800;
    }
    .appointment-page .appointment-modal-section-label {
        font-size: 0.72rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--appointment-muted);
        margin: 20px 0 8px;
    }
    .appointment-page .appointment-modal-recurring-list {
        list-style: none;
        padding: 0;
        margin: 0 0 16px;
        max-height: 280px;
        overflow-y: auto;
    }
    .appointment-page .appointment-modal-recurring-list li {
        padding: 8px 0;
        border-bottom: 1px solid #f1f5f9;
        color: var(--appointment-ink);
        font-weight: 600;
        font-size: 0.92rem;
    }
    .appointment-page .appointment-modal-footnote {
        font-size: 0.82rem;
        color: var(--appointment-muted);
        font-style: italic;
        margin-top: 12px;
    }
    .appointment-page .appointment-time-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 12px;
    }
    .appointment-page .appointment-time-wrap {
        position: relative;
    }
    .appointment-page .appointment-time-btn {
        font: inherit;
        appearance: none;
    }
    .appointment-page button.appointment-time-btn {
        width: 100%;
        padding: 18px 20px;
        border: 1px solid rgba(7, 16, 50, 0.22);
        color: var(--appointment-ink);
        text-align: center;
        font-weight: 800;
        background: #ffffff;
        cursor: pointer;
        transition: border-color 0.2s ease, background 0.2s ease;
    }
    .appointment-page .appointment-time-btn:hover,
    .appointment-page .appointment-time-btn.is-selected {
        border-color: var(--appointment-accent);
        background: color-mix(in srgb, var(--appointment-accent) 8%, #ffffff);
    }
    .appointment-page button.appointment-time-btn:disabled,
    .appointment-page button.appointment-time-btn.is-time-passed,
    .appointment-page button.appointment-time-btn.is-already-added:disabled {
        opacity: 0.45;
        color: #94a3b8;
        cursor: not-allowed;
        border-color: #e2e8f0;
        background: #f1f5f9;
    }
    .appointment-page button.appointment-time-btn:disabled:hover,
    .appointment-page button.appointment-time-btn.is-time-passed:hover,
    .appointment-page button.appointment-time-btn.is-already-added:disabled:hover {
        border-color: #e2e8f0;
        background: #f1f5f9;
    }
    .appointment-page .appointment-time-menu {
        position: absolute;
        z-index: 20;
        min-width: 240px;
        background: #ffffff;
        border: 1px solid var(--appointment-border);
        box-shadow: 0 16px 40px rgba(15, 23, 42, 0.16);
        display: none;
    }
    .appointment-page .appointment-time-menu.is-open {
        display: block;
    }
    .appointment-page .appointment-time-menu button {
        display: block;
        width: 100%;
        border: 0;
        background: #ffffff;
        text-align: left;
        padding: 14px 18px;
        font-weight: 700;
        color: var(--appointment-ink);
        cursor: pointer;
    }
    .appointment-page .appointment-time-menu button:hover,
    .appointment-page .appointment-time-menu button.is-active {
        background: #f3f4f6;
    }
    .appointment-page .appointment-date.is-available {
        cursor: pointer;
    }
    .appointment-page .appointment-month button {
        border: 0;
        background: transparent;
        color: var(--appointment-ink);
        cursor: pointer;
        padding: 4px 8px;
    }
    .appointment-page .appointment-info-title {
        color: #ffffff;
        text-align: center;
        margin-bottom: 28px;
    }
    .appointment-page .appointment-form-card {
        background: #ffffff;
        border: 1px solid var(--appointment-border);
        padding: clamp(28px, 4vw, 40px);
        max-width: 720px;
        margin: 0 auto;
    }
    .appointment-page .appointment-form-card h3 {
        color: var(--appointment-ink);
        font-size: 0.82rem;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        margin-bottom: 20px;
    }
    .appointment-page .appointment-form-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 18px;
    }
    .appointment-page .appointment-form-grid .full {
        grid-column: 1 / -1;
    }
    .appointment-page .appointment-form-grid label {
        display: block;
        font-weight: 700;
        color: var(--appointment-ink);
        margin-bottom: 8px;
        font-size: 0.92rem;
    }
    .appointment-page .appointment-form-grid input,
    .appointment-page .appointment-form-grid select {
        width: 100%;
        border: 1px solid #e5e7eb;
        background: #f9fafb;
        padding: 12px 14px;
        font-size: 0.95rem;
    }
    .appointment-page .appointment-form-grid select {
        padding-right: 10px;
        cursor: pointer;
    }
    .appointment-page .appointment-phone-row {
        display: grid;
        grid-template-columns: minmax(200px, 38%) 1fr;
        gap: 10px;
    }
    .appointment-page .appointment-form-hint {
        font-size: 0.82rem;
        color: var(--appointment-muted);
        margin: 6px 0 0;
    }
    .appointment-page .appointment-form-error {
        color: #b91c1c;
        font-size: 0.82rem;
        margin-top: 6px;
    }
    .appointment-page .appointment-submit-btn {
        margin-top: 24px;
        border: 0;
        background: var(--appointment-accent);
        color: #ffffff;
        text-transform: uppercase;
        font-weight: 900;
        padding: 14px 28px;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        min-width: 220px;
        min-height: 48px;
        position: relative;
    }
    .appointment-page .appointment-submit-btn:disabled {
        opacity: 1;
        cursor: wait;
    }
    .appointment-page .appointment-submit-btn.is-loading .appointment-submit-text {
        visibility: hidden;
    }
    .appointment-page .appointment-submit-spinner {
        display: none;
        width: 22px;
        height: 22px;
        border: 3px solid rgba(255, 255, 255, 0.35);
        border-top-color: #ffffff;
        border-radius: 50%;
        animation: appointment-spin 0.75s linear infinite;
        position: absolute;
        left: 50%;
        top: 50%;
        margin: -11px 0 0 -11px;
    }
    .appointment-page .appointment-submit-btn.is-loading .appointment-submit-spinner {
        display: block;
    }
    @keyframes appointment-spin {
        to { transform: rotate(360deg); }
    }
    .appointment-page .appointment-submit-status {
        display: none;
        margin-top: 16px;
        padding: 14px 16px;
        background: color-mix(in srgb, var(--appointment-accent) 8%, #ffffff);
        border-left: 4px solid var(--appointment-accent);
        border-radius: 0 4px 4px 0;
        font-size: 0.9rem;
        line-height: 1.5;
        color: var(--appointment-ink);
        font-weight: 600;
    }
    .appointment-page .appointment-submit-status.is-visible {
        display: block;
    }
    .appointment-page .appointment-form-card.is-submitting {
        pointer-events: none;
        opacity: 0.92;
    }
    .appointment-page .appointment-form-card.is-submitting .appointment-submit-btn {
        pointer-events: auto;
    }
    .appointment-page .appointment-success {
        max-width: 720px;
        margin: 24px auto 0;
        padding: 18px 22px;
        background: rgba(255, 255, 255, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #ffffff;
        text-align: center;
        display: none;
    }
    .appointment-page .appointment-success.is-visible {
        display: block;
    }
    .appointment-page [data-info-datetime] {
        white-space: pre-line;
        font-weight: 700;
        margin-bottom: 12px;
    }
    .appointment-page .appointment-highlight-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 14px;
    }
    .appointment-page .appointment-highlight-card {
        border-radius: 20px;
        padding: 20px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.13);
        color: #ffffff;
        font-weight: 800;
    }
    .appointment-page .appointment-highlight-card i {
        color: var(--appointment-gold);
        margin-right: 8px;
    }
    .appointment-page .appointment-section--alt-dark .appointment-back-link,
    .appointment-page .appointment-section--alt-dark .appointment-schedule-title {
        color: #ffffff;
    }

    .appointment-page .appointment-section--alt-dark .appointment-highlight-card {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.16);
        color: #ffffff;
        box-shadow: 0 14px 32px rgba(0, 0, 0, 0.18);
    }

    .appointment-page .appointment-section--alt-dark .appointment-highlight-card i {
        color: rgba(255, 255, 255, 0.85);
    }

    .appointment-page .appointment-testi-wrap .testimonial,
    .appointment-page .appointment-testi-wrap .testimonial.p-t-100 {
        padding-top: 0 !important;
        margin-bottom: 0 !important;
    }

    .appointment-page .appointment-blogs-wrap .latest-blog-section {
        padding-top: 0 !important;
        background: transparent;
    }

    .appointment-page .appointment-blogs-wrap .common-title h2,
    .appointment-page .appointment-blogs-wrap .common-subtitle span {
        color: #ffffff;
    }

    .appointment-page .appointment-blogs-wrap .blog-card {
        background: #ffffff;
    }
    @media (max-width: 991px) {
        .appointment-page .appointment-intro-grid,
        .appointment-page .appointment-selected-card,
        .appointment-page .appointment-calendar-card {
            grid-template-columns: 1fr;
        }
        .appointment-page .appointment-service-card {
            grid-template-columns: 170px 1fr;
        }
        .appointment-page .appointment-book-btn {
            grid-column: 2;
            justify-self: start;
        }
        .appointment-page .appointment-highlight-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }
    @media (max-width: 767px) {
        .appointment-page .appointment-service-card {
            grid-template-columns: 1fr;
        }
        .appointment-page .appointment-book-btn {
            grid-column: auto;
        }
        .appointment-page .appointment-time-grid,
        .appointment-page .appointment-highlight-grid {
            grid-template-columns: 1fr;
        }
        .appointment-page .appointment-form-grid {
            grid-template-columns: 1fr;
        }
        .appointment-page .appointment-phone-row {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="appointment-page">
    <section class="appointment-hero">
        <div class="container">
            <h1>{{ $hero['eyebrow'] }}</h1>
            <p>{{ $hero['subheading'] }}</p>
        </div>
    </section>

    <section class="appointment-section appointment-section--alt-light">
        <div class="container">
            <div class="appointment-intro-grid">
                <div class="appointment-intro-copy" data-aos="fade-up">
                    <div class="appointment-eyebrow">{{ $hero['eyebrow'] }}</div>
                    <h2>{{ $hero['heading'] }}</h2>
                    <p class="appointment-lead">{{ $hero['subheading'] }}</p>
                    <p class="appointment-lead m-t-15">{{ $hero['content'] }}</p>
                </div>
                <figure class="appointment-intro-photo" data-aos="fade-up" data-aos-delay="120">
                    <img
                        src="{{ asset('assets/imgs/study/career-guidance/hero-bg.webp') }}"
                        alt="Professional visa and migration consultation to explore Australian visa pathways."
                        width="960"
                        height="1080"
                        loading="lazy"
                        decoding="async"
                    />
                </figure>
            </div>
        </div>
    </section>

    <section class="appointment-section appointment-section--alt-dark" id="select-appointment">
        <div class="container">
            <div id="appointment-thank-you-banner" class="appointment-thank-you-banner is-hidden" role="status" aria-live="polite">
                <button type="button" class="appointment-thank-you-close" data-thank-dismiss aria-label="Dismiss">&times;</button>
                <div class="appointment-thank-you-icon" aria-hidden="true"><i class="fa-regular fa-circle-check"></i></div>
                <h3>Thank you</h3>
                <p id="appointment-thank-you-message"></p>
                <p id="appointment-thank-you-ref" class="appointment-thank-you-ref"></p>
                <button type="button" class="appointment-thank-you-cta" data-thank-dismiss>Book another appointment</button>
            </div>

            <div id="appointment-list-panel" class="appointment-panel">
                <div class="appointment-section-head" data-aos="fade-up">
                    <div class="appointment-eyebrow justify-content-center">Select Appointment</div>
                    <h2>Book an Appointment with Registered Migration Agent {{ $agent['name'] }} (MARN {{ $agent['marn'] }})</h2>
                </div>
                <div class="appointment-service-list" data-aos="fade-up" data-aos-delay="120">
                    @foreach ($appointmentPage['appointments'] as $appointment)
                        <div class="appointment-service-card">
                            <div class="appointment-agent-card">
                                <img src="{{ asset($agent['image']) }}" alt="Visawizer">
                                <strong>{{ $agent['name'] }}</strong>
                                <span>{{ $agent['designation'] }}</span>
                                <span>{{ $agent['marn'] }}</span>
                            </div>
                            <div class="appointment-service-copy">
                                <h3>{{ $appointment['title'] }}</h3>
                                <div class="appointment-service-meta">{{ $appointment['duration'] }} @ {{ $appointment['price'] }}</div>
                                <p class="appointment-service-desc">{{ $appointment['description'] }}</p>
                                <button type="button" class="appointment-desc-toggle appointment-show-less" aria-expanded="true">Show less</button>
                            </div>
                            <button
                                type="button"
                                class="appointment-book-btn"
                                data-appointment-book
                                data-title="{{ $appointment['title'] }} with Visawizer Education and Migration services"
                                data-meta="{{ $appointment['duration'] }} @ {{ $appointment['price'] }}"
                                data-description="{{ $appointment['description'] }}"
                            >Book</button>
                        </div>
                    @endforeach
                </div>
            </div>

            <div id="appointment-schedule-panel" class="appointment-panel appointment-schedule-wrap is-hidden">
                <button type="button" class="appointment-back-link" data-appointment-back><i class="fa-regular fa-angle-left"></i>Select Appointment</button>
                <h2 class="appointment-schedule-title">Date &amp; Time</h2>
                <div class="appointment-eyebrow">Appointment</div>
                <div class="appointment-selected-card" data-aos="fade-up">
                    <div class="appointment-agent-card">
                        <img src="{{ asset($agent['image']) }}" alt="Visawizer">
                        <strong>{{ $agent['name'] }}</strong>
                        <span>{{ $agent['designation'] }}</span>
                        <span>{{ $agent['marn'] }}</span>
                    </div>
                    <div>
                        <h3 data-selected-title>{{ $schedule['selectedAppointment'] }}</h3>
                        <div class="appointment-service-meta" data-selected-meta>{{ $schedule['duration'] }} @ {{ $schedule['price'] }}</div>
                        <p class="appointment-service-desc" data-selected-description>{{ $appointmentPage['appointments'][0]['description'] }}</p>
                        <button type="button" class="appointment-desc-toggle appointment-show-less d-inline-block m-t-20" data-selected-desc-toggle aria-expanded="true">Show less</button>
                    </div>
                    <button type="button" class="appointment-close" data-appointment-close-schedule aria-label="Close">&times;</button>
                </div>

                <div class="appointment-calendar-card" data-aos="fade-up" data-aos-delay="120">
                    <div>
                        <div class="appointment-month">
                            <button type="button" data-calendar-prev aria-label="Previous month"><i class="fa-regular fa-angle-left"></i></button>
                            <span id="appointment-calendar-month">{{ $schedule['month'] }}</span>
                            <button type="button" data-calendar-next aria-label="Next month"><i class="fa-regular fa-angle-right"></i></button>
                        </div>
                        <div class="appointment-calendar-grid" id="appointment-calendar-grid"></div>
                    </div>
                    <div>
                        <h3 id="appointment-selected-date-label">Select a date</h3>
                        <div class="appointment-timezone">Time Zone: {{ $schedule['timezone'] }}</div>
                        <div class="appointment-time-wrap">
                            <div class="appointment-time-grid">
                                @foreach ($schedule['times'] as $time)
                                    <button type="button" class="appointment-time-btn" data-time="{{ $time }}">{{ $time }}</button>
                                @endforeach
                            </div>
                            <div id="appointment-time-menu" class="appointment-time-menu">
                                <button type="button" data-time-action="continue">Select and continue</button>
                                <button type="button" data-time-action="another">Select and add another time</button>
                                <button type="button" data-time-action="recurring">Select and make recurring</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="appointment-times-added" class="appointment-times-added" data-aos="fade-up">
                    <div class="appointment-times-added-label">Times added</div>
                    <ul id="appointment-times-added-list" class="appointment-times-added-list"></ul>
                </div>
                <div id="appointment-schedule-continue-wrap" class="appointment-schedule-continue-wrap">
                    <button type="button" id="appointment-schedule-continue" class="appointment-schedule-continue-btn">Continue</button>
                </div>

                <div class="appointment-highlight-grid" data-aos="fade-up" data-aos-delay="160">
                    @foreach ($appointmentPage['highlights'] as $highlight)
                        <div class="appointment-highlight-card"><i class="fa-regular fa-check-circle"></i>{{ $highlight }}</div>
                    @endforeach
                </div>
            </div>

            <div id="appointment-info-panel" class="appointment-panel appointment-schedule-wrap is-hidden">
                <button type="button" class="appointment-back-link" data-appointment-back-schedule><i class="fa-regular fa-angle-left"></i>Date &amp; Time</button>
                <h2 class="appointment-info-title">Your Information</h2>

                <div class="appointment-selected-card" data-aos="fade-up">
                    <div class="appointment-agent-card">
                        <img src="{{ asset($agent['image']) }}" alt="Visawizer">
                        <strong>{{ $agent['name'] }}</strong>
                        <span>{{ $agent['designation'] }}</span>
                        <span>{{ $agent['marn'] }}</span>
                    </div>
                    <div>
                        <h3 data-info-title></h3>
                        <div class="appointment-service-meta" data-info-meta></div>
                        <p data-info-description></p>
                        <div data-info-datetime class="m-t-20"></div>
                    </div>
                    <button type="button" class="appointment-close" data-appointment-close-info aria-label="Close">&times;</button>
                </div>

                <div class="appointment-form-card" data-aos="fade-up" data-aos-delay="120">
                    <h3>Enter Your Information</h3>
                    <form id="appointment-booking-form" novalidate>
                        <div class="appointment-form-grid">
                            <div>
                                <label for="field-first-name">First name</label>
                                <input type="text" id="field-first-name" name="first_name" autocomplete="given-name" required>
                                <div class="appointment-form-error" data-error-for="first_name"></div>
                            </div>
                            <div>
                                <label for="field-last-name">Last name</label>
                                <input type="text" id="field-last-name" name="last_name" autocomplete="family-name" required>
                                <div class="appointment-form-error" data-error-for="last_name"></div>
                            </div>
                            <div class="full">
                                <label for="field-phone-code">Country code</label>
                                <div class="appointment-phone-row">
                                    <select id="field-phone-code" name="phone_country_code" aria-label="Country calling code">
                                        @foreach ($countryDialCodes as $row)
                                            <option value="{{ $row['dial'] }}" @if(($row['name'] ?? '') === 'Australia') selected @endif>{{ $row['name'] }} ({{ $row['dial'] }})</option>
                                        @endforeach
                                    </select>
                                    <input type="tel" id="field-phone" name="phone" autocomplete="tel-national" placeholder="Mobile / local number" required>
                                </div>
                                <p class="appointment-form-hint">Enter your number without repeating the country code.</p>
                                <div class="appointment-form-error" data-error-for="phone"></div>
                            </div>
                            <div class="full">
                                <label for="field-email">Email</label>
                                <input type="email" id="field-email" name="email" autocomplete="email" required>
                                <div class="appointment-form-error" data-error-for="email"></div>
                            </div>
                            <div class="full">
                                <div class="appointment-form-error" data-error-for="slots"></div>
                            </div>
                        </div>
                        <button type="submit" id="appointment-submit-btn" class="appointment-submit-btn">
                            <span class="appointment-submit-text">Continue to payment</span>
                            <span class="appointment-submit-spinner" aria-hidden="true"></span>
                        </button>
                        <p id="appointment-submit-status" class="appointment-submit-status" role="status" aria-live="polite"></p>
                    </form>
                </div>
                <div id="appointment-success" class="appointment-success" role="status"></div>
            </div>
        </div>
    </section>

    <div class="appointment-section appointment-section--alt-light appointment-testi-wrap">
        @include('partials.testi')
    </div>

    <div class="appointment-section appointment-section--alt-dark appointment-blogs-wrap">
        @include('partials.blogs')
    </div>

    <div id="appointment-modal-backdrop" class="appointment-modal-backdrop" aria-hidden="true"></div>
    <div id="appointment-modal-recurring-setup" class="appointment-modal" role="dialog" aria-modal="true" aria-labelledby="appointment-recurring-setup-title">
        <div class="appointment-modal-top">
            <button type="button" class="appointment-modal-nav-btn" data-recurring-close>CLOSE</button>
            <button type="button" class="appointment-modal-nav-btn" data-recurring-see-availability>SEE AVAILABILITY</button>
        </div>
        <h2 id="appointment-recurring-setup-title" class="appointment-modal-title">Recurring Appointment</h2>
        <p id="appointment-recurring-setup-start" class="appointment-modal-sub"></p>
        <div class="appointment-modal-field">
            <label for="appointment-recurring-repeat">Repeat</label>
            <select id="appointment-recurring-repeat"></select>
        </div>
        <div class="appointment-modal-field">
            <label for="appointment-recurring-count">Times to repeat</label>
            <select id="appointment-recurring-count"></select>
        </div>
        <p id="appointment-recurring-setup-summary" class="appointment-modal-summary"></p>
    </div>
    <div id="appointment-modal-recurring-preview" class="appointment-modal" role="dialog" aria-modal="true" aria-labelledby="appointment-recurring-preview-title">
        <div class="appointment-modal-top">
            <button type="button" class="appointment-modal-nav-btn" data-recurring-preview-back>BACK</button>
            <button type="button" class="appointment-modal-nav-btn" data-recurring-add-appointments>ADD APPOINTMENTS</button>
        </div>
        <h2 id="appointment-recurring-preview-title" class="appointment-modal-title">Recurring Appointment</h2>
        <div class="appointment-modal-section-label">Start time</div>
        <p id="appointment-recurring-preview-start" class="appointment-modal-sub" style="margin-bottom: 8px;"></p>
        <div class="appointment-modal-section-label">Recurring times</div>
        <ul id="appointment-recurring-preview-list" class="appointment-modal-recurring-list"></ul>
        <p class="appointment-modal-footnote">Unavailable times will not be added to the appointment</p>
    </div>
</div>

<script>
    window.AppointmentBookingConfig = {
        storeUrl: @json(route('book-appointment.store')),
        csrf: @json(csrf_token()),
        timezone: @json($schedule['timezone']),
    };
</script>
<script src="{{ asset('assets/js/appointment-booking.js') }}" defer></script>
@endsection
