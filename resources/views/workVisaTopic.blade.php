@extends('layouts.frontend')
@section('content')
@include('partials.studyPageStyles')
@php
    $heroImg = $page['images']['hero'] ?? $page['images']['hero_bg'] ?? 'assets/images/services/banner-1.webp';
    $profileImg = $page['images']['profile'] ?? 'assets/images/services/image-21.webp';
    $supportImg = $page['images']['support'] ?? 'assets/images/services/image-43.webp';
@endphp
<style type="text/css">
    .work-visa-topic-page .work-visa-breadcrumb {
        font-size: 0.82rem;
        letter-spacing: 0.04em;
        margin-bottom: 1rem;
    }
    .work-visa-topic-page .work-visa-breadcrumb a {
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
    }
    .work-visa-topic-page .work-visa-breadcrumb a:hover {
        text-decoration: underline;
    }
    .work-visa-topic-page .work-visa-breadcrumb span.sep {
        opacity: 0.55;
        padding: 0 0.35rem;
    }
    .work-visa-hero {
        background-size: cover;
        background-position: center;
        position: relative;
        padding: 120px 0 130px;
        overflow: hidden;
    }
    .work-visa-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(5, 39, 35, 0.28) 0%, rgba(5, 39, 35, 0.78) 100%);
    }
    .work-visa-hero .hero-inner {
        position: relative;
        z-index: 1;
        max-width: 920px;
    }
    .work-visa-hero .topic-tag {
        display: inline-block;
        font-size: 0.82rem;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 12px;
        padding-left: 12px;
        border-left: 3px solid var(--theme-color-2);
    }
    .work-visa-hero h1 {
        font-size: clamp(2rem, 4.2vw, 3.25rem);
        line-height: 1.12;
        margin-bottom: 14px;
        color: #fff;
    }
    .work-visa-hero .hero-sub {
        color: rgba(255, 255, 255, 0.94);
        font-size: 1.05rem;
        line-height: 1.65;
        max-width: 720px;
        margin-bottom: 0;
    }
    .work-visa-intro-band {
        margin-top: -64px;
        position: relative;
        z-index: 2;
        padding-bottom: 56px;
    }
    .work-visa-intro-band .intro-card {
        background: #fff;
        border-radius: 12px;
        padding: 28px 30px;
        box-shadow: 0 22px 55px rgba(15, 23, 42, 0.12);
        border: 1px solid rgba(148, 163, 184, 0.2);
    }
    .work-visa-intro-band .intro-card p {
        margin-bottom: 0;
        color: #334155;
        line-height: 1.72;
    }
    .work-visa-intro-band .intro-thumb img {
        width: 100%;
        border-radius: 12px;
        object-fit: cover;
        max-height: 220px;
        box-shadow: 0 14px 36px rgba(15, 23, 42, 0.12);
    }
    .work-visa-section {
        padding: 72px 0;
    }
    .work-visa-section.alt {
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
    }
    .work-visa-section h2 {
        font-size: clamp(1.35rem, 2.2vw, 1.75rem);
        margin-bottom: 14px;
        color: #0f172a;
    }
    .work-visa-section .eyebrow {
        font-size: 0.72rem;
        letter-spacing: 0.16em;
        text-transform: uppercase;
        font-weight: 700;
        color: #64748b;
        margin-bottom: 8px;
    }
    .work-visa-section p.lead {
        color: #475569;
        line-height: 1.72;
        margin-bottom: 0;
    }
    .work-visa-points {
        margin-top: 22px;
    }
    .work-visa-points .point {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 10px;
        color: #334155;
        font-size: 0.98rem;
        line-height: 1.55;
    }
    .work-visa-points .point i {
        margin-top: 3px;
        color: #fff;
        background: linear-gradient(150deg, #1b7b61 15%, #3dc59d 48.85%, #1b7b61 100%);
        width: 22px;
        height: 22px;
        border-radius: 100%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.62rem;
        flex-shrink: 0;
    }
    .work-visa-related {
        padding: 80px 0 90px;
        background: linear-gradient(165deg, #0b1220 0%, #121a2a 42%, #1a2438 100%);
    }
    .work-visa-related h2 {
        color: #f8fafc;
    }
    .work-visa-related .sub {
        color: #94a3b8;
        max-width: 640px;
        margin: 0 auto 36px;
    }
    .work-visa-related-card {
        display: block;
        height: 100%;
        padding: 22px 20px;
        border-radius: 12px;
        background: rgba(15, 23, 42, 0.55);
        border: 1px solid rgba(148, 163, 184, 0.18);
        text-decoration: none;
        color: inherit;
        transition: transform 0.2s ease, border-color 0.2s ease;
    }
    .work-visa-related-card:hover {
        transform: translateY(-4px);
        border-color: rgba(61, 197, 157, 0.35);
        color: inherit;
    }
    .work-visa-related-card .ico {
        width: 48px;
        height: 48px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(40, 174, 119, 0.2);
        color: #e2e8f0;
        margin-bottom: 14px;
        font-size: 1.1rem;
    }
    .work-visa-related-card h3 {
        font-size: 1.05rem;
        color: #f1f5f9;
        margin-bottom: 6px;
    }
    .work-visa-related-card .meta {
        font-size: 0.78rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #94a3b8;
    }
    .work-visa-final {
        padding: 88px 0;
        background: linear-gradient(180deg, #f1f5f9 0%, #ffffff 55%);
    }
    .work-visa-final h2 {
        margin-bottom: 12px;
    }
</style>

<div class="wsm-work-page work-visa-topic-page">

<section class="work-visa-hero hero-section-5" style="background-image: url('{{ asset($heroImg) }}');">
    <div class="container">
        <div class="hero-inner" data-aos="fade-up">
            <div class="work-visa-breadcrumb text-uppercase">
                <a href="{{ url('work-skilled-migration') }}">Work &amp; Skilled Migration</a>
                <span class="sep">/</span>
                <span class="text-white-50">{{ $page['category'] ?? 'Visa' }}</span>
            </div>
            <div class="topic-tag">{{ $page['hero']['tagline'] ?? '' }}</div>
            <h1>{{ $page['hero']['heading'] ?? $page['label'] }}</h1>
            @if (!empty($page['hero']['subheading']))
                <p class="hero-sub">{{ $page['hero']['subheading'] }}</p>
            @endif
        </div>
    </div>
</section>

<section class="work-visa-intro-band">
    <div class="container">
        <div class="row align-items-stretch g-4">
            <div class="col-lg-7" data-aos="fade-up">
                <div class="intro-card h-100">
                    <p>{{ $page['hero']['content'] ?? '' }}</p>
                    @if (!empty($page['hero']['cta']))
                        <div class="m-t-25">
                            <a class="e-primary-btn has-icon" href="{{ url('book-appointment') }}">
                                {{ $page['hero']['cta'] }}
                                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                <div class="intro-thumb">
                    <img src="{{ asset($profileImg) }}" alt="{{ $page['label'] }}" loading="lazy" width="640" height="420">
                </div>
            </div>
        </div>
    </div>
</section>

@if (!empty($page['suit']))
<section class="work-visa-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <h2 data-aos="fade-up">{{ $page['suit']['heading'] ?? '' }}</h2>
                @if (!empty($page['suit']['content']))
                    <p class="lead m-b-0" data-aos="fade-up" data-aos-delay="80">{{ $page['suit']['content'] }}</p>
                @endif
                @if (!empty($page['suit']['points']))
                    <div class="work-visa-points row" data-aos="fade-up" data-aos-delay="120">
                        @php $pts = $page['suit']['points']; $mid = (int) ceil(count($pts) / 2); @endphp
                        <div class="col-md-6">
                            @foreach (array_slice($pts, 0, $mid) as $point)
                                <div class="point"><i class="fa-solid fa-check"></i><span>{{ $point }}</span></div>
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            @foreach (array_slice($pts, $mid) as $point)
                                <div class="point"><i class="fa-solid fa-check"></i><span>{{ $point }}</span></div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endif

@if (!empty($page['planning']))
<section class="work-visa-section alt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10" data-aos="fade-up">
                @if (!empty($page['planning']['eyebrow']))
                    <div class="eyebrow">{{ $page['planning']['eyebrow'] }}</div>
                @endif
                <h2>{{ $page['planning']['heading'] ?? '' }}</h2>
                <p class="lead m-b-0">{{ $page['planning']['content'] ?? '' }}</p>
            </div>
        </div>
    </div>
</section>
@endif

@if (!empty($page['strategy']))
<section class="work-visa-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10" data-aos="fade-up">
                <h2>{{ $page['strategy']['heading'] ?? '' }}</h2>
                @if (!empty($page['strategy']['content']))
                    <p class="lead m-b-0">{{ $page['strategy']['content'] }}</p>
                @endif
                @if (!empty($page['strategy']['points']))
                    <div class="work-visa-points row m-t-10">
                        @php $pts = $page['strategy']['points']; $mid = (int) ceil(count($pts) / 2); @endphp
                        <div class="col-md-6">
                            @foreach (array_slice($pts, 0, $mid) as $point)
                                <div class="point"><i class="fa-solid fa-check"></i><span>{{ $point }}</span></div>
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            @foreach (array_slice($pts, $mid) as $point)
                                <div class="point"><i class="fa-solid fa-check"></i><span>{{ $point }}</span></div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endif

@if (!empty($page['challenges']))
<section class="work-visa-section alt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10" data-aos="fade-up">
                <h2>{{ $page['challenges']['heading'] ?? '' }}</h2>
                @if (!empty($page['challenges']['content']))
                    <p class="lead m-b-0">{{ $page['challenges']['content'] }}</p>
                @endif
                @if (!empty($page['challenges']['points']))
                    <div class="work-visa-points row m-t-10">
                        @php $pts = $page['challenges']['points']; $mid = (int) ceil(count($pts) / 2); @endphp
                        <div class="col-md-6">
                            @foreach (array_slice($pts, 0, $mid) as $point)
                                <div class="point"><i class="fa-solid fa-check"></i><span>{{ $point }}</span></div>
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            @foreach (array_slice($pts, $mid) as $point)
                                <div class="point"><i class="fa-solid fa-check"></i><span>{{ $point }}</span></div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endif

@if (!empty($page['support']))
<section class="work-visa-section">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6" data-aos="fade-up">
                <h2>{{ $page['support']['heading'] ?? '' }}</h2>
                <p class="lead m-b-0">{{ $page['support']['content'] ?? '' }}</p>
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
                <img class="rounded-3 shadow-lg w-100" src="{{ asset($supportImg) }}" alt="" loading="lazy" width="640" height="420">
            </div>
        </div>
    </div>
</section>
@endif

@if (!empty($relatedPages))
<section class="work-visa-related text-center">
    <div class="container">
        <h2 data-aos="fade-up">Related pathways</h2>
        <p class="sub" data-aos="fade-up" data-aos-delay="60">Explore other work and skilled migration topics that may be relevant to your situation.</p>
        <div class="row row-gap-4 justify-content-center text-start">
            @foreach ($relatedPages as $rp)
                <div class="col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 80 }}">
                    <a class="work-visa-related-card" href="{{ url('visa/' . $rp['path']) }}">
                        <div class="ico"><i class="{{ $rp['icon'] }}"></i></div>
                        <div class="meta">{{ $rp['category'] }}</div>
                        <h3>{{ $rp['label'] }}</h3>
                        @if (!empty($rp['tagline']))
                            <p class="small text-muted m-b-0 m-t-8">{{ $rp['tagline'] }}</p>
                        @endif
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<section class="work-visa-final text-center">
    <div class="container" style="max-width: 720px;" data-aos="fade-up">
        <h2>Need structured guidance on this pathway?</h2>
        <p class="text-muted m-b-25">Visawizer provides planning support and documentation direction. This page is general information only and not legal advice.</p>
        <a class="e-primary-btn has-icon m-r-10 m-b-10" href="{{ url('book-appointment') }}">
            Book consultation
            <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
        </a>
        <a class="study-btn-outline-dark m-b-10" href="{{ url('work-skilled-migration') }}">Back to overview</a>
    </div>
</section>

</div>
@endsection
