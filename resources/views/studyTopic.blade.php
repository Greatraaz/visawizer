@extends('layouts.frontend')
@section('content')
<style type="text/css">
    .study-topic-hero {
        background-size: cover;
        background-position: center;
        position: relative;
        padding: 140px 0 150px;
        overflow: hidden;
    }
    .study-topic-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(5, 39, 35, 0.25) 0%, rgba(5, 39, 35, 0.7) 100%);
    }
    .study-topic-hero .hero-content-5 {
        position: relative;
        z-index: 1;
        max-width: 980px;
    }
    .study-topic-hero .topic-tag {
        display: inline-block;
        font-size: 0.82rem;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.88);
        margin-bottom: 14px;
        padding-left: 12px;
        border-left: 3px solid var(--theme-color-2);
    }
    .study-topic-hero .title h1 {
        font-size: clamp(2.45rem, 5vw, 4.7rem);
        line-height: 1.05;
        margin-bottom: 14px;
    }
    .study-topic-hero .hero-sub {
        max-width: 760px;
        margin: 0 auto 26px;
        color: rgba(255, 255, 255, 0.94);
        font-size: 1.08rem;
        line-height: 1.68;
        font-weight: 500;
    }
    .study-topic-hero .e-primary-btn,
    .study-topic-overview .e-primary-btn,
    .study-topic-split .e-primary-btn,
    .study-topic-contact .e-primary-btn,
    .study-topic-final .e-primary-btn {
        border-radius: 12px !important;
    }
    .study-topic-hero .e-primary-btn:before,
    .study-topic-overview .e-primary-btn:before,
    .study-topic-split .e-primary-btn:before,
    .study-topic-contact .e-primary-btn:before,
    .study-topic-final .e-primary-btn:before {
        border-radius: 12px !important;
    }
    .study-topic-hero .e-primary-btn .icon-wrap,
    .study-topic-overview .e-primary-btn .icon-wrap,
    .study-topic-split .e-primary-btn .icon-wrap,
    .study-topic-contact .e-primary-btn .icon-wrap,
    .study-topic-final .e-primary-btn .icon-wrap {
        border-radius: 10px !important;
    }
    .study-topic-hero-band {
        margin-top: -80px;
        position: relative;
        z-index: 3;
    }
    .study-topic-hero-band .band-card {
        background: linear-gradient(135deg, #0d7d57 0%, #129868 100%);
        border-radius: 12px;
        padding: 24px 28px;
        box-shadow: 0 28px 60px rgba(5, 39, 35, 0.18);
    }
    .study-topic-hero-band .band-copy {
        display: flex;
        align-items: center;
        height: 100%;
    }
    .study-topic-hero-band .band-card p {
        color: rgba(255, 255, 255, 0.96);
        font-size: 1rem;
        line-height: 1.72;
        margin-bottom: 0;
    }
    .study-topic-hero-band .band-thumb {
        text-align: right;
    }
    .study-topic-hero-band .band-thumb img {
        width: 100%;
        max-width: 340px;
        height: 160px;
        object-fit: cover;
        border-radius: 12px;
        box-shadow: 0 18px 40px rgba(5, 39, 35, 0.18);
    }

    .study-topic-overview {
        padding: 90px 0 90px;
        position: relative;
    }
    .study-topic-overview::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 38px;
        bottom: 38px;
        background: linear-gradient(180deg, rgba(18, 152, 104, 0.06) 0%, rgba(18, 152, 104, 0) 100%);
        pointer-events: none;
    }
    .study-topic-overview .container {
        position: relative;
        z-index: 1;
    }
    .study-topic-feature-card,
    .study-topic-showcase-card {
        height: 100%;
        border-radius: 12px;
        background: #fff;
        border: 1px solid rgba(13, 125, 87, 0.1);
        box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08);
        overflow: hidden;
    }
    .study-topic-feature-card {
        display: flex;
        flex-direction: column;
        padding: 34px;
        background: linear-gradient(180deg, #ffffff 0%, #f8fcfa 100%);
    }
    .study-topic-section-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 14px;
        border-radius: 12px;
        background: rgba(18, 152, 104, 0.1);
        color: #0d7d57;
        font-size: 0.78rem;
        line-height: 1;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        font-weight: 700;
        margin-bottom: 18px;
    }
    .study-topic-section-tag::before {
        content: "";
        width: 8px;
        height: 8px;
        border-radius: 8px;
        background: linear-gradient(135deg, #0d7d57 0%, #129868 100%);
        box-shadow: 0 0 0 5px rgba(18, 152, 104, 0.12);
    }
    .study-topic-feature-card h3,
    .study-topic-showcase-content h3 {
        font-size: clamp(1.55rem, 2.4vw, 2.15rem);
        line-height: 1.2;
        color: #0f172a;
        margin-bottom: 0;
    }
    .study-topic-feature-body {
        margin-top: 24px;
        padding: 28px;
        border-radius: 12px;
        background: #ffffff;
        border: 1px solid rgba(13, 125, 87, 0.1);
        box-shadow: 0 20px 45px rgba(15, 23, 42, 0.05);
        display: flex;
        flex-direction: column;
        align-items: stretch;
        gap: 18px;
        flex: 1;
    }
    .study-topic-feature-visual {
        margin-top: 0;
        display: flex;
        flex: 1;
        min-height: 0;
    }
    .study-topic-feature-visual-frame {
        position: relative;
        display: flex;
        flex: 1;
        border-radius: 12px;
        padding: 10px;
        overflow: hidden;
        background: #ffffff;
        border: 1px solid rgba(226, 232, 240, 0.9);
        box-shadow: 0 22px 50px rgba(15, 23, 42, 0.1);
    }
    .study-topic-feature-visual-frame::before {
        content: "";
        position: absolute;
        right: -30px;
        top: -18px;
        width: 120px;
        height: 120px;
        border-radius: 12px;
        background: rgba(148, 163, 184, 0.12);
        transform: rotate(18deg);
    }
    .study-topic-feature-visual-frame img {
        width: 100%;
        height: 100%;
        min-height: 265px;
        object-fit: cover;
        border-radius: 12px;
        position: relative;
        z-index: 1;
        display: block;
        box-shadow: 0 18px 40px rgba(15, 23, 42, 0.16);
    }
    .study-topic-feature-visual-badge {
        position: absolute;
        left: 26px;
        top: 24px;
        z-index: 2;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 14px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.92);
        color: #0d7d57;
        font-size: 0.76rem;
        line-height: 1;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        font-weight: 700;
        box-shadow: 0 12px 24px rgba(15, 23, 42, 0.12);
    }
    .study-topic-feature-visual-badge::before {
        content: "";
        width: 8px;
        height: 8px;
        border-radius: 8px;
        background: linear-gradient(135deg, #0d7d57 0%, #129868 100%);
    }
    .study-topic-feature-body p,
    .study-topic-showcase-copy p {
        color: #475569;
        font-size: 1rem;
        line-height: 1.8;
        margin-bottom: 0;
    }
    .study-topic-rich-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 14px;
        width: 100%;
    }
    .study-topic-rich-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 16px 16px;
        border-radius: 12px;
        background: linear-gradient(180deg, #ffffff 0%, #f8fcfa 100%);
        border: 1px solid rgba(13, 125, 87, 0.1);
    }
    .study-topic-rich-icon {
        width: 38px;
        height: 38px;
        min-width: 38px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(18, 152, 104, 0.1);
        color: #0d7d57;
        box-shadow: 0 10px 18px rgba(18, 152, 104, 0.12);
    }
    .study-topic-rich-item span {
        color: #334155;
        font-size: 0.95rem;
        line-height: 1.55;
    }
    .study-topic-showcase-card {
        padding: 18px;
        display: flex;
        flex-direction: column;
        background: linear-gradient(180deg, #ffffff 0%, #f7faf8 100%);
    }
    .study-topic-showcase-media {
        position: relative;
        min-height: 275px;
        border-radius: 12px;
        overflow: hidden;
        background: #ffffff;
        padding: 10px;
        border: 1px solid rgba(226, 232, 240, 0.9);
        box-shadow: 0 18px 40px rgba(15, 23, 42, 0.1);
    }
    .study-topic-showcase-media::before {
        content: "";
        position: absolute;
        right: -36px;
        top: 26px;
        width: 120px;
        height: 120px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.16);
        transform: rotate(18deg);
    }
    .study-topic-showcase-media::after {
        content: "";
        position: absolute;
        left: -28px;
        bottom: -30px;
        width: 130px;
        height: 130px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.12);
        transform: rotate(24deg);
    }
    .study-topic-showcase-media img {
        width: 100%;
        height: 247px;
        object-fit: cover;
        position: relative;
        z-index: 1;
        border-radius: 12px;
        box-shadow: 0 18px 40px rgba(15, 23, 42, 0.18);
    }
    .study-topic-showcase-content {
        padding: 24px 12px 12px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }
    .study-topic-showcase-copy {
        margin-top: 18px;
    }
    .study-topic-point-grid {
        margin-top: 20px;
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 14px;
    }
    .study-topic-point-card {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        padding: 16px 16px;
        border-radius: 12px;
        background: #fff;
        border: 1px solid rgba(13, 125, 87, 0.1);
        box-shadow: 0 14px 30px rgba(15, 23, 42, 0.05);
    }
    .study-topic-point-icon {
        width: 42px;
        height: 42px;
        min-width: 42px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(18, 152, 104, 0.1);
        color: #0d7d57;
        box-shadow: 0 8px 18px rgba(13, 125, 87, 0.12);
    }
    .study-topic-point-card span {
        color: #475569;
        font-size: 0.94rem;
        line-height: 1.6;
    }

    .study-topic-split {
        padding: 0 0 100px;
    }
    .study-topic-s4-alt {
        position: relative;
        padding: 46px 38px;
        border-radius: 12px;
        background:
            linear-gradient(135deg, rgba(7, 43, 36, 0.82) 0%, rgba(11, 61, 51, 0.76) 52%, rgba(6, 33, 28, 0.82) 100%),
            var(--study-topic-s4-bg);
        box-shadow: 0 30px 70px rgba(6, 33, 28, 0.2);
        backdrop-filter: blur(8px);
        background-size: cover;
        background-position: center;
        overflow: hidden;
    }
    .study-topic-s4-alt::before {
        content: "";
        position: absolute;
        inset: 0;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 12px;
        pointer-events: none;
    }
    .study-topic-s4-alt.why-us-section-4 .thumb {
        position: relative;
        width: 100%;
        max-width: 520px;
        min-height: 450px;
        margin: 0 auto;
        padding: 0 !important;
    }
    .study-topic-s4-alt.why-us-section-4 .thumb .thumb-1,
    .study-topic-s4-alt.why-us-section-4 .thumb .thumb-2,
    .study-topic-s4-alt.why-us-section-4 .thumb .thumb-3 {
        position: absolute;
        margin: 0 !important;
    }
    .study-topic-s4-alt.why-us-section-4 .thumb .thumb-1 {
        width: 246px;
        height: 322px;
        top: 0;
        left: 182px;
        transform: none;
        z-index: 2;
    }
    .study-topic-s4-alt.why-us-section-4 .thumb .thumb-2 {
        width: 248px;
        height: 320px;
        left: 0;
        top: 116px;
        z-index: 3;
    }
    .study-topic-s4-alt.why-us-section-4 .thumb .thumb-3 {
        width: 236px;
        height: 162px;
        left: 230px;
        bottom: 0;
        transform: none;
        z-index: 4;
    }
    .study-topic-s4-alt.why-us-section-4 .thumb .thumb-1 > img,
    .study-topic-s4-alt.why-us-section-4 .thumb .thumb-2 > img,
    .study-topic-s4-alt.why-us-section-4 .thumb .thumb-3 img,
    .study-topic-s4-alt.why-us-section-4 .thumb .thumb-3 .shape-wrapped-thumb {
        width: 100%;
        height: 100%;
    }
    .study-topic-s4-alt.why-us-section-4 .thumb .thumb-1 > img,
    .study-topic-s4-alt.why-us-section-4 .thumb .thumb-2 > img,
    .study-topic-s4-alt.why-us-section-4 .thumb .thumb-3 img {
        border-radius: 12px;
        box-shadow: 0 24px 48px rgba(0, 0, 0, 0.28);
        border: 3px solid rgba(255, 255, 255, 0.95);
        object-fit: cover;
    }
    .study-topic-s4-alt.why-us-section-4 .thumb .thumb-3 .shape-wrapped-thumb {
        display: block;
        border-radius: 12px;
        overflow: hidden;
    }
    .study-topic-s4-alt.why-us-section-4 .thumb .thumb-3 .shape-wrapped-thumb::before {
        display: none;
    }
    .study-topic-s4-alt .why-us-content-2 .common-subtitle span {
        font-size: 0.8rem;
        letter-spacing: 0.1em;
        color: rgba(255, 255, 255, 0.72);
        text-transform: uppercase;
    }
    .study-topic-s4-alt .why-us-content-2 {
        padding: 34px 32px;
        border-radius: 12px;
        background: rgba(8, 31, 26, 0.38);
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.16);
        backdrop-filter: blur(8px);
    }
    .study-topic-s4-alt .why-us-content-2 .common-title h2 {
        font-size: clamp(1.85rem, 3vw, 2.55rem);
        line-height: 1.18;
        color: #ffffff;
    }
    .study-topic-s4-alt .why-us-content-2 .text p {
        color: rgba(255, 255, 255, 0.84);
        font-size: 1rem;
        line-height: 1.82;
        margin-bottom: 0;
    }
    .study-topic-s4-alt .services {
        margin-top: 22px;
    }
    .study-topic-s4-alt .service {
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        padding: 14px 16px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.12);
        backdrop-filter: blur(6px);
    }
    .study-topic-s4-alt .service i {
        color: #6ee7b7;
    }
    .study-topic-s4-alt .service p {
        font-size: 0.96rem;
        line-height: 1.65;
        color: rgba(255, 255, 255, 0.9);
    }
    .study-topic-s4-alt .shape-wrapped-thumb::before {
        background: rgba(110, 231, 183, 0.18);
    }

    .study-topic-contact {
        position: relative;
        padding: 95px 0;
        background: linear-gradient(180deg, #f8fbfa 0%, #f3f7f5 100%);
        background-size: cover;
        background-position: center;
        overflow: hidden;
    }
    .study-topic-contact::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(248, 250, 252, 0.88) 0%, rgba(248, 250, 252, 0.74) 100%);
    }
    .study-topic-contact::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(190, 24, 47, 0.08) 0%, rgba(18, 152, 104, 0.08) 55%, rgba(190, 24, 47, 0.07) 100%);
        pointer-events: none;
    }
    .study-topic-contact .container {
        position: relative;
        z-index: 1;
    }
    .study-topic-contact-shell {
        padding: 28px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.42);
        border: 1px solid rgba(255, 255, 255, 0.55);
        box-shadow: 0 28px 60px rgba(15, 23, 42, 0.12);
        backdrop-filter: blur(6px);
    }
    .study-topic-contact .topic-contact-copy {
        height: 100%;
        display: flex;
        align-items: center;
        padding: 42px 34px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.7);
        border: 1px solid rgba(255, 255, 255, 0.62);
        box-shadow: 0 20px 45px rgba(15, 23, 42, 0.1);
    }
    .study-topic-contact .topic-contact-copy .common-subtitle span {
        font-size: 0.8rem;
        letter-spacing: 0.1em;
        color: #64748b;
    }
    .study-topic-contact .topic-contact-copy .common-title h2 {
        font-size: clamp(1.7rem, 3vw, 2.35rem);
        line-height: 1.22;
        color: #0f172a;
    }
    .study-topic-contact .topic-contact-copy p {
        color: #475569;
        font-size: 0.98rem;
        line-height: 1.82;
        margin-bottom: 0;
    }
    .study-topic-contact .contact-form-3 {
        background:
            linear-gradient(135deg, rgba(190, 24, 47, 0.12) 0%, rgba(18, 152, 104, 0.1) 54%, rgba(190, 24, 47, 0.1) 100%),
            rgba(255, 255, 255, 0.76);
        border-radius: 12px;
        padding: 34px 34px 38px;
        box-shadow: 0 28px 60px rgba(15, 23, 42, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.58);
        backdrop-filter: blur(8px);
    }
    .study-topic-contact .contact-form-3 h3 {
        color: #0f172a;
    }
    .study-topic-contact .contact-form-3 p {
        max-width: 100%;
        color: #475569;
        margin-bottom: 22px;
    }
    .study-topic-contact .contact-form-3 select,
    .study-topic-contact .contact-form-3 input,
    .study-topic-contact .contact-form-3 textarea {
        width: 100%;
        background: rgba(255, 255, 255, 0.72);
        border: 1px solid rgba(148, 163, 184, 0.26);
        border-radius: 10px;
        padding: 14px 18px;
        color: #0f172a;
    }
    .study-topic-contact .contact-form-3 select:focus,
    .study-topic-contact .contact-form-3 input:focus,
    .study-topic-contact .contact-form-3 textarea:focus {
        outline: none;
        border-color: var(--theme-color-2);
    }
    .study-topic-contact .contact-form-3 select option {
        color: #111827;
    }
    .study-topic-contact .contact-form-3 select::placeholder,
    .study-topic-contact .contact-form-3 input::placeholder,
    .study-topic-contact .contact-form-3 textarea::placeholder {
        color: #64748b;
    }
    .study-topic-contact .study-topic-form-grid {
        row-gap: 14px;
    }

    .study-topic-final {
        padding: 54px 0 110px;
        position: relative;
        overflow: hidden;
        background-image:
            linear-gradient(135deg, rgba(247, 249, 252, 0.68) 0%, rgba(244, 248, 246, 0.54) 100%),
            var(--study-topic-final-bg);
        background-size: cover;
        background-position: center;
    }
    .study-topic-final::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(255, 255, 255, 0.18) 0%, rgba(255, 255, 255, 0.02) 45%, rgba(255, 255, 255, 0.12) 100%);
        pointer-events: none;
    }
    .study-topic-final .donate-to-us-layout {
        display: flex;
        justify-content: center;
        position: relative;
        z-index: 1;
    }
    .study-topic-final .become-volunteer-card {
        max-width: 860px;
        width: 100%;
        text-align: left;
        background: rgba(255, 255, 255, 0.54);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.58);
        box-shadow: 0 24px 55px rgba(15, 23, 42, 0.1);
        border-radius: 12px;
        padding: 44px 42px;
        position: relative;
        overflow: hidden;
    }
    .study-topic-final .become-volunteer-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.22), rgba(255, 255, 255, 0.04));
        pointer-events: none;
    }
    .study-topic-final .become-volunteer-card::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        height: 4px;
        background: linear-gradient(90deg, rgba(18, 152, 104, 0.85), rgba(190, 24, 47, 0.55));
        pointer-events: none;
    }
    .study-topic-final .common-subtitle {
        justify-content: flex-start !important;
        margin-bottom: 10px;
    }
    .study-topic-final .become-volunteer-card h2 {
        font-size: clamp(1.7rem, 3vw, 2.5rem);
        line-height: 1.2;
        color: #0f172a;
        margin-bottom: 14px;
    }
    .study-topic-final .become-volunteer-card p {
        max-width: 680px;
        margin: 0 0 26px;
        color: #64748b;
        font-size: 1rem;
        line-height: 1.76;
    }
    .study-topic-final .common-subtitle span {
        color: #475569;
        font-size: 0.8rem;
        letter-spacing: 0.12em;
    }
    .study-topic-final .btn-wrap {
        display: flex;
        justify-content: flex-start;
    }

    @media (max-width: 991px) {
        .study-topic-hero {
            padding: 120px 0 130px;
        }
        .study-topic-hero-band .band-thumb {
            text-align: left;
            margin-top: 22px;
        }
        .study-topic-feature-card {
            padding: 26px;
        }
        .study-topic-feature-body {
            padding: 22px;
        }
        .study-topic-feature-visual-frame img,
        .study-topic-showcase-media {
            min-height: 240px;
        }
        .study-topic-feature-visual-frame img {
            min-height: 230px;
        }
        .study-topic-showcase-media {
            min-height: 240px;
        }
        .study-topic-contact .topic-contact-copy {
            padding-right: 0;
        }
        .study-topic-s4-alt {
            padding: 34px 26px;
        }
        .study-topic-s4-alt.why-us-section-4 .thumb {
            min-height: 400px;
            max-width: 460px;
        }
        .study-topic-s4-alt.why-us-section-4 .thumb .thumb-1 {
            width: 214px;
            height: 280px;
            left: 154px;
            transform: none;
        }
        .study-topic-s4-alt.why-us-section-4 .thumb .thumb-2 {
            width: 218px;
            height: 282px;
            left: 0;
            top: 102px;
        }
        .study-topic-s4-alt.why-us-section-4 .thumb .thumb-3 {
            width: 208px;
            height: 144px;
            left: 196px;
            bottom: 0;
            transform: none;
        }
        .study-topic-s4-alt .why-us-content-2 {
            padding: 28px 24px;
        }
        .study-topic-contact-shell {
            padding: 22px;
        }
        .study-topic-contact .topic-contact-copy {
            padding: 30px 24px;
        }
    }
    @media (max-width: 767px) {
        .study-topic-hero {
            padding: 110px 0 120px;
        }
        .study-topic-hero-band {
            margin-top: -60px;
        }
        .study-topic-hero-band .band-card {
            padding: 22px;
        }
        .study-topic-hero-band .band-thumb img {
            max-width: 100%;
            height: 170px;
        }
        .study-topic-overview,
        .study-topic-contact,
        .study-topic-final {
            padding-bottom: 80px;
        }
        .study-topic-final {
            padding-top: 24px;
        }
        .study-topic-rich-grid,
        .study-topic-point-grid {
            grid-template-columns: 1fr;
        }
        .study-topic-split {
            padding-bottom: 80px;
        }
        .study-topic-s4-alt {
            padding: 28px 18px;
            border-radius: 12px;
        }
        .study-topic-s4-alt.why-us-section-4 .thumb {
            min-height: 320px;
            max-width: 100%;
        }
        .study-topic-s4-alt.why-us-section-4 .thumb .thumb-1 {
            width: 162px;
            height: 204px;
            left: 124px;
            transform: none;
        }
        .study-topic-s4-alt.why-us-section-4 .thumb .thumb-2 {
            width: 164px;
            height: 208px;
            left: 0;
            top: 86px;
        }
        .study-topic-s4-alt.why-us-section-4 .thumb .thumb-3 {
            width: 160px;
            height: 112px;
            left: 136px;
            bottom: 0;
            transform: none;
        }
        .study-topic-s4-alt .why-us-content-2 {
            padding: 24px 20px;
            border-radius: 12px;
        }
        .study-topic-contact {
            padding: 80px 0;
        }
        .study-topic-contact-shell {
            padding: 18px;
            border-radius: 12px;
        }
        .study-topic-contact .topic-contact-copy,
        .study-topic-contact .contact-form-3 {
            border-radius: 12px;
        }
        .study-topic-final .become-volunteer-card {
            padding: 34px 22px;
        }
    }
