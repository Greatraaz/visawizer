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
        background:
            linear-gradient(110deg, rgba(7, 16, 25, 0.92), rgba(7, 16, 25, 0.7)),
            url('{{ asset('assets/images/banner/breadcrumb-bg.webp') }}') center / cover;
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
    .appointment-page .appointment-light {
        background: #ffffff;
    }
    .appointment-page .appointment-soft {
        background:
            linear-gradient(90deg, rgba(7, 16, 25, 0.03) 1px, transparent 1px),
            linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
        background-size: 42px 42px, auto;
    }
    .appointment-page .appointment-dark {
        background:
            radial-gradient(circle at 14% 18%, color-mix(in srgb, var(--appointment-accent) 18%, transparent), transparent 28%),
            radial-gradient(circle at 86% 78%, rgba(215, 166, 66, 0.18), transparent 28%),
            linear-gradient(145deg, #071019 0%, #132235 58%, #101827 100%);
        color: #ffffff;
    }
    .appointment-page .appointment-intro-grid {
        display: grid;
        grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
        gap: clamp(28px, 5vw, 72px);
        align-items: center;
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
    .appointment-page .appointment-show-less {
        color: var(--appointment-ink);
        text-transform: uppercase;
        letter-spacing: 0.08em;
        font-size: 0.78rem;
        font-weight: 900;
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
    }
    .appointment-page .appointment-time-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 12px;
    }
    .appointment-page .appointment-time-btn {
        padding: 18px 20px;
        border: 1px solid rgba(7, 16, 50, 0.22);
        color: var(--appointment-ink);
        text-align: center;
        font-weight: 800;
        background: #ffffff;
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
    .appointment-page .appointment-soft .appointment-back-link {
        color: var(--appointment-ink);
    }
    .appointment-page .appointment-soft .appointment-schedule-title {
        color: var(--appointment-ink);
    }
    .appointment-page .appointment-soft .appointment-highlight-card {
        background: #ffffff;
        border: 1px solid var(--appointment-border);
        color: var(--appointment-ink);
        box-shadow: 0 14px 32px rgba(15, 23, 42, 0.07);
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
    }
</style>

<div class="appointment-page">
    <section class="appointment-hero">
        <div class="container">
            <h1>{{ $hero['eyebrow'] }}</h1>
            <p>{{ $hero['subheading'] }}</p>
        </div>
    </section>

    <section class="appointment-section appointment-light">
        <div class="container">
            <div class="appointment-intro-grid">
                <div data-aos="fade-up">
                    <div class="appointment-eyebrow">{{ $hero['eyebrow'] }}</div>
                    <h2>{{ $hero['heading'] }}</h2>
                </div>
                <div data-aos="fade-up" data-aos-delay="120">
                    <p class="appointment-lead">{{ $hero['subheading'] }}</p>
                    <p class="appointment-lead m-t-15">{{ $hero['content'] }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="appointment-section appointment-soft" id="select-appointment">
        <div class="container">
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
                                <p>{{ $appointment['description'] }}</p>
                                <span class="appointment-show-less">Show less</span>
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
                        <p data-selected-description>{{ $appointmentPage['appointments'][0]['description'] }}</p>
                        <span class="appointment-show-less d-inline-block m-t-20">Show all</span>
                    </div>
                    <div class="appointment-close">&times;</div>
                </div>

                <div class="appointment-calendar-card" data-aos="fade-up" data-aos-delay="120">
                    <div>
                        <div class="appointment-month">
                            <i class="fa-regular fa-angle-left"></i>
                            <span>{{ $schedule['month'] }}</span>
                            <i class="fa-regular fa-angle-right"></i>
                        </div>
                        <div class="appointment-calendar-grid">
                            @foreach ($schedule['weekdays'] as $weekday)
                                <div class="appointment-weekday">{{ $weekday }}</div>
                            @endforeach
                            @foreach ($schedule['calendar'] as $week)
                                @foreach ($week as $date)
                                    <div>
                                        @if ($date === '')
                                            <span class="appointment-date"></span>
                                        @else
                                            <span class="appointment-date {{ in_array($date, $schedule['availableDates'], true) ? 'is-available' : '' }} {{ $date === '18' ? 'is-selected' : '' }}">{{ $date }}</span>
                                        @endif
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <h3>{{ $schedule['selectedDate'] }}</h3>
                        <div class="appointment-timezone">Time Zone: {{ $schedule['timezone'] }}</div>
                        <div class="appointment-time-grid">
                            @foreach ($schedule['times'] as $time)
                                <div class="appointment-time-btn">{{ $time }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="appointment-highlight-grid" data-aos="fade-up" data-aos-delay="160">
                    @foreach ($appointmentPage['highlights'] as $highlight)
                        <div class="appointment-highlight-card"><i class="fa-regular fa-check-circle"></i>{{ $highlight }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @include('partials.testi')
    @include('partials.blogs')
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const listPanel = document.getElementById('appointment-list-panel');
        const schedulePanel = document.getElementById('appointment-schedule-panel');
        const titleTarget = document.querySelector('[data-selected-title]');
        const metaTarget = document.querySelector('[data-selected-meta]');
        const descriptionTarget = document.querySelector('[data-selected-description]');

        document.querySelectorAll('[data-appointment-book]').forEach(function (button) {
            button.addEventListener('click', function () {
                if (titleTarget) titleTarget.textContent = button.dataset.title || '';
                if (metaTarget) metaTarget.textContent = button.dataset.meta || '';
                if (descriptionTarget) descriptionTarget.textContent = button.dataset.description || '';
                listPanel.classList.add('is-hidden');
                schedulePanel.classList.remove('is-hidden');
                document.getElementById('select-appointment').scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });

        document.querySelectorAll('[data-appointment-back]').forEach(function (button) {
            button.addEventListener('click', function () {
                schedulePanel.classList.add('is-hidden');
                listPanel.classList.remove('is-hidden');
                document.getElementById('select-appointment').scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });
    });
</script>
@endsection
