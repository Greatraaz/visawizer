@extends('layouts.frontend')
@section('content')
@php
    $aboutPageUrl = url('about-us');
@endphp
<style type="text/css">
.about-stats-band {
    position: relative;
    overflow: hidden;
    background: linear-gradient(180deg, #fdfcfa 0%, #f5f4f0 45%, #f0efea 100%);
    border-top: 1px solid rgba(0, 0, 0, 0.06);
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    padding: clamp(2.5rem, 5vw, 3.5rem) 0;
}
.about-stats-band::before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, #bd1c2e 35%, #e0243a 65%, transparent);
    pointer-events: none;
}
.about-stats-band__grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 1rem;
}
@media (min-width: 768px) {
    .about-stats-band__grid {
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 0;
    }
}
.about-stats-band__item {
    position: relative;
    text-align: center;
    padding: clamp(1.35rem, 3vw, 1.85rem) clamp(0.85rem, 2vw, 1.25rem);
    border-radius: 16px;
    background: #fff;
    border: 1px solid rgba(0, 0, 0, 0.06);
    box-shadow: 0 8px 28px rgba(15, 19, 24, 0.06);
}
@media (min-width: 768px) {
    .about-stats-band__item {
        border-radius: 0;
        background: transparent;
        border: none;
        box-shadow: none;
        padding: 1.25rem 1rem 1.5rem;
    }
    .about-stats-band__item:not(:last-child)::after {
        content: "";
        position: absolute;
        top: 18%;
        bottom: 18%;
        right: 0;
        width: 1px;
        background: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.1), transparent);
    }
}
.about-stats-band__icon {
    font-size: 1.35rem;
    color: #bd1c2e;
    margin-bottom: 0.65rem;
}
@media (min-width: 768px) {
    .about-stats-band__icon {
        font-size: 1.5rem;
    }
}
.about-stats-band__value {
    font-size: clamp(1.85rem, 4.2vw, 2.65rem);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -0.03em;
    margin: 0 0 0.4rem;
    color: #14181f;
}
.about-stats-band__value .purecounter {
    color: inherit;
}
.about-stats-band__suffix {
    font-size: 0.72em;
    font-weight: 800;
    margin-left: 0.05em;
}
.about-stats-band__label {
    font-size: 0.82rem;
    line-height: 1.45;
    color: #5c6570;
    margin: 0;
    max-width: 11rem;
    margin-left: auto;
    margin-right: auto;
}
.about-why-dark {
    position: relative;
    overflow: hidden;
    background:
        radial-gradient(ellipse 80% 60% at 0% 20%, rgba(189, 28, 46, 0.12), transparent 55%),
        radial-gradient(ellipse 60% 50% at 100% 80%, rgba(40, 80, 120, 0.1), transparent 50%),
        linear-gradient(180deg, #0b0e13 0%, #12171f 45%, #0d1016 100%);
    color: #e4e8ee;
    padding-top: clamp(3.5rem, 8vw, 5rem);
    padding-bottom: clamp(3.5rem, 8vw, 5rem);
}
.about-why-dark::before {
    content: "";
    position: absolute;
    inset: 0;
    background: url("{{ asset('assets/images/principles-image-1.webp') }}") 90% 50% / min(45vw, 520px) auto no-repeat;
    opacity: 0.04;
    pointer-events: none;
}
.about-why-dark .container {
    position: relative;
    z-index: 1;
}
.about-why-dark__kicker {
    display: inline-block;
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: #9aa3b0;
    margin-bottom: 0.65rem;
    padding-bottom: 0.45rem;
    border-bottom: 2px solid rgba(189, 28, 46, 0.65);
}
.about-why-dark__head {
    font-size: clamp(1.65rem, 3.5vw, 2.35rem);
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
    letter-spacing: -0.02em;
    margin: 0 0 1.5rem;
    max-width: 22ch;
}
.about-why-dark__mvv {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.1rem;
    margin-bottom: 1.85rem;
}
@media (min-width: 576px) {
    .about-why-dark__mvv {
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 1rem 1.15rem;
    }
}
.about-why-dark__mvv-item {
    padding: 1rem 1rem 1.05rem;
    border-radius: 14px;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.06);
}
.about-why-dark__mvv-item h3 {
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #b8c0ca;
    margin: 0 0 0.5rem;
}
.about-why-dark__mvv-item p {
    font-size: 0.88rem;
    line-height: 1.58;
    color: #aeb6c2;
    margin: 0;
}
.about-why-dark__cta .e-primary-btn {
    box-shadow: 0 8px 28px rgba(189, 28, 46, 0.38);
}
.about-why-dark__media {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.about-why-dark__media-link {
    position: relative;
    display: block;
    width: 100%;
    border-radius: 20px;
    overflow: hidden;
    aspect-ratio: 16 / 10;
    background: #0a0c10;
    box-shadow:
        0 28px 56px rgba(0, 0, 0, 0.45),
        0 0 0 1px rgba(255, 255, 255, 0.08);
    text-decoration: none;
    color: inherit;
    cursor: pointer;
    outline: none;
    border: none;
    padding: 0;
    font: inherit;
    text-align: inherit;
    appearance: none;
    -webkit-appearance: none;
}
.about-why-dark__media-link img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    pointer-events: none;
}
.about-why-dark__media-link::after {
    content: "";
    position: absolute;
    inset: 0;
    z-index: 0;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.05) 40%, rgba(0, 0, 0, 0.45) 100%);
    pointer-events: none;
}
.about-why-dark__play {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 84px;
    height: 84px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.95);
    color: #5c0d24;
    border: 3px solid rgba(255, 255, 255, 0.95);
    box-shadow: 0 0 0 8px rgba(255, 255, 255, 0.2), 0 12px 40px rgba(0, 0, 0, 0.35);
    z-index: 1;
    pointer-events: none;
    transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
}
.about-why-dark__play i {
    font-size: 1.65rem;
    margin-left: 4px;
}
.about-why-dark__media-link:hover .about-why-dark__play {
    transform: translate(-50%, -50%) scale(1.06);
    background: #fff;
    color: #bd1c2e;
    box-shadow: 0 0 0 10px rgba(255, 255, 255, 0.25), 0 16px 48px rgba(0, 0, 0, 0.4);
}
.about-why-dark__media-link:focus-visible {
    outline: 2px solid #fff;
    outline-offset: 4px;
}
.about-why-dark__media-link:focus-visible .about-why-dark__play {
    transform: translate(-50%, -50%) scale(1.06);
}
.about-why-dark__caption {
    margin: 0.85rem 0 0;
    font-size: 0.85rem;
    color: #8b95a3;
    text-align: center;
}
@media (max-width: 991px) {
    .about-why-dark__head {
        max-width: none;
    }
    .about-why-dark__media {
        margin-top: 0.5rem;
    }
}

