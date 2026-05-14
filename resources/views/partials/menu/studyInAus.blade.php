<style>
  :root {
    --navy: #0a1628;
    --gold: #66003f;
    --gold-light: #f5c560;
    --sky: #2196f3;
    --white: #ffffff;
    --muted: #94a3b8;
    --border: rgba(255,255,255,0.08);
    --card-bg: #111e35;
    --col-hover: rgba(232,160,32,0.08);
  }
  .mega-menu {
    position: absolute;
    left: 0; right: 0;
    top: 100%;
    background: #fff;
    border-top: 2px solid var(--theme-color-3);
    box-shadow: 0 24px 60px rgba(0,0,0,0.7);
    z-index: 999;
    animation: megaDrop 0.28s cubic-bezier(0.16,1,0.3,1) both;
  }
  @keyframes megaDrop {
    from { opacity:0; transform: translateY(-12px); }
    to   { opacity:1; transform: translateY(0); }
  }
  .mega-wrapper:hover .mega-menu,
  .mega-menu:hover { display: block; }

  /* ── COLUMNS GRID ── */
  .mega-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 320px;
    gap: 0;
  }

  .mega-col {
    padding: 1rem;
    border-right: 1px solid var(--border);
    transition: background 0.2s;
  }
  .mega-col:last-child { border-right: none; }
  .mega-col:hover { background: var(--col-hover); }

.col-heading {
  font-size: 0.83rem;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--gold);
  margin-bottom: 10px;
  padding-bottom: 7px;
  border-bottom: 1px solid rgb(11 32 61 / 29%);
  display: flex;
  align-items: center;
  gap: 8px;
}
  .col-heading i { font-size: 0.85rem; }

  /* ── MENU LINKS ── */
  .mega-link {
  font-weight: 400;
  margin-bottom: 2px;
  transition: all 0.18s;
  }
  .mega-link i.link-icon {
      width: 30px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--theme-color-3);
      border-radius: 7px;
      font-size: 1rem;
      color: #fff;
      flex-shrink: 0;
      transition: all 0.18s;
  }
  .mega-link:hover {
    color: var(--white);
    transform: translateX(4px);
  }
  .mega-link:hover i.link-icon {
    background: #0b213f;
    color: #fff;
  }
  .mega-link .link-arrow {
    margin-left: auto;
    font-size: 0.65rem;
    color: var(--theme-color-3);
    opacity: 0;
    transition: opacity 0.18s, transform 0.18s;
  }
  .mega-link:hover .link-arrow {
    opacity: 1;
    transform: translateX(3px);
  }

  /* ── FEATURED PANEL ── */
  .featured-panel {
  background: linear-gradient(0deg, #0e265a 0%, #0a1e3a 50%, #0e255a 100%);
  padding: 1rem;
  }
  .featured-panel::before {
    content: '';
    position: absolute;
    top: -60px; right: -60px;
    width: 200px; height: 200px;
    background: radial-gradient(circle, rgba(232,160,32,0.15) 0%, transparent 70%);
    pointer-events: none;
  }
  .featured-panel::after {
    content: '';
    position: absolute;
    bottom: -40px; left: -40px;
    width: 150px; height: 150px;
    background: radial-gradient(circle, rgba(33,150,243,0.12) 0%, transparent 70%);
    pointer-events: none;
  }

  .featured-img-wrap {
    border-radius: 7px;
    overflow: hidden;
    margin-bottom: 1.2rem;
    height: 159px;
    position: relative;
  }
  .featured-img-wrap img {
    width: 100%; height: 100%;
    object-fit: cover;
    filter: brightness(0.85) saturate(1.1);
    transition: transform 0.4s;
  }
  .featured-panel:hover .featured-img-wrap img { transform: scale(1.05); }
.featured-ctas a.btn-gold {
    background: #fff;
    border-radius: 4px;
    padding: 0.7rem 0.7rem !important;
    line-height: 1;
    font-weight: 500;
    font-size: 13px;
}
.featured-badge {
  position: absolute;
  top: 10px;
  left: 10px;
  background: #ffffff;
  color: var(--navy);
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: 3px 9px;
  border-radius: 5px;
}

.featured-heading {
  font-size: 18px;
  font-weight: 600;
  color: var(--white);
  line-height: 1.3;
  margin-bottom: 0.55rem;
}
.featured-text {
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.75);
    line-height: 1.3;
    margin-bottom: 1rem;
}
  .btn-gold:hover {
    background: var(--gold-light);
    color: var(--navy);
    transform: translateY(-1px);
    box-shadow: 0 6px 20px rgba(232,160,32,0.35);
  }

  .btn-outline-gold {
    background: transparent;
    color: var(--theme-color-3);
    border: 1px solid rgba(232,160,32,0.5);
    font-size: 0.78rem;
    font-weight: 600;
    padding: 0.52rem 1.1rem;
    border-radius: 8px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: all 0.2s;
  }
  .btn-outline-gold:hover {
    background: rgba(232,160,32,0.1);
    border-color: var(--theme-color-3);
    color: var(--gold-light);
  }

  .featured-ctas { display: flex; gap: 8px; flex-wrap: wrap; }

  /* ── STATS STRIP ── */
  .mega-footer {
    background: var(--theme-color-3);
    border-top: 1px solid var(--border);
    padding: 0.8rem 2rem;
    display: flex;
    align-items: center;
    gap: 2rem;
  }
  .stat-chip {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.75rem;
    color: #fbfbfb;
  }
  .stat-chip i { color: #fff; font-size: 0.8rem; }
  .stat-chip strong { color: var(--white); font-weight: 600; }

  /* ── DEMO HERO ── */
  .demo-hero {
    padding: 8rem 2rem 4rem;
    text-align: center;
  }
  .demo-hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 5vw, 3.5rem);
    color: var(--white);
    margin-bottom: 1rem;
  }
  .demo-hero h1 span { color: var(--theme-color-3); }
  .demo-hero p { color: var(--muted); font-size: 1.05rem; }

  /* ── OTHER NAV LINKS placeholder ── */
  .nav-other { color: rgba(255,255,255,0.6) !important; }