</style>

<section class="hero-section-5 study-topic-hero" style="background-image: url('{{ asset($page['images']['hero_bg']) }}');">
    <div class="container">
        <div class="hero-content-5">
            <div class="topic-tag">{{ $page['hero']['tagline'] }}</div>
            <div class="title">
                <h1>{{ $page['hero']['heading'] }}</h1>
            </div>
            <p class="hero-sub">{{ $page['hero']['subheading'] }}</p>
            <div class="hero-content-1">
                <div class="join-us">
                    <a class="e-primary-btn has-icon" href="#study-topic-contact-form">
                        {{ $page['hero']['cta'] }}
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="study-topic-hero-band">
    <div class="container">
        <div class="band-card">
            <div class="row align-items-center row-gap-4">
                <div class="col-lg-8">
                    <div class="band-copy">
                        <p>{{ $page['hero']['content'] }}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="band-thumb">
                        <img src="{{ asset($page['images']['hero_band']) }}" alt="{{ $page['label'] }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="study-topic-overview">
    <div class="container">
        <div class="row row-gap-4 align-items-stretch">
            <div class="col-xl-6">
                @php $section = $page['section2']; @endphp
                @php $section2Items = $section['points'] ?? $section['cards'] ?? []; @endphp
                <div class="study-topic-feature-card">
                    <div class="study-topic-section-tag">{{ $page['hero']['tagline'] }}</div>
                    <h3>{{ $section['heading'] }}</h3>
                    <div class="study-topic-feature-body">
                        @if (!empty($section['content']))
                            <p>{{ $section['content'] }}</p>
                        @elseif (!empty($section2Items))
                            <div class="study-topic-rich-grid">
                                @foreach ($section2Items as $item)
                                    <div class="study-topic-rich-item">
                                        <span class="study-topic-rich-icon"><i class="fa-light fa-arrow-right"></i></span>
                                        <span>{{ $item }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        @if (!empty($section['content']))
                            <div class="study-topic-feature-visual">
                                <div class="study-topic-feature-visual-frame">
                                    <span class="study-topic-feature-visual-badge">{{ $page['label'] }}</span>
                                    <img src="{{ asset($page['images']['hero_band']) }}" alt="{{ $section['heading'] }}">
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                @php $section3Items = $page['section3']['points'] ?? $page['section3']['cards'] ?? []; @endphp
                <div class="study-topic-showcase-card">
                    <div class="study-topic-showcase-media">
                        <img src="{{ asset($page['images']['sidebar']) }}" alt="{{ $page['label'] }}">
                    </div>
                    <div class="study-topic-showcase-content">
                        <div class="study-topic-section-tag">{{ $page['label'] }}</div>
                        <h3>{{ $page['section3']['heading'] }}</h3>
                        @if (!empty($page['section3']['content']))
                            <div class="study-topic-showcase-copy">
                                <p>{{ $page['section3']['content'] }}</p>
                            </div>
                        @elseif (!empty($section3Items))
                            <div class="study-topic-point-grid">
                                @foreach ($section3Items as $item)
                                    <div class="study-topic-point-card">
                                        <span class="study-topic-point-icon"><i class="fa-light fa-circle-check"></i></span>
                                        <span>{{ $item }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <div class="m-t-25">
                            <a class="e-primary-btn has-icon" href="#study-topic-contact-form">
                                {{ $page['hero']['cta'] }}
                                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="study-topic-split" style="--study-topic-s4-bg: url('{{ asset($page['images']['hero_bg']) }}');">
    <div class="container">
        <div class="row row-gap-5 align-items-center why-us-section-4 study-topic-s4-alt">
            <div class="col-xl-6">
                <div class="thumb px-xl-5 left">
                    <div class="thumb-1">
                        <img src="{{ asset($page['images']['section4']) }}" alt="{{ $page['section4']['heading'] }}">
                    </div>
                    <div class="thumb-2">
                        <img src="{{ asset($page['images']['hero_band']) }}" alt="{{ $page['label'] }}">
                    </div>
                    <div class="thumb-3">
                        <div class="shape-wrapped-thumb">
                            <img src="{{ asset($page['images']['sidebar']) }}" alt="{{ $page['label'] }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="why-us-content-2">
                    <div class="common-subtitle"><span>{{ $page['label'] }}</span></div>
                    <div class="common-title text-start"><h2>{{ $page['section4']['heading'] }}</h2></div>
                    @if (!empty($page['section4']['content']))
                        <div class="text">
                            <p>{{ $page['section4']['content'] }}</p>
                        </div>
                    @elseif (!empty($page['section4']['points']))
                        <div class="services">
                            <div class="service-left">
                                @foreach (array_chunk($page['section4']['points'], (int) ceil(count($page['section4']['points']) / 2))[0] as $point)
                                    <div class="service">
                                        <i class="fa-solid fa-check"></i>
                                        <p>{{ $point }}</p>
                                    </div>
                                @endforeach
                            </div>
                            <div class="service-right">
                                @foreach (array_slice($page['section4']['points'], (int) ceil(count($page['section4']['points']) / 2)) as $point)
                                    <div class="service">
                                        <i class="fa-solid fa-check"></i>
                                        <p>{{ $point }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<section class="study-topic-contact" id="study-topic-contact-form">
    <div class="container">
        <div class="study-topic-contact-shell">
            <div class="row row-gap-4 align-items-stretch">
                <div class="col-xl-5">
                    <div class="topic-contact-copy">
                        <div>
                            <div class="common-subtitle"><span>{{ $page['label'] }}</span></div>
                            <div class="common-title text-start"><h2>{{ $page['section5']['heading'] }}</h2></div>
                            <p>{{ $page['section5']['content'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="contact-form-3">
                        <div class="form-content">
                            <h3>{{ $page['hero']['cta'] }}</h3>
                            <p>Share your details and our team will help you with the next right step for your Australia study plan.</p>
                            <form id="contactForm">
                                @csrf
                                <div class="row study-topic-form-grid">
                                    <div class="col-md-6">
                                        <input class="form-control" name="name" placeholder="Full name" type="text">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" name="email" placeholder="Email" type="email">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" name="phone" placeholder="Phone" type="tel">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="city">
                                            <option value="">Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country }}">{{ $country }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" name="message" placeholder="Message" rows="5"></textarea>
                                    </div>
                                </div>
                                <input type="text" name="bot_field" class="d-none">
                                <input type="hidden" name="course" value="{{ $page['label'] }}">
                                <input type="hidden" name="formName" value="Study Topic - {{ $page['label'] }}">
                                <div class="m-t-25">
                                    <button class="e-primary-btn has-icon is-hover-white" type="submit">
                                        <span class="btext">Submit</span>
                                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="donate-to-us-section study-topic-final" style="--study-topic-final-bg: url('{{ asset($page['images']['hero_bg']) }}');">
    <div class="container">
        <div class="donate-to-us-layout">
            <div class="become-volunteer-card mb-0">
                <div class="common-subtitle text-uppercase justify-content-center m-b-10"><span>{{ $page['hero']['tagline'] }}</span></div>
                <h2>{{ $page['final']['heading'] }}</h2>
                @if (!empty($page['final']['subheading']))
                    <p>{{ $page['final']['subheading'] }}</p>
                @endif
                <div class="btn-wrap">
                    <a class="e-primary-btn has-icon" href="#study-topic-contact-form">
                        {{ $page['final']['cta'] }}
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
