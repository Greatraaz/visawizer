@php
    $ctaBg = $ctaBg ?? asset('img/cta.png');
    $ctaEyebrow = $ctaEyebrow ?? 'Plan before you apply';
    $ctaHeading = $ctaHeading ?? 'Not sure which work visa pathway fits your profile?';
    $ctaLead = $ctaLead ?? 'Speak to Visawizer and get a clearer view of your skilled, sponsored, regional, training, or innovation visa options.';
    $ctaPrimaryLabel = $ctaPrimaryLabel ?? 'Book Work Visa Consultation';
    $ctaPrimaryUrl = $ctaPrimaryUrl ?? url('book-appointment');
    $ctaSecondaryLabel = $ctaSecondaryLabel ?? 'Contact Visawizer';
    $ctaSecondaryUrl = $ctaSecondaryUrl ?? url('contact-us');
@endphp

@once
<style type="text/css">
    .common-cta-banner.study-s8-banner {
        padding: 70px 0;
    }
    @media (max-width: 767px) {
        .common-cta-banner.study-s8-banner {
            padding: 50px 0;
        }
    }
    .common-cta-banner .donate-to-us-layout {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .common-cta-banner .become-volunteer-card,
    .common-cta-banner .donate-us-card {
        background: #0000006e;
        backdrop-filter: blur(0);
        text-align: center;
        max-width: 800px;
        margin: auto;
    }
    .common-cta-banner .become-volunteer-card .study-s8-lead {
        color: rgba(255, 255, 255, 0.92);
        font-size: 0.97rem;
        line-height: 1.7;
        max-width: 560px;
        margin-left: auto;
        margin-right: auto;
    }
    .common-cta-banner .become-volunteer-card .card-icon {
        margin-bottom: 1rem;
    }
    .common-cta-banner .become-volunteer-card .common-subtitle span {
        color: #fff !important;
        letter-spacing: 0.14em;
    }
    .common-cta-banner .become-volunteer-card h2 {
        font-size: clamp(1.45rem, 2.8vw, 2rem);
        line-height: 1.25;
    }
    .common-cta-banner .study-final-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        justify-content: center;
    }
    .common-cta-banner .study-btn-ghost-dark {
    padding: 12px 26px;
    border: 2px solid #1f2937;
    font-weight: 600;
    border-radius: 6px;
    transition: background 0.2s, color 0.2s;
    }
    .common-cta-banner .study-btn-ghost-dark:hover {
        background: #1f2937;
        color: #fff;
    }
    .common-cta-banner .study-btn-ghost-dark.is-on-dark {
        border-color: rgba(255, 255, 255, 0.85);
        color: #fff;
    }
    .common-cta-banner .study-btn-ghost-dark.is-on-dark:hover {
        background: #fff;
        color: #1a1a1a;
    }
</style>
@endonce


<section class="donate-to-us-section study-s8-banner common-cta-banner" style="background-image: url('{{ $ctaBg }}');">
    <div class="container">
        <div class="donate-to-us-layout">
            <div class="become-volunteer-card mb-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="card-icon">
                    <i class="fa-light fa-calendar-check"></i>
                </div>
                <div class="common-subtitle text-uppercase justify-content-center m-b-10"><span>{{ $ctaEyebrow }}</span></div>
                <h2>{{ $ctaHeading }}</h2>
                <div class="w-line m-auto"></div>
                <p class="study-s8-lead pt-3">{{ $ctaLead }}</p>
                <div class="study-final-actions">
                    <a class="e-primary-btn has-icon" href="{{ $ctaPrimaryUrl }}">
                        {{ $ctaPrimaryLabel }}
                        <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
                    </a>
                    <a class="study-btn-ghost-dark is-on-dark" href="{{ $ctaSecondaryUrl }}">{{ $ctaSecondaryLabel }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