.about-needhelp-bridgepad {
    padding-bottom: clamp(3.25rem, 7vw, 4.5rem) !important;
}
.about-journey-bridge {
    position: relative;
    z-index: 12;
    display: flex;
    justify-content: center;
    margin-top: -2.25rem;
    margin-bottom: -2.25rem;
}
@media (min-width: 768px) {
    .about-journey-bridge {
        margin-top: -2.5rem;
        margin-bottom: -2.5rem;
    }
}
.about-timeline-yearbar-wrap {
    padding: 5px;
    border-radius: 999px;
    background: linear-gradient(145deg, rgba(255, 255, 255, 0.95), rgba(230, 232, 236, 0.9));
    box-shadow:
        0 4px 6px rgba(15, 19, 24, 0.06),
        0 18px 40px rgba(15, 19, 24, 0.18),
        inset 0 1px 0 rgba(255, 255, 255, 0.85);
    max-width: 100%;
}
.about-timeline-yearbar {
    display: inline-flex;
    align-items: stretch;
    flex-wrap: nowrap;
    max-width: 100%;
    background: #fafbfc;
    border-radius: 999px;
    overflow: hidden;
    border: 1px solid rgba(0, 0, 0, 0.06);
}
.about-timeline-yearbar__seg {
    flex: 1 1 0;
    min-width: 3.25rem;
    text-align: center;
    padding: 0.68rem 1rem;
    font-weight: 700;
    font-size: clamp(0.88rem, 2.6vw, 1.02rem);
    color: #3d4450;
    text-decoration: none;
    border-right: 1px solid rgba(0, 0, 0, 0.07);
    transition: background 0.22s ease, color 0.22s ease, box-shadow 0.22s ease, transform 0.18s ease;
    white-space: nowrap;
    position: relative;
}
.about-timeline-yearbar__seg:last-child {
    border-right: none;
}
.about-timeline-yearbar__seg:hover:not(.is-active) {
    background: #fff;
    color: #12151a;
}
.about-timeline-yearbar__seg.is-active {
    background: linear-gradient(160deg, #7a1532 0%, #5c0d24 45%, #4a0a1d 100%);
    color: #fff;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.18);
}
.about-timeline-yearbar__seg.is-active::after {
    content: "";
    position: absolute;
    left: 12%;
    right: 12%;
    bottom: 6px;
    height: 2px;
    border-radius: 2px;
    background: rgba(255, 255, 255, 0.35);
}
.about-timeline-yearbar__seg:focus-visible {
    outline: 2px solid #bd1c2e;
    outline-offset: 3px;
    z-index: 1;
}

.about-timeline-dark {
    --at-bg: #0c0f14;
    --at-surface: rgba(255, 255, 255, 0.05);
    --at-border: rgba(255, 255, 255, 0.12);
    --at-text: #eef1f5;
    --at-muted: #9aa3af;
    --at-accent: #e0243a;
    --at-accent-soft: rgba(189, 28, 46, 0.45);
    background:
        radial-gradient(ellipse 120% 80% at 50% -20%, rgba(189, 28, 46, 0.16), transparent 55%),
        radial-gradient(ellipse 70% 50% at 100% 50%, rgba(30, 58, 95, 0.12), transparent 50%),
        linear-gradient(180deg, #12161d 0%, #0c0f14 38%, #0a0c10 100%);
    color: var(--at-text);
    padding: clamp(2.85rem, 5.5vw, 4rem) 0 clamp(2.5rem, 5vw, 3.25rem);
    position: relative;
    overflow: hidden;
}
.about-timeline-dark::before {
    content: "";
    position: absolute;
    inset: 0;
    background: url("{{ asset('assets/images/principles-image-3.webp') }}") right 8% center / min(52vw, 640px) auto no-repeat;
    opacity: 0.055;
    pointer-events: none;
}
.about-timeline-dark::after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.12), transparent);
    pointer-events: none;
}
.about-timeline-dark .container {
    position: relative;
    z-index: 1;
}

