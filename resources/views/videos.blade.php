@extends('layouts.frontend')
@section('content')

<style type="text/css">
    .videos-page {
        --vt-muted: #64748b;
        --vt-gold: #d7a642;
        --vt-border: rgba(15, 23, 42, 0.1);
    }
    .videos-page .vt-hero {
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
    .videos-page .vt-hero h1 {
        color: #ffffff;
        font-size: clamp(2.35rem, 4.8vw, 4.2rem);
        line-height: 1.1;
        margin-bottom: 16px;
    }
    .videos-page .vt-hero p {
        color: rgba(255, 255, 255, 0.88);
        max-width: 760px;
        margin: 0 auto;
        line-height: 1.72;
    }
    .videos-page .vt-eyebrow {
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
    .videos-page .vt-eyebrow::before {
        content: "";
        width: 42px;
        height: 2px;
        background: var(--vt-gold);
    }
    .videos-page .vt-main {
        padding: clamp(64px, 7vw, 98px) 0;
        background: linear-gradient(180deg, #f5f7fb 0%, #ffffff 72%);
    }
    .videos-page .vt-intro {
        max-width: 760px;
        margin: 0 auto clamp(36px, 5vw, 48px);
        text-align: center;
        color: var(--vt-muted);
        line-height: 1.72;
    }
    .videos-page .vt-mosaic {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(0, 1.6fr) minmax(0, 1fr);
        gap: clamp(16px, 2vw, 22px);
        align-items: start;
    }
    .videos-page .vt-side,
    .videos-page .vt-center {
        display: flex;
        flex-direction: column;
        gap: clamp(16px, 2vw, 22px);
    }
    .videos-page .vt-center > .vt-thumb {
        width: calc(100% / 1.6);
        max-width: 100%;
        align-self: center;
    }
    .videos-page .vt-featured {
        background: #ffffff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 18px 44px rgba(15, 23, 42, 0.1);
        border: 1px solid var(--vt-border);
    }
    .videos-page .vt-featured__preview {
        display: block;
        width: 100%;
        padding: 0;
        border: 0;
        background: #0f172a;
        cursor: pointer;
        text-align: left;
    }
    .videos-page .vt-featured__preview .vt-thumb__image {
        aspect-ratio: 16 / 9;
    }
    .videos-page .vt-featured__preview .vt-thumb__play {
        font-size: 3.5rem;
    }
    .videos-page .vt-modal {
        position: fixed;
        inset: 0;
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: clamp(16px, 3vw, 32px);
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: opacity 0.25s ease, visibility 0.25s ease;
    }
    .videos-page .vt-modal.is-open {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
    }
    .videos-page .vt-modal__backdrop {
        position: absolute;
        inset: 0;
        background: rgba(7, 16, 50, 0.82);
        backdrop-filter: blur(4px);
    }
    .videos-page .vt-modal__dialog {
        position: relative;
        width: min(960px, 100%);
        background: #ffffff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 24px 64px rgba(0, 0, 0, 0.35);
        transform: translateY(12px) scale(0.98);
        transition: transform 0.25s ease;
    }
    .videos-page .vt-modal.is-open .vt-modal__dialog {
        transform: translateY(0) scale(1);
    }
    .videos-page .vt-modal__close {
        position: absolute;
        top: 12px;
        right: 12px;
        z-index: 2;
        width: 40px;
        height: 40px;
        border: 0;
        border-radius: 50%;
        background: rgba(15, 23, 42, 0.75);
        color: #ffffff;
        font-size: 1.5rem;
        line-height: 1;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.2s ease;
    }
    .videos-page .vt-modal__close:hover {
        background: var(--theme-color-3);
    }
    .videos-page .vt-modal__player {
        position: relative;
        padding-top: 56.25%;
        background: #0f172a;
    }
    .videos-page .vt-modal__player iframe {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
    .videos-page .vt-modal__body {
        padding: clamp(16px, 2.5vw, 22px);
    }
    .videos-page .vt-modal__body h3 {
        margin: 0 0 6px;
        font-size: clamp(1rem, 2vw, 1.25rem);
        line-height: 1.35;
        color: #071032;
    }
    .videos-page .vt-modal__body p {
        margin: 0;
        color: var(--vt-muted);
        font-size: 0.92rem;
    }
    .videos-page .vt-featured__body {
        padding: clamp(18px, 2.5vw, 24px);
    }
    .videos-page .vt-featured__body h2 {
        font-size: clamp(1.15rem, 2vw, 1.45rem);
        line-height: 1.35;
        margin: 0 0 8px;
        color: #071032;
    }
    .videos-page .vt-featured__body p {
        margin: 0;
        color: var(--vt-muted);
        font-size: 0.92rem;
    }
    .videos-page .vt-thumb {
        display: block;
        width: 100%;
        text-align: left;
        background: #ffffff;
        border: 2px solid transparent;
        border-radius: 14px;
        overflow: hidden;
        padding: 0;
        cursor: pointer;
        box-shadow: 0 10px 28px rgba(15, 23, 42, 0.08);
        transition: border-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
    }
    .videos-page .vt-thumb:hover,
    .videos-page .vt-thumb.is-active {
        border-color: var(--theme-color-3);
        transform: translateY(-2px);
        box-shadow: 0 14px 32px rgba(15, 23, 42, 0.12);
    }
    .videos-page .vt-thumb__image {
        position: relative;
        aspect-ratio: 16 / 9;
        overflow: hidden;
    }
    .videos-page .vt-thumb__image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    .videos-page .vt-thumb__play {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(7, 16, 50, 0.28);
        color: #ffffff;
        font-size: 2rem;
    }
    .videos-page .vt-thumb__title {
        display: block;
        padding: 12px 14px;
        font-size: 0.88rem;
        font-weight: 700;
        line-height: 1.45;
        color: #071032;
    }
    .videos-page .vt-more {
        margin-top: clamp(28px, 4vw, 40px);
    }
    .videos-page .vt-more h3 {
        text-align: center;
        margin-bottom: clamp(20px, 3vw, 28px);
        color: #071032;
    }
    .videos-page .vt-more-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: clamp(16px, 2vw, 22px);
    }
    .videos-page .vt-empty {
        text-align: center;
        padding: 48px 24px;
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid var(--vt-border);
        color: var(--vt-muted);
    }
    .videos-page .vt-cta {
        margin-top: clamp(40px, 5vw, 56px);
        text-align: center;
    }
    @media (max-width: 991px) {
        .videos-page .vt-mosaic {
            grid-template-columns: 1fr;
        }
        .videos-page .vt-center > .vt-thumb {
            width: calc((100% - clamp(16px, 2vw, 22px)) / 2);
        }
        .videos-page .vt-side {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
        .videos-page .vt-more-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }
    @media (max-width: 575px) {
        .videos-page .vt-side,
        .videos-page .vt-more-grid {
            grid-template-columns: 1fr;
        }
        .videos-page .vt-center > .vt-thumb {
            width: 100%;
        }
    }
</style>

<div class="videos-page">
    <section class="vt-hero">
        <div class="container">
            <div class="vt-eyebrow">Visawizer on YouTube</div>
            <h1>Videos</h1>
            <p>Watch migration tips, visa updates, and expert guidance from the Visawizer YouTube channel.</p>
        </div>
    </section>

    <section class="vt-main">
        <div class="container">
            <p class="vt-intro" data-aos="fade-up">
                Browse the latest videos from <a href="{{ $channelUrl }}" target="_blank" rel="noopener noreferrer">@visawizer</a>. Click any thumbnail to watch in a popup player.
            </p>

            @if ($featuredVideo)
                <div class="vt-mosaic" data-aos="fade-up">
                    <div class="vt-side">
                        @foreach ($leftVideos as $video)
                            @include('partials.youtube-video-thumb', ['video' => $video, 'active' => false])
                        @endforeach
                    </div>

                    <div class="vt-center">
                        <div class="vt-featured">
                            <button
                                type="button"
                                class="vt-featured__preview"
                                data-video-id="{{ $featuredVideo['id'] }}"
                                data-video-title="{{ e($featuredVideo['title']) }}"
                                data-video-date="{{ \Carbon\Carbon::parse($featuredVideo['published_at'])->format('d M Y') }}"
                                aria-label="Play {{ $featuredVideo['title'] }}"
                            >
                                <span class="vt-thumb__image">
                                    <img
                                        src="{{ $featuredVideo['thumbnail'] }}"
                                        alt="{{ $featuredVideo['title'] }}"
                                        width="640"
                                        height="360"
                                        loading="lazy"
                                        decoding="async"
                                    >
                                    <span class="vt-thumb__play" aria-hidden="true"><i class="fa-solid fa-circle-play"></i></span>
                                </span>
                            </button>
                        <div class="vt-featured__body">
                            <h2 id="vtFeaturedTitle">{{ $featuredVideo['title'] }}</h2>
                            <p id="vtFeaturedDate">{{ \Carbon\Carbon::parse($featuredVideo['published_at'])->format('d M Y') }}</p>
                        </div>
                        </div>
                        @if ($centerBelowVideo)
                            @include('partials.youtube-video-thumb', ['video' => $centerBelowVideo, 'active' => false])
                        @endif
                    </div>

                    <div class="vt-side">
                        @foreach ($rightVideos as $video)
                            @include('partials.youtube-video-thumb', ['video' => $video, 'active' => false])
                        @endforeach
                    </div>
                </div>

                @if (!empty($moreVideos))
                    <div class="vt-more" data-aos="fade-up">
                        <h3>More videos</h3>
                        <div class="vt-more-grid">
                            @foreach ($moreVideos as $video)
                                @include('partials.youtube-video-thumb', ['video' => $video, 'active' => false])
                            @endforeach
                        </div>
                    </div>
                @endif
            @else
                <div class="vt-empty" data-aos="fade-up">
                    <p>Videos could not be loaded right now. Please visit our <a href="{{ $channelUrl }}" target="_blank" rel="noopener noreferrer">YouTube channel</a> directly.</p>
                </div>
            @endif

            <div class="vt-cta" data-aos="fade-up">
                <a class="e-primary-btn has-icon me-3" href="{{ $channelUrl }}" target="_blank" rel="noopener noreferrer">
                    Visit YouTube Channel
                    <span class="icon-wrap"><span class="icon"><i class="fa-brands fa-youtube"></i><i class="fa-brands fa-youtube"></i></span></span>
                </a>
                <a class="e-primary-btn has-icon" href="{{ url('book-appointment') }}">
                    Book appointment
                    <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
                </a>
            </div>
        </div>
    </section>

    @if ($featuredVideo)
        <div id="vtVideoModal" class="vt-modal" role="dialog" aria-modal="true" aria-labelledby="vtModalTitle" hidden>
            <div class="vt-modal__backdrop" data-vt-close></div>
            <div class="vt-modal__dialog">
                <button type="button" class="vt-modal__close" data-vt-close aria-label="Close video">&times;</button>
                <div class="vt-modal__player">
                    <iframe
                        id="vtModalPlayer"
                        title="Visawizer video player"
                        src=""
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                    ></iframe>
                </div>
                <div class="vt-modal__body">
                    <h3 id="vtModalTitle"></h3>
                    <p id="vtModalDate"></p>
                </div>
            </div>
        </div>
    @endif
</div>

@if ($featuredVideo)
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('vtVideoModal');
    const player = document.getElementById('vtModalPlayer');
    const modalTitle = document.getElementById('vtModalTitle');
    const modalDate = document.getElementById('vtModalDate');
    const featuredTitle = document.getElementById('vtFeaturedTitle');
    const featuredDate = document.getElementById('vtFeaturedDate');
    const triggers = document.querySelectorAll('.vt-thumb, .vt-featured__preview');

    if (!modal || !player) {
        return;
    }

    function openModal(trigger) {
        const videoId = trigger.dataset.videoId;
        const videoTitle = trigger.dataset.videoTitle || '';
        const videoDate = trigger.dataset.videoDate || '';

        if (!videoId) {
            return;
        }

        player.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0';
        modalTitle.textContent = videoTitle;
        modalDate.textContent = videoDate;

        if (featuredTitle) {
            featuredTitle.textContent = videoTitle;
        }
        if (featuredDate && videoDate) {
            featuredDate.textContent = videoDate;
        }

        triggers.forEach(function (item) {
            item.classList.remove('is-active');
        });
        trigger.classList.add('is-active');

        modal.hidden = false;
        modal.classList.add('is-open');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        player.src = '';
        modal.classList.remove('is-open');
        modal.hidden = true;
        document.body.style.overflow = '';
    }

    triggers.forEach(function (trigger) {
        trigger.addEventListener('click', function () {
            openModal(trigger);
        });
    });

    modal.querySelectorAll('[data-vt-close]').forEach(function (el) {
        el.addEventListener('click', closeModal);
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && modal.classList.contains('is-open')) {
            closeModal();
        }
    });

    const featuredPreview = document.querySelector('.vt-featured__preview');
    if (featuredPreview) {
        featuredPreview.classList.add('is-active');
    }
});
</script>
@endif
@endsection

