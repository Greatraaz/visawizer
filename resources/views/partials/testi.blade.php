@php
    $testiIntroP1 = $testiIntroP1 ?? 'Hear from clients who trusted Visawizer with study, family, sponsored, and migration journeys.';
    $testiIntroP2 = $testiIntroP2 ?? 'Trusted by clients across student, partner, sponsored, and visitor pathways.';

    $testimonials = [
        [
            'name' => 'Nishchay Sharma',
            'avatar' => 'photo',
            'image' => 'assets/images/au2.webp',
            'testimonial' => 'Had a great experience with them. Always available on one call, provided relevant and accurate information.',
        ],
        [
            'name' => 'Kamaljeet Kaur',
            'avatar' => 'initial',
            'initial' => 'K',
            'initial_bg' => 'var(--theme-color-3)',
            'testimonial' => 'We are extremely pleased with the professional services provided by Visawizer. They guided us throughout the visa process with clarity and efficiency.',
        ],
        [
            'name' => 'Monish Kumar',
            'avatar' => 'photo',
            'image' => 'assets/images/testimonial4.webp',
            'testimonial' => "I had an amazing experience working with Visawizer for my wife's visa application. Although having previous history of rejections Mr. Ankur assured us the partner will be a success since it was applied with a lot of care and taking small details into consideration. I am really thankful to Ankur for the endless support for the success and my lovely wife will be joining me soon from Fiji. A 100% recommended for anyone trying for visa no matter how complicated it is Visawizer will always find a way towards success. Thank you.",
        ],
        [
            'name' => 'Gurpreet Baath',
            'avatar' => 'initial',
            'initial' => 'G',
            'initial_bg' => '#85BF18',
            'testimonial' => 'I had an excellent experience with Visawizer Education in Melbourne. They guided me through the entire visa process with professionalism and patience. Everything was explained clearly, and I felt supported at every step. Highly recommend their services!',
        ],
    ];
@endphp