.about-vtimeline {
    position: relative;
    max-width: 1080px;
    margin: 0 auto;
    padding: 0.35rem 0 0.25rem;
}
.about-vtimeline__rail {
    position: absolute;
    left: 50%;
    top: 0.5rem;
    bottom: 0.5rem;
    width: 3px;
    transform: translateX(-50%);
    background: linear-gradient(
        180deg,
        rgba(224, 36, 58, 0.55),
        rgba(255, 255, 255, 0.12) 18%,
        rgba(255, 255, 255, 0.12) 82%,
        rgba(224, 36, 58, 0.4)
    );
    border-radius: 3px;
    pointer-events: none;
}
.about-vtimeline__row {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 76px minmax(0, 1fr);
    gap: 0 0.5rem;
    align-items: start;
    margin-bottom: clamp(1.35rem, 3vw, 2rem);
    scroll-margin-top: 110px;
}
.about-vtimeline__row:last-child {
    margin-bottom: 0;
}
.about-vtimeline__slot--empty {
    min-height: 1px;
}
.about-vtimeline__slot--axis {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 0.35rem;
    position: relative;
    z-index: 2;
}
.about-vtimeline__dot {
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background: linear-gradient(145deg, #ff4d63, var(--at-accent));
    box-shadow:
        0 0 0 5px rgba(189, 28, 46, 0.28),
        0 2px 8px rgba(0, 0, 0, 0.4);
    flex-shrink: 0;
}
.about-vtimeline__year {
    margin-top: 0.45rem;
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.08em;
    color: rgba(255, 255, 255, 0.88);
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.14);
    padding: 0.2rem 0.55rem;
    border-radius: 999px;
}
.about-vtimeline__row--left .about-vtimeline__slot--body {
    grid-column: 1;
    justify-self: end;
    width: 100%;
    max-width: 26rem;
    text-align: right;
}
.about-vtimeline__row--left .about-vtimeline__slot--axis {
    grid-column: 2;
}
.about-vtimeline__row--left .about-vtimeline__slot--empty {
    grid-column: 3;
}
.about-vtimeline__row--right .about-vtimeline__slot--empty {
    grid-column: 1;
}
.about-vtimeline__row--right .about-vtimeline__slot--axis {
    grid-column: 2;
}
.about-vtimeline__row--right .about-vtimeline__slot--body {
    grid-column: 3;
    justify-self: start;
    width: 100%;
    max-width: 26rem;
    text-align: left;
}

