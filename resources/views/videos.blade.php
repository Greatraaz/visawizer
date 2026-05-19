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
    .videos-page .vt-featured__player {
        position: relative;
        padding-top: 56.25%;
        background: #0f172a;
    }
    .videos-page .vt-featured__player iframe {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        border: 0;
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
                Browse the latest videos from <a href="{{ $channelUrl }}" target="_blank" rel="noopener noreferrer">@visawizer</a>. Select any thumbnail to play it in the main player.
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
                        <div class="vt-featured__player">
                            <iframe
                                id="vtFeaturedPlayer"
                                title="{{ $featuredVideo['title'] }}"
                                src="{{ $featuredVideo['embed_url'] }}?rel=0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen
                                loading="lazy"
                            ></iframe>
                        </div>
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
</div>

@if ($featuredVideo)
<script>
document.addEventListener('DOMContentLoaded', function () {
    const player = document.getElementById('vtFeaturedPlayer');
    const titleEl = document.getElementById('vtFeaturedTitle');
    const dateEl = document.getElementById('vtFeaturedDate');
    const thumbs = document.querySelectorAll('.vt-thumb');

    thumbs.forEach(function (thumb) {
        thumb.addEventListener('click', function () {
            const videoId = thumb.dataset.videoId;
            const videoTitle = thumb.dataset.videoTitle;
            const videoDate = thumb.dataset.videoDate;

            if (!videoId || !player) {
                return;
            }

            player.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0';
            if (titleEl) {
                titleEl.textContent = videoTitle;
            }
            if (dateEl && videoDate) {
                dateEl.textContent = videoDate;
            }

            thumbs.forEach(function (item) {
                item.classList.remove('is-active');
            });
            thumb.classList.add('is-active');
        });
    });

    if (thumbs.length) {
        thumbs[0].classList.add('is-active');
    }
});
</script>
@endif
@endsection

