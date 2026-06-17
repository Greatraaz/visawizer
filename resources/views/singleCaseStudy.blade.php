@extends('layouts.frontend')
@section('content')
@include('partials.breadcrumb')

<style>
    .cs-wrap { background: #fff; min-height: 100vh; }

    /* ── HERO ── */
    .cs-hero {
        background: #fff;
        border-bottom: 1px solid #e8e8e8;
        padding: 50px 0 0;
    }
    .cs-industry-tag {
        display: inline-block;
        background: #fff4ef;
        color: #e8500a;
        border: 1px solid #ffd3bf;
        font-size: .72rem;
        font-weight: 700;
        letter-spacing: .13em;
        text-transform: uppercase;
        padding: 5px 14px;
        border-radius: 50px;
        margin-bottom: 18px;
    }
    .cs-hero h1 {
        font-size: clamp(1.7rem, 3.5vw, 2.8rem);
        font-weight: 800;
        color: #111;
        line-height: 1.2;
        margin-bottom: 20px;
    }
    .cs-meta-row {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 20px;
        font-size: .85rem;
        color: #777;
        margin-bottom: 30px;
    }
    .cs-meta-row i { color: #e8500a; margin-right: 5px; }

    .status-pill {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 3px 12px;
        border-radius: 50px;
        font-size: .75rem;
        font-weight: 600;
    }
    .status-pill.active   { background: #e6f9ed; color: #1a7f3c; }
    .status-pill.inactive { background: #fde8e8; color: #c0392b; }
    .status-pill .dot { width: 6px; height: 6px; border-radius: 50%; background: currentColor; }

    /* ── HERO IMAGE STRIP ── */
    .cs-hero-img {
        width: 100%;
        max-height: 380px;
        object-fit: cover;
        border-radius: 12px 12px 0 0;
        display: block;
        margin-top: 30px;
        box-shadow: 0 -4px 30px rgba(0,0,0,.07);
    }
    .cs-hero-img-placeholder {
        width: 100%;
        height: 200px;
        background: #f3f3f3;
        border-radius: 12px 12px 0 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ccc;
        font-size: 3rem;
        margin-top: 30px;
    }

    /* ── BODY LAYOUT ── */
    .cs-body { background: #f7f7f5; padding: 50px 0 80px; }

    /* ── CONTENT CARD ── */
    .cs-card {
        background: #fff;
        border-radius: 14px;
        padding: 36px;
        box-shadow: 0 2px 16px rgba(0,0,0,.06);
        margin-bottom: 24px;
    }
    .cs-card-label {
        font-size: .68rem;
        font-weight: 700;
        letter-spacing: .14em;
        text-transform: uppercase;
        color: #e8500a;
        margin-bottom: 12px;
    }
    .cs-card h5 {
        font-size: 1.15rem;
        font-weight: 700;
        color: #111;
        margin-bottom: 14px;
    }
    .cs-card p {
        font-size: .95rem;
        line-height: 1.85;
        color: #444;
        margin: 0;
    }

    /* ── SIDEBAR ── */
    .cs-sidebar-card {
        background: #fff;
        border-radius: 14px;
        padding: 30px;
        box-shadow: 0 2px 16px rgba(0,0,0,.06);
        position: sticky;
        top: 90px;
    }
    .cs-sidebar-card .s-label {
        font-size: .67rem;
        font-weight: 700;
        letter-spacing: .13em;
        text-transform: uppercase;
        color: #aaa;
        margin-bottom: 5px;
    }
    .cs-sidebar-card .s-val {
        font-size: .95rem;
        font-weight: 600;
        color: #111;
        margin-bottom: 22px;
    }
    .cs-sidebar-card hr { border-color: #f0f0f0; margin: 18px 0; }

    /* ── BACK BTN ── */
    .btn-cs-back {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        background: #f5f5f5;
        color: #333;
        border: none;
        border-radius: 8px;
        padding: 8px 18px;
        font-size: .84rem;
        font-weight: 600;
        text-decoration: none;
        margin-bottom: 28px;
        transition: background .2s;
    }
    .btn-cs-back:hover { background: #ebebeb; color: #111; }

    /* ── DIVIDER LINE ── */
    .orange-line {
        width: 40px; height: 3px;
        background: #e8500a;
        border-radius: 2px;
        margin-bottom: 18px;
    }

    @media(max-width:768px){
        .cs-sidebar-card { position: static; margin-top: 10px; }
        .cs-card { padding: 24px; }
    }
</style>

<div class="cs-wrap">

    {{-- ── HERO ── --}}
    <section class="cs-hero">
        <div class="container">

            @if($caseStudy->industry)
                <div class="cs-industry-tag">{{ $caseStudy->industry }}</div>
            @endif

            <h1>{{ $caseStudy->title }}</h1>

            <div class="cs-meta-row">
                <span><i class="bi bi-calendar3"></i>{{ \Carbon\Carbon::parse($caseStudy->created_at)->format('d M, Y') }}</span>
                <span class="status-pill {{ $caseStudy->status == 1 ? 'active' : 'inactive' }}">
                    <span class="dot"></span>
                    {{ $caseStudy->status == 1 ? 'Published' : 'Unpublished' }}
                </span>
            </div>
        </div>

        <div class="container">
            @if($caseStudy->image)
                <img src="{{ asset($caseStudy->image) }}" alt="{{ $caseStudy->title }}" class="cs-hero-img" width="1140" height="380" loading="lazy" decoding="async">
            @else
                <div class="cs-hero-img-placeholder">
                    <i class="bi bi-image"></i>
                </div>
            @endif
        </div>
    </section>

    {{-- ── BODY ── --}}
    <section class="cs-body">
        <div class="container">
            <div class="row g-4">

                {{-- LEFT --}}
                <div class="col-lg-12">

                    @if($caseStudy->description)
                    <div class="cs-card">
                        <div class="cs-card-label">Overview</div>
                        <div class="orange-line"></div>
                        <h5>Project Description</h5>
                        <p>{!! $caseStudy->description !!}</p>
                    </div>
                    @endif

                    @if($caseStudy->result)
                    <div class="cs-card">
                        <div class="cs-card-label">Outcome</div>
                        <div class="orange-line"></div>
                        <h5>Results & Impact</h5>
                        <p>{!! $caseStudy->result !!}</p>
                    </div>
                    @endif

                </div>

            </div>
        </div>
    </section>

</div>

@endsection