.about-vtimeline__card {
    position: relative;
    padding: clamp(1.25rem, 3vw, 1.65rem) clamp(1.15rem, 3vw, 1.5rem);
    border-radius: 18px;
    background: linear-gradient(155deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.03) 100%);
    border: 1px solid var(--at-border);
    box-shadow:
        0 16px 40px rgba(0, 0, 0, 0.32),
        inset 0 1px 0 rgba(255, 255, 255, 0.07);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    overflow: hidden;
}
.about-vtimeline__card::before {
    content: attr(data-year);
    position: absolute;
    top: 0.4rem;
    font-size: clamp(2.25rem, 8vw, 3.25rem);
    font-weight: 800;
    line-height: 1;
    letter-spacing: -0.04em;
    color: rgba(255, 255, 255, 0.05);
    pointer-events: none;
    user-select: none;
}
.about-vtimeline__row--left .about-vtimeline__card::before {
    right: 0.65rem;
    left: auto;
}
.about-vtimeline__row--right .about-vtimeline__card::before {
    left: 0.65rem;
    right: auto;
}
.about-vtimeline__card::after {
    content: "";
    position: absolute;
    top: 14%;
    bottom: 14%;
    width: 3px;
    border-radius: 2px;
    background: linear-gradient(180deg, var(--at-accent), rgba(189, 28, 46, 0.25));
    box-shadow: 0 0 16px var(--at-accent-soft);
}
.about-vtimeline__row--left .about-vtimeline__card::after {
    right: 0;
    left: auto;
    border-radius: 2px 0 0 2px;
}
.about-vtimeline__row--right .about-vtimeline__card::after {
    left: 0;
    right: auto;
    border-radius: 0 2px 2px 0;
}

.about-vtimeline__eyebrow {
    font-size: 0.68rem;
    font-weight: 700;
    letter-spacing: 0.11em;
    text-transform: uppercase;
    color: #f8717a;
    margin: 0 0 0.4rem;
    display: block;
}
.about-vtimeline__row--left .about-vtimeline__eyebrow::after {
    content: "";
    display: block;
    margin: 0.45rem 0 0 auto;
    width: 2rem;
    height: 2px;
    border-radius: 2px;
    background: linear-gradient(90deg, transparent, var(--at-accent));
}
.about-vtimeline__row--right .about-vtimeline__eyebrow::after {
    content: "";
    display: block;
    margin: 0.45rem auto 0 0;
    width: 2rem;
    height: 2px;
    border-radius: 2px;
    background: linear-gradient(90deg, var(--at-accent), transparent);
}
.about-vtimeline__title {
    font-size: clamp(1.05rem, 2.2vw, 1.28rem);
    font-weight: 700;
    color: #fff;
    margin: 0 0 0.65rem;
    line-height: 1.32;
    letter-spacing: -0.02em;
}
.about-vtimeline__body {
    font-size: 0.93rem;
    line-height: 1.65;
    color: var(--at-muted);
    margin: 0;
}

.about-timeline-dark__cta {
    text-align: center;
    margin-top: clamp(1.75rem, 4vw, 2.35rem);
}
.about-timeline-dark__cta .e-primary-btn {
    box-shadow: 0 8px 28px rgba(189, 28, 46, 0.4);
}