<style>
    .testi-google-section {
        padding: clamp(48px, 5vw, 64px) 0 clamp(40px, 4vw, 52px);
        background: #ffffff;
        overflow-x: clip;
        max-width: 100%;
    }
    .testi-google-section .container {
        max-width: 100%;
        overflow-x: clip;
    }
    .testi-google-section.testimonial {
        margin-bottom: 0 !important;
    }
    .testi-google-section .testi-google-head {
        text-align: center;
        max-width: 720px;
        margin: 0 auto clamp(22px, 3vw, 28px);
    }
    .testi-google-section .testi-google-eyebrow {
        display: inline-block;
        font-size: 0.78rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: #64748b;
        text-decoration: underline;
        text-underline-offset: 4px;
        margin-bottom: 14px;
    }
    .testi-google-section .testi-google-title {
        font-size: clamp(1.75rem, 3.5vw, 2.75rem);
        line-height: 1.2;
        color: #071032;
        margin: 0 0 18px;
        font-weight: 400;
    }
    .testi-google-section .testi-google-title span {
        color: inherit;
    }
    .testi-google-section .testi-google-intro {
        max-width: 640px;
        margin: 0 auto 22px;
        color: #64748b;
        font-size: 0.98rem;
        line-height: 1.7;
    }
    .testi-google-section .testi-google-intro p {
        margin: 0 0 12px;
    }
    .testi-google-section .testi-google-intro p:last-child {
        margin-bottom: 0;
    }
    .testi-google-section .testi-google-cta {
        margin-top: 8px;
    }
    .testi-google-section .testi-google-cta .e-primary-btn {
        display: inline-flex;
    }
    .testi-google-section .testi-google-slider-wrap {
        position: relative;
        padding: 0 52px;
        overflow: hidden;
        max-width: 100%;
        width: 100%;
        box-sizing: border-box;
    }
    .testi-google-section .testi-google-slider.swiper {
        overflow: hidden;
        width: 100%;
        max-width: 100%;
    }
    .testi-google-section .testi-google-slider .swiper-wrapper {
        box-sizing: border-box;
    }
    .testi-google-section .testi-google-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 5;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        border: 1px solid #d1d5db;
        background: #ffffff;
        color: #64748b;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: border-color 0.2s ease, color 0.2s ease, box-shadow 0.2s ease;
        padding: 0;
    }
    .testi-google-section .testi-google-nav:hover {
        border-color: var(--theme-color-3, var(--theme-color-3));
        color: var(--theme-color-3, var(--theme-color-3));
        box-shadow: 0 4px 14px rgba(7, 16, 50, 0.1);
    }
    .testi-google-section .testi-google-nav--prev { left: 0; }
    .testi-google-section .testi-google-nav--next { right: 0; }
    .testi-google-section .testi-google-nav.swiper-button-disabled {
        opacity: 0.35;
    }
    .testi-google-section .testi-google-slider .swiper-wrapper {
        align-items: flex-start;
    }
    .testi-google-section .swiper-slide {
        height: auto;
        align-self: flex-start;
        min-width: 0;
        box-sizing: border-box;
    }
    .testi-google-section .testi-google-slider:not(.swiper-initialized) {
        overflow: hidden;
    }
    .testi-google-section .testi-google-slider:not(.swiper-initialized) .swiper-slide {
        flex: 0 0 88%;
        max-width: 88%;
    }
    @media (min-width: 576px) {
        .testi-google-section .testi-google-slider:not(.swiper-initialized) .swiper-slide {
            flex: 0 0 calc(50% - 10px);
            max-width: calc(50% - 10px);
        }
    }
    @media (min-width: 992px) {
        .testi-google-section .testi-google-slider:not(.swiper-initialized) .swiper-slide {
            flex: 0 0 calc(33.333% - 16px);
            max-width: calc(33.333% - 16px);
        }
    }
    @media (min-width: 1200px) {
        .testi-google-section .testi-google-slider:not(.swiper-initialized) .swiper-slide {
            flex: 0 0 calc(25% - 21px);
            max-width: calc(25% - 21px);
        }
    }
    .testi-google-card {
        background: #e1e1e1;
        border-radius: 8px;
        box-shadow: 0 8px 32px rgba(15, 23, 42, 0.08);
        border: 1px solid rgba(15, 23, 42, 0.06);
        padding: 44px 15px 15px;
        margin-top: 40px;
        text-align: center;
        width: 100%;
        max-width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        align-self: flex-start;
        transition: box-shadow 0.25s ease;
        overflow: visible;
        min-height: 281px;
        box-sizing: border-box;
    }
    .testi-google-card.is-expanded {
        box-shadow: 0 14px 44px rgba(15, 23, 42, 0.14);
        z-index: 3;
        position: relative;
    }
    .testi-google-card__avatar-wrap {
        position: relative;
        margin-top: -76px;
        margin-bottom: 14px;
        flex-shrink: 0;
        z-index: 2;
        width: 88px;
        height: 88px;
    }
    .testi-google-card__avatar-ring {
        width: 88px;
        height: 88px;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid #ffffff;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
        background: #e8edf4;
        flex-shrink: 0;
    }
    .testi-google-card__avatar-ring img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
        object-position: center center;
    }
    .testi-google-card__avatar-ring--brand {
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(145deg, #f8f4f7 0%, #ede4eb 100%);
    }
    .testi-google-card__avatar-ring--brand img {
        width: 68%;
        height: 68%;
        object-fit: contain;
        object-position: center center;
    }
    .testi-google-card__avatar-ring--initial {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .testi-google-card__avatar--initials {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: 800;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 0.02em;
        line-height: 1;
    }
    .testi-google-card__google-badge {
        position: absolute;
        right: 0;
        bottom: 2px;
        width: 26px;
        height: 26px;
        border-radius: 50%;
        background: #ffffff;
        border: 2px solid #ffffff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        color: #4285F4;
    }
    .testi-google-card__name {
        font-size: 1.05rem;
        font-weight: 800;
        color: #071032;
        margin: 0 0 4px;
        line-height: 1.3;
    }
    .testi-google-card__date {
        font-size: 0.82rem;
        color: #94a3b8;
        margin: 0 0 12px;
    }
    .testi-google-card__rating-row {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        margin-bottom: 16px;
    }
    .testi-google-card__stars {
        display: inline-flex;
        gap: 2px;
        color: #fbbc04;
        font-size: 0.95rem;
    }
    .testi-google-card__verified {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #1a73e8;
        color: #ffffff;
        font-size: 0.55rem;
    }
    .testi-google-card__text-wrap {
        width: 100%;
        margin-bottom: 4px;
    }
    .testi-google-card__text {
        font-size: 0.92rem;
        line-height: 1.65;
        color: #334155;
        margin: 0;
        text-align: center;
        word-break: break-word;
    }
    .testi-google-card__text.is-collapsed {
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .testi-google-card__read-more {
        border: 0;
        background: none;
        padding: 8px 0 0;
        margin-top: 4px;
        font-size: 0.88rem;
        font-weight: 600;
        color: #94a3b8;
        cursor: pointer;
        text-decoration: none;
        flex-shrink: 0;
    }
    .testi-google-card__read-more:hover {
        color: #64748b;
        text-decoration: underline;
    }
    .testi-google-card__read-more.is-hidden {
        display: none;
    }
    .testi-google-section .testi-google-slider {
        margin-bottom: 0;
        padding-bottom: 0;
    }
    @media (max-width: 767px) {
        .testi-google-section .testi-google-slider-wrap {
            padding: 0 40px;
        }
        .testi-google-card {
            margin-top: 36px;
        }
        .testi-google-card__avatar-wrap {
            margin-top: -68px;
            width: 76px;
            height: 76px;
        }
        .testi-google-card__avatar-ring {
            width: 76px;
            height: 76px;
        }
        .testi-google-card__avatar-ring:not(.testi-google-card__avatar-ring--brand) img {
            width: 76px;
            height: 76px;
        }
        .testi-google-card__avatar--initials {
            font-size: 1.65rem;
        }
        .testi-google-section .testi-google-nav {
            width: 36px;
            height: 36px;
        }
    }
</style>

<section class="testi-google-section testimonial">
    <div class="container">
        <div class="testi-google-head" data-aos="fade-up">
            <div class="common-subtitle justify-content-center">
                <span class="bg-p">Testimonials</span>
            </div>
            <h2 class="testi-google-title">What Clients Say About Us and <span>Our Services</span></h2>
            <div class="testi-google-intro">
                <p>{{ $testiIntroP1 }}</p>
                <p>{{ $testiIntroP2 }}</p>
            </div>
        </div>

        <div class="testi-google-slider-wrap" data-aos="fade-up" data-aos-delay="120">
            <button type="button" class="testi-google-nav testi-google-nav--prev testi-google-button-prev" aria-label="Previous testimonial">
                <i class="fa-regular fa-angle-left"></i>
            </button>
            <button type="button" class="testi-google-nav testi-google-nav--next testi-google-button-next" aria-label="Next testimonial">
                <i class="fa-regular fa-angle-right"></i>
            </button>

            <div class="testi-google-slider swiper">
                <div class="swiper-wrapper">
                    @foreach ($testimonials as $item)
                        @php
                            $name = $item['name'] ?? 'Client';
                            $avatarType = $item['avatar'] ?? 'photo';
                        @endphp
                        <div class="swiper-slide">
                            <article class="testi-google-card">
                                <div class="testi-google-card__avatar-wrap">
                                    @if ($avatarType === 'initial')
                                        <div
                                            class="testi-google-card__avatar-ring testi-google-card__avatar-ring--initial"
                                            style="background-color: {{ $item['initial_bg'] ?? 'var(--theme-color-3)' }};"
                                        >
                                            <span class="testi-google-card__avatar--initials" aria-hidden="true">{{ $item['initial'] ?? mb_substr($name, 0, 1) }}</span>
                                        </div>
                                    @elseif ($avatarType === 'brand')
                                        <div class="testi-google-card__avatar-ring testi-google-card__avatar-ring--brand">
                                            <img
                                                src="{{ asset($item['image'] ?? 'assets/images/visawizer_logo.svg') }}"
                                                alt="Visawizer"
                                                width="88"
                                                height="88"
                                                loading="lazy"
                                                decoding="async"
                                            >
                                        </div>
                                    @else
                                        <div class="testi-google-card__avatar-ring">
                                            <img
                                                src="{{ asset($item['image']) }}"
                                                alt="{{ $name }}"
                                                width="88"
                                                height="88"
                                                loading="lazy"
                                                decoding="async"
                                            >
                                        </div>
                                    @endif
                                    <span class="testi-google-card__google-badge" title="Google review" aria-hidden="true">
                                        <i class="fa-brands fa-google"></i>
                                    </span>
                                </div>
                                <h3 class="testi-google-card__name">{{ $name }}</h3>
                                <div class="testi-google-card__rating-row">
                                    <span class="testi-google-card__stars" aria-label="5 out of 5 stars">
                                        @for ($s = 0; $s < 5; $s++)
                                            <i class="fa-solid fa-star"></i>
                                        @endfor
                                    </span>
                                    <span class="testi-google-card__verified" title="Verified review" aria-hidden="true">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                </div>
                                <div class="testi-google-card__text-wrap">
                                    <p class="testi-google-card__text is-collapsed" data-testi-text>{{ $item['testimonial'] ?? '' }}</p>
                                </div>
                                <button type="button" class="testi-google-card__read-more is-hidden" data-testi-read-more aria-expanded="false">Read more</button>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="testi-google-cta text-center mt-5">
            <a class="e-primary-btn has-icon" href="{{ url('testimonials') }}">Read More Success Stories
                <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span></a>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var section = document.querySelector('.testi-google-section');
        if (!section) return;

        var swiperEl = section.querySelector('.testi-google-slider');

        function getSwiper() {
            return swiperEl && swiperEl.swiper ? swiperEl.swiper : null;
        }

        function refreshTestiSwiper() {
            var swiper = getSwiper();
            if (!swiper) return;
            requestAnimationFrame(function () {
                swiper.update();
            });
        }

        /** True when full text is taller than the 4-line clamped view. */
        function textNeedsReadMore(textEl) {
            textEl.classList.remove('is-collapsed');
            var fullHeight = textEl.scrollHeight;
            textEl.classList.add('is-collapsed');
            return fullHeight > textEl.clientHeight + 2;
        }

        function setCardExpanded(card, expanded) {
            var text = card.querySelector('[data-testi-text]');
            var btn = card.querySelector('[data-testi-read-more]');
            if (!text || !btn) return;

            if (expanded) {
                text.classList.remove('is-collapsed');
                card.classList.add('is-expanded');
                btn.textContent = 'Hide';
                btn.setAttribute('aria-expanded', 'true');
                btn.classList.remove('is-hidden');
            } else {
                text.classList.add('is-collapsed');
                card.classList.remove('is-expanded');
                btn.textContent = 'Read more';
                btn.setAttribute('aria-expanded', 'false');
                if (textNeedsReadMore(text)) {
                    btn.classList.remove('is-hidden');
                } else {
                    btn.classList.add('is-hidden');
                }
            }
        }

        function measureTestiCards() {
            section.querySelectorAll('.testi-google-card').forEach(function (card) {
                var text = card.querySelector('[data-testi-text]');
                var btn = card.querySelector('[data-testi-read-more]');
                if (!text || !btn) return;

                if (card.classList.contains('is-expanded')) {
                    btn.classList.remove('is-hidden');
                    return;
                }

                text.classList.add('is-collapsed');
                if (textNeedsReadMore(text)) {
                    btn.classList.remove('is-hidden');
                } else {
                    btn.classList.add('is-hidden');
                }
            });
            refreshTestiSwiper();
        }

        section.addEventListener('click', function (event) {
            var btn = event.target.closest('[data-testi-read-more]');
            if (!btn || btn.classList.contains('is-hidden')) return;

            event.preventDefault();
            event.stopPropagation();

            var card = btn.closest('.testi-google-card');
            if (!card) return;

            var text = card.querySelector('[data-testi-text]');
            if (!text) return;

            if (text.classList.contains('is-collapsed')) {
                section.querySelectorAll('.testi-google-card.is-expanded').forEach(function (other) {
                    if (other !== card) {
                        setCardExpanded(other, false);
                    }
                });
                setCardExpanded(card, true);
            } else {
                setCardExpanded(card, false);
            }

            refreshTestiSwiper();
        });

        measureTestiCards();

        if (document.fonts && document.fonts.ready) {
            document.fonts.ready.then(measureTestiCards);
        }

        var resizeTimer;
        window.addEventListener('resize', function () {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(measureTestiCards, 200);
        });

        function initTestiSwiperIfNeeded() {
            if (!swiperEl || swiperEl.swiper || typeof Swiper === 'undefined') {
                return !!swiperEl && !!swiperEl.swiper;
            }
            var wrap = swiperEl.closest('.testi-google-slider-wrap');
            var slideCount = swiperEl.querySelectorAll('.swiper-slide').length;
            if (!slideCount) {
                return false;
            }
            new Swiper(swiperEl, {
                loop: slideCount > 4,
                spaceBetween: 24,
                slidesPerView: 1.15,
                grabCursor: true,
                watchSlidesProgress: true,
                autoplay: slideCount > 1 ? {
                    delay: 4500,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                } : false,
                navigation: {
                    nextEl: wrap ? wrap.querySelector('.testi-google-button-next') : null,
                    prevEl: wrap ? wrap.querySelector('.testi-google-button-prev') : null,
                },
                breakpoints: {
                    576: { slidesPerView: Math.min(2, slideCount), spaceBetween: 20 },
                    992: { slidesPerView: Math.min(3, slideCount), spaceBetween: 24 },
                    1200: { slidesPerView: Math.min(4, slideCount), spaceBetween: 28 },
                },
            });
            return true;
        }

        if (swiperEl) {
            if (!initTestiSwiperIfNeeded()) {
                var waitSwiper = setInterval(function () {
                    if (initTestiSwiperIfNeeded()) {
                        clearInterval(waitSwiper);
                        measureTestiCards();
                    }
                }, 100);
                setTimeout(function () { clearInterval(waitSwiper); }, 5000);
            } else {
                measureTestiCards();
            }
        }
    });
</script>
