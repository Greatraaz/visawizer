@extends('layouts.frontend')
@section('content')

@php
    $reviewCount = count($testimonials);
@endphp

<style type="text/css">
    .testimonials-page {
        --testi-ink: #071032;
        --testi-muted: #64748b;
        --testi-accent: var(--theme-color-3);
        --testi-accent-deep: #4a002d;
        --testi-gold: #d7a642;
        --testi-border: rgba(15, 23, 42, 0.1);
        --testi-soft: #f5f7fb;
        --testi-panel-gradient: linear-gradient(
            90deg,
            rgba(102, 0, 63, 0.45) 0%,
            var(--theme-color-3) 14%,
            #7a0049 42%,
            #550035 72%,
            #4a002d 100%
        );
        --testi-media-gradient: linear-gradient(
            180deg,
            #f8fafc 0%,
            #eef2f7 55%,
            #e8edf4 100%
        );
        --testi-badge-gradient: linear-gradient(
            135deg,
            rgba(255, 255, 255, 0.22) 0%,
            rgba(255, 255, 255, 0.08) 100%
        );
    }
    .testimonials-page .testi-hero {
        padding: clamp(56px, 7vw, 88px) 0 clamp(48px, 6vw, 72px);
        background-image:
            linear-gradient(
                165deg,
                color-mix(in srgb, var(--theme-color-3) 72%, transparent) 0%,
                color-mix(in srgb, var(--theme-color-3) 88%, #060308) 45%,
                color-mix(in srgb, var(--theme-color-3) 94%, #030204) 100%
            ),
            url('{{ asset('assets/imgs/study/study-visas/hero-bg.webp') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: #ffffff;
        text-align: center;
    }
    .testimonials-page .testi-breadcrumb {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 8px;
        margin-bottom: 20px;
        font-size: 0.9rem;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.82);
    }
    .testimonials-page .testi-breadcrumb a {
        color: rgba(255, 255, 255, 0.92);
        text-decoration: none;
        transition: color 0.2s ease;
    }
    .testimonials-page .testi-breadcrumb a:hover {
        color: var(--testi-gold);
    }
    .testimonials-page .testi-breadcrumb span {
        opacity: 0.55;
    }
    .testimonials-page .testi-hero h1 {
        color: #ffffff;
        font-size: clamp(2.2rem, 4.5vw, 3.6rem);
        line-height: 1.1;
        margin-bottom: 12px;
    }
    .testimonials-page .testi-hero__lead {
        color: rgba(255, 255, 255, 0.88);
        max-width: 720px;
        margin: 0 auto;
        line-height: 1.72;
        font-size: 1.05rem;
    }
    .testimonials-page .testi-main {
        padding: clamp(56px, 7vw, 88px) 0;
        background: linear-gradient(180deg, var(--testi-soft) 0%, #ffffff 100%);
    }
    .testimonials-page .testi-intro {
        max-width: 820px;
        margin: 0 auto clamp(40px, 5vw, 56px);
        text-align: center;
    }
    .testimonials-page .testi-intro__label {
        display: inline-block;
        text-transform: uppercase;
        letter-spacing: 0.14em;
        font-size: 0.78rem;
        font-weight: 900;
        color: var(--testi-accent);
        margin-bottom: 12px;
    }
    .testimonials-page .testi-intro h2 {
        color: var(--testi-ink);
        font-size: clamp(1.65rem, 3vw, 2.2rem);
        line-height: 1.25;
        margin: 0 0 14px;
    }
    .testimonials-page .testi-intro p {
        color: var(--testi-muted);
        line-height: 1.75;
        margin: 0;
    }
    .testimonials-page .testi-list {
        display: flex;
        flex-direction: column;
        gap: clamp(28px, 4vw, 40px);
        max-width: 1060px;
        margin: 0 auto;
    }
    .testimonials-page .testi-story {
        display: grid;
        grid-template-columns: minmax(220px, 300px) minmax(0, 1fr);
        align-items: stretch;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 16px 44px rgba(74, 0, 45, 0.18);
        transition: box-shadow 0.25s ease, transform 0.25s ease;
    }
    .testimonials-page .testi-story:hover {
        box-shadow: 0 22px 52px rgba(74, 0, 45, 0.26);
        transform: translateY(-3px);
    }
    .testimonials-page .testi-story__media {
        position: relative;
        flex: none;
        min-height: 280px;
        background: var(--testi-media-gradient);
        overflow: hidden;
    }
    .testimonials-page .testi-story__media img {
        width: 100%;
        height: 100%;
        min-height: 280px;
        object-fit: cover;
        object-position: center top;
        display: block;
    }
    .testimonials-page .testi-story__body {
        position: relative;
        background: var(--testi-panel-gradient);
        padding: clamp(28px, 4vw, 40px);
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #ffffff;
        min-height: 280px;
    }
    .testimonials-page .testi-story__top {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        margin-bottom: 16px;
    }
    .testimonials-page .testi-stars {
        display: inline-flex;
        align-items: center;
        gap: 4px;
    }
    .testimonials-page .testi-stars i {
        color: #f59e0b;
        font-size: 0.95rem;
    }
    .testimonials-page .testi-stars span {
        margin-left: 8px;
        font-size: 0.88rem;
        font-weight: 800;
        color: #ffffff;
    }
    .testimonials-page .testi-source {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 5px 12px;
        border-radius: 999px;
        background: var(--testi-badge-gradient);
        border: 1px solid rgba(255, 255, 255, 0.25);
        color: rgba(255, 255, 255, 0.92);
        font-size: 0.78rem;
        font-weight: 700;
    }
    .testimonials-page .testi-source i.fa-google {
        color: #ffffff;
    }
    .testimonials-page .testi-story__quote {
        position: relative;
        padding-left: 28px;
        margin-bottom: 20px;
    }
    .testimonials-page .testi-story__quote::before {
        content: "\201C";
        position: absolute;
        left: 0;
        top: -8px;
        font-size: 3rem;
        line-height: 1;
        font-weight: 900;
        color: var(--testi-gold);
        font-family: Georgia, serif;
    }
    .testimonials-page .testi-story__quote p {
        margin: 0;
        color: rgba(255, 255, 255, 0.92);
        line-height: 1.78;
        font-size: 1rem;
    }
    .testimonials-page .testi-story__author h3 {
        margin: 0 0 4px;
        font-size: 1.15rem;
        font-weight: 800;
        color: #ffffff;
    }
    .testimonials-page .testi-story__author p {
        margin: 0;
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--testi-gold);
    }
    .testimonials-page .testi-cta-band {
        padding: clamp(52px, 6vw, 72px) 0;
        background: linear-gradient(
            175deg,
            color-mix(in srgb, var(--theme-color-3) 86%, #060308) 0%,
            color-mix(in srgb, var(--theme-color-3) 92%, #030205) 55%,
            color-mix(in srgb, var(--theme-color-3) 88%, #0a0710) 100%
        );
        text-align: center;
        color: rgba(255, 255, 255, 0.92);
    }
    .testimonials-page .testi-cta-band h2 {
        color: #ffffff;
        font-size: clamp(1.65rem, 3vw, 2.25rem);
        margin-bottom: 12px;
    }
    .testimonials-page .testi-cta-band > .container > p {
        max-width: 580px;
        margin: 0 auto 24px;
        line-height: 1.72;
        color: rgba(255, 255, 255, 0.78);
    }
    .testimonials-page .testi-cta-band__actions {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 14px;
    }
    @media (max-width: 767px) {
        .testimonials-page .testi-story {
            grid-template-columns: 1fr;
        }
        .testimonials-page .testi-story__media {
            min-height: 240px;
            max-height: 280px;
        }
        .testimonials-page .testi-story__media img {
            min-height: 240px;
            max-height: 280px;
            object-position: center top;
        }
        .testimonials-page .testi-story__body {
            min-height: auto;
        }
        .testimonials-page .testi-story__top {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>

<div class="testimonials-page">
    <section class="testi-hero">
        <div class="container">
            <nav class="testi-breadcrumb" aria-label="Breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span aria-hidden="true">|</span>
                <span>Testimonials</span>
            </nav>
            <h1>Testimonials</h1>
            <p class="testi-hero__lead">Real stories from clients who trusted Visawizer with study, family, sponsored, and migration journeys across Australia.</p>
        </div>
    </section>

    <section class="testi-main">
        <div class="container">
            <header class="testi-intro" data-aos="fade-up">
                <span class="testi-intro__label">Client success stories</span>
                <h2>What our clients say about Visawizer</h2>
                <p>Hear how we supported {{ $reviewCount }} clients with clear advice, careful documentation, and confident next steps through student, partner, skilled, and visitor visa pathways.</p>
            </header>

            <div class="testi-list">
                @foreach ($testimonials as $index => $testimonial)
                    <article
                        class="testi-story"
                        data-aos="fade-up"
                        data-aos-duration="900"
                        data-aos-delay="{{ min($index * 60, 180) }}"
                    >
                        <div class="testi-story__media">
                            <img
                                src="{{ asset($testimonial['image']) }}"
                                alt="{{ $testimonial['name'] }} — Visawizer client"
                                width="300"
                                height="360"
                                loading="lazy"
                                decoding="async"
                            >
                        </div>
                        <div class="testi-story__body">
                            <div class="testi-story__top">
                                <div class="testi-stars" aria-label="5 out of 5 stars">
                                    @for ($i = 0; $i < 5; $i++)
                                        <i class="fa-solid fa-star" aria-hidden="true"></i>
                                    @endfor
                                    <span>5.0</span>
                                </div>
                                <span class="testi-source">
                                    <i class="fa-brands fa-google" aria-hidden="true"></i>
                                    Google Review
                                </span>
                            </div>
                            <blockquote class="testi-story__quote">
                                <p>{{ $testimonial['testimonial'] }}</p>
                            </blockquote>
                            <div class="testi-story__author">
                                <h3>{{ $testimonial['name'] }}</h3>
                                <p>{{ $testimonial['designation'] }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="testi-cta-band">
        <div class="container" data-aos="fade-up">
            <h2>Ready to start your visa journey?</h2>
            <p>Book a consultation with our registered migration agents and get personalised guidance for your pathway to Australia.</p>
            <div class="testi-cta-band__actions">
                <a class="e-primary-btn has-icon" href="{{ url('book-appointment') }}">
                    Book appointment
                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                </a>
                <a class="e-primary-btn has-icon" href="{{ url('videos') }}">
                    Watch our videos
                    <span class="icon-wrap"><span class="icon"><i class="fa-brands fa-youtube"></i><i class="fa-brands fa-youtube"></i></span></span>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