@media (max-width: 767px) {
    .about-vtimeline__rail {
        left: 22px;
        transform: none;
    }
    .about-vtimeline__row {
        grid-template-columns: 48px minmax(0, 1fr);
        gap: 0 0.85rem;
    }
    .about-vtimeline__row--left .about-vtimeline__slot--empty,
    .about-vtimeline__row--right .about-vtimeline__slot--empty {
        display: none;
    }
    .about-vtimeline__row--left .about-vtimeline__slot--axis,
    .about-vtimeline__row--right .about-vtimeline__slot--axis {
        grid-column: 1;
        grid-row: 1;
        padding-top: 0.5rem;
    }
    .about-vtimeline__row--left .about-vtimeline__slot--body,
    .about-vtimeline__row--right .about-vtimeline__slot--body {
        grid-column: 2;
        grid-row: 1;
        max-width: none;
        justify-self: stretch;
        text-align: left;
    }
    .about-vtimeline__row--left .about-vtimeline__card::after,
    .about-vtimeline__row--right .about-vtimeline__card::after {
        left: 0;
        right: auto;
        top: 0;
        bottom: auto;
        width: 3rem;
        height: 3px;
        border-radius: 0 0 2px 2px;
    }
    .about-vtimeline__row--left .about-vtimeline__card::before,
    .about-vtimeline__row--right .about-vtimeline__card::before {
        top: 0.45rem;
        right: 0.5rem;
        left: auto;
        font-size: 2.5rem;
    }
    .about-vtimeline__row--left .about-vtimeline__eyebrow::after,
    .about-vtimeline__row--right .about-vtimeline__eyebrow::after {
        margin-left: 0;
        margin-right: auto;
        background: linear-gradient(90deg, var(--at-accent), transparent);
    }
    .about-timeline-yearbar__seg.is-active::after {
        display: none;
    }
}
</style>
@include('partials.breadcrumb')
<div style="background-color: #f8f7f0">

    <section class="why-us-section-6 p-t-100 p-t-xs-80" style="
        background-image: url(assets/img/bg/why-us-bg.webp),
          url(assets/img/bg/who-we-are-bg.webp);
      ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="thumb px-lg-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="thumb-1">
                            <img src="{{ asset('assets/images/principles-image-1.webp') }}" alt="Visawizer education and migration services Melbourne" width="520" height="420" loading="lazy" decoding="async"/>
                            <div class="s-shape">
                                <img src="{{ asset('assets/img/shapes/shape-14.webp') }}" alt="Decorative section shape" width="200" height="200" loading="lazy" decoding="async"/>
                            </div>
                        </div>
                        <div class="thumb-2">
                            <img src="{{ asset('assets/images/principles-image-2.webp') }}" alt="Australian visa and study pathways" width="400" height="320" loading="lazy" decoding="async"/>
                        </div>
                        <div class="thumb-3">
                            <div class="shape-wrapped-thumb">
                                <img src="{{ asset('assets/images/principles-image-3.webp') }}" alt="Migration consultation with Visawizer" width="400" height="320" loading="lazy" decoding="async"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="why-us-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="common-subtitle">
                            <span>About Visawizer</span>
                        </div>
                        <div class="common-title text-start">
                            <h2>Visawizer Your Gateway to Australian Dreams!</h2>
                        </div>
                        <div class="common-title text-start m-t-15">
                            <h5 class="fw-normal" style="font-size: 1.15rem; line-height: 1.5;">Your Journey to Australia, Simplified and Streamlined</h5>
                        </div>
                        <div class="text">
                            <p>
                                Visawizer Education &amp; Migration Services is a renowned facilitator for both education and migration endeavors targeting Australia. We recognize that embarking on international relocation or pursuing education abroad can be a monumental step, often taking you away from familiar terrains.
                            </p>
                            <p>
                                That&apos;s why Visawizer is committed to offering a seamless, transparent, and efficient process tailored to your specific needs. Our comprehensive services span a wide range, encompassing General Skilled Migration, Student Visas, Admissions, Temporary Graduate Visas, Partner Visas, Parent Visas, and Employer-sponsored Visas, among others. Situated in the heart of Melbourne, our seasoned team of professionals is dedicated to supporting you from inception to completion. At Visawizer, you&apos;re not just another application; our consultants are devoted to understanding your unique circumstances, offering in-depth consultations, ensuring consistent updates on your application&apos;s progress, and ultimately helping you achieve your envisioned outcome.
                            </p>
                        </div>
                        <div class="m-t-25">
                            <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">Book Appointment
                                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-t-80 p-b-80 p-t-xs-60 p-b-xs-60 about-needhelp-bridgepad">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-11 text-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="common-title">
                        <h2>Need help with your Visa?</h2>
                    </div>
                    <div class="text m-t-20">
                        <p class="mb-3">We&apos;re happy to help you out. Just give us a call on Call - Or - SMS <a href="tel:+61468963273">0468 963 273</a> or even better book an appointment with us.</p>
                        <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">Book Appointment
                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="about-journey-bridge">
    <div class="container d-flex justify-content-center px-3">
        <div class="about-timeline-yearbar-wrap">
            <nav class="about-timeline-yearbar" id="about-year-bar" role="tablist" aria-label="Journey milestones by year">
                <a href="{{ $aboutPageUrl }}" data-target="about-tl-2013" class="about-timeline-yearbar__seg is-active" data-milestone="2013" role="tab" aria-selected="true">2013</a>
                <a href="{{ $aboutPageUrl }}" data-target="about-tl-2019" class="about-timeline-yearbar__seg" data-milestone="2019" role="tab" aria-selected="false">2019</a>
                <a href="{{ $aboutPageUrl }}" data-target="about-tl-2021" class="about-timeline-yearbar__seg" data-milestone="2021" role="tab" aria-selected="false">2021</a>
                <a href="{{ $aboutPageUrl }}" data-target="about-tl-2023" class="about-timeline-yearbar__seg" data-milestone="2023" role="tab" aria-selected="false">2023</a>
            </nav>
        </div>
    </div>
