@extends('layouts.frontend')

@php
    $founderImg = fn (string $file) => asset('assets/imgs/founder/' . $file);
@endphp

@section('content')
<style type="text/css">
.founder-page {
    --founder-accent: var(--theme-color-3);
    --founder-accent-deep: color-mix(in srgb, var(--theme-color-3) 58%, black);
    --founder-accent-soft: color-mix(in srgb, var(--theme-color-3) 42%, white);
    --founder-accent-wash: color-mix(in srgb, var(--theme-color-3) 22%, white);
    --founder-ink: #14181f;
    --founder-muted: #5c6570;
    --founder-cream: #fdfcfa;
    --founder-card: #ffffff;
    --founder-ui-radius: 7px;
    overflow-x: hidden;
    font-family: var(--dm-sans-font);
}
.founder-page h1,
.founder-page h2,
.founder-page h3,
.founder-page h4,
.founder-page h5,
.founder-page h6 {
    font-family: var(--outfit-font);
}
.founder-page .founder-hero {
    position: relative;
    padding: clamp(4rem, 9vw, 6rem) 0 clamp(3.25rem, 7vw, 5rem);
    background:
        radial-gradient(ellipse 100% 80% at 100% 0%, color-mix(in srgb, var(--founder-accent-deep) 35%, transparent), transparent 50%),
        radial-gradient(ellipse 70% 50% at 0% 100%, rgba(30, 58, 95, 0.22), transparent 55%),
        linear-gradient(168deg, #050608 0%, #0e1118 40%, #121722 100%);
    color: #e8ecf1;
}
.founder-page .founder-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background:
        linear-gradient(115deg, color-mix(in srgb, var(--founder-accent) 9%, transparent) 0%, transparent 42%),
        repeating-linear-gradient(
            -12deg,
            transparent,
            transparent 100px,
            rgba(255, 255, 255, 0.02) 100px,
            rgba(255, 255, 255, 0.02) 101px
        );
    pointer-events: none;
}
.founder-page .founder-hero .container {
    position: relative;
    z-index: 1;
}
.founder-page .founder-hero__grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: clamp(2.25rem, 5vw, 3.75rem);
    align-items: center;
    max-width: 1180px;
    margin: 0 auto;
}
@media (min-width: 992px) {
    .founder-page .founder-hero__grid {
        grid-template-columns: 1.02fr 0.98fr;
        gap: clamp(2.75rem, 5.5vw, 4.25rem);
    }
}
.founder-page .founder-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 0.65rem;
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: var(--founder-accent-soft);
    margin-bottom: 1rem;
}
.founder-page .founder-eyebrow::before {
    content: "";
    width: 42px;
    height: 2px;
    background: linear-gradient(90deg, var(--founder-accent), rgba(255, 255, 255, 0.35));
    border-radius: 2px;
}
.founder-page .founder-hero h1,
.founder-page .founder-hero__name {
    font-size: clamp(2.15rem, 4.5vw, 3.55rem);
    font-weight: 800;
    line-height: 1.12;
    letter-spacing: -0.03em;
    margin: 0 0 0.45rem;
    color: #fff;
}
.founder-page .founder-hero__role {
    font-size: clamp(1.02rem, 1.85vw, 1.15rem);
    font-weight: 600;
    line-height: 1.45;
    color: rgba(232, 236, 241, 0.92);
    margin: 0 0 0.35rem;
    max-width: 36rem;
}
.founder-page .founder-hero__reg {
    font-size: clamp(0.94rem, 1.65vw, 1.02rem);
    font-weight: 600;
    line-height: 1.45;
    color: rgba(232, 236, 241, 0.8);
    margin: 0 0 1.25rem;
    max-width: 36rem;
}
.founder-page .founder-hero__reg .founder-hero__marn {
    color: #fff;
    font-weight: 800;
}
.founder-page .founder-hero__intro {
    display: flex;
    flex-direction: column;
    gap: clamp(1.5rem, 3vw, 2.15rem);
    max-width: 40rem;
}
.founder-page .founder-hero__masthead {
    position: relative;
    padding-bottom: 1.35rem;
}
.founder-page .founder-hero__masthead::after {
    content: "";
    display: block;
    margin-top: 1.25rem;
    height: 2px;
    border-radius: 2px;
    background: linear-gradient(90deg, var(--founder-accent) 0%, rgba(255, 255, 255, 0.22) 38%, rgba(255, 255, 255, 0.06) 100%);
    max-width: min(100%, 420px);
}
.founder-page .founder-hero__masthead .founder-eyebrow {
    margin-bottom: 0.75rem;
    padding: 0.42rem 0.95rem;
    border-radius: 999px;
    border: 1px solid rgba(255, 255, 255, 0.18);
    background: rgba(255, 255, 255, 0.05);
    letter-spacing: 0.14em;
    color: var(--founder-accent-wash);
}
.founder-page .founder-hero__masthead .founder-eyebrow::before {
    display: none;
}
.founder-page .founder-hero__masthead h1,
.founder-page .founder-hero__masthead .founder-hero__name {
    margin-bottom: 0.5rem;
    color: #fff;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.35);
}
.founder-page .founder-hero__masthead .founder-hero__role {
    margin-bottom: 0.65rem;
    max-width: none;
    color: rgba(245, 247, 250, 0.9);
}
.founder-page .founder-hero__masthead .founder-hero__reg {
    margin: 0;
    max-width: none;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 0.5rem 0.9rem;
    padding: 0.55rem 0;
    color: rgba(220, 226, 234, 0.88);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}