</style>
<div class="mega-menu">
  <div class="mega-inner">
    <div class="mega-grid">

      <div class="mega-col" style="background: var(--col-hover);">
        <div class="col-heading">
          <i class="fa-solid fa-book-open"></i> Education & Planning
        </div>

        <a href="{{ url('education') }}" class="mega-link">
          <i class="fa-solid fa-school link-icon"></i>
          <span>Education</span>
          <i class="fa-solid fa-arrow-right link-arrow"></i>
        </a>
        <a href="{{ url('professional-year-programs') }}" class="mega-link">
          <i class="fa-solid fa-briefcase link-icon"></i>
          <span>Professional Year Programs</span>
          <i class="fa-solid fa-arrow-right link-arrow"></i>
        </a>
        <a href="{{ url('admission') }}" class="mega-link">
          <i class="fa-solid fa-file-circle-check link-icon"></i>
          <span>Admission</span>
          <i class="fa-solid fa-arrow-right link-arrow"></i>
        </a>
        <a href="{{ url('popular-courses-australia') }}" class="mega-link">
          <i class="fa-solid fa-star link-icon"></i>
          <span>Popular Courses Australia</span>
          <i class="fa-solid fa-arrow-right link-arrow"></i>
        </a>
        <a href="{{ url('career-guidance') }}" class="mega-link">
          <i class="fa-solid fa-compass link-icon"></i>
          <span>Career Guidance</span>
          <i class="fa-solid fa-arrow-right link-arrow"></i>
        </a>
      </div>

      <div class="mega-col">
        <div class="col-heading">
          <i class="fa-solid fa-arrows-rotate"></i> Change & Support
        </div>

        <a href="{{ url('change-of-course') }}" class="mega-link">
          <i class="fa-solid fa-repeat link-icon"></i>
          <span>Change Of Course</span>
          <i class="fa-solid fa-arrow-right link-arrow"></i>
        </a>
        <a href="{{ url('change-of-college-university') }}" class="mega-link">
          <i class="fa-solid fa-building-columns link-icon"></i>
          <span>Change Of College / University</span>
          <i class="fa-solid fa-arrow-right link-arrow"></i>
        </a>
        <a href="{{ url('oshc') }}" class="mega-link">
          <i class="fa-solid fa-heart-pulse link-icon"></i>
          <span>Overseas Student Health Cover</span>
          <i class="fa-solid fa-arrow-right link-arrow"></i>
        </a>

        <!-- Decorative tip box -->
        <div style="margin-top:1.4rem;background:rgba(33,150,243,0.08);border:1px solid rgba(33,150,243,0.2);border-radius:10px;padding:0.85rem 1rem;">
          <div style="font-size:0.7rem;color:var(--theme-color-3);font-weight:600;margin-bottom:4px;display:flex;align-items:center;gap:6px; transform: translateX(18px) scale(1.2);">
            <i class="fa-solid fa-circle-info"></i> OSHC Required
          </div>
          <p style="font-size:0.72rem;color:#000000;line-height:1.5;margin:0;">
            All international students must maintain valid OSHC for the duration of their visa.
          </p>
        </div>
      </div>

      <div class="mega-col">
        <div class="col-heading">
          <i class="fa-solid fa-passport"></i> Student Visas
        </div>

        <a href="{{ url('study-visas') }}" class="mega-link">
          <i class="fa-solid fa-earth-asia link-icon"></i>
          <span>Study Visas (International)</span>
          <i class="fa-solid fa-arrow-right link-arrow"></i>
        </a>
        <a href="{{ url('student-visa-subclass-500') }}" class="mega-link">
          <i class="fa-solid fa-id-card link-icon"></i>
          <span>Student Visa (Subclass 500)</span>
          <i class="fa-solid fa-arrow-right link-arrow"></i>
        </a>
        <a href="{{ url('student-guardian-visa-subclass-590') }}" class="mega-link">
          <i class="fa-solid fa-child link-icon"></i>
          <span>Student Guardian Visa (590)</span>
          <i class="fa-solid fa-arrow-right link-arrow"></i>
        </a>
        <a href="{{ url('training-visa-subclass-407') }}" class="mega-link">
          <i class="fa-solid fa-chalkboard-user link-icon"></i>
          <span>Training Visa (Subclass 407)</span>
          <i class="fa-solid fa-arrow-right link-arrow"></i>
        </a>
      </div>

      <div class="mega-col">
        <div class="col-heading">
          <i class="fa-solid fa-route"></i> Graduate Pathways
        </div>

        <a href="{{ url('temporary-graduate-visa-subclass-485') }}" class="mega-link">
          <i class="fa-solid fa-clock-rotate-left link-icon"></i>
          <span>Temporary Graduate Visa (485)</span>
          <i class="fa-solid fa-arrow-right link-arrow"></i>
        </a>
        <a href="{{ url('post-study-work-visa-485') }}" class="mega-link">
          <i class="fa-solid fa-plane-departure link-icon"></i>
          <span>Post Study Work Visa (485)</span>
          <i class="fa-solid fa-arrow-right link-arrow"></i>
        </a>

        <!-- Popular badge strip -->
        <div style="margin-top:1.4rem;">
          <div style="font-size:0.68rem;color:var(--muted);font-weight:600;letter-spacing:.08em;text-transform:uppercase;margin-bottom:.7rem;">Most Applied</div>
          <div class="d-flex flex-wrap gap-2">
            <span style="background:rgba(232,160,32,0.12);border:1px solid rgba(232,160,32,0.3);color:var(--theme-color-3);font-size:0.68rem;padding:3px 10px;border-radius:4px;font-weight:600;">Subclass 500</span>
            <span style="background:rgba(232,160,32,0.12);border:1px solid rgba(232,160,32,0.3);color:var(--theme-color-3);font-size:0.68rem;padding:3px 10px;border-radius:4px;font-weight:600;">Subclass 485</span>
            <span style="background:rgba(232,160,32,0.12);border:1px solid rgba(232,160,32,0.3);color:var(--theme-color-3);font-size:0.68rem;padding:3px 10px;border-radius:4px;font-weight:600;">OSHC</span>
          </div>
        </div>
      </div>

      <div class="featured-panel">
        <div>
          <div class="featured-img-wrap">
            <img src="{{ asset('assets/images/services/image-43.webp') }}" alt="Students studying in Australia">
            <span class="featured-badge">✦ Expert Guidance</span>
          </div>

          <div class="featured-heading">
            Start Your Australia Study Journey
          </div>
          <div class="featured-text">
            From choosing the right course to landing your student visa and planning your post-study work rights — we've helped thousands of international students navigate every step of the Australian education journey.
          </div>
        </div>

        <div class="featured-ctas">
          <a href="{{ url('book-appointment') }}" class="btn-gold">
            <i class="fa-solid fa-calendar-check"></i> Book Appointment
          </a>
        </div>
      </div>

    </div>

    <div class="mega-footer">
      <div class="stat-chip"><i class="fa-solid fa-users"></i><span><strong>10,000+</strong> Students Placed</span></div> |
      <div class="stat-chip"><i class="fa-solid fa-university"></i><span><strong>200+</strong> Partner Universities</span></div> |
      <div class="stat-chip"><i class="fa-solid fa-trophy"></i><span><strong>98%</strong> Visa Success Rate</span></div> |
      <div class="stat-chip"><i class="fa-solid fa-headset"></i><span><strong>24/7</strong> Expert Support</span></div> |
      <div class="ms-auto">
        <a href="{{ url('study') }}" style="color:#fff;font-size:0.75rem;text-decoration:none;font-weight:600;display:flex;align-items:center;gap:6px;">
          View All Services <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>

  </div>
</div>