</div>

<section class="about-timeline-dark" id="about-journey-section" data-aos="fade-up" data-aos-duration="900">
    <div class="container" id="about-journey">
        <div class="about-vtimeline" role="list" aria-label="Visawizer journey timeline">
            <div class="about-vtimeline__rail" aria-hidden="true"></div>

            <article class="about-vtimeline__row about-vtimeline__row--left" id="about-tl-2013" role="listitem">
                <div class="about-vtimeline__slot about-vtimeline__slot--body">
                    <div class="about-vtimeline__card" data-year="2013">
                        <p class="about-vtimeline__eyebrow">Ankur Saini&apos;s Journey &amp; Vision</p>
                        <h3 class="about-vtimeline__title">Visawizer: Migrant&apos;s Vision to Assistance</h3>
                        <p class="about-vtimeline__body">Starting his journey as an Australian migrant in 2013, Ankur Saini transformed his personal experiences into establishing Visawizer Education and Migration Services, committed to assisting others in their migration dreams.</p>
                    </div>
                </div>
                <div class="about-vtimeline__slot about-vtimeline__slot--axis">
                    <span class="about-vtimeline__dot" aria-hidden="true"></span>
                    <span class="about-vtimeline__year">2013</span>
                </div>
                <div class="about-vtimeline__slot about-vtimeline__slot--empty" aria-hidden="true"></div>
            </article>

            <article class="about-vtimeline__row about-vtimeline__row--right" id="about-tl-2019" role="listitem">
                <div class="about-vtimeline__slot about-vtimeline__slot--empty" aria-hidden="true"></div>
                <div class="about-vtimeline__slot about-vtimeline__slot--axis">
                    <span class="about-vtimeline__dot" aria-hidden="true"></span>
                    <span class="about-vtimeline__year">2019</span>
                </div>
                <div class="about-vtimeline__slot about-vtimeline__slot--body">
                    <div class="about-vtimeline__card" data-year="2019">
                        <p class="about-vtimeline__eyebrow">From Migrant to Migration Agent</p>
                        <h3 class="about-vtimeline__title">Journey to Empowerment</h3>
                        <p class="about-vtimeline__body">Ankur Saini&apos;s journey began with his own migration to Australia in 2013. By 2019, after securing Permanent Residency, he pursued a Graduate Diploma in Australian Migration Law from Victoria University. By 2021, Ankur transformed into a registered migration agent, dedicated to aiding fellow migrants.</p>
                    </div>
                </div>
            </article>

            <article class="about-vtimeline__row about-vtimeline__row--left" id="about-tl-2021" role="listitem">
                <div class="about-vtimeline__slot about-vtimeline__slot--body">
                    <div class="about-vtimeline__card" data-year="2021">
                        <p class="about-vtimeline__eyebrow">Excellence in Migration Services</p>
                        <h3 class="about-vtimeline__title">A New Chapter in Migration</h3>
                        <p class="about-vtimeline__body">Motivated by my own journey, I established Visawizer to ease the immigration process for others. With deep roots in tourism and a strong commitment to excellence, our team at Visawizer consistently puts clients first, ensuring a smoother path to achieving their residency goals.</p>
                    </div>
                </div>
                <div class="about-vtimeline__slot about-vtimeline__slot--axis">
                    <span class="about-vtimeline__dot" aria-hidden="true"></span>
                    <span class="about-vtimeline__year">2021</span>
                </div>
                <div class="about-vtimeline__slot about-vtimeline__slot--empty" aria-hidden="true"></div>
            </article>

            <article class="about-vtimeline__row about-vtimeline__row--right" id="about-tl-2023" role="listitem">
                <div class="about-vtimeline__slot about-vtimeline__slot--empty" aria-hidden="true"></div>
                <div class="about-vtimeline__slot about-vtimeline__slot--axis">
                    <span class="about-vtimeline__dot" aria-hidden="true"></span>
                    <span class="about-vtimeline__year">2023</span>
                </div>
                <div class="about-vtimeline__slot about-vtimeline__slot--body">
                    <div class="about-vtimeline__card" data-year="2023">
                        <p class="about-vtimeline__eyebrow">Your Easy Journey to Australian Residency</p>
                        <h3 class="about-vtimeline__title">Achieving Residency Dreams with Visawizer</h3>
                        <p class="about-vtimeline__body">At Visawizer, we simplify the visa process, offering free informative videos and active social media support to ease your immigration journey. Trust us to turn your dreams of Australian residency into reality with our commitment to excellence and client-first approach.</p>
                    </div>
                </div>
            </article>
        </div>

        <div class="about-timeline-dark__cta">
            <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">Book Appointment
                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
            </a>
        </div>
    </div>
