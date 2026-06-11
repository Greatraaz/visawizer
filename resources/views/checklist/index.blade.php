@php
    $title = 'Document Checklist Tool — Visawizer';
    $description = 'Answer a few questions to get a personalised list of documents you need for your Australian visa application.';
@endphp
@extends('layouts.frontend')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/checklist.css') }}">
@endpush

@section('content')
<div class="checklist-page">
    <section class="cl-hero">
        <div class="container">
            <div class="cl-eyebrow justify-content-center">Resources &amp; Tools</div>
            <h1>Document Checklist Tool</h1>
            <p>Answer a few questions to get a personalised list of documents you need for your Australian visa application.</p>
        </div>
    </section>

    <section class="cl-main">
        <div class="container">
            <div class="cl-section-head" data-aos="fade-up" data-aos-duration="800">
                <div class="cl-section-label">Visa Documents</div>
                <h2>Select Your Visa Type</h2>
                <div class="b-line m-auto"></div>
            </div>

            <div class="cl-info-box" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <span class="cl-info-icon" aria-hidden="true"><i class="fa-solid fa-circle-info"></i></span>
                <div>
                    <strong>How it works</strong>
                    <p>Select your visa type, answer questions about your situation, and we'll generate a tailored document checklist you can tick off as you gather each item.</p>
                </div>
            </div>

            <div class="cl-visa-grid" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                @forelse ($visas as $visa)
                    <a href="{{ route('checklist.wizard', $visa->slug) }}" class="cl-visa-card">
                        <div class="cl-visa-card-inner">
                            <div class="cl-visa-card-top">
                                <span class="cl-visa-code">{{ $visa->code }}</span>
                                <div class="cl-visa-card-copy">
                                    <h3>{{ $visa->name }}</h3>
                                    @if ($visa->description)
                                        <p>{{ $visa->description }}</p>
                                    @endif
                                </div>
                            </div>
                            <span class="cl-card-link">
                                Start checklist <i class="fa-solid fa-arrow-right-long"></i>
                            </span>
                        </div>
                    </a>
                @empty
                    <div class="cl-empty">
                        No visa checklists are available yet. Please check back soon or
                        <a href="{{ route('contact-us') }}">contact us</a> for guidance.
                    </div>
                @endforelse
            </div>

            <p class="cl-footnote">
                More visa types coming soon. Check the
                <a href="https://immi.homeaffairs.gov.au" target="_blank" rel="noopener">IMMI website</a>
                for full official guidance.
            </p>
        </div>
    </section>
</div>
@endsection
