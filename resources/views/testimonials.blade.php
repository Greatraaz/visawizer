@extends('layouts.frontend')
@section('content')

<style type="text/css">
    .testimonials-page {
        --testi-ink: #071032;
        --testi-muted: #64748b;
        --testi-accent: var(--theme-color-3);
        --testi-gold: #d7a642;
        --testi-border: rgba(15, 23, 42, 0.1);
    }
    .testimonials-page .testi-hero {
        padding: clamp(70px, 8vw, 110px) 0;
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
    .testimonials-page .testi-hero h1 {
        color: #ffffff;
        font-size: clamp(2.35rem, 4.8vw, 4.2rem);
        line-height: 1.1;
        margin-bottom: 16px;
    }
    .testimonials-page .testi-hero p {
        color: rgba(255, 255, 255, 0.88);
        max-width: 760px;
        margin: 0 auto;
        line-height: 1.72;
    }
    .testimonials-page .testi-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        color: rgba(255, 255, 255, 0.94);
        font-size: 0.82rem;
        font-weight: 900;
        margin-bottom: 14px;
        margin-left: auto;
        margin-right: auto;
    }
    .testimonials-page .testi-eyebrow::before {
        content: "";
        width: 42px;
        height: 2px;
        background: var(--testi-gold);
    }
    .testimonials-page .testi-main {
        padding: clamp(64px, 7vw, 98px) 0;
        background: linear-gradient(180deg, #f5f7fb 0%, #ffffff 72%);
    }
    .testimonials-page .testi-intro {
        max-width: 760px;
        margin: 0 auto clamp(40px, 5vw, 56px);
        text-align: center;
        color: var(--testi-muted);
        line-height: 1.72;
    }
    .testimonials-page .testi-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: clamp(24px, 3vw, 32px);
    }
    .testimonials-page .testi-card {
        background: linear-gradient(150deg, var(--testi-accent) 15%, var(--testi-accent) 48.85%, var(--testi-accent) 100%);
        border-radius: 16px;
        padding: 20px;
        display: flex;
        gap: clamp(20px, 3vw, 32px);
        align-items: center;
        height: 100%;
        box-shadow: 0 18px 44px rgba(15, 23, 42, 0.12);
    }
    .testimonials-page .testi-card .thumb {
        flex: none;
        width: clamp(120px, 18vw, 220px);
        border-radius: 12px;
        overflow: hidden;
    }
    .testimonials-page .testi-card .thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        aspect-ratio: 1 / 1;
    }
    .testimonials-page .testi-card .card-content {
        min-width: 0;
    }
    .testimonials-page .testi-card .rating {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 12px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.14);
        color: #ffffff;
        font-size: 0.82rem;
        font-weight: 700;
        margin-bottom: 14px;
    }
    .testimonials-page .testi-card .rating i {
        color: #fbbf24;
    }
    .testimonials-page .testi-card .review p {
        color: rgba(255, 255, 255, 0.95);
        line-height: 1.7;
        margin-bottom: 14px;
    }
    .testimonials-page .testi-card .author-details h5 {
        color: #ffffff;
        margin: 0;
        font-size: 1.05rem;
        font-weight: 800;
    }
    .testimonials-page .testi-card .author-details h6 {
        color: rgba(255, 255, 255, 0.78);
        margin: 4px 0 0;
        font-size: 0.9rem;
        font-weight: 600;
    }
    .testimonials-page .testi-cta {
        margin-top: clamp(44px, 6vw, 64px);
        text-align: center;
    }
    @media (max-width: 991px) {
        .testimonials-page .testi-grid {
            grid-template-columns: 1fr;
        }
        .testimonials-page .testi-card {
            flex-direction: column;
            align-items: flex-start;
        }
        .testimonials-page .testi-card .thumb {
            width: 100%;
            max-width: 220px;
        }
    }
</style>

<div class="testimonials-page">
    <section class="testi-hero">
        <div class="container">
            <div class="testi-eyebrow">Client Success</div>
            <h1>Testimonials</h1>
            <p>Real stories from clients who trusted Visawizer with study, family, sponsored, and migration journeys across Australia.</p>
        </div>
    </section>

    <section class="testi-main">
        <div class="container">
            <p class="testi-intro" data-aos="fade-up">
                Hear how Visawizer supported clients with clear advice, careful documentation, and confident next steps through student, partner, skilled, and visitor visa pathways.
            </p>

            <div class="testi-grid">
                @foreach ($testimonials as $testimonial)
                    <article class="testi-card" data-aos="fade-up" data-aos-duration="1000">
                        <div class="thumb">
                            <img
                                src="{{ asset($testimonial['image']) }}"
                                alt="{{ $testimonial['name'] }} — Visawizer client testimonial"
                                loading="lazy"
                                decoding="async"
                            >
                        </div>
                        <div class="card-content">
                            <div class="rating">
                                <span>Rating</span>
                                <i class="fa-solid fa-star-sharp"></i>
                                <span>{{ number_format($testimonial['rating'], 1) }}</span>
                            </div>
                            <div class="review">
                                <p>&ldquo;{{ $testimonial['testimonial'] }}&rdquo;</p>
                            </div>
                            <div class="author-details">
                                <h5>{{ $testimonial['name'] }}</h5>
                                <h6>{{ $testimonial['designation'] }}</h6>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="testi-cta" data-aos="fade-up">
                <a class="e-primary-btn has-icon" href="{{ url('book-appointment') }}">
                    Book appointment
                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