</section>

<section class="about-stats-band" aria-label="Visawizer at a glance">
    <div class="container">
        <div class="about-stats-band__grid">
            <div class="about-stats-band__item" data-aos="fade-up" data-aos-duration="700">
                <div class="about-stats-band__icon" aria-hidden="true"><i class="fa-light fa-briefcase"></i></div>
                <h3 class="about-stats-band__value">
                    <span class="purecounter" data-purecounter-duration="2" data-purecounter-end="2">0</span><span class="about-stats-band__suffix">K+</span>
                </h3>
                <p class="about-stats-band__label">Successful cases</p>
            </div>
            <div class="about-stats-band__item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="80">
                <div class="about-stats-band__icon" aria-hidden="true"><i class="fa-light fa-passport"></i></div>
                <h3 class="about-stats-band__value">
                    <span class="purecounter" data-purecounter-duration="2" data-purecounter-end="100">0</span><span class="about-stats-band__suffix">%</span>
                </h3>
                <p class="about-stats-band__label">Visa &amp; immigration process</p>
            </div>
            <div class="about-stats-band__item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="160">
                <div class="about-stats-band__icon" aria-hidden="true"><i class="fa-light fa-chart-line-up"></i></div>
                <h3 class="about-stats-band__value">
                    <span class="purecounter" data-purecounter-duration="2" data-purecounter-end="98">0</span><span class="about-stats-band__suffix">%</span>
                </h3>
                <p class="about-stats-band__label">Success rate</p>
            </div>
            <div class="about-stats-band__item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="240">
                <div class="about-stats-band__icon" aria-hidden="true"><i class="fa-light fa-face-smile-beam"></i></div>
                <h3 class="about-stats-band__value">
                    <span class="purecounter" data-purecounter-duration="2" data-purecounter-end="100">0</span><span class="about-stats-band__suffix">%</span>
                </h3>
                <p class="about-stats-band__label">Happiness guaranteed</p>
            </div>
        </div>
    </div>
</section>

@php
    $aboutPromoVideoUrl = trim((string) config('site.aboutPageVideoUrl', ''));
    if ($aboutPromoVideoUrl === '') {
        $aboutPromoVideoUrl = 'https://www.youtube.com/watch?v=fLeJJPxua3E';
    }
    if (preg_match('/youtube\\.com\\/watch\\?v=([^&\\s]+)/i', $aboutPromoVideoUrl, $m)) {
        $aboutPromoVideoUrl = 'https://www.youtube.com/watch?v=' . $m[1];
    } elseif (preg_match('/youtu\\.be\\/([^?\\s]+)/i', $aboutPromoVideoUrl, $m)) {
        $aboutPromoVideoUrl = 'https://www.youtube.com/watch?v=' . $m[1];
    }
    $aboutYoutubeId = '';
    if (preg_match('/[?&]v=([^&\\s]+)/i', $aboutPromoVideoUrl, $m)) {
        $aboutYoutubeId = $m[1];
    } elseif (preg_match('/youtu\\.be\\/([^?\\s]+)/i', $aboutPromoVideoUrl, $m)) {
        $aboutYoutubeId = $m[1];
    } elseif (preg_match('/youtube\\.com\\/embed\\/([^?\\s]+)/i', $aboutPromoVideoUrl, $m)) {
        $aboutYoutubeId = $m[1];
    }
