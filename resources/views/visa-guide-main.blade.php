@extends('layouts.frontend')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/visa-guide.css') }}">
@endpush

@section('content')
    <div class="visa-guide-page">
    <!-- HERO SECTION -->
    <section class="vw-hero">
      <div class="vw-hero__bg">
        <div class="vw-container">
          <div class="vw-hero-grid">
            <div>
              <div class="vw-eyebrow">Australian Visa Guide</div>
              <h1>Find the Right Australian Visa Pathway with Clarity</h1>
              <div class="w-line"></div>
              <p>
                Studying, working, visiting, sponsoring, joining family, or planning permanent residency in Australia can feel confusing. This guide gives you a simple starting point to understand major visa pathways and speak with Visawizer for a tailored assessment.
              </p>
              <div class="vw-btn-row">
                <a class="vw-btn vw-btn-primary" href="{{ url('book-appointment') }}">Book a Visa Consultation</a>
                <a class="vw-btn vw-btn-secondary" href="#visa-categories">Explore Visa Categories</a>
              </div>
            </div>

            <div class="vw-hero-card">
              <div class="vw-finder-box">
                <h3>Not sure where to start?</h3>
                <p class="text-dark">Choose your goal and move to the most relevant visa guide.</p>
                <div class="vw-finder-list">
                  <a class="vw-finder-item" href="#study-visa">
                    <span class="vw-icon">01</span>
                    <span><strong>I want to study in Australia</strong><br />Student, guardian, training and graduate visa pathways.</span>
                  </a>
                  <a class="vw-finder-item" href="#skilled-visa">
                    <span class="vw-icon">02</span>
                    <span><strong>I want to work or settle</strong><br />Skilled, regional and employer sponsored pathways.</span>
                  </a>
                  <a class="vw-finder-item" href="#family-visa">
                    <span class="vw-icon">03</span>
                    <span><strong>I want to join family</strong><br />Partner, parent, child and family visa options.</span>
                  </a>
                  <a class="vw-finder-item" href="#appeals">
                    <span class="vw-icon">04</span>
                    <span><strong>I have a complex visa issue</strong><br />Refusals, appeals, protection and review matters.</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="vw-container vw-hero-trust-outer">
        <div class="vw-trust-strip">
          <div class="vw-trust-item"><strong>Melbourne</strong><span>Based migration guidance</span></div>
          <div class="vw-trust-item"><strong>MARN</strong><span>Registered agent support</span></div>
          <div class="vw-trust-item"><strong>Multiple</strong><span>Visa categories covered</span></div>
          <div class="vw-trust-item"><strong>Clear</strong><span>Step-by-step process</span></div>
        </div>
      </div>
    </section>

    <!-- INTRO SECTION -->
    <section class="vw-section vw-section-small vw-section--under-hero vw-section--alt-light">
      <div class="vw-container vw-intro-grid">
        <div class="vw-intro-copy">
          <div class="vw-eyebrow">Visa Guide Hub</div>
          <h2 class="vw-heading">One Guide. Many Australian Pathways.</h2>
          <div class="b-line"></div>
          <p class="vw-subheading">
            Australia offers different visa options depending on your purpose, background, skills, family situation, location, employer sponsorship and future plans. The Visawizer Visa Guide is designed to make the first step simpler: understand the broad pathway, then speak to a professional for case-specific advice.
          </p>
        </div>
        <figure class="vw-intro-photo">
          <img
            src="{{ asset('assets/imgs/study/study-visas/section4.webp') }}"
            alt="Visawizer visa guide — understanding Australian visa pathways and next steps."
            width="960"
            height="720"
            loading="lazy"
            decoding="async"
          />
        </figure>
      </div>
    </section>

    <!-- VISA CATEGORIES -->
    <section class="vw-section vw-section--alt-dark" id="visa-categories">
      <div class="vw-container">
        <div class="vw-center">
          <div class="vw-eyebrow">Explore by Category</div>
          <h2 class="vw-heading">Choose the Visa Guide That Matches Your Goal</h2>
          <div class="w-line m-auto"></div>
          <p class="vw-subheading pt-3">
            Start with the category closest to your objective. Each guide can be expanded into a dedicated page with eligibility pointers, process, documents, timelines, FAQs and booking CTA.
          </p>
        </div>

        <div class="vw-card-grid">
          <article class="vw-guide-card" id="study-visa">
            <span class="vw-icon2"><i class="fa fa-graduation-cap"></i></span>
            <h3>Study in Australia</h3>
            <p>For international students planning to study, change course, extend their student visa, explore OSHC, or move into graduate opportunities after study.</p>
            <div class="vw-tag-list">
              <span class="vw-tag">Subclass 500</span>
              <span class="vw-tag">Subclass 590</span>
              <span class="vw-tag">Subclass 407</span>
              <span class="vw-tag">Subclass 485</span>
            </div>
            <a class="vw-link" href="{{ route('study.index') }}">View Study Visa Guide →</a>
          </article>

          <article class="vw-guide-card" id="visitor-visa">
            <span class="vw-icon2"><i class="fa fa-plane-departure"></i></span>
            <h3>Visitor & Short Stay</h3>
            <p>For people who wish to visit Australia for tourism, family visits, business visitor activities, transit, or eligible working holiday travel.</p>
            <div class="vw-tag-list">
              <span class="vw-tag">Subclass 600</span>
              <span class="vw-tag">Subclass 601</span>
              <span class="vw-tag">Subclass 651</span>
              <span class="vw-tag">Subclass 771</span>
            </div>
            <a class="vw-link" href="{{ route('visitor-short-stay.index') }}">View Visitor Visa Guide →</a>
          </article>

          <article class="vw-guide-card" id="skilled-visa">
            <span class="vw-icon2"><i class="fa fa-user-tie"></i></span>
            <h3>Skilled Migration</h3>
            <p>For qualified professionals exploring points-tested migration, state nomination, regional pathways, permanent residency and long-term settlement options.</p>
            <div class="vw-tag-list">
              <span class="vw-tag">Subclass 189</span>
              <span class="vw-tag">Subclass 190</span>
              <span class="vw-tag">Subclass 491</span>
              <span class="vw-tag">Subclass 191</span>
            </div>
            <a class="vw-link" href="{{ route('work-skilled-migration.index') }}">View Skilled Visa Guide →</a>
          </article>

          <article class="vw-guide-card" id="employer-sponsored">
            <span class="vw-icon2"><i class="fa fa-briefcase"></i></span>
            <h3>Employer Sponsored Visa</h3>
            <p>For skilled workers and Australian employers looking for structured pathways through sponsorship, nomination, regional sponsorship or permanent employer options.</p>
            <div class="vw-tag-list">
              <span class="vw-tag">SID / 482</span>
              <span class="vw-tag">Subclass 186</span>
              <span class="vw-tag">Subclass 494</span>
              <span class="vw-tag">DAMA</span>
            </div>
            <a class="vw-link" href="{{ route('work-skilled-migration.index') }}">View Employer Visa Guide →</a>
          </article>

          <article class="vw-guide-card" id="family-visa">
            <span class="vw-icon2"><i class="fa fa-heart"></i></span>
            <h3>Partner & Family Visa</h3>
            <p>For partners, spouses, parents, children and eligible relatives who want to reunite with family or build their life together in Australia.</p>
            <div class="vw-tag-list">
              <span class="vw-tag">Partner</span>
              <span class="vw-tag">Parent</span>
              <span class="vw-tag">Child</span>
              <span class="vw-tag">Family</span>
            </div>
            <a class="vw-link" href="{{ route('family-visas.index') }}">View Family Visa Guide →</a>
          </article>

          <article class="vw-guide-card" id="appeals">
            <span class="vw-icon2"><i class="fa fa-scale-balanced"></i></span>
            <h3>Protection, Appeals & Complex Matters</h3>
            <p>For applicants facing refusal, cancellation concerns, review pathways, humanitarian issues, protection matters or complex immigration circumstances.</p>
            <div class="vw-tag-list">
              <span class="vw-tag">ART Review</span>
              <span class="vw-tag">Protection</span>
              <span class="vw-tag">Humanitarian</span>
              <span class="vw-tag">Complex Cases</span>
            </div>
            <a class="vw-link" href="{{ route('protection-appeals-humanitarian.index') }}">View Complex Case Guide →</a>
          </article>
        </div>
      </div>
    </section>

    <!-- DECISION SUPPORT -->
    <section class="vw-section vw-decision vw-section--alt-light" aria-labelledby="visa-decision-heading">
      <div class="vw-container vw-decision-inner">
        <header class="vw-decision-header vw-center">
          <div class="vw-eyebrow">Decision Support</div>
          <h2 class="vw-heading" id="visa-decision-heading">Which Visa Direction May Suit You?</h2>
          <div class="b-line m-auto"></div>
          <p class="vw-subheading pt-3">
            This section is designed as a simple starting point. Your actual pathway depends on eligibility, documents, occupation, sponsor, English ability, location, relationship evidence, financial position and immigration history.
          </p>
        </header>

        <div class="vw-decision-layout">
          <div class="vw-decision-left">
            <figure class="vw-decision-photo">
              <img
                src="{{ asset('assets/imgs/study/study-visas/hero-band.webp') }}"
                alt="Australian visa planning: reviewing documents and next steps for your pathway."
                width="960"
                height="720"
                loading="lazy"
                decoding="async"
              />
            </figure>
            <aside class="vw-decision-aside" aria-label="Pathway assessment call to action">
              <div class="vw-decision-aside-card">
                <span class="vw-decision-aside-kicker">First step</span>
                <h3 class="vw-decision-aside-title">Start with your purpose, not the subclass number.</h3>
                <p class="vw-decision-aside-text">
                  Many applicants begin with a visa name, but the better first question is: what are you trying to achieve in Australia? Study, work, visit, sponsor, join family, appeal a decision or plan permanent residence?
                </p>
                <div class="vw-decision-aside-meta">
                  <span>MARN-registered guidance</span>
                  <span>Melbourne-based team</span>
                </div>
                <a class="vw-btn vw-btn-primary vw-decision-aside-btn" href="{{ url('book-appointment') }}">Get Pathway Assessment</a>
              </div>
            </aside>
          </div>

          <ol class="vw-path-list">
            <li class="vw-path-item">
              <span class="vw-path-num" aria-hidden="true">01</span>
              <div class="vw-path-body">
                <strong class="vw-path-title">I want to study</strong>
                <p class="vw-path-desc">Explore student visa, course admission, OSHC, genuine student requirements, financial evidence, course change support and post-study planning.</p>
              </div>
            </li>
            <li class="vw-path-item">
              <span class="vw-path-num" aria-hidden="true">02</span>
              <div class="vw-path-body">
                <strong class="vw-path-title">I have skills</strong>
                <p class="vw-path-desc">Explore skilled migration through occupation assessment, points, English score, state nomination, regional options and permanent residency planning.</p>
              </div>
            </li>
            <li class="vw-path-item">
              <span class="vw-path-num" aria-hidden="true">03</span>
              <div class="vw-path-body">
                <strong class="vw-path-title">I have an employer</strong>
                <p class="vw-path-desc">Explore employer sponsored options where an Australian employer may nominate or sponsor you for an eligible role, depending on visa requirements.</p>
              </div>
            </li>
            <li class="vw-path-item">
              <span class="vw-path-num" aria-hidden="true">04</span>
              <div class="vw-path-body">
                <strong class="vw-path-title">I want to visit</strong>
                <p class="vw-path-desc">Explore short stay pathways for tourism, family visits, business visitor purposes, transit and eligible working holiday arrangements.</p>
              </div>
            </li>
            <li class="vw-path-item">
              <span class="vw-path-num" aria-hidden="true">05</span>
              <div class="vw-path-body">
                <strong class="vw-path-title">I have family in Australia</strong>
                <p class="vw-path-desc">Explore partner, parent, child and eligible family visa options with a focus on relationship evidence, sponsorship and long-term planning.</p>
              </div>
            </li>
            <li class="vw-path-item">
              <span class="vw-path-num" aria-hidden="true">06</span>
              <div class="vw-path-body">
                <strong class="vw-path-title">I received a refusal</strong>
                <p class="vw-path-desc">Explore review and appeal options, deadlines, decision records, evidence gaps and professional support for complex visa matters.</p>
              </div>
            </li>
          </ol>
        </div>
      </div>
    </section>

    <!-- PROCESS -->
    <section class="vw-section vw-section--alt-dark">
      <div class="vw-container">
        <div class="vw-center">
          <div class="vw-eyebrow">Our Guidance Process</div>
          <h2 class="vw-heading">From Confusion to a Clear Visa Action Plan</h2>
          <div class="w-line m-auto"></div>
          <p class="vw-subheading pt-3">
            Visawizer helps applicants move through the visa journey with structured guidance, document clarity and transparent communication.
          </p>
        </div>

        <div class="vw-process-grid">
          <div class="vw-process-card">
            <h3>Understand Goal</h3>
            <p>We begin by understanding your purpose, background, location, timeline and long-term plan for Australia.</p>
          </div>
          <div class="vw-process-card">
            <h3>Check Eligibility</h3>
            <p>Your profile is reviewed against relevant visa pathways, eligibility factors and potential risk areas.</p>
          </div>
          <div class="vw-process-card">
            <h3>Plan Documents</h3>
            <p>You receive a clear document direction based on your visa type, case history and evidence requirements.</p>
          </div>
          <div class="vw-process-card">
            <h3>Prepare Application</h3>
            <p>We support accurate preparation, careful review and structured submission planning.</p>
          </div>
          <div class="vw-process-card">
            <h3>Track & Respond</h3>
            <p>After lodgement, we help manage updates, requests for information and next-step communication.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CHECKLIST -->
    <section class="vw-section vw-section-small vw-section--alt-light">
      <div class="vw-container">
        <div class="vw-checklist-wrap">
          <div class="vw-checklist-copy">
            <div class="vw-eyebrow">Document Readiness</div>
            <h2 class="vw-heading vw-checklist-heading">Good visa planning starts with organised evidence.</h2>
            <p class="vw-checklist-text">
              Every visa category has specific requirements, but most applications become stronger when applicants prepare early, keep records organised and avoid last-minute document gaps.
            </p>
            <div class="vw-btn-row">
              <a class="vw-btn vw-btn-primary vw-checklist-btn" href="{{ url('contact-us') }}">Request Document Guidance</a>
            </div>
          </div>
          <ul class="vw-check-list">
            <li>Identity and passport records</li>
            <li>Education and qualification documents</li>
            <li>Employment history and references</li>
            <li>Financial capacity evidence</li>
            <li>Relationship and family evidence</li>
            <li>Health and character information</li>
            <li>Previous visa and refusal history</li>
            <li>Sponsor or employer documents</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- COMPARISON -->
    <section class="vw-section vw-compare vw-section--alt-dark" aria-labelledby="visa-compare-heading">
      <div class="vw-container">
        <header class="vw-center vw-compare-header">
          <div class="vw-eyebrow">Quick Comparison</div>
          <h2 class="vw-heading" id="visa-compare-heading">Visa Pathways at a Glance</h2>
          <div class="w-line m-auto"></div>
          <p class="vw-subheading pt-3">
            Use these pathway snapshots to understand the broad purpose of each option before moving into detailed visa-specific pages.
          </p>
        </header>

        <div class="vw-compare-table-wrap">
          <table class="vw-compare-table">
            <thead>
              <tr>
                <th scope="col">Visa Pathway</th>
                <th scope="col">Best For</th>
                <th scope="col">Common Focus Areas</th>
                <th scope="col">Recommended Next Step</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Visa Pathway">
                  <div class="vw-compare-path">
                    <span class="vw-compare-num">01</span>
                    <strong>Student Visa</strong>
                  </div>
                </td>
                <td data-label="Best For">International students and course applicants</td>
                <td data-label="Common Focus Areas">
                  <div class="vw-compare-tags">
                    <span>Course selection</span>
                    <span>GS requirement</span>
                    <span>Funds</span>
                    <span>OSHC</span>
                    <span>Study history</span>
                  </div>
                </td>
                <td data-label="Next Step"><span class="vw-compare-next">Course and eligibility assessment</span></td>
              </tr>
              <tr>
                <td data-label="Visa Pathway">
                  <div class="vw-compare-path">
                    <span class="vw-compare-num">02</span>
                    <strong>Skilled Migration</strong>
                  </div>
                </td>
                <td data-label="Best For">Qualified professionals planning PR or regional migration</td>
                <td data-label="Common Focus Areas">
                  <div class="vw-compare-tags">
                    <span>Occupation</span>
                    <span>Skills assessment</span>
                    <span>Points</span>
                    <span>English</span>
                    <span>Nomination</span>
                  </div>
                </td>
                <td data-label="Next Step"><span class="vw-compare-next">Profile and points review</span></td>
              </tr>
              <tr>
                <td data-label="Visa Pathway">
                  <div class="vw-compare-path">
                    <span class="vw-compare-num">03</span>
                    <strong>Employer Sponsored</strong>
                  </div>
                </td>
                <td data-label="Best For">Applicants with an Australian employer or job pathway</td>
                <td data-label="Common Focus Areas">
                  <div class="vw-compare-tags">
                    <span>Occupation</span>
                    <span>Employer nomination</span>
                    <span>Work experience</span>
                    <span>Salary</span>
                    <span>Compliance</span>
                  </div>
                </td>
                <td data-label="Next Step"><span class="vw-compare-next">Employer and role suitability check</span></td>
              </tr>
              <tr>
                <td data-label="Visa Pathway">
                  <div class="vw-compare-path">
                    <span class="vw-compare-num">04</span>
                    <strong>Partner &amp; Family</strong>
                  </div>
                </td>
                <td data-label="Best For">Partners, parents, children and eligible family members</td>
                <td data-label="Common Focus Areas">
                  <div class="vw-compare-tags">
                    <span>Relationship evidence</span>
                    <span>Sponsorship</span>
                    <span>Family records</span>
                    <span>Timelines</span>
                  </div>
                </td>
                <td data-label="Next Step"><span class="vw-compare-next">Evidence planning session</span></td>
              </tr>
              <tr>
                <td data-label="Visa Pathway">
                  <div class="vw-compare-path">
                    <span class="vw-compare-num">05</span>
                    <strong>Visitor Visa</strong>
                  </div>
                </td>
                <td data-label="Best For">Tourists, family visitors and business visitors</td>
                <td data-label="Common Focus Areas">
                  <div class="vw-compare-tags">
                    <span>Purpose of visit</span>
                    <span>Funds</span>
                    <span>Home ties</span>
                    <span>Travel history</span>
                  </div>
                </td>
                <td data-label="Next Step"><span class="vw-compare-next">Visit purpose and document check</span></td>
              </tr>
              <tr>
                <td data-label="Visa Pathway">
                  <div class="vw-compare-path">
                    <span class="vw-compare-num">06</span>
                    <strong>Appeals &amp; Complex Cases</strong>
                  </div>
                </td>
                <td data-label="Best For">Applicants with refusal, cancellation or protection concerns</td>
                <td data-label="Common Focus Areas">
                  <div class="vw-compare-tags">
                    <span>Decision record</span>
                    <span>Deadlines</span>
                    <span>Evidence gaps</span>
                    <span>Review options</span>
                  </div>
                </td>
                <td data-label="Next Step"><span class="vw-compare-next">Urgent case review</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- WHY VISAWIZER -->
    <section class="vw-section vw-why vw-section--alt-light" aria-labelledby="visa-why-heading">
      <div class="vw-container">
        <header class="vw-center vw-why-header">
          <div class="vw-eyebrow">Why Visawizer</div>
          <h2 class="vw-heading" id="visa-why-heading">Guidance Designed Around Your Real Situation</h2>
          <div class="b-line m-auto"></div>
          <p class="vw-subheading pt-3">
            Visa decisions are personal. Visawizer focuses on clarity, case understanding, careful documentation and honest pathway planning.
          </p>
        </header>

        <div class="vw-why-layout">
          <figure class="vw-why-photo">
            <img
              src="{{ asset('assets/imgs/study/study-visas/final-bg.webp') }}"
              alt="Visawizer migration guidance tailored to your visa situation and goals."
              width="960"
              height="1080"
              loading="lazy"
              decoding="async"
            />
          </figure>

          <div class="vw-why-grid">
            <div class="vw-why-card">
              <span class="vw-icon">✓</span>
              <h3>Registered Guidance</h3>
              <p>Speak with a team connected to registered migration agent support for immigration matters.</p>
            </div>
            <div class="vw-why-card">
              <span class="vw-icon">✓</span>
              <h3>Clear Communication</h3>
              <p>Understand your options, process, documents and possible challenges in simple language.</p>
            </div>
            <div class="vw-why-card">
              <span class="vw-icon">✓</span>
              <h3>Case-Specific Review</h3>
              <p>Your visa direction is assessed according to your background, evidence and immigration history.</p>
            </div>
            <div class="vw-why-card">
              <span class="vw-icon">✓</span>
              <h3>End-to-End Support</h3>
              <p>From consultation to document planning, application preparation and follow-up support.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- RESOURCE LIBRARY -->
    <section class="vw-section vw-section--alt-dark">
      <div class="vw-container">
        <div class="vw-center">
          <div class="vw-eyebrow">Guide Library</div>
          <h2 class="vw-heading">Helpful Visa Resources for Applicants</h2>
          <div class="w-line m-auto"></div>
          <p class="vw-subheading pt-3">
            These resource cards can be connected to blogs, downloadable checklists or detailed service pages to improve SEO and user engagement.
          </p>
        </div>

        <div class="vw-resource-grid">
          <article class="vw-resource-card">
            <div>
              <h3>Student Visa Readiness Checklist</h3>
              <p>A practical guide for course selection, funds, OSHC, academic records and application preparation.</p>
            </div>
            <a class="vw-link" href="{{ route('blogs.index') }}">Read Guide →</a>
          </article>
          <article class="vw-resource-card">
            <div>
              <h3>Skilled Migration Profile Review</h3>
              <p>Understand how occupation, points, English, skills assessment and nomination can shape your pathway.</p>
            </div>
            <a class="vw-link" href="{{ route('blogs.index') }}">Read Guide →</a>
          </article>
          <article class="vw-resource-card">
            <div>
              <h3>Partner Visa Evidence Planning</h3>
              <p>Learn how applicants can organise relationship history, communication records, financial evidence and social proof.</p>
            </div>
            <a class="vw-link" href="{{ route('blogs.index') }}">Read Guide →</a>
          </article>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="vw-section vw-faq vw-section--alt-light">
      <div class="vw-container">
        <div class="vw-faq-grid">
          <div class="vw-faq-intro">
            <div class="vw-eyebrow">FAQs</div>
            <h2 class="vw-heading">Common Questions Before Choosing a Visa Pathway</h2>
            <p class="vw-subheading">
              These FAQs are written for the guide landing page. Each detailed visa page should have its own dedicated FAQ section based on that visa category.
            </p>
            <div class="vw-btn-row">
              <a class="vw-btn vw-btn-primary" href="{{ route('faq') }}">View All FAQs</a>
            </div>
            <figure class="vw-faq-photo">
              <img
                src="{{ asset('assets/imgs/study/study-visas/sidebar.webp') }}"
                alt="Visawizer consultant answering common Australian visa questions."
                width="960"
                height="720"
                loading="lazy"
                decoding="async"
              />
            </figure>
          </div>

          <div class="vw-faq-list">
            <div class="vw-faq-item">
              <h3>Can this guide tell me exactly which visa I should apply for?</h3>
              <p>No. This guide helps you understand broad pathways. A proper recommendation requires review of your individual profile, documents and immigration history.</p>
            </div>
            <div class="vw-faq-item">
              <h3>Should I book a consultation before preparing documents?</h3>
              <p>Yes. Early consultation can help you avoid preparing irrelevant documents and identify missing evidence before the application stage.</p>
            </div>
            <div class="vw-faq-item">
              <h3>Can Visawizer help if my visa was refused?</h3>
              <p>Yes. If you have received a refusal or cancellation notice, seek guidance quickly because review and appeal matters may have strict deadlines.</p>
            </div>
            <div class="vw-faq-item">
              <h3>Can one visa pathway lead to permanent residency?</h3>
              <p>Some pathways may support longer-term settlement planning, while others are temporary. The correct strategy depends on your circumstances and visa conditions.</p>
            </div>
            <div class="vw-faq-item">
              <h3>Does Visawizer support both onshore and offshore applicants?</h3>
              <p>Yes. Visawizer supports applicants who are already in Australia as well as applicants planning their journey from overseas.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FINAL CTA -->
    <section class="vw-final-cta" aria-labelledby="visa-final-cta-heading">
      <div class="vw-container">
        <div class="vw-final-cta-box">
          <div class="vw-final-cta-copy">
            <h2 id="visa-final-cta-heading">Ready to understand your Australian visa options?</h2>
            <p>
              Book a consultation with Visawizer and get a clearer view of your eligibility, documents, risks, timelines and next steps.
            </p>
            <div class="w-line"></div>
            <p class="vw-note">
              Disclaimer: This page provides general information only and does not constitute immigration advice. Visa criteria, charges, conditions and processing arrangements can change. Always seek advice based on your specific circumstances.
            </p>
            <div class="vw-btn-row">
              <a class="vw-btn vw-btn-primary" href="{{ url('book-appointment') }}">Book Appointment</a>
              <a class="vw-btn vw-btn-secondary" href="tel:+61451951561">Call / SMS: 0451 951 561</a>
            </div>
          </div>
          <figure class="vw-final-cta-photo">
            <img
              src="{{ asset('assets/imgs/study/study-visas/hero-bg.webp') }}"
              alt="Book a Visawizer consultation to understand your Australian visa options."
              width="960"
              height="720"
              loading="lazy"
              decoding="async"
            />
          </figure>
        </div>
      </div>
    </section>
    </div>
@endsection