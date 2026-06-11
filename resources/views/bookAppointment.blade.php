@extends('layouts.frontend')
@section('content')

@php
    $hero = $appointmentPage['hero'];
@endphp

<style>
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
            url('https://visawizer.com.au/assets/imgs/study/study-visas/hero-bg.webp');
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
</style>

<div class="appointment-page">
    <section class="appointment-hero">
        <div class="container">
            <h1>{{ $hero['eyebrow'] }}</h1>
            <p>{{ $hero['subheading'] }}</p>
        </div>
    </section>

    
    <iframe src="https://app.acuityscheduling.com/schedule.php?owner=30361822&ref=embedded_csp" title="Schedule Appointment" width="100%" height="800" frameBorder="0" allow="payment"></iframe><script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>


    <div class="appointment-section appointment-section--alt-light appointment-testi-wrap">
        @include('partials.testi')
    </div>

    <div class="appointment-section appointment-section--alt-dark appointment-blogs-wrap">
        @include('partials.blogs')
    </div>
</div>
@endsection