@endphp
<section class="about-why-dark">
    <div class="container">
        <div class="row align-items-center g-4 g-xl-5">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="900">
                <div class="about-why-dark__copy">
                    <span class="about-why-dark__kicker">Why choose Visawizer</span>
                    <h2 class="about-why-dark__head">Countless Benefits &amp; Easy Processing</h2>
                    <div class="about-why-dark__mvv">
                        <div class="about-why-dark__mvv-item">
                            <h3>Our mission</h3>
                            <p>To provide dedicated, efficient, commercially sound and result oriented solutions to clients.</p>
                        </div>
                        <div class="about-why-dark__mvv-item">
                            <h3>Our vision</h3>
                            <p>To excel as a leading, progressive, innovative, dynamic and unique Sydney law practice acknowledged for its legal excellence&hellip;</p>
                        </div>
                        <div class="about-why-dark__mvv-item">
                            <h3>Our values</h3>
                            <p>The principles which guide us in all our dealings with our clients and which drive our practice throughout the firm&hellip;</p>
                        </div>
                    </div>
                    <div class="about-why-dark__cta">
                        <a class="e-primary-btn has-icon" href="{{ url('contact-us') }}">Book Appointment
                            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="120" data-aos-duration="900">
                <div class="about-why-dark__media">
                    @if ($aboutYoutubeId !== '')
                        <button type="button"
                                class="about-why-dark__media-link"
                                data-bs-toggle="modal"
                                data-bs-target="#aboutPromoVideoModal"
                                aria-label="Play introduction video">
                            <img src="{{ asset('assets/images/principles-image-2.webp') }}" alt="Visawizer introduction video preview" width="800" height="500" loading="lazy" decoding="async">
                            <span class="about-why-dark__play" aria-hidden="true">
                                <i class="fa-solid fa-play"></i>
                            </span>
                        </button>
                    @else
                        <a class="about-why-dark__media-link"
                           href="{{ $aboutPromoVideoUrl }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           aria-label="Open video in new tab">
                            <img src="{{ asset('assets/images/principles-image-2.webp') }}" alt="Visawizer introduction video preview" width="800" height="500" loading="lazy" decoding="async">
                            <span class="about-why-dark__play" aria-hidden="true">
                                <i class="fa-solid fa-play"></i>
                            </span>
                        </a>
                    @endif
                    <p class="about-why-dark__caption">Tap the video to watch our story — free guides and updates on social media too.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@if ($aboutYoutubeId !== '')
<div class="modal fade" id="aboutPromoVideoModal" tabindex="-1" aria-labelledby="aboutPromoVideoModalLabel" aria-hidden="true" data-youtube-id="{{ e($aboutYoutubeId) }}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg" style="background: #111;">
            <div class="modal-header border-secondary border-opacity-25 py-2 px-3">
                <h5 class="modal-title text-white small mb-0" id="aboutPromoVideoModalLabel">Visawizer</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 bg-black">
                <div class="ratio ratio-16x9">
                    <iframe id="aboutPromoVideoIframe"
                        title="Visawizer introduction video"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                        loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@include('partials.testi')

@include('partials.blogs')

<script>
(function () {
    var bar = document.getElementById('about-year-bar');
    var section = document.getElementById('about-journey-section');
    if (!bar || !section) return;
    var pills = bar.querySelectorAll('.about-timeline-yearbar__seg');
    var milestones = section.querySelectorAll('[id^="about-tl-"]');

    function setActiveYear(year) {
        pills.forEach(function (p) {
            var on = p.getAttribute('data-milestone') === year;
            p.classList.toggle('is-active', on);
            p.setAttribute('aria-selected', on ? 'true' : 'false');
        });
    }

    pills.forEach(function (pill) {
        pill.addEventListener('click', function (e) {
            e.preventDefault();
            var targetId = pill.getAttribute('data-target');
            var el = targetId ? document.getElementById(targetId) : null;
            var y = pill.getAttribute('data-milestone');
            if (y) setActiveYear(y);
            if (el) {
                el.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
    });

    function syncFromScroll() {
        if (!milestones.length) return;
        var mid = window.innerHeight * 0.38;
        var best = null;
        var bestDist = Infinity;
        milestones.forEach(function (m) {
            var r = m.getBoundingClientRect();
            var cy = r.top + r.height * 0.35;
            var d = Math.abs(cy - mid);
            if (d < bestDist) {
                bestDist = d;
                best = m;
            }
        });
        if (best && best.id) {
            var y = best.id.replace('about-tl-', '');
            if (y) setActiveYear(y);
        }
    }

    var t;
    window.addEventListener(
        'scroll',
        function () {
            clearTimeout(t);
            t = setTimeout(syncFromScroll, 50);
        },
        { passive: true }
    );
    syncFromScroll();
})();
</script>

@if ($aboutYoutubeId !== '')
<script>
(function () {
    var modalEl = document.getElementById('aboutPromoVideoModal');
    var iframe = document.getElementById('aboutPromoVideoIframe');
    if (!modalEl || !iframe) return;
    var ytId = modalEl.getAttribute('data-youtube-id');
    if (!ytId) return;
    modalEl.addEventListener('shown.bs.modal', function () {
        iframe.src =
            'https://www.youtube-nocookie.com/embed/' +
            encodeURIComponent(ytId) +
            '?autoplay=1&rel=0&modestbranding=1';
    });
    modalEl.addEventListener('hidden.bs.modal', function () {
        iframe.removeAttribute('src');
    });
})();
</script>
@endif

@endsection