.founder-page .founder-hero__masthead .founder-hero__reg .founder-hero__marn {
    padding: 0.2rem 0.65rem;
    border-radius: 8px;
    background: color-mix(in srgb, var(--founder-accent) 22%, transparent);
    border: 1px solid color-mix(in srgb, var(--founder-accent) 35%, transparent);
}
.founder-page .founder-hero__story {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}
.founder-page .founder-hero__lead {
    position: relative;
    margin: 0;
    padding: 1.15rem 1.25rem 1.15rem 1.85rem;
    font-size: clamp(1.08rem, 2.05vw, 1.32rem);
    font-weight: 700;
    line-height: 1.42;
    color: #fff;
    letter-spacing: -0.02em;
    background: linear-gradient(90deg, color-mix(in srgb, var(--founder-accent) 20%, transparent), rgba(255, 255, 255, 0.03));
    border-radius: 4px 18px 18px 4px;
    border: 1px solid rgba(255, 255, 255, 0.12);
    box-shadow: 6px 6px 0 rgba(0, 0, 0, 0.25);
}
.founder-page .founder-hero__lead::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0.65rem;
    bottom: 0.65rem;
    width: 4px;
    border-radius: 0 4px 4px 0;
    background: linear-gradient(180deg, var(--founder-accent-soft), var(--founder-accent));
}
.founder-page .founder-hero__text {
    position: relative;
    max-width: none;
    margin: 0;
    padding: 1.5rem 0 1.5rem 1.35rem;
    border-left: 1px solid rgba(255, 255, 255, 0.12);
    background: linear-gradient(90deg, rgba(255, 255, 255, 0.04), transparent 65%);
}
.founder-page .founder-hero__text::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 1px;
    height: 3.5rem;
    background: linear-gradient(180deg, var(--founder-accent), transparent);
    transform: translateX(-1px);
}
.founder-page .founder-hero__text > p:first-of-type {
    padding-left: 0;
    margin: 0;
    border-left: none;
}
.founder-page .founder-hero__text > p:first-of-type::first-letter {
    float: left;
    font-size: clamp(2.75rem, 5vw, 3.35rem);
    font-weight: 800;
    line-height: 0.82;
    margin: 0.06em 0.18rem 0 0;
    color: var(--founder-accent);
    text-shadow: 0 2px 18px color-mix(in srgb, var(--founder-accent) 45%, transparent);
}
.founder-page .founder-hero__text p {
    font-size: clamp(1.02rem, 1.9vw, 1.12rem);
    line-height: 1.72;
    color: rgba(232, 236, 241, 0.88);
    margin: 0;
}
.founder-page .founder-hero__text-ruled {
    position: relative;
    margin: 1.35rem 0 0;
    padding: 1.5rem 1.35rem 1.5rem 1.6rem;
    background: rgba(8, 10, 14, 0.55);
    border-radius: 6px 20px 20px 6px;
    border: 1px solid color-mix(in srgb, var(--founder-accent) 35%, transparent);
    border-left: 5px solid var(--founder-accent);
    box-shadow:
        0 20px 48px rgba(0, 0, 0, 0.35),
        inset 0 1px 0 rgba(255, 255, 255, 0.06);
}
.founder-page .founder-hero__text-ruled::before {
    content: "\201C";
    position: absolute;
    top: 0.35rem;
    right: 1rem;
    font-family: var(--outfit-font);
    font-size: 3.5rem;
    line-height: 1;
    color: color-mix(in srgb, var(--founder-accent) 20%, transparent);
    pointer-events: none;
}
.founder-page .founder-hero__text-ruled::after {
    content: none;
}
.founder-page .founder-hero__text-ruled p {
    position: relative;
    z-index: 1;
    margin: 0;
    font-size: clamp(1.04rem, 1.95vw, 1.16rem);
    line-height: 1.72;
    font-weight: 500;
    color: rgba(255, 255, 255, 0.94);
}
.founder-page .founder-hero__text-ruled p strong {
    font-weight: 700;
    color: #fff;
}
.founder-page .founder-hero__cta {
    display: flex;
    flex-wrap: wrap;
    gap: 0.85rem;
    align-items: center;
    padding-top: 1.15rem;
    margin-top: 0.35rem;
    border-top: 1px dashed rgba(255, 255, 255, 0.18);
}
.founder-page .founder-btn-outline {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    padding: 0.95rem 1.65rem;
    border-radius: 999px;
    border: 2px solid rgba(255, 255, 255, 0.38);
    color: #fff;
    font-weight: 700;
    text-decoration: none;
    transition: background 0.2s ease, border-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
    background: rgba(255, 255, 255, 0.03);
}
.founder-page .founder-btn-outline:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: #fff;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.25);
}
.founder-page .founder-hero__visual {
    position: relative;
    justify-self: center;
    width: min(100%, 420px);
}
.founder-page .founder-hero__visual::before {
    content: "";
    position: absolute;
    z-index: 0;
    width: 100%;
    height: 78%;
    bottom: -4%;
    right: -6%;
    background: radial-gradient(ellipse 70% 60% at 50% 50%, color-mix(in srgb, var(--founder-accent) 45%, transparent), transparent 72%);
    filter: blur(36px);
    opacity: 0.85;
    pointer-events: none;
}
@media (min-width: 992px) {
    .founder-page .founder-hero__visual {
        width: 100%;
        max-width: 440px;
        justify-self: end;
    }
}
.founder-page .founder-hero__frame {
    position: relative;
    z-index: 1;
    overflow: visible;
    padding-top: 0.35rem;
    transform: rotate(-1.25deg);
}
@media (max-width: 991px) {
    .founder-page .founder-hero__frame {
        transform: none;
    }
}
.founder-page .founder-hero__portrait {
    position: relative;
    border-radius: 8px 32px 8px 32px;
    overflow: hidden;
    box-shadow:
        0 0 0 2px var(--founder-accent),
        0 0 0 6px rgba(255, 255, 255, 0.1),
        0 40px 72px rgba(0, 0, 0, 0.55);
}
.founder-page .founder-hero__portrait img {
    width: 100%;
    height: auto;
    display: block;
}
.founder-page .founder-hero__portrait::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(205deg, transparent 50%, rgba(5, 6, 8, 0.42) 100%);
    pointer-events: none;
}
.founder-page .founder-cm-portrait {
    position: relative;
    width: 100%;
    max-width: 340px;
    margin-left: auto;
    margin-right: auto;
}
.founder-page .founder-cm-portrait--hero {
    max-width: 440px;
    padding-bottom: 2.75rem;
    margin-bottom: 0.35rem;
}
.founder-page .founder-cm-portrait--hero .founder-hero__portrait {
    border-radius: 22px;
    box-shadow: none;
    border: none;
}
.founder-page .founder-cm-portrait__blob {
    position: absolute;
    z-index: 0;
    width: 92%;
    height: 88%;
    left: 50%;
    top: 48%;
    transform: translate(-48%, -50%) rotate(-8deg);
    border-radius: 42% 58% 52% 48% / 48% 42% 58% 52%;
    background: linear-gradient(135deg, color-mix(in srgb, var(--founder-accent) 28%, transparent), rgba(30, 58, 95, 0.2));
    opacity: 0.85;
    pointer-events: none;
}
.founder-page .founder-cm-portrait__blob--light {
    background: linear-gradient(135deg, color-mix(in srgb, var(--founder-accent) 12%, transparent), rgba(30, 58, 95, 0.08));
    opacity: 1;
}
.founder-page .founder-cm-portrait__frame {
    position: relative;
    z-index: 1;
    padding: 7px;
    border-radius: 32px;
    background: linear-gradient(165deg, #ffffff 0%, #f3f5f9 100%);
    box-shadow:
        0 2px 0 rgba(255, 255, 255, 0.65) inset,
        0 32px 64px rgba(0, 0, 0, 0.28);
    border: 1px solid rgba(255, 255, 255, 0.45);
}
.founder-page .founder-section--band-dark .founder-cm-portrait__frame {
    background: linear-gradient(165deg, #2a3140 0%, #1a1f2a 100%);
    border: 1px solid rgba(255, 255, 255, 0.14);
    box-shadow:
        0 2px 0 rgba(255, 255, 255, 0.06) inset,
        0 32px 70px rgba(0, 0, 0, 0.55);
}
.founder-page .founder-cm-portrait__frame > img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 26px;
}
.founder-page .founder-cm-badge {
    position: absolute;
    z-index: 3;
    right: 0.25rem;
    bottom: 0;
    transform: translateY(40%);
    min-width: 148px;
    padding: 1rem 1.2rem;
    border-radius: 20px;
    background: #fff;
    box-shadow: 0 22px 50px rgba(15, 19, 24, 0.22);
    border: 1px solid rgba(15, 19, 24, 0.07);
    text-align: center;
}
.founder-page .founder-cm-badge__val {
    display: block;
    font-size: clamp(1.55rem, 3vw, 1.85rem);
    font-weight: 900;
    letter-spacing: -0.03em;
    color: var(--founder-accent);
    line-height: 1;
}
.founder-page .founder-cm-badge__lbl {
    display: block;
    margin-top: 0.4rem;
    font-size: 0.7rem;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #6c737d;
    line-height: 1.35;
}
.founder-page .founder-cm-role {
    text-align: center;
    margin: 0.5rem auto 0;
    max-width: 22rem;
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: rgba(232, 236, 241, 0.72);
    line-height: 1.5;
}
.founder-page .founder-cm-goal {
    margin: 0 0 1.35rem;
    padding: 1rem 1.2rem;
    border-radius: 16px;
    background: color-mix(in srgb, var(--founder-accent) 12%, transparent);
    border: 1px solid color-mix(in srgb, var(--founder-accent) 22%, transparent);
    font-size: 1.02rem;
    line-height: 1.65;
    color: #e8ecf1;
}
.founder-page .founder-cm-goal strong {
    color: var(--founder-accent-soft);
    font-weight: 800;
}
.founder-page .founder-cm-manifesto h2 {
    font-size: clamp(1.95rem, 3.8vw, 2.95rem);
    line-height: 1.14;
    letter-spacing: -0.03em;
}
.founder-page .founder-cm-manifesto--sub {
    margin: 0.75rem 0 0;
    font-size: clamp(1.05rem, 2vw, 1.25rem);
    font-weight: 700;
    line-height: 1.45;
    color: var(--founder-ink);
}
.founder-page .founder-cm-manifesto--sub + p {
    margin-top: 1.15rem;
}
.founder-page .founder-section--band-light .founder-cm-manifesto--sub {
    color: var(--founder-accent-deep);
}
.founder-page .founder-timeline-cm {
    position: relative;
    max-width: 720px;
    margin: 0 auto;
    padding: 0.35rem 0 0 0.25rem;
    list-style: none;
}
.founder-page .founder-timeline-cm::before {
    content: "";
    position: absolute;
    left: 0.5rem;
    top: 0.65rem;
    bottom: 2.75rem;
    width: 2px;
    border-radius: 2px;
    background: linear-gradient(180deg, rgba(240, 180, 188, 0.55), rgba(255, 255, 255, 0.1));
}
.founder-page .founder-tl-cm-item {
    position: relative;
    display: grid;
    grid-template-columns: 1.35rem 1fr;
    gap: 1.15rem 1.35rem;
    margin-bottom: 1.25rem;
    align-items: start;
}
.founder-page .founder-tl-cm-item:last-child {
    margin-bottom: 0;
}
.founder-page .founder-tl-cm-dotwrap {
    display: flex;
    justify-content: center;
    padding-top: 0.35rem;
}
.founder-page .founder-tl-cm-dot {
    width: 13px;
    height: 13px;
    border-radius: 50%;
    background: var(--founder-accent);
    border: 3px solid #0b0e13;
    box-shadow: 0 0 0 3px color-mix(in srgb, var(--founder-accent) 28%, transparent);
    flex-shrink: 0;
}
.founder-page .founder-tl-cm-card {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 22px;
    padding: 1.35rem 1.45rem 1.45rem;
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.2);
}
.founder-page .founder-tl-cm-year {
    margin: 0 0 0.4rem;
    font-size: clamp(1.2rem, 2.4vw, 1.55rem);
    font-weight: 900;
    letter-spacing: -0.02em;
    color: var(--founder-accent-soft);
    line-height: 1.2;
}
.founder-page .founder-tl-cm-card h3 {
    margin: 0 0 0.55rem;
    font-size: 1.08rem;
    font-weight: 800;
    line-height: 1.32;
    color: #fff;
}
.founder-page .founder-tl-cm-card p {
    margin: 0;
    font-size: 0.95rem;
    line-height: 1.68;
    color: #b4bcc8;
}
.founder-page .founder-cm-portrait--inline {
    max-width: 360px;
}
.founder-page .founder-cm-portrait--wide {
    max-width: 400px;
}
.founder-page .founder-cm-portrait--cta {
    max-width: 280px;
}
.founder-page .founder-cm-portrait--cta .founder-cm-portrait__frame {
    padding: 5px;
    border-radius: 28px;
    background: linear-gradient(165deg, #ffffff 0%, #eef1f6 100%);
}
.founder-page .founder-cm-portrait--cta .founder-cm-portrait__frame > img {
    border-radius: 22px;
}
.founder-page .founder-about__figure .founder-quote-mark {
    left: 0.15rem;
    top: 0.1rem;
    z-index: 2;
}
.founder-page .founder-snapshot__media {
    position: relative;
    border-radius: 26px;
    overflow: hidden;
    line-height: 0;
}
.founder-page .founder-snapshot__media img {
    width: 100%;
    height: auto;
    display: block;
}
.founder-page .founder-hero__inset {
    position: absolute;
    width: 38%;
    max-width: 168px;
    aspect-ratio: 3 / 4;
    border-radius: 10px 24px 10px 24px;
    overflow: hidden;
    border: 3px solid #fff;
    box-shadow: 0 18px 44px rgba(0, 0, 0, 0.45);
    top: 6%;
    left: -10%;
    z-index: 2;
    display: none;
}
@media (min-width: 576px) {
    .founder-page .founder-hero__inset {
        display: block;
    }
}
.founder-page .founder-hero__inset img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}
.founder-page .founder-section {
    padding: clamp(3.25rem, 7vw, 5.25rem) 0;
}
.founder-page .founder-section--flush-b {
    padding-bottom: clamp(2.25rem, 5vw, 3.25rem);
}
.founder-page .founder-section--cream {
    background: linear-gradient(180deg, var(--founder-cream) 0%, #f5f4f0 100%);
}
.founder-page .founder-section--light {
    background: #fff;
}
.founder-page .founder-section--dark {
    background:
        radial-gradient(ellipse 80% 60% at 0% 40%, color-mix(in srgb, var(--founder-accent) 12%, transparent), transparent 50%),
        linear-gradient(180deg, #0e1218 0%, #0b0e13 100%);
    color: #e4e8ee;
}
.founder-page .founder-section--band-light {
    position: relative;
    background:
        radial-gradient(ellipse 85% 55% at 10% -10%, color-mix(in srgb, var(--founder-accent) 6%, transparent), transparent 45%),
        linear-gradient(180deg, #ffffff 0%, #eef1f6 55%, #e8ecf3 100%);
    color: var(--founder-ink);
}
.founder-page .founder-section--band-light > .container {
    position: relative;
    z-index: 1;
}
.founder-page .founder-section--band-dark {
    position: relative;
    background:
        radial-gradient(ellipse 100% 80% at 100% 0%, color-mix(in srgb, var(--founder-accent-deep) 38%, transparent), transparent 52%),
        radial-gradient(ellipse 70% 50% at 0% 100%, rgba(30, 58, 95, 0.15), transparent 50%),
        linear-gradient(178deg, #07090d 0%, #10161e 42%, #0b0e13 100%);
    color: #e4e8ee;
}
.founder-page .founder-section--band-dark > .container {
    position: relative;
    z-index: 1;
}
.founder-page .founder-section--band-dark .founder-cm-portrait__frame .founder-quote-mark {
    color: rgba(255, 255, 255, 0.14);
}
.founder-page .founder-photo-frame {
    max-width: min(100%, 400px);
    margin-left: auto;
    margin-right: auto;
    border-radius: 20px;
    overflow: hidden;
    line-height: 0;
}
.founder-page .founder-photo-frame img {
    width: 100%;
    height: auto;
    display: block;
}
.founder-page .founder-photo-frame--shadow {
    box-shadow: 0 20px 48px rgba(15, 19, 24, 0.14);
}
.founder-page .founder-section--band-dark .founder-photo-frame--shadow {
    box-shadow: 0 24px 56px rgba(0, 0, 0, 0.45);
    border: 1px solid rgba(255, 255, 255, 0.14);
}
.founder-page .founder-message-grid {
    display: grid;
    gap: clamp(1.75rem, 4vw, 2.5rem);
    align-items: center;
}
@media (min-width: 992px) {
    .founder-page .founder-message-grid {
        grid-template-columns: minmax(0, 380px) minmax(0, 1fr);
    }
    .founder-page .founder-message-grid__figure .founder-cm-portrait {
        margin-left: 0;
        margin-right: 0;
    }
}
.founder-page .founder-message-panel {
    padding: clamp(1.5rem, 3vw, 2.1rem);
    border-radius: 22px;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.14);
    color: #fff;
}
.founder-page .founder-message-panel p {
    margin: 0 0 1rem;
    line-height: 1.72;
    font-size: 1.02rem;
    color: rgba(255, 255, 255, 0.92);
}
.founder-page .founder-message-panel p:last-of-type {
    margin-bottom: 0;
}
.founder-page .founder-message-panel .founder-message__tag {
    margin-top: 1.25rem;
    padding-top: 1rem;
    border-top: 1px solid rgba(255, 255, 255, 0.18);
    color: var(--founder-accent-soft);
    font-weight: 800;
    font-size: 0.95rem;
    letter-spacing: 0.04em;
}
.founder-page .founder-section-head {
    max-width: 720px;
    margin-bottom: clamp(2rem, 4vw, 3rem);
}
.founder-page .founder-section-head--center {
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}
.founder-page .founder-section-head h2 {
    font-size: clamp(1.75rem, 3.2vw, 2.65rem);
    font-weight: 800;
    letter-spacing: -0.02em;
    line-height: 1.18;
    margin: 0 0 0.75rem;
    color: var(--founder-ink);
}
.founder-page .founder-section--dark .founder-section-head h2,
.founder-page .founder-section--band-dark .founder-section-head h2 {
    color: #fff;
}
.founder-page .founder-section-kicker {
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--founder-accent);
    margin-bottom: 0.5rem;
}
.founder-page .founder-section--dark .founder-section-kicker,
.founder-page .founder-section--band-dark .founder-section-kicker {
    color: var(--founder-accent-soft);
}
.founder-page .founder-section-head p {
    margin: 0;
    font-size: 1.05rem;
    line-height: 1.65;
    color: var(--founder-muted);
}
.founder-page .founder-section--dark .founder-section-head p,
.founder-page .founder-section--band-dark .founder-section-head p {
    color: #aeb6c2;
}
.founder-page .founder-section--band-light .founder-snapshot__panel {
    background: linear-gradient(180deg, #ffffff 0%, color-mix(in srgb, var(--theme-color-3) 5%, #faf8fa) 100%);
    border: 1px solid color-mix(in srgb, var(--theme-color-3) 14%, rgba(15, 19, 24, 0.08));
    box-shadow: 0 20px 56px rgba(15, 19, 24, 0.1);
}
.founder-page .founder-section--band-dark .founder-about__intro h2,
.founder-page .founder-section--band-dark .founder-about__copy h2 {
    color: #fff;
}
.founder-page .founder-section--band-dark .founder-about__body p,
.founder-page .founder-section--band-dark .founder-about__copy p {
    color: #c4cbd4;
}
.founder-page .founder-section--band-dark .founder-about__intro .founder-section-kicker,
.founder-page .founder-section--band-dark .founder-about__copy .founder-section-kicker {
    color: var(--founder-accent-soft);
}
.founder-page .founder-section--band-dark .founder-about__intro .founder-cm-goal {
    color: #e8ecf1;
}
.founder-page .founder-about__intro.founder-section-head {
    max-width: min(58rem, 100%);
}
.founder-page .founder-about__intro .founder-cm-goal {
    margin-bottom: 0;
    margin-top: 0.5rem;
}
.founder-page .founder-about__body .founder-about__rule {
    display: block;
    width: min(7.5rem, 28%);
    height: 2px;
    margin: 1.35rem 0;
    border: 0;
    border-radius: 1px;
    background: rgba(255, 255, 255, 0.88);
}
.founder-page .founder-about__body p {
    margin: 0 0 1.1rem;
}
.founder-page .founder-about__body p:last-child {
    margin-bottom: 0;
}
.founder-page .founder-section--band-dark .founder-quote-mark {
    color: color-mix(in srgb, var(--founder-accent) 35%, transparent);
}
.founder-page .founder-section--band-light .founder-vision__intro h2 {
    color: var(--founder-ink);
}
.founder-page .founder-vision__intro.founder-section-head {
    max-width: min(58rem, 100%);
}
.founder-page .founder-vision__intro .founder-cm-manifesto--sub {
    max-width: 42rem;
    margin-left: auto;
    margin-right: auto;
}
.founder-page .founder-vision__body p {
    margin: 0 0 1rem;
}
.founder-page .founder-section--band-light .founder-belief {
    background: linear-gradient(145deg, #f8f9fc 0%, #f0f2f7 100%);
    border: 1px solid rgba(15, 19, 24, 0.08);
    border-left: 4px solid var(--founder-accent);
    box-shadow: 0 12px 36px rgba(15, 19, 24, 0.06);
}
.founder-page .founder-section--band-light .founder-belief__label {
    color: var(--founder-accent);
}
.founder-page .founder-section--band-light .founder-belief blockquote {
    color: var(--founder-ink);
    font-style: italic;
}
.founder-page .founder-section--band-dark .founder-bento__cell {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.12);
    box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
}
.founder-page .founder-section--band-dark .founder-bento__cell h3 {
    color: #fff;
}
.founder-page .founder-section--band-dark .founder-bento__cell p {
    color: #aeb6c2;
}
.founder-page .founder-section--band-dark .founder-bento__cell .icon {
    background: color-mix(in srgb, var(--founder-accent) 25%, transparent);
    color: var(--founder-accent-soft);
}
.founder-page .founder-section--band-dark .founder-bento__cell:hover {
    border-color: color-mix(in srgb, var(--founder-accent) 45%, transparent);
    box-shadow: 0 16px 44px color-mix(in srgb, var(--founder-accent) 15%, transparent);
}
.founder-page .founder-section--band-light .founder-stat {
    background: #fff;
    border: 1px solid rgba(15, 19, 24, 0.07);
    box-shadow: 0 14px 40px rgba(15, 19, 24, 0.08);
}
.founder-page .founder-section--band-light .founder-trust__img {
    max-width: min(100%, 420px);
    margin-inline: auto;
}
@media (min-width: 992px) {
    .founder-page .founder-section--band-light .founder-trust__img {
        margin-inline: 0;
    }
}
.founder-page .founder-cta__visual {
    border-radius: 20px;
    overflow: visible;
    max-width: none;
    margin-left: auto;
    margin-right: auto;
}
.founder-page .founder-snapshot:not(.row) {
    display: grid;
    gap: clamp(1.5rem, 3vw, 2.5rem);
}
@media (min-width: 992px) {
    .founder-page .founder-snapshot:not(.row) {
        grid-template-columns: minmax(0, 1fr) minmax(0, 380px);
        align-items: start;
    }
}
.founder-page .founder-snapshot__head {
    margin-bottom: clamp(1.75rem, 4vw, 2.75rem);
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}
.founder-page .founder-snapshot__head .founder-section-kicker,
.founder-page .founder-snapshot__head h2 {
    text-align: center;
}
.founder-page .founder-snapshot__panel .founder-dl dt {
    color: var(--theme-color-3);
}
.founder-page .founder-snapshot__panel {
    border-radius: 24px;
    padding: clamp(1.5rem, 3vw, 2.25rem);
    background: linear-gradient(180deg, #ffffff 0%, color-mix(in srgb, var(--theme-color-3) 4%, #faf9fa) 100%);
    border: 1px solid color-mix(in srgb, var(--theme-color-3) 12%, rgba(0, 0, 0, 0.06));
    box-shadow: 0 18px 48px rgba(15, 19, 24, 0.08);
}
.founder-page .founder-snapshot__facts {
    margin-top: 0.35rem;
    padding: clamp(1.1rem, 2.8vw, 1.5rem) clamp(1.1rem, 2.8vw, 1.4rem);
    border-radius: 0;
    border: 1px solid color-mix(in srgb, var(--theme-color-3) 18%, rgba(16, 24, 40, 0.07));
    background:
        linear-gradient(
            168deg,
            color-mix(in srgb, var(--theme-color-3) 14%, #ffffff) 0%,
            color-mix(in srgb, var(--theme-color-3) 8%, #faf5fa) 38%,
            color-mix(in srgb, var(--theme-color-3) 4%, #ffffff) 100%
        );
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.65);
}
.founder-page .founder-snapshot__panel h3 {
    font-size: 1.35rem;
    font-weight: 800;
    margin: 0 0 1.25rem;
    color: var(--founder-ink);
    text-align: center;
}
.founder-page .founder-snapshot__panel .founder-dl {
    display: grid;
    grid-template-columns: 1fr;
    gap: 0;
    margin: 0;
}
.founder-page .founder-snapshot__panel .founder-dl > div {
    display: grid;
    gap: 0.25rem;
    padding: 0.85rem 0;
    background: transparent;
    border: none;
    border-radius: 0;
    box-shadow: none;
    border-bottom: 1px solid color-mix(in srgb, var(--theme-color-3) 14%, rgba(16, 24, 40, 0.09));
}
.founder-page .founder-snapshot__panel .founder-dl > div:first-child {
    padding-top: 0;
}
.founder-page .founder-snapshot__panel .founder-dl > div:last-child {
    border-bottom: 0;
    padding-bottom: 0;
}
.founder-page .founder-dl dt {
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #8a929c;
    margin: 0;
}
.founder-page .founder-dl dd {
    margin: 0;
    font-size: 0.98rem;
    font-weight: 600;
    color: var(--founder-ink);
    line-height: 1.5;
}
.founder-page .founder-snapshot:not(.row) .founder-snapshot__aside {
    align-self: start;
}
.founder-page .founder-snapshot__aside .founder-cm-portrait__blob {
    display: none !important;
}
.founder-page .founder-snapshot__aside-cap {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 1.25rem 1.35rem;
    background: linear-gradient(0deg, rgba(11, 14, 19, 0.92), transparent);
    color: #fff;
}
.founder-page .founder-cm-portrait--snapshot .founder-snapshot__aside-cap {
    position: static;
    background: linear-gradient(180deg, color-mix(in srgb, var(--theme-color-3) 9%, #f4f1f4) 0%, #faf9fa 100%);
    color: var(--founder-ink);
    border: 1px solid rgba(16, 24, 40, 0.1);
    border-top: 0;
    padding: 0.95rem 1.05rem;
    border-radius: 0 0 var(--founder-photo-radius) var(--founder-photo-radius);
}
.founder-page .founder-cm-portrait--snapshot .founder-snapshot__aside-cap strong {
    color: var(--theme-color-3);
}
.founder-page .founder-cm-portrait--snapshot .founder-snapshot__aside-cap span {
    opacity: 1;
    color: var(--founder-muted);
    line-height: 1.45;
}
.founder-page .founder-snapshot__aside-cap strong {
    display: block;
    font-size: 1.05rem;
    margin-bottom: 0.2rem;
}
.founder-page .founder-snapshot__aside-cap span {
    font-size: 0.85rem;
    opacity: 0.88;
}
.founder-page .founder-about-grid {
    display: grid;
    gap: clamp(2rem, 4vw, 3rem);
    align-items: center;
}
@media (min-width: 992px) {
    .founder-page .founder-about-grid {
        grid-template-columns: 1fr 1fr;
    }
}
.founder-page .founder-about__figure {
    max-width: min(100%, 420px);
    margin-inline: auto;
}
@media (min-width: 992px) {
    .founder-page .founder-about__figure {
        margin-inline: 0;
        justify-self: start;
    }
}
.founder-page .founder-quote-mark {
    position: absolute;
    top: -0.15rem;
    left: -0.25rem;
    font-size: 6rem;
    line-height: 1;
    font-family: var(--outfit-font);
    color: color-mix(in srgb, var(--founder-accent) 12%, transparent);
    pointer-events: none;
    user-select: none;
}
.founder-page .founder-about__copy h2 {
    font-size: clamp(1.75rem, 3.2vw, 2.65rem);
    font-weight: 800;
    letter-spacing: -0.02em;
    line-height: 1.18;
    color: var(--founder-ink);
    margin: 0 0 1rem;
}
.founder-page .founder-about__copy p {
    font-size: 1.05rem;
    line-height: 1.72;
    color: var(--founder-muted);
    margin: 0 0 1.1rem;
}
.founder-page .founder-about__copy p:last-child {
    margin-bottom: 0;
}
.founder-page .founder-vision-split {
    display: grid;
    gap: 2.5rem;
    align-items: center;
}
@media (min-width: 992px) {
    .founder-page .founder-vision-split {
        grid-template-columns: 1fr 1fr;
        gap: 3.5rem;
    }
}
.founder-page .founder-vision__img {
    max-width: 400px;
    margin-left: auto;
    margin-right: auto;
}
@media (min-width: 992px) {
    .founder-page .founder-vision-split .founder-vision__img {
        margin-left: 0;
        justify-self: start;
    }
}
.founder-page .founder-vision__copy p {
    color: var(--founder-muted);
    line-height: 1.72;
    font-size: 1.02rem;
    margin: 0 0 1rem;
}
.founder-page .founder-belief {
    margin-top: 2.5rem;
    padding: clamp(1.5rem, 3vw, 2rem);
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-left: 4px solid var(--founder-accent);
}
.founder-page .founder-belief__label {
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--founder-accent-soft);
    margin-bottom: 0.65rem;
}
.founder-page .founder-belief blockquote {
    margin: 0;
    font-size: clamp(1.08rem, 2.2vw, 1.35rem);
    line-height: 1.55;
    font-weight: 600;
    color: #fff;
    font-style: italic;
}
.founder-page .founder-philo {
    display: grid;
    gap: 1.15rem;
}
@media (min-width: 992px) {
    .founder-page .founder-philo {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }

}
.founder-page .founder-philo-card {
    padding: 1.65rem 1.45rem 1.75rem;
    border-radius: 22px;
    background: linear-gradient(165deg, #fff 0%, #faf8f5 100%);
    border: 1px solid rgba(0, 0, 0, 0.06);
    position: relative;
    overflow: hidden;
}
.founder-page .founder-philo-card::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 96px;
    height: 96px;
    background: radial-gradient(circle, color-mix(in srgb, var(--founder-accent) 9%, transparent), transparent 70%);
    pointer-events: none;
}
.founder-page .founder-philo-card__n {
    width: 44px;
    height: 44px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 900;
    font-size: 1.15rem;
    color: #fff;
    background: linear-gradient(145deg, var(--founder-accent), var(--founder-accent-deep));
    margin-bottom: 1rem;
    box-shadow: 0 8px 22px color-mix(in srgb, var(--founder-accent) 35%, transparent);
}
.founder-page .founder-philo-card h3 {
    font-size: 1.08rem;
    font-weight: 800;
    margin: 0 0 0.6rem;
    color: var(--founder-ink);
}
.founder-page .founder-philo-card p {
    margin: 0;
    font-size: 0.94rem;
    line-height: 1.62;
    color: var(--founder-muted);
}
.founder-page .founder-bento {
    display: grid;
    gap: 1rem;
    grid-template-columns: 1fr;
}
@media (min-width: 768px) {
    .founder-page .founder-bento {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}
@media (min-width: 1100px) {
    .founder-page .founder-bento {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }
}
.founder-page .founder-bento__cell {
    padding: 1.45rem 1.35rem;
    border-radius: 20px;
    background: #fff;
    border: 1px solid rgba(0, 0, 0, 0.07);
    box-shadow: 0 8px 28px rgba(15, 19, 24, 0.05);
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
}
.founder-page .founder-bento__cell:hover {
    border-color: color-mix(in srgb, var(--founder-accent) 28%, transparent);
    box-shadow: 0 14px 40px color-mix(in srgb, var(--founder-accent) 10%, transparent);
}
.founder-page .founder-bento__cell .icon {
    width: 46px;
    height: 46px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: color-mix(in srgb, var(--founder-accent) 10%, transparent);
    color: var(--founder-accent);
    font-size: 1.2rem;
    margin-bottom: 1rem;
}
.founder-page .founder-bento__cell h3 {
    font-size: 1.05rem;
    font-weight: 800;
    margin: 0 0 0.5rem;
    color: var(--founder-ink);
}
.founder-page .founder-bento__cell p {
    margin: 0;
    font-size: 0.92rem;
    line-height: 1.58;
    color: var(--founder-muted);
}
.founder-page .founder-trust {
    display: grid;
    gap: 2.5rem;
    align-items: center;
}
@media (min-width: 992px) {
    .founder-page .founder-trust {
        grid-template-columns: 1fr 1fr;
    }
}
.founder-page .founder-trust__img {
    max-width: min(100%, 420px);
    margin-inline: auto;
}
@media (min-width: 992px) {
    .founder-page .founder-trust__img {
        margin-inline: 0;
    }
}
.founder-page .founder-trust-list {
    list-style: none;
    padding: 0;
    margin: 1.5rem 0 0;
    display: grid;
    gap: 1rem;
}
.founder-page .founder-trust-list li {
    display: grid;
    grid-template-columns: 40px 1fr;
    gap: 0.85rem;
    align-items: start;
}
.founder-page .founder-trust-list .check {
    width: 40px;
    height: 40px;
    border-radius: 12px;
    background: color-mix(in srgb, var(--founder-accent) 12%, transparent);
    color: var(--founder-accent);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    flex-shrink: 0;
}
.founder-page .founder-trust-list strong {
    display: block;
    font-size: 0.98rem;
    color: var(--founder-ink);
    margin-bottom: 0.2rem;
}
.founder-page .founder-trust-list span {
    font-size: 0.9rem;
    line-height: 1.55;
    color: var(--founder-muted);
}
.founder-page .founder-trust h2 {
    font-size: clamp(1.75rem, 3.2vw, 2.65rem);
    font-weight: 800;
    letter-spacing: -0.02em;
    line-height: 1.18;
    color: var(--founder-ink);
}
.founder-page .founder-stats {
    display: grid;
    gap: 1rem;
    grid-template-columns: 1fr;
}
@media (min-width: 576px) {
    .founder-page .founder-stats {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}
@media (min-width: 992px) {
    .founder-page .founder-stats {
        grid-template-columns: repeat(4, minmax(0, 1fr));
    }
}
.founder-page .founder-stat {
    text-align: center;
    padding: 1.65rem 1.1rem;
    border-radius: 20px;
    background: #fff;
    border: 1px solid rgba(0, 0, 0, 0.06);
    box-shadow: 0 12px 36px rgba(15, 19, 24, 0.06);
}
.founder-page .founder-stat__val {
    font-size: clamp(1.85rem, 3.5vw, 2.35rem);
    font-weight: 900;
    letter-spacing: -0.03em;
    color: var(--founder-ink);
    margin-bottom: 0.35rem;
    line-height: 1;
}
.founder-page .founder-stat__val em {
    font-style: normal;
    color: var(--founder-accent);
}
.founder-page .founder-stat__lbl {
    font-size: 0.86rem;
    line-height: 1.45;
    color: var(--founder-muted);
    margin: 0;
}
.founder-page .founder-cta {
    position: relative;
    padding: clamp(3.25rem, 7vw, 4.75rem) 0;
    background:
        radial-gradient(ellipse 60% 80% at 10% 50%, rgba(255, 255, 255, 0.08), transparent 45%),
        linear-gradient(120deg, var(--founder-accent-deep) 0%, color-mix(in srgb, var(--founder-accent) 72%, black) 42%, var(--founder-accent) 100%);
    color: #fff;
    overflow: hidden;
}
.founder-page .founder-cta::before {
    content: "";
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='40' height='40' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='1' cy='1' r='1' fill='%23ffffff' fill-opacity='0.06'/%3E%3C/svg%3E");
    opacity: 1;
    pointer-events: none;
}
.founder-page .founder-cta .container {
    position: relative;
    z-index: 1;
}
.founder-page .founder-cta__grid {
    display: grid;
    gap: 2rem;
    align-items: center;
}
@media (min-width: 992px) {
    .founder-page .founder-cta__grid {
        grid-template-columns: 1.12fr 0.92fr;
        align-items: start;
    }
}
.founder-page .founder-cta__aside {
    display: flex;
    flex-direction: column;
    gap: 1.15rem;
}
.founder-page .founder-cta h2 {
    color: #fff;
    font-size: clamp(1.85rem, 3.5vw, 2.75rem);
    font-weight: 800;
    margin: 0 0 0.85rem;
    letter-spacing: -0.02em;
    line-height: 1.15;
}
.founder-page .founder-cta > .container > .founder-cta__grid > div:first-child p {
    margin: 0;
    font-size: 1.05rem;
    line-height: 1.65;
    color: rgba(255, 255, 255, 0.9);
    max-width: 40rem;
}
.founder-page .founder-cta__actions {
    display: flex;
    flex-direction: column;
    gap: 0.85rem;
}
.founder-page .founder-cta__actions .e-primary-btn {
    justify-content: center;
    box-shadow: 0 12px 36px rgba(0, 0, 0, 0.22);
}
.founder-page .founder-cta__linkbox {
    display: grid;
    gap: 0.65rem;
}
.founder-page .founder-cta__linkbox a {
    display: flex;
    align-items: center;
    gap: 0.65rem;
    padding: 0.85rem 1rem;
    border-radius: 14px;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.18);
    color: #fff;
    text-decoration: none;
    font-weight: 700;
    transition: background 0.2s ease;
}
.founder-page .founder-cta__linkbox a:hover {
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
}
.founder-page .founder-cta__linkbox i {
    width: 40px;
    text-align: center;
    opacity: 0.9;
}

/* ===============================
   FOUNDER PAGE MODERN UI OVERRIDE
   (end of stylesheet — card / bento / editorial hero)
================================ */

.founder-page {
    --founder-accent: var(--theme-color-3);
    --founder-accent-deep: color-mix(in srgb, var(--theme-color-3) 58%, black);
    --founder-accent-soft: color-mix(in srgb, var(--theme-color-3) 42%, white);
    --founder-accent-wash: color-mix(in srgb, var(--theme-color-3) 22%, white);
    --founder-ink: #101522;
    --founder-muted: #667085;
    --founder-soft: #f6f3f1;
}

/* cleaner common spacing */
.founder-page .founder-section {
    padding: 72px 0 !important;
}

.founder-page .container {
    max-width: 1180px;
}

.founder-page .founder-section-head {
    margin-bottom: 34px !important;
}

.founder-page .founder-section-head h2,
.founder-page .founder-about__copy h2,
.founder-page .founder-trust h2 {
    font-size: clamp(2rem, 3.2vw, 3rem) !important;
    line-height: 1.08 !important;
    letter-spacing: -0.04em;
}

.founder-page .founder-section-kicker,
.founder-page .founder-eyebrow {
    letter-spacing: 0.18em;
}

/* ===============================
   HERO — modern editorial split
================================ */

.founder-page .founder-hero {
    padding: 90px 0 80px !important;
    background:
        radial-gradient(circle at 85% 20%, color-mix(in srgb, var(--founder-accent) 28%, transparent), transparent 34%),
        radial-gradient(circle at 10% 90%, rgba(255, 255, 255, 0.08), transparent 28%),
        linear-gradient(135deg, #07090f 0%, #101828 48%, color-mix(in srgb, var(--founder-accent) 26%, #101828) 100%);
}

.founder-page .founder-hero__grid {
    grid-template-columns: 1.15fr 0.85fr;
    gap: 56px;
}

.founder-page .founder-hero__masthead {
    padding-bottom: 0 !important;
}

.founder-page .founder-hero__masthead::after {
    display: none;
}

.founder-page .founder-hero__name {
    font-size: clamp(3rem, 6vw, 5.5rem) !important;
    line-height: 0.95 !important;
    letter-spacing: -0.07em;
    margin-bottom: 18px !important;
}

.founder-page .founder-hero__role,
.founder-page .founder-hero__reg {
    font-size: 1rem !important;
}

.founder-page .founder-hero__story {
    display: grid;
    gap: 16px;
}

.founder-page .founder-hero__lead {
    width: fit-content;
    border-radius: 999px;
    padding: 12px 18px 12px 22px !important;
    font-size: 1rem !important;
    background: rgba(255, 255, 255, 0.08);
    box-shadow: none;
}

.founder-page .founder-hero__lead::before {
    display: none;
}

.founder-page .founder-hero__text {
    border-left: 0;
    padding: 0 !important;
    background: transparent;
}

.founder-page .founder-hero__text::before,
.founder-page .founder-hero__text > p:first-of-type::first-letter {
    display: none;
}

.founder-page .founder-hero__text p {
    font-size: 1.04rem !important;
    line-height: 1.75;
}

.founder-page .founder-hero__text-ruled {
    margin-top: 18px !important;
    border-radius: 24px;
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-left: 0;
    background: rgba(255, 255, 255, 0.06);
    backdrop-filter: blur(14px);
}

.founder-page .founder-hero__visual {
    max-width: 430px;
}

.founder-page .founder-cm-portrait__frame {
    border-radius: 40px;
}

.founder-page .founder-cm-portrait__frame > img,
.founder-page .founder-hero__portrait {
    border-radius: 34px !important;
}

.founder-page .founder-cm-badge {
    right: -14px;
    bottom: 24px;
    transform: none;
    border-radius: 999px;
    min-width: auto;
    padding: 14px 20px;
    display: flex;
    gap: 10px;
    align-items: center;
}

.founder-page .founder-cm-badge__val {
    font-size: 1.35rem;
}

.founder-page .founder-cm-badge__lbl {
    margin-top: 0;
    text-align: left;
}

/* ===============================
   SNAPSHOT — panel polish (layout uses Bootstrap row)
================================ */

.founder-page .founder-snapshot__panel {
    border-radius: 30px;
    padding: 34px !important;
    background: linear-gradient(180deg, #ffffff 0%, color-mix(in srgb, var(--theme-color-3) 5%, #faf8fa) 100%) !important;
    border: 1px solid color-mix(in srgb, var(--theme-color-3) 12%, rgba(16, 24, 40, 0.08)) !important;
}

.founder-page .founder-snapshot__facts {
    padding: clamp(1.15rem, 2.8vw, 1.55rem) clamp(1.15rem, 2.8vw, 1.45rem) !important;
    border-radius: 0 !important;
    border: 1px solid color-mix(in srgb, var(--theme-color-3) 18%, rgba(16, 24, 40, 0.08)) !important;
    background:
        linear-gradient(
            168deg,
            color-mix(in srgb, var(--theme-color-3) 14%, #ffffff) 0%,
            color-mix(in srgb, var(--theme-color-3) 8%, #faf5fa) 40%,
            color-mix(in srgb, var(--theme-color-3) 4%, #ffffff) 100%
        ) !important;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.65);
}

.founder-page .founder-snapshot__panel h3 {
    text-align: center !important;
}

.founder-page .founder-snapshot__panel .founder-dl {
    grid-template-columns: 1fr !important;
    gap: 0 !important;
}

.founder-page .founder-snapshot__panel .founder-dl > div {
    border: none !important;
    border-radius: 0 !important;
    padding: 0.85rem 0 !important;
    background: transparent !important;
    box-shadow: none !important;
    border-bottom: 1px solid color-mix(in srgb, var(--theme-color-3) 14%, rgba(16, 24, 40, 0.09)) !important;
}

.founder-page .founder-snapshot__panel .founder-dl > div:last-child {
    border-bottom: 0 !important;
    padding-bottom: 0 !important;
}

.founder-page .founder-snapshot__panel .founder-dl dt {
    margin-bottom: 0;
    color: var(--theme-color-3) !important;
}

/* ===============================
   ABOUT — dark glass panel
================================ */

.founder-page .founder-about-grid {
    grid-template-columns: 0.78fr 1.22fr !important;
}

.founder-page .founder-about__copy {
    padding: 34px;
    border-radius: 32px;
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.12);
}

.founder-page .founder-cm-goal {
    border-radius: 22px;
    border: 0;
    background: linear-gradient(135deg, color-mix(in srgb, var(--founder-accent) 28%, transparent), rgba(255, 255, 255, 0.06));
}

/* ===============================
   VISION — quote card style
================================ */

.founder-page .founder-vision-split {
    grid-template-columns: 1fr !important;
}

.founder-page .founder-vision__img {
    display: none;
}

.founder-page .founder-vision__copy {
    max-width: 940px;
    margin: auto;
    text-align: center;
}

.founder-page .founder-belief {
    max-width: 820px;
    margin: 32px auto 0;
    border-radius: 30px;
    padding: 34px;
    border-left: 0 !important;
    background:
        radial-gradient(circle at top left, color-mix(in srgb, var(--founder-accent) 12%, transparent), transparent 38%),
        #fff;
}

/* ===============================
   TIMELINE — horizontal modern cards
================================ */

.founder-page .founder-timeline-cm {
    max-width: 100%;
    display: grid;
    grid-template-columns: repeat(5, minmax(0, 1fr));
    gap: 16px;
    padding: 0;
}

.founder-page .founder-timeline-cm::before,
.founder-page .founder-tl-cm-dotwrap {
    display: none;
}

.founder-page .founder-tl-cm-item {
    display: block;
    margin: 0;
}

.founder-page .founder-tl-cm-card {
    height: 100%;
    border-radius: 24px;
    padding: 22px;
    background: rgba(255, 255, 255, 0.07);
}

.founder-page .founder-tl-cm-year {
    font-size: 1rem;
    width: fit-content;
    padding: 7px 12px;
    border-radius: 999px;
    background: color-mix(in srgb, var(--founder-accent) 22%, transparent);
}

/* ===============================
   PHILOSOPHY — modern cards
================================ */

.founder-page .founder-philo {
    gap: 18px;
}

.founder-page .founder-philo-card {
    border-radius: 28px;
    padding: 28px;
    box-shadow: 0 18px 45px rgba(16, 24, 40, 0.06);
}

.founder-page .founder-philo-card__n {
    border-radius: 50%;
}

/* ===============================
   EXPERTISE — bento grid
================================ */

.founder-page .founder-bento {
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 18px;
}

.founder-page .founder-bento__cell {
    border-radius: 26px;
    padding: 26px;
    min-height: 210px;
}

.founder-page .founder-bento__cell:nth-child(1),
.founder-page .founder-bento__cell:nth-child(4) {
    background:
        radial-gradient(circle at top right, color-mix(in srgb, var(--founder-accent) 18%, transparent), transparent 42%),
        rgba(255, 255, 255, 0.06);
}

/* ===============================
   TRUST — checklist focus
================================ */

.founder-page .founder-trust {
    grid-template-columns: 1fr !important;
}

.founder-page .founder-trust__img {
    display: none;
}

.founder-page .founder-trust > div:last-child {
    max-width: 980px;
    margin: auto;
}

.founder-page .founder-trust-list {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    display: grid;
    gap: 16px;
}

.founder-page .founder-trust-list li {
    border-radius: 22px;
    padding: 20px;
    background: #fff;
    border: 1px solid rgba(16, 24, 40, 0.08);
    box-shadow: 0 14px 35px rgba(16, 24, 40, 0.05);
}

/* ===============================
   MESSAGE — quote / letter style
================================ */

.founder-page .founder-message-grid {
    grid-template-columns: 1fr !important;
}

.founder-page .founder-message-grid__figure {
    display: none;
}

.founder-page .founder-message-panel {
    max-width: 900px;
    margin: auto;
    border-radius: 34px;
    padding: 42px;
    background:
        linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.04));
    position: relative;
}

.founder-page .founder-message-panel::before {
    content: "\201C";
    position: absolute;
    top: -18px;
    left: 28px;
    font-family: var(--outfit-font);
    font-size: 8rem;
    color: color-mix(in srgb, var(--founder-accent) 35%, transparent);
    line-height: 1;
}

/* ===============================
   IMPACT — stats only
================================ */

.founder-page .founder-stats {
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 18px;
}

.founder-page .founder-stat {
    border-radius: 28px;
    padding: 30px 20px;
}

/* ===============================
   CTA — minimal, clean
================================ */

.founder-page .founder-cta {
    padding: 72px 0 !important;
}

.founder-page .founder-cta__grid {
    grid-template-columns: 1fr !important;
    text-align: center;
    max-width: 900px;
    margin: auto;
}

.founder-page .founder-cta__visual {
    display: none;
}

.founder-page .founder-cta__actions {
    max-width: 620px;
    margin: auto;
}

.founder-page .founder-cta__linkbox {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

/* ===============================
   Responsive
================================ */

@media (max-width: 991px) {
    .founder-page .founder-section {
        padding: 54px 0 !important;
    }

    .founder-page .founder-hero__grid,
    .founder-page .founder-about-grid {
        grid-template-columns: 1fr !important;
    }

    .founder-page .founder-hero__name {
        font-size: clamp(2.7rem, 13vw, 4rem) !important;
    }

    .founder-page .founder-timeline-cm,
    .founder-page .founder-bento,
    .founder-page .founder-stats,
    .founder-page .founder-dl,
    .founder-page .founder-trust-list,
    .founder-page .founder-cta__linkbox {
        grid-template-columns: 1fr !important;
    }

    .founder-page .founder-about__figure {
        display: none;
    }

    .founder-page .founder-about__copy,
    .founder-page .founder-message-panel {
        padding: 26px;
    }
}

/* =====================================================
   FOUNDER PAGE — UNIQUE SECTION UI ENHANCEMENT
   Final layer: distinct section personalities + page tint
===================================================== */

.founder-page {
    background: #faf7f5;
}

.founder-page .container {
    max-width: 1180px;
}

/* Common section spacing */
.founder-page .founder-section {
    padding: 78px 0 !important;
}

.founder-page .founder-section-head {
    max-width: 760px;
}

.founder-page .founder-snapshot__head.founder-section-head {
    max-width: none;
    width: 100%;
    text-align: center;
}

/* HERO: premium split hero */
.founder-page .founder-hero {
    padding: 96px 0 88px !important;
    background:
        radial-gradient(circle at 85% 18%, color-mix(in srgb, var(--founder-accent) 38%, transparent), transparent 30%),
        radial-gradient(circle at 8% 80%, rgba(255, 255, 255, 0.08), transparent 28%),
        linear-gradient(135deg, #06080f 0%, #101827 45%, color-mix(in srgb, var(--founder-accent) 32%, #101827) 100%) !important;
}

.founder-page .founder-hero__grid {
    grid-template-columns: 1.12fr 0.88fr !important;
    gap: 60px !important;
}

.founder-page .founder-hero__name {
    font-size: clamp(3rem, 6vw, 5.4rem) !important;
    line-height: 0.95 !important;
    letter-spacing: -0.07em !important;
}

.founder-page .founder-hero__lead {
    width: fit-content;
    border-radius: 999px !important;
    box-shadow: none !important;
    padding: 12px 20px !important;
    background: rgba(255, 255, 255, 0.09) !important;
}

.founder-page .founder-hero__lead::before,
.founder-page .founder-hero__text::before,
.founder-page .founder-hero__text > p:first-of-type::first-letter {
    display: none !important;
}

.founder-page .founder-hero__text {
    padding: 0 !important;
    border-left: 0 !important;
    background: transparent !important;
}

.founder-page .founder-hero__text-ruled {
    border-left: 0 !important;
    border-radius: 26px !important;
    background: rgba(255, 255, 255, 0.07) !important;
    backdrop-filter: blur(14px);
}

/* SNAPSHOT: information dashboard */
.founder-page .founder-snapshot__panel {
    border-radius: 34px !important;
    padding: 36px !important;
    background: linear-gradient(180deg, #ffffff 0%, color-mix(in srgb, var(--theme-color-3) 5%, #faf8fa) 100%) !important;
    border: 1px solid color-mix(in srgb, var(--theme-color-3) 14%, rgba(16, 24, 40, 0.07)) !important;
}

.founder-page .founder-snapshot__facts {
    padding: clamp(1.2rem, 2.8vw, 1.6rem) clamp(1.2rem, 2.8vw, 1.5rem) !important;
    border-radius: 0 !important;
    border: 1px solid color-mix(in srgb, var(--theme-color-3) 20%, rgba(16, 24, 40, 0.07)) !important;
    background:
        linear-gradient(
            168deg,
            color-mix(in srgb, var(--theme-color-3) 15%, #ffffff) 0%,
            color-mix(in srgb, var(--theme-color-3) 9%, #faf5fa) 40%,
            color-mix(in srgb, var(--theme-color-3) 5%, #ffffff) 100%
        ),
        radial-gradient(
            circle at 98% 8%,
            color-mix(in srgb, var(--theme-color-3) 10%, transparent),
            transparent 52%
        ) !important;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.65);
}

.founder-page .founder-snapshot__panel h3 {
    text-align: center !important;
}

.founder-page .founder-snapshot__panel .founder-dl {
    grid-template-columns: 1fr !important;
    gap: 0 !important;
}

.founder-page .founder-snapshot__panel .founder-dl > div {
    border: none !important;
    border-radius: 0 !important;
    padding: 0.85rem 0 !important;
    background: transparent !important;
    box-shadow: none !important;
    border-bottom: 1px solid color-mix(in srgb, var(--theme-color-3) 14%, rgba(16, 24, 40, 0.09)) !important;
}

.founder-page .founder-snapshot__panel .founder-dl > div:last-child {
    border-bottom: 0 !important;
    padding-bottom: 0 !important;
}

.founder-page .founder-snapshot__panel .founder-dl dt {
    color: var(--theme-color-3) !important;
}

/* ABOUT: dark story card */
.founder-page .founder-about-grid {
    grid-template-columns: 0.82fr 1.18fr !important;
}

.founder-page .founder-about__copy {
    padding: 38px !important;
    border-radius: 34px !important;
    background: rgba(255, 255, 255, 0.07) !important;
    border: 1px solid rgba(255, 255, 255, 0.14);
}

.founder-page .founder-cm-goal {
    border: 0 !important;
    border-radius: 24px !important;
    background: linear-gradient(135deg, color-mix(in srgb, var(--founder-accent) 32%, transparent), rgba(255, 255, 255, 0.06)) !important;
}

/* VISION: centered manifesto */
.founder-page .founder-vision-split {
    grid-template-columns: 1fr !important;
}

.founder-page .founder-vision__img {
    display: none !important;
}

.founder-page .founder-vision__copy {
    max-width: 920px;
    margin: auto;
    text-align: center;
}

.founder-page .founder-belief {
    max-width: 820px;
    margin: 34px auto 0 !important;
    border-left: 0 !important;
    border-radius: 34px !important;
    padding: 38px !important;
    background:
        radial-gradient(circle at top left, color-mix(in srgb, var(--founder-accent) 13%, transparent), transparent 35%),
        #fff !important;
}

/* JOURNEY: horizontal timeline cards */
.founder-page .founder-timeline-cm {
    max-width: 100% !important;
    display: grid !important;
    grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
    gap: 16px !important;
    padding: 0 !important;
}

.founder-page .founder-timeline-cm::before,
.founder-page .founder-tl-cm-dotwrap {
    display: none !important;
}

.founder-page .founder-tl-cm-item {
    display: block !important;
    margin: 0 !important;
}

.founder-page .founder-tl-cm-card {
    height: 100%;
    border-radius: 26px !important;
    padding: 24px !important;
    background: rgba(255, 255, 255, 0.075) !important;
    border: 1px solid rgba(255, 255, 255, 0.14) !important;
}

.founder-page .founder-tl-cm-year {
    width: fit-content;
    font-size: 0.92rem !important;
    padding: 8px 13px;
    border-radius: 999px;
    background: color-mix(in srgb, var(--founder-accent) 25%, transparent);
}

/* PHILOSOPHY: soft 3-card system */
.founder-page .founder-philo-card {
    border-radius: 30px !important;
    padding: 30px !important;
    box-shadow: 0 18px 45px rgba(16, 24, 40, 0.07);
}

.founder-page .founder-philo-card__n {
    border-radius: 50% !important;
}

/* EXPERTISE: bento grid */
.founder-page .founder-bento {
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
    gap: 18px !important;
}

.founder-page .founder-bento__cell {
    min-height: 220px;
    border-radius: 28px !important;
    padding: 28px !important;
}

.founder-page .founder-bento__cell:nth-child(1),
.founder-page .founder-bento__cell:nth-child(4) {
    grid-row: span 2;
    background:
        radial-gradient(circle at top right, color-mix(in srgb, var(--founder-accent) 24%, transparent), transparent 42%),
        rgba(255, 255, 255, 0.08) !important;
}

/* TRUST: checklist layout */
.founder-page .founder-trust {
    grid-template-columns: 1fr !important;
}

.founder-page .founder-trust__img {
    display: none !important;
}

.founder-page .founder-trust > div:last-child {
    max-width: 980px;
    margin: auto;
}

.founder-page .founder-trust-list {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px !important;
}

.founder-page .founder-trust-list li {
    padding: 22px;
    border-radius: 24px;
    background: #fff;
    border: 1px solid rgba(16, 24, 40, 0.08);
    box-shadow: 0 14px 34px rgba(16, 24, 40, 0.05);
}

/* MESSAGE: founder letter */
.founder-page .founder-message-grid {
    grid-template-columns: 1fr !important;
}

.founder-page .founder-message-grid__figure {
    display: none !important;
}

.founder-page .founder-message-panel {
    position: relative;
    max-width: 900px;
    margin: auto;
    border-radius: 36px !important;
    padding: 46px !important;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.11), rgba(255, 255, 255, 0.045)) !important;
}

.founder-page .founder-message-panel::before {
    content: "\201C";
    position: absolute;
    top: -18px;
    left: 28px;
    font-family: var(--outfit-font);
    font-size: 8rem;
    line-height: 1;
    color: color-mix(in srgb, var(--founder-accent) 35%, transparent);
}

/* IMPACT: clean stat cards */
.founder-page .founder-stats {
    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
    gap: 18px !important;
}

.founder-page .founder-stat {
    border-radius: 30px !important;
    padding: 34px 22px !important;
}

/* CTA: clean conversion block */
.founder-page .founder-cta {
    padding: 78px 0 !important;
}

.founder-page .founder-cta__grid {
    grid-template-columns: 1fr !important;
    max-width: 900px;
    margin: auto;
    text-align: center;
}

.founder-page .founder-cta__visual {
    display: none !important;
}

.founder-page .founder-cta__actions {
    max-width: 640px;
    margin: auto;
}

.founder-page .founder-cta__linkbox {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

/* Responsive */
@media (max-width: 991px) {
    .founder-page .founder-section {
        padding: 56px 0 !important;
    }

    .founder-page .founder-hero__grid,
    .founder-page .founder-about-grid,
    .founder-page .founder-dl,
    .founder-page .founder-timeline-cm,
    .founder-page .founder-bento,
    .founder-page .founder-trust-list,
    .founder-page .founder-stats,
    .founder-page .founder-cta__linkbox {
        grid-template-columns: 1fr !important;
    }

    .founder-page .founder-about__figure {
        display: none !important;
    }

    .founder-page .founder-message-panel,
    .founder-page .founder-about__copy {
        padding: 28px !important;
    }

    .founder-page .founder-bento__cell:nth-child(1),
    .founder-page .founder-bento__cell:nth-child(4) {
        grid-row: auto;
    }
}

/* =====================================================
   FOUNDER — Section media: consistent size + alignment
   (single photo width, crop-to-frame, centered splits)
===================================================== */

.founder-page {
    --founder-photo-rail: 320px;
    --founder-snapshot-photo: min(100%, 480px);
    --founder-photo-radius: var(--founder-ui-radius);
    --founder-portrait-ar: 4 / 5;
}

/* Hero: balance text column vs portrait */
@media (min-width: 992px) {
    .founder-page .founder-hero__grid {
        align-items: center !important;
    }
}

/* Snapshot: Bootstrap row (.founder-snapshot.row) or legacy CSS grid */
.founder-page .founder-snapshot:not(.row) {
    display: grid !important;
    grid-template-columns: minmax(0, 1fr) min(var(--founder-photo-rail), 100%) !important;
    gap: clamp(1.75rem, 4vw, 3rem) !important;
    align-items: center !important;
}

.founder-page .founder-snapshot.row .founder-snapshot__aside {
    display: flex !important;
    justify-content: center;
    align-items: center;
    align-self: center;
}

@media (min-width: 768px) {
    .founder-page .founder-snapshot.row .founder-snapshot__aside {
        justify-content: flex-end;
    }
}

.founder-page .founder-snapshot__aside .founder-cm-portrait {
    position: static !important;
    width: 100%;
    max-width: var(--founder-photo-rail);
    margin: 0 auto;
}

.founder-page .founder-snapshot__aside .founder-cm-portrait--snapshot {
    max-width: var(--founder-snapshot-photo) !important;
}

.founder-page .founder-cm-portrait--snapshot .founder-cm-portrait__frame {
    display: flex;
    flex-direction: column;
    align-items: stretch;
    gap: 0;
}

.founder-page .founder-snapshot__media {
    position: relative !important;
    aspect-ratio: var(--founder-portrait-ar);
    border-radius: var(--founder-photo-radius);
    overflow: hidden;
    background: #d8dee6;
    isolation: isolate;
}

.founder-page .founder-cm-portrait--snapshot .founder-snapshot__media {
    border-radius: var(--founder-photo-radius) var(--founder-photo-radius) 0 0 !important;
}

.founder-page .founder-snapshot__media img {
    position: absolute !important;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 20%;
}

/* Keep “At a glance” height closer to the photo rail on large screens */
/* snapshot dl: single-column list is default; no override needed */
@media (min-width: 992px) {
    .founder-page .founder-snapshot__panel .founder-dl > div {
        padding: 0.75rem 0 !important;
    }
}

/* About: center row, portrait fits frame */
@media (min-width: 992px) {
    .founder-page .founder-about-grid {
        align-items: center !important;
    }
}

.founder-page .founder-about__figure .founder-cm-portrait__frame {
    overflow: hidden;
    border-radius: var(--founder-photo-radius);
}

.founder-page .founder-about__figure .founder-cm-portrait__frame > img {
    width: 100%;
    aspect-ratio: var(--founder-portrait-ar);
    height: auto;
    max-height: 480px;
    object-fit: cover;
    object-position: center 15%;
    display: block;
}

/* Vision: narrow photo rail + copy */
.founder-page .founder-vision-split {
    grid-template-columns: min(var(--founder-photo-rail), 100%) minmax(0, 1fr) !important;
    gap: clamp(2rem, 5vw, 3.5rem) !important;
    align-items: center !important;
}

.founder-page .founder-vision__img {
    display: flex !important;
    justify-content: center;
    width: 100%;
}

.founder-page .founder-vision__img .founder-cm-portrait {
    width: 100%;
    max-width: var(--founder-photo-rail);
    margin: 0 auto;
}

.founder-page .founder-vision__img .founder-cm-portrait__frame {
    overflow: hidden;
    border-radius: var(--founder-photo-radius);
}

.founder-page .founder-vision__img .founder-cm-portrait__frame > img {
    width: 100%;
    aspect-ratio: var(--founder-portrait-ar);
    height: auto;
    max-height: 440px;
    object-fit: cover;
    object-position: center 18%;
    display: block;
}

.founder-page .founder-vision__copy {
    max-width: none !important;
    margin: 0 !important;
    text-align: left !important;
}

.founder-page .founder-vision__copy .founder-vision__body {
    max-width: 38rem;
    margin-left: 0;
    margin-right: 0;
}

.founder-page .founder-belief {
    max-width: 38rem;
    margin-left: 0 !important;
    margin-right: auto !important;
}

.founder-page .founder-bento__cell:nth-child(1),
.founder-page .founder-bento__cell:nth-child(4) {
    grid-row: auto !important;
}

/* Trust: photo rail + copy, vertically centered */
.founder-page .founder-trust {
    grid-template-columns: min(var(--founder-photo-rail), 100%) minmax(0, 1fr) !important;
    gap: clamp(2rem, 4vw, 3.5rem) !important;
    align-items: center !important;
}

.founder-page .founder-trust__img {
    display: flex !important;
    justify-content: center;
}

.founder-page .founder-trust__img .founder-cm-portrait {
    position: static !important;
    width: 100%;
    max-width: var(--founder-photo-rail);
    margin: 0 auto;
}

.founder-page .founder-trust__img .founder-cm-portrait__frame {
    overflow: hidden;
    border-radius: var(--founder-photo-radius);
}

.founder-page .founder-trust__img .founder-cm-portrait__frame > img {
    width: 100%;
    aspect-ratio: var(--founder-portrait-ar);
    height: auto;
    max-height: 420px;
    object-fit: cover;
    object-position: center 18%;
    display: block;
}

.founder-page .founder-trust > div:last-child {
    max-width: none !important;
    margin: 0 !important;
}

/* Message: top-align text with photo top */
.founder-page .founder-message-grid {
    grid-template-columns: min(var(--founder-photo-rail), 100%) minmax(0, 1fr) !important;
    gap: clamp(1.75rem, 4vw, 2.75rem) !important;
    align-items: start !important;
}

.founder-page .founder-message-grid__figure {
    display: flex !important;
    justify-content: center;
}

.founder-page .founder-message-grid__figure .founder-cm-portrait {
    position: static !important;
    width: 100%;
    max-width: var(--founder-photo-rail);
    margin: 0 auto;
}

.founder-page .founder-message-grid__figure .founder-cm-portrait__frame {
    overflow: hidden;
    border-radius: var(--founder-photo-radius);
}

.founder-page .founder-message-grid__figure .founder-cm-portrait__frame > img {
    width: 100%;
    aspect-ratio: var(--founder-portrait-ar);
    height: auto;
    max-height: 420px;
    object-fit: cover;
    object-position: center 22%;
    display: block;
}

/* CTA */
.founder-page .founder-cta__grid {
    grid-template-columns: minmax(0, 1fr) minmax(240px, min(30vw, 300px)) !important;
    max-width: none !important;
    margin: 0 !important;
    text-align: left !important;
    align-items: center !important;
    gap: clamp(2rem, 5vw, 3rem) !important;
}

.founder-page .founder-cta__visual {
    display: block !important;
}

.founder-page .founder-cta__aside {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1.25rem;
    justify-self: end;
    width: 100%;
    max-width: 300px;
}

.founder-page .founder-cta__visual .founder-cm-portrait--cta {
    max-width: 100%;
    width: 100%;
}

.founder-page .founder-cta__visual .founder-cm-portrait__frame {
    overflow: hidden;
    border-radius: 24px;
}

.founder-page .founder-cta__visual .founder-cm-portrait__frame > img {
    width: 100%;
    aspect-ratio: var(--founder-portrait-ar);
    object-fit: cover;
    object-position: center 15%;
    display: block;
}

@media (max-width: 991px) {
    .founder-page .founder-snapshot:not(.row),
    .founder-page .founder-vision-split,
    .founder-page .founder-trust,
    .founder-page .founder-message-grid,
    .founder-page .founder-cta__grid {
        grid-template-columns: 1fr !important;
    }

    .founder-page .founder-snapshot:not(.row) {
        align-items: start !important;
    }

    .founder-page .founder-snapshot__panel .founder-dl {
        grid-template-columns: 1fr !important;
    }

    .founder-page .founder-vision__copy,
    .founder-page .founder-vision__intro {
        text-align: center !important;
    }

    .founder-page .founder-vision__intro {
        max-width: none;
        margin-inline: auto;
    }

    .founder-page .founder-vision__copy .founder-vision__body {
        max-width: 40rem;
        margin-inline: auto;
    }

    .founder-page .founder-belief {
        margin-left: auto !important;
        margin-right: auto !important;
        max-width: 40rem;
    }

    .founder-page .founder-cta__grid {
        text-align: center !important;
    }

    .founder-page .founder-cta__aside {
        justify-self: center;
        max-width: 280px;
    }

    .founder-page .founder-about__figure {
        display: block !important;
        order: -1;
        max-width: min(var(--founder-photo-rail), 100%);
        margin-inline: auto;
    }

    .founder-page .founder-about-grid {
        display: grid !important;
    }
}

/* One corner radius across founder UI (see --founder-ui-radius on .founder-page) */
.founder-page .founder-hero__masthead .founder-eyebrow,
.founder-page .founder-hero__marn,
.founder-page .founder-hero__lead,
.founder-page .founder-hero__text-ruled,
.founder-page .founder-btn-outline,
.founder-page .founder-cm-badge,
.founder-page .founder-cm-portrait__frame,
.founder-page .founder-hero__frame,
.founder-page .founder-hero__portrait,
.founder-page .founder-hero__inset,
.founder-page .founder-snapshot__panel,
.founder-page .founder-section--band-light .founder-snapshot__panel,
.founder-page .founder-snapshot__facts,
.founder-page .founder-about__copy,
.founder-page .founder-cm-goal,
.founder-page .founder-belief,
.founder-page .founder-tl-cm-card,
.founder-page .founder-philo-card,
.founder-page .founder-philo-card__n,
.founder-page .founder-bento__cell,
.founder-page .founder-bento__cell .icon,
.founder-page .founder-trust-list li,
.founder-page .founder-trust-list .check,
.founder-page .founder-message-panel,
.founder-page .founder-stat,
.founder-page .founder-cta__visual .founder-cm-portrait__frame,
.founder-page .founder-cta__linkbox a,
.founder-page .founder-photo-frame,
.founder-page .e-primary-btn {
    border-radius: var(--founder-ui-radius) !important;
}

.founder-page .founder-hero__lead::before {
    border-radius: 0 var(--founder-ui-radius) var(--founder-ui-radius) 0 !important;
}

.founder-page .founder-cm-portrait--snapshot .founder-snapshot__media {
    border-radius: var(--founder-ui-radius) var(--founder-ui-radius) 0 0 !important;
}

.founder-page .founder-cm-portrait--snapshot .founder-snapshot__aside-cap {
    border-radius: 0 0 var(--founder-ui-radius) var(--founder-ui-radius) !important;
}
</style>

<div class="founder-page">
    <section class="founder-hero" aria-labelledby="founder-hero-title">
        <div class="container">
            <div class="founder-hero__grid">
                <div class="founder-hero__intro">
                    <div class="founder-hero__masthead">
                        <p class="founder-eyebrow">Founder &amp; Registered Migration Agent</p>
                        <h1 id="founder-hero-title" class="founder-hero__name">Ankur Saini</h1>
                        <p class="founder-hero__role">Founder, Visawizer Education &amp; Migration Services</p>
                        <p class="founder-hero__reg">Registered Migration Agent <span aria-hidden="true">|</span> <span class="founder-hero__marn">MARN 2117640</span></p>
                    </div>
                    <div class="founder-hero__story">
                        <p class="founder-hero__lead">From Migrant Journey to Migration Guidance</p>
                        <div class="founder-hero__text">
                            <p>Ankur Saini&apos;s story began with a dream many people carry — to build a better future in Australia. Having personally experienced the journey of moving to Australia, understanding the migration system, and navigating the pathway toward settlement, Ankur transformed his experience into a professional mission.</p>
                            <div class="founder-hero__text-ruled">
                                <p>Today, as the Founder of Visawizer Education &amp; Migration Services and a Registered Migration Agent, he helps students, professionals, families, and skilled migrants make informed, confident, and legally guided decisions for their Australian journey.</p>
                            </div>
                        </div>
                    </div>
                    <div class="founder-hero__cta">
                        <a href="{{ url('book-appointment') }}" class="e-primary-btn has-icon">Book a Consultation<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span></a>
                        <a href="{{ url('study') }}" class="founder-btn-outline"><i class="fa-regular fa-passport"></i> Explore Visa Services</a>
                    </div>
                </div>
                <div class="founder-hero__visual">
                    <div class="founder-cm-portrait founder-cm-portrait--hero">
                        <div class="founder-cm-portrait__blob" aria-hidden="true"></div>
                        <div class="founder-cm-portrait__frame">
                            <div class="founder-hero__frame">
                                <div class="founder-hero__inset" aria-hidden="true">
                                    <img src="{{ $founderImg('ankur-saini-hero-inset.jpeg') }}" width="200" height="260" alt="" loading="lazy" decoding="async">
                                </div>
                                <div class="founder-hero__portrait">
                                    <img src="{{ $founderImg('ankur-saini-hero-portrait.jpeg') }}" width="440" height="550" alt="Ankur Saini Founder of Visawizer Education and Migration Services Melbourne Australia" loading="eager" decoding="async">
                                </div>
                            </div>
                        </div>
                        <div class="founder-cm-badge">
                            <span class="founder-cm-badge__val">2K+</span>
                            <span class="founder-cm-badge__lbl">Successful cases</span>
                        </div>
                    </div>
                    <p class="founder-cm-role">Founder &amp; lead consultant &mdash; Melbourne, Australia</p>
                </div>
            </div>
        </div>
    </section>

    <section class="founder-section founder-section--band-light" aria-labelledby="founder-snapshot-title">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="founder-section-head founder-section-head--center founder-snapshot__head">
                        <p class="founder-section-kicker">Founder snapshot</p>
                        <h2 id="founder-snapshot-title">Guiding Dreams with Experience, Clarity, and Care</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center gy-4 gy-md-5 founder-snapshot">
                <div class="col-12 col-md-7">
                    <div class="founder-snapshot__panel">
                        <h3>At a glance</h3>
                        <div class="founder-snapshot__facts">
                            <dl class="founder-dl">
                                <div><dt>Name</dt><dd>Ankur Saini</dd></div>
                                <div><dt>Role</dt><dd>Founder, Visawizer Education &amp; Migration Services</dd></div>
                                <div><dt>Professional status</dt><dd>Registered Migration Agent</dd></div>
                                <div><dt>MARN</dt><dd>2117640</dd></div>
                                <div><dt>Location</dt><dd>Melbourne, Victoria, Australia</dd></div>
                                <div><dt>Education</dt><dd>Graduate Diploma in Australian Migration Law, Victoria University</dd></div>
                                <div><dt>Focus areas</dt><dd>Student visas, skilled migration, employer sponsored visas, partner visas, family visas, visitor visas, ART review &amp; complex migration matters</dd></div>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="founder-snapshot__aside">
                        <div class="founder-cm-portrait founder-cm-portrait--inline founder-cm-portrait--snapshot">
                            <div class="founder-cm-portrait__frame">
                                <div class="founder-snapshot__media">
                                    <img src="{{ $founderImg('ankur-saini-snapshot.jpeg') }}" width="800" height="1000" alt="Ankur Saini founder Visawizer Education and Migration Services Melbourne" loading="lazy" decoding="async">
                                </div>
                                <div class="founder-snapshot__aside-cap">
                                    <strong>Registered &amp; client-focused</strong>
                                    <span>Transparent, structured guidance from consultation to outcome.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="founder-section founder-section--band-dark" aria-labelledby="founder-about-title">
        <div class="container">
            <div class="founder-section-head founder-section-head--center founder-about__intro">
                <p class="founder-section-kicker" id="founder-about-title">About Ankur Saini</p>
                <h2 class="mb-3">A Founder Who Understands the Journey Because He Has Lived It</h2>
                <p class="founder-cm-goal"><strong>Goal:</strong> To offer transparent, structured, and client-focused migration guidance so every visa pathway feels clear, compliant, and achievable.</p>
            </div>
            <div class="founder-about-grid">
                <div class="founder-about__figure">
                    <div class="founder-cm-portrait founder-cm-portrait--wide">
                        <div class="founder-cm-portrait__blob" aria-hidden="true"></div>
                        <div class="founder-cm-portrait__frame">
                            <span class="founder-quote-mark" aria-hidden="true">&ldquo;</span>
                            <img src="{{ $founderImg('ankur-saini-about.jpeg') }}" width="640" height="768" alt="Ankur Saini lived experience Australian migration Visawizer founder" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
                <div class="founder-about__copy">
                    <div class="founder-about__body">
                        <p>Ankur Saini is not only a migration professional — he is someone who has personally lived the emotions, uncertainty, preparation, and determination involved in moving to Australia.</p>
                        <span class="founder-about__rule" aria-hidden="true"></span>
                        <p>His own migration journey gave him a deep understanding of the questions people face: which visa pathway is right, how documents should be prepared, what mistakes to avoid, and how a dream becomes a practical, compliant, and achievable plan.</p>
                        <span class="founder-about__rule" aria-hidden="true"></span>
                        <p>With this understanding, he founded Visawizer Education &amp; Migration Services to offer transparent, structured, and client-focused migration guidance. His approach is built on clarity, honest advice, careful documentation, and consistent support from consultation to outcome.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="founder-section founder-section--band-light" aria-labelledby="founder-vision-title">
        <div class="container">
            <div class="founder-section-head founder-section-head--center founder-vision__intro">
                <p class="founder-section-kicker" id="founder-vision-title">Vision</p>
                <h2>Making Australian Migration Simpler, Clearer, and More Human</h2>
                <p class="founder-cm-manifesto--sub">Plain-language guidance, practical pathways, and advice you can trust.</p>
            </div>
            <div class="founder-vision-split">
                <div class="founder-vision__img">
                    <div class="founder-cm-portrait founder-cm-portrait--inline">
                        <div class="founder-cm-portrait__blob founder-cm-portrait__blob--light" aria-hidden="true"></div>
                        <div class="founder-cm-portrait__frame">
                            <img src="{{ $founderImg('ankur-saini-vision.jpeg') }}" width="640" height="800" alt="Ankur Saini Visawizer migration vision Melbourne Australia" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
                <div class="founder-vision__copy">
                    <div class="founder-vision__body">
                        <p>Ankur&apos;s vision is to make migration advice more accessible, practical, and trustworthy for people planning their future in Australia. At Visawizer, the focus is not only on submitting applications — it is on understanding every client&apos;s circumstances, identifying the most suitable pathway, explaining the process in plain language, and helping clients move forward with confidence.</p>
                    </div>
                    <div class="founder-belief">
                        <p class="founder-belief__label">Founder&apos;s belief</p>
                        <blockquote>&ldquo;Migration is not just paperwork. It is a life decision. Every application represents a family, a career, a dream, and a new beginning.&rdquo;</blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="founder-section founder-section--band-dark" aria-labelledby="founder-journey-title">
        <div class="container">
            <div class="founder-section-head founder-section-head--center">
                <p class="founder-section-kicker">Journey timeline</p>
                <h2 id="founder-journey-title">The Journey Behind Visawizer</h2>
                <p>From arriving in Australia to formal migration law study, registration, and building a dedicated client-first practice.</p>
            </div>
            <ul class="founder-timeline-cm">
                <li class="founder-tl-cm-item" data-aos="fade-up" data-aos-duration="700">
                    <div class="founder-tl-cm-dotwrap" aria-hidden="true"><span class="founder-tl-cm-dot"></span></div>
                    <div class="founder-tl-cm-card">
                        <p class="founder-tl-cm-year">2013</p>
                        <h3>The Beginning of a Personal Australian Journey</h3>
                        <p>Ankur moved to Australia and experienced firsthand the challenges, hopes, and realities of starting a new life in a new country.</p>
                    </div>
                </li>
                <li class="founder-tl-cm-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="60">
                    <div class="founder-tl-cm-dotwrap" aria-hidden="true"><span class="founder-tl-cm-dot"></span></div>
                    <div class="founder-tl-cm-card">
                        <p class="founder-tl-cm-year">Experience</p>
                        <h3>Permanent Residency Journey — Learning Through Experience</h3>
                        <p>His own migration and settlement experience shaped how critical the right guidance can be for migrants and students.</p>
                    </div>
                </li>
                <li class="founder-tl-cm-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="120">
                    <div class="founder-tl-cm-dotwrap" aria-hidden="true"><span class="founder-tl-cm-dot"></span></div>
                    <div class="founder-tl-cm-card">
                        <p class="founder-tl-cm-year">Education</p>
                        <h3>Victoria University — Formal Migration Law Education</h3>
                        <p>To serve others professionally, Ankur pursued formal education in Australian Migration Law through Victoria University.</p>
                    </div>
                </li>
                <li class="founder-tl-cm-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="180">
                    <div class="founder-tl-cm-dotwrap" aria-hidden="true"><span class="founder-tl-cm-dot"></span></div>
                    <div class="founder-tl-cm-card">
                        <p class="founder-tl-cm-year">Registration</p>
                        <h3>Registered Migration Agent — Professional Recognition</h3>
                        <p>He became a Registered Migration Agent and began offering assistance backed by formal knowledge, compliance, and professional responsibility.</p>
                    </div>
                </li>
                <li class="founder-tl-cm-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="240">
                    <div class="founder-tl-cm-dotwrap" aria-hidden="true"><span class="founder-tl-cm-dot"></span></div>
                    <div class="founder-tl-cm-card">
                        <p class="founder-tl-cm-year">Today</p>
                        <h3>Visawizer — A Platform Built for Migrants</h3>
                        <p>Visawizer is a dedicated education and migration brand focused on simplifying Australian visa pathways for students, professionals, families, and employers.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="founder-section founder-section--band-light" aria-labelledby="founder-philo-title">
        <div class="container">
            <div class="founder-section-head founder-section-head--center">
                <p class="founder-section-kicker">Professional philosophy</p>
                <h2 id="founder-philo-title">Migration Advice with Responsibility</h2>
                <p><strong>Clear Advice. Ethical Guidance. Practical Pathways.</strong> Ankur&apos;s philosophy is shaped by three principles that guide every engagement.</p>
            </div>
            <div class="founder-philo">
                <article class="founder-philo-card">
                    <div class="founder-philo-card__n">1</div>
                    <h3>Every case deserves personal attention</h3>
                    <p>No two migration journeys are the same. Every client brings different goals, background, documentation, timelines, and challenges.</p>
                </article>
                <article class="founder-philo-card">
                    <div class="founder-philo-card__n">2</div>
                    <h3>Clarity is more important than false hope</h3>
                    <p>A strong consultation explains possibilities as well as limitations — so clients understand the reality of their case before taking the next step.</p>
                </article>
                <article class="founder-philo-card">
                    <div class="founder-philo-card__n">3</div>
                    <h3>Documentation decides direction</h3>
                    <p>Visa outcomes often depend on details. From eligibility assessment to document preparation, each step must be accurate and compliant.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="founder-section founder-section--band-dark" aria-labelledby="founder-expertise-title">
        <div class="container">
            <div class="founder-section-head founder-section-head--center">
                <p class="founder-section-kicker">Expertise</p>
                <h2 id="founder-expertise-title">Areas Where Ankur Guides Clients</h2>
            </div>
            <div class="founder-bento">
                <article class="founder-bento__cell" data-aos="fade-up" data-aos-duration="650">
                    <div class="icon" aria-hidden="true"><i class="fa-light fa-graduation-cap"></i></div>
                    <h3>Student Visa &amp; Education Pathways</h3>
                    <p>Helping international students choose the right course, institution, and visa direction based on long-term goals.</p>
                </article>
                <article class="founder-bento__cell" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
                    <div class="icon" aria-hidden="true"><i class="fa-light fa-briefcase"></i></div>
                    <h3>Skilled Migration</h3>
                    <p>Guiding skilled professionals through suitable pathways, including points-tested and state-nominated options.</p>
                </article>
                <article class="founder-bento__cell" data-aos="fade-up" data-aos-duration="650" data-aos-delay="100">
                    <div class="icon" aria-hidden="true"><i class="fa-light fa-building"></i></div>
                    <h3>Employer Sponsored Visas</h3>
                    <p>Supporting applicants and employers with structured guidance for employer-sponsored migration options.</p>
                </article>
                <article class="founder-bento__cell" data-aos="fade-up" data-aos-duration="650" data-aos-delay="150">
                    <div class="icon" aria-hidden="true"><i class="fa-light fa-heart"></i></div>
                    <h3>Partner &amp; Family Visas</h3>
                    <p>Helping families and couples prepare strong, well-documented applications with clarity and care.</p>
                </article>
                <article class="founder-bento__cell" data-aos="fade-up" data-aos-duration="650" data-aos-delay="200">
                    <div class="icon" aria-hidden="true"><i class="fa-light fa-plane"></i></div>
                    <h3>Visitor &amp; Short Stay Visas</h3>
                    <p>Assisting with temporary travel, visitor, and short-stay visa requirements.</p>
                </article>
                <article class="founder-bento__cell" data-aos="fade-up" data-aos-duration="650" data-aos-delay="250">
                    <div class="icon" aria-hidden="true"><i class="fa-light fa-scale-balanced"></i></div>
                    <h3>ART Review &amp; Complex Cases</h3>
                    <p>Structured assistance for review, appeal, or complex migration situations.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="founder-section founder-section--band-light" aria-labelledby="founder-trust-title">
        <div class="container">
            <div class="founder-trust">
                <div class="founder-trust__img">
                    <div class="founder-cm-portrait founder-cm-portrait--inline">
                        <div class="founder-cm-portrait__blob founder-cm-portrait__blob--light" aria-hidden="true"></div>
                        <div class="founder-cm-portrait__frame">
                            <img src="{{ $founderImg('ankur-saini-trust.jpeg') }}" width="640" height="800" alt="Ankur Saini client-focused migration consultation Visawizer Melbourne" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
                <div>
                    <p class="founder-section-kicker" id="founder-trust-title">Why clients trust Ankur</p>
                    <h2 class="mb-0">Built on Lived Experience and Professional Knowledge</h2>
                    <p class="mt-3 mb-0" style="font-size: 1.05rem; line-height: 1.7; color: var(--founder-muted);">Clients choose Ankur and Visawizer because guidance combines personal understanding with professional migration knowledge. Visawizer highlights positive client experiences around responsiveness, clear explanation, timely support, careful application handling, and complex case guidance.</p>
                    <ul class="founder-trust-list">
                        <li>
                            <span class="check" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                            <div><strong>Registered Migration Agent</strong><span>Professional advice backed by registration and compliance.</span></div>
                        </li>
                        <li>
                            <span class="check" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                            <div><strong>Melbourne-Based Practice</strong><span>Guidance from the heart of Australia&apos;s migrant and student ecosystem.</span></div>
                        </li>
                        <li>
                            <span class="check" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                            <div><strong>Client-First Communication</strong><span>Clear explanations, timely updates, and practical next steps.</span></div>
                        </li>
                        <li>
                            <span class="check" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                            <div><strong>Experience Across Visa Categories</strong><span>Support for students, skilled workers, families, employers, and complex cases.</span></div>
                        </li>
                        <li>
                            <span class="check" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                            <div><strong>Personal Understanding of Migration</strong><span>Advice shaped by professional learning and lived experience.</span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="founder-section founder-section--band-dark founder-section--flush-b" aria-labelledby="founder-message-title">
        <div class="container">
            <div class="founder-section-head founder-section-head--center">
                <p class="founder-section-kicker">Founder message</p>
                <h2 id="founder-message-title">A Message from Ankur Saini</h2>
            </div>
            <div class="founder-message-grid" data-aos="fade-up" data-aos-duration="800">
                <div class="founder-message-grid__figure">
                    <div class="founder-cm-portrait founder-cm-portrait--inline">
                        <div class="founder-cm-portrait__blob" aria-hidden="true"></div>
                        <div class="founder-cm-portrait__frame">
                            <img src="{{ $founderImg('ankur-saini-founder-message.jpeg') }}" width="640" height="800" alt="Ankur Saini personal message to clients Visawizer Melbourne Australia" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
                <div class="founder-message-panel">
                    <p>When I began my own journey in Australia, I understood how important the right guidance is. Migration is not only about forms and files. It is about decisions that affect careers, families, finances, and the future.</p>
                    <p>Visawizer was created with one purpose — to make this journey clearer, more transparent, and more achievable for people who dream of building their future in Australia.</p>
                    <p>Whether you are a student planning your education, a skilled professional exploring permanent residency, a family hoping to reunite, or someone facing a complex visa situation, our role is to guide you with honesty, care, and professional responsibility.</p>
                    <p>Your dream deserves direction.<br>Your application deserves attention.<br>Your journey deserves the right guidance.</p>
                    <p class="founder-message__tag">— Ankur Saini</p>
                </div>
            </div>
        </div>
    </section>

    <section class="founder-section founder-section--band-light" aria-labelledby="founder-impact-title">
        <div class="container">
            <div class="founder-section-head founder-section-head--center">
                <p class="founder-section-kicker">Impact</p>
                <h2 id="founder-impact-title">Visawizer at a Glance</h2>
            </div>
            <div class="founder-stats">
                <div class="founder-stat" data-aos="fade-up" data-aos-duration="600">
                    <p class="founder-stat__val"><em>2K+</em></p>
                    <p class="founder-stat__lbl">Successful cases</p>
                </div>
                <div class="founder-stat" data-aos="fade-up" data-aos-duration="600" data-aos-delay="60">
                    <p class="founder-stat__val">Registered</p>
                    <p class="founder-stat__lbl">Migration agent guidance</p>
                </div>
                <div class="founder-stat" data-aos="fade-up" data-aos-duration="600" data-aos-delay="120">
                    <p class="founder-stat__val"><em>Multiple Visa Categories</em></p>
                    <p class="founder-stat__lbl">student, skilled, employer, family, visitor &amp; review matters</p>
                </div>
                <div class="founder-stat" data-aos="fade-up" data-aos-duration="600" data-aos-delay="180">
                    <p class="founder-stat__val">Melbourne-Based</p>
                    <p class="founder-stat__lbl">Australian education &amp; migration services</p>
                </div>
            </div>
        </div>
    </section>

    <section class="founder-cta" aria-labelledby="founder-cta-title">
        <div class="container">
            <div class="founder-cta__grid">
                <div>
                    <p class="founder-eyebrow" style="color: var(--founder-accent-wash);">Start your journey</p>
                    <h2 id="founder-cta-title">Start Your Australian Journey with the Right Guidance</h2>
                    <p>Every successful migration journey begins with the right conversation. Speak with Ankur Saini and the Visawizer team to understand your options, eligibility, documentation needs, and next steps.</p>
                </div>
                <div class="founder-cta__aside">
                    <div class="founder-cta__visual">
                        <div class="founder-cm-portrait founder-cm-portrait--cta">
                            <div class="founder-cm-portrait__frame">
                                <img src="{{ $founderImg('ankur-saini-hero-portrait.jpeg') }}" width="440" height="550" alt="Book consultation with Ankur Saini Visawizer registered migration agent" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                    <div class="founder-cta__actions">
                        <a href="{{ url('book-appointment') }}" class="e-primary-btn has-icon text-center">Book Appointment with Ankur<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span></a>
                        <div class="founder-cta__linkbox">
                            <a href="tel:+61451951561"><i class="fa-regular fa-phone"></i> Call / SMS: 0451 951 561</a>
                            <a href="mailto:info@visawizer.com.au"><i class="fa-regular fa-envelope"></i> Email: info@visawizer.com.au</a>
                        </div>
                        <a href="{{ url('study') }}" class="founder-btn-outline justify-content-center">Explore pathways</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
