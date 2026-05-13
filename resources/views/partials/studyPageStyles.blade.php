<style type="text/css">
    .study-s8-banner .become-volunteer-card,
    .study-s8-banner .donate-us-card {
        background: #0000006e;
        backdrop-filter: blur(0);
    }
    .study-copy-sub {
        font-size: 1.09rem;
        line-height: 1.68;
        font-weight: 500;
    }
    .study-copy-body {
        font-size: 0.96rem;
        line-height: 1.75;
        font-weight: 400;
    }
    .study-copy-body-sm {
        font-size: 0.935rem;
        line-height: 1.68;
        font-weight: 400;
    }
    .study-section-head .study-copy-sub {
        color: #475569;
    }
    .study-s1-hero .study-copy-sub {
        color: rgba(255, 255, 255, 0.96);
    }
    .study-s1-hero .study-copy-body {
        color: rgba(255, 255, 255, 0.88);
    }
    .study-s4-process .study-s4-intro {
        font-size: 1.06rem;
        line-height: 1.65;
        color: #cbd5e1;
        font-weight: 500;
    }
    .study-s6-donate .donate-left p {
        color: rgba(255, 255, 255, 0.95);
        font-size: 1.06rem;
        font-weight: 500;
        line-height: 1.55;
    }
    .study-s6-donate .rightArea .study-copy-body {
        color: rgba(255, 255, 255, 0.88);
        font-size: 0.94rem;
    }
    .study-s8-banner .become-volunteer-card .study-s8-lead {
        color: rgba(255, 255, 255, 0.92);
        font-size: 0.97rem;
        line-height: 1.7;
        max-width: 560px;
        margin-left: auto;
        margin-right: auto;
    }

    .study-s1-hero .study-hero-tag {
        display: inline-block;
        font-size: 0.85rem;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.9);
        margin-bottom: 1rem;
        border-left: 3px solid var(--theme-color-2, #e7b23b);
        padding-left: 12px;
    }
    .study-s1-hero {
        min-height: calc(100vh - 86px);
        min-height: calc(100svh - 86px);
        padding-top: 76px;
        padding-bottom: 18px;
        display: flex;
        align-items: center;
        overflow: hidden;
    }
    .study-s1-hero > .container {
        width: 100%;
    }
    .study-s1-hero .hero-content-5 {
        max-width: 1120px;
    }
    .study-s1-hero .hero-content-5 .title {
        margin-bottom: 8px;
    }
    .study-s1-hero .hero-content-5 .title h1 {
        max-width: 1080px;
        font-size: clamp(2.9rem, 6vw, 5.1rem);
        line-height: 0.94;
    }
    .study-s1-hero .hero-content-5 .text {
        max-width: 820px;
        margin-bottom: 14px;
    }
    .study-s1-hero .study-copy-sub {
        max-width: 760px;
        font-size: 1rem;
        line-height: 1.58;
        margin-left: auto;
        margin-right: auto;
    }
    .study-s1-hero .study-copy-body {
        max-width: 800px;
        font-size: 0.91rem;
        line-height: 1.62;
        margin-left: auto;
        margin-right: auto;
    }
    .study-hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        align-items: center;
        margin-top: 2px;
    }
    @media (max-width: 991px) {
        .study-s1-hero {
            min-height: calc(100svh - 78px);
            padding-top: 70px;
            padding-bottom: 16px;
        }
        .study-s1-hero .hero-content-5 {
            max-width: 94%;
        }
        .study-s1-hero .hero-content-5 .title h1 {
            font-size: clamp(2.6rem, 7vw, 4.2rem);
            line-height: 0.98;
        }
        .study-s1-hero .hero-content-5 .text,
        .study-s1-hero .study-copy-sub,
        .study-s1-hero .study-copy-body {
            max-width: 100%;
        }
    }
    @media (max-width: 767px) {
        .study-s1-hero {
            min-height: auto;
            padding-top: 88px;
            padding-bottom: 34px;
        }
        .study-s1-hero .hero-content-5 .title h1 {
            font-size: clamp(2.2rem, 9vw, 3.35rem);
            line-height: 1.02;
        }
        .study-s1-hero .hero-content-5 .text {
            margin-bottom: 12px;
        }
    }
    .study-btn-outline-light {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 26px;
        border: 2px solid rgba(255,255,255,0.85);
        color: #fff;
        font-weight: 600;
        border-radius: 6px;
        text-decoration: none;
        transition: background 0.25s, color 0.25s;
    }
    .study-btn-outline-light:hover {
        background: #fff;
        color: #1a1a1a;
    }
    .study-s1-hero .e-primary-btn,
    .study-s2-services .e-primary-btn,
    .study-s3-mission .e-primary-btn,
    .study-s4-process .e-primary-btn,
    .study-s5-visa .e-primary-btn,
    .study-s6-donate .e-primary-btn,
    .study-s7-split .e-primary-btn,
    .study-s8-banner .e-primary-btn {
        border-radius: 12px !important;
    }
    .study-s1-hero .e-primary-btn:before,
    .study-s2-services .e-primary-btn:before,
    .study-s3-mission .e-primary-btn:before,
    .study-s4-process .e-primary-btn:before,
    .study-s5-visa .e-primary-btn:before,
    .study-s6-donate .e-primary-btn:before,
    .study-s7-split .e-primary-btn:before,
    .study-s8-banner .e-primary-btn:before {
        border-radius: 12px !important;
    }
    .study-s1-hero .e-primary-btn .icon-wrap,
    .study-s2-services .e-primary-btn .icon-wrap,
    .study-s3-mission .e-primary-btn .icon-wrap,
    .study-s4-process .e-primary-btn .icon-wrap,
    .study-s5-visa .e-primary-btn .icon-wrap,
    .study-s6-donate .e-primary-btn .icon-wrap,
    .study-s7-split .e-primary-btn .icon-wrap,
    .study-s8-banner .e-primary-btn .icon-wrap {
        border-radius: 10px !important;
    }

    /* Section 2: visual pathway cards (matches screenshot style) */
    .study-s2-services .study-section-head-center {
        max-width: 760px;
        margin: 0 auto 3rem;
        text-align: center;
    }
    .study-s2-services .study-section-head-center .study-copy-sub {
        margin-left: auto;
        margin-right: auto;
    }
    .study-s2-visual-grid {
        margin-top: 2.75rem;
    }
    .study-s2-services {
        padding-bottom: 40px !important;
    }
    .study-path-visual-card {
        min-height: 340px;
        border-radius: 12px;
        overflow: hidden;
        background-size: cover;
        background-position: center;
        position: relative;
        display: flex;
        align-items: flex-end;
        box-shadow: 0 24px 55px rgba(15, 23, 42, 0.14);
    }
    .study-path-visual-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(4, 19, 15, 0.18) 0%, rgba(4, 19, 15, 0.76) 100%);
    }
    .study-path-visual-card .study-path-visual-inner {
        position: relative;
        z-index: 1;
        width: calc(100% - 34px);
        margin: 0 17px 17px;
        padding: 26px 24px 24px;
        border-radius: 12px;
        background: rgba(11, 17, 28, 0.46);
        border: 1px solid rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(2px);
        text-align: center;
    }
    .study-path-visual-card .study-path-icon {
        width: 58px;
        height: 58px;
        margin: 0 auto 16px;
        border-radius: 12px;
        background: rgba(40, 174, 119, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.24);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
    }
    .study-path-visual-card h3 {
        color: #fff;
        font-size: clamp(1.5rem, 2.2vw, 2rem);
        line-height: 1.15;
        margin-bottom: 14px;
        font-weight: 700;
    }
    .study-path-visual-card p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.96rem;
        line-height: 1.6;
        margin: 0;
    }

    /* Section 3: why-us-section-4 + checklist (reference: collaborations / mission-vision) */
    .study-s3-mission .why-us-content-2 .common-subtitle span {
        font-size: 0.78rem;
        letter-spacing: 0.12em;
        color: #64748b;
    }
    .study-s3-mission .why-us-content-2 .common-title h2 {
        font-size: clamp(1.55rem, 2.4vw, 2rem);
    }
    .study-s3-mission .why-us-content-2 .text .study-copy-sub {
        color: #334155;
    }
    .study-s3-mission .why-us-content-2 .text .study-copy-body {
        color: #4b5563;
    }
    .study-s3-mission {
        padding-top: 40px !important;
    }
    @media (max-width: 767px) {
        .study-s2-services {
            padding-bottom: 24px !important;
        }
        .study-s3-mission {
            padding-top: 24px !important;
        }
    }

    /* Section 4: dark band + 3/2 step cards (matches screenshot style) */
    .study-s4-process {
        background:
            radial-gradient(circle at 18% 18%, rgba(40, 174, 119, 0.14), transparent 22%),
            radial-gradient(circle at 84% 26%, rgba(231, 178, 59, 0.08), transparent 20%),
            linear-gradient(180deg, #0c1424 0%, #172235 55%, #1d2a40 100%);
        color: #e2e8f0;
        padding: 96px 0 100px;
        position: relative;
        overflow: hidden;
    }
    .study-s4-process::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.18), transparent);
    }
    .study-s4-process .container {
        position: relative;
        z-index: 1;
    }
    .study-s4-process .section-top-9 .common-title h2,
    .study-s4-process .section-top-9 .common-subtitle span { color: #f8fafc; }
    .study-s4-process .section-top-9 .common-subtitle span {
        font-size: 0.78rem;
        letter-spacing: 0.12em;
        color: #94a3b8 !important;
    }
    .study-s4-process .section-top-9 .common-title h2 {
        font-size: clamp(1.55rem, 2.5vw, 2.05rem);
    }
    .study-s4-process .study-s4-intro {
        color: #cbd5e1 !important;
        max-width: 660px !important;
    }
    .study-s4-cards-row {
        margin-top: 2.5rem;
        position: relative;
    }
    .study-journey-card {
        min-height: 238px;
        border-radius: 12px;
        background: linear-gradient(180deg, #fffdf7 0%, #f7f2e7 100%);
        padding: 28px 28px 26px;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.5);
        box-shadow: 0 22px 55px rgba(3, 8, 18, 0.24);
        transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
    }
    .study-journey-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, #1b7b61, #3dc59d);
    }
    .study-journey-card::after {
        content: "";
        position: absolute;
        width: 130px;
        height: 130px;
        right: -28px;
        bottom: -34px;
        border-radius: 12px;
        background: radial-gradient(circle, rgba(27, 123, 97, 0.08), transparent 68%);
        pointer-events: none;
    }
    .study-journey-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 28px 70px rgba(3, 8, 18, 0.3);
        border-color: rgba(61, 197, 157, 0.3);
    }
    .study-journey-card .journey-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        border: 1px solid rgba(27, 123, 97, 0.18);
        color: #1b7b61;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.98), rgba(227, 245, 239, 0.95));
        box-shadow: 0 10px 25px rgba(27, 123, 97, 0.12);
        margin-bottom: 20px;
    }
    .study-journey-card .journey-no {
        position: absolute;
        right: 24px;
        top: 18px;
        font-size: 4.5rem;
        line-height: 1;
        font-weight: 700;
        color: rgba(43, 78, 69, 0.1);
        letter-spacing: -0.04em;
    }
    .study-journey-card h4 {
        color: #176a57;
        font-size: 1.24rem;
        line-height: 1.25;
        margin-bottom: 12px;
        font-weight: 700;
        max-width: 220px;
    }
    .study-journey-card p {
        color: #6d7b84;
        font-size: 0.9rem;
        line-height: 1.58;
        margin: 0;
        max-width: 240px;
    }
    .study-s4-bottom-row {
        margin-top: 22px;
        justify-content: center;
    }
    .study-s4-cards-row > div:nth-child(2) .study-journey-card {
        transform: translateY(-10px);
    }
    .study-s4-cards-row > div:nth-child(2) .study-journey-card:hover {
        transform: translateY(-16px);
    }
    .study-s4-cards-row > div:nth-child(2) .study-journey-card::before,
    .study-s4-bottom-row > div:nth-child(2) .study-journey-card::before {
        background: linear-gradient(90deg, #e7b23b, #f0cf7a);
    }
    .study-s4-cards-row > div:nth-child(2) .study-journey-card .journey-icon,
    .study-s4-bottom-row > div:nth-child(2) .study-journey-card .journey-icon {
        color: #a86c0e;
        border-color: rgba(231, 178, 59, 0.22);
        background: linear-gradient(180deg, #fffdf7, #fff3d7);
        box-shadow: 0 10px 25px rgba(231, 178, 59, 0.18);
    }
    @media (max-width: 1199px) {
        .study-s4-cards-row > div:nth-child(2) .study-journey-card,
        .study-s4-cards-row > div:nth-child(2) .study-journey-card:hover {
            transform: none;
        }
    }

    .study-s5-visa {
        padding: 100px 0;
        background: linear-gradient(165deg, #f1f5f9 0%, #ffffff 38%, #eef7f3 100%);
        position: relative;
        overflow: hidden;
    }
    .study-s5-visa::before {
        content: '';
        position: absolute;
        width: 420px;
        height: 420px;
        right: -120px;
        top: -80px;
        border-radius: 12px;
        background: radial-gradient(circle, rgba(40, 174, 119, 0.12) 0%, transparent 70%);
        pointer-events: none;
    }
    .study-s5-visa::after {
        content: '';
        position: absolute;
        width: 280px;
        height: 280px;
        left: -80px;
        bottom: -60px;
        border-radius: 12px;
        background: radial-gradient(circle, rgba(231, 178, 59, 0.1) 0%, transparent 70%);
        pointer-events: none;
    }
    .study-s5-visa .container { position: relative; z-index: 1; }
    .study-s5-intro-card {
        background: #fff;
        border-radius: 12px;
        padding: 44px 40px 48px;
        box-shadow: 0 20px 50px rgba(15, 23, 42, 0.08), 0 1px 0 rgba(255,255,255,0.9) inset;
        border: 1px solid rgba(226, 232, 240, 0.9);
        position: relative;
        height: 100%;
    }
    .study-s5-intro-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 28px;
        bottom: 28px;
        width: 4px;
        border-radius: 6px;
        background: linear-gradient(180deg, var(--theme-color-3, #28ae77), #0d9488);
    }
    .study-s5-intro-card .common-subtitle {
        justify-content: flex-start;
        margin-bottom: 14px;
    }
    .study-s5-intro-card .common-subtitle span {
        font-size: 0.78rem;
        letter-spacing: 0.14em;
        color: #64748b;
        font-weight: 600;
    }
    .study-s5-intro-card .common-title h2 {
        font-size: clamp(1.65rem, 2.5vw, 2.1rem);
        line-height: 1.2;
        color: #0f172a;
    }
    .study-s5-visa .visa-lead {
        font-size: 0.96rem;
        line-height: 1.74;
        color: #475569;
        margin-bottom: 0;
        font-weight: 400;
    }
    .study-s5-visa .visa-lead.visa-highlight {
        font-size: 1.1rem;
        font-weight: 600;
        line-height: 1.68;
        color: #0f172a;
        padding: 18px 20px;
        background: linear-gradient(135deg, rgba(40, 174, 119, 0.06), rgba(13, 148, 136, 0.04));
        border-radius: 12px;
        border-left: 3px solid var(--theme-color-3, #28ae77);
    }

    .study-s5-support-card {
        background: #fff;
        border-radius: 12px;
        padding: 0;
        box-shadow: 0 24px 55px rgba(15, 23, 42, 0.1);
        border: 1px solid rgba(226, 232, 240, 0.95);
        overflow: hidden;
        height: 100%;
    }
    .study-s5-support-head {
        padding: 28px 32px 22px;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 55%, #134e4a 120%);
        position: relative;
    }
    .study-s5-support-head::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 32px;
        right: 32px;
        height: 2px;
        background: linear-gradient(90deg, var(--theme-color-2, #e7b23b), transparent);
        opacity: 0.55;
    }
    .study-s5-support-heading {
        font-size: 1.05rem;
        font-weight: 700;
        color: #fff;
        margin: 0;
        letter-spacing: 0.02em;
    }
    .study-support-list {
        list-style: none;
        padding: 8px 0 12px;
        margin: 0;
    }
    .study-support-list li {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 18px 28px;
        border-bottom: 1px solid #eef2f7;
        color: #334155;
        font-weight: 500;
        font-size: 0.93rem;
        line-height: 1.48;
        transition: background 0.2s ease, padding-left 0.2s ease;
    }
    .study-support-list li:last-child { border-bottom: none; }
    .study-support-list li:hover {
        background: linear-gradient(90deg, rgba(40, 174, 119, 0.06), transparent);
        padding-left: 32px;
    }
    .study-support-list .li-mark {
        flex-shrink: 0;
        width: 26px;
        height: 26px;
        border-radius: 8px;
        background: rgba(40, 174, 119, 0.12);
        color: var(--theme-color-3, #28ae77);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.72rem;
        margin-top: 2px;
    }
    .study-support-list li:nth-child(even) .li-mark {
        background: rgba(231, 178, 59, 0.15);
        color: #b45309;
    }

    /* Section 6: make-donate-section (reference: collaborations / training-workshops) */
    .study-s6-donate {
        padding: 0 0 90px;
    }
    .study-s6-donate .rightArea img {
        border-radius: 10px;
        border-right: 3px solid var(--theme-color-2, #e7b23b);
    }
    .study-s6-donate .donate-left h4 {
        font-size: clamp(1.35rem, 2vw, 1.65rem);
        line-height: 1.3;
    }

    .study-s7-split {
        padding: 0 0 100px;
    }
    .study-s7-split .study-grad-thumb img {
        border-radius: 12px;
        width: 100%;
        height: auto;
        box-shadow: 0 24px 55px rgba(15, 23, 42, 0.14);
        object-fit: cover;
    }
    .study-grad-card {
        background: #2c333f;
        color: #fff;
        border-radius: 12px;
        padding: 56px 48px 52px;
        text-align: left;
        max-width: 100%;
    }
    @media (max-width: 575px) {
        .study-grad-card { padding: 40px 24px 36px; }
    }
    .study-grad-card .study-grad-tag {
        display: block;
        font-size: 0.88rem;
        letter-spacing: 0.06em;
        text-transform: none;
        color: #e7c66b;
        margin-bottom: 14px;
        font-weight: 600;
    }
    .study-grad-card h2 {
        color: #fff;
        font-weight: 700;
        font-size: clamp(1.5rem, 3vw, 2.25rem);
        line-height: 1.25;
        margin-bottom: 22px;
    }
    .study-grad-card .study-grad-sub {
        color: rgba(255, 255, 255, 0.98);
        font-size: 1.12rem;
        line-height: 1.62;
        margin-bottom: 22px;
        font-weight: 600;
    }
    .study-grad-card .study-grad-body p {
        color: rgba(255, 255, 255, 0.88);
        font-size: 0.94rem;
        line-height: 1.72;
        margin-bottom: 1.1rem;
        font-weight: 400;
    }
    .study-grad-card .study-grad-body p:last-of-type {
        margin-bottom: 0;
    }
    .study-grad-card .study-grad-cta {
        margin-top: 32px;
    }

    /* Section 8: donate-to-us banner card (reference: collaborations CTA / recommended-books) */
    .study-s8-banner {
        padding: 70px 0 110px;
    }
    .study-s8-banner .donate-to-us-layout {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .study-s8-banner .become-volunteer-card {
        text-align: center;
        max-width: 720px;
        margin-left: auto;
        margin-right: auto;
    }
    @media (max-width: 767px) {
        .study-s8-banner {
            padding: 50px 0 90px;
        }
    }
    .study-s8-banner .become-volunteer-card .card-icon {
        margin-bottom: 1rem;
    }
    .study-s8-banner .become-volunteer-card h2 {
        font-size: clamp(1.45rem, 2.8vw, 2rem);
        line-height: 1.25;
    }
    .study-s8-banner .study-final-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        justify-content: center;
        margin-top: 1.5rem;
    }
    .study-btn-ghost-dark {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 26px;
        border: 2px solid #1f2937;
        color: #1f2937;
        font-weight: 600;
        border-radius: 6px;
        text-decoration: none;
        transition: background 0.2s, color 0.2s;
    }
    .study-btn-ghost-dark:hover {
        background: #1f2937;
        color: #fff;
    }
    .study-s8-banner .study-btn-ghost-dark.is-on-dark {
        border-color: rgba(255, 255, 255, 0.85);
        color: #fff;
    }
    .study-s8-banner .study-btn-ghost-dark.is-on-dark:hover {
        background: #fff;
        color: #1a1a1a;
    }
</style>
